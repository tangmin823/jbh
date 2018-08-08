<?php
/*
Template Name: Convert Videos URL
*/

$new_domain = 'yournewdomain.com'; // change to your new domain

/* ==================== DO NOT EDIT BELOW ==================== */

echo '<h1>We are going to convert Video URLs</h1>';

$idx = isset($_GET['idx']) ? intval($_GET['idx']) : 0;


$posts = get_posts(array(
						'numberposts' => 10,
						'offset' => $idx
				));

if($posts && count($posts) > 0){
	foreach($posts as $post){
		echo 'Converting video: ' . $idx . ' - ' . $post->post_title . ' <br/>';
		
		$video_url = get_post_meta($post->ID, 'tm_video_url', true);
		if($video_url != ''){
			//replace
			$video_url = str_replace('google.com', $new_domain, $video_url);
			update_post_meta($post->ID, 'tm_video_url', $video_url);
		}
		
		$idx++;
	}
	
	wp_reset_postdata();
	
	echo 'Do not turn off this page...It will refresh for more posts...';
	echo "<script>setTimeout(function(){
var url = '" . get_permalink() . "?idx=" . $idx . "';  
window.location.href = url;},2000);</script>";
} else {
	echo 'We already finished! You can remove this page!';
}