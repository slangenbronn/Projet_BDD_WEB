-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 17 Décembre 2017 à 10:13
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `symfony`
--

-- --------------------------------------------------------

--
-- Structure de la table `achat`
--

CREATE TABLE `achat` (
  `id` int(11) NOT NULL,
  `dateb` date DEFAULT NULL,
  `planning_id` int(11) NOT NULL,
  `ingredient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `archiveachat`
--

CREATE TABLE `archiveachat` (
  `id` int(11) NOT NULL,
  `datea` date DEFAULT NULL,
  `archiveplan_id` int(11) NOT NULL,
  `ingredient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `archiveplan`
--

CREATE TABLE `archiveplan` (
  `id` int(11) NOT NULL,
  `dateap` date DEFAULT NULL,
  `recette_id` int(11) DEFAULT NULL,
  `utilisateur_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nomc` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `descriptionc` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `etape`
--

CREATE TABLE `etape` (
  `id` int(11) NOT NULL,
  `descriptione` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `dureee` double DEFAULT NULL,
  `recette_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `lieni` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `recette_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `image`
--

INSERT INTO `image` (`id`, `lieni`, `recette_id`) VALUES
(1, 'Image/default-placeholder.png', 2),
(2, 'Image/default-placeholder.png', 1),
(7, 'Image/default-placeholder.png', 6),
(8, 'Image/default-placeholder.png', 7),
(9, 'Image/default-placeholder.png', 8),
(10, 'Image/default-placeholder.png', 9);

-- --------------------------------------------------------

--
-- Structure de la table `ingredient`
--

CREATE TABLE `ingredient` (
  `id` int(11) NOT NULL,
  `nomi` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dispodefaut` int(11) DEFAULT NULL,
  `typemesure` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `popularite` int(11) DEFAULT NULL,
  `sansgluten` int(11) DEFAULT NULL,
  `vegetarienne` int(11) DEFAULT NULL,
  `pescetarien` int(11) DEFAULT NULL,
  `utilisateur_id` int(11) DEFAULT NULL,
  `categorie_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `ingredient`
--

INSERT INTO `ingredient` (`id`, `nomi`, `dispodefaut`, `typemesure`, `popularite`, `sansgluten`, `vegetarienne`, `pescetarien`, `utilisateur_id`, `categorie_id`) VALUES
(3, 'pate', NULL, 'gramme', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'oeuf', NULL, 'litre', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'lardon', NULL, 'litre', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'tomate', NULL, 'gramme', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'lait', NULL, 'gramme', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'oignons', NULL, 'gramme', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'beurre', NULL, 'gramme', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `planning`
--

CREATE TABLE `planning` (
  `id` int(11) NOT NULL,
  `datep` date DEFAULT NULL,
  `utilisateur_id` int(11) DEFAULT NULL,
  `recette_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `quantite`
--

CREATE TABLE `quantite` (
  `id` int(11) NOT NULL,
  `quantiteing` double DEFAULT NULL,
  `calories` int(11) DEFAULT NULL,
  `ingredient_id` int(11) NOT NULL,
  `recette_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `quantite`
--

INSERT INTO `quantite` (`id`, `quantiteing`, `calories`, `ingredient_id`, `recette_id`) VALUES
(9, 500, NULL, 3, 8),
(10, 30000, NULL, 9, 8),
(11, 15, NULL, 7, 9),
(12, 10, NULL, 3, 9),
(13, 12, NULL, 4, 9),
(14, 13, NULL, 5, 9),
(15, 14, NULL, 6, 9),
(16, 16, NULL, 8, 9);

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

CREATE TABLE `recette` (
  `id` int(11) NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `difficulte` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL,
  `nombrepersonne` int(11) NOT NULL,
  `duree` int(11) NOT NULL,
  `nom` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `calories` int(11) DEFAULT NULL,
  `glucide` int(11) DEFAULT NULL,
  `lipide` int(11) DEFAULT NULL,
  `proteines` int(11) DEFAULT NULL,
  `selmineraux` int(11) DEFAULT NULL,
  `utilisateur_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `recette`
--

INSERT INTO `recette` (`id`, `description`, `difficulte`, `prix`, `nombrepersonne`, `duree`, `nom`, `calories`, `glucide`, `lipide`, `proteines`, `selmineraux`, `utilisateur_id`) VALUES
(1, 'ouai', 'Tres facile', 45, 45, 45, 'Recette', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'ouai', 'Tres facile', 45, 45, 45, 'Recette', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'sqd', 'Tres facile', 12, 12, 12, 'test', NULL, NULL, NULL, NULL, NULL, 2),
(7, 'aze', 'Tres facile', 47, 47, 47, 'admin', NULL, NULL, NULL, NULL, NULL, 2),
(8, 'Plat pour les gros', 'Tres facile', 5, 5, 15, 'Pate au beurre', NULL, NULL, NULL, NULL, NULL, 2),
(9, 'oui', 'Facile', 15, 5, 60, 'Lasagne', NULL, NULL, NULL, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Structure de la table `regime`
--

CREATE TABLE `regime` (
  `id` int(11) NOT NULL,
  `nomr` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `descriptionr` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `regime_recette`
--

CREATE TABLE `regime_recette` (
  `regime_id` int(11) NOT NULL,
  `recette_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `suit`
--

CREATE TABLE `suit` (
  `id` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `regime_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `nom`, `prenom`) VALUES
(1, 'paul', 'paul', 'paul@je.vais', 'paul@je.vais', 1, NULL, '$2y$13$4.LOmYR73pY6rw6pphS5puS7lVcxm8fvKecz4WEhT3h0ldeFblD6W', '2017-12-15 16:33:14', NULL, NULL, 'a:0:{}', 'paul', 'oignon'),
(2, 'admin', 'admin', 'admin@admin.admin', 'admin@admin.admin', 1, NULL, '$2y$13$sG6JzO89ZSLkskrEQc676uUOKEIUnEMy5xWMHmUGrbioBVlICi3v6', '2017-12-17 10:02:57', NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', 'flo', 'gui'),
(3, 'Dieu', 'dieu', 'dieu@dieu.dieu', 'dieu@dieu.dieu', 1, NULL, '$2y$13$jKXOy9pBTA3Fp6BT3dSRQOtG/000w5AlG1YSXE5BNDE8g.Z00ApLa', '2017-12-17 10:09:38', NULL, NULL, 'a:0:{}', 'jean', 'michel');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_ingredient`
--

CREATE TABLE `utilisateur_ingredient` (
  `utilisateur_id` int(11) NOT NULL,
  `ingredient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `lienv` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `recette_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `achat`
--
ALTER TABLE `achat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_26A984563D865311` (`planning_id`),
  ADD KEY `IDX_26A98456933FE08C` (`ingredient_id`);

--
-- Index pour la table `archiveachat`
--
ALTER TABLE `archiveachat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_4BA922D6ECAFF10D` (`archiveplan_id`),
  ADD KEY `IDX_4BA922D6933FE08C` (`ingredient_id`);

--
-- Index pour la table `archiveplan`
--
ALTER TABLE `archiveplan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_18306889312FE9` (`recette_id`),
  ADD KEY `IDX_183068FB88E14F` (`utilisateur_id`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etape`
--
ALTER TABLE `etape`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_285F75DD89312FE9` (`recette_id`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C53D045F89312FE9` (`recette_id`);

--
-- Index pour la table `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_6BAF7870FB88E14F` (`utilisateur_id`),
  ADD KEY `IDX_6BAF7870BCF5E72D` (`categorie_id`);

--
-- Index pour la table `planning`
--
ALTER TABLE `planning`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D499BFF6FB88E14F` (`utilisateur_id`),
  ADD KEY `IDX_D499BFF689312FE9` (`recette_id`);

--
-- Index pour la table `quantite`
--
ALTER TABLE `quantite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8BF24A79933FE08C` (`ingredient_id`),
  ADD KEY `IDX_8BF24A7989312FE9` (`recette_id`);

--
-- Index pour la table `recette`
--
ALTER TABLE `recette`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_49BB6390FB88E14F` (`utilisateur_id`);

--
-- Index pour la table `regime`
--
ALTER TABLE `regime`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `regime_recette`
--
ALTER TABLE `regime_recette`
  ADD PRIMARY KEY (`regime_id`,`recette_id`),
  ADD KEY `IDX_D4095CF735E7D534` (`regime_id`),
  ADD KEY `IDX_D4095CF789312FE9` (`recette_id`);

--
-- Index pour la table `suit`
--
ALTER TABLE `suit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E9A31F1EFB88E14F` (`utilisateur_id`),
  ADD KEY `IDX_E9A31F1E35E7D534` (`regime_id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_9B80EC6492FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_9B80EC64A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_9B80EC64C05FB297` (`confirmation_token`);

--
-- Index pour la table `utilisateur_ingredient`
--
ALTER TABLE `utilisateur_ingredient`
  ADD PRIMARY KEY (`utilisateur_id`,`ingredient_id`),
  ADD KEY `IDX_5917BA66FB88E14F` (`utilisateur_id`),
  ADD KEY `IDX_5917BA66933FE08C` (`ingredient_id`);

--
-- Index pour la table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7CC7DA2C89312FE9` (`recette_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `achat`
--
ALTER TABLE `achat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `archiveachat`
--
ALTER TABLE `archiveachat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `archiveplan`
--
ALTER TABLE `archiveplan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `etape`
--
ALTER TABLE `etape`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `ingredient`
--
ALTER TABLE `ingredient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `planning`
--
ALTER TABLE `planning`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `quantite`
--
ALTER TABLE `quantite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `recette`
--
ALTER TABLE `recette`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `regime`
--
ALTER TABLE `regime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `suit`
--
ALTER TABLE `suit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `achat`
--
ALTER TABLE `achat`
  ADD CONSTRAINT `FK_26A984563D865311` FOREIGN KEY (`planning_id`) REFERENCES `planning` (`id`),
  ADD CONSTRAINT `FK_26A98456933FE08C` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredient` (`id`);

--
-- Contraintes pour la table `archiveachat`
--
ALTER TABLE `archiveachat`
  ADD CONSTRAINT `FK_4BA922D6933FE08C` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredient` (`id`),
  ADD CONSTRAINT `FK_4BA922D6ECAFF10D` FOREIGN KEY (`archiveplan_id`) REFERENCES `archiveplan` (`id`);

--
-- Contraintes pour la table `archiveplan`
--
ALTER TABLE `archiveplan`
  ADD CONSTRAINT `FK_18306889312FE9` FOREIGN KEY (`recette_id`) REFERENCES `recette` (`id`),
  ADD CONSTRAINT `FK_183068FB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `etape`
--
ALTER TABLE `etape`
  ADD CONSTRAINT `FK_285F75DD89312FE9` FOREIGN KEY (`recette_id`) REFERENCES `recette` (`id`);

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `FK_C53D045F89312FE9` FOREIGN KEY (`recette_id`) REFERENCES `recette` (`id`);

--
-- Contraintes pour la table `ingredient`
--
ALTER TABLE `ingredient`
  ADD CONSTRAINT `FK_6BAF7870BCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`),
  ADD CONSTRAINT `FK_6BAF7870FB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `planning`
--
ALTER TABLE `planning`
  ADD CONSTRAINT `FK_D499BFF689312FE9` FOREIGN KEY (`recette_id`) REFERENCES `recette` (`id`),
  ADD CONSTRAINT `FK_D499BFF6FB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `quantite`
--
ALTER TABLE `quantite`
  ADD CONSTRAINT `FK_8BF24A7989312FE9` FOREIGN KEY (`recette_id`) REFERENCES `recette` (`id`),
  ADD CONSTRAINT `FK_8BF24A79933FE08C` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredient` (`id`);

--
-- Contraintes pour la table `recette`
--
ALTER TABLE `recette`
  ADD CONSTRAINT `FK_49BB6390FB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `regime_recette`
--
ALTER TABLE `regime_recette`
  ADD CONSTRAINT `FK_D4095CF735E7D534` FOREIGN KEY (`regime_id`) REFERENCES `regime` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_D4095CF789312FE9` FOREIGN KEY (`recette_id`) REFERENCES `recette` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `suit`
--
ALTER TABLE `suit`
  ADD CONSTRAINT `FK_E9A31F1E35E7D534` FOREIGN KEY (`regime_id`) REFERENCES `regime` (`id`),
  ADD CONSTRAINT `FK_E9A31F1EFB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `utilisateur_ingredient`
--
ALTER TABLE `utilisateur_ingredient`
  ADD CONSTRAINT `FK_5917BA66933FE08C` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredient` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_5917BA66FB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `FK_7CC7DA2C89312FE9` FOREIGN KEY (`recette_id`) REFERENCES `recette` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
