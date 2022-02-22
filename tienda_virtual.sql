-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-09-2021 a las 17:58:39
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_virtual`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Categoria`
--

CREATE TABLE `Categoria` (
  `Id_categoria` int(2) NOT NULL,
  `Nombrec` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Categoria`
--

INSERT INTO `Categoria` (`Id_categoria`, `Nombrec`) VALUES
(1, 'Cervezas'),
(2, 'Rones'),
(3, 'Whiskys'),
(4, 'Tequilas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Compra`
--

CREATE TABLE `Compra` (
  `id` bigint(20) NOT NULL,
  `Id_pedido` int(10) NOT NULL,
  `Id_producto` int(10) NOT NULL,
  `Fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Compra`
--

INSERT INTO `Compra` (`id`, `Id_pedido`, `Id_producto`, `Fecha`) VALUES
(5, 124, 1, '2021-09-08 00:38:05'),
(5, 125, 2, '2021-09-08 00:39:25'),
(5, 126, 2, '2021-09-08 00:39:25'),
(5, 127, 2, '2021-09-08 00:39:25'),
(5, 128, 2, '2021-09-08 00:39:26'),
(5, 129, 2, '2021-09-08 00:39:26'),
(5, 130, 2, '2021-09-08 00:39:27'),
(5, 131, 2, '2021-09-08 00:39:28'),
(5, 132, 2, '2021-09-08 00:39:28'),
(5, 133, 2, '2021-09-08 00:39:28'),
(5, 134, 2, '2021-09-08 00:39:29'),
(5, 135, 2, '2021-09-08 00:39:29'),
(5, 136, 2, '2021-09-08 00:39:30'),
(5, 137, 2, '2021-09-08 00:39:30'),
(5, 138, 2, '2021-09-08 00:39:30'),
(5, 139, 2, '2021-09-08 00:39:31'),
(5, 140, 2, '2021-09-08 00:39:31'),
(5, 141, 2, '2021-09-08 00:39:31'),
(5, 142, 2, '2021-09-08 00:39:32'),
(5, 143, 2, '2021-09-08 00:39:32'),
(5, 144, 2, '2021-09-08 00:39:33'),
(5, 145, 2, '2021-09-08 00:39:33'),
(5, 146, 2, '2021-09-08 00:39:33'),
(5, 147, 2, '2021-09-08 00:39:34'),
(5, 148, 2, '2021-09-08 00:39:36'),
(5, 149, 15, '2021-09-08 01:43:19'),
(5, 150, 2, '2021-09-08 01:47:37'),
(5, 151, 2, '2021-09-08 01:47:37'),
(5, 152, 2, '2021-09-08 01:48:12'),
(5, 153, 2, '2021-09-08 01:48:12'),
(5, 154, 3, '2021-09-08 02:27:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pedido`
--

CREATE TABLE `Pedido` (
  `Id_pedido` int(10) NOT NULL,
  `Fecha_salida` timestamp NULL DEFAULT current_timestamp(),
  `Fecha_entrega` date DEFAULT NULL,
  `Ciudad` varchar(15) NOT NULL,
  `Domicilio` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Pedido`
--

INSERT INTO `Pedido` (`Id_pedido`, `Fecha_salida`, `Fecha_entrega`, `Ciudad`, `Domicilio`) VALUES
(124, '2021-09-08 00:38:05', NULL, 'San Pelayo', 'Barrio el paraiso'),
(125, '2021-09-08 00:39:24', NULL, 'San Pelayo', 'Paraiso'),
(126, '2021-09-08 00:39:25', NULL, 'San Pelayo', 'Paraiso'),
(127, '2021-09-08 00:39:25', NULL, 'San Pelayo', 'Paraiso'),
(128, '2021-09-08 00:39:26', NULL, 'San Pelayo', 'Paraiso'),
(129, '2021-09-08 00:39:26', NULL, 'San Pelayo', 'Paraiso'),
(130, '2021-09-08 00:39:27', NULL, 'San Pelayo', 'Paraiso'),
(131, '2021-09-08 00:39:27', NULL, 'San Pelayo', 'Paraiso'),
(132, '2021-09-08 00:39:28', NULL, 'San Pelayo', 'Paraiso'),
(133, '2021-09-08 00:39:28', NULL, 'San Pelayo', 'Paraiso'),
(134, '2021-09-08 00:39:28', NULL, 'San Pelayo', 'Paraiso'),
(135, '2021-09-08 00:39:29', NULL, 'San Pelayo', 'Paraiso'),
(136, '2021-09-08 00:39:29', NULL, 'San Pelayo', 'Paraiso'),
(137, '2021-09-08 00:39:30', NULL, 'San Pelayo', 'Paraiso'),
(138, '2021-09-08 00:39:30', NULL, 'San Pelayo', 'Paraiso'),
(139, '2021-09-08 00:39:30', NULL, 'San Pelayo', 'Paraiso'),
(140, '2021-09-08 00:39:31', NULL, 'San Pelayo', 'Paraiso'),
(141, '2021-09-08 00:39:31', NULL, 'San Pelayo', 'Paraiso'),
(142, '2021-09-08 00:39:31', NULL, 'San Pelayo', 'Paraiso'),
(143, '2021-09-08 00:39:32', NULL, 'San Pelayo', 'Paraiso'),
(144, '2021-09-08 00:39:32', NULL, 'San Pelayo', 'Paraiso'),
(145, '2021-09-08 00:39:33', NULL, 'San Pelayo', 'Paraiso'),
(146, '2021-09-08 00:39:33', NULL, 'San Pelayo', 'Paraiso'),
(147, '2021-09-08 00:39:34', NULL, 'San Pelayo', 'Paraiso'),
(148, '2021-09-08 00:39:34', NULL, 'San Pelayo', 'Paraiso'),
(149, '2021-09-08 01:43:19', NULL, 'Ceret', 'Venus'),
(150, '2021-09-08 01:47:36', NULL, 'Montería', 'Mogambo'),
(151, '2021-09-08 01:47:37', NULL, 'Montería', 'Mogambo'),
(152, '2021-09-08 01:48:11', NULL, 'Montería', 'Mogambo'),
(153, '2021-09-08 01:48:12', NULL, 'Montería', 'Mogambo'),
(154, '2021-09-08 02:27:41', NULL, 'Sagun', 'calle1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Producto`
--

CREATE TABLE `Producto` (
  `Id_producto` int(10) NOT NULL,
  `Id_proveedor` int(10) NOT NULL,
  `Nombrep` varchar(25) NOT NULL,
  `Imagen` varchar(100) NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `PrecioVenta` decimal(20,0) NOT NULL,
  `PrecioCompra` decimal(20,0) NOT NULL,
  `Cantidad` int(100) NOT NULL,
  `Id_categoria` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Producto`
--

INSERT INTO `Producto` (`Id_producto`, `Id_proveedor`, `Nombrep`, `Imagen`, `Descripcion`, `PrecioVenta`, `PrecioCompra`, `Cantidad`, `Id_categoria`) VALUES
(1, 1, 'Club Colombia', 'producto1.png', 'Cerveza distribuida en Colombia por bavaria', '65000', '40000', 1000, 1),
(2, 1, 'Costeñita', 'producto2.jpg', 'Cerveza distribuida en Colombia por bavaria', '60000', '45000', 1000, 1),
(3, 1, 'Budweiser', 'producto3.png', 'Cerveza distribuida en Colombia por Postobon', '55000', '39000', 500, 1),
(4, 4, 'Aguardiente', 'producto4.png', 'Ron distribuida en Colombia por Licosinú', '47000', '30000', 150, 2),
(5, 4, 'Medellin 750', 'producto5.png', 'Ron distribuida en Colombia por Licosinú', '50000', '30000', 300, 2),
(6, 1, 'Nativa', 'producto6.jpeg', 'Cerveza distribuida en Colombia por bavaria', '35000', '20000', 1000, 1),
(7, 3, 'Heineken', 'producto7.jpg', 'Cerveza distribuida en Colombia por bavaria', '55000', '40000', 1000, 1),
(8, 1, 'Aguila Negra', 'producto8.png', 'Cerveza distribuida en Colombia por bavaria', '60000', '40000', 200, 1),
(9, 4, 'Buchana Master', 'producto9.png', 'Whisky de alta calidad importado desde Inglaterra y distribuido en la costa caribe por Licosinú', '110000', '80000', 150, 3),
(10, 4, 'Don Julio', 'producto10.png', 'Tequila refinado importado desde Mexico ', '150000', '130000', 100, 4),
(11, 1, 'Andina', 'producto11.jpeg', 'Cerveza distribuida por bavaria', '55000', '40000', 1000, 1),
(12, 1, 'BlackandWhite', 'producto12.png', 'Whisky escoses distribuida por licosinú en la región caribe', '55000', '40000', 1000, 3),
(13, 4, 'Dictador', 'producto13.jpg', 'Ron distribuido en la costa caribe por Licosinú', '18000', '15000', 150, 2),
(14, 4, 'Bacardí gran reserva 8', 'producto14.jpeg', 'Ron distribuido en la costa caribe por Licosinú', '100000', '60000', 1500, 2),
(15, 4, 'Red Label 750', 'producto15.jpeg', 'Whisky de alta pureza distribuido por Licosinú en la costa caribe', '90000', '70000', 80, 3),
(16, 4, 'Chivas regal 12 años', 'producto16.png', 'Whisky de alta pureza distribuido por Licosinú en la costa caribe', '135000', '110000', 80, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Proveedor`
--

CREATE TABLE `Proveedor` (
  `Id_proveedor` int(10) NOT NULL,
  `Nombrepro` varchar(15) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Telefono` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Proveedor`
--

INSERT INTO `Proveedor` (`Id_proveedor`, `Nombrepro`, `Correo`, `Telefono`) VALUES
(1, 'Bavaria', 'ba@gmail.com', '3015906043'),
(3, 'Postobon', 'postobon@gmail.com', '3015809056'),
(4, 'Licosinú', 'lsinu@gmail.com', '3110567980');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Apellido` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Edad` int(3) NOT NULL,
  `Telefono` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `Apellido`, `Edad`, `Telefono`) VALUES
(5, 'Camilo José', 'paterninapcamilo@gmail.com', NULL, '$2y$10$VDsXVIs8fKU9lc9xeU2Ide0EiFar/.KwQxFG99f3JS0whf3VQ2cSy', NULL, '2021-09-08 00:37:32', '2021-09-08 00:37:32', 'Paternina Pertuz', 19, '3015908072');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE `Usuario` (
  `Id` int(10) NOT NULL,
  `Nombre` varchar(15) NOT NULL,
  `Apellido` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `Telefono` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `Edad` int(3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`Id`, `Nombre`, `Apellido`, `email`, `email_verified_at`, `Telefono`, `password`, `remember_token`, `Edad`, `created_at`, `update_at`) VALUES
(2, 'Camilo', 'Paternina', 'paterninapcamilo@gmail.com', NULL, '3015908072', '$2y$10$LH6bEnUfx9ChMUfG1jpxTeNE9arLPbaDBsPk1X44bhrPWPDr/GT9W', NULL, 20, NULL, NULL),
(3, 'Yisel', 'Paternina', 'ejemplo@gmail.com', NULL, '3015908072', '$2y$10$/kLiYF5Cek/sgP005MxpheWf8.pJD94jVoiY1vr1uzq7AYKtRKJ0.', NULL, 15, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Valoracion`
--

CREATE TABLE `Valoracion` (
  `Id_valoracion` int(10) NOT NULL,
  `Calificacion` int(1) DEFAULT NULL,
  `id` bigint(20) NOT NULL,
  `Id_producto` int(10) NOT NULL,
  `Comentario` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Valoracion`
--

INSERT INTO `Valoracion` (`Id_valoracion`, `Calificacion`, `id`, `Id_producto`, `Comentario`) VALUES
(1, 5, 5, 2, 'Frías y llegarón justo a tiempo, un cliente feliz'),
(2, 3, 5, 2, 'Muy bien');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Categoria`
--
ALTER TABLE `Categoria`
  ADD PRIMARY KEY (`Id_categoria`);

--
-- Indices de la tabla `Compra`
--
ALTER TABLE `Compra`
  ADD KEY `id` (`id`),
  ADD KEY `Id_pedido` (`Id_pedido`),
  ADD KEY `Id_producto` (`Id_producto`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `Pedido`
--
ALTER TABLE `Pedido`
  ADD PRIMARY KEY (`Id_pedido`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `Producto`
--
ALTER TABLE `Producto`
  ADD PRIMARY KEY (`Id_producto`),
  ADD KEY `Id_proveedor` (`Id_proveedor`),
  ADD KEY `Id_categoria` (`Id_categoria`);

--
-- Indices de la tabla `Proveedor`
--
ALTER TABLE `Proveedor`
  ADD PRIMARY KEY (`Id_proveedor`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `Valoracion`
--
ALTER TABLE `Valoracion`
  ADD PRIMARY KEY (`Id_valoracion`),
  ADD KEY `Id_producto` (`Id_producto`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Categoria`
--
ALTER TABLE `Categoria`
  MODIFY `Id_categoria` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `Pedido`
--
ALTER TABLE `Pedido`
  MODIFY `Id_pedido` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `Producto`
--
ALTER TABLE `Producto`
  MODIFY `Id_producto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `Proveedor`
--
ALTER TABLE `Proveedor`
  MODIFY `Id_proveedor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `Valoracion`
--
ALTER TABLE `Valoracion`
  MODIFY `Id_valoracion` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Compra`
--
ALTER TABLE `Compra`
  ADD CONSTRAINT `Compra_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `Compra_ibfk_2` FOREIGN KEY (`Id_pedido`) REFERENCES `Pedido` (`Id_pedido`),
  ADD CONSTRAINT `Compra_ibfk_3` FOREIGN KEY (`Id_producto`) REFERENCES `Producto` (`Id_producto`);

--
-- Filtros para la tabla `Producto`
--
ALTER TABLE `Producto`
  ADD CONSTRAINT `Producto_ibfk_1` FOREIGN KEY (`Id_proveedor`) REFERENCES `Proveedor` (`Id_proveedor`),
  ADD CONSTRAINT `Producto_ibfk_2` FOREIGN KEY (`Id_categoria`) REFERENCES `Categoria` (`Id_categoria`);

--
-- Filtros para la tabla `Valoracion`
--
ALTER TABLE `Valoracion`
  ADD CONSTRAINT `Valoracion_ibfk_1` FOREIGN KEY (`Id_producto`) REFERENCES `Producto` (`Id_producto`),
  ADD CONSTRAINT `Valoracion_ibfk_2` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
