-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- 생성 시간: 20-02-07 16:53
-- 서버 버전: 5.7.29
-- PHP 버전: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `myrecipe`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `member`
--

CREATE TABLE `member` (
  `id` char(20) NOT NULL,
  `pass` char(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `birth` date NOT NULL,
  `sex` tinyint(1) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `grade` char(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `member`
--

INSERT INTO `member` (`id`, `pass`, `name`, `birth`, `sex`, `email`, `grade`) VALUES
('willlead', '123', 'hong', '2020-01-30', 1, 'willlead@naver.com', 'normal'),
('willlead87', '123', 'hong', '2020-02-10', 1, 'willlead@naver.com', 'normal');

-- --------------------------------------------------------

--
-- 테이블 구조 `notify`
--

CREATE TABLE `notify` (
  `serial` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `author` mediumtext NOT NULL,
  `end_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `view_cnt` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `notify`
--

INSERT INTO `notify` (`serial`, `subject`, `content`, `author`, `end_date`, `view_cnt`) VALUES
(2, '공지고이2', '123', '관리자', '2020-01-29 00:00:00', 0),
(3, '공지3', '32323', '관리자', '2020-01-29 00:00:00', 0);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `notify`
--
ALTER TABLE `notify`
  ADD PRIMARY KEY (`serial`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `notify`
--
ALTER TABLE `notify`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
