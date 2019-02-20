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
			
			#photo{
				height: 219px;
				width: 197px;
				position: absolute;	
				top: 40%;
    			left: 50%;
    			margin-left: -197px;
    			background-color: white;
    			text-align: center;
    			border: 1px solid black;
			}
			
			#zst{
				margin-top: 15px;
			}
			
			#photo div{
				display: inline-block;
				height: 21px;
				width: 15px;
				position: absolute;
				left: 100%;
				top: -1px;
				border: 1px solid black;
			}
		</style>
		<script type="text/javascript" src="../js/jquery.min.js" ></script>
	</head>
	<body>
		<div id="photo" style="display: none;">
			<div>
				<a style="cursor:hand">X</a>
			</div>
			<img id="zst" src="" />
		</div>
		
		
		<table id="userTable" class="table table-bordered" border="0" cellpadding="" cellspacing="">
			<tr>
				<th>序号</th>
				<th>奖品名称</th>
				<th>奖品简介</th>
				<th>奖品图片</th>
				<th>奖品数量</th>
				<th>奖品价格</th>
				<th>奖品状态</th>
				<th>操作</th>
			</tr>
		</table>
	</body>
	<script type="text/javascript">
		$(function(){
			$.ajax({
			type:"post",
			url:"../Controller/userController.class.php?action=getaward",
			data:"",
			dataType:"json",
			async:true,
			success:function(res){
				console.log(res);
				for(var i = 0;i<res.length;i++){
					var $tr = $("<tr></tr>");
					var $td1 = $("<td></td>");
					$td1.html(i+1);
					
					var $name = $("<td></td>");
					$name.html(res[i].award_name);
					
					var $info = $("<td></td>");
					$info.html(res[i].award_info);
					
					var $img = $("<td></td>");
//					$img.html('<a href="../img/'+res[i].award_img+'">'+res[i].award_img+'</a>');
					$img.html('<a id="img" href="jacascript::void(0)">'+res[i].award_img+'</a>');
					
					var $count = $("<td></td>");
					$count.html(res[i].award_count);
					
					var $price = $("<td></td>");
					$price.html(res[i].award_price);
					
					var $status = $("<td></td>");
					if(res[i].award_status == 0){
						$status.html("正常");
					}else if(res[i].award_status == 1){
						$status.html("下架");
					}
					
					var $action = $("<td></td>");
					
					var $btn = $("<input type='button' id='status' class='btn'/>");
					$btn.attr("award_id",res[i].award_id);
					if(res[i].award_status == 0){
						$status.html("正常");
						$btn.val("下架");
					}else{
						$status.html("下架");
						$btn.val("上架");
					}
					
					var $xg = $("<input type='button' value='修改' class='btn'>")
					$xg.attr("award_id",res[i].award_id);
					
					$
					
					
					$action.append($btn,$xg);
					$tr.append($td1,$name,$info,$img,$count,$price,$status,$action);
					$("#userTable").append($tr);
				}
				
				
				$("input[value='修改']").click(function(){
					var award_id = $(this).attr("award_id");
					$.post("../Controller/addAward.class.php?action=updataAward","award_id="+award_id,function(res){
							console.log(res);
							if(res=='ok'){
								location.href = "updateAward.php";
							}else{
								alert("错误");
							}
					},"text");
//					alert("奖品id:"+award_id);
//					$.ajax({
//						type:"post",
//						url:"../Controller/addAward.class.php?action=updataAward",
//						data:"award_id="+award_id,
//						dataType:"text",
//						async:true,
//						success:function(res){
//							console.log(res);
//							if(res=='ok'){
//								location.href = "updateAward.php"
//							}else{
//								
//							}
//						},error:function(res){
//							console.log(res);
//						}
//					});
				})
				
				
				
				
				
				
				
				
				$("input[value='下架']").click(function(){
					var award_id = $(this).attr("award_id");
					var obj = {"award_id":award_id,"award_status":"1"};
					var jsonStr = JSON.stringify(obj);
					$.post("../Controller/userController.class.php?action=award_freeze/thaw",{"data":jsonStr},function(res){
						console.log(res);
						if(res == "ok"){
							alert("下架成功");
							window.location.reload();
						}else{
							alert("下架失败");
						}
					},"text");
				})
				
				$("input[value='上架']").click(function(){
					var award_id = $(this).attr("award_id");
					var obj = {"award_id":award_id,"award_status":"0"};
					var jsonStr = JSON.stringify(obj);
					$.post("../Controller/userController.class.php?action=award_freeze/thaw",{"data":jsonStr},function(res){
						console.log(res);
						if(res == "ok"){
							alert("上架成功");
							window.location.reload();
						}else{
							alert("上架失败");
						}
					},"text");
				})
				
				$('a').click(function(){
					if($('#photo').css('display')=='none'){
						$('#photo').css('display','block');
					
//						console.log($(this).html());
						$('#zst').attr("src","../img/"+$(this).html());
						
					}else{
						$('#photo').css('display','none')
					}
				})
				
				
					

				
			},error:function(res){
				console.log(res);
			}
		});
		})
	</script>
</html>