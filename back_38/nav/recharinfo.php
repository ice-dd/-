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
			
			#status{
				margin-right: 5px;
			}
		</style>
		<script type="text/javascript" src="../js/jquery.min.js" ></script>
	</head>
	<body>
		
		
		<table id="userTable" class="table table-bordered" border="0" cellpadding="" cellspacing="">
			<tr>
				<th>序号</th>
				<th>用户id</th>
				<th>充值点卷</th>
				<th>充值时间</th>
			</tr>
		</table>
	</body>
	<script type="text/javascript">
		$(function(){
			$.ajax({
			type:"post",
			url:"../Controller/userrechar.class.php?action=getmoney",
			data:"",
			dataType:"json",
			async:true,
			success:function(res){
				console.log(res);
				for(var i = 0;i<res.length;i++){
					var $tr = $("<tr></tr>");
					var $td1 = $("<td></td>");
					$td1.html(i+1);
					var $user_id = $("<td></td>");
					$user_id.html(res[i].user_name);
					
					var $money = $("<td></td>");
					$money.html(res[i].money);
					
					var $recharge_time = $("<td></td>");
					$recharge_time.html(res[i].recharge_time);
					
					$tr.append($td1,$user_id,$money,$recharge_time);
					$("#userTable").append($tr);
				}
			},error:function(res){
				console.log(res);
			}
		});
		})
	</script>
</html>