-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2022 at 12:08 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `category_id`, `title`, `image`, `description`, `author_name`, `tag`, `created_at`, `deleted_at`) VALUES
(3, '3', 'grilled shrimp skewers', '16570554951000.jpg', 'Grilled shrimp skewers, flavored and marinated with garlic, honey, and spices, these shrimp skewers can be premade early so that grilling and serving them can be done quickly. A weekend meal with your family outside your patio, while these shrimp skewers ', 'Md. Ariful Islam', 'yummy foods', '2022-07-05 21:11:35', '2022-07-05 21:11:35'),
(4, '4', 'pan seared salmon.', '16570558631000.jpg', 'A step-by-step guide on how to cook perfectly pan-seared salmon for a quick but healthy dinner or lunch. Using just 3 main ingredients this pan-seared salmon recipe will teach you, How to cook restaurant-style pan-seared salmon with flaky salmon and extra', 'Md. Ariful Islam', 'yummy fish', '2022-07-05 21:17:43', '2022-07-05 21:17:43'),
(5, '5', 'Vegan Chicken-Style Stew, or Hail the Almighty Seitan.', '1657056770999.jpg', 'Vegan Chicken-Style Stew, or Hail the Almighty Seitan\r\nMarch 21, 2022, by Hayley\r\n\r\nIt’s the first days of spring, so naturally, the nights are still below freezing and I’m not ready to give up my wintry comfort foods just yet. I threw this together for d', 'Md. Ariful Islam', 'Tasty Eggs', '2022-07-05 21:32:50', '2022-07-05 21:32:50'),
(6, '6', 'Beef. It’s What’s For Dinner. Celebrates the Fourth of July with Savory Steak Recipes', '1658486375999.jpg', 'Our beef is 100% pasture raised and our cattle are on the grass at all times. We have a multi-pasture ranch with lush grasses, more than enough room to graze, and each pasture has plenty of shade, fresh water provided, and at least one lake or pond for ac', 'Md. Mifta', 'Tasty Beef, Awesome Beef, Just Wow Beef', '2022-07-22 10:39:35', '2022-07-22 10:39:35'),
(7, '7', 'Lear more about live crawfish', '16584870551000.jpg', 'The crawfish are freshwater crustaceans, and they’re known by different names, the most common are crayfish, mudbugs, ditch bugs, crawdads, and freshwater lobster.\r\n\r\nWhat about the health benefits of crawfish?\r\nThe crayfish is a low-calorie and low-fat g', 'Md. Sajedul Sakib', 'Favorite Crawfish, Tasty Shrimp.', '2022-07-22 10:50:55', '2022-07-22 10:50:55'),
(8, '8', 'The Berries Information.', '16584877991000.jpg', 'I’m going, to be honest, I’ve had a waffle maker for YEARS. Well, it’s one of those multi-tools, I mainly bought it for the sandwich maker part. But it has plates for waffles, maybe I was scared to use it? Anyway, I’ve gotten over the fear and created a w', 'Md. Jahidul Rony', 'Clean Berries, Fresh Berries', '2022-07-22 11:03:19', '2022-07-22 11:03:19'),
(9, '9', 'Chicken as food', '1658587545999.jpg', 'The chicken is a domesticated junglefowl species, with attributes of wild species such as the grey and the Ceylon junglefowl that are originally from Southeastern Asia. Rooster or cock is a term for an adult male bird, and a younger male may be called a c', 'Md. Ariful Islam', 'yummy foods, Chicken Meat.', '2022-07-23 14:45:45', '2022-07-23 14:45:45'),
(10, '10', 'Quality of Chicken Meat', '16585880031000.jpg', 'Chicken meat is appropriate for a quick and simple preparation, yet it offers a variety of combinations with different foodstuffs, thus making itself a usual choice of consumers faced with the modern lifestyle. When compared to other types of meat (Table ', 'Md. Ariful Islam', 'Lovely Chicken, Fry Chicken.', '2022-07-23 14:53:23', '2022-07-23 14:53:23'),
(12, '12', 'Seafood Paella', '1658613840999.jpg', 'Paella originated in Valencia, Spain as a one-pan peasant dish made with a little bit of everything that was on hand. Fresh seafood, saffron, and earthy paprika are the key ingredients in this traditional Spanish dish.', 'Md. Ariful Islam', 'Tasty Fish, Fresh Fish', '2022-07-23 22:04:00', '2022-07-23 22:04:00');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `category`, `name`, `created_at`, `deleted_at`) VALUES
(3, 'The Sea Foods', 'grilled shrimp skewers', '2022-07-05 21:04:17', '2022-07-05 21:04:17'),
(4, 'Ocean Foods', 'pan seared salmon.', '2022-07-05 21:13:47', '2022-07-05 21:13:47'),
(5, 'Butter & Eggs', 'Vegan Chicken-Style Stew.', '2022-07-05 21:28:54', '2022-07-05 21:28:54'),
(6, 'Fresh Meat', 'The Beef', '2022-07-22 10:27:26', '2022-07-22 10:27:26'),
(7, 'Ocean Foods', 'The Shrimp', '2022-07-22 10:41:51', '2022-07-22 10:41:51'),
(8, 'Fresh Berries', 'The Tasty Berries', '2022-07-22 10:54:19', '2022-07-22 10:54:19'),
(9, 'Inland Chicken', 'Chicken Info', '2022-07-23 14:40:37', '2022-07-23 14:40:37'),
(10, 'Fresh Meat', 'Inland Chickens', '2022-07-23 14:49:23', '2022-07-23 14:49:23'),
(12, 'Ocean Foods', 'Fresh Fish', '2022-07-23 21:59:26', '2022-07-23 21:59:26');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` int(11) NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `validity` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`id`, `coupon_code`, `discount`, `validity`, `created_at`, `deleted_at`) VALUES
(4, 'EID2022', '5.00', '2022-07-31', '2022-07-05 04:10:35', '2022-07-05 04:10:35'),
(5, 'EID200', '50.00', '2022-07-27', '2022-07-05 21:20:03', '2022-07-05 21:20:03'),
(6, 'FRIDAY', '30.00', '2022-07-30', '2022-07-22 08:43:30', '2022-07-22 08:43:30'),
(7, 'WEEKLY2022', '15.00', '2022-07-27', '2022-07-22 14:47:49', '2022-07-22 14:47:49');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `customer_id`, `customer_name`, `email`, `password`, `contact_number`, `address`, `created_at`) VALUES
(4, 1, 'arif', 'hmarif.nazir@gmail.com', '6116afedcb0bc31083935c1c262ff4c9', '01858380030', 'satkania.', '2022-07-23 07:45:56'),
(7, 2, 'kamal', 'kamal@gmail.com', '6116afedcb0bc31083935c1c262ff4c9', '01858380030', 'dhaka', '2022-07-23 08:31:05'),
(8, 3, 'jamal', 'jamal@gmail.com', '6116afedcb0bc31083935c1c262ff4c9', '01858380039', 'ctg', '2022-07-23 08:33:16'),
(9, 0, 'Md Ariful Islam', 'hmarif.nazir@gmail.com', '', '', '38 No Chanmari road, Lalkhan bazar,  Chattagram.\r\n', '2022-07-23 20:18:14');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `shipping_address` text DEFAULT NULL,
  `town` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `order_note` text DEFAULT NULL,
  `total_quantity` int(255) NOT NULL DEFAULT 0,
  `sub_amount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `discount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `coupon_discount` decimal(10,2) DEFAULT 0.00,
  `coupon_code` varchar(255) DEFAULT NULL,
  `total_amount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `order_data` text NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT 0 COMMENT '1 -> pending, 2->processing, 3->shipped, 4->delivered, 5->canceled',
  `payment_status` int(11) NOT NULL DEFAULT 0,
  `cancel_reason` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `customer_id`, `full_name`, `address`, `shipping_address`, `town`, `phone`, `email`, `order_note`, `total_quantity`, `sub_amount`, `discount`, `coupon_discount`, `coupon_code`, `total_amount`, `order_data`, `order_status`, `payment_status`, `cancel_reason`, `created_at`, `deleted_at`) VALUES
(1, 2, 'arif', '', '', 'Chattogram', '01858380039', 'hmarif.nazir@gmail.com', 'ksadf', 2, '1500.00', '70.00', '0.00', '', '1430.00', 'eyJkYXRhIjp7IjEwIjp7ImNpZCI6IjEwIiwicXR5IjoxLCJwcmljZSI6IjUwMC4wMCIsImRpc2NvdW50IjoiNTAuMDAiLCJuYW1lIjoiQ2hpY2tlbiIsImltYWdlIjoiMTY1NzA1MzI3MDk5OS5qcGcifSwiMTEiOnsiY2lkIjoiMTEiLCJxdHkiOjEsInByaWNlIjoiMTAwMC4wMCIsImRpc2NvdW50IjoiMjAuMDAiLCJuYW1lIjoiIENoaWNrZW5zIiwiaW1hZ2UiOiIxNjU3MDUzNTk5MTAwMC5qcGcifX0sInRvdGFscXR5IjoyLCJ0b3RhbHByaWNlIjoxNTAwLCJ0b3RhbGRpc2NvdW50Ijo3MCwiY291cG9uX2Rpc2NvdW50IjowLCJjb3Vwb25fY29kZSI6IiJ9', 4, 1, '', '2022-07-22 14:36:27', '2022-07-22 14:36:27'),
(2, 2, 'Md Ariful Islam', '38 No Chanmari road, Lalkhan bazar, Chattagram.\r\n', '38 No Chanmari road, Lalkhan bazar, Chattagram.\r\n', '', '01858380039', 'hmarif.nazir@gmail.com', '', 3, '1240.00', '90.00', '298.00', 'BLACKFRIDAY', '852.00', 'eyJkYXRhIjp7IjEzIjp7ImNpZCI6IjEzIiwicXR5IjoyLCJwcmljZSI6IjUwMC4wMCIsImRpc2NvdW50IjoiMjAuMDAiLCJuYW1lIjoiVmVnZXRhYmxlcyIsImltYWdlIjoiMTY1NzA1NDU0NzEwMDAuanBnIn0sIjEyIjp7ImNpZCI6IjEyIiwicXR5IjoxLCJwcmljZSI6IjI0MC4wMCIsImRpc2NvdW50IjoiNTAuMDAiLCJuYW1lIjoiVmVnZXRhYmxlIEl0ZW1zIiwiaW1hZ2UiOiIxNjU3MDU0MTU3OTk5LmpwZyJ9fSwidG90YWxxdHkiOjIsInRvdGFscHJpY2UiOjEyNDAsInRvdGFsZGlzY291bnQiOjkwLCJjb3Vwb25fZGlzY291bnQiOjI5OCwiY291cG9uX2NvZGUiOiJCTEFDS0ZSSURBWSJ9', 1, 1, NULL, '2022-07-22 14:32:53', '2022-07-22 14:32:53'),
(3, 2, 'arif', '38 No Chanmari road, Lalkhan bazar, Chattagram.\r\n', '', 'Chattogram', '01858380039', 'hmarif.nazir@gmail.com', '', 2, '1500.00', '30.00', '0.00', '', '1470.00', 'eyJkYXRhIjp7IjE0Ijp7ImNpZCI6IjE0IiwicXR5IjoxLCJwcmljZSI6IjUwMC4wMCIsImRpc2NvdW50IjoiMTAuMDAiLCJuYW1lIjoiQmVlZiIsImltYWdlIjoiMTY1NzI2MTEyMDEwMDAuanBnIn0sIjE1Ijp7ImNpZCI6IjE1IiwicXR5IjoxLCJwcmljZSI6IjEwMDAuMDAiLCJkaXNjb3VudCI6IjIwLjAwIiwibmFtZSI6IkJlZWYiLCJpbWFnZSI6IjE2NTcyNjEyMzYxMDAwLmpwZyJ9fSwidG90YWxxdHkiOjIsInRvdGFscHJpY2UiOjE1MDAsInRvdGFsZGlzY291bnQiOjMwLCJjb3Vwb25fZGlzY291bnQiOjAsImNvdXBvbl9jb2RlIjoiIn0=', 1, 0, NULL, '2022-07-12 14:09:59', '2022-07-12 14:09:59'),
(4, 2, 'arif', '38 No Chanmari road, Lalkhan bazar, Chattagram.\r\n', '', 'Chattogram', '01858380039', 'hmarif.nazir@gmail.com', '', 1, '240.00', '50.00', '0.00', '', '190.00', 'eyJkYXRhIjp7IjEyIjp7ImNpZCI6IjEyIiwicXR5IjoiMSIsInByaWNlIjoiMjQwLjAwIiwiZGlzY291bnQiOiI1MC4wMCIsIm5hbWUiOiJWZWdldGFibGUgSXRlbXMiLCJpbWFnZSI6IjE2NTcwNTQxNTc5OTkuanBnIn19LCJ0b3RhbHF0eSI6MSwidG90YWxwcmljZSI6MjQwLCJ0b3RhbGRpc2NvdW50Ijo1MCwiY291cG9uX2Rpc2NvdW50IjowLCJjb3Vwb25fY29kZSI6IiJ9', 1, 0, NULL, '2022-07-12 16:20:19', '2022-07-12 16:20:19'),
(5, 2, 'arif', '38 No Chanmari road, Lalkhan bazar, Chattagram.\r\n', '38 No Chanmari road, Lalkhan bazar, Chattagram.\r\n', 'Chattogram', '01858380039', 'hmarif.nazir@gmail.com', '', 1, '1000.00', '20.00', '0.00', '', '980.00', 'eyJkYXRhIjp7IjE1Ijp7ImNpZCI6IjE1IiwicXR5IjoiMSIsInByaWNlIjoiMTAwMC4wMCIsImRpc2NvdW50IjoiMjAuMDAiLCJuYW1lIjoiQmVlZiIsImltYWdlIjoiMTY1NzI2MTIzNjEwMDAuanBnIn19LCJ0b3RhbHF0eSI6MSwidG90YWxwcmljZSI6MTAwMCwidG90YWxkaXNjb3VudCI6MjAsImNvdXBvbl9kaXNjb3VudCI6MCwiY291cG9uX2NvZGUiOiIifQ==', 1, 0, NULL, '2022-07-15 19:16:26', '2022-07-15 19:16:26'),
(6, 2, 'arif', '38 No Chanmari road, Lalkhan bazar, Chattagram.\r\n', '38 No Chanmari road, Lalkhan bazar, Chattagram.\r\n', 'Chattogram', '01858380039', 'hmarif.nazir@gmail.com', '', 1, '500.00', '20.00', '0.00', '', '480.00', 'eyJkYXRhIjp7IjEzIjp7ImNpZCI6IjEzIiwicXR5IjoxLCJwcmljZSI6IjUwMC4wMCIsImRpc2NvdW50IjoiMjAuMDAiLCJuYW1lIjoiVmVnZXRhYmxlcyIsImltYWdlIjoiMTY1NzA1NDU0NzEwMDAuanBnIn19LCJ0b3RhbHF0eSI6MSwidG90YWxwcmljZSI6NTAwLCJ0b3RhbGRpc2NvdW50IjoyMCwiY291cG9uX2Rpc2NvdW50IjowLCJjb3Vwb25fY29kZSI6IiJ9', 1, 0, NULL, '2022-07-15 19:21:55', '2022-07-15 19:21:55'),
(7, 2, 'arif', '38 No Chanmari road, Lalkhan bazar, Chattagram.\r\n', '38 No Chanmari road, Lalkhan bazar, Chattagram.\r\n', 'Chattogram', '01858380039', 'hmarif.nazir@gmail.com', '', 1, '500.00', '20.00', '156.00', 'EID200', '324.00', 'eyJkYXRhIjp7IjEzIjp7ImNpZCI6IjEzIiwicXR5IjoxLCJwcmljZSI6IjUwMC4wMCIsImRpc2NvdW50IjoiMjAuMDAiLCJuYW1lIjoiVmVnZXRhYmxlcyIsImltYWdlIjoiMTY1NzA1NDU0NzEwMDAuanBnIn19LCJ0b3RhbHF0eSI6MSwidG90YWxwcmljZSI6NTAwLCJ0b3RhbGRpc2NvdW50IjoyMCwiY291cG9uX2Rpc2NvdW50IjoxNTYsImNvdXBvbl9jb2RlIjoiRUlEMjAwIn0=', 1, 0, NULL, '2022-07-15 19:29:29', '2022-07-15 19:29:29'),
(8, 2, 'arif', '38 No Chanmari road, Lalkhan bazar, Chattagram.\r\n', '38 No Chanmari road, Lalkhan bazar, Chattagram.\r\n', 'Chattogram', '01858380039', 'hmarif.nazir@gmail.com', '', 1, '240.00', '50.00', '90.00', 'EID200', '100.00', 'eyJkYXRhIjp7IjEyIjp7ImNpZCI6IjEyIiwicXR5IjoxLCJwcmljZSI6IjI0MC4wMCIsImRpc2NvdW50IjoiNTAuMDAiLCJuYW1lIjoiVmVnZXRhYmxlIEl0ZW1zIiwiaW1hZ2UiOiIxNjU3MDU0MTU3OTk5LmpwZyJ9fSwidG90YWxxdHkiOjEsInRvdGFscHJpY2UiOjI0MCwidG90YWxkaXNjb3VudCI6NTAsImNvdXBvbl9kaXNjb3VudCI6OTAsImNvdXBvbl9jb2RlIjoiRUlEMjAwIn0=', 1, 0, NULL, '2022-07-15 19:34:45', '2022-07-15 19:34:45'),
(9, 2, 'arif', '38 No Chanmari road, Lalkhan bazar, Chattagram.\r\n', '38 No Chanmari road, Lalkhan bazar, Chattagram.\r\n', 'Chattogram', '01858380039', 'hmarif.nazir@gmail.com', '', 1, '500.00', '20.00', '156.00', 'EID200', '324.00', 'eyJkYXRhIjp7IjEzIjp7ImNpZCI6IjEzIiwicXR5IjoxLCJwcmljZSI6IjUwMC4wMCIsImRpc2NvdW50IjoiMjAuMDAiLCJuYW1lIjoiVmVnZXRhYmxlcyIsImltYWdlIjoiMTY1NzA1NDU0NzEwMDAuanBnIn19LCJ0b3RhbHF0eSI6MSwidG90YWxwcmljZSI6NTAwLCJ0b3RhbGRpc2NvdW50IjoyMCwiY291cG9uX2Rpc2NvdW50IjoxNTYsImNvdXBvbl9jb2RlIjoiRUlEMjAwIn0=', 1, 0, NULL, '2022-07-15 19:38:54', '2022-07-15 19:38:54'),
(10, 2, 'arif', '38 No Chanmari road, Lalkhan bazar, Chattagram.\r\n', '38 No Chanmari road, Lalkhan bazar, Chattagram.\r\n', 'Chattogram', '01858380039', 'hmarif.nazir@gmail.com', '', 1, '240.00', '50.00', '11.00', 'EID2022', '179.00', 'eyJkYXRhIjp7IjEyIjp7ImNpZCI6IjEyIiwicXR5IjoxLCJwcmljZSI6IjI0MC4wMCIsImRpc2NvdW50IjoiNTAuMDAiLCJuYW1lIjoiVmVnZXRhYmxlIEl0ZW1zIiwiaW1hZ2UiOiIxNjU3MDU0MTU3OTk5LmpwZyJ9fSwidG90YWxxdHkiOjEsInRvdGFscHJpY2UiOjI0MCwidG90YWxkaXNjb3VudCI6NTAsImNvdXBvbl9kaXNjb3VudCI6MTEsImNvdXBvbl9jb2RlIjoiRUlEMjAyMiJ9', 1, 0, NULL, '2022-07-16 04:33:12', '2022-07-16 04:33:12'),
(11, 2, 'arif', '38 No Chanmari road, Lalkhan bazar, Chattagram.\r\n', '', 'Chattogram', '01858380039', 'hmarif.nazir@gmail.com', '', 2, '1500.00', '30.00', '0.00', '', '1470.00', 'eyJkYXRhIjp7IjE1Ijp7ImNpZCI6IjE1IiwicXR5IjoxLCJwcmljZSI6IjEwMDAuMDAiLCJkaXNjb3VudCI6IjIwLjAwIiwibmFtZSI6IkJlZWYiLCJpbWFnZSI6IjE2NTcyNjEyMzYxMDAwLmpwZyJ9LCIxNCI6eyJjaWQiOiIxNCIsInF0eSI6MSwicHJpY2UiOiI1MDAuMDAiLCJkaXNjb3VudCI6IjEwLjAwIiwibmFtZSI6IkJlZWYiLCJpbWFnZSI6IjE2NTcyNjExMjAxMDAwLmpwZyJ9fSwidG90YWxxdHkiOjIsInRvdGFscHJpY2UiOjE1MDAsInRvdGFsZGlzY291bnQiOjMwLCJjb3Vwb25fZGlzY291bnQiOjAsImNvdXBvbl9jb2RlIjoiIn0=', 1, 0, NULL, '2022-07-16 06:01:13', '2022-07-16 06:01:13'),
(12, 2, 'arif', '38 No Chanmari road, Lalkhan bazar, Chattagram.\r\n', '38 No Chanmari road, Lalkhan bazar, Chattagram.\r\n', '', '01858380039', 'hmarif.nazir@gmail.com', '', 1, '500.00', '20.00', '0.00', '', '480.00', 'eyJkYXRhIjp7IjEzIjp7ImNpZCI6IjEzIiwicXR5IjoxLCJwcmljZSI6IjUwMC4wMCIsImRpc2NvdW50IjoiMjAuMDAiLCJuYW1lIjoiVmVnZXRhYmxlcyIsImltYWdlIjoiMTY1NzA1NDU0NzEwMDAuanBnIn19LCJ0b3RhbHF0eSI6MSwidG90YWxwcmljZSI6NTAwLCJ0b3RhbGRpc2NvdW50IjoyMCwiY291cG9uX2Rpc2NvdW50IjowLCJjb3Vwb25fY29kZSI6IiJ9', 1, 0, NULL, '2022-07-22 06:49:18', '2022-07-22 06:49:18'),
(13, 2, 'arif', '38 No Chanmari road, Lalkhan bazar, Chattagram.\r\n', '38 No Chanmari road, Lalkhan bazar, Chattagram.\r\n', 'Chattogram', '01858380039', 'hmarif.nazir@gmail.com', '', 1, '500.00', '10.00', '0.00', '', '490.00', 'eyJkYXRhIjp7IjE0Ijp7ImNpZCI6IjE0IiwicXR5IjoxLCJwcmljZSI6IjUwMC4wMCIsImRpc2NvdW50IjoiMTAuMDAiLCJuYW1lIjoiQmVlZiIsImltYWdlIjoiMTY1NzI2MTEyMDEwMDAuanBnIn19LCJ0b3RhbHF0eSI6MSwidG90YWxwcmljZSI6NTAwLCJ0b3RhbGRpc2NvdW50IjoxMCwiY291cG9uX2Rpc2NvdW50IjowLCJjb3Vwb25fY29kZSI6IiJ9', 1, 0, NULL, '2022-07-22 08:31:53', '2022-07-22 08:31:53'),
(14, 2, 'arif', '38 No Chanmari road, Lalkhan bazar, Chattagram.\r\n', '38 No Chanmari road, Lalkhan bazar, Chattagram.\r\n', '', '01858380039', 'hmarif.nazir@gmail.com', '', 3, '500.00', '10.00', '0.00', '', '490.00', 'eyJkYXRhIjp7IjE0Ijp7ImNpZCI6IjE0IiwicXR5IjoxLCJwcmljZSI6IjUwMC4wMCIsImRpc2NvdW50IjoiMTAuMDAiLCJuYW1lIjoiQmVlZiIsImltYWdlIjoiMTY1NzI2MTEyMDEwMDAuanBnIn0sIiI6eyJjaWQiOm51bGwsInF0eSI6MiwicHJpY2UiOm51bGwsImRpc2NvdW50IjpudWxsLCJuYW1lIjpudWxsLCJpbWFnZSI6bnVsbH19LCJ0b3RhbHF0eSI6MiwidG90YWxwcmljZSI6NTAwLCJ0b3RhbGRpc2NvdW50IjoxMCwiY291cG9uX2Rpc2NvdW50IjowLCJjb3Vwb25fY29kZSI6IiJ9', 1, 0, NULL, '2022-07-22 15:49:09', '2022-07-22 15:49:09'),
(15, 4, 'arif', 'satkania.', 'satkania.', 'Chattogram', '01858380030', 'hmarif.nazir@gmail.com', '', 1, '240.00', '50.00', '12.00', 'EID2022', '178.00', 'eyJkYXRhIjp7IjEyIjp7ImNpZCI6IjEyIiwicXR5IjoxLCJwcmljZSI6IjI0MC4wMCIsImRpc2NvdW50IjoiNTAuMDAiLCJuYW1lIjoiVmVnZXRhYmxlIEl0ZW1zIiwiaW1hZ2UiOiIxNjU3MDU0MTU3OTk5LmpwZyJ9fSwidG90YWxxdHkiOjEsInRvdGFscHJpY2UiOjI0MCwidG90YWxkaXNjb3VudCI6NTAsImNvdXBvbl9kaXNjb3VudCI6MTIsImNvdXBvbl9jb2RlIjoiRUlEMjAyMiJ9', 1, 0, NULL, '2022-07-23 08:28:15', '2022-07-23 08:28:15'),
(16, 4, 'arif', 'satkania.', 'satkania.', 'Chattogram', '01858380030', 'hmarif.nazir@gmail.com', '', 4, '240.00', '50.00', '0.00', '', '190.00', 'eyJkYXRhIjp7IjEyIjp7ImNpZCI6IjEyIiwicXR5IjoxLCJwcmljZSI6IjI0MC4wMCIsImRpc2NvdW50IjoiNTAuMDAiLCJuYW1lIjoiVmVnZXRhYmxlIEl0ZW1zIiwiaW1hZ2UiOiIxNjU3MDU0MTU3OTk5LmpwZyJ9LCIiOnsiY2lkIjoiIiwicXR5IjoyLCJwcmljZSI6bnVsbCwiZGlzY291bnQiOm51bGwsIm5hbWUiOm51bGwsImltYWdlIjpudWxsfSwiOCI6eyJjaWQiOiI4IiwicXR5IjoxLCJwcmljZSI6bnVsbCwiZGlzY291bnQiOm51bGwsIm5hbWUiOm51bGwsImltYWdlIjpudWxsfX0sInRvdGFscXR5IjozLCJ0b3RhbHByaWNlIjoyNDAsInRvdGFsZGlzY291bnQiOjUwLCJjb3Vwb25fZGlzY291bnQiOjAsImNvdXBvbl9jb2RlIjoiIn0=', 1, 0, NULL, '2022-07-23 19:15:29', '2022-07-23 19:15:29'),
(17, 4, 'Md Ariful Islam', 'satkania.', 'satkania.', 'Barisal', '01858380030', 'hmarif.nazir@gmail.com', '', 6, '0.00', '0.00', '0.00', '', '0.00', 'eyJkYXRhIjp7IjgiOnsiY2lkIjoiOCIsInF0eSI6IjEiLCJwcmljZSI6bnVsbCwiZGlzY291bnQiOm51bGwsIm5hbWUiOm51bGwsImltYWdlIjpudWxsfSwiIjp7ImNpZCI6bnVsbCwicXR5Ijo0LCJwcmljZSI6bnVsbCwiZGlzY291bnQiOm51bGwsIm5hbWUiOm51bGwsImltYWdlIjpudWxsfSwiMTAiOnsiY2lkIjoiMTAiLCJxdHkiOjEsInByaWNlIjpudWxsLCJkaXNjb3VudCI6bnVsbCwibmFtZSI6bnVsbCwiaW1hZ2UiOm51bGx9fSwidG90YWxxdHkiOjMsInRvdGFscHJpY2UiOjAsInRvdGFsZGlzY291bnQiOjAsImNvdXBvbl9kaXNjb3VudCI6MCwiY291cG9uX2NvZGUiOiIifQ==', 1, 0, NULL, '2022-07-23 21:08:58', '2022-07-23 21:08:58');

-- --------------------------------------------------------

--
-- Table structure for table `order_tracking`
--

CREATE TABLE `order_tracking` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_status` int(11) NOT NULL COMMENT '1 -> pending, 2->processing, 3->shipped, 4->delivered, 5->canceled	',
  `note` text NOT NULL,
  `trackdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_tracking`
--

INSERT INTO `order_tracking` (`id`, `order_id`, `order_status`, `note`, `trackdate`) VALUES
(1, 1, 2, 'We are processing your order', '2022-07-06'),
(2, 1, 3, 'Your order is shipped', '2022-07-07'),
(3, 1, 4, 'Your order is delivered', '2022-07-08'),
(4, 2, 1, '', '2022-07-22'),
(5, 1, 4, 'you will get product soon ', '2022-07-24');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `review_products` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) NOT NULL,
  `desc_short` varchar(255) NOT NULL,
  `desc_long` varchar(255) NOT NULL,
  `information` varchar(255) NOT NULL,
  `ratings` varchar(255) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `shipping` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `latest_products` int(11) DEFAULT NULL,
  `top_rated_products` int(11) DEFAULT NULL,
  `offer` int(11) DEFAULT NULL,
  `thumb` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `review_products`, `price`, `discount`, `desc_short`, `desc_long`, `information`, `ratings`, `qty`, `status`, `shipping`, `weight`, `latest_products`, `top_rated_products`, `offer`, `thumb`, `image`, `created_at`, `deleted_at`) VALUES
(12, '9', 'Vegetable Items', 1, '240.00', '50.00', 'Vegetables are parts of plants that are consumed by humans or other animals as food.', 'wrwrwtr', 'wqaedwrewr', '4', 5, 1, ' 01 day shipping. Free pickup today', '2 Kg', 1, 1, 1, '1657054157999.jpg', '16570541571000.jpg', '2022-07-05 20:49:17', '2022-07-05 20:49:17'),
(13, '9', 'Vegetables', 1, '500.00', '20.00', 'Vegetables are parts of plants that are consumed by humans or other animals as food.', 'fesedafgrgr', 'egregrvhthh', '4', 5, 1, ' 01 day shipping. Free pickup today', '5 Kg', 1, 1, 1, '16570545471000.jpg', '1657054547999.jpg', '2022-07-05 20:55:47', '2022-07-05 20:55:47'),
(14, '8', 'Beef', 1, '500.00', '10.00', 'Beef. Beef are the most common animal on earth.', 'Beef. Beef are the most common animal on earth.Beef. Beef are the most common animal on earth.Beef. Beef are the most common animal on earth.Beef. Beef are the most common animal on earth.', 'Beef. Beef are the most common animal on earth.Beef. Beef are the most common animal on earth.Beef. Beef are the most common animal on earth.Beef. Beef are the most common animal on earth.', '4', 1, 1, ' 01 day shipping. Free pickup today', '1 Kg', 1, 1, 1, '16572611201000.jpg', '16572610451000.jpg', '2022-07-08 06:18:40', '2022-07-08 06:18:40'),
(15, '8', 'Beef', 1, '1000.00', '20.00', 'Beef. Beef are the most common birds on earth.', 'Beef. Beef are the most common birds on earth.Beef. Beef are the most common birds on earth.Beef. Beef are the most common birds on earth.', 'Beef. Beef are the most common birds on earth.Beef. Beef are the most common birds on earth.', '4', 1, 1, ' 01 day shipping. Free pickup today', '2 Kg', 1, 1, 1, '16572612361000.jpg', '16572612361000.jpg', '2022-07-08 06:20:36', '2022-07-08 06:20:36'),
(16, '8', 'Fresh Meat', 1, '500.00', '50.00', 'Manufactured meat products include a variety of non-meat ingredients that serve various functions during production, marketing and consumption. ', 'Manufactured meat products include a variety of non-meat ingredients that serve various functions during production, marketing and consumption. Manufactured meat products include a variety of non-meat ingredients that serve various functions during produc', 'Manufactured meat products include a variety of non-meat ingredients that serve various functions during production, marketing and consumption. ', '4', 1, 1, ' 01 day shipping. Free pickup today', '2kg', 1, 0, 1, '16579473841000.jpg', '1657947384999.jpg', '2022-07-16 04:56:24', '2022-07-16 04:56:24'),
(17, '8', 'Fresh Meat', 1, '700.00', '10.00', 'Manufactured meat products include a variety of non-meat ingredients that serve various functions during production, marketing and consumption. ', 'Manufactured meat products include a variety of non-meat ingredients that serve various functions during production, marketing and consumption. Manufactured meat products include a variety of non-meat ingredients that serve various functions during produc', 'Manufactured meat products include a variety of non-meat ingredients that serve various functions during production, marketing and consumption. ', '4', 1, 1, ' 01 day shipping. Free pickup today', '5Kg', 1, 1, 1, '16579480511000.jpg', '1657948051999.jpg', '2022-07-16 05:07:31', '2022-07-16 05:07:31'),
(18, '9', 'Vegetables', 1, '300.00', '10.00', 'Vegetables are parts of plants that are consumed by humans or other animals as food.', 'Vegetables are parts of plants that are consumed by humans or other animals as food. Vegetables are parts of plants that are consumed by humans or other animals as food.', 'Vegetables are parts of plants that are consumed by humans or other animals as food.', '4', 1, 1, ' 01 day shipping. Free pickup today', '1 Kg', 1, 1, 1, '1658473759999.jpg', '16584737591000.jpg', '2022-07-22 07:09:19', '2022-07-22 07:09:19'),
(19, '9', 'Vegetables', 1, '400.00', '15.00', 'Vegetables are parts of plants that are consumed by humans or other animals as food.', 'Vegetables are parts of plants that are consumed by humans or other animals as food. Vegetables are parts of plants that are consumed by humans or other animals as food.', 'Vegetables are parts of plants that are consumed by humans or other animals as food.', '5', 1, 1, ' 01 day shipping. Free pickup today', '2 Kg', 1, 1, 1, '16584740891000.jpg', '16584740891000.jpg', '2022-07-22 07:14:49', '2022-07-22 07:14:49'),
(20, '10', 'Fruit and Nut', 1, '2000.00', '20.00', 'Fruit & nut gift baskets! Filled with premium mixed nuts & gourmet dried fruits, these gift baskets & platters are perfect for every ...', 'Fruit & nut gift baskets! Filled with premium mixed nuts & gourmet dried fruits, these gift baskets & platters are perfect for every ...Fruit & nut gift basket! Filled with premium mixed nuts & gourmet dried fruits, these gift baskets & platters are perfe', 'Fruit & nut gift baskets! Filled with premium mixed nuts & gourmet dried fruits, these gift baskets & platters are perfect for every ...', '5', 1, 1, ' 01 day shipping. Free pickup today', '1 Kg', 1, 1, 1, '1658476078999.jpg', '1658476078999.jpg', '2022-07-22 07:47:58', '2022-07-22 07:47:58'),
(21, '10', 'Fruit & Nut ', 1, '1000.00', '10.00', 'Fruit & nut gift baskets! Filled with premium mixed nuts & gourmet dried fruits, these gift baskets & platters are perfect for every ...', 'Fruit & nut gift baskets! Filled with premium mixed nuts & gourmet dried fruits, these gift baskets & platters are perfect for every ...Fruit & nut gift basket! Filled with premium mixed nuts & gourmet dried fruits, these gift baskets & platters are perfe', 'Fruit & nut gift baskets! Filled with premium mixed nuts & gourmet dried fruits, these gift baskets & platters are perfect for every ...', '4', 1, 1, ' 01 day shipping. Free pickup today', '1 Kg', 0, 1, 1, '16584763731000.jpg', '1658476373999.jpg', '2022-07-22 07:52:53', '2022-07-22 07:52:53'),
(22, '10', 'Fruit & Nut ', 1, '500.00', '10.00', 'Fruit & nut gift baskets! Filled with premium mixed nuts & gourmet dried fruits, these gift baskets & platters are perfect for every ...', 'Fruit & nut gift baskets! Filled with premium mixed nuts & gourmet dried fruits, these gift baskets & platters are perfect for every ...Fruit & nut gift basket! Filled with premium mixed nuts & gourmet dried fruits, these gift baskets & platters are perfe', 'Fruit & nut gift baskets! Filled with premium mixed nuts & gourmet dried fruits, these gift baskets & platters are perfect for every ...', '4', 1, 1, '', ' 0.5 kg', 1, 1, 1, '16584765541000.jpg', '1658476554999.jpg', '2022-07-22 07:55:54', '2022-07-22 07:55:54'),
(23, '11', 'Fresh Berries', 1, '2500.00', '20.00', 'Fresh berries are hard to beat a handful of fresh, chilled fruit on a steaming summer day. ', 'Fresh berries are hard to beat a handful of fresh, chilled fruit on a steaming summer day. Fresh berries are hard to beat a handful of fresh, chilled fruit on a steaming summer day. ', 'Fresh berries are hard to beat a handful of fresh, chilled fruit on a steaming summer day. ', '4', 1, 1, ' 01 day shipping. Free pickup today', '1 Kg', 1, 1, 1, '1658477143999.jpg', '16584771431000.jpg', '2022-07-22 08:05:43', '2022-07-22 08:05:43'),
(24, '11', 'Fresh Berries', 1, '2000.00', '20.00', 'Fresh berries are hard to beat a handful of fresh, chilled fruit on a steaming summer day. ', 'Fresh berries are hard to beat a handful of fresh, chilled fruit on a steaming summer day.  Fresh berries are hard to beat a handful of fresh, chilled fruit on a steaming summer day. ', 'Fresh berries are hard to beat a handful of fresh, chilled fruit on a steaming summer day. ', '4', 1, 1, ' 01 day shipping. Free pickup today', '1 Kg', 1, 1, 1, '1658477364999.jpg', '1658477364999.jpg', '2022-07-22 08:09:24', '2022-07-22 08:09:24'),
(25, '11', 'Fresh Berries', 1, '2500.00', '20.00', 'Fresh berries are hard to beat a handful of fresh, chilled fruit on a steaming summer day. ', 'Fresh berries are hard to beat a handful of fresh, chilled fruit on a steaming summer day.  Fresh berries are hard to beat a handful of fresh, chilled fruit on a steaming summer day. ', 'Fresh berries are hard to beat a handful of fresh, chilled fruit on a steaming summer day. ', '4', 1, 1, ' 01 day shipping. Free pickup today', '1 Kg', 1, 1, 1, '1658477501999.jpg', '16584775011000.jpg', '2022-07-22 08:11:41', '2022-07-22 08:11:41'),
(26, '12', 'Ocean Food', 1, '4000.00', '30.00', 'Oceans Seafood Enjoy healthy, innovative & sustainable canned seafood.', ' Oceans Seafood Enjoy healthy, innovative & sustainable canned seafood. Oceans Seafood Enjoy healthy, innovative & sustainable canned seafood.', ' Oceans Seafood Enjoy healthy, innovative & sustainable canned seafood. Oceans Seafood Enjoy healthy, innovative & sustainable canned seafood.', '4', 1, 1, ' 01 day shipping. Free pickup today', '2 Kg', 1, 1, 1, '1658478099999.jpg', '16584780991000.jpg', '2022-07-22 08:21:39', '2022-07-22 08:21:39'),
(27, '12', 'Ocean Food', 1, '3000.00', '20.00', 'Oceans Seafood Enjoy healthy, innovative & sustainable canned seafood.', 'Oceans Seafood Enjoy healthy, innovative & sustainable canned seafood. Oceans Seafood Enjoy healthy, innovative & sustainable canned seafood.', 'Oceans Seafood Enjoy healthy, innovative & sustainable canned seafood.', '4', 1, 1, ' 01 day shipping. Free pickup today', '2 Kg', 1, 1, 1, '1658478327999.jpg', '1658478327999.jpg', '2022-07-22 08:25:27', '2022-07-22 08:25:27'),
(28, '12', 'Ocean Food', 1, '1000.00', '10.00', 'Oceans Seafood Enjoy healthy, innovative & sustainable canned seafood.', 'Oceans Seafood Enjoy healthy, innovative & sustainable canned seafood. Oceans Seafood Enjoy healthy, innovative & sustainable canned seafood.', 'Oceans Seafood Enjoy healthy, innovative & sustainable canned seafood.', '4', 1, 1, ' 01 day shipping. Free pickup today', '1 Kg', 1, 1, 1, '1658478540999.jpg', '1658478540999.jpg', '2022-07-22 08:29:00', '2022-07-22 08:29:00'),
(29, '13', 'Butter & Egg', 1, '500.00', '10.00', 'Butter and Egg Adventures continues to update our blog monthly with news, features, and specials. Find out everything you need to know here.', 'Butter and Egg Adventures continues to update our blog monthly with news, features, and specials. Find out everything you need to know here. Butter and Egg Adventures continues to update our blog monthly with news, features, and specials. Find out everyth', 'Butter and Egg Adventures continues to update our blog monthly with news, features, and specials. Find out everything you need to know here.', '4', 1, 1, ' 01 day shipping. Free pickup today', ' 0.5 kg', 1, 1, 1, '1658480227999.jpg', '16584802271000.jpg', '2022-07-22 08:57:07', '2022-07-22 08:57:07'),
(30, '13', 'Butter & Egg', 1, '300.00', '10.00', 'Butter and Egg Adventures continues to update our blog monthly with news, features, and specials. Find out everything you need to know here.', 'Butter and Egg Adventures continues to update our blog monthly with news, features, and specials. Find out everything you need to know here. Butter and Egg Adventures continues to update our blog monthly with news, features, and specials. Find out everyth', 'Butter and Egg Adventures continues to update our blog monthly with news, features, and specials. Find out everything you need to know here.', '4', 1, 1, ' 01 day shipping. Free pickup today', '1 Kg', 1, 1, 1, '16584802981000.jpg', '1658480298999.jpg', '2022-07-22 08:58:18', '2022-07-22 08:58:18'),
(31, '13', 'Butter & Egg', 1, '600.00', '20.00', 'Butter and Egg Adventures continues to update our blog monthly with news, features, and specials. Find out everything you need to know here.', 'Butter and Egg Adventures continues to update our blog monthly with news, features, and specials. Find out everything you need to know here. Butter and Egg Adventures continues to update our blog monthly with news, features, and specials. Find out everyth', 'Butter and Egg Adventures continues to update our blog monthly with news, features, and specials. Find out everything you need to know here.', '4', 1, 1, ' 01 day shipping. Free pickup today', '1 Kg', 1, 0, 1, '1658480374999.jpg', '1658480374999.jpg', '2022-07-22 08:59:34', '2022-07-22 08:59:34'),
(32, '14', 'Fast food', 1, '500.00', '10.00', 'Fast Food & food with recipes, places to eat, restaurants, recommendations, dishes, guides, chefs, interviews, blogs, news, and opinion.', 'Fast Food & food with recipes, places to eat, restaurants, recommendations, dishes, guides, chefs, interviews, blogs, news, and opinion. Fast Food & food with recipes, places to eat, restaurants, recommendations, dishes, guides, chefs, interviews, blogs, ', 'Fast Food & food with recipes, places to eat, restaurants, recommendations, dishes, guides, chefs, interviews, blogs, news, and opinion.', '4', 1, 1, ' 01 day shipping. Free pickup today', ' 0.5 kg', 1, 1, 0, '16584807981000.jpg', '1658480798999.jpg', '2022-07-22 09:06:38', '2022-07-22 09:06:38'),
(33, '14', 'Fast food', 1, '700.00', '10.00', 'Fast Food & food with recipes, places to eat, restaurants, recommendations, dishes, guides, chefs, interviews, blogs, news, and opinion.', 'Fast Food & food with recipes, places to eat, restaurants, recommendations, dishes, guides, chefs, interviews, blogs, news, and opinion. Fast Food & food with recipes, places to eat, restaurants, recommendations, dishes, guides, chefs, interviews, blogs, ', 'Fast Food & food with recipes, places to eat, restaurants, recommendations, dishes, guides, chefs, interviews, blogs, news, and opinion.', '4', 1, 1, ' 01 day shipping. Free pickup today', '1 Kg', 1, 1, 1, '1658480885999.jpg', '1658480885999.jpg', '2022-07-22 09:08:05', '2022-07-22 09:08:05'),
(34, '14', 'Fast food', 1, '300.00', '10.00', 'Fast Food & food with recipes, places to eat, restaurants, recommendations, dishes, guides, chefs, interviews, blogs, news, and opinion.', 'Fast Food & food with recipes, places to eat, restaurants, recommendations, dishes, guides, chefs, interviews, blogs, news, and opinion. Fast Food & food with recipes, places to eat, restaurants, recommendations, dishes, guides, chefs, interviews, blogs, ', 'Fast Food & food with recipes, places to eat, restaurants, recommendations, dishes, guides, chefs, interviews, blogs, news, and opinion.', '4', 1, 1, ' 01 day shipping. Free pickup today', ' 0.5 kg', 1, 1, 1, '1658480965999.jpg', '1658480965999.jpg', '2022-07-22 09:09:25', '2022-07-22 09:09:25'),
(35, '15', 'Fresh Onion', 1, '240.00', '10.00', 'Fresh onion is a directory of the tor network in the dark web and the deep web, the directory scrapes the deep web 24 hours a day looking for new and.', 'Fresh onion is a directory of the tor network in the dark web and the deep web, the directory scrapes the deep web 24 hours a day looking for new and. Fresh onion is a directory of the tor network in the dark web and the deep web, the directory scrapes th', 'Fresh onion is a directory of the tor network in the dark web and the deep web, the directory scrapes the deep web 24 hours a day looking for new and.', '4', 1, 1, ' 01 day shipping. Free pickup today', '1 Kg', 1, 1, 1, '16584814851000.jpg', '1658481485999.jpg', '2022-07-22 09:18:05', '2022-07-22 09:18:05'),
(36, '15', 'Fresh Onion', 1, '300.00', '20.00', 'Fresh onion is a directory of the tor network in the dark web and the deep web, the directory scrapes the deep web 24 hours a day looking for new and.', 'Fresh onion is a directory of the tor network in the dark web and the deep web, the directory scrapes the deep web 24 hours a day looking for new and. Fresh onion is a directory of the tor network in the dark web and the deep web, the directory scrapes th', 'Fresh onion is a directory of the tor network in the dark web and the deep web, the directory scrapes the deep web 24 hours a day looking for new and.', '4', 1, 1, ' 01 day shipping. Free pickup today', '1 Kg', 1, 1, 1, '1658481594999.jpg', '1658481594999.jpg', '2022-07-22 09:19:54', '2022-07-22 09:19:54'),
(37, '15', 'Fresh Onion', 1, '500.00', '20.00', 'Fresh onion is a directory of the tor network in the dark web and the deep web, the directory scrapes the deep web 24 hours a day looking for new and.', 'Fresh onion is a directory of the tor network in the dark web and the deep web, the directory scrapes the deep web 24 hours a day looking for new and. Fresh onion is a directory of the tor network in the dark web and the deep web, the directory scrapes th', 'Fresh onion is a directory of the tor network in the dark web and the deep web, the directory scrapes the deep web 24 hours a day looking for new and.', '4', 1, 1, ' 01 day shipping. Free pickup today', '1 Kg', 1, 1, 1, '16584816611000.jpg', '1658481661999.jpg', '2022-07-22 09:21:01', '2022-07-22 09:21:01'),
(38, '16', 'Papaya & Crisps', 1, '240.00', '10.00', 'Papaya is one of the most popular fruits which is consumed after. Find out more about the benefits of papaya chips and where you can.', 'Papaya is one of the most popular fruits which is consumed after. Find out more about the benefits of papaya chips and where you can. Papaya is one of the most popular fruits which is consumed after. Find out more about the benefits of papaya chips and wh', 'Papaya is one of the most popular fruits which is consumed after. Find out more about the benefits of papaya chips and where you can.', '4', 1, 1, ' 01 day shipping. Free pickup today', ' 0.5 kg', 1, 1, 1, '16584821861000.jpg', '1658482186999.jpg', '2022-07-22 09:29:46', '2022-07-22 09:29:46'),
(39, '16', 'Papaya & Crisps', 1, '300.00', '10.00', 'Papaya is one of the most popular fruits which is consumed after. Find out more about the benefits of papaya chips and where you can.', 'Papaya is one of the most popular fruits which is consumed after. Find out more about the benefits of papaya chips and where you can. Papaya is one of the most popular fruits which is consumed after. Find out more about the benefits of papaya chips and wh', 'Papaya is one of the most popular fruits which is consumed after. Find out more about the benefits of papaya chips and where you can.', '4', 1, 1, ' 01 day shipping. Free pickup today', ' 0.5 kg', 1, 1, 1, '16584822661000.jpg', '16584822661000.jpg', '2022-07-22 09:31:06', '2022-07-22 09:31:06'),
(40, '16', 'Papaya & Crisps', 1, '500.00', '20.00', 'Papaya is one of the most popular fruits which is consumed after. Find out more about the benefits of papaya chips and where you can.', 'Papaya is one of the most popular fruits which is consumed after. Find out more about the benefits of papaya chips and where you can. Papaya is one of the most popular fruits which is consumed after. Find out more about the benefits of papaya chips and wh', 'Papaya is one of the most popular fruits which is consumed after. Find out more about the benefits of papaya chips and where you can.', '4', 1, 1, ' 01 day shipping. Free pickup today', ' 0.5 kg', 1, 1, 1, '1658482339999.jpg', '16584823391000.jpg', '2022-07-22 09:32:19', '2022-07-22 09:32:19'),
(41, '17', 'Oatmeal', 1, '500.00', '10.00', 'Oatmeal we are going to add some dental health gross motor skills to the mix. These ideas and games can easily be incorporated into dental health.', 'Oatmeal we are going to add some dental health gross motor skills to the mix. These ideas and games can easily be incorporated into dental health. Oatmeal we are going to add some dental health gross motor skills to the mix. These ideas and games can easi', 'Oatmeal we are going to add some dental health gross motor skills to the mix. These ideas and games can easily be incorporated into dental health.', '4', 1, 1, ' 01 day shipping. Free pickup today', ' 0.5 kg', 1, 1, 1, '1658483170999.jpg', '1658483170999.jpg', '2022-07-22 09:46:10', '2022-07-22 09:46:10'),
(42, '17', 'Oatmeal', 1, '300.00', '20.00', 'Oatmeal we are going to add some dental health gross motor skills to the mix. These ideas and games can easily be incorporated into dental health.', 'Oatmeal we are going to add some dental health gross motor skills to the mix. These ideas and games can easily be incorporated into dental health. Oatmeal we are going to add some dental health gross motor skills to the mix. These ideas and games can easi', 'Oatmeal we are going to add some dental health gross motor skills to the mix. These ideas and games can easily be incorporated into dental health.', '4', 1, 1, ' 01 day shipping. Free pickup today', ' 0.5 kg', 1, 1, 1, '1658483246999.jpg', '16584832461000.jpg', '2022-07-22 09:47:26', '2022-07-22 09:47:26'),
(43, '17', 'Oatmeal', 1, '500.00', '20.00', 'Oatmeal we are going to add some dental health gross motor skills to the mix. These ideas and games can easily be incorporated into dental health.', 'Oatmeal we are going to add some dental health gross motor skills to the mix. These ideas and games can easily be incorporated into dental health. Oatmeal we are going to add some dental health gross motor skills to the mix. These ideas and games can easi', 'Oatmeal we are going to add some dental health gross motor skills to the mix. These ideas and games can easily be incorporated into dental health. Oatmeal we are going to add some dental health gross motor skills to the mix. These ideas and games can easi', '4', 1, 1, ' 01 day shipping. Free pickup today', ' 0.5 kg', 1, 1, 1, '16584834641000.jpg', '16584834641000.jpg', '2022-07-22 09:51:04', '2022-07-22 09:51:04');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `show_home` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `category`, `image`, `banner`, `show_home`, `created_at`, `deleted_at`) VALUES
(8, 'Fresh Meat', '1657049129999.jpg', '16570491291000.jpg', 1, '2022-07-05 19:25:29', '2022-07-05 19:25:29'),
(9, 'Vegetables', '16570494671000.jpg', '16570492791000.jpg', 1, '2022-07-05 19:31:07', '2022-07-05 19:31:07'),
(10, 'Fruit & Nut Gifts', '1657049901999.jpg', '1657049857999.jpg', 1, '2022-07-05 19:38:21', '2022-07-05 19:38:21'),
(11, 'Fresh Berries', '1657050249999.jpg', '16570502491000.jpg', 1, '2022-07-05 19:44:09', '2022-07-05 19:44:09'),
(12, 'Ocean Foods', '16570506021000.jpg', '16570505821000.jpg', 1, '2022-07-05 19:50:02', '2022-07-05 19:50:02'),
(13, 'Butter & Eggs', '1657050828999.jpg', '16570508111000.jpg', 1, '2022-07-05 19:53:48', '2022-07-05 19:53:48'),
(14, 'Fastfood', '1657051149999.jpg', '16570511491000.jpg', 1, '2022-07-05 19:59:09', '2022-07-05 19:59:09'),
(15, 'Fresh Onion', '16570514531000.jpg', '1657051423999.jpg', 1, '2022-07-05 20:04:13', '2022-07-05 20:04:13'),
(16, 'Papayaya & Crisps', '16570517231000.jpg', '1657051723999.jpg', 1, '2022-07-05 20:08:43', '2022-07-05 20:08:43'),
(17, 'Oatmeal', '16570519721000.jpg', '1657051972999.jpg', 1, '2022-07-05 20:12:52', '2022-07-05 20:12:52');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`, `status`, `created_at`) VALUES
(1, 'superadmin', 1, '2022-06-26 06:57:38'),
(2, 'admin', 1, '2022-06-26 06:57:38'),
(3, 'user', 1, '2022-06-26 06:57:38');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_name`, `email`, `password`, `created_at`) VALUES
(1, 'mifta', 'mifta@gmail.com', '6116afedcb0bc31083935c1c262ff4c9', '2022-07-02 06:41:45'),
(5, 'admin', 'admin@gmail.com', '6116afedcb0bc31083935c1c262ff4c9', '2022-07-22 06:59:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_tracking`
--
ALTER TABLE `order_tracking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `role` (`role`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `order_tracking`
--
ALTER TABLE `order_tracking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
