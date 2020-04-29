-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2020 at 07:34 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oams`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(9) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `img` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `contact`, `password`, `status`, `img`, `address`, `dob`, `reg_date`) VALUES
(1, 'Abhishek Majumdar', 'webdevabhi4@gmail.com', '7001916946', '0f2b5d185c89b736a781f0d2d8a19f68', 1, 'IMG_20190307_185003.jpg', 'Nuruddin Road Bye Lane Kadam Talab, Asansol', '1998-05-23', '2020-04-26 04:44:46');

-- --------------------------------------------------------

--
-- Table structure for table `fac_details`
--

CREATE TABLE `fac_details` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  `img` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fac_details`
--

INSERT INTO `fac_details` (`id`, `name`, `email`, `contact`, `qualification`, `password`, `status`, `img`, `address`, `dept`, `dob`, `reg_date`) VALUES
(1, 'Abhijit Banerjee', 'abhijit.ricis@gmail.com', '9732160684', 'M.Tech(IT)', '81121b7b351ace253fc6a9e3f9bdd9c7', 1, 'banerjee_sir.jpg', 'Kalyanpur Housing, Asansol', 'BCA(Hons)', '1980-01-01', '2020-04-29 03:29:42'),
(2, 'Gurudev Adhikary', 'dgpguru@gmail.com', '7318744241', 'MCA', 'f98bb16cd2b6ebe7360699557641a34e', 1, 'gurudev_sir.jpg', 'Durgapur', 'BCA(Hons)', '1975-01-01', '2019-07-03 09:52:33'),
(3, 'Hemant Kr. Mahato', 'hemant@ricisonline.com', '8927662654', 'MCA', '1f3efdb52cfafe39ed90a3f4af145062', 1, 'hemant_sir.jpg', 'Raniganj, Near Anandalok Hospital', 'BCA(Hons)', '1983-01-01', '2019-07-03 09:52:26'),
(4, 'Bijoy Gupta', 'bijoy@ricisonline.com', '7908677630', 'MBA', '3171b38a06e63c27951aeac253e03c78', 1, 'bijoy_sir.jpg', 'Durgapur', 'BBA(Hons)', '1981-01-01', '2019-06-08 10:52:37'),
(5, 'Paromita Mukherjee', 'paromita@ricisonline.com', '9876752310', 'MBA', '9163d0ea6e5ac6c8266e0451c6a21bf7', 1, 'paromita_maam.jpg', 'Asansol Mohisila Colony', 'BBA(Hons)', '1980-01-01', '2019-06-08 07:10:26'),
(6, 'Rajat Bose', 'bose.raja@gmail.com', '9434985599', 'MCA', '7ba9f8477e0afa3e3d491fc13bbaf34f', 1, 'rajat_bose.jpg', 'Nuruddin Road Bye Lane, Asansol 713303', 'BCA(Hons)', '1978-07-02', '2019-07-03 09:52:27');

-- --------------------------------------------------------

--
-- Table structure for table `remarks`
--

CREATE TABLE `remarks` (
  `id` int(9) NOT NULL,
  `st_id` int(9) NOT NULL,
  `assignment_id` int(9) NOT NULL,
  `uploaded_by` varchar(150) NOT NULL,
  `remarks` varchar(200) NOT NULL,
  `marks` int(3) NOT NULL,
  `uploaded_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `st_details`
--

CREATE TABLE `st_details` (
  `id` int(50) NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `course` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `img` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL,
  `year` varchar(6) NOT NULL,
  `dob` date NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `certificate` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `st_details`
--

INSERT INTO `st_details` (`id`, `name`, `email`, `contact`, `course`, `password`, `status`, `img`, `address`, `year`, `dob`, `reg_date`, `certificate`) VALUES
(19, 'Aritra Mukherjee', 'aritra@gmail.com', '9899343234', 'BCA(Hons)', 'a8201769d75a926bf9fe8667b8347e23', 1, '5e9dbc9577e0e.jpg', 'Asansol, Mohisila Colony', '1st', '1999-12-24', '2020-04-29 02:38:42', ''),
(20, 'Abhishek Maji', 'maji.abhishek@gmail.com', '7989782311', 'BCA(Hons)', '0f2b5d185c89b736a781f0d2d8a19f68', 1, '5e9ea03024f66.jpg', 'Durgapur, Bhiringi Kali Bari', '1st', '1999-05-03', '2020-04-29 02:38:44', ''),
(21, 'Swagata Rakshit', 'swagata@gmail.com', '9099873451', 'BCA(Hons)', '5c82b93b944f274153d978d557385136', 1, '5e9d2dbb5e478.jpg', 'Kulti, Asansol Main Road', '1st', '1998-06-23', '2020-04-29 02:38:45', ''),
(22, 'Mimi Sarkar', 'mimi@gmail.com', '9289091234', 'BCA(Hons)', 'f92d9ba17db6f95062a343e343f5ed75', 1, '5e9dbcbc676ad.jpg', 'Ravindra Saravar, Kolkata', '1st', '1998-06-05', '2020-04-29 02:38:46', ''),
(23, 'Snigdha Sarkar', 'snigdha@gmail.com', '9837389201', 'BCA(Hons)', '790e0500751581e59c5505f57ca86bfd', 1, 'jpg.jpg', 'Gopal Nagar, Asansol', '2nd', '1998-04-25', '2020-04-29 02:38:47', ''),
(24, 'Arindam Si', 'arindam@gmail.com', '9899343232', 'BCA(Hons)', '9c9db171ef664ae6654072242960f174', 1, 'Byomkesh.jpg', 'Burdwan, Gopal Math', '2nd', '1998-06-05', '2020-04-29 02:38:50', ''),
(25, 'Param Sen', 'param.sen@gmail.com', '8983249646', 'BCA(Hons)', '56f65ed0234a47a19e9ef874dbfc2a4a', 1, '61392803.jpg', 'Howrah, Kolkata', '2nd', '1998-09-08', '2020-04-29 02:38:51', ''),
(26, 'Mir Khan', 'mir@gmail.com', '7898763425', 'BCA(Hons)', '2866427eef91d1bcf3574719eaa43afe', 1, 'mir-afsar-ali_1515149553.jpg', 'Durgapur, Benachity', '3rd', '1998-05-09', '2020-04-29 02:38:53', ''),
(27, 'Anushka Sarkhel', 'anushka@gmail.com', '6782349091', 'BCA(Hons)', 'b46355047cdd271f7c553633b7603854', 1, 'Srabanti-Chatterjee.jpg', 'Disergarh, Asansol', '3rd', '1998-09-02', '2020-04-29 02:38:54', ''),
(28, 'Ritwik Das', 'ritwik@gmail.com', '9897876563', 'BCA(Hons)', 'c5f740bac173e21c3cd87a116418f0be', 1, '159314.jpg', 'Durgapur, DPS Colony', '3rd', '1995-07-07', '2020-04-29 02:38:56', ''),
(29, 'Jeet Kumar Shaw', 'jeet@gmail.com', '8987654562', 'BBA(Hons)', 'c90d586fe6bd5c02de86a6d3d0375f29', 1, 'akshay-kumar-20191210145129-78.jpg', 'Patna', '1st', '1998-09-08', '2020-04-29 02:38:57', ''),
(30, 'Bipasha Sen', 'bipasha@gmail.com', '7899872344', 'BBA(Hons)', 'd4140dc11c586f268a757efba90d14ee', 1, '4b57c22eb1a2c4b89a70b81dc9460e4e.jpg', 'Kolkata', '1st', '1998-09-05', '2020-04-29 02:38:58', ''),
(31, 'Abhishikta Gupta', 'abhishikta@gmail.com', '6788762341', 'BBA(Hons)', '627f32757f4e983ce01a74fce060bd20', 1, '116698.jpg', 'Asansol, Mohisila Colony', '2nd', '1998-08-09', '2020-04-29 02:39:00', ''),
(32, 'Adarsha Roy', 'roy.a@gmail.com', '7866542313', 'BBA(Hons)', '7b2bfd29da8e67b02535702fafc60e2a', 1, 'abhishke_bachan_20100628.jpg', 'Apcar Garden, Asansol', '3rd', '1998-02-06', '2020-04-29 02:38:40', ''),
(33, 'Abhishek Sen', 'abhisheksen@hotmail.com', '6788762238', 'BBA(Hons)', '0f2b5d185c89b736a781f0d2d8a19f68', 2, '5d42f51d76ad4.jpg', 'Burnpur', '2nd', '1998-08-08', '2020-04-29 02:28:44', '');

-- --------------------------------------------------------

--
-- Table structure for table `submit_assignment`
--

CREATE TABLE `submit_assignment` (
  `id` int(9) NOT NULL,
  `assignment_id` int(9) NOT NULL,
  `std_id` int(9) NOT NULL,
  `fac_name` varchar(150) NOT NULL,
  `submit_by` varchar(50) NOT NULL,
  `dept` varchar(200) NOT NULL,
  `year` varchar(5) NOT NULL,
  `file` varchar(200) NOT NULL,
  `submit_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `task_assign`
--

CREATE TABLE `task_assign` (
  `id` int(9) NOT NULL,
  `course_title` varchar(150) NOT NULL,
  `course_code` varchar(150) NOT NULL,
  `assignment_title` varchar(150) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `year` varchar(5) NOT NULL,
  `last_date` date NOT NULL,
  `file` varchar(150) NOT NULL,
  `uploaded_by` varchar(150) NOT NULL,
  `assign_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task_assign`
--

INSERT INTO `task_assign` (`id`, `course_title`, `course_code`, `assignment_title`, `dept`, `year`, `last_date`, `file`, `uploaded_by`, `assign_date`) VALUES
(14, 'Assignment I C Programming Language', 'BCA-1-C', 'Write Codes For Each And Every Code', 'BCA(Hons)', '1st', '2020-05-01', 'clab.pdf', 'Abhijit Banerjee', '2020-04-29 03:03:42'),
(15, 'Assignment I C++ Programming Language', 'BCA-2-C++', 'Write Codes For Each And Every Code', 'BCA(Hons)', '2nd', '2020-05-01', 'C++ Assignment by AM.pdf', 'Abhijit Banerjee', '2020-04-29 03:11:49'),
(16, 'Assignment I Java Programming Language', 'BCA-3-Java', 'Write Codes For Each And Every Code', 'BCA(Hons)', '3rd', '2020-05-01', 'Java-Various Numbers.pdf', 'Abhijit Banerjee', '2020-04-29 03:20:44');

-- --------------------------------------------------------

--
-- Table structure for table `upload_notes`
--

CREATE TABLE `upload_notes` (
  `id` int(9) NOT NULL,
  `title` varchar(150) NOT NULL,
  `year` varchar(5) NOT NULL,
  `uploaded_by` varchar(150) NOT NULL,
  `file` varchar(200) NOT NULL,
  `uploaded_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_notes`
--

INSERT INTO `upload_notes` (`id`, `title`, `year`, `uploaded_by`, `file`, `uploaded_date`) VALUES
(5, 'C Language', '1st', 'Abhijit Banerjee', 'Class_Object.pdf', '2020-04-29 03:21:11'),
(6, 'C++ Language', '2nd', 'Abhijit Banerjee', 'cpp_tutorial.pdf', '2020-04-29 03:21:31'),
(7, 'Java Language', '3rd', 'Abhijit Banerjee', 'JAVA.pdf', '2020-04-29 03:21:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fac_details`
--
ALTER TABLE `fac_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `remarks`
--
ALTER TABLE `remarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `st_details`
--
ALTER TABLE `st_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submit_assignment`
--
ALTER TABLE `submit_assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_assign`
--
ALTER TABLE `task_assign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_notes`
--
ALTER TABLE `upload_notes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fac_details`
--
ALTER TABLE `fac_details`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `remarks`
--
ALTER TABLE `remarks`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `st_details`
--
ALTER TABLE `st_details`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `submit_assignment`
--
ALTER TABLE `submit_assignment`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `task_assign`
--
ALTER TABLE `task_assign`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `upload_notes`
--
ALTER TABLE `upload_notes`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
