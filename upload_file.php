<form enctype='multipart/form-data' action='upload_ok.php' method='post'> <!--  enctype='multipart/form-data' 가 중요함 물론 method 도 중요하다  -->
	<input type='file' name='upload_file'>
	<button>보내기</button>
</form>

<?php
// 설정
$uploads_dir = './uploads'; // 파일을 넣고 싶은 폴더 위치
$allowed_ext = array('jpg','jpeg','png','gif'); //원하는 확장자
 
// 변수 정리
$error = $_FILES['upload_file']['error']; //에러 체크용
$name = $_FILES['upload_file']['name']; //파일명
$ext = array_pop(explode('.', $name)); //확장자 추출
 
// 오류 확인
if( $error != UPLOAD_ERR_OK ) {
	switch( $error ) {
		case UPLOAD_ERR_INI_SIZE:
		case UPLOAD_ERR_FORM_SIZE:
			echo "파일이 너무 큽니다. ($error)";
			break;
		case UPLOAD_ERR_NO_FILE:
			echo "파일이 없습니다. ($error)";
			break;
		default:
			echo "에러가 발생했습니다. ($error)";
	}
	exit;
}
 
// 확장자 확인
if( !in_array($ext, $allowed_ext) ) {
	echo "허용되지 않는 확장자입니다.";
	exit;
}
 
// 파일 이동
move_uploaded_file( $_FILES['upload_file']['tmp_name'], "$uploads_dir/$name");

// 파일 정보 출력
echo "<h2>파일 정보</h2>
<ul>
	<li>파일명: $name</li>
	<li>확장자: $ext</li>
	<li>파일형식: {$_FILES['myfile']['type']}</li>
	<li>파일크기: {$_FILES['myfile']['size']} 바이트</li>
</ul>";
?>
