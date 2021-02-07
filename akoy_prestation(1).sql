-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  Dim 07 fév. 2021 à 23:19
-- Version du serveur :  10.3.15-MariaDB
-- Version de PHP :  7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `akoy_prestation`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories_publication`
--

CREATE TABLE `categories_publication` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

CREATE TABLE `cv` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `user_create` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL,
  `statut` int(11) NOT NULL DEFAULT 1,
  `file` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ecole`
--

CREATE TABLE `ecole` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `ville` int(11) NOT NULL,
  `user_create` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `statut` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `file_url` varchar(255) NOT NULL,
  `file_type` varchar(20) NOT NULL,
  `file_size` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `statut` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `action_url` varchar(100) DEFAULT NULL,
  `sub_module` int(11) DEFAULT NULL,
  `is_menu` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `statut` int(11) NOT NULL DEFAULT 1,
  `user_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`id`, `name`, `icon`, `description`, `action_url`, `sub_module`, `is_menu`, `created_at`, `updated_at`, `statut`, `user_create`) VALUES
(1, 'Administration', NULL, 'Le module d\'administration', NULL, NULL, 1, '2021-02-01 21:10:50', NULL, 1, 1),
(2, 'Configuration', 'fa-gears', 'Configuration de l\'application', NULL, NULL, 1, '2021-02-01 21:10:50', NULL, 1, 1),
(5, 'Rôle', NULL, 'Gestion des rôle', 'role', 1, 1, '2021-02-01 21:12:33', NULL, 1, 1),
(6, 'Module', NULL, 'Gestion des modules', 'module', 1, 1, '2021-02-01 21:12:33', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `module_role`
--

CREATE TABLE `module_role` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `module_role`
--

INSERT INTO `module_role` (`id`, `role_id`, `module_id`, `create_at`) VALUES
(1, 1, 1, '2021-02-01 21:14:26'),
(2, 1, 2, '2021-02-01 21:14:26'),
(3, 1, 5, '2021-02-01 21:14:26'),
(4, 1, 6, '2021-02-01 21:14:26'),
(5, 2, 1, '2021-02-01 21:14:26'),
(6, 2, 2, '2021-02-01 21:14:26'),
(7, 2, 5, '2021-02-01 21:14:26'),
(8, 2, 6, '2021-02-01 21:14:26');

-- --------------------------------------------------------

--
-- Structure de la table `publications`
--

CREATE TABLE `publications` (
  `id` int(11) NOT NULL,
  `type_publication` int(11) NOT NULL,
  `category_publication` int(11) DEFAULT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `lieu` varchar(255) DEFAULT NULL,
  `date_annee_bourse` varchar(255) DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `ecole` int(11) DEFAULT NULL,
  `date_elaboration` varchar(50) DEFAULT NULL,
  `file` int(11) DEFAULT NULL,
  `user_create` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `statut` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'Super Administrateur', 'Il a tout les droits'),
(2, 'Administrateur', 'Il a tout les droits');

-- --------------------------------------------------------

--
-- Structure de la table `types_user`
--

CREATE TABLE `types_user` (
  `id` int(11) NOT NULL,
  `label` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `types_user`
--

INSERT INTO `types_user` (`id`, `label`) VALUES
(1, 'Super Administrateur'),
(2, 'Administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `type_publication`
--

CREATE TABLE `type_publication` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone_number` varchar(13) NOT NULL,
  `type_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `photo` int(11) DEFAULT NULL,
  `role` int(11) NOT NULL,
  `password_` varchar(80) DEFAULT NULL,
  `statut` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone_number`, `type_user`, `created_at`, `updated_at`, `photo`, `role`, `password_`, `statut`) VALUES
(1, 'ZALKILPHILY ABASS', 'Mahaman Tahirou', '+22796962435', 1, '2021-02-01 21:08:38', '2021-02-06 11:22:01', NULL, 1, '$2y$10$cAn46Cpd.286rfpurY490O2zcLxx1o2OkoooFUbsbQ6BrZCssvXRG', 1);

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

CREATE TABLE `villes` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories_publication`
--
ALTER TABLE `categories_publication`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `file` (`file`),
  ADD KEY `user_create` (`user_create`);

--
-- Index pour la table `ecole`
--
ALTER TABLE `ecole`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ville` (`ville`),
  ADD KEY `user_create` (`user_create`);

--
-- Index pour la table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_at` (`created_at`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`),
  ADD KEY `action_url` (`action_url`),
  ADD KEY `user_create` (`user_create`);

--
-- Index pour la table `module_role`
--
ALTER TABLE `module_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `module_id` (`module_id`);

--
-- Index pour la table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `file` (`file`),
  ADD KEY `user_create` (`user_create`),
  ADD KEY `category_publication` (`category_publication`),
  ADD KEY `type_publication` (`type_publication`),
  ADD KEY `ecole` (`ecole`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `types_user`
--
ALTER TABLE `types_user`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_publication`
--
ALTER TABLE `type_publication`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `phone_number` (`phone_number`),
  ADD KEY `photo` (`photo`),
  ADD KEY `role` (`role`),
  ADD KEY `type_user` (`type_user`);

--
-- Index pour la table `villes`
--
ALTER TABLE `villes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories_publication`
--
ALTER TABLE `categories_publication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ecole`
--
ALTER TABLE `ecole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `module_role`
--
ALTER TABLE `module_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `types_user`
--
ALTER TABLE `types_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `type_publication`
--
ALTER TABLE `type_publication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `villes`
--
ALTER TABLE `villes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cv`
--
ALTER TABLE `cv`
  ADD CONSTRAINT `cv_ibfk_1` FOREIGN KEY (`file`) REFERENCES `files` (`id`),
  ADD CONSTRAINT `cv_ibfk_2` FOREIGN KEY (`user_create`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `ecole`
--
ALTER TABLE `ecole`
  ADD CONSTRAINT `ecole_ibfk_1` FOREIGN KEY (`ville`) REFERENCES `villes` (`id`),
  ADD CONSTRAINT `ecole_ibfk_2` FOREIGN KEY (`user_create`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `module`
--
ALTER TABLE `module`
  ADD CONSTRAINT `module_ibfk_1` FOREIGN KEY (`user_create`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `module_role`
--
ALTER TABLE `module_role`
  ADD CONSTRAINT `module_role_ibfk_1` FOREIGN KEY (`module_id`) REFERENCES `module` (`id`),
  ADD CONSTRAINT `module_role_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Contraintes pour la table `publications`
--
ALTER TABLE `publications`
  ADD CONSTRAINT `publications_ibfk_1` FOREIGN KEY (`category_publication`) REFERENCES `categories_publication` (`id`),
  ADD CONSTRAINT `publications_ibfk_2` FOREIGN KEY (`file`) REFERENCES `files` (`id`),
  ADD CONSTRAINT `publications_ibfk_6` FOREIGN KEY (`ecole`) REFERENCES `ecole` (`id`),
  ADD CONSTRAINT `publications_ibfk_7` FOREIGN KEY (`type_publication`) REFERENCES `type_publication` (`id`),
  ADD CONSTRAINT `publications_ibfk_8` FOREIGN KEY (`user_create`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`type_user`) REFERENCES `types_user` (`id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`photo`) REFERENCES `files` (`id`),
  ADD CONSTRAINT `users_ibfk_3` FOREIGN KEY (`role`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
