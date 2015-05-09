-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 23 Απρ 2015 στις 14:26:19
-- Έκδοση διακομιστή: 5.6.21
-- Έκδοση PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Βάση δεδομένων: `database1`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `products_storage`
--

CREATE TABLE IF NOT EXISTS `products_storage` (
`id` int(50) NOT NULL,
  `name_of_product` varchar(50) NOT NULL,
  `quantity_of_product` int(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `products_storage`
--

INSERT INTO `products_storage` (`id`, `name_of_product`, `quantity_of_product`) VALUES
(1, 'prod1', 8),
(2, 'prod2', 5),
(3, 'prod3', 10),
(4, 'prod4', 10);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `products_store`
--

CREATE TABLE IF NOT EXISTS `products_store` (
`id` int(50) NOT NULL,
  `name_of_product` varchar(50) NOT NULL,
  `quantity_of_product` int(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `products_store`
--

INSERT INTO `products_store` (`id`, `name_of_product`, `quantity_of_product`) VALUES
(1, 'prod1', 0),
(2, 'prod2', 0),
(3, 'prod3', 5),
(4, 'prod4', 0);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`global_id` int(50) NOT NULL,
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`global_id`, `id`, `name`, `password`) VALUES
(1, '1', 'ipallilos_katastimatos_1', 'O9QLdfWzXl7EgCal4bqctg=='),
(2, '2', 'ipallilos_apothikis_1', 'O9QLdfWzXl7EgCal4bqctg=='),
(3, '1', 'ipallilos_katastimatos_2', 'O9QLdfWzXl7EgCal4bqctg=='),
(4, '2', 'ipallilos_apothikis_2', 'O9QLdfWzXl7EgCal4bqctg==');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `products_storage`
--
ALTER TABLE `products_storage`
 ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `products_store`
--
ALTER TABLE `products_store`
 ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`global_id`), ADD UNIQUE KEY `global_id` (`global_id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `products_storage`
--
ALTER TABLE `products_storage`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT για πίνακα `products_store`
--
ALTER TABLE `products_store`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
MODIFY `global_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
