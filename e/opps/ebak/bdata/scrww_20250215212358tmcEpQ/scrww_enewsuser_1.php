<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `scrww_enewsuser`;");
E_C("CREATE TABLE `scrww_enewsuser` (
  `userid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `rnd` varchar(20) NOT NULL DEFAULT '',
  `adminclass` mediumtext NOT NULL,
  `groupid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `styleid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `filelevel` tinyint(1) NOT NULL DEFAULT '0',
  `salt` varchar(8) NOT NULL DEFAULT '',
  `loginnum` int(10) unsigned NOT NULL DEFAULT '0',
  `lasttime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastip` varchar(20) NOT NULL DEFAULT '',
  `truename` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(120) NOT NULL DEFAULT '',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pretime` int(10) unsigned NOT NULL DEFAULT '0',
  `preip` varchar(20) NOT NULL DEFAULT '',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `addip` varchar(20) NOT NULL DEFAULT '',
  `userprikey` varchar(50) NOT NULL DEFAULT '',
  `salt2` varchar(20) NOT NULL DEFAULT '',
  `lastipport` varchar(6) NOT NULL DEFAULT '',
  `preipport` varchar(6) NOT NULL DEFAULT '',
  `addipport` varchar(6) NOT NULL DEFAULT '',
  `uprnd` varchar(32) NOT NULL DEFAULT '',
  `wname` varchar(60) NOT NULL DEFAULT '',
  `tel` varchar(20) NOT NULL DEFAULT '',
  `wxno` varchar(80) NOT NULL DEFAULT '',
  `qq` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `scrww_enewsuser` values('1',0x61646d696e,0x6130396331626336663031326132326131336639636430393934356130376361,0x454e46454778737041414468664e5a6235464c41,'','1','0','1','0',0x4d6d4c4d5a73534e,'78','1739625829',0x33362e3131332e3132302e313235,'','','0','1739625816',0x33362e3131332e3132302e313235,'1683386369',0x3132372e302e302e31,0x34636e50384e484d674e6c6b7236374e6564306d7945567546647655764457683636433747567363635676654253487a,0x51414b67634f4e684673484d3046345a30737431,0x3431353037,0x3431353036,0x3534323233,'','','','','');");

@include("../../inc/footer.php");
?>