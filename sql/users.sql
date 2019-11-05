-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 05, 2019 at 08:55 AM
-- Server version: 5.7.24-log
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'Bob', 'boob', 'bob@gmail.com'),
(2, 'Bob', 'boob', 'bob@gmail.com'),
(3, 'username', 'password', 'email'),
(4, 'username', 'password', 'email'),
(5, 'username', 'password', 'email'),
(6, 'username', 'password', 'email'),
(7, 'username', 'password', 'email'),
(8, 'username', 'password', 'email'),
(9, 'username', 'password', 'email'),
(10, 'username', 'password', 'email'),
(11, 'username', 'password', 'email'),
(12, 'username', 'password', 'email'),
(13, 'MC', 'asdfg', 'asdf'),
(14, 'rahulV', '12345', '7872723447'),
(15, 'Pijush', '12345', 'pijushmanna12344@gmail.com'),
(16, 'RohitJ', 'star', 'email@gmail.com'),
(17, '16900115053', '23456', 'pijushmanna12344@gmail.com'),
(18, 'NewUser', 'star', 'test@pmalil');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
