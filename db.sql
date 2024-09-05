-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 05 Sep 2024 pada 05.09
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `answer`
--

CREATE TABLE `answer` (
  `id` int(14) NOT NULL,
  `id_answer` int(14) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `answer`
--

INSERT INTO `answer` (`id`, `id_answer`, `userName`, `answer`, `reg_date`) VALUES
(1, 29, 'ucok', 'hpininip', '2024-05-20 13:03:09'),
(2, 27, '', 'kansnaona', '2024-05-20 13:28:38'),
(3, 25, '', 'buuasua', '2024-05-20 13:48:40'),
(4, 25, '', 'sbuabusabu', '2024-05-20 13:48:47'),
(5, 22, '', 'babbau', '2024-05-20 13:49:29'),
(6, 0, '', 'kjini', '2024-05-20 17:26:05'),
(7, 33, '', 'oonn', '2024-05-20 17:53:52'),
(8, 33, '', 'lo go blok', '2024-05-20 18:00:15'),
(9, 33, '', 'wiqbwq', '2024-05-20 18:01:42'),
(10, 34, '', 'ibibkib', '2024-05-20 18:02:09'),
(11, 34, '', 'babaie', '2024-05-20 18:07:43'),
(13, 34, '', 'test', '2024-05-20 18:11:02'),
(14, 33, '', 'hai', '2024-05-20 18:40:53'),
(15, 33, '', 'wkbckdbaw', '2024-05-21 02:54:57'),
(16, 33, '', 'jbcaboeboia', '2024-05-21 02:55:46'),
(17, 33, '', 'wdibqbwqibe', '2024-05-21 02:57:53'),
(18, 33, 'test', 'andnwianwa', '2024-05-21 02:59:02'),
(19, 33, 'test', 'hai', '2024-05-21 02:59:13'),
(20, 34, 'adminGanteng', 'abbueuwbw', '2024-05-21 16:53:18'),
(21, 43, 'adminGanteng', 'waalaikumussalam stadz', '2024-05-21 20:52:44'),
(22, 42, 'adminGanteng', 'kenka', '2024-05-22 02:00:54'),
(23, 43, 'qontolodon', 'haha', '2024-05-22 02:47:21'),
(24, 44, 'adminGanteng', 'woi', '2024-07-30 03:23:05'),
(25, 44, 'adminGanteng', 'kenka', '2024-07-30 03:23:11'),
(26, 43, 'bcajbjc', ' m  mn nmn ', '2024-08-03 08:15:34'),
(27, 48, 'bcajbjc', 'tu baa lo de ang', '2024-08-03 08:26:03'),
(28, 48, 'bcajbjc', 'a cek ang  ko', '2024-08-03 08:26:15'),
(29, 48, 'bcajbjc', 'woi', '2024-08-03 08:26:23'),
(30, 48, 'bcajbjc', 'iiiiii', '2024-08-03 08:26:30'),
(31, 48, 'bcajbjc', 'iinnknkn', '2024-08-03 08:26:38'),
(32, 35, 'test', 'ok', '2024-08-18 08:26:52'),
(33, 35, 'test', 'oi', '2024-08-18 08:26:56'),
(34, 35, 'test', 'oi', '2024-08-18 08:27:00'),
(35, 35, 'test', 'oi', '2024-08-18 08:27:05'),
(36, 49, 'test', '<script>alert(anggilo)</script>', '2024-09-02 08:35:24'),
(37, 49, 'test', '<script>alert(anggilo)</script>', '2024-09-02 08:35:27'),
(38, 49, 'test', '<script>alert(anggilo)</script>', '2024-09-02 08:35:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `diskusi`
--

CREATE TABLE `diskusi` (
  `id` int(250) NOT NULL,
  `userName` text NOT NULL,
  `content` text NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `diskusi`
--

INSERT INTO `diskusi` (`id`, `userName`, `content`, `regdate`) VALUES
(35, 'erdi_dzakki', 'Halo saya pertama ', '2024-05-20 19:00:25'),
(42, 'adminGanteng', 'tengok kiri kanan nilai mines', '2024-05-21 20:24:10'),
(43, 'daffaa', 'assalamualaikum', '2024-05-21 20:50:26'),
(44, 'qontolodon', 'waalaikumussalam', '2024-05-22 02:47:07'),
(47, 'bcajbjc', 'alah sialan', '2024-08-03 08:25:25'),
(48, 'bcajbjc', 'kamari ang lah', '2024-08-03 08:25:43'),
(49, 'test', 'jancok', '2024-08-18 08:27:25'),
(50, 'test', '<script>alert(anggilo)</script>', '2024-09-02 08:31:15'),
(51, 'test', '<script>alert(anggilo)</script><script>alert(anggilo)</script><script>alert(anggilo)</script><script>alert(anggilo)</script>', '2024-09-02 08:35:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawab`
--

CREATE TABLE `jawab` (
  `id` int(11) NOT NULL,
  `id_answer` text NOT NULL,
  `userName` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `jawab`
--

INSERT INTO `jawab` (`id`, `id_answer`, `userName`, `answer`, `reg_date`) VALUES
(1, '0', '', 'halo', '2024-05-20 17:37:59'),
(2, '', '', 'khudhfd', '2024-05-20 17:42:57'),
(3, '', '', 'nicaie', '2024-05-20 17:43:51'),
(4, '', '', 'siabiae', '2024-05-20 17:45:14'),
(5, '', '', 'naoea', '2024-05-20 18:11:22'),
(6, '', '', 'asbia', '2024-05-20 18:11:46'),
(7, '', '', 'kbabfkae', '2024-05-20 18:41:10'),
(8, '', '', 'kebakbawken', '2024-05-20 18:41:23'),
(9, '', '', 'nanciae', '2024-05-21 02:46:26'),
(10, 'a sa ha', '', 'manskadak', '2024-05-21 02:51:21'),
(11, 'bboi', 'test', 'kkbdkebkq', '2024-05-21 02:54:36'),
(12, 'lorem ipsum', 'adminGanteng', 'bininknknini', '2024-05-21 16:58:17'),
(13, '', 'adminGanteng', 'woi', '2024-05-22 01:57:10'),
(14, 'Cloud Computing: Mengapa Bisnis Anda Membutuhkannya?', 'adminGanteng', 'info yang bagus', '2024-07-30 04:07:57'),
(15, 'Pengembangan Aplikasi Mobile: Langkah Mudah Membuat Aplikasi Pertamamu', 'adminGanteng', 'terima kasih banyak', '2024-07-30 04:12:03'),
(16, 'Pengembangan Aplikasi Mobile: Langkah Mudah Membuat Aplikasi Pertamamu', 'qontolodon', 'halo ege', '2024-07-31 04:19:05'),
(17, 'Pengembangan Aplikasi Mobile: Langkah Mudah Membuat Aplikasi Pertamamu', 'qontolodon', 'wknwknlknlkndlnfkldl lvlsnfkasdnf', '2024-07-31 04:19:14'),
(18, 'lorem ipsum', 'test', '<script>alert(anggilo)</script>', '2024-09-02 08:34:45'),
(19, 'lorem ipsum', 'test', '<script>alert(anggilo)</script>', '2024-09-02 08:35:03'),
(20, 'jijiijjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'adminGanteng', ' <button>woy gilo</button>', '2024-09-02 08:48:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE `konten` (
  `id` int(80) NOT NULL,
  `judul` longtext NOT NULL,
  `isi_konten` longtext NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id`, `judul`, `isi_konten`, `reg_date`, `foto`) VALUES
(4, 'jadi begitu', '<p>untuk melepas keresahan karena begitu ya karena begitu</p>', '2024-05-19 14:21:11', ''),
(5, 'lorem ipsum', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2024-05-22 01:28:00', 'layout/gambar.png'),
(12, 'nskanknaknsa', 'ksnasanksa', '2024-07-30 03:31:21', ''),
(13, 'nskanknaknsajj', 'ksnasanksabbjb', '2024-07-30 03:57:42', ''),
(14, 'Cloud Computing: Mengapa Bisnis Anda Membutuhkannya?', '<style>\r\n        .cosmic-container {\r\n            width: 80%;\r\n            margin: auto;\r\n            overflow: hidden;\r\n        }\r\n        .galactic-header {\r\n            background: #2c3e50;\r\n            color: #ecf0f1;\r\n            padding-top: 30px;\r\n            min-height: 70px;\r\n            border-bottom: #ecf0f1 3px solid;\r\n            text-align: center;\r\n            font-size: 2em;\r\n        }\r\n        .nebula-article {\r\n            background: #fff;\r\n            padding: 20px;\r\n            margin-top: 20px;\r\n            border-radius: 12px;\r\n            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);\r\n        }\r\n        .starry-subtitle {\r\n            color: #2c3e50;\r\n            font-size: 1.5em;\r\n            margin-top: 20px;\r\n        }\r\n        .orbit-list {\r\n            list-style: circle;\r\n            margin: 20px 0;\r\n            padding: 0 20px;\r\n        }\r\n        .orbit-list li {\r\n            margin-bottom: 10px;\r\n        }\r\n        .space-footer {\r\n            background: #2c3e50;\r\n            color: #ecf0f1;\r\n            text-align: center;\r\n            padding: 10px;\r\n            position: fixed;\r\n            width: 100%;\r\n            bottom: 0;\r\n        }\r\n    </style>\r\n</head>\r\n<body>\r\n    <header class=\"galactic-header\">\r\n        <div class=\"cosmic-container\">\r\n            <h1>Cloud Computing: Mengapa Bisnis Anda Membutuhkannya?</h1>\r\n        </div>\r\n    </header>\r\n    <div class=\"cosmic-container\">\r\n        <article class=\"nebula-article\">\r\n            <h2 class=\"starry-subtitle\">Pendahuluan</h2>\r\n            <p>Di era digital saat ini, cloud computing atau komputasi awan telah menjadi salah satu pilar utama dalam transformasi teknologi bisnis. Dengan meningkatnya kebutuhan akan fleksibilitas, skalabilitas, dan efisiensi, banyak perusahaan yang beralih ke solusi cloud. Namun, apa sebenarnya cloud computing, dan mengapa bisnis Anda membutuhkannya? Artikel ini akan menjelaskan manfaat utama dari cloud computing dan mengapa Anda harus mempertimbangkan untuk mengadopsinya.</p>\r\n\r\n            <h2 class=\"starry-subtitle\">Apa Itu Cloud Computing?</h2>\r\n            <p>Cloud computing adalah model penyampaian layanan TI yang memungkinkan akses mudah, cepat, dan sesuai permintaan ke sumber daya komputasi melalui internet. Layanan ini mencakup infrastruktur, platform, dan perangkat lunak yang dikelola oleh penyedia layanan cloud. Beberapa jenis layanan cloud termasuk:</p>\r\n            <ul class=\"orbit-list\">\r\n                <li><strong>Infrastructure as a Service (IaaS)</strong>: Menyediakan infrastruktur TI virtual, seperti server dan penyimpanan.</li>\r\n                <li><strong>Platform as a Service (PaaS)</strong>: Menyediakan platform untuk mengembangkan, menguji, dan menerapkan aplikasi.</li>\r\n                <li><strong>Software as a Service (SaaS)</strong>: Menyediakan aplikasi yang dikelola sepenuhnya oleh penyedia layanan.</li>\r\n            </ul>\r\n\r\n            <h2 class=\"starry-subtitle\">Manfaat Cloud Computing untuk Bisnis Anda</h2>\r\n            <ul class=\"orbit-list\">\r\n                <li><strong>Fleksibilitas dan Skalabilitas</strong>: Cloud computing memungkinkan bisnis untuk menyesuaikan kapasitas sumber daya sesuai dengan kebutuhan. Ini berarti Anda bisa dengan cepat menambah atau mengurangi sumber daya tanpa harus melakukan investasi besar di infrastruktur fisik.</li>\r\n                <li><strong>Pengurangan Biaya</strong>: Dengan cloud computing, bisnis tidak perlu lagi berinvestasi dalam perangkat keras mahal atau mempekerjakan tim IT besar untuk manajemen infrastruktur. Anda membayar hanya untuk sumber daya yang Anda gunakan, yang dapat mengurangi biaya operasional.</li>\r\n                <li><strong>Aksesibilitas dan Kolaborasi</strong>: Layanan cloud memungkinkan akses ke data dan aplikasi dari mana saja dan kapan saja, selama ada koneksi internet. Ini memudahkan kolaborasi tim, terutama dalam lingkungan kerja remote atau hybrid.</li>\r\n                <li><strong>Keamanan dan Pemulihan Bencana</strong>: Penyedia layanan cloud biasanya menawarkan fitur keamanan canggih dan solusi pemulihan bencana yang tidak dapat diakses oleh banyak bisnis kecil dan menengah. Ini termasuk enkripsi data, cadangan otomatis, dan pemulihan cepat jika terjadi gangguan.</li>\r\n                <li><strong>Inovasi dan Pengembangan Cepat</strong>: Cloud computing memudahkan bisnis untuk menguji dan meluncurkan aplikasi baru dengan cepat. Anda dapat memanfaatkan alat dan platform pengembangan modern tanpa perlu membangun infrastruktur dari awal.</li>\r\n            </ul>\r\n\r\n            <h2 class=\"starry-subtitle\">Studi Kasus: Implementasi Cloud Computing di Berbagai Industri</h2>\r\n            <ul class=\"orbit-list\">\r\n                <li><strong>Retail</strong>: Peritel dapat menggunakan cloud untuk menganalisis data pelanggan dan mempersonalisasi pengalaman belanja, serta mengelola inventaris secara lebih efisien.</li>\r\n                <li><strong>Kesehatan</strong>: Rumah sakit dan klinik dapat menyimpan dan mengelola catatan medis elektronik dengan aman dan memanfaatkan alat analitik untuk meningkatkan perawatan pasien.</li>\r\n                <li><strong>Keuangan</strong>: Bank dan lembaga keuangan dapat menggunakan cloud untuk memproses transaksi dengan cepat, meningkatkan keamanan data, dan mematuhi peraturan industri.</li>\r\n            </ul>\r\n\r\n            <h2 class=\"starry-subtitle\">Tantangan dan Pertimbangan</h2>\r\n            <ul class=\"orbit-list\">\r\n                <li><strong>Kepatuhan dan Regulasi</strong>: Pastikan penyedia layanan cloud mematuhi peraturan industri dan undang-undang perlindungan data yang berlaku.</li>\r\n                <li><strong>Konektivitas Internet</strong>: Akses ke cloud memerlukan koneksi internet yang stabil. Pastikan Anda memiliki solusi cadangan jika koneksi utama mengalami gangguan.</li>\r\n                <li><strong>Manajemen dan Kontrol</strong>: Pertimbangkan bagaimana Anda akan mengelola dan memantau penggunaan cloud untuk menghindari pemborosan dan memastikan efisiensi.</li>\r\n            </ul>\r\n\r\n            <h2 class=\"starry-subtitle\">Kesimpulan</h2>\r\n            <p>Cloud computing telah merevolusi cara bisnis mengelola teknologi dan sumber daya mereka. Dengan manfaat yang signifikan seperti fleksibilitas, pengurangan biaya, dan peningkatan keamanan, beralih ke cloud dapat menjadi langkah strategis yang menguntungkan bagi bisnis Anda. Sebelum melakukan migrasi, pastikan untuk memahami kebutuhan spesifik Anda dan memilih penyedia layanan yang tepat untuk mencapai hasil maksimal.</p>\r\n        </article>\r\n    </div>\r\n</body>', '2024-07-30 04:07:19', 'layout/1.png'),
(15, 'Pengembangan Aplikasi Mobile: Langkah Mudah Membuat Aplikasi Pertamamu', '<style>\r\n        .main-container {\r\n            width: 80%;\r\n            margin: auto;\r\n            overflow: hidden;\r\n        }\r\n        .header {\r\n            background: #4CAF50;\r\n            color: #fff;\r\n            padding: 20px 0;\r\n            text-align: center;\r\n            border-bottom: 5px solid #388E3C;\r\n        }\r\n        .content {\r\n            background: #fff;\r\n            padding: 20px;\r\n            margin-top: 20px;\r\n            border-radius: 8px;\r\n            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);\r\n        }\r\n        h2 {\r\n            color: #333;\r\n        }\r\n        ul {\r\n            list-style: disc;\r\n            margin: 20px 0;\r\n            padding: 0 20px;\r\n        }\r\n        li {\r\n            margin-bottom: 10px;\r\n        }\r\n        footer {\r\n            background: #4CAF50;\r\n            color: #fff;\r\n            text-align: center;\r\n            padding: 10px;\r\n            position: fixed;\r\n            width: 100%;\r\n            bottom: 0;\r\n        }\r\n    </style>\r\n</head>\r\n<body>\r\n    <header class=\"header\">\r\n        <div class=\"main-container\">\r\n            <h1>Pengembangan Aplikasi Mobile: Langkah Mudah Membuat Aplikasi Pertamamu</h1>\r\n        </div>\r\n    </header>\r\n    <div class=\"main-container\">\r\n        <div class=\"content\">\r\n            <h2>Pendahuluan</h2>\r\n            <p>Pengembangan aplikasi mobile semakin populer seiring dengan meningkatnya penggunaan smartphone dan tablet. Jika Anda tertarik untuk membuat aplikasi mobile pertama Anda, prosesnya bisa terasa menakutkan. Namun, dengan panduan ini, Anda akan memahami langkah-langkah dasar yang diperlukan untuk memulai dan menyelesaikan proyek aplikasi mobile Anda.</p>\r\n\r\n            <h2>Langkah 1: Tentukan Ide Aplikasi</h2>\r\n            <p>Sebelum memulai pengembangan, Anda perlu memiliki ide yang jelas tentang aplikasi yang ingin Anda buat. Pertimbangkan masalah yang ingin Anda selesaikan atau kebutuhan yang ingin Anda penuhi. Buatlah daftar fitur yang diinginkan dan bagaimana aplikasi Anda akan berbeda dari yang sudah ada.</p>\r\n\r\n            <h2>Langkah 2: Riset dan Perencanaan</h2>\r\n            <p>Lakukan riset pasar untuk memahami audiens target Anda dan pesaing Anda. Buatlah rencana pengembangan yang mencakup alur kerja aplikasi, desain antarmuka pengguna (UI), dan spesifikasi teknis. Ini akan membantu Anda tetap fokus dan menghindari perubahan besar di kemudian hari.</p>\r\n\r\n            <h2>Langkah 3: Pilih Platform dan Alat Pengembangan</h2>\r\n            <p>Keputusan ini bergantung pada apakah Anda ingin mengembangkan aplikasi untuk Android, iOS, atau kedua platform. Anda dapat memilih alat pengembangan seperti Android Studio untuk Android atau Xcode untuk iOS. Alternatif lainnya adalah menggunakan framework lintas platform seperti React Native atau Flutter.</p>\r\n\r\n            <h2>Langkah 4: Desain UI/UX</h2>\r\n            <p>Desain antarmuka pengguna (UI) dan pengalaman pengguna (UX) sangat penting untuk aplikasi yang sukses. Buatlah wireframe dan prototipe untuk memvisualisasikan alur aplikasi dan desain antarmuka. Pastikan desain Anda intuitif dan mudah digunakan.</p>\r\n\r\n            <h2>Langkah 5: Mulai Koding</h2>\r\n            <p>Setelah desain selesai, mulailah menulis kode untuk aplikasi Anda. Jika Anda menggunakan framework lintas platform, Anda mungkin akan menulis kode dalam bahasa pemrograman seperti JavaScript (untuk React Native) atau Dart (untuk Flutter). Untuk aplikasi native, gunakan bahasa pemrograman yang sesuai (Java/Kotlin untuk Android, Swift/Objective-C untuk iOS).</p>\r\n\r\n            <h2>Langkah 6: Uji Aplikasi</h2>\r\n            <p>Pengujian adalah bagian penting dari pengembangan aplikasi. Uji aplikasi Anda di berbagai perangkat dan kondisi untuk memastikan bahwa ia berfungsi dengan baik dan bebas dari bug. Mintalah umpan balik dari pengguna beta untuk mendapatkan wawasan tambahan.</p>\r\n\r\n            <h2>Langkah 7: Rilis dan Pemasaran</h2>\r\n            <p>Setelah aplikasi Anda siap, rilis ke Google Play Store atau Apple App Store. Buatlah rencana pemasaran untuk mempromosikan aplikasi Anda dan menjangkau audiens target. Gunakan media sosial, SEO, dan strategi lainnya untuk meningkatkan visibilitas aplikasi Anda.</p>\r\n\r\n            <h2>Langkah 8: Pemeliharaan dan Pembaruan</h2>\r\n            <p>Setelah rilis, terus pantau kinerja aplikasi dan tanggapi umpan balik pengguna. Lakukan pembaruan secara berkala untuk memperbaiki bug, menambah fitur baru, dan meningkatkan performa aplikasi.</p>\r\n\r\n            <h2>Kesimpulan</h2>\r\n            <p>Pengembangan aplikasi mobile dapat menjadi proses yang menantang namun memuaskan. Dengan mengikuti langkah-langkah di atas, Anda dapat membuat aplikasi pertama Anda dengan lebih percaya diri dan efisien. Selamat mencoba dan semoga sukses dengan proyek aplikasi mobile Anda!</p>\r\n        </div>\r\n    </div>\r\n</body>', '2024-07-30 04:11:39', 'logo.png'),
(16, 'ijsia', '<img src=\"file:///home/ra/Pictures/tema/8.png\" alt=\"\">', '2024-08-29 14:39:08', ''),
(17, 'dowjojow', '<img src=\"file:///home/ra/Pictures/tema/8.png\" alt=\"\">', '2024-08-29 14:40:25', ''),
(18, 'okokok', '<img src=\"layout/8.png\" alt=\"\">', '2024-08-29 14:45:06', ''),
(19, 'k', '\r\n<button>woy gilo</button>\r\n<script>alert(anggilo)</script>', '2024-09-02 08:45:33', ''),
(20, 'jijiijjjjjjjjjjjjjjjjjjjjjjjjjjjjj', '<script>window.location = index.cpp</script>', '2024-09-02 08:46:51', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `userName`, `password`, `reg_date`) VALUES
(87, 'adminGanteng', 'GuaTampan', '2024-05-20 17:19:56'),
(88, 'kucing', 'Ganteng', '2024-05-20 17:20:53'),
(89, 'erdi_dzakki', 'icikiwir@25', '2024-05-20 19:00:00'),
(90, 'test', '1', '2024-05-21 02:53:02'),
(91, 'daffaa', '12334', '2024-05-21 20:49:37'),
(92, 'rinov', '12', '2024-05-21 21:07:30'),
(93, 'qontolodon', 'hahahihi', '2024-05-22 02:46:40'),
(95, 'bcajbjc', '1', '2024-08-03 08:14:19');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `diskusi`
--
ALTER TABLE `diskusi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jawab`
--
ALTER TABLE `jawab`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `konten`
--
ALTER TABLE `konten`
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
-- AUTO_INCREMENT untuk tabel `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `diskusi`
--
ALTER TABLE `diskusi`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `jawab`
--
ALTER TABLE `jawab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `konten`
--
ALTER TABLE `konten`
  MODIFY `id` int(80) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
