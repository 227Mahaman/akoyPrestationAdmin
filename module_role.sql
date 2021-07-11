-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 03 juil. 2021 à 22:56
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `akoy_prestation`
--

-- --------------------------------------------------------

--
-- Structure de la table `module_role`
--

CREATE TABLE `module_role` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `module` int(11) NOT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `module_role`
--

INSERT INTO `module_role` (`id`, `role_id`, `module`, `create_at`) VALUES
(1, 1, 1, '2021-02-01 19:14:26'),
(2, 1, 2, '2021-02-01 19:14:26'),
(3, 1, 5, '2021-02-01 19:14:26'),
(4, 1, 6, '2021-02-01 19:14:26'),
(5, 2, 1, '2021-02-01 19:14:26'),
(6, 2, 2, '2021-02-01 19:14:26'),
(7, 2, 5, '2021-02-01 19:14:26'),
(8, 2, 6, '2021-02-01 19:14:26'),
(18, 1, 19, '2021-02-14 12:56:42'),
(19, 1, 20, '2021-02-14 12:56:46'),
(20, 1, 21, '2021-02-14 12:56:49'),
(21, 1, 22, '2021-02-14 12:56:51'),
(22, 1, 23, '2021-02-14 12:57:06'),
(23, 1, 24, '2021-02-14 12:57:08'),
(24, 1, 25, '2021-02-14 12:57:09'),
(25, 1, 26, '2021-02-15 18:43:12'),
(26, 1, 28, '2021-02-17 18:02:09'),
(27, 3, 28, '2021-02-17 18:02:36'),
(28, 3, 30, '2021-02-17 18:04:42'),
(29, 3, 29, '2021-02-17 18:04:46'),
(30, 1, 30, '2021-02-17 18:05:28'),
(31, 1, 29, '2021-02-17 18:05:29'),
(32, 2, 37, '2021-02-26 15:19:42'),
(33, 1, 37, '2021-02-26 15:19:53'),
(34, 1, 39, '2021-02-26 15:33:28'),
(35, 2, 39, '2021-02-26 15:33:37'),
(36, 1, 40, '2021-02-27 21:27:32'),
(37, 2, 40, '2021-02-27 21:27:42'),
(38, 2, 43, '2021-02-28 21:04:46'),
(39, 1, 43, '2021-02-28 21:04:55'),
(40, 2, 44, '2021-03-08 19:38:28'),
(41, 1, 44, '2021-03-08 19:38:33'),
(42, 1, 45, '2021-03-13 08:57:21'),
(43, 2, 45, '2021-03-13 08:57:33'),
(44, 2, 48, '2021-03-13 10:55:04'),
(45, 1, 48, '2021-03-13 10:55:17'),
(46, 1, 50, '2021-03-13 19:52:17'),
(47, 2, 50, '2021-03-13 19:52:24'),
(48, 1, 51, '2021-03-14 14:10:33'),
(49, 2, 51, '2021-03-14 14:10:40'),
(50, 2, 49, '2021-03-14 15:12:02'),
(51, 1, 49, '2021-03-14 15:12:10'),
(52, 1, 52, '2021-03-14 15:28:10'),
(53, 1, 53, '2021-03-14 15:28:15'),
(54, 1, 54, '2021-03-14 15:28:18'),
(55, 2, 52, '2021-03-14 15:28:34'),
(56, 2, 53, '2021-03-14 15:28:37'),
(57, 2, 54, '2021-03-14 15:28:38'),
(58, 1, 55, '2021-03-14 15:36:36'),
(59, 1, 56, '2021-03-14 15:36:37'),
(60, 1, 57, '2021-03-14 15:36:38'),
(61, 2, 55, '2021-03-14 15:36:47'),
(62, 2, 56, '2021-03-14 15:36:48'),
(63, 2, 57, '2021-03-14 15:36:49'),
(64, 1, 58, '2021-04-28 19:22:41'),
(65, 1, 59, '2021-04-28 19:22:42'),
(66, 1, 60, '2021-04-28 19:22:44'),
(67, 2, 58, '2021-04-28 19:22:53'),
(68, 2, 59, '2021-04-28 19:22:54'),
(69, 2, 60, '2021-04-28 19:22:55'),
(70, 1, 61, '2021-06-12 10:09:57'),
(71, 1, 62, '2021-06-12 10:09:58'),
(72, 1, 63, '2021-06-12 10:09:59'),
(73, 2, 61, '2021-06-12 10:10:15'),
(74, 2, 62, '2021-06-12 10:10:16'),
(75, 2, 63, '2021-06-12 10:10:17'),
(76, 1, 64, '2021-06-12 14:06:29'),
(77, 1, 65, '2021-06-12 14:06:30'),
(78, 2, 64, '2021-06-12 14:06:39'),
(79, 2, 65, '2021-06-12 14:06:40'),
(80, 1, 66, '2021-06-19 21:40:48'),
(81, 2, 66, '2021-06-19 21:40:59'),
(82, 1, 67, '2021-06-19 22:21:13'),
(83, 1, 68, '2021-06-19 22:21:14'),
(84, 1, 69, '2021-06-19 22:21:15'),
(85, 2, 67, '2021-06-19 22:21:24'),
(86, 2, 68, '2021-06-19 22:21:25'),
(87, 2, 69, '2021-06-19 22:21:26');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `module_role`
--
ALTER TABLE `module_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `module_id` (`module`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `module_role`
--
ALTER TABLE `module_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
