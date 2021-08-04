<?php
header('Content-Type:text/css;charset=EUC-KR;');
header('Expires: 0');
header('Content-Transfer-Encoding: binary');
header('Cache-Control: private, no-transform, no-store, must-revalidate');

$status = isset($_POST['status']) ? $_POST['status'] : '';
global $wpdb;
if(!$status){
	$resevation_list = $wpdb->get_results("SELECT * FROM `{$wpdb->prefix}posts` WHERE `1`"); // SQL Query
}
else{
	$resevation_list = $wpdb->get_results("SELECT * FROM `{$wpdb->prefix}posts` WHERE `1` ORDER BY `post_title`"); // SQL Query
}

function filterData($string) {
	$string=iconv("UTF-8","EUC-KR",($string));
	return $string;
}

$csv_dump_header = "A,B,C,D,E,F,G,H,I";
$csv_dump .= filterData($csv_dump_header);
$csv_dump .= "\r\n";

foreach($resevation_list as $val){
	$var = 'A'; //변수 지정
	// ...
	$var = str_replace("\r\n","",$post_content); // 줄바꿈 제거
	$var = str_replace(",","_",$post_content); // 콤마 치환 제거
	$csv_dump .= filterData($var) . ",";
	// ...
	$csv_dump .= "\r\n";
}
$date = date("Y-m-d");
$filename = "CSV다운로드-" . $date . ".csv";

header("Content-type: application/vnd.ms-excel;");
header("Content-Disposition: attachment; filename=$filename");
header("Content-Description: PHP4 Generated Data");
echo $csv_dump;
exit;
