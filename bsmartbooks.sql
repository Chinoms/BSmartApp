-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 28, 2017 at 02:27 PM
-- Server version: 10.1.18-MariaDB-cll-lve
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `obiaalrc_bhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `sn` int(255) NOT NULL AUTO_INCREMENT,
  `bookName` varchar(255) NOT NULL,
  `bookCover` varchar(255) NOT NULL,
  `bookCat` varchar(255) NOT NULL,
  `bookFile` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `dateofPub` varchar(255) NOT NULL,
  `oge` datetime NOT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`sn`, `bookName`, `bookCover`, `bookCat`, `bookFile`, `author`, `des`, `dateofPub`, `oge`) VALUES
(25, '3D Video Processing and Transmission Fundamentals', 'http://obiakwukwo.com/_covers/cover005001.png', '005', 'http://obiakwukwo.com/_books/005001.pdf', 'Chaminda Hewage', 'A comprehensive introduction to 3D video processing an transmission.', 'NA', '0000-00-00 00:00:00'),
(26, 'Access 2010 - Part 1', 'http://obiakwukwo.com/_covers/cover005002.png', '005', 'http://obiakwukwo.com/_books/005002.pdf', 'Stephen Moffat, The Mouse Training Company', 'Learn to use MS Access to build databases.', 'NA', '0000-00-00 00:00:00'),
(27, 'Java: Classes in Java Applications – An Introduction to Java Programming', 'http://obiakwukwo.com/_covers/cover005003.png', '005', 'http://obiakwukwo.com/_books/005003.pdf', 'David Etheridge', 'This important book gives you everything you need to know about Java programming with series of examples from classes.', '2009', '0000-00-00 00:00:00'),
(28, 'Java: Graphical User Interfaces', 'http://obiakwukwo.com/_covers/cover005004.png', '005', 'http://obiakwukwo.com/_books/005004.pdf', 'David Etheridge', 'An introduction to GUI in Java applications.', 'NA', '0000-00-00 00:00:00'),
(29, 'Java: The Fundamentals of Objects and Classes', 'http://obiakwukwo.com/_covers/cover005005.png', '005', 'http://obiakwukwo.com/_books/005005.pdf', 'David Etheridge', 'An introduction to object-oriented programming in Java.', 'NA', '0000-00-00 00:00:00'),
(30, 'An Introduction to Relational Database Theory', 'http://obiakwukwo.com/_covers/cover005006.png', '005', 'http://obiakwukwo.com/_books/005006.pdf', 'Hugh Darwen', 'A comprehensive overview of RDBMS and how they function.', 'NA', '0000-00-00 00:00:00'),
(31, 'Artificial Intelligence - Agents and Environments', 'http://obiakwukwo.com/_covers/cover005007.png', '005', 'http://obiakwukwo.com/_books/005007.pdf', 'William John Teahan', 'This book has been written for those who are fascinated with AI and thus, wish to understand it better.', '2010', '0000-00-00 00:00:00'),
(32, 'Automation and Robotics', 'http://obiakwukwo.com/_covers/cover005008.png', '005', 'http://obiakwukwo.com/_books/005008.pdf', 'Miltiadis A. Boboulos', 'This book provides an in-depth study of the technologies behind automation and robotics.', 'NA', '0000-00-00 00:00:00'),
(33, 'Business Information Management: Exercises - Solutions to Hands-on Exercises', 'http://obiakwukwo.com/_covers/cover005009.png', '005', 'http://obiakwukwo.com/_books/005009.pdf', 'Dr. Vladlena Benson,  Kate Davis', 'This masterpiece takes you right from the basic through the advanced concepts of business information management.', 'NA', '0000-00-00 00:00:00'),
(34, 'Business Information Management', 'http://obiakwukwo.com/_covers/cover005010.png', '005', 'http://obiakwukwo.com/_books/005010.pdf', 'Dr. Vladlena Benson,  Kate Davis', 'NA', 'NA', '0000-00-00 00:00:00'),
(35, 'Business Model Design - Networking, Innovating and Globalizing', 'http://obiakwukwo.com/_covers/cover005011.png', '005', 'http://obiakwukwo.com/_books/005011.pdf', 'Christian Nielsen; Morten Lund (Eds.)', 'NA', 'NA', '0000-00-00 00:00:00'),
(36, 'Communications, Industrial Networking and TCP/IP', 'http://obiakwukwo.com/_covers/cover005013.png', '005', 'http://obiakwukwo.com/_books/005013.pdf', 'IDC Technologies', 'Taking you from the basic concepts of modern communication technologies to advanced levels, this book covers vast areas of networking with particular emphasis and indepth study of TCP/IP.', 'NA', '2016-04-07 11:20:01'),
(37, 'Bad Dentition - Comedy Skit', 'http://obiakwukwo.com/_covers/cover005001.png', '015', 'http://obiakwukwo.com/_videos/baddentition.mp4', 'NA', 'Laugh it off.', 'NA', '2016-04-14 04:55:14'),
(38, 'Crawl', 'http://obiakwukwo.com/_covers/005005.png', '014', 'http://obiakwukwo.com/_audios/chris_brown_crawl.mp3', 'Chris Brown', 'A love song by Chris Brown. ', '2012', '2016-04-14 05:07:37');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
