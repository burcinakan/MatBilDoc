-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 11 Haz 2020, 15:14:32
-- Sunucu sürümü: 8.0.18
-- PHP Sürümü: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `matbildoc`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dokuman`
--

DROP TABLE IF EXISTS `dokuman`;
CREATE TABLE IF NOT EXISTS `dokuman` (
  `dokuman_id` int(11) NOT NULL AUTO_INCREMENT,
  `dokuman_ad` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `dokuman_url` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `dokuman_ack` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`dokuman_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `dokuman`
--

INSERT INTO `dokuman` (`dokuman_id`, `dokuman_ad`, `dokuman_url`, `dokuman_ack`) VALUES
(9, 'Topoloji', 'https://www.coursehero.com/file/20088104/Topoloji/', 'Şimdilik derslerimizin urllerini çekiyoruz sonradan pdf olarak çekilecek.'),
(10, 'Matlab', 'http://ismailari.com/wp-content/uploads/2008/04/matlabileprogramlamayagiris.pdf', 'Şimdilik derslerimizin urllerini çekiyoruz sonradan pdf olarak çekilecek.'),
(11, 'Diferansiyel Denklemler ', 'http://online.fliphtml5.com/mtvu/gzfi/', 'Şimdilik derslerimizin urllerini çekiyoruz sonradan pdf olarak çekilecek.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kayit`
--

DROP TABLE IF EXISTS `kayit`;
CREATE TABLE IF NOT EXISTS `kayit` (
  `kayit_id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`kayit_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kayit`
--

INSERT INTO `kayit` (`kayit_id`, `kullanici_adi`, `kullanici_sifre`) VALUES
(1, 'cigigigi', '12345'),
(2, 'abcd', '1234');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kitap`
--

DROP TABLE IF EXISTS `kitap`;
CREATE TABLE IF NOT EXISTS `kitap` (
  `kitap_id` int(11) NOT NULL AUTO_INCREMENT,
  `kitap_adi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kitap_url` varchar(800) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`kitap_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kitap`
--

INSERT INTO `kitap` (`kitap_id`, `kitap_adi`, `kitap_url`) VALUES
(2, 'Matematikçi Gibi Düşünmek', 'https://www.kitakitap.com/matematikci-gibi-dusunmek-p24599'),
(3, 'Algoratima Uygulamalı Algoritma Kılavuzu ', 'https://www.kitapsec.com/Products/Algoratima-Uygulamali-Algoritma-Kilavuzu-Kodlab-Yayinlari-62429.html');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

DROP TABLE IF EXISTS `kullanicilar`;
CREATE TABLE IF NOT EXISTS `kullanicilar` (
  `kullanici_id` int(11) NOT NULL AUTO_INCREMENT,
  `kullanici_adi` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_sifre` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`kullanici_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`kullanici_id`, `kullanici_adi`, `kullanici_sifre`) VALUES
(1, 'burcinakan', '1234'),
(2, 'bbb', '111'),
(3, 'admin', '1234'),
(4, 'yeni', '123'),
(6, 'burc', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
