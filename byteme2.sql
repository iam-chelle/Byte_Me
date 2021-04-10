-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2021 at 10:27 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `byteme`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `item_id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `item_id`, `user_id`, `qty`) VALUES
(3, 1, 2, 13);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_desc` varchar(128) NOT NULL,
  `cat_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_desc`, `cat_img`) VALUES
(1, 'Foods', ''),
(2, 'Beverages', ''),
(3, 'Crafts', ''),
(4, 'Accessories', ''),
(5, 'Shirts', ''),
(6, 'test', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(128) NOT NULL,
  `cust_age` int(11) NOT NULL,
  `cust_gender` varchar(1) NOT NULL,
  `cust_add` varchar(128) NOT NULL,
  `cust_contact` varchar(15) NOT NULL,
  `cust_email` varchar(128) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'A',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_age`, `cust_gender`, `cust_add`, `cust_contact`, `cust_email`, `status`, `user_id`) VALUES
(1, 'Aries Orlina', 21, 'X', 'Jovellar Albay', '09993399389', 'ariesopeniano.orlina@bicol-u.edu.ph', 'A', 0),
(2, 'Jeff Esguerra', 21, 'M', 'Albay Bicol', '09759213248', 'jeffsolano.esguerra@bicol-u.edu.ph', 'A', 0);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(128) NOT NULL,
  `item_details` text NOT NULL,
  `item_code` varchar(50) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `item_price` int(100) NOT NULL,
  `status` varchar(1) NOT NULL COMMENT 'D is for Discontinued and A is for Active',
  `item_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_details`, `item_code`, `cat_id`, `store_id`, `item_price`, `status`, `item_img`) VALUES
(1, 'Guinobatan Longanisa', '', 'LGNSA', 1, 1, 50, 'A', ''),
(2, 'Pilinuts', '', 'PNT', 1, 3, 180, 'A', ''),
(3, 'Bamboo Basket', '', 'BMB', 3, 2, 350, 'A', ''),
(4, 'Abaca Bag', '', 'ABCR', 3, 2, 599, 'A', ''),
(5, 'Original Lambanog', '', 'LBNG', 2, 3, 150, 'A', ''),
(6, 'Tuba', '', 'TBA', 2, 3, 130, 'A', ''),
(7, 'Puto Macapuno', '', 'PMCP', 1, 4, 30, 'A', ''),
(8, 'Puto Rice', '', 'PRC', 1, 4, 30, 'A', ''),
(9, 'Pilinut Keychain', '', 'PKCH', 4, 5, 20, 'A', ''),
(10, 'Local Bracelet', '', 'BRC', 4, 5, 30, 'A', ''),
(11, 'Abaca Basket', '', 'ABC', 3, 5, 250, 'A', ''),
(12, 'Camalig Special Pinangat', '', 'CPINGT', 1, 6, 100, 'A', ''),
(13, 'Pili Jam', '', 'PLJ', 1, 6, 100, 'D', ''),
(14, 'Special Bicol Express', '', 'BCX', 1, 7, 300, 'A', ''),
(15, 'Special Laing', '', 'SLNG', 1, 7, 300, 'A', ''),
(16, 'Original Tabak', '', 'OTK', 3, 8, 200, 'A', ''),
(17, 'Ceramics', '', 'CRM', 3, 9, 350, 'A', ''),
(18, 'Money Keeper', '', 'MNYK', 3, 9, 100, 'A', ''),
(19, 'Refrigerator Magnet', '', 'RGM', 4, 10, 50, 'A', ''),
(20, 'Bicol Shirt', '', 'BCLS', 5, 10, 250, 'A', ''),
(21, 'Tilmok', '', 'TMK', 1, 1, 50, 'A', ''),
(22, 'Special Biko', '', 'SPCB', 1, 4, 80, 'A', ''),
(23, 'Suman Malagkit', '', 'SMMKT', 1, 2, 10, 'A', ''),
(24, 'Suman Malagkit', '', 'SMMKT', 1, 2, 10, 'A', ''),
(25, 'Pili Candy', '', 'PLCDY', 1, 2, 30, 'A', ''),
(26, 'Pili Brownies', '', 'PLBWN', 1, 4, 200, 'A', ''),
(27, 'Pili Cake', '', 'PLCKE', 1, 4, 130, 'A', ''),
(28, 'Rice Wine', '', 'RCWNE', 2, 8, 300, 'A', ''),
(29, 'Nipa Wine', '', 'NPWNE', 2, 9, 100, 'A', ''),
(30, 'Buri Bag', '', 'BRBG', 3, 5, 100, 'A', ''),
(31, 'Abaca Lampshade', '', 'ABLMP', 3, 10, 200, 'A', ''),
(32, 'Sea Shell Lamp', '', 'SSLMP', 3, 10, 500, 'A', ''),
(33, 'Ceramic Pot', '', 'CRMPT', 3, 9, 150, 'A', ''),
(34, 'Ceramic Mugs', '', 'CRMMG', 3, 9, 150, 'A', ''),
(35, 'Ceramic Pickel Jar', '', 'CRMPJ', 3, 9, 150, 'A', ''),
(36, 'Ceramic Teacups', '', 'CRMTC', 3, 9, 150, 'A', ''),
(37, 'Fan Keychain ', '', 'FKCH', 4, 5, 20, 'A', ''),
(38, 'Sili Keychain ', '', 'SKCH', 4, 5, 20, 'A', ''),
(39, 'Sili with Leaves Keychain ', '', 'SLKCH', 4, 5, 20, 'A', ''),
(40, 'Oragon Unisex Jacket', '', 'ORNUNS', 5, 7, 200, 'A', ''),
(41, 'Unisex Kids Shirt', '', 'UNKS', 5, 9, 130, 'A', ''),
(42, 'Magayon Shirt', '', 'MGSRT', 5, 9, 130, 'A', ''),
(43, 'Bicol Express Shirt', '', 'BCLXPRSSRT', 5, 10, 100, 'A', ''),
(44, 'Dye Shirts', '', 'DYSRT', 5, 10, 200, 'A', ''),
(45, 'Black Shirt', '', 'BLSRT', 5, 10, 200, 'A', ''),
(46, 'Blue Shirt', '', 'BLUSRT', 5, 10, 200, 'A', ''),
(47, 'White Shirt', '', 'BLSRT', 5, 10, 200, 'A', '');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `qtty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(1) NOT NULL COMMENT 'P is for Pending and D is for Delivered'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `store_id` int(11) NOT NULL,
  `store_name` varchar(128) NOT NULL,
  `store_owner` varchar(128) NOT NULL,
  `sell_age` int(3) NOT NULL,
  `sell_gender` varchar(1) NOT NULL,
  `add_id` int(1) NOT NULL,
  `sell_contact` varchar(11) NOT NULL,
  `sell_email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`store_id`, `store_name`, `store_owner`, `sell_age`, `sell_gender`, `add_id`, `sell_contact`, `sell_email`) VALUES
(1, 'D\'Juan Dela Cruz Specials', 'Juan dela Cruz', 45, 'M', 1, '09759213248', 'Djuandelacruzspecials@gmail.com'),
(2, 'Gierald\'s Native Products', 'Gierald Baretto', 32, 'M', 1, '9356789218', 'gieraldsnative@gmail.com'),
(3, 'Gomez\'s Store', 'Daniel Gomez', 30, 'M', 2, '9456789908', 'gomezdaniel@gmail.com'),
(4, 'Jenny\'s Special Puto', 'Jenny Domingo', 40, 'F', 2, '9367898765', 'jennysputo012@gmail.com'),
(5, 'Rochelle\'s Accesories', 'Rochelle Diaz', 54, 'F', 3, '9503483902', 'rochellediaz@gmail.com'),
(6, 'Aling Gelay Special Pinangat', 'Angelica Salvacion', 56, 'F', 4, '9267854121', 'alinggelay@gmail.com'),
(7, 'Tan\'s Store', 'Tan Conrad', 25, 'M', 4, '9756754555', 'Tinconrad@gmail.com'),
(8, 'Best of Tabacco', 'Matalo Manalo', 55, 'M', 5, '9456665333', 'TabaccoPH@gmail.com'),
(9, 'Cadag\'s Store', 'Ezekiel Cadag', 24, 'M', 6, '9365478888', 'ezekielcadag@gmail.com'),
(10, 'Ica\'s Shop', 'Ica Kun', 36, 'F', 7, '9112233445', 'Icakun@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `storeadd`
--

CREATE TABLE `storeadd` (
  `add_id` int(11) NOT NULL,
  `add_desc` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `storeadd`
--

INSERT INTO `storeadd` (`add_id`, `add_desc`) VALUES
(1, 'Guinobatan'),
(2, 'Ligao'),
(3, 'Daraga'),
(4, 'Camalig'),
(5, 'Tabacco'),
(6, 'Tiwi'),
(7, 'Legazpi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `usertype` varchar(2) NOT NULL DEFAULT 'C' COMMENT 'A is for Admin and C is for Customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `usertype`) VALUES
(1, 'Admin', 'Admin123', 'A'),
(2, 'Ton', 'tonton', 'C'),
(3, 'Jep', 'Es9uerra', 'C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`store_id`);

--
-- Indexes for table `storeadd`
--
ALTER TABLE `storeadd`
  ADD PRIMARY KEY (`add_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `store_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `storeadd`
--
ALTER TABLE `storeadd`
  MODIFY `add_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
