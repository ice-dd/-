<?php
	
@session_start();

$nowAward = $_SESSION['nowaward'];

?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Document</title>
</head>
<body>
	<form action="../Controller/addAward.class.php?action=updataAwards" method="post" enctype="multipart/form-data">
			<p><input type="hidden" name="award_id" value="<?php echo $nowAward['award_id'] ?>"/></p>
			<!--奖品名称 3--10 非空-->
			<p>奖品名称：<input type="text" name="award_name" value="<?php echo $nowAward['award_name']	?>"></p>
			<!--奖品描述 10--30 非空--> 	
			<!--<p>奖品描述：<textarea name="award_info" rows="" cols="" ><?php echo $nowAward['award_info']	?></textarea></p>-->
			<p>奖品描述：<input type="text" name="award_info" value="<?php echo $nowAward['award_info']	?>"></p>
			<!--奖品图片 非空-->
			<p>奖品图片：<input type="file" name="new_img" value="<?php echo $nowAward['award_img']	?>" /></p>
			<!--奖品数量 >0 非空-->
			<p>奖品数量：<input type="number" name="award_count" value="<?php echo $nowAward['award_count']	?>" ></p>
			<!--奖品价格 >0 非空-->
			<p>奖品价格：<input type="number" name="award_price" value="<?php echo $nowAward['award_price']	?>" ></p>
			<input type="hidden" name="old_img" id="old_img" value="<?php echo $nowAward['award_img'] ?>" />
			<input type="submit" value="添加" />
			<input type="reset" value="重置"/>
	</form>
</body>
</html>