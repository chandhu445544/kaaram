<?php
/*
Plugin Name: WP All Import - WooCommerce Multistore Add-On
Plugin URI: http://www.lykkemedia.no
Description: Import to WooCommerce. Adds integration with WooCommerce Multistore. Requires WP All Import.
Version: 2.0.2
Author: Lykke Media AS
WC tested up to: 3.9.2
*/

final class WPAI_WM_Add_On {

	/**
	 * WPAI options for the current import
	 */
	private $_options = null;

	public function __construct() {
		add_action( 'pmwi_tab_header', array( $this, 'pmwi_tab_header' ) );
		add_action( 'pmwi_tab_content', array( $this, 'pmwi_tab_content' ) );
		add_filter( 'WOO_MSTORE_admin_product\define_fields\product_fields', array( $this, 'product_fields' ) );
		add_filter( 'pmxi_options_options', array( $this, 'pmxi_options_options' ) );

		add_action( 'wp_all_import_make_product_simple', array( $this, 'wp_all_import_make_product_simple' ), PHP_INT_MAX );
		add_action( 'pmxi_saved_post', array( $this, 'pmxi_saved_post' ), PHP_INT_MAX );
		add_filter( 'woocommerce_product_type_query', array( $this, 'woocommerce_product_type_query' ), 10, 2 );

		add_filter( 'WOO_MSTORE_admin_product/master_product_meta_to_update', array( $this, 'master_product_meta_to_update' ) );
		add_filter( 'WOO_MSTORE_admin_product/is_product_inherit_updates', array( $this, 'is_product_inherit_updates' ) );
		add_filter( 'WOO_MSTORE_admin_product/is_product_stock_synchronize', array( $this, 'is_product_stock_synchronize' ) );
	}

	public function pmwi_tab_header() {
		global $WOO_MSTORE;

		$WOO_MSTORE->product_interface->add_multistore_tab();
	}

	public function pmwi_tab_content() {
		global $WOO_MSTORE;

		$WOO_MSTORE->product_interface->add_multistore_panel();
	}

	public function product_fields( $product_fields ) {
		if ( ! doing_action('pmwi_tab_content') ) {
			return $product_fields;
		}

		$options = $this->get_options();

		foreach ( $product_fields as $index => $product_field ) {
			if ( isset( $product_field['id'], $options[ $product_field['id'] ] ) ) {
				$value = $options[ $product_field['id'] ];

				$product_fields[ $index ]['value']   = $value;
				$product_fields[ $index ]['checked'] = ( 'yes' == $value );
			}
		}

		return $product_fields;
	}

	public function pmxi_options_options( $options ) {
		foreach ( $this->get_default_import_options() as $option_name => $default_value ) {
			if ( isset( $_POST['is_submitted'] ) ) {
				$value = ( isset( $_POST[ $option_name ] ) && in_array( $_POST[ $option_name ], array('yes', 'no') ) )
					? $_POST[ $option_name ]
					: $default_value;
			} else {
				$value = isset( $options[ $option_name ] ) ? $options[ $option_name ] : $default_value;
			}
			$options[ $option_name ] = $value;
		}

		return $options;
	}

	public function wp_all_import_make_product_simple( $product_id ) {
		do_action( 'WOO_MSTORE_admin_product/process_product', $product_id );
	}

	public function pmxi_saved_post( $product_id ) {
		if ( $product = wc_get_product( $product_id ) ) {
			if ( $product_parent_id = $product->get_parent_id() ) {
				$product_id = $product->get_parent_id();
			}

			do_action( 'WOO_MSTORE_admin_product/process_product', $product_id );
		}
	}

	public function woocommerce_product_type_query( $product_type, $product_id ) {
		if ( doing_action( 'WOO_MSTORE_admin_product/process_product' ) ) {
			global $wpdb;

			$query = "SELECT p.post_type AS post_type, t.name AS product_type
			FROM {$wpdb->posts} AS p
			JOIN {$wpdb->term_relationships} AS tr ON tr.object_id = p.ID
			JOIN {$wpdb->term_taxonomy} AS tt ON tr.term_taxonomy_id = tt.term_taxonomy_id
			JOIN {$wpdb->terms} AS t ON tt.term_id = t.term_id
			WHERE p.ID={$product_id} AND tt.taxonomy='product_type'";
			$result = $wpdb->get_row( $query );

			if ( empty( $result->post_type ) ) {
				$product_type = false;
			} elseif ( 'product_variation' == $result->post_type ) {
				$product_type = 'variation';
			} else {
				$product_type = $result->product_type;
			}
		}

		return $product_type;
	}

	public function master_product_meta_to_update( $meta_data ) {
		if ( doing_filter('WOO_MSTORE_admin_product/process_product') ) {
			$options = $this->get_options(); // for the admin interface.
			
			foreach ( $options as $key => $value ) {
				if ( preg_match( '/^_woonet_publish_to_\d+$/', $key ) ) {
					$meta_data[ $key ] = $value;
				}
			}
		}

		return $meta_data;
	}

	public function is_product_inherit_updates( $result ) {
		if ( doing_filter('WOO_MSTORE_admin_product/process_product') ) {
			$options = $this->get_options();

			if ( isset( $options[ '_woonet_publish_to_' . get_current_blog_id() . '_child_inheir' ] ) ) {
				$result = $options[ '_woonet_publish_to_' . get_current_blog_id() . '_child_inheir' ];
			} elseif ( isset( $options['_woonet_child_inherit_updates'] ) ) {
				$result = $options['_woonet_child_inherit_updates'];
			}
		}

		return $result;
	}

	public function is_product_stock_synchronize( $result ) {
		if ( doing_filter('WOO_MSTORE_admin_product/process_product') ) {
			$options = $this->get_options();

			if ( isset( $options[ '_woonet_' . get_current_blog_id() . '_child_stock_synchronize' ] ) ) {
				$result = $options[ '_woonet_' . get_current_blog_id() . '_child_stock_synchronize' ];
			} elseif ( isset( $options['_woonet_child_stock_synchronize'] ) ) {
				$result = $options['_woonet_child_stock_synchronize'];
			}
		}

		return $result;
	}

	private function get_default_import_options() {
		static $default_import_options = array();

		if ( ! empty( $default_import_options ) ) {
			return $default_import_options;
		}

		$option_names  = array('_woonet_publish_to_%d', '_woonet_publish_to_%d_child_inheir', '_woonet_%d_child_stock_synchronize');

		$blog_ids = WOO_MSTORE_functions::get_active_woocommerce_blog_ids();
		foreach ( $blog_ids as $blog_id ) {
			foreach ( $option_names as $option_name ) {
				$default_import_options[ sprintf( $option_name, $blog_id ) ] = 'no';
			}
		}

		$default_import_options['woonet_toggle_all_sites']                     = 'no';
		$default_import_options['woonet_toggle_child_product_inherit_updates'] = 'no';

		return $default_import_options;
	}

	/**
	 * Get import options from session
	 *
	 */
	private function get_options() {
		if ( $this->_options !== null ) {
			return $this->_options;
		}

		if ( !empty(PMXI_Plugin::$session) ) {
			$this->_options = PMXI_Plugin::$session->options; // not available when running via cron.
		} else {
			$import = new PMXI_Import_Record(); 
			$options = $import->getById( $_GET['import_id'] );
			$this->_options = $options->options;
		}

		return $this->_options;
	}
}

new WPAI_WM_Add_On();
