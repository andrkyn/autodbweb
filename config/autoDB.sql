-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Мар 22 2018 г., 16:20
-- Версия сервера: 5.7.11-0ubuntu6
-- Версия PHP: 7.0.27-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `autoDB`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cars`
--

CREATE TABLE `cars` (
  `id` int(4) NOT NULL,
  `category` int(4) NOT NULL,
  `name` varchar(100) NOT NULL,
  `parent` int(4) NOT NULL,
  `price` varchar(10) NOT NULL,
  `motor` varchar(10) NOT NULL,
  `color` int(4) NOT NULL,
  `img` varchar(150) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cars`
--

INSERT INTO `cars` (`id`, `category`, `name`, `parent`, `price`, `motor`, `color`, `img`, `description`) VALUES
(1, 1, 'Skoda Octavia', 1, '25', '1,6', 1, 'skoda_octavia.jpg', 'Год выпуска	2017\r\nТип кузова	седан\r\nДлина, мм	4670 \r\nШирина, мм	1814 \r\nВысота, мм	1461 \r\nКоличество дверей	5\r\nКоличество мест	5\r\nОбъем багажника, л	568-1558 \r\nГарантия	2 года без ограничения пробега\r\n\r\nSkoda Octavia / Шкода Октавия\r\n\r\n Дебют Skoda Octavia (A7) - одного из наиболее долгожданных автомобилей на российском рынке, состоялся в декабре 2012 года. Четвертое поколение хэтчбека Octavia выполнено в новом фирменном стиле компании, как и его «младший брат» Skoda Rapid. Благодаря увеличенной колесной базе Skoda Octavia 2013-го модельного года выглядит более динамично по сравнению с предыдущим поколением. Весьма оригинально выполнена форма стеклопакетов задних дверей. Изящный силуэт этого автомобиля прекрасно подчеркивается элегантными и неповторимыми линиями кузова. Skoda Octavia предлагает покупателю широкий выбор опций, которые были доступны ранее на машинах более высокого класса: адаптивный круиз-контроль, интеллектуальная система освещения, система автоматической парковки. Также в качестве опции предлагается панорамная крыша. \r\n\r\n Для российского рынка линейка силовых агрегатов для Skoda Octavia состоит из 1 «дизеля» и 3 бензиновых моторов, которые прекрасно зарекомендовали себя на других автомобилях концерна VAG. В качестве трансмиссии предлагаются 6-ступенчатая механическая КПП либо автоматическая с двойным сцеплением DSG. В будущем компания планирует расширить гамму модификаций полноприводной версией Skoda Octavia A7. В 2017 году чешская компания представила рестайлинговый вариант семейства Octavia. Обновленные автомобили получили модернизированную головную оптику из 4-х отдельных блоков, а также расширенный список доступных опций'),
(2, 1, 'Skoda Yeti', 1, '20', '1,5', 0, 'skoda_yeti.jpg', 'Год выпуска	2013\r\nТип кузова	Кроссовер\r\nДлина, мм	4223 \r\nШирина, мм	1793 \r\nВысота, мм	1691 \r\nКоличество дверей	5\r\nКоличество мест	5\r\nОбъем багажника, л	322-1760 \r\nГарантия	2 года без ограничения пробега'),
(3, 1, 'Skoda Karoq', 1, '30', '2,0', 0, 'skoda_karoq.jpg', 'Год выпуска	2017\r\nТип кузова	Кроссовер\r\nДлина, мм	4382 \r\nШирина, мм	1841 \r\nВысота, мм	1605 \r\nКоличество дверей	5\r\nКоличество мест	5-7\r\nОбъем багажника, л	521-1630\r\n\r\nSkoda Karoq / Шкода Карок\r\n\r\n Вслед за среднерамзерным Kodiaq компания Skoda представила массам свой очередной кроссовер, являющийся преемником модели Yeti. Новинка получила название "Karoq" (переводится как "автомобиль") - это слово позаимствовано у народа Алуутик, проживающего на острове возле Аляски. Skoda Karoq построен на модельной платформе MQB, заложенной в основу многих автомобилей концерна VAG. По габаритам "Карок" можно сопоставить с VW Tiguan и SEAT Ateca - технически эти модели между собой очень похожи. По сравнению с Yeti новый Karoq заметно крупнее в габаритах, вместительнее оказался и багажник (521 л против 322 л). Многие стилевые решения кроссовер позаимствовал у своего родственного "старшеклассника" Kodiaq – оба паркетника роднит схожая светотехника, практически идентичная решетка радиатора, выраженные кузовные грани и острые линии. \r\n\r\n Силовая гамма у Skoda Karoq состоит из 2-х бензиновых (базовый 1.0 TSI на 115 сил и 1.5 TSI на 150 сил) и 3-х дизельных вариантов (1.6 TDI на 115 сил, 2.0 TDI на 150 и 190 сил). Для всех модификаций предусмотрены 6-скоростная механика и 7-диапазонный автоматизированный робот DSG с двумя сцеплениями. Полный привод для Skoda Karoq доступен как опция (исключительно на дизельных двигателях 150 и 190 сил с коробкой DSG). В интерьере Skoda Karoq чувствуется преемственность с другими автомобилями концерна. "Карок" стал первым автомобилем Шкода с цифровой конфигурируемой приборной панелью. Мультимедийная система с центральным дисплеем на сенсорном управлении (6.5 - 9.2 дюйма в зависимости от комплектации) использует последнюю версию платформы MIB, "понимающую" интерейсы Apple Car Play, Android Auto, Mirror Link. Кроме того, система способна распознавать жесты.'),
(5, 2, 'Citroen Berlingo', 2, '43', '42', 1, 'citroen_berlingo.jpg', 'Год выпуска	2015\r\nТип кузова	Минивэн\r\nДлина, мм	4380 \r\nШирина, мм	1810 \r\n'),
(6, 2, 'Citroen Grand C4', 2, '25', '27', 0, 'citroen_grand_c4.jpg', 'Год выпуска	2016\r\nТип кузова	Минивэн\r\nДлина, мм	4602 \r\n\r\nCitroen Grand C4 Picasso / Ситроен Гранд С4 Пикассо\r\n\r\n Новый Grand C4 Picasso выделяется выразительным и сильным характером. Динамичные линии кузова гармонично сочетаются с экспрессивными фарами, формируя неповторимый и уникальный стиль. Интерьер Grand C4 Picasso демонстрирует исключительную универсальность. Новая платформа EMP2 позволила выйти за рамки ограничений внутреннего пространства, которого стало больше. Модульность конструкции задает идеальные возможности трансформации и эргономики. 2-й и 3-й ряд сидений Grand C4 Picasso легко преобразуются в ровную площадку. Независимые между собой кресла обеспечивают максимум удобств. Багажный отсек в 645 литров может стать вместительнее, если сдвинуть вперед последний ряд сидений. \r\n\r\n Стильный интерьер нового Citroen Grand C4 Picasso одновременно сложный и привлекательный. Сочетание эксклюзивного дизайна и добротных материалов образуют оптимальный баланс комфорта и премиальности. Оригинальные формы приборной доски Grand C4 Picasso подчеркиваются панелями с перламутровым бликом. Применение функционального дисплея отразилось на эргономике: минимум ненужных клавиш – максимум возможностей. Ставшая в основу Citroen Grand C4 Picasso новая платформа предопределила исключительную маневренность и управляемость этого минивэна. 6-ступенчатая роботизированная коробка позволяет добиться максимума топливной эффективности и производительности.'),
(7, 5, 'CHEVROLET Aveo', 5, '34', '45', 0, 'chevrolet_aveo.jpg', 'Year 2015'),
(8, 5, 'CHEVROLET VOLT', 5, '35', '35', 0, 'chevrolet_volt.jpg', 'Year 2015'),
(9, 3, 'Ford fiesta', 3, '24', '24', 0, 'ford_fiesta.jpg', 'Year 2003'),
(10, 4, 'RENAULT Duster', 4, '23', '23', 0, 'renault.jpg', 'Год 2015');

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int(4) NOT NULL,
  `id_user` int(4) NOT NULL,
  `mass_car` varchar(255) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `parent` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `img` varchar(150) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent`, `img`, `description`) VALUES
(1, 'SKODA', 6, 'skoda_logo.png', 'описание Шкода'),
(2, 'Citroen', 6, 'citroen_logo.png', 'Citroën (фр.): [si.tʁo.ɛn]; [Ситроэн]) — французская автомобилестроительная компания, созданная в 1919 году Андре Ситроеном. С 1976 года она стала частью концерна PSA Peugeot Citroën, штаб-квартира находится на улице Fructidor в Париже. (1974—1991).\r\n\r\n'),
(3, 'FORD', 6, 'ford_logo.png', 'Ford (Ford Motor Company) — американская автомобилестроительная компания, производитель автомобилей под маркой Ford.\r\n\r\nЧетвёртый в мире производитель автомобилей по объёму выпуска за весь период существования; в настоящее время — третий на рынке США после GM и Toyota, и второй в Европе после Volkswagen.\r\n\r\nЗанимает девятое место в списке крупнейших публичных компаний США Fortune 500 по состоянию на 2015 год[2] и 27 место в списке крупнейших мировых корпораций Global 500 2015 года[3]. Штаб-квартира компании располагается в городе Дирборн в пригороде Детройта в штате Мичиган. Около пятой части доходов от продаж продукции и предоставляемых услуг составляет федеральный клиентский сектор обслуживания военных заказов (без учёта иностранных заказчиков американского вооружения и военной техники).[4]'),
(4, 'RENAULT', 6, 'renault_logo.png', 'Авто RENAULT'),
(5, 'CHEVROLET', 6, 'chevrolet_logo.png', 'Chevrolet auto'),
(6, 'Automobils', 0, 'category_cars.png', 'Категория автомобили'),
(7, 'WV', 6, 'ford_fiesta.jpg', 'Wolcswagen');

-- --------------------------------------------------------

--
-- Структура таблицы `characteristics`
--

CREATE TABLE `characteristics` (
  `id` int(4) NOT NULL,
  `id_car` int(4) NOT NULL,
  `name` int(100) NOT NULL,
  `text` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `parent` int(4) NOT NULL,
  `alias` varchar(20) NOT NULL,
  `hit` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `parent`, `alias`, `hit`) VALUES
(1, 'Skoda Octavia', 1, 'wee', 0),
(2, 'Skoda Yety', 1, 'fg', 0),
(3, 'Skoda Fabia', 1, 'hg', 0),
(4, 'Citroen Berlingo', 3, 'fg', 0),
(5, 'Citroen Calius', 4, 'gh', 0),
(6, 'Ford scorpio', 4, 'jhj', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `auth_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_surname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `adress` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `wish_list`
--

CREATE TABLE `wish_list` (
  `id` int(4) NOT NULL,
  `id_user` int(4) NOT NULL,
  `mass_car` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `characteristics`
--
ALTER TABLE `characteristics`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `wish_list`
--
ALTER TABLE `wish_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
