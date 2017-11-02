/*
Navicat MySQL Data Transfer

Source Server         : jameschun
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : thinkcmf

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-11-02 17:21:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for cmf_players
-- ----------------------------
DROP TABLE IF EXISTS `cmf_players`;
CREATE TABLE `cmf_players` (
  `player_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `player_name` varchar(255) DEFAULT NULL COMMENT '球员中文名',
  `full_name` varchar(255) DEFAULT NULL COMMENT '球员完整的英文名',
  `player_image` varchar(255) DEFAULT NULL COMMENT '球员头像',
  `player_height` varchar(255) DEFAULT NULL COMMENT '球员身高',
  `player_weight` varchar(255) DEFAULT NULL COMMENT '球员体重',
  `player_place` varchar(255) DEFAULT NULL COMMENT '球员位置',
  `player_brithday` varchar(255) DEFAULT NULL COMMENT '出生日期',
  `player_city` varchar(255) DEFAULT NULL COMMENT '出生城市',
  `player_college` varchar(255) DEFAULT NULL COMMENT '大学',
  `player_number` varchar(255) NOT NULL COMMENT '球衣号码',
  `player_draft` varchar(255) DEFAULT NULL COMMENT '选秀情况',
  `player_salary` decimal(10,0) DEFAULT NULL COMMENT '当前薪金',
  `add_time` varchar(255) NOT NULL COMMENT '添加日期',
  PRIMARY KEY (`player_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cmf_players
-- ----------------------------
INSERT INTO `cmf_players` VALUES ('1', '', 'lebron james', null, null, null, null, null, null, null, '', null, null, '');
INSERT INTO `cmf_players` VALUES ('2', '韦德', 'wade', 'admin/20171102/59fad23a41e6d.png', null, null, null, null, null, null, '', null, null, '');
INSERT INTO `cmf_players` VALUES ('3', '波什', 'bosh', '', '211', '', '中锋', '', '', '洛杉矶大学', '', '', '0', '');
