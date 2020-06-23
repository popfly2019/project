/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : tyweb

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-05-16 16:42:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tyweb_ad
-- ----------------------------
DROP TABLE IF EXISTS `tyweb_ad`;
CREATE TABLE `tyweb_ad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tyweb_ad
-- ----------------------------
INSERT INTO `tyweb_ad` VALUES ('1', '首页', 'tyweb/Public/Uploads/2019-05-09/1557386560119404.gif');
INSERT INTO `tyweb_ad` VALUES ('2', '首页2', 'tyweb/Public/Uploads/2019-05-09/1557386611567417.gif');
INSERT INTO `tyweb_ad` VALUES ('3', '首页3', 'tyweb/Public/Uploads/2019-05-09/1557386867117666.gif');
INSERT INTO `tyweb_ad` VALUES ('4', '首页4', 'tyweb/Public/Uploads/2019-05-09/1557386886907970.gif');
INSERT INTO `tyweb_ad` VALUES ('5', '首页5', 'tyweb/Public/Uploads/2019-05-09/1557387035455448.jpg');

-- ----------------------------
-- Table structure for tyweb_admin
-- ----------------------------
DROP TABLE IF EXISTS `tyweb_admin`;
CREATE TABLE `tyweb_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `img` text NOT NULL,
  `date` varchar(255) NOT NULL,
  `qq` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tyweb_admin
-- ----------------------------
INSERT INTO `tyweb_admin` VALUES ('1', 'admin', 'e5b3f69881d35c3447e91754d95dba00', 'tyweb/Public/Uploads/2019-05-14/1557819237682613.jpg', '2019-05-15 09:29:59', '969152928', '969152928@qq.com');

-- ----------------------------
-- Table structure for tyweb_case
-- ----------------------------
DROP TABLE IF EXISTS `tyweb_case`;
CREATE TABLE `tyweb_case` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `cateid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tyweb_case
-- ----------------------------

-- ----------------------------
-- Table structure for tyweb_category
-- ----------------------------
DROP TABLE IF EXISTS `tyweb_category`;
CREATE TABLE `tyweb_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `cateid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tyweb_category
-- ----------------------------
INSERT INTO `tyweb_category` VALUES ('1', '业务体系', '1');
INSERT INTO `tyweb_category` VALUES ('2', '公司动态', '1');
INSERT INTO `tyweb_category` VALUES ('3', '品牌策划', '2');
INSERT INTO `tyweb_category` VALUES ('4', '公关活动', '2');
INSERT INTO `tyweb_category` VALUES ('5', '3D影视制作', '2');
INSERT INTO `tyweb_category` VALUES ('6', '媒体传播', '2');

-- ----------------------------
-- Table structure for tyweb_config
-- ----------------------------
DROP TABLE IF EXISTS `tyweb_config`;
CREATE TABLE `tyweb_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tyweb_config
-- ----------------------------

-- ----------------------------
-- Table structure for tyweb_nav
-- ----------------------------
DROP TABLE IF EXISTS `tyweb_nav`;
CREATE TABLE `tyweb_nav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `module` varchar(255) NOT NULL,
  `top` int(11) NOT NULL,
  `open` int(11) NOT NULL,
  `order` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tyweb_nav
-- ----------------------------
INSERT INTO `tyweb_nav` VALUES ('1', '网站首页', '/', 'Index', '2', '1', '');
INSERT INTO `tyweb_nav` VALUES ('2', '关于泰一', '/about', 'Abouts', '2', '1', '');
INSERT INTO `tyweb_nav` VALUES ('3', '最新动态', '/news/detail', 'News', '1', '1', '');
INSERT INTO `tyweb_nav` VALUES ('4', '案例展示', '/case', 'Case', '2', '1', '');
INSERT INTO `tyweb_nav` VALUES ('6', '服务体系', '/news', 'News', '1', '1', '');
INSERT INTO `tyweb_nav` VALUES ('7', '联系我们', '/about', 'About', '2', '1', '');

-- ----------------------------
-- Table structure for tyweb_news
-- ----------------------------
DROP TABLE IF EXISTS `tyweb_news`;
CREATE TABLE `tyweb_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `content` text NOT NULL,
  `date` varchar(255) NOT NULL,
  `cateid` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tyweb_news
-- ----------------------------
INSERT INTO `tyweb_news` VALUES ('1', '测试测试测试', 'tyweb/Public/Uploads/2019-05-09/1557366086453468.jpg', '&lt;p&gt;测试测试测试123213213213&lt;/p&gt;', '1557370528', '4', '测试测试测试', '测试测试测试');
INSERT INTO `tyweb_news` VALUES ('2', '测试测试', 'tyweb/Public/Uploads/2019-05-09/1557366278514660.jpg', '&lt;p&gt;测试测试&lt;/p&gt;', '1557366280', '1', '测试测试', '测试测试');
INSERT INTO `tyweb_news` VALUES ('4', '测试', 'tyweb/Public/Uploads/2019-05-15/1557900418137262.gif', '&lt;p&gt;测试&lt;/p&gt;', '1557900420', '2', '测试', '测试');
INSERT INTO `tyweb_news` VALUES ('5', '测试', 'tyweb/Public/Uploads/2019-05-15/1557900438943600.jpg', '&lt;p&gt;测试&lt;/p&gt;', '1557900443', '2', '测试', '测试');
INSERT INTO `tyweb_news` VALUES ('6', '测试', 'tyweb/Public/Uploads/2019-05-15/1557900459954875.jpg', '&lt;p&gt;测试&lt;/p&gt;', '1557900462', '2', '测试', '测试');
INSERT INTO `tyweb_news` VALUES ('7', '测试', 'tyweb/Public/Uploads/2019-05-15/1557901791791784.gif', '&lt;p&gt;测试&lt;/p&gt;', '1557901795', '1', '测试', '测试');
INSERT INTO `tyweb_news` VALUES ('8', '测试', 'tyweb/Public/Uploads/2019-05-15/1557901812896352.jpg', '&lt;p&gt;测试&lt;/p&gt;', '1557901814', '1', '测试', '测试');
INSERT INTO `tyweb_news` VALUES ('9', '测试', 'tyweb/Public/Uploads/2019-05-15/1557901828225486.jpg', '&lt;p&gt;测试&lt;/p&gt;', '1557901831', '1', '测试', '测试');

-- ----------------------------
-- Table structure for tyweb_page
-- ----------------------------
DROP TABLE IF EXISTS `tyweb_page`;
CREATE TABLE `tyweb_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tyweb_page
-- ----------------------------
INSERT INTO `tyweb_page` VALUES ('1', '关于泰一', '&lt;h3&gt;ABOUT TARGET 公司介绍&lt;/h3&gt;&lt;p class=&quot;intro&quot;&gt;广州市泰一文化传播有限公司(Target) 是一家集品牌策划/公关活动/3D影视制作/媒体传播为一体的文化传播公司。别具创想的策划、新锐的设计以及优质的服务使泰一文化(Target) )迅速成为行内的新型文化传播先锋。 至今，已成为融合科技文化、时尚发布、大型会议等优势资源的综合实力雄厚的公司。&lt;/p&gt;&lt;p&gt;&lt;img class=&quot;illustrantion&quot; src=&quot;__PUBLIC__/Home/img/about_us/img_03.jpg&quot; title=&quot;图片&quot; alt=&quot;图片&quot;/&gt;&lt;/p&gt;&lt;p class=&quot;intro&quot;&gt;丝路的发展史是一个充满创新与激情的发展史，我们关注如何将技术上的优势转变成为我们客户的竞争价值，如何把公司发展中的积累变成推动行业发展的动力。在产品的研发上： 2001年丝路率先在国内推出手绘结合电脑处理的产品可视化尝试并得到市场上的普遍认可。2002年丝路又将客户的方案汇报加以多媒体手段进行重新包装而得到客户广泛的肯定和推广。今天，丝路进一步结合了虚拟现实、影像互动、多维立体表现、影视实拍等先进成熟的技术手段为我们的客户提供最为优化的全方位解决方案。2007年5月，丝路通过整合行业内多方资源与优势的方式实现了丝路品牌的再次提升，同时为行业的发展提供了可借鉴的操作模式。&lt;/p&gt;&lt;p class=&quot;intro&quot;&gt;作为深圳市影视动画行业协会的常务理事单位，丝路一直为推动中国数字技术的发展和在国际大舞台上加强与外界的交流尽自己微薄的力量。丝路公司作为深圳影视动画企业代表参加了多界东京，法国，迪拜等地的国际动画节，在中外行业交流与互动发挥了积极的作用。&lt;/p&gt;&lt;h3&gt;TARGET PHILOSOPHY 公司理念&lt;/h3&gt;&lt;ul class=&quot;intro list-paddingleft-2&quot;&gt;&lt;li&gt;&lt;p&gt;广州市泰一文化工作室成立&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;广东省科技报指定网络运营商&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;广东省科技报合作伙伴&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;品牌的网站策划与开发&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;获批省级项目《岭南建筑文化》三维动画制作以及策划&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;推广执行广东产学园五周年庆典&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;联合华工科技大学建筑学院举办《国际建筑文化论坛》&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;策划珠江文化——南江古百越民间艺术节&lt;/p&gt;&lt;/li&gt;&lt;/ul&gt;&lt;h3&gt;TARGET SERVICE 服务体系&lt;/h3&gt;&lt;ul class=&quot;intro list-paddingleft-2&quot;&gt;&lt;li&gt;&lt;p&gt;品牌策划、推广，影视包装&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;公关活动策划，执行&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;广告投放规划&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;三维动画影片制作 、宣传、发布 、创意制作&lt;/p&gt;&lt;/li&gt;&lt;/ul&gt;&lt;h3&gt;CONTACT TAGET 联系我们&lt;/h3&gt;&lt;p&gt;&lt;img class=&quot;illustrantion map&quot; src=&quot;__PUBLIC__/Home/img/about_us/img_07.jpg&quot; title=&quot;地图&quot;/&gt;&lt;/p&gt;&lt;ul class=&quot;block address list-paddingleft-2&quot;&gt;&lt;li&gt;&lt;p&gt;&lt;span class=&quot;en&quot;&gt;CHINA&lt;/span&gt;&lt;span class=&quot;en&quot;&gt;GuangZhou&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p class=&quot;zh&quot;&gt;广州市高新技术开发区科学城彩频路9号&lt;/p&gt;&lt;/li&gt;&lt;/ul&gt;&lt;ul class=&quot;block email list-paddingleft-2&quot;&gt;&lt;li&gt;&lt;p&gt;Email&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;General Enquiries:&lt;a href=&quot;mailto:info@cghpc.com&quot;&gt;info@cghpc.com&lt;/a&gt;&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;Support&lt;a href=&quot;mailto:render@cghpc.com&quot;&gt;render@cghpc.com&lt;/a&gt;&lt;/p&gt;&lt;/li&gt;&lt;/ul&gt;&lt;ul class=&quot;block tele list-paddingleft-2&quot;&gt;&lt;li&gt;&lt;p&gt;Telephone&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;Office: +86-20-3229 0869&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;Fax: +86-20-3229 0879&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;Cell-phone: 150 1308 8666&lt;/p&gt;&lt;/li&gt;&lt;/ul&gt;&lt;ul class=&quot;block qq list-paddingleft-2&quot;&gt;&lt;li&gt;&lt;p&gt;&lt;a href=&quot;#&quot;&gt;1079420060&lt;/a&gt;&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;&lt;a href=&quot;#&quot;&gt;494660141&lt;/a&gt;&lt;/p&gt;&lt;/li&gt;&lt;/ul&gt;');
INSERT INTO `tyweb_page` VALUES ('2', '测试', '&lt;p&gt;测试&lt;/p&gt;');
