-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 29, 2021 at 02:37 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Codeacademy`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `Description` text NOT NULL,
  `img` varchar(50) NOT NULL,
  `title` varchar(35) NOT NULL,
  `src` text NOT NULL,
  `date` date NOT NULL DEFAULT '2003-05-20'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`ID`, `name`, `Description`, `img`, `title`, `src`, `date`) VALUES
(1, 'Learning to code with my disability: One learner shares her story  ', 'Rosita shared the story of how she became interested in learning to code in a post on the CodeAcademy Forum called My story, learning to code with my disability:', 'codecademy-rosita-interview.png', 'blog', 'https://news.codecademy.com/learning-to-code-with-my-disability/', '2021-05-03'),
(2, 'Change Your Life as a Programmer With the 80/20 Rule', 'The principle that will change how you make decisions', 'undraw_hacker_mind_6y85.png', 'blog', 'https://medium.com/better-programming/change-your-life-as-a-programmer-with-the-80-20-rule-17c325609343', '2021-04-20'),
(3, 'How long does it take to learn to code?', 'If you’re just getting started on the path to learning to code, it can feel daunting. How long will it take until you know how to code?', 'how-long-to-learn-to-code.png', 'blog', 'https://news.codecademy.com/how-long-does-it-take-to-learn-to-code/\" target=\"_blank', '2021-04-20'),
(4, '8 Powerful React Libraries To Try In 2021\r\n', 'Using The Right Libraries To Optimize Project Workflow\r\n', 'undraw_react_y7wq.png', 'blog', 'https://medium.com/javascript-in-plain-english/8-powerful-react-libraries-to-try-in-2021-8ede57b422bf', '2021-04-20'),
(5, 'What I wish I knew when I first started coding', 'In this article, we hear from Stephanie, a software engineer with over 10 years of programming experience. Stephanie shares some of her experiences and the things she wishes she knew when she was first starting out. We hope these five lessons help you find success on your learning journey!\r\n', 'what-i-wish-i-knew-when-i-started-coding.png', 'blog', 'https://news.codecademy.com/what-i-wish-i-knew-first-started-coding/', '2021-04-20'),
(6, '4 CSS and JavaScript Tricks to Breathe Life Into Your Website', 'These code snippets will breathe life into your static website', 'undraw_static_assets_rpm6.png', 'blog', 'https://medium.com/better-programming/4-css-and-javascript-tricks-to-breathe-life-into-your-website-6464f470a86d', '2021-04-20'),
(7, 'A guide of UI design trends for 2021\r\n', 'More 3D, more color, glassmorphism, and great tools!\r\n', 'undraw_asset_selection_ix3v.png', 'blog', 'https://uxdesign.cc/a-guide-of-ui-design-trends-for-2021-637ac038cb99', '2021-04-20'),
(9, 'How We Build Micro Frontends', 'Building micro-frontends to speed up and scale our web development process.\r\n', 'microfrontend.png', 'blog', 'https://blog.bitsrc.io/how-we-build-micro-front-ends-d3eeeac0acfc', '2021-05-04'),
(10, '5 ways to stay accountable to your learning goals in 2021\r\n', 'Planning to learn to code in 2021? We know it can feel overwhelming — especially if you’ve never coded before. But you’ve got this! And we’ve put together a list of 5 tips and resources to help you stay accountable to your coding goals this year.\r\n', 'coding-goals-accountability.png', 'blog', 'https://news.codecademy.com/stay-accountable-to-learning-goals/', '2021-05-06');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Description` varchar(25) NOT NULL,
  `img` text NOT NULL,
  `title` varchar(25) NOT NULL,
  `src` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`ID`, `name`, `Description`, `img`, `title`, `src`) VALUES
(1, 'Front-End Engineering', 'Beginner friendly', 'front.png', 'course', 'http://localhost:8888/web2021/code/pages/frontend.php'),
(2, 'Android N Development', 'Beginner friendly', 'android.png', 'course', 'http://localhost:8888/web2021/code/pages/androidn.php'),
(3, 'Full Stack Engineering', 'Beginner friendly', '', 'course', 'http://localhost:8888/web2021/code/pages/fullstack.php'),
(5, 'UI/UX Design Essentials', 'Beginner friendly', 'uiux1.png', 'course', 'http://localhost:8888/web2021/code/pages/uiux.php'),
(7, 'Master Web Design In Photoshop', 'Intermediate ', 'photoshop1.png', 'course', 'http://localhost:8888/web2021/code/pages/photoshop.php'),
(8, 'Back-End Engineering ', 'Beginner friendly', 'backend.png', 'course', 'http://localhost:8888/web2021/code/pages/backend.php'),
(9, 'Learn Data Science', 'Beginner friendly', 'datascience1.png', 'course', 'http://localhost:8888/web2021/code/pages/datascience.php'),
(12, 'Learn Responsive Design', 'Beginner friendly', 'htmlcss1.png', 'course', 'http://localhost:8888/web2021/code/pages/responsive.php'),
(13, 'Learn Bootstrap', 'Intermediate ', '', 'course', 'http://localhost:8888/web2021/code/pages/bootstrap.php'),
(14, 'Learn Java', 'Beginner friendly', '', 'course', 'http://localhost:8888/web2021/code/pages/java.php');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `lastname`, `email`, `message`) VALUES
(3, 'Ani', 'Sahakyan', 'anisah@gmail.com', 'Hello, I really like your website.');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `position` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`ID`, `name`, `position`, `img`) VALUES
(1, 'Alicia Vikander', 'Founder,CEO', 'alicia.jpg'),
(2, 'Avan Jogia', 'Vice President', 'avan jogia.jpg'),
(3, 'Rose Byrne', 'Full stack Designer', 'rose.jpg'),
(4, 'Louis Scott', 'Senior Software Engineer ', 'louis.jpg'),
(5, 'Claire Foy', 'Curriculum Developer', 'claire.jpg'),
(6, 'Anselem Bresgott', 'Web Developer', 'anselem bresgott.jpg'),
(7, 'Evan Roderick', 'Data Scientist\r\n', 'evan roderick.jpg'),
(8, 'Emma Mackey', 'Software Engineer ', 'emma.jpg'),
(9, 'Sarah Pidgeon', 'Web Developer', 'Sarah.jpg'),
(10, 'Federico Morris', 'Software Engineer ', 'federico2.jpg'),
(11, 'Flavie Delangle', 'Full Stack Developer', 'flavie.jpg'),
(12, 'Gabriel Guevara', 'UI/UX Designer', 'gabriel.jpg');

-- --------------------------------------------------------

--
-- Stand-in structure for view `search`
-- (See below for the actual view)
--
CREATE TABLE `search` (
`ID` int(11)
,`name` mediumtext
,`Description` mediumtext
,`img` mediumtext
,`title` varchar(35)
,`src` mediumtext
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(35) NOT NULL,
  `country` text NOT NULL,
  `password` varchar(15) NOT NULL,
  `plan` varchar(10) NOT NULL,
  `courses` text NOT NULL,
  `courseimg` varchar(20) NOT NULL,
  `age` int(2) NOT NULL,
  `aboutme` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `country`, `password`, `plan`, `courses`, `courseimg`, `age`, `aboutme`) VALUES
(15, 'anias2', 'anigevorg@gmail.com', 'Albania', 'Anigevorg2', 'pro', 'Learn Bootstrap', 'bootstrap.png', 16, 'I just love learning new things.'),
(21, 'arsen', 'arsen@arsen', 'Bahrain', 'Arsenohan2', 'pro', 'Android N Development', 'android.png', 22, 'Very interested in app development and software engineering. Currently studying computer science at University.');

-- --------------------------------------------------------

--
-- Structure for view `search`
--
DROP TABLE IF EXISTS `search`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `search`  AS SELECT `course`.`ID` AS `ID`, `course`.`name` AS `name`, `course`.`Description` AS `Description`, `course`.`img` AS `img`, `course`.`title` AS `title`, `course`.`src` AS `src` FROM `course` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
