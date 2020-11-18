-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 06:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(100) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_country` text NOT NULL,
  `admin_about` text NOT NULL,
  `admin_contact` int(11) NOT NULL,
  `admin_job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_country`, `admin_about`, `admin_contact`, `admin_job`) VALUES
(1, 'kausar islam', 'kausar', '12345', 'admin.png', 'bangladesh', 'This application is created by Group Circle if you willing to contact me, please click this link.\r\nM-Dev-Media\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci doloribus tempore non ut velit, nesciunt totam, perspiciatis corrupti expedita nulla aut necessitatibus eius nisi. Unde quasi, recusandae doloribus minus quisquam.', 455674854, 'Web Developer'),
(3, 'admin', 'admin', '12345', 'ia_100000008.jpeg', 'Bangladesh', ' fdafasf ', 2147483647, 'Programmer');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(100) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(100) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`, `size`) VALUES
(43, '::1', 1, 'Large');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, 'MEN', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(2, 'WOMEN', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(3, 'KIDS', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(4, 'OTHERS', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`) VALUES
(10, 'Kausar Islam', 'kausar@gmail.com', '12345', 'Bangladesh', 'Dhaka', '01589654789', 'Ka-11, Jagannathpur,Badda,Dhaka-1212', '231-2318072_if-you-are-self-employed-passport-size-photo-cartoon.png', '::1'),
(11, 'customer', 'hadi', '12345', 'Bangladesh', 'Dhaka', '01589654789', 'Ka-11, Jagannathpur,Badda,Dhaka-1212', 'ia_100000013.jpeg', '::1'),
(12, 'Customer 1', 'piku', '12345', 'Bangladesh', 'dhaka', '01589654789', 'Ka-11, Jagannathpur,Badda,Dhaka-1212', '1.jpg', '::1'),
(13, 'hadi', 'hadi', '12345', 'Bangladesh', 'dhaka', '01589654789', 'Ka-11, Jagannathpur,Badda,Dhaka-1212', '1.jpg', '::1'),
(14, 'kausar islam', 'kausar', '12345', 'Bangladesh', 'Dhaka', '022u432434', 'bashundhara', 'R=85156.jpg', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_date` date NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `qty`, `size`, `order_date`, `order_status`) VALUES
(42, 8, 2500, 663487811, 1, 'Medium', '2019-12-01', 'Array'),
(43, 8, 2500, 760506279, 1, 'Small', '2019-12-01', 'pending'),
(44, 8, 4000, 802052386, 1, 'Medium', '2019-12-01', 'pending'),
(45, 8, 600, 1356756017, 1, 'Medium', '2019-12-01', 'Cash On Delivery'),
(46, 8, 4000, 405583578, 1, 'Extra Large', '2019-12-01', 'Cash On Delivery'),
(47, 8, 2500, 1144338870, 1, 'Small', '2019-12-01', 'pending'),
(48, 10, 1100, 1081023029, 1, 'Small', '2019-12-02', 'Array'),
(49, 10, 2500, 681562540, 1, 'Medium', '2019-12-02', 'Array'),
(50, 11, 4000, 650201398, 1, 'Medium', '2019-12-03', 'Array'),
(52, 11, 2500, 1824041482, 1, '', '2019-12-03', 'pending'),
(53, 11, 300, 1216200572, 1, 'Large', '2020-02-24', 'Cash On Delivery'),
(54, 11, 300, 1216200572, 1, 'Medium', '2020-02-24', 'Cash On Delivery'),
(55, 14, 600, 407345682, 1, 'Medium', '2020-05-03', 'pending'),
(56, 14, 400, 407345682, 1, 'Medium', '2020-05-03', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `payment_mode` text NOT NULL,
  `trans_no` text NOT NULL,
  `code` text NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_no`, `amount`, `payment_mode`, `trans_no`, `code`, `payment_date`) VALUES
(18, 2059213205, 900, 'Ucash', '264564', '5466', '12154'),
(19, 2856100, 300, 'Bcash', '264564', '5466', '12154'),
(20, 2856100, 900, 'Bank Transfer', 'rwerwt', '5466', '12154'),
(21, 2856100, 900, 'Bcash', '264564', '5466', '12154'),
(22, 2059213205, 900, 'Bcash', '264564', '5466', '12154'),
(23, 2059213205, 900, 'Bcash', '264564', '5466', '12154');

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `size`, `order_status`) VALUES
(48, 10, 1081023029, '37', 1, 'Small', 'Array'),
(49, 10, 681562540, '41', 1, 'Medium', 'Array'),
(50, 11, 650201398, '40', 1, 'Medium', 'Array'),
(52, 11, 1824041482, '41', 1, '', 'pending'),
(53, 11, 1216200572, '42', 1, 'Large', 'Cash On Delivery'),
(54, 11, 1216200572, '44', 1, 'Medium', 'Cash On Delivery'),
(55, 14, 407345682, '34', 1, 'Medium', 'pending'),
(56, 14, 407345682, '43', 1, 'Medium', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `product_keywords` text NOT NULL,
  `product_label` text NOT NULL,
  `product_sale` int(10) NOT NULL,
  `product_qty` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_desc`, `product_keywords`, `product_label`, `product_sale`, `product_qty`) VALUES
(29, 14, 1, '2019-11-29 20:12:37', 'Full Sleeve T-Shirts', '11.jpg', '11.jpg', '11.jpg', 300, 'Measurement:\r\n\r\nM - Length 27\" chest 38\".\r\nL - Length 28\" chest: 40\".\r\nXL - Length 29\" chest 42\",\r\nXXL - Length 30\" chest 44\"            \r\n                                                            \r\n                                                      ', 'tshirt', 'sale', 250, 100),
(32, 14, 2, '2019-11-29 20:26:52', 'Three Piece', 'ia_2800000055.jpg', 'ia_2800000055.jpg', 'ia_2800000055.jpg', 1500, '', 'Three piece', 'new', 1300, 100),
(33, 14, 3, '2019-11-29 20:28:46', 'Panjabis', 'ia_3300000060.jpg', 'ia_3300000059.jpg', 'ia_3300000060.jpg', 1000, '', 'Panjabis', 'new', 900, 100),
(34, 14, 1, '2020-05-03 15:22:14', 'T-Shirts', 'ia_2100000026.jpg', 'ia_2100000026.jpg', 'ia_2100000026.jpg', 600, '', 'tshirt', 'sale', 550, 99),
(35, 14, 2, '2019-11-29 20:31:30', 'Three Piece', 'ia_2800000059.jpg', 'ia_2800000059.jpg', 'ia_2800000059.jpg', 999, '', 'Three piece', 'new', 900, 100),
(36, 14, 2, '2019-11-29 20:33:25', 'Jewelry Scarf', 'ia_3100000033.jpg', 'ia_3100000033.jpg', 'ia_3100000033.jpg', 1500, '', 'Scarf', 'new', 800, 100),
(37, 15, 3, '2019-12-01 18:25:21', 'Kids Bag', 'ia_4600000056.jpg', 'ia_4600000056.jpg', 'ia_4600000056.jpg', 1100, '                              \r\n                                                            \r\n                          ', 'bags', 'sale', 1000, 99),
(38, 15, 1, '2019-12-01 09:15:54', 'Sunglass', 'ia_3600000028.jpg', 'ia_3600000028.jpg', 'ia_3600000011.jpg', 600, '', 'sunglass', 'new', 550, 79),
(39, 15, 2, '2019-12-03 08:10:13', 'Women Bags', 'ia_4200000050.jpg', 'ia_4200000051.jpg', 'ia_4200000052.jpg', 1500, '                              \r\n                                                            \r\n                                                            \r\n                                                        \r\n                          ', 'bags', 'sale', 1400, 18),
(40, 16, 1, '2019-12-03 08:02:00', 'Shoes', 'ia_4800000019.jpg', 'ia_4800000029.jpg', 'ia_4800000013.jpg', 4000, '', 'shoes', 'sale', 3500, 97),
(41, 19, 1, '2019-12-03 08:53:57', 'Smart Watch', 'ia_6600000018.jpg', 'ia_6600000025.jpg', 'ia_6600000019.jpg', 2500, '                              \r\n                                                            \r\n                          ', 'watch', 'new', 2400, 15),
(42, 14, 1, '2020-02-23 18:10:52', 'Tshirt', '12.jpg', '12.jpg', '12.jpg', 300, '                              \r\n                                                            \r\n                          ', 'tshirt', 'new', 250, 0),
(43, 19, 4, '2020-05-03 15:22:14', 'Glass Protector', 'ia_100000004859.jpg', 'ia_100000004859.jpg', 'ia_100000004859.jpg', 400, '                              \r\n                                                            \r\n                          ', 'glassprotector', 'sale', 350, -1),
(44, 14, 1, '2020-02-23 18:10:53', 'Tshirt', '11.jpg', '10.jpg', '10.jpg', 300, '', 'shoes', 'sale', 250, -1);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(14, '   CLOTHING   ', 'Exclusive CLOTHING â€™s Collection At Most Attractive Price\r\nMen are equally as excited as women when it comes to online shopping Menâ€™s clothing. To share the excitement, Bagdoom.com is here with the variety of men fashion items to satisfy your urge to stand out in the crowd.'),
(15, 'ACCESSORIES', ''),
(16, 'SHOES', ''),
(17, 'WATCHES', ''),
(18, 'HEALTH CARE', ''),
(19, 'LIFESTYLE GADGETS', '');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `slider_name` varchar(255) NOT NULL,
  `slider_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_name`, `slider_image`) VALUES
(1, 'slider number 1', '1.jpg'),
(2, 'slider number 2', '2.jpg'),
(7, '6', '3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
