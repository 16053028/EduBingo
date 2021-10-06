-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2021 at 09:13 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bingoapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bingo_card`
--

CREATE TABLE `tbl_bingo_card` (
  `ID_BINGO_CARD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_game`
--

CREATE TABLE `tbl_game` (
  `ID_GAME` int(11) NOT NULL,
  `PEMENANG_GAME` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_game_temp`
--

CREATE TABLE `tbl_game_temp` (
  `ID_GAME_TEMP` int(11) NOT NULL,
  `ID_GAME` int(11) DEFAULT NULL,
  `ID_BINGO_CARD` int(11) DEFAULT NULL,
  `ID_PLAYER` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_instansi_pendidikan`
--

CREATE TABLE `tbl_instansi_pendidikan` (
  `ID_INSTANSI_PENDIDIKAN` int(11) NOT NULL,
  `ID_STATUS_INSTANSI` int(11) DEFAULT NULL,
  `NAMA_INSTANSI_PENDIDIKAN` varchar(50) DEFAULT NULL,
  `ALAMAT_INSTANSI_PENDIDIKAN` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_instansi_pendidikan`
--

INSERT INTO `tbl_instansi_pendidikan` (`ID_INSTANSI_PENDIDIKAN`, `ID_STATUS_INSTANSI`, `NAMA_INSTANSI_PENDIDIKAN`, `ALAMAT_INSTANSI_PENDIDIKAN`) VALUES
(1, 1, 'Universitas Wijaya Putra Kampus wiyung', 'Jl. Menganti 133, Wiyung, Surabaya');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `ID_KELAS` int(11) NOT NULL,
  `TEKS_KELAS` varchar(20) DEFAULT NULL,
  `KETERANGAN_KELAS` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `ID_TBL_LOGIN` int(11) NOT NULL,
  `USERNAME_LOGIN` varchar(8) DEFAULT NULL,
  `PASSWORD_LOGIN` varchar(255) DEFAULT NULL,
  `LAST_LOGIN` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `IS_ACTIVE` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`ID_TBL_LOGIN`, `USERNAME_LOGIN`, `PASSWORD_LOGIN`, `LAST_LOGIN`, `IS_ACTIVE`) VALUES
(1, 'admin', 'c4ca4238a0b923820dcc509a6f75849b', '2021-10-06 03:05:05', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `ID_MAHASISWA` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `ID_USER_DETAILS` int(11) NOT NULL,
  `ID_TBL_LOGIN` int(11) NOT NULL,
  `ID_INSTANSI_PENDIDIKAN` int(11) NOT NULL,
  `ID_TBL_SEMESTER` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mapel`
--

CREATE TABLE `tbl_mapel` (
  `ID_MAPEL` int(11) NOT NULL,
  `ID_KELAS` int(11) DEFAULT NULL,
  `TEKS_MAPEL` varchar(20) DEFAULT NULL,
  `KETERANGAN_MAPEL` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_matkul`
--

CREATE TABLE `tbl_matkul` (
  `ID_MATKUL` int(11) NOT NULL,
  `ID_TBL_SEMESTER` int(11) DEFAULT NULL,
  `TEKS_MATKUL` varchar(20) DEFAULT NULL,
  `KETERANGAN_MATKUL` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pilgan_soal`
--

CREATE TABLE `tbl_pilgan_soal` (
  `ID_PILGAN_SOAL` int(11) NOT NULL,
  `ID_SOAL` int(11) DEFAULT NULL,
  `TEKS_PILGAN` longtext DEFAULT NULL,
  `IS_KEY` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_player`
--

CREATE TABLE `tbl_player` (
  `ID_PLAYER` int(11) NOT NULL,
  `ID_MAHASISWA` int(11) DEFAULT NULL,
  `TBL_ID_MAHASISWA` int(11) DEFAULT NULL,
  `ID_USER` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_semester`
--

CREATE TABLE `tbl_semester` (
  `ID_TBL_SEMESTER` int(11) NOT NULL,
  `TEKS_SEMESTER` varchar(10) DEFAULT NULL,
  `KETERANGAN_SEMESTER` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `ID_SISWA` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `ID_USER_DETAILS` int(11) NOT NULL,
  `ID_TBL_LOGIN` int(11) NOT NULL,
  `ID_INSTANSI_PENDIDIKAN` int(11) NOT NULL,
  `ID_KELAS` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_soal`
--

CREATE TABLE `tbl_soal` (
  `ID_SOAL` int(11) NOT NULL,
  `ID_SOAL_MAPEL` int(11) DEFAULT NULL,
  `ID_SOAL_MATKUL` int(11) DEFAULT NULL,
  `TEXT_SOAL` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_soal_mapel`
--

CREATE TABLE `tbl_soal_mapel` (
  `ID_SOAL_MAPEL` int(11) NOT NULL,
  `ID_MAPEL` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_soal_matkul`
--

CREATE TABLE `tbl_soal_matkul` (
  `ID_SOAL_MATKUL` int(11) NOT NULL,
  `ID_MATKUL` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status_instansi`
--

CREATE TABLE `tbl_status_instansi` (
  `ID_STATUS_INSTANSI` int(11) NOT NULL,
  `TEKS_STATUS_INSTANSI` varchar(20) DEFAULT NULL,
  `KETERANGAN_STATUS_INSTANSI` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_status_instansi`
--

INSERT INTO `tbl_status_instansi` (`ID_STATUS_INSTANSI`, `TEKS_STATUS_INSTANSI`, `KETERANGAN_STATUS_INSTANSI`) VALUES
(1, 'Universitas', 'Perguruan tinggi baik swasta maupun negeri'),
(2, 'SD / MI', 'Sekolah Dasar atau Madrasah Ibtidaiyah baik negeri maupun swasta');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status_user`
--

CREATE TABLE `tbl_status_user` (
  `ID_STATUS_USER` int(11) NOT NULL,
  `TEKS_STATUS_USER` varchar(50) DEFAULT NULL,
  `KETRANGAN__STATUS_USER` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_status_user`
--

INSERT INTO `tbl_status_user` (`ID_STATUS_USER`, `TEKS_STATUS_USER`, `KETRANGAN__STATUS_USER`) VALUES
(1, 'Administrator', 'Super User'),
(2, 'Operator', 'Operator Web Application');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_temp_bingo_card`
--

CREATE TABLE `tbl_temp_bingo_card` (
  `ID_TEMP_BINGO_CARD` int(11) NOT NULL,
  `ID_BINGO_CARD` int(11) DEFAULT NULL,
  `ID_SOAL` int(11) DEFAULT NULL,
  `IS_TRUE_` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `ID_USER` int(11) NOT NULL,
  `ID_USER_DETAILS` int(11) DEFAULT NULL,
  `ID_TBL_LOGIN` int(11) DEFAULT NULL,
  `ID_INSTANSI_PENDIDIKAN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`ID_USER`, `ID_USER_DETAILS`, `ID_TBL_LOGIN`, `ID_INSTANSI_PENDIDIKAN`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_details`
--

CREATE TABLE `tbl_user_details` (
  `ID_USER_DETAILS` int(11) NOT NULL,
  `ID_STATUS_USER` int(11) DEFAULT NULL,
  `NAMA_USER` varchar(30) DEFAULT NULL,
  `ALAMAT_USER` varchar(255) DEFAULT NULL,
  `JK_USER` int(11) DEFAULT NULL,
  `TELP_USER` varchar(13) DEFAULT NULL,
  `EMAIL_USER` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user_details`
--

INSERT INTO `tbl_user_details` (`ID_USER_DETAILS`, `ID_STATUS_USER`, `NAMA_USER`, `ALAMAT_USER`, `JK_USER`, `TELP_USER`, `EMAIL_USER`) VALUES
(1, 1, 'Administrator', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bingo_card`
--
ALTER TABLE `tbl_bingo_card`
  ADD PRIMARY KEY (`ID_BINGO_CARD`);

--
-- Indexes for table `tbl_game`
--
ALTER TABLE `tbl_game`
  ADD PRIMARY KEY (`ID_GAME`);

--
-- Indexes for table `tbl_game_temp`
--
ALTER TABLE `tbl_game_temp`
  ADD PRIMARY KEY (`ID_GAME_TEMP`),
  ADD KEY `FK_ASSIGN_CARD_TO_GAME` (`ID_BINGO_CARD`),
  ADD KEY `FK_ASSIGN_GAME_DATA` (`ID_GAME`),
  ADD KEY `FK_ASSIGN_PLAYER_TO_GAME` (`ID_PLAYER`);

--
-- Indexes for table `tbl_instansi_pendidikan`
--
ALTER TABLE `tbl_instansi_pendidikan`
  ADD PRIMARY KEY (`ID_INSTANSI_PENDIDIKAN`),
  ADD KEY `FK_STATUS_INSTANSI` (`ID_STATUS_INSTANSI`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`ID_KELAS`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`ID_TBL_LOGIN`);

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`ID_MAHASISWA`),
  ADD KEY `FK_INHERITANCE_USER` (`ID_USER`),
  ADD KEY `FK_SEMESTER_MAHASISWA` (`ID_TBL_SEMESTER`);

--
-- Indexes for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  ADD PRIMARY KEY (`ID_MAPEL`),
  ADD KEY `FK_MAPEL_KELAS` (`ID_KELAS`);

--
-- Indexes for table `tbl_matkul`
--
ALTER TABLE `tbl_matkul`
  ADD PRIMARY KEY (`ID_MATKUL`),
  ADD KEY `FK_SEMESTER_MATKUL` (`ID_TBL_SEMESTER`);

--
-- Indexes for table `tbl_pilgan_soal`
--
ALTER TABLE `tbl_pilgan_soal`
  ADD PRIMARY KEY (`ID_PILGAN_SOAL`),
  ADD KEY `FK_PILGAN_SOAL` (`ID_SOAL`);

--
-- Indexes for table `tbl_player`
--
ALTER TABLE `tbl_player`
  ADD PRIMARY KEY (`ID_PLAYER`),
  ADD KEY `FK_ASSIGN_USER_TO_PLAYER` (`ID_USER`);

--
-- Indexes for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  ADD PRIMARY KEY (`ID_TBL_SEMESTER`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`ID_SISWA`),
  ADD KEY `FK_INHERITANCE_USER2` (`ID_USER`),
  ADD KEY `FK_KELAS_SISWA` (`ID_KELAS`);

--
-- Indexes for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
  ADD PRIMARY KEY (`ID_SOAL`),
  ADD KEY `FK_SOAL_MAPEL` (`ID_SOAL_MAPEL`),
  ADD KEY `FK_SOAL_MATKUL` (`ID_SOAL_MATKUL`);

--
-- Indexes for table `tbl_soal_mapel`
--
ALTER TABLE `tbl_soal_mapel`
  ADD PRIMARY KEY (`ID_SOAL_MAPEL`),
  ADD KEY `FK_MAPEL_SOAL` (`ID_MAPEL`);

--
-- Indexes for table `tbl_soal_matkul`
--
ALTER TABLE `tbl_soal_matkul`
  ADD PRIMARY KEY (`ID_SOAL_MATKUL`),
  ADD KEY `FK_MATKUL_SOAL` (`ID_MATKUL`);

--
-- Indexes for table `tbl_status_instansi`
--
ALTER TABLE `tbl_status_instansi`
  ADD PRIMARY KEY (`ID_STATUS_INSTANSI`);

--
-- Indexes for table `tbl_status_user`
--
ALTER TABLE `tbl_status_user`
  ADD PRIMARY KEY (`ID_STATUS_USER`);

--
-- Indexes for table `tbl_temp_bingo_card`
--
ALTER TABLE `tbl_temp_bingo_card`
  ADD PRIMARY KEY (`ID_TEMP_BINGO_CARD`),
  ADD KEY `FK_ASSIGN_SOAL_TO_CARD` (`ID_SOAL`),
  ADD KEY `FK_KARTU_SOAL` (`ID_BINGO_CARD`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`ID_USER`),
  ADD KEY `FK_INSTANSI_DETAIL` (`ID_INSTANSI_PENDIDIKAN`),
  ADD KEY `FK_LOGIN_DETAIL` (`ID_TBL_LOGIN`),
  ADD KEY `FK_USER_DETAIL` (`ID_USER_DETAILS`);

--
-- Indexes for table `tbl_user_details`
--
ALTER TABLE `tbl_user_details`
  ADD PRIMARY KEY (`ID_USER_DETAILS`),
  ADD KEY `FK_STATUS_USER` (`ID_STATUS_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bingo_card`
--
ALTER TABLE `tbl_bingo_card`
  MODIFY `ID_BINGO_CARD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_game`
--
ALTER TABLE `tbl_game`
  MODIFY `ID_GAME` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_game_temp`
--
ALTER TABLE `tbl_game_temp`
  MODIFY `ID_GAME_TEMP` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_instansi_pendidikan`
--
ALTER TABLE `tbl_instansi_pendidikan`
  MODIFY `ID_INSTANSI_PENDIDIKAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `ID_KELAS` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `ID_TBL_LOGIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  MODIFY `ID_MAHASISWA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  MODIFY `ID_MAPEL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_matkul`
--
ALTER TABLE `tbl_matkul`
  MODIFY `ID_MATKUL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pilgan_soal`
--
ALTER TABLE `tbl_pilgan_soal`
  MODIFY `ID_PILGAN_SOAL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_player`
--
ALTER TABLE `tbl_player`
  MODIFY `ID_PLAYER` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  MODIFY `ID_TBL_SEMESTER` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `ID_SISWA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
  MODIFY `ID_SOAL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_soal_mapel`
--
ALTER TABLE `tbl_soal_mapel`
  MODIFY `ID_SOAL_MAPEL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_soal_matkul`
--
ALTER TABLE `tbl_soal_matkul`
  MODIFY `ID_SOAL_MATKUL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_status_instansi`
--
ALTER TABLE `tbl_status_instansi`
  MODIFY `ID_STATUS_INSTANSI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_status_user`
--
ALTER TABLE `tbl_status_user`
  MODIFY `ID_STATUS_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_temp_bingo_card`
--
ALTER TABLE `tbl_temp_bingo_card`
  MODIFY `ID_TEMP_BINGO_CARD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user_details`
--
ALTER TABLE `tbl_user_details`
  MODIFY `ID_USER_DETAILS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_game_temp`
--
ALTER TABLE `tbl_game_temp`
  ADD CONSTRAINT `FK_ASSIGN_CARD_TO_GAME` FOREIGN KEY (`ID_BINGO_CARD`) REFERENCES `tbl_bingo_card` (`ID_BINGO_CARD`),
  ADD CONSTRAINT `FK_ASSIGN_GAME_DATA` FOREIGN KEY (`ID_GAME`) REFERENCES `tbl_game` (`ID_GAME`),
  ADD CONSTRAINT `FK_ASSIGN_PLAYER_TO_GAME` FOREIGN KEY (`ID_PLAYER`) REFERENCES `tbl_player` (`ID_PLAYER`);

--
-- Constraints for table `tbl_instansi_pendidikan`
--
ALTER TABLE `tbl_instansi_pendidikan`
  ADD CONSTRAINT `FK_STATUS_INSTANSI` FOREIGN KEY (`ID_STATUS_INSTANSI`) REFERENCES `tbl_status_instansi` (`ID_STATUS_INSTANSI`);

--
-- Constraints for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD CONSTRAINT `FK_INHERITANCE_USER` FOREIGN KEY (`ID_USER`) REFERENCES `tbl_user` (`ID_USER`),
  ADD CONSTRAINT `FK_SEMESTER_MAHASISWA` FOREIGN KEY (`ID_TBL_SEMESTER`) REFERENCES `tbl_semester` (`ID_TBL_SEMESTER`);

--
-- Constraints for table `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  ADD CONSTRAINT `FK_MAPEL_KELAS` FOREIGN KEY (`ID_KELAS`) REFERENCES `tbl_kelas` (`ID_KELAS`);

--
-- Constraints for table `tbl_matkul`
--
ALTER TABLE `tbl_matkul`
  ADD CONSTRAINT `FK_SEMESTER_MATKUL` FOREIGN KEY (`ID_TBL_SEMESTER`) REFERENCES `tbl_semester` (`ID_TBL_SEMESTER`);

--
-- Constraints for table `tbl_pilgan_soal`
--
ALTER TABLE `tbl_pilgan_soal`
  ADD CONSTRAINT `FK_PILGAN_SOAL` FOREIGN KEY (`ID_SOAL`) REFERENCES `tbl_soal` (`ID_SOAL`);

--
-- Constraints for table `tbl_player`
--
ALTER TABLE `tbl_player`
  ADD CONSTRAINT `FK_ASSIGN_USER_TO_PLAYER` FOREIGN KEY (`ID_USER`) REFERENCES `tbl_user` (`ID_USER`);

--
-- Constraints for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD CONSTRAINT `FK_INHERITANCE_USER2` FOREIGN KEY (`ID_USER`) REFERENCES `tbl_user` (`ID_USER`),
  ADD CONSTRAINT `FK_KELAS_SISWA` FOREIGN KEY (`ID_KELAS`) REFERENCES `tbl_kelas` (`ID_KELAS`);

--
-- Constraints for table `tbl_soal`
--
ALTER TABLE `tbl_soal`
  ADD CONSTRAINT `FK_SOAL_MAPEL` FOREIGN KEY (`ID_SOAL_MAPEL`) REFERENCES `tbl_soal_mapel` (`ID_SOAL_MAPEL`),
  ADD CONSTRAINT `FK_SOAL_MATKUL` FOREIGN KEY (`ID_SOAL_MATKUL`) REFERENCES `tbl_soal_matkul` (`ID_SOAL_MATKUL`);

--
-- Constraints for table `tbl_soal_mapel`
--
ALTER TABLE `tbl_soal_mapel`
  ADD CONSTRAINT `FK_MAPEL_SOAL` FOREIGN KEY (`ID_MAPEL`) REFERENCES `tbl_mapel` (`ID_MAPEL`);

--
-- Constraints for table `tbl_soal_matkul`
--
ALTER TABLE `tbl_soal_matkul`
  ADD CONSTRAINT `FK_MATKUL_SOAL` FOREIGN KEY (`ID_MATKUL`) REFERENCES `tbl_matkul` (`ID_MATKUL`);

--
-- Constraints for table `tbl_temp_bingo_card`
--
ALTER TABLE `tbl_temp_bingo_card`
  ADD CONSTRAINT `FK_ASSIGN_SOAL_TO_CARD` FOREIGN KEY (`ID_SOAL`) REFERENCES `tbl_soal` (`ID_SOAL`),
  ADD CONSTRAINT `FK_KARTU_SOAL` FOREIGN KEY (`ID_BINGO_CARD`) REFERENCES `tbl_bingo_card` (`ID_BINGO_CARD`);

--
-- Constraints for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `FK_INSTANSI_DETAIL` FOREIGN KEY (`ID_INSTANSI_PENDIDIKAN`) REFERENCES `tbl_instansi_pendidikan` (`ID_INSTANSI_PENDIDIKAN`),
  ADD CONSTRAINT `FK_LOGIN_DETAIL` FOREIGN KEY (`ID_TBL_LOGIN`) REFERENCES `tbl_login` (`ID_TBL_LOGIN`),
  ADD CONSTRAINT `FK_USER_DETAIL` FOREIGN KEY (`ID_USER_DETAILS`) REFERENCES `tbl_user_details` (`ID_USER_DETAILS`);

--
-- Constraints for table `tbl_user_details`
--
ALTER TABLE `tbl_user_details`
  ADD CONSTRAINT `FK_STATUS_USER` FOREIGN KEY (`ID_STATUS_USER`) REFERENCES `tbl_status_user` (`ID_STATUS_USER`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
