-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2024 at 03:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(300) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `color`) VALUES
(1, 1, 'puzzle.jpg', 'One of the well-hidden characteristic about myself is being indulged in a world full of mysteries and achieving peak satisfaction on solving enigmas. Ever since I was young, I got myself immersed to different types of puzzles such as escape rooms, jigsaw pieces, riddle books, and many more.', NULL),
(2, 1, 'math.jpg', 'My excellence in Mathematics emerged during my elementary days starting from Grade 1. Ever since then, it became a fundamental part of my life as I was able to showcase this talent in various competitions, and capture opportunities.', NULL),
(3, 1, 'cooking.jpg', 'I have always wanted to discover and taste new dishes from around the world. Whenever I have a free time, I teach myself to cook different cuisines, both local and global foods.', NULL),
(4, 2, 'game1.jpg', 'A vibrant tower defense game where players strategically place monkey towers and use powerful abilities to pop waves of balloons (Bloons). Features diverse maps, upgrades, and co-op multiplayer.', NULL),
(5, 2, 'game2.jpg', 'A co-op horror game where players investigate haunted locations, using paranormal tools to identify ghosts while avoiding being hunted.', NULL),
(6, 2, 'game3.jpg', 'A multiplayer survival game set in a dark, whimsical world. Players must gather resources, craft tools, and fend off monsters to survive. Features unique characters and seasonal challenges.', NULL),
(7, 2, 'game4.jpg', 'A rhythm game blending music and storytelling, where players interact with virtual singers like Hatsune Miku. Offers diverse songs, customizable characters, and immersive live performances.', NULL),
(8, 2, 'game5.jpg', 'A fast-paced co-op shooter where four survivors battle through zombie-infested campaigns. Features unique infected enemies, various weapons, and offers various custom maps and customizations.', NULL),
(9, 2, 'game6.png', 'A cozy farming simulator where players grow crops, raise animals, and build relationships in a small town. Balances farming with exploration, mining, and heartwarming interactions.', NULL),
(10, 3, 'food1.jpg', 'Takoyaki is a Japanese street food made of batter filled with diced octopus, green onions, and tempura bits, cooked into round balls. Topped with savory sauce, mayo, bonito flakes, and seaweed powder.', NULL),
(11, 3, 'food2.jpg', 'Thinly sliced raw fish or seafood served fresh, often accompanied by soy sauce, wasabi, and pickled ginger. Highlights natural flavors and textures of premium-quality seafood.', NULL),
(12, 3, 'food3.jpg', 'Chopsuey is a stir-fry dish featuring mixed vegetables such as cabbage, carrots, and broccoli with meat or seafood, cooked in a savory sauce. A versatile Asian-inspired comfort food.', NULL),
(13, 3, 'food4.jpg', 'Hawker Chan, a Singaporean restaurant famous for its Michelin-starred soya sauce chicken rice. Celebrated for affordable, flavorful street food with high culinary standards.', NULL),
(14, 3, 'food5.jpg', 'Spicy grilled chicken marinated with peri-peri sauce made from African bird’s eye chili, garlic, and citrus. Known for its smoky flavor and fiery kick, often served with sides like fries or rice.', NULL),
(15, 3, 'food6.jpg', 'Meatogether is a buffet that offers grill and hotpot selections, and serves different types of food such as seafood, beef, chicken, and plenty other options to choose from. My mother and I decided to try this restaurant, and it\'s really worth the price.', NULL),
(16, 4, 'triumph1.jpg', 'This is my first time joining in a General Knowledge Competition hosted by the Rotary Club of Tanauan. I was extremely joyful for this opportunity as I faced different competitors, and managed to grab the Champion title.', NULL),
(17, 4, 'triumph2.jpg', 'I became a \'Mathinik\' and joined the MTAP competition for at least 9 years, starting from Grade 1 until Grade 10. It became a fundamental part of my life as it opened new opportunites for me to learn more.', NULL),
(18, 4, 'triumph3.jpg', 'Engaged in a Science Quiz Bee competition called ChemCollision, which was hosted in BSU Malvar. Our group was able to secure Second places on both 2018 and 2019 respectively.', NULL),
(19, 4, 'triumph4.jpg', 'Because of my acquired skills, I voluntereed to become the representative of BSIT 1-1 during the SintaFest\'s Quiz Bee competition, and proudly secured the First place amongst all students from different programs.  ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `image`, `status`) VALUES
(1, 'Island of Curiosity', 'The Island of Curiosity is a vibrant and magical place where each part of the island is dedicated to a different hobby or interest, offering an unforgettable experiences for those who visit.', NULL, '#fcba03', 'curiosity.jpg', NULL),
(2, 'Island of Entertainment', 'The Island of Entertainment is a thrilling, action-packed destination where every corner offers a new adventure through the world of video games. Each area is dedicated to a different genre, creating an ever-evolving experience for gamers of all types.', NULL, '#7FFF00', 'game1.jpg', NULL),
(3, 'Island of Scrumptiousness ', 'The Island of Scrumptiousness is a dynamic haven where flavors and culinary artistry blend in a tantalizing dance of taste. Every inch of this island celebrates the rhythm of cuisine, with bustling kitchens, sizzling grills, and the melodic clink of plates composing a symphony of gastronomy.', NULL, '#1765e3', 'food6.jpg', NULL),
(4, 'Island of Triumph', 'The Island of Triumph is a majestic and inspiring place, dedicated to celebrating personal accomplishments, milestones, and the pursuit of success. Each area of the island represents different aspects of achievement, with stunning landscapes that reflect the journey of growth and victory.', NULL, '#f51841', 'triumph1.jpg', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
