<?php
session_start();
require_once("../database/Database.class.php");
$db = Database::mydb($config);
$action = isset($_GET['action'])?$_GET['action']:"";


//登陆
if($action=="login"){

//验证码
$code = $_SESSION['code_38'];
$codeView = $_POST['code_38'];

//用户名	密码
$user_38 = $_POST['user_38'];
$pwd = $_POST['pwd'];

if(strtolower($code) == strtolower($codeView)){
//	echo '<pre>';
	$sql = "SELECT * FROM l_user where user_name = '{$user_38}' and user_pwd = '{$pwd}'";
	$data = $db->query($sql);
//	VAR_dump($data);
	if(count($data)) {
			if($data[0]['user_status']==0){
				$_SESSION['user_38'] = json_encode($data[0]);		//存储这个用户信息
				echo "<script>alert('登录成功');location.href='../index.php'</script>";	
			}else{
				echo "<script>alert('您的账号已被冻结，请及时联系管理员');location.href='../login.html'</script>";
			}
		}
		else echo "<script>alert('密码错误');location.href='../login.html'</script>";
	}else{
		echo "<script>alert('验证码错误');location.href='../login.html'</script>";
	}

								//注册
}elseif($action=="register"){
	
	//验证码
	$code = $_SESSION['code_38'];
	$codeView = $_POST['code_38'];
	
	//用户名	密码
	$user_38 = $_POST['user_38'];
	$pwd = $_POST['pwd'];
	
	if($code == $codeView){
		$sql = "SELECT * FROM l_user WHERE user_name = '{$user_38}'";
		$data = $db->query($sql);
	
		if(count($data)){
			echo "<script>alert('账号已存在');location.href='../register.html';</script>";
		}else{
			$reg_time = date('Y-m-d H:i:s',time());
			$insertsql = "INSERT INTO
			l_user(user_name,user_pwd,reg_time)
			VALUES('{$user_38}','{$pwd}','{$reg_time}')";
			$res = $db->upOrIn($insertsql);
			if($res){
				echo "<script>alert('注册成功');location.href='../login.html';</script>";
			}
			echo "<script>alert('注册失败');location.href='../register.html';</script>";
		} 
	}else{
		echo "<script>alert('验证码错误');location.href='../register.html';</script>";
	}
	
	
	
}elseif($action=="logout"){
	
	
	unset($_SESSION['user_38']);
	header("location: ../index.php");
	
	
}elseif($action == "online"){
	
	$user_id = !empty($_SESSION['user_38'])?json_decode($_SESSION['user_38'])->user_id:0;	
	
	if($user_id != 0){
		
		$sql = "SELECT award_time from l_user WHERE user_id = '{$user_id}'";
				
		$data = $db->query($sql);
		
		$times = $data[0]['award_time'];
		
		$return = [
					"award_time"=>$times,
					"user_id"	=>$user_id
				  ];
	}else{
		$return = ["user_id"=>0];
	}
	echo json_encode($return);
}

	/*$handle = fopen("userdata.txt","a+");
	$userArr = [];
	while(false !== ($row = fgets($handle))){
		$userArr[] = json_decode($row,true);
	}
	fclose($handle);
	$flag = true;
	if($code == $codeView){
		$flag = true;
	}else{
		$flag = false;
		echo "<script>alert('验证码错误');</script>";
	}
	foreach($userArr as $key=>$val){
		if($user_38 == $val['user_38']){
			$flag = false;
			break;
		}
	}*/
	
	
	
	
	
?>