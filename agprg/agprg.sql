-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 11 Nis 2018, 09:53:35
-- Sunucu sürümü: 5.7.21-0ubuntu0.16.04.1
-- PHP Sürümü: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `agprg`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `lessons`
--

CREATE TABLE `lessons` (
  `id` int(255) NOT NULL,
  `order_no` int(255) NOT NULL,
  `lesson_code` varchar(255) NOT NULL,
  `lesson_name` varchar(500) NOT NULL,
  `lesson_content` varchar(1000) DEFAULT NULL,
  `state` int(255) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `lessons`
--

INSERT INTO `lessons` (`id`, `order_no`, `lesson_code`, `lesson_name`, `lesson_content`, `state`) VALUES
(1, 0, 'BSM 103', 'Programlamaya Giriş', '', 1),
(2, 1, 'BSM 201', 'Elektrik Devre Temelleri', '', 1),
(3, 2, 'BSM 205aaaaaa', 'Web Programlamasssadasdasdasda', 'DENEME VALUE İçerik ağ programlama', 1),
(4, 3, 'BSM 309', 'İşletim Sistemleri', '', 1),
(5, 4, 'BSM 458', 'Ağ Programlama', 'Ağ Programlama İçeriği', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `order_no` (`order_no`),
  ADD UNIQUE KEY `lesson_code` (`lesson_code`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
