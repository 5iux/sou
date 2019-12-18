# 简单搜索  

用惯了各种导航首页，满屏幕尽是各种不厌其烦的广告和资讯；尝试自己写个自己的主页。不是镜像不是代理，就当做浏览器主页使用，支持自适应屏幕。  


###  GIF
![简单搜索](https://raw.githubusercontent.com/5iux/sou/master/img0726.gif)
> （图片效果，以实际页面为准） 



## 示例页面：    
 
+ php版本：[https://5iux.cn/](https://5iux.cn/)  

+ html版本：[https://g.5iux.cn/](https://g.5iux.cn/)  


> 临时更新下,天气插件BUG多
  


## 组件：  

### 图标：
图标调用了阿里的图标`https://www.iconfont.cn/`，提供下本地包[点击下载](https://raw.githubusercontent.com/5iux/sou/master/icon.zip)  
嫌麻烦的可以使用js版本示例里面的`font-awesome`  
### 天气组件  

由于大家很多人反馈天气组件无法使用，这改为心知天气插件  

> 因为免费版本只提供一定访问频率限制，建议大家自己注册个KEY
> 具体使用方法大家还是自己看文档吧，很简答的：  
> [心知天气文档](https://docs.seniverse.com/widget/start/get.html)  


~~天气组件为`https://dev.heweather.com/`接口，更新快，可以直接调json，参数大家可以到api页面更换调整~~
> ~~注意！使用前请到和风官方申请apikey~~   
> ~~apikey在`wea`目录`index.php`中编辑~~  


~~[天气API](https://dev.heweather.com/docs/api/weather)~~

*~~天气组件已经替换为`www.tianqiapi.com`接口，直接调json，应该不会失效了，参数大家可以到api页面更换调整：~~*   
*~~[天气API](https://www.tianqiapi.com/?action=v1)~~*  



## 其他
我这个只是个示例，有需求还是自己改，不喜欢php想换成js也可以；以前自己试过反代，还是小范围用的，没两天弄死一个好域名，不敢了，上谷歌大家还是自备梯子吧，这里不提供了。  

关于百度搜索出来百家号的问题大家可以搜一下油猴脚本，或者在关键词后面加入`-baijiahao`参数。

