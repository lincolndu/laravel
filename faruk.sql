-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 08, 2015 at 11:43 AM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `faruk`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(222) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(433) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `description`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'there will be blood', 'It''s description', '', 1436332655, 1436332655),
(2, 'sd', 'ds', '/tmp/phpGeOCLS', 1436333375, 1436333375),
(3, 'there will be blood', 'sd', '/var/www/faruk-laravel-5/public/photo/faruk', 1436333451, 1436333451);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `remember_token`, `updated_at`, `created_at`) VALUES
(8, 'saif@grameentek.com', 'c20ad4d76fe97759aa27a0c99bff6710', '', 1435726912, 1435726912),
(9, 'mit@grameentek.com', '2db95e8e1a9267b7a1188556b2013b33', '', 1436158645, 1435727090);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
