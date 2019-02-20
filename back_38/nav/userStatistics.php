<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8"><link rel="icon" href="https://static.jianshukeji.com/highcharts/images/favicon.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            /* css 代码  */
        </style>
        <!--<script src="https://img.hcharts.cn/highcharts/highcharts.js"></script>-->
        <script src="../js/highcharts.js"></script>
        <!--<script src="https://img.hcharts.cn/highcharts/modules/exporting.js"></script>-->
        <script src="../js/exporting.js"></script>
        <!--<script src="https://img.hcharts.cn/highcharts-plugins/highcharts-zh_CN.js"></script>-->
        <script src="../js/highcharts-zh_CN.js"></script>
        
        <script type="text/javascript" src="../js/jquery.min.js" ></script>
        <style>
        	
        </style>
    </head>
    <body>
        <div id="container" style="min-width:400px;height:400px"></div>
<script>
	$(function(){
		$.ajax({
			type:"post",
			url:"../Controller/statistics.class.php?action=userstatistics",
			data:"",
			dataType:"json",
			async:true,
			success:function(res){
				console.log(res);
				var chart = Highcharts.chart('container',{
							chart: {
			    				type: 'column'
							},
							title: {
								text: '周边商城注册量'
							},
							subtitle: {
								text: '数据来源: userstatistics'
							},
							xAxis: {
								categories: res.month,
				        		crosshair: true
				    		},
						    yAxis: {
						        min: 0,
						        title: {
						            text: '注册量 (人)'
						        }
						    },
						    tooltip: {
						        // head + 每个 point + footer 拼接成完整的 table
						        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
						        pointFormat: '<tr><td style="color:#869fb1;padding:0">{series.name}: </td>' +
						        '<td style="padding:0"><b>{point.y} 人</b></td></tr>',
						        footerFormat: '</table>',
						        shared: true,
						        useHTML: true
						    },
						    plotOptions: {
						        column: {
						            borderWidth: 0
						        }
						    },
						    series: [{
						        name: '注册量',
						        data: res.count
						    }]
				});
				$(".highcharts-credits").html("");
				$(".highcharts-point").attr("fill","#869fb1");
			},error:function(res){
				
			}
		});
	})
   
		





</script>
    </body>
</html>