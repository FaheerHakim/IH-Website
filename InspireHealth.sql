-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 24, 2024 at 04:15 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `InspireHealth`
--

-- --------------------------------------------------------

--
-- Table structure for table `Projects`
--

CREATE TABLE `Projects` (
  `project_id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(300) NOT NULL,
  `project_title` varchar(300) NOT NULL,
  `text` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Projects`
--

INSERT INTO `Projects` (`project_id`, `name`, `description`, `image`, `project_title`, `text`) VALUES
(1, 'Surgical training\r\n', 'Training of surgery students live from the OR with remote presence', 'images/projects/1.png', 'AZ Monica', 'Context\r\nThis reference case is set in the field of medical education, particularly in the training of surgical students. Traditional surgical training often involves students physically present in the operating room, limiting the number of participants and potentially increasing the risk of infections. The advent of Microsoft HoloLens technology provides an opportunity to revolutionize surgical education by introducing augmented reality (AR) experiences.\r\n\r\nClient\'s challenge\r\nDr. prof. Olivier Verborgt of AZ Monica faced the challenge of optimizing surgical training for students. The limitations of physical presence in the operating room posed several issues, including the risk of bacterial infections for patients due to a crowded environment. Especially during the COVID-19 period, it was prohibited to have more people than necessary present in the OR. Moreover, the availability of expert surgeons for training sessions was constrained by geographical factors. The university sought a solution to enhance the quality and accessibility of surgical education while addressing these challenges.\r\n\r\nThe solution\r\nOur partner Lifelike implemented an innovative solution using Microsoft HoloLens, a mixed reality headset. Through remote streaming technology, surgical students could virtually attend live surgeries without being physically present in the operating room. The HoloLens allowed for an immersive and interactive experience, enabling students to observe and learn from expert surgeons in real-time. The solution addressed the challenges by reducing the number of people in the operating room, thereby minimizing the risk of infections, and enabling access to extra educational media via AR.\r\n\r\nThe result\r\nThe implementation of the Microsoft HoloLens-based solution yielded significant benefits for the dr. prof. Olivier Verborgt and his students. Firstly, the reduction in physical presence during surgeries led to a lower risk of bacterial infections for patients. Secondly, the virtual attendance feature allowed a larger number of students to participate in a single surgery session, enhancing the efficiency of the training program. Lastly, the solution could also be used to train students that were not in the vicinity of the hospital.\r\nThe innovative use of augmented reality technology proves to be very valuable in surgical training thanks to the surgeon PoV and the ability to show in real-time content-specific information in overlay.\r\n\r\n'),
(2, 'Medical data storage', 'Oracle DB solution to store clinical data', 'images/projects/11.png', 'CHU Saint-Pierre', ''),
(3, 'Shopfloor automatisation', 'Shopfloor solution for medical sterilization', 'images/projects/10.png', 'Sterima', ''),
(4, 'Patient data exchange', 'Federated Data Network Architecture for hospital data', 'images/projects/12.png', 'VZN', ''),
(5, 'SNOMED-CT coding', 'Artificial intelligence to convert medical text into SNOMED code terminology', 'images/projects/44.png', 'Tirohealth', ''),
(7, 'Surgical collaboration', 'Remote surgical assistance over 5G connection', 'images/projects/43.png', 'MSCAA', ''),
(8, 'Patient data privacy', 'Creation of a user access management solution', 'images/projects/3.png', 'Sciensano IAM', ''),
(10, 'Elderly care Infrastructure', 'Modernization of the ICT environment of Borgerstein', 'images/projects/4.png', 'Borgerstein', ''),
(13, 'Administration automation', 'AI to automate processing of handwritten doctor notes', 'images/projects/5.png', 'CM', ''),
(14, 'Covid vaccin data treatment', 'Covid-19 Vaccin Incident Response Escalation', 'images/projects/8.png', 'Pharma company', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Projects`
--
ALTER TABLE `Projects`
  ADD PRIMARY KEY (`project_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Projects`
--
ALTER TABLE `Projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
