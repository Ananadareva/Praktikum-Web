-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 05:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cashflow`
--

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
(5, '2024_01_12_020832_tabels', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wallet_id` bigint(20) UNSIGNED NOT NULL,
  `amount` double(8,2) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `wallet_id`, `amount`, `description`, `created_at`, `updated_at`) VALUES
(1, 5, 26620.00, 'Qui itaque sunt reiciendis.', '2024-01-11 20:26:35', '2024-01-11 20:26:35'),
(2, 3, 46804.00, 'Consequatur temporibus blanditiis similique itaque.', '2024-01-11 20:26:35', '2024-01-11 20:26:35'),
(3, 7, 37736.00, 'Dolor id saepe iure ab sunt sunt iure.', '2024-01-11 20:26:35', '2024-01-11 20:26:35'),
(4, 8, 16950.00, 'Eos tempore sit fugiat nobis veritatis beatae quasi quidem.', '2024-01-11 20:26:35', '2024-01-11 20:26:35'),
(5, 2, 34216.00, 'Consequatur aliquid mollitia debitis est.', '2024-01-11 20:26:35', '2024-01-11 20:26:35'),
(6, 6, 26474.00, 'Ipsam quibusdam asperiores magnam provident autem sed.', '2024-01-11 20:26:35', '2024-01-11 20:26:35'),
(7, 6, 20217.00, 'Ea exercitationem et aspernatur.', '2024-01-11 20:26:35', '2024-01-11 20:26:35'),
(8, 5, 35683.00, 'Eveniet non explicabo cum ratione.', '2024-01-11 20:26:35', '2024-01-11 20:26:35'),
(9, 7, 48880.00, 'Optio est quia omnis tempora rerum quod dignissimos.', '2024-01-11 20:26:35', '2024-01-11 20:26:35'),
(10, 4, 29462.00, 'Dolor fugiat velit eius praesentium qui et.', '2024-01-11 20:26:35', '2024-01-11 20:26:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lidya Hariyah M.Kom.', 'ukusumo@example.net', NULL, '$2y$12$9UxPdH06UoA/EvrWs4j/He2.BZ3qcbLGW8Ob.cqj8rRVTTG2N3vtK', NULL, '2024-01-11 19:26:16', '2024-01-11 19:26:16'),
(2, 'Ella Handayani', 'tira33@example.com', NULL, '$2y$12$4IrARC.ENrTe8GtWJk3FguNOiza./HTiDNheBpyP9Dall0pPt1JYq', NULL, '2024-01-11 19:26:16', '2024-01-11 19:26:16'),
(3, 'Candrakanta Argono Utama S.Pt', 'luluh.hassanah@example.com', NULL, '$2y$12$v28oBz5bKTGu7cSFGCZ1TOrNLZoXVuYEM.LUBccaWOocLgi61Y8Pu', NULL, '2024-01-11 19:26:16', '2024-01-11 19:26:16'),
(4, 'Mala Farida', 'dian.mulyani@example.net', NULL, '$2y$12$udTiNUUIASZb/FpuU8Iz0uuak6wbuqNKgLzDk6wlAhZTfngLfH51W', NULL, '2024-01-11 19:26:17', '2024-01-11 19:26:17'),
(5, 'Rama Latupono', 'zamira52@example.com', NULL, '$2y$12$g07ZLbnxMWt9LBy1QhvHvu31RPXmUF1AS1OKEB3GnbcTikv4KS5a2', NULL, '2024-01-11 19:26:17', '2024-01-11 19:26:17'),
(6, 'Laswi Saptono', 'ellis49@example.com', NULL, '$2y$12$Cw6TOLtI68UaYszH9wmbPOwsiuvNBqi9tWzx1UkiVcvAXSUBUQDue', NULL, '2024-01-11 19:26:17', '2024-01-11 19:26:17'),
(7, 'Oni Padmasari M.Kom.', 'nababan.ami@example.com', NULL, '$2y$12$yCvwltWjCr/eR3jI6wq/1u7482WgkHOyUBv3HWHtPaRbfXbppIOBe', NULL, '2024-01-11 19:26:17', '2024-01-11 19:26:17'),
(8, 'Jindra Irawan', 'puput30@example.net', NULL, '$2y$12$VvnAFVBoKw2m6VrnbSJmteFHfaqvuDHJwnWLMQ06R9dbHTEmYv6qi', NULL, '2024-01-11 19:26:18', '2024-01-11 19:26:18'),
(9, 'Cecep Salahudin', 'mustofa.najwa@example.org', NULL, '$2y$12$Exjl/8NvwC8dEw/4GqYJVuMxwq9g80I0d/1yfAYREvirwZjB8XpVS', NULL, '2024-01-11 19:26:18', '2024-01-11 19:26:18'),
(10, 'Yessi Tantri Sudiati S.Gz', 'galih27@example.com', NULL, '$2y$12$lCjVqAsfWQV5dn2OCG88WOK4egt8.aY1MA3bn.Kvg4DYBYpWL5st.', NULL, '2024-01-11 19:26:18', '2024-01-11 19:26:18'),
(11, 'admin', 'admin@gmail.com', NULL, '$2y$10$h5uUUbzwKAzFO0pJJDk1eO.jsrcDezWuMQFcsbN6PFQof2fZjJkem', NULL, '2024-01-12 02:26:37', '2024-01-12 02:26:37');

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ballance` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wallets`
--

INSERT INTO `wallets` (`id`, `user_id`, `ballance`, `created_at`, `updated_at`) VALUES
(1, 8, 196417.00, '2024-01-11 19:44:20', '2024-01-11 19:44:20'),
(2, 1, 645861.00, '2024-01-11 19:44:20', '2024-01-11 19:44:20'),
(3, 3, 85666.00, '2024-01-11 19:44:20', '2024-01-11 19:44:20'),
(4, 2, 379008.00, '2024-01-11 19:44:20', '2024-01-11 19:44:20'),
(5, 4, 748506.00, '2024-01-11 19:44:20', '2024-01-11 19:44:20'),
(6, 11, 838704.00, '2024-01-11 19:44:20', '2024-01-11 19:44:20'),
(7, 10, 58260.00, '2024-01-11 19:44:20', '2024-01-11 19:44:20'),
(8, 9, 399982.00, '2024-01-11 19:44:20', '2024-01-11 19:44:20'),
(9, 5, 449616.00, '2024-01-11 19:44:20', '2024-01-11 19:44:20'),
(10, 7, 237333.00, '2024-01-11 19:44:20', '2024-01-11 19:44:20');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_wallet_id_foreign` (`wallet_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_wallet_id_foreign` FOREIGN KEY (`wallet_id`) REFERENCES `wallets` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
