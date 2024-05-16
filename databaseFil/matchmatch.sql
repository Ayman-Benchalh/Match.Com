-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 16 mai 2024 à 21:56
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `matchmatch`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `idAdmin` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`idAdmin`, `firstName`, `lastName`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ayman54564', 'benchalh', 'aymanbenchalh53@gmail.com', NULL, '$2y$12$ggUpXExaatpWwfTS.J/BG.WbWVRX0gx7NGDNlIv9lEhLdvOjFh8b.', NULL, NULL, '2024-05-15 09:36:41'),
(2, 'marouane', 'brouk', 'admin@gmail.com', NULL, '$2y$12$ggUpXExaatpWwfTS.J/BG.WbWVRX0gx7NGDNlIv9lEhLdvOjFh8b.', NULL, NULL, '2024-05-16 10:39:56'),
(3, 'mero', 'bero', 'merobero@gmail.com', NULL, '$2y$12$ggUpXExaatpWwfTS.J/BG.WbWVRX0gx7NGDNlIv9lEhLdvOjFh8b.', NULL, NULL, '2024-05-02 01:24:26');

-- --------------------------------------------------------

--
-- Structure de la table `boitdemessages`
--

CREATE TABLE `boitdemessages` (
  `idBoitdemessgae` bigint(20) UNSIGNED NOT NULL,
  `idAdmin` bigint(20) UNSIGNED DEFAULT NULL,
  `messageAdmin` varchar(255) DEFAULT NULL,
  `dateMessageAdmin` datetime DEFAULT NULL,
  `idUser` bigint(20) UNSIGNED DEFAULT NULL,
  `messageUser` varchar(255) DEFAULT NULL,
  `dateMessageUser` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `boitdemessages`
--

INSERT INTO `boitdemessages` (`idBoitdemessgae`, `idAdmin`, `messageAdmin`, `dateMessageAdmin`, `idUser`, `messageUser`, `dateMessageUser`, `created_at`, `updated_at`) VALUES
(6, 1, 'Hey , with 5 min your account is commplete , if you have a probleme , sennd messag for help you', '2024-02-25 16:19:14', NULL, NULL, NULL, NULL, '2024-04-20 03:03:26'),
(7, 1, NULL, NULL, NULL, 'hey admin i have probleme', '2024-02-25 15:21:53', '2024-02-25 14:21:53', '2024-04-20 03:03:26'),
(8, 1, NULL, NULL, NULL, 'if you can help my plaze', '2024-02-25 15:22:18', '2024-02-25 14:22:18', '2024-04-20 03:03:26'),
(9, 1, 'yes , i can help you wath is your probleme ?', '2024-02-25 16:22:33', NULL, NULL, NULL, NULL, '2024-04-20 03:03:26'),
(10, 1, NULL, NULL, NULL, 'i command some product , and i not paid wath solition for this', '2024-02-25 15:24:39', '2024-02-25 14:24:39', '2024-04-20 03:03:26'),
(11, 1, NULL, NULL, NULL, 'i command some product , and i not paid wath solition for this', '2024-02-25 15:37:02', '2024-02-25 14:37:02', '2024-04-20 03:03:26'),
(12, 1, NULL, NULL, NULL, 'i command some product , and i not paid wath solition for this', '2024-02-25 15:37:06', '2024-02-25 14:37:06', '2024-04-20 03:03:26'),
(13, 1, NULL, NULL, NULL, 'i command some product , and i not paid wath solition for this', '2024-02-25 15:37:10', '2024-02-25 14:37:10', '2024-04-20 03:03:26'),
(14, 1, NULL, NULL, NULL, 'i command some product , and i not paid wath solition for this', '2024-02-25 15:37:53', '2024-02-25 14:37:53', '2024-04-20 03:03:26'),
(15, 1, 'oki , wait 5 min i fix your probleme\r\n', '2024-02-25 16:38:57', NULL, NULL, NULL, NULL, '2024-04-20 03:03:26'),
(16, 1, NULL, NULL, NULL, 'i command some product , and i not paid wath solition for this', '2024-02-25 15:48:31', '2024-02-25 14:48:31', '2024-04-20 03:03:26'),
(17, 1, 'Hey , with 5 min your account is commplete , if you have a probleme , sennd messag for help you', '2024-02-25 17:51:46', NULL, NULL, NULL, NULL, '2024-04-20 00:29:48'),
(18, 1, NULL, NULL, NULL, 'hey admin i have probleme', '2024-02-25 16:52:43', '2024-02-25 15:52:43', '2024-04-20 00:29:48'),
(19, 1, 'probleme , sennd messag for help you 2', NULL, NULL, NULL, NULL, NULL, '2024-04-20 00:29:48'),
(20, 1, ' sennd messag for help you 3', NULL, NULL, NULL, NULL, NULL, '2024-04-20 00:29:48'),
(21, 1, NULL, NULL, NULL, 'i command some product , and i not paid wath solition for this', '2024-02-25 16:54:27', '2024-02-25 15:54:27', '2024-04-20 00:29:48'),
(22, 1, NULL, NULL, NULL, 'hey admin i have probleme', '2024-02-25 16:54:38', '2024-02-25 15:54:38', '2024-04-20 00:29:48'),
(23, 1, NULL, NULL, NULL, 'hey admin i have probleme', '2024-02-25 16:54:45', '2024-02-25 15:54:45', '2024-04-20 00:29:48'),
(24, 1, NULL, NULL, NULL, 'i command some product , and i not paid wath solition for this', '2024-02-25 16:54:56', '2024-02-25 15:54:56', '2024-04-20 00:29:48'),
(25, NULL, 'goood message', NULL, NULL, NULL, NULL, NULL, '2024-04-20 00:29:48'),
(26, 1, NULL, NULL, NULL, 'i command some product , and i not paid wath solition for this', '2024-02-25 17:29:30', '2024-02-25 16:29:30', '2024-04-20 02:31:55'),
(32, 1, 'Hey, in 5 min your account will be complete, if you have a problem, send a message to help you', '2024-02-26 16:00:59', NULL, NULL, NULL, '2024-02-26 15:00:59', '2024-04-20 01:37:44'),
(33, 1, NULL, NULL, NULL, 'i command some product , and i not paid wath solition for this', '2024-02-26 16:01:29', '2024-02-26 15:01:29', '2024-04-20 01:37:44'),
(34, 1, 'Hey, in 5 min your account will be complete, if you have a problem, send a message to help you', '2024-03-01 09:09:01', NULL, NULL, NULL, '2024-03-01 08:09:01', '2024-04-20 02:16:57'),
(35, 1, NULL, NULL, NULL, 'i command some product , and i not paid wath solition for this', '2024-03-03 19:37:33', '2024-03-03 18:37:33', '2024-04-20 02:16:57'),
(36, 1, 'Hey, in 5 min your account will be complete, if you have a problem, send a message to help you', '2024-03-05 08:24:35', 13, NULL, NULL, '2024-03-05 07:24:35', '2024-03-05 07:24:35'),
(37, 1, 'Hey, in 5 min your account will be complete, if you have a problem, send a message to help you', '2024-03-05 10:06:36', NULL, NULL, NULL, '2024-03-05 09:06:36', '2024-04-20 00:29:53'),
(38, 1, NULL, NULL, NULL, 'hey admin i have probleme', '2024-03-05 10:11:53', '2024-03-05 09:11:53', '2024-04-20 02:16:57'),
(39, 1, NULL, NULL, NULL, 'wwwww', '2024-04-19 23:07:49', '2024-04-19 23:07:49', '2024-04-20 03:03:26'),
(40, 1, 'Hey, in 5 min your account will be complete, if you have a problem, send a message to help you', '2024-04-20 00:07:23', NULL, NULL, NULL, '2024-04-20 00:07:23', '2024-04-20 00:23:23'),
(41, 1, NULL, NULL, NULL, 'hhhhhhhhhhh', '2024-04-20 00:08:25', '2024-04-20 00:08:25', '2024-04-20 00:23:23'),
(42, 1, NULL, NULL, NULL, 'm', '2024-04-20 00:11:51', '2024-04-20 00:11:51', '2024-04-20 00:23:23'),
(43, 1, 'Hey, in 5 min your account will be complete, if you have a problem, send a message to help you', '2024-04-20 01:15:15', NULL, NULL, NULL, '2024-04-20 01:15:15', '2024-04-20 01:38:09'),
(44, 1, NULL, NULL, NULL, 'hhh', '2024-04-20 01:15:23', '2024-04-20 01:15:23', '2024-04-20 01:38:09'),
(45, 1, 'Hey, in 5 min your account will be complete, if you have a problem, send a message to help you', '2024-04-20 02:37:59', NULL, NULL, NULL, '2024-04-20 02:37:59', '2024-04-20 03:03:15'),
(46, 1, 'Hey, in 5 min your account will be complete, if you have a problem, send a message to help you', '2024-04-22 20:52:45', 1, NULL, NULL, '2024-04-22 20:52:45', '2024-04-22 20:52:45'),
(47, 1, 'Hey, in 5 min your account will be complete, if you have a problem, send a message to help you', '2024-04-22 21:37:48', NULL, NULL, NULL, '2024-04-22 21:37:48', '2024-05-03 15:35:15'),
(48, 1, 'Hey, in 5 min your account will be complete, if you have a problem, send a message to help you', '2024-04-22 21:50:35', 14, NULL, NULL, '2024-04-22 21:50:35', '2024-04-22 21:50:35'),
(49, 1, 'Hey, in 5 min your account will be complete, if you have a problem, send a message to help you', '2024-04-22 21:50:51', NULL, NULL, NULL, '2024-04-22 21:50:51', '2024-04-26 08:59:33'),
(50, 1, 'Hey, in 5 min your account will be complete, if you have a problem, send a message to help you', '2024-04-22 23:26:22', NULL, NULL, NULL, '2024-04-22 23:26:22', '2024-05-05 21:28:22'),
(51, 1, NULL, NULL, 14, 'a', '2024-05-01 00:46:28', '2024-05-01 00:46:28', '2024-05-01 00:46:28'),
(52, 1, NULL, NULL, NULL, 'f', '2024-05-02 00:26:14', '2024-05-02 00:26:14', '2024-05-03 15:35:15'),
(53, 1, NULL, NULL, NULL, 'salut', '2024-05-02 00:26:19', '2024-05-02 00:26:19', '2024-05-03 15:35:15'),
(54, 1, 'Hey, in 5 min your account will be complete, if you have a problem, send a message to help you', '2024-05-02 00:41:27', 22, NULL, NULL, '2024-05-02 00:41:27', '2024-05-02 00:41:27'),
(55, 1, NULL, NULL, 14, 'salam ana ofppt', '2024-05-03 12:36:22', '2024-05-03 12:36:22', '2024-05-03 12:36:22'),
(58, 1, 'Hey, in 5 min your account will be complete, if you have a problem, send a message to help you', '2024-05-05 21:20:52', 10, NULL, NULL, '2024-05-05 21:20:52', '2024-05-05 21:20:52'),
(61, 1, 'Hey, in 5 min your account will be complete, if you have a problem, send a message to help you', '2024-05-05 21:21:03', 3, NULL, NULL, '2024-05-05 21:21:03', '2024-05-05 21:21:03'),
(68, 1, 'Hey, in 5 min your account will be complete, if you have a problem, send a message to help you', '2024-05-07 09:28:35', 27, NULL, NULL, '2024-05-07 09:28:35', '2024-05-07 09:28:35'),
(70, 1, 'Hey, in 5 min your account will be complete, if you have a problem, send a message to help you', '2024-05-10 15:21:40', 28, NULL, NULL, '2024-05-10 15:21:40', '2024-05-10 15:21:40'),
(71, 1, 'Hey, in 5 min your account will be complete, if you have a problem, send a message to help you', '2024-05-14 12:31:29', 29, NULL, NULL, '2024-05-14 12:31:29', '2024-05-14 12:31:29'),
(72, 1, NULL, NULL, 28, 'salam', '2024-05-14 15:51:37', '2024-05-14 15:51:37', '2024-05-14 15:51:37'),
(73, 1, NULL, NULL, 28, 'hello', '2024-05-14 15:51:40', '2024-05-14 15:51:40', '2024-05-14 15:51:40'),
(74, 1, NULL, NULL, 28, 'ana', '2024-05-14 15:51:43', '2024-05-14 15:51:43', '2024-05-14 15:51:43'),
(75, 1, NULL, NULL, 28, 'je suis', '2024-05-14 15:51:48', '2024-05-14 15:51:48', '2024-05-14 15:51:48'),
(76, 1, NULL, NULL, 28, 'salut', '2024-05-14 15:51:50', '2024-05-14 15:51:50', '2024-05-14 15:51:50'),
(77, 1, NULL, NULL, 28, 'hhh2', '2024-05-14 15:51:53', '2024-05-14 15:51:53', '2024-05-14 15:51:53'),
(78, 1, NULL, NULL, 28, 'hhhh5', '2024-05-14 15:51:57', '2024-05-14 15:51:57', '2024-05-14 15:51:57'),
(79, 1, NULL, NULL, 28, 'hhhhhh6', '2024-05-14 15:52:01', '2024-05-14 15:52:01', '2024-05-14 15:52:01'),
(80, 1, NULL, NULL, 28, 'mstog', '2024-05-14 17:03:52', '2024-05-14 17:03:52', '2024-05-14 17:03:52'),
(81, 1, NULL, NULL, 22, 'salam je suis fatima', '2024-05-14 17:07:36', '2024-05-14 17:07:36', '2024-05-14 17:07:36'),
(82, 1, 'okey fine', '2024-05-14 17:34:47', 29, NULL, NULL, '2024-05-14 17:34:47', '2024-05-14 17:34:47'),
(83, 1, 'okey hhhh', '2024-05-14 17:36:47', 29, NULL, NULL, '2024-05-14 17:36:47', '2024-05-14 17:36:47'),
(84, 1, 'test', '2024-05-14 17:40:30', 22, NULL, NULL, '2024-05-14 17:40:30', '2024-05-14 17:40:30'),
(85, 1, NULL, NULL, 22, 'yessssssssss', '2024-05-14 17:41:18', '2024-05-14 17:41:18', '2024-05-14 17:41:18'),
(86, 1, 'okey', '2024-05-14 17:41:26', 22, NULL, NULL, '2024-05-14 17:41:26', '2024-05-14 17:41:26'),
(87, 1, NULL, NULL, 27, 'hhhhhhh', '2024-05-14 17:50:39', '2024-05-14 17:50:39', '2024-05-14 17:50:39'),
(88, 1, 'sf ghyerha', '2024-05-14 17:50:50', 27, NULL, NULL, '2024-05-14 17:50:50', '2024-05-14 17:50:50'),
(89, 1, 'Hey, in 5 min your account will be complete, if you have a problem, send a message to help you', '2024-05-14 17:58:24', 30, NULL, NULL, '2024-05-14 17:58:24', '2024-05-14 17:58:24'),
(90, 1, NULL, NULL, 30, 'merci', '2024-05-14 17:59:40', '2024-05-14 17:59:40', '2024-05-14 17:59:40'),
(91, 1, 'de rien vous etes le bienvenu', '2024-05-14 18:00:01', 30, NULL, NULL, '2024-05-14 18:00:01', '2024-05-14 18:00:01'),
(92, 2, 'hello id 3 i am admin id 2', '2024-05-14 18:34:50', 3, NULL, NULL, '2024-05-14 18:34:50', '2024-05-14 18:34:50'),
(93, 1, NULL, NULL, 3, 'nice to meet you bro', '2024-05-14 18:35:14', '2024-05-14 18:35:14', '2024-05-14 18:35:14'),
(94, 2, 'me too', '2024-05-14 18:35:27', 3, NULL, NULL, '2024-05-14 18:35:27', '2024-05-14 18:35:27'),
(95, 3, 'salam lyoma larbe3', '2024-05-14 22:45:39', 30, NULL, NULL, '2024-05-14 22:45:39', '2024-05-14 22:45:39'),
(96, 1, NULL, NULL, 30, 'wayli vrai ?', '2024-05-14 22:46:03', '2024-05-14 22:46:03', '2024-05-14 22:46:03'),
(97, 3, 'votre code serveur iptv 3 mois : 259874532179347893138', '2024-05-14 22:46:31', 30, NULL, NULL, '2024-05-14 22:46:31', '2024-05-14 22:46:31'),
(98, 1, NULL, NULL, 30, 'merci bien recu', '2024-05-14 22:46:53', '2024-05-14 22:46:53', '2024-05-14 22:46:53'),
(99, 1, 'bsehha', '2024-05-14 22:49:53', 30, NULL, NULL, '2024-05-14 22:49:53', '2024-05-14 22:49:53'),
(100, 1, 'ok?', '2024-05-14 22:56:53', 30, NULL, NULL, '2024-05-14 22:56:53', '2024-05-14 22:56:53'),
(101, 1, NULL, NULL, 30, 'oui ioui', '2024-05-14 22:57:41', '2024-05-14 22:57:41', '2024-05-14 22:57:41'),
(102, 1, 'hh', '2024-05-14 23:59:00', 30, NULL, NULL, '2024-05-14 23:59:00', '2024-05-14 23:59:00'),
(103, 1, 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', '2024-05-15 00:23:05', 27, NULL, NULL, '2024-05-15 00:23:05', '2024-05-15 00:23:05'),
(104, 1, 'aji hna', '2024-05-15 00:23:13', 27, NULL, NULL, '2024-05-15 00:23:13', '2024-05-15 00:23:13'),
(105, 1, 'salam', '2024-05-15 08:47:41', 14, NULL, NULL, '2024-05-15 08:47:41', '2024-05-15 08:47:41'),
(106, 1, 'you server code :156987492319841321', '2024-05-15 08:48:13', 27, NULL, NULL, '2024-05-15 08:48:13', '2024-05-15 08:48:13'),
(107, 1, NULL, NULL, 14, 'salam ayman hani', '2024-05-15 08:54:42', '2024-05-15 08:54:42', '2024-05-15 08:54:42'),
(108, 1, 'ach khask tmchi bhalk', '2024-05-15 08:55:00', 14, NULL, NULL, '2024-05-15 08:55:00', '2024-05-15 08:55:00'),
(109, 1, NULL, NULL, 14, 'had dyali', '2024-05-15 08:55:11', '2024-05-15 08:55:11', '2024-05-15 08:55:11'),
(110, 1, NULL, NULL, 14, 'sdfsdf', '2024-05-15 08:55:59', '2024-05-15 08:55:59', '2024-05-15 08:55:59'),
(111, 1, NULL, NULL, 14, 'fdgfdgdgfdg', '2024-05-15 08:56:06', '2024-05-15 08:56:06', '2024-05-15 08:56:06'),
(112, 1, 'Hey, in 5 min your account will be complete, if you have a problem, send a message to help you', '2024-05-15 09:23:33', NULL, NULL, NULL, '2024-05-15 09:23:33', '2024-05-15 09:33:56'),
(113, 1, NULL, NULL, NULL, 'bien payé', '2024-05-15 09:29:46', '2024-05-15 09:29:46', '2024-05-15 09:33:56'),
(114, 1, 'your code serveur iptv :65468213218864356', '2024-05-15 09:30:54', NULL, NULL, NULL, '2024-05-15 09:30:54', '2024-05-15 09:33:56'),
(116, 1, 'Hey, in 5 min your account will be complete, if you have a problem, send a message to help you', '2024-05-16 09:04:57', 32, NULL, NULL, '2024-05-16 09:04:57', '2024-05-16 09:04:57'),
(117, 1, 'fen a3chiri', '2024-05-16 09:07:03', 32, NULL, NULL, '2024-05-16 09:07:03', '2024-05-16 09:07:03'),
(118, 1, NULL, NULL, 32, 'mr admin i have a probleme , my ass hurt me', '2024-05-16 09:07:42', '2024-05-16 09:07:42', '2024-05-16 09:07:42'),
(119, 1, 'take my dick', '2024-05-16 09:07:58', 32, NULL, NULL, '2024-05-16 09:07:58', '2024-05-16 09:07:58'),
(120, 2, 'code : 456456456456', '2024-05-16 10:39:26', 14, NULL, NULL, '2024-05-16 10:39:26', '2024-05-16 10:39:26'),
(121, 2, 'okey', '2024-05-16 10:40:24', 22, NULL, NULL, '2024-05-16 10:40:24', '2024-05-16 10:40:24'),
(122, 2, 'okey', '2024-05-16 10:40:25', 22, NULL, NULL, '2024-05-16 10:40:25', '2024-05-16 10:40:25'),
(123, 2, 'help', '2024-05-16 10:47:09', 1, NULL, NULL, '2024-05-16 10:47:09', '2024-05-16 10:47:09');

-- --------------------------------------------------------

--
-- Structure de la table `commands`
--

CREATE TABLE `commands` (
  `idcommand` bigint(20) UNSIGNED NOT NULL,
  `datecommand` date NOT NULL,
  `statut` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idAdmin` bigint(20) UNSIGNED NOT NULL,
  `idUser` bigint(20) UNSIGNED DEFAULT NULL,
  `idProduct` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commands`
--

INSERT INTO `commands` (`idcommand`, `datecommand`, `statut`, `created_at`, `updated_at`, `idAdmin`, `idUser`, `idProduct`) VALUES
(19, '2024-02-25', 'Not Paid', '2024-02-25 00:49:41', '2024-02-25 00:49:41', 1, 1, 1),
(21, '2024-02-25', 'Not Paid', '2024-02-25 15:45:02', '2024-02-25 15:45:02', 1, 10, 0),
(22, '2024-02-25', 'Not Paid', '2024-02-25 15:57:14', '2024-02-25 15:57:14', 1, 10, 2),
(23, '2024-02-25', 'Not Paid', '2024-02-25 16:21:24', '2024-02-25 16:21:24', 1, 3, 1),
(24, '2024-03-05', 'Not Paid', '2024-03-05 09:07:30', '2024-03-05 09:07:30', 1, 14, 0),
(26, '2024-05-02', 'Not Paid', '2024-05-02 23:41:52', '2024-05-02 23:41:52', 1, 14, 5),
(32, '2024-05-07', 'Paid', '2024-05-07 09:29:55', '2024-05-07 09:29:55', 1, 27, 8),
(33, '2024-05-07', 'Paid', '2024-05-07 09:40:02', '2024-05-07 09:40:02', 1, 27, 0),
(34, '2024-05-07', 'Paid', '2024-05-07 09:59:29', '2024-05-07 09:59:29', 1, 27, 1),
(36, '2024-05-10', 'Paid', '2024-05-10 15:25:49', '2024-05-10 15:25:49', 1, 28, 4),
(37, '2024-05-14', 'Paid', '2024-05-14 10:21:52', '2024-05-14 10:21:52', 1, 14, 6),
(39, '2024-05-16', 'Paid', '2024-05-16 09:06:20', '2024-05-16 09:06:20', 1, 32, 89),
(40, '2024-05-16', 'Paid', '2024-05-16 10:38:04', '2024-05-16 10:38:04', 1, 14, 8);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_16_094020_create_admin_table', 1),
(6, '2024_02_16_094346_create_products_table', 1),
(7, '2024_02_16_094948_create_commands_table', 2),
(8, '2024_02_16_100034_add_id_admin_to_table_commands', 3),
(9, '2024_02_20_230313_create_boit_demessage_table', 4);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `idProduct` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `sauvegarder` varchar(20) NOT NULL,
  `desination1` varchar(255) NOT NULL,
  `desination2` varchar(255) NOT NULL,
  `desination3` varchar(255) NOT NULL,
  `desination4` varchar(255) NOT NULL,
  `desination5` varchar(255) NOT NULL,
  `desination6` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`idProduct`, `nom`, `sauvegarder`, `desination1`, `desination2`, `desination3`, `desination4`, `desination5`, `desination6`, `prix`, `created_at`, `updated_at`) VALUES
(0, '1 MONTH', 'SAVE 20 %', '4K/FHD/HD/SD Quality', '+30000 Channels', '+50000 VOD', 'Immediate Delivery', '24/7 Customer Support', 'All Devices Supported', 6.99, NULL, NULL),
(1, '2 MONTHS', 'SAVE 25 %', '4K/FHD/HD/SD Quality', '+30000 Channels', '+50000 VOD', 'Immediate Delivery', '24/7 Customer Support', 'All Devices Supported', 7.58, NULL, NULL),
(2, '3 MONTHS', 'SAVE 30 %', '4K/FHD/HD/SD Quality', '+30000 Channels', '+50000 VOD', 'Immediate Delivery', '24/7 Customer Support', 'All Devices Supported', 9.8, NULL, NULL),
(3, '6 MONTHS', 'SAVE 66 %', '4K/FHD/HD/SD Quality', '+30000 Channels', '+50000 VOD', 'Immediate Delivery', '24/7 Customer Support', 'All Devices Supported', 15.2, NULL, NULL),
(4, '8 MONTHS', 'SAVE 72 %', '4K/FHD/HD/SD Quality', '+30000 Channels', '+50000 VOD', 'Immediate Delivery', '24/7 Customer Support', 'All Devices Supported', 15.99, NULL, NULL),
(5, '12 MONTHS', 'SAVE 80 %', '4K/FHD/HD/SD Quality', '+30000 Channels', '+50000 VOD', 'Immediate Delivery', '24/7 Customer Support', 'All Devices Supported', 18.4, NULL, NULL),
(6, '15 MONTHS', 'SAVE 85 %', '4K/FHD/HD/SD Quality', '+30000 Channels', '+50000 VOD', 'Immediate Delivery', '24/7 Customer Support', 'All Devices Supported', 20.99, NULL, NULL),
(7, '18 MONTHS', 'SAVE 92%', '4K/FHD/HD/SD Quality', '+30000 Channels', '+50000 VOD', 'Immediate Delivery', '24/7 Customer Support', 'All Devices Supported', 27.74, NULL, NULL),
(8, '24 MONTHS', 'SAVE 100 %', '4K/FHD/HD/SD Quality', '+30000 Channels', '+50000 VOD', 'Immediate Delivery', '24/7 Customer Support', 'All Devices Supported', 32.98, NULL, NULL),
(86, 'Yassin Tv', 'SAVE 100 %', 'test', 'test', 'test', 'test', 'test', 'test', 10000, '2024-05-03 14:32:52', '2024-05-03 14:32:52'),
(88, 'QS', 'QS', 'QS', 'SQ', 'QS', 'SQ', 'QS', 'SQ', 12, '2024-05-05 16:01:13', '2024-05-05 16:01:13'),
(89, 'bein', 'SAVE 100 %', 'test1', 'test2', 'tes3', 'test4', 'test5', 'test6', 100, '2024-05-15 09:36:04', '2024-05-15 09:36:04');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `idUser` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`idUser`, `firstName`, `lastName`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ayman4512', 'ayman', 'aymanayman@gmail.com', NULL, '$2y$12$rgCvDnTmAaHdGPBiM/8J.ekOZCBQqiEEynfaZPa9NIaGjta7MSNFK', NULL, '2024-02-16 10:47:07', '2024-02-25 14:48:47'),
(3, 'marouan', 'marouan', 'marouanmarouan@gmail.com', NULL, '$2y$12$iwwIUVfztyK7DbLE3ADijOPjFOsu2SAnfa0LHRBnGKO3W8G8BAmgC', NULL, '2024-02-16 10:57:16', '2024-02-16 10:57:16'),
(10, 'mohmmed204', 'mohmmed', 'mohmmeda2023@gmail.com', NULL, '$2y$12$U2/92IGZXOAnwMIGGQScJ.HaQsLGArFWzX21i3wCUzj6AqNI8S2t2', NULL, '2024-02-25 15:34:50', '2024-02-25 15:42:34'),
(13, 'benchalh', 'benchalh', 'benchalh@gmail.com', NULL, '$2y$12$OhFKzfR11MoxpYV5vws1m.fCEKthIngf809ktcEdGctvFuy5tb/d2', NULL, '2024-03-05 07:24:28', '2024-03-05 07:24:28'),
(14, 'ofppt', 'ofppt', 'ofppt@gmail.com', NULL, '$2y$12$ggUpXExaatpWwfTS.J/BG.WbWVRX0gx7NGDNlIv9lEhLdvOjFh8b.', NULL, '2024-03-05 09:06:18', '2024-05-07 12:12:42'),
(22, 'fatima', 'fatima', 'fatima@gmail.com', NULL, '$2y$12$ljzn17r/JpvCg2vSV8Uu2OBD.GEEFzwz1lY5mRlRkcvcb3nIPag3K', NULL, '2024-05-02 00:37:19', '2024-05-02 00:37:19'),
(27, 'mostapha', 'mostapha', 'mostapha@gmail.com', NULL, '$2y$12$oMsjTbV2JEgs9ioWoSxORuOK9eAgcsvW5arhXV7OzuWDtFWw2PT.u', NULL, '2024-05-07 09:27:05', '2024-05-07 09:27:05'),
(28, 'Inaam', 'Yazidi', 'inaam@gmail.com', NULL, '$2y$12$wfTVi4osF4.JImY2.6fJQ.yUsdjbR.53v5Gi6lTo/Z1Ze.VFDSzWK', NULL, '2024-05-10 15:16:57', '2024-05-10 15:16:57'),
(29, 'wwww', 'wwwwwwwww', 'wxfwxf@gmail.com', NULL, '$2y$12$PQvBXvmoAFk1VE6NZVo5X.Ebvc7hDBTsHcLnVfkNUvRStHOUnlzoq', NULL, '2024-05-14 12:31:19', '2024-05-14 12:31:19'),
(30, 'reda', 'reda2', 'reda@gmail.com', NULL, '$2y$12$HKSpX08ZOvGFQ.Y1oiidoupgoUdDC59/Fw3ay2XP9xjvWvS.Tmldq', NULL, '2024-05-14 17:58:13', '2024-05-15 09:37:42'),
(32, 'mustapha', 'Boutrhaline', 'mustapha8contact@gmail.com', NULL, '$2y$12$bdRL9mMXaDSKNAvlbGkOme7bO.k1a0nWlGxsFzTmQjBiYGzM6jpfq', NULL, '2024-05-16 09:04:37', '2024-05-16 09:04:37');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`idAdmin`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Index pour la table `boitdemessages`
--
ALTER TABLE `boitdemessages`
  ADD PRIMARY KEY (`idBoitdemessgae`),
  ADD KEY `boitdemessage_idadmin_foreign` (`idAdmin`),
  ADD KEY `boitdemessage_iduser_foreign` (`idUser`);

--
-- Index pour la table `commands`
--
ALTER TABLE `commands`
  ADD PRIMARY KEY (`idcommand`),
  ADD KEY `commands_idadmin_foreign` (`idAdmin`),
  ADD KEY `commands_iduser_foreign` (`idUser`),
  ADD KEY `commands_idproduct_foreign` (`idProduct`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`idProduct`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `idAdmin` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `boitdemessages`
--
ALTER TABLE `boitdemessages`
  MODIFY `idBoitdemessgae` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT pour la table `commands`
--
ALTER TABLE `commands`
  MODIFY `idcommand` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `idProduct` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `idUser` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `boitdemessages`
--
ALTER TABLE `boitdemessages`
  ADD CONSTRAINT `boitdemessage_idadmin_foreign` FOREIGN KEY (`idAdmin`) REFERENCES `admins` (`idAdmin`),
  ADD CONSTRAINT `boitdemessage_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);

--
-- Contraintes pour la table `commands`
--
ALTER TABLE `commands`
  ADD CONSTRAINT `commands_idadmin_foreign` FOREIGN KEY (`idAdmin`) REFERENCES `admins` (`idAdmin`),
  ADD CONSTRAINT `commands_idproduct_foreign` FOREIGN KEY (`idProduct`) REFERENCES `products` (`idProduct`),
  ADD CONSTRAINT `commands_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
