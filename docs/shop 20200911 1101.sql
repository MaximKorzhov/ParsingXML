--
-- Скрипт сгенерирован Devart dbForge Studio 2019 for MySQL, Версия 8.2.23.0
-- Домашняя страница продукта: http://www.devart.com/ru/dbforge/mysql/studio
-- Дата скрипта: 11.09.2020 11:01:39
-- Версия сервера: 5.5.5-10.3.22-MariaDB-0+deb10u1
-- Версия клиента: 4.1
--

-- 
-- Отключение внешних ключей
-- 
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;

-- 
-- Установить режим SQL (SQL mode)
-- 
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 
-- Установка кодировки, с использованием которой клиент будет посылать запросы на сервер
--
SET NAMES 'utf8mb4';

--
-- Установка базы данных по умолчанию
--
USE shop;

--
-- Удалить таблицу `categories`
--
DROP TABLE IF EXISTS categories;

--
-- Удалить таблицу `offers`
--
DROP TABLE IF EXISTS offers;

--
-- Установка базы данных по умолчанию
--
USE shop;

--
-- Создать таблицу `offers`
--
CREATE TABLE offers (
  id int(11) DEFAULT NULL,
  category_id int(11) NOT NULL,
  name varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  description text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  articul varchar(255) NOT NULL,
  picture varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  price float NOT NULL,
  optprice float NOT NULL,
  statusNew int(11) NOT NULL,
  statusAction int(11) NOT NULL,
  statusTop int(11) NOT NULL,
  url varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  color varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  available int(11) NOT NULL,
  vendor varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
)
ENGINE = INNODB,
AVG_ROW_LENGTH = 4096,
CHARACTER SET latin1,
COLLATE latin1_swedish_ci;

--
-- Создать таблицу `categories`
--
CREATE TABLE categories (
  id int(11) NOT NULL,
  category varchar(255) DEFAULT NULL,
  parent_id int(11) DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB,
AVG_ROW_LENGTH = 2730,
CHARACTER SET utf8,
COLLATE utf8_general_ci;

-- 
-- Вывод данных для таблицы offers
--
INSERT INTO offers VALUES
(1, 2, 'Apple Iphone 7', 'Описание товара', '1123123', 'http://www.shop.com/jpeg', 3000, 2000, 1, 0, 0, 'http://www.shop.com/detail.php?ID=1', 'Красный', 1, 'APPLE'),
(2, 3, 'Xiaomi Phone', 'Описание xiaomi', 'x912', 'http://www.shop.com/jpeg', 5000, 4000, 1, 1, 0, 'http://www.shop.com/detail.php?ID=2', 'Черный', 1, 'Xiaomi'),
(3, 5, 'Samsung Tablet', 'Описание samsung', 'st1912', 'http://www.shop.com/jpeg', 50000, 14000, 1, 1, 1, 'http://www.shop.com/detail.php?ID=3', 'Серый', 1, 'Samsung'),
(4, 6, 'LG tablet', 'Описание lg', 'lg4412', 'http://www.shop.com/jpeg', 3400, 400, 1, 0, 1, 'http://www.shop.com/detail.php?ID=4', 'Синий', 1, 'LG');

-- 
-- Вывод данных для таблицы categories
--
INSERT INTO categories VALUES
(1, 'Мобильные телефоны', 0),
(2, 'Apple', 1),
(3, 'Xiaomi', 1),
(4, 'Планшеты', 0),
(5, 'Samsung', 4),
(6, 'LG', 4);

-- 
-- Восстановить предыдущий режим SQL (SQL mode)
-- 
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

-- 
-- Включение внешних ключей
-- 
/*!40014 SET FOREIGN_KEY_CHECKS = @OLD_FOREIGN_KEY_CHECKS */;