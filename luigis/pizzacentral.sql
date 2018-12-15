-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2018 at 05:51 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizzacentral`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_form`
--

CREATE TABLE `order_form` (
  `order_id` int(128) UNSIGNED ZEROFILL NOT NULL,
  `prod_id` int(128) NOT NULL,
  `prod_name` varchar(128) NOT NULL,
  `prod_quantity` int(32) NOT NULL,
  `prod_size` varchar(8) NOT NULL,
  `prod_price` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `price_list`
--

CREATE TABLE `price_list` (
  `price_id` int(128) NOT NULL,
  `prod_id` int(128) NOT NULL,
  `prod_name` varchar(64) NOT NULL,
  `price_sizeS` varchar(16) NOT NULL,
  `price_sizeM` varchar(16) NOT NULL,
  `price_sizeL` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price_list`
--

INSERT INTO `price_list` (`price_id`, `prod_id`, `prod_name`, `price_sizeS`, `price_sizeM`, `price_sizeL`) VALUES
(28, 20, 'Margherita', '', '350.00', ''),
(29, 21, 'Pesto', '', '430.00', ''),
(30, 22, 'Hawaiian', '', '395.00', ''),
(31, 23, 'Robertino', '', '495.00', ''),
(32, 24, 'Calzone', '', '400.00', ''),
(33, 25, 'Carbonara', '', '370.00', ''),
(34, 26, 'Arrabbiata', '', '240.00', ''),
(35, 27, 'Amatriciana', '', '320.00', ''),
(36, 28, 'Marina Rossa', '', '370.00', ''),
(37, 29, 'Vangole', '', '320.00', ''),
(38, 30, 'Verde', '', '250.00', ''),
(39, 31, 'Caprese', '', '285.00', ''),
(40, 32, 'Michelangelo', '', '300.00', ''),
(41, 33, 'Panna Cotta', '', '150.00', ''),
(42, 34, 'Tarte de Chocolate', '', '180.00', ''),
(43, 35, 'Tarte de Queso', '', '195.00', ''),
(44, 36, 'Blended Ice Tea', '', '95.00', ''),
(45, 37, 'Lemonade', '', '150.00', ''),
(46, 38, 'Mango Shake/Juice', '', '165.00', '');

-- --------------------------------------------------------

--
-- Table structure for table `product_profile`
--

CREATE TABLE `product_profile` (
  `prod_id` int(16) UNSIGNED ZEROFILL NOT NULL,
  `prod_name` varchar(128) NOT NULL,
  `prod_descr` varchar(255) NOT NULL,
  `prod_type` varchar(255) NOT NULL,
  `img_addr` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_profile`
--

INSERT INTO `product_profile` (`prod_id`, `prod_name`, `prod_descr`, `prod_type`, `img_addr`) VALUES
(0000000000000020, 'Margherita', 'Ingredients: Tomato, Mozzarella', 'pizza', 'seller-1-200x200'),
(0000000000000021, 'Pesto', 'Ingredients: Tomato, Mozzarella, Pesto Sauce', 'pizza', 'seller-2-200x200'),
(0000000000000022, 'Hawaiian', 'Ingredients: Tomato, Mozzarella, Cooked ham', 'pizza', 'seller-3-200x200'),
(0000000000000023, 'Robertino', 'Ingredients: Tomato, Mozzarella, Cooked ham, Bacon Strips, Egg, Arugula, Parmesan Cheese', 'pizza', 'seller-4-200x200'),
(0000000000000024, 'Calzone', 'Ingredients: Tomato, Mozzarella, Cooked ham, Mushroom, Folded Dough', 'pizza', 'seller-5-200x200'),
(0000000000000025, 'Carbonara', 'Ingredients: Bacon, Egg, Cream', 'pasta', 'pasta-1-300x300'),
(0000000000000026, 'Arrabbiata', 'Ingredients: Tomato, Garlic, Chili ', 'pasta', 'pasta-2-300x300'),
(0000000000000027, 'Amatriciana', 'Ingredients: Tomato, Onion, Bacon, Chili', 'pasta', 'pasta-1-300x300'),
(0000000000000028, 'Marina Rossa', 'Ingredients: Seafood, Tomato sauce', 'pasta', 'pasta-2-300x300'),
(0000000000000029, 'Vangole', 'Ingredients: Clams, Olive Oil, ', 'pasta', 'pasta-1-300x300'),
(0000000000000030, 'Verde', 'Ingredients: Different kinds of Lettuce, Tomato, Black Olives', 'salad', 'icin-4-200x200'),
(0000000000000031, 'Caprese', 'Ingredients: Slices of tomato, Mozzarella cheese, Oregano, Lettuce', 'salad', 'icin-4-200x200'),
(0000000000000032, 'Michelangelo', 'Ingredients: Lettuce, Arugula leaves, Black olives, Artichoke, Capers', 'salad', 'icin-4-200x200'),
(0000000000000033, 'Panna Cotta', 'Ingredients: Cream milk pudding', 'dessert', 'story_bg_2'),
(0000000000000034, 'Tarte de Chocolate', 'Chocolate Cake', 'dessert', 'story_bg_2'),
(0000000000000035, 'Tarte de Queso', 'Cheese cake, Strawberry or raspberry flavor', 'dessert', 'story_bg_2'),
(0000000000000036, 'Blended Ice Tea', '', 'drinks', 'drink-1-200x200'),
(0000000000000037, 'Lemonade', '', 'drinks', 'drink-1-200x200'),
(0000000000000038, 'Mango Shake/Juice', '', 'drinks', 'drink-1-200x200');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_form`
--
ALTER TABLE `order_form`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `price_list`
--
ALTER TABLE `price_list`
  ADD PRIMARY KEY (`price_id`),
  ADD UNIQUE KEY `fk_idkey` (`prod_id`);

--
-- Indexes for table `product_profile`
--
ALTER TABLE `product_profile`
  ADD PRIMARY KEY (`prod_id`),
  ADD UNIQUE KEY `fk_prodname` (`prod_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_form`
--
ALTER TABLE `order_form`
  MODIFY `order_id` int(128) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `price_list`
--
ALTER TABLE `price_list`
  MODIFY `price_id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `product_profile`
--
ALTER TABLE `product_profile`
  MODIFY `prod_id` int(16) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
