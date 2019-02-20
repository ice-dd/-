$(function(){
	var flag = false;
	
	//抽奖动画
	function doAward(rand){
		return function(){
			if(rand>8){//1--8
                rand = rand%8;
                if(rand==0) rand = 8;
            }
			$(".awardDiv").removeClass("hoverDiv");
			$(".award"+rand).addClass("hoverDiv");
		}	
	}

	//获取奖品信息
	$.ajax({
		type:"post",
		url:"Controller/awardList.php?action=getAwardList",
		data:"",
		dataType:"json",
		async:true,
		success:function(res){
			console.log(res);
			for(var i = 0;i<res.length+1;i++){		//循环9次
				if(i<4){
					var $awardDiv = $("<div award_id='"+res[i].award_id+"'award_name='"+res[i].award_name+"' class='awardDiv award"+(i+1)+"'></div>");
					var $award_img = $("<img />");
					$award_img.attr("src","../img/"+res[i].award_img);
					$awardDiv.append($award_img);
				}else if(i==4){
					var $awardDiv = $("<div class='awardBtn' id='awardBtn'>抽奖</div>");
				}else{
					var $awardDiv = $("<div award_id='"+res[i-1].award_id+"'award_name='"+res[i-1].award_name+"' class='awardDiv award"+(i)+"'></div>");
					var $award_img = $("<img />");
					$award_img.attr("src","../img/"+res[(i-1)].award_img);
					$awardDiv.append($award_img);
				}
				$("#awardBox").append($awardDiv);
			}
			$("#awardBtn").click(function(){		//点击抽奖按钮
				$.ajax({
					type:"post",
					url:"Controller/L&RController.php?action=online",
					data:"",
					dataType:"json",
					async:true,
					success:function(res){
						console.log(res);
						if(res.user_id==0){		//还没登录
							if(confirm("您当前还未登录,是否立即前往登录？")){
								location.href="login.html";
							}
						}else{			//已登录，判断次数
							if(res.award_time==0){
								if(confirm("您的抽奖次数已用完，是否前往个人中心充值？")){
									location.href="person.php";
								}
							}
							else{
								if(flag == false) { //当动画没有运行时可以点击			
									flag = true;
									var rand = Math.ceil(Math.random()*8);
									var award_id = $(".award"+rand).attr("award_id");
//									alert("rand="+rand+";奖品id="+award_id);
									$.ajax({
										type:"post",
										url:"Controller/awardList.php?action=doAward",
										data:"award_id="+award_id,
										dataType:"text",
										async:true,
										success: function(res) {
												var num = rand+24;
												for(var i = 1;i<=num;i++){	//1--num
													setTimeout(doAward(i),6*i*i);		//在指定时间后执行相关操作
												}
												setTimeout(function(){	//在动画结束后			
													alert("恭喜您 抽到的奖品为："+$(".award"+rand).attr("award_name"));
													flag = false;
												},6*(num+1)*(num+1));		
										},error: function(res){
											console.log(res);
										}
									});
								}
								
								
								alert("剩余抽奖次数为："+res.award_time);
							}
						}
					},
					error:function(res){console.log(res);}
				})
			})
		},
		error:function(res){
			console.log(res);
		}
	});
})
