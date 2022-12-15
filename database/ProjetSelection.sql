-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 15, 2022 at 08:51 AM
-- Server version: 8.0.31-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetselection`
--

-- --------------------------------------------------------

--
-- Table structure for table `classement`
--

CREATE TABLE `classement` (
  `prenom` varchar(16) NOT NULL,
  `nom` varchar(16) NOT NULL,
  `position` int NOT NULL,
  `note` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eleve`
--

CREATE TABLE `eleve` (
  `id` int NOT NULL COMMENT 'User ID',
  `nom` varchar(16) NOT NULL,
  `prenom` varchar(16) NOT NULL,
  `bac` varchar(26) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT '0: bac pro\r\n1: s\r\n2: L\r\n3:STMG\r\n4: Autre',
  `travail` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'true for yes, false for no',
  `absences` varchar(16) NOT NULL,
  `attitude` varchar(16) NOT NULL,
  `etudes` varchar(16) NOT NULL,
  `avis_pp` varchar(16) NOT NULL COMMENT '0: B\r\n1 : AB\r\n2: Insuf\r\n3: Negatif',
  `avis_prov` varchar(16) NOT NULL COMMENT '0: B\r\n1 : AB\r\n2: Insuf\r\n3: Negatif',
  `lettre` varchar(16) NOT NULL COMMENT '0: B\r\n1 : AB\r\n2: Insuf\r\n3: Negatif',
  `remarques` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `note` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `eleve`
--

INSERT INTO `eleve` (`id`, `nom`, `prenom`, `bac`, `travail`, `absences`, `attitude`, `etudes`, `avis_pp`, `avis_prov`, `lettre`, `remarques`, `note`) VALUES
(27, 'Zuckerberg', 'Mark', 'Bac S/ES', 'Non', 'Non', 'Non', 'Non', 'Insuf.', 'Assez bien', 'Assez bien', 'Pas mal, mais Mark est trop sûr à propos de son Metaverse, pourtant tout le monde sait que c\'est du flan... ( Ligne ajoutée par Corentin Guillaume )', 14),
(28, 'Eilish', 'Billie', 'Bac S/ES', 'Oui', 'Non', 'Non', 'Oui', 'Bien', 'Bien', 'Bien', 'Excellente elève, très bonne chanteuse au passage ( Ligne ajoutée par Craig Federighi )', 20);

-- --------------------------------------------------------

--
-- Table structure for table `ip`
--

CREATE TABLE `ip` (
  `ip` int NOT NULL COMMENT 'IP',
  `isBanned` tinyint(1) DEFAULT '0' COMMENT 'Is the IP banned?'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `ip` varchar(255) DEFAULT NULL COMMENT 'ip',
  `account` varchar(255) DEFAULT NULL COMMENT 'account used',
  `date` datetime DEFAULT NULL COMMENT 'date and time ',
  `action` varchar(255) DEFAULT NULL COMMENT 'action made'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`ip`, `account`, `date`, `action`) VALUES
('10.0.51.6', 'Craig Federighi', '2015-12-22 08:12:31', 'Connection au site'),
('10.0.51.6', 'Craig Federighi', '2015-12-22 08:12:35', 'Déconnexion'),
('10.0.51.6', 'Charlie Guillaume', '2015-12-22 08:12:41', 'Connection au site');

-- --------------------------------------------------------

--
-- Table structure for table `other`
--

CREATE TABLE `other` (
  `deadline` varchar(26) NOT NULL,
  `total_eleve` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `other`
--

INSERT INTO `other` (`deadline`, `total_eleve`) VALUES
('Mardi 13 Octobre 2020', 72);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ip` varchar(128) DEFAULT NULL COMMENT 'IP addr',
  `ID` int NOT NULL COMMENT 'User ID',
  `prenom` varchar(16) NOT NULL,
  `nom` varchar(16) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `role` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`banned`, `ip`, `ID`, `prenom`, `nom`, `username`, `password`, `role`) VALUES
(0, NULL, 18, 'Steve', 'Jobs', 'jobs', '$2y$10$zGfyTS7nEqUTZ7SzoiS9/u6.PAihtTBgMZ2OOLjDIXrB4FUO9lm1.', 'secretaire'),
(0, NULL, 19, 'Corentin', 'Guillaume', 'corentinglm', '$2y$10$VOkSiWogQlpaJnSz87ecL.WMPgSOdcfrWiN7gdejQ8m.jlom.pPcq', 'admin'),
(0, '10.0.51.6', 22, 'Craig', 'Federighi', 'craig', '$2y$10$vkqVWeA0bO2D0KFmGtKtGOOnWuDXv/nP5.nYVbQ3PAVqB/A.lX7QO', 'prof'),
(0, '10.0.51.6', 24, 'Charlie', 'Guillaume', 'charlie', '$2y$10$JGNwpsA7bdsYFDIT79nuFO5K8piaYbGStBorYtceISeH79tN4y/S2', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eleve`
--
ALTER TABLE `eleve`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ip`
--
ALTER TABLE `ip`
  ADD PRIMARY KEY (`ip`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eleve`
--
ALTER TABLE `eleve`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'User ID', AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT COMMENT 'User ID', AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
