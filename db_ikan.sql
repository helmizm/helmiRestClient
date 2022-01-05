-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2022 at 09:22 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ikan`
--

-- --------------------------------------------------------

--
-- Table structure for table `ikanguppy`
--

CREATE TABLE `ikanguppy` (
  `id` int(11) NOT NULL,
  `nama_ikan` varchar(100) NOT NULL,
  `jenis_ikan` varchar(100) NOT NULL,
  `kualitas_air` varchar(3000) NOT NULL,
  `perawatan` varchar(3000) NOT NULL,
  `penyakit` varchar(3000) NOT NULL,
  `pengobatan` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ikanguppy`
--

INSERT INTO `ikanguppy` (`id`, `nama_ikan`, `jenis_ikan`, `kualitas_air`, `perawatan`, `penyakit`, `pengobatan`) VALUES
(5, 'Guppy (Poecilia Reticulata)', 'Platinum Blue Variasi Guppy (Lebistes Reticulatus)', 'Kualitas air yang baik untuk ikan guppy adalah air yang terdapat dari sumur, yang tidak mengandung kaporit, yang telah diendapkan selama 1 hari (24 jam),dengan suhu air 22 hingga 27 derajat celcius dan juga dengan ph air 6,5 hingga 7,5.', 'Menjaga kualitas air yang digunakan untuk memelihara ikan guppy termasuk suhu air dan ph air. Sering mengganti air minimal satu hingga dua minggu sekali. Buat serupa dengan habitat asli agar ikan guppy betah dan tidah mudah stress. Memberikan cahaya pada ikan guppy berupa lampu maupun sinar matahari agar ikan tumbuh dengan baik. Pemberian pakan pada ikan guppy ini sangat penting, tidak boleh terlalu banyak dan terlalu sedikit. Segera pisahkan ikan yang sakit dan berikan perawatan yang intensif, agar tidak menular ke ikan guppy yang lain. Pisahkan anakan ikan guppy dari induknya, agar tidak dimakan oleh induknya atau ikan guppy lainnya', 'White Spots – Ich (Ick) Mungkin masalah yang paling umum dalam hobi memelihara ikan hias adalah bintik-bintik putih (white spots), juga dikenal sebagai ich atau ick. Ick tidak mematikan jika dirawat tepat waktu. Ick sebenarnya disebabkan oleh ektoparasit (protozoa silia Ichthyophthirius multifiliis) dan sangat mudah dideteksi. Ikan mulai menggosokkan kulitnya pada batu, daun tanaman, hiasan, atau sisi akuarium. Mereka juga bisa kehilangan nafsu makan. Anda akan melihat bintik-bintik putih kecil di kulit dan sirip mereka.', 'Menyembuhkan ick tidak terlalu sulit. Ada berbagai obat, tetapi Anda juga bisa menggunakan garam ikan. Naikkan suhu air secara perlahan hingga 26 derajat Celsius. Tambahkan obat anti white spot/ick dalam dosis yang disarankan. Atau tambahkan garam ikan dengan rasio 1 sendok teh per 4 liter. Pertahankan tahap ini selama 4-7 hari. Turunkan suhu air perlahan-lahan sampai kembali normal.mLakukan pergantian air besar sekitar 70% dan sedot kotoran di substrat sebanyak mungkin. Anda dapat menyembuhkan ick di akuarium karantina tetapi Anda juga harus memberikan obat atau garam ke akuarium utama tempat ikan tersebut sakit.'),
(6, 'Guppy (Poecilia Reticulata)', 'Platinum Green Var Guppy (Lebistes Reticulatus)', 'Kualitas air yang baik untuk ikan guppy adalah air yang terdapat dari sumur, yang tidak mengandung kaporit, yang telah diendapkan selama 1 hari (24 jam),dengan suhu air 22 hingga 27 derajat celcius dan juga dengan ph air 6,5 hingga 7,5.', 'Menjaga kualitas air yang digunakan untuk memelihara ikan guppy termasuk suhu air dan ph air. Sering mengganti air minimal satu hingga dua minggu sekali. Buat serupa dengan habitat asli agar ikan guppy betah dan tidah mudah stress. Memberikan cahaya pada ikan guppy berupa lampu maupun sinar matahari agar ikan tumbuh dengan baik. Pemberian pakan pada ikan guppy ini sangat penting, tidak boleh terlalu banyak dan terlalu sedikit. Segera pisahkan ikan yang sakit dan berikan perawatan yang intensif, agar tidak menular ke ikan guppy yang lain. Pisahkan anakan ikan guppy dari induknya, agar tidak dimakan oleh induknya atau ikan guppy lainnya', 'Velvet (Oodinium) Penyakit velvet mirip dengan ick tetapi jarang terjadi di akuarium ikan hias. Tubuh ikan yang sakit ditutupi dengan titik-titik kecil berwarna emas (mirip dengan debu emas). Penyakit ini sangat menular dan dapat dengan cepat menyebar ke semua ikan Anda. Velvet sulit diperhatikan pada tahap awal karena titik-titiknya sangat kecil. Biasanya pemilik ikan baru menyadari penyakit ini ketika kulit ikan mulai mengelupas dan ikan mulai berdarah.', 'Jika ditemukan lebih awal, velvet dapat disembuhkan dengan obat yang mengandung tembaga seperti Seachem Cupramin. Untuk mendapatkan hasil terbaik, matikan lampu di akuarium sampai penyakitnya benar-benar sembuh. Lakukan penggantian air 70-90% setelah ikan Anda bebas dari gejala velvet.'),
(7, 'Guppy (Poecilia Reticulata)', 'Platinum Red Tail Guppy (Lebistes Reticulatus)', 'Kualitas air yang baik untuk ikan guppy adalah air yang terdapat dari sumur, yang tidak mengandung kaporit, yang telah diendapkan selama 1 hari (24 jam),dengan suhu air 22 hingga 27 derajat celcius dan juga dengan ph air 6,5 hingga 7,5.', 'Menjaga kualitas air yang digunakan untuk memelihara ikan guppy termasuk suhu air dan ph air. Sering mengganti air minimal satu hingga dua minggu sekali. Buat serupa dengan habitat asli agar ikan guppy betah dan tidah mudah stress. Memberikan cahaya pada ikan guppy berupa lampu maupun sinar matahari agar ikan tumbuh dengan baik. Pemberian pakan pada ikan guppy ini sangat penting, tidak boleh terlalu banyak dan terlalu sedikit. Segera pisahkan ikan yang sakit dan berikan perawatan yang intensif, agar tidak menular ke ikan guppy yang lain. Pisahkan anakan ikan guppy dari induknya, agar tidak dimakan oleh induknya atau ikan guppy lainnya', 'Busuk sirip dan ekor Sirip dan ekor yang membusuk adalah infeksi bakteri pada ikan guppy. Ini juga bisa disebabkan oleh jamur yang tumbuh di sirip yang digigit. Biasanya sirip dan ekor ikan yang sakit tampak seperti saling menempel. Kualitas air yang buruk dan luka bakar amonia juga dapat menyebabkan ekor membusuk.Penting untuk mengetahui apa yang menyebabkan sirip membusuk karena infeksi bakteri dan jamur berbeda cara perawatannya. Jika sirip dan ekor tidak mengalami kerusakan tetapi menunjukan tanda mulai membusuk yang jelas, kemungkinan besar itu disebabkan oleh bakteri.Jika sirip atau ekor rusak dan mulai membusuk, kemungkinan besar itu adalah jamur yang menyebabkan masalah.', 'Pisahkan ikan yang sakit di akuarium karantina. Infeksi bakteri bisa diobati dengan antibiotik seperti Maracyn, Maracyn 2, Tetracycline, atau Seachem ParaGuard. Bila itu adalah jamur, obati dengan obat khusus anti jamur dan selalu ikuti petunjuk. Jika ada “luka bakar amonia,” berikan ikan Anda air berkualitas tinggi. Sangat disarankan untuk merawat ikan sakit Anda di akuarium terpisah karena Anda tidak perlu menerapkan antibiotik atau obat untuk ikan yang sehat.'),
(8, 'Guppy (Poecilia Reticulata)', 'Platinum Blue Neon Guppy (Lebistes Reticulatus)', 'Kualitas air yang baik untuk ikan guppy adalah air yang terdapat dari sumur, yang tidak mengandung kaporit, yang telah diendapkan selama 1 hari (24 jam),dengan suhu air 22 hingga 27 derajat celcius dan juga dengan ph air 6,5 hingga 7,5.', 'Menjaga kualitas air yang digunakan untuk memelihara ikan guppy termasuk suhu air dan ph air. Sering mengganti air minimal satu hingga dua minggu sekali. Buat serupa dengan habitat asli agar ikan guppy betah dan tidah mudah stress. Memberikan cahaya pada ikan guppy berupa lampu maupun sinar matahari agar ikan tumbuh dengan baik. Pemberian pakan pada ikan guppy ini sangat penting, tidak boleh terlalu banyak dan terlalu sedikit. Segera pisahkan ikan yang sakit dan berikan perawatan yang intensif, agar tidak menular ke ikan guppy yang lain. Pisahkan anakan ikan guppy dari induknya, agar tidak dimakan oleh induknya atau ikan guppy lainnya', 'Penyakit Guppy (Protozoa) Protozoa adalah parasit kecil yang mempengaruhi terutama ikan guppy. Ini bisa juga berbahaya bagi ikan lain, tetapi ikan guppy adalah yang paling umum dinfeksi oleh parasit ini. Parasit menempel pada kulit ikan dan perlahan-lahan memasuki tubuh ikan melalui otot mereka sampai mencapai aliran darah. Parasit ini biasanya berkembang di akuarium tanpa heater/pemanas bersama dengan kualitas air yang buruk.', 'Pasang heater di akuarium Anda dan jaga suhu air tetap stabil. Pada tahap awal, Malachite Green atau Formalin dapat menyembuhkan penyakit ini.Pada tahap yang lebih lanjut, obat tembaga seperti Seachem Cupramine harus digunakan. Setelah perawatan, lakukan penggantian air parsial 50-70%. Anda dapat mencegah penyakit protozoa guppy dengan memanaskan air akuarium dan melakukan penggantian air parsial secara teratur.'),
(9, 'Guppy (Poecilia Reticulata)', 'Platinum Tuzedo Yellow Tail Guppy (Lebistes Reticulatus)', 'Kualitas air yang baik untuk ikan guppy adalah air yang terdapat dari sumur, yang tidak mengandung kaporit, yang telah diendapkan selama 1 hari (24 jam),dengan suhu air 22 hingga 27 derajat celcius dan juga dengan ph air 6,5 hingga 7,5.', 'Menjaga kualitas air yang digunakan untuk memelihara ikan guppy termasuk suhu air dan ph air. Sering mengganti air minimal satu hingga dua minggu sekali. Buat serupa dengan habitat asli agar ikan guppy betah dan tidah mudah stress. Memberikan cahaya pada ikan guppy berupa lampu maupun sinar matahari agar ikan tumbuh dengan baik. Pemberian pakan pada ikan guppy ini sangat penting, tidak boleh terlalu banyak dan terlalu sedikit. Segera pisahkan ikan yang sakit dan berikan perawatan yang intensif, agar tidak menular ke ikan guppy yang lain. Pisahkan anakan ikan guppy dari induknya, agar tidak dimakan oleh induknya atau ikan guppy lainnya', 'Columnaris dan Jamur Mulut Meskipun terlihat seperti jamur, infeksi ini sebenarnya disebabkan oleh bakteri. Koloni bakteri biasanya terbentuk di mulut ikan atau bagian tengah tubuh sebagai percikan putih besar. Ikan yang sakit sulit berenang karena infeksi lambat laun melumpuhkan otot mereka. Mereka juga kehilangan nafsu makan.Bakteri ini sangat menular dan sebagian besar memengaruhi guppy betina. Namun guppy jantan juga dapat terinfeksi jika penyakitnya tidak diobati. Penyakit ini bisa menular ke seluruh koloni ikan dalam sebuah akuarium.', 'Kunci keberhasilan untuk menyembuhkan Columnaris adalah memulai perawatan segera setelah Anda melihat gejala pertama.Anda dapat menggunakan antibiotik Maracyn atau Formalin (yang merupakan bahan kimia yang kuat) untuk menyembuhkan penyakit ini.Menambahkan garam ikan ke akuarium juga bisa efektif: lakukan penggantian air 50% dan tambahkan satu sendok teh garam per galon (4 liter) setiap hari selama 3 hari. Biarkan garam di dalam air sampai ikannya sembuh. Lakukan penggantian air besar 50-70%.Mandi kalium permanganat (KMnO4) selama 30 menit juga dapat menyembuhkan Columnaris. Lakukan perawatan ini dengan hati-hati. Kalium permanganat adalah zat pengoksidasi yang kuat dan Anda tidak boleh melebihi dosis 10mg/l dalam bak mandi karena ini dapat membakar ikan Anda.Hindari kepadatan penghuni ikan yang berlebih, lakukan penggantian air secara teratur, tambahkan filtrasi yang memadai, dan pastikan ada arus air dan aerasi yang baik di akuarium Anda untuk mencegah penyakit Columnaris dan jamur mulut.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ikanguppy`
--
ALTER TABLE `ikanguppy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ikanguppy`
--
ALTER TABLE `ikanguppy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
