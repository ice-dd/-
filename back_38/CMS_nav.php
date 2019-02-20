<?php
$menuList = [
	["id"=>1,"name"=>"用户管理","pid"=>0],
	["id"=>2,"name"=>"奖品管理","pid"=>0],
	["id"=>3,"name"=>"网站统计","pid"=>0],
	["id"=>4,"name"=>"个人设置","pid"=>0],
	["id"=>5,"name"=>"用户信息列表","pid"=>1,"url"=>"nav/userList.php"],
	["id"=>6,"name"=>"用户奖品列表","pid"=>1,"url"=>"nav/userAward.php"],
//	["id"=>7,"name"=>"用户充值","pid"=>1,"url"=>"nav/userrechar.php"],
	["id"=>8,"name"=>"用户充值信息","pid"=>1,"url"=>"nav/recharinfo.php"],
	["id"=>9,"name"=>"奖品信息列表","pid"=>2,"url"=>"nav/awardList.php"],
	["id"=>10,"name"=>"添加奖品","pid"=>2,"url"=>"nav/addAward.php"],
	["id"=>11,"name"=>"用户统计","pid"=>3,"url"=>"nav/userStatistics.php"],
	["id"=>12,"name"=>"抽奖统计","pid"=>3,"url"=>"nav/luckyStatistics.php"],
	["id"=>13,"name"=>"充值统计","pid"=>3,"url"=>"nav/rechargeStatistics.php"],
	["id"=>14,"name"=>"修改密码","pid"=>4,"url"=>"nav/editPwd.php"],
	["id"=>15,"name"=>"完善信息","pid"=>4,"url"=>"nav/personalInfo.php"],
];

foreach($menuList as $key => $val){
		if($val['pid'] == 0){	
			echo "<p  class='menuP'>{$val['name']}</p><ul class='menuUl'>";
			foreach($menuList as $k => $v){
				if($val['id'] == $v['pid']){
					echo "<li url='{$v['url']}' class='menuLi'>{$v['name']}</li>";
				}
			}
			echo "</ul>";
		}
	}
?>