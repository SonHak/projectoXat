-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Temps de generació: 06-03-2018 a les 16:11:36
-- Versió del servidor: 5.7.21-0ubuntu0.16.04.1
-- Versió de PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `projectoXat`
--
CREATE DATABASE IF NOT EXISTS `projectoXat` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projectoXat`;

-- --------------------------------------------------------

--
-- Estructura de la taula `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE `chat` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `tipo` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcant dades de la taula `chat`
--

INSERT INTO `chat` (`id`, `nombre`, `id_user`, `tipo`, `created_at`, `updated_at`) VALUES
(1, 'Cornella centro', 1, 0, '2018-03-02 09:30:00', NULL),
(2, 'San Ildefons', 1, 0, '2018-03-02 09:30:00', NULL),
(3, 'Almeda', 1, 0, '2018-03-02 09:30:00', NULL),
(4, 'Rambla', 1, 0, '2018-03-02 09:30:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de la taula `denuncias`
--

DROP TABLE IF EXISTS `denuncias`;
CREATE TABLE `denuncias` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `foto` blob NOT NULL,
  `respuesta` text COLLATE utf8mb4_unicode_ci,
  `activa` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `mensajes`
--

DROP TABLE IF EXISTS `mensajes`;
CREATE TABLE `mensajes` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `mensaje` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_chat` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcant dades de la taula `mensajes`
--

INSERT INTO `mensajes` (`id`, `id_user`, `fecha`, `mensaje`, `id_chat`, `created_at`, `updated_at`) VALUES
(1, 1, '2018-03-02', 'adasdasdad', 1, '2018-03-02 16:39:43', '2018-03-02 16:39:43'),
(2, 1, '2018-03-02', 'asdadsa', 2, '2018-03-02 16:40:16', '2018-03-02 16:40:16'),
(3, 1, '2018-03-02', 'asdadasd', 3, '2018-03-02 17:11:56', '2018-03-02 17:11:56'),
(4, 1, '2018-03-02', 'hola 3', 3, '2018-03-02 17:26:49', '2018-03-02 17:26:49'),
(5, 1, '2018-03-02', 'hola 4', 4, '2018-03-02 17:26:55', '2018-03-02 17:26:55'),
(6, 1, '2018-03-02', 'hola', 2, '2018-03-02 17:33:55', '2018-03-02 17:33:55'),
(7, 1, '2018-03-02', 'prueba 34', 4, '2018-03-02 17:34:53', '2018-03-02 17:34:53'),
(8, 1, '2018-03-02', 'lala', 2, '2018-03-02 17:44:43', '2018-03-02 17:44:43'),
(9, 1, '2018-03-02', 'asdasd', 2, '2018-03-02 17:44:57', '2018-03-02 17:44:57'),
(10, 1, '2018-03-02', 'asdas', 3, '2018-03-02 17:46:49', '2018-03-02 17:46:49'),
(11, 1, '2018-03-02', 'asdasda', 4, '2018-03-02 17:50:51', '2018-03-02 17:50:51'),
(12, 1, '2018-03-02', 'cornella', 1, '2018-03-02 17:51:41', '2018-03-02 17:51:41'),
(13, 1, '2018-03-02', 'san ildefons', 2, '2018-03-02 17:51:54', '2018-03-02 17:51:54'),
(14, 1, '2018-03-02', 'AQUI FUNCIONA', 1, '2018-03-02 17:53:04', '2018-03-02 17:53:04'),
(15, 1, '2018-03-02', 'funciona?', 1, '2018-03-02 17:53:49', '2018-03-02 17:53:49'),
(16, 1, '2018-03-02', 'eeeeoo', 1, '2018-03-02 17:56:27', '2018-03-02 17:56:27'),
(17, 1, '2018-03-02', 'tiooo', 2, '2018-03-02 17:56:36', '2018-03-02 17:56:36'),
(18, 1, '2018-03-02', 'wooow', 3, '2018-03-02 17:56:43', '2018-03-02 17:56:43'),
(19, 1, '2018-03-02', 'jeeeeehaaaaa', 4, '2018-03-02 17:56:49', '2018-03-02 17:56:49'),
(20, 1, '2018-03-05', 'hola', 1, '2018-03-05 14:14:57', '2018-03-05 14:14:57'),
(21, 3, '2018-03-05', 'hola soy el moi', 2, '2018-03-05 15:33:10', '2018-03-05 15:33:10'),
(22, 2, '2018-03-05', 'hola soy el adri', 2, '2018-03-05 15:33:27', '2018-03-05 15:33:27'),
(23, 2, '2018-03-05', 'hola adri', 3, '2018-03-05 15:35:37', '2018-03-05 15:35:37'),
(24, 2, '2018-03-05', 'hola', 3, '2018-03-05 15:35:56', '2018-03-05 15:35:56'),
(25, 2, '2018-03-05', 'hola que tal estás?', 2, '2018-03-05 17:14:42', '2018-03-05 17:14:42'),
(26, 2, '2018-03-05', 'bien y tu?', 2, '2018-03-05 17:15:56', '2018-03-05 17:15:56'),
(27, 2, '2018-03-05', 'holaaaa', 2, '2018-03-05 17:17:06', '2018-03-05 17:17:06'),
(28, 2, '2018-03-05', 'sadasdadsad', 2, '2018-03-05 17:17:23', '2018-03-05 17:17:23'),
(29, 2, '2018-03-05', 'que se vea', 2, '2018-03-05 17:19:14', '2018-03-05 17:19:14'),
(30, 2, '2018-03-05', 'dddddd', 2, '2018-03-05 17:19:41', '2018-03-05 17:19:41'),
(31, 2, '2018-03-05', 'asd', 2, '2018-03-05 17:20:54', '2018-03-05 17:20:54'),
(32, 2, '2018-03-05', 'asdqweasdqwdwq', 2, '2018-03-05 17:21:43', '2018-03-05 17:21:43'),
(33, 3, '2018-03-05', 'hola que tal primo!', 2, '2018-03-05 17:25:30', '2018-03-05 17:25:30'),
(34, 2, '2018-03-05', 'hola qut eamdqwiodmqwp', 2, '2018-03-05 17:29:57', '2018-03-05 17:29:57'),
(35, 3, '2018-03-05', 'dqwiodqwnio', 2, '2018-03-05 17:30:41', '2018-03-05 17:30:41'),
(36, 3, '2018-03-05', 'hey que tal?', 2, '2018-03-05 17:32:04', '2018-03-05 17:32:04'),
(37, 2, '2018-03-05', 'Pues nada tio aqui estamos', 2, '2018-03-05 17:32:25', '2018-03-05 17:32:25');

-- --------------------------------------------------------

--
-- Estructura de la taula `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcant dades de la taula `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_02_05_184627_denuncias', 1),
(4, '2018_02_05_184639_chat', 1),
(5, '2018_02_05_184646_mensajes', 1),
(6, '2018_02_16_165751_noticias', 1);

-- --------------------------------------------------------

--
-- Estructura de la taula `noticias`
--

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE `noticias` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` blob NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `categoria` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `importante` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcant dades de la taula `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `desc`, `imagen`, `created_at`, `updated_at`, `categoria`, `importante`) VALUES
(1, 'prueba numero 2', 'eyyyyy', 0x4170702f73746f726167652f706870575761337063, '2018-03-05 14:21:21', '2018-03-05 14:21:21', 'hola', 0),
(2, 'otra', 'asdasdadasd', 0x4170702f73746f726167652f7068707a4c75737875, '2018-03-05 14:35:14', '2018-03-05 14:35:14', 'dos', 1),
(3, 'Consulta 1', 'adadsadasdsad', 0x4170702f73746f726167652f7068707343706b6c6a, '2018-03-05 14:35:27', '2018-03-05 14:35:27', 'hola', 0);

-- --------------------------------------------------------

--
-- Estructura de la taula `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcant dades de la taula `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.es', '$2y$10$pTHMzp5Fht.ZBRzOYjzsWejiqUMFvZCFcTuHHbaRkUYHrCObFvRcu', 1, 'DEfvUgB3GvzOXRgJzrPOGLYUB8UbrDfhO1tFzbZFnc23fqZJFTBkfJKbXDYc', '2018-03-02 15:47:59', '2018-03-02 15:47:59'),
(2, 'Adrian', 'adri@adri.es', '$2y$10$IK12vPmfYmhX5sOc72h5x.KEOlVJeulO8nu3HcjqtN9tB8ODyw3FS', 0, 'X5QhkYxDZsaqkHZ0VytZZ3kpwOFCNIdY2KXt7ylyt5F8HusQ89cGL8euRA8h', '2018-03-05 14:20:39', '2018-03-05 14:20:39'),
(3, 'moi', 'moi@moi.com', '$2y$10$GYAEVeuSO/Tbb9Xw4c49p.XvqYKtR6PTxsrmLn0gpi/ad08Oj7TBO', 0, NULL, '2018-03-05 15:24:31', '2018-03-05 15:24:31'),
(4, 'prueba', 'prueba@prueba.com', '$2y$10$5WwOb4m400fnTH/kR7fj1.FkVUswg54qrRh8dx4RIgrHoSyEki.IW', 0, 'gCDwvpQZTFTz8AWdDOL4SESvidnTw6KMHEkNAtAlx6XsAiotBMkUa5RC1n7C', '2018-03-06 14:10:43', '2018-03-06 14:10:43');

--
-- Indexos per taules bolcades
--

--
-- Index de la taula `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chat_id_user_foreign` (`id_user`);

--
-- Index de la taula `denuncias`
--
ALTER TABLE `denuncias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `denuncias_id_user_foreign` (`id_user`);

--
-- Index de la taula `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mensajes_id_user_foreign` (`id_user`),
  ADD KEY `mensajes_id_chat_foreign` (`id_chat`);

--
-- Index de la taula `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index de la taula `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Index de la taula `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index de la taula `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT per la taula `denuncias`
--
ALTER TABLE `denuncias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la taula `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT per la taula `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT per la taula `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT per la taula `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restriccions per taules bolcades
--

--
-- Restriccions per la taula `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Restriccions per la taula `denuncias`
--
ALTER TABLE `denuncias`
  ADD CONSTRAINT `denuncias_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Restriccions per la taula `mensajes`
--
ALTER TABLE `mensajes`
  ADD CONSTRAINT `mensajes_id_chat_foreign` FOREIGN KEY (`id_chat`) REFERENCES `chat` (`id`),
  ADD CONSTRAINT `mensajes_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
