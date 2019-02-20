<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style type="text/css">

        .CDK- {
            height: 30px;
            width: 952px;
            background: #e6e6e6;
        }

        .CDK- span {
            line-height: 30px;
            font-size: 14px;
            margin-left: 10px;
        }

        .CDK-div {
            height: 270px;
            width: 952px;
            margin: 20px 0 0 15px;
        }

        .table {
            width: 475px;
            margin: 45px 0 0 240px;
        }

        .CDK-input {
            width: 300px;
            height: 30px;
            line-height: 48px;
            padding-left: 10px;
            border: 1px #d9d9d9 solid;
            border-radius: 5px;
            font-size: 14px;
        }
        .click{
            margin: 100px 0 0 342px;
        }

        .CDK .btn{
            width: 100px;
            height: 30px;
            border-width: 0px;
            border-radius: 3px;
            background: #d9d9d9;
            outline: none;
            color: black;
            font-size: 17px;
            cursor: pointer;
            margin-left: 82px;
        }
    </style>
</head>
<body>
<div class="CDK-div">
    <div class="CDK-">
        <span>充值/兑换</span>
    </div>
    <div class="table">
    	<form action="Controller/Personalnav.php?action=rechar" method="post" enctype="multipart/form-data">
        	<table border="0" class="CDK">
            	<tr>
                	<td>充值金额：</td>
                	<td><input type="text" value="" name="coin" class="CDK-input" oninput="value=value.replace(/[^\d]/g,'')"></td>
            	</tr>
            	<tr>
                	<td colspan="2">
                		<input type="submit" value="确认" class="btn">
                		<span>说明：1元=1金币</span>
                	</td>
            	</tr>
        	</table>
        </form>
        
        <form action="Controller/Personalnav.php?action=exchange" method="post" enctype="multipart/form-data">
        	<table border="0" class="CDK">
            	<tr>
                	<td>兑换次数：</td>
                	<td><input type="text" value="" name="award_time" class="CDK-input" oninput="value=value.replace(/[^\d]/g,'')"></td>
            	</tr>
            	<tr>
                	<td colspan="2">
                		<input type="submit" value="确认" class="btn">
                		<span>说明：100金币=1次抽奖机会</span>	
                	</td>
            	</tr>
        	</table>
        </form>
    </div>
</div>
<script>
	
</script>
</body>
</html>