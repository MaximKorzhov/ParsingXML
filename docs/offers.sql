--
-- Скрипт сгенерирован Devart dbForge Studio 2019 for MySQL, Версия 8.2.23.0
-- Домашняя страница продукта: http://www.devart.com/ru/dbforge/mysql/studio
-- Дата скрипта: 11.09.2020 15:29:00
-- Версия сервера: 5.5.5-10.3.22-MariaDB-0+deb10u1
-- Версия клиента: 4.1
--


SET NAMES 'AUTO';

INSERT INTO shop.offers(id, category_id, name, description, articul, picture, price, optprice, statusNew, statusAction, statusTop, url, color, available, vendor) VALUES
(1, 2, 'Apple Iphone 7', 'Описание товара', '1123123', 'http://www.shop.com/jpeg', 3000, 2000, 1, 0, 0, 'http://www.shop.com/detail.php?ID=1', 'Красный', 1, 'APPLE'),
(2, 3, 'Xiaomi Phone', 'Описание xiaomi', 'x912', 'http://www.shop.com/jpeg', 5000, 4000, 1, 1, 0, 'http://www.shop.com/detail.php?ID=2', 'Черный', 1, 'Xiaomi'),
(3, 5, 'Samsung Tablet', 'Описание samsung', 'st1912', 'http://www.shop.com/jpeg', 50000, 14000, 1, 1, 1, 'http://www.shop.com/detail.php?ID=3', 'Серый', 1, 'Samsung'),
(4, 6, 'LG tablet', 'Описание lg', 'lg4412', 'http://www.shop.com/jpeg', 3400, 400, 1, 0, 1, 'http://www.shop.com/detail.php?ID=4', 'Синий', 1, 'LG'),
(5, 8, 'Sony B2', 'Описание товара', '12121', 'http://www.shop.com/jpeg', 3000, 2000, 1, 0, 0, 'http://www.shop.com/detail.php?ID=1', 'Красный', 1, 'Sony'),
(6, 7, 'Sanyo Phone', 'Описание xiaomi', 'a234', 'http://www.shop.com/jpeg', 5000, 4000, 1, 1, 0, 'http://www.shop.com/detail.php?ID=2', 'Черный', 1, 'Sanyo'),
(7, 5, 'Samsung A7', 'Описание samsung', 'w456', 'http://www.shop.com/jpeg', 50000, 14000, 1, 1, 1, 'http://www.shop.com/detail.php?ID=3', 'Серый', 1, 'Samsung');