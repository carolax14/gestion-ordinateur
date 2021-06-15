-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 15 juin 2021 à 17:35
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `simplon`
--
CREATE DATABASE IF NOT EXISTS `simplon` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `simplon`;

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_nom` varchar(100) NOT NULL,
  `admin_prenom` varchar(100) NOT NULL,
  `admin_login` varchar(100) NOT NULL,
  `admin_mdp` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`admin_id`, `admin_nom`, `admin_prenom`, `admin_login`, `admin_mdp`) VALUES
(1, 'super', 'administrateur', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `creneau`
--

DROP TABLE IF EXISTS `creneau`;
CREATE TABLE IF NOT EXISTS `creneau` (
  `creneau_id` int(11) NOT NULL AUTO_INCREMENT,
  `creneau_horraire` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`creneau_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `creneau`
--

INSERT INTO `creneau` (`creneau_id`, `creneau_horraire`) VALUES
(1, '09h00 - 10h00'),
(2, '10h00 - 11h00'),
(3, '11h00 - 12h00'),
(4, '12h00 - 13h00'),
(5, '14h00 - 15h00'),
(6, '16h00 - 17h00'),
(7, '17h00 - 18h00');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `list_reservation`
-- (Voir ci-dessous la vue réelle)
--
DROP VIEW IF EXISTS `list_reservation`;
CREATE TABLE IF NOT EXISTS `list_reservation` (
`id` int(11)
,`date` date
,`creneau_horraire` varchar(50)
,`ordi_libelle` varchar(100)
,`visiteur_nom` varchar(100)
,`visiteur_prenom` varchar(100)
,`visiteur_mail` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure de la table `ordinateur`
--

DROP TABLE IF EXISTS `ordinateur`;
CREATE TABLE IF NOT EXISTS `ordinateur` (
  `ordi_id` int(11) NOT NULL AUTO_INCREMENT,
  `ordi_libelle` varchar(100) NOT NULL,
  PRIMARY KEY (`ordi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ordinateur`
--

INSERT INTO `ordinateur` (`ordi_id`, `ordi_libelle`) VALUES
(1, 'pc_1'),
(2, 'pc_2'),
(3, 'pc_3'),
(4, 'pc_4'),
(6, 'pc_5');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `creneau_id_fk` int(11) DEFAULT NULL,
  `visiteur_id_fk` int(11) DEFAULT NULL,
  `ordinateur_id_fk` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ucCodes` (`date`,`ordinateur_id_fk`,`creneau_id_fk`),
  KEY `visiteur_id_fk` (`visiteur_id_fk`),
  KEY `ordinateur_id_fk` (`ordinateur_id_fk`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `date`, `creneau_id_fk`, `visiteur_id_fk`, `ordinateur_id_fk`) VALUES
(10, '2021-06-14', 1, 1, 1),
(18, '2021-06-16', 5, 5, 1),
(20, '2021-06-14', 2, 2, 1),
(21, '2021-06-11', 5, 6, 3);

-- --------------------------------------------------------

--
-- Structure de la table `visiteur`
--

DROP TABLE IF EXISTS `visiteur`;
CREATE TABLE IF NOT EXISTS `visiteur` (
  `visiteur_id` int(11) NOT NULL AUTO_INCREMENT,
  `visiteur_nom` varchar(100) NOT NULL,
  `visiteur_prenom` varchar(100) NOT NULL,
  `visiteur_mail` varchar(100) NOT NULL,
  PRIMARY KEY (`visiteur_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `visiteur`
--

INSERT INTO `visiteur` (`visiteur_id`, `visiteur_nom`, `visiteur_prenom`, `visiteur_mail`) VALUES
(1, 'gauche', 'eric', 'eric.gauche@gmail.com'),
(2, 'hafizou', 'carole', 'carole.hafizou@gmail.com'),
(5, 'leclaire', 'Margaux', 'margaux.leclaire@gmail.com'),
(6, 'smith', 'alison', 'alison.smith@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la vue `list_reservation`
--
DROP TABLE IF EXISTS `list_reservation`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `list_reservation`  AS  select `reservation`.`id` AS `id`,`reservation`.`date` AS `date`,`creneau`.`creneau_horraire` AS `creneau_horraire`,`ordinateur`.`ordi_libelle` AS `ordi_libelle`,`visiteur`.`visiteur_nom` AS `visiteur_nom`,`visiteur`.`visiteur_prenom` AS `visiteur_prenom`,`visiteur`.`visiteur_mail` AS `visiteur_mail` from (((`creneau` join `reservation` on((`creneau`.`creneau_id` = `reservation`.`creneau_id_fk`))) join `visiteur` on((`reservation`.`visiteur_id_fk` = `visiteur`.`visiteur_id`))) join `ordinateur` on((`reservation`.`ordinateur_id_fk` = `ordinateur`.`ordi_id`))) ;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`visiteur_id_fk`) REFERENCES `visiteur` (`visiteur_id`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`ordinateur_id_fk`) REFERENCES `ordinateur` (`ordi_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
