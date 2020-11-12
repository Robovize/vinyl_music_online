-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2019 at 04:26 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musiconline`
--

-- --------------------------------------------------------

--
-- Table structure for table `item_table`
--

CREATE TABLE `item_table` (
  `item_id` int(10) NOT NULL,
  `artist` varchar(50) NOT NULL,
  `album` varchar(100) NOT NULL,
  `year` int(30) NOT NULL,
  `genre` varchar(30) NOT NULL,
  `album_cover` varchar(100) NOT NULL,
  `date_added` date NOT NULL,
  `price` decimal(4,2) NOT NULL,
  `user_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_table`
--

INSERT INTO `item_table` (`item_id`, `artist`, `album`, `year`, `genre`, `album_cover`, `date_added`, `price`, `user_id`) VALUES
(40, 'Slayer', 'Reign In Blood', 1986, 'Rock', 'images/ReignInBlood.jpeg', '2019-10-28', '27.00', '1'),
(41, 'Slayer', 'Hell Awaits', 1985, 'Rock', 'images/HellAwaits.jpeg', '2019-10-28', '33.00', '2'),
(42, 'Slayer', 'Show No Mercy', 1983, 'Rock', 'images/ShowNoMercy.jpeg', '2019-10-28', '55.00', '2'),
(43, 'Slayer', 'Seasons In The Abyss', 1990, 'Rock', 'images/SeasonsInTheAbyss.jpeg', '2019-10-28', '54.00', '1'),
(44, 'Slayer', 'Undisputed Attitude', 1985, 'Rock', 'images/UndisputedAttitude.jpeg', '2019-10-28', '99.99', '2'),
(45, 'Slayer', 'Divine Intervention', 1987, 'Rock', 'images/DivineIntervention.jpeg', '2019-10-28', '99.99', '1'),
(47, 'Slayer', 'Repentless', 1984, 'Rock', 'images/Repentless.jpeg', '2019-10-28', '34.00', '3'),
(48, 'Slayer', 'Live Undead', 1989, 'Rock', 'images/LiveUndead.jpeg', '2019-10-28', '34.00', '3'),
(49, 'Pink Floyd', 'A Saucerful Of Secrets', 1968, 'Rock', 'images/ASaucerfulOfSecrets.jpeg', '2019-11-12', '11.00', '3'),
(50, 'Pink Floyd', 'Ummagumma', 1969, 'Rock', 'images/Ummagumma.jpeg', '2019-11-12', '23.00', '3'),
(51, 'Pink Floyd', 'The Piper At The Gates Of Dawn', 1970, 'Rock', 'images/ThePiperAtTheGatesOfDawn.jpeg', '2019-11-12', '7.00', '3'),
(52, 'Pink Floyd', ' Soundtrack From The Film', 1971, 'Rock', 'images/SoundtrackFromTheFilm.jpeg', '2019-11-12', '8.00', '1'),
(53, 'Pink Floyd', 'Atom Heart Mother', 0, 'Rock', 'images/ABBA.jpg', '2019-11-12', '7.00', '1'),
(54, 'The Beatles', 'With The Beatles', 1963, 'Rock', 'images/WithTheBeatles.jpeg', '2019-11-28', '9.00', '1'),
(55, 'The Beatles', 'Please Please Me', 1964, 'Rock', 'images/PleasePleaseMe.jpeg', '2019-10-28', '99.99', '1'),
(56, 'The Beatles', 'Long Tall Sally', 1965, 'Rock', 'images/LongTallSally.jpeg', '2019-10-15', '44.00', '1'),
(57, 'The Beatles', 'Something New', 1966, 'Rock', 'images/SomethingNew.jpeg', '2019-10-15', '32.00', '2'),
(58, 'The Beatles', 'Beatles For Sale', 1967, 'Rock', 'images/BeatlesForSale.jpeg', '2019-10-15', '12.00', '2'),
(59, 'Led Zeppelin', 'Presence', 1976, 'Rock', 'images/Presence.jpg', '2019-10-15', '31.00', '2'),
(60, 'Led Zeppelin', 'In Through The Out Door ', 1969, 'Rock', 'images/InThroughTheOutDoor.jpg', '2019-10-28', '67.00', '2'),
(61, 'Led Zeppelin', 'Coda ', 1978, 'Rock', 'images/Coda.jpg', '2019-09-16', '43.00', '4'),
(62, 'Led Zeppelin', 'Led Zeppelin', 1968, 'Rock', 'images/LedZeppelin.jpg', '2019-09-16', '98.00', '4'),
(63, 'Led Zeppelin', 'Led Zeppelin II', 1969, 'Rock', 'images/LedZeppelinII.jpg', '2019-09-16', '23.00', '4'),
(64, 'Daft Punk', 'Homework', 1988, 'Pop', 'images/Homework.jpg', '2019-09-28', '45.00', '4'),
(65, 'Daft Punk', 'Discovery', 1978, 'Pop', 'images/Discovery.jpg', '2019-10-17', '12.00', '5'),
(66, 'Daft Punk', 'Random Access Memories', 1987, 'Pop', 'images/RandomAccessMemories .jpg', '2019-04-28', '4.00', '5'),
(67, 'Madonna', 'Madonna', 1994, 'Pop', 'images/Madonna.jpg', '2019-04-05', '6.00', '5'),
(68, 'Madonna', 'Like A Virgin', 1990, 'Pop', 'images/LikeAVirgin.jpg', '2019-04-01', '5.00', '5'),
(69, 'Madonna', 'Like A Prayer', 1989, 'Pop', 'images/LikeAPrayer.jpg', '2019-10-26', '1.00', '1'),
(70, 'Michael Jackson', 'Ben', 1988, 'Pop', 'images/Ben.jpg', '2019-01-23', '2.00', '2'),
(71, 'Michael Jackson', 'Off The Wall', 1997, 'Pop', 'images/OffTheWall.jpg', '2020-10-22', '76.00', '3'),
(72, 'Michael Jackson', 'Thriller', 2000, 'Pop', 'images/Thriller.jpg', '2018-12-18', '44.00', '4'),
(73, 'ABBA', 'Ring Ring', 1979, 'Pop', 'images/RingRing.jpg', '2018-10-11', '32.00', '5'),
(74, 'ABBA', 'ABBA', 1980, 'Pop', 'images/ABBA.jpg', '2028-10-04', '11.00', '5'),
(75, 'ABBA', 'Arrival', 1983, 'Pop', 'images/Arrival.jpg', '2018-12-07', '32.00', '5'),
(95, 'Slayer', 'God Hates Us All', 2018, 'Rock', 'images/GodHatesUsAll.jpeg', '2019-11-13', '43.00', '3'),
(96, 'madonna', 'South Of Heaven', 45, 'Rock', 'images/Ummagumma.jpeg', '2019-11-20', '66.00', '7'),
(97, 'Robert Vesely', 'Me, me, me and only me', 1998, 'Rock', 'images/ShowNoMercy.jpeg', '2019-11-22', '99.99', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(30) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `firstName`, `lastName`, `email`, `phone`, `password`) VALUES
(1, 'aa', 'aa', 'aa@aa.aa', 'aa', '$argon2i$v=19$m=1024,t=2,p=2$U2UxNTJqa200aEVXWFlRTA$/VLQzz31nL3i7eIXZCN6CIsymXmCqDM/aGiiLmO6ky4'),
(2, 'bb', 'bb', 'bb@bb.bb', 'bb', '$argon2i$v=19$m=1024,t=2,p=2$MnJ2aFQvbzdvSHBNWVBTSg$FIQcu5oI3Ge4ekmlE35KQx/pcLQWKAN3oEY83kqYvyE'),
(3, 'cc', 'cc', 'cc@cc.cc', 'cc', '$argon2i$v=19$m=1024,t=2,p=2$eVlwQ3RvRXouSzlVOXk0VQ$66RfGVSkNc8tltVe9JfiOYTqCiydtMlIUFPJaDObyXY'),
(4, 'dd', 'dd', 'dd@dd.dd', 'dd', '$argon2i$v=19$m=1024,t=2,p=2$bFZDUW9yVUZBNS91a1ZOTQ$nreV+NSXBkRPv/d31ducx6W3R3qN42/j5TU3vpal4Y8'),
(5, 'Robert', 'Vesely', 'zz@zz.zz', '111 111 111', '$argon2i$v=19$m=1024,t=2,p=2$aW5DUUVvZHBOaWJua3dtQg$TYlpVqt648tIJm8txvt9nXbon3CmtvsBjW+OLlSzC9M'),
(6, 'ee', 'ee', 'ee@ee.ee', '44218971584', '$argon2i$v=19$m=1024,t=2,p=2$VFhicHEvQVVoU0JKOXk5YQ$F7Vvql/HNlUCl9H2yFUid9BLoGn1YuyPo792FaWUh2o'),
(7, 'olo', 'olo', 'olo@olo.olo', '555', '$argon2i$v=19$m=1024,t=2,p=2$VllvdFJqUkxhVTREL251WQ$jm197NqPp2Hfm7uCnqac8hShVs/NXrTwTg4SjK8fxl4'),
(8, 'anything\' OR \'x\'=\'x', 'anything\' OR \'x\'=\'x', 'a@a.a', 'anything\' OR \'x\'=\'x', '$argon2i$v=19$m=1024,t=2,p=2$TGxBOXlpaEx3b203dHNqMw$u5SB3JJnKini+7CGcJdAs/i/Wc7DSbk4Va8n2ViVIHo'),
(9, 'Tony', 'Master', 'Tony@home.co.uk', '123', '$argon2i$v=19$m=1024,t=2,p=2$YmRHbTJWbW5VaC9qeGVOcg$4Qi0gqJLhTZ3AalXGGwv9P7qXZAliQvVJK/tiriyMnM'),
(10, 'Thomas', 'Edison', 'thomas@edison.co.uk', 'abc123', '$argon2i$v=19$m=1024,t=2,p=2$RGQ2T3pMMTUwMG83dS9DaA$1LXMYxrY/qsp922mtocslhSxAyaU2usJsnndNPUQFxE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item_table`
--
ALTER TABLE `item_table`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item_table`
--
ALTER TABLE `item_table`
  MODIFY `item_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
