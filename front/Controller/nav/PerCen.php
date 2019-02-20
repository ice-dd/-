<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script type="text/javascript" src="js/jquery.min.js" ></script>
    <style type="text/css">
        .GRZL {

            width: 952px;
            margin: 20px 0 0 15px;
        }

        .GRZL- {
            height: 30px;
            width: 952px;
            background: #e6e6e6;
        }

        .GRZL- span {
            line-height: 30px;
            font-size: 14px;
            margin-left: 10px;
        }

        .GRZL table {
            width: 455px;
            margin: 30px auto;
        }

        .GRZL table tr {
            height: 50px;
        }

        .GRZL table tr td:nth-child(2n+1) {
            width: 80px;
        }

        .GRZL table tr td .sex {
            vertical-align: middle;
            width: 20px;
        }

		#revise {
        	background-color: #bf040f;
        	color: white;
            width: 80px;
            height: 30px;
            line-height: 30px;
            border: 1px #d9d9d9 solid;
            border-radius: 5px;
            font-size: 14px;
        }
			
        #confirm{
            width: 80px;
            height: 30px;
            line-height: 30px;
            border: 1px #d9d9d9 solid;
            border-radius: 5px;
            font-size: 14px;
        }

        button {
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
<div class="GRZL">
    <div class="GRZL-">
        <span>个人资料</span>
    </div>
   <form action="Controller/Personalnav.php?action=reviseinfo" method="post" enctype="multipart/form-data">
    <table border="0">
        <tr>
            <td>用户名：</td>
            <td class="user_name"></td>
             <td id="user_nameerr" style="color: red;"></td>
        </tr>
        <tr>
            <td>抽奖次数：</td>
            <td class="award_time"></td>
        </tr>
        <tr>
            <td>点卷数：</td>
             <td class="coin"></td>
        </tr>
        <tr>
            <td>手机：</td>
            <td class="phone"></td>
             <td id="phoneerr" style="color: red;" oninput="value=value.replace(/[^\d]/g,'')"></td>
        </tr>
        <tr>
            <td>邮箱：</td>
            <td class="Email"></td>
            <td id="Emailerr" style="color: red;" ></td>
        </tr>
    </table>
    <div style="margin-left: 310px">
        <input type="button" name="confirm" id="confirm" value="确认" disabled="disabled" />
        <input type="button" name="revise" id="revise" value="修改" />
    </div>
    </form>
    
    <div id="awardinfo">
    	
    </div>
</div>
<script>
	$(function(){
		$("#confirm").click(function(){
			if($("#user_name").val().length>=6){
				if($("#phone").val().length==11){
					if($("#Email").val().length>=14){
						$("#confirm").attr("type","submit");
					}else{
						$("#phoneerr").html('');
						
						$("#Emailerr").html('格式错误');
						alert("请输入正确的邮箱");
					}
				}else{
					$("#user_nameerr").html('');
					
					$("#phoneerr").html('格式错误');
					alert("请输入11位数的手机号");
					if($("#Email").val().length<14){
					$("#Emailerr").html('格式错误');
					alert("请输入正确的邮箱");
					}
				}
			}else{
				$("#user_nameerr").html('格式错误');
				alert("用户名不能小于6位数");
				if($("#phone").val().length<11){
					$("#phoneerr").html('格式错误');
					alert("请输入11位数的手机号");
				}
				if($("#Email").val().length<14){
					$("#Emailerr").html('格式错误');
					alert("请输入正确的邮箱");
				}
				
			};
		})
	})
</script>
<script>
	$(function(){
			$.ajax({
			type:"post",
			url:"Controller/Personalnav.php?action=getinfo",
			data:"",
			dataType:"json",
			async:true,
			success:function(res){
//				console.log(res);

				var user = res[0].user_name;
				var phone = res[0].phone;
				var Email = res[0].Email;
				$(".user_name").html(res[0].user_name);
				$(".award_time").html(res[0].award_time);
				$(".coin").html(res[0].coin);
				if(res[0].phone == null){
					$(".phone").html("暂无");
				}else{
					$(".phone").html(res[0].phone);
				}
				if(res[0].Email == null){
					$(".Email").html("暂无");
				}else{
					$(".Email").html(res[0].Email);
				}
				
    			$("#revise").click(function(){
    					$(".user_name").html('<input type="text" name="user_name" id="user_name"  value="'+user+'"/>');
    					$(".user_name").attr('value',user);
    					$(".phone").html('<input type="text" name="phone" id="phone"  value="'+phone+'"/>');
    					$(".Email").html('<input type="email" name="Email" id="Email"  value="'+Email+'"/>');
    				
    					$("#confirm").attr("disabled",false).css({"background-color":"#bf040f","color":"white"});
    					
    					$("#revise").attr("disabled","disabled").css({"background-color":"#DDDDDD","color":"#808080"});
        				
        				
    					
//  					$.ajax({
//  						type:"post",
//  						url:"Controller/Personalnav.php?action=reviseinfo",
//  						data:"",
//  						dataType:"json",
//  						async:true,
//  						ssuccess:function(res){
//  							console.log(res);
//  						}
//  					});
    			})
			},error:function(res){
				console.log(res);
			}
		});
		})
		
	
</script>
</body>
</html>