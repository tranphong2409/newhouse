-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 07 Octobre 2016 à 10:53
-- Version du serveur :  5.6.21
-- Version de PHP :  5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `nguyenthilap`
--

-- --------------------------------------------------------

--
-- Structure de la table `counter`
--

CREATE TABLE IF NOT EXISTS `counter` (
`id` int(11) NOT NULL,
  `tm` int(11) NOT NULL,
  `ip` varchar(16) COLLATE latin1_general_ci NOT NULL DEFAULT '0.0.0.0'
) ENGINE=MyISAM AUTO_INCREMENT=295 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `counter`
--

INSERT INTO `counter` (`id`, `tm`, `ip`) VALUES
(1, 1471232249, '::1'),
(2, 1471234013, '::1'),
(3, 1471234928, '::1'),
(4, 1471235836, '::1'),
(5, 1471236923, '::1'),
(6, 1471242673, '::1'),
(7, 1471243587, '::1'),
(8, 1471245271, '::1'),
(9, 1471246173, '::1'),
(10, 1471247460, '::1'),
(11, 1471248398, '::1'),
(12, 1471249345, '::1'),
(13, 1471250369, '::1'),
(14, 1471251377, '::1'),
(15, 1471252709, '::1'),
(16, 1471253728, '::1'),
(17, 1471254674, '::1'),
(18, 1471309931, '::1'),
(19, 1471310836, '::1'),
(20, 1471311977, '::1'),
(21, 1471312886, '::1'),
(22, 1471314327, '::1'),
(23, 1471315231, '::1'),
(24, 1471316261, '::1'),
(25, 1471317184, '::1'),
(26, 1471318260, '::1'),
(27, 1471319201, '::1'),
(28, 1471320524, '::1'),
(29, 1471321457, '::1'),
(30, 1471322372, '::1'),
(31, 1471323308, '::1'),
(32, 1471329362, '::1'),
(33, 1471330322, '::1'),
(34, 1471331222, '::1'),
(35, 1471694016, '::1'),
(36, 1471752970, '::1'),
(37, 1472146146, '::1'),
(38, 1473238419, '::1'),
(39, 1473242154, '::1'),
(40, 1473328207, '::1'),
(41, 1473389903, '::1'),
(42, 1473391162, '::1'),
(43, 1473392075, '::1'),
(44, 1473393124, '::1'),
(45, 1473394026, '::1'),
(46, 1473394960, '::1'),
(47, 1473396093, '::1'),
(48, 1473397045, '::1'),
(49, 1473402387, '::1'),
(50, 1473403314, '::1'),
(51, 1473404301, '::1'),
(52, 1473405247, '::1'),
(53, 1473406316, '::1'),
(54, 1473409096, '::1'),
(55, 1473410151, '::1'),
(56, 1473411126, '::1'),
(57, 1473433811, '::1'),
(58, 1473435163, '::1'),
(59, 1473436103, '::1'),
(60, 1473437012, '::1'),
(61, 1473439900, '::1'),
(62, 1473441883, '::1'),
(63, 1473470452, '::1'),
(64, 1473471412, '::1'),
(65, 1473472642, '::1'),
(66, 1473474140, '::1'),
(67, 1473477234, '::1'),
(68, 1473478134, '::1'),
(69, 1473479068, '::1'),
(70, 1473479991, '::1'),
(71, 1473480891, '::1'),
(72, 1473482100, '::1'),
(73, 1473483030, '::1'),
(74, 1473488085, '::1'),
(75, 1473489011, '::1'),
(76, 1473489928, '::1'),
(77, 1473491363, '::1'),
(78, 1473492285, '::1'),
(79, 1473493368, '::1'),
(80, 1473494438, '::1'),
(81, 1473497660, '::1'),
(82, 1473498896, '::1'),
(83, 1473500084, '::1'),
(84, 1473501192, '::1'),
(85, 1473502460, '::1'),
(86, 1473562600, '::1'),
(87, 1473566332, '::1'),
(88, 1473567281, '::1'),
(89, 1473568187, '::1'),
(90, 1473569177, '::1'),
(91, 1473570411, '::1'),
(92, 1473571553, '::1'),
(93, 1473572499, '::1'),
(94, 1473573459, '::1'),
(95, 1473574446, '::1'),
(96, 1473575366, '::1'),
(97, 1473576365, '::1'),
(98, 1473577309, '::1'),
(99, 1473578209, '::1'),
(100, 1473651954, '::1'),
(101, 1473842664, '::1'),
(102, 1473991875, '::1'),
(103, 1474001468, '::1'),
(104, 1474006341, '::1'),
(105, 1474016242, '::1'),
(106, 1474017816, '::1'),
(107, 1474018718, '::1'),
(108, 1474211657, '::1'),
(109, 1474213566, '::1'),
(110, 1474214488, '::1'),
(111, 1474215438, '::1'),
(112, 1474216623, '::1'),
(113, 1474218682, '::1'),
(114, 1474219593, '::1'),
(115, 1474221235, '::1'),
(116, 1474222153, '::1'),
(117, 1474223419, '::1'),
(118, 1474225221, '::1'),
(119, 1474226146, '::1'),
(120, 1474227086, '::1'),
(121, 1474247514, '::1'),
(122, 1474248693, '::1'),
(123, 1474249605, '::1'),
(124, 1474250577, '::1'),
(125, 1474251771, '::1'),
(126, 1474252721, '::1'),
(127, 1474253646, '::1'),
(128, 1474254641, '::1'),
(129, 1474255586, '::1'),
(130, 1474265974, '::1'),
(131, 1474341882, '::1'),
(132, 1474343134, '::1'),
(133, 1474344192, '::1'),
(134, 1474345349, '::1'),
(135, 1474347277, '::1'),
(136, 1474351979, '::1'),
(137, 1474352953, '::1'),
(138, 1474353927, '::1'),
(139, 1474355730, '::1'),
(140, 1474357056, '::1'),
(141, 1474361511, '::1'),
(142, 1474362474, '::1'),
(143, 1474363766, '::1'),
(144, 1474365084, '::1'),
(145, 1474419843, '::1'),
(146, 1474422139, '::1'),
(147, 1474423041, '::1'),
(148, 1474424017, '::1'),
(149, 1474424934, '::1'),
(150, 1474425890, '::1'),
(151, 1474427183, '::1'),
(152, 1474428087, '::1'),
(153, 1474429584, '::1'),
(154, 1474430713, '::1'),
(155, 1474431706, '::1'),
(156, 1474438077, '::1'),
(157, 1474439023, '::1'),
(158, 1474440286, '::1'),
(159, 1474443035, '::1'),
(160, 1474443943, '::1'),
(161, 1474445899, '::1'),
(162, 1474447107, '::1'),
(163, 1474448007, '::1'),
(164, 1474448957, '::1'),
(165, 1474449870, '::1'),
(166, 1474450789, '::1'),
(167, 1474451768, '::1'),
(168, 1474507184, '::1'),
(169, 1474511984, '::1'),
(170, 1474512916, '::1'),
(171, 1474513829, '::1'),
(172, 1474514731, '::1'),
(173, 1474515687, '::1'),
(174, 1474516775, '::1'),
(175, 1474518425, '::1'),
(176, 1474519371, '::1'),
(177, 1474944832, '::1'),
(178, 1474963305, '::1'),
(179, 1475025548, '::1'),
(180, 1475026573, '::1'),
(181, 1475027476, '::1'),
(182, 1475033126, '::1'),
(183, 1475034261, '::1'),
(184, 1475035343, '::1'),
(185, 1475036270, '::1'),
(186, 1475037734, '::1'),
(187, 1475043894, '::1'),
(188, 1475044815, '::1'),
(189, 1475045763, '::1'),
(190, 1475046744, '::1'),
(191, 1475047647, '::1'),
(192, 1475048894, '::1'),
(193, 1475049903, '::1'),
(194, 1475050856, '::1'),
(195, 1475051768, '::1'),
(196, 1475052735, '::1'),
(197, 1475053661, '::1'),
(198, 1475054667, '::1'),
(199, 1475055678, '::1'),
(200, 1475056655, '::1'),
(201, 1475072639, '::1'),
(202, 1475073796, '::1'),
(203, 1475077906, '::1'),
(204, 1475078893, '::1'),
(205, 1475111427, '::1'),
(206, 1475112545, '::1'),
(207, 1475113484, '::1'),
(208, 1475114665, '::1'),
(209, 1475115691, '::1'),
(210, 1475116660, '::1'),
(211, 1475117580, '::1'),
(212, 1475118501, '::1'),
(213, 1475119441, '::1'),
(214, 1475120354, '::1'),
(215, 1475121258, '::1'),
(216, 1475122216, '::1'),
(217, 1475123140, '::1'),
(218, 1475124318, '::1'),
(219, 1475129210, '::1'),
(220, 1475130127, '::1'),
(221, 1475131050, '::1'),
(222, 1475132043, '::1'),
(223, 1475133109, '::1'),
(224, 1475134489, '::1'),
(225, 1475135394, '::1'),
(226, 1475136659, '::1'),
(227, 1475137563, '::1'),
(228, 1475138572, '::1'),
(229, 1475139508, '::1'),
(230, 1475140409, '::1'),
(231, 1475141709, '::1'),
(232, 1475142620, '::1'),
(233, 1475143531, '::1'),
(234, 1475463442, '::1'),
(235, 1475574938, '::1'),
(236, 1475629522, '::1'),
(237, 1475632062, '::1'),
(238, 1475633201, '::1'),
(239, 1475634512, '::1'),
(240, 1475635710, '::1'),
(241, 1475636641, '::1'),
(242, 1475637696, '::1'),
(243, 1475638627, '::1'),
(244, 1475639992, '::1'),
(245, 1475641194, '::1'),
(246, 1475642402, '::1'),
(247, 1475643329, '::1'),
(248, 1475648105, '::1'),
(249, 1475649008, '::1'),
(250, 1475649998, '::1'),
(251, 1475650956, '::1'),
(252, 1475651865, '::1'),
(253, 1475652771, '::1'),
(254, 1475653671, '::1'),
(255, 1475654574, '::1'),
(256, 1475655511, '::1'),
(257, 1475657398, '::1'),
(258, 1475658354, '::1'),
(259, 1475659540, '::1'),
(260, 1475660565, '::1'),
(261, 1475661470, '::1'),
(262, 1475715820, '::1'),
(263, 1475717151, '::1'),
(264, 1475718089, '::1'),
(265, 1475719002, '::1'),
(266, 1475720416, '::1'),
(267, 1475721411, '::1'),
(268, 1475722766, '::1'),
(269, 1475723717, '::1'),
(270, 1475724646, '::1'),
(271, 1475725583, '::1'),
(272, 1475727103, '::1'),
(273, 1475728722, '::1'),
(274, 1475740381, '::1'),
(275, 1475742031, '::1'),
(276, 1475743266, '::1'),
(277, 1475744885, '::1'),
(278, 1475746197, '::1'),
(279, 1475802052, '::1'),
(280, 1475803029, '::1'),
(281, 1475803975, '::1'),
(282, 1475811787, '::1'),
(283, 1475812716, '::1'),
(284, 1475814339, '::1'),
(285, 1475815851, '::1'),
(286, 1475820782, '::1'),
(287, 1475821687, '::1'),
(288, 1475822984, '::1'),
(289, 1475823991, '::1'),
(290, 1475824913, '::1'),
(291, 1475826473, '::1'),
(292, 1475827391, '::1'),
(293, 1475829024, '::1'),
(294, 1475829980, '::1');

-- --------------------------------------------------------

--
-- Structure de la table `table_album`
--

CREATE TABLE IF NOT EXISTS `table_album` (
`id` int(10) unsigned NOT NULL,
  `id_list` int(11) NOT NULL,
  `noibat` int(11) NOT NULL,
  `top_nb` tinyint(2) NOT NULL,
  `type` varchar(100) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `thumb` varchar(225) NOT NULL,
  `ten_vi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `mota_vi` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `mota_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `luotxem` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `table_albumphongngu`
--

CREATE TABLE IF NOT EXISTS `table_albumphongngu` (
`id` int(10) unsigned NOT NULL,
  `id_list` int(11) NOT NULL,
  `noibat` int(11) NOT NULL,
  `top_nb` tinyint(2) NOT NULL,
  `type` varchar(100) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `thumb` varchar(225) NOT NULL,
  `ten_vi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `mota_vi` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `mota_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `luotxem` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `table_albumphongngu_photo`
--

CREATE TABLE IF NOT EXISTS `table_albumphongngu_photo` (
`id` int(10) unsigned NOT NULL,
  `id_album` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `thumb` varchar(225) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(1024) NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `table_albumproduct`
--

CREATE TABLE IF NOT EXISTS `table_albumproduct` (
`id` int(10) unsigned NOT NULL,
  `id_list` int(11) NOT NULL,
  `noibat` int(11) NOT NULL,
  `top_nb` tinyint(2) NOT NULL,
  `type` varchar(100) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `thumb` varchar(225) NOT NULL,
  `ten_vi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `mota_vi` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `mota_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `luotxem` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `table_albumproduct_photo`
--

CREATE TABLE IF NOT EXISTS `table_albumproduct_photo` (
`id` int(10) unsigned NOT NULL,
  `id_album` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `thumb` varchar(225) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(1024) NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `table_album_list`
--

CREATE TABLE IF NOT EXISTS `table_album_list` (
`id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `name_vi` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `quangcao` varchar(255) NOT NULL,
  `quangcao_thumb` varchar(255) NOT NULL,
  `links` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `table_album_photo`
--

CREATE TABLE IF NOT EXISTS `table_album_photo` (
`id` int(10) unsigned NOT NULL,
  `id_album` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `thumb` varchar(225) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(1024) NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `table_baiviet`
--

CREATE TABLE IF NOT EXISTS `table_baiviet` (
`id` int(10) unsigned NOT NULL,
  `id_cat` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `id_sub` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `noibat` int(11) NOT NULL,
  `banchay` int(11) NOT NULL,
  `toado` varchar(255) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `thumb` varchar(225) NOT NULL,
  `ten_vi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `masp` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `khuyenmai_vi` text NOT NULL,
  `khuyenmai_en` text NOT NULL,
  `thongtin_vi` text NOT NULL,
  `thongtin_en` text NOT NULL,
  `baohanh_vi` varchar(255) NOT NULL,
  `baohanh_en` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `des_char` int(11) NOT NULL,
  `is_noindex` int(11) NOT NULL,
  `giaban` int(11) NOT NULL,
  `giacu` int(11) NOT NULL,
  `mota_vi` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `name_vi` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `mota_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `luotxem` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table_baiviet`
--

INSERT INTO `table_baiviet` (`id`, `id_cat`, `id_list`, `id_item`, `id_sub`, `type`, `noibat`, `banchay`, `toado`, `photo`, `thumb`, `ten_vi`, `masp`, `tenkhongdau`, `khuyenmai_vi`, `khuyenmai_en`, `thongtin_vi`, `thongtin_en`, `baohanh_vi`, `baohanh_en`, `title`, `keywords`, `description`, `des_char`, `is_noindex`, `giaban`, `giacu`, `mota_vi`, `noidung_vi`, `name_vi`, `name_en`, `ten_en`, `mota_en`, `noidung_en`, `stt`, `hienthi`, `ngaytao`, `ngaysua`, `luotxem`) VALUES
(1, 0, 0, 0, 0, 'tintuc', 0, 0, '', '', '', 'Tận dụng tách trà cũ để tạo nên những khu vườn mini đẹp đến bất ngờ', '', 'tan-dung-tach-tra-cu-de-tao-nen-nhung-khu-vuon-mini-dep-den-bat-ngo', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 'Nếu nhà bạn không có nhiều diện tích để có hẳn một khoảng vườn, hãy nghĩ đến ý tưởng trồng những chậu cây mini trong nhà, hay thiết kế tất cả thành một khu vườn thu nhỏ trong tách trà cũ.', '<div style="margin: 0px; padding: 0px; font-family: &quot;Times New Roman&quot;; font-size: 16px; line-height: 20px; -webkit-text-stroke: 0.1px rgba(255, 255, 255, 0.00784314);"><span style="margin: 0px; padding: 0px; text-align: justify;">Những chiếc tách trà mang <a href="http://afamily.vn/phong-cach-vintage.htm" style="margin: 0px; padding: 0px; text-decoration: none; outline: none; -webkit-appearance: none;" target="_blank" title="phong cách vintage">phong cách vintage</a> sẽ là cách tô điểm vô cùng đáng yêu cho không gian nhà cũng như tạo một không gian vườn mini trong chính tách trà. Bạn có thể chọn họa tiết trên tách trà sao cho phù hợp với phong cách thiết kế của ngôi nhà mình và loại cây cũng như<span style="margin: 0px; padding: 0px; font-weight: bold;"><a href="http://afamily.vn/khu-vuon.htm" style="margin: 0px; padding: 0px; text-decoration: none; outline: none; -webkit-appearance: none;" target="_blank" title="khu vườn">khu vườn</a></span> mini bạn định thiết kế. Giờ thì bắt tay vào thôi!</span></div>\r\n\r\n<div style="margin: 0px; padding: 0px; font-family: &quot;Times New Roman&quot;; font-size: 16px; line-height: 20px; -webkit-text-stroke: 0.1px rgba(255, 255, 255, 0.00784314);">\r\n<div style="margin: 0px; padding: 0px; text-align: justify;">\r\n<div style="margin: 0px; padding: 0px;"> </div>\r\n\r\n<div style="margin: 0px; padding: 0px; text-align: center;">\r\n<div style="margin: 0px; padding: 0px;"><img alt="" src="http://afamily1.mediacdn.vn/M8N20d5STCm5E9QXKSmE0TPi2bNc59/Image/2016/07/tu-lam-khu-vuon-mini-voi-nhung-tach-tra-cu-to-diem-cho-khong-gian-nha_5714120b43.jpg" style="margin: 0px; padding: 0px; border: none; outline: none; -webkit-appearance: none; max-width: 100%;" /></div>\r\n\r\n<div style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-style: italic;">Một tách trà hoa này đặt ở bệ cửa sổ sẽ đủ khiến tâm trạng bạn trở nên vui vẻ và yêu đời hơn.</span></div>\r\n\r\n<div style="margin: 0px; padding: 0px;"> </div>\r\n\r\n<div style="margin: 0px; padding: 0px;"><img alt="" src="http://afamily1.mediacdn.vn/M8N20d5STCm5E9QXKSmE0TPi2bNc59/Image/2016/07/tu-lam-khu-vuon-mini-voi-nhung-tach-tra-cu-to-diem-cho-khong-gian-nha_8ab1004a94.jpg" style="margin: 0px; padding: 0px; border: none; outline: none; -webkit-appearance: none; max-width: 100%;" /></div>\r\n\r\n<div style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-style: italic;">Những họa tiết cổ trên những tách trà có thể góp phần tô điểm chất vintage thêm cho không gian nhà bạn.</span></div>\r\n</div>\r\n</div>\r\n</div>\r\n', '', '', '', '', '', 1, 1, 1475721685, 0, 0),
(2, 0, 0, 0, 0, 'tintuc', 0, 0, '', '', '', 'Trang trí nhà ngày cưới với chi phí 8 triệu đồng đẹp miễn chê của cặp đôi Sài Thành', '', 'trang-tri-nha-ngay-cuoi-voi-chi-phi-8-trieu-dong-dep-mien-che-cua-cap-doi-sai-thanh', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 'Mời bạn cùng chúng tôi tham khảo ý tưởng trang trí nhà đám cưới theo phong cách Rustic mộc mạc, giản dị nhưng không kém phần sang trọng của cặp đôi đến từ TP. Hồ Chí Minh.', '<div style="margin: 0px; padding: 0px; font-family: &quot;Times New Roman&quot;; font-size: 16px; line-height: 20px; -webkit-text-stroke: 0.1px rgba(255, 255, 255, 0.00784314); text-align: justify;">Vừa qua, một công ty tổ chức tiệc cưới đã hiện thực hóa ý tưởng trang trí này cho cặp đôi Thanh Bình và Phương Hằng đến từ TP. Hồ Chí Minh. Mời các cô dâu chú rể tương lai cùng chúng tôi tham khảo nhé!</div>\r\n\r\n<div style="margin: 0px; padding: 0px; font-family: &quot;Times New Roman&quot;; font-size: 16px; line-height: 20px; -webkit-text-stroke: 0.1px rgba(255, 255, 255, 0.00784314); text-align: center;">\r\n<div style="margin: 0px; padding: 0px;"> </div>\r\n\r\n<div style="margin: 0px; padding: 0px;"><img alt="" src="http://afamily1.mediacdn.vn/M8N20d5STCm5E9QXKSmE0TPi2bNc59/Image/2016/09/trang-tri-le-gia-tien-theo-phong-cach-rustic-moc-mac-cua-cap-doi-sai-thanh_603a4e5405.jpg" style="margin: 0px; padding: 0px; border: none; outline: none; -webkit-appearance: none; max-width: 100%;" /></div>\r\n\r\n<div style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-style: italic;">Lễ rước dâu được diễn ra vào đêm khuya cho đến rạng sáng, vì thế yếu tố ánh sáng kết hợp tông màu gần gũi sẽ tạo nên sự ấm cúng và mộc mạc theo chủ ý của cô dâu chú rể.</span></div>\r\n\r\n<div style="margin: 0px; padding: 0px;"> </div>\r\n\r\n<div style="margin: 0px; padding: 0px;"><img alt="" src="http://afamily1.mediacdn.vn/M8N20d5STCm5E9QXKSmE0TPi2bNc59/Image/2016/09/trang-tri-le-gia-tien-theo-phong-cach-rustic-moc-mac-cua-cap-doi-sai-thanh_446c415db3.jpg" style="margin: 0px; padding: 0px; border: none; outline: none; -webkit-appearance: none; max-width: 100%;" /></div>\r\n\r\n<div style="margin: 0px; padding: 0px;"> </div>\r\n\r\n<div style="margin: 0px; padding: 0px;"><img alt="" src="http://afamily1.mediacdn.vn/M8N20d5STCm5E9QXKSmE0TPi2bNc59/Image/2016/09/trang-tri-le-gia-tien-theo-phong-cach-rustic-moc-mac-cua-cap-doi-sai-thanh_fce68cbe1d.jpg" style="margin: 0px; padding: 0px; border: none; outline: none; -webkit-appearance: none; max-width: 100%;" /></div>\r\n\r\n<div style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-style: italic;">Tấm bảng màu xanh lá cây viền trắng với dòng chữ “Vu Quy” trước cổng nhà như gửi một lời thông báo nhẹ nhàng và vô cùng giản dị, không màu mè đúng chất <span style="margin: 0px; padding: 0px; font-weight: bold;">phong cách Rustic</span>.</span></div>\r\n\r\n<div style="margin: 0px; padding: 0px;"> </div>\r\n\r\n<div style="margin: 0px; padding: 0px;"><img alt="" src="http://afamily1.mediacdn.vn/M8N20d5STCm5E9QXKSmE0TPi2bNc59/Image/2016/09/trang-tri-le-gia-tien-theo-phong-cach-rustic-moc-mac-cua-cap-doi-sai-thanh_9788e9422f.jpg" style="margin: 0px; padding: 0px; border: none; outline: none; -webkit-appearance: none; max-width: 100%;" /></div>\r\n\r\n<div style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-style: italic;">Toàn bộ không gian bên trong ngôi nhà được Wedding planner dùng màn trắng che phủ cẩn thận, bao bọc hầu khắp mọi ngóc ngách nhằm tạo điều kiện thuận lợi khi trang trí cũng như bày biện lễ tiệc. Màu trắng tinh khôi, thanh lịch, là lựa chọn lý tường để ngôi nhà trở nên rộng hơn so với thực tế, đồng thời là tông màu thích hợp để làm phông nền hơn cả vì khả năng kết hợp được với tất cả các gam màu khác nhau.</span></div>\r\n\r\n<div style="margin: 0px; padding: 0px;"> </div>\r\n\r\n<div style="margin: 0px; padding: 0px;"><img alt="" src="http://afamily1.mediacdn.vn/M8N20d5STCm5E9QXKSmE0TPi2bNc59/Image/2016/09/trang-tri-le-gia-tien-theo-phong-cach-rustic-moc-mac-cua-cap-doi-sai-thanh_0893517e78.jpg" style="margin: 0px; padding: 0px; border: none; outline: none; -webkit-appearance: none; max-width: 100%;" /></div>\r\n\r\n<div style="margin: 0px; padding: 0px;"> </div>\r\n\r\n<div style="margin: 0px; padding: 0px;"><img alt="" src="http://afamily1.mediacdn.vn/M8N20d5STCm5E9QXKSmE0TPi2bNc59/Image/2016/09/trang-tri-le-gia-tien-theo-phong-cach-rustic-moc-mac-cua-cap-doi-sai-thanh_1e519cb331.jpg" style="margin: 0px; padding: 0px; border: none; outline: none; -webkit-appearance: none; max-width: 100%;" /></div>\r\n\r\n<div style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-style: italic;">Concept được xây dựng xuyên suốt từ ý tưởng từ tấm thiệp cưới của cô dâu chú rể, với vòng nguyệt quế xanh tươi hình tròn khép kín, từ bảng tên lễ đến phông màn chữ hỷ cách điệu sau bàn thờ gia tiên. Biểu tượng này mang vẻ đẹp thuần khiết và quyến rũ của thiên nhiên, đồng thời tượng trưng cho sức mạnh, sự chiến thắng sau một hành trình dài phấn đấu, giống như bến đỗ tình yêu là hôn nhân cần trải qua rất nhiều khó khăn, thử thách.</span></div>\r\n\r\n<div style="margin: 0px; padding: 0px;"> </div>\r\n\r\n<div style="margin: 0px; padding: 0px;"><img alt="" src="http://afamily1.mediacdn.vn/M8N20d5STCm5E9QXKSmE0TPi2bNc59/Image/2016/09/trang-tri-le-gia-tien-theo-phong-cach-rustic-moc-mac-cua-cap-doi-sai-thanh_e6dc401c24.jpg" style="margin: 0px; padding: 0px; border: none; outline: none; -webkit-appearance: none; max-width: 100%;" /></div>\r\n\r\n<div style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-style: italic;"><span style="margin: 0px; padding: 0px; font-weight: bold;">Phong cách Rustic</span> sở dĩ mang đậm tính nghệ thuật là bởi nó mang những khoảng xanh của thiên nhiên vào không gian, với hơi thở mộc mạc được trang trí một cách khéo léo, dung dị mà không hề tẻ nhạt. Lễ gia tiên không có quá nhiều gam màu nổi bật, chỉ gói gọn trong sắc trắng của phông nền, hoa trắng tinh khôi, sắc xanh của lá và điểm xuyết những phụ kiện màu vàng đồng để thêm phần trang trọng.</span></div>\r\n\r\n<div style="margin: 0px; padding: 0px;"> </div>\r\n\r\n<div style="margin: 0px; padding: 0px;"><img alt="" src="http://afamily1.mediacdn.vn/M8N20d5STCm5E9QXKSmE0TPi2bNc59/Image/2016/09/trang-tri-le-gia-tien-theo-phong-cach-rustic-moc-mac-cua-cap-doi-sai-thanh_42356fad82.jpg" style="margin: 0px; padding: 0px; border: none; outline: none; -webkit-appearance: none; max-width: 100%;" /></div>\r\n\r\n<div style="margin: 0px; padding: 0px;"> </div>\r\n\r\n<div style="margin: 0px; padding: 0px;"><img alt="" src="http://afamily1.mediacdn.vn/M8N20d5STCm5E9QXKSmE0TPi2bNc59/Image/2016/09/trang-tri-le-gia-tien-theo-phong-cach-rustic-moc-mac-cua-cap-doi-sai-thanh_dc2dd703e5.jpg" style="margin: 0px; padding: 0px; border: none; outline: none; -webkit-appearance: none; max-width: 100%;" /></div>\r\n\r\n<div style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-style: italic;">Bàn đón tiếp hai họ được bày trí cẩn thận và tỉ mỉ đến từng chi tiết nhỏ. Bộ ấm tách trắng sứ sáng bóng và sạch sẽ, những lọ hoa màu vàng đồng thanh mảnh với những nhành lá rũ xuống nhẹ nhàng, đĩa bánh trái nhỏ xinh và nổi bật là chiếc khay đựng bánh cupcake với lồng đậy trong suốt trông vô cùng duyên dáng theo phong cách của những bữa tiệc nhẹ Âu châu.</span></div>\r\n</div>\r\n', '', '', '', '', '', 1, 1, 1475721727, 0, 0),
(3, 0, 0, 0, 0, 'tintuc', 0, 0, '', '', '', 'Muốn phòng ngủ gọn gàng, chắc chắn bạn phải sắm 4 sản phẩm lưu trữ dưới đây', '', 'muon-phong-ngu-gon-gang-chac-chan-ban-phai-sam-4-san-pham-luu-tru-duoi-day', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 'Để phòng ngủ luôn gọn gàng ngăn nắp thì những vật dụng lưu trữ là sản phẩm không thể thiếu được trong ngôi nhà của bạn.', '<div style="margin: 0px; padding: 0px; font-family: &quot;Times New Roman&quot;; font-size: 16px; line-height: 20px; -webkit-text-stroke: 0.1px rgba(255, 255, 255, 0.00784314);"><span style="margin: 0px; padding: 0px; text-align: justify;">Phòng ngủ là nơi chưa đựng rất nhiều đồ đạc như áo quần, túi xách...để phục vụ cho nhu cầu cá nhân của bạn, và chính vì thế phòng gnur của bạn lúc nào cũng rối beng lên vì đồ đạc. Để giúp phòng ngủ của bạn luôn gọn gàng và sạch sẽ, chúng tôi sẽ giới thiệu cho bạn 4 thiết kế phục vụ cho 4 mục đích <span style="margin: 0px; padding: 0px; font-weight: bold;"><a href="http://afamily.vn/luu-tru.htm" style="margin: 0px; padding: 0px; text-decoration: none; outline: none; -webkit-appearance: none;" target="_blank" title="lưu trữ">lưu trữ</a></span> khác nhau, với “ngoại hình” xinh xắn và chức năng tiện ích, chắn chắn bạn sẽ cảm thấy hài lòng và muốn “tậu” ngay về nhà đấy! </span></div>\r\n\r\n<div style="margin: 0px; padding: 0px; font-family: &quot;Times New Roman&quot;; font-size: 16px; line-height: 20px; -webkit-text-stroke: 0.1px rgba(255, 255, 255, 0.00784314);">\r\n<div style="margin: 0px; padding: 0px; text-align: justify;"><br style="margin: 0px; padding: 0px;" />\r\n<span style="margin: 0px; padding: 0px; font-weight: bold;">1. Dây móc treo lưu trữ túi xách</span></div>\r\n\r\n<div style="margin: 0px; padding: 0px; text-align: justify;"><br style="margin: 0px; padding: 0px;" />\r\nBất cứ chị em phụ nữ nào cũng đều sở hữu bộ sưu tập với nhiều chiếc túi xách khác nhau, và ắt hẳn không ít lần bạn cảm thấy lúng túng khi cất giữ chúng. Chiếc dây với 6 chiếc móc treo ở cả hai mặt (mặt trước 4, mặt sau 2) này sẽ giúp chúng ta giải quyết khó khăn này. Bạn chỉ cần mở nút khóa, cho quai túi túi vào và cố định khóa lại, sau đó treo chúng vào tủ quần áo hoặc bất cứ mặt phẳng nào trên tường hay sau cánh cửa. Như vậy vừa tiết kiệm diện tích, vừa không khiến túi xách bị đè bẹp và mất dáng. Sản phẩm có kích thước 87 x 10cm, với ba màu: hồng, trắng và nâu. Giá tham khảo: 100.000 đồng.</div>\r\n\r\n<div style="margin: 0px; padding: 0px; text-align: center;">\r\n<div style="margin: 0px; padding: 0px;"> </div>\r\n\r\n<div style="margin: 0px; padding: 0px;">\r\n<div style="margin: 0px; padding: 0px;"><img alt="" src="http://afamily1.mediacdn.vn/M8N20d5STCm5E9QXKSmE0TPi2bNc59/Image/2016/10/muon-nha-gon-gang-tung-centimet-chac-chan-ban-phai-sam-4-san-pham-nay_0e6ccd8f0d.jpg" style="margin: 0px; padding: 0px; border: none; outline: none; -webkit-appearance: none; max-width: 100%;" /></div>\r\n\r\n<div style="margin: 0px; padding: 0px;"> </div>\r\n\r\n<div style="margin: 0px; padding: 0px;"><img alt="" src="http://afamily1.mediacdn.vn/M8N20d5STCm5E9QXKSmE0TPi2bNc59/Image/2016/10/muon-nha-gon-gang-tung-centimet-chac-chan-ban-phai-sam-4-san-pham-nay_b48c4985be.jpg" style="margin: 0px; padding: 0px; border: none; outline: none; -webkit-appearance: none; max-width: 100%;" /></div>\r\n\r\n<div style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-style: italic;">Chiếc dây với 6 chiếc móc treo ở cả hai mặt giúp bạn tha hồ lưu trữ túi xách.</span></div>\r\n\r\n<div style="margin: 0px; padding: 0px;"> </div>\r\n\r\n<div style="margin: 0px; padding: 0px;"><img alt="" src="http://afamily1.mediacdn.vn/M8N20d5STCm5E9QXKSmE0TPi2bNc59/Image/2016/10/muon-nha-gon-gang-tung-centimet-chac-chan-ban-phai-sam-4-san-pham-nay_e3629de422.jpg" style="margin: 0px; padding: 0px; border: none; outline: none; -webkit-appearance: none; max-width: 100%;" /></div>\r\n\r\n<div style="margin: 0px; padding: 0px;"> </div>\r\n\r\n<div style="margin: 0px; padding: 0px;"><img alt="" src="http://afamily1.mediacdn.vn/M8N20d5STCm5E9QXKSmE0TPi2bNc59/Image/2016/10/muon-nha-gon-gang-tung-centimet-chac-chan-ban-phai-sam-4-san-pham-nay_917c67b29d.jpg" style="margin: 0px; padding: 0px; border: none; outline: none; -webkit-appearance: none; max-width: 100%;" /></div>\r\n</div>\r\n</div>\r\n</div>\r\n', '', '', '', '', '', 1, 1, 1475721766, 0, 0),
(4, 1, 2, 1, 0, 'tinhthanh', 0, 0, '', '', '', 'Đường Huỳnh Thúc Kháng', '', 'duong-huynh-thuc-khang', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', 1, 1, 1475735348, 0, 0),
(5, 0, 0, 0, 0, 'loaidat', 0, 0, '', '', '', 'Đất thổ cư', '', 'dat-tho-cu', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', 1, 1, 1475735488, 0, 0),
(6, 0, 0, 0, 0, 'loaidat', 0, 0, '', '', '', 'Đất nền', '', 'dat-nen', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', 1, 1, 1475735495, 0, 0),
(7, 0, 0, 0, 0, 'loaidat', 0, 0, '', '', '', 'Đất canh tác', '', 'dat-canh-tac', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', 1, 1, 1475735502, 0, 0),
(8, 3, 2, 2, 0, 'tinhthanh', 0, 0, '', '', '', 'Đường Nam Kì Khởi Nghĩa', '', 'duong-nam-ki-khoi-nghia', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', 1, 1, 1475735866, 1475735885, 0),
(9, 0, 0, 0, 0, 'tinvideo', 0, 0, '', 'a1-4912.png', 'a1-4912_165x140.png', 'CHÚ Ý!!! Villa phố cao cấp Bùi Quang Là Gò Vấp', '', 'chu-y-villa-pho-cao-cap-bui-quang-la-go-vap', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 'https://www.youtube.com/watch?v=0yW7w8F2TVA', '<p>5.1 tỷ VND</p>\r\n\r\n<p>Quận Gò Vấp</p>\r\n\r\n<p>Tp.Hồ Chí Minh</p>\r\n', '', '', '', '', '', 3, 1, 1475805051, 0, 0),
(10, 0, 0, 0, 0, 'tinvideo', 0, 0, '', 'h2-3361.png', 'h2-3361_165x140.png', 'Bán nhà đẹp TT P.7 Q.8 7,3mx30.8m', '', 'ban-nha-dep-tt-p7-q8-73mx308m', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 'https://www.youtube.com/watch?v=_JEQ_rKiPkI', '<p>15 tỷ VND</p>\r\n\r\n<p>Quận 8</p>\r\n\r\n<p>TP.Hồ Chí Minh</p>\r\n', '', '', '', '', '', 2, 1, 1475811203, 0, 0),
(11, 0, 0, 0, 0, 'tinvideo', 0, 0, '', 'qc-7364.png', 'qc-7364_170x295.png', 'Liên hệ quảng cáo', '', 'lien-he-quang-cao', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', 4, 1, 1475811258, 0, 0),
(12, 0, 0, 0, 0, 'tinvideo', 0, 0, '', 'qc-4166.png', 'qc-4166_170x295.png', 'Liên hệ quảng cáo', '', 'lien-he-quang-cao', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', 1, 1, 1475811304, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `table_baiviet_cat`
--

CREATE TABLE IF NOT EXISTS `table_baiviet_cat` (
`id` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table_baiviet_cat`
--

INSERT INTO `table_baiviet_cat` (`id`, `id_list`, `type`, `ten_vi`, `ten_en`, `tenkhongdau`, `mota`, `title`, `keywords`, `description`, `photo`, `thumb`, `stt`, `hienthi`, `ngaytao`, `ngaysua`) VALUES
(1, 2, 'tinhthanh', 'Quận 1', '', 'quan-1', '', '', '', '', '', '', 1, 1, 1475735268, 0),
(2, 3, 'tinhthanh', 'Bến lức', '', 'ben-luc', '', '', '', '', '', '', 1, 1, 1475735783, 0),
(3, 2, 'tinhthanh', 'Quận 3', '', 'quan-3', '', '', '', '', '', '', 1, 1, 1475735828, 0);

-- --------------------------------------------------------

--
-- Structure de la table `table_baiviet_item`
--

CREATE TABLE IF NOT EXISTS `table_baiviet_item` (
`id` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `id_cat` int(10) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table_baiviet_item`
--

INSERT INTO `table_baiviet_item` (`id`, `id_list`, `id_cat`, `type`, `ten_vi`, `ten_en`, `tenkhongdau`, `mota`, `title`, `keywords`, `description`, `photo`, `thumb`, `stt`, `hienthi`, `ngaytao`, `ngaysua`) VALUES
(1, 2, 1, 'tinhthanh', 'Phường Bến Thành', '', 'phuong-ben-thanh', '', '', '', '', '', '', 1, 1, 1475735284, 0),
(2, 2, 3, 'tinhthanh', 'Phường 6', '', 'phuong-6', '', '', '', '', '', '', 1, 1, 1475735848, 1475735878);

-- --------------------------------------------------------

--
-- Structure de la table `table_baiviet_list`
--

CREATE TABLE IF NOT EXISTS `table_baiviet_list` (
`id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `name_vi` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `quangcao` varchar(255) NOT NULL,
  `quangcao_thumb` varchar(255) NOT NULL,
  `links` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table_baiviet_list`
--

INSERT INTO `table_baiviet_list` (`id`, `type`, `ten_vi`, `ten_en`, `name_vi`, `name_en`, `tenkhongdau`, `quangcao`, `quangcao_thumb`, `links`, `title`, `keywords`, `description`, `photo`, `thumb`, `stt`, `hienthi`, `ngaytao`, `ngaysua`) VALUES
(1, 'dichvu', 'Dịch vụ thiết kế', '', '', '', 'dich-vu-thiet-ke', '', '', '', '', '', '', '', '', 1, 1, 1475724755, 0),
(2, 'tinhthanh', 'Tp. Hồ Chí Minh', '', '', '', 'tp-ho-chi-minh', '', '', '', '', '', '', '', '', 1, 1, 1475735140, 0),
(3, 'tinhthanh', 'Long An', '', '', '', 'long-an', '', '', '', '', '', '', '', '', 1, 1, 1475735773, 0);

-- --------------------------------------------------------

--
-- Structure de la table `table_baiviet_photo`
--

CREATE TABLE IF NOT EXISTS `table_baiviet_photo` (
`id` int(10) unsigned NOT NULL,
  `id_baiviet` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `thumb` varchar(225) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(1024) NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `table_baiviet_sub`
--

CREATE TABLE IF NOT EXISTS `table_baiviet_sub` (
`id` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table_baiviet_sub`
--

INSERT INTO `table_baiviet_sub` (`id`, `id_list`, `id_cat`, `id_item`, `type`, `ten_vi`, `ten_en`, `tenkhongdau`, `mota`, `title`, `keywords`, `description`, `photo`, `thumb`, `stt`, `hienthi`, `ngaytao`, `ngaysua`) VALUES
(1, 2, 1, 1, 'tinhthanh', 'Đường Huỳnh Thúc Kháng', '', 'duong-huynh-thuc-khang', '', '', '', '', '', '', 1, 1, 1475737536, 0),
(2, 2, 3, 2, 'tinhthanh', 'Đường Nam Kì Khởi Nghĩa', '', 'duong-nam-ki-khoi-nghia', '', '', '', '', '', '', 1, 1, 1475737621, 0);

-- --------------------------------------------------------

--
-- Structure de la table `table_bgweb`
--

CREATE TABLE IF NOT EXISTS `table_bgweb` (
`id` int(10) unsigned NOT NULL,
  `re_peat` varchar(20) NOT NULL,
  `tren` varchar(20) NOT NULL,
  `trai` varchar(20) NOT NULL,
  `fix_bg` varchar(20) NOT NULL,
  `mauneen` varchar(20) NOT NULL,
  `type` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL DEFAULT '0',
  `ngaysua` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table_bgweb`
--

INSERT INTO `table_bgweb` (`id`, `re_peat`, `tren`, `trai`, `fix_bg`, `mauneen`, `type`, `photo`, `stt`, `hienthi`, `ngaytao`, `ngaysua`) VALUES
(4, 'repeat-y', 'top', 'center', '', '#ffffff', 'bgweb', 'bg-4582.png', 1, 1, 1225497589, 1461119460),
(6, 'repeat-x', 'top', 'center', 'fixed', '#ffffff', '', '', 1, 1, 1324275746, 1324356155),
(7, 'no-repeat', '', '', '', '', 'bgfooter', '', 1, 1, 1474963470, 1474963478),
(8, 'no-repeat', '', '', '', '', 'bgheader', 'bgbanner-6072.png', 1, 1, 1474963762, 1474963765);

-- --------------------------------------------------------

--
-- Structure de la table `table_booking`
--

CREATE TABLE IF NOT EXISTS `table_booking` (
`id` int(11) NOT NULL,
  `ngaydi` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `sotreem` int(10) unsigned NOT NULL,
  `quoctich` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `loaiphong` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `sophong` int(10) NOT NULL,
  `fax` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `diachi` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `noidung` text CHARACTER SET utf8 NOT NULL,
  `ngayden` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `thoigian` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `songuoi` int(11) NOT NULL,
  `ten` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `email` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `dienthoai` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `ngaytao` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `trangthai` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `ghichu` text CHARACTER SET utf8 NOT NULL,
  `view` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `table_booking`
--

INSERT INTO `table_booking` (`id`, `ngaydi`, `sotreem`, `quoctich`, `loaiphong`, `sophong`, `fax`, `diachi`, `noidung`, `ngayden`, `thoigian`, `songuoi`, `ten`, `email`, `dienthoai`, `ngaytao`, `trangthai`, `ghichu`, `view`) VALUES
(1, '', 0, '', '', 0, '', '', 'Cần tư vấn xây dựng nhà trong hẻm nhỏ', '', '', 0, 'Diệu Anh - 0123456789', 'dieuanh.nina@gmail.com', '', '1475658376', '', '', 0),
(2, '', 0, '', '', 0, '', '', 'Tư vấn gấp', '', '', 0, 'Diệu Anh - 0123456789', 'dieuanh.nina@gmail.com', '', '1475658497', '', '', 0),
(3, '', 0, '', '', 0, '', '', 'CẦN MUA NHÀ quận nhất hoặc liền kề quận nhất', '', '', 0, 'Diệu Anh - 0123456789', 'dieuanh.nina@gmail.com', '', '1475659648', '', '', 0),
(4, '', 0, '', '', 0, '', '', 'CẦN MUA GẤP CĂN HỘ CHUNG CƯ CAO CẤP QUẬN 1', '', '', 0, 'abc  - 0123456789', 'example@gmail.com', '', '1475830174', '', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `table_chuyenkhoan`
--

CREATE TABLE IF NOT EXISTS `table_chuyenkhoan` (
`id` int(10) unsigned NOT NULL,
  `noibat` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `thumb` varchar(225) NOT NULL,
  `ten_vi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `mota_vi` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `mota_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `luotxem` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table_chuyenkhoan`
--

INSERT INTO `table_chuyenkhoan` (`id`, `noibat`, `type`, `photo`, `thumb`, `ten_vi`, `tenkhongdau`, `title`, `keywords`, `description`, `mota_vi`, `noidung_vi`, `ten_en`, `mota_en`, `noidung_en`, `stt`, `hienthi`, `ngaytao`, `ngaysua`, `luotxem`) VALUES
(1, 0, 'tintuc', 'polarloop-5198.jpg', 'polarloop-5198_295x195.jpg', 'Angela Phương Trinh khoe sắc với váy họa tiết trái tim', 'angela-phuong-trinh-khoe-sac-voi-vay-hoa-tiet-trai-tim', 'Angela Phương Trinh khoe sắc với váy họa tiết trái tim', 'Angela Phương Trinh khoe sắc với váy họa tiết trái tim', 'Angela Phương Trinh khoe sắc với váy họa tiết trái tim ', 'Nữ diễn viên mặc thiết kế của Đỗ Mạnh Cường trong bộ sưu tập Thu Đông 2015 mang tên "Love" khi tới một sự kiện.', '<div class="clear">&nbsp;</div>\r\n\r\n<div class="item_slide_show" style="width: 75.7576%;">\r\n<div class="block_thumb_slide_show"><img alt="" class="left" css="" data-component-caption="&lt;p&gt;\r\n	Lần đầu hợp tác, nhà thiết kế đã ấn tượng với dáng vẻ và thần thái của Angela Phương Trinh khi mặc trang phục của anh.&nbsp;&lt;/p&gt;" data-reference-id="23045148" http:="" icons="" id="vne_slide_image_1" images="" js="" responsive="" slideshow="" src="http://c1.f12.img.vnecdn.net/2015/10/08/DSC-1038-2-1444323381_660x0.jpg" st.f1.vnecdn.net="" utils="" /> <a class="btn_icon_show_slide_show">&nbsp;</a></div>\r\n\r\n<div class="desc_cation">\r\n<p>Lần đầu hợp t&aacute;c, nh&agrave; thiết kế đ&atilde; ấn tượng với d&aacute;ng vẻ v&agrave; thần th&aacute;i của Angela Phương Trinh khi mặc trang phục của anh.&nbsp;</p>\r\n</div>\r\n\r\n<div class="clear">&nbsp;</div>\r\n</div>\r\n\r\n<div class="item_slide_show" style="width: 75.7576%;">\r\n<div class="block_thumb_slide_show"><img alt="" class="left" css="" data-component-caption="&lt;p&gt;\r\n	Kiểu váy có chất liệu vải bóng, in họa tiết tim đỏ, phom dáng ôm cơ thể.&lt;/p&gt;" data-reference-id="23045149" http:="" icons="" id="vne_slide_image_2" images="" js="" responsive="" slideshow="" src="http://c1.f12.img.vnecdn.net/2015/10/08/DSC-0818-2-1444323388_660x0.jpg" st.f1.vnecdn.net="" utils="" /> <a class="btn_icon_show_slide_show">&nbsp;</a></div>\r\n\r\n<div class="desc_cation">\r\n<p>Kiểu v&aacute;y c&oacute; chất liệu vải b&oacute;ng, in họa tiết tim đỏ, phom d&aacute;ng &ocirc;m cơ thể.</p>\r\n</div>\r\n\r\n<div class="clear">&nbsp;</div>\r\n</div>\r\n\r\n<div class="item_slide_show" style="width: 75.7576%;">\r\n<div class="block_thumb_slide_show"><img alt="" class="left" css="" data-component-caption="&lt;p&gt;\r\n	Người đẹp sinh năm 1995 chọn giày có màu sắc hài hòa với họa tiết váy.&lt;/p&gt;" data-reference-id="23045150" http:="" icons="" id="vne_slide_image_3" images="" js="" responsive="" slideshow="" src="http://c1.f10.img.vnecdn.net/2015/10/08/DSC-0822-2-1444323395_660x0.jpg" st.f1.vnecdn.net="" utils="" /> <a class="btn_icon_show_slide_show">&nbsp;</a></div>\r\n\r\n<div class="desc_cation">\r\n<p>Người đẹp sinh năm 1995 chọn gi&agrave;y c&oacute; m&agrave;u sắc h&agrave;i h&ograve;a với họa tiết v&aacute;y.</p>\r\n</div>\r\n\r\n<div class="clear">&nbsp;</div>\r\n</div>\r\n\r\n<div class="item_slide_show" style="width: 75.7576%;">\r\n<div class="block_thumb_slide_show"><img alt="" class="left" css="" data-component-caption="&lt;p&gt;\r\n	Đỗ Mạnh Cường (phải) đến dự buổi họp báo công bố phim để ủng hộ vai diễn mới của Phương Trinh.&lt;/p&gt;" data-reference-id="23045151" http:="" icons="" id="vne_slide_image_4" images="" js="" responsive="" slideshow="" src="http://c1.f10.img.vnecdn.net/2015/10/08/DSC-0923-2-1444323412_660x0.jpg" st.f1.vnecdn.net="" utils="" /> <a class="btn_icon_show_slide_show">&nbsp;</a></div>\r\n\r\n<div class="desc_cation">\r\n<p>Đỗ Mạnh Cường (phải) đến dự buổi họp b&aacute;o c&ocirc;ng bố phim để ủng hộ vai diễn mới của Phương Trinh.</p>\r\n</div>\r\n\r\n<div class="clear">&nbsp;</div>\r\n</div>\r\n\r\n<div class="item_slide_show" style="width: 100%;">\r\n<div class="block_thumb_slide_show"><img a="" alt="" class="left" css="" data-component-caption="&lt;p&gt;\r\n	NSND Hoàng Dũng (trái) tham gia một vai trong phim. Đây là dự án phim chiếu rạp tiếp theo của Angela Phương Trinh từ sau tác phẩm " href="http://giaitri.vnexpress.net/tin-tuc/phim/sau-man-anh/angela-phuong-trinh-ngay-tho-trong-phim-biet-chet-lien-2453815.html" src="null" target="_blank" />Biết chết liền&quot; của đạo diễn L&ecirc; Bảo Trung năm 2013.\r\n<p>&nbsp;</p>\r\n&quot; data-reference-id=&quot;23045152&quot; http:=&quot;&quot; icons=&quot;&quot; id=&quot;vne_slide_image_5&quot; images=&quot;&quot; js=&quot;&quot; responsive=&quot;&quot; slideshow=&quot;&quot; src=&quot;http://c1.f9.img.vnecdn.net/2015/10/08/DSC-1143-2-1444323457_660x0.jpg&quot; st.f1.vnecdn.net=&quot;&quot; utils=&quot;&quot; /&gt; <a class="btn_icon_show_slide_show">&nbsp;</a></div>\r\n\r\n<div class="desc_cation">\r\n<p>NSND Ho&agrave;ng Dũng (tr&aacute;i) tham gia một vai trong phim. Đ&acirc;y l&agrave; dự &aacute;n phim chiếu rạp tiếp theo của Angela Phương Trinh từ sau t&aacute;c phẩm &quot;<a href="http://giaitri.vnexpress.net/tin-tuc/phim/sau-man-anh/angela-phuong-trinh-ngay-tho-trong-phim-biet-chet-lien-2453815.html" target="_blank">Biết chết liền</a>&quot; của đạo diễn L&ecirc; Bảo Trung năm 2013.</p>\r\n</div>\r\n\r\n<div class="clear">&nbsp;</div>\r\n</div>\r\n\r\n<div class="item_slide_show" style="width: 100%;">\r\n<div class="block_thumb_slide_show"><img alt="" class="left" css="" data-component-caption="&lt;p&gt;\r\n	Đỗ Mạnh Cường bên người mẫu Lê Xuân Tiền (phải).&lt;/p&gt;" data-reference-id="23045153" http:="" icons="" id="vne_slide_image_6" images="" js="" responsive="" slideshow="" src="http://c1.f10.img.vnecdn.net/2015/10/08/DSC-0995-2-1444323469_660x0.jpg" st.f1.vnecdn.net="" utils="" /> <a class="btn_icon_show_slide_show">&nbsp;</a></div>\r\n\r\n<div class="desc_cation">\r\n<p>Đỗ Mạnh Cường b&ecirc;n người mẫu L&ecirc; Xu&acirc;n Tiền (phải).</p>\r\n</div>\r\n\r\n<div class="clear">&nbsp;</div>\r\n</div>\r\n\r\n<div class="item_slide_show" style="width: 100%;">\r\n<div class="block_thumb_slide_show"><img alt="" class="left" css="" data-component-caption="&lt;p&gt;\r\n	Diễn viên Việt Anh bên diễn viên Trần Xuân Tiến. Việt Anh giữ vai trò nhà sản xuất kiêm đồng biên kịch và đạo diễn trong dự án phim.&lt;/p&gt;" data-reference-id="23045154" http:="" icons="" id="vne_slide_image_7" images="" js="" responsive="" slideshow="" src="http://c1.f9.img.vnecdn.net/2015/10/08/DSC-0863-2-1444323476_660x0.jpg" st.f1.vnecdn.net="" utils="" /> <a class="btn_icon_show_slide_show">&nbsp;</a></div>\r\n\r\n<div class="desc_cation">\r\n<p>Diễn vi&ecirc;n Việt Anh b&ecirc;n diễn vi&ecirc;n Trần Xu&acirc;n Tiến. Việt Anh giữ vai tr&ograve; nh&agrave; sản xuất ki&ecirc;m đồng bi&ecirc;n kịch v&agrave; đạo diễn trong dự &aacute;n phim.</p>\r\n</div>\r\n\r\n<div class="clear">&nbsp;</div>\r\n</div>\r\n\r\n<div class="item_slide_show" style="width: 75.7576%;">\r\n<div class="block_thumb_slide_show"><img alt="" class="left" css="" data-component-caption="&lt;p&gt;\r\n	Hoa hậu Đại Dương Đặng Thu Thảo tham gia một vai trong phim.&lt;/p&gt;" data-reference-id="23045155" http:="" icons="" id="vne_slide_image_8" images="" js="" responsive="" slideshow="" src="http://c1.f9.img.vnecdn.net/2015/10/08/DSC-0706-2-1444323481_660x0.jpg" st.f1.vnecdn.net="" utils="" /> <a class="btn_icon_show_slide_show">&nbsp;</a></div>\r\n\r\n<div class="desc_cation">\r\n<p>Hoa hậu Đại Dương Đặng Thu Thảo tham gia một vai trong phim.</p>\r\n</div>\r\n\r\n<div class="clear">&nbsp;</div>\r\n</div>\r\n\r\n<div class="item_slide_show" style="width: 75.7576%;">\r\n<div class="block_thumb_slide_show"><img alt="" class="left" css="" data-component-caption="&lt;p&gt;\r\n	Hoa khôi Nguyễn Thị Lệ Nam Em tham dự sự kiện với bộ váy ôm gợi cảm. Ảnh: &lt;em&gt;Maison De Bil&lt;/em&gt;&lt;/p&gt;" data-reference-id="23045156" http:="" icons="" id="vne_slide_image_9" images="" js="" responsive="" slideshow="" src="http://c1.f12.img.vnecdn.net/2015/10/09/IMG-3550-1444325181_660x0.jpg" st.f1.vnecdn.net="" utils="" /> <a class="btn_icon_show_slide_show">&nbsp;</a></div>\r\n\r\n<div class="desc_cation">\r\n<p>Hoa kh&ocirc;i Nguyễn Thị Lệ Nam Em tham dự sự kiện với bộ v&aacute;y &ocirc;m gợi cảm. Ảnh: <em>Maison De Bil</em></p>\r\n</div>\r\n\r\n<div class="clear">&nbsp;</div>\r\n</div>\r\n', '', '', '', 1, 1, 1444356666, 1444875020, 0),
(2, 0, 'dichvu', '-8402.jpg', '-8402_295x195.jpg', 'Dịch vụ làm đẹp', 'dich-vu-lam-dep', 'Angela Phương Trinh khi mặc trang phục của anh', 'Angela Phương Trinh khi mặc trang phục của anh', 'Lần đầu hợp tác, nhà thiết kế đã ấn tượng với dáng vẻ và thần thái của Angela Phương Trinh khi mặc trang phục của anh. ', 'Lần đầu hợp tác, nhà thiết kế đã ấn tượng với dáng vẻ và thần thái của Angela Phương Trinh khi mặc trang phục của anh. ', '<div class="clear">&nbsp;</div>\r\n\r\n<div class="item_slide_show" style="width: 75.7576%;">\r\n<div class="block_thumb_slide_show"><img alt="" class="left" data-component-caption="&amp;lt;p&amp;gt;\r\n	Lần đầu hợp tác, nhà thiết kế đã ấn tượng với dáng vẻ và thần thái của Angela Phương Trinh khi mặc trang phục của anh.&nbsp;&amp;lt;/p&amp;gt;" data-reference-id="23045148" id="vne_slide_image_1" src="http://c1.f12.img.vnecdn.net/2015/10/08/DSC-1038-2-1444323381_660x0.jpg" style="cursor: url(&quot;http://st.f1.vnecdn.net/responsive/js/utils/slideshow/css/slideshow/images/icons/zoom_cursor.png&quot;), auto;" /> <a class="btn_icon_show_slide_show">&nbsp;</a></div>\r\n\r\n<div class="desc_cation">\r\n<p>Lần đầu hợp t&aacute;c, nh&agrave; thiết kế đ&atilde; ấn tượng với d&aacute;ng vẻ v&agrave; thần th&aacute;i của Angela Phương Trinh khi mặc trang phục của anh.&nbsp;</p>\r\n</div>\r\n\r\n<div class="clear">&nbsp;</div>\r\n</div>\r\n\r\n<div class="item_slide_show" style="width: 75.7576%;">\r\n<div class="block_thumb_slide_show"><img alt="" class="left" data-component-caption="&amp;lt;p&amp;gt;\r\n	Kiểu váy có chất liệu vải bóng, in họa tiết tim đỏ, phom dáng ôm cơ thể.&amp;lt;/p&amp;gt;" data-reference-id="23045149" id="vne_slide_image_2" src="http://c1.f12.img.vnecdn.net/2015/10/08/DSC-0818-2-1444323388_660x0.jpg" style="cursor: url(&quot;http://st.f1.vnecdn.net/responsive/js/utils/slideshow/css/slideshow/images/icons/zoom_cursor.png&quot;), auto;" /> <a class="btn_icon_show_slide_show">&nbsp;</a></div>\r\n\r\n<div class="desc_cation">\r\n<p>Kiểu v&aacute;y c&oacute; chất liệu vải b&oacute;ng, in họa tiết tim đỏ, phom d&aacute;ng &ocirc;m cơ thể.</p>\r\n</div>\r\n\r\n<div class="clear">&nbsp;</div>\r\n</div>\r\n\r\n<div class="item_slide_show" style="width: 75.7576%;">\r\n<div class="block_thumb_slide_show"><img alt="" class="left" data-component-caption="&amp;lt;p&amp;gt;\r\n	Người đẹp sinh năm 1995 chọn giày có màu sắc hài hòa với họa tiết váy.&amp;lt;/p&amp;gt;" data-reference-id="23045150" id="vne_slide_image_3" src="http://c1.f10.img.vnecdn.net/2015/10/08/DSC-0822-2-1444323395_660x0.jpg" style="cursor: url(&quot;http://st.f1.vnecdn.net/responsive/js/utils/slideshow/css/slideshow/images/icons/zoom_cursor.png&quot;), auto;" /> <a class="btn_icon_show_slide_show">&nbsp;</a></div>\r\n\r\n<div class="desc_cation">\r\n<p>Người đẹp sinh năm 1995 chọn gi&agrave;y c&oacute; m&agrave;u sắc h&agrave;i h&ograve;a với họa tiết v&aacute;y.</p>\r\n</div>\r\n\r\n<div class="clear">&nbsp;</div>\r\n</div>\r\n\r\n<div class="item_slide_show" style="width: 75.7576%;">\r\n<div class="block_thumb_slide_show"><img alt="" class="left" data-component-caption="&amp;lt;p&amp;gt;\r\n	Đỗ Mạnh Cường (phải) đến dự buổi họp báo công bố phim để ủng hộ vai diễn mới của Phương Trinh.&amp;lt;/p&amp;gt;" data-reference-id="23045151" id="vne_slide_image_4" src="http://c1.f10.img.vnecdn.net/2015/10/08/DSC-0923-2-1444323412_660x0.jpg" style="cursor: url(&quot;http://st.f1.vnecdn.net/responsive/js/utils/slideshow/css/slideshow/images/icons/zoom_cursor.png&quot;), auto;" /> <a class="btn_icon_show_slide_show">&nbsp;</a></div>\r\n\r\n<div class="desc_cation">\r\n<p>Đỗ Mạnh Cường (phải) đến dự buổi họp b&aacute;o c&ocirc;ng bố phim để ủng hộ vai diễn mới của Phương Trinh.</p>\r\n</div>\r\n\r\n<div class="clear">&nbsp;</div>\r\n</div>\r\n\r\n<div class="item_slide_show" style="width: 100%;">\r\n<div class="block_thumb_slide_show"><img alt="" class="left" data-component-caption="&amp;lt;p&amp;gt;\r\n	NSND Hoàng Dũng (trái) tham gia một vai trong phim. Đây là dự án phim chiếu rạp tiếp theo của Angela Phương Trinh từ sau tác phẩm &amp;quot;&amp;lt;a href=&amp;quot;http://giaitri.vnexpress.net/tin-tuc/phim/sau-man-anh/angela-phuong-trinh-ngay-tho-trong-phim-biet-chet-lien-2453815.html&amp;quot; target=&amp;quot;_blank&amp;quot;&amp;gt;Biết chết liền&amp;lt;/a&amp;gt;&amp;quot; của đạo diễn Lê Bảo Trung năm 2013.&amp;lt;/p&amp;gt;" data-reference-id="23045152" id="vne_slide_image_5" src="http://c1.f9.img.vnecdn.net/2015/10/08/DSC-1143-2-1444323457_660x0.jpg" style="cursor: url(&quot;http://st.f1.vnecdn.net/responsive/js/utils/slideshow/css/slideshow/images/icons/zoom_cursor.png&quot;), auto;" /> <a class="btn_icon_show_slide_show">&nbsp;</a></div>\r\n\r\n<div class="desc_cation">\r\n<p>NSND Ho&agrave;ng Dũng (tr&aacute;i) tham gia một vai trong phim. Đ&acirc;y l&agrave; dự &aacute;n phim chiếu rạp tiếp theo của Angela Phương Trinh từ sau t&aacute;c phẩm &quot;<a href="http://giaitri.vnexpress.net/tin-tuc/phim/sau-man-anh/angela-phuong-trinh-ngay-tho-trong-phim-biet-chet-lien-2453815.html" target="_blank">Biết chết liền</a>&quot; của đạo diễn L&ecirc; Bảo Trung năm 2013.</p>\r\n</div>\r\n\r\n<div class="clear">&nbsp;</div>\r\n</div>\r\n\r\n<div class="item_slide_show" style="width: 100%;">\r\n<div class="block_thumb_slide_show"><img alt="" class="left" data-component-caption="&amp;lt;p&amp;gt;\r\n	Đỗ Mạnh Cường bên người mẫu Lê Xuân Tiền (phải).&amp;lt;/p&amp;gt;" data-reference-id="23045153" id="vne_slide_image_6" src="http://c1.f10.img.vnecdn.net/2015/10/08/DSC-0995-2-1444323469_660x0.jpg" style="cursor: url(&quot;http://st.f1.vnecdn.net/responsive/js/utils/slideshow/css/slideshow/images/icons/zoom_cursor.png&quot;), auto;" /> <a class="btn_icon_show_slide_show">&nbsp;</a></div>\r\n\r\n<div class="desc_cation">\r\n<p>Đỗ Mạnh Cường b&ecirc;n người mẫu L&ecirc; Xu&acirc;n Tiền (phải).</p>\r\n</div>\r\n\r\n<div class="clear">&nbsp;</div>\r\n</div>\r\n\r\n<div class="item_slide_show" style="width: 100%;">\r\n<div class="block_thumb_slide_show"><img alt="" class="left" data-component-caption="&amp;lt;p&amp;gt;\r\n	Diễn viên Việt Anh bên diễn viên Trần Xuân Tiến. Việt Anh giữ vai trò nhà sản xuất kiêm đồng biên kịch và đạo diễn trong dự án phim.&amp;lt;/p&amp;gt;" data-reference-id="23045154" id="vne_slide_image_7" src="http://c1.f9.img.vnecdn.net/2015/10/08/DSC-0863-2-1444323476_660x0.jpg" style="cursor: url(&quot;http://st.f1.vnecdn.net/responsive/js/utils/slideshow/css/slideshow/images/icons/zoom_cursor.png&quot;), auto;" /> <a class="btn_icon_show_slide_show">&nbsp;</a></div>\r\n\r\n<div class="desc_cation">\r\n<p>Diễn vi&ecirc;n Việt Anh b&ecirc;n diễn vi&ecirc;n Trần Xu&acirc;n Tiến. Việt Anh giữ vai tr&ograve; nh&agrave; sản xuất ki&ecirc;m đồng bi&ecirc;n kịch v&agrave; đạo diễn trong dự &aacute;n phim.</p>\r\n</div>\r\n\r\n<div class="clear">&nbsp;</div>\r\n</div>\r\n\r\n<div class="item_slide_show" style="width: 75.7576%;">\r\n<div class="block_thumb_slide_show"><img alt="" class="left" data-component-caption="&amp;lt;p&amp;gt;\r\n	Hoa hậu Đại Dương Đặng Thu Thảo tham gia một vai trong phim.&amp;lt;/p&amp;gt;" data-reference-id="23045155" id="vne_slide_image_8" src="http://c1.f9.img.vnecdn.net/2015/10/08/DSC-0706-2-1444323481_660x0.jpg" style="cursor: url(&quot;http://st.f1.vnecdn.net/responsive/js/utils/slideshow/css/slideshow/images/icons/zoom_cursor.png&quot;), auto;" /> <a class="btn_icon_show_slide_show">&nbsp;</a></div>\r\n\r\n<div class="desc_cation">\r\n<p>Hoa hậu Đại Dương Đặng Thu Thảo tham gia một vai trong phim.</p>\r\n</div>\r\n\r\n<div class="clear">&nbsp;</div>\r\n</div>\r\n\r\n<div class="item_slide_show" style="width: 75.7576%;">\r\n<div class="block_thumb_slide_show"><img alt="" class="left" data-component-caption="&amp;lt;p&amp;gt;\r\n	Hoa khôi Nguyễn Thị Lệ Nam Em tham dự sự kiện với bộ váy ôm gợi cảm. Ảnh: &amp;lt;em&amp;gt;Maison De Bil&amp;lt;/em&amp;gt;&amp;lt;/p&amp;gt;" data-reference-id="23045156" id="vne_slide_image_9" src="http://c1.f12.img.vnecdn.net/2015/10/09/IMG-3550-1444325181_660x0.jpg" style="cursor: url(&quot;http://st.f1.vnecdn.net/responsive/js/utils/slideshow/css/slideshow/images/icons/zoom_cursor.png&quot;), auto;" /> <a class="btn_icon_show_slide_show">&nbsp;</a></div>\r\n\r\n<div class="desc_cation">\r\n<p>Hoa kh&ocirc;i Nguyễn Thị Lệ Nam Em tham dự sự kiện với bộ v&aacute;y &ocirc;m gợi cảm. Ảnh: <em>Maison De Bil</em></p>\r\n</div>\r\n\r\n<div class="clear">&nbsp;</div>\r\n</div>\r\n', '', '', '', 1, 1, 1444356998, 0, 0),
(3, 0, 'banner', '', '', '', '', '', '', '', '', '', '', '', '', 1, 1, 1444383645, 0, 0),
(4, 0, 'tintuc', '251861-3183.png', '251861-3183_295x195.png', 'Kịch bản đối mặt Mỹ - Trung gần đảo nhân tạo ở Biển Đông', 'kich-ban-doi-mat-my-trung-gan-dao-nhan-tao-o-bien-dong', 'Kịch bản đối mặt Mỹ - Trung gần đảo nhân tạo ở Biển Đông', 'Kịch bản đối mặt Mỹ - Trung gần đảo nhân tạo ở Biển Đông', 'Kịch bản đối mặt Mỹ - Trung gần đảo nhân tạo ở Biển Đông', 'Khi tàu của Mỹ vào phạm vi 12 hải lý quanh các đảo nhân tạo ở Trường Sa, Trung Quốc có thể sẽ cảnh báo bằng lời và sau đó điều tàu chiến và máy bay không người lái ngăn cản, đó là một trong các kịch bản dự đoán.', '<p class="Normal">Mỹ đ&atilde; th&ocirc;ng b&aacute;o cho c&aacute;c đồng minh như Philippines v&agrave; Australia về kế hoạch điều t&agrave;u tuần tra đến gần c&aacute;c b&atilde;i đ&aacute; ngầm ở Trường Sa, nơi Trung Quốc cải tạo phi ph&aacute;p th&agrave;nh đảo nh&acirc;n tạo. Bắc Kinh phản ứng rất tức giận, cho rằng Mỹ v&agrave; đồng minh &quot;đổ dầu v&agrave;o lửa&quot; tranh chấp khu vực, v&agrave; &quot;kh&ocirc;ng bao giờ cho ph&eacute;p bất cứ nước n&agrave;o vi phạm&quot; v&ugrave;ng m&agrave; họ tự cho l&agrave; thuộc chủ quyền của m&igrave;nh.</p>\r\n\r\n<p class="Normal">Theo đ&aacute;nh gi&aacute; của giới quan s&aacute;t, chuyện điều t&agrave;u hiện nay kh&ocirc;ng phải l&agrave; c&oacute; hay kh&ocirc;ng nữa, m&agrave; l&agrave; khi n&agrave;o, như thế n&agrave;o v&agrave; mức độ nghi&ecirc;m trọng của hệ quả đến đ&acirc;u.</p>\r\n\r\n<p class="subtitle">Tự do H&agrave;ng hải</p>\r\n\r\n<p class="Normal">Hoạt động đưa t&agrave;u đến gần c&aacute;c b&atilde;i đ&aacute;, khi diễn ra, sẽ được Mỹ thực hiện theo <span>Chương tr&igrave;nh Tự do H&agrave;ng hải của hải qu&acirc;n Mỹ. N&oacute; được h&igrave;nh th&agrave;nh từ năm 1979, dưới thời Tổng thống Jimmy Carter, nhằm đảm bảo quyền tự do đi lại tr&ecirc;n biển, tr&ecirc;n kh&ocirc;ng theo c&aacute;c điều khoản của C&ocirc;ng ước Li&ecirc;n Hợp Quốc về Luật Biển (UNCLOS). </span></p>\r\n\r\n<p class="Normal">Mục ti&ecirc;u của FONOPS l&agrave; th&aacute;ch thức những &quot;tuy&ecirc;n bố qu&aacute; đ&aacute;ng&quot; m&agrave; c&aacute;c quốc gia đưa ra về hải phận v&agrave; kh&ocirc;ng phận kh&ocirc;ng tu&acirc;n theo quy định của UNCLOS, chứ kh&ocirc;ng h&agrave;m &yacute; nghĩa c&ocirc;ng nhận hay b&aacute;c bỏ chủ quyền của b&ecirc;n n&agrave;o.</p>\r\n\r\n<table align="center" border="0" cellpadding="3" cellspacing="0" class="tplCaption" style="width: 100%;">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="kich-ban-doi-mat-my-trung-gan-dao-nhan-tao-o-bien-dong-1" data-natural-width="500" data-pwidth="470.4" data-width="500" src="http://m.f29.img.vnecdn.net/2015/10/14/2-3719-1444814421.jpg" style="width: 100%;" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p class="Image">Một đảo nh&acirc;n tạo Trung Quốc x&acirc;y dựng phi ph&aacute;p tr&ecirc;n Biển Đ&ocirc;ng. Ảnh: <em>Telegraph</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p class="Normal">Trong giai đoạn 2013-2014, hải qu&acirc;n Mỹ đ&atilde; thực hiện tổng cộng 54 FONOPS, trong đ&oacute; chủ yếu l&agrave; thuộc khu vực phụ tr&aacute;ch của Bộ Tư lệnh Th&aacute;i B&igrave;nh Dương. Chỉ huy cơ quan n&agrave;y cho biết họ đ&atilde; sẵn s&agrave;ng thực hiện kế hoạch tuần tra ở Biển Đ&ocirc;ng sau khi c&oacute; lệnh.</p>\r\n\r\n<p class="subtitle">Khi n&agrave;o v&agrave; ở đ&acirc;u</p>\r\n\r\n<p class="Normal">Trang News10 của Australia dẫn lời c&aacute;c chuy&ecirc;n gia ph&acirc;n t&iacute;ch cho biết quyết định đ&atilde; được đưa ra, v&agrave; việc thực hiện sẽ diễn ra cuối tuần n&agrave;y hoặc v&agrave;o tuần tới. Dự đo&aacute;n n&agrave;y được đưa ra sau cuộc gặp của c&aacute;c bộ trưởng ngoại giao v&agrave; quốc ph&ograve;ng Mỹ - Australia ở Boston.</p>\r\n\r\n<p class="Normal">Trước đ&oacute;, tờ Financial Times dẫn nguồn qu&acirc;n sự Mỹ cho biết việc thực hiện tuần tra s&aacute;t đảo nh&acirc;n tạo c&oacute; thể diễn ra &quot;trong những ng&agrave;y tới&quot;. Theo SCMP, đề xuất kế hoạch n&agrave;y đ&atilde; được tr&igrave;nh l&ecirc;n ch&iacute;nh phủ Mỹ từ m&ugrave;a h&egrave;, nhưng quyết định được tr&igrave; ho&atilde;n cho đến sau chuyến thăm của Chủ tịch Trung Quốc Tập Cận B&igrave;nh th&aacute;ng 9 vừa rồi.</p>\r\n\r\n<p class="Normal">Chuy&ecirc;n gia Greg Poling, thuộc Chương tr&igrave;nh minh bạch H&agrave;ng hải ch&acirc;u &Aacute; của Viện Chiến lược v&agrave; Quốc tế Mỹ (CSIS) đự do&aacute;n việc tuần tra sẽ &quot;chỉ diễn ra ở c&aacute;c thực thể ch&igrave;m khi thủy triều l&ecirc;n trước khi việc bồi đắp diễn ra, v&agrave; đủ c&aacute;ch xa c&aacute;c đ&aacute; kh&aacute;c để tr&aacute;nh nguy cơ&quot; về ph&aacute;p l&yacute; v&ugrave;ng nước. Như vậy &ocirc;ng cho rằng c&aacute;c t&agrave;u của Mỹ sẽ tiến đến gần b&atilde;i Subi v&agrave; V&agrave;nh Khăn. (C&aacute;c đ&aacute; n&agrave;y đều nằm trong quần đảo Trường Sa thuộc chủ quyền Việt Nam).</p>\r\n\r\n<p class="Normal">C&aacute;c t&agrave;u Mỹ cũng c&oacute; thể sẽ đi gần c&aacute;c thực thể kh&aacute;c trong quần đảo Trường Sa, theo <span>tiến sĩ Mira Rapp-Hooper, th&agrave;nh vi&ecirc;n Chương tr&igrave;nh An ninh ch&acirc;u &Aacute;-Th&aacute;i B&igrave;nh Dương thuộc <span>Trung t&acirc;m An ninh Mỹ Mới (CNAS). Mục đ&iacute;ch của việc n&agrave;y l&agrave; để tỏ ra Mỹ kh&ocirc;ng &quot;thi&ecirc;n vị&quot; bất cứ b&ecirc;n n&agrave;o đang c&oacute; tuy&ecirc;n bố chồng lấn về chủ quyền ở đ&acirc;y. </span></span></p>\r\n\r\n<p class="subtitle"><span><span>Như thế n&agrave;o</span></span></p>\r\n\r\n<p class="Normal"><span><span>C&aacute;c chuy&ecirc;n gia qu&acirc;n sự của Trung Quốc được dự đo&aacute;n sẽ ra cảnh b&aacute;o đối với c&aacute;c t&agrave;u Mỹ, v&agrave; kh&ocirc;ng để xảy ra đụng độ nếu ph&iacute;a Mỹ &quot;kh&ocirc;ng đi qu&aacute; giới hạn&quot;, b&aacute;o Hong Kong dẫn lời giới ph&acirc;n t&iacute;ch dự đo&aacute;n. </span></span></p>\r\n\r\n<p class="Normal"><span><span>&quot;Hải qu&acirc;n Trung Quốc sẽ y&ecirc;u cầu c&aacute;c t&agrave;u Mỹ rời đi bằng c&aacute;ch ra cảnh b&aacute;o miệng&quot;, chuy&ecirc;n gia hải qu&acirc;n </span></span>Ni Lexiong n&oacute;i.</p>\r\n\r\n<p class="Normal">Li Jie, chuy&ecirc;n gia Hải qu&acirc;n l&agrave;m việc ở Bắc Kinh, cho rằng ph&iacute;a Trung Quốc sẽ điều t&agrave;u chiến ngăn chặn t&agrave;u Mỹ, nếu t&agrave;u Mỹ kh&ocirc;ng rời đi sau c&aacute;c cảnh b&aacute;o n&ecirc;u tr&ecirc;n.</p>\r\n\r\n<p class="Normal">Một nguồn tin th&acirc;n cận với qu&acirc;n đội Giải ph&oacute;ng Nh&acirc;n d&acirc;n Trung Quốc tiết lộ rằng Bắc Kinh c&oacute; &quot;c&aacute;c giải ph&aacute;p hiệu quả hơn&quot; cho kịch bản đối mặt ở Trường Sa. &quot;Ch&uacute;ng t&ocirc;i c&oacute; thể d&ugrave;ng m&aacute;y bay kh&ocirc;ng người l&aacute;i, hoặc đơn giản l&agrave; d&ugrave;ng đến Qu&acirc;n đo&agrave;n ph&aacute;o binh số hai&quot;. Qu&acirc;n đo&agrave;n ph&aacute;o 2 l&agrave; t&ecirc;n gọi lực lượng t&ecirc;n lửa chiến lược của Trung Quốc.</p>\r\n\r\n<p class="Normal"><span>B&agrave;y tỏ th&aacute;i độ cứng rắn trước kế hoạch của Mỹ, người ph&aacute;t ng&ocirc;n Bộ Ngoại giao Trung Quốc Hoa Xu&acirc;n Doanh cũng tuy&ecirc;n bố &quot;</span><span>kh&ocirc;ng bao giờ cho ph&eacute;p bất cứ nước n&agrave;o vi phạm l&atilde;nh hải v&agrave; kh&ocirc;ng phận&quot; nước n&agrave;y tự nhận ở Trường Sa.</span></p>\r\n\r\n<p class="Normal"><span>Tuy nhi&ecirc;n, trong một b&agrave;i ph&acirc;n t&iacute;ch đăng tr&ecirc;n website của Trung t&acirc;m An ninh Mỹ Mới (CNAS), tiến sĩ Mira Rapp-Hooper, chỉ ra rằng Trung Quốc sẽ kh&ocirc;ng c&oacute; l&yacute; n&agrave;o để phản ứng mạnh đếnn th&aacute;i qu&aacute; khi Mỹ thực hiện c&aacute;c hoạt động tuần tra trong phạm vi 12 hải l&yacute; quanh những đảo nh&acirc;n tạo phi ph&aacute;p m&agrave; Trung Quốc x&acirc;y dựng tr&aacute;i ph&eacute;p ở Biển Đ&ocirc;ng.</span></p>\r\n\r\n<p class="Normal"><span>Hồi đầu th&aacute;ng 9, năm t&agrave;u chiến của Trung Quốc đ&atilde; đi qua khu vực 12 hải l&yacute; ngo&agrave;i khơi một đảo thuộc quần đảo Aleut tr&ecirc;n biển Bering của Mỹ m&agrave; kh&ocirc;ng hề xin ph&eacute;p nh&agrave; chức tr&aacute;ch Mỹ, với l&yacute; do những con t&agrave;u n&agrave;y đang thực thi quyền &quot;đi qua v&ocirc; hại&quot; theo quy định của UNCLOS. Sẽ l&agrave; &quot;đạo đức giả v&agrave; cả ngạo mạn&quot; nếu Bắc Kinh cho rằng họ c&oacute; quyền đi qua l&atilde;nh hải của Mỹ, trong khi t&agrave;u chiến Mỹ kh&ocirc;ng được ph&eacute;p đi v&agrave;o v&ugrave;ng biển quốc tế gần những đảo họ bồi đắp phi ph&aacute;p.</span> Ngo&agrave;i ra, c&aacute;c đảo nh&acirc;n tạo m&agrave; Trung Quốc đang x&acirc;y, theo UNCLOS, đều kh&ocirc;ng c&oacute; quyền c&oacute; l&atilde;nh hải hay kh&ocirc;ng phận bao quanh.</p>\r\n\r\n<table align="center" border="0" cellpadding="3" cellspacing="0" class="tplCaption" style="width: 100%;">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="kich-ban-doi-mat-my-trung-gan-dao-nhan-tao-o-bien-dong-2" data-natural-width="500" data-pwidth="470.4" data-width="500" src="http://m.f29.img.vnecdn.net/2015/10/14/3-7160-1444814422.jpg" style="width: 100%;" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p class="Image">T&agrave;u chiến Trung Quốc diễn tập ph&oacute;ng t&ecirc;n lửa tr&ecirc;n biển. Ảnh: <em>ChinaMil</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p class="subtitle">Hệ quả</p>\r\n\r\n<p class="Normal">Điều th&uacute;c đẩy ph&iacute;a Mỹ đi đến kế hoạch n&agrave;y, theo Orville Schell, gi&aacute;m đốc Trung t&acirc;m nghi&ecirc;n cứu quan hệ Mỹ - Trung, l&agrave; bởi ch&iacute;nh quyền Obama đ&atilde; hết ki&ecirc;n nhẫn trước th&aacute;i độ &quot;rất &eacute;p buộc, thậm ch&iacute; đ&ocirc;i khi g&acirc;y hấn&quot; của Trung Quốc.</p>\r\n\r\n<p class="Normal">&quot;T&ocirc;i nghĩ rằng Washington c&oacute; lẽ đang dần tiến đến điểm b&ugrave;ng nổ với Bắc Kinh&quot;, Schell nhận x&eacute;t. &quot;T&ocirc;i cho l&agrave; Mỹ đ&atilde; quyết định chơi rắn hơn&quot;.</p>\r\n\r\n<p class="Normal">&quot;Hệ quả của việc n&agrave;y l&agrave; g&igrave;? T&ocirc;i kh&ocirc;ng biết. T&ocirc;i cho rằng c&aacute;c b&ecirc;n đều hiểu cần c&oacute; c&aacute;ch n&agrave;o đ&oacute; sống chung với Trung Quốc. Nhưng c&oacute; thể Washington đang tự hỏi liệu cả qu&aacute; tr&igrave;nh đối thoại d&agrave;i dằng dặc đ&oacute; c&oacute; thực sự mang lại điều g&igrave; hay kh&ocirc;ng&quot;, Schell tiếp.</p>\r\n\r\n<p class="Normal">&quot;Điều t&agrave;u đến ngay sau cuộc gặp thượng đỉnh Obama - Tập&quot;, &ocirc;ng Bill Bishop, chuy&ecirc;n gia về Trung Quốc, n&oacute;i, &quot;l&agrave; một dấu hiệu cho thấy mối quan hệ xấu đi đến mức n&agrave;o. Rất kh&oacute; đo&aacute;n kết quả của kế hoạch n&agrave;y, nhưng nếu kh&ocirc;ng l&agrave;m, Mỹ sẽ bị cho l&agrave; yếu đi v&agrave; Trung Quốc sẽ ng&agrave;y c&agrave;ng quả quyết hơn ở ch&acirc;u &Aacute;&quot;.</p>\r\n', '', '', '', 1, 1, 1444875203, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `table_com`
--

CREATE TABLE IF NOT EXISTS `table_com` (
`id` int(11) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ten_com` varchar(100) CHARACTER SET utf8 NOT NULL,
  `act_com` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `danhmuc` int(10) NOT NULL,
  `type` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `act` varchar(225) COLLATE latin1_general_ci NOT NULL,
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `stt` int(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `table_com`
--

INSERT INTO `table_com` (`id`, `ten`, `ten_com`, `act_com`, `danhmuc`, `type`, `act`, `hienthi`, `stt`) VALUES
(1, 'Danh mục cấp 1', 'product', '', 1, 'product', 'list', 1, 1),
(2, 'Danh mục cấp 2', 'product', '', 1, 'product', 'cat', 1, 1),
(3, 'Danh mục cấp 3', 'product', '', 1, 'product', 'item', 1, 1),
(18, 'Giao hàng nhận tiền', 'info', '', 0, 'nhantien', '', 1, 1),
(8, 'Quản lý sản phẩm', 'product', '', 0, 'product', '', 1, 1),
(9, 'Quản lý giá bán', 'gia', '', 0, 'giaban', '', 1, 1),
(11, 'Quản lý tin tức', 'baiviet', '', 0, 'tintuc', '', 1, 1),
(17, 'Giao hàng toàn quốc', 'info', '', 0, 'giaohang', '', 1, 1),
(14, 'Quản lý dịch vụ', 'baiviet', '', 0, 'dichvu', '', 1, 1),
(15, 'Chăm sóc khách hàng', 'baiviet', '', 0, 'chamsoc', '', 1, 1),
(16, 'Xuất nhập khẩu hoàng quân', 'baiviet', '', 0, 'hoangquan', '', 1, 1),
(19, 'Đổi trả hàng', 'info', '', 0, 'doitra', '', 1, 1),
(20, 'Hướng dẩn mua hàng', 'info', '', 0, 'huongdan', '', 1, 1),
(21, 'Banner', 'bannerqc', '', 0, 'banner', '', 1, 1),
(22, 'Quản lý bài viết', 'baiviet', 'man', 1, 'baiviet', '', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `table_comment`
--

CREATE TABLE IF NOT EXISTS `table_comment` (
`id` int(10) unsigned NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `id_cat` int(10) NOT NULL,
  `com` varchar(225) NOT NULL,
  `tieude` varchar(200) NOT NULL,
  `gianhang` varchar(225) NOT NULL,
  `quantri` int(10) NOT NULL,
  `noidung` text NOT NULL,
  `nguoidang` varchar(50) NOT NULL,
  `sanpham` int(10) NOT NULL,
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL DEFAULT '0',
  `ngaysua` int(11) NOT NULL DEFAULT '0',
  `hoten` varchar(225) NOT NULL,
  `dienthoai` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `diachi` varchar(225) NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table_comment`
--

INSERT INTO `table_comment` (`id`, `stt`, `id_cat`, `com`, `tieude`, `gianhang`, `quantri`, `noidung`, `nguoidang`, `sanpham`, `hienthi`, `ngaytao`, `ngaysua`, `hoten`, `dienthoai`, `email`, `diachi`, `view`) VALUES
(66, 1, 0, 'dich-vu', '', '', 0, 'Minh Thụy 1', '', 30, 1, 1459958804, 1459958804, 'Minh Thụy 1', '', 'ss', '', 1),
(65, 1, 0, 'dich-vu', '', '', 0, 'ss', '', 30, 1, 1459958535, 1459958535, 'ss', '', 'ss', '', 1),
(52, 1, 0, 'dich-vu', '', 'home_admin', 0, 'ui gioi', 'nguyen-dinh-hieu', 30, 1, 1439977419, 1439977419, 'Nguyễn Đình Hiếu', '0939.145.415', 'nguyenhieunina@gmail.com', 'địa chỉ nak con', 1),
(53, 1, 0, 'dich-vu', '', 'home_admin', 0, 'bvnv', 'nguyen-dinh-hieu', 30, 1, 1439977536, 1439977536, 'Nguyễn Đình Hiếu', '0939.145.415', 'nguyenhieunina@gmail.com', 'địa chỉ nak con', 1),
(54, 1, 53, 'bai-thuoc', '', 'home_admin', 0, 'ssddđ', '', 50, 1, 1440560939, 1440560939, 's', '01666470449', 'phamthao.nina@gmail.com', 'Tầng Trệt E25, Căn hộ Belleza, Khu dân cư Phú Mỹ, P.Phú Mỹ, Quận 7.', 1),
(55, 1, 0, 'bai-thuoc', '', 'home_admin', 0, 'Hay', '', 50, 1, 1459690702, 1459690702, '', '', '', '', 1),
(56, 1, 0, 'bai-thuoc', '', '', 0, 'Hay nhất', '', 43, 1, 1459694810, 1459694810, 'Nguyễn Minh Thụy', '', 'minhthuy.nina@gmail.com', '', 1),
(57, 1, 0, 'bai-thuoc', '', '', 0, 'ss', '', 56, 1, 1459695266, 1459695266, 'Minh thụy', '', 'dd', '', 1),
(58, 1, 0, 'bai-thuoc', '', '', 0, 'gg', '', 56, 1, 1459695338, 1459695338, 'ss', '', 'ss', '', 1),
(59, 1, 0, 'bai-thuoc', '', '', 0, 'sssss', '', 56, 1, 1459695397, 1459695397, 'ggg', '', 'đ', '', 1),
(60, 1, 59, 'bai-thuoc', '', '', 0, 'dd', '', 56, 1, 1459695461, 1459695461, 'gg', '', 'gg', '', 1),
(61, 1, 59, 'bai-thuoc', '', '', 0, 'gggg', '', 56, 1, 1459695566, 1459695566, 'Minh Thụy', '', 'minhthuy.nina@gmail.com', '', 1),
(62, 1, 62, 'bai-thuoc', '', '', 0, 'aaaaaa', '', 56, 1, 1459695592, 1459695592, 'Minh Thụy', '', 'minhthuy.nina@gmail.com', '', 1),
(63, 1, 62, 'bai-thuoc', '', '', 0, 'Hay', '', 56, 1, 1459764012, 1459764012, 'Nam', '', 'ssssssss', '', 1),
(67, 1, 0, 'tin-tuc', '', '', 0, 'Gỗ óc chó\r\n', '', 56, 1, 1460612969, 1460612969, 'Minh Thụy', '', 'minhthuy.nina@gmail.com', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `table_comment_like`
--

CREATE TABLE IF NOT EXISTS `table_comment_like` (
`id` int(10) unsigned NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `ip_nguoilike` varchar(225) NOT NULL,
  `id_comment` int(10) NOT NULL,
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL DEFAULT '0',
  `ngaysua` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table_comment_like`
--

INSERT INTO `table_comment_like` (`id`, `stt`, `ip_nguoilike`, `id_comment`, `hienthi`, `ngaytao`, `ngaysua`) VALUES
(1, 1, '14.161.47.91', 12, 0, 1438137121, 0),
(2, 1, '127.0.0.1', 38, 0, 1439974977, 0),
(3, 1, '127.0.0.1', 29, 0, 1439974981, 0),
(4, 1, '127.0.0.1', 51, 0, 1440401755, 0),
(5, 1, '127.0.0.1', 43, 0, 1440401763, 0),
(6, 1, '127.0.0.1', 52, 0, 1440401765, 0),
(7, 1, '127.0.0.1', 42, 0, 1459689627, 0),
(8, 1, '127.0.0.1', 41, 0, 1459689631, 0),
(9, 1, '127.0.0.1', 0, 0, 1459784695, 0),
(10, 1, '14.161.46.214', 0, 0, 1460613227, 0);

-- --------------------------------------------------------

--
-- Structure de la table `table_company`
--

CREATE TABLE IF NOT EXISTS `table_company` (
`id` int(10) unsigned NOT NULL,
  `id_cat` varchar(2) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(225) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `mota_vi` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `ten_en` varchar(225) NOT NULL,
  `mota_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(10) unsigned NOT NULL DEFAULT '0',
  `ngaysua` int(10) unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table_company`
--

INSERT INTO `table_company` (`id`, `id_cat`, `type`, `ten_vi`, `tenkhongdau`, `mota_vi`, `noidung_vi`, `ten_en`, `mota_en`, `noidung_en`, `title`, `keywords`, `description`, `photo`, `thumb`, `stt`, `hienthi`, `ngaytao`, `ngaysua`) VALUES
(1, '', '', '', '', '', '<table align="center" border="0" cellpadding="3" cellspacing="0" class="tplCaption" style="width: 100%;">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="thua-soc-truoc-ireland-duc-lo-co-hoi-gianh-ve-som-du-euro" data-natural-width="500" data-pwidth="470.4" data-width="500" src="http://c1.f1.img.vnecdn.net/2015/10/09/duc-9716-1444345590.jpg" style="width: 100%;" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p class="Image">Ireland buộc Đức phải chờ đến lượt đấu cuối mới c&oacute; thể gi&agrave;nh v&eacute; tới Ph&aacute;p. Ảnh: <em>Reuters</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p class="Normal">Kết quả: Ireland 1-0 Đức</p>\r\n\r\n<p class="Normal">B&agrave;n thắng: Shane Long 70&#39;</p>\r\n\r\n<div style="text-align:center;">\r\n<div class="embed-container">&nbsp;</div>\r\n</div>\r\n\r\n<p class="Normal">V&agrave;o s&acirc;n với đội h&igrave;nh gần như mạnh nhất, Đức thoải m&aacute;i chiếm ưu thế trước chủ nh&agrave; Ireland. Nhưng điều g&acirc;y thất vọng l&agrave; c&aacute;c cầu thủ mang danh đương kim v&ocirc; địch World Cup li&ecirc;n tục bỏ lỡ cơ hội.</p>\r\n\r\n<p class="Normal">Ozil, Gundogan v&agrave; Reus c&oacute; ba t&igrave;nh huống dứt điểm từ vị tr&iacute; trống trải trước khung th&agrave;nh thủ m&ocirc;n Shay Given, nhưng đều kh&ocirc;ng ho&agrave;n th&agrave;nh nhiệm vụ. Ng&ocirc;i sao của CLB Arsenal cũng c&oacute; một lần đưa b&oacute;ng v&agrave;o lưới Ireland, nhưng kh&ocirc;ng được c&ocirc;ng nhận b&agrave;n thắng do lỗi việt vị.</p>\r\n\r\n<p class="Normal">Kh&ocirc;ng cụ thể h&oacute;a được ưu thế, Đức phải trả gi&aacute; đắt ở ph&uacute;t 70. Trong t&igrave;nh huống tấn c&ocirc;ng s&aacute;ng sủa gần như duy nhất của Ireland, tiền đạo Shane Long tho&aacute;t xuống s&uacute;t ch&eacute;o v&agrave;o g&oacute;c cao, đ&aacute;nh bại thủ m&ocirc;n Neuer.</p>\r\n\r\n<p class="Normal">Với chiến thắng bất ngờ trước Đức, Ireland hồi sinh hy vọng tại v&ograve;ng loại Euro 2016. Đội n&agrave;y hiện xếp thứ ba bảng D với 18 điểm, bằng th&agrave;nh t&iacute;ch với Ba Lan v&agrave; k&eacute;m Đức một điểm. Trong lượt đấu cuối, Ireland cần thắng tr&ecirc;n s&acirc;n của Ba Lan để gi&agrave;nh v&eacute; trực tiếp tới v&ograve;ng chung kết.</p>\r\n\r\n<p class="Normal">Trong khi đ&oacute;, thất bại trước Ireland đ&atilde; l&agrave;m Đức lỡ cơ hội gi&agrave;nh v&eacute; sớm một lượt đấu. Nhưng khi gặp Gruzia giữa tuần sau, thầy tr&ograve; HLV Joachim Low chỉ cần gi&agrave;nh &iacute;t nhất một kết quả h&ograve;a l&agrave; c&oacute; v&eacute; đi Ph&aacute;p dự ng&agrave;y hội lớn h&egrave; năm sau.</p>\r\n', '', '', '', '', '', '', '', '', 1, 0, 1444360406, 0),
(2, '', 'gioithieu', '', '', '', '<p class="Normal">V&agrave;o s&acirc;n với đội h&igrave;nh gần như mạnh nhất, Đức thoải m&aacute;i chiếm ưu thế trước chủ nh&agrave; Ireland. Nhưng điều g&acirc;y thất vọng l&agrave; c&aacute;c cầu thủ mang danh đương kim v&ocirc; địch World Cup li&ecirc;n tục bỏ lỡ cơ hội.</p>\r\n\r\n<p class="Normal">Ozil, Gundogan v&agrave; Reus c&oacute; ba t&igrave;nh huống dứt điểm từ vị tr&iacute; trống trải trước khung th&agrave;nh thủ m&ocirc;n Shay Given, nhưng đều kh&ocirc;ng ho&agrave;n th&agrave;nh nhiệm vụ. Ng&ocirc;i sao của CLB Arsenal cũng c&oacute; một lần đưa b&oacute;ng v&agrave;o lưới Ireland, nhưng kh&ocirc;ng được c&ocirc;ng nhận b&agrave;n thắng do lỗi việt vị.</p>\r\n\r\n<p class="Normal">Kh&ocirc;ng cụ thể h&oacute;a được ưu thế, Đức phải trả gi&aacute; đắt ở ph&uacute;t 70. Trong t&igrave;nh huống tấn c&ocirc;ng s&aacute;ng sủa gần như duy nhất của Ireland, tiền đạo Shane Long tho&aacute;t xuống s&uacute;t ch&eacute;o v&agrave;o g&oacute;c cao, đ&aacute;nh bại thủ m&ocirc;n Neuer.</p>\r\n\r\n<p class="Normal">Với chiến thắng bất ngờ trước Đức, Ireland hồi sinh hy vọng tại v&ograve;ng loại Euro 2016. Đội n&agrave;y hiện xếp thứ ba bảng D với 18 điểm, bằng th&agrave;nh t&iacute;ch với Ba Lan v&agrave; k&eacute;m Đức một điểm. Trong lượt đấu cuối, Ireland cần thắng tr&ecirc;n s&acirc;n của Ba Lan để gi&agrave;nh v&eacute; trực tiếp tới v&ograve;ng chung kết.</p>\r\n\r\n<p class="Normal">Trong khi đ&oacute;, thất bại trước Ireland đ&atilde; l&agrave;m Đức lỡ cơ hội gi&agrave;nh v&eacute; sớm một lượt đấu. Nhưng khi gặp Gruzia giữa tuần sau, thầy tr&ograve; HLV Joachim Low chỉ cần gi&agrave;nh &iacute;t nhất một kết quả h&ograve;a l&agrave; c&oacute; v&eacute; đi Ph&aacute;p dự ng&agrave;y hội lớn h&egrave; năm sau.</p>\r\n', '', '', '', 'Đức phải trả giá đắt ở phút 70', 'Đức phải trả giá đắt ở phút 70', 'Đức phải trả giá đắt ở phút 70', '', '', 0, 0, 1444361037, 1444361100),
(3, '', 'tuyendung', '', '', '', '<p class="Normal">V&agrave;o s&acirc;n với đội h&igrave;nh gần như mạnh nhất, Đức thoải m&aacute;i chiếm ưu thế trước chủ nh&agrave; Ireland. Nhưng điều g&acirc;y thất vọng l&agrave; c&aacute;c cầu thủ mang danh đương kim v&ocirc; địch World Cup li&ecirc;n tục bỏ lỡ cơ hội.</p>\r\n\r\n<p class="Normal">Ozil, Gundogan v&agrave; Reus c&oacute; ba t&igrave;nh huống dứt điểm từ vị tr&iacute; trống trải trước khung th&agrave;nh thủ m&ocirc;n Shay Given, nhưng đều kh&ocirc;ng ho&agrave;n th&agrave;nh nhiệm vụ. Ng&ocirc;i sao của CLB Arsenal cũng c&oacute; một lần đưa b&oacute;ng v&agrave;o lưới Ireland, nhưng kh&ocirc;ng được c&ocirc;ng nhận b&agrave;n thắng do lỗi việt vị.</p>\r\n', '', '', '', 'Tuyển nhân viên', 'Tuyển nhân viên,Tuyển nhân viên,Tuyển nhân viên', 'Tuyển nhân viên,Tuyển nhân viên,Tuyển nhân viên,Tuyển nhân viên', '', '', 1, 0, 1444362420, 0),
(4, '', 'lienhe', '', '', '', '<h2><strong>PETRO HOTEL COMPANY LIMITED</strong></h2>\r\n\r\n<p> </p>\r\n\r\n<p> </p>\r\n\r\n<p><em style="line-height: 1.6;">Address</em><span style="line-height: 1.6;">: 9-11 Hoang Dieu Street, Ward 1, Vung Tau City, Vietnam </span></p>\r\n\r\n<p><em>Phone</em>: 84.64. 3588 588 - <em>Fax</em>: 84. 64. 3588 589 - <em>Email</em>: petrohotel@ptsc.com.vn  </p>\r\n\r\n<p><em>Website</em>: www.petrohotel.vn</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>Mr. Huynh Ho Chi Tam - Commercial Manager  </strong></p>\r\n\r\n<p><em>Tel</em>: 84.64. 588 588 - <em>Cellphone</em>: 84.906. 358 639 - <em>Email</em>: tamhuynh@ptsc.com.vn</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>Mr. Vo Thanh Phuong - Travel Division Manager   </strong> </p>\r\n\r\n<p><em>Tel</em>: 84.64. 588 585 - <em>Cellphone</em>: 84.983.050 053 - <em>Email</em>: phuongvt@ptsc.com.vn</p>\r\n', '', '', '<p style="line-height: 20.8px;"><strong>PETRO HOTEL COMPANY LIMITED</strong></p>\r\n\r\n<p style="line-height: 20.8px;"><em style="line-height: 1.6;">Address</em><span style="line-height: 1.6;">: 9-11 Hoang Dieu Street, Ward 1, Vung Tau City, Vietnam </span></p>\r\n\r\n<p style="line-height: 20.8px;"><em>Phone</em>: 84.64. 3588 588 - <em>Fax</em>: 84. 64. 3588 589 - <em>Email</em>: petrohotel@ptsc.com.vn  </p>\r\n\r\n<p style="line-height: 20.8px;"><em>Website</em>: www.petrohotel.vn</p>\r\n\r\n<p style="line-height: 20.8px;"><strong>Mr. Huynh Ho Chi Tam - Commercial Manager  </strong></p>\r\n\r\n<p style="line-height: 20.8px;"><em>Tel</em>: 84.64. 588 588 - <em>Cellphone</em>: 84.906. 358 639 - <em>Email</em>: tamhuynh@ptsc.com.vn</p>\r\n\r\n<p style="line-height: 20.8px;"><strong>Mr. Vo Thanh Phuong - Travel Division Manager   </strong> </p>\r\n\r\n<p style="line-height: 20.8px;"><em>Tel</em>: 84.64. 588 585 - <em>Cellphone</em>: 84.983.050 053 - <em>Email</em>: phuongvt@ptsc.com.vn</p>\r\n', '', '', '', '', '', 0, 0, 1444374706, 1468895553),
(5, '', 'footer', '', '', '', '<p>Địa chỉ: 677/26/7/13A Nguyễn Ảnh Thủ , Phường  Hiệp Thành, Quận 12</p>\r\n\r\n<p>Điện thoại: 0979 099 125</p>\r\n\r\n<p>Email: nguyenvansa125@gmail.com </p>\r\n\r\n<p>Website: www.xaydungbatdongsan.com</p>\r\n\r\n<p> </p>\r\n', '', '', '<h2>CÔNG TY TNHH KHÁCH SẠN DẦU KHÍ PTSC</h2>\r\n\r\n<p style="line-height: 20.8px;">Địa chỉ:  Số 9-11 Hoàng Diệu, F1, TP Vũng Tàu, Tỉnh Bà rịa- Vũng Tàu </p>\r\n\r\n<p style="line-height: 20.8px;">Điện thoại: 0643 588 588 </p>\r\n\r\n<p style="line-height: 20.8px;">Fax :   064-3 588 589</p>\r\n\r\n<p style="line-height: 20.8px;">Email: petrohotel@ptsc.com.vn </p>\r\n\r\n<p style="line-height: 20.8px;">Website: http://petrohotel.vn</p>\r\n', '', '', '', '', '', 0, 0, 1444374721, 1475717985),
(6, '', 'giolam', '', '', '', '<p>HCM <strong>(08) 66847566</strong><br />\r\nThứ 2 - thứ 6: 7h - 20h<br />\r\nThứ 7: 7h - 18h<br />\r\nCN & ngày lễ: 8h - 17h<br />\r\nHoặc gửi yêu cầu tại đây<br />\r\nThông báo hàng giả (08) 6296 6976</p>\r\n', '', '', '', '', '', '', '', '', 0, 0, 1445392227, 1445394193),
(7, '', 'ttintro', '', '', '', '<h2>Địa chỉ: C5/9A Phạm Hùng, Ấp 4, Bình Hưng, Bình Chánh,TP. HCM</h2>\r\n\r\n<h2>Chi nhánh 1: 506/19 đường 3 tháng 2, P14, Q10, TPHCM</h2>\r\n\r\n<h3>Hotline: 0918.330.883 - 0907.554473</h3>\r\n', '', '', '', '', '', '', '', '', 0, 0, 1473994009, 1473995282);

-- --------------------------------------------------------

--
-- Structure de la table `table_contact`
--

CREATE TABLE IF NOT EXISTS `table_contact` (
`id` int(10) unsigned NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `ten` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `dienthoai` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `thumb` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `noidung` text NOT NULL,
  `ghichu` text NOT NULL,
  `view` int(10) NOT NULL,
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table_contact`
--

INSERT INTO `table_contact` (`id`, `stt`, `ten`, `diachi`, `dienthoai`, `photo`, `thumb`, `email`, `tieude`, `noidung`, `ghichu`, `view`, `hienthi`, `ngaytao`) VALUES
(27, 0, 'Facebook', 'aa', '0909990990', '', '', 'longtu1432005@yahoo.com', 'hgfhgfhgfh', 'ggg', '', 1, 1, 1459411180);

-- --------------------------------------------------------

--
-- Structure de la table `table_counter`
--

CREATE TABLE IF NOT EXISTS `table_counter` (
`id` int(11) NOT NULL,
  `tm` int(11) NOT NULL,
  `ip` varchar(16) NOT NULL DEFAULT '0.0.0.0'
) ENGINE=MyISAM AUTO_INCREMENT=165 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table_counter`
--

INSERT INTO `table_counter` (`id`, `tm`, `ip`) VALUES
(1, 1359686133, '127.0.0.1'),
(2, 1359687053, '127.0.0.1'),
(3, 1359728025, '127.0.0.1'),
(4, 1359729858, '127.0.0.1'),
(5, 1359730874, '127.0.0.1'),
(6, 1359731807, '127.0.0.1'),
(7, 1359732782, '127.0.0.1'),
(8, 1359768867, '127.0.0.1'),
(9, 1361950583, '127.0.0.1'),
(10, 1361953904, '127.0.0.1'),
(11, 1362224573, '127.0.0.1'),
(12, 1362225479, '127.0.0.1'),
(13, 1362232155, '127.0.0.1'),
(14, 1362233937, '127.0.0.1'),
(15, 1362234841, '127.0.0.1'),
(16, 1362235835, '127.0.0.1'),
(17, 1362236916, '127.0.0.1'),
(18, 1362237903, '127.0.0.1'),
(19, 1362238829, '127.0.0.1'),
(20, 1362239777, '127.0.0.1'),
(21, 1362240712, '127.0.0.1'),
(22, 1362364410, '127.0.0.1'),
(23, 1362382242, '127.0.0.1'),
(24, 1362383175, '127.0.0.1'),
(25, 1362384257, '127.0.0.1'),
(26, 1362447262, '127.0.0.1'),
(27, 1362451213, '127.0.0.1'),
(28, 1362467933, '127.0.0.1'),
(29, 1364916799, '127.0.0.1'),
(30, 1364917833, '127.0.0.1'),
(31, 1364918825, '127.0.0.1'),
(32, 1364919786, '127.0.0.1'),
(33, 1364920715, '127.0.0.1'),
(34, 1364921653, '127.0.0.1'),
(35, 1364953496, '127.0.0.1'),
(36, 1364955036, '127.0.0.1'),
(37, 1364958291, '127.0.0.1'),
(38, 1364959764, '127.0.0.1'),
(39, 1364960672, '127.0.0.1'),
(40, 1364971599, '127.0.0.1'),
(41, 1364972526, '127.0.0.1'),
(42, 1364975090, '127.0.0.1'),
(43, 1364977289, '127.0.0.1'),
(44, 1364996762, '127.0.0.1'),
(45, 1364997778, '127.0.0.1'),
(46, 1364998679, '127.0.0.1'),
(47, 1364999632, '127.0.0.1'),
(48, 1365000544, '127.0.0.1'),
(49, 1365001447, '127.0.0.1'),
(50, 1365002368, '127.0.0.1'),
(51, 1365038106, '127.0.0.1'),
(52, 1365039066, '127.0.0.1'),
(53, 1365039995, '127.0.0.1'),
(54, 1365043971, '127.0.0.1'),
(55, 1365131089, '127.0.0.1'),
(56, 1365135368, '127.0.0.1'),
(57, 1365152472, '127.0.0.1'),
(58, 1365153396, '127.0.0.1'),
(59, 1365217259, '127.0.0.1'),
(60, 1365218204, '127.0.0.1'),
(61, 1365385578, '127.0.0.1'),
(62, 1365403968, '127.0.0.1'),
(63, 1365602808, '127.0.0.1'),
(64, 1365603802, '127.0.0.1'),
(65, 1365604708, '127.0.0.1'),
(66, 1365605633, '127.0.0.1'),
(67, 1365606538, '127.0.0.1'),
(68, 1365650338, '127.0.0.1'),
(69, 1365687574, '127.0.0.1'),
(70, 1365780168, '127.0.0.1'),
(71, 1365781096, '127.0.0.1'),
(72, 1365784981, '127.0.0.1'),
(73, 1367661201, '127.0.0.1'),
(74, 1367662143, '127.0.0.1'),
(75, 1367677632, '127.0.0.1'),
(76, 1367678624, '127.0.0.1'),
(77, 1367679613, '127.0.0.1'),
(78, 1367680526, '127.0.0.1'),
(79, 1367681454, '127.0.0.1'),
(80, 1367722809, '127.0.0.1'),
(81, 1367723734, '127.0.0.1'),
(82, 1367724634, '127.0.0.1'),
(83, 1367725559, '127.0.0.1'),
(84, 1368115461, '127.0.0.1'),
(85, 1368116373, '127.0.0.1'),
(86, 1368117342, '127.0.0.1'),
(87, 1368118258, '127.0.0.1'),
(88, 1368119420, '127.0.0.1'),
(89, 1368187368, '127.0.0.1'),
(90, 1368194400, '127.0.0.1'),
(91, 1368195304, '127.0.0.1'),
(92, 1368196331, '127.0.0.1'),
(93, 1368197310, '127.0.0.1'),
(94, 1368198215, '127.0.0.1'),
(95, 1368199385, '127.0.0.1'),
(96, 1368201432, '127.0.0.1'),
(97, 1368202364, '127.0.0.1'),
(98, 1368203269, '127.0.0.1'),
(99, 1368204179, '127.0.0.1'),
(100, 1368205091, '127.0.0.1'),
(101, 1368205992, '127.0.0.1'),
(102, 1368235499, '127.0.0.1'),
(103, 1368243455, '127.0.0.1'),
(104, 1368361034, '127.0.0.1'),
(105, 1368363917, '127.0.0.1'),
(106, 1368364842, '127.0.0.1'),
(107, 1368432637, '127.0.0.1'),
(108, 1368434162, '127.0.0.1'),
(109, 1368583800, '127.0.0.1'),
(110, 1368599935, '127.0.0.1'),
(111, 1368601099, '127.0.0.1'),
(112, 1368603133, '127.0.0.1'),
(113, 1368754213, '127.0.0.1'),
(114, 1368841439, '127.0.0.1'),
(115, 1369145018, '127.0.0.1'),
(116, 1369147012, '127.0.0.1'),
(117, 1369148022, '127.0.0.1'),
(118, 1369148956, '127.0.0.1'),
(119, 1369233688, '127.0.0.1'),
(120, 1369234596, '127.0.0.1'),
(121, 1369235804, '127.0.0.1'),
(122, 1369236842, '127.0.0.1'),
(123, 1370961818, '127.0.0.1'),
(124, 1370962780, '127.0.0.1'),
(125, 1370963680, '127.0.0.1'),
(126, 1370964625, '127.0.0.1'),
(127, 1370965562, '127.0.0.1'),
(128, 1370966584, '127.0.0.1'),
(129, 1371478614, '127.0.0.1'),
(130, 1371479537, '127.0.0.1'),
(131, 1371480595, '127.0.0.1'),
(132, 1371481509, '127.0.0.1'),
(133, 1371482469, '127.0.0.1'),
(134, 1371483373, '127.0.0.1'),
(135, 1371484288, '127.0.0.1'),
(136, 1371485192, '127.0.0.1'),
(137, 1371486152, '127.0.0.1'),
(138, 1371487184, '127.0.0.1'),
(139, 1371538481, '127.0.0.1'),
(140, 1371539385, '127.0.0.1'),
(141, 1371540500, '127.0.0.1'),
(142, 1371541425, '127.0.0.1'),
(143, 1371542325, '127.0.0.1'),
(144, 1371543636, '127.0.0.1'),
(145, 1371544631, '127.0.0.1'),
(146, 1371546015, '127.0.0.1'),
(147, 1371546964, '127.0.0.1'),
(148, 1371548076, '127.0.0.1'),
(149, 1371548995, '127.0.0.1'),
(150, 1371609566, '127.0.0.1'),
(151, 1371610655, '127.0.0.1'),
(152, 1371627518, '127.0.0.1'),
(153, 1371634425, '127.0.0.1'),
(154, 1371806929, '127.0.0.1'),
(155, 1371865003, '127.0.0.1'),
(156, 1371865957, '127.0.0.1'),
(157, 1373271855, '127.0.0.1'),
(158, 1373277474, '127.0.0.1'),
(159, 1373618926, '127.0.0.1'),
(160, 1373619912, '127.0.0.1'),
(161, 1373620857, '127.0.0.1'),
(162, 1373621934, '127.0.0.1'),
(163, 1374198858, '127.0.0.1'),
(164, 1374199780, '127.0.0.1');

-- --------------------------------------------------------

--
-- Structure de la table `table_dientich`
--

CREATE TABLE IF NOT EXISTS `table_dientich` (
`id` int(10) unsigned NOT NULL,
  `ten_vi` varchar(225) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `dientichtu` int(20) NOT NULL,
  `dientichden` int(20) NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(10) unsigned NOT NULL DEFAULT '0',
  `ngaysua` int(10) unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table_dientich`
--

INSERT INTO `table_dientich` (`id`, `ten_vi`, `ten_en`, `tenkhongdau`, `type`, `dientichtu`, `dientichden`, `stt`, `hienthi`, `ngaytao`, `ngaysua`) VALUES
(1, 'từ 100 - 150 m2', '', 'tu-100-150-m2', '', 100, 150, 1, 1, 1445588921, 1457596633),
(2, 'Từ 50 - 100 m2', '', 'tu-50-100-m2', '', 50, 100, 1, 1, 1445589039, 1457596608),
(3, 'Dưới 50 m2', '', 'duoi-50-m2', '', 0, 50, 1, 1, 1445589072, 1457596584);

-- --------------------------------------------------------

--
-- Structure de la table `table_download`
--

CREATE TABLE IF NOT EXISTS `table_download` (
`id` int(10) unsigned NOT NULL,
  `ten` varchar(225) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `file` varchar(200) NOT NULL,
  `type` varchar(100) NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `url` varchar(250) NOT NULL,
  `image` varchar(100) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `table_gia`
--

CREATE TABLE IF NOT EXISTS `table_gia` (
`id` int(10) unsigned NOT NULL,
  `ten_vi` varchar(225) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `giatu` int(20) NOT NULL,
  `giaden` int(20) NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(10) unsigned NOT NULL DEFAULT '0',
  `ngaysua` int(10) unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table_gia`
--

INSERT INTO `table_gia` (`id`, `ten_vi`, `ten_en`, `tenkhongdau`, `type`, `giatu`, `giaden`, `stt`, `hienthi`, `ngaytao`, `ngaysua`) VALUES
(1, 'Dưới 500k', '', 'duoi-500k', '', 0, 500000, 1, 1, 1445588921, 0),
(2, 'Từ 500 - 1 Triệu', '', 'tu-500-1-trieu', '', 500000, 1000000, 1, 1, 1445589039, 0),
(3, 'Từ 1 Triệu - 2 Triệu', '', 'tu-1-trieu-2-trieu', '', 1000000, 2000000, 1, 1, 1445589072, 0);

-- --------------------------------------------------------

--
-- Structure de la table `table_giasearch`
--

CREATE TABLE IF NOT EXISTS `table_giasearch` (
`id` int(11) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `giatu` int(11) NOT NULL,
  `giaden` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `table_giasearch`
--

INSERT INTO `table_giasearch` (`id`, `ten`, `giatu`, `giaden`) VALUES
(1, 'Dưới 500 ngàn', 0, 500000),
(2, 'Từ 500 đến 1 triệu', 500000, 1000000),
(3, 'Từ 1 triệu đến 2 triệu', 1000000, 2000000),
(4, 'Từ 2 triệu đến 4 triệu', 2000000, 4000000),
(5, 'Từ 2 triệu đến 4 triệu', 2000000, 4000000),
(6, 'Từ 4 triệu đến 8 triệu', 4000000, 8000000),
(7, 'Từ 8 triệu đến 10 triệu', 8000000, 10000000),
(8, 'Trên 10 triệu', 10000000, 2147483647);

-- --------------------------------------------------------

--
-- Structure de la table `table_httt`
--

CREATE TABLE IF NOT EXISTS `table_httt` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `table_info`
--

CREATE TABLE IF NOT EXISTS `table_info` (
`id` int(10) unsigned NOT NULL,
  `id_cat` varchar(2) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(225) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `mota_vi` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `ten_en` varchar(225) NOT NULL,
  `mota_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(10) unsigned NOT NULL DEFAULT '0',
  `ngaysua` int(10) unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table_info`
--

INSERT INTO `table_info` (`id`, `id_cat`, `type`, `ten_vi`, `tenkhongdau`, `mota_vi`, `noidung_vi`, `ten_en`, `mota_en`, `noidung_en`, `title`, `keywords`, `description`, `photo`, `thumb`, `stt`, `hienthi`, `ngaytao`, `ngaysua`) VALUES
(1, '', 'gioithieu', 'Về chúng tôi', 've-chung-toi', '', '<div style="margin: 0px; padding: 0px; font-family: &quot;Times New Roman&quot;; font-size: 16px; line-height: 20px; -webkit-text-stroke: 0.1px rgba(255, 255, 255, 0.00784314);"><span style="margin: 0px; padding: 0px; text-align: justify;">Những chiếc tách trà mang <a href="http://afamily.vn/phong-cach-vintage.htm" style="margin: 0px; padding: 0px; text-decoration: none; outline: none; -webkit-appearance: none;" target="_blank" title="phong cách vintage">phong cách vintage</a> sẽ là cách tô điểm vô cùng đáng yêu cho không gian nhà cũng như tạo một không gian vườn mini trong chính tách trà. Bạn có thể chọn họa tiết trên tách trà sao cho phù hợp với phong cách thiết kế của ngôi nhà mình và loại cây cũng như<span style="margin: 0px; padding: 0px; font-weight: bold;"><a href="http://afamily.vn/khu-vuon.htm" style="margin: 0px; padding: 0px; text-decoration: none; outline: none; -webkit-appearance: none;" target="_blank" title="khu vườn">khu vườn</a></span> mini bạn định thiết kế. Giờ thì bắt tay vào thôi!</span></div>\r\n\r\n<div style="margin: 0px; padding: 0px; font-family: &quot;Times New Roman&quot;; font-size: 16px; line-height: 20px; -webkit-text-stroke: 0.1px rgba(255, 255, 255, 0.00784314);">\r\n<div style="margin: 0px; padding: 0px; text-align: justify;">\r\n<div style="margin: 0px; padding: 0px;"> </div>\r\n\r\n<div style="margin: 0px; padding: 0px; text-align: center;">\r\n<div style="margin: 0px; padding: 0px;"><img alt="" src="http://afamily1.mediacdn.vn/M8N20d5STCm5E9QXKSmE0TPi2bNc59/Image/2016/07/tu-lam-khu-vuon-mini-voi-nhung-tach-tra-cu-to-diem-cho-khong-gian-nha_5714120b43.jpg" style="margin: 0px; padding: 0px; border: none; outline: none; -webkit-appearance: none; max-width: 100%;" /></div>\r\n\r\n<div style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-style: italic;">Một tách trà hoa này đặt ở bệ cửa sổ sẽ đủ khiến tâm trạng bạn trở nên vui vẻ và yêu đời hơn.</span></div>\r\n\r\n<div style="margin: 0px; padding: 0px;"> </div>\r\n\r\n<div style="margin: 0px; padding: 0px;"><img alt="" src="http://afamily1.mediacdn.vn/M8N20d5STCm5E9QXKSmE0TPi2bNc59/Image/2016/07/tu-lam-khu-vuon-mini-voi-nhung-tach-tra-cu-to-diem-cho-khong-gian-nha_8ab1004a94.jpg" style="margin: 0px; padding: 0px; border: none; outline: none; -webkit-appearance: none; max-width: 100%;" /></div>\r\n\r\n<div style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-style: italic;">Những họa tiết cổ trên những tách trà có thể góp phần tô điểm chất vintage thêm cho không gian nhà bạn.</span></div>\r\n</div>\r\n</div>\r\n</div>\r\n', '', '', '', '', '', '', '', '', 1, 0, 1475721310, 0);

-- --------------------------------------------------------

--
-- Structure de la table `table_lkweb`
--

CREATE TABLE IF NOT EXISTS `table_lkweb` (
`id` int(10) unsigned NOT NULL,
  `ten` varchar(225) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `icon` varchar(1000) NOT NULL,
  `type` varchar(100) NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `url` varchar(250) NOT NULL,
  `image` varchar(100) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table_lkweb`
--

INSERT INTO `table_lkweb` (`id`, `ten`, `photo`, `thumb`, `icon`, `type`, `stt`, `hienthi`, `url`, `image`, `ngaytao`, `ngaysua`) VALUES
(1, 'Facebook', 's1-2231.png', 's1-2231_42x42.png', '', 'lkweb', 1, 1, 'http://www.vimeo.com', '', 1475718410, 0),
(2, 'Youtube', 's2-7449.png', 's2-7449_42x42.png', '', 'lkweb', 2, 1, 'http://youtube.com', '', 1475718429, 0),
(3, 'Tweet', 's3-9040.png', 's3-9040_42x42.png', '', 'lkweb', 3, 1, 'http://powerland.vn', '', 1475718447, 0),
(4, 'G+', 's4-8182.png', 's4-8182_42x42.png', '', 'lkweb', 4, 1, 'http://powerland.vn/quick-search/?make=31&model=110&year=2014&type=1', '', 1475718461, 0),
(5, 'báo vnexpress', '', '', '', 'lienket', 1, 1, 'http://vnexpress.net/', '', 1475720006, 0),
(6, 'TỈNH TIỀN GIANG', '', '', '', 'lienket', 1, 1, 'http://tiengiang.gov.vn/Default.aspx', '', 1475720022, 0),
(7, 'SỞ GDĐT', '', '', '', 'lienket', 1, 1, 'http://tiengiang.edu.vn/index.aspx', '', 1475720038, 0);

-- --------------------------------------------------------

--
-- Structure de la table `table_newsletter`
--

CREATE TABLE IF NOT EXISTS `table_newsletter` (
`id` int(10) unsigned NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `ten` varchar(225) NOT NULL,
  `gioitinh` varchar(255) NOT NULL,
  `sanpham` varchar(50) NOT NULL,
  `tieude` varchar(200) NOT NULL,
  `noidung` longtext NOT NULL,
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(10) unsigned NOT NULL DEFAULT '0',
  `ngaysua` int(10) unsigned NOT NULL DEFAULT '0',
  `email` varchar(225) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=157 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table_newsletter`
--

INSERT INTO `table_newsletter` (`id`, `stt`, `ten`, `gioitinh`, `sanpham`, `tieude`, `noidung`, `hienthi`, `ngaytao`, `ngaysua`, `email`) VALUES
(155, 1, '', '', '', '', '', 1, 1461171760, 0, 'quoctrung.nina@gmail.com'),
(156, 1, '', '', '', '', '', 1, 1465206396, 0, 'example@example.vn');

-- --------------------------------------------------------

--
-- Structure de la table `table_online`
--

CREATE TABLE IF NOT EXISTS `table_online` (
`id` int(10) unsigned NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `time` int(10) unsigned NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=66933 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table_online`
--

INSERT INTO `table_online` (`id`, `session_id`, `time`) VALUES
(66932, '8fq8vkdpoe1k2mrqa2shvaqt10', 1475830402);

-- --------------------------------------------------------

--
-- Structure de la table `table_order`
--

CREATE TABLE IF NOT EXISTS `table_order` (
`id` int(11) NOT NULL,
  `madonhang` varchar(20) NOT NULL,
  `tinhthanh` varchar(100) NOT NULL,
  `quanhuyen` varchar(100) NOT NULL,
  `phivanchuyen` int(10) NOT NULL,
  `view` int(10) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `dienthoai` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `httt` int(11) NOT NULL,
  `tonggia` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `ghichu` text NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table_order`
--

INSERT INTO `table_order` (`id`, `madonhang`, `tinhthanh`, `quanhuyen`, `phivanchuyen`, `view`, `hoten`, `dienthoai`, `diachi`, `email`, `httt`, `tonggia`, `noidung`, `ghichu`, `ngaytao`, `trangthai`) VALUES
(61, 'E7BVCW', '', '', 0, 1, 'Nguyễn Đình Hiếu', '01212901191', 'Quang Trung , Gò Vấp', 'nguyenhieunina@gmail.com', 0, 0, 'Giao Ngay và liền nhé bạn . ', '', 1458788491, 1),
(62, 'PO4JMP', '', '', 0, 0, 'test', '0932012346', 'nina', 'dinhthithuthuy.nina@gmail.com', 0, 0, 'sđ', '', 1460511181, 1),
(63, 'LG8L3P', '', '', 0, 0, 'test', '0932012346', 'nina', 'dinhthithuthuy.nina@gmail.com', 0, 0, 'sđ', '', 1460511187, 1),
(64, 'KWUFBS', '', '', 0, 0, '', '', '', '', 0, 0, '', '', 1460522827, 1),
(65, 'AQER4B', '', '', 0, 1, 'Facebook', '018773465783', 'jshdfghj', 'dieuanh.nina@gmail.com', 0, 0, '', '', 1463456649, 1),
(66, 'VSGLNL', '', '', 0, 0, 'Printest', '0988 667 348', 'abc', 'dieuanh.phanthi@facebook.com', 0, 450000, 'zsfsdfzczxczxc', '', 1475143197, 1);

-- --------------------------------------------------------

--
-- Structure de la table `table_order_detail`
--

CREATE TABLE IF NOT EXISTS `table_order_detail` (
`id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `gia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table_order_detail`
--

INSERT INTO `table_order_detail` (`id`, `id_product`, `id_order`, `ten`, `gia`, `soluong`) VALUES
(69, 53, 61, 'GỖ CAO SU', 0, 12),
(70, 43, 61, 'GỖ SỒI', 0, 12),
(71, 47, 61, 'GỖ XOAN ĐÀO', 0, 13),
(72, 53, 62, 'Gổ mun cao cấp', 0, 1),
(73, 53, 63, 'Gổ mun cao cấp', 0, 1),
(74, 53, 64, 'Gổ mun cao cấp', 0, 1),
(75, 22, 65, '1kg', 0, 1),
(76, 3, 66, 'Bình ắc quy GLOBE', 200000, 1),
(77, 2, 66, 'Bình ắc quy GLOBE', 250000, 1),
(78, 1, 66, 'Kích đề power land', 0, 2);

-- --------------------------------------------------------

--
-- Structure de la table `table_phanquyen`
--

CREATE TABLE IF NOT EXISTS `table_phanquyen` (
`id` int(10) unsigned NOT NULL,
  `id_list` varchar(255) NOT NULL,
  `id_cat` varchar(255) NOT NULL,
  `id_item` varchar(255) NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `ten` varchar(200) NOT NULL,
  `com` text NOT NULL,
  `table_vitri` varchar(225) NOT NULL,
  `xem` varchar(225) NOT NULL,
  `them` varchar(225) NOT NULL,
  `sua` varchar(225) NOT NULL,
  `xoa` varchar(225) NOT NULL,
  `soluong` varchar(200) NOT NULL,
  `mausac` varchar(50) NOT NULL,
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL DEFAULT '0',
  `ngaysua` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table_phanquyen`
--

INSERT INTO `table_phanquyen` (`id`, `id_list`, `id_cat`, `id_item`, `stt`, `ten`, `com`, `table_vitri`, `xem`, `them`, `sua`, `xoa`, `soluong`, `mausac`, `hienthi`, `ngaytao`, `ngaysua`) VALUES
(21, '["1"]', '["1"]', '["2","1"]', 1, 'Quản lý bigmart 1', 'null', 'null', '["1|1","8|1"]', '["1|1","8|1"]', '["1|1","8|1"]', '["8|1"]', '', '#37cd30', 1, 1436943747, 1474956620);

-- --------------------------------------------------------

--
-- Structure de la table `table_photo`
--

CREATE TABLE IF NOT EXISTS `table_photo` (
`id` int(10) unsigned NOT NULL,
  `id_vitri` int(11) NOT NULL,
  `photo_vi` varchar(225) NOT NULL,
  `photo_en` varchar(225) NOT NULL,
  `thumb_vi` varchar(150) NOT NULL,
  `thumb_en` varchar(150) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `ten_vi` varchar(100) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `noidung_vi` text NOT NULL,
  `noidung_en` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `type` varchar(30) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table_photo`
--

INSERT INTO `table_photo` (`id`, `id_vitri`, `photo_vi`, `photo_en`, `thumb_vi`, `thumb_en`, `thumb`, `ten_vi`, `ten_en`, `noidung_vi`, `noidung_en`, `link`, `mota`, `stt`, `hienthi`, `type`) VALUES
(1, 0, 'logo-5770.png', '', 'logo-5770_200x205.png', '', '', '', '', '', '', '', '', 1, 0, 'logo'),
(2, 0, 'banner-4576.png', '', 'banner-4576_608x205.png', '', '', '', '', '', '', '', '', 1, 0, 'banner'),
(3, 0, '9416894074970090.png', '', '941689407497009_1366x470.png', '', '', 'Slide 1', '', '', '', 'https://www.google.com/search?q=16000%2F1366&ie=utf-8&oe=utf-8&client=firefox-b-ab', '', 1, 1, 'slider'),
(4, 0, '8693565961429530.png', '', '869356596142953_740x350.png', '', '', 'Luôn Luôn Đồng Hành Cùng Quý Khách Hàng', '', '', '', 'https://www.google.com/search?q=16000%2F1366&ie=utf-8&oe=utf-8&client=firefox-b-ab', '', 1, 1, 'imgtrangchu'),
(5, 0, '6272322442078250.png', '', '627232244207825_740x350.png', '', '', 'Chất lượng tốt nhất - Giá cả hợp lý', '', '', '', 'https://www.google.com/search?q=16000%2F1366&ie=utf-8&oe=utf-8&client=firefox-b-ab', '', 1, 1, 'imgtrangchu'),
(6, 0, '0649353785451320.png', '', '064935378545132_425x75.png', '', '', 'Tính chi phí vay vốn', '', '', '', 'http://www.example.com', '', 1, 1, 'giavang'),
(7, 0, '7215497701254430.png', '', '721549770125443_425x75.png', '', '', 'Hỗ trợ trực tiếp vay vốn', '', '', '', '', '', 1, 1, 'giavang'),
(8, 0, '3204045092958990.png', '', '320404509295899_425x75.png', '', '', 'Tham khảo giá vàng', '', '', '', '', '', 1, 1, 'giavang'),
(9, 0, '6275388369546580.png', '', '627538836954658_425x75.png', '', '', 'Tham khảo chứng khoán', '', '', '', '', '', 1, 1, 'giavang'),
(10, 0, '4502800997406780.png', '', '450280099740678_1366x470.png', '', '', 'Slide 2', '', '', '', 'http://videofly.vn/meghan-trainor-better-ft-yo-gotti-official-_video346626132770102229.html?playlist=309619626213467982', '', 1, 1, 'slider');

-- --------------------------------------------------------

--
-- Structure de la table `table_product`
--

CREATE TABLE IF NOT EXISTS `table_product` (
`id` int(10) unsigned NOT NULL,
  `id_cat` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `id_sub` int(11) NOT NULL,
  `id_hangxe` varchar(1000) NOT NULL,
  `id_model` varchar(1000) NOT NULL,
  `id_dongco` varchar(1000) NOT NULL,
  `id_namsx` varchar(1000) NOT NULL,
  `id_tinhthanh` int(10) NOT NULL,
  `id_quanhuyen` int(10) NOT NULL,
  `id_phuongxa` int(10) NOT NULL,
  `id_duongpho` int(10) NOT NULL,
  `id_loaidat` int(10) NOT NULL,
  `sophong` varchar(1000) NOT NULL,
  `huong` varchar(1000) NOT NULL,
  `diachi_vi` varchar(1000) NOT NULL,
  `ngayhethan` varchar(100) NOT NULL,
  `phi_hcm` int(10) NOT NULL,
  `phi_khac` int(10) NOT NULL,
  `tinhtrang` int(1) NOT NULL DEFAULT '1',
  `tags` varchar(2000) NOT NULL,
  `rate` int(10) NOT NULL,
  `type` varchar(100) NOT NULL,
  `noibat` int(11) NOT NULL,
  `thongdung` int(11) NOT NULL,
  `banchay` int(11) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `thumb` varchar(225) NOT NULL,
  `ten_vi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `masp` varchar(255) NOT NULL,
  `soluong` int(10) NOT NULL,
  `dientich` varchar(1000) NOT NULL,
  `dienthoai` varchar(100) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `khuyenmai_vi` text NOT NULL,
  `khuyenmai_en` text NOT NULL,
  `thongtin_vi` text NOT NULL,
  `thongtin_en` text NOT NULL,
  `baohanh_vi` varchar(255) NOT NULL,
  `baohanh_en` varchar(255) NOT NULL,
  `thongso_vi` text NOT NULL,
  `thongso_en` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `des_char` int(11) NOT NULL,
  `is_noindex` int(11) NOT NULL,
  `giaban` bigint(15) NOT NULL,
  `giacu` int(11) NOT NULL,
  `mota_vi` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `name_vi` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `mota_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `luotxem` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table_product`
--

INSERT INTO `table_product` (`id`, `id_cat`, `id_list`, `id_item`, `id_sub`, `id_hangxe`, `id_model`, `id_dongco`, `id_namsx`, `id_tinhthanh`, `id_quanhuyen`, `id_phuongxa`, `id_duongpho`, `id_loaidat`, `sophong`, `huong`, `diachi_vi`, `ngayhethan`, `phi_hcm`, `phi_khac`, `tinhtrang`, `tags`, `rate`, `type`, `noibat`, `thongdung`, `banchay`, `photo`, `thumb`, `ten_vi`, `masp`, `soluong`, `dientich`, `dienthoai`, `tenkhongdau`, `khuyenmai_vi`, `khuyenmai_en`, `thongtin_vi`, `thongtin_en`, `baohanh_vi`, `baohanh_en`, `thongso_vi`, `thongso_en`, `title`, `keywords`, `description`, `des_char`, `is_noindex`, `giaban`, `giacu`, `mota_vi`, `noidung_vi`, `name_vi`, `name_en`, `ten_en`, `mota_en`, `noidung_en`, `stt`, `hienthi`, `ngaytao`, `ngaysua`, `luotxem`) VALUES
(1, 0, 2, 0, 0, '', '', '', '', 3, 2, 0, 0, 7, '0', '', '', '', 0, 0, 1, '', 0, 'product', 1, 0, 0, 'h1-4363.png', 'h1-4363_285x255.png', 'Thiết kế nội thất nhà bếp', '', 0, '', '', 'thiet-ke-noi-that-nha-bep', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 3500000000, 0, '', '', '', '', '', '', '', 1, 1, 1475642202, 1475829441, 7),
(2, 0, 1, 0, 0, '', '', '', '', 2, 1, 1, 1, 6, '5 phòng ngủ,  4 phòng tắm', 'Tây', '355A', '2016-10-29', 0, 0, 1, '4,2,6', 0, 'product', 1, 0, 0, 'h1-9255.png', 'h1-9255_285x255.png', 'Thiết kế nội thất phòng khách', '', 0, '30mx35m', '0988 667 348', 'thiet-ke-noi-that-phong-khach', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 9560000000, 0, '', '<div -webkit-text-stroke:="" 0.1px="" font-size:="" line-height:="" new="" style="margin: 0px; padding: 0px; font-family: " times=""><span style="margin: 0px; padding: 0px; text-align: justify;">Không chỉ mang màu sắc hoa vào trong không gian sống, những mẫu <span style="margin: 0px; padding: 0px; font-weight: bold;"><a href="http://afamily.vn/giay-dan-tuong.htm" style="margin: 0px; padding: 0px; text-decoration: none; outline: none; -webkit-appearance: none;" target="_blank" title="giấy dán tường">giấy dán tường</a></span> dưới đây còn tạo được chiều sâu cho không gian nhà bạn, khiến bạn có cảm giác như đang lạc vào một khu vườn trăm hoa đua nở bất tận.</span></div>\r\n\r\n<div -webkit-text-stroke:="" 0.1px="" font-size:="" line-height:="" new="" style="margin: 0px; padding: 0px; font-family: " times="">\r\n<div style="margin: 0px; padding: 0px; text-align: justify;">\r\n<div style="margin: 0px; padding: 0px; text-align: center;">\r\n<div style="margin: 0px; padding: 0px;"> </div>\r\n\r\n<div style="margin: 0px; padding: 0px;"><img alt="" src="http://afamily1.mediacdn.vn/M8N20d5STCm5E9QXKSmE0TPi2bNc59/Image/2016/09/nhung-mau-giay-dan-tuong-khien-ban-nhu-lac-vao-khu-vuon-tram-hoa-dua-no_4fa9a2ed7c.jpg" style="margin: 0px; padding: 0px; border: none; outline: none; -webkit-appearance: none; max-width: 100%;" /></div>\r\n\r\n<div style="margin: 0px; padding: 0px;"><span style="margin: 0px; padding: 0px; font-style: italic;">Bất kỳ ai cũng đều mơ ước được một lần đứng giữa cánh đồng hoa Lavender trải dài bất tận của nước Pháp xinh đẹp, nhưng tất nhiên không phải ai trong số chúng ta cũng đều đã thực hiện được ước mơ này. Trên hành trình chạm tay vào ước mơ, sao không thử ngắm nhìn ước mơ mỗi ngày để có thêm động lực nhỉ? Hãy dùng ngay <span style="margin: 0px; padding: 0px; font-weight: bold;">giấy dán tường</span> hình cánh đồng hoa Lavender tím tuyệt đẹp này để trang trí cho không gian nhà bạn.</span></div>\r\n</div>\r\n\r\n<div style="margin: 0px; padding: 0px; text-align: center;"> </div>\r\n\r\n<div style="margin: 0px; padding: 0px; text-align: center;"><img alt="" src="http://afamily1.mediacdn.vn/M8N20d5STCm5E9QXKSmE0TPi2bNc59/Image/2016/09/nhung-mau-giay-dan-tuong-khien-ban-nhu-lac-vao-khu-vuon-tram-hoa-dua-no_8b91b9f398.jpg" style="margin: 0px; padding: 0px; border: none; outline: none; -webkit-appearance: none; max-width: 100%; opacity: 0.9;" /></div>\r\n\r\n<div style="margin: 0px; padding: 0px; text-align: center;"><span style="margin: 0px; padding: 0px; font-style: italic;">Hay tưởng tượng bạn đang ở Bibury nước Anh với những bức tường cổ và những giỏ hoa treo bên ngoài nhà tuyệt đẹp như thế này. Mẫu <span style="margin: 0px; padding: 0px; font-weight: bold;">giấy dán tường</span> này thích hợp nhất cho <a href="http://afamily.vn/goc-thu-gian.htm" style="margin: 0px; padding: 0px; text-decoration: none; outline: none; -webkit-appearance: none;" target="_blank" title="góc thư giãn">góc thư giãn</a>đọc sách và thưởng trà,</span></div>\r\n</div>\r\n</div>\r\n', '', '', '', '', '', 1, 1, 1475642274, 1475826299, 40),
(3, 3, 1, 0, 0, '', '', '', '', 2, 3, 2, 2, 6, '3', 'Đông Nam', '', '0', 0, 0, 1, '', 0, 'product', 1, 0, 0, '', '', 'Thiết kế nội thất phòng ngủ', '', 0, '20mx25m', '0988 667 348', 'thiet-ke-noi-that-phong-ngu', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 5300000000, 0, '', '', '', '', '', '', '', 1, 1, 1475642309, 1475744201, 0),
(4, 3, 1, 0, 0, '', '', '', '', 2, 1, 1, 1, 5, '0', '', '', '0', 0, 0, 1, '', 0, 'product', 1, 0, 0, '', '', 'Chung cư hoàng anh gia lai', '', 0, '', '', 'chung-cu-hoang-anh-gia-lai', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 'Nghiệm thu xác nhận khi công trình đã thi công bảo đảm đúng thiết kế, theo quy chuẩn, tiêu chuẩn xây dựng và bảo đảm chất lượng và tiến độ', '', '', '', '', '', '', 1, 1, 1475642334, 1475738566, 0);

-- --------------------------------------------------------

--
-- Structure de la table `table_product_cat`
--

CREATE TABLE IF NOT EXISTS `table_product_cat` (
`id` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table_product_cat`
--

INSERT INTO `table_product_cat` (`id`, `id_list`, `type`, `ten_vi`, `ten_en`, `tenkhongdau`, `mota`, `title`, `keywords`, `description`, `photo`, `thumb`, `stt`, `hienthi`, `ngaytao`, `ngaysua`) VALUES
(1, 2, 'product', 'Nhà đất cho thuê tp hồ chí minh', '', 'nha-dat-cho-thue-tp-ho-chi-minh', '', '', '', '', '', '', 1, 1, 1475631484, 1475727607),
(2, 1, 'product', 'Nhà đất bán nhà bè', '', 'nha-dat-ban-nha-be', '', '', '', '', '', '', 1, 1, 1475631494, 1475727594),
(3, 1, 'product', 'Nhà đất bán tp hồ chí minh', '', 'nha-dat-ban-tp-ho-chi-minh', '', '', '', '', '', '', 1, 1, 1475631504, 1475727584);

-- --------------------------------------------------------

--
-- Structure de la table `table_product_item`
--

CREATE TABLE IF NOT EXISTS `table_product_item` (
`id` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `id_cat` int(10) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `table_product_list`
--

CREATE TABLE IF NOT EXISTS `table_product_list` (
`id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `noibat` int(10) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `mota_vi` text NOT NULL,
  `mota_en` text NOT NULL,
  `name_vi` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `quangcao` varchar(255) NOT NULL,
  `quangcao_thumb` varchar(255) NOT NULL,
  `links` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table_product_list`
--

INSERT INTO `table_product_list` (`id`, `type`, `noibat`, `ten_vi`, `ten_en`, `mota_vi`, `mota_en`, `name_vi`, `name_en`, `tenkhongdau`, `quangcao`, `quangcao_thumb`, `links`, `title`, `keywords`, `description`, `photo`, `thumb`, `stt`, `hienthi`, `ngaytao`, `ngaysua`) VALUES
(1, 'product', 1, 'BĐS bán', '', '', '', '', '', 'bds-ban', '', '', '', 'BĐS bán', 'BĐS bán', 'BĐS bán', '', '', 1, 1, 1475727503, 0),
(2, 'product', 1, 'BĐS cho thuê', '', '', '', '', '', 'bds-cho-thue', '', '', '', 'BĐS cho thuê', 'BĐS cho thuê', 'BĐS cho thuê', '', '', 2, 1, 1475727514, 0),
(3, 'product', 0, 'Sang nhượng', '', '', '', '', '', 'sang-nhuong', '', '', '', 'Sang nhượng', 'Sang nhượng', 'Sang nhượng', '', '', 3, 1, 1475727528, 0),
(4, 'product', 1, 'Dự án', '', '', '', '', '', 'du-an', '', '', '', 'Dự án', 'Dự án', 'Dự án', '', '', 4, 1, 1475728702, 0);

-- --------------------------------------------------------

--
-- Structure de la table `table_product_photo`
--

CREATE TABLE IF NOT EXISTS `table_product_photo` (
`id` int(10) unsigned NOT NULL,
  `id_product` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `thumb` varchar(225) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(1024) NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table_product_photo`
--

INSERT INTO `table_product_photo` (`id`, `id_product`, `type`, `photo`, `thumb`, `ten`, `mota`, `stt`, `hienthi`, `ngaytao`, `ngaysua`) VALUES
(1, 2, 'product', '54-4870.jpg', '54-4870_285x255.jpg', '', '', 0, 1, 0, 0),
(2, 2, 'product', '55-636.jpg', '55-636_285x255.jpg', '', '', 0, 1, 0, 0),
(3, 2, 'product', '56-4786.jpg', '56-4786_285x255.jpg', '', '', 0, 1, 0, 0),
(4, 2, 'product', '57-1833.jpg', '57-1833_285x255.jpg', '', '', 0, 1, 0, 0),
(5, 2, 'product', '58-9439.jpg', '58-9439_285x255.jpg', '', '', 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `table_product_sub`
--

CREATE TABLE IF NOT EXISTS `table_product_sub` (
`id` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `table_quan`
--

CREATE TABLE IF NOT EXISTS `table_quan` (
`id` int(11) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `id_cat` int(11) NOT NULL DEFAULT '0',
  `stt` int(10) NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM AUTO_INCREMENT=684 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `table_quan`
--

INSERT INTO `table_quan` (`id`, `ten`, `id_cat`, `stt`, `hienthi`) VALUES
(2, 'Quận Ba Đình', 17, 1, 1),
(3, 'Quận Tây Hồ', 17, 1, 1),
(4, 'Quận Hoàn Kiếm', 17, 1, 1),
(5, 'Quận Hai Bà Trưng', 17, 1, 1),
(6, 'Quận Đống Đa', 17, 1, 1),
(7, 'Quận Thanh Xuân', 17, 1, 1),
(8, 'Quận Cầu Giấy', 17, 1, 1),
(9, 'Huyện Sóc Sơn', 17, 1, 1),
(10, 'Huyện Đông Anh', 17, 1, 1),
(11, 'Huyện Gia Lâm', 17, 1, 1),
(12, 'Huyện Từ Liêm', 17, 1, 1),
(13, 'Huyện Thanh Trì', 17, 1, 1),
(15, 'Quận Hồng Bàng', 23, 1, 1),
(16, 'Quận Ngô Quyền', 23, 1, 1),
(17, 'Quận Lê Chân', 23, 1, 1),
(18, 'Quận Kiến An', 23, 1, 1),
(19, 'Thị xã Đồ Sơn', 23, 1, 1),
(20, 'Huyện Thuỷ Nguyên', 23, 1, 1),
(21, 'Huyện An Hải', 23, 1, 1),
(22, 'Huyện An Lão', 23, 1, 1),
(23, 'Huyện Kiến Thuỵ', 23, 1, 1),
(24, 'Huyện Tiên Lãng', 23, 1, 1),
(25, 'Huyện Vĩnh Bảo', 23, 1, 1),
(26, 'Huyện Cát Hải', 23, 1, 1),
(27, 'Huyện Bạch Long Vĩ', 23, 1, 1),
(29, 'Thị xã Vĩnh Yên', 55, 1, 1),
(30, 'Huyện Lập Thạch', 55, 1, 1),
(31, 'Huyện Tam Dương', 55, 1, 1),
(32, 'Huyện Vĩnh Tường', 55, 1, 1),
(33, 'Huyện Yên Lạc', 55, 1, 1),
(34, 'Huyện Mê Linh', 55, 1, 1),
(35, 'Huyện Bình Xuyên', 55, 1, 1),
(37, 'Thị xã Hà Đông', 18, 1, 1),
(38, 'Thị xã Sơn Tây', 18, 1, 1),
(39, 'Huyện Ba Vì', 18, 1, 1),
(40, 'Huyện Phúc Thọ', 18, 1, 1),
(41, 'Huyện Đan Phượng', 18, 1, 1),
(42, 'Huyện Thạch Thất', 18, 1, 1),
(43, 'Huyện Hoài Đức', 18, 1, 1),
(44, 'Huyện Quốc Oai', 18, 1, 1),
(45, 'Huyện Chương Mỹ', 18, 1, 1),
(46, 'Huyện Thanh Oai', 18, 1, 1),
(47, 'Huyện Thường Tín', 18, 1, 1),
(48, 'Huyện Mỹ Đức', 18, 1, 1),
(49, 'Huyện ứng Hòa', 18, 1, 1),
(50, 'Huyện Phú Xuyên', 18, 1, 1),
(52, 'Thị xã Bắc Ninh', 9, 1, 1),
(53, 'Huyện Yên Phong', 9, 1, 1),
(54, 'Huyện Quế Võ', 9, 1, 1),
(55, 'Huyện Tiên Du', 9, 1, 1),
(56, 'Huyện Từ Sơn', 9, 1, 1),
(57, 'Huyện Thuận Thành', 9, 1, 1),
(58, 'Huyện Lương Tài', 9, 1, 1),
(59, 'Huyện Gia Bình', 9, 1, 1),
(61, 'Thành phố Hải Dương', 22, 1, 1),
(62, 'Huyện Chí Linh', 22, 1, 1),
(63, 'Huyện Nam Sách', 22, 1, 1),
(64, 'Huyện Thanh Hà', 22, 1, 1),
(65, 'Huyện Kinh Môn', 22, 1, 1),
(66, 'Huyện Kim Thành', 22, 1, 1),
(67, 'Huyện Gia Lộc', 22, 1, 1),
(68, 'Huyện Tứ Kỳ', 22, 1, 1),
(69, 'Huyện Cẩm Giàng', 22, 1, 1),
(70, 'Huyện Bình Giang', 22, 1, 1),
(71, 'Huyện Thanh Miện', 22, 1, 1),
(72, 'Huyện Ninh Giang', 22, 1, 1),
(74, 'Thị xã Hưng Yên', 21, 1, 1),
(75, 'Huyện Văn Lâm', 21, 1, 1),
(76, 'Huyện Mỹ Văn', 21, 1, 1),
(77, 'Huyện Yên Mỹ', 21, 1, 1),
(78, 'Huyện Châu Giang', 21, 1, 1),
(79, 'Huyện Khoái Châu', 21, 1, 1),
(80, 'Huyện Ân Thi', 21, 1, 1),
(81, 'Huyện Kim Động', 21, 1, 1),
(82, 'Huyện Phù Cừ', 21, 1, 1),
(83, 'Huyện Tiên Lữ', 21, 1, 1),
(85, 'Thị xã Phủ Lý', 16, 1, 1),
(86, 'Huyện Duy Tiên', 16, 1, 1),
(87, 'Huyện Kim Bảng', 16, 1, 1),
(88, 'Huyện Lý Nhân', 16, 1, 1),
(89, 'Huyện Thanh Liêm', 16, 1, 1),
(90, 'Huyện Bình Lục', 16, 1, 1),
(92, 'Thành phố Nam Định', 34, 1, 1),
(93, 'Huyện Vụ Bản', 34, 1, 1),
(94, 'Huyện Mỹ Lộc', 34, 1, 1),
(95, 'Huyện ý Yên', 34, 1, 1),
(96, 'Huyện Nam Trực', 34, 1, 1),
(97, 'Huyện Trực Ninh', 34, 1, 1),
(98, 'Huyện Xuân Trường', 34, 1, 1),
(99, 'Huyện Giao Thủy', 34, 1, 1),
(100, 'Huyện Nghĩa Hưng', 34, 1, 1),
(101, 'Huyện Hải Hậu', 34, 1, 1),
(103, 'Thị xã Thái Bình', 47, 1, 1),
(104, 'Huyện Quỳnh Phụ', 47, 1, 1),
(105, 'Huyện Hưng Hà', 47, 1, 1),
(106, 'Huyện Thái Thụy', 47, 1, 1),
(107, 'Huyện Đông Hưng', 47, 1, 1),
(108, 'Huyện Vũ Thư', 47, 1, 1),
(109, 'Huyện Kiến Xương', 47, 1, 1),
(110, 'Huyện Tiền Hải', 47, 1, 1),
(112, 'Thị xã Ninh Bình', 36, 1, 1),
(113, 'Thị xã Tam Điệp', 36, 1, 1),
(114, 'Huyện Nho Quan', 36, 1, 1),
(115, 'Huyện Gia Viễn', 36, 1, 1),
(116, 'Huyện Hoa Lư', 36, 1, 1),
(117, 'Huyện Yên Mô', 36, 1, 1),
(118, 'Huyện Yên Khánh', 36, 1, 1),
(119, 'Huyện Kim Sơn', 36, 1, 1),
(121, 'Thị xã Hà Giang', 15, 1, 1),
(122, 'Huyện Đồng Văn', 15, 1, 1),
(123, 'Huyện Mèo Vạc', 15, 1, 1),
(124, 'Huyện Yên Minh', 15, 1, 1),
(125, 'Huyện Quản Bạ', 15, 1, 1),
(126, 'Huyện Bắc Mê', 15, 1, 1),
(127, 'Huyện Hoàng Su Phì', 15, 1, 1),
(128, 'Huyện Vị Xuyên', 15, 1, 1),
(129, 'Huyện Xín Mần', 15, 1, 1),
(130, 'Huyện Bắc Quang', 15, 1, 1),
(132, 'Thị xã Cao Bằng', 11, 1, 1),
(133, 'Huyện Bảo Lạc', 11, 1, 1),
(134, 'Huyện Hà Quảng', 11, 1, 1),
(135, 'Huyện Thông Nông', 11, 1, 1),
(136, 'Huyện Trà Lĩnh', 11, 1, 1),
(137, 'Huyện Trùng Khánh', 11, 1, 1),
(138, 'Huyện Nguyên Bình', 11, 1, 1),
(139, 'Huyện Hoà An', 11, 1, 1),
(140, 'Huyện Quảng Hoà', 11, 1, 1),
(141, 'Huyện Hạ Lang', 11, 1, 1),
(142, 'Huyện Thạch An', 11, 1, 1),
(144, 'Thị xã Lào Cai', 31, 1, 1),
(145, 'Thị xã Cam Đường', 31, 1, 1),
(146, 'Huyện Mường Khương', 31, 1, 1),
(147, 'Huyện Bát Xát', 31, 1, 1),
(148, 'Huyện Bắc Hà', 31, 1, 1),
(149, 'Huyện Bảo Thắng', 31, 1, 1),
(150, 'Huyện Sa Pa', 31, 1, 1),
(151, 'Huyện Bảo Yên', 31, 1, 1),
(152, 'Huyện Than Uyên', 31, 1, 1),
(153, 'Huyện Văn Bàn', 31, 1, 1),
(155, 'Thị xã Bắc Kạn', 8, 1, 1),
(156, 'Huyện Ba Bể', 8, 1, 1),
(157, 'Huyện Ngân Sơn', 8, 1, 1),
(158, 'Huyện Chợ Đồn', 8, 1, 1),
(159, 'Huyện Na Rì', 8, 1, 1),
(160, 'Huyện Bạch Thông', 8, 1, 1),
(161, 'Huyện Chợ Mới', 8, 1, 1),
(163, 'Thị xã Lạng Sơn', 33, 1, 1),
(164, 'Huyện Tràng Định', 33, 1, 1),
(165, 'Huyện Văn Lãng', 33, 1, 1),
(166, 'Huyện Bình Gia', 33, 1, 1),
(167, 'Huyện Bắc Sơn', 33, 1, 1),
(168, 'Huyện Văn Quan', 33, 1, 1),
(169, 'Huyện Cao Lộc', 33, 1, 1),
(170, 'Huyện Lộc Bình', 33, 1, 1),
(171, 'Huyện Chi Lăng', 33, 1, 1),
(172, 'Huyện Đình Lập', 33, 1, 1),
(173, 'Huyện Hữu Lũng', 33, 1, 1),
(175, 'Thị xã Tuyên Quang', 52, 1, 1),
(176, 'Huyện Nà Hang', 52, 1, 1),
(177, 'Huyện Chiêm Hóa', 52, 1, 1),
(178, 'Huyện Hàm Yên', 52, 1, 1),
(179, 'Huyện Yên Sơn', 52, 1, 1),
(180, 'Huyện Sơn Dương', 52, 1, 1),
(182, 'Thị xã Yên Bái', 56, 1, 1),
(183, 'Thị xã Nghĩa Lộ', 56, 1, 1),
(184, 'Huyện Lục Yên', 56, 1, 1),
(185, 'Huyện Văn Yên', 56, 1, 1),
(186, 'Huyện Mù Căng Chải', 56, 1, 1),
(187, 'Huyện Trấn Yên', 56, 1, 1),
(188, 'Huyện Yên Bình', 56, 1, 1),
(189, 'Huyện Văn Chấn', 56, 1, 1),
(190, 'Huyện Trạm Tấu', 56, 1, 1),
(192, 'Thành phố Thái Nguyên', 48, 1, 1),
(193, 'Thị xã Sông Công', 48, 1, 1),
(194, 'Huyện Định Hóa', 48, 1, 1),
(195, 'Huyện Võ Nhai', 48, 1, 1),
(196, 'Huyện Phú Lương', 48, 1, 1),
(197, 'Huyện Đồng Hỷ', 48, 1, 1),
(198, 'Huyện Đại Từ', 48, 1, 1),
(199, 'Huyện Phú Bình', 48, 1, 1),
(200, 'Huyện Phổ Yên', 48, 1, 1),
(202, 'Thành phố Việt Trì', 38, 1, 1),
(203, 'Thị xã Phú Thọ', 38, 1, 1),
(204, 'Huyện Đoan Hùng', 38, 1, 1),
(205, 'Huyện Hạ Hoà', 38, 1, 1),
(206, 'Huyện Thanh Ba', 38, 1, 1),
(207, 'Huyện Phong Châu', 38, 1, 1),
(208, 'Huyện Lâm Thao', 38, 1, 1),
(209, 'Huyện Sông Thao', 38, 1, 1),
(210, 'Huyện Yên Lập', 38, 1, 1),
(211, 'Huyện Tam Thanh', 38, 1, 1),
(212, 'Huyện Thanh Thuỷ', 38, 1, 1),
(213, 'Huyện Thanh Sơn', 38, 1, 1),
(215, 'Thị xã Bắc Giang', 7, 1, 1),
(216, 'Huyện Yên Thế', 7, 1, 1),
(217, 'Huyện Tân Yên', 7, 1, 1),
(218, 'Huyện Lục Ngạn', 7, 1, 1),
(219, 'Huyện Hiệp Hòa', 7, 1, 1),
(220, 'Huyện Lạng Giang', 7, 1, 1),
(221, 'Huyện Sơn Động', 7, 1, 1),
(222, 'Huyện Lục Nam', 7, 1, 1),
(223, 'Huyện Việt Yên', 7, 1, 1),
(224, 'Huyện Yên Dũng', 7, 1, 1),
(226, 'Thành phố Hạ Long', 43, 1, 1),
(227, 'Thị xã Cẩm Phả', 43, 1, 1),
(228, 'Thị xã Uông Bí', 43, 1, 1),
(229, 'Huyện Bình Liêu', 43, 1, 1),
(230, 'Thị Xã Móng Cái', 43, 1, 1),
(231, 'Huyện Quảng Hà', 43, 1, 1),
(232, 'Huyện Tiên Yên', 43, 1, 1),
(233, 'Huyện Ba Chẽ', 43, 1, 1),
(234, 'Huyện Vân Đồn', 43, 1, 1),
(235, 'Huyện Hoành Bồ', 43, 1, 1),
(236, 'Huyện Đông Triều', 43, 1, 1),
(237, 'Huyện Cô Tô', 43, 1, 1),
(238, 'Huyện Yên Hưng', 43, 1, 1),
(240, 'Thị xã Điện Biên Phủ', 29, 1, 1),
(241, 'Thị xã Lai Châu', 29, 1, 1),
(242, 'Huyện Mường Tè', 29, 1, 1),
(243, 'Huyện Phong Thổ', 29, 1, 1),
(244, 'Huyện Sìn Hồ', 29, 1, 1),
(245, 'Huyện Mường Lay', 29, 1, 1),
(246, 'Huyện Tủa Chùa', 29, 1, 1),
(247, 'Huyện Tuần Giáo', 29, 1, 1),
(248, 'Huyện Điện Biên', 29, 1, 1),
(249, 'Huyện Điện Biên Đông', 29, 1, 1),
(251, 'Thị xã Sơn La', 45, 1, 1),
(252, 'Huyện Quỳnh Nhai', 45, 1, 1),
(253, 'Huyện Mường La', 45, 1, 1),
(254, 'Huyện Thuận Châu', 45, 1, 1),
(255, 'Huyện Bắc Yên', 45, 1, 1),
(256, 'Huyện Phù Yên', 45, 1, 1),
(257, 'Huyện Mai Sơn', 45, 1, 1),
(258, 'Huyện Sông Mã', 45, 1, 1),
(259, 'Huyện Yên Châu', 45, 1, 1),
(260, 'Huyện Mộc Châu', 45, 1, 1),
(262, 'Thị xã Hòa Bình', 20, 1, 1),
(263, 'Huyện Đà Bắc', 20, 1, 1),
(264, 'Huyện Mai Châu', 20, 1, 1),
(265, 'Huyện Kỳ Sơn', 20, 1, 1),
(266, 'Huyện Lương Sơn', 20, 1, 1),
(267, 'Huyện Kim Bôi', 20, 1, 1),
(268, 'Huyện Tân Lạc', 20, 1, 1),
(269, 'Huyện Lạc Sơn', 20, 1, 1),
(270, 'Huyện Lạc Thủy', 20, 1, 1),
(271, 'Huyện Yên Thủy', 20, 1, 1),
(273, 'Thành phố Thanh Hóa', 46, 1, 1),
(274, 'Thị xã Bỉm Sơn', 46, 1, 1),
(275, 'Thị xã Sầm Sơn', 46, 1, 1),
(276, 'Huyện Mường Lát', 46, 1, 1),
(277, 'Huyện Quan Hóa', 46, 1, 1),
(278, 'Huyện Quan Sơn', 46, 1, 1),
(279, 'Huyện Bá Thước', 46, 1, 1),
(280, 'Huyện Cẩm Thủy', 46, 1, 1),
(281, 'Huyện Lang Chánh', 46, 1, 1),
(282, 'Huyện Thạch Thành', 46, 1, 1),
(283, 'Huyện Ngọc Lạc', 46, 1, 1),
(284, 'Huyện Thường Xuân', 46, 1, 1),
(285, 'Huyện Như Xuân', 46, 1, 1),
(286, 'Huyện Như Thanh', 46, 1, 1),
(287, 'Huyện Vĩnh Lộc', 46, 1, 1),
(288, 'Huyện Hà Trung', 46, 1, 1),
(289, 'Huyện Nga Sơn', 46, 1, 1),
(290, 'Huyện Yên Định', 46, 1, 1),
(291, 'Huyện Thọ Xuân', 46, 1, 1),
(292, 'Huyện Hậu Lộc', 46, 1, 1),
(293, 'Huyện Thiệu Hoá', 46, 1, 1),
(294, 'Huyện Hoằng Hóa', 46, 1, 1),
(295, 'Huyện Đông Sơn', 46, 1, 1),
(296, 'Huyện Triệu Sơn', 46, 1, 1),
(297, 'Huyện Quảng Xương', 46, 1, 1),
(298, 'Huyện Nông Cống', 46, 1, 1),
(299, 'Huyện Tĩnh Gia', 46, 1, 1),
(301, 'Thành phố Vinh', 35, 1, 1),
(302, 'Thị xã Cửa Lò', 35, 1, 1),
(303, 'Huyện Quế Phong', 35, 1, 1),
(304, 'Huyện Quỳ Châu', 35, 1, 1),
(305, 'Huyện Kỳ Sơn', 35, 1, 1),
(306, 'Huyện Quỳ Hợp', 35, 1, 1),
(307, 'Huyện Nghĩa Đàn', 35, 1, 1),
(308, 'Huyện Tương Dương', 35, 1, 1),
(309, 'Huyện Quỳnh Lưu', 35, 1, 1),
(310, 'Huyện Tân Kỳ', 35, 1, 1),
(311, 'Huyện Con Cuông', 35, 1, 1),
(312, 'Huyện Yên Thành', 35, 1, 1),
(313, 'Huyện Diễn Châu', 35, 1, 1),
(314, 'Huyện Anh Sơn', 35, 1, 1),
(315, 'Huyện Đô Lương', 35, 1, 1),
(316, 'Huyện Thanh Chương', 35, 1, 1),
(317, 'Huyện Nghi Lộc', 35, 1, 1),
(318, 'Huyện Nam Đàn', 35, 1, 1),
(319, 'Huyện Hưng Nguyên', 35, 1, 1),
(321, 'Thị xã Hà Tĩnh', 19, 1, 1),
(322, 'Thị xã Hồng Lĩnh', 19, 1, 1),
(323, 'Huyện Nghi Xuân', 19, 1, 1),
(324, 'Huyện Đức Thọ', 19, 1, 1),
(325, 'Huyện Hương Sơn', 19, 1, 1),
(326, 'Huyện Can Lộc', 19, 1, 1),
(327, 'Huyện Thạch Hà', 19, 1, 1),
(328, 'Huyện Cẩm Xuyên', 19, 1, 1),
(329, 'Huyện Hương Khê', 19, 1, 1),
(330, 'Huyện Kỳ Anh', 19, 1, 1),
(332, 'Thị xã Đồng Hới', 40, 1, 1),
(333, 'Huyện Tuyên Hóa', 40, 1, 1),
(334, 'Huyện Minh Hóa', 40, 1, 1),
(335, 'Huyện Quảng Trạch', 40, 1, 1),
(336, 'Huyện Bố Trạch', 40, 1, 1),
(337, 'Huyện Quảng Ninh', 40, 1, 1),
(338, 'Huyện Lệ Thủy', 40, 1, 1),
(340, 'Thị xã Đông Hà', 44, 1, 1),
(341, 'Thị xã Quảng Trị', 44, 1, 1),
(342, 'Huyện Vĩnh Linh', 44, 1, 1),
(343, 'Huyện Gio Linh', 44, 1, 1),
(344, 'Huyện Cam Lộ', 44, 1, 1),
(345, 'Huyện Triệu Phong', 44, 1, 1),
(346, 'Huyện Hải Lăng', 44, 1, 1),
(347, 'Huyện Hướng Hóa', 44, 1, 1),
(348, 'Huyện Đa Krông', 44, 1, 1),
(350, 'Thành phố Huế', 49, 1, 1),
(351, 'Huyện Phong Điền', 49, 1, 1),
(352, 'Huyện Quảng Điền', 49, 1, 1),
(353, 'Huyện Hương Trà', 49, 1, 1),
(354, 'Huyện Phú Vang', 49, 1, 1),
(355, 'Huyện Hương Thủy', 49, 1, 1),
(356, 'Huyện Phú Lộc', 49, 1, 1),
(357, 'Huyện A Lưới', 49, 1, 1),
(358, 'Huyện Nam Đông', 49, 1, 1),
(360, 'Quận Hải Châu', 57, 1, 1),
(361, 'Quận Thanh Khê', 57, 1, 1),
(362, 'Quận Sơn Trà', 57, 1, 1),
(363, 'Quận Ngũ Hành Sơn', 57, 1, 1),
(364, 'Quận Liên Chiểu', 57, 1, 1),
(365, 'Huyện Hoà Vang', 57, 1, 1),
(366, 'Huyện Đảo Hoàng Sa', 57, 1, 1),
(368, 'Thị xã Tam Kỳ', 41, 1, 1),
(369, 'Thị xã Hội An', 41, 1, 1),
(370, 'Huyện Hiên', 41, 1, 1),
(371, 'Huyện Đại Lộc', 41, 1, 1),
(372, 'Huyện Điện Bàn', 41, 1, 1),
(373, 'Huyện Duy Xuyên', 41, 1, 1),
(374, 'Huyện Giằng', 41, 1, 1),
(375, 'Huyện Thăng Bình', 41, 1, 1),
(376, 'Huyện Quế Sơn', 41, 1, 1),
(377, 'Huyện Hiệp Đức', 41, 1, 1),
(378, 'Huyện Tiên Phước', 41, 1, 1),
(379, 'Huyện Phước Sơn', 41, 1, 1),
(380, 'Huyện Núi Thành', 41, 1, 1),
(381, 'Huyện Trà My', 41, 1, 1),
(383, 'Thị xã Quảng Ngãi', 42, 1, 1),
(384, 'Huyện Lý Sơn', 42, 1, 1),
(385, 'Huyện Bình Sơn', 42, 1, 1),
(386, 'Huyện Trà Bồng', 42, 1, 1),
(387, 'Huyện Sơn Tịnh', 42, 1, 1),
(388, 'Huyện Sơn Tây', 42, 1, 1),
(389, 'Huyện Sơn Hà', 42, 1, 1),
(390, 'Huyện Tư Nghĩa', 42, 1, 1),
(391, 'Huyện Nghĩa Hành', 42, 1, 1),
(392, 'Huyện Minh Long', 42, 1, 1),
(393, 'Huyện Mộ Đức', 42, 1, 1),
(394, 'Huyện Đức Phổ', 42, 1, 1),
(395, 'Huyện Ba Tơ', 42, 1, 1),
(397, 'Thành phố Qui Nhơn', 6, 1, 1),
(398, 'Huyện An Lão', 6, 1, 1),
(399, 'Huyện Hoài Nhơn', 6, 1, 1),
(400, 'Huyện Hoài Ân', 6, 1, 1),
(401, 'Huyện Phù Mỹ', 6, 1, 1),
(402, 'Huyện Vĩnh Thạnh', 6, 1, 1),
(403, 'Huyện Phù Cát', 6, 1, 1),
(404, 'Huyện Tây Sơn', 6, 1, 1),
(405, 'Huyện An Nhơn', 6, 1, 1),
(406, 'Huyện Tuy Phước', 6, 1, 1),
(407, 'Huyện Vân Canh', 6, 1, 1),
(409, 'Thành phố Tuy Hòa', 39, 1, 1),
(410, 'Huyện Đồng Xuân', 39, 1, 1),
(411, 'Huyện Sông Cầu', 39, 1, 1),
(412, 'Huyện Tuy An', 39, 1, 1),
(413, 'Huyện Sơn Hòa', 39, 1, 1),
(414, 'Huyện Đông Hòa', 39, 1, 1),
(415, 'Huyện Sông Hinh', 39, 1, 1),
(417, 'Thành phố Nha Trang', 25, 1, 1),
(418, 'Huyện Vạn Ninh', 25, 1, 1),
(419, 'Huyện Ninh Hòa', 25, 1, 1),
(420, 'Huyện Diên Khánh', 25, 1, 1),
(421, 'Huyện Cam Ranh', 25, 1, 1),
(422, 'Huyện Khánh Vĩnh', 25, 1, 1),
(423, 'Huyện Khánh Sơn', 25, 1, 1),
(424, 'Huyện Trường Sa', 25, 1, 1),
(426, 'Thị xã Kon Tum', 28, 1, 1),
(427, 'Huyện Đắk Glei', 28, 1, 1),
(428, 'Huyện Ngọc Hồi', 28, 1, 1),
(429, 'Huyện Đắk Tô', 28, 1, 1),
(430, 'Huyện Kon Plông', 28, 1, 1),
(431, 'Huyện Đak Hà', 28, 1, 1),
(432, 'Huyện Sa Thầy', 28, 1, 1),
(434, 'Thị xã Pleiku', 14, 1, 1),
(435, 'Huyện KBang', 14, 1, 1),
(436, 'Huyện Mang Yang', 14, 1, 1),
(437, 'Huyện Chư Păh', 14, 1, 1),
(438, 'Huyện Ia Grai', 14, 1, 1),
(439, 'Huyện An Khê', 14, 1, 1),
(440, 'Huyện Kông Chro', 14, 1, 1),
(441, 'Huyện Đức Cơ', 14, 1, 1),
(442, 'Huyện Chư Prông', 14, 1, 1),
(443, 'Huyện Chư Sê', 14, 1, 1),
(444, 'Huyện Ayun Pa', 14, 1, 1),
(445, 'Huyện Krông Pa', 14, 1, 1),
(447, 'Thành phố Buôn Ma Thuột', 58, 1, 1),
(448, 'Huyện Ea H''leo', 58, 1, 1),
(449, 'Huyện Ea Súp', 58, 1, 1),
(450, 'Huyện Krông Năng', 58, 1, 1),
(451, 'Huyện Krông Búk', 58, 1, 1),
(452, 'Huyện Buôn Đôn', 58, 1, 1),
(453, 'Huyện Cư M''gar', 58, 1, 1),
(454, 'Huyện Ea Kar', 58, 1, 1),
(455, 'Huyện M''Đrắk', 58, 1, 1),
(456, 'Huyện Krông Pắc', 58, 1, 1),
(457, 'Huyện Cư Jút', 64, 1, 1),
(458, 'Huyện Krông A Na', 58, 1, 1),
(459, 'Huyện Krông Bông', 58, 1, 1),
(460, 'Huyện Đắk Mil', 64, 1, 1),
(461, 'Huyện Krông Nô', 64, 1, 1),
(462, 'Huyện Lắk', 58, 1, 1),
(463, 'Huyện Đắk R''Lấp', 58, 1, 1),
(464, 'Huyện Đăk Glong', 64, 1, 1),
(466, 'Quận 1', 24, 1, 1),
(467, 'Quận 2', 24, 2, 1),
(468, 'Quận 3', 24, 1, 1),
(469, 'Quận 4', 24, 1, 1),
(470, 'Quận 5', 24, 1, 1),
(471, 'Quận 6', 24, 1, 1),
(472, 'Quận 7', 24, 1, 1),
(473, 'Quận 8', 24, 1, 1),
(474, 'Quận 9', 24, 1, 1),
(475, 'Quận 10', 24, 1, 1),
(476, 'Quận 11', 24, 1, 1),
(477, 'Quận 12', 24, 1, 1),
(478, 'Quận Gò Vấp', 24, 1, 1),
(479, 'Quận Tân Bình', 24, 1, 1),
(480, 'Quận Bình Thạnh', 24, 1, 1),
(481, 'Quận Phú Nhuận', 24, 1, 1),
(482, 'Quận Thủ Đức', 24, 1, 1),
(483, 'Huyện Củ Chi', 24, 1, 1),
(484, 'Huyện Hóc Môn', 24, 1, 1),
(485, 'Huyện Bình Chánh', 24, 1, 1),
(486, 'Huyện Nhà Bè', 24, 1, 1),
(487, 'Huyện Cần Giờ', 24, 1, 1),
(489, 'Thành phố Đà Lạt', 32, 1, 1),
(490, 'Thị xã Bảo Lộc', 32, 1, 1),
(491, 'Huyện Lạc Dương', 32, 1, 1),
(492, 'Huyện Đơn Dương', 32, 1, 1),
(493, 'Huyện Đức Trọng', 32, 1, 1),
(494, 'Huyện Lâm Hà', 32, 1, 1),
(495, 'Huyện Bảo Lâm', 32, 1, 1),
(496, 'Huyện Di Linh', 32, 1, 1),
(497, 'Huyện Đạ Huoai', 32, 1, 1),
(498, 'Huyện Đạ Tẻh', 32, 1, 1),
(499, 'Huyện Cát Tiên', 32, 1, 1),
(501, 'Thị xã Phan Rang-Tháp Chàm', 37, 1, 1),
(502, 'Huyện Ninh Sơn', 37, 1, 1),
(503, 'Huyện Ninh Hải', 37, 1, 1),
(504, 'Huyện Ninh Phước', 37, 1, 1),
(506, 'Huyện Đồng Phú', 4, 1, 1),
(507, 'Huyện Phước Long', 4, 1, 1),
(508, 'Huyện Lộc Ninh', 4, 1, 1),
(509, 'Huyện Bù Đăng', 4, 1, 1),
(510, 'Huyện Bình Long', 4, 1, 1),
(512, 'Thị xã Tây Ninh', 53, 1, 1),
(513, 'Huyện Tân Biên', 53, 1, 1),
(514, 'Huyện Tân Châu', 53, 1, 1),
(515, 'Huyện Dương Minh Châu', 53, 1, 1),
(516, 'Huyện Châu Thành', 53, 1, 1),
(517, 'Huyện Hòa Thành', 53, 1, 1),
(518, 'Huyện Bến Cầu', 53, 1, 1),
(519, 'Huyện Gò Dầu', 53, 1, 1),
(520, 'Huyện Trảng Bàng', 53, 1, 1),
(522, 'Thị xã Thủ Dầu Một', 3, 1, 1),
(523, 'Huyện Bến Cát', 3, 1, 1),
(524, 'Huyện Tân Uyên', 3, 1, 1),
(525, 'Huyện Thuận An', 3, 1, 1),
(527, 'Thành phố Biên Hòa', 59, 1, 1),
(528, 'Huyện Tân Phú', 59, 1, 1),
(529, 'Huyện Định Quán', 59, 1, 1),
(530, 'Huyện Vĩnh Cừu', 59, 1, 1),
(531, 'Huyện Thống Nhất', 59, 1, 1),
(532, 'Huyện Long Khánh', 59, 1, 1),
(533, 'Huyện Xuân Lộc', 59, 1, 1),
(534, 'Huyện Long Thành', 59, 1, 1),
(535, 'Huyện Nhơn Trạch', 59, 1, 1),
(537, 'Thị xã Phan Thiết', 5, 1, 1),
(538, 'Huyện Tuy Phong', 5, 1, 1),
(539, 'Huyện Bắc Bình', 5, 1, 1),
(540, 'Huyện Hàm Thuận Bắc', 5, 1, 1),
(541, 'Huyện Hàm Thuận Nam', 5, 1, 1),
(542, 'Huyện Tánh Linh', 5, 1, 1),
(543, 'Huyện Hàm Tân', 5, 1, 1),
(544, 'Huyện Đức Linh', 5, 1, 1),
(545, 'Huyện Phú Quí', 5, 1, 1),
(547, 'Thành phố Vũng Tầu', 2, 1, 1),
(548, 'Thị xã Bà Rịa', 2, 1, 1),
(549, 'Huyện Châu Đức', 2, 1, 1),
(550, 'Huyện Xuyên Mộc', 2, 1, 1),
(551, 'Huyện Tân Thành', 2, 1, 1),
(552, 'Huyện Long Đất', 2, 1, 1),
(553, 'Huyện Côn Đảo', 2, 1, 1),
(555, 'Thị xã Tân An', 30, 1, 1),
(556, 'Huyện Tân Hưng', 30, 1, 1),
(557, 'Huyện Vĩnh Hưng', 30, 1, 1),
(558, 'Huyện Mộc Hóa', 30, 1, 1),
(559, 'Huyện Tân Thạnh', 30, 1, 1),
(560, 'Huyện Thạnh Hóa', 30, 1, 1),
(561, 'Huyện Đức Huệ', 30, 1, 1),
(562, 'Huyện Đức Hòa', 30, 1, 1),
(563, 'Huyện Bến Lức', 30, 1, 1),
(564, 'Huyện Thủ Thừa', 30, 1, 1),
(565, 'Huyện Châu Thành', 30, 1, 1),
(566, 'Huyện Tân Trụ', 30, 1, 1),
(567, 'Huyện Cần Đước', 30, 1, 1),
(568, 'Huyện Cần Giuộc', 30, 1, 1),
(570, 'Thị xã Cao Lãnh', 60, 1, 1),
(571, 'Thị xã Sa Đéc', 60, 1, 1),
(572, 'Huyện Tân Hồng', 60, 1, 1),
(573, 'Huyện Hồng Ngự', 60, 1, 1),
(574, 'Huyện Tam Nông', 60, 1, 1),
(575, 'Huyện Thanh Bình', 60, 1, 1),
(576, 'Huyện Tháp Mười', 60, 1, 1),
(577, 'Huyện Cao Lãnh', 60, 1, 1),
(578, 'Huyện Lấp Vò', 60, 1, 1),
(579, 'Huyện Lai Vung', 60, 1, 1),
(580, 'Huyện Châu Thành', 60, 1, 1),
(582, 'Thành Phố Long Xuyên', 1, 1, 1),
(583, 'Thị xã Châu Đốc', 1, 1, 1),
(584, 'Huyện An Phú', 1, 1, 1),
(585, 'Huyện Tân Châu', 1, 1, 1),
(586, 'Huyện Phú Tân', 1, 1, 1),
(587, 'Huyện Châu Phú', 1, 1, 1),
(588, 'Huyện Tịnh Biên', 1, 1, 1),
(589, 'Huyện Tri Tôn', 1, 1, 1),
(590, 'Huyện Chợ Mới', 1, 1, 1),
(591, 'Huyện Châu Thành', 1, 1, 1),
(592, 'Huyện Thoại Sơn', 1, 1, 1),
(594, 'Thành phố Mỹ Tho', 50, 1, 1),
(595, 'Thị xã Gò Công', 50, 1, 1),
(596, 'Huyện Tân Phước', 50, 1, 1),
(597, 'Huyện Châu Thành', 50, 1, 1),
(598, 'Huyện Cai Lậy', 50, 1, 1),
(599, 'Huyện Chợ Gạo', 50, 1, 1),
(600, 'Huyện Cái Bè', 50, 1, 1),
(601, 'Huyện Gò Công Tây', 50, 1, 1),
(602, 'Huyện Gò Công Đông', 50, 1, 1),
(604, 'Thị xã Vĩnh Long', 54, 1, 1),
(605, 'Huyện Long Hồ', 54, 1, 1),
(606, 'Huyện Mang Thít', 54, 1, 1),
(607, 'Huyện Bình Minh', 54, 1, 1),
(608, 'Huyện Tam Bình', 54, 1, 1),
(609, 'Huyện Trà Ôn', 54, 1, 1),
(610, 'Huyện Vũng Liêm', 54, 1, 1),
(612, 'Thị xã Bến Tre', 10, 1, 1),
(613, 'Huyện Châu Thành', 10, 1, 1),
(614, 'Huyện Chợ Lách', 10, 1, 1),
(615, 'Huyện Mỏ Cày', 10, 1, 1),
(616, 'Huyện Giồng Trôm', 10, 1, 1),
(617, 'Huyện Bình Đại', 10, 1, 1),
(618, 'Huyện Ba Tri', 10, 1, 1),
(619, 'Huyện Thạnh Phú', 10, 1, 1),
(621, 'Thị xã Rạch Giá', 27, 1, 1),
(622, 'Huyện Hà Tiên', 27, 1, 1),
(623, 'Huyện Hòn Đất', 27, 1, 1),
(624, 'Huyện Tân Hiệp', 27, 1, 1),
(625, 'Huyện Châu Thành', 27, 1, 1),
(626, 'Huyện Giồng Giềng', 27, 1, 1),
(627, 'Huyện Gò Quao', 27, 1, 1),
(628, 'Huyện An Biên', 27, 1, 1),
(629, 'Huyện An Minh', 27, 1, 1),
(630, 'Huyện Vĩnh Thuận', 27, 1, 1),
(631, 'Huyện Phú Quốc', 27, 1, 1),
(632, 'Huyện Kiên Hải', 27, 1, 1),
(633, 'Thị xã Hà Tiên', 27, 1, 1),
(635, 'Thành phố Cần Thơ', 13, 1, 1),
(636, 'Thị xã Vị Thanh', 13, 1, 1),
(637, 'Huyện Thốt Nốt', 13, 1, 1),
(638, 'Huyện Ô Môn', 13, 1, 1),
(639, 'Huyện Châu Thành', 13, 1, 1),
(640, 'Huyện Phụng Hiệp', 13, 1, 1),
(641, 'Huyện Vị Thuỷ', 13, 1, 1),
(642, 'Huyện Long Mỹ', 13, 1, 1),
(644, 'Thị xã Trà Vinh', 51, 1, 1),
(645, 'Huyện Càng Long', 51, 1, 1),
(646, 'Huyện Châu Thành', 51, 1, 1),
(647, 'Huyện Cầu Kè', 51, 1, 1),
(648, 'Huyện Tiểu Cần', 51, 1, 1),
(649, 'Huyện Cầu Ngang', 51, 1, 1),
(650, 'Huyện Trà Cú', 51, 1, 1),
(651, 'Huyện Duyên Hải', 51, 1, 1),
(653, 'Thị xã Sóc Trăng', 62, 1, 1),
(654, 'Huyện Kế Sách', 62, 1, 1),
(655, 'Huyện Long Phú', 62, 1, 1),
(656, 'Huyện Mỹ Tú', 62, 1, 1),
(657, 'Huyện Mỹ Xuyên', 62, 1, 1),
(658, 'Huyện Thạnh Trị', 62, 1, 1),
(659, 'Huyện Vĩnh Châu', 62, 1, 1),
(661, 'Thị xã Bạc Liêu', 61, 1, 1),
(662, 'Huyện Hồng Dân', 61, 1, 1),
(663, 'Huyện Vĩnh Lợi', 61, 1, 1),
(664, 'Huyện Giá Rai', 61, 1, 1),
(666, 'Thị xã Cà Mau', 12, 1, 1),
(667, 'Huyện Thới Bình', 12, 1, 1),
(668, 'Huyện U Minh', 12, 1, 1),
(669, 'Huyện Trần Văn Thời', 12, 1, 1),
(670, 'Huyện Cái Nước', 12, 1, 1),
(671, 'Huyện Đầm Dơi', 12, 1, 1),
(672, 'Huyện Ngọc Hiển', 12, 1, 1),
(673, 'Huyện Đắk Song', 64, 1, 1),
(674, 'Thị xã Gia Nghĩa', 64, 1, 1),
(675, 'Huyện Tuy Đức', 64, 1, 1),
(676, 'Huyện Phú Hòa', 39, 1, 1),
(677, 'Huyện Tây Hoà', 39, 1, 1),
(678, 'Thị xã Đồng Xoài', 4, 1, 1),
(679, 'Quận Bình Tân', 24, 1, 1),
(680, 'Quận Tân Phú', 24, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `table_setting`
--

CREATE TABLE IF NOT EXISTS `table_setting` (
`id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `datve` varchar(255) NOT NULL,
  `bocongthuong` varchar(1000) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `slogan_vi` varchar(255) NOT NULL,
  `slogan_en` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dienthoai` varchar(255) NOT NULL,
  `diachi_vi` varchar(255) NOT NULL,
  `diachi_en` varchar(255) NOT NULL,
  `hotline` varchar(255) NOT NULL,
  `toado` varchar(255) NOT NULL,
  `bando` text NOT NULL,
  `website` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `analytics` text NOT NULL,
  `vchat` text NOT NULL,
  `lunchservice_vi` varchar(1000) NOT NULL,
  `dinnerservice_vi` varchar(1000) NOT NULL,
  `lunchservice_en` varchar(1000) NOT NULL,
  `dinnerservice_en` varchar(1000) NOT NULL,
  `giomocua` int(2) NOT NULL,
  `giodongcua` int(2) NOT NULL,
  `thu2` varchar(225) NOT NULL,
  `chunhat` varchar(225) NOT NULL,
  `tenph` varchar(225) NOT NULL,
  `dienthoaiph` varchar(225) NOT NULL,
  `emailph` varchar(225) NOT NULL,
  `ngoaigio` varchar(225) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table_setting`
--

INSERT INTO `table_setting` (`id`, `title`, `keywords`, `description`, `datve`, `bocongthuong`, `photo`, `ten_vi`, `ten_en`, `slogan_vi`, `slogan_en`, `email`, `dienthoai`, `diachi_vi`, `diachi_en`, `hotline`, `toado`, `bando`, `website`, `facebook`, `analytics`, `vchat`, `lunchservice_vi`, `dinnerservice_vi`, `lunchservice_en`, `dinnerservice_en`, `giomocua`, `giodongcua`, `thu2`, `chunhat`, `tenph`, `dienthoaiph`, `emailph`, `ngoaigio`) VALUES
(1, 'Factory', 'Factory', 'Factory', '', '', 'thanhtoan-6679.png', 'Factory', 'PTSC Holtel', 'FARM MILK - SỮA TƯƠI THƠM NGON TỪNG GIỌT', '', 'example@gmail.com', '0902 680 268', 'Mountain Drive, Kensington, London, UK', '155A Nam Ky Khoi Nghia - Ward 6 - District 3 - HCMC', '0917 322 939', '10.801976223725632,106.70027554027001', '', 'http://www.example.com', 'http://facebook.com/BIGBANG', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `table_slider`
--

CREATE TABLE IF NOT EXISTS `table_slider` (
`id` int(10) unsigned NOT NULL,
  `id_vitri` int(11) NOT NULL,
  `slider_vi` varchar(225) NOT NULL,
  `slider_en` varchar(225) NOT NULL,
  `ten_vi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `com` varchar(30) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table_slider`
--

INSERT INTO `table_slider` (`id`, `id_vitri`, `slider_vi`, `slider_en`, `ten_vi`, `ten_en`, `link`, `mota`, `stt`, `hienthi`, `com`) VALUES
(4, 0, 'banner-4026.png', '', '', '', '', '', 1, 1, 'banner_top'),
(7, 0, 'logo-1337.png', '', '', '', '', '', 1, 1, 'banner_giua'),
(13, 0, '6407029.jpg', '', 'hình 1', '', '', '', 1, 1, 'banner_phai');

-- --------------------------------------------------------

--
-- Structure de la table `table_tags`
--

CREATE TABLE IF NOT EXISTS `table_tags` (
`id` int(11) NOT NULL,
  `ten_vi` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `ten_en` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `tenkhongdau` varchar(255) CHARACTER SET utf8 NOT NULL,
  `hienthi` int(2) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `noibat` int(11) NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8 NOT NULL,
  `thumb` varchar(255) CHARACTER SET utf8 NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `keywords` varchar(1024) CHARACTER SET utf8 NOT NULL,
  `description` varchar(1024) CHARACTER SET utf8 NOT NULL,
  `stt` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `table_tags`
--

INSERT INTO `table_tags` (`id`, `ten_vi`, `ten_en`, `tenkhongdau`, `hienthi`, `ngaytao`, `ngaysua`, `noibat`, `photo`, `thumb`, `title`, `keywords`, `description`, `stt`) VALUES
(1, 'Áo cưới', '', 'ao-cuoi', 1, 1459481094, 1459492887, 0, '', '', 'Áo cưới', 'Áo cưới', 'Áo cưới', 1),
(2, 'Nokia', '', 'nokia', 1, 1459481109, 0, 0, '', '', '', '', '', 1),
(3, '6s', '', '6s', 1, 1459481120, 0, 0, '', '', '', '', '', 1),
(4, '6s Plus', '', '6s-plus', 1, 1459481128, 0, 0, '', '', '', '', '', 1),
(5, 'Galaxy', '', 'galaxy', 1, 1459481134, 0, 0, '', '', '', '', '', 1),
(6, 'gallaxy s7', '', 'gallaxy-s7', 1, 1459493748, 0, 0, '', '', '', '', '', 1),
(7, 'Iphone 7', '', 'iphone-7', 1, 1459493757, 0, 0, '', '', '', '', '', 1),
(8, 'iphone SE', 'iphone SE', 'iphone-se', 1, 1459493765, 1474360732, 0, '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `table_thanhvien`
--

CREATE TABLE IF NOT EXISTS `table_thanhvien` (
`id` int(10) unsigned NOT NULL,
  `gioithieu` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(225) NOT NULL,
  `hoten` varchar(225) NOT NULL,
  `dienthoai` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `diachi` varchar(225) NOT NULL,
  `gioitinh` varchar(100) NOT NULL,
  `ngaysinh` varchar(100) NOT NULL,
  `noidung` text NOT NULL,
  `stt` int(10) unsigned NOT NULL,
  `hienthi` tinyint(1) NOT NULL DEFAULT '0',
  `ngaytao` int(10) unsigned NOT NULL,
  `ngaysua` int(10) unsigned NOT NULL,
  `photo` varchar(225) NOT NULL,
  `keycode` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` int(2) NOT NULL,
  `thumb` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `table_tinh`
--

CREATE TABLE IF NOT EXISTS `table_tinh` (
`id` int(11) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `stt` int(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `table_tinh`
--

INSERT INTO `table_tinh` (`id`, `ten`, `hienthi`, `stt`) VALUES
(48, 'Thái Nguyên', 1, 0),
(47, 'Thái Bình', 1, 0),
(46, 'Thanh Hóa', 1, 0),
(45, 'Sơn La', 1, 0),
(44, 'Quảng Trị', 1, 0),
(43, 'Quảng Ninh', 1, 0),
(42, 'Quảng Ngãi', 1, 0),
(41, 'Quảng Nam', 1, 0),
(40, 'Quảng Bình', 1, 0),
(39, 'Phú Yên', 1, 0),
(38, 'Phú Thọ', 1, 0),
(37, 'Ninh Thuận', 1, 0),
(36, 'Ninh Bình', 1, 0),
(35, 'Nghệ An', 1, 0),
(34, 'Nam Định', 1, 0),
(33, 'Lạng Sơn', 1, 0),
(32, 'Lâm Đồng', 1, 0),
(31, 'Lào Cai', 1, 0),
(30, 'Long An', 1, 0),
(29, 'Lai Châu', 1, 0),
(28, 'Kon Tum', 1, 0),
(27, 'Kiên Giang', 1, 0),
(25, 'Khánh Hòa', 1, 0),
(24, 'Hồ Chí Minh', 1, 0),
(23, 'Hải Phòng', 1, 0),
(22, 'Hải Dương', 1, 0),
(21, 'Hưng Yên', 1, 0),
(20, 'Hòa Bình', 1, 0),
(19, 'Hà Tĩnh', 1, 0),
(18, 'Hà Tây', 1, 0),
(17, 'Hà Nội', 1, 0),
(16, 'Hà Nam', 1, 0),
(15, 'Hà Giang', 1, 0),
(14, 'Gia Lai', 1, 0),
(13, 'Cần Thơ', 1, 0),
(12, 'Cà Mau', 1, 0),
(11, 'Cao Bằng', 1, 0),
(10, 'Bến Tre', 1, 0),
(9, 'Bắc Ninh', 1, 0),
(8, 'Bắc Kạn', 1, 0),
(7, 'Bắc Giang', 1, 0),
(6, 'Bình Định', 1, 0),
(5, 'Bình Thuận', 1, 0),
(4, 'Bình Phước', 1, 0),
(3, 'Bình Dương', 1, 0),
(2, 'Bà Rịa - Vũng Tầu', 1, 0),
(1, 'An Giang', 1, 0),
(49, 'Thừa Thiên - Huế', 1, 0),
(50, 'Tiền Giang', 1, 0),
(51, 'Trà Vinh', 1, 0),
(52, 'Tuyên Quang', 1, 0),
(53, 'Tây Ninh', 1, 0),
(54, 'Vĩnh Long', 1, 0),
(55, 'Vĩnh Phúc', 1, 0),
(56, 'Yên Bái', 1, 0),
(57, 'Đà Nẵng', 1, 0),
(58, 'Đắk Lắk', 1, 0),
(59, 'Đồng Nai', 1, 0),
(60, 'Đồng Tháp', 1, 0),
(61, 'Bạc Liêu', 1, 0),
(62, 'Sóc Trăng', 1, 0),
(63, 'Hậu Giang', 1, 0),
(64, 'Đắk Nông', 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `table_tinhtrang`
--

CREATE TABLE IF NOT EXISTS `table_tinhtrang` (
`id` int(11) NOT NULL,
  `trangthai` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table_tinhtrang`
--

INSERT INTO `table_tinhtrang` (`id`, `trangthai`) VALUES
(1, 'Mới đặt'),
(2, 'Đã xác nhận'),
(3, 'Đang giao hàng'),
(4, 'Đã giao'),
(5, 'Đã hủy');

-- --------------------------------------------------------

--
-- Structure de la table `table_title`
--

CREATE TABLE IF NOT EXISTS `table_title` (
`id` int(10) NOT NULL,
  `ten` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table_title`
--

INSERT INTO `table_title` (`id`, `ten`) VALUES
(1, 'Spa Sứ Trắng');

-- --------------------------------------------------------

--
-- Structure de la table `table_user`
--

CREATE TABLE IF NOT EXISTS `table_user` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `ten` varchar(225) NOT NULL,
  `dienthoai` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `diachi` varchar(225) NOT NULL,
  `sex` tinyint(1) NOT NULL DEFAULT '0',
  `nick_yahoo` varchar(225) NOT NULL,
  `nick_skype` varchar(225) NOT NULL,
  `congty` varchar(225) NOT NULL,
  `country` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `quyen` varchar(255) NOT NULL,
  `role` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `com` varchar(225) NOT NULL DEFAULT 'user'
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table_user`
--

INSERT INTO `table_user` (`id`, `username`, `password`, `ten`, `dienthoai`, `email`, `diachi`, `sex`, `nick_yahoo`, `nick_skype`, `congty`, `country`, `city`, `quyen`, `role`, `hienthi`, `com`) VALUES
(3, 'admin', '351fc21424b448b751f4dbca74099c7c', 'Nguyễn Đình Hiếu', '01212901191', 'nguyenhieunina@gmail.com', '', 0, '', '', '', '', '', '', 3, 1, 'user'),
(10, 'anhh', '252a8fc0934e69e52a16fb6b74e19060', '', '', '', '', 1, '', '', '', '', '', '', 3, 1, 'user');

-- --------------------------------------------------------

--
-- Structure de la table `table_video`
--

CREATE TABLE IF NOT EXISTS `table_video` (
`id` int(10) unsigned NOT NULL,
  `noibat` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `thumb` varchar(225) NOT NULL,
  `ten_vi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `links` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `stt` int(10) unsigned NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `luotxem` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `table_video`
--

INSERT INTO `table_video` (`id`, `noibat`, `type`, `photo`, `thumb`, `ten_vi`, `tenkhongdau`, `links`, `title`, `keywords`, `description`, `ten_en`, `stt`, `hienthi`, `ngaytao`, `ngaysua`, `luotxem`) VALUES
(1, 0, 'video', '365366197263bernardo141edit-6546.jpg', '365366197263bernardo141edit-6546_790x320.jpg', 'Marijuana Jungle Juice Bowl with Banana Leaf Straws', 'marijuana-jungle-juice-bowl-with-banana-leaf-straws', 'https://www.youtube.com/watch?v=L0e3o2CfYkU', '', '', '', 'Marijuana Jungle Juice Bowl with Banana Leaf Straws', 1, 1, 1461163893, 1468894205, 12),
(2, 0, 'video', '365362188142webedit57-467.jpg', '365362188142webedit57-467_790x320.jpg', 'Nước Ép Táo', 'nuoc-ep-tao', 'https://www.youtube.com/watch?v=kI3_4hbsJsU', '', '', '', '빅뱅 BIGBANG - GD & TOP FULL ALBUM', 2, 1, 1461163917, 1468894157, 13),
(7, 0, 'video', '', '', 'Đã Từng - Bùi Anh Tuấn Ft. Dương Hoàng Yến [Video Lyric HD]', 'da-tung-bui-anh-tuan-ft-duong-hoang-yen-video-lyric-hd', 'https://www.youtube.com/watch?v=VjJd5Ln_bmQ', '', '', '', '', 1, 1, 1474445969, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `table_yahoo`
--

CREATE TABLE IF NOT EXISTS `table_yahoo` (
`id` int(10) unsigned NOT NULL,
  `ten` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `yahoo` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `skype` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `dienthoai` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `stt` int(3) NOT NULL,
  `hienthi` int(2) NOT NULL,
  `ngaytao` int(10) NOT NULL,
  `ngaysua` int(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `table_yahoo`
--

INSERT INTO `table_yahoo` (`id`, `ten`, `yahoo`, `skype`, `dienthoai`, `email`, `stt`, `hienthi`, `ngaytao`, `ngaysua`) VALUES
(13, 'Mr. Hiếu', 'hieunguyenit88', 'hieunguyenit88', '0908797982', 'daivietphu@gmail.com', 1, 1, 1450094141, 1475639022);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `counter`
--
ALTER TABLE `counter`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_album`
--
ALTER TABLE `table_album`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_albumphongngu`
--
ALTER TABLE `table_albumphongngu`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_albumphongngu_photo`
--
ALTER TABLE `table_albumphongngu_photo`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_albumproduct`
--
ALTER TABLE `table_albumproduct`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_albumproduct_photo`
--
ALTER TABLE `table_albumproduct_photo`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_album_list`
--
ALTER TABLE `table_album_list`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_album_photo`
--
ALTER TABLE `table_album_photo`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_baiviet`
--
ALTER TABLE `table_baiviet`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_baiviet_cat`
--
ALTER TABLE `table_baiviet_cat`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_baiviet_item`
--
ALTER TABLE `table_baiviet_item`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_baiviet_list`
--
ALTER TABLE `table_baiviet_list`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_baiviet_photo`
--
ALTER TABLE `table_baiviet_photo`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_baiviet_sub`
--
ALTER TABLE `table_baiviet_sub`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_bgweb`
--
ALTER TABLE `table_bgweb`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_booking`
--
ALTER TABLE `table_booking`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_chuyenkhoan`
--
ALTER TABLE `table_chuyenkhoan`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_com`
--
ALTER TABLE `table_com`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_comment`
--
ALTER TABLE `table_comment`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_comment_like`
--
ALTER TABLE `table_comment_like`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_company`
--
ALTER TABLE `table_company`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_contact`
--
ALTER TABLE `table_contact`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_counter`
--
ALTER TABLE `table_counter`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_dientich`
--
ALTER TABLE `table_dientich`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_download`
--
ALTER TABLE `table_download`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_gia`
--
ALTER TABLE `table_gia`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_giasearch`
--
ALTER TABLE `table_giasearch`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_info`
--
ALTER TABLE `table_info`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_lkweb`
--
ALTER TABLE `table_lkweb`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_newsletter`
--
ALTER TABLE `table_newsletter`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_online`
--
ALTER TABLE `table_online`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_order`
--
ALTER TABLE `table_order`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_order_detail`
--
ALTER TABLE `table_order_detail`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_phanquyen`
--
ALTER TABLE `table_phanquyen`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_photo`
--
ALTER TABLE `table_photo`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_product`
--
ALTER TABLE `table_product`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_product_cat`
--
ALTER TABLE `table_product_cat`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_product_item`
--
ALTER TABLE `table_product_item`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_product_list`
--
ALTER TABLE `table_product_list`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_product_photo`
--
ALTER TABLE `table_product_photo`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_product_sub`
--
ALTER TABLE `table_product_sub`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_quan`
--
ALTER TABLE `table_quan`
 ADD PRIMARY KEY (`id`), ADD KEY `idx_province` (`id_cat`);

--
-- Index pour la table `table_setting`
--
ALTER TABLE `table_setting`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_slider`
--
ALTER TABLE `table_slider`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_tags`
--
ALTER TABLE `table_tags`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_thanhvien`
--
ALTER TABLE `table_thanhvien`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_tinh`
--
ALTER TABLE `table_tinh`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_tinhtrang`
--
ALTER TABLE `table_tinhtrang`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_title`
--
ALTER TABLE `table_title`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_user`
--
ALTER TABLE `table_user`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_video`
--
ALTER TABLE `table_video`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `table_yahoo`
--
ALTER TABLE `table_yahoo`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `counter`
--
ALTER TABLE `counter`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=295;
--
-- AUTO_INCREMENT pour la table `table_album`
--
ALTER TABLE `table_album`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `table_albumphongngu`
--
ALTER TABLE `table_albumphongngu`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `table_albumphongngu_photo`
--
ALTER TABLE `table_albumphongngu_photo`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `table_albumproduct`
--
ALTER TABLE `table_albumproduct`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `table_albumproduct_photo`
--
ALTER TABLE `table_albumproduct_photo`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `table_album_list`
--
ALTER TABLE `table_album_list`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `table_album_photo`
--
ALTER TABLE `table_album_photo`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `table_baiviet`
--
ALTER TABLE `table_baiviet`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `table_baiviet_cat`
--
ALTER TABLE `table_baiviet_cat`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `table_baiviet_item`
--
ALTER TABLE `table_baiviet_item`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `table_baiviet_list`
--
ALTER TABLE `table_baiviet_list`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `table_baiviet_photo`
--
ALTER TABLE `table_baiviet_photo`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `table_baiviet_sub`
--
ALTER TABLE `table_baiviet_sub`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `table_bgweb`
--
ALTER TABLE `table_bgweb`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `table_booking`
--
ALTER TABLE `table_booking`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `table_chuyenkhoan`
--
ALTER TABLE `table_chuyenkhoan`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `table_com`
--
ALTER TABLE `table_com`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `table_comment`
--
ALTER TABLE `table_comment`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT pour la table `table_comment_like`
--
ALTER TABLE `table_comment_like`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `table_company`
--
ALTER TABLE `table_company`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `table_contact`
--
ALTER TABLE `table_contact`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT pour la table `table_counter`
--
ALTER TABLE `table_counter`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=165;
--
-- AUTO_INCREMENT pour la table `table_dientich`
--
ALTER TABLE `table_dientich`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `table_download`
--
ALTER TABLE `table_download`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `table_gia`
--
ALTER TABLE `table_gia`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `table_giasearch`
--
ALTER TABLE `table_giasearch`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `table_info`
--
ALTER TABLE `table_info`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `table_lkweb`
--
ALTER TABLE `table_lkweb`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `table_newsletter`
--
ALTER TABLE `table_newsletter`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=157;
--
-- AUTO_INCREMENT pour la table `table_online`
--
ALTER TABLE `table_online`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=66933;
--
-- AUTO_INCREMENT pour la table `table_order`
--
ALTER TABLE `table_order`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT pour la table `table_order_detail`
--
ALTER TABLE `table_order_detail`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT pour la table `table_phanquyen`
--
ALTER TABLE `table_phanquyen`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `table_photo`
--
ALTER TABLE `table_photo`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `table_product`
--
ALTER TABLE `table_product`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `table_product_cat`
--
ALTER TABLE `table_product_cat`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `table_product_item`
--
ALTER TABLE `table_product_item`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `table_product_list`
--
ALTER TABLE `table_product_list`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `table_product_photo`
--
ALTER TABLE `table_product_photo`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `table_product_sub`
--
ALTER TABLE `table_product_sub`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `table_quan`
--
ALTER TABLE `table_quan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=684;
--
-- AUTO_INCREMENT pour la table `table_setting`
--
ALTER TABLE `table_setting`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `table_slider`
--
ALTER TABLE `table_slider`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT pour la table `table_tags`
--
ALTER TABLE `table_tags`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `table_thanhvien`
--
ALTER TABLE `table_thanhvien`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `table_tinh`
--
ALTER TABLE `table_tinh`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT pour la table `table_tinhtrang`
--
ALTER TABLE `table_tinhtrang`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `table_title`
--
ALTER TABLE `table_title`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `table_user`
--
ALTER TABLE `table_user`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `table_video`
--
ALTER TABLE `table_video`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `table_yahoo`
--
ALTER TABLE `table_yahoo`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
