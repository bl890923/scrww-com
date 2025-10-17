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
CheckLevel($logininid,$loginin,$classid,"pubvar");
$enews=ehtmlspecialchars($_GET['enews']);
$cid=(int)$_GET['cid'];
$r[myorder]=0;
$url="<a href=ListPubVar.php".$ecms_hashur['whehref'].">管理扩展变量</a>&nbsp;>&nbsp;增加扩展变量";
//修改
if($enews=="EditPubVar")
{
	$varid=(int)$_GET['varid'];
	$r=$empire->fetch1("select myvar,varname,varvalue,varsay,classid,tocache,myorder from {$dbtbpre}enewspubvar where varid='$varid'");
	$r[varvalue]=ehtmlspecialchars($r[varvalue]);
	$url="<a href=ListPubVar.php".$ecms_hashur['whehref'].">管理扩展变量</a>&nbsp;>&nbsp;修改扩展变量：".$r[myvar];
}
//分类
$cstr="";
$csql=$empire->query("select classid,classname from {$dbtbpre}enewspubvarclass order by classid");
while($cr=$empire->fetch($csql))
{
	$select="";
	if($cr[classid]==$r[classid])
	{
		$select=" selected";
	}
	$cstr.="<option value='".$cr[classid]."'".$select.">".$cr[classname]."</option>";
}
db_close();
$empire=null;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>增加扩展变量</title>
<link href="../adminstyle/<?=$loginadminstyleid?>/adminstyle.css" rel="stylesheet" type="text/css">
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr>
    <td height="25">位置：<?=$url?></td>
  </tr>
</table>

<form name="form1" method="post" action="ListPubVar.php" autocomplete="off">
  <table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
  <?=$ecms_hashur['form']?>
    <tr class="header"> 
      <td height="25" colspan="2">增加扩展变量 
        <input name="enews" type="hidden" id="enews" value="<?=$enews?>"> <input name="varid" type="hidden" value="<?=$varid?>"> 
        <input name="cid" type="hidden" value="<?=$cid?>">
        <input name="oldmyvar" type="hidden" id="oldmyvar" value="<?=$r[myvar]?>">
        <input name="oldtocache" type="hidden" id="oldtocache" value="<?=$r[tocache]?>"></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="25">变量名称(*)</td>
      <td height="25"><input name="varname" type="text" value="<?=$r[varname]?>">
        <font color="#666666">(如：联系电话)</font></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td width="19%" height="25">变量标签(*)</td>
      <td width="81%" height="25"> <input name="myvar" type="text" value="<?=$r[myvar]?>">
        <font color="#666666">(由英文与数字组成，且不能以数字开头。如：&quot;title&quot;)</font></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="25">变量内容</td>
      <td height="25"><input name="varvalue" type="text" id="varsay" value="<?=$r[varvalue]?>" size="60"></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">是否写入缓存</td>
      <td height="25"><input name="tocache" type="radio" value="1" checked checked<?=$r[tocache]==1?' checked':''?>>
        写入缓存 
        <input type="radio" name="tocache" value="0"<?=$r[tocache]==0?' checked':''?>>
        不写入缓存<font color="#666666">（大内容不建议写入缓存，缓存调用变量：$public_r['add_变量名']）</font></td>
    </tr>
    <tr bgcolor="#FFFFFF"> 
      <td height="25">&nbsp;</td>
      <td height="25"><input type="submit" name="Submit" value="提交"> &nbsp; <input type="button" name="Submit2" value="返回" onclick="self.location.href='../pub/ListPubVar.php<?=$ecms_hashur['whehref']?>'" title="返回"></td>
    </tr>
  </table>
</form>
</body>
</html>
