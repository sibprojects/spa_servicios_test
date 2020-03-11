-- phpMyAdmin SQL Dump
-- version 2.7.0-pl1
-- http://www.phpmyadmin.net
-- 
-- Хост: localhost
-- Время создания: Мар 11 2020 г., 00:59
-- Версия сервера: 5.6.20
-- Версия PHP: 5.6.26
-- 
-- БД: `spa`
-- 

-- 
-- Дамп данных таблицы `spa_services`
-- 
TRUNCATE TABLE `spa_services`;
INSERT INTO `spa_services` VALUES (1, 'Masaje Atlético', 'Energía 360ºMuscular energético. Recomendado para aliviar tensiones y dolores musculares o para aquellos que disfruten del masaje fuerte.', 65.00);
INSERT INTO `spa_services` VALUES (2, 'Masaje relajante canario 25´', 'Basado en una tradicional técnica. Los resultados incluyen incremento de la circulación, relajación profunda y reducción del estrés.', 40.00);
INSERT INTO `spa_services` VALUES (3, 'Masaje relajante canario 50´', 'Basado en una tradicional técnica. Los resultados incluyen incremento de la circulación, relajación profunda y reducción del estrés.', 60.00);
INSERT INTO `spa_services` VALUES (4, 'Masaje espalda craneal', 'Espalda, cuello ,hombros y craneal.Espectacular masaje sobre toda la espalda, cuello y hombros. Para el alivio de las tensiones y el estrés acumulados en el viaje.', 45.00);

-- 
-- Дамп данных таблицы `spa_services_horario`
-- 
TRUNCATE TABLE `spa_services_horario`;
INSERT INTO `spa_services_horario` VALUES (1, 1, '2020-03-22', 10, 18);
INSERT INTO `spa_services_horario` VALUES (2, 1, '2020-03-23', 10, 18);
INSERT INTO `spa_services_horario` VALUES (3, 1, '2020-03-24', 10, 18);
INSERT INTO `spa_services_horario` VALUES (4, 1, '2020-03-25', 10, 18);
INSERT INTO `spa_services_horario` VALUES (5, 1, '2020-03-26', 10, 18);
INSERT INTO `spa_services_horario` VALUES (6, 1, '2020-03-27', 10, 16);
INSERT INTO `spa_services_horario` VALUES (7, 2, '2020-03-23', 12, 15);

-- 
-- Дамп данных таблицы `spa_services_lng`
-- 
TRUNCATE TABLE `spa_services_lng`;
INSERT INTO `spa_services_lng` VALUES (1, 1, 'eng', 'Athletic Massage', 'Energy 360º Muscular energy. Recommended to relieve muscle tension and pain or for those who enjoy strong massage.');
INSERT INTO `spa_services_lng` VALUES (2, 1, 'rus', 'Спортивный массаж', 'Энергия 360º Мышечная энергия. Рекомендуется для снятия мышечного напряжения и боли или для тех, кто любит сильный массаж.');
INSERT INTO `spa_services_lng` VALUES (3, 2, 'eng', 'Canarian relaxing massage 25´', 'Based on a traditional technique. The results include increased circulation, deep relaxation and stress reduction.');
INSERT INTO `spa_services_lng` VALUES (4, 2, 'rus', 'Канарский расслабляющий массаж 25´', 'На основе традиционной техники. Результаты включают увеличение циркуляции, глубокое расслабление и снижение стресса.');
INSERT INTO `spa_services_lng` VALUES (5, 3, 'eng', '50´ Canarian relaxing massage', 'Based on a traditional technique. The results include increased circulation, deep relaxation and stress reduction.');
INSERT INTO `spa_services_lng` VALUES (6, 3, 'rus', '50´ Канарский расслабляющий массаж', 'На основе традиционной техники. Результаты включают увеличение циркуляции, глубокое расслабление и снижение стресса.');
INSERT INTO `spa_services_lng` VALUES (7, 4, 'eng', 'Cranial back massage', 'Back, neck, shoulders and cranial. Spectacular massage over the entire back, neck and shoulders. For the relief of tensions and stress accumulated on the trip.');
INSERT INTO `spa_services_lng` VALUES (8, 4, 'rus', 'Черепной массаж спины', 'Спина, шея, плечи и череп. Захватывающий массаж всей спины, шеи и плеч. Для снятия напряженности и стресса, накопленного в поездке.');

-- 
-- Дамп данных таблицы `spa_services_reserva`
-- 
TRUNCATE TABLE `spa_services_reserva`;
INSERT INTO `spa_services_reserva` VALUES (1, '2020-03-10 00:58:50', '2020-03-10 00:58:50', 1, 'Tom Sumkin', 'English personal plz)', '2020-03-23', 12, 65.00);
INSERT INTO `spa_services_reserva` VALUES (3, '2020-03-09 23:54:57', '2020-03-09 23:54:57', 1, 'Tom Sumkin', 'nope', '2020-03-23', 15, 65.00);
