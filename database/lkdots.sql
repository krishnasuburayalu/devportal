-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 07, 2020 at 09:40 PM
-- Server version: 5.7.29
-- PHP Version: 7.3.15-3+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lkdots`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'ATM Withdrawal', 'ATM Withdrawal', '2019-10-30 19:37:23', '2019-10-30 19:37:23'),
(2, 'Payroll', 'Payroll', '2019-10-30 23:41:46', '2019-10-30 23:41:46'),
(4, 'Direct Payment', 'Direct Payment', '2019-10-30 23:42:45', '2019-10-30 23:42:45'),
(5, 'Purchase', 'Purchase', '2019-10-30 23:43:35', '2019-10-30 23:43:35'),
(6, 'Interest', 'Interest', '2019-10-30 23:49:49', '2019-10-30 23:49:49');

-- --------------------------------------------------------

--
-- Table structure for table `extract_metadata_status`
--

CREATE TABLE `extract_metadata_status` (
  `id` int(11) NOT NULL,
  `instance_id` varchar(50) NOT NULL,
  `status_code` varchar(50) NOT NULL,
  `status_message` varchar(250) NOT NULL,
  `log_message` text NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `extract_metadata_status`
--

INSERT INTO `extract_metadata_status` (`id`, `instance_id`, `status_code`, `status_message`, `log_message`, `created_on`, `updated_on`, `created_by`, `updated_by`) VALUES
(1, 'qwwew', '123', '', '', '2019-10-23 04:40:20', '2019-10-23 04:40:20', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_id` int(10) UNSIGNED DEFAULT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `lft` int(10) UNSIGNED DEFAULT NULL,
  `rgt` int(10) UNSIGNED DEFAULT NULL,
  `depth` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `name`, `type`, `link`, `page_id`, `parent_id`, `lft`, `rgt`, `depth`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Menu 2', 'internal_link', NULL, NULL, 1, NULL, NULL, NULL, '2019-11-05 08:39:25', '2019-11-05 08:39:45', NULL),
(2, 'Menu 1', 'page_link', NULL, NULL, 1, NULL, NULL, NULL, '2019-11-05 08:40:13', '2019-11-05 08:40:13', NULL);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 2),
(4, '2019_11_05_031912_create_permission_tables', 3),
(5, '2016_05_05_115641_create_menu_items_table', 4),
(6, '2016_05_25_121918_create_pages_table', 5),
(7, '2017_04_10_195926_change_extras_to_longtext', 5),
(8, '2015_08_04_131614_create_settings_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `template` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `extras` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `pattern`
--

CREATE TABLE `pattern` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `pattern` varchar(256) NOT NULL,
  `transactionType` varchar(32) NOT NULL,
  `transactionStatus` varchar(64) NOT NULL,
  `category` varchar(64) NOT NULL,
  `subCategory` varchar(64) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pattern`
--

INSERT INTO `pattern` (`id`, `name`, `pattern`, `transactionType`, `transactionStatus`, `category`, `subCategory`, `created_at`, `updated_at`) VALUES
(1, 'ATM Withdrawal', 'ATM Withdrawal', 'DEBIT', 'COMPLETED', 'Withdrawal', 'ATM', '2019-10-31 02:41:10', '2019-11-03 15:06:12'),
(2, 'Direct Deposit - Payroll', 'Direct Deposit - Payroll', 'CREDIT', 'COMPLETED', 'Payroll', 'SLASHSUPPORT', '2019-10-31 02:50:30', '2019-11-03 15:09:00'),
(3, 'GEICO', 'GEICO', 'DEBIT', 'COMPLETED', 'Payment', 'GEICO', '2019-10-31 02:52:43', '2019-11-03 15:12:46'),
(4, 'Jerseystrong', 'Club Fees Jerseystrong', 'DEBIT', 'COMPLETED', 'Payment', 'Jerseystrong', '2019-10-31 02:54:20', '2019-11-03 15:13:07'),
(5, 'HouseRent', 'Proprtypay  Clickpay', 'DEBIT', 'COMPLETED', 'Payment', 'House-Rent', '2019-10-31 02:55:57', '2019-11-03 15:13:34'),
(6, 'Debit Card Purchase', 'Debit Card Purchase', 'DEBIT', 'COMPLETED', 'Purchase', 'Debit Card Purchase', '2019-10-31 02:58:14', '2019-11-03 15:13:54'),
(7, 'Payment Citi Card', 'Payment Citi Card', 'DEBIT', 'COMPLETED', 'Card-Payment', 'CITI', '2019-10-31 03:02:33', '2019-12-04 02:27:47'),
(8, 'Payment Discover Card', 'E-Payment Discover', 'DEBIT', 'COMPLETED', 'Card-Payment', 'Discover', '2019-10-31 03:03:51', '2019-12-04 02:28:09'),
(9, 'PSEG payment', 'Pseg Public Service', 'DEBIT', 'COMPLETED', 'Payment', 'PSEG', '2019-10-31 03:05:46', '2019-11-03 15:14:53'),
(10, 'Interest', 'Interest Payment', 'CREDIT', 'COMPLETED', 'Interest', 'PNC', '2019-10-31 03:07:41', '2019-11-03 15:15:07'),
(11, 'Amazon.com', 'AMAZON.COM', 'DEBIT', 'COMPLETED', 'Merchandise', 'e-shopping', '2019-10-31 03:13:10', '2019-11-03 15:15:25'),
(12, 'Amazon.com', 'AMZN MKTP', 'DEBIT', 'COMPLETED', 'Merchandise', 'e-shopping', '2019-10-31 03:14:25', '2019-11-03 15:15:40'),
(13, 'ATT', 'AT&T', 'DEBIT', 'COMPLETED', 'Payment', 'phone', '2019-10-31 03:15:36', '2019-11-03 15:15:56'),
(14, 'BCBS Food court', 'BCBS NEWARK', 'DEBIT', 'COMPLETED', 'Purchase', 'Restaurants', '2019-10-31 03:19:17', '2019-11-03 15:16:09'),
(15, 'DD', 'DUNKIN', 'DEBIT', 'COMPLETED', 'Purchase', 'Restaurants', '2019-10-31 03:20:35', '2019-11-03 15:16:19'),
(16, 'IGO', 'INDIAN GROCERIES OUTLET', 'DEBIT', 'COMPLETED', 'Purchase', 'Grocery', '2019-10-31 03:23:17', '2019-11-03 15:16:38'),
(17, 'Cridit Card Intrest', 'INTEREST CHARGE', 'DEBIT', 'COMPLETED', 'Interest', 'Card', '2019-10-31 03:24:31', '2019-11-03 15:16:53'),
(18, 'Cridt card payment', 'INTERNET PAYMENT', 'CREDIT', 'COMPLETED', 'Card-Payment', 'Card', '2019-10-31 03:26:23', '2019-11-26 03:18:23'),
(19, 'Taco Bell', 'TACO BELL', 'DEBIT', 'COMPLETED', 'Purchase', 'Food', '2019-10-31 03:28:25', '2019-11-03 15:17:23'),
(20, 'Penn Parking', 'THREE PENN PLAZA PROP', 'DEBIT', 'COMPLETED', 'Payment', 'Parking', '2019-10-31 03:29:33', '2019-11-03 15:17:44');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2019-11-05 08:26:14', '2019-11-05 08:26:14');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `field` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `name`, `description`, `value`, `field`, `active`, `created_at`, `updated_at`) VALUES
(1, 'contact_email', 'Contact form email address', 'The email address that all emails from the contact form will go to.', 'admin@updivision.com', '{\"name\":\"value\",\"label\":\"Value\",\"type\":\"email\"}', 1, NULL, NULL),
(2, 'contact_cc', 'Contact form CC field', 'Email addresses separated by comma, to be included as CC in the email sent by the contact form.', '', '{\"name\":\"value\",\"label\":\"Value\",\"type\":\"text\"}', 1, NULL, NULL),
(3, 'contact_bcc', 'Contact form BCC field', 'Email addresses separated by comma, to be included as BCC in the email sent by the contact form.', '', '{\"name\":\"value\",\"label\":\"Value\",\"type\":\"email\"}', 1, NULL, NULL),
(4, 'motto', 'Motto', 'Website motto', 'this is the value', '{\"name\":\"value\",\"label\":\"Value\",\"type\":\"textarea\"}', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subCategory`
--

CREATE TABLE `subCategory` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `description` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subCategory`
--

INSERT INTO `subCategory` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'GEICO', 'GEICO', '2019-10-30 23:47:13', '2019-10-30 23:47:13'),
(2, 'SLASHSUPPORT INC', 'SLASHSUPPORT INC', '2019-10-30 23:47:36', '2019-10-30 23:47:36'),
(3, 'Jerseystrong', 'Jerseystrong', '2019-10-30 23:47:57', '2019-10-30 23:47:57'),
(4, 'Proprtypay  Clickpay', 'Proprtypay  Clickpay', '2019-10-30 23:48:10', '2019-10-30 23:48:10'),
(5, 'Moghul Express', 'Moghul Express', '2019-10-30 23:48:27', '2019-10-30 23:48:27'),
(6, 'E-Zpass', 'E-Zpass', '2019-10-30 23:48:55', '2019-10-30 23:48:55'),
(7, 'Citi Card', 'Citi Card', '2019-10-30 23:49:11', '2019-10-30 23:49:11'),
(8, 'Pseg', 'Pseg', '2019-10-30 23:49:25', '2019-10-30 23:49:25'),
(9, 'DUNKIN', 'DUNKIN', '2019-10-30 23:52:36', '2019-10-30 23:52:36');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `amount` float NOT NULL DEFAULT '0',
  `category` varchar(64) DEFAULT NULL,
  `subCategory` varchar(64) DEFAULT NULL,
  `subSubCategory` varchar(64) DEFAULT NULL,
  `transactionType` varchar(16) NOT NULL DEFAULT 'DEBIT',
  `description` varchar(256) DEFAULT NULL,
  `transactionID` varchar(64) DEFAULT NULL,
  `transactionDate` date NOT NULL,
  `transactionStatus` varchar(16) NOT NULL DEFAULT 'COMPLETED',
  `instanceId` varchar(32) DEFAULT NULL,
  `importType` varchar(16) NOT NULL DEFAULT 'CLI',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$BNxvTBJufVfKO38DK4hwSu9c76Go59iQfts93H5Z.scELGfI6COBy', 'YCXR19RpNmnyYRRUBA5MuSk5XTROfc7atduI9EdkTaCLqou52zzwC8Adh8Kz', '2019-10-23 08:04:07', '2019-10-23 08:04:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pattern`
--
ALTER TABLE `pattern`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `subCategory`
--
ALTER TABLE `subCategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pattern`
--
ALTER TABLE `pattern`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subCategory`
--
ALTER TABLE `subCategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
