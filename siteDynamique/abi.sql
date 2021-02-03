-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 27 jan. 2021 à 11:36
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `abi`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `idClient` int(11) NOT NULL AUTO_INCREMENT,
  `raisonSociale` char(32) NOT NULL,
  `typeSociete` char(25) NOT NULL,
  `activite` char(25) NOT NULL,
  `adresse` char(255) NOT NULL,
  `telephoneClient` char(15) NOT NULL,
  `nature` char(25) NOT NULL,
  `CA` decimal(10,0) NOT NULL,
  `effectif` int(11) NOT NULL,
  `nomContact` char(32) NOT NULL,
  `commentComm` text NOT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idClient`, `raisonSociale`, `typeSociete`, `activite`, `adresse`, `telephoneClient`, `nature`, `CA`, `effectif`, `nomContact`, `commentComm`) VALUES
(1, 'il était un fruit', 'public', 'fruit', '55 av sgt bob', '01.02.03.04.05', 'nouveau', '46262', 56, 'jean', 'bon client'),
(2, 'La maison Fournier', 'privé', 'boulanger', '75 av maraicher', '02.03.04.05.06', '', '666116', 65, 'robert', 'top'),
(3, 'Soleillans', '', '', '', '03.04.05.04.05', '', '506', 65, '', ''),
(4, 'Fromagerie d\'Auxon', '', '', '', '04.05.06.07.08', '', '45', 45, '', ''),
(5, 'invitation à la ferme', '', '', '', '02.06.08.09.07', '', '54', 445, '', ''),
(6, 'test', '', '', '', '06.52.52.52.52', '', '4665', 6262, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `collaborateur`
--

DROP TABLE IF EXISTS `collaborateur`;
CREATE TABLE IF NOT EXISTS `collaborateur` (
  `matricule` int(11) NOT NULL AUTO_INCREMENT,
  `nomCollabo` char(32) NOT NULL,
  `prenomCollabo` char(32) NOT NULL,
  `contrat` char(32) DEFAULT NULL,
  `qualification` char(20) NOT NULL,
  `salaireBrut` decimal(10,0) DEFAULT NULL,
  `dateDebutContrat` date DEFAULT NULL,
  `dateFinContrat` date DEFAULT NULL,
  `photo` char(255) NOT NULL,
  `mdp` char(255) NOT NULL,
  PRIMARY KEY (`matricule`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `collaborateur`
--

INSERT INTO `collaborateur` (`matricule`, `nomCollabo`, `prenomCollabo`, `contrat`, `qualification`, `salaireBrut`, `dateDebutContrat`, `dateFinContrat`, `photo`, `mdp`) VALUES
(1, 'rovere', 'alex', 'cdi', 'administrateur', NULL, NULL, NULL, '', '$2y$10$Eu4WLSFKurFqvT6XFPRPcOe6fU4OiRs99OX5v715of8BerGcgMxPC');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
