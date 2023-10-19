-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2023 at 05:07 PM
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
-- Table structure for table `age_group`
--

CREATE TABLE `age_group` (
  `id` int(255) NOT NULL,
  `age_group` varchar(255) NOT NULL,
  `population_2015` int(255) NOT NULL,
  `age_percentage` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `age_group`
--

INSERT INTO `age_group` (`id`, `age_group`, `population_2015`, `age_percentage`) VALUES
(15, '15 to 19', 3548, 10.84),
(16, '20 to 24', 2960, 9.04),
(17, '25 to 29', 2269, 6.93),
(18, '30 to 34', 1903, 5.81),
(19, '35 to 39', 1735, 5.30),
(20, '40 to 44', 1665, 5.08),
(21, '45 to 49', 1584, 4.84),
(22, '50 to 54', 1431, 4.37),
(23, '55 to 59', 1278, 3.90),
(24, '60 to 64', 953, 2.91),
(25, '65 to 69', 772, 2.36),
(26, '70 to 74', 546, 1.67),
(27, '75 to 79', 353, 1.08),
(28, '80 and over', 432, 1.32);

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
  `latitude` decimal(18,15) NOT NULL,
  `longitude` decimal(18,14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `evac_centers`
--

INSERT INTO `evac_centers` (`id`, `name`, `latitude`, `longitude`) VALUES
(5, 'Barugo National High School', 11.300734926328534, 124.76313890990072),
(6, 'Canomantag Elementary School', 11.301103155027914, 124.76101460056248),
(7, 'Calingcaguing National High School', 11.307303177135974, 124.76663793255597),
(8, 'Covered Court', 11.309167210735852, 124.76367181616646),
(9, 'Patricia Avila Busante Elementary School', 11.307727258067500, 124.73210905082045),
(10, 'Barugo I Central Elementary School', 11.320844923627595, 124.73717524452563),
(11, 'Celestino de Guzman MNHS Stand-Alone Senior High School', 11.338375230906749, 124.75753730204220),
(12, 'De Guzman Basketball Court', 11.337702559045745, 124.75592708230518),
(13, 'test area', 11.209630383936004, 124.99422706262506);

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
-- Table structure for table `flood_alert`
--

CREATE TABLE `flood_alert` (
  `id` int(11) NOT NULL,
  `alert_message` varchar(255) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flood_alert`
--

INSERT INTO `flood_alert` (`id`, `alert_message`, `timestamp`) VALUES
(3, 'Typhoon Alert!!!', '2023-10-19 16:05:02');

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
-- Table structure for table `household_data`
--

CREATE TABLE `household_data` (
  `id` int(255) NOT NULL,
  `year` year(4) NOT NULL,
  `household_population` int(255) NOT NULL,
  `no_of_households` int(255) NOT NULL,
  `average_household_size` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `household_data`
--

INSERT INTO `household_data` (`id`, `year`, `household_population`, `no_of_households`, `average_household_size`) VALUES
(1, '1990', 23811, 4386, 5),
(2, '1995', 26168, 4826, 5),
(3, '2000', 26914, 5108, 5),
(4, '2007', 27562, 5598, 5),
(5, '2010', 30092, 6148, 5),
(6, '2015', 32733, 6919, 5);

-- --------------------------------------------------------

--
-- Table structure for table `map_markers`
--

CREATE TABLE `map_markers` (
  `id` int(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `latitude` decimal(10,8) NOT NULL,
  `longitude` decimal(10,7) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `map_markers`
--

INSERT INTO `map_markers` (`id`, `barangay`, `latitude`, `longitude`, `level`) VALUES
(186, 'Abango', 11.26790000, 124.7423000, 'Normal'),
(187, 'Amahit', 11.27540000, 124.7492000, 'High'),
(188, 'Balire', 11.28250000, 124.7326000, 'Normal'),
(189, 'Balud', 11.33880000, 124.7824000, 'Medium'),
(190, 'Bukid', 11.29550000, 124.7437000, 'Normal'),
(191, 'Bulod', 11.31530000, 124.7768000, 'Low'),
(192, 'Busay', 11.32430000, 124.7824000, 'Normal'),
(193, 'Cabarasan', 11.33620000, 124.7658000, 'Normal'),
(194, 'Cabolo-an', 11.32900000, 124.8017000, 'Low'),
(195, 'Calingcaguing', 11.31070000, 124.7625000, 'Normal'),
(196, 'Can-Isak', 11.26760000, 124.7713000, 'Normal'),
(197, 'Canomantag', 11.30820000, 124.7216000, 'High'),
(198, 'Cuta', 11.31830000, 124.7547000, 'Normal'),
(199, 'Domogdog', 11.33020000, 124.7460000, 'Low'),
(200, 'Duka', 11.35130000, 124.7796000, 'Normal'),
(201, 'Guindaohan', 11.29780000, 124.7271000, 'Normal'),
(202, 'Hiagsam', 11.27810000, 124.7753000, 'Normal'),
(203, 'Hilaba', 11.31460000, 124.7368000, 'Normal'),
(204, 'Hinugayan', 11.30320000, 124.7865000, 'Normal'),
(205, 'Ibag', 11.31170000, 124.8045000, 'Medium'),
(206, 'Minuhang', 11.32800000, 124.7547000, 'Normal'),
(207, 'Minuswang', 11.32040000, 124.7250000, 'High'),
(208, 'Pikas', 11.29050000, 124.7664000, 'Normal'),
(209, 'Pitogo', 11.27510000, 124.7879000, 'Low'),
(210, 'Poblacion Dist. I', 11.32280000, 124.7347000, 'Normal'),
(211, 'Poblacion Dist. II', 11.32040000, 124.7364000, 'Normal'),
(212, 'Poblacion Dist. III', 11.32560000, 124.7363000, 'Low'),
(213, 'Poblacion Dist. IV', 11.32300000, 124.7404000, 'Normal'),
(214, 'Poblacion Dist. V', 11.32480000, 124.7375000, 'Normal'),
(215, 'Poblacion Dist. VI', 11.32060000, 124.7448000, 'Medium'),
(216, 'Pongso', 11.27810000, 124.7658000, 'Normal'),
(217, 'Roosevelt', 11.29520000, 124.7824000, 'Normal'),
(218, 'San Isidro', 11.31020000, 124.7340000, 'Medium'),
(219, 'San Roque', 11.30530000, 124.7774000, 'Normal'),
(220, 'Santa Rosa', 11.28820000, 124.7989000, 'Normal'),
(221, 'Santarin', 11.32260000, 124.7313000, 'High'),
(222, 'Tutug-an', 11.30740000, 124.7530000, 'Normal');

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

--
-- Dumping data for table `population_data`
--

INSERT INTO `population_data` (`id`, `barangay`, `population_2015`, `population_2020`, `population_change`, `rate`) VALUES
(1, 'Abango', 1250, 1373, 9.84, 2.00),
(2, 'Amahit', 1802, 1643, 9.68, 1.96),
(3, 'Abango', 1250, 1373, 9.84, 2.00),
(4, 'Amahit', 1802, 1643, 9.68, 1.96),
(5, 'Balire', 549, 698, 27.14, 5.18),
(6, 'Balud', 732, 752, 2.73, 0.57),
(7, 'Bukid', 1339, 1463, 9.26, 1.88),
(8, 'Bulod', 631, 670, 6.18, 1.27),
(9, 'Busay', 985, 952, -3.35, -0.71),
(10, 'Cabarasan', 853, 889, 4.22, 0.87),
(11, 'Cabolo-an', 350, 377, 7.71, 1.58),
(12, 'Calingcaguing', 1296, 981, -24.31, -5.69),
(13, 'Can-Isak', 758, 927, 22.30, 4.33),
(14, 'Canomantag', 712, 754, 5.90, 1.21),
(15, 'Cuta', 693, 1142, 64.79, 11.09),
(16, 'Domogdog', 513, 503, -1.95, -0.41),
(17, 'Duka', 452, 514, 13.72, 2.74),
(18, 'Guindaohan', 733, 737, 0.55, 0.11),
(19, 'Hiagsam', 219, 219, 0.00, 0.00),
(20, 'Hilaba', 1055, 1023, -3.03, -0.65),
(21, 'Hinugayan', 904, 905, 0.11, 0.02),
(22, 'Ibag', 433, 396, -8.55, -1.86),
(23, 'Minuhang', 1921, 1942, 1.09, 0.23),
(24, 'Minuswang', 831, 846, 1.81, 0.38),
(25, 'Pikas', 1236, 1457, 17.88, 3.52),
(26, 'Pitogo', 440, 511, 16.14, 3.20),
(27, 'Poblacion Dist. I', 1407, 1416, 0.64, 0.13),
(28, 'Poblacion Dist. II', 1064, 1151, 8.18, 1.67),
(29, 'Poblacion Dist. III', 632, 618, -2.22, -0.47),
(30, 'Poblacion Dist. IV', 976, 871, -10.76, -2.37),
(31, 'Poblacion Dist. V', 1176, 1106, -5.95, -1.28),
(32, 'Poblacion Dist. VI', 1040, 1152, 10.77, 2.18),
(33, 'Pongso', 281, 308, 9.61, 1.95),
(34, 'Roosevelt', 775, 890, 14.84, 2.96),
(35, 'San Isidro', 914, 969, 6.02, 1.24),
(36, 'San Roque', 488, 505, 3.48, 0.72),
(37, 'Santa Rosa', 1688, 1831, 8.47, 1.73),
(38, 'Santarin', 1208, 1291, 6.87, 1.41),
(39, 'Tutug-an', 568, 556, -2.11, -0.45);

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
-- Indexes for table `age_group`
--
ALTER TABLE `age_group`
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
-- Indexes for table `flood_alert`
--
ALTER TABLE `flood_alert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flood_report`
--
ALTER TABLE `flood_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `household_data`
--
ALTER TABLE `household_data`
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
-- AUTO_INCREMENT for table `age_group`
--
ALTER TABLE `age_group`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `flood_alert`
--
ALTER TABLE `flood_alert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `flood_report`
--
ALTER TABLE `flood_report`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `household_data`
--
ALTER TABLE `household_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `map_markers`
--
ALTER TABLE `map_markers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT for table `population_data`
--
ALTER TABLE `population_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `typhoon_report`
--
ALTER TABLE `typhoon_report`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
