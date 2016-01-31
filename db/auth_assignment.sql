/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : ubudsatu

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-01-28 09:59:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `auth_assignment`
-- ----------------------------
DROP TABLE IF EXISTS `auth_assignment`;
CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_assignment
-- ----------------------------
INSERT INTO `auth_assignment` VALUES ('ACCT_OWNER', '1', '1432807683');
INSERT INTO `auth_assignment` VALUES ('ACCT_OWNER', '23', '1443704722');
INSERT INTO `auth_assignment` VALUES ('ACCT_OWNER', '25', '1445574260');
INSERT INTO `auth_assignment` VALUES ('ADMIN WEB', '1', '1447577194');
INSERT INTO `auth_assignment` VALUES ('ALG_CEO', '23', '1443704722');
INSERT INTO `auth_assignment` VALUES ('ALG_DM', '23', '1443704722');
INSERT INTO `auth_assignment` VALUES ('ALG_GM', '23', '1443704722');
INSERT INTO `auth_assignment` VALUES ('ALG_KOMISARIS', '23', '1443704722');
INSERT INTO `auth_assignment` VALUES ('ALG_MANAGER', '23', '1443704722');
INSERT INTO `auth_assignment` VALUES ('ALG_OPS', '23', '1443704722');
INSERT INTO `auth_assignment` VALUES ('ALG_OWNER', '1', '1432787201');
INSERT INTO `auth_assignment` VALUES ('ALG_OWNER', '2', '1432786920');
INSERT INTO `auth_assignment` VALUES ('ALG_OWNER', '23', '1443704722');
INSERT INTO `auth_assignment` VALUES ('ALG_OWNER', '26', '1453083732');
INSERT INTO `auth_assignment` VALUES ('ALG_STAFF', '23', '1443704722');
INSERT INTO `auth_assignment` VALUES ('ALG_SUVERVISOR', '23', '1443704722');
INSERT INTO `auth_assignment` VALUES ('CRM_ALL', '1', '1440753852');
INSERT INTO `auth_assignment` VALUES ('CRM_ALL', '23', '1443704722');
INSERT INTO `auth_assignment` VALUES ('DASHBOARD_REPORT_OWNER', '1', '1432812417');
INSERT INTO `auth_assignment` VALUES ('DASHBOARD_REPORT_OWNER', '23', '1443704722');
INSERT INTO `auth_assignment` VALUES ('DEFAULT_MENU', '1', '1432802950');
INSERT INTO `auth_assignment` VALUES ('DEFAULT_MENU', '2', '1432802957');
INSERT INTO `auth_assignment` VALUES ('DEFAULT_MENU', '23', '1443704722');
INSERT INTO `auth_assignment` VALUES ('DEFAULT_MENU', '3', '1432802964');
INSERT INTO `auth_assignment` VALUES ('DESIGN_OWNER', '1', '1432808942');
INSERT INTO `auth_assignment` VALUES ('DESIGN_OWNER', '23', '1443704722');
INSERT INTO `auth_assignment` VALUES ('ESM_CEO', '23', '1443704722');
INSERT INTO `auth_assignment` VALUES ('ESM_DM', '23', '1443704722');
INSERT INTO `auth_assignment` VALUES ('ESM_GM', '23', '1443704722');
INSERT INTO `auth_assignment` VALUES ('ESM_KOMISARIS', '23', '1443704722');
INSERT INTO `auth_assignment` VALUES ('ESM_MANAGER', '23', '1443704722');
INSERT INTO `auth_assignment` VALUES ('ESM_OPS', '23', '1443704722');
INSERT INTO `auth_assignment` VALUES ('ESM_OWNER', '1', '1432789193');
INSERT INTO `auth_assignment` VALUES ('ESM_OWNER', '2', '1432785959');
INSERT INTO `auth_assignment` VALUES ('ESM_OWNER', '22', '1443508837');
INSERT INTO `auth_assignment` VALUES ('ESM_OWNER', '23', '1443704722');
INSERT INTO `auth_assignment` VALUES ('ESM_OWNER', '26', '1449313921');
INSERT INTO `auth_assignment` VALUES ('ESM_OWNER', '29', '1446456804');
INSERT INTO `auth_assignment` VALUES ('ESM_STAFF', '23', '1443704722');
INSERT INTO `auth_assignment` VALUES ('ESM_SUVERVISOR', '23', '1443704722');
INSERT INTO `auth_assignment` VALUES ('FNC_OWNER', '1', '1432807795');
INSERT INTO `auth_assignment` VALUES ('FNC_OWNER', '23', '1443704723');
INSERT INTO `auth_assignment` VALUES ('GA_OWNER', '1', '1432808097');
INSERT INTO `auth_assignment` VALUES ('GA_OWNER', '23', '1443704723');
INSERT INTO `auth_assignment` VALUES ('GOSEND_OWNER', '1', '1432789226');
INSERT INTO `auth_assignment` VALUES ('GOSEND_OWNER', '23', '1443704723');
INSERT INTO `auth_assignment` VALUES ('GOSENT_CEO', '23', '1443704723');
INSERT INTO `auth_assignment` VALUES ('GOSENT_DM', '23', '1443704723');
INSERT INTO `auth_assignment` VALUES ('GOSENT_GM', '23', '1443704723');
INSERT INTO `auth_assignment` VALUES ('GOSENT_KOMISARIS', '23', '1443704723');
INSERT INTO `auth_assignment` VALUES ('GOSENT_MANAGER', '23', '1443704723');
INSERT INTO `auth_assignment` VALUES ('GOSENT_OPS', '23', '1443704723');
INSERT INTO `auth_assignment` VALUES ('GOSENT_STAFF', '23', '1443704723');
INSERT INTO `auth_assignment` VALUES ('GOSENT_SUVERVISOR', '23', '1443704723');
INSERT INTO `auth_assignment` VALUES ('HRD_OWNER', '1', '1432795531');
INSERT INTO `auth_assignment` VALUES ('HRD_OWNER', '23', '1443704723');
INSERT INTO `auth_assignment` VALUES ('HRD_OWNER', '24', '1444618447');
INSERT INTO `auth_assignment` VALUES ('HRD_OWNER', '26', '1445590145');
INSERT INTO `auth_assignment` VALUES ('HRD_OWNER', '4', '1443608974');
INSERT INTO `auth_assignment` VALUES ('IT_OWNER', '1', '1432810536');
INSERT INTO `auth_assignment` VALUES ('IT_OWNER', '16', '1440037421');
INSERT INTO `auth_assignment` VALUES ('IT_OWNER', '23', '1443704723');
INSERT INTO `auth_assignment` VALUES ('IT_OWNER', '27', '1446435999');
INSERT INTO `auth_assignment` VALUES ('IT_OWNER', '28', '1446455949');
INSERT INTO `auth_assignment` VALUES ('LG_API', '15', '1438668967');
INSERT INTO `auth_assignment` VALUES ('LG_API', '23', '1443704723');
INSERT INTO `auth_assignment` VALUES ('LG_MASTER_DATA', '1', '1441985018');
INSERT INTO `auth_assignment` VALUES ('LG_MASTER_DATA', '22', '1443508843');
INSERT INTO `auth_assignment` VALUES ('LG_MASTER_DATA', '23', '1443704723');
INSERT INTO `auth_assignment` VALUES ('LG_MASTER_DATA', '26', '1449313957');
INSERT INTO `auth_assignment` VALUES ('LG_MASTER_DATA', '28', '1450673236');
INSERT INTO `auth_assignment` VALUES ('Permission_ACC_Full', '1', '1432807665');
INSERT INTO `auth_assignment` VALUES ('Permission_HRM_Full', '1', '1432795464');
INSERT INTO `auth_assignment` VALUES ('Permission_HRM_Full', '4', '1443608956');
INSERT INTO `auth_assignment` VALUES ('SSS_CEO', '23', '1443704723');
INSERT INTO `auth_assignment` VALUES ('SSS_DM', '23', '1443704723');
INSERT INTO `auth_assignment` VALUES ('SSS_GM', '23', '1443704723');
INSERT INTO `auth_assignment` VALUES ('SSS_KOMISARIS', '23', '1443704723');
INSERT INTO `auth_assignment` VALUES ('SSS_MANAGER', '23', '1443704723');
INSERT INTO `auth_assignment` VALUES ('SSS_OPS', '23', '1443704723');
INSERT INTO `auth_assignment` VALUES ('SSS_OWNER', '1', '1432789203');
INSERT INTO `auth_assignment` VALUES ('SSS_OWNER', '23', '1443704723');
INSERT INTO `auth_assignment` VALUES ('SSS_OWNER', '26', '1453083764');
INSERT INTO `auth_assignment` VALUES ('SSS_STAFF', '23', '1443704723');
INSERT INTO `auth_assignment` VALUES ('SSS_SUVERVISOR', '23', '1443704723');
