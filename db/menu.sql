/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : ubudsatu

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-01-28 10:00:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `menu`
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(256) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('21', 'SSS', '114', null, '5', '\'cutlery \';');
INSERT INTO `menu` VALUES ('22', 'ESM', '114', null, '6', '\'windows\';');
INSERT INTO `menu` VALUES ('23', 'ALG', '114', null, '7', '\'columns\';');
INSERT INTO `menu` VALUES ('24', 'GOSEND', '114', null, '8', '\'truck\';');
INSERT INTO `menu` VALUES ('26', 'Accounting', '27', null, '2', '\'bank\';');
INSERT INTO `menu` VALUES ('27', 'Department', null, null, '2', '\'sitemap\';');
INSERT INTO `menu` VALUES ('28', 'Finance', '27', null, '3', '\'money\';');
INSERT INTO `menu` VALUES ('30', 'Dashboard', null, null, '0', '\'dashboard\';');
INSERT INTO `menu` VALUES ('35', 'Purchasing', '21', '/dashboard/sss-purchasing', '1', null);
INSERT INTO `menu` VALUES ('36', 'Warehouse', '21', '/dashboard/sss-warehouse', '2', null);
INSERT INTO `menu` VALUES ('37', 'Marketing', '21', '/dashboard/sss-marketing', '5', null);
INSERT INTO `menu` VALUES ('38', 'Sales', '21', '/dashboard/sss-sales', '4', null);
INSERT INTO `menu` VALUES ('44', 'Factory', '22', '/dashboard/esm-factory', '3', null);
INSERT INTO `menu` VALUES ('45', 'Sales', '22', '/dashboard/esm-sales', '4', null);
INSERT INTO `menu` VALUES ('46', 'Purchasing', '22', '/dashboard/esm-purchasing', '1', null);
INSERT INTO `menu` VALUES ('47', 'Warehouse', '22', '/dashboard/esm-warehouse', '2', null);
INSERT INTO `menu` VALUES ('52', 'Seles', '23', '/dashboard/alg-sales', '3', null);
INSERT INTO `menu` VALUES ('53', 'Marketing', '23', '/dashboard/alg-marketing', '4', null);
INSERT INTO `menu` VALUES ('54', 'Purchasing', '23', '/dashboard/alg-purchasing', '1', null);
INSERT INTO `menu` VALUES ('55', 'Warehouse', '23', '/dashboard/alg-warehouse', '2', null);
INSERT INTO `menu` VALUES ('57', 'Marketing', '24', '/dashboard/gsn-marketing', '4', null);
INSERT INTO `menu` VALUES ('58', 'Purchasing', '24', '/dashboard/gsn-purchasing', '1', null);
INSERT INTO `menu` VALUES ('60', 'Affiliation', '24', '/dashboard/gsn-afiliasi', '5', null);
INSERT INTO `menu` VALUES ('62', 'Sales', '24', '/dashboard/gsn-sales', '3', null);
INSERT INTO `menu` VALUES ('63', 'Helpdesk', '24', '/dashboard/gsn-helpdesk', '6', null);
INSERT INTO `menu` VALUES ('67', 'Warehouse', '24', '/dashboard/gsn-warehouse', '2', null);
INSERT INTO `menu` VALUES ('68', 'HRD', '27', null, '1', '\'users\';');
INSERT INTO `menu` VALUES ('71', 'IT Dept', '27', null, '6', '\'umbrella\';');
INSERT INTO `menu` VALUES ('72', 'General Affair', '27', null, '4', '\'building\';');
INSERT INTO `menu` VALUES ('73', 'Designer', '27', null, '5', '\'camera\';');
INSERT INTO `menu` VALUES ('74', 'Personalia', '68', '/dashboard/hrm-personalia', '0', '\'child\';');
INSERT INTO `menu` VALUES ('76', 'Modul', '68', '/dashboard/hrm-modul', '4', '\'cogs\';');
INSERT INTO `menu` VALUES ('77', 'Rekrutmen', '68', '/dashboard/hrm-recrutmen', '1', '\'hand-o-up\';');
INSERT INTO `menu` VALUES ('78', 'Absensi', '68', '/dashboard/hrm-absensi', '2', '\'calendar\';');
INSERT INTO `menu` VALUES ('79', 'Payroll', '68', '/dashboard/hrm-payroll', '3', '\'usd\';');
INSERT INTO `menu` VALUES ('80', 'Sales', '26', '/dashboard/acc-sales', '1', '\'bar-chart-o\';');
INSERT INTO `menu` VALUES ('81', 'Invoice	', '28', '/fincinvoice/index', '1', '\'file-text-o\';');
INSERT INTO `menu` VALUES ('82', 'Inventaris', null, '/dashboard/ga-inventaris', '1', null);
INSERT INTO `menu` VALUES ('83', 'Maintenance', null, '/dashboard/ga-maintenance', '2', null);
INSERT INTO `menu` VALUES ('85', 'CRM', '30', '/dashboard/crm', '1', '\'share-alt\';');
INSERT INTO `menu` VALUES ('86', 'Admin Web LG', '87', '/dashboard/adminweb-lg', '1', null);
INSERT INTO `menu` VALUES ('87', 'Setting', '30', '/dashboard/umum-setting', '3', null);
INSERT INTO `menu` VALUES ('88', 'Matrial Promotion', '73', '/dashboard/design-matrial', '1', '\'tags\';');
INSERT INTO `menu` VALUES ('89', 'Draff Design', '73', '/dashboard/design-draff', '2', '\'image\';');
INSERT INTO `menu` VALUES ('90', 'Programer', '71', '/dashboard/it-programmer', '1', null);
INSERT INTO `menu` VALUES ('91', 'DBE', '71', '/Itdbe/index', '2', null);
INSERT INTO `menu` VALUES ('92', 'Networking', '71', '/Itnetwork/index', '3', null);
INSERT INTO `menu` VALUES ('93', 'Support', '71', '/Itsupport/index', '4', null);
INSERT INTO `menu` VALUES ('94', 'System Log', '71', null, '5', null);
INSERT INTO `menu` VALUES ('95', 'Export/import', '71', '/Itexportimport/index', '6', null);
INSERT INTO `menu` VALUES ('96', 'API', '71', '/Itapi/index', '7', null);
INSERT INTO `menu` VALUES ('97', 'Error Log', '94', '/Itlogerror/index', '1', null);
INSERT INTO `menu` VALUES ('98', 'Delete log', '94', '/Itlogdelete/index', '2', null);
INSERT INTO `menu` VALUES ('99', 'Cancel Log', '94', '/Itlogcancel/index', '3', null);
INSERT INTO `menu` VALUES ('100', 'Reporting', '30', '/dashboard/rpt', '2', null);
INSERT INTO `menu` VALUES ('101', 'PT. Sarana Sinar Surya', '100', '/dashboard/rpt-sss', '1', null);
INSERT INTO `menu` VALUES ('102', 'PT. Arta Lipat Ganda', '100', '/dashboard/rpt-alg', '2', null);
INSERT INTO `menu` VALUES ('103', 'PT. Efembi Sukses Makmur', '100', '/dashboard/rpt-esm', '3', null);
INSERT INTO `menu` VALUES ('104', 'PT. Gosent', '100', '/dashboard/rpt-gosent', '4', null);
INSERT INTO `menu` VALUES ('114', 'Company', null, null, '1', '\'flag-o\';');
INSERT INTO `menu` VALUES ('115', 'admin', '71', '/admin', '0', null);
INSERT INTO `menu` VALUES ('124', 'Forwarder Api', '123', '/api/gsn/forwarder/index', null, null);
INSERT INTO `menu` VALUES ('125', 'Manufactory', '85', '/dashboard/crm-manufactory', '0', null);
INSERT INTO `menu` VALUES ('126', 'Distributor', '85', '/dashboard/crm-distributor', '1', null);
INSERT INTO `menu` VALUES ('127', 'Customer', '85', '/dashboard/crm-customer', '2', null);
INSERT INTO `menu` VALUES ('128', 'Salesmen', '85', '/dashboard/crm-salesmen', '3', null);
INSERT INTO `menu` VALUES ('129', 'Seles Promotion', '85', '/dashboard/crm-salespromo', '4', null);
INSERT INTO `menu` VALUES ('130', 'Marketing', '22', '/dashboard/esm-marketing', '5', null);
INSERT INTO `menu` VALUES ('131', 'Master Data', '114', '/dashboard/master-barang', '0', '\'inbox\';');
INSERT INTO `menu` VALUES ('134', 'General Afair', '68', '/dashboard/hrm-ga', '5', null);
INSERT INTO `menu` VALUES ('135', 'Admin Web CRM', '87', '/dashboard/adminweb-crm', '2', null);
INSERT INTO `menu` VALUES ('136', 'Admin Web Krema', '87', '/dashboard/adminweb-krema', '3', null);
INSERT INTO `menu` VALUES ('137', 'Admin Web Vinding', '87', '/dashboard/adminweb-vinding', '4', null);
INSERT INTO `menu` VALUES ('138', 'Product', '22', '/dashboard/esm-product', '0', null);
INSERT INTO `menu` VALUES ('139', 'Product', '21', '/dashboard/sss-product', '0', null);
INSERT INTO `menu` VALUES ('140', 'Product', '23', '/dashboard/alg-product', '0', null);
INSERT INTO `menu` VALUES ('141', 'Product', '24', '/dashboard/gsn-product', '0', null);
