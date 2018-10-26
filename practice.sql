/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : practice

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-10-26 16:35:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `pr_content`
-- ----------------------------
DROP TABLE IF EXISTS `pr_content`;
CREATE TABLE `pr_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '日志主键id',
  `pr_usid` int(11) DEFAULT NULL COMMENT '用户id',
  `pr_usname` char(50) DEFAULT NULL COMMENT '用户姓名',
  `pr_ctitle` char(100) DEFAULT NULL COMMENT '日志/文章标题',
  `pr_ccontent` text COMMENT '内容',
  `pr_ctime` datetime DEFAULT NULL COMMENT '写入时间',
  `pr_cflag` int(11) DEFAULT '0' COMMENT '伪删除标记',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

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
