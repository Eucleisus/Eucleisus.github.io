-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 24 Avril 2017 à 16:08
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `inf13`
--

-- --------------------------------------------------------

--
-- Structure de la table `communique`
--

CREATE TABLE IF NOT EXISTS `communique` (
  `cmm_id` int(11) NOT NULL AUTO_INCREMENT,
  `cmm_date_pub` date NOT NULL,
  `cmm_date_exp` date NOT NULL,
  `cmm_titre` varchar(255) NOT NULL,
  `cmm_contenu` text NOT NULL,
  PRIMARY KEY (`cmm_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `communique`
--

INSERT INTO `communique` (`cmm_id`, `cmm_date_pub`, `cmm_date_exp`, `cmm_titre`, `cmm_contenu`) VALUES
(1, '2016-03-01', '2035-03-01', 'Désormais c''est 120 crédit pour aller au niveau 3', 'Le nouveau recteur Pr. Tsafack Nanfosso l''anné dernière a signé une note disant que pour les étudiants du niveau 2, désormais seul les étudiants ayant acquis le quota de 120 crédit seront admis en licence 3.'),
(3, '2017-04-24', '2018-09-01', 'L''operation un étudiant une machine se poursuit', 'La semaine dernière, (semaine du 17/04/2017) L''administration a débuté avec les enregistrement. '),
(5, '2009-03-01', '2035-03-01', 'ORGANISATION DES ETUDES', 'Le système LMD a été appliqué de façon progressive à la Faculté des Sciences depuis l’année académique\r\n2006/2007 et depuis l’année académique 2009/2010, il couvre l’ensemble des programmes et des cycles de\r\nformation. Les études sont organisées en cycles de formation et filières.');

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `faq_sujet` varchar(255) NOT NULL,
  `faq_createur_id` int(11) NOT NULL,
  `faq_statu` varchar(255) NOT NULL,
  `faq_date` date NOT NULL,
  `faq_filiere` varchar(255) NOT NULL,
  `faq_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`faq_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `fax`
--

CREATE TABLE IF NOT EXISTS `fax` (
  `fax_nom` varchar(255) NOT NULL,
  `fax_chemin` varchar(255) NOT NULL,
  `fax_faculte` varchar(255) NOT NULL,
  `fax_filiere` varchar(255) NOT NULL,
  `fax_telecharger` int(11) NOT NULL,
  `fax_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`fax_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `menbre`
--

CREATE TABLE IF NOT EXISTS `menbre` (
  `menbre_id` int(11) NOT NULL AUTO_INCREMENT,
  `menbre_pseudo` varchar(20) NOT NULL,
  `menbre_filiere` varchar(255) NOT NULL,
  `menbre_chemin_logo` varchar(255) NOT NULL,
  `menbre_mdp` varchar(40) NOT NULL,
  `menbre_email` varchar(255) NOT NULL,
  `menbre_point` int(11) NOT NULL,
  `menbre_statu` tinyint(1) NOT NULL,
  PRIMARY KEY (`menbre_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `msg_auteur` varchar(20) NOT NULL,
  `msg_date` date NOT NULL,
  `msg_contenu` text NOT NULL,
  `msg_titre` varchar(255) NOT NULL,
  `msg_id_faq` int(11) NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
