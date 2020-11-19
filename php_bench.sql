-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.11-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for php_bench
CREATE DATABASE IF NOT EXISTS `php_bench` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `php_bench`;

-- Dumping structure for table php_bench.data
CREATE TABLE IF NOT EXISTS `data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `host` varchar(124) DEFAULT NULL,
  `address` varchar(124) DEFAULT NULL,
  `version` varchar(24) DEFAULT NULL,
  `total` decimal(10,4) DEFAULT NULL,
  `for` decimal(10,4) DEFAULT NULL,
  `while` decimal(10,4) DEFAULT NULL,
  `if_else` decimal(10,4) DEFAULT NULL,
  `switch` decimal(10,4) DEFAULT NULL,
  `ternary` decimal(10,4) DEFAULT NULL,
  `str_replace` decimal(10,4) DEFAULT NULL,
  `preg_replace` decimal(10,4) DEFAULT NULL,
  `preg_match` decimal(10,4) DEFAULT NULL,
  `count` decimal(10,4) DEFAULT NULL,
  `isset` decimal(10,4) DEFAULT NULL,
  `time` decimal(10,4) DEFAULT NULL,
  `strlen` decimal(10,4) DEFAULT NULL,
  `sprintf` decimal(10,4) DEFAULT NULL,
  `strcmp` decimal(10,4) DEFAULT NULL,
  `trim` decimal(10,4) DEFAULT NULL,
  `explode` decimal(10,4) DEFAULT NULL,
  `implode` decimal(10,4) DEFAULT NULL,
  `num_format` decimal(10,4) DEFAULT NULL,
  `floor` decimal(10,4) DEFAULT NULL,
  `strpos` decimal(10,4) DEFAULT NULL,
  `substr` decimal(10,4) DEFAULT NULL,
  `intval` decimal(10,4) DEFAULT NULL,
  `int` decimal(10,4) DEFAULT NULL,
  `is_array` decimal(10,4) DEFAULT NULL,
  `is_numeric` decimal(10,4) DEFAULT NULL,
  `is_int` decimal(10,4) DEFAULT NULL,
  `is_string` decimal(10,4) DEFAULT NULL,
  `ip2long` decimal(10,4) DEFAULT NULL,
  `long2ip` decimal(10,4) DEFAULT NULL,
  `date` decimal(10,4) DEFAULT NULL,
  `strftime` decimal(10,4) DEFAULT NULL,
  `strtotime` decimal(10,4) DEFAULT NULL,
  `strtolower` decimal(10,4) DEFAULT NULL,
  `strtoupper` decimal(10,4) DEFAULT NULL,
  `md5` decimal(10,4) DEFAULT NULL,
  `unset` decimal(10,4) DEFAULT NULL,
  `list` decimal(10,4) DEFAULT NULL,
  `urlencode` decimal(10,4) DEFAULT NULL,
  `urldecode` decimal(10,4) DEFAULT NULL,
  `addslashes` decimal(10,4) DEFAULT NULL,
  `stripslashes` decimal(10,4) DEFAULT NULL,
  `inserted` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
