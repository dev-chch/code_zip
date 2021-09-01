<input name='action' type="hidden" value='custom_admin_form_submit'>
<!-- form을 보낼 때 action value 입력 -->

<?php
add_action('admin_post_custom_admin_form_submit','custom_admin_form_submit_function');
// admin_post_(action value)로 구분해서 동작 처리
function custom_admin_form_submit_function(){
   print_r($_POST);
   wp_redirect(get_permalink('page_id'));
   exit;
}
