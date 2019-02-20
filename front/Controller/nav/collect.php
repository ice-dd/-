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
			height: 570px;
			width: 868px;
			/*border: 1px solid black;*/
			margin-left: 50px;
			margin-top: 10px;
			position: relative;
		}
		.wrapper>ul>li{
			float: left;
			margin: 0 10px 40px 10px;
			width: 197px;
			height: 240px;
			background: #808080;
			text-align: center;
		}
		.wrapper>ul>li>img{
			margin: 10px;
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
	<div class="wrapper">
		<ul id="ul">
			<li><img src="../img/1no.png" id="1" alt="" /><span>未获得</span></li>
			<li><img src="../img/2no.png" id="2" alt="" /><span>未获得</span></li>
			<li><img src="../img/3no.png" id="3" alt="" /><span>未获得</span></li>
			<li><img src="../img/4no.png" id="4" alt="" /><span>未获得</span></li>
			<li><img src="../img/5no.png" id="5" alt="" /><span>未获得</span></li>
			<li><img src="../img/6no.png" id="6" alt="" /><span>未获得</span></li>
			<li><img src="../img/7no.png" id="7" alt="" /><span>未获得</span></li>
			<li><img src="../img/8no.png" id="8" alt="" /><span>未获得</span></li>
		</ul>
		<input type="button" name="btn" id="btn" class="btn" value="兑换" disabled="disabled" onclick="duihuan()"/>
	</div>
	<script type="text/javascript">
		$(function(){
			$.ajax({
				type:"post",
				url:"Controller/Personalnav.php?action=collect",
				data:"",
				dataType:"json",
				async:true,
				success:function(res){
					
					for(var i = 0;i<res.length;i++){
						if(res[i].id == 1){
//							console.log(res[i].award_id);
							
							var j = res[i].award_id
							
							var src = document.getElementById(j);
							
							src.setAttribute("src","../img/"+j+".png");
							
							src.nextSibling.innerHTML='已获得';
							
						}
					}
					
						var span = $("#ul span")
						var sum = 0;
						for(var n = 0;n<8;n++){
							if(span[n].innerHTML == "已获得"){
								sum += 1; 
							}
						}
						if(sum == 8){
							$("#btn").removeAttr("disabled");
						}
					
					
				},error:function(res){
					
				}
			});
		})
		
		function duihuan(){
			$("#right-nav").load("nav/exchange.php");
		}
		
		
	</script>
</body>
</html>