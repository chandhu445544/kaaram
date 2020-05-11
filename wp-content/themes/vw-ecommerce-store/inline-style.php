<?php
	
	/*---------------------------First highlight color-------------------*/

	$vw_ecommerce_store_first_color = get_theme_mod('vw_ecommerce_store_first_color');

	$custom_css = '';

	if($vw_ecommerce_store_first_color != false){
		$custom_css .='button.product-btn, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, span.cart-value, .search-box i, .serach_inner button, .products li:hover span.onsale, input[type="submit"], #footer .tagcloud a:hover, #sidebar .custom-social-icons i, #footer .custom-social-icons i, #footer-2, .scrollup i, #sidebar h3, .pagination .current, .pagination a:hover, #sidebar .tagcloud a:hover, #comments input[type="submit"], nav.woocommerce-MyAccount-navigation ul li, .woocommerce div.product span.onsale, .discount-btn a, #comments a.comment-reply-link, .toggle-nav i, #sidebar .widget_price_filter .ui-slider .ui-slider-range, #sidebar .widget_price_filter .ui-slider .ui-slider-handle, #sidebar .woocommerce-product-search button, #footer .widget_price_filter .ui-slider .ui-slider-range, #footer .widget_price_filter .ui-slider .ui-slider-handle, #footer .woocommerce-product-search button{';
			$custom_css .='background-color: '.esc_html($vw_ecommerce_store_first_color).';';
		$custom_css .='}';
	}
	if($vw_ecommerce_store_first_color != false){
		$custom_css .='a, #topbar .custom-social-icons i:hover, .carousel-caption1 a:hover, .carousel-caption a:hover, .products li:hover h2, #footer .custom-social-icons i:hover, #footer li a:hover, .post-main-box:hover h2, .more-btn a:hover, #sidebar ul li a:hover, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title, .main-navigation a:hover, .main-navigation ul.sub-menu a:hover, .entry-content a, .sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a, .post-navigation a:hover, .post-navigation a:focus, #sidebar a.custom_read_more:hover, #footer a.custom_read_more:hover{';
			$custom_css .='color: '.esc_html($vw_ecommerce_store_first_color).';';
		$custom_css .='}';
	}
	if($vw_ecommerce_store_first_color != false){
		$custom_css .='.carousel-caption1 a:hover, .carousel-caption a:hover, .more-btn a:hover, #sidebar a.custom_read_more:hover, #footer a.custom_read_more:hover{';
			$custom_css .='border-color: '.esc_html($vw_ecommerce_store_first_color).';';
		$custom_css .='}';
	}
	if($vw_ecommerce_store_first_color != false){
		$custom_css .='#serv-section hr, .main-navigation ul ul{';
			$custom_css .='border-top-color: '.esc_html($vw_ecommerce_store_first_color).';';
		$custom_css .='}';
	}
	if($vw_ecommerce_store_first_color != false){
		$custom_css .='#footer h3:after, .main-navigation ul ul, .header-fixed{';
			$custom_css .='border-bottom-color: '.esc_html($vw_ecommerce_store_first_color).';';
		$custom_css .='}';
	}
	if($vw_ecommerce_store_first_color != false){
		$custom_css .='span.cart-value:before{';
			$custom_css .='border-right-color: '.esc_html($vw_ecommerce_store_first_color).';';
		$custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/

	$vw_ecommerce_store_theme_lay = get_theme_mod( 'vw_ecommerce_store_width_option','Full Width');
    if($vw_ecommerce_store_theme_lay == 'Boxed'){
		$custom_css .='body{';
			$custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$custom_css .='}';
		$custom_css .='.search-box i{';
			$custom_css .='padding: 18px 24px;';
		$custom_css .='}';
	}else if($vw_ecommerce_store_theme_lay == 'Wide Width'){
		$custom_css .='body{';
			$custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$custom_css .='}';
	}else if($vw_ecommerce_store_theme_lay == 'Full Width'){
		$custom_css .='body{';
			$custom_css .='max-width: 100%;';
		$custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$vw_ecommerce_store_theme_lay = get_theme_mod( 'vw_ecommerce_store_slider_opacity_color','0.5');
	if($vw_ecommerce_store_theme_lay == '0'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0';
		$custom_css .='}';
		}else if($vw_ecommerce_store_theme_lay == '0.1'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.1';
		$custom_css .='}';
		}else if($vw_ecommerce_store_theme_lay == '0.2'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.2';
		$custom_css .='}';
		}else if($vw_ecommerce_store_theme_lay == '0.3'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.3';
		$custom_css .='}';
		}else if($vw_ecommerce_store_theme_lay == '0.4'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.4';
		$custom_css .='}';
		}else if($vw_ecommerce_store_theme_lay == '0.5'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.5';
		$custom_css .='}';
		}else if($vw_ecommerce_store_theme_lay == '0.6'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.6';
		$custom_css .='}';
		}else if($vw_ecommerce_store_theme_lay == '0.7'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.7';
		$custom_css .='}';
		}else if($vw_ecommerce_store_theme_lay == '0.8'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.8';
		$custom_css .='}';
		}else if($vw_ecommerce_store_theme_lay == '0.9'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.9';
		$custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/

	$vw_ecommerce_store_theme_lay = get_theme_mod( 'vw_ecommerce_store_slider_content_option','Left');
    if($vw_ecommerce_store_theme_lay == 'Left'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$custom_css .='text-align:left; left:15%; right:30%; top:40%;';
		$custom_css .='}';
	}else if($vw_ecommerce_store_theme_lay == 'Center'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$custom_css .='text-align:center; left:20%; right:20%; top:50%;';
		$custom_css .='}';
	}else if($vw_ecommerce_store_theme_lay == 'Right'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$custom_css .='text-align:right; left:30%; right:10%; top:50%;';
		$custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$vw_ecommerce_store_theme_lay = get_theme_mod( 'vw_ecommerce_store_blog_layout_option','Default');
    if($vw_ecommerce_store_theme_lay == 'Default'){
		$custom_css .='.post-main-box{';
			$custom_css .='';
		$custom_css .='}';
	}else if($vw_ecommerce_store_theme_lay == 'Center'){
		$custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn{';
			$custom_css .='text-align:center;';
		$custom_css .='}';
		$custom_css .='.post-info{';
			$custom_css .='margin-top:10px;';
		$custom_css .='}';
		$custom_css .='.post-info hr{';
			$custom_css .='margin:10px auto;';
		$custom_css .='}';
	}else if($vw_ecommerce_store_theme_lay == 'Left'){
		$custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$custom_css .='text-align:Left;';
		$custom_css .='}';
		$custom_css .='.post-info hr{';
			$custom_css .='margin-bottom:10px;';
		$custom_css .='}';
		$custom_css .='.post-main-box h2{';
			$custom_css .='margin-top:10px;';
		$custom_css .='}';
	}

	/*------------------------------Responsive Media -----------------------*/

	$vw_ecommerce_store_resp_topbar = get_theme_mod( 'vw_ecommerce_store_resp_topbar_hide_show',false);
    if($vw_ecommerce_store_resp_topbar == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.lower-header{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($vw_ecommerce_store_resp_topbar == false){
		$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.lower-header{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	$vw_ecommerce_store_resp_stickyheader = get_theme_mod( 'vw_ecommerce_store_stickyheader_hide_show',false);
    if($vw_ecommerce_store_resp_stickyheader == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.header-fixed{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($vw_ecommerce_store_resp_stickyheader == false){
		$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.header-fixed{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	$vw_ecommerce_store_res_slider = get_theme_mod( 'vw_ecommerce_store_resp_slider_hide_show',false);
    if($vw_ecommerce_store_res_slider == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='#slider{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($vw_ecommerce_store_res_slider == false){
		$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='#slider{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	$vw_ecommerce_store_metabox = get_theme_mod( 'vw_ecommerce_store_metabox_hide_show',true);
    if($vw_ecommerce_store_metabox == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.post-info{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($vw_ecommerce_store_metabox == false){
		$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.post-info{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	$vw_ecommerce_store_sidebar = get_theme_mod( 'vw_ecommerce_store_sidebar_hide_show',true);
    if($vw_ecommerce_store_sidebar == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='#sidebar{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($vw_ecommerce_store_sidebar == false){
		$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='#sidebar{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	/*------------- Top Bar Settings ------------------*/

	$vw_ecommerce_store_topbar_padding_top_bottom = get_theme_mod('vw_ecommerce_store_topbar_padding_top_bottom');
	if($vw_ecommerce_store_topbar_padding_top_bottom != false){
		$custom_css .='.lower-header{';
			$custom_css .='padding-top: '.esc_html($vw_ecommerce_store_topbar_padding_top_bottom).'; padding-bottom: '.esc_html($vw_ecommerce_store_topbar_padding_top_bottom).';';
		$custom_css .='}';
	}

	/*------------------ Search Settings -----------------*/
	
	$vw_ecommerce_store_search_padding_top_bottom = get_theme_mod('vw_ecommerce_store_search_padding_top_bottom');
	$vw_ecommerce_store_search_padding_left_right = get_theme_mod('vw_ecommerce_store_search_padding_left_right');
	$vw_ecommerce_store_search_font_size = get_theme_mod('vw_ecommerce_store_search_font_size');
	$vw_ecommerce_store_search_border_radius = get_theme_mod('vw_ecommerce_store_search_border_radius');
	if($vw_ecommerce_store_search_padding_top_bottom != false || $vw_ecommerce_store_search_padding_left_right != false || $vw_ecommerce_store_search_font_size != false || $vw_ecommerce_store_search_border_radius != false){
		$custom_css .='.search-box i{';
			$custom_css .='padding-top: '.esc_html($vw_ecommerce_store_search_padding_top_bottom).'; padding-bottom: '.esc_html($vw_ecommerce_store_search_padding_top_bottom).';padding-left: '.esc_html($vw_ecommerce_store_search_padding_left_right).';padding-right: '.esc_html($vw_ecommerce_store_search_padding_left_right).';font-size: '.esc_html($vw_ecommerce_store_search_font_size).';border-radius: '.esc_html($vw_ecommerce_store_search_border_radius).'px;';
		$custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$vw_ecommerce_store_show_button = get_theme_mod( 'vw_ecommerce_store_blog_button_border', false); 
	if($vw_ecommerce_store_show_button == true){ 
		$custom_css .='.post-main-box .more-btn a{'; 
		$custom_css .='border: 2px solid #222222;margin:10px 0;'; 
		$custom_css .='}'; 
		$custom_css .='.post-main-box .more-btn{'; 
		$custom_css .='margin:20px 0; display:inline-block;'; 
		$custom_css .='}'; 
	}

	$vw_ecommerce_store_button_padding_top_bottom = get_theme_mod('vw_ecommerce_store_button_padding_top_bottom');
	$vw_ecommerce_store_button_padding_left_right = get_theme_mod('vw_ecommerce_store_button_padding_left_right');
	if($vw_ecommerce_store_button_padding_top_bottom != false || $vw_ecommerce_store_button_padding_left_right != false){
		$custom_css .='.post-main-box .more-btn a{';
			$custom_css .='padding-top: '.esc_html($vw_ecommerce_store_button_padding_top_bottom).'; padding-bottom: '.esc_html($vw_ecommerce_store_button_padding_top_bottom).';padding-left: '.esc_html($vw_ecommerce_store_button_padding_left_right).';padding-right: '.esc_html($vw_ecommerce_store_button_padding_left_right).';';
		$custom_css .='}';
	}

	$vw_ecommerce_store_button_border_radius = get_theme_mod('vw_ecommerce_store_button_border_radius');
	if($vw_ecommerce_store_button_border_radius != false){
		$custom_css .='.post-main-box .more-btn a{';
			$custom_css .='border-radius: '.esc_html($vw_ecommerce_store_button_border_radius).'px;';
		$custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$vw_ecommerce_store_copyright_alingment = get_theme_mod('vw_ecommerce_store_copyright_alingment');
	if($vw_ecommerce_store_copyright_alingment != false){
		$custom_css .='.copyright p{';
			$custom_css .='text-align: '.esc_html($vw_ecommerce_store_copyright_alingment).';';
		$custom_css .='}';
	}

	$vw_ecommerce_store_copyright_padding_top_bottom = get_theme_mod('vw_ecommerce_store_copyright_padding_top_bottom');
	if($vw_ecommerce_store_copyright_padding_top_bottom != false){
		$custom_css .='#footer-2{';
			$custom_css .='padding-top: '.esc_html($vw_ecommerce_store_copyright_padding_top_bottom).'; padding-bottom: '.esc_html($vw_ecommerce_store_copyright_padding_top_bottom).';';
		$custom_css .='}';
	}