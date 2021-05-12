-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2021 at 10:59 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gatech`
--

-- --------------------------------------------------------

--
-- Table structure for table `daily_reports`
--

CREATE TABLE `daily_reports` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daily_reports`
--

INSERT INTO `daily_reports` (`id`, `title`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Sales for the month of may', 7, '2021-05-11 19:58:44', '2021-05-11 19:58:44');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2021_04_29_132145_create_privileges_table', 1),
(5, '2021_05_08_123659_create_payments_table', 3),
(10, '2014_10_12_000000_create_users_table', 5),
(11, '2021_05_08_124224_create_salaries_table', 6),
(13, '2021_05_10_201139_create_daily_reports_table', 7);

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
-- Table structure for table `privileges`
--

CREATE TABLE `privileges` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privileges`
--

INSERT INTO `privileges` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Managers', NULL, NULL),
(2, 'Accountant', NULL, NULL),
(3, 'staff', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE `salaries` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `months` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salaries`
--

INSERT INTO `salaries` (`id`, `user_id`, `amount`, `months`, `created_at`, `updated_at`) VALUES
(1, 1, '10000000', 'nnnnn', '2021-05-09 08:43:42', '2021-05-09 08:43:42'),
(2, 1, '10000000', 'Tunde', '2021-05-09 08:45:30', '2021-05-09 08:45:30'),
(3, 1, '4500000', 'nnnnn', '2021-05-09 08:46:25', '2021-05-09 08:46:25'),
(4, 1, '4500000', 'Tunde', '2021-05-09 12:49:39', '2021-05-09 12:49:39'),
(5, 1, '10000000', 'may', '2021-05-09 12:50:29', '2021-05-09 12:50:29'),
(6, 1, '4500000', 'may', '2021-05-09 13:05:52', '2021-05-09 13:05:52'),
(7, 1, '4567890098', 'june', '2021-05-09 13:32:14', '2021-05-09 13:32:14'),
(8, 1, '4500000', 'Tunde', '2021-05-09 13:35:24', '2021-05-09 13:35:24'),
(9, 1, '10000000', 'may', '2021-05-09 14:11:40', '2021-05-09 14:11:40'),
(10, 8, '4567890098', 'may', '2021-05-09 14:54:01', '2021-05-09 14:54:01'),
(11, 10, '4500000', 'may', '2021-05-09 16:12:31', '2021-05-09 16:12:31'),
(12, 11, '4500000', 'march', '2021-05-10 19:09:03', '2021-05-10 19:09:03'),
(13, 9, '4500000', 'nnnnn', '2021-05-11 19:29:42', '2021-05-11 19:29:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `privilege_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `position`, `mobile`, `address`, `email`, `email_verified_at`, `privilege_id`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Wale Otolorin', 'chief', '08084382944', 'unilag', 'waleabba@yahoo.com', NULL, 1, '$2y$10$zEhL5Xs/9ndw0SSBmbp1y.a1.LDyLP/TonXkjTaE.KAGUVVwy8Ibq', 'ZFz0Pal1TCVGsjyOr1T0Sl4f4PW0JuhLP3ZorumlaXXGiMqnwZkV3wUryk9l', '2021-05-09 08:02:44', '2021-05-09 08:02:44'),
(2, 'matthew', 'chief', '08069310992', 'sabo', 'ogbagahjb@gmail.com', NULL, 1, '$2y$10$qfPthSzJaSvFeohuiPb8XOc0JAXrhTj2R9kbjIEYnV1Y1ylKcjeUS', 'm33fAKQRh9GGcm0oxwjB0w0KD8oMxHSPC0EDpv5FdIG8p86oUjqT8tMzUUq9', '2021-05-09 08:44:56', '2021-05-09 08:44:56'),
(3, 'matthew', 'chief', '08069310992', 'sabo', 'ogbagah@gmail.com', NULL, 1, '$2y$10$DdqkQVECFhAjB4.Wq0Bduum.OIayUQ2L8khHZSmS.tqRJ7uQTPX0y', 'nbdtRdaNEVrk8NLJI0BEh5vx6zVe7II6a672ycdLezta2tRu6fAmJH473rTC', '2021-05-09 10:03:00', '2021-05-09 10:03:00'),
(4, 'kell', 'user', '08069310992', 'yaba', 'ogbaga@gmail.com', NULL, 1, '$2y$10$ypIiAvkYPaeo.FFWm3B/huv7x/I4LyGeq25rco7PmNERbtszuFswa', 'Q8pJC15z2Irc1ryMrKFe9mFvoCYN80gULtee8AowZ2OfelghKFLByCJNnW5Z', '2021-05-09 11:37:45', '2021-05-09 11:37:45'),
(5, 'sss', 'user', '08069310992', 'sabo', 'ogbag@gmail.com', NULL, 1, '$2y$10$4T8vRmcODh57tsgPH88vdulwCcwxFUd5C3cgaPXG.ua.5B8kuSr5.', 'WMmgt3zovDoaAYSEYfQkT4H3cLMvlbRMqDL9bvgjTxOz28cl2f1pkIAck5El', '2021-05-09 12:24:29', '2021-05-09 12:24:29'),
(6, 'matthew Ikumapayi', 'user', '08084382944', 'sabo', 'ogb@gmail.com', NULL, 2, '$2y$10$4o7RGFWGXH5nswmTtYHvKe/2cBC21js./941OIDfG41ld/M.uJXV.', NULL, '2021-05-09 12:37:52', '2021-05-09 12:37:52'),
(7, 'matthew', 'user', '08069310992', 'unilag', 'og@gmail.com', NULL, 2, '$2y$10$smLSi2sZ2mFv6oNYkeUOieidFWzQC3jjdjQygC8UCnfMKBu9Bunnm', NULL, '2021-05-09 12:41:00', '2021-05-09 12:41:00'),
(8, 'Anthonia Egorice', 'user', '08084382944', 'sabo', 'ogbagah@yahoo.com', NULL, 2, '$2y$10$1U2mGac/QPxojj0rcAJHM.ONRIsnj4KtRbXoynQQeMjBgJoRDdycC', 'lwlJG2q6bRu9kxjVaO3r3kdWeJBarIvtlg8oMwewClUhpgUMS93eRvZDCX6S', '2021-05-09 12:48:03', '2021-05-09 12:48:03'),
(9, 'kell ooooo', 'front', '08084382944', 'sabo', 'kell@gmail.com', NULL, 3, '$2y$10$QU9nKKFNhflY7.7bFwoHHedmAAWmz/xNLkmnjiI0Ew1syp8TM1XnS', 'h6bYxHrBTUrKfBLNeXMuc6uLcukmgsDSt1sAfDEKvllxxXV6PvLi7yxq5g7C', '2021-05-09 12:59:17', '2021-05-09 12:59:17'),
(10, 'matthew', 'chief', '08084382944', 'mainland', 'matthew@gmail.com', NULL, 1, '$2y$10$uL9Ya//tycFzkr36cVbwrOkioaHqUbyc9qYseWBE4uZiWwzK8SK8i', 'XIcjsRieyqr7wzpGRCJka2qtLgIVr3eMiqEwQ8bJiNrwiQ9Pz87ryc9s9cL4', '2021-05-09 15:06:38', '2021-05-09 15:06:38'),
(11, 'yoma', 'front', '08084382944', 'Banana Island', 'yoma@gmail.com', NULL, 3, '$2y$10$kjXJV2KiFa/x0oV0pvDfM.eN/w5Se0Df/h2x/vd9EsVGaqizXXAy.', 'ZtAYG4mKMrypyrMpih6Ufv1YmZWb3V08LB9K5ufZ1P0sbPHVBar79PbzqIsw', '2021-05-10 18:52:58', '2021-05-10 18:52:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daily_reports`
--
ALTER TABLE `daily_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daily_reports_user_id_foreign` (`user_id`);

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
-- Indexes for table `privileges`
--
ALTER TABLE `privileges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `salaries_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_privilege_id_foreign` (`privilege_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daily_reports`
--
ALTER TABLE `daily_reports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `privileges`
--
ALTER TABLE `privileges`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `salaries`
--
ALTER TABLE `salaries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daily_reports`
--
ALTER TABLE `daily_reports`
  ADD CONSTRAINT `daily_reports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `salaries`
--
ALTER TABLE `salaries`
  ADD CONSTRAINT `salaries_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_privilege_id_foreign` FOREIGN KEY (`privilege_id`) REFERENCES `privileges` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
