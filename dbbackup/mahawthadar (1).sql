-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2017 at 08:32 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahawthadar`
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
(1, 'History', 0, '', 0, '2017-09-22 13:44:38', '2017-09-22 13:44:38'),
(2, 'News', 0, '', 0, '2017-09-22 13:44:48', '2017-09-22 13:44:48'),
(3, 'Founders', 1, '', 1, '2017-09-22 13:45:36', '2017-09-22 13:45:36'),
(4, 'News Activity', 2, '', 1, '2017-09-22 13:47:20', '2017-09-22 13:47:20'),
(5, 'Student Life', 2, '', 1, '2017-09-22 13:47:32', '2017-09-22 13:47:32'),
(6, 'Sport', 2, '', 1, '2017-09-22 13:47:46', '2017-09-22 13:47:46'),
(7, 'Health Care', 2, '', 1, '2017-09-22 13:48:14', '2017-09-22 13:48:14'),
(8, 'Food', 2, '', 1, '2017-09-22 13:48:23', '2017-09-22 13:48:23'),
(9, 'Donations', 0, '', 0, '2017-09-22 13:49:09', '2017-09-22 13:49:09'),
(10, 'Donate', 9, '', 1, '2017-09-22 13:49:16', '2017-09-22 13:49:16'),
(11, 'Gallery', 0, '', 0, '2017-09-22 13:49:36', '2017-09-22 13:49:36'),
(13, 'ေနာက္ဆံုးရသတင္း', 2, 'ေက်ာင္းနွင့္ပတ္သက္ေသာေနာက္ဆံုးရသတင္းမ်ားကို တင္ေပးပါမည္', 1, '2017-09-28 08:27:23', '2017-09-28 08:27:23'),
(14, 'News Gallery', 11, '', 1, '2017-10-02 09:29:59', '2017-10-02 09:29:59'),
(15, 'Activity Gallery', 11, '', 1, '2017-10-02 09:30:15', '2017-10-02 09:30:15'),
(16, 'teacher', 0, 'this is teacher category', 0, NULL, NULL),
(17, 'timetable', 0, 'this is timetable category', 0, NULL, NULL),
(18, '(၈) တန္း ဆရာ/ ဆရာမမ်ား', 16, 'This is grade 9 teachers category', 1, '2017-10-02 02:36:21', '2017-10-02 02:36:21'),
(19, '(၉) တန္း ဆရာ/ ဆရာမမ်ား', 16, '၉ တန္း သင္ ဆရာ ဆရာမ မ်ား', 1, '2017-10-02 02:39:24', '2017-10-02 02:39:24'),
(20, '(၁၀) တန္း ဆရာ/ ဆရာမမ်ား', 16, 'This is grade 11 teachers category', 1, '2017-10-02 02:42:17', '2017-10-02 02:42:17'),
(21, '၂၀၁၇ - ၁၈ ပညာသင္ႏွစ္ အဌမတန္း (က) အခ်ိန္ဇယား', 17, 'grade 9  (A) time table', 1, '2017-10-03 01:00:31', '2017-10-03 01:00:31'),
(22, '၂၀၁၇ - ၁၈ ပညာသင္ႏွစ္ အဌမတန္း (ခ) အခ်ိန္ဇယား', 17, 'grade 9 (B) timetable', 1, '2017-10-03 01:01:07', '2017-10-03 01:01:07'),
(23, 'Home', 0, '', 0, '2017-10-03 11:28:43', '2017-10-03 11:28:43'),
(24, 'Slider', 23, '', 1, '2017-10-03 11:29:08', '2017-10-03 11:29:08'),
(25, 'About', 23, '', 1, '2017-10-03 11:29:34', '2017-10-03 11:29:34');

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

INSERT INTO `posts` (`id`, `title`, `main_category_id`, `sub_category_id`, `short_description`, `detail_description`, `feature_photo`, `detail_photo`, `custom_field1`, `custom_field2`, `custom_field3`, `custom_field4`, `custom_field5`, `created_at`, `updated_at`) VALUES
(3, 'ေက်ာင္းသံုး ဗာလာစာအုပ္ လွဴဒါန္းျခင္း', 9, 10, 'ပထမတန္း ေက်ာင္းသား ေက်ာင္းသူမ်ားအတြက္ ဗာလာစာအုပ္ လွဴဒါန္းလိုပါသည္', 'ေက်ာင္းသား ေက်ာင္းသူမ်ားအတြက္ ပံုနွိပ္စာအုပ္ ေကာ ဗာလာစာအုပ္ပါလွဴခ်င္လို့ပါ', 'user.png', '429287.png', '1', '2', '3', '4', '5', '2017-09-26 10:08:44', '2017-09-26 10:08:44'),
(4, 'အဟာရေက်ြးေမြးျခင္း update', 9, 13, 'မုန့္ဟင္းခါး ေက်ြးေမြးျခင္း udpat', 'မုန့္ဟင္းခါးေက်ြးလိုပါသည္။ မနက္ျဖန္ လာေက်ြးမည္။ update', 'received_482375415464973.jpeg', '12.jpeg', 'd', 'e', 'e', 'g', 'h', '2017-09-27 10:31:00', '2017-09-28 10:54:53'),
(6, 'post title', 2, 13, 'This is short descritption', 'This is detail description', '19503.jpg', 'apache start fail.png', 'this is custom field1', 'this is custom field2', 'this is custom field3', 'this is custom field4', 'this is custom field5', '2017-09-30 04:48:21', '2017-09-30 04:48:21'),
(7, 'post title 2', 2, 5, 'this is short description', 'this is detail descrpiton', '16788.jpg', 'admin_posts.png', '1', '2', '3', '4', '5', '2017-09-30 05:16:30', '2017-09-30 05:16:30'),
(8, 'post title 2', 2, 5, 'this is short description', 'this is detail descrpiton', '16788.jpg', 'admin_posts.png', '1', '2', '3', '4', '5', '2017-09-30 05:16:30', '2017-09-30 05:16:30'),
(9, 'post title 2', 2, 5, 'this is short description', 'this is detail descrpiton', '16788.jpg', 'admin_posts.png', '1', '2', '3', '4', '5', '2017-09-30 05:16:30', '2017-09-30 05:16:30'),
(10, 'post title 2', 2, 5, 'this is short description', 'this is detail descrpiton', '16788.jpg', 'admin_posts.png', '1', '2', '3', '4', '5', '2017-09-30 05:16:30', '2017-09-30 05:16:30'),
(11, 'this is new post', 1, 5, 'this is description', 'this is detail descritpion', 'ubuntu_linux_company_logo_66757_1920x1080.jpg', 'ubuntu_linux_love_os_26190_1920x1080.jpg', '1', '2', '3', '4', '5', '2017-09-30 05:20:11', '2017-09-30 05:20:11'),
(16, 'donation title', 9, 10, '', 'this is detail', 'images.jpeg', '', 'aungsoeoo', 'admin@gmail.com', 'my address', '09420731256', '09/30/2017', '2017-09-30 07:45:26', '2017-09-30 07:45:26'),
(17, 'မနက္စာ လွဴဒါန္းျခင္း', 9, 10, '', 'မနက္စာ အတြက္  ထမင္းနွင့္ ၾကက္သားဟင္း ေက်ြးေမြးျခင္း  ျဖစ္သည္။', 'received_482375562131625.jpeg', '', 'ေအာင္စုိးဦး', 'aso@gmail.com', 'ေနျပည္ေတာ္', '09420731256', '09/29/2017', '2017-09-30 08:13:53', '2017-09-30 08:13:53'),
(18, 'aaaaaaaaaaa', 9, 10, '', 'this is detail', 'received_482375572131624.jpeg', '', 'mgmg', 'mgmg@gmail.com', 'ygn', '09247284284', '09/07/2017', '2017-09-30 08:51:29', '2017-09-30 08:51:29'),
(19, 'Est accusantium dicta nobis placeat quod nemo eaque.', 2, 2, 'Molestias commodi aut voluptate eveniet eaque vel.', 'Magnam doloremque tenetur consequuntur facilis dolore voluptatem quo. Ipsum facere et sint optio temporibus. Ut et nisi hic et totam maiores repellendus.', 'http://loremflickr.com/400/300?random=99', 'http://loremflickr.com/400/300?random=23', 'Maxime nulla dolor iste delectus.', 'Qui eum sint blanditiis dolore.', 'Exercitationem sapiente ex sed velit provident.', 'Debitis nobis assumenda eos quos.', 'Iste quia beatae sapiente provident.', '2017-09-30 09:27:03', '2017-09-30 09:27:03'),
(20, 'Delectus et at eum impedit enim velit nostrum.', 3, 15, 'Esse minima deserunt voluptatibus autem magni velit.', 'Aspernatur animi magnam consequatur consequatur maxime. Tempora harum doloremque qui consectetur.', 'http://loremflickr.com/400/300?random=61', 'http://loremflickr.com/400/300?random=19', 'Odio quia consequatur enim praesentium.', 'Ut et eum maiores doloribus id sunt.', 'Asperiores voluptatum fugiat similique voluptatem nam.', 'Est aperiam quis totam enim ullam fugit possimus.', 'Fuga quo optio illum dolore.', '2017-09-30 09:27:03', '2017-09-30 09:27:03'),
(21, 'Dolor soluta cumque quaerat exercitationem fugiat.', 1, 5, 'Aperiam laboriosam maiores voluptatem et doloribus.', 'Alias modi est quos et vero. Et placeat accusantium laudantium.', 'http://loremflickr.com/400/300?random=96', 'http://loremflickr.com/400/300?random=39', 'Voluptas rerum illum omnis illum quis.', 'Enim totam cum autem nostrum qui.', 'Repellat officia rerum quos fuga.', 'Dolor ullam aut cupiditate est molestiae eum quas.', 'Sed quae facilis dolorum sunt consequuntur voluptas.', '2017-09-30 09:27:03', '2017-09-30 09:27:03'),
(23, 'Sed reiciendis ipsum illum consequatur.', 2, 4, 'Laboriosam qui autem rerum consequatur est impedit dolor.', 'Facere et fugiat veritatis et. Commodi est exercitationem sunt sint quidem voluptatem. Molestiae est autem a consequuntur.', 'http://loremflickr.com/400/300?random=25', 'http://loremflickr.com/400/300?random=83', 'Quidem repellat corporis explicabo excepturi similique.', 'Quis tenetur dolorem voluptas.', 'Rerum est quas at laudantium molestias quis.', 'Natus qui sed debitis exercitationem iste occaecati.', 'Quia ut laudantium est pariatur esse autem sunt.', '2017-09-30 09:27:04', '2017-09-30 09:27:04'),
(24, 'Harum laborum qui at nam aut optio quia.', 2, 4, 'Et repellendus sed suscipit praesentium architecto nihil quas.', 'Et magnam id quas eum voluptatum. Saepe similique beatae veniam voluptas libero earum.', 'http://loremflickr.com/400/300?random=12', 'http://loremflickr.com/400/300?random=10', 'Amet ad dignissimos vitae cumque quasi possimus tenetur.', 'Expedita aut doloremque possimus odit qui excepturi in et.', 'Et aspernatur consequuntur et illum.', 'Necessitatibus culpa repellendus tenetur qui ut laudantium labore deleniti.', 'Sint ducimus quidem tempora et dolorem et aperiam.', '2017-09-30 09:27:04', '2017-09-30 09:27:04'),
(25, 'Ad atque quibusdam deserunt quia voluptatibus.', 2, 3, 'Quia dignissimos consequatur autem unde laudantium et non.', 'Quia et deserunt quo reiciendis non non impedit. Et nihil tenetur velit et qui. Dolorem dolorum quia molestiae repellat iusto odit.', 'http://loremflickr.com/400/300?random=9', 'http://loremflickr.com/400/300?random=88', 'Eveniet harum quae rerum consequatur.', 'Qui sit earum deleniti aut quia earum eum.', 'Voluptatem necessitatibus quis qui est.', 'Sunt tempora architecto voluptatibus accusamus.', 'Qui enim earum commodi et molestiae labore eos.', '2017-09-30 09:27:04', '2017-09-30 09:27:04'),
(26, 'Velit aspernatur rerum quibusdam quibusdam architecto.', 6, 1, 'Ducimus esse ullam soluta accusantium iusto sapiente consectetur maxime.', 'Neque quibusdam blanditiis sed aut inventore culpa reprehenderit debitis. Explicabo quasi dolores atque qui dolorum rerum. Sequi aperiam ipsa quibusdam ea in.', 'http://loremflickr.com/400/300?random=19', 'http://loremflickr.com/400/300?random=99', 'Quas maxime temporibus voluptatem maiores nam minus ut.', 'Dolores quidem voluptatibus quia molestiae nihil.', 'Dicta fuga impedit nobis atque odio.', 'Ipsam repudiandae sit sed architecto eveniet.', 'Itaque beatae qui aut consequatur dignissimos distinctio.', '2017-09-30 09:27:04', '2017-09-30 09:27:04'),
(27, 'Error quae perspiciatis sit ut adipisci est.', 7, 9, 'Pariatur assumenda voluptatem nihil velit beatae facilis voluptas.', 'Et quos enim quibusdam sed sit expedita harum. Labore assumenda cum quibusdam iste.', 'http://loremflickr.com/400/300?random=35', 'http://loremflickr.com/400/300?random=87', 'Blanditiis ducimus sit et earum et.', 'Vero aut sit asperiores quis blanditiis sed molestiae.', 'Nostrum magni omnis ut neque voluptas sunt.', 'Qui molestias ex expedita eos modi cupiditate.', 'Ad id sint pariatur et.', '2017-09-30 09:27:04', '2017-09-30 09:27:04'),
(28, 'Ea amet eaque nihil nihil nemo voluptatem nihil.', 3, 15, 'Quas provident quo repudiandae et.', 'Et eligendi quam non doloremque quo omnis. Explicabo illum voluptatem excepturi sed dolores.', 'http://loremflickr.com/400/300?random=93', 'http://loremflickr.com/400/300?random=38', 'Qui quo rerum tenetur autem laboriosam perspiciatis.', 'Exercitationem recusandae ipsum quos voluptatem eum deleniti laudantium rerum.', 'Modi cumque iusto sit minima ut architecto et.', 'Dolor blanditiis eos porro dolor fugit veritatis iste.', 'Dolor ratione harum architecto excepturi autem.', '2017-09-30 09:27:04', '2017-09-30 09:27:04'),
(29, 'Accusamus beatae natus voluptatem enim sapiente placeat qui.', 5, 17, 'Minus enim officia pariatur iusto.', 'Fuga et praesentium et et. Quidem et ipsum illum a.', 'http://loremflickr.com/400/300?random=77', 'http://loremflickr.com/400/300?random=1', 'Vero magnam deleniti qui consequuntur tenetur.', 'Qui et rerum laboriosam pariatur sint quisquam.', 'Reprehenderit animi autem architecto quidem ad officia.', 'Consequatur eos veniam laboriosam atque enim.', 'Ab incidunt praesentium dolorem aut ut rem ut.', '2017-09-30 09:27:04', '2017-09-30 09:27:04'),
(30, 'Cumque sequi iste voluptatem atque.', 5, 20, 'Voluptatem voluptates ea asperiores ea.', 'Dolorem non soluta iste eaque reiciendis est. Officia quia nostrum voluptates facilis. Voluptas reprehenderit at dignissimos ullam dolores laboriosam explicabo.', 'http://loremflickr.com/400/300?random=10', 'http://loremflickr.com/400/300?random=88', 'Eos quibusdam nihil quia aliquid.', 'Ullam quidem enim occaecati repellendus.', 'At qui fugiat perferendis aut amet at voluptas.', 'Quasi culpa tempore a autem excepturi laudantium sit.', 'Sunt rerum quod esse consequatur quis quam occaecati.', '2017-09-30 09:27:04', '2017-09-30 09:27:04'),
(31, 'Tempora labore laboriosam veritatis odio animi eveniet.', 9, 13, 'Sit sequi eos voluptatem et ea.', 'Voluptatem quas dolorem quo aut voluptates quia est. Iure voluptas in in quibusdam officia. Et ipsam rerum cumque quia.', 'http://loremflickr.com/400/300?random=10', 'http://loremflickr.com/400/300?random=83', 'Sed debitis sit possimus incidunt dolorem id dicta.', 'Totam dolores impedit ipsam dignissimos libero.', 'Aperiam et omnis nostrum consequuntur expedita non ut sit.', 'Alias consequatur rem enim natus nam.', 'Natus distinctio quos quaerat expedita.', '2017-09-30 09:27:04', '2017-09-30 09:27:04'),
(32, 'Perspiciatis reiciendis distinctio quae vel illum culpa in aliquam.', 9, 18, 'Quo voluptatibus non impedit nesciunt quasi eius rerum.', 'Excepturi blanditiis sint enim vero ipsum. Id fugit saepe vel eius praesentium quia expedita. Quos repellendus ab quia voluptatum.', 'http://loremflickr.com/400/300?random=86', 'http://loremflickr.com/400/300?random=93', 'Deserunt ab quis eum dignissimos.', 'Eos hic ea deserunt sunt aut.', 'Quos placeat suscipit voluptas eos in.', 'Est quisquam et perspiciatis amet et.', 'Consequatur voluptas velit accusantium voluptas facere excepturi est nesciunt.', '2017-09-30 09:27:04', '2017-09-30 09:27:04'),
(33, 'Quia quo labore et harum molestiae fugiat quos.', 7, 20, 'Est nam vero esse eos.', 'Illo minus aliquam ut ratione. Vel molestiae accusamus sit fuga.', 'http://loremflickr.com/400/300?random=31', 'http://loremflickr.com/400/300?random=57', 'Sed rem dolorem voluptatem sed itaque nostrum et.', 'Eos magnam ratione explicabo aut eaque.', 'Sit blanditiis rerum unde nostrum fuga aliquid vitae.', 'Et laboriosam deserunt fuga iure.', 'Dolorem adipisci doloremque sed officiis molestiae est.', '2017-09-30 09:27:04', '2017-09-30 09:27:04'),
(34, 'Sapiente quasi in vel in recusandae.', 7, 14, 'Eos omnis molestiae facilis.', 'Iusto quae ducimus recusandae est animi. Odit vero fugiat explicabo ullam consequatur ratione. Repudiandae dolor dolorem est velit reprehenderit itaque dolor.', 'http://loremflickr.com/400/300?random=76', 'http://loremflickr.com/400/300?random=29', 'Dolorum est voluptatem architecto nulla qui.', 'Temporibus ut numquam atque excepturi necessitatibus temporibus.', 'Aut ipsam ut qui distinctio cumque esse.', 'Aut qui porro consequatur expedita reprehenderit consequuntur.', 'Illum laboriosam rerum harum sit nemo ab.', '2017-09-30 09:27:04', '2017-09-30 09:27:04'),
(35, 'Eaque consequuntur quo exercitationem harum numquam dignissimos.', 8, 12, 'Harum iste sunt necessitatibus asperiores cupiditate praesentium rerum perferendis.', 'Et eos quibusdam repudiandae sint. Itaque numquam qui ut dolor culpa placeat.', 'http://loremflickr.com/400/300?random=79', 'http://loremflickr.com/400/300?random=36', 'Ratione praesentium voluptatem aut sed suscipit.', 'Commodi odio similique unde voluptas recusandae.', 'Laudantium sit et voluptas optio provident distinctio quasi.', 'Recusandae dolore voluptas a quia qui non qui.', 'Minus non suscipit mollitia in sed.', '2017-09-30 09:27:04', '2017-09-30 09:27:04'),
(36, 'Aspernatur omnis qui nisi est accusamus quia quis labore.', 4, 14, 'Natus a tempora ut et eligendi.', 'Quam molestias ea vel iste esse. Dolores facilis officiis tempora eaque laudantium quam.', 'http://loremflickr.com/400/300?random=48', 'http://loremflickr.com/400/300?random=74', 'Accusantium dolorem voluptates totam commodi aut minus.', 'Aut qui nisi suscipit veritatis ipsam.', 'Omnis eligendi praesentium debitis natus.', 'Unde dolor dolore temporibus voluptas vero aliquam voluptates excepturi.', 'Repellat quasi voluptatem magni voluptas.', '2017-09-30 09:27:04', '2017-09-30 09:27:04'),
(37, 'Tenetur et voluptatibus quidem ea.', 9, 8, 'Molestias ut mollitia nobis similique nihil.', 'Natus impedit qui quisquam esse quibusdam dolorem voluptatum. Et autem ea aut consectetur repudiandae nobis.', 'http://loremflickr.com/400/300?random=75', 'http://loremflickr.com/400/300?random=85', 'Dolor excepturi neque dolor expedita quis quia repudiandae.', 'Molestias nihil voluptatem aut soluta neque explicabo numquam quibusdam.', 'Aliquid et aut provident porro.', 'Explicabo placeat dolor aperiam ut sit repellat est.', 'Ut fugiat quia possimus quo vitae quod sed.', '2017-09-30 09:27:04', '2017-09-30 09:27:04'),
(38, 'Consequatur qui aut est quo esse eum pariatur ut.', 10, 13, 'Tempora laborum dolore reiciendis ad eum ut sunt.', 'Eum laboriosam sint aliquid consectetur voluptas laudantium est. Ea ab facilis quae amet. Alias quia aut illum sit impedit quae sit.', 'http://loremflickr.com/400/300?random=64', 'http://loremflickr.com/400/300?random=99', 'Dolorum eius qui harum accusamus et.', 'Iusto repellat ut inventore quia.', 'Adipisci libero est minus quibusdam debitis et rerum.', 'Maiores possimus id commodi voluptatibus qui soluta.', 'Nesciunt in quaerat debitis ex beatae.', '2017-09-30 09:27:05', '2017-09-30 09:27:05'),
(39, 'Aliquid maiores modi id.', 5, 3, 'Tempora ipsam voluptas corporis cumque.', 'Omnis aspernatur quo voluptas ut maxime assumenda ullam animi. Quis voluptatibus et est illum non omnis.', 'http://loremflickr.com/400/300?random=67', 'http://loremflickr.com/400/300?random=75', 'Sed debitis corrupti quisquam.', 'Non nihil eveniet officia enim iure.', 'Maxime quibusdam fuga vero in et earum nemo provident.', 'Ut consequatur corporis ut dolore aspernatur.', 'Dolor voluptates aliquam perferendis.', '2017-09-30 09:27:05', '2017-09-30 09:27:05'),
(40, 'Cupiditate veniam laudantium laboriosam.', 5, 6, 'Laboriosam error corporis amet tempora assumenda inventore.', 'Delectus eum et doloribus in. Eius consequatur voluptas et aliquid. Nemo consequuntur doloremque corporis saepe.', 'http://loremflickr.com/400/300?random=9', 'http://loremflickr.com/400/300?random=76', 'Iste odio porro sint ipsa velit alias necessitatibus.', 'Nostrum non et incidunt iure cumque.', 'Quae aut cupiditate est ipsam.', 'Aut quibusdam cum deleniti quae tempore ex quasi distinctio.', 'Et rerum et sit dicta id.', '2017-09-30 09:27:05', '2017-09-30 09:27:05'),
(41, 'Impedit nobis maxime porro.', 2, 16, 'Dolorem voluptatem voluptas ducimus nemo.', 'Ut quia vel delectus odio. Consectetur quidem itaque mollitia voluptatum quia rem dolores.', 'http://loremflickr.com/400/300?random=62', 'http://loremflickr.com/400/300?random=27', 'Ea illo deleniti non distinctio deleniti corrupti.', 'Magnam id cumque vel autem laudantium rem.', 'Sed dolor corporis magni deleniti.', 'Maiores aperiam et similique rem facilis autem.', 'Sint iure unde molestias ipsa.', '2017-09-30 09:27:05', '2017-09-30 09:27:05'),
(42, 'Consectetur expedita ut ut sapiente accusamus sit dolorum.', 7, 15, 'Aperiam saepe quibusdam velit perspiciatis.', 'Et rerum in dolore voluptatem officia sit error. Rem odio natus quod soluta dignissimos qui eos.', 'http://loremflickr.com/400/300?random=74', 'http://loremflickr.com/400/300?random=97', 'Magnam sapiente aut mollitia consequatur necessitatibus exercitationem quisquam.', 'Excepturi est omnis reiciendis eos eaque.', 'Voluptatem ullam quasi ipsum itaque expedita reiciendis tempore.', 'Aut laborum omnis itaque saepe ut quia.', 'Ut aut ut perferendis ut voluptatem ea porro.', '2017-09-30 09:27:05', '2017-09-30 09:27:05'),
(43, 'Aspernatur eos necessitatibus nihil.', 3, 11, 'Repudiandae rerum voluptas est.', 'Non adipisci ipsum culpa occaecati. Aut atque totam quod blanditiis vitae amet consequatur. Quia nobis provident dolor rerum ut provident.', 'http://loremflickr.com/400/300?random=13', 'http://loremflickr.com/400/300?random=67', 'Voluptas officia quaerat nulla adipisci aut quam.', 'Expedita omnis omnis voluptas non.', 'Voluptate ratione voluptate optio deserunt natus cumque dolor.', 'Unde aliquam consequatur error eveniet voluptatibus.', 'Natus ut laudantium qui aspernatur voluptatibus ratione.', '2017-09-30 09:27:05', '2017-09-30 09:27:05'),
(44, 'In incidunt aut non sint est ut consequuntur.', 5, 16, 'Harum omnis impedit accusamus quidem quas at.', 'Eum voluptas ea odio voluptas nulla atque architecto. Et omnis consequatur aut tempore earum consequuntur perferendis. Quia ut aperiam aut voluptas non dolor odio.', 'http://loremflickr.com/400/300?random=35', 'http://loremflickr.com/400/300?random=90', 'Ex qui necessitatibus porro deserunt voluptas.', 'Aut ab sed autem quasi ea neque.', 'Accusamus voluptatem occaecati vel amet vitae qui repellat ut.', 'Et perferendis dolor velit qui fugit.', 'Dolorem fugit molestiae ducimus atque illum enim modi.', '2017-09-30 09:27:05', '2017-09-30 09:27:05'),
(45, 'Assumenda molestiae nesciunt excepturi unde iusto quam.', 6, 9, 'Architecto similique officiis voluptates et dolor nostrum est.', 'Eos ad sit dolorum sequi. Possimus explicabo architecto repudiandae eos voluptas.', 'http://loremflickr.com/400/300?random=68', 'http://loremflickr.com/400/300?random=44', 'Et sapiente placeat ut et.', 'Laboriosam ipsum cupiditate suscipit et et velit laboriosam.', 'Qui temporibus inventore expedita.', 'Voluptatem aut odit blanditiis ipsam.', 'Similique illo sequi eius veritatis corrupti.', '2017-09-30 09:27:05', '2017-09-30 09:27:05'),
(46, 'Est repudiandae consequatur sapiente ut ut consequatur voluptatem.', 2, 18, 'Ea voluptatem vitae voluptatum sit recusandae voluptas saepe.', 'Voluptatem modi et ut et iste occaecati eos. Consectetur autem et autem non. Qui et eveniet aut.', 'http://loremflickr.com/400/300?random=77', 'http://loremflickr.com/400/300?random=77', 'Aut aliquid ea aut optio.', 'Totam nemo enim qui.', 'Ut id omnis et incidunt rerum aliquid sint.', 'Officia et ea et sit cumque praesentium tempore est.', 'Voluptatem incidunt qui ea officiis sunt nihil.', '2017-09-30 09:27:05', '2017-09-30 09:27:05'),
(47, 'Aut vero facilis quia voluptatum neque culpa.', 3, 20, 'Occaecati qui iusto quam sunt occaecati velit esse.', 'Possimus corrupti ut blanditiis sunt assumenda. Nihil et aut ullam esse maiores perferendis. Sequi et qui commodi qui.', 'http://loremflickr.com/400/300?random=26', 'http://loremflickr.com/400/300?random=63', 'Voluptas voluptatem enim distinctio velit voluptates minus.', 'Incidunt soluta magni sed dicta.', 'Iusto corporis et harum cumque amet.', 'Dolorum nesciunt amet commodi id asperiores.', 'Cupiditate rerum laborum minus veritatis mollitia voluptatem eos.', '2017-09-30 09:27:05', '2017-09-30 09:27:05'),
(48, 'In ut dolorem aliquid voluptatem et minus ab.', 5, 13, 'Deleniti autem ut alias reprehenderit odio aut.', 'Voluptas dolorem placeat velit accusamus eveniet. Expedita laudantium quod harum debitis amet sapiente. Architecto assumenda dolores est aut iusto.', 'http://loremflickr.com/400/300?random=69', 'http://loremflickr.com/400/300?random=57', 'Porro tempore accusantium doloremque explicabo optio error.', 'Nisi sapiente quam quia illo fugiat est ab.', 'Eaque id officia qui laboriosam voluptatum molestias eum voluptates.', 'Optio qui sunt ut ut possimus sequi et.', 'Amet voluptatem nobis corrupti aut.', '2017-09-30 09:27:05', '2017-09-30 09:27:05'),
(49, 'Eum sit nostrum dolor in commodi reprehenderit deserunt.', 2, 10, 'Neque veritatis omnis qui voluptas et.', 'Natus labore voluptas voluptas vitae. Esse qui quia dignissimos et debitis ut aliquid.', 'http://loremflickr.com/400/300?random=19', 'http://loremflickr.com/400/300?random=44', 'Iusto aut beatae eius qui consequatur natus.', 'Voluptas quae voluptatem qui eum voluptatem.', 'Est id et ut optio nulla qui.', 'Ducimus iure nobis minus aliquid sed tenetur impedit qui.', 'Assumenda iusto sapiente veniam veritatis sint fugit.', '2017-09-30 09:27:05', '2017-09-30 09:27:05'),
(50, 'Voluptatem pariatur rerum minus.', 3, 20, 'Iste enim velit aut reprehenderit velit quos.', 'Eveniet delectus temporibus ea excepturi sed. Provident architecto est quis asperiores voluptatem dolores sit. Vel vitae voluptatem minima aut.', 'http://loremflickr.com/400/300?random=85', 'http://loremflickr.com/400/300?random=98', 'Necessitatibus aut ipsa voluptatum sed excepturi.', 'Aut perspiciatis iusto laborum.', 'Eos maiores et doloremque iusto tenetur nobis.', 'Laborum alias dolor et nihil excepturi deserunt architecto.', 'Animi illo impedit voluptate magni tempore voluptas.', '2017-09-30 09:27:05', '2017-09-30 09:27:05'),
(51, 'Sit hic quos aut sed rem voluptatem.', 7, 17, 'Perferendis voluptas hic ipsam provident animi.', 'Alias sed minus sed quis. Ut itaque tenetur accusantium asperiores impedit rerum ut.', 'http://loremflickr.com/400/300?random=80', 'http://loremflickr.com/400/300?random=33', 'Voluptas quod ipsum alias officia.', 'In autem illo ipsum exercitationem accusantium consequatur.', 'Exercitationem et harum voluptatem hic assumenda accusantium vel.', 'Laborum impedit qui quasi.', 'Ipsam est dicta architecto illum sint.', '2017-09-30 09:27:05', '2017-09-30 09:27:05'),
(52, 'Maxime corporis facere quaerat recusandae omnis nam.', 4, 10, 'Quod ipsum omnis quam iusto quam ut.', 'Corporis dolorem saepe et. Ex ipsam vero itaque dicta.', 'http://loremflickr.com/400/300?random=72', 'http://loremflickr.com/400/300?random=54', 'Illo non laboriosam labore dolorem mollitia ad et quos.', 'Eum nostrum commodi cupiditate.', 'Ad ad modi qui ut nulla.', 'Doloremque quo non quae assumenda.', 'Libero enim autem error facere adipisci excepturi.', '2017-09-30 09:27:05', '2017-09-30 09:27:05'),
(53, 'Architecto ad voluptates non quia.', 9, 4, 'Odit est consequatur qui fugit eum deserunt quam.', 'Quidem dolor impedit id. Eveniet assumenda aliquid ut autem similique et. Cum ullam nihil modi consequuntur.', 'http://loremflickr.com/400/300?random=18', 'http://loremflickr.com/400/300?random=35', 'Ea ut doloremque alias sit tempore.', 'Asperiores ad nobis commodi nesciunt debitis enim.', 'Harum veniam qui et assumenda.', 'Quaerat nemo et totam maiores debitis atque blanditiis culpa.', 'A unde sed nam consequatur ea minus sunt ipsa.', '2017-09-30 09:27:05', '2017-09-30 09:27:05'),
(54, 'Quos quis perferendis quia qui neque.', 6, 13, 'Ratione et dolores corporis.', 'Totam voluptatum nihil maxime consequatur est error facere. Aperiam minima quia id consectetur. Quos assumenda quaerat ipsam est enim accusantium.', 'http://loremflickr.com/400/300?random=53', 'http://loremflickr.com/400/300?random=85', 'Et excepturi tempore rem quas.', 'Non harum odit in et expedita.', 'Eum eos molestiae odit non perspiciatis asperiores.', 'Aut dignissimos consequatur quo culpa at amet nemo.', 'Repellendus et enim quia voluptatum laudantium ullam maiores.', '2017-09-30 09:27:05', '2017-09-30 09:27:05'),
(55, 'Veritatis voluptatem aut animi impedit impedit quod quos.', 1, 8, 'Ullam hic at sit recusandae explicabo fugit et.', 'Unde repudiandae cumque fugit et voluptatem veniam. Aut ut blanditiis soluta debitis magni quia qui.', 'http://loremflickr.com/400/300?random=9', 'http://loremflickr.com/400/300?random=62', 'Consectetur aliquam cupiditate natus molestiae.', 'Mollitia et ipsam porro debitis ducimus doloremque.', 'In id occaecati tenetur consectetur.', 'Pariatur adipisci fugit ea repellat nobis.', 'Aliquid sunt ut quam beatae libero adipisci.', '2017-09-30 09:27:05', '2017-09-30 09:27:05'),
(56, 'Accusamus placeat repellendus mollitia cumque veniam.', 4, 18, 'Nesciunt et animi qui saepe laborum.', 'Architecto ut asperiores consequuntur. Quod sapiente repellendus cum illum quo quis dolores.', 'http://loremflickr.com/400/300?random=60', 'http://loremflickr.com/400/300?random=71', 'Modi reiciendis necessitatibus ut ut reprehenderit ducimus.', 'Ea numquam atque architecto sint.', 'Molestias rerum ullam molestiae voluptatem quia.', 'Ea officiis dolore provident voluptatibus et.', 'Quisquam omnis iure recusandae.', '2017-09-30 09:27:05', '2017-09-30 09:27:05'),
(57, 'Ea est harum possimus adipisci expedita maxime.', 10, 3, 'Omnis in cumque aspernatur rerum quam.', 'Molestiae ducimus aut doloremque sit vitae vel. Mollitia minus voluptatem velit animi voluptatem. Incidunt dolorum impedit fugiat aliquam error non et.', 'http://loremflickr.com/400/300?random=88', 'http://loremflickr.com/400/300?random=34', 'Hic cumque nesciunt eveniet architecto non animi.', 'Sit qui ut ea eaque facilis.', 'Doloremque hic commodi amet voluptas animi dolor.', 'Modi dolorem ut eum dolorem voluptas reiciendis quia dolor.', 'Deserunt nesciunt quae nemo sunt et assumenda distinctio repellat.', '2017-09-30 09:27:05', '2017-09-30 09:27:05'),
(58, 'Aut soluta enim reprehenderit voluptatibus molestias eum eum.', 7, 6, 'Sit suscipit commodi ea mollitia enim.', 'Consequatur aperiam et rerum aliquam. Quia quibusdam quia molestias optio quo repellat. Consectetur et facilis laudantium quis minus ea aut aut.', 'http://loremflickr.com/400/300?random=67', 'http://loremflickr.com/400/300?random=1', 'Labore enim labore veniam officia et cum.', 'Voluptatem cum ut et ratione iste iste explicabo.', 'Officiis voluptates doloribus voluptatem.', 'Minus nemo at non in et libero.', 'Amet et qui omnis omnis.', '2017-09-30 09:27:06', '2017-09-30 09:27:06'),
(59, 'Totam ipsum aut sequi neque.', 10, 17, 'Vero autem inventore voluptate sit impedit dolorum.', 'Officia et nihil at dolorem velit molestias nobis. Qui quam corrupti rerum odio blanditiis qui. Beatae optio temporibus impedit.', 'http://loremflickr.com/400/300?random=100', 'http://loremflickr.com/400/300?random=1', 'Et qui temporibus consequatur reprehenderit ratione perferendis.', 'Quam nostrum maxime rerum et.', 'Beatae rem voluptas ipsum magnam eius.', 'Ducimus tenetur cum facere est.', 'Enim modi provident et architecto laborum.', '2017-09-30 09:27:06', '2017-09-30 09:27:06'),
(60, 'Unde impedit assumenda expedita eaque ullam et.', 5, 19, 'Assumenda necessitatibus vero minima ut et.', 'Et voluptas vitae dolorem. Modi a qui quia voluptas.', 'http://loremflickr.com/400/300?random=90', 'http://loremflickr.com/400/300?random=67', 'Ut et aut laudantium sit suscipit.', 'Accusamus doloremque suscipit ea quos similique porro.', 'Beatae sequi sint porro non sequi.', 'Voluptas eos qui distinctio deleniti veniam fugiat.', 'Magnam quia repellendus doloribus et.', '2017-09-30 09:27:06', '2017-09-30 09:27:06'),
(61, 'Quia voluptatem nihil eaque ducimus officiis.', 6, 19, 'Sunt dolorum molestiae optio qui voluptate voluptas eos illo.', 'Adipisci sed harum facere esse. Provident vero quod iure ut est nesciunt. Voluptatibus deserunt sed vero labore placeat sit.', 'http://loremflickr.com/400/300?random=44', 'http://loremflickr.com/400/300?random=66', 'Nam officia quas totam.', 'Accusantium voluptatum deleniti laborum et at voluptatum accusamus.', 'Earum et voluptatem blanditiis sapiente omnis veritatis.', 'Vel perferendis qui quisquam sed magnam sint sint molestias.', 'Doloremque maxime sapiente suscipit repellendus.', '2017-09-30 09:27:06', '2017-09-30 09:27:06'),
(62, 'Voluptatibus alias odit quia.', 7, 6, 'Consequatur ducimus ad et voluptatem modi ea molestias.', 'Inventore sed delectus sed beatae. Quidem et vitae in minima molestias.', 'http://loremflickr.com/400/300?random=43', 'http://loremflickr.com/400/300?random=70', 'Perspiciatis qui blanditiis molestiae recusandae aliquid autem accusamus.', 'Velit rerum doloremque beatae aut quos blanditiis in.', 'Enim perspiciatis tempore qui.', 'Sint soluta ab vero.', 'Soluta laborum sit praesentium.', '2017-09-30 09:27:06', '2017-09-30 09:27:06'),
(63, 'Hic nam eligendi aut tempora ea.', 4, 5, 'Provident et enim autem sunt nemo enim voluptates non.', 'Sapiente aliquid vel et consequatur animi qui. Reiciendis sunt maxime officiis in esse est omnis. Voluptas autem quidem a alias cum hic.', 'http://loremflickr.com/400/300?random=29', 'http://loremflickr.com/400/300?random=12', 'Neque in omnis recusandae odio impedit quae molestiae.', 'Blanditiis eligendi deserunt architecto possimus cumque.', 'Autem voluptatem rerum consequatur maiores a occaecati.', 'Similique eum quis ut.', 'Quidem dolores recusandae tempore quae dolor qui quas velit.', '2017-09-30 09:27:06', '2017-09-30 09:27:06'),
(64, 'Rerum qui doloribus veniam consequatur quia et earum adipisci.', 10, 2, 'Sint aut ad unde voluptatum.', 'Atque velit et unde quae vel non autem. Fuga eos qui et consequatur reiciendis cum sunt.', 'http://loremflickr.com/400/300?random=26', 'http://loremflickr.com/400/300?random=47', 'Placeat nihil qui tenetur libero voluptatem et dolor neque.', 'Culpa molestias repudiandae alias iusto corrupti vero unde.', 'Dolor in ut at voluptatum aut.', 'Quo non atque quae delectus eos omnis.', 'Harum quisquam sit inventore.', '2017-09-30 09:27:06', '2017-09-30 09:27:06'),
(65, 'Fugiat architecto quia hic quia accusantium corrupti.', 1, 3, 'Impedit mollitia adipisci sit dolorum facilis ut voluptas.', 'Enim quia quasi aliquam soluta. Accusamus fuga minus nesciunt voluptatum qui aut.', 'qrcode.shipmyanmar.png', '2017-06-01 inode 000webhost.png', 'Non cupiditate quasi praesentium rerum perspiciatis odio modi.', 'Tempora et saepe recusandae quis quis qui quaerat quas.', 'Adipisci nihil incidunt rerum rem.', 'Beatae expedita accusantium molestiae maiores.', 'Omnis qui tenetur sapiente veritatis.', '2017-09-30 09:27:06', '2017-10-01 10:33:49'),
(66, 'Iste ut autem voluptas totam cupiditate.', 10, 10, 'Quibusdam quas et debitis fugiat autem quo autem.', 'Voluptatem et consectetur atque eos libero ipsum. Ducimus consequatur distinctio distinctio pariatur sint et. Debitis quis ut quas inventore.', 'http://loremflickr.com/400/300?random=44', 'http://loremflickr.com/400/300?random=36', 'Quaerat laborum modi sunt quis.', 'Recusandae et ea corrupti itaque voluptatibus sint aspernatur.', 'Et illum illum tenetur quae doloribus.', 'Voluptatem animi facilis ab.', 'Reprehenderit recusandae rem sed ut perferendis iure.', '2017-09-30 09:27:06', '2017-09-30 09:27:06'),
(67, 'Est quas excepturi et corrupti est.', 2, 11, 'Doloremque doloribus in voluptas et rerum et omnis hic.', 'Id nobis nisi et omnis et. Tempora odio officiis laborum tempora.', 'http://loremflickr.com/400/300?random=43', 'http://loremflickr.com/400/300?random=16', 'Est reiciendis dolorem numquam nihil excepturi.', 'Eos rem eum praesentium minus cum accusantium numquam.', 'Accusantium commodi qui et ea sed.', 'Eos laudantium voluptate deserunt voluptas est voluptates.', 'Dicta iusto voluptatem officia temporibus.', '2017-09-30 09:27:06', '2017-09-30 09:27:06'),
(68, 'Consequatur non autem excepturi omnis quasi commodi qui.', 8, 18, 'Molestiae quidem facilis excepturi provident.', 'Qui ducimus quas assumenda excepturi at voluptas. Voluptatem dolorem voluptatem alias. Fuga quia ut molestias reprehenderit est nobis.', 'http://loremflickr.com/400/300?random=90', 'http://loremflickr.com/400/300?random=60', 'Consectetur eum nostrum quia aspernatur consectetur nihil.', 'Culpa amet provident eos non id ipsa.', 'Dolorem est numquam ut voluptatem et totam consequatur.', 'Doloribus eum aspernatur minima labore commodi possimus consequatur.', 'Quibusdam voluptatem voluptatum nulla reiciendis autem asperiores magni accusantium.', '2017-09-30 09:27:06', '2017-09-30 09:27:06'),
(69, 'Quo porro illo voluptas repellat et dolor ad.', 8, 8, 'Aperiam laudantium facilis provident.', 'Fuga similique recusandae molestias sit eum quis placeat aperiam. Assumenda id officiis qui odio. Earum sint dolorum voluptatem harum deserunt ad assumenda.', 'http://loremflickr.com/400/300?random=50', 'http://loremflickr.com/400/300?random=42', 'Quas magnam atque perspiciatis deserunt dicta.', 'Debitis soluta voluptatibus nihil animi nostrum.', 'Eum amet facilis est et tenetur dicta qui.', 'Officiis modi totam voluptate rem iure iure fuga.', 'Dolorem architecto nisi qui sit incidunt consequatur quasi.', '2017-09-30 09:27:06', '2017-09-30 09:27:06'),
(70, 'Est quae autem vel praesentium totam quae.', 8, 11, 'Deserunt consequuntur quaerat iste maxime nulla.', 'Consectetur quam facere velit. Qui incidunt sapiente incidunt et voluptas.', 'http://loremflickr.com/400/300?random=44', 'http://loremflickr.com/400/300?random=59', 'Nihil eos quia recusandae nisi.', 'Est sequi qui unde quibusdam velit pariatur vel.', 'Corrupti et qui dolore dicta sit fugiat consequuntur.', 'Aut dolores necessitatibus est commodi sint velit.', 'Vel omnis corrupti temporibus quas harum iure omnis.', '2017-09-30 09:27:06', '2017-09-30 09:27:06'),
(71, 'Quam numquam tempora et distinctio enim corporis itaque inventore.', 10, 8, 'Rerum fuga qui fugiat quia aut numquam.', 'Vitae est laboriosam sequi. Modi vitae et provident eius. Aperiam veniam voluptatem qui aut.', 'http://loremflickr.com/400/300?random=3', 'http://loremflickr.com/400/300?random=4', 'Tempora nostrum et dicta deleniti.', 'Architecto debitis molestiae ipsam provident.', 'Quia unde facilis saepe nobis.', 'Eos debitis exercitationem et incidunt et nihil.', 'Iusto sint eaque voluptatem est iure molestiae.', '2017-09-30 09:27:06', '2017-09-30 09:27:06'),
(72, 'Dolores harum sequi molestiae quae.', 7, 19, 'Facere modi libero magni dignissimos ducimus non et commodi.', 'Quo impedit eligendi laborum ratione. Dolorem molestiae cupiditate voluptas sed. Similique corrupti sunt debitis perspiciatis quidem nobis corrupti.', 'http://loremflickr.com/400/300?random=29', 'http://loremflickr.com/400/300?random=91', 'Sunt provident in consequatur voluptas vel.', 'Eaque pariatur laudantium ducimus animi possimus sint.', 'Placeat corporis rerum incidunt ratione qui maiores.', 'Tempora eligendi dolores quos assumenda vero fugiat.', 'Laboriosam esse assumenda natus sed molestias aperiam repellendus.', '2017-09-30 09:27:06', '2017-09-30 09:27:06'),
(73, 'Autem ad animi hic aliquam odit.', 2, 11, 'Eveniet aut omnis reiciendis blanditiis nulla eligendi quidem.', 'Ipsam ex nihil laudantium mollitia enim. Quaerat nisi vero expedita natus optio. Sequi est tempore delectus vel molestias error exercitationem et.', 'http://loremflickr.com/400/300?random=37', 'http://loremflickr.com/400/300?random=95', 'Aliquam fugit reiciendis dicta commodi facilis sit.', 'Illo ipsa ea tenetur a exercitationem autem odio et.', 'Rerum minus similique debitis veritatis nemo.', 'Officiis ipsum odit est debitis officiis dignissimos aut.', 'Vel eum numquam occaecati fugiat voluptas dolor ipsa aut.', '2017-09-30 09:27:06', '2017-09-30 09:27:06'),
(74, 'Sed quia quibusdam fugit magni molestiae libero cum rerum.', 9, 17, 'Natus expedita nesciunt veritatis officia deserunt ad.', 'Nisi consectetur et laboriosam explicabo sint. Quia reprehenderit aliquid et.', 'http://loremflickr.com/400/300?random=91', 'http://loremflickr.com/400/300?random=36', 'Velit neque molestiae earum tempore quae exercitationem nesciunt autem.', 'Similique et harum odit.', 'Delectus ab praesentium in veritatis aliquam fugit.', 'At pariatur quo commodi qui nobis et aut hic.', 'Non ut vel fugit id amet delectus.', '2017-09-30 09:27:06', '2017-09-30 09:27:06'),
(75, 'Doloremque ab non iste ab.', 2, 10, 'Aliquam dicta quis sed vitae rerum aut.', 'Velit et nulla eum non. Voluptatibus ullam eum autem omnis. Porro modi totam sit fuga.', 'http://loremflickr.com/400/300?random=95', 'http://loremflickr.com/400/300?random=80', 'Unde fugit sequi voluptatibus quia aut harum ut.', 'Esse sint sed aut repellat.', 'Vel et est omnis qui doloribus in similique ut.', 'Aut porro qui provident inventore.', 'Distinctio autem odio et autem perferendis exercitationem.', '2017-09-30 09:27:06', '2017-09-30 09:27:06'),
(76, 'Debitis quos modi laborum voluptatum perspiciatis iure nihil fugit.', 9, 20, 'Minima debitis eligendi nihil alias.', 'Aliquid et aut qui quos beatae aut voluptas. Ipsam aut id ea ea.', 'http://loremflickr.com/400/300?random=3', 'http://loremflickr.com/400/300?random=39', 'Et laudantium aut minima quia quidem.', 'Accusantium sed ipsam id ut et blanditiis.', 'Doloribus enim quos eaque repellat.', 'Quia consequatur ea odit dolor repellendus voluptatibus.', 'Ut omnis itaque commodi neque aliquid.', '2017-09-30 09:27:06', '2017-09-30 09:27:06'),
(77, 'Vero libero recusandae voluptatem.', 4, 8, 'Incidunt sit consequatur quo et nisi repellat perferendis nostrum.', 'Voluptatem doloribus quisquam et beatae. Similique qui tenetur molestiae ut quia eveniet culpa ut. Explicabo omnis omnis voluptatem sit.', 'http://loremflickr.com/400/300?random=46', 'http://loremflickr.com/400/300?random=45', 'Aliquam accusamus tempora commodi est eius et itaque.', 'Enim velit enim rerum est et.', 'Debitis aliquam sint deserunt.', 'Iusto incidunt quis dolorem et ad ad labore laboriosam.', 'Facilis eveniet libero enim corporis.', '2017-09-30 09:27:07', '2017-09-30 09:27:07'),
(78, 'Sunt adipisci aut eum minus.', 3, 6, 'Dolor animi nulla occaecati et odit ratione voluptatem.', 'Impedit aliquid aut modi natus deleniti. Error itaque sit in et in soluta. Omnis et est deserunt magni.', 'http://loremflickr.com/400/300?random=8', 'http://loremflickr.com/400/300?random=74', 'Pariatur non optio quis at laborum recusandae.', 'Minus eius dolore illo labore modi.', 'Architecto ex molestiae aut voluptas reprehenderit nisi.', 'Vel similique repellat voluptatum assumenda itaque molestias.', 'Quo eaque incidunt assumenda et facere officiis qui.', '2017-09-30 09:27:07', '2017-09-30 09:27:07'),
(79, 'Reiciendis omnis id porro et quasi exercitationem quia.', 2, 13, 'Expedita officia corporis culpa et accusantium.', 'Voluptas qui sint labore quibusdam numquam illum. Corrupti repellendus est dolor distinctio et a quaerat. Dolore voluptatibus quod odit dolores.', 'http://loremflickr.com/400/300?random=57', 'http://loremflickr.com/400/300?random=33', 'Iste ipsam et suscipit pariatur.', 'Cumque enim voluptates eos praesentium omnis qui assumenda.', 'Pariatur laudantium fugiat deleniti harum fuga molestias sit.', 'Pariatur qui amet ullam.', 'Sed ullam ullam facilis iste placeat vel.', '2017-09-30 09:27:07', '2017-09-30 09:27:07'),
(80, 'Non minus doloremque accusantium ut ut quaerat.', 10, 13, 'Omnis veritatis consequatur aspernatur et.', 'Non officia distinctio laudantium id. Laborum adipisci quia sed omnis voluptatem earum.', 'http://loremflickr.com/400/300?random=20', 'http://loremflickr.com/400/300?random=12', 'Non recusandae sed consequuntur.', 'Facere aliquid nihil tenetur quos sunt.', 'Sequi est dolores voluptas laudantium veritatis.', 'Quod ullam beatae minima sunt repellendus aut.', 'Repudiandae nobis voluptatum dicta nesciunt.', '2017-09-30 09:27:07', '2017-09-30 09:27:07'),
(81, 'Ea voluptas doloribus optio vitae dignissimos.', 7, 18, 'Maiores quis saepe et est in repudiandae corporis.', 'Cum eius ut deserunt sed. Aut suscipit tempore quos rem incidunt.', 'http://loremflickr.com/400/300?random=43', 'http://loremflickr.com/400/300?random=64', 'Nesciunt alias autem inventore soluta sunt.', 'Recusandae dolores quo ut magni vel.', 'Neque sed assumenda aliquam eos.', 'Molestiae nemo impedit molestiae libero consequatur harum.', 'Perferendis sunt consequatur aliquam reiciendis nobis tenetur dolor.', '2017-09-30 09:27:07', '2017-09-30 09:27:07'),
(82, 'Fugiat animi vero temporibus et.', 4, 19, 'Vel enim aut quia voluptatem ratione aut deleniti.', 'Iusto nihil id nihil expedita voluptatem. Unde qui est ducimus dolorum.', 'http://loremflickr.com/400/300?random=47', 'http://loremflickr.com/400/300?random=86', 'Velit optio modi quam quia eum minima animi.', 'Incidunt enim ullam tempore qui alias at.', 'In sed perspiciatis doloribus qui deserunt assumenda.', 'Laboriosam voluptates et adipisci.', 'Mollitia aspernatur illum et ex.', '2017-09-30 09:27:07', '2017-09-30 09:27:07'),
(83, 'Accusamus quam dolor architecto quae est a ut.', 1, 20, 'Repellat rem architecto iusto ratione ut dolores.', 'Quae dignissimos facilis rerum provident inventore voluptatem. Et saepe doloribus maxime ex dolor. Est id pariatur voluptatum voluptatum sit sint.', 'http://loremflickr.com/400/300?random=80', 'http://loremflickr.com/400/300?random=36', 'Quam voluptatum aspernatur distinctio ut eum deserunt dolorem.', 'Facere excepturi ipsam et explicabo a.', 'Voluptatibus quod consequatur qui.', 'Minima at id assumenda.', 'Quia rem ab et voluptas corporis.', '2017-09-30 09:27:07', '2017-09-30 09:27:07'),
(84, 'Eveniet deleniti ea voluptatem.', 6, 19, 'Totam sed quo natus voluptatem et.', 'Quia molestiae accusantium rerum voluptas eum error natus. Ab molestiae omnis et consectetur numquam sint mollitia necessitatibus. Ut ut necessitatibus fugit voluptas.', 'http://loremflickr.com/400/300?random=46', 'http://loremflickr.com/400/300?random=29', 'Voluptatem voluptas qui repudiandae.', 'Nisi ut sunt aut sapiente.', 'Autem corrupti expedita sit velit.', 'Maiores hic recusandae ad dolorum.', 'Sapiente molestias error nostrum libero impedit harum.', '2017-09-30 09:27:07', '2017-09-30 09:27:07'),
(85, 'Vel et architecto doloremque sed dolore et.', 3, 9, 'Modi consequatur iste distinctio dolorum quos.', 'Cumque ea hic dolorum aliquam quia aliquid quam culpa. Hic odio unde molestiae officia.', 'http://loremflickr.com/400/300?random=78', 'http://loremflickr.com/400/300?random=90', 'Quia delectus sed enim dolor voluptatem.', 'Aut sit vitae nemo non omnis et.', 'Officiis numquam qui ut possimus aliquam.', 'Sit delectus excepturi ratione numquam beatae ut voluptatem in.', 'Voluptatem soluta praesentium fuga voluptas.', '2017-09-30 09:27:07', '2017-09-30 09:27:07'),
(86, 'Ut quaerat id ut fuga asperiores sit quod voluptatibus.', 8, 9, 'Saepe quia et et tenetur eligendi.', 'Quasi beatae ullam explicabo corporis molestiae. Suscipit culpa excepturi voluptatum nihil laboriosam dignissimos quam aut. Consectetur ad quia perspiciatis et cumque quae.', 'http://loremflickr.com/400/300?random=87', 'http://loremflickr.com/400/300?random=81', 'Voluptatem omnis qui rerum iure.', 'Et corrupti odit autem dolor.', 'Sed incidunt amet ea aut doloribus.', 'Et animi aperiam corrupti aliquam neque.', 'Et provident hic repellat suscipit.', '2017-09-30 09:27:07', '2017-09-30 09:27:07'),
(87, 'Ut cumque modi vero modi itaque.', 4, 7, 'Optio nemo occaecati velit velit cum magni.', 'Qui facilis pariatur sed fuga et repellendus voluptates. Non velit fugit eveniet vero laboriosam. Tempore nobis et omnis numquam.', 'http://loremflickr.com/400/300?random=93', 'http://loremflickr.com/400/300?random=16', 'Dolorem odio voluptas numquam dolor vitae omnis.', 'Libero recusandae ex modi dolor sit esse veniam.', 'Fugit molestias aut ut sint eos corporis ut quia.', 'Nobis et consequuntur temporibus quia architecto quasi.', 'Impedit odit sunt non maiores.', '2017-09-30 09:27:07', '2017-09-30 09:27:07'),
(88, 'Fuga iste laboriosam non aut possimus repellendus architecto.', 4, 7, 'Reprehenderit non nostrum numquam a sequi ab.', 'Odit delectus eos commodi dolores dolor ipsa. Consequuntur eaque eum porro autem nostrum accusantium accusamus est. Dolore enim distinctio illum in molestiae vel optio.', 'http://loremflickr.com/400/300?random=71', 'http://loremflickr.com/400/300?random=29', 'Pariatur aut dignissimos voluptas deserunt corrupti.', 'Accusantium dolores labore et similique dolorum consequatur quos.', 'Aut explicabo tenetur neque quia assumenda error magnam.', 'Et est quibusdam perspiciatis illo vitae.', 'Saepe distinctio libero et eligendi velit.', '2017-09-30 09:27:07', '2017-09-30 09:27:07'),
(89, 'Qui quisquam repellendus reprehenderit ea accusamus aperiam ea.', 6, 2, 'Sapiente error nobis voluptas ducimus ut.', 'A doloremque eius nobis quo dolores. Veniam aliquid facere quasi ut ipsa.', 'http://loremflickr.com/400/300?random=10', 'http://loremflickr.com/400/300?random=62', 'Numquam deserunt qui fugiat repellat molestiae.', 'Earum dolorem corrupti consequuntur necessitatibus et.', 'Voluptatem odio consequatur veniam laboriosam et recusandae.', 'Neque fugit officia accusamus consequatur cumque ut nam.', 'Voluptate architecto accusantium ut odio culpa id ut eum.', '2017-09-30 09:27:07', '2017-09-30 09:27:07'),
(90, 'Exercitationem temporibus ipsum consectetur natus laudantium sed facere.', 4, 8, 'Perspiciatis minus omnis neque molestiae commodi voluptates ad est.', 'Possimus et quis nisi placeat commodi. Dolores enim saepe possimus praesentium.', 'http://loremflickr.com/400/300?random=65', 'http://loremflickr.com/400/300?random=5', 'Voluptas ullam ea voluptas nemo sed distinctio.', 'Similique explicabo et facilis aut explicabo est cum.', 'Et est corrupti aperiam voluptatem qui.', 'Non nihil dolor non quae accusamus qui.', 'Ad quidem ut provident voluptatum qui molestias consequatur id.', '2017-09-30 09:27:07', '2017-09-30 09:27:07'),
(91, 'Sit ipsum commodi nobis et.', 7, 7, 'Quis qui enim exercitationem sed ut enim quos ducimus.', 'Distinctio culpa in dolores. A labore et perspiciatis quas eius et ad sunt.', 'http://loremflickr.com/400/300?random=41', 'http://loremflickr.com/400/300?random=67', 'Laborum non adipisci nihil ea ratione.', 'Dolore repudiandae officia est sunt maxime rerum.', 'Magnam facilis labore earum dolores veniam quis.', 'Odio sit et ut sed sunt.', 'Aut nihil reprehenderit ullam deleniti provident fugiat sunt.', '2017-09-30 09:27:07', '2017-09-30 09:27:07'),
(92, 'Beatae impedit labore et eaque.', 4, 1, 'Doloribus aliquam quae commodi voluptates et delectus qui.', 'Et ratione omnis odio minus labore eaque. Molestiae magnam quia et deleniti.', 'http://loremflickr.com/400/300?random=43', 'http://loremflickr.com/400/300?random=87', 'Dolorum accusamus repellat aut voluptas.', 'Quo expedita odit voluptas ea et numquam.', 'Exercitationem dolores in asperiores esse.', 'Non ipsam et consequatur quasi adipisci qui enim.', 'Itaque temporibus est ut molestiae et ex officiis.', '2017-09-30 09:27:07', '2017-09-30 09:27:07'),
(93, 'Laboriosam corporis voluptatem aut optio aut perferendis reiciendis fuga.', 10, 9, 'Ad voluptas sed eum sed aut non omnis et.', 'Et maiores dolor praesentium sint molestias. Consequatur qui rerum deleniti amet maxime.', 'http://loremflickr.com/400/300?random=12', 'http://loremflickr.com/400/300?random=51', 'Aperiam reiciendis libero consectetur ut aut.', 'Et omnis perferendis aut quia.', 'Praesentium quos reiciendis voluptates qui vero sunt.', 'Laborum magni cupiditate assumenda eaque eos.', 'A aut facilis sint incidunt modi voluptas nobis.', '2017-09-30 09:27:07', '2017-09-30 09:27:07'),
(94, 'Occaecati odit ea earum voluptatum est et velit esse.', 7, 15, 'Quidem dolores iusto minus nesciunt.', 'Exercitationem quaerat aspernatur aperiam sunt exercitationem ut sint velit. Repudiandae tempora modi ut. Qui sapiente ducimus voluptas cupiditate non.', 'http://loremflickr.com/400/300?random=60', 'http://loremflickr.com/400/300?random=68', 'Cum quis magni quis aut.', 'Reiciendis molestiae et facilis.', 'Omnis velit voluptate mollitia voluptas velit.', 'Nobis voluptatum et doloremque sed ut.', 'Accusamus veritatis nostrum rerum cupiditate nam.', '2017-09-30 09:27:07', '2017-09-30 09:27:07'),
(95, 'Laborum dignissimos eaque quos earum velit.', 1, 2, 'Quia accusamus vitae voluptatem.', 'Illo architecto error error et non necessitatibus. Soluta ipsa officia reiciendis dolores ut temporibus. Enim laboriosam repudiandae omnis maiores nulla nihil accusamus.', 'http://loremflickr.com/400/300?random=84', 'http://loremflickr.com/400/300?random=80', 'Ut provident error amet assumenda in aut aut quaerat.', 'Ducimus quo maiores quisquam nemo voluptas labore.', 'Beatae natus porro at praesentium aut.', 'Placeat itaque quae dolor libero consectetur maxime sint rerum.', 'Quia itaque illum harum aut.', '2017-09-30 09:27:07', '2017-09-30 09:27:07'),
(96, 'Est accusamus non blanditiis minus accusantium quis.', 8, 20, 'Quia et animi dolores doloremque et ut ratione.', 'Culpa quos sit voluptas aut. Molestiae culpa rem earum occaecati eum cumque.', 'http://loremflickr.com/400/300?random=80', 'http://loremflickr.com/400/300?random=27', 'Mollitia accusamus suscipit earum laboriosam.', 'Voluptate voluptatem nihil earum facilis reiciendis saepe.', 'Repudiandae vel ullam recusandae qui similique architecto ipsam tenetur.', 'In sit qui non voluptatibus ab.', 'Ut aut nobis molestiae qui debitis.', '2017-09-30 09:27:07', '2017-09-30 09:27:07'),
(97, 'Ut unde possimus quod.', 10, 14, 'Inventore est culpa placeat eum.', 'Fugiat mollitia dolor repudiandae. Omnis quos consequuntur modi in.', 'http://loremflickr.com/400/300?random=44', 'http://loremflickr.com/400/300?random=27', 'Laudantium et officiis sapiente nam.', 'Praesentium odio hic minima ipsum aut non mollitia.', 'Praesentium error laudantium dolorum unde illum.', 'Et officiis sed eos.', 'Eum dolor soluta eos est nostrum quis eius minus.', '2017-09-30 09:27:07', '2017-09-30 09:27:07');
INSERT INTO `posts` (`id`, `title`, `main_category_id`, `sub_category_id`, `short_description`, `detail_description`, `feature_photo`, `detail_photo`, `custom_field1`, `custom_field2`, `custom_field3`, `custom_field4`, `custom_field5`, `created_at`, `updated_at`) VALUES
(98, 'Reprehenderit magnam delectus maiores.', 8, 1, 'Deserunt quis cumque ad aut doloribus unde totam.', 'Sed tempora quos impedit fuga nihil ea. Ut et iusto in ratione dolor magnam. Laboriosam nisi exercitationem accusantium velit corporis.', 'http://loremflickr.com/400/300?random=12', 'http://loremflickr.com/400/300?random=23', 'Illum eligendi cupiditate perferendis tenetur beatae natus est.', 'Sed ut itaque velit totam.', 'Qui maiores facere dolor est voluptatem natus animi.', 'Repellendus quas iure necessitatibus.', 'Soluta cumque sunt ut accusamus.', '2017-09-30 09:27:07', '2017-09-30 09:27:07'),
(99, 'Repellendus qui quas odio quia ut repellendus.', 3, 3, 'Molestiae molestiae vel repudiandae qui fuga.', 'Est eos velit aspernatur corporis nesciunt nostrum. Modi aspernatur eaque consequuntur voluptatem voluptas minima recusandae.', 'http://loremflickr.com/400/300?random=63', 'http://loremflickr.com/400/300?random=58', 'Vel et sed tempore.', 'Expedita in debitis sed eius ut.', 'Enim et impedit voluptatem pariatur.', 'Qui magni ut ipsum perferendis magnam a excepturi et.', 'Perferendis voluptatem dolor corporis amet.', '2017-09-30 09:27:07', '2017-09-30 09:27:07'),
(100, 'Ut asperiores non autem.', 4, 6, 'Voluptatum hic in nemo aut.', 'Quos expedita animi libero officiis tempora asperiores. Quos officiis id dolorum et quam. Ex illo non iure illum nesciunt dolorum magnam.', 'http://loremflickr.com/400/300?random=52', 'http://loremflickr.com/400/300?random=41', 'Officiis qui ea et molestiae blanditiis non ut.', 'Autem quasi ut et in alias maiores in nihil.', 'Earum impedit quidem et culpa possimus corrupti dicta.', 'Cupiditate voluptatibus amet architecto consequatur neque autem.', 'Facere similique in rerum.', '2017-09-30 09:27:07', '2017-09-30 09:27:07'),
(101, 'Et nostrum commodi qui debitis aut minus.', 7, 1, 'Nemo asperiores qui expedita quasi et.', 'Possimus qui velit ut eveniet expedita et eos. Rerum vel impedit aut laudantium laboriosam.', 'http://loremflickr.com/400/300?random=47', 'http://loremflickr.com/400/300?random=39', 'Molestiae aut sed qui aut natus.', 'Et tenetur voluptas rem qui.', 'Vel eligendi ipsam nihil voluptas ducimus consequuntur molestiae.', 'Sint a deleniti accusamus dolor sed recusandae asperiores.', 'Veritatis deleniti asperiores culpa dolores.', '2017-09-30 09:27:08', '2017-09-30 09:27:08'),
(102, 'Repellendus a suscipit est dolorem.', 10, 1, 'Ut eos ab ducimus consequuntur.', 'Vero odio qui et provident molestias totam. Ipsam ut sit molestiae culpa sint. Quibusdam ducimus praesentium dolores dolor quaerat dolore qui.', 'http://loremflickr.com/400/300?random=21', 'http://loremflickr.com/400/300?random=39', 'Dolor quaerat adipisci ut in aliquid ex quisquam.', 'Eos placeat ea quae.', 'Consequatur modi optio id et accusantium reiciendis.', 'Eligendi qui velit excepturi odit et.', 'Rerum modi odit alias quos quo.', '2017-09-30 09:27:08', '2017-09-30 09:27:08'),
(103, 'Consequuntur inventore consectetur animi et culpa ex.', 10, 20, 'Explicabo est quos odit sequi voluptatibus.', 'Delectus unde suscipit sint et culpa. Sit et eveniet in consequatur omnis et.', 'http://loremflickr.com/400/300?random=54', 'http://loremflickr.com/400/300?random=92', 'Est quasi excepturi consectetur rem.', 'Aut sit id est commodi quis nihil.', 'Sed rerum quo nihil eveniet eos ipsa mollitia.', 'Quia autem iste omnis doloribus aliquid et est.', 'Ipsam non non pariatur corrupti cum molestiae architecto.', '2017-09-30 09:27:08', '2017-09-30 09:27:08'),
(104, 'Fugiat animi et et commodi et qui.', 1, 10, 'Animi sapiente praesentium assumenda amet perferendis in sapiente voluptatem.', 'Quibusdam eligendi dolor alias pariatur dignissimos eligendi. Sit eligendi eaque incidunt qui voluptatem non qui. Soluta blanditiis harum suscipit quaerat.', 'http://loremflickr.com/400/300?random=68', 'http://loremflickr.com/400/300?random=64', 'Soluta voluptatum minima sed earum explicabo.', 'Et vitae numquam quibusdam.', 'Tempora ea velit doloribus et quam dolor nemo.', 'Iure eum nihil nulla aut nesciunt.', 'Molestiae consectetur sit aut a.', '2017-09-30 09:27:08', '2017-09-30 09:27:08'),
(105, 'Iste esse laboriosam facere iure nesciunt.', 1, 1, 'Nam iste debitis rerum debitis illo et sit.', 'Earum quaerat voluptas commodi sint ut enim. Hic ab quibusdam dicta.', 'http://loremflickr.com/400/300?random=53', 'http://loremflickr.com/400/300?random=33', 'Temporibus iure asperiores non occaecati quia.', 'Numquam itaque et corporis nam voluptas.', 'Quaerat voluptate reprehenderit iste ratione perspiciatis.', 'Et illo explicabo doloribus unde ea et quae.', 'Ea tempora omnis eos et.', '2017-09-30 09:27:08', '2017-09-30 09:27:08'),
(106, 'Quo aut sit atque nisi quibusdam.', 9, 15, 'Velit provident aut impedit.', 'Molestias ut quidem magnam soluta id nobis. Qui eos fuga quis cum debitis est quae.', 'http://loremflickr.com/400/300?random=68', 'http://loremflickr.com/400/300?random=93', 'Et dolorum laborum in vitae qui maiores et.', 'Debitis aut explicabo tenetur consectetur quod.', 'Error nam ut eos quia alias in.', 'Accusamus saepe quia nulla et similique.', 'Libero rerum voluptatem cum et porro earum autem.', '2017-09-30 09:27:08', '2017-09-30 09:27:08'),
(107, 'Ut aut placeat et dolore animi.', 10, 3, 'Aut aut ad iusto qui minus eius et consequatur.', 'Reiciendis quos vero enim quia. Accusamus earum ut dolorem aut.', 'http://loremflickr.com/400/300?random=100', 'http://loremflickr.com/400/300?random=11', 'Dicta qui nihil vel qui sapiente in.', 'Eos omnis dicta asperiores minima quasi.', 'Est aut reprehenderit consequatur repudiandae voluptas omnis.', 'Suscipit quis aut vel doloribus ab.', 'Sed quos consequatur eius quas quidem recusandae enim.', '2017-09-30 09:27:08', '2017-09-30 09:27:08'),
(108, 'Omnis beatae debitis et aut.', 4, 17, 'Adipisci quam dolorem aut veritatis officiis nihil.', 'Suscipit laudantium quia itaque et. Enim deleniti soluta et quia modi sequi placeat.', 'http://loremflickr.com/400/300?random=79', 'http://loremflickr.com/400/300?random=11', 'Dolor tempora corporis ut voluptatem ea.', 'Et et vero vero est dolore.', 'Eaque consequatur et veritatis facilis ea velit unde.', 'Corporis temporibus sit vel exercitationem.', 'Maiores vero praesentium numquam voluptatem ex distinctio.', '2017-09-30 09:27:08', '2017-09-30 09:27:08'),
(109, 'Dolorem quibusdam qui atque.', 10, 13, 'Numquam unde maiores doloremque aliquam.', 'Vitae velit eligendi qui autem. Nulla quibusdam consequatur consectetur consequatur fugiat enim quis.', 'http://loremflickr.com/400/300?random=61', 'http://loremflickr.com/400/300?random=39', 'Enim laborum magni unde accusamus doloribus sed vel.', 'Ipsa fuga nesciunt quidem aut.', 'Quisquam consectetur officiis accusantium et itaque laborum asperiores.', 'Laboriosam ad expedita maiores consequatur.', 'Nemo quia laudantium est qui ut.', '2017-09-30 09:27:08', '2017-09-30 09:27:08'),
(110, 'Voluptas ut temporibus laudantium consequatur et est.', 10, 13, 'Et qui provident iure reiciendis.', 'Explicabo veritatis et et qui quae quia. Numquam quae rerum aut quidem quaerat.', 'http://loremflickr.com/400/300?random=79', 'http://loremflickr.com/400/300?random=45', 'Voluptate nam numquam porro nam voluptate vitae eveniet dicta.', 'Totam animi quam tempore.', 'Earum quam et voluptatem rerum consequatur rerum.', 'Facilis dicta atque sunt dolore fuga repellendus vel.', 'Et ipsa provident aut fuga ducimus consequatur id.', '2017-09-30 09:27:08', '2017-09-30 09:27:08'),
(111, 'Ut ullam cum vero voluptatem quos quam sapiente.', 10, 5, 'Eligendi sunt vel dolorem illum doloremque rem.', 'Ut doloribus est voluptatem sit. Eveniet et sunt laborum nam qui labore aut.', 'http://loremflickr.com/400/300?random=18', 'http://loremflickr.com/400/300?random=59', 'Dolores id consequatur corrupti inventore asperiores numquam dolor.', 'Ut voluptate dolorem aspernatur.', 'Dolorem sint aperiam illo eligendi et architecto enim.', 'Reiciendis consequatur dolor enim quaerat dolores.', 'Ut sapiente ad ipsam molestiae.', '2017-09-30 09:27:08', '2017-09-30 09:27:08'),
(112, 'Corporis magni sit nemo.', 6, 19, 'Et praesentium reprehenderit nam explicabo tenetur.', 'Iusto blanditiis vel est vel. Ad et dolorem consequatur nemo officiis.', 'http://loremflickr.com/400/300?random=71', 'http://loremflickr.com/400/300?random=62', 'Adipisci et corporis est dolore et quis libero.', 'Id quia placeat aperiam quasi.', 'Hic velit rerum earum et neque quis.', 'Tempora optio nobis aliquid sequi ad.', 'Adipisci fugit repellendus qui repudiandae.', '2017-09-30 09:27:08', '2017-09-30 09:27:08'),
(113, 'Sunt similique esse omnis et minima porro maiores.', 9, 19, 'In rerum saepe quasi nihil sit sed facilis.', 'Et fugit odio aspernatur quia quas eveniet. Quidem impedit nesciunt tempore qui.', 'http://loremflickr.com/400/300?random=86', 'http://loremflickr.com/400/300?random=83', 'Cum in deserunt earum est debitis repudiandae nihil sunt.', 'Vero explicabo numquam deserunt est et cupiditate nobis.', 'Cum perspiciatis cum qui.', 'Eaque et sit blanditiis facilis.', 'Consequuntur ad odio deleniti ipsa.', '2017-09-30 09:27:08', '2017-09-30 09:27:08'),
(114, 'Labore sit sit omnis at eos.', 2, 9, 'Quia delectus iure eum voluptatem eos voluptatem.', 'Ut fugit exercitationem quos sed porro. Velit rerum consequatur aut quia. Dolores ratione velit quis voluptas aspernatur est.', 'http://loremflickr.com/400/300?random=84', 'http://loremflickr.com/400/300?random=48', 'Vero odit voluptatibus autem fugit est beatae.', 'Ea qui adipisci illo et.', 'Dolorem itaque vero sit nam facere.', 'Facere dolores dolor optio fugiat quam ducimus ad aut.', 'Iusto quis aut ut qui ut et quisquam.', '2017-09-30 09:27:08', '2017-09-30 09:27:08'),
(115, 'Ut voluptatem sit voluptas corrupti.', 6, 3, 'Numquam provident sed deleniti aliquam aut et sed.', 'Totam eum aut accusantium perferendis similique. Quo deserunt dolorum in praesentium dolorem repudiandae et.', 'http://loremflickr.com/400/300?random=40', 'http://loremflickr.com/400/300?random=35', 'Blanditiis ex eveniet quis enim autem.', 'Inventore laborum dolores rerum voluptates ea velit.', 'Laborum eveniet quaerat unde exercitationem suscipit labore qui itaque.', 'Voluptas a autem ad ratione.', 'Et voluptatibus reprehenderit delectus minima sit animi saepe.', '2017-09-30 09:27:08', '2017-09-30 09:27:08'),
(116, 'Consequatur dolor mollitia necessitatibus quibusdam ut doloribus animi nemo.', 9, 3, 'Maxime animi quidem quibusdam aut occaecati.', 'Molestiae ipsum aut architecto voluptatibus harum quas. Dolore officia amet sit earum ut odio.', 'http://loremflickr.com/400/300?random=88', 'http://loremflickr.com/400/300?random=86', 'Laborum eaque omnis aut repellat aut delectus.', 'Dolorem amet aspernatur voluptates vel distinctio.', 'Blanditiis nihil omnis sunt.', 'Ea qui dolores animi dignissimos vitae.', 'Voluptatem delectus praesentium esse necessitatibus.', '2017-09-30 09:27:08', '2017-09-30 09:27:08'),
(117, 'Eaque impedit maiores accusamus dolorum.', 7, 18, 'Rem accusantium enim eveniet rem a.', 'Vel magni laudantium aperiam. Sunt aliquid voluptas molestiae saepe at.', 'http://loremflickr.com/400/300?random=73', 'http://loremflickr.com/400/300?random=8', 'Vitae aut necessitatibus odit vel officia illum.', 'Velit praesentium nam error non laborum.', 'Nobis impedit facere adipisci ab accusamus dolor.', 'Eaque neque soluta quis.', 'Alias velit quo est sed labore.', '2017-09-30 09:27:08', '2017-09-30 09:27:08'),
(118, 'Sequi dolor natus et optio esse.', 3, 1, 'Et dolor minima natus ut et dolor praesentium.', 'Sint sunt qui voluptatem accusamus. Sequi dolores aut eos quas libero rerum. Et sed vel enim magnam aut.', 'http://loremflickr.com/400/300?random=25', 'http://loremflickr.com/400/300?random=27', 'Sit modi voluptatibus sit.', 'Placeat eum nihil aut voluptatem eaque animi.', 'Iusto doloremque dolores similique laboriosam.', 'Non ullam sequi rerum.', 'Neque rem voluptatum minima sint amet.', '2017-09-30 09:27:09', '2017-09-30 09:27:09'),
(119, 'News Photo1', 11, 14, 'news photo 1', 'news photo 1', '2.jpeg', '', '', '', '', '', '', '2017-10-02 09:33:09', '2017-10-02 09:35:43'),
(120, 'News Photo 2', 11, 14, 'News Photo 2', 'News Photo 2', '1.jpeg', '', '', '', '', '', '', '2017-10-02 09:35:34', '2017-10-02 09:35:34'),
(121, 'Activity Photo 1', 11, 15, 'Activity Photo 1', 'Activity Photo 1', '3.jpeg', '', '', '', '', '', '', '2017-10-02 09:36:17', '2017-10-02 09:36:17'),
(122, 'Activity Photo 2', 11, 15, 'Activity Photo 2', 'Activity Photo 2', '4.jpeg', '', '', '', '', '', '', '2017-10-02 09:36:38', '2017-10-02 09:36:38'),
(123, 'Myanmar', 16, 18, '', '', '', '', 'Value 1', '', '', '', '', '2017-10-03 10:20:50', '2017-10-03 10:20:50'),
(124, 'English', 16, 18, '', '', '', '', 'Value 1', '', '', '', '', '2017-10-03 10:21:09', '2017-10-03 10:28:12'),
(125, 'Myanmar 9', 16, 19, '', '', '', '', 'Value 1', '', '', '', '', '2017-10-03 10:21:39', '2017-10-03 10:21:39'),
(126, 'English 9', 16, 19, '', '', '', '', 'Value 2', '', '', '', '', '2017-10-03 10:21:59', '2017-10-03 10:21:59'),
(127, 'တနလၤာ', 17, 21, '', '', '', '', 'Math', 'Myanmar', 'Chem', 'Phy', 'Bio', '2017-10-03 10:46:28', '2017-10-03 10:46:28'),
(128, 'အင္ဂါ', 17, 21, '', '', '', '', 'Math', 'Myanmar', 'English', 'Phy', 'Bio', '2017-10-03 10:50:03', '2017-10-03 10:50:03'),
(129, 'monday', 17, 22, '', '', '', '', 'Myan', 'Eng', 'Bio', 'Chem', 'Maths', '2017-10-03 10:52:17', '2017-10-03 10:52:17'),
(130, 'မေဟာ္သဓာ ကိုယ္ပုိင္အထက္တန္းေက်ာင္း', 23, 25, '"ေပ်ာ္ေအာင္လည္းေန ေတာ္ေအာင္လည္းၾကိဳးစား မေဟာ္သဓာေက်ာင္းသား"\r\nYou can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files. For more CSS templates visit Free Website Templates.', '"ေပ်ာ္ေအာင္လည္းေန ေတာ္ေအာင္လည္းၾကိဳးစား မေဟာ္သဓာေက်ာင္းသား"\r\nYou can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files. For more CSS templates visit Free Website Templates.', '10.jpeg', '', '', '', '', '', '', '2017-10-04 10:19:43', '2017-10-04 10:19:43'),
(131, '၈ - ၉ - ၁၀ သင္တန္းမ်ားလက္ခံသင္ၾကားေပးပါသည္', 23, 25, 'aa', 'Etiam euismod porttitor diam, eget tristique lacus eleifend tincidunt. In hac habitasse platea dictumst.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nDonec at nunc nec lectus viverra pretium sit amet a orci.\r\nPraesent ac felis non magna accumsan accumsan.\r\nVivamus non est nunc, non pulvinar libero.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et sapien id quam sodales tincidunt. Cras facilisis mi eu nibh ultricies sed malesuada metus varius.', '', '', '', '', '', '', '', '2017-10-04 10:20:25', '2017-10-04 10:20:25'),
(132, 's1', 23, 24, 's1', 's1', '2.jpeg', '', '', '', '', '', '', '2017-10-04 10:42:12', '2017-10-04 10:49:51'),
(133, 's2', 23, 24, 's2', 's2', '1.jpeg', '', '', '', '', '', '', '2017-10-04 10:42:38', '2017-10-04 10:42:38'),
(134, 'HHA', 9, 10, '', 'dfdf', '2.jpeg', '', 'HHA', 'heinhtetaung.sglife@gmail.com', 'lmd', '0912212', '12/12/2016', '2017-10-06 21:42:11', '2017-10-06 21:42:11'),
(135, 'hha', 9, 10, '', 'dfefer', '1.png', '', 'HHein', 'heinhtetaung.sglife@gmail.com', '121', '2332323', '2017-10-05', '2017-10-06 21:57:28', '2017-10-06 21:57:28'),
(136, 'erer', 9, 10, 'aaa', '12212', '', '', 'dfd', 'heinhtetaung.sglife@gmail.com', 'ddfdf', '1212', '2017-10-09', '2017-10-06 22:27:07', '2017-10-06 22:41:10'),
(137, 'hhha', 9, 10, '', 'detail', 'activity01.jpg', '', 'HHA', 'heinhtetaung.sglife@gmail.com', 'lmd', '091212', '2017-10-16', '2017-10-07 07:26:56', '2017-10-07 07:26:56');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;
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
