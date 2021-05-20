-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 06:53 PM
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
  `order_number` varchar(64) NOT NULL,
  `item_id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `store_id` int(11) NOT NULL,
  `qty` int(10) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'P' COMMENT 'P is for Pending and C is for Checkout',
  `cart_status` varchar(1) NOT NULL DEFAULT 'P',
  `checkout_status` varchar(1) NOT NULL DEFAULT 'X'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `order_number`, `item_id`, `user_id`, `store_id`, `qty`, `status`, `cart_status`, `checkout_status`) VALUES
(1, '2859360a65a8d71bff', 5, 2, 3, 10, 'C', 'C', 'I'),
(2, '2859360a65a8d71bff', 28, 2, 8, 10, 'C', 'C', 'I'),
(3, '2859360a65a8d71bff', 29, 2, 9, 10, 'C', 'C', 'I'),
(4, '2859360a65a8d71bff', 58, 2, 7, 10, 'C', 'C', 'I'),
(5, '2740260a65f2e3934c', 12, 2, 6, 100, 'C', 'C', 'I'),
(6, '2740260a65f2e3934c', 45, 2, 10, 25, 'C', 'C', 'I'),
(7, '2740260a65f2e3934c', 58, 2, 7, 20, 'C', 'C', 'I'),
(8, '2740260a65f2e3934c', 36, 2, 9, 54, 'C', 'C', 'I'),
(10, '2740260a65f2e3934c', 3, 2, 2, 100, 'C', 'C', 'I'),
(11, '2740260a65f2e3934c', 18, 2, 9, 2000, 'C', 'C', 'I'),
(12, '2752460a65f73c9ffd', 12, 2, 6, 99, 'C', 'C', 'I'),
(13, '2752460a65f73c9ffd', 15, 2, 7, 10, 'C', 'C', 'I'),
(14, '2752460a65f73c9ffd', 14, 2, 7, 9, 'C', 'C', 'I'),
(15, '2752460a65f73c9ffd', 21, 2, 1, 150, 'C', 'C', 'I'),
(16, '6307860a66f6f5da5d', 16, 2, 8, 500, 'C', 'C', 'I'),
(17, '6307860a66f6f5da5d', 11, 2, 5, 70, 'C', 'C', 'I'),
(18, '5781460a673ca532c7', 31, 2, 10, 70, 'C', 'C', 'I'),
(19, '4005060a67906cb80e', 3, 2, 2, 1000, 'C', 'C', 'I'),
(20, '6993660a67b5a9d3c6', 5, 2, 3, 9, 'C', 'C', 'I'),
(21, '6993660a67b5a9d3c6', 28, 2, 8, 10, 'C', 'C', 'I'),
(22, '6993660a67b5a9d3c6', 29, 2, 9, 10, 'C', 'C', 'I'),
(23, '2885760a67cfb4f65a', 11, 2, 5, 1, 'C', 'C', 'I'),
(24, '9383960a68732ab475', 16, 2, 8, 1, 'C', 'C', 'I'),
(25, '9383960a68732ab475', 60, 2, 1, 5, 'C', 'C', 'I'),
(26, '3129860a68f104b1c0', 2, 6, 3, 50, 'C', 'C', 'I'),
(27, '3129860a68f104b1c0', 7, 6, 4, 10, 'C', 'C', 'I'),
(28, '3129860a68f104b1c0', 14, 6, 7, 2, 'C', 'C', 'I'),
(29, '3129860a68f104b1c0', 13, 6, 6, 5, 'C', 'C', 'I'),
(30, '4747960a68f86c6591', 15, 6, 7, 7, 'C', 'C', 'I'),
(31, '', 27, 6, 4, 5, 'P', 'P', 'X'),
(32, '3129860a68f104b1c0', 26, 6, 4, 5, 'C', 'C', 'I'),
(33, '', 49, 6, 1, 5, 'P', 'P', 'X'),
(35, '', 5, 6, 3, 1, 'P', 'P', 'X'),
(36, '4747960a68f86c6591', 28, 6, 8, 4, 'C', 'C', 'I'),
(37, '4200960a6905d50565', 20, 7, 10, 10, 'C', 'C', 'I'),
(38, '4200960a6905d50565', 40, 7, 10, 10, 'C', 'C', 'I'),
(39, '4200960a6905d50565', 41, 7, 10, 15, 'C', 'C', 'I'),
(40, '4260260a69075d0264', 42, 7, 9, 15, 'C', 'C', 'I'),
(41, '4260260a69075d0264', 43, 7, 10, 20, 'C', 'C', 'I'),
(42, '4260260a69075d0264', 44, 7, 10, 1, 'C', 'C', 'I'),
(43, '', 45, 7, 10, 2, 'P', 'P', 'X'),
(44, '', 46, 7, 10, 11, 'P', 'C', 'X'),
(45, '', 47, 7, 10, 1, 'P', 'P', 'X'),
(46, '4200960a6905d50565', 19, 7, 10, 150, 'C', 'C', 'I'),
(47, '4260260a69075d0264', 56, 7, 5, 11, 'C', 'C', 'I'),
(48, '2692460a6915b3056e', 58, 8, 7, 5, 'C', 'C', 'I'),
(49, '7526360a6913cdbfe1', 28, 8, 8, 7, 'C', 'C', 'I'),
(50, '2692460a6915b3056e', 29, 8, 9, 6, 'C', 'C', 'I'),
(51, '7526360a6913cdbfe1', 18, 8, 9, 10, 'C', 'C', 'I'),
(52, '1479660a6914c5bfe2', 30, 8, 5, 4, 'C', 'C', 'I'),
(53, '1560760a691631ede3', 33, 8, 9, 5, 'C', 'C', 'I'),
(54, '1560760a691631ede3', 34, 8, 9, 4, 'C', 'C', 'I'),
(55, '', 36, 8, 9, 10, 'P', 'P', 'X'),
(56, '7526360a6913cdbfe1', 4, 8, 2, 1, 'C', 'C', 'I');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_desc` varchar(128) NOT NULL,
  `cat_img` text NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Active' COMMENT 'Active / Maintenance'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_desc`, `cat_img`, `status`) VALUES
(1, 'Foods', 'FR-F(1).jpg', 'Active'),
(2, 'Beverages', 'FR-B(2).jpg', 'Active'),
(3, 'Crafts', 'FR-C(3).jpg', 'Active'),
(4, 'Accessories', 'FR-A(4).jpg', 'Active'),
(5, 'Shirts', 'FR-S(5).jpg', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `user_ref_num` varchar(64) NOT NULL,
  `cust_name` varchar(128) NOT NULL,
  `cust_age` int(11) NOT NULL,
  `cust_gender` varchar(1) NOT NULL,
  `cust_add` varchar(128) NOT NULL,
  `cust_contact` varchar(15) NOT NULL,
  `cust_email` varchar(128) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `user_ref_num`, `cust_name`, `cust_age`, `cust_gender`, `cust_add`, `cust_contact`, `cust_email`, `status`) VALUES
(2, '8261714502782712', 'Jeff Esguerra', 22, 'M', 'Albay Bicol', '09759213248', 'jeffsolano.esguerra@bicol-u.edu.ph', 'A'),
(3, '9616541632184020', 'Jeff Esguerra', 21, 'M', 'Albay Bicol', '09759213248', 'ariesopeniano.orlina@bicol-u.edu.ph', 'A'),
(4, '1177950468539284', 'Jeff Esguerra', 22, '', 'Albay Bicol', '09759213249', 'ariesoniano.orlina@bicol-u.edu.ph', 'A'),
(5, '191540192659213', 'Rochelle Balmas', 21, 'F', 'Alimsog Sto. Domingo Albay Bicol', '09325654123', 'rochellediaz.balmas@bicol-u.edu.ph', 'A'),
(6, '1915638921460800', 'Gieraldine Gallano', 20, 'F', 'Masbate City', '09765465123', 'gieraldinedilao.gallano@bicol-u.edu.ph', 'A'),
(7, '1035025809576217', 'Myra Esguerra', 24, 'F', 'Zone 4 Cabraran Jovellar Albay', '09480087129', 'myra@gmail.com', 'A'),
(8, '9784279758605465', 'Dustine Jade Cambe', 23, 'M', 'Antipolo Manila', '09124343234', 'jadecambe@gmai,.com', 'A');

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
  `item_img` text NOT NULL,
  `cat_display` int(1) NOT NULL DEFAULT 0 COMMENT '1 is for category display and 0 is not',
  `Featured` int(1) NOT NULL DEFAULT 0 COMMENT '1 for featured photo and 0 is for not',
  `latest_prod` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_details`, `item_code`, `cat_id`, `store_id`, `item_price`, `status`, `item_img`, `cat_display`, `Featured`, `latest_prod`) VALUES
(1, 'Guinobatan Longanisa', 'Longganisa de Guinobatan is a Filipino pork sausage originating from the town of Guinobatan in Albay, Philippines. It is a type of de recado longganisa with different varieties', 'LGNSA', 1, 1, 50, 'A', 'long-5.jpg', 0, 0, '2021-04-11'),
(2, 'Pilinuts', ' pili nut is a rich, buttery nut. Its taste is unique, often described as a cross between a macadamia nut and a cashew nut, but with a stronger, more tender flavor.', 'PNT', 1, 3, 180, 'A', 'l1.jpg', 0, 0, '2021-04-11'),
(3, 'Bamboo Basket', 'are constructed from bamboo and rattan.', 'BMB', 3, 2, 350, 'A', 'C-bamboo-basket.jpg', 0, 0, '2021-04-11'),
(4, 'Abaca Bag', 'Pure abaca round sling bag made locally in Bicol.', 'ABCR', 3, 2, 599, 'A', 'f4.jpg', 0, 0, '2021-04-11'),
(5, 'Original Lambanog', 'Lambanog or coconut wine or vodka. This local wine is essentially processed tuba and well known for its strength that ordinarily carries regarding 80 to 90 proof alternatives.', 'LBNG', 2, 3, 150, 'A', 'B-lambanog.jpg', 0, 1, '2021-04-11'),
(6, 'Tuba', 'a non-alcoholic version made from fresh coconut sap. Tuba is stored in large bottle gourds mixed with coconut milk, ice, and sugar. It is usually topped with walnuts and diced fruit.', 'TBA', 2, 3, 130, 'A', 'B-tuba.jpg', 1, 0, '2021-04-11'),
(7, 'Puto Macapuno', 'steamed rice cakes, traditionally made from slightly fermented rice dough (galapong) and is stuffed with coconut caramelized filling.', 'PMCP', 1, 4, 30, 'A', 'F-puto-macapuno.jpg', 0, 0, '2021-04-12'),
(8, 'Puto Rice', '', 'PRC', 1, 4, 30, 'D', 'F-puto-rice.jpg', 0, 0, '2021-04-11'),
(9, 'Pilinut Keychain', 'Bicol Keychains made by ceramics and the raw pili,oftenly used as a signature souvenir from Bicol.', 'PKCH', 4, 5, 20, 'A', 'A-a3.jpg', 1, 0, '2021-04-11'),
(10, 'Local Bracelet', 'Check out our local bracelet selection for the very best in unique or custom, handmade pieces made of wood beads.', 'BRC', 4, 5, 30, 'A', 'A-local-bracelet.jpg', 0, 0, '2021-04-11'),
(11, 'Abaca Basket', 'a woven of natural fibers of abaca in a tight-cord pattern. ', 'ABC', 3, 5, 250, 'A', 'C-abaca-basket.jpg', 0, 0, '2021-04-11'),
(12, 'Camalig Special Pinangat', 'Pinangat is a famous native chili-hot delicacy of the town of Camalig. A vegetable dish cooked in coconut milk mixed with select spices and gabi.', 'CPINGT', 1, 6, 100, 'A', 'F-pinangat.jpg', 0, 0, '2021-04-01'),
(13, 'Pili Jam', 'This recipe is a perfect dessert on its own, or as a spread on rice-based snacks  or just plain bread. Made from rich coconut milk and raw sugar.', 'PLJ', 1, 6, 100, 'A', 'F-pili-jam.jpg', 0, 0, '2021-04-11'),
(14, 'Special Bicol Express', 'Pork Bicol Express is a type of Filipino spicy pork dish. Its main source of flavor is derived from shrimp paste, which is locally known as bagoong.', 'BCX', 1, 7, 300, 'A', 'F-bicol express.jpg', 0, 0, '2021-04-11'),
(15, 'Special Laing', 'Laing na Gabi or simply Laing is a type of Filipino vegetable dish. Taro leaves are sliced and dried for a few days before being cooked in coconut milk.', 'SLNG', 1, 7, 300, 'A', 'F-laing.jpg', 0, 0, '2021-04-11'),
(16, 'Tabaco Tabak', 'also known as \"sundang\". Made of steel and wood as a handle.', 'OTK', 3, 8, 200, 'A', 'C-tabak.jpg', 0, 0, '2021-04-11'),
(18, 'Money Keeper', 'Ceramic material, cute pig for fecoration. Banks pig, that will attract and encourage your little one to start saving money and develop a good habit.', 'MNYK', 3, 9, 100, 'A', 'C-alkansya.jpg', 0, 1, '2021-04-11'),
(19, 'Refrigerator Magnet', 'Ceramic magnet set. This set of six magnets was made by stamping a speckled brown clay with my own handmade stamps.', 'RGM', 4, 10, 50, 'A', 'C-ref-magnet.jpg', 0, 0, '2021-04-11'),
(20, 'Bicol Shirt', 'personalize shirts and corporate give away using photographic, hand painting, embroidery, dye and digital printing.', 'BCLS', 5, 10, 250, 'A', 'clothes.jpg', 1, 0, '2021-04-11'),
(21, 'Tilmok', 'Tilmok is a staple food in the Philippines\' Bicol region due to abundance of crab and coconut. It is steamed crab meat with coconut.', 'TMK', 1, 1, 50, 'A', 'F-tilmok.png', 0, 1, '2021-04-11'),
(22, 'Special Biko', 'is a sweet rice cake from the Bicol (a type of kalamay dish). It is made of coconut milk, brown sugar, and glutinous rice. It is usually topped with latik.', 'SPCB', 1, 4, 80, 'A', 'F-biko.jpg', 0, 0, '2021-04-11'),
(23, 'Suman Malagkit', 'The Suman Malagkit Recipe is a famous delicacy in the Bicol. The ingredients consist of sweet glutinous rice wrapped in banana leaves and served as meryenda.', 'SMMKT', 1, 2, 10, 'A', 'F-suman1.jpg', 0, 0, '2021-04-11'),
(24, 'Suman Ibos', 'Suman sa ibos is a simple kakanin recipe. This recipe requires glutinous rice and coconut milk and the wrap is made from buri or palm leaves.', 'SMIB', 1, 4, 10, 'A', 'F-suman-ibos.jpg', 0, 0, '2021-04-11'),
(25, 'Pili Candy', 'Crisp and sweet, it has captured the lightheartedness and exoticism of the Pili tree that grows abundantly in the green forests of Bicol.', 'PLCDY', 1, 2, 30, 'A', 'F-pili-candy.jpg', 0, 0, '2021-04-11'),
(26, 'Pili Brownies', 'Rich, chewy, double chocolate brownies made with the amazing Pili nuts (or macadamia nuts)!A must try Bicol delicacy.', 'PLBWN', 1, 4, 200, 'A', 'F-pili-brownies.jpg', 0, 0, '2021-04-12'),
(27, 'Pili Cake', 'Indulge in the rich and fiery-hot flavors of pili, chillies, and chocolate in this unforgettably heavenly pastry', 'PLCKE', 1, 4, 130, 'A', 'F-pili-cake.jpg', 0, 0, '2021-04-11'),
(28, 'Rice Wine', 'It is a naturally fermented alcoholic drink made from pure glutinous rice or a combination (glutinous and non-glutinous) with onuad roots, ginger extract and powdered bubod.', 'RCWNE', 2, 8, 300, 'A', 'B-rice.jpg', 0, 0, '2021-04-12'),
(29, 'Nipa Wine', 'palm liquour is distilled from the sap of a nipa palm. It is widely made and available in Santo Domingo, where nipa palms abundantly grow along riverbanks.', 'NPWNE', 2, 9, 100, 'A', 'Sale-nipa.jpg', 0, 0, '2021-04-11'),
(30, 'Buri Bag', 'a sturdy native bag woven from buri palm tree  that has large fan-shaped leaves and  it is the largest palm found in the Philippines.', 'BRBG', 3, 5, 100, 'A', 'C-buri.jpg', 0, 0, '2021-04-11'),
(31, 'Abaca Lampshade', 'Made from crocheted abaca, the hanging lamp from the Bicol Region  evokes a warm and cozy ambience, reminiscent of a traditional Filipino home.', 'ABLMP', 3, 10, 200, 'A', 'C-abac-lamp.jpg', 1, 0, '2021-04-12'),
(32, 'Sea Shell Lamp', 'This custom made lamp brings the beach into your home. The cut and pierced seashell border lampshade is complimented by the sand and sea shell.', 'SSLMP', 3, 10, 500, 'A', 'C-seashell-lamp.jpg', 0, 0, '2021-04-11'),
(33, 'Ceramic Pot', 'A ceramic is any of the various hard, brittle, heat-resistant and corrosion-resistant materials made by shaping and then firing a nonmetallic mineral, such as clay.', 'CRPT', 3, 9, 150, 'A', 'C-c9.jpg', 0, 1, '2021-04-12'),
(34, 'Ceramic Mugs', 'A ceramic is any of the various hard, brittle, heat-resistant and corrosion-resistant materials made by shaping and then firing a nonmetallic mineral, such as clay.', 'CRMMG', 3, 9, 150, 'A', 'C-c2.jpg', 0, 0, '2021-04-11'),
(35, 'Ceramic Pickel Jar', 'A ceramic is any of the various hard, brittle, heat-resistant and corrosion-resistant materials made by shaping and then firing a nonmetallic mineral, such as clay.', 'CRMPJ', 3, 9, 150, 'A', 'C-c5.jpg', 0, 0, '2021-04-11'),
(36, 'Ceramic Teacups', 'A ceramic is any of the various hard, brittle, heat-resistant and corrosion-resistant materials made by shaping and then firing a nonmetallic mineral, such as clay.', 'CRMTC', 3, 9, 150, 'A', 'C-c1.jpg', 0, 0, '2021-04-11'),
(37, 'Fan Keychain ', 'Bicol Keychains made by ceramics and the raw pili,oftenly used as a signature souvenir from Bicol.', 'FKCH', 4, 5, 20, 'A', 'A-keychain.jpg', 0, 0, '2021-04-11'),
(38, 'Sili Keychain ', 'Bicol Keychains made by ceramics and the raw pili,oftenly used as a signature souvenir from Bicol.', 'SKCH', 4, 5, 20, 'A', 'A-a1.jpg', 0, 0, '2021-04-12'),
(39, 'Sili with Leaves Keychain ', 'Bicol Keychains made by ceramics and the raw pili,oftenly used as a signature souvenir from Bicol.', 'SLKCH', 4, 5, 20, 'A', 'l8.jpg', 0, 0, '2021-04-11'),
(40, 'Oragon Unisex Jacket', 'High-quality Bicol Oragon Jacket designed and sold by independent local artists around Albay.', 'ORNUNS', 5, 10, 200, 'A', 'S-jacket.png', 0, 0, '2021-04-11'),
(41, 'Unisex Kids Shirt', 'High-quality Bicol unisex kids t-shirts designed and sold by independent local artists around Albay.', 'UNKS', 5, 10, 130, 'A', 'S-kids-shirt.jpg', 0, 0, '2021-04-11'),
(42, 'Magayon Shirt', 'High-quality Bicol magayon t-shirts designed and sold by independent local artists around Albay.', 'MGSRT', 5, 9, 130, 'A', 'S-magayon.jpg', 0, 0, '2021-04-11'),
(43, 'Bicol Express Shirt', 'High-quality Bicol unisex express shirts t-shirts designed and sold by independent local artists around Albay.', 'XPRSSRT', 5, 10, 100, 'A', 'S-bicol-express.jpg', 0, 0, '2021-04-12'),
(44, 'Dye Shirts', 'personalize shirts and corporate give away using photographic printing, hand painting, embroidery, dye and digital printing.', 'DYSRT', 5, 10, 200, 'A', 'S-s4.jpg', 0, 0, '2021-04-11'),
(45, 'Black Shirt', 'personalize shirts and corporate give away using photographic printing, hand painting, embroidery, dye and digital printing.', 'BLSRT', 5, 10, 200, 'A', 'S-s2.jpg', 0, 0, '2021-04-11'),
(46, 'Blue Shirt', 'personalize shirts and corporate give away using photographic printing, hand painting, embroidery, dye and digital printing.', 'BLUSRT', 5, 10, 200, 'A', 'S-s5.jpg', 0, 0, '2021-04-11'),
(47, 'White Shirt', 'personalize shirts and corporate give away using photographic printing, hand painting, embroidery, dye and digital printing.', 'BLSRT', 5, 10, 200, 'A', 'S-s1.jpg', 0, 0, '2021-04-11'),
(48, 'Long Longanisa', 'Longganisa de Guinobatan is a Filipino pork sausage originating from the town of Guinobatan. It is a type of de recado longganisa.', 'LGLG', 1, 1, 50, 'A', 'long-1.jpg', 0, 0, '2021-04-11'),
(49, 'Short Longanisa ', 'Longganisa de Guinobatan is a Filipino pork sausage originating from the town of Guinobatan. It is a type of de recado longganisa.', 'STLG', 1, 1, 50, 'A', 'long-8.jpg', 0, 0, '2021-04-11'),
(50, 'Skinless Longanisa', 'Longganisa de Guinobatan is a Filipino pork sausage originating from the town of Guinobatan in Albay, Philippines. It is a type of de recado longganisa with different varieties', 'SKLG', 1, 1, 50, 'A', 'long-2.jpg', 0, 0, '2021-04-11'),
(51, 'Garlic Longanisa', 'Longganisa de Guinobatan is a Filipino pork sausage originating from the town of Guinobatan in Albay, Philippines. It is a type of de recado longganisa with different varieties', 'GRLLG', 1, 1, 50, 'A', 'long-3.jpg', 0, 0, '2021-04-11'),
(56, 'Seashell Bracelet', 'This cute seashell bracelet is made with natural, bicol seashell beads, hand-picked from the seashore.', 'SSB', 4, 5, 100, 'A', 'A-sea-bracelet.jpg', 0, 0, '2021-04-11'),
(57, 'Bicol Wallet', 'Native wallets to organize your banknotes and coins with these beautiful native wallet and purse from Bicol, Philippines.', 'BCW', 4, 5, 50, 'A', 'A-wallet.jpg', 0, 0, '2021-04-11'),
(58, 'Basi Wine', 'Basi is a sugar cane wine made. Basi is made by fermenting boiled, freshly extracted, sugar cane juice. The juice is then boiled in barrels and stored in earthen clay jars called Burnay.', 'BSW', 2, 7, 300, 'A', 'B-basi.jpg', 0, 0, '2021-04-11'),
(60, 'Hotdog', 'Jumbo hotdog', 'jmbt', 1, 1, 60, 'D', '', 0, 0, '2021-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_number` varchar(64) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `total_qty` int(11) NOT NULL,
  `total_amount` double NOT NULL,
  `order_date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(2) NOT NULL DEFAULT 'C' COMMENT 'C (Pending) / D (Delivered)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_number`, `cust_id`, `total_qty`, `total_amount`, `order_date`, `status`) VALUES
(1, '2859360a65a8d71bff', 2, 40, 8500, '2021-05-20', 'D'),
(2, '2740260a65f2e3934c', 2, 2299, 264100, '2021-05-20', 'D'),
(3, '2752460a65f73c9ffd', 2, 268, 23100, '2021-05-20', 'D'),
(4, '6307860a66f6f5da5d', 2, 570, 117500, '2021-05-20', 'D'),
(5, '5781460a673ca532c7', 2, 70, 14000, '2021-05-20', 'D'),
(6, '4005060a67906cb80e', 2, 1000, 350000, '2021-05-20', 'D'),
(7, '6993660a67b5a9d3c6', 2, 29, 5350, '2021-05-20', 'D'),
(8, '2885760a67cfb4f65a', 2, 1, 250, '2021-05-20', 'D'),
(9, '9383960a68732ab475', 2, 6, 500, '2021-05-20', 'C'),
(10, '3129860a68f104b1c0', 6, 72, 11400, '2021-05-20', 'C'),
(11, '4747960a68f86c6591', 6, 11, 3300, '2021-05-20', 'D'),
(12, '4200960a6905d50565', 7, 185, 13950, '2021-05-20', 'D'),
(13, '4260260a69075d0264', 7, 47, 5250, '2021-05-20', 'D'),
(14, '7526360a6913cdbfe1', 8, 18, 3699, '2021-05-20', 'D'),
(15, '1479660a6914c5bfe2', 8, 4, 400, '2021-05-20', 'C'),
(16, '2692460a6915b3056e', 8, 11, 2100, '2021-05-20', 'D'),
(17, '1560760a691631ede3', 8, 9, 1350, '2021-05-20', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `promo_id` int(3) NOT NULL,
  `promo_name` varchar(128) NOT NULL,
  `promo_img` varchar(60) NOT NULL,
  `description` varchar(250) NOT NULL,
  `status` varchar(2) NOT NULL DEFAULT '' COMMENT 'A is active\r\n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`promo_id`, `promo_name`, `promo_img`, `description`, `status`) VALUES
(1, 'Customized Abaca Bag', 'sueimg.png', 'These Woven bag is made of abaca. Straight from Bicol Perfect for any occasion Sling type/Shoulder', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `rev_id` int(5) NOT NULL,
  `user` varchar(56) NOT NULL,
  `user_rev` varchar(250) NOT NULL,
  `img` varchar(56) NOT NULL,
  `status` varchar(1) NOT NULL COMMENT 'A (active) B(not)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`rev_id`, `user`, `user_rev`, `img`, `status`) VALUES
(1, 'Rowan Atkinson', 'A fantastic shop for all your souvenir needs. Friendly delivery staffs. Excellent prices and plenty of choice. One of the best souvenir website', 'user1.jpg', 'A'),
(2, 'Sue Ramirez', 'Very amazing e-commerce site. Tons of variety of bicol souvenirs at really good prices. I bought t-shirts, dishes etc and got a good deal. Recommended.', 'user2.jpg', 'A'),
(3, 'Roseanne Park', 'This is one of the best site to buy souvenirs. There are plenty in internet but I found nice souvenirs gifts here. Surely buy again here during my visit in Albay.', 'user3.png', 'A');

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
  `sell_email` varchar(128) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Active' COMMENT 'Active / Maintenance'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`store_id`, `store_name`, `store_owner`, `sell_age`, `sell_gender`, `add_id`, `sell_contact`, `sell_email`, `status`) VALUES
(1, 'D Juan Dela Cruz Specials', 'Juan dela Cruz', 46, 'F', 1, '09759213249', 'Djuandelacruzspecials@gmail.com', 'Active'),
(2, 'Geralds Native Products', 'Gierald Baretto', 32, 'F', 1, '9356789218', 'gieraldsnative@gmail.com', 'Active'),
(3, 'Gomez Store', 'Daniel Gomez', 30, 'F', 2, '9456789908', 'gomezdaniel@gmail.com', 'Active'),
(4, 'Jennys Special Puto', 'Jenny Domingo', 40, 'F', 2, '9367898765', 'jennysputo012@gmail.com', 'Active'),
(5, 'Rochelles Accesories', 'Rochelle Diaz', 54, 'F', 3, '9503483902', 'rochellediaz@gmail.com', 'Active'),
(6, 'Aling Gelay Special Pinangat', 'Angelica Salvacion', 56, 'F', 4, '9267854121', 'alinggelay@gmail.com', 'Active'),
(7, 'Tans Store', 'Tan Conrad', 25, 'M', 4, '9756754555', 'Tinconrad@gmail.com', 'Active'),
(8, 'Best of Tabacco', 'Matalo Manalo', 55, 'M', 5, '9456665333', 'TabaccoPH@gmail.com', 'Active'),
(9, 'Cadags Store', 'Ezekiel Cadag', 24, 'M', 6, '9365478888', 'ezekielcadag@gmail.com', 'Active'),
(10, 'Icas Shop', 'Ica Kun', 36, 'F', 7, '9112233445', 'Icakun@gmail.com', 'Active');

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
  `user_ref_num` varchar(250) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(260) NOT NULL,
  `usertype` varchar(1) NOT NULL DEFAULT 'C' COMMENT 'A (admin) C (customer)',
  `status` varchar(10) NOT NULL DEFAULT 'Active' COMMENT 'Active / Blocked'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_ref_num`, `username`, `password`, `usertype`, `status`) VALUES
(0, '', 'admin', 'admin', 'A', 'Active'),
(2, '8261714502782712', 'Jep', '12345', 'C', 'Active'),
(3, '9616541632184020', 'Ton', '2345', 'C', 'Active'),
(4, '1177950468539284', 'hgjh', 'mmmmm', 'C', 'Blocked'),
(5, '191540192659213', 'Chelle', 'chelle', 'C', 'Active'),
(6, '1915638921460800', 'Chibbi', 'sanaall', 'C', 'Active'),
(7, '1035025809576217', 'Mira', 'miramira', 'C', 'Active'),
(8, '9784279758605465', 'Lulu', 'xxxxx', 'C', 'Active');

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`promo_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`rev_id`);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `promo_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `rev_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `store_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `storeadd`
--
ALTER TABLE `storeadd`
  MODIFY `add_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
