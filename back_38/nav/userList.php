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
			
			td{
				text-align: center;
			}
		</style>
		<script type="text/javascript" src="../js/jquery.min.js" ></script>
	</head>
	<body>
		<table id="userTable" class="table table-bordered" border="0" cellpadding="" cellspacing="">
			
		</table>
	</body>
	<script type="text/javascript">
		$(function(){
			$.ajax({
			type:"post",
			url:"../Controller/userController.class.php?action=getUsername",
			data:"",
			dataType:"json",
			async:true,
			success:function(res){
				console.log(res);
				var $thr = $("<tr></tr>");
				var $th1 = $("<th></th>");
				$th1.html("序号");
				var $th2 = $("<th></th>");
				$th2.html("账号");
				var $th3 = $("<th></th>");
				$th3.html("抽奖次数");
				var $th4 = $("<th></th>");
				$th4.html("点卷");
				var $th5 = $("<th></th>");
				$th5.html("手机号");
				var $th6 = $("<th></th>");
				$th6.html("邮箱");
				var $th7 = $("<th></th>");
				$th7.html("创建时间");
				var $th8 = $("<th></th>");
				$th8.html("用户状态");
				var $th9 = $("<th></th>");
				$th9.html("操作");
				$thr.append($th1,$th2,$th3,$th4,$th5,$th6,$th7,$th8,$th9);
				$("#userTable").append($thr);
				for(var i = 0;i<res.length;i++){
					var $tr = $("<tr></tr>");
					var $td1 = $("<td></td>");
					$td1.html(i+1);
					var $name = $("<td></td>");
					$name.html(res[i].user_name);
					var $times = $("<td></td>");
					$times.html(res[i].award_time);
					var $coin = $("<td></td>");
					$coin.html(res[i].coin);
					var $phone = $("<td></td>");
					if(res[i].phone){
						$phone.html(res[i].phone);
					}else{
						$phone.html("暂无");
					}
					var $Email = $("<td></td>");
					if(res[i].Email){
						$Email.html(res[i].Email);
					}else{
						$Email.html("暂无");
					}
					var $status = $("<td></td>");
					if(res[i].user_status == 0){
						$status.html("正常");
					}else if(res[i].user_status == 1){
						$status.html("冻结");
					}
					
					var $reg_time = $("<td></td>");
					$reg_time.html(res[i].reg_time);
					
					var $action = $("<td></td>");
					
					var $btn = $("<input type='button' id='status' class='btn'/>");
					$btn.attr("user_id",res[i].user_id);
					if(res[i].user_status == 0){
						$status.html("正常");
						$btn.val("冻结");
					}else{
						$status.html("冻结");
						$btn.val("解冻");
					}
					
					var $restBtn = $("<input type='button' class='btn'/>");
					$restBtn.val("重置密码");
					$restBtn.attr("user_id",res[i].user_id);
					$action.append($btn,$restBtn);
					
					$tr.append($td1,$name,$times,$coin,$phone,$Email,$reg_time,$status,$action);
					$("#userTable").append($tr);
				}
				
					$("input[value='重置密码']").click(function(){
//					console.log($(this));
					var user_id = $(this).attr("user_id");
//					alert(user_id);
					
					var obj = {"user_id":user_id,"user_pwd":"123456"};
					var jsonStr = JSON.stringify(obj);
					console.log(jsonStr);
					$.post("../Controller/userController.class.php?action=reset_pwd",{"data":jsonStr},function(res){
						console.log(res);
						if(res == "ok"){
							alert("重置成功");
							window.location.reload();
						}else{
							alert("重置失败");
						}
					},"text");
				})
				
				
				$("input[value='冻结']").click(function(){
//					console.log($(this));
					var user_id = $(this).attr("user_id");
//					alert(user_id);
					
					var obj = {"user_id":user_id,"user_status":"1"};
					var jsonStr = JSON.stringify(obj);
					console.log(jsonStr);
					$.post("../Controller/userController.class.php?action=freeze/thaw",{"data":jsonStr},function(res){
						console.log(res);
						if(res == "ok"){
							alert("解冻成功");
							window.location.reload();
						}else{
							alert("解冻失败");
						}
					},"text");
				})
				
				$("input[value='解冻']").click(function(){
//					console.log($(this));
					var user_id = $(this).attr("user_id");
//					alert(user_id);
					
					var obj = {"user_id":user_id,"user_status":"0"};
					var jsonStr = JSON.stringify(obj);
					console.log(jsonStr);
					$.post("../Controller/userController.class.php?action=freeze/thaw",{"data":jsonStr},function(res){
						console.log(res);
						if(res == "ok"){
							alert("解冻成功");
							window.location.reload();
						}else{
							alert("解冻失败");
						}
					},"text");
				})
			},error:function(res){
				console.log(res);
			}
		});
		})
	</script>
</html>