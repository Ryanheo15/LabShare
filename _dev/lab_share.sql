-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2020 at 10:10 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab_share`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(5) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `size` decimal(10,4) DEFAULT NULL,
  `unit` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(7) NOT NULL,
  `manufacturer` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cas_number` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comments` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `name`, `state`, `size`, `unit`, `quantity`, `manufacturer`, `cas_number`, `comments`, `link`, `user_id`) VALUES
(2, 'Hydrochloric Acid (Technical)', 'Liquid', '0.3000', 'Liters (L)', 1, 'Fisher Scientific', '7647-01-0', '33-38% Purity', 'https://www.fishersci.com/shop/products/hydrochloric-acid-technical-fisher-chemical-2/A142212', 3),
(3, 'Hydrogen Dioxide', 'Gas', '50.0000', 'Liters (L)', 1, 'Trees Inc.', '01-1234-10', 'fresh', 'asdf', 2),
(4, 'Hydrochloric Acid (Technical)', 'Liquid', '0.3000', 'Liters (L)', 1, 'Fisher Scientific', '7647-01-0', '33-38% Purity', 'https://www.fishersci.com/shop/products/hydrochloric-acid-technical-fisher-chemical-2/A142212', 3),
(5, 'Hydrogen Dioxide', 'Gas', '50.0000', 'Liters (L)', 1, 'Trees Inc.', '01-1234-10', 'fresh', 'asdf', 2),
(6, 'Hydrochloric Acid (Technical)', 'Liquid', '0.3000', 'Liters (L)', 1, 'Fisher Scientific', '7647-01-0', '33-38% Purity', 'https://www.fishersci.com/shop/products/hydrochloric-acid-technical-fisher-chemical-2/A142212', 3),
(7, 'Hydrogen Dioxide', 'Gas', '50.0000', 'Liters (L)', 1, 'Trees Inc.', '01-1234-10', 'fresh', 'asdf', 2),
(8, 'Hydrochloric Acid (Technical)', 'Liquid', '0.3000', 'Liters (L)', 1, 'Fisher Scientific', '7647-01-0', '33-38% Purity', 'https://www.fishersci.com/shop/products/hydrochloric-acid-technical-fisher-chemical-2/A142212', 3),
(9, 'Hydrogen Dioxide', 'Gas', '50.0000', 'Liters (L)', 1, 'Trees Inc.', '01-1234-10', 'fresh', 'asdf', 2),
(10, 'Hydrochloric Acid (Technical)', 'Liquid', '0.3000', 'Liters (L)', 1, 'Fisher Scientific', '7647-01-0', '33-38% Purity', 'https://www.fishersci.com/shop/products/hydrochloric-acid-technical-fisher-chemical-2/A142212', 3),
(11, 'Hydrogen Dioxide', 'Gas', '50.0000', 'Liters (L)', 1, 'Trees Inc.', '01-1234-10', 'fresh', 'asdf', 2),
(12, 'Hydrogen Dioxide', 'Gas', '50.0000', 'Liters (L)', 1, 'Trees Inc.', '01-1234-10', 'fresh', 'asdf', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `primary_id` int(4) NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `institution` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `division` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `building` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `notification_limit` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`primary_id`, `first_name`, `last_name`, `email`, `password`, `institution`, `department`, `division`, `building`, `notification_limit`) VALUES
(47, 'LabShare', 'Admin', 'admin@labshare.net', '$2y$10$iusesomecrazystrings2ur6nj.D8DC3mirp3W7h1NPF6FmX3StMW', '', '', '', '', 0),
(48, 'Adory', 'Vo', 'avo@ucsd.edu', '$2y$10$iusesomecrazystrings2uOVjoe2aXOa448G1820m4LtI92I9Hgxi', 'University of California, San Diego', 'Computer Science', 'Computer Science', 'Jacobs', 100),
(49, 'Ryan', 'Heo', 'rjheo@ucsd.edu', '$2y$10$iusesomecrazystrings2uOVjoe2aXOa448G1820m4LtI92I9Hgxi', 'University of California, San Diego', 'Computer Science', 'Computer Science', 'Jacobs', 5),
(50, '', '', '@ucsd.edu', '$2y$10$iusesomecrazystrings2uvQRiEJkKIK1kr5c2HE.ycP43gPWJ6rm', '', '', '', '', 0),
(51, 'Tester', 'Uno', 'tester1@ucsd.edu', '$2y$10$iusesomecrazystrings2uOVjoe2aXOa448G1820m4LtI92I9Hgxi', 'University of California, San Diego', 'asdf', 'asdf', 'asdfasdf', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`primary_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `primary_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
