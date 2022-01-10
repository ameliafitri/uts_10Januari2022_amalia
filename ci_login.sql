-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2022 pada 15.51
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `article`
--

CREATE TABLE `article` (
  `id` varchar(32) NOT NULL,
  `title` varchar(128) DEFAULT NULL,
  `slug` varchar(128) NOT NULL,
  `content` text DEFAULT NULL,
  `draft` enum('true','false') NOT NULL DEFAULT 'true',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `article`
--

INSERT INTO `article` (`id`, `title`, `slug`, `content`, `draft`, `created_at`) VALUES
('1', 'Hello World!', 'hello-world', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'false', '2021-12-29 22:24:47'),
('61cc854c76f904.93720595', 'adasd', 'adasd-61cc854c76f904.93720595', 'asdas', 'false', '2021-12-29 22:57:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback`
--

CREATE TABLE `feedback` (
  `id` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`, `created_at`) VALUES
('61cc7eaf1931c8.93575360', 'adi', 'adi@gmail.com', 'test 1', '2021-12-29 15:28:47'),
('61cc85fd46bde1.40670059', 'asdas', 'asdas@gmail.com', 'sadas', '2021-12-29 15:59:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_guru_26`
--

CREATE TABLE `tbl_guru_26` (
  `id_guru` int(10) NOT NULL,
  `usernameNA` text NOT NULL,
  `katakunci` text NOT NULL,
  `namauser` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_guru_26`
--

INSERT INTO `tbl_guru_26` (`id_guru`, `usernameNA`, `katakunci`, `namauser`) VALUES
(1, 'admin', '$2y$10$hRi1qju2KOeEPcBZ0wYfhu/PN5e9Wl.ddWeDTds8Uokad764X9D1a', 'Amalia Fitri Falahan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text NOT NULL,
  `created_at` datetime NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `avatar`, `created_at`, `last_login`) VALUES
(6118, 'Administrator', 'admin@mail.com', 'admin', '$2y$10$hRi1qju2KOeEPcBZ0wYfhu/PN5e9Wl.ddWeDTds8Uokad764X9D1a', 'avatar', '2021-08-15 06:22:33', '2022-01-10 15:29:45');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_guru_26`
--
ALTER TABLE `tbl_guru_26`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_guru_26`
--
ALTER TABLE `tbl_guru_26`
  MODIFY `id_guru` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6119;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
