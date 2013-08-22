-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 22, 2013 at 11:57 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hrtms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `batch_no`
--

CREATE TABLE IF NOT EXISTS `batch_no` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Batch_control_no` varchar(25) NOT NULL,
  `Client` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('05f2f05640de842c3867c42a0a318fc7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377147898, ''),
('0a4eb42a5c3f6340996dbb5eb1e87224', '192.168.0.222', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.95 Safari/537.36', 1377147457, 'a:20:{s:9:"user_data";s:0:"";s:2:"id";s:1:"3";s:8:"username";s:7:"trainer";s:8:"password";s:32:"81dc9bdb52d04dc20036dbd8313ed055";s:9:"last_name";s:6:"Rogers";s:11:"middle_name";s:0:"";s:10:"first_name";s:5:"Steve";s:10:"birth_date";s:10:"1988-09-11";s:7:"address";s:0:"";s:4:"city";s:0:"";s:8:"province";s:0:"";s:7:"country";s:2:"ph";s:8:"zip_code";s:4:"4023";s:5:"phone";s:0:"";s:17:"security_question";s:1:"0";s:15:"security_answer";s:0:"";s:5:"email";s:27:"trainer@alliancemansols.com";s:10:"permission";s:7:"Trainer";s:12:"is_logged_in";b:1;s:9:"sender_id";s:1:"0";}'),
('102933e1bd3071bd86c5da231d6efb02', '192.168.0.222', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377147710, ''),
('bd6b38a24925935593f0b4d943a61c28', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377147711, ''),
('d529b9d3a16ecdd9cbd27bc9547366f8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36', 1377147898, '');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(255) DEFAULT NULL,
  `client_location` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_name`, `client_location`) VALUES
(1, 'TOSHIBA', 'Laguna Technopark, Binan, Laguna, Philippines'),
(2, 'TOTOKU', 'Carmelray Industrial Park II, Calamba, Laguna'),
(3, 'SHINETSU', ' Laguna Technopark, SEPZ, Biñan, Laguna, Philippines'),
(4, 'AMI', 'Laguna Technopark, Binan, Laguna, Philippines'),
(9, 'HP', 'Makati City');

-- --------------------------------------------------------

--
-- Table structure for table `gradesheet`
--

CREATE TABLE IF NOT EXISTS `gradesheet` (
  `training_id` varchar(255) DEFAULT NULL,
  `scores` int(3) DEFAULT NULL,
  `over` int(255) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hris`
--

CREATE TABLE IF NOT EXISTS `hris` (
  `register_id` varchar(17) NOT NULL,
  `trainee_id` varchar(45) NOT NULL,
  `batch_control_no` varchar(45) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `nickname` varchar(45) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `place_of_birth` varchar(45) DEFAULT NULL,
  `hriscol` varchar(45) DEFAULT NULL,
  `citizenship` varchar(45) DEFAULT NULL,
  `present_address` varchar(255) DEFAULT NULL,
  `present_city` varchar(35) DEFAULT NULL,
  `present_province` varchar(35) DEFAULT NULL,
  `provincial_address` varchar(255) DEFAULT NULL,
  `provincial_city` varchar(35) DEFAULT NULL,
  `provincial_province` varchar(35) DEFAULT NULL,
  `mailing_address` varchar(255) DEFAULT NULL,
  `mailing_city` varchar(35) DEFAULT NULL,
  `mailing_province` varchar(35) DEFAULT NULL,
  `civil_status` varchar(15) DEFAULT NULL,
  `marriage_date` date DEFAULT NULL,
  `marriage_place` varchar(255) DEFAULT NULL,
  `height` varchar(45) DEFAULT NULL,
  `weight` varchar(45) DEFAULT NULL,
  `blood_type` varchar(2) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `religion` varchar(45) DEFAULT NULL,
  `home_no` varchar(20) DEFAULT NULL,
  `mobile_no` varchar(20) DEFAULT NULL,
  `alternative_no` varchar(45) DEFAULT NULL,
  `sss_no` varchar(15) DEFAULT NULL,
  `tin_no` varchar(12) DEFAULT NULL,
  `philhealth_no` varchar(45) DEFAULT NULL,
  `pagibig_no` varchar(45) DEFAULT NULL,
  `allergy` varchar(45) DEFAULT NULL,
  `tax_status` varchar(20) DEFAULT NULL,
  `passport_no` varchar(45) DEFAULT NULL,
  `passport_issue_date` date DEFAULT NULL,
  `passport_issue_place` varchar(255) DEFAULT NULL,
  `passport_issue_country` varchar(45) DEFAULT NULL,
  `passport_expiration_date` date DEFAULT NULL,
  `license_type` varchar(45) DEFAULT NULL,
  `license_issue_date` date DEFAULT NULL,
  `license_issue_place` varchar(255) DEFAULT NULL,
  `license_expiration_date` date DEFAULT NULL,
  `spouse_first_name` varchar(255) DEFAULT NULL,
  `spouse_last_name` varchar(255) DEFAULT NULL,
  `spouse_middle_name` varchar(255) DEFAULT NULL,
  `spouse_birthdate` date DEFAULT NULL,
  `spouse_occupation` varchar(255) DEFAULT NULL,
  `spouse_contact_no` varchar(45) DEFAULT NULL,
  `employer_name` varchar(255) DEFAULT NULL,
  `employer_business` varchar(255) DEFAULT NULL,
  `employer_location` varchar(255) DEFAULT NULL,
  `employer_contact_no` varchar(45) DEFAULT NULL,
  `children_name` varchar(255) DEFAULT NULL,
  `children_birthdate` varchar(255) DEFAULT NULL,
  `children_school_or_work` varchar(255) DEFAULT NULL,
  `dependent_name` varchar(255) DEFAULT NULL,
  `dependent_birthdate` varchar(255) DEFAULT NULL,
  `dependent_releationship` varchar(45) DEFAULT NULL,
  `beneficiary_name` varchar(255) DEFAULT NULL,
  `beneficiary_birthdate` varchar(255) DEFAULT NULL,
  `beneficiary_relationship` varchar(45) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `father_occupation` varchar(45) DEFAULT NULL,
  `father_occupation_address` varchar(255) DEFAULT NULL,
  `father_age` int(3) DEFAULT NULL,
  `father_address` varchar(255) DEFAULT NULL,
  `father_contact_no` varchar(20) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `mother_occupation` varchar(45) DEFAULT NULL,
  `mother_occupation_address` varchar(255) DEFAULT NULL,
  `mother_age` int(3) DEFAULT NULL,
  `mother_address` varchar(255) DEFAULT NULL,
  `mother_contact_no` varchar(20) DEFAULT NULL,
  `skills` varchar(45) DEFAULT NULL,
  `hobbies` varchar(45) DEFAULT NULL,
  `interests` varchar(45) DEFAULT NULL,
  `educational_level` varchar(45) DEFAULT NULL,
  `school_name` varchar(255) DEFAULT NULL,
  `education_from` varchar(255) DEFAULT NULL,
  `education_to` varchar(255) DEFAULT NULL,
  `education_course` varchar(45) DEFAULT NULL,
  `honors` varchar(45) DEFAULT NULL,
  `employment_company_name` varchar(255) DEFAULT NULL,
  `employment_location` varchar(255) DEFAULT NULL,
  `employment_position` varchar(45) DEFAULT NULL,
  `employment_from` varchar(45) DEFAULT NULL,
  `employment_to` varchar(45) DEFAULT NULL,
  `employment_reason_leve` varchar(255) DEFAULT NULL,
  `character_name` varchar(255) DEFAULT NULL,
  `character_company` varchar(255) DEFAULT NULL,
  `character_contact_no` varchar(15) DEFAULT NULL,
  `date_accomplished` date DEFAULT NULL,
  `deployment_status` varchar(45) DEFAULT NULL,
  `payment_status` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`trainee_id`),
  UNIQUE KEY `batch_control_no` (`batch_control_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hris`
--

INSERT INTO `hris` (`register_id`, `trainee_id`, `batch_control_no`, `first_name`, `last_name`, `middle_name`, `nickname`, `birthdate`, `place_of_birth`, `hriscol`, `citizenship`, `present_address`, `present_city`, `present_province`, `provincial_address`, `provincial_city`, `provincial_province`, `mailing_address`, `mailing_city`, `mailing_province`, `civil_status`, `marriage_date`, `marriage_place`, `height`, `weight`, `blood_type`, `gender`, `religion`, `home_no`, `mobile_no`, `alternative_no`, `sss_no`, `tin_no`, `philhealth_no`, `pagibig_no`, `allergy`, `tax_status`, `passport_no`, `passport_issue_date`, `passport_issue_place`, `passport_issue_country`, `passport_expiration_date`, `license_type`, `license_issue_date`, `license_issue_place`, `license_expiration_date`, `spouse_first_name`, `spouse_last_name`, `spouse_middle_name`, `spouse_birthdate`, `spouse_occupation`, `spouse_contact_no`, `employer_name`, `employer_business`, `employer_location`, `employer_contact_no`, `children_name`, `children_birthdate`, `children_school_or_work`, `dependent_name`, `dependent_birthdate`, `dependent_releationship`, `beneficiary_name`, `beneficiary_birthdate`, `beneficiary_relationship`, `father_name`, `father_occupation`, `father_occupation_address`, `father_age`, `father_address`, `father_contact_no`, `mother_name`, `mother_occupation`, `mother_occupation_address`, `mother_age`, `mother_address`, `mother_contact_no`, `skills`, `hobbies`, `interests`, `educational_level`, `school_name`, `education_from`, `education_to`, `education_course`, `honors`, `employment_company_name`, `employment_location`, `employment_position`, `employment_from`, `employment_to`, `employment_reason_leve`, `character_name`, `character_company`, `character_contact_no`, `date_accomplished`, `deployment_status`, `payment_status`, `email`) VALUES
('AMI1304-REG-0001', 'AMI1304-TRAINEE-0001', 'TS13-ASB-001 ', 'PIO', 'LOZANO', 'QUINALAYO', 'AWDEE', '1994-03-22', '', '', '', 'B5 LOT 11 PH4 VILLA OLYMPIA SUBD.', 'SAN PEDRO', 'LAGUNA', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '0', 'Male', '', '', '639268358872', '', '', '', '', '', '', '0', '', '0000-00-00', '', '0', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', 'niel_pio@hotmail.com'),
('AMI1304-REG-0002', 'AMI1304-TRAINEE-0002', 'TS13-ASB-002', 'LEI', 'VICENTE', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', 'Male', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', ''),
('AMI1304-REG-0003', 'AMI1304-TRAINEE-0003', 'TS13-ASB-003', 'DANNAH', 'ABAT', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', 'Female', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', ''),
('AMI1304-REG-0004', 'AMI1304-TRAINEE-0004', 'TS13-ASB-004', 'JAYLORD', 'MINAY', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', 'Male', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', ''),
('AMI1304-REG-0005', 'AMI1304-TRAINEE-0005', 'TS13-ASB-005', 'RUBEN', 'RAYMUNDO', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', 'Male', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', ''),
('AMI1304-REG-0007', 'AMI1304-TRAINEE-0007', NULL, ' JANICE', 'ALPUERTO', ' MARQUESES', NULL, '1995-03-12', NULL, NULL, NULL, '', 'Santa Rosa', 'Laguna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'female', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'dannah_taba@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `message` varchar(10000) NOT NULL,
  `time_sent` datetime NOT NULL,
  `is_read` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=130 ;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`message_id`, `sender_id`, `receiver_id`, `message`, `time_sent`, `is_read`) VALUES
(1, 0, 0, '0', '2013-08-19 00:00:00', 0),
(115, 1, 3, 'hello ?', '2013-08-20 03:33:13', 0),
(116, 3, 1, 'haha', '2013-08-20 03:33:17', 0),
(117, 3, 1, 'working?', '2013-08-20 03:33:21', 0),
(118, 1, 3, 'Coffee Break.', '2013-08-20 03:33:29', 0),
(119, 3, 1, 'asdf', '2013-08-20 03:35:14', 0),
(120, 1, 3, ':)', '2013-08-20 03:35:41', 0),
(121, 1, 3, 'hey admin, wanna have some fun ?', '2013-08-20 03:40:20', 0),
(122, 3, 1, ':)', '2013-08-20 03:40:37', 0),
(123, 3, 1, 'haha', '2013-08-20 03:42:45', 0),
(124, 3, 1, 'toyi', '2013-08-20 04:06:37', 0),
(125, 6, 1, 'tara suntukan!', '2013-08-20 04:43:08', 0),
(126, 5, 1, 'hi sir!', '2013-08-20 04:43:19', 0),
(127, 11, 1, 'ching chang chong chung', '2013-08-20 04:53:09', 0),
(128, 2, 1, '(^_^)', '2013-08-20 04:53:19', 0),
(129, 3, 1, 'hey', '2013-08-20 09:19:58', 0);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE IF NOT EXISTS `modules` (
  `module_id` int(11) NOT NULL AUTO_INCREMENT,
  `module_name` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `file_name` int(255) NOT NULL,
  PRIMARY KEY (`module_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`module_id`, `module_name`, `company_name`, `file_name`) VALUES
(7, 'asdf', 'TOSHIBA', 0),
(8, 'try', 'TOSHIBA', 0),
(9, 'try ulet', 'TOSHIBA', 0),
(10, 'asdfklj kla', 'TOSHIBA', 0),
(11, 'TESTING', 'TOSHIBA', 0),
(12, 'try', 'TOSHIBA', 0),
(13, 'gggggg', 'TOSHIBA', 0),
(14, 'sdfasdfas', 'TOSHIBA', 0),
(15, 'hahahy', 'TOSHIBA', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `register_id` varchar(17) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `address_2` varchar(255) DEFAULT NULL,
  `city` varchar(35) DEFAULT NULL,
  `province` varchar(35) DEFAULT NULL,
  `country` varchar(2) DEFAULT NULL,
  `zipcode` int(6) DEFAULT NULL,
  `phone` varchar(32) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `ip_address` varbinary(16) DEFAULT NULL,
  `last_logged_ip` varchar(15) DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `security_question` int(1) DEFAULT NULL,
  `security_answer` varchar(255) DEFAULT NULL,
  `date_change` date NOT NULL,
  PRIMARY KEY (`register_id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `b_country` (`country`),
  KEY `status` (`active`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `register_id`, `first_name`, `last_name`, `middle_name`, `birth_date`, `gender`, `address`, `address_2`, `city`, `province`, `country`, `zipcode`, `phone`, `email`, `image_url`, `username`, `password`, `date_created`, `ip_address`, `last_logged_ip`, `active`, `security_question`, `security_answer`, `date_change`) VALUES
(7, 'AMI1304-REG-0007', ' JANICE', 'ALPUERTO', ' MARQUESES', '1995-03-12', 'female', '', '', 'Santa Rosa', 'Laguna', 'PH', 4026, '', 'dannah_taba@yahoo.com', '', 'ALPUERTO', '81dc9bdb52d04dc20036dbd8313ed055', '2013-04-19 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(8, 'AMI1304-REG-0008', ' JOCILYN', 'ANDAYA', ' SALANDANAN', '1995-05-23', 'female', '', '', 'Santa Rosa', 'Laguna', 'PH', 4026, '', 'dannah_taba@yahoo.com', '', 'ANDAYA', '81dc9bdb52d04dc20036dbd8313ed055', '2013-04-20 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(9, 'AMI1304-REG-0009', ' MARIA ANGELICA', 'ASAYTONO', ' ESPELETA', '1995-06-22', 'female', '', '', 'Santa Rosa', 'Laguna', 'PH', 4026, '', 'dannah_taba@yahoo.com', '', 'ASAYTONO', '81dc9bdb52d04dc20036dbd8313ed055', '2013-04-21 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(10, 'AMI1304-REG-0010', ' FLORENCE VIDA', 'BAJUM', ' ASIS', '1986-09-03', 'female', '', '', 'Santa Rosa', 'Laguna', 'PH', 4026, '', 'dannah_taba@yahoo.com', '', 'BAJUM', '81dc9bdb52d04dc20036dbd8313ed055', '2013-04-22 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(11, 'AMI1304-REG-0011', ' LOUMAR', 'BALUARTE', ' ALITAGTAG', '1980-02-06', 'male', '', '', 'Santa Rosa', 'Laguna', 'PH', 4026, '', 'dannah_taba@yahoo.com', '', 'BALUARTE', '81dc9bdb52d04dc20036dbd8313ed055', '2013-04-23 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(12, 'AMI1304-REG-0012', ' FRANCHESCA', 'BARRINUEVO', ' UBAS', '1943-10-02', 'female', '', '', 'Santa Rosa', 'Laguna', 'PH', 4026, '', 'dannah_taba@yahoo.com', '', 'BARRINUEVO', '81dc9bdb52d04dc20036dbd8313ed055', '2013-04-24 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(13, 'AMI1304-REG-0013', ' MARIE DAISY', 'BAUTISTA', ' REJUSO', '1992-10-21', 'female', '', '', 'Santa Rosa', 'Laguna', 'PH', 4026, '', 'dannah_taba@yahoo.com', '', 'BAUTISTA', '81dc9bdb52d04dc20036dbd8313ed055', '2013-04-25 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(14, 'AMI1304-REG-0014', ' HANNAH MAE', 'BEJASA', ' VIRAY', '1940-03-05', 'female', '', '', 'Santa Rosa', 'Laguna', 'PH', 4026, '', 'dannah_taba@yahoo.com', '', 'BEJASA', '81dc9bdb52d04dc20036dbd8313ed055', '2013-04-26 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(15, 'AMI1304-REG-0015', ' CRISDEL BRIAN', 'BERNARDO', ' GARCIA', '2005-06-07', 'male', '', '', 'Santa Rosa', 'Laguna', 'PH', 4026, '', 'dannah_taba@yahoo.com', '', 'BERNARDO', '81dc9bdb52d04dc20036dbd8313ed055', '2013-04-27 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(16, 'AMI1304-REG-0016', ' MELANIE', 'BERO', ' VERZO', '1965-08-04', 'female', '', '', 'Santa Rosa', 'Laguna', 'PH', 4026, '', 'dannah_taba@yahoo.com', '', 'BERO', '81dc9bdb52d04dc20036dbd8313ed055', '2013-04-28 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(17, 'AMI1304-REG-0017', ' MA. BIANCA ISABEL', 'BESO', ' BASCON', '2008-12-05', 'female', '', '', 'Santa Rosa', 'Laguna', 'PH', 4026, '', 'dannah_taba@yahoo.com', '', 'BESO', '81dc9bdb52d04dc20036dbd8313ed055', '2013-04-29 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(18, 'AMI1304-REG-0018', ' UNICE JOY', 'BLANCO', ' CUETO', '1978-12-05', 'female', '', '', 'Santa Rosa', 'Laguna', 'PH', 4026, '', 'dannah_taba@yahoo.com', '', 'BLANCO', '81dc9bdb52d04dc20036dbd8313ed055', '2013-04-30 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(57, 'AMI1304-REG-0020', ' MELVIN', 'CABACABA', ' MARFIL', '1970-06-04', 'male', '', '', 'Santa Rosa', 'Laguna', 'PH', 4026, '', 'dannah_taba@yahoo.com', '', 'CABACABA', '81dc9bdb52d04dc20036dbd8313ed055', '2013-05-02 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(21, 'AMI1304-REG-0021', ' CHRISTINE HAZEL', 'CANILANG', ' CLAVE', '1970-11-05', 'female', '', '', 'Santa Rosa', 'Laguna', 'PH', 4026, '', 'dannah_taba@yahoo.com', '', 'CANILANG', '81dc9bdb52d04dc20036dbd8313ed055', '2013-05-03 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(22, 'AMI1304-REG-0022', ' CZUSHANE', 'CAPUSO', ' ARAPAN', '1980-10-16', 'female', '', '', 'Santa Rosa', 'Laguna', 'PH', 4026, '', 'dannah_taba@yahoo.com', '', 'CAPUSO', '81dc9bdb52d04dc20036dbd8313ed055', '2013-05-04 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(23, 'AMI1304-REG-0023', ' RAQUEL', 'COSE', ' ANORE', '1999-08-07', 'female', '', '', 'Santa Rosa', 'Laguna', 'PH', 4026, '', 'dannah_taba@yahoo.com', '', 'COSE', '81dc9bdb52d04dc20036dbd8313ed055', '2013-05-05 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(24, 'AMI1304-REG-0024', ' SAM', 'DACOCO', ' FORTUNO', '1995-03-23', 'male', '', '', 'Santa Rosa', 'Laguna', 'PH', 4026, '', 'dannah_taba@yahoo.com', '', 'DACOCO', '81dc9bdb52d04dc20036dbd8313ed055', '2013-05-06 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(25, 'AMI1304-REG-0025', ' MERRY ANNE', 'DATILIS', ' OBEJAS', '1995-05-09', 'female', '', '', 'Santa Rosa', 'Laguna', 'PH', 4026, '', 'dannah_taba@yahoo.com', '', 'DATILIS', '81dc9bdb52d04dc20036dbd8313ed055', '2013-05-07 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(26, 'AMI1304-REG-0026', ' ZARLYN JOY', 'DELMO', ' TEJADA', '1995-06-25', 'female', '', '', 'Santa Rosa', 'Laguna', 'PH', 4026, '', 'dannah_taba@yahoo.com', '', 'DELMO', '81dc9bdb52d04dc20036dbd8313ed055', '2013-05-08 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(27, 'AMI1304-REG-0027', ' GUILLER IANMUEL', 'DIMAS', ' LETADA', '1986-09-13', 'male', '', '', 'Santa Rosa', 'Laguna', 'PH', 4026, '', 'dannah_taba@yahoo.com', '', 'DIMAS', '81dc9bdb52d04dc20036dbd8313ed055', '2013-05-09 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(28, 'AMI1304-REG-0028', ' ZOREN IAN', 'DUARTE', ' NICOLAS', '1980-02-16', 'male', '', '', 'Santa Rosa', 'Laguna', 'PH', 4026, '', 'dannah_taba@yahoo.com', '', 'DUARTE', '81dc9bdb52d04dc20036dbd8313ed055', '2013-05-10 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(29, 'AMI1304-REG-0029', ' ARON CHRISTOPHER', 'DURO', ' GURAY', '1943-10-12', 'male', '', '', 'Santa Rosa', 'Laguna', 'PH', 4026, '', 'dannah_taba@yahoo.com', '', 'DURO', '81dc9bdb52d04dc20036dbd8313ed055', '2013-05-11 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(30, 'AMI1304-REG-0030', ' ABDUL RASHID', 'FEDELIN', ' ILAO', '1992-10-21', 'male', '', '', 'Santa Rosa', 'Laguna', 'PH', 4026, '', 'dannah_taba@yahoo.com', '', 'FEDELIN', '81dc9bdb52d04dc20036dbd8313ed055', '2013-05-12 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(6, 'AMI1304-REG-0006', ' JHOANNA MARIE', 'ALORRO', ' ABARY', '1993-02-23', 'female', '', '', 'Santa Rosa', 'Laguna', 'PH', 4026, '', 'dannah_taba@yahoo.com', '', 'ALORRO', '81dc9bdb52d04dc20036dbd8313ed055', '2013-04-18 12:00:00', '', '', 0, 0, '', '0000-00-00'),
(5, 'AMI1304-REG-0005', 'Dannah', 'Abat', '', '1993-07-29', 'female', 'Celina Plains Olympia', '', 'Santa Rosa', 'Laguna', 'PH', 4026, '6.39E+11', 'dannah_taba@yahoo.com', '', 'dannah', '81dc9bdb52d04dc20036dbd8313ed055', '2013-04-17 12:00:00', '', '', 1, 0, '', '0000-00-00'),
(4, 'AMI1304-REG-0004', 'Neri', 'Lozano', 'Quinalayo', '1937-01-12', 'male', '123', '', '123', '123', 'PH', 123, '123', 'neri@yahoo.com', '', 'neri', '81dc9bdb52d04dc20036dbd8313ed055', '2013-04-16 09:21:00', '', '', 1, 0, '', '0000-00-00'),
(3, 'AMI1304-REG-0003', 'Lei', 'Vicente', '', '2000-10-19', 'male', 'Rosario', '', 'San Pedro', 'Laguna', 'PH', 4023, '6.39E+11', 'jemnuineuron@rocketmail.com', '', 'lei', '81dc9bdb52d04dc20036dbd8313ed055', '2013-04-16 09:20:00', '', '', 1, 0, '', '0000-00-00'),
(2, 'AMI1304-REG-0002', 'Mae', 'Lampa', '', '1998-09-27', 'female', 'Yakal St.', '', 'Sta. Cruz', 'Manila', 'PH', 4023, '6.39E+11', 'mae_tot@hotmail.com', '', 'maetot', '81dc9bdb52d04dc20036dbd8313ed055', '2013-04-16 06:09:00', '', '', 1, 0, '', '0000-00-00'),
(1, 'AMI1304-REG-0001', 'Pio', 'Lozano', 'Quinalayo', '1994-03-22', 'male', 'B5 Lot 11 Ph4 Villa Olympia Subd.', '', 'San Pedro', 'Laguna', 'PH', 4023, '09268358872', 'niel_pio@hotmail.com', '', 'awdee', 'd41d8cd98f00b204e9800998ecf8427e', '2013-08-20 07:06:03', '', '', 0, 1, 'awdee', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `rno` int(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `rno`, `address`) VALUES
(1, 'awdee', 2, 'Sa puso mo');

-- --------------------------------------------------------

--
-- Table structure for table `trainee_attendance`
--

CREATE TABLE IF NOT EXISTS `trainee_attendance` (
  `training_id` varchar(255) DEFAULT NULL,
  `training_days` tinyint(2) DEFAULT NULL,
  `present_days` tinyint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainee_attendance`
--

INSERT INTO `trainee_attendance` (`training_id`, `training_days`, `present_days`) VALUES
('AMI1304-TRAINEE-0001', 2, 2),
('AMI1304-TRAINEE-0002', 2, 2),
('AMI1304-TRAINEE-0003', 2, 1),
('AMI1304-TRAINEE-0004', 1, 1),
('AMI1304-TRAINEE-0005', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_logs`
--

CREATE TABLE IF NOT EXISTS `user_logs` (
  `user_id` int(11) DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `last_logout` datetime DEFAULT NULL,
  `last_activity` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE IF NOT EXISTS `user_table` (
  `id` varchar(20) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `permission` varchar(13) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(35) DEFAULT NULL,
  `province` varchar(35) DEFAULT NULL,
  `country` varchar(2) DEFAULT NULL,
  `zip_code` int(6) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `image_file` varchar(255) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `is_active` char(1) DEFAULT NULL,
  `security_question` int(2) DEFAULT NULL,
  `security_answer` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `username`, `password`, `permission`, `first_name`, `last_name`, `middle_name`, `birth_date`, `address`, `city`, `province`, `country`, `zip_code`, `phone`, `email`, `image_file`, `date_created`, `is_active`, `security_question`, `security_answer`) VALUES
('1', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'Administrator', 'Tony', 'Stark', '', '1992-10-19', '', '', '', 'ph', 4023, '', 'admin@alliancemansols.com', '', '2013-07-22 16:30:06', '1', 0, ''),
('11', 'testing1', '81dc9bdb52d04dc20036dbd8313ed055', 'Trainee', 'Luo', 'Feichi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('2', 'hrstaff', '81dc9bdb52d04dc20036dbd8313ed055', 'HR', 'Bruce', 'Wayne', '', '1983-05-03', '', '', '', 'ph', 4023, '', 'hr@alliancemansols.com', '', '2013-07-22 16:31:06', '1', 0, ''),
('3', 'trainer', '81dc9bdb52d04dc20036dbd8313ed055', 'Trainer', 'Steve', 'Rogers', '', '1988-09-11', '', '', '', 'ph', 4023, '', 'trainer@alliancemansols.com', '', '2013-07-22 16:32:06', '1', 0, ''),
('5', 'oscar.velasco', 'e10adc3949ba59abbe56e057f20f883e', 'Trainer', 'Oscar', 'Velasco', '', '0000-00-00', '', '', '', '', 0, '', 'oscar.velasco@yahoo.com', '', '2013-07-23 02:04:57', '', 0, ''),
('6', 'client', '81dc9bdb52d04dc20036dbd8313ed055', 'Client', 'Bruce', 'Lee', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('AMI1304-REG-0001', 'awdee', '81dc9bdb52d04dc20036dbd8313ed055', 'Trainee', 'Niel', 'Lozano', '', '0000-00-00', '', '', '', '', 0, '', 'niel_pio@hotmail.com', '', '2013-07-23 01:53:11', '', 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
