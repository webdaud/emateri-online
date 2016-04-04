-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 26, 2015 at 01:52 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `E-Materi`
--

-- --------------------------------------------------------

--
-- Table structure for table `favorit_pengguna`
--

CREATE TABLE IF NOT EXISTS `favorit_pengguna` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_dosen_favorit` int(4) DEFAULT NULL,
  `id_saya` int(4) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `favorit_pengguna`
--

INSERT INTO `favorit_pengguna` (`id`, `id_dosen_favorit`, `id_saya`, `updated_at`, `created_at`) VALUES
(1, 81, 72, '2015-03-11 23:54:40', '2015-03-11 23:54:40'),
(2, 93, 72, '2015-03-11 23:55:40', '2015-03-11 23:55:40'),
(3, 83, 72, '2015-03-11 23:57:09', '2015-03-11 23:57:09'),
(4, 97, 72, '2015-03-11 23:57:36', '2015-03-11 23:57:36'),
(5, 92, 72, '2015-03-14 01:00:43', '2015-03-14 01:00:43'),
(6, 85, 72, '2015-03-14 01:01:20', '2015-03-14 01:01:20'),
(7, 86, 72, '2015-03-14 01:03:47', '2015-03-14 01:03:47'),
(8, 88, 72, '2015-04-15 03:33:00', '2015-04-15 03:33:00'),
(9, 95, 72, '2015-04-18 15:51:10', '2015-04-18 15:51:10'),
(10, 81, 98, '2015-04-22 03:36:41', '2015-04-22 03:36:41'),
(11, 81, 98, '2015-04-22 03:50:19', '2015-04-22 03:50:19'),
(12, 81, 103, '2015-06-13 03:07:56', '2015-06-13 03:07:56'),
(13, 102, 103, '2015-06-13 03:08:31', '2015-06-13 03:08:31'),
(14, 84, 104, '2015-06-25 02:50:44', '2015-06-25 02:50:44'),
(15, 81, 104, '2015-06-25 02:51:46', '2015-06-25 02:51:46'),
(16, 95, 104, '2015-06-25 02:52:00', '2015-06-25 02:52:00');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE IF NOT EXISTS `konten` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `id_login` int(4) NOT NULL,
  `nama_file` varchar(85) NOT NULL DEFAULT '',
  `tipe_file` varchar(7) NOT NULL,
  `lokasi` varchar(100) DEFAULT '',
  `id_matakuliah` int(9) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Meminta_Id_Login` (`id_login`),
  KEY `Meminta_Mata_Kuliah` (`id_matakuliah`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=125 ;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id`, `id_login`, `nama_file`, `tipe_file`, `lokasi`, `id_matakuliah`, `created_at`, `updated_at`) VALUES
(43, 97, 'Pemograman Jaringan Minggu 1 - Silabus.pdf', 'pdf', 'Data_Upload/28/pj-minggu1- Silabus.pdf', 28, '2015-03-15 14:44:46', '2015-03-15 14:50:48'),
(44, 97, 'Pemograman Jaringan Minggu 2 - Client Server.pdf', 'pdf', 'Data_Upload/28/pj-minggu2 - Client Server.pdf', 28, '2015-03-15 14:44:52', '2015-03-15 14:50:59'),
(45, 97, 'Pemograman Jaringan Minggu 3 - Stream Input:Output.pdf', 'pdf', 'Data_Upload/28/pj-minggu3 - Stream Input:Output.pdf', 28, '2015-03-15 14:44:57', '2015-03-15 14:51:13'),
(46, 97, 'Pemograman Jaringan Minggu 4 - Pemograman HTTP.pdf', 'pdf', 'Data_Upload/28/pj-minggu4 - Pemograman HTTP.pdf', 28, '2015-03-15 14:45:04', '2015-03-15 14:51:38'),
(47, 97, 'Pemograman Jaringan Minggu 5 - Pemograman Jaringan.pptx', 'pptx', 'Data_Upload/28/pj-minggu5 - Pemograman Jaringan.pptx', 28, '2015-03-15 14:45:16', '2015-03-15 14:51:48'),
(48, 97, 'Pemograman Jaringan Minggu 6 - JDBC.pdf', 'pdf', 'Data_Upload/28/pj-minggu6 - JDBC.pdf', 28, '2015-03-15 14:45:31', '2015-03-15 14:52:01'),
(49, 97, 'Pemograman Jaringan Minggu 7 - Web Services.pdf', 'pdf', 'Data_Upload/28/pj-minggu7 - Web Services.pdf', 28, '2015-03-15 14:45:48', '2015-03-15 14:52:44'),
(50, 97, 'Pemograman Jaringan Minggu 8 - Web Services 2.pdf', 'pdf', 'Data_Upload/28/pj-minggu8 - Web Services 2.pdf', 28, '2015-03-15 14:46:01', '2015-03-15 14:52:55'),
(51, 97, 'Pemograman Jaringan Minggu 8 - Membuat Web Service (Eclipse).mp4', 'mp4', 'Data_Upload/28/Pemograman Jaringan Minggu 8 - Membuat Web Service (Eclipse).mp4', 28, '2015-03-15 14:55:52', '2015-03-15 14:55:52'),
(52, 85, 'Materi PBO 1.pdf', 'pdf', 'Data_Upload/30/Materi PBO 1.pdf', 30, '2015-03-15 15:06:50', '2015-03-15 15:06:50'),
(56, 85, 'Materi 1.ppt', 'ppt', 'Data_Upload/31/Materi 1.ppt', 31, '2015-03-15 15:12:33', '2015-03-15 15:12:33'),
(57, 85, 'Materi 2.ppt', 'ppt', 'Data_Upload/31/Materi 2.ppt', 31, '2015-03-15 15:12:53', '2015-03-15 15:12:53'),
(58, 85, 'Materi 3.ppt', 'ppt', 'Data_Upload/31/Materi 3.ppt', 31, '2015-03-15 15:13:05', '2015-03-15 15:13:05'),
(59, 97, 'Pemograman Jaringan Minggu 8 - Membuat Web Service (Eclipse) 2.mp4', 'mp4', 'Data_Upload/28/Pemograman Jaringan Minggu 8 - Membuat Web Service (Eclipse) 2.mp4', 28, '2015-03-15 15:20:53', '2015-03-15 15:20:53'),
(60, 97, 'Pertemuan 1 - Modul Native Aplikasi Android.pdf', 'pdf', 'Data_Upload/32/Modul Native Aplikasi Android.pdf', 32, '2015-03-17 03:25:01', '2015-03-17 03:25:16'),
(61, 81, 'Materi Pertemuan 2.pptx', 'pptx', 'Data_Upload/23/Pert_24_Teknis UAS.pptx', 23, '2015-03-22 07:47:07', '2015-04-22 03:25:42'),
(62, 66, 'Tes', 'Test', 'Tes', 19, NULL, NULL),
(64, 81, 'Materi Pertemuan Ke - 1.pdf', 'pdf', 'Data_Upload/35/ClearOS 5.2.pdf', 35, '2015-04-21 08:22:13', '2015-04-21 08:23:21'),
(65, 81, 'Materi Pertemuan Ke-2.pdf', 'pdf', 'Data_Upload/35/Laravel 4 Application Development - Hardik Dangar-signed.pdf', 35, '2015-04-21 08:22:27', '2015-04-21 08:23:38'),
(67, 81, 'Source Code Pertemuan 1.zip', 'zip', 'Data_Upload/35/cinject-0.5.3.zip', 35, '2015-04-21 08:26:58', '2015-04-22 03:32:52'),
(68, 81, 'Source Code  - Pertemuan 1.zip', 'zip', 'Data_Upload/23/cinject-0.5.3 (1).zip', 23, '2015-04-21 08:32:59', '2015-04-22 03:27:21'),
(70, 81, 'Materi Pertemuan 1.ppt', 'ppt', 'Data_Upload/23/Galat Relative.ppt', 23, '2015-04-22 03:24:49', '2015-04-22 03:25:32'),
(71, 81, 'Materi Pertemuan 3.ppt', 'ppt', 'Data_Upload/23/rpl2.ppt', 23, '2015-04-22 03:25:02', '2015-04-22 03:25:51'),
(73, 81, 'Source Code - Pertemuan 2.rar', 'rar', 'Data_Upload/23/BlackBox Testing.rar', 23, '2015-04-22 03:27:32', '2015-04-22 03:28:12'),
(76, 81, 'Source Code Pertemuan 2.zip', 'zip', 'Data_Upload/35/appicontemplate_v4.1.zip', 35, '2015-04-22 03:33:01', '2015-04-22 03:33:13'),
(81, 81, '1. Coding Menggunakan Eclipse.mp4', 'mp4', 'Data_Upload/23/Pengenalan Pemrograman Berorientasi Objek.mp4', 23, '2015-06-09 15:11:29', '2015-06-15 06:13:09'),
(84, 81, 'Windows 8 Ultimate.iso', 'iso', 'Data_Upload/23/data.iso', 23, '2015-06-14 04:45:37', '2015-06-14 06:47:09'),
(85, 81, '4. Membuat Aplikasi Android Sederhana.mp4', 'mp4', 'Data_Upload/23/Belajar Pemrograman Android - Tutorial Membuat Aplikasi Android Sederhana.mp4', 23, '2015-06-14 06:46:04', '2015-06-15 06:32:03'),
(86, 81, '2. Pengenalan Database.mp4', 'mp4', 'Data_Upload/23/Pemrograman Android (Bagian 5a_ Pengenalan Database).mp4', 23, '2015-06-14 06:46:21', '2015-06-15 06:13:32'),
(87, 81, '3. Mengambil nilai koordinat dari GPS.mp4', 'mp4', 'Data_Upload/23/Tutorial dasar Pemrograman Android - Mengambil nilai koordinat dari GPS.mp4', 23, '2015-06-14 06:46:37', '2015-06-15 06:31:57'),
(88, 94, 'Elektronika Dasar.pdf', 'pdf', 'Data_Upload/40/Elektronika Dasar.pdf', 40, '2015-06-15 06:01:19', '2015-06-15 06:01:19'),
(89, 94, 'Listrik dan Eletronika Dasar.pdf', 'pdf', 'Data_Upload/40/Listrik dan Eletronika Dasar.pdf', 40, '2015-06-15 06:01:26', '2015-06-15 06:01:26'),
(90, 94, 'Mengenal Komponen Komponen Elektronika 1.pdf', 'pdf', 'Data_Upload/40/Mengenal Komponen Komponen Elektronika 1.pdf', 40, '2015-06-15 06:01:31', '2015-06-15 06:01:31'),
(91, 94, 'Mengenal Komponen Komponen Elektronika 2.pdf', 'pdf', 'Data_Upload/40/Mengenal Komponen Komponen Elektronika 2.pdf', 40, '2015-06-15 06:01:36', '2015-06-15 06:01:36'),
(92, 94, 'Rangkaian Elektronika Analog.pdf', 'pdf', 'Data_Upload/40/Rangkaian Elektronika Analog.pdf', 40, '2015-06-15 06:01:42', '2015-06-15 06:01:42'),
(93, 94, 'Dasar-Dasar Pemograman Visual Basic 1.pdf', 'pdf', 'Data_Upload/41/Dasar-Dasar Pemograman Visual Basic 1.pdf', 41, '2015-06-15 06:06:33', '2015-06-15 06:06:33'),
(94, 94, 'Dasar-Dasar Pemograman Visual Basic 2.pdf', 'pdf', 'Data_Upload/41/Dasar-Dasar Pemograman Visual Basic 2.pdf', 41, '2015-06-15 06:06:38', '2015-06-15 06:06:38'),
(95, 94, 'Form Visual Basic.pdf', 'pdf', 'Data_Upload/41/Form Visual Basic.pdf', 41, '2015-06-15 06:06:44', '2015-06-15 06:06:44'),
(96, 94, 'Pengenalan Visual Basic.pdf', 'pdf', 'Data_Upload/41/Pengenalan Visual Basic.pdf', 41, '2015-06-15 06:06:49', '2015-06-15 06:06:49'),
(97, 94, 'Visual Basic 6.0.pdf', 'pdf', 'Data_Upload/41/Visual Basic 6.0.pdf', 41, '2015-06-15 06:07:01', '2015-06-15 06:07:01'),
(98, 87, 'Cinema 4D Versi R13 Full.iso', 'iso', 'Data_Upload/42/Cinema 4D Versi R13 Full.iso', 42, '2015-06-15 06:24:34', '2015-06-15 06:24:34'),
(99, 87, '2. Cinema 4D Showcase.mp4', 'mp4', 'Data_Upload/42/Cinema 4D UK Motion Graphics Reel 2015.mp4', 42, '2015-06-15 06:40:19', '2015-06-15 06:44:52'),
(100, 87, '4. Cinema 4D Relistic Rendering.mp4', 'mp4', 'Data_Upload/42/How to get the best realistic render in cinema 4d.mp4', 42, '2015-06-15 06:40:29', '2015-06-15 07:06:52'),
(101, 87, '1. Apa Itu Cinema 4D.mp4', 'mp4', 'Data_Upload/42/What is CINEMA 4D.mp4', 42, '2015-06-15 06:41:34', '2015-06-15 06:44:46'),
(102, 87, '3. Modeling di Cinema 4D.mp4', 'mp4', 'Data_Upload/42/Modeling Your First Character in Cinema 4D.mp4', 42, '2015-06-15 07:06:09', '2015-06-15 07:06:46'),
(103, 84, '1. PENGENALAN KONSEP IMK.ppt', 'ppt', 'Data_Upload/43/1 PENGENALAN KONSEP IMK.ppt', 43, '2015-06-24 15:26:04', '2015-06-24 15:26:45'),
(104, 84, '2. ASPEK MANUSIA DALAM IMK 2 (cad).ppt', 'ppt', 'Data_Upload/43/2 ASPEK MANUSIA DALAM IMK 2 (cad).ppt', 43, '2015-06-24 15:26:10', '2015-06-24 15:26:53'),
(105, 84, '3. PERHATIAN DAN KETERBATASAN MEMORI.ppt', 'ppt', 'Data_Upload/43/3 PERHATIAN DAN KETERBATASAN MEMORI.ppt', 43, '2015-06-24 15:26:18', '2015-06-24 15:27:05'),
(106, 84, '4. Interface Metaphors dan Model Konseptual.ppt', 'ppt', 'Data_Upload/43/5 Interface Metaphors dan Model Konseptual.ppt', 43, '2015-06-24 15:26:23', '2015-06-24 15:27:20'),
(107, 84, 'UI Designer Software.zip', 'zip', 'Data_Upload/43/UI Designer Software.zip', 43, '2015-06-24 15:29:32', '2015-06-24 15:29:32'),
(110, 102, 'Pertemuan 1.ppt', 'ppt', 'Data_Upload/37/Materi_2_Klasifikasi_JarKom(Mhs).ppt', 37, '2015-06-24 15:45:31', '2015-06-24 15:45:49'),
(111, 102, 'Pertemuan 2.ppt', 'ppt', 'Data_Upload/37/Materi_2_Klasifikasi_JarKom(Mhs).ppt', 37, '2015-06-24 15:45:59', '2015-06-24 15:46:06'),
(112, 102, 'Pertemuan 3.ppt', 'ppt', 'Data_Upload/37/Materi_2_Klasifikasi_JarKom(Mhs).ppt', 37, '2015-06-24 15:46:19', '2015-06-24 15:46:26'),
(113, 103, 'Slide 1.ppt', 'ppt', 'Data_Upload/44/Materi_8_VLAN.ppt', 44, '2015-06-24 15:52:15', '2015-06-24 15:52:38'),
(114, 103, 'Slide 2.ppt', 'ppt', 'Data_Upload/44/Materi_2_Klasifikasi_JarKom(Mhs).ppt', 44, '2015-06-24 15:52:47', '2015-06-24 15:52:57'),
(115, 103, 'Slide 3.ppt', 'ppt', 'Data_Upload/44/Materi_3_Media_JarKom(Mhs).ppt', 44, '2015-06-24 15:53:06', '2015-06-24 15:53:13'),
(117, 95, 'Materi 1 Klasifikasi JarKom(Mhs).ppt', 'ppt', 'Data_Upload/45/Materi_2_Klasifikasi_JarKom(Mhs).ppt', 45, '2015-06-24 16:18:51', '2015-06-24 16:19:21'),
(118, 95, 'Materi 2 Media JarKom(Mhs).ppt', 'ppt', 'Data_Upload/45/Materi_3_Media_JarKom(Mhs).ppt', 45, '2015-06-24 16:18:56', '2015-06-24 16:19:32'),
(119, 95, 'Materi 3 Subnetting IP Address(Mhs).ppt', 'ppt', 'Data_Upload/45/Materi_5_Subnetting_IP_Address(Mhs).ppt', 45, '2015-06-24 16:19:02', '2015-06-24 16:19:45'),
(120, 95, 'Materi 4 VLAN.ppt', 'ppt', 'Data_Upload/45/Materi_8_VLAN.ppt', 45, '2015-06-24 16:19:07', '2015-06-24 16:19:54'),
(121, 85, 'Materi PBO 2.pdf', 'pdf', 'Data_Upload/30/Routing-Concept.pdf', 30, '2015-06-24 16:22:29', '2015-06-24 16:23:02'),
(123, 85, 'Materi PBO 3.pdf', 'pdf', 'Data_Upload/30/Routing-Concept.pdf', 30, '2015-06-24 16:23:49', '2015-06-24 16:23:57'),
(124, 84, '. Soal UTS 2015.pdf', 'pdf', 'Data_Upload/43/Soal UTS 2015.pdf', 43, '2015-06-25 02:43:17', '2015-06-25 02:43:35');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(64) NOT NULL,
  `tipe_user` varchar(13) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `nik` varchar(15) DEFAULT NULL,
  `pesan` varchar(200) DEFAULT NULL,
  `remember_token` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=105 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `tipe_user`, `nama_lengkap`, `nik`, `pesan`, `remember_token`, `created_at`, `updated_at`) VALUES
(66, 'webdaud', '$2y$10$jYhYN0w5C3EnRJdOKaU7quANFNkqfWNh2spW4VaqDkPTKkHOU5SWq', 'Administrator', 'Daud Hamonangan Hot Parulian', NULL, NULL, 'XjIOFAi81nRqHkIb8NHYMZkHKDk1FADHPaKBgcFrfryZaVywrC76CMAcnDyG', '2014-10-04 08:32:13', '2015-07-16 17:41:22'),
(72, 'pengguna', '$2y$10$FWYMAxq463rCi6KB9dDiFeeFW85PbSlzNAYPBf5bigEiaSQS/muUG', 'Pengguna', 'daud hamonangan', NULL, NULL, 'NBJBYWV0goWEmGRRZc5q6Ki18pwdwR4AgrhG8XkrldzzFgAxWAwi6TpNlhKG', '2014-10-04 09:12:40', '2015-06-13 03:46:33'),
(73, 'admin', '$2y$10$Z7Fl4FlEyo0vNPEIPgxpU.O4JU2v0A2NxvP71zok2T4iXyIwZnLQO', 'Administrator', 'Daud Hamonangan', NULL, NULL, 'xsISpgxFAiQZo1i932BbT2C1o6B5lZ5VPIk088BopnyUEIqaoSUcC86LvHxP', '2014-10-04 09:12:58', '2015-06-24 15:51:33'),
(81, 'albert', '$2y$10$SXjTLTU/CF5YECCYeqPPNupbVpLPDfXeHnZA0wFTq98sCDq.yHGye', 'Dosen', 'Albert Goerge Ph. D', '96.401', 'Kalau ada yang perlu ditanyakan silahkan hubungi no. saya di 089617555525', 'JxIRT4uJ91pfBHDcDpBueQfayxEDap0p2M2U7eQKvDZF0iRNhwK2mUQ0momB', '2014-11-29 09:01:25', '2015-06-24 15:15:28'),
(83, 'Heri', '$2y$10$blJRk8eJw1vacGIA1c2h7.XXWNfPmbwjXDJ8D.3OU82UZXUCynlL2', 'Dosen', 'Heri Setiawan, S.Kom', NULL, NULL, '', '2015-03-10 02:08:20', '2015-03-10 02:08:20'),
(84, 'Maura', '$2y$10$XbAb7agCfe/4xZkgpj1.ae1kJdzMThK0d1.wrlC93UDd1FqaRgGzG', 'Dosen', 'Maura Widyaningsih, S.Kom, M.Cs', '96.409', 'Hasil akan ibu umumkan segera.', 'kSIi6MS8PDYWBvMzMQqmaBYuFzwUQk1KhK5eoo7CagjAxio5L85pXy8jaZxS', '2015-03-10 02:10:54', '2015-06-25 02:45:29'),
(85, 'Sulistyowati', '$2y$10$6XpTtiL6QZFLNUwBG297muysr8I8CaG2dFxDLFYhKMMl8eS.0.0oO', 'Dosen', 'Sulistyowati, S.Kom.,M.Cs', '96.401', 'Mahasiswa sekalian, Uas untuk kelas A. dan kelas B tanggal 2 April nanti. ', '2ovEWiaIMgpsBtPQAkReEdaaFWlGE8KTqCDz8EZiPplndqlsgENeuRLRwtBh', '2015-03-10 02:12:04', '2015-06-24 16:24:41'),
(86, 'Yan', '$2y$10$qsEsGcFz3P5hhzb/LNkvAO4r8HPsnKKJt8PxjTk/lvpR6u0OElloi', 'Dosen', 'Yan Friskantoni, S.Si', NULL, NULL, '', '2015-03-10 02:12:42', '2015-03-10 02:12:42'),
(87, 'Firdaus', '$2y$10$.7M5WFAIVEiWU7AiWLNvzeOGOiRXkufRrmJK0IqxJNLdy5/Xo85KC', 'Dosen', 'Firdaus Ph. D', '96.404', 'Semua materi telah di upload disini', 'gTQt6G1DrbOkgm63PPDnyjhZ2kpsmadNTqRHaw8oAoJMKD5ggQEXW3loVtzd', '2015-03-10 02:14:19', '2015-06-15 06:31:43'),
(88, 'Yane', '$2y$10$adth5oZ731.N4jirtnGnIOsROsYztpIxX4b.RLS0LtT5gu40gDa3q', 'Dosen', 'Yane Puspito Sari, SE.,M.Si', NULL, NULL, '', '2015-03-10 02:15:05', '2015-03-10 02:15:05'),
(89, 'Sri', '$2y$10$eHtnE6J5ZDuDA0NOVuaqcOTlbQp9sWDRlxZ0WT9n1Bch73yk7ITY.', 'Dosen', 'Sri Wahyuni, S.T', NULL, NULL, '', '2015-03-10 02:15:59', '2015-03-10 02:15:59'),
(90, 'Suratno', '$2y$10$J57IWpJnu94I1p/FU0Bo9OwfFUujuVHSWaCDlEOt8uZNvIWe0gTuS', 'Dosen', 'Suratno, S.Kom.,M.Si', NULL, NULL, '', '2015-03-10 04:54:39', '2015-03-10 04:54:39'),
(91, 'Suriski', '$2y$10$PyNSJrybVHJjeF6kIxssyeu1aaf8tmJlJh6tZJrNNN86Jvv3e7wXq', 'Dosen', 'Suriski Sitinjak, MT', NULL, NULL, '', '2015-03-10 04:55:05', '2015-03-10 04:55:05'),
(92, 'Erfan', '$2y$10$xEE9260A1dgCn51O5mC/j./kRrp.qA9t7XXx1wXeNJLkJ9ZDLb.em', 'Dosen', 'H. M. Erfan, S.Kom', NULL, NULL, '', '2015-03-10 04:56:08', '2015-03-10 04:56:08'),
(93, 'Herkules', '$2y$10$koEKffDvIDdyGUYGcP7rw.K/NoythyD06POCTQGVOIdezthpv7Gee', 'Dosen', 'Herkules, S.Kom., M.Cs', NULL, NULL, '', '2015-03-10 04:56:47', '2015-03-10 04:56:47'),
(94, 'Dawit', '$2y$10$HdJTSoC7ZUmFcWFNGkjCC.Y1yvNxM1e.KS0Ac6fdhMJHAHsSOEGrO', 'Dosen', 'Drs. Dawit Mathias', '96.402', 'Matakuliah Elektronika Dasar Ujian Setelah 1 Pertemuan Lagi', 'sDJvMBkA1IBQI6aSpZ58q3tdqazIdRUaMuYWen7veG4Qftw9ZmUBwBdiwQK4', '2015-03-10 05:10:34', '2015-06-15 06:12:30'),
(95, 'Samani', '$2y$10$Tk0Cb6TFS8ZZzOK2u/.f4OY0T9jTQ0Fc/saTQ.pdMrUsQfgUGJ8IC', 'Dosen', 'Sam''ani, ST.,M.Kom', NULL, NULL, 'EeQm7B8W6OOgL0WuzbcQlC07TAeHl4cqCS5ye6b5fPNJVU3g3UrIIrEqc3ZK', '2015-03-10 05:11:34', '2015-06-24 16:21:24'),
(97, 'Jonh', '$2y$10$uU5P14PGRLxyoUXErgXDnOLoDk9W6a61H7HaY.XWOCNJQyCdVpQrW', 'Dosen', 'Jonh Fredrik Ulysses, MT', NULL, NULL, 'qLQR8kjaNZC6Cefh2Am88dDXPCBnsU9TLU7SeneCbEZNTNqFr03tPOSSJ6mH', '2015-03-10 20:08:38', '2015-03-17 03:26:08'),
(98, 'rika', '$2y$10$T9OZNSqIe5NVdQS8ogLDg.y3y.K9.ilbuAxEyLrYeRH2e.3lwyCNy', 'Pengguna', 'rika irawan gurahman', NULL, NULL, 'Lgs8d0yecRh8tpXqxk3ahTpYLqETPTXibWIDmkJCJT2CV2ZIqybmfMZpZj9f', '2015-04-22 03:21:38', '2015-04-22 03:50:29'),
(100, 'dina', '$2y$10$x4uo8qs50dryiUC061ZbHOABUTwjakgVmiTzQCaSUtR5Z8hHolcea', 'Pengguna', 'Dina ', NULL, NULL, '', '2015-04-22 03:49:01', '2015-04-22 03:49:01'),
(101, 'sinta', '$2y$10$nqHA8qQXC1EC/zSYfq/FSuqsixZuDehc.Q.9dNnEE2.Ea/J.3IeJe', 'Pengguna', 'Sinta', NULL, NULL, '', '2015-04-22 03:50:50', '2015-04-22 03:50:50'),
(102, 'Susi', '$2y$10$RQx/VT5nmKm8yZKIunwJp.juIlhFQF5Edpy8kW1a6crK1fWScZtbi', 'Dosen', 'Susi Hendartie, M.Kom', '96.405', 'Kumpulkan tugas kalian ke email ibu', 'iYySCEAdO3hiBWlJK8SYeg6lOEgbcjRQ8zpRj9DRtrYXjfC9WuoMWZODspWU', '2015-06-24 15:39:07', '2015-06-24 15:49:43'),
(103, 'sartana', '$2y$10$Bzmy2oeviBwTj700CuCXjeI67cP/YpYcApnN0u9YoDZZHX4HlyZLG', 'Dosen', 'Drs. Sartana, M.Si', '96.406', 'Kelas A dan B Tugas dikumpulkan minggu depan', 'XI6tMrbFNsDFFSB8y5yCvHKzxLmGlDEAX6uV32rFuvGhiWtaohithRdoxG3f', '2015-06-24 15:51:31', '2015-06-24 16:16:56'),
(104, 'daudh', '$2y$10$0fZemehFcpzTh9X8o3U4u.H4Nmp99DMryCF/Zh.j7MgYnVaGQ18sS', 'Pengguna', 'Daud Hamonangan', NULL, NULL, '01SiussLFttNlEjaNAT3zJRqT378xnJLAhq7b31LSfAJNiuZ1sAwWHAWPxht', '2015-06-25 02:47:14', '2015-06-25 02:53:57');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE IF NOT EXISTS `matakuliah` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `matakuliah` varchar(50) NOT NULL DEFAULT '',
  `id_login` int(4) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id`, `matakuliah`, `id_login`, `created_at`, `updated_at`) VALUES
(19, 'Bahasa Ingris', 70, '2014-10-11 18:20:59', '2014-10-11 18:20:59'),
(20, 'Bahasa Indonesia', 70, '2014-10-11 18:21:05', '2014-10-11 18:21:05'),
(21, 'Kalkulus', 70, '2014-10-19 14:36:06', '2014-10-19 14:36:06'),
(22, 'Matematika', 70, '2014-11-03 05:07:31', '2014-11-03 05:07:31'),
(23, 'Pemograman Android', 81, '2015-02-22 02:28:59', '2015-06-14 04:33:15'),
(28, 'Pemrograman Jaringan', 97, '2015-03-15 04:15:13', '2015-03-15 04:15:13'),
(30, 'Desain Sist. Inf. Berorientasi Objek ', 85, '2015-03-15 04:31:54', '2015-03-15 04:31:54'),
(31, 'Testing & Implementasi Sistem ', 85, '2015-03-15 04:33:07', '2015-03-15 04:33:07'),
(32, 'Pemrograman Berorientasi Objek ', 97, '2015-03-17 03:24:35', '2015-03-17 03:24:35'),
(35, 'Pemograman C++', 81, '2015-04-21 08:21:46', '2015-04-21 08:21:46'),
(37, 'Pengolahan Citra ', 102, '2015-04-22 03:53:00', '2015-06-24 15:42:42'),
(40, 'Elektronika Dasar ', 94, '2015-06-15 05:48:23', '2015-06-15 05:48:23'),
(41, 'Pemrograman Visual ', 94, '2015-06-15 05:48:59', '2015-06-15 06:02:34'),
(42, 'Cinema 4D', 87, '2015-06-15 06:20:18', '2015-06-15 06:45:41'),
(43, 'Interaksi Manusia & Komputer', 84, '2015-06-24 15:21:50', '2015-06-24 15:27:42'),
(44, 'Kewirausahaan', 103, '2015-06-24 15:51:47', '2015-06-24 15:51:47'),
(45, 'Jaringan Komputer ', 95, '2015-06-24 16:18:23', '2015-06-24 16:18:23');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `konten`
--
ALTER TABLE `konten`
  ADD CONSTRAINT `Meminta_Id_Login` FOREIGN KEY (`id_login`) REFERENCES `login` (`id`),
  ADD CONSTRAINT `Meminta_Mata_Kuliah` FOREIGN KEY (`id_matakuliah`) REFERENCES `matakuliah` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
