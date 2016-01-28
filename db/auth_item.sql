/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : ubudsatu

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-01-28 10:00:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `auth_item`
-- ----------------------------
DROP TABLE IF EXISTS `auth_item`;
CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`) USING BTREE,
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of auth_item
-- ----------------------------
INSERT INTO `auth_item` VALUES ('/admin', '2', null, null, null, '1436204436', '1436204436');
INSERT INTO `auth_item` VALUES ('/dashboard/acc-sales', '2', null, null, null, '1436204436', '1436204436');
INSERT INTO `auth_item` VALUES ('/dashboard/adminweb-crm', '2', null, null, null, '1447933906', '1447933906');
INSERT INTO `auth_item` VALUES ('/dashboard/adminweb-krema', '2', null, null, null, '1436204436', '1436204436');
INSERT INTO `auth_item` VALUES ('/dashboard/adminweb-lg', '2', null, null, null, '1447576973', '1447576973');
INSERT INTO `auth_item` VALUES ('/dashboard/adminweb-vinding', '2', null, null, null, '1447576973', '1447933906');
INSERT INTO `auth_item` VALUES ('/dashboard/alg-marketing', '2', null, null, null, '1447933789', '1447933789');
INSERT INTO `auth_item` VALUES ('/dashboard/alg-product', '2', null, null, null, '1453004002', '1453004002');
INSERT INTO `auth_item` VALUES ('/dashboard/alg-purchasing', '2', null, null, null, '1447933798', '1447933798');
INSERT INTO `auth_item` VALUES ('/dashboard/alg-sales', '2', null, null, null, '1447933805', '1447933805');
INSERT INTO `auth_item` VALUES ('/dashboard/alg-warehouse', '2', null, null, null, '1447933812', '1447933812');
INSERT INTO `auth_item` VALUES ('/dashboard/corp', '2', null, null, null, '1447933819', '1447933819');
INSERT INTO `auth_item` VALUES ('/dashboard/crm', '2', null, null, null, null, null);
INSERT INTO `auth_item` VALUES ('/dashboard/crm-customer', '2', null, null, null, '1447933842', '1447933842');
INSERT INTO `auth_item` VALUES ('/dashboard/crm-distributor', '2', null, null, null, '1447933826', '1447933826');
INSERT INTO `auth_item` VALUES ('/dashboard/crm-manufactory', '2', null, null, null, '1447933834', '1447933834');
INSERT INTO `auth_item` VALUES ('/dashboard/crm-salesmen', '2', null, null, null, '1447933849', '1447933849');
INSERT INTO `auth_item` VALUES ('/dashboard/crm-salespromo', '2', null, null, null, '1447933856', '1447933856');
INSERT INTO `auth_item` VALUES ('/dashboard/default', '2', null, null, null, '1447933862', '1447933862');
INSERT INTO `auth_item` VALUES ('/dashboard/dept', '2', null, null, null, '1447933868', '1447933868');
INSERT INTO `auth_item` VALUES ('/dashboard/design-draff', '2', null, null, null, '1447933868', '1447933868');
INSERT INTO `auth_item` VALUES ('/dashboard/design-matrial', '2', null, null, null, '1441984788', '1441984788');
INSERT INTO `auth_item` VALUES ('/dashboard/esm-factory', '2', null, null, null, '1447933874', '1447933874');
INSERT INTO `auth_item` VALUES ('/dashboard/esm-marketing', '2', null, null, null, '1447933880', '1447933880');
INSERT INTO `auth_item` VALUES ('/dashboard/esm-product', '2', null, null, null, '1453003986', '1453003986');
INSERT INTO `auth_item` VALUES ('/dashboard/esm-purchasing', '2', null, null, null, '1447933894', '1447933894');
INSERT INTO `auth_item` VALUES ('/dashboard/esm-sales', '2', null, null, null, '1447933900', '1447933900');
INSERT INTO `auth_item` VALUES ('/dashboard/esm-warehouse', '2', null, null, null, '1447933906', '1447933906');
INSERT INTO `auth_item` VALUES ('/dashboard/ga-inventaris', '2', null, null, null, '1447576973', '1447576973');
INSERT INTO `auth_item` VALUES ('/dashboard/ga-maintenance', '2', null, null, null, '1447576973', '1447576973');
INSERT INTO `auth_item` VALUES ('/dashboard/general', '2', null, null, null, '1447933912', '1447933912');
INSERT INTO `auth_item` VALUES ('/dashboard/gsn-afiliasi', '2', null, null, null, '1447933918', '1447933918');
INSERT INTO `auth_item` VALUES ('/dashboard/gsn-helpdesk', '2', null, null, null, '1447933925', '1447933925');
INSERT INTO `auth_item` VALUES ('/dashboard/gsn-marketing', '2', null, null, null, '1447933931', '1447933931');
INSERT INTO `auth_item` VALUES ('/dashboard/gsn-product', '2', null, null, null, '1453004024', '1453004024');
INSERT INTO `auth_item` VALUES ('/dashboard/gsn-purchasing', '2', null, null, null, '1447933943', '1447933943');
INSERT INTO `auth_item` VALUES ('/dashboard/gsn-sales', '2', null, null, null, '1447933950', '1447933950');
INSERT INTO `auth_item` VALUES ('/dashboard/gsn-warehouse', '2', null, null, null, '1447933956', '1447933956');
INSERT INTO `auth_item` VALUES ('/dashboard/hrm-absensi', '2', null, null, null, '1440761942', '1440761942');
INSERT INTO `auth_item` VALUES ('/dashboard/hrm-ga', '2', null, null, null, '1440761942', '1440761942');
INSERT INTO `auth_item` VALUES ('/dashboard/hrm-modul', '2', null, null, null, '1447933968', '1447933968');
INSERT INTO `auth_item` VALUES ('/dashboard/hrm-payroll', '2', null, null, null, '1440761966', '1440761966');
INSERT INTO `auth_item` VALUES ('/dashboard/hrm-personalia', '2', null, null, null, '1447933974', '1447933974');
INSERT INTO `auth_item` VALUES ('/dashboard/hrm-recrutmen', '2', null, null, null, '1447933962', '1447933962');
INSERT INTO `auth_item` VALUES ('/dashboard/it-programmer', '2', null, null, null, '1440645074', '1440645074');
INSERT INTO `auth_item` VALUES ('/dashboard/master-barang', '2', null, null, null, '1447933981', '1447933981');
INSERT INTO `auth_item` VALUES ('/dashboard/rpt', '2', null, null, null, null, null);
INSERT INTO `auth_item` VALUES ('/dashboard/rpt-alg', '2', null, null, null, '1447933987', '1447933987');
INSERT INTO `auth_item` VALUES ('/dashboard/rpt-esm', '2', null, null, null, '1447933993', '1447933993');
INSERT INTO `auth_item` VALUES ('/dashboard/rpt-gosent', '2', null, null, null, '1447933999', '1447933999');
INSERT INTO `auth_item` VALUES ('/dashboard/rpt-sss', '2', null, null, null, '1447934005', '1447934005');
INSERT INTO `auth_item` VALUES ('/dashboard/sss-marketing', '2', null, null, null, '1447934011', '1447934011');
INSERT INTO `auth_item` VALUES ('/dashboard/sss-product', '2', null, null, null, '1453003996', '1453003996');
INSERT INTO `auth_item` VALUES ('/dashboard/sss-purchasing', '2', null, null, null, '1447934017', '1447934017');
INSERT INTO `auth_item` VALUES ('/dashboard/sss-sales', '2', null, null, null, '1447934023', '1447934023');
INSERT INTO `auth_item` VALUES ('/dashboard/sss-warehouse', '2', null, null, null, '1447934029', '1447934029');
INSERT INTO `auth_item` VALUES ('/dashboard/umum-setting', '2', null, null, null, null, null);
INSERT INTO `auth_item` VALUES ('/dashboard/web-adminlg', '2', null, null, null, '1447934035', '1447934035');
INSERT INTO `auth_item` VALUES ('/Itapi/index', '2', null, null, null, '1432810116', '1432810116');
INSERT INTO `auth_item` VALUES ('/Itdbe/index', '2', null, null, null, '1432809728', '1432809728');
INSERT INTO `auth_item` VALUES ('/Itexportimport/index', '2', null, null, null, '1432810103', '1432810103');
INSERT INTO `auth_item` VALUES ('/Itlogcancel/index', '2', null, null, null, '1432809886', '1432809886');
INSERT INTO `auth_item` VALUES ('/Itlogdelete/index', '2', null, null, null, '1432809865', '1432809865');
INSERT INTO `auth_item` VALUES ('/Itlogerror/index', '2', null, null, null, '1432809849', '1432809849');
INSERT INTO `auth_item` VALUES ('/Itnetwork/index', '2', null, null, null, '1432809743', '1432809743');
INSERT INTO `auth_item` VALUES ('/itprogramer/index', '2', null, null, null, '1433085237', '1433085237');
INSERT INTO `auth_item` VALUES ('/Itsupport/index', '2', null, null, null, '1432809756', '1432809756');
INSERT INTO `auth_item` VALUES ('/system/admin/index', '2', null, null, null, '1436201382', '1436201382');
INSERT INTO `auth_item` VALUES ('ACCT_OWNER', '1', null, 'OWNER', null, '1432804872', '1432807641');
INSERT INTO `auth_item` VALUES ('ADMIN WEB', '1', null, 'OWNER', null, '1447577170', '1448088126');
INSERT INTO `auth_item` VALUES ('ALG_CEO', '1', null, 'CEO', null, '1432664818', '1432664818');
INSERT INTO `auth_item` VALUES ('ALG_DM', '1', null, 'DM', null, '1432664888', '1432782107');
INSERT INTO `auth_item` VALUES ('ALG_GM', '1', null, 'GM', null, '1432664831', '1432664831');
INSERT INTO `auth_item` VALUES ('ALG_KOMISARIS', '1', null, 'KOMISARIS', null, '1432664730', '1432794585');
INSERT INTO `auth_item` VALUES ('ALG_MANAGER', '1', null, 'MANAGER', null, '1432664854', '1438669062');
INSERT INTO `auth_item` VALUES ('ALG_OPS', '1', null, 'OPS', null, '1432664924', '1432664924');
INSERT INTO `auth_item` VALUES ('ALG_OWNER', '1', null, 'OWNER', null, '1432664710', '1432794282');
INSERT INTO `auth_item` VALUES ('ALG_STAFF', '1', null, 'STAFF', null, '1432664903', '1432664903');
INSERT INTO `auth_item` VALUES ('ALG_SUVERVISOR', '1', null, 'SUVERVISOR', null, '1432664875', '1432664875');
INSERT INTO `auth_item` VALUES ('CRM_ALL', '1', 'ALL CRM ROLES', 'OWNER', null, '1440753813', '1440753813');
INSERT INTO `auth_item` VALUES ('DASHBOARD_REPORT_OWNER', '1', 'DASHBOARD REPORT', 'OWNER', null, '1432812393', '1432812393');
INSERT INTO `auth_item` VALUES ('DEFAULT_MENU', '1', 'Menu Untuk Semua login User', 'OWNER', null, '1432802919', '1432804794');
INSERT INTO `auth_item` VALUES ('DESIGN_OWNER', '1', null, 'OWNER', null, '1432808921', '1432808921');
INSERT INTO `auth_item` VALUES ('ESM_CEO', '1', null, 'CEO', null, '1432664401', '1432664401');
INSERT INTO `auth_item` VALUES ('ESM_DM', '1', null, 'DM', null, '1432664569', '1432664569');
INSERT INTO `auth_item` VALUES ('ESM_GM', '1', null, 'GM', null, '1432664423', '1432664423');
INSERT INTO `auth_item` VALUES ('ESM_KOMISARIS', '1', null, 'KOMISARIS', null, '1432664388', '1432664388');
INSERT INTO `auth_item` VALUES ('ESM_MANAGER', '1', null, 'MANAGER', null, '1432664447', '1432664447');
INSERT INTO `auth_item` VALUES ('ESM_OPS', '1', null, 'OPS', null, '1432664598', '1432664598');
INSERT INTO `auth_item` VALUES ('ESM_OWNER', '1', null, 'OWNER', null, '1432664354', '1432794292');
INSERT INTO `auth_item` VALUES ('ESM_STAFF', '1', null, 'STAFF', null, '1432664494', '1432664494');
INSERT INTO `auth_item` VALUES ('ESM_SUVERVISOR', '1', null, 'SUVERVISOR', null, '1432664473', '1432664473');
INSERT INTO `auth_item` VALUES ('FNC_OWNER', '1', null, null, null, '1432807768', '1432807785');
INSERT INTO `auth_item` VALUES ('GA_OWNER', '1', 'GENERAL AFFAIR', 'OWNER', null, '1432808082', '1432808082');
INSERT INTO `auth_item` VALUES ('GOSEND_OWNER', '1', null, 'OWNER', null, '1432664947', '1440776651');
INSERT INTO `auth_item` VALUES ('GOSENT_CEO', '1', null, 'CEO', null, '1432664980', '1432664980');
INSERT INTO `auth_item` VALUES ('GOSENT_DM', '1', null, 'DM', null, '1432665025', '1432665025');
INSERT INTO `auth_item` VALUES ('GOSENT_GM', '1', null, 'GM', null, '1432664996', '1432664996');
INSERT INTO `auth_item` VALUES ('GOSENT_KOMISARIS', '1', null, 'KOMISARIS', null, '1432664964', '1432664964');
INSERT INTO `auth_item` VALUES ('GOSENT_MANAGER', '1', null, 'MANAGER', null, '1432665007', '1432665007');
INSERT INTO `auth_item` VALUES ('GOSENT_OPS', '1', null, 'OPS', null, '1432665079', '1432665079');
INSERT INTO `auth_item` VALUES ('GOSENT_STAFF', '1', null, 'STAFF', null, '1432665058', '1432665058');
INSERT INTO `auth_item` VALUES ('GOSENT_SUVERVISOR', '1', null, 'SUVERVISOR', null, '1432665043', '1432665043');
INSERT INTO `auth_item` VALUES ('HRD_OWNER', '1', null, 'OWNER', null, '1432795501', '1432795501');
INSERT INTO `auth_item` VALUES ('IT_OWNER', '1', 'IT Show ALL', 'OWNER', null, '1432810516', '1432810516');
INSERT INTO `auth_item` VALUES ('LG_API', '1', null, 'MANAGER', null, '1438668936', '1438677624');
INSERT INTO `auth_item` VALUES ('LG_MASTER_DATA', '1', 'data master', 'OWNER', null, '1441984934', '1441984995');
INSERT INTO `auth_item` VALUES ('Permission_ACC_Full', '2', 'Dept. Accounting - All Menu ', null, null, '1432804684', '1447940817');
INSERT INTO `auth_item` VALUES ('Permission_ALG_Full', '2', 'PT. Arta Lipat Ganda - All Menu  ', null, null, '1432699423', '1453004508');
INSERT INTO `auth_item` VALUES ('Permission_CRM_FULL', '2', 'CRM FULL MENU', 'OWNER', null, '1440753739', '1447940480');
INSERT INTO `auth_item` VALUES ('Permission_DESIGN_Full', '2', 'Dept. Design- All Menu ', 'MANAGER', null, '1432808867', '1447941097');
INSERT INTO `auth_item` VALUES ('Permission_ESM_Full', '2', 'PT. Efembi Sukses Makmur / Maxindo - All Menu ', null, null, '1432698661', '1453004475');
INSERT INTO `auth_item` VALUES ('Permission_FNC_Full', '2', 'Dept. Finance - All Menu ', null, null, '1432804718', '1432807745');
INSERT INTO `auth_item` VALUES ('Permission_GA_Full', '2', 'Dept. General Affair - All Menu ', null, null, '1432808020', '1432808053');
INSERT INTO `auth_item` VALUES ('Permission_GOSEND_Full', '2', 'PT.Gosend - All Menu ', null, null, '1432708101', '1453004695');
INSERT INTO `auth_item` VALUES ('Permission_HRM_Full', '2', 'Dept. HRD - All Menu ', null, null, '1432795442', '1447940498');
INSERT INTO `auth_item` VALUES ('Permission_IT_Full', '2', 'Dept. IT - All Menu ', null, null, '1432810444', '1447940670');
INSERT INTO `auth_item` VALUES ('Permission_MasterData_Barang', '2', 'Data Master barang Umum', 'OWNER', null, '1441984852', '1447943654');
INSERT INTO `auth_item` VALUES ('Permission_Report_Dashboard', '2', ' Dashboard Report - All Menu, Description by Login user', null, null, '1432812243', '1447944946');
INSERT INTO `auth_item` VALUES ('Permission_SSS_Full', '2', 'PT. Sarana Sinar Surya - All Menu ', null, null, '1432665874', '1453004466');
INSERT INTO `auth_item` VALUES ('Permission_SSS_Prodak', '2', 'PT. Sarana Sinar Surya - Prodak', null, null, '1432806598', '1447939108');
INSERT INTO `auth_item` VALUES ('Permission_SSS_Purchasing', '2', 'PT. Sarana Sinar Surya - Purchasing', null, null, '1432794540', '1432806643');
INSERT INTO `auth_item` VALUES ('Permission_Umum_Dashboard_CRM_Customer', '2', 'CRM Customer Dashboard', 'OWNER', null, '1432794540', '1447950172');
INSERT INTO `auth_item` VALUES ('Permission_Umum_Dashboard_CRM_Distributor', '2', 'CRM Distributor Dashboard', 'OWNER', null, '1432794540', '1447950183');
INSERT INTO `auth_item` VALUES ('Permission_Umum_Dashboard_CRM_Manufactory', '2', 'CRM manufactory Dashboard', 'OWNER', null, '1432794540', '1447950207');
INSERT INTO `auth_item` VALUES ('Permission_Umum_Dashboard_CRM_Salesman', '2', 'CRM Customer Dashboard', 'OWNER', null, '1432794540', '1447950235');
INSERT INTO `auth_item` VALUES ('Permission_Umum_Dashboard_CRM_Salespromo', '2', 'CRM SalesPromo Dashboard', 'OWNER', null, '1432794540', '1447950262');
INSERT INTO `auth_item` VALUES ('Permission_Umum_Dashboard_Full', '2', 'Dashboard Umum - All Menu - , Description by Login user', null, null, '1432802551', '1448088164');
INSERT INTO `auth_item` VALUES ('Permission_Umum_Dashboard_Report ALG', '2', 'Dashboard report General PT. Arta Lipat Ganda', 'OWNER', null, '1447949494', '1447949534');
INSERT INTO `auth_item` VALUES ('Permission_Umum_Dashboard_Report ESM', '2', 'Dashboard report General PT. Efembi Sukses Makmur', 'OWNER', null, '1447949593', '1447949633');
INSERT INTO `auth_item` VALUES ('Permission_Umum_Dashboard_Report Gosend', '2', 'Dashboard report General PT. Gosent', 'OWNER', null, '1447949662', '1447949696');
INSERT INTO `auth_item` VALUES ('Permission_Umum_Dashboard_Report SSS', '2', 'Dashboard report General PT. Sarana Sinar Surya', 'OWNER', null, '1447949422', '1447949458');
INSERT INTO `auth_item` VALUES ('Permission_Umum_Dashboard_setting CRM web', '2', 'Setting  website crm.lukisongroup.com', 'OWNER', null, '1447948967', '1448088083');
INSERT INTO `auth_item` VALUES ('Permission_Umum_Dashboard_setting Krema web', '2', '/dashboard/adminweb-krema', 'OWNER', null, '1447948967', '1447949114');
INSERT INTO `auth_item` VALUES ('Permission_Umum_Dashboard_setting LG web', '2', 'Setting  website  lukisongroup.com', 'OWNER', null, '1447948521', '1447949132');
INSERT INTO `auth_item` VALUES ('Permission_Umum_Dashboard_setting VINDING web', '2', 'Setting website  vinding.co.id', 'OWNER', null, '1447949198', '1447949221');
INSERT INTO `auth_item` VALUES ('Permmision Web Admin', '2', null, 'OWNER', null, '1447577134', '1448088061');
INSERT INTO `auth_item` VALUES ('SSS_CEO', '1', null, 'CEO', null, '1432664122', '1432664122');
INSERT INTO `auth_item` VALUES ('SSS_DM', '1', null, 'DM', null, '1432664231', '1432664231');
INSERT INTO `auth_item` VALUES ('SSS_GM', '1', null, 'GM', null, '1432664142', '1432664142');
INSERT INTO `auth_item` VALUES ('SSS_KOMISARIS', '1', null, 'KOMISARIS', null, '1432664102', '1432664102');
INSERT INTO `auth_item` VALUES ('SSS_MANAGER', '1', null, 'MANAGER', null, '1432664195', '1432664195');
INSERT INTO `auth_item` VALUES ('SSS_OPS', '1', null, 'OPS', null, '1432664267', '1432664267');
INSERT INTO `auth_item` VALUES ('SSS_OWNER', '1', null, 'OWNER', null, '1432664045', '1432794470');
INSERT INTO `auth_item` VALUES ('SSS_STAFF', '1', null, 'STAFF', null, '1432664249', '1432788195');
INSERT INTO `auth_item` VALUES ('SSS_SUVERVISOR', '1', null, 'SUVERVISOR', null, '1432664217', '1432664217');
