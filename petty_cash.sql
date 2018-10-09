/*
SQLyog Enterprise - MySQL GUI v7.14 
MySQL - 5.6.25 : Database - petty_cash
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`petty_cash` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `petty_cash`;

/*Table structure for table `filenota` */

DROP TABLE IF EXISTS `filenota`;

CREATE TABLE `filenota` (
  `idfile` int(11) NOT NULL AUTO_INCREMENT,
  `nopengeluaran` varchar(20) DEFAULT NULL,
  `ket` text,
  `namafile` text,
  PRIMARY KEY (`idfile`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `filenota` */

/*Table structure for table `jenispengeluaran` */

DROP TABLE IF EXISTS `jenispengeluaran`;

CREATE TABLE `jenispengeluaran` (
  `idjenis` varchar(6) NOT NULL,
  `namajenis` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`idjenis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `jenispengeluaran` */

insert  into `jenispengeluaran`(`idjenis`,`namajenis`) values ('J001','Dinas Perjalanan'),('J002','Rumah Tangga'),('J003','ATK'),('J004','Bea Bank'),('J005','Biaya Pos'),('J006','Biaya Sampah'),('J007','Biaya Air Bersih'),('J008','Iuran Jaga Malam'),('J009','Biaya Koran'),('J010','Biaya Parkir');

/*Table structure for table `kas` */

DROP TABLE IF EXISTS `kas`;

CREATE TABLE `kas` (
  `idkas` int(11) NOT NULL AUTO_INCREMENT,
  `idunit` varchar(5) DEFAULT NULL,
  `idjenis` varchar(5) DEFAULT NULL,
  `nopengisian` varchar(30) DEFAULT NULL,
  `nopengeluaran` varchar(30) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jmasuk` double DEFAULT '0',
  `jkeluar` double DEFAULT '0',
  `sisa` double DEFAULT '0',
  `status` enum('0','1','2') DEFAULT NULL COMMENT '0=closed 1=open 2=pengeluaran',
  `statushapus` enum('0','1') DEFAULT '1' COMMENT '0=delete 1=normal',
  `statusisi` enum('0','1') DEFAULT NULL COMMENT '0=pengisian 1=pengeluaran',
  `deleteby` varchar(30) DEFAULT NULL,
  `file1` text,
  `file2` text,
  `verifikasiby` varchar(30) DEFAULT NULL,
  `keterangan` text,
  `dimintaoleh` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`idkas`),
  KEY `FK_kas` (`idjenis`),
  KEY `FK_kas1` (`idunit`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

/*Data for the table `kas` */

insert  into `kas`(`idkas`,`idunit`,`idjenis`,`nopengisian`,`nopengeluaran`,`tanggal`,`jmasuk`,`jkeluar`,`sisa`,`status`,`statushapus`,`statusisi`,`deleteby`,`file1`,`file2`,`verifikasiby`,`keterangan`,`dimintaoleh`) values (5,NULL,NULL,'ISI-10201800001',NULL,'2018-10-26',200,0,0,'1','1','0',NULL,'file1ISI-102018000011.jpg','file1ISI-1020180000111.jpg','ega',NULL,NULL),(16,'U001','J001','ISI-10201800001','KLR-10201800001','2018-10-05',0,10,0,'2','1','1',NULL,NULL,NULL,'a','a','1'),(17,'U001','J002','ISI-10201800001','KLR-10201800001','2018-10-05',0,10,0,'2','1','1',NULL,NULL,NULL,'a','b','1'),(18,'U001','J003','ISI-10201800001','KLR-10201800001','2018-10-05',0,10,0,'2','1','1',NULL,NULL,NULL,'a','c','1'),(19,'U001','J004','ISI-10201800001','KLR-10201800001','2018-10-05',0,10,0,'2','1','1',NULL,NULL,NULL,'a','d','1'),(20,'U001','J005','ISI-10201800001','KLR-10201800001','2018-10-05',0,10,0,'2','1','1',NULL,NULL,NULL,'a','e','1'),(21,'U001','J006','ISI-10201800001','KLR-10201800001','2018-10-05',0,10,0,'2','1','1',NULL,NULL,NULL,'a','f','1'),(22,'U001','J007','ISI-10201800001','KLR-10201800001','2018-10-05',0,10,0,'2','1','1',NULL,NULL,NULL,'a','g','1'),(23,'U001','J008','ISI-10201800001','KLR-10201800001','2018-10-05',0,10,0,'2','1','1',NULL,NULL,NULL,'a','h','1'),(24,'U001','J009','ISI-10201800001','KLR-10201800001','2018-10-05',0,10,0,'2','1','1',NULL,NULL,NULL,'a','i','1'),(25,'U001','J010','ISI-10201800001','KLR-10201800001','2018-10-05',0,10,0,'2','1','1',NULL,NULL,NULL,'a','j','1'),(26,'U002','J001','ISI-10201800001','KLR-10201800002','2018-10-06',0,10,0,'2','1','1',NULL,NULL,NULL,'as','1','aa'),(27,'U002','J002','ISI-10201800001','KLR-10201800002','2018-10-06',0,10,0,'2','1','1',NULL,NULL,NULL,'as','2','aa'),(28,'U002','J003','ISI-10201800001','KLR-10201800002','2018-10-06',0,10,0,'2','1','1',NULL,NULL,NULL,'as','3','aa'),(29,'U002','J004','ISI-10201800001','KLR-10201800002','2018-10-06',0,10,0,'2','1','1',NULL,NULL,NULL,'as','4','aa'),(30,'U002','J005','ISI-10201800001','KLR-10201800002','2018-10-06',0,10,0,'2','1','1',NULL,NULL,NULL,'as','5','aa'),(31,'U002','J006','ISI-10201800001','KLR-10201800002','2018-10-06',0,10,0,'2','1','1',NULL,NULL,NULL,'as','6','aa'),(32,'U002','J007','ISI-10201800001','KLR-10201800002','2018-10-06',0,10,0,'2','1','1',NULL,NULL,NULL,'as','7','aa'),(33,'U002','J008','ISI-10201800001','KLR-10201800002','2018-10-06',0,10,0,'2','1','1',NULL,NULL,NULL,'as','8','aa'),(34,'U002','J009','ISI-10201800001','KLR-10201800002','2018-10-06',0,10,0,'2','1','1',NULL,NULL,NULL,'as','9','aa'),(35,'U002','J010','ISI-10201800001','KLR-10201800002','2018-10-06',0,10,0,'2','1','1',NULL,NULL,NULL,'as','10','aa');

/*Table structure for table `pengeluarantemp` */

DROP TABLE IF EXISTS `pengeluarantemp`;

CREATE TABLE `pengeluarantemp` (
  `idtemp` int(11) NOT NULL AUTO_INCREMENT,
  `idjenis` varchar(6) DEFAULT NULL,
  `keterangan` text,
  `jumlah` double DEFAULT NULL,
  `user` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idtemp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pengeluarantemp` */

/*Table structure for table `unit` */

DROP TABLE IF EXISTS `unit`;

CREATE TABLE `unit` (
  `idunit` varchar(6) NOT NULL,
  `namaunit` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idunit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `unit` */

insert  into `unit`(`idunit`,`namaunit`) values ('U001','Kasir'),('U002','Marketing'),('U003','bos');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userNama` varchar(30) DEFAULT NULL,
  `userPassword` varchar(150) DEFAULT NULL,
  `userHakakses` enum('Admin','Pimpinan') DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`userId`,`userNama`,`userPassword`,`userHakakses`) values (1,'Pimpinan','Pimpinan','Pimpinan'),(3,'Admin','Admin','Admin');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
