<?php
header("content-Type:text/html;charset = utf-8");
@session_start();
require_once("../database/Database.class.php");
$db = Database::mydb($config);
$action = isset($_GET['action'])?$_GET['action']:"";

//添加奖品
if($action == "addAward"){
	$award_name = $_POST['award_name'];
	$award_info = $_POST['award_info'];
//	$award_img = $_POST['award_name'];
	$award_count = (int)$_POST['award_count'];
	$award_price = (int)$_POST['award_price'];
//	var_dump($award_name,$award_info,$award_count,$award_price);
	$file = $_FILES["award_img"];
//	var_dump($file);
	
//	var_dump($award_count,$award_price);

//	if($award_count == 0){
//		echo "<script>alert('奖品数量不能为0');
//		location.href='../nav/addAward.php'</script>";
//	}else{
//		
//	}


	if($file['error']==0){
		echo "ok";
		if($file['type']=='image/png' || $file['type'] == 'image/jpeg'){
			echo "格式正确";
			if($file['size'] < 1024*1024){
				echo "文件大小ok";
				$filename = time().$file['name'];
				$bool = move_uploaded_file($file['tmp_name'],"../../img/".$filename);
				echo $bool;
				if($bool){
					
					$sql = "INSERT into l_award 
					(award_name,award_info,award_img,award_count,award_price) 
					VALUES('{$award_name}','{$award_info}','$filename',{$award_count},{$award_count})";
					
					$res = $db->upOrIn($sql);
					if($res){
						echo "<script>alert('添加奖品成功');
						location.href='../nav/awardList.php'</script>";
					}else{
						echo "<script>alert('添加奖品失败');
						location.href='../nav/addAward.php'</script>";
					}
					
					echo "<script>alert('图片上传成功');
					location.href='../nav/addAward.php'</script>";
				}else{
					echo "<script>alert('图片上传失败');
					location.href='../nav/addAward.php'</script>";
				}
			}else{
				echo "<script>alert('请上传小于1M的图片');
				location.href='../nav/addAward.php'</script>";
			}
		}else{
			echo "<script>alert('图片格式不对，请上传png/jpeg格式的图片');
			location.href='../nav/addAward.php'</script>";
		}
	}else{
		echo "<script>alert('图片信息不能为空');
		location.href='../nav/addAward.php'</script>";
	}
}else if($action == "updataAward"){
	
	$award_id = $_POST["award_id"];
	
//	echo $award_id;

	$sql = "SELECT * FROM l_award WHERE award_id = {$award_id}";
	
	$data = $db ->query($sql);
	
	if(count($data)){
		$_SESSION['nowaward'] = $data[0];
		echo "ok";
	}else{
		echo "no";
	}
	
//	$_SESSION['nowaward'] = $data[0];
//	var_dump($_SESSION['nowaward']);
//	echo $data;
}else if($action == 'updataAwards'){
	
	$award_id = $_POST['award_id'];
	$award_name = $_POST['award_name'];
	$award_info = $_POST['award_info'];
	$award_price = (int)$_POST['award_price'];
	$award_count = (int)$_POST['award_count'];
	$old_img = $_POST['old_img'];
	$new_img = $_FILES['new_img'];
//	echo '<pre>';
//	var_dump($award_id,$award_info,$award_price,$award_count,$old_img,$new_img);
//	var_dump($award_name);
	
	if($new_img['error']==0){
		if($new_img['type']=='image/png' || $new_img['type'] == 'image/jpeg'){
			echo "格式正确";
			if($new_img['size'] < 1024*1024){
				echo "文件大小ok";
				$filename = $new_img['name'];
				$bool = move_uploaded_file($new_img['tmp_name'],"../../img/".$filename);
				echo $bool;
				if($bool){
					
					$sql = "UPDATE l_award 
							SET award_name = '{$award_name}' , award_info = '{$award_info}',award_img = '{$filename}',award_count = {$award_count},award_price = {$award_price} 
							WHERE award_id = {$award_id}";
					
					$res = $db->upOrIn($sql);
					if($res){
						echo "<script>alert('添加奖品成功');
						location.href='../nav/awardList.php'</script>";
					}else{
						echo "<script>alert('添加奖品失败');
						location.href='../nav/addAward.php'</script>";
					}
					
					echo "<script>alert('图片上传成功');
					location.href='../nav/addAward.php'</script>";
				}else{
					echo "<script>alert('图片上传失败');
					location.href='../nav/addAward.php'</script>";
				}
			}else{
				echo "<script>alert('请上传小于1M的图片');
				location.href='../nav/addAward.php'</script>";
			}
		}else{
			echo "<script>alert('图片格式不对，请上传png/jpeg格式的图片');
			location.href='../nav/addAward.php'</script>";
		}
		
		
	}elseif($new_img['error']==4){
		$sql = "UPDATE l_award 
				SET award_name = '{$award_name}' , award_info = '{$award_info}',award_count = {$award_count},award_price = {$award_price} 
				WHERE award_id = {$award_id}";
			
		$res = $db ->upOrIn($sql);
		if($res){
			echo "<script>alert('修改成功');location.href='../nav/awardList.php'</script>";
		}else{
			echo "no";
		}
	}else{
		echo "imgerror";
	}
}
?>