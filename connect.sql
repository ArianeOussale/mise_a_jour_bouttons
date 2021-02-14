-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 28 jan. 2021 à 22:43
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mabase`
--

-- --------------------------------------------------------

--
-- Structure de la table `connect`
--

CREATE TABLE `connect` (
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `NomUtilisateur` varchar(50) NOT NULL,
  `MotDePasse` int(11) NOT NULL,
  `Confirm_MotDePasse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `connect`
--

INSERT INTO `connect` (`nom`, `prenom`, `NomUtilisateur`, `MotDePasse`, `Confirm_MotDePasse`) VALUES
('DOUKOURE', 'morning', 'ariane', 1234, 1234);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `connect`
--
ALTER TABLE `connect`
  ADD PRIMARY KEY (`NomUtilisateur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
