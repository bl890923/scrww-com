<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `scrww_ecms_news_index`;");
E_C("CREATE TABLE `scrww_ecms_news_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=184 DEFAULT CHARSET=utf8");
E_D("replace into `scrww_ecms_news_index` values('1','19','1','1683392074','1683392086','1684508578','1');");
E_D("replace into `scrww_ecms_news_index` values('2','20','1','1683392090','1683392096','1683396244','1');");
E_D("replace into `scrww_ecms_news_index` values('3','21','1','1683392099','1683392109','1707315966','1');");
E_D("replace into `scrww_ecms_news_index` values('183','10','1','1707381314','1707381581','1707381581','1');");
E_D("replace into `scrww_ecms_news_index` values('182','10','1','1707381176','1707381365','1707381365','1');");
E_D("replace into `scrww_ecms_news_index` values('181','10','1','1707392178','1707314673','1707381602','1');");
E_D("replace into `scrww_ecms_news_index` values('180','10','1','1707314226','1707314351','1707314750','1');");
E_D("replace into `scrww_ecms_news_index` values('179','33','1','1707312837','1707312906','1707314796','1');");
E_D("replace into `scrww_ecms_news_index` values('178','34','1','1706888877','1706889272','1706889355','1');");
E_D("replace into `scrww_ecms_news_index` values('20','14','1','1683394748','1683394800','1683394824','1');");
E_D("replace into `scrww_ecms_news_index` values('21','14','1','1683394832','1683394857','1683394857','1');");
E_D("replace into `scrww_ecms_news_index` values('22','14','1','1683394860','1683394886','1683394886','1');");
E_D("replace into `scrww_ecms_news_index` values('23','14','1','1683394901','1683394958','1683461899','1');");
E_D("replace into `scrww_ecms_news_index` values('24','14','1','1683394901','1683394971','1683461913','1');");
E_D("replace into `scrww_ecms_news_index` values('25','14','1','1683394901','1683394979','1683461930','1');");
E_D("replace into `scrww_ecms_news_index` values('174','10','1','1684510676','1684510676','1684510676','1');");
E_D("replace into `scrww_ecms_news_index` values('173','10','1','1684510671','1684510671','1684511041','1');");
E_D("replace into `scrww_ecms_news_index` values('172','10','1','1684510671','1684510671','1684511115','1');");
E_D("replace into `scrww_ecms_news_index` values('171','10','1','1684510664','1684510664','1684511157','1');");
E_D("replace into `scrww_ecms_news_index` values('170','10','1','1684510664','1684510664','1684511202','1');");
E_D("replace into `scrww_ecms_news_index` values('169','10','1','1684510664','1684510664','1684511247','1');");
E_D("replace into `scrww_ecms_news_index` values('167','10','1','1684510663','1684510663','1684510663','1');");
E_D("replace into `scrww_ecms_news_index` values('166','10','1','1684510663','1684510663','1684511509','1');");
E_D("replace into `scrww_ecms_news_index` values('165','10','1','1684510663','1684510663','1684511290','1');");
E_D("replace into `scrww_ecms_news_index` values('164','10','1','1684510663','1684510663','1684511334','1');");
E_D("replace into `scrww_ecms_news_index` values('163','10','1','1684510662','1684510662','1684511387','1');");
E_D("replace into `scrww_ecms_news_index` values('162','10','1','1684510662','1684510662','1684511471','1');");
E_D("replace into `scrww_ecms_news_index` values('161','10','1','1684510662','1684510662','1684511550','1');");
E_D("replace into `scrww_ecms_news_index` values('177','10','1','1706888203','1706888418','1706889955','1');");
E_D("replace into `scrww_ecms_news_index` values('159','10','1','1684510661','1684510661','1684510661','1');");
E_D("replace into `scrww_ecms_news_index` values('176','33','1','1706884421','1706885573','1706889896','1');");
E_D("replace into `scrww_ecms_news_index` values('157','10','1','1684510661','1684510661','1684510661','1');");
E_D("replace into `scrww_ecms_news_index` values('156','10','1','1684510661','1684510661','1684510661','1');");
E_D("replace into `scrww_ecms_news_index` values('155','10','1','1684510660','1684510660','1684511605','1');");
E_D("replace into `scrww_ecms_news_index` values('154','10','1','1684510660','1684510660','1684510660','1');");
E_D("replace into `scrww_ecms_news_index` values('153','10','1','1684510660','1684510660','1684510660','1');");
E_D("replace into `scrww_ecms_news_index` values('152','10','1','1684510660','1684510660','1684510660','1');");
E_D("replace into `scrww_ecms_news_index` values('151','10','1','1684510660','1684510660','1684510660','1');");
E_D("replace into `scrww_ecms_news_index` values('150','10','1','1684510660','1684510660','1684510660','1');");
E_D("replace into `scrww_ecms_news_index` values('149','10','1','1684510659','1684510659','1684510659','1');");
E_D("replace into `scrww_ecms_news_index` values('175','10','1','1706115020','1706117437','1706890051','1');");
E_D("replace into `scrww_ecms_news_index` values('147','10','1','1684510659','1684510659','1684510659','1');");
E_D("replace into `scrww_ecms_news_index` values('146','10','1','1684510659','1684510659','1684510659','1');");

@include("../../inc/footer.php");
?>