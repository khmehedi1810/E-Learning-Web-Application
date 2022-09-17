-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2021 at 01:40 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easytutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign`
--

CREATE TABLE `assign` (
  `assign_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `course_key` varchar(255) DEFAULT NULL,
  `s_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assign`
--

INSERT INTO `assign` (`assign_id`, `course_id`, `course_key`, `s_id`) VALUES
(19, 15, 'AbdMATH', 1004),
(21, 5, 'MUGIS_MAT', 1012),
(24, 5, 'MUGIS_MAT', 1007),
(25, 19, 'ENG66', 1004);

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(4) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `subject`, `message`) VALUES
(1, 'Can not Registration', 'I can not register your system, What can i do.');

-- --------------------------------------------------------

--
-- Table structure for table `control`
--

CREATE TABLE `control` (
  `con_id` int(9) NOT NULL,
  `con_security_num` int(11) NOT NULL,
  `con_security_email` varchar(255) NOT NULL,
  `con_security_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `control`
--

INSERT INTO `control` (`con_id`, `con_security_num`, `con_security_email`, `con_security_pass`) VALUES
(1, 181151810, 'mehedi15-1810@diu.edu.bd', '3eb7569b256e51859b70a138aff200ab9e07d457'),
(2, 181151911, 'habibullah15-1911@diu.edu.bd', 'a8876d51881431d8e4f5e4591855786b8b3376c9'),
(3, 181151922, 'sakibul15-1922@diu.edu.bd', '32e0ab4aff4010cc790099f51f08bcbb93dd330b'),
(4, 181151871, 'rezaul15-1871@diu.edu.bd', '7c2bf4668796c7ce85485fe53e47f8ef2052734e'),
(5, 181151726, 'anamika15-1726@diu.edu.bd', '5454940ff7a30332527e24f5a3263d20879ad8e6');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(5) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_key` varchar(255) DEFAULT NULL,
  `course_desc` text DEFAULT NULL,
  `course_dmo_vdo` varchar(255) DEFAULT NULL,
  `course_fbLink` varchar(255) DEFAULT NULL,
  `t_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_code`, `course_key`, `course_desc`, `course_dmo_vdo`, `course_fbLink`, `t_id`) VALUES
(5, 'CLS_7_MAT', 'MUGIS_MAT', 'Mathematics is the science that deals with the logic of shape, quantity and arrangement. Math is all around us, in everything we do. It is the building block for everything in our daily lives, including mobile devices, architecture (ancient and modern), art, money, engineering, and even sports.\r\n\r\nSince the beginning of recorded history, mathematic discovery has been at the forefront of every civilized society, and in use in even the most primitive of cultures. The needs of math arose based on the wants of society. The more complex a society, the more complex the mathematical needs. Primitive tribes needed little more than the ability to count, but also relied on math to calculate the position of the sun and the physics of hunting.\r\n\r\nHistory of mathematics\r\n\r\nSeveral civilizations — in China, India, Egypt, Central America and Mesopotamia — contributed to mathematics as we know it today. The Sumerians were the first people to develop a counting system. Mathematicians developed arithmetic, which includes basic operations, multiplication, fractions and square roots. The Sumerians’ system passed through the Akkadian Empire to the Babylonians around 300 B.C. Six hundred years later, in America, the Mayans developed elaborate calendar systems and were skilled astronomers. About this time, the concept of zero was developed.', 'https://www.livescience.com/', 'www.fb.com', 7021503),
(15, 'CLS_7_MAT', 'AbdMATH', 'This is my basic Description of math mathmatics. ', 'www.mr.com', 'www.fb.com', 7021504),
(16, 'CLS_6_BAN', 'RAZBAN6', 'This is my first course in this platform', 'www.mr.com', 'www.fb.com', 7021506),
(18, 'CLS_6_BAN', 'bag_hb', 'bag_hbbag_hbbag_hbbag_hbbag_hbbag_hbbag_hbbag_hbbag_hbbag_hb', 'www.mr.com', 'www.fb.com', 7021514),
(19, 'CLS_6_ENG', 'ENG66', 'Agriculture is the backbone of all \r\ndeveloped countries. It uses 85% of available \r\nfresh water resources worldwide and this \r\npercentage continues to be dominant in water \r\nconsumption because of population growth and \r\nincreased food demand. Due to this, efficient \r\nwater management is the major concern in many \r\ncropping system in arid and semi-arid areas. An \r\nautomated irrigation system is needed to \r\noptimize water use for agricultural crops. The \r\nneed of automated irrigation system is to \r\novercome over irrigation and under irrigation.\r\nKH Mehedi', 'www.link.com', 'fb.com', 7021501);

-- --------------------------------------------------------

--
-- Table structure for table `reviewteacher`
--

CREATE TABLE `reviewteacher` (
  `rvT_id` int(11) NOT NULL,
  `rv_mesg` varchar(255) DEFAULT NULL,
  `t_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviewteacher`
--

INSERT INTO `reviewteacher` (`rvT_id`, `rv_mesg`, `t_id`) VALUES
(9, 'Good cv', 7021504),
(10, 'Need to complete profile', 7021506);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `s_id` int(4) NOT NULL,
  `s_fname` varchar(255) NOT NULL,
  `s_lname` varchar(255) NOT NULL,
  `s_email` varchar(255) NOT NULL,
  `s_phone` varchar(255) NOT NULL,
  `s_password` varchar(255) NOT NULL,
  `s_gender` varchar(255) NOT NULL,
  `s_institute` varchar(255) NOT NULL,
  `s_securityQ` varchar(255) NOT NULL,
  `s_securityA` varchar(255) NOT NULL,
  `s_pp` text NOT NULL,
  `s_adress` varchar(255) NOT NULL,
  `s_gardian` varchar(255) NOT NULL,
  `s_gardianPhone` varchar(255) NOT NULL,
  `s_fbProfile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`s_id`, `s_fname`, `s_lname`, `s_email`, `s_phone`, `s_password`, `s_gender`, `s_institute`, `s_securityQ`, `s_securityA`, `s_pp`, `s_adress`, `s_gardian`, `s_gardianPhone`, `s_fbProfile`) VALUES
(1003, 'Mehedi', 'Hasan', 'mehedi@gmail.com', '01620 564288', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Male', 'Daffodil International University', 'What is your favourite food?', 'Biriyani', 'IMG_20210317_061953.jpg', 'Mirpur-1 , Dhaka', 'Mother', '01719797401', 'www.facebook.com/khmehedi1810'),
(1004, 'Imran ', 'Hasan', 'imran@gmail.com', '0162056442', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Male', 'Katuakhali', 'What is your Birthdate?', '20-12', 'praveen-kumar-1.jpg', 'Dinajpur, Rangpur', 'Mother', '01756582628', 'www.fb.com/Ima345'),
(1007, 'MD', 'Habib', 'habib@gmail.com', '620 564288', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Male', 'Sristy College', 'What is your Birthdate?', '20-12', '', '', '', '', ''),
(1011, 'Hasan', 'Ali', 'hasan12@gmail.com', '620 564288', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Male', 'Katuakhali', 'What is your Birthdate?', '20-12', '', '', '', '', ''),
(1012, 'Kamrul', 'Hasan', 'kamrul@gmail.com', '4012548455', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Male', 'Katuakhali', 'What is your Pet Name?', 'Potu', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_complain`
--

CREATE TABLE `student_complain` (
  `stu_com_id` int(5) NOT NULL,
  `s_id` int(9) NOT NULL,
  `course_id` int(11) NOT NULL,
  `stu_com_crsCode` varchar(255) NOT NULL,
  `stu_com_crsKey` varchar(255) NOT NULL,
  `stu_com_complaim` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_complain`
--

INSERT INTO `student_complain` (`stu_com_id`, `s_id`, `course_id`, `stu_com_crsCode`, `stu_com_crsKey`, `stu_com_complaim`) VALUES
(5, 1004, 5, 'CLS_7_MAT', 'MUGIS_MAT', 'He is not good at technology.'),
(7, 1004, 19, 'CLS_6_ENG', 'ENG66', 'fghj');

-- --------------------------------------------------------

--
-- Table structure for table `teachermsg`
--

CREATE TABLE `teachermsg` (
  `tMsg_id` int(11) NOT NULL,
  `tMsg_msg` varchar(255) NOT NULL,
  `t_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachermsg`
--

INSERT INTO `teachermsg` (`tMsg_id`, `tMsg_msg`, `t_id`) VALUES
(1, 'You need to modify your course content. ', 7021503),
(2, 'Good Enough, Need more dedication.', 7021503),
(3, 'Course Content is too bad.', 7021501),
(4, 'Course Description is so poor.', 7021504),
(5, 'Hey, you doing good, keep that.', 7021514),
(6, 'Update your content', 7021501);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `t_id` int(4) NOT NULL,
  `t_fname` varchar(255) NOT NULL,
  `t_lname` varchar(255) NOT NULL,
  `t_bio` varchar(255) NOT NULL,
  `t_email` varchar(255) NOT NULL,
  `t_phone` varchar(255) NOT NULL,
  `t_password` varchar(255) NOT NULL,
  `t_security_key` varchar(255) NOT NULL,
  `t_nid` varchar(255) NOT NULL,
  `t_dob` varchar(255) NOT NULL,
  `t_hometwn` varchar(255) NOT NULL,
  `t_presentAdd` varchar(255) NOT NULL,
  `t_ppic` text NOT NULL,
  `t_demoVdo` varchar(255) NOT NULL,
  `t_gender` varchar(255) NOT NULL,
  `t_proffession` varchar(255) NOT NULL,
  `t_eduQua` varchar(255) NOT NULL,
  `t_institute` varchar(255) NOT NULL,
  `t_experience` varchar(255) NOT NULL,
  `t_permission` varchar(255) NOT NULL,
  `t_SecurityQ` varchar(255) NOT NULL,
  `t_SecurityA` varchar(255) NOT NULL,
  `t_fblink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`t_id`, `t_fname`, `t_lname`, `t_bio`, `t_email`, `t_phone`, `t_password`, `t_security_key`, `t_nid`, `t_dob`, `t_hometwn`, `t_presentAdd`, `t_ppic`, `t_demoVdo`, `t_gender`, `t_proffession`, `t_eduQua`, `t_institute`, `t_experience`, `t_permission`, `t_SecurityQ`, `t_SecurityA`, `t_fblink`) VALUES
(7021501, 'Kh Mehedi', 'Hasan', 'I am a teacher.', 'mehedi15@gmail.com', '01620 564288', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '1810', '91215451810', '22-12', 'Tangail', 'Mirpur-1 Dhaka', 'IMG_3110.jpg', 'https://youtu.be', 'Male', 'Student', 'B. Sc in CSE at DIU', 'DIU', 'Skill Develop as a trainer.', 'YES', 'What is your Birthdate?', '20-12', 'https://www.facebook.com/'),
(7021503, 'Imran', 'Mugis', 'I am a teacher.', 'mugis@gmail.com', '01658425852', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'mugis', '9264878458', '28-08-2001', 'Narshindi, Dhaka', 'Chittagong', 'IMG_20200205_102658.jpg', 'https://youtu.be', 'Male', 'Teacher', 'BBA ', 'DIU', '5years of experience', 'YES', 'What is your favourite food?', 'Pizza', 'https://www.facebook.com/'),
(7021504, 'Abdur ', 'Rahim', 'My profession is teaching. I am working as Teacher for last 5 years. ', 'abdurrahim@gmail.com', '01624895465', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'abdur', '912154525786', '28-08-2001', 'Barishal', 'Barishal', '324671239.jpg', 'https://youtu.be', 'Male', 'Teacher', 'Hons in Math', 'Barishal Institute.', '5 years as a math teacher.', 'YES', 'What is your Birthdate?', '14-06-1995', 'https://www.facebook.com/'),
(7021506, 'Razia', 'Akter', '', 'raziaakter@gmail.com', '01654884864', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'razia', '', '', '', '', '1982192111_a(10).jpg.c04cdc5affe696bdd479e5f1fa70ddaf.jpg', '', 'Male', '', '', '', '', 'YES', 'What is your Pet Name?', 'Cat', ''),
(7021507, 'Rabbani', 'Ahmed', '', 'rabbani@gmail.com', '01284858786', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'rabbani', '', '', '', '', '', '', '', '', '', '', '', '', 'What is your favourite food?', 'Pizza', ''),
(7021509, 'Rudro', 'Hasan', '', 'rudro15@gmail.com', '01548956249', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'rudro', '', '', '', '', '', '', '', '', '', '', '', '', 'What is your Pet Name?', 'Dog', ''),
(7021510, 'Joy', 'Ahmed', '', 'joy15@gmail.com', '0149746656', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '1806', '', '', '', '', '324671239.jpg', '', 'Male', '', '', '', '', '', 'What is your favourite food?', 'Movie', ''),
(7021511, 'Zulhaz', 'Uddin', '', 'zulhazuddin@gmail.com', '01684165848', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2018', '', '', '', '', '', '', '', '', '', '', '', '', 'What is your favourite food?', 'Burger', ''),
(7021514, 'Habibulaah', 'Khan', '', 'Habibulaah@gamil.com', '0126494948', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '1911', '91215451810', '28-12', '', '', '62377504_314834019438926_1208803462032623745_n.jpg', 'https://youtu.be', 'Male', 'Teacher', 'B. Sc in CSE at DIU', 'DIU', '', 'YES', 'What is your favourite food?', 'Pizza', 'https://www.facebook.com/');

-- --------------------------------------------------------

--
-- Table structure for table `todolist`
--

CREATE TABLE `todolist` (
  `todo_id` int(11) NOT NULL,
  `todo_owner` int(11) NOT NULL,
  `todo_work` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todolist`
--

INSERT INTO `todolist` (`todo_id`, `todo_owner`, `todo_work`) VALUES
(2, 7021503, 'Have to give class video.'),
(3, 7021501, 'Class test 12november.'),
(8, 1003, 'Assignment Submission last date 12 march'),
(9, 7021504, 'I have to offer course.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign`
--
ALTER TABLE `assign`
  ADD PRIMARY KEY (`assign_id`),
  ADD KEY `assign_ibfk_1` (`course_id`),
  ADD KEY `assign_ibfk_2` (`s_id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `control`
--
ALTER TABLE `control`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`),
  ADD UNIQUE KEY `course_key` (`course_key`),
  ADD KEY `courses_ibfk_1` (`t_id`);

--
-- Indexes for table `reviewteacher`
--
ALTER TABLE `reviewteacher`
  ADD PRIMARY KEY (`rvT_id`),
  ADD KEY `t_id` (`t_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `s_email` (`s_email`);

--
-- Indexes for table `student_complain`
--
ALTER TABLE `student_complain`
  ADD PRIMARY KEY (`stu_com_id`),
  ADD KEY `student_complain_ibfk_1` (`s_id`),
  ADD KEY `student_complain_ibfk_2` (`course_id`);

--
-- Indexes for table `teachermsg`
--
ALTER TABLE `teachermsg`
  ADD PRIMARY KEY (`tMsg_id`),
  ADD KEY `teachermsg_ibfk_1` (`t_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`t_id`),
  ADD UNIQUE KEY `t_email` (`t_email`);

--
-- Indexes for table `todolist`
--
ALTER TABLE `todolist`
  ADD PRIMARY KEY (`todo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign`
--
ALTER TABLE `assign`
  MODIFY `assign_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `control`
--
ALTER TABLE `control`
  MODIFY `con_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `reviewteacher`
--
ALTER TABLE `reviewteacher`
  MODIFY `rvT_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `s_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1014;

--
-- AUTO_INCREMENT for table `student_complain`
--
ALTER TABLE `student_complain`
  MODIFY `stu_com_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teachermsg`
--
ALTER TABLE `teachermsg`
  MODIFY `tMsg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `t_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7021515;

--
-- AUTO_INCREMENT for table `todolist`
--
ALTER TABLE `todolist`
  MODIFY `todo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assign`
--
ALTER TABLE `assign`
  ADD CONSTRAINT `assign_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `assign_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `students` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`t_id`) REFERENCES `teachers` (`t_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reviewteacher`
--
ALTER TABLE `reviewteacher`
  ADD CONSTRAINT `reviewteacher_ibfk_1` FOREIGN KEY (`t_id`) REFERENCES `teachers` (`t_id`);

--
-- Constraints for table `student_complain`
--
ALTER TABLE `student_complain`
  ADD CONSTRAINT `student_complain_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `students` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_complain_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teachermsg`
--
ALTER TABLE `teachermsg`
  ADD CONSTRAINT `teachermsg_ibfk_1` FOREIGN KEY (`t_id`) REFERENCES `teachers` (`t_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
