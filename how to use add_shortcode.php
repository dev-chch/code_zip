<?php
add_shortcode(string $tag, callable $callback);

//기본 형태 [footag]
add_shortcode('footag', 'project0210_baztag_func');
function project0210_baztag_func(){
  $foo = 'something here, 아무거나';
  
  return $foo;
}

//감싸는 형태 [baztag]content[/baztag]
add_shortcode('baztag', 'project0210_baztag_func');
function project0210_baztag_func( $atts, $content = "" ) {
    return $content;
}
  
//API 사용 간단한 형태 [footag foo="bar"]
add_shortcode('footag', 'project0210_footag_func');
function project0210_footag_func( $atts ) {
    return {$atts['foo']};
}

//API 기본 형태 [bartag foo="bar"]
add_shortcode('bartag', 'project0210_bartag_func');
function project0210_bartag_func( $atts ) {
    $atts = shortcode_atts( array(
        'foo' => 'no foo',
        'baz' => 'default baz'
    ), $atts, 'bartag' );
 
    return {$atts['foo']};
}

//add_shortcode는 반드시 return 값이 존재해야 함.
