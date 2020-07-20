-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Май 13 2020 г., 18:12
-- Версия сервера: 10.1.44-MariaDB-0+deb9u1
-- Версия PHP: 7.0.33-27+0~20200419.34+debian9~1.gbpf45092

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `admin_leha`
--

-- --------------------------------------------------------

--
-- Структура таблицы `phone_attributes`
--

CREATE TABLE `phone_attributes` (
  `id_phone_attributes` int(11) NOT NULL,
  `Device_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Manufacturer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Screen_diagonal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Screen_resolution` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OS` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CPU` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RAM` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Inner_memory` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Wi-Fi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Bluetooth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NFC` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Equipment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Battery_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Battery_capacity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `phone_attributes`
--

INSERT INTO `phone_attributes` (`id_phone_attributes`, `Device_type`, `Manufacturer`, `Model`, `Color`, `Screen_diagonal`, `Screen_resolution`, `OS`, `CPU`, `RAM`, `Inner_memory`, `Wi-Fi`, `Bluetooth`, `NFC`, `Equipment`, `Battery_type`, `Battery_capacity`, `created_at`, `updated_at`) VALUES
(1, 'Смартфон', 'Xiaomi', 'Redmi Note 8 pro', 'серый', '6.53\"', '2340x1080', 'Android', 'Mediatek Helio G90T', '6 Gb', '64 Gb', 'есть', 'есть', 'есть', 'силиконовый чехол, блок питания, кабель USB-C, скрепка, документация', 'Li-Ion', '4500 мАч', NULL, NULL),
(2, 'Смартфон', 'Honor', '8A', 'синий', '6.08\"', '1560x720', 'Android', 'MediaTek Helio P35', '2 Gb', '32 Gb', 'есть', 'есть', 'есть', 'зарядное устройство, кабель USB, документация', 'Li-Pol', '3020 мАч', NULL, NULL),
(3, 'Смартфон', 'Xiaomi', 'Mi Note 10', 'черный', '6.47\"', '2340x1080', 'Android', 'Qualcomm Snapdragon 730', '6 Gb', '128 Gb', 'есть', 'есть', 'есть', 'Адаптер питания, защитный чехол, Кабель USB Type-C, скрепка для извлечения SIM-карты, руководство пользователя / Гарантийный талон', 'Li-Pol', '5260 мАч', NULL, NULL),
(4, 'Смартфон', 'Apple', 'iPhone 7', 'черный', '4.7\"', '1334х750', 'iOS', 'Apple A10 Fusion', '2 Gb', '32 Gb', 'есть', 'есть', 'есть', 'документация, зарядное устройство, кабель Lightning, наушники', 'Li-Ion', '1960 мАч', NULL, NULL),
(5, 'Смартфон', 'Apple', 'iPhone XS Max ', 'серый', '6.5\"', '2688x1242', 'iOS 12', 'A12 Bionic', '4 Gb', '512 Gb', 'есть', 'есть', 'есть', 'EarPods с разъёмом Lightning, адаптер питания USB, документация, Кабель Lightning/USB', 'Li-Ion', '3174 мАч', NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `phone_attributes`
--
ALTER TABLE `phone_attributes`
  ADD PRIMARY KEY (`id_phone_attributes`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `phone_attributes`
--
ALTER TABLE `phone_attributes`
  MODIFY `id_phone_attributes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
