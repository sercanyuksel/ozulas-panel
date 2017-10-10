-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 10 Eki 2017, 19:44:49
-- Sunucu sürümü: 10.1.21-MariaDB
-- PHP Sürümü: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ozulas`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `camera_types`
--

CREATE TABLE `camera_types` (
  `id` int(11) NOT NULL,
  `camera` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `license` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `area_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `camera_count` int(11) NOT NULL,
  `camera_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `car_troubles`
--

CREATE TABLE `car_troubles` (
  `id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `trouble_date` date NOT NULL,
  `driver_id` int(11) NOT NULL,
  `description` text COLLATE utf8_turkish_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `trouble_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `drivers`
--

CREATE TABLE `drivers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `no` varchar(15) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `troubles`
--

CREATE TABLE `troubles` (
  `id` int(11) NOT NULL,
  `trouble` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `trouble_solvers`
--

CREATE TABLE `trouble_solvers` (
  `id` int(11) NOT NULL,
  `trouble_id` int(11) NOT NULL,
  `taken_date` int(11) NOT NULL,
  `responsible` int(11) NOT NULL,
  `complete_date` int(11) NOT NULL,
  `response_desc` text COLLATE utf8_turkish_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `created_at` date NOT NULL,
  `last_login` date NOT NULL,
  `username` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `type_id`, `name`, `surname`, `created_at`, `last_login`, `username`, `password`) VALUES
(1, 0, '', '', '0000-00-00', '0000-00-00', 'sercan', '123');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `camera_types`
--
ALTER TABLE `camera_types`
  ADD UNIQUE KEY `id` (`id`);

--
-- Tablo için indeksler `cars`
--
ALTER TABLE `cars`
  ADD UNIQUE KEY `id` (`id`);

--
-- Tablo için indeksler `car_troubles`
--
ALTER TABLE `car_troubles`
  ADD UNIQUE KEY `id` (`id`);

--
-- Tablo için indeksler `drivers`
--
ALTER TABLE `drivers`
  ADD UNIQUE KEY `id` (`id`);

--
-- Tablo için indeksler `troubles`
--
ALTER TABLE `troubles`
  ADD UNIQUE KEY `id` (`id`);

--
-- Tablo için indeksler `trouble_solvers`
--
ALTER TABLE `trouble_solvers`
  ADD UNIQUE KEY `id` (`id`);

--
-- Tablo için indeksler `type`
--
ALTER TABLE `type`
  ADD UNIQUE KEY `id` (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `camera_types`
--
ALTER TABLE `camera_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `car_troubles`
--
ALTER TABLE `car_troubles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `troubles`
--
ALTER TABLE `troubles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `trouble_solvers`
--
ALTER TABLE `trouble_solvers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
