-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2018 at 03:33 AM
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
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `cust_fnname` varchar(100) NOT NULL,
  `cust_lname` varchar(100) NOT NULL,
  `cust_addr` varchar(100) NOT NULL,
  `cust_contnum` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_form`
--

CREATE TABLE `order_form` (
  `order_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `cust_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `prod_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `order_refn` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_form`
--

INSERT INTO `order_form` (`order_id`, `cust_id`, `prod_id`, `order_refn`) VALUES
(0000000001, 0000000001, 0000000001, 1),
(0000000002, 0000000002, 0000000003, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_profile`
--

CREATE TABLE `product_profile` (
  `prod_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `prod_type` varchar(10) NOT NULL,
  `prod_desc` varchar(100) NOT NULL,
  `prod_imgurl` varchar(100) NOT NULL,
  `prod_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_profile`
--

INSERT INTO `product_profile` (`prod_id`, `prod_name`, `prod_type`, `prod_desc`, `prod_imgurl`, `prod_price`) VALUES
(0000000001, 'Margherita', 'pizza', 'Made with San Marzano tomatoes, mozzarella fior di latte, fresh basil, salt and extra-virgin olive o', 'assets/images/menu-1-120x120.jpg', 299),
(0000000002, 'Hawaiian', 'Pizza', 'Pineapple, Tomato sauce, Ham slices', 'assets/images/menu-1-120x120.jpg', 250),
(0000000003, 'Napolitan', 'pasta', 'tomato sauce, basil', 'assets/images/menu-1-120x120.jpg', 150),
(0000000004, 'Agli o olio', 'pasta', 'Olive oil, basil, pasta', 'assets/images/menu-1-120x120.jpg', 260);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_pass` varchar(100) NOT NULL,
  `u_type` int(10) NOT NULL,
  `u_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `order_form`
--
ALTER TABLE `order_form`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `prod_id` (`prod_id`);

--
-- Indexes for table `product_profile`
--
ALTER TABLE `product_profile`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_form`
--
ALTER TABLE `order_form`
  MODIFY `order_id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_profile`
--
ALTER TABLE `product_profile`
  MODIFY `prod_id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `order_form` (`cust_id`);

--
-- Constraints for table `order_form`
--
ALTER TABLE `order_form`
  ADD CONSTRAINT `order_form_ibfk_1` FOREIGN KEY (`prod_id`) REFERENCES `product_profile` (`prod_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
