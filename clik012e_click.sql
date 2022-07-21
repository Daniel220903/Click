-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 31-05-2022 a las 01:00:48
-- Versión del servidor: 10.5.15-MariaDB-cll-lve
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clik012e_click`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE `archivos` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `ruta` varchar(100) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `size` int(50) NOT NULL,
  `publicacion` int(11) NOT NULL,
  `filtro` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria_arch` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL DEFAULT 'normal',
  `type` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `archivos`
--

INSERT INTO `archivos` (`id`, `user`, `ruta`, `tipo`, `size`, `publicacion`, `filtro`, `fecha`, `status`, `categoria_arch`, `estado`, `type`) VALUES
(1, 1, '', 'text', 0, 1, '', '2022-03-12 05:17:34', 'gratuito', 'deportes', 'eliminado', 'texto'),
(2, 1, '', 'text', 0, 2, '', '2022-03-12 05:18:09', 'gratuito', 'deportes', 'eliminado', 'texto'),
(3, 1, 'ID-3-NAME-19993B.jpg', 'image/jpeg', 8430, 3, 'moon', '2022-03-12 05:19:48', 'gratuito', 'kids', 'eliminado', 'imagen'),
(4, 1, 'ID-4-NAME-3F7412.jpg', 'image/png', 873119, 4, '', '2022-03-12 05:25:47', 'gratuito', 'deportes', 'eliminado', 'imagen'),
(5, 1, 'ID-5-NAME-B0204A.jpg', 'image/jpeg', 167216, 5, '', '2022-03-12 05:27:41', 'gratuito', 'entretenimiento', 'eliminado', 'imagen'),
(6, 1, '', 'text', 0, 6, '', '2022-03-12 05:28:18', 'exclusivo', 'bienestar', 'eliminado', 'texto'),
(7, 1, '', 'text', 0, 7, '', '2022-03-12 05:28:32', '', '', 'normal', 'texto'),
(8, 1, '', 'text', 0, 8, '', '2022-03-12 05:33:24', 'gratuito', 'deportes', 'eliminado', 'texto'),
(9, 1, 'ID-9-NAME-A5574B.jpg', 'image/png', 23284, 9, '', '2022-03-12 05:35:24', 'gratuito', 'entretenimiento', 'normal', 'imagen'),
(10, 1, 'ID-10-NAME-C799C3.mp4', 'video/mp4', 938144, 10, '', '2022-03-12 06:12:59', 'gratuito', 'entretenimiento', 'normal', 'video'),
(11, 1, 'ID-11-NAME-CC1D2D.mp4', 'video/mp4', 10382557, 11, '', '2022-03-12 06:17:25', 'gratuito', 'entretenimiento', 'eliminado', 'video'),
(12, 3, '', 'text', 0, 12, '', '2022-03-12 14:02:05', 'gratuito', 'bienestar', 'eliminado', 'texto'),
(14, 5, '', 'text', 0, 14, '', '2022-03-12 14:53:01', 'gratuito', 'musica', 'normal', 'texto'),
(15, 1, '', 'text', 0, 15, '', '2022-03-12 18:26:47', 'gratuito', 'comida', 'normal', 'texto'),
(16, 1, '', 'text', 0, 16, '', '2022-03-12 18:27:22', 'gratuito', 'deportes', 'normal', 'texto'),
(17, 3, '', 'text', 0, 17, '', '2022-03-12 19:11:15', 'gratuito', 'actualidad', 'normal', 'texto'),
(18, 7, 'ID-18-NAME-753989.jpg', 'image/jpeg', 3713318, 18, '', '2022-03-13 00:18:13', 'gratuito', 'hogar', 'eliminado', 'imagen'),
(22, 8, '', 'text', 0, 22, '', '2022-03-13 09:11:30', 'gratuito', 'moda', 'normal', 'texto'),
(23, 11, '', 'text', 0, 23, '', '2022-03-13 16:20:29', 'gratuito', 'bienestar', 'normal', 'texto'),
(24, 11, 'ID-24-NAME-9ACC99.jpg', 'image/jpeg', 18558, 24, '', '2022-03-13 16:21:12', 'gratuito', 'hogar', 'eliminado', 'imagen'),
(25, 11, 'ID-25-NAME-B97C3B.jpg', 'image/png', 23284, 25, '', '2022-03-13 16:26:06', 'exclusivo', 'videojuegos', 'eliminado', 'imagen'),
(26, 1, '', 'text', 0, 26, '', '2022-03-13 16:28:06', 'gratuito', 'kids', 'normal', 'texto'),
(30, 1, '', 'text', 0, 30, '', '2022-03-14 02:52:22', 'exclusivo', 'autos', 'normal', 'texto'),
(31, 11, '', 'text', 0, 31, '', '2022-03-15 15:11:00', 'gratuito', 'educativo', 'eliminado', 'texto'),
(32, 1, 'ID-32-NAME-24C28A.jpg', 'image/png', 34522, 32, 'willow', '2022-03-17 15:25:08', 'gratuito', 'hogar', 'normal', 'imagen'),
(33, 1, '', 'text', 0, 33, '', '2022-03-23 05:14:45', 'exclusivo', 'autos', 'eliminado', 'texto'),
(34, 11, 'ID-34-NAME-FD6245.jpg', 'image/jpeg', 4099991, 34, '', '2022-03-28 16:56:53', 'exclusivo', 'actualidad', 'eliminado', 'imagen'),
(35, 11, 'ID-35-NAME-AC2017.jpg', 'image/png', 84137, 35, '', '2022-03-28 16:58:06', 'gratuito', 'educativo', '', 'imagen'),
(36, 1, '', 'text', 0, 36, '', '2022-03-28 18:29:33', 'gratuito', 'educativo', '', 'texto'),
(37, 11, 'ID-37-NAME-0498EA.jpg', 'image/png', 176495, 37, '', '2022-04-08 06:13:57', 'gratuito', 'actualidad', '', 'imagen'),
(38, 11, 'ID-38-NAME-AFDA0F.jpg', 'image/jpeg', 74360, 38, '', '2022-04-10 04:41:52', 'gratuito', 'entretenimiento', '', 'imagen'),
(39, 11, 'ID-39-NAME-DAC22F.jpg', 'image/jpeg', 74360, 39, '', '2022-04-10 04:41:52', 'gratuito', 'entretenimiento', 'eliminado', 'imagen'),
(40, 1, 'ID-40-NAME-24337F.mp4', 'video/mp4', 24811193, 40, '', '2022-04-11 21:16:46', 'gratuito', 'moda', '', 'video'),
(41, 1, '', 'text', 0, 41, '', '2022-04-15 18:32:59', 'gratuito', 'educativo', 'eliminado', 'texto'),
(42, 1, '', 'text', 0, 42, '', '2022-04-15 18:52:34', 'gratuito', 'videojuegos', 'normal', 'texto'),
(43, 1, '', 'text', 0, 43, '', '2022-04-15 19:04:25', 'gratuito', 'historia', 'normal', 'texto'),
(44, 1, '', 'text', 0, 44, '', '2022-04-15 19:13:33', 'gratuito', 'autos', 'eliminado', 'texto'),
(45, 1, '', 'text', 0, 45, '', '2022-04-15 19:13:33', 'gratuito', 'autos', 'eliminado', 'texto'),
(46, 1, '', 'text', 0, 46, '', '2022-04-17 18:28:22', 'gratuito', 'entretenimiento', 'normal', 'texto'),
(47, 11, '', 'text', 0, 47, '', '2022-04-19 01:04:48', 'gratuito', 'entretenimiento', 'normal', 'texto'),
(48, 11, 'ID-48-NAME-E4534D.jpg', 'image/jpeg', 4099991, 48, '', '2022-04-19 03:26:31', 'gratuito', 'educativo', 'eliminado', 'imagen'),
(49, 29, '', 'text', 0, 49, '', '2022-04-22 19:23:12', 'gratuito', 'actualidad', 'normal', 'texto'),
(50, 11, 'ID-50-NAME-ADE196.jpg', 'image/jpeg', 11407, 50, '', '2022-04-23 06:22:57', 'gratuito', 'videojuegos', 'normal', 'imagen'),
(51, 11, '', 'text', 0, 51, '', '2022-04-23 06:31:07', 'gratuito', 'entretenimiento', 'normal', 'texto'),
(52, 11, 'ID-52-NAME-60B7CB.jpg', 'image/png', 17046, 52, '', '2022-04-23 18:52:20', 'exclusivo', 'videojuegos', 'eliminado', 'imagen'),
(53, 1, '', 'text', 0, 53, '', '2022-04-23 20:01:57', 'gratuito', 'actualidad', 'normal', 'texto'),
(54, 11, 'ID-54-NAME-CC9E0D.mp4', 'video/mp4', 121112566, 54, '', '2022-04-24 18:21:02', 'gratuito', 'entretenimiento', 'eliminado', 'video'),
(55, 11, 'ID-55-NAME-A0C6CF.mp4', 'video/mp4', 124091967, 55, '', '2022-04-24 21:50:32', 'gratuito', 'entretenimiento', 'eliminado', 'video'),
(56, 33, 'ID-56-NAME-0DB4DE.jpg', 'image/jpeg', 90211, 56, '', '2022-04-26 17:16:08', 'gratuito', 'comida', 'normal', 'imagen'),
(57, 1, '', 'text', 0, 57, '', '2022-04-26 18:18:52', '', '', 'eliminado', 'texto'),
(58, 11, 'ID-58-NAME-B7D29B.jpg', 'image/jpeg', 195297, 58, '', '2022-04-27 01:33:28', 'gratuito', 'entretenimiento', 'normal', 'imagen'),
(59, 18, 'ID-59-NAME-32E149.jpg', 'image/jpeg', 37254, 59, '', '2022-04-27 02:41:37', 'gratuito', 'actualidad', 'normal', 'imagen'),
(60, 18, '', 'text', 0, 60, '', '2022-04-27 02:44:06', 'gratuito', 'musica', 'eliminado', 'texto'),
(61, 18, '', 'text', 0, 61, '', '2022-04-27 02:45:49', 'gratuito', 'historia', 'eliminado', 'texto'),
(62, 11, '', 'text', 0, 62, '', '2022-05-01 01:20:45', 'gratuito', 'educativo', 'eliminado', 'texto'),
(63, 11, '', 'text', 0, 63, '', '2022-05-01 01:21:08', 'gratuito', 'hogar', 'eliminado', 'texto'),
(64, 11, '', 'text', 0, 64, '', '2022-05-01 01:22:03', 'gratuito', 'historia', 'eliminado', 'texto'),
(65, 11, '', 'text', 0, 65, '', '2022-05-01 01:23:03', 'gratuito', 'historia', 'eliminado', 'texto'),
(66, 11, '', 'text', 0, 66, '', '2022-05-01 01:23:48', 'gratuito', 'videojuegos', 'normal', 'texto'),
(67, 11, '', 'text', 0, 67, '', '2022-05-01 01:25:47', 'gratuito', 'videojuegos', 'eliminado', 'texto'),
(68, 11, '', 'text', 0, 68, '', '2022-05-01 02:49:54', 'gratuito', 'actualidad', 'eliminado', 'texto'),
(70, 11, '', 'text', 0, 70, '', '2022-05-01 03:05:35', 'gratuito', 'actualidad', 'eliminado', 'texto'),
(71, 11, '', 'text', 0, 71, '', '2022-05-01 03:06:38', 'gratuito', 'actualidad', 'normal', 'texto'),
(72, 11, '', 'text', 0, 72, '', '2022-05-01 03:10:14', 'gratuito', 'actualidad', 'normal', 'texto'),
(73, 11, 'ID-73-NAME-E95DF8.jpg', 'image/jpeg', 90590, 73, 'willow', '2022-05-01 03:22:21', 'exclusivo', 'actualidad', 'eliminado', 'imagen'),
(74, 11, '', 'text', 0, 74, '', '2022-05-01 03:28:05', 'exclusivo', 'historia', 'eliminado', 'texto'),
(75, 11, 'ID-75-NAME-CC29AD.jpg', 'image/png', 43768, 75, 'willow', '2022-05-01 06:01:31', 'gratuito', 'moda', 'eliminado', 'imagen'),
(76, 11, 'ID-76-NAME-0B53AE.jpg', 'image/jpeg', 36808, 76, '', '2022-05-01 21:07:13', 'exclusivo', 'deportes', 'eliminado', 'imagen'),
(77, 11, 'ID-77-NAME-E1039B.jpg', 'image/jpeg', 36808, 77, 'rise', '2022-05-01 21:07:58', 'exclusivo', 'entretenimiento', 'eliminado', 'imagen'),
(78, 1, 'ID-78-NAME-C0515C.jpg', 'image/jpeg', 36808, 78, 'moon', '2022-05-01 21:09:07', 'exclusivo', 'deportes', 'normal', 'imagen'),
(79, 1, 'ID-79-NAME-EA3424.jpg', 'image/jpeg', 36808, 79, '', '2022-05-01 21:10:01', 'gratuito', 'deportes', 'normal', 'imagen'),
(80, 11, '', 'text', 0, 80, '', '2022-05-01 22:17:04', 'exclusivo', 'hogar', 'eliminado', 'texto'),
(81, 11, 'ID-81-NAME-6EC0D5.jpg', 'image/jpeg', 135619, 81, '', '2022-05-01 22:21:23', 'gratuito', 'kids', 'eliminado', 'imagen'),
(82, 11, '', 'text', 0, 82, '', '2022-05-02 00:21:42', 'exclusivo', 'moda', 'eliminado', 'texto'),
(83, 11, 'ID-83-NAME-6945EE.jpg', 'image/jpeg', 83342, 83, '', '2022-05-02 03:13:38', 'gratuito', 'videojuegos', 'eliminado', 'imagen'),
(84, 11, 'ID-84-NAME-05F526.jpg', 'image/jpeg', 59320, 84, 'willow', '2022-05-02 03:15:45', 'exclusivo', 'videojuegos', 'eliminado', 'imagen'),
(85, 11, 'ID-85-NAME-CCE700.mp4', 'image/png', 73332, 85, '', '2022-05-02 23:49:55', 'gratuito', 'educativo', 'eliminado', 'video'),
(86, 11, 'ID-86-NAME-3796B9.mp4', 'application/pdf', 162605, 86, '', '2022-05-03 00:02:23', 'gratuito', 'educativo', 'eliminado', 'video'),
(87, 11, 'ID-87-NAME-1FD796.jpg', 'image/png', 336178, 87, 'willow', '2022-05-04 03:06:12', 'gratuito', 'moda', 'eliminado', 'imagen'),
(88, 11, 'ID-88-NAME-CFD80D.jpg', 'image/jpeg', 40542, 88, '', '2022-05-04 04:07:30', 'gratuito', 'deportes', 'normal', 'imagen'),
(89, 11, 'ID-89-NAME-0E8835.jpg', 'image/jpeg', 85242, 89, 'rise', '2022-05-04 04:12:27', 'gratuito', 'musica', 'eliminado', 'imagen'),
(90, 11, 'ID-90-NAME-6FBD31.jpg', 'image/jpeg', 85242, 90, 'lofi', '2022-05-04 04:13:28', 'gratuito', 'musica', 'normal', 'imagen'),
(91, 11, 'ID-91-NAME-8EC747.jpg', 'image/jpeg', 71560, 91, '', '2022-05-04 04:15:55', 'gratuito', 'educativo', 'eliminado', 'imagen'),
(92, 11, 'ID-92-NAME-8B7CCA.mp4', 'video/mp4', 11026943, 92, '', '2022-05-04 04:28:19', 'gratuito', 'moda', 'eliminado', 'video'),
(93, 11, '', 'text', 0, 93, '', '2022-05-05 18:57:32', 'exclusivo', 'entretenimiento', 'eliminado', 'texto'),
(94, 11, 'ID-94-NAME-2BBEE6.jpg', 'image/webp', 9949, 94, 'rise', '2022-05-05 19:00:19', 'exclusivo', 'entretenimiento', 'eliminado', 'imagen'),
(95, 11, 'ID-95-NAME-E8E4C3.jpg', 'image/jpeg', 227893, 95, 'lofi', '2022-05-06 03:37:29', 'gratuito', 'moda', 'eliminado', 'imagen'),
(96, 11, 'ID-96-NAME-93CFE9.jpg', 'image/jpeg', 227893, 96, '', '2022-05-06 03:41:29', 'gratuito', 'moda', 'eliminado', 'imagen'),
(97, 1, '', 'text', 0, 97, '', '2022-05-06 03:44:41', 'gratuito', 'educativo', 'normal', 'texto'),
(98, 11, '', 'text', 0, 98, '', '2022-05-06 04:06:46', 'gratuito', 'educativo', 'eliminado', 'texto'),
(99, 11, '', 'text', 0, 99, '', '2022-05-09 16:07:58', 'gratuito', 'entretenimiento', 'normal', 'texto'),
(100, 36, 'ID-100-NAME-268427.jpg', 'image/jpeg', 4099991, 100, '', '2022-05-09 16:35:26', 'exclusivo', 'entretenimiento', 'normal', 'imagen'),
(101, 1, '', 'text', 0, 101, '', '2022-05-11 15:20:52', 'gratuito', 'entretenimiento', 'eliminado', 'texto'),
(102, 1, '', 'text', 0, 102, '', '2022-05-11 15:24:49', 'gratuito', 'kids', 'eliminado', 'texto'),
(103, 1, '', 'text', 0, 103, '', '2022-05-11 15:24:51', 'gratuito', 'kids', 'eliminado', 'texto'),
(104, 1, '', 'text', 0, 104, '', '2022-05-11 15:24:52', 'gratuito', 'kids', 'eliminado', 'texto'),
(105, 1, '', 'text', 0, 105, '', '2022-05-11 15:24:57', 'gratuito', 'kids', 'eliminado', 'texto'),
(106, 11, 'ID-106-NAME-3EAD77.jpg', 'image/png', 24788, 106, 'moon', '2022-05-13 17:57:18', 'exclusivo', 'educativo', 'eliminado', 'imagen'),
(107, 11, '', 'text', 0, 107, '', '2022-05-16 16:33:21', 'exclusivo', 'educativo', 'eliminado', 'texto'),
(108, 11, '', 'text', 0, 108, '', '2022-05-16 23:28:05', 'gratuito', 'entretenimiento', 'normal', 'texto'),
(109, 46, 'ID-109-NAME-D35EBB.mp4', 'video/mp4', 13264397, 109, '', '2022-05-16 23:32:57', 'gratuito', 'videojuegos', 'eliminado', 'video'),
(110, 46, 'ID-110-NAME-CB0C29.mp4', 'video/mp4', 13264397, 110, '', '2022-05-16 23:34:52', 'gratuito', 'videojuegos', 'normal', 'video'),
(111, 30, 'ID-111-NAME-CF57AF.mp4', 'video/mp4', 7583226, 111, '', '2022-05-16 23:35:06', 'gratuito', 'educativo', 'normal', 'video'),
(112, 30, 'ID-112-NAME-48A5F5.mp4', 'video/mp4', 2660380, 112, '', '2022-05-16 23:40:55', 'gratuito', 'educativo', 'normal', 'video'),
(113, 11, 'ID-113-NAME-B985D1.mp4', 'video/mp4', 1488191, 113, '', '2022-05-16 23:51:57', 'gratuito', 'entretenimiento', 'eliminado', 'video'),
(114, 49, '', 'text', 0, 114, '', '2022-05-18 01:45:41', 'gratuito', 'actualidad', 'normal', 'texto'),
(115, 49, 'ID-115-NAME-E4D51C.jpg', 'image/jpeg', 9791, 115, '', '2022-05-18 01:46:27', 'gratuito', 'entretenimiento', 'normal', 'imagen'),
(116, 49, 'ID-116-NAME-3DF19B.jpg', 'image/jpeg', 23257, 116, '', '2022-05-18 01:50:12', 'gratuito', 'actualidad', 'normal', 'imagen'),
(117, 1, 'ID-117-NAME-56C2D3.jpg', 'image/jpeg', 82972, 117, '', '2022-05-18 01:54:57', 'exclusivo', 'actualidad', 'eliminado', 'imagen'),
(118, 1, '', 'text', 0, 118, '', '2022-05-18 01:58:22', 'exclusivo', 'actualidad', 'eliminado', 'texto'),
(119, 30, '', 'text', 0, 119, '', '2022-05-18 01:58:47', 'exclusivo', 'educativo', 'eliminado', 'texto'),
(120, 1, '', 'text', 0, 120, '', '2022-05-18 01:59:21', 'gratuito', 'historia', 'eliminado', 'texto'),
(121, 1, '', 'text', 0, 121, '', '2022-05-18 02:00:08', 'gratuito', 'actualidad', 'eliminado', 'texto'),
(122, 49, '', 'text', 0, 122, '', '2022-05-18 02:03:35', 'gratuito', 'actualidad', 'normal', 'texto'),
(123, 51, '', 'text', 0, 123, '', '2022-05-18 03:08:38', 'gratuito', 'comida', 'eliminado', 'texto'),
(124, 51, '', 'text', 0, 124, '', '2022-05-18 03:14:19', 'gratuito', 'comida', 'eliminado', 'texto'),
(125, 51, 'ID-125-NAME-C8D087.jpg', 'image/jpeg', 24295, 125, '', '2022-05-18 03:35:35', 'gratuito', 'comida', 'normal', 'imagen'),
(126, 52, 'ID-126-NAME-15AB5D.mp4', 'video/mp4', 10225022, 126, '', '2022-05-18 03:53:41', 'gratuito', 'educativo', 'normal', 'video'),
(127, 52, 'ID-127-NAME-DD9988.mp4', 'video/mp4', 20788906, 127, '', '2022-05-18 03:58:24', 'gratuito', 'entretenimiento', 'normal', 'video'),
(128, 53, 'ID-128-NAME-B8433B.jpg', 'image/png', 300993, 128, '', '2022-05-18 04:05:29', 'gratuito', 'moda', 'eliminado', 'imagen'),
(129, 53, 'ID-129-NAME-23AB9D.jpg', 'image/png', 44987, 129, '', '2022-05-18 04:06:25', 'gratuito', 'moda', 'eliminado', 'imagen'),
(130, 11, '', 'text', 0, 130, '', '2022-05-18 04:07:06', 'gratuito', 'autos', 'eliminado', 'texto'),
(131, 54, '', 'text', 0, 131, '', '2022-05-18 04:37:37', 'gratuito', 'deportes', 'normal', 'texto'),
(132, 53, 'ID-132-NAME-321896.jpg', 'image/png', 44700, 132, '', '2022-05-18 04:40:24', 'gratuito', 'entretenimiento', 'normal', 'imagen'),
(133, 54, '', 'text', 0, 133, '', '2022-05-18 04:41:20', 'gratuito', 'deportes', 'normal', 'texto'),
(134, 53, 'ID-134-NAME-328039.jpg', 'image/png', 316319, 134, '', '2022-05-18 04:41:48', 'gratuito', 'entretenimiento', 'normal', 'imagen'),
(135, 53, 'ID-135-NAME-ACE88C.jpg', 'image/png', 321427, 135, '', '2022-05-18 04:46:47', 'gratuito', 'entretenimiento', 'normal', 'imagen'),
(136, 3, 'ID-136-NAME-AAB81D.mp4', 'video/mp4', 5060315, 136, '', '2022-05-18 04:46:50', 'gratuito', 'entretenimiento', 'normal', 'video'),
(137, 12, 'ID-137-NAME-C29A2F.mp4', 'video/mp4', 8861469, 137, '', '2022-05-18 04:49:35', 'gratuito', 'educativo', 'normal', 'video'),
(138, 12, 'ID-138-NAME-E18700.jpg', 'image/jpeg', 48434, 138, '', '2022-05-18 04:54:57', 'gratuito', 'musica', 'normal', 'imagen'),
(139, 12, 'ID-139-NAME-8B9930.jpg', 'image/jpeg', 133097, 139, '', '2022-05-18 04:57:34', 'gratuito', 'videojuegos', 'normal', 'imagen'),
(140, 53, 'ID-140-NAME-E44953.jpg', 'image/png', 311318, 140, '', '2022-05-18 04:57:54', 'gratuito', 'entretenimiento', 'normal', 'imagen'),
(141, 55, '', 'text', 0, 141, '', '2022-05-18 05:00:38', 'gratuito', 'educativo', 'normal', 'texto'),
(142, 12, 'ID-142-NAME-1F1D1D.jpg', 'image/png', 360529, 142, '', '2022-05-18 05:02:28', 'gratuito', 'comida', 'normal', 'imagen'),
(143, 12, '', 'text', 0, 143, '', '2022-05-18 05:05:42', 'gratuito', 'actualidad', 'eliminado', 'texto'),
(144, 11, 'ID-144-NAME-CC3443.jpg', 'image/png', 1328645, 144, '', '2022-05-18 05:07:01', 'gratuito', 'videojuegos', 'normal', 'imagen'),
(145, 12, '', 'text', 0, 145, '', '2022-05-18 05:07:23', 'gratuito', 'actualidad', 'normal', 'texto'),
(146, 55, 'ID-146-NAME-75210A.mp4', 'video/mp4', 2411957, 146, '', '2022-05-18 05:08:50', 'gratuito', 'educativo', 'normal', 'video'),
(147, 55, 'ID-147-NAME-DF8942.mp4', 'video/mp4', 1916469, 147, '', '2022-05-18 05:10:35', 'gratuito', 'educativo', 'normal', 'video'),
(148, 12, 'ID-148-NAME-C3FD73.jpg', 'image/jpeg', 61027, 148, '', '2022-05-18 05:11:17', 'gratuito', 'entretenimiento', 'normal', 'imagen'),
(149, 55, 'ID-149-NAME-3FBC8A.mp4', 'video/mp4', 1362075, 149, '', '2022-05-18 05:12:14', 'exclusivo', 'historia', 'normal', 'video'),
(150, 12, 'ID-150-NAME-E23C93.jpg', 'image/jpeg', 112011, 150, '', '2022-05-18 05:22:22', 'gratuito', 'entretenimiento', 'normal', 'imagen'),
(151, 12, 'ID-151-NAME-6EF422.mp4', 'video/mp4', 6473700, 151, '', '2022-05-18 05:25:20', 'gratuito', 'educativo', 'normal', 'video'),
(152, 11, '', 'text', 0, 152, '', '2022-05-18 05:25:38', 'gratuito', 'entretenimiento', 'normal', 'texto'),
(153, 12, 'ID-153-NAME-B84799.jpg', 'image/jpeg', 81404, 153, '', '2022-05-18 05:27:04', 'gratuito', 'entretenimiento', 'normal', 'imagen'),
(154, 56, 'ID-154-NAME-B1133C.jpg', 'image/jpeg', 33791, 154, '', '2022-05-18 05:28:45', 'gratuito', 'entretenimiento', 'normal', 'imagen'),
(155, 12, 'ID-155-NAME-BBDBD8.mp4', 'video/mp4', 2737221, 155, '', '2022-05-18 05:29:13', 'gratuito', 'educativo', 'normal', 'video'),
(156, 11, 'ID-156-NAME-036128.mp4', 'video/mp4', 5993869, 156, '', '2022-05-18 05:30:14', 'gratuito', 'entretenimiento', 'normal', 'video'),
(157, 56, 'ID-157-NAME-E6EAA9.jpg', 'image/jpeg', 56110, 157, '', '2022-05-18 05:30:34', 'gratuito', 'actualidad', 'normal', 'imagen'),
(158, 12, 'ID-158-NAME-E5F7B4.jpg', 'image/jpeg', 141871, 158, 'rise', '2022-05-18 05:32:26', 'gratuito', 'entretenimiento', 'normal', 'imagen'),
(159, 11, 'ID-159-NAME-D4801F.jpg', 'image/jpeg', 135619, 159, '', '2022-05-18 05:36:21', 'gratuito', 'entretenimiento', 'normal', 'imagen'),
(160, 12, 'ID-160-NAME-3DC873.jpg', 'image/jpeg', 157300, 160, '', '2022-05-18 05:44:09', 'gratuito', 'entretenimiento', 'normal', 'imagen'),
(161, 11, 'ID-161-NAME-1C12D9.jpg', 'image/jpeg', 291442, 161, 'moon', '2022-05-18 05:45:21', 'gratuito', 'educativo', 'normal', 'imagen'),
(162, 12, 'ID-162-NAME-7FA40C.jpg', 'image/jpeg', 78498, 162, '', '2022-05-18 05:53:21', 'gratuito', 'entretenimiento', 'eliminado', 'imagen'),
(163, 58, 'ID-163-NAME-E9FF4B.jpg', 'image/jpeg', 93766, 163, '', '2022-05-18 05:54:56', 'gratuito', 'deportes', 'normal', 'imagen'),
(164, 59, 'ID-164-NAME-773A1C.jpg', 'image/png', 50498, 164, '', '2022-05-18 06:00:23', 'gratuito', 'actualidad', 'normal', 'imagen'),
(165, 59, 'ID-165-NAME-73441F.mp4', 'video/mp4', 8098589, 165, '', '2022-05-18 06:05:42', 'gratuito', 'musica', 'normal', 'video'),
(166, 58, 'ID-166-NAME-57D85D.jpg', 'image/jpeg', 1137609, 166, '', '2022-05-18 06:05:43', 'gratuito', 'actualidad', 'normal', 'imagen'),
(167, 59, '', 'text', 0, 167, '', '2022-05-18 06:08:24', 'gratuito', 'entretenimiento', 'normal', 'texto'),
(168, 59, 'ID-168-NAME-3BF2CF.jpg', 'image/jpeg', 26203, 168, '', '2022-05-18 06:11:01', 'gratuito', 'entretenimiento', 'normal', 'imagen'),
(169, 59, 'ID-169-NAME-4CC79B.jpg', 'image/jpeg', 120089, 169, '', '2022-05-18 06:15:06', 'gratuito', 'historia', 'eliminado', 'imagen'),
(170, 59, 'ID-170-NAME-AB1870.jpg', 'image/jpeg', 120089, 170, '', '2022-05-18 06:17:05', 'gratuito', 'historia', 'eliminado', 'imagen'),
(171, 59, 'ID-171-NAME-DB3E24.jpg', 'image/jpeg', 120089, 171, '', '2022-05-18 06:17:45', 'gratuito', 'historia', 'normal', 'imagen'),
(172, 60, 'ID-172-NAME-BB0FE3.mp4', 'video/mp4', 5751613, 172, '', '2022-05-18 06:58:14', 'gratuito', 'actualidad', 'normal', 'video'),
(173, 60, 'ID-173-NAME-787A8F.mp4', 'video/mp4', 8484253, 173, '', '2022-05-18 07:00:12', 'gratuito', 'entretenimiento', 'normal', 'video'),
(174, 1, 'ID-174-NAME-B640E7.jpg', 'image/jpeg', 414135, 174, '', '2022-05-18 14:12:32', 'gratuito', 'moda', 'normal', 'imagen'),
(175, 11, '', 'text', 0, 175, '', '2022-05-18 14:26:30', 'gratuito', 'entretenimiento', 'normal', 'texto'),
(176, 11, '', 'text', 0, 176, '', '2022-05-18 16:31:39', 'gratuito', 'educativo', 'normal', 'texto'),
(177, 11, '', 'text', 0, 177, '', '2022-05-18 16:52:31', 'gratuito', 'educativo', 'normal', 'texto'),
(178, 11, '', 'text', 0, 178, '', '2022-05-18 17:06:44', 'exclusivo', 'educativo', 'eliminado', 'texto'),
(179, 11, '', 'text', 0, 179, '', '2022-05-18 17:10:58', 'exclusivo', 'educativo', 'normal', 'texto'),
(180, 1, '', 'text', 0, 180, '', '2022-05-18 17:45:52', 'gratuito', 'deportes', 'eliminado', 'texto'),
(181, 61, 'ID-181-NAME-A81209.mp4', 'video/mp4', 61885407, 181, '', '2022-05-18 22:28:11', 'gratuito', 'videojuegos', 'normal', 'video'),
(182, 63, '', 'text', 0, 182, '', '2022-05-19 00:02:23', 'gratuito', 'actualidad', 'normal', 'texto'),
(183, 64, 'ID-183-NAME-3D336E.jpg', 'image/jpeg', 48874, 183, '', '2022-05-19 00:07:48', 'gratuito', 'educativo', 'eliminado', 'imagen'),
(184, 64, 'ID-184-NAME-60AACF.jpg', 'image/jpeg', 48874, 184, '', '2022-05-19 00:09:20', 'gratuito', 'entretenimiento', 'normal', 'imagen'),
(185, 63, 'ID-185-NAME-2B426F.mp4', 'video/mp4', 3052215, 185, '', '2022-05-19 00:51:15', 'gratuito', 'musica', 'normal', 'video'),
(186, 1, 'ID-186-NAME-9917B1.jpg', 'image/jpeg', 15221, 186, '', '2022-05-19 02:22:21', 'gratuito', 'autos', 'normal', 'imagen'),
(187, 1, '', 'text', 0, 187, '', '2022-05-19 02:27:52', 'gratuito', 'hogar', 'eliminado', 'texto'),
(188, 50, '', 'text', 0, 188, '', '2022-05-19 02:31:15', 'gratuito', 'kids', 'normal', 'texto'),
(189, 29, 'ID-189-NAME-212FEC.jpg', 'image/jpeg', 1792263, 189, '', '2022-05-19 04:38:04', 'gratuito', 'entretenimiento', 'eliminado', 'imagen'),
(190, 29, 'ID-190-NAME-3BC28D.jpg', 'image/jpeg', 1735259, 190, '', '2022-05-19 04:39:46', 'gratuito', 'educativo', 'eliminado', 'imagen'),
(191, 55, '', 'text', 0, 191, '', '2022-05-19 14:31:56', 'exclusivo', 'moda', 'normal', 'texto'),
(192, 30, '', 'text', 0, 192, '', '2022-05-19 17:59:41', 'gratuito', 'entretenimiento', 'eliminado', 'texto'),
(193, 1, 'ID-193-NAME-C809EC.jpg', 'image/jpeg', 2697144, 193, 'rise', '2022-05-19 19:08:29', 'gratuito', 'moda', 'normal', 'imagen'),
(194, 1, '', 'text', 0, 194, '', '2022-05-19 19:08:51', 'exclusivo', 'kids', 'normal', 'texto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bloqueos`
--

CREATE TABLE `bloqueos` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `blocked` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id` int(11) NOT NULL,
  `id_transaccion` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `status` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `id_cliente` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`id`, `id_transaccion`, `fecha`, `status`, `email`, `id_cliente`, `total`) VALUES
(1, '3HP85840YV4144529', '2022-04-04 18:27:29', 'COMPLETED', 'sb-krvlg15437604@personal.example.com', '989QQL4M2BK5G', 100.00),
(2, '1X6067266C5741545', '2022-04-16 03:04:46', 'COMPLETED', 'sb-fzkcf12016912@personal.example.com', 'DMTUDPW2CJFH2', 100.00),
(3, '4J4105443E138320G', '2022-04-16 03:05:50', 'COMPLETED', 'sb-fzkcf12016912@personal.example.com', 'DMTUDPW2CJFH2', 100.00),
(4, '7NK92382GT6172422', '2022-04-16 03:07:26', 'COMPLETED', 'sb-fzkcf12016912@personal.example.com', 'DMTUDPW2CJFH2', 100.00),
(5, '6TJ41999XE725330X', '2022-04-16 03:10:24', 'COMPLETED', 'sb-fzkcf12016912@personal.example.com', 'DMTUDPW2CJFH2', 100.00),
(6, '89948349VP047303N', '2022-04-16 03:10:49', 'COMPLETED', 'sb-fzkcf12016912@personal.example.com', 'DMTUDPW2CJFH2', 100.00),
(7, '9G608248F4371315D', '2022-04-16 03:11:35', 'COMPLETED', 'sb-fzkcf12016912@personal.example.com', 'DMTUDPW2CJFH2', 100.00),
(8, '1K006018XU649540P', '2022-04-16 03:12:52', 'COMPLETED', 'sb-fzkcf12016912@personal.example.com', 'DMTUDPW2CJFH2', 100.00),
(9, '4GD114228J5752202', '2022-04-16 16:43:56', 'COMPLETED', 'sb-fzkcf12016912@personal.example.com', 'DMTUDPW2CJFH2', 100.00),
(10, '31036349L4348001D', '2022-04-16 16:47:26', 'COMPLETED', 'sb-fzkcf12016912@personal.example.com', 'DMTUDPW2CJFH2', 100.00),
(11, '94W82125HV1389428', '2022-04-16 16:49:02', 'COMPLETED', 'sb-fzkcf12016912@personal.example.com', 'DMTUDPW2CJFH2', 22.00),
(12, '9RR65596KH000150K', '2022-04-18 01:49:35', 'COMPLETED', 'sb-fzkcf12016912@personal.example.com', 'DMTUDPW2CJFH2', 25.00),
(13, '5MC67592BS604100C', '2022-04-18 01:50:10', 'COMPLETED', 'sb-fzkcf12016912@personal.example.com', 'DMTUDPW2CJFH2', 75.00),
(14, '0L884199XB6552644', '2022-04-27 15:45:26', 'COMPLETED', 'sb-krvlg15437604@personal.example.com', '989QQL4M2BK5G', 75.00),
(15, '6W876213H1802552W', '2022-05-01 01:45:32', 'COMPLETED', 'sb-fzkcf12016912@personal.example.com', 'DMTUDPW2CJFH2', 75.00),
(16, '7U9145624X230354H', '2022-05-18 17:33:41', 'COMPLETED', 'sb-krvlg15437604@personal.example.com', '989QQL4M2BK5G', 15.00),
(17, '1VB23832X0400830R', '2022-05-18 17:36:08', 'COMPLETED', 'sb-krvlg15437604@personal.example.com', '989QQL4M2BK5G', 200.00),
(18, '0KD92566FT848082L', '2022-05-19 19:12:18', 'COMPLETED', 'sb-krvlg15437604@personal.example.com', '989QQL4M2BK5G', 200.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `creadores`
--

CREATE TABLE `creadores` (
  `id` int(11) NOT NULL,
  `id_creador` int(11) NOT NULL,
  `precio_suscripcion` decimal(10,2) DEFAULT NULL,
  `fecha_alta` datetime NOT NULL,
  `descripcion_creador` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `reportes` int(11) NOT NULL,
  `terminos` int(11) NOT NULL DEFAULT 0 COMMENT '0 = No aceptado - 1 = Aceptado'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `creadores`
--

INSERT INTO `creadores` (`id`, `id_creador`, `precio_suscripcion`, `fecha_alta`, `descripcion_creador`, `reportes`, `terminos`) VALUES
(2, 1, 15.00, '2022-03-28 18:47:47', 'No tengo mucho contenido exclusivo pero mi suscripcion es barata por lo cual deberias de comprar mi suscripcion', 0, 1),
(4, 11, 200.00, '2022-05-01 02:47:22', 'AquÃ­ podrÃ¡s encontrar cursos sobre HTML, CSS y Javascript y lo bÃ¡sico en PHP  y bases de datos, para que puedas crear tu sitio web desde 0', 0, 0),
(5, 36, 5000.00, '2022-05-09 16:32:00', '', 0, 0),
(6, 49, 100.00, '2022-05-18 01:42:25', 'Subo contenido relacionado a la politica, siempre desde el humor, no me cancelen.', 0, 0),
(7, 30, 100.00, '2022-05-18 02:03:08', 'Cursos de ProgramaciÃ³n orientada a objetos!', 0, 0),
(8, 55, 200.00, '2022-05-18 05:06:45', 'Soy maestro de billar y de boliche, en mi contenido exclusivo podran ver a mi alumno mas destacado\r\n', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `post` int(11) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `likes`
--

INSERT INTO `likes` (`id`, `usuario`, `post`, `fecha`) VALUES
(4, 1, 7, '2022-03-12 05:32:51'),
(6, 1, 9, '2022-03-12 05:37:56'),
(7, 1, 10, '2022-03-12 06:13:11'),
(15, 8, 7, '2022-03-13 09:10:56'),
(19, 11, 23, '2022-03-13 16:20:32'),
(24, 1, 23, '2022-03-13 17:47:19'),
(25, 1, 22, '2022-03-13 17:47:20'),
(29, 14, 28, '2022-03-14 03:46:32'),
(45, 11, 22, '2022-03-18 18:18:28'),
(46, 11, 17, '2022-03-18 18:18:33'),
(48, 11, 14, '2022-03-18 18:19:27'),
(49, 11, 9, '2022-03-18 18:19:30'),
(64, 11, 35, '2022-03-28 20:07:26'),
(66, 11, 16, '2022-04-01 00:35:17'),
(67, 11, 27, '2022-04-02 02:00:41'),
(68, 0, 36, '2022-04-03 06:18:23'),
(71, 21, 35, '2022-04-08 06:08:45'),
(78, 30, 50, '2022-04-28 00:38:29'),
(79, 30, 59, '2022-04-28 00:38:31'),
(80, 30, 51, '2022-04-28 00:38:39'),
(81, 30, 49, '2022-04-28 00:38:51'),
(85, 1, 58, '2022-04-28 14:14:22'),
(87, 1, 111, '2022-05-17 02:56:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id_msj` int(11) NOT NULL,
  `titulo` varchar(100) CHARACTER SET utf8 NOT NULL,
  `mensaje` text CHARACTER SET utf8 NOT NULL,
  `de` int(11) NOT NULL,
  `para` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `leido` int(11) NOT NULL,
  `estado` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id_msj`, `titulo`, `mensaje`, `de`, `para`, `fecha`, `leido`, `estado`) VALUES
(1, 'Prueba', 'idosjfisdojfiosdjdo', 1, 1, '2022-03-12 13:51:55', 0, 'normal'),
(2, 'Hola como estas', 'Eres un dios', 5, 4, '2022-03-12 14:57:52', 1, 'normal'),
(4, 'Hola', 'Hola compaÃ±ero como estas, soy nuevo por aqui', 11, 1, '2022-03-13 16:48:22', 0, 'normal'),
(5, 'Prueba en el ceti', 'jdkislugs ugdsld sgsdilg sdigl sdilgusldig sidg usdlgu sidl gsdilgu slg uwgne, f bowilu gwÃ±otisnb,shbjksugilwug', 11, 1, '2022-03-15 15:13:41', 0, 'normal'),
(6, 'Hola', 'hfsaohfsiaofusjaohfashof', 1, 11, '2022-03-17 15:29:52', 0, 'normal'),
(8, 'Chupame los huevos', 'Porfavor', 27, 11, '2022-04-19 18:25:11', 0, 'eliminado'),
(9, 'Perro', 'Estamos al 100 perro', 11, 1, '2022-04-24 18:02:45', 0, 'normal'),
(10, 'Hola', 'Esto es una prueba xd', 29, 11, '2022-04-24 18:04:33', 0, 'normal'),
(11, 'Kiubo', 'Ya me gradue o que profe ???', 11, 18, '2022-04-27 15:37:07', 1, 'normal'),
(12, 'Prueba', 'Gracias por registrarme', 36, 11, '2022-05-09 16:37:54', 0, 'normal'),
(13, 'Saludos', 'Hola cesar', 30, 1, '2022-05-09 23:33:18', 0, 'normal'),
(14, 'hola como estas', 'hola', 11, 11, '2022-05-16 02:59:04', 0, 'normal'),
(15, '123', 'idvjosdghsdoigh', 1, 1, '2022-05-17 16:35:31', 0, 'normal'),
(16, 'Me chupas los huevos', 'Vete a la verga pendejo no hables mal de amlo', 11, 49, '2022-05-18 02:23:10', 1, 'normal'),
(17, 'Graduacion', 'Ya tenemos todo listo para geaduarnos, ya todo el deseÃ±o ya quedo, funciones tambien, esta red es muy bonita', 1, 11, '2022-05-18 17:31:27', 0, 'normal'),
(18, 'QuÃ© onda mi paÂ´?', 'Jajajaja ya te diste cuenta que el que te ha estado escribiendo todo el tiempo por whats soy yo? xd', 64, 30, '2022-05-19 00:40:57', 0, 'normal'),
(19, 'Piedrita', 'Saca la piedra, bro', 30, 64, '2022-05-19 00:44:34', 0, 'normal'),
(20, 'Hola', 'Amigo', 30, 3, '2022-05-19 19:14:19', 1, 'normal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `id_pago` int(11) NOT NULL,
  `user_creador` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creador` int(11) NOT NULL,
  `user_pagador` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pagador` int(11) NOT NULL,
  `fecha_pago` datetime DEFAULT NULL,
  `precio` decimal(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`id_pago`, `user_creador`, `creador`, `user_pagador`, `pagador`, `fecha_pago`, `precio`) VALUES
(16, 'Kev_Y', 11, 'Daniel', 1, '2022-04-18 01:49:35', 25.00),
(17, 'Daniel', 1, 'Daniel', 1, '2022-04-18 01:50:10', 75.00),
(18, 'Daniel', 1, 'Kev_Y', 11, '2022-04-27 15:45:26', 75.00),
(20, 'Kev_Y', 11, 'Kev_Y', 11, NULL, NULL),
(21, 'Chris', 36, 'Chris', 36, NULL, NULL),
(22, 'Patricio', 49, 'Patricio', 49, NULL, NULL),
(23, 'bicho', 30, 'bicho', 30, NULL, NULL),
(24, 'Pedro', 55, 'Pedro', 55, NULL, NULL),
(25, 'Daniel', 1, 'bicho', 30, '2022-05-18 17:33:41', 15.00),
(26, 'Kev_Y', 11, 'bicho', 30, '2022-05-18 17:36:08', 200.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `ubicacion` varchar(250) NOT NULL,
  `fecha` datetime NOT NULL,
  `comentarios` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `favoritos` int(11) NOT NULL,
  `status_pub` varchar(20) NOT NULL,
  `categoria_pub` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL DEFAULT 'normal',
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`id`, `user`, `descripcion`, `ubicacion`, `fecha`, `comentarios`, `likes`, `favoritos`, `status_pub`, `categoria_pub`, `estado`, `type`) VALUES
(1, 1, 'Hola esta es la publicacion numero 1', '', '2022-03-12 05:17:34', 0, 0, 0, 'gratuito', 'deportes', 'eliminado', 'texto'),
(2, 1, 'PUBLICACION SOBRE DEPORTES', '', '2022-03-12 05:18:09', 0, 0, 0, 'gratuito', 'deportes', 'eliminado', 'texto'),
(3, 1, 'PEZ NEMO EZ NEMO PEZ NEMO', '', '2022-03-12 05:19:48', 0, 0, 0, 'gratuito', 'kids', 'eliminado', 'imagen'),
(4, 1, 'Mi casa en minecraft', '', '2022-03-12 05:25:47', 0, 3, 0, 'gratuito', 'deportes', 'eliminado', 'imagen'),
(5, 1, 'Aqui con la raza AJUA PRIMO', '', '2022-03-12 05:27:41', 0, 0, 0, 'gratuito', 'entretenimiento', 'eliminado', 'imagen'),
(6, 1, 'hOLA COMO ESTAS?', '', '2022-03-12 05:28:18', 0, 0, 0, 'exclusivo', 'bienestar', 'eliminado', 'texto'),
(7, 1, 'Deja de publicar mamadas kevin', '', '2022-03-12 05:28:32', 0, 2, 0, '', '', 'normal', 'texto'),
(8, 1, 'Era una prueba', '', '2022-03-12 05:33:24', 0, 1, 0, 'gratuito', 'deportes', 'eliminado', 'texto'),
(9, 1, 'CRUD EN LO QUE SON LAS BASES DE DATOS', '', '2022-03-12 05:35:24', 0, 2, 0, 'gratuito', 'entretenimiento', 'normal', 'imagen'),
(10, 1, 'La tome cuando fui a ciudad Purtual', 'Ciudad Portual', '2022-03-12 06:12:59', 0, 2, 0, 'gratuito', 'entretenimiento', 'normal', 'video'),
(11, 1, 'Buena pelea fuee ', '', '2022-03-12 06:17:25', 0, 5, 0, 'gratuito', 'entretenimiento', 'eliminado', 'video'),
(14, 5, 'Esto es una simple prueba, para el registro de usuario', '', '2022-03-12 14:53:01', 0, 1, 0, 'gratuito', 'musica', 'normal', 'texto'),
(15, 1, 'Comida', '', '2022-03-12 18:26:47', 0, 0, 0, 'gratuito', 'comida', 'normal', 'texto'),
(16, 1, 'Deportes', '', '2022-03-12 18:27:22', 0, 1, 0, 'gratuito', 'deportes', 'normal', 'texto'),
(22, 8, 'HOLI MY LOVE YOU', '', '2022-03-13 09:11:30', 0, 2, 0, 'gratuito', 'moda', 'normal', 'texto'),
(23, 11, 'Prueba ', '', '2022-03-13 16:20:29', 0, 2, 0, 'gratuito', 'bienestar', 'normal', 'texto'),
(24, 11, 'El comedor que comprare', '', '2022-03-13 16:21:12', 0, 1, 0, 'gratuito', 'hogar', 'eliminado', 'imagen'),
(25, 11, 'Esta es una imagen', '', '2022-03-13 16:26:06', 0, 0, 0, 'exclusivo', 'videojuegos', 'eliminado', 'imagen'),
(26, 1, 'Ponte a hacer el pendejo css y deja de publicar mamadas puta madre', '', '2022-03-13 16:28:06', 0, 2, 0, 'gratuito', 'kids', 'eliminado', 'texto'),
(30, 1, 'HIFDAOHFNIAD', '', '2022-03-14 02:52:22', 0, 0, 0, 'exclusivo', 'autos', 'normal', 'texto'),
(31, 11, '.', '', '2022-03-15 15:11:00', 0, 3, 0, 'gratuito', 'educativo', 'eliminado', 'texto'),
(32, 1, 'Este es un foco', '', '2022-03-17 15:25:08', 0, 1, 0, 'gratuito', 'hogar', 'eliminado', 'imagen'),
(33, 1, 'Publicacion exclusiva', '', '2022-03-23 05:14:45', 0, 0, 0, 'exclusivo', 'autos', 'eliminado', 'texto'),
(34, 11, 'Hola es mi contenido Exclusivo', '', '2022-03-28 16:56:53', 0, 0, 0, 'exclusivo', 'actualidad', 'eliminado', 'imagen'),
(35, 11, 'Un programa en python', '', '2022-03-28 16:58:06', 0, 2, 0, 'gratuito', 'educativo', 'normal', 'imagen'),
(36, 1, 'Mejor sube el codigo css de editar perfil.php animal', '', '2022-03-28 18:29:33', 0, 1, 0, 'gratuito', 'educativo', 'normal', 'texto'),
(37, 11, 'Editar Perfil- CSS Responsive ', '', '2022-04-08 06:13:57', 0, 0, 0, 'gratuito', 'actualidad', 'normal', 'imagen'),
(38, 11, 'Un meme', '', '2022-04-10 04:41:52', 0, 0, 0, 'gratuito', 'entretenimiento', 'normal', 'imagen'),
(39, 11, 'Un meme', '', '2022-04-10 04:41:52', 0, 0, 0, 'gratuito', 'entretenimiento', 'eliminado', 'imagen'),
(40, 1, 'Video Subido', '', '2022-04-11 21:16:46', 0, 0, 0, 'gratuito', 'moda', 'normal', 'video'),
(41, 1, 'Prueba 15/04/2022', '', '2022-04-15 18:32:59', 0, 0, 0, 'gratuito', 'educativo', 'eliminado', 'texto'),
(42, 1, 'Videojuegos', '', '2022-04-15 18:52:34', 0, 0, 0, 'gratuito', 'videojuegos', 'normal', 'texto'),
(43, 1, 'Benito juarez', '', '2022-04-15 19:04:25', 0, 0, 0, 'gratuito', 'historia', 'normal', 'texto'),
(44, 1, 'Run Run ', '', '2022-04-15 19:13:33', 0, 0, 0, 'gratuito', 'autos', 'eliminado', 'texto'),
(45, 1, 'Run Run ', '', '2022-04-15 19:13:33', 0, 0, 0, 'gratuito', 'autos', 'eliminado', 'texto'),
(46, 1, 'Prueba de fecha y hora', '', '2022-04-17 18:28:22', 0, 0, 0, 'gratuito', 'entretenimiento', 'normal', 'texto'),
(47, 11, 'Hola es una prueba nada mas', '', '2022-04-19 01:04:48', 0, 0, 0, 'gratuito', 'entretenimiento', 'normal', 'texto'),
(48, 11, 'Imagen en buena Calidad', '', '2022-04-19 03:26:31', 0, 1, 0, 'gratuito', 'educativo', 'eliminado', 'imagen'),
(49, 29, 'Hola mi nombre es Danny', '', '2022-04-22 19:23:12', 0, 1, 0, 'gratuito', 'actualidad', 'normal', 'texto'),
(50, 11, 'Mi nueva foto de perfil :) ', '', '2022-04-23 06:22:57', 0, 1, 0, 'gratuito', 'videojuegos', 'normal', 'imagen'),
(51, 11, 'Hola ya es bn tarde y aqui en MODO GUERRA MI COMPAAA con puro proyectooo mi compa', '', '2022-04-23 06:31:07', 0, 1, 0, 'gratuito', 'entretenimiento', 'normal', 'texto'),
(52, 11, 'Esta imagen es exclusiva porque lo puedes vender como NFT', '', '2022-04-23 18:52:20', 0, 0, 0, 'exclusivo', 'videojuegos', 'eliminado', 'imagen'),
(53, 1, 'Dejate de mamadas kevin, llevas 8 indexs', '', '2022-04-23 20:01:57', 0, 0, 0, 'gratuito', 'actualidad', 'normal', 'texto'),
(54, 11, 'Pokemon XYZ', '', '2022-04-24 18:21:02', 0, 0, 0, 'gratuito', 'entretenimiento', 'eliminado', 'video'),
(55, 11, 'Todas las trasformaciones de Ben 10 (video de 10 minutos)', '', '2022-04-24 21:50:32', 0, 0, 0, 'gratuito', 'entretenimiento', 'eliminado', 'video'),
(56, 33, '', '', '2022-04-26 17:16:08', 0, 0, 0, 'gratuito', 'comida', 'normal', 'imagen'),
(57, 1, 'Soy gay', '', '2022-04-26 18:18:52', 0, 1, 0, '', '', 'eliminado', 'texto'),
(58, 11, 'Un fan art- Pokemon Oro y Plata', '', '2022-04-27 01:33:28', 0, 1, 0, 'gratuito', 'entretenimiento', 'normal', 'imagen'),
(59, 18, 'Ante la compleja situaciÃ³n econÃ³mica que vive #CubaðŸ‡¨ðŸ‡º, unidos y con nuestros propios esfuerzos sabremos encontrar soluciones para mejorar la oferta de bienes y servicios al pueblo. VIVA EL #1Mayo.', '', '2022-04-27 02:41:37', 0, 1, 0, 'gratuito', 'actualidad', 'normal', 'imagen'),
(60, 18, 'Ante la compleja situaciÃ³n econÃ³mica que vive #CubaðŸ‡¨ðŸ‡º, unidos y con nuestros propios esfuerzos sabremos encontrar soluciones para mejorar la oferta de bienes y servicios al pueblo. VIVA EL #1Mayo.\r\n', '', '2022-04-27 02:44:06', 0, 0, 0, 'gratuito', 'musica', 'eliminado', 'texto'),
(61, 18, 'Han aparecido las cuatro lunas de sangre y cada vez son mÃ¡s habituales los desastres como terremotos, hambre y epidemias. Las profecÃ­as del regreso del SeÃ±or se han cumplido fundamentalmente y, en la red, algunos han dado testimonio pÃºblico de qu', '', '2022-04-27 02:45:49', 0, 0, 0, 'gratuito', 'historia', 'eliminado', 'texto'),
(62, 11, 'Prueba 1', '', '2022-05-01 01:20:45', 0, 0, 0, 'gratuito', 'educativo', 'eliminado', 'texto'),
(63, 11, 'prueba 2', '', '2022-05-01 01:21:08', 0, 0, 0, 'gratuito', 'hogar', 'eliminado', 'texto'),
(64, 11, 'Guadalajara es un municipio y capital del estado mexicano de Jalisco, asÃ­ como cabecera del Ã¡rea urbana que lleva su nombre: Zona Metropolitana de Guadalajara. Toponimia: Su nombre proviene del Ã¡rabe Wad-al-Hidjara que significa: â€œRÃ­o que corre', '', '2022-05-01 01:22:03', 0, 0, 0, 'gratuito', 'historia', 'eliminado', 'texto'),
(65, 11, 'TonalÃ¡ proviene del vocablo nÃ¡huatl Tonallan que significa: â€œlugar por donde el sol saleâ€. Cabe mencionar que algunos autores lo han interpretado de manera diferente, ya que para unos su significado es: â€œlugar donde se lleva la cuenta de los ', '', '2022-05-01 01:23:03', 0, 0, 0, 'gratuito', 'historia', 'eliminado', 'texto'),
(66, 11, 'Ciudad Luminalia (Ciudad Lumiose en HispanoamÃ©rica por el anime, Lumiose City en inglÃ©s, ãƒŸã‚¢ãƒ¬ã‚·ãƒ†ã‚£ Ciudad Miare en japonÃ©s) es la ciudad principal de Kalos. EstÃ¡ ubicada en el centro de la regiÃ³n y destaca por la Torre Prisma, situada e', '', '2022-05-01 01:23:48', 0, 0, 0, 'gratuito', 'videojuegos', 'normal', 'texto'),
(67, 11, 'Ciudad Porcelana (Ciudad Castelia en HispanoamÃ©rica por el anime, Castelia City en inglÃ©s, ãƒ’ã‚¦ãƒ³ã‚·ãƒ†ã‚£ Hiun City en japonÃ©s) es la capital de la regiÃ³n Teselia. AquÃ­ se encuentra el tercer Gimnasio PokÃ©mon de la regiÃ³n Teselia cuyo lÃ­d', '', '2022-05-01 01:25:47', 0, 0, 0, 'gratuito', 'videojuegos', 'eliminado', 'texto'),
(68, 11, 'Hola amigos Es una prueba de Contenido exclusivo', '', '2022-05-01 02:49:54', 0, 0, 0, 'gratuito', 'actualidad', 'eliminado', 'texto'),
(70, 11, 'Programador Full Stack y tambiÃ©n metodolÃ³gico', '', '2022-05-01 03:05:35', 0, 0, 0, 'gratuito', 'actualidad', 'eliminado', 'texto'),
(71, 11, 'Me estÃ¡n silenciando ', '', '2022-05-01 03:06:38', 0, 0, 0, 'gratuito', 'actualidad', 'normal', 'texto'),
(72, 11, 'AquÃ­ explicando el cÃ³digo de click para titularnos mi compa @Daniel @\r\nPibe123 ', '', '2022-05-01 03:10:14', 0, 0, 0, 'gratuito', 'actualidad', 'normal', 'texto'),
(73, 11, 'Hola', '', '2022-05-01 03:22:21', 0, 0, 0, 'exclusivo', 'actualidad', 'eliminado', 'imagen'),
(74, 11, 'Hola compaÃ±eros', '', '2022-05-01 03:28:05', 0, 0, 0, 'exclusivo', 'historia', 'eliminado', 'texto'),
(75, 11, 'HOLAA', '', '2022-05-01 06:01:31', 0, 0, 0, 'gratuito', 'moda', 'eliminado', 'imagen'),
(76, 11, 'HISTORIA DE NUESTRO FUTBOL MEXICANO', '', '2022-05-01 21:07:13', 0, 0, 0, 'exclusivo', 'deportes', 'eliminado', 'imagen'),
(77, 11, 'JO', '', '2022-05-01 21:07:58', 0, 0, 0, 'exclusivo', 'entretenimiento', 'eliminado', 'imagen'),
(78, 1, 'A MAMAR VERGA PUTOS ARGENTINOS PENDEJOS', '', '2022-05-01 21:09:07', 0, 0, 0, 'exclusivo', 'deportes', 'normal', 'imagen'),
(79, 1, 'CULIADO POR EL BOFO', '', '2022-05-01 21:10:01', 0, 0, 0, 'gratuito', 'deportes', 'normal', 'imagen'),
(80, 11, 'Hola', '', '2022-05-01 22:17:04', 0, 0, 0, 'exclusivo', 'hogar', 'eliminado', 'texto'),
(81, 11, 'Con el aaron', '', '2022-05-01 22:21:23', 0, 0, 0, 'gratuito', 'kids', 'eliminado', 'imagen'),
(82, 11, 'Hola', '', '2022-05-02 00:21:42', 0, 0, 0, 'exclusivo', 'moda', 'eliminado', 'texto'),
(83, 11, 'Cual atraparian ?? ', '', '2022-05-02 03:13:38', 0, 0, 0, 'gratuito', 'videojuegos', 'eliminado', 'imagen'),
(84, 11, 'Hola', '', '2022-05-02 03:15:45', 0, 0, 0, 'exclusivo', 'videojuegos', 'eliminado', 'imagen'),
(85, 11, ' nnn', '', '2022-05-02 23:49:55', 0, 0, 0, 'gratuito', 'educativo', 'eliminado', 'video'),
(86, 11, 'nnn', '', '2022-05-03 00:02:23', 0, 0, 0, 'gratuito', 'educativo', 'eliminado', 'video'),
(87, 11, 'Shein lanza lÃ­nea sostenible y colaboraciÃ³n con Stagecoach', '', '2022-05-04 03:06:12', 0, 0, 0, 'gratuito', 'moda', 'eliminado', 'imagen'),
(88, 11, 'Fase de grupos mundial de Qatar 2022', '', '2022-05-04 04:07:30', 0, 0, 0, 'gratuito', 'deportes', 'normal', 'imagen'),
(89, 11, 'El segundo concierto de Bad Bunny en el Estadio Azteca de la CDMX? El segundo concierto de Bad Bunny serÃ¡ el 10 de diciembre de 2022 en el Estadio Azteca de la Ciudad de MÃ©xico.', '', '2022-05-04 04:12:27', 0, 0, 0, 'gratuito', 'musica', 'eliminado', 'imagen'),
(90, 11, ' El segundo concierto de Bad Bunny serÃ¡ el 10 de diciembre de 2022 en el Estadio Azteca de la Ciudad de MÃ©xico.', '', '2022-05-04 04:13:28', 0, 0, 0, 'gratuito', 'musica', 'normal', 'imagen'),
(91, 11, 'La SecretarÃ­a de EducaciÃ³n PÃºblica (SEP) anunciÃ³ la eliminaciÃ³n de grados escolares para sustituirlos por â€œfases de aprendizajeâ€, ', '', '2022-05-04 04:15:55', 0, 0, 0, 'gratuito', 'educativo', 'eliminado', 'imagen'),
(92, 11, 'Video de moda', '', '2022-05-04 04:28:19', 0, 0, 0, 'gratuito', 'moda', 'eliminado', 'video'),
(93, 11, 'Este comentario solo se puede ver si es contenido exclusivo', '', '2022-05-05 18:57:32', 0, 0, 0, 'exclusivo', 'entretenimiento', 'eliminado', 'texto'),
(94, 11, 'Es una imagen exclusiva', '', '2022-05-05 19:00:19', 0, 0, 0, 'exclusivo', 'entretenimiento', 'eliminado', 'imagen'),
(95, 11, 'iMAGEN DE MODA', '', '2022-05-06 03:37:29', 0, 0, 0, 'gratuito', 'moda', 'eliminado', 'imagen'),
(96, 11, 'Imagen de moda', '', '2022-05-06 03:41:29', 0, 0, 0, 'gratuito', 'moda', 'eliminado', 'imagen'),
(97, 1, 'NO SUBAS MAMADAS DE JAPONESES KEVIN', '', '2022-05-06 03:44:41', 0, 0, 0, 'gratuito', 'educativo', 'normal', 'texto'),
(98, 11, 'Funcion borrar publicacion', '', '2022-05-06 04:06:46', 0, 0, 0, 'gratuito', 'educativo', 'eliminado', 'texto'),
(99, 11, 'Hola como estan', '', '2022-05-09 16:07:58', 0, 0, 0, 'gratuito', 'entretenimiento', 'normal', 'texto'),
(100, 36, 'Hola es mi contenido de pago', '', '2022-05-09 16:35:26', 0, 0, 0, 'exclusivo', 'entretenimiento', 'normal', 'imagen'),
(101, 1, 'Extra! extra! Kevin tronÃ³ web 2 ja ja ja ja ', '', '2022-05-11 15:20:52', 0, 0, 0, 'gratuito', 'entretenimiento', 'eliminado', 'texto'),
(102, 1, '666', '', '2022-05-11 15:24:49', 0, 0, 0, 'gratuito', 'kids', 'eliminado', 'texto'),
(103, 1, '666', '', '2022-05-11 15:24:51', 0, 0, 0, 'gratuito', 'kids', 'eliminado', 'texto'),
(104, 1, '666', '', '2022-05-11 15:24:52', 0, 0, 0, 'gratuito', 'kids', 'eliminado', 'texto'),
(105, 1, '666', '', '2022-05-11 15:24:57', 0, 0, 0, 'gratuito', 'kids', 'eliminado', 'texto'),
(106, 11, 'Ceti', '', '2022-05-13 17:57:18', 0, 0, 0, 'exclusivo', 'educativo', 'eliminado', 'imagen'),
(107, 11, 'Esto es exclusivo', '', '2022-05-16 16:33:21', 0, 0, 0, 'exclusivo', 'educativo', 'eliminado', 'texto'),
(108, 11, 'No me anden reportando ojetes', '', '2022-05-16 23:28:05', 0, 0, 0, 'gratuito', 'entretenimiento', 'normal', 'texto'),
(109, 46, 'eren paloma ', '', '2022-05-16 23:32:57', 0, 0, 0, 'gratuito', 'videojuegos', 'eliminado', 'video'),
(110, 46, 'eren paloma ', '', '2022-05-16 23:34:52', 0, 0, 0, 'gratuito', 'videojuegos', 'normal', 'video'),
(111, 30, 'un crack', '', '2022-05-16 23:35:06', 0, 1, 0, 'gratuito', 'educativo', 'normal', 'video'),
(112, 30, 'Una clasesita para mis hijos de udg', '', '2022-05-16 23:40:55', 0, 0, 0, 'gratuito', 'educativo', 'normal', 'video'),
(113, 11, '', '', '2022-05-16 23:51:57', 0, 0, 0, 'gratuito', 'entretenimiento', 'eliminado', 'video'),
(114, 49, 'Arriba la 4t ðŸ¤©ðŸ¤©ðŸ¤©ðŸ¤©ðŸ¤©', '', '2022-05-18 01:45:41', 0, 0, 0, 'gratuito', 'actualidad', 'normal', 'texto'),
(115, 49, 'Papa amlo', '', '2022-05-18 01:46:27', 0, 0, 0, 'gratuito', 'entretenimiento', 'normal', 'imagen'),
(116, 49, 'El mejor periodista de Mexico ðŸ˜ðŸ˜ðŸ˜ðŸ¥°', '', '2022-05-18 01:50:12', 0, 0, 0, 'gratuito', 'actualidad', 'normal', 'imagen'),
(117, 1, 'La cumbre se derrumba. \r\n\r\nGuatemala confirma que no asistirÃ¡, dice que ya lo comentaron con AMLO y tienen su respaldo.', '', '2022-05-18 01:54:57', 0, 0, 0, 'exclusivo', 'actualidad', 'eliminado', 'imagen'),
(118, 1, 'De las buenas noticias nadie habla verdad??  \r\n_EEUU estÃ¡ doblando las manitas con AMLO.\r\n_El gobierno federal asumiÃ³ el salario de los maestros estatales.\r\n_La refinerÃ­a Deer Park se pagarÃ¡ solita en 3 meses.\r\n_El incremento de muertes por COVID', '', '2022-05-18 01:58:22', 0, 0, 0, 'exclusivo', 'actualidad', 'eliminado', 'texto'),
(119, 30, 'Hola, esto es una prueba de contenido exclusivo', '', '2022-05-18 01:58:47', 0, 0, 0, 'exclusivo', 'educativo', 'eliminado', 'texto'),
(120, 1, 'Otro golpe directo al higado de la desinformaciÃ³n y los derefachos. \r\nAzteca noticias presentÃ³ una nota sacando los trapitos al sol del periÃ³dico REFORMA, fiel socio de la derecha y enemigo de AMLO. \r\nPoco a poco el tiempo le da la razÃ³n a nuestr', '', '2022-05-18 01:59:21', 0, 0, 0, 'gratuito', 'historia', 'eliminado', 'texto'),
(121, 1, 'Otro golpe directo al higado de la desinformaciÃ³n. Azteca noticias presentÃ³ una nota sacando los trapitos al sol del periÃ³dico REFORMA, fiel socio de la derecha y enemigo de AMLO.  Poco a poco el tiempo le da la razÃ³n a nuestro lider supremo.', '', '2022-05-18 02:00:08', 0, 0, 0, 'gratuito', 'actualidad', 'eliminado', 'texto'),
(122, 49, 'Otro golpe directo al higado de la desinformaciÃ³n. Azteca noticias presentÃ³ una nota sacando los trapitos al sol del periÃ³dico REFORMA, fiel socio de la derecha y enemigo de AMLO. Poco a poco el tiempo le da la razÃ³n a nuestro lider supremo.', '', '2022-05-18 02:03:35', 0, 0, 0, 'gratuito', 'actualidad', 'normal', 'texto'),
(123, 51, 'CÃ³mo hacer Gelatina de agua:\r\n1\r\nPon a fuego una olla con agua y espera que hierva.\r\n\r\n2\r\nSeguidamente agrega el sobre de gelatina y dÃ©jalo al fuego 5 minutos, sin dejar de revolver, hasta que se haya disuelto por completo la gelatina.\r\n\r\n3\r\nDeja r', '', '2022-05-18 03:08:38', 0, 0, 0, 'gratuito', 'comida', 'eliminado', 'texto'),
(124, 51, 'Pierna para lonches:\r\nIngredientes\r\n1 kilo pierna de cerdo sin hueso\r\n4-5 pzas chiles guajillo (el largo liso, rojo, solo pinta, no pica)\r\n4 dientes ajos\r\n6 pzas pimientas\r\n2 hojas laurel\r\nal gusto sal\r\n1 1/2 litro agua\r\n1/2 pza cebolla\r\n1 chorrito a', '', '2022-05-18 03:14:19', 0, 0, 0, 'gratuito', 'comida', 'eliminado', 'texto'),
(125, 51, 'CÃ³mo hacer Gelatina de agua:\r\n1\r\nPon a fuego una olla con agua y espera que hierva.\r\n\r\n2\r\nSeguidamente agrega el sobre de gelatina y dÃ©jalo al fuego 5 minutos, sin dejar de revolver, hasta que se haya disuelto por completo la gelatina.\r\n\r\n3\r\nDeja r', '', '2022-05-18 03:35:35', 0, 0, 0, 'gratuito', 'comida', 'normal', 'imagen'),
(126, 52, 'Personaliza tu sublim textðŸ˜±', '', '2022-05-18 03:53:41', 0, 0, 0, 'gratuito', 'educativo', 'normal', 'video'),
(127, 52, 'CONCURSO en el canal de Youtube @SoydaltoðŸ˜±', '', '2022-05-18 03:58:24', 0, 0, 0, 'gratuito', 'entretenimiento', 'normal', 'video'),
(128, 53, 'ola, vusko embras', '', '2022-05-18 04:05:29', 0, 0, 0, 'gratuito', 'moda', 'eliminado', 'imagen'),
(129, 53, 'puro corrido tumbado mi compa #el_temach #temachinas', '', '2022-05-18 04:06:25', 0, 0, 0, 'gratuito', 'moda', 'eliminado', 'imagen'),
(130, 11, 'Deja de subir mamadas cabron', '', '2022-05-18 04:07:06', 0, 0, 0, 'gratuito', 'autos', 'eliminado', 'texto'),
(131, 54, 'Ala madrid', '', '2022-05-18 04:37:37', 0, 0, 0, 'gratuito', 'deportes', 'normal', 'texto'),
(132, 53, 'Me da dos motas', '', '2022-05-18 04:40:24', 0, 0, 0, 'gratuito', 'entretenimiento', 'normal', 'imagen'),
(133, 54, 'Mis equipos favoritos son el real madrid, la juventus, el sporting de portugal y el manchester iunaited, el que adivine porque le doy un abraso', '', '2022-05-18 04:41:20', 0, 0, 0, 'gratuito', 'deportes', 'normal', 'texto'),
(134, 53, 'OMG, ME CONTESTASTEEEEðŸ™ˆðŸ˜±ðŸ¥°ðŸ˜˜ðŸ«¶ðŸ˜', '', '2022-05-18 04:41:48', 0, 0, 0, 'gratuito', 'entretenimiento', 'normal', 'imagen'),
(135, 53, 'Gol o beso? #Chiwa', '', '2022-05-18 04:46:47', 0, 0, 0, 'gratuito', 'entretenimiento', 'normal', 'imagen'),
(137, 12, 'Evidencia de desarrollo del sensor \"Veick\"', '', '2022-05-18 04:49:35', 0, 0, 0, 'gratuito', 'educativo', 'normal', 'video'),
(138, 12, 'La cantante Risa LiSA Oribe tendrÃ¡ un documental exclusivo en Netflix este aÃ±o <3', '', '2022-05-18 04:54:57', 0, 0, 0, 'gratuito', 'musica', 'normal', 'imagen'),
(139, 12, 'Se anuncia el lanzamiento de el super smash de warner bros, no tengo grandes expectativas la verdad, solo quiero ver como revientan al steven ', '', '2022-05-18 04:57:34', 0, 0, 0, 'gratuito', 'videojuegos', 'normal', 'imagen'),
(140, 53, 'Rompo madres y colas', '', '2022-05-18 04:57:54', 0, 0, 0, 'gratuito', 'entretenimiento', 'normal', 'imagen'),
(141, 55, 'Doy clases particulares de bolos y billar, en mi perfil pueden ver a mis alumnos mas destacados.', '', '2022-05-18 05:00:38', 0, 0, 0, 'gratuito', 'educativo', 'normal', 'texto'),
(142, 12, 'Se me antoja una cachapa venezolana ðŸ˜ðŸ˜ðŸ˜ðŸ˜', '', '2022-05-18 05:02:28', 0, 0, 0, 'gratuito', 'comida', 'normal', 'imagen'),
(143, 12, 'Â¿La tortilla de maÃ­z engorda? Especialistas de la UNAM responden\r\nDe acuerdo con varios especialistas de la UNAM, la tortilla de maÃ­z tiene tres grandes beneficios para la salud: calcio, proteÃ­na y energÃ­a. AdemÃ¡s de ser uno de los alimentos qu', '', '2022-05-18 05:05:42', 0, 0, 0, 'gratuito', 'actualidad', 'eliminado', 'texto'),
(144, 11, 'Mi equipo Pokemon, los amo', '', '2022-05-18 05:07:01', 0, 0, 0, 'gratuito', 'videojuegos', 'normal', 'imagen'),
(145, 12, 'Â¿La tortilla de maÃ­z engorda? Especialistas de la UNAM responden lo siguiente:\r\nNo, no engorda, y estÃ¡n muy ricas, de nada', '', '2022-05-18 05:07:23', 0, 0, 0, 'gratuito', 'actualidad', 'normal', 'texto'),
(146, 55, 'Si quieres ver mas videos de mi alumno estrella, compra tu suscripcion :)', '', '2022-05-18 05:08:50', 0, 0, 0, 'gratuito', 'educativo', 'normal', 'video'),
(147, 55, 'Si quieres ser como el suscribete y te enseÃ±are :)', '', '2022-05-18 05:10:35', 0, 0, 0, 'gratuito', 'educativo', 'normal', 'video'),
(148, 12, 'Ya van 2 aÃ±os desde la salida del anime de Hanako-kun y aun no anuncian una segunda temporada :( \r\nEsperarÃ© lo que sea necesario...', '', '2022-05-18 05:11:17', 0, 0, 0, 'gratuito', 'entretenimiento', 'normal', 'imagen'),
(149, 55, 'Master Class pt1', '', '2022-05-18 05:12:14', 0, 0, 0, 'exclusivo', 'historia', 'normal', 'video'),
(150, 12, 'Yo al ver entrar 8 sinodales el dÃ­a de la presentaciÃ³n', '', '2022-05-18 05:22:22', 0, 0, 0, 'gratuito', 'entretenimiento', 'normal', 'imagen'),
(151, 12, 'Tutorial rÃ¡pido para saber si un elote esta maduro y bueno para arrancar, espero les sirva', '', '2022-05-18 05:25:20', 0, 0, 0, 'gratuito', 'educativo', 'normal', 'video'),
(152, 11, 'JAJAJA', '', '2022-05-18 05:25:38', 0, 0, 0, 'gratuito', 'entretenimiento', 'normal', 'texto'),
(153, 12, 'NO ME LO VAN A CREER, ENCONTRÃ‰ A DOS DE LOS TRES FUNDADORES DE CLICK, Y FUERON TAN HUMILDES DE INVITARME A COMER, ESTOY EN EL CIELO', '', '2022-05-18 05:27:04', 0, 0, 0, 'gratuito', 'entretenimiento', 'normal', 'imagen'),
(154, 56, 'RIPðŸ™ Mr Yosie Lokote 1976-2018', '', '2022-05-18 05:28:45', 0, 0, 0, 'gratuito', 'entretenimiento', 'normal', 'imagen'),
(155, 12, 'Mi padawan feliz por haber aprendido a usar compuertas, si deseas aprender un poco sobre estos temas manda dm', '', '2022-05-18 05:29:13', 0, 0, 0, 'gratuito', 'educativo', 'normal', 'video'),
(156, 11, 'Gano el Frontend ', '', '2022-05-18 05:30:14', 0, 0, 0, 'gratuito', 'entretenimiento', 'normal', 'video'),
(157, 56, 'The best generation 2018-2022', '', '2022-05-18 05:30:34', 0, 0, 0, 'gratuito', 'actualidad', 'normal', 'imagen'),
(158, 12, 'Foto casual para los seguidores', '', '2022-05-18 05:32:26', 0, 0, 0, 'gratuito', 'entretenimiento', 'normal', 'imagen'),
(159, 11, 'Aqui con el compa Aaron. De aqui a colomos ehh', '', '2022-05-18 05:36:21', 0, 0, 0, 'gratuito', 'entretenimiento', 'normal', 'imagen'),
(160, 12, 'AAAAHHH EL MEJOR DÃA, ME DIRIGÃA A MI CONFERENCIA DE EVASIÃ“N DE IMPUESTOS Y ME ENCONTRÃ‰ AL TERCER CREADOR DE CLICK, DIJO QUE TENÃA PRISA PERO ACCEDIÃ“ A TOMARSE UNA FOTO CONMIGO, ESO ES HUMILDAD', '', '2022-05-18 05:44:09', 0, 0, 0, 'gratuito', 'entretenimiento', 'normal', 'imagen'),
(161, 11, 'Foto profesional OJO', '', '2022-05-18 05:45:21', 0, 0, 0, 'gratuito', 'educativo', 'normal', 'imagen'),
(162, 12, 'Me sentÃ­ halagado de poder pasar una tarde muy amigable con usted, fundador de click, esta foto representa no un adiÃ³s, sino un hasta pronto', '', '2022-05-18 05:53:21', 0, 0, 0, 'gratuito', 'entretenimiento', 'eliminado', 'imagen'),
(163, 58, 'Mi cara cuando veo que el Liverpool puede levantar la premier.', '', '2022-05-18 05:54:56', 0, 0, 0, 'gratuito', 'deportes', 'normal', 'imagen'),
(164, 59, 'Hola buenas, me llamo Jake, aunque de cariÃ±o me dicen frederick, y vengo de otro planeta, espero nos llevemos bien seeres humanos disculpen si escribo algo mal', '', '2022-05-18 06:00:23', 0, 0, 0, 'gratuito', 'actualidad', 'normal', 'imagen'),
(165, 59, 'Hola buenas, he estado navegando por el internet y familiarizandome con ustedes, he descubierto la mÃºsica, y me parece que es algo maravilloso, definitivamente me quedarÃ© un tiempo por aquÃ­', '', '2022-05-18 06:05:42', 0, 0, 0, 'gratuito', 'musica', 'normal', 'video'),
(166, 58, 'No hay morras en esta red social', '', '2022-05-18 06:05:43', 0, 0, 0, 'gratuito', 'actualidad', 'normal', 'imagen'),
(167, 59, 'Me he percatado de que el usuario llamado \"LosAdminsValenPito\" comenta que no hay \"morras\" en click, pero no se que son las \"morras\", alguien me explica?', '', '2022-05-18 06:08:24', 0, 0, 0, 'gratuito', 'entretenimiento', 'normal', 'texto'),
(168, 59, 'Hola amigos terricolas, indagando y urgando por internet, descubrÃ­ lo que es la moda, la verdad me parece que estos individuos se ven bastante bien a mi parecer', '', '2022-05-18 06:11:01', 0, 0, 0, 'gratuito', 'entretenimiento', 'normal', 'imagen'),
(169, 59, 'Hola hola amigos, quise averiguar sobre la historia de este planeta y me encontrÃ© con alguien que muchos querian, es este tal Hitler, digo que lo querian ya que muchos comentan cosas del estilo de \"te queremos muerto hijo de putaaaaa\", ademas de que', '', '2022-05-18 06:15:06', 0, 0, 0, 'gratuito', 'historia', 'eliminado', 'imagen'),
(170, 59, 'Hola hola amigos, me encontrÃ© este personaje al buscar la historia de su planeta, me parece muy lindo que alguien como hitler que querÃ­a hacer arte terminÃ³ siendo dictador, es decir, empezÃ³ a dictarle a la gente textos bonitos, ojala exista mas g', '', '2022-05-18 06:17:05', 0, 0, 0, 'gratuito', 'historia', 'eliminado', 'imagen'),
(171, 59, 'Hola hola amigos, me encontrÃ© este personaje al buscar la historia de su planeta, me parece muy lindo que alguien como hitler que querÃ­a hacer arte terminÃ³ siendo dictador, es decir, empezÃ³ a dictarle a la gente textos bonitos.', '', '2022-05-18 06:17:45', 0, 0, 0, 'gratuito', 'historia', 'normal', 'imagen'),
(172, 60, 'Enclochamiento', '', '2022-05-18 06:58:14', 0, 0, 0, 'gratuito', 'actualidad', 'normal', 'video'),
(173, 60, 'Bloque 1, mis compas', '', '2022-05-18 07:00:12', 0, 0, 0, 'gratuito', 'entretenimiento', 'normal', 'video'),
(174, 1, 'Ya hay mujeres en esta red social*', '', '2022-05-18 14:12:32', 0, 0, 0, 'gratuito', 'moda', 'normal', 'imagen'),
(175, 11, 'Ya tengo que ir a la escuela que perra hueva', '', '2022-05-18 14:26:30', 0, 0, 0, 'gratuito', 'entretenimiento', 'normal', 'texto'),
(176, 11, 'Estamos haciendo el abstrack', '', '2022-05-18 16:31:39', 0, 0, 0, 'gratuito', 'educativo', 'normal', 'texto'),
(177, 11, 'Ya empezare a subir mi contenido exclusivo, se tratara de cursos sobre HTML, CSS y lo basico en PHP con bases de datos. Los que quieran unirse los espero en mi perfil privado. ', '', '2022-05-18 16:52:31', 0, 0, 0, 'gratuito', 'educativo', 'normal', 'texto'),
(178, 11, 'Hola y gracias a las personas que se suscribieron a mi perfil les agradezco mucho y espero no defraudarlos. Aqui se vera de forma extensa sobre HTML, CSS, se hara diseÃ±o y como estructurar una pagina web, teniendo ya las bases en HTML y CSS ya podem', '', '2022-05-18 17:06:44', 0, 0, 0, 'exclusivo', 'educativo', 'eliminado', 'texto'),
(179, 11, 'Hola y gracias a las personas que se suscribieron a mi perfil les agradezco mucho y espero no defraudarlos. Aqui se vera de forma extensa sobre HTML, CSS, se hara diseÃ±o y como estructurar una pagina web, teniendo ya las bases en HTML y CSS', '', '2022-05-18 17:10:58', 0, 0, 0, 'exclusivo', 'educativo', 'normal', 'texto'),
(180, 1, 'kevin', '', '2022-05-18 17:45:52', 0, 0, 0, 'gratuito', 'deportes', 'eliminado', 'texto'),
(181, 61, '', '', '2022-05-18 22:28:11', 0, 0, 0, 'gratuito', 'videojuegos', 'normal', 'video'),
(182, 63, 'CUCEI manda prros B)', '', '2022-05-19 00:02:23', 0, 0, 0, 'gratuito', 'actualidad', 'normal', 'texto'),
(183, 64, 'Bendiciones', '', '2022-05-19 00:07:48', 0, 0, 0, 'gratuito', 'educativo', 'eliminado', 'imagen'),
(184, 64, 'Bendiciones, quien para una partidita de catan online?', '', '2022-05-19 00:09:20', 0, 0, 0, 'gratuito', 'entretenimiento', 'normal', 'imagen'),
(185, 63, 'aiiiiiudaaaaaa :(', '', '2022-05-19 00:51:15', 0, 0, 0, 'gratuito', 'musica', 'normal', 'video'),
(186, 1, 'Jugadores del atletico en un seat panda ', '', '2022-05-19 02:22:21', 0, 0, 0, 'gratuito', 'autos', 'normal', 'imagen'),
(187, 1, 'Ya llego ma ma ma mau el aczino', '', '2022-05-19 02:27:52', 0, 0, 0, 'gratuito', 'hogar', 'eliminado', 'texto'),
(188, 50, 'BUENAS NOCHES MI BANDA COMO ANDAMIOS', '', '2022-05-19 02:31:15', 0, 0, 0, 'gratuito', 'kids', 'normal', 'texto'),
(189, 29, 'Eclipse lunar', '', '2022-05-19 04:38:04', 0, 0, 0, 'gratuito', 'entretenimiento', 'eliminado', 'imagen'),
(190, 29, 'Es un Eclipse solar ', '', '2022-05-19 04:39:46', 0, 0, 0, 'gratuito', 'educativo', 'eliminado', 'imagen'),
(191, 55, 'Publicacion exclusiva', '', '2022-05-19 14:31:56', 0, 0, 0, 'exclusivo', 'moda', 'normal', 'texto'),
(192, 30, 'Hola amigo', '', '2022-05-19 17:59:41', 0, 0, 0, 'gratuito', 'entretenimiento', 'eliminado', 'texto'),
(193, 1, 'descripcion', '', '2022-05-19 19:08:29', 0, 0, 0, 'gratuito', 'moda', 'normal', 'imagen'),
(194, 1, 'y8ooihvio ', '', '2022-05-19 19:08:51', 0, 0, 0, 'exclusivo', 'kids', 'normal', 'texto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte_publicacion`
--

CREATE TABLE `reporte_publicacion` (
  `id` int(11) NOT NULL,
  `publicacion` int(11) NOT NULL,
  `reportador` int(11) NOT NULL,
  `reportado` int(11) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reporte_publicacion`
--

INSERT INTO `reporte_publicacion` (`id`, `publicacion`, `reportador`, `reportado`, `fecha`) VALUES
(1, 99, 1, 11, '2022-05-15 15:17:31'),
(2, 96, 1, 11, '2022-05-15 15:45:57'),
(3, 99, 30, 11, '2022-05-15 21:13:01'),
(4, 97, 11, 1, '2022-05-16 02:45:21'),
(5, 59, 11, 18, '2022-05-16 02:46:05'),
(6, 49, 11, 29, '2022-05-16 02:48:43'),
(7, 49, 11, 29, '2022-05-16 02:49:44'),
(8, 92, 1, 11, '2022-05-16 15:58:35'),
(9, 91, 1, 11, '2022-05-16 19:33:08'),
(10, 92, 46, 11, '2022-05-16 23:17:49'),
(11, 99, 46, 11, '2022-05-16 23:17:52'),
(12, 96, 46, 11, '2022-05-16 23:18:03'),
(13, 90, 46, 11, '2022-05-16 23:18:12'),
(14, 54, 46, 11, '2022-05-16 23:19:10'),
(15, 108, 30, 11, '2022-05-16 23:29:31'),
(16, 113, 1, 11, '2022-05-17 01:41:02'),
(17, 112, 1, 30, '2022-05-17 16:05:47'),
(18, 114, 30, 49, '2022-05-18 01:46:49'),
(19, 115, 30, 49, '2022-05-18 01:46:52'),
(20, 116, 11, 49, '2022-05-18 02:20:31'),
(21, 166, 1, 58, '2022-05-18 14:22:56'),
(22, 174, 11, 1, '2022-05-18 16:26:50'),
(23, 147, 11, 55, '2022-05-18 16:31:03'),
(24, 182, 64, 63, '2022-05-19 00:07:55'),
(25, 182, 11, 63, '2022-05-19 01:48:28'),
(26, 187, 11, 1, '2022-05-19 02:29:24'),
(27, 187, 11, 1, '2022-05-19 02:30:25'),
(28, 188, 11, 50, '2022-05-19 03:24:38'),
(29, 188, 1, 50, '2022-05-19 19:06:26'),
(30, 158, 11, 12, '2022-05-23 16:09:47'),
(31, 161, 65, 11, '2022-05-24 08:46:58'),
(32, 165, 11, 59, '2022-05-24 23:54:08'),
(33, 193, 11, 1, '2022-05-27 01:24:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte_usuario`
--

CREATE TABLE `reporte_usuario` (
  `id` int(11) NOT NULL,
  `reportado` int(11) NOT NULL,
  `reportador` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `causa_reporte` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reporte_usuario`
--

INSERT INTO `reporte_usuario` (`id`, `reportado`, `reportador`, `fecha`, `causa_reporte`) VALUES
(1, 11, 1, '2022-05-15 21:10:48', 'Es un acosador'),
(2, 11, 30, '2022-05-15 21:13:43', 'es joto'),
(3, 36, 1, '2022-05-15 21:33:42', 'h'),
(4, 1, 11, '2022-05-16 02:54:48', ''),
(5, 1, 11, '2022-05-16 02:55:06', 'me molesta'),
(6, 1, 11, '2022-05-16 02:55:08', ''),
(7, 1, 11, '2022-05-16 02:55:12', 'me molesta'),
(8, 11, 1, '2022-05-16 15:58:57', 'es un pendejo'),
(9, 11, 1, '2022-05-16 15:59:07', 'glhs'),
(10, 11, 1, '2022-05-16 15:59:10', 'jugldosidhu'),
(11, 11, 1, '2022-05-16 15:59:16', 'hfjlfd'),
(12, 36, 1, '2022-05-16 19:33:26', 'no me pago el desayuno'),
(13, 30, 11, '2022-05-17 02:47:04', '   '),
(14, 30, 11, '2022-05-17 02:47:06', 'kjnkj'),
(15, 30, 11, '2022-05-17 02:47:09', 'knknm'),
(16, 30, 11, '2022-05-17 02:47:11', 'knmmn'),
(17, 30, 11, '2022-05-17 02:47:14', 'kmnm,'),
(18, 36, 1, '2022-05-18 17:16:52', 'Es hermano de un pendejo'),
(19, 36, 1, '2022-05-18 17:16:59', 'Es hermano de un pendejo'),
(20, 36, 1, '2022-05-18 17:17:01', 'Es hermano de un pendejo'),
(21, 59, 1, '2022-05-18 17:32:11', 'Por que me molesto alv '),
(22, 59, 1, '2022-05-18 17:32:24', 'Porque quise perro como ves '),
(23, 59, 1, '2022-05-18 17:32:32', 'hola que taaal'),
(24, 59, 1, '2022-05-18 17:32:41', 'tu que talll'),
(25, 59, 1, '2022-05-18 17:32:47', 'pero\r\n'),
(26, 60, 11, '2022-05-18 21:33:24', 'PORQUE ES ALPHA'),
(27, 60, 11, '2022-05-18 21:33:28', 'HOLAA'),
(28, 60, 11, '2022-05-18 21:33:34', 'VAVAVAVA'),
(29, 60, 11, '2022-05-18 21:33:39', 'DKJDLKJD'),
(30, 60, 11, '2022-05-18 21:33:41', ',KJKJ'),
(31, 1, 11, '2022-05-18 21:37:23', 'Hola'),
(32, 30, 1, '2022-05-19 19:17:22', 'me estafo\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguidores`
--

CREATE TABLE `seguidores` (
  `id` int(11) NOT NULL,
  `seguidor` int(11) NOT NULL,
  `user_seguidor` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `seguido` int(11) NOT NULL,
  `user_seguido` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `aprobada` int(11) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `seguidores`
--

INSERT INTO `seguidores` (`id`, `seguidor`, `user_seguidor`, `seguido`, `user_seguido`, `aprobada`, `fecha`) VALUES
(1, 4, 'Kevin_Y', 1, 'Daniel', 1, '2022-03-12 14:42:04'),
(3, 5, 'Astro', 1, 'Daniel', 1, '2022-03-12 14:53:55'),
(5, 1, 'Daniel', 8, 'kev', 1, '2022-03-13 15:52:22'),
(6, 1, 'Daniel', 5, 'Astro', 1, '2022-03-13 16:33:25'),
(8, 11, 'Kev_Y', 12, 'ElAarÃ³n', 1, '2022-03-13 20:10:15'),
(16, 1, 'Daniel', 12, 'ElAarÃ³n', 1, '2022-03-27 20:47:17'),
(20, 11, 'Kev_Y', 1, 'Daniel', 1, '2022-04-02 21:34:36'),
(23, 18, 'Ulises', 11, 'Kev_Y', 1, '2022-04-06 01:48:35'),
(24, 21, 'Kelpo', 11, 'Kev_Y', 1, '2022-04-08 06:08:27'),
(25, 12, 'ElAarÃ³n', 1, 'Daniel', 1, '2022-04-20 02:44:07'),
(26, 12, 'ElAarÃ³n', 11, 'Kev_Y', 1, '2022-04-20 02:44:21'),
(27, 11, 'Kev_Y', 29, 'Dani', 1, '2022-04-22 19:25:08'),
(28, 29, 'Dani', 11, 'Kev_Y', 1, '2022-04-24 21:24:42'),
(30, 33, 'Alejandro Saucedo ', 1, 'Daniel', 1, '2022-04-26 17:17:08'),
(31, 11, 'Kev_Y', 33, 'Alejandro Saucedo ', 1, '2022-04-27 01:04:00'),
(34, 36, 'Chris', 11, 'Kev_Y', 1, '2022-05-09 16:36:41'),
(36, 1, 'Daniel', 11, 'Kev_Y', 1, '2022-05-15 20:59:55'),
(37, 30, 'bicho', 11, 'Kev_Y', 1, '2022-05-16 23:30:02'),
(38, 30, 'bicho', 1, 'Daniel', 1, '2022-05-16 23:45:15'),
(39, 58, 'LosAdminsValenPito', 30, 'bicho', 1, '2022-05-18 05:40:33'),
(40, 60, 'ElTemach', 55, 'Pedro', 1, '2022-05-18 07:51:50'),
(41, 11, 'Kev_Y', 60, 'ElTemach', 1, '2022-05-18 16:32:22'),
(42, 64, 'EL AMO DEL CATAN', 63, 'DAN MP', 1, '2022-05-19 00:44:28'),
(43, 12, 'ElAarÃ³n', 36, 'Chris', 1, '2022-05-19 02:28:02'),
(44, 65, 'Liz Montejo', 11, 'Kev_Y', 1, '2022-05-24 08:40:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `sex` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ubicacion` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `site_language` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `avatar` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'fotosperfil/default12.png',
  `private_profile` enum('0','1') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0' COMMENT 'Es privado el perfil?',
  `verified` enum('0','1') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0' COMMENT 'Esta verificado el perfil?',
  `banned` enum('0','1') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0' COMMENT 'Este perfil esta baneado?',
  `code` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `confirmed` enum('0','1') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `signup_date` datetime NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `signup_ip` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin` int(11) NOT NULL DEFAULT 1 COMMENT '1 = NO 2 = SI'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `phone`, `birthday`, `sex`, `ubicacion`, `bio`, `site_language`, `avatar`, `private_profile`, `verified`, `banned`, `code`, `token`, `confirmed`, `signup_date`, `last_login`, `signup_ip`, `admin`) VALUES
(1, 'Daniel', '202cb962ac59075b964b07152d234b70', 'dvillalobos878@gmail.com', 'Daniel Villalobos Ortiz', NULL, '2003-09-22', 'H', 'Plaza galerias, Zapopan', 'Mi nombre es Daniel Villalobos Ortiz tengo 18 aÃ±os y estudio en Ceti RIo Santiago :(', 1, 'fotosperfil/ID-1-USER-Daniel24.jpg', '0', '1', '0', '61d509fd70a16', '', '1', '2022-01-04 21:01:17', NULL, NULL, 2),
(5, 'Astro', '827ccb0eea8a706c4c34a16891f84e7b', 'diegohost01@gmail.com', 'Maradona', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '622cb37ad18ad', '', '0', '2022-03-12 14:51:38', NULL, NULL, 1),
(6, 'Aldir', '827ccb0eea8a706c4c34a16891f84e7b', '18300500@ceti.mx', 'Aldo', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '622d14ebb397d', '', '0', '2022-03-12 21:47:23', NULL, NULL, 1),
(8, 'kev', '81dc9bdb52d04dc20036dbd8313ed055', 'kevin@gmi.com', 'kevin', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '622db4ac4da7c', '', '0', '2022-03-13 09:09:00', NULL, NULL, 1),
(10, 'Rocio', '202cb962ac59075b964b07152d234b70', 'rociortiz2909@gmail.com', 'Rocio Ortiz', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '622e18357aa9d', '', '1', '2022-03-13 16:13:41', NULL, NULL, 1),
(11, 'Kev_Y', '827ccb0eea8a706c4c34a16891f84e7b', 'a18300506@ceti.mx', 'Yahir Salzar', NULL, '2003-07-15', 'H', 'Tonala, Jalisco Mexico', 'Fundador de Click', 1, 'fotosperfil/ID-11-USER-Kev_Y7.jpg', '0', '0', '0', '622e18998884a', '', '1', '2022-03-13 16:15:21', NULL, NULL, 2),
(12, 'ElAarÃ³n', '62e41270cac46228acf3c80554c3359b', 'aaronjesuslongafuenmayor@gmail.com', 'AarÃ³n Longa', NULL, '2003-11-19', 'H', 'OblatosCity', 'Buenos dÃ­as chavales, me gusta la pizza con piÃ±a', 1, 'fotosperfil/ID-12-USER-ElAarÃ³n29.jpg', '0', '0', '0', '622e4add7e591', '', '1', '2022-03-13 19:49:49', NULL, NULL, 1),
(13, 'Rocio1', '202cb962ac59075b964b07152d234b70', 'ortiz_rocio@yahoo.com.mx', 'Rocio Ortiz', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '622ead137db08', '', '0', '2022-03-14 02:48:51', NULL, NULL, 1),
(14, 'Anonimo', '81dc9bdb52d04dc20036dbd8313ed055', 'redsocial152@gmail.com', 'Anonimo', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '622eba7e6c251', '', '0', '2022-03-14 03:46:06', NULL, NULL, 1),
(15, 'Berthita', '827ccb0eea8a706c4c34a16891f84e7b', 'bertha.chagollan@gmail.com', 'Bertha', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '6232a38325387', '', '0', '2022-03-17 02:57:07', NULL, NULL, 1),
(16, 'Diego', '202cb962ac59075b964b07152d234b70', 'gonzalezz.chagollan@gmail.com', 'Diego Armando', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '6232a41b4fa74', '', '0', '2022-03-17 02:59:39', NULL, NULL, 1),
(17, 'Uli', '827ccb0eea8a706c4c34a16891f84e7b', 'Ulises34@gmail.com', 'Ulises', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '624cf103efb66', '', '0', '2022-04-06 01:46:43', NULL, NULL, 1),
(18, 'Ulises', '827ccb0eea8a706c4c34a16891f84e7b', 'Ulises340@gmail.com', 'Ulises', NULL, '1989-05-04', 'H', 'Tlajomulco', 'Activista.', 1, 'fotosperfil/ID-18-USER-Ulises95.jpg', '0', '0', '0', '624cf13c36f5f', '', '0', '2022-04-06 01:47:40', NULL, NULL, 1),
(19, 'pepo', '202cb962ac59075b964b07152d234b70', 'PEPE@gmail.com', 'Pepito', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '624dadfc1fcc8', '', '0', '2022-04-06 15:13:00', NULL, NULL, 1),
(20, 'Mate', '202cb962ac59075b964b07152d234b70', 'Mateo@gmail.com', 'Mateo', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '624fd05aed9eb', '', '0', '2022-04-08 06:04:10', NULL, NULL, 1),
(21, 'Kelpo', '81dc9bdb52d04dc20036dbd8313ed055', 'kevinyahirsalazar34200@gmail.com', 'Kevin Duarte', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '624fd0db9063c', '', '0', '2022-04-08 06:06:19', NULL, NULL, 1),
(22, 'Kevinsin', '827ccb0eea8a706c4c34a16891f84e7b', 'Kevinsins2@gmail.com', 'Keviin Duarte', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '6254684c9df30', '', '0', '2022-04-11 17:41:32', NULL, NULL, 1),
(23, 'Pepo23', '202cb962ac59075b964b07152d234b70', 'PEPE1@gmail.com', 'PepeLozano', NULL, NULL, 'H', NULL, 'Hola como estas', 1, 'fotosperfil/default12.png', '0', '0', '0', '6254686f58203', '', '0', '2022-04-11 17:42:07', NULL, NULL, 1),
(24, 'elbicho', 'f1c1592588411002af340cbaedd6fc33', 'hskjdbsd@gmail.com', 'Halamadrid', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '6254ad979719d', '', '0', '2022-04-11 22:37:11', NULL, NULL, 1),
(25, 'Javier', '202cb962ac59075b964b07152d234b70', 'javier.villalobos675@jaliscoedu.mx', 'Javier Villalobos', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '625af2bf5585b', '', '1', '2022-04-16 16:45:51', NULL, NULL, 1),
(26, 'siu', '202cb962ac59075b964b07152d234b70', 'a18300997@ceti.mx', 'diego a', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '625ca748ce053', '', '0', '2022-04-17 23:48:24', NULL, NULL, 2),
(27, 'Pruebita', '202cb962ac59075b964b07152d234b70', 'pruebaregistro@gmail.com', 'Pruebita', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '625efe254c7ef', '', '0', '2022-04-19 18:23:33', NULL, NULL, 1),
(28, 'che', '88e7436afc4ca02741c771e9149a2e7c', 'bbdji32csg@gmail.com', 'cristiano messi', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '625f8a8f79879', '', '0', '2022-04-20 04:22:39', NULL, NULL, 1),
(29, 'Dani', '827ccb0eea8a706c4c34a16891f84e7b', 'a04616@universidad-une.com', 'Danny Duarte', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/ID-29-USER-Dani72.jpg', '0', '0', '0', '6262ffdb9f693', '', '0', '2022-04-22 19:19:55', NULL, NULL, 1),
(30, 'bicho', '88e7436afc4ca02741c771e9149a2e7c', 'dbshdv@gmail.com', 'Dalto Argentina', NULL, '2003-05-20', 'H', 'Guadalajara, Jalisco, MÃ©xico', 'Sigueme si quieres aprender programaciÃ³n orientada objetos', 1, 'fotosperfil/ID-30-USER-bicho36.jpg', '0', '0', '0', '6265cf5e392f8', '', '0', '2022-04-24 22:29:50', NULL, NULL, 1),
(31, 'El cacas', '834d1cb63a03acfe3d4ec81e290258b3', 'motog5cristian@gmail.com', 'Cristian Fernando GÃ³mez SÃ¡nchez ', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '6266ad38d6539', '', '0', '2022-04-25 14:16:24', NULL, NULL, 1),
(32, 'Alejandro Ramos', 'a4e63cf085b6863860aa81b48085e101', 'alejandrowade29@gmail.com', 'Alejandro', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '626827d231849', '', '0', '2022-04-26 17:11:46', NULL, NULL, 1),
(33, 'Alejandro Saucedo ', '3294f62d6aa8b0df445ad0a3c906d092', 'alexxxsoloparati@gmail.com', 'Michel ', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '626828320834e', '', '0', '2022-04-26 17:13:22', NULL, NULL, 1),
(34, 'Mateo', 'fcea920f7412b5da7be0cf42b8c93759', 'mateo123@gmail.com', 'Kev_Y', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '626b619e3ab2e', '', '0', '2022-04-29 03:55:10', NULL, NULL, 1),
(35, 'Kevin Salazar', '25f9e794323b453885f5181f1b624d0b', 'kevinyahirsalazar342@gmail.com', 'Kelpo2', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '626b64618fec2', '', '0', '2022-04-29 04:06:57', NULL, NULL, 1),
(36, 'Chris', '827ccb0eea8a706c4c34a16891f84e7b', 'chrisduarte4167@gmail.com', 'Christian Enrique Duarte Salazar', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '62794089c1d36', '', '0', '2022-05-09 16:25:45', NULL, NULL, 1),
(37, 'momito', 'e10adc3949ba59abbe56e057f20f883e', 'mpintog@ceti.mx', 'momito', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '627bd730952b5', '', '1', '2022-05-11 15:33:04', NULL, NULL, 1),
(38, 'PENDEJO', '202cb962ac59075b964b07152d234b70', 'ASFAOFJIO@FADIOJFI.COM', 'RIJOEJIA', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '627f1bbbd4714', '', '0', '2022-05-14 03:02:19', NULL, NULL, 1),
(45, 'ula2', '202cb962ac59075b964b07152d234b70', 'ula232@gmail.com', 'ulisesw', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '628072bf4b65f', '', '0', '2022-05-15 03:25:51', NULL, NULL, 1),
(46, 'PT-sama ', 'a7fe63e6cd3e4d001e0dd9c57c733130', 'castellanosgonzalezjorgedaniel@gmail.com', 'Jorge Daniel Castellanos GonzÃ¡lez ', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '6282da982ae16', '62856e5961739', '0', '2022-05-16 23:13:28', NULL, NULL, 1),
(47, 'Nathan123', '870d2cb1b79b7a70fa9077190e2aa850', 'payfepaqueteriayfletes@gmail.com', 'Nathanael', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '6282eaf22ad9e', '', '0', '2022-05-17 00:23:14', NULL, NULL, 1),
(49, 'Patricio', '202cb962ac59075b964b07152d234b70', 'patricio@gmail.com', 'Patricio Lopez', NULL, '2003-05-04', 'H', 'Tepito', 'El mejor creador de Click', 1, 'fotosperfil/ID-49-USER-Patricio34.jpg', '0', '0', '0', '62844e881bd8e', '', '0', '2022-05-18 01:40:24', NULL, NULL, 1),
(50, 'TOROLOCO', '202cb962ac59075b964b07152d234b70', 'mesero@gmail.com', 'NiÃ±o polla', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '628453ad551f7', '', '0', '2022-05-18 02:02:21', NULL, NULL, 1),
(51, 'Recetas_ale', '202cb962ac59075b964b07152d234b70', 'cocinera_69@gmail.com', 'Alejandra Garcia', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '6284629000fcd', '', '0', '2022-05-18 03:05:52', NULL, NULL, 1),
(52, 'Explicodigo', '202cb962ac59075b964b07152d234b70', 'programacion_100@gmail.com', 'Jose Juan Macias', NULL, '2002-02-10', 'H', 'Buenos Aires, Argentina', 'Recomiendaciones del contenido @soydalto', 1, 'fotosperfil/ID-52-USER-Explicodigo37.jpg', '0', '0', '0', '62846a53e323b', '', '0', '2022-05-18 03:38:59', NULL, NULL, 1),
(53, 'Follatoros3000', '202cb962ac59075b964b07152d234b70', 'toroloco@gmail.com', 'Fernando Beltran', NULL, '2003-07-15', 'H', 'San gaspar, Tonala', 'ola busco emvraz', 1, 'fotosperfil/default12.png', '0', '0', '0', '62846ff9c52fb', '', '0', '2022-05-18 04:03:05', NULL, NULL, 1),
(54, 'Madridista', '202cb962ac59075b964b07152d234b70', 'yandel@gmail.com', 'Brayan Yandel Perez Lopez', NULL, '2001-06-22', 'H', 'Lima, Peru', 'Soy del Alianza Lima y del Real Madrid, desde niÃ±o siempre he sido afizionado blanco, mi equipo es mejor k el tuio xq tenemoz treze chempions lig', 1, 'fotosperfil/ID-54-USER-Madridista78.jpg', '0', '0', '0', '6284774c9f0f6', '', '0', '2022-05-18 04:34:20', NULL, NULL, 1),
(55, 'Pedro', '202cb962ac59075b964b07152d234b70', 'clasesbillar@gmail.com', 'Pedro billar', NULL, '0000-00-00', 'H', '', 'Soy maestro de boliche y billar', 1, 'fotosperfil/default12.png', '0', '0', '0', '62847d4db722f', '', '0', '2022-05-18 04:59:57', NULL, NULL, 1),
(56, 'Cosas de Oblatos', '202cb962ac59075b964b07152d234b70', 'cholitodeoblatos@gmail.com', 'Juan PerÃ©z', NULL, '1984-08-29', 'H', 'Oblatos', 'Aqui representarÃ© a mi barrio', 1, 'fotosperfil/ID-56-USER-Cosas de Oblatos11.jpg', '0', '0', '0', '6284801988b0b', '', '0', '2022-05-18 05:11:53', NULL, NULL, 1),
(58, 'LosAdminsValenPito', '3508141f0a97cf4d4db2973f3574113c', 'greenchago17@gmail.com', 'Carlos ChagollÃ¡n ', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/ID-58-USER-LosAdminsValenPito68.jpg', '0', '0', '0', '62848696b99b9', '', '1', '2022-05-18 05:39:34', NULL, NULL, 1),
(59, 'Jake', '43ef0539ee122224408247cb2452bf2e', 'jakeransua@gmail.com', 'Jake Fabricio', NULL, '0000-00-00', 'H', 'Otro planeta', 'Me llamo Jake, pero mis compaÃ±eres cercanos me dicen frederick, llamame asi si te sientes comodo con migo', 1, 'fotosperfil/ID-59-USER-Jake81.jpg', '0', '0', '0', '62848aa46d6c2', '', '0', '2022-05-18 05:56:52', NULL, NULL, 1),
(60, 'ElTemach', '202cb962ac59075b964b07152d234b70', 'eltemach@gmail.com', 'Luis Garcia', NULL, '2003-05-20', 'H', 'Ciudad de Mexico, MÃ©xico', 'En este perfil aprendemos todo sobre el juego de las relaciones personales; mejoramos en nosotros mismos; hacemos mÃºsica y chingos de compas. MÃ¡s contenido en: TikTok:  https://www.tiktok.com/@eltemach?lang=en Instagram: https://www.instagram.com/eltemach/', 1, 'fotosperfil/ID-60-USER-ElTemach44.jpg', '0', '0', '0', '628494b0c3513', '', '0', '2022-05-18 06:39:44', NULL, NULL, 1),
(61, 'DAAAAH', '136ce1b3ab5df4a417f29537eebf2aa2', 'jorgedaniel35@gmail.com', 'Jorge Daniel Castellanos GonzÃ¡lez ', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '62856eccec81c', '', '0', '2022-05-18 22:10:20', NULL, NULL, 1),
(62, 'betsy', '85228e52e5fe9e6ab49ce87bfd49ccfb', 'olivebeto563@gmail.com', 'El betsy', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '628576a1ae58b', '', '0', '2022-05-18 22:43:45', NULL, NULL, 1),
(63, 'DAN MP', 'ef793c54864a2f83d2cf2d8975ece474', 'martinez98.dan@gmail.com', 'Carlos Daniel Martinez Ponce', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '628588100ba20', '', '1', '2022-05-18 23:58:08', NULL, NULL, 1),
(64, 'EL AMO DEL CATAN', '8669631f365c970ef4d5e991bdfdadb9', 'taeminlee402@gmail.com', 'Josue Chagollan Ruvalcaba', NULL, NULL, NULL, NULL, NULL, 1, 'fotosperfil/default12.png', '0', '0', '0', '628589d6b632f', '', '0', '2022-05-19 00:05:42', NULL, NULL, 1),
(65, 'Liz Montejo', '53f997f698d54f0a55057f92983d1bac', 'mmontejo843@gmailcom', 'Mxrilizzz', NULL, '0000-00-00', 'M', '', 'ðŸ‘¾', 1, 'fotosperfil/ID-65-USER-Liz Montejo95.jpg', '0', '0', '0', '628c9964ed44d', '', '0', '2022-05-24 08:37:56', NULL, NULL, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `bloqueos`
--
ALTER TABLE `bloqueos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `creadores`
--
ALTER TABLE `creadores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id_msj`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id_pago`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reporte_publicacion`
--
ALTER TABLE `reporte_publicacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reporte_usuario`
--
ALTER TABLE `reporte_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seguidores`
--
ALTER TABLE `seguidores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `archivos`
--
ALTER TABLE `archivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT de la tabla `bloqueos`
--
ALTER TABLE `bloqueos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `creadores`
--
ALTER TABLE `creadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id_msj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `id_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT de la tabla `reporte_publicacion`
--
ALTER TABLE `reporte_publicacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `reporte_usuario`
--
ALTER TABLE `reporte_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `seguidores`
--
ALTER TABLE `seguidores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
