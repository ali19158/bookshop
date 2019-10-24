-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 24 2019 г., 11:16
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yii2advanced`
--

-- --------------------------------------------------------

--
-- Структура таблицы `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `year_published` int(11) DEFAULT NULL,
  `manufacturer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `book`
--

INSERT INTO `book` (`id`, `name`, `author`, `year_published`, `manufacturer`) VALUES
(1, 'Шантарам', 'Грегориw Робертс', 2015, 'Sigma'),
(2, '1984', 'Джордж Оруэл', 2014, 'Sigma'),
(3, 'Цветы для Элджернона', 'Даниел Киз', 2007, 'Ecsmo'),
(4, 'Один', 'Ричард Берд', 2008, 'Williams'),
(5, 'Тень горы', 'Грегориw Робертс', 2010, 'Williams'),
(6, 'Паттерны проектирования', 'Элизабет Фримен', 2010, 'Standard'),
(7, 'Design Patterns', 'Эрих Гамма', 2005, 'Standard'),
(8, 'Эверест', 'Анатолий Букреев', 1996, 'Ecsmo');

-- --------------------------------------------------------

--
-- Структура таблицы `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `city`
--

INSERT INTO `city` (`id`, `name`) VALUES
(1, 'Almaty'),
(2, 'New-York'),
(3, 'Almaty'),
(4, 'New-York'),
(5, 'Chicago'),
(6, 'Boston'),
(7, 'Chicago'),
(8, 'Boston');

-- --------------------------------------------------------

--
-- Структура таблицы `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `hiring_date` date DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `id_code` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `employee`
--

INSERT INTO `employee` (`id`, `first_name`, `middle_name`, `last_name`, `birthdate`, `city`, `hiring_date`, `position`, `department`, `id_code`, `email`) VALUES
(1, 'john', 'johnovich', 'johnov', '2019-10-08', 'Almaty', '2019-10-24', 'cook', 'kitchen', '245', 'john@gmail.com'),
(2, 'brad', 'bradovich', 'bradov', '2019-08-06', 'wareham', '2019-10-08', 'driver', 'auto', '455', 'brad@gmail.com'),
(3, 'john', 'johnovich', 'johnov', '2019-10-08', 'Almaty', '2019-10-24', 'cook', 'kitchen', '245', 'john@gmail.com'),
(4, 'brad', 'bradovich', 'bradov', '2019-08-06', 'wareham', '2019-10-08', 'driver', 'auto', '455', 'brad@gmail.com');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1571497061),
('m130524_201442_init', 1571497071),
('m190124_110200_add_verification_token_column_to_user_table', 1571497071),
('m191020_080757_create_table_subscriber', 1571559266),
('m191020_082825_create_news_table', 1571676017),
('m191021_164134_create_employee_table', 1571676185),
('m191021_174030_create_city_table', 1571679729),
('m191022_075419_create_user_table', 1571731081),
('m191022_192104_add_index_news_content', 1571772269),
('m191024_062927_book_shop_example', 1571899604);

-- --------------------------------------------------------

--
-- Структура таблицы `subscriber`
--

CREATE TABLE `subscriber` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `subscriber`
--

INSERT INTO `subscriber` (`id`, `email`) VALUES
(1, 'ali19158@gmail.com'),
(4, 'aybek9221@gmail.com'),
(3, 'chttzv@yandex.ru'),
(6, 'farabi@mail.ru'),
(7, 'sdff@DVDGF.DFGV');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sadvas', 'nIDp4sVkUhIRLxgP9R1QgJH44fqnO4Ar', '$2y$13$2i/tLAruqVjP8d/JkfRB6.szhXM7tbYYppxoZEiiTWaodCSFlep0O', NULL, 'sdfvsd@sdgb.fg', 10, 1571731698, 1571731698),
(2, 'ali', 'PEjBotxagAxa3zkR6kjjccHgWXfxllh0', '$2y$13$VyWGNh521V1nBffDKodupumqT7nnUVC5W2DJ5Q41p2y9clrwBhGj6', NULL, 'ali@ali.al', 10, 1571731783, 1571731783),
(4, 'qwerty', 'qIrRllr6hLC_20pXp4wpnePVz6SQohAi', '$2y$13$LgcwG5Q25P90TNzBXD7JNuk1TxqQEHY.Q/eHI5Qzg7zMPYGFxl/li', NULL, 'asfvdsf@vf.vfd', 10, 1571738037, 1571738037),
(8, 'Ali19', 'RkMOOJAK2A1NWgJ2zYVUPOwejxQEnSdB', '$2y$13$NFsgWXlMdTJR61uiwP6ml.9FtmExxNOqHzIJWE4J0vPWLkt0hieSu', NULL, 'ali19158@gmail.com', 10, 1571739984, 1571739984),
(9, 'aliqw', 'jTcwAW0hQK8_P0ew-aPkJR4VdWhdjggt', '$2y$13$qjIoXS6BhEVNZh9qYsZ4budmesj29Ggfe2ZyQNsXQI.2qXySnb7lm', NULL, 'sdfsv@sdfv.fhn', 10, 1571762859, 1571762859),
(10, 'alidw', '-cvrSMCNQLU0SlSyf7GpbGsPUbP5OxM1', '$2y$13$dnJrdYbzoadsJmYK1PU8zuGhr2rAyZRelYuOJ9vA6ycaCGZcl1Q0a', NULL, 'asfvdsf@vf.vf', 10, 1571762891, 1571762891),
(11, 'alidwd', 'ouyWnENpK43Q0bmGzSRThBW50KcC6XQb', '$2y$13$5Macl1oehIEuqhdMyr.wZeMXbs6jt19R9dlTA3dYlqOx40btrPNSK', NULL, 'alidwd@ds.ds', 10, 1571763027, 1571763027),
(12, 'aliyandex', 'LaoZKeuSwc5W1YiP3lBuKz5Afscf31zM', '$2y$13$7VlRLW1sp6acMReCXRtkQuWY55gx0FH8SpJJrMv7b2hHavRaEzjNa', NULL, 'yandex@dx.xx', 10, 1571763192, 1571763192),
(13, 'awedew', 'HJSRxsqPIif0NHX_0cEzmaBpMELfmCnG', '$2y$13$.vRTqGxRA0jzdOaN1hVv7O4BPHWUuWF9R.ZanrwuEVeeXZn5903H6', NULL, 'awedew@ww.ww', 10, 1571763513, 1571763513),
(14, 'scsdf', 'htY5X808PVm0Z9uqhG1gxh28Aov3aQBF', '$2y$13$IV1cmgxwoICXc7pyPYgP0.9aUDdSMr6GH9dcGDHGKa0sZA8oSjsnS', NULL, 'ali19158@yandex.ru', 10, 1571763735, 1571763735);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
