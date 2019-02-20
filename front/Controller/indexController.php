<?php
header("content-Type:text/html;charset = utf-8");
require_once("../database/Database.class.php");
$db = Database::mydb($config);

$action = isset($_GET['action'])?$_GET['action']:"";
if($action ='getAwardLists'){
	
	$sql = "SELECT * FROM l_award where award_status='0'";
	
	$data = $db->query($sql);
	
	echo json_encode($data);
}


?>