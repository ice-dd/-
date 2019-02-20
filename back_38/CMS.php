<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link type="text/css" rel="stylesheet" href="css/CMS.css" />
	<link rel="stylesheet" href="css/bootstrap.css" />
	<script src="js/jquery.min.js"></script>
	<title>后台管理系统</title>
</head>
<body>
	<div class="left">
		<div class="title">
			<img src="img/33916ea6a2a6c7c0!400x400_big.jpg">
			<span>admin</span>
		</div>
		<div class="nav">
			<?php
				include 'CMS_nav.php';
			?>
		</div>
	</div>
	<div class="right">
		<div class="top">
		<?php
	        session_start();
	        if(isset($_SESSION['admin_38'])){
        	$admin = json_decode($_SESSION['admin_38'],true);
        	$admin_name = $admin['admin_name'];
        	echo "<span>欢迎来到dnf抽奖管理系统，欢迎您,</span>
        	<span style='color: red;'>".$admin_name."</span>
        	<a href='Controller/loginController.class.php?action=logout'>退出</a>";
        	}else{
        		echo "<script>if(confirm('您没登陆')){ 				location.href='CMSlogin.php'}else{location.href='CMS.php'}</script>";
//      		echo "<a href='CMSlogin.php'><span>请登录</span></a>";
        	}
        ?>
		</div>
		<div class="bottom">
			<h2>用户信息列表</h2>
			<iframe class="iframe" frameborder="no" src="nav/userList.php"></iframe>
		</div>
	</div>
	<script>	
		
	$(function(){
		$(".menuP").click(function(){
			$(".menuUl").slideUp();
			$(this).next().slideDown();
		})
		
		$(".menuLi").click(function(){
			var url = $(this).attr("url");
			$(".iframe").attr("src",url);
			
			var name = $(this).html();
			$("h2").html(name);
		});
		
	})
	</script>
</body>
</html>