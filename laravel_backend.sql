-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 02:51 AM
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
-- Database: `laravel_backend`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comments_content` text NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comments_content`, `post_id`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Selamat Timnas dan coach STY!!.', 3, 3, '2023-09-13 06:07:06', '2023-09-13 06:07:06', NULL),
(7, 'MANTA JIWA.', 3, 2, '2023-09-13 06:17:09', '2023-09-13 06:17:09', NULL),
(14, 'setiap musim hujan, dah gk heran', 5, 3, '2023-09-13 06:48:21', '2023-09-13 06:48:21', NULL),
(17, '(edit) komen cc', 3, 3, '2023-09-13 23:33:55', '2023-09-14 00:00:24', NULL),
(29, 'Terdapat promo diskon 10% untuk 10 pembeli pertama', 3, 3, '2023-09-14 00:06:38', '2023-09-14 00:17:34', '2023-09-14 00:17:34'),
(30, 'Terdapat promo diskon 20% untuk 10 pembeli pertama', 3, 3, '2023-09-14 00:06:40', '2023-09-14 00:20:10', '2023-09-14 00:20:10'),
(32, '(edit) Terdapat promo diskon 10% untuk 10 pembeli pertama', 3, 3, '2023-09-14 00:09:26', '2023-09-14 00:14:14', NULL),
(33, 'Coba komen', 11, 3, '2024-01-11 18:43:12', '2024-01-11 18:43:12', NULL);

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
(6, '2023_09_11_105420_create_post_table', 2),
(7, '2023_09_11_105845_create_comment_table', 2),
(8, '2023_09_12_025655_add_username_column', 3),
(9, '2023_09_14_092538_add_column_image', 4);

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

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(3, 'App\\Models\\User', 3, 'user login', '234b020e857f32fb86adbfc77efa49bba0eb098bea6307ead9d6a69b3e56b7ae', '[\"*\"]', '2024-01-11 18:43:12', NULL, '2023-09-12 23:53:51', '2024-01-11 18:43:12'),
(4, 'App\\Models\\User', 2, 'user login', 'fb6299d217a8627c85f77e5343ce2cc15808203b9234ef9be6660b1cd56db6c5', '[\"*\"]', '2023-09-14 03:12:29', NULL, '2023-09-13 00:05:41', '2023-09-14 03:12:29');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `news_content` text NOT NULL,
  `author` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `image`, `news_content`, `author`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Selamat Datang', NULL, 'Selamat Datang diBeritaID!\r\n\r\nKami dengan bangga menyediakan Anda akses ke berita terkini dan informasi terpercaya dari dalam negeri dan luar negeri. Dengan komitmen kami untuk memberikan laporan yang akurat dan mendalam, kami berharap Anda akan menemukanBeritaID sebagai sumber terpercaya untuk tetap terinformasi tentang peristiwa terbaru.\r\n\r\nKami selalu berusaha untuk memberikan liputan yang seimbang dan beragam tentang berbagai topik, mulai dari politik, ekonomi, budaya, hingga lingkungan. Tim kami yang berdedikasi selalu bekerja keras untuk memberikan berita yang bermanfaat dan relevan kepada Anda.\r\n\r\nTerima kasih telah memilihBeritaID sebagai sumber berita Anda. Kami mengundang Anda untuk menjelajahi laman web kami, membaca artikel-artikel terbaru, dan tetap terhubung dengan dunia di sekitar Anda.\r\n\r\nSalam,\r\nTimBeritaID\r\n', 1, '2023-09-11 12:13:25', '2023-09-11 12:13:25', NULL),
(2, 'Pengumuman', NULL, 'Pengumuman Penting!\r\n\r\nKepada Seluruh Pengguna BeritaID,\r\n\r\nKami ingin memberitahu Anda tentang pembaruan penting pada situs BeritaID yang akan meningkatkan pengalaman Anda dalam mendapatkan berita terbaru dan terpercaya.\r\n\r\n1. Tampilan Baru yang Lebih Bersih: Kami telah melakukan perubahan desain laman untuk membuatnya lebih bersih dan mudah dinavigasi. Kami berharap Anda akan menemukan situs kami lebih user-friendly.\r\n\r\n2. Kategori Berita Baru: Kami telah menambahkan beberapa kategori berita baru yang mencakup topik-topik menarik seperti teknologi, kesehatan, dan seni dan budaya. Anda sekarang dapat dengan mudah menemukan berita yang sesuai dengan minat Anda.\r\n\r\n3. Peningkatan Kecepatan: Kami telah meningkatkan kecepatan situs kami untuk memastikan Anda dapat mengakses berita tanpa gangguan.\r\n\r\n4. Saran dan Masukan: Kami sangat menghargai masukan Anda. Jika Anda memiliki saran atau komentar mengenai situs kami, jangan ragu untuk berbagi dengan kami melalui halaman Kontak kami.\r\n\r\nTerima kasih atas dukungan Anda yang berkelanjutan. Kami berkomitmen untuk terus memberikan berita yang berkualitas dan relevan.\r\n\r\nSalam,\r\nTim BeritaID\r\n', 1, '2023-09-11 12:13:25', '2023-09-11 12:13:25', NULL),
(3, 'Indonesia Vs Turkmenistan: Skuad Timnas Indonesia Kalahkan Turkmenistan 2-0 dan Lolos kulifikasi Piala Asia U-23', NULL, 'Dalam pertandingan kuakifikasi Piala Asia U-23 yang sangat penting, tim nasional Indonesia berhasil mengalahkan timnas Turkmenistan dengan skor akhir 2-0. Kemenangan ini tidak hanya membawa kegembiraan kepada para penggemar sepak bola Indonesia, tetapi juga mengamankan tempat mereka dalam turnamen Piala Asia U-23.Pertandingan yang digelar di stadion utama Jakarta ini memberikan performa cemerlang dari timnas Indonesia. Gol pertama dicetak oleh striker andalan, dan gol kedua datang dari serangan balik yang cepat. Pertahanan yang kuat dan penampilan yang mengesankan dari semua pemain membuat timnas Indonesia berhak meraih kemenangan.Dengan kemenangan ini, timnas Indonesia bergerak maju ke babak berikutnya dalam perjalanan mereka untuk mencapai Piala Asia U-23. Pelatih kepala tim nasional Indonesia mengucapkan rasa bangga atas usaha dan dedikasi para pemain, serta dukungan yang luar biasa dari penggemar sepak bola Indonesia.Turnamen Piala Asia U-23 akan menjadi tantangan yang besar bagi timnas Indonesia, tetapi dengan semangat kemenangan ini, mereka berharap untuk memberikan penampilan yang luar biasa di kompetisi yang akan datang. Semoga Indonesia terus meraih prestasi gemilang di dunia sepak bola!', 1, '2023-09-12 22:53:28', '2023-09-12 22:53:28', NULL),
(4, 'Jual Suzuki Ertiga 2013', NULL, 'Dijual Suzuki Ertiga tahun 2013 dalam kondisi sangat baik. Mobil ini memiliki performa yang handal dan nyaman untuk digunakan dalam perjalanan sehari-hari maupun perjalanan jauh. Berikut beberapa detail tentang mobil Suzuki Ertiga 2013:\n\n- Tahun: 2013\n- Warna: Silver\n- Transmisi: Manual\n- Kapasitas Penumpang: 7 orang\n- Kilometer: 50,000 km\n- Pemilik: 1 (Satu) pemilik sebelumnya\n\nHarga spesial: Rp 105 juta (nego).\n\n**Kontak:**\n- Nama: [Nama Anda]\n- No. Telepon/WhatsApp: [Nomor Kontak Anda]\n- Alamat: [Alamat Anda]\n\nJangan lewatkan kesempatan untuk memiliki Suzuki Ertiga 2013 ini. Hubungi kami sekarang untuk informasi lebih lanjut dan jadwalkan uji coba.', 3, '2023-09-13 00:03:50', '2023-09-13 01:33:22', NULL),
(5, 'Banjir Jakarta Merendam Beberapa Wilayah, Warga Dikevakuasi', NULL, 'Banjir yang melanda Jakarta telah merendam beberapa wilayah utama di ibu kota Indonesia. Hujan deras yang berlangsung selama beberapa hari telah menyebabkan sungai-sungai meluap, membanjiri jalan-jalan, pemukiman warga, dan wilayah-wilayah sekitarnya.\n\nPihak berwenang dan tim penyelamat sedang bekerja keras untuk mengatasi situasi ini. Upaya evakuasi sedang dilakukan untuk menyelamatkan warga yang terdampar oleh banjir. Beberapa pusat evakuasi telah dibuka di berbagai wilayah.\n\nBanjir ini juga telah menyebabkan kemacetan lalu lintas yang parah, dengan banyak jalan yang tidak dapat dilalui. Beberapa fasilitas umum, seperti sekolah dan perkantoran, terpaksa ditutup sementara.\n\nWarga Jakarta yang terkena dampak banjir telah mengalami kerugian besar, dengan rumah-rumah mereka terendam air dan barang-barang pribadi mereka rusak. Pemerintah setempat telah meminta bantuan dari pihak-pihak terkait dan mengkoordinasikan upaya bantuan kemanusiaan.\n\nPihak berwenang juga mengingatkan masyarakat untuk tetap waspada terhadap potensi banjir susulan dan melaksanakan tindakan pencegahan yang diperlukan. Sementara itu, cuaca buruk dan hujan masih berlanjut, dan pemantauan terus dilakukan untuk memantau situasi banjir yang terus berkembang di Jakarta.', 2, '2023-09-13 00:08:42', '2023-09-13 00:08:42', NULL),
(7, 'ini', NULL, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum sint debitis inventore! Perferendis maxime earum id assumenda amet, iste sint quae ullam nostrum facere voluptates, mollitia, eius sequi labore magnam!', 3, '2023-09-13 12:12:41', '2023-09-13 05:13:40', '2023-09-13 05:13:40'),
(10, 'Gempa Melanda Kota Marrakesh, Maroko', 'FaruNny8KZTFi8K7bjhSAc6UEdC4Dn.jpg', 'Perkembangan terkait korban gempa bumi yang terjadi di Maroko terus diperbaharui otoritas negara itu. Per Senin (11/9/2023), korban jiwa telah menembus 2.862 jiwa.\nPara warga dan tim penyelamat masih berupaya mencari korban selamat yang terkubur di reruntuhan, di mana rumah-rumah dari batu bata lumpur, batu dan kayu kasar retak roboh akibat gempa yang terjadi pada Jumat malam. Kota tua bersejarah Marrakesh juga mengalami kerusakan parah.', 2, '2023-09-14 03:12:29', '2023-09-14 03:12:29', NULL),
(11, 'Post Baru dari Candra', NULL, 'Jual Ginjal 1 buah 3jt', 3, '2024-01-11 18:33:59', '2024-01-11 18:33:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) DEFAULT 'text',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `firstname`, `lastname`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin', 'text', '2023-09-11 06:58:03', '$2y$10$8FtxXrvDyiSHhwOd2lGSnOqpxGHnj6iXLbFZO0YOyb.3r9Cqwv8CW', NULL, '2023-09-11 12:11:06', '2023-09-11 12:11:06', '2023-09-11 12:11:06'),
(2, 'budi@gmail.com', 'Budi Pekerti', 'Budi', 'Pekerti', '2023-09-12 12:58:10', '$2y$10$XiAxTB7qnzmKOJmwUqBvROZv4CdQPwqSdgmbox3PccV3DzHhsVDJe', '/', '2023-09-12 12:58:10', '2023-09-12 12:58:10', NULL),
(3, 'candra@gmail.com', 'Candra Ganteng', 'Candra', 'Ganteng', '2023-09-12 13:00:03', '$2y$10$ZKzd.jEr0mazl/SVvaVJoOtNo09cOcry.tRPro2M7IiXqR4v0mndi', '/', '2023-09-12 13:00:03', '2023-09-12 13:00:03', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_post_id_foreign` (`post_id`),
  ADD KEY `comment_user_id_foreign` (`user_id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_author_foreign` (`author`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comment_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `comment_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `post_author_foreign` FOREIGN KEY (`author`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
