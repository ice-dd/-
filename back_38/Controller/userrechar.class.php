<?php
header("content-Type:text/html;charset = utf-8");
require_once("../database/Database.class.php");
$db = Database::mydb($config);
$action = isset($_GET['action'])?$_GET['action']:"";
if($action == 'getuser'){
	
	$sql = "SELECT user_name,user_id FROM l_user";
	
	$userArr = $db->query($sql);
	
	$jsonStr = json_encode($userArr);
	
	echo $jsonStr;
}elseif($action == 'getrechar'){
	
	$coin = $_POST['coin'];

	$user_name = $_POST['select'];

//	echo $coin,$user_id;
	
	if($coin<=0){
		echo "no";
		echo "<script>alert('金额不能小于1');
		location.href='../nav/userrechar.php'</script>";
	}else{
//		echo "ok";
		$sql = "UPDATE l_user SET coin = coin + '{$coin}' WHERE user_name = '{$user_name}'";


		
		//获取用户id
		$sql1 = "SELECT user_id FROM l_user WHERE user_name='{$user_name}'";
		$userArr = $db->query($sql1);
		$user_id = $userArr[0]['user_id'];	
		
		$reg_time = date('Y-m-d H:i:s',time());	//获取时间
		
		$sql2 = "INSERT into l_recharge_record (user_id,money,recharge_time) VALUES ('{$user_id}','{$coin}','{$reg_time}')";		
		$res = $db->upOrIn($sql2);
		
		echo "<script>alert('用户：{$user_name}充值{$coin}点卷成功');
		location.href='../nav/userList.php'</script>";
		
	}
	
}elseif($action == 'getmoney'){
	
	
	$sql = "select u.user_name,money,recharge_time  FROM
			l_recharge_record ar
			LEFT JOIN l_user u
			ON u.user_id = ar.user_id";
	
//	$sql = "select * FROM l_recharge_record";
	
	$userArr = $db->query($sql);
	
//	var_dump($userArr);
	
	$jsonStr = json_encode($userArr);
	
	echo $jsonStr;
	
}
?>