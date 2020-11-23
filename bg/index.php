<?php
/*
作者:D.Young
主页：https://blog.5iux.cn/
github：https://github.com/5iux/sou
日期：2020-11-23
版权所有，请勿删除

使用前请注意务必设置好白名单
*/
header('Content-Type:application/json; charset=utf-8');
//防跨域调用
$allow_origin = array(
	//域名白名单 
    'https://5iux.cn',
    'https://www.5iux.cn'
);
header('Access-Control-Allow-Origin:'.$allow_origin);
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:x-requested-with,content-type');

$jsonlist = file_get_contents("https://www.bing.com/HPImageArchive.aspx?format=js&idx=0&n=8");
echo $_GET["callback"].$jsonlist;
?>