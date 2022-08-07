-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 07 Ağu 2022, 14:20:17
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `rent`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cars`
--

CREATE TABLE `cars` (
  `ID` int(11) NOT NULL,
  `Plaka` varchar(10) NOT NULL,
  `Marka` varchar(50) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Renk` varchar(50) NOT NULL,
  `Km` int(11) NOT NULL,
  `Sanzıman` varchar(255) NOT NULL,
  `Yakıt` varchar(15) NOT NULL,
  `GunlukF` int(11) NOT NULL,
  `Musait` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `cars`
--

INSERT INTO `cars` (`ID`, `Plaka`, `Marka`, `Model`, `Renk`, `Km`, `Sanzıman`, `Yakıt`, `GunlukF`, `Musait`) VALUES
(1, '10U6731', 'FİAT', 'Egea', 'Gri', 150000, 'Manuel', 'Dizel', 350, 0),
(2, '10FR852', 'HYUNDAİ', 'İ20', 'Kırmızı', 67000, 'Otomatik', 'Benzin', 585, 0),
(3, '34SEA5213', 'VOLSWAGEN', 'Passat', 'Siyah', 23000, 'Otomatik', 'Benzin', 450, 1),
(4, '06EG3695', 'RENAULT', 'Clio', 'Beyaz', 15000, 'Manuel', 'LPG', 500, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

CREATE TABLE `siparis` (
  `id` int(11) NOT NULL,
  `ad` varchar(50) NOT NULL,
  `soyad` varchar(50) NOT NULL,
  `tel` varchar(12) NOT NULL,
  `mail` varchar(75) NOT NULL,
  `tc` varchar(11) NOT NULL,
  `plaka` varchar(15) NOT NULL,
  `toplam` int(11) NOT NULL,
  `tarih` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `siparis`
--

INSERT INTO `siparis` (`id`, `ad`, `soyad`, `tel`, `mail`, `tc`, `plaka`, `toplam`, `tarih`) VALUES
(1, 'Emir', 'emiraksoy10@gmail.com', '(542) 630-76', '27928211530', 'Aksoy', '10U6731', 3500, '06-08-2022 21:45:12'),
(2, 'Hakan', 'erty@gmail.com', '2342534', '123456543', ' Gümüş ', '10U6731', 1050, '06-08-2022 21:48:58'),
(3, 'Didem ', 'didemarslan@gmail.com', '05324859614', '221452523', 'Arslan ', '06EG3695', 1500, '06-08-2022 21:51:15'),
(4, 'Gizem', 'gizemturk.gmail.com', '05416958514', '8523698426', 'Türk', '06EG3695', 1500, '06-08-2022 21:53:20'),
(5, 'Emir', 'emiraksoy10@gmail.com', '05416958514', '27928211530', 'Aksoy', '06EG3695', 1500, '06-08-2022 21:55:22'),
(6, 'Emir', 'fddafadf', '05416958514', '4431234', 'Aksoy', '06EG3695', 2000, '06-08-2022 21:55:57'),
(7, 'Emir', 'emiraksoy10@gmail.com', '(542) 630-76', '27928211530', 'Aksoy', '06EG3695', 2000, '06-08-2022 21:56:53'),
(8, 'Emir', 'bolubelediyesi@gmail.com', '02662449481', '27928211530', 'Aksoy', '10U6731', 700, '06-08-2022 22:06:57'),
(9, 'Emir', 'emiraksoy10@gmail.com', '(542) 630-76', '27928211530', 'Aksoy', '10FR852', 1170, '06-08-2022 23:03:21'),
(10, 'Emir', 'emiraksoy10@gmail.com', '(542) 630-76', '27928211530', 'Aksoy', '10U6731', 1750, '07-08-2022 12:35:00'),
(11, 'Son ', 'bolubelediyesi@gmail.com', '02662449481', '122344566', 'Deneme', '06EG3695', 4500, '07-08-2022 13:44:41');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL,
  `Pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`ID`, `Name`, `Mail`, `Pass`) VALUES
(1, 'Emir', 'emiraksoy10@gmail.com', '1234');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `siparis`
--
ALTER TABLE `siparis`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `cars`
--
ALTER TABLE `cars`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `siparis`
--
ALTER TABLE `siparis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
