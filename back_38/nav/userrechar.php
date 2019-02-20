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
		<form action="../Controller/userrechar.class.php?action=getrechar" method="post" enctype="multipart/form-data">
			<!--奖品名称 3--10 非空-->
			<p>充值用户：<select name="select"></select></p>
			<!--奖品描述 10--30 非空--> 	
			<p>充值金额：<input type="number" name="coin" oninput="value=value.replace(/[^\d]/g,'')"></p>
			<input type="submit" value="充值" />
			<input type="reset" value="重置"/>
			<div class="abc">
				
			</div>
		</form>
	</body>
	<script>
		$.ajax({
			type:"post",
			url:"../Controller/userrechar.class.php?action=getuser",
			data:"",
			dataType:"json",
			async:true,
			success:function(res){
				console.log(res);
				
				
				for(var i = 0;i<res.length;i++){
					var $name = $("<option></option>");
					$name.attr("name",res[i].user_id);
						$name.html(res[i].user_name);
					$("select").append($name);
				}
			},error:function(res){
				console.log(res);
			}
		});
	</script>
</html>