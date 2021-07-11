-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 11, 2021 at 10:30 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `domain` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confirm_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `branch`, `year`, `domain`, `password`, `confirm_password`) VALUES
(1, 'Nachiket', 'mnachiket123@gmail.com', '9988776655', NULL, '3rd', NULL, '$2y$10$HjbJ3QUjHahNFx5kpt37I.iikpaNhCxytcViNI.w.1n2vX0gNXmQi', '$2y$10$icgOVt57vahy7j3.Mo39ROi.SvXEVyvU6jDYCBryAYIuifMCYDS4K'),
(2, 'Siba', 'pinku2000@gmail.com', '76574823', '', '3rd', '', '$2y$10$T1AZiY5zMEEYWA1KJO1ATeO/MAn5hoNOaUXQDWwa3SHzW5L4ZFkga', '$2y$10$15HOtwMvHhEalUF4K2RRgeSeFUNVNIyzOBnucuB38ZjX6W5BFA1aG'),
(3, 'Nachiket Mohanty', 'nachiket1913@gmail.com', '7894232472', '', '3rd', '', '$2y$10$ITmLSZ3Ymxi2zIR29ZN4nuTkUCCm4RGpFxjJJIOZFFaMaurFhwIUq', '$2y$10$7qnk4cwcNUSkJO.7oNdQ7OAYTYMtd24XIfs7wcLZtobIy9a9OWfQK'),
(4, 'soumya', 'soumya88@gmail.com', '7865432342', '', '3rd', '', '$2y$10$wq6L9Jg9Y3b91fhCSW4r7up.JoncumV5Zg8/2AxLyWvUBTjw1BLLe', '$2y$10$WhCOAqIpwhtcW.s2eM2GN.TL0F0vIjaDMGUa2/y8UWOXj5Vy6Hpjq'),
(5, 'satyam', 'satyam@gmail.com', '7865432123', '', '3rd', '', '$2y$10$DNSfppBLuDMQzU6J5fDWsOFM0SNkfo6MdPTjmeJutYGWAjiRe0pkG', '$2y$10$pO59LdadDW725Wy49KFygeLGKbYk1NOqWU7I4Zbg1rPgcFKZrB5..'),
(6, 'Sibundu', 'siba88@gmail.com', '8877665544', 'IT', '3rd', 'Software', '$2y$10$hd0Vw2WFqP4hlJ.CI1o2pu8JrNO.h/MtPm4ogghBHdTe8wXP6zLYm', '$2y$10$c0Etz8k77orcjGoIaWKrF.ylZJzvkzkettblVrZlJk.3PK9dQNt8i');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
