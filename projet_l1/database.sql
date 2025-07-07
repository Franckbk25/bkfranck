-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.3.0 - MySQL Community Server - GPL
-- SE du serveur:                Win64
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


-- Listage de la structure de la base pour projetl1
CREATE DATABASE IF NOT EXISTS `projetl1` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `projetl1`;

-- Listage de la structure de table projetl1. messages_contact
CREATE TABLE IF NOT EXISTS `messages_contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sujet` varchar(150) NOT NULL,
  `message` text NOT NULL,
  `date_envoi` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table projetl1.messages_contact : ~7 rows (environ)
INSERT INTO `messages_contact` (`id`, `nom`, `email`, `sujet`, `message`, `date_envoi`) VALUES
	(1, 'BAKWA Franck', 'Franckbakwa@gmail.com', 'Probleme d&#039;argent', 'Test probleme', '2025-07-02 11:41:30'),
	(2, 'BAKWA Franck', 'Franckbakwa@gmail.com', 'Probleme d&#039;argent', 'Je n&#039;ai pas toute l&#039;', '2025-07-02 11:42:00'),
	(3, 'BAKWA Franck', 'Franckbakwa@gmail.com', 'Probleme d&#039;argent', 'Je n&#039;ai pas tout l&#039;argent au complet alors j&#039;allais demander si j peux avancer l&#039;argent et commencer puis solder après', '2025-07-02 11:43:07'),
	(4, 'BAKWA Franck', 'Franckbakwa@gmail.com', 'Probleme d&#039;argent', 'Je n&#039;ai pas tout l&#039;argent au complet alors j&#039;allais demander si j peux avancer l&#039;argent et commencer puis solder après', '2025-07-02 11:45:05'),
	(5, 'BAKWA Franck', 'Franckbakwa@gmail.com', 'Probleme d&#039;argent', 'Je n&#039;ai pas tout l&#039;argent au complet alors j&#039;allais demander si j peux avancer l&#039;argent et commencer puis solder après', '2025-07-02 11:45:13'),
	(6, 'BAKWA Franck', 'Franckbakwa@gmail.com', 'Probleme d&#039;argent', 'Je n&#039;ai pas tout l&#039;argent au complet alors j&#039;allais demander si j peux avancer l&#039;argent et commencer puis solder après', '2025-07-02 11:47:23'),
	(7, 'BAKWA Franck', 'Franckbakwa@gmail.com', 'Probleme d&#039;argent', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2025-07-02 11:48:31');

-- Listage de la structure de table projetl1. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `niveau` varchar(20) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `date_inscription` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table projetl1.users : ~3 rows (environ)
INSERT INTO `users` (`id`, `nom`, `email`, `niveau`, `mot_de_passe`, `date_inscription`) VALUES
	(1, 'BAKWA Franck', 'Bakwafranck@gmail.com', 'Intermédiaire', '$2y$10$TTB8mK7clgErKr73HD8zPeGLg1g6H4l3mkxTi4uFwyMj7aPfkeVcC', '2025-06-29 03:10:13'),
	(2, 'VUNUNU Sagesse', 'Sagessevununu@gmail.com', 'Débutant', '$2y$10$dkqzRgSPW.F4UTmHSaTcrOo5QqhRrE6LlkRifqchxmwVE6wEoeQHq', '2025-06-29 03:58:06'),
	(3, 'Joseph MILAMBU', 'Milambujoseph@gmail.com', 'Avancé', '$2y$10$Zf4L5v1k5TRBdAsa6ELtDeSRKVnbDWsfjEaQBIour/omToatigEBK', '2025-06-29 13:52:54');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
