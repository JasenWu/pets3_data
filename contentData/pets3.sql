-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-07-05 05:55:49
-- 服务器版本： 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pets3`
--

-- --------------------------------------------------------

--
-- 表的结构 `chapter`
--

CREATE TABLE `chapter` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '设置主键自增',
  `unit_id` int(11) DEFAULT NULL COMMENT '设置章节Id关联',
  `order` int(11) DEFAULT NULL COMMENT '设置章节顺序',
  `title` varchar(60) NOT NULL COMMENT '设置章节标题',
  `remark` varchar(240) DEFAULT NULL COMMENT '设置章节备注信息'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `chapter`
--

INSERT INTO `chapter` (`id`, `unit_id`, `order`, `title`, `remark`) VALUES
(1, 1, 1, 'Greeting and Introduction', ''),
(2, 2, 2, 'People', ''),
(3, 3, 3, 'House and Family', ''),
(4, 6, 6, 'Eating and Drinking', ''),
(5, 7, 7, 'Food Culture', ''),
(6, 5, 5, 'Weather and Climate', ''),
(7, 4, 4, 'Environment', ''),
(8, 8, 8, 'At Home', ''),
(9, 9, 9, 'At Work', ''),
(10, 11, 11, 'Entertainments and Sports', ''),
(11, 10, 10, 'Hobbies and Interest', ''),
(12, 13, 13, 'Shopping', ''),
(13, 12, 12, 'Shops and Commodities', ''),
(14, 14, 14, 'Holiday Festivals', ''),
(15, 15, 15, 'Holiday Activities', ''),
(16, 16, 16, 'Places and Locations', ''),
(17, 17, 17, 'Travel and Tourism', ''),
(18, 18, 18, 'Sightseeing and Travel Plans', ''),
(19, 19, 19, 'Visit a Doctor and Health  Insurance', ''),
(20, 20, 20, 'Bodybuilding and Environmental Sanitation', ''),
(21, 21, 21, 'Services(1)', ''),
(22, 23, 23, 'Making Friendsand Communication', ''),
(23, 22, 22, 'Services(2)', ''),
(24, 24, 24, 'Political , Legal and Social Lssuses', ''),
(25, 25, 25, 'Work and Posts', ''),
(26, 26, 26, 'Finding a Job', ''),
(27, 27, 27, 'Education', ''),
(28, 28, 28, 'Popular Science', ''),
(29, 29, 29, 'History', ''),
(30, 30, 30, 'Geography', ''),
(31, 1, 1, 'Greeting and Introduction', ''),
(32, 2, 2, 'People', ''),
(33, 3, 3, 'House and Family', ''),
(34, 4, 4, 'Environment', ''),
(35, 5, 5, 'Weather and Climate', ''),
(36, 6, 6, 'Eating and Drinking', ''),
(37, 7, 7, 'Food Culture', ''),
(38, 8, 8, 'At Home', ''),
(39, 9, 9, 'At Work', ''),
(40, 10, 10, 'Hobbies and Interest', ''),
(41, 11, 11, 'Entertainments and Sports', ''),
(42, 12, 12, 'Shops and Commodities', ''),
(43, 14, 14, 'Holiday Festivals', ''),
(44, 13, 13, 'Shopping', ''),
(45, 16, 16, 'Places and Locations', ''),
(46, 15, 15, 'Holiday Activities', ''),
(47, 17, 17, 'Travel and Tourism', ''),
(48, 18, 18, 'Sightseeing and Travel Plans', ''),
(49, 19, 19, 'Visit a Doctor and Health  Insurance', ''),
(50, 22, 22, 'Services(2)', ''),
(51, 21, 21, 'Services(1)', ''),
(52, 23, 23, 'Making Friendsand Communication', ''),
(53, 20, 20, 'Bodybuilding and Environmental Sanitation', ''),
(54, 24, 24, 'Political , Legal and Social Lssuses', ''),
(55, 26, 26, 'Finding a Job', ''),
(56, 27, 27, 'Education', ''),
(57, 28, 28, 'Popular Science', ''),
(58, 30, 30, 'Geography', ''),
(59, 25, 25, 'Work and Posts', ''),
(60, 29, 29, 'History', ''),
(61, 1, 1, 'Greeting and Introduction', ''),
(62, 3, 3, 'House and Family', ''),
(63, 4, 4, 'Environment', ''),
(64, 5, 5, 'Weather and Climate', ''),
(65, 6, 6, 'Eating and Drinking', ''),
(66, 2, 2, 'People', ''),
(67, 7, 7, 'Food Culture', ''),
(68, 10, 10, 'Hobbies and Interest', ''),
(69, 11, 11, 'Entertainments and Sports', ''),
(70, 8, 8, 'At Home', ''),
(71, 9, 9, 'At Work', ''),
(72, 13, 13, 'Shopping', ''),
(73, 12, 12, 'Shops and Commodities', ''),
(74, 14, 14, 'Holiday Festivals', ''),
(75, 16, 16, 'Places and Locations', ''),
(76, 17, 17, 'Travel and Tourism', ''),
(77, 15, 15, 'Holiday Activities', ''),
(78, 18, 18, 'Sightseeing and Travel Plans', ''),
(79, 19, 19, 'Visit a Doctor and Health  Insurance', ''),
(80, 20, 20, 'Bodybuilding and Environmental Sanitation', ''),
(81, 21, 21, 'Services(1)', ''),
(82, 22, 22, 'Services(2)', ''),
(83, 24, 24, 'Political , Legal and Social Lssuses', ''),
(84, 23, 23, 'Making Friendsand Communication', ''),
(85, 26, 26, 'Finding a Job', ''),
(86, 25, 25, 'Work and Posts', ''),
(87, 27, 27, 'Education', ''),
(88, 28, 28, 'Popular Science', ''),
(89, 29, 29, 'History', ''),
(90, 30, 30, 'Geography', ''),
(91, 0, 1, 'Greeting and Introduction', ''),
(92, 0, 2, 'People', ''),
(93, 0, 3, 'House and Family', ''),
(94, 0, 4, 'Environment', ''),
(95, 0, 6, 'Eating and Drinking', ''),
(96, 0, 5, 'Weather and Climate', ''),
(97, 0, 7, 'Food Culture', ''),
(98, 0, 9, 'At Work', ''),
(99, 0, 8, 'At Home', ''),
(100, 0, 10, 'Hobbies and Interest', ''),
(101, 0, 11, 'Entertainments and Sports', ''),
(102, 0, 12, 'Shops and Commodities', ''),
(103, 0, 13, 'Shopping', ''),
(104, 0, 15, 'Holiday Activities', ''),
(105, 0, 16, 'Places and Locations', ''),
(106, 0, 14, 'Holiday Festivals', ''),
(107, 0, 17, 'Travel and Tourism', ''),
(108, 0, 18, 'Sightseeing and Travel Plans', ''),
(109, 0, 19, 'Visit a Doctor and Health  Insurance', ''),
(110, 0, 20, 'Bodybuilding and Environmental Sanitation', ''),
(111, 0, 21, 'Services(1)', ''),
(112, 0, 23, 'Making Friendsand Communication', ''),
(113, 0, 22, 'Services(2)', ''),
(114, 0, 24, 'Political , Legal and Social Lssuses', ''),
(115, 0, 25, 'Work and Posts', ''),
(116, 0, 26, 'Finding a Job', ''),
(117, 0, 27, 'Education', ''),
(118, 0, 29, 'History', ''),
(119, 0, 28, 'Popular Science', ''),
(120, 0, 30, 'Geography', ''),
(121, 0, 1, 'Greeting and Introduction', ''),
(122, 0, 2, 'People', ''),
(123, 0, 3, 'House and Family', ''),
(124, 0, 4, 'Environment', ''),
(125, 0, 5, 'Weather and Climate', ''),
(126, 0, 7, 'Food Culture', ''),
(127, 0, 6, 'Eating and Drinking', ''),
(128, 0, 8, 'At Home', ''),
(129, 0, 9, 'At Work', ''),
(130, 0, 10, 'Hobbies and Interest', ''),
(131, 0, 12, 'Shops and Commodities', ''),
(132, 0, 11, 'Entertainments and Sports', ''),
(133, 0, 13, 'Shopping', ''),
(134, 0, 14, 'Holiday Festivals', ''),
(135, 0, 15, 'Holiday Activities', ''),
(136, 0, 16, 'Places and Locations', ''),
(137, 0, 17, 'Travel and Tourism', ''),
(138, 0, 18, 'Sightseeing and Travel Plans', ''),
(139, 0, 19, 'Visit a Doctor and Health  Insurance', ''),
(140, 0, 20, 'Bodybuilding and Environmental Sanitation', ''),
(141, 0, 23, 'Making Friendsand Communication', ''),
(142, 0, 22, 'Services(2)', ''),
(143, 0, 21, 'Services(1)', ''),
(144, 0, 24, 'Political , Legal and Social Lssuses', ''),
(145, 0, 25, 'Work and Posts', ''),
(146, 0, 26, 'Finding a Job', ''),
(147, 0, 27, 'Education', ''),
(148, 0, 28, 'Popular Science', ''),
(149, 0, 29, 'History', ''),
(150, 0, 30, 'Geography', '');

-- --------------------------------------------------------

--
-- 表的结构 `content`
--

CREATE TABLE `content` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '主键自增',
  `unit_id` int(11) DEFAULT NULL COMMENT '章节Id关联',
  `chapter_id` int(11) DEFAULT NULL COMMENT '章节对话ID关联',
  `role_id` int(11) DEFAULT NULL COMMENT '角色ID关联',
  `content_en` text NOT NULL COMMENT '英文内容',
  `content_zh` text COMMENT '中文内容',
  `remark` varchar(240) DEFAULT NULL COMMENT '备注信息'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `content`
--

INSERT INTO `content` (`id`, `unit_id`, `chapter_id`, `role_id`, `content_en`, `content_zh`, `remark`) VALUES
(1, 2, 2, 2, 'People', 'People', ''),
(2, 1, 1, 1, 'Greeting and Introduction', 'Greeting and Introduction', ''),
(3, 3, 3, 3, 'House and Family', 'House and Family', ''),
(4, 1, 1, 1, 'Greeting and Introduction', 'Greeting and Introduction', ''),
(5, 2, 2, 2, 'People', 'People', ''),
(6, 3, 3, 3, 'House and Family', 'House and Family', ''),
(7, 1, 1, 1, 'Greeting and Introduction', 'Greeting and Introduction', ''),
(8, 2, 2, 2, 'People', 'People', ''),
(9, 3, 3, 3, 'House and Family', 'House and Family', ''),
(10, 1, 1, 1, 'Greeting and Introduction', 'Greeting and Introduction', ''),
(11, 2, 2, 2, 'People', 'People', ''),
(12, 3, 3, 3, 'House and Family', 'House and Family', ''),
(13, 1, 1, 1, 'Greeting and Introduction', 'Greeting and Introduction', ''),
(14, 2, 2, 2, 'People', 'People', ''),
(15, 3, 3, 3, 'House and Family', 'House and Family', ''),
(16, 1, 1, 1, 'Greeting and Introduction', 'Greeting and Introduction', ''),
(17, 2, 2, 2, 'People', 'People', ''),
(18, 3, 3, 3, 'House and Family', 'House and Family', ''),
(19, 1, 1, 1, 'Greeting and Introduction', 'Greeting and Introduction', ''),
(20, 2, 2, 2, 'People', 'People', ''),
(21, 3, 3, 3, 'House and Family', 'House and Family', ''),
(22, 1, 1, 1, 'Greeting and Introduction', 'Greeting and Introduction', ''),
(23, 2, 2, 2, 'People', 'People', ''),
(24, 3, 3, 3, 'House and Family', 'House and Family', ''),
(25, 2, 2, 0, '', '', ''),
(26, 1, 1, 0, '', '', ''),
(27, 1, 1, 0, '', '', ''),
(28, 2, 2, 0, '', '', ''),
(29, 2, 2, 0, '', '', ''),
(30, 1, 1, 0, '', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `readed`
--

CREATE TABLE `readed` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '主键自增',
  `count` int(11) DEFAULT NULL COMMENT '已读总量'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `readed`
--

INSERT INTO `readed` (`id`, `count`) VALUES
(1, 10023);

-- --------------------------------------------------------

--
-- 表的结构 `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '主键自增',
  `unit_id` int(11) DEFAULT NULL COMMENT '章节Id关联',
  `chapter_id` int(11) DEFAULT NULL COMMENT '章节对话ID关联',
  `name` varchar(10) NOT NULL COMMENT '角色名称',
  `sex` int(11) DEFAULT NULL COMMENT '1：男 0：女',
  `type` int(11) DEFAULT NULL COMMENT '0：旁白 1：主角 2：配角',
  `remark` varchar(240) DEFAULT NULL COMMENT '备注信息'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `roles`
--

INSERT INTO `roles` (`id`, `unit_id`, `chapter_id`, `name`, `sex`, `type`, `remark`) VALUES
(1, 1, 1, '1', 1, 1, ''),
(2, 2, 2, '2', 2, 2, '');

-- --------------------------------------------------------

--
-- 表的结构 `unit`
--

CREATE TABLE `unit` (
  `id` int(10) UNSIGNED NOT NULL,
  `order` int(11) DEFAULT NULL,
  `title` varchar(60) NOT NULL,
  `remark` varchar(240) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `unit`
--

INSERT INTO `unit` (`id`, `order`, `title`, `remark`) VALUES
(33, 2, 'People', ''),
(34, 3, 'House and Family', ''),
(35, 5, 'Weather and Climate', ''),
(36, 1, 'Greeting and Introduction', ''),
(37, 6, 'Eating and Drinking', ''),
(38, 4, 'Environment', ''),
(39, 8, 'At Home', ''),
(40, 7, 'Food Culture', ''),
(41, 9, 'At Work', ''),
(42, 10, 'Hobbies and Interest', ''),
(43, 11, 'Entertainments and Sports', ''),
(44, 12, 'Shops and Commodities', ''),
(45, 13, 'Shopping', ''),
(46, 14, 'Holiday Festivals', ''),
(47, 15, 'Holiday Activities', ''),
(48, 16, 'Places and Locations', ''),
(49, 18, 'Sightseeing and Travel Plans', ''),
(50, 17, 'Travel and Tourism', ''),
(51, 19, 'Visit a Doctor and Health  Insurance', ''),
(52, 20, 'Bodybuilding and Environmental Sanitation', ''),
(53, 21, 'Services(1)', ''),
(54, 23, 'Making Friendsand Communication', ''),
(55, 26, 'Finding a Job', ''),
(56, 24, 'Political , Legal and Social Lssuses', ''),
(57, 25, 'Work and Posts', ''),
(58, 22, 'Services(2)', ''),
(59, 28, 'Popular Science', ''),
(60, 27, 'Education', ''),
(61, 29, 'History', ''),
(62, 30, 'Geography', ''),
(63, 1, 'Greeting and Introduction', ''),
(64, 2, 'People', ''),
(65, 3, 'House and Family', ''),
(66, 4, 'Environment', ''),
(67, 5, 'Weather and Climate', ''),
(68, 6, 'Eating and Drinking', ''),
(69, 7, 'Food Culture', ''),
(70, 9, 'At Work', ''),
(71, 12, 'Shops and Commodities', ''),
(72, 11, 'Entertainments and Sports', ''),
(73, 10, 'Hobbies and Interest', ''),
(74, 13, 'Shopping', ''),
(75, 8, 'At Home', ''),
(76, 16, 'Places and Locations', ''),
(77, 17, 'Travel and Tourism', ''),
(78, 19, 'Visit a Doctor and Health  Insurance', ''),
(79, 18, 'Sightseeing and Travel Plans', ''),
(80, 14, 'Holiday Festivals', ''),
(81, 15, 'Holiday Activities', ''),
(82, 20, 'Bodybuilding and Environmental Sanitation', ''),
(83, 21, 'Services(1)', ''),
(84, 22, 'Services(2)', ''),
(85, 23, 'Making Friendsand Communication', ''),
(86, 24, 'Political , Legal and Social Lssuses', ''),
(87, 25, 'Work and Posts', ''),
(88, 26, 'Finding a Job', ''),
(89, 27, 'Education', ''),
(90, 28, 'Popular Science', ''),
(91, 29, 'History', ''),
(92, 30, 'Geography', ''),
(93, 2, 'People', 'dd'),
(94, 1, 'Greeting and Introduction', 'dd'),
(95, 3, 'House and Family', 'dd'),
(96, 4, 'Environment', 'dd'),
(97, 5, 'Weather and Climate', 'dd'),
(98, 6, 'Eating and Drinking', 'dd'),
(99, 8, 'At Home', 'dd'),
(100, 9, 'At Work', 'dd'),
(101, 12, 'Shops and Commodities', 'dd'),
(102, 10, 'Hobbies and Interest', 'dd'),
(103, 11, 'Entertainments and Sports', 'dd'),
(104, 7, 'Food Culture', 'dd'),
(105, 13, 'Shopping', 'dd'),
(106, 14, 'Holiday Festivals', 'dd'),
(107, 18, 'Sightseeing and Travel Plans', 'dd'),
(108, 16, 'Places and Locations', 'dd'),
(109, 17, 'Travel and Tourism', 'dd'),
(110, 19, 'Visit a Doctor and Health  Insurance', 'dd'),
(111, 20, 'Bodybuilding and Environmental Sanitation', 'dd'),
(112, 15, 'Holiday Activities', 'dd'),
(113, 21, 'Services(1)', 'dd'),
(114, 25, 'Work and Posts', 'dd'),
(115, 23, 'Making Friendsand Communication', 'dd'),
(116, 24, 'Political , Legal and Social Lssuses', 'dd'),
(117, 22, 'Services(2)', 'dd'),
(118, 27, 'Education', 'dd'),
(119, 26, 'Finding a Job', 'dd'),
(120, 28, 'Popular Science', 'dd'),
(121, 29, 'History', 'dd'),
(122, 30, 'Geography', 'dd'),
(123, 1, 'Greeting and Introduction', ''),
(124, 3, 'House and Family', ''),
(125, 4, 'Environment', ''),
(126, 5, 'Weather and Climate', ''),
(127, 6, 'Eating and Drinking', ''),
(128, 2, 'People', ''),
(129, 7, 'Food Culture', ''),
(130, 9, 'At Work', ''),
(131, 8, 'At Home', ''),
(132, 10, 'Hobbies and Interest', ''),
(133, 11, 'Entertainments and Sports', ''),
(134, 13, 'Shopping', ''),
(135, 14, 'Holiday Festivals', ''),
(136, 15, 'Holiday Activities', ''),
(137, 12, 'Shops and Commodities', ''),
(138, 17, 'Travel and Tourism', ''),
(139, 16, 'Places and Locations', ''),
(140, 18, 'Sightseeing and Travel Plans', ''),
(141, 19, 'Visit a Doctor and Health  Insurance', ''),
(142, 20, 'Bodybuilding and Environmental Sanitation', ''),
(143, 21, 'Services(1)', ''),
(144, 22, 'Services(2)', ''),
(145, 23, 'Making Friendsand Communication', ''),
(146, 24, 'Political , Legal and Social Lssuses', ''),
(147, 25, 'Work and Posts', ''),
(148, 26, 'Finding a Job', ''),
(149, 27, 'Education', ''),
(150, 29, 'History', ''),
(151, 30, 'Geography', ''),
(152, 28, 'Popular Science', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `readed`
--
ALTER TABLE `readed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `chapter`
--
ALTER TABLE `chapter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '设置主键自增', AUTO_INCREMENT=151;
--
-- 使用表AUTO_INCREMENT `content`
--
ALTER TABLE `content`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键自增', AUTO_INCREMENT=31;
--
-- 使用表AUTO_INCREMENT `readed`
--
ALTER TABLE `readed`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键自增', AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主键自增', AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
