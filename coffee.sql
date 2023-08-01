-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2023 at 05:31 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(250) NOT NULL,
  `name` varchar(500) NOT NULL,
  `price` varchar(100) NOT NULL,
  `nameImage` varchar(200) NOT NULL,
  `quantity` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `nameImage`, `quantity`) VALUES
(26, 'SOLAC CE4482', '350', 'cm1', '1'),
(27, 'DELONGHI EC201CD.B', '199', 'cm3', '1'),
(28, 'ROHNSON R-9050', '220', 'cm4', '1');

-- --------------------------------------------------------

--
-- Table structure for table `coffee_machine`
--

CREATE TABLE `coffee_machine` (
  `id` int(250) NOT NULL,
  `nameImage` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `descr` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coffee_machine`
--

INSERT INTO `coffee_machine` (`id`, `nameImage`, `name`, `descr`, `price`) VALUES
(1, 'cm1', 'SOLAC CE4482', '/20 bar, 1600 ml, 850 W,BLACK /', '149$'),
(2, 'cm2', 'UFESA CE7240', '/20 bar, 1600 ml, 850 W, RED /', '179$'),
(3, 'cm3', 'DELONGHI EC201CD.B', '/15 bar, 1000 ml, 1100 W, ORANGE /', '199$'),
(4, 'cm4', 'ROHNSON R-9050', '/20 bar, 900 ml, 1360 W, WHITE/', '220$'),
(5, 'cm5', 'DELONGHI EC 235.BK', '/15 bar, 1000 ml, 1100 W, WHITE /', '250$'),
(6, 'cm6', 'PHILIPS 2200', '/5 bar, 1.8 L, auto-machine , WHITE /', '720$'),
(7, 'cm7', 'KRUPS', '/15 bar, 1.7 L, auto-machine , RED/', '850$');

-- --------------------------------------------------------

--
-- Table structure for table `dessert_coffee`
--

CREATE TABLE `dessert_coffee` (
  `id` int(250) NOT NULL,
  `nameImage` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `descr` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dessert_coffee`
--

INSERT INTO `dessert_coffee` (`id`, `nameImage`, `name`, `descr`, `price`) VALUES
(1, 'ds1', 'Strawberry bomb', '/ strawberries, vanilla, cream, raisins, biscuits /', '7$'),
(2, 'ds2', 'Tiramisu', '/biscotti, espresso, liqueur, powdered sugar ,eggs, mascarpone, cocoa, chocolate /', '10$'),
(3, 'ds3', 'Choco-hazelnut latte', '/chocolate, hazelnuts, ice cream, milk, coffee, cocoa /', '9$'),
(4, 'ds4', 'Coconut happiness', '/coconut, chocolate, liquid chocolate, raisins, blueberries /', '12$'),
(5, 'ds5', 'Chocolate candies', '/chocolate, coconut, cream, hazelnut /', '3$'),
(6, 'ds6', 'Cake smiley', '/chocolate marshmallows, cream, cinnamon, strawberry syrup /', '$8'),
(7, 'ds7', 'Cappuccino for the brave', '/cappuccino in a biscuit cup /', '$12'),
(8, 'ds8', 'Matcha latte', '/latte, matcha, kiwi /', '#6'),
(9, 'ds9', 'Blueberries latte', '/blueberries latte /', '$5'),
(10, 'ds10', 'Strawberries latte', '/strawberries and latte /', '$5'),
(11, 'ds11', 'Ice Americano', '/ice , coffee , water , cinnamon /', '');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(250) NOT NULL,
  `name` varchar(500) NOT NULL,
  `number` varchar(500) NOT NULL,
  `email` varchar(200) NOT NULL,
  `method` varchar(500) NOT NULL,
  `flat` varchar(500) NOT NULL,
  `street` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL,
  `state` varchar(500) NOT NULL,
  `country` varchar(500) NOT NULL,
  `pin_code` varchar(500) NOT NULL,
  `total_products` varchar(250) NOT NULL,
  `total_price` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `pin_code`, `total_products`, `total_price`) VALUES
(1, 'Кристиян Кирязов', '0898243744', 'kriskirqzov@gmail.com', 'cash on delivery', 'гр. София , кв. \"Младост-3\", бл. 364 , вх.2', 'asdasd', 'София', 'asdqa', 'Bulgaria', '1712', 'UFESA CE7240 (1) , DELONGHI EC201CD.B (1) , SOLAC CE4482 (1) , ROHNSON R-9050 (1) ', '747'),
(2, 'Кристиян Кирязов', '0898243744', 'kriskirqzov@gmail.com', 'cash on delivery', 'гр. София , кв. \"Младост-3\", бл. 364 , вх.2', 'asdasd', 'София', 'asdasda', 'Bulgaria', '1712', 'UFESA CE7240 (1) , DELONGHI EC201CD.B (1) , SOLAC CE4482 (1) , ROHNSON R-9050 (1) ', '747'),
(3, 'Кристиян Кирязов', '0898243744', 'kriskirqzov@gmail.com', 'cash on delivery', 'гр. София , кв. \"Младост-3\", бл. 364 , вх.2', 'asdasdasd', 'София', 'asdasd', 'Bulgaria', '1712', 'UFESA CE7240 (1) , DELONGHI EC201CD.B (1) , SOLAC CE4482 (1) , ROHNSON R-9050 (1) ', '747'),
(4, 'Кристиян Кирязов', '0898243744', 'kriskirqzov@gmail.com', 'cash on delivery', 'гр. София , кв. \"Младост-3\", бл. 364 , вх.2', 'asdasd', 'София', 'asdasd', 'Bulgaria', '1712', 'UFESA CE7240 (1) , DELONGHI EC201CD.B (1) , SOLAC CE4482 (1) , ROHNSON R-9050 (1) ', '747'),
(5, 'Кристиян Кирязов', '0898243744', 'kriskirqzov@gmail.com', 'cash on delivery', 'гр. София , кв. \"Младост-3\", бл. 364 , вх.2', 'asdasda', 'София', 'asdasda', 'Bulgaria', '1712', 'SOLAC CE4482 (1) , DELONGHI EC201CD.B (1) , ROHNSON R-9050 (1) ', '769');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(250) NOT NULL,
  `name` varchar(100) NOT NULL,
  `descr` varchar(100) NOT NULL,
  `price` varchar(200) NOT NULL,
  `nameImage` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `quantity` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `descr`, `price`, `nameImage`, `category`, `quantity`) VALUES
(1, 'SOLAC CE4482', '/20 bar, 1600 ml, 850 W,BLACK /', '350', 'cm1', 'cm', 1),
(2, 'UFESA CE7240', '/20 bar, 1600 ml, 850 W, RED /', '179', 'cm2', 'cm', 1),
(3, 'DELONGHI EC201CD.B', '/15 bar, 1000 ml, 1100 W, ORANGE /', '199', 'cm3', 'cm', 1),
(4, 'ROHNSON R-9050', '/20 bar, 900 ml, 1360 W, WHITE/', '220', 'cm4', 'cm', 1),
(5, 'DELONGHI EC 235.BK', '/15 bar, 1000 ml, 1100 W, WHITE /', '250', 'cm5', 'cm', 1),
(6, 'PHILIPS 2200', '/5 bar, 1.8 L, auto-machine , WHITE /', '720', 'cm6', 'cm', 1),
(7, 'KRUPS', '/15 bar, 1.7 L, auto-machine , RED/', '850', 'cm7', 'cm', 1),
(8, 'Strawberry bomb', '/ strawberries, vanilla, cream, raisins, biscuits /', '7', 'ds1', 'ds', 1),
(9, 'Tiramisu', '/biscotti, espresso, liqueur, powdered sugar ,eggs, mascarpone, cocoa, chocolate /', '10', 'ds2', 'ds', 1),
(10, 'Choco-hazelnut latte', '/chocolate, hazelnuts, ice cream, milk, coffee, cocoa /', '9', 'ds3', 'ds', 1),
(11, 'Coconut happiness', '/coconut, chocolate, liquid chocolate, raisins, blueberries /', '12', 'ds4', 'ds', 1),
(12, 'Chocolate candies', '/chocolate, coconut, cream, hazelnut /', '3', 'ds5', 'ds', 1),
(13, 'Cake smiley', '/chocolate marshmallows, cream, cinnamon, strawberry syrup /', '8', 'ds6', 'ds', 1),
(14, 'Cappuccino for the brave', '/cappuccino in a biscuit cup /', '12', 'ds7', 'ds', 1),
(15, 'Matcha latte', '/latte, matcha, kiwi /', '6', 'ds8', 'ds', 1),
(16, 'Blueberries latte', '/blueberries latte /', '5', 'ds9', 'ds', 1),
(17, 'Strawberries latte', '/strawberries and latte /', '5', 'ds10', 'ds', 1),
(18, 'Ice Americano', '/ice , coffee , water , cinnamon /', '5', 'ds11', 'ds', 1),
(23, 'Sandwich boss', '/chicken fillet, melted cheese, tomato, lettuce, onion /', '13', 'sn1', 'sn', 1),
(24, 'Vegetarian sandwich ', '/whole grain bread, tomato, lettuce, cucumber, cream /', '10', 'sn2', 'sn', 1),
(25, 'Club sandwiches', '/whole grain bread, tomato, lettuce, cucumber, cream /', '20', 'sn3', 'sn', 1),
(26, 'Chris sandwich', '/ham, lettuce, tomato, cheese, cucumbers/', '15', 'sn4', 'sn', 1),
(27, 'Italien sandwich', '/mozzarella, garlic sauce, lettuce, tomato, ham /', '16', 'sn5', 'sn', 1),
(28, 'Club big sandwich', '/cheese, tomato, pepperoni, cucumbers, lettuce, ham, bacon /', '25', 'sn6', 'sn', 1),
(29, 'Big sandwich', '/cheese, tomato, pepperoni, cucumbers, lettuce, ham, bacon /', '15', 'sn7', 'sn', 1),
(30, 'Extra-big sandwich', '/tomato, lettuce, cucumber, ham, cheese, mozzarella, cheddar, garlic sauce /', '30', 'sn8', 'sn', 1),
(31, 'Burger champion', '/cheddar, onion, tomato, cheese, pork, lettuce, bbq sauce /', '12', 'sn9', 'sn', 1),
(32, 'Burger legend', '/lettuce, onion, tomato. cheese. egg, beef, pickles, hot sauce, garlic sauce /', '20', 'sn10', 'sn', 1),
(33, 'Кetchup sauce', '', '1', 'sn11', 'sn', 1),
(34, 'Mustard sauce', '', '1', 'sn12', 'sn', 1),
(35, 'Garlic sauce', '', '1', 'sn13', 'sn', 1),
(36, 'Mayonnaise sauce', '', '1', 'sn14', 'sn', 1),
(53, 'Special offer!', '1 pack black coffee.', '18', 'sp1', 'sp', 1),
(54, 'Special offer!', 'Coffee machine and 1 pack coffee.', '160', 'sp2', 'sp', 1),
(55, 'Special offer!', '1 cup.', '10', 'sp3', 'sp', 1),
(56, 'Special offer!', '1 cup and 2 packets of coffee.', '75', 'sp4', 'sp', 1),
(57, 'Special offer!', '3 coffee packets.', '55', 'sp5', 'sp', 1),
(58, 'Special offer!', '1 pack brown coffee', '17', 'sp1', 'sp', 1),
(59, 'Special offer!', '1 pack with black coffee, 1 cup, 1 coffee storage jar.', '65', 'sp6', 'sp', 1),
(60, 'Special offer!', '1 pack with white coffee.', '120', 'sp7', 'sp', 1);

-- --------------------------------------------------------

--
-- Table structure for table `snacks`
--

CREATE TABLE `snacks` (
  `id` int(250) NOT NULL,
  `nameImage` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `descr` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `snacks`
--

INSERT INTO `snacks` (`id`, `nameImage`, `name`, `descr`, `price`) VALUES
(1, 'sn1', 'Sandwich boss', '/chicken fillet, melted cheese, tomato, lettuce, onion /', '13$'),
(2, 'sn2', 'Vegetarian sandwich ', '/whole grain bread, tomato, lettuce, cucumber, cream /', '$10'),
(3, 'sn3', 'Club sandwiches', '/whole grain bread, tomato, lettuce, cucumber, cream /', '20$'),
(4, 'sn4', 'Chris sandwich', '/ham, lettuce, tomato, cheese, cucumbers/', '$15'),
(5, 'sn5', 'Italien sandwich', '/mozzarella, garlic sauce, lettuce, tomato, ham /', '16$'),
(6, 'sn6', 'Club big sandwich', '/cheese, tomato, pepperoni, cucumbers, lettuce, ham, bacon /', '25$'),
(7, 'sn7', 'Big sandwich', '/cheese, tomato, pepperoni, cucumbers, lettuce, ham, bacon /', '15$'),
(8, 'sn8', 'Extra-big sandwich', '/tomato, lettuce, cucumber, ham, cheese, mozzarella, cheddar, garlic sauce /', '30$'),
(9, 'sn9', 'Burger champion', '/cheddar, onion, tomato, cheese, pork, lettuce, bbq sauce /', '12$'),
(10, 'Sn10', 'Burger legend', '/lettuce, onion, tomato. cheese. egg, beef, pickles, hot sauce, garlic sauce /', '20$'),
(11, 'sn11', 'Кetchup sauce', '', '1$'),
(12, 'sn12', 'Mustard sauce', '', '1$'),
(13, 'sn13', 'Garlic sauce', '', '1$'),
(14, 'sn14', 'Mayonnaise sauce', '', '1$');

-- --------------------------------------------------------

--
-- Table structure for table `special_products`
--

CREATE TABLE `special_products` (
  `id` int(250) NOT NULL,
  `products` varchar(250) NOT NULL,
  `nameImage` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `descr` varchar(500) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `special_products`
--

INSERT INTO `special_products` (`id`, `products`, `nameImage`, `name`, `descr`, `price`) VALUES
(1, 'specialP', 'sp1', 'Special offer!', '1 pack black coffee.', '18$'),
(2, 'specialP', 'sp2', 'Special offer!', 'Coffee machine and 1 pack coffee.', '160$'),
(3, 'specialP', 'sp3', 'Special offer!', '1 cup.', '10$'),
(4, 'specialP', 'sp4', 'Special offer!', '1 cup and 2 packets of coffee.', '75$'),
(5, 'specialP', 'sp5', 'Special offer!', '3 coffee packets.', '55$'),
(6, 'specialP', 'sp1', 'Special offer!', '1 pack brown coffee', '17$'),
(7, 'specialP', 'sp6', 'Special offer!', '1 pack with black coffee, 1 cup, 1 coffee storage jar.', '65$'),
(8, 'specialP', 'sp7', 'Special offer!', '1 pack with white coffee.', '120$');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(250) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `fname` varchar(500) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `fname`, `lname`, `phone`) VALUES
(6, 'kris1649898', 'misho74563', 'kriskirqzov@gmail.com', 'kris', 'kiryazov', '0898243744'),
(7, 'simeon1zvqra', '301418830', 'kriskirqzov@gmail.com', 'simeon', 'kiryazov', '0898243212'),
(9, 'Kriskirqzov', '123456', 'kriskirqzov@gmail.com', 'kris', 'Simeonov', '214154351'),
(10, 'vankata', '123456', 'vankata@abv.bg', 'Ivan', 'Dimitrov', '15412103'),
(11, 'vankata1', '1234', '1231241242asweasd', 'qwereqr', 'asdafa', '1231424535'),
(12, '1asdadas', '4c08cfcdcd189cbad9d7e28870cc7e26a918a9d434691b8ed65ffec42866c7fdafcce6597cd7db00c10e9877dfb8e2ee', '1311@aggsd', 'asfafsxc', 'gasdfasdfs', '1231435345'),
(13, 'krisko123', '504f008c8fcf8b2ed5dfcde752fc5464ab8ba064215d9c5b5fc486af3d9ab8c81b14785180d2ad7cee1ab792ad44798c', 'kriskirqzov@gmail.com', 'kris', 'kiryazov', '0898243744'),
(14, 'admin123', 'admin123', 'kriskirqzov@gmail.com', 'admin', 'admin', '0898243744'),
(15, 'admin1234', 'a9c814a170b0bdb551e56977d25d4c41150dd02da15089fd514ba4a58761bc49c02c91808f9a009a4660e456f1b103f2', 'kriskirqzov@gmail.com', 'Кристиян', 'Кирязов', '0898243744');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coffee_machine`
--
ALTER TABLE `coffee_machine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dessert_coffee`
--
ALTER TABLE `dessert_coffee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `snacks`
--
ALTER TABLE `snacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special_products`
--
ALTER TABLE `special_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `coffee_machine`
--
ALTER TABLE `coffee_machine`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dessert_coffee`
--
ALTER TABLE `dessert_coffee`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `snacks`
--
ALTER TABLE `snacks`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `special_products`
--
ALTER TABLE `special_products`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
