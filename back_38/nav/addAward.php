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
			
			.input{
				width: 300px;
	            height: 30px;
	            line-height: 48px;
	            padding-left: 10px;
	            border: 1px #d9d9d9 solid;
	            border-radius: 5px;
	            font-size: 14px;
			}
			
			.textarea{
				
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
		<form action="../Controller/addAward.class.php?action=addAward" method="post" enctype="multipart/form-data" style="
    margin-left: 620px;
">
			<!--奖品名称 3--10 非空-->
			<p>
				奖品名称：<input type="text" name="award_name" id="name" class="input"  oninput="value=value.replace(/[^\a-\z\A-\Z0-9\u4E00-\u9FA5\.]/g,'')">
				<span id="nameerr"></span>
			</p>
			<!--奖品描述 10--30 非空--> 	
			<p>
				奖品描述：<textarea name="award_info" rows="" cols="" id="info" class="textarea"></textarea>
				<span id="infoerr"></span>
			</p>
			<!--奖品图片 非空-->
			<p>奖品图片：<input type="file" name="award_img" id="img" /></p>
			<!--奖品数量 >0 非空-->
			<p>
				奖品数量：<input type="number" name="award_count" id="count" class="input" >
				<span id="counterr"></span>
			</p>
			<!--奖品价格 >0 非空-->
			<p>
				奖品价格：<input type="number" name="award_price" id="price" class="input" oninput="value=value.replace(/[^\d]/g,'')">
				<span id="priceerr"></span>	
			</p>
			<input type="button" value="添加" class="btn" id="add"/>
			<input type="reset" value="重置" id="resetting" class="btn"/>
		</form>
	</body>
	<script>
	$(function(){
		$('#resetting').click(function(){
			$("#name,#info,#Email,#count,#price,#img").val("");
			$("#nameerr,#infoerr,#counterr,#priceerr").html("");
		})
		
		$("#add").click(function(){
			if($("#name").val().length==0){
				$("#nameerr").html("奖品名不能为空");
			}else if($("#name").val().length<3){
				$("#nameerr").html("奖品名不能小于3");
			}else{
				$("#nameerr").html("");
				var name = true;
			}
			
			if($("#info").val().length==0){
				$("#infoerr").html("奖品描述不能为空");
			}else if($("#info").val().length<4){
				$("#infoerr").html("奖品描述不能小于4");
			}else{
				$("#infoerr").html("");
				var info = true;
			}
			
			if($("#count").val().length==0){
				$("#counterr").html("奖品数量不能为空");
			}else if($("#count").val()<=0){
				$("#counterr").html("奖品数量不能小于1");
			}else{
				$("#counterr").html("");
				var count = true;
			}
			
			if($("#price").val().length==0){
				$("#priceerr").html("奖品价格不能为空");
			}else if($("#price").val()<=0){
				$("#priceerr").html("奖品价格不能小于1");
			}else{
				$("#priceerr").html("");
				var price = true;
			}

			if(name == true && info == true && count == true && price == true){
				$("#add").attr("type","submit");
			}
		})
		
		$("#name").blur(function(){
			if($("#name").val().length==0){
				$("#nameerr").html("奖品名不能为空");
			}else if($("#name").val().length<3){
				$("#nameerr").html("奖品名不能小于3");
			}else{
				$("#nameerr").html("");
			}
		})
			
		$("#info").blur(function(){
			if($("#info").val().length==0){
				$("#infoerr").html("奖品描述不能为空");
			}else if($("#info").val().length<4){
				$("#infoerr").html("奖品描述不能小于4");
			}else{
				$("#infoerr").html("");
			}
		})
			
		$("#count").blur(function(){	
			if($("#count").val().length==0){
				$("#counterr").html("奖品数量不能为空");
			}else if($("#count").val()<=0){
				$("#counterr").html("奖品数量不能小于1");
			}else{
				$("#counterr").html("");
			
			}
		})
			
		$("#price").blur(function(){	
			if($("#price").val().length==0){
				$("#priceerr").html("奖品价格不能为空");
			}else if($("#price").val()<=0){
				$("#priceerr").html("奖品价格不能小于1");
			}else{
				$("#priceerr").html("");
			
			}
		})
	})
		
	</script>
</html>