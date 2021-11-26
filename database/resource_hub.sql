SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

DROP DATABASE IF EXISTS resource_hub; 
CREATE DATABASE resource_hub; 
USE resource_hub; 

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `uploaded_by` varchar(255) DEFAULT NULL,
  `course` varchar(255) NOT NULL,
  `temp_filename` varchar(255) DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


INSERT INTO `files` (`id`, `filename`, `uploaded_by`, `course`, `temp_filename`, `location`, `date`) VALUES
(16, 'GPIO', 'joana', 'Embedded Systems', 'C:wamp64	mpphpBCDF.tmp', 'upload/CHRISTOPHER KAFUI KOBLA ZANU CV.docx', '2021-11-26 00:53:58'),
(15, 'form validation', 'lorraine', 'Embedded Systems', 'C:wamp64	mpphpAEAA.tmp', 'upload/CHRISTOPHER KAFUI KOBLA ZANU CV.docx', '2021-11-26 00:52:49'),
(17, 'PID_controllers', 'joana', 'Embedded Systems', 'C:wamp64	mpphp3EDA.tmp', 'upload/admissions letter.pdf', '2021-11-26 00:56:43'),
(18, 'PI_controllers', 'lorraine', 'System Dynamics', 'C:wamp64	mpphpDB4.tmp', 'upload/geogebra2.png', '2021-11-26 00:57:36'),
(19, 'stacks', 'lorraine', 'Data Structures and Algorithms', 'C:wamp64	mpphpCB77.tmp', 'upload/ACN details.docx', '2021-11-26 00:58:24'),
(29, 'Slides', 'makuyana', 'Web Technologies', 'C:xampp	mpphp882D.tmp', 'upload/Quiz-B.pdf', '2021-11-26 05:50:25'),
(23, 'Slides', 'lorraine', 'System Dynamics', 'C:xampp	mpphp3DEC.tmp', 'upload/ENGR_311_Fall_2020_Chapter_6_Notes.pdf', '2021-11-26 05:29:21'),
(24, 'Notes', 'joana', 'System Dynamics', 'C:xampp	mpphp5865.tmp', 'upload/ENGR_311_Fall_2020_Chapter_2_Part1.pdf', '2021-11-26 05:30:33'),
(25, 'Designs', 'makuyana', 'System Dynamics', 'C:xampp	mpphp5AF2.tmp', 'upload/ENGR_311_Fall_2020_Chapter_Part1.pdf', '2021-11-26 05:31:40'),
(26, 'Slides', 'makuyana', 'System Dynamics', 'C:xampp	mpphpF1FE.tmp', 'upload/ENGR_311_Fall_2020_Chapter_7_Notes.pdf', '2021-11-26 05:33:24'),
(27, 'Slides', 'lorraine', 'System Dynamics', 'C:xampp	mpphpB399.tmp', 'upload/ENGR_311_Fall_2020_Chapter_6_Notes.pdf', '2021-11-26 05:34:13'),
(28, 'Designs', 'joana', 'System Dynamics', 'C:xampp	mpphpA1ED.tmp', 'upload/ENGR_311_Fall_2020_Chapter2_Part1.pdf', '2021-11-26 05:36:20'),
(30, 'Notes', 'joana', 'Web Technologies', 'C:xampp	mpphp661B.tmp', 'upload/Quiz-B.pdf', '2021-11-26 05:51:22'),
(31, 'Slides', 'default', 'System Dynamics', 'C:xampp	mpphp685A.tmp', 'upload/Project Paper 2 -A_Partitioning-Based_Approach_for_Robot_Path_Planning_Problems.pdf', '2021-11-26 07:15:29'),
(32, 'Slides', 'default', 'System Dynamics', 'C:xampp	mpphp2AD1.tmp', 'upload/Project Presentation Paper - Can robots help eact other plan Optimal Paths in Dynamic Maps.pdf', '2021-11-26 07:41:27'),
(33, 'Slides', 'default', 'System Dynamics', 'C:xampp	mpphp64E9.tmp', 'upload/Project Paper 2 -A_Partitioning-Based_Approach_for_Robot_Path_Planning_Problems.pdf', '2021-11-26 07:46:03'),
(34, 'Slides', 'default', 'FDE', 'C:xampp	mpphp2B96.tmp', 'upload/Project Presentation Paper - Can robots help eact other plan Optimal Paths in Dynamic Maps.pdf', '2021-11-26 07:46:54');


CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `major` varchar(255) NOT NULL,
  `yeargroup` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `email`, `username`, `major`, `yeargroup`, `password`) VALUES
(8, 'lorraine@example.com', 'lorraine', 'BA', '2023', '25d55ad283aa400af464c76d713c07ad'),
(3, 'lolo@gmail.com', 'Lorraine', 'CE', '2022', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'Milli@gmail.com', 'Millicent', 'CS', '2022', '46d045ff5190f6ea93739da6c0aa19bc'),
(5, 'kojo@gmail.com', 'Kojo', 'CE', '2022', '6531401f9a6807306651b87e44c05751'),
(6, 'kofi@example.com', 'kofi', 'ME', '2024', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'makuyana@gmail.com', 'makuyana', 'MIS', '2025', '25d55ad283aa400af464c76d713c07ad'),
(9, 'joana@example.com', 'joana', 'CE', '2022', '25d55ad283aa400af464c76d713c07ad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;
