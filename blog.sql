-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2021 at 04:47 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_news`
--

CREATE TABLE `add_news` (
  `news_id` int(100) NOT NULL,
  `news_cat` int(100) NOT NULL,
  `news_head` varchar(255) NOT NULL,
  `news_body` text NOT NULL,
  `news_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_news`
--

INSERT INTO `add_news` (`news_id`, `news_cat`, `news_head`, `news_body`, `news_img`) VALUES
(1, 1, 'India wins second test by eight wickets to level series', 'MELBOURNE, Australia (AP) — India completed one of the greatest comebacks in cricket history on Tuesday by claiming a memorable eight-wicket win over Australia on the fourth day of the second test at the Melbourne Cricket Ground.\r\n\r\nIndia’s comprehensive victory, led brilliantly by stand-in skipper and man of the match Ajinkya Rahane, levels the four-match series at one-all.\r\n\r\nThe touring team’s remarkable win comes after India scored a national-record low total of 36 in an eight-wicket loss in the first test in Adelaide just over a week ago.\r\n\r\nChasing 70 to win on Tuesday after bowling Australia out for 200 in its second innings, India comfortably reached 70-2 off 15.5 overs before the tea break.\r\n\r\nLeading the side in the absence of star batsman and captain Virat Kohli, who has returned home to India to be with his wife for the birth of their first child, Rahane’s calmness and tactical skills helped India stage a form reversal that left coach Ravi Shastri in awe of his side.\r\n\r\n“This will go down in the annals of world cricket as one of the great comebacks in the history of the game,” Shastri said. “We were blown away in the second innings in one hour (scoring 36 in Adelaide). But you get up and fight, which we did in this second test match.\r\n\r\n“The boys deserve all the credit for the character issue, real character.”\r\n\r\nShastri described Rahane, who scored 112 and 27 not out and steered the side superbly in the field, as “a very shrewd leader”.\r\n\r\n“His calm composure out there in the middle helped the bowlers as well. He has a calming influence,” Shastri said. “Both are good readers on the game. Virat (Kohli) is very passionate. Virat is more in your face.”\r\n\r\nRahane fittingly hit the winning run for India, while opener Shubman Gill completed a fine debut with scores of 45 and 35 not out.\r\n\r\nIndia’s pace bowler Mohammed Siraj led his side off the field at lunch after taking 2-40 and 3-37 on debut, including claiming two of the four wickets to fall in Tuesday’s opening session.\r\n\r\n', 'india winning pic.jpg'),
(2, 3, 'pollution', 'strdhj,kljg.kj./ljk.hjk.hk.jh.h.kh,gu,g', 'images (9).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `news_id` int(100) NOT NULL,
  `news_cat` int(100) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(100) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` varchar(255) NOT NULL,
  `customer_city` varchar(255) NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news_catagory`
--

CREATE TABLE `news_catagory` (
  `news_cat_id` int(100) NOT NULL,
  `news_cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_catagory`
--

INSERT INTO `news_catagory` (`news_cat_id`, `news_cat_title`) VALUES
(1, 'CRICKET'),
(2, 'FOOTBALL'),
(3, 'HEALTH'),
(4, 'ENTERTAINMENT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_news`
--
ALTER TABLE `add_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `news_catagory`
--
ALTER TABLE `news_catagory`
  ADD PRIMARY KEY (`news_cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_news`
--
ALTER TABLE `add_news`
  MODIFY `news_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_catagory`
--
ALTER TABLE `news_catagory`
  MODIFY `news_cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
