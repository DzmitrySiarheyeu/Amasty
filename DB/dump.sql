-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 21 2021 г., 08:13
-- Версия сервера: 10.3.16-MariaDB
-- Версия PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `testbase`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Очистить таблицу перед добавлением данных `cities`
--

TRUNCATE TABLE `cities`;
--
-- Дамп данных таблицы `cities`
--

INSERT INTO `cities` (`id`, `name`) VALUES
(1, 'Minsk'),
(2, 'Gomel'),
(3, 'Hrodna'),
(4, 'Baranovichi'),
(5, 'Brest'),
(6, 'Zhlobin'),
(7, 'Vitebsk'),
(8, 'Krugloe');

-- --------------------------------------------------------

--
-- Структура таблицы `persons`
--

CREATE TABLE `persons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Очистить таблицу перед добавлением данных `persons`
--

TRUNCATE TABLE `persons`;
--
-- Дамп данных таблицы `persons`
--

INSERT INTO `persons` (`id`, `city_id`, `fullname`) VALUES
(1, 5, 'Ivan Petrov'),
(2, 3, 'Sebastian Haponenka'),
(3, 3, 'Vasil Lutsevich'),
(4, 2, 'Leo Klimovich'),
(5, 7, 'Matea Kezhman'),
(6, 7, 'Matea Kezhman'),
(7, 8, 'Alex Marshall'),
(8, 3, 'Bilbo Beggins');

-- --------------------------------------------------------

--
-- Структура таблицы `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from_person_id` bigint(20) UNSIGNED NOT NULL,
  `to_person_id` bigint(20) UNSIGNED NOT NULL,
  `amount` double(4,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Очистить таблицу перед добавлением данных `transactions`
--

TRUNCATE TABLE `transactions`;
--
-- Дамп данных таблицы `transactions`
--

INSERT INTO `transactions` (`id`, `from_person_id`, `to_person_id`, `amount`) VALUES
(1, 4, 2, 0.9999),
(2, 2, 3, 0.9999),
(3, 5, 2, 0.9999),
(4, 4, 7, 0.9999),
(5, 3, 1, 0.9999),
(6, 1, 3, 0.9999),
(7, 2, 5, 0.9999);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `persons_city_id_foreign` (`city_id`);

--
-- Индексы таблицы `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_from_person_id_foreign` (`from_person_id`),
  ADD KEY `transactions_to_person_id_foreign` (`to_person_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `persons`
--
ALTER TABLE `persons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `persons`
--
ALTER TABLE `persons`
  ADD CONSTRAINT `persons_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`);

--
-- Ограничения внешнего ключа таблицы `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_from_person_id_foreign` FOREIGN KEY (`from_person_id`) REFERENCES `persons` (`id`),
  ADD CONSTRAINT `transactions_to_person_id_foreign` FOREIGN KEY (`to_person_id`) REFERENCES `persons` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
