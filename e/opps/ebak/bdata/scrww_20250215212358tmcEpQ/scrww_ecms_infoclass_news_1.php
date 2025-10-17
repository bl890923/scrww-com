<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `scrww_ecms_infoclass_news`;");
E_C("CREATE TABLE `scrww_ecms_infoclass_news` (
  `classid` int(10) unsigned NOT NULL DEFAULT '0',
  `zz_title` text NOT NULL,
  `z_title` varchar(255) NOT NULL DEFAULT '',
  `qz_title` varchar(255) NOT NULL DEFAULT '',
  `save_title` varchar(10) NOT NULL DEFAULT '',
  `zz_titlepic` text NOT NULL,
  `z_titlepic` varchar(255) NOT NULL DEFAULT '',
  `qz_titlepic` varchar(255) NOT NULL DEFAULT '',
  `save_titlepic` varchar(10) NOT NULL DEFAULT '',
  `zz_newstime` text NOT NULL,
  `z_newstime` varchar(255) NOT NULL DEFAULT '',
  `qz_newstime` varchar(255) NOT NULL DEFAULT '',
  `save_newstime` varchar(10) NOT NULL DEFAULT '',
  `zz_ftitle` text NOT NULL,
  `z_ftitle` varchar(255) NOT NULL DEFAULT '',
  `qz_ftitle` varchar(255) NOT NULL DEFAULT '',
  `save_ftitle` varchar(10) NOT NULL DEFAULT '',
  `zz_smalltext` text NOT NULL,
  `z_smalltext` varchar(255) NOT NULL DEFAULT '',
  `qz_smalltext` varchar(255) NOT NULL DEFAULT '',
  `save_smalltext` varchar(10) NOT NULL DEFAULT '',
  `zz_writer` text NOT NULL,
  `z_writer` varchar(255) NOT NULL DEFAULT '',
  `qz_writer` varchar(255) NOT NULL DEFAULT '',
  `save_writer` varchar(10) NOT NULL DEFAULT '',
  `zz_befrom` text NOT NULL,
  `z_befrom` varchar(255) NOT NULL DEFAULT '',
  `qz_befrom` varchar(255) NOT NULL DEFAULT '',
  `save_befrom` varchar(10) NOT NULL DEFAULT '',
  `zz_newstext` text NOT NULL,
  `z_newstext` varchar(255) NOT NULL DEFAULT '',
  `qz_newstext` varchar(255) NOT NULL DEFAULT '',
  `save_newstext` varchar(10) NOT NULL DEFAULT '',
  `zz_diggtop` text NOT NULL,
  `z_diggtop` varchar(255) NOT NULL DEFAULT '',
  `qz_diggtop` varchar(255) NOT NULL DEFAULT '',
  `save_diggtop` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `scrww_ecms_infoclass_news` values('1',0x3c68313e5b212d2d7469746c652d2d5d3c2f68313e,'','','','','','','','','','','','','','','','','','','','','','','','','','','',0x3c212d2d636f6e74656e742d2d3e5b212d2d6e657773746578742d2d5d3c2f6469763e,'','','','','','','');");
E_D("replace into `scrww_ecms_infoclass_news` values('2',0x3c68313e5b212d2d7469746c652d2d5d3c2f68313e,'','','','','','','','','','','','','','','','','','','','','','','','','','','',0x3c64697620636c6173733d5c22636f6e74656e742d6d61696e5c223e5b212d2d6e657773746578742d2d5defbc883c7370616e3ee69da5e6ba90efbc9a,'','','','','','','');");

@include("../../inc/footer.php");
?>