<?php
header("content-Type:text/html;charset = utf-8");
require_once("../database/Database.class.php");
$db = Database::mydb($config);
$action = isset($_GET['action'])?$_GET['action']:"";
if($action == 'getpwd'){
	$admin_name = $_POST['admin_name'];
	$old_pwd = $_POST['old_pwd'];
	$new_pwd = $_POST['new_pwd'];
	
//	var_dump($user_name,$old_pwd,$new_pwd);

	$sql1= "SELECT admin_name FROM l_admin WHERE admin_name = '{$admin_name}'";	//获取数据库中用户名
	$userArr = $db->query($sql1);

//echo $userArr[0]['admin_name'];


	$sql2 = "SELECT  admin_pwd FROM l_admin WHERE admin_name = '{$admin_name}'"; //获取数据库中旧密码
	$pwdArr = $db->query($sql2);

//echo $pwdArr[0]['admin_pwd'];

	if($admin_name == $userArr[0]['admin_name']){
		if($old_pwd == $pwdArr[0]['admin_pwd']){
			if($new_pwd == $pwdArr[0]['admin_pwd']){
					echo "<script>alert('新密码不能与旧密码相同');
					location.href='../nav/editPwd.php'</script>";
				}else{
					$sql3 ="UPDATE l_admin SET admin_pwd = '{$new_pwd}' WHERE admin_name = '{$admin_name}'";  //修改密码
					$res = $db->upOrIn($sql3);
					if($res){
						echo "<script>alert('修改密码成功');
						location.href='../nav/editPwd.php'</script>";
					}else{
						echo "no";
					}
				}
			}else{
				echo "<script>alert('请输入正确的旧密码');
				location.href='../nav/editPwd.php'</script>";
			}
		}else{
			echo "<script>alert('没有此用户');
			location.href='../nav/editPwd.php'</script>";
		}
}elseif($action == 'getinfo'){
	
	$admin_name = $_POST['admin_name'];
	$phone = $_POST['phone'];
	$Email = $_POST['Email'];
	
	
	
	$sql1= "SELECT admin_name FROM l_admin WHERE admin_name = '{$admin_name}'";
	$userArr = $db->query($sql1);
	
	if($admin_name == $userArr[0]['admin_name']){
		$sql2 = "UPDATE l_admin SET admin_tel = {$phone},admin_Email = '{$Email}' WHERE admin_name = '{$admin_name}'";
		
		$res = $db->upOrIn($sql2);
					if($res){
						echo "<script>alert('修改信息成功');
						location.href='../nav/personalInfo.php'</script>";
					}else{
						echo "no";
					}
		
	}else{
		echo "<script>alert('没有此用户');
		location.href='../nav/personalInfo.php'</script>";
	}
}
?>