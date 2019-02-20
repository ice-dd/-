<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style type="text/css">

        .XG- {
            height: 30px;
            width: 952px;
            background: #e6e6e6;
        }

        .XG- span {
            line-height: 30px;
            font-size: 14px;
            margin-left: 10px;
        }

        .XG-div {
            height: 270px;
            width: 952px;
            margin: 20px 0 0 15px;
        }

        .XG-table {
            width: 500px;
            margin-bottom: 30px;
        }

        .XG-table tr td:nth-child(2n+1) {
            text-align: right;
            width: 130px;
        }

        .table {
            width: 307px;
            margin: 45px 0 0 240px;
        }

        .XG-input {
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
        }
        

    </style>
</head>
<body>
<div class="XG-div">
    <div class="XG-">
        <span>修改密码</span>
    </div>
    <div class="table">
    	<form action="Controller/Personalnav.php?action=getpwd" method="post" enctype="multipart/form-data">
        <table border="0" class="XG-table">
            <tr>
                <td>请输入旧密码：</td>
                <td><input type="password" value="" name="old_pwd" class="XG-input" id="oldpwd" ></td>
            </tr>
            <tr>
            	<td></td>
            	<td id="old_pwderr"></td>
            </tr>
        </table>
        
        <table border="0" class="XG-table">
            <tr>
                <td>请输入新密码：</td>
                <td><input type="password" value="" name="new_pwd" class="XG-input" id="newpwd" ></td>
            </tr>
            <tr>
            	<td></td>
            	<td id="new_pwderr"></td>
            </tr>
        </table>
        <table border="0" class="XG-table">
            <tr>
                <td>再次输入新密码：</td>
                <td><input type="password" value="" name="repeat_pwd" class="XG-input" id="repeatpwd" ></td>
            </tr>
            <tr>
            	<td></td>
            	<td id="repeat_pwderr"></td>
            </tr>
        </table>
        <div style="margin-left: 135px;width: 205px;">
           <input type="button" value="确认" class="btn" id="btn"/>
           <input type="button" value="重置" class="btn" id="resetting"/>
        </div>
        </form>
    </div>
</div>
<script type="text/javascript" src="../js/jquery.min.js" ></script>
<script>
			$(function(){
				
				$('#resetting').click(function(){
//					$("#name,#oldpwd,#newpwd").val("");
					$("#old_pwderr,#new_pwderr,#repeat_pwderr").html("");
				})
				
				
				
				$("#btn").click(function(){
					
					
						if($("#oldpwd").val().length == 0){
							$("#old_pwderr").html("密码不能为空");
						}else if($("#oldpwd").val().length < 6){
							$("#old_pwderr").html("密码不能小于6");
						}else{
							$("#old_pwderr").html("");
							
							var oldpwd = true;
						}
					
					
				
						if($("#newpwd").val().length == 0){
							$("#new_pwderr").html("不能为空");
						}else if($("#newpwd").val().length < 6){
							$("#new_pwderr").html("密码不能小于6");
						}else{
							$("#new_pwderr").html("");
							
							var newpwd = true;
						}
					
					
					
						if($("#repeatpwd").val().length == 0){
							$("#repeat_pwderr").html("不能为空");
						}else if($("#repeatpwd").val().length < 6){
							$("#repeat_pwderr").html("密码不能小于6");
						}else{
							$("#repeat_pwderr").html("");
							
							var repeatpwd = true;
						}
					
					
					if(oldpwd&&newpwd&&repeatpwd){
						$("#btn").attr("type","submit");
					}
					
				})
				
				$("#oldpwd").blur(function(){
					if($("#oldpwd").val().length == 0){
						$("#old_pwderr").html("密码不能为空");
					}else if($("#oldpwd").val().length < 6){
						$("#old_pwderr").html("密码不能小于6");
					}else{
						$("#old_pwderr").html("");
					}
				})
					
				
				$("#newpwd").blur(function(){
					if($("#newpwd").val().length == 0){
						$("#new_pwderr").html("不能为空");
					}else if($("#newpwd").val().length < 6){
						$("#new_pwderr").html("密码不能小于6");
					}else{
						$("#new_pwderr").html("");
					}
				})
					
					
				$("#repeatpwd").blur(function(){
					if($("#repeatpwd").val().length == 0){
						$("#repeat_pwderr").html("不能为空");
					}else if($("#repeatpwd").val().length < 6){
						$("#repeat_pwderr").html("密码不能小于6");
					}else{
						$("#repeat_pwderr").html("");
					}
				})
								
			})
		</script>
</body>
</html>