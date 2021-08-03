-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2021 at 04:11 PM
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
-- Database: `cloud`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'website development'),
(2, 'SEO service'),
(5, 'Graphics Design'),
(6, 'Logo Design'),
(7, 'Social media marketing'),
(8, 'Banner Design'),
(12, 'updated demo 5');

-- --------------------------------------------------------

--
-- Table structure for table `express`
--

CREATE TABLE `express` (
  `parent_id` int(11) NOT NULL,
  `delivery_time` varchar(255) NOT NULL,
  `delivery_cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `express`
--

INSERT INTO `express` (`parent_id`, `delivery_time`, `delivery_cost`) VALUES
(1, '15 days', 240),
(2, '25 days', 360),
(3, '15 days', 600),
(4, '15 days', 350),
(5, '7 days', 300),
(6, '15 days', 600),
(7, '15 days', 600),
(8, '15 days', 800),
(9, '24 hours', 130),
(10, '12 hours', 100),
(11, '12 hours', 50),
(12, '20', 500),
(13, '15', 600);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `sub_category` varchar(255) NOT NULL,
  `estimated_time` varchar(255) NOT NULL,
  `project_cost` int(11) NOT NULL,
  `cloud_skill` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `parent_id`, `sub_category`, `estimated_time`, `project_cost`, `cloud_skill`) VALUES
(1, 1, 'front-end', '20 days', 120, 'web developer'),
(2, 1, 'backend', '45 days', 180, 'web developer'),
(3, 1, 'full website', '30 days', 500, 'web developer'),
(4, 1, 'wix site', '20 days', 200, 'web developer'),
(5, 1, 'blog', '15 days', 200, 'web developer'),
(6, 1, 'business site', '30 days', 500, 'web developer'),
(7, 1, 'educational website', '30 days', 500, 'web developer'),
(8, 1, 'ecommerce website', '30 days', 550, 'web developer'),
(9, 6, '7 concepts', '48 hours', 100, 'graphics designer'),
(10, 6, '5 concepts', '24 hours', 70, 'graphics designer'),
(11, 6, '3 concepts', '24 hours', 30, 'graphics designer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `express`
--
ALTER TABLE `express`
  ADD PRIMARY KEY (`parent_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
