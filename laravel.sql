-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Apr 2023 pada 05.34
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni`
--

CREATE TABLE `alumni` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(100) NOT NULL,
  `snmptn` int(11) NOT NULL,
  `sbmptn` int(11) NOT NULL,
  `mandiri` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `alumni`
--

INSERT INTO `alumni` (`id`, `class`, `snmptn`, `sbmptn`, `mandiri`, `created_at`, `updated_at`) VALUES
(1, 'Universitas Indonesia', 5, 8, 5, NULL, '2023-03-28 09:31:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `foto_berita` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekskul`
--

CREATE TABLE `ekskul` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `naama_ekskul` varchar(100) NOT NULL,
  `foto_ekskul` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `greet_home`
--

CREATE TABLE `greet_home` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stats` varchar(100) NOT NULL,
  `desc-stats` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepsek_profil`
--

CREATE TABLE `kepsek_profil` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `masa_kerja` varchar(100) NOT NULL,
  `foto_kepsek` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kepsek_profil`
--

INSERT INTO `kepsek_profil` (`id`, `nama`, `nip`, `pangkat`, `pendidikan`, `masa_kerja`, `foto_kepsek`, `created_at`, `updated_at`) VALUES
(2, 'Drs. Digdo Santoso M.pd', '19640109 1990003 1 005', 'Pembina Utama Muda/ IV C', 'S2 Teknologi Pembelajaran', '32 tahun', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `komite_sekolah`
--

CREATE TABLE `komite_sekolah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `desc` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `komite_sekolah`
--

INSERT INTO `komite_sekolah` (`id`, `desc`, `nama`, `jabatan`, `created_at`, `updated_at`) VALUES
(1, '', 'Budi', 'OB', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 2),
(3, '2019_08_19_000000_create_failed_jobs_table', 2),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(5, '2023_03_13_104554_create_greet_home_table', 3),
(6, '2023_03_13_105329_create_point_home_table', 3),
(7, '2023_03_13_105621_create_univ_home_table', 3),
(8, '2023_03_13_130949_create_moto_profil_table', 3),
(9, '2023_03_13_131229_create_visi_profil_table', 3),
(10, '2023_03_13_131329_create_misi_profil_table', 3),
(11, '2023_03_13_131916_create_kepsek_profil_table', 3),
(12, '2023_03_13_132417_create_pendidik_profil_table', 3),
(13, '2023_03_13_132458_create_tenaga_kependidikan_profil_table', 3),
(14, '2023_03_13_134331_create_wakepsek_table', 3),
(15, '2023_03_13_141422_create_struktur_org_sekolah_table', 3),
(16, '2023_03_13_141622_create_komite_sekolah_table', 3),
(17, '2023_03_13_142201_create_siswa_aktif_table', 3),
(18, '2023_03_13_142601_create_ekskul_table', 3),
(19, '2023_03_13_142721_create_berita_table', 3),
(20, '2023_03_13_143237_create_alumni_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `misi_profil`
--

CREATE TABLE `misi_profil` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `misi_points` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `misi_profil`
--

INSERT INTO `misi_profil` (`id`, `misi_points`, `created_at`, `updated_at`) VALUES
(1, 'Meningkatkan keimanan dan ketaqwaan kepada Tuhan yang Maha Esa sehingga terbentuk warga sekolah yang berakhlakul karimah melalui do’a sebelum kegiatan belajar mengajar, kegiatan istighosah setiap hari jumat, peringatan hari besar agama dan bersoa setelah kegiatan belajar mengajar', NULL, NULL),
(2, 'Membiasakan perilaku jujur melalui kegiatan pembelajaran, melaporkan semua barang temuan ke TU', NULL, NULL),
(3, 'Membiasakan perilaku disiplin melalui finger print, berpakaian seragam lengkap bagi semua warga sekolah sesuai dengan tata tertib yang berlaku', NULL, NULL),
(4, 'Membiasakan kepedulian pada sesama melalui sumbangan sukarela untuk siswa kurang mampu, infaq', NULL, NULL),
(5, 'Membudayakan kepedulian sosial pada warga sekolah yang mengalami musibah melalui sumbangan insidental', NULL, NULL),
(6, 'Membudayakan terhadap kepedulian lingkungan hidup yang ada disekitarnya', NULL, NULL),
(7, 'Membiasakan memilah dan membuang sampah pada tempatnya, program penghijauan dan lomba kebersihan kelas 3 bulan sekali', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `moto_profil`
--

CREATE TABLE `moto_profil` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `moto_points` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `moto_profil`
--

INSERT INTO `moto_profil` (`id`, `moto_points`, `created_at`, `updated_at`) VALUES
(1, 'Maju Bersama, Hebat Semua.', NULL, NULL),
(2, 'Tunjukkan Karyamu, Raih Prestasimu.', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidik_profil`
--

CREATE TABLE `pendidik_profil` (
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `foto_pendidik` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `point_home`
--

CREATE TABLE `point_home` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `desc` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa_aktif`
--

CREATE TABLE `siswa_aktif` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(100) NOT NULL,
  `laki` int(11) NOT NULL,
  `perempuan` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswa_aktif`
--

INSERT INTO `siswa_aktif` (`id`, `class`, `laki`, `perempuan`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 'X MIPA 1', 15, 20, 35, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `struktur_org_sekolah`
--

CREATE TABLE `struktur_org_sekolah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `desc` varchar(100) NOT NULL,
  `foto_org_sekolah` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tenaga_kependidikan_profil`
--

CREATE TABLE `tenaga_kependidikan_profil` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `foto_tenaga_kependidikan` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `univ_home`
--

CREATE TABLE `univ_home` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` varchar(50) NOT NULL,
  `percentage` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi_profil`
--

CREATE TABLE `visi_profil` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `visi_points` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `visi_profil`
--

INSERT INTO `visi_profil` (`id`, `visi_points`, `created_at`, `updated_at`) VALUES
(1, 'Unggul dalam mutu, mulia dalam perilaku serta berbudaya lingkungan terpadu', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wakepsek`
--

CREATE TABLE `wakepsek` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `foto_wakepsek` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ekskul`
--
ALTER TABLE `ekskul`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `greet_home`
--
ALTER TABLE `greet_home`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kepsek_profil`
--
ALTER TABLE `kepsek_profil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komite_sekolah`
--
ALTER TABLE `komite_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `misi_profil`
--
ALTER TABLE `misi_profil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `moto_profil`
--
ALTER TABLE `moto_profil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `point_home`
--
ALTER TABLE `point_home`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa_aktif`
--
ALTER TABLE `siswa_aktif`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `struktur_org_sekolah`
--
ALTER TABLE `struktur_org_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tenaga_kependidikan_profil`
--
ALTER TABLE `tenaga_kependidikan_profil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `univ_home`
--
ALTER TABLE `univ_home`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `visi_profil`
--
ALTER TABLE `visi_profil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `wakepsek`
--
ALTER TABLE `wakepsek`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ekskul`
--
ALTER TABLE `ekskul`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `greet_home`
--
ALTER TABLE `greet_home`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kepsek_profil`
--
ALTER TABLE `kepsek_profil`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `komite_sekolah`
--
ALTER TABLE `komite_sekolah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `misi_profil`
--
ALTER TABLE `misi_profil`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `moto_profil`
--
ALTER TABLE `moto_profil`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `point_home`
--
ALTER TABLE `point_home`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `siswa_aktif`
--
ALTER TABLE `siswa_aktif`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `struktur_org_sekolah`
--
ALTER TABLE `struktur_org_sekolah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tenaga_kependidikan_profil`
--
ALTER TABLE `tenaga_kependidikan_profil`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `univ_home`
--
ALTER TABLE `univ_home`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `visi_profil`
--
ALTER TABLE `visi_profil`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `wakepsek`
--
ALTER TABLE `wakepsek`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
