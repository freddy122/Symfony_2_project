-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Sam 09 Juillet 2016 à 04:50
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `filmotheque`
--
CREATE DATABASE IF NOT EXISTS `filmotheque` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `filmotheque`;

-- --------------------------------------------------------

--
-- Structure de la table `acteur`
--

CREATE TABLE IF NOT EXISTS `acteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateNaissance` date NOT NULL,
  `sexe` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Contenu de la table `acteur`
--

INSERT INTO `acteur` (`id`, `nom`, `prenom`, `dateNaissance`, `sexe`) VALUES
(1, 'fred', 'freds', '1990-03-01', 'M'),
(3, 'deric', 'aaa', '1910-07-01', 'M'),
(7, 'esfsef', 'sefsefs', '1902-01-01', 'P'),
(8, 'sdf', 'sfdfsfdfs', '1902-01-01', 'F');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_article` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `publication` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `commentaire` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(1, 'hard'),
(2, 'die'),
(3, 'soft'),
(4, 'ware');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `libelle_client` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commande_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `presta_id` int(11) NOT NULL,
  `date_reception` date NOT NULL,
  `heure_reception` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categorie_id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2276111CBCF5E72D` (`categorie_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `film`
--

INSERT INTO `film` (`id`, `categorie_id`, `titre`, `description`) VALUES
(1, 3, 'jack', 'le bokc'),
(2, 4, 'jokssss', 'book');

-- --------------------------------------------------------

--
-- Structure de la table `film_acteur`
--

CREATE TABLE IF NOT EXISTS `film_acteur` (
  `film_id` int(11) NOT NULL,
  `acteur_id` int(11) NOT NULL,
  PRIMARY KEY (`film_id`,`acteur_id`),
  KEY `IDX_8108EE68567F5183` (`film_id`),
  KEY `IDX_8108EE68DA6F574A` (`acteur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `infopers`
--

CREATE TABLE IF NOT EXISTS `infopers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nompers` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenompers` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numerostelephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adresse_mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numeros_cin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_delivrance_cin` date NOT NULL,
  `lieu_delivrance_cin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_enfant` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `situation_matrimoniale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `presta`
--

CREATE TABLE IF NOT EXISTS `presta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `presta_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `libelle_presta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom_presta` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `FK_2276111CBCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`);

--
-- Contraintes pour la table `film_acteur`
--
ALTER TABLE `film_acteur`
  ADD CONSTRAINT `FK_8108EE68567F5183` FOREIGN KEY (`film_id`) REFERENCES `film` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_8108EE68DA6F574A` FOREIGN KEY (`acteur_id`) REFERENCES `acteur` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
