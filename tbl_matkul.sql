# Host: localhost  (Version 5.5.5-10.4.24-MariaDB)
# Date: 2022-11-06 20:47:53
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "tbl_matkul"
#

DROP TABLE IF EXISTS `tbl_matkul`;
CREATE TABLE `tbl_matkul` (
  `kd_matkul` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `sks` int(11) DEFAULT NULL,
  PRIMARY KEY (`kd_matkul`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "tbl_matkul"
#

INSERT INTO `tbl_matkul` VALUES (123,'Pemrograman',3),(456,'Perdukunan',6);
