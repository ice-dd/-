$(function(){
	
	
	
	$.post("Controller/indexController.php?action=getAwardLists",function(res){
		for(var i = 0;i<res.length;i++){
			var $awardImg = $("<img />");
			$awardImg.attr("src","../img/"+res[i].award_img);
			$("#awardList").append($awardImg);
		}
	},"json")
	
	
	$("#Per").click(function(){
		$.post("Controller/L&RController.php?action=online",function(res){
			console.log(res);
			if(res.user_id==0){		//还没登录
				if(confirm("您当前还未登录,是否立即前往登录？")){
						location.href="login.html";
					}else{
						
					}
			}else{
				location.href="Personal_center.php";
			}
	},"json")
	})
	
})
