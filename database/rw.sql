-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 25, 2020 at 12:39 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rw`
--
CREATE DATABASE IF NOT EXISTS `rw` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `rw`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `comments`
--

TRUNCATE TABLE `comments`;
--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `content`) VALUES
(1, 'lai', 'lai@example.com', 'Very nice!'),
(2, 'dang', 'dang@example.com', 'awesome'),
(3, 'trung', 'trung@example.com', 'coming to restaurant soon..');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

DROP TABLE IF EXISTS `feedbacks`;
CREATE TABLE IF NOT EXISTS `feedbacks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(10000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `feedbacks`
--

TRUNCATE TABLE `feedbacks`;
--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `name`, `email`, `content`) VALUES
(1, 'Lại Minh Đức', 'duclm@gmail.com', '3wretsdytiyolkjh'),
(2, 'Lại Minh Đức', '325467i8o@gmail.com', 'skdgsjh\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  `category` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `menus`
--

TRUNCATE TABLE `menus`;
--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `price`, `category`) VALUES
(5, 'Chicken Dip', 5, 'appetizer'),
(6, 'Cheese Sausage Dip', 5, 'appetizer'),
(7, 'Corned Beef Quesadillas', 7, 'appetizer'),
(8, 'Meatball Spaghetti with Tomato Sauce', 9, 'main dish'),
(9, 'Beef Steak with Mashed Potato', 10, 'main dish'),
(10, 'Lasagna', 8, 'main dish'),
(11, 'Hamburger', 10, 'main dish'),
(12, 'Fruit yogurt', 3, 'dessert'),
(13, 'Cupcake', 4, 'dessert'),
(14, 'Caramel Brownie', 5, 'dessert'),
(15, 'Fruit', 5, 'dessert'),
(16, 'Coke', 1, 'drinks'),
(17, 'Soda', 2, 'drinks'),
(18, 'Beer', 4, 'drinks'),
(19, 'Wine', 4, 'drinks'),
(20, 'Juice', 2, 'drinks');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(10000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `posts`
--

TRUNCATE TABLE `posts`;
--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `author`, `content`, `tag`, `image`) VALUES
(5, 3, 'DISCOUNT FOR OPENING', 'Admin', '<p><strong>GREAT DISCOUNT FOR NEW OPENING</strong><br><br>SALES up to 20% with order more than 25$ and 40% with order more than 75$</p><p>FREE Drinks for any order more than 50$</p><p>SALES applied on every branch of our restaurant.</p><p>FOR RESERVATION: ONLINE or through HOTLINE: 123456789</p><p>THANKS for reading this and coming to our restaurant!</p>', 'discount, new opening', 'images/2cd9829ad29b293182411747b333b316bigstock-131329163.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `post_comment`
--

DROP TABLE IF EXISTS `post_comment`;
CREATE TABLE IF NOT EXISTS `post_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `comment_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `post_id` (`post_id`),
  KEY `comment_id` (`comment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `post_comment`
--

TRUNCATE TABLE `post_comment`;
--
-- Dumping data for table `post_comment`
--

INSERT INTO `post_comment` (`id`, `post_id`, `comment_id`) VALUES
(1, 5, 1),
(2, 5, 2),
(22, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cus_name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_guests` int(11) DEFAULT NULL,
  `status` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `reservations`
--

TRUNCATE TABLE `reservations`;
--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `date`, `time`, `address`, `phone`, `cus_name`, `no_of_guests`, `status`) VALUES
(1, '2020-06-30', '17:35', '', '235647', 'duc', 2, 'ordered'),
(2, '2020-06-29', '20:51', 'Aeon Mall', '325', 'duc', 2, 'ordered');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`, `role`) VALUES
(1, 'lai ', 'laiminhduc99@gmail.com', 'Duc12duc@', '1234567', 'staff'),
(2, 'Duclm', 'dm@gmail.com', 'Duc12duc@', '12345678', 'admin'),
(3, 'duc', 'admin@gmail.com', '12345678', '325468769', 'admin'),
(4, 'dang', 'staff@gmail.com', '12345678', '325468769', 'staff');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post_comment`
--
ALTER TABLE `post_comment`
  ADD CONSTRAINT `post_comment_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_comment_ibfk_2` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
