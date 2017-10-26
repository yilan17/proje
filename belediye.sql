-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 25 Eki 2017, 16:33:02
-- Sunucu sürümü: 5.6.17
-- PHP Sürümü: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `belediye`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `birim`
--

CREATE TABLE IF NOT EXISTS `birim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Tablo döküm verisi `birim`
--

INSERT INTO `birim` (`id`, `ad`) VALUES
(1, 'Bilgi İşlem Müdürlüğü'),
(2, 'İmar Müdürlüğü'),
(4, 'Vezne'),
(5, 'Özel Kalem');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmetbinasi`
--

CREATE TABLE IF NOT EXISTS `hizmetbinasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `katid` int(255) NOT NULL,
  `resim` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Tablo döküm verisi `hizmetbinasi`
--

INSERT INTO `hizmetbinasi` (`id`, `katid`, `resim`) VALUES
(3, 2, 'katiki.png'),
(4, 3, 'katiki.png'),
(5, 4, 'katiki.png'),
(6, 5, 'katiki.png'),
(7, 6, 'katiki.png'),
(11, 7, 'katiki.png'),
(12, 8, 'katiki.png'),
(13, 9, 'katiki.png'),
(19, 10, 'katiki.png'),
(20, 11, 'katiki.png'),
(21, 12, 'katiki.png'),
(22, 13, 'katiki.png'),
(23, 14, 'katiki.png'),
(24, 15, 'katiki.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `isletimsistemi`
--

CREATE TABLE IF NOT EXISTS `isletimsistemi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Tablo döküm verisi `isletimsistemi`
--

INSERT INTO `isletimsistemi` (`id`, `ad`) VALUES
(1, 'Windows XP'),
(2, 'Windows 7'),
(3, 'Windows 8'),
(4, 'Windows 10'),
(5, 'Windows Vİsta');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(255) NOT NULL,
  `sifre` varchar(255) NOT NULL,
  `yetki` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`id`, `ad`, `sifre`, `yetki`) VALUES
(1, 'yasar', 'c4ca4238a0b923820dcc509a6f75849b', 'user'),
(2, 'sadasd', '58180771ed8360334ff766434d9ff67b', 'user'),
(3, '1', '28c8edde3d61a0411511d3b1866f0636', 'admin'),
(5, '2', 'c81e728d9d4c2f636f067f89cc14862c', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
