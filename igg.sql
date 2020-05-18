/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : igg

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-05-18 11:27:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `product`
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `productid` int(50) NOT NULL AUTO_INCREMENT,
  `checkproduct` int(50) NOT NULL,
  `stock_PepsiMax` int(50) NOT NULL,
  `stock_PepsiDiet` int(50) NOT NULL,
  `stock_Coke` int(50) NOT NULL,
  `stock_CokeVanillaS` int(50) NOT NULL,
  `stock_CokeVenillaL` int(50) NOT NULL,
  `stock_MountainDew` int(50) NOT NULL,
  PRIMARY KEY (`productid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('1', '0', '0', '1', '0', '1', '0', '0');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `userid` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(225) DEFAULT NULL,
  `status` int(50) NOT NULL,
  `wallettotal` int(50) NOT NULL,
  `checkproduct` int(50) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
