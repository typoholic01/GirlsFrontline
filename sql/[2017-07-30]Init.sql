-- --------------------------------------------------------
-- 호스트:                          localhost
-- 서버 버전:                        5.6.36 - MySQL Community Server (GPL)
-- 서버 OS:                        Win32
-- HeidiSQL 버전:                  9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- supplydefots 데이터베이스 구조 내보내기
CREATE DATABASE IF NOT EXISTS `typoholic` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `typoholic`;

-- 테이블 supplydefots.itemcodes 구조 내보내기
CREATE TABLE IF NOT EXISTS `itemcodes` (
  `ItemCode` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `QuickRepair` int(10) unsigned NOT NULL,
  `QuickMarionette` int(10) unsigned NOT NULL,
  `Marionette` int(10) unsigned NOT NULL,
  `Arms` int(10) unsigned NOT NULL,
  `Coin` int(10) unsigned NOT NULL,
  PRIMARY KEY (`ItemCode`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 테이블 데이터 supplydefots.itemcodes:~32 rows (대략적) 내보내기
DELETE FROM `itemcodes`;
/*!40000 ALTER TABLE `itemcodes` DISABLE KEYS */;
INSERT INTO `itemcodes` (`ItemCode`, `QuickRepair`, `QuickMarionette`, `Marionette`, `Arms`, `Coin`) VALUES
	(1, 0, 0, 0, 0, 0),
	(2, 0, 0, 0, 0, 1),
	(3, 0, 0, 0, 1, 0),
	(4, 0, 0, 0, 1, 1),
	(5, 0, 0, 1, 0, 0),
	(6, 0, 0, 1, 0, 1),
	(7, 0, 0, 1, 1, 0),
	(8, 0, 0, 1, 1, 1),
	(9, 0, 1, 0, 0, 0),
	(10, 0, 1, 0, 0, 1),
	(11, 0, 1, 0, 1, 0),
	(12, 0, 1, 0, 1, 1),
	(13, 0, 1, 1, 0, 0),
	(14, 0, 1, 1, 0, 1),
	(15, 0, 1, 1, 1, 0),
	(16, 0, 1, 1, 1, 1),
	(17, 1, 0, 0, 0, 0),
	(18, 1, 0, 0, 0, 1),
	(19, 1, 0, 0, 1, 0),
	(20, 1, 0, 0, 1, 1),
	(21, 1, 0, 1, 0, 0),
	(22, 1, 0, 1, 0, 1),
	(23, 1, 0, 1, 1, 0),
	(24, 1, 0, 1, 1, 1),
	(25, 1, 1, 0, 0, 0),
	(26, 1, 1, 0, 0, 1),
	(27, 1, 1, 0, 1, 0),
	(28, 1, 1, 0, 1, 1),
	(29, 1, 1, 1, 0, 0),
	(30, 1, 1, 1, 0, 1),
	(31, 1, 1, 1, 1, 0),
	(32, 1, 1, 1, 1, 1);
/*!40000 ALTER TABLE `itemcodes` ENABLE KEYS */;

-- 테이블 supplydefots.supplydefots 구조 내보내기
CREATE TABLE IF NOT EXISTS `supplydefots` (
  `No` int(10) unsigned NOT NULL,
  `SubNo` int(10) unsigned NOT NULL,
  `LeaderLV` int(10) unsigned NOT NULL,
  `MinMemNum` int(10) unsigned NOT NULL,
  `WatingTime` int(10) unsigned NOT NULL,
  `Human` int(10) unsigned NOT NULL,
  `Bullet` int(10) unsigned NOT NULL,
  `Food` int(10) unsigned NOT NULL,
  `Part` int(10) unsigned NOT NULL,
  `ItemCode` int(10) unsigned NOT NULL,
  PRIMARY KEY (`No`,`SubNo`),
  KEY `ItemCode` (`ItemCode`),
  CONSTRAINT `supplydefots_ibfk_1` FOREIGN KEY (`ItemCode`) REFERENCES `itemcodes` (`ItemCode`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 테이블 데이터 supplydefots.supplydefots:~32 rows (대략적) 내보내기
DELETE FROM `supplydefots`;
/*!40000 ALTER TABLE `supplydefots` DISABLE KEYS */;
INSERT INTO `supplydefots` (`No`, `SubNo`, `LeaderLV`, `MinMemNum`, `WatingTime`, `Human`, `Bullet`, `Food`, `Part`, `ItemCode`) VALUES
	(0, 1, 40, 4, 50, 0, 145, 145, 0, 25),
	(0, 2, 45, 5, 180, 550, 0, 0, 350, 5),
	(0, 3, 45, 5, 720, 900, 900, 900, 250, 19),
	(0, 4, 50, 5, 1440, 0, 1200, 800, 750, 2),
	(1, 1, 1, 2, 15, 10, 30, 15, 0, 1),
	(1, 2, 3, 2, 30, 0, 40, 60, 0, 1),
	(1, 3, 5, 3, 60, 30, 0, 30, 10, 17),
	(1, 4, 6, 5, 120, 160, 160, 0, 0, 5),
	(2, 1, 5, 3, 40, 100, 0, 0, 30, 1),
	(2, 2, 8, 4, 90, 60, 200, 80, 0, 17),
	(2, 3, 10, 5, 240, 10, 10, 10, 230, 25),
	(2, 4, 15, 5, 360, 0, 250, 600, 60, 5),
	(3, 1, 12, 4, 20, 50, 0, 75, 0, 1),
	(3, 2, 20, 5, 45, 0, 120, 70, 30, 1),
	(3, 3, 15, 5, 90, 0, 300, 0, 0, 25),
	(3, 4, 25, 5, 300, 0, 0, 300, 300, 7),
	(4, 1, 30, 4, 60, 0, 185, 185, 0, 3),
	(4, 2, 35, 5, 120, 0, 0, 0, 210, 9),
	(4, 3, 40, 5, 360, 800, 550, 0, 0, 21),
	(4, 4, 40, 5, 480, 400, 400, 400, 150, 9),
	(5, 1, 30, 4, 30, 0, 0, 100, 45, 1),
	(5, 2, 35, 5, 150, 0, 600, 300, 0, 17),
	(5, 3, 40, 5, 240, 800, 400, 400, 0, 3),
	(5, 4, 40, 5, 420, 100, 0, 0, 700, 5),
	(6, 1, 40, 5, 120, 300, 300, 0, 100, 1),
	(6, 2, 45, 5, 180, 0, 200, 550, 100, 25),
	(6, 3, 45, 5, 300, 0, 0, 200, 500, 3),
	(6, 4, 50, 5, 720, 800, 800, 800, 0, 2),
	(7, 1, 40, 5, 150, 650, 0, 650, 0, 1),
	(7, 2, 45, 5, 240, 0, 650, 0, 300, 21),
	(7, 3, 50, 5, 330, 900, 600, 600, 0, 3),
	(7, 4, 50, 5, 480, 250, 250, 250, 600, 9);
/*!40000 ALTER TABLE `supplydefots` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
