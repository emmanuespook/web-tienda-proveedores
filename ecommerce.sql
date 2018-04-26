-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-04-2018 a las 19:52:03
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecommerce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `name`) VALUES
(1, 'Electrónica'),
(2, 'Hogar'),
(3, 'Uso Personal'),
(4, 'Vehículos'),
(5, 'Salud y Medicina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacion`
--

CREATE TABLE `clasificacion` (
  `id` int(11) NOT NULL,
  `id_subcategoria` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clasificacion`
--

INSERT INTO `clasificacion` (`id`, `id_subcategoria`, `name`) VALUES
(1, 1, 'Reproductores de Música'),
(2, 1, 'Audífonos'),
(3, 1, 'Bocinas Multimedia'),
(4, 1, 'Audio'),
(5, 2, 'Teclados'),
(6, 2, 'Memorias'),
(7, 2, 'Impresoras'),
(8, 2, 'Software'),
(9, 3, 'Telefonía Celular'),
(10, 3, 'Accesorios para Celular'),
(11, 4, 'Tabletas de Fabrica'),
(12, 4, 'Tabletas con Sim'),
(13, 4, 'Accesorios para Tabletas'),
(14, 6, 'Conmutadores Telefónicos'),
(15, 25, 'Pianos y Teclados'),
(16, 25, 'Guitarras'),
(17, 25, 'Bajos'),
(18, 25, 'Percusiones'),
(19, 25, 'Sonido'),
(20, 26, 'Redes y Datos'),
(21, 26, 'Cable estructurado'),
(22, 26, 'Routers'),
(23, 26, 'Interruptores'),
(24, 26, 'Firewall'),
(25, 26, 'Wireless'),
(26, 27, 'Lentes EF y EF-S'),
(27, 27, 'Consumibles'),
(28, 27, 'Accesorios fotos y vídeo '),
(29, 27, 'Cámaras fotográficas y de vídeo'),
(30, 27, 'binoculares y telescopios'),
(31, 7, 'Oficina'),
(32, 7, 'Cocinas'),
(33, 7, 'Salas'),
(34, 7, 'Baño'),
(35, 7, 'Camas y Colchones'),
(36, 7, 'Comedores'),
(37, 7, 'Decoración'),
(38, 7, 'Chimeneas'),
(39, 7, 'Cajoneras y burós'),
(40, 7, 'Mobiliario de Organización'),
(41, 7, 'Sillas'),
(42, 8, 'Herramientas'),
(43, 8, 'Plomería'),
(44, 8, 'Herrajes'),
(45, 8, 'Ferretería en General \r\n'),
(46, 8, 'Mallas'),
(47, 8, 'Tubos y conexiones'),
(48, 8, 'Tornillería'),
(49, 8, 'Abrazaderas'),
(50, 8, 'Cintas y adhesivos '),
(51, 8, 'Soldadura'),
(52, 10, 'Electrodomésticos'),
(53, 10, 'Línea Blanca'),
(54, 10, 'Refrigeradores'),
(55, 10, 'Frigobar'),
(56, 10, 'Lavadoras y secadoras'),
(57, 10, 'Estufas parrillas y campanas'),
(58, 10, 'Hornos eléctricos'),
(59, 10, 'Tarjas'),
(70, 9, 'Cerrajería'),
(71, 9, 'Cámaras de Seguridad y vigilancia'),
(72, 9, 'Cercas de Seguridad'),
(74, 9, 'Sensor de Movimiento'),
(75, 9, 'Sistema de alarmas'),
(76, 9, 'Protección contra el fuego'),
(77, 11, 'Iluminación'),
(78, 11, 'Centros de Carga'),
(79, 11, 'Conductores eléctricos'),
(80, 11, 'Derivado y multicontactos'),
(81, 11, 'Extensiones'),
(82, 11, 'Sujeción y Canalización '),
(83, 11, 'Terminales'),
(84, 11, 'Conectores y Zapatas'),
(85, 11, 'Herrajes y alta tensión'),
(86, 12, 'Acero'),
(87, 12, 'Carpintería'),
(88, 12, 'Cemento'),
(89, 12, 'Block y tabique'),
(90, 12, 'Envasados'),
(91, 12, 'Madera'),
(92, 12, 'Arena'),
(93, 12, 'Grava'),
(94, 12, 'Hormigón, Granzón o Sello'),
(95, 12, 'Tezontle'),
(96, 12, 'Tezontle en greña'),
(97, 12, 'Arenilla de Tezontle'),
(98, 12, 'Tepetate'),
(99, 12, 'Escombro'),
(100, 12, 'Tepojal\r\n'),
(101, 12, 'Piedra Volcánica'),
(102, 12, 'Piedra braza'),
(103, 12, 'Piedra de Río'),
(104, 12, 'Tierra Vegetal'),
(105, 12, 'Muros y Plafones'),
(106, 12, 'Pisos y Azulejos'),
(107, 17, 'Accesorios para Peces'),
(108, 17, 'Accesorios para Reptiles'),
(109, 17, 'Accesorios para Perros'),
(110, 17, 'Accesorios para Gatos'),
(111, 17, 'Accesorios para Aves'),
(112, 15, 'Sabanas y funda'),
(113, 15, 'Protectores y almohadas'),
(114, 15, 'Coordinados'),
(115, 15, 'Colchas y Edredones'),
(116, 15, 'Cojines'),
(117, 33, 'Pintura de Madera'),
(118, 33, 'Pintura para interior'),
(119, 33, 'Pintura para exterior'),
(120, 33, 'Esmaltes'),
(121, 33, 'Barnices'),
(122, 33, 'Impermeabilizantes'),
(123, 33, 'Brochas y rodillos'),
(124, 33, 'Cepillos'),
(125, 33, 'Escaleras'),
(126, 33, 'Pistolas y compresoras'),
(127, 33, 'Silicones'),
(128, 14, 'Shamphoo y Detergente \r\n'),
(129, 14, 'Papel'),
(130, 14, 'Limpiadores y desinfectantes'),
(131, 14, 'Detergente para autos'),
(132, 14, 'Esencias'),
(133, 14, 'Jaciería'),
(134, 14, 'Cremas corporales'),
(135, 14, 'Aromatizantes ambientales\r\n'),
(136, 28, 'Vajillas'),
(137, 28, 'Café y Té'),
(138, 28, 'Vino'),
(139, 28, 'Cristalería'),
(140, 28, 'Servicios de Mesa'),
(141, 28, 'Cubiertos'),
(142, 28, 'Mantelería'),
(143, 28, 'Mesa Navideña'),
(144, 28, 'Colecciones'),
(145, 18, 'GYM'),
(146, 18, 'Ropa deportiva Hombre'),
(147, 18, 'Ropa deportiva Mujer'),
(148, 18, 'Ropa deportiva Niño'),
(149, 18, 'Aparatos de ejercicio'),
(150, 18, 'Tenis deportivos'),
(151, 18, 'Accesorios deportivos'),
(152, 18, 'Fútbol'),
(153, 18, 'Atletismo'),
(154, 18, 'Entrenamiento'),
(155, 18, 'Acuáticos'),
(156, 18, 'Ciclismo'),
(157, 18, 'Fútbol Americano'),
(158, 18, 'Tiro'),
(159, 18, 'Recreativo'),
(160, 18, 'Campismo\r\n'),
(161, 18, 'Ballet, Patinaje y Gimnasia'),
(162, 18, 'Tenis y Deportes de Raqueta'),
(163, 18, 'Básquetbol'),
(164, 18, 'Béisbol'),
(165, 18, 'Golf'),
(166, 18, 'Voleibol'),
(167, 18, 'Billar y PingPong\r\n'),
(168, 18, 'Patines, Patinetas y Patinaje\r\n'),
(169, 18, 'Yoga'),
(170, 18, 'Box'),
(171, 19, 'Ropa'),
(172, 19, 'Zapatos'),
(173, 19, 'Bolsas y Accesorios'),
(174, 19, 'Trajes de Baño'),
(175, 19, 'Lencería'),
(176, 19, 'Vestidos'),
(177, 19, 'Fragancias'),
(178, 19, 'Joyería'),
(179, 19, 'Lentes'),
(180, 19, 'Relojes'),
(181, 20, 'Ropa'),
(182, 20, 'Calzado'),
(183, 20, 'Ropa interior'),
(184, 20, 'Fragancias'),
(185, 20, 'Maletines y accesorios'),
(186, 20, 'Relojes'),
(187, 21, 'Ropa de Niñas'),
(188, 21, 'Ropa de Niños'),
(189, 21, 'Artículos escolares'),
(190, 21, 'Estimulación temprana \r\n'),
(191, 21, 'Monitoreo y seguridad\r\n'),
(192, 21, 'Paseos y viajes\r\n'),
(193, 21, 'Muebles para bebe'),
(194, 22, 'Niñas'),
(195, 22, 'Niños\r\n'),
(196, 22, 'Bebes'),
(197, 22, 'Preescolar'),
(198, 22, 'Montables \r\n'),
(199, 22, 'Exterior'),
(200, 22, 'Sobre ruedas'),
(201, 23, 'Panadería y tortillería'),
(202, 23, 'Carnes y pescados'),
(203, 23, 'Jugos y bebidas'),
(204, 23, 'Vinos y licores'),
(205, 23, 'Lácteos'),
(222, 24, 'Automóvil'),
(223, 24, 'Motocicletas'),
(224, 24, 'Camión'),
(225, 24, 'Autobuses'),
(226, 24, 'Tractores'),
(227, 30, 'Cascos'),
(228, 30, 'Accesorios'),
(229, 30, 'Acumuladores'),
(230, 30, 'Ahorcadores'),
(231, 30, 'Amortiguadores'),
(232, 30, 'Balatas y Sistema de Frenos'),
(233, 30, 'Bandas'),
(234, 30, 'Bastidor'),
(235, 30, 'Bielas'),
(236, 30, 'Bujías'),
(237, 30, 'Cables'),
(238, 30, 'Cadenas'),
(239, 30, 'Cámaras'),
(240, 30, 'Empaques'),
(241, 30, 'Engranes'),
(242, 30, 'Espejos'),
(243, 30, 'Faros'),
(244, 30, 'Filtros y partes de gasolina'),
(245, 30, 'Focos'),
(246, 30, 'Llantas'),
(247, 30, 'Lubricantes'),
(248, 30, 'Manijas'),
(249, 30, 'Partes de colisión'),
(250, 30, 'Partes de embrague'),
(251, 30, 'Partes de motor'),
(252, 30, 'Partes eléctricas'),
(253, 30, 'Pistones'),
(254, 30, 'Puños'),
(255, 30, 'Rack para Llantas'),
(256, 30, 'Resortes'),
(257, 30, 'Retenes'),
(258, 30, 'Ruedas y sus partes'),
(259, 30, 'Tornillos y Tuercas'),
(260, 30, 'Embrague y sus partes'),
(261, 31, 'Accesorios Bicicleta'),
(262, 31, 'Amortiguadores Bicicleta'),
(263, 31, 'Cables de Bicicleta'),
(264, 31, 'Cadenas Bicicleta'),
(265, 31, 'Cámaras Bicicleta'),
(266, 31, 'Cascos Bicicleta\r\n'),
(267, 31, 'Colisión Bicicleta'),
(268, 31, 'Engranes Bicicleta'),
(269, 31, 'Frenos y Partes Bicicleta'),
(270, 31, 'Faros Y Sus Partes Bicicleta'),
(271, 31, 'Llantas Bicicleta'),
(272, 31, 'Manijas Bicicleta'),
(273, 31, 'Puños Bicicleta\r\n'),
(274, 31, 'Rack Bicicleta'),
(275, 31, 'Ruedas y sus Partes Bicicleta\r\n'),
(276, 31, 'Cuadro y Bastidor Bicicleta'),
(277, 31, 'Accesorios Bicicleta'),
(278, 31, 'Engranes Bicicleta'),
(279, 34, 'Aspiradores y Eyectores'),
(280, 34, 'Baberos Desechables'),
(281, 34, 'Bandejas Desechables'),
(282, 34, 'Batas Desechables Cirugia'),
(283, 34, 'Bobinas de Papel'),
(284, 34, 'Boquillas Desechables Agua Aire'),
(285, 34, 'Canulas Aspiracion'),
(286, 34, 'Cofias y Gorros'),
(287, 34, 'Cubrezapatos Desechables'),
(288, 34, 'Dispensadores'),
(289, 34, 'Gasas'),
(290, 34, 'Guantes Esteriles'),
(291, 34, 'Guantes de Latex'),
(292, 34, 'Guantes de Nitrilo'),
(293, 34, 'Guantes de Polisopreno'),
(294, 34, 'Guantes de Vinilo'),
(295, 34, 'Lineas de Irrigacion'),
(296, 34, 'Mascarillas Desechables'),
(297, 34, 'Pellets de Algodon'),
(298, 34, 'Pellets de Espuma'),
(299, 34, 'Porta baberos'),
(300, 34, 'Proteccion Facial y Ocular'),
(301, 34, 'Proteccion Equipos Dentales'),
(302, 34, 'Refrigerantes'),
(303, 34, 'Rollos de Algodon'),
(304, 34, 'Servilletas Desechables'),
(305, 34, 'Sets Esteriles Cirugia'),
(306, 34, 'Toallas humedas'),
(307, 34, 'Vasos Desechables'),
(308, 34, 'Agujas y Jeringas'),
(309, 35, 'Mobiliario para Clínica Dental'),
(310, 35, 'Carritos de Clínica'),
(311, 35, 'Lámparas de Gabinete'),
(312, 35, 'Lámparas de Quirófano'),
(313, 35, 'Taburetes clínica'),
(314, 35, 'Mobiliario Vario'),
(315, 35, 'Unidades de Trabajo'),
(316, 35, 'Sillones Dentales'),
(317, 36, 'Batas clínica dental'),
(318, 36, 'Casacas clínica dental'),
(319, 36, 'Gorros clínica dental'),
(320, 36, 'Pantalones clínica dental'),
(321, 36, 'Accesorios Dentales'),
(322, 36, 'Fotografía Dental'),
(323, 36, 'Juguetes Odontopediatría\r\n'),
(324, 36, 'Libros Odontología\r\n'),
(325, 36, 'Primeros Auxilios Clínica Dental'),
(326, 36, 'Odontopediatría\r\n'),
(327, 37, 'Genericos'),
(328, 37, 'Naturistas y herbolarios'),
(329, 37, 'Estomacales'),
(330, 37, 'Dermatologicos'),
(331, 37, 'Diabetes'),
(332, 37, 'Especialidades medicas'),
(333, 37, 'Oftamilicos '),
(334, 37, 'Analgesicos'),
(335, 37, 'Medicamentos Respiratorios'),
(336, 37, 'Suplementos alimencios '),
(337, 37, 'Multivitaminicos'),
(338, 37, 'Formulas y leches de crecimiento '),
(339, 37, 'Bloqueadores'),
(340, 37, 'Anticonceptivos '),
(341, 37, 'Cuidado de la piel'),
(371, 38, 'Aeropulidores Dentales de Bicarbonato'),
(372, 38, 'Aparatología Varía'),
(373, 38, 'Articuladores'),
(374, 38, 'Aspiradores quirúrgicos'),
(375, 38, 'Autoclaves'),
(376, 38, 'Cámaras intraorales'),
(377, 38, 'Compresores'),
(378, 38, 'Cubas Ultrasonidos'),
(379, 38, 'Destiladoras'),
(380, 38, 'Enlaces y Mangueras'),
(381, 38, 'Equipos láser'),
(382, 38, 'Éstetica Facial'),
(383, 38, 'Localizadores de Ápices'),
(384, 38, 'Mezcladoras Cápsulas'),
(385, 38, 'Óptica y Lupas'),
(386, 38, 'Piezoeléctricos de Cirugía'),
(387, 38, 'Selladoras de Bolsas'),
(388, 38, 'Sistemas de Aspiracion'),
(389, 38, 'Sistemas Integrables'),
(390, 38, 'Termoconformadoras'),
(391, 38, 'Vaporetas'),
(392, 38, 'Termodesinfectadoras Instrumental'),
(410, 39, 'Aros identificación instrumental'),
(411, 39, 'Bandejas instrumental'),
(412, 39, 'Bruñidores'),
(413, 39, 'Cajas Instrumental'),
(414, 39, 'Cinceles'),
(415, 39, 'Cleoides'),
(416, 39, 'Condensadores'),
(417, 39, 'Cucharillas'),
(418, 39, 'Cuchillos Yeso y Cera'),
(419, 39, 'Dappens'),
(420, 39, 'Instrumental Desechable'),
(421, 39, 'Disectores'),
(422, 39, 'Escalpelos'),
(423, 39, 'Espátulas'),
(424, 39, 'Espátulas Cera'),
(425, 39, 'Espejos'),
(426, 39, 'Excavadores'),
(427, 39, 'Instrumental Colocacion'),
(428, 39, 'Instrumental Restauracion'),
(429, 39, 'Instrumental dental Vario'),
(430, 39, 'Losetas de Vidrio'),
(431, 39, 'Modeladores'),
(432, 39, 'Obturadores Composite'),
(433, 39, 'Parrillas de clasificacion'),
(434, 39, 'Pinzas'),
(435, 39, 'Porta Amalgamas'),
(436, 39, 'Quita Coronas'),
(437, 39, 'Portamatrices'),
(438, 39, 'Separadores Mejillas'),
(439, 39, 'Sondas'),
(440, 39, 'Tijeras'),
(441, 39, 'Bisturís Microcirugía'),
(442, 39, 'Hojas de bisturi'),
(443, 39, 'Botadores'),
(444, 39, 'Curetas'),
(445, 39, 'Elevadores de Raices'),
(446, 39, 'Forceps'),
(447, 39, 'Gubias dentales'),
(448, 39, 'Hemostaticos'),
(449, 39, 'Instrumental Periodoncia'),
(450, 39, 'Luxadores'),
(451, 39, 'Limas Cirugía'),
(452, 39, 'Mangos de Bisturí'),
(453, 39, 'Osteotomos'),
(454, 39, 'Periostotomos'),
(455, 39, 'Sindesmotomos'),
(456, 39, 'Porta Agujas'),
(457, 39, 'Separadores Quirúrgicos'),
(458, 39, 'Aleaciones y Metales'),
(459, 39, 'Aleaciones Metálicas'),
(460, 39, 'Ataches'),
(461, 39, 'Bondings'),
(462, 39, 'Rejillas y Refuerzos'),
(463, 39, 'Soldadura'),
(464, 39, 'Abrasivos y Pulido Laboratorio'),
(465, 39, 'Materiales Chorreado'),
(466, 39, 'Conos fieltros y cepillos'),
(467, 39, 'Discos de Laboratorio'),
(468, 32, 'Baterías y carga'),
(469, 32, 'Carga y remolque'),
(470, 32, 'Control de emisiones y escape'),
(471, 32, 'Control Electrénico del Motor'),
(472, 32, 'Empaques'),
(473, 32, 'Filtros'),
(474, 32, 'Frenos y control de tracción'),
(475, 32, 'Interior'),
(476, 32, 'Motor interno'),
(477, 32, 'Partes Externas de Motor'),
(478, 32, 'Productos electricos e iluminación'),
(479, 32, 'Suministro de combustible'),
(480, 32, 'Tren de potencia'),
(481, 32, 'Tren motriz'),
(482, 32, 'Mangueras y tubos'),
(483, 32, 'Toma de Agua'),
(484, 32, 'Tirantes de tapa'),
(485, 32, 'Luces'),
(486, 32, 'Rines'),
(487, 32, 'Tapetes'),
(488, 32, 'Sonido'),
(489, 32, 'Tapones'),
(490, 32, 'Bombas de gasolina '),
(491, 32, 'Bomba de agua ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `in_shopping_carts`
--

CREATE TABLE `in_shopping_carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `shopping_cart_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `shopping_cart_id` int(10) UNSIGNED NOT NULL,
  `line1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `line2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `recipient_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'creado',
  `guide_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `princing` decimal(9,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `extension` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `minima` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `ima` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Tipo_unidad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `princingMax` decimal(9,2) DEFAULT NULL,
  `categoria` varchar(255) CHARACTER SET utf8 NOT NULL,
  `sub` varchar(255) CHARACTER SET utf8 NOT NULL,
  `clas` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `t_garantia` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `devoluciones` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `t_entrega` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `envio` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `descuento_vol` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `user_id`, `title`, `description`, `princing`, `created_at`, `updated_at`, `extension`, `minima`, `ima`, `Tipo_unidad`, `princingMax`, `categoria`, `sub`, `clas`, `t_garantia`, `devoluciones`, `t_entrega`, `envio`, `descuento_vol`) VALUES
(1, 1, 'Celular Nyx 306', 'Pantalla 128 x 160 pixeles, 1.77 pulgadas <br />\r\nMemoria Memoria externa: Micro SD, hasta 16 GB<br />\r\nMemoria interna: 32 MB de memoria total, 9 KB de memoria disponible para usuario <br />\r\nCámara trasera: VGA<br />\r\nProcesador Spreadtrum SC6531DA 312 MHz <br />\r\nConexiones Inalámbricas USB Bluetooth V 2.0 <br />\r\nSistema Operativo Propietario', '210.00', '2018-02-20 22:58:53', '2018-02-20 22:58:53', '.jpeg', '1', NULL, 'pza', '250.00', 'Electrónica', 'Teléfonos Celulares', 'Telefonía Celular', '6 meses', 'si', '2 a 3 días', 'no', 'si'),
(2, 1, 'Carro de fricción ', 'Varios colores <br />\r\nMayoreo a partir de 30 piezas a $7<br />\r\n De 1 a 29 piezas $15', '7.00', '2018-02-20 23:10:49', '2018-02-20 23:10:49', '.png', '1', NULL, 'pza', '15.00', 'Uso Personal', 'Juguetes', '', 'No aplica', 'si', '2 a 3 días', 'si', 'si'),
(3, 1, 'Zapato Acuático (Azul)', 'Tallas del 14-19,12 pares en $960.00<br />\r\nTallas de 20-29, 12 pares en $1,020.00<br />\r\nDe 1 a 11 pares a $150', '960.00', '2018-02-20 23:15:54', '2018-02-20 23:15:54', '.png', '12', NULL, 'pza', '1020.00', 'Uso Personal', 'Deportes', '', '2 años', 'si', '2 a 3 días', 'si', 'si'),
(4, 1, 'Zapato Acuático (Azul)', 'Tallas del 14-19,12 pares en $960.00<br />\r\nTallas de 20-29, 12 pares en $1,020.00<br />\r\nDe 1 a 11 pares a $150', '960.00', '2018-02-20 23:18:04', '2018-02-20 23:18:04', '.png', '12', NULL, 'pza', '1020.00', 'Uso Personal', 'Deportes', '', '2 años', 'si', '2 a 3 días', 'si', 'si'),
(5, 1, 'Zapato Acuático (Azul)', 'Tallas del 14-19,12 pares en $960.00<br />\r\nTallas de 20-29, 12 pares en $1,020.00<br />\r\nDe 1 a 11 pares a $150', '960.00', '2018-02-20 23:28:18', '2018-02-20 23:28:18', '.png', '12', NULL, 'pza', '1020.00', 'Uso Personal', 'Deportes', '', '2 años', 'si', '2 a 3 días', 'si', 'si'),
(6, 1, 'Zapato Acuático (Azul)', 'Tallas del 14-19,12 pares en $960.00<br />\r\nTallas de 20-29, 12 pares en $1,020.00<br />\r\nDe 1 a 11 pares a $150', '960.00', '2018-02-20 23:31:59', '2018-02-20 23:31:59', '.png', '12', NULL, 'pza', '1020.00', 'Uso Personal', 'Deportes', '', '2 años', 'si', '2 a 3 días', 'si', 'si'),
(7, 1, 'Zapato Acuático (Azul)', 'Tallas del 14-19,12 pares en $960.00<br />\r\nTallas de 20-29, 12 pares en $1,020.00<br />\r\nDe 1 a 11 pares a $150', '960.00', '2018-02-20 23:34:17', '2018-02-20 23:34:17', '.png', '12', NULL, 'pza', '1020.00', 'Uso Personal', 'Deportes', '', '2 años', 'si', '2 a 3 días', 'si', 'si'),
(8, 1, 'Zapato Acuático (Azul)', 'Tallas del 14-19,12 pares en $960.00<br />\r\nTallas de 20-29, 12 pares en $1,020.00<br />\r\nDe 1 a 11 pares a $150', '960.00', '2018-02-20 23:35:51', '2018-02-20 23:35:51', '.png', '12', NULL, 'pza', '1020.00', 'Uso Personal', 'Deportes', '', '2 años', 'si', '2 a 3 días', 'si', 'si'),
(9, 1, 'Zapato Acuático (Azul)', 'Tallas del 14-19,12 pares en $960.00<br />\r\nTallas de 20-29, 12 pares en $1,020.00<br />\r\nDe 1 a 11 pares a $150', '960.00', '2018-02-20 23:37:54', '2018-02-20 23:37:54', '.png', '12', NULL, 'pza', '1020.00', 'Uso Personal', 'Deportes', '', '2 años', 'si', '2 a 3 días', 'si', 'si'),
(12, 0, 'Zapato Acuático (Azul)', 'Tallas del 14-19,12 pares en $960.00<br />\r\nTallas de 20-29, 12 pares en $1,020.00<br />\r\nDe 1 a 11 pares a $150', '960.00', '2018-02-20 23:51:06', '2018-02-20 23:51:06', '.png', '12', NULL, 'pza', '1020.00', 'Uso Personal', 'Deportes', '', '2 años', 'si', '2 a 3 días', 'si', 'si'),
(13, 1, 'prueba para alert', 'bla bla bla bla bla <br />\r\nbla bla bla bla<br />\r\n', '20.00', '2018-03-03 01:41:19', '2018-03-03 01:41:19', '.jpeg', '1', NULL, 'pza', '25.00', 'Vehículos', 'Véhiculos', 'Automóvil', '6 meses', 'si', '2', 'si', 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sellers`
--

CREATE TABLE `sellers` (
  `ids` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `rsocial` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rfc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `t_empresa` varchar(255) CHARACTER SET utf8 NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `town` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Proceso',
  `Vigencia` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `f_vencimiento` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cobertura` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `consigna` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `pagos` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `credito` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `calidad` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `archivo_calidad` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `servicio` varchar(255) CHARACTER SET utf8 NOT NULL,
  `quejas` varchar(255) CHARACTER SET utf8 NOT NULL,
  `de` varchar(255) CHARACTER SET utf8 NOT NULL,
  `hasta` varchar(255) CHARACTER SET utf8 NOT NULL,
  `dias` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `sellers`
--

INSERT INTO `sellers` (`ids`, `user_id`, `rsocial`, `rfc`, `t_empresa`, `address`, `postal_code`, `state`, `town`, `country`, `status`, `Vigencia`, `f_vencimiento`, `cobertura`, `consigna`, `pagos`, `credito`, `calidad`, `archivo_calidad`, `servicio`, `quejas`, `de`, `hasta`, `dias`, `created_at`, `updated_at`) VALUES
(1, 1, 'Studio Spook S.A. de C.V.', '', 'Fabricante', 'montaña de tacana 110, San Cayetano', '42084', 'Hidalgo', 'Pachuca', 'México', 'Activo', '1', '2018-03-26', 'Nacional', 'no', 'Tranferencia / Efectivo / Oxxo / Tarjeta debito\r\n					 / Tarjeta de crédito / ', '', 'IEEE 2170', NULL, 'si', 'si', '9:00 am', '7:00 pm', 'Lunes / Martes / Miercoles / Jueves / Viernes / ', '2018-02-26 15:43:25', '2018-02-26 15:43:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shopping_carts`
--

CREATE TABLE `shopping_carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategoria`
--

CREATE TABLE `subcategoria` (
  `id` int(11) NOT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `subcategoria`
--

INSERT INTO `subcategoria` (`id`, `id_categoria`, `name`) VALUES
(1, 1, 'Audio y Vídeo'),
(2, 1, 'Computación'),
(3, 1, 'Teléfonos Celulares'),
(4, 1, 'Tabletas'),
(5, 1, 'Vídeo-juegos'),
(6, 1, 'Teléfono Fijo'),
(7, 2, 'Muebles'),
(8, 2, 'Ferreteria'),
(9, 2, 'Seguridad'),
(10, 2, 'Línea Blanca'),
(11, 2, 'Eléctrica'),
(12, 2, 'Construcción'),
(13, 2, 'Carpintería'),
(14, 2, 'Limpieza'),
(15, 2, 'Blancos'),
(16, 2, 'Jardinería y Agricultura'),
(17, 2, 'Mascotas'),
(18, 3, 'Deportes'),
(19, 3, 'Mujer'),
(20, 3, 'Hombre'),
(21, 3, 'Niños y Bebes'),
(22, 3, 'Juguetes'),
(23, 3, 'Super'),
(24, 4, 'Véhiculos'),
(25, 1, 'Instrumentos Músicales'),
(26, 1, 'Cables,Conectores y Conexiones'),
(27, 1, 'Cámaras,Fotos y accesorios'),
(28, 2, 'Cristalería y Vajillas'),
(30, 4, 'Accesorios y Refacciones para moto'),
(31, 4, 'Accesorio y Refacciones para bicicleta'),
(32, 4, 'Accesorio y Refacciones para auto.'),
(33, 2, 'Pintura'),
(34, 5, 'Desechables'),
(35, 5, 'Mobiliario Clínico'),
(36, 5, 'Uniformes'),
(37, 5, 'Medicamentos'),
(38, 5, 'Aparatología'),
(39, 5, 'Instrumental');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `razon_social` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rfc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postal_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pass` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `tipo`, `created_at`, `updated_at`, `pass`) VALUES
(1, 'Emmanue Hernandez Correa', 'freemex@yopmail.com', '$2y$10$Ge2Y.N2sbdEVB4ERwzddPOSFcwNoZyj4egK8OftTekq41imKSjS1u', NULL, 'Proveedor', '2018-02-22 18:45:22', '2018-02-26 15:43:25', NULL),
(2, 'ernesto', 'ernesto@hotmail.com', '$2y$10$gCet0RdVNM4kGzA5TYF.BOqu6dUyCaauEKlLQUJ8bY9Hp9xIPiFFu', NULL, 'Cliente', '2018-02-27 16:49:58', '2018-02-27 16:49:58', NULL),
(3, 'Ortega Robles', 'ortorobles@hotmail.com', '$2y$10$FtkE1aMbtiOxq4Cw6.TUnuUbjXWcwqhoA1x4.JTVS57.4AWekdio6', NULL, 'Cliente', '2018-02-28 19:11:51', '2018-02-28 19:11:51', '543216789'),
(4, 'osiris escorza', 'ossecor@hotmail.com', '$2y$10$5k.5m0Pfi9o0g8OlGwvLy.lgecFGGMJL83zYStbdMrXvkjmM5qEo.', NULL, 'Cliente', '2018-03-01 20:59:05', '2018-03-01 20:59:05', '87654321'),
(6, 'freemex2', 'freemex2@yopmail.com', '$2y$10$K5.wzNBSprnSBXIPBfr30uzl0B85FOA1E9d/MhbPbTzMgBzCTm5Gq', NULL, 'Cliente', '2018-03-01 21:01:34', '2018-03-01 21:01:34', '12345678'),
(7, 'guadalupe serrano', 'lupe5478@yopmail.com', '$2y$10$myVrcDw8X3XDFEfFdWW3.eBz0cIrPBdKdMH/2nk8ol.pC1CwPmHcm', NULL, 'Cliente', '2018-03-02 00:12:31', '2018-03-02 00:12:31', '543216789'),
(10, 'Estephanie Vargas', 'vargasestep@yopmail.com', '$2y$10$YDe5L/ENU/OfN62LG0FcwujJiEhHQ54cX5AGWjkpc68kj96dpG5UC', NULL, 'Cliente', '2018-03-02 00:37:09', '2018-03-02 00:37:09', '987654321'),
(11, 'GHVA', 'der2345@hotmail.com', '$2y$10$Kep5/1NRPTMRBKNXQ93YHu2k5Fb1yN4Xx9bDrL6ohVxPhwoW/QF7G', NULL, 'Cliente', '2018-03-02 00:54:36', '2018-03-02 00:54:36', 'hernandez'),
(12, 'gonza herrera', 'gonzaher@yopmail.com', '$2y$10$uIGkQvg7kOWRwwYu2eBL6u3P41Oa/r2IQpu856TdNn1THgjoRWLoy', NULL, 'Cliente', '2018-03-02 00:55:54', '2018-03-02 00:55:54', '12345678'),
(13, 'vaaaa', 'vaaa@yopmail.com', '$2y$10$QCf4pU67Npmzbz/foQ/5B.DAxCTRWvrTMGl9tSrDQcUgHCwN1b2CW', NULL, 'Cliente', '2018-03-02 01:03:19', '2018-03-02 01:03:19', '987654321'),
(14, 'otraaa', 'otraa@yopmail.com', '$2y$10$an2iDL5vMPTQ4G3iMlQPS.oONzCnPPgiltAfF3rHtrRNEylwLkxYO', NULL, 'Cliente', '2018-03-02 01:11:41', '2018-03-02 01:11:41', '543216789'),
(15, 'otramas', 'masssotra@yopmail.com', '$2y$10$.OvHMIXf6RNZhC1IKeaE0uF95O1ZiEXJl5v0HumlvYUBQI0YSM/lq', NULL, 'Cliente', '2018-03-02 01:13:36', '2018-03-02 01:13:36', '87654321'),
(16, 'Esmeralda Quiros', 'quiraesme@yopmail.com', '$2y$10$gOhv8kSNflKOZ/aAHgLfAujc2qelTUd1/gZXXm3D/do46DywnrYhu', NULL, 'Cliente', '2018-03-02 01:15:13', '2018-03-02 01:15:13', '12345678'),
(17, '124578', 'emma@yopmail.com', '$2y$10$ZK6yCITYp483D96mTm3M/OaYHXVhSFBEVf9YveeMrJNbyCSngLlbq', NULL, 'Cliente', '2018-03-03 01:43:09', '2018-03-03 01:43:09', '12345678'),
(18, 'hola', 'hola@yopmail.com', '$2y$10$tOh1ESkIZ/Pel1AMA33ThuaWYphpldAU/LFj/10bY601TdRB5ttxi', NULL, 'Cliente', '2018-03-03 01:53:55', '2018-03-03 01:53:55', '12345678'),
(19, 'hol mundio', 'mundo@yopmail.com', '$2y$10$Ua.cn9HEA75G0cR8zJIEKOMLt6hWJg0HY9iEM6TEuofUMsABCbEj2', NULL, 'Cliente', '2018-03-03 01:57:39', '2018-03-03 01:57:39', '1234'),
(20, 'yup', 'yup@yopmail.com', '$2y$10$8fnGTBXIttiNDgeSC9/aZOjrYjlfbJnTp06MjIFsodYBHDPTOMLkq', NULL, 'Cliente', '2018-03-03 01:59:31', '2018-03-03 01:59:31', '1234'),
(21, 'horacio jimenez', 'hora@yopmail.com', '$2y$10$XWKgN2xYGMZbhTHDqbizSOcggcvEPk4AVs3jIHpno.eEjSuEQLZ9u', NULL, 'Cliente', '2018-03-08 15:38:58', '2018-03-08 15:38:58', 'hora1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `in_shopping_carts`
--
ALTER TABLE `in_shopping_carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `in_shopping_carts_shopping_cart_id_foreign` (`shopping_cart_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_shopping_cart_id_foreign` (`shopping_cart_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_index` (`user_id`);

--
-- Indices de la tabla `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`ids`),
  ADD KEY `sellers_user_id_index` (`user_id`);

--
-- Indices de la tabla `shopping_carts`
--
ALTER TABLE `shopping_carts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `suppliers_user_id_index` (`user_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=492;

--
-- AUTO_INCREMENT de la tabla `in_shopping_carts`
--
ALTER TABLE `in_shopping_carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `sellers`
--
ALTER TABLE `sellers`
  MODIFY `ids` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `shopping_carts`
--
ALTER TABLE `shopping_carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `subcategoria`
--
ALTER TABLE `subcategoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `in_shopping_carts`
--
ALTER TABLE `in_shopping_carts`
  ADD CONSTRAINT `in_shopping_carts_shopping_cart_id_foreign` FOREIGN KEY (`shopping_cart_id`) REFERENCES `shopping_carts` (`id`);

--
-- Filtros para la tabla `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_shopping_cart_id_foreign` FOREIGN KEY (`shopping_cart_id`) REFERENCES `shopping_carts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
