-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 Şub 2022, 11:33:47
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `stokpanel_db`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `alisekrani_tbl`
--

CREATE TABLE `alisekrani_tbl` (
  `id` int(11) NOT NULL,
  `alis_firmaad` varchar(255) NOT NULL,
  `alis_firmavergino` varchar(255) NOT NULL,
  `alis_firmavergidairesi` varchar(255) NOT NULL,
  `alis_faturano` varchar(255) NOT NULL,
  `alis_urunadi` varchar(255) NOT NULL,
  `alis_urunbirim` varchar(255) NOT NULL,
  `alis_urunadedi` varchar(255) NOT NULL,
  `alis_aciklama` varchar(255) NOT NULL,
  `alis_teslimdurumu` tinyint(1) NOT NULL,
  `alis_teslimalinanadet` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `alisekrani_tbl`
--

INSERT INTO `alisekrani_tbl` (`id`, `alis_firmaad`, `alis_firmavergino`, `alis_firmavergidairesi`, `alis_faturano`, `alis_urunadi`, `alis_urunbirim`, `alis_urunadedi`, `alis_aciklama`, `alis_teslimdurumu`, `alis_teslimalinanadet`) VALUES
(2, 'Mata', '123123', 'Konya Vergi Dairesi', '213214123', 'Deneme', 'Ton', '2000', 'Açıklama', 1, '200');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cariekrani_tbl`
--

CREATE TABLE `cariekrani_tbl` (
  `id` int(11) NOT NULL,
  `firma_ad` varchar(255) NOT NULL,
  `vergi_no` varchar(255) NOT NULL,
  `vergi_dairesi` varchar(255) NOT NULL,
  `adres` text NOT NULL,
  `yetkili_kisi` varchar(255) NOT NULL,
  `irtibat_kisisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `cariekrani_tbl`
--

INSERT INTO `cariekrani_tbl` (`id`, `firma_ad`, `vergi_no`, `vergi_dairesi`, `adres`, `yetkili_kisi`, `irtibat_kisisi`) VALUES
(2, 'Deneme', '13213213123', 'Eskişehir', 'Odunpazarı Eskişehir', 'Barış Ömer Döngel', 'Serdar Öz');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `geneltanim_tbl`
--

CREATE TABLE `geneltanim_tbl` (
  `id` int(11) NOT NULL,
  `iscilik_maaliyet` varchar(255) NOT NULL,
  `diger_maaliyet` varchar(255) NOT NULL,
  `tasarim_maaliyet` varchar(255) NOT NULL,
  `baski_maaliyet` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `geneltanim_tbl`
--

INSERT INTO `geneltanim_tbl` (`id`, `iscilik_maaliyet`, `diger_maaliyet`, `tasarim_maaliyet`, `baski_maaliyet`) VALUES
(0, '11', '1', '1', '11');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici_tbl`
--

CREATE TABLE `kullanici_tbl` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_foto` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_zaman` date NOT NULL,
  `kullanici_hakkinda` text COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_dogumyeri` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adsoyad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_yetki` int(2) NOT NULL,
  `kullanici_facebook` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_twitter` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_github` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_instagram` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_tel` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici_tbl`
--

INSERT INTO `kullanici_tbl` (`kullanici_id`, `kullanici_foto`, `kullanici_ad`, `kullanici_sifre`, `kullanici_zaman`, `kullanici_hakkinda`, `kullanici_dogumyeri`, `kullanici_adsoyad`, `kullanici_yetki`, `kullanici_facebook`, `kullanici_twitter`, `kullanici_github`, `kullanici_instagram`, `kullanici_tel`) VALUES
(17, 'assets/img/users/avatar.png', 'admin@admin.com', 'matadmin.2022', '2021-09-17', '', 'Konya', '', 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `satilabilirurun_tbl`
--

CREATE TABLE `satilabilirurun_tbl` (
  `id` int(11) NOT NULL,
  `surun_satilacakurun` varchar(255) NOT NULL,
  `surun_birimbasinamaaliyet` varchar(255) NOT NULL,
  `surun_saatlikortalamauretim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `satilabilirurun_tbl`
--

INSERT INTO `satilabilirurun_tbl` (`id`, `surun_satilacakurun`, `surun_birimbasinamaaliyet`, `surun_saatlikortalamauretim`) VALUES
(2, 'Deneme', '123', '10'),
(3, 'Deneme 2', '222', '21');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis_tbl`
--

CREATE TABLE `siparis_tbl` (
  `id` int(11) NOT NULL,
  `teklif_id` int(11) NOT NULL,
  `onay_durumu` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `siparis_tbl`
--

INSERT INTO `siparis_tbl` (`id`, `teklif_id`, `onay_durumu`) VALUES
(10, 36, 0),
(11, 37, 0),
(12, 38, 1),
(13, 39, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `stokmalzeme_tbl`
--

CREATE TABLE `stokmalzeme_tbl` (
  `id` int(11) NOT NULL,
  `urun_ad` varchar(255) NOT NULL,
  `urun_aciklama` varchar(255) NOT NULL,
  `urun_birim` varchar(255) NOT NULL,
  `urun_fiyat` varchar(255) NOT NULL,
  `urun_mevcutstok` int(11) NOT NULL,
  `urun_genelstok` int(11) NOT NULL,
  `urun_harcananstok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `stokmalzeme_tbl`
--

INSERT INTO `stokmalzeme_tbl` (`id`, `urun_ad`, `urun_aciklama`, `urun_birim`, `urun_fiyat`, `urun_mevcutstok`, `urun_genelstok`, `urun_harcananstok`) VALUES
(2, 'Deneme', 'Lorem Ipsum Dolar Sit Amme Lorem ipsum dolar sit amme Lorem Ipsum Dolar Sit Amme Lorem ipsum dolar sit ammeLorem Ipsum Dolar Sit Amme Lorem ipsum dolar sit ammeLorem Ipsum Dolar Sit Amme Lorem ipsum dolar sit ammeLorem Ipsum Dolar Sit Amme Lorem ipsum dol', 'Ton', '20000', 200, 200, 0),
(3, 'Standart ürün', 'Standart ürün bilmem nesi', 'Ton', '20000', 200, 200, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tanimlar_tbl`
--

CREATE TABLE `tanimlar_tbl` (
  `id` int(11) NOT NULL,
  `tanim_ad` varchar(255) NOT NULL,
  `tanim_boyut` varchar(255) NOT NULL,
  `tanim_adet` varchar(255) NOT NULL,
  `tanim_kg` varchar(255) NOT NULL,
  `tanim_tur` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `tanimlar_tbl`
--

INSERT INTO `tanimlar_tbl` (`id`, `tanim_ad`, `tanim_boyut`, `tanim_adet`, `tanim_kg`, `tanim_tur`) VALUES
(1, 'Deneme Tanım', '1000', '1000', '100', 'lak');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `teklifekrani_tbl`
--

CREATE TABLE `teklifekrani_tbl` (
  `id` int(11) NOT NULL,
  `teklif_firmaad` varchar(255) NOT NULL,
  `teklif_firmavergino` varchar(255) NOT NULL,
  `teklif_siparistarihi` date NOT NULL,
  `teklif_satilabilirurunsecenekleri` varchar(255) NOT NULL,
  `teklif_urunadedi` varchar(255) NOT NULL,
  `teklif_kagitturu` varchar(255) NOT NULL,
  `teklif_baskitutari` varchar(255) NOT NULL,
  `teklif_lakvarmi` tinyint(1) NOT NULL,
  `teklif_metalizevarmi` tinyint(1) NOT NULL,
  `teklif_kirimvarmi` tinyint(1) NOT NULL,
  `teklif_delikvarmi` tinyint(1) NOT NULL,
  `teklif_iscisayisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `teklifekrani_tbl`
--

INSERT INTO `teklifekrani_tbl` (`id`, `teklif_firmaad`, `teklif_firmavergino`, `teklif_siparistarihi`, `teklif_satilabilirurunsecenekleri`, `teklif_urunadedi`, `teklif_kagitturu`, `teklif_baskitutari`, `teklif_lakvarmi`, `teklif_metalizevarmi`, `teklif_kirimvarmi`, `teklif_delikvarmi`, `teklif_iscisayisi`) VALUES
(36, 'Deneme Düzenleme', '21321321', '2022-01-20', 'falan', '123', 'filan', '123', 1, 1, 1, 0, 10),
(37, 'silinecek', '21321321', '2022-01-30', 'falan', '123', 'filan', '123', 0, 0, 0, 1, 10),
(38, 'Deneme', '21321321', '0000-00-00', '', '', '', '', 1, 1, 0, 0, 0),
(39, 'Barış', '21321321', '0000-00-00', '', '', '', '', 1, 1, 1, 1, 10);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `alisekrani_tbl`
--
ALTER TABLE `alisekrani_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `cariekrani_tbl`
--
ALTER TABLE `cariekrani_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanici_tbl`
--
ALTER TABLE `kullanici_tbl`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `satilabilirurun_tbl`
--
ALTER TABLE `satilabilirurun_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siparis_tbl`
--
ALTER TABLE `siparis_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `stokmalzeme_tbl`
--
ALTER TABLE `stokmalzeme_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tanimlar_tbl`
--
ALTER TABLE `tanimlar_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `teklifekrani_tbl`
--
ALTER TABLE `teklifekrani_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `alisekrani_tbl`
--
ALTER TABLE `alisekrani_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `cariekrani_tbl`
--
ALTER TABLE `cariekrani_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici_tbl`
--
ALTER TABLE `kullanici_tbl`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Tablo için AUTO_INCREMENT değeri `satilabilirurun_tbl`
--
ALTER TABLE `satilabilirurun_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `siparis_tbl`
--
ALTER TABLE `siparis_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `stokmalzeme_tbl`
--
ALTER TABLE `stokmalzeme_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `tanimlar_tbl`
--
ALTER TABLE `tanimlar_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `teklifekrani_tbl`
--
ALTER TABLE `teklifekrani_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
