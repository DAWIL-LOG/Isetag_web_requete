-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 22 juil. 2021 à 16:24
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dbrequete`
--

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE `matiere` (
  `ID` int(11) NOT NULL,
  `matiere` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`ID`, `matiere`) VALUES
(1, 'Mathematique'),
(2, 'physique');

-- --------------------------------------------------------

--
-- Structure de la table `semestre1`
--

CREATE TABLE `semestre1` (
  `ID` int(11) NOT NULL,
  `matiere` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `semestre1`
--

INSERT INTO `semestre1` (`ID`, `matiere`) VALUES
(1, 'Chimie');

-- --------------------------------------------------------

--
-- Structure de la table `semestre2`
--

CREATE TABLE `semestre2` (
  `ID` int(11) NOT NULL,
  `matiere` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `semestre2`
--

INSERT INTO `semestre2` (`ID`, `matiere`) VALUES
(1, 'info');

-- --------------------------------------------------------

--
-- Structure de la table `semestre3`
--

CREATE TABLE `semestre3` (
  `ID` int(11) NOT NULL,
  `matiere` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `semestre3`
--

INSERT INTO `semestre3` (`ID`, `matiere`) VALUES
(1, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `semestre1`
--
ALTER TABLE `semestre1`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `semestre2`
--
ALTER TABLE `semestre2`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `semestre3`
--
ALTER TABLE `semestre3`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `semestre1`
--
ALTER TABLE `semestre1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `semestre2`
--
ALTER TABLE `semestre2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `semestre3`
--
ALTER TABLE `semestre3`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
