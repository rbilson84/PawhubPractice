CREATE TABLE `users` (
  `user_id` int PRIMARY KEY AUTO_INCREMENT,
  `first_name` varchar(50),
  `last_name` varchar(50),
  `email` varchar(255) UNIQUE NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `phone` varchar(20),
  `role` varchar(20) NOT NULL,
  `created_at` datetime
);

CREATE TABLE `pets` (
  `pet_id` int PRIMARY KEY AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `pet_name` varchar(50) NOT NULL,
  `species` varchar(50),
  `breed` varchar(50),
  `age` int,
  `feeding_notes` text,
  `medication_notes` text,
  `vet_details` text,
  `emergency_contact` varchar(100)
);

CREATE TABLE `bookings` (
  `booking_id` int PRIMARY KEY AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `service_id` int NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `visits_per_day` int NOT NULL,
  `status` varchar(20),
  `notes` text,
  `booking_price` decimal(6,2),
  `created_at` datetime,
  `updated_at` datetime
);

CREATE TABLE `visits` (
  `visit_id` int PRIMARY KEY AUTO_INCREMENT,
  `booking_id` int NOT NULL,
  `visit_date` date NOT NULL,
  `visit_time` varchar(20),
  `visit_status` varchar(20),
  `sitter_notes` text
);

CREATE TABLE `messages` (
  `message_id` int PRIMARY KEY AUTO_INCREMENT,
  `booking_id` int NOT NULL,
  `sender_id` int NOT NULL,
  `message_text` text NOT NULL,
  `sent_at` datetime
);

CREATE TABLE `services` (
  `service_id` int PRIMARY KEY AUTO_INCREMENT,
  `service_name` varchar(100),
  `duration_minutes` int,
  `price` decimal(6,2),
  `description` text
);

CREATE TABLE `booking_pets` (
  `booking_pet_id` int PRIMARY KEY AUTO_INCREMENT,
  `booking_id` int NOT NULL,
  `pet_id` int NOT NULL
);

ALTER TABLE `pets` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

ALTER TABLE `bookings` ADD FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

ALTER TABLE `booking_pets` ADD FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`booking_id`);

ALTER TABLE `booking_pets` ADD FOREIGN KEY (`pet_id`) REFERENCES `pets` (`pet_id`);

ALTER TABLE `bookings` ADD FOREIGN KEY (`service_id`) REFERENCES `services` (`service_id`);

ALTER TABLE `visits` ADD FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`booking_id`);

ALTER TABLE `messages` ADD FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`booking_id`);

ALTER TABLE `messages` ADD FOREIGN KEY (`sender_id`) REFERENCES `users` (`user_id`);
