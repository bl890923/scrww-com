<?php
define('EmpireCMSAdmin','1');
require("../class/connect.php");
require("../class/db_sql.php");
require("../class/functions.php");
require("../member/class/user.php");
$link=db_connect();
$empire=new mysqlquery();
//验证用户
$lur=is_login();
$logininid=(int)$lur['userid'];
$loginin=$lur['username'];
$loginrnd=$lur['rnd'];
$loginlevel=(int)$lur['groupid'];
$loginadminstyleid=$lur['adminstyleid'];
//ehash
$ecms_hashur=hReturnEcmsHashStrAll();
//我的状态
$user_r=$empire->fetch1("select pretime,preip,loginnum,preipport from {$dbtbpre}enewsuser where userid='$logininid'");
$gr=$empire->fetch1("select groupname from {$dbtbpre}enewsgroup where groupid='$loginlevel'");
//管理员统计
$adminnum=$empire->gettotal("select count(*) as total from {$dbtbpre}enewsuser");
$date=date("Y-m-d");
$noplnum=$empire->gettotal("select count(*) as total from {$dbtbpre}enewspl_".$public_r['pldeftb']." where checked=1");
//未审核会员
$nomembernum=$empire->gettotal("select count(*) as total from ".eReturnMemberTable()." where ".egetmf('checked')."=0");
//过期广告
$outtimeadnum=$empire->gettotal("select count(*) as total from {$dbtbpre}enewsad where endtime<'$date' and endtime<>'0000-00-00'");
//签发信息
$qfinfonum=$empire->gettotal("select count(*) as total from {$dbtbpre}enewswfinfo where checktno=0 and (groupid like '%,".$lur['groupid'].",%' or userclass like '%,".$lur['classid'].",%' or username like '%,".$lur['username'].",%')");
//系统信息
	if(function_exists('ini_get')){
        $onoff = ini_get('register_globals');
    } else {
        $onoff = get_cfg_var('register_globals');
    }
    if($onoff){
        $onoff="打开";
    }else{
        $onoff="关闭";
    }
    if(function_exists('ini_get')){
        $upload = ini_get('file_uploads');
    } else {
        $upload = get_cfg_var('file_uploads');
    }
    if ($upload){
        $upload="可以";
    }else{
        $upload="不可以";
    }
	if(function_exists('ini_get')){
        $uploadsize = ini_get('upload_max_filesize');
    } else {
        $uploadsize = get_cfg_var('upload_max_filesize');
    }
	if(function_exists('ini_get')){
        $uploadpostsize = ini_get('post_max_size');
    } else {
        $uploadpostsize = get_cfg_var('post_max_size');
    }
//开启
$register_ok="开启";
if($public_r[register_ok])
{$register_ok="关闭";}
$addnews_ok="开启";
if($public_r[addnews_ok])
{$addnews_ok="关闭";}
//版本
@include("../class/EmpireCMS_version.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>舜王网站管理系统</title>
<link href="adminstyle/<?=$loginadminstyleid?>/adminstyle.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="livedatescript.js"></script>
</head>

<body onLoad="goforit()">
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0" >
        <tr></tr>
      </table></td>
  </tr>
  <tr></tr>
  <tr></tr>
  <tr>
    
  </tr>

  <tr>
    
  </tr>
  <tr>
    <TD>&nbsp;</TD>
    <TD>&nbsp;</TD>
  </tr>
  <tr>
    <TD><span style=" color:#ff9600"><strong  style="margin-left:20px;">系统提示：</strong>欢迎您使用舜王网站管理系统轻盈版（SHUNKING CMS v7.5 AIR） </span></TD>
    <TD>&nbsp;</TD>
  </tr>
  <tr>
    <TD>&nbsp;</TD>
    <TD>&nbsp;</TD>
  </tr>
  <tr>
    <TD><table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
      <tr class="header">
        <td height="25">&nbsp;网站信息</td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="3" cellspacing="1" class="table-d">
          <tr bgcolor="#FFFFFF">
            <td width="100">登录者:</td>
            <td ><b style="color:#ff9600;">
              <?=$loginin?>
            </b></td>
            </tr>
          <tr bgcolor="#FFFFFF">
            <td>所属用户组:</td>
            <td><?=$gr[groupname]?></td>
            </tr>
          <tr bgcolor="#FFFFFF">
            <td>登录次数              </td>
            <td><?=$user_r[loginnum]?></td>
            </tr>
          <tr bgcolor="#FFFFFF">
            <td>上次登录</td>
            <td><?=$user_r[pretime]?date('Y-m-d H:i:s',$user_r[pretime]):'---'?></td>
            </tr>
          <tr bgcolor="#FFFFFF">
            <td>登录者IP：</td>
            <td><?=$user_r[preip]?$user_r[preip].':'.$user_r[preipport]:'---'?></td>
            </tr>
          <tr bgcolor="#FFFFFF">
            <td>管理员个数:</td>
            <td><?=$adminnum?>
              人</td>
            </tr>
          <tr bgcolor="#FFFFFF">
            <td>登陆者IP:</td>
            <td><? echo egetip();?></td>
            </tr>
          <tr bgcolor="#FFFFFF">
            <td>程序版本:</td>
            <td>CMS V7.5 AIR</td>
            </tr>
          <tr bgcolor="#FFFFFF">
            <td>程序编码:</td>
            <td><?=EmpireCMS_CHARVER?></td>
            </tr>
        </table></td>
      </tr>
    </table></TD>
    <TD><table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
      <tr class="header">
        <td height="25">&nbsp;服务器信息</td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="3" cellspacing="1">
          <tr bgcolor="#FFFFFF">
            <td width="100">服务器软件:</td>
            <td><?=$_SERVER['SERVER_SOFTWARE']?></td>
            </tr>
          <tr bgcolor="#FFFFFF">
            <td>操作系统:</td>
            <td><? echo defined('PHP_OS')?PHP_OS:'未知';?></td>
            </tr>
          <tr bgcolor="#FFFFFF">
            <td>PHP版本:</td>
            <td><? echo @phpversion();?></td>
            </tr>
          <tr bgcolor="#FFFFFF">
            <td>MYSQL版本:</td>
            <td><? echo do_eGetDBVer(0);?></td>
            </tr>
          <tr bgcolor="#FFFFFF">
            <td>全局变量:</td>
            <td><?=$onoff?>
              <font color="#666666">(建议关闭)</font></td>
            </tr>
          <tr bgcolor="#FFFFFF">
            <td>魔术引用:</td>
            <td><?=MAGIC_QUOTES_GPC?'开启':'关闭'?>
              <font color="#666666">(建议开启)</font></td>
            </tr>
          <tr bgcolor="#FFFFFF">
            <td>上传文件:</td>
            <td><?=$upload?>
              <font color="#666666">(最大文件：
                <?=$uploadsize?>
                ，表单：
  <?=$uploadpostsize?>
                )</font></td>
            </tr>
          <tr bgcolor="#FFFFFF">
            <td>当前时间:</td>
            <td><? echo date("Y-m-d H:i:s");?></td>
            </tr>
          <tr bgcolor="#FFFFFF">
            <td>使用域名:</td>
            <td><?=$_SERVER['HTTP_HOST']?></td>
            </tr>
        </table></td>
      </tr>
    </table></TD>
  </tr>
  <tr>
    <TD>&nbsp;</TD>
    <TD>&nbsp;</TD>
  </tr>
  <tr>
    <TD><table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
      <tr class="header">
        <td height="25">&nbsp;官方信息</td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="3" cellspacing="1">
          <tr bgcolor="#FFFFFF">
            <td width="100" height="25">舜王官方主页</td>
            <td><a href="https://www.shunking.cn/" target="_blank">http://www.shunking.cn</a></td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td height="25">鸿扬官方主页</td>
            <td><a href="http://www.xzhywl.cn/" target="_blank">http://www.xzhywl.cn</a></td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td height="25">网站产品官网	</td>
            <td><a href="https://www.site.shunking.cn/" target="_blank">http://www.site.shunking.cn</a></td>
          </tr>
        </table></td>
      </tr>
    </table></TD>
    <TD><table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" class="tableborder">
      <tr class="header">
        <td height="25">&nbsp; 开发团队</td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="3" cellspacing="1">
          <tr bgcolor="#FFFFFF">
            <td width="100" height="25">版权所有</td>
            <td>成都舜王科技有限公司</td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td height="25">开发与支持团队</td>
            <td>成都舜王科技有限公司互联网事业部、徐州鸿扬网络信息技术有限公司技术部</td>
          </tr>
          <tr bgcolor="#FFFFFF">
            <td height="25">特别感谢</td>
            <td>每一位使用我们的客户</td>
          </tr>
        </table></td>
      </tr>
    </table></TD>
  </tr>
  <tr>
    
  </tr>
</table>
</body>
</html>
<?php
db_close();
$empire=null;
?>