-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 08, 2024 at 10:39 PM
-- Server version: 8.0.31
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twyfordc_muy`
--

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

DROP TABLE IF EXISTS `banks`;
CREATE TABLE IF NOT EXISTS `banks` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=168 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `code`, `name`, `created_at`, `updated_at`) VALUES
(1, '560', 'Page MFBank', '2022-10-03 18:31:57', '2022-10-03 18:31:57'),
(2, '304', 'Stanbic Mobile Money', '2022-10-03 18:31:59', '2022-10-03 18:31:59'),
(3, '308', 'FortisMobile', '2022-10-03 18:32:00', '2022-10-03 18:32:00'),
(4, '328', 'TagPay', '2022-10-03 18:32:02', '2022-10-03 18:32:02'),
(5, '309', 'FBNMobile', '2022-10-03 18:32:02', '2022-10-03 18:32:02'),
(6, '011', 'First Bank of Nigeria', '2022-10-03 18:32:03', '2022-10-03 18:32:03'),
(7, '326', 'Sterling Mobile', '2022-10-03 18:32:03', '2022-10-03 18:32:03'),
(8, '990', 'Omoluabi Mortgage Bank', '2022-10-03 18:32:04', '2022-10-03 18:32:04'),
(9, '311', 'ReadyCash (Parkway)', '2022-10-03 18:32:04', '2022-10-03 18:32:04'),
(10, '057', 'Zenith Bank', '2022-10-03 18:32:05', '2022-10-03 18:32:05'),
(11, '068', 'Standard Chartered Bank', '2022-10-03 18:32:05', '2022-10-03 18:32:05'),
(12, '306', 'eTranzact', '2022-10-03 18:32:05', '2022-10-03 18:32:05'),
(13, '070', 'Fidelity Bank', '2022-10-03 18:32:06', '2022-10-03 18:32:06'),
(14, '023', 'CitiBank', '2022-10-03 18:32:06', '2022-10-03 18:32:06'),
(15, '215', 'Unity Bank', '2022-10-03 18:32:07', '2022-10-03 18:32:07'),
(16, '323', 'Access Money', '2022-10-03 18:32:07', '2022-10-03 18:32:07'),
(17, '302', 'Eartholeum', '2022-10-03 18:32:07', '2022-10-03 18:32:07'),
(18, '324', 'Hedonmark', '2022-10-03 18:32:08', '2022-10-03 18:32:08'),
(19, '325', 'MoneyBox', '2022-10-03 18:32:08', '2022-10-03 18:32:08'),
(20, '301', 'JAIZ Bank', '2022-10-03 18:32:09', '2022-10-03 18:32:09'),
(21, '050', 'Ecobank Plc', '2022-10-03 18:32:09', '2022-10-03 18:32:09'),
(22, '307', 'EcoMobile', '2022-10-03 18:32:10', '2022-10-03 18:32:10'),
(23, '318', 'Fidelity Mobile', '2022-10-03 18:32:10', '2022-10-03 18:32:10'),
(24, '319', 'TeasyMobile', '2022-10-03 18:32:10', '2022-10-03 18:32:10'),
(25, '999', 'NIP Virtual Bank', '2022-10-03 18:32:11', '2022-10-03 18:32:11'),
(26, '320', 'VTNetworks', '2022-10-03 18:32:11', '2022-10-03 18:32:11'),
(27, '221', 'Stanbic IBTC Bank', '2022-10-03 18:32:11', '2022-10-03 18:32:11'),
(28, '501', 'Fortis Microfinance Bank', '2022-10-03 18:32:12', '2022-10-03 18:32:12'),
(29, '329', 'PayAttitude Online', '2022-10-03 18:32:13', '2022-10-03 18:32:13'),
(30, '322', 'ZenithMobile', '2022-10-03 18:32:13', '2022-10-03 18:32:13'),
(31, '303', 'ChamsMobile', '2022-10-03 18:32:13', '2022-10-03 18:32:13'),
(32, '403', 'SafeTrust Mortgage Bank', '2022-10-03 18:32:14', '2022-10-03 18:32:14'),
(33, '551', 'Covenant Microfinance Bank', '2022-10-03 18:32:15', '2022-10-03 18:32:15'),
(34, '415', 'Imperial Homes Mortgage Bank', '2022-10-03 18:32:15', '2022-10-03 18:32:15'),
(35, '552', 'NPF MicroFinance Bank', '2022-10-03 18:32:16', '2022-10-03 18:32:16'),
(36, '526', 'Parralex', '2022-10-03 18:32:16', '2022-10-03 18:32:16'),
(37, '035', 'Wema Bank', '2022-10-03 18:32:17', '2022-10-03 18:32:17'),
(38, '084', 'Enterprise Bank', '2022-10-03 18:32:18', '2022-10-03 18:32:18'),
(39, '063', 'Diamond Bank', '2022-10-03 18:32:18', '2022-10-03 18:32:18'),
(40, '305', 'Paycom', '2022-10-03 18:32:19', '2022-10-03 18:32:19'),
(41, '100', 'SunTrust Bank', '2022-10-03 18:32:19', '2022-10-03 18:32:19'),
(42, '317', 'Cellulant', '2022-10-03 18:32:20', '2022-10-03 18:32:20'),
(43, '401', 'ASO Savings and & Loans', '2022-10-03 18:32:20', '2022-10-03 18:32:20'),
(44, '030', 'Heritage', '2022-10-03 18:32:20', '2022-10-03 18:32:20'),
(45, '402', 'Jubilee Life Mortgage Bank', '2022-10-03 18:32:20', '2022-10-03 18:32:20'),
(46, '058', 'GTBank Plc', '2022-10-03 18:32:21', '2022-10-03 18:32:21'),
(47, '032', 'Union Bank', '2022-10-03 18:32:21', '2022-10-03 18:32:21'),
(48, '232', 'Sterling Bank', '2022-10-03 18:32:21', '2022-10-03 18:32:21'),
(49, '076', 'Polaris Bank', '2022-10-03 18:32:22', '2022-10-03 18:32:22'),
(50, '082', 'Keystone Bank', '2022-10-03 18:32:22', '2022-10-03 18:32:22'),
(51, '327', 'Pagatech', '2022-10-03 18:32:22', '2022-10-03 18:32:22'),
(52, '559', 'Coronation Merchant Bank', '2022-10-03 18:32:22', '2022-10-03 18:32:22'),
(53, '601', 'FSDH', '2022-10-03 18:32:22', '2022-10-03 18:32:22'),
(54, '560', 'Page MFBank', '2022-10-03 18:32:33', '2022-10-03 18:32:33'),
(55, '304', 'Stanbic Mobile Money', '2022-10-03 18:32:34', '2022-10-03 18:32:34'),
(56, '308', 'FortisMobile', '2022-10-03 18:32:34', '2022-10-03 18:32:34'),
(57, '328', 'TagPay', '2022-10-03 18:32:35', '2022-10-03 18:32:35'),
(58, '309', 'FBNMobile', '2022-10-03 18:32:35', '2022-10-03 18:32:35'),
(59, '011', 'First Bank of Nigeria', '2022-10-03 18:32:35', '2022-10-03 18:32:35'),
(60, '326', 'Sterling Mobile', '2022-10-03 18:32:36', '2022-10-03 18:32:36'),
(61, '990', 'Omoluabi Mortgage Bank', '2022-10-03 18:32:36', '2022-10-03 18:32:36'),
(62, '311', 'ReadyCash (Parkway)', '2022-10-03 18:32:36', '2022-10-03 18:32:36'),
(63, '057', 'Zenith Bank', '2022-10-03 18:32:36', '2022-10-03 18:32:36'),
(64, '068', 'Standard Chartered Bank', '2022-10-03 18:32:37', '2022-10-03 18:32:37'),
(65, '306', 'eTranzact', '2022-10-03 18:32:37', '2022-10-03 18:32:37'),
(66, '070', 'Fidelity Bank', '2022-10-03 18:32:37', '2022-10-03 18:32:37'),
(67, '023', 'CitiBank', '2022-10-03 18:32:38', '2022-10-03 18:32:38'),
(68, '215', 'Unity Bank', '2022-10-03 18:32:38', '2022-10-03 18:32:38'),
(69, '323', 'Access Money', '2022-10-03 18:32:38', '2022-10-03 18:32:38'),
(70, '302', 'Eartholeum', '2022-10-03 18:32:38', '2022-10-03 18:32:38'),
(71, '324', 'Hedonmark', '2022-10-03 18:32:38', '2022-10-03 18:32:38'),
(72, '325', 'MoneyBox', '2022-10-03 18:32:39', '2022-10-03 18:32:39'),
(73, '301', 'JAIZ Bank', '2022-10-03 18:32:39', '2022-10-03 18:32:39'),
(74, '050', 'Ecobank Plc', '2022-10-03 18:32:39', '2022-10-03 18:32:39'),
(75, '307', 'EcoMobile', '2022-10-03 18:32:39', '2022-10-03 18:32:39'),
(76, '318', 'Fidelity Mobile', '2022-10-03 18:32:39', '2022-10-03 18:32:39'),
(77, '319', 'TeasyMobile', '2022-10-03 18:32:39', '2022-10-03 18:32:39'),
(78, '999', 'NIP Virtual Bank', '2022-10-03 18:32:40', '2022-10-03 18:32:40'),
(79, '320', 'VTNetworks', '2022-10-03 18:32:40', '2022-10-03 18:32:40'),
(80, '221', 'Stanbic IBTC Bank', '2022-10-03 18:32:40', '2022-10-03 18:32:40'),
(81, '501', 'Fortis Microfinance Bank', '2022-10-03 18:32:40', '2022-10-03 18:32:40'),
(82, '329', 'PayAttitude Online', '2022-10-03 18:32:41', '2022-10-03 18:32:41'),
(83, '322', 'ZenithMobile', '2022-10-03 18:32:41', '2022-10-03 18:32:41'),
(84, '303', 'ChamsMobile', '2022-10-03 18:32:41', '2022-10-03 18:32:41'),
(85, '403', 'SafeTrust Mortgage Bank', '2022-10-03 18:32:41', '2022-10-03 18:32:41'),
(86, '551', 'Covenant Microfinance Bank', '2022-10-03 18:32:42', '2022-10-03 18:32:42'),
(87, '415', 'Imperial Homes Mortgage Bank', '2022-10-03 18:32:42', '2022-10-03 18:32:42'),
(88, '552', 'NPF MicroFinance Bank', '2022-10-03 18:32:42', '2022-10-03 18:32:42'),
(89, '526', 'Parralex', '2022-10-03 18:32:42', '2022-10-03 18:32:42'),
(90, '035', 'Wema Bank', '2022-10-03 18:32:43', '2022-10-03 18:32:43'),
(91, '084', 'Enterprise Bank', '2022-10-03 18:32:43', '2022-10-03 18:32:43'),
(92, '063', 'Diamond Bank', '2022-10-03 18:32:43', '2022-10-03 18:32:43'),
(93, '305', 'Paycom', '2022-10-03 18:32:43', '2022-10-03 18:32:43'),
(94, '100', 'SunTrust Bank', '2022-10-03 18:32:44', '2022-10-03 18:32:44'),
(95, '317', 'Cellulant', '2022-10-03 18:32:44', '2022-10-03 18:32:44'),
(96, '401', 'ASO Savings and & Loans', '2022-10-03 18:32:44', '2022-10-03 18:32:44'),
(97, '030', 'Heritage', '2022-10-03 18:32:44', '2022-10-03 18:32:44'),
(98, '402', 'Jubilee Life Mortgage Bank', '2022-10-03 18:32:44', '2022-10-03 18:32:44'),
(99, '058', 'GTBank Plc', '2022-10-03 18:32:44', '2022-10-03 18:32:44'),
(100, '032', 'Union Bank', '2022-10-03 18:32:45', '2022-10-03 18:32:45'),
(101, '232', 'Sterling Bank', '2022-10-03 18:32:45', '2022-10-03 18:32:45'),
(102, '076', 'Polaris Bank', '2022-10-03 18:32:45', '2022-10-03 18:32:45'),
(103, '082', 'Keystone Bank', '2022-10-03 18:32:45', '2022-10-03 18:32:45'),
(104, '327', 'Pagatech', '2022-10-03 18:32:46', '2022-10-03 18:32:46'),
(105, '559', 'Coronation Merchant Bank', '2022-10-03 18:32:46', '2022-10-03 18:32:46'),
(106, '601', 'FSDH', '2022-10-03 18:32:47', '2022-10-03 18:32:47'),
(107, '313', 'Mkudi', '2022-10-03 18:32:47', '2022-10-03 18:32:47'),
(108, '214', 'First City Monument Bank', '2022-10-03 18:32:47', '2022-10-03 18:32:47'),
(109, '314', 'FET', '2022-10-03 18:32:48', '2022-10-03 18:32:48'),
(110, '523', 'Trustbond', '2022-10-03 18:32:48', '2022-10-03 18:32:48'),
(111, '315', 'GTMobile', '2022-10-03 18:32:48', '2022-10-03 18:32:48'),
(112, '033', 'United Bank for Africa', '2022-10-03 18:32:49', '2022-10-03 18:32:49'),
(113, '044', 'Access Bank', '2022-10-03 18:32:49', '2022-10-03 18:32:49'),
(114, '90115', 'TCF MFB', '2022-10-03 18:32:49', '2022-10-03 18:32:49'),
(115, '090175', 'Test bank', '2022-10-03 18:32:49', '2022-10-03 18:32:49'),
(116, '103', 'Globus Bank', '2022-10-03 18:32:50', '2022-10-03 18:32:50'),
(117, '560', 'Page MFBank', '2022-10-03 18:33:09', '2022-10-03 18:33:09'),
(118, '304', 'Stanbic Mobile Money', '2022-10-03 18:33:10', '2022-10-03 18:33:10'),
(119, '308', 'FortisMobile', '2022-10-03 18:33:11', '2022-10-03 18:33:11'),
(120, '328', 'TagPay', '2022-10-03 18:33:11', '2022-10-03 18:33:11'),
(121, '309', 'FBNMobile', '2022-10-03 18:33:11', '2022-10-03 18:33:11'),
(122, '011', 'First Bank of Nigeria', '2022-10-03 18:33:12', '2022-10-03 18:33:12'),
(123, '326', 'Sterling Mobile', '2022-10-03 18:33:12', '2022-10-03 18:33:12'),
(124, '990', 'Omoluabi Mortgage Bank', '2022-10-03 18:33:13', '2022-10-03 18:33:13'),
(125, '311', 'ReadyCash (Parkway)', '2022-10-03 18:33:13', '2022-10-03 18:33:13'),
(126, '057', 'Zenith Bank', '2022-10-03 18:33:14', '2022-10-03 18:33:14'),
(127, '068', 'Standard Chartered Bank', '2022-10-03 18:33:14', '2022-10-03 18:33:14'),
(128, '306', 'eTranzact', '2022-10-03 18:33:14', '2022-10-03 18:33:14'),
(129, '070', 'Fidelity Bank', '2022-10-03 18:33:15', '2022-10-03 18:33:15'),
(130, '023', 'CitiBank', '2022-10-03 18:33:15', '2022-10-03 18:33:15'),
(131, '215', 'Unity Bank', '2022-10-03 18:33:15', '2022-10-03 18:33:15'),
(132, '323', 'Access Money', '2022-10-03 18:33:15', '2022-10-03 18:33:15'),
(133, '302', 'Eartholeum', '2022-10-03 18:33:15', '2022-10-03 18:33:15'),
(134, '324', 'Hedonmark', '2022-10-03 18:33:16', '2022-10-03 18:33:16'),
(135, '325', 'MoneyBox', '2022-10-03 18:33:16', '2022-10-03 18:33:16'),
(136, '301', 'JAIZ Bank', '2022-10-03 18:33:16', '2022-10-03 18:33:16'),
(137, '050', 'Ecobank Plc', '2022-10-03 18:33:16', '2022-10-03 18:33:16'),
(138, '307', 'EcoMobile', '2022-10-03 18:33:17', '2022-10-03 18:33:17'),
(139, '318', 'Fidelity Mobile', '2022-10-03 18:33:17', '2022-10-03 18:33:17'),
(140, '319', 'TeasyMobile', '2022-10-03 18:33:17', '2022-10-03 18:33:17'),
(141, '999', 'NIP Virtual Bank', '2022-10-03 18:33:17', '2022-10-03 18:33:17'),
(142, '320', 'VTNetworks', '2022-10-03 18:33:17', '2022-10-03 18:33:17'),
(143, '221', 'Stanbic IBTC Bank', '2022-10-03 18:33:18', '2022-10-03 18:33:18'),
(144, '501', 'Fortis Microfinance Bank', '2022-10-03 18:33:18', '2022-10-03 18:33:18'),
(145, '329', 'PayAttitude Online', '2022-10-03 18:33:18', '2022-10-03 18:33:18'),
(146, '322', 'ZenithMobile', '2022-10-03 18:33:18', '2022-10-03 18:33:18'),
(147, '303', 'ChamsMobile', '2022-10-03 18:33:19', '2022-10-03 18:33:19'),
(148, '403', 'SafeTrust Mortgage Bank', '2022-10-03 18:33:19', '2022-10-03 18:33:19'),
(149, '551', 'Covenant Microfinance Bank', '2022-10-03 18:33:20', '2022-10-03 18:33:20'),
(150, '415', 'Imperial Homes Mortgage Bank', '2022-10-03 18:33:20', '2022-10-03 18:33:20'),
(151, '552', 'NPF MicroFinance Bank', '2022-10-03 18:33:20', '2022-10-03 18:33:20'),
(152, '526', 'Parralex', '2022-10-03 18:33:21', '2022-10-03 18:33:21'),
(153, '035', 'Wema Bank', '2022-10-03 18:33:22', '2022-10-03 18:33:22'),
(154, '084', 'Enterprise Bank', '2022-10-03 18:33:22', '2022-10-03 18:33:22'),
(155, '063', 'Diamond Bank', '2022-10-03 18:33:23', '2022-10-03 18:33:23'),
(156, '305', 'Paycom', '2022-10-03 18:33:23', '2022-10-03 18:33:23'),
(157, '100', 'SunTrust Bank', '2022-10-03 18:33:24', '2022-10-03 18:33:24'),
(158, '317', 'Cellulant', '2022-10-03 18:33:25', '2022-10-03 18:33:25'),
(159, '401', 'ASO Savings and & Loans', '2022-10-03 18:33:25', '2022-10-03 18:33:25'),
(160, '030', 'Heritage', '2022-10-03 18:33:26', '2022-10-03 18:33:26'),
(161, '402', 'Jubilee Life Mortgage Bank', '2022-10-03 18:33:26', '2022-10-03 18:33:26'),
(162, '058', 'GTBank Plc', '2022-10-03 18:33:28', '2022-10-03 18:33:28'),
(163, '032', 'Union Bank', '2022-10-03 18:33:30', '2022-10-03 18:33:30'),
(164, '232', 'Sterling Bank', '2022-10-03 18:33:31', '2022-10-03 18:33:31'),
(165, '076', 'Polaris Bank', '2022-10-03 18:33:32', '2022-10-03 18:33:32'),
(166, '082', 'Keystone Bank', '2022-10-03 18:33:33', '2022-10-03 18:33:33'),
(167, '327', 'Pagatech', '2022-10-03 18:33:34', '2022-10-03 18:33:34');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_20_225209_create_plans_table', 2),
(6, '2023_03_21_223835_create_withdrawals_table', 3),
(7, '2023_03_26_212023_create_referral_bonuses_table', 4),
(9, '2023_03_27_210411_create_purchased_plans_table', 5),
(13, '2024_02_02_064749_create_wallets', 6),
(14, '2024_02_04_003650_create_transactions_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

DROP TABLE IF EXISTS `plans`;
CREATE TABLE IF NOT EXISTS `plans` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `daily_income` int NOT NULL,
  `price` int NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `valid` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `name`, `daily_income`, `price`, `image`, `valid`, `created_at`, `updated_at`) VALUES
(1, 'Centrifugal water pump', 1397, 24000, '3505ba8085f7700fed5a2993b81568dff659df96.jpg', 29, '2024-01-08 20:51:52', '2024-01-17 10:20:17'),
(2, 'Jet water 0.7thp', 1414, 26000, '1fff9cb32383f91083f8542e542687a25e86e35d.jpg', 29, '2024-01-08 20:52:07', '2024-01-17 10:17:43'),
(3, 'Stainless Steel mucilagecase only', 449, 7000, 'bf66ee8d603a76d010859b39ae7bf57196c6dc35.jpg', 29, '2024-01-09 02:52:40', '2024-01-17 08:59:26'),
(4, 'Jet water pump', 2552, 43000, '53a5fee5c6a496937405cd6eed01fecee34e3042.jpg', 29, '2024-01-09 02:56:18', '2024-01-17 09:01:17'),
(6, 'Platinum Cabinet Suite', 50000, 800000, 'f67f55763908d60a411ba1f4768366b00c2b9c0a.jpg', 30, '2024-01-09 01:51:52', '2024-01-09 18:27:52'),
(7, 'Double Bow Kitchen Sink with Long Neck Tap', 2500, 43000, '3bd238b08a9f0c745539f8bc56cc589e0513b49c.jpg', 30, '2024-01-09 01:52:07', '2024-01-09 18:24:46'),
(8, 'Long Neck Sink Mixer with Adjustable Spring', 3000, 53000, '44df03848c5b4d3c87c51a2c24e63ce3999adf69.jpg', 30, '2024-01-09 07:52:40', '2024-01-09 18:22:21'),
(9, 'Archy Deck Mounted Dual Spout Pull Out Kitchen Sink Mixer Tap', 6000, 102000, '3c396233e1f03c27af2a1dc89c2c02cab3320baa.jpg', 30, '2024-01-09 07:56:18', '2024-01-09 18:20:54'),
(11, 'Low Base Square Shower Cubicle', 8000, 160000, '379eee4dc651b75a29fabaa253d8c42c13977880.jpg', 31, '2024-01-09 01:51:52', '2024-01-09 18:17:10'),
(12, 'Bathroom Standing Shower', 2000, 35000, 'd2d119769a4470ac54c1128c8f2500df2de5b63e.jpg', 31, '2024-01-09 01:52:07', '2024-01-09 18:15:34'),
(13, '3- Sides Glass Shower Cubicle', 10000, 180000, '6c269ba552045f20779dc6f5eb4d6e8c3a8c64f2.jpg', 31, '2024-01-09 07:52:40', '2024-01-09 18:13:12'),
(14, 'Acrylic Shower Tray', 3000, 68000, 'c253dd7317f089a96d326939be8020ad7cf9d81d.jpg', 31, '2024-01-09 07:56:18', '2024-01-09 18:11:38');

-- --------------------------------------------------------

--
-- Table structure for table `purchased_plans`
--

DROP TABLE IF EXISTS `purchased_plans`;
CREATE TABLE IF NOT EXISTS `purchased_plans` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `plan_id` int DEFAULT NULL,
  `daily_income` double(8,2) DEFAULT NULL,
  `price` double(8,2) DEFAULT NULL,
  `status` enum('fail','pending','success') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` time DEFAULT NULL,
  `end_date` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `referral_bonuses`
--

DROP TABLE IF EXISTS `referral_bonuses`;
CREATE TABLE IF NOT EXISTS `referral_bonuses` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `referral_user_id` int NOT NULL,
  `level` int NOT NULL,
  `recharged_amount` double(8,2) NOT NULL,
  `level_percentage` int NOT NULL,
  `bonus_amount` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `referral_bonuses`
--

INSERT INTO `referral_bonuses` (`id`, `user_id`, `referral_user_id`, `level`, `recharged_amount`, `level_percentage`, `bonus_amount`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, 5000.00, 10, 500.00, '2023-04-01 14:02:54', '2023-04-01 14:02:54'),
(2, 3, 2, 2, 5000.00, 5, 250.00, '2023-04-01 14:02:54', '2023-04-01 14:02:54'),
(3, 7, 1, 1, 2000.00, 25, 500.00, '2023-04-24 13:39:49', '2023-04-24 13:39:49');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `type` enum('deposit','withdrawal') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','completed','failed') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transactions_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `amount`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 13, '1200.00', 'withdrawal', 'pending', '2024-02-05 04:16:03', '2024-02-05 04:16:03'),
(2, 13, '1100.00', 'withdrawal', 'pending', '2024-02-05 04:16:04', '2024-02-05 04:16:04'),
(3, 13, '1400.00', 'withdrawal', 'pending', '2024-02-05 04:16:05', '2024-02-05 04:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `phone_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telegram` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `referral` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `my_refer_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `balance` double(8,2) NOT NULL,
  `total_income` float NOT NULL DEFAULT '0',
  `power` int DEFAULT '0',
  `earn` double(8,2) DEFAULT NULL,
  `referral_id` int DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_as` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_mobile_unique` (`phone_number`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `phone_number`, `telegram`, `password`, `referral`, `my_refer_code`, `balance`, `total_income`, `power`, `earn`, `referral_id`, `remember_token`, `account_name`, `account_number`, `bank_name`, `role_as`, `created_at`, `updated_at`) VALUES
(8, '11111111', NULL, '$2y$10$kjUSzZjTVLYMgLG0iyjK2.OXzhatRkkuUz4D.V2DqVunaR2UUYUka', NULL, '9160384', 200.00, 0, 0, 200.00, NULL, NULL, 'Amos goodness ', '3056104092', 'First Bank PLC', 1, '2024-01-10 16:11:16', '2024-01-20 21:55:06'),
(9, '9166499506', NULL, '$2y$10$R/gQHs/B.rGy3/Mg5E7ycOBGbPc1KlxEgzj6yUEtc1gRnYDklzEQq', NULL, '7816995', 200.00, 0, 0, 200.00, NULL, NULL, NULL, NULL, NULL, 0, '2024-01-10 17:34:55', '2024-01-10 17:34:55'),
(11, '8060497332', NULL, '$2y$10$Fvsz6fWd0Vw2Rv1bwOZg7Op4BP5BMNMthERree2EaXLEyKxjhFAam', NULL, '6468633', 100.00, 0, 0, 100.00, NULL, NULL, 'Ude Juliet makuochi', '3037876958', 'First Bank PLC', 0, '2024-01-18 19:42:06', '2024-01-18 19:47:56'),
(12, '5858585885', NULL, '$2y$10$endmxkWxO3.dst4xGVwvFOzzHvPVF.9JnW7Qa4A17bKrq6NDo4BdO', '9160384', '5008386', 100.00, 0, 0, 100.00, 13, NULL, NULL, NULL, NULL, 0, '2024-01-22 16:56:13', '2024-01-22 16:56:13'),
(13, '08166565876', NULL, '$2y$10$vsjk5AaJxcu82Gztb5LiUeFei/umhpwp43l2H68cDoUk6GeJ314rq', '9160384', '1299007', 98000.00, 0, 0, 100.00, 8, NULL, 'odefemi lijah', '3048448881', 'FBNQUEST Merchant Bank', 0, '2024-01-24 16:11:09', '2024-01-29 07:59:56'),
(14, '08075056752', NULL, '$2y$10$4eu1tn4Q2pvaMJDCfqHREODNiw3ueiuYUs6HNTUto596gbIrlxdS6', '1299007', '8202014', 100.00, 0, 0, 100.00, 13, NULL, NULL, NULL, NULL, 0, '2024-01-29 02:13:32', '2024-01-29 02:13:33');

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

DROP TABLE IF EXISTS `wallets`;
CREATE TABLE IF NOT EXISTS `wallets` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `balance` decimal(10,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `wallets_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wallets`
--

INSERT INTO `wallets` (`id`, `user_id`, `balance`, `created_at`, `updated_at`) VALUES
(1, 13, '50000.00', '2024-02-02 06:19:56', '2024-02-02 06:19:56');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

DROP TABLE IF EXISTS `withdrawals`;
CREATE TABLE IF NOT EXISTS `withdrawals` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `amount` double(8,2) NOT NULL,
  `status` enum('success','pending','failed') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdrawals`
--

INSERT INTO `withdrawals` (`id`, `user_id`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(6, 13, 1000.00, 'pending', '2024-01-29 07:59:47', '2024-01-29 07:59:47'),
(7, 13, 1000.00, 'pending', '2024-01-29 07:59:56', '2024-01-29 07:59:56'),
(8, 13, 1200.00, 'pending', '2024-02-05 04:16:03', '2024-02-05 04:16:03'),
(9, 13, 1200.00, 'pending', '2024-02-05 04:16:04', '2024-02-05 04:16:04'),
(10, 13, 1200.00, 'pending', '2024-02-05 04:16:05', '2024-02-05 04:16:05');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
