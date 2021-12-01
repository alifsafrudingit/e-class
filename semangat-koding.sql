-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Des 2021 pada 15.34
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `semangat-koding`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) NOT NULL,
  `courses_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mentors_id` bigint(20) NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint(20) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `courses`
--

INSERT INTO `courses` (`id`, `mentors_id`, `img`, `name`, `price`, `description`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, '', 'MERN Basic', 500000, '<p>Kelas MERN 1</p>', 'mern-basic', '2021-11-30 01:27:15', NULL, '2021-11-30 01:27:15'),
(2, 1, '', 'Javascript', 400000, '<p>Test</p>', 'javascript', '2021-11-28 23:09:00', '2021-11-28 21:57:50', '2021-11-28 23:09:00'),
(3, 1, '', 'Backend Developer (Laravel)', 10000000, '<p>Kelas Backend Developer Laravel</p>', 'backend-developer-laravel', '2021-11-30 01:27:18', '2021-11-29 23:09:33', '2021-11-30 01:27:18'),
(4, 1, 'public/images/iLIXdOdHy8GjUPucxIEwt3RrKpjY5AV0EWBYSNo1.jpg', 'Vue Js Intermediate', 500000, '<p>Test</p>', 'vue-js-intermediate', '2021-12-01 04:29:04', '2021-11-30 00:33:40', '2021-12-01 04:29:04'),
(5, 1, 'public/images/BNtqpej0nQ1rRutQT25LCOU5AIYfVUwLFUZf3Mcw.png', 'Laravel Expert', 1000000, '<p>Anda pasti tahu bahasa pemrograman PHP? Laravel adalah satu-satunya framework yang membantu Anda untuk memaksimalkan penggunaan PHP di dalam proses pengembangan website.&nbsp;</p>\r\n\r\n<p>PHP menjadi bahasa pemrograman yang sangat dinamis, tapi semenjak adanya Laravel, dia menjadi lebih powerful, cepat, aman, dan simpel. Setiap rilis versi terbaru, Laravel&nbsp; selalu memunculkan teknologi baru di antara framework PHP lainnya.</p>', 'laravel-expert', NULL, '2021-11-30 01:23:46', '2021-11-30 02:31:49'),
(6, 3, 'public/images/7CWBZPZewiPKDm77fKeuGXzwn0N6QAPDTg85iwKW.png', 'React Js Basic', 400000, '<p>React Js</p>', 'react-js-basic', NULL, '2021-11-30 01:25:19', '2021-11-30 01:25:19'),
(7, 1, 'public/images/t2vQcZ9I2IFMF3wmvJBgjOR3Zy7xGZSkJqcUTzTV.jpg', 'Golang Basic', 600000, '<p>Belajar golang yuk lets goooo</p>', 'golang-basic', '2021-12-01 02:02:59', '2021-11-30 22:26:30', '2021-12-01 02:02:59'),
(8, 1, 'public/images/MXUCrdwZ3MohWmZ7HEojFG6kLRo3gfiH6h9d5i0l.jpg', 'MERN', 700000, '<p>Kelas MERN 1</p>', 'mern', '2021-12-01 04:28:31', '2021-12-01 02:03:27', '2021-12-01 04:28:31'),
(9, 1, 'public/images/xWWUOWiBWOoFlOzxfas3L3YicD2ZkkOQYIGiqkAo.jpg', 'Golang GO', 700000, '<p>Golang GO</p>', 'golang-go', '2021-12-01 04:35:48', '2021-12-01 02:23:02', '2021-12-01 04:35:48'),
(11, 1, 'public/images/IaSwAbPKoNJlyEUp7G5MCdnPBppnlRAmDqQExd7d.jpg', 'Vue Js Expert', 500000, '<p>Vue JS</p>', 'vue-js-expert', '2021-12-01 04:33:52', '2021-12-01 04:32:14', '2021-12-01 04:33:52'),
(12, 1, 'public/images/wT0FB4xejjL2dFTJHYmUdHElPno9sAaGRBBcRY2D.jpg', 'Golang GO Expert', 600000, '<p>Kelas Golang</p>', 'golang-go-expert', NULL, '2021-12-01 04:36:29', '2021-12-01 04:36:29'),
(13, 1, 'public/images/G8Nz1TmLdiPbD71fU0oYtbWFGBVd5hjp3yY7smGi.jpg', 'MERN Intermediate', 850000, '<p>MERN Intermediate</p>', 'mern-intermediate', NULL, '2021-12-01 04:37:44', '2021-12-01 04:37:44'),
(14, 1, 'public/images/L6NP59LBBXwpXAgI7HE7B4bmcv1eIBO1N8NEmjOc.jpg', 'Vue.js State Management', 1000000, '<p>Belajar State Management VUEX</p>', 'vuejs-state-management', NULL, '2021-12-01 04:38:50', '2021-12-01 04:42:50'),
(15, 1, 'public/images/BVjiWIUFWyHbEbuhE6XifcUyThzBQEPhtJJ5WvR9.png', 'Flutter Basic', 578000, '<p>Yuk belajar flutter</p>', 'flutter-basic', NULL, '2021-12-01 04:41:18', '2021-12-01 04:41:18'),
(16, 3, 'public/images/ySpbGsMWzpwwbYQLWSVyIFYz5MuRY46VxtWuELPf.jpg', 'Python Dasar - Menengah', 980000, '<p>Yuk belajar yuk</p>', 'python-dasar-menengah', NULL, '2021-12-01 04:44:31', '2021-12-01 04:44:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `course_moduls`
--

CREATE TABLE `course_moduls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `courses_id` bigint(20) NOT NULL,
  `modul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `course_moduls`
--

INSERT INTO `course_moduls` (`id`, `courses_id`, `modul`, `url`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Introduction', '-', '2021-11-29 22:38:22', '2021-11-29 16:40:05', '2021-11-29 22:38:22'),
(2, 6, 'Add Edge Intro', 'public/videos/xAzGdA92bbjaoO6MhP33bF0LjM11DPRfWo73jeSJ.mp4', '2021-12-01 06:03:08', '2021-11-29 22:06:40', '2021-12-01 06:03:08'),
(3, 6, 'Remove Edge Intro', 'public/videos/gyGfABOJLe6g8BhXiaSHlT74I5HzuLCslsnLvn0w.mp4', '2021-12-01 06:03:11', '2021-11-29 22:38:58', '2021-12-01 06:03:11'),
(4, 14, 'Introduction', 'public/videos/fw1ccHmBwXQoPb8PTHCeeFgLTFfQi9oYWTv8AEUf.mp4', '2021-12-01 06:04:49', '2021-12-01 05:14:57', '2021-12-01 06:04:49'),
(5, 5, 'Factorial Interatively', 'public/videos/Vd01v7E0a5iPMnv4BxaJrbc3jwKRKmYp2j5rT4Uk.mp4', '2021-12-01 05:30:33', '2021-12-01 05:16:27', '2021-12-01 05:30:33'),
(6, 5, 'Factorial Iteratively', 'public/videos/HOcQfVZquqvUmHaCioljuUYt0tVSwF1RBg8HslQj.mp4', '2021-12-01 06:01:24', '2021-12-01 05:31:08', '2021-12-01 06:01:24'),
(7, 5, 'Liner Search BIG O', 'public/videos/CAXlYdPSUhp1PM45Qkxa7xR6JBz8vqpArxbXxH77.mp4', '2021-12-01 06:02:03', '2021-12-01 06:01:54', '2021-12-01 06:02:03'),
(8, 5, 'Linear Search BIG O', 'public/videos/EpVNo5pF28mwpnNGVSqyxeSuNYz8Yed9b43DWn9f.mp4', NULL, '2021-12-01 06:02:50', '2021-12-01 06:02:50'),
(9, 6, 'Selection Sort Big O Complexity', 'public/videos/GfoytOQ303maEy2WAtQwfSO2BvhpbUg1rFATYMDa.mp4', NULL, '2021-12-01 06:04:17', '2021-12-01 06:04:17'),
(10, 16, 'Insertion Sort Introduction', 'public/videos/nEExYEkwP2rrIMps9EF528hLGWPSewSHTyljz7Ne.mp4', NULL, '2021-12-01 06:15:19', '2021-12-01 06:15:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transactions`
--

CREATE TABLE `detail_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) NOT NULL,
  `courses_id` bigint(20) NOT NULL,
  `transactions_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_transactions`
--

INSERT INTO `detail_transactions` (`id`, `users_id`, `courses_id`, `transactions_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, NULL, NULL),
(2, 2, 6, 2, '2021-11-30 15:47:16', '2021-11-30 15:47:16'),
(3, 2, 4, 2, '2021-11-30 15:47:16', '2021-11-30 15:47:16'),
(4, 2, 5, 4, '2021-11-30 17:39:52', '2021-11-30 17:39:52'),
(5, 2, 5, 5, '2021-11-30 17:58:51', '2021-11-30 17:58:51'),
(6, 2, 4, 6, '2021-11-30 21:39:15', '2021-11-30 21:39:15'),
(7, 4, 5, 7, '2021-11-30 21:55:04', '2021-11-30 21:55:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mentors`
--

CREATE TABLE `mentors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mentors`
--

INSERT INTO `mentors` (`id`, `name`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Alif Safrudin', 'alif@gmail.com', '088233535978', '2021-11-29 23:49:02', '2021-11-29 23:49:02'),
(3, 'Akhtar Habil', 'akhtar@email.com', '08814106461', '2021-11-29 18:49:56', '2021-11-29 18:49:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_11_28_065203_create_sessions_table', 1),
(7, '2021_11_28_070238_add_roles_to_users_table', 1),
(8, '2021_11_28_070728_create_courses_table', 2),
(9, '2021_11_28_072220_create_mentors_table', 3),
(10, '2021_11_28_072507_create_transactions_table', 4),
(11, '2021_11_28_073646_create_detail_courses_table', 5),
(12, '2021_11_28_073937_create_detail_transactions_table', 5),
(13, '2021_11_29_163201_create_table_course_moduls_table', 6),
(14, '2021_11_29_163543_create_course_moduls_table', 7),
(15, '2021_11_30_121857_create_carts_table', 8);

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
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('NTbCmIxz9QD1SNGYGwQi1wD7S6xSYgwC0wbn1qwZ', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiR0c2WWlWRWFaU2trQUJCOTByY2FNZGJIa2oydEZoNWpSVk1QOWd2biI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9kYXNoYm9hcmQvbW9kdWwvMTAvZWRpdCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRyM283ZWpnaU50WHdHS1hEdTNseDdPVDZGZ0NOQ1FINC84TkhBeS5IdkpvUnNLMGJSRXloMiI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkcjNvN2VqZ2lOdFh3R0tYRHUzbHg3T1Q2RmdDTkNRSDQvOE5IQXkuSHZKb1JzSzBiUkV5aDIiO30=', 1638368980);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'MIDTRANS',
  `payment_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` bigint(20) NOT NULL DEFAULT 0,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PENDING',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transactions`
--

INSERT INTO `transactions` (`id`, `users_id`, `name`, `email`, `phone`, `payment`, `payment_url`, `total_price`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Alif', 'alif@gmail.com', '088233535978', 'MIDTRANS', 'aiuhglrerbguezlliznv', 500000, 'SUCCESS', NULL, NULL, '2021-11-29 06:19:06'),
(2, 2, 'Alif Safrudin', 'alif@gmail.com', '088233535978', 'MIDTRANS', 'https://app.sandbox.midtrans.com/snap/v2/vtweb/83cf21d6-eb2f-4821-8b84-c3633873b250', 900000, 'PENDING', NULL, '2021-11-30 15:47:16', '2021-11-30 15:47:17'),
(4, 2, 'Akhtar Habil', 'akhtar@email.com', '088141046748', 'MIDTRANS', 'https://app.sandbox.midtrans.com/snap/v2/vtweb/32200809-5c5a-4684-a312-4123124e8775', 1000000, 'PENDING', NULL, '2021-11-30 17:39:52', '2021-11-30 17:39:53'),
(5, 2, 'ali fineart', 'alif@gmail.com', '0882-3353-5978', 'MIDTRANS', 'https://app.sandbox.midtrans.com/snap/v2/vtweb/cbaea20d-96c4-4aae-bada-765be5d47c32', 1000000, 'PENDING', NULL, '2021-11-30 17:58:51', '2021-11-30 17:58:52'),
(6, 2, 'Hasnua', 'hsni@email.com', '08867426583', 'MIDTRANS', 'https://app.sandbox.midtrans.com/snap/v2/vtweb/197ff2a6-8b8c-40c9-85b7-36d3e43db8bc', 500000, 'PENDING', NULL, '2021-11-30 21:39:15', '2021-11-30 21:39:16'),
(7, 4, 'Alfarezi', 'alfarezi@gmail.com', '087654787564', 'MIDTRANS', 'https://app.sandbox.midtrans.com/snap/v2/vtweb/344ad860-0ae7-4036-be87-f572824a9d4a', 1000000, 'SUCCESS', NULL, '2021-11-30 21:55:04', '2021-11-30 22:23:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `roles`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(2, 'Alif Safrudin', 'alif@gmail.com', 'ADMIN', NULL, '$2y$10$r3o7ejgiNtXwGKXDu3lx7OT6FgCNCQH4/8NHAy.HvJoRsK0bREyh2', NULL, NULL, NULL, NULL, NULL, '2021-11-29 07:47:10', '2021-11-29 07:47:10'),
(3, 'Akhtar', 'akhtar@email.com', 'USER', NULL, '$2y$10$tQ.q9H2qePN8oTt0vn5oOehym/FXZEBHXlc0BxMbAgEDMHx4FCfny', NULL, NULL, NULL, NULL, NULL, '2021-11-29 07:47:51', '2021-11-29 07:47:51'),
(4, 'alfarezi', 'alfarezi@gmail.com', 'USER', NULL, '$2y$10$k7G/PAtQbBbaTl62pyjVtukpRbEz7LAxs7aP62QDx4BoTXSXQqZgW', NULL, NULL, NULL, NULL, NULL, '2021-11-30 21:48:11', '2021-11-30 21:48:11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courses_slug_unique` (`slug`);

--
-- Indeks untuk tabel `course_moduls`
--
ALTER TABLE `course_moduls`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detail_transactions`
--
ALTER TABLE `detail_transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `mentors`
--
ALTER TABLE `mentors`
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
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `transactions`
--
ALTER TABLE `transactions`
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
-- AUTO_INCREMENT untuk tabel `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `course_moduls`
--
ALTER TABLE `course_moduls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `detail_transactions`
--
ALTER TABLE `detail_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mentors`
--
ALTER TABLE `mentors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
