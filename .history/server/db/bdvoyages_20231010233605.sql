-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 14 sep. 2023 à 16:39
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `e23bdfilms`
--
CREATE DATABASE IF NOT EXISTS `bdvoyages` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `bdproduits`;

-- --------------------------------------------------------

--
-- Structure de la table `voyages`
--

CREATE TABLE `voyages` (
  `code` int(11) NOT NULL,
  `depart` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `destination` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `transporteur` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `connexion`
--

INSERT INTO `connexion` (`code`, `depart`, `destination`, `transporteur`) VALUES
(1, 'Montreal', 'Quebec', 'Limocar Laurentides'),
(2, 'Montreal', 'Paris', 'Air France'),
(1, 'Montreal', 'New York', 'Air Canada');


-- --------------------------------------------------------





/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
