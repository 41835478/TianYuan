--
-- MySQL database dump
-- Created by DbManage class, Power By yanue. 
-- http://yanue.net 
--
-- 主机: 61.133.41.22
-- 生成日期: 2016 年  12 月 30 日 15:10
-- MySQL版本: 5.6.26
-- PHP 版本: 5.5.28

--
-- 数据库: `web_mall`
--

-- -------------------------------------------------------

--
-- 表的结构ucenter
--

DROP TABLE IF EXISTS `ucenter`;
CREATE TABLE `ucenter` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` char(30) CHARACTER SET gbk NOT NULL,
  `password` char(32) CHARACTER SET gbk NOT NULL,
  `lastlogintime` int(10) unsigned NOT NULL,
  `lastloginip` char(15) CHARACTER SET gbk NOT NULL,
  `type` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `score` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=124 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='商城用户表';

--
-- 转存表中的数据 ucenter
--

INSERT INTO `ucenter` VALUES('121','admin','e10adc3949ba59abbe56e057f20f883e','1483081561','122.4.202.147','1','0');
INSERT INTO `ucenter` VALUES('122','商铺测试','e10adc3949ba59abbe56e057f20f883e','1482886033','192.168.10.240','2','0');
INSERT INTO `ucenter` VALUES('123','个人会员','e10adc3949ba59abbe56e057f20f883e','1483068924','122.4.202.147','0','1340');
--
-- 表的结构web_ad_pos
--

DROP TABLE IF EXISTS `web_ad_pos`;
CREATE TABLE `web_ad_pos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_bin NOT NULL,
  `width` varchar(20) COLLATE utf8_bin NOT NULL,
  `height` varchar(20) COLLATE utf8_bin NOT NULL,
  `addtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='广告位';

--
-- 转存表中的数据 web_ad_pos
--

INSERT INTO `web_ad_pos` VALUES('12','首页自然观光左侧大广告位','218','359','1480386555');
INSERT INTO `web_ad_pos` VALUES('3','最顶部通栏广告','1920','80','1473039574');
INSERT INTO `web_ad_pos` VALUES('4','首页幻灯片大banner','750','420','1473070268');
INSERT INTO `web_ad_pos` VALUES('5','首页热门推荐广告位','290','272','1480316588');
INSERT INTO `web_ad_pos` VALUES('6','首页品牌推荐广告位','290','335','1480317047');
INSERT INTO `web_ad_pos` VALUES('7','首页品牌推荐下方通栏广告','1200','120','1480317332');
INSERT INTO `web_ad_pos` VALUES('8','首页田园采摘左侧4个广告位','190','265','1480321098');
INSERT INTO `web_ad_pos` VALUES('9','首页田园采摘右侧4个广告位','190','265','1480321435');
INSERT INTO `web_ad_pos` VALUES('10','首页田园采摘下方通栏广告','1200','120','1480321666');
INSERT INTO `web_ad_pos` VALUES('11','公告栏右侧广告位','250','76','1480381856');
INSERT INTO `web_ad_pos` VALUES('13','自然观光左侧上方大图','380','265','1480387392');
INSERT INTO `web_ad_pos` VALUES('14','自然观光左侧上方大图','380','265','1480387392');
INSERT INTO `web_ad_pos` VALUES('15','自然观光左侧下方2个广告位','190','265','1480387534');
INSERT INTO `web_ad_pos` VALUES('16','自然观光右半区左侧大图','218','359','1480387686');
INSERT INTO `web_ad_pos` VALUES('17','自然观光右半区上方大图','380','265','1480387749');
INSERT INTO `web_ad_pos` VALUES('18','自然观光右半区下面2个广告位','190','265','1480387842');
INSERT INTO `web_ad_pos` VALUES('19','首页自然观光下方通栏广告','1200','120','1480387986');
INSERT INTO `web_ad_pos` VALUES('20','首页农家乐板块左侧大图','220','530','1480388319');
INSERT INTO `web_ad_pos` VALUES('21','首页农家乐板块右侧6个广告位','327','265','1480388561');
INSERT INTO `web_ad_pos` VALUES('22','首页农家乐下方通栏广告','1200','120','1480389051');
INSERT INTO `web_ad_pos` VALUES('23','首页生鲜直配左侧大图','220','530','1480391183');
INSERT INTO `web_ad_pos` VALUES('24','首页生鲜直配右侧6个广告位','327','265','1480391329');
INSERT INTO `web_ad_pos` VALUES('25','首页生鲜直配下方通栏广告','1200','120','1480391761');
INSERT INTO `web_ad_pos` VALUES('26','首页酒店住宿左侧大图','220','530','1480397935');
INSERT INTO `web_ad_pos` VALUES('27','首页酒店住宿右侧6个广告位','327','265','1480398057');
INSERT INTO `web_ad_pos` VALUES('28','首页酒店住宿下方通栏广告','1200','120','1480400525');
INSERT INTO `web_ad_pos` VALUES('29','首页私家庄园左半区左侧大图','220','359','1480401504');
INSERT INTO `web_ad_pos` VALUES('30','首页私家庄园左半区右侧上方大图','380','265','1480401736');
INSERT INTO `web_ad_pos` VALUES('31','首页私家庄园左半区右侧下面2个广告位','190','265','1480401896');
INSERT INTO `web_ad_pos` VALUES('32','首页私家庄园右半区左侧大图','220','359','1480402177');
INSERT INTO `web_ad_pos` VALUES('33','首页私家庄园右半区右侧上方大图','380','265','1480402300');
INSERT INTO `web_ad_pos` VALUES('34','首页私家庄园右半区右侧下面2个广告位','190','265','1480402372');
INSERT INTO `web_ad_pos` VALUES('35','首页私家庄园下方通栏广告','1200','120','1480402652');
INSERT INTO `web_ad_pos` VALUES('36','首页农资产品左半区左侧大图','220','359','1480403046');
INSERT INTO `web_ad_pos` VALUES('37','首页农资产品左半区右侧4个广告位','190','265','1480403192');
INSERT INTO `web_ad_pos` VALUES('38','首页农资板块右半区左侧大图','220','359','1480403472');
INSERT INTO `web_ad_pos` VALUES('39','首页农资板块右半区右侧4个广告位','190','265','1480403594');
INSERT INTO `web_ad_pos` VALUES('40','首页农资产品下方通栏广告位','1200','120','1480403783');
INSERT INTO `web_ad_pos` VALUES('41','首页田园规划左侧大图广告','220','530','1480407307');
INSERT INTO `web_ad_pos` VALUES('42','首页田园规划右侧上下两个大图广告位','650','265','1480407482');
INSERT INTO `web_ad_pos` VALUES('43','首页田园规划右侧上下两个小图广告位','330','265','1480407510');
INSERT INTO `web_ad_pos` VALUES('44','首页田园规划下方通栏广告位','1200','120','1480407673');
INSERT INTO `web_ad_pos` VALUES('45','首页最底部2个大图广告','595','200','1480408199');
INSERT INTO `web_ad_pos` VALUES('46','首页弹窗广告','600','400','1481266951');
INSERT INTO `web_ad_pos` VALUES('47','购物车页面下方两个广告位','595','200','1481270700');
--
-- 表的结构web_ads
--

DROP TABLE IF EXISTS `web_ads`;
CREATE TABLE `web_ads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `posid` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_bin NOT NULL,
  `link` varchar(50) COLLATE utf8_bin NOT NULL,
  `img` varchar(200) COLLATE utf8_bin NOT NULL,
  `addtime` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=97 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 web_ads
--

INSERT INTO `web_ads` VALUES('12','5','1','1','/static/uploadfile/2016/1128/150327836_real.jpg','1480316609','1');
INSERT INTO `web_ads` VALUES('11','4','萨芬','11','/static/uploadfile/2016/1128/103731782_real.jpg','1480300652','1');
INSERT INTO `web_ads` VALUES('5','3','顶部1','#','/static/uploadfile/2016/0905/095702679_real.jpg','1473040581','1');
INSERT INTO `web_ads` VALUES('31','12','111','#','/static/uploadfile/2016/1129/103020993_real.jpg','1480386622','1');
INSERT INTO `web_ads` VALUES('10','4','测试','11','/static/uploadfile/2016/1128/103702865_real.jpg','1480300624','1');
INSERT INTO `web_ads` VALUES('9','4','asd','11','/static/uploadfile/2016/1128/103308694_real.jpg','1480300390','1');
INSERT INTO `web_ads` VALUES('13','5','2','#','/static/uploadfile/2016/1128/150346524_real.jpg','1480316632','1');
INSERT INTO `web_ads` VALUES('14','5','3','#','/static/uploadfile/2016/1128/150605850_real.jpg','1480316766','1');
INSERT INTO `web_ads` VALUES('15','5','4','#','/static/uploadfile/2016/1128/150617530_real.jpg','1480316779','1');
INSERT INTO `web_ads` VALUES('16','6','1','#','/static/uploadfile/2016/1128/151104933_real.jpg','1480317101','1');
INSERT INTO `web_ads` VALUES('17','6','2','#','/static/uploadfile/2016/1128/151200913_real.jpg','1480317121','1');
INSERT INTO `web_ads` VALUES('18','6','3','#','/static/uploadfile/2016/1128/151214382_real.jpg','1480317136','1');
INSERT INTO `web_ads` VALUES('19','6','4','#','/static/uploadfile/2016/1128/151231217_real.jpg','1480317153','1');
INSERT INTO `web_ads` VALUES('20','7','111','#','/static/uploadfile/2016/1128/151645640_real.jpg','1480317406','1');
INSERT INTO `web_ads` VALUES('21','8','1','#','/static/uploadfile/2016/1128/161834163_real.jpg','1480321115','1');
INSERT INTO `web_ads` VALUES('22','8','2','11','/static/uploadfile/2016/1128/162059271_real.jpg','1480321261','1');
INSERT INTO `web_ads` VALUES('23','8','3','#','/static/uploadfile/2016/1128/162153390_real.jpg','1480321315','1');
INSERT INTO `web_ads` VALUES('24','8','4','#','/static/uploadfile/2016/1128/162207492_real.jpg','1480321329','1');
INSERT INTO `web_ads` VALUES('25','9','1','#','/static/uploadfile/2016/1128/162412854_real.jpg','1480321454','1');
INSERT INTO `web_ads` VALUES('26','9','2','#','/static/uploadfile/2016/1128/162428415_real.jpg','1480321470','1');
INSERT INTO `web_ads` VALUES('27','9','3','#','/static/uploadfile/2016/1128/162441636_real.jpg','1480321482','1');
INSERT INTO `web_ads` VALUES('28','9','4','#','/static/uploadfile/2016/1128/162637358_real.jpg','1480321599','1');
INSERT INTO `web_ads` VALUES('29','10','1','#','/static/uploadfile/2016/1129/171623758_real.jpg','1480321685','1');
INSERT INTO `web_ads` VALUES('30','11','1','#','/static/uploadfile/2016/1129/091216382_real.jpg','1480381938','1');
INSERT INTO `web_ads` VALUES('32','14','1','#','/static/uploadfile/2016/1129/104332191_real.jpg','1480387414','1');
INSERT INTO `web_ads` VALUES('33','15','1','#','/static/uploadfile/2016/1129/104556843_real.jpg','1480387558','1');
INSERT INTO `web_ads` VALUES('34','15','2','#','/static/uploadfile/2016/1129/104613425_real.jpg','1480387575','1');
INSERT INTO `web_ads` VALUES('35','16','1','#','/static/uploadfile/2016/1129/104838222_real.jpg','1480387720','1');
INSERT INTO `web_ads` VALUES('36','17','1','11','/static/uploadfile/2016/1129/104926824_real.jpg','1480387768','1');
INSERT INTO `web_ads` VALUES('37','18','1','#','/static/uploadfile/2016/1129/105056360_real.jpg','1480387858','1');
INSERT INTO `web_ads` VALUES('38','18','1','#','/static/uploadfile/2016/1129/105115847_real.jpg','1480387926','1');
INSERT INTO `web_ads` VALUES('39','19','1','#','/static/uploadfile/2016/1129/171545648_real.jpg','1480388006','1');
INSERT INTO `web_ads` VALUES('40','20','1','#','/static/uploadfile/2016/1129/110021758_real.jpg','1480388423','1');
INSERT INTO `web_ads` VALUES('41','21','1','#','/static/uploadfile/2016/1129/110539428_real.jpg','1480388743','1');
INSERT INTO `web_ads` VALUES('42','21','2','#','/static/uploadfile/2016/1129/110555160_real.jpg','1480388757','1');
INSERT INTO `web_ads` VALUES('43','21','3','#','/static/uploadfile/2016/1129/110610251_real.jpg','1480388772','1');
INSERT INTO `web_ads` VALUES('44','21','4','#','/static/uploadfile/2016/1129/110649189_real.jpg','1480388811','1');
INSERT INTO `web_ads` VALUES('45','21','5','#','/static/uploadfile/2016/1129/110841810_real.jpg','1480388923','1');
INSERT INTO `web_ads` VALUES('46','21','6','#','/static/uploadfile/2016/1129/110937948_real.jpg','1480388979','1');
INSERT INTO `web_ads` VALUES('47','22','1','#','/static/uploadfile/2016/1129/111511270_real.jpg','1480389071','1');
INSERT INTO `web_ads` VALUES('48','23','1','#','/static/uploadfile/2016/1129/114742127_real.jpg','1480391264','1');
INSERT INTO `web_ads` VALUES('49','24','1','#','/static/uploadfile/2016/1129/115108323_real.jpg','1480391469','1');
INSERT INTO `web_ads` VALUES('50','24','2','#','/static/uploadfile/2016/1129/115127771_real.jpg','1480391489','1');
INSERT INTO `web_ads` VALUES('51','24','3','#','/static/uploadfile/2016/1129/115157146_real.jpg','1480391520','1');
INSERT INTO `web_ads` VALUES('52','24','4','#','/static/uploadfile/2016/1129/115219424_real.jpg','1480391589','1');
INSERT INTO `web_ads` VALUES('53','24','5','#','/static/uploadfile/2016/1129/115327900_real.jpg','1480391640','1');
INSERT INTO `web_ads` VALUES('54','24','6','#','/static/uploadfile/2016/1129/115422500_real.jpg','1480391664','1');
INSERT INTO `web_ads` VALUES('55','25','2','#','/static/uploadfile/2016/1129/115632296_real.jpg','1480391793','1');
INSERT INTO `web_ads` VALUES('56','26','1','#','/static/uploadfile/2016/1129/134006335_real.jpg','1480398008','1');
INSERT INTO `web_ads` VALUES('57','27','1','#','/static/uploadfile/2016/1129/134119505_real.jpg','1480398081','1');
INSERT INTO `web_ads` VALUES('58','27','2','#','/static/uploadfile/2016/1129/134131479_real.jpg','1480398093','1');
INSERT INTO `web_ads` VALUES('59','27','3','#','/static/uploadfile/2016/1129/141902669_real.jpg','1480400344','1');
INSERT INTO `web_ads` VALUES('60','27','4','#','/static/uploadfile/2016/1129/141916956_real.jpg','1480400358','1');
INSERT INTO `web_ads` VALUES('61','27','5','#','/static/uploadfile/2016/1129/141931178_real.jpg','1480400373','1');
INSERT INTO `web_ads` VALUES('62','27','6','#','/static/uploadfile/2016/1129/141945469_real.jpg','1480400387','1');
INSERT INTO `web_ads` VALUES('63','28','1','#','/static/uploadfile/2016/1129/142220584_real.jpg','1480400542','1');
INSERT INTO `web_ads` VALUES('64','29','1','#','/static/uploadfile/2016/1129/144108368_real.jpg','1480401670','1');
INSERT INTO `web_ads` VALUES('66','30','1','#','/static/uploadfile/2016/1129/144307555_real.jpg','1480401789','1');
INSERT INTO `web_ads` VALUES('67','31','1','#','/static/uploadfile/2016/1129/144516432_real.jpg','1480401918','1');
INSERT INTO `web_ads` VALUES('68','31','2','#','/static/uploadfile/2016/1129/144533855_real.jpg','1480401935','1');
INSERT INTO `web_ads` VALUES('69','32','1','11','/static/uploadfile/2016/1129/145107642_real.jpg','1480402224','1');
INSERT INTO `web_ads` VALUES('70','33','1','11','/static/uploadfile/2016/1129/145219200_real.jpg','1480402325','1');
INSERT INTO `web_ads` VALUES('71','34','1','#','/static/uploadfile/2016/1129/145311879_real.jpg','1480402393','1');
INSERT INTO `web_ads` VALUES('72','34','2','#','/static/uploadfile/2016/1129/145326582_real.jpg','1480402408','1');
INSERT INTO `web_ads` VALUES('73','35','1','#','/static/uploadfile/2016/1129/145815528_real.jpg','1480402749','1');
INSERT INTO `web_ads` VALUES('74','36','1','#','/static/uploadfile/2016/1129/150424989_real.jpg','1480403065','1');
INSERT INTO `web_ads` VALUES('75','37','1','#','/static/uploadfile/2016/1129/150918866_real.jpg','1480403360','1');
INSERT INTO `web_ads` VALUES('76','37','2','#','/static/uploadfile/2016/1129/150931423_real.jpg','1480403373','1');
INSERT INTO `web_ads` VALUES('77','37','3','#','/static/uploadfile/2016/1129/150948501_real.jpg','1480403390','1');
INSERT INTO `web_ads` VALUES('78','37','4','#','/static/uploadfile/2016/1129/151001761_real.jpg','1480403403','1');
INSERT INTO `web_ads` VALUES('79','38','1','#','/static/uploadfile/2016/1129/151232201_real.jpg','1480403489','1');
INSERT INTO `web_ads` VALUES('80','39','1','#','/static/uploadfile/2016/1129/151338394_real.jpg','1480403620','1');
INSERT INTO `web_ads` VALUES('81','39','111','#','/static/uploadfile/2016/1129/151354448_real.jpg','1480403635','1');
INSERT INTO `web_ads` VALUES('82','39','3','#','/static/uploadfile/2016/1129/151405485_real.jpg','1480403647','1');
INSERT INTO `web_ads` VALUES('83','39','4','#','/static/uploadfile/2016/1129/151419709_real.jpg','1480403660','1');
INSERT INTO `web_ads` VALUES('84','40','1','#','/static/uploadfile/2016/1129/151642210_real.jpg','1480403804','1');
INSERT INTO `web_ads` VALUES('85','41','1','#','/static/uploadfile/2016/1129/161526792_real.jpg','1480407333','1');
INSERT INTO `web_ads` VALUES('86','42','1','#','/static/uploadfile/2016/1129/161844486_real.jpg','1480407525','1');
INSERT INTO `web_ads` VALUES('87','42','2','11','/static/uploadfile/2016/1129/161902311_real.jpg','1480407544','1');
INSERT INTO `web_ads` VALUES('88','43','1','#','/static/uploadfile/2016/1129/161922333_real.jpg','1480407564','1');
INSERT INTO `web_ads` VALUES('89','43','2','#','/static/uploadfile/2016/1129/161941737_real.jpg','1480407583','1');
INSERT INTO `web_ads` VALUES('90','44','1','#','/static/uploadfile/2016/1129/162130134_real.jpg','1480407691','1');
INSERT INTO `web_ads` VALUES('91','45','1','#','/static/uploadfile/2016/1129/163031193_real.jpg','1480408233','1');
INSERT INTO `web_ads` VALUES('92','45','2','#','/static/uploadfile/2016/1129/163137421_real.jpg','1480408298','1');
INSERT INTO `web_ads` VALUES('93','3','2','#','/static/uploadfile/2016/1129/171726733_real.jpg','1480411048','1');
INSERT INTO `web_ads` VALUES('94','46','1','1','/static/uploadfile/2016/1209/150713788_real.jpg','1481267235','1');
INSERT INTO `web_ads` VALUES('95','47','1','1','/static/uploadfile/2016/1209/160521182_real.jpg','1481270722','1');
INSERT INTO `web_ads` VALUES('96','47','2','1','/static/uploadfile/2016/1209/160532241_real.jpg','1481270734','1');
--
-- 表的结构web_apply_info
--

DROP TABLE IF EXISTS `web_apply_info`;
CREATE TABLE `web_apply_info` (
  `userid` int(11) NOT NULL,
  `contactName` varchar(20) COLLATE utf8_bin NOT NULL,
  `contactPhone` varchar(20) COLLATE utf8_bin NOT NULL,
  `companyName` varchar(20) COLLATE utf8_bin NOT NULL,
  `license_id` varchar(80) COLLATE utf8_bin NOT NULL,
  `legal_person` varchar(20) COLLATE utf8_bin NOT NULL,
  `personalNo` varchar(80) COLLATE utf8_bin NOT NULL,
  `legal_person_img` varchar(80) COLLATE utf8_bin NOT NULL,
  `license_fileImg` varchar(80) COLLATE utf8_bin NOT NULL,
  `company_adress` varchar(80) COLLATE utf8_bin NOT NULL,
  `company_contactTel` varchar(20) COLLATE utf8_bin NOT NULL,
  `organization_code` varchar(80) COLLATE utf8_bin NOT NULL,
  `organization_img` varchar(80) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='申请入驻信息总表';

--
-- 转存表中的数据 web_apply_info
--

INSERT INTO `web_apply_info` VALUES('122','是点','士大夫敢死队','阿斯顿飞过a\'s','是点是大公司的','十多个','山豆根山豆根山豆根','/static/temp/20161103145719823_real.jpg','/static/temp/20161103145727921_real.png','山豆根山豆根','啊是东莞佛山东莞','山豆根山豆根','/static/temp/20161103145736154_real.png');
--
-- 表的结构web_area
--

DROP TABLE IF EXISTS `web_area`;
CREATE TABLE `web_area` (
  `areaid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `style` varchar(35) DEFAULT NULL,
  `parentid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `arrparentid` varchar(255) NOT NULL,
  `child` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `arrchildid` varchar(230) DEFAULT NULL,
  `template` varchar(50) DEFAULT NULL,
  `listorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `hits` int(10) unsigned DEFAULT '0',
  `code` int(11) NOT NULL DEFAULT '0',
  `py` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`areaid`),
  KEY `parent` (`parentid`),
  KEY `order` (`listorder`),
  KEY `py` (`py`)
) ENGINE=MyISAM AUTO_INCREMENT=3248 DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

--
-- 转存表中的数据 web_area
--

INSERT INTO `web_area` VALUES('1','北京','','0','0','1','3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18','','1','0','110000','beijing');
INSERT INTO `web_area` VALUES('3','东城区','','1','1','0','3','','0','0','110101','dongchengqu');
INSERT INTO `web_area` VALUES('4','西城区','','1','1','0','4','','0','0','110102','xichengqu');
INSERT INTO `web_area` VALUES('5','朝阳区','','1','1','0','5','','0','0','110105','chaoyangqu');
INSERT INTO `web_area` VALUES('6','丰台区','','1','1','0','6','','0','0','110106','fengtaiqu');
INSERT INTO `web_area` VALUES('7','石景山','','1','1','0','7','','0','0','110107','shijingshanqu');
INSERT INTO `web_area` VALUES('8','海淀区','','1','1','0','8','','0','0','110108','haidianqu');
INSERT INTO `web_area` VALUES('9','门头沟','','1','1','0','9','','0','0','110109','mentougouqu');
INSERT INTO `web_area` VALUES('10','房山区','','1','1','0','10','','0','0','110111','fangshanqu');
INSERT INTO `web_area` VALUES('11','通州区','','1','1','0','11','','0','0','110112','tongzhouqu');
INSERT INTO `web_area` VALUES('12','顺义区','','1','1','0','12','','0','0','110113','shunyiqu');
INSERT INTO `web_area` VALUES('13','昌平区','','1','1','0','13','','0','0','110114','changpingqu');
INSERT INTO `web_area` VALUES('14','大兴区','','1','1','0','14','','0','0','110115','daxingqu');
INSERT INTO `web_area` VALUES('15','怀柔区','','1','1','0','15','','0','0','110116','huairouqu');
INSERT INTO `web_area` VALUES('16','平谷区','','1','1','0','16','','0','0','110117','pingguqu');
INSERT INTO `web_area` VALUES('17','密云县','','1','1','0','17','','0','0','110228','miyunxian');
INSERT INTO `web_area` VALUES('18','延庆县','','1','1','0','18','','0','0','110229','yanqingxian');
INSERT INTO `web_area` VALUES('19','天津','','0','0','1','20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36','','2','0','120000','tianjin');
INSERT INTO `web_area` VALUES('20','天津市','','19','19','1','21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36','','0','0','120100','tianjinshiqu');
INSERT INTO `web_area` VALUES('21','和平区','','20','19,20','0','21','','0','0','120101','hepingqu');
INSERT INTO `web_area` VALUES('22','河东区','','20','19,20','0','22','','0','0','120102','hedongqu');
INSERT INTO `web_area` VALUES('23','河西区','','20','19,20','0','23','','0','0','120103','hexiqu');
INSERT INTO `web_area` VALUES('24','南开区','','20','19,20','0','24','','0','0','120104','nankaiqu');
INSERT INTO `web_area` VALUES('25','河北区','','20','19,20','0','25','','0','0','120105','hebeiqu');
INSERT INTO `web_area` VALUES('26','红桥区','','20','19,20','0','26','','0','0','120106','hongqiaoqu');
INSERT INTO `web_area` VALUES('27','东丽区','','20','19,20','0','27','','0','0','120110','dongliqu');
INSERT INTO `web_area` VALUES('28','西青区','','20','19,20','0','28','','0','0','120111','xiqingqu');
INSERT INTO `web_area` VALUES('29','津南区','','20','19,20','0','29','','0','0','120112','jinnanqu');
INSERT INTO `web_area` VALUES('30','北辰区','','20','19,20','0','30','','0','0','120113','beichenqu');
INSERT INTO `web_area` VALUES('31','武清区','','20','19,20','0','31','','0','0','120114','wuqingqu');
INSERT INTO `web_area` VALUES('32','宝坻区','','20','19,20','0','32','','0','0','120115','baodiqu');
INSERT INTO `web_area` VALUES('33','滨海','','20','19,20','0','33','','0','0','120116','binhaixinqu');
INSERT INTO `web_area` VALUES('34','宁河县','','20','19,20','0','34','','0','0','120221','ninghexian');
INSERT INTO `web_area` VALUES('35','静海县','','20','19,20','0','35','','0','0','120223','jinghaixian');
INSERT INTO `web_area` VALUES('36','蓟县','','20','19,20','0','36','','0','0','120225','jixian');
INSERT INTO `web_area` VALUES('37','河北','','0','0','1','38,62,77,85,105,125,151,169,181,198,209,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61','','9','0','130000','hebei');
INSERT INTO `web_area` VALUES('38','石家庄','','37','37','1','39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61','','0','0','130100','shijiazhuang');
INSERT INTO `web_area` VALUES('39','长安区','','38','37,38','0','39','','0','0','130102','');
INSERT INTO `web_area` VALUES('40','桥东区','','38','37,38','0','40','','0','0','130103','');
INSERT INTO `web_area` VALUES('41','桥西区','','38','37,38','0','41','','0','0','130104','');
INSERT INTO `web_area` VALUES('42','新华区','','38','37,38','0','42','','0','0','130105','');
INSERT INTO `web_area` VALUES('43','井陉矿区','','38','37,38','0','43','','0','0','130107','');
INSERT INTO `web_area` VALUES('44','裕华区','','38','37,38','0','44','','0','0','130108','');
INSERT INTO `web_area` VALUES('45','井陉县','','38','37,38','0','45','','0','0','130121','');
INSERT INTO `web_area` VALUES('46','正定县','','38','37,38','0','46','','0','0','130123','');
INSERT INTO `web_area` VALUES('47','栾城县','','38','37,38','0','47','','0','0','130124','');
INSERT INTO `web_area` VALUES('48','行唐县','','38','37,38','0','48','','0','0','130125','');
INSERT INTO `web_area` VALUES('49','灵寿县','','38','37,38','0','49','','0','0','130126','');
INSERT INTO `web_area` VALUES('50','高邑县','','38','37,38','0','50','','0','0','130127','');
INSERT INTO `web_area` VALUES('51','深泽县','','38','37,38','0','51','','0','0','130128','');
INSERT INTO `web_area` VALUES('52','赞皇县','','38','37,38','0','52','','0','0','130129','');
INSERT INTO `web_area` VALUES('53','无极县','','38','37,38','0','53','','0','0','130130','');
INSERT INTO `web_area` VALUES('54','平山县','','38','37,38','0','54','','0','0','130131','');
INSERT INTO `web_area` VALUES('55','元氏县','','38','37,38','0','55','','0','0','130132','');
INSERT INTO `web_area` VALUES('56','赵县','','38','37,38','0','56','','0','0','130133','');
INSERT INTO `web_area` VALUES('57','辛集市','','38','37,38','0','57','','0','0','130181','');
INSERT INTO `web_area` VALUES('58','藁城市','','38','37,38','0','58','','0','0','130182','');
INSERT INTO `web_area` VALUES('59','晋州市','','38','37,38','0','59','','0','0','130183','');
INSERT INTO `web_area` VALUES('60','新乐市','','38','37,38','0','60','','0','0','130184','');
INSERT INTO `web_area` VALUES('61','鹿泉市','','38','37,38','0','61','','0','0','130185','');
INSERT INTO `web_area` VALUES('62','唐山市','','37','37','1','63,64,65,66,67,68,69,70,71,72,73,74,75,76','','0','0','130200','tangshan');
INSERT INTO `web_area` VALUES('63','路南区','','62','37,62','0','63','','0','0','130202','');
INSERT INTO `web_area` VALUES('64','路北区','','62','37,62','0','64','','0','0','130203','');
INSERT INTO `web_area` VALUES('65','古冶区','','62','37,62','0','65','','0','0','130204','');
INSERT INTO `web_area` VALUES('66','开平区','','62','37,62','0','66','','0','0','130205','');
INSERT INTO `web_area` VALUES('67','丰南区','','62','37,62','0','67','','0','0','130207','');
INSERT INTO `web_area` VALUES('68','丰润区','','62','37,62','0','68','','0','0','130208','');
INSERT INTO `web_area` VALUES('69','滦县','','62','37,62','0','69','','0','0','130223','');
INSERT INTO `web_area` VALUES('70','滦南县','','62','37,62','0','70','','0','0','130224','');
INSERT INTO `web_area` VALUES('71','乐亭县','','62','37,62','0','71','','0','0','130225','');
INSERT INTO `web_area` VALUES('72','迁西县','','62','37,62','0','72','','0','0','130227','');
INSERT INTO `web_area` VALUES('73','玉田县','','62','37,62','0','73','','0','0','130229','');
INSERT INTO `web_area` VALUES('74','唐海县','','62','37,62','0','74','','0','0','130230','');
INSERT INTO `web_area` VALUES('75','遵化市','','62','37,62','0','75','','0','0','130281','');
INSERT INTO `web_area` VALUES('76','迁安市','','62','37,62','0','76','','0','0','130283','');
INSERT INTO `web_area` VALUES('77','秦皇岛','','37','37','1','78,79,80,81,82,83,84','','0','0','130300','qinhuangdao');
INSERT INTO `web_area` VALUES('78','海港区','','77','37,77','0','78','','0','0','130302','');
INSERT INTO `web_area` VALUES('79','山海关区','','77','37,77','0','79','','0','0','130303','');
INSERT INTO `web_area` VALUES('80','北戴河区','','77','37,77','0','80','','0','0','130304','');
INSERT INTO `web_area` VALUES('81','青龙满族自治县','','77','37,77','0','81','','0','0','130321','');
INSERT INTO `web_area` VALUES('82','昌黎县','','77','37,77','0','82','','0','0','130322','');
INSERT INTO `web_area` VALUES('83','抚宁县','','77','37,77','0','83','','0','0','130323','');
INSERT INTO `web_area` VALUES('84','卢龙县','','77','37,77','0','84','','0','0','130324','');
INSERT INTO `web_area` VALUES('85','邯郸市','','37','37','1','86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104','','0','0','130400','handan');
INSERT INTO `web_area` VALUES('86','邯山区','','85','37,85','0','86','','0','0','130402','');
INSERT INTO `web_area` VALUES('87','丛台区','','85','37,85','0','87','','0','0','130403','');
INSERT INTO `web_area` VALUES('88','复兴区','','85','37,85','0','88','','0','0','130404','');
INSERT INTO `web_area` VALUES('89','峰峰矿区','','85','37,85','0','89','','0','0','130406','');
INSERT INTO `web_area` VALUES('90','邯郸县','','85','37,85','0','90','','0','0','130421','');
INSERT INTO `web_area` VALUES('91','临漳县','','85','37,85','0','91','','0','0','130423','');
INSERT INTO `web_area` VALUES('92','成安县','','85','37,85','0','92','','0','0','130424','');
INSERT INTO `web_area` VALUES('93','大名县','','85','37,85','0','93','','0','0','130425','');
INSERT INTO `web_area` VALUES('94','涉县','','85','37,85','0','94','','0','0','130426','');
INSERT INTO `web_area` VALUES('95','磁县','','85','37,85','0','95','','0','0','130427','');
INSERT INTO `web_area` VALUES('96','肥乡县','','85','37,85','0','96','','0','0','130428','');
INSERT INTO `web_area` VALUES('97','永年县','','85','37,85','0','97','','0','0','130429','');
INSERT INTO `web_area` VALUES('98','邱县','','85','37,85','0','98','','0','0','130430','');
INSERT INTO `web_area` VALUES('99','鸡泽县','','85','37,85','0','99','','0','0','130431','');
INSERT INTO `web_area` VALUES('100','广平县','','85','37,85','0','100','','0','0','130432','');
INSERT INTO `web_area` VALUES('101','馆陶县','','85','37,85','0','101','','0','0','130433','');
INSERT INTO `web_area` VALUES('102','魏县','','85','37,85','0','102','','0','0','130434','');
INSERT INTO `web_area` VALUES('103','曲周县','','85','37,85','0','103','','0','0','130435','');
INSERT INTO `web_area` VALUES('104','武安市','','85','37,85','0','104','','0','0','130481','');
INSERT INTO `web_area` VALUES('105','邢台市','','37','37','1','106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124','','0','0','130500','xingtai');
INSERT INTO `web_area` VALUES('106','桥东区','','105','37,105','0','106','','0','0','130502','');
INSERT INTO `web_area` VALUES('107','桥西区','','105','37,105','0','107','','0','0','130503','');
INSERT INTO `web_area` VALUES('108','邢台县','','105','37,105','0','108','','0','0','130521','');
INSERT INTO `web_area` VALUES('109','临城县','','105','37,105','0','109','','0','0','130522','');
INSERT INTO `web_area` VALUES('110','内丘县','','105','37,105','0','110','','0','0','130523','');
INSERT INTO `web_area` VALUES('111','柏乡县','','105','37,105','0','111','','0','0','130524','');
INSERT INTO `web_area` VALUES('112','隆尧县','','105','37,105','0','112','','0','0','130525','');
INSERT INTO `web_area` VALUES('113','任县','','105','37,105','0','113','','0','0','130526','');
INSERT INTO `web_area` VALUES('114','南和县','','105','37,105','0','114','','0','0','130527','');
INSERT INTO `web_area` VALUES('115','宁晋县','','105','37,105','0','115','','0','0','130528','');
INSERT INTO `web_area` VALUES('116','巨鹿县','','105','37,105','0','116','','0','0','130529','');
INSERT INTO `web_area` VALUES('117','新河县','','105','37,105','0','117','','0','0','130530','');
INSERT INTO `web_area` VALUES('118','广宗县','','105','37,105','0','118','','0','0','130531','');
INSERT INTO `web_area` VALUES('119','平乡县','','105','37,105','0','119','','0','0','130532','');
INSERT INTO `web_area` VALUES('120','威县','','105','37,105','0','120','','0','0','130533','');
INSERT INTO `web_area` VALUES('121','清河县','','105','37,105','0','121','','0','0','130534','');
INSERT INTO `web_area` VALUES('122','临西县','','105','37,105','0','122','','0','0','130535','');
INSERT INTO `web_area` VALUES('123','南宫市','','105','37,105','0','123','','0','0','130581','');
INSERT INTO `web_area` VALUES('124','沙河市','','105','37,105','0','124','','0','0','130582','');
INSERT INTO `web_area` VALUES('125','保定市','','37','37','1','126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150','','0','0','130600','baoding');
INSERT INTO `web_area` VALUES('126','新市区','','125','37,125','0','126','','0','0','130602','');
INSERT INTO `web_area` VALUES('127','北市区','','125','37,125','0','127','','0','0','130603','');
INSERT INTO `web_area` VALUES('128','南市区','','125','37,125','0','128','','0','0','130604','');
INSERT INTO `web_area` VALUES('129','满城县','','125','37,125','0','129','','0','0','130621','');
INSERT INTO `web_area` VALUES('130','清苑县','','125','37,125','0','130','','0','0','130622','');
INSERT INTO `web_area` VALUES('131','涞水县','','125','37,125','0','131','','0','0','130623','');
INSERT INTO `web_area` VALUES('132','阜平县','','125','37,125','0','132','','0','0','130624','');
INSERT INTO `web_area` VALUES('133','徐水县','','125','37,125','0','133','','0','0','130625','');
INSERT INTO `web_area` VALUES('134','定兴县','','125','37,125','0','134','','0','0','130626','');
INSERT INTO `web_area` VALUES('135','唐县','','125','37,125','0','135','','0','0','130627','');
INSERT INTO `web_area` VALUES('136','高阳县','','125','37,125','0','136','','0','0','130628','');
INSERT INTO `web_area` VALUES('137','容城县','','125','37,125','0','137','','0','0','130629','');
INSERT INTO `web_area` VALUES('138','涞源县','','125','37,125','0','138','','0','0','130630','');
INSERT INTO `web_area` VALUES('139','望都县','','125','37,125','0','139','','0','0','130631','');
INSERT INTO `web_area` VALUES('140','安新县','','125','37,125','0','140','','0','0','130632','');
INSERT INTO `web_area` VALUES('141','易县','','125','37,125','0','141','','0','0','130633','');
INSERT INTO `web_area` VALUES('142','曲阳县','','125','37,125','0','142','','0','0','130634','');
INSERT INTO `web_area` VALUES('143','蠡县','','125','37,125','0','143','','0','0','130635','');
INSERT INTO `web_area` VALUES('144','顺平县','','125','37,125','0','144','','0','0','130636','');
INSERT INTO `web_area` VALUES('145','博野县','','125','37,125','0','145','','0','0','130637','');
INSERT INTO `web_area` VALUES('146','雄县','','125','37,125','0','146','','0','0','130638','');
INSERT INTO `web_area` VALUES('147','涿州市','','125','37,125','0','147','','0','0','130681','');
INSERT INTO `web_area` VALUES('148','定州市','','125','37,125','0','148','','0','0','130682','');
INSERT INTO `web_area` VALUES('149','安国市','','125','37,125','0','149','','0','0','130683','');
INSERT INTO `web_area` VALUES('150','高碑店市','','125','37,125','0','150','','0','0','130684','');
INSERT INTO `web_area` VALUES('151','张家口','','37','37','1','152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168','','0','0','130700','zhangjiakou');
INSERT INTO `web_area` VALUES('152','桥东区','','151','37,151','0','152','','0','0','130702','');
INSERT INTO `web_area` VALUES('153','桥西区','','151','37,151','0','153','','0','0','130703','');
INSERT INTO `web_area` VALUES('154','宣化区','','151','37,151','0','154','','0','0','130705','');
INSERT INTO `web_area` VALUES('155','下花园区','','151','37,151','0','155','','0','0','130706','');
INSERT INTO `web_area` VALUES('156','宣化县','','151','37,151','0','156','','0','0','130721','');
INSERT INTO `web_area` VALUES('157','张北县','','151','37,151','0','157','','0','0','130722','');
INSERT INTO `web_area` VALUES('158','康保县','','151','37,151','0','158','','0','0','130723','');
INSERT INTO `web_area` VALUES('159','沽源县','','151','37,151','0','159','','0','0','130724','');
INSERT INTO `web_area` VALUES('160','尚义县','','151','37,151','0','160','','0','0','130725','');
INSERT INTO `web_area` VALUES('161','蔚县','','151','37,151','0','161','','0','0','130726','');
INSERT INTO `web_area` VALUES('162','阳原县','','151','37,151','0','162','','0','0','130727','');
INSERT INTO `web_area` VALUES('163','怀安县','','151','37,151','0','163','','0','0','130728','');
INSERT INTO `web_area` VALUES('164','万全县','','151','37,151','0','164','','0','0','130729','');
INSERT INTO `web_area` VALUES('165','怀来县','','151','37,151','0','165','','0','0','130730','');
INSERT INTO `web_area` VALUES('166','涿鹿县','','151','37,151','0','166','','0','0','130731','');
INSERT INTO `web_area` VALUES('167','赤城县','','151','37,151','0','167','','0','0','130732','');
INSERT INTO `web_area` VALUES('168','崇礼县','','151','37,151','0','168','','0','0','130733','');
INSERT INTO `web_area` VALUES('169','承德市','','37','37','1','170,171,172,173,174,175,176,177,178,179,180','','0','0','130800','chengde');
INSERT INTO `web_area` VALUES('170','双桥区','','169','37,169','0','170','','0','0','130802','');
INSERT INTO `web_area` VALUES('171','双滦区','','169','37,169','0','171','','0','0','130803','');
INSERT INTO `web_area` VALUES('172','鹰手营子矿区','','169','37,169','0','172','','0','0','130804','');
INSERT INTO `web_area` VALUES('173','承德县','','169','37,169','0','173','','0','0','130821','');
INSERT INTO `web_area` VALUES('174','兴隆县','','169','37,169','0','174','','0','0','130822','');
INSERT INTO `web_area` VALUES('175','平泉县','','169','37,169','0','175','','0','0','130823','');
INSERT INTO `web_area` VALUES('176','滦平县','','169','37,169','0','176','','0','0','130824','');
INSERT INTO `web_area` VALUES('177','隆化县','','169','37,169','0','177','','0','0','130825','');
INSERT INTO `web_area` VALUES('178','丰宁满族自治县','','169','37,169','0','178','','0','0','130826','');
INSERT INTO `web_area` VALUES('179','宽城满族自治县','','169','37,169','0','179','','0','0','130827','');
INSERT INTO `web_area` VALUES('180','围场满族蒙古族自治县','','169','37,169','0','180','','0','0','130828','');
INSERT INTO `web_area` VALUES('181','沧州市','','37','37','1','182,183,184,185,186,187,188,189,190,191,192,193,194,195,196,197','','0','0','130900','cangzhou');
INSERT INTO `web_area` VALUES('182','新华区','','181','37,181','0','182','','0','0','130902','');
INSERT INTO `web_area` VALUES('183','运河区','','181','37,181','0','183','','0','0','130903','');
INSERT INTO `web_area` VALUES('184','沧县','','181','37,181','0','184','','0','0','130921','');
INSERT INTO `web_area` VALUES('185','青县','','181','37,181','0','185','','0','0','130922','');
INSERT INTO `web_area` VALUES('186','东光县','','181','37,181','0','186','','0','0','130923','');
INSERT INTO `web_area` VALUES('187','海兴县','','181','37,181','0','187','','0','0','130924','');
INSERT INTO `web_area` VALUES('188','盐山县','','181','37,181','0','188','','0','0','130925','');
INSERT INTO `web_area` VALUES('189','肃宁县','','181','37,181','0','189','','0','0','130926','');
INSERT INTO `web_area` VALUES('190','南皮县','','181','37,181','0','190','','0','0','130927','');
INSERT INTO `web_area` VALUES('191','吴桥县','','181','37,181','0','191','','0','0','130928','');
INSERT INTO `web_area` VALUES('192','献县','','181','37,181','0','192','','0','0','130929','');
INSERT INTO `web_area` VALUES('193','孟村回族自治县','','181','37,181','0','193','','0','0','130930','');
INSERT INTO `web_area` VALUES('194','泊头市','','181','37,181','0','194','','0','0','130981','');
INSERT INTO `web_area` VALUES('195','任丘市','','181','37,181','0','195','','0','0','130982','');
INSERT INTO `web_area` VALUES('196','黄骅市','','181','37,181','0','196','','0','0','130983','');
INSERT INTO `web_area` VALUES('197','河间市','','181','37,181','0','197','','0','0','130984','');
INSERT INTO `web_area` VALUES('198','廊坊市','','37','37','1','199,200,201,202,203,204,205,206,207,208','','0','0','131000','langfang');
INSERT INTO `web_area` VALUES('199','安次区','','198','37,198','0','199','','0','0','131002','');
INSERT INTO `web_area` VALUES('200','广阳区','','198','37,198','0','200','','0','0','131003','');
INSERT INTO `web_area` VALUES('201','固安县','','198','37,198','0','201','','0','0','131022','');
INSERT INTO `web_area` VALUES('202','永清县','','198','37,198','0','202','','0','0','131023','');
INSERT INTO `web_area` VALUES('203','香河县','','198','37,198','0','203','','0','0','131024','');
INSERT INTO `web_area` VALUES('204','大城县','','198','37,198','0','204','','0','0','131025','');
INSERT INTO `web_area` VALUES('205','文安县','','198','37,198','0','205','','0','0','131026','');
INSERT INTO `web_area` VALUES('206','大厂回族自治县','','198','37,198','0','206','','0','0','131028','');
INSERT INTO `web_area` VALUES('207','霸州市','','198','37,198','0','207','','0','0','131081','');
INSERT INTO `web_area` VALUES('208','三河市','','198','37,198','0','208','','0','0','131082','');
INSERT INTO `web_area` VALUES('209','衡水市','','37','37','1','210,211,212,213,214,215,216,217,218,219,220','','0','0','131100','hengshui');
INSERT INTO `web_area` VALUES('210','桃城区','','209','37,209','0','210','','0','0','131102','');
INSERT INTO `web_area` VALUES('211','枣强县','','209','37,209','0','211','','0','0','131121','');
INSERT INTO `web_area` VALUES('212','武邑县','','209','37,209','0','212','','0','0','131122','');
INSERT INTO `web_area` VALUES('213','武强县','','209','37,209','0','213','','0','0','131123','');
INSERT INTO `web_area` VALUES('214','饶阳县','','209','37,209','0','214','','0','0','131124','');
INSERT INTO `web_area` VALUES('215','安平县','','209','37,209','0','215','','0','0','131125','');
INSERT INTO `web_area` VALUES('216','故城县','','209','37,209','0','216','','0','0','131126','');
INSERT INTO `web_area` VALUES('217','景县','','209','37,209','0','217','','0','0','131127','');
INSERT INTO `web_area` VALUES('218','阜城县','','209','37,209','0','218','','0','0','131128','');
INSERT INTO `web_area` VALUES('219','冀州市','','209','37,209','0','219','','0','0','131181','');
INSERT INTO `web_area` VALUES('220','深州市','','209','37,209','0','220','','0','0','131182','');
INSERT INTO `web_area` VALUES('221','山西','','0','0','1','222,233,245,251,265,272,279,291,305,320,338,223,224,225,226,227,228,229,230,231,232,290','','17','0','140000','shanx');
INSERT INTO `web_area` VALUES('222','太原市','','221','221','1','223,224,225,226,227,228,229,230,231,232','','0','0','140100','taiyuan');
INSERT INTO `web_area` VALUES('223','小店区','','222','221,222','0','223','','0','0','140105','');
INSERT INTO `web_area` VALUES('224','迎泽区','','222','221,222','0','224','','0','0','140106','');
INSERT INTO `web_area` VALUES('225','杏花岭区','','222','221,222','0','225','','0','0','140107','');
INSERT INTO `web_area` VALUES('226','尖草坪区','','222','221,222','0','226','','0','0','140108','');
INSERT INTO `web_area` VALUES('227','万柏林区','','222','221,222','0','227','','0','0','140109','');
INSERT INTO `web_area` VALUES('228','晋源区','','222','221,222','0','228','','0','0','140110','');
INSERT INTO `web_area` VALUES('229','清徐县','','222','221,222','0','229','','0','0','140121','');
INSERT INTO `web_area` VALUES('230','阳曲县','','222','221,222','0','230','','0','0','140122','');
INSERT INTO `web_area` VALUES('231','娄烦县','','222','221,222','0','231','','0','0','140123','');
INSERT INTO `web_area` VALUES('232','古交市','','222','221,222','0','232','','0','0','140181','');
INSERT INTO `web_area` VALUES('233','大同市','','221','221','1','234,235,236,237,238,239,240,241,242,243,244','','0','0','140200','datong');
INSERT INTO `web_area` VALUES('234','城区','','233','221,233','0','234','','0','0','140202','');
INSERT INTO `web_area` VALUES('235','矿区','','233','221,233','0','235','','0','0','140203','');
INSERT INTO `web_area` VALUES('236','南郊区','','233','221,233','0','236','','0','0','140211','');
INSERT INTO `web_area` VALUES('237','新荣区','','233','221,233','0','237','','0','0','140212','');
INSERT INTO `web_area` VALUES('238','阳高县','','233','221,233','0','238','','0','0','140221','');
INSERT INTO `web_area` VALUES('239','天镇县','','233','221,233','0','239','','0','0','140222','');
INSERT INTO `web_area` VALUES('240','广灵县','','233','221,233','0','240','','0','0','140223','');
INSERT INTO `web_area` VALUES('241','灵丘县','','233','221,233','0','241','','0','0','140224','');
INSERT INTO `web_area` VALUES('242','浑源县','','233','221,233','0','242','','0','0','140225','');
INSERT INTO `web_area` VALUES('243','左云县','','233','221,233','0','243','','0','0','140226','');
INSERT INTO `web_area` VALUES('244','大同县','','233','221,233','0','244','','0','0','140227','');
INSERT INTO `web_area` VALUES('245','阳泉市','','221','221','1','246,247,248,249,250','','0','0','140300','yangquan');
INSERT INTO `web_area` VALUES('246','城区','','245','221,245','0','246','','0','0','140302','');
INSERT INTO `web_area` VALUES('247','矿区','','245','221,245','0','247','','0','0','140303','');
INSERT INTO `web_area` VALUES('248','郊区','','245','221,245','0','248','','0','0','140311','');
INSERT INTO `web_area` VALUES('249','平定县','','245','221,245','0','249','','0','0','140321','');
INSERT INTO `web_area` VALUES('250','盂县','','245','221,245','0','250','','0','0','140322','');
INSERT INTO `web_area` VALUES('251','长治市','','221','221','1','252,253,254,255,256,257,258,259,260,261,262,263,264','','0','0','140400','changzhi');
INSERT INTO `web_area` VALUES('252','城区','','251','221,251','0','252','','0','0','140402','');
INSERT INTO `web_area` VALUES('253','郊区','','251','221,251','0','253','','0','0','140411','');
INSERT INTO `web_area` VALUES('254','长治县','','251','221,251','0','254','','0','0','140421','');
INSERT INTO `web_area` VALUES('255','襄垣县','','251','221,251','0','255','','0','0','140423','');
INSERT INTO `web_area` VALUES('256','屯留县','','251','221,251','0','256','','0','0','140424','');
INSERT INTO `web_area` VALUES('257','平顺县','','251','221,251','0','257','','0','0','140425','');
INSERT INTO `web_area` VALUES('258','黎城县','','251','221,251','0','258','','0','0','140426','');
INSERT INTO `web_area` VALUES('259','壶关县','','251','221,251','0','259','','0','0','140427','');
INSERT INTO `web_area` VALUES('260','长子县','','251','221,251','0','260','','0','0','140428','');
INSERT INTO `web_area` VALUES('261','武乡县','','251','221,251','0','261','','0','0','140429','');
INSERT INTO `web_area` VALUES('262','沁县','','251','221,251','0','262','','0','0','140430','');
INSERT INTO `web_area` VALUES('263','沁源县','','251','221,251','0','263','','0','0','140431','');
INSERT INTO `web_area` VALUES('264','潞城市','','251','221,251','0','264','','0','0','140481','');
INSERT INTO `web_area` VALUES('265','晋城市','','221','221','1','266,267,268,269,270,271','','0','0','140500','jincheng');
INSERT INTO `web_area` VALUES('266','城区','','265','221,265','0','266','','0','0','140502','');
INSERT INTO `web_area` VALUES('267','沁水县','','265','221,265','0','267','','0','0','140521','');
INSERT INTO `web_area` VALUES('268','阳城县','','265','221,265','0','268','','0','0','140522','');
INSERT INTO `web_area` VALUES('269','陵川县','','265','221,265','0','269','','0','0','140524','');
INSERT INTO `web_area` VALUES('270','泽州县','','265','221,265','0','270','','0','0','140525','');
INSERT INTO `web_area` VALUES('271','高平市','','265','221,265','0','271','','0','0','140581','');
INSERT INTO `web_area` VALUES('272','朔州市','','221','221','1','273,274,275,276,277,278','','0','0','140600','shuozhou');
INSERT INTO `web_area` VALUES('273','朔城区','','272','221,272','0','273','','0','0','140602','');
INSERT INTO `web_area` VALUES('274','平鲁区','','272','221,272','0','274','','0','0','140603','');
INSERT INTO `web_area` VALUES('275','山阴县','','272','221,272','0','275','','0','0','140621','');
INSERT INTO `web_area` VALUES('276','应县','','272','221,272','0','276','','0','0','140622','');
INSERT INTO `web_area` VALUES('277','右玉县','','272','221,272','0','277','','0','0','140623','');
INSERT INTO `web_area` VALUES('278','怀仁县','','272','221,272','0','278','','0','0','140624','');
INSERT INTO `web_area` VALUES('279','晋中市','','221','221','1','280,281,282,283,284,285,286,287,288,289','','0','0','140700','jinzhong');
INSERT INTO `web_area` VALUES('280','榆次区','','279','221,279','0','280','','0','0','140702','');
INSERT INTO `web_area` VALUES('281','榆社县','','279','221,279','0','281','','0','0','140721','');
INSERT INTO `web_area` VALUES('282','左权县','','279','221,279','0','282','','0','0','140722','');
INSERT INTO `web_area` VALUES('283','和顺县','','279','221,279','0','283','','0','0','140723','');
INSERT INTO `web_area` VALUES('284','昔阳县','','279','221,279','0','284','','0','0','140724','');
INSERT INTO `web_area` VALUES('285','寿阳县','','279','221,279','0','285','','0','0','140725','');
INSERT INTO `web_area` VALUES('286','太谷县','','279','221,279','0','286','','0','0','140726','');
INSERT INTO `web_area` VALUES('287','祁县','','279','221,279','0','287','','0','0','140727','');
INSERT INTO `web_area` VALUES('288','平遥县','','279','221,279','0','288','','0','0','140728','');
INSERT INTO `web_area` VALUES('289','灵石县','','279','221,279','0','289','','0','0','140729','');
INSERT INTO `web_area` VALUES('290','介休市','','221','221','0','290','','0','0','140781','jiexiu');
INSERT INTO `web_area` VALUES('291','运城市','','221','221','1','292,293,294,295,296,297,298,299,300,301,302,303,304','','0','0','140800','yuncheng');
INSERT INTO `web_area` VALUES('292','盐湖区','','291','221,291','0','292','','0','0','140802','');
INSERT INTO `web_area` VALUES('293','临猗县','','291','221,291','0','293','','0','0','140821','');
INSERT INTO `web_area` VALUES('294','万荣县','','291','221,291','0','294','','0','0','140822','');
INSERT INTO `web_area` VALUES('295','闻喜县','','291','221,291','0','295','','0','0','140823','');
INSERT INTO `web_area` VALUES('296','稷山县','','291','221,291','0','296','','0','0','140824','');
INSERT INTO `web_area` VALUES('297','新绛县','','291','221,291','0','297','','0','0','140825','');
INSERT INTO `web_area` VALUES('298','绛县','','291','221,291','0','298','','0','0','140826','');
INSERT INTO `web_area` VALUES('299','垣曲县','','291','221,291','0','299','','0','0','140827','');
INSERT INTO `web_area` VALUES('300','夏县','','291','221,291','0','300','','0','0','140828','');
INSERT INTO `web_area` VALUES('301','平陆县','','291','221,291','0','301','','0','0','140829','');
INSERT INTO `web_area` VALUES('302','芮城县','','291','221,291','0','302','','0','0','140830','');
INSERT INTO `web_area` VALUES('303','永济市','','291','221,291','0','303','','0','0','140881','');
INSERT INTO `web_area` VALUES('304','河津市','','291','221,291','0','304','','0','0','140882','');
INSERT INTO `web_area` VALUES('305','忻州市','','221','221','1','306,307,308,309,310,311,312,313,314,315,316,317,318,319','','0','0','140900','xinzhou');
INSERT INTO `web_area` VALUES('306','忻府区','','305','221,305','0','306','','0','0','140902','');
INSERT INTO `web_area` VALUES('307','定襄县','','305','221,305','0','307','','0','0','140921','');
INSERT INTO `web_area` VALUES('308','五台县','','305','221,305','0','308','','0','0','140922','');
INSERT INTO `web_area` VALUES('309','代县','','305','221,305','0','309','','0','0','140923','');
INSERT INTO `web_area` VALUES('310','繁峙县','','305','221,305','0','310','','0','0','140924','');
INSERT INTO `web_area` VALUES('311','宁武县','','305','221,305','0','311','','0','0','140925','');
INSERT INTO `web_area` VALUES('312','静乐县','','305','221,305','0','312','','0','0','140926','');
INSERT INTO `web_area` VALUES('313','神池县','','305','221,305','0','313','','0','0','140927','');
INSERT INTO `web_area` VALUES('314','五寨县','','305','221,305','0','314','','0','0','140928','');
INSERT INTO `web_area` VALUES('315','岢岚县','','305','221,305','0','315','','0','0','140929','');
INSERT INTO `web_area` VALUES('316','河曲县','','305','221,305','0','316','','0','0','140930','');
INSERT INTO `web_area` VALUES('317','保德县','','305','221,305','0','317','','0','0','140931','');
INSERT INTO `web_area` VALUES('318','偏关县','','305','221,305','0','318','','0','0','140932','');
INSERT INTO `web_area` VALUES('319','原平市','','305','221,305','0','319','','0','0','140981','');
INSERT INTO `web_area` VALUES('320','临汾市','','221','221','1','321,322,323,324,325,326,327,328,329,330,331,332,333,334,335,336,337','','0','0','141000','linfen');
INSERT INTO `web_area` VALUES('321','尧都区','','320','221,320','0','321','','0','0','141002','');
INSERT INTO `web_area` VALUES('322','曲沃县','','320','221,320','0','322','','0','0','141021','');
INSERT INTO `web_area` VALUES('323','翼城县','','320','221,320','0','323','','0','0','141022','');
INSERT INTO `web_area` VALUES('324','襄汾县','','320','221,320','0','324','','0','0','141023','');
INSERT INTO `web_area` VALUES('325','洪洞县','','320','221,320','0','325','','0','0','141024','');
INSERT INTO `web_area` VALUES('326','古县','','320','221,320','0','326','','0','0','141025','');
INSERT INTO `web_area` VALUES('327','安泽县','','320','221,320','0','327','','0','0','141026','');
INSERT INTO `web_area` VALUES('328','浮山县','','320','221,320','0','328','','0','0','141027','');
INSERT INTO `web_area` VALUES('329','吉县','','320','221,320','0','329','','0','0','141028','');
INSERT INTO `web_area` VALUES('330','乡宁县','','320','221,320','0','330','','0','0','141029','');
INSERT INTO `web_area` VALUES('331','大宁县','','320','221,320','0','331','','0','0','141030','');
INSERT INTO `web_area` VALUES('332','隰县','','320','221,320','0','332','','0','0','141031','');
INSERT INTO `web_area` VALUES('333','永和县','','320','221,320','0','333','','0','0','141032','');
INSERT INTO `web_area` VALUES('334','蒲县','','320','221,320','0','334','','0','0','141033','');
INSERT INTO `web_area` VALUES('335','汾西县','','320','221,320','0','335','','0','0','141034','');
INSERT INTO `web_area` VALUES('336','侯马市','','320','221,320','0','336','','0','0','141081','');
INSERT INTO `web_area` VALUES('337','霍州市','','320','221,320','0','337','','0','0','141082','');
INSERT INTO `web_area` VALUES('338','吕梁市','','221','221','1','339,340,341,342,343,344,345,346,347,348,349,350,351','','0','0','141100','lvliang');
INSERT INTO `web_area` VALUES('339','离石区','','338','221,338','0','339','','0','0','141102','');
INSERT INTO `web_area` VALUES('340','文水县','','338','221,338','0','340','','0','0','141121','');
INSERT INTO `web_area` VALUES('341','交城县','','338','221,338','0','341','','0','0','141122','');
INSERT INTO `web_area` VALUES('342','兴县','','338','221,338','0','342','','0','0','141123','');
INSERT INTO `web_area` VALUES('343','临县','','338','221,338','0','343','','0','0','141124','');
INSERT INTO `web_area` VALUES('344','柳林县','','338','221,338','0','344','','0','0','141125','');
INSERT INTO `web_area` VALUES('345','石楼县','','338','221,338','0','345','','0','0','141126','');
INSERT INTO `web_area` VALUES('346','岚县','','338','221,338','0','346','','0','0','141127','');
INSERT INTO `web_area` VALUES('347','方山县','','338','221,338','0','347','','0','0','141128','');
INSERT INTO `web_area` VALUES('348','中阳县','','338','221,338','0','348','','0','0','141129','');
INSERT INTO `web_area` VALUES('349','交口县','','338','221,338','0','349','','0','0','141130','');
INSERT INTO `web_area` VALUES('350','孝义市','','338','221,338','0','350','','0','0','141181','');
INSERT INTO `web_area` VALUES('351','汾阳市','','338','221,338','0','351','','0','0','141182','');
INSERT INTO `web_area` VALUES('352','内蒙古','','0','0','1','353,363,373,377,390,399,408,422,430,442,449,462,354,355,356,357,358,359,360,361,362','','19','0','150000','neimenggu');
INSERT INTO `web_area` VALUES('353','呼和浩特','','352','352','1','354,355,356,357,358,359,360,361,362','','0','0','150100','huhehaote');
INSERT INTO `web_area` VALUES('354','新城区','','353','352,353','0','354','','0','0','150102','');
INSERT INTO `web_area` VALUES('355','回民区','','353','352,353','0','355','','0','0','150103','');
INSERT INTO `web_area` VALUES('356','玉泉区','','353','352,353','0','356','','0','0','150104','');
INSERT INTO `web_area` VALUES('357','赛罕区','','353','352,353','0','357','','0','0','150105','');
INSERT INTO `web_area` VALUES('358','土默特左旗','','353','352,353','0','358','','0','0','150121','');
INSERT INTO `web_area` VALUES('359','托克托县','','353','352,353','0','359','','0','0','150122','');
INSERT INTO `web_area` VALUES('360','和林格尔县','','353','352,353','0','360','','0','0','150123','');
INSERT INTO `web_area` VALUES('361','清水河县','','353','352,353','0','361','','0','0','150124','');
INSERT INTO `web_area` VALUES('362','武川县','','353','352,353','0','362','','0','0','150125','');
INSERT INTO `web_area` VALUES('363','包头市','','352','352','1','364,365,366,367,368,369,370,371,372','','0','0','150200','baotou');
INSERT INTO `web_area` VALUES('364','东河区','','363','352,363','0','364','','0','0','150202','');
INSERT INTO `web_area` VALUES('365','昆都仑区','','363','352,363','0','365','','0','0','150203','');
INSERT INTO `web_area` VALUES('366','青山区','','363','352,363','0','366','','0','0','150204','');
INSERT INTO `web_area` VALUES('367','石拐区','','363','352,363','0','367','','0','0','150205','');
INSERT INTO `web_area` VALUES('368','白云鄂博矿区','','363','352,363','0','368','','0','0','150206','');
INSERT INTO `web_area` VALUES('369','九原区','','363','352,363','0','369','','0','0','150207','');
INSERT INTO `web_area` VALUES('370','土默特右旗','','363','352,363','0','370','','0','0','150221','');
INSERT INTO `web_area` VALUES('371','固阳县','','363','352,363','0','371','','0','0','150222','');
INSERT INTO `web_area` VALUES('372','达尔罕茂明安联合旗','','363','352,363','0','372','','0','0','150223','');
INSERT INTO `web_area` VALUES('373','乌海市','','352','352','1','374,375,376','','0','0','150300','wuhai');
INSERT INTO `web_area` VALUES('374','海勃湾区','','373','352,373','0','374','','0','0','150302','');
INSERT INTO `web_area` VALUES('375','海南区','','373','352,373','0','375','','0','0','150303','');
INSERT INTO `web_area` VALUES('376','乌达区','','373','352,373','0','376','','0','0','150304','');
INSERT INTO `web_area` VALUES('377','赤峰市','','352','352','1','378,379,380,381,382,383,384,385,386,387,388,389','','0','0','150400','chifeng');
INSERT INTO `web_area` VALUES('378','红山区','','377','352,377','0','378','','0','0','150402','');
INSERT INTO `web_area` VALUES('379','元宝山区','','377','352,377','0','379','','0','0','150403','');
INSERT INTO `web_area` VALUES('380','松山区','','377','352,377','0','380','','0','0','150404','');
INSERT INTO `web_area` VALUES('381','阿鲁科','','377','352,377','0','381','','0','0','150421','');
INSERT INTO `web_area` VALUES('382','巴林左旗','','377','352,377','0','382','','0','0','150422','');
INSERT INTO `web_area` VALUES('383','巴林右旗','','377','352,377','0','383','','0','0','150423','');
INSERT INTO `web_area` VALUES('384','林西县','','377','352,377','0','384','','0','0','150424','');
INSERT INTO `web_area` VALUES('385','克什克腾旗','','377','352,377','0','385','','0','0','150425','');
INSERT INTO `web_area` VALUES('386','翁牛特旗','','377','352,377','0','386','','0','0','150426','');
INSERT INTO `web_area` VALUES('387','喀喇沁旗','','377','352,377','0','387','','0','0','150428','');
INSERT INTO `web_area` VALUES('388','宁城县','','377','352,377','0','388','','0','0','150429','');
INSERT INTO `web_area` VALUES('389','敖汉旗','','377','352,377','0','389','','0','0','150430','');
INSERT INTO `web_area` VALUES('390','通辽市','','352','352','1','391,392,393,394,395,396,397,398','','0','0','150500','tongliao');
INSERT INTO `web_area` VALUES('391','科尔沁区','','390','352,390','0','391','','0','0','150502','');
INSERT INTO `web_area` VALUES('392','科尔沁左翼中旗','','390','352,390','0','392','','0','0','150521','');
INSERT INTO `web_area` VALUES('393','科尔沁左翼后旗','','390','352,390','0','393','','0','0','150522','');
INSERT INTO `web_area` VALUES('394','开鲁县','','390','352,390','0','394','','0','0','150523','');
INSERT INTO `web_area` VALUES('395','库伦旗','','390','352,390','0','395','','0','0','150524','');
INSERT INTO `web_area` VALUES('396','奈曼旗','','390','352,390','0','396','','0','0','150525','');
INSERT INTO `web_area` VALUES('397','扎鲁特旗','','390','352,390','0','397','','0','0','150526','');
INSERT INTO `web_area` VALUES('398','霍林郭勒市','','390','352,390','0','398','','0','0','150581','');
INSERT INTO `web_area` VALUES('399','鄂尔多斯','','352','352','1','400,401,402,403,404,405,406,407','','0','0','150600','eerduosi');
INSERT INTO `web_area` VALUES('400','东胜区','','399','352,399','0','400','','0','0','150602','');
INSERT INTO `web_area` VALUES('401','达拉特旗','','399','352,399','0','401','','0','0','150621','');
INSERT INTO `web_area` VALUES('402','准格尔旗','','399','352,399','0','402','','0','0','150622','');
INSERT INTO `web_area` VALUES('403','鄂托克前旗','','399','352,399','0','403','','0','0','150623','');
INSERT INTO `web_area` VALUES('404','鄂托克旗','','399','352,399','0','404','','0','0','150624','');
INSERT INTO `web_area` VALUES('405','杭锦旗','','399','352,399','0','405','','0','0','150625','');
INSERT INTO `web_area` VALUES('406','乌审旗','','399','352,399','0','406','','0','0','150626','');
INSERT INTO `web_area` VALUES('407','伊金霍洛旗','','399','352,399','0','407','','0','0','150627','');
INSERT INTO `web_area` VALUES('408','呼伦贝尔','','352','352','1','409,410,411,412,413,414,415,416,417,418,419,420,421','','0','0','150700','hulunbeier');
INSERT INTO `web_area` VALUES('409','海拉尔区','','408','352,408','0','409','','0','0','150702','');
INSERT INTO `web_area` VALUES('410','阿荣旗','','408','352,408','0','410','','0','0','150721','');
INSERT INTO `web_area` VALUES('411','莫力达瓦达斡尔族自治旗','','408','352,408','0','411','','0','0','150722','');
INSERT INTO `web_area` VALUES('412','鄂伦春自治旗','','408','352,408','0','412','','0','0','150723','');
INSERT INTO `web_area` VALUES('413','鄂温克族自治旗','','408','352,408','0','413','','0','0','150724','');
INSERT INTO `web_area` VALUES('414','陈巴尔虎旗','','408','352,408','0','414','','0','0','150725','');
INSERT INTO `web_area` VALUES('415','新巴尔虎左旗','','408','352,408','0','415','','0','0','150726','');
INSERT INTO `web_area` VALUES('416','新巴尔虎右旗','','408','352,408','0','416','','0','0','150727','');
INSERT INTO `web_area` VALUES('417','满洲里市','','408','352,408','0','417','','0','0','150781','');
INSERT INTO `web_area` VALUES('418','牙克石市','','408','352,408','0','418','','0','0','150782','');
INSERT INTO `web_area` VALUES('419','扎兰屯市','','408','352,408','0','419','','0','0','150783','');
INSERT INTO `web_area` VALUES('420','额尔古纳市','','408','352,408','0','420','','0','0','150784','');
INSERT INTO `web_area` VALUES('421','根河市','','408','352,408','0','421','','0','0','150785','');
INSERT INTO `web_area` VALUES('422','巴彦淖尔','','352','352','1','423,424,425,426,427,428,429','','0','0','150800','bayanneer');
INSERT INTO `web_area` VALUES('423','临河区','','422','352,422','0','423','','0','0','150802','');
INSERT INTO `web_area` VALUES('424','五原县','','422','352,422','0','424','','0','0','150821','');
INSERT INTO `web_area` VALUES('425','磴口县','','422','352,422','0','425','','0','0','150822','');
INSERT INTO `web_area` VALUES('426','乌拉特前旗','','422','352,422','0','426','','0','0','150823','');
INSERT INTO `web_area` VALUES('427','乌拉特中旗','','422','352,422','0','427','','0','0','150824','');
INSERT INTO `web_area` VALUES('428','乌拉特后旗','','422','352,422','0','428','','0','0','150825','');
INSERT INTO `web_area` VALUES('429','杭锦后旗','','422','352,422','0','429','','0','0','150826','');
INSERT INTO `web_area` VALUES('430','乌兰察布','','352','352','1','431,432,433,434,435,436,437,438,439,440,441','','0','0','150900','wulanchabu');
INSERT INTO `web_area` VALUES('431','集宁区','','430','352,430','0','431','','0','0','150902','');
INSERT INTO `web_area` VALUES('432','卓资县','','430','352,430','0','432','','0','0','150921','');
INSERT INTO `web_area` VALUES('433','化德县','','430','352,430','0','433','','0','0','150922','');
INSERT INTO `web_area` VALUES('434','商都县','','430','352,430','0','434','','0','0','150923','');
INSERT INTO `web_area` VALUES('435','兴和县','','430','352,430','0','435','','0','0','150924','');
INSERT INTO `web_area` VALUES('436','凉城县','','430','352,430','0','436','','0','0','150925','');
INSERT INTO `web_area` VALUES('437','察哈尔右翼前旗','','430','352,430','0','437','','0','0','150926','');
INSERT INTO `web_area` VALUES('438','察哈尔右翼中旗','','430','352,430','0','438','','0','0','150927','');
INSERT INTO `web_area` VALUES('439','察哈尔右翼后旗','','430','352,430','0','439','','0','0','150928','');
INSERT INTO `web_area` VALUES('440','四子王旗','','430','352,430','0','440','','0','0','150929','');
INSERT INTO `web_area` VALUES('441','丰镇市','','430','352,430','0','441','','0','0','150981','');
INSERT INTO `web_area` VALUES('442','兴安盟','','352','352','1','443,444,445,446,447,448','','0','0','152200','xinganmeng');
INSERT INTO `web_area` VALUES('443','乌兰浩特市','','442','352,442','0','443','','0','0','152201','');
INSERT INTO `web_area` VALUES('444','阿尔山','','442','352,442','0','444','','0','0','152202','');
INSERT INTO `web_area` VALUES('445','科尔沁右翼前旗','','442','352,442','0','445','','0','0','152221','');
INSERT INTO `web_area` VALUES('446','科尔沁右翼中旗','','442','352,442','0','446','','0','0','152222','');
INSERT INTO `web_area` VALUES('447','扎赉特旗','','442','352,442','0','447','','0','0','152223','');
INSERT INTO `web_area` VALUES('448','突泉县','','442','352,442','0','448','','0','0','152224','');
INSERT INTO `web_area` VALUES('449','锡林郭勒','','352','352','1','450,451,452,453,454,455,456,457,458,459,460,461','','0','0','152500','xilinguolemeng');
INSERT INTO `web_area` VALUES('450','二连浩特市','','449','352,449','0','450','','0','0','152501','');
INSERT INTO `web_area` VALUES('451','锡林浩特市','','449','352,449','0','451','','0','0','152502','');
INSERT INTO `web_area` VALUES('452','阿巴嘎','','449','352,449','0','452','','0','0','152522','');
INSERT INTO `web_area` VALUES('453','苏尼特左旗','','449','352,449','0','453','','0','0','152523','');
INSERT INTO `web_area` VALUES('454','苏尼特右旗','','449','352,449','0','454','','0','0','152524','');
INSERT INTO `web_area` VALUES('455','东乌珠穆沁旗','','449','352,449','0','455','','0','0','152525','');
INSERT INTO `web_area` VALUES('456','西乌珠穆沁旗','','449','352,449','0','456','','0','0','152526','');
INSERT INTO `web_area` VALUES('457','太仆寺旗','','449','352,449','0','457','','0','0','152527','');
INSERT INTO `web_area` VALUES('458','镶黄旗','','449','352,449','0','458','','0','0','152528','');
INSERT INTO `web_area` VALUES('459','正镶白旗','','449','352,449','0','459','','0','0','152529','');
INSERT INTO `web_area` VALUES('460','正蓝旗','','449','352,449','0','460','','0','0','152530','');
INSERT INTO `web_area` VALUES('461','多伦县','','449','352,449','0','461','','0','0','152531','');
INSERT INTO `web_area` VALUES('462','阿拉善','','352','352','1','463,464,465','','0','0','152900','alashanmeng');
INSERT INTO `web_area` VALUES('463','阿拉善','','462','352,462','0','463','','0','0','152921','');
INSERT INTO `web_area` VALUES('464','阿拉善','','462','352,462','0','464','','0','0','152922','');
INSERT INTO `web_area` VALUES('465','额济纳旗','','462','352,462','0','465','','0','0','152923','');
INSERT INTO `web_area` VALUES('466','辽宁','','0','0','1','467,481,492,500,508,515,522,530,537,545,553,558,566,574,468,469,470,471,472,473,474,475,476,477,478,479,480','','18','0','210000','liaoning');
INSERT INTO `web_area` VALUES('467','沈阳市','','466','466','1','468,469,470,471,472,473,474,475,476,477,478,479,480','','0','0','210100','shenyang');
INSERT INTO `web_area` VALUES('468','和平区','','467','466,467','0','468','','0','0','210102','');
INSERT INTO `web_area` VALUES('469','沈河区','','467','466,467','0','469','','0','0','210103','');
INSERT INTO `web_area` VALUES('470','大东区','','467','466,467','0','470','','0','0','210104','');
INSERT INTO `web_area` VALUES('471','皇姑区','','467','466,467','0','471','','0','0','210105','');
INSERT INTO `web_area` VALUES('472','铁西区','','467','466,467','0','472','','0','0','210106','');
INSERT INTO `web_area` VALUES('473','苏家屯区','','467','466,467','0','473','','0','0','210111','');
INSERT INTO `web_area` VALUES('474','东陵区','','467','466,467','0','474','','0','0','210112','');
INSERT INTO `web_area` VALUES('475','沈北新区','','467','466,467','0','475','','0','0','210113','');
INSERT INTO `web_area` VALUES('476','于洪区','','467','466,467','0','476','','0','0','210114','');
INSERT INTO `web_area` VALUES('477','辽中县','','467','466,467','0','477','','0','0','210122','');
INSERT INTO `web_area` VALUES('478','康平县','','467','466,467','0','478','','0','0','210123','');
INSERT INTO `web_area` VALUES('479','法库县','','467','466,467','0','479','','0','0','210124','');
INSERT INTO `web_area` VALUES('480','新民市','','467','466,467','0','480','','0','0','210181','');
INSERT INTO `web_area` VALUES('481','大连市','','466','466','1','482,483,484,485,486,487,488,489,490,491','','0','0','210200','dalian');
INSERT INTO `web_area` VALUES('482','中山区','','481','466,481','0','482','','0','0','210202','');
INSERT INTO `web_area` VALUES('483','西岗区','','481','466,481','0','483','','0','0','210203','');
INSERT INTO `web_area` VALUES('484','沙河口区','','481','466,481','0','484','','0','0','210204','');
INSERT INTO `web_area` VALUES('485','甘井子区','','481','466,481','0','485','','0','0','210211','');
INSERT INTO `web_area` VALUES('486','旅顺口区','','481','466,481','0','486','','0','0','210212','');
INSERT INTO `web_area` VALUES('487','金州区','','481','466,481','0','487','','0','0','210213','');
INSERT INTO `web_area` VALUES('488','长海县','','481','466,481','0','488','','0','0','210224','');
INSERT INTO `web_area` VALUES('489','瓦房店市','','481','466,481','0','489','','0','0','210281','');
INSERT INTO `web_area` VALUES('490','普兰店市','','481','466,481','0','490','','0','0','210282','');
INSERT INTO `web_area` VALUES('491','庄河市','','481','466,481','0','491','','0','0','210283','');
INSERT INTO `web_area` VALUES('492','鞍山市','','466','466','1','493,494,495,496,497,498,499','','0','0','210300','anshan');
INSERT INTO `web_area` VALUES('493','铁东区','','492','466,492','0','493','','0','0','210302','');
INSERT INTO `web_area` VALUES('494','铁西区','','492','466,492','0','494','','0','0','210303','');
INSERT INTO `web_area` VALUES('495','立山区','','492','466,492','0','495','','0','0','210304','');
INSERT INTO `web_area` VALUES('496','千山区','','492','466,492','0','496','','0','0','210311','');
INSERT INTO `web_area` VALUES('497','台安县','','492','466,492','0','497','','0','0','210321','');
INSERT INTO `web_area` VALUES('498','岫岩满族自治县','','492','466,492','0','498','','0','0','210323','');
INSERT INTO `web_area` VALUES('499','海城市','','492','466,492','0','499','','0','0','210381','');
INSERT INTO `web_area` VALUES('500','抚顺市','','466','466','1','501,502,503,504,505,506,507','','0','0','210400','fushun');
INSERT INTO `web_area` VALUES('501','新抚区','','500','466,500','0','501','','0','0','210402','');
INSERT INTO `web_area` VALUES('502','东洲区','','500','466,500','0','502','','0','0','210403','');
INSERT INTO `web_area` VALUES('503','望花区','','500','466,500','0','503','','0','0','210404','');
INSERT INTO `web_area` VALUES('504','顺城区','','500','466,500','0','504','','0','0','210411','');
INSERT INTO `web_area` VALUES('505','抚顺县','','500','466,500','0','505','','0','0','210421','');
INSERT INTO `web_area` VALUES('506','新宾满族自治县','','500','466,500','0','506','','0','0','210422','');
INSERT INTO `web_area` VALUES('507','清原满族自治县','','500','466,500','0','507','','0','0','210423','');
INSERT INTO `web_area` VALUES('508','本溪市','','466','466','1','509,510,511,512,513,514','','0','0','210500','benxi');
INSERT INTO `web_area` VALUES('509','平山区','','508','466,508','0','509','','0','0','210502','');
INSERT INTO `web_area` VALUES('510','溪湖区','','508','466,508','0','510','','0','0','210503','');
INSERT INTO `web_area` VALUES('511','明山区','','508','466,508','0','511','','0','0','210504','');
INSERT INTO `web_area` VALUES('512','南芬区','','508','466,508','0','512','','0','0','210505','');
INSERT INTO `web_area` VALUES('513','本溪满族自治县','','508','466,508','0','513','','0','0','210521','');
INSERT INTO `web_area` VALUES('514','桓仁满族自治县','','508','466,508','0','514','','0','0','210522','');
INSERT INTO `web_area` VALUES('515','丹东市','','466','466','1','516,517,518,519,520,521','','0','0','210600','dandong');
INSERT INTO `web_area` VALUES('516','元宝区','','515','466,515','0','516','','0','0','210602','');
INSERT INTO `web_area` VALUES('517','振兴区','','515','466,515','0','517','','0','0','210603','');
INSERT INTO `web_area` VALUES('518','振安区','','515','466,515','0','518','','0','0','210604','');
INSERT INTO `web_area` VALUES('519','宽甸满族自治县','','515','466,515','0','519','','0','0','210624','');
INSERT INTO `web_area` VALUES('520','东港市','','515','466,515','0','520','','0','0','210681','');
INSERT INTO `web_area` VALUES('521','凤城市','','515','466,515','0','521','','0','0','210682','');
INSERT INTO `web_area` VALUES('522','锦州市','','466','466','1','523,524,525,526,527,528,529','','0','0','210700','jinzhou');
INSERT INTO `web_area` VALUES('523','古塔区','','522','466,522','0','523','','0','0','210702','');
INSERT INTO `web_area` VALUES('524','凌河区','','522','466,522','0','524','','0','0','210703','');
INSERT INTO `web_area` VALUES('525','太和区','','522','466,522','0','525','','0','0','210711','');
INSERT INTO `web_area` VALUES('526','黑山县','','522','466,522','0','526','','0','0','210726','');
INSERT INTO `web_area` VALUES('527','义县','','522','466,522','0','527','','0','0','210727','');
INSERT INTO `web_area` VALUES('528','凌海市','','522','466,522','0','528','','0','0','210781','');
INSERT INTO `web_area` VALUES('529','北镇市','','522','466,522','0','529','','0','0','210782','');
INSERT INTO `web_area` VALUES('530','营口市','','466','466','1','531,532,533,534,535,536','','0','0','210800','yingkou');
INSERT INTO `web_area` VALUES('531','站前区','','530','466,530','0','531','','0','0','210802','');
INSERT INTO `web_area` VALUES('532','西市区','','530','466,530','0','532','','0','0','210803','');
INSERT INTO `web_area` VALUES('533','鲅鱼圈区','','530','466,530','0','533','','0','0','210804','');
INSERT INTO `web_area` VALUES('534','老边区','','530','466,530','0','534','','0','0','210811','');
INSERT INTO `web_area` VALUES('535','盖州市','','530','466,530','0','535','','0','0','210881','');
INSERT INTO `web_area` VALUES('536','大石桥市','','530','466,530','0','536','','0','0','210882','');
INSERT INTO `web_area` VALUES('537','阜新市','','466','466','1','538,539,540,541,542,543,544','','0','0','210900','fuxin');
INSERT INTO `web_area` VALUES('538','海州区','','537','466,537','0','538','','0','0','210902','');
INSERT INTO `web_area` VALUES('539','新邱区','','537','466,537','0','539','','0','0','210903','');
INSERT INTO `web_area` VALUES('540','太平区','','537','466,537','0','540','','0','0','210904','');
INSERT INTO `web_area` VALUES('541','清河门区','','537','466,537','0','541','','0','0','210905','');
INSERT INTO `web_area` VALUES('542','细河区','','537','466,537','0','542','','0','0','210911','');
INSERT INTO `web_area` VALUES('543','阜新蒙古族自治县','','537','466,537','0','543','','0','0','210921','');
INSERT INTO `web_area` VALUES('544','彰武县','','537','466,537','0','544','','0','0','210922','');
INSERT INTO `web_area` VALUES('545','辽阳市','','466','466','1','546,547,548,549,550,551,552','','0','0','211000','liaoyang');
INSERT INTO `web_area` VALUES('546','白塔区','','545','466,545','0','546','','0','0','211002','');
INSERT INTO `web_area` VALUES('547','文圣区','','545','466,545','0','547','','0','0','211003','');
INSERT INTO `web_area` VALUES('548','宏伟区','','545','466,545','0','548','','0','0','211004','');
INSERT INTO `web_area` VALUES('549','弓长岭区','','545','466,545','0','549','','0','0','211005','');
INSERT INTO `web_area` VALUES('550','太子河区','','545','466,545','0','550','','0','0','211011','');
INSERT INTO `web_area` VALUES('551','辽阳县','','545','466,545','0','551','','0','0','211021','');
INSERT INTO `web_area` VALUES('552','灯塔市','','545','466,545','0','552','','0','0','211081','');
INSERT INTO `web_area` VALUES('553','盘锦市','','466','466','1','554,555,556,557','','0','0','211100','panjin');
INSERT INTO `web_area` VALUES('554','双台子区','','553','466,553','0','554','','0','0','211102','');
INSERT INTO `web_area` VALUES('555','兴隆台区','','553','466,553','0','555','','0','0','211103','');
INSERT INTO `web_area` VALUES('556','大洼县','','553','466,553','0','556','','0','0','211121','');
INSERT INTO `web_area` VALUES('557','盘山县','','553','466,553','0','557','','0','0','211122','');
INSERT INTO `web_area` VALUES('558','铁岭市','','466','466','1','559,560,561,562,563,564,565','','0','0','211200','tieling');
INSERT INTO `web_area` VALUES('559','银州区','','558','466,558','0','559','','0','0','211202','');
INSERT INTO `web_area` VALUES('560','清河区','','558','466,558','0','560','','0','0','211204','');
INSERT INTO `web_area` VALUES('561','铁岭县','','558','466,558','0','561','','0','0','211221','');
INSERT INTO `web_area` VALUES('562','西丰县','','558','466,558','0','562','','0','0','211223','');
INSERT INTO `web_area` VALUES('563','昌图县','','558','466,558','0','563','','0','0','211224','');
INSERT INTO `web_area` VALUES('564','调兵山市','','558','466,558','0','564','','0','0','211281','');
INSERT INTO `web_area` VALUES('565','开原市','','558','466,558','0','565','','0','0','211282','');
INSERT INTO `web_area` VALUES('566','朝阳市','','466','466','1','567,568,569,570,571,572,573','','0','0','211300','chaoyang');
INSERT INTO `web_area` VALUES('567','双塔区','','566','466,566','0','567','','0','0','211302','');
INSERT INTO `web_area` VALUES('568','龙城区','','566','466,566','0','568','','0','0','211303','');
INSERT INTO `web_area` VALUES('569','朝阳县','','566','466,566','0','569','','0','0','211321','');
INSERT INTO `web_area` VALUES('570','建平县','','566','466,566','0','570','','0','0','211322','');
INSERT INTO `web_area` VALUES('571','喀喇沁左翼蒙古族自治县','','566','466,566','0','571','','0','0','211324','');
INSERT INTO `web_area` VALUES('572','北票市','','566','466,566','0','572','','0','0','211381','');
INSERT INTO `web_area` VALUES('573','凌源市','','566','466,566','0','573','','0','0','211382','');
INSERT INTO `web_area` VALUES('574','葫芦岛','','466','466','1','575,576,577,578,579,580','','0','0','211400','huludao');
INSERT INTO `web_area` VALUES('575','连山区','','574','466,574','0','575','','0','0','211402','');
INSERT INTO `web_area` VALUES('576','龙港区','','574','466,574','0','576','','0','0','211403','');
INSERT INTO `web_area` VALUES('577','南票区','','574','466,574','0','577','','0','0','211404','');
INSERT INTO `web_area` VALUES('578','绥中县','','574','466,574','0','578','','0','0','211421','');
INSERT INTO `web_area` VALUES('579','建昌县','','574','466,574','0','579','','0','0','211422','');
INSERT INTO `web_area` VALUES('580','兴城市','','574','466,574','0','580','','0','0','211481','');
INSERT INTO `web_area` VALUES('581','吉林','','0','0','1','582,593,603,610,615,623,630,636,642,583,584,585,586,587,588,589,590,591,592','','25','0','220000','jilin');
INSERT INTO `web_area` VALUES('582','长春市','','581','581','1','583,584,585,586,587,588,589,590,591,592','','0','0','220100','changchun');
INSERT INTO `web_area` VALUES('583','南关区','','582','581,582','0','583','','0','0','220102','');
INSERT INTO `web_area` VALUES('584','宽城区','','582','581,582','0','584','','0','0','220103','');
INSERT INTO `web_area` VALUES('585','朝阳区','','582','581,582','0','585','','0','0','220104','');
INSERT INTO `web_area` VALUES('586','二道区','','582','581,582','0','586','','0','0','220105','');
INSERT INTO `web_area` VALUES('587','绿园区','','582','581,582','0','587','','0','0','220106','');
INSERT INTO `web_area` VALUES('588','双阳区','','582','581,582','0','588','','0','0','220112','');
INSERT INTO `web_area` VALUES('589','农安县','','582','581,582','0','589','','0','0','220122','');
INSERT INTO `web_area` VALUES('590','九台市','','582','581,582','0','590','','0','0','220181','');
INSERT INTO `web_area` VALUES('591','榆树市','','582','581,582','0','591','','0','0','220182','');
INSERT INTO `web_area` VALUES('592','德惠市','','582','581,582','0','592','','0','0','220183','');
INSERT INTO `web_area` VALUES('593','吉林市','','581','581','1','594,595,596,597,598,599,600,601,602','','0','0','220200','jilinshi');
INSERT INTO `web_area` VALUES('594','昌邑区','','593','581,593','0','594','','0','0','220202','');
INSERT INTO `web_area` VALUES('595','龙潭区','','593','581,593','0','595','','0','0','220203','');
INSERT INTO `web_area` VALUES('596','船营区','','593','581,593','0','596','','0','0','220204','');
INSERT INTO `web_area` VALUES('597','丰满区','','593','581,593','0','597','','0','0','220211','');
INSERT INTO `web_area` VALUES('598','永吉县','','593','581,593','0','598','','0','0','220221','');
INSERT INTO `web_area` VALUES('599','蛟河市','','593','581,593','0','599','','0','0','220281','');
INSERT INTO `web_area` VALUES('600','桦甸市','','593','581,593','0','600','','0','0','220282','');
INSERT INTO `web_area` VALUES('601','舒兰市','','593','581,593','0','601','','0','0','220283','');
INSERT INTO `web_area` VALUES('602','磐石市','','593','581,593','0','602','','0','0','220284','');
INSERT INTO `web_area` VALUES('603','四平市','','581','581','1','604,605,606,607,608,609','','0','0','220300','siping');
INSERT INTO `web_area` VALUES('604','铁西区','','603','581,603','0','604','','0','0','220302','');
INSERT INTO `web_area` VALUES('605','铁东区','','603','581,603','0','605','','0','0','220303','');
INSERT INTO `web_area` VALUES('606','梨树县','','603','581,603','0','606','','0','0','220322','');
INSERT INTO `web_area` VALUES('607','伊通满族自治县','','603','581,603','0','607','','0','0','220323','');
INSERT INTO `web_area` VALUES('608','公主岭市','','603','581,603','0','608','','0','0','220381','');
INSERT INTO `web_area` VALUES('609','双辽市','','603','581,603','0','609','','0','0','220382','');
INSERT INTO `web_area` VALUES('610','辽源市','','581','581','1','611,612,613,614','','0','0','220400','liaoyuan');
INSERT INTO `web_area` VALUES('611','龙山区','','610','581,610','0','611','','0','0','220402','');
INSERT INTO `web_area` VALUES('612','西安区','','610','581,610','0','612','','0','0','220403','');
INSERT INTO `web_area` VALUES('613','东丰县','','610','581,610','0','613','','0','0','220421','');
INSERT INTO `web_area` VALUES('614','东辽县','','610','581,610','0','614','','0','0','220422','');
INSERT INTO `web_area` VALUES('615','通化市','','581','581','1','616,617,618,619,620,621,622','','0','0','220500','tonghua');
INSERT INTO `web_area` VALUES('616','东昌区','','615','581,615','0','616','','0','0','220502','');
INSERT INTO `web_area` VALUES('617','二道江区','','615','581,615','0','617','','0','0','220503','');
INSERT INTO `web_area` VALUES('618','通化县','','615','581,615','0','618','','0','0','220521','');
INSERT INTO `web_area` VALUES('619','辉南县','','615','581,615','0','619','','0','0','220523','');
INSERT INTO `web_area` VALUES('620','柳河县','','615','581,615','0','620','','0','0','220524','');
INSERT INTO `web_area` VALUES('621','梅河口市','','615','581,615','0','621','','0','0','220581','');
INSERT INTO `web_area` VALUES('622','集安市','','615','581,615','0','622','','0','0','220582','');
INSERT INTO `web_area` VALUES('623','白山市','','581','581','1','624,625,626,627,628,629','','0','0','220600','baishan');
INSERT INTO `web_area` VALUES('624','八道江区','','623','581,623','0','624','','0','0','220602','');
INSERT INTO `web_area` VALUES('625','江源区','','623','581,623','0','625','','0','0','220605','');
INSERT INTO `web_area` VALUES('626','抚松县','','623','581,623','0','626','','0','0','220621','');
INSERT INTO `web_area` VALUES('627','靖宇县','','623','581,623','0','627','','0','0','220622','');
INSERT INTO `web_area` VALUES('628','长白朝鲜族自治县','','623','581,623','0','628','','0','0','220623','');
INSERT INTO `web_area` VALUES('629','临江市','','623','581,623','0','629','','0','0','220681','');
INSERT INTO `web_area` VALUES('630','松原市','','581','581','1','631,632,633,634,635','','0','0','220700','songyuan');
INSERT INTO `web_area` VALUES('631','宁江区','','630','581,630','0','631','','0','0','220702','');
INSERT INTO `web_area` VALUES('632','前郭尔罗斯蒙古族自治县','','630','581,630','0','632','','0','0','220721','');
INSERT INTO `web_area` VALUES('633','长岭县','','630','581,630','0','633','','0','0','220722','');
INSERT INTO `web_area` VALUES('634','乾安县','','630','581,630','0','634','','0','0','220723','');
INSERT INTO `web_area` VALUES('635','扶余县','','630','581,630','0','635','','0','0','220724','');
INSERT INTO `web_area` VALUES('636','白城市','','581','581','1','637,638,639,640,641','','0','0','220800','baicheng');
INSERT INTO `web_area` VALUES('637','洮北区','','636','581,636','0','637','','0','0','220802','');
INSERT INTO `web_area` VALUES('638','镇赉县','','636','581,636','0','638','','0','0','220821','');
INSERT INTO `web_area` VALUES('639','通榆县','','636','581,636','0','639','','0','0','220822','');
INSERT INTO `web_area` VALUES('640','洮南市','','636','581,636','0','640','','0','0','220881','');
INSERT INTO `web_area` VALUES('641','大安市','','636','581,636','0','641','','0','0','220882','');
INSERT INTO `web_area` VALUES('642','延边','','581','581','1','643,644,645,646,647,648,649,650','','0','0','222400','yanbian');
INSERT INTO `web_area` VALUES('643','延吉市','','642','581,642','0','643','','0','0','222401','');
INSERT INTO `web_area` VALUES('644','图们市','','642','581,642','0','644','','0','0','222402','');
INSERT INTO `web_area` VALUES('645','敦化市','','642','581,642','0','645','','0','0','222403','');
INSERT INTO `web_area` VALUES('646','珲春市','','642','581,642','0','646','','0','0','222404','');
INSERT INTO `web_area` VALUES('647','龙井市','','642','581,642','0','647','','0','0','222405','');
INSERT INTO `web_area` VALUES('648','和龙市','','642','581,642','0','648','','0','0','222406','');
INSERT INTO `web_area` VALUES('649','汪清县','','642','581,642','0','649','','0','0','222424','');
INSERT INTO `web_area` VALUES('650','安图县','','642','581,642','0','650','','0','0','222426','');
INSERT INTO `web_area` VALUES('651','黑龙江','','0','0','1','652,671,688,698,707,716,726,744,755,760,771,778,789,653,654,655,656,657,658,659,660,661,662,663,664,665,666,667,668,669,670','','24','0','230000','heilongjiang');
INSERT INTO `web_area` VALUES('652','哈尔滨','','651','651','1','653,654,655,656,657,658,659,660,661,662,663,664,665,666,667,668,669,670','','0','0','230100','haerbin');
INSERT INTO `web_area` VALUES('653','道里区','','652','651,652','0','653','','0','0','230102','');
INSERT INTO `web_area` VALUES('654','南岗区','','652','651,652','0','654','','0','0','230103','');
INSERT INTO `web_area` VALUES('655','道外区','','652','651,652','0','655','','0','0','230104','');
INSERT INTO `web_area` VALUES('656','平房区','','652','651,652','0','656','','0','0','230108','');
INSERT INTO `web_area` VALUES('657','松北区','','652','651,652','0','657','','0','0','230109','');
INSERT INTO `web_area` VALUES('658','香坊区','','652','651,652','0','658','','0','0','230110','');
INSERT INTO `web_area` VALUES('659','呼兰区','','652','651,652','0','659','','0','0','230111','');
INSERT INTO `web_area` VALUES('660','阿城区','','652','651,652','0','660','','0','0','230112','');
INSERT INTO `web_area` VALUES('661','依兰县','','652','651,652','0','661','','0','0','230123','');
INSERT INTO `web_area` VALUES('662','方正县','','652','651,652','0','662','','0','0','230124','');
INSERT INTO `web_area` VALUES('663','宾县','','652','651,652','0','663','','0','0','230125','');
INSERT INTO `web_area` VALUES('664','巴彦县','','652','651,652','0','664','','0','0','230126','');
INSERT INTO `web_area` VALUES('665','木兰县','','652','651,652','0','665','','0','0','230127','');
INSERT INTO `web_area` VALUES('666','通河县','','652','651,652','0','666','','0','0','230128','');
INSERT INTO `web_area` VALUES('667','延寿县','','652','651,652','0','667','','0','0','230129','');
INSERT INTO `web_area` VALUES('668','双城市','','652','651,652','0','668','','0','0','230182','');
INSERT INTO `web_area` VALUES('669','尚志市','','652','651,652','0','669','','0','0','230183','');
INSERT INTO `web_area` VALUES('670','五常市','','652','651,652','0','670','','0','0','230184','');
INSERT INTO `web_area` VALUES('671','齐齐哈尔','','651','651','1','672,673,674,675,676,677,678,679,680,681,682,683,684,685,686,687','','0','0','230200','qiqihaer');
INSERT INTO `web_area` VALUES('672','龙沙区','','671','651,671','0','672','','0','0','230202','');
INSERT INTO `web_area` VALUES('673','建华区','','671','651,671','0','673','','0','0','230203','');
INSERT INTO `web_area` VALUES('674','铁锋区','','671','651,671','0','674','','0','0','230204','');
INSERT INTO `web_area` VALUES('675','昂昂溪区','','671','651,671','0','675','','0','0','230205','');
INSERT INTO `web_area` VALUES('676','富拉尔基区','','671','651,671','0','676','','0','0','230206','');
INSERT INTO `web_area` VALUES('677','碾子山区','','671','651,671','0','677','','0','0','230207','');
INSERT INTO `web_area` VALUES('678','梅里斯达斡尔族区','','671','651,671','0','678','','0','0','230208','');
INSERT INTO `web_area` VALUES('679','龙江县','','671','651,671','0','679','','0','0','230221','');
INSERT INTO `web_area` VALUES('680','依安县','','671','651,671','0','680','','0','0','230223','');
INSERT INTO `web_area` VALUES('681','泰来县','','671','651,671','0','681','','0','0','230224','');
INSERT INTO `web_area` VALUES('682','甘南县','','671','651,671','0','682','','0','0','230225','');
INSERT INTO `web_area` VALUES('683','富裕县','','671','651,671','0','683','','0','0','230227','');
INSERT INTO `web_area` VALUES('684','克山县','','671','651,671','0','684','','0','0','230229','');
INSERT INTO `web_area` VALUES('685','克东县','','671','651,671','0','685','','0','0','230230','');
INSERT INTO `web_area` VALUES('686','拜泉县','','671','651,671','0','686','','0','0','230231','');
INSERT INTO `web_area` VALUES('687','讷河市','','671','651,671','0','687','','0','0','230281','');
INSERT INTO `web_area` VALUES('688','鸡西市','','651','651','1','689,690,691,692,693,694,695,696,697','','0','0','230300','jixi');
INSERT INTO `web_area` VALUES('689','鸡冠区','','688','651,688','0','689','','0','0','230302','');
INSERT INTO `web_area` VALUES('690','恒山区','','688','651,688','0','690','','0','0','230303','');
INSERT INTO `web_area` VALUES('691','滴道区','','688','651,688','0','691','','0','0','230304','');
INSERT INTO `web_area` VALUES('692','梨树区','','688','651,688','0','692','','0','0','230305','');
INSERT INTO `web_area` VALUES('693','城子河区','','688','651,688','0','693','','0','0','230306','');
INSERT INTO `web_area` VALUES('694','麻山区','','688','651,688','0','694','','0','0','230307','');
INSERT INTO `web_area` VALUES('695','鸡东县','','688','651,688','0','695','','0','0','230321','');
INSERT INTO `web_area` VALUES('696','虎林市','','688','651,688','0','696','','0','0','230381','');
INSERT INTO `web_area` VALUES('697','密山市','','688','651,688','0','697','','0','0','230382','');
INSERT INTO `web_area` VALUES('698','鹤岗市','','651','651','1','699,700,701,702,703,704,705,706','','0','0','230400','hegang');
INSERT INTO `web_area` VALUES('699','向阳区','','698','651,698','0','699','','0','0','230402','');
INSERT INTO `web_area` VALUES('700','工农区','','698','651,698','0','700','','0','0','230403','');
INSERT INTO `web_area` VALUES('701','南山区','','698','651,698','0','701','','0','0','230404','');
INSERT INTO `web_area` VALUES('702','兴安区','','698','651,698','0','702','','0','0','230405','');
INSERT INTO `web_area` VALUES('703','东山区','','698','651,698','0','703','','0','0','230406','');
INSERT INTO `web_area` VALUES('704','兴山区','','698','651,698','0','704','','0','0','230407','');
INSERT INTO `web_area` VALUES('705','萝北县','','698','651,698','0','705','','0','0','230421','');
INSERT INTO `web_area` VALUES('706','绥滨县','','698','651,698','0','706','','0','0','230422','');
INSERT INTO `web_area` VALUES('707','双鸭山','','651','651','1','708,709,710,711,712,713,714,715','','0','0','230500','shuangyashan');
INSERT INTO `web_area` VALUES('708','尖山区','','707','651,707','0','708','','0','0','230502','');
INSERT INTO `web_area` VALUES('709','岭东区','','707','651,707','0','709','','0','0','230503','');
INSERT INTO `web_area` VALUES('710','四方台区','','707','651,707','0','710','','0','0','230505','');
INSERT INTO `web_area` VALUES('711','宝山区','','707','651,707','0','711','','0','0','230506','');
INSERT INTO `web_area` VALUES('712','集贤县','','707','651,707','0','712','','0','0','230521','');
INSERT INTO `web_area` VALUES('713','友谊县','','707','651,707','0','713','','0','0','230522','');
INSERT INTO `web_area` VALUES('714','宝清县','','707','651,707','0','714','','0','0','230523','');
INSERT INTO `web_area` VALUES('715','饶河县','','707','651,707','0','715','','0','0','230524','');
INSERT INTO `web_area` VALUES('716','大庆市','','651','651','1','717,718,719,720,721,722,723,724,725','','0','0','230600','daqing');
INSERT INTO `web_area` VALUES('717','萨尔图区','','716','651,716','0','717','','0','0','230602','');
INSERT INTO `web_area` VALUES('718','龙凤区','','716','651,716','0','718','','0','0','230603','');
INSERT INTO `web_area` VALUES('719','让胡路区','','716','651,716','0','719','','0','0','230604','');
INSERT INTO `web_area` VALUES('720','红岗区','','716','651,716','0','720','','0','0','230605','');
INSERT INTO `web_area` VALUES('721','大同区','','716','651,716','0','721','','0','0','230606','');
INSERT INTO `web_area` VALUES('722','肇州县','','716','651,716','0','722','','0','0','230621','');
INSERT INTO `web_area` VALUES('723','肇源县','','716','651,716','0','723','','0','0','230622','');
INSERT INTO `web_area` VALUES('724','林甸县','','716','651,716','0','724','','0','0','230623','');
INSERT INTO `web_area` VALUES('725','杜尔伯特蒙古族自治县','','716','651,716','0','725','','0','0','230624','');
INSERT INTO `web_area` VALUES('726','伊春市','','651','651','1','727,728,729,730,731,732,733,734,735,736,737,738,739,740,741,742,743','','0','0','230700','yichunshi');
INSERT INTO `web_area` VALUES('727','伊春区','','726','651,726','0','727','','0','0','230702','');
INSERT INTO `web_area` VALUES('728','南岔区','','726','651,726','0','728','','0','0','230703','');
INSERT INTO `web_area` VALUES('729','友好区','','726','651,726','0','729','','0','0','230704','');
INSERT INTO `web_area` VALUES('730','西林区','','726','651,726','0','730','','0','0','230705','');
INSERT INTO `web_area` VALUES('731','翠峦区','','726','651,726','0','731','','0','0','230706','');
INSERT INTO `web_area` VALUES('732','新青区','','726','651,726','0','732','','0','0','230707','');
INSERT INTO `web_area` VALUES('733','美溪区','','726','651,726','0','733','','0','0','230708','');
INSERT INTO `web_area` VALUES('734','金山屯区','','726','651,726','0','734','','0','0','230709','');
INSERT INTO `web_area` VALUES('735','五营区','','726','651,726','0','735','','0','0','230710','');
INSERT INTO `web_area` VALUES('736','乌马河区','','726','651,726','0','736','','0','0','230711','');
INSERT INTO `web_area` VALUES('737','汤旺河区','','726','651,726','0','737','','0','0','230712','');
INSERT INTO `web_area` VALUES('738','带岭区','','726','651,726','0','738','','0','0','230713','');
INSERT INTO `web_area` VALUES('739','乌伊岭区','','726','651,726','0','739','','0','0','230714','');
INSERT INTO `web_area` VALUES('740','红星区','','726','651,726','0','740','','0','0','230715','');
INSERT INTO `web_area` VALUES('741','上甘岭区','','726','651,726','0','741','','0','0','230716','');
INSERT INTO `web_area` VALUES('742','嘉荫县','','726','651,726','0','742','','0','0','230722','');
INSERT INTO `web_area` VALUES('743','铁力市','','726','651,726','0','743','','0','0','230781','');
INSERT INTO `web_area` VALUES('744','佳木斯','','651','651','1','745,746,747,748,749,750,751,752,753,754','','0','0','230800','jiamusi');
INSERT INTO `web_area` VALUES('745','向阳区','','744','651,744','0','745','','0','0','230803','');
INSERT INTO `web_area` VALUES('746','前进区','','744','651,744','0','746','','0','0','230804','');
INSERT INTO `web_area` VALUES('747','东风区','','744','651,744','0','747','','0','0','230805','');
INSERT INTO `web_area` VALUES('748','郊区','','744','651,744','0','748','','0','0','230811','');
INSERT INTO `web_area` VALUES('749','桦南县','','744','651,744','0','749','','0','0','230822','');
INSERT INTO `web_area` VALUES('750','桦川县','','744','651,744','0','750','','0','0','230826','');
INSERT INTO `web_area` VALUES('751','汤原县','','744','651,744','0','751','','0','0','230828','');
INSERT INTO `web_area` VALUES('752','抚远县','','744','651,744','0','752','','0','0','230833','');
INSERT INTO `web_area` VALUES('753','同江市','','744','651,744','0','753','','0','0','230881','');
INSERT INTO `web_area` VALUES('754','富锦市','','744','651,744','0','754','','0','0','230882','');
INSERT INTO `web_area` VALUES('755','七台河','','651','651','1','756,757,758,759','','0','0','230900','qitaihe');
INSERT INTO `web_area` VALUES('756','新兴区','','755','651,755','0','756','','0','0','230902','');
INSERT INTO `web_area` VALUES('757','桃山区','','755','651,755','0','757','','0','0','230903','');
INSERT INTO `web_area` VALUES('758','茄子河区','','755','651,755','0','758','','0','0','230904','');
INSERT INTO `web_area` VALUES('759','勃利县','','755','651,755','0','759','','0','0','230921','');
INSERT INTO `web_area` VALUES('760','牡丹江','','651','651','1','761,762,763,764,765,766,767,768,769,770','','0','0','231000','mudanjiang');
INSERT INTO `web_area` VALUES('761','东安区','','760','651,760','0','761','','0','0','231002','');
INSERT INTO `web_area` VALUES('762','阳明区','','760','651,760','0','762','','0','0','231003','');
INSERT INTO `web_area` VALUES('763','爱民区','','760','651,760','0','763','','0','0','231004','');
INSERT INTO `web_area` VALUES('764','西安区','','760','651,760','0','764','','0','0','231005','');
INSERT INTO `web_area` VALUES('765','东宁县','','760','651,760','0','765','','0','0','231024','');
INSERT INTO `web_area` VALUES('766','林口县','','760','651,760','0','766','','0','0','231025','');
INSERT INTO `web_area` VALUES('767','绥芬河市','','760','651,760','0','767','','0','0','231081','');
INSERT INTO `web_area` VALUES('768','海林市','','760','651,760','0','768','','0','0','231083','');
INSERT INTO `web_area` VALUES('769','宁安市','','760','651,760','0','769','','0','0','231084','');
INSERT INTO `web_area` VALUES('770','穆棱市','','760','651,760','0','770','','0','0','231085','');
INSERT INTO `web_area` VALUES('771','黑河市','','651','651','1','772,773,774,775,776,777','','0','0','231100','heihe');
INSERT INTO `web_area` VALUES('772','爱辉区','','771','651,771','0','772','','0','0','231102','');
INSERT INTO `web_area` VALUES('773','嫩江县','','771','651,771','0','773','','0','0','231121','');
INSERT INTO `web_area` VALUES('774','逊克县','','771','651,771','0','774','','0','0','231123','');
INSERT INTO `web_area` VALUES('775','孙吴县','','771','651,771','0','775','','0','0','231124','');
INSERT INTO `web_area` VALUES('776','北安市','','771','651,771','0','776','','0','0','231181','');
INSERT INTO `web_area` VALUES('777','五大连池市','','771','651,771','0','777','','0','0','231182','');
INSERT INTO `web_area` VALUES('778','绥化市','','651','651','1','779,780,781,782,783,784,785,786,787,788','','0','0','231200','suihua');
INSERT INTO `web_area` VALUES('779','北林区','','778','651,778','0','779','','0','0','231202','');
INSERT INTO `web_area` VALUES('780','望奎县','','778','651,778','0','780','','0','0','231221','');
INSERT INTO `web_area` VALUES('781','兰西县','','778','651,778','0','781','','0','0','231222','');
INSERT INTO `web_area` VALUES('782','青冈县','','778','651,778','0','782','','0','0','231223','');
INSERT INTO `web_area` VALUES('783','庆安县','','778','651,778','0','783','','0','0','231224','');
INSERT INTO `web_area` VALUES('784','明水县','','778','651,778','0','784','','0','0','231225','');
INSERT INTO `web_area` VALUES('785','绥棱县','','778','651,778','0','785','','0','0','231226','');
INSERT INTO `web_area` VALUES('786','安达市','','778','651,778','0','786','','0','0','231281','');
INSERT INTO `web_area` VALUES('787','肇东市','','778','651,778','0','787','','0','0','231282','');
INSERT INTO `web_area` VALUES('788','海伦市','','778','651,778','0','788','','0','0','231283','');
INSERT INTO `web_area` VALUES('789','大兴安岭','','651','651','1','790,791,792,793,794,795,796','','0','0','232700','daxinganlingdi');
INSERT INTO `web_area` VALUES('790','加格达奇区','','789','651,789','0','790','','0','0','232701','');
INSERT INTO `web_area` VALUES('791','松岭区','','789','651,789','0','791','','0','0','232702','');
INSERT INTO `web_area` VALUES('792','新林区','','789','651,789','0','792','','0','0','232703','');
INSERT INTO `web_area` VALUES('793','呼中区','','789','651,789','0','793','','0','0','232704','');
INSERT INTO `web_area` VALUES('794','呼玛县','','789','651,789','0','794','','0','0','232721','');
INSERT INTO `web_area` VALUES('795','塔河县','','789','651,789','0','795','','0','0','232722','');
INSERT INTO `web_area` VALUES('796','漠河县','','789','651,789','0','796','','0','0','232723','');
INSERT INTO `web_area` VALUES('797','上海','','0','0','1','798,799,800,801,802,803,804,805,806,807,808,809,810,811,812,813,814,815,816','','3','0','310000','shanghai');
INSERT INTO `web_area` VALUES('798','上海市','','797','797','1','799,800,801,802,803,804,805,806,807,808,809,810,811,812,813,814,815,816','','0','0','310100','shanghaishiqu');
INSERT INTO `web_area` VALUES('799','黄浦区','','798','797,798','0','799','','0','0','310101','huangpuqu');
INSERT INTO `web_area` VALUES('800','卢湾区','','798','797,798','0','800','','0','0','310103','luwanqu');
INSERT INTO `web_area` VALUES('801','徐汇区','','798','797,798','0','801','','0','0','310104','xuhuiqu');
INSERT INTO `web_area` VALUES('802','长宁区','','798','797,798','0','802','','0','0','310105','changningqu');
INSERT INTO `web_area` VALUES('803','静安区','','798','797,798','0','803','','0','0','310106','jinganqu');
INSERT INTO `web_area` VALUES('804','普陀区','','798','797,798','0','804','','0','0','310107','putuoqu');
INSERT INTO `web_area` VALUES('805','闸北区','','798','797,798','0','805','','0','0','310108','zhabeiqu');
INSERT INTO `web_area` VALUES('806','虹口区','','798','797,798','0','806','','0','0','310109','hongkouqu');
INSERT INTO `web_area` VALUES('807','杨浦区','','798','797,798','0','807','','0','0','310110','yangpuqu');
INSERT INTO `web_area` VALUES('808','闵行区','','798','797,798','0','808','','0','0','310112','minxingqu');
INSERT INTO `web_area` VALUES('809','宝山区','','798','797,798','0','809','','0','0','310113','baoshanqu');
INSERT INTO `web_area` VALUES('810','嘉定区','','798','797,798','0','810','','0','0','310114','jiadingqu');
INSERT INTO `web_area` VALUES('811','浦东新区','','798','797,798','0','811','','0','0','310115','pudongxinqu');
INSERT INTO `web_area` VALUES('812','金山区','','798','797,798','0','812','','0','0','310116','jinshanqu');
INSERT INTO `web_area` VALUES('813','松江区','','798','797,798','0','813','','0','0','310117','songjiangqu');
INSERT INTO `web_area` VALUES('814','青浦区','','798','797,798','0','814','','0','0','310118','qingpuqu');
INSERT INTO `web_area` VALUES('815','奉贤区','','798','797,798','0','815','','0','0','310120','fengxianqu');
INSERT INTO `web_area` VALUES('816','崇明县','','798','797,798','0','816','','0','0','310230','chongmingxian');
INSERT INTO `web_area` VALUES('817','江苏','','0','0','1','818,832,841,852,860,872,881,889,898,908,916,923,930,819,820,821,822,823,824,825,826,827,828,829,830,831','','6','0','320000','jiangsu');
INSERT INTO `web_area` VALUES('818','南京市','','817','817','1','819,820,821,822,823,824,825,826,827,828,829,830,831','','0','0','320100','nanjing');
INSERT INTO `web_area` VALUES('819','玄武区','','818','817,818','0','819','','0','0','320102','');
INSERT INTO `web_area` VALUES('820','白下区','','818','817,818','0','820','','0','0','320103','');
INSERT INTO `web_area` VALUES('821','秦淮区','','818','817,818','0','821','','0','0','320104','');
INSERT INTO `web_area` VALUES('822','建邺区','','818','817,818','0','822','','0','0','320105','');
INSERT INTO `web_area` VALUES('823','鼓楼区','','818','817,818','0','823','','0','0','320106','');
INSERT INTO `web_area` VALUES('824','下关区','','818','817,818','0','824','','0','0','320107','');
INSERT INTO `web_area` VALUES('825','浦口区','','818','817,818','0','825','','0','0','320111','');
INSERT INTO `web_area` VALUES('826','栖霞区','','818','817,818','0','826','','0','0','320113','');
INSERT INTO `web_area` VALUES('827','雨花台区','','818','817,818','0','827','','0','0','320114','');
INSERT INTO `web_area` VALUES('828','江宁区','','818','817,818','0','828','','0','0','320115','');
INSERT INTO `web_area` VALUES('829','六合区','','818','817,818','0','829','','0','0','320116','');
INSERT INTO `web_area` VALUES('830','溧水县','','818','817,818','0','830','','0','0','320124','');
INSERT INTO `web_area` VALUES('831','高淳县','','818','817,818','0','831','','0','0','320125','');
INSERT INTO `web_area` VALUES('832','无锡市','','817','817','1','833,834,835,836,837,838,839,840','','0','0','320200','wuxi');
INSERT INTO `web_area` VALUES('833','崇安区','','832','817,832','0','833','','0','0','320202','');
INSERT INTO `web_area` VALUES('834','南长区','','832','817,832','0','834','','0','0','320203','');
INSERT INTO `web_area` VALUES('835','北塘区','','832','817,832','0','835','','0','0','320204','');
INSERT INTO `web_area` VALUES('836','锡山区','','832','817,832','0','836','','0','0','320205','');
INSERT INTO `web_area` VALUES('837','惠山区','','832','817,832','0','837','','0','0','320206','');
INSERT INTO `web_area` VALUES('838','滨湖区','','832','817,832','0','838','','0','0','320211','');
INSERT INTO `web_area` VALUES('839','江阴市','','832','817,832','0','839','','0','0','320281','');
INSERT INTO `web_area` VALUES('840','宜兴市','','832','817,832','0','840','','0','0','320282','');
INSERT INTO `web_area` VALUES('841','徐州市','','817','817','1','842,843,844,845,846,847,848,849,850,851','','0','0','320300','xuzhou');
INSERT INTO `web_area` VALUES('842','鼓楼区','','841','817,841','0','842','','0','0','320302','');
INSERT INTO `web_area` VALUES('843','云龙区','','841','817,841','0','843','','0','0','320303','');
INSERT INTO `web_area` VALUES('844','贾汪区','','841','817,841','0','844','','0','0','320305','');
INSERT INTO `web_area` VALUES('845','泉山区','','841','817,841','0','845','','0','0','320311','');
INSERT INTO `web_area` VALUES('846','铜山区','','841','817,841','0','846','','0','0','320312','');
INSERT INTO `web_area` VALUES('847','丰县','','841','817,841','0','847','','0','0','320321','');
INSERT INTO `web_area` VALUES('848','沛县','','841','817,841','0','848','','0','0','320322','');
INSERT INTO `web_area` VALUES('849','睢宁县','','841','817,841','0','849','','0','0','320324','');
INSERT INTO `web_area` VALUES('850','新沂市','','841','817,841','0','850','','0','0','320381','');
INSERT INTO `web_area` VALUES('851','邳州市','','841','817,841','0','851','','0','0','320382','');
INSERT INTO `web_area` VALUES('852','常州市','','817','817','1','853,854,855,856,857,858,859','','0','0','320400','changzhou');
INSERT INTO `web_area` VALUES('853','天宁区','','852','817,852','0','853','','0','0','320402','');
INSERT INTO `web_area` VALUES('854','钟楼区','','852','817,852','0','854','','0','0','320404','');
INSERT INTO `web_area` VALUES('855','戚墅堰区','','852','817,852','0','855','','0','0','320405','');
INSERT INTO `web_area` VALUES('856','新北区','','852','817,852','0','856','','0','0','320411','');
INSERT INTO `web_area` VALUES('857','武进区','','852','817,852','0','857','','0','0','320412','');
INSERT INTO `web_area` VALUES('858','溧阳市','','852','817,852','0','858','','0','0','320481','');
INSERT INTO `web_area` VALUES('859','金坛市','','852','817,852','0','859','','0','0','320482','');
INSERT INTO `web_area` VALUES('860','苏州市','','817','817','1','861,862,863,864,865,866,867,868,869,870,871','','0','0','320500','suzhou');
INSERT INTO `web_area` VALUES('861','沧浪区','','860','817,860','0','861','','0','0','320502','');
INSERT INTO `web_area` VALUES('862','平江区','','860','817,860','0','862','','0','0','320503','');
INSERT INTO `web_area` VALUES('863','金阊区','','860','817,860','0','863','','0','0','320504','');
INSERT INTO `web_area` VALUES('864','虎丘区','','860','817,860','0','864','','0','0','320505','');
INSERT INTO `web_area` VALUES('865','吴中区','','860','817,860','0','865','','0','0','320506','');
INSERT INTO `web_area` VALUES('866','相城区','','860','817,860','0','866','','0','0','320507','');
INSERT INTO `web_area` VALUES('867','常熟市','','860','817,860','0','867','','0','0','320581','');
INSERT INTO `web_area` VALUES('868','张家港市','','860','817,860','0','868','','0','0','320582','');
INSERT INTO `web_area` VALUES('869','昆山市','','860','817,860','0','869','','0','0','320583','');
INSERT INTO `web_area` VALUES('870','吴江市','','860','817,860','0','870','','0','0','320584','');
INSERT INTO `web_area` VALUES('871','太仓市','','860','817,860','0','871','','0','0','320585','');
INSERT INTO `web_area` VALUES('872','南通市','','817','817','1','873,874,875,876,877,878,879,880','','0','0','320600','nantong');
INSERT INTO `web_area` VALUES('873','崇川区','','872','817,872','0','873','','0','0','320602','');
INSERT INTO `web_area` VALUES('874','港闸区','','872','817,872','0','874','','0','0','320611','');
INSERT INTO `web_area` VALUES('875','通州区','','872','817,872','0','875','','0','0','320612','');
INSERT INTO `web_area` VALUES('876','海安县','','872','817,872','0','876','','0','0','320621','');
INSERT INTO `web_area` VALUES('877','如东县','','872','817,872','0','877','','0','0','320623','');
INSERT INTO `web_area` VALUES('878','启东市','','872','817,872','0','878','','0','0','320681','');
INSERT INTO `web_area` VALUES('879','如皋市','','872','817,872','0','879','','0','0','320682','');
INSERT INTO `web_area` VALUES('880','海门市','','872','817,872','0','880','','0','0','320684','');
INSERT INTO `web_area` VALUES('881','连云港','','817','817','1','882,883,884,885,886,887,888','','0','0','320700','lianyungang');
INSERT INTO `web_area` VALUES('882','连云区','','881','817,881','0','882','','0','0','320703','');
INSERT INTO `web_area` VALUES('883','新浦区','','881','817,881','0','883','','0','0','320705','');
INSERT INTO `web_area` VALUES('884','海州区','','881','817,881','0','884','','0','0','320706','');
INSERT INTO `web_area` VALUES('885','赣榆县','','881','817,881','0','885','','0','0','320721','');
INSERT INTO `web_area` VALUES('886','东海县','','881','817,881','0','886','','0','0','320722','');
INSERT INTO `web_area` VALUES('887','灌云县','','881','817,881','0','887','','0','0','320723','');
INSERT INTO `web_area` VALUES('888','灌南县','','881','817,881','0','888','','0','0','320724','');
INSERT INTO `web_area` VALUES('889','淮安市','','817','817','1','890,891,892,893,894,895,896,897','','0','0','320800','huaian');
INSERT INTO `web_area` VALUES('890','清河区','','889','817,889','0','890','','0','0','320802','');
INSERT INTO `web_area` VALUES('891','楚州区','','889','817,889','0','891','','0','0','320803','');
INSERT INTO `web_area` VALUES('892','淮阴区','','889','817,889','0','892','','0','0','320804','');
INSERT INTO `web_area` VALUES('893','清浦区','','889','817,889','0','893','','0','0','320811','');
INSERT INTO `web_area` VALUES('894','涟水县','','889','817,889','0','894','','0','0','320826','');
INSERT INTO `web_area` VALUES('895','洪泽县','','889','817,889','0','895','','0','0','320829','');
INSERT INTO `web_area` VALUES('896','盱眙县','','889','817,889','0','896','','0','0','320830','');
INSERT INTO `web_area` VALUES('897','金湖县','','889','817,889','0','897','','0','0','320831','');
INSERT INTO `web_area` VALUES('898','盐城市','','817','817','1','899,900,901,902,903,904,905,906,907','','0','0','320900','yancheng');
INSERT INTO `web_area` VALUES('899','亭湖区','','898','817,898','0','899','','0','0','320902','');
INSERT INTO `web_area` VALUES('900','盐都区','','898','817,898','0','900','','0','0','320903','');
INSERT INTO `web_area` VALUES('901','响水县','','898','817,898','0','901','','0','0','320921','');
INSERT INTO `web_area` VALUES('902','滨海县','','898','817,898','0','902','','0','0','320922','');
INSERT INTO `web_area` VALUES('903','阜宁县','','898','817,898','0','903','','0','0','320923','');
INSERT INTO `web_area` VALUES('904','射阳县','','898','817,898','0','904','','0','0','320924','');
INSERT INTO `web_area` VALUES('905','建湖县','','898','817,898','0','905','','0','0','320925','');
INSERT INTO `web_area` VALUES('906','东台市','','898','817,898','0','906','','0','0','320981','');
INSERT INTO `web_area` VALUES('907','大丰市','','898','817,898','0','907','','0','0','320982','');
INSERT INTO `web_area` VALUES('908','扬州市','','817','817','1','909,910,911,912,913,914,915','','0','0','321000','yangzhou');
INSERT INTO `web_area` VALUES('909','广陵区','','908','817,908','0','909','','0','0','321002','');
INSERT INTO `web_area` VALUES('910','邗江区','','908','817,908','0','910','','0','0','321003','');
INSERT INTO `web_area` VALUES('911','维扬区','','908','817,908','0','911','','0','0','321011','');
INSERT INTO `web_area` VALUES('912','宝应县','','908','817,908','0','912','','0','0','321023','');
INSERT INTO `web_area` VALUES('913','仪征市','','908','817,908','0','913','','0','0','321081','');
INSERT INTO `web_area` VALUES('914','高邮市','','908','817,908','0','914','','0','0','321084','');
INSERT INTO `web_area` VALUES('915','江都市','','908','817,908','0','915','','0','0','321088','');
INSERT INTO `web_area` VALUES('916','镇江市','','817','817','1','917,918,919,920,921,922','','0','0','321100','zhenjiang');
INSERT INTO `web_area` VALUES('917','京口区','','916','817,916','0','917','','0','0','321102','');
INSERT INTO `web_area` VALUES('918','润州区','','916','817,916','0','918','','0','0','321111','');
INSERT INTO `web_area` VALUES('919','丹徒区','','916','817,916','0','919','','0','0','321112','');
INSERT INTO `web_area` VALUES('920','丹阳市','','916','817,916','0','920','','0','0','321181','');
INSERT INTO `web_area` VALUES('921','扬中市','','916','817,916','0','921','','0','0','321182','');
INSERT INTO `web_area` VALUES('922','句容市','','916','817,916','0','922','','0','0','321183','');
INSERT INTO `web_area` VALUES('923','泰州市','','817','817','1','924,925,926,927,928,929','','0','0','321200','taizhou');
INSERT INTO `web_area` VALUES('924','海陵区','','923','817,923','0','924','','0','0','321202','');
INSERT INTO `web_area` VALUES('925','高港区','','923','817,923','0','925','','0','0','321203','');
INSERT INTO `web_area` VALUES('926','兴化市','','923','817,923','0','926','','0','0','321281','');
INSERT INTO `web_area` VALUES('927','靖江市','','923','817,923','0','927','','0','0','321282','');
INSERT INTO `web_area` VALUES('928','泰兴市','','923','817,923','0','928','','0','0','321283','');
INSERT INTO `web_area` VALUES('929','姜堰市','','923','817,923','0','929','','0','0','321284','');
INSERT INTO `web_area` VALUES('930','宿迁市','','817','817','1','931,932,933,934,935','','0','0','321300','suqian');
INSERT INTO `web_area` VALUES('931','宿城区','','930','817,930','0','931','','0','0','321302','');
INSERT INTO `web_area` VALUES('932','宿豫区','','930','817,930','0','932','','0','0','321311','');
INSERT INTO `web_area` VALUES('933','沭阳县','','930','817,930','0','933','','0','0','321322','');
INSERT INTO `web_area` VALUES('934','泗阳县','','930','817,930','0','934','','0','0','321323','');
INSERT INTO `web_area` VALUES('935','泗洪县','','930','817,930','0','935','','0','0','321324','');
INSERT INTO `web_area` VALUES('936','浙江','','0','0','1','937,951,963,975,983,989,996,1006,1013,1018,1028,938,939,940,941,942,943,944,945,946,947,948,949,950','','7','0','330000','zhejiang');
INSERT INTO `web_area` VALUES('937','杭州市','','936','936','1','938,939,940,941,942,943,944,945,946,947,948,949,950','','0','0','330100','hangzhou');
INSERT INTO `web_area` VALUES('938','上城区','','937','936,937','0','938','','0','0','330102','');
INSERT INTO `web_area` VALUES('939','下城区','','937','936,937','0','939','','0','0','330103','');
INSERT INTO `web_area` VALUES('940','江干区','','937','936,937','0','940','','0','0','330104','');
INSERT INTO `web_area` VALUES('941','拱墅区','','937','936,937','0','941','','0','0','330105','');
INSERT INTO `web_area` VALUES('942','西湖区','','937','936,937','0','942','','0','0','330106','');
INSERT INTO `web_area` VALUES('943','滨江区','','937','936,937','0','943','','0','0','330108','');
INSERT INTO `web_area` VALUES('944','萧山区','','937','936,937','0','944','','0','0','330109','');
INSERT INTO `web_area` VALUES('945','余杭区','','937','936,937','0','945','','0','0','330110','');
INSERT INTO `web_area` VALUES('946','桐庐县','','937','936,937','0','946','','0','0','330122','');
INSERT INTO `web_area` VALUES('947','淳安县','','937','936,937','0','947','','0','0','330127','');
INSERT INTO `web_area` VALUES('948','建德市','','937','936,937','0','948','','0','0','330182','');
INSERT INTO `web_area` VALUES('949','富阳市','','937','936,937','0','949','','0','0','330183','');
INSERT INTO `web_area` VALUES('950','临安市','','937','936,937','0','950','','0','0','330185','');
INSERT INTO `web_area` VALUES('951','宁波市','','936','936','1','952,953,954,955,956,957,958,959,960,961,962','','0','0','330200','ningbo');
INSERT INTO `web_area` VALUES('952','海曙区','','951','936,951','0','952','','0','0','330203','');
INSERT INTO `web_area` VALUES('953','江东区','','951','936,951','0','953','','0','0','330204','');
INSERT INTO `web_area` VALUES('954','江北区','','951','936,951','0','954','','0','0','330205','');
INSERT INTO `web_area` VALUES('955','北仑区','','951','936,951','0','955','','0','0','330206','');
INSERT INTO `web_area` VALUES('956','镇海区','','951','936,951','0','956','','0','0','330211','');
INSERT INTO `web_area` VALUES('957','鄞州区','','951','936,951','0','957','','0','0','330212','');
INSERT INTO `web_area` VALUES('958','象山县','','951','936,951','0','958','','0','0','330225','');
INSERT INTO `web_area` VALUES('959','宁海县','','951','936,951','0','959','','0','0','330226','');
INSERT INTO `web_area` VALUES('960','余姚市','','951','936,951','0','960','','0','0','330281','');
INSERT INTO `web_area` VALUES('961','慈溪市','','951','936,951','0','961','','0','0','330282','');
INSERT INTO `web_area` VALUES('962','奉化市','','951','936,951','0','962','','0','0','330283','');
INSERT INTO `web_area` VALUES('963','温州市','','936','936','1','964,965,966,967,968,969,970,971,972,973,974','','0','0','330300','wenzhou');
INSERT INTO `web_area` VALUES('964','鹿城区','','963','936,963','0','964','','0','0','330302','');
INSERT INTO `web_area` VALUES('965','龙湾区','','963','936,963','0','965','','0','0','330303','');
INSERT INTO `web_area` VALUES('966','瓯海区','','963','936,963','0','966','','0','0','330304','');
INSERT INTO `web_area` VALUES('967','洞头县','','963','936,963','0','967','','0','0','330322','');
INSERT INTO `web_area` VALUES('968','永嘉县','','963','936,963','0','968','','0','0','330324','');
INSERT INTO `web_area` VALUES('969','平阳县','','963','936,963','0','969','','0','0','330326','');
INSERT INTO `web_area` VALUES('970','苍南县','','963','936,963','0','970','','0','0','330327','');
INSERT INTO `web_area` VALUES('971','文成县','','963','936,963','0','971','','0','0','330328','');
INSERT INTO `web_area` VALUES('972','泰顺县','','963','936,963','0','972','','0','0','330329','');
INSERT INTO `web_area` VALUES('973','瑞安市','','963','936,963','0','973','','0','0','330381','');
INSERT INTO `web_area` VALUES('974','乐清市','','963','936,963','0','974','','0','0','330382','');
INSERT INTO `web_area` VALUES('975','嘉兴市','','936','936','1','976,977,978,979,980,981,982','','0','0','330400','jiaxing');
INSERT INTO `web_area` VALUES('976','南湖区','','975','936,975','0','976','','0','0','330402','');
INSERT INTO `web_area` VALUES('977','秀洲区','','975','936,975','0','977','','0','0','330411','');
INSERT INTO `web_area` VALUES('978','嘉善县','','975','936,975','0','978','','0','0','330421','');
INSERT INTO `web_area` VALUES('979','海盐县','','975','936,975','0','979','','0','0','330424','');
INSERT INTO `web_area` VALUES('980','海宁市','','975','936,975','0','980','','0','0','330481','');
INSERT INTO `web_area` VALUES('981','平湖市','','975','936,975','0','981','','0','0','330482','');
INSERT INTO `web_area` VALUES('982','桐乡市','','975','936,975','0','982','','0','0','330483','');
INSERT INTO `web_area` VALUES('983','湖州市','','936','936','1','984,985,986,987,988','','0','0','330500','huzhou');
INSERT INTO `web_area` VALUES('984','吴兴区','','983','936,983','0','984','','0','0','330502','');
INSERT INTO `web_area` VALUES('985','南浔区','','983','936,983','0','985','','0','0','330503','');
INSERT INTO `web_area` VALUES('986','德清县','','983','936,983','0','986','','0','0','330521','');
INSERT INTO `web_area` VALUES('987','长兴县','','983','936,983','0','987','','0','0','330522','');
INSERT INTO `web_area` VALUES('988','安吉县','','983','936,983','0','988','','0','0','330523','');
INSERT INTO `web_area` VALUES('989','绍兴市','','936','936','1','990,991,992,993,994,995','','0','0','330600','shaoxing');
INSERT INTO `web_area` VALUES('990','越城区','','989','936,989','0','990','','0','0','330602','');
INSERT INTO `web_area` VALUES('991','绍兴县','','989','936,989','0','991','','0','0','330621','');
INSERT INTO `web_area` VALUES('992','新昌县','','989','936,989','0','992','','0','0','330624','');
INSERT INTO `web_area` VALUES('993','诸暨市','','989','936,989','0','993','','0','0','330681','');
INSERT INTO `web_area` VALUES('994','上虞市','','989','936,989','0','994','','0','0','330682','');
INSERT INTO `web_area` VALUES('995','嵊州市','','989','936,989','0','995','','0','0','330683','');
INSERT INTO `web_area` VALUES('996','金华市','','936','936','1','997,998,999,1000,1001,1002,1003,1004,1005','','0','0','330700','jinhua');
INSERT INTO `web_area` VALUES('997','婺城区','','996','936,996','0','997','','0','0','330702','');
INSERT INTO `web_area` VALUES('998','金东区','','996','936,996','0','998','','0','0','330703','');
INSERT INTO `web_area` VALUES('999','武义县','','996','936,996','0','999','','0','0','330723','');
INSERT INTO `web_area` VALUES('1000','浦江县','','996','936,996','0','1000','','0','0','330726','');
INSERT INTO `web_area` VALUES('1001','磐安县','','996','936,996','0','1001','','0','0','330727','');
INSERT INTO `web_area` VALUES('1002','兰溪市','','996','936,996','0','1002','','0','0','330781','');
INSERT INTO `web_area` VALUES('1003','义乌市','','996','936,996','0','1003','','0','0','330782','');
INSERT INTO `web_area` VALUES('1004','东阳市','','996','936,996','0','1004','','0','0','330783','');
INSERT INTO `web_area` VALUES('1005','永康市','','996','936,996','0','1005','','0','0','330784','');
INSERT INTO `web_area` VALUES('1006','衢州市','','936','936','1','1007,1008,1009,1010,1011,1012','','0','0','330800','quzhou');
INSERT INTO `web_area` VALUES('1007','柯城区','','1006','936,1006','0','1007','','0','0','330802','');
INSERT INTO `web_area` VALUES('1008','衢江区','','1006','936,1006','0','1008','','0','0','330803','');
INSERT INTO `web_area` VALUES('1009','常山县','','1006','936,1006','0','1009','','0','0','330822','');
INSERT INTO `web_area` VALUES('1010','开化县','','1006','936,1006','0','1010','','0','0','330824','');
INSERT INTO `web_area` VALUES('1011','龙游县','','1006','936,1006','0','1011','','0','0','330825','');
INSERT INTO `web_area` VALUES('1012','江山市','','1006','936,1006','0','1012','','0','0','330881','');
INSERT INTO `web_area` VALUES('1013','舟山市','','936','936','1','1014,1015,1016,1017','','0','0','330900','zhoushan');
INSERT INTO `web_area` VALUES('1014','定海区','','1013','936,1013','0','1014','','0','0','330902','');
INSERT INTO `web_area` VALUES('1015','普陀区','','1013','936,1013','0','1015','','0','0','330903','');
INSERT INTO `web_area` VALUES('1016','岱山县','','1013','936,1013','0','1016','','0','0','330921','');
INSERT INTO `web_area` VALUES('1017','嵊泗县','','1013','936,1013','0','1017','','0','0','330922','');
INSERT INTO `web_area` VALUES('1018','台州市','','936','936','1','1019,1020,1021,1022,1023,1024,1025,1026,1027','','0','0','331000','taizhoushi');
INSERT INTO `web_area` VALUES('1019','椒江区','','1018','936,1018','0','1019','','0','0','331002','');
INSERT INTO `web_area` VALUES('1020','黄岩区','','1018','936,1018','0','1020','','0','0','331003','');
INSERT INTO `web_area` VALUES('1021','路桥区','','1018','936,1018','0','1021','','0','0','331004','');
INSERT INTO `web_area` VALUES('1022','玉环县','','1018','936,1018','0','1022','','0','0','331021','');
INSERT INTO `web_area` VALUES('1023','三门县','','1018','936,1018','0','1023','','0','0','331022','');
INSERT INTO `web_area` VALUES('1024','天台县','','1018','936,1018','0','1024','','0','0','331023','');
INSERT INTO `web_area` VALUES('1025','仙居县','','1018','936,1018','0','1025','','0','0','331024','');
INSERT INTO `web_area` VALUES('1026','温岭市','','1018','936,1018','0','1026','','0','0','331081','');
INSERT INTO `web_area` VALUES('1027','临海市','','1018','936,1018','0','1027','','0','0','331082','');
INSERT INTO `web_area` VALUES('1028','丽水市','','936','936','1','1029,1030,1031,1032,1033,1034,1035,1036,1037','','0','0','331100','lishui');
INSERT INTO `web_area` VALUES('1029','莲都区','','1028','936,1028','0','1029','','0','0','331102','');
INSERT INTO `web_area` VALUES('1030','青田县','','1028','936,1028','0','1030','','0','0','331121','');
INSERT INTO `web_area` VALUES('1031','缙云县','','1028','936,1028','0','1031','','0','0','331122','');
INSERT INTO `web_area` VALUES('1032','遂昌县','','1028','936,1028','0','1032','','0','0','331123','');
INSERT INTO `web_area` VALUES('1033','松阳县','','1028','936,1028','0','1033','','0','0','331124','');
INSERT INTO `web_area` VALUES('1034','云和县','','1028','936,1028','0','1034','','0','0','331125','');
INSERT INTO `web_area` VALUES('1035','庆元县','','1028','936,1028','0','1035','','0','0','331126','');
INSERT INTO `web_area` VALUES('1036','景宁畲族自治县','','1028','936,1028','0','1036','','0','0','331127','');
INSERT INTO `web_area` VALUES('1037','龙泉市','','1028','936,1028','0','1037','','0','0','331181','');
INSERT INTO `web_area` VALUES('1038','安徽','','0','0','1','1039,1047,1055,1063,1070,1075,1080,1085,1097,1105,1114,1123,1129,1135,1143,1148,1153,1040,1041,1042,1043,1044,1045,1046','','13','0','340000','anhui');
INSERT INTO `web_area` VALUES('1039','合肥市','','1038','1038','1','1040,1041,1042,1043,1044,1045,1046','','0','0','340100','hefei');
INSERT INTO `web_area` VALUES('1040','瑶海区','','1039','1038,1039','0','1040','','0','0','340102','');
INSERT INTO `web_area` VALUES('1041','庐阳区','','1039','1038,1039','0','1041','','0','0','340103','');
INSERT INTO `web_area` VALUES('1042','蜀山区','','1039','1038,1039','0','1042','','0','0','340104','');
INSERT INTO `web_area` VALUES('1043','包河区','','1039','1038,1039','0','1043','','0','0','340111','');
INSERT INTO `web_area` VALUES('1044','长丰县','','1039','1038,1039','0','1044','','0','0','340121','');
INSERT INTO `web_area` VALUES('1045','肥东县','','1039','1038,1039','0','1045','','0','0','340122','');
INSERT INTO `web_area` VALUES('1046','肥西县','','1039','1038,1039','0','1046','','0','0','340123','');
INSERT INTO `web_area` VALUES('1047','芜湖市','','1038','1038','1','1048,1049,1050,1051,1052,1053,1054','','0','0','340200','wuhu');
INSERT INTO `web_area` VALUES('1048','镜湖区','','1047','1038,1047','0','1048','','0','0','340202','');
INSERT INTO `web_area` VALUES('1049','弋江区','','1047','1038,1047','0','1049','','0','0','340203','');
INSERT INTO `web_area` VALUES('1050','鸠江区','','1047','1038,1047','0','1050','','0','0','340207','');
INSERT INTO `web_area` VALUES('1051','三山区','','1047','1038,1047','0','1051','','0','0','340208','');
INSERT INTO `web_area` VALUES('1052','芜湖县','','1047','1038,1047','0','1052','','0','0','340221','');
INSERT INTO `web_area` VALUES('1053','繁昌县','','1047','1038,1047','0','1053','','0','0','340222','');
INSERT INTO `web_area` VALUES('1054','南陵县','','1047','1038,1047','0','1054','','0','0','340223','');
INSERT INTO `web_area` VALUES('1055','蚌埠市','','1038','1038','1','1056,1057,1058,1059,1060,1061,1062','','0','0','340300','bengbu');
INSERT INTO `web_area` VALUES('1056','龙子湖区','','1055','1038,1055','0','1056','','0','0','340302','');
INSERT INTO `web_area` VALUES('1057','蚌山区','','1055','1038,1055','0','1057','','0','0','340303','');
INSERT INTO `web_area` VALUES('1058','禹会区','','1055','1038,1055','0','1058','','0','0','340304','');
INSERT INTO `web_area` VALUES('1059','淮上区','','1055','1038,1055','0','1059','','0','0','340311','');
INSERT INTO `web_area` VALUES('1060','怀远县','','1055','1038,1055','0','1060','','0','0','340321','');
INSERT INTO `web_area` VALUES('1061','五河县','','1055','1038,1055','0','1061','','0','0','340322','');
INSERT INTO `web_area` VALUES('1062','固镇县','','1055','1038,1055','0','1062','','0','0','340323','');
INSERT INTO `web_area` VALUES('1063','淮南市','','1038','1038','1','1064,1065,1066,1067,1068,1069','','0','0','340400','huainan');
INSERT INTO `web_area` VALUES('1064','大通区','','1063','1038,1063','0','1064','','0','0','340402','');
INSERT INTO `web_area` VALUES('1065','田家庵区','','1063','1038,1063','0','1065','','0','0','340403','');
INSERT INTO `web_area` VALUES('1066','谢家集区','','1063','1038,1063','0','1066','','0','0','340404','');
INSERT INTO `web_area` VALUES('1067','八公山区','','1063','1038,1063','0','1067','','0','0','340405','');
INSERT INTO `web_area` VALUES('1068','潘集区','','1063','1038,1063','0','1068','','0','0','340406','');
INSERT INTO `web_area` VALUES('1069','凤台县','','1063','1038,1063','0','1069','','0','0','340421','');
INSERT INTO `web_area` VALUES('1070','马鞍山','','1038','1038','1','1071,1072,1073,1074','','0','0','340500','maanshan');
INSERT INTO `web_area` VALUES('1071','金家庄区','','1070','1038,1070','0','1071','','0','0','340502','');
INSERT INTO `web_area` VALUES('1072','花山区','','1070','1038,1070','0','1072','','0','0','340503','');
INSERT INTO `web_area` VALUES('1073','雨山区','','1070','1038,1070','0','1073','','0','0','340504','');
INSERT INTO `web_area` VALUES('1074','当涂县','','1070','1038,1070','0','1074','','0','0','340521','');
INSERT INTO `web_area` VALUES('1075','淮北市','','1038','1038','1','1076,1077,1078,1079','','0','0','340600','huaibei');
INSERT INTO `web_area` VALUES('1076','杜集区','','1075','1038,1075','0','1076','','0','0','340602','');
INSERT INTO `web_area` VALUES('1077','相山区','','1075','1038,1075','0','1077','','0','0','340603','');
INSERT INTO `web_area` VALUES('1078','烈山区','','1075','1038,1075','0','1078','','0','0','340604','');
INSERT INTO `web_area` VALUES('1079','濉溪县','','1075','1038,1075','0','1079','','0','0','340621','');
INSERT INTO `web_area` VALUES('1080','铜陵市','','1038','1038','1','1081,1082,1083,1084','','0','0','340700','tongling');
INSERT INTO `web_area` VALUES('1081','铜官山区','','1080','1038,1080','0','1081','','0','0','340702','');
INSERT INTO `web_area` VALUES('1082','狮子山区','','1080','1038,1080','0','1082','','0','0','340703','');
INSERT INTO `web_area` VALUES('1083','郊区','','1080','1038,1080','0','1083','','0','0','340711','');
INSERT INTO `web_area` VALUES('1084','铜陵县','','1080','1038,1080','0','1084','','0','0','340721','');
INSERT INTO `web_area` VALUES('1085','安庆市','','1038','1038','1','1086,1087,1088,1089,1090,1091,1092,1093,1094,1095,1096','','0','0','340800','anqing');
INSERT INTO `web_area` VALUES('1086','迎江区','','1085','1038,1085','0','1086','','0','0','340802','');
INSERT INTO `web_area` VALUES('1087','大观区','','1085','1038,1085','0','1087','','0','0','340803','');
INSERT INTO `web_area` VALUES('1088','宜秀区','','1085','1038,1085','0','1088','','0','0','340811','');
INSERT INTO `web_area` VALUES('1089','怀宁县','','1085','1038,1085','0','1089','','0','0','340822','');
INSERT INTO `web_area` VALUES('1090','枞阳县','','1085','1038,1085','0','1090','','0','0','340823','');
INSERT INTO `web_area` VALUES('1091','潜山县','','1085','1038,1085','0','1091','','0','0','340824','');
INSERT INTO `web_area` VALUES('1092','太湖县','','1085','1038,1085','0','1092','','0','0','340825','');
INSERT INTO `web_area` VALUES('1093','宿松县','','1085','1038,1085','0','1093','','0','0','340826','');
INSERT INTO `web_area` VALUES('1094','望江县','','1085','1038,1085','0','1094','','0','0','340827','');
INSERT INTO `web_area` VALUES('1095','岳西县','','1085','1038,1085','0','1095','','0','0','340828','');
INSERT INTO `web_area` VALUES('1096','桐城市','','1085','1038,1085','0','1096','','0','0','340881','');
INSERT INTO `web_area` VALUES('1097','黄山市','','1038','1038','1','1098,1099,1100,1101,1102,1103,1104','','0','0','341000','huangshan');
INSERT INTO `web_area` VALUES('1098','屯溪区','','1097','1038,1097','0','1098','','0','0','341002','');
INSERT INTO `web_area` VALUES('1099','黄山区','','1097','1038,1097','0','1099','','0','0','341003','');
INSERT INTO `web_area` VALUES('1100','徽州区','','1097','1038,1097','0','1100','','0','0','341004','');
INSERT INTO `web_area` VALUES('1101','歙县','','1097','1038,1097','0','1101','','0','0','341021','');
INSERT INTO `web_area` VALUES('1102','休宁县','','1097','1038,1097','0','1102','','0','0','341022','');
INSERT INTO `web_area` VALUES('1103','黟县','','1097','1038,1097','0','1103','','0','0','341023','');
INSERT INTO `web_area` VALUES('1104','祁门县','','1097','1038,1097','0','1104','','0','0','341024','');
INSERT INTO `web_area` VALUES('1105','滁州市','','1038','1038','1','1106,1107,1108,1109,1110,1111,1112,1113','','0','0','341100','chuzhou');
INSERT INTO `web_area` VALUES('1106','琅琊区','','1105','1038,1105','0','1106','','0','0','341102','');
INSERT INTO `web_area` VALUES('1107','南谯区','','1105','1038,1105','0','1107','','0','0','341103','');
INSERT INTO `web_area` VALUES('1108','来安县','','1105','1038,1105','0','1108','','0','0','341122','');
INSERT INTO `web_area` VALUES('1109','全椒县','','1105','1038,1105','0','1109','','0','0','341124','');
INSERT INTO `web_area` VALUES('1110','定远县','','1105','1038,1105','0','1110','','0','0','341125','');
INSERT INTO `web_area` VALUES('1111','凤阳县','','1105','1038,1105','0','1111','','0','0','341126','');
INSERT INTO `web_area` VALUES('1112','天长市','','1105','1038,1105','0','1112','','0','0','341181','');
INSERT INTO `web_area` VALUES('1113','明光市','','1105','1038,1105','0','1113','','0','0','341182','');
INSERT INTO `web_area` VALUES('1114','阜阳市','','1038','1038','1','1115,1116,1117,1118,1119,1120,1121,1122','','0','0','341200','fuyang');
INSERT INTO `web_area` VALUES('1115','颍州区','','1114','1038,1114','0','1115','','0','0','341202','');
INSERT INTO `web_area` VALUES('1116','颍东区','','1114','1038,1114','0','1116','','0','0','341203','');
INSERT INTO `web_area` VALUES('1117','颍泉区','','1114','1038,1114','0','1117','','0','0','341204','');
INSERT INTO `web_area` VALUES('1118','临泉县','','1114','1038,1114','0','1118','','0','0','341221','');
INSERT INTO `web_area` VALUES('1119','太和县','','1114','1038,1114','0','1119','','0','0','341222','');
INSERT INTO `web_area` VALUES('1120','阜南县','','1114','1038,1114','0','1120','','0','0','341225','');
INSERT INTO `web_area` VALUES('1121','颍上县','','1114','1038,1114','0','1121','','0','0','341226','');
INSERT INTO `web_area` VALUES('1122','界首市','','1114','1038,1114','0','1122','','0','0','341282','');
INSERT INTO `web_area` VALUES('1123','宿州市','','1038','1038','1','1124,1125,1126,1127,1128','','0','0','341300','suzhoushi');
INSERT INTO `web_area` VALUES('1124','埇桥区','','1123','1038,1123','0','1124','','0','0','341302','');
INSERT INTO `web_area` VALUES('1125','砀山县','','1123','1038,1123','0','1125','','0','0','341321','');
INSERT INTO `web_area` VALUES('1126','萧县','','1123','1038,1123','0','1126','','0','0','341322','');
INSERT INTO `web_area` VALUES('1127','灵璧县','','1123','1038,1123','0','1127','','0','0','341323','');
INSERT INTO `web_area` VALUES('1128','泗县','','1123','1038,1123','0','1128','','0','0','341324','');
INSERT INTO `web_area` VALUES('1129','巢湖市','','1038','1038','1','1130,1131,1132,1133,1134','','0','0','341400','chaohu');
INSERT INTO `web_area` VALUES('1130','居巢区','','1129','1038,1129','0','1130','','0','0','341402','');
INSERT INTO `web_area` VALUES('1131','庐江县','','1129','1038,1129','0','1131','','0','0','341421','');
INSERT INTO `web_area` VALUES('1132','无为县','','1129','1038,1129','0','1132','','0','0','341422','');
INSERT INTO `web_area` VALUES('1133','含山县','','1129','1038,1129','0','1133','','0','0','341423','');
INSERT INTO `web_area` VALUES('1134','和县','','1129','1038,1129','0','1134','','0','0','341424','');
INSERT INTO `web_area` VALUES('1135','六安市','','1038','1038','1','1136,1137,1138,1139,1140,1141,1142','','0','0','341500','liuan');
INSERT INTO `web_area` VALUES('1136','金安区','','1135','1038,1135','0','1136','','0','0','341502','');
INSERT INTO `web_area` VALUES('1137','裕安区','','1135','1038,1135','0','1137','','0','0','341503','');
INSERT INTO `web_area` VALUES('1138','寿县','','1135','1038,1135','0','1138','','0','0','341521','');
INSERT INTO `web_area` VALUES('1139','霍邱县','','1135','1038,1135','0','1139','','0','0','341522','');
INSERT INTO `web_area` VALUES('1140','舒城县','','1135','1038,1135','0','1140','','0','0','341523','');
INSERT INTO `web_area` VALUES('1141','金寨县','','1135','1038,1135','0','1141','','0','0','341524','');
INSERT INTO `web_area` VALUES('1142','霍山县','','1135','1038,1135','0','1142','','0','0','341525','');
INSERT INTO `web_area` VALUES('1143','亳州市','','1038','1038','1','1144,1145,1146,1147','','0','0','341600','bozhou');
INSERT INTO `web_area` VALUES('1144','谯城区','','1143','1038,1143','0','1144','','0','0','341602','');
INSERT INTO `web_area` VALUES('1145','涡阳县','','1143','1038,1143','0','1145','','0','0','341621','');
INSERT INTO `web_area` VALUES('1146','蒙城县','','1143','1038,1143','0','1146','','0','0','341622','');
INSERT INTO `web_area` VALUES('1147','利辛县','','1143','1038,1143','0','1147','','0','0','341623','');
INSERT INTO `web_area` VALUES('1148','池州市','','1038','1038','1','1149,1150,1151,1152','','0','0','341700','chizhou');
INSERT INTO `web_area` VALUES('1149','贵池区','','1148','1038,1148','0','1149','','0','0','341702','');
INSERT INTO `web_area` VALUES('1150','东至县','','1148','1038,1148','0','1150','','0','0','341721','');
INSERT INTO `web_area` VALUES('1151','石台县','','1148','1038,1148','0','1151','','0','0','341722','');
INSERT INTO `web_area` VALUES('1152','青阳县','','1148','1038,1148','0','1152','','0','0','341723','');
INSERT INTO `web_area` VALUES('1153','宣城市','','1038','1038','1','1154,1155,1156,1157,1158,1159,1160','','0','0','341800','xuancheng');
INSERT INTO `web_area` VALUES('1154','宣州区','','1153','1038,1153','0','1154','','0','0','341802','');
INSERT INTO `web_area` VALUES('1155','郎溪县','','1153','1038,1153','0','1155','','0','0','341821','');
INSERT INTO `web_area` VALUES('1156','广德县','','1153','1038,1153','0','1156','','0','0','341822','');
INSERT INTO `web_area` VALUES('1157','泾县','','1153','1038,1153','0','1157','','0','0','341823','');
INSERT INTO `web_area` VALUES('1158','绩溪县','','1153','1038,1153','0','1158','','0','0','341824','');
INSERT INTO `web_area` VALUES('1159','旌德县','','1153','1038,1153','0','1159','','0','0','341825','');
INSERT INTO `web_area` VALUES('1160','宁国市','','1153','1038,1153','0','1160','','0','0','341881','');
INSERT INTO `web_area` VALUES('1161','福建','','0','0','1','1162,1176,1183,1189,1202,1215,1227,1238,1246,1163,1164,1165,1166,1167,1168,1169,1170,1171,1172,1173,1174,1175','','14','0','350000','fujian');
INSERT INTO `web_area` VALUES('1162','福州市','','1161','1161','1','1163,1164,1165,1166,1167,1168,1169,1170,1171,1172,1173,1174,1175','','0','0','350100','fuzhou');
INSERT INTO `web_area` VALUES('1163','鼓楼区','','1162','1161,1162','0','1163','','0','0','350102','');
INSERT INTO `web_area` VALUES('1164','台江区','','1162','1161,1162','0','1164','','0','0','350103','');
INSERT INTO `web_area` VALUES('1165','仓山区','','1162','1161,1162','0','1165','','0','0','350104','');
INSERT INTO `web_area` VALUES('1166','马尾区','','1162','1161,1162','0','1166','','0','0','350105','');
INSERT INTO `web_area` VALUES('1167','晋安区','','1162','1161,1162','0','1167','','0','0','350111','');
INSERT INTO `web_area` VALUES('1168','闽侯县','','1162','1161,1162','0','1168','','0','0','350121','');
INSERT INTO `web_area` VALUES('1169','连江县','','1162','1161,1162','0','1169','','0','0','350122','');
INSERT INTO `web_area` VALUES('1170','罗源县','','1162','1161,1162','0','1170','','0','0','350123','');
INSERT INTO `web_area` VALUES('1171','闽清县','','1162','1161,1162','0','1171','','0','0','350124','');
INSERT INTO `web_area` VALUES('1172','永泰县','','1162','1161,1162','0','1172','','0','0','350125','');
INSERT INTO `web_area` VALUES('1173','平潭县','','1162','1161,1162','0','1173','','0','0','350128','');
INSERT INTO `web_area` VALUES('1174','福清市','','1162','1161,1162','0','1174','','0','0','350181','');
INSERT INTO `web_area` VALUES('1175','长乐市','','1162','1161,1162','0','1175','','0','0','350182','');
INSERT INTO `web_area` VALUES('1176','厦门市','','1161','1161','1','1177,1178,1179,1180,1181,1182','','0','0','350200','xiamen');
INSERT INTO `web_area` VALUES('1177','思明区','','1176','1161,1176','0','1177','','0','0','350203','');
INSERT INTO `web_area` VALUES('1178','海沧区','','1176','1161,1176','0','1178','','0','0','350205','');
INSERT INTO `web_area` VALUES('1179','湖里区','','1176','1161,1176','0','1179','','0','0','350206','');
INSERT INTO `web_area` VALUES('1180','集美区','','1176','1161,1176','0','1180','','0','0','350211','');
INSERT INTO `web_area` VALUES('1181','同安区','','1176','1161,1176','0','1181','','0','0','350212','');
INSERT INTO `web_area` VALUES('1182','翔安区','','1176','1161,1176','0','1182','','0','0','350213','');
INSERT INTO `web_area` VALUES('1183','莆田市','','1161','1161','1','1184,1185,1186,1187,1188','','0','0','350300','putian');
INSERT INTO `web_area` VALUES('1184','城厢区','','1183','1161,1183','0','1184','','0','0','350302','');
INSERT INTO `web_area` VALUES('1185','涵江区','','1183','1161,1183','0','1185','','0','0','350303','');
INSERT INTO `web_area` VALUES('1186','荔城区','','1183','1161,1183','0','1186','','0','0','350304','');
INSERT INTO `web_area` VALUES('1187','秀屿区','','1183','1161,1183','0','1187','','0','0','350305','');
INSERT INTO `web_area` VALUES('1188','仙游县','','1183','1161,1183','0','1188','','0','0','350322','');
INSERT INTO `web_area` VALUES('1189','三明市','','1161','1161','1','1190,1191,1192,1193,1194,1195,1196,1197,1198,1199,1200,1201','','0','0','350400','sanming');
INSERT INTO `web_area` VALUES('1190','梅列区','','1189','1161,1189','0','1190','','0','0','350402','');
INSERT INTO `web_area` VALUES('1191','三元区','','1189','1161,1189','0','1191','','0','0','350403','');
INSERT INTO `web_area` VALUES('1192','明溪县','','1189','1161,1189','0','1192','','0','0','350421','');
INSERT INTO `web_area` VALUES('1193','清流县','','1189','1161,1189','0','1193','','0','0','350423','');
INSERT INTO `web_area` VALUES('1194','宁化县','','1189','1161,1189','0','1194','','0','0','350424','');
INSERT INTO `web_area` VALUES('1195','大田县','','1189','1161,1189','0','1195','','0','0','350425','');
INSERT INTO `web_area` VALUES('1196','尤溪县','','1189','1161,1189','0','1196','','0','0','350426','');
INSERT INTO `web_area` VALUES('1197','沙县','','1189','1161,1189','0','1197','','0','0','350427','');
INSERT INTO `web_area` VALUES('1198','将乐县','','1189','1161,1189','0','1198','','0','0','350428','');
INSERT INTO `web_area` VALUES('1199','泰宁县','','1189','1161,1189','0','1199','','0','0','350429','');
INSERT INTO `web_area` VALUES('1200','建宁县','','1189','1161,1189','0','1200','','0','0','350430','');
INSERT INTO `web_area` VALUES('1201','永安市','','1189','1161,1189','0','1201','','0','0','350481','');
INSERT INTO `web_area` VALUES('1202','泉州市','','1161','1161','1','1203,1204,1205,1206,1207,1208,1209,1210,1211,1212,1213,1214','','0','0','350500','quanzhou');
INSERT INTO `web_area` VALUES('1203','鲤城区','','1202','1161,1202','0','1203','','0','0','350502','');
INSERT INTO `web_area` VALUES('1204','丰泽区','','1202','1161,1202','0','1204','','0','0','350503','');
INSERT INTO `web_area` VALUES('1205','洛江区','','1202','1161,1202','0','1205','','0','0','350504','');
INSERT INTO `web_area` VALUES('1206','泉港区','','1202','1161,1202','0','1206','','0','0','350505','');
INSERT INTO `web_area` VALUES('1207','惠安县','','1202','1161,1202','0','1207','','0','0','350521','');
INSERT INTO `web_area` VALUES('1208','安溪县','','1202','1161,1202','0','1208','','0','0','350524','');
INSERT INTO `web_area` VALUES('1209','永春县','','1202','1161,1202','0','1209','','0','0','350525','');
INSERT INTO `web_area` VALUES('1210','德化县','','1202','1161,1202','0','1210','','0','0','350526','');
INSERT INTO `web_area` VALUES('1211','金门县','','1202','1161,1202','0','1211','','0','0','350527','');
INSERT INTO `web_area` VALUES('1212','石狮市','','1202','1161,1202','0','1212','','0','0','350581','');
INSERT INTO `web_area` VALUES('1213','晋江市','','1202','1161,1202','0','1213','','0','0','350582','');
INSERT INTO `web_area` VALUES('1214','南安市','','1202','1161,1202','0','1214','','0','0','350583','');
INSERT INTO `web_area` VALUES('1215','漳州市','','1161','1161','1','1216,1217,1218,1219,1220,1221,1222,1223,1224,1225,1226','','0','0','350600','zhangzhou');
INSERT INTO `web_area` VALUES('1216','芗城区','','1215','1161,1215','0','1216','','0','0','350602','');
INSERT INTO `web_area` VALUES('1217','龙文区','','1215','1161,1215','0','1217','','0','0','350603','');
INSERT INTO `web_area` VALUES('1218','云霄县','','1215','1161,1215','0','1218','','0','0','350622','');
INSERT INTO `web_area` VALUES('1219','漳浦县','','1215','1161,1215','0','1219','','0','0','350623','');
INSERT INTO `web_area` VALUES('1220','诏安县','','1215','1161,1215','0','1220','','0','0','350624','');
INSERT INTO `web_area` VALUES('1221','长泰县','','1215','1161,1215','0','1221','','0','0','350625','');
INSERT INTO `web_area` VALUES('1222','东山县','','1215','1161,1215','0','1222','','0','0','350626','');
INSERT INTO `web_area` VALUES('1223','南靖县','','1215','1161,1215','0','1223','','0','0','350627','');
INSERT INTO `web_area` VALUES('1224','平和县','','1215','1161,1215','0','1224','','0','0','350628','');
INSERT INTO `web_area` VALUES('1225','华安县','','1215','1161,1215','0','1225','','0','0','350629','');
INSERT INTO `web_area` VALUES('1226','龙海市','','1215','1161,1215','0','1226','','0','0','350681','');
INSERT INTO `web_area` VALUES('1227','南平市','','1161','1161','1','1228,1229,1230,1231,1232,1233,1234,1235,1236,1237','','0','0','350700','nanping');
INSERT INTO `web_area` VALUES('1228','延平区','','1227','1161,1227','0','1228','','0','0','350702','');
INSERT INTO `web_area` VALUES('1229','顺昌县','','1227','1161,1227','0','1229','','0','0','350721','');
INSERT INTO `web_area` VALUES('1230','浦城县','','1227','1161,1227','0','1230','','0','0','350722','');
INSERT INTO `web_area` VALUES('1231','光泽县','','1227','1161,1227','0','1231','','0','0','350723','');
INSERT INTO `web_area` VALUES('1232','松溪县','','1227','1161,1227','0','1232','','0','0','350724','');
INSERT INTO `web_area` VALUES('1233','政和县','','1227','1161,1227','0','1233','','0','0','350725','');
INSERT INTO `web_area` VALUES('1234','邵武市','','1227','1161,1227','0','1234','','0','0','350781','');
INSERT INTO `web_area` VALUES('1235','武夷山市','','1227','1161,1227','0','1235','','0','0','350782','');
INSERT INTO `web_area` VALUES('1236','建瓯市','','1227','1161,1227','0','1236','','0','0','350783','');
INSERT INTO `web_area` VALUES('1237','建阳市','','1227','1161,1227','0','1237','','0','0','350784','');
INSERT INTO `web_area` VALUES('1238','龙岩市','','1161','1161','1','1239,1240,1241,1242,1243,1244,1245','','0','0','350800','longyan');
INSERT INTO `web_area` VALUES('1239','新罗区','','1238','1161,1238','0','1239','','0','0','350802','');
INSERT INTO `web_area` VALUES('1240','长汀县','','1238','1161,1238','0','1240','','0','0','350821','');
INSERT INTO `web_area` VALUES('1241','永定县','','1238','1161,1238','0','1241','','0','0','350822','');
INSERT INTO `web_area` VALUES('1242','上杭县','','1238','1161,1238','0','1242','','0','0','350823','');
INSERT INTO `web_area` VALUES('1243','武平县','','1238','1161,1238','0','1243','','0','0','350824','');
INSERT INTO `web_area` VALUES('1244','连城县','','1238','1161,1238','0','1244','','0','0','350825','');
INSERT INTO `web_area` VALUES('1245','漳平市','','1238','1161,1238','0','1245','','0','0','350881','');
INSERT INTO `web_area` VALUES('1246','宁德市','','1161','1161','1','1247,1248,1249,1250,1251,1252,1253,1254,1255','','0','0','350900','ningde');
INSERT INTO `web_area` VALUES('1247','蕉城区','','1246','1161,1246','0','1247','','0','0','350902','');
INSERT INTO `web_area` VALUES('1248','霞浦县','','1246','1161,1246','0','1248','','0','0','350921','');
INSERT INTO `web_area` VALUES('1249','古田县','','1246','1161,1246','0','1249','','0','0','350922','');
INSERT INTO `web_area` VALUES('1250','屏南县','','1246','1161,1246','0','1250','','0','0','350923','');
INSERT INTO `web_area` VALUES('1251','寿宁县','','1246','1161,1246','0','1251','','0','0','350924','');
INSERT INTO `web_area` VALUES('1252','周宁县','','1246','1161,1246','0','1252','','0','0','350925','');
INSERT INTO `web_area` VALUES('1253','柘荣县','','1246','1161,1246','0','1253','','0','0','350926','');
INSERT INTO `web_area` VALUES('1254','福安市','','1246','1161,1246','0','1254','','0','0','350981','');
INSERT INTO `web_area` VALUES('1255','福鼎市','','1246','1161,1246','0','1255','','0','0','350982','');
INSERT INTO `web_area` VALUES('1256','江西','','0','0','1','1257,1267,1272,1278,1292,1295,1299,1318,1332,1343,1355,1258,1259,1260,1261,1262,1263,1264,1265,1266','','15','0','360000','jiangxi');
INSERT INTO `web_area` VALUES('1257','南昌市','','1256','1256','1','1258,1259,1260,1261,1262,1263,1264,1265,1266','','0','0','360100','nanchang');
INSERT INTO `web_area` VALUES('1258','东湖区','','1257','1256,1257','0','1258','','0','0','360102','');
INSERT INTO `web_area` VALUES('1259','西湖区','','1257','1256,1257','0','1259','','0','0','360103','');
INSERT INTO `web_area` VALUES('1260','青云谱区','','1257','1256,1257','0','1260','','0','0','360104','');
INSERT INTO `web_area` VALUES('1261','湾里区','','1257','1256,1257','0','1261','','0','0','360105','');
INSERT INTO `web_area` VALUES('1262','青山湖区','','1257','1256,1257','0','1262','','0','0','360111','');
INSERT INTO `web_area` VALUES('1263','南昌县','','1257','1256,1257','0','1263','','0','0','360121','');
INSERT INTO `web_area` VALUES('1264','新建县','','1257','1256,1257','0','1264','','0','0','360122','');
INSERT INTO `web_area` VALUES('1265','安义县','','1257','1256,1257','0','1265','','0','0','360123','');
INSERT INTO `web_area` VALUES('1266','进贤县','','1257','1256,1257','0','1266','','0','0','360124','');
INSERT INTO `web_area` VALUES('1267','景德镇','','1256','1256','1','1268,1269,1270,1271','','0','0','360200','jingdezhen');
INSERT INTO `web_area` VALUES('1268','昌江区','','1267','1256,1267','0','1268','','0','0','360202','');
INSERT INTO `web_area` VALUES('1269','珠山区','','1267','1256,1267','0','1269','','0','0','360203','');
INSERT INTO `web_area` VALUES('1270','浮梁县','','1267','1256,1267','0','1270','','0','0','360222','');
INSERT INTO `web_area` VALUES('1271','乐平市','','1267','1256,1267','0','1271','','0','0','360281','');
INSERT INTO `web_area` VALUES('1272','萍乡市','','1256','1256','1','1273,1274,1275,1276,1277','','0','0','360300','pingxiang');
INSERT INTO `web_area` VALUES('1273','安源区','','1272','1256,1272','0','1273','','0','0','360302','');
INSERT INTO `web_area` VALUES('1274','湘东区','','1272','1256,1272','0','1274','','0','0','360313','');
INSERT INTO `web_area` VALUES('1275','莲花县','','1272','1256,1272','0','1275','','0','0','360321','');
INSERT INTO `web_area` VALUES('1276','上栗县','','1272','1256,1272','0','1276','','0','0','360322','');
INSERT INTO `web_area` VALUES('1277','芦溪县','','1272','1256,1272','0','1277','','0','0','360323','');
INSERT INTO `web_area` VALUES('1278','九江市','','1256','1256','1','1279,1280,1281,1282,1283,1284,1285,1286,1287,1288,1289,1290,1291','','0','0','360400','jiujiang');
INSERT INTO `web_area` VALUES('1279','庐山区','','1278','1256,1278','0','1279','','0','0','360402','');
INSERT INTO `web_area` VALUES('1280','浔阳区','','1278','1256,1278','0','1280','','0','0','360403','');
INSERT INTO `web_area` VALUES('1281','九江县','','1278','1256,1278','0','1281','','0','0','360421','');
INSERT INTO `web_area` VALUES('1282','武宁县','','1278','1256,1278','0','1282','','0','0','360423','');
INSERT INTO `web_area` VALUES('1283','修水县','','1278','1256,1278','0','1283','','0','0','360424','');
INSERT INTO `web_area` VALUES('1284','永修县','','1278','1256,1278','0','1284','','0','0','360425','');
INSERT INTO `web_area` VALUES('1285','德安县','','1278','1256,1278','0','1285','','0','0','360426','');
INSERT INTO `web_area` VALUES('1286','星子县','','1278','1256,1278','0','1286','','0','0','360427','');
INSERT INTO `web_area` VALUES('1287','都昌县','','1278','1256,1278','0','1287','','0','0','360428','');
INSERT INTO `web_area` VALUES('1288','湖口县','','1278','1256,1278','0','1288','','0','0','360429','');
INSERT INTO `web_area` VALUES('1289','彭泽县','','1278','1256,1278','0','1289','','0','0','360430','');
INSERT INTO `web_area` VALUES('1290','瑞昌市','','1278','1256,1278','0','1290','','0','0','360481','');
INSERT INTO `web_area` VALUES('1291','共青城市','','1278','1256,1278','0','1291','','0','0','360482','');
INSERT INTO `web_area` VALUES('1292','新余市','','1256','1256','1','1293,1294','','0','0','360500','xinyu');
INSERT INTO `web_area` VALUES('1293','渝水区','','1292','1256,1292','0','1293','','0','0','360502','');
INSERT INTO `web_area` VALUES('1294','分宜县','','1292','1256,1292','0','1294','','0','0','360521','');
INSERT INTO `web_area` VALUES('1295','鹰潭市','','1256','1256','1','1296,1297,1298','','0','0','360600','yingtan');
INSERT INTO `web_area` VALUES('1296','月湖区','','1295','1256,1295','0','1296','','0','0','360602','');
INSERT INTO `web_area` VALUES('1297','余江县','','1295','1256,1295','0','1297','','0','0','360622','');
INSERT INTO `web_area` VALUES('1298','贵溪市','','1295','1256,1295','0','1298','','0','0','360681','');
INSERT INTO `web_area` VALUES('1299','赣州市','','1256','1256','1','1300,1301,1302,1303,1304,1305,1306,1307,1308,1309,1310,1311,1312,1313,1314,1315,1316,1317','','0','0','360700','ganzhou');
INSERT INTO `web_area` VALUES('1300','章贡区','','1299','1256,1299','0','1300','','0','0','360702','');
INSERT INTO `web_area` VALUES('1301','赣县','','1299','1256,1299','0','1301','','0','0','360721','');
INSERT INTO `web_area` VALUES('1302','信丰县','','1299','1256,1299','0','1302','','0','0','360722','');
INSERT INTO `web_area` VALUES('1303','大余县','','1299','1256,1299','0','1303','','0','0','360723','');
INSERT INTO `web_area` VALUES('1304','上犹县','','1299','1256,1299','0','1304','','0','0','360724','');
INSERT INTO `web_area` VALUES('1305','崇义县','','1299','1256,1299','0','1305','','0','0','360725','');
INSERT INTO `web_area` VALUES('1306','安远县','','1299','1256,1299','0','1306','','0','0','360726','');
INSERT INTO `web_area` VALUES('1307','龙南县','','1299','1256,1299','0','1307','','0','0','360727','');
INSERT INTO `web_area` VALUES('1308','定南县','','1299','1256,1299','0','1308','','0','0','360728','');
INSERT INTO `web_area` VALUES('1309','全南县','','1299','1256,1299','0','1309','','0','0','360729','');
INSERT INTO `web_area` VALUES('1310','宁都县','','1299','1256,1299','0','1310','','0','0','360730','');
INSERT INTO `web_area` VALUES('1311','于都县','','1299','1256,1299','0','1311','','0','0','360731','');
INSERT INTO `web_area` VALUES('1312','兴国县','','1299','1256,1299','0','1312','','0','0','360732','');
INSERT INTO `web_area` VALUES('1313','会昌县','','1299','1256,1299','0','1313','','0','0','360733','');
INSERT INTO `web_area` VALUES('1314','寻乌县','','1299','1256,1299','0','1314','','0','0','360734','');
INSERT INTO `web_area` VALUES('1315','石城县','','1299','1256,1299','0','1315','','0','0','360735','');
INSERT INTO `web_area` VALUES('1316','瑞金市','','1299','1256,1299','0','1316','','0','0','360781','');
INSERT INTO `web_area` VALUES('1317','南康市','','1299','1256,1299','0','1317','','0','0','360782','');
INSERT INTO `web_area` VALUES('1318','吉安市','','1256','1256','1','1319,1320,1321,1322,1323,1324,1325,1326,1327,1328,1329,1330,1331','','0','0','360800','jian');
INSERT INTO `web_area` VALUES('1319','吉州区','','1318','1256,1318','0','1319','','0','0','360802','');
INSERT INTO `web_area` VALUES('1320','青原区','','1318','1256,1318','0','1320','','0','0','360803','');
INSERT INTO `web_area` VALUES('1321','吉安县','','1318','1256,1318','0','1321','','0','0','360821','');
INSERT INTO `web_area` VALUES('1322','吉水县','','1318','1256,1318','0','1322','','0','0','360822','');
INSERT INTO `web_area` VALUES('1323','峡江县','','1318','1256,1318','0','1323','','0','0','360823','');
INSERT INTO `web_area` VALUES('1324','新干县','','1318','1256,1318','0','1324','','0','0','360824','');
INSERT INTO `web_area` VALUES('1325','永丰县','','1318','1256,1318','0','1325','','0','0','360825','');
INSERT INTO `web_area` VALUES('1326','泰和县','','1318','1256,1318','0','1326','','0','0','360826','');
INSERT INTO `web_area` VALUES('1327','遂川县','','1318','1256,1318','0','1327','','0','0','360827','');
INSERT INTO `web_area` VALUES('1328','万安县','','1318','1256,1318','0','1328','','0','0','360828','');
INSERT INTO `web_area` VALUES('1329','安福县','','1318','1256,1318','0','1329','','0','0','360829','');
INSERT INTO `web_area` VALUES('1330','永新县','','1318','1256,1318','0','1330','','0','0','360830','');
INSERT INTO `web_area` VALUES('1331','井冈山市','','1318','1256,1318','0','1331','','0','0','360881','');
INSERT INTO `web_area` VALUES('1332','宜春市','','1256','1256','1','1333,1334,1335,1336,1337,1338,1339,1340,1341,1342','','0','0','360900','yichun');
INSERT INTO `web_area` VALUES('1333','袁州区','','1332','1256,1332','0','1333','','0','0','360902','');
INSERT INTO `web_area` VALUES('1334','奉新县','','1332','1256,1332','0','1334','','0','0','360921','');
INSERT INTO `web_area` VALUES('1335','万载县','','1332','1256,1332','0','1335','','0','0','360922','');
INSERT INTO `web_area` VALUES('1336','上高县','','1332','1256,1332','0','1336','','0','0','360923','');
INSERT INTO `web_area` VALUES('1337','宜丰县','','1332','1256,1332','0','1337','','0','0','360924','');
INSERT INTO `web_area` VALUES('1338','靖安县','','1332','1256,1332','0','1338','','0','0','360925','');
INSERT INTO `web_area` VALUES('1339','铜鼓县','','1332','1256,1332','0','1339','','0','0','360926','');
INSERT INTO `web_area` VALUES('1340','丰城市','','1332','1256,1332','0','1340','','0','0','360981','');
INSERT INTO `web_area` VALUES('1341','樟树市','','1332','1256,1332','0','1341','','0','0','360982','');
INSERT INTO `web_area` VALUES('1342','高安市','','1332','1256,1332','0','1342','','0','0','360983','');
INSERT INTO `web_area` VALUES('1343','抚州市','','1256','1256','1','1344,1345,1346,1347,1348,1349,1350,1351,1352,1353,1354','','0','0','361000','fuzhoushi');
INSERT INTO `web_area` VALUES('1344','临川区','','1343','1256,1343','0','1344','','0','0','361002','');
INSERT INTO `web_area` VALUES('1345','南城县','','1343','1256,1343','0','1345','','0','0','361021','');
INSERT INTO `web_area` VALUES('1346','黎川县','','1343','1256,1343','0','1346','','0','0','361022','');
INSERT INTO `web_area` VALUES('1347','南丰县','','1343','1256,1343','0','1347','','0','0','361023','');
INSERT INTO `web_area` VALUES('1348','崇仁县','','1343','1256,1343','0','1348','','0','0','361024','');
INSERT INTO `web_area` VALUES('1349','乐安县','','1343','1256,1343','0','1349','','0','0','361025','');
INSERT INTO `web_area` VALUES('1350','宜黄县','','1343','1256,1343','0','1350','','0','0','361026','');
INSERT INTO `web_area` VALUES('1351','金溪县','','1343','1256,1343','0','1351','','0','0','361027','');
INSERT INTO `web_area` VALUES('1352','资溪县','','1343','1256,1343','0','1352','','0','0','361028','');
INSERT INTO `web_area` VALUES('1353','东乡县','','1343','1256,1343','0','1353','','0','0','361029','');
INSERT INTO `web_area` VALUES('1354','广昌县','','1343','1256,1343','0','1354','','0','0','361030','');
INSERT INTO `web_area` VALUES('1355','上饶市','','1256','1256','1','1356,1357,1358,1359,1360,1361,1362,1363,1364,1365,1366,1367','','0','0','361100','shangrao');
INSERT INTO `web_area` VALUES('1356','信州区','','1355','1256,1355','0','1356','','0','0','361102','');
INSERT INTO `web_area` VALUES('1357','上饶县','','1355','1256,1355','0','1357','','0','0','361121','');
INSERT INTO `web_area` VALUES('1358','广丰县','','1355','1256,1355','0','1358','','0','0','361122','');
INSERT INTO `web_area` VALUES('1359','玉山县','','1355','1256,1355','0','1359','','0','0','361123','');
INSERT INTO `web_area` VALUES('1360','铅山县','','1355','1256,1355','0','1360','','0','0','361124','');
INSERT INTO `web_area` VALUES('1361','横峰县','','1355','1256,1355','0','1361','','0','0','361125','');
INSERT INTO `web_area` VALUES('1362','弋阳县','','1355','1256,1355','0','1362','','0','0','361126','');
INSERT INTO `web_area` VALUES('1363','余干县','','1355','1256,1355','0','1363','','0','0','361127','');
INSERT INTO `web_area` VALUES('1364','鄱阳县','','1355','1256,1355','0','1364','','0','0','361128','');
INSERT INTO `web_area` VALUES('1365','万年县','','1355','1256,1355','0','1365','','0','0','361129','');
INSERT INTO `web_area` VALUES('1366','婺源县','','1355','1256,1355','0','1366','','0','0','361130','');
INSERT INTO `web_area` VALUES('1367','德兴市','','1355','1256,1355','0','1367','','0','0','361181','');
INSERT INTO `web_area` VALUES('1368','山东','','0','0','1','1369,1380,1393,1402,1409,1415,1428,1441,1454,1461,1466,1471,1474,1487,1499,1508,1516,1370,1371,1372,1373,1374,1375,1376,1377,1378,1379','','8','0','370000','shandong');
INSERT INTO `web_area` VALUES('1369','济南市','','1368','1368','1','1370,1371,1372,1373,1374,1375,1376,1377,1378,1379','','0','0','370100','jinan');
INSERT INTO `web_area` VALUES('1370','历下区','','1369','1368,1369','0','1370','','0','0','370102','');
INSERT INTO `web_area` VALUES('1371','市中区','','1369','1368,1369','0','1371','','0','0','370103','');
INSERT INTO `web_area` VALUES('1372','槐荫区','','1369','1368,1369','0','1372','','0','0','370104','');
INSERT INTO `web_area` VALUES('1373','天桥区','','1369','1368,1369','0','1373','','0','0','370105','');
INSERT INTO `web_area` VALUES('1374','历城区','','1369','1368,1369','0','1374','','0','0','370112','');
INSERT INTO `web_area` VALUES('1375','长清区','','1369','1368,1369','0','1375','','0','0','370113','');
INSERT INTO `web_area` VALUES('1376','平阴县','','1369','1368,1369','0','1376','','0','0','370124','');
INSERT INTO `web_area` VALUES('1377','济阳县','','1369','1368,1369','0','1377','','0','0','370125','');
INSERT INTO `web_area` VALUES('1378','商河县','','1369','1368,1369','0','1378','','0','0','370126','');
INSERT INTO `web_area` VALUES('1379','章丘市','','1369','1368,1369','0','1379','','0','0','370181','');
INSERT INTO `web_area` VALUES('1380','青岛市','','1368','1368','1','1381,1382,1383,1384,1385,1386,1387,1388,1389,1390,1391,1392','','0','0','370200','qingdao');
INSERT INTO `web_area` VALUES('1381','市南区','','1380','1368,1380','0','1381','','0','0','370202','');
INSERT INTO `web_area` VALUES('1382','市北区','','1380','1368,1380','0','1382','','0','0','370203','');
INSERT INTO `web_area` VALUES('1383','四方区','','1380','1368,1380','0','1383','','0','0','370205','');
INSERT INTO `web_area` VALUES('1384','黄岛区','','1380','1368,1380','0','1384','','0','0','370211','');
INSERT INTO `web_area` VALUES('1385','崂山区','','1380','1368,1380','0','1385','','0','0','370212','');
INSERT INTO `web_area` VALUES('1386','李沧区','','1380','1368,1380','0','1386','','0','0','370213','');
INSERT INTO `web_area` VALUES('1387','城阳区','','1380','1368,1380','0','1387','','0','0','370214','');
INSERT INTO `web_area` VALUES('1388','胶州市','','1380','1368,1380','0','1388','','0','0','370281','');
INSERT INTO `web_area` VALUES('1389','即墨市','','1380','1368,1380','0','1389','','0','0','370282','');
INSERT INTO `web_area` VALUES('1390','平度市','','1380','1368,1380','0','1390','','0','0','370283','');
INSERT INTO `web_area` VALUES('1391','胶南市','','1380','1368,1380','0','1391','','0','0','370284','');
INSERT INTO `web_area` VALUES('1392','莱西市','','1380','1368,1380','0','1392','','0','0','370285','');
INSERT INTO `web_area` VALUES('1393','淄博市','','1368','1368','1','1394,1395,1396,1397,1398,1399,1400,1401','','0','0','370300','zibo');
INSERT INTO `web_area` VALUES('1394','淄川区','','1393','1368,1393','0','1394','','0','0','370302','');
INSERT INTO `web_area` VALUES('1395','张店区','','1393','1368,1393','0','1395','','0','0','370303','');
INSERT INTO `web_area` VALUES('1396','博山区','','1393','1368,1393','0','1396','','0','0','370304','');
INSERT INTO `web_area` VALUES('1397','临淄区','','1393','1368,1393','0','1397','','0','0','370305','');
INSERT INTO `web_area` VALUES('1398','周村区','','1393','1368,1393','0','1398','','0','0','370306','');
INSERT INTO `web_area` VALUES('1399','桓台县','','1393','1368,1393','0','1399','','0','0','370321','');
INSERT INTO `web_area` VALUES('1400','高青县','','1393','1368,1393','0','1400','','0','0','370322','');
INSERT INTO `web_area` VALUES('1401','沂源县','','1393','1368,1393','0','1401','','0','0','370323','');
INSERT INTO `web_area` VALUES('1402','枣庄市','','1368','1368','1','1403,1404,1405,1406,1407,1408','','0','0','370400','zaozhuang');
INSERT INTO `web_area` VALUES('1403','市中区','','1402','1368,1402','0','1403','','0','0','370402','');
INSERT INTO `web_area` VALUES('1404','薛城区','','1402','1368,1402','0','1404','','0','0','370403','');
INSERT INTO `web_area` VALUES('1405','峄城区','','1402','1368,1402','0','1405','','0','0','370404','');
INSERT INTO `web_area` VALUES('1406','台儿庄区','','1402','1368,1402','0','1406','','0','0','370405','');
INSERT INTO `web_area` VALUES('1407','山亭区','','1402','1368,1402','0','1407','','0','0','370406','');
INSERT INTO `web_area` VALUES('1408','滕州市','','1402','1368,1402','0','1408','','0','0','370481','');
INSERT INTO `web_area` VALUES('1409','东营市','','1368','1368','1','1410,1411,1412,1413,1414','','0','0','370500','dongying');
INSERT INTO `web_area` VALUES('1410','东营区','','1409','1368,1409','0','1410','','0','0','370502','');
INSERT INTO `web_area` VALUES('1411','河口区','','1409','1368,1409','0','1411','','0','0','370503','');
INSERT INTO `web_area` VALUES('1412','垦利县','','1409','1368,1409','0','1412','','0','0','370521','');
INSERT INTO `web_area` VALUES('1413','利津县','','1409','1368,1409','0','1413','','0','0','370522','');
INSERT INTO `web_area` VALUES('1414','广饶县','','1409','1368,1409','0','1414','','0','0','370523','');
INSERT INTO `web_area` VALUES('1415','烟台市','','1368','1368','1','1416,1417,1418,1419,1420,1421,1422,1423,1424,1425,1426,1427','','0','0','370600','yantai');
INSERT INTO `web_area` VALUES('1416','芝罘区','','1415','1368,1415','0','1416','','0','0','370602','');
INSERT INTO `web_area` VALUES('1417','福山区','','1415','1368,1415','0','1417','','0','0','370611','');
INSERT INTO `web_area` VALUES('1418','牟平区','','1415','1368,1415','0','1418','','0','0','370612','');
INSERT INTO `web_area` VALUES('1419','莱山区','','1415','1368,1415','0','1419','','0','0','370613','');
INSERT INTO `web_area` VALUES('1420','长岛县','','1415','1368,1415','0','1420','','0','0','370634','');
INSERT INTO `web_area` VALUES('1421','龙口市','','1415','1368,1415','0','1421','','0','0','370681','');
INSERT INTO `web_area` VALUES('1422','莱阳市','','1415','1368,1415','0','1422','','0','0','370682','');
INSERT INTO `web_area` VALUES('1423','莱州市','','1415','1368,1415','0','1423','','0','0','370683','');
INSERT INTO `web_area` VALUES('1424','蓬莱市','','1415','1368,1415','0','1424','','0','0','370684','');
INSERT INTO `web_area` VALUES('1425','招远市','','1415','1368,1415','0','1425','','0','0','370685','');
INSERT INTO `web_area` VALUES('1426','栖霞市','','1415','1368,1415','0','1426','','0','0','370686','');
INSERT INTO `web_area` VALUES('1427','海阳市','','1415','1368,1415','0','1427','','0','0','370687','');
INSERT INTO `web_area` VALUES('1428','潍坊市','','1368','1368','1','1429,1430,1431,1432,1433,1434,1435,1436,1437,1438,1439,1440','','0','0','370700','weifang');
INSERT INTO `web_area` VALUES('1429','潍城区','','1428','1368,1428','0','1429','','0','0','370702','');
INSERT INTO `web_area` VALUES('1430','寒亭区','','1428','1368,1428','0','1430','','0','0','370703','');
INSERT INTO `web_area` VALUES('1431','坊子区','','1428','1368,1428','0','1431','','0','0','370704','');
INSERT INTO `web_area` VALUES('1432','奎文区','','1428','1368,1428','0','1432','','0','0','370705','');
INSERT INTO `web_area` VALUES('1433','临朐县','','1428','1368,1428','0','1433','','0','0','370724','');
INSERT INTO `web_area` VALUES('1434','昌乐县','','1428','1368,1428','0','1434','','0','0','370725','');
INSERT INTO `web_area` VALUES('1435','青州市','','1428','1368,1428','0','1435','','0','0','370781','');
INSERT INTO `web_area` VALUES('1436','诸城市','','1428','1368,1428','0','1436','','0','0','370782','');
INSERT INTO `web_area` VALUES('1437','寿光市','','1428','1368,1428','0','1437','','0','0','370783','');
INSERT INTO `web_area` VALUES('1438','安丘市','','1428','1368,1428','0','1438','','0','0','370784','');
INSERT INTO `web_area` VALUES('1439','高密市','','1428','1368,1428','0','1439','','0','0','370785','');
INSERT INTO `web_area` VALUES('1440','昌邑市','','1428','1368,1428','0','1440','','0','0','370786','');
INSERT INTO `web_area` VALUES('1441','济宁市','','1368','1368','1','1442,1443,1444,1445,1446,1447,1448,1449,1450,1451,1452,1453','','0','0','370800','jining');
INSERT INTO `web_area` VALUES('1442','市中区','','1441','1368,1441','0','1442','','0','0','370802','');
INSERT INTO `web_area` VALUES('1443','任城区','','1441','1368,1441','0','1443','','0','0','370811','');
INSERT INTO `web_area` VALUES('1444','微山县','','1441','1368,1441','0','1444','','0','0','370826','');
INSERT INTO `web_area` VALUES('1445','鱼台县','','1441','1368,1441','0','1445','','0','0','370827','');
INSERT INTO `web_area` VALUES('1446','金乡县','','1441','1368,1441','0','1446','','0','0','370828','');
INSERT INTO `web_area` VALUES('1447','嘉祥县','','1441','1368,1441','0','1447','','0','0','370829','');
INSERT INTO `web_area` VALUES('1448','汶上县','','1441','1368,1441','0','1448','','0','0','370830','');
INSERT INTO `web_area` VALUES('1449','泗水县','','1441','1368,1441','0','1449','','0','0','370831','');
INSERT INTO `web_area` VALUES('1450','梁山县','','1441','1368,1441','0','1450','','0','0','370832','');
INSERT INTO `web_area` VALUES('1451','曲阜市','','1441','1368,1441','0','1451','','0','0','370881','');
INSERT INTO `web_area` VALUES('1452','兖州市','','1441','1368,1441','0','1452','','0','0','370882','');
INSERT INTO `web_area` VALUES('1453','邹城市','','1441','1368,1441','0','1453','','0','0','370883','');
INSERT INTO `web_area` VALUES('1454','泰安市','','1368','1368','1','1455,1456,1457,1458,1459,1460','','0','0','370900','taian');
INSERT INTO `web_area` VALUES('1455','泰山区','','1454','1368,1454','0','1455','','0','0','370902','');
INSERT INTO `web_area` VALUES('1456','岱岳区','','1454','1368,1454','0','1456','','0','0','370911','');
INSERT INTO `web_area` VALUES('1457','宁阳县','','1454','1368,1454','0','1457','','0','0','370921','');
INSERT INTO `web_area` VALUES('1458','东平县','','1454','1368,1454','0','1458','','0','0','370923','');
INSERT INTO `web_area` VALUES('1459','新泰市','','1454','1368,1454','0','1459','','0','0','370982','');
INSERT INTO `web_area` VALUES('1460','肥城市','','1454','1368,1454','0','1460','','0','0','370983','');
INSERT INTO `web_area` VALUES('1461','威海市','','1368','1368','1','1462,1463,1464,1465','','0','0','371000','weihai');
INSERT INTO `web_area` VALUES('1462','环翠区','','1461','1368,1461','0','1462','','0','0','371002','');
INSERT INTO `web_area` VALUES('1463','文登市','','1461','1368,1461','0','1463','','0','0','371081','');
INSERT INTO `web_area` VALUES('1464','荣成市','','1461','1368,1461','0','1464','','0','0','371082','');
INSERT INTO `web_area` VALUES('1465','乳山市','','1461','1368,1461','0','1465','','0','0','371083','');
INSERT INTO `web_area` VALUES('1466','日照市','','1368','1368','1','1467,1468,1469,1470','','0','0','371100','rizhao');
INSERT INTO `web_area` VALUES('1467','东港区','','1466','1368,1466','0','1467','','0','0','371102','');
INSERT INTO `web_area` VALUES('1468','岚山区','','1466','1368,1466','0','1468','','0','0','371103','');
INSERT INTO `web_area` VALUES('1469','五莲县','','1466','1368,1466','0','1469','','0','0','371121','');
INSERT INTO `web_area` VALUES('1470','莒县','','1466','1368,1466','0','1470','','0','0','371122','');
INSERT INTO `web_area` VALUES('1471','莱芜市','','1368','1368','1','1472,1473','','0','0','371200','laiwu');
INSERT INTO `web_area` VALUES('1472','莱城区','','1471','1368,1471','0','1472','','0','0','371202','');
INSERT INTO `web_area` VALUES('1473','钢城区','','1471','1368,1471','0','1473','','0','0','371203','');
INSERT INTO `web_area` VALUES('1474','临沂市','','1368','1368','1','1475,1476,1477,1478,1479,1480,1481,1482,1483,1484,1485,1486','','0','0','371300','linyi');
INSERT INTO `web_area` VALUES('1475','兰山区','','1474','1368,1474','0','1475','','0','0','371302','');
INSERT INTO `web_area` VALUES('1476','罗庄区','','1474','1368,1474','0','1476','','0','0','371311','');
INSERT INTO `web_area` VALUES('1477','河东区','','1474','1368,1474','0','1477','','0','0','371312','');
INSERT INTO `web_area` VALUES('1478','沂南县','','1474','1368,1474','0','1478','','0','0','371321','');
INSERT INTO `web_area` VALUES('1479','郯城县','','1474','1368,1474','0','1479','','0','0','371322','');
INSERT INTO `web_area` VALUES('1480','沂水县','','1474','1368,1474','0','1480','','0','0','371323','');
INSERT INTO `web_area` VALUES('1481','苍山县','','1474','1368,1474','0','1481','','0','0','371324','');
INSERT INTO `web_area` VALUES('1482','费县','','1474','1368,1474','0','1482','','0','0','371325','');
INSERT INTO `web_area` VALUES('1483','平邑县','','1474','1368,1474','0','1483','','0','0','371326','');
INSERT INTO `web_area` VALUES('1484','莒南县','','1474','1368,1474','0','1484','','0','0','371327','');
INSERT INTO `web_area` VALUES('1485','蒙阴县','','1474','1368,1474','0','1485','','0','0','371328','');
INSERT INTO `web_area` VALUES('1486','临沭县','','1474','1368,1474','0','1486','','0','0','371329','');
INSERT INTO `web_area` VALUES('1487','德州市','','1368','1368','1','1488,1489,1490,1491,1492,1493,1494,1495,1496,1497,1498','','0','0','371400','dezhou');
INSERT INTO `web_area` VALUES('1488','德城区','','1487','1368,1487','0','1488','','0','0','371402','');
INSERT INTO `web_area` VALUES('1489','陵县','','1487','1368,1487','0','1489','','0','0','371421','');
INSERT INTO `web_area` VALUES('1490','宁津县','','1487','1368,1487','0','1490','','0','0','371422','');
INSERT INTO `web_area` VALUES('1491','庆云县','','1487','1368,1487','0','1491','','0','0','371423','');
INSERT INTO `web_area` VALUES('1492','临邑县','','1487','1368,1487','0','1492','','0','0','371424','');
INSERT INTO `web_area` VALUES('1493','齐河县','','1487','1368,1487','0','1493','','0','0','371425','');
INSERT INTO `web_area` VALUES('1494','平原县','','1487','1368,1487','0','1494','','0','0','371426','');
INSERT INTO `web_area` VALUES('1495','夏津县','','1487','1368,1487','0','1495','','0','0','371427','');
INSERT INTO `web_area` VALUES('1496','武城县','','1487','1368,1487','0','1496','','0','0','371428','');
INSERT INTO `web_area` VALUES('1497','乐陵市','','1487','1368,1487','0','1497','','0','0','371481','');
INSERT INTO `web_area` VALUES('1498','禹城市','','1487','1368,1487','0','1498','','0','0','371482','');
INSERT INTO `web_area` VALUES('1499','聊城市','','1368','1368','1','1500,1501,1502,1503,1504,1505,1506,1507','','0','0','371500','liaocheng');
INSERT INTO `web_area` VALUES('1500','东昌府区','','1499','1368,1499','0','1500','','0','0','371502','');
INSERT INTO `web_area` VALUES('1501','阳谷县','','1499','1368,1499','0','1501','','0','0','371521','');
INSERT INTO `web_area` VALUES('1502','莘县','','1499','1368,1499','0','1502','','0','0','371522','');
INSERT INTO `web_area` VALUES('1503','茌平县','','1499','1368,1499','0','1503','','0','0','371523','');
INSERT INTO `web_area` VALUES('1504','东阿县','','1499','1368,1499','0','1504','','0','0','371524','');
INSERT INTO `web_area` VALUES('1505','冠县','','1499','1368,1499','0','1505','','0','0','371525','');
INSERT INTO `web_area` VALUES('1506','高唐县','','1499','1368,1499','0','1506','','0','0','371526','');
INSERT INTO `web_area` VALUES('1507','临清市','','1499','1368,1499','0','1507','','0','0','371581','');
INSERT INTO `web_area` VALUES('1508','滨州市','','1368','1368','1','1509,1510,1511,1512,1513,1514,1515','','0','0','371600','binzhou');
INSERT INTO `web_area` VALUES('1509','滨城区','','1508','1368,1508','0','1509','','0','0','371602','');
INSERT INTO `web_area` VALUES('1510','惠民县','','1508','1368,1508','0','1510','','0','0','371621','');
INSERT INTO `web_area` VALUES('1511','阳信县','','1508','1368,1508','0','1511','','0','0','371622','');
INSERT INTO `web_area` VALUES('1512','无棣县','','1508','1368,1508','0','1512','','0','0','371623','');
INSERT INTO `web_area` VALUES('1513','沾化县','','1508','1368,1508','0','1513','','0','0','371624','');
INSERT INTO `web_area` VALUES('1514','博兴县','','1508','1368,1508','0','1514','','0','0','371625','');
INSERT INTO `web_area` VALUES('1515','邹平县','','1508','1368,1508','0','1515','','0','0','371626','');
INSERT INTO `web_area` VALUES('1516','菏泽市','','1368','1368','1','1517,1518,1519,1520,1521,1522,1523,1524,1525','','0','0','371700','heze');
INSERT INTO `web_area` VALUES('1517','牡丹区','','1516','1368,1516','0','1517','','0','0','371702','');
INSERT INTO `web_area` VALUES('1518','曹县','','1516','1368,1516','0','1518','','0','0','371721','');
INSERT INTO `web_area` VALUES('1519','单县','','1516','1368,1516','0','1519','','0','0','371722','');
INSERT INTO `web_area` VALUES('1520','成武县','','1516','1368,1516','0','1520','','0','0','371723','');
INSERT INTO `web_area` VALUES('1521','巨野县','','1516','1368,1516','0','1521','','0','0','371724','');
INSERT INTO `web_area` VALUES('1522','郓城县','','1516','1368,1516','0','1522','','0','0','371725','');
INSERT INTO `web_area` VALUES('1523','鄄城县','','1516','1368,1516','0','1523','','0','0','371726','');
INSERT INTO `web_area` VALUES('1524','定陶县','','1516','1368,1516','0','1524','','0','0','371727','');
INSERT INTO `web_area` VALUES('1525','东明县','','1516','1368,1516','0','1525','','0','0','371728','');
INSERT INTO `web_area` VALUES('1526','河南','','0','0','1','1527,1540,1551,1567,1578,1588,1594,1607,1618,1625,1632,1638,1645,1659,1669,1680,1691,1702,1528,1529,1530,1531,1532,1533,1534,1535,1536,1537,1538,1539,1703','','10','0','410000','henan');
INSERT INTO `web_area` VALUES('1527','郑州市','','1526','1526','1','1528,1529,1530,1531,1532,1533,1534,1535,1536,1537,1538,1539','','0','0','410100','zhengzhou');
INSERT INTO `web_area` VALUES('1528','中原区','','1527','1526,1527','0','1528','','0','0','410102','');
INSERT INTO `web_area` VALUES('1529','二七区','','1527','1526,1527','0','1529','','0','0','410103','');
INSERT INTO `web_area` VALUES('1530','管城回族区','','1527','1526,1527','0','1530','','0','0','410104','');
INSERT INTO `web_area` VALUES('1531','金水区','','1527','1526,1527','0','1531','','0','0','410105','');
INSERT INTO `web_area` VALUES('1532','上街区','','1527','1526,1527','0','1532','','0','0','410106','');
INSERT INTO `web_area` VALUES('1533','惠济区','','1527','1526,1527','0','1533','','0','0','410108','');
INSERT INTO `web_area` VALUES('1534','中牟县','','1527','1526,1527','0','1534','','0','0','410122','');
INSERT INTO `web_area` VALUES('1535','巩义市','','1527','1526,1527','0','1535','','0','0','410181','');
INSERT INTO `web_area` VALUES('1536','荥阳市','','1527','1526,1527','0','1536','','0','0','410182','');
INSERT INTO `web_area` VALUES('1537','新密市','','1527','1526,1527','0','1537','','0','0','410183','');
INSERT INTO `web_area` VALUES('1538','新郑市','','1527','1526,1527','0','1538','','0','0','410184','');
INSERT INTO `web_area` VALUES('1539','登封市','','1527','1526,1527','0','1539','','0','0','410185','');
INSERT INTO `web_area` VALUES('1540','开封市','','1526','1526','1','1541,1542,1543,1544,1545,1546,1547,1548,1549,1550','','0','0','410200','kaifeng');
INSERT INTO `web_area` VALUES('1541','龙亭区','','1540','1526,1540','0','1541','','0','0','410202','');
INSERT INTO `web_area` VALUES('1542','顺河回族区','','1540','1526,1540','0','1542','','0','0','410203','');
INSERT INTO `web_area` VALUES('1543','鼓楼区','','1540','1526,1540','0','1543','','0','0','410204','');
INSERT INTO `web_area` VALUES('1544','禹王台区','','1540','1526,1540','0','1544','','0','0','410205','');
INSERT INTO `web_area` VALUES('1545','金明区','','1540','1526,1540','0','1545','','0','0','410211','');
INSERT INTO `web_area` VALUES('1546','杞县','','1540','1526,1540','0','1546','','0','0','410221','');
INSERT INTO `web_area` VALUES('1547','通许县','','1540','1526,1540','0','1547','','0','0','410222','');
INSERT INTO `web_area` VALUES('1548','尉氏县','','1540','1526,1540','0','1548','','0','0','410223','');
INSERT INTO `web_area` VALUES('1549','开封县','','1540','1526,1540','0','1549','','0','0','410224','');
INSERT INTO `web_area` VALUES('1550','兰考县','','1540','1526,1540','0','1550','','0','0','410225','');
INSERT INTO `web_area` VALUES('1551','洛阳市','','1526','1526','1','1552,1553,1554,1555,1556,1557,1558,1559,1560,1561,1562,1563,1564,1565,1566','','0','0','410300','luoyang');
INSERT INTO `web_area` VALUES('1552','老城区','','1551','1526,1551','0','1552','','0','0','410302','');
INSERT INTO `web_area` VALUES('1553','西工区','','1551','1526,1551','0','1553','','0','0','410303','');
INSERT INTO `web_area` VALUES('1554','瀍河回族区','','1551','1526,1551','0','1554','','0','0','410304','');
INSERT INTO `web_area` VALUES('1555','涧西区','','1551','1526,1551','0','1555','','0','0','410305','');
INSERT INTO `web_area` VALUES('1556','吉利区','','1551','1526,1551','0','1556','','0','0','410306','');
INSERT INTO `web_area` VALUES('1557','洛龙区','','1551','1526,1551','0','1557','','0','0','410311','');
INSERT INTO `web_area` VALUES('1558','孟津县','','1551','1526,1551','0','1558','','0','0','410322','');
INSERT INTO `web_area` VALUES('1559','新安县','','1551','1526,1551','0','1559','','0','0','410323','');
INSERT INTO `web_area` VALUES('1560','栾川县','','1551','1526,1551','0','1560','','0','0','410324','');
INSERT INTO `web_area` VALUES('1561','嵩县','','1551','1526,1551','0','1561','','0','0','410325','');
INSERT INTO `web_area` VALUES('1562','汝阳县','','1551','1526,1551','0','1562','','0','0','410326','');
INSERT INTO `web_area` VALUES('1563','宜阳县','','1551','1526,1551','0','1563','','0','0','410327','');
INSERT INTO `web_area` VALUES('1564','洛宁县','','1551','1526,1551','0','1564','','0','0','410328','');
INSERT INTO `web_area` VALUES('1565','伊川县','','1551','1526,1551','0','1565','','0','0','410329','');
INSERT INTO `web_area` VALUES('1566','偃师市','','1551','1526,1551','0','1566','','0','0','410381','');
INSERT INTO `web_area` VALUES('1567','平顶山','','1526','1526','1','1568,1569,1570,1571,1572,1573,1574,1575,1576,1577','','0','0','410400','pingdingshan');
INSERT INTO `web_area` VALUES('1568','新华区','','1567','1526,1567','0','1568','','0','0','410402','');
INSERT INTO `web_area` VALUES('1569','卫东区','','1567','1526,1567','0','1569','','0','0','410403','');
INSERT INTO `web_area` VALUES('1570','石龙区','','1567','1526,1567','0','1570','','0','0','410404','');
INSERT INTO `web_area` VALUES('1571','湛河区','','1567','1526,1567','0','1571','','0','0','410411','');
INSERT INTO `web_area` VALUES('1572','宝丰县','','1567','1526,1567','0','1572','','0','0','410421','');
INSERT INTO `web_area` VALUES('1573','叶县','','1567','1526,1567','0','1573','','0','0','410422','');
INSERT INTO `web_area` VALUES('1574','鲁山县','','1567','1526,1567','0','1574','','0','0','410423','');
INSERT INTO `web_area` VALUES('1575','郏县','','1567','1526,1567','0','1575','','0','0','410425','');
INSERT INTO `web_area` VALUES('1576','舞钢市','','1567','1526,1567','0','1576','','0','0','410481','');
INSERT INTO `web_area` VALUES('1577','汝州市','','1567','1526,1567','0','1577','','0','0','410482','');
INSERT INTO `web_area` VALUES('1578','安阳市','','1526','1526','1','1579,1580,1581,1582,1583,1584,1585,1586,1587','','0','0','410500','anyang');
INSERT INTO `web_area` VALUES('1579','文峰区','','1578','1526,1578','0','1579','','0','0','410502','');
INSERT INTO `web_area` VALUES('1580','北关区','','1578','1526,1578','0','1580','','0','0','410503','');
INSERT INTO `web_area` VALUES('1581','殷都区','','1578','1526,1578','0','1581','','0','0','410505','');
INSERT INTO `web_area` VALUES('1582','龙安区','','1578','1526,1578','0','1582','','0','0','410506','');
INSERT INTO `web_area` VALUES('1583','安阳县','','1578','1526,1578','0','1583','','0','0','410522','');
INSERT INTO `web_area` VALUES('1584','汤阴县','','1578','1526,1578','0','1584','','0','0','410523','');
INSERT INTO `web_area` VALUES('1585','滑县','','1578','1526,1578','0','1585','','0','0','410526','');
INSERT INTO `web_area` VALUES('1586','内黄县','','1578','1526,1578','0','1586','','0','0','410527','');
INSERT INTO `web_area` VALUES('1587','林州市','','1578','1526,1578','0','1587','','0','0','410581','');
INSERT INTO `web_area` VALUES('1588','鹤壁市','','1526','1526','1','1589,1590,1591,1592,1593','','0','0','410600','hebi');
INSERT INTO `web_area` VALUES('1589','鹤山区','','1588','1526,1588','0','1589','','0','0','410602','');
INSERT INTO `web_area` VALUES('1590','山城区','','1588','1526,1588','0','1590','','0','0','410603','');
INSERT INTO `web_area` VALUES('1591','淇滨区','','1588','1526,1588','0','1591','','0','0','410611','');
INSERT INTO `web_area` VALUES('1592','浚县','','1588','1526,1588','0','1592','','0','0','410621','');
INSERT INTO `web_area` VALUES('1593','淇县','','1588','1526,1588','0','1593','','0','0','410622','');
INSERT INTO `web_area` VALUES('1594','新乡市','','1526','1526','1','1595,1596,1597,1598,1599,1600,1601,1602,1603,1604,1605,1606','','0','0','410700','xinxiang');
INSERT INTO `web_area` VALUES('1595','红旗区','','1594','1526,1594','0','1595','','0','0','410702','');
INSERT INTO `web_area` VALUES('1596','卫滨区','','1594','1526,1594','0','1596','','0','0','410703','');
INSERT INTO `web_area` VALUES('1597','凤泉区','','1594','1526,1594','0','1597','','0','0','410704','');
INSERT INTO `web_area` VALUES('1598','牧野区','','1594','1526,1594','0','1598','','0','0','410711','');
INSERT INTO `web_area` VALUES('1599','新乡县','','1594','1526,1594','0','1599','','0','0','410721','');
INSERT INTO `web_area` VALUES('1600','获嘉县','','1594','1526,1594','0','1600','','0','0','410724','');
INSERT INTO `web_area` VALUES('1601','原阳县','','1594','1526,1594','0','1601','','0','0','410725','');
INSERT INTO `web_area` VALUES('1602','延津县','','1594','1526,1594','0','1602','','0','0','410726','');
INSERT INTO `web_area` VALUES('1603','封丘县','','1594','1526,1594','0','1603','','0','0','410727','');
INSERT INTO `web_area` VALUES('1604','长垣县','','1594','1526,1594','0','1604','','0','0','410728','');
INSERT INTO `web_area` VALUES('1605','卫辉市','','1594','1526,1594','0','1605','','0','0','410781','');
INSERT INTO `web_area` VALUES('1606','辉县市','','1594','1526,1594','0','1606','','0','0','410782','');
INSERT INTO `web_area` VALUES('1607','焦作市','','1526','1526','1','1608,1609,1610,1611,1612,1613,1614,1615,1616,1617','','0','0','410800','jiaozuo');
INSERT INTO `web_area` VALUES('1608','解放区','','1607','1526,1607','0','1608','','0','0','410802','');
INSERT INTO `web_area` VALUES('1609','中站区','','1607','1526,1607','0','1609','','0','0','410803','');
INSERT INTO `web_area` VALUES('1610','马村区','','1607','1526,1607','0','1610','','0','0','410804','');
INSERT INTO `web_area` VALUES('1611','山阳区','','1607','1526,1607','0','1611','','0','0','410811','');
INSERT INTO `web_area` VALUES('1612','修武县','','1607','1526,1607','0','1612','','0','0','410821','');
INSERT INTO `web_area` VALUES('1613','博爱县','','1607','1526,1607','0','1613','','0','0','410822','');
INSERT INTO `web_area` VALUES('1614','武陟县','','1607','1526,1607','0','1614','','0','0','410823','');
INSERT INTO `web_area` VALUES('1615','温县','','1607','1526,1607','0','1615','','0','0','410825','');
INSERT INTO `web_area` VALUES('1616','沁阳市','','1607','1526,1607','0','1616','','0','0','410882','');
INSERT INTO `web_area` VALUES('1617','孟州市','','1607','1526,1607','0','1617','','0','0','410883','');
INSERT INTO `web_area` VALUES('1618','濮阳市','','1526','1526','1','1619,1620,1621,1622,1623,1624','','0','0','410900','puyang');
INSERT INTO `web_area` VALUES('1619','华龙区','','1618','1526,1618','0','1619','','0','0','410902','');
INSERT INTO `web_area` VALUES('1620','清丰县','','1618','1526,1618','0','1620','','0','0','410922','');
INSERT INTO `web_area` VALUES('1621','南乐县','','1618','1526,1618','0','1621','','0','0','410923','');
INSERT INTO `web_area` VALUES('1622','范县','','1618','1526,1618','0','1622','','0','0','410926','');
INSERT INTO `web_area` VALUES('1623','台前县','','1618','1526,1618','0','1623','','0','0','410927','');
INSERT INTO `web_area` VALUES('1624','濮阳县','','1618','1526,1618','0','1624','','0','0','410928','');
INSERT INTO `web_area` VALUES('1625','许昌市','','1526','1526','1','1626,1627,1628,1629,1630,1631','','0','0','411000','xuchang');
INSERT INTO `web_area` VALUES('1626','魏都区','','1625','1526,1625','0','1626','','0','0','411002','');
INSERT INTO `web_area` VALUES('1627','许昌县','','1625','1526,1625','0','1627','','0','0','411023','');
INSERT INTO `web_area` VALUES('1628','鄢陵县','','1625','1526,1625','0','1628','','0','0','411024','');
INSERT INTO `web_area` VALUES('1629','襄城县','','1625','1526,1625','0','1629','','0','0','411025','');
INSERT INTO `web_area` VALUES('1630','禹州市','','1625','1526,1625','0','1630','','0','0','411081','');
INSERT INTO `web_area` VALUES('1631','长葛市','','1625','1526,1625','0','1631','','0','0','411082','');
INSERT INTO `web_area` VALUES('1632','漯河市','','1526','1526','1','1633,1634,1635,1636,1637','','0','0','411100','leihe');
INSERT INTO `web_area` VALUES('1633','源汇区','','1632','1526,1632','0','1633','','0','0','411102','');
INSERT INTO `web_area` VALUES('1634','郾城区','','1632','1526,1632','0','1634','','0','0','411103','');
INSERT INTO `web_area` VALUES('1635','召陵区','','1632','1526,1632','0','1635','','0','0','411104','');
INSERT INTO `web_area` VALUES('1636','舞阳县','','1632','1526,1632','0','1636','','0','0','411121','');
INSERT INTO `web_area` VALUES('1637','临颍县','','1632','1526,1632','0','1637','','0','0','411122','');
INSERT INTO `web_area` VALUES('1638','三门峡','','1526','1526','1','1639,1640,1641,1642,1643,1644','','0','0','411200','sanmenxia');
INSERT INTO `web_area` VALUES('1639','湖滨区','','1638','1526,1638','0','1639','','0','0','411202','');
INSERT INTO `web_area` VALUES('1640','渑池县','','1638','1526,1638','0','1640','','0','0','411221','');
INSERT INTO `web_area` VALUES('1641','陕县','','1638','1526,1638','0','1641','','0','0','411222','');
INSERT INTO `web_area` VALUES('1642','卢氏县','','1638','1526,1638','0','1642','','0','0','411224','');
INSERT INTO `web_area` VALUES('1643','义马市','','1638','1526,1638','0','1643','','0','0','411281','');
INSERT INTO `web_area` VALUES('1644','灵宝市','','1638','1526,1638','0','1644','','0','0','411282','');
INSERT INTO `web_area` VALUES('1645','南阳市','','1526','1526','1','1646,1647,1648,1649,1650,1651,1652,1653,1654,1655,1656,1657,1658','','0','0','411300','nanyang');
INSERT INTO `web_area` VALUES('1646','宛城区','','1645','1526,1645','0','1646','','0','0','411302','');
INSERT INTO `web_area` VALUES('1647','卧龙区','','1645','1526,1645','0','1647','','0','0','411303','');
INSERT INTO `web_area` VALUES('1648','南召县','','1645','1526,1645','0','1648','','0','0','411321','');
INSERT INTO `web_area` VALUES('1649','方城县','','1645','1526,1645','0','1649','','0','0','411322','');
INSERT INTO `web_area` VALUES('1650','西峡县','','1645','1526,1645','0','1650','','0','0','411323','');
INSERT INTO `web_area` VALUES('1651','镇平县','','1645','1526,1645','0','1651','','0','0','411324','');
INSERT INTO `web_area` VALUES('1652','内乡县','','1645','1526,1645','0','1652','','0','0','411325','');
INSERT INTO `web_area` VALUES('1653','淅川县','','1645','1526,1645','0','1653','','0','0','411326','');
INSERT INTO `web_area` VALUES('1654','社旗县','','1645','1526,1645','0','1654','','0','0','411327','');
INSERT INTO `web_area` VALUES('1655','唐河县','','1645','1526,1645','0','1655','','0','0','411328','');
INSERT INTO `web_area` VALUES('1656','新野县','','1645','1526,1645','0','1656','','0','0','411329','');
INSERT INTO `web_area` VALUES('1657','桐柏县','','1645','1526,1645','0','1657','','0','0','411330','');
INSERT INTO `web_area` VALUES('1658','邓州市','','1645','1526,1645','0','1658','','0','0','411381','');
INSERT INTO `web_area` VALUES('1659','商丘市','','1526','1526','1','1660,1661,1662,1663,1664,1665,1666,1667,1668','','0','0','411400','shangqiu');
INSERT INTO `web_area` VALUES('1660','梁园区','','1659','1526,1659','0','1660','','0','0','411402','');
INSERT INTO `web_area` VALUES('1661','睢阳区','','1659','1526,1659','0','1661','','0','0','411403','');
INSERT INTO `web_area` VALUES('1662','民权县','','1659','1526,1659','0','1662','','0','0','411421','');
INSERT INTO `web_area` VALUES('1663','睢县','','1659','1526,1659','0','1663','','0','0','411422','');
INSERT INTO `web_area` VALUES('1664','宁陵县','','1659','1526,1659','0','1664','','0','0','411423','');
INSERT INTO `web_area` VALUES('1665','柘城县','','1659','1526,1659','0','1665','','0','0','411424','');
INSERT INTO `web_area` VALUES('1666','虞城县','','1659','1526,1659','0','1666','','0','0','411425','');
INSERT INTO `web_area` VALUES('1667','夏邑县','','1659','1526,1659','0','1667','','0','0','411426','');
INSERT INTO `web_area` VALUES('1668','永城市','','1659','1526,1659','0','1668','','0','0','411481','');
INSERT INTO `web_area` VALUES('1669','信阳市','','1526','1526','1','1670,1671,1672,1673,1674,1675,1676,1677,1678,1679','','0','0','411500','xinyang');
INSERT INTO `web_area` VALUES('1670','浉河区','','1669','1526,1669','0','1670','','0','0','411502','');
INSERT INTO `web_area` VALUES('1671','平桥区','','1669','1526,1669','0','1671','','0','0','411503','');
INSERT INTO `web_area` VALUES('1672','罗山县','','1669','1526,1669','0','1672','','0','0','411521','');
INSERT INTO `web_area` VALUES('1673','光山县','','1669','1526,1669','0','1673','','0','0','411522','');
INSERT INTO `web_area` VALUES('1674','新县','','1669','1526,1669','0','1674','','0','0','411523','');
INSERT INTO `web_area` VALUES('1675','商城县','','1669','1526,1669','0','1675','','0','0','411524','');
INSERT INTO `web_area` VALUES('1676','固始县','','1669','1526,1669','0','1676','','0','0','411525','');
INSERT INTO `web_area` VALUES('1677','潢川县','','1669','1526,1669','0','1677','','0','0','411526','');
INSERT INTO `web_area` VALUES('1678','淮滨县','','1669','1526,1669','0','1678','','0','0','411527','');
INSERT INTO `web_area` VALUES('1679','息县','','1669','1526,1669','0','1679','','0','0','411528','');
INSERT INTO `web_area` VALUES('1680','周口市','','1526','1526','1','1681,1682,1683,1684,1685,1686,1687,1688,1689,1690','','0','0','411600','zhoukou');
INSERT INTO `web_area` VALUES('1681','川汇区','','1680','1526,1680','0','1681','','0','0','411602','');
INSERT INTO `web_area` VALUES('1682','扶沟县','','1680','1526,1680','0','1682','','0','0','411621','');
INSERT INTO `web_area` VALUES('1683','西华县','','1680','1526,1680','0','1683','','0','0','411622','');
INSERT INTO `web_area` VALUES('1684','商水县','','1680','1526,1680','0','1684','','0','0','411623','');
INSERT INTO `web_area` VALUES('1685','沈丘县','','1680','1526,1680','0','1685','','0','0','411624','');
INSERT INTO `web_area` VALUES('1686','郸城县','','1680','1526,1680','0','1686','','0','0','411625','');
INSERT INTO `web_area` VALUES('1687','淮阳县','','1680','1526,1680','0','1687','','0','0','411626','');
INSERT INTO `web_area` VALUES('1688','太康县','','1680','1526,1680','0','1688','','0','0','411627','');
INSERT INTO `web_area` VALUES('1689','鹿邑县','','1680','1526,1680','0','1689','','0','0','411628','');
INSERT INTO `web_area` VALUES('1690','项城市','','1680','1526,1680','0','1690','','0','0','411681','');
INSERT INTO `web_area` VALUES('1691','驻马店','','1526','1526','1','1692,1693,1694,1695,1696,1697,1698,1699,1700,1701','','0','0','411700','zhumadian');
INSERT INTO `web_area` VALUES('1692','驿城区','','1691','1526,1691','0','1692','','0','0','411702','');
INSERT INTO `web_area` VALUES('1693','西平县','','1691','1526,1691','0','1693','','0','0','411721','');
INSERT INTO `web_area` VALUES('1694','上蔡县','','1691','1526,1691','0','1694','','0','0','411722','');
INSERT INTO `web_area` VALUES('1695','平舆县','','1691','1526,1691','0','1695','','0','0','411723','');
INSERT INTO `web_area` VALUES('1696','正阳县','','1691','1526,1691','0','1696','','0','0','411724','');
INSERT INTO `web_area` VALUES('1697','确山县','','1691','1526,1691','0','1697','','0','0','411725','');
INSERT INTO `web_area` VALUES('1698','泌阳县','','1691','1526,1691','0','1698','','0','0','411726','');
INSERT INTO `web_area` VALUES('1699','汝南县','','1691','1526,1691','0','1699','','0','0','411727','');
INSERT INTO `web_area` VALUES('1700','遂平县','','1691','1526,1691','0','1700','','0','0','411728','');
INSERT INTO `web_area` VALUES('1701','新蔡县','','1691','1526,1691','0','1701','','0','0','411729','');
INSERT INTO `web_area` VALUES('1703','济源市','','1526','1526','0','1703','','0','0','419001','jiyuan');
INSERT INTO `web_area` VALUES('1704','湖北','','0','0','1','1705,1719,1726,1735,1749,1759,1763,1769,1777,1786,1797,1804,1808,1817,1818,1706,1707,1708,1709,1710,1711,1712,1713,1714,1715,1716,1717,1718,1819,1820,1821','','11','0','420000','hubei');
INSERT INTO `web_area` VALUES('1705','武汉市','','1704','1704','1','1706,1707,1708,1709,1710,1711,1712,1713,1714,1715,1716,1717,1718','','0','0','420100','wuhan');
INSERT INTO `web_area` VALUES('1706','江岸区','','1705','1704,1705','0','1706','','0','0','420102','');
INSERT INTO `web_area` VALUES('1707','江汉区','','1705','1704,1705','0','1707','','0','0','420103','');
INSERT INTO `web_area` VALUES('1708','硚口区','','1705','1704,1705','0','1708','','0','0','420104','');
INSERT INTO `web_area` VALUES('1709','汉阳区','','1705','1704,1705','0','1709','','0','0','420105','');
INSERT INTO `web_area` VALUES('1710','武昌区','','1705','1704,1705','0','1710','','0','0','420106','');
INSERT INTO `web_area` VALUES('1711','青山区','','1705','1704,1705','0','1711','','0','0','420107','');
INSERT INTO `web_area` VALUES('1712','洪山区','','1705','1704,1705','0','1712','','0','0','420111','');
INSERT INTO `web_area` VALUES('1713','东西湖区','','1705','1704,1705','0','1713','','0','0','420112','');
INSERT INTO `web_area` VALUES('1714','汉南区','','1705','1704,1705','0','1714','','0','0','420113','');
INSERT INTO `web_area` VALUES('1715','蔡甸区','','1705','1704,1705','0','1715','','0','0','420114','');
INSERT INTO `web_area` VALUES('1716','江夏区','','1705','1704,1705','0','1716','','0','0','420115','');
INSERT INTO `web_area` VALUES('1717','黄陂区','','1705','1704,1705','0','1717','','0','0','420116','');
INSERT INTO `web_area` VALUES('1718','新洲区','','1705','1704,1705','0','1718','','0','0','420117','');
INSERT INTO `web_area` VALUES('1719','黄石市','','1704','1704','1','1720,1721,1722,1723,1724,1725','','0','0','420200','huangshi');
INSERT INTO `web_area` VALUES('1720','黄石港区','','1719','1704,1719','0','1720','','0','0','420202','');
INSERT INTO `web_area` VALUES('1721','西塞山区','','1719','1704,1719','0','1721','','0','0','420203','');
INSERT INTO `web_area` VALUES('1722','下陆区','','1719','1704,1719','0','1722','','0','0','420204','');
INSERT INTO `web_area` VALUES('1723','铁山区','','1719','1704,1719','0','1723','','0','0','420205','');
INSERT INTO `web_area` VALUES('1724','阳新县','','1719','1704,1719','0','1724','','0','0','420222','');
INSERT INTO `web_area` VALUES('1725','大冶市','','1719','1704,1719','0','1725','','0','0','420281','');
INSERT INTO `web_area` VALUES('1726','十堰市','','1704','1704','1','1727,1728,1729,1730,1731,1732,1733,1734','','0','0','420300','shiyan');
INSERT INTO `web_area` VALUES('1727','茅箭区','','1726','1704,1726','0','1727','','0','0','420302','');
INSERT INTO `web_area` VALUES('1728','张湾区','','1726','1704,1726','0','1728','','0','0','420303','');
INSERT INTO `web_area` VALUES('1729','郧县','','1726','1704,1726','0','1729','','0','0','420321','');
INSERT INTO `web_area` VALUES('1730','郧西县','','1726','1704,1726','0','1730','','0','0','420322','');
INSERT INTO `web_area` VALUES('1731','竹山县','','1726','1704,1726','0','1731','','0','0','420323','');
INSERT INTO `web_area` VALUES('1732','竹溪县','','1726','1704,1726','0','1732','','0','0','420324','');
INSERT INTO `web_area` VALUES('1733','房县','','1726','1704,1726','0','1733','','0','0','420325','');
INSERT INTO `web_area` VALUES('1734','丹江口市','','1726','1704,1726','0','1734','','0','0','420381','');
INSERT INTO `web_area` VALUES('1735','宜昌市','','1704','1704','1','1736,1737,1738,1739,1740,1741,1742,1743,1744,1745,1746,1747,1748','','0','0','420500','yichang');
INSERT INTO `web_area` VALUES('1736','西陵区','','1735','1704,1735','0','1736','','0','0','420502','');
INSERT INTO `web_area` VALUES('1737','伍家岗区','','1735','1704,1735','0','1737','','0','0','420503','');
INSERT INTO `web_area` VALUES('1738','点军区','','1735','1704,1735','0','1738','','0','0','420504','');
INSERT INTO `web_area` VALUES('1739','猇亭区','','1735','1704,1735','0','1739','','0','0','420505','');
INSERT INTO `web_area` VALUES('1740','夷陵区','','1735','1704,1735','0','1740','','0','0','420506','');
INSERT INTO `web_area` VALUES('1741','远安县','','1735','1704,1735','0','1741','','0','0','420525','');
INSERT INTO `web_area` VALUES('1742','兴山县','','1735','1704,1735','0','1742','','0','0','420526','');
INSERT INTO `web_area` VALUES('1743','秭归县','','1735','1704,1735','0','1743','','0','0','420527','');
INSERT INTO `web_area` VALUES('1744','长阳土家族自治县','','1735','1704,1735','0','1744','','0','0','420528','');
INSERT INTO `web_area` VALUES('1745','五峰土家族自治县','','1735','1704,1735','0','1745','','0','0','420529','');
INSERT INTO `web_area` VALUES('1746','宜都市','','1735','1704,1735','0','1746','','0','0','420581','');
INSERT INTO `web_area` VALUES('1747','当阳市','','1735','1704,1735','0','1747','','0','0','420582','');
INSERT INTO `web_area` VALUES('1748','枝江市','','1735','1704,1735','0','1748','','0','0','420583','');
INSERT INTO `web_area` VALUES('1749','襄樊市','','1704','1704','1','1750,1751,1752,1753,1754,1755,1756,1757,1758','','0','0','420600','xiangfan');
INSERT INTO `web_area` VALUES('1750','襄城区','','1749','1704,1749','0','1750','','0','0','420602','');
INSERT INTO `web_area` VALUES('1751','樊城区','','1749','1704,1749','0','1751','','0','0','420606','');
INSERT INTO `web_area` VALUES('1752','襄阳区','','1749','1704,1749','0','1752','','0','0','420607','');
INSERT INTO `web_area` VALUES('1753','南漳县','','1749','1704,1749','0','1753','','0','0','420624','');
INSERT INTO `web_area` VALUES('1754','谷城县','','1749','1704,1749','0','1754','','0','0','420625','');
INSERT INTO `web_area` VALUES('1755','保康县','','1749','1704,1749','0','1755','','0','0','420626','');
INSERT INTO `web_area` VALUES('1756','老河口市','','1749','1704,1749','0','1756','','0','0','420682','');
INSERT INTO `web_area` VALUES('1757','枣阳市','','1749','1704,1749','0','1757','','0','0','420683','');
INSERT INTO `web_area` VALUES('1758','宜城市','','1749','1704,1749','0','1758','','0','0','420684','');
INSERT INTO `web_area` VALUES('1759','鄂州市','','1704','1704','1','1760,1761,1762','','0','0','420700','ezhou');
INSERT INTO `web_area` VALUES('1760','梁子湖区','','1759','1704,1759','0','1760','','0','0','420702','');
INSERT INTO `web_area` VALUES('1761','华容区','','1759','1704,1759','0','1761','','0','0','420703','');
INSERT INTO `web_area` VALUES('1762','鄂城区','','1759','1704,1759','0','1762','','0','0','420704','');
INSERT INTO `web_area` VALUES('1763','荆门市','','1704','1704','1','1764,1765,1766,1767,1768','','0','0','420800','jingmen');
INSERT INTO `web_area` VALUES('1764','东宝区','','1763','1704,1763','0','1764','','0','0','420802','');
INSERT INTO `web_area` VALUES('1765','掇刀区','','1763','1704,1763','0','1765','','0','0','420804','');
INSERT INTO `web_area` VALUES('1766','京山县','','1763','1704,1763','0','1766','','0','0','420821','');
INSERT INTO `web_area` VALUES('1767','沙洋县','','1763','1704,1763','0','1767','','0','0','420822','');
INSERT INTO `web_area` VALUES('1768','钟祥市','','1763','1704,1763','0','1768','','0','0','420881','');
INSERT INTO `web_area` VALUES('1769','孝感市','','1704','1704','1','1770,1771,1772,1773,1774,1775,1776','','0','0','420900','xiaogan');
INSERT INTO `web_area` VALUES('1770','孝南区','','1769','1704,1769','0','1770','','0','0','420902','');
INSERT INTO `web_area` VALUES('1771','孝昌县','','1769','1704,1769','0','1771','','0','0','420921','');
INSERT INTO `web_area` VALUES('1772','大悟县','','1769','1704,1769','0','1772','','0','0','420922','');
INSERT INTO `web_area` VALUES('1773','云梦县','','1769','1704,1769','0','1773','','0','0','420923','');
INSERT INTO `web_area` VALUES('1774','应城市','','1769','1704,1769','0','1774','','0','0','420981','');
INSERT INTO `web_area` VALUES('1775','安陆市','','1769','1704,1769','0','1775','','0','0','420982','');
INSERT INTO `web_area` VALUES('1776','汉川市','','1769','1704,1769','0','1776','','0','0','420984','');
INSERT INTO `web_area` VALUES('1777','荆州市','','1704','1704','1','1778,1779,1780,1781,1782,1783,1784,1785','','0','0','421000','jingzhou');
INSERT INTO `web_area` VALUES('1778','沙市区','','1777','1704,1777','0','1778','','0','0','421002','');
INSERT INTO `web_area` VALUES('1779','荆州区','','1777','1704,1777','0','1779','','0','0','421003','');
INSERT INTO `web_area` VALUES('1780','公安县','','1777','1704,1777','0','1780','','0','0','421022','');
INSERT INTO `web_area` VALUES('1781','监利县','','1777','1704,1777','0','1781','','0','0','421023','');
INSERT INTO `web_area` VALUES('1782','江陵县','','1777','1704,1777','0','1782','','0','0','421024','');
INSERT INTO `web_area` VALUES('1783','石首市','','1777','1704,1777','0','1783','','0','0','421081','');
INSERT INTO `web_area` VALUES('1784','洪湖市','','1777','1704,1777','0','1784','','0','0','421083','');
INSERT INTO `web_area` VALUES('1785','松滋市','','1777','1704,1777','0','1785','','0','0','421087','');
INSERT INTO `web_area` VALUES('1786','黄冈市','','1704','1704','1','1787,1788,1789,1790,1791,1792,1793,1794,1795,1796','','0','0','421100','huanggang');
INSERT INTO `web_area` VALUES('1787','黄州区','','1786','1704,1786','0','1787','','0','0','421102','');
INSERT INTO `web_area` VALUES('1788','团风县','','1786','1704,1786','0','1788','','0','0','421121','');
INSERT INTO `web_area` VALUES('1789','红安县','','1786','1704,1786','0','1789','','0','0','421122','');
INSERT INTO `web_area` VALUES('1790','罗田县','','1786','1704,1786','0','1790','','0','0','421123','');
INSERT INTO `web_area` VALUES('1791','英山县','','1786','1704,1786','0','1791','','0','0','421124','');
INSERT INTO `web_area` VALUES('1792','浠水县','','1786','1704,1786','0','1792','','0','0','421125','');
INSERT INTO `web_area` VALUES('1793','蕲春县','','1786','1704,1786','0','1793','','0','0','421126','');
INSERT INTO `web_area` VALUES('1794','黄梅县','','1786','1704,1786','0','1794','','0','0','421127','');
INSERT INTO `web_area` VALUES('1795','麻城市','','1786','1704,1786','0','1795','','0','0','421181','');
INSERT INTO `web_area` VALUES('1796','武穴市','','1786','1704,1786','0','1796','','0','0','421182','');
INSERT INTO `web_area` VALUES('1797','咸宁市','','1704','1704','1','1798,1799,1800,1801,1802,1803','','0','0','421200','xianning');
INSERT INTO `web_area` VALUES('1798','咸安区','','1797','1704,1797','0','1798','','0','0','421202','');
INSERT INTO `web_area` VALUES('1799','嘉鱼县','','1797','1704,1797','0','1799','','0','0','421221','');
INSERT INTO `web_area` VALUES('1800','通城县','','1797','1704,1797','0','1800','','0','0','421222','');
INSERT INTO `web_area` VALUES('1801','崇阳县','','1797','1704,1797','0','1801','','0','0','421223','');
INSERT INTO `web_area` VALUES('1802','通山县','','1797','1704,1797','0','1802','','0','0','421224','');
INSERT INTO `web_area` VALUES('1803','赤壁市','','1797','1704,1797','0','1803','','0','0','421281','');
INSERT INTO `web_area` VALUES('1804','随州市','','1704','1704','1','1805,1806,1807','','0','0','421300','suizhou');
INSERT INTO `web_area` VALUES('1805','曾都区','','1804','1704,1804','0','1805','','0','0','421303','');
INSERT INTO `web_area` VALUES('1806','随县','','1804','1704,1804','0','1806','','0','0','421321','');
INSERT INTO `web_area` VALUES('1807','广水市','','1804','1704,1804','0','1807','','0','0','421381','');
INSERT INTO `web_area` VALUES('1808','恩施','','1704','1704','1','1809,1810,1811,1812,1813,1814,1815,1816','','0','0','422800','enshi');
INSERT INTO `web_area` VALUES('1809','恩施市','','1808','1704,1808','0','1809','','0','0','422801','');
INSERT INTO `web_area` VALUES('1810','利川市','','1808','1704,1808','0','1810','','0','0','422802','');
INSERT INTO `web_area` VALUES('1811','建始县','','1808','1704,1808','0','1811','','0','0','422822','');
INSERT INTO `web_area` VALUES('1812','巴东县','','1808','1704,1808','0','1812','','0','0','422823','');
INSERT INTO `web_area` VALUES('1813','宣恩县','','1808','1704,1808','0','1813','','0','0','422825','');
INSERT INTO `web_area` VALUES('1814','咸丰县','','1808','1704,1808','0','1814','','0','0','422826','');
INSERT INTO `web_area` VALUES('1815','来凤县','','1808','1704,1808','0','1815','','0','0','422827','');
INSERT INTO `web_area` VALUES('1816','鹤峰县','','1808','1704,1808','0','1816','','0','0','422828','');
INSERT INTO `web_area` VALUES('1818','仙桃市','','1704','1704','0','1818','','0','0','429004','xiantao');
INSERT INTO `web_area` VALUES('1819','潜江市','','1704','1704','0','1819','','0','0','429005','qianjiangshi');
INSERT INTO `web_area` VALUES('1820','天门市','','1704','1704','0','1820','','0','0','429006','tianmen');
INSERT INTO `web_area` VALUES('1821','神农架林区','','1704','1704','0','1821','','0','0','429021','shennongjia');
INSERT INTO `web_area` VALUES('1822','湖南','','0','0','1','1823,1833,1843,1849,1862,1875,1885,1895,1900,1907,1919,1931,1944,1950,1824,1825,1826,1827,1828,1829,1830,1831,1832','','12','0','430000','hunan');
INSERT INTO `web_area` VALUES('1823','长沙市','','1822','1822','1','1824,1825,1826,1827,1828,1829,1830,1831,1832','','0','0','430100','changsha');
INSERT INTO `web_area` VALUES('1824','芙蓉区','','1823','1822,1823','0','1824','','0','0','430102','');
INSERT INTO `web_area` VALUES('1825','天心区','','1823','1822,1823','0','1825','','0','0','430103','');
INSERT INTO `web_area` VALUES('1826','岳麓区','','1823','1822,1823','0','1826','','0','0','430104','');
INSERT INTO `web_area` VALUES('1827','开福区','','1823','1822,1823','0','1827','','0','0','430105','');
INSERT INTO `web_area` VALUES('1828','雨花区','','1823','1822,1823','0','1828','','0','0','430111','');
INSERT INTO `web_area` VALUES('1829','长沙县','','1823','1822,1823','0','1829','','0','0','430121','');
INSERT INTO `web_area` VALUES('1830','望城县','','1823','1822,1823','0','1830','','0','0','430122','');
INSERT INTO `web_area` VALUES('1831','宁乡县','','1823','1822,1823','0','1831','','0','0','430124','');
INSERT INTO `web_area` VALUES('1832','浏阳市','','1823','1822,1823','0','1832','','0','0','430181','');
INSERT INTO `web_area` VALUES('1833','株洲市','','1822','1822','1','1834,1835,1836,1837,1838,1839,1840,1841,1842','','0','0','430200','zhuzhou');
INSERT INTO `web_area` VALUES('1834','荷塘区','','1833','1822,1833','0','1834','','0','0','430202','');
INSERT INTO `web_area` VALUES('1835','芦淞区','','1833','1822,1833','0','1835','','0','0','430203','');
INSERT INTO `web_area` VALUES('1836','石峰区','','1833','1822,1833','0','1836','','0','0','430204','');
INSERT INTO `web_area` VALUES('1837','天元区','','1833','1822,1833','0','1837','','0','0','430211','');
INSERT INTO `web_area` VALUES('1838','株洲县','','1833','1822,1833','0','1838','','0','0','430221','');
INSERT INTO `web_area` VALUES('1839','攸县','','1833','1822,1833','0','1839','','0','0','430223','');
INSERT INTO `web_area` VALUES('1840','茶陵县','','1833','1822,1833','0','1840','','0','0','430224','');
INSERT INTO `web_area` VALUES('1841','炎陵县','','1833','1822,1833','0','1841','','0','0','430225','');
INSERT INTO `web_area` VALUES('1842','醴陵市','','1833','1822,1833','0','1842','','0','0','430281','');
INSERT INTO `web_area` VALUES('1843','湘潭市','','1822','1822','1','1844,1845,1846,1847,1848','','0','0','430300','xiangtan');
INSERT INTO `web_area` VALUES('1844','雨湖区','','1843','1822,1843','0','1844','','0','0','430302','');
INSERT INTO `web_area` VALUES('1845','岳塘区','','1843','1822,1843','0','1845','','0','0','430304','');
INSERT INTO `web_area` VALUES('1846','湘潭县','','1843','1822,1843','0','1846','','0','0','430321','');
INSERT INTO `web_area` VALUES('1847','湘乡市','','1843','1822,1843','0','1847','','0','0','430381','');
INSERT INTO `web_area` VALUES('1848','韶山市','','1843','1822,1843','0','1848','','0','0','430382','');
INSERT INTO `web_area` VALUES('1849','衡阳市','','1822','1822','1','1850,1851,1852,1853,1854,1855,1856,1857,1858,1859,1860,1861','','0','0','430400','hengyang');
INSERT INTO `web_area` VALUES('1850','珠晖区','','1849','1822,1849','0','1850','','0','0','430405','');
INSERT INTO `web_area` VALUES('1851','雁峰区','','1849','1822,1849','0','1851','','0','0','430406','');
INSERT INTO `web_area` VALUES('1852','石鼓区','','1849','1822,1849','0','1852','','0','0','430407','');
INSERT INTO `web_area` VALUES('1853','蒸湘区','','1849','1822,1849','0','1853','','0','0','430408','');
INSERT INTO `web_area` VALUES('1854','南岳区','','1849','1822,1849','0','1854','','0','0','430412','');
INSERT INTO `web_area` VALUES('1855','衡阳县','','1849','1822,1849','0','1855','','0','0','430421','');
INSERT INTO `web_area` VALUES('1856','衡南县','','1849','1822,1849','0','1856','','0','0','430422','');
INSERT INTO `web_area` VALUES('1857','衡山县','','1849','1822,1849','0','1857','','0','0','430423','');
INSERT INTO `web_area` VALUES('1858','衡东县','','1849','1822,1849','0','1858','','0','0','430424','');
INSERT INTO `web_area` VALUES('1859','祁东县','','1849','1822,1849','0','1859','','0','0','430426','');
INSERT INTO `web_area` VALUES('1860','耒阳市','','1849','1822,1849','0','1860','','0','0','430481','');
INSERT INTO `web_area` VALUES('1861','常宁市','','1849','1822,1849','0','1861','','0','0','430482','');
INSERT INTO `web_area` VALUES('1862','邵阳市','','1822','1822','1','1863,1864,1865,1866,1867,1868,1869,1870,1871,1872,1873,1874','','0','0','430500','shaoyang');
INSERT INTO `web_area` VALUES('1863','双清区','','1862','1822,1862','0','1863','','0','0','430502','');
INSERT INTO `web_area` VALUES('1864','大祥区','','1862','1822,1862','0','1864','','0','0','430503','');
INSERT INTO `web_area` VALUES('1865','北塔区','','1862','1822,1862','0','1865','','0','0','430511','');
INSERT INTO `web_area` VALUES('1866','邵东县','','1862','1822,1862','0','1866','','0','0','430521','');
INSERT INTO `web_area` VALUES('1867','新邵县','','1862','1822,1862','0','1867','','0','0','430522','');
INSERT INTO `web_area` VALUES('1868','邵阳县','','1862','1822,1862','0','1868','','0','0','430523','');
INSERT INTO `web_area` VALUES('1869','隆回县','','1862','1822,1862','0','1869','','0','0','430524','');
INSERT INTO `web_area` VALUES('1870','洞口县','','1862','1822,1862','0','1870','','0','0','430525','');
INSERT INTO `web_area` VALUES('1871','绥宁县','','1862','1822,1862','0','1871','','0','0','430527','');
INSERT INTO `web_area` VALUES('1872','新宁县','','1862','1822,1862','0','1872','','0','0','430528','');
INSERT INTO `web_area` VALUES('1873','城步苗族自治县','','1862','1822,1862','0','1873','','0','0','430529','');
INSERT INTO `web_area` VALUES('1874','武冈市','','1862','1822,1862','0','1874','','0','0','430581','');
INSERT INTO `web_area` VALUES('1875','岳阳市','','1822','1822','1','1876,1877,1878,1879,1880,1881,1882,1883,1884','','0','0','430600','yueyang');
INSERT INTO `web_area` VALUES('1876','岳阳楼区','','1875','1822,1875','0','1876','','0','0','430602','');
INSERT INTO `web_area` VALUES('1877','云溪区','','1875','1822,1875','0','1877','','0','0','430603','');
INSERT INTO `web_area` VALUES('1878','君山区','','1875','1822,1875','0','1878','','0','0','430611','');
INSERT INTO `web_area` VALUES('1879','岳阳县','','1875','1822,1875','0','1879','','0','0','430621','');
INSERT INTO `web_area` VALUES('1880','华容县','','1875','1822,1875','0','1880','','0','0','430623','');
INSERT INTO `web_area` VALUES('1881','湘阴县','','1875','1822,1875','0','1881','','0','0','430624','');
INSERT INTO `web_area` VALUES('1882','平江县','','1875','1822,1875','0','1882','','0','0','430626','');
INSERT INTO `web_area` VALUES('1883','汨罗市','','1875','1822,1875','0','1883','','0','0','430681','');
INSERT INTO `web_area` VALUES('1884','临湘市','','1875','1822,1875','0','1884','','0','0','430682','');
INSERT INTO `web_area` VALUES('1885','常德市','','1822','1822','1','1886,1887,1888,1889,1890,1891,1892,1893,1894','','0','0','430700','changde');
INSERT INTO `web_area` VALUES('1886','武陵区','','1885','1822,1885','0','1886','','0','0','430702','');
INSERT INTO `web_area` VALUES('1887','鼎城区','','1885','1822,1885','0','1887','','0','0','430703','');
INSERT INTO `web_area` VALUES('1888','安乡县','','1885','1822,1885','0','1888','','0','0','430721','');
INSERT INTO `web_area` VALUES('1889','汉寿县','','1885','1822,1885','0','1889','','0','0','430722','');
INSERT INTO `web_area` VALUES('1890','澧县','','1885','1822,1885','0','1890','','0','0','430723','');
INSERT INTO `web_area` VALUES('1891','临澧县','','1885','1822,1885','0','1891','','0','0','430724','');
INSERT INTO `web_area` VALUES('1892','桃源县','','1885','1822,1885','0','1892','','0','0','430725','');
INSERT INTO `web_area` VALUES('1893','石门县','','1885','1822,1885','0','1893','','0','0','430726','');
INSERT INTO `web_area` VALUES('1894','津市市','','1885','1822,1885','0','1894','','0','0','430781','');
INSERT INTO `web_area` VALUES('1895','张家界','','1822','1822','1','1896,1897,1898,1899','','0','0','430800','zhangjiajie');
INSERT INTO `web_area` VALUES('1896','永定区','','1895','1822,1895','0','1896','','0','0','430802','');
INSERT INTO `web_area` VALUES('1897','武陵源区','','1895','1822,1895','0','1897','','0','0','430811','');
INSERT INTO `web_area` VALUES('1898','慈利县','','1895','1822,1895','0','1898','','0','0','430821','');
INSERT INTO `web_area` VALUES('1899','桑植县','','1895','1822,1895','0','1899','','0','0','430822','');
INSERT INTO `web_area` VALUES('1900','益阳市','','1822','1822','1','1901,1902,1903,1904,1905,1906','','0','0','430900','yiyang');
INSERT INTO `web_area` VALUES('1901','资阳区','','1900','1822,1900','0','1901','','0','0','430902','');
INSERT INTO `web_area` VALUES('1902','赫山区','','1900','1822,1900','0','1902','','0','0','430903','');
INSERT INTO `web_area` VALUES('1903','南县','','1900','1822,1900','0','1903','','0','0','430921','');
INSERT INTO `web_area` VALUES('1904','桃江县','','1900','1822,1900','0','1904','','0','0','430922','');
INSERT INTO `web_area` VALUES('1905','安化县','','1900','1822,1900','0','1905','','0','0','430923','');
INSERT INTO `web_area` VALUES('1906','沅江市','','1900','1822,1900','0','1906','','0','0','430981','');
INSERT INTO `web_area` VALUES('1907','郴州市','','1822','1822','1','1908,1909,1910,1911,1912,1913,1914,1915,1916,1917,1918','','0','0','431000','chenzhou');
INSERT INTO `web_area` VALUES('1908','北湖区','','1907','1822,1907','0','1908','','0','0','431002','');
INSERT INTO `web_area` VALUES('1909','苏仙区','','1907','1822,1907','0','1909','','0','0','431003','');
INSERT INTO `web_area` VALUES('1910','桂阳县','','1907','1822,1907','0','1910','','0','0','431021','');
INSERT INTO `web_area` VALUES('1911','宜章县','','1907','1822,1907','0','1911','','0','0','431022','');
INSERT INTO `web_area` VALUES('1912','永兴县','','1907','1822,1907','0','1912','','0','0','431023','');
INSERT INTO `web_area` VALUES('1913','嘉禾县','','1907','1822,1907','0','1913','','0','0','431024','');
INSERT INTO `web_area` VALUES('1914','临武县','','1907','1822,1907','0','1914','','0','0','431025','');
INSERT INTO `web_area` VALUES('1915','汝城县','','1907','1822,1907','0','1915','','0','0','431026','');
INSERT INTO `web_area` VALUES('1916','桂东县','','1907','1822,1907','0','1916','','0','0','431027','');
INSERT INTO `web_area` VALUES('1917','安仁县','','1907','1822,1907','0','1917','','0','0','431028','');
INSERT INTO `web_area` VALUES('1918','资兴市','','1907','1822,1907','0','1918','','0','0','431081','');
INSERT INTO `web_area` VALUES('1919','永州市','','1822','1822','1','1920,1921,1922,1923,1924,1925,1926,1927,1928,1929,1930','','0','0','431100','yongzhou');
INSERT INTO `web_area` VALUES('1920','零陵区','','1919','1822,1919','0','1920','','0','0','431102','');
INSERT INTO `web_area` VALUES('1921','冷水滩区','','1919','1822,1919','0','1921','','0','0','431103','');
INSERT INTO `web_area` VALUES('1922','祁阳县','','1919','1822,1919','0','1922','','0','0','431121','');
INSERT INTO `web_area` VALUES('1923','东安县','','1919','1822,1919','0','1923','','0','0','431122','');
INSERT INTO `web_area` VALUES('1924','双牌县','','1919','1822,1919','0','1924','','0','0','431123','');
INSERT INTO `web_area` VALUES('1925','道县','','1919','1822,1919','0','1925','','0','0','431124','');
INSERT INTO `web_area` VALUES('1926','江永县','','1919','1822,1919','0','1926','','0','0','431125','');
INSERT INTO `web_area` VALUES('1927','宁远县','','1919','1822,1919','0','1927','','0','0','431126','');
INSERT INTO `web_area` VALUES('1928','蓝山县','','1919','1822,1919','0','1928','','0','0','431127','');
INSERT INTO `web_area` VALUES('1929','新田县','','1919','1822,1919','0','1929','','0','0','431128','');
INSERT INTO `web_area` VALUES('1930','江华瑶族自治县','','1919','1822,1919','0','1930','','0','0','431129','');
INSERT INTO `web_area` VALUES('1931','怀化市','','1822','1822','1','1932,1933,1934,1935,1936,1937,1938,1939,1940,1941,1942,1943','','0','0','431200','huaihua');
INSERT INTO `web_area` VALUES('1932','鹤城区','','1931','1822,1931','0','1932','','0','0','431202','');
INSERT INTO `web_area` VALUES('1933','中方县','','1931','1822,1931','0','1933','','0','0','431221','');
INSERT INTO `web_area` VALUES('1934','沅陵县','','1931','1822,1931','0','1934','','0','0','431222','');
INSERT INTO `web_area` VALUES('1935','辰溪县','','1931','1822,1931','0','1935','','0','0','431223','');
INSERT INTO `web_area` VALUES('1936','溆浦县','','1931','1822,1931','0','1936','','0','0','431224','');
INSERT INTO `web_area` VALUES('1937','会同县','','1931','1822,1931','0','1937','','0','0','431225','');
INSERT INTO `web_area` VALUES('1938','麻阳苗族自治县','','1931','1822,1931','0','1938','','0','0','431226','');
INSERT INTO `web_area` VALUES('1939','新晃侗族自治县','','1931','1822,1931','0','1939','','0','0','431227','');
INSERT INTO `web_area` VALUES('1940','芷江侗族自治县','','1931','1822,1931','0','1940','','0','0','431228','');
INSERT INTO `web_area` VALUES('1941','靖州苗族侗族自治县','','1931','1822,1931','0','1941','','0','0','431229','');
INSERT INTO `web_area` VALUES('1942','通道侗族自治县','','1931','1822,1931','0','1942','','0','0','431230','');
INSERT INTO `web_area` VALUES('1943','洪江市','','1931','1822,1931','0','1943','','0','0','431281','');
INSERT INTO `web_area` VALUES('1944','娄底市','','1822','1822','1','1945,1946,1947,1948,1949','','0','0','431300','loudi');
INSERT INTO `web_area` VALUES('1945','娄星区','','1944','1822,1944','0','1945','','0','0','431302','');
INSERT INTO `web_area` VALUES('1946','双峰县','','1944','1822,1944','0','1946','','0','0','431321','');
INSERT INTO `web_area` VALUES('1947','新化县','','1944','1822,1944','0','1947','','0','0','431322','');
INSERT INTO `web_area` VALUES('1948','冷水江市','','1944','1822,1944','0','1948','','0','0','431381','');
INSERT INTO `web_area` VALUES('1949','涟源市','','1944','1822,1944','0','1949','','0','0','431382','');
INSERT INTO `web_area` VALUES('1950','湘西','','1822','1822','1','1951,1952,1953,1954,1955,1956,1957,1958','','0','0','433100','xiangxi');
INSERT INTO `web_area` VALUES('1951','吉首市','','1950','1822,1950','0','1951','','0','0','433101','');
INSERT INTO `web_area` VALUES('1952','泸溪县','','1950','1822,1950','0','1952','','0','0','433122','');
INSERT INTO `web_area` VALUES('1953','凤凰县','','1950','1822,1950','0','1953','','0','0','433123','');
INSERT INTO `web_area` VALUES('1954','花垣县','','1950','1822,1950','0','1954','','0','0','433124','');
INSERT INTO `web_area` VALUES('1955','保靖县','','1950','1822,1950','0','1955','','0','0','433125','');
INSERT INTO `web_area` VALUES('1956','古丈县','','1950','1822,1950','0','1956','','0','0','433126','');
INSERT INTO `web_area` VALUES('1957','永顺县','','1950','1822,1950','0','1957','','0','0','433127','');
INSERT INTO `web_area` VALUES('1958','龙山县','','1950','1822,1950','0','1958','','0','0','433130','');
INSERT INTO `web_area` VALUES('1959','广东','','0','0','1','1960,1973,1984,1991,1995,2003,2009,2017,2027,2034,2043,2049,2058,2063,2070,2075,2084,2085,2086,2090,2096,1961,1962,1963,1964,1965,1966,1967,1968,1969,1970,1971,1972','','5','0','440000','guangdong');
INSERT INTO `web_area` VALUES('1960','广州市','','1959','1959','1','1961,1962,1963,1964,1965,1966,1967,1968,1969,1970,1971,1972','','0','0','440100','guangzhou');
INSERT INTO `web_area` VALUES('1961','荔湾区','','1960','1959,1960','0','1961','','0','0','440103','');
INSERT INTO `web_area` VALUES('1962','越秀区','','1960','1959,1960','0','1962','','0','0','440104','');
INSERT INTO `web_area` VALUES('1963','海珠区','','1960','1959,1960','0','1963','','0','0','440105','');
INSERT INTO `web_area` VALUES('1964','天河区','','1960','1959,1960','0','1964','','0','0','440106','');
INSERT INTO `web_area` VALUES('1965','白云区','','1960','1959,1960','0','1965','','0','0','440111','');
INSERT INTO `web_area` VALUES('1966','黄埔区','','1960','1959,1960','0','1966','','0','0','440112','');
INSERT INTO `web_area` VALUES('1967','番禺区','','1960','1959,1960','0','1967','','0','0','440113','');
INSERT INTO `web_area` VALUES('1968','花都区','','1960','1959,1960','0','1968','','0','0','440114','');
INSERT INTO `web_area` VALUES('1969','南沙区','','1960','1959,1960','0','1969','','0','0','440115','');
INSERT INTO `web_area` VALUES('1970','萝岗区','','1960','1959,1960','0','1970','','0','0','440116','');
INSERT INTO `web_area` VALUES('1971','增城市','','1960','1959,1960','0','1971','','0','0','440183','');
INSERT INTO `web_area` VALUES('1972','从化市','','1960','1959,1960','0','1972','','0','0','440184','');
INSERT INTO `web_area` VALUES('1973','韶关市','','1959','1959','1','1974,1975,1976,1977,1978,1979,1980,1981,1982,1983','','0','0','440200','shaoguan');
INSERT INTO `web_area` VALUES('1974','武江区','','1973','1959,1973','0','1974','','0','0','440203','');
INSERT INTO `web_area` VALUES('1975','浈江区','','1973','1959,1973','0','1975','','0','0','440204','');
INSERT INTO `web_area` VALUES('1976','曲江区','','1973','1959,1973','0','1976','','0','0','440205','');
INSERT INTO `web_area` VALUES('1977','始兴县','','1973','1959,1973','0','1977','','0','0','440222','');
INSERT INTO `web_area` VALUES('1978','仁化县','','1973','1959,1973','0','1978','','0','0','440224','');
INSERT INTO `web_area` VALUES('1979','翁源县','','1973','1959,1973','0','1979','','0','0','440229','');
INSERT INTO `web_area` VALUES('1980','乳源瑶族自治县','','1973','1959,1973','0','1980','','0','0','440232','');
INSERT INTO `web_area` VALUES('1981','新丰县','','1973','1959,1973','0','1981','','0','0','440233','');
INSERT INTO `web_area` VALUES('1982','乐昌市','','1973','1959,1973','0','1982','','0','0','440281','');
INSERT INTO `web_area` VALUES('1983','南雄市','','1973','1959,1973','0','1983','','0','0','440282','');
INSERT INTO `web_area` VALUES('1984','深圳市','','1959','1959','1','1985,1986,1987,1988,1989,1990','','0','0','440300','shenzhen');
INSERT INTO `web_area` VALUES('1985','罗湖区','','1984','1959,1984','0','1985','','0','0','440303','');
INSERT INTO `web_area` VALUES('1986','福田区','','1984','1959,1984','0','1986','','0','0','440304','');
INSERT INTO `web_area` VALUES('1987','南山区','','1984','1959,1984','0','1987','','0','0','440305','');
INSERT INTO `web_area` VALUES('1988','宝安区','','1984','1959,1984','0','1988','','0','0','440306','');
INSERT INTO `web_area` VALUES('1989','龙岗区','','1984','1959,1984','0','1989','','0','0','440307','');
INSERT INTO `web_area` VALUES('1990','盐田区','','1984','1959,1984','0','1990','','0','0','440308','');
INSERT INTO `web_area` VALUES('1991','珠海市','','1959','1959','1','1992,1993,1994','','0','0','440400','zhuhai');
INSERT INTO `web_area` VALUES('1992','香洲区','','1991','1959,1991','0','1992','','0','0','440402','');
INSERT INTO `web_area` VALUES('1993','斗门区','','1991','1959,1991','0','1993','','0','0','440403','');
INSERT INTO `web_area` VALUES('1994','金湾区','','1991','1959,1991','0','1994','','0','0','440404','');
INSERT INTO `web_area` VALUES('1995','汕头市','','1959','1959','1','1996,1997,1998,1999,2000,2001,2002','','0','0','440500','shantou');
INSERT INTO `web_area` VALUES('1996','龙湖区','','1995','1959,1995','0','1996','','0','0','440507','');
INSERT INTO `web_area` VALUES('1997','金平区','','1995','1959,1995','0','1997','','0','0','440511','');
INSERT INTO `web_area` VALUES('1998','濠江区','','1995','1959,1995','0','1998','','0','0','440512','');
INSERT INTO `web_area` VALUES('1999','潮阳区','','1995','1959,1995','0','1999','','0','0','440513','');
INSERT INTO `web_area` VALUES('2000','潮南区','','1995','1959,1995','0','2000','','0','0','440514','');
INSERT INTO `web_area` VALUES('2001','澄海区','','1995','1959,1995','0','2001','','0','0','440515','');
INSERT INTO `web_area` VALUES('2002','南澳县','','1995','1959,1995','0','2002','','0','0','440523','');
INSERT INTO `web_area` VALUES('2003','佛山市','','1959','1959','1','2004,2005,2006,2007,2008','','0','0','440600','fushan');
INSERT INTO `web_area` VALUES('2004','禅城区','','2003','1959,2003','0','2004','','0','0','440604','');
INSERT INTO `web_area` VALUES('2005','南海区','','2003','1959,2003','0','2005','','0','0','440605','');
INSERT INTO `web_area` VALUES('2006','顺德区','','2003','1959,2003','0','2006','','0','0','440606','');
INSERT INTO `web_area` VALUES('2007','三水区','','2003','1959,2003','0','2007','','0','0','440607','');
INSERT INTO `web_area` VALUES('2008','高明区','','2003','1959,2003','0','2008','','0','0','440608','');
INSERT INTO `web_area` VALUES('2009','江门市','','1959','1959','1','2010,2011,2012,2013,2014,2015,2016','','0','0','440700','jiangmen');
INSERT INTO `web_area` VALUES('2010','蓬江区','','2009','1959,2009','0','2010','','0','0','440703','');
INSERT INTO `web_area` VALUES('2011','江海区','','2009','1959,2009','0','2011','','0','0','440704','');
INSERT INTO `web_area` VALUES('2012','新会区','','2009','1959,2009','0','2012','','0','0','440705','');
INSERT INTO `web_area` VALUES('2013','台山市','','2009','1959,2009','0','2013','','0','0','440781','');
INSERT INTO `web_area` VALUES('2014','开平市','','2009','1959,2009','0','2014','','0','0','440783','');
INSERT INTO `web_area` VALUES('2015','鹤山市','','2009','1959,2009','0','2015','','0','0','440784','');
INSERT INTO `web_area` VALUES('2016','恩平市','','2009','1959,2009','0','2016','','0','0','440785','');
INSERT INTO `web_area` VALUES('2017','湛江市','','1959','1959','1','2018,2019,2020,2021,2022,2023,2024,2025,2026','','0','0','440800','zhanjiang');
INSERT INTO `web_area` VALUES('2018','赤坎区','','2017','1959,2017','0','2018','','0','0','440802','');
INSERT INTO `web_area` VALUES('2019','霞山区','','2017','1959,2017','0','2019','','0','0','440803','');
INSERT INTO `web_area` VALUES('2020','坡头区','','2017','1959,2017','0','2020','','0','0','440804','');
INSERT INTO `web_area` VALUES('2021','麻章区','','2017','1959,2017','0','2021','','0','0','440811','');
INSERT INTO `web_area` VALUES('2022','遂溪县','','2017','1959,2017','0','2022','','0','0','440823','');
INSERT INTO `web_area` VALUES('2023','徐闻县','','2017','1959,2017','0','2023','','0','0','440825','');
INSERT INTO `web_area` VALUES('2024','廉江市','','2017','1959,2017','0','2024','','0','0','440881','');
INSERT INTO `web_area` VALUES('2025','雷州市','','2017','1959,2017','0','2025','','0','0','440882','');
INSERT INTO `web_area` VALUES('2026','吴川市','','2017','1959,2017','0','2026','','0','0','440883','');
INSERT INTO `web_area` VALUES('2027','茂名市','','1959','1959','1','2028,2029,2030,2031,2032,2033','','0','0','440900','maoming');
INSERT INTO `web_area` VALUES('2028','茂南区','','2027','1959,2027','0','2028','','0','0','440902','');
INSERT INTO `web_area` VALUES('2029','茂港区','','2027','1959,2027','0','2029','','0','0','440903','');
INSERT INTO `web_area` VALUES('2030','电白县','','2027','1959,2027','0','2030','','0','0','440923','');
INSERT INTO `web_area` VALUES('2031','高州市','','2027','1959,2027','0','2031','','0','0','440981','');
INSERT INTO `web_area` VALUES('2032','化州市','','2027','1959,2027','0','2032','','0','0','440982','');
INSERT INTO `web_area` VALUES('2033','信宜市','','2027','1959,2027','0','2033','','0','0','440983','');
INSERT INTO `web_area` VALUES('2034','肇庆市','','1959','1959','1','2035,2036,2037,2038,2039,2040,2041,2042','','0','0','441200','zhaoqing');
INSERT INTO `web_area` VALUES('2035','端州区','','2034','1959,2034','0','2035','','0','0','441202','');
INSERT INTO `web_area` VALUES('2036','鼎湖区','','2034','1959,2034','0','2036','','0','0','441203','');
INSERT INTO `web_area` VALUES('2037','广宁县','','2034','1959,2034','0','2037','','0','0','441223','');
INSERT INTO `web_area` VALUES('2038','怀集县','','2034','1959,2034','0','2038','','0','0','441224','');
INSERT INTO `web_area` VALUES('2039','封开县','','2034','1959,2034','0','2039','','0','0','441225','');
INSERT INTO `web_area` VALUES('2040','德庆县','','2034','1959,2034','0','2040','','0','0','441226','');
INSERT INTO `web_area` VALUES('2041','高要市','','2034','1959,2034','0','2041','','0','0','441283','');
INSERT INTO `web_area` VALUES('2042','四会市','','2034','1959,2034','0','2042','','0','0','441284','');
INSERT INTO `web_area` VALUES('2043','惠州市','','1959','1959','1','2044,2045,2046,2047,2048','','0','0','441300','huizhou');
INSERT INTO `web_area` VALUES('2044','惠城区','','2043','1959,2043','0','2044','','0','0','441302','');
INSERT INTO `web_area` VALUES('2045','惠阳区','','2043','1959,2043','0','2045','','0','0','441303','');
INSERT INTO `web_area` VALUES('2046','博罗县','','2043','1959,2043','0','2046','','0','0','441322','');
INSERT INTO `web_area` VALUES('2047','惠东县','','2043','1959,2043','0','2047','','0','0','441323','');
INSERT INTO `web_area` VALUES('2048','龙门县','','2043','1959,2043','0','2048','','0','0','441324','');
INSERT INTO `web_area` VALUES('2049','梅州市','','1959','1959','1','2050,2051,2052,2053,2054,2055,2056,2057','','0','0','441400','meizhou');
INSERT INTO `web_area` VALUES('2050','梅江区','','2049','1959,2049','0','2050','','0','0','441402','');
INSERT INTO `web_area` VALUES('2051','梅县','','2049','1959,2049','0','2051','','0','0','441421','');
INSERT INTO `web_area` VALUES('2052','大埔县','','2049','1959,2049','0','2052','','0','0','441422','');
INSERT INTO `web_area` VALUES('2053','丰顺县','','2049','1959,2049','0','2053','','0','0','441423','');
INSERT INTO `web_area` VALUES('2054','五华县','','2049','1959,2049','0','2054','','0','0','441424','');
INSERT INTO `web_area` VALUES('2055','平远县','','2049','1959,2049','0','2055','','0','0','441426','');
INSERT INTO `web_area` VALUES('2056','蕉岭县','','2049','1959,2049','0','2056','','0','0','441427','');
INSERT INTO `web_area` VALUES('2057','兴宁市','','2049','1959,2049','0','2057','','0','0','441481','');
INSERT INTO `web_area` VALUES('2058','汕尾市','','1959','1959','1','2059,2060,2061,2062','','0','0','441500','shanwei');
INSERT INTO `web_area` VALUES('2059','城区','','2058','1959,2058','0','2059','','0','0','441502','');
INSERT INTO `web_area` VALUES('2060','海丰县','','2058','1959,2058','0','2060','','0','0','441521','');
INSERT INTO `web_area` VALUES('2061','陆河县','','2058','1959,2058','0','2061','','0','0','441523','');
INSERT INTO `web_area` VALUES('2062','陆丰市','','2058','1959,2058','0','2062','','0','0','441581','');
INSERT INTO `web_area` VALUES('2063','河源市','','1959','1959','1','2064,2065,2066,2067,2068,2069','','0','0','441600','heyuan');
INSERT INTO `web_area` VALUES('2064','源城区','','2063','1959,2063','0','2064','','0','0','441602','');
INSERT INTO `web_area` VALUES('2065','紫金县','','2063','1959,2063','0','2065','','0','0','441621','');
INSERT INTO `web_area` VALUES('2066','龙川县','','2063','1959,2063','0','2066','','0','0','441622','');
INSERT INTO `web_area` VALUES('2067','连平县','','2063','1959,2063','0','2067','','0','0','441623','');
INSERT INTO `web_area` VALUES('2068','和平县','','2063','1959,2063','0','2068','','0','0','441624','');
INSERT INTO `web_area` VALUES('2069','东源县','','2063','1959,2063','0','2069','','0','0','441625','');
INSERT INTO `web_area` VALUES('2070','阳江市','','1959','1959','1','2071,2072,2073,2074','','0','0','441700','yangjiang');
INSERT INTO `web_area` VALUES('2071','江城区','','2070','1959,2070','0','2071','','0','0','441702','');
INSERT INTO `web_area` VALUES('2072','阳西县','','2070','1959,2070','0','2072','','0','0','441721','');
INSERT INTO `web_area` VALUES('2073','阳东县','','2070','1959,2070','0','2073','','0','0','441723','');
INSERT INTO `web_area` VALUES('2074','阳春市','','2070','1959,2070','0','2074','','0','0','441781','');
INSERT INTO `web_area` VALUES('2075','清远市','','1959','1959','1','2076,2077,2078,2079,2080,2081,2082,2083','','0','0','441800','qingyuan');
INSERT INTO `web_area` VALUES('2076','清城区','','2075','1959,2075','0','2076','','0','0','441802','');
INSERT INTO `web_area` VALUES('2077','佛冈县','','2075','1959,2075','0','2077','','0','0','441821','');
INSERT INTO `web_area` VALUES('2078','阳山县','','2075','1959,2075','0','2078','','0','0','441823','');
INSERT INTO `web_area` VALUES('2079','连山壮族瑶族自治县','','2075','1959,2075','0','2079','','0','0','441825','');
INSERT INTO `web_area` VALUES('2080','连南瑶族自治县','','2075','1959,2075','0','2080','','0','0','441826','');
INSERT INTO `web_area` VALUES('2081','清新县','','2075','1959,2075','0','2081','','0','0','441827','');
INSERT INTO `web_area` VALUES('2082','英德市','','2075','1959,2075','0','2082','','0','0','441881','');
INSERT INTO `web_area` VALUES('2083','连州市','','2075','1959,2075','0','2083','','0','0','441882','');
INSERT INTO `web_area` VALUES('2084','东莞市','','1959','1959','0','2084','','0','0','441900','dongguan');
INSERT INTO `web_area` VALUES('2085','中山市','','1959','1959','0','2085','','0','0','442000','zhongshanshi');
INSERT INTO `web_area` VALUES('2086','潮州市','','1959','1959','1','2087,2088,2089','','0','0','445100','chaozhou');
INSERT INTO `web_area` VALUES('2087','湘桥区','','2086','1959,2086','0','2087','','0','0','445102','');
INSERT INTO `web_area` VALUES('2088','潮安县','','2086','1959,2086','0','2088','','0','0','445121','');
INSERT INTO `web_area` VALUES('2089','饶平县','','2086','1959,2086','0','2089','','0','0','445122','');
INSERT INTO `web_area` VALUES('2090','揭阳市','','1959','1959','1','2091,2092,2093,2094,2095','','0','0','445200','jieyang');
INSERT INTO `web_area` VALUES('2091','榕城区','','2090','1959,2090','0','2091','','0','0','445202','');
INSERT INTO `web_area` VALUES('2092','揭东县','','2090','1959,2090','0','2092','','0','0','445221','');
INSERT INTO `web_area` VALUES('2093','揭西县','','2090','1959,2090','0','2093','','0','0','445222','');
INSERT INTO `web_area` VALUES('2094','惠来县','','2090','1959,2090','0','2094','','0','0','445224','');
INSERT INTO `web_area` VALUES('2095','普宁市','','2090','1959,2090','0','2095','','0','0','445281','');
INSERT INTO `web_area` VALUES('2096','云浮市','','1959','1959','1','2097,2098,2099,2100,2101','','0','0','445300','yunfu');
INSERT INTO `web_area` VALUES('2097','云城区','','2096','1959,2096','0','2097','','0','0','445302','');
INSERT INTO `web_area` VALUES('2098','新兴县','','2096','1959,2096','0','2098','','0','0','445321','');
INSERT INTO `web_area` VALUES('2099','郁南县','','2096','1959,2096','0','2099','','0','0','445322','');
INSERT INTO `web_area` VALUES('2100','云安县','','2096','1959,2096','0','2100','','0','0','445323','');
INSERT INTO `web_area` VALUES('2101','罗定市','','2096','1959,2096','0','2101','','0','0','445381','');
INSERT INTO `web_area` VALUES('2102','广西','','0','0','1','2103,2116,2127,2145,2153,2158,2163,2168,2174,2181,2194,2200,2212,2219,2104,2105,2106,2107,2108,2109,2110,2111,2112,2113,2114,2115','','22','0','450000','guangxi');
INSERT INTO `web_area` VALUES('2103','南宁市','','2102','2102','1','2104,2105,2106,2107,2108,2109,2110,2111,2112,2113,2114,2115','','0','0','450100','nanning');
INSERT INTO `web_area` VALUES('2104','兴宁区','','2103','2102,2103','0','2104','','0','0','450102','');
INSERT INTO `web_area` VALUES('2105','青秀区','','2103','2102,2103','0','2105','','0','0','450103','');
INSERT INTO `web_area` VALUES('2106','江南区','','2103','2102,2103','0','2106','','0','0','450105','');
INSERT INTO `web_area` VALUES('2107','西乡塘区','','2103','2102,2103','0','2107','','0','0','450107','');
INSERT INTO `web_area` VALUES('2108','良庆区','','2103','2102,2103','0','2108','','0','0','450108','');
INSERT INTO `web_area` VALUES('2109','邕宁区','','2103','2102,2103','0','2109','','0','0','450109','');
INSERT INTO `web_area` VALUES('2110','武鸣县','','2103','2102,2103','0','2110','','0','0','450122','');
INSERT INTO `web_area` VALUES('2111','隆安县','','2103','2102,2103','0','2111','','0','0','450123','');
INSERT INTO `web_area` VALUES('2112','马山县','','2103','2102,2103','0','2112','','0','0','450124','');
INSERT INTO `web_area` VALUES('2113','上林县','','2103','2102,2103','0','2113','','0','0','450125','');
INSERT INTO `web_area` VALUES('2114','宾阳县','','2103','2102,2103','0','2114','','0','0','450126','');
INSERT INTO `web_area` VALUES('2115','横县','','2103','2102,2103','0','2115','','0','0','450127','');
INSERT INTO `web_area` VALUES('2116','柳州市','','2102','2102','1','2117,2118,2119,2120,2121,2122,2123,2124,2125,2126','','0','0','450200','liuzhou');
INSERT INTO `web_area` VALUES('2117','城中区','','2116','2102,2116','0','2117','','0','0','450202','');
INSERT INTO `web_area` VALUES('2118','鱼峰区','','2116','2102,2116','0','2118','','0','0','450203','');
INSERT INTO `web_area` VALUES('2119','柳南区','','2116','2102,2116','0','2119','','0','0','450204','');
INSERT INTO `web_area` VALUES('2120','柳北区','','2116','2102,2116','0','2120','','0','0','450205','');
INSERT INTO `web_area` VALUES('2121','柳江县','','2116','2102,2116','0','2121','','0','0','450221','');
INSERT INTO `web_area` VALUES('2122','柳城县','','2116','2102,2116','0','2122','','0','0','450222','');
INSERT INTO `web_area` VALUES('2123','鹿寨县','','2116','2102,2116','0','2123','','0','0','450223','');
INSERT INTO `web_area` VALUES('2124','融安县','','2116','2102,2116','0','2124','','0','0','450224','');
INSERT INTO `web_area` VALUES('2125','融水苗族自治县','','2116','2102,2116','0','2125','','0','0','450225','');
INSERT INTO `web_area` VALUES('2126','三江侗族自治县','','2116','2102,2116','0','2126','','0','0','450226','');
INSERT INTO `web_area` VALUES('2127','桂林市','','2102','2102','1','2128,2129,2130,2131,2132,2133,2134,2135,2136,2137,2138,2139,2140,2141,2142,2143,2144','','0','0','450300','guilin');
INSERT INTO `web_area` VALUES('2128','秀峰区','','2127','2102,2127','0','2128','','0','0','450302','');
INSERT INTO `web_area` VALUES('2129','叠彩区','','2127','2102,2127','0','2129','','0','0','450303','');
INSERT INTO `web_area` VALUES('2130','象山区','','2127','2102,2127','0','2130','','0','0','450304','');
INSERT INTO `web_area` VALUES('2131','七星区','','2127','2102,2127','0','2131','','0','0','450305','');
INSERT INTO `web_area` VALUES('2132','雁山区','','2127','2102,2127','0','2132','','0','0','450311','');
INSERT INTO `web_area` VALUES('2133','阳朔县','','2127','2102,2127','0','2133','','0','0','450321','');
INSERT INTO `web_area` VALUES('2134','临桂县','','2127','2102,2127','0','2134','','0','0','450322','');
INSERT INTO `web_area` VALUES('2135','灵川县','','2127','2102,2127','0','2135','','0','0','450323','');
INSERT INTO `web_area` VALUES('2136','全州县','','2127','2102,2127','0','2136','','0','0','450324','');
INSERT INTO `web_area` VALUES('2137','兴安县','','2127','2102,2127','0','2137','','0','0','450325','');
INSERT INTO `web_area` VALUES('2138','永福县','','2127','2102,2127','0','2138','','0','0','450326','');
INSERT INTO `web_area` VALUES('2139','灌阳县','','2127','2102,2127','0','2139','','0','0','450327','');
INSERT INTO `web_area` VALUES('2140','龙胜各族自治县','','2127','2102,2127','0','2140','','0','0','450328','');
INSERT INTO `web_area` VALUES('2141','资源县','','2127','2102,2127','0','2141','','0','0','450329','');
INSERT INTO `web_area` VALUES('2142','平乐县','','2127','2102,2127','0','2142','','0','0','450330','');
INSERT INTO `web_area` VALUES('2143','荔蒲县','','2127','2102,2127','0','2143','','0','0','450331','');
INSERT INTO `web_area` VALUES('2144','恭城瑶族自治县','','2127','2102,2127','0','2144','','0','0','450332','');
INSERT INTO `web_area` VALUES('2145','梧州市','','2102','2102','1','2146,2147,2148,2149,2150,2151,2152','','0','0','450400','wuzhou');
INSERT INTO `web_area` VALUES('2146','万秀区','','2145','2102,2145','0','2146','','0','0','450403','');
INSERT INTO `web_area` VALUES('2147','蝶山区','','2145','2102,2145','0','2147','','0','0','450404','');
INSERT INTO `web_area` VALUES('2148','长洲区','','2145','2102,2145','0','2148','','0','0','450405','');
INSERT INTO `web_area` VALUES('2149','苍梧县','','2145','2102,2145','0','2149','','0','0','450421','');
INSERT INTO `web_area` VALUES('2150','藤县','','2145','2102,2145','0','2150','','0','0','450422','');
INSERT INTO `web_area` VALUES('2151','蒙山县','','2145','2102,2145','0','2151','','0','0','450423','');
INSERT INTO `web_area` VALUES('2152','岑溪市','','2145','2102,2145','0','2152','','0','0','450481','');
INSERT INTO `web_area` VALUES('2153','北海市','','2102','2102','1','2154,2155,2156,2157','','0','0','450500','beihai');
INSERT INTO `web_area` VALUES('2154','海城区','','2153','2102,2153','0','2154','','0','0','450502','');
INSERT INTO `web_area` VALUES('2155','银海区','','2153','2102,2153','0','2155','','0','0','450503','');
INSERT INTO `web_area` VALUES('2156','铁山港区','','2153','2102,2153','0','2156','','0','0','450512','');
INSERT INTO `web_area` VALUES('2157','合浦县','','2153','2102,2153','0','2157','','0','0','450521','');
INSERT INTO `web_area` VALUES('2158','防城港','','2102','2102','1','2159,2160,2161,2162','','0','0','450600','fangchenggang');
INSERT INTO `web_area` VALUES('2159','港口区','','2158','2102,2158','0','2159','','0','0','450602','');
INSERT INTO `web_area` VALUES('2160','防城区','','2158','2102,2158','0','2160','','0','0','450603','');
INSERT INTO `web_area` VALUES('2161','上思县','','2158','2102,2158','0','2161','','0','0','450621','');
INSERT INTO `web_area` VALUES('2162','东兴市','','2158','2102,2158','0','2162','','0','0','450681','');
INSERT INTO `web_area` VALUES('2163','钦州市','','2102','2102','1','2164,2165,2166,2167','','0','0','450700','qinzhou');
INSERT INTO `web_area` VALUES('2164','钦南区','','2163','2102,2163','0','2164','','0','0','450702','');
INSERT INTO `web_area` VALUES('2165','钦北区','','2163','2102,2163','0','2165','','0','0','450703','');
INSERT INTO `web_area` VALUES('2166','灵山县','','2163','2102,2163','0','2166','','0','0','450721','');
INSERT INTO `web_area` VALUES('2167','浦北县','','2163','2102,2163','0','2167','','0','0','450722','');
INSERT INTO `web_area` VALUES('2168','贵港市','','2102','2102','1','2169,2170,2171,2172,2173','','0','0','450800','guigang');
INSERT INTO `web_area` VALUES('2169','港北区','','2168','2102,2168','0','2169','','0','0','450802','');
INSERT INTO `web_area` VALUES('2170','港南区','','2168','2102,2168','0','2170','','0','0','450803','');
INSERT INTO `web_area` VALUES('2171','覃塘区','','2168','2102,2168','0','2171','','0','0','450804','');
INSERT INTO `web_area` VALUES('2172','平南县','','2168','2102,2168','0','2172','','0','0','450821','');
INSERT INTO `web_area` VALUES('2173','桂平市','','2168','2102,2168','0','2173','','0','0','450881','');
INSERT INTO `web_area` VALUES('2174','玉林市','','2102','2102','1','2175,2176,2177,2178,2179,2180','','0','0','450900','yulin');
INSERT INTO `web_area` VALUES('2175','玉州区','','2174','2102,2174','0','2175','','0','0','450902','');
INSERT INTO `web_area` VALUES('2176','容县','','2174','2102,2174','0','2176','','0','0','450921','');
INSERT INTO `web_area` VALUES('2177','陆川县','','2174','2102,2174','0','2177','','0','0','450922','');
INSERT INTO `web_area` VALUES('2178','博白县','','2174','2102,2174','0','2178','','0','0','450923','');
INSERT INTO `web_area` VALUES('2179','兴业县','','2174','2102,2174','0','2179','','0','0','450924','');
INSERT INTO `web_area` VALUES('2180','北流市','','2174','2102,2174','0','2180','','0','0','450981','');
INSERT INTO `web_area` VALUES('2181','百色市','','2102','2102','1','2182,2183,2184,2185,2186,2187,2188,2189,2190,2191,2192,2193','','0','0','451000','baise');
INSERT INTO `web_area` VALUES('2182','右江区','','2181','2102,2181','0','2182','','0','0','451002','');
INSERT INTO `web_area` VALUES('2183','田阳县','','2181','2102,2181','0','2183','','0','0','451021','');
INSERT INTO `web_area` VALUES('2184','田东县','','2181','2102,2181','0','2184','','0','0','451022','');
INSERT INTO `web_area` VALUES('2185','平果县','','2181','2102,2181','0','2185','','0','0','451023','');
INSERT INTO `web_area` VALUES('2186','德保县','','2181','2102,2181','0','2186','','0','0','451024','');
INSERT INTO `web_area` VALUES('2187','靖西县','','2181','2102,2181','0','2187','','0','0','451025','');
INSERT INTO `web_area` VALUES('2188','那坡县','','2181','2102,2181','0','2188','','0','0','451026','');
INSERT INTO `web_area` VALUES('2189','凌云县','','2181','2102,2181','0','2189','','0','0','451027','');
INSERT INTO `web_area` VALUES('2190','乐业县','','2181','2102,2181','0','2190','','0','0','451028','');
INSERT INTO `web_area` VALUES('2191','田林县','','2181','2102,2181','0','2191','','0','0','451029','');
INSERT INTO `web_area` VALUES('2192','西林县','','2181','2102,2181','0','2192','','0','0','451030','');
INSERT INTO `web_area` VALUES('2193','隆林各族自治县','','2181','2102,2181','0','2193','','0','0','451031','');
INSERT INTO `web_area` VALUES('2194','贺州市','','2102','2102','1','2195,2196,2197,2198,2199','','0','0','451100','hezhou');
INSERT INTO `web_area` VALUES('2195','八步区','','2194','2102,2194','0','2195','','0','0','451102','');
INSERT INTO `web_area` VALUES('2196','平桂管理区','','2194','2102,2194','0','2196','','0','0','451119','');
INSERT INTO `web_area` VALUES('2197','昭平县','','2194','2102,2194','0','2197','','0','0','451121','');
INSERT INTO `web_area` VALUES('2198','钟山县','','2194','2102,2194','0','2198','','0','0','451122','');
INSERT INTO `web_area` VALUES('2199','富川瑶族自治县','','2194','2102,2194','0','2199','','0','0','451123','');
INSERT INTO `web_area` VALUES('2200','河池市','','2102','2102','1','2201,2202,2203,2204,2205,2206,2207,2208,2209,2210,2211','','0','0','451200','hechi');
INSERT INTO `web_area` VALUES('2201','金城江区','','2200','2102,2200','0','2201','','0','0','451202','');
INSERT INTO `web_area` VALUES('2202','南丹县','','2200','2102,2200','0','2202','','0','0','451221','');
INSERT INTO `web_area` VALUES('2203','天峨县','','2200','2102,2200','0','2203','','0','0','451222','');
INSERT INTO `web_area` VALUES('2204','凤山县','','2200','2102,2200','0','2204','','0','0','451223','');
INSERT INTO `web_area` VALUES('2205','东兰县','','2200','2102,2200','0','2205','','0','0','451224','');
INSERT INTO `web_area` VALUES('2206','罗城仫佬族自治县','','2200','2102,2200','0','2206','','0','0','451225','');
INSERT INTO `web_area` VALUES('2207','环江毛南族自治县','','2200','2102,2200','0','2207','','0','0','451226','');
INSERT INTO `web_area` VALUES('2208','巴马瑶族自治县','','2200','2102,2200','0','2208','','0','0','451227','');
INSERT INTO `web_area` VALUES('2209','都安瑶族自治县','','2200','2102,2200','0','2209','','0','0','451228','');
INSERT INTO `web_area` VALUES('2210','大化瑶族自治县','','2200','2102,2200','0','2210','','0','0','451229','');
INSERT INTO `web_area` VALUES('2211','宜州市','','2200','2102,2200','0','2211','','0','0','451281','');
INSERT INTO `web_area` VALUES('2212','来宾市','','2102','2102','1','2213,2214,2215,2216,2217,2218','','0','0','451300','laibin');
INSERT INTO `web_area` VALUES('2213','兴宾区','','2212','2102,2212','0','2213','','0','0','451302','');
INSERT INTO `web_area` VALUES('2214','忻城县','','2212','2102,2212','0','2214','','0','0','451321','');
INSERT INTO `web_area` VALUES('2215','象州县','','2212','2102,2212','0','2215','','0','0','451322','');
INSERT INTO `web_area` VALUES('2216','武宣县','','2212','2102,2212','0','2216','','0','0','451323','');
INSERT INTO `web_area` VALUES('2217','金秀瑶族自治县','','2212','2102,2212','0','2217','','0','0','451324','');
INSERT INTO `web_area` VALUES('2218','合山市','','2212','2102,2212','0','2218','','0','0','451381','');
INSERT INTO `web_area` VALUES('2219','崇左市','','2102','2102','1','2220,2221,2222,2223,2224,2225,2226','','0','0','451400','chongzuo');
INSERT INTO `web_area` VALUES('2220','江洲区','','2219','2102,2219','0','2220','','0','0','451402','');
INSERT INTO `web_area` VALUES('2221','扶绥县','','2219','2102,2219','0','2221','','0','0','451421','');
INSERT INTO `web_area` VALUES('2222','宁明县','','2219','2102,2219','0','2222','','0','0','451422','');
INSERT INTO `web_area` VALUES('2223','龙州县','','2219','2102,2219','0','2223','','0','0','451423','');
INSERT INTO `web_area` VALUES('2224','大新县','','2219','2102,2219','0','2224','','0','0','451424','');
INSERT INTO `web_area` VALUES('2225','天等县','','2219','2102,2219','0','2225','','0','0','451425','');
INSERT INTO `web_area` VALUES('2226','凭祥市','','2219','2102,2219','0','2226','','0','0','451481','');
INSERT INTO `web_area` VALUES('2227','海南','','0','0','1','2228,2233,2234,2229,2230,2231,2232,2236,2237,2238,2239,2240,2241,2242,2244,2245,2247,2248,2250,2251','','27','0','460000','hainan');
INSERT INTO `web_area` VALUES('2228','海口市','','2227','2227','1','2229,2230,2231,2232','','0','0','460100','haikou');
INSERT INTO `web_area` VALUES('2229','秀英区','','2228','2227,2228','0','2229','','0','0','460105','');
INSERT INTO `web_area` VALUES('2230','龙华区','','2228','2227,2228','0','2230','','0','0','460106','');
INSERT INTO `web_area` VALUES('2231','琼山区','','2228','2227,2228','0','2231','','0','0','460107','');
INSERT INTO `web_area` VALUES('2232','美兰区','','2228','2227,2228','0','2232','','0','0','460108','');
INSERT INTO `web_area` VALUES('2233','三亚市','','2227','2227','0','2233','','0','0','460200','sanya');
INSERT INTO `web_area` VALUES('2236','琼海市','','2227','2227','0','2236','','0','0','469002','qionghaishi');
INSERT INTO `web_area` VALUES('2237','儋州市','','2227','2227','0','2237','','0','0','469003','chanzhoushi');
INSERT INTO `web_area` VALUES('2238','文昌市','','2227','2227','0','2238','','0','0','469005','wenchangshi');
INSERT INTO `web_area` VALUES('2239','万宁市','','2227','2227','0','2239','','0','0','469006','wanningshi');
INSERT INTO `web_area` VALUES('2240','东方市','','2227','2227','0','2240','','0','0','469007','dongfangshi');
INSERT INTO `web_area` VALUES('2241','定安县','','2227','2227','0','2241','','0','0','469021','dinganxian');
INSERT INTO `web_area` VALUES('2242','屯昌县','','2227','2227','0','2242','','0','0','469022','tunchangxian');
INSERT INTO `web_area` VALUES('2244','临高县','','2227','2227','0','2244','','0','0','469024','lingaoxian');
INSERT INTO `web_area` VALUES('2245','白沙县','','2227','2227','0','2245','','0','0','469025','baishaxian');
INSERT INTO `web_area` VALUES('2247','乐东县','','2227','2227','0','2247','','0','0','469027','ledongxian');
INSERT INTO `web_area` VALUES('2248','陵水县','','2227','2227','0','2248','','0','0','469028','lingshuixian');
INSERT INTO `web_area` VALUES('2250','琼中县','','2227','2227','0','2250','','0','0','469030','qiongzhongxian');
INSERT INTO `web_area` VALUES('2251','西南中岛','','2227','2227','0','2251','','0','0','469031','xinanzhongdao');
INSERT INTO `web_area` VALUES('2254','重庆','','0','0','1','2255,2256,2257,2258,2259,2260,2261,2262,2263,2264,2265,2266,2267,2268,2269,2270,2271,2272,2273,2274,2275,2276,2277,2278,2279,2280,2281,2282,2283,2284,2285,2286,2287,2288,2289,2290,2291,2292,2293,2294,2295','','4','0','500000','chongqing');
INSERT INTO `web_area` VALUES('2255','重庆市','','2254','2254','1','2256,2257,2258,2259,2260,2261,2262,2263,2264,2265,2266,2267,2268,2269,2270,2271,2272,2273,2274,2275,2276,2277,2278,2279,2280,2281,2282,2283,2284,2285,2286,2287,2288,2289,2290,2291,2292,2293,2294,2295','','0','0','500100','chongqingshiqu');
INSERT INTO `web_area` VALUES('2256','万州区','','2255','2254,2255','0','2256','','0','0','500101','wanzhouqu');
INSERT INTO `web_area` VALUES('2257','涪陵区','','2255','2254,2255','0','2257','','0','0','500102','fulingqu');
INSERT INTO `web_area` VALUES('2258','渝中区','','2255','2254,2255','0','2258','','0','0','500103','yuzhongqu');
INSERT INTO `web_area` VALUES('2259','大渡口','','2255','2254,2255','0','2259','','0','0','500104','dadukouqu');
INSERT INTO `web_area` VALUES('2260','江北区','','2255','2254,2255','0','2260','','0','0','500105','jiangbeiqu');
INSERT INTO `web_area` VALUES('2261','沙坪坝','','2255','2254,2255','0','2261','','0','0','500106','shapingbaqu');
INSERT INTO `web_area` VALUES('2262','九龙坡','','2255','2254,2255','0','2262','','0','0','500107','jiulongpoqu');
INSERT INTO `web_area` VALUES('2263','南岸区','','2255','2254,2255','0','2263','','0','0','500108','nananqu');
INSERT INTO `web_area` VALUES('2264','北碚区','','2255','2254,2255','0','2264','','0','0','500109','beibeiqu');
INSERT INTO `web_area` VALUES('2265','万盛区','','2255','2254,2255','0','2265','','0','0','500110','wanshengqu');
INSERT INTO `web_area` VALUES('2266','双桥区','','2255','2254,2255','0','2266','','0','0','500111','shuangqiaoqu');
INSERT INTO `web_area` VALUES('2267','渝北区','','2255','2254,2255','0','2267','','0','0','500112','yubeiqu');
INSERT INTO `web_area` VALUES('2268','巴南区','','2255','2254,2255','0','2268','','0','0','500113','bananqu');
INSERT INTO `web_area` VALUES('2269','黔江区','','2255','2254,2255','0','2269','','0','0','500114','qianjiangqu');
INSERT INTO `web_area` VALUES('2270','长寿区','','2255','2254,2255','0','2270','','0','0','500115','changshouqu');
INSERT INTO `web_area` VALUES('2271','江津区','','2255','2254,2255','0','2271','','0','0','500116','jiangjinqu');
INSERT INTO `web_area` VALUES('2272','合川区','','2255','2254,2255','0','2272','','0','0','500117','hechuanqu');
INSERT INTO `web_area` VALUES('2273','永川区','','2255','2254,2255','0','2273','','0','0','500118','yongchuanqu');
INSERT INTO `web_area` VALUES('2274','南川区','','2255','2254,2255','0','2274','','0','0','500119','nanchuanqu');
INSERT INTO `web_area` VALUES('2275','綦江县','','2255','2254,2255','0','2275','','0','0','500222','qijiangxian');
INSERT INTO `web_area` VALUES('2276','潼南县','','2255','2254,2255','0','2276','','0','0','500223','tongnanxian');
INSERT INTO `web_area` VALUES('2277','铜梁县','','2255','2254,2255','0','2277','','0','0','500224','tongliangxian');
INSERT INTO `web_area` VALUES('2278','大足县','','2255','2254,2255','0','2278','','0','0','500225','dazuxian');
INSERT INTO `web_area` VALUES('2279','荣昌县','','2255','2254,2255','0','2279','','0','0','500226','rongchangxian');
INSERT INTO `web_area` VALUES('2280','璧山县','','2255','2254,2255','0','2280','','0','0','500227','bishanxian');
INSERT INTO `web_area` VALUES('2281','梁平县','','2255','2254,2255','0','2281','','0','0','500228','liangpingxian');
INSERT INTO `web_area` VALUES('2282','城口县','','2255','2254,2255','0','2282','','0','0','500229','chengkouxian');
INSERT INTO `web_area` VALUES('2283','丰都县','','2255','2254,2255','0','2283','','0','0','500230','fengduxian');
INSERT INTO `web_area` VALUES('2284','垫江县','','2255','2254,2255','0','2284','','0','0','500231','dianjiangxian');
INSERT INTO `web_area` VALUES('2285','武隆县','','2255','2254,2255','0','2285','','0','0','500232','wulongxian');
INSERT INTO `web_area` VALUES('2286','忠县','','2255','2254,2255','0','2286','','0','0','500233','zhongxian');
INSERT INTO `web_area` VALUES('2287','开县','','2255','2254,2255','0','2287','','0','0','500234','kaixian');
INSERT INTO `web_area` VALUES('2288','云阳县','','2255','2254,2255','0','2288','','0','0','500235','yunyangxian');
INSERT INTO `web_area` VALUES('2289','奉节县','','2255','2254,2255','0','2289','','0','0','500236','fengjiexian');
INSERT INTO `web_area` VALUES('2290','巫山县','','2255','2254,2255','0','2290','','0','0','500237','wushanxian');
INSERT INTO `web_area` VALUES('2291','巫溪县','','2255','2254,2255','0','2291','','0','0','500238','wuxixian');
INSERT INTO `web_area` VALUES('2292','石柱','','2255','2254,2255','0','2292','','0','0','500240','shizhu');
INSERT INTO `web_area` VALUES('2293','秀山','','2255','2254,2255','0','2293','','0','0','500241','xiushan');
INSERT INTO `web_area` VALUES('2294','酉阳','','2255','2254,2255','0','2294','','0','0','500242','youyang');
INSERT INTO `web_area` VALUES('2295','彭水','','2255','2254,2255','0','2295','','0','0','500243','pengshui');
INSERT INTO `web_area` VALUES('2296','四川','','0','0','1','2297,2317,2324,2330,2338,2345,2355,2363,2369,2375,2387,2397,2404,2415,2421,2429,2438,2443,2448,2462,2481,2298,2299,2300,2301,2302,2303,2304,2305,2306,2307,2308,2309,2310,2311,2312,2313,2314,2315,2316','','16','0','510000','sichuan');
INSERT INTO `web_area` VALUES('2297','成都市','','2296','2296','1','2298,2299,2300,2301,2302,2303,2304,2305,2306,2307,2308,2309,2310,2311,2312,2313,2314,2315,2316','','0','0','510100','chengdu');
INSERT INTO `web_area` VALUES('2298','锦江区','','2297','2296,2297','0','2298','','0','0','510104','');
INSERT INTO `web_area` VALUES('2299','青羊区','','2297','2296,2297','0','2299','','0','0','510105','');
INSERT INTO `web_area` VALUES('2300','金牛区','','2297','2296,2297','0','2300','','0','0','510106','');
INSERT INTO `web_area` VALUES('2301','武侯区','','2297','2296,2297','0','2301','','0','0','510107','');
INSERT INTO `web_area` VALUES('2302','成华区','','2297','2296,2297','0','2302','','0','0','510108','');
INSERT INTO `web_area` VALUES('2303','龙泉驿区','','2297','2296,2297','0','2303','','0','0','510112','');
INSERT INTO `web_area` VALUES('2304','青白江区','','2297','2296,2297','0','2304','','0','0','510113','');
INSERT INTO `web_area` VALUES('2305','新都区','','2297','2296,2297','0','2305','','0','0','510114','');
INSERT INTO `web_area` VALUES('2306','温江区','','2297','2296,2297','0','2306','','0','0','510115','');
INSERT INTO `web_area` VALUES('2307','金堂县','','2297','2296,2297','0','2307','','0','0','510121','');
INSERT INTO `web_area` VALUES('2308','双流县','','2297','2296,2297','0','2308','','0','0','510122','');
INSERT INTO `web_area` VALUES('2309','郫县','','2297','2296,2297','0','2309','','0','0','510124','');
INSERT INTO `web_area` VALUES('2310','大邑县','','2297','2296,2297','0','2310','','0','0','510129','');
INSERT INTO `web_area` VALUES('2311','蒲江县','','2297','2296,2297','0','2311','','0','0','510131','');
INSERT INTO `web_area` VALUES('2312','新津县','','2297','2296,2297','0','2312','','0','0','510132','');
INSERT INTO `web_area` VALUES('2313','都江堰市','','2297','2296,2297','0','2313','','0','0','510181','');
INSERT INTO `web_area` VALUES('2314','彭州市','','2297','2296,2297','0','2314','','0','0','510182','');
INSERT INTO `web_area` VALUES('2315','邛崃市','','2297','2296,2297','0','2315','','0','0','510183','');
INSERT INTO `web_area` VALUES('2316','崇州市','','2297','2296,2297','0','2316','','0','0','510184','');
INSERT INTO `web_area` VALUES('2317','自贡市','','2296','2296','1','2318,2319,2320,2321,2322,2323','','0','0','510300','zigong');
INSERT INTO `web_area` VALUES('2318','自流井区','','2317','2296,2317','0','2318','','0','0','510302','');
INSERT INTO `web_area` VALUES('2319','贡井区','','2317','2296,2317','0','2319','','0','0','510303','');
INSERT INTO `web_area` VALUES('2320','大安区','','2317','2296,2317','0','2320','','0','0','510304','');
INSERT INTO `web_area` VALUES('2321','沿滩区','','2317','2296,2317','0','2321','','0','0','510311','');
INSERT INTO `web_area` VALUES('2322','荣县','','2317','2296,2317','0','2322','','0','0','510321','');
INSERT INTO `web_area` VALUES('2323','富顺县','','2317','2296,2317','0','2323','','0','0','510322','');
INSERT INTO `web_area` VALUES('2324','攀枝花','','2296','2296','1','2325,2326,2327,2328,2329','','0','0','510400','panzhihua');
INSERT INTO `web_area` VALUES('2325','东区','','2324','2296,2324','0','2325','','0','0','510402','');
INSERT INTO `web_area` VALUES('2326','西区','','2324','2296,2324','0','2326','','0','0','510403','');
INSERT INTO `web_area` VALUES('2327','仁和区','','2324','2296,2324','0','2327','','0','0','510411','');
INSERT INTO `web_area` VALUES('2328','米易县','','2324','2296,2324','0','2328','','0','0','510421','');
INSERT INTO `web_area` VALUES('2329','盐边县','','2324','2296,2324','0','2329','','0','0','510422','');
INSERT INTO `web_area` VALUES('2330','泸州市','','2296','2296','1','2331,2332,2333,2334,2335,2336,2337','','0','0','510500','luzhou');
INSERT INTO `web_area` VALUES('2331','江阳区','','2330','2296,2330','0','2331','','0','0','510502','');
INSERT INTO `web_area` VALUES('2332','纳溪区','','2330','2296,2330','0','2332','','0','0','510503','');
INSERT INTO `web_area` VALUES('2333','龙马潭区','','2330','2296,2330','0','2333','','0','0','510504','');
INSERT INTO `web_area` VALUES('2334','泸县','','2330','2296,2330','0','2334','','0','0','510521','');
INSERT INTO `web_area` VALUES('2335','合江县','','2330','2296,2330','0','2335','','0','0','510522','');
INSERT INTO `web_area` VALUES('2336','叙永县','','2330','2296,2330','0','2336','','0','0','510524','');
INSERT INTO `web_area` VALUES('2337','古蔺县','','2330','2296,2330','0','2337','','0','0','510525','');
INSERT INTO `web_area` VALUES('2338','德阳市','','2296','2296','1','2339,2340,2341,2342,2343,2344','','0','0','510600','deyang');
INSERT INTO `web_area` VALUES('2339','旌阳区','','2338','2296,2338','0','2339','','0','0','510603','');
INSERT INTO `web_area` VALUES('2340','中江县','','2338','2296,2338','0','2340','','0','0','510623','');
INSERT INTO `web_area` VALUES('2341','罗江县','','2338','2296,2338','0','2341','','0','0','510626','');
INSERT INTO `web_area` VALUES('2342','广汉市','','2338','2296,2338','0','2342','','0','0','510681','');
INSERT INTO `web_area` VALUES('2343','什邡市','','2338','2296,2338','0','2343','','0','0','510682','');
INSERT INTO `web_area` VALUES('2344','绵竹市','','2338','2296,2338','0','2344','','0','0','510683','');
INSERT INTO `web_area` VALUES('2345','绵阳市','','2296','2296','1','2346,2347,2348,2349,2350,2351,2352,2353,2354','','0','0','510700','mianyang');
INSERT INTO `web_area` VALUES('2346','涪城区','','2345','2296,2345','0','2346','','0','0','510703','');
INSERT INTO `web_area` VALUES('2347','游仙区','','2345','2296,2345','0','2347','','0','0','510704','');
INSERT INTO `web_area` VALUES('2348','三台县','','2345','2296,2345','0','2348','','0','0','510722','');
INSERT INTO `web_area` VALUES('2349','盐亭县','','2345','2296,2345','0','2349','','0','0','510723','');
INSERT INTO `web_area` VALUES('2350','安县','','2345','2296,2345','0','2350','','0','0','510724','');
INSERT INTO `web_area` VALUES('2351','梓潼县','','2345','2296,2345','0','2351','','0','0','510725','');
INSERT INTO `web_area` VALUES('2352','北川羌族自治县','','2345','2296,2345','0','2352','','0','0','510726','');
INSERT INTO `web_area` VALUES('2353','平武县','','2345','2296,2345','0','2353','','0','0','510727','');
INSERT INTO `web_area` VALUES('2354','江油市','','2345','2296,2345','0','2354','','0','0','510781','');
INSERT INTO `web_area` VALUES('2355','广元市','','2296','2296','1','2356,2357,2358,2359,2360,2361,2362','','0','0','510800','guangyuan');
INSERT INTO `web_area` VALUES('2356','利州区','','2355','2296,2355','0','2356','','0','0','510802','');
INSERT INTO `web_area` VALUES('2357','元坝区','','2355','2296,2355','0','2357','','0','0','510811','');
INSERT INTO `web_area` VALUES('2358','朝天区','','2355','2296,2355','0','2358','','0','0','510812','');
INSERT INTO `web_area` VALUES('2359','旺苍县','','2355','2296,2355','0','2359','','0','0','510821','');
INSERT INTO `web_area` VALUES('2360','青川县','','2355','2296,2355','0','2360','','0','0','510822','');
INSERT INTO `web_area` VALUES('2361','剑阁县','','2355','2296,2355','0','2361','','0','0','510823','');
INSERT INTO `web_area` VALUES('2362','苍溪县','','2355','2296,2355','0','2362','','0','0','510824','');
INSERT INTO `web_area` VALUES('2363','遂宁市','','2296','2296','1','2364,2365,2366,2367,2368','','0','0','510900','suining');
INSERT INTO `web_area` VALUES('2364','船山区','','2363','2296,2363','0','2364','','0','0','510903','');
INSERT INTO `web_area` VALUES('2365','安居区','','2363','2296,2363','0','2365','','0','0','510904','');
INSERT INTO `web_area` VALUES('2366','蓬溪县','','2363','2296,2363','0','2366','','0','0','510921','');
INSERT INTO `web_area` VALUES('2367','射洪县','','2363','2296,2363','0','2367','','0','0','510922','');
INSERT INTO `web_area` VALUES('2368','大英县','','2363','2296,2363','0','2368','','0','0','510923','');
INSERT INTO `web_area` VALUES('2369','内江市','','2296','2296','1','2370,2371,2372,2373,2374','','0','0','511000','najiang');
INSERT INTO `web_area` VALUES('2370','市中区','','2369','2296,2369','0','2370','','0','0','511002','');
INSERT INTO `web_area` VALUES('2371','东兴区','','2369','2296,2369','0','2371','','0','0','511011','');
INSERT INTO `web_area` VALUES('2372','威远县','','2369','2296,2369','0','2372','','0','0','511024','');
INSERT INTO `web_area` VALUES('2373','资中县','','2369','2296,2369','0','2373','','0','0','511025','');
INSERT INTO `web_area` VALUES('2374','隆昌县','','2369','2296,2369','0','2374','','0','0','511028','');
INSERT INTO `web_area` VALUES('2375','乐山市','','2296','2296','1','2376,2377,2378,2379,2380,2381,2382,2383,2384,2385,2386','','0','0','511100','leshan');
INSERT INTO `web_area` VALUES('2376','市中区','','2375','2296,2375','0','2376','','0','0','511102','');
INSERT INTO `web_area` VALUES('2377','沙湾区','','2375','2296,2375','0','2377','','0','0','511111','');
INSERT INTO `web_area` VALUES('2378','五通桥区','','2375','2296,2375','0','2378','','0','0','511112','');
INSERT INTO `web_area` VALUES('2379','金口河区','','2375','2296,2375','0','2379','','0','0','511113','');
INSERT INTO `web_area` VALUES('2380','犍为县','','2375','2296,2375','0','2380','','0','0','511123','');
INSERT INTO `web_area` VALUES('2381','井研县','','2375','2296,2375','0','2381','','0','0','511124','');
INSERT INTO `web_area` VALUES('2382','夹江县','','2375','2296,2375','0','2382','','0','0','511126','');
INSERT INTO `web_area` VALUES('2383','沐川县','','2375','2296,2375','0','2383','','0','0','511129','');
INSERT INTO `web_area` VALUES('2384','峨边彝族自治县','','2375','2296,2375','0','2384','','0','0','511132','');
INSERT INTO `web_area` VALUES('2385','马边彝族自治县','','2375','2296,2375','0','2385','','0','0','511133','');
INSERT INTO `web_area` VALUES('2386','峨眉山市','','2375','2296,2375','0','2386','','0','0','511181','');
INSERT INTO `web_area` VALUES('2387','南充市','','2296','2296','1','2388,2389,2390,2391,2392,2393,2394,2395,2396','','0','0','511300','nanchong');
INSERT INTO `web_area` VALUES('2388','顺庆区','','2387','2296,2387','0','2388','','0','0','511302','');
INSERT INTO `web_area` VALUES('2389','高坪区','','2387','2296,2387','0','2389','','0','0','511303','');
INSERT INTO `web_area` VALUES('2390','嘉陵区','','2387','2296,2387','0','2390','','0','0','511304','');
INSERT INTO `web_area` VALUES('2391','南部县','','2387','2296,2387','0','2391','','0','0','511321','');
INSERT INTO `web_area` VALUES('2392','营山县','','2387','2296,2387','0','2392','','0','0','511322','');
INSERT INTO `web_area` VALUES('2393','蓬安县','','2387','2296,2387','0','2393','','0','0','511323','');
INSERT INTO `web_area` VALUES('2394','仪陇县','','2387','2296,2387','0','2394','','0','0','511324','');
INSERT INTO `web_area` VALUES('2395','西充县','','2387','2296,2387','0','2395','','0','0','511325','');
INSERT INTO `web_area` VALUES('2396','阆中市','','2387','2296,2387','0','2396','','0','0','511381','');
INSERT INTO `web_area` VALUES('2397','眉山市','','2296','2296','1','2398,2399,2400,2401,2402,2403','','0','0','511400','meishan');
INSERT INTO `web_area` VALUES('2398','东坡区','','2397','2296,2397','0','2398','','0','0','511402','');
INSERT INTO `web_area` VALUES('2399','仁寿县','','2397','2296,2397','0','2399','','0','0','511421','');
INSERT INTO `web_area` VALUES('2400','彭山县','','2397','2296,2397','0','2400','','0','0','511422','');
INSERT INTO `web_area` VALUES('2401','洪雅县','','2397','2296,2397','0','2401','','0','0','511423','');
INSERT INTO `web_area` VALUES('2402','丹棱县','','2397','2296,2397','0','2402','','0','0','511424','');
INSERT INTO `web_area` VALUES('2403','青神县','','2397','2296,2397','0','2403','','0','0','511425','');
INSERT INTO `web_area` VALUES('2404','宜宾市','','2296','2296','1','2405,2406,2407,2408,2409,2410,2411,2412,2413,2414','','0','0','511500','yibin');
INSERT INTO `web_area` VALUES('2405','翠屏区','','2404','2296,2404','0','2405','','0','0','511502','');
INSERT INTO `web_area` VALUES('2406','宜宾县','','2404','2296,2404','0','2406','','0','0','511521','');
INSERT INTO `web_area` VALUES('2407','南溪县','','2404','2296,2404','0','2407','','0','0','511522','');
INSERT INTO `web_area` VALUES('2408','江安县','','2404','2296,2404','0','2408','','0','0','511523','');
INSERT INTO `web_area` VALUES('2409','长宁县','','2404','2296,2404','0','2409','','0','0','511524','');
INSERT INTO `web_area` VALUES('2410','高县','','2404','2296,2404','0','2410','','0','0','511525','');
INSERT INTO `web_area` VALUES('2411','珙县','','2404','2296,2404','0','2411','','0','0','511526','');
INSERT INTO `web_area` VALUES('2412','筠连县','','2404','2296,2404','0','2412','','0','0','511527','');
INSERT INTO `web_area` VALUES('2413','兴文县','','2404','2296,2404','0','2413','','0','0','511528','');
INSERT INTO `web_area` VALUES('2414','屏山县','','2404','2296,2404','0','2414','','0','0','511529','');
INSERT INTO `web_area` VALUES('2415','广安市','','2296','2296','1','2416,2417,2418,2419,2420','','0','0','511600','guangan');
INSERT INTO `web_area` VALUES('2416','广安区','','2415','2296,2415','0','2416','','0','0','511602','');
INSERT INTO `web_area` VALUES('2417','岳池县','','2415','2296,2415','0','2417','','0','0','511621','');
INSERT INTO `web_area` VALUES('2418','武胜县','','2415','2296,2415','0','2418','','0','0','511622','');
INSERT INTO `web_area` VALUES('2419','邻水县','','2415','2296,2415','0','2419','','0','0','511623','');
INSERT INTO `web_area` VALUES('2420','华蓥市','','2415','2296,2415','0','2420','','0','0','511681','');
INSERT INTO `web_area` VALUES('2421','达州市','','2296','2296','1','2422,2423,2424,2425,2426,2427,2428','','0','0','511700','dazhou');
INSERT INTO `web_area` VALUES('2422','通川区','','2421','2296,2421','0','2422','','0','0','511702','');
INSERT INTO `web_area` VALUES('2423','达县','','2421','2296,2421','0','2423','','0','0','511721','');
INSERT INTO `web_area` VALUES('2424','宣汉县','','2421','2296,2421','0','2424','','0','0','511722','');
INSERT INTO `web_area` VALUES('2425','开江县','','2421','2296,2421','0','2425','','0','0','511723','');
INSERT INTO `web_area` VALUES('2426','大竹县','','2421','2296,2421','0','2426','','0','0','511724','');
INSERT INTO `web_area` VALUES('2427','渠县','','2421','2296,2421','0','2427','','0','0','511725','');
INSERT INTO `web_area` VALUES('2428','万源市','','2421','2296,2421','0','2428','','0','0','511781','');
INSERT INTO `web_area` VALUES('2429','雅安市','','2296','2296','1','2430,2431,2432,2433,2434,2435,2436,2437','','0','0','511800','yaan');
INSERT INTO `web_area` VALUES('2430','雨城区','','2429','2296,2429','0','2430','','0','0','511802','');
INSERT INTO `web_area` VALUES('2431','名山县','','2429','2296,2429','0','2431','','0','0','511821','');
INSERT INTO `web_area` VALUES('2432','荥经县','','2429','2296,2429','0','2432','','0','0','511822','');
INSERT INTO `web_area` VALUES('2433','汉源县','','2429','2296,2429','0','2433','','0','0','511823','');
INSERT INTO `web_area` VALUES('2434','石棉县','','2429','2296,2429','0','2434','','0','0','511824','');
INSERT INTO `web_area` VALUES('2435','天全县','','2429','2296,2429','0','2435','','0','0','511825','');
INSERT INTO `web_area` VALUES('2436','芦山县','','2429','2296,2429','0','2436','','0','0','511826','');
INSERT INTO `web_area` VALUES('2437','宝兴县','','2429','2296,2429','0','2437','','0','0','511827','');
INSERT INTO `web_area` VALUES('2438','巴中市','','2296','2296','1','2439,2440,2441,2442','','0','0','511900','bazhong');
INSERT INTO `web_area` VALUES('2439','巴州区','','2438','2296,2438','0','2439','','0','0','511902','');
INSERT INTO `web_area` VALUES('2440','通江县','','2438','2296,2438','0','2440','','0','0','511921','');
INSERT INTO `web_area` VALUES('2441','南江县','','2438','2296,2438','0','2441','','0','0','511922','');
INSERT INTO `web_area` VALUES('2442','平昌县','','2438','2296,2438','0','2442','','0','0','511923','');
INSERT INTO `web_area` VALUES('2443','资阳市','','2296','2296','1','2444,2445,2446,2447','','0','0','512000','ziyang');
INSERT INTO `web_area` VALUES('2444','雁江区','','2443','2296,2443','0','2444','','0','0','512002','');
INSERT INTO `web_area` VALUES('2445','安岳县','','2443','2296,2443','0','2445','','0','0','512021','');
INSERT INTO `web_area` VALUES('2446','乐至县','','2443','2296,2443','0','2446','','0','0','512022','');
INSERT INTO `web_area` VALUES('2447','简阳市','','2443','2296,2443','0','2447','','0','0','512081','');
INSERT INTO `web_area` VALUES('2448','阿坝','','2296','2296','1','2449,2450,2451,2452,2453,2454,2455,2456,2457,2458,2459,2460,2461','','0','0','513200','aba');
INSERT INTO `web_area` VALUES('2449','汶川县','','2448','2296,2448','0','2449','','0','0','513221','');
INSERT INTO `web_area` VALUES('2450','理县','','2448','2296,2448','0','2450','','0','0','513222','');
INSERT INTO `web_area` VALUES('2451','茂县','','2448','2296,2448','0','2451','','0','0','513223','');
INSERT INTO `web_area` VALUES('2452','松潘县','','2448','2296,2448','0','2452','','0','0','513224','');
INSERT INTO `web_area` VALUES('2453','九寨沟县','','2448','2296,2448','0','2453','','0','0','513225','');
INSERT INTO `web_area` VALUES('2454','金川县','','2448','2296,2448','0','2454','','0','0','513226','');
INSERT INTO `web_area` VALUES('2455','小金县','','2448','2296,2448','0','2455','','0','0','513227','');
INSERT INTO `web_area` VALUES('2456','黑水县','','2448','2296,2448','0','2456','','0','0','513228','');
INSERT INTO `web_area` VALUES('2457','马尔康县','','2448','2296,2448','0','2457','','0','0','513229','');
INSERT INTO `web_area` VALUES('2458','壤塘县','','2448','2296,2448','0','2458','','0','0','513230','');
INSERT INTO `web_area` VALUES('2459','阿坝县','','2448','2296,2448','0','2459','','0','0','513231','');
INSERT INTO `web_area` VALUES('2460','若尔盖县','','2448','2296,2448','0','2460','','0','0','513232','');
INSERT INTO `web_area` VALUES('2461','红原县','','2448','2296,2448','0','2461','','0','0','513233','');
INSERT INTO `web_area` VALUES('2462','甘孜','','2296','2296','1','2463,2464,2465,2466,2467,2468,2469,2470,2471,2472,2473,2474,2475,2476,2477,2478,2479,2480','','0','0','513300','ganzi');
INSERT INTO `web_area` VALUES('2463','康定县','','2462','2296,2462','0','2463','','0','0','513321','');
INSERT INTO `web_area` VALUES('2464','泸定县','','2462','2296,2462','0','2464','','0','0','513322','');
INSERT INTO `web_area` VALUES('2465','丹巴县','','2462','2296,2462','0','2465','','0','0','513323','');
INSERT INTO `web_area` VALUES('2466','九龙县','','2462','2296,2462','0','2466','','0','0','513324','');
INSERT INTO `web_area` VALUES('2467','雅江县','','2462','2296,2462','0','2467','','0','0','513325','');
INSERT INTO `web_area` VALUES('2468','道孚县','','2462','2296,2462','0','2468','','0','0','513326','');
INSERT INTO `web_area` VALUES('2469','炉霍县','','2462','2296,2462','0','2469','','0','0','513327','');
INSERT INTO `web_area` VALUES('2470','甘孜县','','2462','2296,2462','0','2470','','0','0','513328','');
INSERT INTO `web_area` VALUES('2471','新龙县','','2462','2296,2462','0','2471','','0','0','513329','');
INSERT INTO `web_area` VALUES('2472','德格县','','2462','2296,2462','0','2472','','0','0','513330','');
INSERT INTO `web_area` VALUES('2473','白玉县','','2462','2296,2462','0','2473','','0','0','513331','');
INSERT INTO `web_area` VALUES('2474','石渠县','','2462','2296,2462','0','2474','','0','0','513332','');
INSERT INTO `web_area` VALUES('2475','色达县','','2462','2296,2462','0','2475','','0','0','513333','');
INSERT INTO `web_area` VALUES('2476','理塘县','','2462','2296,2462','0','2476','','0','0','513334','');
INSERT INTO `web_area` VALUES('2477','巴塘县','','2462','2296,2462','0','2477','','0','0','513335','');
INSERT INTO `web_area` VALUES('2478','乡城县','','2462','2296,2462','0','2478','','0','0','513336','');
INSERT INTO `web_area` VALUES('2479','稻城县','','2462','2296,2462','0','2479','','0','0','513337','');
INSERT INTO `web_area` VALUES('2480','得荣县','','2462','2296,2462','0','2480','','0','0','513338','');
INSERT INTO `web_area` VALUES('2481','凉山','','2296','2296','1','2482,2483,2484,2485,2486,2487,2488,2489,2490,2491,2492,2493,2494,2495,2496,2497,2498','','0','0','513400','liangshan');
INSERT INTO `web_area` VALUES('2482','西昌市','','2481','2296,2481','0','2482','','0','0','513401','');
INSERT INTO `web_area` VALUES('2483','木里藏族自治县','','2481','2296,2481','0','2483','','0','0','513422','');
INSERT INTO `web_area` VALUES('2484','盐源县','','2481','2296,2481','0','2484','','0','0','513423','');
INSERT INTO `web_area` VALUES('2485','德昌县','','2481','2296,2481','0','2485','','0','0','513424','');
INSERT INTO `web_area` VALUES('2486','会理县','','2481','2296,2481','0','2486','','0','0','513425','');
INSERT INTO `web_area` VALUES('2487','会东县','','2481','2296,2481','0','2487','','0','0','513426','');
INSERT INTO `web_area` VALUES('2488','宁南县','','2481','2296,2481','0','2488','','0','0','513427','');
INSERT INTO `web_area` VALUES('2489','普格县','','2481','2296,2481','0','2489','','0','0','513428','');
INSERT INTO `web_area` VALUES('2490','布拖县','','2481','2296,2481','0','2490','','0','0','513429','');
INSERT INTO `web_area` VALUES('2491','金阳县','','2481','2296,2481','0','2491','','0','0','513430','');
INSERT INTO `web_area` VALUES('2492','昭觉县','','2481','2296,2481','0','2492','','0','0','513431','');
INSERT INTO `web_area` VALUES('2493','喜德县','','2481','2296,2481','0','2493','','0','0','513432','');
INSERT INTO `web_area` VALUES('2494','冕宁县','','2481','2296,2481','0','2494','','0','0','513433','');
INSERT INTO `web_area` VALUES('2495','越西县','','2481','2296,2481','0','2495','','0','0','513434','');
INSERT INTO `web_area` VALUES('2496','甘洛县','','2481','2296,2481','0','2496','','0','0','513435','');
INSERT INTO `web_area` VALUES('2497','美姑县','','2481','2296,2481','0','2497','','0','0','513436','');
INSERT INTO `web_area` VALUES('2498','雷波县','','2481','2296,2481','0','2498','','0','0','513437','');
INSERT INTO `web_area` VALUES('2499','贵州','','0','0','1','2500,2511,2516,2531,2538,2549,2558,2567,2584,2501,2502,2503,2504,2505,2506,2507,2508,2509,2510','','23','0','520000','guizhou');
INSERT INTO `web_area` VALUES('2500','贵阳市','','2499','2499','1','2501,2502,2503,2504,2505,2506,2507,2508,2509,2510','','0','0','520100','guiyang');
INSERT INTO `web_area` VALUES('2501','南明区','','2500','2499,2500','0','2501','','0','0','520102','');
INSERT INTO `web_area` VALUES('2502','云岩区','','2500','2499,2500','0','2502','','0','0','520103','');
INSERT INTO `web_area` VALUES('2503','花溪区','','2500','2499,2500','0','2503','','0','0','520111','');
INSERT INTO `web_area` VALUES('2504','乌当区','','2500','2499,2500','0','2504','','0','0','520112','');
INSERT INTO `web_area` VALUES('2505','白云区','','2500','2499,2500','0','2505','','0','0','520113','');
INSERT INTO `web_area` VALUES('2506','小河区','','2500','2499,2500','0','2506','','0','0','520114','');
INSERT INTO `web_area` VALUES('2507','开阳县','','2500','2499,2500','0','2507','','0','0','520121','');
INSERT INTO `web_area` VALUES('2508','息烽县','','2500','2499,2500','0','2508','','0','0','520122','');
INSERT INTO `web_area` VALUES('2509','修文县','','2500','2499,2500','0','2509','','0','0','520123','');
INSERT INTO `web_area` VALUES('2510','清镇市','','2500','2499,2500','0','2510','','0','0','520181','');
INSERT INTO `web_area` VALUES('2511','六盘水','','2499','2499','1','2512,2513,2514,2515','','0','0','520200','liupanshui');
INSERT INTO `web_area` VALUES('2512','钟山区','','2511','2499,2511','0','2512','','0','0','520201','');
INSERT INTO `web_area` VALUES('2513','六枝特区','','2511','2499,2511','0','2513','','0','0','520203','');
INSERT INTO `web_area` VALUES('2514','水城县','','2511','2499,2511','0','2514','','0','0','520221','');
INSERT INTO `web_area` VALUES('2515','盘县','','2511','2499,2511','0','2515','','0','0','520222','');
INSERT INTO `web_area` VALUES('2516','遵义市','','2499','2499','1','2517,2518,2519,2520,2521,2522,2523,2524,2525,2526,2527,2528,2529,2530','','0','0','520300','zunyi');
INSERT INTO `web_area` VALUES('2517','红花岗区','','2516','2499,2516','0','2517','','0','0','520302','');
INSERT INTO `web_area` VALUES('2518','汇川区','','2516','2499,2516','0','2518','','0','0','520303','');
INSERT INTO `web_area` VALUES('2519','遵义县','','2516','2499,2516','0','2519','','0','0','520321','');
INSERT INTO `web_area` VALUES('2520','桐梓县','','2516','2499,2516','0','2520','','0','0','520322','');
INSERT INTO `web_area` VALUES('2521','绥阳县','','2516','2499,2516','0','2521','','0','0','520323','');
INSERT INTO `web_area` VALUES('2522','正安县','','2516','2499,2516','0','2522','','0','0','520324','');
INSERT INTO `web_area` VALUES('2523','道真仡佬族苗族自治县','','2516','2499,2516','0','2523','','0','0','520325','');
INSERT INTO `web_area` VALUES('2524','务川仡佬族苗族自治县','','2516','2499,2516','0','2524','','0','0','520326','');
INSERT INTO `web_area` VALUES('2525','凤冈县','','2516','2499,2516','0','2525','','0','0','520327','');
INSERT INTO `web_area` VALUES('2526','湄潭县','','2516','2499,2516','0','2526','','0','0','520328','');
INSERT INTO `web_area` VALUES('2527','余庆县','','2516','2499,2516','0','2527','','0','0','520329','');
INSERT INTO `web_area` VALUES('2528','习水县','','2516','2499,2516','0','2528','','0','0','520330','');
INSERT INTO `web_area` VALUES('2529','赤水市','','2516','2499,2516','0','2529','','0','0','520381','');
INSERT INTO `web_area` VALUES('2530','仁怀市','','2516','2499,2516','0','2530','','0','0','520382','');
INSERT INTO `web_area` VALUES('2531','安顺市','','2499','2499','1','2532,2533,2534,2535,2536,2537','','0','0','520400','anshun');
INSERT INTO `web_area` VALUES('2532','西秀区','','2531','2499,2531','0','2532','','0','0','520402','');
INSERT INTO `web_area` VALUES('2533','平坝县','','2531','2499,2531','0','2533','','0','0','520421','');
INSERT INTO `web_area` VALUES('2534','普定县','','2531','2499,2531','0','2534','','0','0','520422','');
INSERT INTO `web_area` VALUES('2535','镇宁布依族苗族自治县','','2531','2499,2531','0','2535','','0','0','520423','');
INSERT INTO `web_area` VALUES('2536','关岭布依族苗族自治县','','2531','2499,2531','0','2536','','0','0','520424','');
INSERT INTO `web_area` VALUES('2537','紫云苗族布依族自治县','','2531','2499,2531','0','2537','','0','0','520425','');
INSERT INTO `web_area` VALUES('2538','铜仁','','2499','2499','1','2539,2540,2541,2542,2543,2544,2545,2546,2547,2548','','0','0','522200','tongrendi');
INSERT INTO `web_area` VALUES('2539','铜仁市','','2538','2499,2538','0','2539','','0','0','522201','');
INSERT INTO `web_area` VALUES('2540','江口县','','2538','2499,2538','0','2540','','0','0','522222','');
INSERT INTO `web_area` VALUES('2541','玉屏侗族自治县','','2538','2499,2538','0','2541','','0','0','522223','');
INSERT INTO `web_area` VALUES('2542','石阡县','','2538','2499,2538','0','2542','','0','0','522224','');
INSERT INTO `web_area` VALUES('2543','思南县','','2538','2499,2538','0','2543','','0','0','522225','');
INSERT INTO `web_area` VALUES('2544','印江土家族苗族自治县','','2538','2499,2538','0','2544','','0','0','522226','');
INSERT INTO `web_area` VALUES('2545','德江县','','2538','2499,2538','0','2545','','0','0','522227','');
INSERT INTO `web_area` VALUES('2546','沿河土家族自治县','','2538','2499,2538','0','2546','','0','0','522228','');
INSERT INTO `web_area` VALUES('2547','松桃苗族自治县','','2538','2499,2538','0','2547','','0','0','522229','');
INSERT INTO `web_area` VALUES('2548','万山特区','','2538','2499,2538','0','2548','','0','0','522230','');
INSERT INTO `web_area` VALUES('2549','黔西南','','2499','2499','1','2550,2551,2552,2553,2554,2555,2556,2557','','0','0','522300','qianxinan');
INSERT INTO `web_area` VALUES('2550','兴义市','','2549','2499,2549','0','2550','','0','0','522301','');
INSERT INTO `web_area` VALUES('2551','兴仁县','','2549','2499,2549','0','2551','','0','0','522322','');
INSERT INTO `web_area` VALUES('2552','普安县','','2549','2499,2549','0','2552','','0','0','522323','');
INSERT INTO `web_area` VALUES('2553','晴隆县','','2549','2499,2549','0','2553','','0','0','522324','');
INSERT INTO `web_area` VALUES('2554','贞丰县','','2549','2499,2549','0','2554','','0','0','522325','');
INSERT INTO `web_area` VALUES('2555','望谟县','','2549','2499,2549','0','2555','','0','0','522326','');
INSERT INTO `web_area` VALUES('2556','册亨县','','2549','2499,2549','0','2556','','0','0','522327','');
INSERT INTO `web_area` VALUES('2557','安龙县','','2549','2499,2549','0','2557','','0','0','522328','');
INSERT INTO `web_area` VALUES('2558','毕节','','2499','2499','1','2559,2560,2561,2562,2563,2564,2565,2566','','0','0','522400','bijiedi');
INSERT INTO `web_area` VALUES('2559','毕节市','','2558','2499,2558','0','2559','','0','0','522401','');
INSERT INTO `web_area` VALUES('2560','大方县','','2558','2499,2558','0','2560','','0','0','522422','');
INSERT INTO `web_area` VALUES('2561','黔西县','','2558','2499,2558','0','2561','','0','0','522423','');
INSERT INTO `web_area` VALUES('2562','金沙县','','2558','2499,2558','0','2562','','0','0','522424','');
INSERT INTO `web_area` VALUES('2563','织金县','','2558','2499,2558','0','2563','','0','0','522425','');
INSERT INTO `web_area` VALUES('2564','纳雍县','','2558','2499,2558','0','2564','','0','0','522426','');
INSERT INTO `web_area` VALUES('2565','威宁彝族回族苗族自治县','','2558','2499,2558','0','2565','','0','0','522427','');
INSERT INTO `web_area` VALUES('2566','赫章县','','2558','2499,2558','0','2566','','0','0','522428','');
INSERT INTO `web_area` VALUES('2567','黔东南','','2499','2499','1','2568,2569,2570,2571,2572,2573,2574,2575,2576,2577,2578,2579,2580,2581,2582,2583','','0','0','522600','qiandongnan');
INSERT INTO `web_area` VALUES('2568','凯里市','','2567','2499,2567','0','2568','','0','0','522601','');
INSERT INTO `web_area` VALUES('2569','黄平县','','2567','2499,2567','0','2569','','0','0','522622','');
INSERT INTO `web_area` VALUES('2570','施秉县','','2567','2499,2567','0','2570','','0','0','522623','');
INSERT INTO `web_area` VALUES('2571','三穗县','','2567','2499,2567','0','2571','','0','0','522624','');
INSERT INTO `web_area` VALUES('2572','镇远县','','2567','2499,2567','0','2572','','0','0','522625','');
INSERT INTO `web_area` VALUES('2573','岑巩县','','2567','2499,2567','0','2573','','0','0','522626','');
INSERT INTO `web_area` VALUES('2574','天柱县','','2567','2499,2567','0','2574','','0','0','522627','');
INSERT INTO `web_area` VALUES('2575','锦屏县','','2567','2499,2567','0','2575','','0','0','522628','');
INSERT INTO `web_area` VALUES('2576','剑河县','','2567','2499,2567','0','2576','','0','0','522629','');
INSERT INTO `web_area` VALUES('2577','台江县','','2567','2499,2567','0','2577','','0','0','522630','');
INSERT INTO `web_area` VALUES('2578','黎平县','','2567','2499,2567','0','2578','','0','0','522631','');
INSERT INTO `web_area` VALUES('2579','榕江县','','2567','2499,2567','0','2579','','0','0','522632','');
INSERT INTO `web_area` VALUES('2580','从江县','','2567','2499,2567','0','2580','','0','0','522633','');
INSERT INTO `web_area` VALUES('2581','雷山县','','2567','2499,2567','0','2581','','0','0','522634','');
INSERT INTO `web_area` VALUES('2582','麻江县','','2567','2499,2567','0','2582','','0','0','522635','');
INSERT INTO `web_area` VALUES('2583','丹寨县','','2567','2499,2567','0','2583','','0','0','522636','');
INSERT INTO `web_area` VALUES('2584','黔南','','2499','2499','1','2585,2586,2587,2588,2589,2590,2591,2592,2593,2594,2595,2596','','0','0','522700','qiannan');
INSERT INTO `web_area` VALUES('2585','都匀市','','2584','2499,2584','0','2585','','0','0','522701','');
INSERT INTO `web_area` VALUES('2586','福泉市','','2584','2499,2584','0','2586','','0','0','522702','');
INSERT INTO `web_area` VALUES('2587','荔波县','','2584','2499,2584','0','2587','','0','0','522722','');
INSERT INTO `web_area` VALUES('2588','贵定县','','2584','2499,2584','0','2588','','0','0','522723','');
INSERT INTO `web_area` VALUES('2589','瓮安县','','2584','2499,2584','0','2589','','0','0','522725','');
INSERT INTO `web_area` VALUES('2590','独山县','','2584','2499,2584','0','2590','','0','0','522726','');
INSERT INTO `web_area` VALUES('2591','平塘县','','2584','2499,2584','0','2591','','0','0','522727','');
INSERT INTO `web_area` VALUES('2592','罗甸县','','2584','2499,2584','0','2592','','0','0','522728','');
INSERT INTO `web_area` VALUES('2593','长顺县','','2584','2499,2584','0','2593','','0','0','522729','');
INSERT INTO `web_area` VALUES('2594','龙里县','','2584','2499,2584','0','2594','','0','0','522730','');
INSERT INTO `web_area` VALUES('2595','惠水县','','2584','2499,2584','0','2595','','0','0','522731','');
INSERT INTO `web_area` VALUES('2596','三都水族自治县','','2584','2499,2584','0','2596','','0','0','522732','');
INSERT INTO `web_area` VALUES('2597','云南','','0','0','1','2598,2613,2623,2633,2639,2651,2657,2668,2677,2688,2702,2711,2715,2728,2734,2739,2599,2600,2601,2602,2603,2604,2605,2606,2607,2608,2609,2610,2611,2612','','21','0','530000','yunnan');
INSERT INTO `web_area` VALUES('2598','昆明市','','2597','2597','1','2599,2600,2601,2602,2603,2604,2605,2606,2607,2608,2609,2610,2611,2612','','0','0','530100','kunming');
INSERT INTO `web_area` VALUES('2599','五华区','','2598','2597,2598','0','2599','','0','0','530102','');
INSERT INTO `web_area` VALUES('2600','盘龙区','','2598','2597,2598','0','2600','','0','0','530103','');
INSERT INTO `web_area` VALUES('2601','官渡区','','2598','2597,2598','0','2601','','0','0','530111','');
INSERT INTO `web_area` VALUES('2602','西山区','','2598','2597,2598','0','2602','','0','0','530112','');
INSERT INTO `web_area` VALUES('2603','东川区','','2598','2597,2598','0','2603','','0','0','530113','');
INSERT INTO `web_area` VALUES('2604','呈贡县','','2598','2597,2598','0','2604','','0','0','530121','');
INSERT INTO `web_area` VALUES('2605','晋宁县','','2598','2597,2598','0','2605','','0','0','530122','');
INSERT INTO `web_area` VALUES('2606','富民县','','2598','2597,2598','0','2606','','0','0','530124','');
INSERT INTO `web_area` VALUES('2607','宜良县','','2598','2597,2598','0','2607','','0','0','530125','');
INSERT INTO `web_area` VALUES('2608','石林彝族自治县','','2598','2597,2598','0','2608','','0','0','530126','');
INSERT INTO `web_area` VALUES('2609','嵩明县','','2598','2597,2598','0','2609','','0','0','530127','');
INSERT INTO `web_area` VALUES('2610','禄劝彝族苗族自治县','','2598','2597,2598','0','2610','','0','0','530128','');
INSERT INTO `web_area` VALUES('2611','寻甸回族彝族自治县','','2598','2597,2598','0','2611','','0','0','530129','');
INSERT INTO `web_area` VALUES('2612','安宁市','','2598','2597,2598','0','2612','','0','0','530181','');
INSERT INTO `web_area` VALUES('2613','曲靖市','','2597','2597','1','2614,2615,2616,2617,2618,2619,2620,2621,2622','','0','0','530300','qujing');
INSERT INTO `web_area` VALUES('2614','麒麟区','','2613','2597,2613','0','2614','','0','0','530302','');
INSERT INTO `web_area` VALUES('2615','马龙县','','2613','2597,2613','0','2615','','0','0','530321','');
INSERT INTO `web_area` VALUES('2616','陆良县','','2613','2597,2613','0','2616','','0','0','530322','');
INSERT INTO `web_area` VALUES('2617','师宗县','','2613','2597,2613','0','2617','','0','0','530323','');
INSERT INTO `web_area` VALUES('2618','罗平县','','2613','2597,2613','0','2618','','0','0','530324','');
INSERT INTO `web_area` VALUES('2619','富源县','','2613','2597,2613','0','2619','','0','0','530325','');
INSERT INTO `web_area` VALUES('2620','会泽县','','2613','2597,2613','0','2620','','0','0','530326','');
INSERT INTO `web_area` VALUES('2621','沾益县','','2613','2597,2613','0','2621','','0','0','530328','');
INSERT INTO `web_area` VALUES('2622','宣威市','','2613','2597,2613','0','2622','','0','0','530381','');
INSERT INTO `web_area` VALUES('2623','玉溪市','','2597','2597','1','2624,2625,2626,2627,2628,2629,2630,2631,2632','','0','0','530400','yuxi');
INSERT INTO `web_area` VALUES('2624','红塔区','','2623','2597,2623','0','2624','','0','0','530402','');
INSERT INTO `web_area` VALUES('2625','江川县','','2623','2597,2623','0','2625','','0','0','530421','');
INSERT INTO `web_area` VALUES('2626','澄江县','','2623','2597,2623','0','2626','','0','0','530422','');
INSERT INTO `web_area` VALUES('2627','通海县','','2623','2597,2623','0','2627','','0','0','530423','');
INSERT INTO `web_area` VALUES('2628','华宁县','','2623','2597,2623','0','2628','','0','0','530424','');
INSERT INTO `web_area` VALUES('2629','易门县','','2623','2597,2623','0','2629','','0','0','530425','');
INSERT INTO `web_area` VALUES('2630','峨山彝族自治县','','2623','2597,2623','0','2630','','0','0','530426','');
INSERT INTO `web_area` VALUES('2631','新平彝族傣族自治县','','2623','2597,2623','0','2631','','0','0','530427','');
INSERT INTO `web_area` VALUES('2632','元江哈尼族彝族傣族自治县','','2623','2597,2623','0','2632','','0','0','530428','');
INSERT INTO `web_area` VALUES('2633','保山市','','2597','2597','1','2634,2635,2636,2637,2638','','0','0','530500','baoshan');
INSERT INTO `web_area` VALUES('2634','隆阳区','','2633','2597,2633','0','2634','','0','0','530502','');
INSERT INTO `web_area` VALUES('2635','施甸县','','2633','2597,2633','0','2635','','0','0','530521','');
INSERT INTO `web_area` VALUES('2636','腾冲县','','2633','2597,2633','0','2636','','0','0','530522','');
INSERT INTO `web_area` VALUES('2637','龙陵县','','2633','2597,2633','0','2637','','0','0','530523','');
INSERT INTO `web_area` VALUES('2638','昌宁县','','2633','2597,2633','0','2638','','0','0','530524','');
INSERT INTO `web_area` VALUES('2639','昭通市','','2597','2597','1','2640,2641,2642,2643,2644,2645,2646,2647,2648,2649,2650','','0','0','530600','zhaotong');
INSERT INTO `web_area` VALUES('2640','昭阳区','','2639','2597,2639','0','2640','','0','0','530602','');
INSERT INTO `web_area` VALUES('2641','鲁甸县','','2639','2597,2639','0','2641','','0','0','530621','');
INSERT INTO `web_area` VALUES('2642','巧家县','','2639','2597,2639','0','2642','','0','0','530622','');
INSERT INTO `web_area` VALUES('2643','盐津县','','2639','2597,2639','0','2643','','0','0','530623','');
INSERT INTO `web_area` VALUES('2644','大关县','','2639','2597,2639','0','2644','','0','0','530624','');
INSERT INTO `web_area` VALUES('2645','永善县','','2639','2597,2639','0','2645','','0','0','530625','');
INSERT INTO `web_area` VALUES('2646','绥江县','','2639','2597,2639','0','2646','','0','0','530626','');
INSERT INTO `web_area` VALUES('2647','镇雄县','','2639','2597,2639','0','2647','','0','0','530627','');
INSERT INTO `web_area` VALUES('2648','彝良县','','2639','2597,2639','0','2648','','0','0','530628','');
INSERT INTO `web_area` VALUES('2649','威信县','','2639','2597,2639','0','2649','','0','0','530629','');
INSERT INTO `web_area` VALUES('2650','水富县','','2639','2597,2639','0','2650','','0','0','530630','');
INSERT INTO `web_area` VALUES('2651','丽江市','','2597','2597','1','2652,2653,2654,2655,2656','','0','0','530700','lijiang');
INSERT INTO `web_area` VALUES('2652','古城区','','2651','2597,2651','0','2652','','0','0','530702','');
INSERT INTO `web_area` VALUES('2653','玉龙纳西族自治县','','2651','2597,2651','0','2653','','0','0','530721','');
INSERT INTO `web_area` VALUES('2654','永胜县','','2651','2597,2651','0','2654','','0','0','530722','');
INSERT INTO `web_area` VALUES('2655','华坪县','','2651','2597,2651','0','2655','','0','0','530723','');
INSERT INTO `web_area` VALUES('2656','宁蒗彝族自治县','','2651','2597,2651','0','2656','','0','0','530724','');
INSERT INTO `web_area` VALUES('2657','普洱市','','2597','2597','1','2658,2659,2660,2661,2662,2663,2664,2665,2666,2667','','0','0','530800','puer');
INSERT INTO `web_area` VALUES('2658','思茅区','','2657','2597,2657','0','2658','','0','0','530802','');
INSERT INTO `web_area` VALUES('2659','宁洱哈尼族彝族自治县','','2657','2597,2657','0','2659','','0','0','530821','');
INSERT INTO `web_area` VALUES('2660','墨江哈尼族自治县','','2657','2597,2657','0','2660','','0','0','530822','');
INSERT INTO `web_area` VALUES('2661','景东彝族自治县','','2657','2597,2657','0','2661','','0','0','530823','');
INSERT INTO `web_area` VALUES('2662','景谷傣族彝族自治县','','2657','2597,2657','0','2662','','0','0','530824','');
INSERT INTO `web_area` VALUES('2663','镇沅彝族哈尼族拉祜族自治县','','2657','2597,2657','0','2663','','0','0','530825','');
INSERT INTO `web_area` VALUES('2664','江城哈尼族彝族自治县','','2657','2597,2657','0','2664','','0','0','530826','');
INSERT INTO `web_area` VALUES('2665','孟连傣族拉祜族佤族自治县','','2657','2597,2657','0','2665','','0','0','530827','');
INSERT INTO `web_area` VALUES('2666','澜沧拉祜族自治县','','2657','2597,2657','0','2666','','0','0','530828','');
INSERT INTO `web_area` VALUES('2667','西盟佤族自治县','','2657','2597,2657','0','2667','','0','0','530829','');
INSERT INTO `web_area` VALUES('2668','临沧市','','2597','2597','1','2669,2670,2671,2672,2673,2674,2675,2676','','0','0','530900','lincang');
INSERT INTO `web_area` VALUES('2669','临翔区','','2668','2597,2668','0','2669','','0','0','530902','');
INSERT INTO `web_area` VALUES('2670','凤庆县','','2668','2597,2668','0','2670','','0','0','530921','');
INSERT INTO `web_area` VALUES('2671','云县','','2668','2597,2668','0','2671','','0','0','530922','');
INSERT INTO `web_area` VALUES('2672','永德县','','2668','2597,2668','0','2672','','0','0','530923','');
INSERT INTO `web_area` VALUES('2673','镇康县','','2668','2597,2668','0','2673','','0','0','530924','');
INSERT INTO `web_area` VALUES('2674','双江拉祜族佤族布朗族傣族自治县','','2668','2597,2668','0','2674','','0','0','530925','');
INSERT INTO `web_area` VALUES('2675','耿马傣族佤族自治县','','2668','2597,2668','0','2675','','0','0','530926','');
INSERT INTO `web_area` VALUES('2676','沧源佤族自治县','','2668','2597,2668','0','2676','','0','0','530927','');
INSERT INTO `web_area` VALUES('2677','楚雄','','2597','2597','1','2678,2679,2680,2681,2682,2683,2684,2685,2686,2687','','0','0','532300','chuxiong');
INSERT INTO `web_area` VALUES('2678','楚雄市','','2677','2597,2677','0','2678','','0','0','532301','');
INSERT INTO `web_area` VALUES('2679','双柏县','','2677','2597,2677','0','2679','','0','0','532322','');
INSERT INTO `web_area` VALUES('2680','牟定县','','2677','2597,2677','0','2680','','0','0','532323','');
INSERT INTO `web_area` VALUES('2681','南华县','','2677','2597,2677','0','2681','','0','0','532324','');
INSERT INTO `web_area` VALUES('2682','姚安县','','2677','2597,2677','0','2682','','0','0','532325','');
INSERT INTO `web_area` VALUES('2683','大姚县','','2677','2597,2677','0','2683','','0','0','532326','');
INSERT INTO `web_area` VALUES('2684','永仁县','','2677','2597,2677','0','2684','','0','0','532327','');
INSERT INTO `web_area` VALUES('2685','元谋县','','2677','2597,2677','0','2685','','0','0','532328','');
INSERT INTO `web_area` VALUES('2686','武定县','','2677','2597,2677','0','2686','','0','0','532329','');
INSERT INTO `web_area` VALUES('2687','禄丰县','','2677','2597,2677','0','2687','','0','0','532331','');
INSERT INTO `web_area` VALUES('2688','红河','','2597','2597','1','2689,2690,2691,2692,2693,2694,2695,2696,2697,2698,2699,2700,2701','','0','0','532500','honghe');
INSERT INTO `web_area` VALUES('2689','个旧市','','2688','2597,2688','0','2689','','0','0','532501','');
INSERT INTO `web_area` VALUES('2690','开远市','','2688','2597,2688','0','2690','','0','0','532502','');
INSERT INTO `web_area` VALUES('2691','蒙自市','','2688','2597,2688','0','2691','','0','0','532503','');
INSERT INTO `web_area` VALUES('2692','屏边苗族自治县','','2688','2597,2688','0','2692','','0','0','532523','');
INSERT INTO `web_area` VALUES('2693','建水县','','2688','2597,2688','0','2693','','0','0','532524','');
INSERT INTO `web_area` VALUES('2694','石屏县','','2688','2597,2688','0','2694','','0','0','532525','');
INSERT INTO `web_area` VALUES('2695','弥勒县','','2688','2597,2688','0','2695','','0','0','532526','');
INSERT INTO `web_area` VALUES('2696','泸西县','','2688','2597,2688','0','2696','','0','0','532527','');
INSERT INTO `web_area` VALUES('2697','元阳县','','2688','2597,2688','0','2697','','0','0','532528','');
INSERT INTO `web_area` VALUES('2698','红河县','','2688','2597,2688','0','2698','','0','0','532529','');
INSERT INTO `web_area` VALUES('2699','金平苗族瑶族傣族自治县','','2688','2597,2688','0','2699','','0','0','532530','');
INSERT INTO `web_area` VALUES('2700','绿春县','','2688','2597,2688','0','2700','','0','0','532531','');
INSERT INTO `web_area` VALUES('2701','河口瑶族自治县','','2688','2597,2688','0','2701','','0','0','532532','');
INSERT INTO `web_area` VALUES('2702','文山','','2597','2597','1','2703,2704,2705,2706,2707,2708,2709,2710','','0','0','532600','wenshan');
INSERT INTO `web_area` VALUES('2703','文山县','','2702','2597,2702','0','2703','','0','0','532621','');
INSERT INTO `web_area` VALUES('2704','砚山县','','2702','2597,2702','0','2704','','0','0','532622','');
INSERT INTO `web_area` VALUES('2705','西畴县','','2702','2597,2702','0','2705','','0','0','532623','');
INSERT INTO `web_area` VALUES('2706','麻栗坡县','','2702','2597,2702','0','2706','','0','0','532624','');
INSERT INTO `web_area` VALUES('2707','马关县','','2702','2597,2702','0','2707','','0','0','532625','');
INSERT INTO `web_area` VALUES('2708','丘北县','','2702','2597,2702','0','2708','','0','0','532626','');
INSERT INTO `web_area` VALUES('2709','广南县','','2702','2597,2702','0','2709','','0','0','532627','');
INSERT INTO `web_area` VALUES('2710','富宁县','','2702','2597,2702','0','2710','','0','0','532628','');
INSERT INTO `web_area` VALUES('2711','西双版纳','','2597','2597','1','2712,2713,2714','','0','0','532800','xishuangbanna');
INSERT INTO `web_area` VALUES('2712','景洪市','','2711','2597,2711','0','2712','','0','0','532801','');
INSERT INTO `web_area` VALUES('2713','勐海县','','2711','2597,2711','0','2713','','0','0','532822','');
INSERT INTO `web_area` VALUES('2714','勐腊县','','2711','2597,2711','0','2714','','0','0','532823','');
INSERT INTO `web_area` VALUES('2715','大理','','2597','2597','1','2716,2717,2718,2719,2720,2721,2722,2723,2724,2725,2726,2727','','0','0','532900','dalizizhizhou');
INSERT INTO `web_area` VALUES('2716','大理市','','2715','2597,2715','0','2716','','0','0','532901','');
INSERT INTO `web_area` VALUES('2717','漾濞彝族自治县','','2715','2597,2715','0','2717','','0','0','532922','');
INSERT INTO `web_area` VALUES('2718','祥云县','','2715','2597,2715','0','2718','','0','0','532923','');
INSERT INTO `web_area` VALUES('2719','宾川县','','2715','2597,2715','0','2719','','0','0','532924','');
INSERT INTO `web_area` VALUES('2720','弥渡县','','2715','2597,2715','0','2720','','0','0','532925','');
INSERT INTO `web_area` VALUES('2721','南涧彝族自治县','','2715','2597,2715','0','2721','','0','0','532926','');
INSERT INTO `web_area` VALUES('2722','巍山彝族回族自治县','','2715','2597,2715','0','2722','','0','0','532927','');
INSERT INTO `web_area` VALUES('2723','永平县','','2715','2597,2715','0','2723','','0','0','532928','');
INSERT INTO `web_area` VALUES('2724','云龙县','','2715','2597,2715','0','2724','','0','0','532929','');
INSERT INTO `web_area` VALUES('2725','洱源县','','2715','2597,2715','0','2725','','0','0','532930','');
INSERT INTO `web_area` VALUES('2726','剑川县','','2715','2597,2715','0','2726','','0','0','532931','');
INSERT INTO `web_area` VALUES('2727','鹤庆县','','2715','2597,2715','0','2727','','0','0','532932','');
INSERT INTO `web_area` VALUES('2728','德宏','','2597','2597','1','2729,2730,2731,2732,2733','','0','0','533100','dehong');
INSERT INTO `web_area` VALUES('2729','瑞丽市','','2728','2597,2728','0','2729','','0','0','533102','');
INSERT INTO `web_area` VALUES('2730','芒市','','2728','2597,2728','0','2730','','0','0','533103','');
INSERT INTO `web_area` VALUES('2731','梁河县','','2728','2597,2728','0','2731','','0','0','533122','');
INSERT INTO `web_area` VALUES('2732','盈江县','','2728','2597,2728','0','2732','','0','0','533123','');
INSERT INTO `web_area` VALUES('2733','陇川县','','2728','2597,2728','0','2733','','0','0','533124','');
INSERT INTO `web_area` VALUES('2734','怒江','','2597','2597','1','2735,2736,2737,2738','','0','0','533300','nujiang');
INSERT INTO `web_area` VALUES('2735','泸水县','','2734','2597,2734','0','2735','','0','0','533321','');
INSERT INTO `web_area` VALUES('2736','福贡县','','2734','2597,2734','0','2736','','0','0','533323','');
INSERT INTO `web_area` VALUES('2737','贡山独龙族怒族自治县','','2734','2597,2734','0','2737','','0','0','533324','');
INSERT INTO `web_area` VALUES('2738','兰坪白族普米族自治县','','2734','2597,2734','0','2738','','0','0','533325','');
INSERT INTO `web_area` VALUES('2739','迪庆','','2597','2597','1','2740,2741,2742','','0','0','533400','diqing');
INSERT INTO `web_area` VALUES('2740','香格里拉县','','2739','2597,2739','0','2740','','0','0','533421','');
INSERT INTO `web_area` VALUES('2741','德钦县','','2739','2597,2739','0','2741','','0','0','533422','');
INSERT INTO `web_area` VALUES('2742','维西傈僳族自治县','','2739','2597,2739','0','2742','','0','0','533423','');
INSERT INTO `web_area` VALUES('2743','西藏','','0','0','1','2744,2753,2765,2778,2797,2808,2816,2745,2746,2747,2748,2749,2750,2751,2752','','29','0','540000','xizang');
INSERT INTO `web_area` VALUES('2744','拉萨市','','2743','2743','1','2745,2746,2747,2748,2749,2750,2751,2752','','0','0','540100','lasa');
INSERT INTO `web_area` VALUES('2745','城关区','','2744','2743,2744','0','2745','','0','0','540102','');
INSERT INTO `web_area` VALUES('2746','林周县','','2744','2743,2744','0','2746','','0','0','540121','');
INSERT INTO `web_area` VALUES('2747','当雄县','','2744','2743,2744','0','2747','','0','0','540122','');
INSERT INTO `web_area` VALUES('2748','尼木县','','2744','2743,2744','0','2748','','0','0','540123','');
INSERT INTO `web_area` VALUES('2749','曲水县','','2744','2743,2744','0','2749','','0','0','540124','');
INSERT INTO `web_area` VALUES('2750','堆龙德庆县','','2744','2743,2744','0','2750','','0','0','540125','');
INSERT INTO `web_area` VALUES('2751','达孜县','','2744','2743,2744','0','2751','','0','0','540126','');
INSERT INTO `web_area` VALUES('2752','墨竹工卡县','','2744','2743,2744','0','2752','','0','0','540127','');
INSERT INTO `web_area` VALUES('2753','昌都','','2743','2743','1','2754,2755,2756,2757,2758,2759,2760,2761,2762,2763,2764','','0','0','542100','changdudi');
INSERT INTO `web_area` VALUES('2754','昌都县','','2753','2743,2753','0','2754','','0','0','542121','');
INSERT INTO `web_area` VALUES('2755','江达县','','2753','2743,2753','0','2755','','0','0','542122','');
INSERT INTO `web_area` VALUES('2756','贡觉县','','2753','2743,2753','0','2756','','0','0','542123','');
INSERT INTO `web_area` VALUES('2757','类乌齐县','','2753','2743,2753','0','2757','','0','0','542124','');
INSERT INTO `web_area` VALUES('2758','丁青县','','2753','2743,2753','0','2758','','0','0','542125','');
INSERT INTO `web_area` VALUES('2759','察雅县','','2753','2743,2753','0','2759','','0','0','542126','');
INSERT INTO `web_area` VALUES('2760','八宿县','','2753','2743,2753','0','2760','','0','0','542127','');
INSERT INTO `web_area` VALUES('2761','左贡县','','2753','2743,2753','0','2761','','0','0','542128','');
INSERT INTO `web_area` VALUES('2762','芒康县','','2753','2743,2753','0','2762','','0','0','542129','');
INSERT INTO `web_area` VALUES('2763','洛隆县','','2753','2743,2753','0','2763','','0','0','542132','');
INSERT INTO `web_area` VALUES('2764','边坝县','','2753','2743,2753','0','2764','','0','0','542133','');
INSERT INTO `web_area` VALUES('2765','山南','','2743','2743','1','2766,2767,2768,2769,2770,2771,2772,2773,2774,2775,2776,2777','','0','0','542200','shannandi');
INSERT INTO `web_area` VALUES('2766','乃东县','','2765','2743,2765','0','2766','','0','0','542221','');
INSERT INTO `web_area` VALUES('2767','扎囊县','','2765','2743,2765','0','2767','','0','0','542222','');
INSERT INTO `web_area` VALUES('2768','贡嘎县','','2765','2743,2765','0','2768','','0','0','542223','');
INSERT INTO `web_area` VALUES('2769','桑日县','','2765','2743,2765','0','2769','','0','0','542224','');
INSERT INTO `web_area` VALUES('2770','琼结县','','2765','2743,2765','0','2770','','0','0','542225','');
INSERT INTO `web_area` VALUES('2771','曲松县','','2765','2743,2765','0','2771','','0','0','542226','');
INSERT INTO `web_area` VALUES('2772','措美县','','2765','2743,2765','0','2772','','0','0','542227','');
INSERT INTO `web_area` VALUES('2773','洛扎县','','2765','2743,2765','0','2773','','0','0','542228','');
INSERT INTO `web_area` VALUES('2774','加查县','','2765','2743,2765','0','2774','','0','0','542229','');
INSERT INTO `web_area` VALUES('2775','隆子县','','2765','2743,2765','0','2775','','0','0','542231','');
INSERT INTO `web_area` VALUES('2776','错那县','','2765','2743,2765','0','2776','','0','0','542232','');
INSERT INTO `web_area` VALUES('2777','浪卡子县','','2765','2743,2765','0','2777','','0','0','542233','');
INSERT INTO `web_area` VALUES('2778','日喀则','','2743','2743','1','2779,2780,2781,2782,2783,2784,2785,2786,2787,2788,2789,2790,2791,2792,2793,2794,2795,2796','','0','0','542300','rikazedi');
INSERT INTO `web_area` VALUES('2779','日喀则市','','2778','2743,2778','0','2779','','0','0','542301','');
INSERT INTO `web_area` VALUES('2780','南木林县','','2778','2743,2778','0','2780','','0','0','542322','');
INSERT INTO `web_area` VALUES('2781','江孜县','','2778','2743,2778','0','2781','','0','0','542323','');
INSERT INTO `web_area` VALUES('2782','定日县','','2778','2743,2778','0','2782','','0','0','542324','');
INSERT INTO `web_area` VALUES('2783','萨迦县','','2778','2743,2778','0','2783','','0','0','542325','');
INSERT INTO `web_area` VALUES('2784','拉孜县','','2778','2743,2778','0','2784','','0','0','542326','');
INSERT INTO `web_area` VALUES('2785','昂仁县','','2778','2743,2778','0','2785','','0','0','542327','');
INSERT INTO `web_area` VALUES('2786','谢通门县','','2778','2743,2778','0','2786','','0','0','542328','');
INSERT INTO `web_area` VALUES('2787','白朗县','','2778','2743,2778','0','2787','','0','0','542329','');
INSERT INTO `web_area` VALUES('2788','仁布县','','2778','2743,2778','0','2788','','0','0','542330','');
INSERT INTO `web_area` VALUES('2789','康马县','','2778','2743,2778','0','2789','','0','0','542331','');
INSERT INTO `web_area` VALUES('2790','定结县','','2778','2743,2778','0','2790','','0','0','542332','');
INSERT INTO `web_area` VALUES('2791','仲巴县','','2778','2743,2778','0','2791','','0','0','542333','');
INSERT INTO `web_area` VALUES('2792','亚东县','','2778','2743,2778','0','2792','','0','0','542334','');
INSERT INTO `web_area` VALUES('2793','吉隆县','','2778','2743,2778','0','2793','','0','0','542335','');
INSERT INTO `web_area` VALUES('2794','聂拉木县','','2778','2743,2778','0','2794','','0','0','542336','');
INSERT INTO `web_area` VALUES('2795','萨嘎县','','2778','2743,2778','0','2795','','0','0','542337','');
INSERT INTO `web_area` VALUES('2796','岗巴县','','2778','2743,2778','0','2796','','0','0','542338','');
INSERT INTO `web_area` VALUES('2797','那曲','','2743','2743','1','2798,2799,2800,2801,2802,2803,2804,2805,2806,2807','','0','0','542400','naqudi');
INSERT INTO `web_area` VALUES('2798','那曲县','','2797','2743,2797','0','2798','','0','0','542421','');
INSERT INTO `web_area` VALUES('2799','嘉黎县','','2797','2743,2797','0','2799','','0','0','542422','');
INSERT INTO `web_area` VALUES('2800','比如县','','2797','2743,2797','0','2800','','0','0','542423','');
INSERT INTO `web_area` VALUES('2801','聂荣县','','2797','2743,2797','0','2801','','0','0','542424','');
INSERT INTO `web_area` VALUES('2802','安多县','','2797','2743,2797','0','2802','','0','0','542425','');
INSERT INTO `web_area` VALUES('2803','申扎县','','2797','2743,2797','0','2803','','0','0','542426','');
INSERT INTO `web_area` VALUES('2804','索县','','2797','2743,2797','0','2804','','0','0','542427','');
INSERT INTO `web_area` VALUES('2805','班戈县','','2797','2743,2797','0','2805','','0','0','542428','');
INSERT INTO `web_area` VALUES('2806','巴青县','','2797','2743,2797','0','2806','','0','0','542429','');
INSERT INTO `web_area` VALUES('2807','尼玛县','','2797','2743,2797','0','2807','','0','0','542430','');
INSERT INTO `web_area` VALUES('2808','阿里','','2743','2743','1','2809,2810,2811,2812,2813,2814,2815','','0','0','542500','alidi');
INSERT INTO `web_area` VALUES('2809','普兰县','','2808','2743,2808','0','2809','','0','0','542521','');
INSERT INTO `web_area` VALUES('2810','札达县','','2808','2743,2808','0','2810','','0','0','542522','');
INSERT INTO `web_area` VALUES('2811','噶尔县','','2808','2743,2808','0','2811','','0','0','542523','');
INSERT INTO `web_area` VALUES('2812','日土县','','2808','2743,2808','0','2812','','0','0','542524','');
INSERT INTO `web_area` VALUES('2813','革吉县','','2808','2743,2808','0','2813','','0','0','542525','');
INSERT INTO `web_area` VALUES('2814','改则县','','2808','2743,2808','0','2814','','0','0','542526','');
INSERT INTO `web_area` VALUES('2815','措勤县','','2808','2743,2808','0','2815','','0','0','542527','');
INSERT INTO `web_area` VALUES('2816','林芝','','2743','2743','1','2817,2818,2819,2820,2821,2822,2823','','0','0','542600','linzhidi');
INSERT INTO `web_area` VALUES('2817','林芝县','','2816','2743,2816','0','2817','','0','0','542621','');
INSERT INTO `web_area` VALUES('2818','工布江达县','','2816','2743,2816','0','2818','','0','0','542622','');
INSERT INTO `web_area` VALUES('2819','米林县','','2816','2743,2816','0','2819','','0','0','542623','');
INSERT INTO `web_area` VALUES('2820','墨脱县','','2816','2743,2816','0','2820','','0','0','542624','');
INSERT INTO `web_area` VALUES('2821','波密县','','2816','2743,2816','0','2821','','0','0','542625','');
INSERT INTO `web_area` VALUES('2822','察隅县','','2816','2743,2816','0','2822','','0','0','542626','');
INSERT INTO `web_area` VALUES('2823','朗县','','2816','2743,2816','0','2823','','0','0','542627','');
INSERT INTO `web_area` VALUES('2824','陕西','','0','0','1','2825,2839,2844,2857,2872,2884,2898,2910,2923,2934,2826,2827,2828,2829,2830,2831,2832,2833,2834,2835,2836,2837,2838','','20','0','610000','shanxi');
INSERT INTO `web_area` VALUES('2825','西安市','','2824','2824','1','2826,2827,2828,2829,2830,2831,2832,2833,2834,2835,2836,2837,2838','','0','0','610100','xian');
INSERT INTO `web_area` VALUES('2826','新城区','','2825','2824,2825','0','2826','','0','0','610102','');
INSERT INTO `web_area` VALUES('2827','碑林区','','2825','2824,2825','0','2827','','0','0','610103','');
INSERT INTO `web_area` VALUES('2828','莲湖区','','2825','2824,2825','0','2828','','0','0','610104','');
INSERT INTO `web_area` VALUES('2829','灞桥区','','2825','2824,2825','0','2829','','0','0','610111','');
INSERT INTO `web_area` VALUES('2830','未央区','','2825','2824,2825','0','2830','','0','0','610112','');
INSERT INTO `web_area` VALUES('2831','雁塔区','','2825','2824,2825','0','2831','','0','0','610113','');
INSERT INTO `web_area` VALUES('2832','阎良区','','2825','2824,2825','0','2832','','0','0','610114','');
INSERT INTO `web_area` VALUES('2833','临潼区','','2825','2824,2825','0','2833','','0','0','610115','');
INSERT INTO `web_area` VALUES('2834','长安区','','2825','2824,2825','0','2834','','0','0','610116','');
INSERT INTO `web_area` VALUES('2835','蓝田县','','2825','2824,2825','0','2835','','0','0','610122','');
INSERT INTO `web_area` VALUES('2836','周至县','','2825','2824,2825','0','2836','','0','0','610124','');
INSERT INTO `web_area` VALUES('2837','户县','','2825','2824,2825','0','2837','','0','0','610125','');
INSERT INTO `web_area` VALUES('2838','高陵县','','2825','2824,2825','0','2838','','0','0','610126','');
INSERT INTO `web_area` VALUES('2839','铜川市','','2824','2824','1','2840,2841,2842,2843','','0','0','610200','tongchuan');
INSERT INTO `web_area` VALUES('2840','王益区','','2839','2824,2839','0','2840','','0','0','610202','');
INSERT INTO `web_area` VALUES('2841','印台区','','2839','2824,2839','0','2841','','0','0','610203','');
INSERT INTO `web_area` VALUES('2842','耀州区','','2839','2824,2839','0','2842','','0','0','610204','');
INSERT INTO `web_area` VALUES('2843','宜君县','','2839','2824,2839','0','2843','','0','0','610222','');
INSERT INTO `web_area` VALUES('2844','宝鸡市','','2824','2824','1','2845,2846,2847,2848,2849,2850,2851,2852,2853,2854,2855,2856','','0','0','610300','baoji');
INSERT INTO `web_area` VALUES('2845','渭滨区','','2844','2824,2844','0','2845','','0','0','610302','');
INSERT INTO `web_area` VALUES('2846','金台区','','2844','2824,2844','0','2846','','0','0','610303','');
INSERT INTO `web_area` VALUES('2847','陈仓区','','2844','2824,2844','0','2847','','0','0','610304','');
INSERT INTO `web_area` VALUES('2848','凤翔县','','2844','2824,2844','0','2848','','0','0','610322','');
INSERT INTO `web_area` VALUES('2849','岐山县','','2844','2824,2844','0','2849','','0','0','610323','');
INSERT INTO `web_area` VALUES('2850','扶风县','','2844','2824,2844','0','2850','','0','0','610324','');
INSERT INTO `web_area` VALUES('2851','眉县','','2844','2824,2844','0','2851','','0','0','610326','');
INSERT INTO `web_area` VALUES('2852','陇县','','2844','2824,2844','0','2852','','0','0','610327','');
INSERT INTO `web_area` VALUES('2853','千阳县','','2844','2824,2844','0','2853','','0','0','610328','');
INSERT INTO `web_area` VALUES('2854','麟游县','','2844','2824,2844','0','2854','','0','0','610329','');
INSERT INTO `web_area` VALUES('2855','凤县','','2844','2824,2844','0','2855','','0','0','610330','');
INSERT INTO `web_area` VALUES('2856','太白县','','2844','2824,2844','0','2856','','0','0','610331','');
INSERT INTO `web_area` VALUES('2857','咸阳市','','2824','2824','1','2858,2859,2860,2861,2862,2863,2864,2865,2866,2867,2868,2869,2870,2871','','0','0','610400','xianyang');
INSERT INTO `web_area` VALUES('2858','秦都区','','2857','2824,2857','0','2858','','0','0','610402','');
INSERT INTO `web_area` VALUES('2859','杨陵区','','2857','2824,2857','0','2859','','0','0','610403','');
INSERT INTO `web_area` VALUES('2860','渭城区','','2857','2824,2857','0','2860','','0','0','610404','');
INSERT INTO `web_area` VALUES('2861','三原县','','2857','2824,2857','0','2861','','0','0','610422','');
INSERT INTO `web_area` VALUES('2862','泾阳县','','2857','2824,2857','0','2862','','0','0','610423','');
INSERT INTO `web_area` VALUES('2863','乾县','','2857','2824,2857','0','2863','','0','0','610424','');
INSERT INTO `web_area` VALUES('2864','礼泉县','','2857','2824,2857','0','2864','','0','0','610425','');
INSERT INTO `web_area` VALUES('2865','永寿县','','2857','2824,2857','0','2865','','0','0','610426','');
INSERT INTO `web_area` VALUES('2866','彬县','','2857','2824,2857','0','2866','','0','0','610427','');
INSERT INTO `web_area` VALUES('2867','长武县','','2857','2824,2857','0','2867','','0','0','610428','');
INSERT INTO `web_area` VALUES('2868','旬邑县','','2857','2824,2857','0','2868','','0','0','610429','');
INSERT INTO `web_area` VALUES('2869','淳化县','','2857','2824,2857','0','2869','','0','0','610430','');
INSERT INTO `web_area` VALUES('2870','武功县','','2857','2824,2857','0','2870','','0','0','610431','');
INSERT INTO `web_area` VALUES('2871','兴平市','','2857','2824,2857','0','2871','','0','0','610481','');
INSERT INTO `web_area` VALUES('2872','渭南市','','2824','2824','1','2873,2874,2875,2876,2877,2878,2879,2880,2881,2882,2883','','0','0','610500','weinan');
INSERT INTO `web_area` VALUES('2873','临渭区','','2872','2824,2872','0','2873','','0','0','610502','');
INSERT INTO `web_area` VALUES('2874','华县','','2872','2824,2872','0','2874','','0','0','610521','');
INSERT INTO `web_area` VALUES('2875','潼关县','','2872','2824,2872','0','2875','','0','0','610522','');
INSERT INTO `web_area` VALUES('2876','大荔县','','2872','2824,2872','0','2876','','0','0','610523','');
INSERT INTO `web_area` VALUES('2877','合阳县','','2872','2824,2872','0','2877','','0','0','610524','');
INSERT INTO `web_area` VALUES('2878','澄城县','','2872','2824,2872','0','2878','','0','0','610525','');
INSERT INTO `web_area` VALUES('2879','蒲城县','','2872','2824,2872','0','2879','','0','0','610526','');
INSERT INTO `web_area` VALUES('2880','白水县','','2872','2824,2872','0','2880','','0','0','610527','');
INSERT INTO `web_area` VALUES('2881','富平县','','2872','2824,2872','0','2881','','0','0','610528','');
INSERT INTO `web_area` VALUES('2882','韩城市','','2872','2824,2872','0','2882','','0','0','610581','');
INSERT INTO `web_area` VALUES('2883','华阴市','','2872','2824,2872','0','2883','','0','0','610582','');
INSERT INTO `web_area` VALUES('2884','延安市','','2824','2824','1','2885,2886,2887,2888,2889,2890,2891,2892,2893,2894,2895,2896,2897','','0','0','610600','yanan');
INSERT INTO `web_area` VALUES('2885','宝塔区','','2884','2824,2884','0','2885','','0','0','610602','');
INSERT INTO `web_area` VALUES('2886','延长县','','2884','2824,2884','0','2886','','0','0','610621','');
INSERT INTO `web_area` VALUES('2887','延川县','','2884','2824,2884','0','2887','','0','0','610622','');
INSERT INTO `web_area` VALUES('2888','子长县','','2884','2824,2884','0','2888','','0','0','610623','');
INSERT INTO `web_area` VALUES('2889','安塞县','','2884','2824,2884','0','2889','','0','0','610624','');
INSERT INTO `web_area` VALUES('2890','志丹县','','2884','2824,2884','0','2890','','0','0','610625','');
INSERT INTO `web_area` VALUES('2891','吴起县','','2884','2824,2884','0','2891','','0','0','610626','');
INSERT INTO `web_area` VALUES('2892','甘泉县','','2884','2824,2884','0','2892','','0','0','610627','');
INSERT INTO `web_area` VALUES('2893','富县','','2884','2824,2884','0','2893','','0','0','610628','');
INSERT INTO `web_area` VALUES('2894','洛川县','','2884','2824,2884','0','2894','','0','0','610629','');
INSERT INTO `web_area` VALUES('2895','宜川县','','2884','2824,2884','0','2895','','0','0','610630','');
INSERT INTO `web_area` VALUES('2896','黄龙县','','2884','2824,2884','0','2896','','0','0','610631','');
INSERT INTO `web_area` VALUES('2897','黄陵县','','2884','2824,2884','0','2897','','0','0','610632','');
INSERT INTO `web_area` VALUES('2898','汉中市','','2824','2824','1','2899,2900,2901,2902,2903,2904,2905,2906,2907,2908,2909','','0','0','610700','hanzhong');
INSERT INTO `web_area` VALUES('2899','汉台区','','2898','2824,2898','0','2899','','0','0','610702','');
INSERT INTO `web_area` VALUES('2900','南郑县','','2898','2824,2898','0','2900','','0','0','610721','');
INSERT INTO `web_area` VALUES('2901','城固县','','2898','2824,2898','0','2901','','0','0','610722','');
INSERT INTO `web_area` VALUES('2902','洋县','','2898','2824,2898','0','2902','','0','0','610723','');
INSERT INTO `web_area` VALUES('2903','西乡县','','2898','2824,2898','0','2903','','0','0','610724','');
INSERT INTO `web_area` VALUES('2904','勉县','','2898','2824,2898','0','2904','','0','0','610725','');
INSERT INTO `web_area` VALUES('2905','宁强县','','2898','2824,2898','0','2905','','0','0','610726','');
INSERT INTO `web_area` VALUES('2906','略阳县','','2898','2824,2898','0','2906','','0','0','610727','');
INSERT INTO `web_area` VALUES('2907','镇巴县','','2898','2824,2898','0','2907','','0','0','610728','');
INSERT INTO `web_area` VALUES('2908','留坝县','','2898','2824,2898','0','2908','','0','0','610729','');
INSERT INTO `web_area` VALUES('2909','佛坪县','','2898','2824,2898','0','2909','','0','0','610730','');
INSERT INTO `web_area` VALUES('2910','榆林市','','2824','2824','1','2911,2912,2913,2914,2915,2916,2917,2918,2919,2920,2921,2922','','0','0','610800','yulinshi');
INSERT INTO `web_area` VALUES('2911','榆阳区','','2910','2824,2910','0','2911','','0','0','610802','');
INSERT INTO `web_area` VALUES('2912','神木县','','2910','2824,2910','0','2912','','0','0','610821','');
INSERT INTO `web_area` VALUES('2913','府谷县','','2910','2824,2910','0','2913','','0','0','610822','');
INSERT INTO `web_area` VALUES('2914','横山县','','2910','2824,2910','0','2914','','0','0','610823','');
INSERT INTO `web_area` VALUES('2915','靖边县','','2910','2824,2910','0','2915','','0','0','610824','');
INSERT INTO `web_area` VALUES('2916','定边县','','2910','2824,2910','0','2916','','0','0','610825','');
INSERT INTO `web_area` VALUES('2917','绥德县','','2910','2824,2910','0','2917','','0','0','610826','');
INSERT INTO `web_area` VALUES('2918','米脂县','','2910','2824,2910','0','2918','','0','0','610827','');
INSERT INTO `web_area` VALUES('2919','佳县','','2910','2824,2910','0','2919','','0','0','610828','');
INSERT INTO `web_area` VALUES('2920','吴堡县','','2910','2824,2910','0','2920','','0','0','610829','');
INSERT INTO `web_area` VALUES('2921','清涧县','','2910','2824,2910','0','2921','','0','0','610830','');
INSERT INTO `web_area` VALUES('2922','子洲县','','2910','2824,2910','0','2922','','0','0','610831','');
INSERT INTO `web_area` VALUES('2923','安康市','','2824','2824','1','2924,2925,2926,2927,2928,2929,2930,2931,2932,2933','','0','0','610900','ankang');
INSERT INTO `web_area` VALUES('2924','汉滨区','','2923','2824,2923','0','2924','','0','0','610902','');
INSERT INTO `web_area` VALUES('2925','汉阴县','','2923','2824,2923','0','2925','','0','0','610921','');
INSERT INTO `web_area` VALUES('2926','石泉县','','2923','2824,2923','0','2926','','0','0','610922','');
INSERT INTO `web_area` VALUES('2927','宁陕县','','2923','2824,2923','0','2927','','0','0','610923','');
INSERT INTO `web_area` VALUES('2928','紫阳县','','2923','2824,2923','0','2928','','0','0','610924','');
INSERT INTO `web_area` VALUES('2929','岚皋县','','2923','2824,2923','0','2929','','0','0','610925','');
INSERT INTO `web_area` VALUES('2930','平利县','','2923','2824,2923','0','2930','','0','0','610926','');
INSERT INTO `web_area` VALUES('2931','镇坪县','','2923','2824,2923','0','2931','','0','0','610927','');
INSERT INTO `web_area` VALUES('2932','旬阳县','','2923','2824,2923','0','2932','','0','0','610928','');
INSERT INTO `web_area` VALUES('2933','白河县','','2923','2824,2923','0','2933','','0','0','610929','');
INSERT INTO `web_area` VALUES('2934','商洛市','','2824','2824','1','2935,2936,2937,2938,2939,2940,2941','','0','0','611000','shangluo');
INSERT INTO `web_area` VALUES('2935','商州区','','2934','2824,2934','0','2935','','0','0','611002','');
INSERT INTO `web_area` VALUES('2936','洛南县','','2934','2824,2934','0','2936','','0','0','611021','');
INSERT INTO `web_area` VALUES('2937','丹凤县','','2934','2824,2934','0','2937','','0','0','611022','');
INSERT INTO `web_area` VALUES('2938','商南县','','2934','2824,2934','0','2938','','0','0','611023','');
INSERT INTO `web_area` VALUES('2939','山阳县','','2934','2824,2934','0','2939','','0','0','611024','');
INSERT INTO `web_area` VALUES('2940','镇安县','','2934','2824,2934','0','2940','','0','0','611025','');
INSERT INTO `web_area` VALUES('2941','柞水县','','2934','2824,2934','0','2941','','0','0','611026','');
INSERT INTO `web_area` VALUES('2942','甘肃','','0','0','1','2943,2952,2953,2956,2962,2970,2975,2982,2990,2998,3007,3015,3025,3034,2944,2945,2946,2947,2948,2949,2950,2951','','26','0','620000','gansu');
INSERT INTO `web_area` VALUES('2943','兰州市','','2942','2942','1','2944,2945,2946,2947,2948,2949,2950,2951','','0','0','620100','lanzhou');
INSERT INTO `web_area` VALUES('2944','城关区','','2943','2942,2943','0','2944','','0','0','620102','');
INSERT INTO `web_area` VALUES('2945','七里河区','','2943','2942,2943','0','2945','','0','0','620103','');
INSERT INTO `web_area` VALUES('2946','西固区','','2943','2942,2943','0','2946','','0','0','620104','');
INSERT INTO `web_area` VALUES('2947','安宁区','','2943','2942,2943','0','2947','','0','0','620105','');
INSERT INTO `web_area` VALUES('2948','红古区','','2943','2942,2943','0','2948','','0','0','620111','');
INSERT INTO `web_area` VALUES('2949','永登县','','2943','2942,2943','0','2949','','0','0','620121','');
INSERT INTO `web_area` VALUES('2950','皋兰县','','2943','2942,2943','0','2950','','0','0','620122','');
INSERT INTO `web_area` VALUES('2951','榆中县','','2943','2942,2943','0','2951','','0','0','620123','');
INSERT INTO `web_area` VALUES('2952','嘉峪关市','','2942','2942','0','2952','','0','0','620200','jiayuguan');
INSERT INTO `web_area` VALUES('2953','金昌市','','2942','2942','1','2954,2955','','0','0','620300','jinchang');
INSERT INTO `web_area` VALUES('2954','金川区','','2953','2942,2953','0','2954','','0','0','620302','');
INSERT INTO `web_area` VALUES('2955','永昌县','','2953','2942,2953','0','2955','','0','0','620321','');
INSERT INTO `web_area` VALUES('2956','白银市','','2942','2942','1','2957,2958,2959,2960,2961','','0','0','620400','baiyin');
INSERT INTO `web_area` VALUES('2957','白银区','','2956','2942,2956','0','2957','','0','0','620402','');
INSERT INTO `web_area` VALUES('2958','平川区','','2956','2942,2956','0','2958','','0','0','620403','');
INSERT INTO `web_area` VALUES('2959','靖远县','','2956','2942,2956','0','2959','','0','0','620421','');
INSERT INTO `web_area` VALUES('2960','会宁县','','2956','2942,2956','0','2960','','0','0','620422','');
INSERT INTO `web_area` VALUES('2961','景泰县','','2956','2942,2956','0','2961','','0','0','620423','');
INSERT INTO `web_area` VALUES('2962','天水市','','2942','2942','1','2963,2964,2965,2966,2967,2968,2969','','0','0','620500','tianshui');
INSERT INTO `web_area` VALUES('2963','秦州区','','2962','2942,2962','0','2963','','0','0','620502','');
INSERT INTO `web_area` VALUES('2964','麦积区','','2962','2942,2962','0','2964','','0','0','620503','');
INSERT INTO `web_area` VALUES('2965','清水县','','2962','2942,2962','0','2965','','0','0','620521','');
INSERT INTO `web_area` VALUES('2966','秦安县','','2962','2942,2962','0','2966','','0','0','620522','');
INSERT INTO `web_area` VALUES('2967','甘谷县','','2962','2942,2962','0','2967','','0','0','620523','');
INSERT INTO `web_area` VALUES('2968','武山县','','2962','2942,2962','0','2968','','0','0','620524','');
INSERT INTO `web_area` VALUES('2969','张家川回族自治县','','2962','2942,2962','0','2969','','0','0','620525','');
INSERT INTO `web_area` VALUES('2970','武威市','','2942','2942','1','2971,2972,2973,2974','','0','0','620600','wuwei');
INSERT INTO `web_area` VALUES('2971','凉州区','','2970','2942,2970','0','2971','','0','0','620602','');
INSERT INTO `web_area` VALUES('2972','民勤县','','2970','2942,2970','0','2972','','0','0','620621','');
INSERT INTO `web_area` VALUES('2973','古浪县','','2970','2942,2970','0','2973','','0','0','620622','');
INSERT INTO `web_area` VALUES('2974','天祝藏族自治县','','2970','2942,2970','0','2974','','0','0','620623','');
INSERT INTO `web_area` VALUES('2975','张掖市','','2942','2942','1','2976,2977,2978,2979,2980,2981','','0','0','620700','zhangye');
INSERT INTO `web_area` VALUES('2976','甘州区','','2975','2942,2975','0','2976','','0','0','620702','');
INSERT INTO `web_area` VALUES('2977','肃南裕固族自治县','','2975','2942,2975','0','2977','','0','0','620721','');
INSERT INTO `web_area` VALUES('2978','民乐县','','2975','2942,2975','0','2978','','0','0','620722','');
INSERT INTO `web_area` VALUES('2979','临泽县','','2975','2942,2975','0','2979','','0','0','620723','');
INSERT INTO `web_area` VALUES('2980','高台县','','2975','2942,2975','0','2980','','0','0','620724','');
INSERT INTO `web_area` VALUES('2981','山丹县','','2975','2942,2975','0','2981','','0','0','620725','');
INSERT INTO `web_area` VALUES('2982','平凉市','','2942','2942','1','2983,2984,2985,2986,2987,2988,2989','','0','0','620800','pingliang');
INSERT INTO `web_area` VALUES('2983','崆峒区','','2982','2942,2982','0','2983','','0','0','620802','');
INSERT INTO `web_area` VALUES('2984','泾川县','','2982','2942,2982','0','2984','','0','0','620821','');
INSERT INTO `web_area` VALUES('2985','灵台县','','2982','2942,2982','0','2985','','0','0','620822','');
INSERT INTO `web_area` VALUES('2986','崇信县','','2982','2942,2982','0','2986','','0','0','620823','');
INSERT INTO `web_area` VALUES('2987','华亭县','','2982','2942,2982','0','2987','','0','0','620824','');
INSERT INTO `web_area` VALUES('2988','庄浪县','','2982','2942,2982','0','2988','','0','0','620825','');
INSERT INTO `web_area` VALUES('2989','静宁县','','2982','2942,2982','0','2989','','0','0','620826','');
INSERT INTO `web_area` VALUES('2990','酒泉市','','2942','2942','1','2991,2992,2993,2994,2995,2996,2997','','0','0','620900','jiuquan');
INSERT INTO `web_area` VALUES('2991','肃州区','','2990','2942,2990','0','2991','','0','0','620902','');
INSERT INTO `web_area` VALUES('2992','金塔县','','2990','2942,2990','0','2992','','0','0','620921','');
INSERT INTO `web_area` VALUES('2993','瓜州县','','2990','2942,2990','0','2993','','0','0','620922','');
INSERT INTO `web_area` VALUES('2994','肃北蒙古族自治县','','2990','2942,2990','0','2994','','0','0','620923','');
INSERT INTO `web_area` VALUES('2995','阿克塞','','2990','2942,2990','0','2995','','0','0','620924','');
INSERT INTO `web_area` VALUES('2996','玉门市','','2990','2942,2990','0','2996','','0','0','620981','');
INSERT INTO `web_area` VALUES('2997','敦煌市','','2990','2942,2990','0','2997','','0','0','620982','');
INSERT INTO `web_area` VALUES('2998','庆阳市','','2942','2942','1','2999,3000,3001,3002,3003,3004,3005,3006','','0','0','621000','qingyang');
INSERT INTO `web_area` VALUES('2999','西峰区','','2998','2942,2998','0','2999','','0','0','621002','');
INSERT INTO `web_area` VALUES('3000','庆城县','','2998','2942,2998','0','3000','','0','0','621021','');
INSERT INTO `web_area` VALUES('3001','环县','','2998','2942,2998','0','3001','','0','0','621022','');
INSERT INTO `web_area` VALUES('3002','华池县','','2998','2942,2998','0','3002','','0','0','621023','');
INSERT INTO `web_area` VALUES('3003','合水县','','2998','2942,2998','0','3003','','0','0','621024','');
INSERT INTO `web_area` VALUES('3004','正宁县','','2998','2942,2998','0','3004','','0','0','621025','');
INSERT INTO `web_area` VALUES('3005','宁县','','2998','2942,2998','0','3005','','0','0','621026','');
INSERT INTO `web_area` VALUES('3006','镇原县','','2998','2942,2998','0','3006','','0','0','621027','');
INSERT INTO `web_area` VALUES('3007','定西市','','2942','2942','1','3008,3009,3010,3011,3012,3013,3014','','0','0','621100','dingxi');
INSERT INTO `web_area` VALUES('3008','安定区','','3007','2942,3007','0','3008','','0','0','621102','');
INSERT INTO `web_area` VALUES('3009','通渭县','','3007','2942,3007','0','3009','','0','0','621121','');
INSERT INTO `web_area` VALUES('3010','陇西县','','3007','2942,3007','0','3010','','0','0','621122','');
INSERT INTO `web_area` VALUES('3011','渭源县','','3007','2942,3007','0','3011','','0','0','621123','');
INSERT INTO `web_area` VALUES('3012','临洮县','','3007','2942,3007','0','3012','','0','0','621124','');
INSERT INTO `web_area` VALUES('3013','漳县','','3007','2942,3007','0','3013','','0','0','621125','');
INSERT INTO `web_area` VALUES('3014','岷县','','3007','2942,3007','0','3014','','0','0','621126','');
INSERT INTO `web_area` VALUES('3015','陇南市','','2942','2942','1','3016,3017,3018,3019,3020,3021,3022,3023,3024','','0','0','621200','longnan');
INSERT INTO `web_area` VALUES('3016','武都区','','3015','2942,3015','0','3016','','0','0','621202','');
INSERT INTO `web_area` VALUES('3017','成县','','3015','2942,3015','0','3017','','0','0','621221','');
INSERT INTO `web_area` VALUES('3018','文县','','3015','2942,3015','0','3018','','0','0','621222','');
INSERT INTO `web_area` VALUES('3019','宕昌县','','3015','2942,3015','0','3019','','0','0','621223','');
INSERT INTO `web_area` VALUES('3020','康县','','3015','2942,3015','0','3020','','0','0','621224','');
INSERT INTO `web_area` VALUES('3021','西和县','','3015','2942,3015','0','3021','','0','0','621225','');
INSERT INTO `web_area` VALUES('3022','礼县','','3015','2942,3015','0','3022','','0','0','621226','');
INSERT INTO `web_area` VALUES('3023','徽县','','3015','2942,3015','0','3023','','0','0','621227','');
INSERT INTO `web_area` VALUES('3024','两当县','','3015','2942,3015','0','3024','','0','0','621228','');
INSERT INTO `web_area` VALUES('3025','临夏','','2942','2942','1','3026,3027,3028,3029,3030,3031,3032,3033','','0','0','622900','linxiazizhizhou');
INSERT INTO `web_area` VALUES('3026','临夏市','','3025','2942,3025','0','3026','','0','0','622901','');
INSERT INTO `web_area` VALUES('3027','临夏县','','3025','2942,3025','0','3027','','0','0','622921','');
INSERT INTO `web_area` VALUES('3028','康乐县','','3025','2942,3025','0','3028','','0','0','622922','');
INSERT INTO `web_area` VALUES('3029','永靖县','','3025','2942,3025','0','3029','','0','0','622923','');
INSERT INTO `web_area` VALUES('3030','广河县','','3025','2942,3025','0','3030','','0','0','622924','');
INSERT INTO `web_area` VALUES('3031','和政县','','3025','2942,3025','0','3031','','0','0','622925','');
INSERT INTO `web_area` VALUES('3032','东乡族自治县','','3025','2942,3025','0','3032','','0','0','622926','');
INSERT INTO `web_area` VALUES('3033','积石山保安族东乡族撒拉族自治县','','3025','2942,3025','0','3033','','0','0','622927','');
INSERT INTO `web_area` VALUES('3034','甘南','','2942','2942','1','3035,3036,3037,3038,3039,3040,3041,3042','','0','0','623000','gannan');
INSERT INTO `web_area` VALUES('3035','合作市','','3034','2942,3034','0','3035','','0','0','623001','');
INSERT INTO `web_area` VALUES('3036','临潭县','','3034','2942,3034','0','3036','','0','0','623021','');
INSERT INTO `web_area` VALUES('3037','卓尼县','','3034','2942,3034','0','3037','','0','0','623022','');
INSERT INTO `web_area` VALUES('3038','舟曲县','','3034','2942,3034','0','3038','','0','0','623023','');
INSERT INTO `web_area` VALUES('3039','迭部县','','3034','2942,3034','0','3039','','0','0','623024','');
INSERT INTO `web_area` VALUES('3040','玛曲县','','3034','2942,3034','0','3040','','0','0','623025','');
INSERT INTO `web_area` VALUES('3041','碌曲县','','3034','2942,3034','0','3041','','0','0','623026','');
INSERT INTO `web_area` VALUES('3042','夏河县','','3034','2942,3034','0','3042','','0','0','623027','');
INSERT INTO `web_area` VALUES('3043','青海','','0','0','1','3044,3052,3059,3064,3069,3075,3082,3089,3045,3046,3047,3048,3049,3050,3051','','30','0','630000','qinghai');
INSERT INTO `web_area` VALUES('3044','西宁市','','3043','3043','1','3045,3046,3047,3048,3049,3050,3051','','0','0','630100','xining');
INSERT INTO `web_area` VALUES('3045','城东区','','3044','3043,3044','0','3045','','0','0','630102','');
INSERT INTO `web_area` VALUES('3046','城中区','','3044','3043,3044','0','3046','','0','0','630103','');
INSERT INTO `web_area` VALUES('3047','城西区','','3044','3043,3044','0','3047','','0','0','630104','');
INSERT INTO `web_area` VALUES('3048','城北区','','3044','3043,3044','0','3048','','0','0','630105','');
INSERT INTO `web_area` VALUES('3049','大通回族土族自治县','','3044','3043,3044','0','3049','','0','0','630121','');
INSERT INTO `web_area` VALUES('3050','湟中县','','3044','3043,3044','0','3050','','0','0','630122','');
INSERT INTO `web_area` VALUES('3051','湟源县','','3044','3043,3044','0','3051','','0','0','630123','');
INSERT INTO `web_area` VALUES('3052','海东','','3043','3043','1','3053,3054,3055,3056,3057,3058','','0','0','632100','haidongdi');
INSERT INTO `web_area` VALUES('3053','平安县','','3052','3043,3052','0','3053','','0','0','632121','');
INSERT INTO `web_area` VALUES('3054','民和回族土族自治县','','3052','3043,3052','0','3054','','0','0','632122','');
INSERT INTO `web_area` VALUES('3055','乐都县','','3052','3043,3052','0','3055','','0','0','632123','');
INSERT INTO `web_area` VALUES('3056','互助土族自治县','','3052','3043,3052','0','3056','','0','0','632126','');
INSERT INTO `web_area` VALUES('3057','化隆回族自治县','','3052','3043,3052','0','3057','','0','0','632127','');
INSERT INTO `web_area` VALUES('3058','循化撒拉族自治县','','3052','3043,3052','0','3058','','0','0','632128','');
INSERT INTO `web_area` VALUES('3059','海北','','3043','3043','1','3060,3061,3062,3063','','0','0','632200','haibeizizhizhou');
INSERT INTO `web_area` VALUES('3060','门源回族自治县','','3059','3043,3059','0','3060','','0','0','632221','');
INSERT INTO `web_area` VALUES('3061','祁连县','','3059','3043,3059','0','3061','','0','0','632222','');
INSERT INTO `web_area` VALUES('3062','海晏县','','3059','3043,3059','0','3062','','0','0','632223','');
INSERT INTO `web_area` VALUES('3063','刚察县','','3059','3043,3059','0','3063','','0','0','632224','');
INSERT INTO `web_area` VALUES('3064','黄南藏族','','3043','3043','1','3065,3066,3067,3068','','0','0','632300','huangnan');
INSERT INTO `web_area` VALUES('3065','同仁县','','3064','3043,3064','0','3065','','0','0','632321','');
INSERT INTO `web_area` VALUES('3066','尖扎县','','3064','3043,3064','0','3066','','0','0','632322','');
INSERT INTO `web_area` VALUES('3067','泽库县','','3064','3043,3064','0','3067','','0','0','632323','');
INSERT INTO `web_area` VALUES('3068','河南蒙古族自治县','','3064','3043,3064','0','3068','','0','0','632324','');
INSERT INTO `web_area` VALUES('3069','海南藏族','','3043','3043','1','3070,3071,3072,3073,3074','','0','0','632500','hainanzizhizhou');
INSERT INTO `web_area` VALUES('3070','共和县','','3069','3043,3069','0','3070','','0','0','632521','');
INSERT INTO `web_area` VALUES('3071','同德县','','3069','3043,3069','0','3071','','0','0','632522','');
INSERT INTO `web_area` VALUES('3072','贵德县','','3069','3043,3069','0','3072','','0','0','632523','');
INSERT INTO `web_area` VALUES('3073','兴海县','','3069','3043,3069','0','3073','','0','0','632524','');
INSERT INTO `web_area` VALUES('3074','贵南县','','3069','3043,3069','0','3074','','0','0','632525','');
INSERT INTO `web_area` VALUES('3075','果洛','','3043','3043','1','3076,3077,3078,3079,3080,3081','','0','0','632600','guoluo');
INSERT INTO `web_area` VALUES('3076','玛沁县','','3075','3043,3075','0','3076','','0','0','632621','');
INSERT INTO `web_area` VALUES('3077','班玛县','','3075','3043,3075','0','3077','','0','0','632622','');
INSERT INTO `web_area` VALUES('3078','甘德县','','3075','3043,3075','0','3078','','0','0','632623','');
INSERT INTO `web_area` VALUES('3079','达日县','','3075','3043,3075','0','3079','','0','0','632624','');
INSERT INTO `web_area` VALUES('3080','久治县','','3075','3043,3075','0','3080','','0','0','632625','');
INSERT INTO `web_area` VALUES('3081','玛多县','','3075','3043,3075','0','3081','','0','0','632626','');
INSERT INTO `web_area` VALUES('3082','玉树','','3043','3043','1','3083,3084,3085,3086,3087,3088','','0','0','632700','yushuzizhizhou');
INSERT INTO `web_area` VALUES('3083','玉树县','','3082','3043,3082','0','3083','','0','0','632721','');
INSERT INTO `web_area` VALUES('3084','杂多县','','3082','3043,3082','0','3084','','0','0','632722','');
INSERT INTO `web_area` VALUES('3085','称多县','','3082','3043,3082','0','3085','','0','0','632723','');
INSERT INTO `web_area` VALUES('3086','治多县','','3082','3043,3082','0','3086','','0','0','632724','');
INSERT INTO `web_area` VALUES('3087','囊谦县','','3082','3043,3082','0','3087','','0','0','632725','');
INSERT INTO `web_area` VALUES('3088','曲麻莱县','','3082','3043,3082','0','3088','','0','0','632726','');
INSERT INTO `web_area` VALUES('3089','海西蒙古','','3043','3043','1','3090,3091,3092,3093,3094','','0','0','632800','haixi');
INSERT INTO `web_area` VALUES('3090','格尔木市','','3089','3043,3089','0','3090','','0','0','632801','');
INSERT INTO `web_area` VALUES('3091','德令哈市','','3089','3043,3089','0','3091','','0','0','632802','');
INSERT INTO `web_area` VALUES('3092','乌兰县','','3089','3043,3089','0','3092','','0','0','632821','');
INSERT INTO `web_area` VALUES('3093','都兰县','','3089','3043,3089','0','3093','','0','0','632822','');
INSERT INTO `web_area` VALUES('3094','天峻县','','3089','3043,3089','0','3094','','0','0','632823','');
INSERT INTO `web_area` VALUES('3095','宁夏','','0','0','1','3096,3103,3107,3113,3119,3097,3098,3099,3100,3101,3102','','28','0','640000','ningxia');
INSERT INTO `web_area` VALUES('3096','银川市','','3095','3095','1','3097,3098,3099,3100,3101,3102','','0','0','640100','yinchuan');
INSERT INTO `web_area` VALUES('3097','兴庆区','','3096','3095,3096','0','3097','','0','0','640104','');
INSERT INTO `web_area` VALUES('3098','西夏区','','3096','3095,3096','0','3098','','0','0','640105','');
INSERT INTO `web_area` VALUES('3099','金凤区','','3096','3095,3096','0','3099','','0','0','640106','');
INSERT INTO `web_area` VALUES('3100','永宁县','','3096','3095,3096','0','3100','','0','0','640121','');
INSERT INTO `web_area` VALUES('3101','贺兰县','','3096','3095,3096','0','3101','','0','0','640122','');
INSERT INTO `web_area` VALUES('3102','灵武市','','3096','3095,3096','0','3102','','0','0','640181','');
INSERT INTO `web_area` VALUES('3103','石嘴山','','3095','3095','1','3104,3105,3106','','0','0','640200','shizuishan');
INSERT INTO `web_area` VALUES('3104','大武口区','','3103','3095,3103','0','3104','','0','0','640202','');
INSERT INTO `web_area` VALUES('3105','惠农区','','3103','3095,3103','0','3105','','0','0','640205','');
INSERT INTO `web_area` VALUES('3106','平罗县','','3103','3095,3103','0','3106','','0','0','640221','');
INSERT INTO `web_area` VALUES('3107','吴忠市','','3095','3095','1','3108,3109,3110,3111,3112','','0','0','640300','wuzhong');
INSERT INTO `web_area` VALUES('3108','利通区','','3107','3095,3107','0','3108','','0','0','640302','');
INSERT INTO `web_area` VALUES('3109','红寺堡区','','3107','3095,3107','0','3109','','0','0','640303','');
INSERT INTO `web_area` VALUES('3110','盐池县','','3107','3095,3107','0','3110','','0','0','640323','');
INSERT INTO `web_area` VALUES('3111','同心县','','3107','3095,3107','0','3111','','0','0','640324','');
INSERT INTO `web_area` VALUES('3112','青铜峡市','','3107','3095,3107','0','3112','','0','0','640381','');
INSERT INTO `web_area` VALUES('3113','固原市','','3095','3095','1','3114,3115,3116,3117,3118','','0','0','640400','guyuan');
INSERT INTO `web_area` VALUES('3114','原州区','','3113','3095,3113','0','3114','','0','0','640402','');
INSERT INTO `web_area` VALUES('3115','西吉县','','3113','3095,3113','0','3115','','0','0','640422','');
INSERT INTO `web_area` VALUES('3116','隆德县','','3113','3095,3113','0','3116','','0','0','640423','');
INSERT INTO `web_area` VALUES('3117','泾源县','','3113','3095,3113','0','3117','','0','0','640424','');
INSERT INTO `web_area` VALUES('3118','彭阳县','','3113','3095,3113','0','3118','','0','0','640425','');
INSERT INTO `web_area` VALUES('3119','中卫市','','3095','3095','1','3120,3121,3122','','0','0','640500','zhongwei');
INSERT INTO `web_area` VALUES('3120','沙坡头区','','3119','3095,3119','0','3120','','0','0','640502','');
INSERT INTO `web_area` VALUES('3121','中宁县','','3119','3095,3119','0','3121','','0','0','640521','');
INSERT INTO `web_area` VALUES('3122','海原县','','3119','3095,3119','0','3122','','0','0','640522','');
INSERT INTO `web_area` VALUES('3123','新疆','','0','0','1','3124,3133,3138,3142,3146,3154,3158,3168,3178,3183,3196,3205,3216,3224,3232,3125,3126,3127,3128,3129,3130,3131,3132,3233,3234,3235,3236','','29','0','650000','xinjiang');
INSERT INTO `web_area` VALUES('3124','乌鲁木齐','','3123','3123','1','3125,3126,3127,3128,3129,3130,3131,3132','','0','0','650100','wulumuqi');
INSERT INTO `web_area` VALUES('3125','天山区','','3124','3123,3124','0','3125','','0','0','650102','tianshan');
INSERT INTO `web_area` VALUES('3126','沙依巴克区','','3124','3123,3124','0','3126','','0','0','650103','shayibake');
INSERT INTO `web_area` VALUES('3127','新市区','','3124','3123,3124','0','3127','','0','0','650104','xinshi');
INSERT INTO `web_area` VALUES('3128','水磨沟区','','3124','3123,3124','0','3128','','0','0','650105','shuimogou');
INSERT INTO `web_area` VALUES('3129','头屯河区','','3124','3123,3124','0','3129','','0','0','650106','toutunhe');
INSERT INTO `web_area` VALUES('3130','达坂城区','','3124','3123,3124','0','3130','','0','0','650107','dabancheng');
INSERT INTO `web_area` VALUES('3131','米东区','','3124','3123,3124','0','3131','','0','0','650109','midongqu');
INSERT INTO `web_area` VALUES('3132','乌鲁木齐县','','3124','3123,3124','0','3132','','0','0','650121','wulumuqixian');
INSERT INTO `web_area` VALUES('3133','克拉玛依','','3123','3123','1','3134,3135,3136,3137','','0','0','650200','kelamayi');
INSERT INTO `web_area` VALUES('3134','独山子区','','3133','3123,3133','0','3134','','0','0','650202','');
INSERT INTO `web_area` VALUES('3135','克拉玛依区','','3133','3123,3133','0','3135','','0','0','650203','');
INSERT INTO `web_area` VALUES('3136','白碱滩区','','3133','3123,3133','0','3136','','0','0','650204','');
INSERT INTO `web_area` VALUES('3137','乌尔禾区','','3133','3123,3133','0','3137','','0','0','650205','');
INSERT INTO `web_area` VALUES('3138','吐鲁番','','3123','3123','1','3139,3140,3141','','0','0','652100','tulufandi');
INSERT INTO `web_area` VALUES('3139','吐鲁番市','','3138','3123,3138','0','3139','','0','0','652101','');
INSERT INTO `web_area` VALUES('3140','鄯善县','','3138','3123,3138','0','3140','','0','0','652122','');
INSERT INTO `web_area` VALUES('3141','托克逊县','','3138','3123,3138','0','3141','','0','0','652123','');
INSERT INTO `web_area` VALUES('3142','哈密','','3123','3123','1','3143,3144,3145','','0','0','652200','hamidi');
INSERT INTO `web_area` VALUES('3143','哈密市','','3142','3123,3142','0','3143','','0','0','652201','');
INSERT INTO `web_area` VALUES('3144','巴里坤哈萨克自治县','','3142','3123,3142','0','3144','','0','0','652222','');
INSERT INTO `web_area` VALUES('3145','伊吾县','','3142','3123,3142','0','3145','','0','0','652223','');
INSERT INTO `web_area` VALUES('3146','昌吉','','3123','3123','1','3147,3148,3149,3150,3151,3152,3153','','0','0','652300','changji');
INSERT INTO `web_area` VALUES('3147','昌吉市','','3146','3123,3146','0','3147','','0','0','652301','');
INSERT INTO `web_area` VALUES('3148','阜康市','','3146','3123,3146','0','3148','','0','0','652302','');
INSERT INTO `web_area` VALUES('3149','呼图壁县','','3146','3123,3146','0','3149','','0','0','652323','');
INSERT INTO `web_area` VALUES('3150','玛纳斯县','','3146','3123,3146','0','3150','','0','0','652324','');
INSERT INTO `web_area` VALUES('3151','奇台县','','3146','3123,3146','0','3151','','0','0','652325','');
INSERT INTO `web_area` VALUES('3152','吉木萨尔县','','3146','3123,3146','0','3152','','0','0','652327','');
INSERT INTO `web_area` VALUES('3153','木垒哈萨克自治县','','3146','3123,3146','0','3153','','0','0','652328','');
INSERT INTO `web_area` VALUES('3154','博尔塔拉','','3123','3123','1','3155,3156,3157','','0','0','652700','boertala');
INSERT INTO `web_area` VALUES('3155','博乐市','','3154','3123,3154','0','3155','','0','0','652701','');
INSERT INTO `web_area` VALUES('3156','精河县','','3154','3123,3154','0','3156','','0','0','652722','');
INSERT INTO `web_area` VALUES('3157','温泉县','','3154','3123,3154','0','3157','','0','0','652723','');
INSERT INTO `web_area` VALUES('3158','巴音郭楞','','3123','3123','1','3159,3160,3161,3162,3163,3164,3165,3166,3167','','0','0','652800','bayin');
INSERT INTO `web_area` VALUES('3159','库尔勒市','','3158','3123,3158','0','3159','','0','0','652801','');
INSERT INTO `web_area` VALUES('3160','轮台县','','3158','3123,3158','0','3160','','0','0','652822','');
INSERT INTO `web_area` VALUES('3161','尉犁县','','3158','3123,3158','0','3161','','0','0','652823','');
INSERT INTO `web_area` VALUES('3162','若羌县','','3158','3123,3158','0','3162','','0','0','652824','');
INSERT INTO `web_area` VALUES('3163','且末县','','3158','3123,3158','0','3163','','0','0','652825','');
INSERT INTO `web_area` VALUES('3164','焉耆回族自治县','','3158','3123,3158','0','3164','','0','0','652826','');
INSERT INTO `web_area` VALUES('3165','和静县','','3158','3123,3158','0','3165','','0','0','652827','');
INSERT INTO `web_area` VALUES('3166','和硕县','','3158','3123,3158','0','3166','','0','0','652828','');
INSERT INTO `web_area` VALUES('3167','博湖县','','3158','3123,3158','0','3167','','0','0','652829','');
INSERT INTO `web_area` VALUES('3168','阿克苏','','3123','3123','1','3169,3170,3171,3172,3173,3174,3175,3176,3177','','0','0','652900','akesudi');
INSERT INTO `web_area` VALUES('3169','阿克苏','','3168','3123,3168','0','3169','','0','0','652901','');
INSERT INTO `web_area` VALUES('3170','温宿县','','3168','3123,3168','0','3170','','0','0','652922','');
INSERT INTO `web_area` VALUES('3171','库车县','','3168','3123,3168','0','3171','','0','0','652923','');
INSERT INTO `web_area` VALUES('3172','沙雅县','','3168','3123,3168','0','3172','','0','0','652924','');
INSERT INTO `web_area` VALUES('3173','新和县','','3168','3123,3168','0','3173','','0','0','652925','');
INSERT INTO `web_area` VALUES('3174','拜城县','','3168','3123,3168','0','3174','','0','0','652926','');
INSERT INTO `web_area` VALUES('3175','乌什县','','3168','3123,3168','0','3175','','0','0','652927','');
INSERT INTO `web_area` VALUES('3176','阿瓦提','','3168','3123,3168','0','3176','','0','0','652928','');
INSERT INTO `web_area` VALUES('3177','柯坪县','','3168','3123,3168','0','3177','','0','0','652929','');
INSERT INTO `web_area` VALUES('3178','克孜勒苏','','3123','3123','1','3179,3180,3181,3182','','0','0','653000','kezilesu');
INSERT INTO `web_area` VALUES('3179','阿图什','','3178','3123,3178','0','3179','','0','0','653001','');
INSERT INTO `web_area` VALUES('3180','阿克陶','','3178','3123,3178','0','3180','','0','0','653022','');
INSERT INTO `web_area` VALUES('3181','阿合奇','','3178','3123,3178','0','3181','','0','0','653023','');
INSERT INTO `web_area` VALUES('3182','乌恰县','','3178','3123,3178','0','3182','','0','0','653024','');
INSERT INTO `web_area` VALUES('3183','喀什地区','','3123','3123','1','3184,3185,3186,3187,3188,3189,3190,3191,3192,3193,3194,3195','','0','0','653100','kashidi');
INSERT INTO `web_area` VALUES('3184','喀什市','','3183','3123,3183','0','3184','','0','0','653101','');
INSERT INTO `web_area` VALUES('3185','疏附县','','3183','3123,3183','0','3185','','0','0','653121','');
INSERT INTO `web_area` VALUES('3186','疏勒县','','3183','3123,3183','0','3186','','0','0','653122','');
INSERT INTO `web_area` VALUES('3187','英吉沙县','','3183','3123,3183','0','3187','','0','0','653123','');
INSERT INTO `web_area` VALUES('3188','泽普县','','3183','3123,3183','0','3188','','0','0','653124','');
INSERT INTO `web_area` VALUES('3189','莎车县','','3183','3123,3183','0','3189','','0','0','653125','');
INSERT INTO `web_area` VALUES('3190','叶城县','','3183','3123,3183','0','3190','','0','0','653126','');
INSERT INTO `web_area` VALUES('3191','麦盖提县','','3183','3123,3183','0','3191','','0','0','653127','');
INSERT INTO `web_area` VALUES('3192','岳普湖县','','3183','3123,3183','0','3192','','0','0','653128','');
INSERT INTO `web_area` VALUES('3193','伽师县','','3183','3123,3183','0','3193','','0','0','653129','');
INSERT INTO `web_area` VALUES('3194','巴楚县','','3183','3123,3183','0','3194','','0','0','653130','');
INSERT INTO `web_area` VALUES('3195','塔什库尔干塔吉克自治县','','3183','3123,3183','0','3195','','0','0','653131','');
INSERT INTO `web_area` VALUES('3196','和田','','3123','3123','1','3197,3198,3199,3200,3201,3202,3203,3204','','0','0','653200','hetiandi');
INSERT INTO `web_area` VALUES('3197','和田市','','3196','3123,3196','0','3197','','0','0','653201','');
INSERT INTO `web_area` VALUES('3198','和田县','','3196','3123,3196','0','3198','','0','0','653221','');
INSERT INTO `web_area` VALUES('3199','墨玉县','','3196','3123,3196','0','3199','','0','0','653222','');
INSERT INTO `web_area` VALUES('3200','皮山县','','3196','3123,3196','0','3200','','0','0','653223','');
INSERT INTO `web_area` VALUES('3201','洛浦县','','3196','3123,3196','0','3201','','0','0','653224','');
INSERT INTO `web_area` VALUES('3202','策勒县','','3196','3123,3196','0','3202','','0','0','653225','');
INSERT INTO `web_area` VALUES('3203','于田县','','3196','3123,3196','0','3203','','0','0','653226','');
INSERT INTO `web_area` VALUES('3204','民丰县','','3196','3123,3196','0','3204','','0','0','653227','');
INSERT INTO `web_area` VALUES('3205','伊犁','','3123','3123','1','3206,3207,3208,3209,3210,3211,3212,3213,3214,3215','','0','0','654000','yilizizhizhou');
INSERT INTO `web_area` VALUES('3206','伊宁市','','3205','3123,3205','0','3206','','0','0','654002','');
INSERT INTO `web_area` VALUES('3207','奎屯市','','3205','3123,3205','0','3207','','0','0','654003','');
INSERT INTO `web_area` VALUES('3208','伊宁县','','3205','3123,3205','0','3208','','0','0','654021','');
INSERT INTO `web_area` VALUES('3209','察布查尔锡伯自治县','','3205','3123,3205','0','3209','','0','0','654022','');
INSERT INTO `web_area` VALUES('3210','霍城县','','3205','3123,3205','0','3210','','0','0','654023','');
INSERT INTO `web_area` VALUES('3211','巩留县','','3205','3123,3205','0','3211','','0','0','654024','');
INSERT INTO `web_area` VALUES('3212','新源县','','3205','3123,3205','0','3212','','0','0','654025','');
INSERT INTO `web_area` VALUES('3213','昭苏县','','3205','3123,3205','0','3213','','0','0','654026','');
INSERT INTO `web_area` VALUES('3214','特克斯县','','3205','3123,3205','0','3214','','0','0','654027','');
INSERT INTO `web_area` VALUES('3215','尼勒克县','','3205','3123,3205','0','3215','','0','0','654028','');
INSERT INTO `web_area` VALUES('3216','塔城','','3123','3123','1','3217,3218,3219,3220,3221,3222,3223','','0','0','654200','tachengdi');
INSERT INTO `web_area` VALUES('3217','塔城市','','3216','3123,3216','0','3217','','0','0','654201','');
INSERT INTO `web_area` VALUES('3218','乌苏市','','3216','3123,3216','0','3218','','0','0','654202','');
INSERT INTO `web_area` VALUES('3219','额敏县','','3216','3123,3216','0','3219','','0','0','654221','');
INSERT INTO `web_area` VALUES('3220','沙湾县','','3216','3123,3216','0','3220','','0','0','654223','');
INSERT INTO `web_area` VALUES('3221','托里县','','3216','3123,3216','0','3221','','0','0','654224','');
INSERT INTO `web_area` VALUES('3222','裕民县','','3216','3123,3216','0','3222','','0','0','654225','');
INSERT INTO `web_area` VALUES('3223','和布克赛尔蒙古自治县','','3216','3123,3216','0','3223','','0','0','654226','');
INSERT INTO `web_area` VALUES('3224','阿勒泰','','3123','3123','1','3225,3226,3227,3228,3229,3230,3231','','0','0','654300','aletaidi');
INSERT INTO `web_area` VALUES('3225','阿勒泰','','3224','3123,3224','0','3225','','0','0','654301','');
INSERT INTO `web_area` VALUES('3226','布尔津县','','3224','3123,3224','0','3226','','0','0','654321','');
INSERT INTO `web_area` VALUES('3227','富蕴县','','3224','3123,3224','0','3227','','0','0','654322','');
INSERT INTO `web_area` VALUES('3228','福海县','','3224','3123,3224','0','3228','','0','0','654323','');
INSERT INTO `web_area` VALUES('3229','哈巴河县','','3224','3123,3224','0','3229','','0','0','654324','');
INSERT INTO `web_area` VALUES('3230','青河县','','3224','3123,3224','0','3230','','0','0','654325','');
INSERT INTO `web_area` VALUES('3231','吉木乃县','','3224','3123,3224','0','3231','','0','0','654326','');
INSERT INTO `web_area` VALUES('3233','石河子市','','3123','3123','0','3233','','0','0','659001','shihezi');
INSERT INTO `web_area` VALUES('3234','阿拉尔','','3123','3123','0','3234','','0','0','659002','alaer');
INSERT INTO `web_area` VALUES('3235','图木舒克市','','3123','3123','0','3235','','0','0','659003','tumushuke');
INSERT INTO `web_area` VALUES('3236','五家渠市','','3123','3123','0','3236','','0','0','659004','wujiaqu');
INSERT INTO `web_area` VALUES('3237','台湾','','0','0','0','3237,3240,3241,3242,3243,3244','','31','0','0','taiwan');
INSERT INTO `web_area` VALUES('3238','香港','','0','0','0','3238','','32','0','0','hongkong');
INSERT INTO `web_area` VALUES('3239','澳门','','0','0','0','3239','','33','0','0','aomen');
INSERT INTO `web_area` VALUES('3240','彰化县',' ','3237','3237','0','3237',' ','0','0','0','zhanghua');
INSERT INTO `web_area` VALUES('3241','台北市','','3237','3237','0','3237','','0','0','0','taibei');
INSERT INTO `web_area` VALUES('3242','台中市','','3237','3237','0','3237','','0','0','0','taizhong');
INSERT INTO `web_area` VALUES('3243','桃园市','','3237','3237','0','3237','','0','0','0','taoyuan');
INSERT INTO `web_area` VALUES('3244','高雄市','','3237','3237','0','3237','','0','0','0','gaoxiong');
INSERT INTO `web_area` VALUES('2','北京市','','1','1','1','3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18','','0','0','110100','beijingshiqu');
INSERT INTO `web_area` VALUES('3246','境外','','0','0','1','3247','','34','0','0','jingwai');
INSERT INTO `web_area` VALUES('3247','迪拜','','3246','3246','0','3247','','0','0','0','dibai');
--
-- 表的结构web_backup_log
--

DROP TABLE IF EXISTS `web_backup_log`;
CREATE TABLE `web_backup_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='数据备份记录';

--
-- 转存表中的数据 web_backup_log
--

INSERT INTO `web_backup_log` VALUES('9','1483081849');
INSERT INTO `web_backup_log` VALUES('8','1483081780');
INSERT INTO `web_backup_log` VALUES('6','1482981837');
--
-- 表的结构web_cate
--

DROP TABLE IF EXISTS `web_cate`;
CREATE TABLE `web_cate` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) COLLATE utf8_bin NOT NULL,
  `parent` int(3) NOT NULL DEFAULT '0',
  `pos` int(11) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 web_cate
--

INSERT INTO `web_cate` VALUES('20','蔬菜','5','0','1');
INSERT INTO `web_cate` VALUES('2','采摘','0','1','1');
INSERT INTO `web_cate` VALUES('3','观光','0','2','1');
INSERT INTO `web_cate` VALUES('4','农家乐','0','3','1');
INSERT INTO `web_cate` VALUES('5','生鲜直配','0','5','1');
INSERT INTO `web_cate` VALUES('6','酒店住宿','12','0','1');
INSERT INTO `web_cate` VALUES('11','鸡蛋','5','0','1');
INSERT INTO `web_cate` VALUES('12','住宿','0','4','1');
INSERT INTO `web_cate` VALUES('13','私家庄园','0','6','1');
INSERT INTO `web_cate` VALUES('14','农资','0','7','1');
INSERT INTO `web_cate` VALUES('17','油菜','3','0','1');
INSERT INTO `web_cate` VALUES('16','农家住宿','12','0','1');
INSERT INTO `web_cate` VALUES('18','花田','3','0','1');
INSERT INTO `web_cate` VALUES('19','桃花源','3','0','1');
INSERT INTO `web_cate` VALUES('21','水果','5','0','1');
INSERT INTO `web_cate` VALUES('22','肉类','5','0','1');
INSERT INTO `web_cate` VALUES('23','土地租赁','13','0','1');
INSERT INTO `web_cate` VALUES('24','树木认购','13','0','1');
INSERT INTO `web_cate` VALUES('25','土地认购','13','0','1');
INSERT INTO `web_cate` VALUES('26','农药','14','0','1');
INSERT INTO `web_cate` VALUES('27','化肥','14','0','1');
INSERT INTO `web_cate` VALUES('28','种子','14','0','1');
INSERT INTO `web_cate` VALUES('29','田园规划','0','8','1');
INSERT INTO `web_cate` VALUES('30','休闲农庄','29','1','1');
INSERT INTO `web_cate` VALUES('31','乡村度假地','29','2','1');
INSERT INTO `web_cate` VALUES('32','生态农庄','29','3','1');
INSERT INTO `web_cate` VALUES('33','生鲜','0','0','1');
INSERT INTO `web_cate` VALUES('34','其他','0','9','1');
INSERT INTO `web_cate` VALUES('35','田园观光','4','1','1');
INSERT INTO `web_cate` VALUES('36','海景观光','4','2','1');
INSERT INTO `web_cate` VALUES('37','农家小庄','4','3','1');
INSERT INTO `web_cate` VALUES('38','山景乡情','4','4','1');
INSERT INTO `web_cate` VALUES('39','水果','33','1','1');
INSERT INTO `web_cate` VALUES('40','蔬菜','33','2','1');
INSERT INTO `web_cate` VALUES('41','鸡蛋','33','3','1');
INSERT INTO `web_cate` VALUES('42','肉','33','4','1');
INSERT INTO `web_cate` VALUES('43','苹果','39','1','1');
INSERT INTO `web_cate` VALUES('44','橘子','39','2','1');
INSERT INTO `web_cate` VALUES('45','白菜','40','3','1');
INSERT INTO `web_cate` VALUES('46','西瓜','39','3','1');
INSERT INTO `web_cate` VALUES('47','西红柿','40','1','1');
INSERT INTO `web_cate` VALUES('48','冬瓜','40','2','1');
INSERT INTO `web_cate` VALUES('49','土鸡蛋','41','1','1');
INSERT INTO `web_cate` VALUES('50','鹌鹑蛋','41','2','1');
INSERT INTO `web_cate` VALUES('51','草莓','2','1','1');
INSERT INTO `web_cate` VALUES('53','桃子','2','3','1');
INSERT INTO `web_cate` VALUES('52','樱桃','2','2','1');
INSERT INTO `web_cate` VALUES('54','油桃','53','1','1');
INSERT INTO `web_cate` VALUES('55','毛桃','53','2','1');
INSERT INTO `web_cate` VALUES('56','钓鱼','2','4','1');
INSERT INTO `web_cate` VALUES('57','猕猴桃','39','4','1');
--
-- 表的结构web_cate_shop
--

DROP TABLE IF EXISTS `web_cate_shop`;
CREATE TABLE `web_cate_shop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_bin NOT NULL,
  `parent` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='商铺类目';

--
-- 转存表中的数据 web_cate_shop
--

INSERT INTO `web_cate_shop` VALUES('1','122','生鲜1','0','0','1478583892');
INSERT INTO `web_cate_shop` VALUES('2','122','水果','1','0','1478589574');
INSERT INTO `web_cate_shop` VALUES('4','122','采摘','2','0','1478669413');
INSERT INTO `web_cate_shop` VALUES('5','122','士大夫','0','0','1478670396');
INSERT INTO `web_cate_shop` VALUES('6','122','士大夫','5','0','1478671491');
--
-- 表的结构web_com_img
--

DROP TABLE IF EXISTS `web_com_img`;
CREATE TABLE `web_com_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL COMMENT '评论id',
  `thumb` varchar(150) NOT NULL,
  `sort` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='评论图片表';

--
-- 转存表中的数据 web_com_img
--

INSERT INTO `web_com_img` VALUES('1','2','/static/uploadfile/2016/1214/20161214095610950_real.jpg','0');
INSERT INTO `web_com_img` VALUES('2','3','/static/uploadfile/2016/1214/20161214095938351_real.jpg','0');
--
-- 表的结构web_config
--

DROP TABLE IF EXISTS `web_config`;
CREATE TABLE `web_config` (
  `id` int(11) NOT NULL,
  `sitename` varchar(50) COLLATE utf8_bin NOT NULL,
  `sitedsp` varchar(200) COLLATE utf8_bin NOT NULL,
  `keywords` varchar(200) COLLATE utf8_bin NOT NULL,
  `logo` varchar(100) COLLATE utf8_bin NOT NULL,
  `welcome` varchar(100) COLLATE utf8_bin NOT NULL,
  `search` varchar(100) COLLATE utf8_bin NOT NULL,
  `tag` varchar(200) COLLATE utf8_bin NOT NULL,
  `meta` varchar(500) COLLATE utf8_bin NOT NULL,
  `wxname` varchar(50) COLLATE utf8_bin NOT NULL,
  `wxqr` varchar(100) COLLATE utf8_bin NOT NULL,
  `agreement` text COLLATE utf8_bin NOT NULL,
  `bond` decimal(10,2) NOT NULL DEFAULT '1000.00',
  `join` int(11) NOT NULL DEFAULT '1',
  `tel` varchar(30) COLLATE utf8_bin NOT NULL,
  `icp` text COLLATE utf8_bin NOT NULL,
  `police` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 web_config
--

INSERT INTO `web_config` VALUES('1','农产品商城','农产品商城2','农产品商城1','/static/uploadfile/2016/1230/103951350_real.jpg','欢迎访问农产品商城！','农产品商城','九块九包邮/九块九包邮/九块九包邮/九块九包邮','<meta name=\"baidu-site-verification\" content=\"EoYWKuMkrz\" />\r\n<meta name=\"baidu-site-verification\" content=\"EoYWKuMkrz\" />','1000','/static/uploadfile/2016/0830/112515611_real.jpg','“我买网”服务条款\r\n \r\n欢迎访问“我买网”！请在注册和接受我们服务前仔细阅读以下条款。您接受以下条款后方可接受“我买网”的服务。同时，“我买网”上张贴了“我买网”的相关政策，如付款方式、送货方式、验收政策、退换货政策、相应时段的促销政策等，这些内容构成了本《“我买网”服务条款》的一部分，也请您仔细阅读。为便利本服务条款叙述，以下也以“我们”代指“我买网”。\r\n \r\n一、服务基本前提\r\n \r\n我们的服务是通过互联网提供的，因此，您必须：\r\n \r\n（1）自行配备上网的所需设备，包括个人电脑、调制解调器或其它必备上网装置；\r\n（2）自行负担个人上网所支付的与此服务有关的网络费用及其他相关费用。\r\n \r\n同时，为了准确优质地向您提供服务，请确保：\r\n \r\n      （1）注册资料的真实、准确、详尽；\r\n      （2）注册信息如有变更，请及时更新。\r\n \r\n二、注册信息的保管和使用\r\n \r\n   您提供的注册信息，我们将按照法律和相关规定，采取技术和制度的手段为您妥善保管。除非获得您的授权或者按照法律及其程序要求进行透露外，我们将保证您个人信息的安全。\r\n \r\n   我们承诺仅根据“我买网”服务的目的使用您的个人信息。服务目的包括但不限于交易确认、客户回访、政策更新、发送促销信息等，除此之外，我们将对您的个人信息保密。如您认为我们超越了正常服务范畴使用了您的个人信息，请立即与客服中心联系，我们将核实纠正。\r\n \r\n三、政策发布和本服务条款变更\r\n \r\n如果我们发布新的服务政策，或者我们的服务政策或本服务条款有任何变更，我们将在“我买网”上以通知、公告或更改的方式进行，请您随时关注。\r\n \r\n四、账户和密码\r\n \r\n使用“我买网”过程中，您须保管好您的个人账户并对他人使用您的个人计算机作出限制。如果因为您个人管理不善造成账户（包括注册账户和密码、我买卡账户和密码等）被复制或被盗用出现的损失，应由您自己承担。同时，通过您的个人账户在”我买网”上发生的所有活动产生的责任，应由您承担。\r\n \r\n五、交易限制\r\n \r\n“我买网”的部分商品（如酒类）限制未成年人购买。如果我们发现以上情况，我们有权采取取消订单、冻结、关闭账户等措施。\r\n \r\n六、善意交易\r\n \r\n目前，“我买网”是一种B TO C （直接面向最终消费者）的商业模式，我们仅接受个人的消费订单，不接受商家（包括但不限于个人商户、经销商等）的订单，如有证据证明或者我们有理由相信订单来自商家（包括但不限于个人商户、经销商等），我们有权采取取消订单、冻结或关闭账户等措施，给我们造成损失的，我们保留追究责任的权利。\r\n \r\n原则上，一个人只允许在“我买网”拥有一个有效账户，如有证据证明或者我们有理由相信您存在恶意注册多个账户的情形，我们有权采取取消订单、冻结或关闭账户等措施，给我们造成损失的，我们保留追究责任的权利。\r\n \r\n如果您无正当理由多次拒收货物，则我们也有权取消您以后的订单。情形恶劣的，我们有权采取冻结、关闭账户的措施，并保留追究赔偿责任的权利。\r\n \r\n如我们发现您有其他违反本服务条款的行为，或者我们认为您存在恶意交易或不正常交易情形，我们有权采取取消订单、冻结或关闭账户等措施，给我们造成损失的，我们保留追究责任的权利。\r\n \r\n七、商品价格\r\n \r\n“我买网”上商品的价格存在随时变化的可能，最终成交价以订单被确认时的价格为准。如果在您点击“提交订单”按钮前我们的定价发生变化的，则价格以变化后的为准；如果在您点击“提交订单”按钮后我们的定价发生变化的，则价格以变化前的为准。但价格信息本身存在错误的除外。\r\n \r\n八、订单\r\n \r\n请在购买前仔细核实您所购买的产品的信息并提交订单，订单提交后系统将自动发送一封确认邮件。此后我们的工作人员将对您的订单进行审核并在通过审核后安排配送。\r\n \r\n“我买网”上的信息（包括但不限于价格、商品描述等），我们虽然尽力保证其准确，但也可能因人员操作或者系统问题产生错误，在此情况下我们将按正确的信息和您进行确认修改，您可以取消订单或者按照正确的信息与我们进行交易。给您带来的不便敬请谅解。\r\n \r\n如果您在一份订单里订购了多种商品并且我们只给您发出了其中一部分商品，那么请联系我们客服中心，我们将向您退还该部分款项或者向您补足剩余商品。\r\n \r\n当您（或代为签收人）签收了所购买的商品时，该商品的毁损和灭失风险即转移到您这一方。\r\n \r\n九、发货和收货\r\n \r\n送货范围已经张贴在“我买网”，请您仔细阅读并在每次下订单前再次进行确认，确保您提交的送货地址属于该范围之内，对于超出该范围的订购或配送要求，属于无效订单，我们有权拒绝。\r\n \r\n在提交订单前，请您再次确认您的配送地址，如果因为您地址填写失误造成货物重复配送，我们有权按照实际配送次数收取物流费用。\r\n \r\n收货人可以为您本人也可以为本人以外的其他人。我们将按照通过审核后的订单上所述的配送地址、收货人姓名和电话进行配送。如果收货人在配送过程中要求变更接收地址的，我们视同已经过您（即订货人）的同意。\r\n原则上收货人应当亲自接收，特殊情况（同时订单金额应在人民币2000元以下），收货人可以与客服中心联系申请由他人代为签收。如果您的配送地点属于办公区域，则前台人员代为签收视为已经经过您的同意。注：大额订单（大于等于人民币2000 元）我们有权要求收货人出示身份证。\r\n \r\n我们尽量将送货时间控制在1-3天，如遇不可抗力因素，包括但不限于以下四种情况：⑴自然灾害。如地震、台风、洪水、旱灾、海啸等。⑵政府行为。主要是指当事人在订立合同以后，政府当局颁布新政策、法律和行政措施而导致合同不能履行。⑶社会异常事件。如战争、罢工、骚乱、交通管制等。（4）恶劣天气所导致无法或难以正常送货。我们有权延迟送货时间。\r\n  \r\n十、网站评论及其他内容\r\n \r\n您可以在“我买网”上发布评论及其他内容，但是该评论及其他内容必须遵守相关法律法规，不可以发布包含色情、诽谤、威胁、侵犯隐私、侵犯知识产权、恶意中伤我们、病毒、反动宣传、商业广告或其他伤害第三方内容的信息。您也不可以使用虚假、冒充他人或其他方的信息注册“我买网”后发布评论或其他内容。以上您如有违反，我们有权编辑或删除以上内容，并保留追究您法律责任的权利。\r\n \r\n十一、知识产权\r\n \r\n“我买网”上的所有内容，如商标、文字、图片、标识、广告都是我们或者其内容提供者的排他性财产，您不可以未经授权擅自使用，同时，这些内容不可以被用于任何可能引起消费者对我们的服务引起混淆或者贬低的商品或者服务上。\r\n \r\n未经我们书面同意，您不可以用任何方式对“我买网”网站内容进行修改，也不可复制、下载“我买网”网页内容、数据、信息进行转售或商业利用。经我们书面同意，您将被授予有限的、可撤销的和非独家的权利建立连接到“我买网”主页的超链接，但这个链接不能以虚假、误导、贬低或其他方式侵害我们的商品和服务。\r\n \r\n十二、  适用性及责任限制\r\n \r\n除非法律规定或者“我买网”上明文承诺，我们将不对我们提供的商品的适用性或满足您特定需求和目的进行任何明示或者默示的担保。请在购买前确认好您的需求，同时仔细阅读商品说明。\r\n \r\n如果因为不可以抗力、您或我们的计算机系统故障或者遭受黑客攻击造成的交易无法完成或者损失，我们不承担责任。\r\n \r\n 十三、   关于跨境购的说明\r\n \r\n根据海关总署的相关规定，跨境购订单必须以合理自用为原则，并且需核实收件人真实信息，请您提供身份证号码进行入境申报；跨境购商品属于境外购买行为 ，因此无法为您提供发票；跨境购产品符合海外质量标准,与中国标准可能有所差异;因发货流程特殊性，订单支付完成后，若产品无质量问题，不支持七天无理由退换货，不支持修改和取消订单。\r\n \r\n十四、   其他\r\n \r\n本服务条款的订立、执行、解释及争议解决均适用中华人民共和国法律（不包括香港、澳门、台湾地区）。本服务条款具有可分性，部分无效不影响其它部分效力。\r\n \r\n如果您是我们的注册用户，本服务条款将对您持续有效，有效期至您注销或者被关闭账户后，但知识产权相关条款在此后继续有效。\r\n \r\n您和我们如有争议，应先友好协商解决，协商不成，应提交北京仲裁委员会仲裁。\r\n \r\n \r\n \r\n联系我们：\r\n \r\n客服电话：400-005-5678（仅收市话费）\r\n工作时间：周一至周日9:00-18:00 \r\n地址：北京市建国门内大街8号中粮广场\r\n邮编：100005\r\n团购电话：010-85001837\r\n客服邮箱：service@womai.com\r\n投诉邮箱：tousu@womai.com\r\n(您可在邮件中注明您的我买网注册账户或需要查询的订单号，以便我买网为您提供更好的服务)','1000.00','1','4008-000-917','沪ICP备09008015号','京公网安备 11010502022386号');
--
-- 表的结构web_data_order
--

DROP TABLE IF EXISTS `web_data_order`;
CREATE TABLE `web_data_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no` varchar(30) COLLATE utf8_bin NOT NULL,
  `userid` int(11) NOT NULL,
  `sta` int(11) NOT NULL DEFAULT '0',
  `from` int(11) NOT NULL DEFAULT '1' COMMENT '1支付宝；2微信',
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='订单';

--
-- 转存表中的数据 web_data_order
--

--
-- 表的结构web_feedback
--

DROP TABLE IF EXISTS `web_feedback`;
CREATE TABLE `web_feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  `title` varchar(100) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `reply` varchar(500) COLLATE utf8_bin NOT NULL,
  `replytime` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='反馈建议';

--
-- 转存表中的数据 web_feedback
--

INSERT INTO `web_feedback` VALUES('1','123','0','测试一下呵呵','呵呵呵呵呵呵呵呵呵呵呵呵呵呵','哈哈哈','1481255581','1477529439','1');
INSERT INTO `web_feedback` VALUES('2','123','0','测试','受到广泛山豆根山豆根','','0','1477970456','0');
--
-- 表的结构web_links
--

DROP TABLE IF EXISTS `web_links`;
CREATE TABLE `web_links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL DEFAULT '0',
  `title` varchar(50) COLLATE utf8_bin NOT NULL,
  `linkurl` varchar(200) COLLATE utf8_bin NOT NULL,
  `addtime` int(11) NOT NULL,
  `visible` int(11) NOT NULL DEFAULT '0',
  `isshop` int(11) NOT NULL DEFAULT '0',
  `pos` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='友情链接';

--
-- 转存表中的数据 web_links
--

INSERT INTO `web_links` VALUES('1','0','全影网','http://www.7192.com','1472523527','1','0','1');
INSERT INTO `web_links` VALUES('2','0','全影人才网','http://hr.7192.com','1472523558','1','0','2');
--
-- 表的结构web_msg
--

DROP TABLE IF EXISTS `web_msg`;
CREATE TABLE `web_msg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '0' COMMENT '0系统消息；2私信',
  `title` varchar(200) COLLATE utf8_bin NOT NULL,
  `sta` int(11) NOT NULL DEFAULT '0' COMMENT '是否查看0未查看；1已查看；2已删除',
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='系统消息、私信表';

--
-- 转存表中的数据 web_msg
--

--
-- 表的结构web_news
--

DROP TABLE IF EXISTS `web_news`;
CREATE TABLE `web_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_bin NOT NULL,
  `cateid` int(11) NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `addtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 web_news
--

INSERT INTO `web_news` VALUES('6','联系客服','5','<a href=\"http://mall.com/help-7.html\">联系客服</a>','1','1480995463');
INSERT INTO `web_news` VALUES('5','会员政策','5','<a href=\"http://mall.com/help-3.html\">会员政策</a>','1','1480995450');
INSERT INTO `web_news` VALUES('4','购物流程','5','<a href=\"http://mall.com/help-2.html\">购物流程</a><a href=\"http://mall.com/help-2.html\">购物流程</a><a href=\"http://mall.com/help-2.html\">购物流程</a><a href=\"http://mall.com/help-2.html\">购物流程</a>','1','1480995415');
INSERT INTO `web_news` VALUES('7','积分政策','5','<a href=\"http://mall.com/help-4.html\">积分政策</a>','1','1480995478');
INSERT INTO `web_news` VALUES('8','加入我们','5','<a href=\"http://mall.com/help-30.html\">加入我们</a>','1','1480995490');
INSERT INTO `web_news` VALUES('9','配送时间','7','<a href=\"http://mall.com/help-10.html\">配送时间</a>','1','1480995744');
INSERT INTO `web_news` VALUES('10','配送范围','7','<a href=\"http://mall.com/help-11.html\">配送范围</a>','1','1480995758');
INSERT INTO `web_news` VALUES('11','配送收费标准','7','<a href=\"http://mall.com/help-12.html\">配送收费标准</a>','1','1480995793');
INSERT INTO `web_news` VALUES('12','在线支付','4','','1','1480995910');
INSERT INTO `web_news` VALUES('13','其他支付方式','4','<a href=\"http://mall.com/help-15.html\">其他支付方式</a>','1','1480995923');
INSERT INTO `web_news` VALUES('14','优惠券使用','4','<a href=\"http://mall.com/help-21.html\">优惠券使用</a>','1','1480995936');
INSERT INTO `web_news` VALUES('15','验货与拒收政策','6','<a href=\"http://mall.com/help-17.html\">验货与拒收政策</a>','1','1480996055');
INSERT INTO `web_news` VALUES('16','退换货政策','6','<a href=\"http://mall.com/help-18.html\">退换货政策</a>','1','1480996069');
INSERT INTO `web_news` VALUES('17','退换货流程','6','退换货流程<br />\r\n1.如果您收的商品有质量问题，在48小时内,您可以通过官网退换货通道/App退换货通道/电话联系客服处理。(客服电话：400-000-7788)。<br />\r\n2.易果“客服专员”会根据您反映的情况，结合公司其他相关部门给于初步鉴定，然后再与您电话确定退换货时间和方式。<br />\r\n3.退货发生时，由于客户原因造成的退货，我们只退回商品的货款金额，原订单如有相应运费恕不退还，如果是上门安排退货，还需加收送货费；如因易果原因或商品质量问题而造成的退货，易果将退还您商品的货款金额及相应运费，并提供上门服务。<br />\r\n4.退货需要退回发票及易果配送单（客户联），请于购买商品后妥善保管购物发票及配送单，如因客户原因无法退回发票或易果配送单（客户联）的，将可能导致无法进行退货，因此而产生的不利后果，将会由您承担。<br />\r\n<br />','1','1480996080');
INSERT INTO `web_news` VALUES('18','退款流程','6','<a href=\"http://mall.com/help-25.html\">退款流程</a>','1','1480996093');
INSERT INTO `web_news` VALUES('19','常见问题','8','常见问题<br />','1','1481004928');
INSERT INTO `web_news` VALUES('20','自助服务','8','自助服务','1','1481004942');
INSERT INTO `web_news` VALUES('21','新手指南','8','新手指南','1','1481004955');
INSERT INTO `web_news` VALUES('22','联系客服','8','<img src=\"/static/uploadfile/2016/1230/112848277_ke.jpg\" alt=\"\" /><span style=\"font-family:Microsoft YaHei;\">联系客服</span><span style=\"font-family:Microsoft YaHei;\"></span>','1','1481004970');
--
-- 表的结构web_news_cate
--

DROP TABLE IF EXISTS `web_news_cate`;
CREATE TABLE `web_news_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 web_news_cate
--

INSERT INTO `web_news_cate` VALUES('1','最新活动');
INSERT INTO `web_news_cate` VALUES('4','支付方式');
INSERT INTO `web_news_cate` VALUES('5','新手指南');
INSERT INTO `web_news_cate` VALUES('6','售后服务');
INSERT INTO `web_news_cate` VALUES('7','配送方式');
INSERT INTO `web_news_cate` VALUES('8','客户服务');
--
-- 表的结构web_notice
--

DROP TABLE IF EXISTS `web_notice`;
CREATE TABLE `web_notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(80) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `time` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='公告';

--
-- 转存表中的数据 web_notice
--

INSERT INTO `web_notice` VALUES('4','我们的商城上线了','我们的商城上线了我们的商城上线了我们的商城上线了我们的商城上线了','1472627430','1');
INSERT INTO `web_notice` VALUES('5','祝大家节日快乐','祝大家节日快乐','1472627450','1');
--
-- 表的结构web_order
--

DROP TABLE IF EXISTS `web_order`;
CREATE TABLE `web_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '订单id',
  `userid` int(11) NOT NULL COMMENT '对应的用户uid',
  `no` char(20) COLLATE utf8_bin NOT NULL COMMENT '订单号',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '订单状态，1：新订单，待支付，2：已支付，待发货，3：已发货，4：已签收；5：已退货；-1：已删除',
  `fee` decimal(10,2) NOT NULL COMMENT '订单总金额',
  `trans_fee` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `quan` decimal(10,2) NOT NULL,
  `quanid` int(11) NOT NULL,
  `addtime` int(11) NOT NULL COMMENT '生成在线订单时间',
  `updatetime` int(11) NOT NULL COMMENT '更新时间，支付完成时，订单评价时或者订单删除时都会更新',
  `exno` varchar(30) COLLATE utf8_bin NOT NULL COMMENT '快递单号',
  `rate` int(11) NOT NULL DEFAULT '0' COMMENT '是否评价过：0未评价；1已评价',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='商品订单表';

--
-- 转存表中的数据 web_order
--

INSERT INTO `web_order` VALUES('1','123','MO161214095003497','4','99.60','45.00','0.00','0.00','0','1481680202','1481680202','','0');
INSERT INTO `web_order` VALUES('3','123','MO161215164404909','1','54.10','15.00','0.50','0.00','0','1481791434','1481791434','','0');
INSERT INTO `web_order` VALUES('4','123','MO161215173344626','1','29.30','10.00','0.50','0.00','0','1481794423','1481794423','','0');
INSERT INTO `web_order` VALUES('5','121','MO161230113448522','1','345.00','120.00','0.00','0.00','0','1483068888','1483068888','','0');
--
-- 表的结构web_order_detail
--

DROP TABLE IF EXISTS `web_order_detail`;
CREATE TABLE `web_order_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderid` int(11) NOT NULL,
  `gid` int(11) NOT NULL,
  `fee` decimal(10,2) NOT NULL,
  `count` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 web_order_detail
--

--
-- 表的结构web_order_extra
--

DROP TABLE IF EXISTS `web_order_extra`;
CREATE TABLE `web_order_extra` (
  `id` int(11) NOT NULL COMMENT '订单id',
  `extra` text COLLATE utf8_bin NOT NULL COMMENT '额外信息，用户提交订单时信息',
  `bill` text COLLATE utf8_bin NOT NULL COMMENT '发票信息',
  `memo` text COLLATE utf8_bin NOT NULL COMMENT '客户备注',
  `demo` text COLLATE utf8_bin NOT NULL COMMENT '备注信息，商家备注字段',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='订单拓展表';

--
-- 转存表中的数据 web_order_extra
--

INSERT INTO `web_order_extra` VALUES('3','a:1:{s:7:\"address\";a:5:{s:2:\"id\";s:2:\"32\";s:6:\"userid\";s:3:\"123\";s:4:\"sort\";s:1:\"0\";s:7:\"addtime\";s:10:\"1479362849\";s:7:\"address\";s:169:\"a:6:{s:7:\"linkman\";s:6:\"测试\";s:6:\"areaid\";i:1431;s:7:\"address\";s:27:\"说过的时代感时代感\";s:5:\"phone\";s:11:\"13455556666\";s:4:\"tell\";s:0:\"\";s:4:\"mail\";s:0:\"\";}\";}}','a:4:{s:6:\"bill_1\";i:-1;s:6:\"bill_2\";i:-1;s:6:\"bill_3\";i:1;s:6:\"bill_4\";s:6:\"个人\";}','a:1:{i:121;s:0:\"\";}','');
INSERT INTO `web_order_extra` VALUES('4','a:1:{s:7:\"address\";a:5:{s:2:\"id\";s:2:\"32\";s:6:\"userid\";s:3:\"123\";s:4:\"sort\";s:1:\"0\";s:7:\"addtime\";s:10:\"1479362849\";s:7:\"address\";s:169:\"a:6:{s:7:\"linkman\";s:6:\"测试\";s:6:\"areaid\";i:1431;s:7:\"address\";s:27:\"说过的时代感时代感\";s:5:\"phone\";s:11:\"13455556666\";s:4:\"tell\";s:0:\"\";s:4:\"mail\";s:0:\"\";}\";}}','a:4:{s:6:\"bill_1\";i:-1;s:6:\"bill_2\";i:-1;s:6:\"bill_3\";i:1;s:6:\"bill_4\";s:6:\"个人\";}','a:1:{i:121;s:0:\"\";}','');
INSERT INTO `web_order_extra` VALUES('5','a:1:{s:7:\"address\";a:5:{s:2:\"id\";s:2:\"27\";s:6:\"userid\";s:3:\"121\";s:4:\"sort\";s:1:\"0\";s:7:\"addtime\";s:10:\"1477459479\";s:7:\"address\";s:176:\"a:6:{s:7:\"linkman\";s:6:\"测试\";s:6:\"areaid\";i:21;s:7:\"address\";s:36:\"测试测试测试测试测试测试\";s:5:\"phone\";s:11:\"13664456666\";s:4:\"tell\";s:0:\"\";s:4:\"mail\";s:0:\"\";}\";}}','a:4:{s:6:\"bill_1\";i:-1;s:6:\"bill_2\";i:-1;s:6:\"bill_3\";i:1;s:6:\"bill_4\";s:6:\"个人\";}','a:1:{i:121;s:0:\"\";}','');
--
-- 表的结构web_quan
--

DROP TABLE IF EXISTS `web_quan`;
CREATE TABLE `web_quan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL DEFAULT '0' COMMENT '0商铺发布；1平台发布',
  `shopid` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_bin NOT NULL,
  `fee` decimal(10,2) NOT NULL,
  `beyond` decimal(10,2) NOT NULL DEFAULT '0.00',
  `stime` int(11) NOT NULL,
  `etime` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '状态：0未使用；1已使用；',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='优惠券';

--
-- 转存表中的数据 web_quan
--

INSERT INTO `web_quan` VALUES('1','0','122','立减10元','10.00','0.00','1477966717','1480472318','0','0');
INSERT INTO `web_quan` VALUES('2','0','122','100元优惠券','100.00','500.00','1477968052','1483152053','0','0');
INSERT INTO `web_quan` VALUES('3','0','122','立减5元','5.00','50.00','1479398400','1480435200','1479439552','0');
--
-- 表的结构web_recharge_log
--

DROP TABLE IF EXISTS `web_recharge_log`;
CREATE TABLE `web_recharge_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no` varchar(20) COLLATE utf8_bin NOT NULL,
  `userid` int(11) NOT NULL,
  `account` decimal(10,2) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='客户充值记录';

--
-- 转存表中的数据 web_recharge_log
--

--
-- 表的结构web_return
--

DROP TABLE IF EXISTS `web_return`;
CREATE TABLE `web_return` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `oid` int(11) NOT NULL,
  `fee` decimal(10,2) NOT NULL,
  `type` int(11) NOT NULL,
  `reason` varchar(100) COLLATE utf8_bin NOT NULL,
  `extra` varchar(100) COLLATE utf8_bin NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='申请退款信息表';

--
-- 转存表中的数据 web_return
--

INSERT INTO `web_return` VALUES('1','123','0','0.00','1','0','asfaf','1478242249');
--
-- 表的结构web_sales
--

DROP TABLE IF EXISTS `web_sales`;
CREATE TABLE `web_sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `gid` int(11) NOT NULL,
  `oid` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `extra` varchar(200) COLLATE utf8_bin NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='商品售后服务信息表';

--
-- 转存表中的数据 web_sales
--

INSERT INTO `web_sales` VALUES('1','123','4','0','1','sdgsd','1478329737');
--
-- 表的结构web_score_config
--

DROP TABLE IF EXISTS `web_score_config`;
CREATE TABLE `web_score_config` (
  `userid` int(11) NOT NULL,
  `yuan` int(11) NOT NULL,
  `fan` int(11) NOT NULL,
  `login` int(11) NOT NULL,
  `invite` int(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='积分兑换比率';

--
-- 转存表中的数据 web_score_config
--

INSERT INTO `web_score_config` VALUES('121','100','1','10','100');
--
-- 表的结构web_score_log
--

DROP TABLE IF EXISTS `web_score_log`;
CREATE TABLE `web_score_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `type` int(11) NOT NULL COMMENT '积分类型：1注册；2购买；3推荐；',
  `way` int(11) NOT NULL DEFAULT '1' COMMENT '1加；2扣',
  `time` int(11) NOT NULL,
  `extra` varchar(200) COLLATE utf8_bin NOT NULL COMMENT '备注信息',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='积分变动记录表';

--
-- 转存表中的数据 web_score_log
--

INSERT INTO `web_score_log` VALUES('1','123','50','2','1','1481794423','');
--
-- 表的结构web_shop
--

DROP TABLE IF EXISTS `web_shop`;
CREATE TABLE `web_shop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_bin NOT NULL,
  `des` varchar(300) COLLATE utf8_bin NOT NULL,
  `notice` varchar(200) COLLATE utf8_bin NOT NULL,
  `linkman` varchar(50) COLLATE utf8_bin NOT NULL,
  `tel` varchar(20) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `logo` varchar(200) COLLATE utf8_bin NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '状态：0未审核；1正常；-1已被删除',
  `addtime` int(11) NOT NULL,
  `address` varchar(200) COLLATE utf8_bin NOT NULL,
  `lng` varchar(30) COLLATE utf8_bin NOT NULL,
  `lat` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='商铺基本资料';

--
-- 转存表中的数据 web_shop
--

INSERT INTO `web_shop` VALUES('2','122','水果专卖','水果专卖水果专卖水果专卖水果专卖','水果专卖水果专卖水果专卖','测试','13455556666','43634563@qq.com','/static/uploadfile/2016/1130/105025811_real.jpg','1','1472270360','水果专卖水果专卖水果专卖水果专卖水果专卖','119.080219','36.739239');
--
-- 表的结构web_shop_accout
--

DROP TABLE IF EXISTS `web_shop_accout`;
CREATE TABLE `web_shop_accout` (
  `userid` int(11) NOT NULL COMMENT '用户userid',
  `nickname` varchar(20) COLLATE utf8_bin NOT NULL COMMENT '昵称',
  `score` int(11) NOT NULL COMMENT '当前级别经验值',
  `img` varchar(500) COLLATE utf8_bin NOT NULL,
  `sex` tinyint(3) NOT NULL DEFAULT '3' COMMENT '0男1女3保密',
  `phone` varchar(11) COLLATE utf8_bin NOT NULL,
  `qq` varchar(14) COLLATE utf8_bin NOT NULL,
  `birth` int(11) NOT NULL,
  `favor` varchar(150) COLLATE utf8_bin NOT NULL,
  `realname` varchar(10) COLLATE utf8_bin NOT NULL,
  `areaid` int(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='个人用户基础信息表';

--
-- 转存表中的数据 web_shop_accout
--

INSERT INTO `web_shop_accout` VALUES('123','hell','0','/static/temp/20160906180604516_real.jpg','1','15866524589','498643055','1473264000','哈哈','小菜','1257');
--
-- 表的结构web_shop_address
--

DROP TABLE IF EXISTS `web_shop_address`;
CREATE TABLE `web_shop_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键（MD5）',
  `userid` int(11) NOT NULL COMMENT '用户uid',
  `sort` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否默认，1：默认，0，其他',
  `addtime` int(11) NOT NULL COMMENT '添加时间',
  `address` text COLLATE utf8_bin NOT NULL COMMENT '收货地址相关',
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='个人用户收货地址表';

--
-- 转存表中的数据 web_shop_address
--

INSERT INTO `web_shop_address` VALUES('27','121','0','1477459479','a:6:{s:7:\"linkman\";s:6:\"测试\";s:6:\"areaid\";i:21;s:7:\"address\";s:36:\"测试测试测试测试测试测试\";s:5:\"phone\";s:11:\"13664456666\";s:4:\"tell\";s:0:\"\";s:4:\"mail\";s:0:\"\";}');
INSERT INTO `web_shop_address` VALUES('32','123','0','1479362849','a:6:{s:7:\"linkman\";s:6:\"测试\";s:6:\"areaid\";i:1431;s:7:\"address\";s:27:\"说过的时代感时代感\";s:5:\"phone\";s:11:\"13455556666\";s:4:\"tell\";s:0:\"\";s:4:\"mail\";s:0:\"\";}');
INSERT INTO `web_shop_address` VALUES('33','122','0','1480293153','a:6:{s:7:\"linkman\";s:6:\"测试\";s:6:\"areaid\";i:1429;s:7:\"address\";s:18:\"是法发士大夫\";s:5:\"phone\";s:11:\"13454554544\";s:4:\"tell\";s:0:\"\";s:4:\"mail\";s:0:\"\";}');
--
-- 表的结构web_shop_ads
--

DROP TABLE IF EXISTS `web_shop_ads`;
CREATE TABLE `web_shop_ads` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `thumb` int(11) NOT NULL,
  `link` int(11) NOT NULL,
  `addtime` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='商铺广告位';

--
-- 转存表中的数据 web_shop_ads
--

--
-- 表的结构web_shop_area
--

DROP TABLE IF EXISTS `web_shop_area`;
CREATE TABLE `web_shop_area` (
  `areaid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_bin NOT NULL,
  `style` varchar(35) COLLATE utf8_bin DEFAULT NULL,
  `parentid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `arrparentid` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `child` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `arrchildid` char(250) COLLATE utf8_bin DEFAULT NULL,
  `template` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `listorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `hits` int(10) unsigned DEFAULT '0',
  `code` int(11) NOT NULL DEFAULT '0',
  `py` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`areaid`),
  KEY `parent` (`parentid`),
  KEY `order` (`listorder`),
  KEY `py` (`py`)
) ENGINE=MyISAM AUTO_INCREMENT=3245 DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=FIXED;

--
-- 转存表中的数据 web_shop_area
--

INSERT INTO `web_shop_area` VALUES('1','北京','','0','0','1','3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18','','1','0','110000','beijing');
INSERT INTO `web_shop_area` VALUES('3','东城区','','1','1','0','3','','0','0','110101','dongchengqu');
INSERT INTO `web_shop_area` VALUES('4','西城区','','1','1','0','4','','0','0','110102','xichengqu');
INSERT INTO `web_shop_area` VALUES('5','朝阳区','','1','1','0','5','','0','0','110105','chaoyangqu');
INSERT INTO `web_shop_area` VALUES('6','丰台区','','1','1','0','6','','0','0','110106','fengtaiqu');
INSERT INTO `web_shop_area` VALUES('7','石景山','','1','1','0','7','','0','0','110107','shijingshanqu');
INSERT INTO `web_shop_area` VALUES('8','海淀区','','1','1','0','8','','0','0','110108','haidianqu');
INSERT INTO `web_shop_area` VALUES('9','门头沟','','1','1','0','9','','0','0','110109','mentougouqu');
INSERT INTO `web_shop_area` VALUES('10','房山区','','1','1','0','10','','0','0','110111','fangshanqu');
INSERT INTO `web_shop_area` VALUES('11','通州区','','1','1','0','11','','0','0','110112','tongzhouqu');
INSERT INTO `web_shop_area` VALUES('12','顺义区','','1','1','0','12','','0','0','110113','shunyiqu');
INSERT INTO `web_shop_area` VALUES('13','昌平区','','1','1','0','13','','0','0','110114','changpingqu');
INSERT INTO `web_shop_area` VALUES('14','大兴区','','1','1','0','14','','0','0','110115','daxingqu');
INSERT INTO `web_shop_area` VALUES('15','怀柔区','','1','1','0','15','','0','0','110116','huairouqu');
INSERT INTO `web_shop_area` VALUES('16','平谷区','','1','1','0','16','','0','0','110117','pingguqu');
INSERT INTO `web_shop_area` VALUES('17','密云县','','1','1','0','17','','0','0','110228','miyunxian');
INSERT INTO `web_shop_area` VALUES('18','延庆县','','1','1','0','18','','0','0','110229','yanqingxian');
INSERT INTO `web_shop_area` VALUES('19','天津','','0','0','1','20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36','','2','0','120000','tianjin');
INSERT INTO `web_shop_area` VALUES('20','天津市','','19','19','1','21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36','','0','0','120100','tianjinshiqu');
INSERT INTO `web_shop_area` VALUES('21','和平区','','20','19,20','0','21','','0','0','120101','hepingqu');
INSERT INTO `web_shop_area` VALUES('22','河东区','','20','19,20','0','22','','0','0','120102','hedongqu');
INSERT INTO `web_shop_area` VALUES('23','河西区','','20','19,20','0','23','','0','0','120103','hexiqu');
INSERT INTO `web_shop_area` VALUES('24','南开区','','20','19,20','0','24','','0','0','120104','nankaiqu');
INSERT INTO `web_shop_area` VALUES('25','河北区','','20','19,20','0','25','','0','0','120105','hebeiqu');
INSERT INTO `web_shop_area` VALUES('26','红桥区','','20','19,20','0','26','','0','0','120106','hongqiaoqu');
INSERT INTO `web_shop_area` VALUES('27','东丽区','','20','19,20','0','27','','0','0','120110','dongliqu');
INSERT INTO `web_shop_area` VALUES('28','西青区','','20','19,20','0','28','','0','0','120111','xiqingqu');
INSERT INTO `web_shop_area` VALUES('29','津南区','','20','19,20','0','29','','0','0','120112','jinnanqu');
INSERT INTO `web_shop_area` VALUES('30','北辰区','','20','19,20','0','30','','0','0','120113','beichenqu');
INSERT INTO `web_shop_area` VALUES('31','武清区','','20','19,20','0','31','','0','0','120114','wuqingqu');
INSERT INTO `web_shop_area` VALUES('32','宝坻区','','20','19,20','0','32','','0','0','120115','baodiqu');
INSERT INTO `web_shop_area` VALUES('33','滨海','','20','19,20','0','33','','0','0','120116','binhaixinqu');
INSERT INTO `web_shop_area` VALUES('34','宁河县','','20','19,20','0','34','','0','0','120221','ninghexian');
INSERT INTO `web_shop_area` VALUES('35','静海县','','20','19,20','0','35','','0','0','120223','jinghaixian');
INSERT INTO `web_shop_area` VALUES('36','蓟县','','20','19,20','0','36','','0','0','120225','jixian');
INSERT INTO `web_shop_area` VALUES('37','河北','','0','0','1','38,62,77,85,105,125,151,169,181,198,209,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61','','9','0','130000','hebei');
INSERT INTO `web_shop_area` VALUES('38','石家庄','','37','37','1','39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61','','0','0','130100','shijiazhuang');
INSERT INTO `web_shop_area` VALUES('39','长安区','','38','37,38','0','39','','0','0','130102','');
INSERT INTO `web_shop_area` VALUES('40','桥东区','','38','37,38','0','40','','0','0','130103','');
INSERT INTO `web_shop_area` VALUES('41','桥西区','','38','37,38','0','41','','0','0','130104','');
INSERT INTO `web_shop_area` VALUES('42','新华区','','38','37,38','0','42','','0','0','130105','');
INSERT INTO `web_shop_area` VALUES('43','井陉矿区','','38','37,38','0','43','','0','0','130107','');
INSERT INTO `web_shop_area` VALUES('44','裕华区','','38','37,38','0','44','','0','0','130108','');
INSERT INTO `web_shop_area` VALUES('45','井陉县','','38','37,38','0','45','','0','0','130121','');
INSERT INTO `web_shop_area` VALUES('46','正定县','','38','37,38','0','46','','0','0','130123','');
INSERT INTO `web_shop_area` VALUES('47','栾城县','','38','37,38','0','47','','0','0','130124','');
INSERT INTO `web_shop_area` VALUES('48','行唐县','','38','37,38','0','48','','0','0','130125','');
INSERT INTO `web_shop_area` VALUES('49','灵寿县','','38','37,38','0','49','','0','0','130126','');
INSERT INTO `web_shop_area` VALUES('50','高邑县','','38','37,38','0','50','','0','0','130127','');
INSERT INTO `web_shop_area` VALUES('51','深泽县','','38','37,38','0','51','','0','0','130128','');
INSERT INTO `web_shop_area` VALUES('52','赞皇县','','38','37,38','0','52','','0','0','130129','');
INSERT INTO `web_shop_area` VALUES('53','无极县','','38','37,38','0','53','','0','0','130130','');
INSERT INTO `web_shop_area` VALUES('54','平山县','','38','37,38','0','54','','0','0','130131','');
INSERT INTO `web_shop_area` VALUES('55','元氏县','','38','37,38','0','55','','0','0','130132','');
INSERT INTO `web_shop_area` VALUES('56','赵县','','38','37,38','0','56','','0','0','130133','');
INSERT INTO `web_shop_area` VALUES('57','辛集市','','38','37,38','0','57','','0','0','130181','');
INSERT INTO `web_shop_area` VALUES('58','藁城市','','38','37,38','0','58','','0','0','130182','');
INSERT INTO `web_shop_area` VALUES('59','晋州市','','38','37,38','0','59','','0','0','130183','');
INSERT INTO `web_shop_area` VALUES('60','新乐市','','38','37,38','0','60','','0','0','130184','');
INSERT INTO `web_shop_area` VALUES('61','鹿泉市','','38','37,38','0','61','','0','0','130185','');
INSERT INTO `web_shop_area` VALUES('62','唐山市','','37','37','1','63,64,65,66,67,68,69,70,71,72,73,74,75,76','','0','0','130200','tangshan');
INSERT INTO `web_shop_area` VALUES('63','路南区','','62','37,62','0','63','','0','0','130202','');
INSERT INTO `web_shop_area` VALUES('64','路北区','','62','37,62','0','64','','0','0','130203','');
INSERT INTO `web_shop_area` VALUES('65','古冶区','','62','37,62','0','65','','0','0','130204','');
INSERT INTO `web_shop_area` VALUES('66','开平区','','62','37,62','0','66','','0','0','130205','');
INSERT INTO `web_shop_area` VALUES('67','丰南区','','62','37,62','0','67','','0','0','130207','');
INSERT INTO `web_shop_area` VALUES('68','丰润区','','62','37,62','0','68','','0','0','130208','');
INSERT INTO `web_shop_area` VALUES('69','滦县','','62','37,62','0','69','','0','0','130223','');
INSERT INTO `web_shop_area` VALUES('70','滦南县','','62','37,62','0','70','','0','0','130224','');
INSERT INTO `web_shop_area` VALUES('71','乐亭县','','62','37,62','0','71','','0','0','130225','');
INSERT INTO `web_shop_area` VALUES('72','迁西县','','62','37,62','0','72','','0','0','130227','');
INSERT INTO `web_shop_area` VALUES('73','玉田县','','62','37,62','0','73','','0','0','130229','');
INSERT INTO `web_shop_area` VALUES('74','唐海县','','62','37,62','0','74','','0','0','130230','');
INSERT INTO `web_shop_area` VALUES('75','遵化市','','62','37,62','0','75','','0','0','130281','');
INSERT INTO `web_shop_area` VALUES('76','迁安市','','62','37,62','0','76','','0','0','130283','');
INSERT INTO `web_shop_area` VALUES('77','秦皇岛','','37','37','1','78,79,80,81,82,83,84','','0','0','130300','qinhuangdao');
INSERT INTO `web_shop_area` VALUES('78','海港区','','77','37,77','0','78','','0','0','130302','');
INSERT INTO `web_shop_area` VALUES('79','山海关区','','77','37,77','0','79','','0','0','130303','');
INSERT INTO `web_shop_area` VALUES('80','北戴河区','','77','37,77','0','80','','0','0','130304','');
INSERT INTO `web_shop_area` VALUES('81','青龙满族自治县','','77','37,77','0','81','','0','0','130321','');
INSERT INTO `web_shop_area` VALUES('82','昌黎县','','77','37,77','0','82','','0','0','130322','');
INSERT INTO `web_shop_area` VALUES('83','抚宁县','','77','37,77','0','83','','0','0','130323','');
INSERT INTO `web_shop_area` VALUES('84','卢龙县','','77','37,77','0','84','','0','0','130324','');
INSERT INTO `web_shop_area` VALUES('85','邯郸市','','37','37','1','86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104','','0','0','130400','handan');
INSERT INTO `web_shop_area` VALUES('86','邯山区','','85','37,85','0','86','','0','0','130402','');
INSERT INTO `web_shop_area` VALUES('87','丛台区','','85','37,85','0','87','','0','0','130403','');
INSERT INTO `web_shop_area` VALUES('88','复兴区','','85','37,85','0','88','','0','0','130404','');
INSERT INTO `web_shop_area` VALUES('89','峰峰矿区','','85','37,85','0','89','','0','0','130406','');
INSERT INTO `web_shop_area` VALUES('90','邯郸县','','85','37,85','0','90','','0','0','130421','');
INSERT INTO `web_shop_area` VALUES('91','临漳县','','85','37,85','0','91','','0','0','130423','');
INSERT INTO `web_shop_area` VALUES('92','成安县','','85','37,85','0','92','','0','0','130424','');
INSERT INTO `web_shop_area` VALUES('93','大名县','','85','37,85','0','93','','0','0','130425','');
INSERT INTO `web_shop_area` VALUES('94','涉县','','85','37,85','0','94','','0','0','130426','');
INSERT INTO `web_shop_area` VALUES('95','磁县','','85','37,85','0','95','','0','0','130427','');
INSERT INTO `web_shop_area` VALUES('96','肥乡县','','85','37,85','0','96','','0','0','130428','');
INSERT INTO `web_shop_area` VALUES('97','永年县','','85','37,85','0','97','','0','0','130429','');
INSERT INTO `web_shop_area` VALUES('98','邱县','','85','37,85','0','98','','0','0','130430','');
INSERT INTO `web_shop_area` VALUES('99','鸡泽县','','85','37,85','0','99','','0','0','130431','');
INSERT INTO `web_shop_area` VALUES('100','广平县','','85','37,85','0','100','','0','0','130432','');
INSERT INTO `web_shop_area` VALUES('101','馆陶县','','85','37,85','0','101','','0','0','130433','');
INSERT INTO `web_shop_area` VALUES('102','魏县','','85','37,85','0','102','','0','0','130434','');
INSERT INTO `web_shop_area` VALUES('103','曲周县','','85','37,85','0','103','','0','0','130435','');
INSERT INTO `web_shop_area` VALUES('104','武安市','','85','37,85','0','104','','0','0','130481','');
INSERT INTO `web_shop_area` VALUES('105','邢台市','','37','37','1','106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124','','0','0','130500','xingtai');
INSERT INTO `web_shop_area` VALUES('106','桥东区','','105','37,105','0','106','','0','0','130502','');
INSERT INTO `web_shop_area` VALUES('107','桥西区','','105','37,105','0','107','','0','0','130503','');
INSERT INTO `web_shop_area` VALUES('108','邢台县','','105','37,105','0','108','','0','0','130521','');
INSERT INTO `web_shop_area` VALUES('109','临城县','','105','37,105','0','109','','0','0','130522','');
INSERT INTO `web_shop_area` VALUES('110','内丘县','','105','37,105','0','110','','0','0','130523','');
INSERT INTO `web_shop_area` VALUES('111','柏乡县','','105','37,105','0','111','','0','0','130524','');
INSERT INTO `web_shop_area` VALUES('112','隆尧县','','105','37,105','0','112','','0','0','130525','');
INSERT INTO `web_shop_area` VALUES('113','任县','','105','37,105','0','113','','0','0','130526','');
INSERT INTO `web_shop_area` VALUES('114','南和县','','105','37,105','0','114','','0','0','130527','');
INSERT INTO `web_shop_area` VALUES('115','宁晋县','','105','37,105','0','115','','0','0','130528','');
INSERT INTO `web_shop_area` VALUES('116','巨鹿县','','105','37,105','0','116','','0','0','130529','');
INSERT INTO `web_shop_area` VALUES('117','新河县','','105','37,105','0','117','','0','0','130530','');
INSERT INTO `web_shop_area` VALUES('118','广宗县','','105','37,105','0','118','','0','0','130531','');
INSERT INTO `web_shop_area` VALUES('119','平乡县','','105','37,105','0','119','','0','0','130532','');
INSERT INTO `web_shop_area` VALUES('120','威县','','105','37,105','0','120','','0','0','130533','');
INSERT INTO `web_shop_area` VALUES('121','清河县','','105','37,105','0','121','','0','0','130534','');
INSERT INTO `web_shop_area` VALUES('122','临西县','','105','37,105','0','122','','0','0','130535','');
INSERT INTO `web_shop_area` VALUES('123','南宫市','','105','37,105','0','123','','0','0','130581','');
INSERT INTO `web_shop_area` VALUES('124','沙河市','','105','37,105','0','124','','0','0','130582','');
INSERT INTO `web_shop_area` VALUES('125','保定市','','37','37','1','126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150','','0','0','130600','baoding');
INSERT INTO `web_shop_area` VALUES('126','新市区','','125','37,125','0','126','','0','0','130602','');
INSERT INTO `web_shop_area` VALUES('127','北市区','','125','37,125','0','127','','0','0','130603','');
INSERT INTO `web_shop_area` VALUES('128','南市区','','125','37,125','0','128','','0','0','130604','');
INSERT INTO `web_shop_area` VALUES('129','满城县','','125','37,125','0','129','','0','0','130621','');
INSERT INTO `web_shop_area` VALUES('130','清苑县','','125','37,125','0','130','','0','0','130622','');
INSERT INTO `web_shop_area` VALUES('131','涞水县','','125','37,125','0','131','','0','0','130623','');
INSERT INTO `web_shop_area` VALUES('132','阜平县','','125','37,125','0','132','','0','0','130624','');
INSERT INTO `web_shop_area` VALUES('133','徐水县','','125','37,125','0','133','','0','0','130625','');
INSERT INTO `web_shop_area` VALUES('134','定兴县','','125','37,125','0','134','','0','0','130626','');
INSERT INTO `web_shop_area` VALUES('135','唐县','','125','37,125','0','135','','0','0','130627','');
INSERT INTO `web_shop_area` VALUES('136','高阳县','','125','37,125','0','136','','0','0','130628','');
INSERT INTO `web_shop_area` VALUES('137','容城县','','125','37,125','0','137','','0','0','130629','');
INSERT INTO `web_shop_area` VALUES('138','涞源县','','125','37,125','0','138','','0','0','130630','');
INSERT INTO `web_shop_area` VALUES('139','望都县','','125','37,125','0','139','','0','0','130631','');
INSERT INTO `web_shop_area` VALUES('140','安新县','','125','37,125','0','140','','0','0','130632','');
INSERT INTO `web_shop_area` VALUES('141','易县','','125','37,125','0','141','','0','0','130633','');
INSERT INTO `web_shop_area` VALUES('142','曲阳县','','125','37,125','0','142','','0','0','130634','');
INSERT INTO `web_shop_area` VALUES('143','蠡县','','125','37,125','0','143','','0','0','130635','');
INSERT INTO `web_shop_area` VALUES('144','顺平县','','125','37,125','0','144','','0','0','130636','');
INSERT INTO `web_shop_area` VALUES('145','博野县','','125','37,125','0','145','','0','0','130637','');
INSERT INTO `web_shop_area` VALUES('146','雄县','','125','37,125','0','146','','0','0','130638','');
INSERT INTO `web_shop_area` VALUES('147','涿州市','','125','37,125','0','147','','0','0','130681','');
INSERT INTO `web_shop_area` VALUES('148','定州市','','125','37,125','0','148','','0','0','130682','');
INSERT INTO `web_shop_area` VALUES('149','安国市','','125','37,125','0','149','','0','0','130683','');
INSERT INTO `web_shop_area` VALUES('150','高碑店市','','125','37,125','0','150','','0','0','130684','');
INSERT INTO `web_shop_area` VALUES('151','张家口','','37','37','1','152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168','','0','0','130700','zhangjiakou');
INSERT INTO `web_shop_area` VALUES('152','桥东区','','151','37,151','0','152','','0','0','130702','');
INSERT INTO `web_shop_area` VALUES('153','桥西区','','151','37,151','0','153','','0','0','130703','');
INSERT INTO `web_shop_area` VALUES('154','宣化区','','151','37,151','0','154','','0','0','130705','');
INSERT INTO `web_shop_area` VALUES('155','下花园区','','151','37,151','0','155','','0','0','130706','');
INSERT INTO `web_shop_area` VALUES('156','宣化县','','151','37,151','0','156','','0','0','130721','');
INSERT INTO `web_shop_area` VALUES('157','张北县','','151','37,151','0','157','','0','0','130722','');
INSERT INTO `web_shop_area` VALUES('158','康保县','','151','37,151','0','158','','0','0','130723','');
INSERT INTO `web_shop_area` VALUES('159','沽源县','','151','37,151','0','159','','0','0','130724','');
INSERT INTO `web_shop_area` VALUES('160','尚义县','','151','37,151','0','160','','0','0','130725','');
INSERT INTO `web_shop_area` VALUES('161','蔚县','','151','37,151','0','161','','0','0','130726','');
INSERT INTO `web_shop_area` VALUES('162','阳原县','','151','37,151','0','162','','0','0','130727','');
INSERT INTO `web_shop_area` VALUES('163','怀安县','','151','37,151','0','163','','0','0','130728','');
INSERT INTO `web_shop_area` VALUES('164','万全县','','151','37,151','0','164','','0','0','130729','');
INSERT INTO `web_shop_area` VALUES('165','怀来县','','151','37,151','0','165','','0','0','130730','');
INSERT INTO `web_shop_area` VALUES('166','涿鹿县','','151','37,151','0','166','','0','0','130731','');
INSERT INTO `web_shop_area` VALUES('167','赤城县','','151','37,151','0','167','','0','0','130732','');
INSERT INTO `web_shop_area` VALUES('168','崇礼县','','151','37,151','0','168','','0','0','130733','');
INSERT INTO `web_shop_area` VALUES('169','承德市','','37','37','1','170,171,172,173,174,175,176,177,178,179,180','','0','0','130800','chengde');
INSERT INTO `web_shop_area` VALUES('170','双桥区','','169','37,169','0','170','','0','0','130802','');
INSERT INTO `web_shop_area` VALUES('171','双滦区','','169','37,169','0','171','','0','0','130803','');
INSERT INTO `web_shop_area` VALUES('172','鹰手营子矿区','','169','37,169','0','172','','0','0','130804','');
INSERT INTO `web_shop_area` VALUES('173','承德县','','169','37,169','0','173','','0','0','130821','');
INSERT INTO `web_shop_area` VALUES('174','兴隆县','','169','37,169','0','174','','0','0','130822','');
INSERT INTO `web_shop_area` VALUES('175','平泉县','','169','37,169','0','175','','0','0','130823','');
INSERT INTO `web_shop_area` VALUES('176','滦平县','','169','37,169','0','176','','0','0','130824','');
INSERT INTO `web_shop_area` VALUES('177','隆化县','','169','37,169','0','177','','0','0','130825','');
INSERT INTO `web_shop_area` VALUES('178','丰宁满族自治县','','169','37,169','0','178','','0','0','130826','');
INSERT INTO `web_shop_area` VALUES('179','宽城满族自治县','','169','37,169','0','179','','0','0','130827','');
INSERT INTO `web_shop_area` VALUES('180','围场满族蒙古族自治县','','169','37,169','0','180','','0','0','130828','');
INSERT INTO `web_shop_area` VALUES('181','沧州市','','37','37','1','182,183,184,185,186,187,188,189,190,191,192,193,194,195,196,197','','0','0','130900','cangzhou');
INSERT INTO `web_shop_area` VALUES('182','新华区','','181','37,181','0','182','','0','0','130902','');
INSERT INTO `web_shop_area` VALUES('183','运河区','','181','37,181','0','183','','0','0','130903','');
INSERT INTO `web_shop_area` VALUES('184','沧县','','181','37,181','0','184','','0','0','130921','');
INSERT INTO `web_shop_area` VALUES('185','青县','','181','37,181','0','185','','0','0','130922','');
INSERT INTO `web_shop_area` VALUES('186','东光县','','181','37,181','0','186','','0','0','130923','');
INSERT INTO `web_shop_area` VALUES('187','海兴县','','181','37,181','0','187','','0','0','130924','');
INSERT INTO `web_shop_area` VALUES('188','盐山县','','181','37,181','0','188','','0','0','130925','');
INSERT INTO `web_shop_area` VALUES('189','肃宁县','','181','37,181','0','189','','0','0','130926','');
INSERT INTO `web_shop_area` VALUES('190','南皮县','','181','37,181','0','190','','0','0','130927','');
INSERT INTO `web_shop_area` VALUES('191','吴桥县','','181','37,181','0','191','','0','0','130928','');
INSERT INTO `web_shop_area` VALUES('192','献县','','181','37,181','0','192','','0','0','130929','');
INSERT INTO `web_shop_area` VALUES('193','孟村回族自治县','','181','37,181','0','193','','0','0','130930','');
INSERT INTO `web_shop_area` VALUES('194','泊头市','','181','37,181','0','194','','0','0','130981','');
INSERT INTO `web_shop_area` VALUES('195','任丘市','','181','37,181','0','195','','0','0','130982','');
INSERT INTO `web_shop_area` VALUES('196','黄骅市','','181','37,181','0','196','','0','0','130983','');
INSERT INTO `web_shop_area` VALUES('197','河间市','','181','37,181','0','197','','0','0','130984','');
INSERT INTO `web_shop_area` VALUES('198','廊坊市','','37','37','1','199,200,201,202,203,204,205,206,207,208','','0','0','131000','langfang');
INSERT INTO `web_shop_area` VALUES('199','安次区','','198','37,198','0','199','','0','0','131002','');
INSERT INTO `web_shop_area` VALUES('200','广阳区','','198','37,198','0','200','','0','0','131003','');
INSERT INTO `web_shop_area` VALUES('201','固安县','','198','37,198','0','201','','0','0','131022','');
INSERT INTO `web_shop_area` VALUES('202','永清县','','198','37,198','0','202','','0','0','131023','');
INSERT INTO `web_shop_area` VALUES('203','香河县','','198','37,198','0','203','','0','0','131024','');
INSERT INTO `web_shop_area` VALUES('204','大城县','','198','37,198','0','204','','0','0','131025','');
INSERT INTO `web_shop_area` VALUES('205','文安县','','198','37,198','0','205','','0','0','131026','');
INSERT INTO `web_shop_area` VALUES('206','大厂回族自治县','','198','37,198','0','206','','0','0','131028','');
INSERT INTO `web_shop_area` VALUES('207','霸州市','','198','37,198','0','207','','0','0','131081','');
INSERT INTO `web_shop_area` VALUES('208','三河市','','198','37,198','0','208','','0','0','131082','');
INSERT INTO `web_shop_area` VALUES('209','衡水市','','37','37','1','210,211,212,213,214,215,216,217,218,219,220','','0','0','131100','hengshui');
INSERT INTO `web_shop_area` VALUES('210','桃城区','','209','37,209','0','210','','0','0','131102','');
INSERT INTO `web_shop_area` VALUES('211','枣强县','','209','37,209','0','211','','0','0','131121','');
INSERT INTO `web_shop_area` VALUES('212','武邑县','','209','37,209','0','212','','0','0','131122','');
INSERT INTO `web_shop_area` VALUES('213','武强县','','209','37,209','0','213','','0','0','131123','');
INSERT INTO `web_shop_area` VALUES('214','饶阳县','','209','37,209','0','214','','0','0','131124','');
INSERT INTO `web_shop_area` VALUES('215','安平县','','209','37,209','0','215','','0','0','131125','');
INSERT INTO `web_shop_area` VALUES('216','故城县','','209','37,209','0','216','','0','0','131126','');
INSERT INTO `web_shop_area` VALUES('217','景县','','209','37,209','0','217','','0','0','131127','');
INSERT INTO `web_shop_area` VALUES('218','阜城县','','209','37,209','0','218','','0','0','131128','');
INSERT INTO `web_shop_area` VALUES('219','冀州市','','209','37,209','0','219','','0','0','131181','');
INSERT INTO `web_shop_area` VALUES('220','深州市','','209','37,209','0','220','','0','0','131182','');
INSERT INTO `web_shop_area` VALUES('221','山西','','0','0','1','222,233,245,251,265,272,279,291,305,320,338,223,224,225,226,227,228,229,230,231,232,290','','17','0','140000','shanx');
INSERT INTO `web_shop_area` VALUES('222','太原市','','221','221','1','223,224,225,226,227,228,229,230,231,232','','0','0','140100','taiyuan');
INSERT INTO `web_shop_area` VALUES('223','小店区','','222','221,222','0','223','','0','0','140105','');
INSERT INTO `web_shop_area` VALUES('224','迎泽区','','222','221,222','0','224','','0','0','140106','');
INSERT INTO `web_shop_area` VALUES('225','杏花岭区','','222','221,222','0','225','','0','0','140107','');
INSERT INTO `web_shop_area` VALUES('226','尖草坪区','','222','221,222','0','226','','0','0','140108','');
INSERT INTO `web_shop_area` VALUES('227','万柏林区','','222','221,222','0','227','','0','0','140109','');
INSERT INTO `web_shop_area` VALUES('228','晋源区','','222','221,222','0','228','','0','0','140110','');
INSERT INTO `web_shop_area` VALUES('229','清徐县','','222','221,222','0','229','','0','0','140121','');
INSERT INTO `web_shop_area` VALUES('230','阳曲县','','222','221,222','0','230','','0','0','140122','');
INSERT INTO `web_shop_area` VALUES('231','娄烦县','','222','221,222','0','231','','0','0','140123','');
INSERT INTO `web_shop_area` VALUES('232','古交市','','222','221,222','0','232','','0','0','140181','');
INSERT INTO `web_shop_area` VALUES('233','大同市','','221','221','1','234,235,236,237,238,239,240,241,242,243,244','','0','0','140200','datong');
INSERT INTO `web_shop_area` VALUES('234','城区','','233','221,233','0','234','','0','0','140202','');
INSERT INTO `web_shop_area` VALUES('235','矿区','','233','221,233','0','235','','0','0','140203','');
INSERT INTO `web_shop_area` VALUES('236','南郊区','','233','221,233','0','236','','0','0','140211','');
INSERT INTO `web_shop_area` VALUES('237','新荣区','','233','221,233','0','237','','0','0','140212','');
INSERT INTO `web_shop_area` VALUES('238','阳高县','','233','221,233','0','238','','0','0','140221','');
INSERT INTO `web_shop_area` VALUES('239','天镇县','','233','221,233','0','239','','0','0','140222','');
INSERT INTO `web_shop_area` VALUES('240','广灵县','','233','221,233','0','240','','0','0','140223','');
INSERT INTO `web_shop_area` VALUES('241','灵丘县','','233','221,233','0','241','','0','0','140224','');
INSERT INTO `web_shop_area` VALUES('242','浑源县','','233','221,233','0','242','','0','0','140225','');
INSERT INTO `web_shop_area` VALUES('243','左云县','','233','221,233','0','243','','0','0','140226','');
INSERT INTO `web_shop_area` VALUES('244','大同县','','233','221,233','0','244','','0','0','140227','');
INSERT INTO `web_shop_area` VALUES('245','阳泉市','','221','221','1','246,247,248,249,250','','0','0','140300','yangquan');
INSERT INTO `web_shop_area` VALUES('246','城区','','245','221,245','0','246','','0','0','140302','');
INSERT INTO `web_shop_area` VALUES('247','矿区','','245','221,245','0','247','','0','0','140303','');
INSERT INTO `web_shop_area` VALUES('248','郊区','','245','221,245','0','248','','0','0','140311','');
INSERT INTO `web_shop_area` VALUES('249','平定县','','245','221,245','0','249','','0','0','140321','');
INSERT INTO `web_shop_area` VALUES('250','盂县','','245','221,245','0','250','','0','0','140322','');
INSERT INTO `web_shop_area` VALUES('251','长治市','','221','221','1','252,253,254,255,256,257,258,259,260,261,262,263,264','','0','0','140400','changzhi');
INSERT INTO `web_shop_area` VALUES('252','城区','','251','221,251','0','252','','0','0','140402','');
INSERT INTO `web_shop_area` VALUES('253','郊区','','251','221,251','0','253','','0','0','140411','');
INSERT INTO `web_shop_area` VALUES('254','长治县','','251','221,251','0','254','','0','0','140421','');
INSERT INTO `web_shop_area` VALUES('255','襄垣县','','251','221,251','0','255','','0','0','140423','');
INSERT INTO `web_shop_area` VALUES('256','屯留县','','251','221,251','0','256','','0','0','140424','');
INSERT INTO `web_shop_area` VALUES('257','平顺县','','251','221,251','0','257','','0','0','140425','');
INSERT INTO `web_shop_area` VALUES('258','黎城县','','251','221,251','0','258','','0','0','140426','');
INSERT INTO `web_shop_area` VALUES('259','壶关县','','251','221,251','0','259','','0','0','140427','');
INSERT INTO `web_shop_area` VALUES('260','长子县','','251','221,251','0','260','','0','0','140428','');
INSERT INTO `web_shop_area` VALUES('261','武乡县','','251','221,251','0','261','','0','0','140429','');
INSERT INTO `web_shop_area` VALUES('262','沁县','','251','221,251','0','262','','0','0','140430','');
INSERT INTO `web_shop_area` VALUES('263','沁源县','','251','221,251','0','263','','0','0','140431','');
INSERT INTO `web_shop_area` VALUES('264','潞城市','','251','221,251','0','264','','0','0','140481','');
INSERT INTO `web_shop_area` VALUES('265','晋城市','','221','221','1','266,267,268,269,270,271','','0','0','140500','jincheng');
INSERT INTO `web_shop_area` VALUES('266','城区','','265','221,265','0','266','','0','0','140502','');
INSERT INTO `web_shop_area` VALUES('267','沁水县','','265','221,265','0','267','','0','0','140521','');
INSERT INTO `web_shop_area` VALUES('268','阳城县','','265','221,265','0','268','','0','0','140522','');
INSERT INTO `web_shop_area` VALUES('269','陵川县','','265','221,265','0','269','','0','0','140524','');
INSERT INTO `web_shop_area` VALUES('270','泽州县','','265','221,265','0','270','','0','0','140525','');
INSERT INTO `web_shop_area` VALUES('271','高平市','','265','221,265','0','271','','0','0','140581','');
INSERT INTO `web_shop_area` VALUES('272','朔州市','','221','221','1','273,274,275,276,277,278','','0','0','140600','shuozhou');
INSERT INTO `web_shop_area` VALUES('273','朔城区','','272','221,272','0','273','','0','0','140602','');
INSERT INTO `web_shop_area` VALUES('274','平鲁区','','272','221,272','0','274','','0','0','140603','');
INSERT INTO `web_shop_area` VALUES('275','山阴县','','272','221,272','0','275','','0','0','140621','');
INSERT INTO `web_shop_area` VALUES('276','应县','','272','221,272','0','276','','0','0','140622','');
INSERT INTO `web_shop_area` VALUES('277','右玉县','','272','221,272','0','277','','0','0','140623','');
INSERT INTO `web_shop_area` VALUES('278','怀仁县','','272','221,272','0','278','','0','0','140624','');
INSERT INTO `web_shop_area` VALUES('279','晋中市','','221','221','1','280,281,282,283,284,285,286,287,288,289','','0','0','140700','jinzhong');
INSERT INTO `web_shop_area` VALUES('280','榆次区','','279','221,279','0','280','','0','0','140702','');
INSERT INTO `web_shop_area` VALUES('281','榆社县','','279','221,279','0','281','','0','0','140721','');
INSERT INTO `web_shop_area` VALUES('282','左权县','','279','221,279','0','282','','0','0','140722','');
INSERT INTO `web_shop_area` VALUES('283','和顺县','','279','221,279','0','283','','0','0','140723','');
INSERT INTO `web_shop_area` VALUES('284','昔阳县','','279','221,279','0','284','','0','0','140724','');
INSERT INTO `web_shop_area` VALUES('285','寿阳县','','279','221,279','0','285','','0','0','140725','');
INSERT INTO `web_shop_area` VALUES('286','太谷县','','279','221,279','0','286','','0','0','140726','');
INSERT INTO `web_shop_area` VALUES('287','祁县','','279','221,279','0','287','','0','0','140727','');
INSERT INTO `web_shop_area` VALUES('288','平遥县','','279','221,279','0','288','','0','0','140728','');
INSERT INTO `web_shop_area` VALUES('289','灵石县','','279','221,279','0','289','','0','0','140729','');
INSERT INTO `web_shop_area` VALUES('290','介休市','','221','221','0','290','','0','0','140781','jiexiu');
INSERT INTO `web_shop_area` VALUES('291','运城市','','221','221','1','292,293,294,295,296,297,298,299,300,301,302,303,304','','0','0','140800','yuncheng');
INSERT INTO `web_shop_area` VALUES('292','盐湖区','','291','221,291','0','292','','0','0','140802','');
INSERT INTO `web_shop_area` VALUES('293','临猗县','','291','221,291','0','293','','0','0','140821','');
INSERT INTO `web_shop_area` VALUES('294','万荣县','','291','221,291','0','294','','0','0','140822','');
INSERT INTO `web_shop_area` VALUES('295','闻喜县','','291','221,291','0','295','','0','0','140823','');
INSERT INTO `web_shop_area` VALUES('296','稷山县','','291','221,291','0','296','','0','0','140824','');
INSERT INTO `web_shop_area` VALUES('297','新绛县','','291','221,291','0','297','','0','0','140825','');
INSERT INTO `web_shop_area` VALUES('298','绛县','','291','221,291','0','298','','0','0','140826','');
INSERT INTO `web_shop_area` VALUES('299','垣曲县','','291','221,291','0','299','','0','0','140827','');
INSERT INTO `web_shop_area` VALUES('300','夏县','','291','221,291','0','300','','0','0','140828','');
INSERT INTO `web_shop_area` VALUES('301','平陆县','','291','221,291','0','301','','0','0','140829','');
INSERT INTO `web_shop_area` VALUES('302','芮城县','','291','221,291','0','302','','0','0','140830','');
INSERT INTO `web_shop_area` VALUES('303','永济市','','291','221,291','0','303','','0','0','140881','');
INSERT INTO `web_shop_area` VALUES('304','河津市','','291','221,291','0','304','','0','0','140882','');
INSERT INTO `web_shop_area` VALUES('305','忻州市','','221','221','1','306,307,308,309,310,311,312,313,314,315,316,317,318,319','','0','0','140900','xinzhou');
INSERT INTO `web_shop_area` VALUES('306','忻府区','','305','221,305','0','306','','0','0','140902','');
INSERT INTO `web_shop_area` VALUES('307','定襄县','','305','221,305','0','307','','0','0','140921','');
INSERT INTO `web_shop_area` VALUES('308','五台县','','305','221,305','0','308','','0','0','140922','');
INSERT INTO `web_shop_area` VALUES('309','代县','','305','221,305','0','309','','0','0','140923','');
INSERT INTO `web_shop_area` VALUES('310','繁峙县','','305','221,305','0','310','','0','0','140924','');
INSERT INTO `web_shop_area` VALUES('311','宁武县','','305','221,305','0','311','','0','0','140925','');
INSERT INTO `web_shop_area` VALUES('312','静乐县','','305','221,305','0','312','','0','0','140926','');
INSERT INTO `web_shop_area` VALUES('313','神池县','','305','221,305','0','313','','0','0','140927','');
INSERT INTO `web_shop_area` VALUES('314','五寨县','','305','221,305','0','314','','0','0','140928','');
INSERT INTO `web_shop_area` VALUES('315','岢岚县','','305','221,305','0','315','','0','0','140929','');
INSERT INTO `web_shop_area` VALUES('316','河曲县','','305','221,305','0','316','','0','0','140930','');
INSERT INTO `web_shop_area` VALUES('317','保德县','','305','221,305','0','317','','0','0','140931','');
INSERT INTO `web_shop_area` VALUES('318','偏关县','','305','221,305','0','318','','0','0','140932','');
INSERT INTO `web_shop_area` VALUES('319','原平市','','305','221,305','0','319','','0','0','140981','');
INSERT INTO `web_shop_area` VALUES('320','临汾市','','221','221','1','321,322,323,324,325,326,327,328,329,330,331,332,333,334,335,336,337','','0','0','141000','linfen');
INSERT INTO `web_shop_area` VALUES('321','尧都区','','320','221,320','0','321','','0','0','141002','');
INSERT INTO `web_shop_area` VALUES('322','曲沃县','','320','221,320','0','322','','0','0','141021','');
INSERT INTO `web_shop_area` VALUES('323','翼城县','','320','221,320','0','323','','0','0','141022','');
INSERT INTO `web_shop_area` VALUES('324','襄汾县','','320','221,320','0','324','','0','0','141023','');
INSERT INTO `web_shop_area` VALUES('325','洪洞县','','320','221,320','0','325','','0','0','141024','');
INSERT INTO `web_shop_area` VALUES('326','古县','','320','221,320','0','326','','0','0','141025','');
INSERT INTO `web_shop_area` VALUES('327','安泽县','','320','221,320','0','327','','0','0','141026','');
INSERT INTO `web_shop_area` VALUES('328','浮山县','','320','221,320','0','328','','0','0','141027','');
INSERT INTO `web_shop_area` VALUES('329','吉县','','320','221,320','0','329','','0','0','141028','');
INSERT INTO `web_shop_area` VALUES('330','乡宁县','','320','221,320','0','330','','0','0','141029','');
INSERT INTO `web_shop_area` VALUES('331','大宁县','','320','221,320','0','331','','0','0','141030','');
INSERT INTO `web_shop_area` VALUES('332','隰县','','320','221,320','0','332','','0','0','141031','');
INSERT INTO `web_shop_area` VALUES('333','永和县','','320','221,320','0','333','','0','0','141032','');
INSERT INTO `web_shop_area` VALUES('334','蒲县','','320','221,320','0','334','','0','0','141033','');
INSERT INTO `web_shop_area` VALUES('335','汾西县','','320','221,320','0','335','','0','0','141034','');
INSERT INTO `web_shop_area` VALUES('336','侯马市','','320','221,320','0','336','','0','0','141081','');
INSERT INTO `web_shop_area` VALUES('337','霍州市','','320','221,320','0','337','','0','0','141082','');
INSERT INTO `web_shop_area` VALUES('338','吕梁市','','221','221','1','339,340,341,342,343,344,345,346,347,348,349,350,351','','0','0','141100','lvliang');
INSERT INTO `web_shop_area` VALUES('339','离石区','','338','221,338','0','339','','0','0','141102','');
INSERT INTO `web_shop_area` VALUES('340','文水县','','338','221,338','0','340','','0','0','141121','');
INSERT INTO `web_shop_area` VALUES('341','交城县','','338','221,338','0','341','','0','0','141122','');
INSERT INTO `web_shop_area` VALUES('342','兴县','','338','221,338','0','342','','0','0','141123','');
INSERT INTO `web_shop_area` VALUES('343','临县','','338','221,338','0','343','','0','0','141124','');
INSERT INTO `web_shop_area` VALUES('344','柳林县','','338','221,338','0','344','','0','0','141125','');
INSERT INTO `web_shop_area` VALUES('345','石楼县','','338','221,338','0','345','','0','0','141126','');
INSERT INTO `web_shop_area` VALUES('346','岚县','','338','221,338','0','346','','0','0','141127','');
INSERT INTO `web_shop_area` VALUES('347','方山县','','338','221,338','0','347','','0','0','141128','');
INSERT INTO `web_shop_area` VALUES('348','中阳县','','338','221,338','0','348','','0','0','141129','');
INSERT INTO `web_shop_area` VALUES('349','交口县','','338','221,338','0','349','','0','0','141130','');
INSERT INTO `web_shop_area` VALUES('350','孝义市','','338','221,338','0','350','','0','0','141181','');
INSERT INTO `web_shop_area` VALUES('351','汾阳市','','338','221,338','0','351','','0','0','141182','');
INSERT INTO `web_shop_area` VALUES('352','内蒙古','','0','0','1','353,363,373,377,390,399,408,422,430,442,449,462,354,355,356,357,358,359,360,361,362','','19','0','150000','neimenggu');
INSERT INTO `web_shop_area` VALUES('353','呼和浩特','','352','352','1','354,355,356,357,358,359,360,361,362','','0','0','150100','huhehaote');
INSERT INTO `web_shop_area` VALUES('354','新城区','','353','352,353','0','354','','0','0','150102','');
INSERT INTO `web_shop_area` VALUES('355','回民区','','353','352,353','0','355','','0','0','150103','');
INSERT INTO `web_shop_area` VALUES('356','玉泉区','','353','352,353','0','356','','0','0','150104','');
INSERT INTO `web_shop_area` VALUES('357','赛罕区','','353','352,353','0','357','','0','0','150105','');
INSERT INTO `web_shop_area` VALUES('358','土默特左旗','','353','352,353','0','358','','0','0','150121','');
INSERT INTO `web_shop_area` VALUES('359','托克托县','','353','352,353','0','359','','0','0','150122','');
INSERT INTO `web_shop_area` VALUES('360','和林格尔县','','353','352,353','0','360','','0','0','150123','');
INSERT INTO `web_shop_area` VALUES('361','清水河县','','353','352,353','0','361','','0','0','150124','');
INSERT INTO `web_shop_area` VALUES('362','武川县','','353','352,353','0','362','','0','0','150125','');
INSERT INTO `web_shop_area` VALUES('363','包头市','','352','352','1','364,365,366,367,368,369,370,371,372','','0','0','150200','baotou');
INSERT INTO `web_shop_area` VALUES('364','东河区','','363','352,363','0','364','','0','0','150202','');
INSERT INTO `web_shop_area` VALUES('365','昆都仑区','','363','352,363','0','365','','0','0','150203','');
INSERT INTO `web_shop_area` VALUES('366','青山区','','363','352,363','0','366','','0','0','150204','');
INSERT INTO `web_shop_area` VALUES('367','石拐区','','363','352,363','0','367','','0','0','150205','');
INSERT INTO `web_shop_area` VALUES('368','白云鄂博矿区','','363','352,363','0','368','','0','0','150206','');
INSERT INTO `web_shop_area` VALUES('369','九原区','','363','352,363','0','369','','0','0','150207','');
INSERT INTO `web_shop_area` VALUES('370','土默特右旗','','363','352,363','0','370','','0','0','150221','');
INSERT INTO `web_shop_area` VALUES('371','固阳县','','363','352,363','0','371','','0','0','150222','');
INSERT INTO `web_shop_area` VALUES('372','达尔罕茂明安联合旗','','363','352,363','0','372','','0','0','150223','');
INSERT INTO `web_shop_area` VALUES('373','乌海市','','352','352','1','374,375,376','','0','0','150300','wuhai');
INSERT INTO `web_shop_area` VALUES('374','海勃湾区','','373','352,373','0','374','','0','0','150302','');
INSERT INTO `web_shop_area` VALUES('375','海南区','','373','352,373','0','375','','0','0','150303','');
INSERT INTO `web_shop_area` VALUES('376','乌达区','','373','352,373','0','376','','0','0','150304','');
INSERT INTO `web_shop_area` VALUES('377','赤峰市','','352','352','1','378,379,380,381,382,383,384,385,386,387,388,389','','0','0','150400','chifeng');
INSERT INTO `web_shop_area` VALUES('378','红山区','','377','352,377','0','378','','0','0','150402','');
INSERT INTO `web_shop_area` VALUES('379','元宝山区','','377','352,377','0','379','','0','0','150403','');
INSERT INTO `web_shop_area` VALUES('380','松山区','','377','352,377','0','380','','0','0','150404','');
INSERT INTO `web_shop_area` VALUES('381','阿鲁科','','377','352,377','0','381','','0','0','150421','');
INSERT INTO `web_shop_area` VALUES('382','巴林左旗','','377','352,377','0','382','','0','0','150422','');
INSERT INTO `web_shop_area` VALUES('383','巴林右旗','','377','352,377','0','383','','0','0','150423','');
INSERT INTO `web_shop_area` VALUES('384','林西县','','377','352,377','0','384','','0','0','150424','');
INSERT INTO `web_shop_area` VALUES('385','克什克腾旗','','377','352,377','0','385','','0','0','150425','');
INSERT INTO `web_shop_area` VALUES('386','翁牛特旗','','377','352,377','0','386','','0','0','150426','');
INSERT INTO `web_shop_area` VALUES('387','喀喇沁旗','','377','352,377','0','387','','0','0','150428','');
INSERT INTO `web_shop_area` VALUES('388','宁城县','','377','352,377','0','388','','0','0','150429','');
INSERT INTO `web_shop_area` VALUES('389','敖汉旗','','377','352,377','0','389','','0','0','150430','');
INSERT INTO `web_shop_area` VALUES('390','通辽市','','352','352','1','391,392,393,394,395,396,397,398','','0','0','150500','tongliao');
INSERT INTO `web_shop_area` VALUES('391','科尔沁区','','390','352,390','0','391','','0','0','150502','');
INSERT INTO `web_shop_area` VALUES('392','科尔沁左翼中旗','','390','352,390','0','392','','0','0','150521','');
INSERT INTO `web_shop_area` VALUES('393','科尔沁左翼后旗','','390','352,390','0','393','','0','0','150522','');
INSERT INTO `web_shop_area` VALUES('394','开鲁县','','390','352,390','0','394','','0','0','150523','');
INSERT INTO `web_shop_area` VALUES('395','库伦旗','','390','352,390','0','395','','0','0','150524','');
INSERT INTO `web_shop_area` VALUES('396','奈曼旗','','390','352,390','0','396','','0','0','150525','');
INSERT INTO `web_shop_area` VALUES('397','扎鲁特旗','','390','352,390','0','397','','0','0','150526','');
INSERT INTO `web_shop_area` VALUES('398','霍林郭勒市','','390','352,390','0','398','','0','0','150581','');
INSERT INTO `web_shop_area` VALUES('399','鄂尔多斯','','352','352','1','400,401,402,403,404,405,406,407','','0','0','150600','eerduosi');
INSERT INTO `web_shop_area` VALUES('400','东胜区','','399','352,399','0','400','','0','0','150602','');
INSERT INTO `web_shop_area` VALUES('401','达拉特旗','','399','352,399','0','401','','0','0','150621','');
INSERT INTO `web_shop_area` VALUES('402','准格尔旗','','399','352,399','0','402','','0','0','150622','');
INSERT INTO `web_shop_area` VALUES('403','鄂托克前旗','','399','352,399','0','403','','0','0','150623','');
INSERT INTO `web_shop_area` VALUES('404','鄂托克旗','','399','352,399','0','404','','0','0','150624','');
INSERT INTO `web_shop_area` VALUES('405','杭锦旗','','399','352,399','0','405','','0','0','150625','');
INSERT INTO `web_shop_area` VALUES('406','乌审旗','','399','352,399','0','406','','0','0','150626','');
INSERT INTO `web_shop_area` VALUES('407','伊金霍洛旗','','399','352,399','0','407','','0','0','150627','');
INSERT INTO `web_shop_area` VALUES('408','呼伦贝尔','','352','352','1','409,410,411,412,413,414,415,416,417,418,419,420,421','','0','0','150700','hulunbeier');
INSERT INTO `web_shop_area` VALUES('409','海拉尔区','','408','352,408','0','409','','0','0','150702','');
INSERT INTO `web_shop_area` VALUES('410','阿荣旗','','408','352,408','0','410','','0','0','150721','');
INSERT INTO `web_shop_area` VALUES('411','莫力达瓦达斡尔族自治旗','','408','352,408','0','411','','0','0','150722','');
INSERT INTO `web_shop_area` VALUES('412','鄂伦春自治旗','','408','352,408','0','412','','0','0','150723','');
INSERT INTO `web_shop_area` VALUES('413','鄂温克族自治旗','','408','352,408','0','413','','0','0','150724','');
INSERT INTO `web_shop_area` VALUES('414','陈巴尔虎旗','','408','352,408','0','414','','0','0','150725','');
INSERT INTO `web_shop_area` VALUES('415','新巴尔虎左旗','','408','352,408','0','415','','0','0','150726','');
INSERT INTO `web_shop_area` VALUES('416','新巴尔虎右旗','','408','352,408','0','416','','0','0','150727','');
INSERT INTO `web_shop_area` VALUES('417','满洲里市','','408','352,408','0','417','','0','0','150781','');
INSERT INTO `web_shop_area` VALUES('418','牙克石市','','408','352,408','0','418','','0','0','150782','');
INSERT INTO `web_shop_area` VALUES('419','扎兰屯市','','408','352,408','0','419','','0','0','150783','');
INSERT INTO `web_shop_area` VALUES('420','额尔古纳市','','408','352,408','0','420','','0','0','150784','');
INSERT INTO `web_shop_area` VALUES('421','根河市','','408','352,408','0','421','','0','0','150785','');
INSERT INTO `web_shop_area` VALUES('422','巴彦淖尔','','352','352','1','423,424,425,426,427,428,429','','0','0','150800','bayanneer');
INSERT INTO `web_shop_area` VALUES('423','临河区','','422','352,422','0','423','','0','0','150802','');
INSERT INTO `web_shop_area` VALUES('424','五原县','','422','352,422','0','424','','0','0','150821','');
INSERT INTO `web_shop_area` VALUES('425','磴口县','','422','352,422','0','425','','0','0','150822','');
INSERT INTO `web_shop_area` VALUES('426','乌拉特前旗','','422','352,422','0','426','','0','0','150823','');
INSERT INTO `web_shop_area` VALUES('427','乌拉特中旗','','422','352,422','0','427','','0','0','150824','');
INSERT INTO `web_shop_area` VALUES('428','乌拉特后旗','','422','352,422','0','428','','0','0','150825','');
INSERT INTO `web_shop_area` VALUES('429','杭锦后旗','','422','352,422','0','429','','0','0','150826','');
INSERT INTO `web_shop_area` VALUES('430','乌兰察布','','352','352','1','431,432,433,434,435,436,437,438,439,440,441','','0','0','150900','wulanchabu');
INSERT INTO `web_shop_area` VALUES('431','集宁区','','430','352,430','0','431','','0','0','150902','');
INSERT INTO `web_shop_area` VALUES('432','卓资县','','430','352,430','0','432','','0','0','150921','');
INSERT INTO `web_shop_area` VALUES('433','化德县','','430','352,430','0','433','','0','0','150922','');
INSERT INTO `web_shop_area` VALUES('434','商都县','','430','352,430','0','434','','0','0','150923','');
INSERT INTO `web_shop_area` VALUES('435','兴和县','','430','352,430','0','435','','0','0','150924','');
INSERT INTO `web_shop_area` VALUES('436','凉城县','','430','352,430','0','436','','0','0','150925','');
INSERT INTO `web_shop_area` VALUES('437','察哈尔右翼前旗','','430','352,430','0','437','','0','0','150926','');
INSERT INTO `web_shop_area` VALUES('438','察哈尔右翼中旗','','430','352,430','0','438','','0','0','150927','');
INSERT INTO `web_shop_area` VALUES('439','察哈尔右翼后旗','','430','352,430','0','439','','0','0','150928','');
INSERT INTO `web_shop_area` VALUES('440','四子王旗','','430','352,430','0','440','','0','0','150929','');
INSERT INTO `web_shop_area` VALUES('441','丰镇市','','430','352,430','0','441','','0','0','150981','');
INSERT INTO `web_shop_area` VALUES('442','兴安盟','','352','352','1','443,444,445,446,447,448','','0','0','152200','xinganmeng');
INSERT INTO `web_shop_area` VALUES('443','乌兰浩特市','','442','352,442','0','443','','0','0','152201','');
INSERT INTO `web_shop_area` VALUES('444','阿尔山','','442','352,442','0','444','','0','0','152202','');
INSERT INTO `web_shop_area` VALUES('445','科尔沁右翼前旗','','442','352,442','0','445','','0','0','152221','');
INSERT INTO `web_shop_area` VALUES('446','科尔沁右翼中旗','','442','352,442','0','446','','0','0','152222','');
INSERT INTO `web_shop_area` VALUES('447','扎赉特旗','','442','352,442','0','447','','0','0','152223','');
INSERT INTO `web_shop_area` VALUES('448','突泉县','','442','352,442','0','448','','0','0','152224','');
INSERT INTO `web_shop_area` VALUES('449','锡林郭勒','','352','352','1','450,451,452,453,454,455,456,457,458,459,460,461','','0','0','152500','xilinguolemeng');
INSERT INTO `web_shop_area` VALUES('450','二连浩特市','','449','352,449','0','450','','0','0','152501','');
INSERT INTO `web_shop_area` VALUES('451','锡林浩特市','','449','352,449','0','451','','0','0','152502','');
INSERT INTO `web_shop_area` VALUES('452','阿巴嘎','','449','352,449','0','452','','0','0','152522','');
INSERT INTO `web_shop_area` VALUES('453','苏尼特左旗','','449','352,449','0','453','','0','0','152523','');
INSERT INTO `web_shop_area` VALUES('454','苏尼特右旗','','449','352,449','0','454','','0','0','152524','');
INSERT INTO `web_shop_area` VALUES('455','东乌珠穆沁旗','','449','352,449','0','455','','0','0','152525','');
INSERT INTO `web_shop_area` VALUES('456','西乌珠穆沁旗','','449','352,449','0','456','','0','0','152526','');
INSERT INTO `web_shop_area` VALUES('457','太仆寺旗','','449','352,449','0','457','','0','0','152527','');
INSERT INTO `web_shop_area` VALUES('458','镶黄旗','','449','352,449','0','458','','0','0','152528','');
INSERT INTO `web_shop_area` VALUES('459','正镶白旗','','449','352,449','0','459','','0','0','152529','');
INSERT INTO `web_shop_area` VALUES('460','正蓝旗','','449','352,449','0','460','','0','0','152530','');
INSERT INTO `web_shop_area` VALUES('461','多伦县','','449','352,449','0','461','','0','0','152531','');
INSERT INTO `web_shop_area` VALUES('462','阿拉善','','352','352','1','463,464,465','','0','0','152900','alashanmeng');
INSERT INTO `web_shop_area` VALUES('463','阿拉善','','462','352,462','0','463','','0','0','152921','');
INSERT INTO `web_shop_area` VALUES('464','阿拉善','','462','352,462','0','464','','0','0','152922','');
INSERT INTO `web_shop_area` VALUES('465','额济纳旗','','462','352,462','0','465','','0','0','152923','');
INSERT INTO `web_shop_area` VALUES('466','辽宁','','0','0','1','467,481,492,500,508,515,522,530,537,545,553,558,566,574,468,469,470,471,472,473,474,475,476,477,478,479,480','','18','0','210000','liaoning');
INSERT INTO `web_shop_area` VALUES('467','沈阳市','','466','466','1','468,469,470,471,472,473,474,475,476,477,478,479,480','','0','0','210100','shenyang');
INSERT INTO `web_shop_area` VALUES('468','和平区','','467','466,467','0','468','','0','0','210102','');
INSERT INTO `web_shop_area` VALUES('469','沈河区','','467','466,467','0','469','','0','0','210103','');
INSERT INTO `web_shop_area` VALUES('470','大东区','','467','466,467','0','470','','0','0','210104','');
INSERT INTO `web_shop_area` VALUES('471','皇姑区','','467','466,467','0','471','','0','0','210105','');
INSERT INTO `web_shop_area` VALUES('472','铁西区','','467','466,467','0','472','','0','0','210106','');
INSERT INTO `web_shop_area` VALUES('473','苏家屯区','','467','466,467','0','473','','0','0','210111','');
INSERT INTO `web_shop_area` VALUES('474','东陵区','','467','466,467','0','474','','0','0','210112','');
INSERT INTO `web_shop_area` VALUES('475','沈北新区','','467','466,467','0','475','','0','0','210113','');
INSERT INTO `web_shop_area` VALUES('476','于洪区','','467','466,467','0','476','','0','0','210114','');
INSERT INTO `web_shop_area` VALUES('477','辽中县','','467','466,467','0','477','','0','0','210122','');
INSERT INTO `web_shop_area` VALUES('478','康平县','','467','466,467','0','478','','0','0','210123','');
INSERT INTO `web_shop_area` VALUES('479','法库县','','467','466,467','0','479','','0','0','210124','');
INSERT INTO `web_shop_area` VALUES('480','新民市','','467','466,467','0','480','','0','0','210181','');
INSERT INTO `web_shop_area` VALUES('481','大连市','','466','466','1','482,483,484,485,486,487,488,489,490,491','','0','0','210200','dalian');
INSERT INTO `web_shop_area` VALUES('482','中山区','','481','466,481','0','482','','0','0','210202','');
INSERT INTO `web_shop_area` VALUES('483','西岗区','','481','466,481','0','483','','0','0','210203','');
INSERT INTO `web_shop_area` VALUES('484','沙河口区','','481','466,481','0','484','','0','0','210204','');
INSERT INTO `web_shop_area` VALUES('485','甘井子区','','481','466,481','0','485','','0','0','210211','');
INSERT INTO `web_shop_area` VALUES('486','旅顺口区','','481','466,481','0','486','','0','0','210212','');
INSERT INTO `web_shop_area` VALUES('487','金州区','','481','466,481','0','487','','0','0','210213','');
INSERT INTO `web_shop_area` VALUES('488','长海县','','481','466,481','0','488','','0','0','210224','');
INSERT INTO `web_shop_area` VALUES('489','瓦房店市','','481','466,481','0','489','','0','0','210281','');
INSERT INTO `web_shop_area` VALUES('490','普兰店市','','481','466,481','0','490','','0','0','210282','');
INSERT INTO `web_shop_area` VALUES('491','庄河市','','481','466,481','0','491','','0','0','210283','');
INSERT INTO `web_shop_area` VALUES('492','鞍山市','','466','466','1','493,494,495,496,497,498,499','','0','0','210300','anshan');
INSERT INTO `web_shop_area` VALUES('493','铁东区','','492','466,492','0','493','','0','0','210302','');
INSERT INTO `web_shop_area` VALUES('494','铁西区','','492','466,492','0','494','','0','0','210303','');
INSERT INTO `web_shop_area` VALUES('495','立山区','','492','466,492','0','495','','0','0','210304','');
INSERT INTO `web_shop_area` VALUES('496','千山区','','492','466,492','0','496','','0','0','210311','');
INSERT INTO `web_shop_area` VALUES('497','台安县','','492','466,492','0','497','','0','0','210321','');
INSERT INTO `web_shop_area` VALUES('498','岫岩满族自治县','','492','466,492','0','498','','0','0','210323','');
INSERT INTO `web_shop_area` VALUES('499','海城市','','492','466,492','0','499','','0','0','210381','');
INSERT INTO `web_shop_area` VALUES('500','抚顺市','','466','466','1','501,502,503,504,505,506,507','','0','0','210400','fushun');
INSERT INTO `web_shop_area` VALUES('501','新抚区','','500','466,500','0','501','','0','0','210402','');
INSERT INTO `web_shop_area` VALUES('502','东洲区','','500','466,500','0','502','','0','0','210403','');
INSERT INTO `web_shop_area` VALUES('503','望花区','','500','466,500','0','503','','0','0','210404','');
INSERT INTO `web_shop_area` VALUES('504','顺城区','','500','466,500','0','504','','0','0','210411','');
INSERT INTO `web_shop_area` VALUES('505','抚顺县','','500','466,500','0','505','','0','0','210421','');
INSERT INTO `web_shop_area` VALUES('506','新宾满族自治县','','500','466,500','0','506','','0','0','210422','');
INSERT INTO `web_shop_area` VALUES('507','清原满族自治县','','500','466,500','0','507','','0','0','210423','');
INSERT INTO `web_shop_area` VALUES('508','本溪市','','466','466','1','509,510,511,512,513,514','','0','0','210500','benxi');
INSERT INTO `web_shop_area` VALUES('509','平山区','','508','466,508','0','509','','0','0','210502','');
INSERT INTO `web_shop_area` VALUES('510','溪湖区','','508','466,508','0','510','','0','0','210503','');
INSERT INTO `web_shop_area` VALUES('511','明山区','','508','466,508','0','511','','0','0','210504','');
INSERT INTO `web_shop_area` VALUES('512','南芬区','','508','466,508','0','512','','0','0','210505','');
INSERT INTO `web_shop_area` VALUES('513','本溪满族自治县','','508','466,508','0','513','','0','0','210521','');
INSERT INTO `web_shop_area` VALUES('514','桓仁满族自治县','','508','466,508','0','514','','0','0','210522','');
INSERT INTO `web_shop_area` VALUES('515','丹东市','','466','466','1','516,517,518,519,520,521','','0','0','210600','dandong');
INSERT INTO `web_shop_area` VALUES('516','元宝区','','515','466,515','0','516','','0','0','210602','');
INSERT INTO `web_shop_area` VALUES('517','振兴区','','515','466,515','0','517','','0','0','210603','');
INSERT INTO `web_shop_area` VALUES('518','振安区','','515','466,515','0','518','','0','0','210604','');
INSERT INTO `web_shop_area` VALUES('519','宽甸满族自治县','','515','466,515','0','519','','0','0','210624','');
INSERT INTO `web_shop_area` VALUES('520','东港市','','515','466,515','0','520','','0','0','210681','');
INSERT INTO `web_shop_area` VALUES('521','凤城市','','515','466,515','0','521','','0','0','210682','');
INSERT INTO `web_shop_area` VALUES('522','锦州市','','466','466','1','523,524,525,526,527,528,529','','0','0','210700','jinzhou');
INSERT INTO `web_shop_area` VALUES('523','古塔区','','522','466,522','0','523','','0','0','210702','');
INSERT INTO `web_shop_area` VALUES('524','凌河区','','522','466,522','0','524','','0','0','210703','');
INSERT INTO `web_shop_area` VALUES('525','太和区','','522','466,522','0','525','','0','0','210711','');
INSERT INTO `web_shop_area` VALUES('526','黑山县','','522','466,522','0','526','','0','0','210726','');
INSERT INTO `web_shop_area` VALUES('527','义县','','522','466,522','0','527','','0','0','210727','');
INSERT INTO `web_shop_area` VALUES('528','凌海市','','522','466,522','0','528','','0','0','210781','');
INSERT INTO `web_shop_area` VALUES('529','北镇市','','522','466,522','0','529','','0','0','210782','');
INSERT INTO `web_shop_area` VALUES('530','营口市','','466','466','1','531,532,533,534,535,536','','0','0','210800','yingkou');
INSERT INTO `web_shop_area` VALUES('531','站前区','','530','466,530','0','531','','0','0','210802','');
INSERT INTO `web_shop_area` VALUES('532','西市区','','530','466,530','0','532','','0','0','210803','');
INSERT INTO `web_shop_area` VALUES('533','鲅鱼圈区','','530','466,530','0','533','','0','0','210804','');
INSERT INTO `web_shop_area` VALUES('534','老边区','','530','466,530','0','534','','0','0','210811','');
INSERT INTO `web_shop_area` VALUES('535','盖州市','','530','466,530','0','535','','0','0','210881','');
INSERT INTO `web_shop_area` VALUES('536','大石桥市','','530','466,530','0','536','','0','0','210882','');
INSERT INTO `web_shop_area` VALUES('537','阜新市','','466','466','1','538,539,540,541,542,543,544','','0','0','210900','fuxin');
INSERT INTO `web_shop_area` VALUES('538','海州区','','537','466,537','0','538','','0','0','210902','');
INSERT INTO `web_shop_area` VALUES('539','新邱区','','537','466,537','0','539','','0','0','210903','');
INSERT INTO `web_shop_area` VALUES('540','太平区','','537','466,537','0','540','','0','0','210904','');
INSERT INTO `web_shop_area` VALUES('541','清河门区','','537','466,537','0','541','','0','0','210905','');
INSERT INTO `web_shop_area` VALUES('542','细河区','','537','466,537','0','542','','0','0','210911','');
INSERT INTO `web_shop_area` VALUES('543','阜新蒙古族自治县','','537','466,537','0','543','','0','0','210921','');
INSERT INTO `web_shop_area` VALUES('544','彰武县','','537','466,537','0','544','','0','0','210922','');
INSERT INTO `web_shop_area` VALUES('545','辽阳市','','466','466','1','546,547,548,549,550,551,552','','0','0','211000','liaoyang');
INSERT INTO `web_shop_area` VALUES('546','白塔区','','545','466,545','0','546','','0','0','211002','');
INSERT INTO `web_shop_area` VALUES('547','文圣区','','545','466,545','0','547','','0','0','211003','');
INSERT INTO `web_shop_area` VALUES('548','宏伟区','','545','466,545','0','548','','0','0','211004','');
INSERT INTO `web_shop_area` VALUES('549','弓长岭区','','545','466,545','0','549','','0','0','211005','');
INSERT INTO `web_shop_area` VALUES('550','太子河区','','545','466,545','0','550','','0','0','211011','');
INSERT INTO `web_shop_area` VALUES('551','辽阳县','','545','466,545','0','551','','0','0','211021','');
INSERT INTO `web_shop_area` VALUES('552','灯塔市','','545','466,545','0','552','','0','0','211081','');
INSERT INTO `web_shop_area` VALUES('553','盘锦市','','466','466','1','554,555,556,557','','0','0','211100','panjin');
INSERT INTO `web_shop_area` VALUES('554','双台子区','','553','466,553','0','554','','0','0','211102','');
INSERT INTO `web_shop_area` VALUES('555','兴隆台区','','553','466,553','0','555','','0','0','211103','');
INSERT INTO `web_shop_area` VALUES('556','大洼县','','553','466,553','0','556','','0','0','211121','');
INSERT INTO `web_shop_area` VALUES('557','盘山县','','553','466,553','0','557','','0','0','211122','');
INSERT INTO `web_shop_area` VALUES('558','铁岭市','','466','466','1','559,560,561,562,563,564,565','','0','0','211200','tieling');
INSERT INTO `web_shop_area` VALUES('559','银州区','','558','466,558','0','559','','0','0','211202','');
INSERT INTO `web_shop_area` VALUES('560','清河区','','558','466,558','0','560','','0','0','211204','');
INSERT INTO `web_shop_area` VALUES('561','铁岭县','','558','466,558','0','561','','0','0','211221','');
INSERT INTO `web_shop_area` VALUES('562','西丰县','','558','466,558','0','562','','0','0','211223','');
INSERT INTO `web_shop_area` VALUES('563','昌图县','','558','466,558','0','563','','0','0','211224','');
INSERT INTO `web_shop_area` VALUES('564','调兵山市','','558','466,558','0','564','','0','0','211281','');
INSERT INTO `web_shop_area` VALUES('565','开原市','','558','466,558','0','565','','0','0','211282','');
INSERT INTO `web_shop_area` VALUES('566','朝阳市','','466','466','1','567,568,569,570,571,572,573','','0','0','211300','chaoyang');
INSERT INTO `web_shop_area` VALUES('567','双塔区','','566','466,566','0','567','','0','0','211302','');
INSERT INTO `web_shop_area` VALUES('568','龙城区','','566','466,566','0','568','','0','0','211303','');
INSERT INTO `web_shop_area` VALUES('569','朝阳县','','566','466,566','0','569','','0','0','211321','');
INSERT INTO `web_shop_area` VALUES('570','建平县','','566','466,566','0','570','','0','0','211322','');
INSERT INTO `web_shop_area` VALUES('571','喀喇沁左翼蒙古族自治县','','566','466,566','0','571','','0','0','211324','');
INSERT INTO `web_shop_area` VALUES('572','北票市','','566','466,566','0','572','','0','0','211381','');
INSERT INTO `web_shop_area` VALUES('573','凌源市','','566','466,566','0','573','','0','0','211382','');
INSERT INTO `web_shop_area` VALUES('574','葫芦岛','','466','466','1','575,576,577,578,579,580','','0','0','211400','huludao');
INSERT INTO `web_shop_area` VALUES('575','连山区','','574','466,574','0','575','','0','0','211402','');
INSERT INTO `web_shop_area` VALUES('576','龙港区','','574','466,574','0','576','','0','0','211403','');
INSERT INTO `web_shop_area` VALUES('577','南票区','','574','466,574','0','577','','0','0','211404','');
INSERT INTO `web_shop_area` VALUES('578','绥中县','','574','466,574','0','578','','0','0','211421','');
INSERT INTO `web_shop_area` VALUES('579','建昌县','','574','466,574','0','579','','0','0','211422','');
INSERT INTO `web_shop_area` VALUES('580','兴城市','','574','466,574','0','580','','0','0','211481','');
INSERT INTO `web_shop_area` VALUES('581','吉林','','0','0','1','582,593,603,610,615,623,630,636,642,583,584,585,586,587,588,589,590,591,592','','25','0','220000','jilin');
INSERT INTO `web_shop_area` VALUES('582','长春市','','581','581','1','583,584,585,586,587,588,589,590,591,592','','0','0','220100','changchun');
INSERT INTO `web_shop_area` VALUES('583','南关区','','582','581,582','0','583','','0','0','220102','');
INSERT INTO `web_shop_area` VALUES('584','宽城区','','582','581,582','0','584','','0','0','220103','');
INSERT INTO `web_shop_area` VALUES('585','朝阳区','','582','581,582','0','585','','0','0','220104','');
INSERT INTO `web_shop_area` VALUES('586','二道区','','582','581,582','0','586','','0','0','220105','');
INSERT INTO `web_shop_area` VALUES('587','绿园区','','582','581,582','0','587','','0','0','220106','');
INSERT INTO `web_shop_area` VALUES('588','双阳区','','582','581,582','0','588','','0','0','220112','');
INSERT INTO `web_shop_area` VALUES('589','农安县','','582','581,582','0','589','','0','0','220122','');
INSERT INTO `web_shop_area` VALUES('590','九台市','','582','581,582','0','590','','0','0','220181','');
INSERT INTO `web_shop_area` VALUES('591','榆树市','','582','581,582','0','591','','0','0','220182','');
INSERT INTO `web_shop_area` VALUES('592','德惠市','','582','581,582','0','592','','0','0','220183','');
INSERT INTO `web_shop_area` VALUES('593','吉林市','','581','581','1','594,595,596,597,598,599,600,601,602','','0','0','220200','jilinshi');
INSERT INTO `web_shop_area` VALUES('594','昌邑区','','593','581,593','0','594','','0','0','220202','');
INSERT INTO `web_shop_area` VALUES('595','龙潭区','','593','581,593','0','595','','0','0','220203','');
INSERT INTO `web_shop_area` VALUES('596','船营区','','593','581,593','0','596','','0','0','220204','');
INSERT INTO `web_shop_area` VALUES('597','丰满区','','593','581,593','0','597','','0','0','220211','');
INSERT INTO `web_shop_area` VALUES('598','永吉县','','593','581,593','0','598','','0','0','220221','');
INSERT INTO `web_shop_area` VALUES('599','蛟河市','','593','581,593','0','599','','0','0','220281','');
INSERT INTO `web_shop_area` VALUES('600','桦甸市','','593','581,593','0','600','','0','0','220282','');
INSERT INTO `web_shop_area` VALUES('601','舒兰市','','593','581,593','0','601','','0','0','220283','');
INSERT INTO `web_shop_area` VALUES('602','磐石市','','593','581,593','0','602','','0','0','220284','');
INSERT INTO `web_shop_area` VALUES('603','四平市','','581','581','1','604,605,606,607,608,609','','0','0','220300','siping');
INSERT INTO `web_shop_area` VALUES('604','铁西区','','603','581,603','0','604','','0','0','220302','');
INSERT INTO `web_shop_area` VALUES('605','铁东区','','603','581,603','0','605','','0','0','220303','');
INSERT INTO `web_shop_area` VALUES('606','梨树县','','603','581,603','0','606','','0','0','220322','');
INSERT INTO `web_shop_area` VALUES('607','伊通满族自治县','','603','581,603','0','607','','0','0','220323','');
INSERT INTO `web_shop_area` VALUES('608','公主岭市','','603','581,603','0','608','','0','0','220381','');
INSERT INTO `web_shop_area` VALUES('609','双辽市','','603','581,603','0','609','','0','0','220382','');
INSERT INTO `web_shop_area` VALUES('610','辽源市','','581','581','1','611,612,613,614','','0','0','220400','liaoyuan');
INSERT INTO `web_shop_area` VALUES('611','龙山区','','610','581,610','0','611','','0','0','220402','');
INSERT INTO `web_shop_area` VALUES('612','西安区','','610','581,610','0','612','','0','0','220403','');
INSERT INTO `web_shop_area` VALUES('613','东丰县','','610','581,610','0','613','','0','0','220421','');
INSERT INTO `web_shop_area` VALUES('614','东辽县','','610','581,610','0','614','','0','0','220422','');
INSERT INTO `web_shop_area` VALUES('615','通化市','','581','581','1','616,617,618,619,620,621,622','','0','0','220500','tonghua');
INSERT INTO `web_shop_area` VALUES('616','东昌区','','615','581,615','0','616','','0','0','220502','');
INSERT INTO `web_shop_area` VALUES('617','二道江区','','615','581,615','0','617','','0','0','220503','');
INSERT INTO `web_shop_area` VALUES('618','通化县','','615','581,615','0','618','','0','0','220521','');
INSERT INTO `web_shop_area` VALUES('619','辉南县','','615','581,615','0','619','','0','0','220523','');
INSERT INTO `web_shop_area` VALUES('620','柳河县','','615','581,615','0','620','','0','0','220524','');
INSERT INTO `web_shop_area` VALUES('621','梅河口市','','615','581,615','0','621','','0','0','220581','');
INSERT INTO `web_shop_area` VALUES('622','集安市','','615','581,615','0','622','','0','0','220582','');
INSERT INTO `web_shop_area` VALUES('623','白山市','','581','581','1','624,625,626,627,628,629','','0','0','220600','baishan');
INSERT INTO `web_shop_area` VALUES('624','八道江区','','623','581,623','0','624','','0','0','220602','');
INSERT INTO `web_shop_area` VALUES('625','江源区','','623','581,623','0','625','','0','0','220605','');
INSERT INTO `web_shop_area` VALUES('626','抚松县','','623','581,623','0','626','','0','0','220621','');
INSERT INTO `web_shop_area` VALUES('627','靖宇县','','623','581,623','0','627','','0','0','220622','');
INSERT INTO `web_shop_area` VALUES('628','长白朝鲜族自治县','','623','581,623','0','628','','0','0','220623','');
INSERT INTO `web_shop_area` VALUES('629','临江市','','623','581,623','0','629','','0','0','220681','');
INSERT INTO `web_shop_area` VALUES('630','松原市','','581','581','1','631,632,633,634,635','','0','0','220700','songyuan');
INSERT INTO `web_shop_area` VALUES('631','宁江区','','630','581,630','0','631','','0','0','220702','');
INSERT INTO `web_shop_area` VALUES('632','前郭尔罗斯蒙古族自治县','','630','581,630','0','632','','0','0','220721','');
INSERT INTO `web_shop_area` VALUES('633','长岭县','','630','581,630','0','633','','0','0','220722','');
INSERT INTO `web_shop_area` VALUES('634','乾安县','','630','581,630','0','634','','0','0','220723','');
INSERT INTO `web_shop_area` VALUES('635','扶余县','','630','581,630','0','635','','0','0','220724','');
INSERT INTO `web_shop_area` VALUES('636','白城市','','581','581','1','637,638,639,640,641','','0','0','220800','baicheng');
INSERT INTO `web_shop_area` VALUES('637','洮北区','','636','581,636','0','637','','0','0','220802','');
INSERT INTO `web_shop_area` VALUES('638','镇赉县','','636','581,636','0','638','','0','0','220821','');
INSERT INTO `web_shop_area` VALUES('639','通榆县','','636','581,636','0','639','','0','0','220822','');
INSERT INTO `web_shop_area` VALUES('640','洮南市','','636','581,636','0','640','','0','0','220881','');
INSERT INTO `web_shop_area` VALUES('641','大安市','','636','581,636','0','641','','0','0','220882','');
INSERT INTO `web_shop_area` VALUES('642','延边','','581','581','1','643,644,645,646,647,648,649,650','','0','0','222400','yanbian');
INSERT INTO `web_shop_area` VALUES('643','延吉市','','642','581,642','0','643','','0','0','222401','');
INSERT INTO `web_shop_area` VALUES('644','图们市','','642','581,642','0','644','','0','0','222402','');
INSERT INTO `web_shop_area` VALUES('645','敦化市','','642','581,642','0','645','','0','0','222403','');
INSERT INTO `web_shop_area` VALUES('646','珲春市','','642','581,642','0','646','','0','0','222404','');
INSERT INTO `web_shop_area` VALUES('647','龙井市','','642','581,642','0','647','','0','0','222405','');
INSERT INTO `web_shop_area` VALUES('648','和龙市','','642','581,642','0','648','','0','0','222406','');
INSERT INTO `web_shop_area` VALUES('649','汪清县','','642','581,642','0','649','','0','0','222424','');
INSERT INTO `web_shop_area` VALUES('650','安图县','','642','581,642','0','650','','0','0','222426','');
INSERT INTO `web_shop_area` VALUES('651','黑龙江','','0','0','1','652,671,688,698,707,716,726,744,755,760,771,778,789,653,654,655,656,657,658,659,660,661,662,663,664,665,666,667,668,669,670','','24','0','230000','heilongjiang');
INSERT INTO `web_shop_area` VALUES('652','哈尔滨','','651','651','1','653,654,655,656,657,658,659,660,661,662,663,664,665,666,667,668,669,670','','0','0','230100','haerbin');
INSERT INTO `web_shop_area` VALUES('653','道里区','','652','651,652','0','653','','0','0','230102','');
INSERT INTO `web_shop_area` VALUES('654','南岗区','','652','651,652','0','654','','0','0','230103','');
INSERT INTO `web_shop_area` VALUES('655','道外区','','652','651,652','0','655','','0','0','230104','');
INSERT INTO `web_shop_area` VALUES('656','平房区','','652','651,652','0','656','','0','0','230108','');
INSERT INTO `web_shop_area` VALUES('657','松北区','','652','651,652','0','657','','0','0','230109','');
INSERT INTO `web_shop_area` VALUES('658','香坊区','','652','651,652','0','658','','0','0','230110','');
INSERT INTO `web_shop_area` VALUES('659','呼兰区','','652','651,652','0','659','','0','0','230111','');
INSERT INTO `web_shop_area` VALUES('660','阿城区','','652','651,652','0','660','','0','0','230112','');
INSERT INTO `web_shop_area` VALUES('661','依兰县','','652','651,652','0','661','','0','0','230123','');
INSERT INTO `web_shop_area` VALUES('662','方正县','','652','651,652','0','662','','0','0','230124','');
INSERT INTO `web_shop_area` VALUES('663','宾县','','652','651,652','0','663','','0','0','230125','');
INSERT INTO `web_shop_area` VALUES('664','巴彦县','','652','651,652','0','664','','0','0','230126','');
INSERT INTO `web_shop_area` VALUES('665','木兰县','','652','651,652','0','665','','0','0','230127','');
INSERT INTO `web_shop_area` VALUES('666','通河县','','652','651,652','0','666','','0','0','230128','');
INSERT INTO `web_shop_area` VALUES('667','延寿县','','652','651,652','0','667','','0','0','230129','');
INSERT INTO `web_shop_area` VALUES('668','双城市','','652','651,652','0','668','','0','0','230182','');
INSERT INTO `web_shop_area` VALUES('669','尚志市','','652','651,652','0','669','','0','0','230183','');
INSERT INTO `web_shop_area` VALUES('670','五常市','','652','651,652','0','670','','0','0','230184','');
INSERT INTO `web_shop_area` VALUES('671','齐齐哈尔','','651','651','1','672,673,674,675,676,677,678,679,680,681,682,683,684,685,686,687','','0','0','230200','qiqihaer');
INSERT INTO `web_shop_area` VALUES('672','龙沙区','','671','651,671','0','672','','0','0','230202','');
INSERT INTO `web_shop_area` VALUES('673','建华区','','671','651,671','0','673','','0','0','230203','');
INSERT INTO `web_shop_area` VALUES('674','铁锋区','','671','651,671','0','674','','0','0','230204','');
INSERT INTO `web_shop_area` VALUES('675','昂昂溪区','','671','651,671','0','675','','0','0','230205','');
INSERT INTO `web_shop_area` VALUES('676','富拉尔基区','','671','651,671','0','676','','0','0','230206','');
INSERT INTO `web_shop_area` VALUES('677','碾子山区','','671','651,671','0','677','','0','0','230207','');
INSERT INTO `web_shop_area` VALUES('678','梅里斯达斡尔族区','','671','651,671','0','678','','0','0','230208','');
INSERT INTO `web_shop_area` VALUES('679','龙江县','','671','651,671','0','679','','0','0','230221','');
INSERT INTO `web_shop_area` VALUES('680','依安县','','671','651,671','0','680','','0','0','230223','');
INSERT INTO `web_shop_area` VALUES('681','泰来县','','671','651,671','0','681','','0','0','230224','');
INSERT INTO `web_shop_area` VALUES('682','甘南县','','671','651,671','0','682','','0','0','230225','');
INSERT INTO `web_shop_area` VALUES('683','富裕县','','671','651,671','0','683','','0','0','230227','');
INSERT INTO `web_shop_area` VALUES('684','克山县','','671','651,671','0','684','','0','0','230229','');
INSERT INTO `web_shop_area` VALUES('685','克东县','','671','651,671','0','685','','0','0','230230','');
INSERT INTO `web_shop_area` VALUES('686','拜泉县','','671','651,671','0','686','','0','0','230231','');
INSERT INTO `web_shop_area` VALUES('687','讷河市','','671','651,671','0','687','','0','0','230281','');
INSERT INTO `web_shop_area` VALUES('688','鸡西市','','651','651','1','689,690,691,692,693,694,695,696,697','','0','0','230300','jixi');
INSERT INTO `web_shop_area` VALUES('689','鸡冠区','','688','651,688','0','689','','0','0','230302','');
INSERT INTO `web_shop_area` VALUES('690','恒山区','','688','651,688','0','690','','0','0','230303','');
INSERT INTO `web_shop_area` VALUES('691','滴道区','','688','651,688','0','691','','0','0','230304','');
INSERT INTO `web_shop_area` VALUES('692','梨树区','','688','651,688','0','692','','0','0','230305','');
INSERT INTO `web_shop_area` VALUES('693','城子河区','','688','651,688','0','693','','0','0','230306','');
INSERT INTO `web_shop_area` VALUES('694','麻山区','','688','651,688','0','694','','0','0','230307','');
INSERT INTO `web_shop_area` VALUES('695','鸡东县','','688','651,688','0','695','','0','0','230321','');
INSERT INTO `web_shop_area` VALUES('696','虎林市','','688','651,688','0','696','','0','0','230381','');
INSERT INTO `web_shop_area` VALUES('697','密山市','','688','651,688','0','697','','0','0','230382','');
INSERT INTO `web_shop_area` VALUES('698','鹤岗市','','651','651','1','699,700,701,702,703,704,705,706','','0','0','230400','hegang');
INSERT INTO `web_shop_area` VALUES('699','向阳区','','698','651,698','0','699','','0','0','230402','');
INSERT INTO `web_shop_area` VALUES('700','工农区','','698','651,698','0','700','','0','0','230403','');
INSERT INTO `web_shop_area` VALUES('701','南山区','','698','651,698','0','701','','0','0','230404','');
INSERT INTO `web_shop_area` VALUES('702','兴安区','','698','651,698','0','702','','0','0','230405','');
INSERT INTO `web_shop_area` VALUES('703','东山区','','698','651,698','0','703','','0','0','230406','');
INSERT INTO `web_shop_area` VALUES('704','兴山区','','698','651,698','0','704','','0','0','230407','');
INSERT INTO `web_shop_area` VALUES('705','萝北县','','698','651,698','0','705','','0','0','230421','');
INSERT INTO `web_shop_area` VALUES('706','绥滨县','','698','651,698','0','706','','0','0','230422','');
INSERT INTO `web_shop_area` VALUES('707','双鸭山','','651','651','1','708,709,710,711,712,713,714,715','','0','0','230500','shuangyashan');
INSERT INTO `web_shop_area` VALUES('708','尖山区','','707','651,707','0','708','','0','0','230502','');
INSERT INTO `web_shop_area` VALUES('709','岭东区','','707','651,707','0','709','','0','0','230503','');
INSERT INTO `web_shop_area` VALUES('710','四方台区','','707','651,707','0','710','','0','0','230505','');
INSERT INTO `web_shop_area` VALUES('711','宝山区','','707','651,707','0','711','','0','0','230506','');
INSERT INTO `web_shop_area` VALUES('712','集贤县','','707','651,707','0','712','','0','0','230521','');
INSERT INTO `web_shop_area` VALUES('713','友谊县','','707','651,707','0','713','','0','0','230522','');
INSERT INTO `web_shop_area` VALUES('714','宝清县','','707','651,707','0','714','','0','0','230523','');
INSERT INTO `web_shop_area` VALUES('715','饶河县','','707','651,707','0','715','','0','0','230524','');
INSERT INTO `web_shop_area` VALUES('716','大庆市','','651','651','1','717,718,719,720,721,722,723,724,725','','0','0','230600','daqing');
INSERT INTO `web_shop_area` VALUES('717','萨尔图区','','716','651,716','0','717','','0','0','230602','');
INSERT INTO `web_shop_area` VALUES('718','龙凤区','','716','651,716','0','718','','0','0','230603','');
INSERT INTO `web_shop_area` VALUES('719','让胡路区','','716','651,716','0','719','','0','0','230604','');
INSERT INTO `web_shop_area` VALUES('720','红岗区','','716','651,716','0','720','','0','0','230605','');
INSERT INTO `web_shop_area` VALUES('721','大同区','','716','651,716','0','721','','0','0','230606','');
INSERT INTO `web_shop_area` VALUES('722','肇州县','','716','651,716','0','722','','0','0','230621','');
INSERT INTO `web_shop_area` VALUES('723','肇源县','','716','651,716','0','723','','0','0','230622','');
INSERT INTO `web_shop_area` VALUES('724','林甸县','','716','651,716','0','724','','0','0','230623','');
INSERT INTO `web_shop_area` VALUES('725','杜尔伯特蒙古族自治县','','716','651,716','0','725','','0','0','230624','');
INSERT INTO `web_shop_area` VALUES('726','伊春市','','651','651','1','727,728,729,730,731,732,733,734,735,736,737,738,739,740,741,742,743','','0','0','230700','yichunshi');
INSERT INTO `web_shop_area` VALUES('727','伊春区','','726','651,726','0','727','','0','0','230702','');
INSERT INTO `web_shop_area` VALUES('728','南岔区','','726','651,726','0','728','','0','0','230703','');
INSERT INTO `web_shop_area` VALUES('729','友好区','','726','651,726','0','729','','0','0','230704','');
INSERT INTO `web_shop_area` VALUES('730','西林区','','726','651,726','0','730','','0','0','230705','');
INSERT INTO `web_shop_area` VALUES('731','翠峦区','','726','651,726','0','731','','0','0','230706','');
INSERT INTO `web_shop_area` VALUES('732','新青区','','726','651,726','0','732','','0','0','230707','');
INSERT INTO `web_shop_area` VALUES('733','美溪区','','726','651,726','0','733','','0','0','230708','');
INSERT INTO `web_shop_area` VALUES('734','金山屯区','','726','651,726','0','734','','0','0','230709','');
INSERT INTO `web_shop_area` VALUES('735','五营区','','726','651,726','0','735','','0','0','230710','');
INSERT INTO `web_shop_area` VALUES('736','乌马河区','','726','651,726','0','736','','0','0','230711','');
INSERT INTO `web_shop_area` VALUES('737','汤旺河区','','726','651,726','0','737','','0','0','230712','');
INSERT INTO `web_shop_area` VALUES('738','带岭区','','726','651,726','0','738','','0','0','230713','');
INSERT INTO `web_shop_area` VALUES('739','乌伊岭区','','726','651,726','0','739','','0','0','230714','');
INSERT INTO `web_shop_area` VALUES('740','红星区','','726','651,726','0','740','','0','0','230715','');
INSERT INTO `web_shop_area` VALUES('741','上甘岭区','','726','651,726','0','741','','0','0','230716','');
INSERT INTO `web_shop_area` VALUES('742','嘉荫县','','726','651,726','0','742','','0','0','230722','');
INSERT INTO `web_shop_area` VALUES('743','铁力市','','726','651,726','0','743','','0','0','230781','');
INSERT INTO `web_shop_area` VALUES('744','佳木斯','','651','651','1','745,746,747,748,749,750,751,752,753,754','','0','0','230800','jiamusi');
INSERT INTO `web_shop_area` VALUES('745','向阳区','','744','651,744','0','745','','0','0','230803','');
INSERT INTO `web_shop_area` VALUES('746','前进区','','744','651,744','0','746','','0','0','230804','');
INSERT INTO `web_shop_area` VALUES('747','东风区','','744','651,744','0','747','','0','0','230805','');
INSERT INTO `web_shop_area` VALUES('748','郊区','','744','651,744','0','748','','0','0','230811','');
INSERT INTO `web_shop_area` VALUES('749','桦南县','','744','651,744','0','749','','0','0','230822','');
INSERT INTO `web_shop_area` VALUES('750','桦川县','','744','651,744','0','750','','0','0','230826','');
INSERT INTO `web_shop_area` VALUES('751','汤原县','','744','651,744','0','751','','0','0','230828','');
INSERT INTO `web_shop_area` VALUES('752','抚远县','','744','651,744','0','752','','0','0','230833','');
INSERT INTO `web_shop_area` VALUES('753','同江市','','744','651,744','0','753','','0','0','230881','');
INSERT INTO `web_shop_area` VALUES('754','富锦市','','744','651,744','0','754','','0','0','230882','');
INSERT INTO `web_shop_area` VALUES('755','七台河','','651','651','1','756,757,758,759','','0','0','230900','qitaihe');
INSERT INTO `web_shop_area` VALUES('756','新兴区','','755','651,755','0','756','','0','0','230902','');
INSERT INTO `web_shop_area` VALUES('757','桃山区','','755','651,755','0','757','','0','0','230903','');
INSERT INTO `web_shop_area` VALUES('758','茄子河区','','755','651,755','0','758','','0','0','230904','');
INSERT INTO `web_shop_area` VALUES('759','勃利县','','755','651,755','0','759','','0','0','230921','');
INSERT INTO `web_shop_area` VALUES('760','牡丹江','','651','651','1','761,762,763,764,765,766,767,768,769,770','','0','0','231000','mudanjiang');
INSERT INTO `web_shop_area` VALUES('761','东安区','','760','651,760','0','761','','0','0','231002','');
INSERT INTO `web_shop_area` VALUES('762','阳明区','','760','651,760','0','762','','0','0','231003','');
INSERT INTO `web_shop_area` VALUES('763','爱民区','','760','651,760','0','763','','0','0','231004','');
INSERT INTO `web_shop_area` VALUES('764','西安区','','760','651,760','0','764','','0','0','231005','');
INSERT INTO `web_shop_area` VALUES('765','东宁县','','760','651,760','0','765','','0','0','231024','');
INSERT INTO `web_shop_area` VALUES('766','林口县','','760','651,760','0','766','','0','0','231025','');
INSERT INTO `web_shop_area` VALUES('767','绥芬河市','','760','651,760','0','767','','0','0','231081','');
INSERT INTO `web_shop_area` VALUES('768','海林市','','760','651,760','0','768','','0','0','231083','');
INSERT INTO `web_shop_area` VALUES('769','宁安市','','760','651,760','0','769','','0','0','231084','');
INSERT INTO `web_shop_area` VALUES('770','穆棱市','','760','651,760','0','770','','0','0','231085','');
INSERT INTO `web_shop_area` VALUES('771','黑河市','','651','651','1','772,773,774,775,776,777','','0','0','231100','heihe');
INSERT INTO `web_shop_area` VALUES('772','爱辉区','','771','651,771','0','772','','0','0','231102','');
INSERT INTO `web_shop_area` VALUES('773','嫩江县','','771','651,771','0','773','','0','0','231121','');
INSERT INTO `web_shop_area` VALUES('774','逊克县','','771','651,771','0','774','','0','0','231123','');
INSERT INTO `web_shop_area` VALUES('775','孙吴县','','771','651,771','0','775','','0','0','231124','');
INSERT INTO `web_shop_area` VALUES('776','北安市','','771','651,771','0','776','','0','0','231181','');
INSERT INTO `web_shop_area` VALUES('777','五大连池市','','771','651,771','0','777','','0','0','231182','');
INSERT INTO `web_shop_area` VALUES('778','绥化市','','651','651','1','779,780,781,782,783,784,785,786,787,788','','0','0','231200','suihua');
INSERT INTO `web_shop_area` VALUES('779','北林区','','778','651,778','0','779','','0','0','231202','');
INSERT INTO `web_shop_area` VALUES('780','望奎县','','778','651,778','0','780','','0','0','231221','');
INSERT INTO `web_shop_area` VALUES('781','兰西县','','778','651,778','0','781','','0','0','231222','');
INSERT INTO `web_shop_area` VALUES('782','青冈县','','778','651,778','0','782','','0','0','231223','');
INSERT INTO `web_shop_area` VALUES('783','庆安县','','778','651,778','0','783','','0','0','231224','');
INSERT INTO `web_shop_area` VALUES('784','明水县','','778','651,778','0','784','','0','0','231225','');
INSERT INTO `web_shop_area` VALUES('785','绥棱县','','778','651,778','0','785','','0','0','231226','');
INSERT INTO `web_shop_area` VALUES('786','安达市','','778','651,778','0','786','','0','0','231281','');
INSERT INTO `web_shop_area` VALUES('787','肇东市','','778','651,778','0','787','','0','0','231282','');
INSERT INTO `web_shop_area` VALUES('788','海伦市','','778','651,778','0','788','','0','0','231283','');
INSERT INTO `web_shop_area` VALUES('789','大兴安岭','','651','651','1','790,791,792,793,794,795,796','','0','0','232700','daxinganlingdi');
INSERT INTO `web_shop_area` VALUES('790','加格达奇区','','789','651,789','0','790','','0','0','232701','');
INSERT INTO `web_shop_area` VALUES('791','松岭区','','789','651,789','0','791','','0','0','232702','');
INSERT INTO `web_shop_area` VALUES('792','新林区','','789','651,789','0','792','','0','0','232703','');
INSERT INTO `web_shop_area` VALUES('793','呼中区','','789','651,789','0','793','','0','0','232704','');
INSERT INTO `web_shop_area` VALUES('794','呼玛县','','789','651,789','0','794','','0','0','232721','');
INSERT INTO `web_shop_area` VALUES('795','塔河县','','789','651,789','0','795','','0','0','232722','');
INSERT INTO `web_shop_area` VALUES('796','漠河县','','789','651,789','0','796','','0','0','232723','');
INSERT INTO `web_shop_area` VALUES('797','上海','','0','0','1','798,799,800,801,802,803,804,805,806,807,808,809,810,811,812,813,814,815,816','','3','0','310000','shanghai');
INSERT INTO `web_shop_area` VALUES('798','上海市','','797','797','1','799,800,801,802,803,804,805,806,807,808,809,810,811,812,813,814,815,816','','0','0','310100','shanghaishiqu');
INSERT INTO `web_shop_area` VALUES('799','黄浦区','','798','797,798','0','799','','0','0','310101','huangpuqu');
INSERT INTO `web_shop_area` VALUES('800','卢湾区','','798','797,798','0','800','','0','0','310103','luwanqu');
INSERT INTO `web_shop_area` VALUES('801','徐汇区','','798','797,798','0','801','','0','0','310104','xuhuiqu');
INSERT INTO `web_shop_area` VALUES('802','长宁区','','798','797,798','0','802','','0','0','310105','changningqu');
INSERT INTO `web_shop_area` VALUES('803','静安区','','798','797,798','0','803','','0','0','310106','jinganqu');
INSERT INTO `web_shop_area` VALUES('804','普陀区','','798','797,798','0','804','','0','0','310107','putuoqu');
INSERT INTO `web_shop_area` VALUES('805','闸北区','','798','797,798','0','805','','0','0','310108','zhabeiqu');
INSERT INTO `web_shop_area` VALUES('806','虹口区','','798','797,798','0','806','','0','0','310109','hongkouqu');
INSERT INTO `web_shop_area` VALUES('807','杨浦区','','798','797,798','0','807','','0','0','310110','yangpuqu');
INSERT INTO `web_shop_area` VALUES('808','闵行区','','798','797,798','0','808','','0','0','310112','minxingqu');
INSERT INTO `web_shop_area` VALUES('809','宝山区','','798','797,798','0','809','','0','0','310113','baoshanqu');
INSERT INTO `web_shop_area` VALUES('810','嘉定区','','798','797,798','0','810','','0','0','310114','jiadingqu');
INSERT INTO `web_shop_area` VALUES('811','浦东新区','','798','797,798','0','811','','0','0','310115','pudongxinqu');
INSERT INTO `web_shop_area` VALUES('812','金山区','','798','797,798','0','812','','0','0','310116','jinshanqu');
INSERT INTO `web_shop_area` VALUES('813','松江区','','798','797,798','0','813','','0','0','310117','songjiangqu');
INSERT INTO `web_shop_area` VALUES('814','青浦区','','798','797,798','0','814','','0','0','310118','qingpuqu');
INSERT INTO `web_shop_area` VALUES('815','奉贤区','','798','797,798','0','815','','0','0','310120','fengxianqu');
INSERT INTO `web_shop_area` VALUES('816','崇明县','','798','797,798','0','816','','0','0','310230','chongmingxian');
INSERT INTO `web_shop_area` VALUES('817','江苏','','0','0','1','818,832,841,852,860,872,881,889,898,908,916,923,930,819,820,821,822,823,824,825,826,827,828,829,830,831','','6','0','320000','jiangsu');
INSERT INTO `web_shop_area` VALUES('818','南京市','','817','817','1','819,820,821,822,823,824,825,826,827,828,829,830,831','','0','0','320100','nanjing');
INSERT INTO `web_shop_area` VALUES('819','玄武区','','818','817,818','0','819','','0','0','320102','');
INSERT INTO `web_shop_area` VALUES('820','白下区','','818','817,818','0','820','','0','0','320103','');
INSERT INTO `web_shop_area` VALUES('821','秦淮区','','818','817,818','0','821','','0','0','320104','');
INSERT INTO `web_shop_area` VALUES('822','建邺区','','818','817,818','0','822','','0','0','320105','');
INSERT INTO `web_shop_area` VALUES('823','鼓楼区','','818','817,818','0','823','','0','0','320106','');
INSERT INTO `web_shop_area` VALUES('824','下关区','','818','817,818','0','824','','0','0','320107','');
INSERT INTO `web_shop_area` VALUES('825','浦口区','','818','817,818','0','825','','0','0','320111','');
INSERT INTO `web_shop_area` VALUES('826','栖霞区','','818','817,818','0','826','','0','0','320113','');
INSERT INTO `web_shop_area` VALUES('827','雨花台区','','818','817,818','0','827','','0','0','320114','');
INSERT INTO `web_shop_area` VALUES('828','江宁区','','818','817,818','0','828','','0','0','320115','');
INSERT INTO `web_shop_area` VALUES('829','六合区','','818','817,818','0','829','','0','0','320116','');
INSERT INTO `web_shop_area` VALUES('830','溧水县','','818','817,818','0','830','','0','0','320124','');
INSERT INTO `web_shop_area` VALUES('831','高淳县','','818','817,818','0','831','','0','0','320125','');
INSERT INTO `web_shop_area` VALUES('832','无锡市','','817','817','1','833,834,835,836,837,838,839,840','','0','0','320200','wuxi');
INSERT INTO `web_shop_area` VALUES('833','崇安区','','832','817,832','0','833','','0','0','320202','');
INSERT INTO `web_shop_area` VALUES('834','南长区','','832','817,832','0','834','','0','0','320203','');
INSERT INTO `web_shop_area` VALUES('835','北塘区','','832','817,832','0','835','','0','0','320204','');
INSERT INTO `web_shop_area` VALUES('836','锡山区','','832','817,832','0','836','','0','0','320205','');
INSERT INTO `web_shop_area` VALUES('837','惠山区','','832','817,832','0','837','','0','0','320206','');
INSERT INTO `web_shop_area` VALUES('838','滨湖区','','832','817,832','0','838','','0','0','320211','');
INSERT INTO `web_shop_area` VALUES('839','江阴市','','832','817,832','0','839','','0','0','320281','');
INSERT INTO `web_shop_area` VALUES('840','宜兴市','','832','817,832','0','840','','0','0','320282','');
INSERT INTO `web_shop_area` VALUES('841','徐州市','','817','817','1','842,843,844,845,846,847,848,849,850,851','','0','0','320300','xuzhou');
INSERT INTO `web_shop_area` VALUES('842','鼓楼区','','841','817,841','0','842','','0','0','320302','');
INSERT INTO `web_shop_area` VALUES('843','云龙区','','841','817,841','0','843','','0','0','320303','');
INSERT INTO `web_shop_area` VALUES('844','贾汪区','','841','817,841','0','844','','0','0','320305','');
INSERT INTO `web_shop_area` VALUES('845','泉山区','','841','817,841','0','845','','0','0','320311','');
INSERT INTO `web_shop_area` VALUES('846','铜山区','','841','817,841','0','846','','0','0','320312','');
INSERT INTO `web_shop_area` VALUES('847','丰县','','841','817,841','0','847','','0','0','320321','');
INSERT INTO `web_shop_area` VALUES('848','沛县','','841','817,841','0','848','','0','0','320322','');
INSERT INTO `web_shop_area` VALUES('849','睢宁县','','841','817,841','0','849','','0','0','320324','');
INSERT INTO `web_shop_area` VALUES('850','新沂市','','841','817,841','0','850','','0','0','320381','');
INSERT INTO `web_shop_area` VALUES('851','邳州市','','841','817,841','0','851','','0','0','320382','');
INSERT INTO `web_shop_area` VALUES('852','常州市','','817','817','1','853,854,855,856,857,858,859','','0','0','320400','changzhou');
INSERT INTO `web_shop_area` VALUES('853','天宁区','','852','817,852','0','853','','0','0','320402','');
INSERT INTO `web_shop_area` VALUES('854','钟楼区','','852','817,852','0','854','','0','0','320404','');
INSERT INTO `web_shop_area` VALUES('855','戚墅堰区','','852','817,852','0','855','','0','0','320405','');
INSERT INTO `web_shop_area` VALUES('856','新北区','','852','817,852','0','856','','0','0','320411','');
INSERT INTO `web_shop_area` VALUES('857','武进区','','852','817,852','0','857','','0','0','320412','');
INSERT INTO `web_shop_area` VALUES('858','溧阳市','','852','817,852','0','858','','0','0','320481','');
INSERT INTO `web_shop_area` VALUES('859','金坛市','','852','817,852','0','859','','0','0','320482','');
INSERT INTO `web_shop_area` VALUES('860','苏州市','','817','817','1','861,862,863,864,865,866,867,868,869,870,871','','0','0','320500','suzhou');
INSERT INTO `web_shop_area` VALUES('861','沧浪区','','860','817,860','0','861','','0','0','320502','');
INSERT INTO `web_shop_area` VALUES('862','平江区','','860','817,860','0','862','','0','0','320503','');
INSERT INTO `web_shop_area` VALUES('863','金阊区','','860','817,860','0','863','','0','0','320504','');
INSERT INTO `web_shop_area` VALUES('864','虎丘区','','860','817,860','0','864','','0','0','320505','');
INSERT INTO `web_shop_area` VALUES('865','吴中区','','860','817,860','0','865','','0','0','320506','');
INSERT INTO `web_shop_area` VALUES('866','相城区','','860','817,860','0','866','','0','0','320507','');
INSERT INTO `web_shop_area` VALUES('867','常熟市','','860','817,860','0','867','','0','0','320581','');
INSERT INTO `web_shop_area` VALUES('868','张家港市','','860','817,860','0','868','','0','0','320582','');
INSERT INTO `web_shop_area` VALUES('869','昆山市','','860','817,860','0','869','','0','0','320583','');
INSERT INTO `web_shop_area` VALUES('870','吴江市','','860','817,860','0','870','','0','0','320584','');
INSERT INTO `web_shop_area` VALUES('871','太仓市','','860','817,860','0','871','','0','0','320585','');
INSERT INTO `web_shop_area` VALUES('872','南通市','','817','817','1','873,874,875,876,877,878,879,880','','0','0','320600','nantong');
INSERT INTO `web_shop_area` VALUES('873','崇川区','','872','817,872','0','873','','0','0','320602','');
INSERT INTO `web_shop_area` VALUES('874','港闸区','','872','817,872','0','874','','0','0','320611','');
INSERT INTO `web_shop_area` VALUES('875','通州区','','872','817,872','0','875','','0','0','320612','');
INSERT INTO `web_shop_area` VALUES('876','海安县','','872','817,872','0','876','','0','0','320621','');
INSERT INTO `web_shop_area` VALUES('877','如东县','','872','817,872','0','877','','0','0','320623','');
INSERT INTO `web_shop_area` VALUES('878','启东市','','872','817,872','0','878','','0','0','320681','');
INSERT INTO `web_shop_area` VALUES('879','如皋市','','872','817,872','0','879','','0','0','320682','');
INSERT INTO `web_shop_area` VALUES('880','海门市','','872','817,872','0','880','','0','0','320684','');
INSERT INTO `web_shop_area` VALUES('881','连云港','','817','817','1','882,883,884,885,886,887,888','','0','0','320700','lianyungang');
INSERT INTO `web_shop_area` VALUES('882','连云区','','881','817,881','0','882','','0','0','320703','');
INSERT INTO `web_shop_area` VALUES('883','新浦区','','881','817,881','0','883','','0','0','320705','');
INSERT INTO `web_shop_area` VALUES('884','海州区','','881','817,881','0','884','','0','0','320706','');
INSERT INTO `web_shop_area` VALUES('885','赣榆县','','881','817,881','0','885','','0','0','320721','');
INSERT INTO `web_shop_area` VALUES('886','东海县','','881','817,881','0','886','','0','0','320722','');
INSERT INTO `web_shop_area` VALUES('887','灌云县','','881','817,881','0','887','','0','0','320723','');
INSERT INTO `web_shop_area` VALUES('888','灌南县','','881','817,881','0','888','','0','0','320724','');
INSERT INTO `web_shop_area` VALUES('889','淮安市','','817','817','1','890,891,892,893,894,895,896,897','','0','0','320800','huaian');
INSERT INTO `web_shop_area` VALUES('890','清河区','','889','817,889','0','890','','0','0','320802','');
INSERT INTO `web_shop_area` VALUES('891','楚州区','','889','817,889','0','891','','0','0','320803','');
INSERT INTO `web_shop_area` VALUES('892','淮阴区','','889','817,889','0','892','','0','0','320804','');
INSERT INTO `web_shop_area` VALUES('893','清浦区','','889','817,889','0','893','','0','0','320811','');
INSERT INTO `web_shop_area` VALUES('894','涟水县','','889','817,889','0','894','','0','0','320826','');
INSERT INTO `web_shop_area` VALUES('895','洪泽县','','889','817,889','0','895','','0','0','320829','');
INSERT INTO `web_shop_area` VALUES('896','盱眙县','','889','817,889','0','896','','0','0','320830','');
INSERT INTO `web_shop_area` VALUES('897','金湖县','','889','817,889','0','897','','0','0','320831','');
INSERT INTO `web_shop_area` VALUES('898','盐城市','','817','817','1','899,900,901,902,903,904,905,906,907','','0','0','320900','yancheng');
INSERT INTO `web_shop_area` VALUES('899','亭湖区','','898','817,898','0','899','','0','0','320902','');
INSERT INTO `web_shop_area` VALUES('900','盐都区','','898','817,898','0','900','','0','0','320903','');
INSERT INTO `web_shop_area` VALUES('901','响水县','','898','817,898','0','901','','0','0','320921','');
INSERT INTO `web_shop_area` VALUES('902','滨海县','','898','817,898','0','902','','0','0','320922','');
INSERT INTO `web_shop_area` VALUES('903','阜宁县','','898','817,898','0','903','','0','0','320923','');
INSERT INTO `web_shop_area` VALUES('904','射阳县','','898','817,898','0','904','','0','0','320924','');
INSERT INTO `web_shop_area` VALUES('905','建湖县','','898','817,898','0','905','','0','0','320925','');
INSERT INTO `web_shop_area` VALUES('906','东台市','','898','817,898','0','906','','0','0','320981','');
INSERT INTO `web_shop_area` VALUES('907','大丰市','','898','817,898','0','907','','0','0','320982','');
INSERT INTO `web_shop_area` VALUES('908','扬州市','','817','817','1','909,910,911,912,913,914,915','','0','0','321000','yangzhou');
INSERT INTO `web_shop_area` VALUES('909','广陵区','','908','817,908','0','909','','0','0','321002','');
INSERT INTO `web_shop_area` VALUES('910','邗江区','','908','817,908','0','910','','0','0','321003','');
INSERT INTO `web_shop_area` VALUES('911','维扬区','','908','817,908','0','911','','0','0','321011','');
INSERT INTO `web_shop_area` VALUES('912','宝应县','','908','817,908','0','912','','0','0','321023','');
INSERT INTO `web_shop_area` VALUES('913','仪征市','','908','817,908','0','913','','0','0','321081','');
INSERT INTO `web_shop_area` VALUES('914','高邮市','','908','817,908','0','914','','0','0','321084','');
INSERT INTO `web_shop_area` VALUES('915','江都市','','908','817,908','0','915','','0','0','321088','');
INSERT INTO `web_shop_area` VALUES('916','镇江市','','817','817','1','917,918,919,920,921,922','','0','0','321100','zhenjiang');
INSERT INTO `web_shop_area` VALUES('917','京口区','','916','817,916','0','917','','0','0','321102','');
INSERT INTO `web_shop_area` VALUES('918','润州区','','916','817,916','0','918','','0','0','321111','');
INSERT INTO `web_shop_area` VALUES('919','丹徒区','','916','817,916','0','919','','0','0','321112','');
INSERT INTO `web_shop_area` VALUES('920','丹阳市','','916','817,916','0','920','','0','0','321181','');
INSERT INTO `web_shop_area` VALUES('921','扬中市','','916','817,916','0','921','','0','0','321182','');
INSERT INTO `web_shop_area` VALUES('922','句容市','','916','817,916','0','922','','0','0','321183','');
INSERT INTO `web_shop_area` VALUES('923','泰州市','','817','817','1','924,925,926,927,928,929','','0','0','321200','taizhou');
INSERT INTO `web_shop_area` VALUES('924','海陵区','','923','817,923','0','924','','0','0','321202','');
INSERT INTO `web_shop_area` VALUES('925','高港区','','923','817,923','0','925','','0','0','321203','');
INSERT INTO `web_shop_area` VALUES('926','兴化市','','923','817,923','0','926','','0','0','321281','');
INSERT INTO `web_shop_area` VALUES('927','靖江市','','923','817,923','0','927','','0','0','321282','');
INSERT INTO `web_shop_area` VALUES('928','泰兴市','','923','817,923','0','928','','0','0','321283','');
INSERT INTO `web_shop_area` VALUES('929','姜堰市','','923','817,923','0','929','','0','0','321284','');
INSERT INTO `web_shop_area` VALUES('930','宿迁市','','817','817','1','931,932,933,934,935','','0','0','321300','suqian');
INSERT INTO `web_shop_area` VALUES('931','宿城区','','930','817,930','0','931','','0','0','321302','');
INSERT INTO `web_shop_area` VALUES('932','宿豫区','','930','817,930','0','932','','0','0','321311','');
INSERT INTO `web_shop_area` VALUES('933','沭阳县','','930','817,930','0','933','','0','0','321322','');
INSERT INTO `web_shop_area` VALUES('934','泗阳县','','930','817,930','0','934','','0','0','321323','');
INSERT INTO `web_shop_area` VALUES('935','泗洪县','','930','817,930','0','935','','0','0','321324','');
INSERT INTO `web_shop_area` VALUES('936','浙江','','0','0','1','937,951,963,975,983,989,996,1006,1013,1018,1028,938,939,940,941,942,943,944,945,946,947,948,949,950','','7','0','330000','zhejiang');
INSERT INTO `web_shop_area` VALUES('937','杭州市','','936','936','1','938,939,940,941,942,943,944,945,946,947,948,949,950','','0','0','330100','hangzhou');
INSERT INTO `web_shop_area` VALUES('938','上城区','','937','936,937','0','938','','0','0','330102','');
INSERT INTO `web_shop_area` VALUES('939','下城区','','937','936,937','0','939','','0','0','330103','');
INSERT INTO `web_shop_area` VALUES('940','江干区','','937','936,937','0','940','','0','0','330104','');
INSERT INTO `web_shop_area` VALUES('941','拱墅区','','937','936,937','0','941','','0','0','330105','');
INSERT INTO `web_shop_area` VALUES('942','西湖区','','937','936,937','0','942','','0','0','330106','');
INSERT INTO `web_shop_area` VALUES('943','滨江区','','937','936,937','0','943','','0','0','330108','');
INSERT INTO `web_shop_area` VALUES('944','萧山区','','937','936,937','0','944','','0','0','330109','');
INSERT INTO `web_shop_area` VALUES('945','余杭区','','937','936,937','0','945','','0','0','330110','');
INSERT INTO `web_shop_area` VALUES('946','桐庐县','','937','936,937','0','946','','0','0','330122','');
INSERT INTO `web_shop_area` VALUES('947','淳安县','','937','936,937','0','947','','0','0','330127','');
INSERT INTO `web_shop_area` VALUES('948','建德市','','937','936,937','0','948','','0','0','330182','');
INSERT INTO `web_shop_area` VALUES('949','富阳市','','937','936,937','0','949','','0','0','330183','');
INSERT INTO `web_shop_area` VALUES('950','临安市','','937','936,937','0','950','','0','0','330185','');
INSERT INTO `web_shop_area` VALUES('951','宁波市','','936','936','1','952,953,954,955,956,957,958,959,960,961,962','','0','0','330200','ningbo');
INSERT INTO `web_shop_area` VALUES('952','海曙区','','951','936,951','0','952','','0','0','330203','');
INSERT INTO `web_shop_area` VALUES('953','江东区','','951','936,951','0','953','','0','0','330204','');
INSERT INTO `web_shop_area` VALUES('954','江北区','','951','936,951','0','954','','0','0','330205','');
INSERT INTO `web_shop_area` VALUES('955','北仑区','','951','936,951','0','955','','0','0','330206','');
INSERT INTO `web_shop_area` VALUES('956','镇海区','','951','936,951','0','956','','0','0','330211','');
INSERT INTO `web_shop_area` VALUES('957','鄞州区','','951','936,951','0','957','','0','0','330212','');
INSERT INTO `web_shop_area` VALUES('958','象山县','','951','936,951','0','958','','0','0','330225','');
INSERT INTO `web_shop_area` VALUES('959','宁海县','','951','936,951','0','959','','0','0','330226','');
INSERT INTO `web_shop_area` VALUES('960','余姚市','','951','936,951','0','960','','0','0','330281','');
INSERT INTO `web_shop_area` VALUES('961','慈溪市','','951','936,951','0','961','','0','0','330282','');
INSERT INTO `web_shop_area` VALUES('962','奉化市','','951','936,951','0','962','','0','0','330283','');
INSERT INTO `web_shop_area` VALUES('963','温州市','','936','936','1','964,965,966,967,968,969,970,971,972,973,974','','0','0','330300','wenzhou');
INSERT INTO `web_shop_area` VALUES('964','鹿城区','','963','936,963','0','964','','0','0','330302','');
INSERT INTO `web_shop_area` VALUES('965','龙湾区','','963','936,963','0','965','','0','0','330303','');
INSERT INTO `web_shop_area` VALUES('966','瓯海区','','963','936,963','0','966','','0','0','330304','');
INSERT INTO `web_shop_area` VALUES('967','洞头县','','963','936,963','0','967','','0','0','330322','');
INSERT INTO `web_shop_area` VALUES('968','永嘉县','','963','936,963','0','968','','0','0','330324','');
INSERT INTO `web_shop_area` VALUES('969','平阳县','','963','936,963','0','969','','0','0','330326','');
INSERT INTO `web_shop_area` VALUES('970','苍南县','','963','936,963','0','970','','0','0','330327','');
INSERT INTO `web_shop_area` VALUES('971','文成县','','963','936,963','0','971','','0','0','330328','');
INSERT INTO `web_shop_area` VALUES('972','泰顺县','','963','936,963','0','972','','0','0','330329','');
INSERT INTO `web_shop_area` VALUES('973','瑞安市','','963','936,963','0','973','','0','0','330381','');
INSERT INTO `web_shop_area` VALUES('974','乐清市','','963','936,963','0','974','','0','0','330382','');
INSERT INTO `web_shop_area` VALUES('975','嘉兴市','','936','936','1','976,977,978,979,980,981,982','','0','0','330400','jiaxing');
INSERT INTO `web_shop_area` VALUES('976','南湖区','','975','936,975','0','976','','0','0','330402','');
INSERT INTO `web_shop_area` VALUES('977','秀洲区','','975','936,975','0','977','','0','0','330411','');
INSERT INTO `web_shop_area` VALUES('978','嘉善县','','975','936,975','0','978','','0','0','330421','');
INSERT INTO `web_shop_area` VALUES('979','海盐县','','975','936,975','0','979','','0','0','330424','');
INSERT INTO `web_shop_area` VALUES('980','海宁市','','975','936,975','0','980','','0','0','330481','');
INSERT INTO `web_shop_area` VALUES('981','平湖市','','975','936,975','0','981','','0','0','330482','');
INSERT INTO `web_shop_area` VALUES('982','桐乡市','','975','936,975','0','982','','0','0','330483','');
INSERT INTO `web_shop_area` VALUES('983','湖州市','','936','936','1','984,985,986,987,988','','0','0','330500','huzhou');
INSERT INTO `web_shop_area` VALUES('984','吴兴区','','983','936,983','0','984','','0','0','330502','');
INSERT INTO `web_shop_area` VALUES('985','南浔区','','983','936,983','0','985','','0','0','330503','');
INSERT INTO `web_shop_area` VALUES('986','德清县','','983','936,983','0','986','','0','0','330521','');
INSERT INTO `web_shop_area` VALUES('987','长兴县','','983','936,983','0','987','','0','0','330522','');
INSERT INTO `web_shop_area` VALUES('988','安吉县','','983','936,983','0','988','','0','0','330523','');
INSERT INTO `web_shop_area` VALUES('989','绍兴市','','936','936','1','990,991,992,993,994,995','','0','0','330600','shaoxing');
INSERT INTO `web_shop_area` VALUES('990','越城区','','989','936,989','0','990','','0','0','330602','');
INSERT INTO `web_shop_area` VALUES('991','绍兴县','','989','936,989','0','991','','0','0','330621','');
INSERT INTO `web_shop_area` VALUES('992','新昌县','','989','936,989','0','992','','0','0','330624','');
INSERT INTO `web_shop_area` VALUES('993','诸暨市','','989','936,989','0','993','','0','0','330681','');
INSERT INTO `web_shop_area` VALUES('994','上虞市','','989','936,989','0','994','','0','0','330682','');
INSERT INTO `web_shop_area` VALUES('995','嵊州市','','989','936,989','0','995','','0','0','330683','');
INSERT INTO `web_shop_area` VALUES('996','金华市','','936','936','1','997,998,999,1000,1001,1002,1003,1004,1005','','0','0','330700','jinhua');
INSERT INTO `web_shop_area` VALUES('997','婺城区','','996','936,996','0','997','','0','0','330702','');
INSERT INTO `web_shop_area` VALUES('998','金东区','','996','936,996','0','998','','0','0','330703','');
INSERT INTO `web_shop_area` VALUES('999','武义县','','996','936,996','0','999','','0','0','330723','');
INSERT INTO `web_shop_area` VALUES('1000','浦江县','','996','936,996','0','1000','','0','0','330726','');
INSERT INTO `web_shop_area` VALUES('1001','磐安县','','996','936,996','0','1001','','0','0','330727','');
INSERT INTO `web_shop_area` VALUES('1002','兰溪市','','996','936,996','0','1002','','0','0','330781','');
INSERT INTO `web_shop_area` VALUES('1003','义乌市','','996','936,996','0','1003','','0','0','330782','');
INSERT INTO `web_shop_area` VALUES('1004','东阳市','','996','936,996','0','1004','','0','0','330783','');
INSERT INTO `web_shop_area` VALUES('1005','永康市','','996','936,996','0','1005','','0','0','330784','');
INSERT INTO `web_shop_area` VALUES('1006','衢州市','','936','936','1','1007,1008,1009,1010,1011,1012','','0','0','330800','quzhou');
INSERT INTO `web_shop_area` VALUES('1007','柯城区','','1006','936,1006','0','1007','','0','0','330802','');
INSERT INTO `web_shop_area` VALUES('1008','衢江区','','1006','936,1006','0','1008','','0','0','330803','');
INSERT INTO `web_shop_area` VALUES('1009','常山县','','1006','936,1006','0','1009','','0','0','330822','');
INSERT INTO `web_shop_area` VALUES('1010','开化县','','1006','936,1006','0','1010','','0','0','330824','');
INSERT INTO `web_shop_area` VALUES('1011','龙游县','','1006','936,1006','0','1011','','0','0','330825','');
INSERT INTO `web_shop_area` VALUES('1012','江山市','','1006','936,1006','0','1012','','0','0','330881','');
INSERT INTO `web_shop_area` VALUES('1013','舟山市','','936','936','1','1014,1015,1016,1017','','0','0','330900','zhoushan');
INSERT INTO `web_shop_area` VALUES('1014','定海区','','1013','936,1013','0','1014','','0','0','330902','');
INSERT INTO `web_shop_area` VALUES('1015','普陀区','','1013','936,1013','0','1015','','0','0','330903','');
INSERT INTO `web_shop_area` VALUES('1016','岱山县','','1013','936,1013','0','1016','','0','0','330921','');
INSERT INTO `web_shop_area` VALUES('1017','嵊泗县','','1013','936,1013','0','1017','','0','0','330922','');
INSERT INTO `web_shop_area` VALUES('1018','台州市','','936','936','1','1019,1020,1021,1022,1023,1024,1025,1026,1027','','0','0','331000','taizhoushi');
INSERT INTO `web_shop_area` VALUES('1019','椒江区','','1018','936,1018','0','1019','','0','0','331002','');
INSERT INTO `web_shop_area` VALUES('1020','黄岩区','','1018','936,1018','0','1020','','0','0','331003','');
INSERT INTO `web_shop_area` VALUES('1021','路桥区','','1018','936,1018','0','1021','','0','0','331004','');
INSERT INTO `web_shop_area` VALUES('1022','玉环县','','1018','936,1018','0','1022','','0','0','331021','');
INSERT INTO `web_shop_area` VALUES('1023','三门县','','1018','936,1018','0','1023','','0','0','331022','');
INSERT INTO `web_shop_area` VALUES('1024','天台县','','1018','936,1018','0','1024','','0','0','331023','');
INSERT INTO `web_shop_area` VALUES('1025','仙居县','','1018','936,1018','0','1025','','0','0','331024','');
INSERT INTO `web_shop_area` VALUES('1026','温岭市','','1018','936,1018','0','1026','','0','0','331081','');
INSERT INTO `web_shop_area` VALUES('1027','临海市','','1018','936,1018','0','1027','','0','0','331082','');
INSERT INTO `web_shop_area` VALUES('1028','丽水市','','936','936','1','1029,1030,1031,1032,1033,1034,1035,1036,1037','','0','0','331100','lishui');
INSERT INTO `web_shop_area` VALUES('1029','莲都区','','1028','936,1028','0','1029','','0','0','331102','');
INSERT INTO `web_shop_area` VALUES('1030','青田县','','1028','936,1028','0','1030','','0','0','331121','');
INSERT INTO `web_shop_area` VALUES('1031','缙云县','','1028','936,1028','0','1031','','0','0','331122','');
INSERT INTO `web_shop_area` VALUES('1032','遂昌县','','1028','936,1028','0','1032','','0','0','331123','');
INSERT INTO `web_shop_area` VALUES('1033','松阳县','','1028','936,1028','0','1033','','0','0','331124','');
INSERT INTO `web_shop_area` VALUES('1034','云和县','','1028','936,1028','0','1034','','0','0','331125','');
INSERT INTO `web_shop_area` VALUES('1035','庆元县','','1028','936,1028','0','1035','','0','0','331126','');
INSERT INTO `web_shop_area` VALUES('1036','景宁畲族自治县','','1028','936,1028','0','1036','','0','0','331127','');
INSERT INTO `web_shop_area` VALUES('1037','龙泉市','','1028','936,1028','0','1037','','0','0','331181','');
INSERT INTO `web_shop_area` VALUES('1038','安徽','','0','0','1','1039,1047,1055,1063,1070,1075,1080,1085,1097,1105,1114,1123,1129,1135,1143,1148,1153,1040,1041,1042,1043,1044,1045,1046','','13','0','340000','anhui');
INSERT INTO `web_shop_area` VALUES('1039','合肥市','','1038','1038','1','1040,1041,1042,1043,1044,1045,1046','','0','0','340100','hefei');
INSERT INTO `web_shop_area` VALUES('1040','瑶海区','','1039','1038,1039','0','1040','','0','0','340102','');
INSERT INTO `web_shop_area` VALUES('1041','庐阳区','','1039','1038,1039','0','1041','','0','0','340103','');
INSERT INTO `web_shop_area` VALUES('1042','蜀山区','','1039','1038,1039','0','1042','','0','0','340104','');
INSERT INTO `web_shop_area` VALUES('1043','包河区','','1039','1038,1039','0','1043','','0','0','340111','');
INSERT INTO `web_shop_area` VALUES('1044','长丰县','','1039','1038,1039','0','1044','','0','0','340121','');
INSERT INTO `web_shop_area` VALUES('1045','肥东县','','1039','1038,1039','0','1045','','0','0','340122','');
INSERT INTO `web_shop_area` VALUES('1046','肥西县','','1039','1038,1039','0','1046','','0','0','340123','');
INSERT INTO `web_shop_area` VALUES('1047','芜湖市','','1038','1038','1','1048,1049,1050,1051,1052,1053,1054','','0','0','340200','wuhu');
INSERT INTO `web_shop_area` VALUES('1048','镜湖区','','1047','1038,1047','0','1048','','0','0','340202','');
INSERT INTO `web_shop_area` VALUES('1049','弋江区','','1047','1038,1047','0','1049','','0','0','340203','');
INSERT INTO `web_shop_area` VALUES('1050','鸠江区','','1047','1038,1047','0','1050','','0','0','340207','');
INSERT INTO `web_shop_area` VALUES('1051','三山区','','1047','1038,1047','0','1051','','0','0','340208','');
INSERT INTO `web_shop_area` VALUES('1052','芜湖县','','1047','1038,1047','0','1052','','0','0','340221','');
INSERT INTO `web_shop_area` VALUES('1053','繁昌县','','1047','1038,1047','0','1053','','0','0','340222','');
INSERT INTO `web_shop_area` VALUES('1054','南陵县','','1047','1038,1047','0','1054','','0','0','340223','');
INSERT INTO `web_shop_area` VALUES('1055','蚌埠市','','1038','1038','1','1056,1057,1058,1059,1060,1061,1062','','0','0','340300','bengbu');
INSERT INTO `web_shop_area` VALUES('1056','龙子湖区','','1055','1038,1055','0','1056','','0','0','340302','');
INSERT INTO `web_shop_area` VALUES('1057','蚌山区','','1055','1038,1055','0','1057','','0','0','340303','');
INSERT INTO `web_shop_area` VALUES('1058','禹会区','','1055','1038,1055','0','1058','','0','0','340304','');
INSERT INTO `web_shop_area` VALUES('1059','淮上区','','1055','1038,1055','0','1059','','0','0','340311','');
INSERT INTO `web_shop_area` VALUES('1060','怀远县','','1055','1038,1055','0','1060','','0','0','340321','');
INSERT INTO `web_shop_area` VALUES('1061','五河县','','1055','1038,1055','0','1061','','0','0','340322','');
INSERT INTO `web_shop_area` VALUES('1062','固镇县','','1055','1038,1055','0','1062','','0','0','340323','');
INSERT INTO `web_shop_area` VALUES('1063','淮南市','','1038','1038','1','1064,1065,1066,1067,1068,1069','','0','0','340400','huainan');
INSERT INTO `web_shop_area` VALUES('1064','大通区','','1063','1038,1063','0','1064','','0','0','340402','');
INSERT INTO `web_shop_area` VALUES('1065','田家庵区','','1063','1038,1063','0','1065','','0','0','340403','');
INSERT INTO `web_shop_area` VALUES('1066','谢家集区','','1063','1038,1063','0','1066','','0','0','340404','');
INSERT INTO `web_shop_area` VALUES('1067','八公山区','','1063','1038,1063','0','1067','','0','0','340405','');
INSERT INTO `web_shop_area` VALUES('1068','潘集区','','1063','1038,1063','0','1068','','0','0','340406','');
INSERT INTO `web_shop_area` VALUES('1069','凤台县','','1063','1038,1063','0','1069','','0','0','340421','');
INSERT INTO `web_shop_area` VALUES('1070','马鞍山','','1038','1038','1','1071,1072,1073,1074','','0','0','340500','maanshan');
INSERT INTO `web_shop_area` VALUES('1071','金家庄区','','1070','1038,1070','0','1071','','0','0','340502','');
INSERT INTO `web_shop_area` VALUES('1072','花山区','','1070','1038,1070','0','1072','','0','0','340503','');
INSERT INTO `web_shop_area` VALUES('1073','雨山区','','1070','1038,1070','0','1073','','0','0','340504','');
INSERT INTO `web_shop_area` VALUES('1074','当涂县','','1070','1038,1070','0','1074','','0','0','340521','');
INSERT INTO `web_shop_area` VALUES('1075','淮北市','','1038','1038','1','1076,1077,1078,1079','','0','0','340600','huaibei');
INSERT INTO `web_shop_area` VALUES('1076','杜集区','','1075','1038,1075','0','1076','','0','0','340602','');
INSERT INTO `web_shop_area` VALUES('1077','相山区','','1075','1038,1075','0','1077','','0','0','340603','');
INSERT INTO `web_shop_area` VALUES('1078','烈山区','','1075','1038,1075','0','1078','','0','0','340604','');
INSERT INTO `web_shop_area` VALUES('1079','濉溪县','','1075','1038,1075','0','1079','','0','0','340621','');
INSERT INTO `web_shop_area` VALUES('1080','铜陵市','','1038','1038','1','1081,1082,1083,1084','','0','0','340700','tongling');
INSERT INTO `web_shop_area` VALUES('1081','铜官山区','','1080','1038,1080','0','1081','','0','0','340702','');
INSERT INTO `web_shop_area` VALUES('1082','狮子山区','','1080','1038,1080','0','1082','','0','0','340703','');
INSERT INTO `web_shop_area` VALUES('1083','郊区','','1080','1038,1080','0','1083','','0','0','340711','');
INSERT INTO `web_shop_area` VALUES('1084','铜陵县','','1080','1038,1080','0','1084','','0','0','340721','');
INSERT INTO `web_shop_area` VALUES('1085','安庆市','','1038','1038','1','1086,1087,1088,1089,1090,1091,1092,1093,1094,1095,1096','','0','0','340800','anqing');
INSERT INTO `web_shop_area` VALUES('1086','迎江区','','1085','1038,1085','0','1086','','0','0','340802','');
INSERT INTO `web_shop_area` VALUES('1087','大观区','','1085','1038,1085','0','1087','','0','0','340803','');
INSERT INTO `web_shop_area` VALUES('1088','宜秀区','','1085','1038,1085','0','1088','','0','0','340811','');
INSERT INTO `web_shop_area` VALUES('1089','怀宁县','','1085','1038,1085','0','1089','','0','0','340822','');
INSERT INTO `web_shop_area` VALUES('1090','枞阳县','','1085','1038,1085','0','1090','','0','0','340823','');
INSERT INTO `web_shop_area` VALUES('1091','潜山县','','1085','1038,1085','0','1091','','0','0','340824','');
INSERT INTO `web_shop_area` VALUES('1092','太湖县','','1085','1038,1085','0','1092','','0','0','340825','');
INSERT INTO `web_shop_area` VALUES('1093','宿松县','','1085','1038,1085','0','1093','','0','0','340826','');
INSERT INTO `web_shop_area` VALUES('1094','望江县','','1085','1038,1085','0','1094','','0','0','340827','');
INSERT INTO `web_shop_area` VALUES('1095','岳西县','','1085','1038,1085','0','1095','','0','0','340828','');
INSERT INTO `web_shop_area` VALUES('1096','桐城市','','1085','1038,1085','0','1096','','0','0','340881','');
INSERT INTO `web_shop_area` VALUES('1097','黄山市','','1038','1038','1','1098,1099,1100,1101,1102,1103,1104','','0','0','341000','huangshan');
INSERT INTO `web_shop_area` VALUES('1098','屯溪区','','1097','1038,1097','0','1098','','0','0','341002','');
INSERT INTO `web_shop_area` VALUES('1099','黄山区','','1097','1038,1097','0','1099','','0','0','341003','');
INSERT INTO `web_shop_area` VALUES('1100','徽州区','','1097','1038,1097','0','1100','','0','0','341004','');
INSERT INTO `web_shop_area` VALUES('1101','歙县','','1097','1038,1097','0','1101','','0','0','341021','');
INSERT INTO `web_shop_area` VALUES('1102','休宁县','','1097','1038,1097','0','1102','','0','0','341022','');
INSERT INTO `web_shop_area` VALUES('1103','黟县','','1097','1038,1097','0','1103','','0','0','341023','');
INSERT INTO `web_shop_area` VALUES('1104','祁门县','','1097','1038,1097','0','1104','','0','0','341024','');
INSERT INTO `web_shop_area` VALUES('1105','滁州市','','1038','1038','1','1106,1107,1108,1109,1110,1111,1112,1113','','0','0','341100','chuzhou');
INSERT INTO `web_shop_area` VALUES('1106','琅琊区','','1105','1038,1105','0','1106','','0','0','341102','');
INSERT INTO `web_shop_area` VALUES('1107','南谯区','','1105','1038,1105','0','1107','','0','0','341103','');
INSERT INTO `web_shop_area` VALUES('1108','来安县','','1105','1038,1105','0','1108','','0','0','341122','');
INSERT INTO `web_shop_area` VALUES('1109','全椒县','','1105','1038,1105','0','1109','','0','0','341124','');
INSERT INTO `web_shop_area` VALUES('1110','定远县','','1105','1038,1105','0','1110','','0','0','341125','');
INSERT INTO `web_shop_area` VALUES('1111','凤阳县','','1105','1038,1105','0','1111','','0','0','341126','');
INSERT INTO `web_shop_area` VALUES('1112','天长市','','1105','1038,1105','0','1112','','0','0','341181','');
INSERT INTO `web_shop_area` VALUES('1113','明光市','','1105','1038,1105','0','1113','','0','0','341182','');
INSERT INTO `web_shop_area` VALUES('1114','阜阳市','','1038','1038','1','1115,1116,1117,1118,1119,1120,1121,1122','','0','0','341200','fuyang');
INSERT INTO `web_shop_area` VALUES('1115','颍州区','','1114','1038,1114','0','1115','','0','0','341202','');
INSERT INTO `web_shop_area` VALUES('1116','颍东区','','1114','1038,1114','0','1116','','0','0','341203','');
INSERT INTO `web_shop_area` VALUES('1117','颍泉区','','1114','1038,1114','0','1117','','0','0','341204','');
INSERT INTO `web_shop_area` VALUES('1118','临泉县','','1114','1038,1114','0','1118','','0','0','341221','');
INSERT INTO `web_shop_area` VALUES('1119','太和县','','1114','1038,1114','0','1119','','0','0','341222','');
INSERT INTO `web_shop_area` VALUES('1120','阜南县','','1114','1038,1114','0','1120','','0','0','341225','');
INSERT INTO `web_shop_area` VALUES('1121','颍上县','','1114','1038,1114','0','1121','','0','0','341226','');
INSERT INTO `web_shop_area` VALUES('1122','界首市','','1114','1038,1114','0','1122','','0','0','341282','');
INSERT INTO `web_shop_area` VALUES('1123','宿州市','','1038','1038','1','1124,1125,1126,1127,1128','','0','0','341300','suzhoushi');
INSERT INTO `web_shop_area` VALUES('1124','埇桥区','','1123','1038,1123','0','1124','','0','0','341302','');
INSERT INTO `web_shop_area` VALUES('1125','砀山县','','1123','1038,1123','0','1125','','0','0','341321','');
INSERT INTO `web_shop_area` VALUES('1126','萧县','','1123','1038,1123','0','1126','','0','0','341322','');
INSERT INTO `web_shop_area` VALUES('1127','灵璧县','','1123','1038,1123','0','1127','','0','0','341323','');
INSERT INTO `web_shop_area` VALUES('1128','泗县','','1123','1038,1123','0','1128','','0','0','341324','');
INSERT INTO `web_shop_area` VALUES('1129','巢湖市','','1038','1038','1','1130,1131,1132,1133,1134','','0','0','341400','chaohu');
INSERT INTO `web_shop_area` VALUES('1130','居巢区','','1129','1038,1129','0','1130','','0','0','341402','');
INSERT INTO `web_shop_area` VALUES('1131','庐江县','','1129','1038,1129','0','1131','','0','0','341421','');
INSERT INTO `web_shop_area` VALUES('1132','无为县','','1129','1038,1129','0','1132','','0','0','341422','');
INSERT INTO `web_shop_area` VALUES('1133','含山县','','1129','1038,1129','0','1133','','0','0','341423','');
INSERT INTO `web_shop_area` VALUES('1134','和县','','1129','1038,1129','0','1134','','0','0','341424','');
INSERT INTO `web_shop_area` VALUES('1135','六安市','','1038','1038','1','1136,1137,1138,1139,1140,1141,1142','','0','0','341500','liuan');
INSERT INTO `web_shop_area` VALUES('1136','金安区','','1135','1038,1135','0','1136','','0','0','341502','');
INSERT INTO `web_shop_area` VALUES('1137','裕安区','','1135','1038,1135','0','1137','','0','0','341503','');
INSERT INTO `web_shop_area` VALUES('1138','寿县','','1135','1038,1135','0','1138','','0','0','341521','');
INSERT INTO `web_shop_area` VALUES('1139','霍邱县','','1135','1038,1135','0','1139','','0','0','341522','');
INSERT INTO `web_shop_area` VALUES('1140','舒城县','','1135','1038,1135','0','1140','','0','0','341523','');
INSERT INTO `web_shop_area` VALUES('1141','金寨县','','1135','1038,1135','0','1141','','0','0','341524','');
INSERT INTO `web_shop_area` VALUES('1142','霍山县','','1135','1038,1135','0','1142','','0','0','341525','');
INSERT INTO `web_shop_area` VALUES('1143','亳州市','','1038','1038','1','1144,1145,1146,1147','','0','0','341600','bozhou');
INSERT INTO `web_shop_area` VALUES('1144','谯城区','','1143','1038,1143','0','1144','','0','0','341602','');
INSERT INTO `web_shop_area` VALUES('1145','涡阳县','','1143','1038,1143','0','1145','','0','0','341621','');
INSERT INTO `web_shop_area` VALUES('1146','蒙城县','','1143','1038,1143','0','1146','','0','0','341622','');
INSERT INTO `web_shop_area` VALUES('1147','利辛县','','1143','1038,1143','0','1147','','0','0','341623','');
INSERT INTO `web_shop_area` VALUES('1148','池州市','','1038','1038','1','1149,1150,1151,1152','','0','0','341700','chizhou');
INSERT INTO `web_shop_area` VALUES('1149','贵池区','','1148','1038,1148','0','1149','','0','0','341702','');
INSERT INTO `web_shop_area` VALUES('1150','东至县','','1148','1038,1148','0','1150','','0','0','341721','');
INSERT INTO `web_shop_area` VALUES('1151','石台县','','1148','1038,1148','0','1151','','0','0','341722','');
INSERT INTO `web_shop_area` VALUES('1152','青阳县','','1148','1038,1148','0','1152','','0','0','341723','');
INSERT INTO `web_shop_area` VALUES('1153','宣城市','','1038','1038','1','1154,1155,1156,1157,1158,1159,1160','','0','0','341800','xuancheng');
INSERT INTO `web_shop_area` VALUES('1154','宣州区','','1153','1038,1153','0','1154','','0','0','341802','');
INSERT INTO `web_shop_area` VALUES('1155','郎溪县','','1153','1038,1153','0','1155','','0','0','341821','');
INSERT INTO `web_shop_area` VALUES('1156','广德县','','1153','1038,1153','0','1156','','0','0','341822','');
INSERT INTO `web_shop_area` VALUES('1157','泾县','','1153','1038,1153','0','1157','','0','0','341823','');
INSERT INTO `web_shop_area` VALUES('1158','绩溪县','','1153','1038,1153','0','1158','','0','0','341824','');
INSERT INTO `web_shop_area` VALUES('1159','旌德县','','1153','1038,1153','0','1159','','0','0','341825','');
INSERT INTO `web_shop_area` VALUES('1160','宁国市','','1153','1038,1153','0','1160','','0','0','341881','');
INSERT INTO `web_shop_area` VALUES('1161','福建','','0','0','1','1162,1176,1183,1189,1202,1215,1227,1238,1246,1163,1164,1165,1166,1167,1168,1169,1170,1171,1172,1173,1174,1175','','14','0','350000','fujian');
INSERT INTO `web_shop_area` VALUES('1162','福州市','','1161','1161','1','1163,1164,1165,1166,1167,1168,1169,1170,1171,1172,1173,1174,1175','','0','0','350100','fuzhou');
INSERT INTO `web_shop_area` VALUES('1163','鼓楼区','','1162','1161,1162','0','1163','','0','0','350102','');
INSERT INTO `web_shop_area` VALUES('1164','台江区','','1162','1161,1162','0','1164','','0','0','350103','');
INSERT INTO `web_shop_area` VALUES('1165','仓山区','','1162','1161,1162','0','1165','','0','0','350104','');
INSERT INTO `web_shop_area` VALUES('1166','马尾区','','1162','1161,1162','0','1166','','0','0','350105','');
INSERT INTO `web_shop_area` VALUES('1167','晋安区','','1162','1161,1162','0','1167','','0','0','350111','');
INSERT INTO `web_shop_area` VALUES('1168','闽侯县','','1162','1161,1162','0','1168','','0','0','350121','');
INSERT INTO `web_shop_area` VALUES('1169','连江县','','1162','1161,1162','0','1169','','0','0','350122','');
INSERT INTO `web_shop_area` VALUES('1170','罗源县','','1162','1161,1162','0','1170','','0','0','350123','');
INSERT INTO `web_shop_area` VALUES('1171','闽清县','','1162','1161,1162','0','1171','','0','0','350124','');
INSERT INTO `web_shop_area` VALUES('1172','永泰县','','1162','1161,1162','0','1172','','0','0','350125','');
INSERT INTO `web_shop_area` VALUES('1173','平潭县','','1162','1161,1162','0','1173','','0','0','350128','');
INSERT INTO `web_shop_area` VALUES('1174','福清市','','1162','1161,1162','0','1174','','0','0','350181','');
INSERT INTO `web_shop_area` VALUES('1175','长乐市','','1162','1161,1162','0','1175','','0','0','350182','');
INSERT INTO `web_shop_area` VALUES('1176','厦门市','','1161','1161','1','1177,1178,1179,1180,1181,1182','','0','0','350200','xiamen');
INSERT INTO `web_shop_area` VALUES('1177','思明区','','1176','1161,1176','0','1177','','0','0','350203','');
INSERT INTO `web_shop_area` VALUES('1178','海沧区','','1176','1161,1176','0','1178','','0','0','350205','');
INSERT INTO `web_shop_area` VALUES('1179','湖里区','','1176','1161,1176','0','1179','','0','0','350206','');
INSERT INTO `web_shop_area` VALUES('1180','集美区','','1176','1161,1176','0','1180','','0','0','350211','');
INSERT INTO `web_shop_area` VALUES('1181','同安区','','1176','1161,1176','0','1181','','0','0','350212','');
INSERT INTO `web_shop_area` VALUES('1182','翔安区','','1176','1161,1176','0','1182','','0','0','350213','');
INSERT INTO `web_shop_area` VALUES('1183','莆田市','','1161','1161','1','1184,1185,1186,1187,1188','','0','0','350300','putian');
INSERT INTO `web_shop_area` VALUES('1184','城厢区','','1183','1161,1183','0','1184','','0','0','350302','');
INSERT INTO `web_shop_area` VALUES('1185','涵江区','','1183','1161,1183','0','1185','','0','0','350303','');
INSERT INTO `web_shop_area` VALUES('1186','荔城区','','1183','1161,1183','0','1186','','0','0','350304','');
INSERT INTO `web_shop_area` VALUES('1187','秀屿区','','1183','1161,1183','0','1187','','0','0','350305','');
INSERT INTO `web_shop_area` VALUES('1188','仙游县','','1183','1161,1183','0','1188','','0','0','350322','');
INSERT INTO `web_shop_area` VALUES('1189','三明市','','1161','1161','1','1190,1191,1192,1193,1194,1195,1196,1197,1198,1199,1200,1201','','0','0','350400','sanming');
INSERT INTO `web_shop_area` VALUES('1190','梅列区','','1189','1161,1189','0','1190','','0','0','350402','');
INSERT INTO `web_shop_area` VALUES('1191','三元区','','1189','1161,1189','0','1191','','0','0','350403','');
INSERT INTO `web_shop_area` VALUES('1192','明溪县','','1189','1161,1189','0','1192','','0','0','350421','');
INSERT INTO `web_shop_area` VALUES('1193','清流县','','1189','1161,1189','0','1193','','0','0','350423','');
INSERT INTO `web_shop_area` VALUES('1194','宁化县','','1189','1161,1189','0','1194','','0','0','350424','');
INSERT INTO `web_shop_area` VALUES('1195','大田县','','1189','1161,1189','0','1195','','0','0','350425','');
INSERT INTO `web_shop_area` VALUES('1196','尤溪县','','1189','1161,1189','0','1196','','0','0','350426','');
INSERT INTO `web_shop_area` VALUES('1197','沙县','','1189','1161,1189','0','1197','','0','0','350427','');
INSERT INTO `web_shop_area` VALUES('1198','将乐县','','1189','1161,1189','0','1198','','0','0','350428','');
INSERT INTO `web_shop_area` VALUES('1199','泰宁县','','1189','1161,1189','0','1199','','0','0','350429','');
INSERT INTO `web_shop_area` VALUES('1200','建宁县','','1189','1161,1189','0','1200','','0','0','350430','');
INSERT INTO `web_shop_area` VALUES('1201','永安市','','1189','1161,1189','0','1201','','0','0','350481','');
INSERT INTO `web_shop_area` VALUES('1202','泉州市','','1161','1161','1','1203,1204,1205,1206,1207,1208,1209,1210,1211,1212,1213,1214','','0','0','350500','quanzhou');
INSERT INTO `web_shop_area` VALUES('1203','鲤城区','','1202','1161,1202','0','1203','','0','0','350502','');
INSERT INTO `web_shop_area` VALUES('1204','丰泽区','','1202','1161,1202','0','1204','','0','0','350503','');
INSERT INTO `web_shop_area` VALUES('1205','洛江区','','1202','1161,1202','0','1205','','0','0','350504','');
INSERT INTO `web_shop_area` VALUES('1206','泉港区','','1202','1161,1202','0','1206','','0','0','350505','');
INSERT INTO `web_shop_area` VALUES('1207','惠安县','','1202','1161,1202','0','1207','','0','0','350521','');
INSERT INTO `web_shop_area` VALUES('1208','安溪县','','1202','1161,1202','0','1208','','0','0','350524','');
INSERT INTO `web_shop_area` VALUES('1209','永春县','','1202','1161,1202','0','1209','','0','0','350525','');
INSERT INTO `web_shop_area` VALUES('1210','德化县','','1202','1161,1202','0','1210','','0','0','350526','');
INSERT INTO `web_shop_area` VALUES('1211','金门县','','1202','1161,1202','0','1211','','0','0','350527','');
INSERT INTO `web_shop_area` VALUES('1212','石狮市','','1202','1161,1202','0','1212','','0','0','350581','');
INSERT INTO `web_shop_area` VALUES('1213','晋江市','','1202','1161,1202','0','1213','','0','0','350582','');
INSERT INTO `web_shop_area` VALUES('1214','南安市','','1202','1161,1202','0','1214','','0','0','350583','');
INSERT INTO `web_shop_area` VALUES('1215','漳州市','','1161','1161','1','1216,1217,1218,1219,1220,1221,1222,1223,1224,1225,1226','','0','0','350600','zhangzhou');
INSERT INTO `web_shop_area` VALUES('1216','芗城区','','1215','1161,1215','0','1216','','0','0','350602','');
INSERT INTO `web_shop_area` VALUES('1217','龙文区','','1215','1161,1215','0','1217','','0','0','350603','');
INSERT INTO `web_shop_area` VALUES('1218','云霄县','','1215','1161,1215','0','1218','','0','0','350622','');
INSERT INTO `web_shop_area` VALUES('1219','漳浦县','','1215','1161,1215','0','1219','','0','0','350623','');
INSERT INTO `web_shop_area` VALUES('1220','诏安县','','1215','1161,1215','0','1220','','0','0','350624','');
INSERT INTO `web_shop_area` VALUES('1221','长泰县','','1215','1161,1215','0','1221','','0','0','350625','');
INSERT INTO `web_shop_area` VALUES('1222','东山县','','1215','1161,1215','0','1222','','0','0','350626','');
INSERT INTO `web_shop_area` VALUES('1223','南靖县','','1215','1161,1215','0','1223','','0','0','350627','');
INSERT INTO `web_shop_area` VALUES('1224','平和县','','1215','1161,1215','0','1224','','0','0','350628','');
INSERT INTO `web_shop_area` VALUES('1225','华安县','','1215','1161,1215','0','1225','','0','0','350629','');
INSERT INTO `web_shop_area` VALUES('1226','龙海市','','1215','1161,1215','0','1226','','0','0','350681','');
INSERT INTO `web_shop_area` VALUES('1227','南平市','','1161','1161','1','1228,1229,1230,1231,1232,1233,1234,1235,1236,1237','','0','0','350700','nanping');
INSERT INTO `web_shop_area` VALUES('1228','延平区','','1227','1161,1227','0','1228','','0','0','350702','');
INSERT INTO `web_shop_area` VALUES('1229','顺昌县','','1227','1161,1227','0','1229','','0','0','350721','');
INSERT INTO `web_shop_area` VALUES('1230','浦城县','','1227','1161,1227','0','1230','','0','0','350722','');
INSERT INTO `web_shop_area` VALUES('1231','光泽县','','1227','1161,1227','0','1231','','0','0','350723','');
INSERT INTO `web_shop_area` VALUES('1232','松溪县','','1227','1161,1227','0','1232','','0','0','350724','');
INSERT INTO `web_shop_area` VALUES('1233','政和县','','1227','1161,1227','0','1233','','0','0','350725','');
INSERT INTO `web_shop_area` VALUES('1234','邵武市','','1227','1161,1227','0','1234','','0','0','350781','');
INSERT INTO `web_shop_area` VALUES('1235','武夷山市','','1227','1161,1227','0','1235','','0','0','350782','');
INSERT INTO `web_shop_area` VALUES('1236','建瓯市','','1227','1161,1227','0','1236','','0','0','350783','');
INSERT INTO `web_shop_area` VALUES('1237','建阳市','','1227','1161,1227','0','1237','','0','0','350784','');
INSERT INTO `web_shop_area` VALUES('1238','龙岩市','','1161','1161','1','1239,1240,1241,1242,1243,1244,1245','','0','0','350800','longyan');
INSERT INTO `web_shop_area` VALUES('1239','新罗区','','1238','1161,1238','0','1239','','0','0','350802','');
INSERT INTO `web_shop_area` VALUES('1240','长汀县','','1238','1161,1238','0','1240','','0','0','350821','');
INSERT INTO `web_shop_area` VALUES('1241','永定县','','1238','1161,1238','0','1241','','0','0','350822','');
INSERT INTO `web_shop_area` VALUES('1242','上杭县','','1238','1161,1238','0','1242','','0','0','350823','');
INSERT INTO `web_shop_area` VALUES('1243','武平县','','1238','1161,1238','0','1243','','0','0','350824','');
INSERT INTO `web_shop_area` VALUES('1244','连城县','','1238','1161,1238','0','1244','','0','0','350825','');
INSERT INTO `web_shop_area` VALUES('1245','漳平市','','1238','1161,1238','0','1245','','0','0','350881','');
INSERT INTO `web_shop_area` VALUES('1246','宁德市','','1161','1161','1','1247,1248,1249,1250,1251,1252,1253,1254,1255','','0','0','350900','ningde');
INSERT INTO `web_shop_area` VALUES('1247','蕉城区','','1246','1161,1246','0','1247','','0','0','350902','');
INSERT INTO `web_shop_area` VALUES('1248','霞浦县','','1246','1161,1246','0','1248','','0','0','350921','');
INSERT INTO `web_shop_area` VALUES('1249','古田县','','1246','1161,1246','0','1249','','0','0','350922','');
INSERT INTO `web_shop_area` VALUES('1250','屏南县','','1246','1161,1246','0','1250','','0','0','350923','');
INSERT INTO `web_shop_area` VALUES('1251','寿宁县','','1246','1161,1246','0','1251','','0','0','350924','');
INSERT INTO `web_shop_area` VALUES('1252','周宁县','','1246','1161,1246','0','1252','','0','0','350925','');
INSERT INTO `web_shop_area` VALUES('1253','柘荣县','','1246','1161,1246','0','1253','','0','0','350926','');
INSERT INTO `web_shop_area` VALUES('1254','福安市','','1246','1161,1246','0','1254','','0','0','350981','');
INSERT INTO `web_shop_area` VALUES('1255','福鼎市','','1246','1161,1246','0','1255','','0','0','350982','');
INSERT INTO `web_shop_area` VALUES('1256','江西','','0','0','1','1257,1267,1272,1278,1292,1295,1299,1318,1332,1343,1355,1258,1259,1260,1261,1262,1263,1264,1265,1266','','15','0','360000','jiangxi');
INSERT INTO `web_shop_area` VALUES('1257','南昌市','','1256','1256','1','1258,1259,1260,1261,1262,1263,1264,1265,1266','','0','0','360100','nanchang');
INSERT INTO `web_shop_area` VALUES('1258','东湖区','','1257','1256,1257','0','1258','','0','0','360102','');
INSERT INTO `web_shop_area` VALUES('1259','西湖区','','1257','1256,1257','0','1259','','0','0','360103','');
INSERT INTO `web_shop_area` VALUES('1260','青云谱区','','1257','1256,1257','0','1260','','0','0','360104','');
INSERT INTO `web_shop_area` VALUES('1261','湾里区','','1257','1256,1257','0','1261','','0','0','360105','');
INSERT INTO `web_shop_area` VALUES('1262','青山湖区','','1257','1256,1257','0','1262','','0','0','360111','');
INSERT INTO `web_shop_area` VALUES('1263','南昌县','','1257','1256,1257','0','1263','','0','0','360121','');
INSERT INTO `web_shop_area` VALUES('1264','新建县','','1257','1256,1257','0','1264','','0','0','360122','');
INSERT INTO `web_shop_area` VALUES('1265','安义县','','1257','1256,1257','0','1265','','0','0','360123','');
INSERT INTO `web_shop_area` VALUES('1266','进贤县','','1257','1256,1257','0','1266','','0','0','360124','');
INSERT INTO `web_shop_area` VALUES('1267','景德镇','','1256','1256','1','1268,1269,1270,1271','','0','0','360200','jingdezhen');
INSERT INTO `web_shop_area` VALUES('1268','昌江区','','1267','1256,1267','0','1268','','0','0','360202','');
INSERT INTO `web_shop_area` VALUES('1269','珠山区','','1267','1256,1267','0','1269','','0','0','360203','');
INSERT INTO `web_shop_area` VALUES('1270','浮梁县','','1267','1256,1267','0','1270','','0','0','360222','');
INSERT INTO `web_shop_area` VALUES('1271','乐平市','','1267','1256,1267','0','1271','','0','0','360281','');
INSERT INTO `web_shop_area` VALUES('1272','萍乡市','','1256','1256','1','1273,1274,1275,1276,1277','','0','0','360300','pingxiang');
INSERT INTO `web_shop_area` VALUES('1273','安源区','','1272','1256,1272','0','1273','','0','0','360302','');
INSERT INTO `web_shop_area` VALUES('1274','湘东区','','1272','1256,1272','0','1274','','0','0','360313','');
INSERT INTO `web_shop_area` VALUES('1275','莲花县','','1272','1256,1272','0','1275','','0','0','360321','');
INSERT INTO `web_shop_area` VALUES('1276','上栗县','','1272','1256,1272','0','1276','','0','0','360322','');
INSERT INTO `web_shop_area` VALUES('1277','芦溪县','','1272','1256,1272','0','1277','','0','0','360323','');
INSERT INTO `web_shop_area` VALUES('1278','九江市','','1256','1256','1','1279,1280,1281,1282,1283,1284,1285,1286,1287,1288,1289,1290,1291','','0','0','360400','jiujiang');
INSERT INTO `web_shop_area` VALUES('1279','庐山区','','1278','1256,1278','0','1279','','0','0','360402','');
INSERT INTO `web_shop_area` VALUES('1280','浔阳区','','1278','1256,1278','0','1280','','0','0','360403','');
INSERT INTO `web_shop_area` VALUES('1281','九江县','','1278','1256,1278','0','1281','','0','0','360421','');
INSERT INTO `web_shop_area` VALUES('1282','武宁县','','1278','1256,1278','0','1282','','0','0','360423','');
INSERT INTO `web_shop_area` VALUES('1283','修水县','','1278','1256,1278','0','1283','','0','0','360424','');
INSERT INTO `web_shop_area` VALUES('1284','永修县','','1278','1256,1278','0','1284','','0','0','360425','');
INSERT INTO `web_shop_area` VALUES('1285','德安县','','1278','1256,1278','0','1285','','0','0','360426','');
INSERT INTO `web_shop_area` VALUES('1286','星子县','','1278','1256,1278','0','1286','','0','0','360427','');
INSERT INTO `web_shop_area` VALUES('1287','都昌县','','1278','1256,1278','0','1287','','0','0','360428','');
INSERT INTO `web_shop_area` VALUES('1288','湖口县','','1278','1256,1278','0','1288','','0','0','360429','');
INSERT INTO `web_shop_area` VALUES('1289','彭泽县','','1278','1256,1278','0','1289','','0','0','360430','');
INSERT INTO `web_shop_area` VALUES('1290','瑞昌市','','1278','1256,1278','0','1290','','0','0','360481','');
INSERT INTO `web_shop_area` VALUES('1291','共青城市','','1278','1256,1278','0','1291','','0','0','360482','');
INSERT INTO `web_shop_area` VALUES('1292','新余市','','1256','1256','1','1293,1294','','0','0','360500','xinyu');
INSERT INTO `web_shop_area` VALUES('1293','渝水区','','1292','1256,1292','0','1293','','0','0','360502','');
INSERT INTO `web_shop_area` VALUES('1294','分宜县','','1292','1256,1292','0','1294','','0','0','360521','');
INSERT INTO `web_shop_area` VALUES('1295','鹰潭市','','1256','1256','1','1296,1297,1298','','0','0','360600','yingtan');
INSERT INTO `web_shop_area` VALUES('1296','月湖区','','1295','1256,1295','0','1296','','0','0','360602','');
INSERT INTO `web_shop_area` VALUES('1297','余江县','','1295','1256,1295','0','1297','','0','0','360622','');
INSERT INTO `web_shop_area` VALUES('1298','贵溪市','','1295','1256,1295','0','1298','','0','0','360681','');
INSERT INTO `web_shop_area` VALUES('1299','赣州市','','1256','1256','1','1300,1301,1302,1303,1304,1305,1306,1307,1308,1309,1310,1311,1312,1313,1314,1315,1316,1317','','0','0','360700','ganzhou');
INSERT INTO `web_shop_area` VALUES('1300','章贡区','','1299','1256,1299','0','1300','','0','0','360702','');
INSERT INTO `web_shop_area` VALUES('1301','赣县','','1299','1256,1299','0','1301','','0','0','360721','');
INSERT INTO `web_shop_area` VALUES('1302','信丰县','','1299','1256,1299','0','1302','','0','0','360722','');
INSERT INTO `web_shop_area` VALUES('1303','大余县','','1299','1256,1299','0','1303','','0','0','360723','');
INSERT INTO `web_shop_area` VALUES('1304','上犹县','','1299','1256,1299','0','1304','','0','0','360724','');
INSERT INTO `web_shop_area` VALUES('1305','崇义县','','1299','1256,1299','0','1305','','0','0','360725','');
INSERT INTO `web_shop_area` VALUES('1306','安远县','','1299','1256,1299','0','1306','','0','0','360726','');
INSERT INTO `web_shop_area` VALUES('1307','龙南县','','1299','1256,1299','0','1307','','0','0','360727','');
INSERT INTO `web_shop_area` VALUES('1308','定南县','','1299','1256,1299','0','1308','','0','0','360728','');
INSERT INTO `web_shop_area` VALUES('1309','全南县','','1299','1256,1299','0','1309','','0','0','360729','');
INSERT INTO `web_shop_area` VALUES('1310','宁都县','','1299','1256,1299','0','1310','','0','0','360730','');
INSERT INTO `web_shop_area` VALUES('1311','于都县','','1299','1256,1299','0','1311','','0','0','360731','');
INSERT INTO `web_shop_area` VALUES('1312','兴国县','','1299','1256,1299','0','1312','','0','0','360732','');
INSERT INTO `web_shop_area` VALUES('1313','会昌县','','1299','1256,1299','0','1313','','0','0','360733','');
INSERT INTO `web_shop_area` VALUES('1314','寻乌县','','1299','1256,1299','0','1314','','0','0','360734','');
INSERT INTO `web_shop_area` VALUES('1315','石城县','','1299','1256,1299','0','1315','','0','0','360735','');
INSERT INTO `web_shop_area` VALUES('1316','瑞金市','','1299','1256,1299','0','1316','','0','0','360781','');
INSERT INTO `web_shop_area` VALUES('1317','南康市','','1299','1256,1299','0','1317','','0','0','360782','');
INSERT INTO `web_shop_area` VALUES('1318','吉安市','','1256','1256','1','1319,1320,1321,1322,1323,1324,1325,1326,1327,1328,1329,1330,1331','','0','0','360800','jian');
INSERT INTO `web_shop_area` VALUES('1319','吉州区','','1318','1256,1318','0','1319','','0','0','360802','');
INSERT INTO `web_shop_area` VALUES('1320','青原区','','1318','1256,1318','0','1320','','0','0','360803','');
INSERT INTO `web_shop_area` VALUES('1321','吉安县','','1318','1256,1318','0','1321','','0','0','360821','');
INSERT INTO `web_shop_area` VALUES('1322','吉水县','','1318','1256,1318','0','1322','','0','0','360822','');
INSERT INTO `web_shop_area` VALUES('1323','峡江县','','1318','1256,1318','0','1323','','0','0','360823','');
INSERT INTO `web_shop_area` VALUES('1324','新干县','','1318','1256,1318','0','1324','','0','0','360824','');
INSERT INTO `web_shop_area` VALUES('1325','永丰县','','1318','1256,1318','0','1325','','0','0','360825','');
INSERT INTO `web_shop_area` VALUES('1326','泰和县','','1318','1256,1318','0','1326','','0','0','360826','');
INSERT INTO `web_shop_area` VALUES('1327','遂川县','','1318','1256,1318','0','1327','','0','0','360827','');
INSERT INTO `web_shop_area` VALUES('1328','万安县','','1318','1256,1318','0','1328','','0','0','360828','');
INSERT INTO `web_shop_area` VALUES('1329','安福县','','1318','1256,1318','0','1329','','0','0','360829','');
INSERT INTO `web_shop_area` VALUES('1330','永新县','','1318','1256,1318','0','1330','','0','0','360830','');
INSERT INTO `web_shop_area` VALUES('1331','井冈山市','','1318','1256,1318','0','1331','','0','0','360881','');
INSERT INTO `web_shop_area` VALUES('1332','宜春市','','1256','1256','1','1333,1334,1335,1336,1337,1338,1339,1340,1341,1342','','0','0','360900','yichun');
INSERT INTO `web_shop_area` VALUES('1333','袁州区','','1332','1256,1332','0','1333','','0','0','360902','');
INSERT INTO `web_shop_area` VALUES('1334','奉新县','','1332','1256,1332','0','1334','','0','0','360921','');
INSERT INTO `web_shop_area` VALUES('1335','万载县','','1332','1256,1332','0','1335','','0','0','360922','');
INSERT INTO `web_shop_area` VALUES('1336','上高县','','1332','1256,1332','0','1336','','0','0','360923','');
INSERT INTO `web_shop_area` VALUES('1337','宜丰县','','1332','1256,1332','0','1337','','0','0','360924','');
INSERT INTO `web_shop_area` VALUES('1338','靖安县','','1332','1256,1332','0','1338','','0','0','360925','');
INSERT INTO `web_shop_area` VALUES('1339','铜鼓县','','1332','1256,1332','0','1339','','0','0','360926','');
INSERT INTO `web_shop_area` VALUES('1340','丰城市','','1332','1256,1332','0','1340','','0','0','360981','');
INSERT INTO `web_shop_area` VALUES('1341','樟树市','','1332','1256,1332','0','1341','','0','0','360982','');
INSERT INTO `web_shop_area` VALUES('1342','高安市','','1332','1256,1332','0','1342','','0','0','360983','');
INSERT INTO `web_shop_area` VALUES('1343','抚州市','','1256','1256','1','1344,1345,1346,1347,1348,1349,1350,1351,1352,1353,1354','','0','0','361000','fuzhoushi');
INSERT INTO `web_shop_area` VALUES('1344','临川区','','1343','1256,1343','0','1344','','0','0','361002','');
INSERT INTO `web_shop_area` VALUES('1345','南城县','','1343','1256,1343','0','1345','','0','0','361021','');
INSERT INTO `web_shop_area` VALUES('1346','黎川县','','1343','1256,1343','0','1346','','0','0','361022','');
INSERT INTO `web_shop_area` VALUES('1347','南丰县','','1343','1256,1343','0','1347','','0','0','361023','');
INSERT INTO `web_shop_area` VALUES('1348','崇仁县','','1343','1256,1343','0','1348','','0','0','361024','');
INSERT INTO `web_shop_area` VALUES('1349','乐安县','','1343','1256,1343','0','1349','','0','0','361025','');
INSERT INTO `web_shop_area` VALUES('1350','宜黄县','','1343','1256,1343','0','1350','','0','0','361026','');
INSERT INTO `web_shop_area` VALUES('1351','金溪县','','1343','1256,1343','0','1351','','0','0','361027','');
INSERT INTO `web_shop_area` VALUES('1352','资溪县','','1343','1256,1343','0','1352','','0','0','361028','');
INSERT INTO `web_shop_area` VALUES('1353','东乡县','','1343','1256,1343','0','1353','','0','0','361029','');
INSERT INTO `web_shop_area` VALUES('1354','广昌县','','1343','1256,1343','0','1354','','0','0','361030','');
INSERT INTO `web_shop_area` VALUES('1355','上饶市','','1256','1256','1','1356,1357,1358,1359,1360,1361,1362,1363,1364,1365,1366,1367','','0','0','361100','shangrao');
INSERT INTO `web_shop_area` VALUES('1356','信州区','','1355','1256,1355','0','1356','','0','0','361102','');
INSERT INTO `web_shop_area` VALUES('1357','上饶县','','1355','1256,1355','0','1357','','0','0','361121','');
INSERT INTO `web_shop_area` VALUES('1358','广丰县','','1355','1256,1355','0','1358','','0','0','361122','');
INSERT INTO `web_shop_area` VALUES('1359','玉山县','','1355','1256,1355','0','1359','','0','0','361123','');
INSERT INTO `web_shop_area` VALUES('1360','铅山县','','1355','1256,1355','0','1360','','0','0','361124','');
INSERT INTO `web_shop_area` VALUES('1361','横峰县','','1355','1256,1355','0','1361','','0','0','361125','');
INSERT INTO `web_shop_area` VALUES('1362','弋阳县','','1355','1256,1355','0','1362','','0','0','361126','');
INSERT INTO `web_shop_area` VALUES('1363','余干县','','1355','1256,1355','0','1363','','0','0','361127','');
INSERT INTO `web_shop_area` VALUES('1364','鄱阳县','','1355','1256,1355','0','1364','','0','0','361128','');
INSERT INTO `web_shop_area` VALUES('1365','万年县','','1355','1256,1355','0','1365','','0','0','361129','');
INSERT INTO `web_shop_area` VALUES('1366','婺源县','','1355','1256,1355','0','1366','','0','0','361130','');
INSERT INTO `web_shop_area` VALUES('1367','德兴市','','1355','1256,1355','0','1367','','0','0','361181','');
INSERT INTO `web_shop_area` VALUES('1368','山东','','0','0','1','1369,1380,1393,1402,1409,1415,1428,1441,1454,1461,1466,1471,1474,1487,1499,1508,1516,1370,1371,1372,1373,1374,1375,1376,1377,1378,1379','','8','0','370000','shandong');
INSERT INTO `web_shop_area` VALUES('1369','济南市','','1368','1368','1','1370,1371,1372,1373,1374,1375,1376,1377,1378,1379','','0','0','370100','jinan');
INSERT INTO `web_shop_area` VALUES('1370','历下区','','1369','1368,1369','0','1370','','0','0','370102','');
INSERT INTO `web_shop_area` VALUES('1371','市中区','','1369','1368,1369','0','1371','','0','0','370103','');
INSERT INTO `web_shop_area` VALUES('1372','槐荫区','','1369','1368,1369','0','1372','','0','0','370104','');
INSERT INTO `web_shop_area` VALUES('1373','天桥区','','1369','1368,1369','0','1373','','0','0','370105','');
INSERT INTO `web_shop_area` VALUES('1374','历城区','','1369','1368,1369','0','1374','','0','0','370112','');
INSERT INTO `web_shop_area` VALUES('1375','长清区','','1369','1368,1369','0','1375','','0','0','370113','');
INSERT INTO `web_shop_area` VALUES('1376','平阴县','','1369','1368,1369','0','1376','','0','0','370124','');
INSERT INTO `web_shop_area` VALUES('1377','济阳县','','1369','1368,1369','0','1377','','0','0','370125','');
INSERT INTO `web_shop_area` VALUES('1378','商河县','','1369','1368,1369','0','1378','','0','0','370126','');
INSERT INTO `web_shop_area` VALUES('1379','章丘市','','1369','1368,1369','0','1379','','0','0','370181','');
INSERT INTO `web_shop_area` VALUES('1380','青岛市','','1368','1368','1','1381,1382,1383,1384,1385,1386,1387,1388,1389,1390,1391,1392','','0','0','370200','qingdao');
INSERT INTO `web_shop_area` VALUES('1381','市南区','','1380','1368,1380','0','1381','','0','0','370202','');
INSERT INTO `web_shop_area` VALUES('1382','市北区','','1380','1368,1380','0','1382','','0','0','370203','');
INSERT INTO `web_shop_area` VALUES('1383','四方区','','1380','1368,1380','0','1383','','0','0','370205','');
INSERT INTO `web_shop_area` VALUES('1384','黄岛区','','1380','1368,1380','0','1384','','0','0','370211','');
INSERT INTO `web_shop_area` VALUES('1385','崂山区','','1380','1368,1380','0','1385','','0','0','370212','');
INSERT INTO `web_shop_area` VALUES('1386','李沧区','','1380','1368,1380','0','1386','','0','0','370213','');
INSERT INTO `web_shop_area` VALUES('1387','城阳区','','1380','1368,1380','0','1387','','0','0','370214','');
INSERT INTO `web_shop_area` VALUES('1388','胶州市','','1380','1368,1380','0','1388','','0','0','370281','');
INSERT INTO `web_shop_area` VALUES('1389','即墨市','','1380','1368,1380','0','1389','','0','0','370282','');
INSERT INTO `web_shop_area` VALUES('1390','平度市','','1380','1368,1380','0','1390','','0','0','370283','');
INSERT INTO `web_shop_area` VALUES('1391','胶南市','','1380','1368,1380','0','1391','','0','0','370284','');
INSERT INTO `web_shop_area` VALUES('1392','莱西市','','1380','1368,1380','0','1392','','0','0','370285','');
INSERT INTO `web_shop_area` VALUES('1393','淄博市','','1368','1368','1','1394,1395,1396,1397,1398,1399,1400,1401','','0','0','370300','zibo');
INSERT INTO `web_shop_area` VALUES('1394','淄川区','','1393','1368,1393','0','1394','','0','0','370302','');
INSERT INTO `web_shop_area` VALUES('1395','张店区','','1393','1368,1393','0','1395','','0','0','370303','');
INSERT INTO `web_shop_area` VALUES('1396','博山区','','1393','1368,1393','0','1396','','0','0','370304','');
INSERT INTO `web_shop_area` VALUES('1397','临淄区','','1393','1368,1393','0','1397','','0','0','370305','');
INSERT INTO `web_shop_area` VALUES('1398','周村区','','1393','1368,1393','0','1398','','0','0','370306','');
INSERT INTO `web_shop_area` VALUES('1399','桓台县','','1393','1368,1393','0','1399','','0','0','370321','');
INSERT INTO `web_shop_area` VALUES('1400','高青县','','1393','1368,1393','0','1400','','0','0','370322','');
INSERT INTO `web_shop_area` VALUES('1401','沂源县','','1393','1368,1393','0','1401','','0','0','370323','');
INSERT INTO `web_shop_area` VALUES('1402','枣庄市','','1368','1368','1','1403,1404,1405,1406,1407,1408','','0','0','370400','zaozhuang');
INSERT INTO `web_shop_area` VALUES('1403','市中区','','1402','1368,1402','0','1403','','0','0','370402','');
INSERT INTO `web_shop_area` VALUES('1404','薛城区','','1402','1368,1402','0','1404','','0','0','370403','');
INSERT INTO `web_shop_area` VALUES('1405','峄城区','','1402','1368,1402','0','1405','','0','0','370404','');
INSERT INTO `web_shop_area` VALUES('1406','台儿庄区','','1402','1368,1402','0','1406','','0','0','370405','');
INSERT INTO `web_shop_area` VALUES('1407','山亭区','','1402','1368,1402','0','1407','','0','0','370406','');
INSERT INTO `web_shop_area` VALUES('1408','滕州市','','1402','1368,1402','0','1408','','0','0','370481','');
INSERT INTO `web_shop_area` VALUES('1409','东营市','','1368','1368','1','1410,1411,1412,1413,1414','','0','0','370500','dongying');
INSERT INTO `web_shop_area` VALUES('1410','东营区','','1409','1368,1409','0','1410','','0','0','370502','');
INSERT INTO `web_shop_area` VALUES('1411','河口区','','1409','1368,1409','0','1411','','0','0','370503','');
INSERT INTO `web_shop_area` VALUES('1412','垦利县','','1409','1368,1409','0','1412','','0','0','370521','');
INSERT INTO `web_shop_area` VALUES('1413','利津县','','1409','1368,1409','0','1413','','0','0','370522','');
INSERT INTO `web_shop_area` VALUES('1414','广饶县','','1409','1368,1409','0','1414','','0','0','370523','');
INSERT INTO `web_shop_area` VALUES('1415','烟台市','','1368','1368','1','1416,1417,1418,1419,1420,1421,1422,1423,1424,1425,1426,1427','','0','0','370600','yantai');
INSERT INTO `web_shop_area` VALUES('1416','芝罘区','','1415','1368,1415','0','1416','','0','0','370602','');
INSERT INTO `web_shop_area` VALUES('1417','福山区','','1415','1368,1415','0','1417','','0','0','370611','');
INSERT INTO `web_shop_area` VALUES('1418','牟平区','','1415','1368,1415','0','1418','','0','0','370612','');
INSERT INTO `web_shop_area` VALUES('1419','莱山区','','1415','1368,1415','0','1419','','0','0','370613','');
INSERT INTO `web_shop_area` VALUES('1420','长岛县','','1415','1368,1415','0','1420','','0','0','370634','');
INSERT INTO `web_shop_area` VALUES('1421','龙口市','','1415','1368,1415','0','1421','','0','0','370681','');
INSERT INTO `web_shop_area` VALUES('1422','莱阳市','','1415','1368,1415','0','1422','','0','0','370682','');
INSERT INTO `web_shop_area` VALUES('1423','莱州市','','1415','1368,1415','0','1423','','0','0','370683','');
INSERT INTO `web_shop_area` VALUES('1424','蓬莱市','','1415','1368,1415','0','1424','','0','0','370684','');
INSERT INTO `web_shop_area` VALUES('1425','招远市','','1415','1368,1415','0','1425','','0','0','370685','');
INSERT INTO `web_shop_area` VALUES('1426','栖霞市','','1415','1368,1415','0','1426','','0','0','370686','');
INSERT INTO `web_shop_area` VALUES('1427','海阳市','','1415','1368,1415','0','1427','','0','0','370687','');
INSERT INTO `web_shop_area` VALUES('1428','潍坊市','','1368','1368','1','1429,1430,1431,1432,1433,1434,1435,1436,1437,1438,1439,1440','','0','0','370700','weifang');
INSERT INTO `web_shop_area` VALUES('1429','潍城区','','1428','1368,1428','0','1429','','0','0','370702','');
INSERT INTO `web_shop_area` VALUES('1430','寒亭区','','1428','1368,1428','0','1430','','0','0','370703','');
INSERT INTO `web_shop_area` VALUES('1431','坊子区','','1428','1368,1428','0','1431','','0','0','370704','');
INSERT INTO `web_shop_area` VALUES('1432','奎文区','','1428','1368,1428','0','1432','','0','0','370705','');
INSERT INTO `web_shop_area` VALUES('1433','临朐县','','1428','1368,1428','0','1433','','0','0','370724','');
INSERT INTO `web_shop_area` VALUES('1434','昌乐县','','1428','1368,1428','0','1434','','0','0','370725','');
INSERT INTO `web_shop_area` VALUES('1435','青州市','','1428','1368,1428','0','1435','','0','0','370781','');
INSERT INTO `web_shop_area` VALUES('1436','诸城市','','1428','1368,1428','0','1436','','0','0','370782','');
INSERT INTO `web_shop_area` VALUES('1437','寿光市','','1428','1368,1428','0','1437','','0','0','370783','');
INSERT INTO `web_shop_area` VALUES('1438','安丘市','','1428','1368,1428','0','1438','','0','0','370784','');
INSERT INTO `web_shop_area` VALUES('1439','高密市','','1428','1368,1428','0','1439','','0','0','370785','');
INSERT INTO `web_shop_area` VALUES('1440','昌邑市','','1428','1368,1428','0','1440','','0','0','370786','');
INSERT INTO `web_shop_area` VALUES('1441','济宁市','','1368','1368','1','1442,1443,1444,1445,1446,1447,1448,1449,1450,1451,1452,1453','','0','0','370800','jining');
INSERT INTO `web_shop_area` VALUES('1442','市中区','','1441','1368,1441','0','1442','','0','0','370802','');
INSERT INTO `web_shop_area` VALUES('1443','任城区','','1441','1368,1441','0','1443','','0','0','370811','');
INSERT INTO `web_shop_area` VALUES('1444','微山县','','1441','1368,1441','0','1444','','0','0','370826','');
INSERT INTO `web_shop_area` VALUES('1445','鱼台县','','1441','1368,1441','0','1445','','0','0','370827','');
INSERT INTO `web_shop_area` VALUES('1446','金乡县','','1441','1368,1441','0','1446','','0','0','370828','');
INSERT INTO `web_shop_area` VALUES('1447','嘉祥县','','1441','1368,1441','0','1447','','0','0','370829','');
INSERT INTO `web_shop_area` VALUES('1448','汶上县','','1441','1368,1441','0','1448','','0','0','370830','');
INSERT INTO `web_shop_area` VALUES('1449','泗水县','','1441','1368,1441','0','1449','','0','0','370831','');
INSERT INTO `web_shop_area` VALUES('1450','梁山县','','1441','1368,1441','0','1450','','0','0','370832','');
INSERT INTO `web_shop_area` VALUES('1451','曲阜市','','1441','1368,1441','0','1451','','0','0','370881','');
INSERT INTO `web_shop_area` VALUES('1452','兖州市','','1441','1368,1441','0','1452','','0','0','370882','');
INSERT INTO `web_shop_area` VALUES('1453','邹城市','','1441','1368,1441','0','1453','','0','0','370883','');
INSERT INTO `web_shop_area` VALUES('1454','泰安市','','1368','1368','1','1455,1456,1457,1458,1459,1460','','0','0','370900','taian');
INSERT INTO `web_shop_area` VALUES('1455','泰山区','','1454','1368,1454','0','1455','','0','0','370902','');
INSERT INTO `web_shop_area` VALUES('1456','岱岳区','','1454','1368,1454','0','1456','','0','0','370911','');
INSERT INTO `web_shop_area` VALUES('1457','宁阳县','','1454','1368,1454','0','1457','','0','0','370921','');
INSERT INTO `web_shop_area` VALUES('1458','东平县','','1454','1368,1454','0','1458','','0','0','370923','');
INSERT INTO `web_shop_area` VALUES('1459','新泰市','','1454','1368,1454','0','1459','','0','0','370982','');
INSERT INTO `web_shop_area` VALUES('1460','肥城市','','1454','1368,1454','0','1460','','0','0','370983','');
INSERT INTO `web_shop_area` VALUES('1461','威海市','','1368','1368','1','1462,1463,1464,1465','','0','0','371000','weihai');
INSERT INTO `web_shop_area` VALUES('1462','环翠区','','1461','1368,1461','0','1462','','0','0','371002','');
INSERT INTO `web_shop_area` VALUES('1463','文登市','','1461','1368,1461','0','1463','','0','0','371081','');
INSERT INTO `web_shop_area` VALUES('1464','荣成市','','1461','1368,1461','0','1464','','0','0','371082','');
INSERT INTO `web_shop_area` VALUES('1465','乳山市','','1461','1368,1461','0','1465','','0','0','371083','');
INSERT INTO `web_shop_area` VALUES('1466','日照市','','1368','1368','1','1467,1468,1469,1470','','0','0','371100','rizhao');
INSERT INTO `web_shop_area` VALUES('1467','东港区','','1466','1368,1466','0','1467','','0','0','371102','');
INSERT INTO `web_shop_area` VALUES('1468','岚山区','','1466','1368,1466','0','1468','','0','0','371103','');
INSERT INTO `web_shop_area` VALUES('1469','五莲县','','1466','1368,1466','0','1469','','0','0','371121','');
INSERT INTO `web_shop_area` VALUES('1470','莒县','','1466','1368,1466','0','1470','','0','0','371122','');
INSERT INTO `web_shop_area` VALUES('1471','莱芜市','','1368','1368','1','1472,1473','','0','0','371200','laiwu');
INSERT INTO `web_shop_area` VALUES('1472','莱城区','','1471','1368,1471','0','1472','','0','0','371202','');
INSERT INTO `web_shop_area` VALUES('1473','钢城区','','1471','1368,1471','0','1473','','0','0','371203','');
INSERT INTO `web_shop_area` VALUES('1474','临沂市','','1368','1368','1','1475,1476,1477,1478,1479,1480,1481,1482,1483,1484,1485,1486','','0','0','371300','linyi');
INSERT INTO `web_shop_area` VALUES('1475','兰山区','','1474','1368,1474','0','1475','','0','0','371302','');
INSERT INTO `web_shop_area` VALUES('1476','罗庄区','','1474','1368,1474','0','1476','','0','0','371311','');
INSERT INTO `web_shop_area` VALUES('1477','河东区','','1474','1368,1474','0','1477','','0','0','371312','');
INSERT INTO `web_shop_area` VALUES('1478','沂南县','','1474','1368,1474','0','1478','','0','0','371321','');
INSERT INTO `web_shop_area` VALUES('1479','郯城县','','1474','1368,1474','0','1479','','0','0','371322','');
INSERT INTO `web_shop_area` VALUES('1480','沂水县','','1474','1368,1474','0','1480','','0','0','371323','');
INSERT INTO `web_shop_area` VALUES('1481','苍山县','','1474','1368,1474','0','1481','','0','0','371324','');
INSERT INTO `web_shop_area` VALUES('1482','费县','','1474','1368,1474','0','1482','','0','0','371325','');
INSERT INTO `web_shop_area` VALUES('1483','平邑县','','1474','1368,1474','0','1483','','0','0','371326','');
INSERT INTO `web_shop_area` VALUES('1484','莒南县','','1474','1368,1474','0','1484','','0','0','371327','');
INSERT INTO `web_shop_area` VALUES('1485','蒙阴县','','1474','1368,1474','0','1485','','0','0','371328','');
INSERT INTO `web_shop_area` VALUES('1486','临沭县','','1474','1368,1474','0','1486','','0','0','371329','');
INSERT INTO `web_shop_area` VALUES('1487','德州市','','1368','1368','1','1488,1489,1490,1491,1492,1493,1494,1495,1496,1497,1498','','0','0','371400','dezhou');
INSERT INTO `web_shop_area` VALUES('1488','德城区','','1487','1368,1487','0','1488','','0','0','371402','');
INSERT INTO `web_shop_area` VALUES('1489','陵县','','1487','1368,1487','0','1489','','0','0','371421','');
INSERT INTO `web_shop_area` VALUES('1490','宁津县','','1487','1368,1487','0','1490','','0','0','371422','');
INSERT INTO `web_shop_area` VALUES('1491','庆云县','','1487','1368,1487','0','1491','','0','0','371423','');
INSERT INTO `web_shop_area` VALUES('1492','临邑县','','1487','1368,1487','0','1492','','0','0','371424','');
INSERT INTO `web_shop_area` VALUES('1493','齐河县','','1487','1368,1487','0','1493','','0','0','371425','');
INSERT INTO `web_shop_area` VALUES('1494','平原县','','1487','1368,1487','0','1494','','0','0','371426','');
INSERT INTO `web_shop_area` VALUES('1495','夏津县','','1487','1368,1487','0','1495','','0','0','371427','');
INSERT INTO `web_shop_area` VALUES('1496','武城县','','1487','1368,1487','0','1496','','0','0','371428','');
INSERT INTO `web_shop_area` VALUES('1497','乐陵市','','1487','1368,1487','0','1497','','0','0','371481','');
INSERT INTO `web_shop_area` VALUES('1498','禹城市','','1487','1368,1487','0','1498','','0','0','371482','');
INSERT INTO `web_shop_area` VALUES('1499','聊城市','','1368','1368','1','1500,1501,1502,1503,1504,1505,1506,1507','','0','0','371500','liaocheng');
INSERT INTO `web_shop_area` VALUES('1500','东昌府区','','1499','1368,1499','0','1500','','0','0','371502','');
INSERT INTO `web_shop_area` VALUES('1501','阳谷县','','1499','1368,1499','0','1501','','0','0','371521','');
INSERT INTO `web_shop_area` VALUES('1502','莘县','','1499','1368,1499','0','1502','','0','0','371522','');
INSERT INTO `web_shop_area` VALUES('1503','茌平县','','1499','1368,1499','0','1503','','0','0','371523','');
INSERT INTO `web_shop_area` VALUES('1504','东阿县','','1499','1368,1499','0','1504','','0','0','371524','');
INSERT INTO `web_shop_area` VALUES('1505','冠县','','1499','1368,1499','0','1505','','0','0','371525','');
INSERT INTO `web_shop_area` VALUES('1506','高唐县','','1499','1368,1499','0','1506','','0','0','371526','');
INSERT INTO `web_shop_area` VALUES('1507','临清市','','1499','1368,1499','0','1507','','0','0','371581','');
INSERT INTO `web_shop_area` VALUES('1508','滨州市','','1368','1368','1','1509,1510,1511,1512,1513,1514,1515','','0','0','371600','binzhou');
INSERT INTO `web_shop_area` VALUES('1509','滨城区','','1508','1368,1508','0','1509','','0','0','371602','');
INSERT INTO `web_shop_area` VALUES('1510','惠民县','','1508','1368,1508','0','1510','','0','0','371621','');
INSERT INTO `web_shop_area` VALUES('1511','阳信县','','1508','1368,1508','0','1511','','0','0','371622','');
INSERT INTO `web_shop_area` VALUES('1512','无棣县','','1508','1368,1508','0','1512','','0','0','371623','');
INSERT INTO `web_shop_area` VALUES('1513','沾化县','','1508','1368,1508','0','1513','','0','0','371624','');
INSERT INTO `web_shop_area` VALUES('1514','博兴县','','1508','1368,1508','0','1514','','0','0','371625','');
INSERT INTO `web_shop_area` VALUES('1515','邹平县','','1508','1368,1508','0','1515','','0','0','371626','');
INSERT INTO `web_shop_area` VALUES('1516','菏泽市','','1368','1368','1','1517,1518,1519,1520,1521,1522,1523,1524,1525','','0','0','371700','heze');
INSERT INTO `web_shop_area` VALUES('1517','牡丹区','','1516','1368,1516','0','1517','','0','0','371702','');
INSERT INTO `web_shop_area` VALUES('1518','曹县','','1516','1368,1516','0','1518','','0','0','371721','');
INSERT INTO `web_shop_area` VALUES('1519','单县','','1516','1368,1516','0','1519','','0','0','371722','');
INSERT INTO `web_shop_area` VALUES('1520','成武县','','1516','1368,1516','0','1520','','0','0','371723','');
INSERT INTO `web_shop_area` VALUES('1521','巨野县','','1516','1368,1516','0','1521','','0','0','371724','');
INSERT INTO `web_shop_area` VALUES('1522','郓城县','','1516','1368,1516','0','1522','','0','0','371725','');
INSERT INTO `web_shop_area` VALUES('1523','鄄城县','','1516','1368,1516','0','1523','','0','0','371726','');
INSERT INTO `web_shop_area` VALUES('1524','定陶县','','1516','1368,1516','0','1524','','0','0','371727','');
INSERT INTO `web_shop_area` VALUES('1525','东明县','','1516','1368,1516','0','1525','','0','0','371728','');
INSERT INTO `web_shop_area` VALUES('1526','河南','','0','0','1','1527,1540,1551,1567,1578,1588,1594,1607,1618,1625,1632,1638,1645,1659,1669,1680,1691,1702,1528,1529,1530,1531,1532,1533,1534,1535,1536,1537,1538,1539,1703','','10','0','410000','henan');
INSERT INTO `web_shop_area` VALUES('1527','郑州市','','1526','1526','1','1528,1529,1530,1531,1532,1533,1534,1535,1536,1537,1538,1539','','0','0','410100','zhengzhou');
INSERT INTO `web_shop_area` VALUES('1528','中原区','','1527','1526,1527','0','1528','','0','0','410102','');
INSERT INTO `web_shop_area` VALUES('1529','二七区','','1527','1526,1527','0','1529','','0','0','410103','');
INSERT INTO `web_shop_area` VALUES('1530','管城回族区','','1527','1526,1527','0','1530','','0','0','410104','');
INSERT INTO `web_shop_area` VALUES('1531','金水区','','1527','1526,1527','0','1531','','0','0','410105','');
INSERT INTO `web_shop_area` VALUES('1532','上街区','','1527','1526,1527','0','1532','','0','0','410106','');
INSERT INTO `web_shop_area` VALUES('1533','惠济区','','1527','1526,1527','0','1533','','0','0','410108','');
INSERT INTO `web_shop_area` VALUES('1534','中牟县','','1527','1526,1527','0','1534','','0','0','410122','');
INSERT INTO `web_shop_area` VALUES('1535','巩义市','','1527','1526,1527','0','1535','','0','0','410181','');
INSERT INTO `web_shop_area` VALUES('1536','荥阳市','','1527','1526,1527','0','1536','','0','0','410182','');
INSERT INTO `web_shop_area` VALUES('1537','新密市','','1527','1526,1527','0','1537','','0','0','410183','');
INSERT INTO `web_shop_area` VALUES('1538','新郑市','','1527','1526,1527','0','1538','','0','0','410184','');
INSERT INTO `web_shop_area` VALUES('1539','登封市','','1527','1526,1527','0','1539','','0','0','410185','');
INSERT INTO `web_shop_area` VALUES('1540','开封市','','1526','1526','1','1541,1542,1543,1544,1545,1546,1547,1548,1549,1550','','0','0','410200','kaifeng');
INSERT INTO `web_shop_area` VALUES('1541','龙亭区','','1540','1526,1540','0','1541','','0','0','410202','');
INSERT INTO `web_shop_area` VALUES('1542','顺河回族区','','1540','1526,1540','0','1542','','0','0','410203','');
INSERT INTO `web_shop_area` VALUES('1543','鼓楼区','','1540','1526,1540','0','1543','','0','0','410204','');
INSERT INTO `web_shop_area` VALUES('1544','禹王台区','','1540','1526,1540','0','1544','','0','0','410205','');
INSERT INTO `web_shop_area` VALUES('1545','金明区','','1540','1526,1540','0','1545','','0','0','410211','');
INSERT INTO `web_shop_area` VALUES('1546','杞县','','1540','1526,1540','0','1546','','0','0','410221','');
INSERT INTO `web_shop_area` VALUES('1547','通许县','','1540','1526,1540','0','1547','','0','0','410222','');
INSERT INTO `web_shop_area` VALUES('1548','尉氏县','','1540','1526,1540','0','1548','','0','0','410223','');
INSERT INTO `web_shop_area` VALUES('1549','开封县','','1540','1526,1540','0','1549','','0','0','410224','');
INSERT INTO `web_shop_area` VALUES('1550','兰考县','','1540','1526,1540','0','1550','','0','0','410225','');
INSERT INTO `web_shop_area` VALUES('1551','洛阳市','','1526','1526','1','1552,1553,1554,1555,1556,1557,1558,1559,1560,1561,1562,1563,1564,1565,1566','','0','0','410300','luoyang');
INSERT INTO `web_shop_area` VALUES('1552','老城区','','1551','1526,1551','0','1552','','0','0','410302','');
INSERT INTO `web_shop_area` VALUES('1553','西工区','','1551','1526,1551','0','1553','','0','0','410303','');
INSERT INTO `web_shop_area` VALUES('1554','瀍河回族区','','1551','1526,1551','0','1554','','0','0','410304','');
INSERT INTO `web_shop_area` VALUES('1555','涧西区','','1551','1526,1551','0','1555','','0','0','410305','');
INSERT INTO `web_shop_area` VALUES('1556','吉利区','','1551','1526,1551','0','1556','','0','0','410306','');
INSERT INTO `web_shop_area` VALUES('1557','洛龙区','','1551','1526,1551','0','1557','','0','0','410311','');
INSERT INTO `web_shop_area` VALUES('1558','孟津县','','1551','1526,1551','0','1558','','0','0','410322','');
INSERT INTO `web_shop_area` VALUES('1559','新安县','','1551','1526,1551','0','1559','','0','0','410323','');
INSERT INTO `web_shop_area` VALUES('1560','栾川县','','1551','1526,1551','0','1560','','0','0','410324','');
INSERT INTO `web_shop_area` VALUES('1561','嵩县','','1551','1526,1551','0','1561','','0','0','410325','');
INSERT INTO `web_shop_area` VALUES('1562','汝阳县','','1551','1526,1551','0','1562','','0','0','410326','');
INSERT INTO `web_shop_area` VALUES('1563','宜阳县','','1551','1526,1551','0','1563','','0','0','410327','');
INSERT INTO `web_shop_area` VALUES('1564','洛宁县','','1551','1526,1551','0','1564','','0','0','410328','');
INSERT INTO `web_shop_area` VALUES('1565','伊川县','','1551','1526,1551','0','1565','','0','0','410329','');
INSERT INTO `web_shop_area` VALUES('1566','偃师市','','1551','1526,1551','0','1566','','0','0','410381','');
INSERT INTO `web_shop_area` VALUES('1567','平顶山','','1526','1526','1','1568,1569,1570,1571,1572,1573,1574,1575,1576,1577','','0','0','410400','pingdingshan');
INSERT INTO `web_shop_area` VALUES('1568','新华区','','1567','1526,1567','0','1568','','0','0','410402','');
INSERT INTO `web_shop_area` VALUES('1569','卫东区','','1567','1526,1567','0','1569','','0','0','410403','');
INSERT INTO `web_shop_area` VALUES('1570','石龙区','','1567','1526,1567','0','1570','','0','0','410404','');
INSERT INTO `web_shop_area` VALUES('1571','湛河区','','1567','1526,1567','0','1571','','0','0','410411','');
INSERT INTO `web_shop_area` VALUES('1572','宝丰县','','1567','1526,1567','0','1572','','0','0','410421','');
INSERT INTO `web_shop_area` VALUES('1573','叶县','','1567','1526,1567','0','1573','','0','0','410422','');
INSERT INTO `web_shop_area` VALUES('1574','鲁山县','','1567','1526,1567','0','1574','','0','0','410423','');
INSERT INTO `web_shop_area` VALUES('1575','郏县','','1567','1526,1567','0','1575','','0','0','410425','');
INSERT INTO `web_shop_area` VALUES('1576','舞钢市','','1567','1526,1567','0','1576','','0','0','410481','');
INSERT INTO `web_shop_area` VALUES('1577','汝州市','','1567','1526,1567','0','1577','','0','0','410482','');
INSERT INTO `web_shop_area` VALUES('1578','安阳市','','1526','1526','1','1579,1580,1581,1582,1583,1584,1585,1586,1587','','0','0','410500','anyang');
INSERT INTO `web_shop_area` VALUES('1579','文峰区','','1578','1526,1578','0','1579','','0','0','410502','');
INSERT INTO `web_shop_area` VALUES('1580','北关区','','1578','1526,1578','0','1580','','0','0','410503','');
INSERT INTO `web_shop_area` VALUES('1581','殷都区','','1578','1526,1578','0','1581','','0','0','410505','');
INSERT INTO `web_shop_area` VALUES('1582','龙安区','','1578','1526,1578','0','1582','','0','0','410506','');
INSERT INTO `web_shop_area` VALUES('1583','安阳县','','1578','1526,1578','0','1583','','0','0','410522','');
INSERT INTO `web_shop_area` VALUES('1584','汤阴县','','1578','1526,1578','0','1584','','0','0','410523','');
INSERT INTO `web_shop_area` VALUES('1585','滑县','','1578','1526,1578','0','1585','','0','0','410526','');
INSERT INTO `web_shop_area` VALUES('1586','内黄县','','1578','1526,1578','0','1586','','0','0','410527','');
INSERT INTO `web_shop_area` VALUES('1587','林州市','','1578','1526,1578','0','1587','','0','0','410581','');
INSERT INTO `web_shop_area` VALUES('1588','鹤壁市','','1526','1526','1','1589,1590,1591,1592,1593','','0','0','410600','hebi');
INSERT INTO `web_shop_area` VALUES('1589','鹤山区','','1588','1526,1588','0','1589','','0','0','410602','');
INSERT INTO `web_shop_area` VALUES('1590','山城区','','1588','1526,1588','0','1590','','0','0','410603','');
INSERT INTO `web_shop_area` VALUES('1591','淇滨区','','1588','1526,1588','0','1591','','0','0','410611','');
INSERT INTO `web_shop_area` VALUES('1592','浚县','','1588','1526,1588','0','1592','','0','0','410621','');
INSERT INTO `web_shop_area` VALUES('1593','淇县','','1588','1526,1588','0','1593','','0','0','410622','');
INSERT INTO `web_shop_area` VALUES('1594','新乡市','','1526','1526','1','1595,1596,1597,1598,1599,1600,1601,1602,1603,1604,1605,1606','','0','0','410700','xinxiang');
INSERT INTO `web_shop_area` VALUES('1595','红旗区','','1594','1526,1594','0','1595','','0','0','410702','');
INSERT INTO `web_shop_area` VALUES('1596','卫滨区','','1594','1526,1594','0','1596','','0','0','410703','');
INSERT INTO `web_shop_area` VALUES('1597','凤泉区','','1594','1526,1594','0','1597','','0','0','410704','');
INSERT INTO `web_shop_area` VALUES('1598','牧野区','','1594','1526,1594','0','1598','','0','0','410711','');
INSERT INTO `web_shop_area` VALUES('1599','新乡县','','1594','1526,1594','0','1599','','0','0','410721','');
INSERT INTO `web_shop_area` VALUES('1600','获嘉县','','1594','1526,1594','0','1600','','0','0','410724','');
INSERT INTO `web_shop_area` VALUES('1601','原阳县','','1594','1526,1594','0','1601','','0','0','410725','');
INSERT INTO `web_shop_area` VALUES('1602','延津县','','1594','1526,1594','0','1602','','0','0','410726','');
INSERT INTO `web_shop_area` VALUES('1603','封丘县','','1594','1526,1594','0','1603','','0','0','410727','');
INSERT INTO `web_shop_area` VALUES('1604','长垣县','','1594','1526,1594','0','1604','','0','0','410728','');
INSERT INTO `web_shop_area` VALUES('1605','卫辉市','','1594','1526,1594','0','1605','','0','0','410781','');
INSERT INTO `web_shop_area` VALUES('1606','辉县市','','1594','1526,1594','0','1606','','0','0','410782','');
INSERT INTO `web_shop_area` VALUES('1607','焦作市','','1526','1526','1','1608,1609,1610,1611,1612,1613,1614,1615,1616,1617','','0','0','410800','jiaozuo');
INSERT INTO `web_shop_area` VALUES('1608','解放区','','1607','1526,1607','0','1608','','0','0','410802','');
INSERT INTO `web_shop_area` VALUES('1609','中站区','','1607','1526,1607','0','1609','','0','0','410803','');
INSERT INTO `web_shop_area` VALUES('1610','马村区','','1607','1526,1607','0','1610','','0','0','410804','');
INSERT INTO `web_shop_area` VALUES('1611','山阳区','','1607','1526,1607','0','1611','','0','0','410811','');
INSERT INTO `web_shop_area` VALUES('1612','修武县','','1607','1526,1607','0','1612','','0','0','410821','');
INSERT INTO `web_shop_area` VALUES('1613','博爱县','','1607','1526,1607','0','1613','','0','0','410822','');
INSERT INTO `web_shop_area` VALUES('1614','武陟县','','1607','1526,1607','0','1614','','0','0','410823','');
INSERT INTO `web_shop_area` VALUES('1615','温县','','1607','1526,1607','0','1615','','0','0','410825','');
INSERT INTO `web_shop_area` VALUES('1616','沁阳市','','1607','1526,1607','0','1616','','0','0','410882','');
INSERT INTO `web_shop_area` VALUES('1617','孟州市','','1607','1526,1607','0','1617','','0','0','410883','');
INSERT INTO `web_shop_area` VALUES('1618','濮阳市','','1526','1526','1','1619,1620,1621,1622,1623,1624','','0','0','410900','puyang');
INSERT INTO `web_shop_area` VALUES('1619','华龙区','','1618','1526,1618','0','1619','','0','0','410902','');
INSERT INTO `web_shop_area` VALUES('1620','清丰县','','1618','1526,1618','0','1620','','0','0','410922','');
INSERT INTO `web_shop_area` VALUES('1621','南乐县','','1618','1526,1618','0','1621','','0','0','410923','');
INSERT INTO `web_shop_area` VALUES('1622','范县','','1618','1526,1618','0','1622','','0','0','410926','');
INSERT INTO `web_shop_area` VALUES('1623','台前县','','1618','1526,1618','0','1623','','0','0','410927','');
INSERT INTO `web_shop_area` VALUES('1624','濮阳县','','1618','1526,1618','0','1624','','0','0','410928','');
INSERT INTO `web_shop_area` VALUES('1625','许昌市','','1526','1526','1','1626,1627,1628,1629,1630,1631','','0','0','411000','xuchang');
INSERT INTO `web_shop_area` VALUES('1626','魏都区','','1625','1526,1625','0','1626','','0','0','411002','');
INSERT INTO `web_shop_area` VALUES('1627','许昌县','','1625','1526,1625','0','1627','','0','0','411023','');
INSERT INTO `web_shop_area` VALUES('1628','鄢陵县','','1625','1526,1625','0','1628','','0','0','411024','');
INSERT INTO `web_shop_area` VALUES('1629','襄城县','','1625','1526,1625','0','1629','','0','0','411025','');
INSERT INTO `web_shop_area` VALUES('1630','禹州市','','1625','1526,1625','0','1630','','0','0','411081','');
INSERT INTO `web_shop_area` VALUES('1631','长葛市','','1625','1526,1625','0','1631','','0','0','411082','');
INSERT INTO `web_shop_area` VALUES('1632','漯河市','','1526','1526','1','1633,1634,1635,1636,1637','','0','0','411100','leihe');
INSERT INTO `web_shop_area` VALUES('1633','源汇区','','1632','1526,1632','0','1633','','0','0','411102','');
INSERT INTO `web_shop_area` VALUES('1634','郾城区','','1632','1526,1632','0','1634','','0','0','411103','');
INSERT INTO `web_shop_area` VALUES('1635','召陵区','','1632','1526,1632','0','1635','','0','0','411104','');
INSERT INTO `web_shop_area` VALUES('1636','舞阳县','','1632','1526,1632','0','1636','','0','0','411121','');
INSERT INTO `web_shop_area` VALUES('1637','临颍县','','1632','1526,1632','0','1637','','0','0','411122','');
INSERT INTO `web_shop_area` VALUES('1638','三门峡','','1526','1526','1','1639,1640,1641,1642,1643,1644','','0','0','411200','sanmenxia');
INSERT INTO `web_shop_area` VALUES('1639','湖滨区','','1638','1526,1638','0','1639','','0','0','411202','');
INSERT INTO `web_shop_area` VALUES('1640','渑池县','','1638','1526,1638','0','1640','','0','0','411221','');
INSERT INTO `web_shop_area` VALUES('1641','陕县','','1638','1526,1638','0','1641','','0','0','411222','');
INSERT INTO `web_shop_area` VALUES('1642','卢氏县','','1638','1526,1638','0','1642','','0','0','411224','');
INSERT INTO `web_shop_area` VALUES('1643','义马市','','1638','1526,1638','0','1643','','0','0','411281','');
INSERT INTO `web_shop_area` VALUES('1644','灵宝市','','1638','1526,1638','0','1644','','0','0','411282','');
INSERT INTO `web_shop_area` VALUES('1645','南阳市','','1526','1526','1','1646,1647,1648,1649,1650,1651,1652,1653,1654,1655,1656,1657,1658','','0','0','411300','nanyang');
INSERT INTO `web_shop_area` VALUES('1646','宛城区','','1645','1526,1645','0','1646','','0','0','411302','');
INSERT INTO `web_shop_area` VALUES('1647','卧龙区','','1645','1526,1645','0','1647','','0','0','411303','');
INSERT INTO `web_shop_area` VALUES('1648','南召县','','1645','1526,1645','0','1648','','0','0','411321','');
INSERT INTO `web_shop_area` VALUES('1649','方城县','','1645','1526,1645','0','1649','','0','0','411322','');
INSERT INTO `web_shop_area` VALUES('1650','西峡县','','1645','1526,1645','0','1650','','0','0','411323','');
INSERT INTO `web_shop_area` VALUES('1651','镇平县','','1645','1526,1645','0','1651','','0','0','411324','');
INSERT INTO `web_shop_area` VALUES('1652','内乡县','','1645','1526,1645','0','1652','','0','0','411325','');
INSERT INTO `web_shop_area` VALUES('1653','淅川县','','1645','1526,1645','0','1653','','0','0','411326','');
INSERT INTO `web_shop_area` VALUES('1654','社旗县','','1645','1526,1645','0','1654','','0','0','411327','');
INSERT INTO `web_shop_area` VALUES('1655','唐河县','','1645','1526,1645','0','1655','','0','0','411328','');
INSERT INTO `web_shop_area` VALUES('1656','新野县','','1645','1526,1645','0','1656','','0','0','411329','');
INSERT INTO `web_shop_area` VALUES('1657','桐柏县','','1645','1526,1645','0','1657','','0','0','411330','');
INSERT INTO `web_shop_area` VALUES('1658','邓州市','','1645','1526,1645','0','1658','','0','0','411381','');
INSERT INTO `web_shop_area` VALUES('1659','商丘市','','1526','1526','1','1660,1661,1662,1663,1664,1665,1666,1667,1668','','0','0','411400','shangqiu');
INSERT INTO `web_shop_area` VALUES('1660','梁园区','','1659','1526,1659','0','1660','','0','0','411402','');
INSERT INTO `web_shop_area` VALUES('1661','睢阳区','','1659','1526,1659','0','1661','','0','0','411403','');
INSERT INTO `web_shop_area` VALUES('1662','民权县','','1659','1526,1659','0','1662','','0','0','411421','');
INSERT INTO `web_shop_area` VALUES('1663','睢县','','1659','1526,1659','0','1663','','0','0','411422','');
INSERT INTO `web_shop_area` VALUES('1664','宁陵县','','1659','1526,1659','0','1664','','0','0','411423','');
INSERT INTO `web_shop_area` VALUES('1665','柘城县','','1659','1526,1659','0','1665','','0','0','411424','');
INSERT INTO `web_shop_area` VALUES('1666','虞城县','','1659','1526,1659','0','1666','','0','0','411425','');
INSERT INTO `web_shop_area` VALUES('1667','夏邑县','','1659','1526,1659','0','1667','','0','0','411426','');
INSERT INTO `web_shop_area` VALUES('1668','永城市','','1659','1526,1659','0','1668','','0','0','411481','');
INSERT INTO `web_shop_area` VALUES('1669','信阳市','','1526','1526','1','1670,1671,1672,1673,1674,1675,1676,1677,1678,1679','','0','0','411500','xinyang');
INSERT INTO `web_shop_area` VALUES('1670','浉河区','','1669','1526,1669','0','1670','','0','0','411502','');
INSERT INTO `web_shop_area` VALUES('1671','平桥区','','1669','1526,1669','0','1671','','0','0','411503','');
INSERT INTO `web_shop_area` VALUES('1672','罗山县','','1669','1526,1669','0','1672','','0','0','411521','');
INSERT INTO `web_shop_area` VALUES('1673','光山县','','1669','1526,1669','0','1673','','0','0','411522','');
INSERT INTO `web_shop_area` VALUES('1674','新县','','1669','1526,1669','0','1674','','0','0','411523','');
INSERT INTO `web_shop_area` VALUES('1675','商城县','','1669','1526,1669','0','1675','','0','0','411524','');
INSERT INTO `web_shop_area` VALUES('1676','固始县','','1669','1526,1669','0','1676','','0','0','411525','');
INSERT INTO `web_shop_area` VALUES('1677','潢川县','','1669','1526,1669','0','1677','','0','0','411526','');
INSERT INTO `web_shop_area` VALUES('1678','淮滨县','','1669','1526,1669','0','1678','','0','0','411527','');
INSERT INTO `web_shop_area` VALUES('1679','息县','','1669','1526,1669','0','1679','','0','0','411528','');
INSERT INTO `web_shop_area` VALUES('1680','周口市','','1526','1526','1','1681,1682,1683,1684,1685,1686,1687,1688,1689,1690','','0','0','411600','zhoukou');
INSERT INTO `web_shop_area` VALUES('1681','川汇区','','1680','1526,1680','0','1681','','0','0','411602','');
INSERT INTO `web_shop_area` VALUES('1682','扶沟县','','1680','1526,1680','0','1682','','0','0','411621','');
INSERT INTO `web_shop_area` VALUES('1683','西华县','','1680','1526,1680','0','1683','','0','0','411622','');
INSERT INTO `web_shop_area` VALUES('1684','商水县','','1680','1526,1680','0','1684','','0','0','411623','');
INSERT INTO `web_shop_area` VALUES('1685','沈丘县','','1680','1526,1680','0','1685','','0','0','411624','');
INSERT INTO `web_shop_area` VALUES('1686','郸城县','','1680','1526,1680','0','1686','','0','0','411625','');
INSERT INTO `web_shop_area` VALUES('1687','淮阳县','','1680','1526,1680','0','1687','','0','0','411626','');
INSERT INTO `web_shop_area` VALUES('1688','太康县','','1680','1526,1680','0','1688','','0','0','411627','');
INSERT INTO `web_shop_area` VALUES('1689','鹿邑县','','1680','1526,1680','0','1689','','0','0','411628','');
INSERT INTO `web_shop_area` VALUES('1690','项城市','','1680','1526,1680','0','1690','','0','0','411681','');
INSERT INTO `web_shop_area` VALUES('1691','驻马店','','1526','1526','1','1692,1693,1694,1695,1696,1697,1698,1699,1700,1701','','0','0','411700','zhumadian');
INSERT INTO `web_shop_area` VALUES('1692','驿城区','','1691','1526,1691','0','1692','','0','0','411702','');
INSERT INTO `web_shop_area` VALUES('1693','西平县','','1691','1526,1691','0','1693','','0','0','411721','');
INSERT INTO `web_shop_area` VALUES('1694','上蔡县','','1691','1526,1691','0','1694','','0','0','411722','');
INSERT INTO `web_shop_area` VALUES('1695','平舆县','','1691','1526,1691','0','1695','','0','0','411723','');
INSERT INTO `web_shop_area` VALUES('1696','正阳县','','1691','1526,1691','0','1696','','0','0','411724','');
INSERT INTO `web_shop_area` VALUES('1697','确山县','','1691','1526,1691','0','1697','','0','0','411725','');
INSERT INTO `web_shop_area` VALUES('1698','泌阳县','','1691','1526,1691','0','1698','','0','0','411726','');
INSERT INTO `web_shop_area` VALUES('1699','汝南县','','1691','1526,1691','0','1699','','0','0','411727','');
INSERT INTO `web_shop_area` VALUES('1700','遂平县','','1691','1526,1691','0','1700','','0','0','411728','');
INSERT INTO `web_shop_area` VALUES('1701','新蔡县','','1691','1526,1691','0','1701','','0','0','411729','');
INSERT INTO `web_shop_area` VALUES('1703','济源市','','1526','1526','0','1703','','0','0','419001','jiyuan');
INSERT INTO `web_shop_area` VALUES('1704','湖北','','0','0','1','1705,1719,1726,1735,1749,1759,1763,1769,1777,1786,1797,1804,1808,1817,1818,1706,1707,1708,1709,1710,1711,1712,1713,1714,1715,1716,1717,1718,1819,1820,1821','','11','0','420000','hubei');
INSERT INTO `web_shop_area` VALUES('1705','武汉市','','1704','1704','1','1706,1707,1708,1709,1710,1711,1712,1713,1714,1715,1716,1717,1718','','0','0','420100','wuhan');
INSERT INTO `web_shop_area` VALUES('1706','江岸区','','1705','1704,1705','0','1706','','0','0','420102','');
INSERT INTO `web_shop_area` VALUES('1707','江汉区','','1705','1704,1705','0','1707','','0','0','420103','');
INSERT INTO `web_shop_area` VALUES('1708','硚口区','','1705','1704,1705','0','1708','','0','0','420104','');
INSERT INTO `web_shop_area` VALUES('1709','汉阳区','','1705','1704,1705','0','1709','','0','0','420105','');
INSERT INTO `web_shop_area` VALUES('1710','武昌区','','1705','1704,1705','0','1710','','0','0','420106','');
INSERT INTO `web_shop_area` VALUES('1711','青山区','','1705','1704,1705','0','1711','','0','0','420107','');
INSERT INTO `web_shop_area` VALUES('1712','洪山区','','1705','1704,1705','0','1712','','0','0','420111','');
INSERT INTO `web_shop_area` VALUES('1713','东西湖区','','1705','1704,1705','0','1713','','0','0','420112','');
INSERT INTO `web_shop_area` VALUES('1714','汉南区','','1705','1704,1705','0','1714','','0','0','420113','');
INSERT INTO `web_shop_area` VALUES('1715','蔡甸区','','1705','1704,1705','0','1715','','0','0','420114','');
INSERT INTO `web_shop_area` VALUES('1716','江夏区','','1705','1704,1705','0','1716','','0','0','420115','');
INSERT INTO `web_shop_area` VALUES('1717','黄陂区','','1705','1704,1705','0','1717','','0','0','420116','');
INSERT INTO `web_shop_area` VALUES('1718','新洲区','','1705','1704,1705','0','1718','','0','0','420117','');
INSERT INTO `web_shop_area` VALUES('1719','黄石市','','1704','1704','1','1720,1721,1722,1723,1724,1725','','0','0','420200','huangshi');
INSERT INTO `web_shop_area` VALUES('1720','黄石港区','','1719','1704,1719','0','1720','','0','0','420202','');
INSERT INTO `web_shop_area` VALUES('1721','西塞山区','','1719','1704,1719','0','1721','','0','0','420203','');
INSERT INTO `web_shop_area` VALUES('1722','下陆区','','1719','1704,1719','0','1722','','0','0','420204','');
INSERT INTO `web_shop_area` VALUES('1723','铁山区','','1719','1704,1719','0','1723','','0','0','420205','');
INSERT INTO `web_shop_area` VALUES('1724','阳新县','','1719','1704,1719','0','1724','','0','0','420222','');
INSERT INTO `web_shop_area` VALUES('1725','大冶市','','1719','1704,1719','0','1725','','0','0','420281','');
INSERT INTO `web_shop_area` VALUES('1726','十堰市','','1704','1704','1','1727,1728,1729,1730,1731,1732,1733,1734','','0','0','420300','shiyan');
INSERT INTO `web_shop_area` VALUES('1727','茅箭区','','1726','1704,1726','0','1727','','0','0','420302','');
INSERT INTO `web_shop_area` VALUES('1728','张湾区','','1726','1704,1726','0','1728','','0','0','420303','');
INSERT INTO `web_shop_area` VALUES('1729','郧县','','1726','1704,1726','0','1729','','0','0','420321','');
INSERT INTO `web_shop_area` VALUES('1730','郧西县','','1726','1704,1726','0','1730','','0','0','420322','');
INSERT INTO `web_shop_area` VALUES('1731','竹山县','','1726','1704,1726','0','1731','','0','0','420323','');
INSERT INTO `web_shop_area` VALUES('1732','竹溪县','','1726','1704,1726','0','1732','','0','0','420324','');
INSERT INTO `web_shop_area` VALUES('1733','房县','','1726','1704,1726','0','1733','','0','0','420325','');
INSERT INTO `web_shop_area` VALUES('1734','丹江口市','','1726','1704,1726','0','1734','','0','0','420381','');
INSERT INTO `web_shop_area` VALUES('1735','宜昌市','','1704','1704','1','1736,1737,1738,1739,1740,1741,1742,1743,1744,1745,1746,1747,1748','','0','0','420500','yichang');
INSERT INTO `web_shop_area` VALUES('1736','西陵区','','1735','1704,1735','0','1736','','0','0','420502','');
INSERT INTO `web_shop_area` VALUES('1737','伍家岗区','','1735','1704,1735','0','1737','','0','0','420503','');
INSERT INTO `web_shop_area` VALUES('1738','点军区','','1735','1704,1735','0','1738','','0','0','420504','');
INSERT INTO `web_shop_area` VALUES('1739','猇亭区','','1735','1704,1735','0','1739','','0','0','420505','');
INSERT INTO `web_shop_area` VALUES('1740','夷陵区','','1735','1704,1735','0','1740','','0','0','420506','');
INSERT INTO `web_shop_area` VALUES('1741','远安县','','1735','1704,1735','0','1741','','0','0','420525','');
INSERT INTO `web_shop_area` VALUES('1742','兴山县','','1735','1704,1735','0','1742','','0','0','420526','');
INSERT INTO `web_shop_area` VALUES('1743','秭归县','','1735','1704,1735','0','1743','','0','0','420527','');
INSERT INTO `web_shop_area` VALUES('1744','长阳土家族自治县','','1735','1704,1735','0','1744','','0','0','420528','');
INSERT INTO `web_shop_area` VALUES('1745','五峰土家族自治县','','1735','1704,1735','0','1745','','0','0','420529','');
INSERT INTO `web_shop_area` VALUES('1746','宜都市','','1735','1704,1735','0','1746','','0','0','420581','');
INSERT INTO `web_shop_area` VALUES('1747','当阳市','','1735','1704,1735','0','1747','','0','0','420582','');
INSERT INTO `web_shop_area` VALUES('1748','枝江市','','1735','1704,1735','0','1748','','0','0','420583','');
INSERT INTO `web_shop_area` VALUES('1749','襄樊市','','1704','1704','1','1750,1751,1752,1753,1754,1755,1756,1757,1758','','0','0','420600','xiangfan');
INSERT INTO `web_shop_area` VALUES('1750','襄城区','','1749','1704,1749','0','1750','','0','0','420602','');
INSERT INTO `web_shop_area` VALUES('1751','樊城区','','1749','1704,1749','0','1751','','0','0','420606','');
INSERT INTO `web_shop_area` VALUES('1752','襄阳区','','1749','1704,1749','0','1752','','0','0','420607','');
INSERT INTO `web_shop_area` VALUES('1753','南漳县','','1749','1704,1749','0','1753','','0','0','420624','');
INSERT INTO `web_shop_area` VALUES('1754','谷城县','','1749','1704,1749','0','1754','','0','0','420625','');
INSERT INTO `web_shop_area` VALUES('1755','保康县','','1749','1704,1749','0','1755','','0','0','420626','');
INSERT INTO `web_shop_area` VALUES('1756','老河口市','','1749','1704,1749','0','1756','','0','0','420682','');
INSERT INTO `web_shop_area` VALUES('1757','枣阳市','','1749','1704,1749','0','1757','','0','0','420683','');
INSERT INTO `web_shop_area` VALUES('1758','宜城市','','1749','1704,1749','0','1758','','0','0','420684','');
INSERT INTO `web_shop_area` VALUES('1759','鄂州市','','1704','1704','1','1760,1761,1762','','0','0','420700','ezhou');
INSERT INTO `web_shop_area` VALUES('1760','梁子湖区','','1759','1704,1759','0','1760','','0','0','420702','');
INSERT INTO `web_shop_area` VALUES('1761','华容区','','1759','1704,1759','0','1761','','0','0','420703','');
INSERT INTO `web_shop_area` VALUES('1762','鄂城区','','1759','1704,1759','0','1762','','0','0','420704','');
INSERT INTO `web_shop_area` VALUES('1763','荆门市','','1704','1704','1','1764,1765,1766,1767,1768','','0','0','420800','jingmen');
INSERT INTO `web_shop_area` VALUES('1764','东宝区','','1763','1704,1763','0','1764','','0','0','420802','');
INSERT INTO `web_shop_area` VALUES('1765','掇刀区','','1763','1704,1763','0','1765','','0','0','420804','');
INSERT INTO `web_shop_area` VALUES('1766','京山县','','1763','1704,1763','0','1766','','0','0','420821','');
INSERT INTO `web_shop_area` VALUES('1767','沙洋县','','1763','1704,1763','0','1767','','0','0','420822','');
INSERT INTO `web_shop_area` VALUES('1768','钟祥市','','1763','1704,1763','0','1768','','0','0','420881','');
INSERT INTO `web_shop_area` VALUES('1769','孝感市','','1704','1704','1','1770,1771,1772,1773,1774,1775,1776','','0','0','420900','xiaogan');
INSERT INTO `web_shop_area` VALUES('1770','孝南区','','1769','1704,1769','0','1770','','0','0','420902','');
INSERT INTO `web_shop_area` VALUES('1771','孝昌县','','1769','1704,1769','0','1771','','0','0','420921','');
INSERT INTO `web_shop_area` VALUES('1772','大悟县','','1769','1704,1769','0','1772','','0','0','420922','');
INSERT INTO `web_shop_area` VALUES('1773','云梦县','','1769','1704,1769','0','1773','','0','0','420923','');
INSERT INTO `web_shop_area` VALUES('1774','应城市','','1769','1704,1769','0','1774','','0','0','420981','');
INSERT INTO `web_shop_area` VALUES('1775','安陆市','','1769','1704,1769','0','1775','','0','0','420982','');
INSERT INTO `web_shop_area` VALUES('1776','汉川市','','1769','1704,1769','0','1776','','0','0','420984','');
INSERT INTO `web_shop_area` VALUES('1777','荆州市','','1704','1704','1','1778,1779,1780,1781,1782,1783,1784,1785','','0','0','421000','jingzhou');
INSERT INTO `web_shop_area` VALUES('1778','沙市区','','1777','1704,1777','0','1778','','0','0','421002','');
INSERT INTO `web_shop_area` VALUES('1779','荆州区','','1777','1704,1777','0','1779','','0','0','421003','');
INSERT INTO `web_shop_area` VALUES('1780','公安县','','1777','1704,1777','0','1780','','0','0','421022','');
INSERT INTO `web_shop_area` VALUES('1781','监利县','','1777','1704,1777','0','1781','','0','0','421023','');
INSERT INTO `web_shop_area` VALUES('1782','江陵县','','1777','1704,1777','0','1782','','0','0','421024','');
INSERT INTO `web_shop_area` VALUES('1783','石首市','','1777','1704,1777','0','1783','','0','0','421081','');
INSERT INTO `web_shop_area` VALUES('1784','洪湖市','','1777','1704,1777','0','1784','','0','0','421083','');
INSERT INTO `web_shop_area` VALUES('1785','松滋市','','1777','1704,1777','0','1785','','0','0','421087','');
INSERT INTO `web_shop_area` VALUES('1786','黄冈市','','1704','1704','1','1787,1788,1789,1790,1791,1792,1793,1794,1795,1796','','0','0','421100','huanggang');
INSERT INTO `web_shop_area` VALUES('1787','黄州区','','1786','1704,1786','0','1787','','0','0','421102','');
INSERT INTO `web_shop_area` VALUES('1788','团风县','','1786','1704,1786','0','1788','','0','0','421121','');
INSERT INTO `web_shop_area` VALUES('1789','红安县','','1786','1704,1786','0','1789','','0','0','421122','');
INSERT INTO `web_shop_area` VALUES('1790','罗田县','','1786','1704,1786','0','1790','','0','0','421123','');
INSERT INTO `web_shop_area` VALUES('1791','英山县','','1786','1704,1786','0','1791','','0','0','421124','');
INSERT INTO `web_shop_area` VALUES('1792','浠水县','','1786','1704,1786','0','1792','','0','0','421125','');
INSERT INTO `web_shop_area` VALUES('1793','蕲春县','','1786','1704,1786','0','1793','','0','0','421126','');
INSERT INTO `web_shop_area` VALUES('1794','黄梅县','','1786','1704,1786','0','1794','','0','0','421127','');
INSERT INTO `web_shop_area` VALUES('1795','麻城市','','1786','1704,1786','0','1795','','0','0','421181','');
INSERT INTO `web_shop_area` VALUES('1796','武穴市','','1786','1704,1786','0','1796','','0','0','421182','');
INSERT INTO `web_shop_area` VALUES('1797','咸宁市','','1704','1704','1','1798,1799,1800,1801,1802,1803','','0','0','421200','xianning');
INSERT INTO `web_shop_area` VALUES('1798','咸安区','','1797','1704,1797','0','1798','','0','0','421202','');
INSERT INTO `web_shop_area` VALUES('1799','嘉鱼县','','1797','1704,1797','0','1799','','0','0','421221','');
INSERT INTO `web_shop_area` VALUES('1800','通城县','','1797','1704,1797','0','1800','','0','0','421222','');
INSERT INTO `web_shop_area` VALUES('1801','崇阳县','','1797','1704,1797','0','1801','','0','0','421223','');
INSERT INTO `web_shop_area` VALUES('1802','通山县','','1797','1704,1797','0','1802','','0','0','421224','');
INSERT INTO `web_shop_area` VALUES('1803','赤壁市','','1797','1704,1797','0','1803','','0','0','421281','');
INSERT INTO `web_shop_area` VALUES('1804','随州市','','1704','1704','1','1805,1806,1807','','0','0','421300','suizhou');
INSERT INTO `web_shop_area` VALUES('1805','曾都区','','1804','1704,1804','0','1805','','0','0','421303','');
INSERT INTO `web_shop_area` VALUES('1806','随县','','1804','1704,1804','0','1806','','0','0','421321','');
INSERT INTO `web_shop_area` VALUES('1807','广水市','','1804','1704,1804','0','1807','','0','0','421381','');
INSERT INTO `web_shop_area` VALUES('1808','恩施','','1704','1704','1','1809,1810,1811,1812,1813,1814,1815,1816','','0','0','422800','enshi');
INSERT INTO `web_shop_area` VALUES('1809','恩施市','','1808','1704,1808','0','1809','','0','0','422801','');
INSERT INTO `web_shop_area` VALUES('1810','利川市','','1808','1704,1808','0','1810','','0','0','422802','');
INSERT INTO `web_shop_area` VALUES('1811','建始县','','1808','1704,1808','0','1811','','0','0','422822','');
INSERT INTO `web_shop_area` VALUES('1812','巴东县','','1808','1704,1808','0','1812','','0','0','422823','');
INSERT INTO `web_shop_area` VALUES('1813','宣恩县','','1808','1704,1808','0','1813','','0','0','422825','');
INSERT INTO `web_shop_area` VALUES('1814','咸丰县','','1808','1704,1808','0','1814','','0','0','422826','');
INSERT INTO `web_shop_area` VALUES('1815','来凤县','','1808','1704,1808','0','1815','','0','0','422827','');
INSERT INTO `web_shop_area` VALUES('1816','鹤峰县','','1808','1704,1808','0','1816','','0','0','422828','');
INSERT INTO `web_shop_area` VALUES('1818','仙桃市','','1704','1704','0','1818','','0','0','429004','xiantao');
INSERT INTO `web_shop_area` VALUES('1819','潜江市','','1704','1704','0','1819','','0','0','429005','qianjiangshi');
INSERT INTO `web_shop_area` VALUES('1820','天门市','','1704','1704','0','1820','','0','0','429006','tianmen');
INSERT INTO `web_shop_area` VALUES('1821','神农架林区','','1704','1704','0','1821','','0','0','429021','shennongjia');
INSERT INTO `web_shop_area` VALUES('1822','湖南','','0','0','1','1823,1833,1843,1849,1862,1875,1885,1895,1900,1907,1919,1931,1944,1950,1824,1825,1826,1827,1828,1829,1830,1831,1832','','12','0','430000','hunan');
INSERT INTO `web_shop_area` VALUES('1823','长沙市','','1822','1822','1','1824,1825,1826,1827,1828,1829,1830,1831,1832','','0','0','430100','changsha');
INSERT INTO `web_shop_area` VALUES('1824','芙蓉区','','1823','1822,1823','0','1824','','0','0','430102','');
INSERT INTO `web_shop_area` VALUES('1825','天心区','','1823','1822,1823','0','1825','','0','0','430103','');
INSERT INTO `web_shop_area` VALUES('1826','岳麓区','','1823','1822,1823','0','1826','','0','0','430104','');
INSERT INTO `web_shop_area` VALUES('1827','开福区','','1823','1822,1823','0','1827','','0','0','430105','');
INSERT INTO `web_shop_area` VALUES('1828','雨花区','','1823','1822,1823','0','1828','','0','0','430111','');
INSERT INTO `web_shop_area` VALUES('1829','长沙县','','1823','1822,1823','0','1829','','0','0','430121','');
INSERT INTO `web_shop_area` VALUES('1830','望城县','','1823','1822,1823','0','1830','','0','0','430122','');
INSERT INTO `web_shop_area` VALUES('1831','宁乡县','','1823','1822,1823','0','1831','','0','0','430124','');
INSERT INTO `web_shop_area` VALUES('1832','浏阳市','','1823','1822,1823','0','1832','','0','0','430181','');
INSERT INTO `web_shop_area` VALUES('1833','株洲市','','1822','1822','1','1834,1835,1836,1837,1838,1839,1840,1841,1842','','0','0','430200','zhuzhou');
INSERT INTO `web_shop_area` VALUES('1834','荷塘区','','1833','1822,1833','0','1834','','0','0','430202','');
INSERT INTO `web_shop_area` VALUES('1835','芦淞区','','1833','1822,1833','0','1835','','0','0','430203','');
INSERT INTO `web_shop_area` VALUES('1836','石峰区','','1833','1822,1833','0','1836','','0','0','430204','');
INSERT INTO `web_shop_area` VALUES('1837','天元区','','1833','1822,1833','0','1837','','0','0','430211','');
INSERT INTO `web_shop_area` VALUES('1838','株洲县','','1833','1822,1833','0','1838','','0','0','430221','');
INSERT INTO `web_shop_area` VALUES('1839','攸县','','1833','1822,1833','0','1839','','0','0','430223','');
INSERT INTO `web_shop_area` VALUES('1840','茶陵县','','1833','1822,1833','0','1840','','0','0','430224','');
INSERT INTO `web_shop_area` VALUES('1841','炎陵县','','1833','1822,1833','0','1841','','0','0','430225','');
INSERT INTO `web_shop_area` VALUES('1842','醴陵市','','1833','1822,1833','0','1842','','0','0','430281','');
INSERT INTO `web_shop_area` VALUES('1843','湘潭市','','1822','1822','1','1844,1845,1846,1847,1848','','0','0','430300','xiangtan');
INSERT INTO `web_shop_area` VALUES('1844','雨湖区','','1843','1822,1843','0','1844','','0','0','430302','');
INSERT INTO `web_shop_area` VALUES('1845','岳塘区','','1843','1822,1843','0','1845','','0','0','430304','');
INSERT INTO `web_shop_area` VALUES('1846','湘潭县','','1843','1822,1843','0','1846','','0','0','430321','');
INSERT INTO `web_shop_area` VALUES('1847','湘乡市','','1843','1822,1843','0','1847','','0','0','430381','');
INSERT INTO `web_shop_area` VALUES('1848','韶山市','','1843','1822,1843','0','1848','','0','0','430382','');
INSERT INTO `web_shop_area` VALUES('1849','衡阳市','','1822','1822','1','1850,1851,1852,1853,1854,1855,1856,1857,1858,1859,1860,1861','','0','0','430400','hengyang');
INSERT INTO `web_shop_area` VALUES('1850','珠晖区','','1849','1822,1849','0','1850','','0','0','430405','');
INSERT INTO `web_shop_area` VALUES('1851','雁峰区','','1849','1822,1849','0','1851','','0','0','430406','');
INSERT INTO `web_shop_area` VALUES('1852','石鼓区','','1849','1822,1849','0','1852','','0','0','430407','');
INSERT INTO `web_shop_area` VALUES('1853','蒸湘区','','1849','1822,1849','0','1853','','0','0','430408','');
INSERT INTO `web_shop_area` VALUES('1854','南岳区','','1849','1822,1849','0','1854','','0','0','430412','');
INSERT INTO `web_shop_area` VALUES('1855','衡阳县','','1849','1822,1849','0','1855','','0','0','430421','');
INSERT INTO `web_shop_area` VALUES('1856','衡南县','','1849','1822,1849','0','1856','','0','0','430422','');
INSERT INTO `web_shop_area` VALUES('1857','衡山县','','1849','1822,1849','0','1857','','0','0','430423','');
INSERT INTO `web_shop_area` VALUES('1858','衡东县','','1849','1822,1849','0','1858','','0','0','430424','');
INSERT INTO `web_shop_area` VALUES('1859','祁东县','','1849','1822,1849','0','1859','','0','0','430426','');
INSERT INTO `web_shop_area` VALUES('1860','耒阳市','','1849','1822,1849','0','1860','','0','0','430481','');
INSERT INTO `web_shop_area` VALUES('1861','常宁市','','1849','1822,1849','0','1861','','0','0','430482','');
INSERT INTO `web_shop_area` VALUES('1862','邵阳市','','1822','1822','1','1863,1864,1865,1866,1867,1868,1869,1870,1871,1872,1873,1874','','0','0','430500','shaoyang');
INSERT INTO `web_shop_area` VALUES('1863','双清区','','1862','1822,1862','0','1863','','0','0','430502','');
INSERT INTO `web_shop_area` VALUES('1864','大祥区','','1862','1822,1862','0','1864','','0','0','430503','');
INSERT INTO `web_shop_area` VALUES('1865','北塔区','','1862','1822,1862','0','1865','','0','0','430511','');
INSERT INTO `web_shop_area` VALUES('1866','邵东县','','1862','1822,1862','0','1866','','0','0','430521','');
INSERT INTO `web_shop_area` VALUES('1867','新邵县','','1862','1822,1862','0','1867','','0','0','430522','');
INSERT INTO `web_shop_area` VALUES('1868','邵阳县','','1862','1822,1862','0','1868','','0','0','430523','');
INSERT INTO `web_shop_area` VALUES('1869','隆回县','','1862','1822,1862','0','1869','','0','0','430524','');
INSERT INTO `web_shop_area` VALUES('1870','洞口县','','1862','1822,1862','0','1870','','0','0','430525','');
INSERT INTO `web_shop_area` VALUES('1871','绥宁县','','1862','1822,1862','0','1871','','0','0','430527','');
INSERT INTO `web_shop_area` VALUES('1872','新宁县','','1862','1822,1862','0','1872','','0','0','430528','');
INSERT INTO `web_shop_area` VALUES('1873','城步苗族自治县','','1862','1822,1862','0','1873','','0','0','430529','');
INSERT INTO `web_shop_area` VALUES('1874','武冈市','','1862','1822,1862','0','1874','','0','0','430581','');
INSERT INTO `web_shop_area` VALUES('1875','岳阳市','','1822','1822','1','1876,1877,1878,1879,1880,1881,1882,1883,1884','','0','0','430600','yueyang');
INSERT INTO `web_shop_area` VALUES('1876','岳阳楼区','','1875','1822,1875','0','1876','','0','0','430602','');
INSERT INTO `web_shop_area` VALUES('1877','云溪区','','1875','1822,1875','0','1877','','0','0','430603','');
INSERT INTO `web_shop_area` VALUES('1878','君山区','','1875','1822,1875','0','1878','','0','0','430611','');
INSERT INTO `web_shop_area` VALUES('1879','岳阳县','','1875','1822,1875','0','1879','','0','0','430621','');
INSERT INTO `web_shop_area` VALUES('1880','华容县','','1875','1822,1875','0','1880','','0','0','430623','');
INSERT INTO `web_shop_area` VALUES('1881','湘阴县','','1875','1822,1875','0','1881','','0','0','430624','');
INSERT INTO `web_shop_area` VALUES('1882','平江县','','1875','1822,1875','0','1882','','0','0','430626','');
INSERT INTO `web_shop_area` VALUES('1883','汨罗市','','1875','1822,1875','0','1883','','0','0','430681','');
INSERT INTO `web_shop_area` VALUES('1884','临湘市','','1875','1822,1875','0','1884','','0','0','430682','');
INSERT INTO `web_shop_area` VALUES('1885','常德市','','1822','1822','1','1886,1887,1888,1889,1890,1891,1892,1893,1894','','0','0','430700','changde');
INSERT INTO `web_shop_area` VALUES('1886','武陵区','','1885','1822,1885','0','1886','','0','0','430702','');
INSERT INTO `web_shop_area` VALUES('1887','鼎城区','','1885','1822,1885','0','1887','','0','0','430703','');
INSERT INTO `web_shop_area` VALUES('1888','安乡县','','1885','1822,1885','0','1888','','0','0','430721','');
INSERT INTO `web_shop_area` VALUES('1889','汉寿县','','1885','1822,1885','0','1889','','0','0','430722','');
INSERT INTO `web_shop_area` VALUES('1890','澧县','','1885','1822,1885','0','1890','','0','0','430723','');
INSERT INTO `web_shop_area` VALUES('1891','临澧县','','1885','1822,1885','0','1891','','0','0','430724','');
INSERT INTO `web_shop_area` VALUES('1892','桃源县','','1885','1822,1885','0','1892','','0','0','430725','');
INSERT INTO `web_shop_area` VALUES('1893','石门县','','1885','1822,1885','0','1893','','0','0','430726','');
INSERT INTO `web_shop_area` VALUES('1894','津市市','','1885','1822,1885','0','1894','','0','0','430781','');
INSERT INTO `web_shop_area` VALUES('1895','张家界','','1822','1822','1','1896,1897,1898,1899','','0','0','430800','zhangjiajie');
INSERT INTO `web_shop_area` VALUES('1896','永定区','','1895','1822,1895','0','1896','','0','0','430802','');
INSERT INTO `web_shop_area` VALUES('1897','武陵源区','','1895','1822,1895','0','1897','','0','0','430811','');
INSERT INTO `web_shop_area` VALUES('1898','慈利县','','1895','1822,1895','0','1898','','0','0','430821','');
INSERT INTO `web_shop_area` VALUES('1899','桑植县','','1895','1822,1895','0','1899','','0','0','430822','');
INSERT INTO `web_shop_area` VALUES('1900','益阳市','','1822','1822','1','1901,1902,1903,1904,1905,1906','','0','0','430900','yiyang');
INSERT INTO `web_shop_area` VALUES('1901','资阳区','','1900','1822,1900','0','1901','','0','0','430902','');
INSERT INTO `web_shop_area` VALUES('1902','赫山区','','1900','1822,1900','0','1902','','0','0','430903','');
INSERT INTO `web_shop_area` VALUES('1903','南县','','1900','1822,1900','0','1903','','0','0','430921','');
INSERT INTO `web_shop_area` VALUES('1904','桃江县','','1900','1822,1900','0','1904','','0','0','430922','');
INSERT INTO `web_shop_area` VALUES('1905','安化县','','1900','1822,1900','0','1905','','0','0','430923','');
INSERT INTO `web_shop_area` VALUES('1906','沅江市','','1900','1822,1900','0','1906','','0','0','430981','');
INSERT INTO `web_shop_area` VALUES('1907','郴州市','','1822','1822','1','1908,1909,1910,1911,1912,1913,1914,1915,1916,1917,1918','','0','0','431000','chenzhou');
INSERT INTO `web_shop_area` VALUES('1908','北湖区','','1907','1822,1907','0','1908','','0','0','431002','');
INSERT INTO `web_shop_area` VALUES('1909','苏仙区','','1907','1822,1907','0','1909','','0','0','431003','');
INSERT INTO `web_shop_area` VALUES('1910','桂阳县','','1907','1822,1907','0','1910','','0','0','431021','');
INSERT INTO `web_shop_area` VALUES('1911','宜章县','','1907','1822,1907','0','1911','','0','0','431022','');
INSERT INTO `web_shop_area` VALUES('1912','永兴县','','1907','1822,1907','0','1912','','0','0','431023','');
INSERT INTO `web_shop_area` VALUES('1913','嘉禾县','','1907','1822,1907','0','1913','','0','0','431024','');
INSERT INTO `web_shop_area` VALUES('1914','临武县','','1907','1822,1907','0','1914','','0','0','431025','');
INSERT INTO `web_shop_area` VALUES('1915','汝城县','','1907','1822,1907','0','1915','','0','0','431026','');
INSERT INTO `web_shop_area` VALUES('1916','桂东县','','1907','1822,1907','0','1916','','0','0','431027','');
INSERT INTO `web_shop_area` VALUES('1917','安仁县','','1907','1822,1907','0','1917','','0','0','431028','');
INSERT INTO `web_shop_area` VALUES('1918','资兴市','','1907','1822,1907','0','1918','','0','0','431081','');
INSERT INTO `web_shop_area` VALUES('1919','永州市','','1822','1822','1','1920,1921,1922,1923,1924,1925,1926,1927,1928,1929,1930','','0','0','431100','yongzhou');
INSERT INTO `web_shop_area` VALUES('1920','零陵区','','1919','1822,1919','0','1920','','0','0','431102','');
INSERT INTO `web_shop_area` VALUES('1921','冷水滩区','','1919','1822,1919','0','1921','','0','0','431103','');
INSERT INTO `web_shop_area` VALUES('1922','祁阳县','','1919','1822,1919','0','1922','','0','0','431121','');
INSERT INTO `web_shop_area` VALUES('1923','东安县','','1919','1822,1919','0','1923','','0','0','431122','');
INSERT INTO `web_shop_area` VALUES('1924','双牌县','','1919','1822,1919','0','1924','','0','0','431123','');
INSERT INTO `web_shop_area` VALUES('1925','道县','','1919','1822,1919','0','1925','','0','0','431124','');
INSERT INTO `web_shop_area` VALUES('1926','江永县','','1919','1822,1919','0','1926','','0','0','431125','');
INSERT INTO `web_shop_area` VALUES('1927','宁远县','','1919','1822,1919','0','1927','','0','0','431126','');
INSERT INTO `web_shop_area` VALUES('1928','蓝山县','','1919','1822,1919','0','1928','','0','0','431127','');
INSERT INTO `web_shop_area` VALUES('1929','新田县','','1919','1822,1919','0','1929','','0','0','431128','');
INSERT INTO `web_shop_area` VALUES('1930','江华瑶族自治县','','1919','1822,1919','0','1930','','0','0','431129','');
INSERT INTO `web_shop_area` VALUES('1931','怀化市','','1822','1822','1','1932,1933,1934,1935,1936,1937,1938,1939,1940,1941,1942,1943','','0','0','431200','huaihua');
INSERT INTO `web_shop_area` VALUES('1932','鹤城区','','1931','1822,1931','0','1932','','0','0','431202','');
INSERT INTO `web_shop_area` VALUES('1933','中方县','','1931','1822,1931','0','1933','','0','0','431221','');
INSERT INTO `web_shop_area` VALUES('1934','沅陵县','','1931','1822,1931','0','1934','','0','0','431222','');
INSERT INTO `web_shop_area` VALUES('1935','辰溪县','','1931','1822,1931','0','1935','','0','0','431223','');
INSERT INTO `web_shop_area` VALUES('1936','溆浦县','','1931','1822,1931','0','1936','','0','0','431224','');
INSERT INTO `web_shop_area` VALUES('1937','会同县','','1931','1822,1931','0','1937','','0','0','431225','');
INSERT INTO `web_shop_area` VALUES('1938','麻阳苗族自治县','','1931','1822,1931','0','1938','','0','0','431226','');
INSERT INTO `web_shop_area` VALUES('1939','新晃侗族自治县','','1931','1822,1931','0','1939','','0','0','431227','');
INSERT INTO `web_shop_area` VALUES('1940','芷江侗族自治县','','1931','1822,1931','0','1940','','0','0','431228','');
INSERT INTO `web_shop_area` VALUES('1941','靖州苗族侗族自治县','','1931','1822,1931','0','1941','','0','0','431229','');
INSERT INTO `web_shop_area` VALUES('1942','通道侗族自治县','','1931','1822,1931','0','1942','','0','0','431230','');
INSERT INTO `web_shop_area` VALUES('1943','洪江市','','1931','1822,1931','0','1943','','0','0','431281','');
INSERT INTO `web_shop_area` VALUES('1944','娄底市','','1822','1822','1','1945,1946,1947,1948,1949','','0','0','431300','loudi');
INSERT INTO `web_shop_area` VALUES('1945','娄星区','','1944','1822,1944','0','1945','','0','0','431302','');
INSERT INTO `web_shop_area` VALUES('1946','双峰县','','1944','1822,1944','0','1946','','0','0','431321','');
INSERT INTO `web_shop_area` VALUES('1947','新化县','','1944','1822,1944','0','1947','','0','0','431322','');
INSERT INTO `web_shop_area` VALUES('1948','冷水江市','','1944','1822,1944','0','1948','','0','0','431381','');
INSERT INTO `web_shop_area` VALUES('1949','涟源市','','1944','1822,1944','0','1949','','0','0','431382','');
INSERT INTO `web_shop_area` VALUES('1950','湘西','','1822','1822','1','1951,1952,1953,1954,1955,1956,1957,1958','','0','0','433100','xiangxi');
INSERT INTO `web_shop_area` VALUES('1951','吉首市','','1950','1822,1950','0','1951','','0','0','433101','');
INSERT INTO `web_shop_area` VALUES('1952','泸溪县','','1950','1822,1950','0','1952','','0','0','433122','');
INSERT INTO `web_shop_area` VALUES('1953','凤凰县','','1950','1822,1950','0','1953','','0','0','433123','');
INSERT INTO `web_shop_area` VALUES('1954','花垣县','','1950','1822,1950','0','1954','','0','0','433124','');
INSERT INTO `web_shop_area` VALUES('1955','保靖县','','1950','1822,1950','0','1955','','0','0','433125','');
INSERT INTO `web_shop_area` VALUES('1956','古丈县','','1950','1822,1950','0','1956','','0','0','433126','');
INSERT INTO `web_shop_area` VALUES('1957','永顺县','','1950','1822,1950','0','1957','','0','0','433127','');
INSERT INTO `web_shop_area` VALUES('1958','龙山县','','1950','1822,1950','0','1958','','0','0','433130','');
INSERT INTO `web_shop_area` VALUES('1959','广东','','0','0','1','1960,1973,1984,1991,1995,2003,2009,2017,2027,2034,2043,2049,2058,2063,2070,2075,2084,2085,2086,2090,2096,1961,1962,1963,1964,1965,1966,1967,1968,1969,1970,1971,1972','','5','0','440000','guangdong');
INSERT INTO `web_shop_area` VALUES('1960','广州市','','1959','1959','1','1961,1962,1963,1964,1965,1966,1967,1968,1969,1970,1971,1972','','0','0','440100','guangzhou');
INSERT INTO `web_shop_area` VALUES('1961','荔湾区','','1960','1959,1960','0','1961','','0','0','440103','');
INSERT INTO `web_shop_area` VALUES('1962','越秀区','','1960','1959,1960','0','1962','','0','0','440104','');
INSERT INTO `web_shop_area` VALUES('1963','海珠区','','1960','1959,1960','0','1963','','0','0','440105','');
INSERT INTO `web_shop_area` VALUES('1964','天河区','','1960','1959,1960','0','1964','','0','0','440106','');
INSERT INTO `web_shop_area` VALUES('1965','白云区','','1960','1959,1960','0','1965','','0','0','440111','');
INSERT INTO `web_shop_area` VALUES('1966','黄埔区','','1960','1959,1960','0','1966','','0','0','440112','');
INSERT INTO `web_shop_area` VALUES('1967','番禺区','','1960','1959,1960','0','1967','','0','0','440113','');
INSERT INTO `web_shop_area` VALUES('1968','花都区','','1960','1959,1960','0','1968','','0','0','440114','');
INSERT INTO `web_shop_area` VALUES('1969','南沙区','','1960','1959,1960','0','1969','','0','0','440115','');
INSERT INTO `web_shop_area` VALUES('1970','萝岗区','','1960','1959,1960','0','1970','','0','0','440116','');
INSERT INTO `web_shop_area` VALUES('1971','增城市','','1960','1959,1960','0','1971','','0','0','440183','');
INSERT INTO `web_shop_area` VALUES('1972','从化市','','1960','1959,1960','0','1972','','0','0','440184','');
INSERT INTO `web_shop_area` VALUES('1973','韶关市','','1959','1959','1','1974,1975,1976,1977,1978,1979,1980,1981,1982,1983','','0','0','440200','shaoguan');
INSERT INTO `web_shop_area` VALUES('1974','武江区','','1973','1959,1973','0','1974','','0','0','440203','');
INSERT INTO `web_shop_area` VALUES('1975','浈江区','','1973','1959,1973','0','1975','','0','0','440204','');
INSERT INTO `web_shop_area` VALUES('1976','曲江区','','1973','1959,1973','0','1976','','0','0','440205','');
INSERT INTO `web_shop_area` VALUES('1977','始兴县','','1973','1959,1973','0','1977','','0','0','440222','');
INSERT INTO `web_shop_area` VALUES('1978','仁化县','','1973','1959,1973','0','1978','','0','0','440224','');
INSERT INTO `web_shop_area` VALUES('1979','翁源县','','1973','1959,1973','0','1979','','0','0','440229','');
INSERT INTO `web_shop_area` VALUES('1980','乳源瑶族自治县','','1973','1959,1973','0','1980','','0','0','440232','');
INSERT INTO `web_shop_area` VALUES('1981','新丰县','','1973','1959,1973','0','1981','','0','0','440233','');
INSERT INTO `web_shop_area` VALUES('1982','乐昌市','','1973','1959,1973','0','1982','','0','0','440281','');
INSERT INTO `web_shop_area` VALUES('1983','南雄市','','1973','1959,1973','0','1983','','0','0','440282','');
INSERT INTO `web_shop_area` VALUES('1984','深圳市','','1959','1959','1','1985,1986,1987,1988,1989,1990','','0','0','440300','shenzhen');
INSERT INTO `web_shop_area` VALUES('1985','罗湖区','','1984','1959,1984','0','1985','','0','0','440303','');
INSERT INTO `web_shop_area` VALUES('1986','福田区','','1984','1959,1984','0','1986','','0','0','440304','');
INSERT INTO `web_shop_area` VALUES('1987','南山区','','1984','1959,1984','0','1987','','0','0','440305','');
INSERT INTO `web_shop_area` VALUES('1988','宝安区','','1984','1959,1984','0','1988','','0','0','440306','');
INSERT INTO `web_shop_area` VALUES('1989','龙岗区','','1984','1959,1984','0','1989','','0','0','440307','');
INSERT INTO `web_shop_area` VALUES('1990','盐田区','','1984','1959,1984','0','1990','','0','0','440308','');
INSERT INTO `web_shop_area` VALUES('1991','珠海市','','1959','1959','1','1992,1993,1994','','0','0','440400','zhuhai');
INSERT INTO `web_shop_area` VALUES('1992','香洲区','','1991','1959,1991','0','1992','','0','0','440402','');
INSERT INTO `web_shop_area` VALUES('1993','斗门区','','1991','1959,1991','0','1993','','0','0','440403','');
INSERT INTO `web_shop_area` VALUES('1994','金湾区','','1991','1959,1991','0','1994','','0','0','440404','');
INSERT INTO `web_shop_area` VALUES('1995','汕头市','','1959','1959','1','1996,1997,1998,1999,2000,2001,2002','','0','0','440500','shantou');
INSERT INTO `web_shop_area` VALUES('1996','龙湖区','','1995','1959,1995','0','1996','','0','0','440507','');
INSERT INTO `web_shop_area` VALUES('1997','金平区','','1995','1959,1995','0','1997','','0','0','440511','');
INSERT INTO `web_shop_area` VALUES('1998','濠江区','','1995','1959,1995','0','1998','','0','0','440512','');
INSERT INTO `web_shop_area` VALUES('1999','潮阳区','','1995','1959,1995','0','1999','','0','0','440513','');
INSERT INTO `web_shop_area` VALUES('2000','潮南区','','1995','1959,1995','0','2000','','0','0','440514','');
INSERT INTO `web_shop_area` VALUES('2001','澄海区','','1995','1959,1995','0','2001','','0','0','440515','');
INSERT INTO `web_shop_area` VALUES('2002','南澳县','','1995','1959,1995','0','2002','','0','0','440523','');
INSERT INTO `web_shop_area` VALUES('2003','佛山市','','1959','1959','1','2004,2005,2006,2007,2008','','0','0','440600','fushan');
INSERT INTO `web_shop_area` VALUES('2004','禅城区','','2003','1959,2003','0','2004','','0','0','440604','');
INSERT INTO `web_shop_area` VALUES('2005','南海区','','2003','1959,2003','0','2005','','0','0','440605','');
INSERT INTO `web_shop_area` VALUES('2006','顺德区','','2003','1959,2003','0','2006','','0','0','440606','');
INSERT INTO `web_shop_area` VALUES('2007','三水区','','2003','1959,2003','0','2007','','0','0','440607','');
INSERT INTO `web_shop_area` VALUES('2008','高明区','','2003','1959,2003','0','2008','','0','0','440608','');
INSERT INTO `web_shop_area` VALUES('2009','江门市','','1959','1959','1','2010,2011,2012,2013,2014,2015,2016','','0','0','440700','jiangmen');
INSERT INTO `web_shop_area` VALUES('2010','蓬江区','','2009','1959,2009','0','2010','','0','0','440703','');
INSERT INTO `web_shop_area` VALUES('2011','江海区','','2009','1959,2009','0','2011','','0','0','440704','');
INSERT INTO `web_shop_area` VALUES('2012','新会区','','2009','1959,2009','0','2012','','0','0','440705','');
INSERT INTO `web_shop_area` VALUES('2013','台山市','','2009','1959,2009','0','2013','','0','0','440781','');
INSERT INTO `web_shop_area` VALUES('2014','开平市','','2009','1959,2009','0','2014','','0','0','440783','');
INSERT INTO `web_shop_area` VALUES('2015','鹤山市','','2009','1959,2009','0','2015','','0','0','440784','');
INSERT INTO `web_shop_area` VALUES('2016','恩平市','','2009','1959,2009','0','2016','','0','0','440785','');
INSERT INTO `web_shop_area` VALUES('2017','湛江市','','1959','1959','1','2018,2019,2020,2021,2022,2023,2024,2025,2026','','0','0','440800','zhanjiang');
INSERT INTO `web_shop_area` VALUES('2018','赤坎区','','2017','1959,2017','0','2018','','0','0','440802','');
INSERT INTO `web_shop_area` VALUES('2019','霞山区','','2017','1959,2017','0','2019','','0','0','440803','');
INSERT INTO `web_shop_area` VALUES('2020','坡头区','','2017','1959,2017','0','2020','','0','0','440804','');
INSERT INTO `web_shop_area` VALUES('2021','麻章区','','2017','1959,2017','0','2021','','0','0','440811','');
INSERT INTO `web_shop_area` VALUES('2022','遂溪县','','2017','1959,2017','0','2022','','0','0','440823','');
INSERT INTO `web_shop_area` VALUES('2023','徐闻县','','2017','1959,2017','0','2023','','0','0','440825','');
INSERT INTO `web_shop_area` VALUES('2024','廉江市','','2017','1959,2017','0','2024','','0','0','440881','');
INSERT INTO `web_shop_area` VALUES('2025','雷州市','','2017','1959,2017','0','2025','','0','0','440882','');
INSERT INTO `web_shop_area` VALUES('2026','吴川市','','2017','1959,2017','0','2026','','0','0','440883','');
INSERT INTO `web_shop_area` VALUES('2027','茂名市','','1959','1959','1','2028,2029,2030,2031,2032,2033','','0','0','440900','maoming');
INSERT INTO `web_shop_area` VALUES('2028','茂南区','','2027','1959,2027','0','2028','','0','0','440902','');
INSERT INTO `web_shop_area` VALUES('2029','茂港区','','2027','1959,2027','0','2029','','0','0','440903','');
INSERT INTO `web_shop_area` VALUES('2030','电白县','','2027','1959,2027','0','2030','','0','0','440923','');
INSERT INTO `web_shop_area` VALUES('2031','高州市','','2027','1959,2027','0','2031','','0','0','440981','');
INSERT INTO `web_shop_area` VALUES('2032','化州市','','2027','1959,2027','0','2032','','0','0','440982','');
INSERT INTO `web_shop_area` VALUES('2033','信宜市','','2027','1959,2027','0','2033','','0','0','440983','');
INSERT INTO `web_shop_area` VALUES('2034','肇庆市','','1959','1959','1','2035,2036,2037,2038,2039,2040,2041,2042','','0','0','441200','zhaoqing');
INSERT INTO `web_shop_area` VALUES('2035','端州区','','2034','1959,2034','0','2035','','0','0','441202','');
INSERT INTO `web_shop_area` VALUES('2036','鼎湖区','','2034','1959,2034','0','2036','','0','0','441203','');
INSERT INTO `web_shop_area` VALUES('2037','广宁县','','2034','1959,2034','0','2037','','0','0','441223','');
INSERT INTO `web_shop_area` VALUES('2038','怀集县','','2034','1959,2034','0','2038','','0','0','441224','');
INSERT INTO `web_shop_area` VALUES('2039','封开县','','2034','1959,2034','0','2039','','0','0','441225','');
INSERT INTO `web_shop_area` VALUES('2040','德庆县','','2034','1959,2034','0','2040','','0','0','441226','');
INSERT INTO `web_shop_area` VALUES('2041','高要市','','2034','1959,2034','0','2041','','0','0','441283','');
INSERT INTO `web_shop_area` VALUES('2042','四会市','','2034','1959,2034','0','2042','','0','0','441284','');
INSERT INTO `web_shop_area` VALUES('2043','惠州市','','1959','1959','1','2044,2045,2046,2047,2048','','0','0','441300','huizhou');
INSERT INTO `web_shop_area` VALUES('2044','惠城区','','2043','1959,2043','0','2044','','0','0','441302','');
INSERT INTO `web_shop_area` VALUES('2045','惠阳区','','2043','1959,2043','0','2045','','0','0','441303','');
INSERT INTO `web_shop_area` VALUES('2046','博罗县','','2043','1959,2043','0','2046','','0','0','441322','');
INSERT INTO `web_shop_area` VALUES('2047','惠东县','','2043','1959,2043','0','2047','','0','0','441323','');
INSERT INTO `web_shop_area` VALUES('2048','龙门县','','2043','1959,2043','0','2048','','0','0','441324','');
INSERT INTO `web_shop_area` VALUES('2049','梅州市','','1959','1959','1','2050,2051,2052,2053,2054,2055,2056,2057','','0','0','441400','meizhou');
INSERT INTO `web_shop_area` VALUES('2050','梅江区','','2049','1959,2049','0','2050','','0','0','441402','');
INSERT INTO `web_shop_area` VALUES('2051','梅县','','2049','1959,2049','0','2051','','0','0','441421','');
INSERT INTO `web_shop_area` VALUES('2052','大埔县','','2049','1959,2049','0','2052','','0','0','441422','');
INSERT INTO `web_shop_area` VALUES('2053','丰顺县','','2049','1959,2049','0','2053','','0','0','441423','');
INSERT INTO `web_shop_area` VALUES('2054','五华县','','2049','1959,2049','0','2054','','0','0','441424','');
INSERT INTO `web_shop_area` VALUES('2055','平远县','','2049','1959,2049','0','2055','','0','0','441426','');
INSERT INTO `web_shop_area` VALUES('2056','蕉岭县','','2049','1959,2049','0','2056','','0','0','441427','');
INSERT INTO `web_shop_area` VALUES('2057','兴宁市','','2049','1959,2049','0','2057','','0','0','441481','');
INSERT INTO `web_shop_area` VALUES('2058','汕尾市','','1959','1959','1','2059,2060,2061,2062','','0','0','441500','shanwei');
INSERT INTO `web_shop_area` VALUES('2059','城区','','2058','1959,2058','0','2059','','0','0','441502','');
INSERT INTO `web_shop_area` VALUES('2060','海丰县','','2058','1959,2058','0','2060','','0','0','441521','');
INSERT INTO `web_shop_area` VALUES('2061','陆河县','','2058','1959,2058','0','2061','','0','0','441523','');
INSERT INTO `web_shop_area` VALUES('2062','陆丰市','','2058','1959,2058','0','2062','','0','0','441581','');
INSERT INTO `web_shop_area` VALUES('2063','河源市','','1959','1959','1','2064,2065,2066,2067,2068,2069','','0','0','441600','heyuan');
INSERT INTO `web_shop_area` VALUES('2064','源城区','','2063','1959,2063','0','2064','','0','0','441602','');
INSERT INTO `web_shop_area` VALUES('2065','紫金县','','2063','1959,2063','0','2065','','0','0','441621','');
INSERT INTO `web_shop_area` VALUES('2066','龙川县','','2063','1959,2063','0','2066','','0','0','441622','');
INSERT INTO `web_shop_area` VALUES('2067','连平县','','2063','1959,2063','0','2067','','0','0','441623','');
INSERT INTO `web_shop_area` VALUES('2068','和平县','','2063','1959,2063','0','2068','','0','0','441624','');
INSERT INTO `web_shop_area` VALUES('2069','东源县','','2063','1959,2063','0','2069','','0','0','441625','');
INSERT INTO `web_shop_area` VALUES('2070','阳江市','','1959','1959','1','2071,2072,2073,2074','','0','0','441700','yangjiang');
INSERT INTO `web_shop_area` VALUES('2071','江城区','','2070','1959,2070','0','2071','','0','0','441702','');
INSERT INTO `web_shop_area` VALUES('2072','阳西县','','2070','1959,2070','0','2072','','0','0','441721','');
INSERT INTO `web_shop_area` VALUES('2073','阳东县','','2070','1959,2070','0','2073','','0','0','441723','');
INSERT INTO `web_shop_area` VALUES('2074','阳春市','','2070','1959,2070','0','2074','','0','0','441781','');
INSERT INTO `web_shop_area` VALUES('2075','清远市','','1959','1959','1','2076,2077,2078,2079,2080,2081,2082,2083','','0','0','441800','qingyuan');
INSERT INTO `web_shop_area` VALUES('2076','清城区','','2075','1959,2075','0','2076','','0','0','441802','');
INSERT INTO `web_shop_area` VALUES('2077','佛冈县','','2075','1959,2075','0','2077','','0','0','441821','');
INSERT INTO `web_shop_area` VALUES('2078','阳山县','','2075','1959,2075','0','2078','','0','0','441823','');
INSERT INTO `web_shop_area` VALUES('2079','连山壮族瑶族自治县','','2075','1959,2075','0','2079','','0','0','441825','');
INSERT INTO `web_shop_area` VALUES('2080','连南瑶族自治县','','2075','1959,2075','0','2080','','0','0','441826','');
INSERT INTO `web_shop_area` VALUES('2081','清新县','','2075','1959,2075','0','2081','','0','0','441827','');
INSERT INTO `web_shop_area` VALUES('2082','英德市','','2075','1959,2075','0','2082','','0','0','441881','');
INSERT INTO `web_shop_area` VALUES('2083','连州市','','2075','1959,2075','0','2083','','0','0','441882','');
INSERT INTO `web_shop_area` VALUES('2084','东莞市','','1959','1959','0','2084','','0','0','441900','dongguan');
INSERT INTO `web_shop_area` VALUES('2085','中山市','','1959','1959','0','2085','','0','0','442000','zhongshanshi');
INSERT INTO `web_shop_area` VALUES('2086','潮州市','','1959','1959','1','2087,2088,2089','','0','0','445100','chaozhou');
INSERT INTO `web_shop_area` VALUES('2087','湘桥区','','2086','1959,2086','0','2087','','0','0','445102','');
INSERT INTO `web_shop_area` VALUES('2088','潮安县','','2086','1959,2086','0','2088','','0','0','445121','');
INSERT INTO `web_shop_area` VALUES('2089','饶平县','','2086','1959,2086','0','2089','','0','0','445122','');
INSERT INTO `web_shop_area` VALUES('2090','揭阳市','','1959','1959','1','2091,2092,2093,2094,2095','','0','0','445200','jieyang');
INSERT INTO `web_shop_area` VALUES('2091','榕城区','','2090','1959,2090','0','2091','','0','0','445202','');
INSERT INTO `web_shop_area` VALUES('2092','揭东县','','2090','1959,2090','0','2092','','0','0','445221','');
INSERT INTO `web_shop_area` VALUES('2093','揭西县','','2090','1959,2090','0','2093','','0','0','445222','');
INSERT INTO `web_shop_area` VALUES('2094','惠来县','','2090','1959,2090','0','2094','','0','0','445224','');
INSERT INTO `web_shop_area` VALUES('2095','普宁市','','2090','1959,2090','0','2095','','0','0','445281','');
INSERT INTO `web_shop_area` VALUES('2096','云浮市','','1959','1959','1','2097,2098,2099,2100,2101','','0','0','445300','yunfu');
INSERT INTO `web_shop_area` VALUES('2097','云城区','','2096','1959,2096','0','2097','','0','0','445302','');
INSERT INTO `web_shop_area` VALUES('2098','新兴县','','2096','1959,2096','0','2098','','0','0','445321','');
INSERT INTO `web_shop_area` VALUES('2099','郁南县','','2096','1959,2096','0','2099','','0','0','445322','');
INSERT INTO `web_shop_area` VALUES('2100','云安县','','2096','1959,2096','0','2100','','0','0','445323','');
INSERT INTO `web_shop_area` VALUES('2101','罗定市','','2096','1959,2096','0','2101','','0','0','445381','');
INSERT INTO `web_shop_area` VALUES('2102','广西','','0','0','1','2103,2116,2127,2145,2153,2158,2163,2168,2174,2181,2194,2200,2212,2219,2104,2105,2106,2107,2108,2109,2110,2111,2112,2113,2114,2115','','22','0','450000','guangxi');
INSERT INTO `web_shop_area` VALUES('2103','南宁市','','2102','2102','1','2104,2105,2106,2107,2108,2109,2110,2111,2112,2113,2114,2115','','0','0','450100','nanning');
INSERT INTO `web_shop_area` VALUES('2104','兴宁区','','2103','2102,2103','0','2104','','0','0','450102','');
INSERT INTO `web_shop_area` VALUES('2105','青秀区','','2103','2102,2103','0','2105','','0','0','450103','');
INSERT INTO `web_shop_area` VALUES('2106','江南区','','2103','2102,2103','0','2106','','0','0','450105','');
INSERT INTO `web_shop_area` VALUES('2107','西乡塘区','','2103','2102,2103','0','2107','','0','0','450107','');
INSERT INTO `web_shop_area` VALUES('2108','良庆区','','2103','2102,2103','0','2108','','0','0','450108','');
INSERT INTO `web_shop_area` VALUES('2109','邕宁区','','2103','2102,2103','0','2109','','0','0','450109','');
INSERT INTO `web_shop_area` VALUES('2110','武鸣县','','2103','2102,2103','0','2110','','0','0','450122','');
INSERT INTO `web_shop_area` VALUES('2111','隆安县','','2103','2102,2103','0','2111','','0','0','450123','');
INSERT INTO `web_shop_area` VALUES('2112','马山县','','2103','2102,2103','0','2112','','0','0','450124','');
INSERT INTO `web_shop_area` VALUES('2113','上林县','','2103','2102,2103','0','2113','','0','0','450125','');
INSERT INTO `web_shop_area` VALUES('2114','宾阳县','','2103','2102,2103','0','2114','','0','0','450126','');
INSERT INTO `web_shop_area` VALUES('2115','横县','','2103','2102,2103','0','2115','','0','0','450127','');
INSERT INTO `web_shop_area` VALUES('2116','柳州市','','2102','2102','1','2117,2118,2119,2120,2121,2122,2123,2124,2125,2126','','0','0','450200','liuzhou');
INSERT INTO `web_shop_area` VALUES('2117','城中区','','2116','2102,2116','0','2117','','0','0','450202','');
INSERT INTO `web_shop_area` VALUES('2118','鱼峰区','','2116','2102,2116','0','2118','','0','0','450203','');
INSERT INTO `web_shop_area` VALUES('2119','柳南区','','2116','2102,2116','0','2119','','0','0','450204','');
INSERT INTO `web_shop_area` VALUES('2120','柳北区','','2116','2102,2116','0','2120','','0','0','450205','');
INSERT INTO `web_shop_area` VALUES('2121','柳江县','','2116','2102,2116','0','2121','','0','0','450221','');
INSERT INTO `web_shop_area` VALUES('2122','柳城县','','2116','2102,2116','0','2122','','0','0','450222','');
INSERT INTO `web_shop_area` VALUES('2123','鹿寨县','','2116','2102,2116','0','2123','','0','0','450223','');
INSERT INTO `web_shop_area` VALUES('2124','融安县','','2116','2102,2116','0','2124','','0','0','450224','');
INSERT INTO `web_shop_area` VALUES('2125','融水苗族自治县','','2116','2102,2116','0','2125','','0','0','450225','');
INSERT INTO `web_shop_area` VALUES('2126','三江侗族自治县','','2116','2102,2116','0','2126','','0','0','450226','');
INSERT INTO `web_shop_area` VALUES('2127','桂林市','','2102','2102','1','2128,2129,2130,2131,2132,2133,2134,2135,2136,2137,2138,2139,2140,2141,2142,2143,2144','','0','0','450300','guilin');
INSERT INTO `web_shop_area` VALUES('2128','秀峰区','','2127','2102,2127','0','2128','','0','0','450302','');
INSERT INTO `web_shop_area` VALUES('2129','叠彩区','','2127','2102,2127','0','2129','','0','0','450303','');
INSERT INTO `web_shop_area` VALUES('2130','象山区','','2127','2102,2127','0','2130','','0','0','450304','');
INSERT INTO `web_shop_area` VALUES('2131','七星区','','2127','2102,2127','0','2131','','0','0','450305','');
INSERT INTO `web_shop_area` VALUES('2132','雁山区','','2127','2102,2127','0','2132','','0','0','450311','');
INSERT INTO `web_shop_area` VALUES('2133','阳朔县','','2127','2102,2127','0','2133','','0','0','450321','');
INSERT INTO `web_shop_area` VALUES('2134','临桂县','','2127','2102,2127','0','2134','','0','0','450322','');
INSERT INTO `web_shop_area` VALUES('2135','灵川县','','2127','2102,2127','0','2135','','0','0','450323','');
INSERT INTO `web_shop_area` VALUES('2136','全州县','','2127','2102,2127','0','2136','','0','0','450324','');
INSERT INTO `web_shop_area` VALUES('2137','兴安县','','2127','2102,2127','0','2137','','0','0','450325','');
INSERT INTO `web_shop_area` VALUES('2138','永福县','','2127','2102,2127','0','2138','','0','0','450326','');
INSERT INTO `web_shop_area` VALUES('2139','灌阳县','','2127','2102,2127','0','2139','','0','0','450327','');
INSERT INTO `web_shop_area` VALUES('2140','龙胜各族自治县','','2127','2102,2127','0','2140','','0','0','450328','');
INSERT INTO `web_shop_area` VALUES('2141','资源县','','2127','2102,2127','0','2141','','0','0','450329','');
INSERT INTO `web_shop_area` VALUES('2142','平乐县','','2127','2102,2127','0','2142','','0','0','450330','');
INSERT INTO `web_shop_area` VALUES('2143','荔蒲县','','2127','2102,2127','0','2143','','0','0','450331','');
INSERT INTO `web_shop_area` VALUES('2144','恭城瑶族自治县','','2127','2102,2127','0','2144','','0','0','450332','');
INSERT INTO `web_shop_area` VALUES('2145','梧州市','','2102','2102','1','2146,2147,2148,2149,2150,2151,2152','','0','0','450400','wuzhou');
INSERT INTO `web_shop_area` VALUES('2146','万秀区','','2145','2102,2145','0','2146','','0','0','450403','');
INSERT INTO `web_shop_area` VALUES('2147','蝶山区','','2145','2102,2145','0','2147','','0','0','450404','');
INSERT INTO `web_shop_area` VALUES('2148','长洲区','','2145','2102,2145','0','2148','','0','0','450405','');
INSERT INTO `web_shop_area` VALUES('2149','苍梧县','','2145','2102,2145','0','2149','','0','0','450421','');
INSERT INTO `web_shop_area` VALUES('2150','藤县','','2145','2102,2145','0','2150','','0','0','450422','');
INSERT INTO `web_shop_area` VALUES('2151','蒙山县','','2145','2102,2145','0','2151','','0','0','450423','');
INSERT INTO `web_shop_area` VALUES('2152','岑溪市','','2145','2102,2145','0','2152','','0','0','450481','');
INSERT INTO `web_shop_area` VALUES('2153','北海市','','2102','2102','1','2154,2155,2156,2157','','0','0','450500','beihai');
INSERT INTO `web_shop_area` VALUES('2154','海城区','','2153','2102,2153','0','2154','','0','0','450502','');
INSERT INTO `web_shop_area` VALUES('2155','银海区','','2153','2102,2153','0','2155','','0','0','450503','');
INSERT INTO `web_shop_area` VALUES('2156','铁山港区','','2153','2102,2153','0','2156','','0','0','450512','');
INSERT INTO `web_shop_area` VALUES('2157','合浦县','','2153','2102,2153','0','2157','','0','0','450521','');
INSERT INTO `web_shop_area` VALUES('2158','防城港','','2102','2102','1','2159,2160,2161,2162','','0','0','450600','fangchenggang');
INSERT INTO `web_shop_area` VALUES('2159','港口区','','2158','2102,2158','0','2159','','0','0','450602','');
INSERT INTO `web_shop_area` VALUES('2160','防城区','','2158','2102,2158','0','2160','','0','0','450603','');
INSERT INTO `web_shop_area` VALUES('2161','上思县','','2158','2102,2158','0','2161','','0','0','450621','');
INSERT INTO `web_shop_area` VALUES('2162','东兴市','','2158','2102,2158','0','2162','','0','0','450681','');
INSERT INTO `web_shop_area` VALUES('2163','钦州市','','2102','2102','1','2164,2165,2166,2167','','0','0','450700','qinzhou');
INSERT INTO `web_shop_area` VALUES('2164','钦南区','','2163','2102,2163','0','2164','','0','0','450702','');
INSERT INTO `web_shop_area` VALUES('2165','钦北区','','2163','2102,2163','0','2165','','0','0','450703','');
INSERT INTO `web_shop_area` VALUES('2166','灵山县','','2163','2102,2163','0','2166','','0','0','450721','');
INSERT INTO `web_shop_area` VALUES('2167','浦北县','','2163','2102,2163','0','2167','','0','0','450722','');
INSERT INTO `web_shop_area` VALUES('2168','贵港市','','2102','2102','1','2169,2170,2171,2172,2173','','0','0','450800','guigang');
INSERT INTO `web_shop_area` VALUES('2169','港北区','','2168','2102,2168','0','2169','','0','0','450802','');
INSERT INTO `web_shop_area` VALUES('2170','港南区','','2168','2102,2168','0','2170','','0','0','450803','');
INSERT INTO `web_shop_area` VALUES('2171','覃塘区','','2168','2102,2168','0','2171','','0','0','450804','');
INSERT INTO `web_shop_area` VALUES('2172','平南县','','2168','2102,2168','0','2172','','0','0','450821','');
INSERT INTO `web_shop_area` VALUES('2173','桂平市','','2168','2102,2168','0','2173','','0','0','450881','');
INSERT INTO `web_shop_area` VALUES('2174','玉林市','','2102','2102','1','2175,2176,2177,2178,2179,2180','','0','0','450900','yulin');
INSERT INTO `web_shop_area` VALUES('2175','玉州区','','2174','2102,2174','0','2175','','0','0','450902','');
INSERT INTO `web_shop_area` VALUES('2176','容县','','2174','2102,2174','0','2176','','0','0','450921','');
INSERT INTO `web_shop_area` VALUES('2177','陆川县','','2174','2102,2174','0','2177','','0','0','450922','');
INSERT INTO `web_shop_area` VALUES('2178','博白县','','2174','2102,2174','0','2178','','0','0','450923','');
INSERT INTO `web_shop_area` VALUES('2179','兴业县','','2174','2102,2174','0','2179','','0','0','450924','');
INSERT INTO `web_shop_area` VALUES('2180','北流市','','2174','2102,2174','0','2180','','0','0','450981','');
INSERT INTO `web_shop_area` VALUES('2181','百色市','','2102','2102','1','2182,2183,2184,2185,2186,2187,2188,2189,2190,2191,2192,2193','','0','0','451000','baise');
INSERT INTO `web_shop_area` VALUES('2182','右江区','','2181','2102,2181','0','2182','','0','0','451002','');
INSERT INTO `web_shop_area` VALUES('2183','田阳县','','2181','2102,2181','0','2183','','0','0','451021','');
INSERT INTO `web_shop_area` VALUES('2184','田东县','','2181','2102,2181','0','2184','','0','0','451022','');
INSERT INTO `web_shop_area` VALUES('2185','平果县','','2181','2102,2181','0','2185','','0','0','451023','');
INSERT INTO `web_shop_area` VALUES('2186','德保县','','2181','2102,2181','0','2186','','0','0','451024','');
INSERT INTO `web_shop_area` VALUES('2187','靖西县','','2181','2102,2181','0','2187','','0','0','451025','');
INSERT INTO `web_shop_area` VALUES('2188','那坡县','','2181','2102,2181','0','2188','','0','0','451026','');
INSERT INTO `web_shop_area` VALUES('2189','凌云县','','2181','2102,2181','0','2189','','0','0','451027','');
INSERT INTO `web_shop_area` VALUES('2190','乐业县','','2181','2102,2181','0','2190','','0','0','451028','');
INSERT INTO `web_shop_area` VALUES('2191','田林县','','2181','2102,2181','0','2191','','0','0','451029','');
INSERT INTO `web_shop_area` VALUES('2192','西林县','','2181','2102,2181','0','2192','','0','0','451030','');
INSERT INTO `web_shop_area` VALUES('2193','隆林各族自治县','','2181','2102,2181','0','2193','','0','0','451031','');
INSERT INTO `web_shop_area` VALUES('2194','贺州市','','2102','2102','1','2195,2196,2197,2198,2199','','0','0','451100','hezhou');
INSERT INTO `web_shop_area` VALUES('2195','八步区','','2194','2102,2194','0','2195','','0','0','451102','');
INSERT INTO `web_shop_area` VALUES('2196','平桂管理区','','2194','2102,2194','0','2196','','0','0','451119','');
INSERT INTO `web_shop_area` VALUES('2197','昭平县','','2194','2102,2194','0','2197','','0','0','451121','');
INSERT INTO `web_shop_area` VALUES('2198','钟山县','','2194','2102,2194','0','2198','','0','0','451122','');
INSERT INTO `web_shop_area` VALUES('2199','富川瑶族自治县','','2194','2102,2194','0','2199','','0','0','451123','');
INSERT INTO `web_shop_area` VALUES('2200','河池市','','2102','2102','1','2201,2202,2203,2204,2205,2206,2207,2208,2209,2210,2211','','0','0','451200','hechi');
INSERT INTO `web_shop_area` VALUES('2201','金城江区','','2200','2102,2200','0','2201','','0','0','451202','');
INSERT INTO `web_shop_area` VALUES('2202','南丹县','','2200','2102,2200','0','2202','','0','0','451221','');
INSERT INTO `web_shop_area` VALUES('2203','天峨县','','2200','2102,2200','0','2203','','0','0','451222','');
INSERT INTO `web_shop_area` VALUES('2204','凤山县','','2200','2102,2200','0','2204','','0','0','451223','');
INSERT INTO `web_shop_area` VALUES('2205','东兰县','','2200','2102,2200','0','2205','','0','0','451224','');
INSERT INTO `web_shop_area` VALUES('2206','罗城仫佬族自治县','','2200','2102,2200','0','2206','','0','0','451225','');
INSERT INTO `web_shop_area` VALUES('2207','环江毛南族自治县','','2200','2102,2200','0','2207','','0','0','451226','');
INSERT INTO `web_shop_area` VALUES('2208','巴马瑶族自治县','','2200','2102,2200','0','2208','','0','0','451227','');
INSERT INTO `web_shop_area` VALUES('2209','都安瑶族自治县','','2200','2102,2200','0','2209','','0','0','451228','');
INSERT INTO `web_shop_area` VALUES('2210','大化瑶族自治县','','2200','2102,2200','0','2210','','0','0','451229','');
INSERT INTO `web_shop_area` VALUES('2211','宜州市','','2200','2102,2200','0','2211','','0','0','451281','');
INSERT INTO `web_shop_area` VALUES('2212','来宾市','','2102','2102','1','2213,2214,2215,2216,2217,2218','','0','0','451300','laibin');
INSERT INTO `web_shop_area` VALUES('2213','兴宾区','','2212','2102,2212','0','2213','','0','0','451302','');
INSERT INTO `web_shop_area` VALUES('2214','忻城县','','2212','2102,2212','0','2214','','0','0','451321','');
INSERT INTO `web_shop_area` VALUES('2215','象州县','','2212','2102,2212','0','2215','','0','0','451322','');
INSERT INTO `web_shop_area` VALUES('2216','武宣县','','2212','2102,2212','0','2216','','0','0','451323','');
INSERT INTO `web_shop_area` VALUES('2217','金秀瑶族自治县','','2212','2102,2212','0','2217','','0','0','451324','');
INSERT INTO `web_shop_area` VALUES('2218','合山市','','2212','2102,2212','0','2218','','0','0','451381','');
INSERT INTO `web_shop_area` VALUES('2219','崇左市','','2102','2102','1','2220,2221,2222,2223,2224,2225,2226','','0','0','451400','chongzuo');
INSERT INTO `web_shop_area` VALUES('2220','江洲区','','2219','2102,2219','0','2220','','0','0','451402','');
INSERT INTO `web_shop_area` VALUES('2221','扶绥县','','2219','2102,2219','0','2221','','0','0','451421','');
INSERT INTO `web_shop_area` VALUES('2222','宁明县','','2219','2102,2219','0','2222','','0','0','451422','');
INSERT INTO `web_shop_area` VALUES('2223','龙州县','','2219','2102,2219','0','2223','','0','0','451423','');
INSERT INTO `web_shop_area` VALUES('2224','大新县','','2219','2102,2219','0','2224','','0','0','451424','');
INSERT INTO `web_shop_area` VALUES('2225','天等县','','2219','2102,2219','0','2225','','0','0','451425','');
INSERT INTO `web_shop_area` VALUES('2226','凭祥市','','2219','2102,2219','0','2226','','0','0','451481','');
INSERT INTO `web_shop_area` VALUES('2227','海南','','0','0','1','2228,2233,2234,2229,2230,2231,2232,2236,2237,2238,2239,2240,2241,2242,2244,2245,2247,2248,2250,2251','','27','0','460000','hainan');
INSERT INTO `web_shop_area` VALUES('2228','海口市','','2227','2227','1','2229,2230,2231,2232','','0','0','460100','haikou');
INSERT INTO `web_shop_area` VALUES('2229','秀英区','','2228','2227,2228','0','2229','','0','0','460105','');
INSERT INTO `web_shop_area` VALUES('2230','龙华区','','2228','2227,2228','0','2230','','0','0','460106','');
INSERT INTO `web_shop_area` VALUES('2231','琼山区','','2228','2227,2228','0','2231','','0','0','460107','');
INSERT INTO `web_shop_area` VALUES('2232','美兰区','','2228','2227,2228','0','2232','','0','0','460108','');
INSERT INTO `web_shop_area` VALUES('2233','三亚市','','2227','2227','0','2233','','0','0','460200','sanya');
INSERT INTO `web_shop_area` VALUES('2236','琼海市','','2227','2227','0','2236','','0','0','469002','qionghaishi');
INSERT INTO `web_shop_area` VALUES('2237','儋州市','','2227','2227','0','2237','','0','0','469003','chanzhoushi');
INSERT INTO `web_shop_area` VALUES('2238','文昌市','','2227','2227','0','2238','','0','0','469005','wenchangshi');
INSERT INTO `web_shop_area` VALUES('2239','万宁市','','2227','2227','0','2239','','0','0','469006','wanningshi');
INSERT INTO `web_shop_area` VALUES('2240','东方市','','2227','2227','0','2240','','0','0','469007','dongfangshi');
INSERT INTO `web_shop_area` VALUES('2241','定安县','','2227','2227','0','2241','','0','0','469021','dinganxian');
INSERT INTO `web_shop_area` VALUES('2242','屯昌县','','2227','2227','0','2242','','0','0','469022','tunchangxian');
INSERT INTO `web_shop_area` VALUES('2244','临高县','','2227','2227','0','2244','','0','0','469024','lingaoxian');
INSERT INTO `web_shop_area` VALUES('2245','白沙县','','2227','2227','0','2245','','0','0','469025','baishaxian');
INSERT INTO `web_shop_area` VALUES('2247','乐东县','','2227','2227','0','2247','','0','0','469027','ledongxian');
INSERT INTO `web_shop_area` VALUES('2248','陵水县','','2227','2227','0','2248','','0','0','469028','lingshuixian');
INSERT INTO `web_shop_area` VALUES('2250','琼中县','','2227','2227','0','2250','','0','0','469030','qiongzhongxian');
INSERT INTO `web_shop_area` VALUES('2251','西南中岛','','2227','2227','0','2251','','0','0','469031','xinanzhongdao');
INSERT INTO `web_shop_area` VALUES('2254','重庆','','0','0','1','2255,2256,2257,2258,2259,2260,2261,2262,2263,2264,2265,2266,2267,2268,2269,2270,2271,2272,2273,2274,2275,2276,2277,2278,2279,2280,2281,2282,2283,2284,2285,2286,2287,2288,2289,2290,2291,2292,2293,2294,2295','','4','0','500000','chongqing');
INSERT INTO `web_shop_area` VALUES('2255','重庆市','','2254','2254','1','2256,2257,2258,2259,2260,2261,2262,2263,2264,2265,2266,2267,2268,2269,2270,2271,2272,2273,2274,2275,2276,2277,2278,2279,2280,2281,2282,2283,2284,2285,2286,2287,2288,2289,2290,2291,2292,2293,2294,2295','','0','0','500100','chongqingshiqu');
INSERT INTO `web_shop_area` VALUES('2256','万州区','','2255','2254,2255','0','2256','','0','0','500101','wanzhouqu');
INSERT INTO `web_shop_area` VALUES('2257','涪陵区','','2255','2254,2255','0','2257','','0','0','500102','fulingqu');
INSERT INTO `web_shop_area` VALUES('2258','渝中区','','2255','2254,2255','0','2258','','0','0','500103','yuzhongqu');
INSERT INTO `web_shop_area` VALUES('2259','大渡口','','2255','2254,2255','0','2259','','0','0','500104','dadukouqu');
INSERT INTO `web_shop_area` VALUES('2260','江北区','','2255','2254,2255','0','2260','','0','0','500105','jiangbeiqu');
INSERT INTO `web_shop_area` VALUES('2261','沙坪坝','','2255','2254,2255','0','2261','','0','0','500106','shapingbaqu');
INSERT INTO `web_shop_area` VALUES('2262','九龙坡','','2255','2254,2255','0','2262','','0','0','500107','jiulongpoqu');
INSERT INTO `web_shop_area` VALUES('2263','南岸区','','2255','2254,2255','0','2263','','0','0','500108','nananqu');
INSERT INTO `web_shop_area` VALUES('2264','北碚区','','2255','2254,2255','0','2264','','0','0','500109','beibeiqu');
INSERT INTO `web_shop_area` VALUES('2265','万盛区','','2255','2254,2255','0','2265','','0','0','500110','wanshengqu');
INSERT INTO `web_shop_area` VALUES('2266','双桥区','','2255','2254,2255','0','2266','','0','0','500111','shuangqiaoqu');
INSERT INTO `web_shop_area` VALUES('2267','渝北区','','2255','2254,2255','0','2267','','0','0','500112','yubeiqu');
INSERT INTO `web_shop_area` VALUES('2268','巴南区','','2255','2254,2255','0','2268','','0','0','500113','bananqu');
INSERT INTO `web_shop_area` VALUES('2269','黔江区','','2255','2254,2255','0','2269','','0','0','500114','qianjiangqu');
INSERT INTO `web_shop_area` VALUES('2270','长寿区','','2255','2254,2255','0','2270','','0','0','500115','changshouqu');
INSERT INTO `web_shop_area` VALUES('2271','江津区','','2255','2254,2255','0','2271','','0','0','500116','jiangjinqu');
INSERT INTO `web_shop_area` VALUES('2272','合川区','','2255','2254,2255','0','2272','','0','0','500117','hechuanqu');
INSERT INTO `web_shop_area` VALUES('2273','永川区','','2255','2254,2255','0','2273','','0','0','500118','yongchuanqu');
INSERT INTO `web_shop_area` VALUES('2274','南川区','','2255','2254,2255','0','2274','','0','0','500119','nanchuanqu');
INSERT INTO `web_shop_area` VALUES('2275','綦江县','','2255','2254,2255','0','2275','','0','0','500222','qijiangxian');
INSERT INTO `web_shop_area` VALUES('2276','潼南县','','2255','2254,2255','0','2276','','0','0','500223','tongnanxian');
INSERT INTO `web_shop_area` VALUES('2277','铜梁县','','2255','2254,2255','0','2277','','0','0','500224','tongliangxian');
INSERT INTO `web_shop_area` VALUES('2278','大足县','','2255','2254,2255','0','2278','','0','0','500225','dazuxian');
INSERT INTO `web_shop_area` VALUES('2279','荣昌县','','2255','2254,2255','0','2279','','0','0','500226','rongchangxian');
INSERT INTO `web_shop_area` VALUES('2280','璧山县','','2255','2254,2255','0','2280','','0','0','500227','bishanxian');
INSERT INTO `web_shop_area` VALUES('2281','梁平县','','2255','2254,2255','0','2281','','0','0','500228','liangpingxian');
INSERT INTO `web_shop_area` VALUES('2282','城口县','','2255','2254,2255','0','2282','','0','0','500229','chengkouxian');
INSERT INTO `web_shop_area` VALUES('2283','丰都县','','2255','2254,2255','0','2283','','0','0','500230','fengduxian');
INSERT INTO `web_shop_area` VALUES('2284','垫江县','','2255','2254,2255','0','2284','','0','0','500231','dianjiangxian');
INSERT INTO `web_shop_area` VALUES('2285','武隆县','','2255','2254,2255','0','2285','','0','0','500232','wulongxian');
INSERT INTO `web_shop_area` VALUES('2286','忠县','','2255','2254,2255','0','2286','','0','0','500233','zhongxian');
INSERT INTO `web_shop_area` VALUES('2287','开县','','2255','2254,2255','0','2287','','0','0','500234','kaixian');
INSERT INTO `web_shop_area` VALUES('2288','云阳县','','2255','2254,2255','0','2288','','0','0','500235','yunyangxian');
INSERT INTO `web_shop_area` VALUES('2289','奉节县','','2255','2254,2255','0','2289','','0','0','500236','fengjiexian');
INSERT INTO `web_shop_area` VALUES('2290','巫山县','','2255','2254,2255','0','2290','','0','0','500237','wushanxian');
INSERT INTO `web_shop_area` VALUES('2291','巫溪县','','2255','2254,2255','0','2291','','0','0','500238','wuxixian');
INSERT INTO `web_shop_area` VALUES('2292','石柱','','2255','2254,2255','0','2292','','0','0','500240','shizhu');
INSERT INTO `web_shop_area` VALUES('2293','秀山','','2255','2254,2255','0','2293','','0','0','500241','xiushan');
INSERT INTO `web_shop_area` VALUES('2294','酉阳','','2255','2254,2255','0','2294','','0','0','500242','youyang');
INSERT INTO `web_shop_area` VALUES('2295','彭水','','2255','2254,2255','0','2295','','0','0','500243','pengshui');
INSERT INTO `web_shop_area` VALUES('2296','四川','','0','0','1','2297,2317,2324,2330,2338,2345,2355,2363,2369,2375,2387,2397,2404,2415,2421,2429,2438,2443,2448,2462,2481,2298,2299,2300,2301,2302,2303,2304,2305,2306,2307,2308,2309,2310,2311,2312,2313,2314,2315,2316','','16','0','510000','sichuan');
INSERT INTO `web_shop_area` VALUES('2297','成都市','','2296','2296','1','2298,2299,2300,2301,2302,2303,2304,2305,2306,2307,2308,2309,2310,2311,2312,2313,2314,2315,2316','','0','0','510100','chengdu');
INSERT INTO `web_shop_area` VALUES('2298','锦江区','','2297','2296,2297','0','2298','','0','0','510104','');
INSERT INTO `web_shop_area` VALUES('2299','青羊区','','2297','2296,2297','0','2299','','0','0','510105','');
INSERT INTO `web_shop_area` VALUES('2300','金牛区','','2297','2296,2297','0','2300','','0','0','510106','');
INSERT INTO `web_shop_area` VALUES('2301','武侯区','','2297','2296,2297','0','2301','','0','0','510107','');
INSERT INTO `web_shop_area` VALUES('2302','成华区','','2297','2296,2297','0','2302','','0','0','510108','');
INSERT INTO `web_shop_area` VALUES('2303','龙泉驿区','','2297','2296,2297','0','2303','','0','0','510112','');
INSERT INTO `web_shop_area` VALUES('2304','青白江区','','2297','2296,2297','0','2304','','0','0','510113','');
INSERT INTO `web_shop_area` VALUES('2305','新都区','','2297','2296,2297','0','2305','','0','0','510114','');
INSERT INTO `web_shop_area` VALUES('2306','温江区','','2297','2296,2297','0','2306','','0','0','510115','');
INSERT INTO `web_shop_area` VALUES('2307','金堂县','','2297','2296,2297','0','2307','','0','0','510121','');
INSERT INTO `web_shop_area` VALUES('2308','双流县','','2297','2296,2297','0','2308','','0','0','510122','');
INSERT INTO `web_shop_area` VALUES('2309','郫县','','2297','2296,2297','0','2309','','0','0','510124','');
INSERT INTO `web_shop_area` VALUES('2310','大邑县','','2297','2296,2297','0','2310','','0','0','510129','');
INSERT INTO `web_shop_area` VALUES('2311','蒲江县','','2297','2296,2297','0','2311','','0','0','510131','');
INSERT INTO `web_shop_area` VALUES('2312','新津县','','2297','2296,2297','0','2312','','0','0','510132','');
INSERT INTO `web_shop_area` VALUES('2313','都江堰市','','2297','2296,2297','0','2313','','0','0','510181','');
INSERT INTO `web_shop_area` VALUES('2314','彭州市','','2297','2296,2297','0','2314','','0','0','510182','');
INSERT INTO `web_shop_area` VALUES('2315','邛崃市','','2297','2296,2297','0','2315','','0','0','510183','');
INSERT INTO `web_shop_area` VALUES('2316','崇州市','','2297','2296,2297','0','2316','','0','0','510184','');
INSERT INTO `web_shop_area` VALUES('2317','自贡市','','2296','2296','1','2318,2319,2320,2321,2322,2323','','0','0','510300','zigong');
INSERT INTO `web_shop_area` VALUES('2318','自流井区','','2317','2296,2317','0','2318','','0','0','510302','');
INSERT INTO `web_shop_area` VALUES('2319','贡井区','','2317','2296,2317','0','2319','','0','0','510303','');
INSERT INTO `web_shop_area` VALUES('2320','大安区','','2317','2296,2317','0','2320','','0','0','510304','');
INSERT INTO `web_shop_area` VALUES('2321','沿滩区','','2317','2296,2317','0','2321','','0','0','510311','');
INSERT INTO `web_shop_area` VALUES('2322','荣县','','2317','2296,2317','0','2322','','0','0','510321','');
INSERT INTO `web_shop_area` VALUES('2323','富顺县','','2317','2296,2317','0','2323','','0','0','510322','');
INSERT INTO `web_shop_area` VALUES('2324','攀枝花','','2296','2296','1','2325,2326,2327,2328,2329','','0','0','510400','panzhihua');
INSERT INTO `web_shop_area` VALUES('2325','东区','','2324','2296,2324','0','2325','','0','0','510402','');
INSERT INTO `web_shop_area` VALUES('2326','西区','','2324','2296,2324','0','2326','','0','0','510403','');
INSERT INTO `web_shop_area` VALUES('2327','仁和区','','2324','2296,2324','0','2327','','0','0','510411','');
INSERT INTO `web_shop_area` VALUES('2328','米易县','','2324','2296,2324','0','2328','','0','0','510421','');
INSERT INTO `web_shop_area` VALUES('2329','盐边县','','2324','2296,2324','0','2329','','0','0','510422','');
INSERT INTO `web_shop_area` VALUES('2330','泸州市','','2296','2296','1','2331,2332,2333,2334,2335,2336,2337','','0','0','510500','luzhou');
INSERT INTO `web_shop_area` VALUES('2331','江阳区','','2330','2296,2330','0','2331','','0','0','510502','');
INSERT INTO `web_shop_area` VALUES('2332','纳溪区','','2330','2296,2330','0','2332','','0','0','510503','');
INSERT INTO `web_shop_area` VALUES('2333','龙马潭区','','2330','2296,2330','0','2333','','0','0','510504','');
INSERT INTO `web_shop_area` VALUES('2334','泸县','','2330','2296,2330','0','2334','','0','0','510521','');
INSERT INTO `web_shop_area` VALUES('2335','合江县','','2330','2296,2330','0','2335','','0','0','510522','');
INSERT INTO `web_shop_area` VALUES('2336','叙永县','','2330','2296,2330','0','2336','','0','0','510524','');
INSERT INTO `web_shop_area` VALUES('2337','古蔺县','','2330','2296,2330','0','2337','','0','0','510525','');
INSERT INTO `web_shop_area` VALUES('2338','德阳市','','2296','2296','1','2339,2340,2341,2342,2343,2344','','0','0','510600','deyang');
INSERT INTO `web_shop_area` VALUES('2339','旌阳区','','2338','2296,2338','0','2339','','0','0','510603','');
INSERT INTO `web_shop_area` VALUES('2340','中江县','','2338','2296,2338','0','2340','','0','0','510623','');
INSERT INTO `web_shop_area` VALUES('2341','罗江县','','2338','2296,2338','0','2341','','0','0','510626','');
INSERT INTO `web_shop_area` VALUES('2342','广汉市','','2338','2296,2338','0','2342','','0','0','510681','');
INSERT INTO `web_shop_area` VALUES('2343','什邡市','','2338','2296,2338','0','2343','','0','0','510682','');
INSERT INTO `web_shop_area` VALUES('2344','绵竹市','','2338','2296,2338','0','2344','','0','0','510683','');
INSERT INTO `web_shop_area` VALUES('2345','绵阳市','','2296','2296','1','2346,2347,2348,2349,2350,2351,2352,2353,2354','','0','0','510700','mianyang');
INSERT INTO `web_shop_area` VALUES('2346','涪城区','','2345','2296,2345','0','2346','','0','0','510703','');
INSERT INTO `web_shop_area` VALUES('2347','游仙区','','2345','2296,2345','0','2347','','0','0','510704','');
INSERT INTO `web_shop_area` VALUES('2348','三台县','','2345','2296,2345','0','2348','','0','0','510722','');
INSERT INTO `web_shop_area` VALUES('2349','盐亭县','','2345','2296,2345','0','2349','','0','0','510723','');
INSERT INTO `web_shop_area` VALUES('2350','安县','','2345','2296,2345','0','2350','','0','0','510724','');
INSERT INTO `web_shop_area` VALUES('2351','梓潼县','','2345','2296,2345','0','2351','','0','0','510725','');
INSERT INTO `web_shop_area` VALUES('2352','北川羌族自治县','','2345','2296,2345','0','2352','','0','0','510726','');
INSERT INTO `web_shop_area` VALUES('2353','平武县','','2345','2296,2345','0','2353','','0','0','510727','');
INSERT INTO `web_shop_area` VALUES('2354','江油市','','2345','2296,2345','0','2354','','0','0','510781','');
INSERT INTO `web_shop_area` VALUES('2355','广元市','','2296','2296','1','2356,2357,2358,2359,2360,2361,2362','','0','0','510800','guangyuan');
INSERT INTO `web_shop_area` VALUES('2356','利州区','','2355','2296,2355','0','2356','','0','0','510802','');
INSERT INTO `web_shop_area` VALUES('2357','元坝区','','2355','2296,2355','0','2357','','0','0','510811','');
INSERT INTO `web_shop_area` VALUES('2358','朝天区','','2355','2296,2355','0','2358','','0','0','510812','');
INSERT INTO `web_shop_area` VALUES('2359','旺苍县','','2355','2296,2355','0','2359','','0','0','510821','');
INSERT INTO `web_shop_area` VALUES('2360','青川县','','2355','2296,2355','0','2360','','0','0','510822','');
INSERT INTO `web_shop_area` VALUES('2361','剑阁县','','2355','2296,2355','0','2361','','0','0','510823','');
INSERT INTO `web_shop_area` VALUES('2362','苍溪县','','2355','2296,2355','0','2362','','0','0','510824','');
INSERT INTO `web_shop_area` VALUES('2363','遂宁市','','2296','2296','1','2364,2365,2366,2367,2368','','0','0','510900','suining');
INSERT INTO `web_shop_area` VALUES('2364','船山区','','2363','2296,2363','0','2364','','0','0','510903','');
INSERT INTO `web_shop_area` VALUES('2365','安居区','','2363','2296,2363','0','2365','','0','0','510904','');
INSERT INTO `web_shop_area` VALUES('2366','蓬溪县','','2363','2296,2363','0','2366','','0','0','510921','');
INSERT INTO `web_shop_area` VALUES('2367','射洪县','','2363','2296,2363','0','2367','','0','0','510922','');
INSERT INTO `web_shop_area` VALUES('2368','大英县','','2363','2296,2363','0','2368','','0','0','510923','');
INSERT INTO `web_shop_area` VALUES('2369','内江市','','2296','2296','1','2370,2371,2372,2373,2374','','0','0','511000','najiang');
INSERT INTO `web_shop_area` VALUES('2370','市中区','','2369','2296,2369','0','2370','','0','0','511002','');
INSERT INTO `web_shop_area` VALUES('2371','东兴区','','2369','2296,2369','0','2371','','0','0','511011','');
INSERT INTO `web_shop_area` VALUES('2372','威远县','','2369','2296,2369','0','2372','','0','0','511024','');
INSERT INTO `web_shop_area` VALUES('2373','资中县','','2369','2296,2369','0','2373','','0','0','511025','');
INSERT INTO `web_shop_area` VALUES('2374','隆昌县','','2369','2296,2369','0','2374','','0','0','511028','');
INSERT INTO `web_shop_area` VALUES('2375','乐山市','','2296','2296','1','2376,2377,2378,2379,2380,2381,2382,2383,2384,2385,2386','','0','0','511100','leshan');
INSERT INTO `web_shop_area` VALUES('2376','市中区','','2375','2296,2375','0','2376','','0','0','511102','');
INSERT INTO `web_shop_area` VALUES('2377','沙湾区','','2375','2296,2375','0','2377','','0','0','511111','');
INSERT INTO `web_shop_area` VALUES('2378','五通桥区','','2375','2296,2375','0','2378','','0','0','511112','');
INSERT INTO `web_shop_area` VALUES('2379','金口河区','','2375','2296,2375','0','2379','','0','0','511113','');
INSERT INTO `web_shop_area` VALUES('2380','犍为县','','2375','2296,2375','0','2380','','0','0','511123','');
INSERT INTO `web_shop_area` VALUES('2381','井研县','','2375','2296,2375','0','2381','','0','0','511124','');
INSERT INTO `web_shop_area` VALUES('2382','夹江县','','2375','2296,2375','0','2382','','0','0','511126','');
INSERT INTO `web_shop_area` VALUES('2383','沐川县','','2375','2296,2375','0','2383','','0','0','511129','');
INSERT INTO `web_shop_area` VALUES('2384','峨边彝族自治县','','2375','2296,2375','0','2384','','0','0','511132','');
INSERT INTO `web_shop_area` VALUES('2385','马边彝族自治县','','2375','2296,2375','0','2385','','0','0','511133','');
INSERT INTO `web_shop_area` VALUES('2386','峨眉山市','','2375','2296,2375','0','2386','','0','0','511181','');
INSERT INTO `web_shop_area` VALUES('2387','南充市','','2296','2296','1','2388,2389,2390,2391,2392,2393,2394,2395,2396','','0','0','511300','nanchong');
INSERT INTO `web_shop_area` VALUES('2388','顺庆区','','2387','2296,2387','0','2388','','0','0','511302','');
INSERT INTO `web_shop_area` VALUES('2389','高坪区','','2387','2296,2387','0','2389','','0','0','511303','');
INSERT INTO `web_shop_area` VALUES('2390','嘉陵区','','2387','2296,2387','0','2390','','0','0','511304','');
INSERT INTO `web_shop_area` VALUES('2391','南部县','','2387','2296,2387','0','2391','','0','0','511321','');
INSERT INTO `web_shop_area` VALUES('2392','营山县','','2387','2296,2387','0','2392','','0','0','511322','');
INSERT INTO `web_shop_area` VALUES('2393','蓬安县','','2387','2296,2387','0','2393','','0','0','511323','');
INSERT INTO `web_shop_area` VALUES('2394','仪陇县','','2387','2296,2387','0','2394','','0','0','511324','');
INSERT INTO `web_shop_area` VALUES('2395','西充县','','2387','2296,2387','0','2395','','0','0','511325','');
INSERT INTO `web_shop_area` VALUES('2396','阆中市','','2387','2296,2387','0','2396','','0','0','511381','');
INSERT INTO `web_shop_area` VALUES('2397','眉山市','','2296','2296','1','2398,2399,2400,2401,2402,2403','','0','0','511400','meishan');
INSERT INTO `web_shop_area` VALUES('2398','东坡区','','2397','2296,2397','0','2398','','0','0','511402','');
INSERT INTO `web_shop_area` VALUES('2399','仁寿县','','2397','2296,2397','0','2399','','0','0','511421','');
INSERT INTO `web_shop_area` VALUES('2400','彭山县','','2397','2296,2397','0','2400','','0','0','511422','');
INSERT INTO `web_shop_area` VALUES('2401','洪雅县','','2397','2296,2397','0','2401','','0','0','511423','');
INSERT INTO `web_shop_area` VALUES('2402','丹棱县','','2397','2296,2397','0','2402','','0','0','511424','');
INSERT INTO `web_shop_area` VALUES('2403','青神县','','2397','2296,2397','0','2403','','0','0','511425','');
INSERT INTO `web_shop_area` VALUES('2404','宜宾市','','2296','2296','1','2405,2406,2407,2408,2409,2410,2411,2412,2413,2414','','0','0','511500','yibin');
INSERT INTO `web_shop_area` VALUES('2405','翠屏区','','2404','2296,2404','0','2405','','0','0','511502','');
INSERT INTO `web_shop_area` VALUES('2406','宜宾县','','2404','2296,2404','0','2406','','0','0','511521','');
INSERT INTO `web_shop_area` VALUES('2407','南溪县','','2404','2296,2404','0','2407','','0','0','511522','');
INSERT INTO `web_shop_area` VALUES('2408','江安县','','2404','2296,2404','0','2408','','0','0','511523','');
INSERT INTO `web_shop_area` VALUES('2409','长宁县','','2404','2296,2404','0','2409','','0','0','511524','');
INSERT INTO `web_shop_area` VALUES('2410','高县','','2404','2296,2404','0','2410','','0','0','511525','');
INSERT INTO `web_shop_area` VALUES('2411','珙县','','2404','2296,2404','0','2411','','0','0','511526','');
INSERT INTO `web_shop_area` VALUES('2412','筠连县','','2404','2296,2404','0','2412','','0','0','511527','');
INSERT INTO `web_shop_area` VALUES('2413','兴文县','','2404','2296,2404','0','2413','','0','0','511528','');
INSERT INTO `web_shop_area` VALUES('2414','屏山县','','2404','2296,2404','0','2414','','0','0','511529','');
INSERT INTO `web_shop_area` VALUES('2415','广安市','','2296','2296','1','2416,2417,2418,2419,2420','','0','0','511600','guangan');
INSERT INTO `web_shop_area` VALUES('2416','广安区','','2415','2296,2415','0','2416','','0','0','511602','');
INSERT INTO `web_shop_area` VALUES('2417','岳池县','','2415','2296,2415','0','2417','','0','0','511621','');
INSERT INTO `web_shop_area` VALUES('2418','武胜县','','2415','2296,2415','0','2418','','0','0','511622','');
INSERT INTO `web_shop_area` VALUES('2419','邻水县','','2415','2296,2415','0','2419','','0','0','511623','');
INSERT INTO `web_shop_area` VALUES('2420','华蓥市','','2415','2296,2415','0','2420','','0','0','511681','');
INSERT INTO `web_shop_area` VALUES('2421','达州市','','2296','2296','1','2422,2423,2424,2425,2426,2427,2428','','0','0','511700','dazhou');
INSERT INTO `web_shop_area` VALUES('2422','通川区','','2421','2296,2421','0','2422','','0','0','511702','');
INSERT INTO `web_shop_area` VALUES('2423','达县','','2421','2296,2421','0','2423','','0','0','511721','');
INSERT INTO `web_shop_area` VALUES('2424','宣汉县','','2421','2296,2421','0','2424','','0','0','511722','');
INSERT INTO `web_shop_area` VALUES('2425','开江县','','2421','2296,2421','0','2425','','0','0','511723','');
INSERT INTO `web_shop_area` VALUES('2426','大竹县','','2421','2296,2421','0','2426','','0','0','511724','');
INSERT INTO `web_shop_area` VALUES('2427','渠县','','2421','2296,2421','0','2427','','0','0','511725','');
INSERT INTO `web_shop_area` VALUES('2428','万源市','','2421','2296,2421','0','2428','','0','0','511781','');
INSERT INTO `web_shop_area` VALUES('2429','雅安市','','2296','2296','1','2430,2431,2432,2433,2434,2435,2436,2437','','0','0','511800','yaan');
INSERT INTO `web_shop_area` VALUES('2430','雨城区','','2429','2296,2429','0','2430','','0','0','511802','');
INSERT INTO `web_shop_area` VALUES('2431','名山县','','2429','2296,2429','0','2431','','0','0','511821','');
INSERT INTO `web_shop_area` VALUES('2432','荥经县','','2429','2296,2429','0','2432','','0','0','511822','');
INSERT INTO `web_shop_area` VALUES('2433','汉源县','','2429','2296,2429','0','2433','','0','0','511823','');
INSERT INTO `web_shop_area` VALUES('2434','石棉县','','2429','2296,2429','0','2434','','0','0','511824','');
INSERT INTO `web_shop_area` VALUES('2435','天全县','','2429','2296,2429','0','2435','','0','0','511825','');
INSERT INTO `web_shop_area` VALUES('2436','芦山县','','2429','2296,2429','0','2436','','0','0','511826','');
INSERT INTO `web_shop_area` VALUES('2437','宝兴县','','2429','2296,2429','0','2437','','0','0','511827','');
INSERT INTO `web_shop_area` VALUES('2438','巴中市','','2296','2296','1','2439,2440,2441,2442','','0','0','511900','bazhong');
INSERT INTO `web_shop_area` VALUES('2439','巴州区','','2438','2296,2438','0','2439','','0','0','511902','');
INSERT INTO `web_shop_area` VALUES('2440','通江县','','2438','2296,2438','0','2440','','0','0','511921','');
INSERT INTO `web_shop_area` VALUES('2441','南江县','','2438','2296,2438','0','2441','','0','0','511922','');
INSERT INTO `web_shop_area` VALUES('2442','平昌县','','2438','2296,2438','0','2442','','0','0','511923','');
INSERT INTO `web_shop_area` VALUES('2443','资阳市','','2296','2296','1','2444,2445,2446,2447','','0','0','512000','ziyang');
INSERT INTO `web_shop_area` VALUES('2444','雁江区','','2443','2296,2443','0','2444','','0','0','512002','');
INSERT INTO `web_shop_area` VALUES('2445','安岳县','','2443','2296,2443','0','2445','','0','0','512021','');
INSERT INTO `web_shop_area` VALUES('2446','乐至县','','2443','2296,2443','0','2446','','0','0','512022','');
INSERT INTO `web_shop_area` VALUES('2447','简阳市','','2443','2296,2443','0','2447','','0','0','512081','');
INSERT INTO `web_shop_area` VALUES('2448','阿坝','','2296','2296','1','2449,2450,2451,2452,2453,2454,2455,2456,2457,2458,2459,2460,2461','','0','0','513200','aba');
INSERT INTO `web_shop_area` VALUES('2449','汶川县','','2448','2296,2448','0','2449','','0','0','513221','');
INSERT INTO `web_shop_area` VALUES('2450','理县','','2448','2296,2448','0','2450','','0','0','513222','');
INSERT INTO `web_shop_area` VALUES('2451','茂县','','2448','2296,2448','0','2451','','0','0','513223','');
INSERT INTO `web_shop_area` VALUES('2452','松潘县','','2448','2296,2448','0','2452','','0','0','513224','');
INSERT INTO `web_shop_area` VALUES('2453','九寨沟县','','2448','2296,2448','0','2453','','0','0','513225','');
INSERT INTO `web_shop_area` VALUES('2454','金川县','','2448','2296,2448','0','2454','','0','0','513226','');
INSERT INTO `web_shop_area` VALUES('2455','小金县','','2448','2296,2448','0','2455','','0','0','513227','');
INSERT INTO `web_shop_area` VALUES('2456','黑水县','','2448','2296,2448','0','2456','','0','0','513228','');
INSERT INTO `web_shop_area` VALUES('2457','马尔康县','','2448','2296,2448','0','2457','','0','0','513229','');
INSERT INTO `web_shop_area` VALUES('2458','壤塘县','','2448','2296,2448','0','2458','','0','0','513230','');
INSERT INTO `web_shop_area` VALUES('2459','阿坝县','','2448','2296,2448','0','2459','','0','0','513231','');
INSERT INTO `web_shop_area` VALUES('2460','若尔盖县','','2448','2296,2448','0','2460','','0','0','513232','');
INSERT INTO `web_shop_area` VALUES('2461','红原县','','2448','2296,2448','0','2461','','0','0','513233','');
INSERT INTO `web_shop_area` VALUES('2462','甘孜','','2296','2296','1','2463,2464,2465,2466,2467,2468,2469,2470,2471,2472,2473,2474,2475,2476,2477,2478,2479,2480','','0','0','513300','ganzi');
INSERT INTO `web_shop_area` VALUES('2463','康定县','','2462','2296,2462','0','2463','','0','0','513321','');
INSERT INTO `web_shop_area` VALUES('2464','泸定县','','2462','2296,2462','0','2464','','0','0','513322','');
INSERT INTO `web_shop_area` VALUES('2465','丹巴县','','2462','2296,2462','0','2465','','0','0','513323','');
INSERT INTO `web_shop_area` VALUES('2466','九龙县','','2462','2296,2462','0','2466','','0','0','513324','');
INSERT INTO `web_shop_area` VALUES('2467','雅江县','','2462','2296,2462','0','2467','','0','0','513325','');
INSERT INTO `web_shop_area` VALUES('2468','道孚县','','2462','2296,2462','0','2468','','0','0','513326','');
INSERT INTO `web_shop_area` VALUES('2469','炉霍县','','2462','2296,2462','0','2469','','0','0','513327','');
INSERT INTO `web_shop_area` VALUES('2470','甘孜县','','2462','2296,2462','0','2470','','0','0','513328','');
INSERT INTO `web_shop_area` VALUES('2471','新龙县','','2462','2296,2462','0','2471','','0','0','513329','');
INSERT INTO `web_shop_area` VALUES('2472','德格县','','2462','2296,2462','0','2472','','0','0','513330','');
INSERT INTO `web_shop_area` VALUES('2473','白玉县','','2462','2296,2462','0','2473','','0','0','513331','');
INSERT INTO `web_shop_area` VALUES('2474','石渠县','','2462','2296,2462','0','2474','','0','0','513332','');
INSERT INTO `web_shop_area` VALUES('2475','色达县','','2462','2296,2462','0','2475','','0','0','513333','');
INSERT INTO `web_shop_area` VALUES('2476','理塘县','','2462','2296,2462','0','2476','','0','0','513334','');
INSERT INTO `web_shop_area` VALUES('2477','巴塘县','','2462','2296,2462','0','2477','','0','0','513335','');
INSERT INTO `web_shop_area` VALUES('2478','乡城县','','2462','2296,2462','0','2478','','0','0','513336','');
INSERT INTO `web_shop_area` VALUES('2479','稻城县','','2462','2296,2462','0','2479','','0','0','513337','');
INSERT INTO `web_shop_area` VALUES('2480','得荣县','','2462','2296,2462','0','2480','','0','0','513338','');
INSERT INTO `web_shop_area` VALUES('2481','凉山','','2296','2296','1','2482,2483,2484,2485,2486,2487,2488,2489,2490,2491,2492,2493,2494,2495,2496,2497,2498','','0','0','513400','liangshan');
INSERT INTO `web_shop_area` VALUES('2482','西昌市','','2481','2296,2481','0','2482','','0','0','513401','');
INSERT INTO `web_shop_area` VALUES('2483','木里藏族自治县','','2481','2296,2481','0','2483','','0','0','513422','');
INSERT INTO `web_shop_area` VALUES('2484','盐源县','','2481','2296,2481','0','2484','','0','0','513423','');
INSERT INTO `web_shop_area` VALUES('2485','德昌县','','2481','2296,2481','0','2485','','0','0','513424','');
INSERT INTO `web_shop_area` VALUES('2486','会理县','','2481','2296,2481','0','2486','','0','0','513425','');
INSERT INTO `web_shop_area` VALUES('2487','会东县','','2481','2296,2481','0','2487','','0','0','513426','');
INSERT INTO `web_shop_area` VALUES('2488','宁南县','','2481','2296,2481','0','2488','','0','0','513427','');
INSERT INTO `web_shop_area` VALUES('2489','普格县','','2481','2296,2481','0','2489','','0','0','513428','');
INSERT INTO `web_shop_area` VALUES('2490','布拖县','','2481','2296,2481','0','2490','','0','0','513429','');
INSERT INTO `web_shop_area` VALUES('2491','金阳县','','2481','2296,2481','0','2491','','0','0','513430','');
INSERT INTO `web_shop_area` VALUES('2492','昭觉县','','2481','2296,2481','0','2492','','0','0','513431','');
INSERT INTO `web_shop_area` VALUES('2493','喜德县','','2481','2296,2481','0','2493','','0','0','513432','');
INSERT INTO `web_shop_area` VALUES('2494','冕宁县','','2481','2296,2481','0','2494','','0','0','513433','');
INSERT INTO `web_shop_area` VALUES('2495','越西县','','2481','2296,2481','0','2495','','0','0','513434','');
INSERT INTO `web_shop_area` VALUES('2496','甘洛县','','2481','2296,2481','0','2496','','0','0','513435','');
INSERT INTO `web_shop_area` VALUES('2497','美姑县','','2481','2296,2481','0','2497','','0','0','513436','');
INSERT INTO `web_shop_area` VALUES('2498','雷波县','','2481','2296,2481','0','2498','','0','0','513437','');
INSERT INTO `web_shop_area` VALUES('2499','贵州','','0','0','1','2500,2511,2516,2531,2538,2549,2558,2567,2584,2501,2502,2503,2504,2505,2506,2507,2508,2509,2510','','23','0','520000','guizhou');
INSERT INTO `web_shop_area` VALUES('2500','贵阳市','','2499','2499','1','2501,2502,2503,2504,2505,2506,2507,2508,2509,2510','','0','0','520100','guiyang');
INSERT INTO `web_shop_area` VALUES('2501','南明区','','2500','2499,2500','0','2501','','0','0','520102','');
INSERT INTO `web_shop_area` VALUES('2502','云岩区','','2500','2499,2500','0','2502','','0','0','520103','');
INSERT INTO `web_shop_area` VALUES('2503','花溪区','','2500','2499,2500','0','2503','','0','0','520111','');
INSERT INTO `web_shop_area` VALUES('2504','乌当区','','2500','2499,2500','0','2504','','0','0','520112','');
INSERT INTO `web_shop_area` VALUES('2505','白云区','','2500','2499,2500','0','2505','','0','0','520113','');
INSERT INTO `web_shop_area` VALUES('2506','小河区','','2500','2499,2500','0','2506','','0','0','520114','');
INSERT INTO `web_shop_area` VALUES('2507','开阳县','','2500','2499,2500','0','2507','','0','0','520121','');
INSERT INTO `web_shop_area` VALUES('2508','息烽县','','2500','2499,2500','0','2508','','0','0','520122','');
INSERT INTO `web_shop_area` VALUES('2509','修文县','','2500','2499,2500','0','2509','','0','0','520123','');
INSERT INTO `web_shop_area` VALUES('2510','清镇市','','2500','2499,2500','0','2510','','0','0','520181','');
INSERT INTO `web_shop_area` VALUES('2511','六盘水','','2499','2499','1','2512,2513,2514,2515','','0','0','520200','liupanshui');
INSERT INTO `web_shop_area` VALUES('2512','钟山区','','2511','2499,2511','0','2512','','0','0','520201','');
INSERT INTO `web_shop_area` VALUES('2513','六枝特区','','2511','2499,2511','0','2513','','0','0','520203','');
INSERT INTO `web_shop_area` VALUES('2514','水城县','','2511','2499,2511','0','2514','','0','0','520221','');
INSERT INTO `web_shop_area` VALUES('2515','盘县','','2511','2499,2511','0','2515','','0','0','520222','');
INSERT INTO `web_shop_area` VALUES('2516','遵义市','','2499','2499','1','2517,2518,2519,2520,2521,2522,2523,2524,2525,2526,2527,2528,2529,2530','','0','0','520300','zunyi');
INSERT INTO `web_shop_area` VALUES('2517','红花岗区','','2516','2499,2516','0','2517','','0','0','520302','');
INSERT INTO `web_shop_area` VALUES('2518','汇川区','','2516','2499,2516','0','2518','','0','0','520303','');
INSERT INTO `web_shop_area` VALUES('2519','遵义县','','2516','2499,2516','0','2519','','0','0','520321','');
INSERT INTO `web_shop_area` VALUES('2520','桐梓县','','2516','2499,2516','0','2520','','0','0','520322','');
INSERT INTO `web_shop_area` VALUES('2521','绥阳县','','2516','2499,2516','0','2521','','0','0','520323','');
INSERT INTO `web_shop_area` VALUES('2522','正安县','','2516','2499,2516','0','2522','','0','0','520324','');
INSERT INTO `web_shop_area` VALUES('2523','道真仡佬族苗族自治县','','2516','2499,2516','0','2523','','0','0','520325','');
INSERT INTO `web_shop_area` VALUES('2524','务川仡佬族苗族自治县','','2516','2499,2516','0','2524','','0','0','520326','');
INSERT INTO `web_shop_area` VALUES('2525','凤冈县','','2516','2499,2516','0','2525','','0','0','520327','');
INSERT INTO `web_shop_area` VALUES('2526','湄潭县','','2516','2499,2516','0','2526','','0','0','520328','');
INSERT INTO `web_shop_area` VALUES('2527','余庆县','','2516','2499,2516','0','2527','','0','0','520329','');
INSERT INTO `web_shop_area` VALUES('2528','习水县','','2516','2499,2516','0','2528','','0','0','520330','');
INSERT INTO `web_shop_area` VALUES('2529','赤水市','','2516','2499,2516','0','2529','','0','0','520381','');
INSERT INTO `web_shop_area` VALUES('2530','仁怀市','','2516','2499,2516','0','2530','','0','0','520382','');
INSERT INTO `web_shop_area` VALUES('2531','安顺市','','2499','2499','1','2532,2533,2534,2535,2536,2537','','0','0','520400','anshun');
INSERT INTO `web_shop_area` VALUES('2532','西秀区','','2531','2499,2531','0','2532','','0','0','520402','');
INSERT INTO `web_shop_area` VALUES('2533','平坝县','','2531','2499,2531','0','2533','','0','0','520421','');
INSERT INTO `web_shop_area` VALUES('2534','普定县','','2531','2499,2531','0','2534','','0','0','520422','');
INSERT INTO `web_shop_area` VALUES('2535','镇宁布依族苗族自治县','','2531','2499,2531','0','2535','','0','0','520423','');
INSERT INTO `web_shop_area` VALUES('2536','关岭布依族苗族自治县','','2531','2499,2531','0','2536','','0','0','520424','');
INSERT INTO `web_shop_area` VALUES('2537','紫云苗族布依族自治县','','2531','2499,2531','0','2537','','0','0','520425','');
INSERT INTO `web_shop_area` VALUES('2538','铜仁','','2499','2499','1','2539,2540,2541,2542,2543,2544,2545,2546,2547,2548','','0','0','522200','tongrendi');
INSERT INTO `web_shop_area` VALUES('2539','铜仁市','','2538','2499,2538','0','2539','','0','0','522201','');
INSERT INTO `web_shop_area` VALUES('2540','江口县','','2538','2499,2538','0','2540','','0','0','522222','');
INSERT INTO `web_shop_area` VALUES('2541','玉屏侗族自治县','','2538','2499,2538','0','2541','','0','0','522223','');
INSERT INTO `web_shop_area` VALUES('2542','石阡县','','2538','2499,2538','0','2542','','0','0','522224','');
INSERT INTO `web_shop_area` VALUES('2543','思南县','','2538','2499,2538','0','2543','','0','0','522225','');
INSERT INTO `web_shop_area` VALUES('2544','印江土家族苗族自治县','','2538','2499,2538','0','2544','','0','0','522226','');
INSERT INTO `web_shop_area` VALUES('2545','德江县','','2538','2499,2538','0','2545','','0','0','522227','');
INSERT INTO `web_shop_area` VALUES('2546','沿河土家族自治县','','2538','2499,2538','0','2546','','0','0','522228','');
INSERT INTO `web_shop_area` VALUES('2547','松桃苗族自治县','','2538','2499,2538','0','2547','','0','0','522229','');
INSERT INTO `web_shop_area` VALUES('2548','万山特区','','2538','2499,2538','0','2548','','0','0','522230','');
INSERT INTO `web_shop_area` VALUES('2549','黔西南','','2499','2499','1','2550,2551,2552,2553,2554,2555,2556,2557','','0','0','522300','qianxinan');
INSERT INTO `web_shop_area` VALUES('2550','兴义市','','2549','2499,2549','0','2550','','0','0','522301','');
INSERT INTO `web_shop_area` VALUES('2551','兴仁县','','2549','2499,2549','0','2551','','0','0','522322','');
INSERT INTO `web_shop_area` VALUES('2552','普安县','','2549','2499,2549','0','2552','','0','0','522323','');
INSERT INTO `web_shop_area` VALUES('2553','晴隆县','','2549','2499,2549','0','2553','','0','0','522324','');
INSERT INTO `web_shop_area` VALUES('2554','贞丰县','','2549','2499,2549','0','2554','','0','0','522325','');
INSERT INTO `web_shop_area` VALUES('2555','望谟县','','2549','2499,2549','0','2555','','0','0','522326','');
INSERT INTO `web_shop_area` VALUES('2556','册亨县','','2549','2499,2549','0','2556','','0','0','522327','');
INSERT INTO `web_shop_area` VALUES('2557','安龙县','','2549','2499,2549','0','2557','','0','0','522328','');
INSERT INTO `web_shop_area` VALUES('2558','毕节','','2499','2499','1','2559,2560,2561,2562,2563,2564,2565,2566','','0','0','522400','bijiedi');
INSERT INTO `web_shop_area` VALUES('2559','毕节市','','2558','2499,2558','0','2559','','0','0','522401','');
INSERT INTO `web_shop_area` VALUES('2560','大方县','','2558','2499,2558','0','2560','','0','0','522422','');
INSERT INTO `web_shop_area` VALUES('2561','黔西县','','2558','2499,2558','0','2561','','0','0','522423','');
INSERT INTO `web_shop_area` VALUES('2562','金沙县','','2558','2499,2558','0','2562','','0','0','522424','');
INSERT INTO `web_shop_area` VALUES('2563','织金县','','2558','2499,2558','0','2563','','0','0','522425','');
INSERT INTO `web_shop_area` VALUES('2564','纳雍县','','2558','2499,2558','0','2564','','0','0','522426','');
INSERT INTO `web_shop_area` VALUES('2565','威宁彝族回族苗族自治县','','2558','2499,2558','0','2565','','0','0','522427','');
INSERT INTO `web_shop_area` VALUES('2566','赫章县','','2558','2499,2558','0','2566','','0','0','522428','');
INSERT INTO `web_shop_area` VALUES('2567','黔东南','','2499','2499','1','2568,2569,2570,2571,2572,2573,2574,2575,2576,2577,2578,2579,2580,2581,2582,2583','','0','0','522600','qiandongnan');
INSERT INTO `web_shop_area` VALUES('2568','凯里市','','2567','2499,2567','0','2568','','0','0','522601','');
INSERT INTO `web_shop_area` VALUES('2569','黄平县','','2567','2499,2567','0','2569','','0','0','522622','');
INSERT INTO `web_shop_area` VALUES('2570','施秉县','','2567','2499,2567','0','2570','','0','0','522623','');
INSERT INTO `web_shop_area` VALUES('2571','三穗县','','2567','2499,2567','0','2571','','0','0','522624','');
INSERT INTO `web_shop_area` VALUES('2572','镇远县','','2567','2499,2567','0','2572','','0','0','522625','');
INSERT INTO `web_shop_area` VALUES('2573','岑巩县','','2567','2499,2567','0','2573','','0','0','522626','');
INSERT INTO `web_shop_area` VALUES('2574','天柱县','','2567','2499,2567','0','2574','','0','0','522627','');
INSERT INTO `web_shop_area` VALUES('2575','锦屏县','','2567','2499,2567','0','2575','','0','0','522628','');
INSERT INTO `web_shop_area` VALUES('2576','剑河县','','2567','2499,2567','0','2576','','0','0','522629','');
INSERT INTO `web_shop_area` VALUES('2577','台江县','','2567','2499,2567','0','2577','','0','0','522630','');
INSERT INTO `web_shop_area` VALUES('2578','黎平县','','2567','2499,2567','0','2578','','0','0','522631','');
INSERT INTO `web_shop_area` VALUES('2579','榕江县','','2567','2499,2567','0','2579','','0','0','522632','');
INSERT INTO `web_shop_area` VALUES('2580','从江县','','2567','2499,2567','0','2580','','0','0','522633','');
INSERT INTO `web_shop_area` VALUES('2581','雷山县','','2567','2499,2567','0','2581','','0','0','522634','');
INSERT INTO `web_shop_area` VALUES('2582','麻江县','','2567','2499,2567','0','2582','','0','0','522635','');
INSERT INTO `web_shop_area` VALUES('2583','丹寨县','','2567','2499,2567','0','2583','','0','0','522636','');
INSERT INTO `web_shop_area` VALUES('2584','黔南','','2499','2499','1','2585,2586,2587,2588,2589,2590,2591,2592,2593,2594,2595,2596','','0','0','522700','qiannan');
INSERT INTO `web_shop_area` VALUES('2585','都匀市','','2584','2499,2584','0','2585','','0','0','522701','');
INSERT INTO `web_shop_area` VALUES('2586','福泉市','','2584','2499,2584','0','2586','','0','0','522702','');
INSERT INTO `web_shop_area` VALUES('2587','荔波县','','2584','2499,2584','0','2587','','0','0','522722','');
INSERT INTO `web_shop_area` VALUES('2588','贵定县','','2584','2499,2584','0','2588','','0','0','522723','');
INSERT INTO `web_shop_area` VALUES('2589','瓮安县','','2584','2499,2584','0','2589','','0','0','522725','');
INSERT INTO `web_shop_area` VALUES('2590','独山县','','2584','2499,2584','0','2590','','0','0','522726','');
INSERT INTO `web_shop_area` VALUES('2591','平塘县','','2584','2499,2584','0','2591','','0','0','522727','');
INSERT INTO `web_shop_area` VALUES('2592','罗甸县','','2584','2499,2584','0','2592','','0','0','522728','');
INSERT INTO `web_shop_area` VALUES('2593','长顺县','','2584','2499,2584','0','2593','','0','0','522729','');
INSERT INTO `web_shop_area` VALUES('2594','龙里县','','2584','2499,2584','0','2594','','0','0','522730','');
INSERT INTO `web_shop_area` VALUES('2595','惠水县','','2584','2499,2584','0','2595','','0','0','522731','');
INSERT INTO `web_shop_area` VALUES('2596','三都水族自治县','','2584','2499,2584','0','2596','','0','0','522732','');
INSERT INTO `web_shop_area` VALUES('2597','云南','','0','0','1','2598,2613,2623,2633,2639,2651,2657,2668,2677,2688,2702,2711,2715,2728,2734,2739,2599,2600,2601,2602,2603,2604,2605,2606,2607,2608,2609,2610,2611,2612','','21','0','530000','yunnan');
INSERT INTO `web_shop_area` VALUES('2598','昆明市','','2597','2597','1','2599,2600,2601,2602,2603,2604,2605,2606,2607,2608,2609,2610,2611,2612','','0','0','530100','kunming');
INSERT INTO `web_shop_area` VALUES('2599','五华区','','2598','2597,2598','0','2599','','0','0','530102','');
INSERT INTO `web_shop_area` VALUES('2600','盘龙区','','2598','2597,2598','0','2600','','0','0','530103','');
INSERT INTO `web_shop_area` VALUES('2601','官渡区','','2598','2597,2598','0','2601','','0','0','530111','');
INSERT INTO `web_shop_area` VALUES('2602','西山区','','2598','2597,2598','0','2602','','0','0','530112','');
INSERT INTO `web_shop_area` VALUES('2603','东川区','','2598','2597,2598','0','2603','','0','0','530113','');
INSERT INTO `web_shop_area` VALUES('2604','呈贡县','','2598','2597,2598','0','2604','','0','0','530121','');
INSERT INTO `web_shop_area` VALUES('2605','晋宁县','','2598','2597,2598','0','2605','','0','0','530122','');
INSERT INTO `web_shop_area` VALUES('2606','富民县','','2598','2597,2598','0','2606','','0','0','530124','');
INSERT INTO `web_shop_area` VALUES('2607','宜良县','','2598','2597,2598','0','2607','','0','0','530125','');
INSERT INTO `web_shop_area` VALUES('2608','石林彝族自治县','','2598','2597,2598','0','2608','','0','0','530126','');
INSERT INTO `web_shop_area` VALUES('2609','嵩明县','','2598','2597,2598','0','2609','','0','0','530127','');
INSERT INTO `web_shop_area` VALUES('2610','禄劝彝族苗族自治县','','2598','2597,2598','0','2610','','0','0','530128','');
INSERT INTO `web_shop_area` VALUES('2611','寻甸回族彝族自治县','','2598','2597,2598','0','2611','','0','0','530129','');
INSERT INTO `web_shop_area` VALUES('2612','安宁市','','2598','2597,2598','0','2612','','0','0','530181','');
INSERT INTO `web_shop_area` VALUES('2613','曲靖市','','2597','2597','1','2614,2615,2616,2617,2618,2619,2620,2621,2622','','0','0','530300','qujing');
INSERT INTO `web_shop_area` VALUES('2614','麒麟区','','2613','2597,2613','0','2614','','0','0','530302','');
INSERT INTO `web_shop_area` VALUES('2615','马龙县','','2613','2597,2613','0','2615','','0','0','530321','');
INSERT INTO `web_shop_area` VALUES('2616','陆良县','','2613','2597,2613','0','2616','','0','0','530322','');
INSERT INTO `web_shop_area` VALUES('2617','师宗县','','2613','2597,2613','0','2617','','0','0','530323','');
INSERT INTO `web_shop_area` VALUES('2618','罗平县','','2613','2597,2613','0','2618','','0','0','530324','');
INSERT INTO `web_shop_area` VALUES('2619','富源县','','2613','2597,2613','0','2619','','0','0','530325','');
INSERT INTO `web_shop_area` VALUES('2620','会泽县','','2613','2597,2613','0','2620','','0','0','530326','');
INSERT INTO `web_shop_area` VALUES('2621','沾益县','','2613','2597,2613','0','2621','','0','0','530328','');
INSERT INTO `web_shop_area` VALUES('2622','宣威市','','2613','2597,2613','0','2622','','0','0','530381','');
INSERT INTO `web_shop_area` VALUES('2623','玉溪市','','2597','2597','1','2624,2625,2626,2627,2628,2629,2630,2631,2632','','0','0','530400','yuxi');
INSERT INTO `web_shop_area` VALUES('2624','红塔区','','2623','2597,2623','0','2624','','0','0','530402','');
INSERT INTO `web_shop_area` VALUES('2625','江川县','','2623','2597,2623','0','2625','','0','0','530421','');
INSERT INTO `web_shop_area` VALUES('2626','澄江县','','2623','2597,2623','0','2626','','0','0','530422','');
INSERT INTO `web_shop_area` VALUES('2627','通海县','','2623','2597,2623','0','2627','','0','0','530423','');
INSERT INTO `web_shop_area` VALUES('2628','华宁县','','2623','2597,2623','0','2628','','0','0','530424','');
INSERT INTO `web_shop_area` VALUES('2629','易门县','','2623','2597,2623','0','2629','','0','0','530425','');
INSERT INTO `web_shop_area` VALUES('2630','峨山彝族自治县','','2623','2597,2623','0','2630','','0','0','530426','');
INSERT INTO `web_shop_area` VALUES('2631','新平彝族傣族自治县','','2623','2597,2623','0','2631','','0','0','530427','');
INSERT INTO `web_shop_area` VALUES('2632','元江哈尼族彝族傣族自治县','','2623','2597,2623','0','2632','','0','0','530428','');
INSERT INTO `web_shop_area` VALUES('2633','保山市','','2597','2597','1','2634,2635,2636,2637,2638','','0','0','530500','baoshan');
INSERT INTO `web_shop_area` VALUES('2634','隆阳区','','2633','2597,2633','0','2634','','0','0','530502','');
INSERT INTO `web_shop_area` VALUES('2635','施甸县','','2633','2597,2633','0','2635','','0','0','530521','');
INSERT INTO `web_shop_area` VALUES('2636','腾冲县','','2633','2597,2633','0','2636','','0','0','530522','');
INSERT INTO `web_shop_area` VALUES('2637','龙陵县','','2633','2597,2633','0','2637','','0','0','530523','');
INSERT INTO `web_shop_area` VALUES('2638','昌宁县','','2633','2597,2633','0','2638','','0','0','530524','');
INSERT INTO `web_shop_area` VALUES('2639','昭通市','','2597','2597','1','2640,2641,2642,2643,2644,2645,2646,2647,2648,2649,2650','','0','0','530600','zhaotong');
INSERT INTO `web_shop_area` VALUES('2640','昭阳区','','2639','2597,2639','0','2640','','0','0','530602','');
INSERT INTO `web_shop_area` VALUES('2641','鲁甸县','','2639','2597,2639','0','2641','','0','0','530621','');
INSERT INTO `web_shop_area` VALUES('2642','巧家县','','2639','2597,2639','0','2642','','0','0','530622','');
INSERT INTO `web_shop_area` VALUES('2643','盐津县','','2639','2597,2639','0','2643','','0','0','530623','');
INSERT INTO `web_shop_area` VALUES('2644','大关县','','2639','2597,2639','0','2644','','0','0','530624','');
INSERT INTO `web_shop_area` VALUES('2645','永善县','','2639','2597,2639','0','2645','','0','0','530625','');
INSERT INTO `web_shop_area` VALUES('2646','绥江县','','2639','2597,2639','0','2646','','0','0','530626','');
INSERT INTO `web_shop_area` VALUES('2647','镇雄县','','2639','2597,2639','0','2647','','0','0','530627','');
INSERT INTO `web_shop_area` VALUES('2648','彝良县','','2639','2597,2639','0','2648','','0','0','530628','');
INSERT INTO `web_shop_area` VALUES('2649','威信县','','2639','2597,2639','0','2649','','0','0','530629','');
INSERT INTO `web_shop_area` VALUES('2650','水富县','','2639','2597,2639','0','2650','','0','0','530630','');
INSERT INTO `web_shop_area` VALUES('2651','丽江市','','2597','2597','1','2652,2653,2654,2655,2656','','0','0','530700','lijiang');
INSERT INTO `web_shop_area` VALUES('2652','古城区','','2651','2597,2651','0','2652','','0','0','530702','');
INSERT INTO `web_shop_area` VALUES('2653','玉龙纳西族自治县','','2651','2597,2651','0','2653','','0','0','530721','');
INSERT INTO `web_shop_area` VALUES('2654','永胜县','','2651','2597,2651','0','2654','','0','0','530722','');
INSERT INTO `web_shop_area` VALUES('2655','华坪县','','2651','2597,2651','0','2655','','0','0','530723','');
INSERT INTO `web_shop_area` VALUES('2656','宁蒗彝族自治县','','2651','2597,2651','0','2656','','0','0','530724','');
INSERT INTO `web_shop_area` VALUES('2657','普洱市','','2597','2597','1','2658,2659,2660,2661,2662,2663,2664,2665,2666,2667','','0','0','530800','puer');
INSERT INTO `web_shop_area` VALUES('2658','思茅区','','2657','2597,2657','0','2658','','0','0','530802','');
INSERT INTO `web_shop_area` VALUES('2659','宁洱哈尼族彝族自治县','','2657','2597,2657','0','2659','','0','0','530821','');
INSERT INTO `web_shop_area` VALUES('2660','墨江哈尼族自治县','','2657','2597,2657','0','2660','','0','0','530822','');
INSERT INTO `web_shop_area` VALUES('2661','景东彝族自治县','','2657','2597,2657','0','2661','','0','0','530823','');
INSERT INTO `web_shop_area` VALUES('2662','景谷傣族彝族自治县','','2657','2597,2657','0','2662','','0','0','530824','');
INSERT INTO `web_shop_area` VALUES('2663','镇沅彝族哈尼族拉祜族自治县','','2657','2597,2657','0','2663','','0','0','530825','');
INSERT INTO `web_shop_area` VALUES('2664','江城哈尼族彝族自治县','','2657','2597,2657','0','2664','','0','0','530826','');
INSERT INTO `web_shop_area` VALUES('2665','孟连傣族拉祜族佤族自治县','','2657','2597,2657','0','2665','','0','0','530827','');
INSERT INTO `web_shop_area` VALUES('2666','澜沧拉祜族自治县','','2657','2597,2657','0','2666','','0','0','530828','');
INSERT INTO `web_shop_area` VALUES('2667','西盟佤族自治县','','2657','2597,2657','0','2667','','0','0','530829','');
INSERT INTO `web_shop_area` VALUES('2668','临沧市','','2597','2597','1','2669,2670,2671,2672,2673,2674,2675,2676','','0','0','530900','lincang');
INSERT INTO `web_shop_area` VALUES('2669','临翔区','','2668','2597,2668','0','2669','','0','0','530902','');
INSERT INTO `web_shop_area` VALUES('2670','凤庆县','','2668','2597,2668','0','2670','','0','0','530921','');
INSERT INTO `web_shop_area` VALUES('2671','云县','','2668','2597,2668','0','2671','','0','0','530922','');
INSERT INTO `web_shop_area` VALUES('2672','永德县','','2668','2597,2668','0','2672','','0','0','530923','');
INSERT INTO `web_shop_area` VALUES('2673','镇康县','','2668','2597,2668','0','2673','','0','0','530924','');
INSERT INTO `web_shop_area` VALUES('2674','双江拉祜族佤族布朗族傣族自治县','','2668','2597,2668','0','2674','','0','0','530925','');
INSERT INTO `web_shop_area` VALUES('2675','耿马傣族佤族自治县','','2668','2597,2668','0','2675','','0','0','530926','');
INSERT INTO `web_shop_area` VALUES('2676','沧源佤族自治县','','2668','2597,2668','0','2676','','0','0','530927','');
INSERT INTO `web_shop_area` VALUES('2677','楚雄','','2597','2597','1','2678,2679,2680,2681,2682,2683,2684,2685,2686,2687','','0','0','532300','chuxiong');
INSERT INTO `web_shop_area` VALUES('2678','楚雄市','','2677','2597,2677','0','2678','','0','0','532301','');
INSERT INTO `web_shop_area` VALUES('2679','双柏县','','2677','2597,2677','0','2679','','0','0','532322','');
INSERT INTO `web_shop_area` VALUES('2680','牟定县','','2677','2597,2677','0','2680','','0','0','532323','');
INSERT INTO `web_shop_area` VALUES('2681','南华县','','2677','2597,2677','0','2681','','0','0','532324','');
INSERT INTO `web_shop_area` VALUES('2682','姚安县','','2677','2597,2677','0','2682','','0','0','532325','');
INSERT INTO `web_shop_area` VALUES('2683','大姚县','','2677','2597,2677','0','2683','','0','0','532326','');
INSERT INTO `web_shop_area` VALUES('2684','永仁县','','2677','2597,2677','0','2684','','0','0','532327','');
INSERT INTO `web_shop_area` VALUES('2685','元谋县','','2677','2597,2677','0','2685','','0','0','532328','');
INSERT INTO `web_shop_area` VALUES('2686','武定县','','2677','2597,2677','0','2686','','0','0','532329','');
INSERT INTO `web_shop_area` VALUES('2687','禄丰县','','2677','2597,2677','0','2687','','0','0','532331','');
INSERT INTO `web_shop_area` VALUES('2688','红河','','2597','2597','1','2689,2690,2691,2692,2693,2694,2695,2696,2697,2698,2699,2700,2701','','0','0','532500','honghe');
INSERT INTO `web_shop_area` VALUES('2689','个旧市','','2688','2597,2688','0','2689','','0','0','532501','');
INSERT INTO `web_shop_area` VALUES('2690','开远市','','2688','2597,2688','0','2690','','0','0','532502','');
INSERT INTO `web_shop_area` VALUES('2691','蒙自市','','2688','2597,2688','0','2691','','0','0','532503','');
INSERT INTO `web_shop_area` VALUES('2692','屏边苗族自治县','','2688','2597,2688','0','2692','','0','0','532523','');
INSERT INTO `web_shop_area` VALUES('2693','建水县','','2688','2597,2688','0','2693','','0','0','532524','');
INSERT INTO `web_shop_area` VALUES('2694','石屏县','','2688','2597,2688','0','2694','','0','0','532525','');
INSERT INTO `web_shop_area` VALUES('2695','弥勒县','','2688','2597,2688','0','2695','','0','0','532526','');
INSERT INTO `web_shop_area` VALUES('2696','泸西县','','2688','2597,2688','0','2696','','0','0','532527','');
INSERT INTO `web_shop_area` VALUES('2697','元阳县','','2688','2597,2688','0','2697','','0','0','532528','');
INSERT INTO `web_shop_area` VALUES('2698','红河县','','2688','2597,2688','0','2698','','0','0','532529','');
INSERT INTO `web_shop_area` VALUES('2699','金平苗族瑶族傣族自治县','','2688','2597,2688','0','2699','','0','0','532530','');
INSERT INTO `web_shop_area` VALUES('2700','绿春县','','2688','2597,2688','0','2700','','0','0','532531','');
INSERT INTO `web_shop_area` VALUES('2701','河口瑶族自治县','','2688','2597,2688','0','2701','','0','0','532532','');
INSERT INTO `web_shop_area` VALUES('2702','文山','','2597','2597','1','2703,2704,2705,2706,2707,2708,2709,2710','','0','0','532600','wenshan');
INSERT INTO `web_shop_area` VALUES('2703','文山县','','2702','2597,2702','0','2703','','0','0','532621','');
INSERT INTO `web_shop_area` VALUES('2704','砚山县','','2702','2597,2702','0','2704','','0','0','532622','');
INSERT INTO `web_shop_area` VALUES('2705','西畴县','','2702','2597,2702','0','2705','','0','0','532623','');
INSERT INTO `web_shop_area` VALUES('2706','麻栗坡县','','2702','2597,2702','0','2706','','0','0','532624','');
INSERT INTO `web_shop_area` VALUES('2707','马关县','','2702','2597,2702','0','2707','','0','0','532625','');
INSERT INTO `web_shop_area` VALUES('2708','丘北县','','2702','2597,2702','0','2708','','0','0','532626','');
INSERT INTO `web_shop_area` VALUES('2709','广南县','','2702','2597,2702','0','2709','','0','0','532627','');
INSERT INTO `web_shop_area` VALUES('2710','富宁县','','2702','2597,2702','0','2710','','0','0','532628','');
INSERT INTO `web_shop_area` VALUES('2711','西双版纳','','2597','2597','1','2712,2713,2714','','0','0','532800','xishuangbanna');
INSERT INTO `web_shop_area` VALUES('2712','景洪市','','2711','2597,2711','0','2712','','0','0','532801','');
INSERT INTO `web_shop_area` VALUES('2713','勐海县','','2711','2597,2711','0','2713','','0','0','532822','');
INSERT INTO `web_shop_area` VALUES('2714','勐腊县','','2711','2597,2711','0','2714','','0','0','532823','');
INSERT INTO `web_shop_area` VALUES('2715','大理','','2597','2597','1','2716,2717,2718,2719,2720,2721,2722,2723,2724,2725,2726,2727','','0','0','532900','dalizizhizhou');
INSERT INTO `web_shop_area` VALUES('2716','大理市','','2715','2597,2715','0','2716','','0','0','532901','');
INSERT INTO `web_shop_area` VALUES('2717','漾濞彝族自治县','','2715','2597,2715','0','2717','','0','0','532922','');
INSERT INTO `web_shop_area` VALUES('2718','祥云县','','2715','2597,2715','0','2718','','0','0','532923','');
INSERT INTO `web_shop_area` VALUES('2719','宾川县','','2715','2597,2715','0','2719','','0','0','532924','');
INSERT INTO `web_shop_area` VALUES('2720','弥渡县','','2715','2597,2715','0','2720','','0','0','532925','');
INSERT INTO `web_shop_area` VALUES('2721','南涧彝族自治县','','2715','2597,2715','0','2721','','0','0','532926','');
INSERT INTO `web_shop_area` VALUES('2722','巍山彝族回族自治县','','2715','2597,2715','0','2722','','0','0','532927','');
INSERT INTO `web_shop_area` VALUES('2723','永平县','','2715','2597,2715','0','2723','','0','0','532928','');
INSERT INTO `web_shop_area` VALUES('2724','云龙县','','2715','2597,2715','0','2724','','0','0','532929','');
INSERT INTO `web_shop_area` VALUES('2725','洱源县','','2715','2597,2715','0','2725','','0','0','532930','');
INSERT INTO `web_shop_area` VALUES('2726','剑川县','','2715','2597,2715','0','2726','','0','0','532931','');
INSERT INTO `web_shop_area` VALUES('2727','鹤庆县','','2715','2597,2715','0','2727','','0','0','532932','');
INSERT INTO `web_shop_area` VALUES('2728','德宏','','2597','2597','1','2729,2730,2731,2732,2733','','0','0','533100','dehong');
INSERT INTO `web_shop_area` VALUES('2729','瑞丽市','','2728','2597,2728','0','2729','','0','0','533102','');
INSERT INTO `web_shop_area` VALUES('2730','芒市','','2728','2597,2728','0','2730','','0','0','533103','');
INSERT INTO `web_shop_area` VALUES('2731','梁河县','','2728','2597,2728','0','2731','','0','0','533122','');
INSERT INTO `web_shop_area` VALUES('2732','盈江县','','2728','2597,2728','0','2732','','0','0','533123','');
INSERT INTO `web_shop_area` VALUES('2733','陇川县','','2728','2597,2728','0','2733','','0','0','533124','');
INSERT INTO `web_shop_area` VALUES('2734','怒江','','2597','2597','1','2735,2736,2737,2738','','0','0','533300','nujiang');
INSERT INTO `web_shop_area` VALUES('2735','泸水县','','2734','2597,2734','0','2735','','0','0','533321','');
INSERT INTO `web_shop_area` VALUES('2736','福贡县','','2734','2597,2734','0','2736','','0','0','533323','');
INSERT INTO `web_shop_area` VALUES('2737','贡山独龙族怒族自治县','','2734','2597,2734','0','2737','','0','0','533324','');
INSERT INTO `web_shop_area` VALUES('2738','兰坪白族普米族自治县','','2734','2597,2734','0','2738','','0','0','533325','');
INSERT INTO `web_shop_area` VALUES('2739','迪庆','','2597','2597','1','2740,2741,2742','','0','0','533400','diqing');
INSERT INTO `web_shop_area` VALUES('2740','香格里拉县','','2739','2597,2739','0','2740','','0','0','533421','');
INSERT INTO `web_shop_area` VALUES('2741','德钦县','','2739','2597,2739','0','2741','','0','0','533422','');
INSERT INTO `web_shop_area` VALUES('2742','维西傈僳族自治县','','2739','2597,2739','0','2742','','0','0','533423','');
INSERT INTO `web_shop_area` VALUES('2743','西藏','','0','0','1','2744,2753,2765,2778,2797,2808,2816,2745,2746,2747,2748,2749,2750,2751,2752','','29','0','540000','xizang');
INSERT INTO `web_shop_area` VALUES('2744','拉萨市','','2743','2743','1','2745,2746,2747,2748,2749,2750,2751,2752','','0','0','540100','lasa');
INSERT INTO `web_shop_area` VALUES('2745','城关区','','2744','2743,2744','0','2745','','0','0','540102','');
INSERT INTO `web_shop_area` VALUES('2746','林周县','','2744','2743,2744','0','2746','','0','0','540121','');
INSERT INTO `web_shop_area` VALUES('2747','当雄县','','2744','2743,2744','0','2747','','0','0','540122','');
INSERT INTO `web_shop_area` VALUES('2748','尼木县','','2744','2743,2744','0','2748','','0','0','540123','');
INSERT INTO `web_shop_area` VALUES('2749','曲水县','','2744','2743,2744','0','2749','','0','0','540124','');
INSERT INTO `web_shop_area` VALUES('2750','堆龙德庆县','','2744','2743,2744','0','2750','','0','0','540125','');
INSERT INTO `web_shop_area` VALUES('2751','达孜县','','2744','2743,2744','0','2751','','0','0','540126','');
INSERT INTO `web_shop_area` VALUES('2752','墨竹工卡县','','2744','2743,2744','0','2752','','0','0','540127','');
INSERT INTO `web_shop_area` VALUES('2753','昌都','','2743','2743','1','2754,2755,2756,2757,2758,2759,2760,2761,2762,2763,2764','','0','0','542100','changdudi');
INSERT INTO `web_shop_area` VALUES('2754','昌都县','','2753','2743,2753','0','2754','','0','0','542121','');
INSERT INTO `web_shop_area` VALUES('2755','江达县','','2753','2743,2753','0','2755','','0','0','542122','');
INSERT INTO `web_shop_area` VALUES('2756','贡觉县','','2753','2743,2753','0','2756','','0','0','542123','');
INSERT INTO `web_shop_area` VALUES('2757','类乌齐县','','2753','2743,2753','0','2757','','0','0','542124','');
INSERT INTO `web_shop_area` VALUES('2758','丁青县','','2753','2743,2753','0','2758','','0','0','542125','');
INSERT INTO `web_shop_area` VALUES('2759','察雅县','','2753','2743,2753','0','2759','','0','0','542126','');
INSERT INTO `web_shop_area` VALUES('2760','八宿县','','2753','2743,2753','0','2760','','0','0','542127','');
INSERT INTO `web_shop_area` VALUES('2761','左贡县','','2753','2743,2753','0','2761','','0','0','542128','');
INSERT INTO `web_shop_area` VALUES('2762','芒康县','','2753','2743,2753','0','2762','','0','0','542129','');
INSERT INTO `web_shop_area` VALUES('2763','洛隆县','','2753','2743,2753','0','2763','','0','0','542132','');
INSERT INTO `web_shop_area` VALUES('2764','边坝县','','2753','2743,2753','0','2764','','0','0','542133','');
INSERT INTO `web_shop_area` VALUES('2765','山南','','2743','2743','1','2766,2767,2768,2769,2770,2771,2772,2773,2774,2775,2776,2777','','0','0','542200','shannandi');
INSERT INTO `web_shop_area` VALUES('2766','乃东县','','2765','2743,2765','0','2766','','0','0','542221','');
INSERT INTO `web_shop_area` VALUES('2767','扎囊县','','2765','2743,2765','0','2767','','0','0','542222','');
INSERT INTO `web_shop_area` VALUES('2768','贡嘎县','','2765','2743,2765','0','2768','','0','0','542223','');
INSERT INTO `web_shop_area` VALUES('2769','桑日县','','2765','2743,2765','0','2769','','0','0','542224','');
INSERT INTO `web_shop_area` VALUES('2770','琼结县','','2765','2743,2765','0','2770','','0','0','542225','');
INSERT INTO `web_shop_area` VALUES('2771','曲松县','','2765','2743,2765','0','2771','','0','0','542226','');
INSERT INTO `web_shop_area` VALUES('2772','措美县','','2765','2743,2765','0','2772','','0','0','542227','');
INSERT INTO `web_shop_area` VALUES('2773','洛扎县','','2765','2743,2765','0','2773','','0','0','542228','');
INSERT INTO `web_shop_area` VALUES('2774','加查县','','2765','2743,2765','0','2774','','0','0','542229','');
INSERT INTO `web_shop_area` VALUES('2775','隆子县','','2765','2743,2765','0','2775','','0','0','542231','');
INSERT INTO `web_shop_area` VALUES('2776','错那县','','2765','2743,2765','0','2776','','0','0','542232','');
INSERT INTO `web_shop_area` VALUES('2777','浪卡子县','','2765','2743,2765','0','2777','','0','0','542233','');
INSERT INTO `web_shop_area` VALUES('2778','日喀则','','2743','2743','1','2779,2780,2781,2782,2783,2784,2785,2786,2787,2788,2789,2790,2791,2792,2793,2794,2795,2796','','0','0','542300','rikazedi');
INSERT INTO `web_shop_area` VALUES('2779','日喀则市','','2778','2743,2778','0','2779','','0','0','542301','');
INSERT INTO `web_shop_area` VALUES('2780','南木林县','','2778','2743,2778','0','2780','','0','0','542322','');
INSERT INTO `web_shop_area` VALUES('2781','江孜县','','2778','2743,2778','0','2781','','0','0','542323','');
INSERT INTO `web_shop_area` VALUES('2782','定日县','','2778','2743,2778','0','2782','','0','0','542324','');
INSERT INTO `web_shop_area` VALUES('2783','萨迦县','','2778','2743,2778','0','2783','','0','0','542325','');
INSERT INTO `web_shop_area` VALUES('2784','拉孜县','','2778','2743,2778','0','2784','','0','0','542326','');
INSERT INTO `web_shop_area` VALUES('2785','昂仁县','','2778','2743,2778','0','2785','','0','0','542327','');
INSERT INTO `web_shop_area` VALUES('2786','谢通门县','','2778','2743,2778','0','2786','','0','0','542328','');
INSERT INTO `web_shop_area` VALUES('2787','白朗县','','2778','2743,2778','0','2787','','0','0','542329','');
INSERT INTO `web_shop_area` VALUES('2788','仁布县','','2778','2743,2778','0','2788','','0','0','542330','');
INSERT INTO `web_shop_area` VALUES('2789','康马县','','2778','2743,2778','0','2789','','0','0','542331','');
INSERT INTO `web_shop_area` VALUES('2790','定结县','','2778','2743,2778','0','2790','','0','0','542332','');
INSERT INTO `web_shop_area` VALUES('2791','仲巴县','','2778','2743,2778','0','2791','','0','0','542333','');
INSERT INTO `web_shop_area` VALUES('2792','亚东县','','2778','2743,2778','0','2792','','0','0','542334','');
INSERT INTO `web_shop_area` VALUES('2793','吉隆县','','2778','2743,2778','0','2793','','0','0','542335','');
INSERT INTO `web_shop_area` VALUES('2794','聂拉木县','','2778','2743,2778','0','2794','','0','0','542336','');
INSERT INTO `web_shop_area` VALUES('2795','萨嘎县','','2778','2743,2778','0','2795','','0','0','542337','');
INSERT INTO `web_shop_area` VALUES('2796','岗巴县','','2778','2743,2778','0','2796','','0','0','542338','');
INSERT INTO `web_shop_area` VALUES('2797','那曲','','2743','2743','1','2798,2799,2800,2801,2802,2803,2804,2805,2806,2807','','0','0','542400','naqudi');
INSERT INTO `web_shop_area` VALUES('2798','那曲县','','2797','2743,2797','0','2798','','0','0','542421','');
INSERT INTO `web_shop_area` VALUES('2799','嘉黎县','','2797','2743,2797','0','2799','','0','0','542422','');
INSERT INTO `web_shop_area` VALUES('2800','比如县','','2797','2743,2797','0','2800','','0','0','542423','');
INSERT INTO `web_shop_area` VALUES('2801','聂荣县','','2797','2743,2797','0','2801','','0','0','542424','');
INSERT INTO `web_shop_area` VALUES('2802','安多县','','2797','2743,2797','0','2802','','0','0','542425','');
INSERT INTO `web_shop_area` VALUES('2803','申扎县','','2797','2743,2797','0','2803','','0','0','542426','');
INSERT INTO `web_shop_area` VALUES('2804','索县','','2797','2743,2797','0','2804','','0','0','542427','');
INSERT INTO `web_shop_area` VALUES('2805','班戈县','','2797','2743,2797','0','2805','','0','0','542428','');
INSERT INTO `web_shop_area` VALUES('2806','巴青县','','2797','2743,2797','0','2806','','0','0','542429','');
INSERT INTO `web_shop_area` VALUES('2807','尼玛县','','2797','2743,2797','0','2807','','0','0','542430','');
INSERT INTO `web_shop_area` VALUES('2808','阿里','','2743','2743','1','2809,2810,2811,2812,2813,2814,2815','','0','0','542500','alidi');
INSERT INTO `web_shop_area` VALUES('2809','普兰县','','2808','2743,2808','0','2809','','0','0','542521','');
INSERT INTO `web_shop_area` VALUES('2810','札达县','','2808','2743,2808','0','2810','','0','0','542522','');
INSERT INTO `web_shop_area` VALUES('2811','噶尔县','','2808','2743,2808','0','2811','','0','0','542523','');
INSERT INTO `web_shop_area` VALUES('2812','日土县','','2808','2743,2808','0','2812','','0','0','542524','');
INSERT INTO `web_shop_area` VALUES('2813','革吉县','','2808','2743,2808','0','2813','','0','0','542525','');
INSERT INTO `web_shop_area` VALUES('2814','改则县','','2808','2743,2808','0','2814','','0','0','542526','');
INSERT INTO `web_shop_area` VALUES('2815','措勤县','','2808','2743,2808','0','2815','','0','0','542527','');
INSERT INTO `web_shop_area` VALUES('2816','林芝','','2743','2743','1','2817,2818,2819,2820,2821,2822,2823','','0','0','542600','linzhidi');
INSERT INTO `web_shop_area` VALUES('2817','林芝县','','2816','2743,2816','0','2817','','0','0','542621','');
INSERT INTO `web_shop_area` VALUES('2818','工布江达县','','2816','2743,2816','0','2818','','0','0','542622','');
INSERT INTO `web_shop_area` VALUES('2819','米林县','','2816','2743,2816','0','2819','','0','0','542623','');
INSERT INTO `web_shop_area` VALUES('2820','墨脱县','','2816','2743,2816','0','2820','','0','0','542624','');
INSERT INTO `web_shop_area` VALUES('2821','波密县','','2816','2743,2816','0','2821','','0','0','542625','');
INSERT INTO `web_shop_area` VALUES('2822','察隅县','','2816','2743,2816','0','2822','','0','0','542626','');
INSERT INTO `web_shop_area` VALUES('2823','朗县','','2816','2743,2816','0','2823','','0','0','542627','');
INSERT INTO `web_shop_area` VALUES('2824','陕西','','0','0','1','2825,2839,2844,2857,2872,2884,2898,2910,2923,2934,2826,2827,2828,2829,2830,2831,2832,2833,2834,2835,2836,2837,2838','','20','0','610000','shanxi');
INSERT INTO `web_shop_area` VALUES('2825','西安市','','2824','2824','1','2826,2827,2828,2829,2830,2831,2832,2833,2834,2835,2836,2837,2838','','0','0','610100','xian');
INSERT INTO `web_shop_area` VALUES('2826','新城区','','2825','2824,2825','0','2826','','0','0','610102','');
INSERT INTO `web_shop_area` VALUES('2827','碑林区','','2825','2824,2825','0','2827','','0','0','610103','');
INSERT INTO `web_shop_area` VALUES('2828','莲湖区','','2825','2824,2825','0','2828','','0','0','610104','');
INSERT INTO `web_shop_area` VALUES('2829','灞桥区','','2825','2824,2825','0','2829','','0','0','610111','');
INSERT INTO `web_shop_area` VALUES('2830','未央区','','2825','2824,2825','0','2830','','0','0','610112','');
INSERT INTO `web_shop_area` VALUES('2831','雁塔区','','2825','2824,2825','0','2831','','0','0','610113','');
INSERT INTO `web_shop_area` VALUES('2832','阎良区','','2825','2824,2825','0','2832','','0','0','610114','');
INSERT INTO `web_shop_area` VALUES('2833','临潼区','','2825','2824,2825','0','2833','','0','0','610115','');
INSERT INTO `web_shop_area` VALUES('2834','长安区','','2825','2824,2825','0','2834','','0','0','610116','');
INSERT INTO `web_shop_area` VALUES('2835','蓝田县','','2825','2824,2825','0','2835','','0','0','610122','');
INSERT INTO `web_shop_area` VALUES('2836','周至县','','2825','2824,2825','0','2836','','0','0','610124','');
INSERT INTO `web_shop_area` VALUES('2837','户县','','2825','2824,2825','0','2837','','0','0','610125','');
INSERT INTO `web_shop_area` VALUES('2838','高陵县','','2825','2824,2825','0','2838','','0','0','610126','');
INSERT INTO `web_shop_area` VALUES('2839','铜川市','','2824','2824','1','2840,2841,2842,2843','','0','0','610200','tongchuan');
INSERT INTO `web_shop_area` VALUES('2840','王益区','','2839','2824,2839','0','2840','','0','0','610202','');
INSERT INTO `web_shop_area` VALUES('2841','印台区','','2839','2824,2839','0','2841','','0','0','610203','');
INSERT INTO `web_shop_area` VALUES('2842','耀州区','','2839','2824,2839','0','2842','','0','0','610204','');
INSERT INTO `web_shop_area` VALUES('2843','宜君县','','2839','2824,2839','0','2843','','0','0','610222','');
INSERT INTO `web_shop_area` VALUES('2844','宝鸡市','','2824','2824','1','2845,2846,2847,2848,2849,2850,2851,2852,2853,2854,2855,2856','','0','0','610300','baoji');
INSERT INTO `web_shop_area` VALUES('2845','渭滨区','','2844','2824,2844','0','2845','','0','0','610302','');
INSERT INTO `web_shop_area` VALUES('2846','金台区','','2844','2824,2844','0','2846','','0','0','610303','');
INSERT INTO `web_shop_area` VALUES('2847','陈仓区','','2844','2824,2844','0','2847','','0','0','610304','');
INSERT INTO `web_shop_area` VALUES('2848','凤翔县','','2844','2824,2844','0','2848','','0','0','610322','');
INSERT INTO `web_shop_area` VALUES('2849','岐山县','','2844','2824,2844','0','2849','','0','0','610323','');
INSERT INTO `web_shop_area` VALUES('2850','扶风县','','2844','2824,2844','0','2850','','0','0','610324','');
INSERT INTO `web_shop_area` VALUES('2851','眉县','','2844','2824,2844','0','2851','','0','0','610326','');
INSERT INTO `web_shop_area` VALUES('2852','陇县','','2844','2824,2844','0','2852','','0','0','610327','');
INSERT INTO `web_shop_area` VALUES('2853','千阳县','','2844','2824,2844','0','2853','','0','0','610328','');
INSERT INTO `web_shop_area` VALUES('2854','麟游县','','2844','2824,2844','0','2854','','0','0','610329','');
INSERT INTO `web_shop_area` VALUES('2855','凤县','','2844','2824,2844','0','2855','','0','0','610330','');
INSERT INTO `web_shop_area` VALUES('2856','太白县','','2844','2824,2844','0','2856','','0','0','610331','');
INSERT INTO `web_shop_area` VALUES('2857','咸阳市','','2824','2824','1','2858,2859,2860,2861,2862,2863,2864,2865,2866,2867,2868,2869,2870,2871','','0','0','610400','xianyang');
INSERT INTO `web_shop_area` VALUES('2858','秦都区','','2857','2824,2857','0','2858','','0','0','610402','');
INSERT INTO `web_shop_area` VALUES('2859','杨陵区','','2857','2824,2857','0','2859','','0','0','610403','');
INSERT INTO `web_shop_area` VALUES('2860','渭城区','','2857','2824,2857','0','2860','','0','0','610404','');
INSERT INTO `web_shop_area` VALUES('2861','三原县','','2857','2824,2857','0','2861','','0','0','610422','');
INSERT INTO `web_shop_area` VALUES('2862','泾阳县','','2857','2824,2857','0','2862','','0','0','610423','');
INSERT INTO `web_shop_area` VALUES('2863','乾县','','2857','2824,2857','0','2863','','0','0','610424','');
INSERT INTO `web_shop_area` VALUES('2864','礼泉县','','2857','2824,2857','0','2864','','0','0','610425','');
INSERT INTO `web_shop_area` VALUES('2865','永寿县','','2857','2824,2857','0','2865','','0','0','610426','');
INSERT INTO `web_shop_area` VALUES('2866','彬县','','2857','2824,2857','0','2866','','0','0','610427','');
INSERT INTO `web_shop_area` VALUES('2867','长武县','','2857','2824,2857','0','2867','','0','0','610428','');
INSERT INTO `web_shop_area` VALUES('2868','旬邑县','','2857','2824,2857','0','2868','','0','0','610429','');
INSERT INTO `web_shop_area` VALUES('2869','淳化县','','2857','2824,2857','0','2869','','0','0','610430','');
INSERT INTO `web_shop_area` VALUES('2870','武功县','','2857','2824,2857','0','2870','','0','0','610431','');
INSERT INTO `web_shop_area` VALUES('2871','兴平市','','2857','2824,2857','0','2871','','0','0','610481','');
INSERT INTO `web_shop_area` VALUES('2872','渭南市','','2824','2824','1','2873,2874,2875,2876,2877,2878,2879,2880,2881,2882,2883','','0','0','610500','weinan');
INSERT INTO `web_shop_area` VALUES('2873','临渭区','','2872','2824,2872','0','2873','','0','0','610502','');
INSERT INTO `web_shop_area` VALUES('2874','华县','','2872','2824,2872','0','2874','','0','0','610521','');
INSERT INTO `web_shop_area` VALUES('2875','潼关县','','2872','2824,2872','0','2875','','0','0','610522','');
INSERT INTO `web_shop_area` VALUES('2876','大荔县','','2872','2824,2872','0','2876','','0','0','610523','');
INSERT INTO `web_shop_area` VALUES('2877','合阳县','','2872','2824,2872','0','2877','','0','0','610524','');
INSERT INTO `web_shop_area` VALUES('2878','澄城县','','2872','2824,2872','0','2878','','0','0','610525','');
INSERT INTO `web_shop_area` VALUES('2879','蒲城县','','2872','2824,2872','0','2879','','0','0','610526','');
INSERT INTO `web_shop_area` VALUES('2880','白水县','','2872','2824,2872','0','2880','','0','0','610527','');
INSERT INTO `web_shop_area` VALUES('2881','富平县','','2872','2824,2872','0','2881','','0','0','610528','');
INSERT INTO `web_shop_area` VALUES('2882','韩城市','','2872','2824,2872','0','2882','','0','0','610581','');
INSERT INTO `web_shop_area` VALUES('2883','华阴市','','2872','2824,2872','0','2883','','0','0','610582','');
INSERT INTO `web_shop_area` VALUES('2884','延安市','','2824','2824','1','2885,2886,2887,2888,2889,2890,2891,2892,2893,2894,2895,2896,2897','','0','0','610600','yanan');
INSERT INTO `web_shop_area` VALUES('2885','宝塔区','','2884','2824,2884','0','2885','','0','0','610602','');
INSERT INTO `web_shop_area` VALUES('2886','延长县','','2884','2824,2884','0','2886','','0','0','610621','');
INSERT INTO `web_shop_area` VALUES('2887','延川县','','2884','2824,2884','0','2887','','0','0','610622','');
INSERT INTO `web_shop_area` VALUES('2888','子长县','','2884','2824,2884','0','2888','','0','0','610623','');
INSERT INTO `web_shop_area` VALUES('2889','安塞县','','2884','2824,2884','0','2889','','0','0','610624','');
INSERT INTO `web_shop_area` VALUES('2890','志丹县','','2884','2824,2884','0','2890','','0','0','610625','');
INSERT INTO `web_shop_area` VALUES('2891','吴起县','','2884','2824,2884','0','2891','','0','0','610626','');
INSERT INTO `web_shop_area` VALUES('2892','甘泉县','','2884','2824,2884','0','2892','','0','0','610627','');
INSERT INTO `web_shop_area` VALUES('2893','富县','','2884','2824,2884','0','2893','','0','0','610628','');
INSERT INTO `web_shop_area` VALUES('2894','洛川县','','2884','2824,2884','0','2894','','0','0','610629','');
INSERT INTO `web_shop_area` VALUES('2895','宜川县','','2884','2824,2884','0','2895','','0','0','610630','');
INSERT INTO `web_shop_area` VALUES('2896','黄龙县','','2884','2824,2884','0','2896','','0','0','610631','');
INSERT INTO `web_shop_area` VALUES('2897','黄陵县','','2884','2824,2884','0','2897','','0','0','610632','');
INSERT INTO `web_shop_area` VALUES('2898','汉中市','','2824','2824','1','2899,2900,2901,2902,2903,2904,2905,2906,2907,2908,2909','','0','0','610700','hanzhong');
INSERT INTO `web_shop_area` VALUES('2899','汉台区','','2898','2824,2898','0','2899','','0','0','610702','');
INSERT INTO `web_shop_area` VALUES('2900','南郑县','','2898','2824,2898','0','2900','','0','0','610721','');
INSERT INTO `web_shop_area` VALUES('2901','城固县','','2898','2824,2898','0','2901','','0','0','610722','');
INSERT INTO `web_shop_area` VALUES('2902','洋县','','2898','2824,2898','0','2902','','0','0','610723','');
INSERT INTO `web_shop_area` VALUES('2903','西乡县','','2898','2824,2898','0','2903','','0','0','610724','');
INSERT INTO `web_shop_area` VALUES('2904','勉县','','2898','2824,2898','0','2904','','0','0','610725','');
INSERT INTO `web_shop_area` VALUES('2905','宁强县','','2898','2824,2898','0','2905','','0','0','610726','');
INSERT INTO `web_shop_area` VALUES('2906','略阳县','','2898','2824,2898','0','2906','','0','0','610727','');
INSERT INTO `web_shop_area` VALUES('2907','镇巴县','','2898','2824,2898','0','2907','','0','0','610728','');
INSERT INTO `web_shop_area` VALUES('2908','留坝县','','2898','2824,2898','0','2908','','0','0','610729','');
INSERT INTO `web_shop_area` VALUES('2909','佛坪县','','2898','2824,2898','0','2909','','0','0','610730','');
INSERT INTO `web_shop_area` VALUES('2910','榆林市','','2824','2824','1','2911,2912,2913,2914,2915,2916,2917,2918,2919,2920,2921,2922','','0','0','610800','yulinshi');
INSERT INTO `web_shop_area` VALUES('2911','榆阳区','','2910','2824,2910','0','2911','','0','0','610802','');
INSERT INTO `web_shop_area` VALUES('2912','神木县','','2910','2824,2910','0','2912','','0','0','610821','');
INSERT INTO `web_shop_area` VALUES('2913','府谷县','','2910','2824,2910','0','2913','','0','0','610822','');
INSERT INTO `web_shop_area` VALUES('2914','横山县','','2910','2824,2910','0','2914','','0','0','610823','');
INSERT INTO `web_shop_area` VALUES('2915','靖边县','','2910','2824,2910','0','2915','','0','0','610824','');
INSERT INTO `web_shop_area` VALUES('2916','定边县','','2910','2824,2910','0','2916','','0','0','610825','');
INSERT INTO `web_shop_area` VALUES('2917','绥德县','','2910','2824,2910','0','2917','','0','0','610826','');
INSERT INTO `web_shop_area` VALUES('2918','米脂县','','2910','2824,2910','0','2918','','0','0','610827','');
INSERT INTO `web_shop_area` VALUES('2919','佳县','','2910','2824,2910','0','2919','','0','0','610828','');
INSERT INTO `web_shop_area` VALUES('2920','吴堡县','','2910','2824,2910','0','2920','','0','0','610829','');
INSERT INTO `web_shop_area` VALUES('2921','清涧县','','2910','2824,2910','0','2921','','0','0','610830','');
INSERT INTO `web_shop_area` VALUES('2922','子洲县','','2910','2824,2910','0','2922','','0','0','610831','');
INSERT INTO `web_shop_area` VALUES('2923','安康市','','2824','2824','1','2924,2925,2926,2927,2928,2929,2930,2931,2932,2933','','0','0','610900','ankang');
INSERT INTO `web_shop_area` VALUES('2924','汉滨区','','2923','2824,2923','0','2924','','0','0','610902','');
INSERT INTO `web_shop_area` VALUES('2925','汉阴县','','2923','2824,2923','0','2925','','0','0','610921','');
INSERT INTO `web_shop_area` VALUES('2926','石泉县','','2923','2824,2923','0','2926','','0','0','610922','');
INSERT INTO `web_shop_area` VALUES('2927','宁陕县','','2923','2824,2923','0','2927','','0','0','610923','');
INSERT INTO `web_shop_area` VALUES('2928','紫阳县','','2923','2824,2923','0','2928','','0','0','610924','');
INSERT INTO `web_shop_area` VALUES('2929','岚皋县','','2923','2824,2923','0','2929','','0','0','610925','');
INSERT INTO `web_shop_area` VALUES('2930','平利县','','2923','2824,2923','0','2930','','0','0','610926','');
INSERT INTO `web_shop_area` VALUES('2931','镇坪县','','2923','2824,2923','0','2931','','0','0','610927','');
INSERT INTO `web_shop_area` VALUES('2932','旬阳县','','2923','2824,2923','0','2932','','0','0','610928','');
INSERT INTO `web_shop_area` VALUES('2933','白河县','','2923','2824,2923','0','2933','','0','0','610929','');
INSERT INTO `web_shop_area` VALUES('2934','商洛市','','2824','2824','1','2935,2936,2937,2938,2939,2940,2941','','0','0','611000','shangluo');
INSERT INTO `web_shop_area` VALUES('2935','商州区','','2934','2824,2934','0','2935','','0','0','611002','');
INSERT INTO `web_shop_area` VALUES('2936','洛南县','','2934','2824,2934','0','2936','','0','0','611021','');
INSERT INTO `web_shop_area` VALUES('2937','丹凤县','','2934','2824,2934','0','2937','','0','0','611022','');
INSERT INTO `web_shop_area` VALUES('2938','商南县','','2934','2824,2934','0','2938','','0','0','611023','');
INSERT INTO `web_shop_area` VALUES('2939','山阳县','','2934','2824,2934','0','2939','','0','0','611024','');
INSERT INTO `web_shop_area` VALUES('2940','镇安县','','2934','2824,2934','0','2940','','0','0','611025','');
INSERT INTO `web_shop_area` VALUES('2941','柞水县','','2934','2824,2934','0','2941','','0','0','611026','');
INSERT INTO `web_shop_area` VALUES('2942','甘肃','','0','0','1','2943,2952,2953,2956,2962,2970,2975,2982,2990,2998,3007,3015,3025,3034,2944,2945,2946,2947,2948,2949,2950,2951','','26','0','620000','gansu');
INSERT INTO `web_shop_area` VALUES('2943','兰州市','','2942','2942','1','2944,2945,2946,2947,2948,2949,2950,2951','','0','0','620100','lanzhou');
INSERT INTO `web_shop_area` VALUES('2944','城关区','','2943','2942,2943','0','2944','','0','0','620102','');
INSERT INTO `web_shop_area` VALUES('2945','七里河区','','2943','2942,2943','0','2945','','0','0','620103','');
INSERT INTO `web_shop_area` VALUES('2946','西固区','','2943','2942,2943','0','2946','','0','0','620104','');
INSERT INTO `web_shop_area` VALUES('2947','安宁区','','2943','2942,2943','0','2947','','0','0','620105','');
INSERT INTO `web_shop_area` VALUES('2948','红古区','','2943','2942,2943','0','2948','','0','0','620111','');
INSERT INTO `web_shop_area` VALUES('2949','永登县','','2943','2942,2943','0','2949','','0','0','620121','');
INSERT INTO `web_shop_area` VALUES('2950','皋兰县','','2943','2942,2943','0','2950','','0','0','620122','');
INSERT INTO `web_shop_area` VALUES('2951','榆中县','','2943','2942,2943','0','2951','','0','0','620123','');
INSERT INTO `web_shop_area` VALUES('2952','嘉峪关市','','2942','2942','0','2952','','0','0','620200','jiayuguan');
INSERT INTO `web_shop_area` VALUES('2953','金昌市','','2942','2942','1','2954,2955','','0','0','620300','jinchang');
INSERT INTO `web_shop_area` VALUES('2954','金川区','','2953','2942,2953','0','2954','','0','0','620302','');
INSERT INTO `web_shop_area` VALUES('2955','永昌县','','2953','2942,2953','0','2955','','0','0','620321','');
INSERT INTO `web_shop_area` VALUES('2956','白银市','','2942','2942','1','2957,2958,2959,2960,2961','','0','0','620400','baiyin');
INSERT INTO `web_shop_area` VALUES('2957','白银区','','2956','2942,2956','0','2957','','0','0','620402','');
INSERT INTO `web_shop_area` VALUES('2958','平川区','','2956','2942,2956','0','2958','','0','0','620403','');
INSERT INTO `web_shop_area` VALUES('2959','靖远县','','2956','2942,2956','0','2959','','0','0','620421','');
INSERT INTO `web_shop_area` VALUES('2960','会宁县','','2956','2942,2956','0','2960','','0','0','620422','');
INSERT INTO `web_shop_area` VALUES('2961','景泰县','','2956','2942,2956','0','2961','','0','0','620423','');
INSERT INTO `web_shop_area` VALUES('2962','天水市','','2942','2942','1','2963,2964,2965,2966,2967,2968,2969','','0','0','620500','tianshui');
INSERT INTO `web_shop_area` VALUES('2963','秦州区','','2962','2942,2962','0','2963','','0','0','620502','');
INSERT INTO `web_shop_area` VALUES('2964','麦积区','','2962','2942,2962','0','2964','','0','0','620503','');
INSERT INTO `web_shop_area` VALUES('2965','清水县','','2962','2942,2962','0','2965','','0','0','620521','');
INSERT INTO `web_shop_area` VALUES('2966','秦安县','','2962','2942,2962','0','2966','','0','0','620522','');
INSERT INTO `web_shop_area` VALUES('2967','甘谷县','','2962','2942,2962','0','2967','','0','0','620523','');
INSERT INTO `web_shop_area` VALUES('2968','武山县','','2962','2942,2962','0','2968','','0','0','620524','');
INSERT INTO `web_shop_area` VALUES('2969','张家川回族自治县','','2962','2942,2962','0','2969','','0','0','620525','');
INSERT INTO `web_shop_area` VALUES('2970','武威市','','2942','2942','1','2971,2972,2973,2974','','0','0','620600','wuwei');
INSERT INTO `web_shop_area` VALUES('2971','凉州区','','2970','2942,2970','0','2971','','0','0','620602','');
INSERT INTO `web_shop_area` VALUES('2972','民勤县','','2970','2942,2970','0','2972','','0','0','620621','');
INSERT INTO `web_shop_area` VALUES('2973','古浪县','','2970','2942,2970','0','2973','','0','0','620622','');
INSERT INTO `web_shop_area` VALUES('2974','天祝藏族自治县','','2970','2942,2970','0','2974','','0','0','620623','');
INSERT INTO `web_shop_area` VALUES('2975','张掖市','','2942','2942','1','2976,2977,2978,2979,2980,2981','','0','0','620700','zhangye');
INSERT INTO `web_shop_area` VALUES('2976','甘州区','','2975','2942,2975','0','2976','','0','0','620702','');
INSERT INTO `web_shop_area` VALUES('2977','肃南裕固族自治县','','2975','2942,2975','0','2977','','0','0','620721','');
INSERT INTO `web_shop_area` VALUES('2978','民乐县','','2975','2942,2975','0','2978','','0','0','620722','');
INSERT INTO `web_shop_area` VALUES('2979','临泽县','','2975','2942,2975','0','2979','','0','0','620723','');
INSERT INTO `web_shop_area` VALUES('2980','高台县','','2975','2942,2975','0','2980','','0','0','620724','');
INSERT INTO `web_shop_area` VALUES('2981','山丹县','','2975','2942,2975','0','2981','','0','0','620725','');
INSERT INTO `web_shop_area` VALUES('2982','平凉市','','2942','2942','1','2983,2984,2985,2986,2987,2988,2989','','0','0','620800','pingliang');
INSERT INTO `web_shop_area` VALUES('2983','崆峒区','','2982','2942,2982','0','2983','','0','0','620802','');
INSERT INTO `web_shop_area` VALUES('2984','泾川县','','2982','2942,2982','0','2984','','0','0','620821','');
INSERT INTO `web_shop_area` VALUES('2985','灵台县','','2982','2942,2982','0','2985','','0','0','620822','');
INSERT INTO `web_shop_area` VALUES('2986','崇信县','','2982','2942,2982','0','2986','','0','0','620823','');
INSERT INTO `web_shop_area` VALUES('2987','华亭县','','2982','2942,2982','0','2987','','0','0','620824','');
INSERT INTO `web_shop_area` VALUES('2988','庄浪县','','2982','2942,2982','0','2988','','0','0','620825','');
INSERT INTO `web_shop_area` VALUES('2989','静宁县','','2982','2942,2982','0','2989','','0','0','620826','');
INSERT INTO `web_shop_area` VALUES('2990','酒泉市','','2942','2942','1','2991,2992,2993,2994,2995,2996,2997','','0','0','620900','jiuquan');
INSERT INTO `web_shop_area` VALUES('2991','肃州区','','2990','2942,2990','0','2991','','0','0','620902','');
INSERT INTO `web_shop_area` VALUES('2992','金塔县','','2990','2942,2990','0','2992','','0','0','620921','');
INSERT INTO `web_shop_area` VALUES('2993','瓜州县','','2990','2942,2990','0','2993','','0','0','620922','');
INSERT INTO `web_shop_area` VALUES('2994','肃北蒙古族自治县','','2990','2942,2990','0','2994','','0','0','620923','');
INSERT INTO `web_shop_area` VALUES('2995','阿克塞','','2990','2942,2990','0','2995','','0','0','620924','');
INSERT INTO `web_shop_area` VALUES('2996','玉门市','','2990','2942,2990','0','2996','','0','0','620981','');
INSERT INTO `web_shop_area` VALUES('2997','敦煌市','','2990','2942,2990','0','2997','','0','0','620982','');
INSERT INTO `web_shop_area` VALUES('2998','庆阳市','','2942','2942','1','2999,3000,3001,3002,3003,3004,3005,3006','','0','0','621000','qingyang');
INSERT INTO `web_shop_area` VALUES('2999','西峰区','','2998','2942,2998','0','2999','','0','0','621002','');
INSERT INTO `web_shop_area` VALUES('3000','庆城县','','2998','2942,2998','0','3000','','0','0','621021','');
INSERT INTO `web_shop_area` VALUES('3001','环县','','2998','2942,2998','0','3001','','0','0','621022','');
INSERT INTO `web_shop_area` VALUES('3002','华池县','','2998','2942,2998','0','3002','','0','0','621023','');
INSERT INTO `web_shop_area` VALUES('3003','合水县','','2998','2942,2998','0','3003','','0','0','621024','');
INSERT INTO `web_shop_area` VALUES('3004','正宁县','','2998','2942,2998','0','3004','','0','0','621025','');
INSERT INTO `web_shop_area` VALUES('3005','宁县','','2998','2942,2998','0','3005','','0','0','621026','');
INSERT INTO `web_shop_area` VALUES('3006','镇原县','','2998','2942,2998','0','3006','','0','0','621027','');
INSERT INTO `web_shop_area` VALUES('3007','定西市','','2942','2942','1','3008,3009,3010,3011,3012,3013,3014','','0','0','621100','dingxi');
INSERT INTO `web_shop_area` VALUES('3008','安定区','','3007','2942,3007','0','3008','','0','0','621102','');
INSERT INTO `web_shop_area` VALUES('3009','通渭县','','3007','2942,3007','0','3009','','0','0','621121','');
INSERT INTO `web_shop_area` VALUES('3010','陇西县','','3007','2942,3007','0','3010','','0','0','621122','');
INSERT INTO `web_shop_area` VALUES('3011','渭源县','','3007','2942,3007','0','3011','','0','0','621123','');
INSERT INTO `web_shop_area` VALUES('3012','临洮县','','3007','2942,3007','0','3012','','0','0','621124','');
INSERT INTO `web_shop_area` VALUES('3013','漳县','','3007','2942,3007','0','3013','','0','0','621125','');
INSERT INTO `web_shop_area` VALUES('3014','岷县','','3007','2942,3007','0','3014','','0','0','621126','');
INSERT INTO `web_shop_area` VALUES('3015','陇南市','','2942','2942','1','3016,3017,3018,3019,3020,3021,3022,3023,3024','','0','0','621200','longnan');
INSERT INTO `web_shop_area` VALUES('3016','武都区','','3015','2942,3015','0','3016','','0','0','621202','');
INSERT INTO `web_shop_area` VALUES('3017','成县','','3015','2942,3015','0','3017','','0','0','621221','');
INSERT INTO `web_shop_area` VALUES('3018','文县','','3015','2942,3015','0','3018','','0','0','621222','');
INSERT INTO `web_shop_area` VALUES('3019','宕昌县','','3015','2942,3015','0','3019','','0','0','621223','');
INSERT INTO `web_shop_area` VALUES('3020','康县','','3015','2942,3015','0','3020','','0','0','621224','');
INSERT INTO `web_shop_area` VALUES('3021','西和县','','3015','2942,3015','0','3021','','0','0','621225','');
INSERT INTO `web_shop_area` VALUES('3022','礼县','','3015','2942,3015','0','3022','','0','0','621226','');
INSERT INTO `web_shop_area` VALUES('3023','徽县','','3015','2942,3015','0','3023','','0','0','621227','');
INSERT INTO `web_shop_area` VALUES('3024','两当县','','3015','2942,3015','0','3024','','0','0','621228','');
INSERT INTO `web_shop_area` VALUES('3025','临夏','','2942','2942','1','3026,3027,3028,3029,3030,3031,3032,3033','','0','0','622900','linxiazizhizhou');
INSERT INTO `web_shop_area` VALUES('3026','临夏市','','3025','2942,3025','0','3026','','0','0','622901','');
INSERT INTO `web_shop_area` VALUES('3027','临夏县','','3025','2942,3025','0','3027','','0','0','622921','');
INSERT INTO `web_shop_area` VALUES('3028','康乐县','','3025','2942,3025','0','3028','','0','0','622922','');
INSERT INTO `web_shop_area` VALUES('3029','永靖县','','3025','2942,3025','0','3029','','0','0','622923','');
INSERT INTO `web_shop_area` VALUES('3030','广河县','','3025','2942,3025','0','3030','','0','0','622924','');
INSERT INTO `web_shop_area` VALUES('3031','和政县','','3025','2942,3025','0','3031','','0','0','622925','');
INSERT INTO `web_shop_area` VALUES('3032','东乡族自治县','','3025','2942,3025','0','3032','','0','0','622926','');
INSERT INTO `web_shop_area` VALUES('3033','积石山保安族东乡族撒拉族自治县','','3025','2942,3025','0','3033','','0','0','622927','');
INSERT INTO `web_shop_area` VALUES('3034','甘南','','2942','2942','1','3035,3036,3037,3038,3039,3040,3041,3042','','0','0','623000','gannan');
INSERT INTO `web_shop_area` VALUES('3035','合作市','','3034','2942,3034','0','3035','','0','0','623001','');
INSERT INTO `web_shop_area` VALUES('3036','临潭县','','3034','2942,3034','0','3036','','0','0','623021','');
INSERT INTO `web_shop_area` VALUES('3037','卓尼县','','3034','2942,3034','0','3037','','0','0','623022','');
INSERT INTO `web_shop_area` VALUES('3038','舟曲县','','3034','2942,3034','0','3038','','0','0','623023','');
INSERT INTO `web_shop_area` VALUES('3039','迭部县','','3034','2942,3034','0','3039','','0','0','623024','');
INSERT INTO `web_shop_area` VALUES('3040','玛曲县','','3034','2942,3034','0','3040','','0','0','623025','');
INSERT INTO `web_shop_area` VALUES('3041','碌曲县','','3034','2942,3034','0','3041','','0','0','623026','');
INSERT INTO `web_shop_area` VALUES('3042','夏河县','','3034','2942,3034','0','3042','','0','0','623027','');
INSERT INTO `web_shop_area` VALUES('3043','青海','','0','0','1','3044,3052,3059,3064,3069,3075,3082,3089,3045,3046,3047,3048,3049,3050,3051','','30','0','630000','qinghai');
INSERT INTO `web_shop_area` VALUES('3044','西宁市','','3043','3043','1','3045,3046,3047,3048,3049,3050,3051','','0','0','630100','xining');
INSERT INTO `web_shop_area` VALUES('3045','城东区','','3044','3043,3044','0','3045','','0','0','630102','');
INSERT INTO `web_shop_area` VALUES('3046','城中区','','3044','3043,3044','0','3046','','0','0','630103','');
INSERT INTO `web_shop_area` VALUES('3047','城西区','','3044','3043,3044','0','3047','','0','0','630104','');
INSERT INTO `web_shop_area` VALUES('3048','城北区','','3044','3043,3044','0','3048','','0','0','630105','');
INSERT INTO `web_shop_area` VALUES('3049','大通回族土族自治县','','3044','3043,3044','0','3049','','0','0','630121','');
INSERT INTO `web_shop_area` VALUES('3050','湟中县','','3044','3043,3044','0','3050','','0','0','630122','');
INSERT INTO `web_shop_area` VALUES('3051','湟源县','','3044','3043,3044','0','3051','','0','0','630123','');
INSERT INTO `web_shop_area` VALUES('3052','海东','','3043','3043','1','3053,3054,3055,3056,3057,3058','','0','0','632100','haidongdi');
INSERT INTO `web_shop_area` VALUES('3053','平安县','','3052','3043,3052','0','3053','','0','0','632121','');
INSERT INTO `web_shop_area` VALUES('3054','民和回族土族自治县','','3052','3043,3052','0','3054','','0','0','632122','');
INSERT INTO `web_shop_area` VALUES('3055','乐都县','','3052','3043,3052','0','3055','','0','0','632123','');
INSERT INTO `web_shop_area` VALUES('3056','互助土族自治县','','3052','3043,3052','0','3056','','0','0','632126','');
INSERT INTO `web_shop_area` VALUES('3057','化隆回族自治县','','3052','3043,3052','0','3057','','0','0','632127','');
INSERT INTO `web_shop_area` VALUES('3058','循化撒拉族自治县','','3052','3043,3052','0','3058','','0','0','632128','');
INSERT INTO `web_shop_area` VALUES('3059','海北','','3043','3043','1','3060,3061,3062,3063','','0','0','632200','haibeizizhizhou');
INSERT INTO `web_shop_area` VALUES('3060','门源回族自治县','','3059','3043,3059','0','3060','','0','0','632221','');
INSERT INTO `web_shop_area` VALUES('3061','祁连县','','3059','3043,3059','0','3061','','0','0','632222','');
INSERT INTO `web_shop_area` VALUES('3062','海晏县','','3059','3043,3059','0','3062','','0','0','632223','');
INSERT INTO `web_shop_area` VALUES('3063','刚察县','','3059','3043,3059','0','3063','','0','0','632224','');
INSERT INTO `web_shop_area` VALUES('3064','黄南藏族','','3043','3043','1','3065,3066,3067,3068','','0','0','632300','huangnan');
INSERT INTO `web_shop_area` VALUES('3065','同仁县','','3064','3043,3064','0','3065','','0','0','632321','');
INSERT INTO `web_shop_area` VALUES('3066','尖扎县','','3064','3043,3064','0','3066','','0','0','632322','');
INSERT INTO `web_shop_area` VALUES('3067','泽库县','','3064','3043,3064','0','3067','','0','0','632323','');
INSERT INTO `web_shop_area` VALUES('3068','河南蒙古族自治县','','3064','3043,3064','0','3068','','0','0','632324','');
INSERT INTO `web_shop_area` VALUES('3069','海南藏族','','3043','3043','1','3070,3071,3072,3073,3074','','0','0','632500','hainanzizhizhou');
INSERT INTO `web_shop_area` VALUES('3070','共和县','','3069','3043,3069','0','3070','','0','0','632521','');
INSERT INTO `web_shop_area` VALUES('3071','同德县','','3069','3043,3069','0','3071','','0','0','632522','');
INSERT INTO `web_shop_area` VALUES('3072','贵德县','','3069','3043,3069','0','3072','','0','0','632523','');
INSERT INTO `web_shop_area` VALUES('3073','兴海县','','3069','3043,3069','0','3073','','0','0','632524','');
INSERT INTO `web_shop_area` VALUES('3074','贵南县','','3069','3043,3069','0','3074','','0','0','632525','');
INSERT INTO `web_shop_area` VALUES('3075','果洛','','3043','3043','1','3076,3077,3078,3079,3080,3081','','0','0','632600','guoluo');
INSERT INTO `web_shop_area` VALUES('3076','玛沁县','','3075','3043,3075','0','3076','','0','0','632621','');
INSERT INTO `web_shop_area` VALUES('3077','班玛县','','3075','3043,3075','0','3077','','0','0','632622','');
INSERT INTO `web_shop_area` VALUES('3078','甘德县','','3075','3043,3075','0','3078','','0','0','632623','');
INSERT INTO `web_shop_area` VALUES('3079','达日县','','3075','3043,3075','0','3079','','0','0','632624','');
INSERT INTO `web_shop_area` VALUES('3080','久治县','','3075','3043,3075','0','3080','','0','0','632625','');
INSERT INTO `web_shop_area` VALUES('3081','玛多县','','3075','3043,3075','0','3081','','0','0','632626','');
INSERT INTO `web_shop_area` VALUES('3082','玉树','','3043','3043','1','3083,3084,3085,3086,3087,3088','','0','0','632700','yushuzizhizhou');
INSERT INTO `web_shop_area` VALUES('3083','玉树县','','3082','3043,3082','0','3083','','0','0','632721','');
INSERT INTO `web_shop_area` VALUES('3084','杂多县','','3082','3043,3082','0','3084','','0','0','632722','');
INSERT INTO `web_shop_area` VALUES('3085','称多县','','3082','3043,3082','0','3085','','0','0','632723','');
INSERT INTO `web_shop_area` VALUES('3086','治多县','','3082','3043,3082','0','3086','','0','0','632724','');
INSERT INTO `web_shop_area` VALUES('3087','囊谦县','','3082','3043,3082','0','3087','','0','0','632725','');
INSERT INTO `web_shop_area` VALUES('3088','曲麻莱县','','3082','3043,3082','0','3088','','0','0','632726','');
INSERT INTO `web_shop_area` VALUES('3089','海西蒙古','','3043','3043','1','3090,3091,3092,3093,3094','','0','0','632800','haixi');
INSERT INTO `web_shop_area` VALUES('3090','格尔木市','','3089','3043,3089','0','3090','','0','0','632801','');
INSERT INTO `web_shop_area` VALUES('3091','德令哈市','','3089','3043,3089','0','3091','','0','0','632802','');
INSERT INTO `web_shop_area` VALUES('3092','乌兰县','','3089','3043,3089','0','3092','','0','0','632821','');
INSERT INTO `web_shop_area` VALUES('3093','都兰县','','3089','3043,3089','0','3093','','0','0','632822','');
INSERT INTO `web_shop_area` VALUES('3094','天峻县','','3089','3043,3089','0','3094','','0','0','632823','');
INSERT INTO `web_shop_area` VALUES('3095','宁夏','','0','0','1','3096,3103,3107,3113,3119,3097,3098,3099,3100,3101,3102','','28','0','640000','ningxia');
INSERT INTO `web_shop_area` VALUES('3096','银川市','','3095','3095','1','3097,3098,3099,3100,3101,3102','','0','0','640100','yinchuan');
INSERT INTO `web_shop_area` VALUES('3097','兴庆区','','3096','3095,3096','0','3097','','0','0','640104','');
INSERT INTO `web_shop_area` VALUES('3098','西夏区','','3096','3095,3096','0','3098','','0','0','640105','');
INSERT INTO `web_shop_area` VALUES('3099','金凤区','','3096','3095,3096','0','3099','','0','0','640106','');
INSERT INTO `web_shop_area` VALUES('3100','永宁县','','3096','3095,3096','0','3100','','0','0','640121','');
INSERT INTO `web_shop_area` VALUES('3101','贺兰县','','3096','3095,3096','0','3101','','0','0','640122','');
INSERT INTO `web_shop_area` VALUES('3102','灵武市','','3096','3095,3096','0','3102','','0','0','640181','');
INSERT INTO `web_shop_area` VALUES('3103','石嘴山','','3095','3095','1','3104,3105,3106','','0','0','640200','shizuishan');
INSERT INTO `web_shop_area` VALUES('3104','大武口区','','3103','3095,3103','0','3104','','0','0','640202','');
INSERT INTO `web_shop_area` VALUES('3105','惠农区','','3103','3095,3103','0','3105','','0','0','640205','');
INSERT INTO `web_shop_area` VALUES('3106','平罗县','','3103','3095,3103','0','3106','','0','0','640221','');
INSERT INTO `web_shop_area` VALUES('3107','吴忠市','','3095','3095','1','3108,3109,3110,3111,3112','','0','0','640300','wuzhong');
INSERT INTO `web_shop_area` VALUES('3108','利通区','','3107','3095,3107','0','3108','','0','0','640302','');
INSERT INTO `web_shop_area` VALUES('3109','红寺堡区','','3107','3095,3107','0','3109','','0','0','640303','');
INSERT INTO `web_shop_area` VALUES('3110','盐池县','','3107','3095,3107','0','3110','','0','0','640323','');
INSERT INTO `web_shop_area` VALUES('3111','同心县','','3107','3095,3107','0','3111','','0','0','640324','');
INSERT INTO `web_shop_area` VALUES('3112','青铜峡市','','3107','3095,3107','0','3112','','0','0','640381','');
INSERT INTO `web_shop_area` VALUES('3113','固原市','','3095','3095','1','3114,3115,3116,3117,3118','','0','0','640400','guyuan');
INSERT INTO `web_shop_area` VALUES('3114','原州区','','3113','3095,3113','0','3114','','0','0','640402','');
INSERT INTO `web_shop_area` VALUES('3115','西吉县','','3113','3095,3113','0','3115','','0','0','640422','');
INSERT INTO `web_shop_area` VALUES('3116','隆德县','','3113','3095,3113','0','3116','','0','0','640423','');
INSERT INTO `web_shop_area` VALUES('3117','泾源县','','3113','3095,3113','0','3117','','0','0','640424','');
INSERT INTO `web_shop_area` VALUES('3118','彭阳县','','3113','3095,3113','0','3118','','0','0','640425','');
INSERT INTO `web_shop_area` VALUES('3119','中卫市','','3095','3095','1','3120,3121,3122','','0','0','640500','zhongwei');
INSERT INTO `web_shop_area` VALUES('3120','沙坡头区','','3119','3095,3119','0','3120','','0','0','640502','');
INSERT INTO `web_shop_area` VALUES('3121','中宁县','','3119','3095,3119','0','3121','','0','0','640521','');
INSERT INTO `web_shop_area` VALUES('3122','海原县','','3119','3095,3119','0','3122','','0','0','640522','');
INSERT INTO `web_shop_area` VALUES('3123','新疆','','0','0','1','3124,3133,3138,3142,3146,3154,3158,3168,3178,3183,3196,3205,3216,3224,3232,3125,3126,3127,3128,3129,3130,3131,3132,3233,3234,3235,3236','','29','0','650000','xinjiang');
INSERT INTO `web_shop_area` VALUES('3124','乌鲁木齐','','3123','3123','1','3125,3126,3127,3128,3129,3130,3131,3132','','0','0','650100','wulumuqi');
INSERT INTO `web_shop_area` VALUES('3125','天山区','','3124','3123,3124','0','3125','','0','0','650102','tianshan');
INSERT INTO `web_shop_area` VALUES('3126','沙依巴克区','','3124','3123,3124','0','3126','','0','0','650103','shayibake');
INSERT INTO `web_shop_area` VALUES('3127','新市区','','3124','3123,3124','0','3127','','0','0','650104','xinshi');
INSERT INTO `web_shop_area` VALUES('3128','水磨沟区','','3124','3123,3124','0','3128','','0','0','650105','shuimogou');
INSERT INTO `web_shop_area` VALUES('3129','头屯河区','','3124','3123,3124','0','3129','','0','0','650106','toutunhe');
INSERT INTO `web_shop_area` VALUES('3130','达坂城区','','3124','3123,3124','0','3130','','0','0','650107','dabancheng');
INSERT INTO `web_shop_area` VALUES('3131','米东区','','3124','3123,3124','0','3131','','0','0','650109','midongqu');
INSERT INTO `web_shop_area` VALUES('3132','乌鲁木齐县','','3124','3123,3124','0','3132','','0','0','650121','wulumuqixian');
INSERT INTO `web_shop_area` VALUES('3133','克拉玛依','','3123','3123','1','3134,3135,3136,3137','','0','0','650200','kelamayi');
INSERT INTO `web_shop_area` VALUES('3134','独山子区','','3133','3123,3133','0','3134','','0','0','650202','');
INSERT INTO `web_shop_area` VALUES('3135','克拉玛依区','','3133','3123,3133','0','3135','','0','0','650203','');
INSERT INTO `web_shop_area` VALUES('3136','白碱滩区','','3133','3123,3133','0','3136','','0','0','650204','');
INSERT INTO `web_shop_area` VALUES('3137','乌尔禾区','','3133','3123,3133','0','3137','','0','0','650205','');
INSERT INTO `web_shop_area` VALUES('3138','吐鲁番','','3123','3123','1','3139,3140,3141','','0','0','652100','tulufandi');
INSERT INTO `web_shop_area` VALUES('3139','吐鲁番市','','3138','3123,3138','0','3139','','0','0','652101','');
INSERT INTO `web_shop_area` VALUES('3140','鄯善县','','3138','3123,3138','0','3140','','0','0','652122','');
INSERT INTO `web_shop_area` VALUES('3141','托克逊县','','3138','3123,3138','0','3141','','0','0','652123','');
INSERT INTO `web_shop_area` VALUES('3142','哈密','','3123','3123','1','3143,3144,3145','','0','0','652200','hamidi');
INSERT INTO `web_shop_area` VALUES('3143','哈密市','','3142','3123,3142','0','3143','','0','0','652201','');
INSERT INTO `web_shop_area` VALUES('3144','巴里坤哈萨克自治县','','3142','3123,3142','0','3144','','0','0','652222','');
INSERT INTO `web_shop_area` VALUES('3145','伊吾县','','3142','3123,3142','0','3145','','0','0','652223','');
INSERT INTO `web_shop_area` VALUES('3146','昌吉','','3123','3123','1','3147,3148,3149,3150,3151,3152,3153','','0','0','652300','changji');
INSERT INTO `web_shop_area` VALUES('3147','昌吉市','','3146','3123,3146','0','3147','','0','0','652301','');
INSERT INTO `web_shop_area` VALUES('3148','阜康市','','3146','3123,3146','0','3148','','0','0','652302','');
INSERT INTO `web_shop_area` VALUES('3149','呼图壁县','','3146','3123,3146','0','3149','','0','0','652323','');
INSERT INTO `web_shop_area` VALUES('3150','玛纳斯县','','3146','3123,3146','0','3150','','0','0','652324','');
INSERT INTO `web_shop_area` VALUES('3151','奇台县','','3146','3123,3146','0','3151','','0','0','652325','');
INSERT INTO `web_shop_area` VALUES('3152','吉木萨尔县','','3146','3123,3146','0','3152','','0','0','652327','');
INSERT INTO `web_shop_area` VALUES('3153','木垒哈萨克自治县','','3146','3123,3146','0','3153','','0','0','652328','');
INSERT INTO `web_shop_area` VALUES('3154','博尔塔拉','','3123','3123','1','3155,3156,3157','','0','0','652700','boertala');
INSERT INTO `web_shop_area` VALUES('3155','博乐市','','3154','3123,3154','0','3155','','0','0','652701','');
INSERT INTO `web_shop_area` VALUES('3156','精河县','','3154','3123,3154','0','3156','','0','0','652722','');
INSERT INTO `web_shop_area` VALUES('3157','温泉县','','3154','3123,3154','0','3157','','0','0','652723','');
INSERT INTO `web_shop_area` VALUES('3158','巴音郭楞','','3123','3123','1','3159,3160,3161,3162,3163,3164,3165,3166,3167','','0','0','652800','bayin');
INSERT INTO `web_shop_area` VALUES('3159','库尔勒市','','3158','3123,3158','0','3159','','0','0','652801','');
INSERT INTO `web_shop_area` VALUES('3160','轮台县','','3158','3123,3158','0','3160','','0','0','652822','');
INSERT INTO `web_shop_area` VALUES('3161','尉犁县','','3158','3123,3158','0','3161','','0','0','652823','');
INSERT INTO `web_shop_area` VALUES('3162','若羌县','','3158','3123,3158','0','3162','','0','0','652824','');
INSERT INTO `web_shop_area` VALUES('3163','且末县','','3158','3123,3158','0','3163','','0','0','652825','');
INSERT INTO `web_shop_area` VALUES('3164','焉耆回族自治县','','3158','3123,3158','0','3164','','0','0','652826','');
INSERT INTO `web_shop_area` VALUES('3165','和静县','','3158','3123,3158','0','3165','','0','0','652827','');
INSERT INTO `web_shop_area` VALUES('3166','和硕县','','3158','3123,3158','0','3166','','0','0','652828','');
INSERT INTO `web_shop_area` VALUES('3167','博湖县','','3158','3123,3158','0','3167','','0','0','652829','');
INSERT INTO `web_shop_area` VALUES('3168','阿克苏','','3123','3123','1','3169,3170,3171,3172,3173,3174,3175,3176,3177','','0','0','652900','akesudi');
INSERT INTO `web_shop_area` VALUES('3169','阿克苏','','3168','3123,3168','0','3169','','0','0','652901','');
INSERT INTO `web_shop_area` VALUES('3170','温宿县','','3168','3123,3168','0','3170','','0','0','652922','');
INSERT INTO `web_shop_area` VALUES('3171','库车县','','3168','3123,3168','0','3171','','0','0','652923','');
INSERT INTO `web_shop_area` VALUES('3172','沙雅县','','3168','3123,3168','0','3172','','0','0','652924','');
INSERT INTO `web_shop_area` VALUES('3173','新和县','','3168','3123,3168','0','3173','','0','0','652925','');
INSERT INTO `web_shop_area` VALUES('3174','拜城县','','3168','3123,3168','0','3174','','0','0','652926','');
INSERT INTO `web_shop_area` VALUES('3175','乌什县','','3168','3123,3168','0','3175','','0','0','652927','');
INSERT INTO `web_shop_area` VALUES('3176','阿瓦提','','3168','3123,3168','0','3176','','0','0','652928','');
INSERT INTO `web_shop_area` VALUES('3177','柯坪县','','3168','3123,3168','0','3177','','0','0','652929','');
INSERT INTO `web_shop_area` VALUES('3178','克孜勒苏','','3123','3123','1','3179,3180,3181,3182','','0','0','653000','kezilesu');
INSERT INTO `web_shop_area` VALUES('3179','阿图什','','3178','3123,3178','0','3179','','0','0','653001','');
INSERT INTO `web_shop_area` VALUES('3180','阿克陶','','3178','3123,3178','0','3180','','0','0','653022','');
INSERT INTO `web_shop_area` VALUES('3181','阿合奇','','3178','3123,3178','0','3181','','0','0','653023','');
INSERT INTO `web_shop_area` VALUES('3182','乌恰县','','3178','3123,3178','0','3182','','0','0','653024','');
INSERT INTO `web_shop_area` VALUES('3183','喀什地区','','3123','3123','1','3184,3185,3186,3187,3188,3189,3190,3191,3192,3193,3194,3195','','0','0','653100','kashidi');
INSERT INTO `web_shop_area` VALUES('3184','喀什市','','3183','3123,3183','0','3184','','0','0','653101','');
INSERT INTO `web_shop_area` VALUES('3185','疏附县','','3183','3123,3183','0','3185','','0','0','653121','');
INSERT INTO `web_shop_area` VALUES('3186','疏勒县','','3183','3123,3183','0','3186','','0','0','653122','');
INSERT INTO `web_shop_area` VALUES('3187','英吉沙县','','3183','3123,3183','0','3187','','0','0','653123','');
INSERT INTO `web_shop_area` VALUES('3188','泽普县','','3183','3123,3183','0','3188','','0','0','653124','');
INSERT INTO `web_shop_area` VALUES('3189','莎车县','','3183','3123,3183','0','3189','','0','0','653125','');
INSERT INTO `web_shop_area` VALUES('3190','叶城县','','3183','3123,3183','0','3190','','0','0','653126','');
INSERT INTO `web_shop_area` VALUES('3191','麦盖提县','','3183','3123,3183','0','3191','','0','0','653127','');
INSERT INTO `web_shop_area` VALUES('3192','岳普湖县','','3183','3123,3183','0','3192','','0','0','653128','');
INSERT INTO `web_shop_area` VALUES('3193','伽师县','','3183','3123,3183','0','3193','','0','0','653129','');
INSERT INTO `web_shop_area` VALUES('3194','巴楚县','','3183','3123,3183','0','3194','','0','0','653130','');
INSERT INTO `web_shop_area` VALUES('3195','塔什库尔干塔吉克自治县','','3183','3123,3183','0','3195','','0','0','653131','');
INSERT INTO `web_shop_area` VALUES('3196','和田','','3123','3123','1','3197,3198,3199,3200,3201,3202,3203,3204','','0','0','653200','hetiandi');
INSERT INTO `web_shop_area` VALUES('3197','和田市','','3196','3123,3196','0','3197','','0','0','653201','');
INSERT INTO `web_shop_area` VALUES('3198','和田县','','3196','3123,3196','0','3198','','0','0','653221','');
INSERT INTO `web_shop_area` VALUES('3199','墨玉县','','3196','3123,3196','0','3199','','0','0','653222','');
INSERT INTO `web_shop_area` VALUES('3200','皮山县','','3196','3123,3196','0','3200','','0','0','653223','');
INSERT INTO `web_shop_area` VALUES('3201','洛浦县','','3196','3123,3196','0','3201','','0','0','653224','');
INSERT INTO `web_shop_area` VALUES('3202','策勒县','','3196','3123,3196','0','3202','','0','0','653225','');
INSERT INTO `web_shop_area` VALUES('3203','于田县','','3196','3123,3196','0','3203','','0','0','653226','');
INSERT INTO `web_shop_area` VALUES('3204','民丰县','','3196','3123,3196','0','3204','','0','0','653227','');
INSERT INTO `web_shop_area` VALUES('3205','伊犁','','3123','3123','1','3206,3207,3208,3209,3210,3211,3212,3213,3214,3215','','0','0','654000','yilizizhizhou');
INSERT INTO `web_shop_area` VALUES('3206','伊宁市','','3205','3123,3205','0','3206','','0','0','654002','');
INSERT INTO `web_shop_area` VALUES('3207','奎屯市','','3205','3123,3205','0','3207','','0','0','654003','');
INSERT INTO `web_shop_area` VALUES('3208','伊宁县','','3205','3123,3205','0','3208','','0','0','654021','');
INSERT INTO `web_shop_area` VALUES('3209','察布查尔锡伯自治县','','3205','3123,3205','0','3209','','0','0','654022','');
INSERT INTO `web_shop_area` VALUES('3210','霍城县','','3205','3123,3205','0','3210','','0','0','654023','');
INSERT INTO `web_shop_area` VALUES('3211','巩留县','','3205','3123,3205','0','3211','','0','0','654024','');
INSERT INTO `web_shop_area` VALUES('3212','新源县','','3205','3123,3205','0','3212','','0','0','654025','');
INSERT INTO `web_shop_area` VALUES('3213','昭苏县','','3205','3123,3205','0','3213','','0','0','654026','');
INSERT INTO `web_shop_area` VALUES('3214','特克斯县','','3205','3123,3205','0','3214','','0','0','654027','');
INSERT INTO `web_shop_area` VALUES('3215','尼勒克县','','3205','3123,3205','0','3215','','0','0','654028','');
INSERT INTO `web_shop_area` VALUES('3216','塔城','','3123','3123','1','3217,3218,3219,3220,3221,3222,3223','','0','0','654200','tachengdi');
INSERT INTO `web_shop_area` VALUES('3217','塔城市','','3216','3123,3216','0','3217','','0','0','654201','');
INSERT INTO `web_shop_area` VALUES('3218','乌苏市','','3216','3123,3216','0','3218','','0','0','654202','');
INSERT INTO `web_shop_area` VALUES('3219','额敏县','','3216','3123,3216','0','3219','','0','0','654221','');
INSERT INTO `web_shop_area` VALUES('3220','沙湾县','','3216','3123,3216','0','3220','','0','0','654223','');
INSERT INTO `web_shop_area` VALUES('3221','托里县','','3216','3123,3216','0','3221','','0','0','654224','');
INSERT INTO `web_shop_area` VALUES('3222','裕民县','','3216','3123,3216','0','3222','','0','0','654225','');
INSERT INTO `web_shop_area` VALUES('3223','和布克赛尔蒙古自治县','','3216','3123,3216','0','3223','','0','0','654226','');
INSERT INTO `web_shop_area` VALUES('3224','阿勒泰','','3123','3123','1','3225,3226,3227,3228,3229,3230,3231','','0','0','654300','aletaidi');
INSERT INTO `web_shop_area` VALUES('3225','阿勒泰','','3224','3123,3224','0','3225','','0','0','654301','');
INSERT INTO `web_shop_area` VALUES('3226','布尔津县','','3224','3123,3224','0','3226','','0','0','654321','');
INSERT INTO `web_shop_area` VALUES('3227','富蕴县','','3224','3123,3224','0','3227','','0','0','654322','');
INSERT INTO `web_shop_area` VALUES('3228','福海县','','3224','3123,3224','0','3228','','0','0','654323','');
INSERT INTO `web_shop_area` VALUES('3229','哈巴河县','','3224','3123,3224','0','3229','','0','0','654324','');
INSERT INTO `web_shop_area` VALUES('3230','青河县','','3224','3123,3224','0','3230','','0','0','654325','');
INSERT INTO `web_shop_area` VALUES('3231','吉木乃县','','3224','3123,3224','0','3231','','0','0','654326','');
INSERT INTO `web_shop_area` VALUES('3233','石河子市','','3123','3123','0','3233','','0','0','659001','shihezi');
INSERT INTO `web_shop_area` VALUES('3234','阿拉尔','','3123','3123','0','3234','','0','0','659002','alaer');
INSERT INTO `web_shop_area` VALUES('3235','图木舒克市','','3123','3123','0','3235','','0','0','659003','tumushuke');
INSERT INTO `web_shop_area` VALUES('3236','五家渠市','','3123','3123','0','3236','','0','0','659004','wujiaqu');
INSERT INTO `web_shop_area` VALUES('3237','台湾','','0','0','0','3237,3240,3241,3242,3243,3244','','31','0','0','taiwan');
INSERT INTO `web_shop_area` VALUES('3238','香港','','0','0','0','3238','','32','0','0','hongkong');
INSERT INTO `web_shop_area` VALUES('3239','澳门','','0','0','0','3239','','33','0','0','aomen');
INSERT INTO `web_shop_area` VALUES('3240','彰化县',' ','3237','3237','0','3237',' ','0','0','0','zhanghua');
INSERT INTO `web_shop_area` VALUES('3241','台北市','','3237','3237','0','3237','','0','0','0','taibei');
INSERT INTO `web_shop_area` VALUES('3242','台中市','','3237','3237','0','3237','','0','0','0','taizhong');
INSERT INTO `web_shop_area` VALUES('3243','桃园市','','3237','3237','0','3237','','0','0','0','taoyuan');
INSERT INTO `web_shop_area` VALUES('3244','高雄市','','3237','3237','0','3237','','0','0','0','gaoxiong');
INSERT INTO `web_shop_area` VALUES('2','北京市','','1','1','1','3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18','','0','0','110100','beijingshiqu');
--
-- 表的结构web_shop_banner
--

DROP TABLE IF EXISTS `web_shop_banner`;
CREATE TABLE `web_shop_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_bin NOT NULL,
  `url` varchar(100) COLLATE utf8_bin NOT NULL,
  `thumb` varchar(100) COLLATE utf8_bin NOT NULL,
  `sort` int(11) NOT NULL,
  `addtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='商铺banner表';

--
-- 转存表中的数据 web_shop_banner
--

INSERT INTO `web_shop_banner` VALUES('5','122','打发士大夫','111','/static/uploadfile/2016/1130/102251239_real.jpg','0','1480472573');
INSERT INTO `web_shop_banner` VALUES('3','122','测试','111','/static/uploadfile/2016/1130/102054452_real.jpg','0','1480472456');
--
-- 表的结构web_shop_bills
--

DROP TABLE IF EXISTS `web_shop_bills`;
CREATE TABLE `web_shop_bills` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'pk',
  `userid` int(11) NOT NULL COMMENT '个人用户uid',
  `title` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '发票抬头',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 web_shop_bills
--

--
-- 表的结构web_shop_care
--

DROP TABLE IF EXISTS `web_shop_care`;
CREATE TABLE `web_shop_care` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dataid` int(11) NOT NULL COMMENT '信息id',
  `userid` int(11) NOT NULL COMMENT '用户id',
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1：商品，2：商铺',
  `addtime` int(11) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`),
  KEY `addtime` (`addtime`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='收藏关注表';

--
-- 转存表中的数据 web_shop_care
--

INSERT INTO `web_shop_care` VALUES('4','5','122','1','1474253942');
INSERT INTO `web_shop_care` VALUES('6','5','123','1','1474599128');
INSERT INTO `web_shop_care` VALUES('8','122','122','2','1476692468');
INSERT INTO `web_shop_care` VALUES('11','7','0','1','1481155809');
INSERT INTO `web_shop_care` VALUES('13','4','121','1','1483064580');
--
-- 表的结构web_shop_comment_reply
--

DROP TABLE IF EXISTS `web_shop_comment_reply`;
CREATE TABLE `web_shop_comment_reply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL COMMENT '评论id',
  `userid` int(11) NOT NULL,
  `reply` varchar(200) COLLATE utf8_bin NOT NULL,
  `addtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='商家留言回复';

--
-- 转存表中的数据 web_shop_comment_reply
--

--
-- 表的结构web_shop_comments
--

DROP TABLE IF EXISTS `web_shop_comments`;
CREATE TABLE `web_shop_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `userid` int(11) NOT NULL COMMENT '评价人userid',
  `nickname` varchar(30) DEFAULT NULL COMMENT '昵称',
  `uid` int(11) NOT NULL COMMENT '商家id',
  `gid` int(11) NOT NULL COMMENT '商品id',
  `cid` int(11) NOT NULL COMMENT '对应订单id',
  `pid` int(11) NOT NULL DEFAULT '0' COMMENT '回复的id',
  `spid` int(11) NOT NULL DEFAULT '0' COMMENT '顶级父id',
  `content` varchar(200) NOT NULL COMMENT '评论内容',
  `reply` varchar(200) NOT NULL,
  `zan` int(11) NOT NULL DEFAULT '0' COMMENT '点赞数',
  `star` tinyint(4) NOT NULL DEFAULT '5' COMMENT '评论星级',
  `mm` tinyint(3) NOT NULL DEFAULT '0' COMMENT '是否匿名',
  `haspic` tinyint(3) NOT NULL DEFAULT '0' COMMENT '0没有图片1带图片',
  `addtime` int(11) NOT NULL COMMENT '发布评论时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='商品评论表';

--
-- 转存表中的数据 web_shop_comments
--

INSERT INTO `web_shop_comments` VALUES('3','123','hell','122','5','1','0','0','好好号','','0','5','0','1','1481680786');
INSERT INTO `web_shop_comments` VALUES('2','123','hell','121','7','1','0','0','不错 好吃','','0','5','0','1','1481680579');
--
-- 表的结构web_shop_diy
--

DROP TABLE IF EXISTS `web_shop_diy`;
CREATE TABLE `web_shop_diy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `thumb` varchar(80) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='商铺首页自定义头部加广告部分';

--
-- 转存表中的数据 web_shop_diy
--

INSERT INTO `web_shop_diy` VALUES('1','122','/static/uploadfile/2016/1130/171834556_real.jpg','地方换个地方好的风格和');
--
-- 表的结构web_shop_extra
--

DROP TABLE IF EXISTS `web_shop_extra`;
CREATE TABLE `web_shop_extra` (
  `userid` int(11) NOT NULL COMMENT '用户uid',
  `sitename` varchar(40) COLLATE utf8_bin NOT NULL COMMENT '商家名称',
  `areaid` mediumint(9) NOT NULL COMMENT '地区id',
  `sitedsp` varchar(200) COLLATE utf8_bin NOT NULL COMMENT '站点描述',
  `linkman` varchar(20) COLLATE utf8_bin NOT NULL COMMENT '联系人姓名',
  `linkmobile` varchar(15) COLLATE utf8_bin NOT NULL COMMENT '联系人电话',
  `linkmail` varchar(60) COLLATE utf8_bin NOT NULL COMMENT '邮箱地址',
  `logo` varchar(80) COLLATE utf8_bin NOT NULL COMMENT 'logo图片',
  `dsp` int(11) NOT NULL COMMENT '商家描述',
  `license` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '营业执照',
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='商铺额外信息表';

--
-- 转存表中的数据 web_shop_extra
--

INSERT INTO `web_shop_extra` VALUES('114197','测试','222','测试','测试','13666368712','123456@qq.com','/static/uploadfile/2015/1027/111430797_real.jpg','0','/static/uploadfile/2015/1125/155247209_real.jpg');
INSERT INTO `web_shop_extra` VALUES('194024','上海婚纱','799','上海婚纱','上海婚纱','18765666666','123456@qq.com','/static/uploadfile/2015/1111/174555623_real.png','0','');
INSERT INTO `web_shop_extra` VALUES('256781','韩都婚纱摄影','77','韩都婚纱摄影快乐','夏苏','18886189593','253633558@qq.com','/static/uploadfile/2015/1109/180624799_real.jpg','0','');
INSERT INTO `web_shop_extra` VALUES('285242','潍坊汇通摄影器材城','1428','佳能尼康','范德刚','18660456678','9596827@qq.com','/static/uploadfile/2015/1113/160034993_real.jpg','0','');
INSERT INTO `web_shop_extra` VALUES('419179','喜喜婚庆用品','1428','主营结婚新人用品','晓东','18660459515','1282986972@qq.com','/static/uploadfile/2016/0625/161221467_real.jpg','0','');
INSERT INTO `web_shop_extra` VALUES('430275','为爱婚礼策划','1428','主营婚庆，婚礼策划','晓东','18660459515','1282986972@qq.com','/static/uploadfile/2016/0629/164900707_real.jpg','0','');
INSERT INTO `web_shop_extra` VALUES('496539','柠檬印象','1428','商城','小西','157252628692','100997192@qq.com','/static/uploadfile/2015/1109/181216160_real.jpg','0','');
INSERT INTO `web_shop_extra` VALUES('529955','小何','937','我是小何','小何','15726361718','3114732781@qq.com','/static/uploadfile/2015/1109/182417787_real.jpg','0','');
INSERT INTO `web_shop_extra` VALUES('546476','哪些年','467','GO、GO、GO','真真','15726361559','133887192@qq.com','/static/uploadfile/2015/1110/172217626_real.jpg','0','');
INSERT INTO `web_shop_extra` VALUES('622871','爱拍摄影','1428','爱拍摄影','亮亮','15725636013','1095456147@qq.com','/static/uploadfile/2015/1110/182346750_real.jpg','0','');
INSERT INTO `web_shop_extra` VALUES('641605','迷你婚嫁','3','迷你婚嫁','13280109939','13280109939','13280109939@qq.com','/static/uploadfile/2015/1109/181717828_real.jpg','0','');
INSERT INTO `web_shop_extra` VALUES('645857','全影商铺','1039','学；大学里和高高帅帅的学长','从重点小学','15666565057','307881861@qq.com','/static/uploadfile/2015/1110/174731962_real.png','0','');
INSERT INTO `web_shop_extra` VALUES('677397','乐乐小窝','3007','来乐乐小窝参观吧','乐乐','18866189597','755614293@qq.com','/static/uploadfile/2015/1109/173614419_real.png','0','');
INSERT INTO `web_shop_extra` VALUES('732060','喜之郎情趣用品','22','成人用品厂家直销','大飞','15666528521','168499945@qq.com','/static/uploadfile/2015/1109/181949586_real.jpg','0','');
INSERT INTO `web_shop_extra` VALUES('732064','测试','1428','结婚就来找我啊','漫漫','15689163521','1216484793@qq.com','/static/uploadfile/2015/1109/181643627_real.jpg','0','');
INSERT INTO `web_shop_extra` VALUES('732070','测试','3','sauiyhs','zhu','15864646964','158643694@qq.com','/static/uploadfile/2015/1110/182706699_real.jpg','0','');
INSERT INTO `web_shop_extra` VALUES('732092','全影网11','1369','dhjdil','和进口','18654872254','705624481@qq.com','/static/uploadfile/2015/1109/182003992_real.jpg','0','');
INSERT INTO `web_shop_extra` VALUES('732114','纽约纽约婚纱摄影','1428','123456','高霞','18253690736','382804291@com','/static/uploadfile/2015/1110/171948519_real.jpg','0','');
INSERT INTO `web_shop_extra` VALUES('735758','测试28657','1428','双十一周年店庆啦','田总','15064276969','319410414@qq.com','/static/uploadfile/2015/1109/181632145_real.jpg','0','');
INSERT INTO `web_shop_extra` VALUES('735760','7073测试','1428','婚纱摄影','赵女士测试','15252525451','776839282@qq.com','/static/uploadfile/2015/1109/181528570_real.png','0','');
INSERT INTO `web_shop_extra` VALUES('735770','测试','1428','啊大大','dandnak','15064276969','5515151515@qq.com','/static/uploadfile/2015/1109/181603769_real.jpg','0','');
INSERT INTO `web_shop_extra` VALUES('735780','儿童衣服','3','双十一大优惠','陈良栋','13188841557','1510541298@163.com','/static/uploadfile/2015/1109/181547212_real.jpg','0','');
INSERT INTO `web_shop_extra` VALUES('801058','富士旗舰店','3','富士旗舰店','富士旗舰店','18765666666','123456@qq.com','/static/uploadfile/2015/1111/091511257_real.jpg','0','');
INSERT INTO `web_shop_extra` VALUES('803099','婚庆','1428','婚庆用品 婚纱 礼服 饰品','范海涛','15965054699','574091350@qq.com','/static/uploadfile/2015/1117/103941106_real.png','0','');
INSERT INTO `web_shop_extra` VALUES('804018','测是','222','测试','测是','','123456@qq.com','','0','/static/uploadfile/2015/1125/155727324_real.jpg');
--
-- 表的结构web_shop_goods
--

DROP TABLE IF EXISTS `web_shop_goods`;
CREATE TABLE `web_shop_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'pk',
  `userid` int(11) NOT NULL COMMENT '对应的商家id',
  `catid` int(11) NOT NULL COMMENT '商品类型',
  `title` varchar(150) COLLATE utf8_bin NOT NULL COMMENT '产品标题',
  `subtitle` varchar(200) COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL COMMENT '对应extra表中id',
  `thumb` varchar(80) COLLATE utf8_bin NOT NULL COMMENT '商品缩略图',
  `oldprice` decimal(10,2) NOT NULL,
  `price` decimal(10,2) NOT NULL COMMENT '单价',
  `weight` decimal(10,2) NOT NULL COMMENT '商品重量',
  `goods_sn` varchar(50) COLLATE utf8_bin NOT NULL,
  `trans_type` int(11) NOT NULL DEFAULT '1' COMMENT '运费计算方式：1按重量；2按件数',
  `spec` varchar(2000) COLLATE utf8_bin NOT NULL,
  `num` int(11) NOT NULL DEFAULT '1' COMMENT '货品数目，库存',
  `env` int(11) NOT NULL COMMENT '环保等级',
  `view` int(11) NOT NULL DEFAULT '0',
  `tj` int(11) NOT NULL DEFAULT '0',
  `hot` int(11) NOT NULL DEFAULT '0' COMMENT '热卖：0未设置；1已设置',
  `fav` int(11) NOT NULL DEFAULT '0',
  `buy` int(11) NOT NULL DEFAULT '0' COMMENT '购买数目',
  `pj` int(11) NOT NULL DEFAULT '0' COMMENT '评价数目',
  `sort` mediumint(9) NOT NULL DEFAULT '1' COMMENT '排序字段',
  `addtime` int(11) NOT NULL COMMENT '添加时间',
  `updatetime` int(11) NOT NULL COMMENT '更新时间',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '商品状态,0：未审核，1：已审核，4下架',
  `isdel` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `price` (`price`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='商铺产品主表';

--
-- 转存表中的数据 web_shop_goods
--

INSERT INTO `web_shop_goods` VALUES('4','122','49','本来散养土鸡卵(鸡蛋)20枚','自然散养 本来鲜香 蛋黄更大','<div class=\"tal\" style=\"margin-left:0.1rem;\">\r\n	<p style=\"font-family:\'Microsoft YaHei\';font-size:22px;color:#FF8C00;\">\r\n		本来散养土鸡卵\r\n	</p>\r\n<br />\r\n</div>\r\n<img src=\"https://image.benlailife.com/ProductNewDetailImage/P0000278969TC/65ba954a-b31f-4370-90e3-1c2e4e961124.jpg?imageView2/2/format/webp\" /> \r\n<div class=\"tal\" style=\"margin-left:0.1rem;\">\r\n	<p style=\"font-family:\'Microsoft YaHei\';font-size:22px;color:#FF8C00;\">\r\n		林间放养\r\n	</p>\r\n<span style=\"font-size:14px;line-height:24px;font-family:\'Microsoft YaHei\';\">一片简单的小树林<br />\r\n一群悠闲的漫步者<br />\r\n在远离市区的林间农场<br />\r\n清新的空气<br />\r\n清泉饮水……<br />\r\n一切简单而又不简单</span><br />\r\n</div>\r\n<img src=\"https://img3.benlailife.com/ProductNewDetailImage/P0000278969TC/aa83d373-0ad1-45ce-bb6b-cc15d2e86d91.jpg?imageView2/2/format/webp\" /> \r\n<div class=\"tal\" style=\"margin-left:0.1rem;\">\r\n	<span style=\"font-size:14px;line-height:24px;font-family:\'Microsoft YaHei\';\">在这林间<br />\r\n虫子、树叶、嫩草、小石子儿<br />\r\n都是这群生产者所钟爱的食物<br />\r\n配上自家的玉米、蔬菜、豆粕<br />\r\n不用任何外购的调配饲料</span><br />\r\n<span style=\"font-size:14px;line-height:24px;font-family:\'Microsoft YaHei\';\">让它们健康地生长</span><br />\r\n</div>\r\n<div class=\"tal\" style=\"margin-left:0.1rem;\">\r\n	<p style=\"font-family:\'Microsoft YaHei\';font-size:22px;color:#FF8C00;\">\r\n		还原鸡蛋本来味道\r\n	</p>\r\n</div>\r\n<img src=\"https://image3.benlailife.com/ProductNewDetailImage/P0000278969TC/2a5f2475-27b6-4d7d-8322-6f206a519ab0.jpg?imageView2/2/format/webp\" /> \r\n<div class=\"tal\" style=\"margin-left:0.1rem;\">\r\n	<span style=\"font-size:14px;line-height:24px;font-family:\'Microsoft YaHei\';\">当鸡群自然生长成熟后<br />\r\n便要开始产蛋<br />\r\n自然健康的鸡妈妈<br />\r\n产下的蛋虽然个头不大<br />\r\n但却充满了自然的气息</span><br />\r\n</div>\r\n<img src=\"https://image4.benlailife.com/ProductNewDetailImage/P0000278969TC/e1aec621-0f14-4f6b-937f-ed8a9c6181d1.jpg?imageView2/2/format/webp\" /> \r\n<div class=\"tal\" style=\"margin-left:0.1rem;\">\r\n	<span style=\"font-size:14px;line-height:24px;font-family:\'Microsoft YaHei\';\">一只优秀的土鸡蛋<br />\r\n蛋清要清澈而黏稠<br />\r\n蛋黄比一般的鸡蛋更大<br />\r\n色泽亮丽金黄<br />\r\n口感也更加的圆滑<br />\r\n透着自然的鲜香，无腥味<br />\r\n纯纯的天然蛋，<br />\r\n即使是简单的水煮<br />\r\n也是本真的美味&nbsp;</span><br />\r\n</div>\r\n<a name=\"sublist03\"></a><img width=\"980\" height=\"30\" src=\"https://image1.benlailife.com/webStatic/images/n_detail/detailsp_tit04_c07920fd.png?imageView2/2/format/webp\" /> \r\n<div class=\"detl_pic\">\r\n	<img src=\"https://image7.benlailife.com/ProductNewDetailImage/P0000278969TC/68aab514-9f30-4e1c-ae70-e77e81eadef9.jpg?imageView2/2/format/webp\" /> \r\n	<div class=\"tal\" style=\"margin-left:0.1rem;\">\r\n		<p style=\"font-family:\'Microsoft YaHei\';font-size:22px;color:#FF8C00;\">\r\n			家常鸡蛋羹\r\n		</p>\r\n<span style=\"font-size:14px;line-height:24px;font-family:\'Microsoft YaHei\';\">1、将鸡蛋打散，放入适当的食盐搅匀<br />\r\n2、兑入凉开水继续搅拌（蛋液：水约为1:1.5），滤去浮沫与蛋筋，盖上保鲜膜<br />\r\n3、锅中水烧开，隔水用中大火蒸15分钟左右，虚火焖3分钟<br />\r\n4、去保鲜膜，根据口味放入调料&nbsp;</span><br />\r\n	</div>\r\n	<div class=\"tal\" style=\"margin-left:0.1rem;\">\r\n		<p style=\"font-family:\'Microsoft YaHei\';font-size:22px;color:#FF8C00;\">\r\n			鸡蛋保存tips：\r\n		</p>\r\n<span style=\"font-size:14px;line-height:24px;font-family:\'Microsoft YaHei\';\">1.鸡蛋不可用水清洗，清洗鸡蛋会破坏其原有的外蛋壳膜，使得细菌与微生物入侵；<br />\r\n2.放冰箱冷藏，小头朝下；<br />\r\n3.不与挥发性，有强烈性气味的食品放一起，如葱，姜，辣椒，酒等；<br />\r\n4.从冰箱取出后尽快食用切勿再次冷藏，因室温鸡蛋“发汗”，小水滴中的细菌和微生物透过蛋壳深入蛋液内层加速鸡蛋的变质。&nbsp;</span> \r\n	</div>\r\n</div>','/static/uploadfile/2016/0903/105924436_real.jpg','32.80','23.80','10.00','43534534','2','a:3:{i:0;a:2:{s:8:\"specname\";s:6:\"称重\";s:7:\"specval\";s:9:\"不称重\";}i:1;a:2:{s:8:\"specname\";s:9:\"保质期\";s:7:\"specval\";s:5:\"30天\";}i:2;a:2:{s:8:\"specname\";s:6:\"包装\";s:7:\"specval\";s:3:\"无\";}}','2222','0','19','0','0','0','0','0','0','1472871590','1481103075','1','0');
INSERT INTO `web_shop_goods` VALUES('5','122','46','大象牙芒果1粒装约500g','果肉坚实细腻，浓香清甜，外形似象牙而得名。','<div class=\"box980\" style=\"color:#333333;font-family:宋体, \'Arial Narrow\', HELVETICA;\">\r\n	<div class=\"good15_all\" style=\"margin:20px 0px;\">\r\n		<ul style=\"vertical-align:bottom;\">\r\n			<li style=\"color:#4C4C4C;vertical-align:bottom;\">\r\n				品名： 大象牙芒果1粒装约500g\r\n			</li>\r\n			<li style=\"color:#4C4C4C;vertical-align:bottom;\">\r\n				规格： 1粒/约500g\r\n			</li>\r\n			<li style=\"color:#4C4C4C;vertical-align:bottom;\">\r\n				温馨提示： 忌放冰箱存储 芒果在常温环境下存储即可，不要放入冰箱，否则会加速变黑腐烂，同时注意避免口舌接触芒果表皮，有可能会引起过敏哦。\r\n			</li>\r\n			<li style=\"color:#4C4C4C;vertical-align:bottom;\">\r\n				产地： 海南\r\n			</li>\r\n		</ul>\r\n		<ol>\r\n			<li style=\"vertical-align:bottom;\">\r\n				<img src=\"https://image.benlailife.com/ProductImages/000/000/027/348/medium/56eb4a4b-84b5-47e3-b7c6-708e192c31f8.jpg?imageView2/2/format/webp\" style=\"width:280px;height:280px;\" /> \r\n			</li>\r\n		</ol>\r\n<a name=\"sublist01\"></a><img width=\"980\" height=\"30\" src=\"https://image3.benlailife.com/webStatic/images/n_detail/detailsp_tit02_e7777608.gif?imageView2/2/format/webp\" /><img src=\"https://image7.benlailife.com/ProductNewDetailImage/0102021620C/02p.jpg?imageView2/2/format/webp\" /> \r\n		<div class=\"tal\">\r\n			&nbsp;&nbsp;\r\n		</div>\r\n<img src=\"https://image4.benlailife.com/ProductNewDetailImage/0102021620C/838.jpg?imageView2/2/format/webp\" /> \r\n		<div class=\"tal\">\r\n			&nbsp;\r\n		</div>\r\n<a name=\"sublist05\"></a><img width=\"980\" height=\"30\" src=\"https://image4.benlailife.com/webStatic/images/n_detail/detailsp_tit06_c7ad2f0a.png?imageView2/2/format/webp\" /> \r\n		<div class=\"detl_com\">\r\n			<p>\r\n				<img src=\"https://image4.benlailife.com/webStatic/images/detailsp/detailsp_service_01_c4082bb4.jpg?imageView2/2/format/webp\" /><img src=\"https://image.benlailife.com/webStatic/images/detailsp/detailsp_service_02_031c76ef.jpg?imageView2/2/format/webp\" /><img src=\"https://img2.benlailife.com/webStatic/images/detailsp/detailsp_service_03_8542c2b6.jpg?imageView2/2/format/webp\" /> \r\n			</p>\r\n		</div>\r\n	</div>\r\n</div>\r\n<div class=\"good15_review\" id=\"tabdiv6\" style=\"color:#333333;font-family:宋体, \'Arial Narrow\', HELVETICA;\">\r\n	<div class=\"mb20\">\r\n		<br />\r\n	</div>\r\n</div>','/static/uploadfile/2016/0903/151033829_real.jpg','30.00','11.00','1.50','','1','a:1:{i:0;a:2:{s:8:\"specname\";s:0:\"\";s:7:\"specval\";s:0:\"\";}}','342','0','50','0','0','0','0','0','0','1472886649','1481103131','1','0');
INSERT INTO `web_shop_goods` VALUES('7','121','57','佳沛新西兰绿奇异果 6粒装（小果·0.6-0.7kg)','酸甜口感 鲜嫩多汁','<ul style=\"vertical-align:bottom;\">\r\n	<li style=\"color:#4C4C4C;vertical-align:bottom;\">\r\n		温馨提示： 不可将奇异果拿出放置通风处，这样水分流失，就会越来越硬。正确的方法是，放置箱子中，挑选出软的可食用的奇异果后要将箱子盖好。\r\n	</li>\r\n</ul>\r\n<ol>\r\n	<li style=\"vertical-align:bottom;\">\r\n		<img src=\"https://image5.benlailife.com/ProductImages/000/000/000/092/medium/1fca8cda-44b8-46de-914b-7da8c7122074.jpg?imageView2/2/format/webp\" style=\"width:280px;height:280px;\" /> \r\n	</li>\r\n</ol>\r\n<a name=\"sublist01\"></a><img width=\"980\" height=\"30\" src=\"https://image3.benlailife.com/webStatic/images/n_detail/detailsp_tit02_e7777608.gif?imageView2/2/format/webp\" /><img src=\"https://image4.benlailife.com/ProductNewDetailImage/0102011429C/445.jpg?imageView2/2/format/webp\" /> \r\n<div class=\"tal\">\r\n	&nbsp;\r\n</div>\r\n<img src=\"https://img1.benlailife.com/ProductNewDetailImage/0102010005C/006.jpg?imageView2/2/format/webp\" /> \r\n<div class=\"tal\">\r\n	&nbsp;\r\n</div>\r\n<img src=\"https://img2.benlailife.com/ProductNewDetailImage/0102010005C/007.jpg?imageView2/2/format/webp\" /> \r\n<div class=\"tal\">\r\n	&nbsp;\r\n</div>\r\n<a name=\"sublist03\"></a><img width=\"980\" height=\"30\" src=\"https://image1.benlailife.com/webStatic/images/n_detail/detailsp_tit04_c07920fd.png?imageView2/2/format/webp\" /> \r\n<div class=\"detl_pic\">\r\n	<img src=\"https://image4.benlailife.com/ProductNewDetailImage/0102010005C/011.jpg?imageView2/2/format/webp\" /> \r\n	<div class=\"tal\">\r\n		&nbsp;\r\n	</div>\r\n</div>\r\n<a name=\"sublist04\"></a><img width=\"980\" height=\"30\" src=\"https://image5.benlailife.com/webStatic/images/n_detail/detailsp_tit05_82cd36e3.png?imageView2/2/format/webp\" /><img src=\"https://image.benlailife.com/ProductNewDetailImage/0102010005C/009.jpg?imageView2/2/format/webp\" /> \r\n<div class=\"tal\">\r\n	<p class=\"detl_com01\" style=\"font-family:\'Microsoft YaHei\';font-size:18px;color:#686C69;margin-left:30px;font-weight:800;\">\r\n		佳沛出品 品质保证\r\n	</p>\r\n	<p class=\"detl_com02\" style=\"font-family:\'Microsoft YaHei\';font-size:16px;color:#686C69;margin-left:30px;\">\r\n		&nbsp;新西兰进口的佳沛奇异果，坚持采用天然方式栽种，从种植到销售经过200道品检关卡，品质纯净，美味安全。\r\n	</p>\r\n</div>\r\n<a name=\"sublist05\"></a><img width=\"980\" height=\"30\" src=\"https://image4.benlailife.com/webStatic/images/n_detail/detailsp_tit06_c7ad2f0a.png?imageView2/2/format/webp\" /> \r\n<div class=\"detl_com\">\r\n	<p>\r\n		<img src=\"https://image4.benlailife.com/webStatic/images/detailsp/detailsp_service_01_c4082bb4.jpg?imageView2/2/format/webp\" /><img src=\"https://image.benlailife.com/webStatic/images/detailsp/detailsp_service_02_031c76ef.jpg?imageView2/2/format/webp\" /><img src=\"https://img2.benlailife.com/webStatic/images/detailsp/detailsp_service_03_8542c2b6.jpg?imageView2/2/format/webp\" /> \r\n	</p>\r\n</div>','/static/uploadfile/2016/1207/162406192_real.jpg','25.80','19.80','0.70','m111111134','1','a:1:{i:0;a:2:{s:8:\"specname\";s:6:\"规格\";s:7:\"specval\";s:4:\"6粒\";}}','111','0','94','1','0','0','0','0','0','1481099066','1483068862','1','0');
INSERT INTO `web_shop_goods` VALUES('9','121','57','Zespri佳沛新西兰有机绿奇异果3.3kg原箱(33-36个)','Zespri佳沛新西兰有机绿奇异果3.3kg原箱(33-36个)','<p style=\"color:#444444;font-family:Arial, Verdana, 宋体;\">\r\n	<img src=\"http://img10.yiguoimg.com/e/images/2016/160808/513691854517084424_880x506.jpg\" />\r\n</p>\r\n<p style=\"color:#444444;font-family:Arial, Verdana, 宋体;\">\r\n	<img src=\"http://img14.yiguoimg.com/e/images/2016/160808/513691854517182728_880x685.jpg\" />\r\n</p>\r\n<p style=\"color:#444444;font-family:Arial, Verdana, 宋体;\">\r\n	<img src=\"http://img12.yiguoimg.com/e/images/2016/160808/513691854517149960_880x355.jpg\" />\r\n</p>\r\n<p style=\"color:#444444;font-family:Arial, Verdana, 宋体;\">\r\n	<img src=\"http://img09.yiguoimg.com/e/images/2016/160808/513691854517117192_880x445.jpg\" />\r\n</p>\r\n<p style=\"color:#444444;font-family:Arial, Verdana, 宋体;\">\r\n	<img src=\"http://img13.yiguoimg.com/e/images/2016/160808/513691854517215496_880x577.jpg\" />\r\n</p>\r\n<p style=\"color:#444444;font-family:Arial, Verdana, 宋体;\">\r\n	<img src=\"http://img13.yiguoimg.com/e/images/2016/160808/513691854517248264_880x515.jpg\" />\r\n</p>\r\n<div>\r\n	<br />\r\n</div>','/static/uploadfile/2016/1216/101625987_real.jpg','179.00','9.00','3.30','','1','a:2:{i:0;a:2:{s:8:\"specname\";s:12:\"单果规格\";s:7:\"specval\";s:11:\"93-115g/个\";}i:1;a:2:{s:8:\"specname\";s:12:\"商品状态\";s:7:\"specval\";s:6:\"冷藏\";}}','300','0','4','0','1','0','0','0','0','1481854628','1481854628','1','0');
--
-- 表的结构web_shop_goods_cart
--

DROP TABLE IF EXISTS `web_shop_goods_cart`;
CREATE TABLE `web_shop_goods_cart` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '订单ID',
  `oid` int(11) NOT NULL DEFAULT '0' COMMENT '对应的支付订单id',
  `userid` int(11) NOT NULL,
  `gid` int(11) NOT NULL COMMENT '商品ID',
  `fee` decimal(10,2) DEFAULT NULL COMMENT '单价',
  `num` int(11) NOT NULL DEFAULT '1' COMMENT '购买数目',
  `time` int(10) unsigned NOT NULL COMMENT '提交时间',
  `com_sta` tinyint(3) NOT NULL DEFAULT '0' COMMENT '评论状态',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '订单状态 未成功0成功1删除-1生成订单还未支付2',
  `dili_sta` tinyint(3) NOT NULL DEFAULT '0' COMMENT '0未发货1已发货',
  `dome` text CHARACTER SET utf8 COLLATE utf8_bin COMMENT '商家备注',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='用户购物车产品';

--
-- 转存表中的数据 web_shop_goods_cart
--

INSERT INTO `web_shop_goods_cart` VALUES('1','1','123','7','19.80','1','1481680145','1','1','0','');
INSERT INTO `web_shop_goods_cart` VALUES('2','1','123','5','11.00','1','1481680147','1','1','0','');
INSERT INTO `web_shop_goods_cart` VALUES('3','1','123','4','23.80','1','1481680150','0','1','0','');
INSERT INTO `web_shop_goods_cart` VALUES('4','3','123','7','19.80','2','1481766342','0','2','0','');
INSERT INTO `web_shop_goods_cart` VALUES('5','4','123','7','19.80','1','1481792214','0','2','0','');
INSERT INTO `web_shop_goods_cart` VALUES('6','5','121','9','9.00','3','1481855851','0','2','0','');
INSERT INTO `web_shop_goods_cart` VALUES('7','0','123','7','19.80','1','1482547589','0','0','0','');
INSERT INTO `web_shop_goods_cart` VALUES('8','0','123','5','11.00','6','1482547593','0','0','0','');
INSERT INTO `web_shop_goods_cart` VALUES('9','5','121','7','19.80','10','1483062781','0','2','0','');
--
-- 表的结构web_shop_goods_photo
--

DROP TABLE IF EXISTS `web_shop_goods_photo`;
CREATE TABLE `web_shop_goods_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '图片id',
  `userid` int(11) NOT NULL COMMENT '用户uid',
  `gid` int(11) NOT NULL COMMENT '所属商品',
  `thumb` varchar(80) COLLATE utf8_bin NOT NULL COMMENT '缩略图路径',
  `sort` tinyint(4) NOT NULL DEFAULT '1' COMMENT '排序',
  `addtime` int(11) NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`),
  KEY `gid` (`gid`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='商品对应的图集信息表';

--
-- 转存表中的数据 web_shop_goods_photo
--

INSERT INTO `web_shop_goods_photo` VALUES('1','122','0','/static/temp/20160922_103750549_real.jpg','1','1474511872');
INSERT INTO `web_shop_goods_photo` VALUES('2','122','0','/static/temp/20160922_103853900_real.jpg','1','1474511934');
INSERT INTO `web_shop_goods_photo` VALUES('3','122','0','/static/temp/20160922_103928851_real.jpg','1','1474511969');
INSERT INTO `web_shop_goods_photo` VALUES('4','122','0','/static/temp/20160922_103955386_real.jpg','1','1474511996');
INSERT INTO `web_shop_goods_photo` VALUES('5','122','0','/static/temp/20160922_104139407_real.jpg','1','1474512101');
INSERT INTO `web_shop_goods_photo` VALUES('6','122','0','/static/temp/20160922_104229730_real.jpg','1','1474512150');
INSERT INTO `web_shop_goods_photo` VALUES('7','122','0','/static/temp/20160922_104257319_real.jpg','1','1474512178');
INSERT INTO `web_shop_goods_photo` VALUES('8','122','0','/static/temp/20160922_104337452_real.jpg','1','1474512218');
INSERT INTO `web_shop_goods_photo` VALUES('9','122','0','/static/temp/20160922_104616705_real.jpg','1','1474512377');
INSERT INTO `web_shop_goods_photo` VALUES('10','122','0','/static/temp/20160922_104641422_real.jpg','1','1474512402');
INSERT INTO `web_shop_goods_photo` VALUES('11','122','0','/static/uploadfile/2016/0922/20160922_104715299_real.jpg','0','1474512437');
INSERT INTO `web_shop_goods_photo` VALUES('12','122','4','/static/uploadfile/2016/0922/20160922_105206635_real.jpg','1','1474512727');
INSERT INTO `web_shop_goods_photo` VALUES('13','122','4','/static/uploadfile/2016/0922/20160922_105210623_real.jpg','0','1474512731');
INSERT INTO `web_shop_goods_photo` VALUES('14','122','0','/static/uploadfile/2016/1017/20161017_145013191_real.jpg','3','1476687014');
INSERT INTO `web_shop_goods_photo` VALUES('15','122','0','/static/uploadfile/2016/1017/20161017_145014819_real.jpg','2','1476687016');
INSERT INTO `web_shop_goods_photo` VALUES('16','122','0','/static/uploadfile/2016/1017/20161017_145016572_real.jpg','1','1476687017');
INSERT INTO `web_shop_goods_photo` VALUES('17','122','0','/static/uploadfile/2016/1017/20161017_145017288_real.jpg','0','1476687019');
INSERT INTO `web_shop_goods_photo` VALUES('18','122','5','/static/uploadfile/2016/1017/20161017_151059638_real.jpg','1','1476688261');
INSERT INTO `web_shop_goods_photo` VALUES('19','122','5','/static/uploadfile/2016/1017/20161017_151101791_real.jpg','2','1476688262');
INSERT INTO `web_shop_goods_photo` VALUES('20','122','5','/static/uploadfile/2016/1017/20161017_151102781_real.jpg','0','1476688264');
INSERT INTO `web_shop_goods_photo` VALUES('21','122','0','/static/temp/20161017_151104897_real.jpg','1','1476688265');
INSERT INTO `web_shop_goods_photo` VALUES('22','121','0','/static/temp/20161207_153945479_real.jpg','1','1481096386');
INSERT INTO `web_shop_goods_photo` VALUES('23','121','0','/static/temp/20161207_153949731_real.jpg','1','1481096390');
INSERT INTO `web_shop_goods_photo` VALUES('24','121','0','/static/temp/20161207_154645194_real.jpg','1','1481096806');
INSERT INTO `web_shop_goods_photo` VALUES('25','121','0','/static/temp/20161207_154648250_real.jpg','1','1481096809');
INSERT INTO `web_shop_goods_photo` VALUES('26','121','0','/static/uploadfile/2016/1207/20161207_161737470_real.jpg','0','1481098659');
INSERT INTO `web_shop_goods_photo` VALUES('27','121','0','/static/uploadfile/2016/1207/20161207_161819477_real.jpg','2','1481098700');
INSERT INTO `web_shop_goods_photo` VALUES('28','121','0','/static/uploadfile/2016/1207/20161207_161822812_real.jpg','1','1481098703');
INSERT INTO `web_shop_goods_photo` VALUES('29','121','0','/static/uploadfile/2016/1207/20161207_161825930_real.jpg','0','1481098706');
INSERT INTO `web_shop_goods_photo` VALUES('30','121','7','/static/uploadfile/2016/1207/20161207_162408132_real.jpg','3','1481099049');
INSERT INTO `web_shop_goods_photo` VALUES('31','121','7','/static/uploadfile/2016/1207/20161207_162411637_real.jpg','2','1481099052');
INSERT INTO `web_shop_goods_photo` VALUES('32','121','7','/static/uploadfile/2016/1207/20161207_162414430_real.jpg','1','1481099055');
INSERT INTO `web_shop_goods_photo` VALUES('33','121','9','/static/uploadfile/2016/1216/20161216_101632715_real.jpg','0','1481854593');
INSERT INTO `web_shop_goods_photo` VALUES('34','121','9','/static/uploadfile/2016/1216/20161216_101640542_real.jpg','2','1481854601');
INSERT INTO `web_shop_goods_photo` VALUES('35','121','9','/static/uploadfile/2016/1216/20161216_101643668_real.jpg','1','1481854605');
INSERT INTO `web_shop_goods_photo` VALUES('36','121','7','/static/uploadfile/2016/1230/20161230_111145916_real.jpg','0','1483067505');
--
-- 表的结构web_shop_nav
--

DROP TABLE IF EXISTS `web_shop_nav`;
CREATE TABLE `web_shop_nav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `title` varchar(50) COLLATE utf8_bin NOT NULL,
  `url` varchar(80) COLLATE utf8_bin NOT NULL,
  `pos` int(11) NOT NULL DEFAULT '0',
  `visible` int(11) NOT NULL DEFAULT '0',
  `addtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='商铺导航栏';

--
-- 转存表中的数据 web_shop_nav
--

INSERT INTO `web_shop_nav` VALUES('1','122','菜单1','#','1','1','1478768023');
INSERT INTO `web_shop_nav` VALUES('2','122','菜单2','#','2','1','1478768047');
--
-- 表的结构web_step
--

DROP TABLE IF EXISTS `web_step`;
CREATE TABLE `web_step` (
  `userid` int(11) NOT NULL,
  `step` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='加盟步骤';

--
-- 转存表中的数据 web_step
--

INSERT INTO `web_step` VALUES('122','4');
--
-- 表的结构web_tixian
--

DROP TABLE IF EXISTS `web_tixian`;
CREATE TABLE `web_tixian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `account` decimal(10,2) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='提现表';

--
-- 转存表中的数据 web_tixian
--

INSERT INTO `web_tixian` VALUES('1','121','100.00','0','1472712652');
--
-- 表的结构web_transport
--

DROP TABLE IF EXISTS `web_transport`;
CREATE TABLE `web_transport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `first` decimal(10,2) NOT NULL,
  `plus` decimal(10,2) NOT NULL,
  `one` decimal(10,2) NOT NULL,
  `distance` float NOT NULL COMMENT '最大派送距离',
  `addtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='配送方式';

--
-- 转存表中的数据 web_transport
--

INSERT INTO `web_transport` VALUES('1','122','10.00','5.00','20.00','10','0');
INSERT INTO `web_transport` VALUES('2','121','10.00','5.00','10.00','10','0');
--
-- 表的结构web_user_quan
--

DROP TABLE IF EXISTS `web_user_quan`;
CREATE TABLE `web_user_quan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `quanid` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='用户的优惠券信息表';

--
-- 转存表中的数据 web_user_quan
--

INSERT INTO `web_user_quan` VALUES('1','123','1','0','1482720225');
INSERT INTO `web_user_quan` VALUES('2','123','3','0','1482720323');
