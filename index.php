
<?php
//禁用错误报告
error_reporting(0);
$t=htmlspecialchars($_GET["t"]);
$q=htmlspecialchars($_GET["q"]);
if ($q==""||$q==null) {
}else{
  if ($t=="b"){
     echo'<script>window.location.href="//baidu.com/s?ie=utf-8&word='.$q.'"</script>';
  }else{
     echo'<script>window.location.href="https://www.google.com/search?hl=zh&q='.$q.'"</script>';
  }
};
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="icon" href="icon/32x32.png" sizes="16x16" />
  <link rel="icon" href="icon/32x32.png" sizes="32x32" />
  <link rel="icon" href="icon/48x48.png" sizes="48x48" />
  <link rel="icon" href="icon/64x64.png" sizes="64x64" />
  <link rel="icon" href="icon/96x96.png" sizes="96x96" />
  <link rel="icon" href="icon/128x128.png" sizes="128x128" />
  <link rel="icon" href="icon/192x192.png" sizes="192x192" />
  <link rel="apple-touch-icon-precomposed" href="icon/300x300.png" />
  <meta name="msapplication-TileImage" content="icon/300x300.png" />
  <title>简单搜索</title>
  <!--link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"-->
  <?php echo'<link href="style.css?t='.date("ymdhi").'" rel="stylesheet">'  ?>
  <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
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
<div class="con">

        <div class="shlogo">
          <a href="#"><img src="img/logo.svg" alt=""></a></div>
        <div class="sou">
          <form action="" method="get" target="_self">
             <input class="t" type="text" value="" name="t" hidden>
             <input class="wd" type="text" placeholder="请输入搜索内容" name="q" autocomplete="off">
             <button></button>
          </form>
          <ul>
            <li data-s="baidu"><i style="background-image: url(img/baidu.svg);"></i>百度一下</li>
            <li data-s="google"><i style="background-image: url(img/g.svg);"></i>Google</li>
          </ul>

        </div>
</div>
<div class="list closed">
    <ul>
        <li class="title"><i class="fa fa-fire"></i> 常用</li>
        <li><a href="https://mail.google.com/mail/u/0/#inbox" target="_blank">Gmail</a></li>
        <li><a href="https://www.instagram.com" target="_blank">Instagram</a></li>
        <li><a href="https://www.twitter.com" target="_blank">Twitter</a></li>
        <li><a href="https://www.taobao.com" target="_blank">淘宝网</a></li>
        <li><a href="https://www.weibo.com" target="_blank">微博</a></li>
        <li><a href="https://pan.baidu.com/" target="_blank">百度网盘</a></li>
        <li><a href="https://ip.yyv.me/" target="_blank">IP检测</a></li>
        <li><a href="https://houxu.app/" target="_blank">后续</a></li>
        <li class="title"><i class="fa fa-film"></i> 视频媒体</li>
        <li><a href="https://www.youtube.com/" target="_blank">Youtube</a></li>
        <li><a href="https://v.qq.com/" target="_blank">腾讯视频</a></li>
        <li><a href="https://www.youku.com/" target="_blank">优酷</a></li>
        <li><a href="https://www.iqiyi.com/" target="_blank">爱奇艺</a></li>
        <li><a href="http://www.zimuzu.io/" target="_blank">字幕组</a></li>
        <li><a href="https://www.dytt8.net/" target="_blank">电影天堂</a></li>
        <li><a href="http://lm.didibib.ml" target="_blank">菲菲影视</a></li>
        <li><a href="https://www.80s.tw/" target="_blank">80s影视</a></li>
        <li><a href="http://www.qtfy7.com/" target="_blank">且听风吟</a></li>
        <li><a href="https://www.bilibili.com/" target="_blank">哔哩哔哩</a></li>
        <li><a href="http://vip.yyv.me/" target="_blank">VIP视频</a></li>
        <li><a href="https://music.yyv.me/" target="_blank">音乐解析</a></li>
        <li class="title"><i class="fa fa-crop"></i> 设计视觉</li>
        <li><a href="https://www.pinterest.com/" target="_blank">Pinterest</a></li>
        <li><a href="https://www.behance.net/" target="_blank">Behance</a></li>
        <li><a href="https://www.dribbble.com/" target="_blank">Dribbble</a></li>
        <li><a href="https://loading.io/" target="_blank">loading</a></li>
        <li><a href="https://www.zcool.com.cn/" target="_blank">站酷</a></li>
        <li><a href="https://www.iconfont.cn/" target="_blank">阿里图标</a></li>
        <li><a href="https://www.iconfinder.com/" target="_blank">IconFinder</a></li>
        <li><a href="https://uiiiuiii.com/" target="_blank">优设教程</a></li>
        <li style="width: 210px;"><a href="https://web.yyv.me/" style="color: #777; background: #fff;" target="_blank">更多设计站>></a></li>
        <li class="title"><i class="fa fa-code"></i> 开发</li>
        <li><a href="http://www.w3school.com.cn/" target="_blank">W3school</a></li>
        <li><a href="https://github.com/" target="_blank">Github</a></li>
        <li><a href="http://ping.chinaz.com/" target="_blank">站长Ping</a></li>
        <li><a href="https://tools.ipip.net/traceroute.php?id=68&v=4" target="_blank">Traceroute</a></li>
        <li><a href="https://www.52pojie.cn/" target="_blank">吾爱破解</a></li>
    </ul>
</div>
<script>
$(document).ready(function() {
    $(".sou li").click(function() {
        var dt = $(this).attr('data-s');
        wd = $(".wd").val();
        if (dt == "google") {
            if (wd == "" || wd == null) {
                window.location.href = "https://www.google.com/?hl=zh";
            } else {
                $(".t").val();
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
    $("#menu").click(function(event) {
        $(this).toggleClass('on');
        $(".list").toggleClass('closed');
    });
    $(".con").click(function(event) {
        $(".on").removeClass('on');
        $(".list").addClass('closed');
    });
});
</script>

<div class="foot">© 2016-<?php echo date("Y") ?> by <a href="https://yyv.me/">歪歪喂</a> . All rights reserved.</div>
</body>
</html>