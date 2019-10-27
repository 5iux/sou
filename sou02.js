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
    }else{
        $(".wd").focus();
    }

    function sub() {
        var nm = $(".wd").attr('name');
        if (nm == "q") {
            $("form").attr('action', 'https://www.google.com/search?hl=zh');
            $("form").submit();
        } else {
            $("form").attr('action', 'https://www.baidu.com/s?ie=utf-8');
            $("form").submit();
        }
    }
    //按钮
    $(".sou li").click(function() {
        var dt = $(this).attr('data-s');
        if (dt == "google") {
            $(".wd").attr('name', 'q');
            sub();
        } else {
            $(".wd").attr('name', 'wd');
            sub();
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
    /*$(".mywth").click(function(event) {
        var wt = $("body").width();
        if (wt > 750) {
            window.location.href = "https://tianqi.qq.com/";
        } else {
            //window.location.href = "https://apip.weatherdt.com/h5.html?id=JrCSiXLssE";
        }
    });*/

});


/*天气插件开始
天气插件api请地址：www.tianqiapi.com
*/
/*天气插件开始*/
const indexs = {
    comf: "舒适度",
    drsg: "穿衣",
    flu: "感冒",
    sport: "运动",
    trav: "旅游",
    uv: "紫外线",
    cw: "洗车",
    air: "空气"
  };
  // key自己上https://dev.heweather.com申请
  Promise.all(
    ["now", "forecast", "lifestyle"].map(weatherType =>
      fetch(
        `https://free-api.heweather.net/s6/weather/${weatherType}?key=2ed27772494e4b038f6214779e7ff9aa&location=auto_ip`
      ).then(res => res.json())
    )
  )
    .then(res => ({
      ...res[0].HeWeather6[0],
      ...res[1].HeWeather6[0],
      ...res[2].HeWeather6[0]
    }))
    .then(res => {
      const { update, basic, daily_forecast, now, lifestyle } = res;
      uptime = update.utc.substring(11);
      uptime = uptime.substring(0, uptime.length - 3);
      $(".wea_hover").css(
        "background-image",
        `url(/wea/icon/bg/${now.cond_code}d.png)`
      );
      $(".mywth").append(
        `${basic.location} <img class="wea" src="./wea/icon/${now.cond_code}d.png"> ${now.cond_txt} ${now.tmp}℃ ${now.wind_dir}`
      );
      //今日天气
      $(".wea_top").append(
        `<span class="city"><b>${basic.location}</b> ${update.utc}更新</span><span class="img" style="background:url(/wea/icon/${now.cond_code}d.png) no-repeat center/contain;"></span> <span class="tem"><b>${now.tmp}</b>${now.cond_txt}
          </span><span class="air">能见度：${now.vis}公里<br>相对湿度：${now.hum}%<br>${now.wind_dir}：${now.wind_sc}</span><span class="air_tips">${lifestyle[Math.floor(Math.random() * lifestyle.length)].txt}</span>
          `
      );
      //今日指数
      $(".wea_con ul").append(
        lifestyle.map(
          life => `
              <li>${indexs[life.type]}<br><b>${life.brf}</b><br><i>${
            life.txt
          }</i></li>
          `
        )
      );
      //未来三天天气
      $(".wea_foot ul").append(
        daily_forecast.map(
          day => `
              <li>${day.date}<br><img src="/wea/icon/${day.cond_code_d}d.png" /><br><b>
              ${day.cond_txt_d}</b><br><i>
              ${day.tmp_min}°/${day.tmp_max}°
              </i></b></li>
          `
        )
      );
      $(".wea_foot ul").append(
        "<li>" +
          res.data[1].day +
          '<br><img src="https://www.tianqiapi.com/static/skin/yahoo/' +
          res.data[1].wea_img +
          '.png"><br><b>' +
          res.data[1].wea +
          "</b><br><i>" +
          res.data[1].tem1 +
          "°/" +
          res.data[1].tem2 +
          "°" +
          "</i></li>"
      );
      $(".wea_foot ul").append(
        "<li>" +
          res.data[2].day +
          '<br><img src="https://www.tianqiapi.com/static/skin/yahoo/' +
          res.data[2].wea_img +
          '.png"><br><b>' +
          res.data[2].wea +
          "</b><br><i>" +
          res.data[2].tem1 +
          "°/" +
          res.data[2].tem2 +
          "°" +
          "</i></li>"
      );
      $(".wea_foot ul").append(
        "<li>" +
          res.data[3].day +
          '<br><img src="https://www.tianqiapi.com/static/skin/yahoo/' +
          res.data[3].wea_img +
          '.png"><br><b>' +
          res.data[3].wea +
          "</b><br><i>" +
          res.data[3].tem1 +
          "°/" +
          res.data[3].tem2 +
          "°" +
          "</i></li>"
      );
    });
/*天气插件结束*/