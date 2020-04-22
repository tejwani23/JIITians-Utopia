-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2018 at 08:07 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `jiit_student`
--

CREATE TABLE `jiit_student` (
  `NAME` char(20) NOT NULL,
  `EMAIL` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `HOUSE_ID` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jiit_student`
--

INSERT INTO `jiit_student` (`NAME`, `EMAIL`, `PASSWORD`, `HOUSE_ID`) VALUES
('Anushka', 'anu@gmail.com', '3456789', 43),
('ertyu', 'ddkasd@efjej.cjds', '123', NULL),
('fghj', 'dfghjk@sds.cm', '123', NULL),
('disha', 'disha@gmail.com', '567', 41),
('koshi', 'kosh1235678i@gmail.c', '2345678', NULL),
('manvi', 'manvi45556@gmail.com', 'rtyu', NULL),
('manvi', 'manvi456@gmail.com', '345678', NULL),
('manvi', 'manvi@gmail.com', '5467890', NULL),
('Tanvi Thakur', 'tanvi@gmail.com', 'tanvi', 48);

-- --------------------------------------------------------

--
-- Table structure for table `landlord`
--

CREATE TABLE `landlord` (
  `L_NAME` char(20) NOT NULL,
  `L_EMAIL` varchar(20) NOT NULL,
  `L_PASSWORD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `landlord`
--

INSERT INTO `landlord` (`L_NAME`, `L_EMAIL`, `L_PASSWORD`) VALUES
('AYUSHI', 'ayushi@gmail.com', '123456'),
('Dhanshree Tejwani', 'dhan@gmail.com', 'dhanshree'),
('Dipansha Chabbra', 'dipansha@gmail.com', 'dipansha'),
('harsh', 'harsh@gmail.com', '3456789'),
('Kartik Alhuwalia', 'kartik@gmail.com', 'kartik'),
('koshi', 'kosh123i@gmail.com', '4567'),
('koshi', 'koshi@gmail.com', '12345678'),
('Krishn Agarwal', 'krishn@gmail.com', 'krishn'),
('Manisha Rajput', 'manisha@gmail.com', 'manisha'),
('Manvi Chawla', 'manvi@gmail.com', 'manvi'),
('Mayank Srivastava', 'mayank@gmail.com', 'mayank'),
('Rashmi Sawlani', 'rashmi@gmail.com', 'rashmi'),
('Sakshi Gupta', 'sakshi@gmail.com', 'sakshi'),
('Sanjay Sharma', 'sanjay@gmail.com', 'sanjay'),
('Saurav Kumar', 'saurav@gmail.com', 'saurav'),
('Swapnil Singh', 'swapnil@gmail.com', 'swapnil');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `ROOM_ID` int(11) NOT NULL,
  `L_EMAIL` varchar(30) NOT NULL,
  `LOCATION` varchar(20) NOT NULL,
  `RENT` varchar(11) NOT NULL,
  `ADDRESS` varchar(40) NOT NULL,
  `IMAGE` varchar(100) NOT NULL,
  `RENTED_TO` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`ROOM_ID`, `L_EMAIL`, `LOCATION`, `RENT`, `ADDRESS`, `IMAGE`, `RENTED_TO`) VALUES
(37, 'sanjay@gmail.com', 'Sector 62', '10000', '115 A , Block C , Near petrol pump ', 'room1.jpg', NULL),
(38, 'rashmi@gmail.com', 'Sector 63', '18000', '110 A , Block A ,Sector 63', 'room2.jpg', NULL),
(39, 'manvi@gmail.com', 'Indirapuram', '15000', '75 C , Block C ,Indirapuram', 'room3.jpg', NULL),
(40, 'kartik@gmail.com', 'Sector 62', '10000', '23 B ,Block D ,Sector 63', 'room4.jpg', NULL),
(41, 'krishn@gmail.com', 'Indirapuram', '8000', '56 C , Block B ,Indirapuram', 'room5.jpg', 'disha@gmail.com'),
(42, 'mayank@gmail.com', 'Sector 63', '12000', '32 C Block D Sector 63', 'room6.jpg', NULL),
(43, 'saurav@gmail.com', 'Sector 62', '6000', '34 C Block D , Sector 62', 'room7.jpg', 'anu@gmail.com'),
(44, 'swapnil@gmail.com', 'Indirapuram', '7000', '112 C Block A Indirapuram', 'room8.jpg', NULL),
(45, 'sakshi@gmail.com', 'Sector 63', '8000', '45 C Block H Sector 63', 'room9.jpg', NULL),
(46, 'manisha@gmail.com', 'Sector 62', '21000', '21 A Block F Sector 62', 'room10.jpg', NULL),
(47, 'dipansha@gmail.com', 'Indirapuram', '9000', '65 D ,Block E , Indirapuram', 'room11.jpg', NULL),
(48, 'dhan@gmail.com', 'Indirapuram', '7000', '11 A , Block A , Indirapuram', 'room13.jpg', 'tanvi@gmail.com'),
(52, 'harsh@gmail.com', 'Sector 63', '12000', '10 A , Block D , Sector 63', 'room12.jpg', NULL),
(53, 'dhan@gmail.com', 'Indirapuram', '8000', '110 A , Block A ,indirapuram', 'm1.jpg', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jiit_student`
--
ALTER TABLE `jiit_student`
  ADD PRIMARY KEY (`EMAIL`),
  ADD KEY `HOUSE_ID` (`HOUSE_ID`);

--
-- Indexes for table `landlord`
--
ALTER TABLE `landlord`
  ADD PRIMARY KEY (`L_EMAIL`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`ROOM_ID`),
  ADD KEY `L_EMAIL` (`L_EMAIL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `ROOM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `jiit_student`
--
ALTER TABLE `jiit_student`
  ADD CONSTRAINT `jiit_student_ibfk_1` FOREIGN KEY (`HOUSE_ID`) REFERENCES `rooms` (`ROOM_ID`);

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`L_EMAIL`) REFERENCES `landlord` (`L_EMAIL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
