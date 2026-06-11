-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 12 Mars 2023 à 20:13
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `pokemonpoo`
--

-- --------------------------------------------------------

--
-- Structure de la table `attpok`
--

CREATE TABLE IF NOT EXISTS `attpok` (
  `ID` int(11) NOT NULL,
  `NOM` varchar(256) NOT NULL,
  `ATT_FIRST` varchar(256) NOT NULL,
  `DEGAT_FIRST` int(11) NOT NULL,
  `ATT_SECOND` varchar(256) NOT NULL,
  `DEGAT_SECOND` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `attpok`
--

INSERT INTO `attpok` (`ID`, `NOM`, `ATT_FIRST`, `DEGAT_FIRST`, `ATT_SECOND`, `DEGAT_SECOND`) VALUES
(1, 'Bulbizarre', 'Fouet Lianes', 4, 'Tranch Herbe', 10),
(2, 'Herbizarre', 'Canon Graine', 10, 'Bombe Beurk', 22),
(3, 'Florizarre', 'Giga-Sangsue', 15, 'Lance Soleil', 32),
(4, 'Salameche', 'Griffe', 5, 'Crocs Feu', 12),
(5, 'Reptincel', 'Aire de Feu', 9, 'Boutefeu', 21),
(6, 'Dracaufeu', 'Draco-Griffe', 20, 'Déflagration', 33),
(7, 'Carapuce', 'Charge', 4, 'Pistolet à O', 11),
(8, 'Carabaffe', 'Morsure', 12, 'Vibraqua', 19),
(9, 'Tortank', 'Laser Glace', 20, 'Hydrocanon	', 30),
(10, 'Artikodin', 'Vent Violent', 24, 'Blizzard', 35),
(11, 'Elector', 'Tonnerre', 26, 'Fatal-Foudre	', 37),
(12, 'Sulfura', 'Lame d’Air', 22, 'Surchauffe', 38);

-- --------------------------------------------------------

--
-- Structure de la table `pokedex`
--

CREATE TABLE IF NOT EXISTS `pokedex` (
  `ID` int(11) NOT NULL,
  `Num_Pok` int(11) NOT NULL,
  `Nom` varchar(256) NOT NULL,
  `IMG` varchar(256) NOT NULL,
  `Type` varchar(256) NOT NULL,
  `PV` int(11) NOT NULL,
  `Attaque` int(11) NOT NULL,
  `Defense` int(11) NOT NULL,
  `Attaque_Special` int(11) NOT NULL,
  `Defense_Special` int(11) NOT NULL,
  `Vitesse` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pokedex`
--

INSERT INTO `pokedex` (`ID`, `Num_Pok`, `Nom`, `IMG`, `Type`, `PV`, `Attaque`, `Defense`, `Attaque_Special`, `Defense_Special`, `Vitesse`) VALUES
(1, 1, 'Bulbizarre', './Pok_IMG/Bulbizarre.png', 'Plante / Poisson', 45, 49, 49, 65, 65, 45),
(2, 2, 'Herbizarre', './Pok_IMG/Herbizarre.png', 'Plante / Poisson', 60, 62, 63, 80, 80, 60),
(3, 3, 'Florizarre', './Pok_IMG/Florizarre.png', 'Plante / Poisson', 80, 82, 83, 100, 100, 80),
(4, 4, 'Salameche', './Pok_IMG/Salameche.png', 'Feu', 39, 52, 43, 60, 50, 65),
(5, 5, 'Reptincel', './Pok_IMG/Reptincel.png', 'Feu', 58, 64, 58, 80, 65, 80),
(6, 6, 'Dracaufeu', './Pok_IMG/Dracaufeu.png', 'Feu / Vol', 78, 84, 78, 109, 85, 100),
(7, 7, 'Carapuce', './Pok_IMG/Carapuce.png', 'Eau', 44, 48, 65, 50, 64, 43),
(8, 8, 'Carabaffe', './Pok_IMG/Carabaffe.png', 'Eau', 59, 63, 80, 65, 80, 58),
(9, 9, 'Tortank', './Pok_IMG/Tortank.png', 'Eau', 79, 83, 100, 85, 105, 78),
(10, 144, 'Artikodin', './Pok_IMG/Artikodin.png', 'Glace / Vol', 90, 85, 100, 95, 125, 85),
(11, 145, 'Elector', './Pok_IMG/Elector.png', 'Electrik / Vol', 90, 90, 85, 125, 90, 100),
(12, 146, 'Sulfura', './Pok_IMG/Sulfura.png', 'Feu / Vol', 90, 100, 90, 125, 85, 90);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
