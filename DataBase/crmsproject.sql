-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2022 at 02:46 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crmsproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `login_id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `login_id`, `password`, `trn_date`) VALUES
(1, 'gpc.crms.admin456@gmail.com', 'gpcbalaghat', '2022-04-27 10:48:13');

-- --------------------------------------------------------

--
-- Table structure for table `change_password`
--

CREATE TABLE `change_password` (
  `id` int(11) NOT NULL,
  `old_password` varchar(100) NOT NULL,
  `current_password` varchar(100) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `change_password`
--

INSERT INTO `change_password` (`id`, `old_password`, `current_password`, `trn_date`) VALUES
(1, '', '', '2022-04-25 08:23:00'),
(2, '123456', '123', '2022-04-25 08:23:44'),
(3, '', '', '2022-04-27 13:07:23');

-- --------------------------------------------------------

--
-- Table structure for table `history_applied_job`
--

CREATE TABLE `history_applied_job` (
  `id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `job_description` varchar(100) NOT NULL,
  `job_location` varchar(100) NOT NULL,
  `no_of_opening` varchar(100) NOT NULL,
  `apply_date` date NOT NULL,
  `last_date` date NOT NULL,
  `resume` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_applied_job`
--

INSERT INTO `history_applied_job` (`id`, `company_name`, `job_title`, `salary`, `job_description`, `job_location`, `no_of_opening`, `apply_date`, `last_date`, `resume`) VALUES
(4, 'Infosys Pvt. Ltd. ytr', '', '', '', '', '', '0000-00-00', '0000-00-00', 'gpcbgt.jfif'),
(5, 'Infosys Pvt. Ltd.', '', '', '', '', '', '0000-00-00', '0000-00-00', 'happy-student.jpg'),
(6, 'Infosys Pvt. Ltd.', '', '', '', '', '', '0000-00-00', '0000-00-00', 'happy-student.jpg'),
(7, 'HCL technologies', 'Software Developer', '60K-80K', 'B.tech. , and M. tech. ,polytechnic', 'Hyderabad, Andrapradesh', '50', '2022-03-28', '2022-05-01', 'jobplacement.jpg'),
(8, 'Tata Consultancy Services Pvt. Ltd.', 'Data Analyst', '60K-80K', 'For begginers, and B.tech students', 'Pune , Maharashtra', '800', '2022-04-08', '2022-05-08', 'happy-student.jpg'),
(9, 'Infosys Pvt. Ltd.', 'Web Developer', '40K-50K ', 'For begginers, and B.tech students', 'Pune, Maharashtra', '90', '2022-04-02', '2022-05-03', 'Database1.accdb'),
(10, 'L & T ', 'Data Analyst', '90K-95K', 'B.tech. , and M. tech. ,polytechnic', '12,Bhopal, Madhya Pradesh', '800', '2022-05-27', '2022-06-05', 'Presentation1.pptx'),
(11, 'Infosys Pvt. Ltd.', 'Web Developer', '40K-50K ', 'For begginers, and B.tech students', 'Pune, Maharashtra', '90', '2022-04-02', '2022-05-03', 'diagram.docx'),
(12, 'Infosys Pvt. Ltd.', 'Web Developer', '40K-50K ', 'For begginers, and B.tech students', 'Pune, Maharashtra', '90', '2022-04-02', '2022-05-03', '');

-- --------------------------------------------------------

--
-- Table structure for table `history_applied_training`
--

CREATE TABLE `history_applied_training` (
  `id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `training_title` varchar(100) NOT NULL,
  `training_description` varchar(100) NOT NULL,
  `fees` varchar(100) NOT NULL,
  `training_location` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `last_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_applied_training`
--

INSERT INTO `history_applied_training` (`id`, `company_name`, `training_title`, `training_description`, `fees`, `training_location`, `start_date`, `last_date`) VALUES
(2, 'Infosys Pvt. Ltd.', 'Industraial / Voccational Training', 'For 2nd and 3rd semester students', '10000 R.s.', 'Sagar, Madhya Pradesh', '2022-05-21', '2022-05-29'),
(3, 'L & T ', 'Industraial / Voccational Training', 'For 2nd and 3rd semester students', '12000 R.S.', 'Pune, Maharashtra', '2022-05-13', '2022-06-05'),
(4, 'L & T ', 'Industraial / Voccational Training', 'For 2nd and 3rd semester students', '12000 R.S.', 'Pune, Maharashtra', '2022-05-13', '2022-06-05');

-- --------------------------------------------------------

--
-- Table structure for table `new_training`
--

CREATE TABLE `new_training` (
  `id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `training_title` varchar(100) NOT NULL,
  `training_description` varchar(100) NOT NULL,
  `fees` varchar(100) NOT NULL,
  `training_location` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `last_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_training`
--

INSERT INTO `new_training` (`id`, `company_name`, `training_title`, `training_description`, `fees`, `training_location`, `start_date`, `last_date`) VALUES
(4, '', 'Voccational Training', 'For 2nd and 3rd semester students', '12000 R.S.', 'Jabalpur', '2022-04-01', '2022-05-01'),
(5, '', 'IndustralTraining', 'For 2nd and 3rd semester students', '8000 R.S', 'Bhopal, Madhya Pradesh', '2022-04-13', '2022-05-08'),
(8, '', 'Industraial / Voccational Training', 'For 3rd and 4th semester students', '15K-20K', 'Sagar, Madhya Pradesh', '2022-03-30', '2022-05-01'),
(11, 'L & T ', 'Industraial / Voccational Training', 'For 2nd and 3rd semester students', '12000 R.S.', 'Pune, Maharashtra', '2022-05-13', '2022-06-05');

-- --------------------------------------------------------

--
-- Table structure for table `new_vacancy`
--

CREATE TABLE `new_vacancy` (
  `id` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `job_description` varchar(100) NOT NULL,
  `job_location` varchar(100) NOT NULL,
  `no_of_opening` varchar(100) NOT NULL,
  `apply_date` date NOT NULL,
  `last_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_vacancy`
--

INSERT INTO `new_vacancy` (`id`, `company_name`, `job_title`, `salary`, `job_description`, `job_location`, `no_of_opening`, `apply_date`, `last_date`) VALUES
(12, 'Tata Consultancy Services Pvt. Ltd.', 'Data Analyst', '60K-80K', 'For begginers, and B.tech students', 'Pune , Maharashtra', '800', '2022-04-08', '2022-05-08'),
(13, 'HCL technologies', 'Software Developer', '60K-80K', 'B.tech. , and M. tech. ,polytechnic', 'Hyderabad, Andrapradesh', '50', '2022-03-28', '2022-05-01'),
(14, 'Infosys Pvt. Ltd.', 'Web Developer', '40K-50K ', 'For begginers, and B.tech students', 'Pune, Maharashtra', '90', '2022-04-02', '2022-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `registration_company`
--

CREATE TABLE `registration_company` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `companyname` varchar(100) NOT NULL,
  `companyid` varchar(100) NOT NULL,
  `ceo_name` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `Contact_no` varchar(100) NOT NULL,
  `company_contact_no` varchar(100) NOT NULL,
  `company_address` varchar(100) NOT NULL,
  `provided` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_company`
--

INSERT INTO `registration_company` (`id`, `email`, `companyname`, `companyid`, `ceo_name`, `pname`, `Contact_no`, `company_contact_no`, `company_address`, `provided`, `password`, `trn_date`) VALUES
(2, 'infosys.pvt.ltd123@gmail.com', 'Infosys Pvt. Ltd.', '897654', 'Mr. Krishna', 'Mr. Ram', '89098767564', '5678980989', 'Bhopal, Madhya pradesh', 'on', 'localhost', '2022-04-23 11:27:24'),
(3, 'infosys123@gmail.com', 'infosys pvt. Ltd.', '45678764', 'Mr. Manmohan', 'Mr. raja', '89898898787', '989898898798', 'Bhopal, madhya pradesh', 'on', '123456', '2022-04-24 11:37:14'),
(4, 'wipropvt.1223@gmail.com', 'Wipro Pvt. Ltd.', '987654', 'Mr. Ram', 'mr. roshan', '9898989898', '7887788787', 'bhopal, mp', 'on', '09876', '2022-04-25 08:36:21'),
(8, 'wipropvt.1223@gmail.com', 'Wipro Pvt. Ltd.', '98765', 'Mr. Shashtri', 'Ram', '9878676545', '9876565453', 'Balaghat, Madhya Pradesh', 'on', 'abc123', '2022-05-18 19:35:16');

-- --------------------------------------------------------

--
-- Table structure for table `registration_for_job`
--

CREATE TABLE `registration_for_job` (
  `id` int(11) NOT NULL,
  `enrollment_no` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `aadhar` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` datetime NOT NULL,
  `address` varchar(100) NOT NULL,
  `clg_name` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `first` varchar(100) NOT NULL,
  `second` varchar(100) NOT NULL,
  `third` varchar(100) NOT NULL,
  `fourth` varchar(100) NOT NULL,
  `fifth` varchar(100) NOT NULL,
  `sixth` varchar(100) NOT NULL,
  `cgpa` varchar(100) NOT NULL,
  `passout_year` varchar(100) NOT NULL,
  `documents` varchar(100) NOT NULL,
  `resume` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_for_job`
--

INSERT INTO `registration_for_job` (`id`, `enrollment_no`, `fullname`, `fname`, `aadhar`, `contact_no`, `email`, `dob`, `address`, `clg_name`, `branch`, `first`, `second`, `third`, `fourth`, `fifth`, `sixth`, `cgpa`, `passout_year`, `documents`, `resume`, `password`, `trn_date`) VALUES
(3, '19012C04056', 'Thakrele', 'Thakrele', '5678 9876 4321', '6564678798', 'divya123@gmail.com', '2022-04-20 00:00:00', 'Balaghat, Madhya Pradesh', 'Government Polytechnic Co', 'Computer Science & Engineering', '90', '75', '76', '73', '86', '89', '89', '2024', 'jobplacement.jpg', 'incremental-model.jpg', '123', '2022-04-28 12:26:36'),
(4, '19012C04056', 'Triveni', 'Papa', '6768 8800 8766', '987878788', 'shindetriveni382@gmail.co', '2022-06-23 00:00:00', 'Balaghat, Madhya Pradesh', 'Government Polytechnic Co', 'Computer Science & Engineering', '89', '79', '78', '87', '91', '89', '92', '2022', 'DIAGRAM(ER, USE CASE).docx', 'CAMPUS RECRUITMENT MANAGEMENT SYSTEM.docx', 'localhost', '2022-06-27 10:45:30');

-- --------------------------------------------------------

--
-- Table structure for table `registration_for_training`
--

CREATE TABLE `registration_for_training` (
  `id` int(11) NOT NULL,
  `enrollment_num` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `clg_name` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `first` varchar(100) NOT NULL,
  `second` varchar(100) NOT NULL,
  `third` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_for_training`
--

INSERT INTO `registration_for_training` (`id`, `enrollment_num`, `fullname`, `fname`, `clg_name`, `branch`, `first`, `second`, `third`, `password`, `trn_date`) VALUES
(5, '19012C04056', 'Shinde', 'Shinde', 'Government Polytechnic College Balaghat', 'Computer Science & Engineering', 'gpcbgt.jfif', 'happy-student.jpg', 'happy-student.jpg', '1234', '2022-04-29 10:46:00');

-- --------------------------------------------------------

--
-- Table structure for table `registration_tpo`
--

CREATE TABLE `registration_tpo` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tpo_name` varchar(100) NOT NULL,
  `tpo_id` varchar(100) NOT NULL,
  `Contact_no` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_tpo`
--

INSERT INTO `registration_tpo` (`id`, `email`, `tpo_name`, `tpo_id`, `Contact_no`, `password`, `trn_date`) VALUES
(1, 'shindetriveni382@gmail.com', 'Shinde Triveni Shinde', '9867TPO123', '6264674921', '', '2022-04-22 20:18:39'),
(2, 'shindetriveni382@gmail.com', 'Shinde Triveni Shinde', '8765TPO456', '6264674921', '', '2022-04-22 20:19:16'),
(3, 'admin@gmail.com', 'Mr. Uday singh Shailesh', '9867TPO123', '07876757434', '123456', '2022-04-22 20:23:24'),
(4, 'admin@gmail.com', 'Mr. Uday singh Shailesh', '9867TPO123', '07876757434', '123456', '2022-04-22 20:27:19'),
(5, 'admin@gmail.com', 'Mr. Uday singh Shailesh', '9867TPO123', '07876757434', '123456', '2022-04-22 20:28:31'),
(6, 'gpctpo123@gmail.com', 'Mr. Uday singh Shailesh', '9867TPO123', '07876757434', '23456', '2022-04-22 21:02:17'),
(7, 'abc234@gmail.com', 'Shinde Triveni Shinde', '9867TPO123', '6264674921', '123456', '2022-04-23 04:57:15'),
(8, 'triveni123@gmail.com', 'Triveni shinde', '1234TPO890', '87890989', '123', '2022-04-23 05:20:51'),
(9, 'shindetriveni382@gmail.com', 'Shinde Triveni Shinde', '9867TPO123', '6264674921', '789', '2022-04-23 06:30:01'),
(10, 'shinde123@gmail.com', 'uday singh', '234567', '9876543212', '098', '2022-04-23 06:49:23'),
(11, 'gpctpo123@gmail.com', 'Mr. Uday singh Shailesh', '98786GPC345', '07876757434', '123', '2022-04-23 06:52:27'),
(12, 'tpo.gpc456@gmail.com', 'Mr. Uday singh Shailesh', '8765TPO456', '07876757434', '123456', '2022-04-23 07:03:28'),
(13, 'shindetriveni382@gmail.com', 'Triveni Shinde', '234567', '09889988998', '09876', '2022-04-23 07:15:37'),
(14, 'tpo.gpc.bgt123@gmail.com', 'Mr. Uday singh Shailesh', '98786GPC345', '8998989898', 'localhost', '2022-04-23 11:30:23'),
(15, 'tpo.gpc.bgt123@gmaill.com', 'Mr. Uday singh shailesh', '789087644', '78987686678', '123456', '2022-04-24 11:27:41'),
(18, 'gpctpo123@gmail.com', 'Mr. Uday singh Shailesh', '8765TPO456', '07876757434', '123456', '2022-04-24 13:19:04'),
(19, 'tpo124@gmail.com', 'Shailesh sir', '234644', '9898989898', '123456abc', '2022-04-25 11:58:09'),
(22, 'luckythakur1418@gmail.com', 'laxmi thakur', '34567', '9685384815', 'laxmi@123', '2022-04-28 12:57:02'),
(23, 'tpoabc123@gmail.com', 'Mr. uday singh shailesh', '8907', '9889988998', 'abc123', '2022-05-26 19:10:38'),
(24, 'tpo12323@gmail.com', 'Mr.  shailesh singh', '67897776', '8778789087', '123456', '2022-06-24 11:26:14'),
(25, 'tpogpcbgt123@gmail.com', 'Mr. Uday singh Shailesh', '7898098', '9867654534', 'localhostt', '2022-06-27 20:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `id` int(100) NOT NULL,
  `enrollment_no` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `aadhar` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `clg_name` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `what_u_want` varchar(100) NOT NULL,
  `first` varchar(100) NOT NULL,
  `second` varchar(100) NOT NULL,
  `third` varchar(100) NOT NULL,
  `fourth` varchar(100) NOT NULL,
  `fifth` varchar(100) NOT NULL,
  `sixth` varchar(100) NOT NULL,
  `cgpa` varchar(100) NOT NULL,
  `passout_year` varchar(100) NOT NULL,
  `resume` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`id`, `enrollment_no`, `fullname`, `fname`, `aadhar`, `contact_no`, `email`, `dob`, `address`, `category`, `clg_name`, `branch`, `gender`, `what_u_want`, `first`, `second`, `third`, `fourth`, `fifth`, `sixth`, `cgpa`, `passout_year`, `resume`, `password`, `trn_date`) VALUES
(21, '', 'Divya', 'Thakrele', '9876 2354 6789', '6564678798', '', '2022-04-14', 'Balaghat, Madhya Pradesh', 'OBC', 'Government Polytechnic College Balaghat', 'Computer Science & Engineering', 'on', 'Training(Industrial/Voccational)', '75', '79', '74', '91', '90', '89', '85', '', 'happy-student.jpg', '123divya', '0000-00-00 00:00:00'),
(22, '', 'Ram', 'Ram', '8976 6789 0987', '8778654534', '', '2022-04-14', 'Jabalpur, Madhya Pradesh ', 'OBC', 'Government Polytechnic College Balaghat', 'Computer Science & Engineering', 'on', 'Training(Industrial/Voccational)', '65', '68', '69', '64', '98', '97', '91', '', 'different companies.jfif', 'ram123', '0000-00-00 00:00:00'),
(23, '', 'Rohan', 'Mr. Mahesh', '8765 4567 3456', '9856764321', '', '2022-04-12', ' Sagar, Madhya Pradesh', 'OBC', 'Government Polytechnic College Balaghat', 'Computer Science & Engineering', 'on', 'Training(Industrial/Voccational)', '98', '78', '76', '56', '64', '78', '98', '2024', 'qualification.jpg', 'rohan456', '0000-00-00 00:00:00'),
(24, '', 'Shinde', 'Triveni', '2344', '09889988998', '', '2022-04-20', 'ward no. -09, village - khandwa, tehsil - waraseoni, dist. - balaghat, M.P.', 'OBC', 'Government Polytechnic College Balaghat', 'Branch', 'on', 'Job', '90', '78', '97', '91', '98', '97', '91', '2022', 'qualification.jpg', '1234', '2022-04-23 08:24:32'),
(25, '', 'Shinde', 'Triveni', '5678 9876 4321', '09889988998', '', '2022-04-27', 'ward no. -09, village - khandwa, tehsil - waraseoni, dist. - balaghat, M.P.', 'Category', 'Government Polytechnic College Balaghat', 'Computer Science & Engineering', 'on', 'Training(Industrial/Voccational)', '89', '87', '97', '73', '73', '89', '92', '2022', 'what-is-incremental-model-in-hindi-768x430.png', 'abc123', '2022-04-23 08:30:55'),
(26, '', 'Shinde', 'Triveni', '8976 6789 0987', '09889988998', '', '2022-04-28', 'ward no. -09, village - khandwa, tehsil - waraseoni, dist. - balaghat, M.P.', 'OBC', 'Government Polytechnic College Balaghat', 'Computer Science & Engineering', 'on', 'Job', '90', '78', '69', '87', '90', '78', '91', '2022', 'qualification.jpg', '123', '2022-04-23 08:37:11'),
(27, '', 'Bhupendra kekti', 'vinod kekti', '944336426820', '8435878236', '', '2001-02-24', ' 4,indra colony rajegaon mp ', 'OBC', 'GPC Balaghat', 'Computer Science & Engineering', 'on', 'Job', '57', '72', '74', '74', '89', '94', '82', '2021', 'CV_202202281642575.pdf', 'Raja@123', '2022-04-24 11:07:28'),
(28, '', 'Roshni', 'ros', '3456 7890 8765 ', '789878987', '', '2022-04-12', 'Balaghat, MP ', 'OBC', 'Government Polytechnic College Balaghat', 'Computer Science & Engineering', 'on', 'Training(Industrial/Voccational)', '89', '79', '78', '91', '91', '89', '85', '2022', 'gpcbgt.jfif', '1234', '2022-04-25 08:32:17'),
(29, '', 'Shinde', 'Triveni', '1234567', '9889988998', '', '2022-04-12', 'ward no. -09, village - khandwa, tehsil - waraseoni, dist. - balaghat, M.P.', 'OBC', 'Government Polytechnic Co', 'Branch', 'on', 'Job', '89', '89', '78', '87', '73', '89', '92', '2022', 'jobplacement.jpg', 'localhost', '2022-04-26 07:05:40'),
(30, '', 'Shinde', 'Triveni', '1234567', '9889988998', '', '2022-04-12', 'ward no. -09, village - khandwa, tehsil - waraseoni, dist. - balaghat, M.P.', 'OBC', 'Government Polytechnic Co', 'Branch', 'on', 'Job', '89', '89', '78', '87', '73', '89', '92', '2022', 'jobplacement.jpg', 'localhost', '2022-04-26 07:06:15'),
(31, '', 'Shinde', 'Triveni', '7890 6543 34', '9889988998', '', '2022-04-14', 'ward no. -09, village - khandwa, tehsil - waraseoni, dist. - balaghat, M.P.', 'OBC', 'Government Polytechnic Co', 'Computer Science & Engineering', 'on', 'Training(Industrial/Voccational)', '90', '68', '74', '73', '90', '78', '98', '2022', 'thank you.jfif', 'localhost', '2022-04-26 07:08:06'),
(32, '', 'Shinde Triveni Shinde', 'Shinde', '7890 6543 34', '6264674921', '19012C04056', '2022-04-28', 'ward no. -09, village - khandwa, tehsil - waraseoni, dist. - balaghat, M.P.', 'OBC', 'Government Polytechnic Co', 'Computer Science & Engineering', 'on', 'Training(Industrial/Voccational)', '90', '78', '97', '64', '86', '89', '96', '2022', 'jobplacement.jpg', 'localhost', '2022-04-26 07:16:29'),
(33, '19012C04056', 'Triveni Shinde', 'Triveni', '5678 9876 43', '9889988998', 'shindetriveni382@gmail.co', '2022-04-20', 'ward no. -09, village - khandwa, tehsil - waraseoni, dist. - balaghat, M.P.', 'OBC', 'Government Polytechnic Co', 'Computer Science & Engineering', 'on', 'Training(Industrial/Voccational)', '90', '78', '97', '95', '91', '78', '91', '2022', 'jobplacement.jpg', 'localhost', '2022-04-26 07:26:32'),
(34, '19012C04056', 'Shinde', 'Triveni', '', '', '', '0000-00-00', '', '', 'Government Polytechnic Co', 'Computer Science & Engineering', 'on', '', 'jobplacement.jpg', 'incremental-model.jpg', 'happy-student.jpg', '', '', '', '', '', '', 'abc', '2022-04-28 11:29:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `change_password`
--
ALTER TABLE `change_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_applied_job`
--
ALTER TABLE `history_applied_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_applied_training`
--
ALTER TABLE `history_applied_training`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_training`
--
ALTER TABLE `new_training`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_vacancy`
--
ALTER TABLE `new_vacancy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration_company`
--
ALTER TABLE `registration_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration_for_job`
--
ALTER TABLE `registration_for_job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration_for_training`
--
ALTER TABLE `registration_for_training`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration_tpo`
--
ALTER TABLE `registration_tpo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `change_password`
--
ALTER TABLE `change_password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `history_applied_job`
--
ALTER TABLE `history_applied_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `history_applied_training`
--
ALTER TABLE `history_applied_training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `new_training`
--
ALTER TABLE `new_training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `new_vacancy`
--
ALTER TABLE `new_vacancy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `registration_company`
--
ALTER TABLE `registration_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `registration_for_job`
--
ALTER TABLE `registration_for_job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `registration_for_training`
--
ALTER TABLE `registration_for_training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `registration_tpo`
--
ALTER TABLE `registration_tpo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
