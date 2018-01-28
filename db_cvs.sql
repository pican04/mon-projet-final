-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 27 jan. 2018 à 22:34
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_cvs`
--

-- --------------------------------------------------------

--
-- Structure de la table `codeuse`
--

CREATE TABLE `codeuse` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `datenaissance` date NOT NULL,
  `resume` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` int(11) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `codeuse`
--

INSERT INTO `codeuse` (`id`, `nom`, `prenom`, `datenaissance`, `resume`, `email`, `telephone`, `mdp`, `image`) VALUES
(1, 'gueu', 'nadia', '1991-03-30', 'bonjour', 'gueunadia@gmail.com', 7659403, 'gkghozeihlgnioglh', 'Black-Businesswoman-with-COmputer-and-Cell-Phone.png'),
(2, 'gueu', 'nadia', '1991-03-30', 'bonjour', 'gueunadia@gmail.com', 40495204, 'yfglohilmojrehp', 'DOWUgw1X4AABpBj.jpg'),
(3, 'kahÃ©', 'fabien', '2000-05-02', 'bonjour', 'gueunadia@gmail.com', 87429409, 'vhkholijmpi', 'Capture bienvenue.png'),
(4, 'kahÃ©', 'fabien', '2000-06-02', 'bonjour', 'gueunadia@gmail.com', 40495204, 'kghmiohlpoezhgj', 'gh.jpg'),
(5, 'gueu', 'nadia', '2000-10-02', 'hello', 'gueunadia@gmail.com', 40495204, 'bonjour', 'Black-Businesswoman-with-COmputer-and-Cell-Phone.png'),
(6, 'ipotÃ©', 'armel', '1968-06-11', 'je suis un jeune dynamique', 'ipote@gmail.com', 45789632, 'hello', 'Black-Businesswoman-with-COmputer-and-Cell-Phone.png'),
(7, 'ipotÃ©', 'armel', '1968-06-11', 'je suis un jeune dynamique', 'ipote@gmail.com', 45789632, 'hello', 'Black-Businesswoman-with-COmputer-and-Cell-Phone.png'),
(8, 'ipotÃ©', 'armel', '1968-06-11', 'je suis un jeune dynamique', 'ipote@gmail.com', 45789632, 'hello', 'Black-Businesswoman-with-COmputer-and-Cell-Phone.png');

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

CREATE TABLE `cv` (
  `id` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL,
  `id_codeuse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cv`
--

INSERT INTO `cv` (`id`, `facebook`, `twitter`, `github`, `id_codeuse`) VALUES
(2, '', '', 'gueunadia@gmail.com', 0),
(3, '', '', 'gueunadia@gmail.com', 0),
(4, '', '', 'gueunadia@gmail.com', 0),
(5, '', '', 'nadia@gmail.com', 0),
(6, '', '', 'xgjcyichjc', 0),
(7, 'hjvhkjvjb', 'xjkhcyj,v', 'xgjcyichjc', 0),
(8, 'hjvhkjvjb', 'xjkhcyj,v', 'xgjcyichjc', 0);

-- --------------------------------------------------------

--
-- Structure de la table `diplomes`
--

CREATE TABLE `diplomes` (
  `id` int(11) NOT NULL,
  `annee` date NOT NULL,
  `libellediplome` varchar(255) NOT NULL,
  `ecole` varchar(255) NOT NULL,
  `id_cv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `diplomes`
--

INSERT INTO `diplomes` (`id`, `annee`, `libellediplome`, `ecole`, `id_cv`) VALUES
(3, '2015-03-02', 'licence', 'istc', 0),
(4, '2015-05-10', 'MASTER', 'istc', 0),
(5, '2018-01-01', 'certificat', 'AKENDEWA', 0);

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(11) NOT NULL,
  `titreposte` varchar(255) NOT NULL,
  `datedebut` date NOT NULL,
  `datefin` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `entreprise` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `experiences`
--

INSERT INTO `experiences` (`id`, `titreposte`, `datedebut`, `datefin`, `description`, `entreprise`) VALUES
(7, 'developpeur', '2005-02-02', '2010-05-01', 'hhkhiojliof', 'akendewa'),
(8, 'codeuse', '2015-10-02', '2017-05-20', 'hum', 'loko'),
(9, 'codeuse', '2015-10-02', '2017-05-20', 'hum', 'loko');

-- --------------------------------------------------------

--
-- Structure de la table `interet`
--

CREATE TABLE `interet` (
  `id` int(11) NOT NULL,
  `titreinteret` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `interet`
--

INSERT INTO `interet` (`id`, `titreinteret`, `description`) VALUES
(10, 'sport', 'jaime le sport'),
(11, 'shoping', 'faire des achat mon hobbit'),
(12, 'Sport', 'jaime le sport'),
(13, 'Sport', 'jaime le sport'),
(14, 'Cuisine', 'miam miam'),
(15, 'Shoping', 'les achats ma passion');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `codeuse`
--
ALTER TABLE `codeuse`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_codeuse` (`id_codeuse`);

--
-- Index pour la table `diplomes`
--
ALTER TABLE `diplomes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `interet`
--
ALTER TABLE `interet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `codeuse`
--
ALTER TABLE `codeuse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `diplomes`
--
ALTER TABLE `diplomes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `interet`
--
ALTER TABLE `interet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `diplomes`
--
ALTER TABLE `diplomes`
  ADD CONSTRAINT `diplomes_ibfk_1` FOREIGN KEY (`id`) REFERENCES `cv` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
