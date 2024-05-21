-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2024 at 10:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebewd2_cr4_kristineortega_biglibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `listofmedia`
--

CREATE TABLE `listofmedia` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `isbn` varchar(17) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  `author_first_name` varchar(50) NOT NULL,
  `author_last_name` varchar(50) NOT NULL,
  `publisher_name` varchar(50) NOT NULL,
  `publisher_address` varchar(255) NOT NULL,
  `publish_date` int(4) NOT NULL,
  `availability` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `listofmedia`
--

INSERT INTO `listofmedia` (`id`, `title`, `image`, `isbn`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`, `availability`) VALUES
(1, 'Born A Crime - Stories from a South African Child', 'pic9.jpg', '978-0-525-50902-8', 'Trevor Noah\'s compelling autobiography leading him from apartheid South Africa to the desk of The Daily Show.', 'Book', 'Trevor', 'Noah', 'One World', '1745 Broadway\r\nNew York, NY 10019', 2017, 1),
(2, 'All You Can Ever Know - A memoir of adoption', 'pic8.jpg', '978-1-911590-30-9', 'A moving memoir of a woman who was adopted after birth from Korea to be raised by a white family in the US.', 'Book', 'Nicole', 'Chung', 'Catapult', '1140 Broadway #706\r\nNew York, NY 10001', 2018, 1),
(3, 'The Futurological Congress', 'pic7.jpg', '978-3-518-47145-6', 'A fictional story about Ijon Tichys travelling to the futurological congress.', 'Book', 'Stanislaw', 'Lem', 'Suhrkamp Verlag', 'Torstraße 44\r\n10119 Berlin', 1979, 1),
(4, '127 Hours - Between a Rock and a Hard Place', 'pic10.jpg', '978-3548374086', 'The true tale of Aron Ralston, a climber who got literally stuck between a rock and a hard place and cut off his own arm to save his life.', 'E-Book', 'Aron', 'Ralston', 'Atria Books', '1230 Avenue Of The Americ Conc1, New York, New York, United States', 2005, 0),
(5, 'The Miseducation Of Cameron Post', 'pic1.jpg', '978-0141389165', 'A moving story about a teenage orphan who is sent to gay conversion therapy by her ultra-religious aunt.', 'E-Book', 'Emily', 'Danforth', 'Penguin Random House', '1745 Broadway, New York, NY', 2017, 0),
(6, 'We Have Always Been Here', 'pic3.jpg', '978-0735235007', 'A memoir by queer muslim writer, photographer, journalist, and activist Samra Habib.', 'Book', 'Samra', 'Habib', 'Viking ', '20 Vauxhall Bridge Road\r\nLondon, SW1V 2SA', 2019, 1),
(7, 'Baggage - Tales from a fully packed Life', 'pic6.jpg', 'B09456FC3K', 'A hilarious memoir of Hollywood actor Alan Cumming, filled with delightful anectodes about British and American movie show business.', 'Audiobook', 'Alan', 'Cumming', 'HarperAudio', '195 Broadway New York, NY 10007', 2021, 1),
(8, 'Call Me By Your Name', 'pic2.jpg', 'B07B58SGWP', 'A story of a doomed romance that blooms between young multilingual, classical pianist Elio and his father\'s flashy PhD-student Oliver.', 'DVD', 'André', 'Aciman', 'Sony Pictures Entertainment', '10202 W Washington Blvd, Culver City, California 90232, US', 2023, 0),
(9, 'Factfulness - Ten Reasons we\'re wrong about the wo', 'pic5.jpg', '978-1473637498', 'A brilliant book by the ever so optimistic realist Hans Rosling about the true state of the world.', 'Book', 'Hans', 'Rosling', 'Hodder & Stoughton Ltd', 'Carmelite House\n50 Victoria Embankment\nLondon EC4Y 0DZ', 2018, 1),
(10, 'This Book is Gay', 'pic4.jpg', '978-1492617839', 'A book by acclaimed author and former PSHCE teacher Juno Dawson about the perks and perils of being gay.', 'Book', 'Juno', 'Dawson', 'Sourcebooks Fire', 'LLC 232 Madison Ave, Suite 805. New York, NY 10016', 2015, 1),
(33, 'Textbook', '664b5e6d028cf.jpg', '123491234', 'children\'s book', 'Book', 'Mariah', 'Mimsey', 'Suhrkamp Verlag', 'Torstraße 44 10119 Berlin', 1999, 1),
(34, 'Big Book of Bears', '664b6071cdaf1.jpg', '12369875', 'children\'s book', 'Book', 'Mariah', 'Mimsey', 'Sourcebooks Fire', 'LLC 232 Madison Ave, Suite 805. New York, NY 10016', 1990, 1),
(35, 'A New Book', '664b610d20961.jpg', '987-987-26599', 'textbook for children', 'Book', 'Anna', 'Winter', 'HarperAudio', '', 1879, 1),
(36, 'The Little Book of Owls', '664b616acb18e.jpg', '987-984322-1', 'A childrens book about nature', 'Book', 'Andrew', 'Jackson', 'Hodder & Stoughton Ltd', '', 1789, 1),
(37, 'The Newest Book by Stanisław Lem', '664b9b8cbf174.jpg', '54984-548415', 'Newest Book by Stanisław Lem', 'audiobook', 'Stanislaw', 'Lem', 'One World', '10202 W Washington Blvd, Culver City, California 90232, US', 2024, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listofmedia`
--
ALTER TABLE `listofmedia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `listofmedia`
--
ALTER TABLE `listofmedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
