-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 09 juin 2025 à 13:05
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

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
