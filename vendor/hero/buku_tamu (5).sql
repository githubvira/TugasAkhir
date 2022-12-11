-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Feb 2022 pada 09.28
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku_tamu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `opsi_pilihan`
--

CREATE TABLE `opsi_pilihan` (
  `id` int(11) NOT NULL,
  `opsi` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `opsi_pilihan`
--

INSERT INTO `opsi_pilihan` (`id`, `opsi`, `isi`) VALUES
(1, 'bidang', 'Bidang A'),
(3, 'bidang', 'Bidang B'),
(4, 'bidang', 'Bidang C'),
(5, 'keperluan', 'PEKERJAAN UMUM DAN PENATAAN RUANG																							\r\n'),
(6, 'keperluan', 'Izin Pemanfaatan Ruang pada Ruas Jalan Provinsi \r\n'),
(7, 'keperluan', ' Izin Penggunaan Pemanfaatan Air (SIPPA) Permukaan \r\n'),
(16, 'keperluan', ''),
(17, 'keperluan', 'KESEHATAN\r\n'),
(18, 'keperluan', 'Surat Tanda Registrasi Tenaga Teknis Kefarmasian (STRTTK)\r\n'),
(19, 'keperluan', 'Persetujuan Pemenuhan Komitmen Sertifikat Distribusi Cabang Pedagang Besar Farmasi \r\n'),
(20, 'keperluan', 'Persetujuan Pemenuhan Komitmen Sertifikat Distribusi Cabang Penyalur Alat Kesehatan\r\n'),
(21, 'keperluan', ''),
(22, 'keperluan', 'KEHUTANAN																										\r\n'),
(23, 'keperluan', 'Izin Usaha Industri Primer Hasil Hutan \r\n'),
(24, 'keperluan', 'Rekomendasi Penggunaan Kawasan Hutan  (PPKH)\r\n'),
(25, 'keperluan', 'Rekomendasi Izin Pelepasan Kawasan Hutan Produksi yang dapat diKonversi\r\n'),
(26, 'keperluan', 'Persetujuan Pemanfaatan Kayu Kegiatan Non Kehutanan (PKNK)\r\n'),
(27, 'keperluan', 'Rekomendasi Perizinan Berusaha Pemanfaatan  Hutan (PBPH) pada hutan Produksi\r\n'),
(28, 'keperluan', ''),
(30, 'keperluan', 'PERKEBUNAN\r\n'),
(31, 'keperluan', 'Persetujuan Pemenuhan Komitmen Izin Usaha Produksi Benih  ( Izin Usaha Produksi Benih Tanaman )\r\n'),
(32, 'keperluan', 'Verifikasi Dokumen Pemenuhan Persyaratan Produksi Benih Tanaman Perkebunan\r\n'),
(33, 'keperluan', ''),
(34, 'keperluan', 'LINGKUNGAN HIDUP																										\r\n'),
(35, 'keperluan', 'Persetujuan UKL-UPL dan Izin Lingkungan Hidup \r\n'),
(36, 'keperluan', 'Surat Keputusan Kelayakan Lingkungan Hidup (SKKLH) dan Izin Lingkungan Hidup  \r\n'),
(37, 'keperluan', 'Persetujuan Dokumen Evaluasi Lingkungan Hidup (DELH)\r\n'),
(40, 'keperluan', ''),
(41, 'keperluan', 'PENDIDIKAN'),
(42, 'keperluan', 'Izin Penambahan dan Perubahan Program Keahlian  yang Diselenggarakan oleh Masyarakat (SMK)\r\n'),
(43, 'keperluan', 'Persetujuan Pemenuhan Komitmen Izin Pendirian Program atau Satuan Pendidikan untuk SMK yang Diselenggarakan oleh Masyarakat\r\n'),
(44, 'keperluan', 'Persetujuan Pemenuhan Komitmen Izin Pendirian Program atau Satuan Pendidikan untuk SMA yang Diselenggarakan oleh Masyarakat\r\n'),
(45, 'keperluan', ''),
(46, 'keperluan', 'PERINDUSTRIAN'),
(47, 'keperluan', ' Persetujuan Pemenuhan Komitmen Izin Usaha Industri Besar\r\n'),
(48, 'keperluan', ''),
(49, 'keperluan', 'PERDAGANGAN'),
(50, 'keperluan', 'Persetujuan Pemenuhan Komitmen Surat Izin Usaha Perdagangan Bahan Berbahaya (SIUP-B2)\r\n'),
(51, 'keperluan', 'Rekomendasi Penerbitan SIUP-MB bagi Distributor\r\n'),
(52, 'keperluan', ''),
(53, 'keperluan', 'KELAUTAN DAN PERIKANAN'),
(54, 'keperluan', 'Surat Izin Kapal Pengangkut Ikan (SIKPI)\r\n'),
(55, 'keperluan', ' Permohonan Surat Izin Usaha Perikanan (SIUP) Badan Hukum / Perusahaan \r\n'),
(56, 'keperluan', 'Surat Izin Penangkapan Ikan (SIPI) BARU_OLD\r\n'),
(57, 'keperluan', 'Surat Permohonan Penerbitan BPKP\r\n'),
(58, 'keperluan', 'Surat Izin Usaha Perikanan (SIUP) \r\n'),
(59, 'keperluan', 'Tanda Daftar Kapal Perikanan (TDKP) Baru untuk Kapal Penangkapan Ikan\r\n'),
(60, 'keperluan', 'Tanda Daftar Kapal Perikanan (TDKP) Perubahan\r\n'),
(61, 'keperluan', 'Surat Izin Usaha Perikanan (SIUP) Perubahan \r\n'),
(62, 'keperluan', 'Surat Izin Usaha Perikanan (SIUP) Baru\r\n'),
(63, 'keperluan', 'Surat Izin Penangkapan Ikan (SIPI) Baru  \r\n'),
(64, 'keperluan', 'Surat Izin Penangkapan Ikan (SIPI) Perpanjangan\r\n'),
(65, 'keperluan', 'Surat Izin Kapal Pengangkut Ikan (SIKPI) Baru\r\n'),
(66, 'keperluan', 'Surat Izin Kapal Pengangkut Ikan (SIKPI) Perpanjangan \r\n'),
(67, 'keperluan', 'Tanda Daftar Kapal Perikanan (TDKP) \r\n'),
(68, 'keperluan', ''),
(69, 'keperluan', 'ENERGI DAN SUMBER DAYA MINERAL'),
(70, 'keperluan', ' Izin Perusahaan Pengeboran Air Bawah Tanah (Baru)\r\n'),
(71, 'keperluan', 'Izin Pengeboran Air Tanah \r\n'),
(72, 'keperluan', ' Izin Juru Bor Air Tanah\r\n'),
(73, 'keperluan', ' Izin Pengusahaan Air Tanah (Baru)\r\n'),
(74, 'keperluan', ' Izin Pengusahaan Air Tanah (Perpanjangan)\r\n'),
(75, 'keperluan', 'Izin Pengusahaan Air Tanah (Perseorangan Habis Masa Berlaku Izin)\r\n'),
(76, 'keperluan', 'Persetujuan Pemenuhan Komitmen Izin Operasi \r\n'),
(77, 'keperluan', 'Persetujuan Pemenuhan Komitmen Izin Usaha Jasa Penunjang Tenaga Listrk \r\n'),
(78, 'keperluan', 'Izin Pengusahaan Air Tanah Sumur Bor (Baru)\r\n'),
(79, 'keperluan', 'Izin Pengusahaan Air Tanah Sumur Bor (Eksisting)'),
(80, 'keperluan', 'Izin Pengusahaan Air Tanah Sumur Bor (Habis Masa Berlaku Izin)\r\n'),
(81, 'keperluan', 'Izin Pengusahaan Air Tanah Sumur Gali (Eksisting GN-PSDA)\r\n'),
(82, 'keperluan', 'Perpanjangan Surat Izin Juru Bor Air Tanah\r\n'),
(83, 'keperluan', ' Izin Perusahaan Pengeboran Air Bawah Tanah (Baru)\r\n'),
(84, 'keperluan', ' Izin Perusahaan Pengeboran Air Bawah Tanah (Perpanjangan)\r\n'),
(85, 'keperluan', 'Persetujuan Pemenuhan Komitmen Izin Usaha Penyediaan Tenaga Listrik Terintegrasi\r\n'),
(86, 'keperluan', 'Izin Pengusahaan Air Tanah Dalam Provinsi Untuk Sumur Bor (Existing)(Perorangan)\r\n'),
(87, 'keperluan', ''),
(88, 'keperluan', 'PERTERNAKAN DAN KESEHATAN HEWAN'),
(89, 'keperluan', 'Izin Pemasukan dan Pengeluaran Obat Hewan\r\n'),
(90, 'keperluan', 'Rekomendasi Pemasukan dan Pengeluaran ternak ruminansia dan babi (Pemasukan Ternak ruminansia)\r\n'),
(91, 'keperluan', 'Izin Pemasukan dan Pengeluaran Benih/Bibit Ternak (Pemasukan Bibit Ternak Antar Provinsi)\r\n'),
(92, 'keperluan', 'Rekomendasi Pemasukan dan Pengeluaran Produk Hewan (Pemasukan Produk Pangan asal hewan antar Provinsi )  \r\n'),
(93, 'keperluan', ' Rekomendasi Pemasukan dan Pengeluaran Ternak Ruminansia dan Babi (Pemasukan Ternak Babi)\r\n'),
(94, 'keperluan', 'Izin Usaha Distributor Obat Hewan\r\n'),
(95, 'keperluan', 'Izin Pemasukan dan Pengeluaran Ternak Unggas    (Pengeluaran Ternak Unggas  antar Provinsi )  \r\n'),
(96, 'keperluan', ''),
(97, 'keperluan', 'SOSIAL'),
(98, 'keperluan', 'Rekomendasi Undian Gratis Berhadiah (UGB)\r\n'),
(99, 'keperluan', ''),
(100, 'keperluan', 'PERHUBUNGAN'),
(101, 'keperluan', 'Pemenuhan Komitmen Izin Usaha Jasa Terkait dengan Angkutan di Perairan (Izin Bongkar Muat Barang )\r\n'),
(102, 'keperluan', 'Pemenuhan Komitmen Izin Usaha Jasa Terkait dengan Angkutan di Perairan (Izin Usaha Bongkar Muat Barang ) Kantor Cabang\r\n'),
(103, 'keperluan', 'Pemenuhan Komitmen Izin Usaha Jasa Terkait dengan Angkutan di Perairan (Izin Usaha Jasa Pengurusan Transportasi) PMDN\r\n'),
(104, 'keperluan', 'Pemenuhan Komitmen Izin Usaha Angkutan Laut Pelayaran Rakyat (Angkutan di Perairan)- SIUPPER (Surat Izin Usaha Perusahaan Pelayaran Rakyat) Kantor Pusat \r\n'),
(105, 'keperluan', 'Pemenuhan Komitmen Izin Usaha Penyelenggaraan Angkutan Orang (AJDP)\r\n'),
(106, 'keperluan', 'Pemenuhan Komitmen Izin Usaha Penyelenggaraan Angkutan Orang (AKDP)\r\n'),
(107, 'keperluan', 'Pemenuhan Komitmen Izin Usaha Jasa Terkait dengan Angkutan di Perairan (Izin Usaha Jasa Pengurusan Transportasi) PMDN (Cabang) \r\n'),
(108, 'keperluan', ''),
(109, 'keperluan', 'TENAGA KERJA'),
(110, 'keperluan', ' Persetujuan Pemenuhan Komitmen Izin Usaha Lembaga Penyalur Pekerja Rumah Tangga\r\n'),
(111, 'keperluan', ''),
(112, 'keperluan', 'PERTANAHAN'),
(113, 'keperluan', 'Permohonan Persetujuan Kesesuaian Kegiatan Pemanfaatan Ruang (KKPR)- Non Berusaha\r\n'),
(114, 'keperluan', ''),
(115, 'keperluan', 'BIDANG KETENTRAMAN DAN KETERTIBAN UMUM SERTA PERLINDUNGAN MASYARAKAT'),
(116, 'keperluan', 'Rekomendasi Penelitian\r\n'),
(118, 'bidang', 'OSS(Online Single Submission)'),
(119, 'bidang', 'PKPL(Pengaduan Kebijakan Pelaporan Layanan\r\n)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ttamu`
--

CREATE TABLE `ttamu` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nope` varchar(20) NOT NULL,
  `keperluan` text NOT NULL,
  `bidang` varchar(225) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `gambarktp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ttamu`
--

INSERT INTO `ttamu` (`id`, `nama`, `nama_perusahaan`, `alamat`, `nope`, `keperluan`, `bidang`, `tanggal`, `gambarktp`) VALUES
(132, 'Karina Lainatul Azra', 'DPMPTSP', 'Jln. Belut', '081384754658', 'Izin Pemanfaatan Ruang pada Ruas Jalan Provinsi \r\n', 'Bidang A', '2022-01-17 07:10:37', 'upload/61e5166d47280.jpg'),
(133, 'karin', 'dalak', 'jln. mangga', '082345678125', 'Persetujuan Pemenuhan Komitmen Izin Usaha Produksi Benih  ( Izin Usaha Produksi Benih Tanaman )\r\n', 'Bidang C', '2022-01-17 07:13:06', 'upload/61e5170290c1f.jpg'),
(135, 'audin', 'pergub', 'jl.bayam', '08987654', 'Verifikasi Dokumen Pemenuhan Persyaratan Produksi Benih Tanaman Perkebunan\r\n', 'Bidang B', '2022-01-19 06:48:23', 'upload/61e7b4373209c.jpg'),
(137, 'vira', 'febri', 'yanti', '0898', 'Surat Tanda Registrasi Tenaga Teknis Kefarmasian (STRTTK)\r\n', 'Bidang A', '2022-01-21 07:11:32', 'upload/61ea5ca3f3f46.jpg'),
(138, 'vira', 'abadi', 'jl.delima', '0822', 'Verifikasi Dokumen Pemenuhan Persyaratan Produksi Benih Tanaman Perkebunan\r\n', 'Bidang A', '2022-01-24 08:08:59', 'upload/61ee5e9b6c486.jpg'),
(141, 'aaaaa', 'aA', 'aAAAAa', 'aA', 'Rekomendasi Penggunaan Kawasan Hutan  (PPKH)\r\n', 'Bidang B', '2022-01-25 08:18:27', 'upload/61efb2535fc42.jpg'),
(142, 'qwerty', 'trewq', 'asdfg', '0987654321', ' Izin Penggunaan Pemanfaatan Air (SIPPA) Permukaan \r\n', 'Bidang B', '2022-02-01 16:21:13', 'upload/61f95df93b2f6.jpg'),
(143, 'RADITA', 'JANGGA', 'AMI', '0897868', 'Persetujuan Pemanfaatan Kayu Kegiatan Non Kehutanan (PKNK)\r\n', 'Bidang C', '2022-02-04 06:33:20', 'upload/61fcc8b0d017c.jpg'),
(144, 'ningning badinding', 'cv. sm entertaiment', 'jl. arifin ahmad 30', '08945367899', 'Persetujuan Pemenuhan Komitmen Izin Usaha Produksi Benih  ( Izin Usaha Produksi Benih Tanaman )\r\n', 'Bidang A', '2022-02-04 09:28:41', 'upload/61fcf1c938971.jpg'),
(145, 'citra lestari', 'PT. citra pelangi', 'Jl. citra plaza', '0987654324', 'Persetujuan Pemenuhan Komitmen Sertifikat Distribusi Cabang Pedagang Besar Farmasi \r\n', 'Bidang B', '2022-02-04 09:32:22', 'upload/61fcf2a604e95.jpg'),
(146, 'indra agus', 'PT. indra keenam', 'Jl. indraa ketujuh', '087247388576', 'Izin Pemanfaatan Ruang pada Ruas Jalan Provinsi \r\n', 'Bidang A', '2022-02-04 09:34:01', 'upload/61fcf3095fedd.jpg'),
(148, 'Aliya Izzati Mujahidah', 'SM entertaiment', 'Jl. Hangtuah Ujung', '08122345566', 'Rekomendasi Perizinan Berusaha Pemanfaatan  Hutan (PBPH) pada hutan Produksi\r\n', 'Bidang B', '2022-02-07 06:33:10', 'upload/6200bd266ce85.jpg'),
(155, 'jrfnrjnfajn', 'kfknknwf', 'knadklnklads', 'kladancad', 'Rekomendasi Izin Pelepasan Kawasan Hutan Produksi yang dapat diKonversi\r\n', 'Bidang C', '2022-02-07 15:47:24', 'upload/62013f0c5418f.jpg'),
(156, 'vira', 'hutan', 'jl.mawar', '0913e413', ' Izin Penggunaan Pemanfaatan Air (SIPPA) Permukaan \r\n', 'Bidang C', '2022-02-07 15:49:30', 'upload/62013f8a530d4.jpg'),
(157, 'sgjkl;mkvmke', 'knffeksakl', 'qendkwnj', 'eqndwenfwk', 'Persetujuan Pemanfaatan Kayu Kegiatan Non Kehutanan (PKNK)\r\n', 'Bidang B', '2022-02-08 13:16:22', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'aud', 'aud@in', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `opsi_pilihan`
--
ALTER TABLE `opsi_pilihan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ttamu`
--
ALTER TABLE `ttamu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `opsi_pilihan`
--
ALTER TABLE `opsi_pilihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT untuk tabel `ttamu`
--
ALTER TABLE `ttamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
