-- phpMyAdmin SQL Dump
-- version 3.1.2deb1ubuntu0.2
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Sam 01 Octobre 2016 à 20:37
-- Version du serveur: 5.0.75
-- Version de PHP: 5.2.6-3ubuntu4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de données: `acleret`
--

-- --------------------------------------------------------

--
-- Structure de la table `ATELIER`
--

CREATE TABLE IF NOT EXISTS `ATELIER` (
  `id` int(11) NOT NULL auto_increment,
  `titre` varchar(60) NOT NULL,
  `date` datetime NOT NULL,
  `lieu` varchar(120) NOT NULL,
  `laboratoire` varchar(60) NOT NULL,
  `duree` time NOT NULL,
  `resume` text NOT NULL,
  `capacite` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `ATELIER`
--

