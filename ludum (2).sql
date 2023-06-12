-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 12 2023 г., 17:43
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ludum`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `description`) VALUES
(1, 'Стратегические игры', ''),
(2, 'Карточные игры', ''),
(3, 'Для компании', ''),
(4, 'Приключенческие игры', ''),
(6, 'Детективные игры', ''),
(7, 'Экономические игры', 'Хочешь почувствовать себя настоящим профи в сфере финансов? Экономические настольные игры как раз созданы для таких перевоплощений. Выбери один из хитов: Колонизаторы, Энергосеть, Мачи Коро - построй свои империи, города или корпорации. Зарабатывай деньги '),
(8, 'Кооперативные игры', 'Для совместных приключений'),
(10, 'Логические игры', 'Развитие логики взрослых и детей');

-- --------------------------------------------------------

--
-- Структура таблицы `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `rules` text DEFAULT NULL,
  `characteristic` text DEFAULT NULL,
  `id_category` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `storage` int(11) DEFAULT 100
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `games`
--

INSERT INTO `games` (`id`, `image`, `name`, `price`, `description`, `rules`, `characteristic`, `id_category`, `status`, `storage`) VALUES
(13, '1685889873_colonizator.jpg', 'Колонизаторы', 4900, '<p><strong>Про колонизацию, удачу и дипломатию</strong></p><p>Где-то посреди моря раскинулся прекрасный остров Катан. В лесах местный житель добывает дерево, с овец на полях стрижет шерсть, в холмах добывает глину... А тут ещё и конкуренты-колонизаторы норовят занять лучшие земли! Впрочем, на таком маленьком острове вдали от метрополии побеждает тот, кто умеет найти общий язык с соседями. В этом, пожалуй, заключается главная прелесть игры: игроку придется найти баланс между соревнованием и дипломатией, чтобы победить. Колонизаторы — это классика настольных игр, в неё играет весь мир, но чтобы понять, чем она так хороша, нужно открыть коробку и сыграть партию.</p>', '', '', 1, 1, 10),
(14, '1685885917_derevni.jpg', 'Деревни', 1290, '', '', '', 7, 1, 18),
(15, '1685885933_citadeli.jpg', 'Цитадели. Делюкс', 2900, '', '', '', 2, 1, 18),
(16, '1685885948_elementarno.jpg', 'Элементарно', 290, '', '', '', 6, 1, 16),
(17, '1685885964_everdell.jpg', 'Эверделл', 4900, '', '', '', 4, 1, 20),
(19, '1685886090_exit.jpg', 'Exit. Кладбище', 990, '', '', '', 10, 1, 20),
(20, '1685886142_fallout.jpg', 'Фоллаут', 4890, '', '', '', 4, 1, 20),
(21, '1685886156_machi.jpg', 'Мачи Коро', 1290, '', '', '', 2, 1, 0),
(22, '1685886169_jakal.jpg', 'Шакал', 1890, '', '', '', 3, 1, 19),
(23, '1685886188_karkason.jpg', 'Каркасон', 1590, '', '', '', 1, 1, 19),
(24, '1685886201_kotic.jpg', 'Взрывные котята', 990, '', '', '', 2, 1, 19),
(25, '1685887798_mezen.jpg', 'Мезень', 1990, 'Не торгуйся, не скупись\r\nНа Севере человеку делать нечего. Ночи длинные, почти бесконечные, а дни короткие, незаметные. В этом краю разлилась река Мезень, широкая и блестящая. Всякая живность к реке ютится – да и человек не устоял, остался возле водной глади. Столь заворожила человека красота реки, что взял он глину и сажу и начал творить. Так и появилась мезенская роспись – выполненная, как правило, в двух цветах – охряном, как заходящее солнце, и чёрном, как наступающая ночь. \r\n\r\nМезень\r\n\r\nЯ за то люблю Ивана, что головушка кудрява\r\nВы станете ремесленниками, которые монетизировали свой талант и восторг от чудес природных. Вы будете выполнять заказы на роспись, комбинируя символы и переворачивая жетоны. Выполняя свои цели, вы будете получать победные очки. Как положено – тот игрок, что наберёт больше всех очков, станет победителем. Оформление, вдохновлённое Русским Севером (а Мезень находится в нынешней Архангельской области), порадует ценителей нашей культуры. Да и суть игры весьма в духе. \r\n\r\nМезень\r\n\r\nНе морозь меня\r\nИгра длится десять раундов, у каждого своя цель (первая раскрытая карта по движению трека очков). Активный игрок объявляет один из пяти символов, а каждый игрок снимает со своего орнамента группу жетонов с этим символом. Те жетоны, под которым из-за этого образовались пустоты, сдвигаются вниз. Сброшенные жетоны снова возвращаются на поле. Таким образом нужно стараться выполнять цель раунда. Вы можете отказаться от очков, а вместо этого взять два талисмана – они помогут вам самому выбрать назначенный символ.\r\n\r\nМезень\r\n\r\nЗагадки Крайнего Севера\r\nПо словам создателей игры, настолка появилась в два этапа. Сначала был прототип другой игры про битву с босом, в которой им понравилась механика и правила, но дальше разработки не пошли. В дальнейшем уже имеющаяся основа была оформлена в столь нетривиальном стиле и многие оценили самобытность этой игры. Стоит особенно отметить, что игр по народным промыслам крайне мало, и мы надеемся, что это не последний такой экземпляр. Автор отмечает, что если у игроков будет интерес, то настолкам в подобном духе точно быть! А ведь у нас ещё множество уникальных культурных традиций, к которым стоит привлечь внимание общественности и познакомить игроков с особенностями и деталями различных промыслов. \r\n\r\nМезень\r\n\r\nКомплектация\r\n125 двусторонних жетонов с символами мезенской росписи \r\n36 карт целей\r\n75 талисманов\r\n5 жетонов «50/100 очков»\r\n5 фишек для подсчёта победных очков\r\nИгровое поле\r\nФигурка активного игрока\r\nПравила игры\r\nРазмер коробки: 255×255×62 мм\r\nРазмер карт: 44x67 мм (рекомендуются протекторы из данного раздела, 36 шт.)', '', '', 1, 1, 20),
(26, '1685886252_obitel.jpg', 'Обитель теней', 2590, '', '', '', 1, 1, 20),
(27, '1685886264_runebound.jpg', 'Runebound', 5900, '', '', '', 1, 1, 20),
(29, '1685886313_zombi.jpg', 'Зомби в доме', 1590, '', '', '', 1, 1, 20),
(30, '1686581202_1685886332_zombicid.jpg', 'Зомбицид1', 9990, '', '', '', 1, 1, 18);

-- --------------------------------------------------------

--
-- Структура таблицы `order_games`
--

CREATE TABLE `order_games` (
  `id` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_game` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `order_games`
--

INSERT INTO `order_games` (`id`, `id_order`, `id_game`) VALUES
(3, 1, 13),
(2, 1, 14),
(4, 8, 13),
(5, 8, 14),
(6, 8, 23),
(7, 9, 29),
(8, 10, 15),
(15, 11, 13),
(18, 11, 13),
(19, 11, 13),
(9, 11, 14),
(10, 11, 15),
(11, 11, 16),
(14, 11, 16),
(12, 11, 21),
(13, 11, 21),
(16, 11, 21),
(17, 11, 21),
(20, 13, 13),
(23, 13, 13),
(22, 13, 22),
(21, 13, 24),
(24, 16, 14),
(25, 16, 16),
(26, 16, 30),
(27, 16, 30),
(28, 17, 13),
(29, 17, 13),
(30, 18, 13),
(31, 18, 13),
(32, 18, 13),
(33, 18, 13),
(35, 21, 15),
(36, 21, 16),
(38, 23, 13),
(37, 23, 23);

-- --------------------------------------------------------

--
-- Структура таблицы `order_user`
--

CREATE TABLE `order_user` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `closed` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `order_user`
--

INSERT INTO `order_user` (`id`, `id_user`, `created`, `closed`) VALUES
(1, 27, '2023-06-11 17:40:18', NULL),
(2, 28, '2023-06-12 01:10:21', NULL),
(3, 29, '2023-06-12 01:20:27', NULL),
(5, 27, '2023-06-12 01:26:25', NULL),
(6, 27, '2023-06-12 01:26:34', NULL),
(7, 27, '2023-06-12 02:16:43', NULL),
(8, 27, '2023-06-12 02:20:55', NULL),
(9, 27, '2023-06-12 02:27:46', NULL),
(10, 30, '2023-06-12 04:04:53', NULL),
(11, 26, '2023-06-12 12:13:48', NULL),
(12, 26, '2023-06-12 12:41:42', NULL),
(13, 31, '2023-06-12 12:50:11', NULL),
(14, 31, '2023-06-12 12:59:48', NULL),
(15, 31, '2023-06-12 13:05:26', NULL),
(16, 31, '2023-06-12 13:22:31', NULL),
(17, 27, '2023-06-12 14:22:44', NULL),
(18, 27, '2023-06-12 14:30:56', NULL),
(19, 18, '2023-06-12 14:40:00', NULL),
(20, 26, '2023-06-12 14:46:58', NULL),
(21, 32, '2023-06-12 14:48:21', NULL),
(22, 33, '2023-06-12 14:57:53', NULL),
(23, 34, '2023-06-12 14:59:48', NULL),
(24, 34, '2023-06-12 15:03:22', NULL),
(25, 18, '2023-06-12 15:13:36', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `admin`, `userName`, `email`, `password`, `created`) VALUES
(1, 0, 'Андрей', 'test@mail.ru', '12345', '2023-05-15 10:13:07'),
(2, 0, 'Павел', 'testPavel@mail.ru', '$2y$10$hcicFkE0dwr1hQenlGrBdut2Oxui0N0WsSWdIKxvpXAkPqQir0PJK', '2023-05-15 10:40:25'),
(3, 1, 'Павел1', 'admin@mail.ru', '$2y$10$DAEWVcnDCaikzZPVKDP/E.0.fRDMD7VI92YRTDltIc8PpvmtwuYWO', '2023-05-15 10:46:56'),
(4, 0, 'Никита', 'dodge1@yandex.ru', '$2y$10$0qVkUgv43pdntj5N/Vv96uN2r/IoV9cJfpC17RGqjXYKbiAEQiWE6', '2023-05-15 11:30:36'),
(6, 0, 'Кирилл', 'kirya@gmail.com', 'qwesadzxc', '2023-05-15 12:02:55'),
(7, 1, 'Степан', 'Stepka228@mail.ru', 'uuqyw', '2023-05-15 12:36:58'),
(8, 0, 'Кирилл', 'devkirya2@g0mail.com', 'qwesadzxc', '0000-00-00 00:00:00'),
(9, 0, 'Кирилл', 'dasdas@mail.com', 'qwesadzxc', '2023-05-15 17:42:45'),
(12, 0, 'asd', 'asd213@312', '$2y$10$SbWw1iZFc./0XNl3eeKJF.1eVxVXEPWfxX.UBFMj/xWveCkACi74.', '2023-05-17 20:35:57'),
(14, 0, 'asd', '2131@asd', '$2y$10$G/eQP2vTRJDOragHe5/qReNPJogSBlzENI9viEi1DS6Ma/GP7c/sO', '2023-05-17 20:37:47'),
(16, 0, 'asdйцу', 'admin2@mail.ru', '$2y$10$CllAayUYTqP7tRU8VVoEfevfpy4Egdhp2v3tnoPrfS5qTH2EYApIO', '2023-05-17 21:27:34'),
(17, 0, 'asdйцу', 'admin3@mail.ru', '$2y$10$WTp1k.wmkpTvCZpnhgUzkemCehqcJpCEsklqgUOqy95ZKqF0cfu46', '2023-05-17 21:28:09'),
(18, 1, 'Har', 'admin4@mail.ru', '$2y$10$hTggrI04JuUU.AbvYkAqxeAkS5WIsrJanNyIPNUnTGzjvyoLWowCq', '2023-05-17 21:42:01'),
(19, 0, 'qweqwe', 'qweqwe@gmail.com', '$2y$10$Ou8OxHYAFvzNjf8vbLuIM.cF1v5u5lgpcJNf6svpF6tvb9jwxSD76', '2023-05-18 11:20:39'),
(20, 0, 'nik', 'qweqweqwe@mail.ru', '$2y$10$zju2KeQF46yDiTMJQYI0X./7cyLBbd.CZuoujsk1METNqQJAtr8EW', '2023-05-18 11:32:56'),
(21, 0, 'zxc', 'zxc@zxc', '$2y$10$0PFe/GTObgduFMBxsJI0JeI237gLW/G6HgSb8pONJM9vPIHfMYnW.', '2023-05-18 11:35:12'),
(22, 0, 'eernest', 'eernest@mail.ru', '$2y$10$K/5ykiXrGZZfberMrh5xz.FU7PXweN4pBY1zQfdTVlZfBRdbkQzQO', '2023-06-02 09:11:20'),
(23, 0, '11111', 'asdsad@mail.ru', '$2y$10$4hIAylAMFkzgmFNdiBwDRupPgnrMYejONWREUK7MrTP2cXcBqhrum', '2023-06-03 18:41:08'),
(24, 1, 'zxczxc', 'zxczxc@mail', '$2y$10$UCaB3V4GJBjEJDFEvTkiy.Y0UPri6r4fOY.E5HDkBCjQKh44xq/5i', '2023-06-03 18:42:12'),
(25, 0, 'azazin', 'azazin@mail.ru', '$2y$10$ITeZYFJD6SaiqvjtDSIg2uFsMpV1Abk4ijuVtsZvWCMR/kIsV/tUO', '2023-06-04 17:00:02'),
(26, 0, 'barbaris', 'barbaris@mail.ru', '$2y$10$xjAYfocfWc0HcMNQE2yspeintCf2fMCKkUwcFwoBsaGIX.cbkEJ4y', '2023-06-11 15:41:07'),
(27, 0, 'qweasdzxc', 'qweasdzxc@mail.ru', '$2y$10$1WKYE26lrtJhrVa3YiJrZe52TfCsvkZFik.l.MQ6Gk3ZGOmGAp1.e', '2023-06-11 17:40:18'),
(28, 0, 'kunimaster', 'kunimaster@mail.ru', '$2y$10$IwZ3X4Yw7OecJ5.FU4Pcju.hbqPGsMk.LikbBV9HoW3fWFYqSTDB6', '2023-06-12 01:10:21'),
(29, 0, 'lolipop', 'lol@mail.ru', '$2y$10$C3k1WD0cX0TCUSV5IOQ2E.GGQw4QrOlGNtgWhMGTNrua/unTxUkxu', '2023-06-12 01:20:27'),
(30, 0, 'yalubluminecraft', 'yalubluminecraft@mail.ru', '$2y$10$5OxYOJhdygf8vXHj2Xay8.a3M9CrHC720kLteOCdzFYJo42npX2zG', '2023-06-12 04:04:53'),
(31, 0, 'kika', 'kika@mail.ru', '$2y$10$dMp1e3.t8Dvdt1DwneffcuiEyQ9bc44lyleDRB.V0LaC9m5A5Vh6y', '2023-06-12 12:50:11'),
(32, 0, 'zxczxczxc', 'zxczxczxc@yandex.ru', '$2y$10$QlNLTUC5sWGhW9Rj/lInresQGXgwlPtamGpPG4oXv5D1bFjaMGMC2', '2023-06-12 14:48:21'),
(33, 0, 'lebfilka', 'lebfilka@mail.ru', '$2y$10$I1UB63TTwqzd5Uvtnqg3r.ep2V.L7ymgqya/LOdJoilODaCdK/kY6', '2023-06-12 14:57:53'),
(34, 0, 'ulayna', 'lbflkv@mail.ru', '$2y$10$czvQw5eisJE8Zb6avXvvqesxlmnnsZk4wezSsZjFCLoPrfoau.XKa', '2023-06-12 14:59:48');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_games`
--
ALTER TABLE `order_games`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_order` (`id_order`,`id_game`),
  ADD KEY `id_game` (`id_game`);

--
-- Индексы таблицы `order_user`
--
ALTER TABLE `order_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `order_games`
--
ALTER TABLE `order_games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT для таблицы `order_user`
--
ALTER TABLE `order_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `games_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `order_games`
--
ALTER TABLE `order_games`
  ADD CONSTRAINT `order_games_ibfk_3` FOREIGN KEY (`id_game`) REFERENCES `games` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_games_ibfk_4` FOREIGN KEY (`id_order`) REFERENCES `order_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `order_user`
--
ALTER TABLE `order_user`
  ADD CONSTRAINT `order_user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
