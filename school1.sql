-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 31 mars 2021 à 08:20
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `school1`
--

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

DROP TABLE IF EXISTS `classe`;
CREATE TABLE IF NOT EXISTS `classe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  `id_filiere` varchar(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_filiere` (`id_filiere`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`id`, `code`, `id_filiere`) VALUES
(29, 'classe2020', 'ISIC'),
(30, 'classe2020', '2ITE1'),
(31, 'classe2021', '2ITE1'),
(32, 'classe2022', '2ITE1'),
(33, 'classe2020', 'GI'),
(34, 'classe2021', 'ISIC'),
(35, 'classe2021', 'GI'),
(36, 'classe2022', 'GI'),
(37, 'classe2022', 'ISIC');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cin` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `psw` varchar(20) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `filiere` varchar(10) NOT NULL,
  `classe` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `filiere` (`filiere`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `cin`, `nom`, `prenom`, `email`, `psw`, `telephone`, `filiere`, `classe`) VALUES
(100, 'BM37587', 'FARMATI', 'RIHAB', 'Rihabfarmati19@gmail.com', '123456', '', '2ITE1', 'classe2020'),
(101, '2222', 'MSD', 'Nohaila', 'nohailamsd01@gmail.com', 'azerty', '', '2ITE1', 'classe2020'),
(102, '2222', 'bbbb', 'mariem', 'mariem.b@gmail.com', 'azerty', '', '2ITE1', 'classe2021');

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

DROP TABLE IF EXISTS `filiere`;
CREATE TABLE IF NOT EXISTS `filiere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  `libelle` varchar(222) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`id`, `code`, `libelle`) VALUES
(4, 'GI', 'Génie Industriel'),
(10, '2ITE1', 'Ingénierie Informatique et Technologies Emergentes'),
(13, 'G2E', 'Génie Energétique et Electrique '),
(21, 'ISIC', 'Ingénierie des Systèmes dInformation et de Communication');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
