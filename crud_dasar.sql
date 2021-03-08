-- --------------------------------------------------------
-- Host:                         localhost
-- Versi server:                 5.7.24-log - MySQL Community Server (GPL)
-- OS Server:                    Win64
-- HeidiSQL Versi:               10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Membuang struktur basisdata untuk crud_dasar
CREATE DATABASE IF NOT EXISTS `crud_dasar` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `crud_dasar`;

-- membuang struktur untuk table crud_dasar.mahasiswa
CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL DEFAULT '',
  `nim` varchar(50) NOT NULL DEFAULT '',
  `kelamin` enum('Laki-Laki','Perempuan') NOT NULL DEFAULT 'Laki-Laki',
  `fakultas` varchar(50) NOT NULL DEFAULT '0',
  `jurusan` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel crud_dasar.mahasiswa: ~7 rows (lebih kurang)
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
REPLACE INTO `mahasiswa` (`id`, `nama`, `nim`, `kelamin`, `fakultas`, `jurusan`) VALUES
	(13, 'Fany Parama Admaja', '18650063', 'Laki-Laki', 'Saintek', 'Teknk Informatika'),
	(14, 'Maren Helvia Devi', '18650036', 'Perempuan', 'Saintek', 'Teknik Informatika'),
	(16, 'Asfilia Nova', '18650040', 'Perempuan', 'Saintek', 'Teknik Inormatika'),
	(17, 'Cika Nurqueen Paradis', '18650039', 'Perempuan', 'Saintek', 'Teknik Informatika'),
	(18, 'Seta Murdha', '18650043', 'Laki-Laki', 'Saintek', 'Teknik Informatika');
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
