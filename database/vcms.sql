-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 26, 2023 at 05:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(200) NOT NULL,
  `client_login_id` int(200) NOT NULL,
  `client_name` varchar(200) NOT NULL,
  `client_email` varchar(200) NOT NULL,
  `client_contact` varchar(200) NOT NULL,
  `client_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_login_id`, `client_name`, `client_email`, `client_contact`, `client_address`) VALUES
(1, 1, 'James Mon Roe', 'jamesmonroe90@gmail.com', '+254 9952 623', '120-90126 Machakos'),
(3, 7, 'Hillary Gandhi', 'hillaryga90@gmail.com', '11-11094134', '120 Delhi'),
(4, 8, 'Lurding Kamau', 'lkiiou.9903@gmail.com', '+254737124', '120 Localhost');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(200) NOT NULL,
  `login_email` varchar(200) NOT NULL,
  `login_password` varchar(200) NOT NULL,
  `login_rank` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `login_email`, `login_password`, `login_rank`) VALUES
(1, 'jamesmonroe90@gmail.com', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'Client'),
(2, 'admin@vcms.com', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'Admin'),
(3, 'james@gmail.com', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'Doctor'),
(5, 'dr.jane@gmail.com', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'Doctor'),
(7, 'hillaryga90@gmail.com', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'Client'),
(8, 'lkiiou.9903@gmail.com', 'a69681bcf334ae130217fea4505fd3c994f5683f', 'Client');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(200) NOT NULL,
  `payment_treatment_id` int(200) NOT NULL,
  `payment_ref_code` varchar(200) NOT NULL,
  `payment_amount` varchar(200) NOT NULL,
  `payment_means` varchar(200) NOT NULL,
  `payment_date` timestamp(4) NOT NULL DEFAULT current_timestamp(4) ON UPDATE current_timestamp(4)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `payment_treatment_id`, `payment_ref_code`, `payment_amount`, `payment_means`, `payment_date`) VALUES
(6, 1, '8DLF4GBUSR', '2500', 'Cash', '2023-06-24 16:31:09.3513'),
(7, 2, 'QCS45DTKAZ', '2500', 'Mobile Money - Mpesa', '2023-06-24 16:31:34.7525'),
(8, 3, 'UEA2V9JWT8', '5655', 'Bank Transfer', '2023-06-24 16:31:41.4237');

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `pet_id` int(200) NOT NULL,
  `pet_name` varchar(200) NOT NULL,
  `pet_breed` varchar(200) NOT NULL,
  `pet_age` varchar(200) NOT NULL,
  `pet_client_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`pet_id`, `pet_name`, `pet_breed`, `pet_age`, `pet_client_id`) VALUES
(1, 'Dog', 'German Shepard', '20 Months', 1),
(2, 'Dog', 'Chihuahua', '2 Years', 1),
(3, 'Cow', 'Freshian', '2 Years', 3),
(4, 'Pig', 'Pig', '4 Months', 4),
(5, 'Cat', 'Cat', '5 Years', 1);

-- --------------------------------------------------------

--
-- Table structure for table `treatments`
--

CREATE TABLE `treatments` (
  `treatment_id` int(200) NOT NULL,
  `treatment_pet_id` int(200) NOT NULL,
  `treatment_details` longtext NOT NULL,
  `treatment_status` varchar(200) NOT NULL DEFAULT 'Pending',
  `treatment_doctor_id` int(200) NOT NULL,
  `treatment_date` varchar(200) NOT NULL,
  `treatment_cost` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `treatments`
--

INSERT INTO `treatments` (`treatment_id`, `treatment_pet_id`, `treatment_details`, `treatment_status`, `treatment_doctor_id`, `treatment_date`, `treatment_cost`) VALUES
(1, 3, 'This pet is sick AF', 'Paid', 1, '2023-06-24', '2500'),
(2, 4, 'Treatment of New castle desease, Its all fine.', 'Paid', 4, '2023-06-30', '2500'),
(3, 4, 'Treatment for Foot and Mouth Deceases.', 'Paid', 4, '2023-06-23', '5655');

-- --------------------------------------------------------

--
-- Table structure for table `veterinary_doctor`
--

CREATE TABLE `veterinary_doctor` (
  `doctor_id` int(200) NOT NULL,
  `doctor_login_id` int(200) NOT NULL,
  `doctor_name` varchar(200) NOT NULL,
  `doctor_email` varchar(200) NOT NULL,
  `doctor_contacts` varchar(200) NOT NULL,
  `doctor_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `veterinary_doctor`
--

INSERT INTO `veterinary_doctor` (`doctor_id`, `doctor_login_id`, `doctor_name`, `doctor_email`, `doctor_contacts`, `doctor_address`) VALUES
(1, 2, 'James Doe', 'admin@vcms.com', '+254711111111', '120 Nairobi'),
(2, 3, 'Dr James', 'james@gmail.com', '017783243', '120 Nairobi'),
(4, 5, 'Dr Jane', 'dr.jane@gmail.com', '120-993120-43', '120 Kasarani Nairobi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`),
  ADD KEY `ClientLoginID` (`client_login_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `PaymentTreatmentID` (`payment_treatment_id`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`pet_id`),
  ADD KEY `PetClientID` (`pet_client_id`);

--
-- Indexes for table `treatments`
--
ALTER TABLE `treatments`
  ADD PRIMARY KEY (`treatment_id`),
  ADD KEY `TPetID` (`treatment_pet_id`),
  ADD KEY `TDocID` (`treatment_doctor_id`);

--
-- Indexes for table `veterinary_doctor`
--
ALTER TABLE `veterinary_doctor`
  ADD PRIMARY KEY (`doctor_id`),
  ADD KEY `DoctorLoginID` (`doctor_login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `pet_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `treatments`
--
ALTER TABLE `treatments`
  MODIFY `treatment_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `veterinary_doctor`
--
ALTER TABLE `veterinary_doctor`
  MODIFY `doctor_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `ClientLoginID` FOREIGN KEY (`client_login_id`) REFERENCES `login` (`login_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `PaymentTreatmentID` FOREIGN KEY (`payment_treatment_id`) REFERENCES `treatments` (`treatment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pets`
--
ALTER TABLE `pets`
  ADD CONSTRAINT `PetClientID` FOREIGN KEY (`pet_client_id`) REFERENCES `client` (`client_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `treatments`
--
ALTER TABLE `treatments`
  ADD CONSTRAINT `TDocID` FOREIGN KEY (`treatment_doctor_id`) REFERENCES `veterinary_doctor` (`doctor_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `TPetID` FOREIGN KEY (`treatment_pet_id`) REFERENCES `pets` (`pet_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `veterinary_doctor`
--
ALTER TABLE `veterinary_doctor`
  ADD CONSTRAINT `DoctorLoginID` FOREIGN KEY (`doctor_login_id`) REFERENCES `login` (`login_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
