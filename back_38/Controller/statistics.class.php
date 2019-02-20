<?php
header("Content-type:text/html;charset=utf-8");
@session_start();
require_once("../database/Database.class.php");
$db = Database::mydb($config);
$action = isset($_GET['action'])?$_GET['action']:"";


if($action== "userstatistics"){
	$sql ="SELECT count(user_id) reg_count,year(reg_time) reg_year,
			month(reg_time) reg_month
			FROM l_user GROUP BY month(reg_time)";
			
	$data = $db->query($sql);
	

	
	$monthArr = [];
	$countArr = [];
	
	

	foreach($data as $key=>$val){
		
		$monthArr [] = $val['reg_year']."年".$val['reg_month']."月";
		
		$countArr [] = (int)$val['reg_count'];
		
	}
	

	
	
	echo json_encode([                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
	    "month"=>$monthArr,
		"count"=>$countArr
	]);
	
	
	
}elseif($action=='rechargestatistics'){
	$sql ="SELECT sum(money) reg_sum,YEAR (recharge_time) reg_year,
	MONTH (recharge_time) reg_month
	FROM l_recharge_record GROUP BY MONTH (recharge_time)";
	$data = $db->query($sql);
	
//	var_dump($data);
	
	$monthArr = [];
	$sumArr = [];
	foreach($data as $key=>$val){
		
		
		$monthArr [] = $val['reg_year']."年".$val['reg_month']."月";
		$sumArr [] = (int)$val['reg_sum'];
	}
	
	
	
	
	
	echo json_encode([
	    "month"=>$monthArr,
		"reg_sum"=>$sumArr
	]);
}elseif($action=='awardstatistics'){
	$sql ="SELECT count(user_id) reg_count,YEAR (award_time) reg_year,
	MONTH (award_time) reg_month 
	FROM l_award_record GROUP BY MONTH (award_time)";
	$data = $db->query($sql);
	
//	var_dump($data);
	
	$monthArr = [];
	$countArr = [];
	foreach($data as $key=>$val){
		
		
		$monthArr [] = $val['reg_year']."年".$val['reg_month']."月";
		
		
		$countArr [] = (int)$val['reg_count'];
	}
	
	echo json_encode([
	    "month"=>$monthArr,
		"count"=>$countArr
	]);
}
?>