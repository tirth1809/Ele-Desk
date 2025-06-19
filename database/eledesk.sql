-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2023 at 02:40 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eledesk`
--

-- --------------------------------------------------------

--
-- Table structure for table `area_master`
--

CREATE TABLE `area_master` (
  `area_id` int(5) NOT NULL,
  `area_name` varchar(100) NOT NULL,
  `pin_code` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `area_master`
--

INSERT INTO `area_master` (`area_id`, `area_name`, `pin_code`) VALUES
(1, '80ft road,Surendranagar', 363002),
(2, 'Dalmill road,Surendranagar', 363001),
(3, 'Shyamal cross road,Ahmedabad', 380015),
(4, 'Sabarmati,Ahmedabad', 380005);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(5) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Smartphones'),
(2, 'Headphones'),
(3, 'Smart  Tv\'s'),
(4, 'Refrigerators'),
(5, 'Laptops');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `discount_id` int(5) NOT NULL,
  `product_id` int(5) NOT NULL,
  `status` varchar(50) NOT NULL,
  `discount_percentage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`discount_id`, `product_id`, `status`, `discount_percentage`) VALUES
(1, 3, '1', 5),
(2, 4, '1', 7),
(3, 5, '1', 8),
(4, 6, '1', 4),
(5, 7, '1', 6),
(6, 8, '1', 10),
(7, 9, '1', 7),
(8, 10, '1', 6),
(9, 11, '1', 5),
(10, 12, '1', 8),
(11, 13, '1', 8),
(12, 14, '1', 9),
(13, 15, '1', 8),
(14, 16, '1', 12),
(15, 17, '1', 15);

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `user_id` int(5) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_master`
--

CREATE TABLE `order_master` (
  `order_id` int(5) NOT NULL,
  `order_date` date NOT NULL,
  `product_id` varchar(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `quantity` int(5) NOT NULL,
  `payment_status` varchar(30) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `cost` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `outward`
--

CREATE TABLE `outward` (
  `outward_id` int(5) NOT NULL,
  `order_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `date` date NOT NULL,
  `product_id` int(5) NOT NULL,
  `quantity` int(5) NOT NULL,
  `remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(5) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `category_id` int(5) NOT NULL,
  `product_price` float NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `category_id`, `product_price`, `description`, `image`) VALUES
(3, 'Oneplus nord ce 2 lite', 1, 19999, 'Storage:6GB RAM,128GB ROM.\r\nProcessor: Snapdragon 695 5g.\r\nCamera:64MP Main Camera with EIS; 2MP Depth Lens and 2MP Macro Lens; Front Camera:16MP. \r\nOperating system: Oxygen OS based on Android 12.\r\nBattery & Charging: 5000 mAh with 33W SuperVOOC.\r\nWarranty:1 year  ', 'images/products/18.jpg'),
(4, 'Redmi note 12 ', 1, 21999, 'Storage:6GB RAM 128GB ROM.\r\nProcessor: Snapdragon 4 Gen1 6nm Octa-core 5G.\r\nCamera: 48MP AI Triple camera setup with 8MP Ultra Wide sensor and 2MP Macro camera| 13MP Front camera.\r\nOperating system: android 12,MIUI13.\r\nBattery: 5000mAh large battery.\r\nWarranty:1 year\r\n\r\n', 'images/products/4.jpg'),
(5, 'Realme 9', 1, 20999, 'Storage:6GB RAM,128GB rom.\r\nProcessor: Qualcomm Snapdragon 680.\r\nCamera: 108MP + 8MP + 2MP | 16MP Front Camera.\r\nOperating system: Android 12.\r\nBattery:5000 mAh Lithium Ion Battery.\r\nWarranty:1 year\r\n\r\n\r\n\r\n\r\n', 'images/products/5.jpg'),
(6, 'Boat Rockerz 550', 2, 4999, 'Battery-500mAh battery.\r\nplay-back: upto 20 hour.\r\nDrivers- Its 50mm dynamic drivers help pump out immersive audio all day long, Charging Time 2.5 hours.\r\nPhysical Noise Isolation- It comes with physical Noise Isolation feature for pure audio bliss\r\nwarranty:1 year.\r\n\r\n\r\n\r\n\r\n', 'images/products/6.jpg'),
(7, 'Jbl tune 760nc', 2, 7999, 'Battery:610 mAh.\r\nplay-back: uptp 50 hours.\r\nDrivers:40mm.\r\nACTIVE NOISE CANCELLATION: Tune out the Noise & Tune in to your Music with JBL Tune 760NC wireless headset.\r\nWarranty:1 year.\r\n', 'images/products/7.jpg'),
(8, 'Sony wh ch510', 2, 4990, 'battery:450 mAh.\r\nplay-back: uptp 35 hours.\r\nDrivers:30mm.\r\nVoice-assistant compatible : A simple button press connects you to your smartphone\'s voice assistant to get directions, play music, and communicate with contacts.\r\nWarranty:1 year.\r\n', 'images/products/8.jpg'),
(9, 'Redmi X43 | L43R7-7AIN', 3, 42999, 'Screen size:43(inches).\r\nResolution : 4K Ultra HD.\r\nDisplay: 4K LED Panel.\r\nSound: 30 Watts Output | Dolby Audio | DTS Virtual: X | Dolby Atmos pass through eARC | DTS-HD.\r\nWarranty:1 year.', 'images/products/9.jpg'),
(10, 'Toshiba C350LP', 3, 54990, 'Screen size:50(inches).\r\nResolution : 4K Ultra HD.\r\nDisplay: A+grade panel.\r\nSound:  24 Watts Output | Dolby Atmos | Dolby Digital\r\nWarranty:1 year.', 'images/products/10.jpg'),
(11, 'Sony Bravia KD-43X74K', 3, 69000, 'Screen size:43(inches).\r\nResolution : 4K Ultra HD.\r\nDisplay: X1 4k processor.\r\nSound:  20 Watts Output | Open Baffle Speaker| Dolby Audio | Clear Phase\r\nWarranty:1 year.', 'images/products/11.jpg'),
(12, 'Samsung (RT28A3453S8/HL, Elegant Inox)', 4, 31990, 'Capacity:253 liters.\r\nStar rating:3 star.\r\nFrost Free Refrigerator: auto defrost to stop ice-build up.\r\nWarranty:1 year and 20 year for compressor.\r\n\r\n\r\n', 'images/products/12.jpg'),
(13, 'Haier HRT-683KS', 4, 131900, 'Capacity:628 liters.\r\nStar rating:5 star.\r\nWith Jumbo Ice maker, you not only get extra space in the freezer but also the convenience to detach the ice maker.\r\nWarranty:1 year and 10 year for compressor.', 'images/products/13.jpg'),
(14, 'Lg  GC-M22FAGPL', 4, 167990, 'Capacity:595L|reezer capacity 250 liters and fresh food capacity 345 liters.\r\nstar rating: 2 star.\r\nSensors , Child Lock, Express Freezing, LED Interior Lamp , Deodorizer, Twist - Tray type Icemaker.\r\nWarranty:1 year and 10 year for compressor.\r\n\r\n\r\n\r\n', 'images/products/14.jpg'),
(15, 'ASUS TUF Gaming A15', 5, 76990, 'Processor: AMD Ryzen 5 4600H.\r\nStorage:8gb ram + 512 ssd.\r\nGraphics:4GB NVIDIA GeForce GTX 1650.\r\nOperating System: windows 11.\r\nDisplay: 15.6-inch,144 hz refresh rate.\r\nWarranty:1 year.\r\n\r\n\r\n\r\n\r\n', 'images/products/15.jpg'),
(16, 'mac book air ‎MLY03HN/A', 5, 149990, 'chip: m2 chip.\r\nStorage:8gb ram+512 ssd.\r\nDisplay – The 34.46-centimetre (13.6-inch).\r\nVesatile connectivity  –MacBook Air features a MagSafe charging port, two Thunderbolt ports and a headphone jack.\r\nWarranty:1 year.\r\n\r\n\r\n', 'images/products/16.jpg'),
(17, 'Mi NoteBook Pro ‎XMA2006-FK', 5, 74999, 'Processor:11th Gen Intel Tiger Lake Core i5-11300H processor\r\nStorage:16GB DDR4 512GB SSD\r\nGraphics: Iris Xe Graphics.\r\nOperating System: windows 10.\r\nDisplay: 15.6-inch,144 hz refresh rate.\r\nWarranty:1 year.\r\n\r\n\r\n\r\n\r\n', 'images/products/17.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `returns`
--

CREATE TABLE `returns` (
  `return_id` int(5) NOT NULL,
  `return_date` date NOT NULL,
  `product_id` int(5) NOT NULL,
  `quantity` int(5) NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `stock_id` int(5) NOT NULL,
  `product_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `quantity` int(5) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`stock_id`, `product_id`, `user_id`, `quantity`, `date`) VALUES
(1, 3, 1, 37, '2023-05-16'),
(2, 4, 1, 45, '2023-05-16'),
(3, 5, 1, 15, '2023-05-16'),
(4, 6, 1, 48, '2023-05-16'),
(5, 7, 1, 28, '2023-05-16'),
(6, 8, 1, 64, '2022-01-04'),
(7, 9, 1, 36, '2023-05-16'),
(8, 10, 1, 59, '2023-05-16'),
(9, 11, 1, 57, '2023-05-16'),
(10, 12, 1, 58, '2023-05-16'),
(11, 13, 1, 64, '2022-01-06'),
(12, 14, 1, 66, '2022-01-06'),
(13, 15, 1, 10, '2023-05-16'),
(14, 16, 1, 37, '2023-05-16'),
(15, 17, 1, 30, '2023-05-16'),
(16, 3, 2, 64, '2023-05-16'),
(17, 4, 2, 42, '2023-05-16'),
(18, 5, 2, 78, '2023-05-16'),
(19, 6, 2, 46, '2023-05-16'),
(20, 7, 2, 63, '2023-05-16'),
(21, 8, 2, 24, '2022-01-17'),
(22, 9, 2, 56, '2023-05-16'),
(23, 10, 2, 24, '2023-05-16'),
(24, 11, 2, 35, '2023-05-16'),
(25, 12, 2, 37, '2023-05-16'),
(26, 13, 2, 24, '2022-01-18'),
(27, 14, 2, 25, '2022-01-18'),
(28, 15, 2, 121, '2023-05-16'),
(29, 16, 2, 45, '2023-05-16'),
(30, 17, 2, 110, '2023-05-16'),
(31, 3, 3, 38, '2023-04-14'),
(32, 3, 3, 36, '2023-04-14'),
(33, 5, 3, 22, '2022-01-21'),
(34, 6, 3, 24, '2022-01-21'),
(35, 7, 3, 26, '2022-01-22'),
(36, 8, 3, 22, '2022-01-23'),
(37, 9, 3, 26, '2022-01-23'),
(38, 10, 3, 25, '2022-01-24'),
(39, 11, 3, 22, '2022-01-24'),
(40, 12, 3, 24, '2022-01-25'),
(41, 13, 3, 25, '2022-01-25'),
(42, 14, 3, 22, '2022-01-25'),
(43, 15, 3, 24, '2022-01-26'),
(44, 16, 3, 25, '2022-01-27'),
(45, 17, 3, 22, '2020-01-27'),
(46, 3, 4, 32, '2023-04-14'),
(47, 4, 4, 9, '2022-02-01'),
(48, 5, 4, 8, '2022-02-01'),
(49, 6, 4, 10, '2022-02-02'),
(50, 7, 4, 7, '2022-02-02'),
(51, 8, 4, 8, '2022-02-02'),
(52, 9, 4, 9, '2022-02-03'),
(53, 10, 4, 20, '2023-04-19'),
(54, 11, 4, 7, '2022-02-03'),
(55, 12, 4, 8, '2022-02-04'),
(56, 13, 4, 9, '2022-02-04'),
(57, 14, 4, 10, '2022-02-04'),
(58, 15, 4, 57, '2023-04-27'),
(59, 16, 4, 18, '2023-04-19'),
(60, 17, 4, 10, '2022-02-05'),
(61, 3, 5, 20, '2023-04-14'),
(62, 4, 5, 8, '2022-02-06'),
(63, 5, 5, 9, '2022-02-06'),
(64, 6, 5, 10, '2022-02-07'),
(65, 7, 5, 7, '2022-02-07'),
(66, 8, 5, 8, '2022-02-07'),
(67, 9, 5, 9, '2022-02-08'),
(68, 10, 5, 10, '2022-02-08'),
(69, 11, 5, 7, '2022-02-08'),
(70, 12, 5, 8, '2022-02-09'),
(71, 13, 5, 9, '2022-02-09'),
(72, 14, 5, 10, '2022-02-09'),
(73, 15, 5, 7, '2022-02-10'),
(74, 16, 5, 8, '2022-02-10'),
(75, 17, 5, 9, '2022-02-10'),
(76, 3, 6, 20, '2023-04-14'),
(77, 4, 6, 8, '2022-02-11'),
(78, 5, 6, 9, '2022-02-11'),
(79, 6, 6, 10, '2022-02-12'),
(80, 7, 6, 7, '2022-02-12'),
(81, 8, 6, 8, '2022-02-12'),
(82, 9, 6, 9, '2022-02-13'),
(83, 10, 6, 10, '2022-02-13'),
(84, 11, 6, 7, '2022-02-13'),
(85, 12, 6, 8, '2022-02-14'),
(86, 13, 6, 9, '2022-02-14'),
(87, 14, 6, 10, '2022-02-14'),
(88, 15, 6, 7, '2022-02-15'),
(89, 16, 6, 8, '2022-02-15'),
(90, 17, 6, 9, '2022-02-15'),
(91, 3, 7, 20, '2023-04-14'),
(92, 4, 7, 8, '2022-02-16'),
(93, 5, 7, 9, '2022-02-16'),
(94, 6, 7, 10, '2022-02-17'),
(95, 7, 7, 7, '2022-02-17'),
(96, 8, 7, 8, '2022-02-17'),
(97, 9, 7, 9, '2022-02-18'),
(98, 10, 7, 10, '2022-02-18'),
(99, 11, 7, 7, '2022-02-18'),
(100, 12, 7, 8, '2022-02-19'),
(101, 13, 7, 9, '2022-02-19'),
(102, 14, 7, 10, '2022-02-19'),
(103, 15, 7, 7, '2022-02-20'),
(104, 16, 7, 8, '2022-02-20'),
(105, 17, 7, 9, '2022-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `area_id` int(5) NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `user_type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `area_id`, `address`, `contact`, `user_type`) VALUES
(1, 'Tirth Doshi', 'admin@eledesk.com', 'eledesk', 3, 'Zell Electronic\r\n101 shop no, Shivam apartment,\r\nnear City Gold Cinema,\r\nShyamal Cross road,\r\nAhmedabad Gujarat 380015', '9427242311', 'Admin'),
(2, 'Dagli Jimit', 'dealer@eledesk.com', 'eledesk', 4, 'JD sales\n301 shop no, Naryan Complex,\nnear RTO circle,\nSabarmati,\nAhmedabad Gujarat 380005\n', '8160142221', 'Dealer'),
(3, 'Sumeet Kapadia', 'sumeekapadia7@gamil.com', 'eledesk', 2, 'SK sales\r\n202 shop no, Abhishek complex,\r\nDalmill road,\r\nSurendranagar Gujarat 363001', '9586756176', 'Dealer'),
(4, 'Vishal Parmar', 'w@eledesk.com', 'eledesk', 4, 'VP Sales\r\n105 shop no, Planet Square,\r\n80ft Road,\r\nSurendranagar Gujarat 363002', '8320588234', 'Wholesaler'),
(5, 'Krish Mehta', 'mehtakrish12@gmail.com', 'eledesk', 2, 'MK Sales\r\n103 shop no, Dwarkadhish complex,\r\nMama Kalyan Mandir Chowk,\r\nNaroda,\r\nAhmedabad Gujarat 382330', '8141973173', 'Wholesaler'),
(6, ' Renish Sanghvi', 'sanghvirenish19@gmail.com', 'eledesk', 5, 'RS Sales\r\n4 shop no ,Nemi Complex,\r\nNava Naroda Road,\r\nNaroda,\r\nAhmedabad Gujarat 382330', '9737066224', 'Wholesaler'),
(7, 'Vedant Chavda', 'vedantchavda57@gmail.com', 'eledesk', 3, 'VC Sales\n15 shop no , Venus Atlantis,\nnear Shyamal Cross Road,\nAhemedabd Gujarat 380015', '7016871834', 'Wholesaler');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area_master`
--
ALTER TABLE `area_master`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`discount_id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `order_master`
--
ALTER TABLE `order_master`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `outward`
--
ALTER TABLE `outward`
  ADD PRIMARY KEY (`outward_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `returns`
--
ALTER TABLE `returns`
  ADD PRIMARY KEY (`return_id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area_master`
--
ALTER TABLE `area_master`
  MODIFY `area_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `discount_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_master`
--
ALTER TABLE `order_master`
  MODIFY `order_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `outward`
--
ALTER TABLE `outward`
  MODIFY `outward_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `returns`
--
ALTER TABLE `returns`
  MODIFY `return_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `stock_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
