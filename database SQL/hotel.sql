-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 30, 2017 at 05:53 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_kasir` varchar(20) NOT NULL DEFAULT '',
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `akses` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kasir`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_kasir`, `nama`, `alamat`, `telepon`, `status`, `username`, `password`, `akses`) VALUES
('K2', 'Lopinda', 'Fanindo', '08199922334', 'Lajang', 'lopinda123', 'lopinda123', 'kasir'),
('K3', 'Sumiati', 'Nagoya ', '081928773287', 'Lajang', 'sumiati123', 'sumiati123', 'kasir'),
('M1', 'Bobi', 'Nagajaya Blok E1 No.2', '081392889890', 'Menikah', 'user', 'user', 'manajer');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE IF NOT EXISTS `kamar` (
  `id_kamar` varchar(10) NOT NULL DEFAULT '0',
  `jenis_kamar` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `harga_sewa` int(11) NOT NULL,
  `ppn` int(11) NOT NULL,
  `diskon` int(11) NOT NULL,
  PRIMARY KEY (`id_kamar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `jenis_kamar`, `deskripsi`, `harga_sewa`, `ppn`, `diskon`) VALUES
('1', 'Superior', 'Free Wifi', 250000, 25000, 0),
('2', 'Standard', 'Free Wifi, Smoking Room', 100000, 9000, 10),
('3', 'VIP', 'Free Wifi, Swimming Room', 500000, 40000, 10);

-- --------------------------------------------------------

--
-- Table structure for table `penyewaan`
--

CREATE TABLE IF NOT EXISTS `penyewaan` (
  `id_sewa` int(11) NOT NULL AUTO_INCREMENT,
  `id_kamar` varchar(10) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `hp` varchar(30) NOT NULL,
  `id_kasir` varchar(10) NOT NULL,
  `tambahan` int(11) NOT NULL,
  `laundry` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id_sewa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55560 ;

--
-- Dumping data for table `penyewaan`
--

INSERT INTO `penyewaan` (`id_sewa`, `id_kamar`, `nama`, `hp`, `id_kasir`, `tambahan`, `laundry`, `total`, `tanggal`) VALUES
(55556, '1', 'Gadani', '082284880084', 'K2', 10000, 20000, 305000, '2017-11-29 17:05:00'),
(55557, '1', 'Gilang', '08233929919', 'K2', 10000, 20000, 305000, '2017-11-29 14:59:00'),
(55558, '1', 'Suparjo', '08228383839', 'K2', 50000, 20000, 345000, '2017-11-30 14:02:00');
