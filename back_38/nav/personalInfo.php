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
			
			#status{
				margin-right: 5px;
			}
			
			#name,#phone,#Email{
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
		<form action="../Controller/userinfo.php?action=getinfo" method="post" enctype="multipart/form-data" style="margin-left: 620px;">
			<p>
				用户名：<input type="text" name='admin_name' id="name" />
				<span id="nameerr"></span>
			</p>
			
			<p>
				手机号：<input type="tel" name='phone' id="phone"/>
				<span id="phoneerr"></span>
			</p>
			
			<p>
				邮箱：<input type="email" name='Email'id="Email" style="margin-left: 14px;"/>
				<span id="Emailerr"></span>
			</p>
			
			<input type="button" value="修改" class="btn" id="btn" style="margin-left: 55px;"/>
			<input type="button" value="重置" id="resetting" class="btn"/>
		</form>
		<script>
			$(function(){
				
				$('#resetting').click(function(){
					$("#nameerr,#phoneerr,#Emailerr").html("");
				})
				
				
				
				$("#btn").click(function(){
					
					if($("#name").val().length == 0){
						$("#nameerr").html("用户名不能为空");
					}else if($("#name").val().length < 6){
						$("#nameerr").html("用户名不能小于6");
					}else{
						$("#nameerr").html("");
						
						var name = true;
						
					}
					
					if($("#phone").val().length == 0){
						$("#phoneerr").html("手机号不能为空");
					}else if($("#phone").val().length != 11){
						$("#phoneerr").html("请输入正确的手机号");
					}else{
						$("#phoneerr").html("");
						
						var phone = true;
					}
					
					if($("#Email").val().length == 0){
						$("#Emailerr").html("邮箱不能为空");
					}else if($("#Email").val().length <= 11){
						$("#Emailerr").html("请输入正确的邮箱");
					}else{
						$("#Emailerr").html("");
						
						var Email = true;
					}
					
					if(name&&phone&&Email){
						$("#btn").attr("type","submit");
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
					
				
				$("#phone").blur(function(){
					if($("#phone").val().length == 0){
						$("#phoneerr").html("手机号不能为空");
					}else if($("#phone").val().length != 11){
						$("#phoneerr").html("请输入正确的手机号");
					}else{
						$("#phoneerr").html("");
					}
				})
					
					
				$("#Email").blur(function(){
					if($("#Email").val().length == 0){
						$("#Emailerr").html("邮箱不能为空");
					}else if($("#Email").val().length <= 11){
						$("#Emailerr").html("请输入正确的邮箱");
					}else{
						$("#Emailerr").html("");
					}
				})
								
			})
		</script>
	</body>
</html>