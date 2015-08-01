-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 23, 2015 at 07:33 PM
-- Server version: 5.6.24-0ubuntu2.1
-- PHP Version: 5.6.4-4ubuntu6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zia_hall`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(62) NOT NULL,
  `remember_token` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `updated_at`, `created_at`) VALUES
(3, 'mahmud', 'mahmuddu@gmail.com', '$2y$10$yFMWRGAZ/ZobQiEyJ27s/OMdWi66x3NgYVBVN/cvKgN8SJZwFFsYS', 0, 2015, 2015),
(4, 'halima', 'halima@gmail.com', '$2y$10$DJSfQkbvL4ukhgZRmHz7teCv.JHKct6qUGxi9xVH6LUSjHmcarH/S', 1, 2015, 2015),
(5, 'rabeya', 'rabeya@gmail.com', '$2y$10$y9rzxZRRUEoZlQupo4ln7e3P.E3.VdkOtAuqCKdMkrgho2HKtusly', 0, 2015, 2015),
(6, 'habib', 'habib@gmail.com', '$2y$10$RqdQ1z3btOPVtGiGYOD8QuTsIO3CApWZ2V3ctA5dHAG8yZEjo.1qG', 0, 2015, 2015),
(7, 'lincoln', 'lincolndu@yahoo.com', '$2y$10$dMYCyi7QOu4djNjvOQFUaO9jbDEMvgdmVHaGmKy49Zm1Bmk5rDyai', 0, 2015, 2015);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
