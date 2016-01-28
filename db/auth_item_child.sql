/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : ubudsatu

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-01-28 10:00:07
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `auth_item_child`
-- ----------------------------
DROP TABLE IF EXISTS `auth_item_child`;
CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`) USING BTREE,
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_item_child
-- ----------------------------
INSERT INTO `auth_item_child` VALUES ('Permission_IT_Full', '/admin');
INSERT INTO `auth_item_child` VALUES ('Permission_ACC_Full', '/dashboard/acc-sales');
INSERT INTO `auth_item_child` VALUES ('Permission_Umum_Dashboard_Full', '/dashboard/adminweb-crm');
INSERT INTO `auth_item_child` VALUES ('Permission_Umum_Dashboard_Full', '/dashboard/adminweb-krema');
INSERT INTO `auth_item_child` VALUES ('Permission_Umum_Dashboard_setting CRM web', '/dashboard/adminweb-krema');
INSERT INTO `auth_item_child` VALUES ('Permission_Umum_Dashboard_Full', '/dashboard/adminweb-lg');
INSERT INTO `auth_item_child` VALUES ('Permission_Umum_Dashboard_setting LG web', '/dashboard/adminweb-lg');
INSERT INTO `auth_item_child` VALUES ('Permmision Web Admin', '/dashboard/adminweb-lg');
INSERT INTO `auth_item_child` VALUES ('Permission_Umum_Dashboard_Full', '/dashboard/adminweb-vinding');
INSERT INTO `auth_item_child` VALUES ('Permission_Umum_Dashboard_setting VINDING web', '/dashboard/adminweb-vinding');
INSERT INTO `auth_item_child` VALUES ('Permission_ALG_Full', '/dashboard/alg-marketing');
INSERT INTO `auth_item_child` VALUES ('Permission_ALG_Full', '/dashboard/alg-product');
INSERT INTO `auth_item_child` VALUES ('Permission_ALG_Full', '/dashboard/alg-purchasing');
INSERT INTO `auth_item_child` VALUES ('Permission_ALG_Full', '/dashboard/alg-sales');
INSERT INTO `auth_item_child` VALUES ('Permission_ALG_Full', '/dashboard/alg-warehouse');
INSERT INTO `auth_item_child` VALUES ('Permission_CRM_FULL', '/dashboard/crm-customer');
INSERT INTO `auth_item_child` VALUES ('Permission_Umum_Dashboard_CRM_Customer', '/dashboard/crm-customer');
INSERT INTO `auth_item_child` VALUES ('Permission_CRM_FULL', '/dashboard/crm-distributor');
INSERT INTO `auth_item_child` VALUES ('Permission_Umum_Dashboard_CRM_Distributor', '/dashboard/crm-distributor');
INSERT INTO `auth_item_child` VALUES ('Permission_CRM_FULL', '/dashboard/crm-manufactory');
INSERT INTO `auth_item_child` VALUES ('Permission_Umum_Dashboard_CRM_Manufactory', '/dashboard/crm-manufactory');
INSERT INTO `auth_item_child` VALUES ('Permission_CRM_FULL', '/dashboard/crm-salesmen');
INSERT INTO `auth_item_child` VALUES ('Permission_Umum_Dashboard_CRM_Salesman', '/dashboard/crm-salesmen');
INSERT INTO `auth_item_child` VALUES ('Permission_CRM_FULL', '/dashboard/crm-salespromo');
INSERT INTO `auth_item_child` VALUES ('Permission_Umum_Dashboard_CRM_Salespromo', '/dashboard/crm-salespromo');
INSERT INTO `auth_item_child` VALUES ('Permission_DESIGN_Full', '/dashboard/design-draff');
INSERT INTO `auth_item_child` VALUES ('Permission_DESIGN_Full', '/dashboard/design-matrial');
INSERT INTO `auth_item_child` VALUES ('Permission_ESM_Full', '/dashboard/esm-factory');
INSERT INTO `auth_item_child` VALUES ('Permission_ESM_Full', '/dashboard/esm-marketing');
INSERT INTO `auth_item_child` VALUES ('Permission_ESM_Full', '/dashboard/esm-product');
INSERT INTO `auth_item_child` VALUES ('Permission_ESM_Full', '/dashboard/esm-purchasing');
INSERT INTO `auth_item_child` VALUES ('Permission_ESM_Full', '/dashboard/esm-sales');
INSERT INTO `auth_item_child` VALUES ('Permission_ESM_Full', '/dashboard/esm-warehouse');
INSERT INTO `auth_item_child` VALUES ('Permission_GOSEND_Full', '/dashboard/gsn-afiliasi');
INSERT INTO `auth_item_child` VALUES ('Permission_GOSEND_Full', '/dashboard/gsn-helpdesk');
INSERT INTO `auth_item_child` VALUES ('Permission_GOSEND_Full', '/dashboard/gsn-marketing');
INSERT INTO `auth_item_child` VALUES ('Permission_GOSEND_Full', '/dashboard/gsn-product');
INSERT INTO `auth_item_child` VALUES ('Permission_GOSEND_Full', '/dashboard/gsn-purchasing');
INSERT INTO `auth_item_child` VALUES ('Permission_GOSEND_Full', '/dashboard/gsn-sales');
INSERT INTO `auth_item_child` VALUES ('Permission_GOSEND_Full', '/dashboard/gsn-warehouse');
INSERT INTO `auth_item_child` VALUES ('Permission_HRM_Full', '/dashboard/hrm-absensi');
INSERT INTO `auth_item_child` VALUES ('Permission_HRM_Full', '/dashboard/hrm-ga');
INSERT INTO `auth_item_child` VALUES ('Permission_HRM_Full', '/dashboard/hrm-modul');
INSERT INTO `auth_item_child` VALUES ('Permission_HRM_Full', '/dashboard/hrm-payroll');
INSERT INTO `auth_item_child` VALUES ('Permission_HRM_Full', '/dashboard/hrm-personalia');
INSERT INTO `auth_item_child` VALUES ('Permission_HRM_Full', '/dashboard/hrm-recrutmen');
INSERT INTO `auth_item_child` VALUES ('Permission_IT_Full', '/dashboard/it-programmer');
INSERT INTO `auth_item_child` VALUES ('Permission_MasterData_Barang', '/dashboard/master-barang');
INSERT INTO `auth_item_child` VALUES ('Permission_Report_Dashboard', '/dashboard/rpt-alg');
INSERT INTO `auth_item_child` VALUES ('Permission_Umum_Dashboard_Report ALG', '/dashboard/rpt-alg');
INSERT INTO `auth_item_child` VALUES ('Permission_Report_Dashboard', '/dashboard/rpt-esm');
INSERT INTO `auth_item_child` VALUES ('Permission_Umum_Dashboard_Report ESM', '/dashboard/rpt-esm');
INSERT INTO `auth_item_child` VALUES ('Permission_Report_Dashboard', '/dashboard/rpt-gosent');
INSERT INTO `auth_item_child` VALUES ('Permission_Umum_Dashboard_Report Gosend', '/dashboard/rpt-gosent');
INSERT INTO `auth_item_child` VALUES ('Permission_Report_Dashboard', '/dashboard/rpt-sss');
INSERT INTO `auth_item_child` VALUES ('Permission_Umum_Dashboard_Report SSS', '/dashboard/rpt-sss');
INSERT INTO `auth_item_child` VALUES ('Permission_SSS_Full', '/dashboard/sss-marketing');
INSERT INTO `auth_item_child` VALUES ('Permission_SSS_Full', '/dashboard/sss-product');
INSERT INTO `auth_item_child` VALUES ('Permission_SSS_Full', '/dashboard/sss-purchasing');
INSERT INTO `auth_item_child` VALUES ('Permission_SSS_Full', '/dashboard/sss-sales');
INSERT INTO `auth_item_child` VALUES ('Permission_SSS_Full', '/dashboard/sss-warehouse');
INSERT INTO `auth_item_child` VALUES ('Permission_IT_Full', '/Itapi/index');
INSERT INTO `auth_item_child` VALUES ('Permission_IT_Full', '/Itdbe/index');
INSERT INTO `auth_item_child` VALUES ('Permission_IT_Full', '/Itexportimport/index');
INSERT INTO `auth_item_child` VALUES ('Permission_IT_Full', '/Itlogcancel/index');
INSERT INTO `auth_item_child` VALUES ('Permission_IT_Full', '/Itlogdelete/index');
INSERT INTO `auth_item_child` VALUES ('Permission_IT_Full', '/Itlogerror/index');
INSERT INTO `auth_item_child` VALUES ('Permission_IT_Full', '/Itnetwork/index');
INSERT INTO `auth_item_child` VALUES ('Permission_IT_Full', '/Itsupport/index');
INSERT INTO `auth_item_child` VALUES ('ACCT_OWNER', 'Permission_ACC_Full');
INSERT INTO `auth_item_child` VALUES ('ALG_OWNER', 'Permission_ALG_Full');
INSERT INTO `auth_item_child` VALUES ('CRM_ALL', 'Permission_CRM_FULL');
INSERT INTO `auth_item_child` VALUES ('DESIGN_OWNER', 'Permission_DESIGN_Full');
INSERT INTO `auth_item_child` VALUES ('ESM_OWNER', 'Permission_ESM_Full');
INSERT INTO `auth_item_child` VALUES ('FNC_OWNER', 'Permission_FNC_Full');
INSERT INTO `auth_item_child` VALUES ('GA_OWNER', 'Permission_GA_Full');
INSERT INTO `auth_item_child` VALUES ('GOSEND_OWNER', 'Permission_GOSEND_Full');
INSERT INTO `auth_item_child` VALUES ('HRD_OWNER', 'Permission_HRM_Full');
INSERT INTO `auth_item_child` VALUES ('IT_OWNER', 'Permission_IT_Full');
INSERT INTO `auth_item_child` VALUES ('LG_MASTER_DATA', 'Permission_MasterData_Barang');
INSERT INTO `auth_item_child` VALUES ('DASHBOARD_REPORT_OWNER', 'Permission_Report_Dashboard');
INSERT INTO `auth_item_child` VALUES ('SSS_OWNER', 'Permission_SSS_Full');
INSERT INTO `auth_item_child` VALUES ('DEFAULT_MENU', 'Permission_Umum_Dashboard_Full');
