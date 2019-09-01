-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Dim 01 Septembre 2019 à 22:53
-- Version du serveur :  10.1.38-MariaDB-0+deb9u1
-- Version de PHP :  7.0.33-0+deb9u3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `shop`
--

-- --------------------------------------------------------

--
-- Structure de la table `boards`
--

CREATE TABLE `boards` (
  `id` int(11) NOT NULL,
  `boards` text NOT NULL,
  `boards_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='latin1_swedish_ci';

-- --------------------------------------------------------

--
-- Structure de la table `boards_requirements`
--

CREATE TABLE `boards_requirements` (
  `id` int(5) NOT NULL,
  `rep_topo` varchar(40) NOT NULL,
  `boards_id` int(5) NOT NULL,
  `id_composant` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `boitierComposant`
--

CREATE TABLE `boitierComposant` (
  `id` int(5) NOT NULL,
  `typeBoitier` varchar(40) NOT NULL,
  `id_typeBoitier` int(11) NOT NULL,
  `printBoitierComposant` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `boitierComposant`
--

INSERT INTO `boitierComposant` (`id`, `typeBoitier`, `id_typeBoitier`, `printBoitierComposant`) VALUES
(1, '0603', 0, 1),
(2, '0805', 1, 1),
(3, '1206', 2, 1),
(4, 'sot-23', 3, 1),
(5, 'sot-323', 4, 1),
(6, 'soic-8', 5, 1),
(7, 'soic-14', 6, 1),
(8, 'soic-16', 7, 1);

-- --------------------------------------------------------

--
-- Structure de la table `composant`
--

CREATE TABLE `composant` (
  `id` int(11) NOT NULL,
  `valeur_composant` varchar(40) NOT NULL,
  `boitier_composant` varchar(40) NOT NULL,
  `id_typeComposant` int(11) NOT NULL,
  `stock_composant` int(6) NOT NULL,
  `id_composant` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `composant`
--

INSERT INTO `composant` (`id`, `valeur_composant`, `boitier_composant`, `id_typeComposant`, `stock_composant`, `id_composant`) VALUES
(1, '1k', '0', 0, 1, 100001),
(2, '10k', '0', 0, 1, 100002),
(3, '100k', '0', 0, 0, 100003),
(4, '1', '0', 0, 0, 100004),
(5, '10', '0', 0, 0, 100005),
(6, '100', '0', 0, 0, 100006),
(7, '1M', '0', 0, 0, 100007),
(8, '10M', '0', 0, 0, 100008),
(9, '22', '0', 0, 0, 100009),
(10, '220', '0', 0, 0, 100010),
(11, '2.2k', '0', 0, 0, 100011),
(12, '22k', '0', 0, 0, 100012),
(13, '220k', '0', 0, 0, 100013),
(14, '100n', '0', 1, 0, 101001),
(15, '10n', '0', 1, 1, 101002),
(16, '1n', '0', 1, 0, 101003),
(17, '22n', '0', 1, 0, 101004),
(18, '220n', '0', 1, 0, 101005),
(19, '330n', '0', 1, 0, 101006),
(20, '33n', '0', 1, 0, 101007),
(21, '47n', '0', 1, 0, 101008),
(22, '4.7n', '0', 1, 0, 101009),
(23, 'vert', '1', 4, 0, 114001),
(24, 'jaune', '1', 4, 0, 114002),
(25, 'rouge', '1', 4, 0, 114003),
(28, '1N4148', '3', 3, 1, 133001),
(29, 'N148', '2', 3, 1, 123001),
(30, '3.3n', '0', 1, 1, 101020),
(33, '1µ', '2', 2, 10, 122001);

-- --------------------------------------------------------

--
-- Structure de la table `typeComposant`
--

CREATE TABLE `typeComposant` (
  `id` int(11) NOT NULL,
  `typecomposant` varchar(40) NOT NULL,
  `numTypeComposant` int(5) NOT NULL,
  `printTypeComposant` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `typeComposant`
--

INSERT INTO `typeComposant` (`id`, `typecomposant`, `numTypeComposant`, `printTypeComposant`) VALUES
(1, 'resistance', 0, 0),
(2, 'condensateur', 1, 0),
(3, 'inductance', 2, 0),
(4, 'diode', 3, 1),
(5, 'led', 4, 0);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom_utilisateur` varchar(40) NOT NULL,
  `mot_de_passe` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom_utilisateur`, `mot_de_passe`) VALUES
(1, 'toto', '1234');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `boards`
--
ALTER TABLE `boards`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `boards_requirements`
--
ALTER TABLE `boards_requirements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `boitierComposant`
--
ALTER TABLE `boitierComposant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `composant`
--
ALTER TABLE `composant`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uk_composant` (`id_composant`);

--
-- Index pour la table `typeComposant`
--
ALTER TABLE `typeComposant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `boards`
--
ALTER TABLE `boards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `boards_requirements`
--
ALTER TABLE `boards_requirements`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `boitierComposant`
--
ALTER TABLE `boitierComposant`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `composant`
--
ALTER TABLE `composant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT pour la table `typeComposant`
--
ALTER TABLE `typeComposant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
