//포스트를 작성하는 코드 중.. 포스트 타입을 커스텀 포스트 타입으로 변경하고 싶을 때

if(isset($_POST['submit'])){
  $post_id = wp_insert_post( array(
    'post_title' => $your_title,
    'post_content' => $your_content,
    'post_status' => 'publish',
    'comment_status' => 'closed',
    'ping_status' => 'closed',   
  ));
  
  $post_type = 'custom_type';
  $query = "UPDATE {$wpdb->prefix}posts SET post_type='".$post_type."' WHERE id='".$post_id."' LIMIT 1";
  GLOBAL $wpdb; 
  $wpdb->query($query);
}

//위 코드처럼 해도 동작은 함. 의미 없이 휘두르는 게 크다.

$post_id = wp_insert_post(array (
  'post_type' => 'your_post_type',
  'post_title' => $your_title,
  'post_content' => $your_content,
  'post_status' => 'publish',
  'comment_status' => 'closed',
  'ping_status' => 'closed',   
));

//tip. wp_insert_post() 함수는 포스트 작성 후 해당 post id를 반환함.
//post_type은 길이제한이 20자(영문기준)로 제한되어 있어서 길이가 너무 길게 들어가면 아예 post 작성이 되지 않는다.
