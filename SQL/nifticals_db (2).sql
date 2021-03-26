-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2021 at 12:35 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nifticals_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$TtHiDxJ6.Ds4vhwlM2beOuz8lL8heSTXBj/xFGBP84eEmsCaFqYu.', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banner_tbl`
--

CREATE TABLE `banner_tbl` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_heading_quote` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_heading_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_paragraph` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_img` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2021_03_01_101608_create_admins_table', 1),
(4, '2021_03_04_102838_create-product-category-tbl', 2),
(6, '2021_03_05_051410_create-sub-category', 3),
(8, '2021_03_05_093002_create-product-table', 4),
(9, '2021_03_05_095322_create-product-images-tbl', 5),
(10, '2021_03_11_071539_create-subscribe-tbls', 6),
(11, '2021_03_25_112920_create-payment-tbl', 7),
(12, '2021_03_26_092448_create-banner-tbl', 8);

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
-- Table structure for table `payment_tbl`
--

CREATE TABLE `payment_tbl` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `admin_action` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_tbl`
--

INSERT INTO `payment_tbl` (`id`, `user_id`, `user_name`, `payment_status`, `admin_action`, `created_at`, `updated_at`) VALUES
(1, 1, 'user', 'no', 'yes', '2021-03-26 06:15:51', '2021-03-26 03:45:03');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_quote` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `category_name`, `category_quote`, `admin_status`, `created_at`, `updated_at`) VALUES
(3, 'category1', '', 'active', NULL, '2021-03-26 00:43:57'),
(4, 'category2', 'Lorem ipsum is used for testing ...', 'active', NULL, '2021-03-05 01:26:02'),
(5, 'category3', '', 'active', NULL, '2021-03-04 23:16:52');

-- --------------------------------------------------------

--
-- Table structure for table `product_img_tbls`
--

CREATE TABLE `product_img_tbls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_images` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_img_tbls`
--

INSERT INTO `product_img_tbls` (`id`, `product_images`, `product_id`, `created_at`, `updated_at`) VALUES
(3, 'public/gallery87655/3r02Sbvclu9A0DXJdNuYCSSBYKifd0OINvwBV5OA.png', 1, NULL, NULL),
(9, 'public/gallery87655/6kNOTmCs7CGIr3RRxq7RfVh2eB4nubatCr8NF1C0.jpg', 1, NULL, NULL),
(10, 'public/gallery87655/VbJNcxaJkYyqmZIrxujsRcGMMexoa857f7UkvD7S.png', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_tbls`
--

CREATE TABLE `product_tbls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `sub_category_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_full_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_additional_information` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_unique_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_stock` bigint(20) NOT NULL DEFAULT 0,
  `product_thumbnail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_available_status` enum('available','outofstock') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'available',
  `admin_status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_tbls`
--

INSERT INTO `product_tbls` (`id`, `category_id`, `sub_category_id`, `product_name`, `product_price`, `product_short_description`, `product_full_description`, `product_additional_information`, `product_unique_code`, `product_stock`, `product_thumbnail`, `product_available_status`, `admin_status`, `created_at`, `updated_at`) VALUES
(1, 3, 2, 'Product 01', 199.00, 'Lorem', 'Lorem', 'lorem', '30199081', 25, 'public/thumbnail/k8urdvqNIuT4MJuPg1dyOuCZSc7lNZLHBq7pyFqV.png', 'available', 'active', NULL, '2021-03-11 01:33:28');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber_tbls`
--

CREATE TABLE `subscriber_tbls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subscriber_email_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriber_tbls`
--

INSERT INTO `subscriber_tbls` (`id`, `subscriber_email_address`, `admin_status`, `created_at`, `updated_at`) VALUES
(1, 'satirtha63@gmail.com', 'active', NULL, '2021-03-12 01:46:11'),
(3, 'satirtha64@gmail.com', 'active', NULL, NULL),
(4, 'satirtha.kreative@gmail.com', 'active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category_tbls`
--

CREATE TABLE `sub_category_tbls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `sub_category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_category_quote` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_category_tbls`
--

INSERT INTO `sub_category_tbls` (`id`, `category_id`, `sub_category_name`, `sub_category_quote`, `admin_status`, `created_at`, `updated_at`) VALUES
(1, 3, 'subcategory1', '', 'active', NULL, '2021-03-05 03:49:31'),
(2, 3, 'subcategory2', '', 'active', NULL, '2021-03-05 03:37:18');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@gmail.com', NULL, '$2y$10$TtHiDxJ6.Ds4vhwlM2beOuz8lL8heSTXBj/xFGBP84eEmsCaFqYu.', NULL, '2021-03-01 05:11:05', '2021-03-01 05:11:05');

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
-- Indexes for table `banner_tbl`
--
ALTER TABLE `banner_tbl`
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
-- Indexes for table `payment_tbl`
--
ALTER TABLE `payment_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_img_tbls`
--
ALTER TABLE `product_img_tbls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tbls`
--
ALTER TABLE `product_tbls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriber_tbls`
--
ALTER TABLE `subscriber_tbls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category_tbls`
--
ALTER TABLE `sub_category_tbls`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner_tbl`
--
ALTER TABLE `banner_tbl`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payment_tbl`
--
ALTER TABLE `payment_tbl`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_img_tbls`
--
ALTER TABLE `product_img_tbls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_tbls`
--
ALTER TABLE `product_tbls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscriber_tbls`
--
ALTER TABLE `subscriber_tbls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_category_tbls`
--
ALTER TABLE `sub_category_tbls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
