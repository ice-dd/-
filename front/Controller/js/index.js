$(document).ready(function () {
    var c = 0;
    var timer;
    showTime();

    $('#lbt ul li').hover(function () {
        c = $(this).index();
        Show();
        clearInterval(timer);
    }, function () {
        showTime();
    });

    $('#lbt .next-left').click(function () {
        if (c == 0) {
            c = 3;
        }
        c--;
        Show();
    });

    $('#lbt .next-left').hover(function () {
        clearInterval(timer);
    }, function () {
        showTime();
    });

    $('#lbt .next-right').click(function () {
        if (c == 2) {
            c = -1;
        }
        c++;
        Show();
        document.title = c;
    });

    $('#lbt .next-right').hover(function () {
        clearInterval(timer);
    }, function () {
        showTime();
    });


    function showTime() {
        timer = setInterval(function () {
            Show();
            c++;
            if (c == 3) {
                c = 0;
            }
        }, 1000);
    }

    function Show() {
        $('#lbt img').eq(c).fadeIn(300).siblings('img').fadeOut(300);
        $('#lbt ul li').eq(c).css("backgroundColor", "red").siblings('li').css("backgroundColor", "#e5e5e5")
    }
});


/*轮播图*/


$(document).ready(function () {
    $(".right-top ul li a").each(function (index) {
        $(this).click(function () {
            $(".ul1").removeClass("ul1");
            $(".a1").removeClass("a1");
            $(".right-bottom-list ul").eq(index).addClass("ul1");
            $(this).addClass("a1")
        });
    });
});



function XG() {
    $("#right-nav").load("nav/editPwd.php");
}

function one() {
    $("#right-nav").load("nav/PerCen.php");
}

function two() {
    $("#right-nav").load("nav/awardinfo.php");
}

function three() {
    $("#right-nav").load("nav/CDK.php");
}

function collect(){
	$("#right-nav").load("nav/collect.php");
}



$(function(){
        function rollTwo(){
            $(".ul1").animate({marginLeft:"-177px"},2000,"linear",function(){
                $(".ul1").css({marginLeft:"0px"});
                $(".ul1 img:first").remove().clone(true).appendTo(".ul1");
            })
        }
        
        var startRollTwo=setInterval(rollTwo,200);
        
        $(".ul1").hover(function(){
        	
            clearInterval(startRollTwo);
        },function(){
        	
            startRollTwo=setInterval(rollTwo,2000);
        });
    });