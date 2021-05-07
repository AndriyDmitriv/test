-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Янв 08 2021 г., 19:05
-- Версия сервера: 5.7.21-20-beget-5.7.21-20-1-log
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `inventar_it`
--

-- --------------------------------------------------------

--
-- Структура таблицы `nout`
--
-- Создание: Дек 23 2020 г., 11:22
--

DROP TABLE IF EXISTS `nout`;
CREATE TABLE `nout` (
  `id` int(11) NOT NULL,
  `Модель` text NOT NULL,
  `Серійни номер` text NOT NULL,
  `Ethernet/Wi-Fi Mac` text NOT NULL,
  `IP` text NOT NULL,
  `Діагональ` text NOT NULL,
  `Процесор` text NOT NULL,
  `Оперативка` text NOT NULL,
  `HDD\SSD` text NOT NULL,
  `Локація` text NOT NULL,
  `Дата придбання` text NOT NULL,
  `aida` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `noytbuk`
--
-- Создание: Дек 23 2020 г., 11:52
-- Последнее обновление: Янв 04 2021 г., 12:58
--

DROP TABLE IF EXISTS `noytbuk`;
CREATE TABLE `noytbuk` (
  `id` int(11) NOT NULL,
  `Model` text NOT NULL,
  `C/N` text NOT NULL,
  `IP` text NOT NULL,
  `Locaciy` text NOT NULL,
  `Data` text NOT NULL,
  `aida` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `noytbuk`
--

INSERT INTO `noytbuk` (`id`, `Model`, `C/N`, `IP`, `Locaciy`, `Data`, `aida`) VALUES
(31, 'Каса 1 Foodpark', '', '192.168.3.106', 'Foodpark', '2019-01-12', '<li><a href=\"http:aida/Foodpark/fp_k1_(касcа) 2019-01-12.htm\">Aida</a></li>'),
(33, 'Каса 2 Foodpark', '', '192.168.3.107', 'Foodpark', '2019-01-12', '<li><a href=\"http:aida/Foodpark/fp_k2_(касcа) 2019-01-12.htm\">Aida</a></li>'),
(34, 'Каса 3 Foodpark', '', '192.168.3.108', 'Foodpark', '2019-01-12', '<li><a href=\"http:aida/Foodpark/fp_k3_(касcа) 2019-01-12.htm\">Aida</a></li>'),
(35, 'Каса Бар Foodpark', '', '192.168.3.109', 'Foodpark', '2019-01-12', '<li><a href=\"http:aida/Foodpark/fp_k4_(бар) 2019-01-12.htm\">Aida</a></li>'),
(36, 'Касовий збірник Foodpark', '', '192.168.3.108', 'Foodpark', '2019-01-12', '<li><a href=\"http:aida/Foodpark/fp_k5_(сборники) 2019-01-12.htm\">Aida</a></li>'),
(37, 'Server Foodpark', '', '192.168.3.105', 'Foodpark', '2019-01-12', '<li><a href=\"http:aida/Foodpark/serverfp 2019-01-12.htm\">Aida</a></li>'),
(38, 'Касовий Whisky-Bar', '', '192.168.3.78', 'Whisky-Bar', '2019-01-12', '<li><a href=\"http:aida/Lucky-Bull&Whisky-Bar/wb_kasa 2019-01-17.html\">Aida</a></li>'),
(40, 'Server Lucky', '', '192.168.3.40', 'Lucky-Bull&amp;Whisky-Bar', '2019-01-17', '<li><a href=\"http:aida/Lucky-Bull&Whisky-Bar/restLB_Server (KOMARRA) 2019-01-17.html\">Aida</a></li>'),
(41, 'Каса Lucky', '', '192.168.3.41', 'Lucky-Bull&amp;Whisky-Bar', '', '<li><a href=\"http:aida/Lucky-Bull&Whisky-Bar/restLB_kassa 2019-01-17.html\">Aida</a></li>'),
(42, 'Каса Lucky Zal1 ', '', '192.168.3.42', 'Lucky-Bull&amp;Whisky-Bar', '2019-01-12', '<li><a href=\"http:aida/Lucky-Bull&Whisky-Bar/restLB_zal1 (kit) 2019-01-17.html\">Aida</a></li>'),
(43, 'Каса Lucky Zal2 ', '', '192.168.3.43', 'Lucky-Bull&amp;Whisky-Bar', '2019-01-12', '<li><a href=\"http:aida/Lucky-Bull&Whisky-Bar/restLB_zal2 (wind) 2019-01-17.html\">Aida</a></li>'),
(49, 'Каcа wb', '', '192.168.3.78', 'Whisky-Bar', '2019-01-17', '<li><a href=\"http:aida/Lucky-Bull&Whisky-Bar/wb_kasa 2019-01-17.html\">Aida</a></li>'),
(50, 'Кача wb', '', '192.168.3.78', 'Whisky-Bar', '2019-01-17', '<li><a href=\"http:aida/Lucky-Bull&Whisky-Bar/wb_kasa 2019-01-17.html\">Aida</a></li'),
(51, 'Пк Ivanka P.', '', '192.168.3.19', 'Office', '2019-01-22', '<li><a href=\"http:aida/Office/Ivanka_P_19 2019-01-22.html\">Aida</a></li'),
(52, 'konditer ', '', '192.168.3.9', 'Office', '2019-01-22', '<li><a href=\"http:aida/Office/konditer 2019-01-22.html\">Aida</a></li>'),
(53, 'Kyrator_35', '', '192.168.3.35', 'Office', '2019-01-22', '<li><a href=\"http:aida/Office/Kyrator_35 2019-01-22.html\">Aida</a></li>'),
(54, 'Kyrator_35', '', '192.168.3.35', 'Office', '2019-01-22', '<li><a href=\"http:aida/Office/ofis_c (Оля_Неменша) 2019-01-22.html\">Aida</a></li>'),
(55, 'Пк Оля_Неменша', '', '192.168.3.19', 'Office', '2019-01-22', '<li><a href=\"http:aida/Office/ofis_c (Оля_Неменша) 2019-01-22.html\">Aida</a></li>'),
(56, 'Пк Oleg_minibar', '', '192.168.3.57', 'Office', '2019-01-22', '<li><a href=\"http:aida/Office/ofis_n (Oleg_minibar) 2019-01-22.html\">Aida</a></li>'),
(57, 'Пк Ira_Rekhlevych', '', '192.168.3.63', 'Office', '2019-01-22 ', '<li><a href=\"http:aida/Office/ofis_s (Ira_Rekhlevych) 2019-01-22.html\">Aida</a></li>'),
(58, 'Пк Рихлевич', '', '127.0.0.1', 'Office', '2019-02-08', '<li><a href=\"http:aida/Ноут Рихлевич.html\">Aida</a></li>'),
(60, 'Каса VODA vd_1-bar-L_bar_Jack1', '', '192.168.3.173', 'VODA', '2019-01-17', '<li><a href=\"http:VODA/vd_1-bar-L_bar_Jack1 2019-01-17.html\">Aida</a></li>'),
(63, 'Каса VODA vd_1-bar-L_fic_Jack1 ', '', '192.168.3.171', 'VODA', '2019-01-17', '<li><a href=\"http:VODA/vd_1-bar-L_fic_Jack1 2019-01-17.html\">Aida</a></li>'),
(64, 'Каса VODA vd_1-bar-R_bar_Morosha_(kf5_zal)_', '', '192.168.3.155', 'VODA', '2019-01-17 ', '<li><a href=\"http:VODA/vd_1-bar-R_bar_Morosha_(kf5_zal)_155 2019-01-17.html\">Aida</a></li>'),
(65, 'Каса VODA vd_1-bar-R_kasa_Jack', '', '192.168.3.194', 'VODA', '2019-01-17', '<li><a href=\"http:VODA/vd_1-bar-R_kasa_Jack 2019-01-17.html\">Aida</a></li>');

-- --------------------------------------------------------

--
-- Структура таблицы `offise`
--
-- Создание: Янв 08 2021 г., 14:48
-- Последнее обновление: Янв 08 2021 г., 14:50
--

DROP TABLE IF EXISTS `offise`;
CREATE TABLE `offise` (
  `id` int(11) NOT NULL,
  `Найменування` text NOT NULL,
  `Тип` text NOT NULL,
  `Стан` text NOT NULL,
  `Коментар` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `offise`
--

INSERT INTO `offise` (`id`, `Найменування`, `Тип`, `Стан`, `Коментар`) VALUES
(1, 'Кабель', 'Кабель живлення', 'Новий', '');

-- --------------------------------------------------------

--
-- Структура таблицы `parking`
--
-- Создание: Янв 08 2021 г., 14:16
-- Последнее обновление: Янв 08 2021 г., 14:26
--

DROP TABLE IF EXISTS `parking`;
CREATE TABLE `parking` (
  `id` int(11) NOT NULL,
  `Найменування` text NOT NULL,
  `Тип` text NOT NULL,
  `Стан` text NOT NULL,
  `Коментар` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `parking`
--

INSERT INTO `parking` (`id`, `Найменування`, `Тип`, `Стан`, `Коментар`) VALUES
(1, 'Кабель', 'HDMI', 'Новий', ''),
(2, 'Кабель', 'HDMI', 'Новий', ''),
(3, 'Кабель', 'VGA', 'Новий', ''),
(4, 'Кабель', 'VGA', 'Новий', '');

-- --------------------------------------------------------

--
-- Структура таблицы `recepciy`
--
-- Создание: Янв 08 2021 г., 14:42
-- Последнее обновление: Янв 08 2021 г., 14:43
--

DROP TABLE IF EXISTS `recepciy`;
CREATE TABLE `recepciy` (
  `id` int(11) NOT NULL,
  `Найменування` text NOT NULL,
  `Тип` text NOT NULL,
  `Стан` text NOT NULL,
  `Коментар` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `recepciy`
--

INSERT INTO `recepciy` (`id`, `Найменування`, `Тип`, `Стан`, `Коментар`) VALUES
(1, 'Кабель', 'HDMI', 'Новий', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `nout`
--
ALTER TABLE `nout`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `noytbuk`
--
ALTER TABLE `noytbuk`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `offise`
--
ALTER TABLE `offise`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `parking`
--
ALTER TABLE `parking`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `recepciy`
--
ALTER TABLE `recepciy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `nout`
--
ALTER TABLE `nout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `noytbuk`
--
ALTER TABLE `noytbuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT для таблицы `offise`
--
ALTER TABLE `offise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `parking`
--
ALTER TABLE `parking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `recepciy`
--
ALTER TABLE `recepciy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
