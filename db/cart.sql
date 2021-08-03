/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100408
 Source Host           : localhost:3306
 Source Schema         : cart

 Target Server Type    : MySQL
 Target Server Version : 100408
 File Encoding         : 65001

 Date: 03/08/2021 11:14:38
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NULL DEFAULT NULL,
  `detail` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NULL DEFAULT NULL,
  `price` float(10, 2) NULL DEFAULT NULL,
  `img_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (1, '1984', 'GEORGE ORWELL<br>EDEBİYAT', 10.50, '1984.jpg');
INSERT INTO `products` VALUES (2, 'Hayvan Çiftliği ', 'GEORGE ORWELL<br>EDEBİYAT', 9.90, 'hayvan_ciftligi.jpg');
INSERT INTO `products` VALUES (3, 'Kürk Mantolu Madonna', 'SABAHATTİN ALİ<br>EDEBİYAT', 8.00, 'kurk_mantolu_madonna.jpg');
INSERT INTO `products` VALUES (4, 'Şeker Portakalı', 'JOSE MAURO DE VASCONCELOS<br>EDEBİYAT', 15.00, 'seker_portakalı.jpg');
INSERT INTO `products` VALUES (5, 'Son Cüret', 'YILMAZ ÖZDİL<br>TARİH', 19.90, 'son_curet.jpg');
INSERT INTO `products` VALUES (6, 'Hata Neredeydi', 'BERNARD LEWIS<br>TARİH', 15.00, 'hata_neredeydi.jpg');
INSERT INTO `products` VALUES (7, 'Türklerin Tarihi', 'İLBER ORTAYLI<br>TARİH', 23.99, 'turklerin_tarihi.jpg');
INSERT INTO `products` VALUES (8, 'İnsanlığın Medeniyet Destanı', 'ROGER GRAUDY<br>TARİH', 22.00, 'insanlıgın_medeniyet_destanı.jpg');

-- ----------------------------
-- Table structure for user_products
-- ----------------------------
DROP TABLE IF EXISTS `user_products`;
CREATE TABLE `user_products`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NULL DEFAULT NULL,
  `product_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_products
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NULL DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NULL DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
