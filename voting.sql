-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2021 at 07:36 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `candidate_id` int(11) NOT NULL,
  `position` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `year_level` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `symbol` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`candidate_id`, `position`, `firstname`, `lastname`, `year_level`, `gender`, `img`, `symbol`) VALUES
(1, 'President', 'Jahed', 'Hasan', '4th Year', 'Male', 'upload/12.png', 'upload/116686535_10157919508742203_5608354946770799939_o.jpg'),
(5, 'Vice President', 'Abu Bakar', 'Abir', '4th Year', 'Male', 'upload/3.jpg', 'upload/116686535_10157919508742203_5608354946770799939_o.jpg'),
(7, 'General Secretary', 'Rafa', ' Anika', '4th Year', 'Female', 'upload/f2.jpg', 'upload/116686535_10157919508742203_5608354946770799939_o.jpg'),
(8, 'Assistant General Secretary', 'Jamal ', 'Uddin', '2nd Year', 'Male', 'upload/2.png', 'upload/116686535_10157919508742203_5608354946770799939_o.jpg'),
(9, 'Assistant General Secretary', 'Anjum', ' Islam', '1st Year', 'Female', 'upload/4.jpg', 'upload/116686535_10157919508742203_5608354946770799939_o.jpg'),
(10, 'Secretary, Science and Technology', 'Kamal ', 'khan', '3rd Year', 'Male', 'upload/1.jpg', 'upload/116686535_10157919508742203_5608354946770799939_o.jpg'),
(12, 'Secretary, International Affiars', 'Hasan', ' Siddique', '3rd Year', 'Male', 'upload/2.png', 'upload/116686535_10157919508742203_5608354946770799939_o.jpg'),
(14, 'Secretary, Literature', 'Anika Tabassum', 'Anika', '1st Year', 'Female', 'upload/7f.jpg', 'upload/116686535_10157919508742203_5608354946770799939_o.jpg'),
(15, 'Secretary, Culture', 'Jannat', 'Khan', '1st Year', 'Female', 'upload/f4.jpg', 'upload/116686535_10157919508742203_5608354946770799939_o.jpg'),
(16, 'Secretary, Culture', 'Nadia Karim', 'Nadia', '4th Year', 'Female', 'upload/7f.jpg', 'upload/116686535_10157919508742203_5608354946770799939_o.jpg'),
(17, 'Member', 'Arafat', 'Hossain', '1st Year', 'Male', 'upload/10.jpg', 'upload/116686535_10157919508742203_5608354946770799939_o.jpg'),
(18, 'Member', 'Hasan', 'Jahid', '4th Year', 'Male', 'upload/images.jpg', 'upload/116686535_10157919508742203_5608354946770799939_o.jpg'),
(19, 'President', 'Jahed', 'Hasan', '1st Year', 'Male', 'upload/male3.jpg', 'upload/116686535_10157919508742203_5608354946770799939_o.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `firstname`, `lastname`) VALUES
(1, 'admin', 'admin', 'Anika ', 'Rafa');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `voters_id` int(11) NOT NULL,
  `id_number` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `year_level` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `account` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`voters_id`, `id_number`, `password`, `firstname`, `lastname`, `year_level`, `status`, `account`) VALUES
(1, 21241523, '2xQfpKNu', 'Christine', 'Grey', '3rd Year', 'Voted', 'Active'),
(2, 6666, 'GseVAeLW', 'Harry', 'Den', '4th Year', 'Voted', 'Active'),
(3, 123, '9opU0oDM', 'jahed', 'hasan', '4th Year', 'Voted', 'Active'),
(4, 1234, 'XB9znRFS', 'voter', '1', '1st Year', 'Voted', 'Active'),
(5, 12345, 'QZxam7j9', 'voter ', '2', '2nd Year', 'Unvoted', 'Active'),
(6, 10, 'Iqy9ube4', 'voter', ' 3', '1st Year', 'Unvoted', 'Active'),
(7, 12, 'FdkECYpS', 'voter', '4', '1st Year', 'Unvoted', 'Active'),
(8, 15, 'xUDshOl1', 'voter', '5', '2nd Year', 'Unvoted', 'Active'),
(9, 20, 'pZ7UusLK', 'voter ', '20', '3rd Year', 'Unvoted', 'Active'),
(10, 30, 'p2nAbXKu', 'voter ', '30', '4th Year', 'Unvoted', 'Active'),
(11, 1, 'BaUW9WbB', 'Jahed ', 'Hasan', '3rd Year', 'Unvoted', 'Active'),
(12, 2, 'Am5itHzt', 'Abir ', 'Hossain', '3rd Year', 'Unvoted', 'Active'),
(13, 3, 'F1SNUAwq', 'Mohaimen', 'Hossain', '1st Year', 'Unvoted', 'Active'),
(14, 4, 'HgpU3eXu', 'Kulsum', 'Begum', '2nd Year', 'Unvoted', 'Active'),
(15, 5, 'XUqkHNVn', 'Hasina', 'Rowsan', '1st Year', 'Unvoted', 'Active'),
(16, 6, 'LlhdvgtJ', 'Khaleda ', 'Akter', '3rd Year', 'Unvoted', 'Active'),
(17, 7, '6IjsOCmQ', 'Anika ', 'Tabassum', '1st Year', 'Unvoted', 'Active'),
(18, 8, 'QSo1Qn3B', 'Arafat', 'Hossain', '3rd Year', 'Unvoted', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `vote_id` int(255) NOT NULL,
  `candidate_id` varchar(255) NOT NULL,
  `voters_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`vote_id`, `candidate_id`, `voters_id`) VALUES
(1, '1', '2'),
(2, '', '2'),
(3, '', '2'),
(4, '2', '2'),
(5, '', '2'),
(6, '', '2'),
(7, '', '2'),
(8, '', '2'),
(9, '', '2'),
(10, '', '2'),
(11, '', '2'),
(12, '1', '1'),
(13, '', '1'),
(14, '', '1'),
(15, '2', '1'),
(16, '', '1'),
(17, '', '1'),
(18, '', '1'),
(19, '', '1'),
(20, '', '1'),
(21, '', '1'),
(22, '', '1'),
(23, '', ''),
(24, '', ''),
(25, '', ''),
(26, '', ''),
(27, '', ''),
(28, '', ''),
(29, '', ''),
(30, '', ''),
(31, '', ''),
(32, '4', '3'),
(33, '5', '3'),
(34, '2', '3'),
(35, '', '3'),
(36, '', '3'),
(37, '', '3'),
(38, '', '3'),
(39, '', '3'),
(40, '', '3'),
(41, '4', '4'),
(42, '5', '4'),
(43, '2', '4'),
(44, '', '4'),
(45, '6', '4'),
(46, '', '4'),
(47, '', '4'),
(48, '', '4'),
(49, '', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`voters_id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`vote_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `voters_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `vote_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
