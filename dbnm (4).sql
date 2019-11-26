-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 24, 2019 at 02:51 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbnm`
--

-- --------------------------------------------------------

--
-- Table structure for table `deskripsi_usaha`
--

CREATE TABLE `deskripsi_usaha` (
  `id` bigint(20) NOT NULL,
  `usaha_id` bigint(20) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deskripsi_usaha`
--

INSERT INTO `deskripsi_usaha` (`id`, `usaha_id`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1176, 7112, '<div class=\"dummy-positioning d-flex\">\r\n  \r\n  <div class=\"success-icon\">\r\n    <div class=\"success-icon__tip\"></div>\r\n    <div class=\"success-icon__long\"></div>\r\n  </div>\r\n  \r\n</div><div class=\"dummy-positioning d-flex\">\r\n  \r\n  <div class=\"success-icon\">\r\n    <div class=\"success-icon__tip\"></div>\r\n    <div class=\"success-icon__long\"></div>\r\n  </div>\r\n  \r\n</div>', '2019-11-18 08:36:05', '2019-11-18 08:36:05'),
(1893, 4432, 'laptop kjskahsjaskj', '2019-11-14 18:44:34', '2019-11-14 18:44:34'),
(1924, 6536, 'Jualan hewan buas sepeerti ulaar', '2019-11-14 06:01:37', '2019-11-14 06:01:37'),
(3824, 8381, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum sunt aspernatur, nesciunt possimus temporibus vitae aliquid veniam doloribus! Iusto minus amet doloribus quidem qui magni eveniet deserunt dolorum eum porro.\r\n    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum sunt aspernatur, nesciunt possimus temporibus vitae aliquid veniam doloribus! Iusto minus amet doloribus quidem qui magni eveniet deserunt dolorum eum porro.', '2019-11-11 05:05:43', '2019-11-11 05:05:43'),
(3825, 1599, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum sunt aspernatur, nesciunt possimus temporibus vitae aliquid veniam doloribus! Iusto minus amet doloribus quidem qui magni eveniet deserunt dolorum eum porro. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum sunt aspernatur, nesciunt possimus temporibus vitae aliquid veniam doloribus! Iusto minus amet doloribus quidem qui magni eveniet deserunt dolorum eum porro.', '2019-11-11 14:26:01', '0000-00-00 00:00:00'),
(3826, 5872, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum sunt aspernatur, nesciunt possimus temporibus vitae aliquid veniam doloribus! Iusto minus amet doloribus quidem qui magni eveniet deserunt dolorum eum porro. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum sunt aspernatur, nesciunt possimus temporibus vitae aliquid veniam doloribus! Iusto minus amet doloribus quidem qui magni eveniet deserunt dolorum eum porro.', '2019-11-11 14:26:01', '0000-00-00 00:00:00'),
(3827, 4157, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum sunt aspernatur, nesciunt possimus temporibus vitae aliquid veniam doloribus! Iusto minus amet doloribus quidem qui magni eveniet deserunt dolorum eum porro. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum sunt aspernatur, nesciunt possimus temporibus vitae aliquid veniam doloribus! Iusto minus amet doloribus quidem qui magni eveniet deserunt dolorum eum porro.', '2019-11-11 14:26:34', '0000-00-00 00:00:00'),
(3828, 9064, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum sunt aspernatur, nesciunt possimus temporibus vitae aliquid veniam doloribus! Iusto minus amet doloribus quidem qui magni eveniet deserunt dolorum eum porro. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum sunt aspernatur, nesciunt possimus temporibus vitae aliquid veniam doloribus! Iusto minus amet doloribus quidem qui magni eveniet deserunt dolorum eum porro.', '2019-11-11 14:26:34', '0000-00-00 00:00:00'),
(3829, 1478, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum sunt aspernatur, nesciunt possimus temporibus vitae aliquid veniam doloribus! Iusto minus amet doloribus quidem qui magni eveniet deserunt dolorum eum porro. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum sunt aspernatur, nesciunt possimus temporibus vitae aliquid veniam doloribus! Iusto minus amet doloribus quidem qui magni eveniet deserunt dolorum eum porro.', '2019-11-11 14:27:50', '0000-00-00 00:00:00'),
(3830, 3828, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum sunt aspernatur, nesciunt possimus temporibus vitae aliquid veniam doloribus! Iusto minus amet doloribus quidem qui magni eveniet deserunt dolorum eum porro. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum sunt aspernatur, nesciunt possimus temporibus vitae aliquid veniam doloribus! Iusto minus amet doloribus quidem qui magni eveniet deserunt dolorum eum porro.\r\n', '2019-11-11 14:27:50', '0000-00-00 00:00:00'),
(3873, 9299, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containi', '2019-11-11 10:27:51', '2019-11-11 10:27:51'),
(4047, 6180, 'Sirup ini perkaya oleh sari buah alami yang di hasilkan dari.............................................', '2019-11-16 08:07:39', '2019-11-16 08:07:39'),
(4240, 3222, 'Siapa sih yang tidak membutuhkan pas foto? hampir semua orang membutuhkan jasa cetak foto, karena foto merupakan salah satu dokumen penting untuk tiap individu saat ini. Ditambah zaman yang makin canggih, kebutuhan akan cetak foto sangat tinggi.\r\n\r\nUsaha cetak foto bisa anda lakukan di rumah, karena cetak foto bisa jadi usaha rumahan yang menjanjikan. Usaha cetak foto tidak memerlukan ruko yang besar dan mahal. Anda bisa memulainya di rumah.', '2019-11-11 09:00:37', '2019-11-11 09:00:37'),
(4267, 4677, 'ENak banget ini bro, monggo di cobain', '2019-11-14 06:02:45', '2019-11-14 06:02:45'),
(5026, 7378, 'Specifies whether the modal should have a dark overlay:\r\n\r\ntrue - dark overlay\r\nfalse - no overlay (transparent)\r\nIf you specify the value \"static\", it is not possible to close the modal when clicking outside of it', '2019-11-18 07:19:02', '2019-11-18 07:19:02'),
(5767, 8039, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containi', '2019-11-11 10:23:10', '2019-11-11 10:23:10'),
(7130, 4126, 'madu asli dari jember yang di perkaya oleh madu pilihan . telah dikelola sejak puluhan tahun', '2019-11-16 08:14:44', '2019-11-16 08:14:44'),
(7222, 7852, 'Makaroni iblis telah berjalan sejak tahun 2008 blablabla', '2019-11-11 09:15:05', '2019-11-11 09:15:05'),
(7708, 5588, 'lorem ipsum dolor sit amet \r\nlorem ipsum dolor sit amet\r\nlorem ipsum dolor sit ametlorem ipsum dolor sit ametlorem ipsum dolor sit ametlorem ipsum dolor sit ametlorem ipsum dolor sit ametlorem ipsum dolor sit ametlorem ipsum dolor sit ametlorem ipsum dolor sit ametlorem ipsum dolor sit amet', '2019-11-11 23:06:44', '2019-11-11 23:06:44'),
(7713, 5806, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, alias, fuga facere quod, ducimus voluptates voluptate suscipit ut a dicta optio quia dolore odio ipsum consequuntur at assumenda accusamus debitis?\r\nMolestiae quo magnam perferendis ipsum dolorem iure deserunt temporibus voluptate. Dolore itaque, consequuntur assumenda. Praesentium qui harum autem illo voluptatibus? Neque sequi hic, ullam doloribus fugiat assumenda deserunt asperiores possimus.', '2019-11-12 03:17:40', '2019-11-12 03:17:40'),
(7721, 5143, 'Komputer adalah alat yang dipakai untuk mengolah data menurut prosedur yang telah dirumuskan. Kata computer pada awalnya dipergunakan untuk menggambarkan orang yang perkerjaannya melakukan perhitungan', '2019-11-11 10:49:01', '2019-11-11 10:49:01'),
(8417, 6101, 'makaroninnnnnnnnnnnnnnnnnnnnnnnnnnnnn', '2019-11-11 09:38:35', '2019-11-11 09:38:35'),
(8418, 3828, 'Kerupuk akjkshjaksgjagdjksxdkjsxvjsxn', '2019-11-12 00:58:04', '0000-00-00 00:00:00'),
(8419, 6535, 'baju batik export dengan kualitas tinggi', '2019-11-13 21:26:21', '2019-11-13 21:26:21');

-- --------------------------------------------------------

--
-- Table structure for table `favorit`
--

CREATE TABLE `favorit` (
  `id` bigint(20) NOT NULL,
  `usaha_id` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favorit`
--

INSERT INTO `favorit` (`id`, `usaha_id`, `created_at`, `updated_at`) VALUES
(192, 4157, '2019-11-11 00:17:09', '2019-11-11 00:17:09'),
(214, 4432, '2019-11-14 18:49:37', '2019-11-14 18:49:37'),
(377, 3828, '2019-11-11 00:01:55', '2019-11-11 00:01:55'),
(608, 6180, '2019-11-16 08:20:25', '2019-11-16 08:20:25'),
(739, 1599, '2019-11-12 21:12:44', '2019-11-12 21:12:44'),
(803, 8381, '2019-11-11 05:07:37', '2019-11-11 05:07:37'),
(819, 1478, '2019-11-14 06:48:37', '2019-11-14 06:48:37');

-- --------------------------------------------------------

--
-- Table structure for table `humas_ptsp`
--

CREATE TABLE `humas_ptsp` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `humas_ptsp`
--

INSERT INTO `humas_ptsp` (`id`, `user_id`, `nama_lengkap`, `nip`, `foto`, `created_at`, `updated_at`) VALUES
(1226, 3877, 'Susi', '897899999999999', NULL, '2019-11-18 08:50:54', '2019-11-18 08:50:54'),
(1359, 9647, 'Arif Muarif', '7889090', NULL, '2019-11-18 15:08:49', '2019-11-18 08:08:49'),
(1717, 1305, 'Helen', '123456', NULL, '2019-11-18 08:04:47', '2019-11-18 08:04:47'),
(4122, 8544, 'dsfc', '345', NULL, '2019-11-18 08:52:29', '2019-11-18 08:52:29'),
(5239, 1660, 'Ayu Firda', '622222222222222', NULL, '2019-11-18 15:07:31', '2019-11-18 08:07:31'),
(5417, 2962, 'Erlangga Prasetya', '123456254222222', NULL, '2019-11-18 14:52:42', '2019-11-18 07:52:42'),
(7967, 3350, 'sas', '1234', NULL, '2019-11-18 08:54:46', '2019-11-18 08:54:46'),
(8809, 2574, 'nur dwi sofiana', '199907192017072', 'images_daging_ayam-goreng.jpg', '2019-11-24 13:49:02', '2019-11-24 06:49:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `id` bigint(20) NOT NULL,
  `wirausaha_id` bigint(20) NOT NULL,
  `usaha_id` bigint(20) NOT NULL,
  `isi` varchar(200) NOT NULL,
  `isread` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifikasi`
--

INSERT INTO `notifikasi` (`id`, `wirausaha_id`, `usaha_id`, `isi`, `isread`, `created_at`, `updated_at`) VALUES
(1613664, 89655, 1599, 'Usaha Usaha Ikan telah diverifikasi', 'no', '2019-11-11 08:17:15', '2019-11-11 08:17:15'),
(3250379, 30126, 8039, 'Usaha keripik tania Enak gak tuh ? hehe', 'no', '2019-11-14 05:19:01', '2019-11-14 05:19:01'),
(5395796, 30618, 5143, 'Usaha Komputerku telah diverifikasi', 'no', '2019-11-12 04:28:15', '2019-11-12 04:28:15'),
(6294527, 45126, 5588, 'Usaha LaptopKu telah diverifikasi', 'no', '2019-11-12 04:28:24', '2019-11-12 04:28:24'),
(6586149, 83636, 9299, 'Usaha Roti Angga foto ga jelas', 'no', '2019-11-12 04:28:49', '2019-11-12 04:28:49'),
(6938297, 89655, 6536, 'Usaha PetShops telah diverifikasi', 'no', '2019-11-16 08:15:44', '2019-11-16 08:15:44'),
(7289926, 72611, 6101, 'Usaha Makaroni telah diverifikasi', 'no', '2019-11-14 05:22:44', '2019-11-14 05:22:44'),
(8527109, 33708, 3222, 'Usaha Maskulin data yang dimasukkan salah atu tidak valid diharap untuk melengkapi', 'no', '2019-11-11 10:28:39', '2019-11-11 10:28:39'),
(8692687, 98089, 9064, 'Usaha Ikan Asin telah diverifikasi', 'no', '2019-11-11 01:37:50', '2019-11-11 01:37:50'),
(9535841, 92062, 5806, 'Usaha Kpi Lowak telah diverifikasi', 'no', '2019-11-12 21:14:08', '2019-11-12 21:14:08'),
(9995343, 89655, 5872, 'Usaha Taraos telah diverifikasi', 'no', '2019-11-11 10:16:21', '2019-11-11 10:16:21');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usaha`
--

CREATE TABLE `usaha` (
  `id` bigint(20) NOT NULL,
  `wirausaha_id` bigint(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `nama_usaha` varchar(200) NOT NULL,
  `alamat_usaha` varchar(200) NOT NULL,
  `website_usaha` varchar(200) DEFAULT NULL,
  `nilai_investasi` int(11) NOT NULL,
  `gambar_usaha` varchar(200) NOT NULL,
  `status_usaha` varchar(20) NOT NULL,
  `barang_yang_dijual` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usaha`
--

INSERT INTO `usaha` (`id`, `wirausaha_id`, `status`, `nama_usaha`, `alamat_usaha`, `website_usaha`, `nilai_investasi`, `gambar_usaha`, `status_usaha`, `barang_yang_dijual`, `created_at`, `updated_at`) VALUES
(1478, 89655, 'sudah', 'Bdak', 'Jalan Kebangsaaan', 'sadasd.com', 324343524, 'slip.png', 'tidak sewa', 'kerupuk', '2019-11-11 08:37:58', '2019-11-11 01:37:58'),
(1599, 89655, 'sudah', 'Usaha Ikan', '12sadsad', 'sadasd.com', 123123, '1abf80ae-d97b-4c58-ae6d-78d858c2d23a.jpeg', 'sewa', 'kerupuk', '2019-11-11 15:17:16', '2019-11-11 08:17:16'),
(3222, 33708, 'belum', 'Maskulin', 'Jalan Kebangsaaan', 'sadasd.com', 2000000, 'contoh-foto-USAHA.jpg', 'sewa', 'Kelontong', '2019-11-11 16:00:47', '2019-11-11 09:00:47'),
(3828, 89655, 'sudah', 'usaha kerupuk', 'Usaha Ikan', 'sadasd.com', 211221, 'sertif.png', 'tidak sewa', 'kerupuk', '2019-11-14 12:39:01', '2019-11-14 05:39:01'),
(4126, 75267, 'belum', 'Madu Jember', 'Jl Brawijaya 89 Jember', 'madu.com', 9000000, 'madu.jpg', 'sewa', 'madu', '2019-11-16 08:14:44', '2019-11-16 08:14:44'),
(4157, 89655, 'sudah', 'Usaha Ikan', 'Usaha Ikan', 'sadasd.com', 12312323, '0009012IMG-20160730-091855780x390.jpg', 'tidak sewa', 'kerupuk', '2019-11-14 12:39:08', '2019-11-14 05:39:08'),
(4432, 89655, 'sudah', 'Laptop', 'Jl Brawijaya 89 Jember', 'laptop.id', 4000000, 'komputer.jpg', 'sewa', 'laptop', '2019-11-15 01:46:38', '2019-11-14 18:46:38'),
(4677, 89655, 'belum', 'Terasi Udang', 'Puger nomor 12', 'komputer.it', 5646456, 'kedelai-edamame-oven-600x800.jpg', 'tidak sewa', 'makaroni', '2019-11-18 14:17:13', '2019-11-18 07:17:13'),
(5143, 30618, 'sudah', 'Komputerku', 'Jl Brawijaya 89 Jember', 'komputer.id', 90000000, 'komputer.jpg', 'milik sendiri', 'Komputer', '2019-11-12 11:28:15', '2019-11-12 04:28:15'),
(5588, 45126, 'sudah', 'LaptopKu', 'jalan karimata nomor 74', 'makaroni@com', 20000000, 'makaroni.webp', 'milik sendiri', 'Komputer', '2019-11-12 11:28:24', '2019-11-12 04:28:24'),
(5806, 92062, 'sudah', 'Kpi Lowak', 'jl jawa no 45', 'keripik.com', 200000, 'coffee_bike_.jpg', 'sewa', 'kopi', '2019-11-13 04:14:08', '2019-11-12 21:14:08'),
(5872, 89655, 'sudah', 'Taraos', 'Jalan Kebangsaaan', 'sadasd.com', 233223, 'install-virtual-box-ubuntu-debian-ft.jpg', 'tidak sewa', 'kerupuk', '2019-11-11 17:16:21', '2019-11-11 10:16:21'),
(6101, 72611, 'sudah', 'Makaroni', 'jl jawa no 45', 'makaroni@com', 90000000, 'makaron.jpg', 'sewa', 'makaroni ib', '2019-11-14 12:22:44', '2019-11-14 05:22:44'),
(6180, 75267, 'sudah', 'Sirup Alam', 'Jl. Letjen Suprapto 23 Jember', NULL, 8000000, 'sirup.jpg', 'milik sendiri', 'Sirup', '2019-11-16 15:11:17', '2019-11-16 08:11:17'),
(6535, 77184, 'sudah', 'baju', 'jl nias 3', 'baju.com', 9000000, 'batik.jpg', 'milik sendiri', 'baju batik', '2019-11-14 04:28:26', '2019-11-13 21:28:26'),
(6536, 89655, 'sudah', 'PetShops', 'Jalan Rotawu', 'komputer.id', 400000, 'ee.png', 'sewa', 'bbbb', '2019-11-16 15:15:44', '2019-11-16 08:15:44'),
(7112, 89655, 'belum', 'Makaroni Keju', 'Jl Brawijaya 89 Jember', 'makaroni@com', 32222, 'makaron.jpg', 'sewa', 'makaroni', '2019-11-18 08:36:06', '2019-11-18 08:36:06'),
(7378, 89655, 'belum', 'Terasi Urangs', 'Jl Brawijaya 89 Jember', 'makaroni@com', 2330000, 'makaron.jpg', 'sewa', 'makaroni ib', '2019-11-18 15:37:15', '2019-11-18 08:37:15'),
(7852, 30126, 'sudah', 'Makaroni Iblis', 'jl jawa no 45', 'makaroni@com', 800000, 'makaron.jpg', 'milik sendiri', 'makaroni ib', '2019-11-12 11:38:27', '2019-11-12 04:38:27'),
(8039, 30126, 'belum', 'keripik tania', 'jl anggrek no 20 semboro', 'keripik.com', 800000, 'keripik.png', 'sewa', 'keripik', '2019-11-11 10:23:10', '2019-11-11 10:23:10'),
(8381, 89655, 'sudah', 'Minyak Dedak', 'Usaha Ikan', 'sadasd.com', 233111, 'peluang-usaha-minyak-goreng.jpg', 'milik sendiri', 'kerupuk', '2019-11-11 12:06:12', '2019-11-11 05:06:12'),
(9064, 98089, 'sudah', 'Ikan Asin', 'Jalan Kebangsaaan', 'sadasd.com', 1200000, 'Screenshot from 2019-08-05 17-07-42.png', 'tidak sewa', 'kerupuk', '2019-11-11 08:37:50', '2019-11-11 01:37:50'),
(9299, 83636, 'belum', 'Roti Angga', 'jalan karimata nomor 99', 'roti.com', 800000000, 'roti.jpg', 'milik sendiri', 'roti', '2019-11-11 10:27:51', '2019-11-11 10:27:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$p00ri2.U5gSmh/jJk0A2reFbIL5ckXyghTlhxKkVrM6tbijcBWJ1i', NULL, NULL, NULL),
(1047, 'wirausahawan', 'muhammad syarif', 'arif@gmail.com', NULL, '$2y$10$CsUMuGyea35PDWbO0fs4leHfqJFoFhBbmxESFMWBN.1GFycanQfy6', NULL, '2019-11-10 07:57:34', '2019-11-10 07:57:34'),
(1305, 'humas', 'Helen', 'sssdsa@gmail.com', NULL, '$2y$10$3/x6mHnXNowDWZehxcpM6O667HaWXAdvbW/LiWCiCJz/8n4ULK9SO', NULL, '2019-11-18 08:04:48', '2019-11-18 08:04:48'),
(1660, 'humas', 'Ayu Firda', 'ayg@gmail.com', NULL, '$2y$10$hn8ymkVNbmf/2zRHBSJ8R.7iSr3VvjOUJ4bPLYdfqdgN3EWVr/ECi', NULL, '2019-11-18 08:04:03', '2019-11-18 08:07:31'),
(1880, 'wirausahawan', 'Mahrus', 'mh@gmail.com', NULL, '$2y$10$amHompyR2vbDgao0Pt7KuOcklYAkIzOHxXX79KI44uS0bEO6glUQC', NULL, '2019-11-12 03:15:56', '2019-11-12 03:15:56'),
(2271, 'wirausahawan', 'Muhammad Firman', 'fmfm@gma.com', NULL, '$2y$10$CZa5FHxf40yrWedCQj6As.sa5f4hHxAhB7bV13OZfyUi3ARUDT6MS', NULL, '2019-11-18 08:15:38', '2019-11-18 08:15:38'),
(2506, 'wirausahawan', 'titania', 'adminzz@gmail.com', NULL, '$2y$10$jdpkJd8ztol.Qq91AQJRjesDgv5.a/S.DnE37vP9ZwGXTb968FzB.', NULL, '2019-11-11 23:01:30', '2019-11-11 23:01:30'),
(2518, 'wirausahawan', 'Ayu Firda', 'er@gmail.com', NULL, '$2y$10$IsCKjswmoZDyWhygRfn3/.Je6mOMmkua9HLXF6zkPHLTZ2zbOAAEO', NULL, '2019-11-11 08:11:04', '2019-11-11 08:11:04'),
(2574, 'humas', 'nur dwi sofiana', 'nds@gmail.com', NULL, '$2y$10$vWD5.cUS/7NrznCVW8TGX.vhKy6q/96loBK45BYlCsM79f78WI44S', NULL, '2019-11-21 21:02:18', '2019-11-24 06:49:02'),
(2713, 'wirausahawan', 'Erlangga Prasetya', 'fmfm@gmail.com', NULL, '$2y$10$XxQijCctnZ03fNB/.1g5Hu5vw2V7w8SbDeoyfxNs.nvgXNYWd7166', NULL, '2019-11-18 08:17:39', '2019-11-18 08:17:39'),
(2962, 'humas', 'Erlangga Prasetya', 'aggagag@gmail.com', NULL, '$2y$10$XEh9TNmhswWXxXKpZQ0BO.wYYZ1idpqH2i/ub2jv.a5VUFsnZ/XrG', NULL, '2019-11-18 07:44:28', '2019-11-18 07:52:42'),
(3145, 'wirausahawan', 'as', 'b@gmail.com', NULL, '$2y$10$OTa4crwhWq5JxRtPdQO8b.WQlxAX55hQ3oydYnvSb9G2NWPyacIuK', NULL, '2019-11-10 02:26:11', '2019-11-10 02:26:11'),
(3252, 'wirausahawan', 'Tesya', 't@gmail.cmoom', NULL, '$2y$10$p2q5XBZAcNUJ73Q205RjdOi0eNiRL3Ly6Lwre9tgyPkI2ilAmw2rW', NULL, '2019-11-11 01:21:46', '2019-11-11 01:21:46'),
(3350, 'humas', 'sas', 'titaniaoktaviani@gmail.com', NULL, '$2y$10$PvBPSG/h2zBJptubW/JOQeGBJHqhE2qdwFfdCvPJjP/Ht.C7zjRI2', NULL, '2019-11-18 08:54:46', '2019-11-18 08:54:46'),
(3681, 'wirausahawan', 'titania', 'titan@gmail.com', NULL, '$2y$10$PEVUZhIM5zKTP4qAYgQhuOj2VbLUjlISEmVOOwI9P1UUXrQH4KFvi', NULL, '2019-11-11 09:12:48', '2019-11-11 09:12:48'),
(3716, 'wirausahawan', 'Erlangga Prasetya', 'adminaa@gmail.com', NULL, '$2y$10$p/jknOhFH0dYw2vVlQVbNOCxma/O3TxsrNMlMYdxCfJGhslt3zePK', NULL, '2019-11-11 23:05:39', '2019-11-11 23:05:39'),
(3877, 'humas', 'Susi', 'susi@yahoo.com', NULL, '$2y$10$0HuNVPBrn313eUNtKRZf0uPRkOav9Pd3oupj4z40Yjn6o977pYsX.', NULL, '2019-11-18 08:50:54', '2019-11-18 08:50:54'),
(5301, 'wirausahawan', 'ermanu', 'er1111@gmail.comasd', NULL, '$2y$10$.X48YVb4SeF.vCB8/48dCu1unvZixDKsyZXgcx7CkiXvCK981n1yG', NULL, '2019-11-11 00:52:48', '2019-11-11 00:52:48'),
(5500, 'wirausahawan', 'manu', 'manu@gmail.com', NULL, '$2y$10$8R7ZaSM3qQXEXgFFE1v5G.6uclO/pqXALyaxmv7d/zsjfzic4kq5O', NULL, '2019-11-11 00:52:06', '2019-11-11 00:52:06'),
(5946, 'wirausahawan', 'Angga Wicaksono', 'ag@gmail.com', NULL, '$2y$10$SJJltu.Bj/F1gpbiZLVlAeRlqEJ8SfHLU0KE102T0KUUD7fQuApKW', NULL, '2019-11-09 20:50:04', '2019-11-22 18:56:07'),
(6423, 'wirausahawan', 'Titania Oktaviani', 'titaniawicaksono@gmail.com', NULL, '$2y$10$I/fF90TDFHkjgf7W94WDcO4DO.UWAXpYuOp7.mI7Pe8oDZO5dcSDi', NULL, '2019-11-11 10:45:48', '2019-11-11 10:45:48'),
(6789, 'wirausahawan', 'Fakrudin', 'fff@gmail.com', NULL, '$2y$10$I5ZzKUhDkV5ZEETZrUkXMOgXXBxYV./084g/ymTkzrJyfBjLs3Rl6', NULL, '2019-11-14 04:00:55', '2019-11-14 04:00:55'),
(6874, 'wirausahawan', 'Erlangga Prasetya', 'bebbbeb@gmail.com', NULL, '$2y$10$4w6JdpknLP7J/YrxSyU03OuSy8EBXm/ZIWH3WlmsTyta/rgaeru0a', NULL, '2019-11-11 22:59:04', '2019-11-11 22:59:04'),
(6964, 'wirausahawan', 'Titania Ayunda', 'ayund@gmail.com', NULL, '$2y$10$1xOkF74jkMW1HQvkmZyimu8Rj4yH8wt3GyIwIj8Eaipu4FpxttP76', NULL, '2019-11-11 01:00:31', '2019-11-11 01:00:31'),
(7063, 'wirausahawan', 'Magfiroh', 'amg@gmail.com', NULL, '$2y$10$VelgYiMJsKiJph7ERi3LgeLnnL380RQPELn4.6kyR3PFr8wXFOMKO', NULL, '2019-11-14 04:03:38', '2019-11-14 04:03:38'),
(7183, 'wirausahawan', 'asd', 'alfian000000@gmail.coma', NULL, '$2y$10$mX/6F1uEtnTCj7/1Lz8onesE3gH.7dz.qg/BS952m8WILUK4RWLgq', NULL, '2019-11-11 07:18:53', '2019-11-11 07:18:53'),
(7318, 'wirausahawan', 'Yunita Dwi', 'yunita@gmail.com', NULL, '$2y$10$ubFFsq1pLVtEWM5w3L6wLO1PaBVWjx.rjPImGKrZCcv0u4YVh73ya', NULL, '2019-11-16 07:48:11', '2019-11-16 07:48:11'),
(7326, 'wirausahawan', 'kont', 'er@gmaasil.com', NULL, '$2y$10$MsQtPg6zTsfo/vi2XFrbO.gbW4oCXH/ghL0WKqo6rx6MSEK8oWsjS', NULL, '2019-11-11 02:50:18', '2019-11-11 02:50:18'),
(7428, 'wirausahawan', 'Helen', 'helen@gmail.com', NULL, '$2y$10$I/COAT3HWL3VZJq0N9Mi9.0janUOohlVc2Wx4./fnrrrRjeRhTcry', NULL, '2019-11-11 09:37:16', '2019-11-11 09:37:16'),
(7999, 'wirausahawan', 'Anjas Tirto', 'anjas@gmail.com', NULL, '$2y$10$h6s/mMVb7aM/TuEfMguWB.Sk5NUQQxYzVtp23tyhXc7ryvUnRo5sq', NULL, '2019-11-14 17:44:47', '2019-11-14 17:44:47'),
(8121, 'wirausahawan', 'titan k', 'bca@gmail.comanjay', NULL, '$2y$10$F39RDvPhnKHNZvq5ki1Ri.sWa9i715cktttpWlacQK2X8yS5/.nxC', NULL, '2019-11-11 07:14:50', '2019-11-11 07:14:50'),
(8445, 'wirausahawan', 'Firmansyah Wahyu', 'f@gmail.com', NULL, '$2y$10$JEmnc4jn7YoFcH0dEDwDNOGS895ujqFXOwESIR6UG0wybh2GGGgjq', NULL, '2019-11-11 08:58:07', '2019-11-11 08:58:07'),
(8544, 'humas', 'dsfc', 'hkask@hskajsk', NULL, '$2y$10$MyQNVUmEptu/EKnz3mn9keml2CnGIZlK/Hgqb7h9F/jiMGCu9o4O2', NULL, '2019-11-18 08:52:29', '2019-11-18 08:52:29'),
(8609, 'wirausahawan', 'Erlangga', 'angga123@gmail.com', NULL, '$2y$10$an2UrQTP7IKMYB2sCx3PKO/5oyi3Xv/ti8WN6I4zbcrBKB3tKzglW', NULL, '2019-11-11 10:25:37', '2019-11-11 10:25:37'),
(8825, 'wirausahawan', 'nur dwi sofiana', 'nurdwi@gmail.com', NULL, '$2y$10$FYJpXz7tnzx0u//4WVvjt.O1DqDWom/T8MK61GGWByoH7iAAosldq', NULL, '2019-11-11 08:07:15', '2019-11-11 08:07:15'),
(8980, 'wirausahawan', 'Helen', 'titan123123@gmail.com', NULL, '$2y$10$SyyQIDu3w3vUA22brln94ua7QlgGF0DtVtIS2W.dqyoR5GY.MLCH6', NULL, '2019-11-12 03:07:48', '2019-11-12 03:07:48'),
(9565, 'wirausahawan', 'ayufa', 'ayufa@gmail.com', NULL, '$2y$10$jMLvtnwd1L58wuoItFhDGu95d6q.xuiaRKwKvka/3xa.veL.091q6', NULL, '2019-11-13 21:23:35', '2019-11-13 21:23:35'),
(9647, 'humas', 'Arif Muarif', 'aaaff@gmail.com', NULL, '$2y$10$NMdp6IBGncsoXgMiihS.VOb8FmMcRoO2mPDxxPQyy7xhbAOue2DfG', NULL, '2019-11-18 07:43:17', '2019-11-18 08:08:49'),
(9882, 'wirausahawan', 'Jamilla', 'jml@gmail.com', NULL, '$2y$10$aSKHgKT.oRDidtyzs8G6g.zHzoiDX2U1jDsttvR7CY7mn326Om3JG', NULL, '2019-11-14 04:05:43', '2019-11-14 04:05:43');

-- --------------------------------------------------------

--
-- Table structure for table `wirausaha`
--

CREATE TABLE `wirausaha` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `nohp` varchar(200) NOT NULL,
  `noktp` varchar(200) NOT NULL,
  `nonpwp` varchar(200) NOT NULL,
  `bpjs_ketenagakerjaan` varchar(200) NOT NULL,
  `bpjs_kesehatan` varchar(200) NOT NULL,
  `foto_npwp` varchar(200) NOT NULL,
  `foto_ktp` varchar(200) NOT NULL,
  `foto_bpjs_ketenagakerjaan` varchar(200) NOT NULL,
  `foto_bpjs_kesehatan` varchar(200) NOT NULL,
  `foto_formal` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wirausaha`
--

INSERT INTO `wirausaha` (`id`, `user_id`, `nama_lengkap`, `username`, `nohp`, `noktp`, `nonpwp`, `bpjs_ketenagakerjaan`, `bpjs_kesehatan`, `foto_npwp`, `foto_ktp`, `foto_bpjs_ketenagakerjaan`, `foto_bpjs_kesehatan`, `foto_formal`, `created_at`, `updated_at`) VALUES
(19196, 2271, 'Muhammad Firman', '17241010', '087888999678', '7654123416678990', '664229762405000', '12345678909', '08978987899', 'berhasil mengajukan usaha.png', 'o.png', 'fotoku.png', 'bpjs kesehatan.JPG', 'bpjs ketenagakerjaan.jpg', '2019-11-18 08:15:37', '2019-11-18 08:15:37'),
(21740, 7183, 'asd', 'asxzx', '0822756756', '2133333333333333', '333333333333333', '33333333333', '33333333333', 'Screenshot from 2019-08-06 13-31-08.png', 'Screenshot from 2019-08-06 12-00-56.png', 'Screenshot from 2019-08-10 08-37-56.png', 'Screenshot from 2019-08-08 10-55-21.png', 'install-virtual-box-ubuntu-debian-ft.jpg', '2019-11-11 15:13:37', '2019-11-11 07:18:53'),
(24398, 6789, 'Fakrudin', '17241010', '7654131254678', '7654123416678990', '664229762405000', '12345678909', '00011465738', 'bpjs kesehatan.JPG', 'Scan KTP.JPG', 'fotoku.png', 'm.png', 'bpjs kesehatan.JPG', '2019-11-14 04:00:54', '2019-11-14 04:00:54'),
(30126, 3681, 'titania', 'titan', '085777888555', '3174096112900001', '664229762405000', '12345678909', '00011465738', 'contoh-NPWP.jpg', 'Screenshot from 2019-08-06 12-00-56.png', 'Screenshot from 2019-08-10 08-37-56.png', 'Screenshot from 2019-08-08 10-55-21.png', 'install-virtual-box-ubuntu-debian-ft.jpg', '2019-11-12 09:49:46', '2019-11-11 09:12:48'),
(30618, 6423, 'Titania Oktaviani', 'tania', '089676456545', '3174096112900006', '664229762405099', '12345678909', '00011465738', 'contoh-NPWP.jpg', 'Screenshot from 2019-08-06 12-00-56.png', 'Screenshot from 2019-08-10 08-37-56.png', 'Screenshot from 2019-08-08 10-55-21.png', 'install-virtual-box-ubuntu-debian-ft.jpg', '2019-11-12 09:49:40', '2019-11-11 10:45:48'),
(33708, 8445, 'Firmansyah Wahyu', 'alfa', '08912213312', '2133333333333333', '333333333333333', '33333333333', '33333333333', 'contoh-NPWP.jpg', 'contoh-ktp.jpeg', 'Screenshot from 2019-08-10 08-37-56.png', 'contoh-bpjs-KETENAGAKERJAAN.jpg', 'contoh-bpjs-KESEHATAN.jpg', '2019-11-12 09:46:04', '2019-11-11 08:58:06'),
(39338, 7326, 'kont', 'alfian27', '08912213312', '2133333333333333', '333333333333333', '22222222222', '33333333333', 'Screenshot from 2019-08-06 13-31-08.png', 'Screenshot from 2019-08-06 12-00-56.png', 'Screenshot from 2019-08-10 08-37-56.png', 'Screenshot from 2019-08-08 10-55-21.png', 'install-virtual-box-ubuntu-debian-ft.jpg', '2019-11-11 15:13:35', '2019-11-11 02:50:17'),
(40367, 3252, 'Tesya', 'annn', '08912213312', '1111111111111111', '222222222222222', '33333333333', '33333333333', 'Screenshot from 2019-08-06 13-31-08.png', 'Screenshot from 2019-08-06 12-00-56.png', 'Screenshot from 2019-08-10 08-37-56.png', 'Screenshot from 2019-08-08 10-55-21.png', 'install-virtual-box-ubuntu-debian-ft.jpg', '2019-11-11 15:13:33', '2019-11-11 01:21:46'),
(45126, 3716, 'Erlangga Prasetya', 'titan', '085777888555', '3174096112900001', '664229762405000', '12345678909', '00011465738', 'bpjs ketenagakerjaan.jpg', 'bpjs kesehatan.JPG', 'Scan KTP.JPG', 'bpjs kesehatan.JPG', 'fotoku.png', '2019-11-11 23:05:38', '2019-11-11 23:05:38'),
(48772, 2713, 'Erlangga Prasetya', '17241010', '087666777888', '7654123416678990', '664229762405000', '12345678909', '00011465738', 'batik.jpg', 'berhasil mengajukan usaha.png', 'fotoku.png', 'e5.png', 'e8.png', '2019-11-18 08:17:39', '2019-11-18 08:17:39'),
(49522, 7999, 'Anjas Tirto', 'anjas', '087678999876', '3154096112900001', '664229762405000', '12345678909', '00011465738', 'npwp.jpg', 'ktpp.jpg', 'fotoku.png', 'bpjs ketenagakerjaan.jpg', 'bpjs kesehatan.JPG', '2019-11-14 17:44:47', '2019-11-14 17:44:47'),
(49527, 8980, 'Helen', 'titan123', '085777888555', '3174096112900001', '664229762405000', '12345678909', '00011465738', 'berhasil mengajukan usaha.png', '3.png', 'berhasil mengajukan usaha.png', '3.png', 'bpjs ketenagakerjaan.jpg', '2019-11-12 03:07:48', '2019-11-12 03:07:48'),
(52940, 5500, 'manu', 'sdfsdf', '08912213312', '2133333333333333', '333333333333333', '33333333333', '33333333333', 'Screenshot from 2019-08-06 13-31-08.png', 'Screenshot from 2019-08-06 12-00-56.png', 'Screenshot from 2019-08-10 08-37-56.png', 'Screenshot from 2019-08-08 10-55-21.png', 'install-virtual-box-ubuntu-debian-ft.jpg', '2019-11-11 15:13:31', '2019-11-11 00:52:05'),
(72611, 7428, 'Helen', 'helen', '087666777888', '3174096112900007', '664229762405099', '08978987877', '00011465767', 'contoh-NPWP.jpg', 'Screenshot from 2019-08-06 12-00-56.png', 'Screenshot from 2019-08-10 08-37-56.png', 'Screenshot from 2019-08-08 10-55-21.png', 'install-virtual-box-ubuntu-debian-ft.jpg', '2019-11-12 09:49:50', '2019-11-11 09:37:15'),
(75267, 7318, 'Yunita Dwi', 'yunita', '0878888999999', '3174096112900006', '664229762405000', '12345678909', '67777777666', 'npwp.jpg', 'Scan KTP.JPG', 'poto.jpg', 'bpjs ketenagakerjaan.jpg', 'bpjs kesehatan.JPG', '2019-11-16 07:48:10', '2019-11-16 07:48:10'),
(75678, 5301, 'ermanu', 'zzx', '0822756756', '2133333333333333', '222222222222222', '22222222222', '33333333333', 'Screenshot from 2019-08-06 13-31-08.png', 'Screenshot from 2019-08-06 12-00-56.png', 'Screenshot from 2019-08-10 08-37-56.png', 'Screenshot from 2019-08-08 10-55-21.png', 'install-virtual-box-ubuntu-debian-ft.jpg', '2019-11-11 15:13:29', '2019-11-11 00:52:47'),
(77184, 9565, 'ayufa', 'ayufa', '7654131254678', '7654123416678990', '762542534278765', '98762543628', '98762224531', 'npwp.jpg', 'Scan KTP.JPG', 'fotoku.png', 'bpjs ketenagakerjaan.jpg', 'bpjs kesehatan.JPG', '2019-11-13 21:23:35', '2019-11-13 21:23:35'),
(78913, 6874, 'Erlangga Prasetya', 'anggatik', '085777888555', '3174096112900001', '664229762405000', '12345678909', '00011465738', 'contoh-NPWP.jpg', 'Screenshot from 2019-08-06 12-00-56.png', 'Screenshot from 2019-08-10 08-37-56.png', 'Screenshot from 2019-08-08 10-55-21.png', 'install-virtual-box-ubuntu-debian-ft.jpg', '2019-11-12 09:49:54', '2019-11-11 22:59:04'),
(81028, 8825, 'nur dwi sofiana', 'asaszxzx', '0822756756', '1111111111111111', '111111111111111', '11111111111', '11111111111', 'Screenshot from 2019-08-06 13-31-08.png', 'Screenshot from 2019-08-06 12-00-56.png', 'Screenshot from 2019-08-10 08-37-56.png', 'Screenshot from 2019-08-08 10-55-21.png', 'install-virtual-box-ubuntu-debian-ft.jpg', '2019-11-11 15:13:25', '2019-11-11 08:07:15'),
(83636, 8609, 'Erlangga', 'anggatik', '087888999678', '3174096112900008', '664229762405000', '12345678909', '00011465738', 'contoh-NPWP.jpg', 'Screenshot from 2019-08-06 12-00-56.png', 'Screenshot from 2019-08-10 08-37-56.png', 'Screenshot from 2019-08-08 10-55-21.png', 'install-virtual-box-ubuntu-debian-ft.jpg', '2019-11-12 09:50:00', '2019-11-11 10:25:37'),
(84582, 9882, 'Jamilla', '17241010', '7654131254678', '3174096112900006', '664229762405099', '12345678909', '00011465738', '3.png', '1.png', 'jp.png', 'berhasil mengajukan usaha.png', 'e6.png', '2019-11-14 04:05:43', '2019-11-14 04:05:43'),
(87605, 7063, 'Magfiroh', '17241010', '0876777867888', '3174096112900006', '664229762405099', '12345678909', '00011465738', 'bpjs kesehatan.JPG', 'g.png', 'fotoku.png', 'bpjs ketenagakerjaan.jpg', 'bpjs kesehatan.JPG', '2019-11-14 04:03:38', '2019-11-14 04:03:38'),
(88209, 2518, 'Ayu Firda', 'ayuf', '0891221331', '1111111111111111', '222222222222222', '22222222222', '33333333333', 'Screenshot from 2019-08-06 13-31-08.png', 'Screenshot from 2019-08-06 12-00-56.png', 'Screenshot from 2019-08-10 08-37-56.png', 'Screenshot from 2019-08-08 10-55-21.png', 'install-virtual-box-ubuntu-debian-ft.jpg', '2019-11-11 08:11:03', '2019-11-11 08:11:03'),
(89135, 6964, 'Titania Ayunda', 'ayunda', '087888999000', '5555555555555555', '66666666666666b', '9999999999k', '99999999999', 'Screenshot from 2019-08-06 13-31-08.png', 'Screenshot from 2019-08-06 12-00-56.png', 'Screenshot from 2019-08-10 08-37-56.png', 'Screenshot from 2019-08-08 10-55-21.png', 'install-virtual-box-ubuntu-debian-ft.jpg', '2019-11-11 15:13:20', '2019-11-11 01:00:31'),
(89655, 5946, 'Angga Wicaksono', 'Angga01', '0822756756', '2133333333334533', '123242342343231', '32423364575', '54601231254', '1565755154_Screenshot from 2019-08-13 10-43-22.png', '1571478157_Screenshot from 2019-10-06 10-40-36 (1).png', '1.Beranda.jpg', '1568299988_Screenshot from 2019-08-14 13-58-10.png', 'anoman1.jpg', '2019-11-23 01:56:07', '2019-11-22 18:56:07'),
(90825, 8121, 'titan k', 'taufan@g', '0822756756', '2133333333333333', '333333333333333', '33333333333', '33333333333', 'Screenshot from 2019-08-06 13-31-08.png', 'Screenshot from 2019-08-06 12-00-56.png', 'Screenshot from 2019-08-10 08-37-56.png', 'Screenshot from 2019-08-08 10-55-21.png', 'install-virtual-box-ubuntu-debian-ft.jpg', '2019-11-11 15:13:22', '2019-11-11 07:14:50'),
(92062, 1880, 'Mahrus', '17241010', '085777888555', '3174096112900001', '664229762405000', '12345678909', '00011465738', 'e3.png', 'Scan KTP.JPG', 'E2.png', 'ee.png', 'bpjs ketenagakerjaan.jpg', '2019-11-12 03:15:56', '2019-11-12 03:15:56'),
(93133, 2506, 'titania', '17241010', '085777888555', '3174096112900001', '664229762405099', '08978987899', '08978987899', 'contoh-NPWP.jpg', 'Screenshot from 2019-08-06 12-00-56.png', 'C:\\Users\\titania oktaviani\\AppData\\Local\\Temp\\php6DE0.tmp', 'Screenshot from 2019-08-08 10-55-21.png', 'install-virtual-box-ubuntu-debian-ft.jpg', '2019-11-12 09:50:13', '2019-11-11 23:01:30'),
(93934, 3145, 'as', 'veve', '0822756756', '2222222222222222', '111111111111111', '33333333333', '33333333333', '', '', '', '', '', '2019-11-10 02:26:11', '2019-11-10 02:26:11'),
(98089, 1047, 'muhammad syarif', 'afdsafs', '08912213312', '2133333333333333', '222222222222222', '33333333333', '33333333333', 'Screenshot from 2019-08-06 13-31-08.png', 'Screenshot from 2019-08-06 12-00-56.png', 'Screenshot from 2019-08-10 08-37-56.png', 'Screenshot from 2019-08-08 10-55-21.png', 'install-virtual-box-ubuntu-debian-ft.jpg', '2019-11-11 15:13:27', '2019-11-10 07:57:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deskripsi_usaha`
--
ALTER TABLE `deskripsi_usaha`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usaha_id` (`usaha_id`);

--
-- Indexes for table `favorit`
--
ALTER TABLE `favorit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usaha_id` (`usaha_id`);

--
-- Indexes for table `humas_ptsp`
--
ALTER TABLE `humas_ptsp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wirausaha_id` (`wirausaha_id`),
  ADD KEY `usaha_id` (`usaha_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `usaha`
--
ALTER TABLE `usaha`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wirausaha_id` (`wirausaha_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wirausaha`
--
ALTER TABLE `wirausaha`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deskripsi_usaha`
--
ALTER TABLE `deskripsi_usaha`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8420;

--
-- AUTO_INCREMENT for table `favorit`
--
ALTER TABLE `favorit`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=820;

--
-- AUTO_INCREMENT for table `humas_ptsp`
--
ALTER TABLE `humas_ptsp`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8810;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notifikasi`
--
ALTER TABLE `notifikasi`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9995344;

--
-- AUTO_INCREMENT for table `usaha`
--
ALTER TABLE `usaha`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9300;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9883;

--
-- AUTO_INCREMENT for table `wirausaha`
--
ALTER TABLE `wirausaha`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98090;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorit`
--
ALTER TABLE `favorit`
  ADD CONSTRAINT `favorit_ibfk_1` FOREIGN KEY (`usaha_id`) REFERENCES `usaha` (`id`);

--
-- Constraints for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD CONSTRAINT `notifikasi_ibfk_1` FOREIGN KEY (`wirausaha_id`) REFERENCES `wirausaha` (`id`),
  ADD CONSTRAINT `notifikasi_ibfk_2` FOREIGN KEY (`usaha_id`) REFERENCES `usaha` (`id`);

--
-- Constraints for table `usaha`
--
ALTER TABLE `usaha`
  ADD CONSTRAINT `usaha_ibfk_1` FOREIGN KEY (`wirausaha_id`) REFERENCES `wirausaha` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
