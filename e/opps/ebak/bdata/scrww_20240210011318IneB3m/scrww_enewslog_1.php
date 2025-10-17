<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

E_D("DROP TABLE IF EXISTS `scrww_enewslog`;");
E_C("CREATE TABLE `scrww_enewslog` (
  `loginid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `logintime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `loginip` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(30) NOT NULL DEFAULT '',
  `loginauth` tinyint(1) NOT NULL DEFAULT '0',
  `ipport` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`loginid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8");
E_D("replace into `scrww_enewslog` values('1',0x61646d696e,'2023-05-06 23:19:33',0x3132372e302e302e31,'1','','0',0x3534323233);");
E_D("replace into `scrww_enewslog` values('2',0x61646d696e,'2023-05-07 01:01:33',0x3132372e302e302e31,'1','','0',0x3630313836);");
E_D("replace into `scrww_enewslog` values('3',0x61646d696e,'2023-05-07 02:16:57',0x3132352e37302e3232322e3137,'1','','0',0x3337343739);");
E_D("replace into `scrww_enewslog` values('4',0x61646d696e,'2023-05-07 14:45:56',0x3133392e3230372e3138382e3237,'1','','0',0x3131343334);");
E_D("replace into `scrww_enewslog` values('5',0x61646d696e,'2023-05-07 20:12:40',0x3132352e37302e3232322e3137,'1','','0',0x3533363035);");
E_D("replace into `scrww_enewslog` values('6',0x61646d696e,'2023-05-19 22:56:31',0x3131382e3131332e3233352e313630,'1','','0',0x3439383139);");
E_D("replace into `scrww_enewslog` values('7',0x61646d696e,'2024-01-23 17:41:31',0x3137312e38382e3132332e3335,'1','','0',0x3536373639);");
E_D("replace into `scrww_enewslog` values('8',0x61646d696e,'2024-01-25 00:41:04',0x3131372e3137362e3232362e3839,'1','','0',0x31323338);");
E_D("replace into `scrww_enewslog` values('9',0x61646d696e,'2024-01-25 01:38:28',0x3137312e38382e3132332e3335,'1','','0',0x3532343231);");
E_D("replace into `scrww_enewslog` values('10',0x61646d696e,'2024-01-25 01:39:52',0x3131372e3137362e3232362e3839,'1','','0',0x31323539);");
E_D("replace into `scrww_enewslog` values('11',0x61646d696e,'2024-01-25 01:50:44',0x3137312e38382e3132332e3335,'1','','0',0x3532383631);");
E_D("replace into `scrww_enewslog` values('12',0x61646d696e,'2024-01-25 13:35:07',0x3131302e3138342e3136312e313936,'1','','0',0x3338393134);");
E_D("replace into `scrww_enewslog` values('13',0x61646d696e,'2024-01-25 13:35:15',0x3131302e3138342e3136312e313936,'1','','0',0x3338393134);");
E_D("replace into `scrww_enewslog` values('14',0x61646d696e,'2024-01-25 13:35:32',0x3131302e3138342e3136312e313936,'1','','0',0x3337383938);");
E_D("replace into `scrww_enewslog` values('15',0x61646d696e,'2024-01-25 13:35:37',0x3131302e3138342e3136312e313936,'1','','0',0x3337383938);");
E_D("replace into `scrww_enewslog` values('16',0x61646d696e,'2024-01-25 13:35:42',0x3131302e3138342e3136312e313936,'1','','0',0x3337383938);");
E_D("replace into `scrww_enewslog` values('17',0x61646d696e,'2024-01-25 13:36:11',0x3131302e3138342e3136312e313936,'1','','0',0x3339313638);");
E_D("replace into `scrww_enewslog` values('18',0x61646d696e,'2024-01-25 13:36:17',0x3131302e3138342e3136312e313936,'1','','0',0x3339313638);");
E_D("replace into `scrww_enewslog` values('19',0x61646d696e,'2024-01-25 13:36:21',0x3131302e3138342e3136312e313936,'1','','0',0x3339313638);");
E_D("replace into `scrww_enewslog` values('20',0x61646d696e,'2024-01-25 13:36:27',0x3131302e3138342e3136312e313936,'1','','0',0x3339313638);");
E_D("replace into `scrww_enewslog` values('21',0x61646d696e,'2024-01-25 13:36:33',0x3131302e3138342e3136312e313936,'1','','0',0x3339313638);");
E_D("replace into `scrww_enewslog` values('22',0x61646d696e,'2024-01-25 13:36:40',0x3131302e3138342e3136312e313936,'1','','0',0x3339313638);");
E_D("replace into `scrww_enewslog` values('23',0x61646d696e,'2024-01-25 13:36:48',0x3131302e3138342e3136312e313936,'1','','0',0x3339313638);");
E_D("replace into `scrww_enewslog` values('24',0x61646d696e,'2024-01-25 13:37:02',0x3131302e3138342e3136312e313936,'1','','0',0x3338323733);");
E_D("replace into `scrww_enewslog` values('25',0x61646d696e,'2024-01-30 03:19:48',0x3131372e3137362e3232362e3839,'1','','0',0x31353236);");
E_D("replace into `scrww_enewslog` values('26',0x61646d696e,'2024-01-30 03:19:55',0x3131372e3137362e3232362e3839,'1','','0',0x31303639);");
E_D("replace into `scrww_enewslog` values('27',0x61646d696e,'2024-01-30 03:20:14',0x3131372e3137362e3232362e3839,'1','','0',0x31323037);");
E_D("replace into `scrww_enewslog` values('28',0x61646d696e,'2024-01-30 03:20:29',0x3131372e3137362e3232362e3839,'1','','0',0x31323236);");
E_D("replace into `scrww_enewslog` values('29',0x61646d696e,'2024-01-30 03:21:12',0x3131372e3137362e3232362e3839,'1','','0',0x31323439);");
E_D("replace into `scrww_enewslog` values('30',0x61646d696e,'2024-01-30 03:21:22',0x3131372e3137362e3232362e3839,'1','','0',0x31323638);");
E_D("replace into `scrww_enewslog` values('31',0x61646d696e,'2024-01-30 03:21:27',0x3131372e3137362e3232362e3839,'1','','0',0x31323638);");
E_D("replace into `scrww_enewslog` values('32',0x61646d696e,'2024-01-30 03:22:00',0x3131372e3137362e3232362e3839,'1','','0',0x31323834);");
E_D("replace into `scrww_enewslog` values('33',0x61646d696e,'2024-01-30 03:22:00',0x3131372e3137362e3232362e3839,'1','','0',0x31323833);");
E_D("replace into `scrww_enewslog` values('34',0x61646d696e,'2024-01-30 03:22:47',0x3131372e3137362e3232362e3839,'1','','0',0x31333835);");
E_D("replace into `scrww_enewslog` values('35',0x61646d696e,'2024-01-30 03:25:08',0x3131372e3137362e3232362e3839,'1','','0',0x31323037);");
E_D("replace into `scrww_enewslog` values('36',0x61646d696e,'2024-01-30 03:25:13',0x3131372e3137362e3232362e3839,'1','','0',0x31323037);");
E_D("replace into `scrww_enewslog` values('37',0x61646d696e,'2024-01-30 03:25:44',0x3131372e3137362e3232362e3839,'1','','0',0x31323330);");
E_D("replace into `scrww_enewslog` values('38',0x61646d696e,'2024-01-30 03:25:44',0x3131372e3137362e3232362e3839,'1','','0',0x31323331);");
E_D("replace into `scrww_enewslog` values('39',0x61646d696e,'2024-01-30 03:25:51',0x3131372e3137362e3232362e3839,'1','','0',0x31323333);");
E_D("replace into `scrww_enewslog` values('40',0x61646d696e,'2024-02-02 22:15:37',0x3131372e3137362e3230352e323534,'1','','0',0x3132343336);");
E_D("replace into `scrww_enewslog` values('41',0x61646d696e,'2024-02-02 22:16:03',0x3131372e3137362e3230352e323534,'1','','0',0x3132363133);");
E_D("replace into `scrww_enewslog` values('42',0x61646d696e,'2024-02-02 22:16:09',0x3131372e3137362e3230352e323534,'1','','0',0x3132363330);");
E_D("replace into `scrww_enewslog` values('43',0x61646d696e,'2024-02-02 22:16:50',0x3131372e3137362e3230352e323534,'1','','0',0x3132363939);");
E_D("replace into `scrww_enewslog` values('44',0x61646d696e,'2024-02-02 22:23:15',0x3131372e3137362e3230352e323534,'1','','0',0x3132343233);");
E_D("replace into `scrww_enewslog` values('45',0x61646d696e,'2024-02-02 23:07:13',0x3131382e3131362e31332e313631,'1','','0',0x3633313533);");
E_D("replace into `scrww_enewslog` values('46',0x61646d696e,'2024-02-02 23:19:06',0x3131372e3137362e3230352e323534,'1','','0',0x3132373830);");
E_D("replace into `scrww_enewslog` values('47',0x61646d696e,'2024-02-03 03:07:57',0x3131382e3131362e31332e313631,'1','','0',0x3535333134);");
E_D("replace into `scrww_enewslog` values('48',0x61646d696e,'2024-02-03 13:31:19',0x3131382e3131322e3139392e3134,'1','','0',0x3537313231);");
E_D("replace into `scrww_enewslog` values('49',0x61646d696e,'2024-02-07 21:33:29',0x3131382e3131322e3139392e3130,'1','','0',0x3534303730);");
E_D("replace into `scrww_enewslog` values('50',0x61646d696e,'2024-02-07 22:22:23',0x3131382e3131322e3139392e3130,'1','','0',0x3536373435);");
E_D("replace into `scrww_enewslog` values('51',0x61646d696e,'2024-02-08 16:30:14',0x3137312e3232332e3132332e323437,'1','','0',0x3532373931);");
E_D("replace into `scrww_enewslog` values('52',0x61646d696e,'2024-02-08 17:23:35',0x3137312e3232332e3132332e323437,'1','','0',0x3439383632);");
E_D("replace into `scrww_enewslog` values('53',0x61646d696e,'2024-02-08 20:10:03',0x3137312e3232332e3132332e323437,'1','','0',0x3534323035);");
E_D("replace into `scrww_enewslog` values('54',0x61646d696e,'2024-02-08 22:09:15',0x3137312e3232332e3132332e323437,'1','','0',0x3537313731);");
E_D("replace into `scrww_enewslog` values('55',0x61646d696e,'2024-02-08 22:54:47',0x3137312e3232332e3132332e323437,'1','','0',0x3633373735);");
E_D("replace into `scrww_enewslog` values('56',0x61646d696e,'2024-02-09 00:30:11',0x3137312e3232332e3132332e323437,'1','','0',0x3530353335);");
E_D("replace into `scrww_enewslog` values('57',0x61646d696e,'2024-02-09 16:39:42',0x3137312e3232332e3132332e323437,'1','','0',0x3530393831);");
E_D("replace into `scrww_enewslog` values('58',0x61646d696e,'2024-02-09 19:08:13',0x3137312e3232332e3132332e323437,'1','','0',0x3537323331);");
E_D("replace into `scrww_enewslog` values('59',0x61646d696e,'2024-02-10 01:11:53',0x3137312e3232332e3132332e323437,'1','','0',0x3633353335);");

@include("../../inc/footer.php");
?>