-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               12.2.2-MariaDB - MariaDB Server
-- Server OS:                    Win64
-- HeidiSQL Version:             12.14.0.7165
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for vgcollection_db
CREATE DATABASE IF NOT EXISTS `vgcollection_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `vgcollection_db`;

-- Dumping structure for table vgcollection_db.developers
CREATE TABLE IF NOT EXISTS `developers` (
                                            `id` int(11) NOT NULL AUTO_INCREMENT,
                                            `name` varchar(50) NOT NULL DEFAULT '',
                                            PRIMARY KEY (`id`),
                                            KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table vgcollection_db.developers: ~4 rows (approximately)
INSERT INTO `developers` (`id`, `name`) VALUES
                                            (1, 'RealDev'),
                                            (2, 'Nintendo'),
                                            (3, 'Naughty Dog'),
                                            (4, 'Japan Studio');

-- Dumping structure for table vgcollection_db.publishers
CREATE TABLE IF NOT EXISTS `publishers` (
                                            `id` int(11) NOT NULL AUTO_INCREMENT,
                                            `name` varchar(50) NOT NULL DEFAULT '',
                                            PRIMARY KEY (`id`),
                                            KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table vgcollection_db.publishers: ~3 rows (approximately)
INSERT INTO `publishers` (`id`, `name`) VALUES
                                            (1, 'LegitPub'),
                                            (2, 'Nintendo'),
                                            (3, 'Sony Computer Entertainment');

-- Dumping structure for table vgcollection_db.users
CREATE TABLE IF NOT EXISTS `users` (
                                       `id` int(11) NOT NULL AUTO_INCREMENT,
                                       `username` char(50) NOT NULL,
                                       `password` varchar(255) DEFAULT NULL,
                                       PRIMARY KEY (`id`),
                                       KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table vgcollection_db.users: ~1 rows (approximately)
INSERT INTO `users` (`id`, `username`, `password`) VALUES
    (1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- Dumping structure for table vgcollection_db.videogames
CREATE TABLE IF NOT EXISTS `videogames` (
                                            `id` int(11) NOT NULL AUTO_INCREMENT,
                                            `name` varchar(50) NOT NULL DEFAULT '',
                                            `platform` varchar(50) DEFAULT '',
                                            `release_date` date DEFAULT NULL,
                                            `developer_id` int(11) DEFAULT NULL,
                                            `publisher_id` int(11) DEFAULT NULL,
                                            PRIMARY KEY (`id`),
                                            KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table vgcollection_db.videogames: ~11 rows (approximately)
INSERT INTO `videogames` (`id`, `name`, `platform`, `release_date`, `developer_id`, `publisher_id`) VALUES
                                                                                                        (1, 'Super Mario 64', 'N64', '1997-03-01', 2, 2),
                                                                                                        (2, 'Testing Game 2', 'XBOX ONE', '2022-06-14', 1, 1),
                                                                                                        (11, 'Testing Game 3', 'NSWITCH', '2023-07-24', 1, 1),
                                                                                                        (12, 'Testing Game 4', 'NSWITCH', '2024-11-04', 1, 1),
                                                                                                        (13, 'Super Mario 64', 'N64', '1997-03-01', 2, 2),
                                                                                                        (15, 'Crash Bandicoot', 'PS1', '1996-11-08', 3, 3),
                                                                                                        (16, 'Crash Bandicoot 2: Cortex Strikes Back', 'PS1', '1997-12-05', 3, 3),
                                                                                                        (17, 'Crash Bandicoot: Warped', 'PS1', '1998-12-11', 3, 3),
                                                                                                        (18, 'Crash Team Racing', 'PS1', '1999-12-01', 3, 3),
                                                                                                        (19, 'Uncharted: Drake\'s Fortune', 'PS3', '2007-12-07', 3, 3),
                                                                                                        (20, 'Gravity Rush', 'PS VITA', '2012-06-15', 4, 3);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
