<?php
header("content-Type:text/html;charset = utf-8");
@session_start();
require_once("../database/Database.class.php");
$db = Database::mydb($config);
$action = isset($_GET['action'])?$_GET['action']:"";

//用户信息
if($action == "getinfo"){
	
	
	$user = json_decode($_SESSION['user_38']);
	$user_id = intval($user->user_id);

	$sql = "SELECT * FROM l_user where user_id = {$user_id}";
	
	$awardArr = $db->query($sql);
	
	
	$jsonStr = json_encode($awardArr);
	
//	var_dump($awardArr);
	echo $jsonStr;
	
	
}
//抽奖信息
elseif($action == "getaward"){
	

	$user = json_decode($_SESSION['user_38']);
	$user_id = intval($user->user_id);
//	echo $ac;
	
	$sq = "select u.user_name,a.award_name,ar.award_time time FROM
           l_award_record ar
			LEFT JOIN l_user u
			ON u.user_id = ar.user_id
			LEFT JOIN l_award a
			ON a.award_id = ar.award_id
			where u.user_id ='{$user_id}'";	
	
	$awardArr = $db->query($sq);
	
	
	$jsonStr = json_encode($awardArr);
	
	echo $jsonStr;
	
//	echo "<br/>";
//	
//	
//	$sql = "select * from l_award_record WHERE user_id = '{$user_id}'";
//	
//	$awardArr = $db->query($sql);
//	
//	
//	$jsonStr = json_encode($awardArr);
//	
//	echo $jsonStr;
}
//修改信息
elseif($action == "reviseinfo"){
	$user = json_decode($_SESSION['user_38']);
	$user_id = intval($user->user_id);
	
	$user_name = $_POST['user_name'];
	$phone = $_POST['phone'];
	$Email = $_POST['Email'];
	
	
	
	
	$sql = "UPDATE l_user SET phone ={$phone},Email='{$Email}',user_name='{$user_name}' WHERE user_id = '{$user_id}'";
	
	$res = $db->upOrIn($sql);
	
	if($res){
		echo "<script>alert('修改信息成功');
			 location.href='../Personal_center.php'</script>";
	}else{
		echo "<script>alert('修改信息失败');
			location.href='../Personal_center.php'</script>";
	}
	
	
	
}
//修改密码
elseif($action == "getpwd"){
	
	$user = json_decode($_SESSION['user_38']);
	$user_id = intval($user->user_id);
	
	$old_pwd = $_POST['old_pwd'];
	$new_pwd = $_POST['new_pwd'];
	$repeat_pwd = $_POST['repeat_pwd'];
	
	$sql2 = "SELECT user_pwd FROM l_user WHERE user_id = '{$user_id}'"; //获取数据库中旧密码
	$pwdArr = $db->query($sql2);

	
	if($new_pwd != $repeat_pwd){
		echo "<script>alert('两次密码不相同');
		location.href='../Personal_center.php'</script>";
	}elseif($new_pwd == $repeat_pwd){
		if($old_pwd == $pwdArr[0]['user_pwd']){
			if($new_pwd == $pwdArr[0]['user_pwd']){
					echo "<script>alert('新密码不能与旧密码相同');
					location.href='../Personal_center.php'</script>";
				}else{
					$sql3 ="UPDATE l_user SET user_pwd = '{$new_pwd}' WHERE user_id = '{$user_id}'";  //修改密码
					$res = $db->upOrIn($sql3);
					if($res){
						unset($_SESSION['user_38']);
						echo "<script>
							  if(confirm('您已修改密码，请重新登陆')){
							    	location.href='../login.html';
							  }else{
							  		location.href='../login.html';
							  }; 
							  </script>"; 	
					}else{
						echo "no";
					}
				}
			}else{
				echo "<script>alert('请输入正确的旧密码');
				location.href='../Personal_center.php'</script>";
			}
	}
		
		
}elseif($action == 'rechar'){
	
	$user = json_decode($_SESSION['user_38']);
	$user_id = intval($user->user_id);
	
	$coin = $_POST['coin'];
	
	if($coin<=0){
		echo "no";
		echo "<script>alert('充值金额不能小于1');
		location.href='../Personal_center.php'</script>";
	}else{
		$sql = "UPDATE l_user SET coin = coin + '{$coin}' WHERE user_id = '{$user_id}'";
		$res = $db->upOrIn($sql);	
		
		$reg_time = date('Y-m-d H:i:s',time());	//获取时间
		
		$sql2 = "INSERT into l_recharge_record (user_id,money,recharge_time) VALUES ('{$user_id}','{$coin}','{$reg_time}')";		
		$res = $db->upOrIn($sql2);
		
		echo "<script>alert('充值{$coin}点卷成功');
		location.href='../Personal_center.php'</script>";
	}
}elseif($action == 'exchange'){
	//获取用户id
	$user = json_decode($_SESSION['user_38']);
	$user_id = intval($user->user_id);
	
	//获取兑换次数
	$exchange = $_POST['award_time'];
	
	if($exchange>0){
		//查询获取金币数
		$sql2 = "SELECT coin FROM l_user WHERE user_id='{$user_id}'";
		$coinArr = $db->query($sql2);
		$coin = $coinArr[0]['coin'];
		
		//计算兑换次数所减去的金币
		$coinde = ($exchange*100);
		
		if($coinde<=$coin){
			//数据库中减去金币
			$sql3 = "UPDATE l_user SET coin = coin - '{$coinde}' WHERE user_id = '{$user_id}'";
			$res3 = $db->upOrIn($sql3);	
			//数据库中增加兑换次数
			$sql1 = "UPDATE l_user SET award_time = award_time + '{$exchange}' WHERE user_id = '{$user_id}'";
			$res1 = $db->upOrIn($sql1);	
			echo "<script>alert('成功兑换{$exchange}次抽奖机会');
			location.href='../Personal_center.php'</script>";
		}elseif($coinde>$coin){
			echo "<script>alert('余额不足');
			location.href='../Personal_center.php'</script>";
		}
	}else{
		echo "<script>alert('兑换次数不能小于1');
			location.href='../Personal_center.php'</script>";
	}

}elseif($action=='collect'){
	$user = json_decode($_SESSION['user_38']);
	$user_id = intval($user->user_id);
	
	$sql = "SELECT * FROM l_award_record WHERE user_id='{$user_id}'";
	
	$awardArr = $db->query($sql);
	
	
	$jsonStr = json_encode($awardArr);
	
	echo $jsonStr;
	
}elseif($action == 'exchanges'){
	$user = json_decode($_SESSION['user_38']);
	$user_id = intval($user->user_id);
	
	
	for ($i = 1;$i<8;$i++){
		$sql = "DELETE FROM l_award_record WHERE user_id='{$user_id}' AND award_id='{$i}'";	
		$res = $db->upOrIn($sql);
	}
	
	
	if($res){
		echo "<script>alert('兑换成功');
		location.href='../Personal_center.php'</script>";
	}else{
		echo "<script>alert('网络繁忙,请稍后再试');
		location.href='../Personal_center.php'</script>";
	}
	
}



?>