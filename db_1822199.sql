-- --------------------------------------------------------
-- Host:                         dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com
-- Server version:               5.7.22-log - Source distribution
-- Server OS:                    Linux
-- HeidiSQL Version:             9.0.0.4865
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for db_1822199
CREATE DATABASE IF NOT EXISTS `db_1822199` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_1822199`;


-- Dumping structure for table db_1822199.tbl_user
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `upassword` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_1822199.tbl_user: ~2 rows (approximately)
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` (`uid`, `username`, `upassword`, `created_at`) VALUES
	(1, 'admin', 'root123', '2020-02-17 17:17:37'),
	(2, 'zygarde1023', '$2y$10$thbf7w72OMuLGG9X87Khu.Gwu7DJCNT8zW7ph7PMoeXapYOZDVGMG', '2020-02-17 17:21:01');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
