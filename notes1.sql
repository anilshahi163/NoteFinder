-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 17, 2021 at 06:13 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notes`
--

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `file_id` int(11) NOT NULL,
  `file_name` varchar(225) NOT NULL,
  `file_description` text NOT NULL,
  `file_type` varchar(225) NOT NULL,
  `file_uploader` varchar(225) NOT NULL,
  `file_uploaded_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `file_uploaded_to` varchar(225) NOT NULL,
  `file` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL DEFAULT 'not approved yet'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`file_id`, `file_name`, `file_description`, `file_type`, `file_uploader`, `file_uploaded_on`, `file_uploaded_to`, `file`, `status`) VALUES
(57, 'demo previer', 'demo', 'pdf', 'user', '2017-07-19 05:08:23', 'Computer Science', '578090.pdf', 'approved'),
(56, 'teacher3 demo', 'demo', 'txt', 'teacher2', '2017-07-19 05:08:16', 'Mechanical', '565834.txt', 'approved'),
(55, 'teacher title', 'demo desc', 'zip', 'teacher', '2017-07-22 06:02:02', 'Mechanical', '898387.zip', 'approved'),
(58, 'phpp demo', 'ppph demo', 'pdf', 'anirban', '2017-07-20 14:52:41', 'Computer Science', '69321.pdf', 'not approved yet'),
(54, 'user title', 'user desc', 'zip', 'student', '2017-07-19 05:08:28', 'Computer Science', '848114.zip', 'approved'),
(53, 'demo title ..', 'demo desc...', 'zip', 'user2', '2017-07-19 04:54:36', 'Electrical', '305047.zip', 'not approved yet'),
(52, 'demo title', 'demo desc......', 'pdf', 'user1', '2017-07-22 06:02:22', 'Electrical', '845248.pdf', 'approved'),
(51, 'demo 3', 'demo 3 desc....', 'pdf', 'user3', '2017-07-22 06:02:15', 'Computer Science', '437056.pdf', 'approved'),
(63, 'MiniTool Partition Wizard', 'MiniTool Partition Wizard', 'docx', 'CZEN', '2021-04-16 14:57:20', 'BIM', '21802.docx', 'approved'),
(49, 'demo title', 'demo description', 'docx', 'user3', '2017-07-19 05:08:13', 'Computer Science', '502238.docx', 'approved'),
(59, 'asdasd', 'asdasd', 'pdf', 'anilskhadgi', '2021-04-16 14:16:14', 'BCA', '526110.pdf', 'approved'),
(60, 'Resources up for organizational review', 'Test Description for Resources up for organizational review', 'docx', 'aashutoshOG', '2021-04-16 14:57:32', 'BCA', '619132.docx', 'approved'),
(61, 'Major Software Upgrade Available: SonaSoft™ Version 2.3', 'So, this is a test description of the Major Software Upgrade Available: SonaSoft™ Version 2.3', 'pptx', 'aashutoshOG', '2021-04-16 14:34:27', 'BCA', '581146.pptx', 'approved'),
(62, '3D FLS & Navigating the “New Norm”', 'Vendor/Retailer Status', 'docx', 'aashutoshOG', '2021-04-16 14:34:36', 'BCA', '337338.docx', 'approved'),
(64, 'Deep Learning in Shallow Water', 'Description about Deep Learning in Shallow Water', 'docx', 'AlphaUNO', '2021-04-16 14:57:15', 'BIM', '933209.docx', 'approved'),
(65, 'MiniTool Partition Wizard', 'Service and security', 'docx', 'Barun', '2021-04-16 14:57:10', 'BBM', '6068.docx', 'approved'),
(66, 'Major Software Upgrade Available: SonaSoft™ Version 2.3', 'Service and security related with Major Software Upgrade Available: SonaSoft™ Version 2.3', 'docx', 'Manish', '2021-04-16 14:57:06', 'BSc CSIT', '401916.docx', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `about` varchar(300) NOT NULL DEFAULT 'N/A',
  `role` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `token` varchar(225) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `course` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL DEFAULT 'profile.jpg',
  `joindate` varchar(225) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `about`, `role`, `email`, `token`, `gender`, `password`, `course`, `image`, `joindate`) VALUES
(12, 'root', 'admin root', 'N/A', 'admin', 'root@gmail.com', '', 'N/A', '$2y$10$UExd.f8vQXogrZELXF8KGulQJKUn32p8x4B5SVQ7V/D6.mrSAkAjW', 'Computer Science', 'profile.jpg', '2000-01-01'),
(37, 'Alijeh', 'Alija Rai', 'N/A', 'student', 'Rapgod@gmail.com', '', 'Female', '$2y$10$KMMfG2aFCquGTLdmHG7cOekkOcNMbqiujT.TXSC23YsvKO7YHFDdC', 'BCA', 'profile.jpg', 'April 16, 2021'),
(28, 'anilskhadgi', 'Anil shahi', 'N/A', 'student', 'akshahi163@gmail.com', '', 'Male', '$2y$10$lJekoPto8qleNRlR6iTSVuzb7GgbJzDDZZYDJFsQyjZ5vwaa/blym', 'BCA', 'profile.jpg', 'April 16, 2021'),
(29, 'anilsir', 'Anil sir', 'N/A', 'teacher', 'anilsir@gmail.com', '', 'Male', '$2y$10$sV0XIyIz8hubcCvfthtSuukPAOVIjWCucVRipHMXTZC3PHscsLSOa', 'BCA', 'profile.jpg', 'April 16, 2021'),
(30, 'anilsir2', 'anilsir2', 'N/A', 'teacher', 'anilsir2@gmail.com', '', 'Male', '$2y$10$NEq7znOtDqnLtyrBI7h7JOGh33KjU0ILv1oZI6QM9Y3/v5/FwvUiC', 'BIM', 'profile.jpg', 'April 16, 2021'),
(31, 'anilsir3', 'anilsir3', 'N/A', 'teacher', 'anilshahi81@yahoo.com', '', 'Male', '$2y$10$zE2cdYRB4/iwBRFEl48azuz5uThvD3Vw1OPOlcW1YNViBB2DgVxYu', 'BSc CSIT', 'profile.jpg', 'April 16, 2021'),
(32, 'aashutoshOG', 'Aashutosh Adhikari', 'N/A', 'student', 'aashutosh@gmail.com', '', 'Male', '$2y$10$isPVB40y47nQq26VC2Ff6e5J9x4A.NEZBPH3.h7u5DsFkPbV0Cg9O', 'BCA', 'profile.jpg', 'April 16, 2021'),
(33, 'CZEN', 'Sijen Dongol', 'N/A', 'student', 'sijen@gmail.com', '', 'Male', '$2y$10$RimHeggpfbG45Y7rvl0uv.Mr1JAxtxvDlSyPfSTxtqGIn.c/5GjQO', 'BIM', 'profile.jpg', 'April 16, 2021'),
(34, 'AlphaUNO', 'Pratap Ratna Bajracharya', 'N/A', 'student', 'pratap@gmail.com', '', 'Male', '$2y$10$uGQQmYnRwmw8MpI1adZUWe3gCuc1COqNepL8MX56Z3/IN7QG7BxYG', 'BIM', 'profile.jpg', 'April 16, 2021'),
(35, 'Barun', 'Barun Lamichhane', 'N/A', 'student', 'barun@gmail.com', '', 'Male', '$2y$10$PNruPehnCn.a2Bu38MweEuT.MayrIpEiIfr.7DmOtISQEH.XtpZjS', 'BBM', 'profile.jpg', 'April 16, 2021'),
(36, 'Manish', 'Manish Aryal', 'N/A', 'student', 'Manish@gmail.com', '', 'Male', '$2y$10$2NaXlb.DqafsCEs4UFKMbO25bQPjoznFN6mtj41jtssLXfyTRQ4hm', 'BSc CSIT', 'profile.jpg', 'April 16, 2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
