-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 02:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task1`
--

-- --------------------------------------------------------

--
-- Table structure for table `apointment`
--

CREATE TABLE `apointment` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `patient` int(11) DEFAULT NULL,
  `doctor` int(11) DEFAULT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apointment`
--

INSERT INTO `apointment` (`id`, `date`, `patient`, `doctor`, `time`) VALUES
(7, '2023-06-07', 6, 1, '00:00:08'),
(13, '2023-06-27', 11, 7, '00:00:07');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `profileimage` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `surname` varchar(25) NOT NULL,
  `age` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phonenumber` varchar(25) NOT NULL,
  `specialization` varchar(25) NOT NULL,
  `room` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `profileimage`, `name`, `surname`, `age`, `gender`, `email`, `phonenumber`, `specialization`, `room`) VALUES
(1, 'image', 'Dr. Derek', 'Piano', '38', 'Male', 'Derek@gmail.co.za', '0865197512', 'Wrists', 'D66'),
(2, 'image', 'Dr. Calya', 'Henery', '30', 'Female', 'Calya@gmail.co.za', '0862975136', 'Back', 'D65'),
(3, 'image', 'Dr. Maddy', 'Smith', '36', 'Female', 'Maddy@gmail.co.za', '086359820', 'Neck', 'D67'),
(4, 'image', 'Dr. Leo', 'Dam', '41', 'Male', 'Leo@gmail.co.za', '0834597553', 'Shoulder', 'D68'),
(5, 'image', 'Dr. Gabby', 'Whitmore', '37', 'Female', 'Gabby@gmail.co.za', '0835975210', 'Wrists', 'D69'),
(6, 'image', 'Dr. Jackie', 'Xavier', '42', 'Female', 'Jackie@gmail.co.za', '0836659856', 'Neck', 'D70'),
(7, 'image', 'Dr. Rian', 'Seth', '44', 'Male', 'Tain@gmail.co.za', '0826597532', 'Foot', 'D71'),
(8, 'image', 'Dr. Frick', 'Grey', '39', 'Male', 'Frick@gmail.co.za', '0865953207', 'Back', 'D72'),
(9, 'image', 'Dr. Lion', 'Jack', '40', 'Male', 'Frick@gmail.co.za', '0865953207', 'Back', 'D73');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `profileimage` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `surname` varchar(25) NOT NULL,
  `age` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `phonenumber` varchar(25) NOT NULL,
  `medicalaidnumber` varchar(25) NOT NULL,
  `previousappiontments` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `profileimage`, `name`, `surname`, `age`, `gender`, `email`, `password`, `phonenumber`, `medicalaidnumber`, `previousappiontments`) VALUES
(1, 'image', 'Frick', 'Dowly', '27', 'Male', 'Frick@gemail.co.za', 'Frick359754', '0822662596', '05632010689', '10 May 2016'),
(2, 'image', 'Rick', 'Oliver', '36', 'Male', 'Rick@gemail.co.za', 'Rick359659', '0865975844', '02698756985', '3 April 2016'),
(3, 'image', 'Olivia', 'Green', '39', 'Female', 'Oliva@gemail.co.za', 'Oliva369859', '0825975855', '02698567521', '3 November 2016'),
(4, 'image', 'Felicia', 'Hound', '43', 'Female', 'Felicia@gemail.co.za', 'Felicia369859', '0825865875', '03698564221', '5 April 2015'),
(5, 'image', 'Henry', 'Heart', '46', 'Male', 'Henry@gemail.co.za', 'Henry3632569', '0865975320', '04598658755', '7 April 2015'),
(6, 'image', 'Joe', 'Fridie', '52', 'Male', 'Joe@gemail.co.za', 'Joe268859', '0862354785', '05632014544', '30 September 2017'),
(7, 'image', 'Joe', 'Poline', '46', 'Female', 'Joe@gemail.co.za', 'Joe3696325', '0845986520', '05569885650', '30 July2016'),
(8, 'image', 'Bea', 'Dea', '49', 'Female', 'Bea@gemail.co.za', 'Bea3365325', '0865984102', '05566325060', '14 July 2014'),
(9, 'image', 'Chad', 'Thunder', '43', 'Male', 'Chad@gemail.co.za', 'Chad36325969', '0815985631', '04502688755', '6 March 2015'),
(10, 'image', 'Bob', 'Eddie', '39', 'Male', 'Bob@gemail.co.za', 'Bob239859', '0863695220', '05632012598', '13 December 2011'),
(11, 'image', 'Poppie ', 'Samantha', '43', 'Female', 'Poppie@gemail.co.za', 'Poppie3696325', '0840985202', '05569803602', '30 July 2015'),
(12, 'image', 'Vince', 'du Toit ', '45', 'Male', 'Vince@gemail.co.za', 'Vince3690825', '0845096620', '05256695560', '30 May 2018');

-- --------------------------------------------------------

--
-- Table structure for table `receptionists`
--

CREATE TABLE `receptionists` (
  `id` int(11) NOT NULL,
  `profileimage` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `surname` varchar(25) NOT NULL,
  `age` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `phonenumber` varchar(25) NOT NULL,
  `rank` varchar(25) NOT NULL,
  `appointment_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `receptionists`
--

INSERT INTO `receptionists` (`id`, `profileimage`, `name`, `surname`, `age`, `gender`, `email`, `password`, `phonenumber`, `rank`, `appointment_id`) VALUES
(9, 'image', 'Talia', 'Wayne', '36', 'Female', 'Talia@gemail.co.za', 'Talia123654789', '0822956859', 'Head Receptionist', NULL),
(10, 'image', 'Violet', 'Bloom', '32', 'Female', 'Violet@gmail.co.za', 'Violet1259852', '0826958953', 'Receptionist', NULL),
(13, 'image', 'Anke', 'Du Raan', '20', 'Female', '221202@virtualwindow.co.z', 'Anke123', '0822662460', 'Receptionist', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apointment`
--
ALTER TABLE `apointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient` (`patient`),
  ADD KEY `doctor` (`doctor`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receptionists`
--
ALTER TABLE `receptionists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointment_id` (`appointment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apointment`
--
ALTER TABLE `apointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `receptionists`
--
ALTER TABLE `receptionists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apointment`
--
ALTER TABLE `apointment`
  ADD CONSTRAINT `apointment_ibfk_1` FOREIGN KEY (`doctor`) REFERENCES `doctors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `apointment_ibfk_2` FOREIGN KEY (`patient`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `receptionists`
--
ALTER TABLE `receptionists`
  ADD CONSTRAINT `receptionists_ibfk_1` FOREIGN KEY (`appointment_id`) REFERENCES `apointment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
