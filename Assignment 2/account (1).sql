-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2024 at 04:48 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `account`
--

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transactionId` int(20) NOT NULL,
  `date` date NOT NULL,
  `amount` int(100) NOT NULL,
  `transactionType` varchar(200) NOT NULL,
  `transactionDescription` varchar(200) DEFAULT NULL,
  `userId` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transactionId`, `date`, `amount`, `transactionType`, `transactionDescription`, `userId`) VALUES
(1, '2024-02-23', -6, 'POS Purchase', 'APOS THE HUMBER COLL ETOBICOKE ONCA', 1),
(2, '2024-02-22', -14, 'WITHDRAWAL', 'FREE INTERAC E-TRANSFER', 1),
(3, '2024-02-22', -6, 'POS Purchase', 'APOS THE HUMBER COLL ETOBICOKE ONCA', 1),
(4, '2024-02-21', -37, 'POS Purchase', 'APOS CANADIAN TIRE # BRAMPTON ONCA', 1),
(5, '2024-02-21', -12, 'POS Purchase', 'APOS MTO TSD BRAMPTO BRAMPTON ONCA', 1),
(6, '2024-02-20', 106, 'Miscellaneous Payment', 'DoorDash, Inc.', 1),
(7, '2024-02-19', -50, 'Customer Transfer Dr.', 'MB-CREDIT CARD/LOC PAY.', 1),
(8, '2024-02-17', 15, 'DEPOSIT', 'FREE INTERAC E-TRANSFER', 1),
(9, '2024-02-17', -15, 'POS Purchase', 'APOS BAR BURRITO BRAMPTON ONCA', 1),
(10, '2024-02-17', -165, 'WITHDRAWAL', 'FREE INTERAC E-TRANSFER', 1),
(11, '2024-02-16', -183, 'POS Purchase', 'APOS MTO TSD BRAMPTO BRAMPTON ONCA', 1),
(12, '2024-02-16', -20, 'POS Purchase', 'APOS MTO TSD BRAMPTO BRAMPTON ONCA', 1),
(13, '2024-02-16', 151, 'Payroll Deposit', 'VISHLAX CORPORATION CPT', 1),
(14, '2024-02-14', -960, 'ABM Withdrawal', NULL, 1),
(15, '2024-02-14', 100, 'DEPOSIT', 'FREE INTERAC E-TRANSFER', 1),
(16, '2024-02-13', -10, 'WITHDRAWAL', 'FREE INTERAC E-TRANSFER', 1),
(17, '2024-02-12', -220, 'WITHDRAWAL', 'FREE INTERAC E-TRANSFER', 1),
(18, '2024-02-10', -8, 'WITHDRAWAL', 'FREE INTERAC E-TRANSFER', 1),
(19, '2024-02-09', 20, 'DEPOSIT', 'FREE INTERAC E-TRANSFER', 1),
(20, '2024-02-08', -7, 'POS Purchase', 'APOS SQ *SANJHI RASO Brampton ONCA', 1),
(21, '2024-02-08', -200, 'WITHDRAWAL', 'FREE INTERAC E-TRANSFER', 1),
(22, '2024-02-08', -200, 'ABM Withdrawal', NULL, 1),
(23, '2024-02-08', -300, 'WITHDRAWAL', 'FREE INTERAC E-TRANSFER', 1),
(24, '2024-02-08', 400, 'Customer Transfer Cr.', 'MB-TRANSFER', 1),
(25, '2024-02-06', -116, 'WITHDRAWAL', 'FREE INTERAC E-TRANSFER', 1),
(26, '2024-02-05', 100, 'Credit Memo', 'PROMOTIONAL BONUS', 1),
(27, '2024-02-03', -334, 'WITHDRAWAL', 'FREE INTERAC E-TRANSFER', 1),
(28, '2024-02-02', -800, 'Customer Transfer Dr.', 'MB-TRANSFER', 1),
(29, '2024-02-02', 670, 'DEPOSIT', 'FREE INTERAC E-TRANSFER', 1),
(30, '2024-02-02', -12, 'WITHDRAWAL', 'FREE INTERAC E-TRANSFER', 1),
(31, '2024-02-02', 126, 'Payroll Deposit', 'VISHLAX CORPORATION CPT', 1),
(32, '2024-01-31', -290, 'ABM Withdrawal', NULL, 1),
(33, '2024-01-31', 290, 'DEPOSIT', 'FREE INTERAC E-TRANSFER', 1),
(35, '2024-02-27', -100, 'Withdrawal', 'Abm', 1),
(36, '2024-02-27', -100, 'Withdrawal', 'Abm', 1),
(37, '2024-02-27', -100, 'Withdrawal', 'Abm', 1),
(38, '2024-02-27', -100, 'Withdrawal', 'Abm', 1),
(39, '2024-02-27', 122, 'Credit', ' ', 1),
(40, '2024-03-27', 100, 'Presto', 'Montly recharge', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(50) NOT NULL,
  `userName` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `isAdmin` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `email`, `password`, `isAdmin`) VALUES
(1, 'lovepreet35', 'preet35@gmail.com', 'lovepreet', 1),
(2, 'love35', 'gillpreetsingh35@gmail.com', '$2y$10$fPG6l0PxONYgVW7wz4jI4eWftCTJSdny3TZ.j/GgJuxtLXguuPpm.', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transactionId`),
  ADD KEY `foreginKey` (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userName` (`userName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transactionId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `foreginKey` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
