-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-03-22 16:01:02
-- 服务器版本： 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdxtours`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `id` int(4) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `permissions` varchar(40) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `permissions`, `datetime`) VALUES
(1, 'admin', '789b49606c321c8cf228d17942608eff0ccc4171', 'admin', '2017-02-18 05:51:09'),
(2, 'admin2', '789b49606c321c8cf228d17942608eff0ccc4171', 'admin', '2017-02-18 05:51:27');

-- --------------------------------------------------------

--
-- 表的结构 `contact`
--

CREATE TABLE `contact` (
  `id` int(4) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(225) NOT NULL,
  `message` longtext NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`, `datetime`) VALUES
(4, 'DDD', 'D@AA.COM', 'DDD', 'DDDDD', '2017-02-27 23:30:57'),
(5, 'Guohong Chen', 'guohongchen82@gmail.com', '33', '4444444444444', '2017-02-27 23:33:16'),
(6, 'YU FU', '10132898@QQ.COM', '333', 'FDAFDAFDSAFDSFDSAFDSF!', '2017-02-27 23:33:33'),
(7, 'us', 'yaoyao.chen@pcc.edu', 'ddd', 'dd', '2017-03-10 06:50:15'),
(8, 'us', 'yaoyao.chen@pcc.edu', 'ddd', 'ffgfg', '2017-03-11 06:31:15'),
(9, 'ffda', 'dfd@dfad.com', 'ddd', 'fdfjdf', '2017-03-11 06:37:10'),
(10, 'kkk', 'kkk@kkk.com', 'kkk', 'kkkd', '2017-03-11 06:48:18');

-- --------------------------------------------------------

--
-- 表的结构 `reservation`
--

CREATE TABLE `reservation` (
  `id` int(4) NOT NULL,
  `tour` varchar(50) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `tdate` datetime NOT NULL,
  `participants` int(11) NOT NULL,
  `comments` longtext NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `reservation`
--

INSERT INTO `reservation` (`id`, `tour`, `firstname`, `lastname`, `email`, `phone`, `tdate`, `participants`, `comments`, `datetime`) VALUES
(1, 'landmarks', 'Guohong', 'Chen', 'guohongchen82@gmail.com', '5039847820', '2017-02-21 00:00:00', 10, 'dff', '2017-02-28 00:28:52'),
(2, 'downtown', 'Guohong', 'Chen', 'kkk@kkk.com', 'dd', '0000-00-00 00:00:00', 2, 'dddd', '2017-03-11 06:58:38'),
(3, 'downtown', 'Guohong', 'Chen', 'kkk@kkk.com', 'dd', '0000-00-00 00:00:00', 2, 'dddd', '2017-03-11 06:59:37'),
(4, 'landmarks', 'frist', 'last', 'dddd@dddc.com', 'dd', '2017-03-07 00:00:00', 33, '33', '2017-03-11 07:37:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- 使用表AUTO_INCREMENT `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
