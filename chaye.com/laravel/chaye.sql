/*
Navicat MySQL Data Transfer

Source Server         : chaye
Source Server Version : 80012
Source Host           : localhost:3306
Source Database       : chaye

Target Server Type    : MYSQL
Target Server Version : 80012
File Encoding         : 65001

Date: 2020-03-16 13:27:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `chaye_admin`
-- ----------------------------
DROP TABLE IF EXISTS `chaye_admin`;
CREATE TABLE `chaye_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of chaye_admin
-- ----------------------------
INSERT INTO `chaye_admin` VALUES ('5', 'admins', 'e10adc3949ba59abbe56e057f20f883e', '2020-03-04 14:17:19');
INSERT INTO `chaye_admin` VALUES ('3', 'admin', 'e5b3f69881d35c3447e91754d95dba00', '2020-03-04 13:50:48');

-- ----------------------------
-- Table structure for `chaye_article`
-- ----------------------------
DROP TABLE IF EXISTS `chaye_article`;
CREATE TABLE `chaye_article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cateid` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of chaye_article
-- ----------------------------
INSERT INTO `chaye_article` VALUES ('3', '测试文章', 'admin', '测试文章', './Uploads/e0e6c8e0176445dc1bb33e2a805493e4.jpg', '2020-03-03 15:02:00', '测试文章', '测试文章', '13');
INSERT INTO `chaye_article` VALUES ('4', '测试文章2', 'admin', '测试文章2', './Uploads/1b2f5e5d10cac7ad2d29d3d84a96044e.jpg', '2020-03-03 15:02:22', '测试文章2', '测试文章2', '14');
INSERT INTO `chaye_article` VALUES ('5', '测试文章3', 'admin', '测试文章3', './Uploads/c43bf5e2b78a2c141d5efec28c352227.png', '2020-03-03 15:11:32', '测试文章3', '测试文章3', '15');

-- ----------------------------
-- Table structure for `chaye_banner`
-- ----------------------------
DROP TABLE IF EXISTS `chaye_banner`;
CREATE TABLE `chaye_banner` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of chaye_banner
-- ----------------------------
INSERT INTO `chaye_banner` VALUES ('1', '首页', './Uploads/47a41e8a66bd4c3c52eefca5cb8ce6e9.jpg', '1');
INSERT INTO `chaye_banner` VALUES ('2', '首页2', './Uploads/7f4ccd8f24abdb19962e1a38a65b2822.jpg', '1');

-- ----------------------------
-- Table structure for `chaye_config`
-- ----------------------------
DROP TABLE IF EXISTS `chaye_config`;
CREATE TABLE `chaye_config` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of chaye_config
-- ----------------------------
INSERT INTO `chaye_config` VALUES ('1', '公司名称', 'company_name', '茶叶公司');
INSERT INTO `chaye_config` VALUES ('2', '联系人', 'contact_name', 'XXXXXX');
INSERT INTO `chaye_config` VALUES ('3', '手机', 'phone', '873468834');
INSERT INTO `chaye_config` VALUES ('4', '电话', 'telphone', '020-873468834');
INSERT INTO `chaye_config` VALUES ('5', '邮箱', 'email', 'xxxxxx@163.com');
INSERT INTO `chaye_config` VALUES ('6', '地址', 'address', '广东省广州市天河区天平架沙太路沙太路');
INSERT INTO `chaye_config` VALUES ('7', '支付宝ID', 'alipayid', 'qwer1234');
INSERT INTO `chaye_config` VALUES ('8', '支付宝key', 'alipaykey', 'asdfq1w2e3r4');
INSERT INTO `chaye_config` VALUES ('9', '短信id', 'smsid', 'qwer1234');
INSERT INTO `chaye_config` VALUES ('10', '短信key', 'smskey', 'asdfq1w2e3r4');
INSERT INTO `chaye_config` VALUES ('11', '短信模板', 'smscode', '349761');
INSERT INTO `chaye_config` VALUES ('12', '短信签名', 'signame', '茶叶公司');
INSERT INTO `chaye_config` VALUES ('19', '网站LOGO', 'logo', 'http://chaye.com/Home/images/53007d5b00000.png');
INSERT INTO `chaye_config` VALUES ('20', '传真', 'fix', '020-98-873468834');

-- ----------------------------
-- Table structure for `chaye_doc`
-- ----------------------------
DROP TABLE IF EXISTS `chaye_doc`;
CREATE TABLE `chaye_doc` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cateid` int(10) DEFAULT NULL,
  `file` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of chaye_doc
-- ----------------------------
INSERT INTO `chaye_doc` VALUES ('1', '测试档案', '测试档案', '2020-02-29 15:10:27', '27', './Uploads/dc53bc91a04a6640ce67eec52e130db3.xlsx');
INSERT INTO `chaye_doc` VALUES ('2', '测试档案2', '测试档案2', '2020-02-29 15:07:25', '28', './Uploads/dc53bc91a04a6640ce67eec52e130db3.xlsx');
INSERT INTO `chaye_doc` VALUES ('4', '测试档案3', '测试档案3', '2020-03-12 22:26:16', '27', './Uploads/dc53bc91a04a6640ce67eec52e130db3.xlsx');
INSERT INTO `chaye_doc` VALUES ('5', '测试档案4', '测试档案4', '2020-03-12 23:05:29', '28', './Uploads/dc53bc91a04a6640ce67eec52e130db3.xlsx');

-- ----------------------------
-- Table structure for `chaye_link`
-- ----------------------------
DROP TABLE IF EXISTS `chaye_link`;
CREATE TABLE `chaye_link` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of chaye_link
-- ----------------------------
INSERT INTO `chaye_link` VALUES ('1', '百度', 'https://www.baidu.com');
INSERT INTO `chaye_link` VALUES ('2', '新浪', 'https://www.sina.com');
INSERT INTO `chaye_link` VALUES ('3', '哔哩哔哩', 'https://www.bilibili.com');
INSERT INTO `chaye_link` VALUES ('11', '百度', 'https://www.baidu.com');
INSERT INTO `chaye_link` VALUES ('10', '网易', 'www.163.com');
INSERT INTO `chaye_link` VALUES ('9', '斗鱼', 'www.douyu.com');
INSERT INTO `chaye_link` VALUES ('8', '虎牙', 'www.huya.com');
INSERT INTO `chaye_link` VALUES ('12', '网易', 'https://www.163.com');
INSERT INTO `chaye_link` VALUES ('13', '网易', 'https://www.163.com');

-- ----------------------------
-- Table structure for `chaye_migrations`
-- ----------------------------
DROP TABLE IF EXISTS `chaye_migrations`;
CREATE TABLE `chaye_migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of chaye_migrations
-- ----------------------------
INSERT INTO `chaye_migrations` VALUES ('69', '2020_02_25_161018_create_nav_table', '2');
INSERT INTO `chaye_migrations` VALUES ('70', '2020_02_25_161028_create_article_table', '2');
INSERT INTO `chaye_migrations` VALUES ('71', '2020_02_25_161048_create_photo_table', '2');
INSERT INTO `chaye_migrations` VALUES ('5', '2020_02_25_161109_create_page_table', '1');
INSERT INTO `chaye_migrations` VALUES ('72', '2020_02_25_161101_create_product_table', '2');
INSERT INTO `chaye_migrations` VALUES ('73', '2020_02_25_161120_create_config_table', '2');
INSERT INTO `chaye_migrations` VALUES ('74', '2020_02_25_161204_create_admin_table', '2');
INSERT INTO `chaye_migrations` VALUES ('75', '2020_02_25_161307_create_doc_table', '2');
INSERT INTO `chaye_migrations` VALUES ('76', '2020_02_25_161349_create_msg_table', '2');
INSERT INTO `chaye_migrations` VALUES ('77', '2020_02_25_174410_create_link_table', '2');
INSERT INTO `chaye_migrations` VALUES ('78', '2020_02_25_204251_create_banner_table', '2');

-- ----------------------------
-- Table structure for `chaye_msg`
-- ----------------------------
DROP TABLE IF EXISTS `chaye_msg`;
CREATE TABLE `chaye_msg` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of chaye_msg
-- ----------------------------
INSERT INTO `chaye_msg` VALUES ('1', '这是测试', '我自己', '13751781210', '867495087@qq.com', '广东省广州市天河区天平架沙太路沙太路', '1232132131');
INSERT INTO `chaye_msg` VALUES ('2', '这是测试', '我自己', '13751781210', '867495087@qq.com', '广东省广州市天河区天平架沙太路沙太路', '1232132131');
INSERT INTO `chaye_msg` VALUES ('3', '这是测试', '我自己', '13751781210', '867495087@qq.com', '广东省广州市天河区天平架沙太路沙太路', '1232132131');
INSERT INTO `chaye_msg` VALUES ('4', '这是测试', '我自己', '13751781210', '867495087@qq.com', '广东省广州市天河区天平架沙太路沙太路', '1232132131');
INSERT INTO `chaye_msg` VALUES ('5', '这是测试', '我自己', '13751781210', '867495087@qq.com', '广东省广州市天河区天平架沙太路沙太路', '1232132131');
INSERT INTO `chaye_msg` VALUES ('6', '这是测试', '我自己', '13751781210', '867495087@qq.com', '广东省广州市天河区天平架沙太路沙太路', '1232132131');
INSERT INTO `chaye_msg` VALUES ('7', '这是测试', '我自己', '13751781210', '867495087@qq.com', '广东省广州市天河区天平架沙太路沙太路', '1232132131');
INSERT INTO `chaye_msg` VALUES ('8', '这是测试2', '我自己', '13751781210', '969152928@qq.com', '广东省广州市天河区天平架沙太路沙太路', '123');

-- ----------------------------
-- Table structure for `chaye_nav`
-- ----------------------------
DROP TABLE IF EXISTS `chaye_nav`;
CREATE TABLE `chaye_nav` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` tinyint(4) NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of chaye_nav
-- ----------------------------
INSERT INTO `chaye_nav` VALUES ('1', '网站首页', '0', '/');
INSERT INTO `chaye_nav` VALUES ('2', '公司简介', '0', '/brief');
INSERT INTO `chaye_nav` VALUES ('3', '产品中心', '0', '/product');
INSERT INTO `chaye_nav` VALUES ('4', '新闻中心', '0', '/article');
INSERT INTO `chaye_nav` VALUES ('5', '下载中心', '0', '/download');
INSERT INTO `chaye_nav` VALUES ('6', '公司相册', '0', '/photo');
INSERT INTO `chaye_nav` VALUES ('7', '在线留言', '0', '/message');
INSERT INTO `chaye_nav` VALUES ('8', '联系我们', '0', '/contact');
INSERT INTO `chaye_nav` VALUES ('9', '产品大类1', '3', '');
INSERT INTO `chaye_nav` VALUES ('10', '产品大类2', '3', '');
INSERT INTO `chaye_nav` VALUES ('11', '产品大类3', '3', '');
INSERT INTO `chaye_nav` VALUES ('12', '产品大类4', '3', '');
INSERT INTO `chaye_nav` VALUES ('13', '公司新闻', '4', '');
INSERT INTO `chaye_nav` VALUES ('14', '行业新闻', '4', '');
INSERT INTO `chaye_nav` VALUES ('15', '科技创新', '4', '');
INSERT INTO `chaye_nav` VALUES ('16', '员工相册', '6', '');
INSERT INTO `chaye_nav` VALUES ('17', '客户案例', '6', '');
INSERT INTO `chaye_nav` VALUES ('20', '部门新闻', '13', '');
INSERT INTO `chaye_nav` VALUES ('21', '产品小类1_1', '9', '');
INSERT INTO `chaye_nav` VALUES ('22', '产品小类1_2', '9', '');
INSERT INTO `chaye_nav` VALUES ('23', '产品小类1_3', '9', '');
INSERT INTO `chaye_nav` VALUES ('24', '产品小类2_1', '10', '');
INSERT INTO `chaye_nav` VALUES ('25', '产品小类2_2', '10', '');
INSERT INTO `chaye_nav` VALUES ('26', '产品小类4_1', '12', '');
INSERT INTO `chaye_nav` VALUES ('27', '帮助文档', '5', null);
INSERT INTO `chaye_nav` VALUES ('28', '档案下载', '5', null);

-- ----------------------------
-- Table structure for `chaye_photo`
-- ----------------------------
DROP TABLE IF EXISTS `chaye_photo`;
CREATE TABLE `chaye_photo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cateid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of chaye_photo
-- ----------------------------
INSERT INTO `chaye_photo` VALUES ('9', '员工相册', './Uploads/fefe0051b9c16aa289ec3e9bc2be2de2.jpg', '16');
INSERT INTO `chaye_photo` VALUES ('10', '员工相册2', './Uploads/2fe7cd1630e5b4c994b032ec9b371278.jpg', '16');
INSERT INTO `chaye_photo` VALUES ('11', '客户案例1', './Uploads/647752c39af5ac8c7384fc47c63afa6e.png', '17');
INSERT INTO `chaye_photo` VALUES ('12', '客户案例2', './Uploads/9361b6c2c592d633fcfa5f91ce44ce2e.jpg', '17');

-- ----------------------------
-- Table structure for `chaye_product`
-- ----------------------------
DROP TABLE IF EXISTS `chaye_product`;
CREATE TABLE `chaye_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cateid` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of chaye_product
-- ----------------------------
INSERT INTO `chaye_product` VALUES ('2', '网站首页', './Uploads/56af2c373bd5273c3d6e6a4c2fc2ea55.jpg', '', '2020-03-03 16:09:22', '网站首页', '网站首页', '网站首页', '9');
INSERT INTO `chaye_product` VALUES ('3', '测试产品2', './Uploads/0fa7e00cf8ff9f0735c7a5d3285433a0.jpg', '9080709', '2020-03-04 12:58:35', '测试产品2', '测试产品2', '12321321321', '10');
INSERT INTO `chaye_product` VALUES ('4', '测试产品3', './Uploads/eecae8c5ec480da8acd860d4125ec587.jpg', '5099763', '2020-03-04 12:58:50', '', '测试产品3', '测试产品3', '11');
INSERT INTO `chaye_product` VALUES ('5', '测试产品4', './Uploads/166d60f91979275b84579854f590ccf9.jpg', '9270917', '2020-03-04 12:59:07', '', '测试产品4', '测试产品4', '12');
