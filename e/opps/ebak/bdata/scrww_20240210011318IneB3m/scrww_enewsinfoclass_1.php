<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `scrww_enewsinfoclass`;");
E_C("CREATE TABLE `scrww_enewsinfoclass` (
  `classid` int(11) NOT NULL AUTO_INCREMENT,
  `bclassid` int(11) NOT NULL DEFAULT '0',
  `classname` varchar(100) NOT NULL DEFAULT '',
  `infourl` mediumtext NOT NULL,
  `newsclassid` smallint(6) NOT NULL DEFAULT '0',
  `startday` date NOT NULL DEFAULT '0000-00-00',
  `endday` date NOT NULL DEFAULT '0000-00-00',
  `bz` text NOT NULL,
  `num` smallint(6) NOT NULL DEFAULT '0',
  `copyimg` tinyint(1) NOT NULL DEFAULT '0',
  `renum` smallint(6) NOT NULL DEFAULT '0',
  `keyboard` text NOT NULL,
  `oldword` text NOT NULL,
  `newword` text NOT NULL,
  `titlelen` smallint(6) NOT NULL DEFAULT '0',
  `retitlewriter` tinyint(1) NOT NULL DEFAULT '0',
  `smalltextlen` smallint(6) NOT NULL DEFAULT '0',
  `zz_smallurl` text NOT NULL,
  `zz_newsurl` text NOT NULL,
  `httpurl` varchar(255) NOT NULL DEFAULT '',
  `repad` text NOT NULL,
  `imgurl` varchar(255) NOT NULL DEFAULT '',
  `relistnum` smallint(6) NOT NULL DEFAULT '0',
  `zz_titlepicl` text NOT NULL,
  `z_titlepicl` varchar(255) NOT NULL DEFAULT '',
  `qz_titlepicl` varchar(255) NOT NULL DEFAULT '',
  `save_titlepicl` varchar(10) NOT NULL DEFAULT '',
  `keynum` tinyint(4) NOT NULL DEFAULT '0',
  `insertnum` smallint(6) NOT NULL DEFAULT '0',
  `copyflash` tinyint(1) NOT NULL DEFAULT '0',
  `tid` smallint(6) NOT NULL DEFAULT '0',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `pagetype` tinyint(1) NOT NULL DEFAULT '0',
  `smallpagezz` text NOT NULL,
  `pagezz` text NOT NULL,
  `smallpageallzz` text NOT NULL,
  `pageallzz` text NOT NULL,
  `mark` tinyint(1) NOT NULL DEFAULT '0',
  `enpagecode` tinyint(1) NOT NULL DEFAULT '0',
  `recjtheurl` tinyint(1) NOT NULL DEFAULT '0',
  `hiddenload` tinyint(1) NOT NULL DEFAULT '0',
  `justloadin` tinyint(1) NOT NULL DEFAULT '0',
  `justloadcheck` tinyint(1) NOT NULL DEFAULT '0',
  `delloadinfo` tinyint(1) NOT NULL DEFAULT '0',
  `pagerepad` mediumtext NOT NULL,
  `newsztid` text NOT NULL,
  `getfirstpic` tinyint(4) NOT NULL DEFAULT '0',
  `oldpagerep` text NOT NULL,
  `newpagerep` text NOT NULL,
  `keeptime` smallint(6) NOT NULL DEFAULT '0',
  `lasttime` int(11) NOT NULL DEFAULT '0',
  `newstextisnull` tinyint(1) NOT NULL DEFAULT '0',
  `getfirstspic` tinyint(1) NOT NULL DEFAULT '0',
  `getfirstspicw` smallint(6) NOT NULL DEFAULT '0',
  `getfirstspich` smallint(6) NOT NULL DEFAULT '0',
  `doaddtextpage` tinyint(1) NOT NULL DEFAULT '0',
  `infourlispage` tinyint(1) NOT NULL DEFAULT '0',
  `repf` varchar(255) NOT NULL DEFAULT '',
  `repadf` varchar(255) NOT NULL DEFAULT '',
  `loadkeeptime` smallint(6) NOT NULL DEFAULT '0',
  `isnullf` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`classid`),
  KEY `newsclassid` (`newsclassid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `scrww_enewsinfoclass` values('1','0',0xe59b9be5b79de696b0e997bb,0x687474703a2f2f73636e6577732e6e65777373632e6f72672f32303231736378772f696e6465782e7368746d6c0d0a687474703a2f2f73636e6577732e6e65777373632e6f72672f32303231736378772f73797374656d2f6d6f72652f303030333031393030303030302f303030333031393030303030305f3638382e7368746d6c0d0a687474703a2f2f73636e6577732e6e65777373632e6f72672f32303231736378772f73797374656d2f6d6f72652f303030333031393030303030302f303030333031393030303030305f3638372e7368746d6c,'10','2023-05-19','2099-12-31','','0','1','2','','','','0','0','200',0x3c756c20636c6173733d5c22756c2d6c697374795c223e5b212d2d736d616c6c75726c2d2d5d3c617369646520636c6173733d5c2261736964655c223e,0x3c6c693e3c6120687265663d5c225b212d2d6e65777375726c2d2d5d5c22207461726765743d5c225f626c616e6b5c22203e,'','','','1','','','','','0','10','0','1',0x6e657773,'1','','','','','0','7','0','0','0','0','0','','','1','','','0','1684510293','0','0','105','118','0','0',0x2c7469746c652c6e657773746578742c,0x2c6e657773746578742c,'0',0x2c6e657773746578742c);");
E_D("replace into `scrww_enewsinfoclass` values('2','0',0xe59bbde58685e696b0e997bb,0x687474703a2f2f776f726c642e6e65777373632e6f72672f323032317a6778772f,'11','2023-05-19','2099-12-31','','0','0','2','','','','0','0','200',0x3c756c20636c6173733d5c22756c2d6c697374795c223e5b212d2d736d616c6c75726c2d2d5d3c617369646520636c6173733d5c2261736964655c223e,0x3c6c693e3c6120687265663d5c225b212d2d6e65777375726c2d2d5d5c22207461726765743d5c225f626c616e6b5c22203e,'','','','1','','','','','0','10','0','1',0x6e657773,'1','','','','','0','7','0','0','0','0','0','','','0','','','0','1684510343','0','0','105','118','0','0',0x2c7469746c652c6e657773746578742c,0x2c6e657773746578742c,'0',0x2c6e657773746578742c);");

@include("../../inc/footer.php");
?>