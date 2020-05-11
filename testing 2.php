<?php
echo "Hello Worldddddd23332 sai nar";

// require wp-load.php to use built-in WordPress functions
require_once("/wp-load.php");
//echo "hellooooo2232322dddd322"
/*******************************************************
** POST VARIABLES
*******************************************************/
$postType = 'posts'; // set to post or page
$userID = 1; // set to user id
$categoryID = '2'; // set to category id.
$postStatus = 'future';  // set to future, draft, or publish
$leadTitle = 'Exciting new post today: '.date("n/d/Y");
$leadContent = '&lt;h1&gt;Vacations&lt;/h1&gt;&lt;p&gt;Vacations are the best thing in this life.&lt;/p&gt;';
$leadContent .= ' &lt;!--more--&gt; &lt;p&gt;Expensive they are, but they are totally worth it.&lt;/p&gt;';
// /*******************************************************
// ** TIME VARIABLES / CALCULATIONS
// *******************************************************/
// // VARIABLES
$timeStamp = $minuteCounter = 0;  // set all timers to 0;
$iCounter = 1; // number use to multiply by minute increment;
$minuteIncrement = 1; // increment which to increase each post time for future schedule
$adjustClockMinutes = 0; // add 1 hour or 60 minutes - daylight savings
// CALCULATIONS
$minuteCounter = $iCounter * $minuteIncrement; // setting how far out in time to post if future.
$minuteCounter = $minuteCounter + $adjustClockMinutes; // adjusting for server timezone
$timeStamp = date('Y-m-d H:i:s', strtotime("+$minuteCounter min")); // format needed for WordPress
// /*******************************************************
// ** WordPress Array and Variables for posting
// *******************************************************/
$new_post = array(
'post_title' => $leadTitle,
'post_content' => $leadContent,
'post_status' => $postStatus,
'post_date' => $timeStamp,
'post_author' => $userID,
'post_type' => $postType,
'post_category' => array($categoryID)
);

// /*******************************************************
// ** WordPress Post Function
// *******************************************************/
$post_id = wp_insert_post($new_post);
//echo "hellooooo2232322322"
// /*******************************************************
// ** SIMPLE ERROR CHECKING
// *******************************************************/
$finaltext = '';
if($post_id){
$finaltext = "Yay, I made a new post.&lt;br&gt;";
} else{
$finaltext = "Something went wrong and I didnt insert a new post.&lt;br&gt;";
}
echo $finaltext;

?>
