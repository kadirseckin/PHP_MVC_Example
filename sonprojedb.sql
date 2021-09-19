-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 Eyl 2021, 15:29:35
-- Sunucu sürümü: 10.4.20-MariaDB
-- PHP Sürümü: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `sonprojedb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `markalar`
--

CREATE TABLE `markalar` (
  `id` int(11) NOT NULL,
  `ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `markalar`
--

INSERT INTO `markalar` (`id`, `ad`) VALUES
(1, 'Lenovo'),
(2, 'Asus'),
(3, 'Vestel');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet`
--

CREATE TABLE `sepet` (
  `id` int(11) NOT NULL,
  `icerik` varchar(300) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sepet`
--

INSERT INTO `sepet` (`id`, `icerik`) VALUES
(1, '1:2,'),
(2, '1:2,'),
(3, '1:2,'),
(4, '1:2,'),
(5, '1:2,'),
(6, '4:1,'),
(7, '4:1,'),
(8, ''),
(9, '3:1,');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `id` int(11) NOT NULL,
  `marka_id` int(11) NOT NULL,
  `ad` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `fiyat` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `marka_id`, `ad`, `fiyat`) VALUES
(1, 1, 'Lenovo Laptop', 2000),
(2, 1, 'Lenovo Telefon', 1500),
(3, 1, 'Lenovo Tablet', 1240),
(4, 2, 'Asus Laptop', 2200),
(5, 2, 'Asus Televizyon', 1500),
(6, 2, 'Asus Tablet ', 2100),
(7, 3, 'Vestel Buzdolabı', 2100),
(8, 3, 'Vestel Televizyon', 1500),
(9, 3, 'Vestel Tablet', 1900),
(10, 3, 'Vestel Monitor', 750),
(11, 1, 'Lenovo Mouse', 500),
(12, 1, 'Lenovo Monitor', 1500);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `markalar`
--
ALTER TABLE `markalar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sepet`
--
ALTER TABLE `sepet`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `markalar`
--
ALTER TABLE `markalar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `sepet`
--
ALTER TABLE `sepet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
