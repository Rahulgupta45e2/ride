-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2022 at 08:39 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ride`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(38) NOT NULL,
  `user_id` int(38) NOT NULL,
  `car_id` int(38) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pickup` date NOT NULL,
  `dropup` date NOT NULL,
  `location` text NOT NULL,
  `doc` varchar(2000) NOT NULL,
  `docno` int(38) NOT NULL,
  `status` int(38) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `user_id`, `car_id`, `name`, `email`, `pickup`, `dropup`, `location`, `doc`, `docno`, `status`) VALUES
(1, 15, 6, 'amol', 'amol@gmail.com', '2022-05-14', '2022-05-21', 'model town', 'Voter card', 1234, 1),
(2, 15, 12, 'sudhir ji', 'sudhir@gmail.com', '2022-05-14', '2022-05-15', 'prem nagar ludhiana', 'Adhaar card', 1234445555, 0),
(7, 17, 4, 'dilip kumar yadav', 'dilip1200@gamil.com', '2022-05-21', '2022-05-23', 'ASHOK Nagar', 'Voter card', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(38) NOT NULL,
  `name` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `fuel` varchar(255) NOT NULL,
  `price` int(38) NOT NULL,
  `img` varchar(2000) NOT NULL,
  `year` int(38) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `model`, `type`, `fuel`, `price`, `img`, `year`) VALUES
(4, '', 'CRETA SUV ', '5 SETER', 'DISEL', 15000, 'cr.png', 2021),
(5, '', 'Maruti Suzuki Ertiga', '7seter', 'Diesel/petrol', 15000, 'm2.jpg', 2021),
(6, '', 'Maruti Suzuki Alto', '4 seter', 'Diesel', 20000, 'm1.webp', 2020),
(8, '', 'Kia Carens Sonet', '6seter', 'Diesel', 30000, 'm4.webp', 2021),
(10, '', 'Mahindra Alturas-G4', '5 Seter', 'Diesel', 34000, 'Mahindra-Alturas-G4_27.jpg', 2019),
(11, '', 'Mahindra-Ford-fy22 ', '6 Seter', 'Turbo-petrol', 34000, 'm5.jpg', 2021),
(12, '', 'Mahindra Thar', 'Diesel ', '6 seter', 40000, 'm6.jpg', 2019),
(13, '', 'Mahindra TUV300-Bolero Neo', '7 seter', 'Diesel', 34000, 'm7.webp', 2021),
(14, '', 'Mercedes-Benz', '2 seter', 'electic/Diesel', 80000, 'm8.jpg', 2022),
(15, '', 'BMW 8 Series Gran', '4 seter', 'Petrol', 80000, 'm9.webp', 2019),
(16, '', ' Land Rover-Velar-TBG 869', '8 seter', 'Diesel/pertorl', 80000, 'm10.jpg', 2019),
(17, '', 'Jaguar XJL Portfolio', '4 seter', 'Diesel', 82000, 'm11.jpg', 2015);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `feedback` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `feedback`) VALUES
(1, 'amol kumar', 'provide best facility of cars'),
(2, 'dilip', 'Search Best Motor Car Insurance, Information from Trusted Internet Sources. Explore the Best Info Now. 100+ Unique Results. Find All Info You Want. Quick Answers. Useful & Relevant. Find in Seconds. Services');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(38) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(9, 'test3', 'test3@gamil.com', 'test'),
(10, 'mehfuj', 'mehfuj07861313@gmail.com', 'mehfuj0786'),
(11, 'mehfuj alam', 'mehfuj0783@gmail.com', 'alam'),
(12, 'rahul', 'rahulgupta164233@gmail.com', 'rahul'),
(13, 'am', 'am@gmail.com', 'jsdkja'),
(14, 'rahulgupta@gmail.com', 'om@om.com', '$2y$10$pZ4V/HJMwAHKM5gTlSV6sevqbh9jrkEDYLJ/WCFEc6/OXF45YTB5i'),
(15, 'hello', 'hello@gm.com', '$2y$10$gq4Fw/TZ.J1B7Xuo7S7y7OlBh7G98ki1bS5hAkEw0SSjeWfG7KsWq'),
(16, 'dilip kumar', 'dilip12345@gmail.com', '$2y$10$laYhyQVNGmwX5IDdtZJefOT8Gz89QrzKNxFHZgyfkqQITin2cq0a6'),
(17, 'dilip ', 'dilip1200@gamil.com', '$2y$10$RKoHLPoxZY.R3imyzT0Q1OD0mC5MG9Fj/6CqXt/a2hNetxQYAp7wO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `car_id` (`car_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(38) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(38) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(38) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
