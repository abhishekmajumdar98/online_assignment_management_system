-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2019 at 03:42 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fac_details`
--

INSERT INTO `fac_details` (`id`, `name`, `email`, `contact`, `qualification`, `password`, `status`, `img`, `address`, `dept`, `dob`, `reg_date`) VALUES
(1, 'Abhijit Banerjee', 'abhijit.ricis@gmail.com', '9732160684', 'M.Tech(IT)', '2bdf69122953b5a74d77426f60e7844e', 1, 'banerjee_sir.jpg', 'Kalyanpur Housing, Asansol', 'BCA(Hons)', '1980-01-01', '2019-06-08 06:42:09'),
(2, 'Gurudev Adhikary', 'dgpguru@gmail.com', '7318744241', 'MCA', 'f98bb16cd2b6ebe7360699557641a34e', 1, 'gurudev_sir.jpg', 'Durgapur', 'BCA(Hons)', '1975-01-01', '2019-06-08 06:03:18'),
(3, 'Hemant Kr. Mahato', 'hemant@ricisonline.com', '8927662654', 'MCA', '1f3efdb52cfafe39ed90a3f4af145062', 1, 'hemant_sir.jpg', 'Raniganj, Near Anandalok Hospital', 'BCA(Hons)', '1983-01-01', '2019-06-08 06:05:46'),
(4, 'Bijoy Gupta', 'bijoy@ricisonline.com', '7908677630', 'MBA', '3171b38a06e63c27951aeac253e03c78', 1, 'bijoy_sir.jpg', 'Durgapur', 'BBA(Hons)', '1981-01-01', '2019-06-08 10:52:37'),
(5, 'Paromita Mukherjee', 'paromita@ricisonline.com', '9876752310', 'MBA', '9163d0ea6e5ac6c8266e0451c6a21bf7', 1, 'paromita_maam.jpg', 'Asansol Mohisila Colony', 'BBA(Hons)', '1980-01-01', '2019-06-08 07:10:26'),
(6, 'Rajat Bose', 'bose.raja@gmail.com', '9434985599', 'MCA', '7ba9f8477e0afa3e3d491fc13bbaf34f', 1, 'rajat_bose.jpg', 'Nuruddin Road Bye Lane, Asansol 713303', 'BCA(Hons)', '1978-07-02', '2019-06-09 17:41:04');

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
  `uploaded_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remarks`
--

INSERT INTO `remarks` (`id`, `st_id`, `assignment_id`, `uploaded_by`, `remarks`, `marks`, `uploaded_date`) VALUES
(1, 8, 7, 'Abhijit Banerjee', 'Very Good', 10, '2019-06-11 05:56:50'),
(4, 10, 13, 'Abhijit Banerjee', 'Very Good', 10, '2019-06-11 06:21:21'),
(7, 10, 7, 'Abhijit Banerjee', 'Very Good', 9, '2019-06-11 06:26:24'),
(8, 11, 9, 'Bijoy Gupta', 'aaaa!!! Khuuuub Valo .. hi hi...', 9, '2019-06-11 08:45:22');

-- --------------------------------------------------------

--
-- Table structure for table `st_details`
--

CREATE TABLE `st_details` (
  `id` int(50) NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `course` varchar(10) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `img` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL,
  `year` varchar(6) NOT NULL,
  `dob` date NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `st_details`
--

INSERT INTO `st_details` (`id`, `name`, `email`, `contact`, `course`, `password`, `status`, `img`, `address`, `year`, `dob`, `reg_date`) VALUES
(8, 'Abhishek Majumdar', 'webdevabhi4@gmail.com', '7001916946', 'BCA(Hons)', '5cbc95a2d94993f8da72e428ba4d92bf', 1, 'IMG_20190307_185003.jpg', 'Nuruddin Road Bye Lane Kadam Talab, Asansol', '3rd', '1998-05-22', '2019-06-08 11:26:47'),
(10, 'Deepmalya Sarkar', 'deepmalyasarkar2@gmail.com', '9933512272', 'BCA(Hons)', 'cfe23e59339b3fabc18a1ce90d4a0307', 1, 'deepmalya.jpg', 'Ismile More Near Homoeopathy College, Asansol', '3rd', '1998-01-02', '2019-06-08 08:03:41'),
(11, 'Rupesh Modi', 'rupesh.modi@gmail.com', '7891236783', 'BBA(Hons)', '459b523f745182cccd4ffbf3f66d508e', 1, 'rupesh.jpg', 'Pandabeswar', '2nd', '1995-01-01', '2019-06-08 10:55:36'),
(12, 'Souvik Chatterjee', 'souvik.chatterjee@gmail.com', '6782347891', 'BCA(Hons)', '9033d76d4e67e41900a032e25f0ffea8', 1, 'souvik.jpg', 'Raniganj', '2nd', '2000-01-01', '2019-06-08 08:06:01'),
(13, 'Kinshuk Paul', 'kinshuk.paul@gmail.com', '9900837288', 'BCA(Hons)', '97ba1096a91a4c4ba43b238a5aeb1dc8', 1, 'kinshuk.jpg', 'Gopalpur, Asansol', '3rd', '1997-01-01', '2019-06-08 08:07:03'),
(14, 'Indranil Chowdhury', 'indranil.chowdhury@gmail.com', '9933984142', 'BCA(Hons)', '54cc6c493caa5b635e8c5fbcc3316e76', 1, 'indranil.jpg', 'Ukhra', '3rd', '1997-01-01', '2019-06-08 08:08:10'),
(15, 'Agni Chatterjee', 'agni.chatterjee@gmail.com', '7892348901', 'BBA(Hons)', 'a43864e9c69fd9b42b0ff0c52e79d20c', 1, 'agni.jpg', 'Raniganj', '3rd', '1997-01-01', '2019-06-08 10:55:41');

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
  `submit_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submit_assignment`
--

INSERT INTO `submit_assignment` (`id`, `assignment_id`, `std_id`, `fac_name`, `submit_by`, `dept`, `year`, `file`, `submit_date`) VALUES
(2, 7, 8, 'Abhijit Banerjee', 'Abhishek Majumdar', 'BCA(Hons)', '3rd', 'tutorial.pdf', '2019-06-10 14:17:25'),
(3, 9, 11, 'Bijoy Gupta', 'Rupesh Modi', 'BBA(Hons)', '2nd', 'C Syllabus - AM (1).pdf', '2019-06-10 14:28:15'),
(8, 7, 10, 'Abhijit Banerjee', 'Deepmalya Sarkar', 'BCA(Hons)', '3rd', 'C Syllabus - AM (1).pdf', '2019-06-10 15:21:35'),
(9, 11, 10, 'Hemant Kr. Mahato', 'Deepmalya Sarkar', 'BCA(Hons)', '3rd', 'coding_dojo_ebook.pdf', '2019-06-10 15:22:03'),
(10, 13, 10, 'Abhijit Banerjee', 'Deepmalya Sarkar', 'BCA(Hons)', '3rd', 'Assignment-1.zip', '2019-06-10 15:25:12');

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
  `assign_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task_assign`
--

INSERT INTO `task_assign` (`id`, `course_title`, `course_code`, `assignment_title`, `dept`, `year`, `last_date`, `file`, `uploaded_by`, `assign_date`) VALUES
(7, 'Python LAB', 'BCA-606', 'Loop Using Python', 'BCA(Hons)', '3rd', '2019-06-21', 'Python Programming.pdf', 'Abhijit Banerjee', '2019-06-10 07:37:26'),
(8, 'C++ LAB', 'BCA-302', 'Loop Using C++', 'BCA(Hons)', '2nd', '2019-06-19', 'cpp_tutorial.pdf', 'Abhijit Banerjee', '2019-06-10 07:38:28'),
(9, 'Business Administration', 'BA-101', 'Journal Ledger Trial Balance', 'BBA(Hons)', '2nd', '2019-06-18', 'Assignment-1.zip', 'Bijoy Gupta', '2019-06-10 14:26:53'),
(10, 'C# LAB', 'BCA-607', 'Loop Using C#', 'BCA(Hons)', '3rd', '2019-06-12', '25842799.pdf', 'Hemant Kr. Mahato', '2019-06-10 14:50:58'),
(11, 'HKM', 'HKM', 'HKM', 'BCA(Hons)', '3rd', '2019-06-22', 'AM Online Library Management System (1).docx', 'Hemant Kr. Mahato', '2019-06-10 15:03:46'),
(12, 'AB', 'AB', 'AB', 'BCA(Hons)', '3rd', '2019-06-20', 'Assignment-1 (1).zip', 'Abhijit Banerjee', '2019-06-10 15:04:26'),
(13, 'C# LAB', 'BCA-606', 'Loop Using C#', 'BCA(Hons)', '3rd', '2019-06-23', 'AM Online Library Management System.docx', 'Abhijit Banerjee', '2019-06-10 15:24:08');

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
  `uploaded_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_notes`
--

INSERT INTO `upload_notes` (`id`, `title`, `year`, `uploaded_by`, `file`, `uploaded_date`) VALUES
(2, 'C#', '3rd', 'Abhijit Banerjee', 'C Programming.docx', '2019-06-10 19:18:00'),
(3, 'C', '3rd', 'Abhijit Banerjee', 'BCA - 4TH SEMESTER SYLLABUS - 27.03.2018-1.pdf', '2019-06-10 19:18:52');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `fac_details`
--
ALTER TABLE `fac_details`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `remarks`
--
ALTER TABLE `remarks`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `st_details`
--
ALTER TABLE `st_details`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `submit_assignment`
--
ALTER TABLE `submit_assignment`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `task_assign`
--
ALTER TABLE `task_assign`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `upload_notes`
--
ALTER TABLE `upload_notes`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
