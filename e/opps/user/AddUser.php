<?php
define('EmpireCMSAdmin','1');
require("../../class/connect.php");
require("../../class/db_sql.php");
require("../../class/functions.php");
$link=db_connect();
$empire=new mysqlquery();
$editor=1;
//验证用户
$lur=is_login();
$logininid=$lur['userid'];
$loginin=$lur['username'];
$loginrnd=$lur['rnd'];
$loginlevel=$lur['groupid'];
$loginadminstyleid=$lur['adminstyleid'];
//ehash
$ecms_hashur=hReturnEcmsHashStrAll();
//验证权限
CheckLevel($logininid,$loginin,$classid,"user");
$enews=ehtmlspecialchars($_GET['enews']);
$url="<a href=ListUser.php".$ecms_hashur['whehref'].">管理用户</a>&nbsp;>增加用户";
if($enews=="EditUser")
{
	$userid=(int)$_GET['userid'];
	$r=$empire->fetch1("select username,adminclass,groupid,checked,styleid,filelevel,truename,email,classid,wname,tel,wxno,qq from {$dbtbpre}enewsuser where userid='$userid'");
	$addur=$empire->fetch1("select equestion,openip from {$dbtbpre}enewsuseradd where userid='$userid'");
	$url="<a href=ListUser.php".$ecms_hashur['whehref'].">管理用户</a>&nbsp;>修改用户：<b>".$r[username]."</b>";
	if($r[checked])
	{$checked=" checked";}
}
//-----------用户组
$sql=$empire->query("select groupid,groupname from {$dbtbpre}enewsgroup order by groupid desc");
while($gr=$empire->fetch($sql))
{
	if($r[groupid]==$gr[groupid])
	{$select=" selected";}
	else
	{$select="";}
	$group.="<option value=".$gr[groupid].$select.">".$gr[groupname]."</option>";
}
//-----------后台样式
$stylesql=$empire->query("select styleid,stylename,path from {$dbtbpre}enewsadminstyle order by styleid");
$style="";
while($styler=$empire->fetch($stylesql))
{
	if($r[styleid]==$styler[styleid])
	{$sselect=" selected";}
	else
	{$sselect="";}
	$style.="<option value=".$styler[styleid].$sselect.">".$styler[stylename]."</option>";
}
//-----------部门
$userclasssql=$empire->query("select classid,classname from {$dbtbpre}enewsuserclass order by classid");
$userclass='';
while($ucr=$empire->fetch($userclasssql))
{
	if($r[classid]==$ucr[classid])
	{$select=" selected";}
	else
	{$select="";}
	$userclass.="<option value='$ucr[classid]'".$select.">".$ucr[classname]."</option>";
}
//--------------------操作的栏目
$fcfile="../../data/fc/ListEnews.php";
$fcjsfile="../../data/fc/cmsclass.js";
if(file_exists($fcjsfile)&&file_exists($fcfile))
{
	$class=GetFcfiletext($fcjsfile);
	$acr=explode("|",$r[adminclass]);
	$count=count($acr);
	for($i=1;$i<$count-1;$i++)
	{
		$class=str_replace("<option value='$acr[$i]'","<option value='$acr[$i]' selected",$class);
	}
}
else
{
	$class=ShowClass_AddClass($r[adminclass],"n",0,"|-",0,3);
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>增加用户　</title>
<link href="../adminstyle/<?=$loginadminstyleid?>/adminstyle.css" rel="stylesheet" type="text/css">
<script>
function selectalls(doselect,formvar)
{  
	 var bool=doselect==1?true:false;
	 var selectform=document.getElementById(formvar);
	 for(var i=0;i<selectform.length;i++)
	 { 
		  selectform.all[i].selected=bool;
	 } 
}
</script>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr>
    <td>位置：<?=$url?></td>
  </tr>
</table>
<form name="form1" method="post" action="ListUser.php" autocomplete="off">
  <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <?=$ecms_hashur['form']?>
    <tr class="header"> 
      <td height="25" colspan="2">增加用户 
        <input name="userid" type="hidden" id="userid" value="<?=$userid?>"> <input name="oldusername" type="hidden" id="oldusername" value="<?=$r[username]?>"> 
        <input name="enews" type="hidden" id="enews" value="<?=$enews?>"> <input name="oldadminclass" type="hidden" id="oldadminclass" value="<?=$r[adminclass]?>"></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td width="22%" height="25">用户名：</td>
      <td width="78%" height="25"><input name="username" type="text" id="username" value="<?=$r[username]?>" size="32">
        *</td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">密码：</td>
      <td height="25"><input name="password" type="password" id="password" size="32">
        * <font color="#666666">(不想修改请留空)</font></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">重复密码：</td>
      <td height="25"><input name="repassword" type="password" id="repassword" size="32">
        * <font color="#666666">(不想修改请留空)</font></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="25">&nbsp;</td>
      <td height="25"><font color="#666666">(说明：密码设置6位以上，区分大小写，且密码不能包含：$ 
      &amp; * # &lt; &gt; ' &quot; / \ % ; 空格)</font></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">姓名：</td>
      <td height="25"><input name="truename" type="text" id="truename" value="<?=$r[truename]?>" size="32"></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">用户组(*)：</td>
      <td height="25"><select name="groupid" id="groupid">
          <?=$group?>
        </select> 
        *</td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">&nbsp;</td>
      <td height="25"><input type="submit" name="Submit" value="提交"> <input type="reset" name="Submit2" value="重置"></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25" colspan="2"><font color="#666666">说明：密码设置6位以上，区分大小写，且密码不能包含：$ 
        &amp; * # &lt; &gt; ' &quot; / \ % ; 空格</font></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
db_close();
$empire=null;
?>
