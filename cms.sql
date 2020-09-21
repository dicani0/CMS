-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2020 at 09:00 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(16, 'PHP8'),
(17, 'Javascript2'),
(25, 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(5) NOT NULL,
  `post_id` int(7) NOT NULL,
  `author` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `author`, `email`, `content`, `status`, `date`) VALUES
(1, 2, 'Ziemniak', 'asdadasda@sadasd.as', 'Siemano kolano', 'open', '2020-08-13 00:00:00'),
(2, 1, 'Me', 'miklasdawid@gmail.com', 'testing comments', '2020-09-20 00:06:31', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(3) NOT NULL,
  `category_id` int(3) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `image` text NOT NULL,
  `content` text NOT NULL,
  `tags` varchar(255) NOT NULL,
  `comment_count` int(10) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `title`, `author`, `date`, `image`, `content`, `tags`, `comment_count`, `status`) VALUES
(1, 16, 'Test title2', 'Ziemniak', '0000-00-00', 'download.jfif', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum, corrupti maiores eum animi temporibus veniam, consequatur deleniti tenetur ipsa perspiciatis ea, totam praesentium! Eos, vel ex. Tenetur optio dicta nobis!', 'test, test1, test2', 0, ''),
(2, 17, 'test title2', 'test author', '0000-00-00', '', '', 'test, test1, test2', 0, ''),
(3, 16, 'MySQL', 'Me', '0000-00-00', 'ELFQOKBWoAAKgvj.png', '', 'mysql', 5, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
