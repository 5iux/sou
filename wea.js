/*天气插件开始
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
        var wea_con;
        for (var x = 0; x < 8; x++) {
            wea_con = '<li class="wea_' + res.HeWeather6[0].lifestyle[x].type + '"><span></span>指数<br><b>' + res.HeWeather6[0].lifestyle[x].brf + '</b></li>';
            $(".wea_con ul").append(wea_con);
        }
        $('.wea_comf span').text('舒适度');
        $('.wea_drsg span').text('穿衣');
        $('.wea_flu span').text('感冒');
        $('.wea_sport span').text('运动');
        $('.wea_trav span').text('旅游');
        $('.wea_uv span').text('紫外线');
        $('.wea_cw span').text('洗车');
        $('.wea_air span').text('空气');


        //未来3天天气
        var wea_foot;
        for (var i = 0; i < 3; i++) {
            wea_foot = '<li>' + res.HeWeather6[0].daily_forecast[i].date + '<br><img src="https://cdn.heweather.com/img/plugin/190516/icon/c/' + res.HeWeather6[0].daily_forecast[i].cond_code_d + myday + '.png"><br><b>' + res.HeWeather6[0].daily_forecast[i].cond_txt_d + '</b><br><i>' + res.HeWeather6[0].daily_forecast[i].tmp_min + '°/' + res.HeWeather6[0].daily_forecast[i].tmp_max + '°' + '</i></li>';
            $(".wea_foot ul").append(wea_foot);
        }
    }
});

/*天气插件结束*/