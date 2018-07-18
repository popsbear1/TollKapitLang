-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
<<<<<<< HEAD
-- Generation Time: Jul 18, 2018 at 02:59 AM
=======
-- Generation Time: Jul 17, 2018 at 06:01 AM
>>>>>>> e10f158fc43ef5672eed3fe4e73c0902d508e95c
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infrabidtrack`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_classification`
--

DROP TABLE IF EXISTS `account_classification`;
CREATE TABLE IF NOT EXISTS `account_classification` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `classification` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_classification`
--

INSERT INTO `account_classification` (`account_id`, `classification`, `status`) VALUES
(1, 'Capital Outlay', 'active'),
(2, 'MOOE', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `barangays`
--

DROP TABLE IF EXISTS `barangays`;
CREATE TABLE IF NOT EXISTS `barangays` (
  `barangay_id` int(11) NOT NULL AUTO_INCREMENT,
  `barangay_code` varchar(11) NOT NULL,
  `barangay` varchar(225) NOT NULL,
  `municipality_id` int(11) NOT NULL,
  PRIMARY KEY (`barangay_id`),
  KEY `selected_municipality` (`municipality_id`)
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barangays`
--

INSERT INTO `barangays` (`barangay_id`, `barangay_code`, `barangay`, `municipality_id`) VALUES
(1, '1101001', 'Abiang', 1),
(2, '1101002', 'Caliking', 1),
(3, '1101003', 'Cattubo', 1),
(4, '1101004', 'Naguey', 1),
(5, '1101005', 'Paoay', 1),
(6, '1101006', 'Pasdong', 1),
(7, '1101007', 'Poblacion(Bakun)', 1),
(8, '1101008', 'Topdac', 1),
(9, '1103001', 'Ampusongan', 2),
(10, '1103002', 'Bagu', 2),
(11, '1103003', 'Dalipey', 2),
(12, '1103004', 'Gambang', 2),
(13, '1103005', 'Kayapa', 2),
(14, '1103006', 'Poblacion(Bakun)', 2),
(15, '1103007', 'Sinacbat', 2),
(16, '1104001', 'Ambuclao', 3),
(17, '1104002', 'Bila', 3),
(18, '1104003', 'Bokod-Bisal', 3),
(19, '1104004', 'Daclan(Bokod)', 3),
(20, '1104005', 'Ekip', 3),
(21, '1104006', 'Karao', 3),
(22, '1104007', 'Nawal', 3),
(23, '1104008', 'Pito', 3),
(24, '1104009', 'Poblacion(Bokod)', 3),
(25, '1105002', 'Amgaleyguey', 4),
(26, '1105003 ', 'Amlimay', 4),
(27, '1105004', 'Baculongan Norte', 4),
(28, '1105014', 'Baculongan Sur', 4),
(29, '1105006', 'Bangao', 4),
(30, '1105007', 'Buyacaoan', 4),
(31, '1105008', 'Calamagan', 4),
(32, '1105015', 'Lengaoan', 4),
(33, '1105010', 'Loo', 4),
(34, '1105012', 'Natubleng', 4),
(35, '1105013', 'Poblacion(Buguias)', 4),
(36, '1105009', 'Catlubong', 4),
(37, '1106001', 'Ampucao', 5),
(38, '1106002', 'Dalupirip', 5),
(39, '1106003', 'Gumatdang', 5),
(40, '1106004', 'Loacan', 5),
(41, '1106005', 'Poblacion(Itogon)', 5),
(42, '1106006', 'Tinongdan', 5),
(43, '1106007', 'Tuding', 5),
(44, '1106008', 'Ucab', 5),
(45, '1106009', 'Virac', 5),
(46, '1107001', 'Adaoay', 6),
(47, '1107002', 'Anchukey', 6),
(48, '1107003', 'Ballay', 6),
(49, '1107004', 'Bashoy', 6),
(50, '1107005', 'Batan', 6),
(51, '1107009', 'Duacan', 6),
(52, '1107010', 'Eddet', 6),
(53, '1107012', 'Gusaran', 6),
(54, '1107013', 'Kabayan Barrio', 6),
(55, '1107014', 'Lusod', 6),
(56, '1107016', 'Pacso', 6),
(57, '1107017', 'Poblacion(Kabayan)', 6),
(58, '1107018', 'Tawangan', 6),
(59, '1108001', 'Balakbak', 7),
(60, '1108002', 'Beleng-Belis', 7),
(61, '1108003', 'Boklaoan', 7),
(62, '1108004', 'Cayapes', 7),
(63, '1108006', 'Cuba', 7),
(64, '1108008', 'Datakan', 7),
(65, '1108009', 'Gadang', 7),
(66, '1108010', 'Gaswiling', 7),
(67, '1108011', 'Labueg', 7),
(68, '1108013', 'Paykek', 7),
(69, '1108014', 'Poblacion(Kapangan)', 7),
(70, '1108016', 'Pongayan', 7),
(71, '1108015', 'Pudong', 7),
(72, '1108017', 'Sagubo', 7),
(73, '1108018', 'Tabao-ao', 7),
(74, '1109001', 'Badeo', 8),
(75, '1109002', 'Lubo', 8),
(76, '1109003', 'Madaymen', 8),
(77, '1109004', 'Palina', 8),
(78, '1109005', 'Poblacion(Kibungan)', 8),
(79, '1109006', 'Sagpat', 8),
(80, '1109007', 'Tacadang', 8),
(81, '1110001', 'Alapang', 9),
(82, '1110002', 'Alno', 9),
(83, '1110003', 'Ambiong', 9),
(84, '1110004', 'Bahong', 9),
(85, '1110005', 'Balili(La Trinidad)', 9),
(86, '1110006', 'Beckel', 9),
(87, '1110008', 'Betag', 9),
(88, '1110007', 'Bineng', 9),
(89, '1110009', 'Cruz', 9),
(90, '1110010', 'Lubas', 9),
(91, '1110011', 'Pico', 9),
(92, '1110012', 'Poblacion(LTB)', 9),
(93, '1110013', 'Puguis', 9),
(94, '1110014', 'Shilan', 9),
(95, '1110015', 'Tawang', 9),
(96, '1110016', 'Wangal', 9),
(97, '1111001', 'Balili(Mankayan)', 10),
(98, '1111002', 'Bedbed', 10),
(99, '1111003', 'Bulalacao', 10),
(100, '1111004', 'Cabiten', 10),
(101, '1111005', 'Colalo', 10),
(102, '1111008', 'Paco', 10),
(103, '1111006', 'Guinaoang', 10),
(104, '1111010', 'Poblacion(Mankayan)', 10),
(105, '1111011', 'Sapid', 10),
(106, '1111012', 'Tabio', 10),
(107, '1111013', 'Taneg', 10),
(108, '1112002', 'Bagong', 11),
(109, '1112003', 'Ballulay', 11),
(110, '1112004', 'Banangan', 11),
(111, '1112005', 'Banengbeng', 11),
(112, '1112006', 'Bayabas', 11),
(113, '1112007', 'Kamog', 11),
(114, '1112010', 'Pappa', 11),
(115, '1112011', 'Poblacion(Sablan)', 11),
(116, '1113001', 'Ansagan', 12),
(117, '1113003', 'Camp 3', 12),
(118, '1113004', 'Camp 4', 12),
(119, '1113002', 'Camp 1', 12),
(120, '1113006', 'Nangalisan', 12),
(121, '1113007', 'Poblacion(Tuba)', 12),
(122, '1113008', 'San Pascual', 12),
(123, '1113009', 'Tabaan Norte', 12),
(124, '1113010', 'Tabaan Sur', 12),
(125, '1113011', 'Tadiangan', 12),
(126, '1113012', 'Taloy Norte', 12),
(127, '1113013', 'Taloy Sur', 12),
(128, '1113014', 'Twin Peaks', 12),
(129, '1114001', 'Ambassador', 13),
(130, '1114002', 'Ambongdolan', 13),
(131, '1114003', 'Ba-ayan', 13),
(132, '1114004', 'Basil', 13),
(133, '1114006', 'Caponga(Pob.)', 13),
(134, '1114005', 'Daclan(Tublay)', 13),
(135, '1114007', 'Tublay Central', 13),
(136, '1114008', 'Tuel', 13),
(137, '1104010', 'Tikey', 3),
(138, '1111009', 'Palasaan', 10),
(139, '1105016', 'Sebang', 4);

-- --------------------------------------------------------

--
-- Table structure for table `contractors`
--

DROP TABLE IF EXISTS `contractors`;
CREATE TABLE IF NOT EXISTS `contractors` (
  `contractor_id` int(11) NOT NULL AUTO_INCREMENT,
  `businessname` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contactnumber` varchar(13) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`contractor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contractors`
--

INSERT INTO `contractors` (`contractor_id`, `businessname`, `owner`, `address`, `contactnumber`, `status`) VALUES
(1, 'Hilands Builders Association', 'Reuel Martinez Bigo', 'Pusel Amgaleygey Buguias Benguet', '09260878700', 'active'),
(2, 'Ijy Bangir nga kasjy', 'Ni isu na', 'ijy banda metlang ijy', '090901893', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `document_logs`
--

DROP TABLE IF EXISTS `document_logs`;
CREATE TABLE IF NOT EXISTS `document_logs` (
  `doc_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_id` int(11) NOT NULL,
  `project_document_id` int(11) NOT NULL,
  PRIMARY KEY (`doc_log_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `document_type`
--

DROP TABLE IF EXISTS `document_type`;
CREATE TABLE IF NOT EXISTS `document_type` (
  `doc_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_no` int(11) NOT NULL,
  `document_name` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`doc_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document_type`
--

INSERT INTO `document_type` (`doc_type_id`, `doc_no`, `document_name`, `status`) VALUES
(2, 2, 'Contract', 'inactive'),
(3, 3, 'Performance Bond', 'active'),
(4, 4, 'Notice of Award', 'active'),
(5, 5, 'Notice of Post Qualifications', 'active'),
(6, 6, 'Resolution of Award', 'active'),
(7, 0, '1', 'inactive'),
(8, 12, 'ahah', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `funds`
--

DROP TABLE IF EXISTS `funds`;
CREATE TABLE IF NOT EXISTS `funds` (
  `fund_id` int(11) NOT NULL AUTO_INCREMENT,
  `source` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`fund_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `funds`
--

INSERT INTO `funds` (`fund_id`, `source`, `status`) VALUES
(1, 'PSB', 'inactive'),
(2, 'Calamity Fund', 'active'),
(3, 'GF', 'active'),
(4, 'Trust', 'active'),
(5, 'PRDP', 'active'),
(6, 'SLRF', 'active'),
(7, 'PAMANA', 'active'),
(8, 'PRNDP', 'active'),
(9, 'DOE', 'active'),
(10, 'SEF', 'active'),
(11, 'CHARMP', 'active'),
(12, 'Supplemental Budget', 'active'),
(13, 'Other Funds', 'active'),
(14, '20% PDF', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `remark` mediumtext NOT NULL,
  `log_type` enum('send','receive') DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `log_date` date DEFAULT NULL,
  PRIMARY KEY (`log_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`log_id`, `remark`, `log_type`, `user_id`, `log_date`) VALUES
(1, 'goodbye', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `municipalities`
--

DROP TABLE IF EXISTS `municipalities`;
CREATE TABLE IF NOT EXISTS `municipalities` (
  `municipality_id` int(11) NOT NULL AUTO_INCREMENT,
  `municipality_code` varchar(11) NOT NULL,
  `municipality` varchar(225) NOT NULL,
  PRIMARY KEY (`municipality_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `municipalities`
--

INSERT INTO `municipalities` (`municipality_id`, `municipality_code`, `municipality`) VALUES
(1, '1101000', 'Atok'),
(2, '1103000', 'Bakun'),
(3, '1104000', 'Bokod'),
(4, '1105000', 'Buguias'),
(5, '1106000', 'Itogon'),
(6, '1107000', 'Kabayan'),
(7, '1108000', 'Kapangan'),
(8, '1109000', 'Kibungan'),
(9, '1110000', 'La Trinidad'),
(10, '1111000', 'Mankayan'),
(11, '1112000', 'Sablan'),
(12, '1113000', 'Tuba'),
(13, '1114000', 'Tublay');

-- --------------------------------------------------------

--
-- Table structure for table `procact`
--

DROP TABLE IF EXISTS `procact`;
CREATE TABLE IF NOT EXISTS `procact` (
  `plan_id` int(11) NOT NULL,
  `pre_proc` date DEFAULT NULL,
  `advertisement` date DEFAULT NULL,
  `pre_bid` date DEFAULT NULL,
  `eligibility_check` date DEFAULT NULL,
  `open_bid` date DEFAULT NULL,
  `bid_evaluation` date DEFAULT NULL,
  `post_qual` date DEFAULT NULL,
  `award_notice` date DEFAULT NULL,
  `contract_signing` date DEFAULT NULL,
  `proceed_notice` date DEFAULT NULL,
  `delivery_completion` date DEFAULT NULL,
  `acceptance_turnover` date DEFAULT NULL,
  UNIQUE KEY `plan_id` (`plan_id`),
  KEY `plan_activity` (`plan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `procact`
--

INSERT INTO `procact` (`plan_id`, `pre_proc`, `advertisement`, `pre_bid`, `eligibility_check`, `open_bid`, `bid_evaluation`, `post_qual`, `award_notice`, `contract_signing`, `proceed_notice`, `delivery_completion`, `acceptance_turnover`) VALUES
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '2018-07-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, '2018-07-05', NULL, NULL, '2018-07-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, '2018-07-11', NULL, '2018-07-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, '2018-07-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `procurement_mode`
--

DROP TABLE IF EXISTS `procurement_mode`;
CREATE TABLE IF NOT EXISTS `procurement_mode` (
  `mode_id` int(11) NOT NULL AUTO_INCREMENT,
  `mode` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`mode_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `procurement_mode`
--

INSERT INTO `procurement_mode` (`mode_id`, `mode`, `status`) VALUES
(1, 'Bidding', 'inactive'),
(2, 'SVP', 'active'),
(3, 'Negotiated', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `project_document`
--

DROP TABLE IF EXISTS `project_document`;
CREATE TABLE IF NOT EXISTS `project_document` (
  `project_document_id` int(11) NOT NULL AUTO_INCREMENT,
  `plan_id` int(11) NOT NULL,
  `doc_type_id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `previous_doc_loc` varchar(255) DEFAULT NULL,
  `current_doc_loc` varchar(255) DEFAULT NULL,
<<<<<<< HEAD
  `receiver` varchar(255) DEFAULT NULL,
=======
>>>>>>> e10f158fc43ef5672eed3fe4e73c0902d508e95c
  `status` enum('sent','received') DEFAULT NULL,
  `img_url` varchar(255) NOT NULL,
  PRIMARY KEY (`project_document_id`),
  KEY `plan_id` (`plan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_document`
--

<<<<<<< HEAD
INSERT INTO `project_document` (`project_document_id`, `plan_id`, `doc_type_id`, `added_by`, `previous_doc_loc`, `current_doc_loc`, `receiver`, `status`, `img_url`) VALUES
(1, 8, 2, 1, '', 'BAC_SEC', NULL, 'sent', ''),
(2, 8, 3, 1, '', 'BAC_SEC', NULL, 'sent', ''),
(3, 8, 4, 1, '', 'BAC_SEC', NULL, 'sent', ''),
(4, 8, 5, 1, '', 'BAC_SEC', NULL, 'sent', ''),
(5, 8, 6, 1, '', 'BAC_SEC', NULL, 'sent', ''),
(6, 8, 7, 1, '', 'BAC_SEC', NULL, 'sent', ''),
(7, 8, 8, 1, '', 'BAC_SEC', NULL, 'sent', '');
=======
INSERT INTO `project_document` (`project_document_id`, `plan_id`, `doc_type_id`, `added_by`, `previous_doc_loc`, `current_doc_loc`, `status`, `img_url`) VALUES
(1, 8, 2, 1, '', 'BAC_SEC', 'sent', ''),
(2, 8, 3, 1, '', 'BAC_SEC', 'sent', ''),
(3, 8, 4, 1, '', 'BAC_SEC', 'sent', ''),
(4, 8, 5, 1, '', 'BAC_SEC', 'sent', ''),
(5, 8, 6, 1, '', 'BAC_SEC', 'sent', ''),
(6, 8, 7, 1, '', 'BAC_SEC', 'sent', ''),
(7, 8, 8, 1, '', 'BAC_SEC', 'sent', '');
>>>>>>> e10f158fc43ef5672eed3fe4e73c0902d508e95c

-- --------------------------------------------------------

--
-- Table structure for table `project_logs`
--

DROP TABLE IF EXISTS `project_logs`;
CREATE TABLE IF NOT EXISTS `project_logs` (
  `plan_id` int(11) NOT NULL,
  `remark` text NOT NULL,
  UNIQUE KEY `plan_id` (`plan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_plan`
--

DROP TABLE IF EXISTS `project_plan`;
CREATE TABLE IF NOT EXISTS `project_plan` (
  `plan_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_no` int(11) NOT NULL,
  `project_title` varchar(255) NOT NULL,
  `project_year` year(4) DEFAULT NULL,
  `project_type` enum('regular','supplementary') DEFAULT NULL,
  `municipality_id` int(11) NOT NULL,
  `barangay_id` int(11) NOT NULL,
  `projtype_id` int(11) NOT NULL,
  `mode_id` int(11) NOT NULL,
  `fund_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `abc` decimal(25,2) NOT NULL,
  `status` enum('pending','onprocess','for_implementation','for_rebid','for_review','completed') NOT NULL DEFAULT 'pending',
  `re_bid_count` int(11) DEFAULT NULL,
  `date_added` date DEFAULT NULL,
  `contractor_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`plan_id`),
  KEY `plan_municipality` (`municipality_id`),
  KEY `plan_barangay` (`barangay_id`),
  KEY `plan_type` (`projtype_id`),
  KEY `plan_mode` (`mode_id`),
  KEY `plan_fund` (`fund_id`),
  KEY `plan_account` (`account_id`),
  KEY `project_plan_ibfk_1` (`contractor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_plan`
--

INSERT INTO `project_plan` (`plan_id`, `project_no`, `project_title`, `project_year`, `project_type`, `municipality_id`, `barangay_id`, `projtype_id`, `mode_id`, `fund_id`, `account_id`, `abc`, `status`, `re_bid_count`, `date_added`, `contractor_id`) VALUES
(3, 17002, 'La Trinidad Bridge', 2018, 'regular', 9, 85, 2, 2, 11, 2, '14000000.00', 'pending', NULL, '2017-07-03', NULL),
(4, 17003, 'Mankayan Road', 2018, 'regular', 10, 104, 9, 2, 12, 1, '55000000.00', 'onprocess', 1, '2018-07-03', NULL),
(5, 17004, 'Tublay Farm Roads', 2018, 'regular', 13, 134, 8, 2, 9, 1, '5492000.00', 'pending', NULL, '2018-07-03', NULL),
(6, 17005, 'Mankayan Farm', 2018, 'regular', 10, 98, 2, 1, 14, 2, '10000000.00', 'pending', NULL, '2018-07-03', NULL),
(7, 17006, 'Coldchain', 2018, NULL, 2, 11, 3, 1, 14, 2, '15000000.00', 'pending', NULL, '2018-07-03', NULL),
(8, 17007, 'Bridge Reconstruction', 2018, NULL, 12, 127, 8, 1, 2, 1, '4353000.00', 'pending', NULL, '2018-07-03', NULL),
(9, 17008, 'Road Rehabilitation', 2018, NULL, 4, 27, 3, 2, 11, 1, '8454000.00', 'pending', NULL, '2018-07-03', NULL),
(10, 9923, 'School Building for Saganduy Elementary School', 2018, NULL, 4, 25, 5, 1, 4, 1, '5000000.00', 'onprocess', 1, '2018-07-04', 2),
(12, 1234, 'New Capitol Building', 2018, NULL, 4, 139, 14, 1, 11, 1, '5000.00', 'onprocess', 3, '2018-07-12', 2),
(13, 12345, 'Const of villa', 2018, NULL, 1, 6, 3, 1, 14, 1, '5000000.00', 'onprocess', 2, '2018-07-12', NULL),
(14, 93392, 'This is the Tittle', 0000, NULL, 6, 58, 3, 1, 10, 2, '8883245.00', 'pending', NULL, '2018-07-15', NULL),
(15, 9898, 'This is the Tittle', 0000, NULL, 11, 115, 12, 2, 10, 1, '334234.00', 'pending', NULL, '2018-07-15', NULL),
(16, 0, 'adawdaw', 0000, NULL, 9, 96, 2, 2, 12, 1, '2312312321.00', 'pending', NULL, '2018-07-15', NULL),
(17, 0, 'safaawfaw', 0000, NULL, 11, 115, 15, 1, 11, 1, '2123124124.00', 'pending', NULL, '2018-07-15', NULL),
(18, 432423423, 'adwdwafawfdawf', 0000, NULL, 11, 115, 15, 2, 12, 1, '13123213.00', 'pending', NULL, '2018-07-15', NULL),
(19, 23123, 'adawfawfawf', 0000, NULL, 12, 128, 13, 1, 12, 1, '231242.00', 'pending', NULL, '2018-07-15', NULL),
(20, 232123, 'adadawdawd', 0000, NULL, 11, 115, 14, 1, 13, 1, '312312312412.00', 'pending', NULL, '2002-07-15', NULL),
(21, 0, 'fesefsfsfesef', 0000, NULL, 10, 138, 14, 1, 11, 1, '231314.00', 'pending', NULL, '2018-07-15', NULL),
(22, 0, 'awdawdawd', 0000, NULL, 4, 139, 14, 2, 12, 1, '231241422.00', 'pending', NULL, '0000-00-00', NULL),
(23, 23124, 'sdsafaf', 0000, NULL, 9, 84, 14, 2, 12, 1, '2311421.00', 'pending', NULL, '2018-07-15', NULL),
(24, 0, 'adadawdawd', 0000, NULL, 10, 138, 11, 1, 11, 1, '2313123.00', 'pending', NULL, '2018-07-15', NULL),
(25, 45632, 'ssadawfawdr', 0000, NULL, 10, 99, 13, 1, 11, 1, '345312312.00', 'pending', NULL, '2018-07-15', NULL),
(26, 342343, 'adwawsdwadaw', 0000, NULL, 12, 128, 13, 2, 11, 2, '23123124.00', 'pending', NULL, '2018-07-15', NULL),
(27, 2312321, 'asdadwad', 2018, NULL, 11, 115, 13, 2, 11, 1, '1312314122.00', 'pending', NULL, '2018-07-15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_timeline`
--

DROP TABLE IF EXISTS `project_timeline`;
CREATE TABLE IF NOT EXISTS `project_timeline` (
  `plan_id` int(11) NOT NULL,
  `pre_proc_date` date DEFAULT NULL,
  `advertisement_start` date DEFAULT NULL,
  `advertisement_end` date DEFAULT NULL,
  `pre_bid_start` date DEFAULT NULL,
  `pre_bid_end` date DEFAULT NULL,
  `bid_submission_start` date DEFAULT NULL,
  `bid_submission_end` date DEFAULT NULL,
  `bid_evaluation_start` date DEFAULT NULL,
  `bid_evaluation_end` date DEFAULT NULL,
  `post_qualification_start` date DEFAULT NULL,
  `post_qualification_end` date DEFAULT NULL,
  `award_notice_start` date DEFAULT NULL,
  `award_notice_end` date DEFAULT NULL,
  `contract_signing_start` date DEFAULT NULL,
  `contract_signing_end` date DEFAULT NULL,
  `authority_approval_start` date DEFAULT NULL,
  `authority_approval_end` date DEFAULT NULL,
  `proceed_notice_start` date DEFAULT NULL,
  `proceed_notice_end` date DEFAULT NULL,
  UNIQUE KEY `plan_id_2` (`plan_id`),
  KEY `plan_id` (`plan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_timeline`
--

INSERT INTO `project_timeline` (`plan_id`, `pre_proc_date`, `advertisement_start`, `advertisement_end`, `pre_bid_start`, `pre_bid_end`, `bid_submission_start`, `bid_submission_end`, `bid_evaluation_start`, `bid_evaluation_end`, `post_qualification_start`, `post_qualification_end`, `award_notice_start`, `award_notice_end`, `contract_signing_start`, `contract_signing_end`, `authority_approval_start`, `authority_approval_end`, `proceed_notice_start`, `proceed_notice_end`) VALUES
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '2018-07-09', '2018-07-09', '2018-07-16', '0000-00-00', '0000-00-00', '2018-07-17', '2018-07-17', '2018-07-18', '2018-07-18', '2018-07-19', '2018-07-19', '2018-07-20', '2018-07-20', '2018-07-21', '2018-07-21', '0000-00-00', '0000-00-00', '2018-07-22', '2018-07-22'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, '2018-07-05', '2018-07-05', '2018-07-12', '2018-07-13', '2018-07-13', '2018-07-25', '2018-07-25', '2018-07-26', '2018-07-26', '2018-07-27', '2018-07-27', '2018-07-28', '2018-07-28', '2018-07-29', '2018-07-29', '2018-07-30', '2018-07-30', '2018-07-31', '2018-07-31'),
(12, '2018-07-11', '2018-07-11', '2018-07-18', '2018-07-19', '2018-07-20', '2018-08-01', '2018-07-31', '2018-08-01', '2018-08-01', '2018-08-01', '2018-08-01', '2018-08-02', '2018-08-02', '2018-08-03', '2018-08-03', '2018-08-04', '2018-08-04', '2018-08-05', '2018-08-06'),
(13, '2018-07-10', '2018-07-10', '2018-07-17', '2018-07-18', '2018-07-18', '2018-07-30', '2018-07-30', '2018-07-31', '2018-07-31', '2018-08-01', '2018-08-01', '2018-08-02', '2018-08-02', '2018-08-03', '2018-08-03', '2018-08-04', '2018-08-04', '2018-08-05', '2018-08-05'),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projtype`
--

DROP TABLE IF EXISTS `projtype`;
CREATE TABLE IF NOT EXISTS `projtype` (
  `projtype_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`projtype_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projtype`
--

INSERT INTO `projtype` (`projtype_id`, `type`, `status`) VALUES
(1, 'FMP', 'inactive'),
(2, 'Bridge', 'active'),
(3, 'Munti-Purpose Building/Hall/Outpost', 'active'),
(5, 'School Building', 'active'),
(6, 'Senior Citizen\'s Building', 'active'),
(7, 'Domestic Water Supply/Irrigation/Waterworks', 'active'),
(8, 'Footbridges', 'inactive'),
(9, 'Footpath/Foot Trail', 'active'),
(10, 'Multi-Purpose Shed/Waiting Shed', 'active'),
(11, 'Multi-Purpose Gym/Basketball Count', 'active'),
(12, 'Drainage Canal', 'active'),
(13, 'Flood Control/Riprapping/Slope Protection', 'active'),
(14, 'Provincial Road', 'active'),
(15, 'Health &amp; PHO Facilities', 'active'),
(16, 'Agriculture Services', 'active'),
(17, 'Veterinary Services', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) NOT NULL,
  `middle_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `middle_name`, `last_name`, `username`, `password`, `user_type`, `status`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin', 'BAC_SEC', 'active'),
(2, 'Reuel', 'Martinez', 'Bigo', '2Bigo', 'capitol', 'PEO', 'inactive'),
(3, 'Jayson', 'Velasco', 'Caliway', '3Caliway', 'capitol', 'PGO', 'active'),
(4, 'Ronnel', 'Martinez', 'Bigo', '4Bigo', 'capitol', 'BAC_TWG', 'active'),
(5, 'asdasasdasdasd', 'asdasd', 'asdas', '5asdas', 'capitol', 'BAC_TWG', 'active');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barangays`
--
ALTER TABLE `barangays`
  ADD CONSTRAINT `selected_municipality` FOREIGN KEY (`municipality_id`) REFERENCES `municipalities` (`municipality_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `procact`
--
ALTER TABLE `procact`
  ADD CONSTRAINT `plan_activity` FOREIGN KEY (`plan_id`) REFERENCES `project_plan` (`plan_id`) ON UPDATE CASCADE;

--
-- Constraints for table `project_document`
--
ALTER TABLE `project_document`
  ADD CONSTRAINT `project_document_ibfk_1` FOREIGN KEY (`plan_id`) REFERENCES `project_plan` (`plan_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project_logs`
--
ALTER TABLE `project_logs`
  ADD CONSTRAINT `project_logs_ibfk_1` FOREIGN KEY (`plan_id`) REFERENCES `project_plan` (`plan_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project_plan`
--
ALTER TABLE `project_plan`
  ADD CONSTRAINT `plan_account` FOREIGN KEY (`account_id`) REFERENCES `account_classification` (`account_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `plan_barangay` FOREIGN KEY (`barangay_id`) REFERENCES `barangays` (`barangay_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `plan_fund` FOREIGN KEY (`fund_id`) REFERENCES `funds` (`fund_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `plan_mode` FOREIGN KEY (`mode_id`) REFERENCES `procurement_mode` (`mode_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `plan_municipality` FOREIGN KEY (`municipality_id`) REFERENCES `municipalities` (`municipality_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `plan_type` FOREIGN KEY (`projtype_id`) REFERENCES `projtype` (`projtype_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `project_plan_ibfk_1` FOREIGN KEY (`contractor_id`) REFERENCES `contractors` (`contractor_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `project_timeline`
--
ALTER TABLE `project_timeline`
  ADD CONSTRAINT `project_timeline_ibfk_1` FOREIGN KEY (`plan_id`) REFERENCES `project_plan` (`plan_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;