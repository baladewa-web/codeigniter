-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.25-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_web
CREATE DATABASE IF NOT EXISTS `db_web` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `db_web`;

-- Dumping structure for table db_web.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_web.user: ~1 rows (approximately)
DELETE FROM `user`;
INSERT INTO `user` (`id`, `name`, `username`, `password`) VALUES
	(1, 'maikel', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- Dumping structure for table db_web.usulan
CREATE TABLE IF NOT EXISTS `usulan` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `rt` varchar(25) NOT NULL,
  `rw` varchar(25) NOT NULL,
  `jumlah` int(25) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `pagu` int(25) NOT NULL,
  `realisasi` int(25) NOT NULL,
  `tahun` year(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_web.usulan: ~11 rows (approximately)
DELETE FROM `usulan`;
INSERT INTO `usulan` (`id`, `nama`, `rt`, `rw`, `jumlah`, `satuan`, `pagu`, `realisasi`, `tahun`) VALUES
	(2, 'asdfaweef', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
	(5, 'asdfsa', '4', '3', 4, 'asdfasd', 241234, 12343, '2023'),
	(6, 'dfgserg', '5', '6', 1, 'paket', 8600000, 7700000, '2021'),
	(7, 'ftyrth', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
	(8, 'ertherty', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
	(9, 'ertyerty', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
	(10, 'ertybtr', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
	(11, 'ertertg', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
	(12, 'ertgefg', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
	(13, 'ertgdfgdyr', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
	(14, 'rtgddfdghdrft', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
  (15, 'asdfaweef', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
	(16, 'asdfsa', '4', '3', 4, 'asdfasd', 241234, 12343, '2023'),
	(17, 'dfgserg', '5', '6', 1, 'paket', 8600000, 7700000, '2021'),
	(18, 'ftyrth', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
	(19, 'ertherty', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
	(20, 'ertyerty', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
	(21, 'ertybtr', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
	(22, 'ertertg', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
	(23, 'ertgefg', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
	(24, 'ertgdfgdyr', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
	(25, 'rtgddfdghdrft', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
  (26, 'asdfaweef', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
	(27, 'asdfsa', '4', '3', 4, 'asdfasd', 241234, 12343, '2023'),
	(28, 'dfgserg', '5', '6', 1, 'paket', 8600000, 7700000, '2021'),
	(29, 'ftyrth', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
	(30, 'ertherty', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
	(31, 'ertyerty', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
	(32, 'ertybtr', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
	(33, 'ertertg', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
	(34, 'ertgefg', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
	(35, 'ertgdfgdyr', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
	(36, 'rtgddfdghdrft', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
  (37, 'asdfaweef', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
	(38, 'asdfsa', '4', '3', 4, 'asdfasd', 241234, 12343, '2023'),
	(39, 'dfgserg', '5', '6', 1, 'paket', 8600000, 7700000, '2021'),
	(40, 'ftyrth', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
	(41, 'ertherty', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
	(42, 'ertyerty', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
	(43, 'ertybtr', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
	(44, 'ertertg', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
	(45, 'ertgefg', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
	(46, 'ertgdfgdyr', '5', '6', 1, 'paket', 8000000, 7700000, '2021'),
	(47, 'rtgddfdghdrft', '5', '6', 1, 'paket', 8000000, 7700000, '2021');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
