-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2023 at 07:54 PM
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
-- Database: `food_order`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(2, 'Sahana.S.N', 'sahana', 'b8873a156dc35dc99b69d0f93ebe22fc'),
(3, 'Niranjan.S.T.', 'niranjan', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'Manjula.H.N', 'manjula', '698d51a19d8a121ce581499d7b701668');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(1, 'momo', 'Food_Category_6036.jpg', 'Yes', 'Yes'),
(2, 'fish meal', 'Food_Category_7335.jpg', 'No', 'Yes'),
(3, 'juice', 'Food_Category_4925.jpg', 'Yes', 'Yes'),
(4, 'pizza', 'Food_Category_6602.jpg', 'Yes', 'Yes'),
(5, 'coffee', 'Food_Category_5545.jpg', 'No', 'No'),
(6, 'noodles', 'Food_Category_8923.jpg', 'Yes', 'No'),
(7, 'cake', 'Food_Category_5124.jpg', 'Yes', 'No'),
(8, 'ice cream', 'Food_Category_6270.jpg', 'No', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

CREATE TABLE `tbl_food` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_food`
--

INSERT INTO `tbl_food` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(1, 'Chicken Momo', 'The savory veggie filling has a balanced taste and is lightly spiced', 120.00, 'Food_Name_480.jpg', 0, 'Yes', 'Yes'),
(2, 'Veg momo', 'An delicious and tasty momo packed with healthy veggies like carrots and cabbage', 100.00, 'Food-Name1712.jpg', 1, 'Yes', 'Yes'),
(3, 'Chicken pizza', 'One pound boneless skiness chicken with  the perfect blend of mild indian masalas', 350.00, 'Food-Name2732.jpg', 4, 'Yes', 'Yes'),
(4, 'creamy coke', 'an chocolate  cake ', 85.00, 'Food-Name9183.jpg', 1, 'Yes', 'Yes'),
(5, 'Cappuccino', 'an cold cofee', 150.00, 'Food-Name5677.jpg', 5, 'Yes', 'Yes'),
(6, 'An ice-cream ', 'an delicious ice-cream milk with chocolate flavour', 200.00, 'Food-Name3954.jpg', 8, 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `food` varchar(150) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `customer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `food`, `price`, `qty`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`) VALUES
(1, 'Chicken pizza', 350.00, 1, 350.00, '2023-04-13 07:14:12', 'Cancelled', 'niranjan ', '9902999647 ', 'niranjan@gmail.com ', '393 E 3\r\nRadhakrishnan Nagara Avargere '),
(2, 'Chicken Momo', 120.00, 1, 120.00, '2023-04-13 07:15:19', 'Delivered', 'manjula ', '9874563211 ', 'manju111@gmail.com ', '#393 E 3\r\nRadhakrishnan Nagara  bangalore '),
(3, 'Cappuccino', 150.00, 1, 150.00, '2023-04-13 07:18:51', 'On Delivery', 'sahana ', '1234567899 ', 'sana44@gmail.com ', '#1213 F 66\r\nkempegowda street,malleswaram,bengaluru '),
(4, 'creamy coke', 85.00, 2, 170.00, '2023-04-13 07:28:30', 'Ordered', 'sanju ', '9874563211 ', 'sanju12@gmail.com ', '393 E 3\r\nRadhakrishnan Nagara Avargere,davangere ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
