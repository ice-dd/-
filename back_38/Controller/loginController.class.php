<?php
session_start();
require_once("../database/Database.class.php");
$db = Database::mydb($config);
$action = isset($_GET['action'])?$_GET['action']:"";
if($action == "login"){

	$code = $_SESSION['code_38'];
	$data = $_POST['data'];
	$obj = json_decode($data);

	$username = $obj->username;
	$pwd = $obj->pwd;
	$codeView = $obj->code;
	
	$sql = "SELECT * FROM l_admin
		where admin_name = '{$username}' 
		and admin_pwd = '{$pwd}'";
	$data = $db->query($sql);
//	var_dump($data);

	if(strtolower($code) == strtolower($codeView)){
		if(count($data)){
			$_SESSION['admin_38'] = json_encode($data[0]);
			echo "ok";
		}else{
			echo "no";
		}
	}else{
		echo "codeno";
	}
	
//	if(count($data)){
//		$_SESSION['admin_38'] = json_encode($data[0]['admin_name']);
//		echo "ok";
//	}else{
//		echo "no";
//	}

}elseif($action=="logout"){
	unset($_SESSION['admin_38']);
	header("location: ../CMSlogin.php");
}
?>