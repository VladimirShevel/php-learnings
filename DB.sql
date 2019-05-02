-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 02, 2019 at 10:26 AM
-- Server version: 5.7.20-log
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testSpheremallDB`
--
CREATE DATABASE IF NOT EXISTS `testSpheremallDB` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `testSpheremallDB`;

-- --------------------------------------------------------

--
-- Table structure for table `attribute`
--

DROP TABLE IF EXISTS `attribute`;
CREATE TABLE IF NOT EXISTS `attribute` (
  `code` int(11) NOT NULL AUTO_INCREMENT,
  `attribName` varchar(120) NOT NULL,
  `attributeValue` varchar(120) NOT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attribute`
--

INSERT INTO `attribute` (`code`, `attribName`, `attributeValue`) VALUES
(1, 'size', 'S'),
(2, 'size', 'M'),
(3, 'size', 'L'),
(4, 'size', 'XL'),
(5, 'size', 'XXL'),
(6, 'colour', 'RED'),
(7, 'colour', 'WHITE'),
(8, 'colour', 'BLACK'),
(9, 'colour', 'GREEN'),
(10, 'colour', 'BLUE'),
(11, 'material', 'METALL'),
(12, 'material', 'PAPER'),
(13, 'material', 'PLASTIC'),
(14, 'material', 'GLASS');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `email` text NOT NULL,
  `photo` text NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `surname`, `email`, `photo`, `comment`) VALUES
(0, 'Vasya', 'Pupkin', 'v.pupkin@example.com', 'garazh1_3.jpg', 'RYHRTYTYURTU'),
(18, 'Vasya', 'Pupkin', 'v.shevel@gmail.com', '5b8ee10dcee07482dfd802ba36w7--ukrasheniya-kulon-chasovoj-klyuch.jpg', 'Woohoo!!!!!'),
(19, 'Vladimir', 'Pupkin', 'v.shevel@gmail.com', '1.jpg', 'Woohoo!!!!'),
(20, 'Vladimir', 'Pupkin', 'v.shevel@gmail.com', '1.jpg', 'Woohoo!!!!'),
(21, 'qwqeqe', 'qweqwe', 'v.shevel@gmail.com', '366747_600.jpg', ''),
(22, 'Vladimir', 'Shevel', 'v.shevel@gmail.com', '52de806925c14f80f918f9d3ebb2424d.jpg', 'qererertretret');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `productid` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(120) DEFAULT NULL,
  `productDescription` text,
  `productPrice` tinytext,
  PRIMARY KEY (`productid`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `productName`, `productDescription`, `productPrice`) VALUES
(28, 'Ваттметр Protech Power Meter Cat (PP-3454)', 'Ваттметр Protech Power Meter Cat — это контрольно-измерительный прибор, с помощью которого можно узнать потребление энергии электроприборами, а также посчитать затраты за потребленную электроэнергию. Показывает максимальные и минимальные значения потребляемой электроэнергии, текущее напряжение сети и рабочий ток электроприбора подключенного к ваттметру.\r\n\r\nОчень удобный прибор для определения потребляемой мощности (электрической энергии) бытовых электроприборов (светильники, холодильник, бойлер, стиральная машина, компьютерная техника и другие).\r\n\r\nВаттметром, например, можно определить реальную мощность лампы накаливания или “экономки”, определить потребление электроэнергии холодильником за сутки. Выясните сколько потребляют ваши “зарядки”, медиаплееры, телевизоры и другие устройства, который постоянно включены или имеют дежурный режим работы. Подсчитайте стоимость расходуемой электроэнергии за месяц и… вот вы уже знаете как сэкономить.\r\n\r\nЭта модель прибора также меряет косинус угла между током и напряжением в потребителях реактивной мощности (электродвигатели, люминесцентные лампы с электромагнитным балластом), или коэффициент искажения синусоиды тока (коэффициент мощности) во всех потребителях с импульсным источником питания (телевизор, компьютер, зарядки мобильных телефонов, экономки и др.).\r\n\r\nПрибор позволяет получить информацию о потреблении электроэнергии kWh, а также стоимость потреблённой электроэнергии COST. Применение этого прибора позволит выявить энергетически не эффективные приборы.', '532'),
(29, 'Economka Promo LED A60 12W E27 4200K (4820172680819)', 'Economka – это светодиодные лампы, заслужившие за 5 лет существования всенародное признание. Ключевая идея торговой марки Economka – высокое качество по доступной цене.\r\n\r\nНовая линейка светодиодных ламп Economka Promo 2018 года стала еще доступней для покупателей.\r\n\r\nНаличие СС Driver обеспечивает:\r\n\r\nСтабильную работу ламп при перепадах напряжения в диапазоне 180-250 В\r\nПовышенный световой поток, на 15% ярче чем лампы старого поколения\r\nБолее длительную работоспособность светодиодов, срок службы – 30000 часов\r\nОтсутствие пульсации — яркий ровный свет, не утомляет глаза\r\n\r\nСветодиодная лампа Economka не только прослужит долгие годы, но и сэкономит до 90% электроэнергии.', '63 '),
(30, 'Стол Curver Elise Серый (8711245131085)', 'Отличный. Большой на 6 мест. Очень красивый дизайн крышки стола.', '1395 '),
(31, 'Рулетка стекловолокно 20 м x 13 мм Sigma (3831201)', 'Особенностью стекловолоконных рулеток является возможность измерения больших расстояний за счет увеличенной прочности ленты с низким коэффициентом растяжения.\r\n\r\nПреимущества:\r\n\r\nКорпус закрытого типа из ударопрочного пластика с усилителем;\r\nФиберглассовая высокопрочная лента, не подверженная коррозии;\r\nЦепное кольцо для фиксации начала измерений;\r\nОткидывающийся рычаг для сматывания ленты;\r\nРемешок для ношения на руке.', '99.99 '),
(32, 'Уровень Stanley Foamcast 450 мм (1-42-475)', 'Корпус пластиковый двутаврового сечения\r\nЛегкая ударопрочная конструкция из АБС-пластика, выполненная методом инжекционного литья\r\n3 капсулы уровня: горизонтальная, вертикальная и установленная под углом 45°\r\nУдобная метрическая шкала на рабочей поверхности\r\nПогрешность +/- 2 мм/м', '173 '),
(33, 'Набор мебели Keter Bahamas Fiesta Серый (3253929183003)', 'Bahamas Fiesta — это комплект мебели, в состав которого входят два кресла, две двухместные лавки и большой прямоугольный стол. Комплект идеально выполняет функцию мебели, предназначенных для приема пищи. Такой комплект идеально подойдет для меблировка большого пространства, прекрасно подходит для организации семейного гриля или вечеринки в саду. Обладает прочностью и устойчивостью к воздействию неблагоприятных погодных условий и УФ-лучей. Bahamas Fiesta предлагается в элегантной цветовой гамме. Легко чистится, просто собирается.', '16980'),
(35, 'Круг отрезной Sigma по металлу 125 x 1 x 22.2 мм (1940071)', 'Отрезные круги по металлу из данной серии предназначены для резки изделий из металлов и нержавеющей стали, работы с кузовной сталью и другими аналогичными материалами. Рабочим инструментом при работе отрезного круга является угловая шлифовальная машина (УШМ, болгарка).\r\n\r\nКлючевые преимущества:\r\n\r\nСоответствие европейским нормам безопасности и качества\r\nВысокая режущая способность\r\nНизкая стоимость одного реза\r\nРавномерный износ\r\nМинимизация нагрева рабочей зоны\r\nМягкий рез\r\nОтсутствие заусенцев, прижогов, вибрации\r\nСтойкость\r\n\r\nВсе преимущества:\r\n\r\nСоответствие самым высоким европейским нормам безопасности и качества\r\nВысокая режущая способность и низкая стоимость одного реза — отличное соотношение цены, качества, стойкости, производительности и надежности\r\nРавномерный износ без выкрашивания во время работы при одинаково быстрой скорости резания, оптимальная твердость\r\nМинимизация нагрева рабочей зоны — повышеная износостойкость\r\nМягкий рез — ровная резка материала, поверхность круга не затупляется\r\nОтсутствие заусенцев, прижогов, вибрации — идеальная балансировка круга и посадочного кольца минимизируют вибрации во время работы, что позволяет получить качественный рез\r\nРекомендованы для бытового и профессионального использования', '11');

-- --------------------------------------------------------

--
-- Table structure for table `product_attribute`
--

DROP TABLE IF EXISTS `product_attribute`;
CREATE TABLE IF NOT EXISTS `product_attribute` (
  `productid` int(11) NOT NULL,
  `attributeid` int(11) NOT NULL,
  KEY `productid` (`productid`),
  KEY `attributeid` (`attributeid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_attribute`
--

INSERT INTO `product_attribute` (`productid`, `attributeid`) VALUES
(32, 6),
(32, 11),
(30, 13),
(30, 9),
(29, 6),
(29, 11);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_attribute`
--
ALTER TABLE `product_attribute`
  ADD CONSTRAINT `product_attribute_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`productid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_attribute_ibfk_2` FOREIGN KEY (`attributeid`) REFERENCES `attribute` (`code`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
