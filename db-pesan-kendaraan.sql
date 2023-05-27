-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2023 at 03:21 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-pesan-kendaraan`
--

-- --------------------------------------------------------

--
-- Table structure for table `approve`
--

CREATE TABLE `approve` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pesanan_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `priority` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `approve`
--

INSERT INTO `approve` (`id`, `pesanan_id`, `user_id`, `priority`, `status`, `created_at`, `updated_at`) VALUES
(18, 16, 11, 1, 'approved', '2023-05-26 18:05:21', '2023-05-26 18:05:46'),
(19, 16, 7, 2, 'waiting', '2023-05-26 18:05:21', '2023-05-26 18:05:21'),
(20, 17, 7, 1, 'waiting', '2023-05-26 18:06:56', '2023-05-26 18:06:56'),
(21, 17, 11, 2, 'waiting', '2023-05-26 18:06:56', '2023-05-26 18:06:56');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kendaraan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kendaraan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_plat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `nama_kendaraan`, `jenis_kendaraan`, `no_plat`, `created_at`, `updated_at`) VALUES
(1, 'Avanza', 'orang', 'M 1234 AG', NULL, NULL),
(2, 'Xenia', 'orang', 'M 1234 AG', NULL, NULL),
(3, 'Toyota', 'orang', 'M 1234 AG', NULL, NULL),
(4, 'Kijang', 'orang', 'M 1234 AG', NULL, NULL),
(5, 'Alphard', 'orang', 'M 1234 AG', NULL, NULL),
(6, 'Traktor', 'barang', 'M 1234 AG', NULL, NULL),
(7, 'Eskafator', 'barang', 'M 1234 AG', NULL, NULL),
(8, 'Truk', 'barang', 'M 1234 AG', NULL, NULL),
(9, 'Tronton', 'barang', 'M 1234 AG', NULL, NULL),
(10, 'Bus', 'orang', 'M 1234 AG', NULL, NULL),
(11, 'Loader', 'barang', 'M 1234 AG', NULL, NULL),
(12, 'Grader', 'barang', 'M 1234 AG', NULL, NULL),
(13, 'Bulldozer', 'barang', 'M 1234 AG', NULL, NULL),
(14, 'Scrapper', 'barang', 'M 1234 AG', NULL, NULL),
(18, 'Polisi', 'orang', 'M 1234 AG', '2023-05-26 16:14:22', '2023-05-26 16:14:22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_25_141557_create_kendaraan_table', 1),
(6, '2023_05_25_142901_create_pesan_table', 1),
(7, '2023_05_25_144001_create_approve_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kendaraan_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `driver` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `kendaraan_id`, `tanggal_pesan`, `tanggal_kembali`, `driver`, `created_at`, `updated_at`) VALUES
(9, 'Wildan Maulana', 1, '2023-05-26', '2023-05-26', 'Bayu', '2023-05-26 07:04:13', '2023-05-26 07:04:13'),
(10, 'John Snow', 1, '2023-05-26', '2023-05-26', 'nasjld', '2023-05-26 07:04:44', '2023-05-26 07:04:44'),
(12, 'asdnkl', 1, '2023-05-25', '2023-05-27', 'adsljkn', NULL, NULL),
(13, 'tesr', 1, '2023-06-24', '2023-06-30', 'affa', NULL, NULL),
(14, 'John Snow', 1, '2023-06-10', '2023-06-10', 'jdklasaldj', '2023-05-26 13:40:53', '2023-05-26 13:40:53'),
(15, 'sdtfg', 7, '2023-07-26', '2023-06-08', 'rsdfjgk', '2023-05-26 15:05:09', '2023-05-26 15:05:09'),
(16, 'WILDAN', 3, '2023-11-12', '2023-11-13', 'rsdfjgk', '2023-05-26 18:05:21', '2023-05-26 18:05:21'),
(17, 'sdtfg', 1, '2023-12-12', '2023-12-13', 'rsdfjgk', '2023-05-26 18:06:56', '2023-05-26 18:06:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Wildan', 'wmaaf02@gmail.com', NULL, '$2y$10$QMVKAxauUpHP/OfHMuBYr.AjNt7qM2it6l8u3qn.X2ueMJ2XWTN1G', 'user', NULL, '2023-05-26 13:39:30', '2023-05-26 13:39:30'),
(6, 'kuan', 'kuan@gmail.com', NULL, '$2y$10$QMVKAxauUpHP/OfHMuBYr.AjNt7qM2it6l8u3qn.X2ueMJ2XWTN1G', 'admin', NULL, NULL, NULL),
(7, 'silung', 'silung@gmail.com', NULL, '$2y$10$QMVKAxauUpHP/OfHMuBYr.AjNt7qM2it6l8u3qn.X2ueMJ2XWTN1G', 'user', NULL, NULL, NULL),
(8, 'poraja', 'poraja@gmail.com', NULL, '$2y$10$QMVKAxauUpHP/OfHMuBYr.AjNt7qM2it6l8u3qn.X2ueMJ2XWTN1G', 'user', NULL, NULL, NULL),
(9, 'hezbi', 'hezbi@gmail.com', NULL, '$2y$10$QMVKAxauUpHP/OfHMuBYr.AjNt7qM2it6l8u3qn.X2ueMJ2XWTN1G', 'user', NULL, NULL, NULL),
(10, 'kurnia', 'kurnia@gmail.com', NULL, '$2y$10$QMVKAxauUpHP/OfHMuBYr.AjNt7qM2it6l8u3qn.X2ueMJ2XWTN1G', 'user', NULL, NULL, NULL),
(11, 'awan', 'awan@gmail.com', NULL, '$2y$10$QMVKAxauUpHP/OfHMuBYr.AjNt7qM2it6l8u3qn.X2ueMJ2XWTN1G', 'user', NULL, NULL, NULL),
(12, 'siti', 'siti@gmail.com', NULL, '$2y$10$QMVKAxauUpHP/OfHMuBYr.AjNt7qM2it6l8u3qn.X2ueMJ2XWTN1G', 'user', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approve`
--
ALTER TABLE `approve`
  ADD PRIMARY KEY (`id`),
  ADD KEY `approve_pesanan_id_foreign` (`pesanan_id`),
  ADD KEY `approve_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pesan_kendaraan_id_foreign` (`kendaraan_id`);

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
-- AUTO_INCREMENT for table `approve`
--
ALTER TABLE `approve`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `approve`
--
ALTER TABLE `approve`
  ADD CONSTRAINT `approve_pesanan_id_foreign` FOREIGN KEY (`pesanan_id`) REFERENCES `pesan` (`id`),
  ADD CONSTRAINT `approve_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_kendaraan_id_foreign` FOREIGN KEY (`kendaraan_id`) REFERENCES `kendaraan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
