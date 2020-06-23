/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : future

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-06-10 14:53:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for future_admin
-- ----------------------------
DROP TABLE IF EXISTS `future_admin`;
CREATE TABLE `future_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of future_admin
-- ----------------------------
INSERT INTO `future_admin` VALUES ('2', 'admin', 'e5b3f69881d35c3447e91754d95dba00');

-- ----------------------------
-- Table structure for future_nav
-- ----------------------------
DROP TABLE IF EXISTS `future_nav`;
CREATE TABLE `future_nav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `name2` varchar(255) NOT NULL,
  `upid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of future_nav
-- ----------------------------
INSERT INTO `future_nav` VALUES ('1', '科技', 'keji', '0');
INSERT INTO `future_nav` VALUES ('2', '文化', 'wenhua', '0');
INSERT INTO `future_nav` VALUES ('3', '生活', 'shenghuo', '0');
INSERT INTO `future_nav` VALUES ('4', '互联网', 'hulianwang', '1');
INSERT INTO `future_nav` VALUES ('5', '数码', 'shuma', '1');
INSERT INTO `future_nav` VALUES ('6', 'IT', 'it', '1');
INSERT INTO `future_nav` VALUES ('7', '电信', 'dianxin', '1');

-- ----------------------------
-- Table structure for future_news
-- ----------------------------
DROP TABLE IF EXISTS `future_news`;
CREATE TABLE `future_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `cateid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of future_news
-- ----------------------------
INSERT INTO `future_news` VALUES ('1', '测试测试', 'future/Public/Uploads/2019-06-04/1559627017.png', '&lt;p&gt;测试测试测试&lt;/p&gt;', '自己', '', '0');
INSERT INTO `future_news` VALUES ('2', '测试2', 'future/Public/Uploads/2019-06-04/1559627376.png', '&lt;p&gt;测试测试测试测试&lt;/p&gt;', '自己', '', '0');
INSERT INTO `future_news` VALUES ('3', '测试3', 'future/Public/Uploads/2019-06-04/1559627432.png', '&lt;p&gt;测试&lt;/p&gt;', '自己', '', '0');
INSERT INTO `future_news` VALUES ('4', '测试3', 'future/Public/Uploads/2019-06-04/1559627432.png', '&lt;p&gt;测试&lt;/p&gt;', '自己', '', '0');
INSERT INTO `future_news` VALUES ('5', '测试4', 'future/Public/Uploads/2019-06-04/1559627493.png', '&lt;p&gt;1222121&lt;/p&gt;', '自己', '2019-06-04 13:51:19', '0');
INSERT INTO `future_news` VALUES ('6', '测试测试', 'future/Public/Uploads/2019-06-05/1559720546.png', '&lt;p&gt;1222222222222222&lt;/p&gt;', '自己', '2019-06-05 15:42:09', '6');

-- ----------------------------
-- Table structure for future_page
-- ----------------------------
DROP TABLE IF EXISTS `future_page`;
CREATE TABLE `future_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of future_page
-- ----------------------------
