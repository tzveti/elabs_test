-- phpMyAdmin SQL Dump
-- version 3.2.5
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Jeu 17 Février 2011 à 12:16
-- Version du serveur: 5.1.44
-- Version de PHP: 5.3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `firstname` text NOT NULL,
    `surname` text NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` VALUES(1, 'Joe', 'Allen');
INSERT INTO `users` VALUES(2, 'Jim', 'Jarmusch');
INSERT INTO `users` VALUES(3, 'Robin', 'Hood');

-- --------------------------------------------------------

--
-- Structure de la table `users_meta`
--

CREATE TABLE `users_meta` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `key` text NOT NULL,
    `value` text NOT NULL,
    `user_id` int(11) NOT NULL,
    PRIMARY KEY (`id`),
    KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `users_meta`
--

INSERT INTO `users_meta` VALUES(1, 'avatar', 'http://ecomobilite.tv//wp-content/uploads/avere-voiture.jpg', 1);
INSERT INTO `users_meta` VALUES(2, 'avatar', 'http://ecomobilite.tv/wp-content/uploads/universiteit_gent.gif', 2);
INSERT INTO `users_meta` VALUES(3, 'avatar', 'http://ecomobilite.tv//wp-content/uploads/eme.jpg', 3);
INSERT INTO `users_meta` VALUES(4, 'tags', 'person, client, stakeholder, company', 1);
INSERT INTO `users_meta` VALUES(7, 'tags', 'yammer, quora, twitter, facebook', 2);
INSERT INTO `users_meta` VALUES(9, 'tags', 'paris, nantes, marseille, strasbourg', 3);
