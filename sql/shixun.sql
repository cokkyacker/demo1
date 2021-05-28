-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2020-11-10 10:40:52
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shixun`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `time` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `phone`, `email`, `time`) VALUES
(1, '管理员a', '123456', '13855467951', '1273548263@qq.com', '2020-11-01'),
(2, '管理员b', '123456', '17786542165', '64829735@qq.com', '2020-11-10');

-- --------------------------------------------------------

--
-- 表的结构 `equipment`
--

CREATE TABLE IF NOT EXISTS `equipment` (
  `id` int(4) NOT NULL AUTO_INCREMENT COMMENT '编号',
  `name` varchar(20) NOT NULL COMMENT '名称',
  `state` varchar(30) NOT NULL COMMENT '状态',
  `remarks` varchar(50) DEFAULT NULL COMMENT '备注',
  `model` varchar(20) NOT NULL COMMENT '型号',
  `specs` varchar(20) NOT NULL COMMENT '规格',
  `place` varchar(30) NOT NULL COMMENT '存放地点',
  `admin_id` int(10) NOT NULL COMMENT '管理员编号',
  `time` date NOT NULL COMMENT '创建时间',
  `price` float NOT NULL COMMENT '单价',
  `factory` varchar(20) NOT NULL COMMENT '厂家',
  `factorynumber` varchar(20) NOT NULL COMMENT '出场号',
  `number` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `admin_id` (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `equipment`
--

INSERT INTO `equipment` (`id`, `name`, `state`, `remarks`, `model`, `specs`, `place`, `admin_id`, `time`, `price`, `factory`, `factorynumber`, `number`) VALUES
(1, '设备1', '可借', '无', '戴尔', 'X100', '4-303', 1, '2020-11-10', 8000, '戴尔', '143432', 56),
(2, '设备2', '可借', '无', '联想', 'X558', '3-305', 1, '2020-11-10', 10200, '联想', '678567', 67);

-- --------------------------------------------------------

--
-- 表的结构 `equipmentlease`
--

CREATE TABLE IF NOT EXISTS `equipmentlease` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `state` varchar(100) NOT NULL,
  `number` int(10) NOT NULL,
  `time` date NOT NULL,
  `btime` date NOT NULL,
  `equipment_id` int(10) NOT NULL,
  `student_id` int(10) NOT NULL,
  `teacher_id` int(10) NOT NULL,
  `remark` text NOT NULL,
  `admin_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `equipmentlease`
--

INSERT INTO `equipmentlease` (`id`, `state`, `number`, `time`, `btime`, `equipment_id`, `student_id`, `teacher_id`, `remark`, `admin_id`) VALUES
(1, '已还', 1, '2020-11-10', '2020-11-10', 2, 17990297, 0, '学习', 1);

-- --------------------------------------------------------

--
-- 表的结构 `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `nid` int(4) NOT NULL AUTO_INCREMENT,
  `ntitle` varchar(20) NOT NULL,
  `ncontent` varchar(1000) NOT NULL,
  `toppingstate` varchar(11) NOT NULL DEFAULT '未置顶',
  `ntime` date NOT NULL,
  `admin_id` int(4) NOT NULL,
  `IsOpen` int(11) DEFAULT '0',
  PRIMARY KEY (`nid`),
  UNIQUE KEY `title` (`ntitle`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `notice`
--

INSERT INTO `notice` (`nid`, `ntitle`, `ncontent`, `toppingstate`, `ntime`, `admin_id`, `IsOpen`) VALUES
(1, '第一条新闻', '这是第一条新闻！！！', '未置顶', '2020-11-01', 1, 0),
(2, '一荤一素', '月儿明，风儿轻，可是谁在敲打我的窗棂。', '已置顶', '2020-11-02', 1, 1),
(3, '无问', '你问风为什么托着候鸟飞翔，却又吹得让他慌张；\r\n你问雨为什么滋养万物生长，却又湿透他的衣裳；\r\n你问他为什么亲吻他的伤疤，却又不能带他回家；\r\n你问我为什么还是不敢放下，明智听不到回答...', '未置顶', '2020-11-03', 2, 0),
(4, '一路山程', '山谷的薄雾吻着烟霞；\r\n枯叶之下藏多少情话；\r\n划破天空的归鸟啊；\r\n它不问，你不答...', '未置顶', '2020-11-06', 2, 0);

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `number` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `major` varchar(30) NOT NULL,
  `QQnumber` varchar(15) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `time` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `number` (`number`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`id`, `number`, `name`, `password`, `major`, `QQnumber`, `phone`, `email`, `time`) VALUES
(1, 17990297, '罗羽轩', '17990297', '数字媒体技术', '951045726', '17502267781', '951045726@qq.com', '2020-11-07'),
(2, 17990319, '王雨宸', '17990319', '数字媒体技术', '', NULL, NULL, '2020-11-09'),
(3, 17990307, '唐淑敏', '17990307', '数字媒体专业', '', NULL, NULL, '2020-11-10');

-- --------------------------------------------------------

--
-- 表的结构 `studentinformation`
--

CREATE TABLE IF NOT EXISTS `studentinformation` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` varchar(500) NOT NULL,
  `state` varchar(10) NOT NULL,
  `anser` varchar(500) NOT NULL,
  `student_id` int(4) NOT NULL,
  `student_cno` int(11) NOT NULL,
  `admin_id` int(4) NOT NULL,
  `time` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=gbk AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `studentinformation`
--

INSERT INTO `studentinformation` (`id`, `title`, `content`, `state`, `anser`, `student_id`, `student_cno`, `admin_id`, `time`) VALUES
(1, '3-305的设备坏了', '3-305教室的6号电脑鼠标没有反应', '已回复', '收到', 1, 17990297, 1, '2020-11-10'),
(2, '设备反馈', '4-303教室的23号电脑开不了机。', '未回复', '', 1, 17990297, 0, '2020-11-10');

-- --------------------------------------------------------

--
-- 表的结构 `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `number` int(10) NOT NULL,
  `name` varchar(10) CHARACTER SET gbk NOT NULL,
  `password` varchar(20) CHARACTER SET gbk NOT NULL,
  `qqnumber` varchar(15) CHARACTER SET gbk NOT NULL,
  `phone` varchar(20) CHARACTER SET gbk NOT NULL,
  `email` varchar(20) CHARACTER SET gbk DEFAULT NULL,
  `time` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `number` (`number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `teacher`
--

INSERT INTO `teacher` (`id`, `number`, `name`, `password`, `qqnumber`, `phone`, `email`, `time`) VALUES
(1, 111, '罗才喜', '111', '20653607', '13563568235', '20653607@qq.com', '2020-11-08'),
(2, 222, '马斌', '222', '644130407', '17538859274', '644130407@qq.com', '2020-11-09'),
(3, 333, '路丹彤', '333', '', '', NULL, '2020-11-10');

-- --------------------------------------------------------

--
-- 表的结构 `teacherinformation`
--

CREATE TABLE IF NOT EXISTS `teacherinformation` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET gbk NOT NULL,
  `content` varchar(500) CHARACTER SET gbk NOT NULL,
  `state` varchar(10) CHARACTER SET gbk NOT NULL,
  `anser` varchar(500) CHARACTER SET gbk NOT NULL,
  `teacher_id` int(10) NOT NULL,
  `admin_id` int(10) NOT NULL,
  `time` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
