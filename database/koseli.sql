-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2024 at 09:22 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koseli`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(11) NOT NULL,
  `categoryName` varchar(50) NOT NULL,
  `categoryType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`, `categoryType`) VALUES
(1, 'Sunglasses', 'DIY'),
(2, 'Scrunchies', 'Handmade'),
(3, 'Bhai Tika', 'DIY'),
(4, 'Dog', 'Handmade');

-- --------------------------------------------------------

--
-- Table structure for table `messagebox`
--

CREATE TABLE `messagebox` (
  `mID` int(11) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `lName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subText` varchar(50) NOT NULL,
  `messageField` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messagebox`
--

INSERT INTO `messagebox` (`mID`, `fName`, `lName`, `email`, `subText`, `messageField`) VALUES
(1, 'Kabir', 'Deula', 'kabirdeula167@gmail.com', 'Wishing a bright future', 'Dear Aayusha, \r\nBest of luck for your future. \r\nMay your business grow well.\r\nYours,\r\nKabir Deula');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `payment` text NOT NULL,
  `city` text NOT NULL,
  `province` text NOT NULL,
  `street` text NOT NULL,
  `postal` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `order_products_id` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productID` int(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `productDesc` varchar(255) NOT NULL,
  `productPrice` decimal(10,2) NOT NULL,
  `productPhoto` varchar(255) NOT NULL,
  `categoryID` int(11) DEFAULT NULL,
  `qty` int(11) NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `productName`, `productDesc`, `productPrice`, `productPhoto`, `categoryID`, `qty`) VALUES
(1, 'Dog Scarf Collar', 'Give your Puppy a new look', 120.00, 'product-6.jpg', 4, 5),
(2, 'Beige Sunglasses', 'Sunglasses to protect your eyes.', 700.00, 'product-1.jpg', 1, 5),
(3, 'Glov Scrunchies', 'Scrunchies made with love', 75.00, 'product-2.jpg', 2, 5),
(4, 'Bhai Masala', 'Gift your brother something special this Bhai Tika', 1250.00, 'product-3.jpg', 3, 5),
(5, 'Didi lai Koseli', 'Gift your sister something special this Bhai Tika', 1800.00, 'product-4.jpg', 3, 5),
(6, 'Bhai lai Koseli', 'Gift your brother something special this Bhai Tika', 1800.00, 'product-5.jpg', 3, 5),
(9, 'bags', 'handmade bags', 1000.00, 'product-7.jpg', 1, 5),
(10, 'socks', 'beautiful socks for winter', 250.00, 'product-8.jpg', 2, 5),
(11, 'bracelets', 'couple bracelets for your loved one', 500.00, 'product-9.jpg', 3, 5),
(12, 'hair accessories', 'decorate your hair', 300.00, 'product-10.jpg', 3, 5),
(13, 'room decoration', 'make your room even more attractive', 600.00, 'product-11.jpg', 4, 5),
(14, 'Sweaters', 'woolen sweater ', 3500.00, 'product-12.jpg', 1, 5),
(15, 'makeup box', 'handmade wooden makeup box', 2000.00, 'product-13.jpg', 3, 5),
(17, 'greeting cards', 'handmade cards', 200.00, 'product-14.jpg', 2, 5),
(18, 'paintings', 'handmade painting for your rooms', 5000.00, 'product-15.jpg', 2, 5),
(19, 'hats', 'pretty hats', 3500.00, 'product-16.jpg', 2, 5),
(20, 'scarf', 'handmade scarf', 600.00, 'product-17.jpg', 4, 5),
(21, 'toys', 'handmade dolls', 700.00, 'product-18.jpg', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uID` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `userPassword` varchar(100) NOT NULL,
  `userType` varchar(10) DEFAULT 'users'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uID`, `userName`, `firstName`, `lastName`, `email`, `userPassword`, `userType`) VALUES
(1, 'bijinamaharjan', 'Bijina', 'Maharjan', 'bijinamaharjan65@gmail.com', 'Bijin@123', 'admin'),
(2, 'kabirdeula', 'Kabir', 'Deula', 'kabirdeula167@gmail.com', 'lunala', 'users'),
(3, 'sanishamaharjan', 'Sanisha', 'Maharjan', 'msani07@gmail.com', 'sanishabts', 'users'),
(4, 'smriti', 'Smriti ', 'Maharjan', 'smritimaharjan720@gmail.com', 'smriti98760', 'users'),
(5, 'aayusha', 'Aayusha', 'Maharjan', 'aayushamhrzn@gmail.com', 'juicebar', 'admin'),
(6, 'snehamanandhar', 'Sneha', 'Manandhar', 'manandharsneha730@gmail.com', '12345678', 'users'),
(7, 'muskanshilakar', 'Muskan', 'Shilakar', 'mshilakar01@gmail.com', '125478963', 'users'),
(8, 'lastamaharjan', 'Lasta', 'Maharjan', 'lastamaharjan@gmail.com', '1548797611', 'users'),
(9, 'nikitashahi', 'Nikita', 'Shahi', 'nikitashahi@gmail.com', '147859923', 'users'),
(11, 'rohanac', 'Rohan', 'Acharya', 'rohanacharya38@gmail.com', 'rohanacharya38@gmail.com', 'users');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `messagebox`
--
ALTER TABLE `messagebox`
  ADD PRIMARY KEY (`mID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`order_products_id`),
  ADD KEY `productID` (`productID`),
  ADD KEY `orderID` (`orderID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `categoryID` (`categoryID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messagebox`
--
ALTER TABLE `messagebox`
  MODIFY `mID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `order_products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`uID`);

--
-- Constraints for table `order_products`
--
ALTER TABLE `order_products`
  ADD CONSTRAINT `order_products_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`),
  ADD CONSTRAINT `order_products_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `products` (`productID`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categoryID`) REFERENCES `categories` (`categoryID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
