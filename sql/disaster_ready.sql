-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2023 at 05:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `disaster_ready`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$1V/NnTae5rrQo28foaxGfeHEFOSGXx7Jkb6suhzBqqv2q2kjLmfGK');

-- --------------------------------------------------------

--
-- Table structure for table `brgys_prone_to_flood`
--

CREATE TABLE `brgys_prone_to_flood` (
  `id` int(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brgys_prone_to_flood`
--

INSERT INTO `brgys_prone_to_flood` (`id`, `barangay`, `status`) VALUES
(1, 'Abango', 'Flood-Prone Area'),
(2, 'Amahit', 'Under Construction'),
(3, 'Balire', 'Flood Watch'),
(4, 'Abango', 'Flood-Prone Area'),
(5, 'Amahit', 'Under Construction'),
(6, 'Balire', 'Flood Watch');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(255) NOT NULL,
  `employee_name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `position2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_name`, `position`, `position2`) VALUES
(1, 'Dr. Aron C. Balais, FPCEM', 'Municipal Mayor', ''),
(2, 'Roderick L. Balais', 'LDRRMO III', ''),
(3, 'Jasmin S. Cardenas', 'LDRRMO II', 'Admin & Training'),
(4, 'Aristle Alcober', 'Research & Planning', ''),
(5, 'Marvin Castroverde', 'Operations & Warning', ''),
(6, 'Monrou Aguihap', 'ERT', ''),
(7, 'Mark Anthony Salvacion', 'ERT', ''),
(8, 'Franc Oliver Caneda', 'ERT', ''),
(9, 'Allan Castroverde', 'ERT', ''),
(10, 'Ryan Jay Acebo', 'ERT', ''),
(11, 'Zaira Alizondo', 'ERT', ''),
(12, 'Sean Vital Calim', 'ERT', '');

-- --------------------------------------------------------

--
-- Table structure for table `evac_centers`
--

CREATE TABLE `evac_centers` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `latitude` decimal(9,8) NOT NULL,
  `longitude` decimal(9,8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `evac_centers`
--

INSERT INTO `evac_centers` (`id`, `name`, `latitude`, `longitude`) VALUES
(2, 'Barugo National High School', 9.99999999, 9.99999999),
(3, 'Barugo National High School', 9.99999999, 9.99999999),
(4, 'Barugo National High School', 9.99999999, 9.99999999);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(255) NOT NULL,
  `event_date` date NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_time` time NOT NULL,
  `event_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_date`, `event_name`, `event_time`, `event_description`) VALUES
(1, '2023-10-09', 'txfcgvhbjnkjgfdx', '09:09:00', 'hvgcgsagdjhbz'),
(2, '2023-10-20', 'testing lang', '09:11:00', 'skfbzsliyblieszfiusengdv'),
(3, '2023-10-20', 'testing lang', '09:11:00', 'skfbzsliyblieszfiusengdv'),
(4, '2023-10-21', 'test', '09:15:00', 'a;wuinluszigbseigblsziegbzkjcvblie fsze fzsef zs  vz ds f zs ef s zr g szf'),
(5, '2023-10-21', 'test', '09:15:00', 'a;wuinluszigbseigblsziegbzkjcvblie fsze fzsef zs  vz ds f zs ef s zr g szf');

-- --------------------------------------------------------

--
-- Table structure for table `flood_report`
--

CREATE TABLE `flood_report` (
  `id` int(255) NOT NULL,
  `sitio` varchar(255) NOT NULL,
  `families` int(255) NOT NULL,
  `persons_m` int(255) NOT NULL,
  `persons_f` int(255) NOT NULL,
  `persons_lgbt` int(255) NOT NULL,
  `disabilities_m` int(255) NOT NULL,
  `disabilities_f` int(255) NOT NULL,
  `diseases_m` int(255) NOT NULL,
  `diseases_f` int(255) NOT NULL,
  `children1_m` int(255) NOT NULL,
  `children1_f` int(255) NOT NULL,
  `children2_m` int(255) NOT NULL,
  `children2_f` int(255) NOT NULL,
  `children3_m` int(255) NOT NULL,
  `children3_f` int(255) NOT NULL,
  `children4_m` int(255) NOT NULL,
  `children4_f` int(255) NOT NULL,
  `children5_m` int(255) NOT NULL,
  `children5_f` int(255) NOT NULL,
  `adult1_m` int(255) NOT NULL,
  `adult1_f` int(255) NOT NULL,
  `adult2_m` int(255) NOT NULL,
  `adult2_f` int(255) NOT NULL,
  `pregnant` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flood_report`
--

INSERT INTO `flood_report` (`id`, `sitio`, `families`, `persons_m`, `persons_f`, `persons_lgbt`, `disabilities_m`, `disabilities_f`, `diseases_m`, `diseases_f`, `children1_m`, `children1_f`, `children2_m`, `children2_f`, `children3_m`, `children3_f`, `children4_m`, `children4_f`, `children5_m`, `children5_f`, `adult1_m`, `adult1_f`, `adult2_m`, `adult2_f`, `pregnant`) VALUES
(1, 'Testing la', 5, 34, 40, 4, 4, 6, 6, 5, 4, 3, 3, 4, 2, 4, 8, 7, 11, 8, 5, 5, 5, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `map_markers`
--

CREATE TABLE `map_markers` (
  `id` int(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `latitude` decimal(9,8) NOT NULL,
  `longitude` decimal(9,8) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `population_data`
--

CREATE TABLE `population_data` (
  `id` int(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `population_2015` int(255) NOT NULL,
  `population_2020` int(255) NOT NULL,
  `population_change` decimal(5,2) NOT NULL,
  `rate` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `typhoon_report`
--

CREATE TABLE `typhoon_report` (
  `id` int(255) NOT NULL,
  `sitio` varchar(255) NOT NULL,
  `families` int(255) NOT NULL,
  `persons_m` int(255) NOT NULL,
  `persons_f` int(255) NOT NULL,
  `persons_lgbt` int(255) NOT NULL,
  `disabilities_m` int(255) NOT NULL,
  `disabilities_f` int(255) NOT NULL,
  `diseases_m` int(255) NOT NULL,
  `diseases_f` int(255) NOT NULL,
  `children1_m` int(255) NOT NULL,
  `children1_f` int(255) NOT NULL,
  `children2_m` int(255) NOT NULL,
  `children2_f` int(255) NOT NULL,
  `children3_m` int(255) NOT NULL,
  `children3_f` int(255) NOT NULL,
  `children4_m` int(255) NOT NULL,
  `children4_f` int(255) NOT NULL,
  `children5_m` int(255) NOT NULL,
  `children5_f` int(255) NOT NULL,
  `adult1_m` int(255) NOT NULL,
  `adult1_f` int(255) NOT NULL,
  `adult2_m` int(255) NOT NULL,
  `adult2_f` int(255) NOT NULL,
  `pregnant` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `typhoon_report`
--

INSERT INTO `typhoon_report` (`id`, `sitio`, `families`, `persons_m`, `persons_f`, `persons_lgbt`, `disabilities_m`, `disabilities_f`, `diseases_m`, `diseases_f`, `children1_m`, `children1_f`, `children2_m`, `children2_f`, `children3_m`, `children3_f`, `children4_m`, `children4_f`, `children5_m`, `children5_f`, `adult1_m`, `adult1_f`, `adult2_m`, `adult2_f`, `pregnant`) VALUES
(1, 'Testing la', 5, 34, 40, 4, 4, 6, 6, 5, 4, 3, 3, 4, 2, 4, 8, 7, 11, 8, 5, 5, 5, 4, 5),
(2, 'try la', 1, 2, 1, 4, 12, 151, 114, 15, 112, 12, 15, 5, 2, 12, 15, 5, 2, 4, 3, 3, 4, 4, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brgys_prone_to_flood`
--
ALTER TABLE `brgys_prone_to_flood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evac_centers`
--
ALTER TABLE `evac_centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flood_report`
--
ALTER TABLE `flood_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `map_markers`
--
ALTER TABLE `map_markers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `population_data`
--
ALTER TABLE `population_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `typhoon_report`
--
ALTER TABLE `typhoon_report`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brgys_prone_to_flood`
--
ALTER TABLE `brgys_prone_to_flood`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `evac_centers`
--
ALTER TABLE `evac_centers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `flood_report`
--
ALTER TABLE `flood_report`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `map_markers`
--
ALTER TABLE `map_markers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `population_data`
--
ALTER TABLE `population_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `typhoon_report`
--
ALTER TABLE `typhoon_report`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
