/**
*
* 테마 functions.php에 입력하면 됨 
* tinymce_font.css 뿐 아니라 각자 작성한 css 코드로도 적용 가능 
*
*/

add_filter('mce_css', 'wpboard_tinymce_custom_css');
function wpboard_tinymce_custom_css($mce_css) {
	if (!empty($mce_css)) {
		$mce_css .= ',';
	}

	$mce_css .= get_template_directory_uri() . '/assets/css/tinymce_font.css';
	// get_template_directory_uri() -> 테마 주소
	// get_stylesheet_directory_uri() -> 차일드 테마 주소

	return $mce_css;
}
