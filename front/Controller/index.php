<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页-DNF周边商城</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link href="img/favicon.ico" rel="icon">
</head>
<body>
<div class="top">
    <div class="top-mi">
        <div class="top-left">
            <ul>
                <li><a href="index.html">欢迎来到DNF周边商城</a></li>
                <li>
                    <img src="img/xingxing.png">
                    <span class="hot">人气周边商品</span>
                </li>
            </ul>
        </div>
        <div class="replace-top">
        	<a href="#top">
        		<img src="img/replace-top.png"  style="margin:8px 0;width: 35px;"/>
        	</a>
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
                			echo "<a href='login.html'><span>请登录</span></a>";
                		}
                	?>
                </li>
                <li><a href="register.html">注册</a></li>
                <li><a href="javascript:void(0)">我的订单</a></li>
                <li><a href="javascript:void(0)">帮助中心</a></li>
                <li><a href="javascript:void(0)">手机周边</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="logo-w">
    <div class="logo">
        <div class="logo-mi">
            <div class="dnf-logo">
                <img src="img/dnflogo.png" >
            </div>
            <div class="sousuo">
                <input type="text">
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
</div>
<div class="middle">
    <div class="middle-nav">
        <div class="middle-nav-mi">
            <div class="nav-xia">
                <img src="img/menu1.png">
                <span>勇士周边类目</span>
            </div>
            <ul>
                <li><a href="shop.php">全部商品</a></li>
                <li>|</li>
                <li><a href="chouj.php">抽奖中心</a></li>
                <li>|</li>
                <li><a href="javascript:void(0)" id="Per">个人中心</a></li>
                <li>|</li>
                <li><a href="javascript:void(0)">我的收藏</a></li>
                <li>|</li>
            </ul>
        </div>
    </div>
    <div class="middle-lbt">
        <div id="lbt">
            <img src="img/lbt01.jpg">
            <img src="img/lbt02.jpg" style="display: none">
            <img src="img/lbt03.jpg" style="display: none">
            <ul>
                <li style="background-color: red"></li>
                <li></li>
                <li></li>
            </ul>
            <div class="next-left"></div>
            <div class="next-right"></div>
        </div>
        <div class="lm">

        </div>
    </div>
    <div class="middle-mi">
        <div class="middle-one">
            <ul>
                <li>
                    <a href="shop.php">
                        <img src="img/x18.jpg" >
                    </a>
                </li>
                <li>
                    <a href="shop.php">
                        <img src="img/x19.jpg">
                    </a>
                </li>
                <li>
                    <a href="shop.php">
                        <img src="img/x17.jpg">
                    </a>
                </li>
            </ul>
        </div>
        <div class="middle-two">
            <a href="javascript:void(0)"><img src="img/da7.jpg" ></a>
        </div>
        <div class="middle-three">
            <ul>
                <li>
                    <a href="javascript:void(0)"><img src="img/1398.jpg"></a>
                    <span class="goods-name">
                        <a href="javascript:void(0)">黑暗武士 小手办</a>
                    </span>
                    <span>
                        <span class="price">98元</span>
                        <span class="like">喜欢：965</span>
                    </span>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="img/1450.jpg"></a>
                    <span class="goods-name">
                        <a href="javascript:void(0)">绝命谍影夜光表</a>
                    </span>
                    <span>
                        <span class="price">188元</span>
                        <span class="like">喜欢：4843</span>
                    </span>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="img/1456.jpg"></a>
                    <span class="goods-name">
                        <a href="javascript:void(0)">卢克塔罗牌卫衣</a>
                    </span>
                    <span>
                        <span class="price">238元</span>
                        <span class="like">喜欢：120</span>
                    </span>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="img/1458.jpg"></a>
                    <span class="goods-name">
                        <a href="javascript:void(0)">卢克与贝奇卫衣</a>
                    </span>
                    <span>
                        <span class="price">238元</span>
                        <span class="like">喜欢：235</span>
                    </span>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="img/1468.jpg"></a>
                    <span class="goods-name">
                        <a href="javascript:void(0)">缔造者 Q版手办</a>
                    </span>
                    <span>
                        <span class="price">98元</span>
                        <span class="like">喜欢：811</span>
                    </span>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="img/1469.jpg"></a>
                    <span class="goods-name">
                        <a href="javascript:void(0)">土罐音响</a>
                    </span>
                    <span>
                        <span class="price">188元</span>
                        <span class="like">喜欢：120</span>
                    </span>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="img/14701.jpg"></a>
                    <span class="goods-name">
                        <a href="javascript:void(0)">许愿深渊柱感应火机</a>
                    </span>
                    <span>
                        <span class="price">138元</span>
                        <span class="like">喜欢：2462</span>
                    </span>
                </li>
                <li>
                    <a href="javascript:void(0)"><img src="img/1471.jpg"></a>
                    <span class="goods-name">
                        <a href="javascript:void(0)">卢克帽子</a>
                    </span>
                    <span>
                        <span class="price">98元</span>
                        <span class="like">喜欢：86</span>
                    </span>
                </li>
            </ul>
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
                    <a href="javascript:void(0)">购物指南</a>
                    <ul>
                        <li><a href="javascript:void(0)">常见问题</a></li>
                        <li><a href="javascript:void(0)">如何查看订单</a></li>
                        <li><a href="javascript:void(0)">网站订购流程</a></li>
                        <li><a href="javascript:void(0)">用户登陆及注册</a></li>
                    </ul>
                </li>
                <li class="bottom-ul-li">
                    <a href="javascript:void(0)">配送方式</a>
                    <ul>
                        <li><a href="javascript:void(0)">全场满200元免运费</a></li>
                        <li><a href="javascript:void(0)">配送范围及运费</a></li>
                    </ul>
                </li>
                <li class="bottom-ul-li">
                    <a href="javascript:void(0)">售后服务</a>
                    <ul>
                        <li><a href="javascript:void(0)">7天无理由退换货</a></li>
                        <li><a href="javascript:void(0)">如何办理退换货</a></li>
                        <li><a href="javascript:void(0)">换货政策说明</a></li>
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
    <div class="bottom-b">
        16多媒体 林梽晖
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script type="text/javascript" src="js/index1.js" ></script>   

</body>

</html>