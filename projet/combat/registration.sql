-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 23 juin 2025 à 11:34
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `registration`
--

-- --------------------------------------------------------

--
-- Structure de la table `armurerie`
--

DROP TABLE IF EXISTS `armurerie`;
CREATE TABLE IF NOT EXISTS `armurerie` (
  `ID` int NOT NULL,
  `Matricule` int NOT NULL,
  `Designation` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `IMG` varchar(256) NOT NULL,
  `Type` varchar(256) NOT NULL,
  `PV` int NOT NULL,
  `Attaque` int NOT NULL,
  `Defense` int NOT NULL,
  `Capacite_Offensive` int NOT NULL,
  `Capacite_Defensive` int NOT NULL,
  `Agilite` int NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `armurerie`
--

INSERT INTO `armurerie` (`ID`, `Matricule`, `Designation`, `IMG`, `Type`, `PV`, `Attaque`, `Defense`, `Capacite_Offensive`, `Capacite_Defensive`, `Agilite`) VALUES
(1, 1, 'Pilote_Grappin', './comb_IMG/.png', 'Mobilite', 100, 50, 40, 75, 65, 95),
(2, 2, 'Pilote_Stim', './comb_IMG/.png', 'Mobilite', 100, 50, 40, 75, 65, 95),
(3, 3, 'Camouflage_optique', './comb_IMG/.png', 'Discretion', 100, 50, 40, 75, 65, 95),
(4, 4, 'Lame_sonar', './comb_IMG/.png', 'Detection', 100, 50, 40, 75, 65, 95),
(5, 5, 'Teleportation', './comb_IMG/.png', 'Evasion', 100, 50, 40, 75, 65, 95),
(6, 6, 'Hologramme', './comb_IMG/.png', 'Diversion', 100, 50, 40, 75, 65, 95),
(7, 7, 'Mur_AMP', './comb_IMG/.png', 'Strategie', 100, 50, 40, 75, 65, 95),
(8, 8, 'Ion', './comb_IMG/.png', 'Atlas', 10000, 25, 500, 100, 85, 50),
(9, 9, 'Scorch', './comb_IMG/.png', 'Ogre', 12500, 310, 700, 70, 85, 30),
(10, 10, 'Northstar', './comb_IMG/.png', 'Stryder', 7500, 450, 300, 75, 30, 75),
(11, 11, 'Ronin', './comb_IMG/.png', 'Stryder', 7500, 480, 300, 650, 75, 75),
(12, 12, 'Tone', './comb_IMG/.png', 'Atlas', 10000, 900, 500, 175, 100, 50),
(13, 13, 'Legion', './comb_IMG/.png', 'Ogre', 12500, 700, 700, 800, 75, 300),
(14, 14, 'Monarch', './comb_IMG/.png', 'Vanguard', 10000, 450, 500, 560, 175, 500);

-- --------------------------------------------------------

--
-- Structure de la table `bataille`
--

DROP TABLE IF EXISTS `bataille`;
CREATE TABLE IF NOT EXISTS `bataille` (
  `ID` int NOT NULL,
  `NOM` varchar(256) NOT NULL,
  `ATT_FIRST` varchar(256) NOT NULL,
  `DEGAT_FIRST` int NOT NULL,
  `ATT_SECOND` varchar(256) NOT NULL,
  `DEGAT_SECOND` int NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `bataille`
--

INSERT INTO `bataille` (`ID`, `NOM`, `ATT_FIRST`, `DEGAT_FIRST`, `ATT_SECOND`, `DEGAT_SECOND`) VALUES
(1, 'Pilote_Grappin', 'Softball', 35, 'Archer', 350),
(2, 'Pilote_Stim', 'CAR', 75, 'Charge_Rifle', 1250),
(3, 'Camouflage_Optique', 'Mastiff', 90, 'Sidewinder', 70),
(4, 'Lame_Sonar', 'Wingman_Elite', 95, 'Thunderbolt', 750),
(5, 'Teleportation', 'EVA_8', 80, 'Charge_Rifle', 1250),
(6, 'Hologramme', 'R_101', 15, 'LGM', 40),
(7, 'Mur_AMP', 'Devotion', 15, 'Thunderbolt', 750),
(8, 'Ion', 'Fusil_Splitter', 25, 'Tir_Laser', 100),
(9, 'Scorch', 'Lance_Grenade_Thermique', 310, 'Mur_de_Feu	', 70),
(10, 'Northstar', 'Canon_Plasma', 450, 'Lance_Missile', 75),
(11, 'Ronin', 'Mur_de_Plombs', 480, 'Vague_Arc	', 650),
(12, 'Tone', 'Canon_40mm', 900, 'Salve_de_Missiles', 175),
(13, 'Legion', 'Canon_Predator', 400, 'Tir_Puissant', 500),
(14, 'Monarch', 'XO16', 275, 'Missiles_Salvo', 300);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
