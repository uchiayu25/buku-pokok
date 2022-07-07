-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2022 at 09:14 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `death_note`
--

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `kode_desa` bigint(20) NOT NULL,
  `nama_desa` varchar(50) DEFAULT NULL,
  `kode_kecamatan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`kode_desa`, `nama_desa`, `kode_kecamatan`) VALUES
(5103010001, 'Desa Pecatu', 5103010),
(5103010002, 'Desa Ungasan', 5103010),
(5103010003, 'Desa Kutuh', 5103010),
(5103010004, 'Kelurahan Benoa', 5103010),
(5103010005, 'Kelurahan Tanjung Benoa', 5103010),
(5103010006, 'Kelurahan Jimbaran', 5103010),
(5103020001, 'Kelurahan Kedonganan', 5103020),
(5103020002, 'Kelurahan Tuban', 5103020),
(5103020003, 'Kelurahan Kuta', 5103020),
(5103020004, 'Kelurahan Legian', 5103020),
(5103020005, 'Kelurahan Seminyak', 5103020),
(5103030001, 'Kelurahan Kerobokan Kelod', 5103030),
(5103030002, 'Kelurahan Kerobokan', 5103030),
(5103030003, 'Kelurahan Kerobokan Kaja', 5103030),
(5103030004, 'Desa Tibubeneng', 5103030),
(5103030005, 'Desa Canggu', 5103030),
(5103030006, 'Desa Dalung', 5103030),
(5103040001, 'Desa Cemagi', 5103040),
(5103040002, 'Desa Munggu', 5103040),
(5103040003, 'Desa Pererenan', 5103040),
(5103040004, 'Desa Tumbak Bayuh', 5103040),
(5103040005, 'Desa Buduk', 5103040),
(5103040006, 'Kelurahan Abianbase', 5103040),
(5103040007, 'Kelurahan Sempidi', 5103040),
(5103040008, 'Kelurahan Sading', 5103040),
(5103040009, 'Kelurahan Lukluk', 5103040),
(5103040010, 'Kelurahan Kapal', 5103040),
(5103040011, 'Desa Kekeran', 5103040),
(5103040012, 'Desa Mengwi Tani', 5103040),
(5103040013, 'Desa Mengwi', 5103040),
(5103040014, 'Desa Gulingan', 5103040),
(5103040015, 'Desa Penarungan', 5103040),
(5103040016, 'Desa Baha', 5103040),
(5103040017, 'Desa Werdibhuana', 5103040),
(5103040018, 'Desa Sobangan', 5103040),
(5103040019, 'Desa Sembung', 5103040),
(5103040020, 'Desa Kuwum', 5103040),
(5103050001, 'Desa Darmasaba', 5103050),
(5103050002, 'Desa Sibang Gede', 5103050),
(5103050003, 'Desa Jagapati', 5103050),
(5103050004, 'Desa Angantaka', 5103050),
(5103050005, 'Desa Sedang', 5103050),
(5103050006, 'Desa Sibang Kaja', 5103050),
(5103050007, 'Desa Mekar Bhuana', 5103050),
(5103050008, 'Desa Mambal', 5103050),
(5103050009, 'Desa Abiansemal', 5103050),
(5103050010, 'Desa Dauh Yeh Cani', 5103050),
(5103050011, 'Desa Ayunan', 5103050),
(5103050012, 'Desa Blahkiuh', 5103050),
(5103050013, 'Desa Punggul', 5103050),
(5103050014, 'Desa Bongkasa', 5103050),
(5103050015, 'Desa Taman', 5103050),
(5103050016, 'Desa Selat', 5103050),
(5103050017, 'Desa Sangeh', 5103050),
(5103050018, 'Desa Bongkasa Pertiwi', 5103050),
(5103060001, 'Desa Carangsari', 5103060),
(5103060002, 'Desa Getasan', 5103060),
(5103060003, 'Desa Pangsan', 5103060),
(5103060004, 'Desa Petang', 5103060),
(5103060005, 'Desa Sulangai', 5103060),
(5103060006, 'Desa Pelaga', 5103060),
(5103060007, 'Desa Belok/Sidan', 5103060);

-- --------------------------------------------------------

--
-- Table structure for table `dusun`
--

CREATE TABLE `dusun` (
  `kode_dusun` bigint(20) NOT NULL,
  `nama_dusun` varchar(100) DEFAULT NULL,
  `kode_desa` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dusun`
--

INSERT INTO `dusun` (`kode_dusun`, `nama_dusun`, `kode_desa`) VALUES
(51030100010001, 'Banjar Dinas Kangin', 5103010001),
(51030100010002, 'Banjar Dinas Tengah', 5103010001),
(51030100010003, 'Banjar Dinas Kauh', 5103010001),
(51030100010004, 'Banjar Dinas Karang Boma', 5103010001),
(51030100010005, 'Banjar Dinas Giri Sari', 5103010001),
(51030100010006, 'Banjar Dinas Suluban', 5103010001),
(51030100010007, 'Banjar Dinas Tambyak', 5103010001),
(51030100010008, 'Banjar Dinas Buana Sari', 5103010001),
(51030100010009, 'Banjar Dinas Labuan Sait', 5103010001),
(51030100020001, 'Banjar Kangin', 5103010002),
(51030100020002, 'Banjar Kauh', 5103010002),
(51030100020003, 'Banjar Kelod', 5103010002),
(51030100020004, 'Banjar Santhi Karya', 5103010002),
(51030100020005, 'Banjar Giri Dharma', 5103010002),
(51030100020006, 'Banjar Bakung Sari', 5103010002),
(51030100020007, 'Banjar Wana Giri', 5103010002),
(51030100020008, 'Banjar Sari Karya', 5103010002),
(51030100020009, 'Banjar Wijaya Kusuma', 5103010002),
(51030100020010, 'Banjar Kertha Lestari', 5103010002),
(51030100020011, 'Banjar Werdhi Kosala', 5103010002),
(51030100020012, 'Banjar Mekar Sari', 5103010002),
(51030100020013, 'Banjar Angas Sari', 5103010002),
(51030100020014, 'Banjar Langui', 5103010002),
(51030100030001, 'Banjar Petangan', 5103010003),
(51030100030002, 'Banjar Kaja Jati', 5103010003),
(51030100030003, 'Banjar Jaba Pura', 5103010003),
(51030100030004, 'Banjar Panti Giri', 5103010003),
(51030100040001, 'Lingkungan Terora', 5103010004),
(51030100040002, 'Lingkungan Celuk', 5103010004),
(51030100040003, 'Lingkungan Peken', 5103010004),
(51030100040004, 'Lingkungan Penyarikan', 5103010004),
(51030100040005, 'Lingkungan Peminge', 5103010004),
(51030100040006, 'Lingkungan Sawangan', 5103010004),
(51030100040007, 'Lingkungan Pande', 5103010004),
(51030100040008, 'Lingkungan Bale Kembar', 5103010004),
(51030100040009, 'Lingkungan Bualu', 5103010004),
(51030100040010, 'Lingkungan Ancak', 5103010004),
(51030100040011, 'Lingkungan Menesa', 5103010004),
(51030100040012, 'Lingkungan Mumbul', 5103010004),
(51030100040013, 'Lingkungan Wisma Nusa Permai', 5103010004),
(51030100040014, 'Lingkungan Pura Nusa Dua', 5103010004),
(51030100040015, 'Lingkungan Bualu Indah', 5103010004),
(51030100040016, 'Lingkungan Permata Nusa Dua', 5103010004),
(51030100050001, 'Lingkungan Tengkulung', 5103010005),
(51030100050002, 'Lingkungan Tengah', 5103010005),
(51030100050003, 'Lingkungan Panca Bhineka', 5103010005),
(51030100050004, 'Lingkungan Kerta Pascima', 5103010005),
(51030100050005, 'Lingkungan Purwa Santi', 5103010005),
(51030100050006, 'Lingkungan Anyar', 5103010005),
(51030100060001, 'Lingkungan Ubung', 5103010006),
(51030100060002, 'Lingkungan Pantai Sari', 5103010006),
(51030100060003, 'Lingkungan Menega', 5103010006),
(51030100060004, 'Lingkungan Pesalakan', 5103010006),
(51030100060005, 'Lingkungan Teba', 5103010006),
(51030100060006, 'Lingkungan Jero Kuta', 5103010006),
(51030100060007, 'Lingkungan Kalang Anyar', 5103010006),
(51030100060008, 'Lingkungan Tegal', 5103010006),
(51030100060009, 'Lingkungan Perarudan', 5103010006),
(51030100060010, 'Lingkungan Cengiling', 5103010006),
(51030100060011, 'Lingkungan Taman Griya', 5103010006),
(51030100060012, 'Lingkungan Anggaswara Batu Ngongkon', 5103010006),
(51030100060013, 'Lingkungan Buana Gubug', 5103010006),
(51030100060014, 'Lingkungan Mekar Sari Simpangan', 5103010006),
(51030200010001, 'Lingkungan Kubu Alit', 5103020001),
(51030200010002, 'Lingkungan Pasek', 5103020001),
(51030200010003, 'Lingkungan Pengenderan', 5103020001),
(51030200010004, 'Lingkungan Anyar Gede', 5103020001),
(51030200010005, 'Lingkungan Ketapang', 5103020001),
(51030200010006, 'Lingkungan Kerthayasa', 5103020001),
(51030200020001, 'Lingkungan Tuban Griya', 5103020002),
(51030200020002, 'Lingkungan Pesalakan', 5103020002),
(51030200020003, 'Lingkungan Kelan Desa', 5103020002),
(51030200020004, 'Lingkungan Kelan Abian', 5103020002),
(51030200030001, 'Lingkungan Pangabetab', 5103020003),
(51030200030002, 'Lingkungan Pande Mas', 5103020003),
(51030200030003, 'Lingkungan Tegal', 5103020003),
(51030200030004, 'Lingkungan Buni', 5103020003),
(51030200030005, 'Lingkungan Jaba Jero', 5103020003),
(51030200030006, 'Lingkungan Temacun', 5103020003),
(51030200030007, 'Lingkungan Pelasa', 5103020003),
(51030200030008, 'Lingkungan Segara', 5103020003),
(51030200030009, 'Lingkungan Pemamoran', 5103020003),
(51030200030010, 'Lingkungan Anyar', 5103020003),
(51030200030011, 'Lingkungan Abianbase', 5103020003),
(51030200030012, 'Lingkungan Pering', 5103020003),
(51030200030013, 'Lingkungan Tebe Sari', 5103020003),
(51030200040001, 'Lingkungan Legian Kaja', 5103020004),
(51030200040002, 'Lingkungan Legian Tengah', 5103020004),
(51030200040003, 'Lingkungan Legian Kelod', 5103020004),
(51030200050001, 'Lingkungan Basangkasa', 5103020005),
(51030200050002, 'Lingkungan Seminyak', 5103020005),
(51030300010001, 'Lingkungan Kuwum', 5103030001),
(51030300010002, 'Lingkungan Semer', 5103030001),
(51030300010003, 'Lingkungan Uma Alas Kauh', 5103030001),
(51030300010004, 'Lingkungan Uma Alas Kangin', 5103030001),
(51030300010005, 'Lingkungan Batu Belig', 5103030001),
(51030300010006, 'Lingkungan Taman', 5103030001),
(51030300010007, 'Lingkungan Pangubengan Kauh', 5103030001),
(51030300010008, 'Lingkungan Pangubengan Kangin', 5103030001),
(51030300010009, 'Lingkungan Pangipian', 5103030001),
(51030300010010, 'Lingkungan Taman Mertanadi', 5103030001),
(51030300010011, 'Lingkungan Dukuh Sari', 5103030001),
(51030300010012, 'Lingkungan Umasari', 5103030001),
(51030300010013, 'Lingkungan Batu Belig Kangin', 5103030001),
(51030300020001, 'Lingkungan Kesambi', 5103030002),
(51030300020002, 'Lingkungan Gede', 5103030002),
(51030300020003, 'Lingkungan Tegeh', 5103030002),
(51030300020004, 'Lingkungan Kancil', 5103030002),
(51030300020005, 'Lingkungan Campuan', 5103030002),
(51030300020006, 'Lingkungan Padang', 5103030002),
(51030300020007, 'Lingkungan Peliatan', 5103030002),
(51030300020008, 'Lingkungan Anyar Kelod', 5103030002),
(51030300020009, 'Lingkungan Anyar Kaja', 5103030002),
(51030300020010, 'Lingkungan Silayukti', 5103030002),
(51030300030001, 'Lingkungan Batu Culung', 5103030003),
(51030300030002, 'Lingkungan Babakan', 5103030003),
(51030300030003, 'Lingkungan Batu Bidak', 5103030003),
(51030300030004, 'Lingkungan Jambe', 5103030003),
(51030300030005, 'Lingkungan Gadon', 5103030003),
(51030300030006, 'Lingkungan Petingan', 5103030003),
(51030300030007, 'Lingkungan Muding Tengah', 5103030003),
(51030300030008, 'Lingkungan Muding Kaja', 5103030003),
(51030300030009, 'Lingkungan Muding Kelod', 5103030003),
(51030300030010, 'Lingkungan Muding Mekar', 5103030003),
(51030300030011, 'Lingkungan Beluran', 5103030003),
(51030300030012, 'Lingkungan Padang Lestari', 5103030003),
(51030300030013, 'Lingkungan Tegal Sari', 5103030003),
(51030300030014, 'Lingkungan Tegal Permai', 5103030003),
(51030300030015, 'Lingkungan Surya Bhuana', 5103030003),
(51030300030016, 'Lingkungan Wira Bhuana', 5103030003),
(51030300030017, 'Lingkungan Blubuh Sari', 5103030003),
(51030300030018, 'Lingkungan Bhuana Asri', 5103030003),
(51030300030019, 'Lingkungan Bhuana Graha', 5103030003),
(51030300030020, 'Lingkungan Bhuana Shanti', 5103030003),
(51030300030021, 'Lingkungan Bumi Kerta', 5103030003),
(51030300030022, 'Lingkungan Bumi Mekar Sari', 5103030003),
(51030300030024, 'Lingkungan Bhineka Asri', 5103030003),
(51030300040001, 'Banjar Dama', 5103030004),
(51030300040002, 'Banjar Dawas', 5103030004),
(51030300040003, 'Banjar Tibubeneng', 5103030004),
(51030300040004, 'Banjar Kulibul Kangin', 5103030004),
(51030300040005, 'Banjar Kulibul Kawan', 5103030004),
(51030300040006, 'Banjar Aseman Kangin', 5103030004),
(51030300040007, 'Banjar Aseman Kawan', 5103030004),
(51030300040008, 'Banjar Tandeg', 5103030004),
(51030300040009, 'Banjar Pelambingan', 5103030004),
(51030300040010, 'Banjar Tegal Gundul', 5103030004),
(51030300040011, 'Banjar Berawa', 5103030004),
(51030300040012, 'Banjar Canggu Permai', 5103030004),
(51030300040013, 'Banjar Krisnantara', 5103030004),
(51030300050001, 'Banjar Padang Tawang', 5103030005),
(51030300050002, 'Banjar Babakan', 5103030005),
(51030300050003, 'Banjar Uma Buluh', 5103030005),
(51030300050004, 'Banjar Kayu Tulang', 5103030005),
(51030300050005, 'Banjar Pipitan', 5103030005),
(51030300050006, 'Banjar Padang Linjong', 5103030005),
(51030300050007, 'Banjar Canggu', 5103030005),
(51030300060001, 'Banjar Tegal Jaya', 5103030006),
(51030300060002, 'Banjar Celuk', 5103030006),
(51030300060003, 'Banjar Pendem', 5103030006),
(51030300060004, 'Banjar Gaji', 5103030006),
(51030300060005, 'Banjar Untal-Untal', 5103030006),
(51030300060006, 'Banjar Kwanji', 5103030006),
(51030300060007, 'Banjar Kaja', 5103030006),
(51030300060008, 'Banjar Tegeh', 5103030006),
(51030300060009, 'Banjar Lebak', 5103030006),
(51030300060010, 'Banjar Cepaka', 5103030006),
(51030300060011, 'Banjar Kung', 5103030006),
(51030300060012, 'Banjar Padang Bali', 5103030006),
(51030300060013, 'Banjar Dukuh', 5103030006),
(51030300060014, 'Banjar Pengilian', 5103030006),
(51030300060015, 'Banjar Pegending', 5103030006),
(51030300060016, 'Banjar Tuka', 5103030006),
(51030300060017, 'Banjar Lingga Bumi', 5103030006),
(51030300060018, 'Banjar Campuan Asri Kauh', 5103030006),
(51030300060019, 'Banjar Campuan Asri Kangin', 5103030006),
(51030300060020, 'Banjar Bineka Nusa Kauh', 5103030006),
(51030300060021, 'Banjar Bineka Nusa Kangin', 5103030006),
(51030300060022, 'Banjar Tegal Luwih', 5103030006),
(51030300060023, 'Banjar Taman Tirta', 5103030006),
(51030400010001, 'Banjar Kajakangin', 5103040001),
(51030400010002, 'Banjar Keliki', 5103040001),
(51030400010003, 'Banjar Tangkeban', 5103040001),
(51030400010004, 'Banjar Sangiangan', 5103040001),
(51030400010005, 'Banjar Pengayehan', 5103040001),
(51030400010006, 'Banjar Mengening', 5103040001),
(51030400010007, 'Banjar Sengguan', 5103040001),
(51030400010008, 'Banjar Petapan', 5103040001),
(51030400010009, 'Banjar Batan Tanjung', 5103040001),
(51030400010010, 'Banjar Sogsogan', 5103040001),
(51030400010011, 'Banjar Seseh', 5103040001),
(51030400010012, 'Banjar Bale Agung', 5103040001),
(51030400020001, 'Banjar Pemaron', 5103040002),
(51030400020002, 'Banjar Pemaron Delodan', 5103040002),
(51030400020003, 'Banjar Pande Pemaron', 5103040002),
(51030400020004, 'Banjar Gambang', 5103040002),
(51030400020005, 'Banjar Badung', 5103040002),
(51030400020006, 'Banjar Pengayehan', 5103040002),
(51030400020007, 'Banjar Kerobokan', 5103040002),
(51030400020008, 'Banjar Pandean', 5103040002),
(51030400020009, 'Banjar Pasekan', 5103040002),
(51030400020010, 'Banjar Sedahan', 5103040002),
(51030400020011, 'Banjar Pempatan', 5103040002),
(51030400020012, 'Banjar Dukuh Sengguan', 5103040002),
(51030400020013, 'Banjar Dukuh Pandean', 5103040002),
(51030400030001, 'Banjar Tiying Tutul', 5103040003),
(51030400030002, 'Banjar Kangkang', 5103040003),
(51030400030003, 'Banjar Jempinis', 5103040003),
(51030400030004, 'Banjar Batu', 5103040003),
(51030400030005, 'Banjar Delod Padonan', 5103040003),
(51030400030006, 'Banjar Pengembungan', 5103040003),
(51030400040001, 'Banjar Gunung Pande', 5103040004),
(51030400040002, 'Banjar Datengan', 5103040004),
(51030400040003, 'Banjar Jerowan', 5103040004),
(51030400040004, 'Banjar Pempatan', 5103040004),
(51030400040005, 'Banjar Dangin Sema', 5103040004),
(51030400040006, 'Banjar Kelepekan', 5103040004),
(51030400040007, 'Banjar Tiying Tutul', 5103040004),
(51030400050001, 'Banjar Bernasi', 5103040005),
(51030400050002, 'Banjar Kaja', 5103040005),
(51030400050003, 'Banjar Tengah', 5103040005),
(51030400050004, 'Banjar Sengguan', 5103040005),
(51030400050005, 'Banjar Pasekan', 5103040005),
(51030400050006, 'Banjar Uma Tegal', 5103040005),
(51030400050007, 'Banjar Uma Kepuh', 5103040005),
(51030400050008, 'Banjar Gunung', 5103040005),
(51030400050009, 'Banjar Uma Candi', 5103040005),
(51030400050010, 'Banjar Tampak Kerep', 5103040005),
(51030400060001, 'Lingkungan Semate', 5103040006),
(51030400060002, 'Lingkungan Gaduh', 5103040006),
(51030400060003, 'Lingkungan Gede', 5103040006),
(51030400060004, 'Lingkungan Dangin Yeh', 5103040006),
(51030400060005, 'Lingkungan Sengguan', 5103040006),
(51030400060006, 'Lingkungan Cica', 5103040006),
(51030400060007, 'Lingkungan Pasekan', 5103040006),
(51030400060008, 'Lingkungan Jeroan', 5103040006),
(51030400060009, 'Lingkungan Tengah', 5103040006),
(51030400060010, 'Lingkungan Delod Pempatan', 5103040006),
(51030400060011, 'Lingkungan Kebayan', 5103040006),
(51030400060012, 'Lingkungan Bebengan', 5103040006),
(51030400060013, 'Lingkungan Dukuh', 5103040006),
(51030400070001, 'Lingkungan Kangin', 5103040007),
(51030400070002, 'Lingkungan Tengah', 5103040007),
(51030400070003, 'Lingkungan Gede', 5103040007),
(51030400070004, 'Lingkungan Grogak', 5103040007),
(51030400070005, 'Lingkungan Tegeha', 5103040007),
(51030400070006, 'Lingkungan Batan Asem', 5103040007),
(51030400070007, 'Lingkungan Ubung', 5103040007),
(51030400070008, 'Lingkungan Kwanji', 5103040007),
(51030400070009, 'Lingkungan Uma Gunung', 5103040007),
(51030400070010, 'Lingkungan Pande', 5103040007),
(51030400080001, 'Lingkungan Dajan Bingin', 5103040008),
(51030400080002, 'Lingkungan Delod Bingin', 5103040008),
(51030400080003, 'Lingkungan Negara Kaja', 5103040008),
(51030400080004, 'Lingkungan Umahanyar Kelod', 5103040008),
(51030400080005, 'Lingkungan Umahanyar Kaja', 5103040008),
(51030400080006, 'Lingkungan Pekandelan', 5103040008),
(51030400080007, 'Lingkungan Karang Suwung', 5103040008),
(51030400080008, 'Lingkungan Puseh Pengalasan', 5103040008),
(51030400080009, 'Lingkungan Negara Kelod', 5103040008),
(51030400090001, 'Lingkungan Tengah', 5103040009),
(51030400090002, 'Lingkungan Badung', 5103040009),
(51030400090003, 'Lingkungan Perang', 5103040009),
(51030400090004, 'Lingkungan Perang Alas', 5103040009),
(51030400090005, 'Lingkungan Kurubaya', 5103040009),
(51030400090006, 'Lingkungan Gede', 5103040009),
(51030400090007, 'Lingkungan Jeroan', 5103040009),
(51030400090008, 'Lingkungan Umahanyar', 5103040009),
(51030400090009, 'Lingkungan Selod Pempatan', 5103040009),
(51030400100001, 'Lingkungan Panglan', 5103040010),
(51030400100002, 'Lingkungan Uma', 5103040010),
(51030400100003, 'Lingkungan Celuk', 5103040010),
(51030400100004, 'Lingkungan Cepaka', 5103040010),
(51030400100005, 'Lingkungan Basang Tamiang', 5103040010),
(51030400100006, 'Lingkungan Titih', 5103040010),
(51030400100007, 'Lingkungan Pemebetan', 5103040010),
(51030400100008, 'Lingkungan Ganggasari', 5103040010),
(51030400100009, 'Lingkungan Peken Baleran', 5103040010),
(51030400100010, 'Lingkungan Peken Delodan', 5103040010),
(51030400100011, 'Lingkungan Langon', 5103040010),
(51030400100012, 'Lingkungan Muncan', 5103040010),
(51030400100013, 'Lingkungan Tambak Sari', 5103040010),
(51030400100014, 'Lingkungan Gegadon', 5103040010),
(51030400100015, 'Lingkungan Belulang', 5103040010),
(51030400100016, 'Lingkungan Tegal Saat', 5103040010),
(51030400110001, 'Banjar Gelagah Kuwun', 5103040011),
(51030400110002, 'Banjar Delod Sema', 5103040011),
(51030400110003, 'Banjar Dangin Pangkung', 5103040011),
(51030400110004, 'Banjar Sangiang', 5103040011),
(51030400110005, 'Banjar Penyarikan', 5103040011),
(51030400110006, 'Banjar Delod Yeh', 5103040011),
(51030400110007, 'Banjar Tauman', 5103040011),
(51030400120001, 'Banjar Pupuan', 5103040012),
(51030400120002, 'Banjar Persatuan Panca Warga', 5103040012),
(51030400120003, 'Banjar Pengadangan', 5103040012),
(51030400120004, 'Banjar Beringkit', 5103040012),
(51030400120005, 'Banjar Beringkit Dangin Pura', 5103040012),
(51030400120006, 'Banjar Dajan Peken', 5103040012),
(51030400120007, 'Banjar Mengwitani', 5103040012),
(51030400120008, 'Banjar Lebah Gunung', 5103040012),
(51030400120009, 'Banjar Jumpayah', 5103040012),
(51030400120010, 'Banjar Sila Darma', 5103040012),
(51030400120011, 'Banjar Nyuh Gading', 5103040012),
(51030400120012, 'Banjar Culag Calig', 5103040012),
(51030400130001, 'Banjar Delod Bale Agung', 5103040013),
(51030400130002, 'Banjar Pengiasan', 5103040013),
(51030400130003, 'Banjar Lebah Pangkung', 5103040013),
(51030400130004, 'Banjar Alang Kajeng', 5103040013),
(51030400130005, 'Banjar Peregae', 5103040013),
(51030400130006, 'Banjar Serangan', 5103040013),
(51030400130007, 'Banjar Munggu', 5103040013),
(51030400130008, 'Banjar Pandean', 5103040013),
(51030400130009, 'Banjar Pande', 5103040013),
(51030400130010, 'Banjar Gambang', 5103040013),
(51030400130011, 'Banjar Batu', 5103040013),
(51030400140001, 'Banjar Ulun Uma Wedan', 5103040014),
(51030400140002, 'Banjar Ulun Uma Badung', 5103040014),
(51030400140003, 'Banjar Babakan Kangin', 5103040014),
(51030400140004, 'Banjar Babakan Kawan', 5103040014),
(51030400140005, 'Banjar Tengah Kelod', 5103040014),
(51030400140006, 'Banjar Tengah Kaler', 5103040014),
(51030400140007, 'Banjar Lebah Sari', 5103040014),
(51030400140008, 'Banjar Badung', 5103040014),
(51030400140009, 'Banjar Sendahan', 5103040014),
(51030400140010, 'Banjar Batu Lumbung', 5103040014),
(51030400140011, 'Banjar Munggu', 5103040014),
(51030400140012, 'Banjar Angkeb Canging', 5103040014),
(51030400140013, 'Banjar Darmayasa', 5103040014),
(51030400150001, 'Banjar Umo Poh', 5103040015),
(51030400150002, 'Banjar Bangkiang Sidem', 5103040015),
(51030400150003, 'Banjar Dajan Peken', 5103040015),
(51030400150004, 'Banjar Dauh Peken', 5103040015),
(51030400150005, 'Banjar Dangin Peken', 5103040015),
(51030400150006, 'Banjar Cemenggon', 5103040015),
(51030400150007, 'Banjar Guming', 5103040015),
(51030400150008, 'Banjar Umahanyar', 5103040015),
(51030400150009, 'Banjar Sengguan', 5103040015),
(51030400150010, 'Banjar Blungbang', 5103040015),
(51030400150011, 'Banjar Bantas', 5103040015),
(51030400160001, 'Banjar Bedil', 5103040016),
(51030400160002, 'Banjar Gegaran', 5103040016),
(51030400160003, 'Banjar Kedua', 5103040016),
(51030400160004, 'Banjar Pengabetan', 5103040016),
(51030400160005, 'Banjar Busana Kelod', 5103040016),
(51030400160006, 'Banjar Busana Kaja', 5103040016),
(51030400160007, 'Banjar Cengkok', 5103040016),
(51030400170001, 'Banjar Denkayu Delodan', 5103040017),
(51030400170002, 'Banjar Denkayu Baleran', 5103040017),
(51030400170003, 'Banjar Sunia', 5103040017),
(51030400170004, 'Banjar Sayan Delodan', 5103040017),
(51030400170005, 'Banjar Sayan Baleran', 5103040017),
(51030400170006, 'Banjar Binong', 5103040017),
(51030400180001, 'Banjar Selat', 5103040018),
(51030400180002, 'Banjar Tengah', 5103040018),
(51030400180003, 'Banjar Tegal Narungan', 5103040018),
(51030400180004, 'Banjar Dukuh Moncos', 5103040018),
(51030400190001, 'Banjar Karang Jung', 5103040019),
(51030400190002, 'Banjar Dajan Peken', 5103040019),
(51030400190003, 'Banjar Pasekan', 5103040019),
(51030400190004, 'Banjar Tauman', 5103040019),
(51030400190005, 'Banjar Belang', 5103040019),
(51030400190006, 'Banjar Tegal', 5103040019),
(51030400190007, 'Banjar Dangin Bingin', 5103040019),
(51030400190008, 'Banjar Pempatan', 5103040019),
(51030400190009, 'Banjar Anyar', 5103040019),
(51030400200001, 'Banjar Balangan', 5103040020),
(51030400200002, 'Banjar Kuwum', 5103040020),
(51030400200003, 'Banjar Nyelati', 5103040020),
(51030400200004, 'Banjar Balangan Kangin', 5103040020),
(51030500010001, 'Banjar Cabe', 5103050001),
(51030500010002, 'Banjar Menesa', 5103050001),
(51030500010003, 'Banjar Darmasaba', 5103050001),
(51030500010004, 'Banjar Telanga', 5103050001),
(51030500010005, 'Banjar Tengah', 5103050001),
(51030500010006, 'Banjar Baler Pasar', 5103050001),
(51030500010007, 'Banjar Gulingan', 5103050001),
(51030500010008, 'Banjar Taman', 5103050001),
(51030500010009, 'Banjar Umahanyar', 5103050001),
(51030500010010, 'Banjar Bersih', 5103050001),
(51030500010011, 'Banjar Bucu', 5103050001),
(51030500010012, 'Banjar Peninjoan', 5103050001),
(51030500020001, 'Banjar Dualang', 5103050002),
(51030500020002, 'Banjar Bantas Kaja', 5103050002),
(51030500020003, 'Banjar Busana', 5103050002),
(51030500020004, 'Banjar Parekan', 5103050002),
(51030500020005, 'Banjar Bantas Kelod', 5103050002),
(51030500020006, 'Banjar Tagtag', 5103050002),
(51030500020007, 'Banjar Badung', 5103050002),
(51030500020008, 'Banjar Pane', 5103050002),
(51030500020009, 'Banjar Mengwi', 5103050002),
(51030500020010, 'Banjar Srijati', 5103050002),
(51030500020011, 'Banjar Senggu', 5103050002),
(51030500020012, 'Banjar Pekandelan', 5103050002),
(51030500030001, 'Banjar Pasek', 5103050003),
(51030500030002, 'Banjar Sibang', 5103050003),
(51030500030003, 'Banjar Jaba Jero', 5103050003),
(51030500030004, 'Banjar Kemulan', 5103050003),
(51030500040001, 'Banjar Kekeran', 5103050004),
(51030500040002, 'Banjar Desa', 5103050004),
(51030500040003, 'Banjar Puseh', 5103050004),
(51030500040004, 'Banjar Dalem', 5103050004),
(51030500050001, 'Banjar Sedang Kelod', 5103050005),
(51030500050002, 'Banjar Sigaran', 5103050005),
(51030500050003, 'Banjar Sedang Kaja', 5103050005),
(51030500050004, 'Banjar Aseman', 5103050005),
(51030500050005, 'Banjar Kauripan', 5103050005),
(51030500060001, 'Banjar Piakan', 5103050006),
(51030500060002, 'Banjar Sintrig', 5103050006),
(51030500060003, 'Banjar Lambing', 5103050006),
(51030500060004, 'Banjar Sangging', 5103050006),
(51030500060005, 'Banjar Lateng', 5103050006),
(51030500060006, 'Banjar Tengah', 5103050006),
(51030500060007, 'Banjar Saren', 5103050006),
(51030500070001, 'Banjar Sigaran', 5103050007),
(51030500070002, 'Banjar Tingas', 5103050007),
(51030500070003, 'Banjar Lambing', 5103050007),
(51030500070004, 'Banjar Samu', 5103050007),
(51030500070005, 'Banjar Bindu', 5103050007),
(51030500080001, 'Banjar Mambal Kajanan', 5103050008),
(51030500080002, 'Banjar Lebah Sari', 5103050008),
(51030500080003, 'Banjar Trijata', 5103050008),
(51030500080004, 'Banjar Gumasih', 5103050008),
(51030500080005, 'Banjar Umahanyar', 5103050008),
(51030500080006, 'Banjar Pengiyasan', 5103050008),
(51030500080007, 'Banjar Semana', 5103050008),
(51030500080008, 'Banjar Undagi', 5103050008),
(51030500080009, 'Banjar Agung', 5103050008),
(51030500090001, 'Banjar Purwakerta', 5103050009),
(51030500090002, 'Banjar Dirgahayu', 5103050009),
(51030500090003, 'Banjar Gunung', 5103050009),
(51030500090004, 'Banjar Aseman', 5103050009),
(51030500090005, 'Banjar Keraman', 5103050009),
(51030500090006, 'Banjar Juwet', 5103050009),
(51030500090007, 'Banjar Pande', 5103050009),
(51030500090008, 'Banjar Latusari', 5103050009),
(51030500100001, 'Banjar Kedampal', 5103050010),
(51030500100002, 'Banjar Sempidi', 5103050010),
(51030500100003, 'Banjar Banjaran', 5103050010),
(51030500100004, 'Banjar Batan Buah', 5103050010),
(51030500100005, 'Banjar Belawan', 5103050010),
(51030500100006, 'Banjar Tegal', 5103050010),
(51030500110001, 'Banjar Ambengan', 5103050011),
(51030500110002, 'Banjar Geria', 5103050011),
(51030500110003, 'Banjar Badung', 5103050011),
(51030500110004, 'Banjar Badung Tengah', 5103050011),
(51030500120001, 'Banjar Pikah', 5103050012),
(51030500120002, 'Banjar Beneh Kawan', 5103050012),
(51030500120003, 'Banjar Dlod Pasar', 5103050012),
(51030500120004, 'Banjar Tengah', 5103050012),
(51030500120005, 'Banjar Kembang Sari', 5103050012),
(51030500120006, 'Banjar Ulapan I', 5103050012),
(51030500120007, 'Banjar Ulapan II', 5103050012),
(51030500130001, 'Banjar Teguan', 5103050013),
(51030500130002, 'Banjar Padang', 5103050013),
(51030500130003, 'Banjar Tengah', 5103050013),
(51030500130004, 'Banjar Kelodan', 5103050013),
(51030500130005, 'Banjar Trinadi', 5103050013),
(51030500140001, 'Banjar Kedewatan', 5103050014),
(51030500140002, 'Banjar Tangga Yuda', 5103050014),
(51030500140003, 'Banjar Sayan Tua', 5103050014),
(51030500140004, 'Banjar Teguan', 5103050014),
(51030500140005, 'Banjar Pengembungan', 5103050014),
(51030500140006, 'Banjar Pengembungan Sari', 5103050014),
(51030500140007, 'Banjar Kambang', 5103050014),
(51030500140008, 'Banjar Kutaraga', 5103050014),
(51030500140009, 'Banjar Tohpati', 5103050014),
(51030500140010, 'Banjar Sayan Agung', 5103050014),
(51030500150001, 'Banjar Jempeng', 5103050015),
(51030500150002, 'Banjar Sukajati', 5103050015),
(51030500150003, 'Banjar Gunung', 5103050015),
(51030500150004, 'Banjar Pegongan', 5103050015),
(51030500150005, 'Banjar Tabah', 5103050015),
(51030500150006, 'Banjar Delod Pasar', 5103050015),
(51030500150007, 'Banjar Raketan', 5103050015),
(51030500150008, 'Banjar Teba Jero', 5103050015),
(51030500150009, 'Banjar Batu Bayan', 5103050015),
(51030500150010, 'Banjar Ketogan', 5103050015),
(51030500150011, 'Banjar Jempeng Kauh', 5103050015),
(51030500160001, 'Banjar Selat', 5103050016),
(51030500160002, 'Banjar Tegal', 5103050016),
(51030500160003, 'Banjar Selat Anyar', 5103050016),
(51030500160004, 'Banjar Mekar Sari', 5103050016),
(51030500170001, 'Banjar Tegal Gerana', 5103050017),
(51030500170002, 'Banjar Batu Lumbang', 5103050017),
(51030500170003, 'Banjar Pacung', 5103050017),
(51030500170004, 'Banjar Batu Sari', 5103050017),
(51030500170005, 'Banjar Sibang', 5103050017),
(51030500170006, 'Banjar Pemijian', 5103050017),
(51030500170007, 'Banjar Muluk Babi', 5103050017),
(51030500170008, 'Banjar Brahmana', 5103050017),
(51030500180001, 'Banjar Karang Dalem', 5103050018),
(51030500180002, 'Banjar Karang Dalem II', 5103050018),
(51030500180003, 'Banjar Tegalkuning', 5103050018),
(51030600010001, 'Banjar S. Kawan', 5103060001),
(51030600010002, 'Banjar S. Kangin', 5103060001),
(51030600010003, 'Banjar Bedauh', 5103060001),
(51030600010004, 'Banjar Pemijian', 5103060001),
(51030600010005, 'Banjar Anggungan', 5103060001),
(51030600010006, 'Banjar Beng', 5103060001),
(51030600010007, 'Banjar Telugtug', 5103060001),
(51030600010008, 'Banjar Sangut', 5103060001),
(51030600010009, 'Banjar Mekar Sari', 5103060001),
(51030600010010, 'Banjar Senapan', 5103060001),
(51030600020001, 'Banjar Tengah', 5103060002),
(51030600020002, 'Banjar Kauh', 5103060002),
(51030600020003, 'Banjar Ubud', 5103060002),
(51030600020004, 'Banjar Buangga', 5103060002),
(51030600030001, 'Banjar Pangsan Dalem', 5103060003),
(51030600030002, 'Banjar Sekar Mukti', 5103060003),
(51030600030003, 'Banjar Pundung', 5103060003),
(51030600030004, 'Banjar Kasianan', 5103060003),
(51030600030005, 'Banjar Pangsan Tengah', 5103060003),
(51030600040001, 'Banjar Petang Dalem', 5103060004),
(51030600040002, 'Banjar Petang', 5103060004),
(51030600040003, 'Banjar Kerta', 5103060004),
(51030600040004, 'Banjar Lipah', 5103060004),
(51030600040005, 'Banjar Munduk Damping', 5103060004),
(51030600040006, 'Banjar Angantiga', 5103060004),
(51030600040007, 'Banjar Petang Suci', 5103060004),
(51030600050001, 'Banjar Batu Lantang', 5103060005),
(51030600050002, 'Banjar Wana Sari', 5103060005),
(51030600050003, 'Banjar Abing', 5103060005),
(51030600050004, 'Banjar Sulangai', 5103060005),
(51030600050005, 'Banjar Wanakeling', 5103060005),
(51030600050006, 'Banjar Sandakan', 5103060005),
(51030600050007, 'Banjar Sandakan Kangin', 5103060005),
(51030600060001, 'Banjar Tiyingan', 5103060006),
(51030600060002, 'Banjar Kiadan', 5103060006),
(51030600060003, 'Banjar Bukian', 5103060006),
(51030600060004, 'Banjar Semanik', 5103060006),
(51030600060005, 'Banjar Pelaga', 5103060006),
(51030600060006, 'Banjar Tinggan', 5103060006),
(51030600060007, 'Banjar Auman', 5103060006),
(51030600060008, 'Banjar Nungnung', 5103060006),
(51030600060009, 'Banjar Bukit Munduk Tiying', 5103060006),
(51030600070001, 'Banjar Penikit', 5103060007),
(51030600070002, 'Banjar Sidan', 5103060007),
(51030600070003, 'Banjar Selantang', 5103060007),
(51030600070004, 'Banjar Belok', 5103060007),
(51030600070005, 'Banjar Lawak', 5103060007),
(51030600070006, 'Banjar Sekar Mukti', 5103060007),
(51030600070007, 'Banjar Jepanang', 5103060007),
(51030600070008, 'Banjar Bon', 5103060007),
(51030600070009, 'Banjar Sidan Kawan', 5103060007);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `kode_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`kode_kecamatan`, `nama_kecamatan`) VALUES
(5103010, 'Kecamatan Kuta Selatan'),
(5103020, 'Kecamatan Kuta'),
(5103030, 'Kecamatan Kuta Utara'),
(5103040, 'Kecamatan Mengwi'),
(5103050, 'Kecamatan Abiansemal'),
(5103060, 'Kecamatan Petang');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(12) NOT NULL,
  `date_lapor` date DEFAULT NULL,
  `kode_dusun` bigint(20) DEFAULT NULL,
  `kode_desa` bigint(20) DEFAULT NULL,
  `kode_kecamatan` bigint(20) DEFAULT NULL,
  `NIK_m` bigint(20) DEFAULT NULL,
  `nama_m` varchar(100) DEFAULT NULL,
  `tempat_m` varchar(50) DEFAULT NULL,
  `tanggal_m` date DEFAULT NULL,
  `tanggal_p` date DEFAULT NULL,
  `kode_akta` tinyint(1) DEFAULT NULL,
  `no_akta` varchar(100) DEFAULT NULL,
  `NIK_p` bigint(20) DEFAULT NULL,
  `nama_p` varchar(100) DEFAULT NULL,
  `hub_p` varchar(100) DEFAULT NULL,
  `nama_lengkap_kepdusun` varchar(100) DEFAULT NULL,
  `jenis_kelamin` char(10) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `no_kk` bigint(20) DEFAULT NULL,
  `no_anak` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `date_lapor`, `kode_dusun`, `kode_desa`, `kode_kecamatan`, `NIK_m`, `nama_m`, `tempat_m`, `tanggal_m`, `tanggal_p`, `kode_akta`, `no_akta`, `NIK_p`, `nama_p`, `hub_p`, `nama_lengkap_kepdusun`, `jenis_kelamin`, `status`, `alamat`, `no_hp`, `no_kk`, `no_anak`) VALUES
(14, '2022-07-06', 51030200030002, 5103020003, 5103020, 5108976543231609, 'Ni Wayan Nyenkaden', 'Rumah Sakit', '2022-06-08', '2022-06-29', 1, '51098762', 9876543210987621, 'Ketut Sudahlapor', 'Kadek Patuhsing Nawang', 'Kadek Pinjamuang', 'perempuan', 'Sudah Terverifikasi', 'Jalan mejalan no.2 ', '098769874132', 5108976541267643, 1),
(15, '2022-07-06', 51030200030002, 5103020003, 5103020, 5190827364718291, 'Made Suudma Suknah', 'Rumah', '2022-07-01', '2022-07-06', 0, '', 7289301876253789, 'Ayan Suandi Gaskanlah', 'Wayan Guhteguh', 'Kadek Pinjamuang', 'perempuan', 'Sudah Terverifikasi', 'Jalan Beten Tukad no.7', '078623816490', 5190863820192876, 5),
(16, '2022-07-06', 51030200030002, 5103020003, 5103020, 2753820910286427, 'Made Sampu Nsuud', 'Jalan', '2022-06-15', '2022-06-17', 0, '', 2930386542719231, 'Japa Nhalall', 'Ketut Sug Ih', 'Kadek Pinjamuang', 'laki-laki', 'Sudah Terverifikasi', 'Jalan Beli Mawar no.10', '9082765371901', 1528790176527189, 9),
(17, '2022-07-06', 51030500090003, 5103050009, 5103050, 2753820910286427, 'Ni Putu Aduh', 'Rumah', '2022-06-15', '2022-07-02', 0, '', 7289301876253789, 'Ni Putu Ayu Triana', 'Ketut Sug Ih', 'Ketut cobatiga', 'perempuan', 'Sudah Terverifikasi', 'Jalan Beten Tukad no.7', '5103020003', 5190863820192876, 2),
(18, '2022-07-06', 51030500090003, 5103050009, 5103050, 5190263791028632, 'Komang Huha', 'Rumah Sakit', '2022-06-28', '2022-07-06', 1, '12345678', 2930386542719231, 'Wayan Salaleo', 'Made Adahne', 'Ketut cobatiga', 'laki-laki', 'Sudah Terverifikasi', 'Jalan Beli Mawar no.10', '098725381912', 5190263791028631, 8),
(19, '2022-07-07', 51030600040003, 5103060004, 5103060, 2233445566778899, 'Made Pawangujan', 'Rumah Sakit', '2022-07-01', '2022-07-05', 0, '', 3344556677889911, 'Ni Made Ujanbales', 'Putu Kilatgede', 'Petugas Banjar Kerta', 'laki-laki', 'Sudah Terverifikasi', 'Jalan Beten Poh no.10', '087765543321', 1122334455667788, 1),
(20, '2022-07-07', 51030600040003, 5103060004, 5103060, 6565237162817281, 'Wayan Jamet', 'Rumah', '2022-07-02', '2022-07-04', 1, '12345677', 2930323456123411, 'Kadek Wahyun', 'Made Adahne', 'Petugas Banjar Kerta', 'perempuan', 'Sudah Terverifikasi', 'Jalan Basemen 9A', '08909878908', 1234567890123456, 4),
(21, '2022-07-07', 51030600040003, 5103060004, 5103060, 5190263791025691, 'Ketut Sahurtana', 'Rumah Sakit', '2022-07-06', '2022-07-07', 1, '2345613689', 5109234762781923, 'Putu Trianosaurtu', 'Gede Anomali Udara', 'Petugas Banjar Kerta', 'laki-laki', 'Sudah Terverifikasi', 'Lapangan Kelod Banjar Gg 1D', '08567891023', 5190263791028631, 4),
(22, '2022-07-07', 51030400050003, 5103040005, 5103040, 3526648390875432, 'Ais Minahjo', 'Rumah Sakit', '2022-07-04', '2022-07-07', 0, '', 2346785490236754, 'Ketut Sudahlapor', 'Gungma Arap', 'Kelian Banjar Tengah', 'perempuan', 'Sudah Terverifikasi', 'jalan mayun ayundi gang.2 no 4 gulali 5', '0897655456765', 3526718920876346, 4),
(23, '2022-07-07', 51030400050003, 5103040005, 5103040, 8574453627891827, 'Wayan Bagus Banget', 'Rumah', '2022-07-01', '2022-07-04', 1, '45673289075', 2837901726098324, 'Jajang Pepes', 'Ketut Kelepon', 'Kelian Banjar Tengah', 'laki-laki', 'Sudah Terverifikasi', 'Jalan mejalan no.2 ', '085693009281', 8574637289877236, 1),
(24, '2022-07-07', 51030100060011, 5103010006, 5103010, 9809823456738293, 'Made Kuta', 'Gatsu', '2022-07-05', '2022-07-01', 0, '', 9827365380927361, 'Wayan Salaleo', 'Putu Kilatgede', 'Petugas Lurah Taman Griya', 'perempuan', 'Sudah Terverifikasi', 'Jalan Beli Mawar no.10', '087652372819', 9809876253671728, 6),
(25, '2022-07-07', 51030100060011, 5103010006, 5103010, 5839827382910283, 'Wahyunisah', 'Rumah', '2022-06-28', '2022-07-05', 0, '', 5832456785432315, 'Kolifahneng', 'Made Adahne', 'Petugas Lurah Taman Griya', 'perempuan', 'Sudah Terverifikasi', 'Jalan Basemen 9A', '093837462512', 5839028394872328, 9),
(26, '2022-07-07', 51030300060010, 5103030006, 5103030, 3847675748392837, 'Haruka Jajan', 'Rumah Sakit', '2022-06-30', '2022-07-05', 0, '', 2637382910293827, 'Jajang Meyon', 'Gigie Hadid', 'Cepaka Dalung', 'perempuan', 'Sudah Terverifikasi', 'Dalung Permail CB 614', '098827362718', 3847583928172839, 3),
(27, '2022-07-07', 51030300060005, 5103030006, 5103030, 5190263791028632, 'TEST 1', 'Rumah Sakit', '2022-06-30', '2022-07-05', 0, '', 2930386542719231, 'coba', 'anak test', 'Kelian UNTAL-untal', 'laki-laki', 'Sudah Terverifikasi', 'Untal-untal', '08976545678', 5190863820192876, 9);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lap_agregat`
-- (See below for the actual view)
--
CREATE TABLE `lap_agregat` (
`kode_kecamatan` bigint(20)
,`nama_kecamatan` varchar(50)
,`kode_desa` bigint(20)
,`nama_desa` varchar(50)
,`kode_dusun` bigint(20)
,`nama_dusun` varchar(100)
,`perempuan` bigint(21)
,`laki_laki` bigint(21)
,`total` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lap_baru`
-- (See below for the actual view)
--
CREATE TABLE `lap_baru` (
`id_laporan` int(12)
,`date_lapor` date
,`kode_dusun` bigint(20)
,`kode_desa` bigint(20)
,`kode_kecamatan` bigint(20)
,`NIK_m` bigint(20)
,`nama_m` varchar(100)
,`tempat_m` varchar(50)
,`tanggal_m` date
,`tanggal_p` date
,`kode_akta` tinyint(1)
,`no_akta` varchar(100)
,`NIK_p` bigint(20)
,`nama_p` varchar(100)
,`hub_p` varchar(100)
,`nama_lengkap_kepdusun` varchar(100)
,`jenis_kelamin` char(10)
,`status` varchar(50)
,`alamat` varchar(255)
,`no_hp` varchar(50)
,`no_kk` bigint(20)
,`no_anak` int(11)
,`nama_kecamatan` varchar(50)
,`nama_desa` varchar(50)
,`nama_dusun` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lap_ditolak`
-- (See below for the actual view)
--
CREATE TABLE `lap_ditolak` (
`id_laporan` int(12)
,`date_lapor` date
,`kode_dusun` bigint(20)
,`kode_desa` bigint(20)
,`kode_kecamatan` bigint(20)
,`NIK_m` bigint(20)
,`nama_m` varchar(100)
,`tempat_m` varchar(50)
,`tanggal_m` date
,`tanggal_p` date
,`kode_akta` tinyint(1)
,`no_akta` varchar(100)
,`NIK_p` bigint(20)
,`nama_p` varchar(100)
,`hub_p` varchar(100)
,`nama_lengkap_kepdusun` varchar(100)
,`jenis_kelamin` char(10)
,`status` varchar(50)
,`alamat` varchar(255)
,`no_hp` varchar(50)
,`no_kk` bigint(20)
,`no_anak` int(11)
,`nama_kecamatan` varchar(50)
,`nama_desa` varchar(50)
,`nama_dusun` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `lap_terverikasi`
-- (See below for the actual view)
--
CREATE TABLE `lap_terverikasi` (
`id_laporan` int(12)
,`date_lapor` date
,`kode_dusun` bigint(20)
,`kode_desa` bigint(20)
,`kode_kecamatan` bigint(20)
,`NIK_m` bigint(20)
,`nama_m` varchar(100)
,`tempat_m` varchar(50)
,`tanggal_m` date
,`tanggal_p` date
,`kode_akta` tinyint(1)
,`no_akta` varchar(100)
,`NIK_p` bigint(20)
,`nama_p` varchar(100)
,`hub_p` varchar(100)
,`nama_lengkap_kepdusun` varchar(100)
,`jenis_kelamin` char(10)
,`status` varchar(50)
,`alamat` varchar(255)
,`no_hp` varchar(50)
,`no_kk` bigint(20)
,`no_anak` int(11)
,`nama_kecamatan` varchar(50)
,`nama_desa` varchar(50)
,`nama_dusun` varchar(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `username` char(100) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `NIK` bigint(20) NOT NULL,
  `role` int(11) NOT NULL,
  `kabupaten` varchar(25) DEFAULT 'Badung',
  `kode_kecamatan` int(11) DEFAULT NULL,
  `kode_desa` bigint(20) DEFAULT NULL,
  `kode_dusun` bigint(20) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `password` varchar(100) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`username`, `nama_lengkap`, `NIK`, `role`, `kabupaten`, `kode_kecamatan`, `kode_desa`, `kode_dusun`, `status`, `password`, `Email`) VALUES
('1212121212121212', 'ayutri', 1212121212121212, 4, 'Badung', 5103020, 5103020003, 51030200030005, 1, '11', 'pulaudewata17@yahoo.co.id'),
('1213121312131213', 'ayu trisna', 1213121312131213, 4, 'Badung', 5103010, 5103010006, 51030100060013, 1, '12', 'pulaudewata17@yahoo.co.id'),
('1234512345123456', 'Ni Wayan Cobasatu', 1234512345123456, 2, 'Badung', 5103020, NULL, NULL, 1, '11', 'pulaudewata17@yahoo.co.id'),
('1234567890098765', 'Ketut cobatiga', 1234567890098765, 4, 'Badung', 5103050, 5103050009, 51030500090003, 1, '11', 'pulaudewata17@gmail.com'),
('1234567890123456', 'Kadek Pinjamuang', 1234567890123456, 4, 'Badung', 5103020, 5103020003, 51030200030002, 1, '11', 'pijarcandra22@gmail.com'),
('1234567890345678', 'Ni Kadek Uchiha', 1234567890345678, 2, 'Badung', 5103020, NULL, NULL, 1, '11', 'pulaudewata17@gmail.com'),
('1234567890456789', 'Kadek Cobadua', 1234567890456789, 3, 'Badung', 5103050, 5103050005, NULL, 1, '123', 'pulaudewata17@gmail.com'),
('1234567891011121', 'Kelian Banjar Tengah', 1234567891011121, 4, 'Badung', 5103040, 5103040005, 51030400050003, 1, '11', 'banjartengahbuduk@gmail.com'),
('2637281928374627', 'Cepaka Dalung', 2637281928374627, 4, 'Badung', 5103030, 5103030006, 51030300060010, 1, '11', 'banjarcepaka@gmail.com'),
('3452678954326789', 'Kelian Kwanji', 3452678954326789, 4, 'Badung', 5103030, 5103030006, 51030300060006, 1, '11', 'kwanji123@gmail.com'),
('5107227891023572', 'Petugas Banjar Kerta', 5107227891023572, 4, 'Badung', 5103060, 5103060004, 51030600040003, 1, '11', 'banjarkerta@gmail.com'),
('5103040004', 'Penanggung Jawab Desa Tumbak Bayuh', 5171013421050001, 3, 'Badung', 5103040, 5103040004, NULL, 1, 'pjdumbakBayuh', NULL),
('5103040005', 'Penanggung Jawab Desa Buduk', 5171013421050002, 3, 'Badung', 5103040, 5103040005, NULL, 1, 'pjbuduk', NULL),
('5103040006', 'Penanggung Jawab Kelurahan Abianbase', 5171013421050003, 3, 'Badung', 5103040, 5103040006, NULL, 1, 'pjabianbase', NULL),
('5103040007', 'Penanggung Jawab Kelurahan Sempidi', 5171013421050004, 3, 'Badung', 5103040, 5103040007, NULL, 1, 'pjsempidi', NULL),
('5103040008', 'Penanggung Jawab Kelurahan Sading', 5171013421050005, 3, 'Badung', 5103040, 5103040008, NULL, 1, 'pjsading', NULL),
('5103040009', 'Penanggung Jawab Kelurahan Lukluk', 5171013421050006, 3, 'Badung', 5103040, 5103040009, NULL, 1, 'pjlukluk', NULL),
('5103040010', 'Penanggung Jawab Kelurahan Kapal', 5171013421050007, 3, 'Badung', 5103040, 5103040010, NULL, 1, 'pjkapal', NULL),
('5103040011', 'Penanggung Jawab Desa Kekeran', 5171013421050008, 3, 'Badung', 5103040, 5103040011, NULL, 1, 'pjkekeran', NULL),
('5103040012', 'Penanggung Jawab Desa Mengwi Tani', 5171014421060001, 3, 'Badung', 5103040, 5103040012, NULL, 1, 'pjdengwiTtani', NULL),
('5103040013', 'Penanggung Jawab Desa Mengwi', 5171014421060002, 3, 'Badung', 5103040, 5103040013, NULL, 1, 'pjmengwi', NULL),
('5103040014', 'Penanggung Jawab Desa Gulingan', 5171014421060003, 3, 'Badung', 5103040, 5103040014, NULL, 1, 'pjgulingan', NULL),
('5103040015', 'Penanggung Jawab Desa Penarungan', 5171014421060004, 3, 'Badung', 5103040, 5103040015, NULL, 1, 'pjpenarungan', NULL),
('5103040016', 'Penanggung Jawab Desa Baha', 5171014421060005, 3, 'Badung', 5103040, 5103040016, NULL, 1, 'pjbaha', NULL),
('5103040017', 'Penanggung Jawab Desa Werdibhuana', 5171014421060006, 3, 'Badung', 5103040, 5103040017, NULL, 1, 'pjwerdibhuana', NULL),
('5103040018', 'Penanggung Jawab Desa Sobangan', 5171014421060007, 3, 'Badung', 5103040, 5103040018, NULL, 1, 'pjsobangan', NULL),
('5103040019', 'Penanggung Jawab Desa Sembung', 5171014421060008, 3, 'Badung', 5103040, 5103040019, NULL, 1, 'pjsembung', NULL),
('5103050014', 'Penanggung Jawab Desa Bongkasa', 5171014431090001, 3, 'Badung', 5103050, 5103050014, NULL, 1, 'pjbongkasa', NULL),
('5103050015', 'Penanggung Jawab Desa Taman', 5171014431090002, 3, 'Badung', 5103050, 5103050015, NULL, 1, 'pjtaman', NULL),
('5103050016', 'Penanggung Jawab Desa Selat', 5171014431090003, 3, 'Badung', 5103050, 5103050016, NULL, 1, 'pjselat', NULL),
('5103050017', 'Penanggung Jawab Desa Sangeh', 5171014431090004, 3, 'Badung', 5103050, 5103050017, NULL, 1, 'pjsangeh', NULL),
('5103050018', 'Penanggung Jawab Desa Bongkasa Pertiwi', 5171014431090005, 3, 'Badung', 5103050, 5103050018, NULL, 1, 'pjdongkasapertiwi', NULL),
('5103060', 'Penanggung Jawab Petang', 5171014431090006, 2, 'Badung', 5103060, NULL, NULL, 1, 'petang3060', NULL),
('5103060001', 'Penanggung Jawab Desa Carangsari', 5171014431090007, 3, 'Badung', 5103060, 5103060001, NULL, 1, 'pjcarangsari', NULL),
('5103020001', 'Penanggung Jawab Kelurahan Kedonganan', 5171015521030001, 3, 'Badung', 5103020, 5103020001, NULL, 1, 'pjkedonganan', NULL),
('5103020002', 'Penanggung Jawab Kelurahan Tuban', 5171015521030002, 3, 'Badung', 5103020, 5103020002, NULL, 1, 'pjtuban', NULL),
('5103020003', 'Penanggung Jawab Kelurahan Kuta', 5171015521030003, 3, 'Badung', 5103020, 5103020003, NULL, 1, 'pjkuta', NULL),
('5103020004', 'Penanggung Jawab Kelurahan Legian', 5171015521030004, 3, 'Badung', 5103020, 5103020004, NULL, 1, 'pjlegian', NULL),
('5103020005', 'Penanggung Jawab Kelurahan Seminyak', 5171015521030005, 3, 'Badung', 5103020, 5103020005, NULL, 1, 'pjseminyak', NULL),
('5103030', 'Penanggung Jawab Kuta Utara', 5171015521030006, 2, 'Badung', 5103030, NULL, NULL, 1, 'kutur3030', NULL),
('5103030001', 'Penanggung Jawab Kelurahan Kerobokan Kelod', 5171015521030007, 3, 'Badung', 5103030, 5103030001, NULL, 1, 'pjkerkelod', NULL),
('5103030002', 'Penanggung Jawab Kelurahan Kerobokan', 5171015521030008, 3, 'Badung', 5103030, 5103030002, NULL, 1, 'pjkerobokan', NULL),
('5103030003', 'Penanggung Jawab Kelurahan Kerobokan Kaja', 5171016521040001, 3, 'Badung', 5103030, 5103030003, NULL, 1, 'pjkerkaja', NULL),
('5103030004', 'Penanggung Jawab Desa Tibubeneng', 5171016521040002, 3, 'Badung', 5103030, 5103030004, NULL, 1, 'pjtibubeneng', NULL),
('5103030005', 'Penanggung Jawab Desa Canggu', 5171016521040003, 3, 'Badung', 5103030, 5103030005, NULL, 1, 'pjcanggu', NULL),
('5103030006', 'Penanggung Jawab Desa Dalung', 5171016521040004, 3, 'Badung', 5103030, 5103030006, NULL, 1, 'pjdalung', NULL),
('5103040', 'Penanggung Jawab Mengwi', 5171016521040005, 2, 'Badung', 5103040, NULL, NULL, 1, 'mengwi3040', 'pulaudewata17@gmail.com'),
('5103040001', 'Penanggung Jawab Desa Cemagi', 5171016521040006, 3, 'Badung', 5103040, 5103040001, NULL, 1, 'pjcemagi', NULL),
('5103040002', 'Penanggung Jawab Desa Munggu', 5171016521040007, 3, 'Badung', 5103040, 5103040002, NULL, 1, 'pjmunggu', NULL),
('5103040003', 'Penanggung Jawab Desa Pererenan', 5171016521040008, 3, 'Badung', 5103040, 5103040003, NULL, 1, 'pjpererenan', NULL),
('5103010', 'Penanggung Jawab Kuta Selatan', 5171016612210001, 2, 'Badung', 5103010, NULL, NULL, 1, 'kutsel3010', NULL),
('dukcapilbd', 'Dinas Kependudukan dan Pencatatan Sipil', 5171016612210002, 1, 'Badung', NULL, NULL, NULL, 1, 'catatansipil', NULL),
('5103010001', 'Penanggung Jawab Desa Pecatu', 5171016612210003, 3, 'Badung', 5103010, 5103010001, NULL, 1, 'pjpecatu', NULL),
('5103010002', 'Penanggung Jawab Desa Unggasan', 5171016612210004, 3, 'Badung', 5103010, 5103010002, NULL, 1, 'pjunggasan', NULL),
('5103010003', 'Penanggung Jawab Desa Kutuh', 5171016612210005, 3, 'Badung', 5103010, 5103010003, NULL, 1, 'pjkutuh', NULL),
('5103010004', 'Penanggung Jawab Desa Benoa', 5171016612210006, 3, 'Badung', 5103010, 5103010004, NULL, 1, 'pjbenoa', NULL),
('5103010005', 'Penanggung Jawab Desa Tanjung Benoa', 5171016612210007, 3, 'Badung', 5103010, 5103010005, NULL, 1, 'pjtjbenoa', NULL),
('5103010006', 'Penanggung Jawab Desa Jimbaran', 5171016612210008, 3, 'Badung', 5103010, 5103010006, NULL, 1, 'pjjimbaran', NULL),
('5103020', 'Penanggung Jawab Kuta', 5171016612210009, 2, 'Badung', 5103020, NULL, NULL, 1, 'kuta3020', NULL),
('5103050006', 'Penanggung Jawab Desa Sibang Kaja', 5171017431080001, 3, 'Badung', 5103050, 5103050006, NULL, 1, 'pjdibangKkaja', NULL),
('5103050007', 'Penanggung Jawab Desa Mekar Bhuana', 5171017431080002, 3, 'Badung', 5103050, 5103050007, NULL, 1, 'pjdekarBhbhuana', NULL),
('5103050008', 'Penanggung Jawab Desa Mambal', 5171017431080003, 3, 'Badung', 5103050, 5103050008, NULL, 1, 'pjmambal', NULL),
('5103050009', 'Penanggung Jawab Desa Abiansemal', 5171017431080004, 3, 'Badung', 5103050, 5103050009, NULL, 1, 'pjabiansemal', NULL),
('5103050010', 'Penanggung Jawab Desa Dauh Yeh Cani', 5171017431080005, 3, 'Badung', 5103050, 5103050010, NULL, 1, 'pjddehcani', NULL),
('5103050011', 'Penanggung Jawab Desa Ayunan', 5171017431080006, 3, 'Badung', 5103050, 5103050011, NULL, 1, 'pjayunan', NULL),
('5103050012', 'Penanggung Jawab Desa Blakiuh', 5171017431080007, 3, 'Badung', 5103050, 5103050012, NULL, 1, 'pjblahkiuh', NULL),
('5103050013', 'Penanggung Jawab Desa Punggul', 5171017431080008, 3, 'Badung', 5103050, 5103050013, NULL, 1, 'pjpunggul', NULL),
('5103040020', 'Penanggung Jawab Desa Kuwum', 5171017621080001, 3, 'Badung', 5103040, 5103040020, NULL, 1, 'pjkuwum', NULL),
('5103050', 'Penanggung Jawab Abiansemal', 5171017621080002, 2, 'Badung', 5103050, NULL, NULL, 1, 'abiansemal3050', NULL),
('5103050001', 'Penanggung Jawab Desa Darmasaba', 5171017621080003, 3, 'Badung', 5103050, 5103050001, NULL, 1, 'pjdarmasaba', NULL),
('5103050002', 'Penanggung Jawab Desa Sibang Gede', 5171017621080004, 3, 'Badung', 5103050, 5103050002, NULL, 1, 'pjdibangGgede', NULL),
('5103050003', 'Penanggung Jawab Desa Jagapati', 5171017621080005, 3, 'Badung', 5103050, 5103050003, NULL, 1, 'pjjagapati', NULL),
('5103050004', 'Penanggung Jawab Desa Angantaka', 5171017621080006, 3, 'Badung', 5103050, 5103050004, NULL, 1, 'pjangantaka', NULL),
('5103050005', 'Penanggung Jawab Desa Sedang', 5171017621080007, 3, 'Badung', 5103050, 51030500015, NULL, 1, 'pjsedang', NULL),
('5103060002', 'Penanggung Jawab Desa Getasan', 5171018831090001, 3, 'Badung', 5103060, 5103060002, NULL, 1, 'pjgetasan', NULL),
('5103060003', 'Penanggung Jawab Desa Pangsan', 5171018831090002, 3, 'Badung', 5103060, 5103060003, NULL, 1, 'pjpangsan', NULL),
('5103060004', 'Penanggung Jawab Desa Petang', 5171018831090003, 3, 'Badung', 5103060, 5103060004, NULL, 1, 'pjpetang', NULL),
('5103060005', 'Penanggung Jawab Desa Sulangai', 5171018831090004, 3, 'Badung', 5103060, 5103060005, NULL, 1, 'pjsulangai', NULL),
('5103060006', 'Penanggung Jawab Desa Pelaga', 5171018831090005, 3, 'Badung', 5103060, 5103060006, NULL, 1, 'pjpelaga', NULL),
('5103060007', 'Penanggung Jawab Desa Beok/Sidan', 5171018831090006, 3, 'Badung', 5103060, 5103060007, NULL, 1, 'pjbeloksidan', NULL),
('5432123456543212', 'Petugas Lurah Taman Griya', 5432123456543212, 4, 'Badung', 5103010, 5103010006, 51030100060011, 1, '11', 'tamangriyaea@gmail.com'),
('5437689032145632', 'Kelian UNTAL-untal', 5437689032145632, 4, 'Badung', 5103030, 5103030006, 51030300060005, 1, '11', 'asdfghj@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `keterangan`) VALUES
(1, 'Kabupaten'),
(2, 'Kecamatan'),
(3, 'Kelurahan/Desa'),
(4, 'Lingkungan/Dusun');

-- --------------------------------------------------------

--
-- Structure for view `lap_agregat`
--
DROP TABLE IF EXISTS `lap_agregat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `lap_agregat`  AS SELECT `lap`.`kode_kecamatan` AS `kode_kecamatan`, `kec`.`nama_kecamatan` AS `nama_kecamatan`, `lap`.`kode_desa` AS `kode_desa`, `des`.`nama_desa` AS `nama_desa`, `lap`.`kode_dusun` AS `kode_dusun`, `dus`.`nama_dusun` AS `nama_dusun`, count(case when `lap`.`jenis_kelamin` = 'perempuan' then 1 else NULL end) AS `perempuan`, count(case when `lap`.`jenis_kelamin` = 'laki-laki' then 1 else NULL end) AS `laki_laki`, count(`lap`.`id_laporan`) AS `total` FROM (((`laporan` `lap` left join `kecamatan` `kec` on(`lap`.`kode_kecamatan` = `kec`.`kode_kecamatan`)) left join `desa` `des` on(`lap`.`kode_desa` = `des`.`kode_desa`)) left join `dusun` `dus` on(`lap`.`kode_dusun` = `dus`.`kode_dusun`)) WHERE `lap`.`status` = 'Sudah Terverifikasi' GROUP BY `dus`.`nama_dusun` ;

-- --------------------------------------------------------

--
-- Structure for view `lap_baru`
--
DROP TABLE IF EXISTS `lap_baru`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `lap_baru`  AS SELECT `lap`.`id_laporan` AS `id_laporan`, `lap`.`date_lapor` AS `date_lapor`, `lap`.`kode_dusun` AS `kode_dusun`, `lap`.`kode_desa` AS `kode_desa`, `lap`.`kode_kecamatan` AS `kode_kecamatan`, `lap`.`NIK_m` AS `NIK_m`, `lap`.`nama_m` AS `nama_m`, `lap`.`tempat_m` AS `tempat_m`, `lap`.`tanggal_m` AS `tanggal_m`, `lap`.`tanggal_p` AS `tanggal_p`, `lap`.`kode_akta` AS `kode_akta`, `lap`.`no_akta` AS `no_akta`, `lap`.`NIK_p` AS `NIK_p`, `lap`.`nama_p` AS `nama_p`, `lap`.`hub_p` AS `hub_p`, `lap`.`nama_lengkap_kepdusun` AS `nama_lengkap_kepdusun`, `lap`.`jenis_kelamin` AS `jenis_kelamin`, `lap`.`status` AS `status`, `lap`.`alamat` AS `alamat`, `lap`.`no_hp` AS `no_hp`, `lap`.`no_kk` AS `no_kk`, `lap`.`no_anak` AS `no_anak`, `kec`.`nama_kecamatan` AS `nama_kecamatan`, `des`.`nama_desa` AS `nama_desa`, `dus`.`nama_dusun` AS `nama_dusun` FROM (((`laporan` `lap` left join `kecamatan` `kec` on(`lap`.`kode_kecamatan` = `kec`.`kode_kecamatan`)) left join `desa` `des` on(`lap`.`kode_desa` = `des`.`kode_desa`)) left join `dusun` `dus` on(`lap`.`kode_dusun` = `dus`.`kode_dusun`)) WHERE `lap`.`status` = 'Belum Terverifikasi' ;

-- --------------------------------------------------------

--
-- Structure for view `lap_ditolak`
--
DROP TABLE IF EXISTS `lap_ditolak`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `lap_ditolak`  AS SELECT `lap`.`id_laporan` AS `id_laporan`, `lap`.`date_lapor` AS `date_lapor`, `lap`.`kode_dusun` AS `kode_dusun`, `lap`.`kode_desa` AS `kode_desa`, `lap`.`kode_kecamatan` AS `kode_kecamatan`, `lap`.`NIK_m` AS `NIK_m`, `lap`.`nama_m` AS `nama_m`, `lap`.`tempat_m` AS `tempat_m`, `lap`.`tanggal_m` AS `tanggal_m`, `lap`.`tanggal_p` AS `tanggal_p`, `lap`.`kode_akta` AS `kode_akta`, `lap`.`no_akta` AS `no_akta`, `lap`.`NIK_p` AS `NIK_p`, `lap`.`nama_p` AS `nama_p`, `lap`.`hub_p` AS `hub_p`, `lap`.`nama_lengkap_kepdusun` AS `nama_lengkap_kepdusun`, `lap`.`jenis_kelamin` AS `jenis_kelamin`, `lap`.`status` AS `status`, `lap`.`alamat` AS `alamat`, `lap`.`no_hp` AS `no_hp`, `lap`.`no_kk` AS `no_kk`, `lap`.`no_anak` AS `no_anak`, `kec`.`nama_kecamatan` AS `nama_kecamatan`, `des`.`nama_desa` AS `nama_desa`, `dus`.`nama_dusun` AS `nama_dusun` FROM (((`laporan` `lap` left join `kecamatan` `kec` on(`lap`.`kode_kecamatan` = `kec`.`kode_kecamatan`)) left join `desa` `des` on(`lap`.`kode_desa` = `des`.`kode_desa`)) left join `dusun` `dus` on(`lap`.`kode_dusun` = `dus`.`kode_dusun`)) WHERE `lap`.`status` = 'Ditolak' ;

-- --------------------------------------------------------

--
-- Structure for view `lap_terverikasi`
--
DROP TABLE IF EXISTS `lap_terverikasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `lap_terverikasi`  AS SELECT `lap`.`id_laporan` AS `id_laporan`, `lap`.`date_lapor` AS `date_lapor`, `lap`.`kode_dusun` AS `kode_dusun`, `lap`.`kode_desa` AS `kode_desa`, `lap`.`kode_kecamatan` AS `kode_kecamatan`, `lap`.`NIK_m` AS `NIK_m`, `lap`.`nama_m` AS `nama_m`, `lap`.`tempat_m` AS `tempat_m`, `lap`.`tanggal_m` AS `tanggal_m`, `lap`.`tanggal_p` AS `tanggal_p`, `lap`.`kode_akta` AS `kode_akta`, `lap`.`no_akta` AS `no_akta`, `lap`.`NIK_p` AS `NIK_p`, `lap`.`nama_p` AS `nama_p`, `lap`.`hub_p` AS `hub_p`, `lap`.`nama_lengkap_kepdusun` AS `nama_lengkap_kepdusun`, `lap`.`jenis_kelamin` AS `jenis_kelamin`, `lap`.`status` AS `status`, `lap`.`alamat` AS `alamat`, `lap`.`no_hp` AS `no_hp`, `lap`.`no_kk` AS `no_kk`, `lap`.`no_anak` AS `no_anak`, `kec`.`nama_kecamatan` AS `nama_kecamatan`, `des`.`nama_desa` AS `nama_desa`, `dus`.`nama_dusun` AS `nama_dusun` FROM (((`laporan` `lap` left join `kecamatan` `kec` on(`lap`.`kode_kecamatan` = `kec`.`kode_kecamatan`)) left join `desa` `des` on(`lap`.`kode_desa` = `des`.`kode_desa`)) left join `dusun` `dus` on(`lap`.`kode_dusun` = `dus`.`kode_dusun`)) WHERE `lap`.`status` = 'Sudah Terverifikasi' ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`kode_desa`);

--
-- Indexes for table `dusun`
--
ALTER TABLE `dusun`
  ADD PRIMARY KEY (`kode_dusun`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`kode_kecamatan`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`NIK`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
