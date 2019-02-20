<?php
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<link rel="stylesheet" href="../css/bootstrap.css" />
		<style>
			*{
				padding:0;
				margin:0;
			}
			
			#name,#oldpwd,#newpwd{
				width: 300px;
            	height: 30px;
            	line-height: 48px;
            	padding-left: 10px;
            	border: 1px #d9d9d9 solid;
            	border-radius: 5px;
            	font-size: 14px;
			}
			
		</style>
		<script type="text/javascript" src="../js/jquery.min.js" ></script>
	</head>
	<body>
		<form action="../Controller/userinfo.php?action=getpwd" method="post" enctype="multipart/form-data" style="margin-left: 620px;"> 
			<p>用户名：<input type="text" name='admin_name' id="name"/><span id="nameerr"></span></p>
			
			<p>旧密码：<input type="password" name='old_pwd' id="oldpwd"/><span id="oldpwderr"></span></p>
			
			<p>新密码：<input type="password" name='new_pwd' id='newpwd' oninput="value=value.replace(/[^\d]/g,'')"/><span id="newpwderr"></span></p>
			<input type="button" value="修改" class="btn" id="on" style="margin-left: 55px;"/>
			<input type="button" value="重置" class="btn" id="resetting" />
		</form>
		<script>
			$(function(){
				
				$('#resetting').click(function(){
					$("#name,#oldpwd,#newpwd").val("");
					$("#nameerr,#oldpwderr,#newpwderr").html("");
				})
				
				
				
				$("#on").click(function(){
					
					if($("#name").val().length == 0){
						$("#nameerr").html("用户名不能为空");
					}else if($("#name").val().length >= 6){
						$("#nameerr").html("");
						
						var user = true;
					}
					
					if($("#oldpwd").val().length == 0){
						$("#oldpwderr").html("密码不能为空");
					}else if($("#oldpwd").val().length >= 6){
						$("#oldpwderr").html("");
						
						var oldpwd = true;
					}
					
					if($("#newpwd").val().length == 0){
						$("#newpwderr").html("密码不能为空");
					}else if($("#newpwd").val().length >= 6){
						$("#newpwderr").html("");
						
						var newpwd = true;
					}
					
					if(user&&oldpwd&&newpwd){
						$("#on").attr("type","submit");
					}
					
				})
				
				$("#name").blur(function(){
					if($("#name").val().length == 0){
						$("#nameerr").html("用户名不能为空");
					}else if($("#name").val().length < 6){
						$("#nameerr").html("用户名不能小于6");
					}else{
						$("#nameerr").html("");
					}
				})
					
				
				$("#oldpwd").blur(function(){
					if($("#oldpwd").val().length == 0){
						$("#oldpwderr").html("不能为空");
					}else{
						$("#oldpwderr").html("");
					}
				})
					
					
				$("#newpwd").blur(function(){
					if($("#newpwd").val().length == 0){
						$("#newpwderr").html("不能为空");
					}else if($("#newpwd").val().length < 6){
						$("#newpwderr").html("密码不能小于6");
					}else{
						$("#newpwderr").html("");
					}
				})
								
			})
		</script>
	</body>
</html>