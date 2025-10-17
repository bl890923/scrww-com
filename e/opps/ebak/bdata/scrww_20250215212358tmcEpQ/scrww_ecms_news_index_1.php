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
) ENGINE=MyISAM AUTO_INCREMENT=250 DEFAULT CHARSET=utf8");
E_D("replace into `scrww_ecms_news_index` values('1','19','1','1683392074','1683392086','1684508578','1');");
E_D("replace into `scrww_ecms_news_index` values('2','20','1','1683392090','1683392096','1683396244','1');");
E_D("replace into `scrww_ecms_news_index` values('3','21','1','1683392099','1683392109','1707315966','1');");
E_D("replace into `scrww_ecms_news_index` values('185','10','1','1707990477','1707990699','1728291896','1');");
E_D("replace into `scrww_ecms_news_index` values('184','10','1','1707990105','1707990399','1728291908','1');");
E_D("replace into `scrww_ecms_news_index` values('183','10','1','1707381314','1707381581','1728291921','1');");
E_D("replace into `scrww_ecms_news_index` values('182','10','1','1707381176','1707381365','1728291935','1');");
E_D("replace into `scrww_ecms_news_index` values('181','10','1','1707587503','1707314673','1728291950','1');");
E_D("replace into `scrww_ecms_news_index` values('180','10','1','1707314226','1707314351','1728291962','1');");
E_D("replace into `scrww_ecms_news_index` values('179','33','1','1707312837','1707312906','1707314796','1');");
E_D("replace into `scrww_ecms_news_index` values('178','34','1','1707587488','1706889272','1707587494','1');");
E_D("replace into `scrww_ecms_news_index` values('20','14','1','1683394748','1683394800','1683394824','1');");
E_D("replace into `scrww_ecms_news_index` values('21','14','1','1683394832','1683394857','1683394857','1');");
E_D("replace into `scrww_ecms_news_index` values('22','14','1','1683394860','1683394886','1683394886','1');");
E_D("replace into `scrww_ecms_news_index` values('23','14','1','1683394901','1683394958','1683461899','1');");
E_D("replace into `scrww_ecms_news_index` values('24','14','1','1683394901','1683394971','1683461913','1');");
E_D("replace into `scrww_ecms_news_index` values('25','14','1','1683394901','1683394979','1683461930','1');");
E_D("replace into `scrww_ecms_news_index` values('174','10','1','1684510676','1684510676','1728292008','1');");
E_D("replace into `scrww_ecms_news_index` values('173','10','1','1684510671','1684510671','1728292018','1');");
E_D("replace into `scrww_ecms_news_index` values('172','10','1','1684510671','1684510671','1728292856','1');");
E_D("replace into `scrww_ecms_news_index` values('171','10','1','1684510664','1684510664','1728292866','1');");
E_D("replace into `scrww_ecms_news_index` values('170','10','1','1684510664','1684510664','1728292875','1');");
E_D("replace into `scrww_ecms_news_index` values('169','10','1','1684510664','1684510664','1728292894','1');");
E_D("replace into `scrww_ecms_news_index` values('167','10','1','1684510663','1684510663','1728292905','1');");
E_D("replace into `scrww_ecms_news_index` values('166','10','1','1684510663','1684510663','1728292913','1');");
E_D("replace into `scrww_ecms_news_index` values('165','10','1','1684510663','1684510663','1728292924','1');");
E_D("replace into `scrww_ecms_news_index` values('164','10','1','1684510663','1684510663','1728292942','1');");
E_D("replace into `scrww_ecms_news_index` values('163','10','1','1684510662','1684510662','1728292952','1');");
E_D("replace into `scrww_ecms_news_index` values('162','10','1','1684510662','1684510662','1728292965','1');");
E_D("replace into `scrww_ecms_news_index` values('161','10','1','1684510662','1684510662','1728292976','1');");
E_D("replace into `scrww_ecms_news_index` values('177','10','1','1706888203','1706888418','1706889955','1');");
E_D("replace into `scrww_ecms_news_index` values('159','10','1','1684510661','1684510661','1728292988','1');");
E_D("replace into `scrww_ecms_news_index` values('176','33','1','1706884421','1706885573','1706889896','1');");
E_D("replace into `scrww_ecms_news_index` values('157','10','1','1684510661','1684510661','1728293000','1');");
E_D("replace into `scrww_ecms_news_index` values('156','10','1','1684510661','1684510661','1728293014','1');");
E_D("replace into `scrww_ecms_news_index` values('155','10','1','1684510660','1684510660','1728293077','1');");
E_D("replace into `scrww_ecms_news_index` values('154','10','1','1684510660','1684510660','1728293086','1');");
E_D("replace into `scrww_ecms_news_index` values('153','10','1','1684510660','1684510660','1728293099','1');");
E_D("replace into `scrww_ecms_news_index` values('152','10','1','1684510660','1684510660','1728293110','1');");
E_D("replace into `scrww_ecms_news_index` values('151','10','1','1684510660','1684510660','1728293120','1');");
E_D("replace into `scrww_ecms_news_index` values('150','10','1','1684510660','1684510660','1728293134','1');");
E_D("replace into `scrww_ecms_news_index` values('149','10','1','1684510659','1684510659','1728293152','1');");
E_D("replace into `scrww_ecms_news_index` values('175','10','1','1706115020','1706117437','1706890051','1');");
E_D("replace into `scrww_ecms_news_index` values('147','10','1','1684510659','1684510659','1728293163','1');");
E_D("replace into `scrww_ecms_news_index` values('146','10','1','1684510659','1684510659','1728293174','1');");
E_D("replace into `scrww_ecms_news_index` values('186','10','1','1728293304','1728293396','1728293396','1');");
E_D("replace into `scrww_ecms_news_index` values('187','10','1','1728293507','1728293634','1728293643','1');");
E_D("replace into `scrww_ecms_news_index` values('188','10','1','1728293716','1728293833','1728293833','1');");
E_D("replace into `scrww_ecms_news_index` values('189','10','1','1728293989','1728294070','1728294070','1');");
E_D("replace into `scrww_ecms_news_index` values('190','10','1','1728294737','1728294737','1728295067','1');");
E_D("replace into `scrww_ecms_news_index` values('191','10','1','1728294737','1728294737','1728295079','1');");
E_D("replace into `scrww_ecms_news_index` values('192','10','1','1728294739','1728294739','1728295113','1');");
E_D("replace into `scrww_ecms_news_index` values('193','10','1','1728294739','1728294739','1728295121','1');");
E_D("replace into `scrww_ecms_news_index` values('194','10','1','1728294740','1728294740','1728295132','1');");
E_D("replace into `scrww_ecms_news_index` values('195','10','1','1728294740','1728294740','1728295147','1');");
E_D("replace into `scrww_ecms_news_index` values('196','10','1','1728294742','1728294742','1728295159','1');");
E_D("replace into `scrww_ecms_news_index` values('197','10','1','1728294742','1728294742','1728295169','1');");
E_D("replace into `scrww_ecms_news_index` values('198','10','1','1728294743','1728294743','1728295180','1');");
E_D("replace into `scrww_ecms_news_index` values('199','10','1','1728294743','1728294743','1728295190','1');");
E_D("replace into `scrww_ecms_news_index` values('200','10','1','1728294745','1728294745','1728295200','1');");
E_D("replace into `scrww_ecms_news_index` values('201','10','1','1728294745','1728294745','1728295212','1');");
E_D("replace into `scrww_ecms_news_index` values('202','10','1','1728294747','1728294747','1728295227','1');");
E_D("replace into `scrww_ecms_news_index` values('203','10','1','1728294747','1728294747','1728295235','1');");
E_D("replace into `scrww_ecms_news_index` values('204','10','1','1728294748','1728294748','1728295246','1');");
E_D("replace into `scrww_ecms_news_index` values('205','10','1','1728294748','1728294748','1728295265','1');");
E_D("replace into `scrww_ecms_news_index` values('206','10','1','1728294750','1728294750','1728295275','1');");
E_D("replace into `scrww_ecms_news_index` values('207','10','1','1728294750','1728294750','1728295284','1');");
E_D("replace into `scrww_ecms_news_index` values('208','10','1','1728294751','1728294751','1728295293','1');");
E_D("replace into `scrww_ecms_news_index` values('209','10','1','1728294751','1728294751','1728295302','1');");
E_D("replace into `scrww_ecms_news_index` values('210','10','1','1728294753','1728294753','1728295309','1');");
E_D("replace into `scrww_ecms_news_index` values('211','10','1','1728294753','1728294753','1728295318','1');");
E_D("replace into `scrww_ecms_news_index` values('212','10','1','1728294754','1728294754','1728295330','1');");
E_D("replace into `scrww_ecms_news_index` values('213','10','1','1728294754','1728294754','1728295338','1');");
E_D("replace into `scrww_ecms_news_index` values('214','10','1','1728294756','1728294756','1728295347','1');");
E_D("replace into `scrww_ecms_news_index` values('215','10','1','1728294756','1728294756','1728295355','1');");
E_D("replace into `scrww_ecms_news_index` values('216','10','1','1728294757','1728294757','1728295364','1');");
E_D("replace into `scrww_ecms_news_index` values('217','10','1','1728294757','1728294757','1728295374','1');");
E_D("replace into `scrww_ecms_news_index` values('218','10','1','1728294759','1728294759','1728295383','1');");
E_D("replace into `scrww_ecms_news_index` values('219','10','1','1728294759','1728294759','1728295392','1');");
E_D("replace into `scrww_ecms_news_index` values('220','11','1','1728295968','1728295996','1728295996','1');");
E_D("replace into `scrww_ecms_news_index` values('221','11','1','1728295998','1728296034','1728296034','1');");
E_D("replace into `scrww_ecms_news_index` values('222','11','1','1728296037','1728296049','1728296049','1');");
E_D("replace into `scrww_ecms_news_index` values('223','11','1','1728296052','1728296062','1728296062','1');");
E_D("replace into `scrww_ecms_news_index` values('224','11','1','1728296065','1728296073','1728296073','1');");
E_D("replace into `scrww_ecms_news_index` values('225','11','1','1728296076','1728296120','1728296120','1');");
E_D("replace into `scrww_ecms_news_index` values('226','11','1','1728296123','1728296131','1728296131','1');");
E_D("replace into `scrww_ecms_news_index` values('227','11','1','1728296134','1728296143','1728296143','1');");
E_D("replace into `scrww_ecms_news_index` values('228','11','1','1728296145','1728296153','1728296153','1');");
E_D("replace into `scrww_ecms_news_index` values('229','11','1','1728296156','1728296164','1728296164','1');");
E_D("replace into `scrww_ecms_news_index` values('230','11','1','1728296166','1728296176','1728296176','1');");
E_D("replace into `scrww_ecms_news_index` values('231','12','1','1728296234','1728296246','1728296246','1');");
E_D("replace into `scrww_ecms_news_index` values('232','12','1','1728296249','1728296264','1728296264','1');");
E_D("replace into `scrww_ecms_news_index` values('233','12','1','1728296267','1728296277','1728296277','1');");
E_D("replace into `scrww_ecms_news_index` values('234','12','1','1728296280','1728296297','1728296297','1');");
E_D("replace into `scrww_ecms_news_index` values('235','12','1','1728296301','1728296308','1728296308','1');");
E_D("replace into `scrww_ecms_news_index` values('236','12','1','1728296311','1728296323','1728296323','1');");
E_D("replace into `scrww_ecms_news_index` values('237','12','1','1728296326','1728296336','1728296336','1');");
E_D("replace into `scrww_ecms_news_index` values('238','12','1','1728296339','1728296348','1728296348','1');");
E_D("replace into `scrww_ecms_news_index` values('239','12','1','1728296351','1728296366','1728296366','1');");
E_D("replace into `scrww_ecms_news_index` values('240','12','1','1728296369','1728296380','1728296380','1');");
E_D("replace into `scrww_ecms_news_index` values('241','10','1','1737215029','1737215029','1737215029','1');");
E_D("replace into `scrww_ecms_news_index` values('242','10','1','1737215029','1737215029','1737215029','1');");
E_D("replace into `scrww_ecms_news_index` values('243','10','1','1737215029','1737215029','1737215029','1');");
E_D("replace into `scrww_ecms_news_index` values('244','10','1','1737215029','1737215029','1737215029','1');");
E_D("replace into `scrww_ecms_news_index` values('245','10','1','1737215030','1737215030','1737215030','1');");
E_D("replace into `scrww_ecms_news_index` values('246','10','1','1737215030','1737215030','1737215030','1');");
E_D("replace into `scrww_ecms_news_index` values('247','10','1','1737215031','1737215031','1737215031','1');");
E_D("replace into `scrww_ecms_news_index` values('248','10','1','1737215031','1737215031','1737215031','1');");
E_D("replace into `scrww_ecms_news_index` values('249','10','1','1737215031','1737215031','1737215031','1');");

@include("../../inc/footer.php");
?>