-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 20 Avril 2015 à 14:01
-- Version du serveur: 5.5.41-0ubuntu0.14.04.1-log
-- Version de PHP: 5.5.11-3+deb.sury.org~precise+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `tumblr`
--

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `idImage` int(11) NOT NULL AUTO_INCREMENT,
  `nomImage` varchar(255) NOT NULL,
  `captionImage` varchar(255) DEFAULT NULL,
  `real_path` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL,
  PRIMARY KEY (`idImage`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Contenu de la table `images`
--

INSERT INTO `images` (`idImage`, `nomImage`, `captionImage`, `real_path`, `created_on`) VALUES
(15, 'hulk.jpg', 'test', '2872385fc47461177314420369c9e429.jpeg', '2015-03-13 13:16:13'),
(17, 'sup.jpg', 'sup', '2c61b8fc910a873e56d30b4344a8a9ba.jpeg', '2015-03-13 13:16:35'),
(18, 'wolf.jpg', 'wolf', 'a69cbbf86d0703ffb441368bb984d1ad.jpeg', '2015-03-13 13:17:07'),
(20, 'joke.jpg', 'joke', '4fdaf65c8fc0e3ef4b3d411392acd32c.jpeg', '2015-03-13 13:17:41'),
(21, 'nem.jpg', 'nemesis', 'bf0d78d2df375cf33037aa66c087f0cc.jpeg', '2015-03-13 13:19:22'),
(22, 'bbb.png', 'test', '', '0000-00-00 00:00:00'),
(23, '', 'test upload', '', '0000-00-00 00:00:00'),
(24, '', 'teststts', '', '0000-00-00 00:00:00'),
(25, 'images.jpeg', 'upload + bdd', '', '0000-00-00 00:00:00'),
(26, 'joke.jpg', 'teststts', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `relImgUser`
--

CREATE TABLE IF NOT EXISTS `relImgUser` (
  `idImage` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  PRIMARY KEY (`idImage`,`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `relImgUser`
--

INSERT INTO `relImgUser` (`idImage`, `idUser`) VALUES
(15, 8),
(17, 7),
(18, 7),
(20, 7),
(21, 7);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(15) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`idUser`, `login`, `nom`, `prenom`, `password`, `created_on`) VALUES
(1, '', 'test', 'root', '', '2015-03-10 14:41:38'),
(2, '', 'nom', 'root', 'neuneu', '2015-03-10 15:20:05'),
(3, 'FLENOBL3', 'LENOBLE', 'Fabrice', '$2y$10$zzLSOFakh5kgmaf3Py2YD.O6RXrpdXudBy2w0vdoPrXxrVIMfLxjK', '2015-03-10 15:39:14'),
(4, 'rÃ©paud4', 'Ã©paud', 'root', '$2y$10$Ma1h1n2fcEJawZFoV43QDehCVYmGiTexOk6tBS80Nz5WHe0hBMLXG', '2015-03-10 15:40:08'),
(5, 'rLENOBL5', 'LENOBLE', 'root', '$2y$10$cjPEAYfbh/FeXVuCGgeoheWibzsyMX0ktIT8ci8UnycfRJL.0mPGW', '2015-03-10 15:40:55'),
(6, 'FLENOBL6', 'LENOBLE', 'Fabrice', '$2y$10$3XjGcgGMsq83/2UH96FadefYEcgmzMOGNQGpC92w.XrVrDnTxnx2i', '2015-03-10 15:41:38'),
(7, 'FLENOBL7', 'LENOBLE', 'Fabrice', '$2y$10$645ty97AZPIQ/D7amPuroeYDxeSsRgWYkJfdwYTrLhIkleETpSWc.', '2015-03-10 15:57:06'),
(8, 'FLENOBL8', 'LENOBLE', 'Fabrice', '$2y$10$mdQ6pmYtvvtVMLEPxO3O2OuV34USWPiukVafN9WZIYx0F69zzneqO', '2015-03-13 10:00:54'),
(10, '', 'LENOBLE', 'root', '', '0000-00-00 00:00:00');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `relImgUser`
--
ALTER TABLE `relImgUser`
  ADD CONSTRAINT `FK_DELIMAGE` FOREIGN KEY (`idImage`) REFERENCES `images` (`idImage`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
