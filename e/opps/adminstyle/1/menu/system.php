<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>菜单</title>
<link href="../../../data/menu/menu.css" rel="stylesheet" type="text/css">
<script src="../../../data/menu/menu.js" type="text/javascript"></script>
<SCRIPT lanuage="JScript">
function tourl(url){
	parent.main.location.href=url;
}
</SCRIPT>
</head>
<body onLoad="initialize()">


<table border='0' cellspacing='0' cellpadding='0'>
	<tr height=20>
			<td id="home"><img src="../../../data/images/homepage.gif" border=0></td>
			<td><b>核心配置</b></td>
	</tr>
</table>


<table border='0' cellspacing='0' cellpadding='0' align='center' width='100%'>
  <tr>
    <td class="menu1"><a href="../../SetEnews.php<?=$ecms_hashur['whehref']?>" target="main" >网站参数设置</a></td>
  </tr>
  <tr>
    <td class="menu1"><a href="../../tool/feedback.php<?=$ecms_hashur['whehref']?>" target="main" >管理信息反馈</a></td>
  </tr>
  <tr>
    <td class="menu1"><a href="../../ReHtml/ChangeData.php<?=$ecms_hashur['whehref']?>" target="main" >数据更新中心</a></td>
  </tr>
  <tr>
    <td class="menu1"><a href="../../db/ListTable.php<?=$ecms_hashur['whehref']?>" target="main" >管理数据表</a></td>
  </tr>
  <tr>
    <td class="menu1"><a href="../../moreport/ListMoreport.php<?=$ecms_hashur['whehref']?>" target="main" >管理网站访问端</a></td>
  </tr>
  <tr>
    <td class="menu1"><a href="../../tool/ListLink.php<?=$ecms_hashur['whehref']?>" target="main" >管理友情链接</a></td>
  </tr>
  <tr>
    <td class="menu1"><a href="../../ebak/ChangeDb.php<?=$ecms_hashur['whehref']?>" target="main" >备份数据</a></td>
  </tr>
  <tr>
    <td class="menu1"><p><a href="../../ebak/ReData.php<?=$ecms_hashur['whehref']?>" target="main" >恢复数据</a></p></td>
  </tr>
</table>
</body>
</html>