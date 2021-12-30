<?php
add_shortcode('get-post-elemetor', 'wbk_get_post');
function wbk_get_post($attr){
	$post_id = $attr['id'];
	$frontend = new \Elementor\Frontend();
	
	return $frontend->get_builder_content_for_display($post_id, $with_css=true);
}
// [get-post-elemetor id='1']
