/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : ubudsatu

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-01-28 10:00:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `modul_permission`
-- ----------------------------
DROP TABLE IF EXISTS `modul_permission`;
CREATE TABLE `modul_permission` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `USER_ID` bigint(20) DEFAULT '0',
  `MODUL_ID` bigint(20) DEFAULT NULL,
  `STATUS` smallint(6) NOT NULL DEFAULT '0',
  `BTN_CREATE` smallint(6) NOT NULL DEFAULT '0',
  `BTN_EDIT` smallint(6) NOT NULL DEFAULT '0' COMMENT 'EDITING | Customize ',
  `BTN_DELETE` smallint(6) NOT NULL DEFAULT '0' COMMENT 'Menu Delete | STATUS=0',
  `BTN_VIEW` smallint(6) NOT NULL DEFAULT '0' COMMENT 'View general | Can''t Insert|update|delete',
  `BTN_REVIEW` smallint(6) NOT NULL DEFAULT '0' COMMENT 'Menu Revew For Signature\r\nMengetahui/Approved',
  `BTN_PROCESS1` smallint(6) NOT NULL DEFAULT '0',
  `BTN_PROCESS2` smallint(6) NOT NULL DEFAULT '0',
  `BTN_PROCESS3` smallint(6) NOT NULL DEFAULT '0',
  `BTN_PROCESS4` smallint(6) NOT NULL DEFAULT '0',
  `BTN_PROCESS5` smallint(6) NOT NULL DEFAULT '0',
  `BTN_SIGN1` smallint(6) NOT NULL DEFAULT '0',
  `BTN_SIGN2` smallint(6) NOT NULL DEFAULT '0',
  `BTN_SIGN3` smallint(6) NOT NULL DEFAULT '0',
  `BTN_SIGN4` smallint(6) NOT NULL DEFAULT '0',
  `BTN_SIGN5` smallint(6) NOT NULL DEFAULT '0',
  `CREATED_BY` varchar(50) NOT NULL DEFAULT 'none',
  `UPDATED_BY` varchar(50) NOT NULL DEFAULT 'none',
  `UPDATED_TIME` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of modul_permission
-- ----------------------------
INSERT INTO `modul_permission` VALUES ('1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '', '', '2016-01-20 22:15:35');
INSERT INTO `modul_permission` VALUES ('2', '2', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '', '', '2016-01-27 10:53:23');
INSERT INTO `modul_permission` VALUES ('3', '2', '2', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '', '', '2016-01-25 14:55:38');
INSERT INTO `modul_permission` VALUES ('4', '28', '1', '1', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', 'none', 'none', '2016-01-14 14:33:28');
INSERT INTO `modul_permission` VALUES ('5', '26', '3', '1', '1', '1', '0', '1', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', 'none', 'none', '2016-01-14 14:33:29');
INSERT INTO `modul_permission` VALUES ('6', '23', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '1', '0', '0', 'none', 'none', '2016-01-14 14:35:05');
INSERT INTO `modul_permission` VALUES ('7', '32', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '1', '0', '0', 'none', 'none', '2016-01-14 14:35:10');
INSERT INTO `modul_permission` VALUES ('8', '23', '2', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '1', '0', '0', 'none', 'none', '2016-01-14 14:35:12');
INSERT INTO `modul_permission` VALUES ('9', '32', '2', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '1', '0', '0', 'none', 'none', '2016-01-14 14:35:12');
INSERT INTO `modul_permission` VALUES ('10', '32', '3', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '1', '0', '0', 'none', 'none', '2016-01-14 14:35:14');
INSERT INTO `modul_permission` VALUES ('11', '23', '3', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '1', '0', '0', 'none', 'none', '2016-01-14 14:35:15');
INSERT INTO `modul_permission` VALUES ('12', '26', '1', '1', '1', '1', '1', '1', '1', '0', '0', '0', '0', '0', '1', '1', '0', '0', '0', 'none', 'none', '2016-01-20 22:34:22');
INSERT INTO `modul_permission` VALUES ('13', '26', '2', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', 'none', 'none', '2016-01-14 14:33:40');
INSERT INTO `modul_permission` VALUES ('14', '25', '1', '1', '1', '1', '0', '0', '1', '0', '0', '0', '0', '0', '1', '1', '0', '0', '0', 'none', 'none', '2016-01-20 22:33:36');
INSERT INTO `modul_permission` VALUES ('15', '25', '2', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', 'none', 'none', '2016-01-14 14:33:41');
INSERT INTO `modul_permission` VALUES ('16', '25', '3', '1', '0', '0', '0', '1', '1', '0', '0', '0', '0', '0', '1', '1', '0', '0', '0', 'none', 'none', '2016-01-15 18:58:14');
INSERT INTO `modul_permission` VALUES ('17', '2', '3', '0', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', 'none', 'none', '2016-01-14 14:33:43');
INSERT INTO `modul_permission` VALUES ('18', '28', '1', '1', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', 'none', 'none', '2016-01-27 10:41:28');
INSERT INTO `modul_permission` VALUES ('19', '35', '1', '1', '1', '1', '1', '1', '1', '0', '0', '0', '0', '0', '1', '1', '1', '0', '0', 'none', 'none', '2016-01-27 10:49:53');
INSERT INTO `modul_permission` VALUES ('20', '35', '1', '1', '1', '1', '1', '1', '1', '0', '0', '0', '0', '0', '1', '1', '1', '0', '0', 'none', 'none', '2016-01-27 10:54:40');
