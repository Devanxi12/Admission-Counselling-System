-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2026 at 01:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(3, 'Devanxi', 'devanxi@gmail.com', '$2y$10$r.salN0HzTQskYAz1zWdwugsN.h6tqV5EWorOJzbj0cX.PUYx.YJS', '2026-03-22 12:43:49');

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `university_id` int(11) DEFAULT NULL,
  `website` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `name`, `city`, `type`, `university_id`, `website`, `description`) VALUES
(2, 'Government Engineering College, Ahmedabad', 'Ahmedabad', 'Engineering', NULL, '', NULL),
(3, 'SAL College of Engineering', 'Ahmedabad', 'Engineering', NULL, '', NULL),
(4, 'Silver Oak College of Engineering', 'Ahmedabad', 'Engineering', NULL, '', NULL),
(5, 'HL College of Commerce', 'Ahmedabad', 'Commerce', NULL, '', NULL),
(6, 'St. Xavier\'s College', 'Ahmedabad', 'Arts & Science', NULL, 'https://sxca.edu.in', NULL),
(7, 'GLS Institute of Computer Technology', 'Ahmedabad', 'IT', NULL, '', NULL),
(8, 'LDRP Institute of Technology', 'Gandhinagar', 'Engineering', NULL, '', NULL),
(9, 'DAIICT College', 'Gandhinagar', 'Engineering', NULL, 'https://daiict.ac.in', NULL),
(10, 'SVNIT Surat', 'Surat', 'Engineering', NULL, 'https://svnit.ac.in', NULL),
(11, 'SCET Surat', 'Surat', 'Engineering', NULL, '', NULL),
(12, 'Government Engineering College, Surat', 'Surat', 'Engineering', NULL, '', NULL),
(13, 'Sarvajanik College of Engineering', 'Surat', 'Engineering', NULL, '', NULL),
(14, 'P T Science College', 'Surat', 'Science', NULL, '', NULL),
(15, 'MSU Faculty of Engineering', 'Vadodara', 'Engineering', NULL, '', NULL),
(16, 'Parul Institute of Engineering', 'Vadodara', 'Engineering', NULL, '', NULL),
(17, 'Sigma College of Engineering', 'Vadodara', 'Engineering', NULL, '', NULL),
(18, 'Navrachana College', 'Vadodara', 'Commerce', NULL, '', NULL),
(20, 'VVP Engineering College (Gardi)', 'Rajkot', 'Engineering', NULL, '', NULL),
(21, 'Government Engineering College, Rajkot', 'Rajkot', 'Engineering', NULL, '', NULL),
(22, 'Darshan Institute of Engineering', 'Rajkot', 'Engineering', NULL, 'https://darshan.ac.in', NULL),
(23, 'Christ College', 'Rajkot', 'Arts & Commerce', NULL, '', NULL),
(24, 'BVM Engineering College', 'Anand', 'Engineering', NULL, '', NULL),
(25, 'ADIT College', 'Anand', 'Engineering', NULL, '', NULL),
(27, 'Ganpat Institute of Technology', 'Mehsana', 'Engineering', NULL, '', NULL),
(28, 'U V Patel College of Engineering', 'Mehsana', 'Engineering', NULL, '', NULL),
(29, 'Government Engineering College, Bhavnagar', 'Bhavnagar', 'Engineering', NULL, '', NULL),
(30, 'Government Engineering College, Junagadh', 'Junagadh', 'Engineering', NULL, '', NULL),
(31, 'Government Engineering College, Patan', 'Patan', 'Engineering', NULL, '', NULL),
(32, 'Lukhdhirji Engineering College', 'Morbi', 'Engineering', NULL, '', NULL),
(33, 'Government Engineering College, Jamnagar', 'Jamnagar', 'Engineering', NULL, '', NULL),
(34, 'Government Engineering College, Bharuch', 'Bharuch', 'Engineering', NULL, '', NULL),
(35, 'Government Engineering College, Valsad', 'Valsad', 'Engineering', NULL, '', NULL),
(36, 'Government Engineering College, Dahod', 'Dahod', 'Engineering', NULL, '', NULL),
(37, 'Gujarat University', 'Vadodara', 'Arts', NULL, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'devu', 'devu@gmail.com', 'hgeberfvfg'),
(2, 'Nidhi', 'nidhihelaiya@gmail.com', 'Hello!! Can I get more Info'),
(3, 'Nidhi', 'nidhihelaiya@gmail.com', 'Hello!!'),
(4, 'nidhj', 'nidhihelaiya@gmail.com', 'hello'),
(5, 'Nidhi', 'nidhihelaiya@gmail.com', 'hello'),
(6, 'nidhi', 'nidhihelaiya@gmail.com', 'hello '),
(7, 'nidhi', 'nidhihelaiya@gmail.com', 'hello'),
(8, 'nidhi', 'nidhihelaiya@gmail.com', 'hello'),
(9, 'nidhi', 'nidhihelaiya@gmail.com', 'hello'),
(10, 'nidhi', 'nidhihelaiya@gmail.com', 'hello'),
(11, 'nidhi', 'nidhihelaiya@gmail.com', 'hello can i get more info'),
(12, 'Nidhi', 'nidhihelaiya@gmail.com', 'hddsadd'),
(13, 'nidhi', 'nidhihelaiya@gmail.com', 'hello hi'),
(14, 'nidhi', 'nidhihelaiya@gmail.com', 'hello hi'),
(15, 'nidhi', 'nidhihelaiya@gmail.com', 'hello can i get more info?');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_name` varchar(200) NOT NULL,
  `college_id` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `phone`, `password`, `created_at`) VALUES
(1, 'devu', 'devu@gmail.com', '9876543210', '$2y$10$CR0TZ3O6i1.I7X8uBVDgUOtOEBEvW3/.UkZKo5oZwUDBTfB.NU3GS', '2026-03-22 11:15:06'),
(3, 'devu', 'devu1@gmail.com', '08947652432', '$2y$10$Iti40SyD5wFZPyIImYtTdOH.iZ5WcvAAnUWxLBKmN3HVuUvfe6u82', '2026-03-22 11:22:28'),
(4, 'nidhi', 'nidhi@gmail.com', '1234575895', '$2y$10$OTGPMbT2WHZe2SwELpTwNu9sofI3XXoB91/sI6n3hc1U0FmDjoVcC', '2026-03-22 13:18:50'),
(5, 'devanxi', 'devanxi@gmail.com', '97742114545', '$2y$10$VD0DnadZXq5z9monNn.y/O1K5T4bH6NsnPHSwRw2grtkkTd7mubSe', '2026-03-25 13:29:37'),
(6, 'devanxi', 'devanxi12@gmail.com', '9876543210', '$2y$10$G2kyLwQIxNMpTjqtrMUIlOeZMgDfwLHy.kZUKtYKtJ5A5oVY8QTMK', '2026-06-14 07:41:45'),
(7, 'Nidhi', 'nidhihelaiya@gmail.com', '9876543120', '$2y$10$5p6Re8/wbo5qsNVo8Il/1.ucdLgX8J.QrNvqKjsgIQtetRWCW6yyS', '2026-06-14 10:23:50');

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `website` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`id`, `name`, `city`, `type`, `website`, `description`) VALUES
(1, 'Indian Institute of Technology Gandhinagar', 'Gandhinagar', 'Central', 'https://iitgn.ac.in', NULL),
(2, 'Central University of Gujarat', 'Gandhinagar', 'Central', 'https://www.cug.ac.in', NULL),
(3, 'Gujarat University', 'Ahmedabad', 'Government', 'https://www.gujaratuniversity.ac.in', NULL),
(4, 'Sardar Patel University', 'Anand', 'Government', 'https://www.spuvvn.edu', NULL),
(5, 'Veer Narmad South Gujarat University', 'Surat', 'Government', 'https://vnsgu.ac.in', NULL),
(6, 'Saurashtra University', 'Rajkot', 'Government', 'https://www.saurashtrauniversity.edu', NULL),
(7, 'Maharaja Krishnakumarsinhji Bhavnagar University', 'Bhavnagar', 'Government', 'https://mkbhavuni.edu.in', NULL),
(8, 'Hemchandracharya North Gujarat University', 'Patan', 'Government', 'https://ngu.ac.in', NULL),
(9, 'Dr. Babasaheb Ambedkar Open University', 'Ahmedabad', 'Government', 'https://baou.edu.in', NULL),
(10, 'Gujarat Technological University', 'Ahmedabad', 'Government', 'https://www.gtu.ac.in', NULL),
(11, 'Junagadh Agricultural University', 'Junagadh', 'Government', 'https://jau.in', NULL),
(12, 'Navsari Agricultural University', 'Navsari', 'Government', 'https://nau.in', NULL),
(13, 'Anand Agricultural University', 'Anand', 'Government', 'https://aau.in', NULL),
(14, 'Kamdhenu University', 'Gandhinagar', 'Government', 'https://kamdhenuuni.edu.in', NULL),
(15, 'Gujarat Ayurveda University', 'Jamnagar', 'Government', 'https://www.ayurveduniversity.edu.in', NULL),
(16, 'Gujarat National Law University', 'Gandhinagar', 'Government', 'https://www.gnlu.ac.in', NULL),
(17, 'Children’s University', 'Gandhinagar', 'Government', 'https://childrensuniversity.ac.in', NULL),
(18, 'Raksha Shakti University', 'Gandhinagar', 'Government', 'https://rsu.ac.in', NULL),
(19, 'Indian Institute of Teacher Education', 'Gandhinagar', 'Government', 'https://iite.ac.in', NULL),
(20, 'Gujarat Forensic Sciences University', 'Gandhinagar', 'Government', 'https://gfsu.edu.in', NULL),
(21, 'Nirma University', 'Ahmedabad', 'Private', 'https://nirmauni.ac.in', NULL),
(22, 'CEPT University', 'Ahmedabad', 'Private', 'https://cept.ac.in', NULL),
(23, 'Ahmedabad University', 'Ahmedabad', 'Private', 'https://ahduni.edu.in', NULL),
(24, 'Ganpat University', 'Mehsana', 'Private', 'https://ganpatuniversity.ac.in', NULL),
(25, 'Dharmsinh Desai University', 'Nadiad', 'Private', 'https://ddu.ac.in', NULL),
(26, 'Pandit Deendayal Energy University', 'Gandhinagar', 'Private', 'https://pdeu.ac.in', NULL),
(27, 'Charotar University of Science and Technology', 'Anand', 'Private', 'https://charusat.ac.in', NULL),
(28, 'Parul University', 'Vadodara', 'Private', 'https://paruluniversity.ac.in', NULL),
(29, 'Navrachana University', 'Vadodara', 'Private', 'https://nuv.ac.in', NULL),
(30, 'ITM Vocational University', 'Vadodara', 'Private', 'https://itmvocationaluniversity.com', NULL),
(31, 'Sumandeep Vidyapeeth', 'Vadodara', 'Private', 'https://sumandeepvidyapeethdu.edu.in', NULL),
(32, 'AURO University', 'Surat', 'Private', 'https://aurouniversity.edu.in', NULL),
(33, 'P P Savani University', 'Surat', 'Private', 'https://ppsu.ac.in', NULL),
(34, 'UKA Tarsadia University', 'Bardoli', 'Private', 'https://utu.ac.in', NULL),
(35, 'Marwadi University', 'Rajkot', 'Private', 'https://marwadiuniversity.ac.in', NULL),
(36, 'RK University', 'Rajkot', 'Private', 'https://rku.ac.in', NULL),
(37, 'C U Shah University', 'Surendranagar', 'Private', 'https://cus.ac.in', NULL),
(38, 'Calorx Teachers University', 'Ahmedabad', 'Private', 'https://ctu.ac.in', NULL),
(39, 'Indus University', 'Ahmedabad', 'Private', 'https://indusuni.ac.in', NULL),
(40, 'Sabarmati University', 'Ahmedabad', 'Private', 'https://sabarmatiuniversity.edu.in', NULL),
(41, 'Silver Oak University', 'Ahmedabad', 'Private', 'https://silveroakuni.ac.in', NULL),
(42, 'JG University', 'Ahmedabad', 'Private', 'https://jguniversity.edu.in', NULL),
(43, 'Atmiya University', 'Rajkot', 'Private', 'https://atmiyauni.ac.in', NULL),
(44, 'Institute of Infrastructure Technology Research and Management', 'Ahmedabad', 'Deemed', 'https://iitram.ac.in', NULL),
(45, 'DAIICT', 'Gandhinagar', 'Deemed', 'https://daiict.ac.in', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_college_city` (`name`,`city`),
  ADD KEY `fk_university` (`university_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `colleges`
--
ALTER TABLE `colleges`
  ADD CONSTRAINT `colleges_ibfk_1` FOREIGN KEY (`university_id`) REFERENCES `universities` (`id`),
  ADD CONSTRAINT `fk_university` FOREIGN KEY (`university_id`) REFERENCES `universities` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
