-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2021 at 03:19 PM
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
(3, 1, 2, 13),
(4, 50, 0, -9);

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
(1, 'Foods', 'FR-F(1).jpg'),
(2, 'Beverages', 'FR-B(2).jpg'),
(3, 'Crafts', 'FR-C(3).jpg'),
(4, 'Accessories', 'FR-A(4).jpg'),
(5, 'Shirts', 'FR-S(5).jpg');

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
(5, 'Original Lambanog', 'Lambanog or coconut wine or vodka. This local wine is essentially processed tuba and well known for its strength that ordinarily carries regarding 80 to 90 proof alternatives.', 'LBNG', 2, 3, 150, 'A', 'Lambanog.jpg', 1, 0, '2021-04-11'),
(6, 'Tuba', 'a non-alcoholic version made from fresh coconut sap. Tuba is stored in large bottle gourds mixed with coconut milk, ice, and sugar. It is usually topped with walnuts and diced fruit.', 'TBA', 2, 3, 130, 'A', 'B-tuba.jpg', 0, 1, '2021-04-12'),
(7, 'Puto Macapuno', 'steamed rice cakes, traditionally made from slightly fermented rice dough (galapong) and is stuffed with coconut caramelized filling.', 'PMCP', 1, 4, 30, 'A', 'F-puto-macapuno.jpg', 0, 0, '2021-04-11'),
(8, 'Puto Rice', '', 'PRC', 1, 4, 30, 'D', 'F-puto-rice.jpg', 0, 0, '2021-04-11'),
(9, 'Pilinut Keychain', 'Bicol Keychains made by ceramics and the raw pili,oftenly used as a signature souvenir from Bicol.', 'PKCH', 4, 5, 20, 'A', 'A-a3.jpg', 0, 0, '2021-04-11'),
(10, 'Local Bracelet', 'Check out our local bracelet selection for the very best in unique or custom, handmade pieces made of wood beads.', 'BRC', 4, 5, 30, 'A', 'A-local-bracelet.jpg', 0, 0, '2021-04-11'),
(11, 'Abaca Basket', 'a woven of natural fibers of abaca in a tight-cord pattern. ', 'ABC', 3, 5, 250, 'A', 'abaca.jpg', 0, 0, '2021-04-11'),
(12, 'Camalig Special Pinangat', 'Pinangat is a famous native chili-hot delicacy of the town of Camalig. A vegetable dish cooked in coconut milk mixed with select spices and gabi.', 'CPINGT', 1, 6, 100, 'A', 'F-pinangat.jpg', 0, 0, '2021-04-11'),
(13, 'Pili Jam', 'This recipe is a perfect dessert on its own, or as a spread on rice-based snacks  or just plain bread. Made from rich coconut milk and raw sugar.', 'PLJ', 1, 6, 100, 'A', 'F-pili-jam.jpg', 0, 0, '2021-04-11'),
(14, 'Special Bicol Express', 'Pork Bicol Express is a type of Filipino spicy pork dish. Its main source of flavor is derived from shrimp paste, which is locally known as bagoong.', 'BCX', 1, 7, 300, 'A', 'bicol.jpg', 1, 0, '2021-04-11'),
(15, 'Special Laing', 'Laing na Gabi or simply Laing is a type of Filipino vegetable dish. Taro leaves are sliced and dried for a few days before being cooked in coconut milk.', 'SLNG', 1, 7, 300, 'A', 'F-laing.jpg', 0, 0, '2021-04-11'),
(16, 'Tabaco Tabak', 'also known as \"sundang\". Made of steel and wood as a handle.', 'OTK', 3, 8, 200, 'A', 'C-tabak.jpg', 0, 0, '2021-04-11'),
(18, 'Money Keeper', 'Ceramic material, cute pig for fecoration. Banks pig, that will attract and encourage your little one to start saving money and develop a good habit.', 'MNYK', 3, 9, 100, 'A', 'C-alkansya.jpg', 0, 1, '2021-04-12'),
(19, 'Refrigerator Magnet', 'Ceramic magnet set. This set of six magnets was made by stamping a speckled brown clay with my own handmade stamps.', 'RGM', 4, 10, 50, 'A', 'C-ref-magnet.jpg', 0, 0, '2021-04-11'),
(20, 'Bicol Shirt', 'personalize shirts and corporate give away using photographic, hand painting, embroidery, dye and digital printing.', 'BCLS', 5, 10, 250, 'A', 'clothes.jpg', 1, 0, '2021-04-11'),
(21, 'Tilmok', 'Tilmok is a staple food in the Philippines\' Bicol region due to abundance of crab and coconut. It is steamed crab meat with coconut.', 'TMK', 1, 1, 50, 'A', 'F-tilmok.png', 0, 1, '2021-04-12'),
(22, 'Special Biko', 'is a sweet rice cake from the Bicol (a type of kalamay dish). It is made of coconut milk, brown sugar, and glutinous rice. It is usually topped with latik.', 'SPCB', 1, 4, 80, 'A', 'F-biko.jpg', 0, 0, '2021-04-11'),
(23, 'Suman Malagkit', 'The Suman Malagkit Recipe is a famous delicacy in the Bicol. The ingredients consist of sweet glutinous rice wrapped in banana leaves and served as meryenda.', 'SMMKT', 1, 2, 10, 'A', 'F-suman1.jpg', 0, 0, '2021-04-11'),
(24, 'Suman Ibos', 'Suman sa ibos is a simple kakanin recipe. This recipe requires glutinous rice and coconut milk and the wrap is made from buri or palm leaves.', 'SMIB', 1, 4, 10, 'A', 'F-suman-ibos.jpg', 0, 0, '2021-04-11'),
(25, 'Pili Candy', 'Crisp and sweet, it has captured the lightheartedness and exoticism of the Pili tree that grows abundantly in the green forests of Bicol.', 'PLCDY', 1, 2, 30, 'A', 'F-pili-candy.jpg', 0, 0, '2021-04-11'),
(26, 'Pili Brownies', 'Rich, chewy, double chocolate brownies made with the amazing Pili nuts (or macadamia nuts)!A must try Bicol delicacy.', 'PLBWN', 1, 4, 200, 'A', 'F-pili-brownies.jpg', 0, 0, '2021-04-12'),
(27, 'Pili Cake', 'Indulge in the rich and fiery-hot flavors of pili, chillies, and chocolate in this unforgettably heavenly pastry', 'PLCKE', 1, 4, 130, 'A', 'F-pili-cake.jpg', 0, 0, '2021-04-11'),
(28, 'Rice Wine', 'It is a naturally fermented alcoholic drink made from pure glutinous rice or a combination (glutinous and non-glutinous) with onuad roots, ginger extract and powdered bubod.', 'RCWNE', 2, 8, 300, 'A', 'B-rice.jpg', 0, 0, '2021-04-12'),
(29, 'Nipa Wine', 'palm liquour is distilled from the sap of a nipa palm. It is widely made and available in Santo Domingo, where nipa palms abundantly grow along riverbanks.', 'NPWNE', 2, 9, 100, 'A', 'Sale-nipa.jpg', 0, 0, '2021-04-11'),
(30, 'Buri Bag', 'a sturdy native bag woven from buri palm tree  that has large fan-shaped leaves and  it is the largest palm found in the Philippines.', 'BRBG', 3, 5, 100, 'A', 'C-buri.jpg', 0, 0, '2021-04-11'),
(31, 'Abaca Lampshade', 'Made from crocheted abaca, the hanging lamp from the Bicol Region  evokes a warm and cozy ambience, reminiscent of a traditional Filipino home.', 'ABLMP', 3, 10, 200, 'A', 'C-abac-lamp.jpg', 1, 0, '2021-04-11'),
(32, 'Sea Shell Lamp', 'This custom made lamp brings the beach into your home. The cut and pierced seashell border lampshade is complimented by the sand and sea shell.', 'SSLMP', 3, 10, 500, 'A', 'C-seashell-lamp.jpg', 0, 0, '2021-04-11'),
(33, 'Ceramic Pot', 'A ceramic is any of the various hard, brittle, heat-resistant and corrosion-resistant materials made by shaping and then firing a nonmetallic mineral, such as clay.', 'CRPT', 3, 9, 150, 'A', 'C-c9.jpg', 0, 1, '2021-04-12'),
(34, 'Ceramic Mugs', 'A ceramic is any of the various hard, brittle, heat-resistant and corrosion-resistant materials made by shaping and then firing a nonmetallic mineral, such as clay.', 'CRMMG', 3, 9, 150, 'A', 'C-c2.jpg', 0, 0, '2021-04-11'),
(35, 'Ceramic Pickel Jar', 'A ceramic is any of the various hard, brittle, heat-resistant and corrosion-resistant materials made by shaping and then firing a nonmetallic mineral, such as clay.', 'CRMPJ', 3, 9, 150, 'A', 'C-c5.jpg', 0, 0, '2021-04-11'),
(36, 'Ceramic Teacups', 'A ceramic is any of the various hard, brittle, heat-resistant and corrosion-resistant materials made by shaping and then firing a nonmetallic mineral, such as clay.', 'CRMTC', 3, 9, 150, 'A', 'C-c1.jpg', 0, 0, '2021-04-11'),
(37, 'Fan Keychain ', 'Bicol Keychains made by ceramics and the raw pili,oftenly used as a signature souvenir from Bicol.', 'FKCH', 4, 5, 20, 'A', 'A-keychain.jpg', 0, 0, '2021-04-11'),
(38, 'Sili Keychain ', 'Bicol Keychains made by ceramics and the raw pili,oftenly used as a signature souvenir from Bicol.', 'SKCH', 4, 5, 20, 'A', 'A-a1.jpg', 0, 0, '2021-04-12'),
(39, 'Sili with Leaves Keychain ', 'Bicol Keychains made by ceramics and the raw pili,oftenly used as a signature souvenir from Bicol.', 'SLKCH', 4, 5, 20, 'A', 'l8.jpg', 1, 0, '2021-04-11'),
(40, 'Oragon Unisex Jacket', 'High-quality Bicol Oragon Jacket designed and sold by independent local artists around Albay.', 'ORNUNS', 5, 10, 200, 'A', 'S-jacket.png', 0, 0, '2021-04-12'),
(41, 'Unisex Kids Shirt', 'High-quality Bicol unisex kids t-shirts designed and sold by independent local artists around Albay.', 'UNKS', 5, 10, 130, 'A', 'S-kids-shirt.jpg', 0, 0, '2021-04-11'),
(42, 'Magayon Shirt', 'High-quality Bicol magayon t-shirts designed and sold by independent local artists around Albay.', 'MGSRT', 5, 9, 130, 'A', 'S-magayon.jpg', 0, 0, '2021-04-11'),
(43, 'Bicol Express Shirt', 'High-quality Bicol unisex express shirts t-shirts designed and sold by independent local artists around Albay.', 'XPRSSRT', 5, 10, 100, 'A', 'S-bicol-express.jpg', 0, 0, '2021-04-11'),
(44, 'Dye Shirts', 'personalize shirts and corporate give away using photographic printing, hand painting, embroidery, dye and digital printing.', 'DYSRT', 5, 10, 200, 'A', 'S-s4.jpg', 0, 0, '2021-04-11'),
(45, 'Black Shirt', 'personalize shirts and corporate give away using photographic printing, hand painting, embroidery, dye and digital printing.', 'BLSRT', 5, 10, 200, 'A', 'S-s2.jpg', 0, 0, '2021-04-11'),
(46, 'Blue Shirt', 'personalize shirts and corporate give away using photographic printing, hand painting, embroidery, dye and digital printing.', 'BLUSRT', 5, 10, 200, 'A', 'S-s5.jpg', 0, 0, '2021-04-11'),
(47, 'White Shirt', 'personalize shirts and corporate give away using photographic printing, hand painting, embroidery, dye and digital printing.', 'BLSRT', 5, 10, 200, 'A', 'S-s1.jpg', 0, 0, '2021-04-11'),
(48, 'Long Longanisa', 'Longganisa de Guinobatan is a Filipino pork sausage originating from the town of Guinobatan. It is a type of de recado longganisa.', 'LGLG', 1, 1, 50, 'A', 'long-1.jpg', 0, 0, '2021-04-11'),
(49, 'Short Longanisa ', 'Longganisa de Guinobatan is a Filipino pork sausage originating from the town of Guinobatan. It is a type of de recado longganisa.', 'STLG', 1, 1, 50, 'A', 'long-8.jpg', 0, 0, '2021-04-11'),
(50, 'Skinless Longanisa', 'Longganisa de Guinobatan is a Filipino pork sausage originating from the town of Guinobatan in Albay, Philippines. It is a type of de recado longganisa with different varieties', 'SKLG', 1, 1, 50, 'A', 'long-2.jpg', 0, 0, '2021-04-11'),
(51, 'Garlic Longanisa', 'Longganisa de Guinobatan is a Filipino pork sausage originating from the town of Guinobatan in Albay, Philippines. It is a type of de recado longganisa with different varieties', 'GRLLG', 1, 1, 50, 'A', 'long-3.jpg', 0, 0, '2021-04-11'),
(56, 'Seashell Bracelet', 'This cute seashell bracelet is made with natural, bicol seashell beads, hand-picked from the seashore.', 'SSB', 4, 5, 100, 'A', 'A-sea-bracelet.jpg', 1, 0, '2021-04-11'),
(57, 'Bicol Wallet', 'Native wallets to organize your banknotes and coins with these beautiful native wallet and purse from Bicol, Philippines.', 'BCW', 4, 5, 50, 'A', 'A-wallet.jpg', 0, 0, '2021-04-11'),
(58, 'Basi Wine', 'Basi is a sugar cane wine made. Basi is made by fermenting boiled, freshly extracted, sugar cane juice. The juice is then boiled in barrels and stored in earthen clay jars called Burnay.', 'BSW', 2, 7, 300, 'A', 'B-basi.jpg', 0, 0, '2021-04-11');

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
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `promo_id` int(3) NOT NULL,
  `promo_name` varchar(128) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`promo_id`, `promo_name`, `description`) VALUES
(1, 'Customized Abaca Bag', 'These Woven bag is made of abaca. Straight from Bicol Perfect for any occasion Sling type/Shoulder');

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
(1, 'D Juan Dela Cruz Specials', 'Juan dela Cruz', 45, 'M', 1, '09759213248', 'Djuandelacruzspecials@gmail.com'),
(2, 'Geralds Native Products', 'Gierald Baretto', 32, 'M', 1, '9356789218', 'gieraldsnative@gmail.com'),
(3, 'Gomez Store', 'Daniel Gomez', 30, 'M', 2, '9456789908', 'gomezdaniel@gmail.com'),
(4, 'Jennys Special Puto', 'Jenny Domingo', 40, 'F', 2, '9367898765', 'jennysputo012@gmail.com'),
(5, 'Rochelles Accesories', 'Rochelle Diaz', 54, 'F', 3, '9503483902', 'rochellediaz@gmail.com'),
(6, 'Aling Gelay Special Pinangat', 'Angelica Salvacion', 56, 'F', 4, '9267854121', 'alinggelay@gmail.com'),
(7, 'Tans Store', 'Tan Conrad', 25, 'M', 4, '9756754555', 'Tinconrad@gmail.com'),
(8, 'Best of Tabacco', 'Matalo Manalo', 55, 'M', 5, '9456665333', 'TabaccoPH@gmail.com'),
(9, 'Cadags Store', 'Ezekiel Cadag', 24, 'M', 6, '9365478888', 'ezekielcadag@gmail.com'),
(10, 'Icas Shop', 'Ica Kun', 36, 'F', 7, '9112233445', 'Icakun@gmail.com');

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
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`promo_id`);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `promo_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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

