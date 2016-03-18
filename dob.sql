-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2015 at 07:51 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dob`
--

-- --------------------------------------------------------

--
-- Table structure for table `gen_table`
--

DROP TABLE IF EXISTS `gen_table`;
CREATE TABLE IF NOT EXISTS `gen_table` (
  `gen_id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `gen_content` text NOT NULL,
  `gen_img` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`gen_id`,`gen_img`,`type`),
  FULLTEXT KEY `gen_content` (`gen_content`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `gen_table`
--

INSERT INTO `gen_table` (`gen_id`, `gen_content`, `gen_img`, `type`) VALUES
(1, 'Mature/World War II Generation - Members of the Mature/WWII Generation ( born before 1946 ) are 67 years or older. Although most members have retired from the labor force, they comprise a wealth of valuable knowledge and experience. Many believe this generation views work as an obligation: they respect authority, take rational approaches, and produce quality work.', 'img-pic-1.jpg', 'M'),
(2, 'Baby Boomers ( born between 1946 and 1965 ) are approximately between the ages of 47 and 66. The older members have begun to retire from the labor force. This generation occupies most of the senior-level management roles.	 They are often stereotyped as extremely focused on work, and they possess a strong work ethic and desire recognition for their efforts.', 'img-pic-2.jpg', 'B'),
(3, 'Generation X ( born between 1966 and 1980 ) is approximately between the ages of 32 and 46. The oldest members could be entering senior-level management roles while the younger members entering/approaching mid-career 	and senior-level supervisory roles. Many members of Generation X embrace diversity9 and entrepreneurship.', 'img-pic-3.jpg', 'X'),
(4, 'Generation Y or the Millennials ( born between 1981 and 2000 ) are approximately between the ages of 12 and 31. The older members are in the labor force while the younger members are still completing their formal education. This generation is known for being optimistic and goal-oriented: they are known for enjoying collaboration and multitasking, are comfortable embracing emerging technologies, and appreciate meaningful work.', 'img-pic-4.jpg', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `spec_table`
--

DROP TABLE IF EXISTS `spec_table`;
CREATE TABLE IF NOT EXISTS `spec_table` (
  `spec_id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `spec_content` text NOT NULL,
  `spec_img` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`spec_id`,`spec_img`,`type`),
  FULLTEXT KEY `spec_content` (`spec_content`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `spec_table`
--

INSERT INTO `spec_table` (`spec_id`, `spec_content`, `spec_img`, `type`) VALUES
(1, 'LeBron Raymone James born December 30, 1984) is an American professional basketball player who currently plays for the Cleveland Cavaliers of the National Basketball Association (NBA). He has started at the small forward and power forward positions. James has won two NBA championships (2012, 2013), four NBA Most Valuable Player Awards (2009, 2010, 2012, 2013), two NBA Finals MVP Awards (2012, 2013), two Olympic gold medals (2008, 2012), an NBA scoring title (2008), and the NBA Rookie of the Year Award (2004). He has also been selected to 11 NBA All-Star teams, 11 All-NBA teams, and six All-Defensive teams, and is the Cavaliers'' all-time leading scorer.		', 'img-pic-1.jpg', 'M'),
(2, 'David William Donald Cameron MP born 9 October 1966) is a British politician who has served as the Prime Minister of the United Kingdom since 2010, as Leader of the Conservative Party since 2005 and as the Member of Parliament (MP) for Witney since 2001.', 'img-pic-2.jpg', 'B'),
(3, 'Mark Elliot Zuckerberg (born May 14, 1984) is an American computer programmer and Internet entrepreneur. He is best known as one of five co-founders of the social networking website Facebook. Zuckerberg is the chairman and chief executive of Facebook, Inc.His personal wealth, as of November 2015, is estimated to be $47.5 billion.Zuckerberg receives a one-dollar salary as CEO of Facebook.', 'img-pic-3.jpg', 'X'),
(4, 'Justin Pierre James Trudeau PC MP (born December 25, 1971) is a Canadian politician who is the 23rd and current Prime Minister of Canada, as well as the Leader of the Liberal Party. He is the second-youngest Canadian Prime Minister after Joe Clark and, as the eldest son of former Prime Minister Pierre Trudeau, is also the first child of a previous Prime Minister to hold the post.', 'img-pic-4.jpg', 'Y'),
(6, 'Mature/World War II Generation - Members of the Mature/WWII Generation ( born before 1946 ) are 67 years or older. Although most members have retired from the labor force, they comprise a wealth of valuable knowledge and experience. Many believe this generation views work as an obligation: they respect authority, take rational approaches, and produce quality work.				', 'img-pic-1.jpg', 'M'),
(7, 'Baby Boomers ( born between 1946 and 1965 ) are approximately between the ages of 47 and 66. The older members have begun to retire from the labor force. This generation occupies most of the senior-level management roles.	 They are often stereotyped as extremely focused on work, and they possess a strong work ethic and desire recognition for their efforts.', 'img-pic-2.jpg', 'B'),
(8, 'Generation X ( born between 1966 and 1980 ) is approximately between the ages of 32 and 46. The oldest members could be entering senior-level management roles while the younger members entering/approaching mid-career 	and senior-level supervisory roles. Many members of Generation X embrace diversity9 and entrepreneurship.	', 'img-pic-3.jpg', 'X'),
(9, 'Generation Y or the Millennials ( born between 1981 and 2000 ) are approximately between the ages of 12 and 31. The older members are in the labor force while the younger members are still completing their formal education. This generation is known for being optimistic and goal-oriented: they are known for enjoying collaboration and multitasking, are comfortable embracing emerging technologies, and appreciate meaningful work.', 'img-pic-4.jpg', 'Y');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
