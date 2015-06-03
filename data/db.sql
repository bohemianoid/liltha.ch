-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 03, 2015 at 11:51 AM
-- Server version: 5.5.40-cll
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lilthach_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `description`) VALUES
(1, 'Ballett', 'Anfängerkurs für ballettinteressierte Erwachsene ab 16 Jahren mit wenig oder keinen Vorkenntnissen. Der Kurs richtet sich speziell auch an Tangotänzer, die ihre Haltung beim Tanzen verbessern möchten. Die Lektion setzt sich aus einem Teil an der Stange und einem Teil im Zentrum zusammen.'),
(2, 'Modern Dance', 'Der Kurs richtet sich an Anfänger bis Mittelstufe. Der Schwerpunkt liegt im Finden und Stabilisieren der Körperachse und dem bewussten Wahrnehmen des Körpers beim Tanzen. Claudia Zimmermann arbeitet mit Elementen aus der Grahamtechnik. Kontrollierte Kraft wie auch Weichheit in den Bewegungen wird durch die Arbeit mit Gegenposition und Kontraktion erreicht.'),
(3, 'Tango Argentino', 'Tangokurs für alle Tangointeressierten. Unsere Kurse können alleine oder zu zweit besucht werden. Alle lernen die Rolle des Führenden sowie des Geführten. Dadurch erreichen wir, dass sich die Tänzer-/innen unabhängig vom Geschlecht und Rolle frei und dynamisch in der Tangowelt bewegen können. Wir arbeiten stark mit den Grundlagen des Tango Argentinos, deshalb können unsere Kurse von Anfängern bis Mittelstufe besucht werden, aber auch Fortgeschrittene, die ihre Grundlagen festigen wollen oder mal die „andere“ Rolle kennenlernen möchten, sind herzlich willkommen.'),
(4, 'Practica', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `day`
--

CREATE TABLE IF NOT EXISTS `day` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shorthand` varchar(2) NOT NULL,
  `name` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `day`
--

INSERT INTO `day` (`id`, `shorthand`, `name`) VALUES
(1, 'Mo', 'Montag'),
(2, 'Fr', 'Freitag');

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE IF NOT EXISTS `lesson` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_course` int(11) NOT NULL,
  `fk_day` int(11) NOT NULL,
  `time_start` varchar(5) NOT NULL,
  `time_end` varchar(5) NOT NULL,
  `period_start` varchar(9) NOT NULL,
  `period_end` varchar(9) DEFAULT NULL,
  `fk_place` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `registration_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lesson_FI_1` (`fk_course`),
  KEY `lesson_FI_2` (`fk_day`),
  KEY `lesson_FI_3` (`fk_place`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`id`, `fk_course`, `fk_day`, `time_start`, `time_end`, `period_start`, `period_end`, `fk_place`, `price`, `registration_url`) VALUES
(1, 1, 2, '10.00', '11.30', '01.Jan.14', NULL, 2, 160, NULL),
(2, 2, 2, '12.00', '13.30', '18.Okt.13', NULL, 1, 160, NULL),
(3, 3, 2, '14.00', '15.15', '18.Okt.13', NULL, 1, 160, NULL),
(4, 3, 2, '17.30', '18.45', '18.Okt.13', '13.Dez.13', 3, NULL, 'http://www.unilu.ch/deu/599108148366event_%5Bid%5D.html'),
(5, 4, 2, '15.15', '17.00', '18.Okt.13', NULL, 1, NULL, NULL),
(6, 4, 1, '21.00', '23.00', '18.Okt.13', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lesson_to_teacher`
--

CREATE TABLE IF NOT EXISTS `lesson_to_teacher` (
  `fk_lesson` int(11) NOT NULL,
  `fk_teacher` int(11) NOT NULL,
  PRIMARY KEY (`fk_lesson`,`fk_teacher`),
  KEY `lesson_to_teacher_FI_2` (`fk_teacher`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lesson_to_teacher`
--

INSERT INTO `lesson_to_teacher` (`fk_lesson`, `fk_teacher`) VALUES
(1, 1),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(3, 3),
(4, 3),
(5, 3),
(6, 4);

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE IF NOT EXISTS `place` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id`, `name`, `address`) VALUES
(1, 'Sousol', 'Baselstrasse 13, Luzern'),
(2, 'Alessgym', 'Rösslimattstrasse 37, Luzern'),
(3, 'Wellness-/ Tanzraum', 'Zürichstrasse 31, Luzern');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `portrait_image` varchar(255) DEFAULT NULL,
  `bio` text,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `first_name`, `last_name`, `portrait_image`, `bio`, `url`) VALUES
(1, 'Alessandro', 'Pitzalis', NULL, NULL, 'http://www.alessgym.ch/'),
(2, 'Claudia', 'Zimmermann', NULL, '<p>Zum Tanzen kam ich über den Tango, den ich vor Jahren kennen lernte, als ich in Basel arbeitete und es da eine Milonga gab. Die Musik, welche ich eigentlich schon aus der Krippe kannte, berührte mich sehr.\nErst Jahre später machte ich meine ersten Tangoschritte und reiste dann in der ganzen Schweiz herum zum Tanzen. \n2004 zog es mich nach Buenos Aires, nur für ein halbes Jahr, dachte ich, um die Kultur dieser Stadt und die Wurzeln des Tangos kennen zu lernen. Daraus wurden aber fast 6 Jahre, zuerst arbeitete ich als Assistentin im Kulturcenter Konex, später dann an diversen Orten als Lehrerin, tanzte teilweise in Cenashows als Vertretung und in einem Strassenspektakel mit Livemusik.</p>\n<p>In der ganzen Zeit in Buenos Aires fing ich mich immer mehr auch für Tanz im allgemeinen zu Interessieren, weshalb ich dann eine Moderndanceschule (3 Jahre, täglich) machte und dann frei weiterhin bei diversen Lehrern Tanz studierte. \nSeit 2011 bin ich nun auch wieder in einer Ausbildung zur Yogalehrerin.</p>\n<p>Nun bin ich seit 2010 wieder in der Schweiz am Unterrichten. \nMeine Stunden haben den Schwerpunkt in der Technik sowohl im Modern als auch im Tango. Denn mit einer klaren Basis gelingt es uns einfacher anspruchsvollere Schrittfolgen und Serien zu tanzen.</p>', 'http://claud.thebc.ch'),
(3, 'Franziska', 'Fässler', NULL, '<p>Im 2006 kam ich durch eine Filmszene, die mich faszinierte, zum Tango. Ich tanzte für einige Zeit sehr intensiv und nahm zusätzlich Ballettunterricht. Später folgte eine Zeit, in der ich mich vom Tango etwas entfernte und vier Jahre pausierte. In dieser befasste ich mich mit allen möglichen Kampfkünsten. Ich trainierte unter anderem sehr intensiv Capoeira, Kung Fu und Sanda.</p>\n<p>Im Herbst 2012 beschloss ich, im  Rahmen meiner Maturaarbeit eine Tangochoreografie zu erstellen. Ich bekam die Möglichkeit, mich als Schülerin und Assistentin von Dominik im Sousol mit Tango verstärkter auseinander zu setzen. Im Sousol lernte ich Claudia kennen und wir beschlossen, gemeinsam das Tanzangebot in Luzern zu vergrössern. Da ich selbst sehr jung mit dem Tango begonnen habe, ist es mir ein Anliegen, dass die Tanzszene altersmässig durchmischt ist und gerade junge Leute vermehrter für Tango motiviert werden.</p>\n<p>Immer mehr sehe ich die Parallelen zwischen Kampfsport und Tango. Das Verständnis für Tango und Körperkontrolle wird durch das Kung Fu enorm bereichert und ich versuche, dieses Wissen weiterzugeben.</p>\n<p style="font-size: 1.5em; font-style: italic; margin-top: 3.5em; text-align: center;">Ich wünsche Dir, wo du auch bist, für immer und in Allem, dass du deine Erfahrungen machen kannst und langsam, Schritt für Schritt, zu Dir selbst finden wirst.</p>\n<p style="text-align: right;">&mdash; Claudia</p>', NULL),
(4, 'Dominik', 'Müller', NULL, NULL, 'http://www.tangotanz.ch');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lesson`
--
ALTER TABLE `lesson`
  ADD CONSTRAINT `lesson_FK_1` FOREIGN KEY (`fk_course`) REFERENCES `course` (`id`),
  ADD CONSTRAINT `lesson_FK_2` FOREIGN KEY (`fk_day`) REFERENCES `day` (`id`),
  ADD CONSTRAINT `lesson_FK_3` FOREIGN KEY (`fk_place`) REFERENCES `place` (`id`);

--
-- Constraints for table `lesson_to_teacher`
--
ALTER TABLE `lesson_to_teacher`
  ADD CONSTRAINT `lesson_to_teacher_FK_1` FOREIGN KEY (`fk_lesson`) REFERENCES `lesson` (`id`),
  ADD CONSTRAINT `lesson_to_teacher_FK_2` FOREIGN KEY (`fk_teacher`) REFERENCES `teacher` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
