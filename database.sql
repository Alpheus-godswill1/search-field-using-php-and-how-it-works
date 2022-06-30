-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2020 at 03:19 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `file_upload_tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `uploaded_files`
--

CREATE TABLE articles (
		a_id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    	a_title text not null,
    	a_text text not null ,
    	a_author varchar(256) not null,
    	a_date datetime not null
);
--
-- Dumping data for table `uploaded_files`
--
INSERT INTO `articles` (`a_title`, `a_text`, `a_author`, `a_date`) VALUES(`Nine ways to become rich.`,`which involves focusing ,deligence,relationship,programming etc.`,`Admin`,`2022-06-30 06:44:20`);


INSERT INTO `articles` (`a_title`, `a_text`, `a_author`, `a_date`) VALUES(`Most recent humans on earth to become rich.`,`which involves ,Alpheus Godswill Umanah ,Alpheus Umanah,Alphi,excercising etc.`,`Alpheus_Godswill`,`2022-05-30 07:34:20`);


--
-- Indexes for dumped tables
--

--
-- Indexes for table `uploaded_files`
--
ALTER TABLE `pushed`
  ADD PRIMARY KEY (`fileid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uploaded_files`
--
ALTER TABLE `pushed`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
