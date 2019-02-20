var username = document.getElementById("username");
var userTips = document.getElementById("userTips");
username.onblur = function(){
	checkValue(username,userTips,'用户名',/^[0-9a-zA-Z_]+$/,'数字、字母、下划线');
}
var pwd = document.getElementById("pwd");
var passTips = document.getElementById("passTips");

pwd.onblur = function(){
	checkValue(pwd,passTips,'密码',/^[0-9a-zA-Z]+$/,'数字、字母');
}

function checkValue(obj,tips,word1,reg,regerror){
	var user = obj.value;
	if(user==""){
		tips.innerHTML = word1 + "不能为空";
		return false;
	}else{
		if(user.length >=6 && user.length<=10){
			var regObj = new RegExp(reg);
			var flag = regObj.test(user);
			if(flag){
				tips.innerHTML ="";
				return true;
			}else{
				tips.innerHTML = "请输入" + regerror;
				return false;
			}
		}else{
			tips.innerHTML = word1 + "长度为6-10";
			return false;
		}
	}
}

var doLogin = document.getElementById("submit");
doLogin.onclick = function(){
	var bool1 = checkValue(username,userTips,'用户名',/^[0-9a-zA-Z_]+$/,'数字、字母、下划线');
	var bool2 = checkValue(pwd,passTips,'密码',/^[0-9a-zA-Z]+$/,'数字、字母');
	console.log(bool1,bool2);
	event.preventDefault();
	
	var codeView = document.getElementById("code_38");
	var jsonObj = {"username":username.value,"pwd":pwd.value,"code":codeView.value};
	console.log(jsonObj);
	var jsonStr = JSON.stringify(jsonObj);
	console.log(jsonStr);
	
	
	if(bool1==true && bool2==true){
		$.ajax({
			type:"post",
			url:"Controller/loginController.class.php?action=login",
			data:"data="+jsonStr,
			dataType:"text",
			async:true,
			success:function(res){
				console.log(res);
				if(res=="ok"){
					alert("登陆成功");
					window.location.href="CMS.php";
				}else if(res=="no"){
					alert("登陆失败");
					window.location.href="CMSlogin.php";
				}else if(res=="codeno"){
					alert("验证码错误");
					window.location.href="CMSlogin.php";
				}
			},
		});
	}else{
		alert("提交失败，格式不正确")
	}
}


$(function(){
	
})
