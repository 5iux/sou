<?php
//禁用错误报告
error_reporting(0);
$t=htmlspecialchars($_POST["t"]);
$q=htmlspecialchars($_POST["q"]);
if ($q==""||$q==null) {
}else{
  if ($t=="b"){
    echo'<script>window.location.href="//www.baidu.com/s?ie=utf-8&word='.$q.'"</script>';
  }else if($t=="g"){
    echo'<script>window.location.href="https://www.google.com/search?hl=zh&q='.$q.'"</script>';
  }else{
    //默认谷歌
        echo'<script>window.location.href="https://www.google.com/search?hl=zh&q='.$q.'"</script>';
    //可以改为百度
    //echo'<script>window.location.href="//www.baidu.com/s?ie=utf-8&word='.$q.'"</script>';
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
  <link href="style.css?t=<?php echo date("ymdhi"); ?>" rel="stylesheet">
  <link rel="stylesheet" href="//at.alicdn.com/t/font_1230786_gdvd1b4wlz.css">
  <script src="https://cdnjs.loli.net/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="sou.js?t=<?php echo date("ymdhi"); ?>"></script>
</head>

<body>
    <div id="menu"><i></i></div>
    <div class="list closed">
        <ul>
          <!------>
            <li class="title"><i class="iconfont icon-youxiang"></i> 邮箱</li>
            <li><a rel="nofollow" href="https://mail.google.com/mail/u/0/#inbox" target="_blank"><i class="iconfont icon-gmail" style="color: #f03;"></i>Gmail</a></li>
            <li><a rel="nofollow" href="https://outlook.live.com/mail/" target="_blank"><i class="iconfont icon-windows" style="color: #059;"></i>Hotmail</a></li>
            <li><a rel="nofollow" href="https://mail.163.com/" target="_blank"><i class="iconfont icon-wangyi" style="color: #169;"></i>网易邮箱</a></li>
            <li><a rel="nofollow" href="https://mail.sina.com.cn/" target="_blank"><i class="iconfont icon-xinlang" style="color: #e6162d;"></i>新浪邮箱</a></li>
            <li><a rel="nofollow" href="https://mail.qq.com/" target="_blank"><i class="iconfont icon-QQ" style="color: #f05;"></i>QQ邮箱</a></li>
            <li><a rel="nofollow" href="https://qiye.aliyun.com/" target="_blank"><i class="iconfont icon-yunyouxiang" style="color: #f15534;"></i>阿里邮箱</a></li>
          <!------>
            <li class="title"><i class="iconfont icon-msg"></i> 社交</li>
            <li><a rel="nofollow" href="https://www.weibo.com" target="_blank"><i class="iconfont icon-weibo" style="color: #e6162d;"></i>微博</a></li>
            <li><a rel="nofollow" href="https://www.zhihu.com/" target="_blank"><i class="iconfont icon-zhihu" style="color: #0084ff;"></i>知乎</a></li>
            <li><a rel="nofollow" href="https://www.douban.com/" target="_blank"><i class="iconfont icon-douban" style="color: #072;"></i>豆瓣</a></li>
            <li><a rel="nofollow" href="https://www.instagram.com" target="_blank"><i class="iconfont icon-instagram" style="color: #93009f;"></i>Instagram</a></li>
            <li><a rel="nofollow" href="https://www.twitter.com" target="_blank"><i class="iconfont icon-twitter" style="color: #00bcff;"></i>Twitter</a></li>
            <li><a rel="nofollow" href="https://www.facebook.com" target="_blank"><i class="iconfont icon-facebook" style="color: #4267b2;"></i>Facebook</a></li>
          <!------>
            <li class="title"><i class="iconfont icon-shipin"></i> 视频媒体</li>
            <li><a rel="nofollow" href="https://www.youtube.com/" target="_blank"><i class="iconfont icon-youtube" style="color:#f03;"></i>Youtube</a></li>
            <li><a rel="nofollow" href="https://v.qq.com/" target="_blank"><i class="iconfont icon-tengxunshipin" style="color:#2a0;"></i>腾讯视频</a></li>
            <li><a rel="nofollow" href="https://www.youku.com/" target="_blank"><i class="iconfont icon-youku" style="color:#09e;"></i>优酷</a></li>
            <li><a rel="nofollow" href="https://www.iqiyi.com/" target="_blank"><i class="iconfont icon-aiqiyi" style="color:#1d0;"></i>爱奇艺</a></li>
            <li><a rel="nofollow" href="http://www.zmz2019.com/" target="_blank"><i class="iconfont icon-zimu" style="color: #067;"></i>字幕组</a></li>
            <li><a rel="nofollow" href="http://www.acfun.cn/index.html" target="_blank"><i class="iconfont icon-acfun" style="color:#f33;"></i>ACFUN</a></li>
            <li><a rel="nofollow" href="https://www.bilibili.com/" target="_blank"><i class="iconfont icon-bili" style="color:#09e;"></i>哔哩哔哩</a></li>
            <li><a rel="nofollow" href="/movies/" target="_blank"><i class="iconfont icon-yunbo" style="color:#0bf;"></i>影视搜索</a></li>
            <li><a rel="nofollow" href="/tv/" target="_blank"><i class="iconfont icon-dianshi" style="color:#9ae;"></i>直播电视</a></li>
            <li><a rel="nofollow" href="https://music.yyv.me/" target="_blank"><i class="iconfont icon-yinle" style="color:#f4a;"></i>音乐解析</a></li>
          <!------>
            <li class="title"><i class="iconfont icon-gouwuche"></i> 购物</li>
            <li><a rel="nofollow" href="https://www.taobao.com" target="_blank"><i class="iconfont icon-taobao" style="color: #ff6019;"></i>淘宝网</a></li>
            <li><a rel="nofollow" href="https://dyartstyle.com/juhuasuan/" target="_blank"><i class="iconfont icon-juhuasuan" style="color: #E61414;"></i>聚划算</a></li>
            <li><a rel="nofollow" href="https://dyartstyle.com/temai/" target="_blank"><i class="iconfont icon-temai" style="color: #ff6019;"></i>淘宝特卖</a></li>
            <li><a rel="nofollow" href="https://mobile.yangkeduo.com/duo_cms_mall.html?pid=8742514_71211367&cpsSign=CM_190605_8742514_71211367_92fdd9f7fb637fec599bf556f263ed1f&duoduo_type=2&launch_wx=1" title="拼多多手机端专属商城，超低价商品火热抢购中，更有超多大额优惠券持续发放，一键立抢>>" target="_blank"><i class="iconfont icon-99" style="color: #f83e3e;"></i>拼多多</a></li>
            <li><a rel="nofollow" href="https://www.jd.com" target="_blank"><i class="iconfont icon-jingdong" style="color: #e33333;"></i>京东</a></li>
            <li><a rel="nofollow" href="https://www.suning.com/" target="_blank"><i class="iconfont icon-suning" style="color: #f90;"></i>苏宁易购</a></li>
            <li><a rel="nofollow" href="http://you.163.com/" target="_blank"><i class="iconfont icon-yanxuan" style="color: #B4A078;"></i>网易严选</a></li>
            <li><a rel="nofollow" href="https://www.amazon.cn/" target="_blank"><i class="iconfont icon-amazon" style="color: #fc9b18;"></i>亚马逊</a></li>
            <li><a rel="nofollow" href="http://www.dangdang.com/" target="_blank"><i class="iconfont icon-dangdang" style="color: #ff2832;"></i>当当</a></li>
            <li><a rel="nofollow" href="https://wat.dyartstyle.com/" target="_blank"><i class="iconfont icon-wat" style="color: #fe2e52;"></i>吾爱淘</a></li>
          <!------>
            <li class="title"><i class="iconfont icon-sheji"></i> 设计视觉</li>
            <li><a rel="nofollow" href="https://web.yyv.me/" target="_blank"><i class="iconfont icon-daohang1"></i>设计导航</a></li>
            <li><a rel="nofollow" href="https://www.pinterest.com/" target="_blank"><i class="iconfont icon-pinterest" style="color:#e02;"></i>Pinterest</a></li>
            <li><a rel="nofollow" href="https://www.behance.net/" target="_blank"><i class="iconfont icon-behance" style="color:#56f;"></i>Behance</a></li>
            <li><a rel="nofollow" href="https://www.dribbble.com/" target="_blank"><i class="iconfont icon-dribbble" style="color:#e48;"></i>Dribbble</a></li>
            <li><a rel="nofollow" href="https://huaban.com/" target="_blank"><i class="iconfont icon-huaban" style="color:#f06;"></i>花瓣</a></li>
            <li><a rel="nofollow" href="https://www.zcool.com.cn/" target="_blank"><i class="iconfont icon-zhanku" style="color:#f90;"></i>站酷</a></li>
            <li><a rel="nofollow" href="https://www.iconfont.cn/" target="_blank"><i class="iconfont icon-iconfont" style="color: #ff6019;"></i>阿里图标</a></li>
            <li><a rel="nofollow" href="https://www.iconfinder.com/" target="_blank"><i class="iconfont icon-eye"></i>IconFinder</a></li>
            <li><a rel="nofollow" href="https://uiiiuiii.com/" target="_blank"><i class="iconfont icon-jiaocheng" style="color:#0aa;"></i>优设教程</a></li>
            <!------>
            <li class="title"><i class="iconfont icon-ai-tool"></i> 工具</li>
            <li><a rel="nofollow" href="/ip/" target="_blank"><i class="iconfont icon-wangluo" style="color: #02f;"></i>IP查询</a></li>
            <li><a rel="nofollow" href="https://translate.google.cn/?hl=zh-CN" target="_blank"><i class="iconfont icon-fanyi" style="color: #02f;"></i>谷歌翻译</a></li>
            <li><a rel="nofollow" href="http://www.slimego.cn/" target="_blank"><i class="iconfont icon-shilaimu" style="color: #0f89c2;"></i>史莱姆</a></li>
            <li><a rel="nofollow" href="https://gugeji.com/" target="_blank"><i class="iconfont icon-google" style="color:#4285f4"></i>镜像</a></li>
            <li><a rel="nofollow" href="https://feedly.com" target="_blank"><i class="iconfont icon-feedly" style="color: #11dd00;"></i>Feedly</a></li>         
            <li><a rel="nofollow" href="https://pan.baidu.com" target="_blank"><i class="iconfont icon-baiduyun" style="color: #148bfe;"></i>百度网盘</a></li>
            <li><a rel="nofollow" href="https://www.baiduwp.com" target="_blank"><i class="iconfont icon-cloud-download" style="color: #148bfe;"></i>网盘解析</a></li>
            <li><a rel="nofollow" href="https://www.mdeditor.com/" target="_blank"><i class="iconfont icon-md" style="color:#09f;"></i>MD编辑器</a></li>
            <li><a rel="nofollow" href="https://miku.tools/" target="_blank"><i class="iconfont icon-ai-tool"></i>Miku工具</a></li>
            <li><a rel="nofollow" href="http://cubic-bezier.com" target="_blank"><i class="iconfont icon-quxian" style="color: #f08;"></i>贝赛尔曲线</a></li>
            <li><a rel="nofollow" href="/base64/" target="_blank"><i class="iconfont icon-base64" style="color:#1d0;"></i>Base64</a></li>
            <li><a rel="nofollow" href="https://javascriptobfuscator.com/Javascript-Obfuscator.aspx" target="_blank"><i class="iconfont icon-jshunxiao" style="color: #48c;"></i>JS混淆器</a></li>
            <li><a rel="nofollow" href="https://ping.pe" target="_blank"><i class="iconfont icon-wangluo1" style="color:#1d0;"></i>Ping.pe</a></li>
            <li><a rel="nofollow" href="https://ping.chinaz.com/" target="_blank"><i class="iconfont icon-pingup" style="color:#2361ad;"></i>站长Ping</a></li>
            <li><a rel="nofollow" href="https://apkdl.in/" target="_blank"><i class="iconfont icon-anzhuo" style="color:#094;"></i>APK下载</a></li>
            <!------>
            <li class="title"><i class="iconfont icon-kongzhitai"></i> 开发</li>
            <li><a rel="nofollow" href="http://www.w3school.com.cn/" target="_blank"><i class="iconfont icon-h5" style="color:#c03;"></i>W3school</a></li>
            <li><a rel="nofollow" href="https://github.com/" target="_blank"><i class="iconfont icon-github"></i>Github</a></li>
            <li><a rel="nofollow" href="https://codepen.io/" target="_blank"><i class="iconfont icon-codepen"></i>Codepen</a></li>
            <li><a rel="nofollow" href="https://www.52pojie.cn/" target="_blank"><i class="iconfont icon-theater-masks" style="color:#f03;"></i>吾爱破解</a></li>
            <li><a rel="nofollow" href="https://segmentfault.com/" target="_blank"><i class="iconfont icon-msg" style="color:#096;"></i>SF思否</a></li>
            <li><a rel="nofollow" href="https://cdnjs.com/" target="_blank"><i class="iconfont icon-cdnjs" style="color: #e52;"></i>CdnJs</a></li>
            <li><a rel="nofollow" href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank"><i class="iconfont icon-font-awesome" style="color: #4af;"></i>Font A.</a></li>
            <li><a rel="nofollow" href="https://msdn.itellyou.cn/" target="_blank"><i class="iconfont icon-windows" style="color: #48c;"></i>MSDN下载</a></li>
            <li><a rel="nofollow" href="https://dash.cloudflare.com/" target="_blank"><i class="iconfont icon-cloudflare" style="color: #f37f20;"></i>C. flare</a></li>
            <li><a rel="nofollow" href="https://www.swiper.com.cn/" target="_blank"><i class="iconfont icon-S" style="color:#065fe3;"></i>Swiper</a></li>
        </ul>
    </div>
    <div class="mywth">
        <div class="wea_hover">
            <div class="wea_in wea_top"></div>
            <div class="wea_in wea_con">
                <ul></ul>
            </div>
            <div class="wea_in wea_foot">
                <ul></ul>
            </div>
        </div>
        <!--天气插件，基于www.tianqiapi.com 天气接口制作-->
    </div>    
    <div id="content">
        <div class="con">
            <div class="shlogo"></div>
            <div class="sou">
                <form action="" method="post" target="_self">
                    <input class="t" type="text" value="" name="t" hidden>
                    <input class="wd" type="text" placeholder="请输入搜索内容" name="q" x-webkit-speech lang="zh-CN">
                    <button><i style="font-size: 20px;" class="iconfont icon-sousuo"></i></button>
                </form>
                <ul>
                    <li data-s="baidu" target="_blank"><i style="background-image: url(icon/baidu.svg);"></i>百度一下</li>
                    <li data-s="google" target="_blank"><i style="background-image: url(icon/g.svg);"></i>Google</li>
                </ul>
            </div>
        </div>
        <div class="foot">© 2016-<?php echo date("Y") ?> by <a href="https://yyv.me/">歪歪喂</a> . All rights reserved.</div>
    </div>
<!--
作者:D.Young
主页：https://yyv.me/
github：https://github.com/5iux/sou
日期：2019-07-26
版权所有，请勿删除
-->
</body>
</html>