<?php
//into theme functions.php
add_action('admin_enqueue_scripts', 'prjt0210_admin_theme_style');
add_action('login_enqueue_scripts', 'prjt0210_admin_theme_style');
function prjt0210_admin_theme_style() {
	echo '<style>.update-nag, .updated, .error, .is-dismissible { display: none; }</style>';
}
