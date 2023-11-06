-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2023 at 03:53 PM
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
-- Database: `maharajaweddingplanner`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2a$12$Cv5a.VNe6daq2NbBRUWfqeh6hxgphrtRSf7k3eaSiNLUY9QmopPpK');

-- --------------------------------------------------------

--
-- Table structure for table `all_vendor`
--

CREATE TABLE `all_vendor` (
  `id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `all_vendor`
--

INSERT INTO `all_vendor` (`id`, `vendor_id`, `nama`, `foto`, `instagram`) VALUES
(11, 1, 'Lucky Hakim', 'pW3o5NGLHy.jpg', 'https://www.instagram.com/luckyhakim9/'),
(12, 1, 'Raden Annisa', 'T1dST45s6P.jpg', 'https://www.instagram.com/radenannisabrides/'),
(13, 1, 'Ayung Berinda', 'AaCj4YALzv.jpg', 'https://www.instagram.com/ayungberinda/'),
(14, 1, 'Sanggar Rias Irma', 'ukMDcI8ZYU.jpg', 'https://www.instagram.com/sanggar_rias_irma/'),
(15, 1, 'Rannya Makeup', 'ylaIyIqEPg.jpg', 'https://www.instagram.com/rannya_makeup.artist/'),
(16, 1, 'Windiwi Makeup', 'NURCsTCDFl.jpg', 'https://www.instagram.com/windiwimakeup/'),
(17, 1, 'Nurelia Makeup', 'l4LxDKQs7h.jpg', 'https://www.instagram.com/nurelia_makeup/'),
(18, 1, 'Detayuana Makeup', '9na1cRTxki.jpg', 'https://www.instagram.com/detayuanamakeup/'),
(19, 1, 'Nong Nurhayati Makeup', 'wBScQV27kA.jpg', 'https://www.instagram.com/nong.nurhayatimakeup/'),
(20, 2, 'Numotomidio', 'F4MLkx2kpK.jpg', 'https://www.instagram.com/numotomidio/'),
(21, 2, 'Apict Photo', '5AMJmoiN8x.jpg', 'https://www.instagram.com/apict_photo/'),
(22, 2, 'Kulimoto', 'zlIOoEatFC.jpg', 'https://www.instagram.com/kuli_moto/'),
(23, 2, 'Lucky Motret', 'lCHWWrMu9S.jpg', 'https://www.instagram.com/lucky.motret/'),
(24, 2, 'Serenity Photoworks', 'ESC9xAXaOG.jpg', 'https://www.instagram.com/serenity_photoworks/'),
(25, 2, 'Windra Fotografi', 'TFpByV5JEb.jpg', 'https://www.instagram.com/windrafotografi/'),
(26, 3, 'T.W.O Decoration', 'tWKYSvZi9j.jpg', 'https://www.instagram.com/two_wedding_deco/'),
(27, 3, 'MingArt Decoration', 'CCc3xXFGoS.jpg', 'https://www.instagram.com/mingart.decoration_karawang/'),
(28, 3, 'Twinz Decoration', 'nQvSh8HqNM.jpg', 'https://www.instagram.com/twinz_partydecoration/'),
(29, 3, 'Salam Dekorasi', 'beKAZ3A8ZQ.jpg', 'https://www.instagram.com/salam_dekorasi/'),
(30, 3, 'Miyaz Decoration', 'bVva9Nl6g0.jpg', 'https://www.instagram.com/miyaz_decoration/'),
(31, 4, 'Budiman MC', 'hqgZkzWHGz.jpg', 'https://www.instagram.com/budiman.mc/'),
(32, 4, 'Yuning MC', 'rSL2GiQMH8.jpg', 'https://www.instagram.com/yuning_mc/'),
(33, 4, 'Cepi Hermawan MC', '3P54HSAXTZ.jpg', 'https://www.instagram.com/hermawancepi4/'),
(34, 4, 'Deri MC', 'gsNCLxSOWk.jpg', 'https://www.instagram.com/derinurendi_mc/'),
(35, 4, 'Adhe Sondakh MC', 'owD5oVcj11.jpg', 'https://www.instagram.com/adhe_sondakh/'),
(36, 4, 'Chemmal MC', '1QYg8hKXD0.jpg', 'https://www.instagram.com/chemmal_mc/'),
(37, 4, 'Rizky MC', '9CQLMdHDvk.jpg', 'https://www.instagram.com/rizkyahmadp1/'),
(38, 6, 'Bhawono Music', 'b9UbhanrI1.jpg', 'https://www.instagram.com/bhawonomusic/'),
(39, 6, 'Rinengga', 'NnMbEXhiLM.jpg', 'https://www.instagram.com/rinenggaofficial/'),
(40, 6, 'Saung Music', 'POi3vGhimg.jpg', 'https://www.instagram.com/saung_music/'),
(41, 6, 'Athena Entertainment', 'lTOYfKUSK0.jpg', 'https://www.instagram.com/athena.entertainment/');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(5, 'Full Package'),
(10, 'WO Package');

-- --------------------------------------------------------

--
-- Table structure for table `klien`
--

CREATE TABLE `klien` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `klien`
--

INSERT INTO `klien` (`id`, `nama`, `tanggal`, `lokasi`) VALUES
(2, 'Desi &amp; Budy	', '2023-01-21', 'Jatisari - Karawang'),
(3, 'Shela', '2023-01-08', 'Cibenying - Purwakarta'),
(4, 'Retno CL SRI	', '2023-01-14', 'Masjid Peruri - Karawang'),
(6, 'Bella', '2023-01-15', 'Grand Metropolitan - Bekasi'),
(7, 'Ela &amp; Triana', '2023-01-08', 'Cibungur - Purwakarta'),
(8, 'Nur CL SRI', '2023-01-22', 'Cilamaya Wetan - Karawang'),
(9, 'Fitri &amp; Maulana', '2023-01-22', 'Wadas - Karawang'),
(10, 'Yunike CL TWO', '2023-02-04', 'Purwakarta'),
(11, 'Widhi CL SRI', '2023-02-04', 'Sindang Reret - Karawang'),
(12, 'Tias CL SRI', '2023-02-05', 'Kedung Waringin - Bekasi'),
(13, 'Kintan CL Rannya', '2023-02-05', 'Cikarang'),
(14, 'Putri CL Ravenna', '2023-02-05', 'Pasir Gombong - Cikarang'),
(15, 'Nurul &amp; Pande', '2023-02-11', 'Pakisjaya - Karawang'),
(16, 'Alysia &amp; Alfian', '2023-02-11', 'Karawang'),
(17, 'Ade Dea &amp; Wawan', '2023-02-12', 'Karawang'),
(18, 'Annisa CL Shafira', '2023-02-18', 'Gd. Mustikasari - Bekasi'),
(19, 'Lidya CL Rannya', '2023-02-19', 'Asrama Polri Menteng - Jakarta'),
(20, 'Nadya &amp; Muzda', '2023-02-26', 'Harper - Purwakarta'),
(21, 'Niken &amp; Andi', '2023-02-26', 'Brits Hotel - Karawang'),
(22, 'Annissa &amp; Valga', '2023-03-05', 'Alam Ceria - Karawang'),
(23, 'Putri CL Owen', '2023-03-05', 'Sindang Reret - Karawang'),
(24, 'Indah CL SRI', '2023-03-06', 'Masjid Peruri - Karawang'),
(25, 'Silvia &amp; Eka', '2023-04-27', 'Jayakerta - Karawang'),
(26, 'Siti &amp; Hendar CL Devy', '2023-04-29', 'As Syuhada - Cikampek'),
(27, 'Amanda', '2023-04-30', 'Sukatani - Cikarang'),
(28, 'Susi CL SRI', '2023-05-07', 'Badami - Karawang'),
(29, 'Selya &amp; Sulaeman', '2023-05-07', 'Klari - Karawang'),
(30, 'Ais CL Windiwi', '2023-05-07', 'Jatisari - Karawang'),
(31, 'Iis CL SR Nadia', '2023-05-10', 'Walahar - Karawang'),
(32, 'Meylidia CL SRI', '2023-05-11', 'Bintang Alam - Karawang'),
(33, 'Lina CL TWO', '2023-05-14', 'Bungur Sari - Purwakarta'),
(34, 'Rizvia CL SRI', '2023-05-17', 'Masjid Peruri - Karawang'),
(35, 'Nindya CL Rannya', '2023-05-21', 'Hotel Sakura - Cikarang'),
(36, 'Novi CL SRI', '2023-05-27', 'Al Jihad - Karawang'),
(37, 'Julia &amp; Rizal', '2023-05-28', 'Masjid Peruri - Karawang'),
(38, 'Evelyn CL Rannya', '2023-05-28', 'Ibis Style - Bekasi'),
(39, 'Nursyifa CL SRI', '2023-06-03', 'Rawamerta - Karawang'),
(40, 'Robiatul &amp; Aditya', '2023-06-25', 'Blanakan - Subang'),
(41, 'Daeana &amp; Arif', '2023-06-25', 'Johar - Karawang'),
(42, 'Elsa CL Twinz Dekor', '2023-07-02', 'Grand Manampang - Karawang'),
(43, 'Hani CL Twinz Dekor', '2023-07-08', 'Pupuk Kujang - Karawang'),
(44, 'Ira CL Owen', '2023-07-08', 'Rengasdengklok - Karawang'),
(45, 'Nurul &amp; Amad', '2023-07-08', 'Telagasari - Karawang'),
(46, 'Ila CL TWO', '2023-07-09', 'Karawang'),
(47, 'Intan CL Ispi Hotel', '2023-07-09', 'Ispi Hotel - Cikarang'),
(48, 'Kamelia', '2023-07-15', 'Hotel Akshaya - Karawang'),
(49, 'Putri CL SRI', '2023-07-16', 'Pasir Kaliki - Karawang'),
(50, 'Tia &amp; Pramutiar', '2023-07-16', 'Jatisari - Karawang'),
(51, 'Marsanda &amp; Saipul', '2023-07-16', 'Rengasdengklok - Karawang'),
(52, 'Puspa &amp; Wildan', '2023-07-18', 'Sidang Reret - Karawang'),
(53, 'Salsabilah CL Linda', '2023-08-05', 'Indo Alam Sari - Karawang'),
(54, 'Chandra CL RPY', '2023-08-06', 'Rengasdengklok - Karawang'),
(55, 'FY &amp; EAF', '2023-08-08', 'Tanjung Pura - Karawang'),
(56, 'Oktavia', '2023-08-13', 'Sindang Reret - Karawang'),
(57, 'Iko CL RPY', '2023-08-26', 'Bekasi'),
(58, 'Astri &amp; Hafiludin', '2023-09-30', 'Sukakarya - Bekasi'),
(59, 'Gita &amp; Setyo', '2023-09-10', 'Cikarang Utara'),
(60, 'Dhina CL Ike', '2023-09-17', 'Alam Ceria - Karawang'),
(61, 'Thia CL SRI', '2023-09-23', 'Al Jihad - Karawang'),
(62, 'Syamsiyah CL Rannya', '2023-09-29', 'Hotel Sakura - Cikarang'),
(65, 'dr. Ajeng &amp; dr. Rebby (Resepsi)', '2022-12-22', 'Cilamaya - Karawang'),
(66, 'Alicia &amp; Teguh', '2022-12-17', 'Kampung Empang - Purwakarta'),
(67, 'Yohana &amp; Tsauri', '2022-12-17', 'Gd. Sigrong - Purwakarta'),
(68, 'Cinthia &amp; Eri', '2022-12-13', 'Rengasdengklok '),
(69, 'Gina &amp; Dhani', '2022-12-11', 'Cilamaya - Karawang'),
(70, 'Nadia &amp; Rizqi ', '2022-12-10', 'Pebayuran - Karawang'),
(71, 'Evany &amp; Renald', '2022-12-04', 'Walahar - Karawang'),
(72, 'Fira CL SR', '2022-12-04', 'Masjid Peruri - Karawang'),
(73, 'Sarah CL D Khayangan', '2022-12-03', 'Khayangan Hotel - Cikarang'),
(74, 'Putri CL Shafira', '2022-12-03', 'Mang Kabayan Vida - Bekasi'),
(75, 'Cindy CL SRI', '2022-12-03', 'Majalaya - Karawang'),
(76, 'Dea CL SR', '2022-11-27', 'Wadas - Karawang'),
(77, 'Risma &amp; Harry', '2022-11-20', 'Bekasi'),
(78, 'Audi CL Owen', '2022-11-20', 'Al Jihad - Karawang'),
(79, 'Astri &amp; Hilman', '2022-11-13', 'Masjid As Syuhada - Cikampek'),
(80, 'Balqis CL TWO', '2022-11-13', 'Klari - Karawang'),
(81, 'Nenden CL Owen', '2022-11-12', 'Gd. SPK - Karawang'),
(82, 'Maya CL Ratu Bilqis', '2022-11-12', 'Rawamerta - Karawang'),
(83, 'Mega &amp; Hadi', '2022-11-11', 'Indo Alam Sari - Karawang'),
(84, 'Pajriniah &amp; Faris', '2022-11-06', 'Cikarang Utara'),
(85, 'Juwita CL SRI', '2022-11-06', 'Tunggak Jati - Karawang'),
(86, 'Siva &amp; Indra CL TWO', '2022-11-05', 'Rengasdengklok - Karawang'),
(87, 'Della &amp; Reza', '2022-11-05', 'Seafood Elysium Lippo - Cikarang'),
(88, 'Adel &amp; Haidar', '2022-10-23', 'Resinda Hotel - Karawang'),
(89, 'CL TWO', '2022-10-08', 'Masjid Peruri - Karawang'),
(90, 'client Rannya', '2022-10-02', 'Sakura Hotel - Cikarang'),
(91, 'dr. Ririn &amp; Yuldan', '2022-10-01', 'Rawamerta - Karawang'),
(92, 'Reni &amp; Angga', '2022-09-24', 'Bekasi'),
(93, 'CL Rannya', '2022-09-04', 'Cikarang'),
(94, 'Uvite CL SW', '2022-08-28', 'Tirtamulya - Karawang'),
(95, 'Indah CL Owen Wedding', '2022-08-27', 'Masjid Peruri - Karawang'),
(96, 'Mirna &amp; Bagas', '2022-08-21', 'Pabuaran - Subang'),
(97, 'Annisa', '2022-08-20', 'Java Palace Hotel - Cikarang'),
(98, 'Endah &amp; Arif', '2022-08-19', 'Cikarang Timur'),
(99, 'Nisa', '2022-08-18', 'Indo Alam Sari - Karawang'),
(100, 'Mbud', '2022-08-10', 'Telagasari - Karawang'),
(101, 'Dila &amp; Riza', '2022-08-07', 'Tunggak Jati - Karawang'),
(102, 'Client SRI', '2022-08-04', 'Wadas - Karawang'),
(103, 'Leli & Femi', '2022-07-31', 'Grand Manampang - Karawang'),
(104, 'Zahra Client SRI', '2022-07-31', 'Rumah Joglo Dengklok - Karawang'),
(105, 'Irma Client SRI', '2022-07-28', 'Al Ghammar - Karawang'),
(106, 'Vera CL Owen', '2022-07-27', 'Al Jihad - Karawang'),
(107, 'Silvi (Abew Friend\'s) ', '2022-07-24', 'Grand Manampang - Cikampek'),
(108, 'Dian & Syarif CL Rannya', '2022-07-24', 'Tempuran - Karawang'),
(109, 'Handa & Malik CL SRI', '2022-07-24', 'Masjid Peruri - Karawang'),
(110, 'Lina & Bripda Suhaya', '2022-07-23', 'Pengasinan - Bekasi'),
(111, 'Ardelia', '2022-07-23', 'Banyusari - Karawang'),
(112, 'Dewi & Regi', '2022-07-23', 'Indo Alam Sari - Karawang'),
(113, 'Via & Iqbal Client SRI', '2022-07-18', 'Kutawaluya - Karawang'),
(114, 'Nunik & Windra', '2022-07-17', 'Indo Alam Sari - Karawang'),
(115, 'Aida CL Java Palace', '2022-07-03', 'Hotel Java Palace - Cikarang'),
(116, 'Dhea CL Nichanissa', '2022-07-03', 'Cikarang'),
(117, 'Dina & Dimas CL SRI', '2022-07-03', 'Gd. SPK - Karawang'),
(118, 'Inka & Akbar', '2022-07-02', 'Indo Alam Sari - Karawang'),
(119, 'Khaesa &amp; Teguh', '2022-06-05', 'Indo Alam Sari - Karawang'),
(120, 'Hilda & Hasto', '2022-05-29', 'Cibitung - Bekasi'),
(121, 'CL SR', '2022-05-28', 'Al Jihad - Karawang'),
(122, 'Siska & Tri CL SRI', '2022-05-24', 'Al Jihad - Karawang'),
(123, 'Dede & Faqih CL SRI', '2022-05-21', 'Majalaya - Karawang'),
(124, 'Kiki CL Rannya', '2022-05-15', 'Khayangan Hotel - Cikarang'),
(125, 'Windi CL Shafira', '2022-05-15', 'Bumbu Desa - Bekasi'),
(126, 'Indry Indo Alam Sari', '2022-05-14', 'Indo Alam Sari - Karawang'),
(127, 'Rona & Rizki CL SRI', '2022-05-14', 'Rengasdengklok - Karawang'),
(128, 'Mumtaz', '2022-05-14', 'Rengasdengklok - Karawang'),
(129, 'Gina', '2022-05-07', 'Cilamaya - Karawang'),
(130, 'Eva & David', '2022-03-27', 'Al Jihad - Karawang'),
(131, 'Annisa & Denny (own MUA) ', '2022-03-27', 'Bekasi'),
(132, 'Santi (Ina\'s friend)', '2022-03-26', 'Karawang '),
(133, 'Nadia', '2022-03-12', 'Batujaya - Karawang'),
(134, 'Venna (SW) ', '2022-03-05', 'Purwakarta '),
(135, 'Keukeu Client SRI', '2022-02-27', 'Alam Sari BIC - Cikampek'),
(136, 'Tulang (Irwan)', '2022-02-26', 'Wanayasa - Purwakarta'),
(137, 'Alifia & Faisal', '2022-02-13', 'Harper Hotel - Purwakarta'),
(138, 'Dian & Misbah', '2022-02-13', 'Purwakarta'),
(139, 'Syifa & Zen', '2022-02-12', 'Bekasi'),
(140, 'Client Sanggar Rima', '2022-02-09', 'Al Jihad - Karawang'),
(141, 'Cl Java Palace (Urwah & Ahmad)', '2022-02-06', 'Java Palace Hotel - Cikarang'),
(142, 'Estalita (Julia) & Hendri', '2022-02-05', 'Harper Hotel - Purwakarta'),
(143, 'Indri & Yudhi', '2022-01-30', 'Bekasi'),
(144, 'Dara & Tatan', '2022-01-23', 'Cikampek'),
(145, 'dr. Ajeng &amp; dr. Rebby (Akad)', '2022-01-23', 'Cilamaya - Karawang'),
(146, 'Tiwi & Hendri', '2022-01-22', 'GSG 139 - Cikarang'),
(147, 'Client SRI', '2022-01-18', 'Rengasdengklok - Karawang'),
(148, 'Ridhya', '2022-01-15', 'Subang'),
(149, 'Resty Resepsi', '2022-01-12', 'Subang'),
(150, 'Eva & Raystu', '2022-01-09', 'Pasawahan - Purwakarta'),
(151, 'Sherin', '2022-01-08', 'Antero Hotel - Cikarang'),
(152, 'Rudocha Putri', '2022-01-08', 'Jatiluhur - Purwakarta'),
(153, 'Luthfiyah', '2022-01-01', 'Tempuran - Karawang');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` double NOT NULL,
  `foto` varchar(255) NOT NULL,
  `rincian` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `kategori_id`, `nama`, `harga`, `foto`, `rincian`) VALUES
(4, 5, 'Olimpus Package', 85000000, 'RkA6fdC1Br.png', '&lt;p&gt;&lt;strong&gt;MUA dan Busana&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;By @ayungberinda @radenanissabrides&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Make up + Hairdo / Hijab Pengantin Akad &amp;amp; Resepsi&lt;/li&gt;&lt;li&gt;Aksesoris Akad &amp;amp; Resepsi&lt;/li&gt;&lt;li&gt;Busana Pengantin Akad (ready stock)&lt;/li&gt;&lt;li&gt;Busana Pengantin Resepsi (ready stock)&lt;/li&gt;&lt;li&gt;Make up + Hairdo / Hijab Ibu kedua mempelai 1x&lt;/li&gt;&lt;li&gt;Busana Ibu &amp;amp; Bapak kedua mempelai 1x&lt;/li&gt;&lt;li&gt;Make up + Hairdo / Hijab Pagar Ayu 2 orang&lt;/li&gt;&lt;li&gt;Busana Pagar Bagus 2 orang&lt;/li&gt;&lt;li&gt;Hand Bouqet&lt;/li&gt;&lt;li&gt;Soft Lens&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Dekorasi&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;By @mingart.decoration_karawang @two_wedding_deco&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Dekorasi Pelaminan 12 meter&lt;/li&gt;&lt;li&gt;Lampu penerangan area pelaminan&lt;/li&gt;&lt;li&gt;Rangkaian bunga segar mix artificial&lt;/li&gt;&lt;li&gt;Mini garden pelaminan&lt;/li&gt;&lt;li&gt;Sarana Galeri Foto&lt;/li&gt;&lt;li&gt;Sarana Photobooth&lt;/li&gt;&lt;li&gt;Meja Akad Nikah + Kursi Tiffany&lt;/li&gt;&lt;li&gt;Welcome Gate&lt;/li&gt;&lt;li&gt;Karpet Jalan&lt;/li&gt;&lt;li&gt;Standing Flower&lt;/li&gt;&lt;li&gt;Meja penerima tamu 2&lt;/li&gt;&lt;li&gt;Kotak angpao 2&lt;/li&gt;&lt;li&gt;Janur 1&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Dokumentasi&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;By @numotomidio @lucky.motret @serenity_photoworks @windrafotografi&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Prewed + Cetakan 16R (2pcs) &amp;amp; 4R (8 pcs)&lt;/li&gt;&lt;li&gt;2 Wedding Album&lt;/li&gt;&lt;li&gt;Document Wedding (Flashdisk USB)&lt;/li&gt;&lt;li&gt;Video Cinematic Prewed&lt;/li&gt;&lt;li&gt;Video Cinematic Wedding&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Entertainment&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;By @bhawonomusic @athena.entertainment&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Wedding Band / Akustik / Dangdut Electune + Saxo&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;MC Akad + Resepsi&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;By @chemmal_MC @hermawancepi4 @derinurendi_mc @rizkyahmadp1&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Henna Art + Nail Art&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;By @bangshawin @fifit_hennaart&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Kotak Hantaran 10 Pcs&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;By @ikeyunita_hantaran @rustickarawang&lt;/p&gt;&lt;p&gt;&lt;strong&gt;WO On Duty 10 Team&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Free MUA Prewed&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Free Studio Kebutuhan Prewed @impose.studio&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Noted : Vendor yang tersedia bisa dipilih sesuai keinginan dan permintaan kamu ya&lt;/strong&gt;&lt;/p&gt;'),
(5, 10, 'WO Package Full Service', 13000000, 'FU2PjsJOoL.png', '&lt;ul&gt;&lt;li&gt;Budgeting &amp;amp; scheduling&lt;/li&gt;&lt;li&gt;Pemilihan vendors dan dealing&lt;/li&gt;&lt;li&gt;Konsultasi acara&lt;/li&gt;&lt;li&gt;Pendampingan Prewedding&lt;/li&gt;&lt;li&gt;Pendampingan Fitting Busana&lt;/li&gt;&lt;li&gt;Meeting Konsep&lt;/li&gt;&lt;li&gt;Pembuatan rundown acara hari H&lt;/li&gt;&lt;li&gt;Koordinasi vendor&lt;/li&gt;&lt;li&gt;1 Leader &amp;amp; 7 Member. 1 Member pendamping semenjak dealing.&lt;/li&gt;&lt;li&gt;8 jam Kerja terhitung Persiapan acara.&lt;/li&gt;&lt;li&gt;Kelebihan jam kerja dihitung over time disesuaikan dengan kesepakatan.&lt;br&gt;&amp;nbsp;&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Noted : Paket ini hanya untuk WO saja tidak mencakup MUA, Dekorasi dan lainnya ya&lt;/strong&gt;&lt;/p&gt;'),
(6, 5, 'Hera Package', 70000000, 'jDCbC5wFvJ.png', '&lt;p&gt;&lt;strong&gt;MUA dan Busana&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;By @sanggar_rias_irma @detayuanamakeup @windiwimakeup @rannya_makeup.artist&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Make up + Hairdo / Hijab Pengantin Akad &amp;amp; Resepsi&lt;/li&gt;&lt;li&gt;Aksesoris Akad &amp;amp; Resepsi&lt;/li&gt;&lt;li&gt;Busana Pengantin Akad (ready stock)&lt;/li&gt;&lt;li&gt;Busana Pengantin Resepsi (ready stock)&lt;/li&gt;&lt;li&gt;Make up + Hairdo / Hijab Ibu kedua mempelai 1x&lt;/li&gt;&lt;li&gt;Busana Ibu &amp;amp; Bapak kedua mempelai 1x&lt;/li&gt;&lt;li&gt;Make up + Hairdo / Hijab Pagar Ayu 3 orang&lt;/li&gt;&lt;li&gt;Busana Pagar Bagus 3 orang&lt;/li&gt;&lt;li&gt;Hand Bouqet&lt;/li&gt;&lt;li&gt;Soft Lens&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Dekorasi&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;By @two_wedding_deco @twinz_partydecoration @salam_dekorasi&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Dekorasi Pelaminan 8 meter&lt;/li&gt;&lt;li&gt;Lampu penerangan area pelaminan&lt;/li&gt;&lt;li&gt;Rangkaian bunga segar mix artificial&lt;/li&gt;&lt;li&gt;Mini garden pelaminan&lt;/li&gt;&lt;li&gt;Sarana Galeri Foto&lt;/li&gt;&lt;li&gt;Sarana Photobooth&lt;/li&gt;&lt;li&gt;Meja Akad Nikah + Kursi Tiffany&lt;/li&gt;&lt;li&gt;Welcome Gate&lt;/li&gt;&lt;li&gt;Karpet Jalan&lt;/li&gt;&lt;li&gt;Karpet Area Tenda 100m&lt;/li&gt;&lt;li&gt;Standing Flower&lt;/li&gt;&lt;li&gt;Meja penerima tamu 2&lt;/li&gt;&lt;li&gt;Kotak angpao 2&lt;/li&gt;&lt;li&gt;Janur 1&lt;/li&gt;&lt;li&gt;Blower 3 unit&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Tenda&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Tenda VIP 200m²&lt;/li&gt;&lt;li&gt;Kain Side Wall&lt;/li&gt;&lt;li&gt;1 Unit Panggung Pelaminan&lt;/li&gt;&lt;li&gt;1 Unit Panggung Hiburan&lt;/li&gt;&lt;li&gt;1 Sett Meja Prasmanan&lt;/li&gt;&lt;li&gt;Roll top 6 pcs&lt;/li&gt;&lt;li&gt;Piring, sendok, garpu 150 pcs&lt;/li&gt;&lt;li&gt;Kursi Futura + cover 150 pcs&lt;/li&gt;&lt;li&gt;Lighting area tenda 10 titik&lt;/li&gt;&lt;li&gt;Saung Gubukan 2 pcs&lt;/li&gt;&lt;li&gt;Meja VIP 1 pcs&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Dokumentasi&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;By @numotomidio @apict_photo @kuli_moto&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Prewed + Cetakan 16R (2pcs) &amp;amp; 4R (8 pcs)&lt;/li&gt;&lt;li&gt;2 Wedding Album&lt;/li&gt;&lt;li&gt;Document Wedding (Flashdisk USB)&lt;/li&gt;&lt;li&gt;Video Cinematic Prewed&lt;/li&gt;&lt;li&gt;Video Cinematic Wedding&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Entertainment&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;By @rinenggaofficial @bhawonomusic @saung_music&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Upacara Adat Live Music&lt;/li&gt;&lt;li&gt;Wedding Band / Akustik / Dangdut Electune + Saxo&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;MC Akad + Resepsi&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;By @hermawancepi4 @budiman.mc @derinurendi_mc @yuning_mc @rizkyahmadp1 @adhe_sondakh&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Henna Art&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;By @bangshawin @fifit_hennaart&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Kotak Hantaran 10 Pcs&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;By @ikeyunita_hantaran @rustickarawang&lt;/p&gt;&lt;p&gt;&lt;strong&gt;WO On Duty 8 Team&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Free MUA Prewed&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Free Studio Kebutuhan Prewed @impose.studio&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Noted : Vendor yang tersedia bisa dipilih sesuai keinginan dan permintaan kamu ya&lt;/strong&gt;&lt;/p&gt;'),
(7, 5, 'Aphrodite Package', 60000000, '6Zbrf6LmmW.png', '&lt;p&gt;&lt;strong&gt;MUA dan Busana&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;By @sanggar_rias_irma @windiwimakeup @rannya_makeup.artist @nurelia_makeup @detayuanamakeup&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Make up + Hairdo / Hijab Pengantin Akad &amp;amp; Resepsi&lt;/li&gt;&lt;li&gt;Aksesoris Akad &amp;amp; Resepsi&lt;/li&gt;&lt;li&gt;Busana Pengantin Akad (ready stock)&lt;/li&gt;&lt;li&gt;Busana Pengantin Resepsi (ready stock)&lt;/li&gt;&lt;li&gt;Make up + Hairdo / Hijab Ibu kedua mempelai 1x&lt;/li&gt;&lt;li&gt;Busana Ibu &amp;amp; Bapak kedua mempelai 1x&lt;/li&gt;&lt;li&gt;Make up + Hairdo / Hijab Pagar Ayu 2 orang&lt;/li&gt;&lt;li&gt;Busana Pagar Bagus 2 orang&lt;/li&gt;&lt;li&gt;Hand Bouqet&lt;/li&gt;&lt;li&gt;Soft Lens&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Dekorasi&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;By @two_wedding_deco&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Dekorasi Pelaminan 10 meter&lt;/li&gt;&lt;li&gt;Lampu penerangan area pelaminan&lt;/li&gt;&lt;li&gt;Rangkaian bunga segar mix artificial&lt;/li&gt;&lt;li&gt;Mini garden pelaminan&lt;/li&gt;&lt;li&gt;Sarana Galeri Foto&lt;/li&gt;&lt;li&gt;Sarana Photobooth&lt;/li&gt;&lt;li&gt;Meja Akad Nikah + Kursi Tiffany&lt;/li&gt;&lt;li&gt;Welcome Gate&lt;/li&gt;&lt;li&gt;Karpet Jalan&lt;/li&gt;&lt;li&gt;Standing Flower&lt;/li&gt;&lt;li&gt;Meja penerima tamu 2&lt;/li&gt;&lt;li&gt;Kotak angpao 2&lt;/li&gt;&lt;li&gt;Janur 1&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Dokumentasi&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;By @numotomidio @apict_photo @kuli_moto&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Prewed + Cetakan 16R (2pcs) &amp;amp; 4R (8 pcs)&lt;/li&gt;&lt;li&gt;2 Wedding Album&lt;/li&gt;&lt;li&gt;Document Wedding (Flashdisk USB)&lt;/li&gt;&lt;li&gt;Video Cinematic Prewed&lt;/li&gt;&lt;li&gt;Video Cinematic Wedding&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Entertainment&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;By @bhawonomusic @saung_music @athena.entertainment&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Wedding Band / Akustik / Dangdut Electune + Saxo&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;MC Akad + Resepsi&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;By @chemmal_MC @hermawancepi4 @budiman.mc @derinurendi_mc @rizkyahmadp1 @yuning_mc&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Henna Art&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;By @bangshawin @fifit_hennaart&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Kotak Hantaran 10 Pcs&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;By @ikeyunita_hantaran @rustickarawang&lt;/p&gt;&lt;p&gt;&lt;strong&gt;WO On Duty 8 Team&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Free MUA Prewed&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Free Studio Kebutuhan Prewed @impose.studio&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Noted : Vendor yang tersedia bisa dipilih sesuai keinginan dan permintaan kamu ya&lt;/strong&gt;&lt;/p&gt;'),
(8, 5, 'Artemis Package', 50000000, 'dIunoMCxmq.png', '&lt;p&gt;&lt;strong&gt;MUA dan Busana&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;By @sanggar_rias_irma @windiwimakeup @rannya_makeup.artist @nurelia_makeup&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Make up + Hairdo / Hijab Pengantin Akad &amp;amp; Resepsi&lt;/li&gt;&lt;li&gt;Aksesoris Akad &amp;amp; Resepsi&lt;/li&gt;&lt;li&gt;Busana Pengantin Akad (ready stock)&lt;/li&gt;&lt;li&gt;Busana Pengantin Resepsi (ready stock)&lt;/li&gt;&lt;li&gt;Make up + Hairdo / Hijab Ibu kedua mempelai 1x&lt;/li&gt;&lt;li&gt;Busana Ibu &amp;amp; Bapak kedua mempelai 1x&lt;/li&gt;&lt;li&gt;Make up + Hairdo / Hijab Pagar Ayu 2 orang&lt;/li&gt;&lt;li&gt;Busana Pagar Bagus 2 orang&lt;/li&gt;&lt;li&gt;Hand Bouqet&lt;/li&gt;&lt;li&gt;Soft Lens&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Dekorasi&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;By @twinz_partydecoration @salam_dekorasi&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Dekorasi Pelaminan 8 meter&lt;/li&gt;&lt;li&gt;Lampu penerangan area pelaminan&lt;/li&gt;&lt;li&gt;Rangkaian bunga segar mix artificial&lt;/li&gt;&lt;li&gt;Mini garden pelaminan&lt;/li&gt;&lt;li&gt;Sarana Galeri Foto&lt;/li&gt;&lt;li&gt;Sarana Photobooth&lt;/li&gt;&lt;li&gt;Meja Akad Nikah + Kursi Tiffany&lt;/li&gt;&lt;li&gt;Welcome Gate&lt;/li&gt;&lt;li&gt;Karpet Jalan&lt;/li&gt;&lt;li&gt;Standing Flower&lt;/li&gt;&lt;li&gt;Meja penerima tamu 2&lt;/li&gt;&lt;li&gt;Kotak angpao 2&lt;/li&gt;&lt;li&gt;Janur 1&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Dokumentasi&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;By @numotomidio @apict_photo&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Prewed + Cetakan 16R (2pcs) &amp;amp; 4R (8 pcs)&lt;/li&gt;&lt;li&gt;2 Wedding Album&lt;/li&gt;&lt;li&gt;Document Wedding (Flashdisk USB)&lt;/li&gt;&lt;li&gt;Video Cinematic Wedding&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Entertainment&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;By @bhawonomusic @saung_music&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Wedding Band / Akustik / Dangdut Electune + Saxo&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;MC Akad + Resepsi&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;By @hermawancepi4 @budiman.mc @yuning_mc @derinurendi_mc @rizkyahmadp1 @adhe_sondakh&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Henna Art&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;By @bangshawin @fifit_hennaart&lt;/p&gt;&lt;p&gt;&lt;strong&gt;WO On Duty 6 Team&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Free MUA Prewed&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Free Studio Kebutuhan Prewed @impose.studio&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Noted : Vendor yang tersedia bisa dipilih sesuai keinginan dan permintaan kamu ya&lt;/strong&gt;&lt;/p&gt;'),
(10, 10, 'WO Package Gold', 6000000, 'vNoShYs8NF.png', '&lt;ul&gt;&lt;li&gt;1 Leader &amp;amp; 5 Member&lt;/li&gt;&lt;li&gt;Koordinasi vendors&lt;/li&gt;&lt;li&gt;Konsultasi konsep acara&lt;/li&gt;&lt;li&gt;Pembuatan Rundown&lt;/li&gt;&lt;li&gt;1x Technical Meeting&lt;/li&gt;&lt;li&gt;8 jam Kerja terhitung Persiapan acara.&lt;/li&gt;&lt;li&gt;Kelebihan jam kerja dihitung over time disesuaikan dengan kesepakatan.&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Noted : Paket ini hanya untuk WO saja tidak mencakup MUA, Dekorasi dan lainnya ya&lt;/strong&gt;&lt;/p&gt;'),
(11, 10, 'WO Package Platinum', 8000000, 'vRVbL6nC7i.png', '&lt;ul&gt;&lt;li&gt;1 Leader &amp;amp; 7 Member&lt;/li&gt;&lt;li&gt;Koordinasi vendors&lt;/li&gt;&lt;li&gt;Konsultasi konsep acara&lt;/li&gt;&lt;li&gt;Pembuatan Rundown&lt;/li&gt;&lt;li&gt;1x Technical Meeting&lt;/li&gt;&lt;li&gt;8 jam Kerja terhitung Persiapan acara.&lt;/li&gt;&lt;li&gt;Kelebihan jam kerja dihitung over time disesuaikan dengan kesepakatan.&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Noted : Paket ini hanya untuk WO saja tidak mencakup MUA, Dekorasi dan lainnya ya&lt;/strong&gt;&lt;/p&gt;'),
(12, 10, 'WO Package Silver', 4500000, '8RexKclrNw.png', '&lt;ul&gt;&lt;li&gt;1 Leader &amp;amp; 4 Member&lt;/li&gt;&lt;li&gt;Koordinasi vendors&lt;/li&gt;&lt;li&gt;Konsultasi konsep acara&lt;/li&gt;&lt;li&gt;Pembuatan Rundown&lt;/li&gt;&lt;li&gt;1x Technical Meeting&lt;/li&gt;&lt;li&gt;8 jam Kerja terhitung Persiapan acara.&lt;/li&gt;&lt;li&gt;Kelebihan jam kerja dihitung over time disesuaikan dengan kesepakatan.&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Noted : Paket ini hanya untuk WO saja tidak mencakup MUA, Dekorasi dan lainnya ya&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `nama`, `foto`) VALUES
(18, 'Reza', '8S3m9QrB7h.jpg'),
(19, 'Yuday', 'JbohNG6XYp.jpg'),
(20, 'Ojay', 'GuvLO0GV59.jpg'),
(21, 'Arif', 'Og2r1sowlu.jpg'),
(22, 'Irvan', '8I1uM1OyQF.jpg'),
(23, 'Abew', 'roF18JcXTd.jpg'),
(24, 'Opik', 'MMMzE4uShH.jpg'),
(25, 'Ido', 'rGOevM3w5f.jpg'),
(26, 'Abiw', 'NR0xoKkz63.jpg'),
(27, 'Dars', 'i133zvDSeB.jpg'),
(28, 'Risa', 'ulkJ4Rvo6B.jpg'),
(29, 'Ina', 'iGQU4W9sWF.jpg'),
(30, 'Ivonne', 'dUMfahZmW0.jpg'),
(31, 'Vay', '7FlW4iKmZo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testi`
--

CREATE TABLE `testi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `rating` double NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testi`
--

INSERT INTO `testi` (`id`, `nama`, `rating`, `komentar`) VALUES
(17, 'Budiman', 5, 'Paket lengkap, para crew yang cepat, tanggap, dan berdedikasi. '),
(21, 'Irwan Hoerudin', 5, 'WELL Terbaik'),
(25, 'Ade Dera Erdistira', 5, 'Pelayanan yang sangat baik dan memuaskan'),
(26, 'Zelita Dewi Yulandari', 5, 'Pelayanan yang memuaskan ketika menggunakan jasa Maharaja Wedding Planner sehingga pernikahan berjalan sesuai rundown dan dapat handle ketika ada sedikit ketidaksesuaian jadwal.'),
(27, 'Eni Nadia Pega', 5, 'Super gercep dan sangat puas dengan pelayanan Maharaja karena crew sangat memahami jobdescnya masing2.');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `nama`, `foto`) VALUES
(1, 'MakeUp Artist', 'EkL48AaPpN.jpg'),
(2, 'Documentation', 'AFJSSn8l3u.jpg'),
(3, 'Decoration', '4yQbgpgWof.jpg'),
(4, 'MC', 'j668cOBwOY.jpeg'),
(6, 'Entertainment', 'FjESEYOKOr.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_vendor`
--
ALTER TABLE `all_vendor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vendor_id` (`vendor_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klien`
--
ALTER TABLE `klien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_package` (`kategori_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testi`
--
ALTER TABLE `testi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `all_vendor`
--
ALTER TABLE `all_vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `klien`
--
ALTER TABLE `klien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `testi`
--
ALTER TABLE `testi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `all_vendor`
--
ALTER TABLE `all_vendor`
  ADD CONSTRAINT `all_vendor_ibfk_1` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`id`);

--
-- Constraints for table `package`
--
ALTER TABLE `package`
  ADD CONSTRAINT `kategori_package` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
