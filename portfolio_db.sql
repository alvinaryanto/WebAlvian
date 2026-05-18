-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: May 18, 2026 at 05:16 AM
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
-- Database: `portfolio_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `order_number` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `image`, `title`, `description`, `order_number`) VALUES
(1, 'asset/img/hero.jpg', 'Pos 2 - Bukit Mongkrang', 'Kecintaan terhadap Tuhan dan dan ciptaannya.', 4),
(2, 'asset/img/bg-2.png', 'Gadget & Catatan', 'Dalam diriku selalu ada rasa ingin tau.', 2),
(3, 'asset/img/bg-1.png', 'Mouse & Keyboard', 'Diriku lahir untuk menggerakkan dan membuat.', 3),
(4, 'asset/img/andong.JPEG', 'Diriku', 'Manusia yang belajar memahami dunia', 1),
(5, 'asset/img/pantai.JPEG', 'Pantai Karangpayung', 'Ketenangan dalam alam', 5),
(6, 'asset/img/pinus.JPEG', 'Gunung Andong', 'Melintasi keberagaman', 6);

-- --------------------------------------------------------

--
-- Table structure for table `chart_data`
--

CREATE TABLE `chart_data` (
  `id` int(11) NOT NULL,
  `label` varchar(50) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chart_data`
--

INSERT INTO `chart_data` (`id`, `label`, `value`) VALUES
(1, 'HTML & CSS', 85),
(2, 'JavaScript', 70),
(3, 'PHP & SQL', 60),
(4, 'Data Analis', 80),
(5, 'PLC', 70),
(6, 'Elektrikal', 75);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'Alvian', 'alvin.aryanto05@gmail.com', 'Uji coba masuk apa tidak', '2026-05-17 06:40:45');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `image`) VALUES
(1, 'Website Bootstrap', 'Project dilakukan dengan menggunakan Bootstrap 5. diampu oleh Mas Sugi, selaku instruktur pemograman.', 'asset/img/a1.png'),
(2, 'Display Teks', 'Project ini bertujuan untuk menampilkan teks dengan baik dan benar, serta diberi sound. diampu oleh Mas Johan, selaku instruktur protokol.', 'asset/img/a2.jpg'),
(3, 'Diri Sendiri', 'Project yang dilakukan dengan niat, usaha, dan kerja keras yang konsisten', 'asset/img/bg-2.png'),
(4, 'Energy Audit', 'Melakukan audit energi pada Gedung Arrupe POLITEKNIK ATMI SURAKARTA, audit yang dilakukan adalah audit Kelistrikan, Suhu, dan Pencahayaan.', 'asset/img/stevent.JPEG'),
(5, 'AMR Ricoob', 'Autonomous Mobile Robot dengan basis Human Follower, memudahkan perpindahan alat Tensi pada bidang kesehatan', 'asset/img/Doc_Gambar3d.PNG'),
(6, 'Inflantable Vest', 'Mendevelop sebuah rompi pemeluk untuk anak berkebutuhan khusus, berbasis otomasisasi yang mendeteksi detak jantung ataupun guncangan', 'asset/img/hug.JPG'),
(7, 'AI Nutrition Analyzer', 'Mendeteksi jumlah nutrisi pada makanan yang berbasis pada Program MBG di Indonesia', 'asset/img/mbg.JPEG'),
(8, 'Menjelajah Alam', 'Melintasi beragam keindahan buatan Pencipta', 'asset/img/pantai2.JPEG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chart_data`
--
ALTER TABLE `chart_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `chart_data`
--
ALTER TABLE `chart_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
