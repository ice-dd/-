var user_38 = document.getElementById("user_38");
var pwd = document.getElementById("pwd");
var code = document.getElementById("code");
var warn3 = document.getElementById("warn3");
function cheak2(){
	if(code.value.length==0){
		warn3.innerHTML = "验证码为空";
	}else{
		warn3.innerHTML = "";
	}
}


function clea(){
	user_38.value="";
	pwd.value="";
	code.value="";
}