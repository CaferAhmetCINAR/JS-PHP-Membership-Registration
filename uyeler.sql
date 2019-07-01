-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 01 Tem 2019, 15:10:46
-- Sunucu sürümü: 10.1.38-MariaDB
-- PHP Sürümü: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `uyeler`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kayit`
--

CREATE TABLE `kayit` (
  `id` int(11) NOT NULL,
  `ad` text NOT NULL,
  `soyad` text NOT NULL,
  `dogum` date NOT NULL,
  `mail` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kayit`
--

INSERT INTO `kayit` (`id`, `ad`, `soyad`, `dogum`, `mail`, `tel`) VALUES
(1, 'Ahmet', 'Cinar', '2019-07-01', 'caferahmetcinar@hotmail.com', '2147483647'),
(2, 'ahmet', 'ccccc', '2019-07-01', 'caferahmetcinar@hotmail.com', '5522043539'),
(3, 'asasdas', 'asdasd', '2019-06-14', 'caferahmetcinar@hotmail.com', '5522043539');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kayit`
--
ALTER TABLE `kayit`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kayit`
--
ALTER TABLE `kayit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
