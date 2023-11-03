-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: nov. 03, 2023 la 10:58 AM
-- Versiune server: 10.4.27-MariaDB
-- Versiune PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `angtest`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `info`
--

CREATE TABLE `info` (
  `id` text NOT NULL,
  `firstname` text CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL,
  `lastname` text CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL,
  `phone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL,
  `actualtitle` text CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL,
  `linkedin` text CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL,
  `github` text CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL,
  `discord` text NOT NULL,
  `street` text CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL,
  `d1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL,
  `n1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL,
  `c1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL,
  `d2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL,
  `n2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL,
  `c2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL,
  `d3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL,
  `n3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL,
  `c3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL,
  `romanian` text CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL,
  `english` text CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL,
  `aboutme` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL,
  `d4` text CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL,
  `c4` text CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL,
  `title1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL,
  `text1` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL,
  `d5` text CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL,
  `c5` text CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL,
  `title2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL,
  `text2` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL,
  `d6` text CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL,
  `c6` text CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL,
  `title3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_romanian_ci NOT NULL,
  `text3` mediumtext NOT NULL,
  `hobbie1` text NOT NULL,
  `hobbie2` text NOT NULL,
  `hobbie3` text NOT NULL,
  `hobbie4` text NOT NULL,
  `java` longtext NOT NULL,
  `html` mediumtext NOT NULL,
  `css` mediumtext NOT NULL,
  `java1` mediumtext NOT NULL,
  `java2` mediumtext NOT NULL,
  `html1` mediumtext NOT NULL,
  `html2` mediumtext NOT NULL,
  `css1` mediumtext NOT NULL,
  `css2` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Eliminarea datelor din tabel `info`
--

INSERT INTO `info` (`id`, `firstname`, `lastname`, `email`, `phone`, `actualtitle`, `linkedin`, `github`, `discord`, `street`, `d1`, `n1`, `c1`, `d2`, `n2`, `c2`, `d3`, `n3`, `c3`, `romanian`, `english`, `aboutme`, `d4`, `c4`, `title1`, `text1`, `d5`, `c5`, `title2`, `text2`, `d6`, `c6`, `title3`, `text3`, `hobbie1`, `hobbie2`, `hobbie3`, `hobbie4`, `java`, `html`, `css`, `java1`, `java2`, `html1`, `html2`, `css1`, `css2`) VALUES
('1', 'Ciornei', 'Catalin', 'catalin047@gmail.com', '+04 0712345678', 'Junior Web Developer', 'www.linkedin.com/catalin047', 'www.github.com/catalin047', 'catalin#1999', 'Str.Scurtă, nr.6, Suceava', '2014 - 2018', 'Bachelor', 'Andronic Motrescu College', '2018 - 2022', 'License Degree in Computer Science', 'University Ștefan cel Mare Suceava', '2022 - Present', 'Master Degree in Computer', 'University Ștefan cel Mare Suceava', 'Romanian', 'English', 'Hello! I am developing interactive web applications using JavaScript and popular libraries/frameworks such as React, Angular or Vue.js, also I have knowledge of using relational databases and SQL to access and manipulate data.', '2022 - Present', 'WorkUP', 'Junior Web Developer', 'I work on creating websites and database structures, I use frameworks such as React and Angular JS, I also use CSS for custom designs according to the given requirements.', '2021 - 2021', 'SC. EGGER SLR', 'System Operator', 'I was responsible for the raw wood department where I was in charge of the good operation of the manufacturing process, maintenance in different areas of wood processing operations. At the same time, I deal with the preparation of manufacturing recipes as well as supervision.', '2020 - 2021', 'SC. REPARGO SLR', 'Practician Student', 'My main tasks were the repair of phones, tablets, computers that came into service, I was also busy with the hardware part where it was necessary, more precisely on the electronic soldering part.', 'Games', 'Hiking', 'Gym', 'Cycling', '- Strong knowledge developing interactive web applications using JavaScript and popular libraries/frameworks such as React, Angular or Vue.js; ', ' - Solid knowledge in using HTML5 elements, including forms, tables, lists, multimedia elements, etc.;', ' - Experience in creating attractive and consistent styles for web pages using CSS3 and selecting elements using CSS selectors;', ' - Experience using web APIs, including consuming data in JSON format and using XMLHTTPRequest and/or Axios;', ' - Multiple developing full-stack applications with Node.js and Express.js.', ' - Experience in using HTML attributes and attributes to optimize SEO and accessibility of web pages;', ' - Making good responsive web pages that adapt to different devices and screen sizes.', ' - Solid knowledge of using flexbox and CSS grid to create flexible and complex layouts; ', ' - Using CSS animations and transitions to add interactivity and visual effects to web pages.');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`email`(255));
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
