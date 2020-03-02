-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 02, 2020 at 10:48 
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `komunitas_awal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `no_reg` int(3) NOT NULL AUTO_INCREMENT,
  `nama_depan` varchar(20) NOT NULL,
  `nama_belakang` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` float DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`no_reg`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`no_reg`, `nama_depan`, `nama_belakang`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `no_hp`, `foto`) VALUES
(1, 'rudy', '', '0000-00-00', 'L', '', 0, 'belum ada'),
(2, '', '', '0000-00-00', '', '', 0, 'belum ada');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE IF NOT EXISTS `gambar` (
  `id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `gambar` text,
  `status` enum('yes','no') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `gambar`, `status`) VALUES
(1, 'Koala.jpg', 'yes'),
(2, 'Penguins.jpg', 'yes'),
(3, 'Lighthouse.jpg', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE IF NOT EXISTS `pengurus` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `gaji` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=902 ;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`id`, `nama`, `gender`, `alamat`, `gaji`) VALUES
(105, 'Sigit', 'L', 'Surabaya', 20000),
(104, 'Fariz', 'L', 'Malang', 12000),
(103, 'Fikri', 'L', 'Madiun', 15000),
(102, 'Burhan', 'L', 'Malang', 12000),
(101, 'Andi', 'P', 'Jakarta', 14000),
(100, 'Arif saja', 'L', 'Surabaya', 10000),
(108, 'Zakiyudin', 'L', 'Surabaya', 21000),
(106, 'Ifan', 'L', 'Kediri', 16000),
(107, 'Hanif', 'L', 'Yogyakarta', 12000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
