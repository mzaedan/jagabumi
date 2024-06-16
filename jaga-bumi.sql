-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 16 Jun 2024 pada 03.51
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jaga-bumi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` bigint UNSIGNED NOT NULL,
  `judul_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penulis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul_berita`, `slug`, `foto`, `lokasi`, `tanggal`, `penulis`, `deskripsi`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Pemerintah Kota Jakarta Luncurkan Program Penghijauan', 'pemerintah-kota-jakarta-luncurkan-program-penghijauan', 'assets/berita/34CAeBx5KYwaPltGYYOOu4qpyFSkuHvugsFINXYh.jpg', 'Jakarta, Indonesia', '2024-01-01', 'Andi Wijaya', '<p>Pemerintah Kota Jakarta telah meluncurkan program penghijauan besar-besaran yang bertujuan untuk mengurangi dampak perubahan iklim di ibu kota. Program ini mencakup penanaman satu juta pohon di berbagai wilayah kota selama lima tahun ke depan. Wali Kota Jakarta, Anies Baswedan, mengatakan bahwa inisiatif ini tidak hanya akan membantu menurunkan suhu udara, tetapi juga meningkatkan kualitas udara dan mengurangi risiko banjir.</p>\r\n\r\n<p>Program ini melibatkan partisipasi aktif warga, sekolah, dan komunitas lokal. Setiap pohon yang ditanam akan dirawat oleh komunitas setempat untuk memastikan pertumbuhannya. Selain itu, pemerintah kota juga akan mengadakan kampanye edukasi tentang pentingnya menjaga lingkungan dan mengurangi emisi karbon.</p>\r\n\r\n<p>Selain penanaman pohon, program ini juga mencakup pengembangan taman kota dan ruang terbuka hijau di kawasan yang padat penduduk. Dengan langkah ini, pemerintah kota berharap dapat menciptakan lingkungan yang lebih sehat dan berkelanjutan bagi generasi mendatang.</p>', NULL, '2024-06-08 23:17:01', '2024-06-08 23:17:01'),
(2, 'Perusahaan Teknologi Besar Investasi dalam Energi Terbarukan', 'perusahaan-teknologi-besar-investasi-dalam-energi-terbarukan', 'assets/berita/TYp0hKzEMPraELWTwQsSMcV3oDQKYz3jrn0e6b1N.jpg', 'San Francisco, Amerika Serikat', '2024-02-15', 'Sarah Thompson', '<p>Beberapa perusahaan teknologi besar, termasuk Google, Apple, dan Microsoft, telah mengumumkan investasi besar dalam proyek energi terbarukan. Langkah ini merupakan bagian dari komitmen mereka untuk mengurangi jejak karbon dan memerangi perubahan iklim. Google telah berinvestasi dalam proyek energi surya dan angin di Amerika Serikat dan Eropa, sementara Apple fokus pada pengembangan teknologi baterai yang lebih efisien.</p>\r\n\r\n<p>Microsoft juga telah mengumumkan rencana untuk menjadi karbon negatif pada tahun 2030, dengan mengurangi emisi mereka secara signifikan dan berinvestasi dalam teknologi penghilangan karbon dari atmosfer. Selain itu, perusahaan-perusahaan ini bekerja sama dengan pemerintah dan organisasi lingkungan untuk mendukung kebijakan yang mendukung penggunaan energi terbarukan.</p>\r\n\r\n<p>Investasi ini tidak hanya akan membantu mengurangi emisi gas rumah kaca tetapi juga menciptakan lapangan kerja baru di sektor energi terbarukan. Dengan langkah ini, perusahaan teknologi besar menunjukkan bahwa mereka serius dalam upaya melawan perubahan iklim dan berkontribusi untuk masa depan yang lebih hijau.</p>', NULL, '2024-06-08 23:17:49', '2024-06-08 23:17:49'),
(3, 'Sekolah di Bali Mulai Terapkan Kurikulum Lingkungan Hidup', 'sekolah-di-bali-mulai-terapkan-kurikulum-lingkungan-hidup', 'assets/berita/k5I33gTH6sP1g5HU9UEnK5viacRvXPywBhyGzfGL.jpg', 'Denpasar, Bali', '2024-03-01', 'Made Wirawan', '<p>Sekolah-sekolah di Bali telah mulai menerapkan kurikulum lingkungan hidup sebagai bagian dari upaya untuk mendidik generasi muda tentang pentingnya menjaga planet ini. Kurikulum ini mencakup pelajaran tentang perubahan iklim, konservasi energi, pengelolaan sampah, dan pentingnya keanekaragaman hayati.</p>\r\n\r\n<p>Inisiatif ini dipelopori oleh Dinas Pendidikan Bali yang bekerja sama dengan berbagai organisasi lingkungan dan akademisi. Siswa diajak untuk terlibat dalam berbagai proyek lingkungan seperti penanaman pohon, pembuatan kompos, dan kampanye pengurangan plastik sekali pakai. Selain itu, sekolah-sekolah juga didorong untuk mengadopsi praktik ramah lingkungan seperti penghematan energi dan pengelolaan air yang efisien.</p>\r\n\r\n<p>Program ini diharapkan dapat membentuk generasi yang lebih peduli terhadap lingkungan dan memiliki pengetahuan serta keterampilan untuk menghadapi tantangan perubahan iklim. Dengan pendidikan lingkungan hidup sejak dini, diharapkan siswa dapat menjadi agen perubahan di masyarakat mereka dan berkontribusi dalam upaya global untuk melestarikan bumi.</p>', NULL, '2024-06-08 23:18:30', '2024-06-08 23:18:30'),
(4, 'Bank Dunia Dukung Proyek Restorasi Hutan di Amazon', 'bank-dunia-dukung-proyek-restorasi-hutan-di-amazon', 'assets/berita/zGg2N74i5vQHphsBubpEyPKewrbFO3pnzfFowJNm.jpg', 'Brasília, Brasil', '2024-04-20', 'João Silva', '<p>Bank Dunia telah mengumumkan dukungan finansial untuk proyek restorasi hutan di Amazon sebagai bagian dari upaya global untuk memerangi perubahan iklim. Proyek ini bertujuan untuk merehabilitasi lahan yang terdegradasi dan mencegah deforestasi lebih lanjut di wilayah tersebut.</p>\r\n\r\n<p>Dengan dana sebesar $1 miliar, proyek ini akan melibatkan penanaman pohon asli, pemulihan ekosistem hutan, dan pengembangan program pengelolaan hutan yang berkelanjutan. Selain itu, proyek ini juga akan mendukung komunitas lokal dengan memberikan pelatihan dan sumber daya untuk mengelola hutan secara berkelanjutan.</p>\r\n\r\n<p>Direktur Bank Dunia, David Malpass, mengatakan bahwa menjaga hutan Amazon sangat penting untuk menstabilkan iklim global, karena hutan ini berperan sebagai penyerap karbon terbesar di dunia. Restorasi hutan diharapkan dapat mengurangi emisi gas rumah kaca dan memitigasi dampak perubahan iklim.</p>', NULL, '2024-06-08 23:19:07', '2024-06-08 23:19:07'),
(5, 'Jepang Tingkatkan Penggunaan Energi Nuklir untuk Kurangi Emisi', 'jepang-tingkatkan-penggunaan-energi-nuklir-untuk-kurangi-emisi', 'assets/berita/S0FtLMQ5AJi3qSCa5KNlNU1nhJQX0T67nju4Yxl5.jpg', 'Tokyo, Jepang', '2024-05-05', 'Hiroshi Yamamoto', '<p>Pemerintah Jepang telah mengumumkan rencana untuk meningkatkan penggunaan energi nuklir sebagai bagian dari strategi nasional untuk mengurangi emisi karbon. Dalam upaya untuk mencapai netralitas karbon pada tahun 2050, Jepang berencana untuk mengoperasikan kembali beberapa reaktor nuklir yang sebelumnya ditutup dan membangun reaktor baru dengan teknologi yang lebih aman.</p>\r\n\r\n<p>Menteri Lingkungan Hidup Jepang, Shinjiro Koizumi, menjelaskan bahwa energi nuklir merupakan pilihan yang efektif untuk mengurangi emisi karbon karena tidak menghasilkan gas rumah kaca selama proses pembangkitan listrik. Selain itu, teknologi baru seperti reaktor modular kecil diharapkan dapat meningkatkan keamanan dan efisiensi energi nuklir.</p>\r\n\r\n<p>Meskipun demikian, rencana ini juga menghadapi tantangan, termasuk kekhawatiran tentang keselamatan nuklir dan penerimaan publik. Pemerintah berkomitmen untuk memastikan standar keselamatan yang tinggi dan mengedukasi masyarakat tentang manfaat dan risiko energi nuklir. Dengan langkah ini, Jepang berharap dapat mencapai target iklimnya tanpa mengorbankan pertumbuhan ekonomi dan stabilitas energi.</p>', NULL, '2024-06-08 23:19:48', '2024-06-08 23:19:48'),
(6, 'Kampanye Global untuk Pengurangan Plastik Sekali Pakai', 'kampanye-global-untuk-pengurangan-plastik-sekali-pakai', 'assets/berita/mvXnBimFrnaYqvbTpn27RprDie2hAed5MCMohCzI.jpg', 'London, Inggris', '2024-06-18', 'Emma Johnson', '<p>Organisasi lingkungan internasional, Greenpeace, telah meluncurkan kampanye global untuk mengurangi penggunaan plastik sekali pakai. Kampanye ini bertujuan untuk meningkatkan kesadaran tentang dampak negatif plastik terhadap lingkungan dan kesehatan manusia, serta mendorong pemerintah dan perusahaan untuk beralih ke alternatif yang lebih ramah lingkungan.</p>\r\n\r\n<p>Kampanye ini melibatkan serangkaian kegiatan seperti pembersihan pantai, edukasi publik, dan advokasi kebijakan. Greenpeace juga bekerja sama dengan berbagai negara untuk mengembangkan undang-undang yang melarang atau membatasi penggunaan plastik sekali pakai seperti kantong plastik, sedotan, dan kemasan makanan.</p>\r\n\r\n<p>Koordinator kampanye, Nina Schrank, menyatakan bahwa plastik sekali pakai merupakan salah satu ancaman terbesar bagi lautan dan satwa liar. Dengan mengurangi penggunaan plastik, kita dapat mengurangi polusi dan melindungi ekosistem yang rapuh. Kampanye ini juga mendorong konsumen untuk memilih produk yang lebih berkelanjutan dan mendukung perusahaan yang mengadopsi praktik ramah lingkungan.</p>', NULL, '2024-06-08 23:20:30', '2024-06-08 23:20:30'),
(7, 'India Luncurkan Inisiatif Besar-Besaran untuk Energi Surya', 'india-luncurkan-inisiatif-besar-besaran-untuk-energi-surya', 'assets/berita/OPftu3bhZrRHXBA6RmdqqcuW38QJriQVTG6jld0T.jpg', 'New Delhi, India', '2024-07-25', 'Ravi Kapoor', '<p>India telah meluncurkan inisiatif besar-besaran untuk meningkatkan kapasitas energi surya sebagai bagian dari upaya nasional untuk mengurangi ketergantungan pada bahan bakar fosil dan mengatasi perubahan iklim. Inisiatif ini melibatkan pembangunan taman surya di berbagai wilayah negara dan peningkatan insentif untuk proyek-proyek energi terbarukan.</p>\r\n\r\n<p>Menteri Energi Baru dan Terbarukan India, Raj Kumar Singh, menyatakan bahwa India bertujuan untuk mencapai kapasitas energi surya sebesar 450 GW pada tahun 2030. Untuk mencapai target ini, pemerintah memberikan dukungan finansial dan teknis kepada pengembang proyek surya serta memfasilitasi kemitraan dengan sektor swasta.</p>\r\n\r\n<p>Inisiatif ini juga mencakup program pelatihan untuk tenaga kerja lokal dalam bidang energi terbarukan dan peningkatan akses ke teknologi surya bagi rumah tangga di pedesaan. Dengan langkah ini, India tidak hanya berupaya mengurangi emisi karbon tetapi juga meningkatkan ketahanan energi dan menciptakan lapangan kerja baru di sektor energi terbarukan.</p>', NULL, '2024-06-08 23:21:11', '2024-06-08 23:21:11'),
(8, 'Uni Eropa Perkenalkan Rencana Ambisius untuk Emisi Nol', 'uni-eropa-perkenalkan-rencana-ambisius-untuk-emisi-nol', 'assets/berita/KsLcyfVR6iVmrXC4JKVew3ByJQNZPSfklkLhxZg8.jpg', 'Brussels, Belgia', '2024-08-12', 'Marie Dubois', '<p>Uni Eropa telah memperkenalkan rencana ambisius untuk mencapai emisi nol pada tahun 2050 sebagai bagian dari upaya untuk memerangi perubahan iklim. Rencana ini mencakup berbagai langkah seperti peningkatan efisiensi energi, pengembangan teknologi hijau, dan transisi ke energi terbarukan.</p>\r\n\r\n<p>Komisaris Eropa untuk Lingkungan, Virginijus Sinkevičius, menjelaskan bahwa Uni Eropa berkomitmen untuk memimpin dunia dalam aksi iklim. Rencana ini juga mencakup pengurangan emisi dari sektor transportasi dan industri, serta peningkatan investasi dalam penelitian dan pengembangan teknologi hijau.</p>\r\n\r\n<p>Untuk mendukung transisi ini, Uni Eropa akan mengalokasikan dana sebesar &euro;1 triliun dalam bentuk hibah dan pinjaman untuk proyek-proyek yang mendukung keberlanjutan dan pengurangan emisi. Selain itu, Uni Eropa juga akan bekerja sama dengan negara-negara anggota untuk memastikan pelaksanaan kebijakan ini di tingkat nasional.</p>', NULL, '2024-06-08 23:21:53', '2024-06-08 23:21:53'),
(9, 'Kota Kecil di Jerman Ubah Sampah Menjadi Energi', 'kota-kecil-di-jerman-ubah-sampah-menjadi-energi', 'assets/berita/F6FEdJxQnRAL7Wsb7dI9wSUuAFjjzvAdCDl1VEhP.jpg', 'Trebur, Jerman', '2024-09-30', 'Hans Müller', '<p>Kota kecil di Jerman, Trebur, telah berhasil mengubah sampah rumah tangga menjadi energi melalui proyek inovatif yang didukung oleh pemerintah dan komunitas lokal. Proyek ini melibatkan pembangunan fasilitas pengolahan sampah modern yang dapat mengubah limbah organik menjadi biogas dan listrik.</p>\r\n\r\n<p>Walikota Trebur, Heiko M&uuml;ller, menjelaskan bahwa proyek ini tidak hanya membantu mengurangi volume sampah yang dikirim ke tempat pembuangan akhir tetapi juga menghasilkan energi bersih yang dapat digunakan oleh warga kota. Selain itu, sisa proses pengolahan sampah digunakan sebagai pupuk organik untuk pertanian lokal.</p>\r\n\r\n<p>Proyek ini telah menerima pujian dari berbagai pihak sebagai contoh keberhasilan inisiatif lokal dalam mendukung keberlanjutan dan pengurangan emisi karbon. Dengan inovasi ini, Trebur berharap dapat menginspirasi kota-kota lain untuk mengadopsi pendekatan serupa dalam pengelolaan sampah dan energi.</p>', NULL, '2024-06-08 23:22:36', '2024-06-08 23:22:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `email`, `subject`, `message`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Tes', 'Test@gam.com', 'Test', 'Test', NULL, '2024-06-08 23:05:15', '2024-06-08 23:05:15'),
(2, 'made', 'made@gmail.com', 'first', 'bagus', NULL, '2024-06-08 23:52:50', '2024-06-08 23:52:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_05_28_143447_create_projects_table', 2),
(7, '2024_05_29_032707_create_projects_table', 3),
(8, '2024_05_31_064908_create_berita_table', 4),
(9, '2024_05_31_065546_create_projects_table', 5),
(10, '2024_05_31_092239_create_berita_table', 6),
(11, '2024_06_02_052546_create_kontak_table', 7),
(12, '2024_06_02_053439_create_berita_table', 8),
(13, '2024_06_02_053912_create_berita_table', 9),
(14, '2024_06_02_053920_create_project_table', 9),
(15, '2024_06_02_053926_create_kontak_table', 9),
(16, '2024_06_02_092636_create_project_table', 10),
(17, '2024_06_02_094653_create_kontak_table', 11),
(18, '2024_06_02_100128_create_project_table', 12),
(19, '2024_06_02_114111_create_project_table', 13),
(20, '2024_06_02_114121_create_berita_table', 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `project`
--

CREATE TABLE `project` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_kumpul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batas_registrasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_project` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `project`
--

INSERT INTO `project` (`id`, `nama_kegiatan`, `slug`, `lokasi`, `foto`, `tanggal`, `deskripsi`, `tempat_kumpul`, `batas_registrasi`, `link`, `status_project`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Tanam Pohon ccaca', 'tanam-pohon-ccaca', 'Bandung', 'assets/project/LsOWGAO2sluR5Ny0PnD60sHLfVddjKVYl0bVBPKU.jpg', '2024-06-07', '<p>Tes</p>', 'asas', '2024-07-05', 'https://forms.gle/ACfeetQj6C5AibZW9', 'Aktif', '2024-06-08 23:04:51', '2024-06-08 00:23:10', '2024-06-08 23:04:51'),
(2, 'Pelatihan Kompos Rumah Tangga', 'pelatihan-kompos-rumah-tangga', 'Kantor Kelurahan Mampang, Jakarta Selatan', 'assets/project/1u3M8tb8u3q9n9DLu2BZpkv6mbli5LxJJ1lWX2LE.png', '2024-07-15', '<p>Pelatihan ini bertujuan untuk mengajarkan warga tentang cara membuat kompos dari sampah organik rumah tangga. Kompos merupakan cara efektif untuk mengurangi jumlah sampah yang berakhir di TPA dan mengurangi emisi gas metana yang berkontribusi pada perubahan iklim. Para relawan akan belajar bagaimana mengelola sampah organik menjadi pupuk alami yang dapat digunakan untuk menyuburkan tanah.<br />\r\nSelain itu, pelatihan ini juga akan membahas berbagai teknik komposting seperti kompos tumpuk, kompos cepat, dan penggunaan cacing tanah. Dengan keterampilan ini, peserta dapat menerapkan praktik komposting di rumah masing-masing dan menyebarluaskan pengetahuan ini kepada tetangga dan keluarga mereka.</p>', 'Halaman Balai RW 05', '2024-07-10', 'www', 'Aktif', NULL, '2024-06-08 22:58:36', '2024-06-13 23:11:38'),
(3, 'Kampanye Hemat Air', 'kampanye-hemat-air', 'Taman Suropati, Jakarta', 'assets/project/dwZVSc2ezH5UzwIky3xQH4CjH2Pwe3VRrk9IfOBW.jpg', '2024-06-22', '<p>Kampanye ini bertujuan untuk meningkatkan kesadaran masyarakat tentang pentingnya menghemat air dalam kehidupan sehari-hari. Para relawan akan membagikan brosur dan memberikan penjelasan mengenai langkah-langkah sederhana yang bisa dilakukan untuk menghemat air, seperti memperbaiki keran yang bocor, menggunakan air secukupnya saat mencuci, dan mengurangi frekuensi penyiraman tanaman.<br />\r\nSelain itu, akan diadakan demonstrasi penggunaan teknologi hemat air seperti shower aerator dan kran sensor otomatis. Dengan kampanye ini, diharapkan masyarakat lebih bijak dalam penggunaan air dan turut serta dalam upaya konservasi sumber daya air yang semakin terbatas.</p>', 'Pintu Masuk Utama Taman Suropati', '2024-06-18', 'https://forms.gle/ftiub4ybvgADb6wV6', 'Tidak Aktif', NULL, '2024-06-08 22:59:45', '2024-06-09 00:33:42'),
(4, 'Edukasi dan Kampanye Hemat Energi', 'edukasi-dan-kampanye-hemat-energi', 'Alun-Alun Kota Bandung', 'assets/project/oG5cnTDlebDD5oqeCfE9hLl5wZM8kbXMRAiT9QqQ.jpg', '2024-06-30', '<p>Kegiatan ini akan fokus pada edukasi masyarakat tentang pentingnya menghemat energi untuk mencegah perubahan iklim. Para relawan akan menyebarkan brosur, memasang poster, dan mengadakan diskusi terbuka tentang cara-cara sederhana mengurangi konsumsi energi di rumah.<br />\r\nSelain itu, akan diadakan demonstrasi penggunaan alat-alat hemat energi dan diskusi tentang sumber energi terbarukan. Melalui edukasi ini, diharapkan masyarakat lebih sadar dan mau berpartisipasi dalam upaya mengurangi emisi gas rumah kaca.</p>', 'Depan Gedung Sate, Bandung', '2024-06-25', 'https://forms.gle/NfBRzPqeDaG4V5tk8', 'Aktif', NULL, '2024-06-08 23:01:15', '2024-06-09 00:34:03'),
(5, 'Workshop Daur Ulang Kreatif', 'workshop-daur-ulang-kreatif', 'Taman Bungkul, Surabaya', 'assets/project/uOKVGOk16WW6i7ntxdvmRqQlx0Kvn9gQRfSA9W83.jpg', '2024-08-10', '<p>Workshop ini mengajak para peserta untuk berkreasi dengan bahan-bahan daur ulang, seperti plastik, kertas, dan kain bekas. Dalam kegiatan ini, para relawan akan belajar membuat berbagai barang bermanfaat dari limbah rumah tangga, seperti tas, dompet, dan hiasan rumah.<br />\r\nSelain mengurangi jumlah sampah yang berakhir di tempat pembuangan akhir, kegiatan ini juga memberikan nilai ekonomi tambahan dari barang-barang daur ulang. Workshop ini diharapkan dapat menginspirasi peserta untuk lebih peduli terhadap lingkungan dan mempraktikkan daur ulang dalam kehidupan sehari-hari.</p>', 'Pintu Masuk Timur Taman Bungkul', '2024-08-05', 'https://forms.gle/4D4mCtCHHAdz5Coa7', 'Aktif', NULL, '2024-06-08 23:04:19', '2024-06-09 00:34:21'),
(6, 'Aksi Hijau Sekolah', 'aksi-hijau-sekolah', 'SD Negeri 1 Bogor', 'assets/project/TPozZcpUwv0Pg7GsJLd2frvwLLQp65oje762gRXb.jpg', '2024-09-05', '<p>Aksi hijau di sekolah ini bertujuan untuk memperkenalkan konsep go green kepada para siswa sejak dini. Para relawan akan bekerja sama dengan guru dan siswa untuk menanam tanaman hias dan pohon kecil di sekitar lingkungan sekolah.<br />\r\nSelain itu, akan diadakan sesi edukasi mengenai pentingnya menjaga kebersihan dan kelestarian lingkungan. Melalui kegiatan ini, diharapkan para siswa dapat menjadi agen perubahan dalam keluarga dan masyarakat sekitar mereka.</p>', 'Halaman Depan SD Negeri 1 Bogor', '2024-09-01', 'https://forms.gle/YfAPTBX6tzHB4M9c8', 'Aktif', NULL, '2024-06-08 23:08:29', '2024-06-09 00:34:49'),
(7, 'Pembuatan Bank Sampah', 'pembuatan-bank-sampah', 'Kel. Mampang, Jakarta Selatan', 'assets/project/dRLuYXZuwGCzhrz5Hy5wIynYeo1Xnk3eirPLpOSn.jpg', '2024-10-12', '<p>Kegiatan ini bertujuan untuk mendirikan bank sampah di Kelurahan Mampang. Para relawan akan diberikan pelatihan mengenai cara pengelolaan bank sampah, mulai dari pengumpulan, pemilahan, hingga penjualan sampah yang dapat didaur ulang.<br />\r\nBank sampah ini diharapkan dapat mengurangi jumlah sampah yang berakhir di tempat pembuangan akhir dan memberikan nilai ekonomi bagi masyarakat setempat. Dengan adanya bank sampah, masyarakat dapat lebih termotivasi untuk memilah sampah dari rumah dan menjaga kebersihan lingkungan.</p>', 'Kantor Kelurahan Mampang', '2024-10-07', 'https://forms.gle/fAaPBG7Nem2vVf5n9', 'Tidak Aktif', NULL, '2024-06-08 23:10:02', '2024-06-09 00:35:29'),
(8, 'Kampanye Anti Plastik Sekali Pakai', 'kampanye-anti-plastik-sekali-pakai', 'Mall Central Park, Jakarta', 'assets/project/f66cZP37miSA73aJB3KUtPyatgmDZPkpMpzPT8cZ.jpg', '2024-11-17', '<p>Kampanye ini bertujuan untuk mengedukasi masyarakat tentang dampak buruk penggunaan plastik sekali pakai dan mempromosikan alternatif yang lebih ramah lingkungan seperti tas belanja kain dan botol minum yang dapat diisi ulang. Para relawan akan membagikan tote bag gratis dan memberikan penjelasan mengenai pentingnya mengurangi penggunaan plastik.<br />\r\nSelain itu, akan ada booth informasi dan permainan interaktif yang memberikan edukasi mengenai sampah plastik dan cara pengelolaannya. Melalui kampanye ini, diharapkan masyarakat semakin sadar dan mengurangi ketergantungan pada plastik sekali pakai.</p>', 'Lobi Utama Mall Central Park', '2024-11-12', 'https://forms.gle/bWHDkc3dxCjbbJyV8', 'Aktif', NULL, '2024-06-08 23:11:26', '2024-06-09 00:35:43'),
(9, 'Pembersihan dan Restorasi Sungai', 'pembersihan-dan-restorasi-sungai', 'Sungai Ciliwung, Bogor', 'assets/project/Z5pEP0zvqGQFo9yuIB1Z3WpqZQAJ4rWKBMwrsrf6.jpg', '2024-12-20', '<p>Kegiatan ini bertujuan untuk membersihkan sungai dari sampah dan melakukan restorasi habitat sungai dengan menanam tanaman di sepanjang bantaran sungai. Para relawan akan diberikan peralatan kebersihan dan bibit tanaman untuk di tanam di area yang telah ditentukan.<br />\r\nRestorasi sungai ini penting untuk menjaga kualitas air dan mengembalikan fungsi ekosistem sungai. Dengan melibatkan masyarakat dalam kegiatan ini, diharapkan tercipta kesadaran kolektif akan pentingnya menjaga kebersihan sungai dan lingkungan sekitar.</p>', 'Taman Ekspresi, Bogor', '2024-12-15', 'https://forms.gle/dcKdtJgDv29KPzhG8', 'Aktif', NULL, '2024-06-08 23:12:42', '2024-06-09 00:35:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `roles`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'ADMIN', NULL, '$2y$10$XV8XbUFfhTtukRj.rMTp9egpPLBIfEnyRnIdwp.ORxn3LwK2ZIHnq', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `project`
--
ALTER TABLE `project`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
