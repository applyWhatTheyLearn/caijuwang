CREATE TABLE `Accredit` (
  `AdminID` int(11) DEFAULT NULL,
  `AccID_t` int(11) DEFAULT NULL,
  `TitleName` varchar(40) DEFAULT NULL,
  `LinkName` varchar(100) DEFAULT NULL,
  `FotherID` int(11) DEFAULT NULL,
  `compositor` int(11) DEFAULT NULL,
  `AccID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`AccID`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
insert into `Accredit`(`AdminID`,`AccID_t`,`TitleName`,`LinkName`,`FotherID`,`compositor`,`AccID`) values('1','21','新品推荐管理        ','ProductDetail/Pro_TjList.php                      ','11','300','21');
insert into `Accredit`(`AdminID`,`AccID_t`,`TitleName`,`LinkName`,`FotherID`,`compositor`,`AccID`) values('1','19','已完成的订单        ','order/Complate_Order_list.php                     ','14','200','19');
insert into `Accredit`(`AdminID`,`AccID_t`,`TitleName`,`LinkName`,`FotherID`,`compositor`,`AccID`) values('1','18','进行中的订单        ','order/JinXing_Order_list.php                      ','14','200','18');
insert into `Accredit`(`AdminID`,`AccID_t`,`TitleName`,`LinkName`,`FotherID`,`compositor`,`AccID`) values('1','17','帮助中心            ','help/help_door.php                                ','0','900','17');
insert into `Accredit`(`AdminID`,`AccID_t`,`TitleName`,`LinkName`,`FotherID`,`compositor`,`AccID`) values('1','16','促销公告管理        ','GongGao/GongGao_list.php','0','1100','16');
insert into `Accredit`(`AdminID`,`AccID_t`,`TitleName`,`LinkName`,`FotherID`,`compositor`,`AccID`) values('1','12','商品分类管理        ','ProductClass/ProBigClass_index.html               ','11','100','12');
insert into `Accredit`(`AdminID`,`AccID_t`,`TitleName`,`LinkName`,`FotherID`,`compositor`,`AccID`) values('1','11','商品管理            ','managedetail.html                                 ','0','300','11');
insert into `Accredit`(`AdminID`,`AccID_t`,`TitleName`,`LinkName`,`FotherID`,`compositor`,`AccID`) values('1','10','会员管理信息        ','members/Member_List.php                           ','6','100','10');
insert into `Accredit`(`AdminID`,`AccID_t`,`TitleName`,`LinkName`,`FotherID`,`compositor`,`AccID`) values('1','7','友情连接','link/Link_list.php','0','600','7');
insert into `Accredit`(`AdminID`,`AccID_t`,`TitleName`,`LinkName`,`FotherID`,`compositor`,`AccID`) values('1','6','会员管理            ','managedetail.html                                 ','0','500','6');
insert into `Accredit`(`AdminID`,`AccID_t`,`TitleName`,`LinkName`,`FotherID`,`compositor`,`AccID`) values('1','4','用户管理','managedetail.html','0','100','4');
insert into `Accredit`(`AdminID`,`AccID_t`,`TitleName`,`LinkName`,`FotherID`,`compositor`,`AccID`) values('1','5','用户信息修改        ','Login_User.php                                    ','4','100','5');
insert into `Accredit`(`AdminID`,`AccID_t`,`TitleName`,`LinkName`,`FotherID`,`compositor`,`AccID`) values('1','3','后台栏目管理        ','QxLm_List.php                                     ','1','200','3');
insert into `Accredit`(`AdminID`,`AccID_t`,`TitleName`,`LinkName`,`FotherID`,`compositor`,`AccID`) values('1','2','登陆用户管理        ','User_List.php                               ','1','100','2');
insert into `Accredit`(`AdminID`,`AccID_t`,`TitleName`,`LinkName`,`FotherID`,`compositor`,`AccID`) values('1','1','权限管理            ','managedetail.html                                 ','0','200','1');
insert into `Accredit`(`AdminID`,`AccID_t`,`TitleName`,`LinkName`,`FotherID`,`compositor`,`AccID`) values('1','15','用户评论管理        ','PingLun/PingLun_list.php','0','1000','15');
insert into `Accredit`(`AdminID`,`AccID_t`,`TitleName`,`LinkName`,`FotherID`,`compositor`,`AccID`) values('1','14','订单管理            ','managedetail.html                                 ','0','400','14');
insert into `Accredit`(`AdminID`,`AccID_t`,`TitleName`,`LinkName`,`FotherID`,`compositor`,`AccID`) values('1','13','商品内容管理        ','ProductDetail/Pro_door.php                        ','11','200','13');
insert into `Accredit`(`AdminID`,`AccID_t`,`TitleName`,`LinkName`,`FotherID`,`compositor`,`AccID`) values('1','9','联系我们            ','contact/contact_modi.php','0','800','9');
insert into `Accredit`(`AdminID`,`AccID_t`,`TitleName`,`LinkName`,`FotherID`,`compositor`,`AccID`) values('1','8','合作伙伴            ','Comate/Comate_list.php','0','700','8');
insert into `Accredit`(`AdminID`,`AccID_t`,`TitleName`,`LinkName`,`FotherID`,`compositor`,`AccID`) values('1','23','热门活动            ','hot/Hot_list.php                                  ','0','1200','23');
insert into `Accredit`(`AdminID`,`AccID_t`,`TitleName`,`LinkName`,`FotherID`,`compositor`,`AccID`) values('1','22','新订单','order/New_Order_list.php','14','100','27');
insert into `Accredit`(`AdminID`,`AccID_t`,`TitleName`,`LinkName`,`FotherID`,`compositor`,`AccID`) values('1','20','意见反馈','return/return_list.php','0','1300','28');
insert into `Accredit`(`AdminID`,`AccID_t`,`TitleName`,`LinkName`,`FotherID`,`compositor`,`AccID`) values('1','25','备案信息管理','copyright/copyright_modi.php','0','1400','29');
insert into `Accredit`(`AdminID`,`AccID_t`,`TitleName`,`LinkName`,`FotherID`,`compositor`,`AccID`) values('1','26','站内宣传图片替换','picmanage/pic_list.php','0','1500','30');
insert into `Accredit`(`AdminID`,`AccID_t`,`TitleName`,`LinkName`,`FotherID`,`compositor`,`AccID`) values('1','27','数据库备份','backup_db/backup_database.php','0','1600','31');
CREATE TABLE `Accredit_t` (
  `TitleName_t` varchar(40) NOT NULL,
  `LinkName_t` varchar(100) NOT NULL,
  `FotherID_t` int(11) NOT NULL,
  `compositor_t` int(11) DEFAULT NULL,
  `AccID_t` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`AccID_t`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
insert into `Accredit_t`(`TitleName_t`,`LinkName_t`,`FotherID_t`,`compositor_t`,`AccID_t`) values('新品推荐管理        ','ProductDetail/Pro_TjList.php                      ','11','300','21');
insert into `Accredit_t`(`TitleName_t`,`LinkName_t`,`FotherID_t`,`compositor_t`,`AccID_t`) values('意见反馈            ','return/return_list.php                            ','0','1300','20');
insert into `Accredit_t`(`TitleName_t`,`LinkName_t`,`FotherID_t`,`compositor_t`,`AccID_t`) values('已完成的订单        ','order/Complate_Order_list.php                     ','14','200','19');
insert into `Accredit_t`(`TitleName_t`,`LinkName_t`,`FotherID_t`,`compositor_t`,`AccID_t`) values('进行中的订单        ','order/JinXing_Order_list.php                      ','14','200','18');
insert into `Accredit_t`(`TitleName_t`,`LinkName_t`,`FotherID_t`,`compositor_t`,`AccID_t`) values('帮助中心            ','help/help_door.php                                ','0','900','17');
insert into `Accredit_t`(`TitleName_t`,`LinkName_t`,`FotherID_t`,`compositor_t`,`AccID_t`) values('促销公告管理        ','GongGao/GongGao_list.php','0','1100','16');
insert into `Accredit_t`(`TitleName_t`,`LinkName_t`,`FotherID_t`,`compositor_t`,`AccID_t`) values('用户评论管理        ','PingLun/PingLun_list.php','0','1000','15');
insert into `Accredit_t`(`TitleName_t`,`LinkName_t`,`FotherID_t`,`compositor_t`,`AccID_t`) values('订单管理            ','managedetail.html                                 ','0','400','14');
insert into `Accredit_t`(`TitleName_t`,`LinkName_t`,`FotherID_t`,`compositor_t`,`AccID_t`) values('商品内容管理        ','ProductDetail/Pro_door.php                        ','11','200','13');
insert into `Accredit_t`(`TitleName_t`,`LinkName_t`,`FotherID_t`,`compositor_t`,`AccID_t`) values('商品分类管理        ','ProductClass/ProBigClass_index.html               ','11','100','12');
insert into `Accredit_t`(`TitleName_t`,`LinkName_t`,`FotherID_t`,`compositor_t`,`AccID_t`) values('商品管理            ','managedetail.html                                 ','0','300','11');
insert into `Accredit_t`(`TitleName_t`,`LinkName_t`,`FotherID_t`,`compositor_t`,`AccID_t`) values('会员管理信息        ','members/Member_List.php                           ','6','100','10');
insert into `Accredit_t`(`TitleName_t`,`LinkName_t`,`FotherID_t`,`compositor_t`,`AccID_t`) values('联系我们            ','contact/contact_modi.php','0','800','9');
insert into `Accredit_t`(`TitleName_t`,`LinkName_t`,`FotherID_t`,`compositor_t`,`AccID_t`) values('合作伙伴            ','Comate/Comate_list.php','0','700','8');
insert into `Accredit_t`(`TitleName_t`,`LinkName_t`,`FotherID_t`,`compositor_t`,`AccID_t`) values('友情连接            ','link/Link_list.php            ','0','600','7');
insert into `Accredit_t`(`TitleName_t`,`LinkName_t`,`FotherID_t`,`compositor_t`,`AccID_t`) values('会员管理            ','managedetail.html                                 ','0','500','6');
insert into `Accredit_t`(`TitleName_t`,`LinkName_t`,`FotherID_t`,`compositor_t`,`AccID_t`) values('用户管理','managedetail.html','0','100','4');
insert into `Accredit_t`(`TitleName_t`,`LinkName_t`,`FotherID_t`,`compositor_t`,`AccID_t`) values('用户信息修改        ','Login_User.php                                    ','4','100','5');
insert into `Accredit_t`(`TitleName_t`,`LinkName_t`,`FotherID_t`,`compositor_t`,`AccID_t`) values('后台栏目管理        ','QxLm_List.php                                     ','1','200','3');
insert into `Accredit_t`(`TitleName_t`,`LinkName_t`,`FotherID_t`,`compositor_t`,`AccID_t`) values('登陆用户管理        ','User_List.php                                     ','1','100','2');
insert into `Accredit_t`(`TitleName_t`,`LinkName_t`,`FotherID_t`,`compositor_t`,`AccID_t`) values('权限管理            ','managedetail.html                                 ','0','200','1');
insert into `Accredit_t`(`TitleName_t`,`LinkName_t`,`FotherID_t`,`compositor_t`,`AccID_t`) values('新订单              ','order/New_Order_list.php                          ','14','100','22');
insert into `Accredit_t`(`TitleName_t`,`LinkName_t`,`FotherID_t`,`compositor_t`,`AccID_t`) values('热门活动            ','hot/Hot_list.php                                  ','0','1200','23');
insert into `Accredit_t`(`TitleName_t`,`LinkName_t`,`FotherID_t`,`compositor_t`,`AccID_t`) values('备案信息管理','copyright/copyright_modi.php','0','1400','25');
insert into `Accredit_t`(`TitleName_t`,`LinkName_t`,`FotherID_t`,`compositor_t`,`AccID_t`) values('站内宣传图片替换','picmanage/pic_list.php','0','1500','26');
insert into `Accredit_t`(`TitleName_t`,`LinkName_t`,`FotherID_t`,`compositor_t`,`AccID_t`) values('数据库备份','backup_db/backup_database.php','0','1600','27');
CREATE TABLE `admin` (
  `UserName` varchar(30) DEFAULT NULL,
  `UserPass` varchar(100) DEFAULT NULL,
  `opens` varchar(10) DEFAULT NULL,
  `InpuTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`UserID`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
insert into `admin`(`UserName`,`UserPass`,`opens`,`InpuTime`,`UserID`) values('admin','21232f297a57a5a743894a0e4a801fc3','open','2013-01-19 04:35:57','1');
insert into `admin`(`UserName`,`UserPass`,`opens`,`InpuTime`,`UserID`) values('test','098f6bcd4621d373cade4e832627b4f6','open','2013-01-19 04:45:00','16');
CREATE TABLE `w_ad_pic` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  `l_pic` varchar(60) DEFAULT NULL,
  `l_ext` varchar(12) DEFAULT NULL,
  `l_title` varchar(100) DEFAULT NULL,
  `l_url` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
insert into `w_ad_pic`(`l_id`,`l_pic`,`l_ext`,`l_title`,`l_url`) values('8','logo_bottom','gif','底部logo图片','');
insert into `w_ad_pic`(`l_id`,`l_pic`,`l_ext`,`l_title`,`l_url`) values('9','pic_4_12','gif','默认显示图片','');
insert into `w_ad_pic`(`l_id`,`l_pic`,`l_ext`,`l_title`,`l_url`) values('1','firstPic-7','jpg','首页会员登录下图片(91px*29px)','');
insert into `w_ad_pic`(`l_id`,`l_pic`,`l_ext`,`l_title`,`l_url`) values('2','firstPic-8','jpg','首页会员登录下图片(91px*29px)','');
insert into `w_ad_pic`(`l_id`,`l_pic`,`l_ext`,`l_title`,`l_url`) values('3','firstPic-4','jpg','首页banner广告图片(767px*90px)','');
insert into `w_ad_pic`(`l_id`,`l_pic`,`l_ext`,`l_title`,`l_url`) values('7','style2_logo','gif','顶部logo图片','');
CREATE TABLE `w_copyright` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_companyname` varchar(200) DEFAULT NULL,
  `w_copyright` varchar(100) DEFAULT NULL,
  `w_tongji` varchar(510) DEFAULT NULL,
  `w_beiannum` varchar(100) DEFAULT NULL,
  `w_sort` int(11) DEFAULT '0',
  `w_views` varchar(12) DEFAULT '显示',
  PRIMARY KEY (`w_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
insert into `w_copyright`(`w_id`,`w_companyname`,`w_copyright`,`w_tongji`,`w_beiannum`,`w_sort`,`w_views`) values('3','北京XXXXXXXX有限公司','COPPYRIGHT SYCWEB. ALL RIGHTS RESERVED.','sdfsdf','京ICP备1234567890号','10','显示');
CREATE TABLE `w_db_bakinfo` (
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_name` varchar(40) DEFAULT NULL,
  `w_ext` varchar(12) DEFAULT NULL,
  `w_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`w_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
CREATE TABLE `z_affiche` (
  `l_title` varchar(100) DEFAULT NULL,
  `l_detail` text,
  `l_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `l_sort` int(11) DEFAULT NULL,
  `l_views` varchar(12) DEFAULT NULL,
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
insert into `z_affiche`(`l_title`,`l_detail`,`l_time`,`l_sort`,`l_views`,`l_id`) values('hhhh','<p>欢迎使用ueditor!ksdfsfsf </p>','2013-02-03 08:18:57','0','显示','2');
insert into `z_affiche`(`l_title`,`l_detail`,`l_time`,`l_sort`,`l_views`,`l_id`) values('hhhh','<p>欢迎使用ueditor!</p>','2013-02-03 08:18:35','3','显示','3');
CREATE TABLE `z_car` (
  `l_productid` int(11) DEFAULT NULL,
  `l_num` int(11) DEFAULT NULL,
  `l_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `l_tempnum` varchar(40) DEFAULT NULL,
  `l_extprice1` int(11) DEFAULT '0',
  `l_extprice2` int(11) DEFAULT '0',
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;
insert into `z_car`(`l_productid`,`l_num`,`l_datetime`,`l_tempnum`,`l_extprice1`,`l_extprice2`,`l_id`) values('4','1','2012-12-25 00:00:00','20121224210309186784','0','0','37');
insert into `z_car`(`l_productid`,`l_num`,`l_datetime`,`l_tempnum`,`l_extprice1`,`l_extprice2`,`l_id`) values('6','2','2012-12-31 11:10:47','20121231041018414611','0','0','44');
insert into `z_car`(`l_productid`,`l_num`,`l_datetime`,`l_tempnum`,`l_extprice1`,`l_extprice2`,`l_id`) values('6','2','2012-12-30 23:17:42','20121230161723650041','0','0','43');
CREATE TABLE `z_carext` (
  `l_carid` int(11) DEFAULT NULL,
  `l_fittingid` int(11) DEFAULT NULL,
  `l_num` int(11) DEFAULT NULL,
  `l_datetime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `l_tempnum` varchar(40) DEFAULT NULL,
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE `z_class` (
  `l_fid` int(11) DEFAULT NULL,
  `l_name` varchar(100) DEFAULT NULL,
  `l_name_e` varchar(100) DEFAULT NULL,
  `l_detail` text,
  `l_pic` varchar(60) DEFAULT NULL,
  `l_ext` varchar(12) DEFAULT NULL,
  `l_sort` int(11) DEFAULT NULL,
  `l_tuijian` varchar(12) DEFAULT NULL,
  `l_views` varchar(12) DEFAULT NULL,
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
insert into `z_class`(`l_fid`,`l_name`,`l_name_e`,`l_detail`,`l_pic`,`l_ext`,`l_sort`,`l_tuijian`,`l_views`,`l_id`) values('0','111','11','','2012090115540565441','jpg','0','推荐','显示','2');
insert into `z_class`(`l_fid`,`l_name`,`l_name_e`,`l_detail`,`l_pic`,`l_ext`,`l_sort`,`l_tuijian`,`l_views`,`l_id`) values('2','11-1','','','','','0','不推荐','显示','4');
insert into `z_class`(`l_fid`,`l_name`,`l_name_e`,`l_detail`,`l_pic`,`l_ext`,`l_sort`,`l_tuijian`,`l_views`,`l_id`) values('0','222','222','','2012090115535078286','jpg','0','推荐','显示','5');
insert into `z_class`(`l_fid`,`l_name`,`l_name_e`,`l_detail`,`l_pic`,`l_ext`,`l_sort`,`l_tuijian`,`l_views`,`l_id`) values('0','33','333','','2012090115533787503','jpg','0','推荐','显示','6');
insert into `z_class`(`l_fid`,`l_name`,`l_name_e`,`l_detail`,`l_pic`,`l_ext`,`l_sort`,`l_tuijian`,`l_views`,`l_id`) values('0','888','8888','','','','0','推荐','显示','14');
insert into `z_class`(`l_fid`,`l_name`,`l_name_e`,`l_detail`,`l_pic`,`l_ext`,`l_sort`,`l_tuijian`,`l_views`,`l_id`) values('6','333-1','333-1','','','','0','不推荐','显示','9');
insert into `z_class`(`l_fid`,`l_name`,`l_name_e`,`l_detail`,`l_pic`,`l_ext`,`l_sort`,`l_tuijian`,`l_views`,`l_id`) values('5','222-1','222-1','','','','0','不推荐','显示','10');
CREATE TABLE `z_classpic` (
  `l_classid` int(11) DEFAULT NULL,
  `l_pic` varchar(60) DEFAULT NULL,
  `l_ext` varchar(12) DEFAULT NULL,
  `l_sort` int(11) DEFAULT NULL,
  `l_views` varchar(12) DEFAULT NULL,
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE `z_collection` (
  `l_userid` int(11) DEFAULT NULL,
  `l_productid` int(11) DEFAULT NULL,
  `l_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
insert into `z_collection`(`l_userid`,`l_productid`,`l_time`,`l_id`) values('1','6','2012-12-30 00:14:10','1');
CREATE TABLE `z_comate` (
  `w_classid` int(11) DEFAULT NULL,
  `w_name` varchar(40) DEFAULT NULL,
  `w_url` varchar(100) DEFAULT NULL,
  `w_pic` varchar(60) DEFAULT NULL,
  `w_ext` varchar(12) DEFAULT NULL,
  `w_sort` int(11) DEFAULT NULL,
  `w_views` varchar(12) DEFAULT NULL,
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`w_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
insert into `z_comate`(`w_classid`,`w_name`,`w_url`,`w_pic`,`w_ext`,`w_sort`,`w_views`,`w_id`) values('0','friend','www.sohu.com','','','22','显示','1');
CREATE TABLE `z_comments` (
  `l_userid` int(11) DEFAULT NULL,
  `l_productid` int(11) DEFAULT NULL,
  `l_title` varchar(100) DEFAULT NULL,
  `l_detail` text,
  `l_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `l_views` varchar(12) DEFAULT NULL,
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE `z_contact` (
  `w_company` varchar(100) DEFAULT NULL,
  `w_company_e` varchar(100) DEFAULT NULL,
  `w_address` varchar(100) DEFAULT NULL,
  `w_address_e` varchar(100) DEFAULT NULL,
  `w_tel` varchar(60) DEFAULT NULL,
  `w_tel_e` varchar(60) DEFAULT NULL,
  `w_postcode` varchar(12) DEFAULT NULL,
  `w_fax` varchar(100) DEFAULT NULL,
  `w_email` varchar(100) DEFAULT NULL,
  `w_views` varchar(12) DEFAULT NULL,
  `w_detail` text,
  `w_detail_e` text,
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_pic` varchar(100) DEFAULT NULL,
  `w_qq` varchar(100) DEFAULT NULL,
  `w_msn` varchar(200) DEFAULT NULL,
  `w_open_time` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`w_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
insert into `z_contact`(`w_company`,`w_company_e`,`w_address`,`w_address_e`,`w_tel`,`w_tel_e`,`w_postcode`,`w_fax`,`w_email`,`w_views`,`w_detail`,`w_detail_e`,`w_id`,`w_pic`,`w_qq`,`w_msn`,`w_open_time`) values('1','1','1','1','1','1','1','','1','','<p>欢迎使用ueditor!</p>','<p>欢迎使用ueditor!</p>','1','','1','1','工作时间 8:30 - 17:30 (周一至周日)');
CREATE TABLE `z_fittings` (
  `l_classid` int(11) DEFAULT NULL,
  `l_name` varchar(100) DEFAULT NULL,
  `l_detail` varchar(400) DEFAULT NULL,
  `l_sort` int(11) DEFAULT NULL,
  `l_views` varchar(12) DEFAULT NULL,
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
insert into `z_fittings`(`l_classid`,`l_name`,`l_detail`,`l_sort`,`l_views`,`l_id`) values('2','111','222u','0','显示','2');
insert into `z_fittings`(`l_classid`,`l_name`,`l_detail`,`l_sort`,`l_views`,`l_id`) values('2','fittt','sdffsf','0','显示','5');
CREATE TABLE `z_fittings_pic` (
  `l_pjid` int(11) DEFAULT NULL,
  `l_extname` varchar(40) DEFAULT NULL,
  `l_price1` int(11) DEFAULT NULL,
  `l_price2` int(11) DEFAULT NULL,
  `l_pic` varchar(60) DEFAULT NULL,
  `l_ext` varchar(12) DEFAULT NULL,
  `l_sort` int(11) DEFAULT NULL,
  `l_views` varchar(12) DEFAULT NULL,
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
insert into `z_fittings_pic`(`l_pjid`,`l_extname`,`l_price1`,`l_price2`,`l_pic`,`l_ext`,`l_sort`,`l_views`,`l_id`) values('2','test1','0','0','2009071115574885776','jpg','0','显示','1');
CREATE TABLE `z_helpclass` (
  `l_classname` varchar(100) DEFAULT NULL,
  `l_sort` int(11) DEFAULT NULL,
  `l_views` varchar(12) DEFAULT NULL,
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
insert into `z_helpclass`(`l_classname`,`l_sort`,`l_views`,`l_id`) values('付款方式                                          ','0','显示  ','1');
insert into `z_helpclass`(`l_classname`,`l_sort`,`l_views`,`l_id`) values('购物流程                                          ','0','显示  ','2');
insert into `z_helpclass`(`l_classname`,`l_sort`,`l_views`,`l_id`) values('购物方式                                          ','0','显示  ','3');
insert into `z_helpclass`(`l_classname`,`l_sort`,`l_views`,`l_id`) values('送货方式                                          ','0','显示  ','4');
insert into `z_helpclass`(`l_classname`,`l_sort`,`l_views`,`l_id`) values('客户须知                                          ','0','显示  ','5');
insert into `z_helpclass`(`l_classname`,`l_sort`,`l_views`,`l_id`) values('联系方式                                          ','0','显示  ','6');
CREATE TABLE `z_helpdetail` (
  `l_classid` int(11) DEFAULT NULL,
  `l_title` varchar(100) DEFAULT NULL,
  `l_detail` text,
  `l_sort` int(11) DEFAULT NULL,
  `l_views` varchar(12) NOT NULL,
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE `z_helpic` (
  `l_helpid` int(11) DEFAULT NULL,
  `l_pic` varchar(60) DEFAULT NULL,
  `l_ext` varchar(12) DEFAULT NULL,
  `l_sort` int(11) DEFAULT NULL,
  `l_views` varchar(12) DEFAULT NULL,
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE `z_hot` (
  `l_title` varchar(100) DEFAULT NULL,
  `l_detail` text,
  `l_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `l_sort` int(11) DEFAULT NULL,
  `l_views` varchar(12) DEFAULT NULL,
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
insert into `z_hot`(`l_title`,`l_detail`,`l_time`,`l_sort`,`l_views`,`l_id`) values('1111','111','0000-00-00 00:00:00','11','显示','1');
CREATE TABLE `z_link` (
  `w_classid` int(11) DEFAULT NULL,
  `w_url` varchar(200) DEFAULT NULL,
  `w_sort` int(11) DEFAULT '0',
  `w_views` varchar(12) DEFAULT NULL,
  `w_id` int(11) NOT NULL AUTO_INCREMENT,
  `w_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`w_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
insert into `z_link`(`w_classid`,`w_url`,`w_sort`,`w_views`,`w_id`,`w_name`) values('0','11resff','0','显示','10','11e');
CREATE TABLE `z_order` (
  `l_orderform` int(11) DEFAULT NULL,
  `l_userid` int(11) DEFAULT NULL,
  `l_detail` text,
  `l_price` float DEFAULT NULL,
  `l_consignee` varchar(30) DEFAULT NULL,
  `l_sex` varchar(4) DEFAULT NULL,
  `l_address` varchar(100) DEFAULT NULL,
  `l_phone` varchar(30) DEFAULT NULL,
  `l_mobile` varchar(30) DEFAULT NULL,
  `l_postcode` varchar(12) DEFAULT NULL,
  `l_email` varchar(100) DEFAULT NULL,
  `l_deliver` varchar(30) DEFAULT NULL,
  `l_payment` varchar(30) DEFAULT NULL,
  `l_invoice` varchar(100) DEFAULT NULL,
  `l_place` varchar(200) DEFAULT NULL,
  `l_ordertime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `l_takeffectime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `l_orderstatu` varchar(40) DEFAULT NULL,
  `l_statuinfo` text,
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
insert into `z_order`(`l_orderform`,`l_userid`,`l_detail`,`l_price`,`l_consignee`,`l_sex`,`l_address`,`l_phone`,`l_mobile`,`l_postcode`,`l_email`,`l_deliver`,`l_payment`,`l_invoice`,`l_place`,`l_ordertime`,`l_takeffectime`,`l_orderstatu`,`l_statuinfo`,`l_id`) values('417524659','1','1、> 111:单价:0元 1 件 共: <font color=#ff0000>0</font>元<br><br><hr align=left width=200 size=1 ><br>总价格:<strong><font color=#ff0000>0</font></strong>','0','z','男','','z','','','z@z.z','送货上门','货到付款','','','0000-00-00 00:00:00','0000-00-00 00:00:00','新订单','','1');
insert into `z_order`(`l_orderform`,`l_userid`,`l_detail`,`l_price`,`l_consignee`,`l_sex`,`l_address`,`l_phone`,`l_mobile`,`l_postcode`,`l_email`,`l_deliver`,`l_payment`,`l_invoice`,`l_place`,`l_ordertime`,`l_takeffectime`,`l_orderstatu`,`l_statuinfo`,`l_id`) values('350956737','0','','0','','','','','','','','','','','','2012-12-31 13:43:11','0000-00-00 00:00:00','新订单','','2');
CREATE TABLE `z_product` (
  `l_fid` int(11) DEFAULT NULL,
  `l_classid` int(11) DEFAULT NULL,
  `l_name` varchar(100) DEFAULT NULL,
  `l_name_e` varchar(100) DEFAULT NULL,
  `l_basic` text,
  `l_basic_e` text,
  `l_extend` text,
  `l_extend_e` text,
  `l_price1` float DEFAULT '0',
  `l_price2` float DEFAULT '0',
  `l_units` varchar(20) DEFAULT NULL,
  `l_num` varchar(20) DEFAULT NULL,
  `l_tuijian` varchar(12) DEFAULT NULL,
  `l_shuliang` int(11) DEFAULT NULL,
  `l_sort` int(11) DEFAULT NULL,
  `l_views` varchar(12) DEFAULT NULL,
  `l_clicknum` int(11) DEFAULT NULL,
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
insert into `z_product`(`l_fid`,`l_classid`,`l_name`,`l_name_e`,`l_basic`,`l_basic_e`,`l_extend`,`l_extend_e`,`l_price1`,`l_price2`,`l_units`,`l_num`,`l_tuijian`,`l_shuliang`,`l_sort`,`l_views`,`l_clicknum`,`l_id`) values('6','9','333-1-1','','<FONT face=Verdana>222-1-1</FONT>','<FONT face=Verdana>222-1-1</FONT>','<FONT face=Verdana>222-1-1</FONT>','<FONT face=Verdana>222-1-1</FONT>','0','0','0','0','不推荐','0','0','显示','0','6');
insert into `z_product`(`l_fid`,`l_classid`,`l_name`,`l_name_e`,`l_basic`,`l_basic_e`,`l_extend`,`l_extend_e`,`l_price1`,`l_price2`,`l_units`,`l_num`,`l_tuijian`,`l_shuliang`,`l_sort`,`l_views`,`l_clicknum`,`l_id`) values('2','4','111','','111','','111','','0','0','0','0','不推荐','0','0','显示','0','3');
insert into `z_product`(`l_fid`,`l_classid`,`l_name`,`l_name_e`,`l_basic`,`l_basic_e`,`l_extend`,`l_extend_e`,`l_price1`,`l_price2`,`l_units`,`l_num`,`l_tuijian`,`l_shuliang`,`l_sort`,`l_views`,`l_clicknum`,`l_id`) values('5','10','222-1-1','222-1-1','<FONT face=Verdana>222-1-1</FONT>','<FONT face=Verdana>222-1-1</FONT>','<FONT face=Verdana>222-1-1</FONT>','<FONT face=Verdana>222-1-1</FONT>','0','0','0','0','不推荐','0','0','显示','0','5');
CREATE TABLE `z_productpic` (
  `l_productid` int(11) DEFAULT NULL,
  `l_pic` varchar(60) DEFAULT NULL,
  `l_ext` varchar(12) DEFAULT NULL,
  `l_sort` int(11) DEFAULT NULL,
  `l_title` varchar(40) DEFAULT NULL,
  `l_views` varchar(12) DEFAULT NULL,
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
insert into `z_productpic`(`l_productid`,`l_pic`,`l_ext`,`l_sort`,`l_title`,`l_views`,`l_id`) values('3','2012090117094727716','jpg','0','','显示','18');
CREATE TABLE `z_return` (
  `l_title` varchar(100) DEFAULT NULL,
  `l_detail` text,
  `l_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE `z_smallclass` (
  `l_classid` int(11) DEFAULT NULL,
  `l_name` varchar(100) DEFAULT NULL,
  `l_name_e` varchar(100) DEFAULT NULL,
  `l_detail` varchar(200) DEFAULT NULL,
  `l_sort` int(11) DEFAULT NULL,
  `l_views` varchar(12) DEFAULT NULL,
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
CREATE TABLE `z_user` (
  `shibie` varchar(100) DEFAULT NULL,
  `Cnum` int(11) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `NickName` varchar(100) DEFAULT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `ofrom` varchar(30) DEFAULT NULL,
  `UserPass` varchar(40) DEFAULT NULL,
  `age` varchar(6) DEFAULT NULL,
  `Sex` varchar(12) DEFAULT NULL,
  `UserLevel` varchar(32) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `PostCode` varchar(12) DEFAULT NULL,
  `Tel` varchar(100) DEFAULT NULL,
  `mobile` varchar(26) DEFAULT NULL,
  `RegTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `LastLoginTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `LoginNum` int(11) DEFAULT NULL,
  `Photo` varchar(100) DEFAULT NULL,
  `Detail` text,
  `Msn` varchar(100) DEFAULT NULL,
  `QQ` varchar(40) DEFAULT NULL,
  `Tid` int(11) DEFAULT NULL,
  `statu` varchar(4) DEFAULT NULL,
  `Views` varchar(12) DEFAULT NULL,
  `Meid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Meid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
insert into `z_user`(`shibie`,`Cnum`,`Email`,`NickName`,`UserName`,`ofrom`,`UserPass`,`age`,`Sex`,`UserLevel`,`Address`,`PostCode`,`Tel`,`mobile`,`RegTime`,`LastLoginTime`,`LoginNum`,`Photo`,`Detail`,`Msn`,`QQ`,`Tid`,`statu`,`Views`,`Meid`) values('wode','22359566','weiyongq@gmail.com','wei','yongqing','','c4ca4238a0b923820dcc509a6f75849b','','男','dad','sad','asd','ssasdf','','0000-00-00 00:00:00','0000-00-00 00:00:00','0','01.gif','<p> &nbsp; &nbsp;<strong>内容</strong> &nbsp; &nbsp; &nbsp;</p>','dsfaf','dffff','0','','已开通','2');
CREATE TABLE `z_viewhistory` (
  `l_userid` int(11) DEFAULT NULL,
  `l_productid` int(11) DEFAULT NULL,
  `l_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `l_viewnum` int(11) DEFAULT NULL,
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`l_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
