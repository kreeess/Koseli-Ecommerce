-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2025 at 08:41 AM
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
(1, 'Bracelets', 'Handmade'),
(2, 'Key-chain', 'Handmade'),
(3, 'Pen Holder', 'Handmade'),
(4, 'Bone Keychain', 'buffalo bone'),
(5, 'Hat', 'Woolen'),
(6, 'Doll', 'Felt'),
(7, 'Singing Bowl', 'Machine Made'),
(8, 'Wooden statue', 'Carved'),
(9, 'Mask', 'Wooden');

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
(1, 'Kabir', 'Deula', 'kabirdeula167@gmail.com', 'Wishing a bright future', 'Dear Aayusha, \r\nBest of luck for your future. \r\nMay your business grow well.\r\nYours,\r\nKabir Deula'),
(3, 'Cristiano', 'Ronaldo', 'cr7@gmail.com', 'About Pricing', 'Price is very affordable and quality is nice as well\r\n');

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
(22, 'White Howlite Stone Bracelet ', 'This White Howlite Stone Bracelet provide soothing energy, healing, improve focus, and assist you on your quest for greater spiritual knowledge.', 200.00, 'product33.jpg', 1, 12),
(24, 'Pink Jasper Bracelet ', 'Pink Jasper Bracelet imagine vast sandy beaches and rocky mountains. The brown, beige and cream earth tones of this gem make it especially popular when paired with aged bone and gold. Benefits for Meditation and giving different healing energy.', 250.00, 'product36.jpg', 1, 15),
(25, 'Picasso Jasper Stone Bracelet ', 'This Picasso Jasper Stone Bracelet provide soothing energy, improve focus, and assist you on your quest for greater spiritual knowledge..\r\n\r\n', 250.00, 'product37.jpg', 1, 15),
(26, 'Couple Bracelet', 'A timeless symbol of love and connection, this couple bracelet set is designed to keep you and your partner close at heart, no matter the distance. Crafted with care, it’s a perfect blend of style and sentiment, making it an ideal gift for anniversaries, ', 550.00, 'product35.jpg', 1, 24),
(27, 'Pen Holder with Buddha Statue', 'This Pen Holder with Buddha Statue can be perfect gift items for special guests in seminars, events, and other occasions. Lord Buddha taught wisdom, kindness, patience, generosity and compassion were important virtues to the world.', 1000.00, 'product30.jpg', 3, 14),
(28, 'Pen Holder with Ganesh Statue', 'This Pen Holder with Ganesh Statue can be perfect gift items for special guests in seminars, events, and other occasions. Ganesh, also called Ganapati, elephant-headed Hindu god of beginnings, who is traditionally worshipped before any major enterprise an', 1000.00, 'product31.jpg', 3, 12),
(29, 'Pen Holder with Saraswati Statue ', 'This Pen Holder with Saraswati Statue can be perfect gift items for special guests in seminars, events, and other occasions. Saraswati is a Hindu goddess who represents education, creativity, and music.', 1000.00, 'product32.jpg', 3, 12),
(30, 'Felt Sparrow Key Ring', 'The product resembles the beautiful bird Sparrow, it looks very favourable and unique. The prominent thought to use felt item in key ring has influenced many lovely people to keep there valuable things in it, So that they could easily find if they lost.', 100.00, 'product-20.jpg', 2, 18),
(31, ' Red Bird Felt Key Ring Red Bird Felt Key Ring', 'The product resembles the beautiful Bird, it looks very favourable and unique. The prominent thought to use felt item in key ring has influenced many lovely people to keep there valuable things in it, So that they could easily find if they lost.', 100.00, 'product-19.jpg', 2, 15),
(32, 'Woolen Animal Hat', 'This is woolen animal design earflap hats with inside polar fleece lining. Nepal Handicraft Product brings variety of woolen animal cap that warms your beautiful body with warm cozy soft woolen clothes throughout  the winter', 400.00, 'product24.jpg', 5, 13),
(33, 'Woolen Animal Hat', 'This is woolen animal design earflap hats with inside polar fleece lining. Nepal Handicraft Product brings variety of woolen animal cap that warms your beautiful body with warm cozy soft woolen clothes throughout  the winter', 400.00, 'product25.jpg', 5, 10),
(34, 'Woolen Animal Hat', 'This is woolen animal design earflap hats with inside polar fleece lining. Nepal Handicraft Product brings variety of woolen animal cap that warms your beautiful body with warm cozy soft woolen clothes throughout  the winter', 400.00, 'product26.jpg', 5, 15),
(35, 'Turtle Felt Doll', 'For goodluck', 400.00, 'product-22.jpg', 6, 8),
(36, 'Elephant felt doll', 'doll made with love.', 400.00, 'product-23.jpg', 6, 12),
(37, 'Fish doll', 'Pink fish doll.', 400.00, 'product-21.jpg', 6, 13),
(38, 'Singing Bowl', '2*2 size singing bowl', 500.00, 'product46.jpg', 7, 21),
(39, 'Singing Bowl', '3*3 singing bowl', 750.00, 'product45.jpg', 7, 8),
(40, 'Wooden Carved Pashupatinath Temple', 'The design is fully carved in wooden material by Nepalese people.', 7000.00, 'product27.jpg', 8, 4),
(41, 'Wooden Photo Frame', 'Nepal Handicraft Product offers variety of  wooden carved design to fill your beauty with beautiful art by your side.', 4000.00, 'product28.jpg', 8, 14),
(42, 'Onni Wooden Mask', 'It is a Antique hand crafted wooden face masks that resembles the existence of wooden culture where many ancient people used to share there valuable information through there sculpture art like Antique Ganesh masks, Kaal Bhairaba and so on. ', 2000.00, 'mask6.jpg', 9, 8),
(43, 'Ganesh wooden mask', 'It is a Antique hand crafted wooden face masks that resembles the existence of wooden culture where many ancient people used to share there valuable information through there sculpture art like Antique Ganesh masks, Kaal Bhairaba and so on. ', 2000.00, 'mask5.jpg', 9, 4),
(44, 'Bhairab Wooden Mask', 'It is a Antique hand crafted wooden face masks that resembles the existence of wooden culture where many ancient people used to share there valuable information through there sculpture art like Antique Ganesh masks, Kaal Bhairaba and so on. ', 2000.00, 'mask4.jpg', 9, 8),
(45, 'Skull Wooden Mask', 'It is a Antique hand crafted wooden face masks that resembles the existence of wooden culture where many ancient people used to share there valuable information through there sculpture art like Antique Ganesh masks, Kaal Bhairaba and so on. ', 1500.00, 'mask3.jpg', 9, 7),
(46, 'Wooden Ox Mask', 'It is a Antique hand crafted wooden face masks that resembles the existence of wooden culture where many ancient people used to share there valuable information through there sculpture art like Antique Ganesh masks, Kaal Bhairaba and so on. ', 1800.00, 'mask1.jpg', 9, 6),
(47, 'Wooden Mask Handmade', 'It is a Antique hand crafted wooden face masks that resembles the existence of wooden culture where many ancient people used to share there valuable information through there sculpture art like Antique Ganesh masks, Kaal Bhairaba and so on. ', 1500.00, 'mask2.jpg', 9, 5),
(48, 'Bone Keychain', 'This is Nepal handmade product each design of buffalo’s bones. These are finely carved and well painted with shined. Bone Keychains or Bone Key Rings are used to a durable nylon thread with nicely knitting.', 100.00, 'Keychain1.jpg', 4, 20),
(49, 'Bone Keychain', 'This is Nepal handmade product each design of buffalo’s bones. These are finely carved and well painted with shined. Bone Keychains or Bone Key Rings are used to a durable nylon thread with nicely knitting.', 100.00, 'Keychain2.jpg', 4, 18),
(50, 'Bone Keychain', 'This is Nepal handmade product each design of buffalo’s bones. These are finely carved and well painted with shined. Bone Keychains or Bone Key Rings are used to a durable nylon thread with nicely knitting.', 100.00, 'Keychain3.jpg', 4, 16),
(51, 'Bone Keychain', 'This is Nepal handmade product each design of buffalo’s bones. These are finely carved and well painted with shined. Bone Keychains or Bone Key Rings are used to a durable nylon thread with nicely knitting.', 100.00, 'Keychain4.jpg', 4, 10),
(52, 'Bone Keychain', 'This is Nepal handmade product each design of buffalo’s bones. These are finely carved and well painted with shined. Bone Keychains or Bone Key Rings are used to a durable nylon thread with nicely knitting.', 100.00, 'Keychain5.jpg', 4, 12),
(53, 'Bone Keychain', 'This is Nepal handmade product each design of buffalo’s bones. These are finely carved and well painted with shined. Bone Keychains or Bone Key Rings are used to a durable nylon thread with nicely knitting.', 100.00, 'Keychain6.jpg', 4, 10),
(54, 'Bone Keychain', 'This is Nepal handmade product each design of buffalo’s bones. These are finely carved and well painted with shined. Bone Keychains or Bone Key Rings are used to a durable nylon thread with nicely knitting.', 100.00, 'Keychain7.jpg', 4, 12),
(55, 'Bone Keychain', 'This is Nepal handmade product each design of buffalo’s bones. These are finely carved and well painted with shined. Bone Keychains or Bone Key Rings are used to a durable nylon thread with nicely knitting.', 100.00, 'Keychain9.jpg', 4, 16);

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
(11, 'rohanac', 'Rohan', 'Acharya', 'rohanacharya38@gmail.com', 'rohanacharya38@gmail.com', 'users'),
(12, 'krees', 'Krees', 'Maharjan', 'Kreesmhz00@gmail.com', 'krees123', 'admin'),
(13, 'Ronaldo', 'Cristiano', 'Ronaldo', 'cr7@gmail.com', 'Ronaldo123', 'users');

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
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `messagebox`
--
ALTER TABLE `messagebox`
  MODIFY `mID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `order_products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
