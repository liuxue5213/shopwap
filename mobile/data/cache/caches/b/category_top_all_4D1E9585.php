<?php exit;?>a:3:{s:8:"template";a:3:{i:0;s:59:"E:\WWW\shopwap\mobile/themes/weipinhui/category_top_all.dwt";i:1;s:62:"E:\WWW\shopwap\mobile/themes/weipinhui/library/page_header.lbi";i:2;s:62:"E:\WWW\shopwap\mobile/themes/weipinhui/library/page_footer.lbi";}s:7:"expires";i:1467624056;s:8:"maketime";i:1467620456;}<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>所有分类_易购商城 - Powered by SWTouch.cn 触屏版</title>
<link rel="stylesheet" href="/shopwap/mobile/data/common/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/shopwap/mobile/data/common/bootstrap/css/font-awesome.min.css">
<link rel="stylesheet" href="/shopwap/mobile/themes/weipinhui/css/swtouch.css">
<link rel="stylesheet" href="/shopwap/mobile/themes/weipinhui/css/photoswipe.css">
<script>
var ROOT_URL = "/shopwap/mobile";
var GOODS_IMAGE = '';
</script>
</head>
<body><div class="con">
	<header class="Header clearfix">
    	<a href="javascript:history.go(-1)" class="Return"><span></span></a>
        <span class="Title">所有分类</span>
        <a href="./" class="Home"><span></span></a>
    </header>
    <div class="panel panel-default ect-category-all ect-border-radius0">
        <ul>
                        <li>
                <div class="media panel-body">
                    <div class="pull-left ect-category-right"><h3>家用电器</h3></div>
                </div>
                <div class="ect-category-child">
                                                            <span><a href="/shopwap/mobile/index.php?m=default&c=category&a=all&id=90"><img class="pull-left" src="/mobile/data/common/images/no_picture.gif"><p>大 家 电</p></a></span>
                                                                                <span><a href="/shopwap/mobile/index.php?m=default&c=category&a=all&id=93"><img class="pull-left" src="/mobile/data/common/images/no_picture.gif"><p>个护健康</p></a></span>
                                                                                <span><a href="/shopwap/mobile/index.php?m=default&c=category&a=all&id=92"><img class="pull-left" src="/mobile/data/common/images/no_picture.gif"><p>厨房电器</p></a></span>
                                                                                <span><a href="/shopwap/mobile/index.php?m=default&c=category&a=all&id=9"><img class="pull-left" src="/mobile/data/common/images/no_picture.gif"><p>运动户外</p></a></span>
                                         
                </div>
            </li>
                        <li>
                <div class="media panel-body">
                    <div class="pull-left ect-category-right"><h3>进口零食</h3></div>
                </div>
                <div class="ect-category-child">
                     
                </div>
            </li>
                    </ul> 
    </div>
</div>
<div class="footer">
	<ul>
        <li><a href="/shopwap/mobile/index.php?m=default&c=index&a=index">首页</a></li>
        <li><a href="/shopwap/mobile/index.php?m=default&c=user&a=index">个人中心</a></li>
        <li><a href="/shopwap/mobile/index.php?m=default&c=flow&a=cart">购物车</a></li>
        <li><a href="/shopwap/mobile/index.php?m=default&c=groupbuy&a=index">团购</a></li>
    </ul>
</div>
<a id="scrollUp" href="#top" style="position: fixed; z-index: 10;"><i class="fa fa-angle"></i></a>
<a class="scrollUp" href="/shopwap/mobile/index.php?m=default&c=flow&a=cart" style="position: fixed; z-index: 10; left:.25em;right:auto;"><i class="fa fa-angle"></i><span class="flow_cart_num"></span></a>
<script type="text/javascript" src="/shopwap/mobile/data/common/js/jquery.min.js" ></script> 
<script type="text/javascript" src="/shopwap/mobile/data/common/js/jquery.json.js" ></script> 
<script type="text/javascript" src="/shopwap/mobile/data/common/js/common.js"></script> 
<script type="text/javascript" src="/shopwap/mobile/data/common/js/jquery.more.js"></script> 
<script type="text/javascript" src="/shopwap/mobile/data/common/js/utils.js" ></script> 
<script src="/shopwap/mobile/themes/weipinhui/js/TouchSlide.1.1.js"></script> 
<script src="/shopwap/mobile/themes/weipinhui/js/swtouch.js"></script> 
<script src="/shopwap/mobile/themes/weipinhui/js/simple-inheritance.min.js"></script> 
<script src="/shopwap/mobile/themes/weipinhui/js/code-photoswipe-1.0.11.min.js"></script> 
<script src="/shopwap/mobile/data/common/bootstrap/js/bootstrap.min.js"></script> 
<script src="/shopwap/mobile/themes/weipinhui/js/jquery.scrollUp.min.js"></script> 
<script type="text/javascript" src="/shopwap/mobile/data/common/js/validform.js" ></script> 
<script language="javascript">
	/*banner滚动图片*/
		TouchSlide({
			slideCell : "#focus",
			titCell : ".hd ul", // 开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
			mainCell : ".bd ul",
			effect : "left",
			autoPlay : true, // 自动播放
			autoPage : true, // 自动分页
			switchLoad : "_src" // 切换加载，真实图片路径为"_src"
		});
	
	//首页菜单下特卖广告
	$(function(){
		var a=$(".gridRow li");
		a.each(function(i){
			a.eq(i*2-1).addClass("on");
		});
	});
</script> 
</body>
</html>