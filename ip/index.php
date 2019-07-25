<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>IP检测</title>
    <link rel="icon" href="logo.jpg" sizes="192x192" />
    <link rel="icon" href="logo.jpg" sizes="32x32" />
    <link rel="apple-touch-icon-precomposed" href="logo.jpg" />
    <meta name="msapplication-TileImage" content="logo.jpg" />
    <link rel="shortcut icon" href="logo.jpg" type="image/x-icon" >
    <meta name="referrer" content="no-referrer" />
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE;chrome=1">
    <meta http-equiv="Cache-Control" content="no-transform" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!-- 强制移动设备以app模式打开页面(即在移动设备下全屏，仅支持部分浏览器) -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="full-screen" content="yes"><!--UC强制全屏-->
    <meta name="browsermode" content="application"><!--UC应用模式-->
    <meta name="x5-fullscreen" content="true"><!--QQ强制全屏-->
    <meta name="x5-page-mode" content="app"><!--QQ应用模式-->
    <style>
    * {
        padding: 0;
        margin: 0;
        outline: none;
    }

    html,
    body {
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    ul { list-style: none;
        width: calc(100% - 60px);
        max-width: 720px;
        line-height: 26px;
        position: absolute;
        left: 0; top:0; right: 0; bottom: 0;
        margin:auto;
        height: 250px;
        display:block;
        border: 1px solid #ddd;
    }

    li {
        width: 100%; display: block; float: left;
        text-align: center; font-family: Helvetica,Arial,sans-serif; font-size: 14px; 
        border-bottom: 1px solid #ddd;
        height: 50px; line-height: 50px;
    }
    li:nth-child(1){ height: 30px; line-height: 30px;}
    span{
        display: block;width: 70%; float: left; height: 100%; overflow: hidden;
    }
    li span:nth-child(1){ border-right: 1px solid #ddd; width: calc(30% - 1px);}
    span a{display: block; width: 90px; height: 30px; font-size: 14px; line-height: 30px; border: 1px solid #ddd; border-radius: 15px; color: #000; cursor:pointer; overflow: hidden; margin: 15px auto 0; text-decoration: none;}
    span a:active{ border-color: #fff; box-shadow: 0 1px 20px 0 rgba(0, 0, 0, .1) }
    .flag{ display: inline-block;height: 12px; }
    </style>
<script src="https://cdnjs.loli.net/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
 $(document).ready(function() {
    $.ajax({
        //太平洋 ip接口
        url: "https://whois.pconline.com.cn/ipJson.jsp",
        dataType: "jsonp",
        timeout: 5000,
        success: function(re) {
            $.ajax({
                //ipdata ip接口 api-key请到ipdata.co申请
                url: "https://api.ipdata.co/"+re.ip+"/zh-CN?api-key=test",
                dataType: "jsonp",
                timeout: 5000,
                success: function(resp) {
                    $("#guonei").html(resp.ip + "&nbsp;<img class='flag' src='" + resp.flag + "'>&nbsp;" + resp.country_name);
                },
                error: function() {
                    $("#guonei").html("信息错误，刷新看看");
                },
                complete: function() {},
            });
        },
        error: function() {
            $("#guonei").html("不支持");
        },
        complete: function() {},
    });
    $.ajax({
        //ipdata ip接口 api-key请到ipdata.co申请
        url:"https://api.ipdata.co/zh-CN?api-key=test",
        dataType: "jsonp",
        timeout: 5000,
        success: function(resp) {
            $("#guowai").html(resp.ip+"&nbsp;<img class='flag' src='"+resp.flag+"'>&nbsp;"+resp.country_name);
        },
        error: function() {
            $("#guowai").html("不支持");
        },
        complete: function(){
        },
    });
    $.ajax({
        //lightssockscom ip接口
        url: "https://lightssockscom.appspot.com",
        dataType: "jsonp",
        timeout: 5000,
        success: function(re) {
            $.ajax({
                //ipdata ip接口 api-key请到ipdata.co申请
                url: "https://api.ipdata.co/"+re.address+"/zh-CN?api-key=test",
                dataType: "jsonp",
                timeout: 5000,
                success: function(resp) {
                    $("#wall").html(resp.ip + "&nbsp;<img class='flag' src='" + resp.flag + "'>&nbsp;" + resp.country_name);
                },
                error: function() {
                    $("#wall").html("信息错误，刷新看看");
                },
                complete: function() {},
            });
        },
        error: function() {
            $("#wall").html("不支持");
        },
        complete: function() {},
    });
 });
</script>

</head>

<body>
    <ul>
            <li>
                <span height="30" width="20%">检测点</span>
                <span width="40%">检测结果</span>
            </li>
            <li>
                <span>大陆站点</span>
                <span id="guonei">
                </span>
            </li>
            <li>
                <span>非大陆</span>
                <span id="guowai">
                </span>
            </li>
            <li>
                <span>谷歌等</span>
                <span id="wall">
                </span>
            </li>
            <li style="border: none;">
              <span style="border: none; width: 33%;">
                <a href="https://www.youtube.com/watch?v=ZlnSAvaPcK8" target="_self">4K</a>
              </span>
              <span style="border: none; width: 33%;">
                <a href="https://fast.com" target="_self">Fast</a>
              </span>
              <span style="border: none; width: 33%;">
                <a href="/ip/" target="_self">刷新</a>
              </span>
            </li>
    </ul>
</body>
</html>