<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/CMSlogin.css" />
</head>
<body>
	<div class="container demo-1">
		<div class="content">
			<div id="large-header" class="large-header" style="height: 976px;">
				<div class="logo_box">
					<h3>欢迎你</h3>
					<form class="loginForm" action="">
						<div class="input_user">
							<span class="u_user1"></span>
							<input name="username" class="text" id="username" type="text" placeholder="请输入账户">
							<p id="userTips"></p>
						</div>
						<div class="input_pass">
							<span class="us_uer2"></span>
							<input name="pwd" class="text" id="pwd" type="password" placeholder="请输入密码">
							<p id="passTips"></p>
						</div>
						<div class="input_outer">
							<input name="code_38" class="text1" id="code_38" type="text" placeholder="请输入验证码" maxlength="4" >
							<img src="css/Codecms.php" onclick="this.src='css/Codecms.php?rand='+Math.random()"/>
							<p id="codeTips"></p>
						</div>
						<div class="mb2">
							<input class="act-but submit" id="submit" type="submit" value="登陆" style="color: #FFFFFF">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script src="js/js.js"></script>
	<script type="text/javascript" src="js/jquery.min.js" ></script>
</body>
</html>