/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : metgalmobileapp

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-04-27 17:31:32
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `vf_roles`
-- ----------------------------
DROP TABLE IF EXISTS `vf_roles`;
CREATE TABLE `vf_roles` (
  `role_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of vf_roles
-- ----------------------------
INSERT INTO `vf_roles` VALUES ('1', 'superadmin', '0000-00-00 00:00:00', null);
INSERT INTO `vf_roles` VALUES ('2', 'admin', '0000-00-00 00:00:00', null);
INSERT INTO `vf_roles` VALUES ('3', 'asesor', '0000-00-00 00:00:00', '2017-10-29 08:52:29');
INSERT INTO `vf_roles` VALUES ('4', 'user', '0000-00-00 00:00:00', '2017-10-29 08:52:26');

-- ----------------------------
-- Table structure for `vf_users`
-- ----------------------------
DROP TABLE IF EXISTS `vf_users`;
CREATE TABLE `vf_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_fullname` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_password` text NOT NULL,
  `role_id` int(2) unsigned NOT NULL DEFAULT '0',
  `group_id` int(2) unsigned NOT NULL DEFAULT '0',
  `token` text,
  `is_activated` enum('no','yes') NOT NULL DEFAULT 'no',
  `activation_code` text,
  `forgot_password_code` text,
  `last_login` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`) USING BTREE,
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of vf_users
-- ----------------------------
INSERT INTO `vf_users` VALUES ('1', 'VERA FIRMANSYAH', 'a@a.com', '$2y$10$i4Ddty5fcvjYmbpFPrEGGu2LFOZN5SrM9AUbcOaTknZU69HwVKxL2', '1', '1', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoiMSIsInJvbGVfaWQiOiIxIiwiZ3JvdXBfaWQiOiIxIiwidXNlcl9lbWFpbCI6ImFAYS5jb20iLCJ1c2VyX2Z1bGxuYW1lIjoiVkVSQSBGSVJNQU5TWUFIIiwicmVtZW1iZXIiOiJubyIsImlhdCI6MTUwOTg4NTIyNiwiZXhwIjoxNTA5OTcxNjI2fQ.ZsLFItDiCMSSg63v0BMaaLEjyamaj1YnguUYPrgeaWM', 'yes', '6d639b6873db49370a93e1bc53105ca7', null, '2017-11-05 19:33:46', '2017-08-19 16:58:54', '2017-11-05 19:33:46');
INSERT INTO `vf_users` VALUES ('2', 'UML C', 'uml.c@gmail.com', '$2y$10$pVpxWtc6abFGaH7zHAvJVeyCbpP6uld0tkBm9GEcn7itcvvDYnTgi', '4', '3', '', 'yes', '085545126953ab2c0bd82ac5fc3c16ed', null, '2017-11-02 20:13:51', '2017-08-25 22:08:38', '2017-11-02 20:13:51');
INSERT INTO `vf_users` VALUES ('3', 'UML D', 'uml.d@gmail.com', '$2y$10$lve3HldsLmop7p8k95T9DO.8KwQkJzj.3f.sZnHDGWy8IAChWoy2K', '4', '3', '', 'yes', '82064b5114266afa35ad8f3707828f75', null, '2017-11-02 20:14:00', '2017-08-25 22:10:57', '2017-11-02 20:14:00');
INSERT INTO `vf_users` VALUES ('15', 'ADMIN UML', 'admin.uml@gmail.com', '$2y$10$O2/enwkB6SuUiyQJKQsrU.XF66zlehMyeykhnDC7qwuwl39cWxeJ6', '2', '3', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoiMTUiLCJyb2xlX2lkIjoiMiIsImdyb3VwX2lkIjoiMyIsInVzZXJfZW1haWwiOiJ6QHouY29tIiwidXNlcl9mdWxsbmFtZSI6IkFETUlOIFVNTCIsInJlbWVtYmVyIjoibm8iLCJpYXQiOjE1MDg0ODIzNDEsImV4cCI6MTUwODU2ODc0MX0.5nvvZXOGZbyA-B9ezJdgNWXYzufZXiaKJlKMmaLJ3nA', 'yes', null, null, '2017-11-02 20:14:26', '2017-09-10 10:22:44', '2017-11-02 20:14:26');
INSERT INTO `vf_users` VALUES ('16', 'UML B', 'uml.b@gmail.com', '$2y$10$5Dakj3KTkF4.P6SPWndgNOCEk8DsJPAWdKnDRCXUI.kJVz7T1uzJu', '4', '3', '', 'yes', null, null, '2017-11-02 20:13:22', '2017-10-03 10:24:02', '2017-11-02 20:13:22');
INSERT INTO `vf_users` VALUES ('17', 'ASESOR UML', 'asesor.uml@gmail.com', '$2y$10$3Fk36FiTBOBZe0oNz60qA.eAtd9QRG1J8pNZXD9prQZvQuWQ8Rjrm', '3', '3', null, 'yes', null, null, '2017-11-02 20:14:41', '2017-10-29 08:48:17', '2017-11-02 20:14:41');
