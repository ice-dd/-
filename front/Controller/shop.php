<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>商城-DNF周边商城</title>
    <link rel="stylesheet" type="text/css" href="css/shop.css">
    <link href="../img/favicon.ico" rel="icon">
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/shop.js"></script>
</head>
<body>
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
                			echo "<a href='login.html'><span>请登录</span></a>";
                		}
                	?>
                </li>
                <li><a href="javascript:void(0);">注册</a></li>
                <li><a href="javascript:void(0);">我的订单</a></li>
                <li><a href="javascript:void(0);">帮助中心</a></li>
                <li><a href="javascript:void(0);">手机周边</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="logo-w">
    <div class="logo">
        <div class="logo-mi">
            <div class="dnf-logo">
                <img src="img/dnflogo.png">
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
<div class="middle-top">
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
        <li><a href="Personal_center.php">个人中心</a></li>
        <li>|</li>
        <li><a href="javascript:void(0);">我的收藏</a></li>
        <li>|</li>
    </ul>
</div>
</div>
<div class="middle-w">
    <div class="middle">
        <div class="shop">
            <div class="left">
                <div class="left-top">
                    <span>猜你喜欢</span>
                </div>
                <div class="left-bottom">
                    <ul>
                        <li>
                            <img src="img/shop80.jpg">
                            <div>
                                <span class="hot-shop-name">凯丽的最爱典藏包</span>
                                <span class="red">60天已售</span>
                                <span class="shopRed">1000+</span>
                                <br>
                                <span>368元</span>
                                <span class="sc">398元</span>
                            </div>
                        </li>
                        <li>
                            <img src="img/shop80%20(1).jpg">
                            <div>
                                <span class="hot-shop-name"><a href="javascript:void(0);">卢克与贝奇手办</a></span>
                                <span class="red">60天已售</span>
                                <span class="shopRed">159</span>
                                <br>
                                <span>199元</span>
                                <span class="sc">299元</span>
                            </div>
                        </li>
                        <li>
                            <img src="img/shop80%20(3).jpg">
                            <div>
                                <span class="hot-shop-name"><a href="javascript:void(0);">超级赛亚人</a></span>
                                <br>
                                <span class="red">60天已售</span>
                                <span class="shopRed">495</span>
                                <br>
                                <span>88元</span>
                                <span class="sc">108元</span>
                            </div>
                        </li>
                        <li>
                            <img src="img/shop80%20(4).jpg">
                            <div>
                                <span class="hot-shop-name"><a href="javascript:void(0);">神龙天女指环</a></span>
                                <br>
                                <span class="red">60天已售</span>
                                <span class="shopRed">902</span>
                                <br>
                                <span>88</span>
                                <span class="sc">108元</span>
                            </div>
                        </li>
                        <li>
                            <img src="img/shop80%20(5).jpg">
                            <div>
                                <span class="hot-shop-name"><a href="javascript:void(0);">土罐音响</a></span>
                                <br>
                                <span class="red">60天已售</span>
                                <span class="shopRed">15</span>
                                <br>
                                <span>188元</span>
                                <span class="sc">188元</span>
                            </div>
                        </li>
                        <li>
                            <img src="img/shop80%20(6).jpg">
                            <div>
                                <span class="hot-shop-name"><a href="javascript:void(0);">时光手表</a></span>
                                <br>
                                <span class="red">60天已售</span>
                                <span class="shopRed">304</span>
                                <br>
                                <span>188元</span>
                                <span class="sc">208元</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right">
                <div class="right-top">
                    <ul>
                        <li>
                            <span>周边类目：</span>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="a1">礼包收藏</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="a2">手办</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="a2">服饰日用</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="a2">数码电子</a>
                        </li>
                    </ul>
                </div>
                <div class="right-bottom">
                    <div class="right-bottom-nav">
                        <ul>
                            <li>人气</li>
                            <li>热销</li>
                            <li>新品</li>
                            <li>价格</li>
                        </ul>
                    </div>
                    <div class="right-bottom-list">
                        <ul class="ul1 ul0">
                            <li>
                                <img src="img/shop200.jpg">
                                <span class="shop-name"><a href="javascript:void(0);">十周年追忆画册</a></span>
                                <span class="red">338元</span><span class="through">438元</span><span class="hui">0人点评</span>
                            </li>
                            <li>
                                <img src="img/shop2001.jpg">
                                <span class="shop-name"><a href="javascript:void(0);">深渊典藏包Ⅱ</a></span>
                                <span class="red">368元</span><span class="through">468元</span><span class="hui">0人点评</span>
                            </li>
                            <li>
                                <img src="img/shop2002.jpg">
                                <span class="shop-name"><a href="javascript:void(0);">安徒恩武器典藏包</a></span>
                                <span class="red">338元</span><span class="through">438元</span><span class="hui">0人点评</span>
                            </li>
                            <li>
                                <img src="img/shop2003.jpg">
                                <span class="shop-name"><a href="javascript:void(0);">卢克与贝奇手办</a></span>
                                <span class="red">199元</span><span class="through">299元</span><span class="hui">0人点评</span>
                            </li>
                            <li>
                                <img src="img/shop2004.jpg">
                                <span class="shop-name"><a href="javascript:void(0);">《使徒来袭Ⅱ》典藏包（黑色卡</a></span>
                                <span class="red">299元</span><span class="through">399元</span><span class="hui">0人点评</span>
                            </li>
                            <li>
                                <img src="img/shop2005.jpg">
                                <span class="shop-name"><a href="javascript:void(0);">凯丽最爱典藏包</a></span>
                                <span class="red">368元</span><span class="through">398元</span><span class="hui">0人点评</span>
                            </li>
                            <li>
                                <span class="shop-name"><a href="javascript:void(0);"></a></span>
                                <span class="red"></span><span class="through"></span><span class="hui"></span>
                            </li>
                            <li>
                                <span class="shop-name"><a href="javascript:void(0);"></a></span>
                                <span class="red"></span><span class="through"></span><span class="hui"></span>
                            </li>
                        </ul>
                        <ul class="ul0">
                            <li>
                                <img src="img/shop2006.jpg">
                                <span class="shop-name"><a href="javascript:void(0);">十周年追忆画册</a></span>
                                <span class="red">338元</span><span class="through">438元</span><span class="hui">0人点评</span>
                            </li>
                            <li>
                                <img src="img/shop2007.jpg">
                                <span class="shop-name"><a href="javascript:void(0);">十周年追忆画册</a></span>
                                <span class="red">338元</span><span class="through">438元</span><span class="hui">0人点评</span>
                            </li>
                            <li>
                                <img src="img/shop2008.jpg">
                                <span class="shop-name"><a href="javascript:void(0);">十周年追忆画册</a></span>
                                <span class="red">338元</span><span class="through">438元</span><span class="hui">0人点评</span>
                            </li>
                            <li>
                                <img src="img/shop2009.jpg">
                                <span class="shop-name"><a href="javascript:void(0);">十周年追忆画册</a></span>
                                <span class="red">338元</span><span class="through">438元</span><span class="hui">0人点评</span>
                            </li>
                            <li>
                                <img src="img/shop20010.jpg">
                                <span class="shop-name"><a href="javascript:void(0);">十周年追忆画册</a></span>
                                <span class="red">338元</span><span class="through">438元</span><span class="hui">0人点评</span>
                            </li>
                            <li>
                                <img src="img/shop20011.jpg">
                                <span class="shop-name"><a href="javascript:void(0);">十周年追忆画册</a></span>
                                <span class="red">338元</span><span class="through">438元</span><span class="hui">0人点评</span>
                            </li>
                            <li>
                                <span class="shop-name"><a href="javascript:void(0);"></a></span>
                                <span class="red"></span><span class="through"></span><span class="hui"></span>
                            </li>
                            <li>
                                <span class="shop-name"><a href="javascript:void(0);"></a></span>
                                <span class="red"></span><span class="through"></span><span class="hui"></span>
                            </li>
                        </ul>
                        <ul class="ul0">
                            <li>
                                <img src="img/shop20012.jpg">
                                <span class="shop-name"><a href="javascript:void(0);">十周年追忆画册</a></span>
                                <span class="red">338元</span><span class="through">438元</span><span class="hui">0人点评</span>
                            </li>
                            <li>
                                <img src="img/shop20013.jpg">
                                <span class="shop-name"><a href="javascript:void(0);">十周年追忆画册</a></span>
                                <span class="red">338元</span><span class="through">438元</span><span class="hui">0人点评</span>
                            </li>
                            <li>
                                <img src="img/shop20014.jpg">
                                <span class="shop-name"><a href="javascript:void(0);">十周年追忆画册</a></span>
                                <span class="red">338元</span><span class="through">438元</span><span class="hui">0人点评</span>
                            </li>
                            <li>
                                <img src="img/shop20015.jpg">
                                <span class="shop-name"><a href="javascript:void(0);">十周年追忆画册</a></span>
                                <span class="red">338元</span><span class="through">438元</span><span class="hui">0人点评</span>
                            </li>
                            <li>
                                <img src="img/shop20016.jpg">
                                <span class="shop-name"><a href="javascript:void(0);">十周年追忆画册</a></span>
                                <span class="red">338元</span><span class="through">438元</span><span class="hui">0人点评</span>
                            </li>
                            <li>
                                <img src="img/shop20017.jpg">
                                <span class="shop-name"><a href="javascript:void(0);">十周年追忆画册</a></span>
                                <span class="red">338元</span><span class="through">438元</span><span class="hui">0人点评</span>
                            </li>
                            <li>
                                <span class="shop-name"><a href="javascript:void(0);"></a></span>
                                <span class="red"></span><span class="through"></span><span class="hui"></span>
                            </li>
                            <li>
                                <span class="shop-name"><a href="javascript:void(0);"></a></span>
                                <span class="red"></span><span class="through"></span><span class="hui"></span>
                            </li>
                        </ul>
                        <ul class="ul0">
                            <li>
                                <img src="img/shop20018.jpg">
                                <span class="shop-name"><a href="javascript:void(0);">十周年追忆画册</a></span>
                                <span class="red">338元</span><span class="through">438元</span><span class="hui">0人点评</span>
                            </li>
                            <li>
                                <img src="img/shop20019.jpg">
                                <span class="shop-name"><a href="javascript:void(0);">十周年追忆画册</a></span>
                                <span class="red">338元</span><span class="through">438元</span><span class="hui">0人点评</span>
                            </li>
                            <li>
                                <img src="img/shop20020.jpg">
                                <span class="shop-name"><a href="javascript:void(0);">十周年追忆画册</a></span>
                                <span class="red">338元</span><span class="through">438元</span><span class="hui">0人点评</span>
                            </li>
                            <li>
                                <img src="img/shop20021.jpg">
                                <span class="shop-name"><a href="javascript:void(0);">十周年追忆画册</a></span>
                                <span class="red">338元</span><span class="through">438元</span><span class="hui">0人点评</span>
                            </li>
                            <li>
                                <img src="img/shop20022.jpg">
                                <span class="shop-name"><a href="javascript:void(0);">十周年追忆画册</a></span>
                                <span class="red">338元</span><span class="through">438元</span><span class="hui">0人点评</span>
                            </li>
                            <li>
                                <img src="img/shop20023.jpg">
                                <span class="shop-name"><a href="javascript:void(0);">十周年追忆画册</a></span>
                                <span class="red">338元</span><span class="through">438元</span><span class="hui">0人点评</span>
                            </li>
                            <li>
                                <span class="shop-name"><a href="javascript:void(0);"></a></span>
                                <span class="red"></span><span class="through"></span><span class="hui"></span>
                            </li>
                            <li>
                                <span class="shop-name"><a href="javascript:void(0);"></a></span>
                                <span class="red"></span><span class="through"></span><span class="hui"></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
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
    <div class="bottom-b">
        16多媒体 林梽晖
    </div>
</div>
</body>
</html>