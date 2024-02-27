-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2024 at 09:14 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestion_digtal_products`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
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
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`idAdmin`, `firstName`, `lastName`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ayman', 'benchalh', 'aymanbenchalh53@gmail.com', NULL, 'ayman4211', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `boitdemessages`
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
-- Dumping data for table `boitdemessages`
--

INSERT INTO `boitdemessages` (`idBoitdemessgae`, `idAdmin`, `messageAdmin`, `dateMessageAdmin`, `idUser`, `messageUser`, `dateMessageUser`, `created_at`, `updated_at`) VALUES
(6, 1, 'Hey , with 5 min your account is commplete , if you have a probleme , sennd messag for help you', '2024-02-25 16:19:14', 1, NULL, NULL, NULL, NULL),
(7, 1, NULL, NULL, 1, 'hey admin i have probleme', '2024-02-25 15:21:53', '2024-02-25 14:21:53', '2024-02-25 14:21:53'),
(8, 1, NULL, NULL, 1, 'if you can help my plaze', '2024-02-25 15:22:18', '2024-02-25 14:22:18', '2024-02-25 14:22:18'),
(9, 1, 'yes , i can help you wath is your probleme ?', '2024-02-25 16:22:33', 1, NULL, NULL, NULL, NULL),
(10, 1, NULL, NULL, 1, 'i command some product , and i not paid wath solition for this', '2024-02-25 15:24:39', '2024-02-25 14:24:39', '2024-02-25 14:24:39'),
(11, 1, NULL, NULL, 1, 'i command some product , and i not paid wath solition for this', '2024-02-25 15:37:02', '2024-02-25 14:37:02', '2024-02-25 14:37:02'),
(12, 1, NULL, NULL, 1, 'i command some product , and i not paid wath solition for this', '2024-02-25 15:37:06', '2024-02-25 14:37:06', '2024-02-25 14:37:06'),
(13, 1, NULL, NULL, 1, 'i command some product , and i not paid wath solition for this', '2024-02-25 15:37:10', '2024-02-25 14:37:10', '2024-02-25 14:37:10'),
(14, 1, NULL, NULL, 1, 'i command some product , and i not paid wath solition for this', '2024-02-25 15:37:53', '2024-02-25 14:37:53', '2024-02-25 14:37:53'),
(15, 1, 'oki , wait 5 min i fix your probleme\r\n', '2024-02-25 16:38:57', 1, NULL, NULL, NULL, NULL),
(16, 1, NULL, NULL, 1, 'i command some product , and i not paid wath solition for this', '2024-02-25 15:48:31', '2024-02-25 14:48:31', '2024-02-25 14:48:31'),
(17, 1, 'Hey , with 5 min your account is commplete , if you have a probleme , sennd messag for help you', '2024-02-25 17:51:46', 10, NULL, NULL, NULL, NULL),
(18, 1, NULL, NULL, 10, 'hey admin i have probleme', '2024-02-25 16:52:43', '2024-02-25 15:52:43', '2024-02-25 15:52:43'),
(19, 1, 'probleme , sennd messag for help you 2', NULL, 10, NULL, NULL, NULL, NULL),
(20, 1, ' sennd messag for help you 3', NULL, 10, NULL, NULL, NULL, NULL),
(21, 1, NULL, NULL, 10, 'i command some product , and i not paid wath solition for this', '2024-02-25 16:54:27', '2024-02-25 15:54:27', '2024-02-25 15:54:27'),
(22, 1, NULL, NULL, 10, 'hey admin i have probleme', '2024-02-25 16:54:38', '2024-02-25 15:54:38', '2024-02-25 15:54:38'),
(23, 1, NULL, NULL, 10, 'hey admin i have probleme', '2024-02-25 16:54:45', '2024-02-25 15:54:45', '2024-02-25 15:54:45'),
(24, 1, NULL, NULL, 10, 'i command some product , and i not paid wath solition for this', '2024-02-25 16:54:56', '2024-02-25 15:54:56', '2024-02-25 15:54:56'),
(25, NULL, 'goood message', NULL, 10, NULL, NULL, NULL, NULL),
(26, 1, NULL, NULL, 3, 'i command some product , and i not paid wath solition for this', '2024-02-25 17:29:30', '2024-02-25 16:29:30', '2024-02-25 16:29:30'),
(32, 1, 'Hey, in 5 min your account will be complete, if you have a problem, send a message to help you', '2024-02-26 16:00:59', 12, NULL, NULL, '2024-02-26 15:00:59', '2024-02-26 15:00:59'),
(33, 1, NULL, NULL, 12, 'i command some product , and i not paid wath solition for this', '2024-02-26 16:01:29', '2024-02-26 15:01:29', '2024-02-26 15:01:29');

-- --------------------------------------------------------

--
-- Table structure for table `commands`
--

CREATE TABLE `commands` (
  `idcommand` bigint(20) UNSIGNED NOT NULL,
  `datecommand` date NOT NULL,
  `statut` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idAdmin` bigint(20) UNSIGNED NOT NULL,
  `idUser` bigint(20) UNSIGNED NOT NULL,
  `idProduct` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commands`
--

INSERT INTO `commands` (`idcommand`, `datecommand`, `statut`, `created_at`, `updated_at`, `idAdmin`, `idUser`, `idProduct`) VALUES
(1, '2024-02-23', 'Not Paid', NULL, NULL, 1, 6, 0),
(2, '2024-02-23', 'Not Paid', '2024-02-23 16:53:03', '2024-02-23 16:53:03', 1, 6, 0),
(3, '2024-02-23', 'Not Paid', '2024-02-23 16:55:30', '2024-02-23 16:55:30', 1, 6, 2),
(4, '2024-02-23', 'Not Paid', '2024-02-23 16:55:50', '2024-02-23 16:55:50', 1, 6, 1),
(5, '2024-02-23', 'Not Paid', '2024-02-23 17:00:31', '2024-02-23 17:00:31', 1, 2, 5),
(19, '2024-02-25', 'Not Paid', '2024-02-25 00:49:41', '2024-02-25 00:49:41', 1, 1, 1),
(20, '2024-02-25', 'Not Paid', '2024-02-25 02:06:29', '2024-02-25 02:06:29', 1, 9, 2),
(21, '2024-02-25', 'Not Paid', '2024-02-25 15:45:02', '2024-02-25 15:45:02', 1, 10, 0),
(22, '2024-02-25', 'Not Paid', '2024-02-25 15:57:14', '2024-02-25 15:57:14', 1, 10, 2),
(23, '2024-02-25', 'Not Paid', '2024-02-25 16:21:24', '2024-02-25 16:21:24', 1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('aymanbenchalh53@gmail.com', 'muINTx6tMznTZkKIifhaY5uqjsMuSQYIMY9qBxqb9g08WIAqtqvKuWGrGwW64XgC', '2024-02-27 00:09:19');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `products`
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
-- Dumping data for table `products`
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
(8, '24 MONTHS', 'SAVE 100 %', '4K/FHD/HD/SD Quality', '+30000 Channels', '+50000 VOD', 'Immediate Delivery', '24/7 Customer Support', 'All Devices Supported', 32.98, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUser`, `firstName`, `lastName`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ayman4512', 'ayman', 'aymanayman@gmail.com', NULL, '$2y$12$rgCvDnTmAaHdGPBiM/8J.ekOZCBQqiEEynfaZPa9NIaGjta7MSNFK', NULL, '2024-02-16 10:47:07', '2024-02-25 14:48:47'),
(2, 'khaoula2023', 'khaoula', 'khaoulakhaoula@gmail.com', NULL, '$2y$12$dH7E8Kb722pw6UxmZwTEiOoCgy5et60HODgVHS5MFJHJ3AH2I1Ms6', NULL, '2024-02-16 10:53:32', '2024-02-25 01:33:44'),
(3, 'marouan', 'marouan', 'marouanmarouan@gmail.com', NULL, '$2y$12$iwwIUVfztyK7DbLE3ADijOPjFOsu2SAnfa0LHRBnGKO3W8G8BAmgC', NULL, '2024-02-16 10:57:16', '2024-02-16 10:57:16'),
(4, 'khalid', 'khalid', 'khalidkhalid@gmail.com', NULL, '$2y$12$fWQkfcJCa0kT6RdAHTJRt.tbHG1tkPfmibuRtUq0wiud2aOAUQNDW', NULL, '2024-02-16 10:58:29', '2024-02-16 10:58:29'),
(5, 'ayman4512', 'ayman4512', 'ayman4512ayman4512@gmail.com', NULL, '$2y$12$PZeiJ0u0KUC4DNe.N1fv/ulIYLETv505shzKrXkMM0ZQu/VIkffOe', NULL, '2024-02-16 11:09:57', '2024-02-16 11:09:57'),
(6, 'ayman14', 'benchalh', 'aymanbenchalh53@gmail.com', NULL, '$2y$12$MrwyE7j31TejtZx8mWbwkOYBBDFGyRtgaEMcWnLAoLEJAcYgfaio6', NULL, '2024-02-20 21:59:25', '2024-02-25 00:04:37'),
(7, 'maroua', 'maroua', 'maroua152@gmail.com', NULL, '$2y$12$XVCJXDlil6MF61n8B/xTfuhiyzfIGT/B84YDww/CQrwiTWTuAXM7O', NULL, '2024-02-20 22:50:52', '2024-02-20 22:50:52'),
(8, 'outman', 'outman', 'outman@gmail.com', NULL, '$2y$12$omd.X/sRaWxBN6K2ajnITuDyxNSqxvYjTDP3daGcD9pnlvVXPfEHe', NULL, '2024-02-21 14:54:04', '2024-02-21 14:54:04'),
(9, 'hakiam47', 'hakiam', 'hakiam@gamil.com', NULL, '$2y$12$MJZJf2DDjZ8hAF2NesMEsuAtci6LxbLkasvDh/2UAjbnrE7X3auYy', NULL, '2024-02-23 02:45:16', '2024-02-25 02:04:36'),
(10, 'mohmmed204', 'mohmmed', 'mohmmeda2023@gmail.com', NULL, '$2y$12$U2/92IGZXOAnwMIGGQScJ.HaQsLGArFWzX21i3wCUzj6AqNI8S2t2', NULL, '2024-02-25 15:34:50', '2024-02-25 15:42:34'),
(11, 'salim12', 'salim', 'salim@gmail.com', NULL, '$2y$12$ha3s52R8c6j7zv9/zJHfYectFbnPGUpFFMGZym1NSwVQQSIiCjwR2', NULL, '2024-02-26 14:36:48', '2024-02-26 14:37:40'),
(12, 'ayman', 'benchalh', 'aymanbenchalh12@gmail.com', NULL, '$2y$12$hVVWBOul2TxaOIMRtPOP0.YAlKrfs.jwSNjNOsM1s8HK09Tv9JpIC', NULL, '2024-02-26 14:53:25', '2024-02-26 14:53:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`idAdmin`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `boitdemessages`
--
ALTER TABLE `boitdemessages`
  ADD PRIMARY KEY (`idBoitdemessgae`),
  ADD KEY `boitdemessage_idadmin_foreign` (`idAdmin`),
  ADD KEY `boitdemessage_iduser_foreign` (`idUser`);

--
-- Indexes for table `commands`
--
ALTER TABLE `commands`
  ADD PRIMARY KEY (`idcommand`),
  ADD KEY `commands_idadmin_foreign` (`idAdmin`),
  ADD KEY `commands_iduser_foreign` (`idUser`),
  ADD KEY `commands_idproduct_foreign` (`idProduct`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`idProduct`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `idAdmin` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `boitdemessages`
--
ALTER TABLE `boitdemessages`
  MODIFY `idBoitdemessgae` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `commands`
--
ALTER TABLE `commands`
  MODIFY `idcommand` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `idProduct` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUser` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `boitdemessages`
--
ALTER TABLE `boitdemessages`
  ADD CONSTRAINT `boitdemessage_idadmin_foreign` FOREIGN KEY (`idAdmin`) REFERENCES `admins` (`idAdmin`),
  ADD CONSTRAINT `boitdemessage_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);

--
-- Constraints for table `commands`
--
ALTER TABLE `commands`
  ADD CONSTRAINT `commands_idadmin_foreign` FOREIGN KEY (`idAdmin`) REFERENCES `admins` (`idAdmin`),
  ADD CONSTRAINT `commands_idproduct_foreign` FOREIGN KEY (`idProduct`) REFERENCES `products` (`idProduct`),
  ADD CONSTRAINT `commands_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
