<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `scrww_enewslink`;");
E_C("CREATE TABLE `scrww_enewslink` (
  `lid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `lname` varchar(100) NOT NULL DEFAULT '',
  `lpic` varchar(255) NOT NULL DEFAULT '',
  `lurl` varchar(255) NOT NULL DEFAULT '',
  `ltime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `width` varchar(10) NOT NULL DEFAULT '',
  `height` varchar(10) NOT NULL DEFAULT '',
  `target` varchar(10) NOT NULL DEFAULT '',
  `myorder` tinyint(4) NOT NULL DEFAULT '0',
  `email` varchar(60) NOT NULL DEFAULT '',
  `lsay` text NOT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `ltype` smallint(6) NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`lid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `scrww_enewslink` values('1',0xe8889ce78e8be7a791e68a80,'',0x68747470733a2f2f7777772e7368756e6b696e672e636e,'2023-05-07 02:07:15','0','','',0x5f626c616e6b,'0','','','1','0','0');");
E_D("replace into `scrww_enewslink` values('2',0xe8889ce78e8be5bbbae7ab99,'',0x68747470733a2f2f7777772e736974652e7368756e6b696e672e636e,'2023-05-07 02:07:26','0','','',0x5f626c616e6b,'0','','','1','0','0');");
E_D("replace into `scrww_enewslink` values('3',0xe8889ce78e8be5bda9e58db0,'',0x687474703a2f2f7777772e6364737763792e636e,'2023-05-07 02:07:34','0','','',0x5f626c616e6b,'0','','','1','0','0');");
E_D("replace into `scrww_enewslink` values('4',0xe8889ce78e8be9809ae4bfa1,'',0x687474703a2f2f7777772e743430302e636f6d2e636e,'2023-05-07 02:07:44','0','','',0x5f626c616e6b,'0','','','1','0','0');");
E_D("replace into `scrww_enewslink` values('5',0xe4b8b0e58ebfe5b9bfe5918ae585ace58fb8,'',0x687474703a2f2f7777772e787a687961642e636e,'2024-10-07 17:07:51','0','','',0x5f626c616e6b,'0','','','1','0','0');");
E_D("replace into `scrww_enewslink` values('6',0xe68890e983bde794bbe5868ce8aebee8aea1,'',0x687474703a2f2f7777772e6364617477682e636e,'2024-10-07 17:08:15','0','','',0x5f626c616e6b,'0','','','1','0','0');");

@include("../../inc/footer.php");
?>