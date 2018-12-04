/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50553
Source Host           : 127.0.0.1:3306
Source Database       : practice

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-12-04 22:54:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `pr_content`
-- ----------------------------
DROP TABLE IF EXISTS `pr_content`;
CREATE TABLE `pr_content` (
  `pr_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '日志主键id',
  `pr_usid` int(11) DEFAULT NULL COMMENT '用户id',
  `pr_usname` char(50) DEFAULT NULL COMMENT '用户姓名',
  `pr_ctitle` char(100) DEFAULT NULL COMMENT '日志/文章标题',
  `pr_ccontent` text COMMENT '内容',
  `pr_ctime` datetime DEFAULT NULL COMMENT '写入时间',
  `pr_cflag` int(11) DEFAULT '0' COMMENT '伪删除标记',
  PRIMARY KEY (`pr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pr_content
-- ----------------------------
INSERT INTO `pr_content` VALUES ('1', null, null, '今天是一个测试', '123456', '2018-10-26 16:25:45', '0');
INSERT INTO `pr_content` VALUES ('2', null, null, '今天是一个测试', '123456', '2018-10-26 16:25:45', '0');

-- ----------------------------
-- Table structure for `pr_username`
-- ----------------------------
DROP TABLE IF EXISTS `pr_username`;
CREATE TABLE `pr_username` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户（主键）id',
  `pr_name` char(50) NOT NULL COMMENT '用户名',
  `pr_pwd` char(50) NOT NULL COMMENT '用户密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pr_username
-- ----------------------------
INSERT INTO `pr_username` VALUES ('1', '肖轩', '123456');

-- ----------------------------
-- Table structure for `record`
-- ----------------------------
DROP TABLE IF EXISTS `record`;
CREATE TABLE `record` (
  `rec_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '事项id',
  `rec_content` text COMMENT '事项内容',
  `rec_email_choice` enum('1','0') DEFAULT '0' COMMENT '是否发送邮件、0不发送邮件（默认），1发送邮件',
  `rec_email_time` datetime DEFAULT NULL COMMENT '发送邮件时间',
  `rec_write_time` datetime DEFAULT NULL COMMENT '写入时间',
  `rec_choice` enum('1','0') DEFAULT '0' COMMENT '0：待办（默认）、1：已完成',
  `rec_level` enum('3','2','1','0') DEFAULT '0' COMMENT '事项紧急程度（0：事务性、1：重要不紧急、2：紧急不重要、3：重要且紧急）',
  PRIMARY KEY (`rec_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of record
-- ----------------------------
INSERT INTO `record` VALUES ('1', '发生开朗大方进啊撒旦看风景', '1', '2018-12-15 14:30:00', '2018-12-04 21:36:01', '0', '0');
INSERT INTO `record` VALUES ('2', '', '0', '0000-00-00 00:00:00', '2018-12-04 22:09:57', '0', '0');
INSERT INTO `record` VALUES ('3', '', '0', '0000-00-00 00:00:00', '2018-12-04 22:11:55', '0', '0');
INSERT INTO `record` VALUES ('4', '', '0', '0000-00-00 00:00:00', '2018-12-04 22:29:27', '0', '0');
