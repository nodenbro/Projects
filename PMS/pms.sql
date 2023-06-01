-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2023 at 12:33 AM
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
-- Database: `pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `listing_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_firstname` varchar(50) DEFAULT NULL,
  `user_lastname` varchar(50) DEFAULT NULL,
  `user_role` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `exp` varchar(255) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `applied_at` date DEFAULT curtime(),
  `company_id` int(11) DEFAULT NULL,
  `company_name` varchar(50) DEFAULT NULL,
  `company_business` varchar(100) DEFAULT NULL,
  `company_address` varchar(200) DEFAULT NULL,
  `company_email` varchar(100) DEFAULT NULL,
  `company_reqs` varchar(255) DEFAULT NULL,
  `exp_req` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `listing_id`, `user_id`, `user_firstname`, `user_lastname`, `user_role`, `email`, `exp`, `cv`, `phone`, `applied_at`, `company_id`, `company_name`, `company_business`, `company_address`, `company_email`, `company_reqs`, `exp_req`) VALUES
(3, 1, 1, 'Erblin', 'Berisha', 'Game Developer', 'erblinberisha98@gmail.com', 'Voluptas cupiditate ', '1681146103_Erblin Berisha CV.pdf', '045-222-222', '2023-04-10', 28, 'Hoyt Mason', 'Corporis atque archi', 'Itaque dolor qui per', 'vunurusyqe@mailinator.com', 'Game Developer', '5 Years of Experience'),
(5, 3, 14, 'Hayfa', 'Rice', 'Nisi laboriosam sun', 'radiwozuby@mailinator.com', '', '1681146103_Erblin Berisha CV.pdf', '+1 (152) 294-6382', '2023-04-10', 30, 'Patience Keith', 'Id officia debitis n', 'Aut explicabo Aliqu', 'lemipybe@mailinator.com', 'Web Developer', '5 Years of Experience'),
(6, 3, 15, 'Dawn', 'Morse', 'Iure maxime ullamco ', 'dawn@mailinator.com', '', '1681146198_Erblin Berisha CV.pdf', '+1 (709) 828-8683', '2023-04-10', 30, 'Patience Keith', 'Id officia debitis n', 'Aut explicabo Aliqu', 'lemipybe@mailinator.com', 'Web Developer', '5 Years of Experience'),
(7, 3, 13, 'Shelby', 'Guerra', 'Ea libero accusantiu', 'jexukykun@mailinator.com', 'yrtyr', '1681146330_Erblin Berisha CV.pdf', '+1 (193) 939-8377', '2023-04-10', 30, 'Patience Keith', 'Id officia debitis n', 'Aut explicabo Aliqu', 'lemipybe@mailinator.com', 'Web Developer', '5 Years of Experience'),
(8, 3, 6, 'Acton', 'Crane', 'Full Stack Developer', 'xutiduw@mailinator.com', 'Commodi occaecat fac', '1681146103_Erblin Berisha CV.pdf', '+1 (285) 748-7107', '2023-04-11', 30, 'Patience Keith', 'Id officia debitis n', 'Aut explicabo Aliqu', 'lemipybe@mailinator.com', 'Web Developer', '5 Years of Experience'),
(9, 3, 1, 'Erblin', 'Berisha', 'Game Developer', 'erblinberisha98@gmail.com', 'Laborum laborum volu', '1681241690_1681146103_Erblin Berisha CV (2).pdf', '045-222-222', '2023-04-11', 30, 'Patience Keith', 'Id officia debitis n', 'Aut explicabo Aliqu', 'lemipybe@mailinator.com', 'Web Developer', '5 Years of Experience');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `business` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(70) DEFAULT NULL,
  `created_at` date DEFAULT curdate(),
  `updated_at` date DEFAULT curdate(),
  `ceo_name` varchar(50) DEFAULT NULL,
  `ceo_lastname` varchar(50) DEFAULT NULL,
  `ceo_address` varchar(255) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_role` varchar(255) DEFAULT 'CEO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `business`, `address`, `email`, `password`, `created_at`, `updated_at`, `ceo_name`, `ceo_lastname`, `ceo_address`, `project_id`, `user_id`, `user_role`) VALUES
(23, 'Eagan Craft', 'Velit quia voluptat', 'Unde reiciendis enim', 'Asperiores qui volup', '123', '2012-12-25', '2023-04-04', 'Acton', 'Crane', 'Prishtine', NULL, 6, 'CEO'),
(24, 'Lesley Mcgowan', 'Et maxime deserunt n', 'Hic sed laboris non ', 'Mollitia nostrud per', '123', '1973-01-04', '2023-04-04', 'Acton', 'Crane', 'Prishtine', NULL, 6, 'CEO'),
(25, 'Nerea Paul', 'Impedit numquam sin', 'Voluptatem enim aut ', 'Exercitation minus p', '123', '1992-01-13', '2023-04-04', 'Acton', 'Crane', 'Prishtine', NULL, 6, 'CEO'),
(26, 'Leilani Bradshaw', 'Ad eaque est neque e', 'Odio reiciendis perf', 'Dignissimos ipsa in', '123', '2002-01-28', '2023-04-04', 'Acton', 'Crane', 'Prishtine', NULL, 6, 'CEO'),
(27, 'Maxine Taylor', 'Nihil rerum facere a', 'In ducimus est enim', 'titan@mailinator.com', '123', '2001-05-07', '2023-04-04', 'Acton', 'Crane', 'Prishtine', NULL, 6, 'CEO'),
(28, 'Hoyt Mason', 'Corporis atque archi', 'Itaque dolor qui per', 'vunurusyqe@mailinator.com', '123', '2015-10-03', '2023-04-05', 'Erblin', 'Berisha', 'Prishtine', NULL, 1, 'CEO'),
(30, 'Patience Keith', 'Id officia debitis n', 'Aut explicabo Aliqu', 'lemipybe@mailinator.com', '123', '2014-09-03', '2023-04-05', 'Erblin', 'Berisha', 'Prishtine', NULL, 1, 'CEO'),
(31, 'Dale Mays', 'Quibusdam nobis saep', 'Magnam in ad animi ', 'dale@mailinator.com', '123', '2011-12-04', '2023-04-06', 'Acton', 'Crane', 'Prishtine', NULL, 6, 'CEO'),
(33, 'Rana Bennett', 'Sit ullamco et temp', 'Tempora vero qui con', 'kykaci@mailinator.com', '123', '2012-10-25', '2023-04-08', 'Erblin', 'Berisha', 'Prishtine', NULL, 1, 'CEO');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_firstname` varchar(50) DEFAULT NULL,
  `user_lastname` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `user_id`, `user_firstname`, `user_lastname`, `description`) VALUES
(5, 1, 'Erblin', 'Berisha', 'I have been using PMS for two years and don\'t really have that many complaints but recently \nthere are some features and functions that need to be fixed and added, other than that it has been a great journey.'),
(6, 6, 'Acton', 'Crane', 'I have nothing but good words for this Service and subscribing to it has been worth it so far.'),
(7, 14, 'Hayfa', 'Rice', 'When i first heard of PMS it was from a friend who had only good things to say about this  Service and now i can whole-heartedly say that she was right on picking and recommending me PMS because it\'s been such a big help on my Work Projects.'),
(8, 10, 'Lyle', 'Pace', 'I have been working with Projects very often and one concern was  how i would manage it and maintain it but with PMS it has been a lifesaver on how easy it was to manuever around it.'),
(9, 15, 'Dawn', 'Morse', 'Great Service and couldn\'t recommend more than i have already been doing. Great Managing and Enviroment. Can\'t wait to see what new featurest they bring next.'),
(10, 12, 'Britanney', 'Pollard', 'I have been using PMS for a year now and i have been more than happy on working with them. They are a recommandation i would give any day.'),
(15, 1, 'Erblin', 'Berisha', 'Very good test');

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `id` int(11) NOT NULL,
  `application_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `cmp_name` varchar(40) DEFAULT NULL,
  `cmp_business` varchar(50) DEFAULT NULL,
  `cmp_email` varchar(50) DEFAULT NULL,
  `cmp_address` varchar(50) DEFAULT NULL,
  `cmp_reqs` varchar(255) DEFAULT NULL,
  `cmp_exp_req` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`id`, `application_id`, `company_id`, `cmp_name`, `cmp_business`, `cmp_email`, `cmp_address`, `cmp_reqs`, `cmp_exp_req`) VALUES
(1, NULL, 28, 'Hoyt Mason', 'Corporis atque archi', 'vunurusyqe@mailinator.com', 'Itaque dolor qui per', 'Game Developer', '5 Years of Experience'),
(2, NULL, 28, 'Hoyt Mason', 'Corporis atque archi', 'vunurusyqe@mailinator.com', 'Itaque dolor qui per', 'Suscipit qui laborum', 'Nisi numquam debitis'),
(3, NULL, 30, 'Patience Keith', 'Id officia debitis n', 'lemipybe@mailinator.com', 'Aut explicabo Aliqu', 'Web Developer', '5 Years of Experience'),
(4, NULL, 28, 'Hoyt Mason', 'Corporis atque archi', 'vunurusyqe@mailinator.com', 'Itaque dolor qui per', 'Game Developer', '5 Years of Experience'),
(5, NULL, 28, 'Hoyt Mason', 'Corporis atque archi', 'vunurusyqe@mailinator.com', 'Itaque dolor qui per', 'Deleniti cumque omni', 'Eum mollit sed cupid');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `front_end` varchar(50) DEFAULT NULL,
  `back_end` varchar(50) DEFAULT NULL,
  `game_dev` varchar(50) DEFAULT NULL,
  `cloud` varchar(50) DEFAULT NULL,
  `data_analyst` varchar(50) DEFAULT NULL,
  `website` varchar(200) DEFAULT NULL,
  `github` varchar(150) DEFAULT NULL,
  `twitter` varchar(150) DEFAULT NULL,
  `instagram` varchar(150) DEFAULT NULL,
  `facebook` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `front_end`, `back_end`, `game_dev`, `cloud`, `data_analyst`, `website`, `github`, `twitter`, `instagram`, `facebook`) VALUES
(3, 1, '20%', '20%', '20%', '20%', '20%', 'https://www.nodenbro.com', 'nodenbro', 'nodenbro1', 'erblinnberisha', 'Erblin B. Berisha'),
(4, 6, '0%', '0%', '0%', '0%', '0%', '2009-05-29dadadas', '2009-05-29', '2009-05-29', '2009-05-29', '2009-05-29'),
(5, 7, '90%', '50%', '50%', '90%', '10%', 'Testing1', 'Testing2', 'Testing3', 'Testing4', 'Testing5'),
(6, 4, '90%', '10%', '50%', '50%', '90%', 'hahah', 'hahaha', 'hahahaha', 'hahh', 'ahahahah'),
(7, 11, '90%', '10%', '50%', '10%', '50%', 'www.erblin.com', 'nodenbro', 'nodenbro1', 'erblinnberisha', 'Erblin B. Berisha'),
(8, 3, '0%', '0%', '0%', '0%', '0%', '', '', '', '', ''),
(9, 14, '1%', '20%', '70%', '100%', '100%', '', '', '', '', ''),
(10, 16, NULL, NULL, NULL, NULL, NULL, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `theme` varchar(50) NOT NULL,
  `description` varchar(240) NOT NULL,
  `user_role` varchar(30) DEFAULT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `user_lastname` varchar(50) DEFAULT NULL,
  `user_phone` varchar(50) DEFAULT NULL,
  `user_details` varchar(50) DEFAULT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `userid`, `name`, `theme`, `description`, `user_role`, `user_name`, `user_lastname`, `user_phone`, `user_details`, `created_at`, `updated_at`) VALUES
(55, 1, 'Faith Stuart', 'Quas quisquam magni ', 'Labore quaerat totam', 'Game Developer', 'jynudefol', 'Simon', '+1 (601) 332-6523', 'Minus qui aperiam sa', '1981-05-28', '2023-03-31'),
(56, 1, 'Vivian Farrell', 'Nisi voluptas blandi', 'Temporibus inventore', 'Game Developer', 'gemuke', 'Thompson', '+1 (416) 286-1609', 'Sunt quia eos sed pe', '2007-12-06', '2023-03-31'),
(57, 1, 'Zelenia Herrera', 'Sit aut dolorem eaq', 'Obcaecati aut in tot', 'Game Developer', 'bukadi', 'Pratt', '+1 (357) 839-9877', 'Laborum Ducimus ve', '2015-04-22', '2023-03-31'),
(58, 1, 'George Chase', 'Minima voluptas saep', 'Debitis quo vero a e', 'Game Developer', 'waduki', 'Duke', '+1 (894) 139-1523', 'Deleniti est offici', '1972-10-27', '2023-03-31'),
(59, 1, 'Callie James', 'Neque ad fugiat proi', 'Vero quo et maxime n', 'Game Developer', 'molene', 'Bartlett', '+1 (429) 833-3328', 'Aut mollitia animi ', '1981-10-17', '2023-03-31'),
(60, 6, 'Hedda Johnson', 'Ex molestiae aut und', 'Nam excepteur irure ', 'Full Stack Developer', 'bydah', 'Carrillo', '+1 (358) 292-1542', 'Dolore ea qui animi', '2010-09-20', '2023-04-02'),
(62, 1, 'Alexis Rose', 'Aliqua Veniam dolo', 'Tempore soluta null', 'Game Developer', 'vunaput', 'Hudson', '+1 (924) 211-2142', 'Expedita rerum sit ', '2004-02-03', '2023-04-11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `birthdate` date NOT NULL DEFAULT current_timestamp(),
  `phone` varchar(25) NOT NULL,
  `pic` varchar(255) DEFAULT 'default.png',
  `role` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `address`, `birthdate`, `phone`, `pic`, `role`, `password`) VALUES
(1, 'Erblin', 'Berisha', 'erblinberisha98@gmail.com', 'Prishtine', '2000-12-18', '045-222-222', '1681240703_default.png', 'Game Developer', '123'),
(2, 'Ferdinand', 'Talley', 'tihi@mailinator.com', 'Prishtine', '1975-07-04', '+1 (533) 229-9635', 'default.png', 'Web Developer', '123'),
(3, 'Dakota', 'Cherry', 'vepetopi@mailinator.com', 'Prishtine', '1988-09-17', '+1 (643) 941-6707', 'default.png', 'Full Stack Developer', '123'),
(4, 'Bertha', 'Montgomery', 'pewur@mailinator.com', 'Prishtine', '1977-09-25', '+1 (754) 371-8786', 'default.png', 'Game Developer', '123'),
(5, 'Hillary', 'Shepard', 'divehogo@mailinator.com', 'Prishtine', '1984-03-02', '+1 (221) 534-5662', 'default.png', 'Web Developer', '123'),
(6, 'Acton', 'Crane', 'xutiduw@mailinator.com', 'Prishtine', '2009-05-29', '+1 (285) 748-7107', '1680996649_tom-confused.png', 'Full Stack Developer', '123'),
(7, 'Melissa', 'Gentry', 'dupo@mailinator.com', 'Prishtine', '1977-02-13', '+1 (412) 266-1227', 'default.png', 'Web Developer', '123'),
(9, 'Alex', ' Santo', 'alexsanto@mailinator.com', 'Prishtine', '2007-08-08', '+1 (715) 843-1511', 'default.png', 'Full Stack Developer', '123'),
(10, 'Lyle', 'Pace', 'hyteqet@mailinator.com', 'Prishtine', '1975-03-28', '+1 (721) 222-9642', '1680996980_shop-sketch.png', 'Unde obcaecati esse ', '123'),
(11, 'Randall', 'Haynes', 'zolyzyd@mailinator.com', 'Prishtine', '2011-04-10', '+1 (993) 495-4044', 'default.png', 'Veniam voluptate il', '123'),
(12, 'Britanney', 'Pollard', 'wakulymik@mailinator.com', 'Prishtine', '1998-10-31', '+1 (544) 695-8522', 'default.png', 'Eligendi corrupti i', '123'),
(13, 'Shelby', 'Guerra', 'jexukykun@mailinator.com', NULL, '2009-09-29', '+1 (193) 939-8377', 'default.png', 'Ea libero accusantiu', '123'),
(14, 'Hayfa', 'Rice', 'radiwozuby@mailinator.com', 'Japan, Hokkaido', '1995-03-27', '+1 (152) 294-6382', 'default.png', 'Nisi laboriosam sun', '123'),
(15, 'Dawn', 'Morse', 'dawn@mailinator.com', NULL, '1997-03-19', '+1 (709) 828-8683', '1681046286_test.jpg', 'Iure maxime ullamco ', '123'),
(16, 'Malik', 'Craig', 'malik@mailinator.com', 'New York', '1978-04-14', '+1 (944) 105-1331', 'default.png', 'Recusandae Doloremq', '123'),
(17, 'Aquila', 'Haynes', 'tuhe@mailinator.com', NULL, '1995-11-16', '+1 (952) 663-8937', 'default.png', 'Sint ut et voluptat', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `company_id` (`company_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `company_id` (`company_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `applications_ibfk_2` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);

--
-- Constraints for table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `companies_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `listings`
--
ALTER TABLE `listings`
  ADD CONSTRAINT `listings_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
