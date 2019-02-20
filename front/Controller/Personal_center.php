<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>个人中心-DNF周边商城</title>
    <link rel="stylesheet" type="text/css" href="css/Personal_center.css">
    <link href="img/favicon.ico" rel="icon">
    <script type="text/javascript" src="js/jquery.min.js" ></script>
    <script type="text/javascript" src="js/index.js" ></script>
</head>
<body onload="one()">
<div class="top">
    <div class="top-mi">
        <div class="top-left">
            <ul>
                <li><a href="index.php">欢迎来到DNF周边商城</a></li>
                <li>
                	
                    <img src="img/xingxing.png">
                    <span>人气周边商品</span>
                </li>
            </ul>
        </div>
        <div class="top-right">
            <ul>
               <li>
                	<?php
                		@session_start();
                		if(isset($_SESSION['user_38'])){
                			$username = json_decode($_SESSION['user_38'],true);
                			echo "<span>您好,</span>".$username['user_name']."
                			<a href='Controller/L&RController.php?action=logout'>退出</a>";
                		}else{
                			echo "<script>if(confirm('您没登陆')){ 							location.href='login.html'}else{location.href='index.php'}</script>";
                		}
                	?>
                </li>
                <li><a href="register.html">注册</a></li>
                <li><a href="javascript:void(0);">我的订单</a></li>
                <li><a href="javascript:void(0);">帮助中心</a></li>
                <li><a href="javascript:void(0);">手机周边</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="middle">
    <div class="logo">
        <div class="logo-mi">
            <div class="dnf-logo">
                <img src="img/dnflogo.png">
            </div>
            <div class="sousuo">
                <input type="text" class="input">
                <img src="img/menu.png">
                <ul>
                    <li><a href="">典藏包</a></li>
                    <li><a href="">魔枪士</a></li>
                    <li><a href="">赛利亚</a></li>
                    <li><a href="">配饰</a></li>
                    <li><a href="">手表</a></li>
                    <li><a href="">毛绒</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="middle-nav-mi">
        <ul>
            <li><a href="shop.php">全部商品</a></li>
            <li>|</li>
            <li><a href="chouj.php">抽奖中心</a></li>
            <li>|</li>
            <li><a href="Personal_center.php">个人中心</a></li>
            <li>|</li>
            <li><a href="javascript:void(0);">我的收藏</a></li>
            <li>|</li>
        </ul>
    </div>
    <div class="center">
        <div class="center-top">
            <div class="nav-left">
                <img src="img/hea_bj.png">
                <span>用户中心</span>
            </div>
            <div class="nav-right">
                <ul>
                    <li><span>首页</span></li>
                    <li><span>用户中心</span></li>
                    <li><span>我的订单</span></li>
                </ul>
            </div>
        </div>
        <div class="center-bottom">
            <div class="left-nav">
                <ul>
                    <li><a href="javascript:void(0);" onclick="one()">个人中心</a></li>
                    <li><a href="javascript:void(0);" onclick="XG()">修改密码</a></li>
                    <li><a href="javascript:void(0);" onclick="two()">抽奖信息</a></li>
                    <li><a href="javascript:void(0);" onclick="three()">充值/兑换</a></li>
                    <li><a href="javascript:void(0);" onclick="collect()">收集箱</a></li>
                </ul>
            </div>
            <div class="right-nav" id="right-nav" style="overflow:auto">

            </div>
            <div class="clear"></div>
        </div>
    </div>

</div>
<div class="bottom">
    <div class="bottom-top">
        <div class="bottom-top-mi">
            <ul>
                <li>
                    <img src="img/luwu.png">
                    <div>
                        <span class="Bold">赠送超值游戏礼包</span>
                        <span class="mini">方便您畅爽体验游戏</span>
                    </div>
                </li>
                <li>
                    <img src="img/zs.png">
                    <div>
                        <span class="Bold">专属周边设计</span>
                        <span class="mini">精选游戏素材 · 独特设计</span>
                    </div>
                </li>
                <li>
                    <img src="img/7.png">
                    <div>
                        <span class="Bold">7天无理由退换货</span>
                        <span class="mini">为您提供售后无忧保障</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="bottom-mi">
        <div class="bottom-bottom">
            <ul class="bottom-ul">
                <li class="bottom-ul-li">
                    <a href="javascript:void(0);">购物指南</a>
                    <ul>
                        <li><a href="javascript:void(0);">常见问题</a></li>
                        <li><a href="javascript:void(0);">如何查看订单</a></li>
                        <li><a href="javascript:void(0);">网站订购流程</a></li>
                        <li><a href="javascript:void(0);">用户登陆及注册</a></li>
                    </ul>
                </li>
                <li class="bottom-ul-li">
                    <a href="javascript:void(0);">配送方式</a>
                    <ul>
                        <li><a href="javascript:void(0);">全场满200元免运费</a></li>
                        <li><a href="javascript:void(0);">配送范围及运费</a></li>
                    </ul>
                </li>
                <li class="bottom-ul-li">
                    <a href="javascript:void(0);">售后服务</a>
                    <ul>
                        <li><a href="javascript:void(0);">7天无理由退换货</a></li>
                        <li><a href="javascript:void(0);">如何办理退换货</a></li>
                        <li><a href="javascript:void(0);">换货政策说明</a></li>
                    </ul>
                </li>
                <li class="bottom-ul-li">客服中心(9:00 - 24:00)
                    <ul>
                        <li>客服QQ：800093207</li>
                        <li>申诉邮箱：dnfcity@hetaionline.com</li>
                    </ul>
                </li>
                <li class="bottom-ul-li1">
                    <img src="img/ewm.png">
                    <span>扫码关注微信周边</span>
                </li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>