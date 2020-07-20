-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2020 年 07 月 01 日 13:11
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `test`
--

-- --------------------------------------------------------

--
-- 表的结构 `votetitle`
--

CREATE TABLE IF NOT EXISTS `votetitle` (
  `titleid` int(10) NOT NULL,
  `votetitle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `votetitle`
--

INSERT INTO `votetitle` (`titleid`, `votetitle`) VALUES
(1, '您认为本网站还有那些要做');

-- --------------------------------------------------------

--
-- 表的结构 `voto`
--

CREATE TABLE IF NOT EXISTS `voto` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `titleid` int(10) DEFAULT NULL,
  `item` varchar(50) DEFAULT NULL,
  `count` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- 转存表中的数据 `voto`
--

INSERT INTO `voto` (`id`, `titleid`, `item`, `count`) VALUES
(26, 1, '林俊杰', 12),
(27, 1, '萧敬腾', 27),
(28, 1, '啊实打实', 5),
(29, 1, '123 ', 8);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
