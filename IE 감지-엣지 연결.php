<?php //php
add_action('init', 'wpboard_is_ie');
function wpboard_is_ie(){
	if(preg_match('/MSIE|Internet Explorer|Trident/i', $_SERVER['HTTP_USER_AGENT'])){
		echo '<script>window.location="microsoft-edge:'.get_permalink().$_SERVER['REQUEST_URI'].'";</script>';
	}
}
?>

<script>
  if (window.navigator.userAgent.match(/MSIE|Internet Explorer|Trident/i)) {
    window.location = "microsoft-edge:" + window.location.href;
  }
</script>
