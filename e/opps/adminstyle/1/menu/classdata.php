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
			<td><b>栏目管理</b></td>
	</tr>
</table>

<table border='0' cellspacing='0' cellpadding='0'>
  
  

<?
if($r[doclass]||$r[dosetmclass]||$r[doclassf])
{
?>
  <tr> 
    <td id="prclassdata" class="menu1" onclick="chengstate('classdata')">
		<a >栏目管理</a>
	</td>
  </tr>
  <tr id="itemclassdata" style="display:none"> 
    <td class="list">
		<table border='0' cellspacing='0' cellpadding='0'>
		<?
		if($r[doclass])
		{
		?>
		<tr> 
          <td class="file">
			<a href="../../ListClass.php<?=$ecms_hashur['whehref']?>" target="main" >管理栏目</a>
          </td>
        </tr>
		<?
		}
		if($r[doclassf])
		{
		?>
		<?
		}
		if($r[dosetmclass])
		{
		?>
		<tr> 
          <td class="file1">
			<a href="../../SetMoreClass.php<?=$ecms_hashur['whehref']?>" target="main" >批量设置栏目属性</a>
          </td>
        </tr>
		<?
		}
		?>
      </table>
	</td>
  </tr>
<?
}
?>

<?
if($r[dozt]||$r[doztf])
{
?>
  
  
<?
}
?>

<?
if($r[doinfotype])
{
?>
  
<?
}
?>

<?
if($r[dosp])
{
?>
<?
}
?>

<?
if($r[douserpage])
{
?>
  <tr> 
    <td id="pruserpage" class="menu1" onclick="chengstate('userpage')">
		<a >自定义页面</a>
	</td>
  </tr>
  <tr id="itemuserpage" style="display:none"> 
    <td class="list">
		<table border='0' cellspacing='0' cellpadding='0'>
		<tr> 
          <td class="file">
			<a href="../../template/ListPage.php<?=$ecms_hashur['whehref']?>" target="main" >管理自定义页面</a>
          </td>
        </tr>
      </table>
	</td>
  </tr>
<?
}
?>

<?
if($r[douserlist])
{
?>
<?
}
?>

<?
if($r[douserjs])
{
?>
<?
}
?>

<?
if($r[dotags])
{
?>
<?
}
?>

<?
if($r['doclass'])
{
?>
  <tr> 
    <td id="prgoodtype" class="menu1" onclick="chengstate('goodtype')">
		<a >头条/推荐级别</a>
	</td>
  </tr>
  <tr id="itemgoodtype" style="display:none"> 
    <td class="list">
		<table border='0' cellspacing='0' cellpadding='0'>
        <tr> 
          <td class="file">
			<a href="../../info/ListGoodType.php?ttype=1<?=$ecms_hashur['ehref']?>" target="main" >管理头条级别</a>
          </td>
        </tr>
		<tr> 
          <td class="file1">
			<a href="../../info/ListGoodType.php?ttype=0<?=$ecms_hashur['ehref']?>" target="main" >管理推荐级别</a>
          </td>
        </tr>
      </table>
	</td>
  </tr>
<?
}
?>

<?
if($r[dofile])
{
?>
<?
}
?>

<?
if($r[docj])
{
?>
  <tr> 
    <td id="prcj" class="menu1" onclick="chengstate('cj')">
		<a >采集管理</a>
	</td>
  </tr>
  <tr id="itemcj" style="display:none"> 
    <td class="list">
		<table border='0' cellspacing='0' cellpadding='0'>
		<tr> 
          <td class="file">
			<a href="../../ListInfoClass.php<?=$ecms_hashur['whehref']?>" target="main" >管理采集节点</a>
          </td>
        </tr>
      </table>
	</td>
  </tr>
<?
}
?>

<?
if($r[dosearchall])
{
?>
  <tr> 
    <td id="prsearchall" class="menu1" onclick="chengstate('searchall')">
		<a >全站全文搜索</a>
	</td>
  </tr>
  <tr id="itemsearchall" style="display:none"> 
    <td class="list">
		<table border='0' cellspacing='0' cellpadding='0'>
		<tr> 
          <td class="file">
			<a href="../../searchall/SetSearchAll.php<?=$ecms_hashur['whehref']?>" target="main" >全站搜索设置</a>
          </td>
        </tr>
		<tr> 
          <td class="file">
			<a href="../../searchall/ListSearchLoadTb.php<?=$ecms_hashur['whehref']?>" target="main" >管理搜索数据源</a>
          </td>
        </tr>
		<tr> 
          <td class="file1">
			<a href="../../searchall/ClearSearchAll.php<?=$ecms_hashur['whehref']?>" target="main" >清理搜索数据</a>
          </td>
        </tr>
      </table>
	</td>
  </tr>
<?
}
?>

<?
if($r[dowap])
{
?>
<?
}
?>

<?
if($r[domovenews]||$r[doinfodoc]||$r[dodelinfodata]||$r[dorepnewstext]||$r[dototaldata]||$r[dosearchkey]||$r[dovotemod])
{
?>
  <tr> 
    <td id="prcother" class="menu3" onclick="chengstate('cother')">
		<a >其他相关</a>
	</td>
  </tr>
  <tr id="itemcother" style="display:none"> 
    <td class="list1">
		<table border='0' cellspacing='0' cellpadding='0'>
		<?
		if($r[dototaldata])
		{
		?>
		<?
		}
		if($r[dosearchkey])
		{
		?>
		<?
		}
		if($r[dorepnewstext])
		{
		?>
		<tr> 
          <td class="file">
			<a href="../../db/RepNewstext.php<?=$ecms_hashur['whehref']?>" target="main" >批量替换字段值</a>
          </td>
        </tr>
		<?
		}
		if($r[domovenews])
		{
		?>
		<tr> 
          <td class="file">
			<a href="../../MoveClassNews.php<?=$ecms_hashur['whehref']?>" target="main" >批量转移信息</a>
          </td>
        </tr>
		<?
		}
		if($r[doinfodoc])
		{
		?>
		<?
		}
		if($r[dodelinfodata])
		{
		?>
		<?
		}
		if($r[dovotemod])
		{
		?>
		<?
		}
		?>
      </table>
	</td>
  </tr>
<?
}
?>
</table>
</body>
</html>