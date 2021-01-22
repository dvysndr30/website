-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Sep 2019 pada 21.46
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jalan`
--

CREATE TABLE `jalan` (
  `id_jalan` int(11) NOT NULL,
  `nama_jalan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jalan`
--

INSERT INTO `jalan` (`id_jalan`, `nama_jalan`) VALUES
(1, 'Kawunganten'),
(2, 'Cilacap Selatan'),
(44, 'Jeruklegi'),
(45, 'Kauman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'makanan_berat'),
(2, 'snack'),
(3, 'oleh_oleh_khas_cilacap'),
(4, 'minuman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuliner`
--

CREATE TABLE `kuliner` (
  `id_kuliner` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `id_jalan` int(11) NOT NULL,
  `nama_kuliner` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `embed` text NOT NULL,
  `status` enum('pemilik','bukanpemilik') NOT NULL,
  `nomor` int(11) NOT NULL,
  `restoran` enum('buka','akansegerabuka') NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `gambar` text NOT NULL,
  `keterangan` enum('sudah_ambil','belum_ambil') NOT NULL,
  `menu_restoran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kuliner`
--

INSERT INTO `kuliner` (`id_kuliner`, `nama_kategori`, `id_jalan`, `nama_kuliner`, `alamat`, `embed`, `status`, `nomor`, `restoran`, `deskripsi`, `gambar`, `keterangan`, `menu_restoran`) VALUES
(30, '2', 0, 'Surabi', 'Jl. Letnan Jend. Suprapto, Kandang Macan, Sidanegara, Kec. Cilacap Tengah, Kabupaten Cilacap, Jawa Tengah 53212', 'https://www.google.com/maps/place/Serabi+Mbah+Bunga/@-7.4111235,108.9566612,11z/data=!4m8!1m2!2m1!1sserabi+cilacap!3m4!1s0x2e651299ec46e4ab:0x9678107e9cdde5a4!8m2!3d-7.7208064!4d109.0084612', 'pemilik', 123456, 'buka', 'murah', '22-08-2019-kuliner20.jpg', 'sudah_ambil', '13-09-2019-restoran8.jpg'),
(31, '4', 0, 'Milmex Katamso', 'Jl. Katamso, Cilacap, Sidanegara, Kec. Cilacap Tengah, Kabupaten Cilacap, Jawa Tengah 53223', 'https://www.google.com/maps/place/Milkmax+5/@-7.725587,109.0090733,17z/data=!3m1!4b1!4m5!3m4!1s0x2e6512903e4cbda5:0x4468ae55f79aed51!8m2!3d-7.725587!4d109.011262', 'pemilik', 123456, '', 'mayan', '22-08-2019-kuliner21.jpg', 'sudah_ambil', '13-09-2019-restoran9.jpg'),
(32, '3', 0, 'Kerupuk Udang', 'Jl. Pemintalan No.41, Sideraja, Sideran, Tambakreja, South Cilacap, Cilacap Regency, Central Java 53', 'https://www.google.com/maps/place/King+Naya/@-7.7255869,109.0025072,15z/data=!4m8!1m2!2m1!1skerupuk+udang!3m4!1s0x0:0xad5c6cbdd2b76852!8m2!3d-7.7357445!4d109.0035984', '', 34567, '', 'ahahaha', '22-08-2019-kuliner22.jpg', 'sudah_ambil', '13-09-2019-restoran10.jpg'),
(39, '1', 0, 'SATE AYAM MARTAWI', 'Jl. Brigjend. Katamso No.56, Cilacap, Sidanegara, Kec. Cilacap Tengah, Kabupaten Cilacap, Jawa Tengah 53212', 'https://www.google.com/maps/place/Sate+Ayam+Martawi/@-7.7225199,109.0090354,17z/data=!3m1!4b1!4m5!3m4!1s0x2e651290c768ef55:0x8e46597892719ab1!8m2!3d-7.7225199!4d109.0112241', '', 879999, '', 'Sate Ayam dengan kualitas terbaik', '29-08-2019-restoran.png', 'sudah_ambil', '13-09-2019-restoran11.jpg'),
(40, '1', 0, 'AYAM GEPREK MAS BIM', 'Jl. Slamet No.11A, Cilacap, Sidanegara, Kec. Cilacap Tengah, Kabupaten Cilacap, Jawa Tengah 53223', 'https://www.google.com/maps/place/Ayam+Geprek+Mas+Bim/@-7.7249782,109.0123233,17z/data=!3m1!4b1!4m5!3m4!1s0x2e651291dab413e7:0x2820e67e442566d0!8m2!3d-7.7249782!4d109.014512', '', 2147483647, '', 'Tempat Makan Ayam Geprek Terenak', '29-08-2019-restoran1.png', 'sudah_ambil', '13-09-2019-restoran13.jpg'),
(41, '1', 0, 'RM BREKECEK PATHAK JAHAN BU WIDI', 'Jl. Slamet No.5, Cilacap, Sidanegara, Kec. Cilacap Tengah, Kabupaten Cilacap, Jawa Tengah 53212', 'https://www.google.com/maps/place/RM.+Brekecek+Pathak+Jahan+Bu+WIDI/@-7.7250609,109.0127635,17z/data=!4m5!3m4!1s0x2e6512918c68f4ff:0xd659b68885740eff!8m2!3d-7.7250609!4d109.0149522', '', 2147483647, '', 'Rumah Makan khas rempahnya', '29-08-2019-restoran2.png', 'sudah_ambil', '13-09-2019-restoran15.jpg'),
(42, '1', 0, 'BAKSO PAK GEPENG', 'Jl. Pemintalan, Daunlumbung, Tambakreja, Kec. Cilacap Sel., Kabupaten Cilacap, Jawa Tengah 53213', 'https://www.google.com/maps/place/Bakso+Pak+Gepeng/@-7.7337009,109.0016092,17z/data=!3m1!4b1!4m5!3m4!1s0x2e651286cae66ebf:0xd1cfd6707f0da932!8m2!3d-7.7337009!4d109.0037979', '', 2147483647, '', 'Bakso dengan rasa terunik', '29-08-2019-restoran3.png', 'sudah_ambil', '13-09-2019-restoran16.jpg'),
(43, '4', 0, 'ES BUAH DAN JUICE', 'Jl. Gatot Subroto, Cigobang, Gunungsimping, Kec. Cilacap Tengah, Kabupaten Cilacap, Jawa Tengah 53211', 'https://www.google.com/maps/place/Es+Jus+%26+Sop+Buah+Es+Durian/@-7.702976,109.0217075,17z/data=!3m1!4b1!4m5!3m4!1s0x2e6512c852f10e77:0x9042cde915d0c0cb!8m2!3d-7.702976!4d109.0238962', '', 8777, '', 'Tersedia minuman sehat dan nyegerin', '29-08-2019-kuliner.png', 'sudah_ambil', '13-09-2019-restoran17.jpg'),
(44, '1', 0, 'Upnormal', 'Jl. S. Parman No.14 - 16, Cilacap, Sidanegara, Kec. Cilacap Tengah, Kabupaten Cilacap, Jawa Tengah 53212', 'https://www.google.com/maps/place/Warunk+Upnormal+Cilacap/@-7.7266083,109.0111454,17z/data=!3m1!4b1!4m5!3m4!1s0x2e651291d98ecfdf:0xa952ba61dd81858f!8m2!3d-7.7266083!4d109.0133341', 'pemilik', 2147483647, 'buka', 'Mari ngongkrong elit disini', '29-08-2019-kuliner.jpg', 'sudah_ambil', '13-09-2019-restoran18.jpg'),
(45, '2', 0, 'MARTABAK SPECIAL ALASKA', 'Jl. S. Parman No.37, Cilacap, Sidanegara, Kec. Cilacap Tengah, Kabupaten Cilacap, Jawa Tengah 53212', 'https://www.google.com/maps/place/Martabak+Alaska/@-7.7230227,109.0111562,17z/data=!3m1!4b1!4m5!3m4!1s0x2e65129119eb569b:0xdb51647e3e6a4634!8m2!3d-7.7230227!4d109.0133449', '', 282531175, '', 'Martabak terter', '29-08-2019-kuliner1.png', 'sudah_ambil', '13-09-2019-restoran20.jpg'),
(46, '2', 0, 'SINGKONG KEJU', 'Jalan Kauman, Cilacap, Sidanegara, Kec. Cilacap Tengah, Kabupaten Cilacap, Jawa Tengah 53212', 'https://www.google.com/maps/place/Singkong+Keju/@-7.7215362,109.0061686,17z/data=!3m1!4b1!4m5!3m4!1s0x2e6512be0bb3f87f:0x5236e86c4c135b35!8m2!3d-7.7215362!4d109.0083573', '', 87777, '', 'Cemilan bintang 5', '29-08-2019-kuliner2.png', 'sudah_ambil', '13-09-2019-restoran21.jpg'),
(47, '3', 0, 'TOKO OLEH-OLEH SARI RASA', 'Jl. Gatot Subroto No.132, Wanasari, Sidanegara, Kec. Cilacap Tengah, Kabupaten Cilacap, Jawa Tengah 53212', 'https://www.google.com/maps/place/toko+oleh-oleh+sari+rasa/@-7.7100434,109.0159064,17z/data=!3m1!4b1!4m5!3m4!1s0x2e6513bbd2bb09f7:0xd8aa68acdb0b3efc!8m2!3d-7.7100434!4d109.0180951', '', 87777, '', 'YUK MAMPIR', '29-08-2019-kuliner3.png', 'sudah_ambil', '13-09-2019-restoran23.jpg'),
(48, '3', 0, 'TOKO OLEH-OLEH GUNARASA', 'Jl. Brigjend. Katamso, Cilacap, Sidanegara, Kec. Cilacap Tengah, Kabupaten Cilacap, Jawa Tengah 53212', 'https://www.google.com/maps/place/Toko+Oleh-Oleh+Gunarasa/@-7.7238915,109.0089752,17z/data=!3m1!4b1!4m5!3m4!1s0x2e65130563e821f3:0xd8cce6b315884728!8m2!3d-7.7238915!4d109.0111639', '', 877777, '', 'Cooming SOON', '29-08-2019-kuliner4.png', 'sudah_ambil', '13-09-2019-restoran24.jpg'),
(49, '4', 0, 'Es DegDur (Degan Duren) Lik Seto', 'Pasiran, Tegalreja, Kec. Cilacap Sel., Kabupaten Cilacap, Jawa Tengah 53213', 'https://www.google.com/maps/place/Es+DegDur/@-7.7151969,109.0034783,17z/data=!3m1!4b1!4m5!3m4!1s0x2e6512a242483df9:0x98c29bd8eed69433!8m2!3d-7.7151969!4d109.005667', '', 2147483647, '', 'Enak dan Seger', '29-08-2019-kuliner1.jpg', 'sudah_ambil', '13-09-2019-restoran25.jpg'),
(50, '4', 0, 'Warung Es Pisang Ijo,Es Kelapa Muda, Es Buah Warung 777', 'Jl. Letnan Jend. Suprapto No.19, Kandang Macan, Tegalreja, Kec. Cilacap Sel., Kabupaten Cilacap, Jawa Tengah 53213', 'https://www.google.com/maps/place/Warung+Es+Pisang+Ijo,Es+Kelapa+Muda,+Es+Buah+Warung+777/@-7.7208446,109.0045224,17z/data=!3m1!4b1!4m5!3m4!1s0x2e6512999df39afb:0x795bccef81fd5b5a!8m2!3d-7.7208446!4d109.0067111', '', 2147483647, '', 'Monggoh', '29-08-2019-kuliner2.jpg', 'sudah_ambil', '13-09-2019-restoran26.jpg'),
(51, '4', 0, 'SERUPUT SEDUH KOPI', 'Jl. Brigjend. Katamso No.29, Cilacap, Sidanegara, Kec. Cilacap Tengah, Kabupaten Cilacap, Jawa Tengah 53212', 'https://www.google.com/maps/place/Sruput+Seduh+Kopi/@-7.7229529,109.0089437,17z/data=!3m1!4b1!4m5!3m4!1s0x2e65139ba768cb59:0xbf3de8afb6305069!8m2!3d-7.7229529!4d109.0111324', '', 2147483647, '', 'Cocok untuk nongki2', '29-08-2019-kuliner3.jpg', 'sudah_ambil', '13-09-2019-restoran27.jpg'),
(52, '2', 0, 'ROTI BAKAR BANDUNG UCUP\'S', 'Rawapasung, Sidanegara, Central Cilacap, Cilacap Regency, Central Java 53212', 'https://www.google.com/maps/place/Roti+Bakar+Bandung+UCUP\'S/@-7.7149461,109.0131807,15z/data=!4m8!1m2!2m1!1sroti+bakar+cilacap!3m4!1s0x2e6512bc6507fc29:0x24001372689f6020!8m2!3d-7.7119193!4d109.013253', '', 2147483647, '', 'Cocok untuk anak-anak', '29-08-2019-kuliner4.jpg', 'sudah_ambil', '13-09-2019-restoran28.jpg'),
(53, '2', 0, 'GORENGAN Y&Y ENDES', 'Jl. Tidar No.66, Tambaksari, Sidanegara, Kec. Cilacap Tengah, Kabupaten Cilacap, Jawa Tengah 53212', 'https://www.google.com/maps/place/Gorengan+Y%26Y+Endes/@-7.7159813,109.011075,17z/data=!3m1!4b1!4m5!3m4!1s0x2e6512bd867267e3:0x93fea575043ee86!8m2!3d-7.7159813!4d109.0132637', '', 87777, '', 'Cemilan disegala waktu', '29-08-2019-kuliner5.jpg', 'sudah_ambil', '13-09-2019-restoran22.jpg'),
(54, '3', 0, 'PUSAT OLEH-OLEH CILACAP', 'Sidakaya Satu, Sidakaya, Kec. Cilacap Sel., Kabupaten Cilacap, Jawa Tengah 53211', 'https://www.google.com/maps/place/Pusat+Oleh-oleh+Cilacap/@-7.7352495,109.0107059,17z/data=!3m1!4b1!4m5!3m4!1s0x2e651289b3b7098f:0x699ff5a65fae3d7c!8m2!3d-7.7352495!4d109.0128946', 'pemilik', 8777, 'buka', 'Mari berkunjung', '29-08-2019-kuliner6.jpg', 'sudah_ambil', '13-09-2019-restoran19.jpg'),
(55, '3', 0, 'TEMPE KERIPIK KHAS CILACAP', 'Jl. Merapi No. 41, RT.01 / RW.05, Sidanegara, Cilacap Tengah, Tambaksari, Sidanegara, Kec. Cilacap Tengah, Kabupaten Cilacap, Jawa Tengah 53223', 'https://www.google.com/maps/place/Tempe+Keripik+khas+Cilacap/@-7.71975,109.0103493,17z/data=!3m1!4b1!4m5!3m4!1s0x2e6512971d97d2a3:0x997832932092a610!8m2!3d-7.71975!4d109.012538', 'pemilik', 282520761, 'buka', 'SOON', '29-08-2019-kuliner7.jpg', 'sudah_ambil', '13-09-2019-restoran14.jpg'),
(57, '3', 0, 'Klanting', 'Sidakaya Satu, Sidakaya, Kec. Cilacap Sel., Kabupaten Cilacap, Jawa Tengah 53211', 'https://www.google.com/maps/place/Pusat+Oleh-oleh+Cilacap/@-7.7352442,109.0107059,17z/data=!3m1!4b1!4m5!3m4!1s0x2e651289b3b7098f:0x699ff5a65fae3d7c!8m2!3d-7.7352495!4d109.0128946', 'pemilik', 958594033, '', 'Gurih', '05-09-2019-kuliner.jpg', 'sudah_ambil', '13-09-2019-restoran12.jpg'),
(63, '2', 0, 'ini coba coba', 'Jl. RA Wiryaatmaja, Pesayangan, Kedungwuluh, Kec. Purwokerto Bar., Kabupaten Banyumas, Jawa Tengah 53131', 'https://www.google.com/maps/place/Serabi+Aneka+Rasa+Purwokerto/@-7.413806,109.0241476,12z/data=!4m8!1m2!2m1!1sserabi!3m4!1s0x2e655e665f2ececf:0x3af3f844d090b04e!8m2!3d-7.4211157!4d109.2264957', 'pemilik', 9390309, 'buka', 'fsdfsfsd', '05-09-2019-restoran1.jpg', 'sudah_ambil', '13-09-2019-restoran7.jpg'),
(64, '4', 0, 'ini nyoklat', 'Jl. Bumiayu-Purwokerto, Kauman, Ajibarang Wetan, Kec. Ajibarang, Kabupaten Banyumas, Jawa Tengah 53163', 'https://www.google.com/maps/place/del\'s(nyoklat+klasik+cimol+neng+kriwil)/@-7.4112276,109.0789549,14z/data=!4m5!3m4!1s0x0:0x33fcc99b11eb8843!8m2!3d-7.4040635!4d109.0760958', 'pemilik', 9390309, 'buka', 'fsddsfsdfs', '08-09-2019-restoran.jpg', 'sudah_ambil', '13-09-2019-restoran1.jpg'),
(65, '1', 0, 'Sambal Krosaki', 'JL Sunan Bonang, RT 2 RW 10, Dukuh Waluh, Dusun II, Dukuhwaluh, Kec. Kembaran, Kabupaten Banyumas, Jawa Tengah 53182', 'https://www.google.com/maps/place/Sambal+Krosak/@-7.4052596,109.2712586,15z/data=!4m5!3m4!1s0x2e655ec66c8c7da5:0x7e9260c4748be5e4!8m2!3d-7.411253!4d109.2696092', 'pemilik', 84959503, 'buka', 'mkllkvfgd', '13-09-2019-restoran5.jpg', 'sudah_ambil', '13-09-2019-restoran6.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `owner`
--

CREATE TABLE `owner` (
  `id_owner` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `owner`
--

INSERT INTO `owner` (`id_owner`, `username`, `password`) VALUES
(1, 'owner', '$2y$10$66aWAuSpjmqUoxvxgjmtKO0MgKilgi9b.ESsN4DgIQ4tBvjx.PzJe'),
(4, 'alfa', '$2y$10$gvoLK6/N5AJHGKyqaa/2bOv7nMKpDwJltquAPwrj6lULSpPaNexhy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_id`
--

CREATE TABLE `role_id` (
  `id_rd` int(11) NOT NULL,
  `role_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role_id`
--

INSERT INTO `role_id` (`id_rd`, `role_id`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulasan`
--

CREATE TABLE `ulasan` (
  `id_ulasan` int(11) NOT NULL,
  `id_kuliner` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `ulasan` text NOT NULL,
  `rating` float NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ulasan`
--

INSERT INTO `ulasan` (`id_ulasan`, `id_kuliner`, `nama`, `ulasan`, `rating`, `waktu`) VALUES
(16, 39, 'dkslm', 'mlk', 2.5, '2019-09-05 21:10:19'),
(17, 30, '', '', 4.5, '2019-09-13 01:14:41');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jalan`
--
ALTER TABLE `jalan`
  ADD PRIMARY KEY (`id_jalan`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `kuliner`
--
ALTER TABLE `kuliner`
  ADD PRIMARY KEY (`id_kuliner`);

--
-- Indeks untuk tabel `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id_owner`);

--
-- Indeks untuk tabel `role_id`
--
ALTER TABLE `role_id`
  ADD PRIMARY KEY (`id_rd`);

--
-- Indeks untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`id_ulasan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jalan`
--
ALTER TABLE `jalan`
  MODIFY `id_jalan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kuliner`
--
ALTER TABLE `kuliner`
  MODIFY `id_kuliner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT untuk tabel `owner`
--
ALTER TABLE `owner`
  MODIFY `id_owner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `role_id`
--
ALTER TABLE `role_id`
  MODIFY `id_rd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
