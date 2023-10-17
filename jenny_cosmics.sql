-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2023 at 10:27 AM
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
-- Database: `jenny_cosmics`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(250) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `image`) VALUES
(1, 'eye', 'flat-lay-pack-beauty-products-blue-background.jpg'),
(2, 'lip', 'cosmetic-parts-face-beauty.jpg'),
(3, 'face ', 'beauty-products-recipients-assortment-grey-stones.jpg'),
(4, 'jewellery', 'images.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `u_id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cell_no` int(11) NOT NULL,
  `phone_num` varchar(100) NOT NULL,
  `DOB` int(11) NOT NULL,
  `category` varchar(10) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_name` varchar(250) NOT NULL DEFAULT 'pendind',
  `p_price` int(11) NOT NULL,
  `p_qty` int(11) NOT NULL,
  `t_price` int(11) NOT NULL,
  `status` varchar(250) NOT NULL DEFAULT 'pending',
  `time_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `u_id`, `name`, `cell_no`, `phone_num`, `DOB`, `category`, `remarks`, `email`, `address`, `city`, `p_id`, `p_name`, `p_price`, `p_qty`, `t_price`, `status`, `time_date`) VALUES
(1, 1, 'abdulsamad', 123456789, '123456789', 1999, 'unknown', 'nothing', 'samad@gmail.com', 'lyari agrataj', 'karachi', 34, 'Bracelet', 2200, 4, 8800, 'pending', '2023-08-18 15:30:09'),
(2, 1, 'abdulsamad', 123456789, '123456789', 1999, 'unknown', 'nothing', 'samad@gmail.com', 'lyari agrataj', 'karachi', 29, 'Butterfly open ring', 2000, 1, 2000, 'pending', '2023-08-18 15:30:09'),
(3, 1, 'abdulsamad', 123456789, '123456789', 1999, 'unknown', 'nothing', 'samad@gmail.com', 'lyari agrataj', 'karachi', 27, 'Ear stud hoop earings', 2400, 3, 7200, 'pending', '2023-08-18 15:30:09'),
(4, 1, 'abdulsamad', 123456789, '123456789', 1999, 'unknown', 'nothing', 'samad@gmail.com', 'lyari agrataj', 'karachi', 22, 'Face powder', 1000, 4, 4000, 'pending', '2023-08-18 15:30:09'),
(5, 1, 'abdulsamad', 123456789, '123456789', 1999, 'unknown', 'nothing', 'samad@gmail.com', 'lyari agrataj', 'karachi', 20, 'Face foundation', 1200, 5, 6000, 'pending', '2023-08-18 15:30:09'),
(6, 1, 'abdulsamad', 123456789, '123456789', 1999, 'unknown', 'nothing', 'samad@gmail.com', 'lyari agrataj', 'karachi', 26, 'Face highlighter', 1400, 1, 1400, 'pending', '2023-08-18 15:30:09'),
(7, 1, 'abdulsamad', 123456789, '123456789', 1999, 'unknown', 'nothing', 'samad@gmail.com', 'lyari agrataj', 'karachi', 15, 'Lipstick', 800, 3, 2400, 'pending', '2023-08-18 15:30:09'),
(8, 1, 'abdulsamad', 21321323, '23232', 2005, 'unknown', 'nothing', 'samad@gmail.com', '', 'karachi', 34, 'Bracelet', 2200, 1, 2200, 'pending', '2023-08-18 15:31:53');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `products` varchar(250) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(250) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `products`, `price`, `image`, `c_id`) VALUES
(1, 'Eye base dark', 800, 'eye base1.jpg', 1),
(2, 'Eye base light', 800, 'eye base2.jpg', 1),
(3, 'Eye concealer', 1200, 'eye concealer1.jpg', 1),
(4, 'Eye concealer', 1000, 'eye concealer2.jpg', 1),
(5, 'Eye liner', 1500, 'eyeliner1.jpg', 1),
(6, 'Eye liner', 900, 'eyeliner2.jpg', 1),
(7, 'Mascara', 700, 'mascara1.jpg', 1),
(8, 'Mascara', 800, 'mascara2.jpg', 1),
(9, 'Eye shades', 2200, 'eye shades1.jpg', 1),
(10, 'Eye shades', 2000, 'eyeshades2.jpg', 1),
(11, 'Lip pencil', 400, 'lip pencil.png', 2),
(12, 'Lip pencil', 500, 'ip pencil2.jpg', 2),
(13, 'Lip gloss', 1200, 'lip gloss 2.jpg', 2),
(14, 'Lip gloss', 1000, 'lip glows1.jpg', 2),
(15, 'Lipstick', 800, 'long wearing lipstick.jpg', 2),
(16, 'Lipstick', 1000, 'vision lipstic.jpg', 2),
(17, 'Face blus', 1400, 'face blush1.jpg', 3),
(18, 'Face blush', 1800, 'face blush2.jpg', 3),
(19, 'Face foundation', 1500, 'face foundation2.jpg', 3),
(20, 'Face foundation', 1200, 'face foundation.jpg', 3),
(21, 'Face powder', 900, 'face powder1.jpg', 3),
(22, 'Face powder', 1000, 'face powder2.jpg', 3),
(23, 'Face contour', 1600, 'face contour1.jpg', 3),
(24, 'Face contour', 1200, 'face contour2.jpg', 3),
(25, 'Face highlighter', 1900, 'face highlighter1.jpg', 3),
(26, 'Face highlighter', 1400, 'face highlighter2.jpg', 3),
(27, 'Ear stud hoop earings', 2400, 'ear stud hoop earings.jpg', 4),
(28, 'Heart earings', 1500, 'earings1.jpg', 4),
(29, 'Butterfly open ring', 2000, 'Butterfly Open Finger Rings.jpg', 4),
(30, 'Flower adjustable ring', 1500, 'Flower Adjustable Ring.jpg', 4),
(31, '3 Layers nacklace', 3500, '3 Layers Geometric Pendant Necklace.jpg', 4),
(32, 'Double chain nacklace ', 2000, 'Double Chain Golden Shape Necklace.jpg', 4),
(33, 'Bracelet', 1600, 'Ex-Libris bracelet.jpg', 4),
(34, 'Bracelet', 2200, 'Kelly bracelet, small model.jpg', 4),
(35, 'abc', 343234, 'eye base1.jpg', 0),
(36, 'abc', 343234, 'eye base1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `passwords` int(11) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `passwords`, `image`) VALUES
(1, 'abdulsamad', 123, 'abdulsamad.jpg'),
(2, 'abc', 123, 'WhatsApp Image 2023-08-13 at 3.48.11 AM.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
