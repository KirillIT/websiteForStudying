-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 10.0.121.154
-- Время создания: Июн 04 2022 г., 01:32
-- Версия сервера: 5.7.35-38
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `a0678543_crud`
--
CREATE DATABASE IF NOT EXISTS `a0678543_crud` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `a0678543_crud`;

-- --------------------------------------------------------

--
-- Структура таблицы `crud`
--

CREATE TABLE `crud` (
  `id` int(11) NOT NULL,
  `value` bigint(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `crud`
--

INSERT INTO `crud` (`id`, `value`) VALUES
(162, 234),
(163, 162),
(164, 15),
(165, 1000),
(166, 7),
(167, 993),
(168, 228),
(169, 322),
(170, 69),
(171, 1984),
(172, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
