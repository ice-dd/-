<?php

?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title></title>
	<script type="text/javascript" src="js/jquery.min.js" ></script>
	<style type="text/css">
		.wrapper{
			height: 300px;
			width: 868px;
			margin-left: 50px;
			margin-top: 10px;
			position: relative;
		}
		
		.wrapper table{
			margin-left: 200px;
    		margin-top: 40px;
		}
		
		.wrapper table tr{
			height: 50px;
		}
		
		#input{
			width: 300px;
		    height: 30px;
		    line-height: 48px;
		    padding-left: 10px;
		    border: 1px #d9d9d9 solid;
		    border-radius: 5px;
		    font-size: 14px;
		}
		.btn{
			width: 100px;
		    height: 30px;
		    border-width: 0px;
		    border-radius: 3px;
		    background: #d9d9d9;
		    outline: none;
		    color: black;
		    font-size: 17px;
		    cursor: pointer;
		    position: absolute;
		    bottom: 0;
		    left: 50%;
		    margin-left: -50px;
		}
	</style>
</head>
<body>
	<form action="Controller/Personalnav.php?action=exchanges" method="post" enctype="multipart/form-data">
		<div class="wrapper">
			<table border="0" cellspacing="" cellpadding="">
				<tr>
					<td>收件人姓名：</td>
					<td><input type="text" name="" id="input" value="" /></td>
				</tr>
				<tr>
					<td>收件人手机号：</td>
					<td><input type="tel" name="" id="input" value="" oninput="value=value.replace(/[^\d]/g,'')"/></td>
				</tr>
				<tr>
					<td>收件地址：</td>
					<td><input type="text" name="" id="input" value="" /></td>
				</tr>
				<tr>
					<td>邮编：</td>
					<td><input type="text" name="" id="input" value="" oninput="value=value.replace(/[^\d]/g,'')"/></td>
				</tr>
			</table>
			<input type="submit" name="btn" id="btn" class="btn" value="兑换" />
		</div>
	</form>	
</body>
</html>