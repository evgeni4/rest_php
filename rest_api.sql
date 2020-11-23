-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Время создания: Ноя 23 2020 г., 16:27
-- Версия сервера: 10.4.14-MariaDB
-- Версия PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `rest_api`
--

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `description` text NOT NULL DEFAULT '0',
  `price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `quantity` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `title`, `description`, `price`, `quantity`) VALUES
(1, 'The Haunting of Hill House', 'Alone in the world, Eleanor is delighted to take up Dr Montague\'s invitation to spend a summer in the mysterious Hill House. Joining them are Theodora, an artistic \'sensitive\', and Luke, heir to the house. But what begins as a light-hearted experiment is swiftly proven to be a trip into their darkest nightmares, and an investigation that one of their number may not survive. Twice filmed as The Haunting, and the inspiration for a 10-part Netflix series, The Haunting of Hill House is a powerful work of slow-burning psychological horr', '10.93', 1),
(2, 'A Christmas Carol', 'Ebenezer Scrooge, a miserly businessman, learns the true meaning of Christmas after he is visited by the ghosts of Christmases past, present, and future', '4.00', 1),
(4, 'Pride and Prejudice', 'Part of Penguin\'s beautiful hardback Clothbound Classics series, designed by the award-winning Coralie Bickford-Smith, these delectable and collectible editions are bound in high-quality colourful, tactile cloth with foil stamped into the design. When Elizabeth Bennet first meets eligible bachelor Fitzwilliam Darcy, she thinks him arrogant and conceited; he is indifferent to her good looks and lively mind. When she later discovers that Darcy has involved himself in the troubled relationship between his friend Bingley and her beloved sister Jane, she is determined to dislike him more than ever. In the sparkling comedy of manners that follows, Jane Austen shows the folly of judging by first impressions and superbly evokes the friendships,gossip and snobberies of provincial middle-class life.', '16.40', 4),
(5, 'Of Mice and Men', 'Guys like us, that work on ranches, are the loneliest guys in the world. They got no family. They don\'t belong no place ...With us it ain\'t like that.We got a future ...because I got you to look after me and you got me to look after you. George and Lennie are migrant American labourers --the one alert and protective and the other strong, stupid and potentially dangerous. This is the powerful story of their relationship and their dreams of finding a more stable and less lonely way of life. This hardback educational edition contains notes to help students\' understanding.', '16.87', 2),
(6, 'The Complete Jane Austen Collection', 'The perfect gift for any Jane Austen lover for only Â£19.99.Each boxset contains seven books, together creating a comprehensive collection of Austen\'s best and much-loved works.Beautifully packaged in a ridged, matt-laminated slipcase with metallic detailing, complete with strikingly attractive, bespoke artwork.', '29.00', 3),
(7, 'Of Mice and Mens-Two', 'Guys like us, that work on ranches, are the loneliest guys in the world. They got no family. They don\'t belong no place ...With us it ain\'t like that.We got a future ...because I got you to look after me and you got me to look after you. George and Lennie are migrant American labourers --the one alert and protective and the other strong, stupid and potentially dangerous. This is the powerful story of their relationship and their dreams of finding a more stable and less lonely way of life. This hardback educational edition contains notes to help students\' understanding.', '216.87', 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
