-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2024 at 09:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurantdb1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `table_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `totalprice` float DEFAULT NULL,
  `isPaid` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `table_id`, `order_id`, `totalprice`, `isPaid`) VALUES
(1, 1, 5, 1001, 0),
(2, 2, 6, 8082, 0),
(3, 8, 7, 667, 0),
(4, 1, 9, 1823, 0),
(5, 3, 10, 3872, 0),
(6, 5, 11, 821, 0),
(7, 6, 12, 267, 0),
(8, 6, 13, 267, 0),
(9, 6, 14, 267, 0),
(11, 6, 17, 243, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'อาหารทานเล่น'),
(2, 'อาหารจานหลัก'),
(3, 'เครื่องดื่ม/ของหวาน');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `firstname` varchar(125) DEFAULT NULL,
  `lastname` varchar(125) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `roles` enum('manager','cashier','chef','waiter') DEFAULT NULL,
  `createdAt` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `firstname`, `lastname`, `phone`, `roles`, `createdAt`) VALUES
(1, 'Reilly', 'Gleichner', '(352) 986-4936', 'manager', '1975-05-21'),
(2, 'Leon', 'Wiza', '1-678-842-8159', 'manager', '1982-05-02'),
(3, 'Oswaldo', 'Bahringer', '+1.901.244.9488', 'cashier', '2016-08-19'),
(4, 'Reuben', 'Cummerata', '283-256-1495', 'chef', '1982-02-10'),
(5, 'Vivien', 'Larkin', '941-631-5307', 'chef', '1999-04-12'),
(6, 'Sallie', 'Mertz', '1-563-902-9331', 'manager', '1986-02-13'),
(7, 'Clovis', 'Dach', '323.351.4781', 'waiter', '1993-10-08'),
(8, 'Meaghan', 'Homenick', '757.779.8091', 'cashier', '1993-08-15'),
(9, 'Madonna', 'Pouros', '607-942-6462', 'manager', '2002-11-29'),
(10, 'Jammie', 'Wiegand', '+1-279-443-0732', 'chef', '2008-06-04'),
(11, 'Bernie', 'Larkin', '+1-863-299-0939', 'manager', '1991-09-05'),
(12, 'Madeline', 'Breitenberg', '+1-947-285-3734', 'cashier', '1988-05-12'),
(13, 'Jamarcus', 'Bernier', '1-820-613-1119', 'chef', '2010-09-07'),
(14, 'Gudrun', 'Quigley', '1-732-671-7593', 'cashier', '1976-09-06'),
(15, 'Providenci', 'Hermann', '+16693827008', 'waiter', '1971-08-06'),
(16, 'Alexandra', 'Hudson', '+16573866555', 'waiter', '2008-05-12'),
(17, 'Domenic', 'Weissnat', '+15715572521', 'manager', '1988-09-07'),
(18, 'Kaylee', 'Langosh', '+1-458-245-0326', 'manager', '1972-08-16'),
(19, 'Jovan', 'Anderson', '682-840-9522', 'cashier', '1987-10-31'),
(20, 'Bella', 'Haley', '+1.802.221.5364', 'cashier', '2019-05-13'),
(21, 'Alanis', 'Mante', '480-580-9172', 'chef', '2004-11-16'),
(22, 'Nya', 'Swift', '1-856-983-6361', 'cashier', '1975-01-05'),
(23, 'Lavern', 'Swaniawski', '1-816-538-3179', 'waiter', '1974-04-07'),
(24, 'Lyla', 'Crooks', '(843) 826-0932', 'cashier', '2003-04-29'),
(25, 'Paxton', 'Lowe', '731.561.8255', 'waiter', '1998-09-10'),
(26, 'Zelda', 'Rolfson', '+1-860-605-7072', 'waiter', '2023-03-21'),
(27, 'Claudie', 'Quitzon', '630-987-2373', 'waiter', '1997-06-28'),
(28, 'Tod', 'Waters', '341.763.8917', 'cashier', '2010-12-11'),
(29, 'Vincenzo', 'Zboncak', '+1 (934) 763-0060', 'chef', '2016-06-29'),
(30, 'Melody', 'McLaughlin', '+1.760.650.7211', 'chef', '1995-05-12'),
(31, 'Cleveland', 'Parker', '+1-435-715-1941', 'cashier', '2020-04-23'),
(32, 'Craig', 'Treutel', '936-258-2722', 'waiter', '2008-11-03'),
(33, 'Aric', 'Heathcote', '+1-820-400-2476', 'manager', '2000-08-16'),
(34, 'Zelma', 'Hills', '574-352-4487', 'chef', '2017-11-10'),
(35, 'Melyna', 'Maggio', '(678) 387-0949', 'waiter', '1975-06-23'),
(36, 'Ayden', 'Quigley', '+1-458-405-4695', 'waiter', '1989-04-22'),
(37, 'Brown', 'Parisian', '1-346-252-8904', 'manager', '2013-12-12'),
(38, 'Emelia', 'Kihn', '+1 (707) 237-0652', 'chef', '2016-01-22'),
(40, 'Evans', 'Kassulke', '+17575123265', 'waiter', '1996-06-14'),
(41, 'Chinatip', 'Wu', '1234567890', 'manager', '2024-03-01'),
(42, 'Chinjung', 'KhodLhor', '1111111111', 'manager', '2024-03-04');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(75) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `menu_img` blob DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `types` enum('เมนูเส้น','ข้าว/อื่นๆ','สเต็ก','กาแฟ/ชา','ไวน์','ของหวาน','อื่นๆ') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `price`, `menu_img`, `detail`, `category_id`, `types`) VALUES
(1, 'Lyda Crist', 243, 0x68747470733a2f2f7669612e706c616365686f6c6465722e636f6d2f333630783336302e706e672f4343434343433f746578743d666f6f64732b4974616c69616e2b6163637573616d7573, 'Illo ex expedita reiciendis aut nulla eligendi aliquid. Quibusdam quis corrupti dolores repellat numquam. Qui maxime quia tempore qui est.', 1, NULL),
(2, 'Karlie', 128, 0x68747470733a2f2f7669612e706c616365686f6c6465722e636f6d2f333630783336302e706e672f4343434343433f746578743d666f6f64732b4974616c69616e2b6173706572696f726573, 'Illum inventore est cum architecto perspiciatis illum. Cum mollitia tenetur voluptatem voluptatibus. Eaque est aperiam consequuntur maiores fugiat.', 2, 'เมนูเส้น'),
(4, 'Erin Krajcik', 199, 0x68747470733a2f2f7669612e706c616365686f6c6465722e636f6d2f333630783336302e706e672f4343434343433f746578743d666f6f64732b4974616c69616e2b736564, 'Quas quia id harum quisquam ea. Ipsa eveniet et qui porro. Qui nisi et dicta eos animi voluptatem.', 2, 'กาแฟ/ชา'),
(5, 'Erin Krajcik', 113, 0x68747470733a2f2f7669612e706c616365686f6c6465722e636f6d2f333630783336302e706e672f4343434343433f746578743d666f6f64732b4974616c69616e2b6561, 'Rerum aut eveniet qui. Aut maiores quia accusantium quod nesciunt occaecati at.', 2, 'สเต็ก'),
(7, 'Erin Krajcik', 278, 0x68747470733a2f2f7669612e706c616365686f6c6465722e636f6d2f333630783336302e706e672f4343434343433f746578743d666f6f64732b4974616c69616e2b6469676e697373696d6f73, 'Repellat omnis explicabo et sed sint magnam amet possimus. Sint adipisci natus impedit quos. Possimus voluptatum qui aliquam quo est voluptatem. Quod omnis possimus quasi sapiente quia.', 2, 'ของหวาน'),
(8, 'Erin Krajcik', 282, 0x68747470733a2f2f7669612e706c616365686f6c6465722e636f6d2f333630783336302e706e672f4343434343433f746578743d666f6f64732b4974616c69616e2b636f6e73657175756e747572, 'Tempore odio neque natus in qui optio cumque. Enim quam vel qui. Esse nihil porro quaerat deserunt mollitia cum tenetur. Magnam rerum dolores tempora eos reiciendis quis.', 3, 'ของหวาน'),
(10, 'Mikayla', 68, 0x68747470733a2f2f7669612e706c616365686f6c6465722e636f6d2f333630783336302e706e672f4343434343433f746578743d666f6f64732b4974616c69616e2b71756973, 'Quis voluptas in nihil veritatis consequatur eum nesciunt. Iste voluptatibus sit aperiam aut. Velit aut eum repudiandae. Nostrum delectus qui nam reprehenderit alias incidunt rerum.', 2, 'เมนูเส้น'),
(11, 'Gavin', 265, 0x68747470733a2f2f7669612e706c616365686f6c6465722e636f6d2f333630783336302e706e672f4343434343433f746578743d666f6f64732b4974616c69616e2b64656269746973, 'Et dolor voluptates distinctio praesentium. Sed molestiae qui rerum est eos quis pariatur omnis.', 2, 'ข้าว/อื่นๆ'),
(12, 'Zack', 267, 0x68747470733a2f2f7669612e706c616365686f6c6465722e636f6d2f333630783336302e706e672f4343434343433f746578743d666f6f64732b4974616c69616e2b6163637573616e7469756d, 'Aut quo facilis sint dolor. Ut est consectetur suscipit molestiae enim. Laudantium dignissimos asperiores sit vel. Labore asperiores distinctio dignissimos enim laborum.', 1, 'ข้าว/อื่นๆ'),
(14, 'Audra', 311, 0x68747470733a2f2f7669612e706c616365686f6c6465722e636f6d2f333630783336302e706e672f4343434343433f746578743d666f6f64732b4974616c69616e2b696c6c756d, 'Et voluptate qui sint suscipit quia et. Libero et consequatur ea rerum. Pariatur nihil sequi beatae vero. Totam tempora veniam ab inventore non assumenda.', 1, 'กาแฟ/ชา'),
(15, 'Zack', 265, 0x68747470733a2f2f7669612e706c616365686f6c6465722e636f6d2f333630783336302e706e672f4343434343433f746578743d666f6f64732b4974616c69616e2b6163637573616e7469756d, 'Aut quo facilis sint dolor. Ut est consectetur suscipit molestiae enim. Laudantium dignissimos asperiores sit vel. Labore asperiores distinctio dignissimos enim laborum.', 1, NULL),
(16, 'หมูหัน', 200, 0x68747470733a2f2f7777772e72796f69697265766965772e636f6d2f75706c6f61642f61727469636c652f3230313930322f313535313235343438365f66643031646264663762333635386632366633386433383735373562343936662e6a7067, 'โคตรอร่อย', 2, 'ข้าว/อื่นๆ');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `table_id` int(11) NOT NULL,
  `order_time` datetime DEFAULT NULL,
  `status` enum('pending','complete','cooking','serving') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `table_id`, `order_time`, `status`) VALUES
(4, 1, '2024-03-04 11:18:47', 'complete'),
(5, 1, '2024-03-04 11:23:00', 'complete'),
(6, 2, '2024-03-04 13:26:46', 'complete'),
(7, 8, '2024-03-04 14:34:45', 'serving'),
(9, 1, '2024-03-04 17:07:04', 'serving'),
(10, 3, '2024-03-05 18:43:33', 'cooking'),
(11, 5, '2024-03-05 19:00:25', 'cooking'),
(12, 6, '2024-03-05 19:02:08', 'pending'),
(13, 6, '2024-03-05 19:03:16', 'pending'),
(14, 6, '2024-03-05 19:03:58', 'pending'),
(16, 1, '2024-03-05 20:49:41', 'pending'),
(17, 6, '2024-03-05 20:50:10', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `order_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `order_status` enum('in-queue','in-process','serving','done') DEFAULT NULL,
  `orderdetails_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`order_id`, `menu_id`, `quantity`, `order_status`, `orderdetails_id`) VALUES
(4, 14, 3, 'done', 1),
(4, 10, 1, 'done', 2),
(5, 14, 3, 'done', 3),
(5, 10, 1, 'done', 4),
(6, 16, 10, 'done', 5),
(6, 14, 17, 'done', 6),
(6, 11, 3, 'done', 7),
(7, 16, 2, 'serving', 8),
(7, 12, 1, 'serving', 9),
(9, 7, 1, 'in-process', 10),
(9, 10, 9, 'in-process', 11),
(9, 14, 3, 'in-process', 12),
(10, 12, 8, 'in-process', 13),
(10, 10, 2, 'in-process', 14),
(10, 16, 8, 'in-process', 15),
(11, 1, 1, 'in-process', 16),
(11, 14, 1, 'in-process', 17),
(11, 12, 1, 'in-process', 18),
(12, 12, 1, 'in-process', 19),
(13, 12, 1, 'in-process', 20),
(14, 12, 1, 'in-process', 21),
(17, 1, 1, 'in-queue', 24);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reserveid` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `people_num` int(11) NOT NULL,
  `phonenum` varchar(20) NOT NULL,
  `time` time NOT NULL,
  `end_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reserveid`, `name`, `people_num`, `phonenum`, `time`, `end_time`) VALUES
(1, 'chinatip wu', 22, '1234567890', '00:26:00', '00:41:00'),
(2, 'Prof. Berniece Bechtelar', 9, '(231) 572-4358', '22:19:54', '22:34:54'),
(3, 'Dr. Valentin Kerluke Jr.', 7, '1-352-294-0437', '13:46:47', '14:01:47'),
(4, 'Miss Freeda Stokes III', 10, '+1-617-730-5885', '22:17:48', '22:32:48'),
(5, 'Lawrence Renner', 8, '623-652-4012', '16:52:38', '17:07:38'),
(6, 'Joshua Bogan', 2, '+1-856-922-7392', '04:39:45', '04:54:45'),
(7, 'Katelyn Sanford', 7, '1-440-994-7706', '07:49:14', '08:04:14'),
(8, 'Mrs. Delia Marks', 8, '1-256-578-3506', '12:08:20', '12:23:20'),
(9, 'Miss Eveline West II', 6, '828.474.5921', '14:57:56', '15:12:56'),
(10, 'Prof. Caleigh Simonis', 9, '1-562-777-7656', '17:23:52', '17:38:52'),
(11, 'Candace Mueller', 10, '(475) 471-4770', '15:27:43', '15:42:43'),
(12, 'Miss Robyn Pouros DDS', 10, '+15705010192', '23:00:13', '23:15:13'),
(13, 'Mrs. Zella Hoppe', 6, '1-252-790-9728', '15:42:50', '15:57:50'),
(14, 'Delbert Wehner', 10, '+1-520-267-9980', '08:38:58', '08:53:58'),
(15, 'Ms. Genesis Herzog', 7, '231-439-5361', '09:00:08', '09:15:08'),
(16, 'Prof. Laron Muller', 7, '1-971-369-8817', '20:54:22', '21:09:22'),
(17, 'Mr. Hunter Will V', 5, '1-651-753-0509', '06:35:33', '06:50:33'),
(18, 'Sofia Mayer DDS', 2, '+14244847624', '08:23:37', '08:38:37'),
(19, 'Lina Nitzsche', 5, '228-804-3441', '13:53:51', '14:08:51'),
(20, 'Lenna Jerde', 9, '+1-848-532-3978', '03:11:56', '03:26:56'),
(21, 'Prof. Carson Hamill PhD', 3, '1-786-822-3656', '21:07:15', '21:22:15'),
(22, 'Mrs. Catherine Rice', 6, '304.886.8123', '19:21:56', '19:36:56'),
(23, 'Ludwig Dooley', 9, '(743) 925-1501', '07:44:12', '07:59:12'),
(24, 'German Bernhard', 9, '1-419-274-2710', '07:44:49', '07:59:49'),
(25, 'Dr. Darion Eichmann', 5, '951-590-5591', '08:21:17', '08:36:17');

-- --------------------------------------------------------

--
-- Table structure for table `table`
--

CREATE TABLE `table` (
  `table_id` int(11) NOT NULL,
  `isIdle` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table`
--

INSERT INTO `table` (`table_id`, `isIdle`) VALUES
(1, 0),
(2, 0),
(3, 0),
(4, 0),
(5, 0),
(6, 0),
(7, 0),
(8, 0),
(9, 0),
(10, 0),
(11, 0),
(12, 0),
(13, 0),
(14, 0),
(15, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `roles` enum('manager','chef','waiter','cashier') NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `roles`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Manager', 'manager@gmail.com', NULL, '$2y$12$Nt7FV4DQrRbT6JQay.U7UejTD/5.hEjuozuX67xWsVTD1fXgxqbp.', 'manager', 'pGCapKadFb9gbB8zqTYNCQjyagV8nzkTDj6Sn4xIhP5dIh3wPT2VYZzW3G0f', '2024-02-22 00:01:46', '2024-02-22 00:01:46'),
(2, 'Chef', 'chef@gmail.com', NULL, '$2y$12$qF3XR6OpXfMpD4YLmsk5Fu2M/PKZ17ieVY9LSHHSlZSpzF3O1sryy', 'chef', NULL, '2024-02-22 03:39:54', '2024-02-22 03:39:54'),
(3, 'Waiter', 'waiter@gmail.com', NULL, '$2y$12$XeHoT/5UAGWVEF62scfUxefaU1OGTOE3UmiWfCT3HqNxp2wmtT0hW', 'waiter', NULL, '2024-02-22 06:43:43', '2024-02-22 06:43:43'),
(4, 'Cashier', 'cashier@gmail.com', NULL, '$2y$12$lEg2UH./1q3JACa6nE/Yre/fZOx1q7TnTS2ZTi5.GSpswxE80P7Ky', 'cashier', NULL, '2024-02-22 06:50:35', '2024-02-22 06:50:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `table_id` (`table_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `AI` (`employee_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `table_id` (`table_id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`orderdetails_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reserveid`);

--
-- Indexes for table `table`
--
ALTER TABLE `table`
  ADD PRIMARY KEY (`table_id`);

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
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `orderdetails_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reserveid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`table_id`) REFERENCES `table` (`table_id`),
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`);

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`table_id`) REFERENCES `table` (`table_id`);

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`),
  ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`menu_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
