-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 11 mai 2020 à 06:56
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bigjob`
--
CREATE DATABASE IF NOT EXISTS `bigjob` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bigjob`;

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `title`, `start_event`, `end_event`) VALUES
(3, 'thtd', '2020-05-09 04:00:00', '2020-05-09 07:00:00'),
(4, 'satasa', '2020-05-09 10:00:00', '2020-05-09 13:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `debut` datetime NOT NULL,
  `fin` datetime NOT NULL,
  `id_user` int(11) NOT NULL,
  `valide` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `debut`, `fin`, `id_user`, `valide`) VALUES
(20, '2020-05-10 00:00:00', '2020-05-10 01:00:00', 10, 'oui'),
(22, '2020-05-10 00:00:00', '2020-05-10 01:00:00', 10, 'oui'),
(24, '2020-05-10 00:00:00', '2020-05-10 01:00:00', 10, NULL),
(25, '2020-05-10 00:00:00', '2020-05-10 01:00:00', 10, 'oui'),
(18, '2020-05-10 00:00:00', '2020-05-10 01:00:00', 10, NULL),
(19, '2020-05-10 00:00:00', '2020-05-10 01:00:00', 10, 'oui');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(60) NOT NULL,
  `prenom` varchar(60) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(60) NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rank` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `password`, `email`, `creation`, `rank`) VALUES
(18, 'user', 'user2', '$2y$12$cutcIWDECiprGxsp9objy.MS/HS6Z2ioBZ8S.FEmEXdVzJpX7sXfi', 'user@laplateforme.io', '2020-05-07 16:29:37', 'user'),
(19, 'user2', 'user2', '$2y$12$cutcIWDECiprGxsp9objy.MS/HS6Z2ioBZ8S.FEmEXdVzJpX7sXfi', 'user@laplateforme.io', '2020-05-07 16:29:37', 'user'),
(32, 'sup', 'test', '$2y$12$oEi0Zxs5CeFtOtXoBj1YcOHMHOcrwmc93ik5nub2d3nskU58xKRk2', 'sup@laplateforme.io', '2020-05-09 11:32:39', 'admin'),
(17, 'modo', 'modo', '$2y$12$GR99.p5f2BoN.wlDvzLw3OV3XRfOnzttivr.xjcrMs9z4xvabWp7e', 'modo@laplateforme.io', '2020-05-07 16:27:35', 'modo'),
(20, 'admin', 'admin', '$2y$12$6mvcwdWGHJlSNm2RYdPoJewLceoywFJFfJBvmPkOgzn2OQOoRJFu2', 'admin@laplateforme.io', '2020-05-07 09:03:35', 'admin'),
(21, 'user', 'user2', '$2y$12$cutcIWDECiprGxsp9objy.MS/HS6Z2ioBZ8S.FEmEXdVzJpX7sXfi', 'user@laplateforme.io', '2020-05-07 16:29:37', 'user'),
(22, 'user2', 'user2', '$2y$12$cutcIWDECiprGxsp9objy.MS/HS6Z2ioBZ8S.FEmEXdVzJpX7sXfi', 'user@laplateforme.io', '2020-05-07 16:29:37', 'user'),
(23, 'modo', 'modo', '$2y$12$GR99.p5f2BoN.wlDvzLw3OV3XRfOnzttivr.xjcrMs9z4xvabWp7e', 'modo@laplateforme.io', '2020-05-07 16:27:35', 'modo'),
(10, 'admin', 'admin', '$2y$12$6mvcwdWGHJlSNm2RYdPoJewLceoywFJFfJBvmPkOgzn2OQOoRJFu2', 'admin@laplateforme.io', '2020-05-07 09:03:35', 'admin'),
(25, 'user', 'user2', '$2y$12$cutcIWDECiprGxsp9objy.MS/HS6Z2ioBZ8S.FEmEXdVzJpX7sXfi', 'user@laplateforme.io', '2020-05-07 16:29:37', 'user'),
(26, 'user2', 'user2', '$2y$12$cutcIWDECiprGxsp9objy.MS/HS6Z2ioBZ8S.FEmEXdVzJpX7sXfi', 'user@laplateforme.io', '2020-05-07 16:29:37', 'user'),
(27, 'modo', 'modo', '$2y$12$GR99.p5f2BoN.wlDvzLw3OV3XRfOnzttivr.xjcrMs9z4xvabWp7e', 'modo@laplateforme.io', '2020-05-07 16:27:35', 'modo'),
(28, 'admin', 'admin', '$2y$12$6mvcwdWGHJlSNm2RYdPoJewLceoywFJFfJBvmPkOgzn2OQOoRJFu2', 'admin@laplateforme.io', '2020-05-07 09:03:35', 'admin'),
(29, 'user', 'user2', '$2y$12$cutcIWDECiprGxsp9objy.MS/HS6Z2ioBZ8S.FEmEXdVzJpX7sXfi', 'user@laplateforme.io', '2020-05-07 16:29:37', 'user'),
(30, 'user2', 'user2', '$2y$12$cutcIWDECiprGxsp9objy.MS/HS6Z2ioBZ8S.FEmEXdVzJpX7sXfi', 'user@laplateforme.io', '2020-05-07 16:29:37', 'user'),
(31, 'modo', 'modo', '$2y$12$GR99.p5f2BoN.wlDvzLw3OV3XRfOnzttivr.xjcrMs9z4xvabWp7e', 'modo@laplateforme.io', '2020-05-07 16:27:35', 'modo'),
(33, 'sup', 'test', '$2y$12$oEi0Zxs5CeFtOtXoBj1YcOHMHOcrwmc93ik5nub2d3nskU58xKRk2', 'sup@laplateforme.io', '2020-05-09 11:32:39', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
