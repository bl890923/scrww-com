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
CheckLevel($logininid,$loginin,$classid,"changedata");
//栏目
$fcfile="../../data/fc/ListEnews.php";
$class="<script src=../../data/fc/cmsclass.js></script>";
if(!file_exists($fcfile))
{$class=ShowClass_AddClass("",0,0,"|-",0,0);}
//刷新表
$retable="";
$selecttable="";
$cleartable='';
$i=0;
$tsql=$empire->query("select tid,tbname,tname from {$dbtbpre}enewstable where intb=0 order by tid");
while($tr=$empire->fetch($tsql))
{
	$i++;
	if($i%4==0)
	{
		$br="<br>";
	}
	else
	{
		$br="";
	}
	$retable.="<input type=checkbox name=tbname[] value='$tr[tbname]' checked>$tr[tname]&nbsp;&nbsp;".$br;
	$selecttable.="<option value='".$tr[tbname]."'>".$tr[tname]."</option>";
	$cleartable.="<option value='".$tr[tid]."'>".$tr[tname]."</option>";
}
//专题
$ztclass="";
$ztsql=$empire->query("select ztid,ztname from {$dbtbpre}enewszt order by ztid desc");
while($ztr=$empire->fetch($ztsql))
{
	$ztclass.="<option value='".$ztr['ztid']."'>".$ztr['ztname']."</option>";
}
//多访问端
$moreportpid=(int)$_GET['moreportpid'];
$mphref='';
$mpform='';
$mpwhhref='';
$mpwhhrefck='';
$mpname='主访问端';
if($moreportpid)
{
	$mphref=Moreport_ReturnUrlCsPid($moreportpid,0,0,'');
	$mpform=Moreport_ReturnUrlCsPid($moreportpid,1,0,'');
	$mpwhhref=Moreport_ReturnUrlCsPid($moreportpid,0,1,'');
	$mpwhhrefck=Moreport_ReturnUrlCsPid($moreportpid,0,1,$ecms_hashur['whehref']);
	//访问端
	$mpr=$empire->fetch1("select * from {$dbtbpre}enewsmoreport where pid='$moreportpid'");
	$mpname=$mpr['pname'];
}
//选择日期
$todaydate=date("Y-m-d");
$todaytime=time();
$changeday="<select name=selectday onchange=\"document.reform.startday.value=this.value;document.reform.endday.value='".$todaydate."'\">
<option value='".$todaydate."'>--选择--</option>
<option value='".$todaydate."'>今天</option>
<option value='".ToChangeTime($todaytime,7)."'>一周</option>
<option value='".ToChangeTime($todaytime,30)."'>一月</option>
<option value='".ToChangeTime($todaytime,90)."'>三月</option>
<option value='".ToChangeTime($todaytime,180)."'>半年</option>
<option value='".ToChangeTime($todaytime,365)."'>一年</option>
</select>";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>更新数据中心</title>
<link href="../adminstyle/<?=$loginadminstyleid?>/adminstyle.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../ecmseditor/js/jstime/WdatePicker.js"></script>
<script>
function CheckAll(form)
  {
  for (var i=0;i<form.elements.length;i++)
    {
    var e = form.elements[i];
    if (e.name != 'chkall')
       e.checked = form.chkall.checked;
    }
  }
</script>
</head>

<body>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
  <tr> 
    <td width="14%" height="25">位置：<a href="ChangeData.php<?=$ecms_hashur['whehref']?><?=$mpwhhrefck?>">数据更新中心</a></td>
    <td width="45%">&nbsp;</td>
    <td width="41%">&nbsp;</td>
  </tr>
  <?php
  if($ecms_config['sets']['selfmoreportid']<=1&&$public_r['ckhavemoreport'])
  {
  ?>
  <tr>
    <td height="25" colspan="3"><table width="100%" border="0" cellspacing="1" cellpadding="3" class="tableborder">
	<form name="rechmpform" id="rechmpform" method="GET" action="ChangeData.php">
	<?=$ecms_hashur['eform']?>
      <tr>
        <td width="50%" bgcolor="#FFFFFF">已选访问端：<b><?=$mpname?></b></td>
        <td width="50%" bgcolor="#FFFFFF">
		  <div align="right">选择要刷新页面的访问端:
		    <?=Moreport_eReturnMoreportSelect($moreportpid,'moreportpid')?>
                <input type="submit" name="Submit" value="确定">
		      </div></td>
      </tr>
	  </form>
    </table></td>
  </tr>
  <?php
  }
  ?>
</table>
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="6">
  <tr id=ReAllHtml> 
    <td width="69%" valign="top"><table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
        <tr class="header"> 
          <td height="25" colspan="2"> <div align="center">页面刷新管理</div></td>
        </tr>
        <tr> 
          <td height="25"><div align="center"><strong>整站主要页面刷新</strong></div></td>
          <td height="25"><div align="center"><strong>其他页面刷新</strong></div></td>
        </tr>
        <tr> 
          <td width="50%" height="25" bgcolor="#FFFFFF"> <table width="100%" border="0" align="center" cellpadding="3" cellspacing="1">
              <tr onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#e0e5ec'"> 
                <td height="48"> <div align="center"> 
                    <input type="button" name="Submit2" value="刷新首页" onclick="self.location.href='../ecmschtml.php?enews=ReIndex<?=$ecms_hashur['href']?><?=$mphref?>'" title="生成首页">
                  </div></td>
              </tr>
              <tr onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#e0e5ec'"> 
                <td height="48"> <div align="center"> 
                    <input type="button" name="Submit22" value="刷新所有栏目页" onclick="window.open('../ecmschtml.php?enews=ReListHtml_all&from=ReHtml/ChangeData.php<?=urlencode($ecms_hashur['whehref'].$mpwhhrefck)?><?=$ecms_hashur['href']?><?=$mphref?>','','');" title="生成所有栏目页面">
                  </div></td>
              </tr>
              <tr onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#e0e5ec'"> 
                <td height="48"> <div align="center"> 
                    <table width="100%" border="0" cellspacing="1" cellpadding="0">
                      <form action="ecmschtml.php" method="post" name="dorehtml" id="dorehtml">
					  <?=$ecms_hashur['form']?>
					  <?=$mpform?>
                        <tr> 
                          <td><div align="center"> 
                              <input type="button" name="Submit3" value="生成所有内容页" onclick="var toredohtml=0;if(document.dorehtml.havehtml.checked==true){toredohtml=1;}window.open('DoRehtml.php?enews=ReNewsHtml&start=0&havehtml='+toredohtml+'&from=ReHtml/ChangeData.php<?=urlencode($ecms_hashur['whehref'].$mpwhhrefck)?><?=$ecms_hashur['href']?><?=$mphref?>','','');" title="生成所有内容页">
                            </div></td>
                        </tr>
                        <tr> 
                          <td height="25" valign="top"> <div align="center">全部刷新 
                              <input name="havehtml" type="checkbox" id="havehtml" value="1" title="把已经生成的内容页一起更新">
                            </div></td>
                        </tr>
                      </form>
                    </table>
                  </div></td>
              </tr>
              <tr onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#e0e5ec'"> 
                <td height="48">&nbsp;</td>
              </tr>
            </table></td>
          <td width="50%" valign="top" bgcolor="#FFFFFF"> <table width="100%" border="0" cellpadding="3" cellspacing="1">
              <tr onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#e0e5ec'">
                <td height="48"><div align="center">
                  <input type="button" name="Submit5" value="刷新所有自定义页面" onclick="window.open('../ecmschtml.php?enews=ReUserpageAll&from=ReHtml/ChangeData.php<?=urlencode($ecms_hashur['whehref'].$mpwhhrefck)?><?=$ecms_hashur['href']?><?=$mphref?>','','');" title="刷新所有自定义页面">
                </div></td>
              </tr>
              <tr onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#e0e5ec'"> 
                <td height="48"><div align="center">
                  <input type="button" name="Submit9" value="更新数据库缓存" onclick="self.location.href='../enews.php?enews=ChangeEnewsData<?=$ecms_hashur['href']?><?=$mphref?>';" title="更新数据库缓存">
                </div></td>
              </tr>
              <tr onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#e0e5ec'"> 
                <td height="48"><div align="center">
                  <input type="button" name="Submit10" value="恢复栏目目录" onclick="window.open('../ecmschtml.php?enews=ReClassPath<?=$ecms_hashur['href']?><?=$mphref?>','','');" title="恢复栏目目录">
                </div></td>
              </tr>
              <tr onmouseout="this.style.backgroundColor='#ffffff'" onmouseover="this.style.backgroundColor='#e0e5ec'"> 
                <td height="48"><div align="center">
                  <input type="button" name="Submit4" value="更新栏目关系" onclick="window.open('../ecmsclass.php?enews=ChangeSonclass<?=$ecms_hashur['href']?><?=$mphref?>','','');" title="更新栏目关系">
                </div></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><br>
</p>
</body>
</html>
<?
db_close();
$empire=null;
?>
