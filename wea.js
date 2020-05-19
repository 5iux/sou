
/*
作者:D.Young
主页：https://blog.5iux.cn/
github：https://github.com/5iux/sou
日期：2020-05-19
版权所有，请勿删除

天气插件开始
天气插件api请在wea目录中index.php修改
申请地址：和风天气-https://dev.heweather.com/
*/
    //菜单点击
    $("#menu").click(function(event) {
        $(".mywth").toggleClass('hidden');
    });
    $("#content").click(function(event) {
        $(".mywth").removeClass('hidden');
    });

$.ajax({
    url: '/wea/',
    dataType: 'json',
    error: function() {
        console.log('天气插件网络错误！');
    },
    success: function(res) {
        //判断夜晚
        var now = new Date(),
            hour = now.getHours();
        if (hour < 18) { myday = "d"; } else { myday = "n"; }
        //天气
        $('.mywth').append(res.HeWeather6[0].basic.location + ' <img class="wea" src="https://cdn.heweather.com/img/plugin/190516/icon/c/' + res.HeWeather6[0].now.cond_code + myday + '.png"> ' + res.HeWeather6[0].now.cond_txt + ' ' + res.HeWeather6[0].now.tmp + '℃ ' + res.HeWeather6[0].now.wind_dir);

        $('.wea_hover').css('background-image', 'url(https://cdn.heweather.com/img/plugin/190516/bg/view/' + res.HeWeather6[0].now.cond_code + myday + '.png)');
        //今日天气
        $('.wea_top').append('<span class="city"><b>' + res.HeWeather6[0].basic.location + '</b> ' + res.HeWeather6[0].update.loc + ' 更新</span><span class="img" style="background:url(https://cdn.heweather.com/img/plugin/190516/icon/c/' + res.HeWeather6[0].now.cond_code + myday + '.png) no-repeat center/contain;"></span> <span class="tem"><b>' + res.HeWeather6[0].now.tmp + '℃</b>' + res.HeWeather6[0].now.cond_txt + '</span><span class="air">紫外线指数：' + res.HeWeather6[0].lifestyle[5].brf + '<br>相对湿度：' + res.HeWeather6[0].now.hum + '%<br>' + res.HeWeather6[0].now.wind_dir + '：' + res.HeWeather6[0].now.wind_sc + '级</span><span class="air_tips">' + res.HeWeather6[0].lifestyle[3].txt + '</span>');
        //今日指数
        $('.wea_con ul').append('<li>舒适度指数<br><b>' + res.HeWeather6[0].lifestyle[0].brf + '</b></li>');
        $('.wea_con ul').append('<li>穿衣指数<br><b>' + res.HeWeather6[0].lifestyle[1].brf + '</b></li>');
        $('.wea_con ul').append('<li>感冒指数<br><b>' + res.HeWeather6[0].lifestyle[2].brf + '</b></li>');
        $('.wea_con ul').append('<li>运动指数<br><b>' + res.HeWeather6[0].lifestyle[3].brf + '</b></li>');
        $('.wea_con ul').append('<li>旅游指数<br><b>' + res.HeWeather6[0].lifestyle[4].brf + '</b></li>');
        $('.wea_con ul').append('<li>紫外线指数<br><b>' + res.HeWeather6[0].lifestyle[5].brf + '</b></li>');
        $('.wea_con ul').append('<li>洗车指数<br><b>' + res.HeWeather6[0].lifestyle[6].brf + '</b></li>');
        $('.wea_con ul').append('<li>空气指数<br><b>' + res.HeWeather6[0].lifestyle[7].brf + '</b></li>');

        //未来3天天气
        $('.wea_foot ul').append('<li>' + res.HeWeather6[0].daily_forecast[0].date + '<br><img src="https://cdn.heweather.com/img/plugin/190516/icon/c/' + res.HeWeather6[0].daily_forecast[0].cond_code_d + myday + '.png"><br><b>' + res.HeWeather6[0].daily_forecast[0].cond_txt_d + '</b><br><i>' + res.HeWeather6[0].daily_forecast[0].tmp_min + '°/' + res.HeWeather6[0].daily_forecast[0].tmp_max + '°' + '</i></li>');

        $('.wea_foot ul').append('<li>' + res.HeWeather6[0].daily_forecast[1].date + '<br><img src="https://cdn.heweather.com/img/plugin/190516/icon/c/' + res.HeWeather6[0].daily_forecast[1].cond_code_d + myday + '.png"><br><b>' + res.HeWeather6[0].daily_forecast[1].cond_txt_d + '</b><br><i>' + res.HeWeather6[0].daily_forecast[1].tmp_min + '°/' + res.HeWeather6[0].daily_forecast[1].tmp_max + '°' + '</i></li>');

        $('.wea_foot ul').append('<li>' + res.HeWeather6[0].daily_forecast[2].date + '<br><img src="https://cdn.heweather.com/img/plugin/190516/icon/c/' + res.HeWeather6[0].daily_forecast[2].cond_code_d + myday + '.png"><br><b>' + res.HeWeather6[0].daily_forecast[2].cond_txt_d + '</b><br><i>' + res.HeWeather6[0].daily_forecast[2].tmp_min + '°/' + res.HeWeather6[0].daily_forecast[2].tmp_max + '°' + '</i></li>');
    }
});

/*天气插件结束*/