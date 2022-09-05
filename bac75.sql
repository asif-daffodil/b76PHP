-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2022 at 10:20 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bac75`
--

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `SNo` int(11) NOT NULL,
  `District` varchar(20) DEFAULT NULL,
  `Division` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`SNo`, `District`, `Division`) VALUES
(1, '', ''),
(2, 'Barisal District', 'Barisal'),
(3, 'Bhola District', 'Barisal'),
(4, 'Jhalokati District', 'Barisal'),
(5, 'Patuakhali District', 'Barisal'),
(6, 'Pirojpur District', 'Barisal'),
(7, 'Bandarban District', 'Chittagong'),
(8, 'Brahmanbaria Distric', 'Chittagong'),
(9, 'Chandpur District', 'Chittagong'),
(10, 'Chittagong District', 'Chittagong'),
(11, 'Comilla District', 'Chittagong'),
(12, 'Cox\'s Bazar District', 'Chittagong'),
(13, 'Feni District', 'Chittagong'),
(14, 'Khagrachhari Distric', 'Chittagong'),
(15, 'Lakshmipur District', 'Chittagong'),
(16, 'Noakhali District', 'Chittagong'),
(17, 'Rangamati District', 'Chittagong'),
(18, 'Dhaka District', 'Dhaka'),
(19, 'Faridpur District', 'Dhaka'),
(20, 'Gazipur District', 'Dhaka'),
(21, 'Gopalganj District', 'Dhaka'),
(22, 'Jamalpur District', 'Dhaka'),
(23, 'Kishoreganj District', 'Dhaka'),
(24, 'Madaripur District', 'Dhaka'),
(25, 'Manikganj District', 'Dhaka'),
(26, 'Munshiganj District', 'Dhaka'),
(27, 'Mymensingh District', 'Dhaka'),
(28, 'Narayanganj District', 'Dhaka'),
(29, 'Narsingdi District', 'Dhaka'),
(30, 'Netrakona District', 'Dhaka'),
(31, 'Rajbari District', 'Dhaka'),
(32, 'Shariatpur District', 'Dhaka'),
(33, 'Sherpur District', 'Dhaka'),
(34, 'Tangail District', 'Dhaka'),
(35, 'Bagerhat District', 'Khulna'),
(36, 'Chuadanga District', 'Khulna'),
(37, 'Jessore District', 'Khulna'),
(38, 'Jhenaidah District', 'Khulna'),
(39, 'Khulna District', 'Khulna'),
(40, 'Kushtia District', 'Khulna'),
(41, 'Magura District', 'Khulna'),
(42, 'Meherpur District', 'Khulna'),
(43, 'Narail District', 'Khulna'),
(44, 'Satkhira District', 'Khulna'),
(45, 'Bogra District', 'Rajshahi'),
(46, 'Joypurhat District', 'Rajshahi'),
(47, 'Naogaon District', 'Rajshahi'),
(48, 'Natore District', 'Rajshahi'),
(49, 'Nawabganj District', 'Rajshahi'),
(50, 'Pabna District', 'Rajshahi'),
(51, 'Rajshahi District', 'Rajshahi'),
(52, 'Sirajganj District', 'Rajshahi'),
(53, 'Dinajpur District', 'Rangpur'),
(54, 'Gaibandha District', 'Rangpur'),
(55, 'Kurigram District', 'Rangpur'),
(56, 'Lalmonirhat District', 'Rangpur'),
(57, 'Nilphamari District', 'Rangpur'),
(58, 'Panchagarh District', 'Rangpur'),
(59, 'Rangpur District', 'Rangpur'),
(60, 'Thakurgaon District', 'Rangpur'),
(61, 'Habiganj District', 'Sylhet'),
(62, 'Moulvibazar District', 'Sylhet'),
(63, 'Sunamganj District', 'Sylhet'),
(64, 'Sylhet District', 'Sylhet');

-- --------------------------------------------------------

--
-- Table structure for table `produt`
--

CREATE TABLE `produt` (
  `id` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `price` float(8,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `vendorName` varchar(65) DEFAULT NULL,
  `mDate` date DEFAULT NULL,
  `eDate` date DEFAULT NULL,
  `totalAmount` float(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produt`
--

INSERT INTO `produt` (`id`, `name`, `price`, `quantity`, `vendorName`, `mDate`, `eDate`, `totalAmount`) VALUES
(1, 'Mouse', 450.00, 1000, 'Computer Source', '2021-10-01', '2023-10-01', 450000.00),
(2, 'Keyboard', 450.00, 1000, 'Computer Source', '2021-10-01', '2023-10-01', 450000.00),
(3, 'Monitor', 8000.00, 50, 'Computer Source', '2021-10-01', '2023-10-01', 400000.00);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `html` int(11) DEFAULT NULL,
  `css` int(11) DEFAULT NULL,
  `bac` int(11) DEFAULT NULL,
  `javascript` int(11) DEFAULT NULL,
  `stuid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `html`, `css`, `bac`, `javascript`, `stuid`) VALUES
(1, 40, 45, 48, 40, 5),
(2, 50, 40, 48, 35, 4),
(3, 40, 40, 40, 40, 1),
(4, 30, 30, 30, 30, 2),
(5, 45, 45, 45, 45, 3);

-- --------------------------------------------------------

--
-- Table structure for table `stuinfo`
--

CREATE TABLE `stuinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stuinfo`
--

INSERT INTO `stuinfo` (`id`, `name`, `email`, `address`) VALUES
(1, 'Sojib', 'sojib@dipti.com.bd', 'Rayarbag'),
(2, 'Shawn', 'shawn@dipti.com.bd', 'Lalmatia'),
(3, 'Sadat', 'sadat@dipti.com.bd', 'Sobahna Bagh'),
(4, 'Ajoy', 'ajoy@dipti.com.bd', 'Mohammadpur'),
(5, 'Ratul', 'ratul@dipti.com.bd', 'Mirpur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`SNo`);

--
-- Indexes for table `produt`
--
ALTER TABLE `produt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`stuid`);

--
-- Indexes for table `stuinfo`
--
ALTER TABLE `stuinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `SNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `produt`
--
ALTER TABLE `produt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stuinfo`
--
ALTER TABLE `stuinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `id` FOREIGN KEY (`stuid`) REFERENCES `stuinfo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
