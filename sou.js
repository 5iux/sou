/*
作者:D.Young
主页：https://yyv.me/
github：https://github.com/5iux/sou
日期：2019-07-11
版权所有，请勿删除
*/

$(document).ready(function() {
    //判断窗口大小，添加输入框自动完成
    var wid = $("body").width();
    if (wid < 640) {
        $(".wd").attr('autocomplete', 'off');
    }
    //按钮
    $(".sou li").click(function() {
        var dt = $(this).attr('data-s');
        wd = $(".wd").val();
        if (dt == "google") {
            if (wd == "" || wd == null) {
                window.location.href = "https://www.google.com/?hl=zh";
            } else {
                $(".t").val("g");
                $("form").submit();
            }
        } else {
            if (wd == "" || wd == null) {
                window.location.href = "https://www.baidu.com/?tn=simple";
            } else {
                $(".t").val("b");
                $("form").submit();
            }
        }

    });
    //菜单点击
    $("#menu").click(function(event) {
        $(this).toggleClass('on');
        $(".list").toggleClass('closed');
        $(".mywth").toggleClass('hidden');
    });
    $("#content").click(function(event) {
        $(".on").removeClass('on');
        $(".list").addClass('closed');
        $(".mywth").removeClass('hidden');
    });
    $(".mywth").click(function(event) {
        var wt = $("body").width();
        if (wt > 750) {
            window.location.href = "https://tianqi.qq.com/";
        } else {
            //window.location.href = "https://apip.weatherdt.com/h5.html?id=JrCSiXLssE";
        }
    });

});
/*天气插件开始*/
$.ajax({
    url: 'https://www.tianqiapi.com/api/',
    data: 'version=v1&city=',
    dataType: 'JSON',
    error: function() {
        console.log('天气插件网络错误！');
    },
    success: function(res) {
        uptime = res.update_time.substring(11);
        uptime = uptime.substring(0, uptime.length - 3);
        $('.mywth').append(res.city + '<img class="wea" src="img/wea/03/' + res.data[0].wea_img + '.svg"> ' + res.data[0].wea + ' ' + res.data[0].tem1 + '/' + res.data[0].tem2 + ' ' + res.data[0].air_level);
        //今日天气
        $('.wea_top').append('<span class="city"><b>' + res.city + '</b> ' + res.update_time + '更新</span><span class="img" style="background:url(img/wea/03/' + res.data[0].wea_img + '.svg) no-repeat center/contain;"></span> <span class="tem"><b>' + res.data[0].tem + '</b>' + res.data[0].wea + '</span><span class="air">空气质量：' + res.data[0].air_level + '<br>' + res.data[0].win[0] + '：' + res.data[0].win_speed + '</span><span class="air_tips">' + res.data[0].air_tips + '</span>');
        //今日指数
        $('.wea_con ul').append('<li>' + res.data[0].index[0].title + '：<b>' + res.data[0].index[0].level + '</b><br><i>' + res.data[0].index[0].desc + '</i></li>');
        $('.wea_con ul').append('<li>' + res.data[0].index[3].title + '：<b>' + res.data[0].index[3].level + '</b><br><i>' + res.data[0].index[3].desc + '</i></li>');
        $('.wea_con ul').append('<li>' + res.data[0].index[4].title + '：<b>' + res.data[0].index[4].level + '</b><br><i>' + res.data[0].index[4].desc + '</i></li>');

        //未来四天天气
        $('.wea_foot ul').append('<li>' + res.data[1].day + '<br><img src="img/wea/03/' + res.data[1].wea_img + '.svg"><br><b>' + res.data[1].wea + '</b><br><i>' + res.data[1].tem1 + '°/' + res.data[1].tem2 + '°' + '</i></li>');
        $('.wea_foot ul').append('<li>' + res.data[2].day + '<br><img src="img/wea/03/' + res.data[2].wea_img + '.svg"><br><b>' + res.data[2].wea + '</b><br><i>' + res.data[2].tem1 + '°/' + res.data[2].tem2 + '°' + '</i></li>');
        $('.wea_foot ul').append('<li>' + res.data[3].day + '<br><img src="img/wea/03/' + res.data[3].wea_img + '.svg"><br><b>' + res.data[3].wea + '</b><br><i>' + res.data[3].tem1 + '°/' + res.data[3].tem2 + '°' + '</i></li>');
        $('.wea_foot ul').append('<li>' + res.data[4].day + '<br><img src="img/wea/03/' + res.data[4].wea_img + '.svg"><br><b>' + res.data[4].wea + '</b><br><i>' + res.data[4].tem1 + '°/' + res.data[4].tem2 + '°' + '</i></li>');
    }
});
/*天气插件结束*/