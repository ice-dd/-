<?php
	require_once("Code.php");
	$code = new Code(115,35,4);
	
	$codeValue = $code->getCode();
	session_start();
	$_SESSION['code_38'] = $codeValue;
?>