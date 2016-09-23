-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Sep 23, 2016 at 10:49 AM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `aolfdk`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
`id` int(11) NOT NULL,
  `navn` varchar(255) NOT NULL,
  `dato` date NOT NULL,
  `starttid` time NOT NULL,
  `sted` varchar(500) NOT NULL,
  `beskrivelse` varchar(1000) NOT NULL,
  `pris` int(11) NOT NULL,
  `kontakt-email` varchar(255) NOT NULL,
  `kontakt-telefon` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `navn`, `dato`, `starttid`, `sted`, `beskrivelse`, `pris`, `kontakt-email`, `kontakt-telefon`) VALUES
(2, 'DJ Skaaning', '2016-10-30', '22:00:00', 'Billy Booze', 'Kom og få en lapdance med hulapigen Lasse', 2, 'mark@skaaning.dk', 21376512),
(4, 'Pernilles kattetime', '2016-09-28', '12:00:00', 'Nr Vedby', 'Jaaa', 999, 'pernille@sa.dk', 23187622),
(5, 'Mads får en computer', '2016-09-28', '12:00:00', 'Nykøbing', 'Jaaa', 999, 'mads@sa.dk', 23187622),
(6, 'Lasse får en computer', '2016-09-28', '12:00:00', 'Nykøbing', 'Jaaa', 999, 'mads@sa.dk', 23187622),
(7, 'Rasmus Seebach koncert', '2016-09-30', '19:30:00', 'Kulturforsyningen', 'Det bliver en dejlig koncert', 199, 'acsandras@gmail.com', 22957076),
(14, 'Undervisningen slutter om 7 minutter', '2016-09-21', '11:00:00', 'Nykøbing', 'Jubii', 0, 'anac@easj.dk', 22957076);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;