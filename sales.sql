-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2018 at 07:07 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sales`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `nama`, `email`, `deal`) VALUES
(19, 'Ria Riani', 'ria@gmail.com', 45000000),
(20, 'Jarita', 'jarita@gmail.com', 760000),
(21, 'faiqoh', 'faiqoh11@gmail.com', 600000),
(22, 'Lana', 'maulana@gmail.com', 500000),
(23, 'Bima', 'bima@gmail.com', 5000000),
(24, 'Bani', 'bani@gmail.com', 5000000),
(25, 'Abimana', 'abi@gmail.com', 350000),
(33, 'Galih', 'Galih@gmail.com', 7500000),
(40, 'Gabriel', 'gabriel@gmail.com', 3500000),
(45, 'Andi', 'andi@email.com', 740000),
(46, 'Cahya', 'cahya@gmail.com', 450000),
(51, 'Ganjar', 'ganjar@gmail.com', 5000000),
(53, 'Raras', 'raras@gmail.com', 3500000),
(54, 'Andin', 'andin@gmail.com', 7500000),
(66, 'kirana', 'kirana@gmail.com', 5000000),
(67, 'Hikmal', 'hikmal@gmail.com', 580000);

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
(1, '2018_05_16_212022_create_crud_table', 1),
(2, '2018_05_16_223018_create_users_table', 2),
(3, '2018_05_18_215220_create_users_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `isAdmin`) VALUES
(1, 'Angga', 'angga@gmail.com', '$2y$10$AXjatkm1f4obSin.hROxU.b38BNzUT0A48oa4wvrBPgx6utNzpnUS', 'kAGv701JEyoWipT2ZllxrBLmvcr7VzM9SWIKzhHWn2WNIH4wVugfFqxnjEDt', '2018-05-19 05:14:21', '2018-05-19 05:14:21', 1),
(2, 'Rani', 'rani@gmail.com', '$2y$10$5ahhb46FoaL9wBAXurd.Zu0gc4DlNJxSXmVeJQeP3LdTuXfRFgFb6', 'wK3F3sC6qU1aFPG4cK0ZJCzosNpVsAR99g9R7xNXKixxOMHlT0Grdb5hdvYz', '2018-05-19 05:19:08', '2018-05-19 05:19:08', 0),
(3, 'Bila', 'bila@gmail.com', '$2y$10$bD7kOGEfOz0ZF5KhgyNFLeYdmdpOiVn8viWxsCmGMdIOCevdnLSTO', '9vQnMoQ0fjUhBBMY6wvKMy3BiSDAKzVaHALNbHEeBuAdSN9qPFRtDIjREPSx', '2018-05-19 05:21:28', '2018-05-19 05:21:28', 0),
(4, 'ambar', 'ambar@gmail.com', '$2y$10$1vIQOt68uUApxz.2LT15GOrsgcQPu7fEhA8G86GzCP1nKIug3mnz6', 'QZJjCME4VWarpwFI0foopHGFnrareG5wDE4sG6NNBdDsQj6yZqUx8U1Hypph', '2018-05-19 05:21:57', '2018-05-19 05:21:57', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
