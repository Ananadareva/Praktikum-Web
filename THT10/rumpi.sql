-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2023 at 05:29 PM
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
-- Database: `rumpi`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 3, 3, 'Quasi natus eum unde aut esse quo et amet. Ad omnis explicabo repudiandae voluptatum et. Quisquam ipsum minus dolor quod accusantium vero.', '2023-12-19 05:08:29', '2023-12-19 05:08:29'),
(2, 4, 3, 'Officiis est eos voluptatum illum. Est odio sint praesentium sit aut aperiam expedita. Voluptas dolores aliquid voluptatum nisi voluptatum aspernatur. Illo vel quidem rerum laborum eos sapiente.', '2023-12-19 05:08:29', '2023-12-19 05:08:29'),
(3, 4, 3, 'Provident reiciendis voluptatem nostrum quos dolorum magnam. Quis accusantium qui reprehenderit necessitatibus dolore accusamus soluta. Consequatur ut amet qui officia. Non ut consequatur ducimus dolores rerum ea sed.', '2023-12-19 05:08:29', '2023-12-19 05:08:29'),
(4, 3, 3, 'Facilis et fugiat sunt earum corporis soluta a reprehenderit. Beatae sapiente explicabo est doloremque sed eaque. Repudiandae autem similique quae a illum soluta maiores. Eaque eius porro quisquam est.', '2023-12-19 05:08:29', '2023-12-19 05:08:29'),
(5, 4, 3, 'Velit consequatur perspiciatis nam id incidunt et. Vero harum soluta accusantium beatae.', '2023-12-19 05:08:29', '2023-12-19 05:08:29'),
(6, 2, 2, 'Ut facere autem provident velit consequatur repudiandae quae. Ut dolorum nesciunt iusto qui nihil autem. Nihil voluptatem delectus ut porro nihil aperiam et.', '2023-12-19 05:09:12', '2023-12-19 05:09:12'),
(7, 2, 2, 'Suscipit nesciunt omnis magnam quia. Amet facere molestiae sint dolorem non architecto. Provident incidunt consectetur dolores dolorum dolor libero. Iste occaecati quas necessitatibus eos.', '2023-12-19 05:09:12', '2023-12-19 05:09:12'),
(8, 4, 2, 'Qui facilis ea sunt quas consequatur. Quia eum et sint laudantium modi. Odit assumenda libero quibusdam quidem.', '2023-12-19 05:09:12', '2023-12-19 05:09:12'),
(9, 1, 2, 'Tenetur alias ut distinctio unde omnis eaque quidem. Et distinctio eos vel totam ullam. Suscipit ut ut sapiente voluptatibus exercitationem nostrum. Dolor perferendis omnis harum sit suscipit repellat similique aspernatur.', '2023-12-19 05:09:12', '2023-12-19 05:09:12'),
(10, 4, 2, 'Ea ducimus exercitationem et fugit placeat aut. Numquam dolore deleniti distinctio cumque perspiciatis. Est nostrum quibusdam nemo neque et rerum pariatur. Ut voluptatem quisquam libero aut error.', '2023-12-19 05:09:12', '2023-12-19 05:09:12'),
(11, 10, 1, 'Similique nesciunt id aut consequatur tenetur ea. Hic reprehenderit adipisci voluptas in sed consequatur. Ad quia non atque assumenda dolorem quia officiis rerum. Nostrum eos aspernatur rerum in rerum iste quo.', '2023-12-19 05:09:32', '2023-12-19 05:09:32'),
(12, 10, 1, 'Accusamus ducimus dolorem asperiores eius molestiae. Perferendis quis iste reprehenderit corporis. Iure ea sit officiis minus. Et natus consequatur non.', '2023-12-19 05:09:32', '2023-12-19 05:09:32'),
(13, 8, 1, 'Et harum est et rerum. Id officia placeat aut explicabo earum quae. Quam iure debitis vero iure aliquam vel veniam. At asperiores sapiente omnis illo dignissimos optio deserunt dolorum.', '2023-12-19 05:09:32', '2023-12-19 05:09:32'),
(14, 9, 1, 'Quia ut id ea qui. Est officiis beatae necessitatibus est aliquid. Neque aut reiciendis rerum non tempore nihil placeat numquam.', '2023-12-19 05:09:32', '2023-12-19 05:09:32'),
(15, 8, 1, 'Quis aut velit itaque dolorem doloribus ut ex quia. Molestiae maxime est pariatur consequuntur aut voluptatem consectetur. Voluptas quia sed aliquam officia expedita sint dolores iure. Ipsa sit quam enim fugiat velit animi.', '2023-12-19 05:09:32', '2023-12-19 05:09:32');

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
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `fileName` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `like_count` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `like_count`, `created_at`, `updated_at`) VALUES
(1, 2, 'Berita Terkini: Pemimpin Dunia Kumpul untuk Bahas Krisis Iklim. 🌍 #ClimateAction', 'Et veritatis facilis enim pariatur voluptatem. Fugiat esse necessitatibus exercitationem qui natus officiis eveniet. Voluptatum vel voluptas adipisci blanditiis rem. Non nemo impedit facilis velit ducimus ratione facere.', 83, '2023-12-19 02:38:16', '2023-12-19 02:38:16'),
(2, 1, 'Breaking News: Vaksin COVID-19 Baru Ditemukan, Harapan Baru dalam Mengatasi Pandemi. 💉 #COVID19', 'Sed nemo modi dolor voluptatem voluptatum maxime. Nisi voluptates sint sunt repellendus velit. Natus illum delectus fugit dolores alias quisquam. Tempore provident accusantium ab corporis quis accusamus.', 88, '2023-12-19 02:38:16', '2023-12-19 02:38:16'),
(3, 3, 'Dunia Teknologi: Perusahaan Raksasa Luncurkan Produk Inovatif. 🚀 #TechNews', 'Similique in ab doloremque iste fuga quia. Nihil dolor delectus consequuntur odio repellendus praesentium recusandae incidunt. Et aut fugit alias quibusdam corporis non facere voluptas.', 88, '2023-12-19 02:38:16', '2023-12-19 02:38:16'),
(4, 1, 'Berita Bisnis: Pasar Saham Menguat, Ekonomi Pulih dari Dampak Pandemi. 💼 #BusinessUpdate', 'Vero praesentium veritatis asperiores voluptatem quia qui. Nostrum excepturi maxime qui recusandae quia. Voluptas veritatis in vitae repellendus. Autem est illum necessitatibus velit praesentium quos.', 53, '2023-12-19 02:38:16', '2023-12-19 02:38:16'),
(5, 1, 'Politik Global: Pertemuan Tingkat Tinggi untuk Membahas Isu Keamanan Dunia. 🌐 #GlobalPolitics', 'Dicta cupiditate commodi vitae eius. Voluptate libero quos tempore est accusamus ipsam vero. Aut quod quisquam vero iusto quasi reiciendis rem. Numquam deserunt enim ut suscipit magnam nesciunt.', 8, '2023-12-19 02:38:16', '2023-12-19 02:38:16'),
(6, 1, 'Kesehatan dan Gaya Hidup: Tips Sehat untuk Hidup Lebih Baik. 🏋️‍♀️ #HealthyLiving', 'Alias velit nobis sed sed adipisci rerum adipisci. Voluptatem ad sed dolorem reprehenderit. Accusantium aut nihil quis sunt perferendis est. Adipisci consectetur consequuntur vero quia.', 43, '2023-12-19 02:38:16', '2023-12-19 02:38:16'),
(7, 1, 'Kebudayaan dan Seni: Festival Seni Rupa Menampilkan Karya Spektakuler. 🎨 #ArtCulture', 'Ipsa deserunt dolores quo repellat qui. Labore repellendus rerum odio qui tenetur et. Deleniti odit omnis quam veniam aperiam dolore. Saepe qui itaque est ut.', 6, '2023-12-19 02:38:16', '2023-12-19 02:38:16'),
(8, 2, 'Berita Olahraga: Atlet Lokal Raih Prestasi Internasional di Olimpiade. 🏅 #SportsUpdate', 'Assumenda et eum dicta distinctio animi est aut. Aut possimus iure iste. Voluptatem autem suscipit in cumque eveniet qui. Et veniam in est.', 40, '2023-12-19 02:38:16', '2023-12-19 02:38:16'),
(9, 1, 'Sains dan Penelitian: Temuan Baru Mengungkap Misteri Alam Semesta. 🔬 #ScienceDiscovery', 'Quo ex est perspiciatis maxime repudiandae amet vitae commodi. Sed rerum eum quos delectus sed. Debitis aliquid similique ratione officia ut.', 55, '2023-12-19 02:38:16', '2023-12-19 02:38:16'),
(10, 2, 'Kisah Inspiratif: Anak Muda Berjuang untuk Mewujudkan Mimpi. ✨ #Inspiration', 'Dolore quo tempore dolorem ut aut porro. Reprehenderit inventore doloremque et blanditiis asperiores minus. Aperiam hic enim pariatur velit. Nostrum magnam libero deleniti autem pariatur omnis.', 11, '2023-12-19 02:38:16', '2023-12-19 02:38:16');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `profilePhoto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `profilePhoto`) VALUES
(1, 'Kadir Prabowo', 'mustofa25@example.com', '2023-12-19 02:32:25', '$2y$12$ZqhRlcj7oKGUDWYQ47ww5ufE7hQ20B/CA3jKnG/MCOMh/404AyF0K', 'lJiHciT335', '2023-12-19 02:32:25', '2023-12-19 02:32:25', NULL),
(2, 'Empluk Nashiruddin', 'cakrabuana73@example.net', '2023-12-19 02:32:25', '$2y$12$ZqhRlcj7oKGUDWYQ47ww5ufE7hQ20B/CA3jKnG/MCOMh/404AyF0K', 'LGCgkWLjCz', '2023-12-19 02:32:25', '2023-12-19 02:32:25', NULL),
(3, 'Elma Belinda Sudiati S.Gz', 'rajasa.samiah@example.com', '2023-12-19 02:32:25', '$2y$12$ZqhRlcj7oKGUDWYQ47ww5ufE7hQ20B/CA3jKnG/MCOMh/404AyF0K', 'HjeEP7RGxN', '2023-12-19 02:32:25', '2023-12-19 02:32:25', NULL),
(4, 'Lalita Melani', 'victoria.saragih@example.com', '2023-12-19 02:32:25', '$2y$12$ZqhRlcj7oKGUDWYQ47ww5ufE7hQ20B/CA3jKnG/MCOMh/404AyF0K', 'dR4XHuH7FK', '2023-12-19 02:32:25', '2023-12-19 02:32:25', NULL),
(5, 'Dasa Wacana', 'najam21@example.com', '2023-12-19 02:32:25', '$2y$12$ZqhRlcj7oKGUDWYQ47ww5ufE7hQ20B/CA3jKnG/MCOMh/404AyF0K', 'soAYK1upX0', '2023-12-19 02:32:25', '2023-12-19 02:32:25', NULL),
(6, 'Tania Aryani', 'fitria65@example.net', '2023-12-19 02:32:25', '$2y$12$ZqhRlcj7oKGUDWYQ47ww5ufE7hQ20B/CA3jKnG/MCOMh/404AyF0K', 'JiOmpbiIKK', '2023-12-19 02:32:25', '2023-12-19 02:32:25', NULL),
(7, 'Murti Sihombing', 'gada86@example.org', '2023-12-19 02:32:25', '$2y$12$ZqhRlcj7oKGUDWYQ47ww5ufE7hQ20B/CA3jKnG/MCOMh/404AyF0K', 'kEGAYem3fS', '2023-12-19 02:32:25', '2023-12-19 02:32:25', NULL),
(8, 'Syahrini Ratih Zulaika S.Ked', 'wasita.luwes@example.net', '2023-12-19 02:32:25', '$2y$12$ZqhRlcj7oKGUDWYQ47ww5ufE7hQ20B/CA3jKnG/MCOMh/404AyF0K', '99InvFKiNT', '2023-12-19 02:32:25', '2023-12-19 02:32:25', NULL),
(9, 'Joko Karman Tamba S.IP', 'ypudjiastuti@example.com', '2023-12-19 02:32:25', '$2y$12$ZqhRlcj7oKGUDWYQ47ww5ufE7hQ20B/CA3jKnG/MCOMh/404AyF0K', 'BSh82oouWd', '2023-12-19 02:32:25', '2023-12-19 02:32:25', NULL),
(10, 'Gambira Anggriawan S.Pd', 'ghandayani@example.com', '2023-12-19 02:32:25', '$2y$12$ZqhRlcj7oKGUDWYQ47ww5ufE7hQ20B/CA3jKnG/MCOMh/404AyF0K', '1yoKHUJ4zo', '2023-12-19 02:32:25', '2023-12-19 02:32:25', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `files_post_id_foreign` (`post_id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
