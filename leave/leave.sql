-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2019 at 05:11 AM
-- Server version: 5.7.15-log
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leave`
--

-- --------------------------------------------------------

--
-- Table structure for table `reason`
--

CREATE TABLE `reason` (
  `Username` varchar(20) NOT NULL,
  `Subject` varchar(250) NOT NULL,
  `reason` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reason`
--

INSERT INTO `reason` (`Username`, `Subject`, `reason`) VALUES
('sda', '', 'sada                '),
('kmjbro', '', 'i have sickness and i suffer from cold'),
('sickness', '', 'im suffering from cold\r\n'),
('kmjbro', 'sickness', '                    hi'),
('jithin', 'regarding sickness', 'i have to go.'),
('asdf', 'asd', '              asda      '),
('', 'alskdj', '                    adkjsfhjak'),
('gammi', 'alskdj', '                    adkjsfhjak'),
('', 'alskdj', '                    adkjsfhjak'),
('kmj', 'alskdj', '                    adkjsfhjak'),
('asgard', 'alskdj', '         as           adkjsfhjak'),
('asgard', 'alskdj', '         as           adkjsfhjak'),
('kmjbro', 'jbk', 'mhj'),
('kmjbro', 'sickness', '           ujyg         '),
('kmjbro', 'sickness', '         kjh           ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(8, 'kmjbro', '$2y$10$sa6wO0bHoh4UjqmhUp0KiutDiSbc8AVvDQan/C/ZP31rcFRhzBhfO', '2019-11-07 21:55:28'),
(9, 'kingkaushal', '$2y$10$84aDb.c9Q1QsdGUjvTJK1eZrOELtb8x23q2wK/jb4Dgxkdey06krG', '2019-11-08 01:03:22'),
(10, 'subramanya kashyap', '$2y$10$0XAw6xkNUWWkzP9p1vALPOlcrMJ1kP3wHjyESXe62pdira3FcLZXu', '2019-11-08 01:29:48'),
(11, 'jithin', '$2y$10$QZo.5j6UjZVCgHC7HddW4OwVyNyVbPBWyAm9m98H0KnnE214UW27G', '2019-11-08 21:56:50'),
(12, 'gcp', '$2y$10$3wAPHI0Ze0GtUSketAhOy.WiWe0etVRxpSjeKyf0VycmepXr6e4wi', '2019-11-08 23:30:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
