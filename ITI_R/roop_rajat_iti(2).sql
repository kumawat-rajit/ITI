-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 13, 2020 at 02:17 AM
-- Server version: 8.0.16
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roop_rajat_iti`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `username`, `password`, `created`) VALUES
(1, 'Roop Rajat', 'rooprajat', 'roop@123', '2020-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `news_notification`
--

DROP TABLE IF EXISTS `news_notification`;
CREATE TABLE IF NOT EXISTS `news_notification` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `caption` varchar(200) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `news_notification`
--

INSERT INTO `news_notification` (`id`, `caption`, `file_name`, `type`) VALUES
(2, 'TESTsdf', '21050_icici.pdf', 'application/pdf');

-- --------------------------------------------------------

--
-- Table structure for table `society`
--

DROP TABLE IF EXISTS `society`;
CREATE TABLE IF NOT EXISTS `society` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mem_other` varchar(100) NOT NULL,
  `detail` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `society`
--

INSERT INTO `society` (`id`, `name`, `designation`, `fname`, `address`, `mem_other`, `detail`) VALUES
(1, 'Suresh Chand Gurjar', 'Chairman', 'Hanuman Sahay', 'Vill-Aarwadi, Teh- Jamwaramgarh, Jaipur', 'No', 'No'),
(3, 'Shakuntala Devi', 'Vice Chairman', 'Heera Lal', '12, Manu Marg, Amer Road, Jaipur', 'NO', 'NO'),
(4, 'Govind Bihari Gupta', 'Secretary', 'Radheshyam', '1883, Bediya Bhawan, Telipada, Chouda Rasta, Jaipur', 'NO', 'NO'),
(5, 'Ram Narayan Gurjar', 'Treasurer', 'Nandaram Gurjar', 'Dev Vihar, Goner Road, Jaipur', 'No', 'No'),
(6, 'Krishna Devi', 'Member', 'Radheshyam', '2290, Ramlala ji Rasta, Johri Bajar, Jaipur', 'No', 'No'),
(7, 'Radika Poudar', 'Member', 'Avinash Poudar', 'Poudar Bhawan. Pitoliyo Ka Chouk, Jaipur', 'No', 'No'),
(8, 'Rajesh Gupta', 'Member', '', '2290, Ramlala Ji Ka Rasta, Johri Bazar, Jaipur', 'No', 'No'),
(9, 'Radha Devi', 'Member', 'Damodar', 'Parik Path, Dahar Ka Balaji, Jaipur', 'No', 'No'),
(10, 'Shilpa Gupta', 'Member', '', 'Dangayach Bhawan, Telipada, Chouda Rasta, Jaipur', 'No', 'No'),
(11, 'Ram Avtar', 'Member', '', '', 'No', 'No'),
(12, 'Vimal Kumar Gupta', 'Member', 'Damodar', 'Dangayach Bhawan, Tehipada Chouda Rasta, Jaipur', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `technical_staff`
--

DROP TABLE IF EXISTS `technical_staff`;
CREATE TABLE IF NOT EXISTS `technical_staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designation` varchar(50) NOT NULL,
  `trade` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `doj` date NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `stream` varchar(50) NOT NULL,
  `emp_type` varchar(20) NOT NULL,
  `cti` varchar(10) NOT NULL,
  `photo_link` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
