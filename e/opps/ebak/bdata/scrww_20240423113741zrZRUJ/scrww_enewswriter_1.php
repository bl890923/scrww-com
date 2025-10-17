<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `scrww_enewswriter`;");
E_C("CREATE TABLE `scrww_enewswriter` (
  `wid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `writer` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(120) NOT NULL DEFAULT '',
  PRIMARY KEY (`wid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `scrww_enewswriter` values('1',0xe68890e983bde79b90e59f8ee59586e4bc9a,0x687474703a2f2f7777772e6364796373682e636f6d2e636e2f);");
E_D("replace into `scrww_enewswriter` values('2',0xe68890e983bde697a0e994a1e59586e4bc9a,0x687474703a2f2f7777772e6364777873682e636f6d2f);");
E_D("replace into `scrww_enewswriter` values('3',0xe68890e983bde8889ce78e8be7a791e68a80e69c89e99990e585ace58fb8,0x68747470733a2f2f7777772e7368756e6b696e672e636e2f);");
E_D("replace into `scrww_enewswriter` values('4',0xe590b4e99990,0x687474703a2f2f7777772e73637277772e636f6d2f);");

@include("../../inc/footer.php");
?>