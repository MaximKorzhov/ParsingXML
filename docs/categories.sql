--
-- Скрипт сгенерирован Devart dbForge Studio 2019 for MySQL, Версия 8.2.23.0
-- Домашняя страница продукта: http://www.devart.com/ru/dbforge/mysql/studio
-- Дата скрипта: 11.09.2020 15:39:02
-- Версия сервера: 5.5.5-10.3.22-MariaDB-0+deb10u1
-- Версия клиента: 4.1
--


SET NAMES 'AUTO';

INSERT INTO shop.categories(id, category, parent_id) VALUES
(1, 'Мобильные телефоны', 0),
(2, 'Apple', 1),
(3, 'Xiaomi', 1),
(4, 'Планшеты', 0),
(5, 'Samsung', 4),
(6, 'LG', 4),
(7, 'Sanyo', 1),
(8, 'Sony', 1);