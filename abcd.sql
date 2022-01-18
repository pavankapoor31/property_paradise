-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 05:20 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abcd`
--

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `BHK` int(1) NOT NULL,
  `BUA` varchar(20) NOT NULL,
  `CA` varchar(20) NOT NULL,
  `LOC` varchar(100) NOT NULL,
  `NUMB` bigint(10) NOT NULL,
  `PRICE` bigint(3) NOT NULL,
  `P_DESC` varchar(150) NOT NULL,
  `username` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`BHK`, `BUA`, `CA`, `LOC`, `NUMB`, `PRICE`, `P_DESC`, `username`, `id`) VALUES
(2, '3', '3', '3', 9999999999, 99, '99', 'pavankapoor31@gmail.com', 16);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `ID` int(11) NOT NULL,
  `BHK` int(5) NOT NULL,
  `SIZE` bigint(10) NOT NULL,
  `PRICE` bigint(10) NOT NULL,
  `CONTACT` bigint(10) NOT NULL,
  `ADDRESS` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`ID`, `BHK`, `SIZE`, `PRICE`, `CONTACT`, `ADDRESS`) VALUES
(2, 2, 1200, 20000, 9876987600, 'This is an example requirement');

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `BHK` int(1) NOT NULL DEFAULT 1,
  `BUA` varchar(20) NOT NULL,
  `CA` varchar(20) NOT NULL,
  `LOC` varchar(100) NOT NULL,
  `NUMB` bigint(10) NOT NULL,
  `PRICE` bigint(13) NOT NULL,
  `P_DESC` varchar(150) NOT NULL,
  `username` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`BHK`, `BUA`, `CA`, `LOC`, `NUMB`, `PRICE`, `P_DESC`, `username`, `id`) VALUES
(3, '1700', '1650', 'koramangala', 9876587656, 15600000, '3bhk Property for sale', 'Syeda@gmail.com', 1),
(2, '1200', '1190', 'btm', 9879876541, 12100000, 'for sale', 'pavankapoor31@gmail.com', 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'pavankapoor31@gmail.com', '$2y$10$ArHdEvDkkQe1DB8xzU5RP.7yF7pRIo7rVWDbdRHjUIQcStsImA0A6', '2022-01-06 22:56:43'),
(2, 'rishabh12@gmail.com', '$2y$10$8kE9EEOMQwMGULIJ.NrkVuxk4URo/fO9Uh0slEMW50WHOlEUYaY2C', '2022-01-05 22:34:52'),
(3, 'Syeda@gmail.com', '$2y$10$LspKE9BRghVwWyFPqCVLHu6OOyblRvx633JGfXX5fI28ReONCiuPq', '2022-01-05 09:23:39');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `usertype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`fname`, `lname`, `username`, `usertype`) VALUES
('PAVAN', 'KAPOOR', 'pavankapoor31@gmail.com', 'buyer'),
('RISHABH', 'SAHU', 'rishabh12@gmail.com', 'buyer'),
('Syeda', 'Zaineb', 'Syeda@gmail.com', 'buyer');

--
-- Triggers `user_details`
--
DELIMITER $$
CREATE TRIGGER `tr_user_name` BEFORE INSERT ON `user_details` FOR EACH ROW BEGIN
SET new.fname= upper(new.fname);
SET new.lname= upper(new.lname);
end
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD KEY `username` (`username`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sell`
--
ALTER TABLE `sell`
  ADD KEY `username` (`username`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD KEY `username` (`username`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`username`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sell`
--
ALTER TABLE `sell`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rent`
--
ALTER TABLE `rent`
  ADD CONSTRAINT `rent_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sell`
--
ALTER TABLE `sell`
  ADD CONSTRAINT `sell_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
