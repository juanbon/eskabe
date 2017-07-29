/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50532
Source Host           : localhost:3306
Source Database       : eskabe

Target Server Type    : MYSQL
Target Server Version : 50532
File Encoding         : 65001

Date: 2017-06-30 15:19:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for productos
-- ----------------------------
DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
`id`  int(11) NOT NULL AUTO_INCREMENT ,
`id_cat`  int(11) NULL DEFAULT NULL ,
`id_subcat`  int(11) NULL DEFAULT NULL ,
`id_subcat3`  int(11) NULL DEFAULT NULL ,
`nombre`  text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL ,
`calorias`  text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL ,
`imagen1`  text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL ,
`modelo`  text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL ,
`modelo2`  text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL ,
`url`  text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL ,
`stock`  text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL ,
PRIMARY KEY (`id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci
AUTO_INCREMENT=65

;

-- ----------------------------
-- Records of productos
-- ----------------------------
BEGIN;
INSERT INTO `productos` VALUES ('1', '1', '1', '1', null, null, 'images/productos/ffttb2.jpg', '2000 Kcal/h', 'FT TB 2 GF ', null, '1'), ('2', '1', '1', '1', null, null, 'images/productos/ffttb3.jpg', '3000 Kcal/h', 'FT TB/TBU 3 GF ', null, '1'), ('3', null, null, null, null, null, null, null, null, null, '0'), ('4', '1', '1', '2', null, null, 'images/productos/m3tbs2.jpg', '2000 Kcal/h', 'M3 TB 2 GF ', null, '1'), ('5', '1', '1', '2', null, null, 'images/productos/m3tbs3.jpg', '3000 Kcal/h', 'M3 TB/TBU 3 GF ', null, '0'), ('6', null, null, null, null, null, null, null, null, null, '1'), ('7', '1', '1', '3', null, null, 'images/productos/sxitbs2.jpg', '2000 Kcal/h', 'S21 TB 2 ', null, '0'), ('8', '1', '1', '3', null, null, 'images/productos/sxitbs3.jpg', '3000 Kcal/h', 'S21 TB/TBU 3 ', null, '1'), ('9', null, null, null, null, null, null, null, null, null, '0'), ('10', '1', '1', '4', null, null, 'images/productos/m3tbc2.jpg', '2000 Kcal/h', 'M3 TB 2 GF TE ', null, '1'), ('11', '1', '1', '4', null, null, 'images/productos/m3tbc3.jpg', '3000 Kcal/h', 'M3 TB/TBU 3 GF TE ', null, '0'), ('13', '1', '1', '5', null, null, 'images/productos/sxitbc2m.jpg', '2000 Kcal/h', 'S21 TB 2 TE ', null, '11'), ('14', '1', '1', '5', null, null, null, '3000 Kcal/h', 'S21 TB/TBU 3 TE', null, '1'), ('16', '1', '1', '6', null, null, 'images/productos/tttb2.jpg', '2000 Kcal/h', 'TT TB 2 CV TE ', null, '0'), ('17', '1', '1', '6', null, null, 'images/productos/tttb3.jpg', '3000 Kcal/h', 'TT TB/TBU 3 CV TE', null, '1'), ('21', '1', '3', '8', null, null, 'images/productos/fftmini5.jpg', '3000 Kcal/h', 'FT MX 3 GF ', null, '1'), ('23', '1', '3', '9', null, null, 'images/productos/m3minis5.jpg', '3000 Kcal/h', 'M3 MX 3 GF ', null, '1'), ('26', '1', '3', '10', null, null, 'images/productos/sximinis8.jpg', '3000 Kcal/h', 'S21 MX 3 ', null, '0'), ('28', '1', '3', '12', null, null, 'images/productos/m3minic3.jpg', '3000 Kcal/h', 'M3 MX 3 GF TE ', null, '0'), ('30', '1', '3', '13', null, null, 'images/productos/sximinic3m.jpg', '3000 Kcal/h', 'S21 MX 3 TE ', null, '0'), ('63', '1', '3', '14', null, null, 'images/productos/ttminic3.jpg', '3000 Kcal/h', 'TT MX 3 CV TE ', null, '1');
COMMIT;

-- ----------------------------
-- Auto increment value for productos
-- ----------------------------
ALTER TABLE `productos` AUTO_INCREMENT=65;
