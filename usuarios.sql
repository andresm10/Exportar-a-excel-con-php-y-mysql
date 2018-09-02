/*
Navicat MySQL Data Transfer

Source Server         : LOCALHOST
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : usuarios

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-09-01 20:13:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `codigo` int(5) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('34', 'Andres', 'Rodriguez', '4003790', 'Cali');
INSERT INTO `usuarios` VALUES ('35', 'Juan', 'Perez', '1234567', 'Popayan');
INSERT INTO `usuarios` VALUES ('36', 'Eddie', 'Vedder', '19921023', 'Seattle');
INSERT INTO `usuarios` VALUES ('37', 'Luis', 'Cardona', '54654654', 'Medellin');
