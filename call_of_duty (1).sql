-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 11 oct. 2023 à 06:27
-- Version du serveur : 8.0.31
-- Version de PHP : 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `call_of_duty`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id_articles` int NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `titre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `contenu` text NOT NULL,
  `date_publication` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `categorie` int NOT NULL,
  `id_auteurs` int NOT NULL,
  PRIMARY KEY (`id_articles`),
  KEY `FK_articles_auteurs` (`id_auteurs`),
  KEY `FK_articles_tags` (`categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id_articles`, `image`, `titre`, `contenu`, `date_publication`, `categorie`, `id_auteurs`) VALUES
(5, 'MWII-S05-RELOADED-ANNOUNCEMENT-TOUT-2.jpg', 'MWII', 'Call Of Duty \r\nSEASON 5 RELACHER', '2023-09-21 04:53:45', 1, 10),
(6, 'BOCW-S2-Announcement-TOUT.jpg', 'MODERN WARFARE II', 'Date de sortie a jour', '2023-09-22 11:09:18', 1, 10),
(7, 'MWII-LAUNCH-INTEL-TOUT.jpg', 'MWII', 'Battle Historique', '2023-09-20 06:03:25', 1, 10);

-- --------------------------------------------------------

--
-- Structure de la table `articles_tags`
--

DROP TABLE IF EXISTS `articles_tags`;
CREATE TABLE IF NOT EXISTS `articles_tags` (
  `id_articles_tags` int NOT NULL AUTO_INCREMENT,
  `id_articles` int NOT NULL,
  `id_tags` int NOT NULL,
  PRIMARY KEY (`id_articles_tags`),
  KEY `FK_articles_tags_tags` (`id_tags`),
  KEY `FK_articles_tags_articles` (`id_articles`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `auteurs`
--

DROP TABLE IF EXISTS `auteurs`;
CREATE TABLE IF NOT EXISTS `auteurs` (
  `id_auteurs` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `bio` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(30) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `id_roles` int NOT NULL,
  PRIMARY KEY (`id_auteurs`),
  KEY `FK_auteurs_roles` (`id_roles`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `auteurs`
--

INSERT INTO `auteurs` (`id_auteurs`, `nom`, `bio`, `email`, `mdp`, `id_roles`) VALUES
(10, 'john', '', 'johnnosilegloire@gmail.com', '$2y$10$bhItMKbL0vPTynxYc4qp0ODRlvNbs/9cgrtfEm3fRU5WLgmI60xF6', 2);

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id_commentaires` int NOT NULL AUTO_INCREMENT,
  `contenu` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_articles` int NOT NULL,
  `id_auteurs` int NOT NULL,
  PRIMARY KEY (`id_commentaires`),
  KEY `FK_commentaires_articles` (`id_articles`),
  KEY `FK_commentaires_auteurs` (`id_auteurs`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id_contacts` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contenu` text NOT NULL,
  PRIMARY KEY (`id_contacts`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id_roles` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  PRIMARY KEY (`id_roles`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id_roles`, `nom`) VALUES
(1, 'visiteur'),
(2, 'admin'),
(3, 'abonné');

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id_tags` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  PRIMARY KEY (`id_tags`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tags`
--

INSERT INTO `tags` (`id_tags`, `nom`) VALUES
(1, 'FPS'),
(2, 'ACTU'),
(3, 'VIOLENCES');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `FK_articles_auteurs` FOREIGN KEY (`id_auteurs`) REFERENCES `auteurs` (`id_auteurs`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_articles_tags` FOREIGN KEY (`categorie`) REFERENCES `tags` (`id_tags`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `articles_tags`
--
ALTER TABLE `articles_tags`
  ADD CONSTRAINT `FK_articles_tags_articles` FOREIGN KEY (`id_articles`) REFERENCES `articles` (`id_articles`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_articles_tags_tags` FOREIGN KEY (`id_tags`) REFERENCES `tags` (`id_tags`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `auteurs`
--
ALTER TABLE `auteurs`
  ADD CONSTRAINT `FK_auteurs_roles` FOREIGN KEY (`id_roles`) REFERENCES `roles` (`id_roles`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `FK_commentaires_articles` FOREIGN KEY (`id_articles`) REFERENCES `articles` (`id_articles`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_commentaires_auteurs` FOREIGN KEY (`id_auteurs`) REFERENCES `auteurs` (`id_auteurs`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
