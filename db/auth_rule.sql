/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : ubudsatu

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-01-28 10:00:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `auth_rule`
-- ----------------------------
DROP TABLE IF EXISTS `auth_rule`;
CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_rule
-- ----------------------------
INSERT INTO `auth_rule` VALUES ('CEO', 'O:22:\"yii\\rbac\\UserGroupRule\":3:{s:4:\"name\";s:3:\"CEO\";s:9:\"createdAt\";i:1432663909;s:9:\"updatedAt\";i:1432663909;}', '1432663909', '1432663909');
INSERT INTO `auth_rule` VALUES ('DM', 'O:22:\"yii\\rbac\\UserGroupRule\":3:{s:4:\"name\";s:2:\"DM\";s:9:\"createdAt\";i:1432663960;s:9:\"updatedAt\";i:1432663960;}', '1432663960', '1432663960');
INSERT INTO `auth_rule` VALUES ('GM', 'O:22:\"yii\\rbac\\UserGroupRule\":3:{s:4:\"name\";s:2:\"GM\";s:9:\"createdAt\";i:1432663921;s:9:\"updatedAt\";i:1432663921;}', '1432663921', '1432663921');
INSERT INTO `auth_rule` VALUES ('KOMISARIS', 'O:22:\"yii\\rbac\\UserGroupRule\":3:{s:4:\"name\";s:9:\"KOMISARIS\";s:9:\"createdAt\";i:1432663897;s:9:\"updatedAt\";i:1432663897;}', '1432663897', '1432663897');
INSERT INTO `auth_rule` VALUES ('MANAGER', 'O:22:\"yii\\rbac\\UserGroupRule\":3:{s:4:\"name\";s:7:\"MANAGER\";s:9:\"createdAt\";i:1432663935;s:9:\"updatedAt\";i:1432663935;}', '1432663935', '1432663935');
INSERT INTO `auth_rule` VALUES ('OPS', 'O:22:\"yii\\rbac\\UserGroupRule\":3:{s:4:\"name\";s:3:\"OPS\";s:9:\"createdAt\";i:1432663982;s:9:\"updatedAt\";i:1432663982;}', '1432663982', '1432663982');
INSERT INTO `auth_rule` VALUES ('OWNER', 'O:22:\"yii\\rbac\\UserGroupRule\":3:{s:4:\"name\";s:5:\"OWNER\";s:9:\"createdAt\";i:1432663885;s:9:\"updatedAt\";i:1432663885;}', '1432663885', '1432663885');
INSERT INTO `auth_rule` VALUES ('STAFF', 'O:22:\"yii\\rbac\\UserGroupRule\":3:{s:4:\"name\";s:5:\"STAFF\";s:9:\"createdAt\";i:1432663970;s:9:\"updatedAt\";i:1432781070;}', '1432663970', '1432781070');
INSERT INTO `auth_rule` VALUES ('SUVERVISOR', 'O:22:\"yii\\rbac\\UserGroupRule\":3:{s:4:\"name\";s:10:\"SUVERVISOR\";s:9:\"createdAt\";i:1432663950;s:9:\"updatedAt\";i:1432663950;}', '1432663950', '1432663950');
