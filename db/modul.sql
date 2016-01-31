/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : ubudsatu

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-01-28 10:00:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `modul`
-- ----------------------------
DROP TABLE IF EXISTS `modul`;
CREATE TABLE `modul` (
  `MODUL_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `MODUL_NM` varchar(100) NOT NULL DEFAULT 'none',
  `MODUL_DCRP` text,
  `MODUL_STS` smallint(6) DEFAULT '1',
  `SORT` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`MODUL_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of modul
-- ----------------------------
INSERT INTO `modul` VALUES ('1', 'RO', 'Request Order', '1', null);
INSERT INTO `modul` VALUES ('2', 'SO', 'Sales Order', '1', null);
INSERT INTO `modul` VALUES ('3', 'PO', 'Purchase Order', '1', null);
