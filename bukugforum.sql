-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2017 at 02:52 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `buk_ug_forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `discussions`
--

CREATE TABLE IF NOT EXISTS `discussions` (
  `ds_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `ds_title` varchar(250) NOT NULL,
  `ds_category` varchar(100) NOT NULL,
  `ds_body` text NOT NULL,
  `ds_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ds_is_active` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discussions`
--

INSERT INTO `discussions` (`ds_id`, `user_id`, `ds_title`, `ds_category`, `ds_body`, `ds_created_at`, `ds_is_active`) VALUES
(1, 2, 'Testing  the  add Controller method', 'Technology', 'Testing  the  add Controller method Testing  the  add Controller method Testing  the  add Controller method Testing  the  add Controller', '2017-10-10 18:41:25', 0),
(2, 1, 'The media: we don''t deserve this', 'Nigeria', 'The media and the young mind, our minds are influence by what we see and hear.The media is playing a big role in influencing this\r\nminds ranging from print to tv, radion houses and new media[social media].\r\nam particlular consequence about the new media as we all belive it has democrazise their we share and get information.\r\nthe moverment of unsolicited content is fast spread cross vertical in a thin of an air with no control over whos seee it \r\nthis is how our young mind are influence to installing all kind of negative though, do we deverse this ?\r\nsome of this content creator and media outlet beleive that it only through that they can get our attention, as it one of\r\nthe vital element in ensuring the stay in the business.\r\n\r\nbut if i may ask, does it have to be this way ?\r\n\r\n\r\nthe distribute on air are not in any way beneficial to we the youth, xcept maybe for the politics and happening around the \r\ncountry, after  that nothing is happening toward enlightening our about the opportorturnities around and how to leverage on them\r\nand stand our own.\r\n\r\ni stand to be corrected, from my last research the is very few  media outlet that has a program shedule where technology hap\r\npenning are discussed. what a partetic situation we find our self, we goverment is shouting about going to the land and \r\nnone of this media out is orgaining a campaign centre around englightening our youth on the oppoutinties in agricultureand the likes\r\nand yet we they all expect us to go back to the land  without proper information on how to go about it, this reponsibility lies in the hands of media outlet', '2017-10-10 18:43:55', 0),
(3, 2, 'Two approach to Restructuring of Nigieria', 'Nigeria', 'The other day i was listening to a fm station program and they are discussing way we can restructure\r\nnigeria out of this presnet state, all the point brough out by the duscussand were valid, about going back\r\nto regional system, stop depending on the central govenment for the share of the national cake and quater system issues\r\nwhich makes some region lazy.\r\n\r\nBut they is one thing they all felt to mention which is our mind, restructing of nigeria start from our\r\nmind, clerk in the oofice will not want to pass your file until you see him, contract will not \r\nbe award to you until you have connection to someone who know someone,your people in the village want you to \r\nfetch their own share the moment they hear you have resume office as minister or director\r\n and the worst of it all, people see this thing as normal and if you don''t fellow the norm, they will think you are not normal and see you as\r\na thread to their suvival.\r\n\r\npeople literally suvive and live on under cuuruption, even our religoius house are not left behind, we hide \r\nunder religious and ethnic semetiment in order to loot our resouces, competency is not what we\r\nlooking for when appointing public offices, but base on regoin whether the person is qualified or\r\nnot, in as much as he represent the intrest his people, there is no problem.', '2017-09-16 21:22:49', 0),
(5, 1, 'the entrepreneur are till waiting for an investor', 'Business', 'this problem is not perculia to kaduna, it is more or less like everywhere, must people like to seat down on their ideas\r\n  wating for that miracle investor to put his money into their idea. you have to getup and do your home work on your idea\r\n  and then start no matter how small it is, GLOO the popular glosories ecommerce startup started out in their in street, \r\n  who said you can not satrt right were you are.', '2017-09-16 21:22:41', 0),
(6, 2, 'The developers are in the hideout', 'Media', 'i know must developer like doing solo project and take the hole credit for it, but if we re relly seroius about this\r\n   thing, then our developer must come out from their hideout, and join hand together with out passionate enterprenue\r\n   in order to build innovate solution that that will change the way we live.', '2017-09-16 21:22:37', 0),
(7, 3, 'Nobody want to take the first bullet.', 'Technology', 'the way i see things here am begining to think that nobody want o the first ot plungin with an innovative ide that will \r\n   distrube the tradition wy of doing things, mybe of because of the the fear fctor of 2 out of 10 startup sucess in the long \r\n   run or because of the kind of enviroment we find ourself which has very low acceptance of technology innovtions.\r\n   if everybody is waiting for thst one person to give it shot before trying then we have long wy to go\r\n   so i ask who is that one person that is ready to float his tech startup and the take the first bullet ?', '2017-09-16 21:21:54', 0),
(8, 5, 'Adventurious  Adventurious', 'Technology', 'Adventurious  Adventurious Adventurious  Adventurious Adventurious  Adventurious  Adventurious Adventurious  Adventurious', '2017-11-11 09:58:16', 0);

-- --------------------------------------------------------

--
-- Table structure for table `replys`
--

CREATE TABLE IF NOT EXISTS `replys` (
  `re_id` int(100) NOT NULL,
  `ds_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `re_body` text NOT NULL,
  `re_create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `re_active` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replys`
--

INSERT INTO `replys` (`re_id`, `ds_id`, `user_id`, `re_body`, `re_create_time`, `re_active`) VALUES
(1, 2, 1, 'testing testing testing', '2017-11-24 22:10:15', 1),
(2, 1, 2, 'Good  To Gooooooo', '2017-10-10 18:48:55', 1),
(3, 3, 2, 'dddd', '2017-11-11 16:43:01', 1),
(5, 7, 3, 'Good Work', '2017-11-19 11:48:04', 1),
(6, 7, 3, 'Not Nice to Hear', '2017-11-19 11:48:23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(100) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `reg_no` varchar(50) NOT NULL,
  `user_pass` varchar(200) NOT NULL,
  `about_me` text NOT NULL,
  `user_create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_is_active` int(11) NOT NULL,
  `user_level` int(11) NOT NULL,
  `user_img` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `email`, `user_name`, `reg_no`, `user_pass`, `about_me`, `user_create_at`, `user_is_active`, `user_level`, `user_img`) VALUES
(1, 'Mubarak M Aminu', 'mubarakaminu340@gmail.com', 'mubarak23', 'ENG/14/CIT/00111', 'pass123', 'technology blogger at techarewa.com and a back end php/laravel and python/django developer', '2017-11-24 22:17:53', 0, 0, 'mubarak.jpg'),
(2, 'Admin', 'admin@gmail', 'admin23', '', 'admin23', 'this is the overoll super admin', '2017-08-24 09:37:09', 0, 0, ''),
(3, 'Halima', 'halima@gmail.com', 'halima23', 'SMS/15/IRS/00111', 'pass123', 'a Friend who understand me a Friend who understand me\r\na Friend who understand me a Friend who understand me', '2017-11-20 23:25:43', 0, 0, 'name.jpg'),
(5, 'Hakeem', 'hakeem@gmail.com', 'ToMuch', 'cit/11/com/00222', 'pass123', 'Adventurious  Adventurious  Adventurious  Adventurious  Adventurious  Adventurious', '2017-11-11 09:57:28', 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `discussions`
--
ALTER TABLE `discussions`
  ADD PRIMARY KEY (`ds_id`);

--
-- Indexes for table `replys`
--
ALTER TABLE `replys`
  ADD PRIMARY KEY (`re_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `discussions`
--
ALTER TABLE `discussions`
  MODIFY `ds_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `replys`
--
ALTER TABLE `replys`
  MODIFY `re_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
