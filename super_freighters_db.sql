-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2021 at 10:25 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `super_freighters_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uemail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uaddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipment_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `uname`, `uemail`, `uaddress`, `shipment_id`, `location_id`, `weight`, `created_at`, `updated_at`) VALUES
(1, 'Ezekiel', 'Ezekiel@yahoo.com', 'Elegant court', 1, 1, 12, '2021-02-24 07:54:11', '2021-02-24 07:54:11'),
(2, 'Derrick', 'Derrick@yahoo.com', 'Elegant court', 2, 2, 12, '2021-02-24 07:54:11', '2021-02-24 07:54:11'),
(3, 'Derrick', 'abby@yahh.com', 'asw', 1, 1, 222, '2021-02-24 09:45:19', '2021-02-24 09:45:19'),
(4, 'Derrick', 'abby@yahh.com', 'asw', 1, 1, 20, '2021-02-24 19:58:32', '2021-02-24 19:58:32'),
(5, 'Derrick', 'abby@yahh.com', 'asw', 1, 1, 20, '2021-02-24 19:59:42', '2021-02-24 19:59:42'),
(6, 'Derrickwqw', 'abby@yahh.com', 'asw', 1, 1, 20, '2021-02-24 19:59:55', '2021-02-24 19:59:55'),
(7, 'Derrickwqw', 'abby@yahh.com', 'asw', 1, 1, 20, '2021-02-24 20:04:29', '2021-02-24 20:04:29'),
(8, 'Derrickwqw', 'abby@yahh.com', 'asw', 1, 1, 20, '2021-02-24 20:04:54', '2021-02-24 20:04:54'),
(9, 'Derrickwqw', 'abby@yahh.com', 'asw', 1, 1, 20, '2021-02-24 20:05:13', '2021-02-24 20:05:13'),
(10, 'Derrickwqw', 'abby@yahh.com', 'asw', 1, 1, 20, '2021-02-24 20:05:17', '2021-02-24 20:05:17'),
(11, 'Derrickwqw', 'abby@yahh.com', 'asw', 1, 1, 20, '2021-02-24 20:05:42', '2021-02-24 20:05:42'),
(12, 'Derrickwqw', 'abby@yahh.com', 'asw', 1, 1, 20, '2021-02-24 20:07:41', '2021-02-24 20:07:41'),
(13, 'Derrickwqw', 'abby@yahh.com', 'asw', 1, 1, 20, '2021-02-24 20:08:08', '2021-02-24 20:08:08'),
(14, 'Derrickwqw', 'abby@yahh.com', 'asw', 1, 1, 20, '2021-02-24 20:08:39', '2021-02-24 20:08:39'),
(15, 'Derrickwqw', 'abby@yahh.com', 'asw', 1, 1, 20, '2021-02-24 20:09:37', '2021-02-24 20:09:37'),
(16, 'Derrickwqw', 'abby@yahh.com', 'asw', 1, 1, 20, '2021-02-24 20:10:10', '2021-02-24 20:10:10'),
(17, 'Derrickwqw', 'abby@yahh.com', 'asw', 1, 1, 20, '2021-02-24 20:10:22', '2021-02-24 20:10:22'),
(18, 'Final tryout', 'final@yahoo.com', 'aja lagos', 2, 2, 1900, '2021-02-24 20:11:46', '2021-02-24 20:11:46');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarrif` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `location`, `tarrif`, `created_at`, `updated_at`) VALUES
(1, 'United State', 1500, '2021-02-24 07:48:06', '2021-02-24 07:48:07'),
(2, 'United Kingdom', 800, '2021-02-24 07:50:42', '2021-02-24 07:50:42');

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
(1, '2021_02_23_233720_create_details_table', 1),
(2, '2021_02_24_073304_create_shipments_table', 1),
(3, '2021_02_24_074358_create_locations_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `shipments`
--

CREATE TABLE `shipments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mode_of_ship` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipments`
--

INSERT INTO `shipments` (`id`, `mode_of_ship`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Air', 50000, '2021-02-24 07:52:04', '2021-02-24 07:52:04'),
(2, 'Sea', 2000, '2021-02-24 07:53:00', '2021-02-24 07:53:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipments`
--
ALTER TABLE `shipments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shipments`
--
ALTER TABLE `shipments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
