-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2023 at 06:08 PM
-- Server version: 8.0.26
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty_info`
--

CREATE TABLE `faculty_info` (
  `f_id` int NOT NULL,
  `f_department` varchar(50) DEFAULT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `f_gender` varchar(20) DEFAULT NULL,
  `f_date` varchar(50) DEFAULT NULL,
  `f_mothername` varchar(50) DEFAULT NULL,
  `f_category` varchar(50) DEFAULT NULL,
  `f_religion` varchar(50) DEFAULT NULL,
  `f_mobile` varchar(20) DEFAULT NULL,
  `f_email` varchar(255) DEFAULT NULL,
  `f_address` varchar(255) DEFAULT NULL,
  `f_pancard` varchar(50) DEFAULT NULL,
  `f_aadharcard` varchar(50) DEFAULT NULL,
  `f_bankaccount` varchar(50) DEFAULT NULL,
  `f_ifsc` varchar(50) DEFAULT NULL,
  `f_micr` varchar(50) DEFAULT NULL,
  `f_pf` varchar(50) DEFAULT NULL,
  `f_passportno` varchar(50) DEFAULT NULL,
  `f_username` varchar(255) DEFAULT NULL,
  `f_password` varchar(255) DEFAULT NULL,
  `f_status` varchar(255) DEFAULT NULL,
  `f_generated_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `faculty_info`
--

INSERT INTO `faculty_info` (`f_id`, `f_department`, `f_name`, `f_gender`, `f_date`, `f_mothername`, `f_category`, `f_religion`, `f_mobile`, `f_email`, `f_address`, `f_pancard`, `f_aadharcard`, `f_bankaccount`, `f_ifsc`, `f_micr`, `f_pf`, `f_passportno`, `f_username`, `f_password`, `f_status`, `f_generated_time`) VALUES
(1, 'computer', 'Dr. Medhane Darshan Vishwasrao', 'Male', 'NA', 'NA', 'NA', 'NA', '8888832400', 'medhane.darshan@kbtcoe.org', '', '', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'comp040', 'comp040@1234', '1', '2023-03-15 13:15:55'),
(2, 'computer', 'Dr. Tarle Balasaheb Sukadeo', 'Male', '', '', '', '', '7588097627', 'tarle.balasaheb@kbtcoe.org', '', '', '', '', '', '', '', '', 'comp001', 'comp001@1234', '1', '2023-03-15 13:15:55'),
(3, 'computer', 'Dr. Tidake Vaishali Santosh', 'Female', '', '', '', '', '9422751559', 'tidake.vaishali@kbtcoe.org', '', '', '', '', '', '', '', '', 'comp002', 'comp002@1234', '1', '2023-03-15 13:15:55'),
(4, 'computer', 'Dr. Talekar Sopan Ashok', 'Male', '1977-02-02', 'na', 'na', 'na', '9834326156', 'talekar.sopan@kbtcoe.org', 'na', 'BWUPJ1212B', '124565451245', '12458745', 'na', 'na', 'na', 'nan', 'comp004', 'comp004@1234', '1', '2023-03-21 06:18:11'),
(5, 'computer', 'Shinde Pushkar Pratap', 'Male', '', '', '', '', '9422777418', 'shinde.pushkar@kbtcoe.org', '', '', '', '', '', '', '', '', 'comp005', 'comp005@1234', '1', '2023-03-15 13:15:55'),
(6, 'computer', 'Shevale Rupali Ramdas', 'Female', '', '', '', '', '9921991306', 'shevale.rupali@kbtcoe.org', '', '', '', '', '', '', '', '', 'comp008', 'comp008@1234', '1', '2023-03-15 13:15:55'),
(7, 'computer', 'Chandwadkar Radhika Pankaj', 'Female', '', '', '', '', '9850373706', 'chandwadkar.radhika@kbtcoe.org', '', '', '', '', '', '', '', '', 'comp009', 'comp009@1234', '1', '2023-03-15 13:15:55'),
(8, 'computer', 'Shinde Priti Vishwanath', 'Female', '', '', '', '', '9423584181', 'shinde.priti@kbtcoe.org', '', '', '', '', '', '', '', '', 'comp012', 'comp012@1234', '1', '2023-03-15 13:15:55'),
(9, 'computer', 'Datir Sunil Tukaram', 'Male', '', '', '', '', '9921839984', 'datir.sunil@kbtcoe.org', '', '', '', '', '', '', '', '', 'comp013', 'comp013@1234', '1', '2023-03-15 13:15:55'),
(10, 'computer', 'Malode Madhuri Vishnu', 'Female', '', '', '', '', '8007664333', 'malode.madhuri@kbtcoe.org', '', '', '', '', '', '', '', '', 'mca011', 'mca011@1234', '1', '2023-03-15 13:15:55'),
(11, 'computer', 'Tidke Dipika Laxman', 'Female', '', '', '', '', '7387894498', 'dipikatidke@kbtcoe.org', '', '', '', '', '', '', '', '', 'mca006', 'mca006@1234', '1', '2023-03-15 13:15:55'),
(12, 'computer', 'Pawar Sunita Valmik', 'Female', '', '', '', '', '9403932470', 'pawar.sunita@kbtcoe.org', '', '', '', '', '', '', '', '', 'comp027', 'comp027@1234', '1', '2023-03-15 13:15:55'),
(13, 'computer', 'Thombare Manisha Babanrao', 'Female', '', '', '', '', '9921079037', 'thombare.manisha@kbtcoe.org', '', '', '', '', '', '', '', '', 'comp034', 'comp034@1234', '1', '2023-03-15 13:15:55'),
(14, 'computer', 'Boraste Priyanka Prakash', 'Female', '', '', '', '', '7588097075', 'boraste.priyanka@kbtcoe.org', '', '', '', '', '', '', '', '', 'comp035', 'comp035@1234', '1', '2023-03-15 13:15:55'),
(15, 'computer', 'Gholap Bhushan Shantaram', 'Male', '', '', '', '', '9923148702', 'gholap.bhushan@kbtcoe.org', '', '', '', '', '', '', '', '', 'comp036', 'comp036@1234', '1', '2023-03-15 13:15:55');

-- --------------------------------------------------------

--
-- Table structure for table `stud_info`
--

CREATE TABLE `stud_info` (
  `s_id` int NOT NULL,
  `s_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `s_institute` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `s_branch` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `s_class_year` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `s_mb_no` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `s_email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `s_blood_grp` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `s_address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `s_city` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `s_state` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `s_pin` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `s_parent_mb_no` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `s_parent_email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `s_roll_no` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `s_prn` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `s_dob` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `s_mother_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `s_batch` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `s_admit_year` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `s_passout_year` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `s_active_status` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `s_dsy` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `s_username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `s_password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `s_status` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `s_generated_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stud_info`
--

INSERT INTO `stud_info` (`s_id`, `s_name`, `s_institute`, `s_branch`, `s_class_year`, `s_mb_no`, `s_email`, `s_blood_grp`, `s_address`, `s_city`, `s_state`, `s_pin`, `s_parent_mb_no`, `s_parent_email`, `s_roll_no`, `s_prn`, `s_dob`, `s_mother_name`, `s_batch`, `s_admit_year`, `s_passout_year`, `s_active_status`, `s_dsy`,`s_username`, `s_password`, `s_status`, `s_generated_time`) VALUES

(1, 'Viren Narendra Ayer', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '1', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21093', 'KBTUG21093', '1', '0000-00-00 00:00:00'),
(2, 'Sushil Vikas Bagad', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '2', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21376', 'KBTUG21376', '1', '0000-00-00 00:00:00'),
(3, 'Tanmayee Kaustubh Beldar', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '3', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21169', 'KBTUG21169', '1', '0000-00-00 00:00:00'),
(4, 'Sarang Chandrashekhar Bhabad', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '4', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21561', 'KBTUG21561', '1', '0000-00-00 00:00:00'),
(5, 'Aditya Vishwajit Bhamare', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '5', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21575', 'KBTUG21575', '1', '0000-00-00 00:00:00'),
(6, 'Vaishnavi Ramesh Bhandarkar', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '6', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21418', 'KBTUG21418', '1', '0000-00-00 00:00:00'),
(7, 'Nishant Pyarelal Bide', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '7', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21415', 'KBTUG21415', '1', '0000-00-00 00:00:00'),
(8, 'Akash Ajay Borisa', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '8', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21580', 'KBTUG21580', '1', '0000-00-00 00:00:00'),
(9, 'Neha Bharat Chaudhari', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '9', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21319', 'KBTUG21319', '1', '0000-00-00 00:00:00'),
(10, 'Sakshi Umesh Chaudhari', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '10', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21371', 'KBTUG21371', '1', '0000-00-00 00:00:00'),
(11, 'Sakshi Vijay Chavhan', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '11', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21198', 'KBTUG21198', '1', '0000-00-00 00:00:00'),
(12, 'Nidhi Kailas Deore', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '12', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21466', 'KBTUG21466', '1', '0000-00-00 00:00:00'),
(13, 'Rutuja Pradeep Deshmukh', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '13', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21356', 'KBTUG21356', '1', '0000-00-00 00:00:00'),
(14, 'Roshani Kanhaiyalal Dhodare', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '14', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21166', 'KBTUG21166', '1', '0000-00-00 00:00:00'),
(15, 'Priyanka Madhavrao Gaikar', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '15', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21054', 'KBTUG21054', '1', '0000-00-00 00:00:00'),
(16, 'Purva Ashok Gavali', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '16', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21446', 'KBTUG21446', '1', '0000-00-00 00:00:00'),
(17, 'Ashlesha Vasant Ghoderao', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '17', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21362', 'KBTUG21362', '1', '0000-00-00 00:00:00'),
(18, 'Manasi Raju Golesar', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '18', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21109', 'KBTUG21109', '1', '0000-00-00 00:00:00'),
(19, 'Priti Rajesh Jagtap', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '19', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21043', 'KBTUG21043', '1', '0000-00-00 00:00:00'),
(20, 'Yashvardhan Jayant Jagtap', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '20', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21085', 'KBTUG21085', '1', '0000-00-00 00:00:00'),
(21, 'Abhay Nilesh Kalawadiya', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '21', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21395', 'KBTUG21395', '1', '0000-00-00 00:00:00'),
(22, 'Avantika Sharad Kaloge', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '22', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21392', 'KBTUG21392', '1', '0000-00-00 00:00:00'),
(23, 'Gayatri Vijay Khairnar', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '23', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21209', 'KBTUG21209', '1', '0000-00-00 00:00:00'),
(24, 'Monali Sanjay Khairnar', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '24', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21326', 'KBTUG21326', '1', '0000-00-00 00:00:00'),
(25, 'Naziya Rauab Ali Khan', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '25', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21107', 'KBTUG21107', '1', '0000-00-00 00:00:00'),
(26, 'Kamlesh Jayprakash Khatod', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '26', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21364', 'KBTUG21364', '1', '0000-00-00 00:00:00'),
(27, 'Shiv Vilas Koshire', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '27', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21488', 'KBTUG21488', '1', '0000-00-00 00:00:00'),
(28, 'Jayesh Ravindra Kotkar', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '28', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21201', 'KBTUG21201', '1', '0000-00-00 00:00:00'),
(29, 'Soham Raghuvir Kulkarni', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '29', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21462', 'KBTUG21462', '1', '0000-00-00 00:00:00'),
(30, 'Sunny Sampat Lonkar', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '30', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21138', 'KBTUG21138', '1', '0000-00-00 00:00:00'),
(31, 'Aditya Ishwar Mahajan', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '31', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21574', 'KBTUG21574', '1', '0000-00-00 00:00:00'),
(32, 'Sakshi Govind Mahajan', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '32', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21440', 'KBTUG21440', '1', '0000-00-00 00:00:00'),
(33, 'Pranjal Kiran Mahale', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '33', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21399', 'KBTUG21399', '1', '0000-00-00 00:00:00'),
(34, 'Dhanashri Sanjay Mahale', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '34', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21495', 'KBTUG21495', '1', '0000-00-00 00:00:00'),
(35, 'Akash Fulsing Malche', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '35', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21181', 'KBTUG21181', '1', '0000-00-00 00:00:00'),
(36, 'Kshitij Bhushan Malode', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '36', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21559', 'KBTUG21559', '1', '0000-00-00 00:00:00'),
(37, 'Sarvesh Bhousaheb Mohite', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '37', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21213', 'KBTUG21213', '1', '0000-00-00 00:00:00'),
(38, 'Sai Sunil Mulmule', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '38', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21565', 'KBTUG21565', '1', '0000-00-00 00:00:00'),
(39, 'Srushti Jayesh Musmade', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '39', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21508', 'KBTUG21508', '1', '0000-00-00 00:00:00'),
(40, 'Vedant Sanjay Patil', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '40', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21401', 'KBTUG21401', '1', '0000-00-00 00:00:00'),
(41, 'Harshavardhan Deviprasad Patil', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '41', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21344', 'KBTUG21344', '1', '0000-00-00 00:00:00'),
(42, 'Pranav Sandeep Patil', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '42', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21368', 'KBTUG21368', '1', '0000-00-00 00:00:00'),
(43, 'Rudram Jayram Patil', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '43', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21483', 'KBTUG21483', '1', '0000-00-00 00:00:00'),
(44, 'Isha Pratap Pawar', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '44', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21572', 'KBTUG21572', '1', '0000-00-00 00:00:00'),
(45, 'Ankush Gokul Pawar', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '45', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21133', 'KBTUG21133', '1', '0000-00-00 00:00:00'),
(46, 'Harshdeep Suresh Pawar', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '46', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21569', 'KBTUG21569', '1', '0000-00-00 00:00:00'),
(47, 'Pavitra Deepak Purkar', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '47', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21566', 'KBTUG21566', '1', '0000-00-00 00:00:00'),
(48, 'Sumit Manoj Ramchandani', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '48', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21567', 'KBTUG21567', '1', '0000-00-00 00:00:00'),
(49, 'Mansi Gopinath Raut', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '49', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21146', 'KBTUG21146', '1', '0000-00-00 00:00:00'),
(50, 'Gautami Balasaheb Sanap', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '50', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21587', 'KBTUG21587', '1', '0000-00-00 00:00:00'),
(51, 'Ruchita Bharat Sandhanshiv', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '51', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21143', 'KBTUG21143', '1', '0000-00-00 00:00:00'),
(52, 'Tejal Ramnath Sangale', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '52', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21449', 'KBTUG21449', '1', '0000-00-00 00:00:00'),
(53, 'Pratham Kishor Sharma', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '53', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21380', 'KBTUG21380', '1', '0000-00-00 00:00:00'),
(54, 'Sanket Dattatray Shinde', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '54', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21117', 'KBTUG21117', '1', '0000-00-00 00:00:00'),
(55, 'Ankita Ramsudama Singh', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '55', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21434', 'KBTUG21434', '1', '0000-00-00 00:00:00'),
(56, 'Shivam Anil Sonawane', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '56', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21156', 'KBTUG21156', '1', '0000-00-00 00:00:00'),
(57, 'Atharva Tushar Sonawane', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '57', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21100', 'KBTUG21100', '1', '0000-00-00 00:00:00'),
(58, 'Kaushal Mangesh Suryawanshi', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '58', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21560', 'KBTUG21560', '1', '0000-00-00 00:00:00'),
(59, 'Parvez Shalam Tadavi', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '59', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21372', 'KBTUG21372', '1', '0000-00-00 00:00:00'),
(60, 'Ruchita Nandkumar Taskar', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '60', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21573', 'KBTUG21573', '1', '0000-00-00 00:00:00'),
(61, 'Vaibhavi Sunil Thakare', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '61', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21492', 'KBTUG21492', '1', '0000-00-00 00:00:00'),
(62, 'Bhavesh Abasaheb Tupe', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '62', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21196', 'KBTUG21196', '1', '0000-00-00 00:00:00'),
(63, 'Dhanshri Ganesh Vispute', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '63', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21205', 'KBTUG21205', '1', '0000-00-00 00:00:00'),
(64, 'Prerna Kailas Wagh', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '64', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21385', 'KBTUG21385', '1', '0000-00-00 00:00:00'),
(65, 'Prerana Rajendra Wagh', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '65', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21192', 'KBTUG21192', '1', '0000-00-00 00:00:00'),
(66, 'Vaishnavi Rohidas Wagh', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '66', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21170', 'KBTUG21170', '1', '0000-00-00 00:00:00'),
(67, 'Sakshi Pravin Warade', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '67', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21101', 'KBTUG21101', '1', '0000-00-00 00:00:00'),
(68, 'Nikhil Hemant Zoman', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '68', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21037', 'KBTUG21037', '1', '0000-00-00 00:00:00'),
(69, 'Kshitij Anil Pandey', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '69', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG21539', 'KBTUG21539', '1', '0000-00-00 00:00:00'),
(70, 'Mayuri Kailas Avhad', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '70', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG22250', 'KBTUG22250', '1', '0000-00-00 00:00:00'),
(71, 'Gauri Dnyaneshwar Chaudhari', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '71', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG22587', 'KBTUG22587', '1', '0000-00-00 00:00:00'),
(72, 'Linashree Shriram Gudaghe', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '72', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG22367', 'KBTUG22367', '1', '0000-00-00 00:00:00'),
(73, 'Hemangi Pravin Jadhav', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '73', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG22514', 'KBTUG22514', '1', '0000-00-00 00:00:00'),
(74, 'Aditya Purushottam More', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '74', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG22542', 'KBTUG22542', '1', '0000-00-00 00:00:00'),
(75, 'Khyati Chetan Raghvani', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '75', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG22526', 'KBTUG22526', '1', '0000-00-00 00:00:00'),
(76, 'Ananya Amol Sarode', 'MVP\'s KBTCOE', 'computer', 'SE', '', 'kbtug21005@kbtcoe.org', '', '', '', '', '', '', '', '76', '', '', '', '2021-2022', '', '', 'yes', '', 'KBTUG22551', 'KBTUG22551', '1', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `subject_info`
--

CREATE TABLE `subject_info` (
  `s_id` int NOT NULL,
  `s_year` varchar(255) DEFAULT NULL,
  `s_pattern` varchar(50) DEFAULT NULL,
  `s_department` varchar(100) DEFAULT NULL,
  `s_semester` varchar(50) DEFAULT NULL,
  `s_course` varchar(100) DEFAULT NULL,
  `s_cname` varchar(255) DEFAULT NULL,
  `s_lecture` varchar(50) DEFAULT NULL,
  `s_practical` varchar(50) DEFAULT NULL,
  `s_tutorial` varchar(50) DEFAULT NULL,
  `s_midsem` varchar(50) DEFAULT NULL,
  `s_endsem` varchar(50) DEFAULT NULL,
  `s_termwork` varchar(50) DEFAULT NULL,
  `s_tpractical` varchar(50) DEFAULT NULL,
  `s_oralpre` varchar(50) DEFAULT NULL,
  `s_total` varchar(50) DEFAULT NULL,
  `s_clecture` varchar(50) DEFAULT NULL,
  `s_cpractical` varchar(50) DEFAULT NULL,
  `s_ctutorial` varchar(50) DEFAULT NULL,
  `s_ctotal` varchar(50) DEFAULT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `f_username` varchar(255) DEFAULT NULL,
  `s_status` varchar(255) DEFAULT NULL,
  `s_generated_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `s_code` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `subject_info`
--

INSERT INTO `subject_info` (`s_id`, `s_year`, `s_pattern`, `s_department`, `s_semester`, `s_course`, `s_cname`, `s_lecture`, `s_practical`, `s_tutorial`, `s_midsem`, `s_endsem`, `s_termwork`, `s_tpractical`, `s_oralpre`, `s_total`, `s_clecture`, `s_cpractical`, `s_ctutorial`, `s_ctotal`, `f_name`, `f_username`, `s_status`, `s_generated_time`, `s_code`) VALUES
(1, 'BE', '2019', 'Computer', 'VIII', '410250', 'High Performance Computing', '3', '0', '0', '30', '70', '0', '0', '0', '100', '3', '0', '0', '3', 'Boraste Priyanka Prakash', 'comp035', '1', '2023-03-20 18:26:03', '410'),
(2, 'BE', '2019', 'Computer', 'VIII', '410251', 'Deep Learning', '3', '0', '0', '30', '70', '0', '0', '0', '100', '3', '0', '0', '3', 'Dr. Tidake Vaishali Santosh', 'comp002', '1', '2023-03-27 07:01:11', '411');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `s_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`id`, `name`, `designation`, `username`, `password`, `s_status`) VALUES
(1, 'admin', 'HOD', 'comp001@kbtcoe.org', 'admin@hod', '1'),
(2, 'Nishant', 'Faculty', 'nishant@gmail.com', 'nishant123', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stud_attend`
--

CREATE TABLE `stud_attend` (
  `s_id` int NOT NULL,
  `s_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `s_email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `s_branch` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `s_class_year` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `s_attendance` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `s_status` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `s_generated_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stud_attend`
--

INSERT INTO `stud_attend` (`s_id`, `s_name`, `s_email`, `s_branch`, `s_class_year`, `s_attendance`,`s_status`, `s_generated_time`) VALUES

(1, 'Viren Narendra Ayer', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '',  '1', '0000-00-00  '),
(2, 'Sushil Vikas Bagad', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(3, 'Tanmayee Kaustubh Beldar', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(4, 'Sarang Chandrashekhar Bhabad', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(5, 'Aditya Vishwajit Bhamare', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(6, 'Vaishnavi Ramesh Bhandarkar', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(7, 'Nishant Pyarelal Bide', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(8, 'Akash Ajay Borisa', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(9, 'Neha Bharat Chaudhari', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(10, 'Sakshi Umesh Chaudhari', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(11, 'Sakshi Vijay Chavhan', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(12, 'Nidhi Kailas Deore', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '',  '1', '0000-00-00  '),
(13, 'Rutuja Pradeep Deshmukh', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(14, 'Roshani Kanhaiyalal Dhodare', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(15, 'Priyanka Madhavrao Gaikar', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(16, 'Purva Ashok Gavali', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(17, 'Ashlesha Vasant Ghoderao', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(18, 'Manasi Raju Golesar', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(19, 'Priti Rajesh Jagtap', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(20, 'Yashvardhan Jayant Jagtap', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(21, 'Abhay Nilesh Kalawadiya', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(22, 'Avantika Sharad Kaloge', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(23, 'Gayatri Vijay Khairnar', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(24, 'Monali Sanjay Khairnar', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(25, 'Naziya Rauab Ali Khan', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(26, 'Kamlesh Jayprakash Khatod', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(27, 'Shiv Vilas Koshire', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(28, 'Jayesh Ravindra Kotkar', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(29, 'Soham Raghuvir Kulkarni', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(30, 'Sunny Sampat Lonkar', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(31, 'Aditya Ishwar Mahajan', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(32, 'Sakshi Govind Mahajan', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(33, 'Pranjal Kiran Mahale', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(34, 'Dhanashri Sanjay Mahale', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(35, 'Akash Fulsing Malche', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(36, 'Kshitij Bhushan Malode', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(37, 'Sarvesh Bhousaheb Mohite', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(38, 'Sai Sunil Mulmule', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(39, 'Srushti Jayesh Musmade', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '), 
(40, 'Vedant Sanjay Patil', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(41, 'Harshavardhan Deviprasad Patil', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(42, 'Pranav Sandeep Patil', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(43, 'Rudram Jayram Patil', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(44, 'Isha Pratap Pawar', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(45, 'Ankush Gokul Pawar', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(46, 'Harshdeep Suresh Pawar', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '',  '1', '0000-00-00  '),
(47, 'Pavitra Deepak Purkar', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '',  '1', '0000-00-00  '),
(48, 'Sumit Manoj Ramchandani', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(49, 'Mansi Gopinath Raut', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(50, 'Gautami Balasaheb Sanap', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(51, 'Ruchita Bharat Sandhanshiv', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(52, 'Tejal Ramnath Sangale', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(53, 'Pratham Kishor Sharma', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(54, 'Sanket Dattatray Shinde', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(55, 'Ankita Ramsudama Singh', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(56, 'Shivam Anil Sonawane', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(57, 'Atharva Tushar Sonawane', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(58, 'Kaushal Mangesh Suryawanshi', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(59, 'Parvez Shalam Tadavi', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(60, 'Ruchita Nandkumar Taskar', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(61, 'Vaibhavi Sunil Thakare', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(62, 'Bhavesh Abasaheb Tupe', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(63, 'Dhanshri Ganesh Vispute', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(64, 'Prerna Kailas Wagh', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(65, 'Prerana Rajendra Wagh', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(66, 'Vaishnavi Rohidas Wagh', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(67, 'Sakshi Pravin Warade', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(68, 'Nikhil Hemant Zoman', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(69, 'Kshitij Anil Pandey', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(70, 'Mayuri Kailas Avhad', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(71, 'Gauri Dnyaneshwar Chaudhari', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(72, 'Linashree Shriram Gudaghe', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(73, 'Hemangi Pravin Jadhav', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(74, 'Aditya Purushottam More', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(75, 'Khyati Chetan Raghvani', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  '),
(76, 'Ananya Amol Sarode', 'kbtug21005@kbtcoe.org', 'computer', 'SE', '', '1', '0000-00-00  ');
-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `stud_login` (
  `s_id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `stud_login` (`s_id`, `name`,`username`, `password`) VALUES

(1, 'Viren Narendra Ayer', 'kbtug21005@kbtcoe.org',   '1'),
(2, 'Sushil Vikas Bagad', 'kbtug21005@kbtcoe.org',  '1'),
(3, 'Tanmayee Kaustubh Beldar', 'kbtug21005@kbtcoe.org', '1'),
(4, 'Sarang Chandrashekhar Bhabad', 'kbtug21005@kbtcoe.org',  '1'),
(5, 'Aditya Vishwajit Bhamare', 'kbtug21005@kbtcoe.org',  '1'),
(6, 'Vaishnavi Ramesh Bhandarkar', 'kbtug21005@kbtcoe.org',  '1'),
(7, 'Nishant Pyarelal Bide', 'kbtug21415@kbtcoe.org',  '1'),
(8, 'Akash Ajay Borisa', 'kbtug21005@kbtcoe.org',  '1'),
(9, 'Neha Bharat Chaudhari', 'kbtug21005@kbtcoe.org',  '1'),
(10, 'Sakshi Umesh Chaudhari', 'kbtug21005@kbtcoe.org',  '1'),
(11, 'Sakshi Vijay Chavhan', 'kbtug21005@kbtcoe.org',  '1'),
(12, 'Nidhi Kailas Deore', 'kbtug21005@kbtcoe.org',   '1'),
(13, 'Rutuja Pradeep Deshmukh', 'kbtug21005@kbtcoe.org',  '1'),
(14, 'Roshani Kanhaiyalal Dhodare', 'kbtug21005@kbtcoe.org',  '1'),
(15, 'Priyanka Madhavrao Gaikar', 'kbtug21005@kbtcoe.org',  '1'),
(16, 'Purva Ashok Gavali', 'kbtug21005@kbtcoe.org',  '1'),
(17, 'Ashlesha Vasant Ghoderao', 'kbtug21005@kbtcoe.org',  '1' ),
(18, 'Manasi Raju Golesar', 'kbtug21005@kbtcoe.org',  '1'),
(19, 'Priti Rajesh Jagtap', 'kbtug21005@kbtcoe.org',  '1' ),
(20, 'Yashvardhan Jayant Jagtap', 'kbtug21005@kbtcoe.org',  '1' ),
(21, 'Abhay Nilesh Kalawadiya', 'kbtug21005@kbtcoe.org',  '1' ),
(22, 'Avantika Sharad Kaloge', 'kbtug21005@kbtcoe.org',  '1' ),
(23, 'Gayatri Vijay Khairnar', 'kbtug21005@kbtcoe.org',  '1' ),
(24, 'Monali Sanjay Khairnar', 'kbtug21005@kbtcoe.org',  '1' ),
(25, 'Naziya Rauab Ali Khan', 'kbtug21005@kbtcoe.org',  '1' ),
(26, 'Kamlesh Jayprakash Khatod', 'kbtug21005@kbtcoe.org',  '1' ),
(27, 'Shiv Vilas Koshire', 'kbtug21005@kbtcoe.org',  '1' ),
(28, 'Jayesh Ravindra Kotkar', 'kbtug21005@kbtcoe.org',  '1' ),
(29, 'Soham Raghuvir Kulkarni', 'kbtug21005@kbtcoe.org',  '1' ),
(30, 'Sunny Sampat Lonkar', 'kbtug21005@kbtcoe.org',  '1' ),
(31, 'Aditya Ishwar Mahajan', 'kbtug21005@kbtcoe.org',  '1' ),
(32, 'Sakshi Govind Mahajan', 'kbtug21005@kbtcoe.org',  '1' ),
(33, 'Pranjal Kiran Mahale', 'kbtug21005@kbtcoe.org',  '1' ),
(34, 'Dhanashri Sanjay Mahale', 'kbtug21005@kbtcoe.org',  '1' ),
(35, 'Akash Fulsing Malche', 'kbtug21005@kbtcoe.org',  '1' ),
(36, 'Kshitij Bhushan Malode', 'kbtug21005@kbtcoe.org',  '1' ),
(37, 'Sarvesh Bhousaheb Mohite', 'kbtug21005@kbtcoe.org',  '1' ),
(38, 'Sai Sunil Mulmule', 'kbtug21005@kbtcoe.org',  '1' ),
(39, 'Srushti Jayesh Musmade', 'kbtug21005@kbtcoe.org',  '1' ), 
(40, 'Vedant Sanjay Patil', 'kbtug21005@kbtcoe.org',  '1' ),
(41, 'Harshavardhan Deviprasad Patil', 'kbtug21005@kbtcoe.org',  '1' ),
(42, 'Pranav Sandeep Patil', 'kbtug21005@kbtcoe.org',  '1' ),
(43, 'Rudram Jayram Patil', 'kbtug21005@kbtcoe.org',  '1' ),
(44, 'Isha Pratap Pawar', 'kbtug21005@kbtcoe.org',  '1' ),
(45, 'Ankush Gokul Pawar', 'kbtug21005@kbtcoe.org',  '1' ),
(46, 'Harshdeep Suresh Pawar', 'kbtug21005@kbtcoe.org',   '1' ),
(47, 'Pavitra Deepak Purkar', 'kbtug21005@kbtcoe.org',   '1' ),
(48, 'Sumit Manoj Ramchandani', 'kbtug21005@kbtcoe.org',  '1' ),
(49, 'Mansi Gopinath Raut', 'kbtug21005@kbtcoe.org',  '1' ),
(50, 'Gautami Balasaheb Sanap', 'kbtug21005@kbtcoe.org',  '1' ),
(51, 'Ruchita Bharat Sandhanshiv', 'kbtug21005@kbtcoe.org',  '1' ),
(52, 'Tejal Ramnath Sangale', 'kbtug21005@kbtcoe.org',  '1' ),
(53, 'Pratham Kishor Sharma', 'kbtug21005@kbtcoe.org',  '1' ),
(54, 'Sanket Dattatray Shinde', 'kbtug21005@kbtcoe.org',  '1' ),
(55, 'Ankita Ramsudama Singh', 'kbtug21005@kbtcoe.org',  '1' ),
(56, 'Shivam Anil Sonawane', 'kbtug21005@kbtcoe.org',  '1' ),
(57, 'Atharva Tushar Sonawane', 'kbtug21005@kbtcoe.org',  '1' ),
(58, 'Kaushal Mangesh Suryawanshi', 'kbtug21005@kbtcoe.org',  '1' ),
(59, 'Parvez Shalam Tadavi', 'kbtug21005@kbtcoe.org',  '1' ),
(60, 'Ruchita Nandkumar Taskar', 'kbtug21005@kbtcoe.org',  '1' ),
(61, 'Vaibhavi Sunil Thakare', 'kbtug21005@kbtcoe.org',  '1' ),
(62, 'Bhavesh Abasaheb Tupe', 'kbtug21005@kbtcoe.org',  '1' ),
(63, 'Dhanshri Ganesh Vispute', 'kbtug21005@kbtcoe.org',  '1' ),
(64, 'Prerna Kailas Wagh', 'kbtug21005@kbtcoe.org',  '1' ),
(65, 'Prerana Rajendra Wagh', 'kbtug21005@kbtcoe.org',  '1' ),
(66, 'Vaishnavi Rohidas Wagh', 'kbtug21005@kbtcoe.org',  '1' ),
(67, 'Sakshi Pravin Warade', 'kbtug21005@kbtcoe.org',  '1' ),
(68, 'Nikhil Hemant Zoman', 'kbtug21005@kbtcoe.org',  '1' ),
(69, 'Kshitij Anil Pandey', 'kbtug21005@kbtcoe.org',  '1' ),
(70, 'Mayuri Kailas Avhad', 'kbtug21005@kbtcoe.org',  '1' ),
(71, 'Gauri Dnyaneshwar Chaudhari', 'kbtug21005@kbtcoe.org',  '1' ),
(72, 'Linashree Shriram Gudaghe', 'kbtug21005@kbtcoe.org',  '1' ),
(73, 'Hemangi Pravin Jadhav', 'kbtug21005@kbtcoe.org',  '1' ),
(74, 'Aditya Purushottam More', 'kbtug21005@kbtcoe.org',  '1' ),
(75, 'Khyati Chetan Raghvani', 'kbtug21005@kbtcoe.org',  '1' ),
(76, 'Ananya Amol Sarode', 'kbtug21005@kbtcoe.org',  '1' );
-- --------------------------------------------------------

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_info`
--
ALTER TABLE `faculty_info`
  ADD PRIMARY KEY (`f_id`);


--
-- Indexes for table `stud_info`
--
ALTER TABLE `stud_info`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `subject_info`
--
ALTER TABLE `subject_info`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stud_attend`
--
ALTER TABLE `stud_attend`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `stud_login`
--
ALTER TABLE `stud_login`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty_info`
--
ALTER TABLE `faculty_info`
  MODIFY `f_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;


--
-- AUTO_INCREMENT for table `stud_info`
--
ALTER TABLE `stud_info`
  MODIFY `s_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `subject_info`
--
ALTER TABLE `subject_info`
  MODIFY `s_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `stud_info`
--
ALTER TABLE `stud_attend`
  MODIFY `s_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `stud_info`
--
ALTER TABLE `stud_login`
  MODIFY `s_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
