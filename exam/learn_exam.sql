-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 17 2021 г., 23:59
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `learn_exam`
--

-- --------------------------------------------------------

--
-- Структура таблицы `albums`
--

CREATE TABLE `albums` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `thumbnail` text NOT NULL,
  `year` int NOT NULL,
  `records` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `albums`
--

INSERT INTO `albums` (`id`, `title`, `thumbnail`, `year`, `records`) VALUES
(1, 'Bleach', '/albums/bleach.jpg', 1989, '\"Blew\"|\"Floyd the Barber\"|\r\n\"About a Girl\"|\"School\"|\"Love Buzz\"|\"Paper Cuts\"|\"Negative Creep\"|\"Scoff\"|\"Swap Meet\"|\"Mr. Moustache\"|\"Sifting\"'),
(2, 'Nevermind', '/albums/nevermind.jpg', 1991, '\"Smells Like Teen Spirit\"|\"In Bloom\"|\"Come as You Are\"|\"Breed\"|\"Lithium\"|\"Polly\"|\"Territorial Pissings\"|\"Drain You\"|\"Lounge Act\"|\"Stay Away\"|\"On a Plain\"|\"Something in the Way\"|\"Endless, Nameless\"'),
(3, 'In Utero', '/albums/in-utero.jpg', 1993, '\"Serve the Servants\"|\"Scentless Apprentice\"|\"Heart-Shaped Box\"|\"Rape Me|\"Frances Farmer Will Have Her Revenge on Seattle|\"Dumb|\"Very Ape|\"Milk It\"|\"Pennyroyal Tea\"|\"Radio Friendly Unit Shifter\"|\"Tourette’s\"|\"All Apologies\"'),
(6, 'Test12', '/albums/fucking owl.png', 2021, '                                                        Rock                             Rock Test                             Test Test                                          ');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint UNSIGNED NOT NULL,
  `subtitle` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `subtitle`, `image`) VALUES
(1, 'Лучше быть угрюмым мечтателем, чем безмозглым тусовщиком.', 'gallery/image-1.jpg'),
(2, 'Всё можно пережить, если подобрать нужную песню.', 'gallery/image-2.jpg'),
(3, 'Все наркотики — это пустая трата времени. Они разрушают вашу память, самоуважение, все, что связано с самолюбием...', 'gallery/image-3.jpg'),
(4, 'Я использую кусочки и частицы других личностей, чтобы сформировать свою собственную', 'gallery/image-4.jpg'),
(5, 'Меня зовут Курт, я пою и играю на гитаре, а вообще, я ходячая и разговаривающая бактериальная инфекция...', 'gallery/image-5.jpg'),
(6, 'Fucking owl', '/gallery/fucking owl.png');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `login` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'admin', '$2y$10$zD9Py3oPMozh14uwsIoA.O/fKPn3wZTwrrUcnVQwNlHd7Tbu2gNx2'),
(2, 'Vasya_Pupkin', '$2y$10$EoFE9kGsVyMtfWhvQtL2nOVp3YrLWZ4pBudCPAK1BwriqJ5D2gVq2'),
(3, 'Petya_Vasilev', '$2y$10$S7yQF.2FiKXRFW9oyI0UPOc0OZOo4WFxg5nHt4AupT/I/8RP4spGG'),
(4, 'Nastya_Petrenko', '$2y$10$qf5CWFKAUaa2pNUwTrTcBu6NRD5vKGucFAJrh8ZQrftqmO.Jm6Lva'),
(5, 'Nikita_Sport', '$2y$10$O4YFAr4PKFigbw5brDw4OOuu1rPMxxCiopZDk2o9m3FJya1KDYNkG');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `albums`
--
ALTER TABLE `albums`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `albums`
--
ALTER TABLE `albums`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
