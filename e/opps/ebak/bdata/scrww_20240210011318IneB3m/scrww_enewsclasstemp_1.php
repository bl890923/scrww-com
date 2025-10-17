<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `scrww_enewsclasstemp`;");
E_C("CREATE TABLE `scrww_enewsclasstemp` (
  `tempid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tempname` varchar(30) NOT NULL DEFAULT '',
  `temptext` mediumtext NOT NULL,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`tempid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `scrww_enewsclasstemp` values('1',0xe9809ae794a8e4b880e7baa7e6a08fe79baee6a8a1e69dbf,0xe38090e9809ae794a8e4b880e7baa7e6a08fe79baee6a8a1e69dbfe38091,'0');");
E_D("replace into `scrww_enewsclasstemp` values('2',0xe58886e7b1bbe4bfa1e681afe4b880e7baa7e6a08fe79baee6a8a1e69dbf,0xe38090e58886e7b1bbe4bfa1e681afe4b880e7baa7e6a08fe79baee6a8a1e69dbfe38091,'0');");

@include("../../inc/footer.php");
?>