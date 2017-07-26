/*
Navicat MySQL Data Transfer

Source Server         : HOMESTEAD
Source Server Version : 50717
Source Host           : localhost:33060
Source Database       : smartend

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2017-04-27 16:01:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ap_analytics_pages
-- ----------------------------
DROP TABLE IF EXISTS `ap_analytics_pages`;
CREATE TABLE `ap_analytics_pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `visitor_id` int(11) NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `query` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `load_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of ap_analytics_pages
-- ----------------------------
INSERT INTO `ap_analytics_pages` VALUES ('1', '1', '192.168.100.1', 'Site Title', 'unknown', 'http://smartend/', '4.77416587', '2017-04-27', '00:03:39', '2017-04-27 00:03:39', '2017-04-27 00:03:39');
INSERT INTO `ap_analytics_pages` VALUES ('2', '1', '192.168.100.1', 'http://smartend/login', 'unknown', 'http://smartend/login', '1.80438018', '2017-04-27', '00:03:54', '2017-04-27 00:03:54', '2017-04-27 00:03:54');
INSERT INTO `ap_analytics_pages` VALUES ('3', '1', '192.168.100.1', 'http://smartend/admin', 'unknown', 'http://smartend/admin', '2.24562001', '2017-04-27', '00:04:22', '2017-04-27 00:04:22', '2017-04-27 00:04:22');
INSERT INTO `ap_analytics_pages` VALUES ('4', '1', '192.168.100.1', 'http://smartend/admin/webmaster/sections?_pjax=%23view', 'unknown', 'http://smartend/admin/webmaster/sections?_pjax=%23view', '4.36038899', '2017-04-27', '00:07:02', '2017-04-27 00:07:02', '2017-04-27 00:07:02');
INSERT INTO `ap_analytics_pages` VALUES ('5', '1', '192.168.100.1', 'http://smartend/html/css/bootstrap.min.css.map', 'unknown', 'http://smartend/html/css/bootstrap.min.css.map', '3.64637613', '2017-04-27', '00:21:16', '2017-04-27 00:21:16', '2017-04-27 00:21:16');
INSERT INTO `ap_analytics_pages` VALUES ('6', '1', '192.168.100.1', 'http://smartend/admin/webmaster?_pjax=%23view', 'unknown', 'http://smartend/admin/webmaster?_pjax=%23view', '5.77072883', '2017-04-27', '01:46:34', '2017-04-27 01:46:34', '2017-04-27 01:46:34');
INSERT INTO `ap_analytics_pages` VALUES ('7', '1', '192.168.100.1', 'http://smartend/admin/1/topics?_pjax=%23view', 'unknown', 'http://smartend/admin/1/topics?_pjax=%23view', '4.74403596', '2017-04-27', '01:47:35', '2017-04-27 01:47:35', '2017-04-27 01:47:35');
INSERT INTO `ap_analytics_pages` VALUES ('8', '1', '192.168.100.1', 'http://smartend/css/menuzord-skins/menuzord-rounded-boxed.css', 'unknown', 'http://smartend/css/menuzord-skins/menuzord-rounded-boxed.css', '3.81758022', '2017-04-27', '03:33:25', '2017-04-27 03:33:25', '2017-04-27 03:33:25');
INSERT INTO `ap_analytics_pages` VALUES ('9', '1', '192.168.100.1', 'http://smartend/admin/webmaster', 'unknown', 'http://smartend/admin/webmaster', '5.57178903', '2017-04-27', '17:04:23', '2017-04-27 17:04:23', '2017-04-27 17:04:23');
INSERT INTO `ap_analytics_pages` VALUES ('10', '1', '192.168.100.1', 'http://smartend/admin/settings', 'unknown', 'http://smartend/admin/settings', '5.31990385', '2017-04-27', '17:05:51', '2017-04-27 17:05:51', '2017-04-27 17:05:51');
INSERT INTO `ap_analytics_pages` VALUES ('11', '1', '192.168.100.1', 'http://smartend/admin/settings?_pjax=%23view', 'unknown', 'http://smartend/admin/settings?_pjax=%23view', '6.36886001', '2017-04-27', '17:05:52', '2017-04-27 17:05:52', '2017-04-27 17:05:52');
INSERT INTO `ap_analytics_pages` VALUES ('12', '1', '192.168.100.1', 'http://smartend/frontEnd/css/bootstrap.min.css.map', 'unknown', 'http://smartend/frontEnd/css/bootstrap.min.css.map', '6.70834088', '2017-04-27', '17:38:12', '2017-04-27 17:38:12', '2017-04-27 17:38:12');
INSERT INTO `ap_analytics_pages` VALUES ('13', '1', '192.168.100.1', 'http://smartend/admin/menus?_pjax=%23view', 'unknown', 'http://smartend/admin/menus?_pjax=%23view', '4.9739089', '2017-04-27', '17:58:46', '2017-04-27 17:58:46', '2017-04-27 17:58:46');
INSERT INTO `ap_analytics_pages` VALUES ('14', '1', '192.168.100.1', 'http://smartend/admin/1/topics/1/edit', 'unknown', 'http://smartend/admin/1/topics/1/edit', '3.32813978', '2017-04-27', '17:59:16', '2017-04-27 17:59:16', '2017-04-27 17:59:16');
INSERT INTO `ap_analytics_pages` VALUES ('15', '1', '192.168.100.1', 'http://smartend/topic/css/menuzord-skins/menuzord-rounded-boxed.css', 'unknown', 'http://smartend/topic/css/menuzord-skins/menuzord-rounded-boxed.css', '5.95021892', '2017-04-27', '18:44:14', '2017-04-27 18:44:14', '2017-04-27 18:44:14');
INSERT INTO `ap_analytics_pages` VALUES ('16', '1', '192.168.100.1', 'http://smartend/topic/images/logo-white-footer.png', 'unknown', 'http://smartend/topic/images/logo-white-footer.png', '6.20164299', '2017-04-27', '18:44:14', '2017-04-27 18:44:14', '2017-04-27 18:44:14');
INSERT INTO `ap_analytics_pages` VALUES ('17', '1', '192.168.100.1', 'http://smartend/topic/ajax-load/bootstrap-parent-modal.html', 'unknown', 'http://smartend/topic/ajax-load/bootstrap-parent-modal.html', '2.57410789', '2017-04-27', '18:44:17', '2017-04-27 18:44:17', '2017-04-27 18:44:17');
INSERT INTO `ap_analytics_pages` VALUES ('18', '1', '192.168.100.1', 'http://smartend/admin/2/topics?_pjax=%23view', 'unknown', 'http://smartend/admin/2/topics?_pjax=%23view', '3.37375998', '2017-04-27', '18:55:01', '2017-04-27 18:55:01', '2017-04-27 18:55:01');
INSERT INTO `ap_analytics_pages` VALUES ('19', '1', '192.168.100.1', 'http://smartend/admin/2/topics/create', 'unknown', 'http://smartend/admin/2/topics/create', '2.87999701', '2017-04-27', '18:55:12', '2017-04-27 18:55:12', '2017-04-27 18:55:12');

-- ----------------------------
-- Table structure for ap_analytics_visitors
-- ----------------------------
DROP TABLE IF EXISTS `ap_analytics_visitors`;
CREATE TABLE `ap_analytics_visitors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_cor1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_cor2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `os` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `browser` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resolution` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referrer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hostname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `org` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of ap_analytics_visitors
-- ----------------------------
INSERT INTO `ap_analytics_visitors` VALUES ('1', '192.168.100.1', 'unknown', 'unknown', 'unknown', 'unknown', 'unknown, unknown, unknown', 'unknown', 'unknown', 'unknown', 'Chrome', 'unknown', 'unknown', 'No Hostname', 'unknown', '2017-04-27', '00:03:39', '2017-04-27 00:03:39', '2017-04-27 00:03:39');

-- ----------------------------
-- Table structure for ap_banners
-- ----------------------------
DROP TABLE IF EXISTS `ap_banners`;
CREATE TABLE `ap_banners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `section_id` int(11) NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details_ar` text COLLATE utf8mb4_unicode_ci,
  `details_en` text COLLATE utf8mb4_unicode_ci,
  `code` text COLLATE utf8mb4_unicode_ci,
  `file_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_type` tinyint(4) DEFAULT NULL,
  `youtube_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `visits` int(11) NOT NULL,
  `row_no` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of ap_banners
-- ----------------------------
INSERT INTO `ap_banners` VALUES ('1', '1', 'بنر رقم ١', 'Banner #1', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.', 'It is a long established fact that a reader will be distracted by the readable content of a page.', null, 'noimg.png', 'noimg.png', null, null, '#', null, '1', '0', '1', '1', null, '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_banners` VALUES ('2', '1', 'بنر رقم ٢', 'Banner #2', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.', 'It is a long established fact that a reader will be distracted by the readable content of a page.', null, 'noimg.png', 'noimg.png', null, null, '#', null, '1', '0', '2', '1', null, '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_banners` VALUES ('3', '2', 'تصميم ريسبونسف', 'Responsive Design', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.', 'It is a long established fact that a reader will be distracted by the readable content of a page.', null, '', '', null, null, '#', 'fa-object-group', '1', '0', '1', '1', null, '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_banners` VALUES ('4', '2', ' احدث التقنيات', 'HTML5 & CSS3', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.', 'It is a long established fact that a reader will be distracted by the readable content of a page.', null, '', '', null, null, '#', 'fa-html5', '1', '0', '2', '1', null, '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_banners` VALUES ('5', '2', 'باستخدام بوتستراب', 'Bootstrap Used', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.', 'It is a long established fact that a reader will be distracted by the readable content of a page.', null, '', '', null, null, '#', 'fa-code', '1', '0', '3', '1', null, '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_banners` VALUES ('6', '2', 'تصميم كلاسيكي', 'Classic Design', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.', 'It is a long established fact that a reader will be distracted by the readable content of a page.', null, '', '', null, null, '#', 'fa-laptop', '1', '0', '4', '1', null, '2017-04-26 23:55:48', '2017-04-26 23:55:48');

-- ----------------------------
-- Table structure for ap_comments
-- ----------------------------
DROP TABLE IF EXISTS `ap_comments`;
CREATE TABLE `ap_comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `topic_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL,
  `row_no` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of ap_comments
-- ----------------------------

-- ----------------------------
-- Table structure for ap_contacts
-- ----------------------------
DROP TABLE IF EXISTS `ap_contacts`;
CREATE TABLE `ap_contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(11) DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci,
  `last_login` datetime DEFAULT NULL,
  `last_login_ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of ap_contacts
-- ----------------------------

-- ----------------------------
-- Table structure for ap_contacts_groups
-- ----------------------------
DROP TABLE IF EXISTS `ap_contacts_groups`;
CREATE TABLE `ap_contacts_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of ap_contacts_groups
-- ----------------------------
INSERT INTO `ap_contacts_groups` VALUES ('1', 'Newsletter Emails', '1', null, '2017-04-26 23:55:48', '2017-04-26 23:55:48');

-- ----------------------------
-- Table structure for ap_countries
-- ----------------------------
DROP TABLE IF EXISTS `ap_countries`;
CREATE TABLE `ap_countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=217 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of ap_countries
-- ----------------------------
INSERT INTO `ap_countries` VALUES ('1', 'AL', 'ألبانيا', 'Albania', '355', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('2', 'DZ', 'الجزائر', 'Algeria', '213', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('3', 'AS', 'ساموا الأمريكية', 'American Samoa', '1-684', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('4', 'AD', 'أندورا', 'Andorra', '376', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('5', 'AO', 'أنغولا', 'Angola', '244', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('6', 'AI', 'أنغيلا', 'Anguilla', '1-264', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('7', 'AR', 'الأرجنتين', 'Argentina', '54', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('8', 'AM', 'أرمينيا', 'Armenia', '374', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('9', 'AW', 'أروبا', 'Aruba', '297', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('10', 'AU', 'أستراليا', 'Australia', '61', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('11', 'AT', 'النمسا', 'Austria', '43', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('12', 'AZ', 'أذربيجان', 'Azerbaijan', '994', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('13', 'BS', 'جزر البهاما', 'Bahamas', '1-242', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('14', 'BH', 'البحرين', 'Bahrain', '973', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('15', 'BD', 'بنغلاديش', 'Bangladesh', '880', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('16', 'BB', 'بربادوس', 'Barbados', '1-246', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('17', 'BY', 'روسيا البيضاء', 'Belarus', '375', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('18', 'BE', 'بلجيكا', 'Belgium', '32', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('19', 'BZ', 'بليز', 'Belize', '501', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('20', 'BJ', 'بنين', 'Benin', '229', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('21', 'BM', 'برمودا', 'Bermuda', '1-441', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('22', 'BT', 'بوتان', 'Bhutan', '975', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('23', 'BO', 'بوليفيا', 'Bolivia', '591', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('24', 'BA', 'البوسنة والهرسك', 'Bosnia and Herzegovina', '387', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('25', 'BW', 'بوتسوانا', 'Botswana', '267', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('26', 'BR', 'البرازيل', 'Brazil', '55', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('27', 'VG', 'جزر فيرجن البريطانية', 'British Virgin Islands', '1-284', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('28', 'IO', 'إقليم المحيط الهندي البريطاني', 'British Indian Ocean Territory', '246', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('29', 'BN', 'بروناي دار السلام', 'Brunei Darussalam', '673', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('30', 'BG', 'بلغاريا', 'Bulgaria', '359', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('31', 'BF', 'بوركينا فاسو', 'Burkina Faso', '226', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('32', 'BI', 'بوروندي', 'Burundi', '257', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('33', 'KH', 'كمبوديا', 'Cambodia', '855', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('34', 'CM', 'الكاميرون', 'Cameroon', '237', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('35', 'CA', 'كندا', 'Canada', '1', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('36', 'CV', 'الرأس الأخضر', 'Cape Verde', '238', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('37', 'KY', 'جزر كايمان', 'Cayman Islands', '1-345', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('38', 'CF', 'افريقيا الوسطى', 'Central African Republic', '236', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('39', 'TD', 'تشاد', 'Chad', '235', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('40', 'CL', 'تشيلي', 'Chile', '56', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('41', 'CN', 'الصين', 'China', '86', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('42', 'HK', 'هونغ كونغ', 'Hong Kong', '852', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('43', 'MO', 'ماكاو', 'Macao', '853', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('44', 'CX', 'جزيرة الكريسماس', 'Christmas Island', '61', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('45', 'CC', 'جزر كوكوس (كيلينغ)', 'Cocos (Keeling) Islands', '61', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('46', 'CO', 'كولومبيا', 'Colombia', '57', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('47', 'KM', 'جزر القمر', 'Comoros', '269', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('48', 'CK', 'جزر كوك', 'Cook Islands', '682', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('49', 'CR', 'كوستا ريكا', 'Costa Rica', '506', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('50', 'HR', 'كرواتيا', 'Croatia', '385', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('51', 'CU', 'كوبا', 'Cuba', '53', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('52', 'CY', 'قبرص', 'Cyprus', '357', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('53', 'CZ', 'الجمهورية التشيكية', 'Czech Republic', '420', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('54', 'DK', 'الدنمارك', 'Denmark', '45', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('55', 'DJ', 'جيبوتي', 'Djibouti', '253', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('56', 'DM', 'دومينيكا', 'Dominica', '1-767', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('57', 'DO', 'جمهورية الدومينيكان', 'Dominican Republic', '1-809', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('58', 'EC', 'الاكوادور', 'Ecuador', '593', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('59', 'EG', 'مصر', 'Egypt', '20', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('60', 'SV', 'السلفادور', 'El Salvador', '503', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('61', 'GQ', 'غينيا الاستوائية', 'Equatorial Guinea', '240', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('62', 'ER', 'إريتريا', 'Eritrea', '291', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('63', 'EE', 'استونيا', 'Estonia', '372', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('64', 'ET', 'أثيوبيا', 'Ethiopia', '251', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('65', 'FO', 'جزر فارو', 'Faroe Islands', '298', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('66', 'FJ', 'فيجي', 'Fiji', '679', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('67', 'FI', 'فنلندا', 'Finland', '358', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('68', 'FR', 'فرنسا', 'France', '33', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('69', 'GF', 'جيانا الفرنسية', 'French Guiana', '689', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('70', 'GA', 'الغابون', 'Gabon', '241', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('71', 'GM', 'غامبيا', 'Gambia', '220', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('72', 'GE', 'جورجيا', 'Georgia', '995', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('73', 'DE', 'ألمانيا', 'Germany', '49', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('74', 'GH', 'غانا', 'Ghana', '233', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('75', 'GI', 'جبل طارق', 'Gibraltar', '350', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('76', 'GR', 'يونان', 'Greece', '30', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('77', 'GL', 'غرينلاند', 'Greenland', '299', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('78', 'GD', 'غرينادا', 'Grenada', '1-473', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('79', 'GU', 'غوام', 'Guam', '1-671', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('80', 'GT', 'غواتيمالا', 'Guatemala', '502', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('81', 'GN', 'غينيا', 'Guinea', '224', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('82', 'GW', 'غينيا-بيساو', 'Guinea-Bissau', '245', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('83', 'GY', 'غيانا', 'Guyana', '592', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('84', 'HT', 'هايتي', 'Haiti', '509', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('85', 'HN', 'هندوراس', 'Honduras', '504', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('86', 'HU', 'هنغاريا', 'Hungary', '36', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('87', 'IS', 'أيسلندا', 'Iceland', '354', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('88', 'IN', 'الهند', 'India', '91', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('89', 'ID', 'أندونيسيا', 'Indonesia', '62', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('90', 'IR', 'جمهورية إيران الإسلامية', 'Iran, Islamic Republic of', '98', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('91', 'IQ', 'العراق', 'Iraq', '964', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('92', 'IE', 'أيرلندا', 'Ireland', '353', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('93', 'IM', 'جزيرة مان', 'Isle of Man', '44-1624', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('94', 'IL', 'إسرائيل', 'Israel', '972', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('95', 'IT', 'إيطاليا', 'Italy', '39', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('96', 'JM', 'جامايكا', 'Jamaica', '1-876', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('97', 'JP', 'اليابان', 'Japan', '81', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('98', 'JE', 'جيرسي', 'Jersey', '44-1534', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('99', 'JO', 'الأردن', 'Jordan', '962', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('100', 'KZ', 'كازاخستان', 'Kazakhstan', '7', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('101', 'KE', 'كينيا', 'Kenya', '254', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('102', 'KI', 'كيريباس', 'Kiribati', '686', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('103', 'KW', 'الكويت', 'Kuwait', '965', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('104', 'KG', 'قيرغيزستان', 'Kyrgyzstan', '996', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('105', 'LV', 'لاتفيا', 'Latvia', '371', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('106', 'LB', 'لبنان', 'Lebanon', '961', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('107', 'LS', 'ليسوتو', 'Lesotho', '266', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('108', 'LR', 'ليبيريا', 'Liberia', '231', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('109', 'LY', 'ليبيا', 'Libya', '218', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('110', 'LI', 'ليشتنشتاين', 'Liechtenstein', '423', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('111', 'LT', 'ليتوانيا', 'Lithuania', '370', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('112', 'LU', 'لوكسمبورغ', 'Luxembourg', '352', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('113', 'MK', 'مقدونيا، جمهورية', 'Macedonia', '389', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('114', 'MG', 'مدغشقر', 'Madagascar', '261', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('115', 'MW', 'ملاوي', 'Malawi', '265', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('116', 'MY', 'ماليزيا', 'Malaysia', '60', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('117', 'MV', 'جزر المالديف', 'Maldives', '960', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('118', 'ML', 'مالي', 'Mali', '223', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('119', 'MT', 'مالطا', 'Malta', '356', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('120', 'MH', 'جزر مارشال', 'Marshall Islands', '692', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('121', 'MR', 'موريتانيا', 'Mauritania', '222', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('122', 'MU', 'موريشيوس', 'Mauritius', '230', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('123', 'YT', 'مايوت', 'Mayotte', '262', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('124', 'MX', 'المكسيك', 'Mexico', '52', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('125', 'FM', 'ولايات ميكرونيزيا الموحدة', 'Micronesia', '691', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('126', 'MD', 'مولدوفا', 'Moldova', '373', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('127', 'MC', 'موناكو', 'Monaco', '377', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('128', 'MN', 'منغوليا', 'Mongolia', '976', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('129', 'ME', 'الجبل الأسود', 'Montenegro', '382', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('130', 'MS', 'مونتسيرات', 'Montserrat', '1-664', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('131', 'MA', 'المغرب', 'Morocco', '212', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('132', 'MZ', 'موزمبيق', 'Mozambique', '258', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('133', 'MM', 'ميانمار', 'Myanmar', '95', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('134', 'NA', 'ناميبيا', 'Namibia', '264', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('135', 'NR', 'ناورو', 'Nauru', '674', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('136', 'NP', 'نيبال', 'Nepal', '977', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('137', 'NL', 'هولندا', 'Netherlands', '31', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('138', 'AN', 'جزر الأنتيل الهولندية', 'Netherlands Antilles', '599', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('139', 'NC', 'كاليدونيا الجديدة', 'New Caledonia', '687', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('140', 'NZ', 'نيوزيلندا', 'New Zealand', '64', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('141', 'NI', 'نيكاراغوا', 'Nicaragua', '505', '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_countries` VALUES ('142', 'NE', 'النيجر', 'Niger', '227', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('143', 'NG', 'نيجيريا', 'Nigeria', '234', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('144', 'NU', 'نيوي', 'Niue', '683', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('145', 'NO', 'النرويج', 'Norway', '47', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('146', 'OM', 'عمان', 'Oman', '968', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('147', 'PK', 'باكستان', 'Pakistan', '92', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('148', 'PW', 'بالاو', 'Palau', '680', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('149', 'PS', 'فلسطين', 'Palestinian', '972', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('150', 'PA', 'بناما', 'Panama', '507', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('151', 'PY', 'باراغواي', 'Paraguay', '595', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('152', 'PE', 'بيرو', 'Peru', '51', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('153', 'PH', 'الفلبين', 'Philippines', '63', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('154', 'PN', 'بيتكيرن', 'Pitcairn', '870', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('155', 'PL', 'بولندا', 'Poland', '48', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('156', 'PT', 'البرتغال', 'Portugal', '351', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('157', 'PR', 'بويرتو ريكو', 'Puerto Rico', '1-787', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('158', 'QA', 'قطر', 'Qatar', '974', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('159', 'RO', 'رومانيا', 'Romania', '40', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('160', 'RU', 'الفيدرالية الروسية', 'Russian Federation', '7', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('161', 'RW', 'رواندا', 'Rwanda', '250', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('162', 'SH', 'سانت هيلينا', 'Saint Helena', '290', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('163', 'KN', 'سانت كيتس ونيفيس', 'Saint Kitts and Nevis', '1-869', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('164', 'LC', 'سانت لوسيا', 'Saint Lucia', '1-758', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('165', 'PM', 'سان بيار وميكلون', 'Saint Pierre and Miquelon', '508', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('166', 'VC', 'سانت فنسنت وجزر غرينادين', 'Saint Vincent and Grenadines', '1-784', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('167', 'WS', 'ساموا', 'Samoa', '685', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('168', 'SM', 'سان مارينو', 'San Marino', '378', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('169', 'ST', 'ساو تومي وبرينسيبي', 'Sao Tome and Principe', '239', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('170', 'SA', 'المملكة العربية السعودية', 'Saudi Arabia', '966', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('171', 'SN', 'السنغال', 'Senegal', '221', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('172', 'RS', 'صربيا', 'Serbia', '381', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('173', 'SC', 'سيشيل', 'Seychelles', '248', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('174', 'SL', 'سيرا ليون', 'Sierra Leone', '232', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('175', 'SG', 'سنغافورة', 'Singapore', '65', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('176', 'SK', 'سلوفاكيا', 'Slovakia', '421', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('177', 'SI', 'سلوفينيا', 'Slovenia', '386', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('178', 'SB', 'جزر سليمان', 'Solomon Islands', '677', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('179', 'SO', 'الصومال', 'Somalia', '252', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('180', 'ZA', 'جنوب أفريقيا', 'South Africa', '27', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('181', 'ES', 'إسبانيا', 'Spain', '34', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('182', 'LK', 'سيريلانكا', 'Sri Lanka', '94', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('183', 'SD', 'السودان', 'Sudan', '249', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('184', 'SR', 'سورينام', 'Suriname', '597', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('185', 'SJ', 'جزر سفالبارد وجان ماين', 'Svalbard and Jan Mayen Islands', '47', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('186', 'SZ', 'سوازيلاند', 'Swaziland', '268', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('187', 'SE', 'السويد', 'Sweden', '46', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('188', 'CH', 'سويسرا', 'Switzerland', '41', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('189', 'SY', 'سوريا', 'Syrian Arab Republic', '963', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('190', 'TW', 'تايوان، جمهورية الصين', 'Taiwan, Republic of China', '886', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('191', 'TJ', 'طاجيكستان', 'Tajikistan', '992', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('192', 'TZ', 'تنزانيا', 'Tanzania', '255', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('193', 'TH', 'تايلاند', 'Thailand', '66', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('194', 'TG', 'توغو', 'Togo', '228', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('195', 'TK', 'توكيلاو', 'Tokelau', '690', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('196', 'TO', 'تونغا', 'Tonga', '676', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('197', 'TT', 'ترينداد وتوباغو', 'Trinidad and Tobago', '1-868', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('198', 'TN', 'تونس', 'Tunisia', '216', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('199', 'TR', 'تركيا', 'Turkey', '90', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('200', 'TM', 'تركمانستان', 'Turkmenistan', '993', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('201', 'TC', 'جزر تركس وكايكوس', 'Turks and Caicos Islands', '1-649', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('202', 'TV', 'توفالو', 'Tuvalu', '688', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('203', 'UG', 'أوغندا', 'Uganda', '256', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('204', 'UA', 'أوكرانيا', 'Ukraine', '380', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('205', 'AE', 'الإمارات العربية المتحدة', 'United Arab Emirates', '971', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('206', 'GB', 'المملكة المتحدة', 'United Kingdom', '44', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('207', 'US', 'الولايات المتحدة الأمريكية', 'United States of America', '1', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('208', 'UY', 'أوروغواي', 'Uruguay', '598', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('209', 'UZ', 'أوزبكستان', 'Uzbekistan', '998', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('210', 'VU', 'فانواتو', 'Vanuatu', '678', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('211', 'VE', 'فنزويلا', 'Venezuela', '58', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('212', 'VN', 'فيتنام', 'Viet Nam', '84', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('213', 'WF', 'واليس وفوتونا', 'Wallis and Futuna Islands', '681', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('214', 'YE', 'اليمن', 'Yemen', '967', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('215', 'ZM', 'زامبيا', 'Zambia', '260', '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_countries` VALUES ('216', 'ZW', 'زيمبابوي', 'Zimbabwe', '263', '2017-04-26 23:55:48', '2017-04-26 23:55:48');

-- ----------------------------
-- Table structure for ap_events
-- ----------------------------
DROP TABLE IF EXISTS `ap_events`;
CREATE TABLE `ap_events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of ap_events
-- ----------------------------

-- ----------------------------
-- Table structure for ap_ltm_translations
-- ----------------------------
DROP TABLE IF EXISTS `ap_ltm_translations`;
CREATE TABLE `ap_ltm_translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `status` int(11) NOT NULL DEFAULT '0',
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of ap_ltm_translations
-- ----------------------------

-- ----------------------------
-- Table structure for ap_maps
-- ----------------------------
DROP TABLE IF EXISTS `ap_maps`;
CREATE TABLE `ap_maps` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `topic_id` int(11) NOT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details_ar` text COLLATE utf8mb4_unicode_ci,
  `details_en` text COLLATE utf8mb4_unicode_ci,
  `icon` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `row_no` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of ap_maps
-- ----------------------------

-- ----------------------------
-- Table structure for ap_menus
-- ----------------------------
DROP TABLE IF EXISTS `ap_menus`;
CREATE TABLE `ap_menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `row_no` int(11) NOT NULL,
  `father_id` int(11) NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of ap_menus
-- ----------------------------
INSERT INTO `ap_menus` VALUES ('1', '1', '0', 'القائمة الرئيسية', 'Main Menu', '1', '0', '0', '', '1', null, '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_menus` VALUES ('2', '2', '0', 'روابط سريعة', 'Quick Links', '1', '0', '0', '', '1', null, '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_menus` VALUES ('3', '1', '1', 'الرئيسية', 'Home', '1', '1', '0', 'home', '1', null, '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_menus` VALUES ('4', '2', '1', 'من نحن', 'About', '1', '1', '0', 'topic/about', '1', null, '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_menus` VALUES ('5', '3', '1', 'خدماتنا', 'Services', '1', '3', '2', '', '1', null, '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_menus` VALUES ('6', '4', '1', 'أخبارنا', 'News', '1', '2', '3', '', '1', null, '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_menus` VALUES ('7', '5', '1', 'الصور', 'Photos', '1', '2', '4', '', '1', null, '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_menus` VALUES ('8', '6', '1', 'الفيديو', 'Videos', '1', '3', '5', '', '1', null, '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_menus` VALUES ('9', '7', '1', 'الصوتيات', 'Audio', '1', '3', '6', '', '1', null, '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_menus` VALUES ('10', '8', '1', 'المنتجات', 'Products', '1', '3', '8', '', '1', null, '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_menus` VALUES ('11', '9', '1', 'المدونة', 'Blog', '1', '2', '7', '', '1', null, '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_menus` VALUES ('12', '10', '1', 'اتصل بنا', 'Contact', '1', '1', '0', 'contact', '1', null, '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_menus` VALUES ('13', '1', '2', 'الرئيسية', 'Home', '1', '1', '0', 'home', '1', null, '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_menus` VALUES ('14', '2', '2', 'من نحن', 'About Us', '1', '1', '0', 'topic/about', '1', null, '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_menus` VALUES ('15', '3', '2', 'المدونة', 'Blog', '1', '2', '7', '', '1', null, '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_menus` VALUES ('16', '4', '2', 'الخصوصية', 'Privacy', '1', '1', '0', 'topic/privacy', '1', null, '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_menus` VALUES ('17', '5', '2', 'الشروط والأحكام', 'Terms & Conditions', '1', '1', '0', 'topic/terms', '1', null, '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_menus` VALUES ('18', '6', '2', 'اتصل بنا', 'Contact Us', '1', '1', '0', 'contact', '1', null, '2017-04-26 23:55:48', '2017-04-26 23:55:48');

-- ----------------------------
-- Table structure for ap_migrations
-- ----------------------------
DROP TABLE IF EXISTS `ap_migrations`;
CREATE TABLE `ap_migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of ap_migrations
-- ----------------------------
INSERT INTO `ap_migrations` VALUES ('1', '2014_04_02_193005_create_translations_table', '1');
INSERT INTO `ap_migrations` VALUES ('2', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `ap_migrations` VALUES ('3', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `ap_migrations` VALUES ('4', '2017_02_16_230800_create_webmaster_settings_table', '1');
INSERT INTO `ap_migrations` VALUES ('5', '2017_02_16_230846_create_webmaster_sections_table', '1');
INSERT INTO `ap_migrations` VALUES ('6', '2017_02_16_230900_create_webmaster_banners_table', '1');
INSERT INTO `ap_migrations` VALUES ('7', '2017_02_16_231036_create_webmails_groups_table', '1');
INSERT INTO `ap_migrations` VALUES ('8', '2017_02_16_231044_create_webmails_files_table', '1');
INSERT INTO `ap_migrations` VALUES ('9', '2017_02_16_231053_create_webmails_table', '1');
INSERT INTO `ap_migrations` VALUES ('10', '2017_02_16_231114_create_topics_table', '1');
INSERT INTO `ap_migrations` VALUES ('11', '2017_02_16_231142_create_settings_table', '1');
INSERT INTO `ap_migrations` VALUES ('12', '2017_02_16_231230_create_sections_table', '1');
INSERT INTO `ap_migrations` VALUES ('13', '2017_02_16_231240_create_photos_table', '1');
INSERT INTO `ap_migrations` VALUES ('14', '2017_02_16_231248_create_menus_table', '1');
INSERT INTO `ap_migrations` VALUES ('15', '2017_02_16_231259_create_maps_table', '1');
INSERT INTO `ap_migrations` VALUES ('16', '2017_02_16_231306_create_events_table', '1');
INSERT INTO `ap_migrations` VALUES ('17', '2017_02_16_231317_create_countries_table', '1');
INSERT INTO `ap_migrations` VALUES ('18', '2017_02_16_231327_create_contacts_groups_table', '1');
INSERT INTO `ap_migrations` VALUES ('19', '2017_02_16_231339_create_contacts_table', '1');
INSERT INTO `ap_migrations` VALUES ('20', '2017_02_16_231346_create_comments_table', '1');
INSERT INTO `ap_migrations` VALUES ('21', '2017_02_16_231352_create_banners_table', '1');
INSERT INTO `ap_migrations` VALUES ('22', '2017_02_16_231359_create_analytics_visitors_table', '1');
INSERT INTO `ap_migrations` VALUES ('23', '2017_02_16_231409_create_analytics_pages_table', '1');
INSERT INTO `ap_migrations` VALUES ('24', '2017_02_28_095712_create_permissions_table', '1');

-- ----------------------------
-- Table structure for ap_password_resets
-- ----------------------------
DROP TABLE IF EXISTS `ap_password_resets`;
CREATE TABLE `ap_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of ap_password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for ap_permissions
-- ----------------------------
DROP TABLE IF EXISTS `ap_permissions`;
CREATE TABLE `ap_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_status` tinyint(4) NOT NULL DEFAULT '0',
  `add_status` tinyint(4) NOT NULL DEFAULT '0',
  `edit_status` tinyint(4) NOT NULL DEFAULT '0',
  `delete_status` tinyint(4) NOT NULL DEFAULT '0',
  `analytics_status` tinyint(4) NOT NULL DEFAULT '0',
  `inbox_status` tinyint(4) NOT NULL DEFAULT '0',
  `newsletter_status` tinyint(4) NOT NULL DEFAULT '0',
  `calendar_status` tinyint(4) NOT NULL DEFAULT '0',
  `banners_status` tinyint(4) NOT NULL DEFAULT '0',
  `settings_status` tinyint(4) NOT NULL DEFAULT '0',
  `webmaster_status` tinyint(4) NOT NULL DEFAULT '0',
  `data_sections` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of ap_permissions
-- ----------------------------
INSERT INTO `ap_permissions` VALUES ('1', 'Webmaster', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1,2,3,4,5,6,7,8', '1', '1', null, '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_permissions` VALUES ('2', 'Website Manager', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '1,2,3,4,5,6,7,8', '1', '1', null, '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_permissions` VALUES ('3', 'Limited User', '1', '1', '1', '0', '0', '0', '0', '1', '1', '0', '0', '1,2,3,4,5,6,7,8', '1', '1', null, '2017-04-26 23:55:47', '2017-04-26 23:55:47');

-- ----------------------------
-- Table structure for ap_photos
-- ----------------------------
DROP TABLE IF EXISTS `ap_photos`;
CREATE TABLE `ap_photos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `topic_id` int(11) NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `row_no` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of ap_photos
-- ----------------------------

-- ----------------------------
-- Table structure for ap_sections
-- ----------------------------
DROP TABLE IF EXISTS `ap_sections`;
CREATE TABLE `ap_sections` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `visits` int(11) NOT NULL,
  `webmaster_id` int(11) NOT NULL,
  `father_id` int(11) NOT NULL,
  `row_no` int(11) NOT NULL,
  `seo_title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keywords_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keywords_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of ap_sections
-- ----------------------------

-- ----------------------------
-- Table structure for ap_settings
-- ----------------------------
DROP TABLE IF EXISTS `ap_settings`;
CREATE TABLE `ap_settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `site_title_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_desc_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_desc_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_keywords_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_keywords_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_webmails` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notify_messages_status` tinyint(4) DEFAULT NULL,
  `notify_comments_status` tinyint(4) DEFAULT NULL,
  `notify_orders_status` tinyint(4) DEFAULT NULL,
  `site_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_status` tinyint(4) NOT NULL,
  `close_msg` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link6` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link7` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link8` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link9` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_link10` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_t1_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_t1_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_t3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_t4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_t5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_t6` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_t7_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_t7_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `style_logo_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style_logo_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style_fav` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style_apple` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style_color1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style_color2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style_type` tinyint(4) DEFAULT NULL,
  `style_bg_type` tinyint(4) DEFAULT NULL,
  `style_bg_pattern` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style_bg_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style_bg_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style_subscribe` tinyint(4) DEFAULT NULL,
  `style_footer` tinyint(4) DEFAULT NULL,
  `style_footer_bg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style_preload` tinyint(4) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of ap_settings
-- ----------------------------
INSERT INTO `ap_settings` VALUES ('1', '', 'Affordable Programmer', '', 'Affordable Programmer, Hire programmers to work on your websites, online software or help you manage your project or developments', '', 'ey, words, website, web', 'contact@affordableprogrammer.com', '1', '1', '1', 'https://www.affordableprogrammer.com/', '1', 'Website under maintenance \n<h1>Comming SOON</h1>', '#', '#', '#', '#', '#', '#', '#', '#', '#', '#', '795 baker dr', '795 Baker Dr, Midvale UT 84047', '+1 (385) 282-6160', '', '3852826160', 'contact@affordableprogrammer.com', 'من الأحد إلى الخميس 08:00 ص - 05:00 م', 'Monday to Friday 08:00 AM to 05:00 PM', '14933130927643.png', '14933130925379.png', '14933130928518.png', '14933130921521.png', '#3494c8', '#2e3e4e', '0', '0', null, '#2e3e4e', null, '0', '1', null, '0', '1', '1', '2017-04-26 23:55:47', '2017-04-27 17:11:32');

-- ----------------------------
-- Table structure for ap_topics
-- ----------------------------
DROP TABLE IF EXISTS `ap_topics`;
CREATE TABLE `ap_topics` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details_ar` longtext COLLATE utf8mb4_unicode_ci,
  `details_en` longtext COLLATE utf8mb4_unicode_ci,
  `date` date DEFAULT NULL,
  `video_type` tinyint(4) DEFAULT NULL,
  `photo_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attach_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `audio_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `visits` int(11) NOT NULL,
  `webmaster_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `row_no` int(11) NOT NULL,
  `seo_title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keywords_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keywords_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of ap_topics
-- ----------------------------
INSERT INTO `ap_topics` VALUES ('1', null, 'About Us', null, '<p>In the role of web design, development, and online marketing agency, we create business websites and web based solutions for all types of brands. We have also acquainted small businesses and young startups with sales and leads generating from traffic originating from searches all around the web.</p>\r\n\r\n<p><strong>Companies choose us as their website design &amp; programming partner because we meet expectations.</strong></p>\r\n\r\n<p>We develop custom features for complex business website and database requirements. Hire dedicated Salt Lake City programmers with affordable budgets.</p>\r\n\r\n<p>Are you a small or mid-sized organization that is constantly searching for web developers, web site designers and web programmers to assist you in creating, repairing or updating your website we would love to help.</p>', '2017-04-26', null, '14933185169390.jpg', null, null, null, null, '1', '3', '1', '0', '1', null, null, null, null, null, null, '1', '1', '2017-04-26 23:55:48', '2017-04-27 18:54:28');
INSERT INTO `ap_topics` VALUES ('2', 'اتصل بنا', 'Contact Us', '', '', '2017-04-26', null, null, null, null, null, null, '1', '0', '1', '0', '2', null, null, null, null, null, null, '1', null, '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_topics` VALUES ('3', 'الخصوصية', 'Privacy', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.', 'It is a long established fact that a reader will be distracted by the readable content of a page.', '2017-04-26', null, null, null, null, null, null, '1', '0', '1', '0', '3', null, null, null, null, null, null, '1', null, '2017-04-26 23:55:48', '2017-04-26 23:55:48');
INSERT INTO `ap_topics` VALUES ('4', 'الشروط والأحكام', 'Terms & Conditions', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص.', 'It is a long established fact that a reader will be distracted by the readable content of a page.', '2017-04-26', null, null, null, null, null, null, '1', '0', '1', '0', '4', null, null, null, null, null, null, '1', null, '2017-04-26 23:55:48', '2017-04-26 23:55:48');

-- ----------------------------
-- Table structure for ap_users
-- ----------------------------
DROP TABLE IF EXISTS `ap_users`;
CREATE TABLE `ap_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permissions_id` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `connect_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `connect_password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of ap_users
-- ----------------------------
INSERT INTO `ap_users` VALUES ('1', 'phillipmadsen', 'contact@affordableprogrammer.com', '$2y$10$2S7DuZ0T7q8WXgPsj8VQtuNz.1h30hyv1tx24bvZMmXsTyw09qNa6', null, '1', '1', null, null, '86CkQB4DZDpsN9UdhZS9aR1a9skoe1yicTIac6Amo3Z7DZ97k1B1t9WXXqdo', '1', null, '2017-04-26 23:55:46', '2017-04-26 23:55:46');
INSERT INTO `ap_users` VALUES ('2', 'admin', 'admin@site.com', '$2y$10$D8/nxshpmJWLjEDEwN7Fx.GAnXt0c9rXwE2QaWOF.vkQLzrm4zKEC', null, '1', '1', null, null, null, '1', null, '2017-04-26 23:55:46', '2017-04-26 23:55:46');
INSERT INTO `ap_users` VALUES ('3', 'manager', 'manager@site.com', '$2y$10$DsOwRTmqgDynMJNupPHzKOg3l35stJbT31itNYlaLR7UWYKlNL8ki', null, '2', '1', null, null, null, '1', null, '2017-04-26 23:55:46', '2017-04-26 23:55:46');
INSERT INTO `ap_users` VALUES ('4', 'user', 'user@site.com', '$2y$10$BLfLuoCO1VdnY7LDzpMViOXXGSyrrf83QxN59IXzyocLMmd8k.982', null, '3', '1', null, null, null, '1', null, '2017-04-26 23:55:47', '2017-04-26 23:55:47');

-- ----------------------------
-- Table structure for ap_webmails
-- ----------------------------
DROP TABLE IF EXISTS `ap_webmails`;
CREATE TABLE `ap_webmails` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) NOT NULL DEFAULT '0',
  `group_id` int(11) DEFAULT NULL,
  `contact_id` int(11) DEFAULT NULL,
  `father_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci,
  `date` datetime NOT NULL,
  `from_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_cc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_bcc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `flag` tinyint(4) NOT NULL DEFAULT '0',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of ap_webmails
-- ----------------------------

-- ----------------------------
-- Table structure for ap_webmails_files
-- ----------------------------
DROP TABLE IF EXISTS `ap_webmails_files`;
CREATE TABLE `ap_webmails_files` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `webmail_id` int(11) NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of ap_webmails_files
-- ----------------------------

-- ----------------------------
-- Table structure for ap_webmails_groups
-- ----------------------------
DROP TABLE IF EXISTS `ap_webmails_groups`;
CREATE TABLE `ap_webmails_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of ap_webmails_groups
-- ----------------------------

-- ----------------------------
-- Table structure for ap_webmaster_banners
-- ----------------------------
DROP TABLE IF EXISTS `ap_webmaster_banners`;
CREATE TABLE `ap_webmaster_banners` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `row_no` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `desc_status` tinyint(4) NOT NULL,
  `link_status` tinyint(4) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `icon_status` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of ap_webmaster_banners
-- ----------------------------
INSERT INTO `ap_webmaster_banners` VALUES ('1', '1', 'homeBanners', '1600', '500', '1', '1', '1', '0', '1', '1', null, '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_webmaster_banners` VALUES ('2', '2', 'textBanners', '330', '330', '1', '1', '0', '1', '1', '1', null, '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_webmaster_banners` VALUES ('3', '3', 'sideBanners', '330', '330', '0', '1', '1', '0', '1', '1', null, '2017-04-26 23:55:47', '2017-04-26 23:55:47');

-- ----------------------------
-- Table structure for ap_webmaster_sections
-- ----------------------------
DROP TABLE IF EXISTS `ap_webmaster_sections`;
CREATE TABLE `ap_webmaster_sections` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `row_no` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL,
  `sections_status` tinyint(4) NOT NULL,
  `comments_status` tinyint(4) NOT NULL,
  `date_status` tinyint(4) NOT NULL,
  `longtext_status` tinyint(4) NOT NULL,
  `editor_status` tinyint(4) NOT NULL,
  `attach_file_status` tinyint(4) NOT NULL,
  `multi_images_status` tinyint(4) NOT NULL,
  `section_icon_status` tinyint(4) NOT NULL,
  `icon_status` tinyint(4) NOT NULL,
  `maps_status` tinyint(4) NOT NULL,
  `order_status` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of ap_webmaster_sections
-- ----------------------------
INSERT INTO `ap_webmaster_sections` VALUES ('1', '1', 'sitePages', '0', '0', '0', '0', '1', '1', '1', '1', '1', '0', '1', '0', '1', '1', null, '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_webmaster_sections` VALUES ('2', '2', 'services', '0', '0', '0', '0', '1', '1', '1', '1', '1', '0', '0', '1', '1', '1', null, '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_webmaster_sections` VALUES ('3', '3', 'news', '0', '0', '1', '1', '1', '1', '0', '1', '1', '0', '0', '0', '1', '1', null, '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_webmaster_sections` VALUES ('4', '4', 'photos', '1', '0', '1', '0', '0', '0', '0', '1', '1', '0', '0', '0', '1', '1', null, '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_webmaster_sections` VALUES ('5', '5', 'videos', '2', '1', '1', '0', '0', '0', '0', '0', '1', '0', '0', '0', '1', '1', null, '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_webmaster_sections` VALUES ('6', '6', 'sounds', '3', '1', '1', '0', '0', '0', '0', '0', '1', '0', '0', '0', '1', '1', null, '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_webmaster_sections` VALUES ('7', '7', 'blog', '0', '1', '1', '1', '1', '1', '0', '1', '1', '0', '0', '0', '1', '1', null, '2017-04-26 23:55:47', '2017-04-26 23:55:47');
INSERT INTO `ap_webmaster_sections` VALUES ('8', '8', 'products', '0', '2', '1', '0', '1', '1', '0', '1', '1', '0', '0', '1', '1', '1', null, '2017-04-26 23:55:47', '2017-04-26 23:55:47');

-- ----------------------------
-- Table structure for ap_webmaster_settings
-- ----------------------------
DROP TABLE IF EXISTS `ap_webmaster_settings`;
CREATE TABLE `ap_webmaster_settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ar_box_status` tinyint(4) NOT NULL,
  `en_box_status` tinyint(4) NOT NULL,
  `seo_status` tinyint(4) NOT NULL,
  `analytics_status` tinyint(4) NOT NULL,
  `banners_status` tinyint(4) NOT NULL,
  `inbox_status` tinyint(4) NOT NULL,
  `calendar_status` tinyint(4) NOT NULL,
  `settings_status` tinyint(4) NOT NULL,
  `newsletter_status` tinyint(4) NOT NULL,
  `members_status` tinyint(4) NOT NULL,
  `orders_status` tinyint(4) NOT NULL,
  `shop_status` tinyint(4) NOT NULL,
  `shop_settings_status` tinyint(4) NOT NULL,
  `default_currency_id` int(11) NOT NULL,
  `languages_count` int(11) NOT NULL,
  `latest_news_section_id` int(11) NOT NULL,
  `header_menu_id` int(11) NOT NULL,
  `footer_menu_id` int(11) NOT NULL,
  `home_banners_section_id` int(11) NOT NULL,
  `home_text_banners_section_id` int(11) NOT NULL,
  `side_banners_section_id` int(11) NOT NULL,
  `contact_page_id` int(11) NOT NULL,
  `newsletter_contacts_group` int(11) NOT NULL,
  `new_comments_status` tinyint(4) NOT NULL,
  `home_content1_section_id` int(11) NOT NULL,
  `home_content2_section_id` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of ap_webmaster_settings
-- ----------------------------
INSERT INTO `ap_webmaster_settings` VALUES ('1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '0', '0', '0', '2', '3', '1', '2', '1', '2', '3', '2', '1', '1', '7', '4', '1', '1', '2017-04-26 23:55:47', '2017-04-27 18:00:13');
SET FOREIGN_KEY_CHECKS=1;
