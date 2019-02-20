<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script type="text/javascript" src="js/jquery.min.js" ></script>
    <style type="text/css">

        .awardinfo-div{
            margin:20px 0 0 15px;
        }

        .awardinfo {
            height: 30px;
            width: 952px;
            background: #e6e6e6;
        }

        .awardinfo span {
            line-height: 30px;
            font-size: 14px;
            margin-left: 10px;
        }

        .table{
            margin-top: 50px;

        }

        table{
           width: 952px;
           border: 1px solid #e6e6e6;
        }

        tr{
            height: 30px;
        }
        tr:nth-child(2n+1){
            background: #f6f6f6;
        }


    </style>
</head>
<body>
<div class="awardinfo-div" >
    <div class="awardinfo">
        <span>抽奖信息</span>
    </div>
    <div class="table" style="height: 565px;width: 975px;overflow:auto">
        <table border="0" class="awardinfo-table" id="awardinfo" style="text-align: center;">
            <tr>
                <th >序号</th>
                <th >用户名</th>
                <th >奖品</th>
                <th >日期</th>
            </tr>
        </table>
    </div>
</div>
<script>
	$(function(){
			$.ajax({
			type:"post",
			url:"Controller/Personalnav.php?action=getaward",
			data:"",
			dataType:"json",
			async:true,
			success:function(res){
				console.log(res);
				for(var i = 0;i<res.length;i++){
					var $tr = $("<tr></tr>");
					var $td1 = $("<td></td>");
					$td1.html(i+1);
					var $user_id = $("<td></td>");
					$user_id.html(res[i].user_name);
					var $award_id = $("<td></td>");
					$award_id.html(res[i].award_name);
					var $award_time = $("<td></td>");
					$award_time.html(res[i].time);
					$tr.append($td1,$user_id,$award_id,$award_time);
					$("#awardinfo").append($tr);
				}
			},error:function(res){
				console.log(res);
			}
		});
		})
</script>
</body>
</html>