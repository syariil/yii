/*
 Navicat Premium Data Transfer

 Source Server         : LOCALHOST
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : sikal-project

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 29/03/2023 09:16:56
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration`  (
  `version` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `apply_time` int NULL DEFAULT NULL,
  PRIMARY KEY (`version`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', 1679592550);
INSERT INTO `migration` VALUES ('m130524_201442_init', 1679592555);
INSERT INTO `migration` VALUES ('m190124_110200_add_verification_token_column_to_user_table', 1679592555);

-- ----------------------------
-- Table structure for ref_agama
-- ----------------------------
DROP TABLE IF EXISTS `ref_agama`;
CREATE TABLE `ref_agama`  (
  `ID` int NOT NULL AUTO_INCREMENT,
  `AGAMA` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `CREATE_BY` int NULL DEFAULT NULL,
  `CREATE_DATE` datetime NULL DEFAULT NULL,
  `CREATE_IP` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `UPDATE_BY` int NULL DEFAULT NULL,
  `UPDATE_DATE` datetime NULL DEFAULT NULL,
  `UPDATE_IP` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_agama
-- ----------------------------
INSERT INTO `ref_agama` VALUES (2, 'kristen', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `ref_agama` VALUES (3, 'islam', NULL, NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for ref_country
-- ----------------------------
DROP TABLE IF EXISTS `ref_country`;
CREATE TABLE `ref_country`  (
  `ID_COUNTRY` int NOT NULL AUTO_INCREMENT,
  `COUNTRY` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `CREATE_BY` int NULL DEFAULT NULL,
  `CREATE_DATE` datetime NULL DEFAULT NULL,
  `CREATE_IP` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `UPDATE_BY` int NULL DEFAULT NULL,
  `UPDATE_DATE` datetime NULL DEFAULT NULL,
  `UPDATE_IP` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ID_COUNTRY`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_country
-- ----------------------------

-- ----------------------------
-- Table structure for ref_kelamin
-- ----------------------------
DROP TABLE IF EXISTS `ref_kelamin`;
CREATE TABLE `ref_kelamin`  (
  `ID_KELAMIN` int NOT NULL AUTO_INCREMENT,
  `JENIS_KELAMIN` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `CREATE_BY` int NULL DEFAULT NULL,
  `CREATE_DATE` datetime NULL DEFAULT NULL,
  `CREATE_IP` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `UPDATE_BY` int NULL DEFAULT NULL,
  `UPDATE_DATE` datetime NULL DEFAULT NULL,
  `UPDATE_IP` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`ID_KELAMIN`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ref_kelamin
-- ----------------------------
INSERT INTO `ref_kelamin` VALUES (1, 'perempuan', NULL, NULL, '', NULL, NULL, '');
INSERT INTO `ref_kelamin` VALUES (2, 'laki-laki', NULL, NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `auth_key` varchar(32) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` smallint NOT NULL DEFAULT 10,
  `created_at` int NOT NULL,
  `updated_at` int NOT NULL,
  `verification_token` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `username`(`username` ASC) USING BTREE,
  UNIQUE INDEX `email`(`email` ASC) USING BTREE,
  UNIQUE INDEX `password_reset_token`(`password_reset_token` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'anita', '0cZdypjEGK657X_VGq0-0RqpMju55GcP', '$2y$13$QeQkNUAsKxc1T3eX2j/Ht.8rTAS0WmSDsTcFyXTl6Cv.6r3soYtt2', NULL, 'anitaayusafitri412@gmail.com', 10, 1679592564, 1679592564, 'vDlLnGrliBQAHgO97dmTCQUGV6GIrGgb_1679592564');

SET FOREIGN_KEY_CHECKS = 1;
