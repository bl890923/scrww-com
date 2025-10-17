<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
//模板组
$gid=(int)$_GET['gid'];
if(!$gid)
{
	if($ecms_config['sets']['deftempid'])
	{
		$gid=$ecms_config['sets']['deftempid'];
	}
	elseif($public_r['deftempid'])
	{
		$gid=$public_r['deftempid'];
	}
	else
	{
		$gid=1;
	}
}
$tempgroup="";
$tgname="";
$tgsql=$empire->query("select gid,gname,isdefault from {$dbtbpre}enewstempgroup order by gid");
while($tgr=$empire->fetch($tgsql))
{
	$tgselect="";
	if($tgr['gid']==$gid)
	{
		$tgname=$tgr['gname'];
		$tgselect=" selected";
	}
	$tempgroup.="<option value='".$tgr['gid']."'".$tgselect.">".$tgr['gname']."</option>";
}
if(empty($tgname))
{
	printerror("ErrorUrl","");
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
<table border='0' cellspacing='0' cellpadding='0' align='center' width='100%'>
  <tr>
    <td><select name="selecttempgroup" onchange="self.location.href='left.php?<?=$ecms_hashur['ehref']?>&ecms=template&gid='+this.options[this.selectedIndex].value">
        <?=$tempgroup?>
      </select></td>
  </tr>
</table>
<table border='0' cellspacing='0' cellpadding='0' align='center' width='100%'>
  <tr>
    <td height="20"><img src="images/noadd.gif" width="20" height="9"><a href="#empirecms" onclick="window.open('../../template/EnewsBq.php<?=$ecms_hashur['whehref']?>','','width=600,height=600,scrollbars=yes,resizable=yes');">查看标签语法</a></td>
  </tr>
  <tr>
    <td height="20"><img src="images/noadd.gif" width="20" height="9"><a href="#empirecms" onclick="window.open('../../template/MakeBq.php<?=$ecms_hashur['whehref']?>','','width=600,height=600,scrollbars=yes,resizable=yes');">自动生成标签</a></td>
  </tr>
</table>
<?php
if($ecms_config['esafe']['openeditdttemp']&&$r[dodttemp])
{
?>
<?php
}
?>
<table border='0' cellspacing='0' cellpadding='0'>
  <tr height=20>
    <td id="home"><img src="../../../data/images/homepage.gif" border=0></td>
    <td><b>模板管理</b></td>
  </tr>
</table>
<table border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <td class="menu1"><a href="../../template/EditPublicTemp.php?tname=indextemp&gid=<?=$gid?><?=$ecms_hashur['ehref']?>" target="main" >首页模板</a></td>
  </tr>
  <tr>
    <td class="menu1"><a href="../../template/ListClasstemp.php?gid=<?=$gid?><?=$ecms_hashur['ehref']?>" target="main" >封面模板</a></td>
  </tr>
  <tr>
    <td class="menu1"><a href="../../template/ListListtemp.php?gid=<?=$gid?><?=$ecms_hashur['ehref']?>" target="main" >列表模板</a></td>
  </tr>
  <tr>
    <td class="menu1"><a href="../../template/ListNewstemp.php?gid=<?=$gid?><?=$ecms_hashur['ehref']?>" target="main" >内容模板</a></td>
  </tr>
  <tr>
    <td class="menu1"><a href="../../template/ListSearchtemp.php?gid=<?=$gid?><?=$ecms_hashur['ehref']?>" target="main" >搜索模板</a></td>
  </tr>
  <tr>
    <td class="menu1"><a href="../../template/ListBqtemp.php?gid=<?=$gid?><?=$ecms_hashur['ehref']?>" target="main" >标签模板</a></td>
  </tr>
  <tr>
    <td class="menu1"><a href="../../template/ListTempvar.php?gid=<?=$gid?><?=$ecms_hashur['ehref']?>" target="main" >模板变量</a></td>
  </tr>
  <tr>
    <td class="menu1"><a href="../../template/EditPublicTemp.php?tname=schalltemp&gid=<?=$gid?><?=$ecms_hashur['ehref']?>" target="main" >全站搜索模板</a></td>
  </tr>
  <tr>
    <td class="menu1"><a href="../../template/EditPublicTemp.php?tname=searchformtemp&gid=<?=$gid?><?=$ecms_hashur['ehref']?>" target="main" >高级搜索表单模板</a></td>
  </tr>
  <tr>
    <td class="menu1"><a href="../../template/EditPublicTemp.php?tname=gbooktemp&gid=<?=$gid?><?=$ecms_hashur['ehref']?>" target="main" >留言板模板</a></td>
  </tr>
  <tr>
    <td class="menu1"><a href="../../template/EditPublicTemp.php?tname=listpagetemp&gid=<?=$gid?><?=$ecms_hashur['ehref']?>" target="main" >列表分页模板</a></td>
  </tr>
  <tr>
    <td class="menu1"><a href="../../template/ListPagetemp.php?gid=<?=$gid?><?=$ecms_hashur['ehref']?>" target="main" >管理自定义页面模板</a></td>
  </tr>
  <tr>
    <td class="menu1"><a href="../../template/TempGroup.php<?=$ecms_hashur['whehref']?>" target="main" >导入/导出模板组</a></td>
  </tr>
  <tr>
    <td class="menu1"><a href="../../template/RepTemp.php?gid=<?=$gid?><?=$ecms_hashur['ehref']?>" target="main" >批量替换模板字符</a></td>
  </tr>
</table>
</body>
</html>