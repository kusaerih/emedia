/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 10.1.19-MariaDB : Database - cilog
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`cilog` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `cilog`;

/*Table structure for table `bazarr` */

DROP TABLE IF EXISTS `bazarr`;

CREATE TABLE `bazarr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengumuman` varchar(128) DEFAULT NULL,
  `nama_kegiatan` varchar(128) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `datee` date DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `tempat_kegiatan` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `bazarr` */

insert  into `bazarr`(`id`,`nama_pengumuman`,`nama_kegiatan`,`date`,`datee`,`jam_mulai`,`jam_selesai`,`tempat_kegiatan`) values (1,'Kegiatan Bazar','bazar buku','2017-11-02','2018-01-16','11:00:00','02:20:00','lapangan z');

/*Table structure for table `berita_dukaa` */

DROP TABLE IF EXISTS `berita_dukaa`;

CREATE TABLE `berita_dukaa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengumuman` varchar(128) DEFAULT NULL,
  `nama_pegawai` varchar(128) DEFAULT NULL,
  `nip` varchar(18) DEFAULT NULL,
  `jabatan` varchar(128) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `berita_dukaa` */

insert  into `berita_dukaa`(`id`,`nama_pengumuman`,`nama_pegawai`,`nip`,`jabatan`,`foto`,`keterangan`) values (1,'Berita Duka lg','nama pegawai a','123456789111111111','eselon II','aaaaaaaaaaaaaaaaaa1.jpg','Meninggal'),(2,'Berita Duka','a','111111111111232443','b','Koala1.jpg','vz');

/*Table structure for table `berita_upacaraa` */

DROP TABLE IF EXISTS `berita_upacaraa`;

CREATE TABLE `berita_upacaraa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengumuman` varchar(128) DEFAULT NULL,
  `nama_kegiatan` varchar(128) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `datee` date DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `tempat_kegiatan` varchar(128) DEFAULT NULL,
  `dress_code` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `berita_upacaraa` */

insert  into `berita_upacaraa`(`id`,`nama_pengumuman`,`nama_kegiatan`,`date`,`datee`,`jam_mulai`,`jam_selesai`,`tempat_kegiatan`,`dress_code`) values (1,'Kegiatan Upacara','upacara hari pahlawan','2018-02-05','2018-02-05','08:00:00','09:30:00','Lapangan BKN','baju dinas'),(2,'Kegiatan Upacara','upcara kesaktian pancasila','2018-01-22','2018-01-22','08:00:00','09:00:00','lapangan z','baju hitam putih'),(3,'Kegiatan Upacara','upacara bulanan','2018-02-12','2018-02-12','08:00:00','10:00:00','lapngan','baju dinas');

/*Table structure for table `berita_utamaa` */

DROP TABLE IF EXISTS `berita_utamaa`;

CREATE TABLE `berita_utamaa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kegiatan` varchar(128) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `datee` date DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `tempat_kegiatan` varchar(128) DEFAULT NULL,
  `pic` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

/*Data for the table `berita_utamaa` */

insert  into `berita_utamaa`(`id`,`nama_kegiatan`,`date`,`datee`,`jam_mulai`,`jam_selesai`,`tempat_kegiatan`,`pic`) values (31,'Peyembelihan hewan kurban sapi','2018-01-24','2018-02-08','08:30:00','10:00:00','Halaman Parkir BKN','Lugi Juwono a'),(35,'penerimaan pegawai bps','2018-01-29','2018-02-14','08:40:00','10:00:00','Aula lantai 5','Didi'),(36,'Presentasi','2017-12-08','2018-01-30','09:00:00','10:00:00','Ruang Ketua Biro Humas','Lugi Juwono'),(37,'Rapat Umum','2017-12-11',NULL,'09:00:00','11:00:00','Ruang Controll Lantai 2','Lugi Juwono'),(38,'Peresmian Unit Baru','2017-12-12',NULL,'13:00:00','14:00:00','Ruang Rapat 2','Didi'),(39,'Presentasi a','2017-12-11',NULL,'08:00:00','10:00:00','Ruang Controll Room Lantai 2','Kiki'),(40,'Rapat Dinas','2017-12-12',NULL,'09:00:00','11:00:00','Ruang Rapat ','Dini'),(41,'Rapat Kepegawaian','2017-12-13',NULL,'09:00:00','10:00:00','Ruangan 1','Koko'),(42,'rapat 2','2017-12-14',NULL,'01:00:00','02:00:00','Ruang rapat 3','fafa'),(44,'aaaaaaaaa','2017-12-18',NULL,'08:00:00','11:00:00','bbbbbbbb','qqqqqqqq'),(45,'a','2018-01-16','2018-01-16','09:00:00','12:00:00','a','a'),(46,' world world','2018-01-10','2018-01-16','08:00:00','12:00:00','lapngan parkir','Lugi Juwono'),(47,'a','2018-01-15','2018-01-16','08:00:00','11:00:00','a','a'),(48,'coba','2018-01-16','2018-01-16','07:00:00','11:01:00','a','a'),(49,'Upacara Bulanan','2018-02-12','2018-02-12','08:00:00','09:59:00','lapngan','Lugi Juwono'),(50,'aaaa','2018-08-30','2018-08-31','06:00:00','02:05:00','aasa','asasa'),(51,'asasa','2018-08-31','2018-09-01','08:59:00','09:30:00','asasas','asasasa');

/*Table structure for table `dress_codee` */

DROP TABLE IF EXISTS `dress_codee`;

CREATE TABLE `dress_codee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengumuman` varchar(128) DEFAULT NULL,
  `nama_kegiatan` varchar(128) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `tempat_kegiatan` varchar(128) DEFAULT NULL,
  `dress_code` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `dress_codee` */

insert  into `dress_codee`(`id`,`nama_pengumuman`,`nama_kegiatan`,`date`,`jam_mulai`,`jam_selesai`,`tempat_kegiatan`,`dress_code`) values (1,'Dress Code','kkkkk','2017-10-30','11:00:00','11:00:00','lapangan','mmmmmmmmmmmmmm'),(2,'Dress Code','kkkkk','2017-10-30','11:00:00','11:00:00','lapangan','mmmmmmmmmmmmmm'),(3,'Dress Code','kkkkk','2017-10-30','11:00:00','11:00:00','lapangan','batik');

/*Table structure for table `foto_kegiatann` */

DROP TABLE IF EXISTS `foto_kegiatann`;

CREATE TABLE `foto_kegiatann` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kegiatan` varchar(128) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `foto_kegiatann` */

insert  into `foto_kegiatann`(`id`,`nama_kegiatan`,`foto`,`keterangan`) values (10,'nama foto 1','des2.jpg','foto 1'),(11,'nama foto 2','des1.jpg','foto 2'),(12,'router router 3','pic3.jpg','foto 3'),(13,' world world 4','7.jpg','foto 4'),(14,'komputer komputer','17.jpg','foto 5'),(15,'coba coba coba','balaikota2.jpg','foto 6');

/*Table structure for table `jadwal_kegiatann` */

DROP TABLE IF EXISTS `jadwal_kegiatann`;

CREATE TABLE `jadwal_kegiatann` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kegiatan` varchar(128) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `tempat_kegiatan` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `jadwal_kegiatann` */

insert  into `jadwal_kegiatann`(`id`,`nama_kegiatan`,`tanggal`,`tempat_kegiatan`) values (1,'nama kegiatan','2017-08-19','gpgpgpgpgpgppgpgpg'),(2,'kegiatan b','2017-08-20','tempat c');

/*Table structure for table `live_streamingg` */

DROP TABLE IF EXISTS `live_streamingg`;

CREATE TABLE `live_streamingg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `live_streamingg` */

insert  into `live_streamingg`(`id`,`ip`) values (1,'http://192.168.190.40:8080/browserfs.html');

/*Table structure for table `pegawai_terbaikk` */

DROP TABLE IF EXISTS `pegawai_terbaikk`;

CREATE TABLE `pegawai_terbaikk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengumuman` varchar(128) DEFAULT NULL,
  `nama_pegawai` varchar(128) DEFAULT NULL,
  `nip` varchar(18) DEFAULT NULL,
  `jabatan` varchar(128) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `pegawai_terbaikk` */

insert  into `pegawai_terbaikk`(`id`,`nama_pengumuman`,`nama_pegawai`,`nip`,`jabatan`,`foto`,`keterangan`) values (7,'Pegawai Terbaik','Bima Haria Wibisana','123456789112345667','Kepala BKN','kepala_BKN_baru.jpg','abc');

/*Table structure for table `pengajiann` */

DROP TABLE IF EXISTS `pengajiann`;

CREATE TABLE `pengajiann` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengumuman` varchar(128) DEFAULT NULL,
  `nama_kegiatan` varchar(128) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `datee` date DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `tempat_kegiatan` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `pengajiann` */

insert  into `pengajiann`(`id`,`nama_pengumuman`,`nama_kegiatan`,`date`,`datee`,`jam_mulai`,`jam_selesai`,`tempat_kegiatan`) values (6,'Kegiatan Pengajian','pengajian harian','2017-11-30','2018-01-30','11:57:00','11:55:00','Masjid BKN'),(8,'Kegiatan Pengajian','pengajian harian','2017-12-19',NULL,'13:05:00','14:00:00','asasasasa'),(9,'Kegiatan Pengajian','pengajian harian','2017-11-22','2018-01-24','11:57:00','11:55:00','Masjid BKN kanreg 2');

/*Table structure for table `senamm` */

DROP TABLE IF EXISTS `senamm`;

CREATE TABLE `senamm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengumuman` varchar(128) DEFAULT NULL,
  `nama_kegiatan` varchar(128) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `datee` date DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `tempat_kegiatan` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `senamm` */

insert  into `senamm`(`id`,`nama_pengumuman`,`nama_kegiatan`,`date`,`datee`,`jam_mulai`,`jam_selesai`,`tempat_kegiatan`) values (4,'Kegiatan Senam','senam pagi hari c','2017-12-22','2018-01-31','11:00:00','01:00:00','lapngan parkir z'),(6,'Kegiatan Senam','senam pagi hari','2017-12-22',NULL,'11:59:00','12:01:00','lapangan z'),(7,'Kegiatan Senam','senam pagi hari a','2017-12-22',NULL,'08:01:00','10:00:00','lapngan parkir b');

/*Table structure for table `tb_pengguna` */

DROP TABLE IF EXISTS `tb_pengguna`;

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(10) NOT NULL AUTO_INCREMENT,
  `nama_pengguna` varchar(35) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pengguna`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tb_pengguna` */

insert  into `tb_pengguna`(`id_pengguna`,`nama_pengguna`,`username`,`password`) values (1,'Admin','admin','21232f297a57a5a743894a0e4a801fc3');

/*Table structure for table `video_kegiatann` */

DROP TABLE IF EXISTS `video_kegiatann`;

CREATE TABLE `video_kegiatann` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_video` varchar(128) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `video_kegiatann` */

insert  into `video_kegiatann`(`id`,`nama_video`,`video`,`keterangan`) values (8,'a','WhatsApp_Video_2017-12-29_at_00_19_271.mp4','a');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
