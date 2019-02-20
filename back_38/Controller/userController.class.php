<?php
header("content-Type:text/html;charset = utf-8");

require_once("../database/Database.class.php");
$db = Database::mydb($config);



$action = isset($_GET['action'])?$_GET['action']:"";

//用户列表
if($action == "getUsername"){
	
	$sql = "select * from l_user";
	$userArr = $db->query($sql);

	$jsonStr = json_encode($userArr);
	echo $jsonStr;

//奖品信息列表
}elseif($action == "getaward"){
	$sql = "select * from l_award";
	$awardArr = $db->query($sql);
	
	$jsonStr = json_encode($awardArr);
	
	echo $jsonStr;
	
	
	
	
}elseif($action == 'getAwardlb'){
	$sql = "select u.user_name,a.award_name,ar.award_time time FROM
			l_award_record ar
			LEFT JOIN l_user u
			ON u.user_id = ar.user_id
			LEFT JOIN l_award a
			ON a.award_id = ar.award_id";
	
	$awardArr = $db->query($sql);
	
	
	$jsonStr = json_encode($awardArr);
	
	echo $jsonStr;
	
}elseif($action == 'award_freeze/thaw'){
	
	$dataStr = $_POST['data'];
	$jsonObj = json_decode($dataStr);
//	var_dump($jsonObj);
	
	$award_id = $jsonObj -> award_id;
	$award_status = $jsonObj -> award_status;
	$sql= "UPDATE l_award SET award_status = '{$award_status}' WHERE award_id ='{$award_id}'";
	$res = $db->upOrIn($sql);
	
	if($res){
		echo 'ok';
	}else{
		echo 'no';
	}
	
//冻结修改
}elseif($action == 'freeze/thaw'){
	
	$dataStr = $_POST['data'];
	$jsonObj = json_decode($dataStr);
	
	$user_id = $jsonObj -> user_id;
	$user_status = $jsonObj -> user_status;
	$sql= "UPDATE l_user SET user_status = '{$user_status}' WHERE user_id ='{$user_id}'";
	$res = $db->upOrIn($sql);
	
	if($res){
		echo 'ok';
	}else{
		echo 'no';
	}
	
	
//重置密码	
}elseif($action == 'reset_pwd'){
	
	$dataStr = $_POST['data'];
	$jsonObj = json_decode($dataStr);
	
	$user_id = $jsonObj -> user_id;
	$user_pwd = $jsonObj -> user_pwd;
	$sql= "UPDATE l_user SET user_pwd = '123456' WHERE user_id ='{$user_id}'";
	$res = $db->upOrIn($sql);
	
	if($res){
		echo 'ok';
	}else{
		echo 'no';
	}
}
?>