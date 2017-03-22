-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 22 Mars 2017 à 13:09
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `logement`
--
CREATE DATABASE IF NOT EXISTS `logement` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `logement`;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `ID_UTILISATEUR` int(11) NOT NULL AUTO_INCREMENT,
  `ID_ROLE` int(11) NOT NULL,
  `NUMERO` varchar(50) DEFAULT NULL,
  `PRENOM` varchar(50) DEFAULT NULL,
  `NOM` varchar(50) DEFAULT NULL,
  `DATE_NAISSANCE` varchar(50) DEFAULT NULL,
  `LIEU_NAISSANCE` varchar(50) NOT NULL,
  `ADRESSE` varchar(20) DEFAULT NULL,
  `EMAIL_ETU` varchar(100) DEFAULT NULL,
  `TELEPHONE` varchar(20) DEFAULT NULL,
  `UFR` varchar(30) NOT NULL,
  `FILIERE` varchar(30) NOT NULL,
  `NIVEAU` varchar(20) NOT NULL,
  `ANNEE_INS` varchar(10) NOT NULL,
  `LOGIN` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_UTILISATEUR`),
  KEY `fk_role` (`ID_ROLE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=55 ;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`ID_UTILISATEUR`, `ID_ROLE`, `NUMERO`, `PRENOM`, `NOM`, `DATE_NAISSANCE`, `LIEU_NAISSANCE`, `ADRESSE`, `EMAIL_ETU`, `TELEPHONE`, `UFR`, `FILIERE`, `NIVEAU`, `ANNEE_INS`, `LOGIN`, `PASSWORD`) VALUES
(11, 2, '700499', 'Makane', 'KANE', '1992-05-02', 'Ndiorno', 'Ross-Béthio', 'makane.kane@uadb.edu.sn', '777678047 / 76', 'SATIC', 'SIR', 'M1', '2012-2013', 'kane', '123456\r'),
(15, 2, '600271', 'Birahim', 'SECK', '1991-01-01', 'Saint-Louis', 'Saint-Louis', 'seckbirahim@gmail.com', '774093721', 'SATIC', 'SIR', 'M1', '2012-2013', 'kane', '123456\r'),
(16, 2, '700499', 'Makane', 'KANE', '1992-05-02', 'Ndiorno', 'Ross-B', 'makane.kane@uadb.edu.sn', '777678047', 'SATIC', 'SIR', 'M1', '2012-2013', 'kane', '123456\r'),
(17, 2, '700499', 'Makane', 'KANE', '1992-05-02', 'Ndiorno', 'Ross-B', 'makane.kane@uadb.edu.sn', '777678047', 'SATIC', 'SIR', 'M1', '2012-2013', 'kane', '123456\r'),
(20, 2, '700499', 'Makane', 'KANE', '1992-05-02', 'Ndiorno', 'Ross-B', 'makane.kane@uadb.edu.sn', '777678047', 'SATIC', 'SIR', 'M1', '2012-2013', 'kane', '123456\r'),
(21, 2, '700499', 'Makane', 'KANE', '1992-05-02', 'Ndiorno', 'Ross-B?thio', 'makane.kane@uadb.edu.sn', '777678047', 'SATIC', 'SIR', 'M1', '2012-2013', 'kane', '123456\r'),
(22, 2, '700499', 'Makane', 'KANE', '1992-05-02', 'Ndiorno', 'Ross-B?thio', 'makane.kane@uadb.edu.sn', '777678047', 'SATIC', 'SIR', 'M1', '2012-2013', 'kane', '123456\r'),
(40, 2, '700499', ' ABY  ', 'SENE', NULL, ' SAINT-LOUIS  ', 'ROSS-BETHIO', 'sene3@uadb.edu.sn', '767678047', 'SDD', 'NUTRITION', 'M1', '2012-2013', 'SENE', '123456\r'),
(41, 2, ' 741352 ', ' AISSATA  ', 'LY', NULL, ' FANAYE WALO  ', 'THIES', 'ly1@uadb.edu.sn', '777628041', 'SDD', 'SANTE', 'L2', '2012-2013', 'LY', '221234\r'),
(42, 2, '740986 ', ' AISSATA  ', 'THIAM', NULL, ' SAINT-LOUIS  ', 'KOLDA', 'thiam2@uadb.edu.sn', '777678044', 'SDD', 'NUTRITION', 'M2', '2012-2013', 'THIAM', '123214\r'),
(43, 2, '741353 ', ' ALASSANE  ', 'MBAYE', NULL, ' RICHARD TOLL  ', 'LINGEURE', 'mbaye3@uadb.edu.sn', '777678043', 'SDD', 'SANTE', 'L3', '2012-2013', 'MBAYE', '341567\r'),
(44, 2, ' 741766 ', ' ALIOU  ', 'DIOP', NULL, ' BIGNONA  ', ' SAINT-LOUIS  ', 'diop1@uadb.edu.sn', '777678049', 'SDD', 'ALIMENTATION', 'M1', '2012-2013', 'DIOP', '551123\r'),
(45, 2, ' 741767 ', ' ALIOUNE  ', 'GUEYE', NULL, ' DAKAR  ', ' DAKAR  ', 'gueye2@uadb.edu.sn', '777678040', 'SDD', 'ALIMENTATION', 'M1', '2012-2013', 'GUEYE', '665555\r'),
(46, 2, ' 741768 ', ' ALLA  ', 'NDIAYE', NULL, ' KHEUL  ', ' TIVAOUANE  ', 'ndiaye3@uadb.edu.sn', '777678011', 'SDD', 'SANTE', 'L2', '2012-2013', 'NDIAYE', '995655\r'),
(47, 2, ' 742134 ', ' ALPHA OUMAR  ', 'SY', NULL, ' PIKINE  ', ' TAMBACOUNDA  ', 'sy1@uadb.edu.sn', '777678107', 'SDD', 'NUTRITION', 'M1', '2012-2013', 'SY', '872542\r'),
(48, 2, ' 742231 ', ' AMADOU  ', 'THIOUNE', NULL, ' PATHE BADIO  ', ' BAMBEY  ', 'thioune2@uadb.edu.sn', '777672947', 'SDD', 'SANTE', 'L3', '2012-2013', 'THIOUNE', '109888\r'),
(49, 2, ' 741023 ', ' AMADOU SAIKHOU  ', 'MBACKE', NULL, ' MLOMP KADJIFOLONG  ', ' YEUMBEUL  ', 'mbacke3@uadb.edu.sn', '777673047', 'SDD', 'ALIMENTATION', 'M1', '2012-2013', 'MBACKE', '197776\r'),
(50, 2, ' 741463 ', ' AMADOU TIDIANE  ', 'DIAW', NULL, ' GOLLERE NDIAKA  ', ' KOLDA  ', 'diaw1@uadb.edu.sn', '774078047', 'SDD', 'ALIMENTATION', 'M1', '2012-2013', 'DIAW', '206543\r'),
(51, 2, ' 741172 ', ' AMINATA  ', 'MBODJ', NULL, ' THIES  ', ' THIES  ', 'mbodj2@uadb.edu.sn', '780678047', 'SDD', 'NUTRITION', 'M1', '2012-2013', 'MBODJ', '309878\r'),
(52, 2, ' 741673 ', ' ASTOU  ', 'DRAME', NULL, ' YEUMBEUL  ', ' RUFISQUE  ', 'drame3@uadb.edu.sn', '777672247', 'SDD', 'NUTRITION', 'M1', '2012-2013', 'DRAME', '295734\r'),
(53, 2, '7 42415 ', ' BOUKARY  ', 'KONATE', NULL, ' KEDOUGOU  ', 'MATAM', 'konate1@uadb.edu.sn', '774478047', 'SDD', 'SANTE', 'L3', '2012-2013', 'KONATE', '799111\r');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `ID_ROLE` int(11) NOT NULL AUTO_INCREMENT,
  `LIBELLE` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_ROLE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `role`
--

INSERT INTO `role` (`ID_ROLE`, `LIBELLE`) VALUES
(1, 'Etudiant'),
(2, 'Caissier'),
(3, 'DirecteurScolarité'),
(4, 'DirecteurCROUS'),
(5, 'Chef de Résidence'),
(6, 'Chef de Pavillon');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `ID_UTILISATEUR` int(11) NOT NULL AUTO_INCREMENT,
  `ID_ROLE` int(11) NOT NULL,
  `PRENOM` varchar(50) DEFAULT NULL,
  `NOM` varchar(50) DEFAULT NULL,
  `ADRESSE` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `TELEPHONE` varchar(20) DEFAULT NULL,
  `LOGIN` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_UTILISATEUR`),
  KEY `fk_id_role` (`ID_ROLE`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID_UTILISATEUR`, `ID_ROLE`, `PRENOM`, `NOM`, `ADRESSE`, `EMAIL`, `TELEPHONE`, `LOGIN`, `PASSWORD`) VALUES
(2, 4, 'Diop', 'DIOP', 'Ndar', '', '775000000', 'diop', 'diop'),
(6, 5, 'Mamour', 'KANE', 'Ross Béthio', 'mamour748@hotmail.fr', '777678047 / 76', 'kane', 'password'),
(8, 5, 'Mame', 'Info', 'Ndiorno', 'barrmansour@yahoo.FRmmes', '777678047 / 76', 'N00121320161', 'password');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `fk_role` FOREIGN KEY (`ID_ROLE`) REFERENCES `role` (`ID_ROLE`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `fk_id_role` FOREIGN KEY (`ID_ROLE`) REFERENCES `role` (`ID_ROLE`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
