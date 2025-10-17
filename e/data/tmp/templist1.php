<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
		<meta name="renderer" content="webkit" />
		<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width" />
		<title>
			[!--pagetitle--] - <?=$public_r[sitename]?>
		</title>
		<meta name="description" content="[!--pagedes--]" />
		<meta name="keywords" content="[!--pagekey--]" />
		<link href="/skcms/css/favicon.ico" rel="shortcut icon" type="image/x-icon" />
		<meta name="applicable-device" content="pc,mobile" />
		<meta http-equiv="Cache-Control" content="no-transform" />
		<link rel="stylesheet" id="stylesheet-css" href="/skcms/css/style.css" type="text/css" media="all" />
		<link rel="stylesheet" id="wp-block-library-css" href="/skcms/css/style.min.css" type="text/css" media="all" />
		<script src="/skcms/js/jquery.min.js">
		</script>
		<script src="/skcms/js/jquery-migrate.min.js">
		</script>
		<link rel="stylesheet" href="/skcms/css/index.css" type="text/css" />
		<script>
			 (function() {if (!/*@cc_on!@*/0) return;var e = "abbr, article, aside, audio, canvas, datalist, details, dialog, eventsource, figure, footer, header, hgroup, mark, menu, meter, nav, output, progress, section, time, video".split(', ');var i= e.length; while (i--){ document.createElement(e[i]) } })()
		</script>
	</head>
	<body class="archive category category-tuiguang category-53 el-boxed">
				<header class="header">
			<div class="container clearfix">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar icon-bar-1">
						</span> <span class="icon-bar icon-bar-2">
						</span> <span class="icon-bar icon-bar-3">
						</span>
					</button>
					<h1 class="logo">
						<a href="/" rel="home">
							<img src="/skcms/picture/1-2201111F553929.png" alt="<?=$public_r[sitename]?>" />
						</a>
					</h1>
				</div>

				<div class="collapse navbar-collapse">
					<nav class="navbar-left primary-menu">
					  <ul id="menu-%e5%af%bc%e8%88%aa" class="nav navbar-nav wpcom-adv-menu">
						<li class="menu-item active"> <a href="/"> 首页 </a> </li>
					 <? @sys_ForShowSonClass('0',7,0,0);?>   
					  </ul>
					</nav>
				  </div>
				  
			</div>
		</header>
		<div id="wrap">
			<div class="container wrap">
				<div class="main">
					<div class="sec-panel sec-panel-default">
						<div class="sec-panel-head">
							<h1>
								<span>
									[!--class.name--]
								</span>
							</h1>
						</div>
						<ul class="post-loop post-loop-default cols-0 clearfix">

							[!--empirenews.listtemp--]
							<!--list.var1-->
							[!--empirenews.listtemp--]

						</ul>
						<div class="pagination clearfix">

							[!--show.listpage--]
							
						</div>
					</div>
				</div>
				<aside class="sidebar">
<div id="search-7" class="widget widget_search">
<h3 class="widget-title"> 搜索干货 </h3>
<form method="get" class="search-form" action="javascript:;" onsubmit="return searchForm();">
<input type="text" class="keyword" name="keywords" id="keywords" placeholder="输入关键词搜索..." />
<input type="submit" class="submit" value="" />
<input type="hidden" name="m" value="home" />
<input type="hidden" name="c" value="Search" />
<input type="hidden" name="a" value="lists" />
<input type="hidden" name="lang" value="cn" />
</form>
</div>
<div id="wpcom-post-thumb-2" class="widget widget_post_thumb">
<h3 class="widget-title"> 热门稿件 </h3>
<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(0,3,3,1,'','onclick DESC');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li class="item">
<div class="item-img"> <a class="item-img-inner" href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"> 
<img class="j-lazy" src="<?=$bqr['titlepic']?>" data-original="<?=$bqr['titlepic']?>" width="480" height="300" alt="<?=$bqr['title']?>" /> 
</a>

</div>
<div class="item-content">
<p class="item-title"> <a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>">
<?=$bqr['title']?>
</a>

</p>
<p class="item-date">
<?=date('Y-m-d',$bqr[newstime])?>
</p>
</div>
</li>
<?php
}
}
?>
</ul>
</div>
<div id="wpcom-image-ad-4" class="widget widget_image_ad"> <a href="/" target="_blank"> <img class="j-lazy" src="/skcms/picture/lazy.png" data-original="/skcms/picture/1-2201111I31L45.png" /> </a>

</div>
<!--<div id="wpcom-post-thumb-8" class="widget widget_post_thumb">
<h3 class="widget-title"> 推荐稿件 </h3>
<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(0,10,3,1,'isgood=1');
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li class="item">
<div class="item-img"> <a class="item-img-inner" href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"> <img class="j-lazy" src="<?=$bqr['titlepic']?>" data-original="<?=$bqr['titlepic']?>" width="480" height="300" alt="<?=$bqr['title']?>" /> </a>

</div>
<div class="item-content">
<p class="item-title"> <a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>">
<?=$bqr['title']?>
</a>

</p>
<p class="item-date">
<?=date('Y-m-d',$bqr[newstime])?>
</p>
</div>
</li>
<?php
}
}
?>
</ul>
</div>-->
<!--<div id="wpcom-image-ad-12" class="widget widget_image_ad"> <a href="" target="_blank"> <img class="j-lazy" src="/skcms/picture/lazy.png" data-original="/skcms/picture/1-2201111I5103a.png" /> </a>

</div>-->
<!--<div id="wpcom-post-thumb-3" class="widget widget_post_thumb">
<h3 class="widget-title"> 人物传奇 </h3>
<ul>
<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq(2,10,0,1);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?>
<li class="item">
<div class="item-img"> <a class="item-img-inner" href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>"> <img class="j-lazy" src="<?=$bqr['titlepic']?>" data-original="<?=$bqr['titlepic']?>" width="480" height="300" alt="<?=$bqr['title']?>" /> </a>

</div>
<div class="item-content">
<p class="item-title"> <a href="<?=$bqsr['titleurl']?>" title="<?=$bqr['title']?>">
<?=$bqr['title']?>
</a>

</p>
<p class="item-date">
<?=date('Y-m-d',$bqr[newstime])?>
</p>
</div>
</li>
<?php
}
}
?>
</ul>
</div>-->
<div id="tag_cloud-3" class="widget widget_tag_cloud">
<h3 class="widget-title"> 四川人物榜 </h3>
<div class="tagcloud"> 
<a href="javascript:;" class="tag-cloud-link tag-link-66 tag-link-position-1" style="font-size: 22pt;" aria-label="吴天智">吴天智</a>
<a href="javascript:;" class="tag-cloud-link tag-link-66 tag-link-position-1" style="font-size: 22pt;" aria-label="周坤山">周坤山</a>
<a href="javascript:;" class="tag-cloud-link tag-link-66 tag-link-position-1" style="font-size: 22pt;" aria-label="吴限">吴限</a>
<a href="javascript:;" class="tag-cloud-link tag-link-66 tag-link-position-1" style="font-size: 22pt;" aria-label="吴志敏">吴志敏</a>
<a href="javascript:;" class="tag-cloud-link tag-link-66 tag-link-position-1" style="font-size: 22pt;" aria-label="刘军">刘军</a>
<a href="javascript:;" class="tag-cloud-link tag-link-66 tag-link-position-1" style="font-size: 22pt;" aria-label="许铭占">许铭占</a>
<a href="javascript:;" class="tag-cloud-link tag-link-66 tag-link-position-1" style="font-size: 22pt;" aria-label="苏广华">苏广华</a>
<a href="javascript:;" class="tag-cloud-link tag-link-66 tag-link-position-1" style="font-size: 22pt;" aria-label="张勇">张勇</a>
<a href="javascript:;" class="tag-cloud-link tag-link-66 tag-link-position-1" style="font-size: 22pt;" aria-label="赵保路">赵保路</a>

<!--
<a href="javascript:;" class="tag-cloud-link tag-link-66 tag-link-position-1" style="font-size: 22pt;" aria-label="王晓晖">王晓晖</a>
<a href="javascript:;" class="tag-cloud-link tag-link-66 tag-link-position-1" style="font-size: 22pt;" aria-label="梁伟">吴老师</a>
<a href="javascript:;" class="tag-cloud-link tag-link-66 tag-link-position-1" style="font-size: 22pt;" aria-label="黎邦华">黎邦华</a>
<a href="javascript:;" class="tag-cloud-link tag-link-66 tag-link-position-1" style="font-size: 22pt;" aria-label="周光志">周光志</a>
<a href="javascript:;" class="tag-cloud-link tag-link-66 tag-link-position-1" style="font-size: 22pt;" aria-label="温莉艳">温莉艳</a>
<a href="javascript:;" class="tag-cloud-link tag-link-66 tag-link-position-1" style="font-size: 22pt;" aria-label="贺鹰">贺鹰</a>
<a href="javascript:;" class="tag-cloud-link tag-link-66 tag-link-position-1" style="font-size: 22pt;" aria-label="曹世如">曹世如</a>
<a href="javascript:;" class="tag-cloud-link tag-link-66 tag-link-position-1" style="font-size: 22pt;" aria-label="杨大陆">杨大陆</a>
<a href="javascript:;" class="tag-cloud-link tag-link-66 tag-link-position-1" style="font-size: 22pt;" aria-label="王金蓉">王金蓉</a>
<a href="javascript:;" class="tag-cloud-link tag-link-66 tag-link-position-1" style="font-size: 22pt;" aria-label="钟明">钟明</a>
<a href="javascript:;" class="tag-cloud-link tag-link-66 tag-link-position-1" style="font-size: 22pt;" aria-label="樊建川">樊建川</a>
<a href="javascript:;" class="tag-cloud-link tag-link-66 tag-link-position-1" style="font-size: 22pt;" aria-label="吴逸云">吴逸云</a>
<a href="javascript:;" class="tag-cloud-link tag-link-66 tag-link-position-1" style="font-size: 22pt;" aria-label="刘荣富">刘荣富</a>
<a href="javascript:;" class="tag-cloud-link tag-link-66 tag-link-position-1" style="font-size: 22pt;" aria-label="漆贵春">漆贵春</a>
<a href="javascript:;" class="tag-cloud-link tag-link-66 tag-link-position-1" style="font-size: 22pt;" aria-label="陈素清">陈素清</a>
<a href="javascript:;" class="tag-cloud-link tag-link-66 tag-link-position-1" style="font-size: 22pt;" aria-label="王有治">王有治</a>
<a href="javascript:;" class="tag-cloud-link tag-link-66 tag-link-position-1" style="font-size: 22pt;" aria-label="刘义">刘义</a>
<a href="javascript:;" class="tag-cloud-link tag-link-66 tag-link-position-1" style="font-size: 22pt;" aria-label="彭寒兵">彭寒兵</a>
<a href="javascript:;" class="tag-cloud-link tag-link-66 tag-link-position-1" style="font-size: 22pt;" aria-label="章南南">章南南</a>
<a href="javascript:;" class="tag-cloud-link tag-link-66 tag-link-position-1" style="font-size: 22pt;" aria-label="赵小凤">赵小凤</a>
<a href="javascript:;" class="tag-cloud-link tag-link-66 tag-link-position-1" style="font-size: 22pt;" aria-label="应福友">应福友</a>
-->

</div>
</div>
<!--<div id="wpcom-image-ad-5" class="widget widget_image_ad"> <a href="#" target="_blank"> <img class="j-lazy" src="/skcms/picture/lazy.png" data-original="/skcms/picture/1-2201111I31L45.png" /> </a></div>-->
<div id="tag_cloud-3" class="widget widget_tag_cloud">
<h3 class="widget-title"> 服务推介 </h3>
<div class="tagcloud"> 

<?php
$bqno=0;
$ecms_bq_sql=sys_ReturnEcmsLoopBq('select * from [!db.pre!]enewslink where checked=1 and classid=0 order by lid',20,24,0);
if($ecms_bq_sql){
while($bqr=$empire->fetch($ecms_bq_sql)){
$bqsr=sys_ReturnEcmsLoopStext($bqr);
$bqno++;
?> 
<a href="<?=$bqr[lurl]?>" class="tag-cloud-link tag-link-66 tag-link-position-1" style="font-size: 22pt;" aria-label="<?=$bqr[lname]?>" target="_blank"><?=$bqr[lname]?></a>
<?php
}
}
?>

</div>
</div>
</aside>
</div>
</div>

			</div>
		</div>
		<footer class="footer">
    <div class="container">
        <div class="clearfix">
            <div class="footer-col footer-col-copy">
                <ul class="footer-nav hidden-xs">
                    <li id="menu-item-109589" class="menu-item current-menu-item current_page_item menu-item-109589">
                        <a href="/" aria-current="page">
                            首页
                        </a>
                    </li>
                    <? @sys_ForShowSonClass('0',12,0,0);?>   
                </ul>
                <div class="copyright">
                    <p>
                        Copyright © 2002-2023 <?=$public_r[sitename]?> 版权所有  运营机构：四川吴限文化传播有限公司 / 四川人物网运维中心  网站备案号：<a href="https://beian.miit.gov.cn/" rel="nofollow" target="_self"><?=$public_r[icp]?></a> 技术支持：<a href="https://www.shunking.cn/" rel="nofollow" target="_self">舜王科技</a>
                    </p>
                </div>
            </div>
            <div class="footer-col footer-col-sns">
                <div class="footer-sns">
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="action" style="top: 50%;">
    <div class="a-box contact">
        <div class="contact-wrap">
            <h3 class="contact-title">
                联系我们
            </h3>
            <p>
                在线咨询：<a href="javascript:;" target="_self" rel="noopener">
                    <img class="alignnone" title="点击这里给我发消息" src="/skcms/picture/button_111.gif" alt="点击这里给我发消息" width="79" height="25" border="0" />
                </a>
            </p>
            <p>
                微信号：<?=$public_r[lxdh]?>
            </p>
            <p>
                工作日：9:30-18:30，节假日休息
            </p>
        </div>
    </div>
    <div class="a-box wechat">
        <div class="wechat-wrap">
            <img src="/skcms/picture/1-2201111IH3924.jpg" />
        </div>
    </div>
    <div class="a-box gotop" id="j-top" style="display: none;">
    </div>
</div>
<style>
    
    .footer{padding-bottom: 20px;}
    
</style>
<script>
    
    /* <![CDATA[ */
    var _wpcom_js = {"slide_speed":"4000","video_height":"482","TCaptcha":{"appid":"2003622980"},"errors":{"require":"\u4e0d\u80fd\u4e3a\u7a7a","email":"\u8bf7\u8f93\u5165\u6b63\u786e\u7684\u7535\u5b50\u90ae\u7bb1","pls_enter":"\u8bf7\u8f93\u5165","password":"\u5bc6\u7801\u5fc5\u987b\u4e3a6~32\u4e2a\u5b57\u7b26","passcheck":"\u4e24\u6b21\u5bc6\u7801\u8f93\u5165\u4e0d\u4e00\u81f4","phone":"\u8bf7\u8f93\u5165\u6b63\u786e\u7684\u624b\u673a\u53f7\u7801","sms_code":"\u9a8c\u8bc1\u7801\u9519\u8bef","captcha_verify":"\u8bf7\u70b9\u51fb\u6309\u94ae\u8fdb\u884c\u9a8c\u8bc1","captcha_fail":"\u70b9\u51fb\u9a8c\u8bc1\u5931\u8d25\uff0c\u8bf7\u91cd\u8bd5","nonce":"\u968f\u673a\u6570\u6821\u9a8c\u5931\u8d25","req_error":"\u8bf7\u6c42\u5931\u8d25"}};
    /* ]]> */
    
</script>
<script src="/skcms/js/main.js">
</script>
<script src="/skcms/js/wp-embed.js">
</script>

	</body>
</html>
