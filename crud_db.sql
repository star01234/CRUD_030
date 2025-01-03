-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2025 at 10:10 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `attributes` varchar(255) DEFAULT NULL,
  `stock` int(6) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `price`, `description`, `image`, `attributes`, `stock`, `created_at`, `updated_at`) VALUES
(12, 'Car Tire', 'Car Accessories', 120.50, 'High-quality rubber tire for passenger cars.', 'car_tire.jpg', '{\"size\": \"205/55R16\", \"type\": \"all-season\"}', 50, '2025-01-03 08:59:22', '2025-01-03 08:59:22'),
(13, 'Car Battery', 'Car Parts', 85.99, '12V car battery, compatible with most car models.', 'car_battery.jpg', '{\"voltage\": \"12V\", \"capacity\": \"60Ah\"}', 30, '2025-01-03 08:59:22', '2025-01-03 08:59:22'),
(14, 'Car Seat Cover', 'Car Accessories', 45.75, 'Comfortable and durable car seat cover.', 'car_seat_cover.jpg', '{\"material\": \"leather\", \"color\": \"black\"}', 100, '2025-01-03 08:59:22', '2025-01-03 08:59:22'),
(15, 'Car GPS System', 'Electronics', 250.00, 'Advanced GPS navigation system for cars.', 'car_gps.jpg', '{\"screen_size\": \"7 inches\", \"brand\": \"GPSCo\"}', 15, '2025-01-03 08:59:22', '2025-01-03 08:59:22'),
(16, 'Car Headlights', 'Car Parts', 75.00, 'LED headlights for enhanced visibility and style.', 'car_headlights.jpg', '{\"type\": \"LED\", \"brightness\": \"3500 lumens\"}', 40, '2025-01-03 08:59:22', '2025-01-03 08:59:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
