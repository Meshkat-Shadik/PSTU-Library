-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2019 at 09:24 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `img_show`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_datas`
--

CREATE TABLE `book_datas` (
  `id` int(20) NOT NULL,
  `img` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `faculty` varchar(100) NOT NULL,
  `a_date` date NOT NULL,
  `resource` varchar(200) NOT NULL,
  `quan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book_datas`
--

INSERT INTO `book_datas` (`id`, `img`, `name`, `author`, `genre`, `faculty`, `a_date`, `resource`, `quan`) VALUES
(6, 'images/520101311218Cover.jpg', 'Python_for_dummies', 'John_Paul_Mueller', 'Text_Book', 'Computer_Science', '2018-12-31', 'Internet', 1),
(11, 'images/435005050119bam1.jpg', 'The_economic_consumption', 'Tullio_Jappelli', 'Text_Book', 'Business_Administration', '2019-01-05', 'Free', 10),
(12, 'images/405105050119bam3.jpg', 'Human_Resource_Management', 'Robert_N._Lousier', 'Text_Book', 'Business_Administration', '2019-01-05', 'Free', 11),
(13, 'images/375205050119bam4.jpg', 'Sales_and_Distribution_Management', 'Sumedha_Gupta', 'Text_Book', 'Business_Administration', '2019-01-05', 'Free', 5),
(14, 'images/415305050119bam5.jpg', 'Basic_Knowledge_of_Accounting', 'S.P._Jain', 'Text_Book', 'Business_Administration', '2019-01-05', 'Free', 10),
(15, 'images/425405050119bishad_shindhu.jpg', 'Bishad_Shindhu', 'Mir_Mosharraf_Hossain', 'Novels', 'All', '2019-01-05', 'Free', 2),
(16, 'images/524805050119aguner_poroshmoni.jpg', 'Aguner_Poroshmoni', 'Humayun_Ahmed', 'Novels', 'All', '2019-01-05', 'Free', 5),
(17, 'images/345410080119deyal.jpg', 'Deyal', 'Humayun_Ahmed', 'Liberation_War', 'All', '2019-01-08', 'Free', 5),
(18, 'images/221002090119muk4.jpg', 'Ekattorer_Chithi', 'None', 'Liberation_War', 'All', '2019-01-09', 'Free', 5),
(19, 'images/180803090119db_korth.png', 'Database_Systems', 'F.Korth', 'Text_Book', 'Computer_Science', '2019-01-09', 'Free', 5),
(20, 'images/414610220119Ruposi_bangla.jpg', 'Rupashi_Bangla', 'Jibanananda_Das', 'Poem', 'All', '2019-01-22', 'Free', 4),
(21, 'images/sk8.jpg', 'Glass', 'Internet', 'Novels', 'All', '2018-12-23', 'Internet', 1),
(22, 'images/104811240119maa.jpg', 'Maa', 'Anisul_Haque', 'Liberation_War', 'All', '2019-01-25', 'Free', 4);

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `idate` varchar(20) NOT NULL,
  `id` int(20) NOT NULL,
  `img` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `sname` varchar(40) NOT NULL,
  `ssem` varchar(15) NOT NULL,
  `sfac` varchar(15) NOT NULL,
  `sid` int(15) NOT NULL,
  `semail` varchar(30) NOT NULL,
  `rdate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Id`, `Name`, `Email`, `Message`) VALUES
(2, 'Shadik', ' shadikmeshkat328@gmail.com', 'HI!');

-- --------------------------------------------------------

--
-- Table structure for table `issue_book`
--

CREATE TABLE `issue_book` (
  `id` varchar(20) NOT NULL,
  `s_name` varchar(40) NOT NULL,
  `s_id` varchar(15) NOT NULL,
  `s_semester` varchar(15) NOT NULL,
  `s_fac` varchar(15) NOT NULL,
  `s_email` varchar(30) NOT NULL,
  `i_date` varchar(20) NOT NULL,
  `r_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `issue_book`
--

INSERT INTO `issue_book` (`id`, `s_name`, `s_id`, `s_semester`, `s_fac`, `s_email`, `i_date`, `r_date`) VALUES
('22', 'Shadik Faysal', '1602058', '5th', 'Computer_Scienc', 'shadikmeshkat328@gmail.com', '2019-01-26', '2019-02-08');

-- --------------------------------------------------------

--
-- Table structure for table `just_try`
--

CREATE TABLE `just_try` (
  `id` int(100) NOT NULL,
  `id_get` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `just_try`
--

INSERT INTO `just_try` (`id`, `id_get`) VALUES
(1, '1'),
(2, '21'),
(3, '1'),
(4, '3'),
(5, '21');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `News` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`Date`, `News`) VALUES
('2019-01-24 21:59:37', 'Testing'),
('2019-01-24 22:14:26', 'Hey there! Welcome to our webpage.:)'),
('2019-01-26 15:39:28', '2nd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `rank` varchar(20) NOT NULL,
  `face` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `rank`, `face`) VALUES
(1, 'shadik', 'ceo', 'sk1.jpg'),
(2, 'faysal', 'ceo', 'sk2.jpg'),
(3, 'meshkat', 'ceo', 'sk3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_datas`
--
ALTER TABLE `book_datas`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `just_try`
--
ALTER TABLE `just_try`
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
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `just_try`
--
ALTER TABLE `just_try`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
