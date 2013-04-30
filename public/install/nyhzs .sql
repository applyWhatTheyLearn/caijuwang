-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 12 月 27 日 16:23
-- 服务器版本: 5.5.27
-- PHP 版本: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `nyhzs`
--

-- --------------------------------------------------------

--
-- 表的结构 `Accredit`
--

CREATE TABLE IF NOT EXISTS `Accredit` (
  `AdminID` int(11) DEFAULT NULL,
  `AccID_t` int(11) DEFAULT NULL,
  `TitleName` varchar(40) DEFAULT NULL,
  `LinkName` varchar(100) DEFAULT NULL,
  `FotherID` int(11) DEFAULT NULL,
  `compositor` int(11) DEFAULT NULL,
  `AccID` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `Accredit`
--

INSERT INTO `Accredit` (`AdminID`, `AccID_t`, `TitleName`, `LinkName`, `FotherID`, `compositor`, `AccID`) VALUES
(1, 1, '权限管理            ', 'managedetail.html                                 ', 0, 200, 1),
(1, 2, '登陆用户管理        ', 'User_List.php                                     ', 1, 100, 2),
(1, 3, '后台栏目管理        ', 'QxLm_List.php                                     ', 1, 200, 3),
(1, 4, '用户管理', 'managedetail.html', 0, 100, 4),
(1, 5, '用户信息修改        ', 'Login_User.php                                    ', 4, 100, 5),
(1, 6, '会员管理            ', 'managedetail.html                                 ', 0, 500, 6),
(1, 7, '有情连接            ', 'link/Link_list.php                                ', 0, 600, 7),
(1, 8, '合作伙伴            ', 'Comate/Comate_list.php                            ', 0, 700, 8),
(1, 9, '联系我们            ', 'contact/contact_modi.php                          ', 0, 800, 9),
(1, 10, '会员管理信息        ', 'members/Member_List.php                           ', 6, 100, 10),
(1, 11, '商品管理            ', 'managedetail.html                                 ', 0, 300, 11),
(1, 12, '商品分类管理        ', 'ProductClass/ProBigClass_index.html               ', 11, 100, 12),
(1, 13, '商品内容管理        ', 'ProductDetail/Pro_door.php                        ', 11, 200, 13),
(1, 14, '订单管理            ', 'managedetail.html                                 ', 0, 400, 14),
(1, 15, '用户评论管理        ', 'PingLun/PingLun_list.php                          ', 0, 1000, 15),
(1, 16, '促销公告管理        ', 'GongGao/GongGao_list.php                          ', 0, 1100, 16),
(1, 17, '帮助中心            ', 'help/help_door.php                                ', 0, 900, 17),
(1, 18, '进行中的订单        ', 'order/JinXing_Order_list.php                      ', 14, 200, 18),
(1, 19, '已完成的订单        ', 'order/Complate_Order_list.php                     ', 14, 200, 19),
(1, 21, '新品推荐管理        ', 'ProductDetail/Pro_TjList.php                      ', 11, 300, 21),
(1, 23, '热门活动            ', 'hot/Hot_list.php                                  ', 0, 1200, 23),
(1, 22, '新订单', 'order/New_Order_list.php', 14, 100, 27),
(1, 20, '意见反馈', 'return/return_list.php', 0, 1300, 28),
(1, 25, '备案信息管理', 'copyright/copyright_modi.php', 0, 1400, 29),
(1, 26, '站内宣传图片替换', 'picmanage/pic_list.php', 0, 1500, 30),
(1, 27, '数据库备份', 'backup_db/backup_database.php', 0, 1600, 31);

-- --------------------------------------------------------

--
-- 表的结构 `Accredit_t`
--

CREATE TABLE IF NOT EXISTS `Accredit_t` (
  `TitleName_t` varchar(40) NOT NULL,
  `LinkName_t` varchar(100) NOT NULL,
  `FotherID_t` int(11) NOT NULL,
  `compositor_t` int(11) DEFAULT NULL,
  `AccID_t` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `Accredit_t`
--

INSERT INTO `Accredit_t` (`TitleName_t`, `LinkName_t`, `FotherID_t`, `compositor_t`, `AccID_t`) VALUES
('权限管理            ', 'managedetail.html                                 ', 0, 200, 1),
('登陆用户管理        ', 'User_List.php                                     ', 1, 100, 2),
('后台栏目管理        ', 'QxLm_List.php                                     ', 1, 200, 3),
('用户管理', 'managedetail.html', 0, 100, 4),
('用户信息修改        ', 'Login_User.php                                    ', 4, 100, 5),
('会员管理            ', 'managedetail.html                                 ', 0, 500, 6),
('有情连接            ', 'link/Link_list.php                                ', 0, 600, 7),
('合作伙伴            ', 'Comate/Comate_list.php                            ', 0, 700, 8),
('联系我们            ', 'contact/contact_modi.php                          ', 0, 800, 9),
('会员管理信息        ', 'members/Member_List.php                           ', 6, 100, 10),
('商品管理            ', 'managedetail.html                                 ', 0, 300, 11),
('商品分类管理        ', 'ProductClass/ProBigClass_index.html               ', 11, 100, 12),
('商品内容管理        ', 'ProductDetail/Pro_door.php                        ', 11, 200, 13),
('订单管理            ', 'managedetail.html                                 ', 0, 400, 14),
('用户评论管理        ', 'PingLun/PingLun_list.php                          ', 0, 1000, 15),
('促销公告管理        ', 'GongGao/GongGao_list.php                          ', 0, 1100, 16),
('帮助中心            ', 'help/help_door.php                                ', 0, 900, 17),
('进行中的订单        ', 'order/JinXing_Order_list.php                      ', 14, 200, 18),
('已完成的订单        ', 'order/Complate_Order_list.php                     ', 14, 200, 19),
('意见反馈            ', 'return/return_list.php                            ', 0, 1300, 20),
('新品推荐管理        ', 'ProductDetail/Pro_TjList.php                      ', 11, 300, 21),
('新订单              ', 'order/New_Order_list.php                          ', 14, 100, 22),
('热门活动            ', 'hot/Hot_list.php                                  ', 0, 1200, 23),
('备案信息管理', 'copyright/copyright_modi.php', 0, 1400, 25),
('站内宣传图片替换', 'picmanage/pic_list.php', 0, 1500, 26),
('数据库备份', 'backup_db/backup_database.php', 0, 1600, 27);

-- --------------------------------------------------------

--
-- 表的结构 `Admin`
--

CREATE TABLE IF NOT EXISTS `Admin` (
  `UserName` varchar(30) DEFAULT NULL,
  `UserPass` varchar(100) DEFAULT NULL,
  `opens` varchar(10) DEFAULT NULL,
  `InpuTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `UserID` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `w_ad_pic`
--

CREATE TABLE IF NOT EXISTS `w_ad_pic` (
  `l_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `l_pic` varchar(60) DEFAULT NULL,
  `l_ext` varchar(12) DEFAULT NULL,
  `l_title` varchar(100) DEFAULT NULL,
  `l_url` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `w_ad_pic`
--

INSERT INTO `w_ad_pic` (`l_id`, `l_pic`, `l_ext`, `l_title`, `l_url`) VALUES
(8, 'logo_bottom', 'gif', '底部logo图片', ''),
(9, 'pic_4_12', 'gif', '默认显示图片', ''),
(1, 'firstPic-7', 'jpg', '首页会员登录下图片(91px*29px)', ''),
(2, 'firstPic-8', 'jpg', '首页会员登录下图片(91px*29px)', ''),
(3, 'firstPic-4', 'jpg', '首页banner广告图片(767px*90px)', ''),
(7, 'style2_logo', 'gif', '顶部logo图片', '');

-- --------------------------------------------------------

--
-- 表的结构 `w_copyright`
--

CREATE TABLE IF NOT EXISTS `w_copyright` (
  `w_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `w_companyname` varchar(200) DEFAULT NULL,
  `w_copyright` varchar(100) DEFAULT NULL,
  `w_tongji` varchar(510) DEFAULT NULL,
  `w_beiannum` varchar(100) DEFAULT NULL,
  `w_sort` int(11) DEFAULT '0',
  `w_views` varchar(12) DEFAULT '显示'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `w_copyright`
--

INSERT INTO `w_copyright` (`w_id`, `w_companyname`, `w_copyright`, `w_tongji`, `w_beiannum`, `w_sort`, `w_views`) VALUES
(3, '北京XXXXXXXX有限公司', 'COPPYRIGHT SYCWEB. ALL RIGHTS RESERVED.', '', '京ICP备1234567890号', 10, '显示');

-- --------------------------------------------------------

--
-- 表的结构 `w_db_bakinfo`
--

CREATE TABLE IF NOT EXISTS `w_db_bakinfo` (
  `w_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `w_name` varchar(40) DEFAULT NULL,
  `w_ext` varchar(12) DEFAULT NULL,
  `w_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `w_db_bakinfo`
--

INSERT INTO `w_db_bakinfo` (`w_id`, `w_name`, `w_ext`, `w_time`) VALUES
(18, '2012-9-1', '', '2012-12-24 16:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `z_affiche`
--

CREATE TABLE IF NOT EXISTS `z_affiche` (
  `l_title` varchar(100) DEFAULT NULL,
  `l_detail` text,
  `l_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `l_sort` int(11) DEFAULT NULL,
  `l_views` varchar(12) DEFAULT NULL,
  `l_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `z_affiche`
--

INSERT INTO `z_affiche` (`l_title`, `l_detail`, `l_time`, `l_sort`, `l_views`, `l_id`) VALUES
('111', '111', '2012-12-24 16:00:00', 2, '显示', 1);

-- --------------------------------------------------------

--
-- 表的结构 `z_car`
--

CREATE TABLE IF NOT EXISTS `z_car` (
  `l_productid` int(11) DEFAULT NULL,
  `l_num` int(11) DEFAULT NULL,
  `l_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `l_tempnum` varchar(40) DEFAULT NULL,
  `l_extprice1` int(11) DEFAULT '0',
  `l_extprice2` int(11) DEFAULT '0',
  `l_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `z_car`
--

INSERT INTO `z_car` (`l_productid`, `l_num`, `l_datetime`, `l_tempnum`, `l_extprice1`, `l_extprice2`, `l_id`) VALUES
(4, 1, '2012-12-24 16:00:00', '20121224210309186784', 0, 0, 37);

-- --------------------------------------------------------

--
-- 表的结构 `z_carext`
--

CREATE TABLE IF NOT EXISTS `z_carext` (
  `l_carid` int(11) DEFAULT NULL,
  `l_fittingid` int(11) DEFAULT NULL,
  `l_num` int(11) DEFAULT NULL,
  `l_datetime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `l_tempnum` varchar(40) DEFAULT NULL,
  `l_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `z_class`
--

CREATE TABLE IF NOT EXISTS `z_class` (
  `l_fid` int(11) DEFAULT NULL,
  `l_name` varchar(100) DEFAULT NULL,
  `l_name_e` varchar(100) DEFAULT NULL,
  `l_detail` text,
  `l_pic` varchar(60) DEFAULT NULL,
  `l_ext` varchar(12) DEFAULT NULL,
  `l_sort` int(11) DEFAULT NULL,
  `l_tuijian` varchar(12) DEFAULT NULL,
  `l_views` varchar(12) DEFAULT NULL,
  `l_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `z_class`
--

INSERT INTO `z_class` (`l_fid`, `l_name`, `l_name_e`, `l_detail`, `l_pic`, `l_ext`, `l_sort`, `l_tuijian`, `l_views`, `l_id`) VALUES
(0, '111', '11', '', '2012090115540565441', 'jpg', 0, '推荐', '显示', 2),
(2, '11-1', '', '', '', '', 0, '不推荐', '显示', 4),
(0, '222', '222', '', '2012090115535078286', 'jpg', 0, '推荐', '显示', 5),
(0, '33', '333', '', '2012090115533787503', 'jpg', 0, '推荐', '显示', 6),
(0, '444', '444', '', '2012090115533065673', 'jpg', 0, '推荐', '显示', 7),
(7, '4-1', '4-1', '', '', '', 0, '推荐', '显示', 8),
(6, '333-1', '333-1', '', '', '', 0, '不推荐', '显示', 9),
(5, '222-1', '222-1', '', '', '', 0, '不推荐', '显示', 10);

-- --------------------------------------------------------

--
-- 表的结构 `z_classpic`
--

CREATE TABLE IF NOT EXISTS `z_classpic` (
  `l_classid` int(11) DEFAULT NULL,
  `l_pic` varchar(60) DEFAULT NULL,
  `l_ext` varchar(12) DEFAULT NULL,
  `l_sort` int(11) DEFAULT NULL,
  `l_views` varchar(12) DEFAULT NULL,
  `l_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `z_collection`
--

CREATE TABLE IF NOT EXISTS `z_collection` (
  `l_userid` int(11) DEFAULT NULL,
  `l_productid` int(11) DEFAULT NULL,
  `l_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `l_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `z_comate`
--

CREATE TABLE IF NOT EXISTS `z_comate` (
  `w_classid` int(11) DEFAULT NULL,
  `w_name` varchar(40) DEFAULT NULL,
  `w_url` varchar(100) DEFAULT NULL,
  `w_pic` varchar(60) DEFAULT NULL,
  `w_ext` varchar(12) DEFAULT NULL,
  `w_sort` int(11) DEFAULT NULL,
  `w_views` varchar(12) DEFAULT NULL,
  `w_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `z_comments`
--

CREATE TABLE IF NOT EXISTS `z_comments` (
  `l_userid` int(11) DEFAULT NULL,
  `l_productid` int(11) DEFAULT NULL,
  `l_title` varchar(100) DEFAULT NULL,
  `l_detail` text,
  `l_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `l_views` varchar(12) DEFAULT NULL,
  `l_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `z_contact`
--

CREATE TABLE IF NOT EXISTS `z_contact` (
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
  `w_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `w_pic` varchar(100) DEFAULT NULL,
  `w_qq` varchar(100) DEFAULT NULL,
  `w_msn` varchar(200) DEFAULT NULL,
  `w_open_time` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `z_contact`
--

INSERT INTO `z_contact` (`w_company`, `w_company_e`, `w_address`, `w_address_e`, `w_tel`, `w_tel_e`, `w_postcode`, `w_fax`, `w_email`, `w_views`, `w_detail`, `w_detail_e`, `w_id`, `w_pic`, `w_qq`, `w_msn`, `w_open_time`) VALUES
('1', '1', '1', '1', '1', '1', '1', '1', '1', '', '', '', 1, '', '1', '1', '工作时间 8:30 - 17:30 (周一至周日)');

-- --------------------------------------------------------

--
-- 表的结构 `z_fittings`
--

CREATE TABLE IF NOT EXISTS `z_fittings` (
  `l_classid` int(11) DEFAULT NULL,
  `l_name` varchar(100) DEFAULT NULL,
  `l_detail` varchar(400) DEFAULT NULL,
  `l_sort` int(11) DEFAULT NULL,
  `l_views` varchar(12) DEFAULT NULL,
  `l_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `z_fittings`
--

INSERT INTO `z_fittings` (`l_classid`, `l_name`, `l_detail`, `l_sort`, `l_views`, `l_id`) VALUES
(2, '111', '222', 0, '显示', 2),
(7, '4444444', '1111', 0, '显示', 3),
(7, '结构和改革', '即将', 0, '显示', 4);

-- --------------------------------------------------------

--
-- 表的结构 `z_fittings_pic`
--

CREATE TABLE IF NOT EXISTS `z_fittings_pic` (
  `l_pjid` int(11) DEFAULT NULL,
  `l_extname` varchar(40) DEFAULT NULL,
  `l_price1` int(11) DEFAULT NULL,
  `l_price2` int(11) DEFAULT NULL,
  `l_pic` varchar(60) DEFAULT NULL,
  `l_ext` varchar(12) DEFAULT NULL,
  `l_sort` int(11) DEFAULT NULL,
  `l_views` varchar(12) DEFAULT NULL,
  `l_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `z_fittings_pic`
--

INSERT INTO `z_fittings_pic` (`l_pjid`, `l_extname`, `l_price1`, `l_price2`, `l_pic`, `l_ext`, `l_sort`, `l_views`, `l_id`) VALUES
(2, 'test1', 0, 0, '2009071115574885776', 'jpg', 0, '显示', 1),
(3, '', 100, 100, '2012090119284505660', 'jpg', 0, '显示', 2),
(4, '', 20, 20, '2012090214532832864', 'bmp', 0, '显示', 3),
(4, '', 10, 10, '2012090214533892817', 'bmp', 0, '显示', 4);

-- --------------------------------------------------------

--
-- 表的结构 `z_helpclass`
--

CREATE TABLE IF NOT EXISTS `z_helpclass` (
  `l_classname` varchar(100) DEFAULT NULL,
  `l_sort` int(11) DEFAULT NULL,
  `l_views` varchar(12) DEFAULT NULL,
  `l_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `z_helpclass`
--

INSERT INTO `z_helpclass` (`l_classname`, `l_sort`, `l_views`, `l_id`) VALUES
('付款方式                                          ', 0, '显示  ', 1),
('购物流程                                          ', 0, '显示  ', 2),
('购物方式                                          ', 0, '显示  ', 3),
('送货方式                                          ', 0, '显示  ', 4),
('客户须知                                          ', 0, '显示  ', 5),
('联系方式                                          ', 0, '显示  ', 6);

-- --------------------------------------------------------

--
-- 表的结构 `z_helpdetail`
--

CREATE TABLE IF NOT EXISTS `z_helpdetail` (
  `l_classid` int(11) DEFAULT NULL,
  `l_title` varchar(100) DEFAULT NULL,
  `l_detail` text,
  `l_sort` int(11) DEFAULT NULL,
  `l_views` varchar(12) NOT NULL,
  `l_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `z_helpic`
--

CREATE TABLE IF NOT EXISTS `z_helpic` (
  `l_helpid` int(11) DEFAULT NULL,
  `l_pic` varchar(60) DEFAULT NULL,
  `l_ext` varchar(12) DEFAULT NULL,
  `l_sort` int(11) DEFAULT NULL,
  `l_views` varchar(12) DEFAULT NULL,
  `l_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `z_hot`
--

CREATE TABLE IF NOT EXISTS `z_hot` (
  `l_title` varchar(100) DEFAULT NULL,
  `l_detail` text,
  `l_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `l_sort` int(11) DEFAULT NULL,
  `l_views` varchar(12) DEFAULT NULL,
  `l_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `z_hot`
--

INSERT INTO `z_hot` (`l_title`, `l_detail`, `l_time`, `l_sort`, `l_views`, `l_id`) VALUES
('1111', '111', '0000-00-00 00:00:00', 11, '显示', 1);

-- --------------------------------------------------------

--
-- 表的结构 `z_link`
--

CREATE TABLE IF NOT EXISTS `z_link` (
  `w_classid` int(11) DEFAULT NULL,
  `w_url` varchar(200) DEFAULT NULL,
  `w_sort` int(11) DEFAULT '0',
  `w_views` varchar(12) DEFAULT NULL,
  `w_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `w_name` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `z_link`
--

INSERT INTO `z_link` (`w_classid`, `w_url`, `w_sort`, `w_views`, `w_id`, `w_name`) VALUES
(0, '11', 0, '显示', 10, '11');

-- --------------------------------------------------------

--
-- 表的结构 `z_order`
--

CREATE TABLE IF NOT EXISTS `z_order` (
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
  `l_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `z_order`
--

INSERT INTO `z_order` (`l_orderform`, `l_userid`, `l_detail`, `l_price`, `l_consignee`, `l_sex`, `l_address`, `l_phone`, `l_mobile`, `l_postcode`, `l_email`, `l_deliver`, `l_payment`, `l_invoice`, `l_place`, `l_ordertime`, `l_takeffectime`, `l_orderstatu`, `l_statuinfo`, `l_id`) VALUES
(417524659, 1, '1、> 111:单价:0元 1 件 共: <font color=#ff0000>0</font>元<br><br><hr align=left width=200 size=1 ><br>总价格:<strong><font color=#ff0000>0</font></strong>', 0, 'z', '男', '', 'z', '', '', 'z@z.z', '送货上门', '货到付款', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '新订单', '', 1);

-- --------------------------------------------------------

--
-- 表的结构 `z_product`
--

CREATE TABLE IF NOT EXISTS `z_product` (
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
  `l_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `z_product`
--

INSERT INTO `z_product` (`l_fid`, `l_classid`, `l_name`, `l_name_e`, `l_basic`, `l_basic_e`, `l_extend`, `l_extend_e`, `l_price1`, `l_price2`, `l_units`, `l_num`, `l_tuijian`, `l_shuliang`, `l_sort`, `l_views`, `l_clicknum`, `l_id`) VALUES
(6, 9, '333-1-1', '', '<FONT face=Verdana>222-1-1</FONT>', '<FONT face=Verdana>222-1-1</FONT>', '<FONT face=Verdana>222-1-1</FONT>', '<FONT face=Verdana>222-1-1</FONT>', 0, 0, '0', '0', '不推荐', 0, 0, '显示', 0, 6),
(7, 8, '4-1-2', '4-1-2', '<FONT face=Verdana>4-1-2</FONT>', '<FONT face=Verdana>4-1-2</FONT>', '<FONT face=Verdana>4-1-2</FONT>', '<FONT face=Verdana>4-1-2</FONT>', 0, 0, '0', '0', '推荐', 0, 0, '显示', 0, 7),
(2, 4, '111', '', '111', '', '111', '', 0, 0, '0', '0', '不推荐', 0, 0, '显示', 0, 3),
(7, 8, '4-1-1', '4-1-1', '<FONT face=Verdana>4-1-1</FONT>', '<FONT face=Verdana>4-1-1</FONT>', '<FONT face=Verdana>4-1-1</FONT>', '<FONT face=Verdana>4-1-1</FONT>', 0, 0, '0', '0', '推荐', 0, 0, '显示', 0, 4),
(5, 10, '222-1-1', '222-1-1', '<FONT face=Verdana>222-1-1</FONT>', '<FONT face=Verdana>222-1-1</FONT>', '<FONT face=Verdana>222-1-1</FONT>', '<FONT face=Verdana>222-1-1</FONT>', 0, 0, '0', '0', '不推荐', 0, 0, '显示', 0, 5);

-- --------------------------------------------------------

--
-- 表的结构 `z_productpic`
--

CREATE TABLE IF NOT EXISTS `z_productpic` (
  `l_productid` int(11) DEFAULT NULL,
  `l_pic` varchar(60) DEFAULT NULL,
  `l_ext` varchar(12) DEFAULT NULL,
  `l_sort` int(11) DEFAULT NULL,
  `l_title` varchar(40) DEFAULT NULL,
  `l_views` varchar(12) DEFAULT NULL,
  `l_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `z_productpic`
--

INSERT INTO `z_productpic` (`l_productid`, `l_pic`, `l_ext`, `l_sort`, `l_title`, `l_views`, `l_id`) VALUES
(3, '2012090117094727716', 'jpg', 0, '', '显示', 18),
(4, '2012090214574037443', 'jpg', 0, '', '显示', 19),
(4, '2012090214581443828', 'jpg', 0, '', '显示', 20);

-- --------------------------------------------------------

--
-- 表的结构 `z_return`
--

CREATE TABLE IF NOT EXISTS `z_return` (
  `l_title` varchar(100) DEFAULT NULL,
  `l_detail` text,
  `l_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `l_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `z_smallclass`
--

CREATE TABLE IF NOT EXISTS `z_smallclass` (
  `l_classid` int(11) DEFAULT NULL,
  `l_name` varchar(100) DEFAULT NULL,
  `l_name_e` varchar(100) DEFAULT NULL,
  `l_detail` varchar(200) DEFAULT NULL,
  `l_sort` int(11) DEFAULT NULL,
  `l_views` varchar(12) DEFAULT NULL,
  `l_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `z_user`
--

CREATE TABLE IF NOT EXISTS `z_user` (
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
  `Meid` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



-- --------------------------------------------------------

--
-- 表的结构 `z_viewhistory`
--

CREATE TABLE IF NOT EXISTS `z_viewhistory` (
  `l_userid` int(11) DEFAULT NULL,
  `l_productid` int(11) DEFAULT NULL,
  `l_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `l_viewnum` int(11) DEFAULT NULL,
  `l_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;