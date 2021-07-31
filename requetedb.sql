-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 31 juil. 2021 à 18:18
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `requetedb`
--

-- --------------------------------------------------------

--
-- Structure de la table `igl`
--

CREATE TABLE `igl` (
  `ID` int(11) NOT NULL,
  `matiere` varchar(100) NOT NULL,
  `semestre` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `igl`
--

INSERT INTO `igl` (`ID`, `matiere`, `semestre`) VALUES
(1, 'mathématique', 1),
(2, 'physique', 2),
(3, 'Introduction au base de données', 2),
(4, 'Système d\'information I', 1);

-- --------------------------------------------------------

--
-- Structure de la table `res`
--

CREATE TABLE `res` (
  `ID` int(11) NOT NULL,
  `matiere` varchar(100) NOT NULL,
  `semestre` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `res`
--

INSERT INTO `res` (`ID`, `matiere`, `semestre`) VALUES
(1, 'Architecture des ordinateurs', 1),
(2, 'Câblage', 2),
(3, 'Telecom', 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `ID` int(11) NOT NULL,
  `matricule` varchar(8) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `date_inscription` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`ID`, `matricule`, `nom`, `password`, `date_inscription`) VALUES
(1, 'IST01IGL', 'DAWIL', 'Isetag', '2021-07-30 15:09:40'),
(2, 'IST02IGL', 'NONO', 'Isetag', '2021-07-30 15:29:49');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `igl`
--
ALTER TABLE `igl`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `res`
--
ALTER TABLE `res`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `igl`
--
ALTER TABLE `igl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `res`
--
ALTER TABLE `res`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
