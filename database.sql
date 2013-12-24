-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 22, 2013 at 02:47 AM
-- Server version: 5.5.33a-MariaDB
-- PHP Version: 5.5.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mirineib_p4_mirinei_biz`
--

-- --------------------------------------------------------

--
-- Table structure for table `quiz_bank`
--

CREATE TABLE IF NOT EXISTS `quiz_bank` (
  `quiz_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(511) NOT NULL,
  `c_answer` varchar(511) NOT NULL,
  `ic_answer_1` varchar(511) NOT NULL,
  `ic_answer_2` varchar(511) NOT NULL,
  `ic_answer_3` varchar(511) NOT NULL,
  PRIMARY KEY (`quiz_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `quiz_bank`
--

INSERT INTO `quiz_bank` (`quiz_id`, `question`, `c_answer`, `ic_answer_1`, `ic_answer_2`, `ic_answer_3`) VALUES
(1, 'Question 1', 'correct answer', 'incorrect answer 1', 'incorrect answer 2', 'incorrect answer 3'),
(2, '2nd Q', 'correct', 'ic 1', 'ic 2', 'ic 3'),
(3, 'q3', 'a3', 'ic1', 'ic2', 'ic3'),
(4, '4th question', '4ca', '4ica1', '4ica2', '4ica3'),
(5, 'q5', '5ca', '5ica1', '5ica2', '5ica3'),
(6, '6th q', '6th ans', '6th ic1', '6th ic2', '6th ic3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
