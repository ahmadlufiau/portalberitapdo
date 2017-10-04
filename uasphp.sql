-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2016 at 12:23 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uasphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `isi` longtext NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `tanggal`, `id_kategori`, `id_login`, `isi`, `gambar`) VALUES
(9, '        Inilah Ciri-ciri Warga Hilang di Hutan Jati Bancar Tuban', '2016-05-01', 16, 1, 'Tuban Street - Wisata Pantai Boom Tuban yang Indah - Berbicara soal pantai, provinsi Jawa Timur terkenal memiliki sejumlah tempat wisata pantai yang menarik untuk dikunjungi. Selain pantai Prigi di Trenggalek yang indah, di Tuban juga ada pantai yang tak kalah indah yaitu pantai Boom dengan pesona sunsetnya.Pencarian terhadap Pujiyono (38) warga Desa Kayen, Kecamatan Bancar, Kabupaten Tuban yang hilang di hutan jati Bancar. Tim menyisir di wilayah Gunung Tundo T. 127 El.133, tepatnya di petak 8 dan Petak 3 alas Trangpenek Desa Jatisari. Pihak Badan Penanggulangan Bencana Daerah (BPBD) selaku koordinator pencarian menyebutkan ciri-ciri fisik Pujiyono. Yakni, kulit sawo matang, rambut cepak, memakai baju warna kuning, memakai kantong dari sak, pakai cungkuk kepala, dan memakai penerang di kepala.', '2.jpg'),
(12, ' Keunikan Goa Suci di Tuban Yang Patut Anda Kunjungi', '2016-05-22', 17, 1, 'Tuban Street - Wisata Pantai Boom Tuban yang Indah - Berbicara soal pantai, provinsi Jawa Timur terkenal memiliki sejumlah tempat wisata pantai yang menarik untuk dikunjungi. Selain pantai Prigi di Trenggalek yang indah, di Tuban juga ada pantai yang tak kalah indah yaitu pantai Boom dengan pesona sunsetnya.Pantai Boom berada tidak jauh dari alun-alun kota Tuban sehingga sangat mudah untuk dijangkau. Selain itu, lokasinya yang sangat strategis membuat pantai Boom ini dapat dijangkau dengan mudah menggunakan kendaraan umum atau kendaraan pribadi.Tuban yang pernah mendapat gelar sekaligus jargon kota seribu GOA memang tidaklah salah. Yang telah kita ketahui pada umumnya terdapat Goa Akbar yang berada ditengah kota. Selain itu juga terdapat Goa Ngerong yang mempunyai keunikan goa denga beribu kelelawar.GOA Suci, ada lagi nih wisata alam di sekitar wilayah tuban. Goa yang unik ini dikatakan sebuah goa yg merupakan peninggalan kerajaan majapahit. Goa yang terletak disekitar penambangan Batu kapur ini memiliki banyak keunikan, diantaranya GOA ini konon katanya sering dibuat semedi orang-orang baik dari dalam maupun luar daerah untuk mediatasi menenangkan fikiran dan nurani maupun untuk mencari sebuah ilmu kebatinan. Selain Goa in di Tuban juga terdapat Goa Pesantren Perut Bumi yang dijadikan sebuah pesantren, tempat wisata, dan juga sebgai tempat meditasi.Goa Suci ini merupakan GOA Buatan karena bentuknya terlihat terbuat dari pahatan-pahatan. Namun GOA ini dibuat pada zaman dahulu kala, dengan pembuktian terdapat angka jawa 1026 yang menunjukkan tahun di sekitar pahatan tersebut.Goa Suci diakatakan ditemukan sejak tahun 70an. Goa ini memiliki kedalaman sekitar 14 meter . dengan atap kerucut dan berlubang dengan dinding goa yang berundak-undak menambah kecantikan goa tersebut. Halaman sekitar goa juga cukup luas dan menarik buat anda berfoto-foto. Lebih indah lagi bila anda masuk didalam goa tersebut. Didalam goa juga memiliki halaman cukup luas untuk berfoto sendiri maupun bersama teman-teman waktu berkunjung. Keunikan goa terseut terletak pada pahatan-pahatan yang berundak-undak disekeliling dinding goa, selain itu jeunikan lain yaitu pancaran sinar matahari dari lubang goa yang dinamai goa suci tersebut.Apabila anda kesana usahakan pada waktu siang hari yang cerah, karena anda akan melihat keindahan sesunggguhnya, Yaitu pancaran matahari dari lorong GOA memberikan suasana dan pancaran nan indah. Sekitar jam 9 Pagi anda akan melihat panacaran dari samping Goa tersebut dan apabila anda berkunjung disana pas jam 12 siang maka pancaran tepat ditengah diatas Goa tersebut akan anda rasakan dengan penglihatan anda.Dimana Letak Wisata GOA Suci Tuban?..Secara administratif GOA Suci di Tuban Terletak di Dusun Suci, Desa Wagun, Kecamatan Palang, Kabupaten Tuban. Dari pusat kota Tuban menuju kecamatan Palang berjarak sekitar 12 km.Jika anda igin berkunjung ke goa ini, ada dua jalan yang bisa ditempuh, yakni dari jalur pantura (Tuban dan WBL) atau dari jalur selatan (kecamatan Widang dan Babat).Akses Menuju Wisata GOA Suci Tuban.Ada beberapa jalur untuk menuju ke lokasi, diantaranya :Apabila anda dari pusat kota Tuban langsung saja ke arah timur menuju kecamatan Palang, jaraknya sekitar 12 km. Selanjutnya sampai timur pasar Ngaglik kecamatan Palang, sebelum tugu perbatasan antar kabupaten Tuban-Lamongan belok kanan anda akan melewati jalan kampung yang menghubungkan kecamatan Palang dengan kecamatan Widang. Jarak antara pasar dengan desa Wangun, yang merupakan lokasi GOA Suci sekitar kurang lebih 15 menit dengan kendaraan bermotor. Selanjutnya anda akan menemui papan petunjuk menuju lokasi goa suci, ikuti saja arah penunjuk tersebut.Apabila anda dari kecamatan Widang yaitu Pasar Babat. Cari dan tuju SPBU Compreng, dari situ ke arah utara. Selanjutnya melewati 2 desa yaitu desa Mrutuk dan desa Mlangi. Untuk perjalanan menuju lokasi goa suci membutuhkan waktu sekitar setengah jam. Oh iya, Sebelum sampai di lokasi goa suci anda akan melewati hutan-hutan dan persawahan desa. Jangan Malu untuk bertanya pada orang-orang yang anda jumpai disekitar sana. Kalo anda malu bertanya malah tersesat nantinya. Toh pada umumnya masyarakat desa sangat ramah.Selain itu di tuban juga terdapat Goa Kancing yang tak kalah unik dengan goa suci.', 'goasuci.jpg'),
(14, '  Wisata Pantai Pasir Putih Remen Tuban yang Indah', '2016-05-22', 6, 1, 'Pantai Remen merupakan salah satu destinasi wisata bahari yang cukup menarik di Tuban, Jawa Timur. Pantai yang terletak di Desa Remen, Kecamatan Jenu, Tuban ini tak hanya memiliki keindahan pasir putih yang dihiasi pohon cemara saja. Namun, juga ada semacam danau yang menjorok sebelum ke laut ini membuat ciri khas dari pantai remen tuban ini.Pantai utara Bumi wali kota tuban pantai yang di resmiin sekitar bulan Januari 2015 ini masih unyu banget karna memang sangat di rawat oleh penduduk di sekitar pantai, kenapa di namakan pantai remen ya emang lokasinya di Desa remen kecamatan jenu, kalau kalian dari arah Bojonegoro-Lamongan-Tuban Ikuti jalan Pantura jalan raya Semarang Jenu Tuban.Saat memasuki lokasi pantai, akan langsung disuguhi pemandangan indah, berupa hamparan pasir putih yang melingkar menjorok ke laut, sehingga terbentuk sebuah telaga atau danau dengan arus air yang cukup tenang.Di telaga ini, biasanya digunakan untuk berenang atau hanya sekadar bermain air dan pasir. Di pantai ini sudah banyak ditemukan penjual makanan, minuman maupun oleh-oleh khas Tuban. Meski begitu, pantai ini sangat bersih tak ada sampah yang berserakan. Tampak tersedia tong-tong sampah di sekitar pantai. Karena memiliki pemandangan yang indah, tak sedikit yang menggunakan pantai ini sebagai obyek fotografi. Tarif untuk memasuki Pantai Pasir Putih Remen Tuban ini tidak mahal, dijamin tidak akan mengempeskan kantong, cukup dengan membayar biaya parkir sebagai tiket masuk senilai Rp.2.000 saja.', 'remen.jpg'),
(15, 'Pesona Pantai Sowan di Kabupaten Tuban', '2016-05-22', 6, 1, 'Pantai Sowan Tuban ini lokasinya terletak di perbatasan antara Propinsi Jawa Tengah dan Propinsi Jawa Timur, pada pinggir jalur Pantura. Sehingga, dapat ditempuh dengan menggunakan kendaraan umum dan pribadi. Secara administratif, Wana Wisata (WW) Pantai Sowan terletak di Dusun Sowan, Desa Bogorejo, Kecamatan Bancar, Kabupaten Tuban. Keadaannya yang dibiarkan apa adanya terkesan alami dan menawarkan seribu pesona keindahan. Ketika ombaknya berdeburan menyentuh batu karang dan rerumputan, menjadikan suasana wisata begitu nyaman untuk dinikmati. Kita juga bisa berteduh dan bersantai di bawah pohon dekat bibir pantai sambil merasakan sepoi angin. Pantai Sowan Tuban ini berada di bawah pengelolaan KPH Perhutani Tuban.Pantai Sowan Tuban ini berada di bawah pengelolaan KPH Perhutani Tuban. Meskipun masyarakat lebih mengenai obyek wisata setempat sebagai Pantai Sowan, namun di pintu gerbang masuk yang dijaga petugas tertulis Wana Wisata Sowan. Pantai ini memiliki luasan 32 hektar. Hamparan hutan yang subur nan hijau mengelilingi Pantai Sowan Tuban. Potensi alam inilah, yang kemudian dikunjungi wisatawan setempat dan berbagai kota di Jawa Timur melihat keindahan alamnya sekaligus menikmati aneka masakan laut yang ada. Dari rajungan sampai kepiting hingga ikan bakar segar disajikan dengan khas masakan Tuban. Pedas dan sedikit asin. Sehingga anda bisa menikmati wisata alam dan juga wisata kuliner sekaligus bila mengunjungi kawasan wisata Pantai Sowan Tuban.', 'pantaisowan.jpg'),
(16, ' Wisata Goa Akbar di Kabupaten Tuban', '2016-05-23', 1, 1, 'Goa Akbar Tuban terletak di Desa Gedongombo, Kecamatan Semanding, Kabupaten Tuban. Tepatnya terletak di belakang Pasar Baru Tuban. Goa Akbar memiliki luas 1 hektar dan mengandung kisah religi yang sangat tinggi. Diceritakan, dulu Sunan Bonang mengetahui goa ini atas ajakan Sunan Kalijaga yang saat itu masih dikenal sebagai Brandal Lokajaya.Goa Akbar dijadikan sebagai tempat tinggal Brandal Lokajaya setelah diusir oleh ayahnya, Wilotikto, Bupati Tuban ke-9. Ketika memasuki goa, Sunan Bonang terpesona dan seketika berucap &quot;Allahu Akbar&quot;. Sejak itulah goa yang terletak di tengah Kota Tuban itu disebut Goa Akbar.Dahulu goa ini sempat dilupakan dan menjadi tempat pembuangan sampah oleh masyarakat. Namun pada 1998, Pemkab Tuban berinisiatif membersihkan goa ini dan mengelolanya dengan baik.Kini goa ini diisi berbagai fasilitas. Jauh dari perkiraan wisatawan tentang goa yang gelap dan berbau kotoran kelelawar, kini di dalam goa telah dibangun jalur dari paving block yang dibatasi oleh pagar steinless steel. Ditambah dengan berbagai lampu hias yang menyinari stalagtit dan stalagmit. Pengunjung bisa menikmati indahnya bebatuan yang berwarna karena cahaya lampu hias dan bisa mengabadikannya dalam sebuah foto. Di dalam goa ini juga terdapat mushola untuk beribadah dan sebuah ruangan dengan tempat duduk yang bisa digunakan pengunjung untuk beristirahat sejenak. Setelah keluar dari Goa Akbar, terdapat pedagang-pedagang yang menjual berbagai makanan dan pakaian. Biasanya pakaian dalam motif batik gedhog khas Tuban.', 'goa_akbar1.jpg'),
(17, ' Wisata Green Lake Tuban (Danau Njowo-Samben)', '2016-05-23', 1, 1, 'Terlepas dari wisata air terjun di tuban juga terdapat nuansa alam berupa danau, namanya Danau Njowo. Danau ini terbuat dari bekas penambangan kapur. Yah, telah kita ketahui di bagian selatan kota tuban memang alam berupa pegunungan batu kapur. Oleh karena itu di tuban terdapat beberapa industri yang mengolah batu kapur baik sebagai material kumbung bahan bangunan &lt;strong&gt;maupun&lt;/strong&gt; untuk diolah sebagai semen.Danau Njowo-samben merupakan bekas galian tambang batu kapur. Kubangan yang terus menerus terkena air hujan sehingga membentuk sebuah danau.Danau Njowo , ada juga yang mengatakan kali malang. Danau ini memang bekas tambang eksploitasi alam, namun sekarang sudah bekas dan tak difungsikan sebagai penambangan. Keindahan yang dapat anda nikmati yaitu kesejukan alam pedesaan dan pastinya air danau yang warnannya hijau nan menawan sehingga mata anda akan dimanjakan bak seolah di sebuah green lake. Jadi tak perlu jauh-jauh keluar negeri, di wilayah tuban pun terdapat green lake loh.Selain warna air yang hijau, yang membuat keindahan lainya yaitu dinding bukit bekas galian yang menjulang tinggi dengan bekas kerukan alat tambang menambah keindahan danau ini.', 'gshf.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `nama`, `gambar`) VALUES
(1, 'Pantai Remen Tuban', 'remen.jpg'),
(2, 'Pantai Sowan Tuban', 'pantaisowan.jpg'),
(4, 'Goa Suci', 'gosucituban.jpg'),
(5, 'Pondok Perut Bumi Tuban', 'goaperut.jpg'),
(6, 'Air Terjun Ngelirip', 'air terjun-Ngelirip.jpg'),
(7, '  Air Terjun Gajahan', 'airterjungajahan.jpg'),
(8, 'Logo Smada', 'logo_smada.png'),
(9, ' Logo Tuban', 'logo_tuban.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(1, '  Kuliner'),
(2, 'Resto'),
(3, 'Seafood'),
(4, 'Cafe'),
(5, 'Tempat Wisata'),
(6, 'Pantai'),
(7, 'Hotel'),
(8, 'Alam'),
(9, 'Berita'),
(10, 'Informasi Umum'),
(11, 'Lowongan Pekerjaan'),
(12, 'Kesehatan'),
(13, 'Event Organizer'),
(14, 'Musik'),
(15, ' Sejarah &amp; Budaya'),
(16, 'News'),
(17, 'Goa'),
(18, 'Air Terjun');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `email`, `hp`, `pesan`) VALUES
(1, 'aaaaa', 'aaa@gmail.com', '', 'aaaa');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nama_login` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nama_login`, `username`, `password`) VALUES
(1, 'Ahmad Lufi Alfianul Ula', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, ' demo11', ' demo11', 'dd07256849f9bf011f8fc4658172e9e1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_login` (`id_login`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`),
  ADD CONSTRAINT `berita_ibfk_2` FOREIGN KEY (`id_login`) REFERENCES `login` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
