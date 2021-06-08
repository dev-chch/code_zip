<?php
<form id='myform'>
  // 내용
</form>

<script>
jQuery('#myform').submit(function(event) {
 event.preventDefault(); // 서밋 기본 이벤트 방지.
  
 if(// 코드 입력){
  // 코드 입력
 }
 else(// 코드 입력){
  // 코드 입력 
 }
  
 jQuery(this).unbind('submit').submit(); // 서밋
})  
</script>
  
 // 응용하면 여러가지로 활용 가능
