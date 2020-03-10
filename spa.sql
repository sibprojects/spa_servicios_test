-- phpMyAdmin SQL Dump
-- version 2.7.0-pl1
-- http://www.phpmyadmin.net
-- 
-- Хост: localhost
-- Время создания: Мар 10 2020 г., 00:32
-- Версия сервера: 5.6.20
-- Версия PHP: 5.6.26
-- 
-- БД: `spa`
-- 

-- --------------------------------------------------------

-- 
-- Структура таблицы `spa_services`
-- 

CREATE TABLE `spa_services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` decimal(8,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=5 ;

-- 
-- Дамп данных таблицы `spa_services`
-- 

INSERT INTO `spa_services` VALUES (1, 'Masaje Atlético', 'Energía 360ºMuscular energético. Recomendado para aliviar tensiones y dolores musculares o para aquellos que disfruten del masaje fuerte.', 65.00);
INSERT INTO `spa_services` VALUES (2, 'Masaje relajante canario 25´', 'Basado en una tradicional técnica. Los resultados incluyen incremento de la circulación, relajación profunda y reducción del estrés.', 40.00);
INSERT INTO `spa_services` VALUES (3, 'Masaje relajante canario 50´', 'Basado en una tradicional técnica. Los resultados incluyen incremento de la circulación, relajación profunda y reducción del estrés.', 60.00);
INSERT INTO `spa_services` VALUES (4, 'Masaje espalda craneal', 'Espalda, cuello ,hombros y craneal.Espectacular masaje sobre toda la espalda, cuello y hombros. Para el alivio de las tensiones y el estrés acumulados en el viaje.', 45.00);

-- --------------------------------------------------------

-- 
-- Структура таблицы `spa_services_horario`
-- 

CREATE TABLE `spa_services_horario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `service_id` int(11) NOT NULL,
  `dia` date NOT NULL,
  `inicio` tinyint(4) NOT NULL,
  `fin` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `spa_services_horario_service_id_index` (`service_id`),
  KEY `spa_services_horario_dia_index` (`dia`),
  KEY `spa_services_horario_inicio_index` (`inicio`),
  KEY `spa_services_horario_fin_index` (`fin`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=8 ;

-- 
-- Дамп данных таблицы `spa_services_horario`
-- 

INSERT INTO `spa_services_horario` VALUES (1, 1, '2020-03-22', 10, 18);
INSERT INTO `spa_services_horario` VALUES (2, 1, '2020-03-23', 10, 18);
INSERT INTO `spa_services_horario` VALUES (3, 1, '2020-03-24', 10, 18);
INSERT INTO `spa_services_horario` VALUES (4, 1, '2020-03-25', 10, 18);
INSERT INTO `spa_services_horario` VALUES (5, 1, '2020-03-26', 10, 18);
INSERT INTO `spa_services_horario` VALUES (6, 1, '2020-03-27', 10, 16);
INSERT INTO `spa_services_horario` VALUES (7, 2, '2020-03-23', 12, 15);

-- --------------------------------------------------------

-- 
-- Структура таблицы `spa_services_reserva`
-- 

CREATE TABLE `spa_services_reserva` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `service_id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentarios` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia` date NOT NULL,
  `hora` tinyint(4) NOT NULL,
  `precio` decimal(8,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `spa_services_reserva_service_id_index` (`service_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

-- 
-- Дамп данных таблицы `spa_services_reserva`
-- 

INSERT INTO `spa_services_reserva` VALUES (1, '2020-03-10 00:58:50', '2020-03-10 00:58:50', 1, 'Tom Sumkin', 'English personal plz)', '2020-03-23', 12, 65.00);
INSERT INTO `spa_services_reserva` VALUES (3, '2020-03-09 23:54:57', '2020-03-09 23:54:57', 1, 'Tom Sumkin', 'nope', '2020-03-23', 15, 65.00);
