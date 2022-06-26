-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jun 2022 pada 03.39
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sevima`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `discussion`
--

CREATE TABLE `discussion` (
  `id` int(5) UNSIGNED NOT NULL,
  `judul` varchar(64) NOT NULL,
  `pengirim` varchar(64) NOT NULL,
  `isi` text NOT NULL,
  `owner_id` int(5) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `discussion`
--

INSERT INTO `discussion` (`id`, `judul`, `pengirim`, `isi`, `owner_id`, `created_at`, `updated_at`) VALUES
(1, 'Penamaan variabel dalam kegiatan memprogram', 'Awaludin Nasir Ubadah', '<p>penamaan variabel dalam emmproram sangat penting</p>', 1, '2022-06-25 15:52:47', '2022-06-25 15:52:47'),
(2, 'Framework dalam pembuatan website sangat berguna', 'Udin Sedunia', '<p>Dengan menggunakan framework kita bisa menjadi lebih cepat dalam membuat website</p>', 2, '2022-06-25 15:58:54', '2022-06-25 15:58:54'),
(3, 'Algoritma Pemrograman', 'Udin Sedunia', '<p>Algoritma sangat penting untuk alur dalam sebuah kegiatan pemrograman</p>', 2, '2022-06-25 17:27:28', '2022-06-25 17:27:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `discussion_chat`
--

CREATE TABLE `discussion_chat` (
  `id` int(5) UNSIGNED NOT NULL,
  `pengirim` varchar(64) NOT NULL,
  `isi` text NOT NULL,
  `discussion_id` int(5) NOT NULL,
  `owner_id` int(5) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `discussion_chat`
--

INSERT INTO `discussion_chat` (`id`, `pengirim`, `isi`, `discussion_id`, `owner_id`, `created_at`, `updated_at`) VALUES
(1, 'Udin Sedunia', 'Iya sangat benar', 1, 2, '2022-06-25 16:21:49', '2022-06-25 16:21:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `file`
--

CREATE TABLE `file` (
  `id` int(5) UNSIGNED NOT NULL,
  `judul` varchar(64) NOT NULL,
  `slug` varchar(64) NOT NULL,
  `file` varchar(100) NOT NULL,
  `id_owner` int(5) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `file`
--

INSERT INTO `file` (`id`, `judul`, `slug`, `file`, `id_owner`, `created_at`, `updated_at`) VALUES
(2, 'Struktur Data', '1656165753_e228e5612605fe36417b', '1656165753_e228e5612605fe36417b.pptx', 1, '2022-06-25 09:02:33', '2022-06-25 09:02:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-06-25-021208', 'App\\Database\\Migrations\\User', 'default', 'App', 1656123879, 1),
(2, '2022-06-25-091458', 'App\\Database\\Migrations\\File', 'default', 'App', 1656148624, 2),
(3, '2022-06-25-150151', 'App\\Database\\Migrations\\Discussion', 'default', 'App', 1656172382, 3),
(4, '2022-06-25-150206', 'App\\Database\\Migrations\\DiscussionChat', 'default', 'App', 1656172383, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(64) NOT NULL,
  `tempat_lahir` varchar(64) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `photo`, `tempat_lahir`, `tanggal_lahir`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$aobtI/VCZsFalNaW6F5KieSlKGdCPpEkzxhzY/Z6vGbnDv4jZL1VG', 'admin@admin.com', 'Awaludin Nasir Ubadah', 'udin.jpg', 'Mojokerto', '2002-04-02', '2022-06-24 21:38:09', '2022-06-25 08:22:02'),
(2, 'user', '$2y$10$XEi9pLEpZWLu2gqn64T7eeBxovPyqJNaeLL/fOdzpBw3vFsejPdJq', 'user@user.com', 'Udin Sedunia', 'profile.jpg', '', '0000-00-00', '2022-06-25 15:57:48', '2022-06-25 15:57:48');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `discussion_chat`
--
ALTER TABLE `discussion_chat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT untuk tabel `discussion`
--
ALTER TABLE `discussion`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `discussion_chat`
--
ALTER TABLE `discussion_chat`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `file`
--
ALTER TABLE `file`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
