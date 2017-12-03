-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2017 at 10:10 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baho`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_form`
--

CREATE TABLE `book_form` (
  `id` int(11) NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `book_form`
--

INSERT INTO `book_form` (`id`, `email`, `created_at`, `updated_at`) VALUES
(3, 'aungsoeoo.94s@gmail.com', '2017-09-09 09:33:29', '2017-09-09 09:33:29');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_or_sub` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `parent_id`, `description`, `main_or_sub`, `created_at`, `updated_at`) VALUES
(1, 'SayardawBook', 0, 'ဆရာေတာ္ႀကီးစာအုပ္မ်ား', 0, '2017-10-08 08:39:35', '2017-10-08 08:39:35'),
(2, 'Abidama', 1, 'အဘိဓမၼာပုိ႔ခ်ခ်က္မ်ား', 1, '2017-10-08 08:41:09', '2017-10-08 08:41:09'),
(3, 'Advices', 1, 'ၾသ၀ါဒမ်ား', 1, '2017-10-08 08:41:39', '2017-10-08 08:41:39'),
(4, 'Journals', 0, 'ဂ်ာနယ္မ်ား', 1, '2017-10-08 08:42:22', '2017-10-08 08:42:22'),
(5, 'TharkiBlood', 4, 'သာကီေသြး', 1, '2017-10-08 08:43:04', '2017-10-08 08:43:04'),
(6, 'Aungzayyatu', 4, 'ေအာင္ေဇယ်တု', 1, '2017-10-08 08:43:41', '2017-10-08 08:43:41'),
(7, 'Gallery', 0, 'လွဳပ္ရွားမွု ဓာတ္ပံုမ်ား', 0, '2017-10-09 08:51:52', '2017-10-09 08:51:52'),
(8, 'Activity', 7, '', 1, '2017-10-09 08:54:12', '2017-10-09 08:54:12');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'kyawkyaw', 'kyaw@gmail.com', 'this is comment', '2017-09-30 08:54:02', '2017-09-30 08:54:02'),
(2, 'Hein', 'heinhtetaung.sglife@gmail.com', 'dfdf', '2017-10-05 07:18:35', '2017-10-05 07:18:35');

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
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2017_08_21_150237_create_category_table', 1),
(11, '2017_08_21_151540_create_posts_table', 1),
(12, '2017_08_21_152000_create_postsmeta_table', 1),
(13, '2017_09_04_141003_create_student_table', 1),
(14, '2017_09_04_143648_create_contact_table', 1);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature_photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attach_file` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `custom_field1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `custom_field2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `custom_field3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `custom_field4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `custom_field5` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `main_category_id`, `sub_category_id`, `short_description`, `detail_description`, `feature_photo`, `attach_file`, `detail_photo`, `custom_field1`, `custom_field2`, `custom_field3`, `custom_field4`, `custom_field5`, `created_at`, `updated_at`) VALUES
(1, 'Abidama Book1', 1, 2, '', '', '-media-1012-1 (1).png', '000959067_HeinHtetAung_ISM.pdf', '', '', '', '', '', '', '2017-10-08 09:15:10', '2017-10-08 09:15:10'),
(2, 'Activity Photo1', 7, 8, '', '', '1.jpg', '', '', '', '', '', '', '', '2017-10-09 08:54:40', '2017-10-09 08:54:40');

-- --------------------------------------------------------

--
-- Table structure for table `postsmeta`
--

CREATE TABLE `postsmeta` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `meta_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_registration_form`
--

CREATE TABLE `student_registration_form` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_nrc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passed_school` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll_no` int(11) NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_registration_form`
--

INSERT INTO `student_registration_form` (`id`, `name`, `father_name`, `father_nrc`, `passed_school`, `roll_no`, `phone_no`, `email`, `gender`, `address`, `created_at`, `updated_at`) VALUES
(1, 'mgmg', 'U Mya', '12/maapa(N)12345', 'Mandalay', 2, '0912345678', 'umya@gmail.com', 'male', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$XfoY7Vweu.o0dKQrZUIeNuhwpyhVwmoID4jPPMgBnOBl3vJouXs2O', 1, 'BD3ehQovK0kQJutiIH9YxcJmdd5NW3aAqi4idoLdTpYpcRmbVIdVMOZGW47g', NULL, NULL),
(2, 'Customer', 'customer@gmail.com', '$2y$10$njN15Jc4SNvTpALNNwhdZ.BKrNqnlxAd/qKOsZETXpPwxHc5M/Eq2', 0, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_form`
--
ALTER TABLE `book_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contact_form_email_unique` (`email`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postsmeta`
--
ALTER TABLE `postsmeta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_registration_form`
--
ALTER TABLE `student_registration_form`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_registration_form_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `book_form`
--
ALTER TABLE `book_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `postsmeta`
--
ALTER TABLE `postsmeta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student_registration_form`
--
ALTER TABLE `student_registration_form`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
