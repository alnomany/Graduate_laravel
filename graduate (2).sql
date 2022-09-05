-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2022 at 08:41 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `graduate`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fix_forms`
--

CREATE TABLE `fix_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_rn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rest_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tooth_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fm0` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fm0_sig` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fm0_date` date DEFAULT NULL,
  `fm1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fm1_sig` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fm1_date` date DEFAULT NULL,
  `fm2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fm2_sig` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fm2_date` date DEFAULT NULL,
  `fm3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fm3_sig` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fm3_date` date DEFAULT NULL,
  `fm4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fm4_sig` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fm4_date` date DEFAULT NULL,
  `fm5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fm5_sig` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fm5_date` date DEFAULT NULL,
  `fm6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fm6_sig` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fm6_date` date DEFAULT NULL,
  `avg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_avg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fix_forms`
--

INSERT INTO `fix_forms` (`id`, `student_number`, `student_name`, `p_name`, `p_rn`, `rest_type`, `tooth_number`, `fm0`, `fm0_sig`, `fm0_date`, `fm1`, `fm1_sig`, `fm1_date`, `fm2`, `fm2_sig`, `fm2_date`, `fm3`, `fm3_sig`, `fm3_date`, `fm4`, `fm4_sig`, `fm4_date`, `fm5`, `fm5_sig`, `fm5_date`, `fm6`, `fm6_sig`, `fm6_date`, `avg`, `total_avg`, `note`, `status`, `email_verified_at`, `created_at`, `updated_at`) VALUES
(29, '438200403', 'NORAH SALEH M ALGHUWAINEM', 'sdf', '545', 'N.A.', '24', '5', 'Dr.SalBaj', NULL, '7', 'Dr.SalBaj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7', NULL, NULL, NULL, NULL, '2022-09-04 07:01:02', '2022-09-04 07:01:02'),
(30, '438200279', 'DEMA KHALID H ALOMRAN', NULL, 'sdf', 'N.A.', 'N.A.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-04 07:47:20', '2022-09-04 07:47:20'),
(31, '438200279', 'DEMA KHALID H ALOMRAN', NULL, 'sdf', 'N.A.', 'N.A.', '6', 'Dr.SalBaj', NULL, '6', 'Dr.SalBaj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '6', NULL, NULL, NULL, NULL, '2022-09-04 07:53:26', '2022-09-04 07:53:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(36, '2014_10_12_000000_create_users_table', 1),
(37, '2014_10_12_100000_create_password_resets_table', 1),
(38, '2019_08_19_000000_create_failed_jobs_table', 1),
(39, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(40, '2022_08_26_164624_create_fix_forms_table', 1),
(41, '2022_08_30_082534_create_student_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('aalnomany350@gmail.com', '$2y$10$Ldv.qC3kRHwLFshuXjQn/OrqiS3pwVqIs7Hw.89zh7SOwAAeFoti.', '2022-09-01 04:21:04'),
('aalnomany50@gmail.com', '$2y$10$jAvgVeLEPKs33U6buICxkuITCdWksYexdIlVDNdo/RJkJUeqPGX92', '2022-09-01 04:27:49');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_users`
--

CREATE TABLE `student_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `final_fixed_average` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `final_removable_average` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_users`
--

INSERT INTO `student_users` (`id`, `student_name`, `student_number`, `phone`, `email`, `final_fixed_average`, `final_removable_average`, `created_at`, `updated_at`) VALUES
(2, 'REEMA EID DAKHEELALLH ', '437201130', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'GHAIDA ABDULRAHMAN M ALISLIMAH', '438200126', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'BUSHRA MOHAMMED ABDULAZIZ ALHELAL', '438200128', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'SARAH SAUD O ALOTAIBI', '438200149', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'REEM RIYADH A ALMUKAIRIN', '438200243', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'DEMA KHALID H ALOMRAN', '438200279', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'SARAH IBRAHIM ABDULAZIZ ALBAIZ', '438200335', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'NORAH SALEH M ALGHUWAINEM', '438200403', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'REEMA ABDULLAH ALZAHRANI', '438200420', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'THAKRA KHALID M ALKHALID', '438200456', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'FARAH NASSER MOHAMMAD ALRAJHI', '438200571', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'HABAH ABDULAZIZ A ALHAMDAN', '438200611', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'SARA SAMI A SAEED', '438200712', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'ALAA SALEH ABDUL ALLAH AL HARBI', '438200897', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'RANEEM MOHAMMAD ABDULRAHLMAN', '438200923', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'RAHAF MANSOUR MOHAMMED ALMANSOUR', '438200948', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'AMANI SAWAB SALMAN ALANAZI', '438201205', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'HESAH SALEH SUDAN ALHATABI ALSHLWI', '438201208', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'REEM ABDULAZIZ A ABUHAIMED', '438201270', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'ALJOWHARA MOHAMMED AlMANA', '438201271', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'NOUF SULEMAN S ALAKEEL', '438201347', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'JENAN OMER M ALRAYES', '438201407', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'MARAM SHAYAN MUBARK ALBAQMY', '438201418', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'ALANOUD MONEER ABDALRAHMAN', '438201444', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'RAZAN KHALID AYED ALMATRAFI', '438201456', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'ALANOUD FAHAD M BINMEQREN', '438201515', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'HESSAH ABDU ALLAH BIN ALDURAIHEM', '438201523', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'ALMAHA MOHAMMED O ALABDULLATIF', '438201540', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'ATHEER SULTAN ABDULAZIZ ALSULTAN', '438201541', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'NOUF MOHAMMED S -ALAJLAN', '438201663', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'ATHEER KHALID AWWADH AL GHAMDI', '438201740', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'RAGHAD FAHAD A ALMUQRIN', '438201767', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'SHAHAD I A ALROBAISH', '438201958', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'REEM ODAH MOHAMMAD ALGHAMDI', '438201999', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'RAGHD ABDALLAH OTHMAN ALBARAK', '438202005', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'MARAM MEZAL LAFI ALANAZI', '438202007', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'SADIN FAHAD A ALHARTHI', '438202052', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'REEM FAHAD M ALHAMID', '438202307', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'NISRIN MOHAMMED T ALQAHTANI', '438202335', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'LAMA ABDULLAH AHMAD ALSHAHRANI', '438202446', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'ALANOUD ABDUA AHMAD SALAM', '438202518', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'ALBTOOL ALI ABDULQADER AL HAMEDI', '438202561', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'SHATHA ABDULRAHMAN A ALMUARIK', '438202617', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'LUJAIN ALI A ALSUHAIBANI', '438202640', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'NORAH KHALID F ALARIFI', '438202666', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'BUTHAINAH ABDULRAHMAN SALEH AL AMER', '438202712', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'REEM HESHAM M BINMOGREN', '438202724', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'SARA KHALID I ALAWAD', '438202737', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'RAHAF OTHMAN MOHAMMED ALKADI', '438202868', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'RAND KHALID NASSER ALNUWAISER', '438202871', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'MONA HAMAD MONADI ALHARBI', '438202874', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'ALJOHARAH ABDULLAH ALI ALSHATHRI', '438203351', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'SHOOG MOHAMMED EBRAHIM HUMMADY', '438204370', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thired_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sign` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `second_name`, `thired_name`, `last_name`, `number`, `email`, `email_verified_at`, `password`, `type`, `sign`, `remember_token`, `created_at`, `updated_at`) VALUES
(14, 'Dr. Salwa Bajunaid', '', '', '', '590028784', 'sbajunaid@ksu.edu.saa', '0000-00-00 00:00:00', '12341234', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Dr. Hana Alshaikh', '', '', '', '505477246', 'halashaikh@ksu.edu.sa', '0000-00-00 00:00:00', '12341234', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Prof. Sara Alfadda', '', '', '', '555442026', 'salfadda@gmail.com', '0000-00-00 00:00:00', '12341234', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Dr. Modhi Alathel', '', '', '', '505480173', 'athel_m@yahoo.com', '0000-00-00 00:00:00', '12341234', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Dr. Samar Alsaleh', '', '', '', '504480712', 'salsaleh@ksu.edu.sa', '0000-00-00 00:00:00', '12341234', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Dr. Eman Alhamdan', '', '', '', '505249371', 'ealhamdan@ksu.edu.sa', '0000-00-00 00:00:00', '12341234', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Dr. Hanan Alotaibi', '', '', '', '504127880', 'haalotaibi@ksu.edu.sa', '0000-00-00 00:00:00', '12341234', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Dr. Huda Alshehri', '', '', '', '553353006', 'halshehri@ksu.edu.sa', '0000-00-00 00:00:00', '12341234', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Dr. Sara Alatweel', '', '', '', '554773399', 'saltaweel@ksu.edu.sa', '0000-00-00 00:00:00', '12341234', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Dr. Amal Alkahtany', '', '', '', '554333859', 'aalkahtany@ksu.edu.sa', '0000-00-00 00:00:00', '12341234', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Dr. Alaa Abuobaid', '', '', '', '506401741', 'aiabuobaid@ksu.edu.sa', '0000-00-00 00:00:00', '12341234', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Dr. Huda Tulba', '', '', '', '504459704', 'htulbah@gmail.com', '0000-00-00 00:00:00', '12341234', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Dr. Nawal Alharbi', '', '', '', '504144744', 'nalharbi@ksu.edu.sa', '0000-00-00 00:00:00', '12341234', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Dr. Ghada Alrabeah', '', '', '', '555906606', 'galrabeah@ksu.edu.sa', '0000-00-00 00:00:00', '12341234', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Dr. May Alhamdan', '', '', '', '505248728', 'mmalhamdan@gmail.com', '0000-00-00 00:00:00', '12341234', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'Dr. Modhi Aldeeb', '', '', '', '503410009', 'maldeeb@ksu.edu.sa', '0000-00-00 00:00:00', '12341234', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Dr. Maha Alsahn', '', '', '', '531279794', 'malsahn@ksu.edu.sa', '0000-00-00 00:00:00', '12341234', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Dr. Balqees Almufleh', '', '', '', '551190777', 'balmufleh@ksu.edu.sa', '0000-00-00 00:00:00', '12341234', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Dr. Afnan Alfouzan', '', '', '', '551151493', 'aalfouzan@ksu.edu.sa', '0000-00-00 00:00:00', '12341234', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Dr. Fellwa Alrasheed', '', '', '', '501221666', 'fellwa.a.rasheed@hotmail.com', '0000-00-00 00:00:00', '12341234', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'Dr. Salwa Bajunaid', NULL, NULL, NULL, NULL, 'sbajunaid@ksu.edu.sa', NULL, '$2y$10$4xoJgi8dBIEk5sErxBmP8udMxbmvQV0jd1Jayv/IkYwSzNfRF5VOG', NULL, NULL, NULL, '2022-08-31 10:15:24', '2022-08-31 10:15:24'),
(37, 'ahmed', NULL, NULL, NULL, NULL, 'aalnomany50@gmail.com', NULL, '$2y$10$ok0HXpkrWkNu4YxxI6zfv.SnMJBprbb7s3IGAqpCyFEIC4OT.JOMq', NULL, NULL, NULL, '2022-09-01 03:42:51', '2022-09-01 03:42:51'),
(38, 'ahmed', NULL, NULL, NULL, NULL, 'aalnomany33350@gmail.com', NULL, '$2y$10$iNStaYtL59lZ/0aHZLJaSOzteUJsIKXF0mtepmbhAliLfWpomqQRC', NULL, NULL, NULL, '2022-09-01 04:05:52', '2022-09-01 04:05:52'),
(39, 'jaber salem', NULL, NULL, NULL, NULL, 'aboosalem@gmail.com', NULL, '$2y$10$Th6KWBPZlr1PPJJ43Zq2oumQT6MEwN7rRjc8l/7d4s/Kj1dtgwEpa', 'admin', NULL, NULL, '2022-09-03 11:15:27', '2022-09-03 11:15:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fix_forms`
--
ALTER TABLE `fix_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `student_users`
--
ALTER TABLE `student_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_number_unique` (`number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fix_forms`
--
ALTER TABLE `fix_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_users`
--
ALTER TABLE `student_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
