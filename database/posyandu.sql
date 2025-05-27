-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 19, 2025 at 01:55 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posyandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `anak`
--

CREATE TABLE `anak` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_orangtua` bigint UNSIGNED NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anak`
--

INSERT INTO `anak` (`id`, `nama`, `id_orangtua`, `tanggal_lahir`, `tempat_lahir`, `jenis_kelamin`, `created_at`, `updated_at`) VALUES
('A0001', 'Aisyah', 1, '2025-01-12', 'Bandung', 'perempuan', '2025-05-06 02:00:00', '2025-05-06 02:00:00'),
('A0002', 'Bintang', 4, '2025-02-10', 'Jakarta', 'laki-laki', '2025-05-06 02:01:00', '2025-05-06 02:01:00'),
('A0003', 'Citra', 1, '2025-03-25', 'Surabaya', 'perempuan', '2025-05-06 02:02:00', '2025-05-06 02:02:00'),
('A0004', 'Daffa', 4, '2025-04-01', 'Medan', 'laki-laki', '2025-05-06 02:03:00', '2025-05-06 02:03:00'),
('A0005', 'Elina', 4, '2025-01-30', 'Jakarta', 'perempuan', '2025-05-06 02:04:00', '2025-05-06 02:04:00'),
('A0006', 'Farhan', 3, '2025-03-15', 'Bandung', 'laki-laki', '2025-05-06 02:05:00', '2025-05-06 02:05:00'),
('A0007', 'Gita', 1, '2025-02-20', 'Bekasi', 'perempuan', '2025-05-06 02:06:00', '2025-05-06 02:06:00'),
('A0008', 'Hilmi', 3, '2025-01-10', 'Depok', 'laki-laki', '2025-05-06 02:07:00', '2025-05-06 02:07:00'),
('A0009', 'Intan', 4, '2025-02-18', 'Bogor', 'perempuan', '2025-05-06 02:08:00', '2025-05-06 02:08:00'),
('A0010', 'Jovan', 3, '2025-04-22', 'Jakarta', 'laki-laki', '2025-05-06 02:09:00', '2025-05-06 02:09:00'),
('A0011', 'Kirana', 1, '2025-03-03', 'Yogyakarta', 'perempuan', '2025-05-06 02:10:00', '2025-05-06 02:10:00'),
('A0012', 'Leo', 3, '2025-01-28', 'Solo', 'laki-laki', '2025-05-06 02:11:00', '2025-05-06 02:11:00'),
('A0013', 'Mira', 1, '2025-02-09', 'Semarang', 'perempuan', '2025-05-06 02:12:00', '2025-05-06 02:12:00'),
('A0014', 'Naufal', 3, '2025-04-12', 'Palembang', 'laki-laki', '2025-05-06 02:13:00', '2025-05-06 02:13:00'),
('A0015', 'Olivia', 4, '2024-08-15', 'Bandung', 'perempuan', '2025-05-06 02:14:00', '2025-05-06 02:14:00'),
('A0016', 'Putra', 3, '2025-01-05', 'Jakarta', 'laki-laki', '2025-05-06 02:15:00', '2025-05-06 02:15:00'),
('A0017', 'Qanita', 1, '2025-02-27', 'Bekasi', 'perempuan', '2025-05-06 02:16:00', '2025-05-06 02:16:00'),
('A0018', 'Rafi', 3, '2025-03-08', 'Tangerang', 'laki-laki', '2025-05-06 02:17:00', '2025-05-06 02:17:00'),
('A0019', 'Salsabila', 1, '2025-04-29', 'Bogor', 'perempuan', '2025-05-06 02:18:00', '2025-05-06 02:18:00'),
('A0020', 'Tegar', 3, '2025-02-16', 'Cirebon', 'laki-laki', '2025-05-06 02:19:00', '2025-05-06 02:19:00'),
('A0411', 'mely', 1, '2025-03-05', 'Jakarta', 'perempuan', '2025-05-04 06:29:46', '2025-05-04 06:29:46'),
('A1672', 'Putri', 6, '2024-02-13', 'Jakarta', 'perempuan', '2025-05-12 06:21:09', '2025-05-12 06:21:09'),
('A2357', 'Satriyo', 6, '2023-02-08', 'Jakarta', 'laki-laki', '2025-05-12 06:24:26', '2025-05-12 06:24:26'),
('A3063', 'asd', 6, '2025-03-26', 'asd', 'laki-laki', '2025-05-12 22:07:21', '2025-05-12 22:07:21'),
('A4332', 'Zura', 3, '2025-02-05', 'Jakarta', 'perempuan', '2025-05-05 07:43:07', '2025-05-05 07:43:07'),
('A5725', 'asd', 6, '2021-05-13', 'asd', 'perempuan', '2025-05-12 22:11:41', '2025-05-12 22:11:41'),
('A5812', 'Putro', 1, '2024-05-09', 'Bonang', 'laki-laki', '2025-05-12 06:04:07', '2025-05-12 06:04:07'),
('A5820', 'irfan', 6, '2024-02-14', 'Jakarta', 'laki-laki', '2025-05-12 06:23:14', '2025-05-12 06:23:51'),
('A5855', 'asd', 6, '2022-02-09', 'asd', 'laki-laki', '2025-05-12 22:03:16', '2025-05-12 22:03:16'),
('A7145', 'Satriyo', 1, '2023-02-07', 'Jakarta', 'laki-laki', '2025-05-12 22:16:02', '2025-05-12 22:16:02'),
('A7164', 'Michaeel', 7, '2025-05-13', 'Jakarta', 'perempuan', '2025-05-12 22:14:19', '2025-05-12 22:14:19'),
('A7398', 'Sofie', 4, '2025-05-06', 'Jakarta', 'perempuan', '2025-05-05 23:03:53', '2025-05-05 23:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `imunisasi`
--

CREATE TABLE `imunisasi` (
  `id` bigint UNSIGNED NOT NULL,
  `id_anak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_imunisasi` date NOT NULL,
  `imunisasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vitamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `imunisasi`
--

INSERT INTO `imunisasi` (`id`, `id_anak`, `tanggal_imunisasi`, `imunisasi`, `vitamin`, `created_at`, `updated_at`) VALUES
(1, 'A0411', '2025-05-05', 'Rubela', 'B', '2025-05-05 05:27:32', '2025-05-05 05:33:48'),
(3, 'A0411', '2025-05-06', 'Covid', 'B', '2025-05-06 01:41:41', '2025-05-06 01:41:41'),
(4, 'A0411', '2025-05-06', 'Covid', 'B', '2025-05-06 01:41:41', '2025-05-06 01:41:41'),
(5, 'A0411', '2025-05-06', 'Covid', 'B', '2025-05-06 01:41:41', '2025-05-06 01:41:41'),
(6, 'A0411', '2025-05-06', 'Covid', 'B', '2025-05-06 01:41:41', '2025-05-06 01:41:41'),
(7, 'A0411', '2025-05-06', 'Covid', 'B', '2025-05-06 01:41:41', '2025-05-06 01:41:41'),
(8, 'A0411', '2025-05-06', 'Covid', 'B', '2025-05-06 01:41:41', '2025-05-06 01:41:41'),
(9, 'A0411', '2025-05-06', 'Covid', 'B', '2025-05-06 01:41:41', '2025-05-06 01:41:41'),
(10, 'A0411', '2025-05-06', 'Covid', 'B', '2025-05-06 01:41:41', '2025-05-06 01:41:41'),
(11, 'A0411', '2025-05-06', 'Covid', 'B', '2025-05-06 01:41:41', '2025-05-06 01:41:41'),
(12, 'A0411', '2025-05-06', 'Rubela', 'A', '2025-05-05 22:49:30', '2025-05-05 22:49:30'),
(13, 'A5812', '2025-05-12', 'Rubela', 'B', '2025-05-12 06:04:37', '2025-05-12 06:04:37');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_posyandu`
--

CREATE TABLE `jadwal_posyandu` (
  `id` bigint UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal_posyandu`
--

INSERT INTO `jadwal_posyandu` (`id`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'HACxjPAYcJ.jpg', '2025-05-03 21:45:35', '2025-05-03 21:45:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_petugas_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '2025_05_03_000940_create_orangtua_table', 1),
(4, '2025_05_03_152940_create_anak_table', 1),
(5, '2025_05_03_152940_create_jadwal_posyandu_table', 1),
(6, '2025_05_03_152941_create_imunisasi_table', 1),
(7, '2025_05_03_152941_create_perkembangan_anak_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orangtua`
--

CREATE TABLE `orangtua` (
  `id` bigint UNSIGNED NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orangtua`
--

INSERT INTO `orangtua` (`id`, `nik`, `nama_ibu`, `no_telp`, `alamat`, `created_at`, `updated_at`) VALUES
(1, '2243213243223', 'Ibu Shabrinaee', '089721218932', 'Blok K', '2025-05-04 06:29:46', '2025-05-17 08:54:38'),
(3, '2243213243111', 'Ibu Mely', '081245328756', 'Fortune', '2025-05-05 07:43:07', '2025-05-05 07:43:07'),
(4, '2243213242138', 'Ibu Zura Humaira', '081245322121', 'Gatau dimana', '2025-05-05 23:03:53', '2025-05-12 06:01:48'),
(6, '221011700050', 'Ibu rio', '089712321232', 'Fortune', '2025-05-12 06:21:09', '2025-05-12 06:21:09'),
(7, '2243213243223', 'Ibu putro', '123443212313', 'Blok K', '2025-05-12 22:14:19', '2025-05-12 22:14:19');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perkembangan_anak`
--

CREATE TABLE `perkembangan_anak` (
  `id` bigint UNSIGNED NOT NULL,
  `id_anak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_posyandu` date NOT NULL,
  `berat_badan` decimal(8,2) NOT NULL,
  `ket_bb` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinggi_badan` decimal(8,2) NOT NULL,
  `ket_tb` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perkembangan_anak`
--

INSERT INTO `perkembangan_anak` (`id`, `id_anak`, `tanggal_posyandu`, `berat_badan`, `ket_bb`, `tinggi_badan`, `ket_tb`, `created_at`, `updated_at`) VALUES
(5, 'A0411', '2025-05-04', '1.40', 'kurus bat jir', '10.00', 'oke la', '2025-05-04 08:31:30', '2025-05-04 08:31:30'),
(6, 'A0411', '2025-05-08', '2.00', 'oke', '2.00', 'oke', '2025-05-08 02:04:30', '2025-05-08 02:04:30'),
(7, 'A5812', '2025-05-12', '3.00', 'oke', '2.00', 'oke', '2025-05-12 06:05:15', '2025-05-12 06:05:15');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2025-05-03 21:35:13', '$2y$12$EzGnuTl4kRRF/VsSo1x1DuIaMHZgIfJTIoqi4ebnUekIhvnvXiZ6S', 'w9G0PvuWYEEak1voq76SGNTpDjhb9ja9LbMCskux41qpPpckJqEnrDdd3unR', '2025-05-03 21:35:13', '2025-05-03 21:35:13'),
(3, 'admin2', NULL, 'password', NULL, '2025-05-03 22:01:02', '2025-05-03 22:01:02'),
(4, 'yayasan', NULL, 'password', NULL, '2025-05-08 02:20:54', '2025-05-08 02:20:54'),
(5, 'admin3', NULL, 'password', NULL, '2025-05-12 06:11:54', '2025-05-12 06:11:54'),
(6, 'admin5', NULL, 'password', NULL, '2025-05-12 06:53:06', '2025-05-12 06:53:06');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('wgTdBPtMcb56Fx2eYhGOuBUP7wnHH6NCor2nDYrY', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVEo2Wkpwd1hUSzVpUlRhMFUyN0pDeVRKb1BSOFY2MlpOdno5RGZ3USI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly9wb3N5YW5kdS50ZXN0L2xvZ2luLW9yYW5ndHVhIjt9fQ==', 1747497970),
('YYTnNRcduV8svmkI4cZRLfOc0HcMvcpxOgYacNrq', NULL, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSE9iZ1F6WHV1Ymxhczc4dnRCNHpFOGU5RFhmVnJ1TUJINjhlcTY0NiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9wb3N5YW5kdS50ZXN0L2xvZ2luIjt9fQ==', 1747497928);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`id`),
  ADD KEY `anak_id_orangtua_foreign` (`id_orangtua`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `imunisasi`
--
ALTER TABLE `imunisasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `imunisasi_id_anak_foreign` (`id_anak`);

--
-- Indexes for table `jadwal_posyandu`
--
ALTER TABLE `jadwal_posyandu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orangtua`
--
ALTER TABLE `orangtua`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `perkembangan_anak`
--
ALTER TABLE `perkembangan_anak`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perkembangan_anak_id_anak_foreign` (`id_anak`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imunisasi`
--
ALTER TABLE `imunisasi`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jadwal_posyandu`
--
ALTER TABLE `jadwal_posyandu`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orangtua`
--
ALTER TABLE `orangtua`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `perkembangan_anak`
--
ALTER TABLE `perkembangan_anak`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anak`
--
ALTER TABLE `anak`
  ADD CONSTRAINT `anak_id_orangtua_foreign` FOREIGN KEY (`id_orangtua`) REFERENCES `orangtua` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `imunisasi`
--
ALTER TABLE `imunisasi`
  ADD CONSTRAINT `imunisasi_id_anak_foreign` FOREIGN KEY (`id_anak`) REFERENCES `anak` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `perkembangan_anak`
--
ALTER TABLE `perkembangan_anak`
  ADD CONSTRAINT `perkembangan_anak_id_anak_foreign` FOREIGN KEY (`id_anak`) REFERENCES `anak` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
