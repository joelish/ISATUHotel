-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2018 at 12:09 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iloilo`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `hotel_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `hotel_name`) VALUES
(1, 'HRTSC'),
(2, 'TLSC');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `hotel_id` int(11) DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL,
  `sender_name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `question` text NOT NULL,
  `date_inquired` date NOT NULL,
  `replied_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `sender_name`, `email`, `question`, `date_inquired`, `replied_by`) VALUES
(10, 'Jeremiah Malicdem', 'jmalicdem45@gmail.com', 'is anybody here?', '2018-11-15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `package_title` varchar(50) NOT NULL,
  `package` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `last_edited_by` int(11) DEFAULT NULL,
  `date_deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `room_id`, `package_title`, `package`, `price`, `image_path`, `last_edited_by`, `date_deleted`) VALUES
(1, 3, 'Package A', 'Includes breakfast, lunch, and dinner', '1000', 'images/hotel-detail-tab-2.jpg', NULL, NULL),
(2, 5, 'Package Pakpak', 'Includes Breakfast, Lunch, Snacks, and Dinner', '1500', 'images/hotel-detail-tab-2.jpg', NULL, NULL),
(3, 2, 'Sample Package', 'Include these and that', '500', 'images/available-room-1.jpg', NULL, NULL),
(4, 3, 'Sample Package', 'Include these and that', '500', 'images/available-room-1.jpg', NULL, NULL),
(5, 4, 'Sample Package', 'Include these and that', '500', 'images/available-room-1.jpg', NULL, NULL),
(6, 5, 'Sample Package', 'Include these and that', '500', 'images/available-room-1.jpg', NULL, NULL),
(7, 6, 'Sample Package', 'Include these and that', '500', 'images/available-room-1.jpg', NULL, NULL),
(8, 7, 'Sample Package', 'Include these and that', '500', 'images/available-room-1.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  `amount_paid` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `reservation_id`, `amount_paid`) VALUES
(4, 64, '1700'),
(6, 65, '1500'),
(7, 60, '2500');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `check_in` datetime NOT NULL,
  `check_out` datetime NOT NULL,
  `cancelled_by` int(11) DEFAULT NULL,
  `rate_id` int(11) NOT NULL,
  `total_price` decimal(10,0) NOT NULL,
  `has_confirmed` tinyint(1) NOT NULL,
  `has_additional_bed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `room_id`, `check_in`, `check_out`, `cancelled_by`, `rate_id`, `total_price`, `has_confirmed`, `has_additional_bed`) VALUES
(60, 2, '2018-11-11 00:00:00', '2018-11-12 00:00:00', NULL, 1, '1700', 0, 0),
(64, 2, '2018-11-21 00:00:00', '2018-11-22 00:00:00', NULL, 1, '1700', 0, 0),
(65, 3, '2018-11-24 00:00:00', '2018-11-25 00:00:00', NULL, 4, '2500', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `reservation_info`
--

CREATE TABLE `reservation_info` (
  `id` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `num_adult` int(11) NOT NULL,
  `num_child` int(11) NOT NULL,
  `package_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation_info`
--

INSERT INTO `reservation_info` (`id`, `reservation_id`, `first_name`, `last_name`, `email`, `phone_number`, `num_adult`, `num_child`, `package_id`) VALUES
(59, 60, 'Jeremiah', 'Malicdem', 'jmalicdem45@gmail.com', '09193184874', 1, 0, 3),
(63, 64, 'Jeremiah', 'Malicdem', 'jmalicdem45@gmail.com', '09235323039', 1, 1, 3),
(64, 65, 'Jeremiah', 'Malicdem', 'jmalicdem45@gmail.com', '09235323039', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `room_name` varchar(50) NOT NULL,
  `room_description` text NOT NULL,
  `bed_number` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `last_edited_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `hotel_id`, `room_type`, `room_name`, `room_description`, `bed_number`, `image_path`, `last_edited_by`) VALUES
(2, 1, 'Deluxe', '626', 'Room', 3, 'images/available-room-2.jpg', 1),
(3, 1, 'Supreme', 'Room 101', 'Room', 3, 'images/available-room-2.jpg', NULL),
(4, 1, 'Deluxe', '102', 'Hotel 1 Deluxe Room 2', 3, 'images/available-room-2.jpg', NULL),
(5, 2, 'Supreme', '152', 'Hotel 2 Supreme Room', 3, 'images/available-room-2.jpg', NULL),
(6, 2, 'Deluxe', 'Hotel 2 Deluxe Room', 'Hotel 2 Deluxe Room ', 3, 'images/available-room-2.jpg', NULL),
(7, 2, 'Supreme', '202', 'Hotel 2 Deluxe Room 2', 3, 'images/available-room-2.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `room_amenities`
--

CREATE TABLE `room_amenities` (
  `id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `amenity` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_amenities`
--

INSERT INTO `room_amenities` (`id`, `room_id`, `amenity`) VALUES
(1, 3, 'LCD TV'),
(2, 3, 'Wifi'),
(3, 2, 'Wifi'),
(4, 2, 'Shower'),
(5, 2, 'Television'),
(6, 3, 'Shower'),
(7, 4, 'Wifi'),
(8, 5, 'Wifi'),
(9, 6, 'Wifi'),
(10, 7, 'Wifi'),
(11, 4, 'Telephone Unit'),
(12, 3, ' Telephone Unit');

-- --------------------------------------------------------

--
-- Table structure for table `room_rates`
--

CREATE TABLE `room_rates` (
  `id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `rate_description` varchar(255) NOT NULL,
  `rate` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_rates`
--

INSERT INTO `room_rates` (`id`, `room_id`, `rate_description`, `rate`) VALUES
(1, 2, 'Good for 2 person with breakfast', '1200'),
(2, 2, 'Good for 2 person Without Breakfast', '1000'),
(3, 2, 'Good for 1 Person', '800'),
(4, 3, 'Good for 2 person With Breakfast', '1200'),
(5, 3, 'Good for 2 person Without Breakfast', '1000'),
(6, 3, 'Good for 1 person', '800'),
(7, 4, 'Good for 2 person With Breakfast', '1200'),
(8, 4, 'Good for 2 Without', '1000'),
(9, 4, 'Good for 1 person', '800'),
(10, 5, 'Good for 2 person With Breakfast', '1200'),
(11, 5, 'Good for 2 Without', '1000'),
(12, 5, 'Good for 1 person', '800'),
(13, 6, 'Good for 2 person With Breakfast', '1200'),
(14, 6, 'Good for 2 Without', '1000'),
(15, 6, 'Good for 1 person', '800'),
(16, 7, 'Good for 2 person With Breakfast', '1200'),
(17, 7, 'Good for 2 Without', '1000'),
(18, 7, 'Good for 1 person', '800');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_level` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `mname`, `lname`, `username`, `password`, `user_level`, `email`) VALUES
(1, 'Jeremiah', 'T', 'Malicdem', 'jeremiah', '8b1a9953c4611296a827abf8c47804d7', 'Admin', 'jmalicdem45@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_access`
--

CREATE TABLE `user_access` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `access` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD KEY `hotel_id` (`hotel_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`),
  ADD KEY `replied_by` (`replied_by`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `last_edited_by` (`last_edited_by`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservation_id` (`reservation_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `cancelled_by` (`cancelled_by`),
  ADD KEY `rate_id` (`rate_id`);

--
-- Indexes for table `reservation_info`
--
ALTER TABLE `reservation_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservation_id` (`reservation_id`),
  ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hotel_id` (`hotel_id`),
  ADD KEY `last_edited_by` (`last_edited_by`);

--
-- Indexes for table `room_amenities`
--
ALTER TABLE `room_amenities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `room_rates`
--
ALTER TABLE `room_rates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_access`
--
ALTER TABLE `user_access`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `reservation_info`
--
ALTER TABLE `reservation_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `room_amenities`
--
ALTER TABLE `room_amenities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `room_rates`
--
ALTER TABLE `room_rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_access`
--
ALTER TABLE `user_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `images_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD CONSTRAINT `inquiry_ibfk_1` FOREIGN KEY (`replied_by`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `packages`
--
ALTER TABLE `packages`
  ADD CONSTRAINT `packages_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `packages_ibfk_2` FOREIGN KEY (`last_edited_by`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`reservation_id`) REFERENCES `reservations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`cancelled_by`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `reservation_info`
--
ALTER TABLE `reservation_info`
  ADD CONSTRAINT `reservation_info_ibfk_1` FOREIGN KEY (`reservation_id`) REFERENCES `reservations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_info_ibfk_2` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`last_edited_by`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `rooms_ibfk_2` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `room_amenities`
--
ALTER TABLE `room_amenities`
  ADD CONSTRAINT `room_amenities_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `room_rates`
--
ALTER TABLE `room_rates`
  ADD CONSTRAINT `room_rates_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_access`
--
ALTER TABLE `user_access`
  ADD CONSTRAINT `user_access_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
