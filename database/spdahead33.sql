-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 01, 2014 at 02:27 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `speedahead33`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Seller` varchar(30) NOT NULL,
  `Vehicle Name` varchar(50) NOT NULL,
  `Price` int(15) NOT NULL,
  `Photo` varchar(50) NOT NULL,
  `User Name` varchar(30) NOT NULL,
  `Phone Number` int(10) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Seller`, `Vehicle Name`, `Price`, `Photo`, `User Name`, `Phone Number`, `Email`) VALUES
('M/S ANAND AND BROS PVT LT', 'TATA NANO', 2, 'nano.jpg', 'ABC', 1234567, 'manavbagai@gmail.com'),
('Best Motors', 'TOYOTA INNOVA', 11, 'innova.jpg', 'ABC', 1234567, 'manavbagai@gmail.com'),
('M/S ANAND AND BROS PVT LT', 'TATA NANO', 2, 'nano.jpg', 'ABC', 1234567, 'manavbagai@gmail.com'),
('ALIGARH MOTORS', 'BMW X1', 22, 'x1.jpg', 'Audi World', 2147483647, 'audiworld@gmail.com'),
('M/S VIBHANSHU AND CO. LTD', 'CHEVROLET SPARK', 3, 'spark.jpg', 'Audi World', 2147483647, 'audiworld@gmail.com'),
('Kolkata Honda', 'HONDA CITY', 7, 'city.jpg', 'Audi World', 2147483647, 'audiworld@gmail.com'),
('DEV MOTORS', 'HONDA CITY', 7, 'city.jpg', 'ABC', 1234567, 'manavbagai@gmail.com'),
('Audi World', 'AUDI A7', 86, 'a7.jpg', 'ABC', 1234567, 'manavbagai@gmail.com'),
('DEV MOTORS', 'HONDA CITY', 7, 'city.jpg', '', 0, ''),
('M/S CHAUDHARY''S AUTOMOBIL', 'HONDA CITY', 7, 'city.jpg', 'ABC', 1234567, 'manavbagai@gmail.com'),
('Audi World', 'AUDI A7', 86, 'a7.jpg', 'ABC', 1234567, 'manavbagai@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `Car Name` varchar(15) NOT NULL,
  `Brand` varchar(15) NOT NULL,
  `Price` int(20) NOT NULL,
  `Photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`Car Name`, `Brand`, `Price`, `Photo`) VALUES
('CHEVROLET BEAT', 'CHEVROLET', 5, 'beat.jpg'),
('CHEVROLET SPARK', 'CHEVROLET', 3, 'spark.jpg'),
('CHEVROLET CRUZE', 'CHEVROLET', 14, 'cruze.jpg'),
('CHEVROLET SAIL', 'CHEVROLET', 6, 'sail.jpg'),
('HONDA CITY', 'HONDA', 7, 'city.jpg'),
('HONDA CRV', 'HONDA', 23, 'crv.jpg'),
('HONDA BRIO', 'HONDA', 5, 'brio.jpg'),
('HONDA AMAZE', 'HONDA', 5, 'amaze.jpg'),
('HYUNDAI i10', 'HYUNDAI', 5, 'i10.jpg'),
('HYUNDAI i20', 'HYUNDAI', 5, 'i20.jpg'),
('HYUNDAI ELANTRA', 'HYUNDAI', 13, 'elantra.jpg'),
('MARUTI CELERIO', 'MARUTI', 4, 'celerio.jpg'),
('Maruti Alto', 'MARUTI', 3, 'alto800.jpg'),
('MARUTI ERTIGA', 'MARUTI', 6, 'ertiga.jpg'),
('MARUTI CIAZ', 'MARUTI', 8, 'ciaz.jpg'),
('BMW X1', 'BMW', 22, 'x1.jpg'),
('BMW X3', 'BMW', 43, 'x3.jpg'),
('BMW X5', 'BMW', 71, 'x5.jpg'),
('BMW Z4', 'BMW', 69, 'z4.jpg'),
('TOYOTA ETIOS', 'TOYOTA', 5, 'etios.jpg'),
('TOYOTA PRIUS', 'TOYOTA', 38, 'prius.jpg'),
('TOYOTA CAMRY ', 'TOYOTA', 30, 'camry.jpg'),
('TOYOTA INNOVA', 'TOYOTA', 11, 'innova.jpg'),
('AUDI A3', 'AUDI', 23, 'a3.jpg'),
('AUDI A4', 'AUDI', 30, 'a4.jpg'),
('AUDI A6', 'AUDI', 45, 'a6.jpg'),
('AUDI A7', 'AUDI', 86, 'a7.jpg'),
('TATA NANO', 'TATA', 2, 'nano.jpg'),
('TATA ZEST', 'TATA', 6, 'zest.jpg'),
('TATA SUMO', 'TATA', 6, 'sumo.jpg'),
('Tata Manza', 'TATA', 7, 'manza.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `Dealer` varchar(25) NOT NULL,
  `City` varchar(25) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Phone Number` varchar(15) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `Brand` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`Dealer`, `City`, `Address`, `Phone Number`, `Photo`, `Brand`) VALUES
('DEV MOTORS', 'Aligarh', 'GT Road ,Aligarh', '9991113334', 'marutialigarh.jpg', 'Honda'),
('Audi World', 'Mumbai', '22 Juhu  World', '9999944444', 'audi.jpg', 'Audi'),
('Best Motors', 'Delhi', 'Karol Bagh', '99988877766', 'toyota.jpg', 'Toyota'),
('Kolkata Honda', 'Kolkata', 'GKA Road', '9922334455', 'honda.jpg', 'Honda'),
('M/S VIBHANSHU AND CO. LTD', 'Aligarh', 'RAMGHAT ROAD ALIGARH`', '98765431120', 'chev.jpg', 'Chevrolet'),
('M/S PRATEEK AND SONS PVT ', 'KOLKATA', 'BANARSI STREET KOLKATA', '09865632145', 'bmw.jpg', 'BMW'),
('M/S CHAUDHARY''S AUTOMOBIL', 'DELHI', 'SAROJINI NAIDU MARG, DELHI', '09212092120', 'honda.jpg', 'Honda'),
('M/S HARSH MOTORS', 'ALIGARH', '77/88 AURANGZEB ROAD', '09986456554', 'hyundai.jpg', 'Hyundai'),
('M/S HYUNDAI MOTORS', 'DELHI', '23 RING ROAD ', '08987845456', 'hyundai.jpg', 'Hyundai'),
('ALIGARH MOTORS', 'ALIGARH', '22 GRAND TRUCK ROAD', '09566464612', 'bmw.jpg', 'BMW'),
('M/S INDIA MOTORS', 'KOLKATA', 'Anna Road West', '07985645852', 'maruti.jpg', 'Maruti'),
('M/S DADA MOTORS', 'MUMBAI', '88 FERTILIZER ROAD ', '99999966664', 'toyota.jpg', 'Toyota'),
('M/S ANAND AND BROS PVT LT', 'MUMBAI', 'PARK AVENUE ROAD', '9895956112', 'tata.jpg', 'Tata');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `Name` varchar(30) NOT NULL,
  `Heading` varchar(50) NOT NULL,
  `Comments` varchar(500) NOT NULL,
  `Like` int(1) NOT NULL,
  KEY `Comments` (`Comments`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`Name`, `Heading`, `Comments`, `Like`) VALUES
('Manav', 's8idi', 'jsjskisjs\r\n', 0),
('Guest', '', 'saff', 0),
('Guest', '', 'happy birthday\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `Vehicle Name` varchar(30) NOT NULL,
  `User Name` varchar(30) NOT NULL,
  `Like` int(1) NOT NULL,
  `Heading` varchar(50) NOT NULL,
  `Comment` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`Vehicle Name`, `User Name`, `Like`, `Heading`, `Comment`) VALUES
('BMW X1', 'Manav', 1, 'Nice Car', 'Good Car!!!'),
('TOYOTA INNOVA', 'ABC', 1, 'Good Car!!!', 'Nice One'),
('HYUNDAI i10', 'ABC', 1, 'buhahahaahhaha', 'awesum!!'),
('TATA NANO', 'ABC', 1, 'nice car', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone Number` bigint(10) NOT NULL,
  `Authorise` int(1) NOT NULL default '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `Password`, `Email`, `Phone Number`, `Authorise`) VALUES
('Manav', 'manavbagai', 'manavbagai@gmail.com', 9045186277, 0),
('ABC', 'abcd', 'manavbagai@gmail.com', 1234567, 0),
('Manav22', 'manav', 'manavbagai@gmail.com', 9045186277, 0),
('DEV MOTORS', 'dev', 'devmotors@gmail.com', 9991113334, 1),
('Audi World', 'audi', 'audiworld@gmail.com', 9999944444, 1),
('abcd', 'abcde', 'abcd@gmail.com', 11111111, 0),
('xyz', 'xyz', 'manavbagai@gmail.com', 9999999999, 0),
('nnn', 'mmm', 'nnn@gmail.com', 9999999999, 0),
('shaukat', 'helloworld', 'xyz@hotmail.com', 9045186277, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `Vehicle Name` varchar(30) NOT NULL,
  `Photo` varchar(30) NOT NULL,
  `Length` int(10) NOT NULL,
  `Width` int(10) NOT NULL,
  `Height` int(10) NOT NULL,
  `Wheelbase` int(10) NOT NULL,
  `Seating Capacity` int(10) NOT NULL,
  `Engine` varchar(20) NOT NULL,
  `Displacement` int(10) NOT NULL,
  `Gears` int(10) NOT NULL,
  `Cylinders` int(10) NOT NULL,
  `Power` int(10) NOT NULL,
  `Torque` int(10) NOT NULL,
  `Fuel` int(10) NOT NULL,
  `Milage` float NOT NULL,
  `Fuel Type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`Vehicle Name`, `Photo`, `Length`, `Width`, `Height`, `Wheelbase`, `Seating Capacity`, `Engine`, `Displacement`, `Gears`, `Cylinders`, `Power`, `Torque`, `Fuel`, `Milage`, `Fuel Type`) VALUES
('CHEVROLET BEAT', 'beat.jpg', 3640, 1595, 1520, 2375, 5, 'XSDE Smart Tech', 936, 5, 3, 58, 150, 35, 25.44, 'Diesel'),
('CHEVROLET SPARK', 'spark.jpg', 3640, 1595, 1520, 2375, 5, '8V SOHC', 995, 5, 4, 63, 90, 38, 13, 'PETROL'),
('CHEVROLET CRUZE', 'cruze.jpg', 4597, 1788, 1477, 2685, 5, '16V VCDi', 1998, 5, 4, 163, 360, 60, 14.2, 'DIESEL'),
('CHEVROLET SAIL', 'sail.jpg', 4249, 1690, 1503, 2465, 5, 'SMART TECH 4', 1199, 5, 4, 85, 113, 42, 18.2, 'PETROL'),
('HONDA CITY', 'city.jpg', 4440, 1695, 1485, 2550, 5, '4 CYLINDER INLINE', 1497, 5, 4, 116, 146, 42, 16.8, 'PETROL'),
('HONDA CRV', 'crv.jpg', 4545, 1820, 1685, 2620, 5, 'DOHC iVTEC', 2354, 6, 4, 187, 226, 58, 12, 'PETROL'),
('HONDA BRIO', 'brio.jpg', 3610, 1680, 1500, 2345, 5, '4 CYLINDER INLINE', 1198, 5, 4, 87, 109, 35, 18.9, 'PETROL'),
('HONDA AMAZE', 'amaze.jpg', 3990, 1680, 1505, 2405, 5, 'SOHC iVTEC', 1198, 5, 4, 86, 109, 35, 18, 'PETROL'),
('HYUNDAI i10', 'i10.jpg', 3585, 1595, 1550, 2380, 5, '4 CYLINDER INLINE', 1197, 5, 4, 79, 112, 35, 20.63, 'PETROL'),
('HYUNDAI i20', 'i20.jpg', 3995, 1710, 1505, 225, 5, '4 CYLINDER INLINE', 1197, 5, 4, 83, 113, 45, 18.15, 'PETROL'),
('HYUNDAI ELANTRA', 'elantra.jpg', 4530, 1775, 1470, 2700, 5, 'DOHP with VGP', 1582, 6, 4, 126, 259, 56, 21.9, 'DIESEL'),
('MARUTI CELERIO', 'celerio.jpg', 3600, 1600, 1560, 2425, 5, 'K10B', 998, 5, 3, 67, 90, 35, 23.1, 'DIESEL'),
('Maruti Alto', 'alto800.jpg', 3395, 1490, 1475, 2360, 5, 'F8D', 795, 5, 3, 48, 69, 35, 22.74, 'PETROL'),
('MARUTI ERTIGA', 'ertiga.jpg', 4265, 1695, 1685, 2740, 7, 'K SERIES WT', 1373, 5, 4, 94, 130, 45, 16.02, 'PETROL'),
('MARUTI CIAZ', 'ciaz.jpg', 4490, 1730, 1485, 2686, 5, '4 INLINE CYLINDERS', 1373, 5, 4, 91, 130, 67, 20.73, 'DIESEL'),
('BMW X1', 'x1.jpg', 4454, 2044, 1545, 2760, 5, 'STRAIGHT 4 CYLINDERS', 1995, 6, 4, 150, 200, 63, 11.25, 'PETROL'),
('BMW X3', 'x3.jpg', 4886, 1881, 1661, 2810, 5, 'STRAIGHT 4 CYLINDERS', 1995, 8, 4, 184, 380, 67, 16.09, 'DIESEL'),
('BMW X5', 'x5.jpg', 4886, 1938, 1762, 2993, 7, 'TWIN POWER TURBO', 2993, 8, 6, 258, 560, 70, 17.08, 'DIESEL'),
('BMW Z4', 'z4.jpg', 4239, 1790, 1291, 2496, 2, '6 CYLINDER INLINE', 1496, 7, 6, 301, 400, 55, 13.6, 'PETROL'),
('TOYOTA ETIOS', 'etios.jpg', 4265, 1695, 1510, 2550, 5, '4 CYLINDER INLINE', 1496, 5, 4, 90, 132, 45, 17.57, 'PETROL'),
('TOYOTA PRIUS ', 'prius.jpg', 4480, 1745, 1525, 2700, 5, 'TWIN CAM DOHC with V', 1798, 6, 4, 178, 142, 45, 17.98, 'PETROL'),
('TOYOTA CAMRY', 'camry.jpg', 4285, 1825, 1480, 2775, 5, '2AR FXE', 2494, 6, 4, 202, 272, 65, 19.6, 'PETROL'),
('TOYOTA INNOVA', 'innova.jpg', 4585, 1760, 1760, 2750, 7, '4 CYLINDER INLINE', 2495, 5, 4, 100, 200, 55, 12.99, 'DIESEL'),
('AUDI A3', 'a3.jpg', 4456, 1790, 1416, 2637, 5, '4 CYLINDER INLINE', 1968, 6, 4, 143, 320, 50, 20.38, 'DIESEL'),
('AUDI A4', 'a4.jpg', 4701, 1826, 1427, 2808, 5, 'AUDI WAVELIFT SYSYTE', 1798, 6, 4, 170, 320, 63, 18.75, 'PETROL'),
('AUDI A6', 'a6.jpg', 4915, 1874, 1455, 2912, 5, 'COMMON RAIL INJECTIO', 1968, 6, 4, 177, 380, 65, 16.66, 'DIESEL'),
('AUDI A7', 'a7.jpg', 4969, 2139, 1420, 2914, 5, 'EXHAUST GAS TURBOCHA', 2967, 7, 6, 241, 500, 65, 13.88, 'DIESEL'),
('TATA ZEST', 'zest.jpg', 3995, 1706, 1570, 2470, 5, 'QUADRAJET', 1248, 5, 4, 74, 190, 44, 23, 'DIESEL'),
('TATA MANZA', 'manza.jpg', 4413, 1703, 1550, 2520, 5, 'COMMON RAIL', 1248, 5, 4, 88, 200, 44, 21.2, 'DIESEL'),
('TATA SUMO', 'sumo.jpg', 4285, 1726, 1976, 2400, 10, '4 CYLINDER INLINE', 1948, 5, 4, 68, 117, 65, 15, 'DIESEL'),
('TATA NANO', 'nano.jpg', 3099, 1495, 1652, 2230, 4, '2 CYLINDER MPFI', 624, 4, 2, 37, 51, 15, 25.4, 'PETROL');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `User Name` varchar(30) NOT NULL,
  `Vehicle Name` varchar(100) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `Price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`User Name`, `Vehicle Name`, `Photo`, `Price`) VALUES
('Aligarh Chevrolet', 'Chevrolet Beat', 'beat.jpg', 5),
('', '', '', 0),
('ABC', 'MARUTI CELERIO', 'celerio.jpg', 4),
('shaukat', 'HONDA CITY', 'city.jpg', 7);
