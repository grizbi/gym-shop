-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 15, 2020 at 11:49 AM
-- Server version: 10.3.22-MariaDB-0+deb10u1
-- PHP Version: 7.3.14-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `j.kos`
--

-- --------------------------------------------------------

--
-- Table structure for table `towar`
--

CREATE TABLE `towar` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(128) DEFAULT NULL,
  `cena` float DEFAULT NULL,
  `szt` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `towar`
--

INSERT INTO `towar` (`id`, `nazwa`, `cena`, `szt`) VALUES
(1, 'herbata', 3.8, 123),
(2, 'ciastka', 4.5, 150),
(3, 'woda', 1.5, 3000),
(4, 'papierosy', 15.5, 123),
(5, 'piwo', 5, 100),
(6, 'sliwki', 4, 123),
(7, 'chipsy', 5, 400),
(8, 'pizza', 10, 250),
(9, 'kawa', 12, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `haslo` varchar(20) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `login`, `email`, `haslo`) VALUES
(42, 'zosia', 'zosia@wp.pl', 'zosia'),
(43, 'test123', 'test123@o2.pl', 'test123'),
(44, 'test321', 'test321@gmail.com', 'test321'),
(45, 'tescik25', 'tescik25@o2.pl', 'tescik25'),
(46, 'jedentest', 'jedentest@o2.pl', 'jedentest'),
(47, 'kuba123', 'kuba123@o2.pl', 'kuba123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `towar`
--
ALTER TABLE `towar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `towar`
--
ALTER TABLE `towar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
