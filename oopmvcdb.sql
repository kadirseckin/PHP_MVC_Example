-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 19 Eyl 2021, 18:36:47
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
-- Veritabanı: `oopmvcdb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `content` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `total_price` double UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `cart`
--

INSERT INTO `cart` (`id`, `content`, `total_price`) VALUES
(11, '11:1,9:1,1:3,', 8400),
(12, '1:1,', 2000),
(13, '4:1,9:1,3:1,5:3,12:1,11:1,1:5,', 21840);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Lenovo'),
(2, 'Asus'),
(3, 'Dell'),
(4, 'Monster');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `price`) VALUES
(1, 1, 'Lenovo Laptop', 2000),
(2, 1, 'Lenovo Mobile Phone', 1500),
(3, 1, 'Lenovo Tablet', 1240),
(4, 2, 'Asus Laptop', 2200),
(5, 2, 'Asus Motherboard', 1500),
(6, 2, 'Asus Tablet ', 2100),
(7, 3, 'Dell Laptop', 2100),
(8, 3, 'Dell Computer', 1500),
(9, 3, 'Dell Tablet', 1900),
(10, 3, 'Dell Mouse', 750),
(11, 1, 'Lenovo Mouse', 500),
(12, 1, 'Lenovo Keyboard', 1500);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
