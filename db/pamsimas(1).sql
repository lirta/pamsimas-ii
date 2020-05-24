-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2020 at 12:46 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pamsimas`
--
CREATE DATABASE IF NOT EXISTS `pamsimas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pamsimas`;

-- --------------------------------------------------------

--
-- Table structure for table `detail_penilaian`
--

CREATE TABLE IF NOT EXISTS `detail_penilaian` (
  `detail_penilaian_id` int(11) NOT NULL AUTO_INCREMENT,
  `penilaian_id` varchar(111) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `nilai` varchar(50) NOT NULL,
  PRIMARY KEY (`detail_penilaian_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=502 ;

--
-- Dumping data for table `detail_penilaian`
--

INSERT INTO `detail_penilaian` (`detail_penilaian_id`, `penilaian_id`, `kategori_id`, `nilai`) VALUES
(484, 'november 2019121214', 3, '3'),
(485, 'november 2019121214', 4, '3'),
(486, 'november 2019121214', 5, '2'),
(487, 'november 2019121214', 6, '2'),
(488, 'november 2019121214', 7, '1'),
(489, 'november 2019121214', 9, '3'),
(490, 'november 2019121214', 10, '3'),
(491, 'november 2019121214', 11, '3'),
(492, 'november 2019121214', 12, '3'),
(493, 'januari 20203', 3, '4'),
(494, 'januari 20203', 4, '3'),
(495, 'januari 20203', 5, '3'),
(496, 'januari 20203', 6, '3'),
(497, 'januari 20203', 7, '2'),
(498, 'januari 20203', 9, '3'),
(499, 'januari 20203', 10, '3'),
(500, 'januari 20203', 11, '4'),
(501, 'januari 20203', 12, '3');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(225) NOT NULL,
  PRIMARY KEY (`kategori_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori`) VALUES
(3, 'Rencana kerja bulanan '),
(4, 'laporan bulanan'),
(5, 'kemampuan mengendalikanpelaksanaan tugas TFM dalam pencapaian tujuan program, termasuk memberikan kepastian bagi TFM'),
(6, 'kemampuan mendukung TFM dalam memfasilitasi pemerintah desa untuk memprioritaskan kegiatan pembangunan AMPI'),
(7, 'kemampuan melakukan review dan menjamin kualitas PJM proAksi'),
(9, 'kemampuanmelakukan review dan manjamin kualitas RKM'),
(10, 'jumlah laporan atau pengaduan masyarakat dalam aplikasi PPM pamsimas yang terselesaikan'),
(11, 'Data SIM desa terisi dan terverivikasi secara tepat waktu'),
(12, 'Dukungan terhadap district cordinator (DC) dalam mengadvokasi pemerintah daerah untuk memfalitasi pemerintah desa guna memprioritaskan kegiatan pembangunan AMPI');

-- --------------------------------------------------------

--
-- Table structure for table `keterangan`
--

CREATE TABLE IF NOT EXISTS `keterangan` (
  `keterangan_id` int(11) NOT NULL AUTO_INCREMENT,
  `penilaian_id` varchar(122) NOT NULL,
  `pegawai_id` int(11) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  PRIMARY KEY (`keterangan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `keterangan`
--

INSERT INTO `keterangan` (`keterangan_id`, `penilaian_id`, `pegawai_id`, `keterangan`) VALUES
(7, 'januari 20203', 3, 'saya tidak bersalah'),
(14, 'januari 20203', 121213, 'kamu bersalah'),
(20, 'januari 20203', 3, 'serius pak');

-- --------------------------------------------------------

--
-- Table structure for table `kuesioner`
--

CREATE TABLE IF NOT EXISTS `kuesioner` (
  `kuesioner_id` varchar(125) NOT NULL,
  `kuesioner_nama` varchar(125) NOT NULL,
  `kuesioner_tgl` varchar(122) NOT NULL,
  `pegawai_id` int(11) NOT NULL,
  `nilai_jml` int(11) NOT NULL,
  `nilai_huruf` varchar(122) NOT NULL,
  PRIMARY KEY (`kuesioner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kuesioner`
--

INSERT INTO `kuesioner` (`kuesioner_id`, `kuesioner_nama`, `kuesioner_tgl`, `pegawai_id`, `nilai_jml`, `nilai_huruf`) VALUES
('20.02.0107.06.49', '', '20.02.01', 3, 3, 'BAIK'),
('20.02.0201.31.04', 'mario pandi', '20.02.02', 3, 3, 'BAIK');

-- --------------------------------------------------------

--
-- Table structure for table `kuesioner_detail`
--

CREATE TABLE IF NOT EXISTS `kuesioner_detail` (
  `kuesioner_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `kuesioner_id` varchar(122) NOT NULL,
  `kuesioner_kategori_id` int(11) NOT NULL,
  `kuesioner_nilai` int(11) NOT NULL,
  PRIMARY KEY (`kuesioner_detail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `kuesioner_detail`
--

INSERT INTO `kuesioner_detail` (`kuesioner_detail_id`, `kuesioner_id`, `kuesioner_kategori_id`, `kuesioner_nilai`) VALUES
(7, '20.02.0107.06.49', 1, 3),
(8, '20.02.0107.06.49', 2, 3),
(9, '20.02.0107.06.49', 3, 3),
(10, '20.02.0201.31.04', 1, 4),
(11, '20.02.0201.31.04', 2, 1),
(12, '20.02.0201.31.04', 3, 4),
(13, '20.02.0201.31.04', 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `kuesioner_kategori`
--

CREATE TABLE IF NOT EXISTS `kuesioner_kategori` (
  `kuesioner_kategori_id` int(11) NOT NULL AUTO_INCREMENT,
  `kuesioner_kategori` text NOT NULL,
  PRIMARY KEY (`kuesioner_kategori_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `kuesioner_kategori`
--

INSERT INTO `kuesioner_kategori` (`kuesioner_kategori_id`, `kuesioner_kategori`) VALUES
(1, 'nama saya'),
(2, 'Data SIM desa terisi dan terverivikasi secara tepat waktu'),
(3, 'Dukungan terhadap district cordinator (DC) dalam mengadvokasi pemerintah daerah untuk memfalitasi pemerintah desa guna memprioritaskan kegiatan pembangunan AMPI');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE IF NOT EXISTS `laporan` (
  `laporan_id` int(11) NOT NULL AUTO_INCREMENT,
  `pegawai_id` int(11) NOT NULL,
  `tanggal` varchar(111) NOT NULL,
  `laporan` varchar(125) NOT NULL,
  PRIMARY KEY (`laporan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`laporan_id`, `pegawai_id`, `tanggal`, `laporan`) VALUES
(3, 3, '20.02.01', '75875854BAB III.docx'),
(5, 3, '03.02.2020', '25302124data.docx');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `pegawai_id` int(11) NOT NULL AUTO_INCREMENT,
  `pegawai_nama` varchar(50) NOT NULL,
  `pegawai_tmp_lahir` varchar(125) NOT NULL,
  `pegawai_tgl_lahir` varchar(122) NOT NULL,
  `pegawai_jenis_kelamin` varchar(20) NOT NULL,
  `pegawai_alamat` varchar(125) NOT NULL,
  `pegawai_no_hp` varchar(50) NOT NULL,
  `pegawai_jabatan` varchar(125) NOT NULL,
  `pegawai_penempatan` varchar(125) NOT NULL,
  `pegawai_foto` varchar(225) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL,
  PRIMARY KEY (`pegawai_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=121217 ;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`pegawai_id`, `pegawai_nama`, `pegawai_tmp_lahir`, `pegawai_tgl_lahir`, `pegawai_jenis_kelamin`, `pegawai_alamat`, `pegawai_no_hp`, `pegawai_jabatan`, `pegawai_penempatan`, `pegawai_foto`, `username`, `password`) VALUES
(3, 'inda', 'padang', '11/18/1990', 'laki-laki', 'lintau', '08127796050', 'FASILITATOR', 'pelalawan', 'a3.jpg', 'inda', '93da7ff0080ed80c4176b99cf2ad459a'),
(121213, 'joni', 'palembang', '07/11/2007', 'laki-laki', 'pekanbaru', '0984482928', 'SATKER', 'pelalawan', 'a1.jpg', 'joni', '3264e27e61d9b1645a0f338fcf6f97e1'),
(121214, 'fajar', 'pekenbaru', '03/13/2025', 'laki-laki', 'jl. garuda sakti', '0948538459384', 'FASILITATOR', 'pelalawan', 'DEWA KODOK.jpg', 'fajar', 'cf028530859675896cec655da4546dde'),
(121215, 'ocq', 'bangkinang', '01/01/2020', 'laki-laki', 'pekanbaru', '09123848u', 'FASILITATOR', 'palalawan', 'a7.jpg', '01/01/2020', '97a6b9ad1b0e8975aaa19eec9910b5f3'),
(121216, 'zdxszxz', '', '', '', '', '', 'SATKER', '', 'a2.jpg', '', 'd41d8cd98f00b204e9800998ecf8427e');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE IF NOT EXISTS `penilaian` (
  `penilaian_id` varchar(125) NOT NULL,
  `penilai_id` int(11) NOT NULL,
  `personil_id` int(11) NOT NULL,
  `periode` varchar(125) NOT NULL,
  `nilai_evaluasi` float NOT NULL,
  `nilai_huruf` varchar(12) NOT NULL,
  PRIMARY KEY (`penilaian_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`penilaian_id`, `penilai_id`, `personil_id`, `periode`, `nilai_evaluasi`, `nilai_huruf`) VALUES
('januari 20203', 121213, 3, 'januari 2020', 3.11111, 'BAIK'),
('november 2019121214', 121213, 121214, 'november 2019', 2.55556, 'CUKUP');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
