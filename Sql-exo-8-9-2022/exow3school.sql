-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 08, 2022 at 11:04 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exow3school`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CustomersID` int(11) DEFAULT NULL,
  `CustomerName` varchar(50) DEFAULT NULL,
  `ContactName` varchar(50) DEFAULT NULL,
  `Adress` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `PostalCode` decimal(6,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomersID`, `CustomerName`, `ContactName`, `Adress`, `City`, `PostalCode`) VALUES
(1, 'Branden Summerley', 'Maudie Screech', '43578 8th Hill', 'Oslo', '52354'),
(2, 'Charleen Seiller', 'Claudius Eite', '3078 North Court', 'Xinxing', '30931'),
(3, 'Karlotta Radbond', 'Marla Dunderdale', '338 Springs Alley', 'Shatura', '61690'),
(4, 'Barde Python', 'Ingram Guerner', '831 Mcguire Crossing', 'Quán Hàu', '33052'),
(5, 'Peterus Rameaux', 'Carlina Bundock', '9588 Killdeer Circle', 'El Refugio', '45109'),
(6, 'Thoma Bernade', 'Rubetta Mattheus', '45 High Crossing Place', 'Vannes', '21116'),
(7, 'Marthe Pilkington', 'Jennine Kas', '658 International Drive', 'Nizhniy Bestyakh', '11079'),
(8, 'Todd McKea', 'Izaak Ateridge', '61349 Helena Road', 'Baculongan', '42779'),
(9, 'Parsifal Fatkin', 'Berky Donnersberg', '4049 Donald Plaza', 'Jiagao', '51295'),
(10, 'Loydie Mathon', 'Alard Godbald', '029 Magdeline Circle', 'Hekinan', '15303'),
(11, 'Merrily Petroff', 'Libby Cotterill', '9713 Macpherson Pass', 'Shchelkovo', '19401'),
(12, 'Sashenka Sleney', 'Cazzie Robelet', '39359 Bunker Hill Street', 'Jaga', '42930'),
(14, 'Sergeant Thuillier', 'Barnett Micka', '961 Mallard Pass', 'Bafang', '14416'),
(15, 'Giacopo Lehrmann', 'Bobette Dursley', '90577 Buhler Park', 'Hassi Berkane', '91732'),
(16, 'Joycelin Savidge', 'Matthias Downton', '44177 Portage Alley', 'Kolchikón', '83839'),
(17, 'Catherine Olive', 'Felita Woodyer', '60632 Alpine Circle', 'Baiyun', '65912'),
(18, 'Alisha Boon', 'Celesta Dagleas', '1 Sugar Place', 'Wuci', '41073'),
(19, 'Robbyn Bateson', 'Veriee Hayes', '81730 Reinke Alley', 'Soroca', '60447'),
(20, 'Diandra Bowra', 'Izzy Oxenden', '77 Bultman Pass', 'Mancogeh', '33521'),
(21, 'Shell Ambrogioli', 'Felicity Curtois', '30271 Lakeland Road', 'Druzhny', '95170'),
(22, 'Lew Abrahamsson', 'Skip Kirwan', '50832 Anderson Pass', 'Tubajon', '41956'),
(23, 'Harriette Millam', 'Miller Pimlock', '118 Summerview Terrace', 'Venlo', '52789'),
(24, 'Mathilda Beckley', 'Palm Flucker', '3798 Amoth Center', 'Taguing', '89487'),
(25, 'Selby Ruckhard', 'Sybil Stickel', '5252 Vera Plaza', 'Mar’’ina Horka', '11947'),
(26, 'Benton Ghidini', 'Rudiger Strete', '7759 6th Crossing', 'Kyosai', '64580'),
(27, 'Monti Kennan', 'Drucy McDonogh', '8 Emmet Hill', 'Man', '27152'),
(28, 'Zoe Deguara', 'Fianna Boylin', '0848 Annamark Park', 'Watthana Nakhon', '91248'),
(29, 'Donielle Pinches', 'Babbette Girkin', '45 Lyons Hill', 'Shiyan', '12752'),
(30, 'Mireille Gilvary', 'Maximo Wardington', '54645 Parkside Alley', 'Patía', '75941'),
(31, 'Pascal Izkoveski', 'Rawley Brothwell', '56 Service Junction', 'Dubrovka', '72908'),
(32, 'Bert McPhater', 'Allistir Spritt', '118 Shelley Hill', 'Bulgan', '71405'),
(33, 'Christoffer Tyers', 'Ham Markey', '893 Rusk Way', 'Nombre de Jesús', '96245'),
(34, 'Delia Hackly', 'Avictor Hissie', '8 Lotheville Center', 'Kadugede', '54242'),
(35, 'Esther Swaden', 'Glenda Ivasechko', '06 Surrey Avenue', 'Los Santos', '73266'),
(36, 'Niel Bradtke', 'Boot Veitch', '82 Surrey Hill', 'Niny', '74012'),
(37, 'Nealy Dacombe', 'Odetta Haley', '7478 Kedzie Drive', 'Benito Juarez', '27389'),
(38, 'Leta Ganter', 'Lida Lurriman', '907 Di Loreto Park', 'Saposoa', '48681'),
(40, 'Andrea Kealy', 'Nolie Cersey', '32 Warbler Crossing', 'Thai Charoen', '99417'),
(41, 'Izabel Maher', 'Gena Puckham', '2370 Bobwhite Road', 'Baorixile', '57922'),
(42, 'Yank Allmond', 'Elbert Cardo', '5907 Prairie Rose Drive', 'Ondo', '24352'),
(43, 'Erminie Fasler', 'Brunhilde Gianelli', '901 Dunning Park', 'Cruz', '50512'),
(44, 'Germain Finan', 'Ingeborg Kulic', '6277 Basil Park', 'Sim', '73903'),
(46, 'Roxana Galilee', 'Tanhya Francesch', '51607 Holy Cross Lane', 'Spanish Town', '77735'),
(47, 'Britt Bewshire', 'Ferris Goadbie', '44471 Morrow Road', 'Tomteboda', '63378'),
(48, 'Blane Davoren', 'Clemence Cregg', '2081 Chive Crossing', 'Liljendal', '63601'),
(49, 'Cordey Oloshkin', 'Phillip Hutten', '1747 Drewry Crossing', 'Catabola', '45217'),
(50, 'Bogey Lennie', 'Baily Le Marchand', '4383 Red Cloud Junction', 'Shuanglong', '96647');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
