/*
Navicat MySQL Data Transfer

Source Server         : text
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : eslp_38

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-02-20 20:07:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for l_admin
-- ----------------------------
DROP TABLE IF EXISTS `l_admin`;
CREATE TABLE `l_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '后台用户名id',
  `admin_name` varchar(20) NOT NULL COMMENT '后台用户账号名',
  `admin_pwd` varchar(20) NOT NULL COMMENT '后台用户账密码',
  `admin_tel` varchar(11) DEFAULT NULL COMMENT '手机号',
  `admin_Email` varchar(50) DEFAULT NULL COMMENT '邮箱',
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `admin_name` (`admin_name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of l_admin
-- ----------------------------
INSERT INTO `l_admin` VALUES ('1', 'admins', '123123', '19280415847', '962288954@qq.com');

-- ----------------------------
-- Table structure for l_award
-- ----------------------------
DROP TABLE IF EXISTS `l_award`;
CREATE TABLE `l_award` (
  `award_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '奖品id',
  `award_name` varchar(30) NOT NULL COMMENT '奖品名称',
  `award_info` varchar(100) NOT NULL COMMENT '奖品简介',
  `award_img` varchar(100) NOT NULL COMMENT '奖品图片名称',
  `award_count` int(11) NOT NULL COMMENT '奖品数量',
  `award_price` int(11) NOT NULL COMMENT '奖品价格',
  `award_status` enum('0','1') NOT NULL DEFAULT '0' COMMENT '奖品状态(0:正常,1:冻结)',
  PRIMARY KEY (`award_id`),
  UNIQUE KEY `award_name` (`award_name`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of l_award
-- ----------------------------
INSERT INTO `l_award` VALUES ('1', '安图恩武器典藏包', '典藏版', '1.png', '997', '338', '0');
INSERT INTO `l_award` VALUES ('2', '使徒来袭Ⅱ典藏包', '典藏版', '2.png', '999', '299', '0');
INSERT INTO `l_award` VALUES ('3', '绝命谍影夜光表', '手表', '3.png', '997', '118', '0');
INSERT INTO `l_award` VALUES ('4', '荒古太刀模型套装', '模型', '4.png', '998', '128', '0');
INSERT INTO `l_award` VALUES ('5', '深渊典藏包', '礼包', '5.png', '999', '299', '0');
INSERT INTO `l_award` VALUES ('6', '女圣职手办-普通版', '手办', '6.png', '997', '599', '0');
INSERT INTO `l_award` VALUES ('7', '风暴骑兵雕塑原色版', '手办', '7.png', '998', '1299', '0');
INSERT INTO `l_award` VALUES ('8', 'GSC炽天使粘土', '粘土', '8.png', '998', '478', '0');

-- ----------------------------
-- Table structure for l_award_record
-- ----------------------------
DROP TABLE IF EXISTS `l_award_record`;
CREATE TABLE `l_award_record` (
  `ar_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '抽奖记录id',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `award_id` int(11) NOT NULL COMMENT '奖品id',
  `award_time` datetime NOT NULL COMMENT '中奖时间',
  `id` int(11) NOT NULL,
  PRIMARY KEY (`ar_id`),
  KEY `user_id` (`user_id`),
  KEY `award_id` (`award_id`),
  CONSTRAINT `l_award_record_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `l_user` (`user_id`),
  CONSTRAINT `l_award_record_ibfk_2` FOREIGN KEY (`award_id`) REFERENCES `l_award` (`award_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of l_award_record
-- ----------------------------
INSERT INTO `l_award_record` VALUES ('1', '6', '6', '2019-02-20 20:06:07', '1');

-- ----------------------------
-- Table structure for l_recharge_record
-- ----------------------------
DROP TABLE IF EXISTS `l_recharge_record`;
CREATE TABLE `l_recharge_record` (
  `rr_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '充值记录id',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `money` int(11) NOT NULL COMMENT '充值金额',
  `recharge_time` datetime NOT NULL COMMENT '充值时间',
  PRIMARY KEY (`rr_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `l_recharge_record_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `l_user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of l_recharge_record
-- ----------------------------
INSERT INTO `l_recharge_record` VALUES ('1', '1', '100', '2018-11-12 00:00:00');
INSERT INTO `l_recharge_record` VALUES ('2', '1', '100', '2018-11-12 00:00:00');
INSERT INTO `l_recharge_record` VALUES ('3', '1', '50', '2018-11-12 00:00:00');
INSERT INTO `l_recharge_record` VALUES ('4', '1', '60', '2018-11-12 00:00:00');
INSERT INTO `l_recharge_record` VALUES ('5', '1', '70', '2018-11-12 00:00:00');
INSERT INTO `l_recharge_record` VALUES ('6', '6', '100', '2018-12-17 03:39:52');
INSERT INTO `l_recharge_record` VALUES ('7', '6', '1000', '2018-12-17 03:41:15');
INSERT INTO `l_recharge_record` VALUES ('8', '6', '100', '2018-12-17 04:36:42');
INSERT INTO `l_recharge_record` VALUES ('9', '6', '100', '2018-12-17 04:37:14');
INSERT INTO `l_recharge_record` VALUES ('10', '6', '999', '2018-12-17 04:38:32');
INSERT INTO `l_recharge_record` VALUES ('11', '6', '70', '2018-12-17 04:40:36');
INSERT INTO `l_recharge_record` VALUES ('12', '6', '10', '2018-12-17 04:51:51');
INSERT INTO `l_recharge_record` VALUES ('13', '6', '10', '2018-12-17 04:52:08');
INSERT INTO `l_recharge_record` VALUES ('14', '6', '10', '2018-12-17 04:53:19');
INSERT INTO `l_recharge_record` VALUES ('15', '6', '70', '2018-12-17 08:28:08');
INSERT INTO `l_recharge_record` VALUES ('16', '6', '100', '2018-12-18 03:33:54');
INSERT INTO `l_recharge_record` VALUES ('17', '6', '1000', '2018-12-18 03:49:37');

-- ----------------------------
-- Table structure for l_user
-- ----------------------------
DROP TABLE IF EXISTS `l_user`;
CREATE TABLE `l_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户名id',
  `user_name` varchar(20) NOT NULL COMMENT '用户名',
  `user_pwd` varchar(20) NOT NULL COMMENT '密码',
  `award_time` int(11) NOT NULL DEFAULT '3' COMMENT '中奖次数',
  `coin` int(11) NOT NULL DEFAULT '0' COMMENT '点卷',
  `phone` varchar(11) DEFAULT NULL COMMENT '手机号',
  `Email` varchar(50) DEFAULT NULL COMMENT '邮箱',
  `user_status` enum('0','1') DEFAULT '0' COMMENT '用户状态(0:正常,1:冻结)',
  `reg_time` datetime NOT NULL COMMENT '注册时间',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of l_user
-- ----------------------------
INSERT INTO `l_user` VALUES ('1', 'lzw111', '123456', '3', '1', '15280415847', '123@qq.com', '1', '2018-06-04 10:29:51');
INSERT INTO `l_user` VALUES ('2', 'zlx222', '123456', '3', '1', '10086', null, '0', '2018-07-04 11:10:35');
INSERT INTO `l_user` VALUES ('3', 'lmh333', '123456', '3', '1', null, null, '0', '2018-08-04 11:10:32');
INSERT INTO `l_user` VALUES ('4', 'tjh111', '123123', '2', '1', '10086', '159591@qq.com', '0', '2018-09-04 11:05:21');
INSERT INTO `l_user` VALUES ('5', 'zlxsb', '123123', '3', '1', null, null, '0', '2018-10-06 08:43:08');
INSERT INTO `l_user` VALUES ('6', '123123', '123456', '990', '800', '15280415847', '962288954@qq.com', '0', '2018-11-06 08:43:49');
INSERT INTO `l_user` VALUES ('11', '234234', '123456', '3', '1', null, null, '1', '2018-12-06 08:49:10');
INSERT INTO `l_user` VALUES ('12', '159591', '123123', '3', '0', null, null, '0', '2019-01-05 03:33:16');
INSERT INTO `l_user` VALUES ('13', 'ASDASD', 'ASDASD', '2', '0', null, null, '0', '2019-01-11 16:05:38');
