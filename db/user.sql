/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : ubudsatu

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2016-01-28 10:00:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `access_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `EMP_ID` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'LG.2015.000000',
  `avatar` text COLLATE utf8_unicode_ci,
  `avatarImage` text COLLATE utf8_unicode_ci,
  `POSITION_SITE` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'ERP',
  `POSITION_LOGIN` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', 'azLSTAYr7Y7TLsEAML-LsVq9cAXLyAWa', '$2y$13$h/0uc7IVHGsALByr.tWfhu4JNo8s5YUXBgficZrKEEYTYoUsV9k7q', null, 'admin@lukison.com', '10', '1431765676', '1431765676', '12345', 'LG.2015.000000', ' Yii::getAlias(\"@vendor/sintret/yii2-chat-adminlte/assets/img/avatar.png\");', ' Yii::getAlias(\"@vendor/sintret/yii2-chat-adminlte/assets/img/avatar.png\");', 'ERP', '0');
INSERT INTO `user` VALUES ('2', 'piter@lukison.com', 'Uv-9xj_BA3sFvZbDOTRE19P_6Ki-0Fw9', '$2y$13$kRdcgW6LOzKy/csuVfyiB.LsX4P8gG0fFVP9nz0oraOtzgm0w0b7q', null, 'piter@lukison.com', '10', '1431766262', '1431766262', '', 'LG.2016.000004', null, null, 'ERP', '0');
INSERT INTO `user` VALUES ('3', 'sisca@foodtown.co.id', '5tj3p0tIpVEOVDEAsVzzsHCv29g_GFhU', '$2y$13$h/0uc7IVHGsALByr.tWfhu4JNo8s5YUXBgficZrKEEYTYoUsV9k7q', null, 'sisca@foodtown.co.id', '10', '1431963597', '1431963597', '', 'LG.2016.000005', null, null, 'ERP', '0');
INSERT INTO `user` VALUES ('4', 'indri@lukison.com', 'StuP2REB-C2oEFeI1N7jn02AvEPLblHT', '$2y$13$h/0uc7IVHGsALByr.tWfhu4JNo8s5YUXBgficZrKEEYTYoUsV9k7q', null, 'indri@lukison.com', '10', '1436148436', '1436148436', '', 'LG.2016.000007', null, null, 'ERP', '0');
INSERT INTO `user` VALUES ('5', 'erick', 'eqWK_rqsVO6SH46DmcXbT0DiwEot-IDh', '$2y$13$h/0uc7IVHGsALByr.tWfhu4JNo8s5YUXBgficZrKEEYTYoUsV9k7q', null, 'erick@lukison.com', '1', '1436150688', '1436150688', '', 'LG.2015.000000', null, null, 'ERP', '0');
INSERT INTO `user` VALUES ('6', 'eka', 'lQcdgJTMiHnAhUb-jDPfUREJ9Q4dLDug', '$2y$13$h/0uc7IVHGsALByr.tWfhu4JNo8s5YUXBgficZrKEEYTYoUsV9k7q', null, 'eka@lukison.com', '1', '1436174435', '1436174435', '', 'LG.2015.000000', null, null, 'ERP', '0');
INSERT INTO `user` VALUES ('15', 'api_admin', 'OdC_LJZmOdCQVNTjT1X_2HzpQ5qn47Se', '$2y$13$h/0uc7IVHGsALByr.tWfhu4JNo8s5YUXBgficZrKEEYTYoUsV9k7q', null, 'ptr.nov@gmail.com', '10', '1438663293', '1438663293', '', 'LG.2015.000000', null, null, 'ERP', '0');
INSERT INTO `user` VALUES ('22', 'dahlia@lukison.com', 'rLa3bHmNxMXPHZZPdZRCZ6Q6y3Z7xQjc', '$2y$13$Oy6LufS0tkecjdGmj1wCpejewKvymKhia7k62XuVtS4viwrUxnKJC', null, 'adel@foodtown.co.id', '10', '1443508657', '1443508657', '', 'LG.2016.000006', null, null, 'ERP', '0');
INSERT INTO `user` VALUES ('23', 'stephen@lukison.com', 'Uv-9xj_BA3sFvZbDOTRE19P_6Ki-0Fw9', '$2y$13$2nICCD2WMplFtssGBGsqm.i1NP.axNessKANsXlMHP8sL2fy85gQi', null, 'stephen@lukison.com', '10', '1443704681', '1443704681', '', 'LG.2016.000001', null, null, 'ERP', '0');
INSERT INTO `user` VALUES ('24', 'budi.setia@lukison.com', '6D64lVDxO4bhmQamm4VrEYFMXCFVcBKO', '$2y$13$h/0uc7IVHGsALByr.tWfhu4JNo8s5YUXBgficZrKEEYTYoUsV9k7q', null, 'budi.setia@lukison.com', '10', '1444618023', '1444618023', '', 'LG.2016.000009', null, null, 'ERP', '0');
INSERT INTO `user` VALUES ('25', 'melissa.waluyan@lukison.com', 'cv4hM6KtpJXiR-_nfs4qMUNqwdMKr44J', '$2y$13$h/0uc7IVHGsALByr.tWfhu4JNo8s5YUXBgficZrKEEYTYoUsV9k7q', null, 'melissa.waluyan@lukison.com', '10', '1445574115', '1445574115', '', 'LG.2016.000010', null, null, 'ERP', '0');
INSERT INTO `user` VALUES ('26', 'alam@lukison.com', '45YwKCzkIZrBHW3YvZwSd47hAj7tv-b6', '$2y$13$pcFcIw89B1rmtT3jWFYDTO/yfQRr9VT35IAz6YHVs.m5x4DlJ6cmW', null, 'alam@lukison.com', '10', '1445590050', '1445590050', '', 'LG.2016.000003', null, null, 'ERP', '0');
INSERT INTO `user` VALUES ('27', 'aditiya@lukison.com', 'JPEn3M4czA2yOp823drkm3vmalRrNOom', '$2y$13$h/0uc7IVHGsALByr.tWfhu4JNo8s5YUXBgficZrKEEYTYoUsV9k7q', null, 'wawan@lukison.com', '10', '1446172402', '1446172402', '', 'LG.2016.000012', null, null, 'ERP', '0');
INSERT INTO `user` VALUES ('28', 'ridwan@lukison.com', '1WeTm5Vuw46hL9o-dfxh12Cyk6HM_eIC', '$2y$13$ISQIWIy9xZNSTaYz22aXZe98xvA93IB7NDkR0fDx.FvFUXVUKf71i', null, 'ridwan@lukison.com', '10', '1446455923', '1446455923', '', 'LG.2016.000011', null, null, 'ERP', '0');
INSERT INTO `user` VALUES ('29', 'renita@foodtown.co.id', 'nXT_B-2f_cRq4mn5mbhYqCkBR1OeMUBg', '$2y$13$h/0uc7IVHGsALByr.tWfhu4JNo8s5YUXBgficZrKEEYTYoUsV9k7q', null, 'renita@foodtown.co.id', '10', '1446456793', '1446456793', '', 'SSS.2016.000002', null, null, 'ERP', '0');
INSERT INTO `user` VALUES ('30', 'salesman', 'Uv-9xj_BA3sFvZbDOTRE19P_6Ki-0Fw9', '$2y$13$h/0uc7IVHGsALByr.tWfhu4JNo8s5YUXBgficZrKEEYTYoUsV9k7q', null, 'salesman@lukison.com', '10', '1446456793', '1446456793', '', 'LG.2015.000000', null, null, 'CRM', '1');
INSERT INTO `user` VALUES ('31', 'spg', 'Uv-9xj_BA3sFvZbDOTRE19P_6Ki-0Fw9', '$2y$13$h/0uc7IVHGsALByr.tWfhu4JNo8s5YUXBgficZrKEEYTYoUsV9k7q', null, 'spg@lukison.com', '10', '1446456793', '1446456793', '', 'LG.2015.000000', null, null, 'CRM', '2');
INSERT INTO `user` VALUES ('32', 'ailey@lukison.com', '0hsP_2AY3o5Qq7xKB3RBxrAw35daaF0w', '$2y$13$h/0uc7IVHGsALByr.tWfhu4JNo8s5YUXBgficZrKEEYTYoUsV9k7q', null, 'ailey@lukison.com', '10', '1447864783', '1447864783', '', 'LG.2016.000002', null, null, 'ERP', '0');
INSERT INTO `user` VALUES ('34', 'radumta', 'rMD-SjBoRbjOEBVI29HDIF-70ItwrnF1', '$2y$13$RfiSni3suJY4wc.TpiV6/uENEhEgumSxcns.XdD0paAgJfxuBcdYu', null, 'radumta@lukison.com', '10', '1452156919', '1452156919', '', 'LG.2016.000014', null, null, 'ERP', '0');
INSERT INTO `user` VALUES ('35', 'tano@foodtown.co.id', 'Uv-9xj_BA3sFvZbDOTRE19P_6Ki-0Fw9', '$2y$13$zb/tzE5h1TBdLmugf35EIemcbU8WA1qDa/x.ggqTj/sRtMm/M93.e', null, 'tano@foodtown.co.id', '10', '1447864783', '1447864783', '', 'SSS.2016.000003', null, null, 'ERP', '0');
