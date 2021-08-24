-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 24, 2021 at 03:20 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

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

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(5, 'Graphics Design'),
(7, 'Social media marketing'),
(8, 'Banner Design'),
(12, 'updated demo 5'),
(13, 'video editing '),
(15, 'animationmm');

-- --------------------------------------------------------

--
-- Table structure for table `clientdata`
--

DROP TABLE IF EXISTS `clientdata`;
CREATE TABLE IF NOT EXISTS `clientdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `country` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientdata`
--

INSERT INTO `clientdata` (`id`, `firstname`, `lastname`, `username`, `email`, `phone`, `country`, `password`) VALUES
(36, 'fdg', 'fdg', 'dfg', 'dfg', 'test1dfg', 'fdg', 'fdg'),
(35, 'fv', 'fv', 'vf', 'fv', 'vf', 'fv', 'fv'),
(34, 'as', 'sa', 'as', 'sa', 'sa', 'as', 'as'),
(33, 'test1', 'test1', 'test1', 'test1', 'test1', 'test1', 'test1'),
(32, 'as', 'as', 'as', 'as', 'as', 'as', 'as'),
(31, 'as', 'as', 'as', 'as', 'as', 'as', 'as'),
(29, 'aa', 'a2', 'a3', 'aaaaaa4', 'a5', 'a6', 'a7'),
(30, 'aa', 'a2', 'a3', 'aaaaaa4', 'a5', 'a6', 'a7'),
(37, 'sad', 'asd', 'asd', 'sad', 'sad', 'sad', 'sad'),
(38, 'sad', 'asd', 'asd', 'sad', 'sad', 'sad', 'sad'),
(39, 'test5', 'test5', 'test5', 'test5', 'test5', 'test5', 'test5'),
(40, 'test5', 'test5', 'test5', 'test5', 'test5', 'test5', 'test5'),
(41, 'prottoy', 'prottoy', 'prottoy', 'prottoy', 'prottoy', 'prottoy', 'prottoy');

-- --------------------------------------------------------

--
-- Table structure for table `clouddata`
--

DROP TABLE IF EXISTS `clouddata`;
CREATE TABLE IF NOT EXISTS `clouddata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `country` varchar(255) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `expertise` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clouddata`
--

INSERT INTO `clouddata` (`id`, `firstname`, `lastname`, `username`, `email`, `phone`, `country`, `skill`, `expertise`, `password`) VALUES
(1, 'asd', 'asd', 'sad', 'sad', 'asd', 'sad', 'sad', 'sda', 'sda'),
(2, 'qwe', 'wqe', 'wqe', 'wqe', 'wqe', 'wqe', 'qwe', 'ewq', 'wqe'),
(3, 'tyre', 'ytr', 'try', 'try', 'rty', 'ert', 'wer', 'rty', 'testew'),
(4, 'test1', 'test1', 'test1', 'test1', 'test1', 'test1', 'test1', 'test1', 'test1'),
(5, 'test1', 'test1', 'test1', 'test1', 'test1', 'test1', 'test1', 'test1', 'test1'),
(6, 'test2', 'test2', 'sdatest2', 'test2', 'test2', 'test2', 'test2', 'test2', 'test2'),
(7, 'yh', 'hy', 'yh', 'hyb', 'ynh', 'yhn', 'ynh', 'hny', 'yhn'),
(8, 'yju', 'tgr', 'trg', 'gtrrtg', 'trgrtg', 'trgtrg', 'tgrrtg', 'rtgtrg', 'rtggtr'),
(9, 'test-3', 'test-3', 'test-3', 'test-3', 'test-3', 'test-3', 'test-3', 'test-3', 'test-3'),
(10, 'sadsadsad', 'aasdsadasd', 'asdasdasd', 'asdasdasd', 'sadasdasd', 'asdsadsad', 'asdasdasd', 'asdsadasd', 'asdasdsad'),
(11, 'azizul', 'azizul', 'azizul', 'azizul', 'azizul', 'azizul', 'azizul', 'azizul', 'azizul');

-- --------------------------------------------------------

--
-- Table structure for table `express`
--

DROP TABLE IF EXISTS `express`;
CREATE TABLE IF NOT EXISTS `express` (
  `parent_id` int(11) NOT NULL,
  `delivery_time` varchar(255) NOT NULL,
  `delivery_cost` int(11) NOT NULL,
  PRIMARY KEY (`parent_id`)
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
(13, '15', 600),
(14, '20', 50),
(15, '12', 100);

-- --------------------------------------------------------

--
-- Table structure for table `showcase`
--

DROP TABLE IF EXISTS `showcase`;
CREATE TABLE IF NOT EXISTS `showcase` (
  `id` int(111) NOT NULL AUTO_INCREMENT,
  `title` varchar(111) NOT NULL,
  `price` varchar(111) NOT NULL,
  `shortdes` varchar(200) NOT NULL,
  `livelink` varchar(500) NOT NULL,
  `filename` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `showcase`
--

INSERT INTO `showcase` (`id`, `title`, `price`, `shortdes`, `livelink`, `filename`) VALUES
(17, 'asd', 'sad', 'asd', 'asd', '122230877_352115949430878_4177155041399839595_n.jpg'),
(16, 'hgfh', 'fghf', 'gfhgh', 'gfhfhg', 'chatbox.png'),
(14, 'version-1', '30', 'ytht', 'thgtyh', 'close-up-pen-financial-report-with-window-background.jpg'),
(15, ';ljkblkjbjk', 'tfhkjfvutkhg', 'o9ufgyluiyvfhg', 'i9hyloi8uhy', '1.png'),
(13, 'tryagain', 'tryagain', 'sad', 'asdasd', 'friendship-teamwork.jpg'),
(18, 'jhk', 'hjk', 'hjk', 'hjk', '482.jpg'),
(19, 'gb', 'bg', 'gb', 'bg', 'ar-4.jpg'),
(20, 'tgb', 'gb', 'b', 'bg', '5550.jpg'),
(21, 'sda', 'sdaasd', 'asdasd', 'sdasd', '482.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

DROP TABLE IF EXISTS `sub_category`;
CREATE TABLE IF NOT EXISTS `sub_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `sub_category` varchar(255) NOT NULL,
  `estimated_time` varchar(255) NOT NULL,
  `project_cost` int(11) NOT NULL,
  `cloud_skill` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `parent_id`, `sub_category`, `estimated_time`, `project_cost`, `cloud_skill`) VALUES
(14, 15, 'logo animation ', '24 hours', 40, 'animator'),
(15, 15, 'asds', '12', 40, 'animator');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'prottoy', '2441139', 'prottoy'),
(2, 'sadaf', '12345', 'sadaf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
