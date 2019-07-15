-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2019 at 06:06 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventsbagus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `id_user`, `nama`, `kategori`, `tempat`, `foto`, `tanggal`, `isi`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Event terbaruku yang asik', 'IT', 'Depan sekolah kita', '1563196125iXEjuIpOTEnSCMLxwhoBqW.jpg', '2019-07-25', '<p>Demikian Surat Perjanjian ini dibuat dan di tandatangani rangkap 3 (tiga) mengikat <strong>PARA PIHAK</strong> dan sama kuat tanpa adanya tekanan dari siapapun&nbsp; dan apabila salah satu pihak mengingkari pernyataan ini maka pihak tersebut siap dituntut sesuai dengan Undang-undang Pemerintah Republik Indonesia.</p>', '2019-07-15 06:08:45', '2019-07-15 08:34:33', '2019-07-15 08:34:33'),
(2, 2, 'The True Concept of Financial Freedom', 'IT', 'Menara BTPN - lantai 27  Jl. Dr. Ide Anak Agung Gde Agung Kav. 5.5 – 5.6  Jakarta Selatan, DKI Jakarta 12950', '1563205521unSMEZcmQgPv5SsqHCPtC4.jpg', '2019-07-27', '<h2>About this Event</h2>\r\n\r\n<p>Learn the super financial basic from 3 different sectors at once: Banking, Stocks and Crypto. Start your 2019 with Financial Hacks from the experts!</p>\r\n\r\n<p>This collaboration event is brought by: Jenius, Finansialku and Coinone Indonesia</p>\r\n\r\n<p>This is a&nbsp;<strong>FREE</strong>&nbsp;event. Don&#39;t miss it. Register now as seat is limited.</p>\r\n\r\n<p><strong>Speakers:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>:: Ophy Quamilla, Digital Banking Relationship Manager at Jenius</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>:: Rista Zwestika, Financial Planner at Finansialku</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>:: Sheila Suekto, Head of Business Strategy at Coinone Indonesia</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Place &amp; Time</strong></p>\r\n\r\n<p>Menara BTPN (lantai 27) - CBD Kuningan, Jl. Dr. Ide Anak Agung Gde Agung Kav 5.6 - 5.6 Jakarta Selatan| Sabtu, 27 Juli 2019 | 13:00 - 16:00 WIB</p>', '2019-07-15 08:45:21', '2019-07-15 08:45:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_event` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kegiatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_activities`
--

CREATE TABLE `log_activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `log_activities`
--

INSERT INTO `log_activities` (`id`, `subject`, `url`, `method`, `ip`, `agent`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Tambah data Event sukses', 'http://localhost/EventsBagus/postEvent', 'POST', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 1, '2019-07-15 06:08:45', '2019-07-15 06:08:45', NULL),
(2, 'Tambah data Peserta sukses', 'http://localhost/EventsBagus/postPeserta', 'POST', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 1, '2019-07-15 06:24:40', '2019-07-15 06:24:40', NULL),
(3, 'Tambah data Peserta sukses', 'http://localhost/EventsBagus/postPeserta', 'POST', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 1, '2019-07-15 07:52:32', '2019-07-15 07:52:32', NULL),
(4, 'Hapus data Event sukses', 'http://localhost/EventsBagus/hapus-event/1', 'GET', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 1, '2019-07-15 08:34:33', '2019-07-15 08:34:33', NULL),
(5, 'Hapus data Peserta sukses', 'http://localhost/EventsBagus/hapus-peserta/1', 'GET', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 1, '2019-07-15 08:34:39', '2019-07-15 08:34:39', NULL),
(6, 'Hapus data Peserta sukses', 'http://localhost/EventsBagus/hapus-peserta/2', 'GET', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 1, '2019-07-15 08:34:41', '2019-07-15 08:34:41', NULL),
(7, 'Tambah data Event sukses', 'http://localhost/EventsBagus/postEvent', 'POST', '::1', 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.100 Safari/537.36', 2, '2019-07-15 08:45:20', '2019-07-15 08:45:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_06_28_134646_create_admins_table', 1),
(4, '2019_06_30_050348_create_peserta_table', 1),
(5, '2019_07_01_013651_crate_event_table', 1),
(6, '2019_07_01_024049_create_jadwal_table', 1),
(7, '2019_07_15_121936_create_log_activity_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_event` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id`, `id_user`, `nama_event`, `nama`, `email`, `no_hp`, `alamat`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Event terbaruku yang asik', 'Bondan', 'bondan@gmail.com', '083113530795', 'Cimohong', '2019-07-15 06:24:40', '2019-07-15 08:34:39', '2019-07-15 08:34:39'),
(2, 1, 'Event terbaruku yang asik', 'Risqi', 'risqi@gmail.com', '8352', 'jfksfhskh', '2019-07-15 07:52:32', '2019-07-15 08:34:41', '2019-07-15 08:34:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Bagus', 'bagus@gmail.com', NULL, '$2y$10$PqS5TSz6oXjn1aTtpcyrB.1kJbDFmu14IDbAB08wf3QoIewSrCTCi', NULL, '2019-07-15 06:05:12', '2019-07-15 06:05:12', NULL),
(2, 'Bagus Cell', 'bagoes@gmail.com', NULL, '$2y$10$zYqsngPdWAiwkWmSge5cF.Cv3XNORKoku/XFSZwV30OEnUkxpudze', NULL, '2019-07-15 08:37:58', '2019-07-15 08:37:58', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_activities`
--
ALTER TABLE `log_activities`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `peserta_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_activities`
--
ALTER TABLE `log_activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
