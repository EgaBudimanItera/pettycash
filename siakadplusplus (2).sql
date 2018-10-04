-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.6.21 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for siakadplusplus
CREATE DATABASE IF NOT EXISTS `siakadplusplus` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `siakadplusplus`;


-- Dumping structure for table siakadplusplus.agama
CREATE TABLE IF NOT EXISTS `agama` (
  `id_agama` int(16) NOT NULL,
  `nm_agama` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table siakadplusplus.agama: 1 rows
/*!40000 ALTER TABLE `agama` DISABLE KEYS */;
INSERT INTO `agama` (`id_agama`, `nm_agama`) VALUES
	(1, 'Islam');
/*!40000 ALTER TABLE `agama` ENABLE KEYS */;


-- Dumping structure for table siakadplusplus.angkatan
CREATE TABLE IF NOT EXISTS `angkatan` (
  `angkatan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table siakadplusplus.angkatan: 6 rows
/*!40000 ALTER TABLE `angkatan` DISABLE KEYS */;
INSERT INTO `angkatan` (`angkatan`) VALUES
	('2015.2Kar'),
	('2015.2Reg'),
	('2015.1Kar'),
	('2015.1Reg'),
	('2016.1Reg'),
	('2016.1Kar');
/*!40000 ALTER TABLE `angkatan` ENABLE KEYS */;


-- Dumping structure for table siakadplusplus.bayarlain
CREATE TABLE IF NOT EXISTS `bayarlain` (
  `no` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `sms` varchar(100) NOT NULL,
  `nim` varchar(500) NOT NULL,
  `bayar` int(100) NOT NULL,
  `sisa` int(100) NOT NULL,
  `angkatan` varchar(100) NOT NULL,
  `prodi` varchar(500) NOT NULL,
  `muser` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table siakadplusplus.bayarlain: 2 rows
/*!40000 ALTER TABLE `bayarlain` DISABLE KEYS */;
INSERT INTO `bayarlain` (`no`, `tgl`, `sms`, `nim`, `bayar`, `sisa`, `angkatan`, `prodi`, `muser`) VALUES
	('LLN1405201500000001', '2015-05-14', 'Lab Bahasa', '15101', 100000, 0, '2016.1Reg', 'Ekonomi', 'Admin'),
	('LLN1405201500000002', '2015-05-14', 'Lab Komputer', '15101', 20000, 80000, '2016.1Reg', 'Ekonomi', 'Admin');
/*!40000 ALTER TABLE `bayarlain` ENABLE KEYS */;


-- Dumping structure for table siakadplusplus.bayarpertama
CREATE TABLE IF NOT EXISTS `bayarpertama` (
  `no` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `nim` varchar(500) NOT NULL,
  `bayar` int(100) NOT NULL,
  `sisa` int(100) NOT NULL,
  `angkatan` varchar(100) NOT NULL,
  `prodi` varchar(500) NOT NULL,
  `muser` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table siakadplusplus.bayarpertama: 3 rows
/*!40000 ALTER TABLE `bayarpertama` DISABLE KEYS */;
INSERT INTO `bayarpertama` (`no`, `tgl`, `nim`, `bayar`, `sisa`, `angkatan`, `prodi`, `muser`) VALUES
	('THP1405201500000002', '2015-05-14', '4242342', 100000, 1900000, '2015.1Reg', 'Ekonomi', 'Admin'),
	('THP1405201500000001', '2015-05-14', '4242342', 200000, 2000000, '2015.1Reg', 'Ekonomi', 'Admin'),
	('THP1405201500000003', '2015-05-14', '15101', 100000, 900000, '2016.1Reg', 'Ekonomi', 'Admin');
/*!40000 ALTER TABLE `bayarpertama` ENABLE KEYS */;


-- Dumping structure for table siakadplusplus.bayarsemester
CREATE TABLE IF NOT EXISTS `bayarsemester` (
  `no` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `sms` varchar(100) NOT NULL,
  `nim` varchar(500) NOT NULL,
  `bayar` int(100) NOT NULL,
  `sisa` int(100) NOT NULL,
  `angkatan` varchar(100) NOT NULL,
  `prodi` varchar(500) NOT NULL,
  `muser` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table siakadplusplus.bayarsemester: 1 rows
/*!40000 ALTER TABLE `bayarsemester` DISABLE KEYS */;
INSERT INTO `bayarsemester` (`no`, `tgl`, `sms`, `nim`, `bayar`, `sisa`, `angkatan`, `prodi`, `muser`) VALUES
	('SMS1405201500000001', '2015-05-14', '1', '15101', 100000, 900000, '2016.1Reg', 'Ekonomi', 'Admin');
/*!40000 ALTER TABLE `bayarsemester` ENABLE KEYS */;


-- Dumping structure for table siakadplusplus.bayarsks
CREATE TABLE IF NOT EXISTS `bayarsks` (
  `no` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `sms` varchar(100) NOT NULL,
  `nim` varchar(500) NOT NULL,
  `bayar` int(100) NOT NULL,
  `sisa` int(100) NOT NULL,
  `angkatan` varchar(100) NOT NULL,
  `prodi` varchar(500) NOT NULL,
  `muser` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table siakadplusplus.bayarsks: 1 rows
/*!40000 ALTER TABLE `bayarsks` DISABLE KEYS */;
INSERT INTO `bayarsks` (`no`, `tgl`, `sms`, `nim`, `bayar`, `sisa`, `angkatan`, `prodi`, `muser`) VALUES
	('SKS1405201500000001', '2015-05-14', '1', '15101', 20000, 100000, '2016.1Reg', 'Ekonomi', 'Admin');
/*!40000 ALTER TABLE `bayarsks` ENABLE KEYS */;


-- Dumping structure for table siakadplusplus.biayalain
CREATE TABLE IF NOT EXISTS `biayalain` (
  `angkatan` varchar(100) NOT NULL,
  `prodi` varchar(500) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `biaya` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table siakadplusplus.biayalain: 4 rows
/*!40000 ALTER TABLE `biayalain` DISABLE KEYS */;
INSERT INTO `biayalain` (`angkatan`, `prodi`, `nama`, `biaya`) VALUES
	('2015.1Reg', 'Ekonomi', 'Lab Komputer', 100000),
	('2015.1Reg', 'Ekonomi', 'Lab kuntansi', 100000),
	('2016.1Reg', 'Ekonomi', 'Lab Komputer', 100000),
	('2016.1Reg', 'Ekonomi', 'Lab Bahasa', 10000);
/*!40000 ALTER TABLE `biayalain` ENABLE KEYS */;


-- Dumping structure for table siakadplusplus.biayasemester
CREATE TABLE IF NOT EXISTS `biayasemester` (
  `angkatan` varchar(100) NOT NULL,
  `prodi` varchar(500) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `biaya` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table siakadplusplus.biayasemester: 2 rows
/*!40000 ALTER TABLE `biayasemester` DISABLE KEYS */;
INSERT INTO `biayasemester` (`angkatan`, `prodi`, `nama`, `biaya`) VALUES
	('2015.1Reg', 'Ekonomi', 'SPP', 1000000),
	('2016.1Reg', 'Ekonomi', 'SPP', 1000000);
/*!40000 ALTER TABLE `biayasemester` ENABLE KEYS */;


-- Dumping structure for table siakadplusplus.biayasks
CREATE TABLE IF NOT EXISTS `biayasks` (
  `angkatan` varchar(100) NOT NULL,
  `prodi` varchar(500) NOT NULL,
  `biaya` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table siakadplusplus.biayasks: 2 rows
/*!40000 ALTER TABLE `biayasks` DISABLE KEYS */;
INSERT INTO `biayasks` (`angkatan`, `prodi`, `biaya`) VALUES
	('2015.1Reg', 'Ekonomi', 20000),
	('2016.1Reg', 'Ekonomi', 20000);
/*!40000 ALTER TABLE `biayasks` ENABLE KEYS */;


-- Dumping structure for table siakadplusplus.biayathpertama
CREATE TABLE IF NOT EXISTS `biayathpertama` (
  `angkatan` varchar(100) NOT NULL,
  `prodi` varchar(500) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `biaya` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table siakadplusplus.biayathpertama: 3 rows
/*!40000 ALTER TABLE `biayathpertama` DISABLE KEYS */;
INSERT INTO `biayathpertama` (`angkatan`, `prodi`, `nama`, `biaya`) VALUES
	('2015.1Reg', 'Ekonomi', 'Almamater', 200000),
	('2015.1Reg', 'Ekonomi', 'Pengembangan Kampus', 2000000),
	('2016.1Reg', 'Ekonomi', 'Bnungan', 1000000);
/*!40000 ALTER TABLE `biayathpertama` ENABLE KEYS */;


-- Dumping structure for table siakadplusplus.dosen
CREATE TABLE IF NOT EXISTS `dosen` (
  `kode` varchar(100) NOT NULL,
  `nidn` varchar(100) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `tlp` varchar(100) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `tlahir` varchar(100) NOT NULL,
  `tgllahir` date NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `golongan` varchar(100) NOT NULL,
  `email` varchar(500) NOT NULL,
  `prodi` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table siakadplusplus.dosen: 1 rows
/*!40000 ALTER TABLE `dosen` DISABLE KEYS */;
INSERT INTO `dosen` (`kode`, `nidn`, `nip`, `nama`, `alamat`, `tlp`, `jk`, `tlahir`, `tgllahir`, `pendidikan`, `jabatan`, `status`, `golongan`, `email`, `prodi`) VALUES
	('DS.001', '86896675', '-', 'Dadang', 'Sumedang', '081322205259', 'L', 'Sumedang', '1983-05-14', 'S2', '-', 'Tetap', 'III/C', '-', 'Ekonomi');
/*!40000 ALTER TABLE `dosen` ENABLE KEYS */;


-- Dumping structure for table siakadplusplus.hbiayasemester
CREATE TABLE IF NOT EXISTS `hbiayasemester` (
  `angkatan` varchar(100) NOT NULL,
  `prodi` varchar(500) NOT NULL,
  `biaya` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table siakadplusplus.hbiayasemester: 2 rows
/*!40000 ALTER TABLE `hbiayasemester` DISABLE KEYS */;
INSERT INTO `hbiayasemester` (`angkatan`, `prodi`, `biaya`) VALUES
	('2015.1Reg', 'Ekonomi', 1000000),
	('2016.1Reg', 'Ekonomi', 1000000);
/*!40000 ALTER TABLE `hbiayasemester` ENABLE KEYS */;


-- Dumping structure for table siakadplusplus.hbiayathpertama
CREATE TABLE IF NOT EXISTS `hbiayathpertama` (
  `angkatan` varchar(100) NOT NULL,
  `prodi` varchar(500) NOT NULL,
  `biaya` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table siakadplusplus.hbiayathpertama: 2 rows
/*!40000 ALTER TABLE `hbiayathpertama` DISABLE KEYS */;
INSERT INTO `hbiayathpertama` (`angkatan`, `prodi`, `biaya`) VALUES
	('2015.1Reg', 'Ekonomi', 2200000),
	('2016.1Reg', 'Ekonomi', 1000000);
/*!40000 ALTER TABLE `hbiayathpertama` ENABLE KEYS */;


-- Dumping structure for table siakadplusplus.hjurnal
CREATE TABLE IF NOT EXISTS `hjurnal` (
  `nojurnal` varchar(100) NOT NULL,
  `tglfaktur` date NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table siakadplusplus.hjurnal: 0 rows
/*!40000 ALTER TABLE `hjurnal` DISABLE KEYS */;
/*!40000 ALTER TABLE `hjurnal` ENABLE KEYS */;


-- Dumping structure for table siakadplusplus.inbox
CREATE TABLE IF NOT EXISTS `inbox` (
  `status` varchar(100) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `isi` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table siakadplusplus.inbox: 0 rows
/*!40000 ALTER TABLE `inbox` DISABLE KEYS */;
/*!40000 ALTER TABLE `inbox` ENABLE KEYS */;


-- Dumping structure for table siakadplusplus.inventaris
CREATE TABLE IF NOT EXISTS `inventaris` (
  `kode` varchar(100) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `prodi` varchar(500) NOT NULL,
  `tgl` date NOT NULL,
  `jumlah` int(100) NOT NULL,
  `Baik` int(100) NOT NULL,
  `Rusakringan` int(100) NOT NULL,
  `Rusakberat` int(100) NOT NULL,
  `SumberDana` varchar(500) NOT NULL,
  KEY `kode` (`kode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table siakadplusplus.inventaris: 0 rows
/*!40000 ALTER TABLE `inventaris` DISABLE KEYS */;
/*!40000 ALTER TABLE `inventaris` ENABLE KEYS */;


-- Dumping structure for table siakadplusplus.jurnal
CREATE TABLE IF NOT EXISTS `jurnal` (
  `nojurnal` varchar(100) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `kodeakun` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `debet` int(100) NOT NULL,
  `kredit` int(100) NOT NULL,
  `muser` varchar(500) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table siakadplusplus.jurnal: 14 rows
/*!40000 ALTER TABLE `jurnal` DISABLE KEYS */;
INSERT INTO `jurnal` (`nojurnal`, `keterangan`, `kodeakun`, `ket`, `debet`, `kredit`, `muser`, `tgl`) VALUES
	('THP1405201500000002', 'Biaya Tahun Pertama NIM 4242342', '4010002', 'K', 0, 100000, 'Admin', '2015-05-14'),
	('THP1405201500000002', 'Biaya Tahun Pertama NIM 4242342', '1010001', 'D', 100000, 0, 'Admin', '2015-05-14'),
	('THP1405201500000001', 'Biaya Tahun Pertama NIM 4242342', '4010002', 'K', 0, 200000, 'Admin', '2015-05-14'),
	('THP1405201500000001', 'Biaya Tahun Pertama NIM 4242342', '1010001', 'D', 200000, 0, 'Admin', '2015-05-14'),
	('THP1405201500000003', 'Biaya Tahun Pertama NIM 15101', '1010001', 'D', 100000, 0, 'Admin', '2015-05-14'),
	('THP1405201500000003', 'Biaya Tahun Pertama NIM 15101', '4010002', 'K', 0, 100000, 'Admin', '2015-05-14'),
	('SMS1405201500000001', 'Biaya Semester 1 NIM 15101', '1010001', 'D', 100000, 0, 'Admin', '2015-05-14'),
	('SMS1405201500000001', 'Biaya Semester 1 NIM 15101', '4010001', 'K', 0, 100000, 'Admin', '2015-05-14'),
	('SKS1405201500000001', 'Biaya SKS Semester 1 NIM 15101', '1010001', 'D', 20000, 0, 'Admin', '2015-05-14'),
	('SKS1405201500000001', 'Biaya SKS Semester 1 NIM 15101', '4010003', 'K', 0, 20000, 'Admin', '2015-05-14'),
	('LLN1405201500000001', 'Biaya Lain Semester Lab Bahasa NIM 15101', '1010001', 'D', 100000, 0, 'Admin', '2015-05-14'),
	('LLN1405201500000001', 'Biaya Lain Semester Lab Bahasa NIM 15101', '4010004', 'K', 0, 100000, 'Admin', '2015-05-14'),
	('LLN1405201500000002', 'Biaya Lain Semester Lab Komputer NIM 15101', '1010001', 'D', 20000, 0, 'Admin', '2015-05-14'),
	('LLN1405201500000002', 'Biaya Lain Semester Lab Komputer NIM 15101', '4010004', 'K', 0, 20000, 'Admin', '2015-05-14');
/*!40000 ALTER TABLE `jurnal` ENABLE KEYS */;


-- Dumping structure for table siakadplusplus.karyawan
CREATE TABLE IF NOT EXISTS `karyawan` (
  `kode` varchar(100) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `tlp` varchar(100) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `tlahir` varchar(100) NOT NULL,
  `tgllahir` date NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `golongan` varchar(100) NOT NULL,
  `email` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table siakadplusplus.karyawan: 0 rows
/*!40000 ALTER TABLE `karyawan` DISABLE KEYS */;
/*!40000 ALTER TABLE `karyawan` ENABLE KEYS */;


-- Dumping structure for table siakadplusplus.krs
CREATE TABLE IF NOT EXISTS `krs` (
  `nim` varchar(100) NOT NULL,
  `sms` varchar(100) NOT NULL,
  `tadmik` varchar(100) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `nilai` varchar(100) DEFAULT NULL,
  `sks` int(100) NOT NULL,
  `nk` int(100) DEFAULT NULL,
  `ketsms` varchar(100) NOT NULL,
  `muser` varchar(500) NOT NULL,
  KEY `nim` (`nim`),
  KEY `sms` (`sms`),
  KEY `tadmik` (`tadmik`),
  KEY `kode` (`kode`),
  KEY `ketsms` (`ketsms`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table siakadplusplus.krs: 2 rows
/*!40000 ALTER TABLE `krs` DISABLE KEYS */;
INSERT INTO `krs` (`nim`, `sms`, `tadmik`, `kode`, `nilai`, `sks`, `nk`, `ketsms`, `muser`) VALUES
	('15101', '1', '2016/2017', 'MKDU-0001', 'A', 3, 12, 'Ganjil', 'Admin'),
	('15101', '1', '2016/2017', 'MKDU-0003', 'B', 3, 9, 'Ganjil', 'Admin');
/*!40000 ALTER TABLE `krs` ENABLE KEYS */;


-- Dumping structure for table siakadplusplus.masterakun
CREATE TABLE IF NOT EXISTS `masterakun` (
  `kodeakun` varchar(100) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `golongan` varchar(100) NOT NULL,
  `akun` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table siakadplusplus.masterakun: 26 rows
/*!40000 ALTER TABLE `masterakun` DISABLE KEYS */;
INSERT INTO `masterakun` (`kodeakun`, `kode`, `jenis`, `golongan`, `akun`) VALUES
	('1010001', '101', 'AKTIVA', 'Aktiva Lancar', 'Kas'),
	('3010001', '301', 'MODAL', 'Modal', 'Modal'),
	('1010002', '101', 'AKTIVA', 'Aktiva Lancar', 'Kas Besar'),
	('1010003', '101', 'AKTIVA', 'Aktiva Lancar', 'Bank Rakyat Indonesia'),
	('1010004', '101', 'AKTIVA', 'Aktiva Lancar', 'Bank Negara Indonesia'),
	('1010005', '101', 'AKTIVA', 'Aktiva Lancar', 'Bank Rakyat Indonesia Syariah'),
	('1010006', '101', 'AKTIVA', 'Aktiva Lancar', 'Bank Negara Indonesia Syariah'),
	('1020001', '102', 'AKTIVA', 'Aktiva Tetap', 'Tanah'),
	('1020002', '102', 'AKTIVA', 'Aktiva Tetap', 'Bangunan'),
	('1010007', '101', 'AKTIVA', 'Aktiva Lancar', 'Kendaraan Mobil'),
	('1020003', '102', 'AKTIVA', 'Aktiva Tetap', 'Kendaraan Motor'),
	('2010001', '201', 'PASIVA', 'Kewajiban Lancar', 'Utang Bank Rakyat Indonesia'),
	('2010002', '201', 'PASIVA', 'Kewajiban Lancar', 'Utang Bank Rakyat Indonesia Syariah'),
	('2010003', '201', 'PASIVA', 'Kewajiban Lancar', 'Utang Bank Negara Indonesia'),
	('2010004', '201', 'PASIVA', 'Kewajiban Lancar', 'Utang Bank Negara Indonesia Syariah'),
	('3020001', '302', 'MODAL', 'Laba / Rugi', 'Rugi Laba Tahun Lalu'),
	('3020002', '302', 'MODAL', 'Laba / Rugi', 'Rugi Laba Tahun Berjalan'),
	('3020003', '302', 'MODAL', 'Laba / Rugi', 'Rugi Laba Bulan Berjalan'),
	('4010001', '401', 'PENDAPATAN ', 'Pendapatan Operasional', 'Pendapatan SPP'),
	('4010002', '401', 'PENDAPATAN ', 'Pendapatan Operasional', 'Pendapatan Pengembangan Kampus'),
	('4010003', '401', 'PENDAPATAN ', 'Pendapatan Operasional', 'Pendapatan SKS'),
	('4010004', '401', 'PENDAPATAN ', 'Pendapatan Operasional', 'Pendapatan Lainnya'),
	('5010001', '501', 'BIAYA', 'Beban Operasional', 'Biaya Gaji Dosen'),
	('5010002', '501', 'BIAYA', 'Beban Operasional', 'Biaya Gaji Pimpinan dan Staf'),
	('5010003', '501', 'BIAYA', 'Beban Operasional', 'Biaya ATK'),
	('5010004', '501', 'BIAYA', 'Beban Operasional', 'Biaya Listrik, Air dan Tlp');
/*!40000 ALTER TABLE `masterakun` ENABLE KEYS */;


-- Dumping structure for table siakadplusplus.mhs
CREATE TABLE IF NOT EXISTS `mhs` (
  `nim` varchar(100) NOT NULL DEFAULT '',
  `nik` varchar(100) DEFAULT NULL,
  `tglreg` date DEFAULT NULL,
  `jenis` varchar(100) DEFAULT NULL,
  `angkatan` varchar(100) DEFAULT NULL,
  `prodi` varchar(300) DEFAULT NULL,
  `nama` varchar(500) DEFAULT NULL,
  `tempatlahir` varchar(100) DEFAULT NULL,
  `tgllahir` date DEFAULT NULL,
  `jk` varchar(100) DEFAULT NULL,
  `agama` varchar(100) DEFAULT NULL,
  `alamat` varchar(500) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `smu` varchar(500) DEFAULT NULL,
  `thnlulus` varchar(100) DEFAULT NULL,
  `perusahaan` varchar(500) DEFAULT NULL,
  `jabatan` varchar(200) DEFAULT NULL,
  `dosen` varchar(100) DEFAULT NULL,
  `statusmhs` varchar(100) DEFAULT NULL,
  `ayah` varchar(500) DEFAULT NULL,
  `tlahirayah` date DEFAULT NULL,
  `pendidikanayah` varchar(100) DEFAULT NULL,
  `pekerjaanayah` varchar(100) DEFAULT NULL,
  `penghasilanayah` varchar(100) DEFAULT NULL,
  `ibu` varchar(500) DEFAULT NULL,
  `tlahiribu` date DEFAULT NULL,
  `pendidikanibu` varchar(100) DEFAULT NULL,
  `pekerjaanibu` varchar(100) DEFAULT NULL,
  `penghasilanibu` varchar(100) DEFAULT NULL,
  `judul` varchar(500) DEFAULT NULL,
  `hp` varchar(100) DEFAULT NULL,
  KEY `nim` (`nim`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table siakadplusplus.mhs: 81 rows
/*!40000 ALTER TABLE `mhs` DISABLE KEYS */;
INSERT INTO `mhs` (`nim`, `nik`, `tglreg`, `jenis`, `angkatan`, `prodi`, `nama`, `tempatlahir`, `tgllahir`, `jk`, `agama`, `alamat`, `status`, `smu`, `thnlulus`, `perusahaan`, `jabatan`, `dosen`, `statusmhs`, `ayah`, `tlahirayah`, `pendidikanayah`, `pekerjaanayah`, `penghasilanayah`, `ibu`, `tlahiribu`, `pendidikanibu`, `pekerjaanibu`, `penghasilanibu`, `judul`, `hp`) VALUES
	('4242342', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '08112408439'),
	('3343243667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0811842830'),
	('3343243668', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081213754585'),
	('3343243669', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081221680751'),
	('3343243610', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081222321222'),
	('33432436671', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081222801191'),
	('33432436672', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081223994934'),
	('33432433667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081311183834'),
	('33432443667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081318853080'),
	('33435243667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081321905484'),
	('33432643667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081322323429'),
	('33432743667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081322360665'),
	('33432438667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081322800873'),
	('33432439667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081323488881'),
	('334324113667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081326925551'),
	('334312243667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081388041918'),
	('334324133667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081510458428'),
	('334324143667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081553205361'),
	('334324153667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '08156000904'),
	('334324173667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '08158024204'),
	('334324316667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '08156245680'),
	('334324183667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '08179296234'),
	('334324193667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081802135245'),
	('334324213667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081802361761'),
	('334324366227', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081905431967'),
	('334324323667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081909434691'),
	('334324243667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081911131524'),
	('334324325667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '081912086694'),
	('334324263667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '082116611383'),
	('334324362767', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '082126767020'),
	('334324362867', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '082127378666'),
	('334324362967', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '082127707469'),
	('334323143667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cuti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '082315140047'),
	('334324323667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '082321239468'),
	('334324333667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085215786665'),
	('334324334667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085218325782'),
	('334324353667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085221155975'),
	('334324337667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085223541655'),
	('334324363667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085222600155'),
	('334324338667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085223632877'),
	('33432439667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085224970964'),
	('334324143667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085295172590'),
	('334324423667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085354020002'),
	('334324433667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '08561079557'),
	('334324443667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '08561313137'),
	('334324345667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '08562111986'),
	('334324346667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085624553242'),
	('334324347667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085691417273'),
	('334324348667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085711556125'),
	('334324493667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085722376686'),
	('334324350667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085723069826'),
	('334324352667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085777953577'),
	('334324351667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085768326690'),
	('334324533667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085778844650'),
	('334324354667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085780849363'),
	('334324553667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085793034217'),
	('334324673667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085885907799'),
	('334324365667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085798519450'),
	('334324683667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085920011097'),
	('334326943667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '085921492665'),
	('334324713667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '087722578913'),
	('334327243667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '087722870609'),
	('334324373667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '087773541746'),
	('334324374667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '087778986161'),
	('334324367567', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '087780462790'),
	('334324376667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '087824177867'),
	('334324377667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '087871183045'),
	('334324783667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '087871999497'),
	('334327943667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '087879644619'),
	('334324803667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '087884291785'),
	('334324813667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '089515323167'),
	('334328243667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '089516666513'),
	('334324833667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '089528773113'),
	('334324384667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '089639839899'),
	('334324853667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '089654024008'),
	('334324863667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '089691810731'),
	('334324873667', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '08976941193'),
	('334324368867', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '08982156318'),
	('334324389667777', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '08988853261'),
	('3343243896677778989', '2342', '2015-11-19', 'l', '2015.1Reg', 'Ekonomi', 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '08886841155'),
	('15101', '875785785', '2015-05-14', 'Reguler', '2016.1Reg', 'Ekonomi', ' Dandi', 'Sumedang', '2015-05-14', 'L', 'Islam', 'Sumedang', 'Aktif', 'SMU Summedang', '2015', 'PT. XXXX', '-', 'Dadang', 'Aktif', '-', '2015-05-14', 'S1', 'Wiraswasta', '2.000.000 - 3.000.000', '-', '2015-05-14', 'S1', 'Wiraswasta', '< 1.000.000', NULL, '081322205259');
/*!40000 ALTER TABLE `mhs` ENABLE KEYS */;


-- Dumping structure for table siakadplusplus.mkuliah
CREATE TABLE IF NOT EXISTS `mkuliah` (
  `kode` varchar(100) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `sks` int(100) NOT NULL,
  `sms` varchar(100) NOT NULL,
  `prodi` varchar(500) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table siakadplusplus.mkuliah: 3 rows
/*!40000 ALTER TABLE `mkuliah` DISABLE KEYS */;
INSERT INTO `mkuliah` (`kode`, `nama`, `sks`, `sms`, `prodi`, `ket`) VALUES
	('MKDU-0001', 'Pengantar Akuntansi 1', 3, '1', 'Ekonomi', 'Ganjil'),
	('MKDU-0003', 'Pengantara Bisnis', 3, '1', 'Ekonomi', 'Ganjil'),
	('MKDU-0004', 'Pengantar Manajemen', 3, '2', 'Ekonomi', 'Genap');
/*!40000 ALTER TABLE `mkuliah` ENABLE KEYS */;


-- Dumping structure for table siakadplusplus.muser
CREATE TABLE IF NOT EXISTS `muser` (
  `muser` varchar(100) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `tlp` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `datauser` int(10) NOT NULL,
  `gantipassword` int(10) NOT NULL,
  `matakuliah` int(10) NOT NULL,
  `programstudi` int(10) NOT NULL,
  `mahasiswa` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `dosen` int(10) NOT NULL,
  `inputkrs` int(10) NOT NULL,
  `cetakkrs` int(10) NOT NULL,
  `inputkhs` int(10) NOT NULL,
  `cetakkhs` int(10) NOT NULL,
  `lapmatakuliah` int(10) NOT NULL,
  `lapprogramstudi` int(10) NOT NULL,
  `lapmahasiswa` int(10) NOT NULL,
  `lapdosen` int(10) NOT NULL,
  `tahunpertama` int(10) NOT NULL,
  `persemester` int(10) NOT NULL,
  `persks` int(10) NOT NULL,
  `lainnya` int(10) NOT NULL,
  `pembayarantahunpertama` int(10) NOT NULL,
  `pembayaranpersemester` int(10) NOT NULL,
  `pembayaranpersks` int(10) NOT NULL,
  `pembayaranlainnya` int(10) NOT NULL,
  `laporantahunpertama` int(10) NOT NULL,
  `laporanpersemester` int(10) NOT NULL,
  `laporanpersks` int(10) NOT NULL,
  `laporanlainnya` int(10) NOT NULL,
  `masterakun` int(10) NOT NULL,
  `settingakun` int(10) NOT NULL,
  `jurnal` int(10) NOT NULL,
  `lapjurnal` int(10) NOT NULL,
  `lapbukubesar` int(10) NOT NULL,
  `lapneraca` int(10) NOT NULL,
  `laprugilaba` int(10) NOT NULL,
  `tutup` int(10) NOT NULL,
  `settingprinter1` int(10) NOT NULL,
  `conection` int(10) NOT NULL,
  `backup` int(10) NOT NULL,
  `restore` int(10) NOT NULL,
  `cashbox` int(10) NOT NULL,
  `pimpinan` int(10) NOT NULL,
  `karyawan` int(10) NOT NULL,
  `inventaris` int(10) NOT NULL,
  `cetakkartu` int(10) NOT NULL,
  `cetaknilai` int(10) NOT NULL,
  `lapkaryawan` int(10) NOT NULL,
  `lapinventaris` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table siakadplusplus.muser: 1 rows
/*!40000 ALTER TABLE `muser` DISABLE KEYS */;
INSERT INTO `muser` (`muser`, `nama`, `alamat`, `tlp`, `pass`, `datauser`, `gantipassword`, `matakuliah`, `programstudi`, `mahasiswa`, `status`, `dosen`, `inputkrs`, `cetakkrs`, `inputkhs`, `cetakkhs`, `lapmatakuliah`, `lapprogramstudi`, `lapmahasiswa`, `lapdosen`, `tahunpertama`, `persemester`, `persks`, `lainnya`, `pembayarantahunpertama`, `pembayaranpersemester`, `pembayaranpersks`, `pembayaranlainnya`, `laporantahunpertama`, `laporanpersemester`, `laporanpersks`, `laporanlainnya`, `masterakun`, `settingakun`, `jurnal`, `lapjurnal`, `lapbukubesar`, `lapneraca`, `laprugilaba`, `tutup`, `settingprinter1`, `conection`, `backup`, `restore`, `cashbox`, `pimpinan`, `karyawan`, `inventaris`, `cetakkartu`, `cetaknilai`, `lapkaryawan`, `lapinventaris`) VALUES
	('Admin', 'Cecep', 'GSI', '0888', 'ÃæïëðÃæïëð', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);
/*!40000 ALTER TABLE `muser` ENABLE KEYS */;


-- Dumping structure for table siakadplusplus.pimpinan
CREATE TABLE IF NOT EXISTS `pimpinan` (
  `ketua` varchar(500) NOT NULL,
  `pk1` varchar(500) NOT NULL,
  `pk2` varchar(500) NOT NULL,
  `pk3` varchar(500) NOT NULL,
  KEY `ketua` (`ketua`),
  KEY `pk1` (`pk1`),
  KEY `pk2` (`pk2`),
  KEY `pk3` (`pk3`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table siakadplusplus.pimpinan: 1 rows
/*!40000 ALTER TABLE `pimpinan` DISABLE KEYS */;
INSERT INTO `pimpinan` (`ketua`, `pk1`, `pk2`, `pk3`) VALUES
	('Prof. Dr. Yedi Lukman, SE.Ak, MM', 'Dr. Lukman Nurlatif, SE, MM', 'Dr. Soleh Selamanya, SE, MM', 'Dr. Mulya Maulalatif, SE, MM');
/*!40000 ALTER TABLE `pimpinan` ENABLE KEYS */;


-- Dumping structure for table siakadplusplus.prodi
CREATE TABLE IF NOT EXISTS `prodi` (
  `kode` varchar(100) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `ketua` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table siakadplusplus.prodi: 1 rows
/*!40000 ALTER TABLE `prodi` DISABLE KEYS */;
INSERT INTO `prodi` (`kode`, `nama`, `ketua`) VALUES
	('324324', 'Ekonomi', 'cecep');
/*!40000 ALTER TABLE `prodi` ENABLE KEYS */;


-- Dumping structure for table siakadplusplus.sementarabiayasemester
CREATE TABLE IF NOT EXISTS `sementarabiayasemester` (
  `nama` varchar(500) NOT NULL,
  `biaya` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table siakadplusplus.sementarabiayasemester: 0 rows
/*!40000 ALTER TABLE `sementarabiayasemester` DISABLE KEYS */;
/*!40000 ALTER TABLE `sementarabiayasemester` ENABLE KEYS */;


-- Dumping structure for table siakadplusplus.sementarabiayathpertama
CREATE TABLE IF NOT EXISTS `sementarabiayathpertama` (
  `nama` varchar(500) NOT NULL,
  `biaya` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table siakadplusplus.sementarabiayathpertama: 0 rows
/*!40000 ALTER TABLE `sementarabiayathpertama` DISABLE KEYS */;
/*!40000 ALTER TABLE `sementarabiayathpertama` ENABLE KEYS */;


-- Dumping structure for table siakadplusplus.sementarajurnal
CREATE TABLE IF NOT EXISTS `sementarajurnal` (
  `kodeakun` varchar(100) NOT NULL,
  `akun` varchar(100) NOT NULL,
  `ket` varchar(500) NOT NULL,
  `debet` int(100) NOT NULL,
  `kredit` int(100) NOT NULL,
  `jenis` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table siakadplusplus.sementarajurnal: 0 rows
/*!40000 ALTER TABLE `sementarajurnal` DISABLE KEYS */;
/*!40000 ALTER TABLE `sementarajurnal` ENABLE KEYS */;


-- Dumping structure for table siakadplusplus.send
CREATE TABLE IF NOT EXISTS `send` (
  `tujuan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(100) NOT NULL,
  `isi` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table siakadplusplus.send: 0 rows
/*!40000 ALTER TABLE `send` DISABLE KEYS */;
/*!40000 ALTER TABLE `send` ENABLE KEYS */;


-- Dumping structure for table siakadplusplus.settingakun
CREATE TABLE IF NOT EXISTS `settingakun` (
  `kas` int(100) NOT NULL,
  `semester` int(100) NOT NULL,
  `tahunlalu` int(100) NOT NULL,
  `tahunberjalan` int(100) NOT NULL,
  `bulanberjalan` int(100) NOT NULL,
  `pertama` int(100) NOT NULL,
  `sks` int(100) NOT NULL,
  `lain` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table siakadplusplus.settingakun: 1 rows
/*!40000 ALTER TABLE `settingakun` DISABLE KEYS */;
INSERT INTO `settingakun` (`kas`, `semester`, `tahunlalu`, `tahunberjalan`, `bulanberjalan`, `pertama`, `sks`, `lain`) VALUES
	(1010001, 4010001, 3020001, 3020002, 3020003, 4010002, 4010003, 4010004);
/*!40000 ALTER TABLE `settingakun` ENABLE KEYS */;


-- Dumping structure for table siakadplusplus.status
CREATE TABLE IF NOT EXISTS `status` (
  `nim` varchar(100) NOT NULL,
  `statusk` varchar(100) NOT NULL,
  `sms` varchar(100) NOT NULL,
  `TA` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `ket` varchar(500) NOT NULL,
  `muser` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table siakadplusplus.status: 2 rows
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` (`nim`, `statusk`, `sms`, `TA`, `tgl`, `ket`, `muser`) VALUES
	('15101', 'Aktif', '1', '-', '2015-05-14', 'Mahasiswa Baru', 'Admin'),
	('334323143667', 'Cuti', '4', '2015/2016', '2015-05-14', 'Menikah', 'Admin');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;


-- Dumping structure for table siakadplusplus.tgl
CREATE TABLE IF NOT EXISTS `tgl` (
  `tgl` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table siakadplusplus.tgl: 1 rows
/*!40000 ALTER TABLE `tgl` DISABLE KEYS */;
INSERT INTO `tgl` (`tgl`) VALUES
	('2015-05-14');
/*!40000 ALTER TABLE `tgl` ENABLE KEYS */;


-- Dumping structure for table siakadplusplus.thnakademik
CREATE TABLE IF NOT EXISTS `thnakademik` (
  `thnakademik` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table siakadplusplus.thnakademik: 2 rows
/*!40000 ALTER TABLE `thnakademik` DISABLE KEYS */;
INSERT INTO `thnakademik` (`thnakademik`) VALUES
	('2015/2016'),
	('2016/2017');
/*!40000 ALTER TABLE `thnakademik` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
