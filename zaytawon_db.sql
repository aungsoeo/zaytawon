-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 05, 2017 at 01:47 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zaytawon_db`
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
(1, 'Home', 0, '', 0, '2017-10-03 11:28:43', '2017-10-03 11:28:43'),
(2, 'News', 0, '', 0, '2017-09-22 13:44:48', '2017-09-22 13:44:48'),
(3, 'Founders', 1, '', 1, '2017-09-22 13:45:36', '2017-09-22 13:45:36'),
(4, 'books', 0, 'စာအုပ္မ်ား', 0, '2017-10-09 17:30:00', '2017-10-09 17:30:00'),
(5, 'book1', 4, 'ေဒါက္တာအရွင္ေသာပါက ေရးသားေသာစာအုပ္မ်ား', 1, '2017-10-10 07:26:50', '2017-10-10 07:26:50'),
(6, 'book2', 4, 'ေဒါက္တာေသာပါက၏ ေနာက္ဆုံးေရးေဆာင္ပါးမ်ား', 1, '2017-10-10 08:13:43', '2017-10-10 08:13:43'),
(7, 'Gallery', 0, '', 0, '2017-09-22 13:49:36', '2017-09-22 13:49:36'),
(8, 'contact', 0, 'this is contact', 0, '2017-10-09 17:30:00', '2017-10-09 17:30:00'),
(9, 'parahita', 0, 'This is parahita category', 0, '2017-12-04 06:06:05', '2017-12-04 06:06:05'),
(10, 'pyinnyardarna', 9, 'This is pyinnyardana category', 1, '2017-12-04 06:07:08', '2017-12-04 06:07:08'),
(11, 'parahita1', 9, 'This is parahita', 1, '2017-12-04 06:08:01', '2017-12-04 06:08:01'),
(12, 'thatharnar', 0, 'This is thatharnar main category', 0, '2017-12-04 06:18:59', '2017-12-04 06:18:59'),
(13, 'thatharnar1', 12, 'This is subcategory', 1, '2017-12-04 06:19:22', '2017-12-04 06:19:22'),
(14, 'thatharnar2', 12, 'this is subcategory', 1, '2017-12-04 06:19:43', '2017-12-04 06:19:43'),
(15, 'education', 0, 'This is education category', 0, '2017-12-04 07:18:58', '2017-12-04 07:18:58'),
(16, 'donor', 0, 'This is donor category.', 0, '2017-12-04 07:19:30', '2017-12-04 07:19:30'),
(17, 'people', 0, 'တရားပဲြပင့္ေလွ်ာက္လုိသူမ်ား', 0, '2017-12-04 07:21:12', '2017-12-04 07:21:12'),
(18, 'ပရဟိတလုပ္ငန္းစဥ္မ်ား', 12, 'ပရဟိတလုပ္ငန္းစဥ္မ်ား', 1, '2017-12-04 09:47:26', '2017-12-04 09:47:26');

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
(2, 'Hein', 'heinhtetaung.sglife@gmail.com', 'dfdf', '2017-10-05 07:18:35', '2017-10-05 07:18:35'),
(3, 'mgmg', 'mgmg@gmail.com', 'THis is comment', '2017-10-18 02:39:37', '2017-10-18 02:39:37'),
(4, 'aso', 'aso@gmail.com', 'This is testing', '2017-10-18 02:41:56', '2017-10-18 02:41:56'),
(5, 'abc', 'abc@gmail.com', 'this is comment', '2017-10-18 02:56:57', '2017-10-18 02:56:57'),
(7, 'abcdef', 'abcdef@gmail.com', 'this is comment', '2017-10-18 02:58:49', '2017-10-18 02:58:49'),
(8, 'testing', 'test@example.com', 'abdddcdcddc', '2017-10-18 03:02:07', '2017-10-18 03:02:07'),
(9, 'test1', 'test1@gmail.com', 'this is msms', '2017-10-18 03:04:33', '2017-10-18 03:04:33'),
(10, 'foo', 'foo@gmail.com', 'this is foo comment', '2017-10-20 11:44:09', '2017-10-20 11:44:09'),
(11, 'bar', 'bar@gmail.com', 'this is test', '2017-10-20 11:47:25', '2017-10-20 11:47:25'),
(12, 'test name', 'test@gmail.com', 'this is testing', '2017-10-20 11:50:23', '2017-10-20 11:50:23'),
(13, 'aungsoeoo', 'aso@exmaple.com', 'this is msg', '2017-10-25 09:38:16', '2017-10-25 09:38:16'),
(14, 'test', '', 'testing data', '2017-10-29 07:08:43', '2017-10-29 07:08:43');

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
  `sub_category_id` int(11) DEFAULT NULL,
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
(1, 'ေဒါက္တာအရွင္ေသာပါက၏ ေထရုပတၱိအက်ဥ္း', 1, 3, 'သီတဂူဆရာေတာ္ အရွင္ဥာဏိႆ       ရ ၏ ေထရုပၸတၱိအက်ဥ္း\r\n\r\n', 'သီတဂူဆရာေတာ္ အရွင္ဥာဏိႆ       ရ ၏ ေထရုပၸတၱိအက်ဥ္း\r\n\r\nသီတဂူဆရာေတာ္ ဦးဥာဏိႆရ (၁၉၃၆-) ျမန္မာသကၠရာဇ္ ၁၂၉၈ – ခု၊ တပါင္းလျပည္႕ေန႕၌ အဖ ဦးေမာင္ညိဳ၊ အမိ ေဒၚသန္းတင္တို႕က ပဲခူးတိုင္း၊ ျပည္ ျမိဳ႕နယ္ စီရင္စု၊ သဲကုန္းျမိဳ႕နယ္ ပုတီးကုန္းျမိဳ႕တြင္ ဖြားျမင္သည္။ အသက္(၇)ႏွစ္အရြယ္တြင္ သဲကုန္းျမိဳ႕တပ္ အလယ္တန္းေက်ာင္းတြင္ စတင္ပညာသင္ၾကားခဲ႕။ အသက္(၁၅)ႏွစ္အရြယ္တြင္ ရွင္သာမေဏျပဳခဲ႕။\r\nသကၠရာဇ္-၁၃၁၈ – (သာသနာႏွစ္-၂၅၀၀ ျပည္႕ႏွစ္) နယုန္လဆန္း(၄)ရက္ေန႕ အသက္(၁၉)ႏွစ္အရြယ္တြင္ သဲကုန္းျမိဳ႕၌ ရဟန္းျပဳ။ ရွင္သာမေဏျပဳခ်ိန္မွစ၍ ပိဋကတ္ အေျခခံက်မ္းစာမ်ားကုိ သဲကုန္းျမိဳ႕တပ္အလယ္တန္း ေက်ာင္း ဆရာေတာ္ထံ၌ ျပည္႕စံုေအာင္ သင္ၾကားခဲ႕သည္။ ၁၃၂၂ – ဓမၼာစရိယတန္းေအာင္။ ရန္ကုန္ျမဳိ႕၊ တာေမြသိမ္ကုန္းတိုက္ မႏၱေလးျမိဳ႕အေနာက္ခင္မကန္တိုက္၊ စကု တိုက္၊ ေတာင္သမန္တိုက္၊ မုိးေကာင္းတိုက္၊ ေ၀ယံဘံုသာတိုက္၊ ဘုရားၾကီးတိုက္၊ ေရႊေရးေဆာင္တိုက္မ်ားတြင္ အဆင္႕ျမင္႕ ပိဋကတ္က်မ္းစာမ်ားကို သင္ၾကားခဲ႕။', '2.jpeg', '', '3.jpeg', '1', '2', '3', '4', '5', '2017-12-04 08:19:59', '2017-12-04 08:19:59'),
(2, 'သာသနာျပဳလုပ္ငန္းစီမံကိန္းမ်ား1', 12, 13, 'သာသနာျပဳလုပ္ငန္းစီမံကိန္းမ်ား1 short description', 'သာသနာျပဳလုပ္ငန္းစီမံကိန္းမ်ား1 detail description', '1.jpeg', '', '3.jpeg', '', '', '', '', '', '2017-12-04 09:09:45', '2017-12-04 09:09:45'),
(3, 'ပရဟိတလုပ္ငန္းစဥ္မ်ား1', 12, 18, 'ပရဟိတလုပ္ငန္းစဥ္မ်ား1 Short Description', 'ပရဟိတလုပ္ငန္းစဥ္မ်ား1  Detail Description\r\nThis is a W3C compliant free website template from OS Templates. For full terms of use of this template please read our website template licence.\r\n\r\nYou can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files. For more website templates visit our free website templates section.\r\n\r\nPortortornec condimenterdum eget consectetuer condis consequam pretium pellus sed mauris enim. Puruselit mauris nulla hendimentesque elit semper nam a sapien urna sempus.', 'received_482375572131624.jpeg', '', '', '', '', '', '', '', '2017-12-04 09:45:21', '2017-12-04 09:48:02'),
(236, 'သာသနာျပဳစြမ္းရည္ ျမွင့္တင္ေရးသင္တန္း', 12, 14, 'သာသနာျပဳစြမ္းရည္ ျမွင့္တင္ေရးသင္တန္း တက္ေရာက္ရန္ သင္တန္း၀င္ခြင့္ေလွ်ာက္လႊာ ျဖည္ရန္။\r\nသင္တန္း၀င္ခြင့္ေလွ်ာက္လႊာကို  ေအာက္ပါအတုိင္း မွန္ကန္စြာျဖည့္စြက္ပါ။', 'သာသနာျပဳစြမ္းရည္ ျမွင့္တင္ေရးသင္တန္း တက္ေရာက္ရန္ သင္တန္း၀င္ခြင့္ေလွ်ာက္လႊာ ျဖည္ရန္။\r\nသင္တန္း၀င္ခြင့္ေလွ်ာက္လႊာကို   ေအာက္ပါအတုိင္း မွန္ကန္စြာျဖည့္စြက္ပါ။', '3.jpeg', '', '', '', '', '', '', '', '2017-12-04 10:08:46', '2017-12-04 10:08:46'),
(237, 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 4, 5, 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 'Buddha_Shakyamuni_painting_tree_enlightenment_Bodghaya.jpg', 'ဦးကုလား.pdf', '', '', '', '', '', '', '2017-12-04 10:33:21', '2017-12-04 10:33:21'),
(238, 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 4, 5, 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', '', 'ဦးကုလား.pdf', '', '', '', '', '', '', '2017-12-04 10:33:21', '2017-12-04 10:33:21'),
(239, 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 4, 5, 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 'Buddha_Shakyamuni_painting_tree_enlightenment_Bodghaya.jpg', 'ဦးကုလား.pdf', '', '', '', '', '', '', '2017-12-04 10:33:21', '2017-12-04 10:33:21'),
(240, 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 4, 5, 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', '', 'ဦးကုလား.pdf', '', '', '', '', '', '', '2017-12-04 10:33:21', '2017-12-04 10:33:21'),
(241, 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 4, 5, 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 'Buddha_Shakyamuni_painting_tree_enlightenment_Bodghaya.jpg', 'ဦးကုလား.pdf', '', '', '', '', '', '', '2017-12-04 10:33:21', '2017-12-04 10:33:21'),
(242, 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 4, 5, 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', '', 'ဦးကုလား.pdf', '', '', '', '', '', '', '2017-12-04 10:33:21', '2017-12-04 10:33:21'),
(243, 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 4, 5, 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 'Buddha_Shakyamuni_painting_tree_enlightenment_Bodghaya.jpg', 'ဦးကုလား.pdf', '', '', '', '', '', '', '2017-12-04 10:33:21', '2017-12-04 10:33:21'),
(244, 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 4, 5, 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', '', 'ဦးကုလား.pdf', '', '', '', '', '', '', '2017-12-04 10:33:21', '2017-12-04 10:33:21'),
(245, 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 4, 5, 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 'Buddha_Shakyamuni_painting_tree_enlightenment_Bodghaya.jpg', 'ဦးကုလား.pdf', '', '', '', '', '', '', '2017-12-04 10:33:21', '2017-12-04 10:33:21'),
(246, 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 4, 5, 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', '', 'ဦးကုလား.pdf', '', '', '', '', '', '', '2017-12-04 10:33:21', '2017-12-04 10:33:21'),
(247, 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 4, 5, 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 'Buddha_Shakyamuni_painting_tree_enlightenment_Bodghaya.jpg', 'ဦးကုလား.pdf', '', '', '', '', '', '', '2017-12-04 10:33:21', '2017-12-04 10:33:21'),
(248, 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 4, 5, 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', '', 'ဦးကုလား.pdf', '', '', '', '', '', '', '2017-12-04 10:33:21', '2017-12-04 10:33:21'),
(249, 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 4, 5, 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 'Buddha_Shakyamuni_painting_tree_enlightenment_Bodghaya.jpg', 'ဦးကုလား.pdf', '', '', '', '', '', '', '2017-12-04 10:33:21', '2017-12-04 10:33:21'),
(250, 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 4, 5, 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', '', 'ဦးကုလား.pdf', '', '', '', '', '', '', '2017-12-04 10:33:21', '2017-12-04 10:33:21'),
(251, 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 4, 5, 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 'Buddha_Shakyamuni_painting_tree_enlightenment_Bodghaya.jpg', 'ဦးကုလား.pdf', '', '', '', '', '', '', '2017-12-04 10:33:21', '2017-12-04 10:33:21'),
(252, 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 4, 5, 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', 'ေဇတ၀န္စာစဥ္စာအုပ္မ်ား', '', 'ဦးကုလား.pdf', '', '', '', '', '', '', '2017-12-04 10:33:21', '2017-12-04 10:33:21');

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
-- Table structure for table `registration_form`
--

CREATE TABLE `registration_form` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `father_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `nrc` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `organization` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `monastery_name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_party` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `education` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `registration_form`
--

INSERT INTO `registration_form` (`id`, `name`, `father_name`, `nrc`, `phone_no`, `address`, `organization`, `gender`, `monastery_name`, `is_party`, `education`, `created_at`, `updated_at`) VALUES
(1, 'aso', 'u kyaw hla', '9/pamana3843838', '093738438', 'pyinmana', 'KYPO', NULL, 'abatha', NULL, NULL, '2017-10-16 10:48:19', '2017-10-16 10:48:19'),
(2, 'kyaw', 'U Ba', '9/38743483', '093483783', 'Mdy', 'NGO', NULL, 'Minkon', '1', 'BSc', '2017-10-18 01:44:28', '2017-10-18 01:44:28'),
(3, 'mama', 'U Mya', '12/3848384', '09374388374', 'TaungGYI', NULL, 'female', NULL, NULL, 'Grade11', '2017-10-18 01:48:38', '2017-10-18 01:48:38'),
(4, 'myamya', 'U Mg hla', '7/yataa38483483', '093874384783', 'YGN', 'Shwe', 'female', 'BaHan', NULL, 'MSc', '2017-10-18 02:14:17', '2017-10-18 02:14:17'),
(5, 'ေအာင္ေအာင္', 'ဦးေမာင္ၾကီး', '၉/မအပ(နိင္)၄၇၂၈၂', '၀၉၃၄၃၇၄၈၃', 'မႏၱေလးျမိဳ့', NULL, 'male', 'ေဇတဝန္ေက်ာင္း', NULL, 'BSc', '2017-10-18 02:20:49', '2017-10-18 02:20:49'),
(6, 'john', 'Michael John', '9/pnamand(n)348383', '0938438438748', 'taxus', 'NGO', 'male', NULL, '1', 'Phd', '2017-10-18 02:23:52', '2017-10-18 02:23:52'),
(7, 'foo', 'ber', '9/3748348347', '8388343838', 'Ygn', 'Shwe Youth', 'male', '', '1', 'BE', '2017-10-18 03:14:24', '2017-10-18 03:14:24'),
(8, 'foo', 'ber', '9/3748348347', '8388343838', 'Ygn', 'Shwe Youth', 'male', '', '1', 'BE', '2017-10-18 03:15:19', '2017-10-18 03:15:19'),
(9, 'foo', 'ber', '9/3748348347', '8388343838', 'Ygn', 'Shwe Youth', 'male', '', '1', 'BE', '2017-10-18 03:15:29', '2017-10-18 03:15:29'),
(10, 'foo', 'ber', '9/3748348347', '8388343838', 'Ygn', 'Shwe Youth', 'male', '', '1', 'BE', '2017-10-18 03:17:32', '2017-10-18 03:17:32'),
(11, 'testmail', 'testmial@gmail.com', '9/3483483', '454545454', 'tng', '', 'male', 'dfedege', '1', 'BE', '2017-10-18 03:26:48', '2017-10-18 03:26:48'),
(12, 'johndoe', 'mr john smith', '9/pamana(N)38438483', '093483483483', 'kiejie', 'INGO', 'male', 'BaHan', '1', 'PHd.', '2017-10-18 03:29:19', '2017-10-18 03:29:19'),
(13, 'ေက်ာ္ေက်္ာ', 'ဦးေက်ာ္ဟိန္း', '၉/မအပ(နိင္)၄၇၂၈၂', '၀၉၃၄၈၃၇၄၈၃', 'မအူပင္။ဧရာဝတီတိုင္း', 'အလင္းေရာင္ လူမွုကူညီေရး', 'male', 'ဦးဥတၱမေက်ာင္း', '1', '၁၀ တန္း ေအာင္', '2017-10-18 03:32:30', '2017-10-18 03:32:30'),
(14, 'test name', 'test f name', '9/pdkfkd3783438', '03939393', 'YGN', 'IGO', 'male', 'kjgbkd', '1', 'BE', '2017-10-20 11:49:34', '2017-10-20 11:49:34'),
(15, 'aungsoeoo', 'u hla', '9/pamana(N)34738483', '093874838374', 'ygn', 'KPYO', 'male', 'baka', '1', 'BE(CE)', '2017-10-25 09:31:55', '2017-10-25 09:31:55');

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
(1, 'Admin', 'admin@gmail.com', '$2y$10$XfoY7Vweu.o0dKQrZUIeNuhwpyhVwmoID4jPPMgBnOBl3vJouXs2O', 1, 'zF8oZ97kpO9qYXKrajU66hcOlDdye7Ndtl9LGnIzMTcGg6I2Ys7feZCX4SST', NULL, NULL),
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
-- Indexes for table `registration_form`
--
ALTER TABLE `registration_form`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT for table `postsmeta`
--
ALTER TABLE `postsmeta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration_form`
--
ALTER TABLE `registration_form`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
