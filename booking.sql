-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2022 at 09:02 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amt` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surcharge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clientcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merchant_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mer_txn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_txn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ipg_txn_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mmp_txn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `udf5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `udf6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `udf3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `udf4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `udf1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `udf2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discriminator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auth_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `massbookings`
--

CREATE TABLE `massbookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DateTime` datetime DEFAULT NULL,
  `intention` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intentionfor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amt` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mass_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surcharge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clientcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merchant_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mer_txn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `f_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_txn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ipg_txn_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mmp_txn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `udf5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `udf6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `udf3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `udf4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `udf1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `udf2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discriminator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `auth_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `download_starttime` datetime DEFAULT NULL,
  `download_endtime` datetime DEFAULT NULL,
  `masstime_restriction` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `_token` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `massbookings`
--

INSERT INTO `massbookings` (`id`, `name`, `DateTime`, `intention`, `intentionfor`, `email`, `mobile`, `language`, `amt`, `mass_id`, `date`, `surcharge`, `clientcode`, `signature`, `merchant_id`, `mer_txn`, `f_code`, `bank_txn`, `ipg_txn_id`, `bank_name`, `mmp_txn`, `udf5`, `udf6`, `udf3`, `udf4`, `udf1`, `udf2`, `discriminator`, `desc`, `auth_code`, `download_starttime`, `download_endtime`, `masstime_restriction`, `_token`, `created_at`, `updated_at`) VALUES
(1, 'bousty', '2022-05-18 08:15:00', 'Healing', 'vinnarasi', 'vinnarasi.a@boscoits.com', '7967898976', 'Tamil', '50.00', '2550', 'Tue May 17 15:18:30 IST 2022', '0.00', '320805', 'b972ef3078d74b4a3da99c3a276cfb5111e1585d10b2d2d7e92a1972b2806461c93ed37494485c45bbe9e81bd892d9c7ff5a0a1b11cff34f03e67c94fae3bb8c', '320805', '284223', 'F', 'NA', '11000101305317', 'Hdfc Bank', '11000101305317', 'vinnarasi', 'null', '7967898976', 'Healing', 'bousty', 'vinnarasi.a@boscoits.com', 'DC', 'FAILED', 'null', NULL, NULL, 'No', NULL, '2022-05-17 04:18:30', '2022-05-17 04:18:30'),
(2, 'vinnarasi', '2022-05-19 09:00:00', 'Healing', 'appu', 'vinnarasi.a@boscoits.com', '8760870314', 'English', '50.00', '2571', 'Tue May 17 15:28:51 IST 2022', '0.00', '320805', '178048fdb8f35b4d8f4c2390f0248d08e567b246557229016d7826ea9430d9a142a51d4d9f69f9124bd1a433d4370a745b0c3122e20040d901fb16e11ae6bcd1', '320805', '462544', 'F', 'NA', '11000101305931', 'Hdfc Bank', '11000101305931', 'appu', 'null', '8760870314', 'Healing', 'vinnarasi', 'vinnarasi.a@boscoits.com', 'DC', 'FAILED', 'null', NULL, NULL, 'No', NULL, '2022-05-17 04:28:51', '2022-05-17 04:28:51'),
(3, 'vinnarasi', '2022-05-19 09:00:00', 'Healing', 'appu', 'vinnarasi.a@boscoits.com', '8760870314', 'English', '50.00', '2571', 'Tue May 17 15:29:38 IST 2022', '0.00', '320805', '5f17537c3f2dd543a611de577c8de89a02f0464747460c60e4a1a127841c84cc548562d16e520f11c32a4739b98cafb7bb289088b2f99e221ac5f9b11cc2562f', '320805', '913753', 'F', 'NA', '11000101305985', 'Hdfc Bank', '11000101305985', 'appu', 'null', '8760870314', 'Healing', 'vinnarasi', 'vinnarasi.a@boscoits.com', 'DC', 'FAILED', 'null', NULL, NULL, 'No', NULL, '2022-05-17 04:29:38', '2022-05-17 04:29:38'),
(4, 'vinnarasi', '2022-05-17 18:00:00', 'Healing', 'infanta', 'vinnarasi.a@boscoits.com', '7967549685', 'Malayalam', '50.00', '2625', 'Tue May 17 15:51:06 IST 2022', '0.00', '320805', '9f1cb9618aba01a45f8956794e0a5ca788e135fa383e75ab69ab6c898867ae380d039d84e32cd0f6f449dc8ee4a04967d1afd3ee1385bf4afba435a8158822d3', '320805', '553691', 'F', 'NA', '11000101312176', 'Hdfc Bank', '11000101312176', 'infanta', 'null', '7967549685', 'Healing', 'vinnarasi', 'vinnarasi.a@boscoits.com', 'DC', 'FAILED', 'null', NULL, NULL, 'No', NULL, '2022-05-17 04:51:06', '2022-05-17 04:51:06'),
(5, 'bousty', '2022-05-17 18:00:00', 'Healing', 'bousty', 'vinnarasi.a@boscoits.com', '7967549685', 'Malayalam', '50.00', '2625', 'Tue May 17 16:57:05 IST 2022', '0.00', '320805', '9537a117df568c13bbbbeaa894b415d63914cc54bfa2410c0deadbbe5f88ae214c291029b6a36079c7dee13c7af521251efa36e2ed17a4a24baabdcb6fbd43ec', '320805', '167138', 'F', 'NA', '11000101323152', 'Hdfc Bank', '11000101323152', 'bousty', 'null', '7967549685', 'Healing', 'bousty', 'vinnarasi.a@boscoits.com', 'DC', 'FAILED', 'null', NULL, NULL, 'No', NULL, '2022-05-17 05:57:05', '2022-05-17 05:57:05'),
(6, 'vinnarasi', '2022-05-18 06:00:00', 'Healing', 'infanta', 'vinnarasi.a@boscoits.com', '8760870314', 'Telugu', '50.00', '2557', 'Tue May 17 18:54:46 IST 2022', '0.00', '320805', '83bc7f5192b211be4769b7a3ebcb645bd1cb12ae50a7cb4a0338afdb27dbd0856122d884a95b1d8575503c1365b9a68688ffe823d62a897af04f7eedfbbe5568', '320805', '545875', 'F', 'NA', '11000101337993', 'Hdfc Bank', '11000101337993', 'infanta', 'null', '8760870314', 'Healing', 'vinnarasi', 'vinnarasi.a@boscoits.com', 'DC', 'FAILED', 'null', NULL, NULL, 'No', NULL, '2022-05-17 07:54:47', '2022-05-17 07:54:47'),
(7, 'vinnarasi', '2022-05-18 06:00:00', 'Healing', 'bousty', 'vinnarasi.a@boscoits.com', '7967898970', 'Telugu', '50.00', '2557', 'Tue May 17 19:13:18 IST 2022', '0.00', '320805', '55d2ec896c734442032bf42b913aed9a90ceb47831a764424c7f1bc634408deff54d8940efc08b6c5d3fdd87ec8064a78633ff5e0ca1be677a92d0c383ca2410', '320805', '259816', 'F', 'NA', '11000101341929', 'Hdfc Bank', '11000101341929', 'bousty', 'null', '7967898970', 'Healing', 'vinnarasi', 'vinnarasi.a@boscoits.com', 'DC', 'FAILED', 'null', NULL, NULL, 'No', NULL, '2022-05-17 08:13:19', '2022-05-17 08:13:19'),
(9, 'yesu', '2022-05-05 13:00:00', 'Thanks giving', 'Raj', 'irudya@boscoits.com', '7865566666', 'English', NULL, '1', NULL, NULL, NULL, NULL, '320805', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', NULL, '2022-05-24 03:34:24', '2022-05-24 03:34:24'),
(10, 'Dias', '2022-05-30 07:00:00', 'Birthday', 'Raj', 'ajithamal914@gmail.com', '9566856859', 'English', '50.00', '2524', 'Wed May 25 19:20:09 IST 2022', '0.00', '320805', '7a9d5f3d7699978128de30096b09a81f4cc0649efe2211b14457963524a0c930ceb20604b6550a87cc35130af6ec58a9cc770a647c32b142b3b8081d7116d723', '320805', '899433', 'F', '214553876096', '11000102773299', 'ICICI Bank', '11000102773299', 'Raj', 'null', '9566856859', 'Birthday', 'Dias', 'ajithamal914@gmail.com', 'UP', 'REQUEST AUTHORISATION IS DECLINED', 'null', NULL, NULL, 'No', NULL, '2022-05-25 08:20:18', '2022-05-25 08:20:18'),
(11, 'Amal', '2022-05-27 10:00:00', 'Special need', 'To my Family', 'ajithamal914@gmail.com', '9585734348', 'Kannada', '50.00', '2585', 'Wed May 25 19:20:12 IST 2022', '0.00', '320805', 'c2da0ce40a5cb7e0196a55c6624cd06dc0fdfe108979413d3e7aaf7c42e4526f965efccff774fb08a26086abf09b7f71a39ba43bb79ed1aaa82652bb2ddf86fd', '320805', '308231', 'F', '214553859841', '11000102772091', 'ICICI Bank', '11000102772091', 'To my Family', 'null', '9585734348', 'Special need', 'Amal', 'ajithamal914@gmail.com', 'UP', 'COLLECT EXPIRED', 'null', NULL, NULL, 'No', NULL, '2022-05-25 08:20:27', '2022-05-25 08:20:27'),
(12, 'vinnarasi', '2022-06-06 18:00:00', 'Thanksgiving', 'infanta', 'vinnarasi.a@boscoits.com', '7659867459', 'Tamil', '50.00', '1725', 'Mon Jun 06 17:13:18 IST 2022', '0.00', '320805', 'b61bb6c979b7e2281ef5ff34fdbc245eb6edcab77013d853702878e4cc9a73cfd74f70b0afd99e7d55c28683ba9f28ae23fc7ad4e182176bcc9a8d460ddd808f', '320805', '355902', 'C', 'NA', '11000105041168', 'NA', '11000105041168', 'infanta', 'null', '7659867459', 'Thanksgiving', 'vinnarasi', 'vinnarasi.a@boscoits.com', 'NA', 'TRANSACTION IS CANCELLED BY USER ON PAYMENT PAGE.', 'null', NULL, NULL, 'No', NULL, '2022-06-06 06:13:21', '2022-06-06 06:13:21'),
(13, 'vinnarasi', '2022-07-05 18:00:00', 'For Blessings', 'infanta', 'vinnarasi.a@boscoits.com', '8976590856', 'Tamil', '50.00', '2836', 'Tue Jul 05 12:13:05 IST 2022', '0.00', '320805', '7fd4f267f76b0cf205340b49f6025c1bed847c1140bce3037be516912a25c3e0d52163b1217376bf34ad9214a74f211bd1aae55de9c404a939a7329942c1bf5c', '320805', '689679', 'C', 'NA', '11000110792719', 'NA', '11000110792719', 'infanta', 'null', '8976590856', 'For Blessings', 'vinnarasi', 'vinnarasi.a@boscoits.com', 'NA', 'TRANSACTION IS CANCELLED BY USER ON PAYMENT PAGE.', 'null', NULL, NULL, 'No', NULL, '2022-07-05 01:13:18', '2022-07-05 01:13:18');

-- --------------------------------------------------------

--
-- Table structure for table `masses`
--

CREATE TABLE `masses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mass_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intention` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mailto:email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prayer_category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_reference` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(90, '2014_10_12_000000_create_users_table', 1),
(91, '2014_10_12_100000_create_password_resets_table', 1),
(92, '2019_08_19_000000_create_failed_jobs_table', 1),
(93, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(94, '2022_02_26_062639_create_masses_table', 1),
(95, '2022_03_03_050425_create_massbookings_table', 1),
(96, '2022_03_22_085238_create_banners_table', 1),
(97, '2022_05_20_122449_create_donation_table', 2),
(98, '2022_05_24_111632_create_donations_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('vinnarasi.a@boscoits.com', '$2y$10$QY6ijEOKikJge4WvcrYmwu/nE6YCkc7yJwSwcqmGpGx1d4gH7H3Nm', '2022-06-27 06:11:44'),
('admin@gmail.com', '$2y$10$eZcj4LGEw0XRyctSFXC6COPLAaBQEFZOsYBSU3wEhTmcFzPw7pO9u', '2022-06-27 06:12:03');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$4XXUfxU.PcfdftYCQgcqtOz/HAtCO9mA2elQbJdIliq74.D.lhSxO', NULL, '2022-05-09 07:51:55', '2022-05-09 07:51:55'),
(2, 'Admin', 'irudayan111@gmail.com', NULL, '$2y$10$96wOnGYBDu2W2QYUNE3/yeQOYIlip6DRW3EEfx44MOiUO4QRCnvHq', 'soHXGA9KtJvJuw0IjTBXLS02N2MBZhqWh2WXKELOiLtLklArQvaWsZw1pMu0', '2022-05-16 00:59:26', '2022-05-16 01:17:04'),
(3, 'Raj', 'irudya@boscoits.com', NULL, '$2y$10$9dKwaQbuTktUMZOeoHHzteafTo.snq5h0jCVNR7SDehIAkIGiWhEC', 'ZFbEKts9KKrasVuKD01yc3Xa9U6kvoa13bOqwlUf9fwKArDd3rlclsLIwio2', '2022-05-20 05:52:19', '2022-05-20 05:53:58'),
(4, 'vinnarasi', 'vinnarasi.a@boscoits.com', NULL, '$2y$10$NqSPvYG1zLPGa1jqj.9khet/CjF/jFyrcGmmWxHDVqKOFRp8A04eS', NULL, '2022-06-25 05:00:24', '2022-06-25 05:00:24'),
(5, 'vinnarasi', 'vinnarasi.a@gmail.com', NULL, '$2y$10$l1igK3ASOEOasaPfMlnxxuN8lZKg9qHzXFVQUWbvVMjdgunrCmpka', NULL, '2022-06-27 03:49:03', '2022-06-27 03:49:03'),
(6, 'vinnarasi', 'appu@gmail.com', NULL, '$2y$10$337aQjB3OR15O/ZSGPR1FeEHxzJsiZua6BgfNX012Tz5sbnzYn8v2', NULL, '2022-06-27 06:01:06', '2022-06-27 06:01:06'),
(7, 'vinnarasi', 'vinnusk@gmail.com', NULL, '$2y$10$SUsfBjVE5FDn9uhZPK0N.utMditY70M2Lh98Zdtlgx.6eLmgSrD.G', NULL, '2022-06-28 05:05:55', '2022-06-28 05:05:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `massbookings`
--
ALTER TABLE `massbookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masses`
--
ALTER TABLE `masses`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `massbookings`
--
ALTER TABLE `massbookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `masses`
--
ALTER TABLE `masses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
