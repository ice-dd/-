var username = document.getElementById("user_38");
var warn1 = document.getElementById("warn1");
function check(){
	checkValue(username,warn1,'用户名',/^[0-9a-zA-Z_]+$/,'数字、字母、下划线');
}

var passwrod1 = document.getElementById("pwd");
var warn2 = document.getElementById("warn2");
function cheak(){
	checkValue(passwrod1,warn2,'密码',/^[0-9a-zA-Z]+$/,'数字、字母');
	if(passwrod1.value != passwrod2.value){
		warn3.innerHTML = "两次密码不相同";
	}
}

var passwrod2 = document.getElementById("cfmpwd");
var warn3 = document.getElementById("warn3");
function cheak2(){
	if(passwrod1.value != passwrod2.value){
		warn3.innerHTML = "两次密码不相同";
	}else{
		warn3.innerHTML = "两次密码相同";
	}
}

var code = document.getElementById("code");
var warn4 = document.getElementById("warn4");
function cheak3(){
	if(code.value.length==0){
		warn4.innerHTML = "验证码不能为空";
	}else{
		warn4.innerHTML = " ";
	}
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
				tips.innerHTML = word1 + "格式正确";
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



var doLogin = document.getElementById("login");
function check1(){
	var bool1 = checkValue(username,warn1,'用户名',/^[0-9a-zA-Z_]+$/,'数字、字母、下划线');
	var bool2 = checkValue(passwrod1,warn2,'密码',/^[0-9a-zA-Z]+$/,'数字、字母');
	console.log(bool1,bool2);
	if(bool1==true && bool2==true && passwrod1.value == passwrod2.value){
//		alert("提交成功")
		window.location.href="login.html"
	}
	else{
		event.preventDefault();
		alert("提交失败，格式不正确")
	}
}

function check2(){
	var bool1 = checkValue(username,warn1,'用户名',/^[0-9a-zA-Z_]+$/,'数字、字母、下划线');
	var bool2 = checkValue(passwrod1,warn2,'密码',/^[0-9a-zA-Z]+$/,'数字、字母');
	console.log(bool1,bool2);
	if(bool1==true && bool2==true){
//		alert("提交成功")
	}
	else{
		event.preventDefault();
		alert("提交失败，格式不正确")
	}
}

function clea(){
	username.value="";
	passwrod1.value="";
	passwrod2.value="";
	code.value="";
}