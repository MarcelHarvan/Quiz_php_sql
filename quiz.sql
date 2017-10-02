-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 26, 2017 at 05:50 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `action`
--

CREATE TABLE `action` (
  `action_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `quiz_id` int(10) NOT NULL,
  `right_answers` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `action`
--

INSERT INTO `action` (`action_id`, `user_id`, `quiz_id`, `right_answers`) VALUES
(36, 6, 1, 0),
(37, 6, 1, 0),
(38, 6, 1, 9),
(39, 6, 2, 3),
(40, 9, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_id` int(10) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer_1` varchar(200) NOT NULL,
  `answer_2` varchar(200) NOT NULL,
  `answer_3` varchar(200) NOT NULL,
  `answer_4` varchar(200) NOT NULL,
  `right_answer` varchar(200) NOT NULL,
  `quez_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `question`, `answer_1`, `answer_2`, `answer_3`, `answer_4`, `right_answer`, `quez_id`) VALUES
(31, 'What is capital of Slovakia?', 'Prague', 'Ljubljana', 'Bratislava', 'Budapest', 'Bratislava', 1),
(32, 'What is capital of Brazil?', 'Salvador', 'Brasília', 'São Paulo', 'Rio de Janeiro', 'Brasília', 1),
(33, 'What is capital of Canada?', 'Ottawa', 'Montreal', 'Totonto', 'Vancouver', 'Ottawa', 1),
(34, 'What is capital of the U.S?', 'Miami', 'Boston', 'New York', 'Washington D.C.', 'Washington D.C.', 1),
(35, 'What is capital of the Czech Republic?', 'Prague', 'Ljubljana', 'Bratislava', 'Budapest', 'Prague', 1),
(36, 'What is capital of Australia?', 'Melbourne', 'Sydney', 'Canberra', 'Adelaide', 'Canberra', 1),
(37, 'What is capital of the United Kingdom?', 'Glasgow', 'Edinburgh', 'Manchester', 'London', 'London', 1),
(38, 'What is capital of India?', 'New Delhi', 'Old Delhi', 'Mumbai', 'Nagpur', 'New Delhi', 1),
(39, 'What is capital of the South Korea?', 'Pyongyang', 'Seoul', 'Busan', 'Daegu', 'Seoul', 1),
(40, 'What is capital of the North Korea?', 'Pyongyang', 'Seoul', 'Busan', 'Daegu', 'Pyongyang', 1),
(41, 'What is capital of Japan?', 'Tokyo', 'Osaka', 'Fukuoka', 'Saga', 'Tokyo', 1),
(42, 'What is capital of China?', ' Shanghai', 'Shenzhen', 'Beijing', 'Tokyo', 'Beijing', 1),
(43, 'What is capital of Poland?', 'Prague', 'Warsaw', 'Krakow', 'Gda?sk', 'Warsaw', 1),
(44, 'What is capital of Germany?', 'Bonn', 'Hamburg', 'Munich', 'Berlin', 'Berlin', 1),
(45, 'What is capital of France?', 'Marseille', 'Lyon', 'Nice', 'Paris', 'Paris', 1),
(46, 'What is capital of Mexico?', 'Tijuana', 'Cancún', 'Mexico City', 'Acapulco', 'Mexico City', 1),
(47, 'What is capital of Argentina?', 'San Salvador', 'Buenos Aires', 'Córdoba', 'São Paulo', 'Buenos Aires', 1),
(48, 'What is capital Cuba?', 'Havana', 'Santiago de Cuba', 'Kingston', 'Spanish Town', 'Havana', 1),
(49, 'What is capital of Jamaica?', 'Havana', 'Santiago de Cuba', 'Kingston', 'Spanish Town', 'Kingston', 1),
(50, 'What is capital of Spain?', 'Madrid', 'Barcelona', 'Valencia', 'Seville', 'Madrid', 1),
(51, 'If Logx (1 / 8) = - 3 / 2, then x is equal to?', '-4', '4', '1//4', '10', '4', 2),
(52, '20 % of 2 is equal to ?', '11', '4', '0.4', '0.04', '0.4', 2),
(53, 'If Log 4 (x) = 12, then log 2 (x / 4) is equal to?', '11', '48', '-12', '22', '22', 2),
(54, 'The population of a country increased by an average of 2% per year from 2000 to 2003. If the population of this country was 2 000 000 on December 31, 2003, then the population of this country on Janua', '1 846 000', '1 852 000', '1 000 000', '1 500 000', '1 846 000', 2),
(55, '5+5= ?', '11', '10', '9', '8', '10', 2),
(56, 'f is a function such that f(x) < 0. The graph of the new function g defined by g(x) = | f(x) | is a reflection of the graph of f ?', 'on the y axis', 'on the x axis', 'on the line y = x', 'on the line y = - x', 'on the x axis', 2),
(57, '9*6-5= ?', '47', '48', '49', '50', '49', 2),
(58, '(55/55)-5= ?', '4', '5', '-5', '-4', '-4', 2),
(59, '66/6= ?', '9', '10', '11', '12', '11', 2),
(60, '99+2= ?', '99', '100', '101', '102', '101', 2),
(61, '(99*2)+(7/3)= ?', '400.33', '300.33', '100.33', '200.33', '200.33', 2),
(62, '1+2= ?', '3', '4', '5', '6', '3', 2),
(63, '999+666= ?', '1566', '1665', '1873', '1735', '1665', 2),
(64, '6/2= ?', '2', '3', '4', '15', '3', 2),
(65, 'For x greater than or equal to zero and less than or equal to 2 pi, sin x and cos x are both decreasing on the intervals?', '(0 , pi/2)', '(pi/2 , pi)', '(pi , 3 pi / 2)', '(3 pi / 2 , 2 pi)', '(pi/2 , pi)', 2),
(66, 'The three solutions of the equation f(x) = 0 are - 4, 8, and 11. Therefore, the three solutions of the equation f(2 x) = 0 are?', '- 2, 4, and 11/2', '- 8, 16 and 22', '- 4, 8, and 11', '2, 19 / 2 and 7 / 2', '- 2, 4, and 11/2', 2),
(67, 'Five different books (A, B, C, D and E) are to be arranged on a shelf. Books C and D are to be arranged first and second starting from the right of the shelf. The number of different orders in which b', '5!', '3!', '2!', '3!', '2!', 2),
(68, 'The mean of a data set is equal to 10 and its standard deviation is equal to 1. If we add 5 to each data value, then the mean and standard deviation become?', 'mean = 15 , standard deviation = 6 ', 'mean = 10 , standard deviation = 6', 'mean = 15 , standard deviation = 1', 'mean = 10 , standard deviation = 1', 'mean = 15 , standard deviation = 1', 2),
(69, '6/2= ?', '2', '3', '4', '15', '3', 2),
(70, 'The period of | sin (3x) | is?', '2 pi', '2 pi / 3', 'pi / 3', '3 pi', '3 pi)', 2);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `quiz_id` int(10) NOT NULL,
  `quiz_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quiz_id`, `quiz_name`) VALUES
(1, 'Capital cities'),
(2, 'Simple math');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `address` varchar(40) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `phone_number`, `address`, `password`) VALUES
(6, 'Marcel', 'Harvan', 'marcel@harvan.sk', '1234567890', 'Toronto', '1234'),
(8, 'Johan', 'Johantson', 'johan@johan.xxx', '4169955833', 'Toronto', '123456'),
(9, 'Milind', 'Patel', 'milin@patel.in', '987654321', 'Otawa', '987');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `action`
--
ALTER TABLE `action`
  ADD PRIMARY KEY (`action_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_id`) USING BTREE;

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quiz_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `action`
--
ALTER TABLE `action`
  MODIFY `action_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quiz_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
