-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 10, 2015 at 12:39 PM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.29-1+deb.sury.org~trusty+3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `laravel2`
--

-- --------------------------------------------------------

--
-- Table structure for table `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(10) unsigned NOT NULL,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `cantidad_asistentes` int(11) NOT NULL,
  `tipo_curso` int(11) NOT NULL,
  `fecha_inicio` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cursos`
--

INSERT INTO `cursos` (`id`, `nombre`, `descripcion`, `visible`, `cantidad_asistentes`, `tipo_curso`, `fecha_inicio`, `direccion`, `created_at`, `updated_at`) VALUES
(1, 'Nuevo curso', 'descripcion curso', 1, 10, 0, '0000-00-00 00:00:00', 'Morelos', '2015-07-02 21:27:56', '2015-08-22 03:48:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'edita-usuario', 'Permite editar usuarios', 'crear nuevas entradas del blog', '2015-06-30 00:30:50', '2015-07-07 23:02:59'),
(9, 'crear-usuario', 'Permite Crear Usuarios', NULL, '2015-07-02 03:25:40', '2015-07-02 03:25:40'),
(12, 'elimina-usuario', 'Elimina los usuarios', NULL, '2015-07-07 22:34:07', '2015-07-07 22:34:07'),
(13, 'lista-usuario', 'acceso al listado de usuarios', NULL, '2015-07-07 22:34:36', '2015-07-07 22:35:01'),
(14, 'lista-permiso', '', NULL, '2015-07-08 03:48:53', '2015-07-08 03:48:53'),
(15, 'crear-permiso', '', NULL, '2015-07-08 03:49:01', '2015-07-08 03:49:01'),
(16, 'edita-permiso', '', NULL, '2015-07-08 03:49:09', '2015-07-08 03:49:09'),
(17, 'elimina-permiso', '', NULL, '2015-07-08 03:49:17', '2015-07-08 03:49:17'),
(18, 'lista-rol', '', NULL, '2015-07-08 19:46:54', '2015-07-08 19:46:54'),
(19, 'crear-rol', '', NULL, '2015-07-08 19:47:01', '2015-07-08 19:47:01'),
(20, 'edita-rol', '', NULL, '2015-07-08 19:47:09', '2015-07-08 19:47:09'),
(21, 'elimina-rol', '', NULL, '2015-07-08 19:47:17', '2015-07-08 19:47:17'),
(22, 'lista-curso', '', NULL, '2015-07-08 19:59:16', '2015-07-08 19:59:16'),
(23, 'crear-curso', '', NULL, '2015-07-08 19:59:25', '2015-07-08 19:59:25'),
(24, 'edita-curso', '', NULL, '2015-07-08 19:59:34', '2015-07-08 19:59:34'),
(25, 'elimina-curso', '', NULL, '2015-07-08 19:59:44', '2015-07-08 19:59:44');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE IF NOT EXISTS `permission_role` (
  `id` int(11) NOT NULL,
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`) VALUES
(13, 9, 26),
(14, 1, 26),
(36, 1, 27),
(37, 9, 27),
(38, 12, 27),
(39, 13, 26),
(40, 12, 26),
(43, 13, 25),
(44, 12, 25),
(45, 14, 25),
(46, 15, 25),
(48, 17, 25),
(49, 16, 25),
(50, 9, 25),
(51, 1, 25),
(52, 14, 27),
(53, 15, 27),
(54, 17, 27),
(55, 16, 27),
(56, 18, 27),
(57, 21, 25),
(58, 18, 25),
(59, 20, 25),
(60, 19, 25),
(61, 21, 27),
(62, 19, 27),
(63, 20, 27),
(64, 22, 27),
(65, 24, 27),
(66, 23, 27),
(67, 22, 25),
(68, 24, 25);

-- --------------------------------------------------------

--
-- Table structure for table `prueba`
--

CREATE TABLE IF NOT EXISTS `prueba` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `curso` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prueba2`
--

CREATE TABLE IF NOT EXISTS `prueba2` (
  `nombre` text NOT NULL,
  `curso` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(25, 'admin', 'puede acceder a todo', NULL, '2015-07-02 01:27:15', '2015-07-02 03:27:02'),
(26, 'invitado', 'solo se le permite ver algunas cosas', NULL, '2015-07-02 03:27:26', '2015-07-02 03:27:26'),
(27, 'gerente', 'gerente de tiendas', NULL, '2015-07-02 11:03:22', '2015-07-02 11:03:22');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE IF NOT EXISTS `role_user` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(8, 25),
(7, 27);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'david morales', 'disel@gmail.com', '$2y$10$pGdhsuwpPqqZMxS9ft8JkutW/CX4pntGbJZT5o55J8bpliqAoj2Ne', 'ODjHgUgYPhDKPpqbL783i3f9SLmLiIjUqi7cnCHXO5MbEsThINYcD9wtFQRH', '2015-07-07 21:56:02', '2015-07-08 02:27:34'),
(8, 'jorge baltazar', 'colorrr@gmail.com', '$2y$10$xdpEpdTkAxRmuVTlmgzbWePJQDMttYeQwU0blFlnq5rYDOxHRtZfG', 'aAwpeWvYzJHudvoULo0CEwbyMRLg766oHyuGCAG9Vl7v3EFtimgIVDf37qZV', '2015-07-07 21:56:44', '2015-08-22 03:42:03'),
(9, 'david', 'hola@gmail.com', '$2y$10$xdpEpdTkAxRmuVTlmgzbWePJQDMttYeQwU0blFlnq5rYDOxHRtZfG', 'AGEB0qhqtJTn2pk3EcASOWbDQtBiWR3wGVm2nCAtZWuadfIFIN9HjNtH2imK', '2015-08-17 21:27:30', '2015-08-22 03:42:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `prueba`
--
ALTER TABLE `prueba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `prueba`
--
ALTER TABLE `prueba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
