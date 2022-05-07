-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Order_Processing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `student_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `zipcode` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_desc` varchar(100) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_desc`, `product_image`, `category`) VALUES
(1, 'Software Developers Career Guide', '10000', 'Suitable for software developers', 'careerguide-amazon.jpg', 'books'),
(2, 'Computer Information Technology', '8000', 'Reference book for students', '51M9vrzlG1L.jpg', 'books'),
(3, 'Reference Books', '12000', 'Ref for specially IT students', 'Carson-Dunlop-Home-Reference-Soft-Cover-868x868.png',  'books'),
(4, 'Graphics Design', '5000', 'Specially for graphics interested', '818dbEnFZcL.jpg ',  'books'),
(5, 'Photoshop/Adobe Illustrator', '8000', 'Most suitable for graphics', '51a+kA3cBJL.jpg',  'books'),
(6, 'Business', '6000', 'Special for business activities', 'BTB-Full-Book-Cover.png', 'books'),
(7, 'Internet Marketting', '8000', 'E-buisness knowledge', '51d3hHhd1uL.jpg',  'books'),
(8, 'Windows', '25000', 'Original Windows', 'KW9-00139_1.png',  'software'),
(9, 'Drivers', '12000', 'Device drivers software', 'images.jpg',  'software'),
(10, 'MS Office', '15000', 'MS office package', 'msoffice2016homenadbussiness.jpg',  'software'),
(11, 'Open Office', '16000', 'Apache Open Office Package', 'open-office-splash-100736924-large.3x2.jpg',  'software'),
(12, 'Graphics', '6000', 'Graphics Software', 'Best-Graphic-Design-Software.jpg',  'software'),
(13, 'Laptop', '125000', '10th Generation Laptop', 'ux561_smoky_grey_05_1_1.0.jpg',  'hardware'),
(14, 'RAM', '7500', 'DDR5 RAM', 'G.Skill-TridentZ-RGB-Series-DDR4-4266-RAM.jpg', 'hardware'),
(15, 'Pen Drive', '12000', '32GB/128GB/256GB Pen drives', 'HTB1lC4NLXXXXXaQXFXXq6xXFXXXg.jpg_350x350.jpg',  'hardware'),
(16, 'Network Card', '5000', 'Network card designed for latest modles', '51tl+8TNNaL._AC_SL1001_.jpg',  'hardware'),
(17, 'Laptop 2', '115000', 'Rotatable Laptop', 'spectre-folio-13-e1576144843396-1200x542.jpg',  'hardware'),
(18, 'Drivers Installation', '250', 'Device drivers installation process', '7197FkVozsL._AC_SX522_.jpg',  'CD/DVD'),
(19, 'Router Configuration', '200', 'Router settings', 'unnamed.jpg',  'CD/DVD'),
(20, 'User Manual', '300', 'User manual for drivers', '26500-003362.jpg',  'CD/DVD'),
(21, 'Programming Language Tutorials', '750', 'Many programming languages basics', 'programming basics.jpg',  'CD/DVD'),
(22, 'Software Development Techniques', '500', 'Methodologies', 'cd-big.png',  'CD/DVD');


-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `product_id`, `qty`) VALUES
(1, 1, 20),
(2, 1, 30),
(3, 3, 20),
(4, 4, 20),
(5, 5, 20),
(6, 6, 20),
(7, 7, 20),
(8, 8, 20),
(9, 9, 19),
(10, 10, 23),
(11, 11, 20),
(12, 12, 20),
(13, 13, 20),
(14, 14, 20),
(15, 15, 20),
(16, 16, 20),
(17, 17, 20),
(18, 18, 20),
(19, 19, 13),
(20, 20, 21),
(21, 21, 18),
(22, 22, 20);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchase_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `order_stat` varchar(100) NOT NULL,
  `order_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_detail`
--

CREATE TABLE `purchase_detail` (
  `purchase_detail_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_qty` int(11) NOT NULL,
  `purchase_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `purchase_detail`
--
ALTER TABLE `purchase_detail`
  ADD PRIMARY KEY (`purchase_detail_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `purchase_detail`
--
ALTER TABLE `purchase_detail`
  MODIFY `purchase_detail_id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
