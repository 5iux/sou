<?php
//禁用错误报告
error_reporting(0);
$t=htmlspecialchars($_POST["t"]);
$q=htmlspecialchars($_POST["q"]);
$v=htmlspecialchars($_GET["v"]);
if ($q==""||$q==null) {
}else{
  if ($t=="b"){
     echo'<script>window.location.href="//www.baidu.com/s?ie=utf-8&word='.$q.'"</script>';
  }else if($t=="g"){
      echo'<script>window.location.href="https://www.google.com/search?hl=zh&q='.$q.'"</script>';
  }else{
  	if($v=="0"){
  		echo'<script>window.location.href="https://www.google.com/search?hl=zh&q='.$q.'"</script>';
  	}else{
  		//默认百度
  		echo'<script>window.location.href="//www.baidu.com/s?ie=utf-8&word='.$q.'"</script>';
  	}
  	
  }
};
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="Cache-Control" content="no-siteapp">
  <link rel="icon" href="icon/192.png" sizes="192x192" />
  <link rel="apple-touch-icon-precomposed" href="icon/300.png" />
  <meta name="msapplication-TileImage" content="icon/300.png" />
  <link rel="shortcut icon" href="icon/32.png"/>
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="full-screen" content="yes"><!--UC强制全屏-->
  <meta name="browsermode" content="application"><!--UC应用模式-->
  <meta name="x5-fullscreen" content="true"><!--QQ强制全屏-->
  <meta name="x5-page-mode" content="app"><!--QQ应用模式-->
  <title>简单搜索</title>
  <?php echo'<link href="style.css?t='.date("ymdhi").'" rel="stylesheet">'  ?>
  <link href="https://cdnjs.loli.net/ajax/libs/font-awesome/5.8.0/css/all.min.css" rel="stylesheet">
  <script src="https://cdnjs.loli.net/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?99243244082272ba565ed15cb2e62619";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

</head>

<body>
    <div id="menu"><i></i></div>
    <!--div class="home"><a href="https://yyv.me/"><i class="fas fa-home"></i></a></div-->
    <div class="list closed">
        <ul><!------>
            <li class="title"><i class="fas fa-comments"></i> 社交</li>
            <li><a rel="nofollow" href="https://www.weibo.com" target="_blank"><i class="fab fa-weibo" style="color: #e6162d;"></i>微博</a></li>
            <li><a rel="nofollow" href="https://www.zhihu.com/" target="_blank"><i class="fab fa-zhihu" style="color: #0084ff;"></i>知乎</a></li>
            <li><a rel="nofollow" href="https://www.douban.com/" target="_blank"><i class="fas fa-leaf" style="color: #072;"></i>豆瓣</a></li>
            <li><a rel="nofollow" href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram" style="color: #93009f;"></i>Instagram</a></li>
            <li><a rel="nofollow" href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter" style="color: #00bcff;"></i>Twitter</a></li>
            <li><a rel="nofollow" href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square" style="color: #4267b2;"></i>Facebook</a></li>
            <!------>
            <li class="title"><i class="fas fa-shopping-cart"></i> 购物</li>
            <li><a rel="nofollow" href="https://www.taobao.com" target="_blank"><i class="fas fa-cart-plus" style="color: #ff6019;"></i>淘宝网</a></li>
            <li><a rel="nofollow" href="https://www.jd.com" target="_blank"><i class="fas fa-dog" style="color: #e33333;"></i>京东</a></li>
            <li><a rel="nofollow" href="https://www.suning.com/" target="_blank"><i class="fas fa-gifts" style="color: #f90;"></i>苏宁易购</a></li>
            <li><a rel="nofollow" href="http://you.163.com/" target="_blank"><i class="fas fa-store" style="color: #B4A078;"></i>网易严选</a></li>
            <li><a rel="nofollow" href="https://www.amazon.cn/" target="_blank"><i class="fab fa-amazon" style="color: #fc9b18;"></i>亚马逊</a></li>
            <li><a rel="nofollow" href="http://www.dangdang.com/" target="_blank"><i class="fas fa-shopping-cart" style="color: #ff2832;"></i>当当</a></li>
            <li><a rel="nofollow" href="https://www.yhd.com/" target="_blank"><i class="fas fa-shopping-bag" style="color: #ff4040;"></i>一号店</a></li>
            <li><a rel="nofollow" href="https://dyartstyle.com/quan/" target="_blank"><i class="fas fa-yen-sign" style="color: #f03;"></i>搜优惠券</a></li>
            <!------>
            <li class="title"><i class="far fa-envelope"></i> 邮箱</li>
            <li><a rel="nofollow" href="https://mail.google.com/mail/u/0/#inbox" target="_blank"><i class="far fa-envelope" style="color: #f03;"></i>Gmail</a></li>
            <li><a rel="nofollow" href="https://outlook.live.com/mail/" target="_blank"><i class="fab fa-microsoft" style="color: #059;"></i>Hotmail</a></li>
            <li><a rel="nofollow" href="https://mail.163.com/" target="_blank"><i class="far fa-envelope-open" style="color: #f03;"></i>网易邮箱</a></li>
            <li><a rel="nofollow" href="https://mail.qq.com/" target="_blank"><i class="fab fa-qq" style="color: #f05;"></i>QQ邮箱</a></li>
            <!------>
        <?php if($v=="0"){
          echo '<li class="title"><i class="fa fa-smile-wink"></i> 我的</li>            
            ';}
        ?>
            <!------>
            <li class="title"><i class="fas fa-film"></i> 视频媒体</li>
            <li><a rel="nofollow" href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube" style="color:#f03;"></i>Youtube</a></li>
            <li><a rel="nofollow" href="https://v.qq.com/" target="_blank"><i class="fas fa-play" style="color:#2a0;"></i>腾讯视频</a></li>
            <li><a rel="nofollow" href="https://www.youku.com/" target="_blank"><i class="far fa-play-circle" style="color:#09e;"></i>优酷</a></li>
            <li><a rel="nofollow" href="https://www.iqiyi.com/" target="_blank"><i class="fas fa-video" style="color:#1d0;"></i>爱奇艺</a></li>
            <li><a rel="nofollow" href="http://www.zmz2019.com/" target="_blank"><i class="fas fa-closed-captioning"></i>字幕组</a></li>
            <li><a rel="nofollow" href="http://www.acfun.cn/index.html" target="_blank"><i class="fas fa-mountain" style="color:#f33;"></i>ACFUN</a></li>
            <li><a rel="nofollow" href="https://www.bilibili.com/" target="_blank"><i class="fas fa-compact-disc" style="color:#09e;"></i>哔哩哔哩</a></li>
            <li><a rel="nofollow" href="https://sou.yyv.me/tv/" target="_blank"><i class="fas fa-satellite-dish" style="color:#9ae;"></i>直播电视</a></li>
            <li><a rel="nofollow" href="https://music.yyv.me/" target="_blank"><i class="fas fa-music" style="color:#f4a;"></i>音乐解析</a></li>
            <!------>
            <li class="title"><i class="far fa-object-ungroup"></i> 设计视觉</li>
            <li><a rel="nofollow" href="https://web.yyv.me/" target="_blank"><i class="fas fa-map-signs"></i>设计导航</a></li>
            <li><a rel="nofollow" href="https://www.pinterest.com/" target="_blank"><i class="fab fa-pinterest" style="color:#e02;"></i>Pinterest</a></li>
            <li><a rel="nofollow" href="https://www.behance.net/" target="_blank"><i class="fab fa-behance" style="color:#56f;"></i>Behance</a></li>
            <li><a rel="nofollow" href="https://www.dribbble.com/" target="_blank"><i class="fab fa-dribbble" style="color:#e48;"></i>Dribbble</a></li>
            <li><a rel="nofollow" href="https://huaban.com/" target="_blank"><i class="fas fa-spa" style="color:#f06;"></i>花瓣</a></li>
            <li><a rel="nofollow" href="https://www.zcool.com.cn/" target="_blank"><i class="far fa-object-group" style="color:#f90;"></i>站酷</a></li>
            <li><a rel="nofollow" href="https://www.iconfont.cn/" target="_blank"><i class="fas fa-pencil-ruler" style="color: #ff6019;"></i>阿里图标</a></li>
            <li><a rel="nofollow" href="https://www.iconfinder.com/" target="_blank"><i class="fas fa-eye"></i>IconFinder</a></li>
            <li><a rel="nofollow" href="https://uiiiuiii.com/" target="_blank"><i class="fas fa-chalkboard-teacher" style="color:#0aa;"></i>优设教程</a></li>
            <!------>
            <li class="title"><i class="fas fa-tools"></i> 工具</li>
            <li><a rel="nofollow" href="https://translate.google.cn/?hl=zh-CN" target="_blank"><i class="fas fa-language" style="color: #02f;"></i>谷歌翻译</a></li>
            <li><a rel="nofollow" href="https://gugeji.com/" target="_blank"><i class="fab fa-google" style="color:#4285f4"></i>镜像</a></li>
            <li><a rel="nofollow" href="https://feedly.com" target="_blank"><i class="fas fa-rss" style="color: #11dd00;"></i>Feedly</a></li>         
            <li><a rel="nofollow" href="https://pan.baidu.com" target="_blank"><i class="fas fa-cloud-download-alt" style="color: #148bfe;"></i>百度网盘</a></li>
            <li><a rel="nofollow" href="https://www.mdeditor.com/" target="_blank"><i class="fab fa-markdown" style="color:#09f;"></i>MD编辑器</a></li>
            <li><a rel="nofollow" href="https://miku.tools/" target="_blank"><i class="fas fa-tools"></i>Miku工具</a></li>
            <li><a rel="nofollow" href="http://cubic-bezier.com" target="_blank"><i class="fas fa-bezier-curve" style="color: #f08;"></i>贝赛尔曲线</a></li>
            <li><a rel="nofollow" href="https://5iux.cn/base64" target="_blank"><i class="far fa-file-code" style="color:#1d0;"></i>Base64</a></li>
            <li><a rel="nofollow" href="https://javascriptobfuscator.com/Javascript-Obfuscator.aspx" target="_blank"><i class="fas fa-lock" style="color: #48c;"></i>JS混淆器</a></li>
            <li><a rel="nofollow" href="https://ping.pe" target="_blank"><i class="fas fa-network-wired" style="color:#1d0;"></i>Ping.pe</a></li>
            <!------>
            <li class="title"><i class="fas fa-terminal"></i> 开发</li>
            <li><a rel="nofollow" href="http://www.w3school.com.cn/" target="_blank"><i class="fab fa-css3" style="color:#c03;"></i>W3school</a></li>
            <li><a rel="nofollow" href="https://github.com/" target="_blank"><i class="fab fa-github"></i>Github</a></li>
            <li><a rel="nofollow" href="https://codepen.io/" target="_blank"><i class="fab fa-codepen"></i>Codepen</a></li>
            <li><a rel="nofollow" href="https://www.52pojie.cn/" target="_blank"><i class="fas fa-theater-masks" style="color:#f03;"></i>吾爱破解</a></li>
            <li><a rel="nofollow" href="https://segmentfault.com/" target="_blank"><i class="fas fa-comment-dots" style="color:#096;"></i>SF思否</a></li>
            <li><a rel="nofollow" href="http://web.jobbole.com/" target="_blank"><i class="fas fa-user-secret" style="color: #09c;"></i>伯乐在线</a></li>
            <li><a rel="nofollow" href="https://cdnjs.com/" target="_blank"><i class="fab fa-js-square" style="color: #e52;"></i>CdnJs</a></li>
            <li><a rel="nofollow" href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank"><i class="fab fa-font-awesome" style="color: #4af;"></i>Font A.</a></li>
            <li><a rel="nofollow" href="https://msdn.itellyou.cn/" target="_blank"><i class="fab fa-windows" style="color: #48c;"></i>MSDN下载</a></li>
            <li><a rel="nofollow" href="https://dash.cloudflare.com/" target="_blank"><i class="fas fa-cloud" style="color: #f37f20;"></i>C. flare</a></li>
        </ul>
    </div>
    <div id="tp-weather-widget" class="mywth"></div>
    <div id="content">
        <div class="con">
            <div class="shlogo"></div>
            <div class="sou">
                <form action="" method="post" target="_self">
                    <input class="t" type="text" value="" name="t" hidden>
                    <input class="wd" type="text" placeholder="请输入搜索内容" name="q" x-webkit-speech lang="zh-CN">
                    <button><i class="fab fa-sistrix"></i></button>
                </form>
                <ul>
                    <li data-s="baidu" target="_blank"><i style="background-image: url(icon/baidu.svg);"></i>百度一下</li>
                    <li data-s="google" target="_blank"><i style="background-image: url(icon/g.svg);"></i>Google</li>
                </ul>
            </div>
        </div>
        <script>
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
                $("#tp-weather-widget").toggleClass('hidden');
            });
            $("#content").click(function(event) {
                $(".on").removeClass('on');
                $(".list").addClass('closed');
                $("#tp-weather-widget").removeClass('hidden');
            });
            /*
               为界面干净无广告，移除天气插件版权信息
               天气插件版权备注到这里：心知天气版权所有；
               需要请到：https://www.seniverse.com/widget/  
            */
            $("#tp-weather-widget").mouseover(function(event) {
                $("span:contains('心知天气')").parent().remove();
            });
            $(".mywth").click(function(event) {
              var wt=$("body").width();
              if(wt>640){
                window.location.href="https://tianqi.qq.com/";
              }else{
                window.location.href="https://apip.weatherdt.com/h5.html?id=JrCSiXLssE";
              }
            });
        });
        </script>

<!--天气插件开始-->
<script>(function(T,h,i,n,k,P,a,g,e){g=function(){P=h.createElement(i);a=h.getElementsByTagName(i)[0];P.src=k;P.charset="utf-8";P.async=1;a.parentNode.insertBefore(P,a)};T["ThinkPageWeatherWidgetObject"]=n;T[n]||(T[n]=function(){(T[n].q=T[n].q||[]).push(arguments)});T[n].l=+new Date();if(T.attachEvent){T.attachEvent("onload",g)}else{T.addEventListener("load",g,false)}}(window,document,"script","tpwidget","//widget.seniverse.com/widget/chameleon.js"))</script>
<script>tpwidget("init", {
    "flavor": "slim",
    "location": "WWE0TGW4PX6N",
    "geolocation": "enabled",
    "language": "zh-chs",
    "unit": "c",
    "theme": "chameleon",
    "container": "tp-weather-widget",
    "bubble": "enabled",
    "alarmType": "badge",
    "uid": "UFFFC70B02",
    "hash": "8ca5fdc919e446872f170fb32648c78c"
});
tpwidget("show");</script>
<!--天气插件结束-->

        <div class="foot">© 2016-<?php echo date("Y") ?> by <a href="https://yyv.me/">歪歪喂</a> . All rights reserved.</div>
    </div>
</body>
</html>