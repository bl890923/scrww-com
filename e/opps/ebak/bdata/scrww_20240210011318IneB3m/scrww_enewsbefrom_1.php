<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `scrww_enewsbefrom`;");
E_C("CREATE TABLE `scrww_enewsbefrom` (
  `befromid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `sitename` char(60) NOT NULL DEFAULT '',
  `fwrx` char(60) NOT NULL DEFAULT '',
  `lxdh` char(60) NOT NULL DEFAULT '',
  `kfqq` char(60) NOT NULL DEFAULT '',
  `kfyx` char(60) NOT NULL DEFAULT '',
  `gsdz` char(60) NOT NULL DEFAULT '',
  `icp` char(60) NOT NULL DEFAULT '',
  `tjdm` char(60) NOT NULL DEFAULT '',
  `siteurl` char(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`befromid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

@include("../../inc/footer.php");
?>