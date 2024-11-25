-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 25 2024 г., 14:27
-- Версия сервера: 8.0.30
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `vedita`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Products`
--

CREATE TABLE `Products` (
  `id` int NOT NULL,
  `PRODUCT_ID` int NOT NULL,
  `PRODUCT_NAME` varchar(32) NOT NULL,
  `PRODUCT_PRICE` int NOT NULL,
  `PRODUCT_ARTICLE` varchar(32) NOT NULL,
  `PRODUCT_QUANTITY` int NOT NULL,
  `DATE_CREATE` date NOT NULL,
  `isHidden` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Products`
--

INSERT INTO `Products` (`id`, `PRODUCT_ID`, `PRODUCT_NAME`, `PRODUCT_PRICE`, `PRODUCT_ARTICLE`, `PRODUCT_QUANTITY`, `DATE_CREATE`, `isHidden`) VALUES
(1, 1, 'rag', 100, '111111', 10, '2021-12-20', 0),
(2, 2, 'ball', 350, '212121', 50, '2011-11-20', 0),
(3, 3, 'soap', 50, '321321', 245, '2021-09-20', 0),
(4, 4, 'mop', 1000, '443322', 353, '2024-06-20', 0),
(5, 5, 'lamp', 130, '566778', 303, '2009-09-20', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Products`
--
ALTER TABLE `Products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
