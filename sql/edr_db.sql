-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2023 at 03:11 PM
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
-- Database: `edr_db`
--

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
(1, 'Under 1', 644, 1.97),
(2, '1 to 4', 3000, 9.16),
(3, '5 to 9', 3868, 11.81),
(4, '10 to 14', 3804, 11.62),
(5, '15 to 19', 3548, 10.84),
(6, '20 to 24', 2960, 9.04),
(7, '25 to 29', 2269, 6.93),
(8, '30 to 34', 1903, 5.81),
(9, '35 to 39', 1735, 5.30),
(10, '40 to 44', 1665, 5.08),
(11, '45 to 49', 1584, 4.84),
(12, '50 to 54', 1431, 4.37),
(13, '55 to 59', 1278, 3.90),
(14, '60 to 64', 953, 2.91),
(15, '65 to 69', 772, 2.36),
(16, '70 to 74', 546, 1.67),
(17, '75 to 79', 353, 1.08),
(18, '80 and over', 432, 1.32);

-- --------------------------------------------------------

--
-- Table structure for table `alerts`
--

CREATE TABLE `alerts` (
  `id` int(11) NOT NULL,
  `flood_alert` varchar(255) DEFAULT NULL,
  `typhoon_alert` varchar(255) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alerts`
--

INSERT INTO `alerts` (`id`, `flood_alert`, `typhoon_alert`, `timestamp`) VALUES
(19, 'I. Flood Alert on Brgy. Abango due to heavy rainfall\r\n\r\nII. Flood Alert on Brgy Tutug-an due to the heavy rainfall. Evacuation is high recommended. The nearest evacuation centers are routed on the map', '', '2023-10-21 07:19:38'),
(20, '', '', '2023-10-21 15:47:07'),
(21, 'testing lang', '', '2023-10-23 05:01:11'),
(22, '', '', '2023-10-23 05:01:30'),
(23, 'sfinsefilusznef\r\n\r\nesfjdnsdf\r\n\r\nosefnsdf', '', '2023-10-28 06:25:12'),
(24, 'sfinsefilusznef\r\n\r\nesfjdnsdf\r\n\r\nosefnsdf', '', '2023-10-28 06:25:15'),
(25, 'sfinsefilusznef\r\n\r\nesfjdnsdf\r\n\r\nosefnsdf\r\n\r\n\r\n\r\nasdasd', '', '2023-10-28 06:25:19'),
(26, '', '', '2023-10-28 06:26:39'),
(27, '', '', '2023-10-28 06:26:47'),
(28, 'asdasd', '', '2023-10-28 06:28:59'),
(29, '', '', '2023-10-28 06:29:03'),
(30, 'sfasfasdas\r\n\r\nasfasdas\r\n\r\nadssdg\r\n\r\nadgsfakweufbueskfbzsuydvfkzudsyv\r\n\r\neifybsdf\r\n\r\nsdfybsd', '', '2023-10-28 06:35:40'),
(31, '', '', '2023-10-28 06:44:04'),
(32, '', '', '2023-10-28 06:50:11'),
(33, '', '', '2023-10-28 06:50:25'),
(34, '', '', '2023-10-28 06:50:52'),
(35, '', '', '2023-10-28 06:52:05'),
(36, 'qwqwe', NULL, '2023-10-28 06:54:53'),
(37, '', NULL, '2023-10-28 07:00:34'),
(38, 'asdasdasd', NULL, '2023-10-29 11:05:25'),
(39, 'asdasd', NULL, '2023-10-29 11:06:19'),
(40, 'asdasdasd\r\nasdas\r\nda\r\nsda\r\nsd\r\nasd', NULL, '2023-10-29 11:09:00'),
(41, '', NULL, '2023-10-29 11:09:06'),
(42, 'asdasd', NULL, '2023-10-31 03:31:08'),
(43, '', NULL, '2023-10-31 03:31:22'),
(44, 'asdasd', NULL, '2023-11-02 05:27:20'),
(45, '', NULL, '2023-11-02 05:27:34'),
(46, 'asdasd', NULL, '2023-11-02 05:45:17'),
(47, 'asdasd', NULL, '2023-11-02 05:45:18'),
(48, NULL, 'asdasd', '2023-11-02 05:47:50'),
(49, NULL, 'asdasd', '2023-11-02 05:48:14'),
(50, NULL, '', '2023-11-02 05:49:23'),
(51, NULL, NULL, '2023-11-02 06:05:14'),
(52, NULL, NULL, '2023-11-02 06:05:19'),
(53, NULL, NULL, '2023-11-02 06:05:30'),
(54, NULL, 'asdasd', '2023-11-02 06:12:10'),
(55, NULL, 'asdas', '2023-11-02 06:12:51'),
(56, NULL, 'qewqweqwe', '2023-11-02 06:13:30'),
(57, NULL, '', '2023-11-02 06:13:39'),
(58, 'qweqweqweqeqwe', NULL, '2023-11-02 15:01:25'),
(59, 'qweqweqweqeqwe', NULL, '2023-11-02 15:01:31'),
(60, '', NULL, '2023-11-02 15:01:37');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `application_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `application_name`, `created_at`, `updated_at`) VALUES
(2, 'HR', '2023-10-19 00:00:00', '2023-10-19 00:00:00'),
(9, 'MDRRMO', '2023-10-19 00:00:00', '2023-10-19 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `app_access`
--

CREATE TABLE `app_access` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'id ha users',
  `app_id` int(11) NOT NULL COMMENT 'id ha applications',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_access`
--

INSERT INTO `app_access` (`id`, `user_id`, `app_id`, `created_at`, `updated_at`) VALUES
(1, 5, 9, '2023-10-28 10:13:57', '2023-10-28 10:13:57'),
(2, 7, 2, '2023-10-28 10:15:20', '2023-10-28 10:15:20');

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
(14, 'Abango', 'Flood-Prone Area'),
(15, 'Amahit', 'Flood-Prone'),
(17, 'Bukid', 'Evacuation Alert!'),
(18, 'Busay', 'Flood Watch'),
(19, 'Guindaohan', 'Expected Flood in 1 hour');

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
(6, 'Canomantag Elementary School', 11.301103155027914, 124.76101460056248),
(7, 'Calingcaguing National High School', 11.307303177135974, 124.76663793255597),
(8, 'Covered Court', 11.309167210735852, 124.76367181616646),
(9, 'Patricia Avila Busante Elementary School', 11.307727258067500, 124.73210905082045),
(10, 'Barugo I Central Elementary School', 11.320844923627595, 124.73717524452563),
(11, 'Celestino de Guzman MNHS Stand-Alone Senior High School', 11.338375230906749, 124.75753730204220),
(12, 'De Guzman Basketball Court', 11.337702559045745, 124.75592708230518),
(14, 'Barugo National High School', 11.300734926328534, 124.76313890990072);

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
(5, '2023-10-21', 'test', '09:15:00', 'a;wuinluszigbseigblsziegbzkjcvblie fsze fzsef zs  vz ds f zs ef s zr g szf'),
(6, '2023-10-22', 'qweqeqweqweqweqew', '00:00:00', 'iwefbw8eyfbseifusbeflsebflsigubsleiyrzglesd'),
(7, '2023-10-22', 'qweqeqweqweqweqew', '00:00:00', 'iwefbw8eyfbseifusbeflsebflsigubsleiyrzglesd'),
(10, '2023-10-23', 'shfbsjhf ,zsd', '17:59:00', 'islbzfsefukbskefzsfs'),
(11, '2023-10-23', 'shfbsjhf ,zsd', '17:59:00', 'islbzfsefukbskefzsfs'),
(21, '2023-10-27', 'oawnflszuibkfliubsfkd', '13:12:00', 'iufbslzsfkjuiefjusiejnf'),
(23, '2023-10-28', 'jahsfs,zfyvsmjfvszfdyv', '01:14:00', 'idufbs,efzsjeyfvseyfjves'),
(24, '2023-10-10', 'jopay', '09:23:00', 'asdhbslkyezs,bgd'),
(25, '2023-10-10', 'jopay', '09:23:00', 'asdhbslkyezs,bgd'),
(51, '2023-10-27', 'asgrxgdf', '22:02:00', 'rsgsdrxgf'),
(56, '2023-10-26', 'awesfes', '23:04:00', 'awesgdgf'),
(59, '2023-10-26', 'qweqaszf', '14:20:00', 'aesdxvdxer'),
(64, '0000-00-00', '', '00:00:00', ''),
(67, '2023-10-26', 'asgds', '01:24:00', 'zasegsgd'),
(68, '2023-10-28', 'asfdszedf', '10:30:00', 'asefszfd'),
(71, '2023-10-28', 'test', '11:15:00', 'akjefbkejfkse jf.esun'),
(72, '2023-10-30', 'Trial', '08:00:00', 'zexdrcftvgbhnjfcgvhbjnmsqwialudsf ls fsdf szef\r\nsdf\r\nzdg\r\n\r\n\r\n\r\naserfseurberaseraseres\r\naesasaesgags\r\naegsrhaseaefuaysbefisetbkfsyeflasefbsybfekshjbdjxhbvkxjdbvkxydvbksf'),
(75, '2023-10-30', 'Election Day', '00:00:00', 'Vote wisely!'),
(76, '2023-11-01', 'All Saints Day', '00:00:00', 'asdasdasdasdqweqw qwe'),
(80, '2023-11-03', 'System Checking', '00:00:00', 'ajhdajsgdjahsd'),
(81, '2023-11-07', 'Capstone Mock Defense', '10:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i'),
(82, '2023-11-06', 'First day for Capstone Defense', '08:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut fermentum ante in lectus congue imperdiet. Suspendisse faucibus justo enim, sit amet gravida dui egestas nec. Mauris at tortor id elit cursus fermentum ac ut orci. Donec mollis sollicitudin velit');

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
(1, 'Testing la', 5, 34, 40, 4, 4, 6, 6, 5, 4, 3, 3, 4, 2, 4, 8, 7, 11, 8, 5, 5, 5, 4, 5),
(2, 'aasdasd', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 1, 1, 1, 1, 1, 1),
(3, 'Testing la', 0, -30, -35, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -4, 0, -5, 0, 0),
(4, 'Testing la', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -5, 0, 0),
(5, 'Testing la', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 6, 0, 0),
(6, 'Test', 4, 1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23),
(7, 'try', 1, 2, 3, 4, 19, 20, 21, 22, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 23);

-- --------------------------------------------------------

--
-- Table structure for table `household_data`
--

CREATE TABLE `household_data` (
  `id` int(255) NOT NULL,
  `year` year(4) NOT NULL,
  `household_population` int(255) NOT NULL,
  `no_of_households` int(255) NOT NULL,
  `average_household_size` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `household_data`
--

INSERT INTO `household_data` (`id`, `year`, `household_population`, `no_of_households`, `average_household_size`) VALUES
(1, '1990', 23811, 4386, 5.43),
(2, '1995', 26168, 4826, 5.42),
(3, '2000', 26914, 5108, 5.27),
(4, '2007', 27562, 5598, 4.92),
(5, '2010', 30092, 6148, 4.89),
(6, '2015', 32733, 6919, 4.73);

-- --------------------------------------------------------

--
-- Table structure for table `map_markers`
--

CREATE TABLE `map_markers` (
  `id` int(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `latitude` decimal(10,8) NOT NULL,
  `longitude` decimal(10,7) NOT NULL,
  `level` varchar(255) NOT NULL,
  `display_marker` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `map_markers`
--

INSERT INTO `map_markers` (`id`, `barangay`, `latitude`, `longitude`, `level`, `display_marker`) VALUES
(1, 'Abango', 11.26790000, 124.7423000, 'High', 'y'),
(2, 'Amahit', 11.27540000, 124.7492000, 'Normal', 'n'),
(3, 'Balire', 11.28250000, 124.7326000, 'Low', 'y'),
(4, 'Balud', 11.33880000, 124.7824000, 'Medium', 'n'),
(5, 'Bukid', 11.29550000, 124.7437000, 'Normal', 'y'),
(6, 'Bulod', 11.31530000, 124.7768000, 'Low', 'y'),
(7, 'Busay', 11.32430000, 124.7824000, 'Normal', 'n'),
(8, 'Cabarasan', 11.33620000, 124.7658000, 'Medium', 'n'),
(9, 'Cabolo-an', 11.32900000, 124.8017000, 'Low', 'n'),
(10, 'Calingcaguing', 11.31070000, 124.7625000, 'Low', 'y'),
(11, 'Can-Isak', 11.26760000, 124.7713000, 'Normal', 'n'),
(12, 'Canomantag', 11.30820000, 124.7216000, 'High', 'y'),
(13, 'Cuta', 11.31830000, 124.7547000, 'Medium', 'y'),
(14, 'Domogdog', 11.33020000, 124.7460000, 'Normal', 'y'),
(15, 'Duka', 11.35130000, 124.7796000, 'Low', 'n'),
(16, 'Guindaohan', 11.29780000, 124.7271000, 'High', 'y'),
(17, 'Hiagsam', 11.27810000, 124.7753000, 'High', 'n'),
(18, 'Hilaba', 11.31460000, 124.7368000, 'Low', 'y'),
(19, 'Hinugayan', 11.30320000, 124.7865000, 'Medium', 'y'),
(20, 'Ibag', 11.31170000, 124.8045000, 'Medium', 'n'),
(21, 'Minuhang', 11.32800000, 124.7547000, 'Medium', 'n'),
(22, 'Minuswang', 11.32040000, 124.7250000, 'High', 'y'),
(23, 'Pikas', 11.29050000, 124.7664000, 'Low', 'n'),
(24, 'Pitogo', 11.27510000, 124.7879000, 'Low', 'n'),
(25, 'Poblacion Dist. I', 11.32280000, 124.7347000, 'Medium', 'y'),
(26, 'Poblacion Dist. II', 11.32040000, 124.7364000, 'Low', 'y'),
(27, 'Poblacion Dist. III', 11.32560000, 124.7363000, 'Low', 'y'),
(28, 'Poblacion Dist. IV', 11.32300000, 124.7404000, 'Medium', 'y'),
(29, 'Poblacion Dist. V', 11.32480000, 124.7375000, 'High', 'y'),
(30, 'Poblacion Dist. VI', 11.32060000, 124.7448000, 'Medium', 'y'),
(31, 'Pongso', 11.27810000, 124.7658000, 'Low', 'n'),
(32, 'Roosevelt', 11.29520000, 124.7824000, 'Low', 'y'),
(33, 'San Isidro', 11.31020000, 124.7340000, 'Medium', 'n'),
(34, 'San Roque', 11.30530000, 124.7774000, 'Low', 'y'),
(35, 'Santa Rosa', 11.28820000, 124.7989000, 'High', 'y'),
(36, 'Santarin', 11.32260000, 124.7313000, 'High', 'n'),
(37, 'Tutug-an', 11.30740000, 124.7530000, 'Normal', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `org_chart`
--

CREATE TABLE `org_chart` (
  `id` int(255) NOT NULL,
  `employee_name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `position2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `org_chart`
--

INSERT INTO `org_chart` (`id`, `employee_name`, `position`, `position2`) VALUES
(1, 'Dr. Aron C. Balais, FPCEM', 'Municipal Mayor', ''),
(2, 'Roderick L. Balais', 'LDRRMO III', ''),
(3, 'Aristle Alcober', 'Research & Planning', ''),
(4, 'Jasmin S. Cardenas', 'LDRRMO II', 'Admin & Training'),
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
-- Table structure for table `residents`
--

CREATE TABLE `residents` (
  `id` int(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_initial` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_no` bigint(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`id`, `barangay`, `first_name`, `middle_initial`, `last_name`, `email`, `phone_no`) VALUES
(10, 'Abango', 'Ray Christian', 'S', 'Damayo', 'damayo714@gmail.com', 9613851427),
(11, 'Amahit', 'Jasper', NULL, 'Quiminales', 'jasper.quiminales@evsu.edu.ph', 0),
(12, 'Roosevelt', 'Christian', '', 'Damayo', 'raychristian.damayo@evsu.edu.ph', 0),
(13, 'Abango', 'Faith', NULL, 'Uy', 'faithuysingle@gmail.com', 0),
(14, 'Poblacion Dist. I', 'Akira', NULL, 'Capoquian', 'akiracaps2001@gmail.com', NULL),
(15, 'Abango', 'testing', '', 'Damayo', NULL, 9613851427),
(16, 'Abango', 'testing', '', 'Damayo', NULL, 9613851427),
(17, 'Canomantag', 'try ha ', NULL, 'home', NULL, 9123455621),
(18, 'Hinugayan', 'try', NULL, 'utro', NULL, 9613851427),
(19, 'Hiagsam', 'last', NULL, 'na', NULL, 9613851427),
(20, 'San Isidro', 'final', NULL, 'talaga', NULL, 9613851427),
(21, 'Duka', 'sure na ', NULL, 'ini', NULL, 9613851427),
(22, 'Hiagsam', 'sure na ini', NULL, 'talaga', NULL, 9613851427),
(23, 'Canomantag', 'pls ', NULL, 'lang', NULL, 9613851427),
(24, 'Canomantag', 'pls ', NULL, 'lang', NULL, 9613851427),
(25, 'Poblacion Dist. III', 'amo na', NULL, 'talaga ini', NULL, 9613851427),
(26, 'Hiagsam', 'dre', NULL, 'gud', NULL, 9613851427),
(27, 'Cabolo-an', 'iausfksd', NULL, 'sidjbs', NULL, 9613851427),
(28, 'Abango', 'afaesgss', NULL, 'asdfasdf', NULL, 9613851427),
(29, 'Balire', 'dsfd', NULL, 'fsad', NULL, 9613851427),
(30, 'Hiagsam', 'sdvzxb', NULL, 'zdxvzvd', NULL, 9613851427);

-- --------------------------------------------------------

--
-- Table structure for table `typhoon_bulletin`
--

CREATE TABLE `typhoon_bulletin` (
  `id` int(255) NOT NULL,
  `int_name` varchar(255) NOT NULL,
  `local_name` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `wind_speed` int(255) DEFAULT NULL,
  `gust` int(255) DEFAULT NULL,
  `movement` varchar(255) DEFAULT NULL,
  `direction` varchar(255) DEFAULT NULL,
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `typhoon_bulletin`
--

INSERT INTO `typhoon_bulletin` (`id`, `int_name`, `local_name`, `location`, `wind_speed`, `gust`, `movement`, `direction`, `updated_on`) VALUES
(3, 'Haiyan', 'Yolanda', '209 km east-northeast of Palau', 315, 380, '34 km/h', 'West', '2023-11-02 05:38:36');

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
(2, 'try la', 1, 2, 1, 4, 12, 151, 114, 15, 112, 12, 15, 5, 2, 12, 15, 5, 2, 4, 3, 3, 4, 4, 3),
(3, 'qweqwe', 2, 2, 2, 1, 1, 2, 1, 2, 1, 2, 1, 2, 3, 4, 2, 3, 1, 3, 1, 1, 2, 4, 1),
(4, 'try la', 0, 0, 0, 0, 0, -150, -100, 0, -100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'Testing la', 0, -30, -35, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, -8, 0, 0, 0, 0, 0, 0),
(6, 'try la', 0, 0, 0, 0, -10, 0, -10, -10, -10, -10, -10, 0, 0, -10, -10, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(10) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `employee_id`, `image`, `first_name`, `last_name`, `middle_name`, `password`, `created_at`, `update_at`, `status`) VALUES
(5, 'EMP-00004', 'uploads/profile.png', 'Ray Christian', 'Damayo', 'S', '8cb2237d0679ca88db6464eac60da96345513964', '2023-10-27 03:30:27', '2023-10-27 03:30:27', 'Active'),
(7, 'admin', 'uploads/icon.png', 'qweqwe', 'asdasd', '', 'f865b53623b121fd34ee5426c792e5c33af8c227', '2023-10-28 08:05:59', '2023-10-28 08:05:59', ''),
(9, 'dams123', 'uploads/barugo_logo.png', 'asdasd', 'qweqwe', '', 'cb8389d0e2f189453e95fed083ce18efccfad0ef', '2023-10-28 08:08:48', '2023-10-28 08:08:48', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `age_group`
--
ALTER TABLE `age_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alerts`
--
ALTER TABLE `alerts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_access`
--
ALTER TABLE `app_access`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `app_id` (`app_id`);

--
-- Indexes for table `brgys_prone_to_flood`
--
ALTER TABLE `brgys_prone_to_flood`
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
-- Indexes for table `org_chart`
--
ALTER TABLE `org_chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `population_data`
--
ALTER TABLE `population_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `residents`
--
ALTER TABLE `residents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `typhoon_bulletin`
--
ALTER TABLE `typhoon_bulletin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `typhoon_report`
--
ALTER TABLE `typhoon_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `age_group`
--
ALTER TABLE `age_group`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `alerts`
--
ALTER TABLE `alerts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `app_access`
--
ALTER TABLE `app_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brgys_prone_to_flood`
--
ALTER TABLE `brgys_prone_to_flood`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `evac_centers`
--
ALTER TABLE `evac_centers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `flood_report`
--
ALTER TABLE `flood_report`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `household_data`
--
ALTER TABLE `household_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `map_markers`
--
ALTER TABLE `map_markers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `org_chart`
--
ALTER TABLE `org_chart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `population_data`
--
ALTER TABLE `population_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `residents`
--
ALTER TABLE `residents`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `typhoon_bulletin`
--
ALTER TABLE `typhoon_bulletin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `typhoon_report`
--
ALTER TABLE `typhoon_report`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `app_access`
--
ALTER TABLE `app_access`
  ADD CONSTRAINT `app_access_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `app_access_ibfk_2` FOREIGN KEY (`app_id`) REFERENCES `applications` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
