-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2023 at 01:31 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `city_hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_ID` int(20) NOT NULL,
  `A_Name` varchar(50) NOT NULL,
  `Email` varbinary(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Contact_No` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`A_ID`, `A_Name`, `Email`, `Password`, `Contact_No`) VALUES
(1, 'Chethiya', 0x6331323340676d61696c2e636f6d, '2132', 762240099),
(2, 'Tamasha', 0x5436373440676d61696c2e636f6d, '5363', 764243674),
(3, 'Tharindu', 0x5434353640676d61696c2e636f6d, '9098', 759273841),
(4, 'Damindu', 0x4438393840676d61696c2e636f6d, '2839', 772037485),
(5, 'Chamudi', 0x4339383740676d61696c2e636f6d, '5467', 719764384),
(7, 'Wanshika', 0x5732373640676d61696c2e636f6d, '2989', 779925453);

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `AppointmentNumber` int(1) NOT NULL,
  `Firstname` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `MobileNo` int(10) NOT NULL,
  `Specialization` varchar(50) NOT NULL,
  `Doctor` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Branch` varbinary(20) NOT NULL,
  `Reason` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`AppointmentNumber`, `Firstname`, `Lastname`, `Email`, `MobileNo`, `Specialization`, `Doctor`, `Date`, `Branch`, `Reason`) VALUES
(1, 'Tamasha', 'Kavindi', 'T674@gmail.com', 764243674, 'Child and Adolescent Psychologist', 'MS.Nishadhi Munashighe', '2023-03-28', 0x4b7572756e6567616c61, 'The common cold'),
(2, 'Chethiya', 'Nimesha', 'c123@gmail.com', 762240099, 'Chest Specialist', 'MR.Upul Jayawardhana', '2023-03-28', 0x47616c6c65, 'Fever'),
(3, 'Tharindu', 'Lakshan', 't999@gmail.com', 772783645, 'Diabetic Specialist', 'MR.Asela Gunawardhana', '2023-04-01', 0x4a6166666e61, 'High Blood Preasure'),
(4, 'Sheron', 'Silva', 'S1234@gmail.com', 758245611, 'Family Physician', 'MR.Akila Weerathunga', '2023-05-06', 0x4b7572756e6567616c61, 'Allergies'),
(5, 'Chamudi', 'Edirisinghe', 'c789@gmail.com', 72963649, 'Dental Seurgeon', 'MR.Sanaka Perera', '2023-06-10', 0x4b7572756e6567616c61, 'teath treatment'),
(6, 'Wanshik', 'Yashmal', 'y479@gmail.com', 762938475, 'Physiotherapist', 'MR.Asela Gunawardhana', '2023-06-10', 0x47616c6c65, 'Physiotheraphy'),
(7, 'Yasintha', 'Shanika', 'y140@gmail.com', 762130099, 'Ayurvedic Cardiologist', 'MR.Upul Jayawardhana', '2023-04-20', 0x47616c6c65, 'Fever');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `D_ID` int(20) NOT NULL,
  `D_Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Specialization` varchar(50) NOT NULL,
  `Branch` varchar(10) NOT NULL,
  `Contact_No` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`D_ID`, `D_Name`, `Email`, `Password`, `Specialization`, `Branch`, `Contact_No`) VALUES
(1, 'Upul Jayawardhana', 'upulj123@gmail.com', '1212', 'Chest Specialist', 'Galle', 728965483),
(2, 'Mahesh Senanayake', 'mahesh12@gmail.com', '9878', 'Family Physician', 'Kurunegala', 759273841),
(4, 'Akila Weerathunga', 'Akila256@gmail.com', '2552', 'Ayurvedic Cardiologist', 'Galle', 764589259),
(5, 'Sanaka Perera', 'Sanakap1234@gmail.com', '5464', 'Dental Seurgeon', 'Galle', 726974401),
(6, 'Asela Gunawardhana', 'Asela354@gmail.com', '3545', 'Diabetic Specialist', 'Kurunegala', 762938475);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `P_ID` int(20) NOT NULL,
  `P_Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `City` varchar(30) NOT NULL,
  `Contact_No` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`P_ID`, `P_Name`, `Email`, `Password`, `City`, `Contact_No`) VALUES
(1, 'Chethiya', 'c123@gmail.com', '123', 'Kotikawatta', 762240099),
(2, 'Tamasha', 'T674@gmail.com', '456', 'Kahathuduwa', 764243674),
(3, 'Tharindu', 'T456@gmail.com', '999', 'Homagama', 728965483),
(4, 'Sheron', 'S999@gmail.com', '789', 'Maharagama', 759273841),
(5, 'Wanshika', 'w256@gmail.com', '256', 'Kohuwala', 782739451),
(6, 'Chamudi', 'c789@gmail.com', '777', 'Godagama', 713874562),
(8, 'Chamalka', 'c456@gmail.com', '119', 'Kottawa', 726739287),
(9, 'Nadeesha', 'n690@gmail.com', '980', 'Delkada', 727834752),
(10, 'Yasintha', 'y140@gmail.com', '144', 'Baththaramulla', 762130099);

-- --------------------------------------------------------

--
-- Table structure for table `pdf_file`
--

CREATE TABLE `pdf_file` (
  `pdf` varbinary(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pdf_file`
--

INSERT INTO `pdf_file` (`pdf`) VALUES
(0x4d65646963616c204865616c7468205265706f72742e706466),
(0x4d65646963616c205265636f7264205265706f72742e706466),
(0x4d65646963616c2d5265706f7472742e706466),
(0x4d6963726f736f66745465616d732d696d616765202834292e706e67),
(0x4d6963726f736f66745465616d732d696d616765202835292e706e67),
(0x5265706f727420312e706e67),
(0x53616d706c65206d65646963616c207265706f72742e706466);

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `A_ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`A_ID`, `username`, `password`) VALUES
(1, 'Chethiya', '1234'),
(2, 'Tamasha', 't567'),
(3, 'Sheron', 's999'),
(4, 'Tharindu', 't567'),
(5, 'wanshika', 'w444'),
(6, 'pasindu', 'p167'),
(7, 'Senadheera', 's800');

-- --------------------------------------------------------

--
-- Table structure for table `tbldoctor`
--

CREATE TABLE `tbldoctor` (
  `D_ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbldoctor`
--

INSERT INTO `tbldoctor` (`D_ID`, `username`, `password`) VALUES
(1, 'Chethiya', '1234'),
(2, 'Tamasha', 't999'),
(3, 'Tharindu', 't787'),
(4, 'Sheron', 's479'),
(5, 'wanshika', 'w900'),
(6, 'Shanika', 's778');

-- --------------------------------------------------------

--
-- Table structure for table `tblpatient`
--

CREATE TABLE `tblpatient` (
  `P_ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpatient`
--

INSERT INTO `tblpatient` (`P_ID`, `username`, `password`) VALUES
(1, 'Chethiya', '1234'),
(2, 'Tamasha', 't123'),
(3, 'Tharindu', 't456'),
(4, 'wanshika', 'q234'),
(5, 'wanshika', 'q234'),
(6, 'Yasintha', 'y567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_ID`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`AppointmentNumber`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`D_ID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`P_ID`);

--
-- Indexes for table `pdf_file`
--
ALTER TABLE `pdf_file`
  ADD PRIMARY KEY (`pdf`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`A_ID`);

--
-- Indexes for table `tbldoctor`
--
ALTER TABLE `tbldoctor`
  ADD PRIMARY KEY (`D_ID`);

--
-- Indexes for table `tblpatient`
--
ALTER TABLE `tblpatient`
  ADD PRIMARY KEY (`P_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `AppointmentNumber` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `A_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbldoctor`
--
ALTER TABLE `tbldoctor`
  MODIFY `D_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblpatient`
--
ALTER TABLE `tblpatient`
  MODIFY `P_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
