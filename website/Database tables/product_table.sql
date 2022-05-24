-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 12:57 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zsportsdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE `product_table` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `user_id` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`id`, `name`, `price`, `description`, `image`, `category`, `user_id`) VALUES
(1, 'ReeBok Jacket', '£45', 'very soft and versatile for evryday use, such as outdoors or the gym.', 'reebok jacket.png', 'Jackets', 0),
(2, 'Adidas Jacket', '£65', 'Sweat-wicking fabric and mesh details help keep you dry and cool when training or travelling to and from games.', 'adidas jacket.png', 'Jackets', 2),
(3, 'Puma Jacket', '£20', 'Puma long sleeve training top with dry cell', 'puma jacket.png', 'Jackets', 4),
(4, 'Nike Jacket', '£70', 'Let the jacket hang open, zip it from the top or the bottom, or let the zips meet somewhere in the middle. ', 'nike jacket.png', 'Jackets', 1),
(5, 'Nike Joggers', '£40', 'The Nike Sportswear Joggers bring a soft and lightweight feel', 'nike joggers.png', 'joggers', 0),
(6, 'Adidas Joggers', '£35', 'Straightforwardly adidas. Keep your look low-key and legit in these pants.', 'adidas joggers.png', 'joggers', 0),
(7, 'ReeBok Joggers', '£25', 'very comfortable joggers, wear over shorts.', 'reebok joggers.png', 'joggers', 0),
(8, 'Puma Joggers', '£20', 'Recharge on rest days in these mens jogger pants.', 'puma jogggers.png', 'joggers', 0),
(9, 'Nike shirt', '£30', 'The Nike Pro DriFIT Top helps keep you cool, dry and moving freely through your workout.', 'nike shirt.png', 'shirts', 0),
(10, 'Adidas shirt', '£25', 'A training pitch essential, this mens football tshirt is designed for comfortable movement.', 'adidas shirt.png', 'shirts', 0),
(11, 'ReeBok shirt', '£20', 'Stay dry. Stay committed. The soft build of this mens training tshirt sheds sweat to keep you dry', 'reebok shirt.png', 'shirts', 0),
(12, 'Puma shirt', '£20', 'Puma short sleeve training top, which is very comfortable and a nice fit.', 'puma shirt.png', 'shirts', 0),
(13, 'Nike trainers', '£70', 'The Nike React Infinity Run Flyknit 2 continues to help keep you running.', 'nike trainers.png', 'trainers', 0),
(14, 'Adidas trainers', '£80 ', 'The 1991 version of the adidas Gazelle returns with authentic details like the contrast 3Stripes and heel tab.', 'adidas trainers.png', 'trainers', 0),
(15, 'ReeBok trainers', '£55', 'Sometimes all it takes is a simple sports silhouette to create an iconic design.', 'reebok trainers.png', 'trainers', 0),
(16, 'Puma trainers', '£45', 'The freshest white sneaks just landed on your radar! The PUMA Cali Sport lands in a white leather upper paired with a chunky silhouette', 'puma trainers.png', 'trainers', 0),
(17, 'Football', '£20', 'the football panels are sewn together with a certain sewing machine and a fine thread. Only soft, foamed ingredients can be used.', 'football.png', 'equipment', 0),
(18, 'Basketball ', '£15', 'FORZA Training Basketballs available in size 6. Dimpled weather resistant rubber casing for grip and ball control.', 'basketball.png', 'equipment', 0),
(19, 'Rackets and ball', '£40', 'Designed for the best tennis players, the Vermont Archon features a VPG Elite Tek Graphite Construction. Weighing 285g and having a 100sq inch head size', 'rackets and ball.png', 'equipment', 0),
(20, 'Hockey Racket', '£60', 'Maximum power and speed ratings for the ultimate in performance, Geocentric Core Technology with Tri Tec carbon weave and Graphene reinforcement', 'hockey bat.png', 'equipment', 0),
(21, 'swimming Goggles', '£10', 'Featuring a curved lens for increased field of vision, an enhanced hydrodynamic profile', 'swimming glasses.png', 'accessories', 0),
(22, 'sports earpeice', '£125', 'With full volume and track controls on each earbud, you wont need to reach for your iPhone each time. ', 'earpeice.png', 'accessories', 0),
(23, 'sports waterbottle', '£15', 'Large capacity 950ml cycling water bottle. Reduced taste and smell of plastic. Soft elastomer mouthpiece for added comfort.', 'waterbottle.png', 'accessories', 0),
(24, 'Sports watch', '£50', 'connected wristband for runners looking to measure their heart rate on their wrist and measure their daily and running distance.', 'smart watch.png', 'accessories', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_table`
--
ALTER TABLE `product_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_table`
--
ALTER TABLE `product_table`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
