-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;

/*!40101 SET NAMES utf8 */
;

/*!50503 SET NAMES utf8mb4 */
;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */
;

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */
;

-- Dumping database structure for test-db
CREATE DATABASE IF NOT EXISTS `test-db`
/*!40100 DEFAULT CHARACTER SET utf8mb4 */
;

USE `test-db`;

-- Dumping structure for table test-db.courses
CREATE TABLE IF NOT EXISTS `courses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE = InnoDB AUTO_INCREMENT = 7 DEFAULT CHARSET = utf8mb4;

-- Dumping data for table test-db.courses: ~6 rows (approximately)
/*!40000 ALTER TABLE `courses` DISABLE KEYS */
;

REPLACE INTO `courses` (`id`, `title`, `category`, `description`)
VALUES
  (
    1,
    'Calculus',
    'Math',
    'Calculus is the mathematical study of change, in the same way that geometry is the study of shape and algebra is the study of operations and their application to solving equations.'
  ),
  (
    2,
    'Accounting',
    'Economy',
    'Accounting is the process of recording financial transactions pertaining to a business. The accounting process includes summarizing, analyzing, and reporting these transactions to oversight agencies, regulators, and tax collection entities.'
  ),
  (
    3,
    'Japanese',
    'Linguistic',
    'Japanese is an East Asian language spoken natively by about 128 million people, primarily by Japanese people and primarily in Japan, the only country where it is the national language.'
  ),
  (
    4,
    'Data Mining',
    'Tech',
    'Data mining is the process of extracting and discovering patterns in large data sets involving methods at the intersection of machine learning, statistics, and database systems.'
  ),
  (
    5,
    'Cloud Computing',
    'Tech',
    'Cloud computing is the delivery of different services through the Internet. These resources include tools and applications like data storage, servers, databases, networking, and software.'
  ),
  (
    6,
    'Blockchain',
    'Tech',
    'A blockchain is a distributed database that is shared among the nodes of a computer network. As a database, a blockchain stores information electronically in digital format.'
  );

/*!40000 ALTER TABLE `courses` ENABLE KEYS */
;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */
;

/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */
;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;