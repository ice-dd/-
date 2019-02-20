<?php
header("content-type:text/html;charset=utf-8");
require_once("../database/Database.class.php");
date_default_timezone_set("PRC");
$db = Database::mydb($config);
@session_start();
//$action是页面发送的业务请求值
$action = isset($_GET['action'])?$_GET['action']:"";
if($action=="getAwardList"){
	$sql = "SELECT award_id,award_img,award_name,award_price from l_award WHERE award_status='0' AND award_count>0 limit 8";
	$data = $db->query($sql);
	echo json_encode($data);
}else if($action == "doAward"){
	
	$award_id = $_POST['award_id'];
	
	$user_id = json_decode($_SESSION['user_38'])->user_id;
	
	
	$sql1 = "UPDATE l_user SET award_time = award_time - 1 WHERE user_id = {$user_id}";
//	
//	
//	
	$sql2 = "UPDATE l_award SET award_count = award_count - 1 WHERE award_id = {$award_id}";
//	
//	
	$reg_time = date('Y-m-d H:i:s',time());
	
	$sql3 = "INSERT into l_award_record (user_id,award_id,award_time,id) VALUES ('{$user_id}','{$award_id}','{$reg_time}','1')";
	
	
	$bool1 = $db ->upOrIn($sql1);
	$bool2 = $db ->upOrIn($sql2);
	$bool3 = $db ->upOrIn($sql3);
	
//	var_dump($bool1,$bool2,$bool3);
	if($bool1 && $bool2 && $bool3){
		echo 'ok';
	}else{
		echo 'no';
	}
}
?>