<?php 
$type=htmlspecialchars($_GET["type"]);
?>
<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>影视搜索</title>
    <meta name="application-name" content="影视搜索" />
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta name="referrer" content="no-referrer" />
    <link rel="icon" href="../movies/img/192x192.jpg" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="../movies/img/280x280.jpg" />
    <meta name="msapplication-TileImage" content="../movies/img/280x280.jpg" />
    <link rel="shortcut icon" href="../movies/img/32x32.jpg">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="full-screen" content="yes"><!--UC强制全屏-->
    <meta name="browsermode" content="application"><!--UC应用模式-->
    <meta name="x5-fullscreen" content="true"><!--QQ强制全屏-->
    <meta name="x5-page-mode" content="app"><!--QQ应用模式-->
    <link href="https://cdnjs.loli.net/ajax/libs/font-awesome/5.8.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../movies/style.css?t=<?php echo date('ymdhi'); ?>" rel="stylesheet">
    <script src="https://cdnjs.loli.net/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.loli.net/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>

</head>
<body>
<div id="header">
	<div class="logo"><a href="/movies/">影视搜索</a> </div>
</div>
<ul class="bar">
    <li><a href="#wd" title="搜索"><i class="fas fa-search"></i></a></li>
    <li><a id="backTopBtn" href="" title="回顶部"><i class="fas fa-chevron-up"></i></a></li>
</ul>

<div id="content">
	<div class="search">
       <form action="https://www.yunbtv.com/vodsearch/-------------.html" method="GET">
       	<input type="text" name="wd" id="wd" placeholder="搜影片、剧集、综艺、动画等" value="">
       	<input type="submit" value="搜索" id="submit">
       </form>
    </div>
    <div class="bd">
    	<div id="title"><b>豆瓣热门推荐</b></div>
    	<ul id="nav">
            <li class="hot"><a href="/movies/">热门</a></li>
            <li class="new"><a href="/movies/?type=new">最新</a></li>
    		<li class="hscore"><a href="/movies/?type=hscore">高分</a></li>
    		<li class="classic"><a href="/movies/?type=classic">经典</a></li>
    		<li class="teleplay"><a href="/movies/?type=teleplay">电视剧</a></li>
    	</ul>
<?php
if($type=="hscore"){
	//豆瓣高分
	$content= file_get_contents('https://movie.douban.com/j/search_subjects?type=movie&tag=%E8%B1%86%E7%93%A3%E9%AB%98%E5%88%86&sort=recommend&page_limit=120&page_start=0');
	echo'        <script>$(".hscore").addClass("on")</script>
        <ul id="list">
	';
}else if($type=="classic"){
	//经典
	$content= file_get_contents('https://movie.douban.com/j/search_subjects?type=movie&tag=%E7%BB%8F%E5%85%B8&sort=recommend&page_limit=120&page_start=0');
	echo'        <script>$(".classic").addClass("on")</script>
        <ul id="list">
	';
}else if($type=="teleplay"){
    //国产剧
    $content= file_get_contents('https://movie.douban.com/j/search_subjects?type=tv&tag=%E5%9B%BD%E4%BA%A7%E5%89%A7&sort=recommend&page_limit=120&page_start=0');
    echo'        <script>$(".teleplay").addClass("on")</script>
        <ul id="list">
    ';
}else if($type=="new"){
    //最新
    $content= file_get_contents('https://movie.douban.com/j/search_subjects?type=movie&tag=%E6%9C%80%E6%96%B0&sort=recommend&page_limit=120&page_start=0');
    echo'        <script>$(".new").addClass("on")</script>
        <ul id="list">
    ';
}else{
    //热门电影
    $content= file_get_contents('https://movie.douban.com/j/search_subjects?type=movie&tag=%E7%83%AD%E9%97%A8&sort=recommend&page_limit=120&page_start=0');
    echo'        <script>$(".hot").addClass("on")</script>
        <ul id="list">
    ';
} 

$content = json_decode($content);
    foreach ( $content->subjects as $subjects ) {
    echo '		<li>
    		    <a href="https://www.yunbtv.com/vodsearch/-------------.html?wd='.$subjects->title.'">
    		        <img class="lazy" src="../movies/img/load.gif" data-original="'.$subjects->cover.'" width="120" height="176">
    		        <em>豆瓣评分：<b>'.$subjects->rate.'</b></em>
                    <span>'.$subjects->title.'</span>
    		    </a>
    		</li>
    ';
    }


?>


        </ul>
        <script>
            $('img.lazy').lazyload({
            effect:"fadeIn"});
            $('#backTopBtn').click(function () {
                $('html, body').animate({scrollTop: 0}, 700);
            });
        </script>
        <div id="more"><a href="https://v.dagu.ml/">更多影视 >></a></div>
    </div>
    <div class="search" style="margin-bottom: 20px;">
       <form action="https://www.yunbtv.com/vodsearch/-------------.html" method="GET">
        <input type="text" name="wd" id="wd" placeholder="搜影片、剧集、综艺、动画等" value="">
        <input type="submit" value="搜索" id="submit">
       </form>
    </div>
</div>
<div id="foot">
	版权声明:本网站为非赢利性站点，<br>
	本网站所有内容均来源于互联网相关站点自动搜索采集信息，<br>
	版权归原作者所有，如有侵权请联系我,将予以删除<br>
	© 2019 BY <a href="/movies/">影视搜索</a> . All rights reserved.</div>
</div>
</body>
</html>


