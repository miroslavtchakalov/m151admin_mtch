-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 14 Octobre 2015 à 12:58
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `m151ex1`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `idUser` int(8) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `dateNaissance` date NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `pseudo` varchar(30) NOT NULL,
  `motPass` varchar(50) NOT NULL,
  PRIMARY KEY (`idUser`),
  UNIQUE KEY `motPass` (`motPass`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`idUser`, `prenom`, `nom`, `dateNaissance`, `description`, `email`, `pseudo`, `motPass`) VALUES
(1, '123', '123', '2015-09-24', NULL, 'fds@a', 'fds', '123'),
(4, 'miroslav', 'Tchakalov', '2015-09-24', NULL, 'miroslav@gmail.com', 'mirokalov', 'Super'),
(3, 'dsdsadsa', 'dsadsdsa', '2015-09-10', NULL, 'dddsa@aa', 'ddsadsa', 'dsadsadsa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
