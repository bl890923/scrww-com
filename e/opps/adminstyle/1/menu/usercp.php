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
			<td><b>用户管理</b></td>
	</tr>
</table>

<table border='0' cellspacing='0' cellpadding='0'>
        <tr> 
          <td class="menu1">
			<a href="../../user/EditPassword.php<?=$ecms_hashur['whehref']?>" target="main" >修改个人资料</a>
          </td>
        </tr>

		<tr> 
          <td class="menu1">
			<a href="../../user/ListUser.php<?=$ecms_hashur['whehref']?>" target="main" >管理用户</a>
          </td>
        </tr>

		<tr> 
          <td class="menu1">
			<a href="../../user/ListLog.php<?=$ecms_hashur['whehref']?>" target="main" >管理登陆日志</a>
          </td>
        </tr>

		<tr> 
          <td class="menu1">
			<a href="../../user/ListDolog.php<?=$ecms_hashur['whehref']?>" target="main" >管理操作日志</a>
          </td>
        </tr>

</table>
</body>
</html>