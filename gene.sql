-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2023 at 12:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gene`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `adminid` text DEFAULT NULL,
  `createat` date DEFAULT current_timestamp(),
  `role` varchar(50) DEFAULT 'admin',
  `password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `phone`, `adminid`, `createat`, `role`, `password`) VALUES
(1, 'Sridhar Kumar', 'sridhar@gmail.com', '8324569710', 'b8ffc58940677d1498a66ad0c38c0e02', '2023-08-03', 'admin', '67890'),
(3, 'Vijay', 'vijay@gmail.com', '8652143970', '1b6a31182e67e8b55f64bf2b5dcadb70', '2023-08-04', 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `location` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `jobid` text DEFAULT NULL,
  `createdat` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `description`, `location`, `email`, `jobid`, `createdat`) VALUES
(1, 'Software Develpoer', 'Excellent knowledge of relational databases, SQL and ORM technologies (JPA2, Hibernate)\r\n\r\nExperience developing web applications using at least one popular web framework (JSF, Wicket, GWT, Spring MVC)\r\n\r\nExperience with test-driven development\r\n\r\nRequirements:\r\n\r\nProficiency in software engineering tools\r\n\r\nAbility to document requirements and specifications\r\n\r\nBSc degree in Computer Science, Engineering or relevant field', 'Hyderabad', 'genesis@gmail.com', '21d924e92f401ec3df4b74840a520779', '2023-08-03'),
(2, 'Web Developer', 'The ideal candidate is a creative problem solver who will work in coordination with cross-functional teams to design, develop, and maintain our next generation websites and web tools. You must be comfortable working as part of a team while taking the initiative to take lead on new innovations and projects.\r\n\r\nResponsibilities\r\n• Revise, edit, proofread & optimize web content\r\n• Perform code reviews, unit testing, and continuous integration\r\n• Work cross-functionally to enhance overall user experience of our platforms\r\n• Own various design tasks involved in the web development life cycle from start to finish\r\n\r\nQualifications\r\n• Bachelor\'s degree or equivalent experience in Computer Science\r\n• 3+ years\' of experience using HTML, CSS, and JavaScript\r\n• Proficiency in at least one server-side technology (Java, PHP, NodeJS, Python, Ruby)\r\n• Ability to multi-task, organize, and prioritize work\r\n', 'Visakhapatnam', 'pravishree@gmail.com', 'f0798093cc71fdcac8e1c767a6cf8d99', '2023-08-03'),
(3, 'Software Developer', 'Bachelor\'s degree in Computer Science, Software Engineering, or a related field (or equivalent practical experience).\r\nStrong knowledge of Angular, TypeScript, and NodeJS, with practical experience in building web applications using these technologies.\r\nFamiliarity with frontend technologies such as HTML5, CSS3, and JavaScript, and the ability to create responsive web designs.\r\nWorking knowledge of RESTful APIs and integrating frontend and backend services.\r\nExperience with version control systems like Git for collaborative development.\r\nUnderstanding of test-driven development (TDD) and the ability to write unit test cases using testing frameworks (Jasmine, Mocha, Chai, etc.).\r\nFamiliarity with database systems, both SQL and NoSQL, and the ability to write efficient queries.\r\nStrong problem-solving skills and an ability to work independently as well as in a team environment.\r\nExcellent communication skills and a willingness to learn and adapt to new technologies and challenges.Preferred Skills (not mandatory but advantageous):Experience with frontend frameworks/libraries like Angular or React or Vue.js.\r\nKnowledge of serverless architecture and cloud platforms like AWS or Azure.\r\nFamiliarity with Docker and containerization concepts.\r\nUnderstanding of continuous integration and continuous deployment (CI/CD) pipelines.\r\nBasic understading of machine learning and AIWhat are you looking for in an employee? (Skills, Work experience, Open source contributor, etc.)', 'Bangalore', 'storeily@gmail.com', '04047fd762250c09eebeb18addcf33eb', '2023-08-05'),
(4, 'Backend Developer', 'Requirements\r\nAbility to self-learn and program\r\nGood Comprehension skills\r\nWorking knowledge of Git\r\nExcellent Written and Communication Skills\r\nPersonal: Proactive, Take ownership of works\r\n\r\nResponsibilities\r\n1. Write REST APIs using Rust framework - Axum  (Refer: https://docs.rs/axum/latest/axum/)\r\n2. Write TDD (test-driven development) code\r\n3. Work on unit test and integration testing of code written\r\n4. Write serverless programs on cloud infrastructures like AWS Lambda and Cloudflare Workers\r\n5. Write and maintain programs using Node.js and Python Flask / FAST API (secondary)', 'Gurgaon', 'intelliconnects@gmail.com', 'c0d85bebd7069cbd6b62c6d42b0fc004', '2023-08-05'),
(5, 'Product Management', 'Drive product research and development\r\nLearn product principles, design and UX\r\nOwn and drive the product vision &  life cycle\r\nUnderstand user behaviour and needs to define product strategy and roadmap\r\nDocumenting user stories, product requirement documents, business requirement documents etc.\r\nIdentify areas for expansion and develop strategic product line roadmaps to aid in product adoption and differentiation\r\nEstablish and measure success metrics after the launch\r\nConsistently integrate data & feedback into essential product decisions\r\n', 'Hyderabad', 'enalo@gmail.com', '22ceda6bf2a160b083270e1bacbfd4cb', '2023-08-05'),
(6, 'Frontend Developer', '0.5 - 1 years of experience(with building personal projects or having past internship experience) in web development using NextJs\r\nGood knowledge of Javascript\r\nGood knowledge of HTML, CSS and Javascript.\r\nGood knowledge with NextJS\r\nExperience on implementing RESTful APIs, JSON\r\nExperience with Git and version control practices\r\nExperience with implementing responsive design\r\n', 'Chennai', 'fibo@gmail.com', 'b81401eb6e871f9a5f601f52c6f27c4b', '2023-08-05'),
(7, 'Machine Learning Engineer', 'Requirements\r\n\r\nPrior experience of working with AI tools and models\r\nInterest in AI and voice technologies\r\nResponsibilities\r\n\r\nResearch technologies related to voice detection, transcribing and transliteration\r\nImplement LLMs using APIs into our flutter app backend using python/node.js\r\nHiring Process\r\n\r\nInterview with founder\r\nAssignment', 'Bangalore', 'sos@gmail.com', 'fb75686e42fb6e16309e4bdd65c6d359', '2023-08-05');

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` int(11) NOT NULL,
  `userid` text DEFAULT NULL,
  `resume` text DEFAULT NULL,
  `resumeid` text DEFAULT NULL,
  `filetype` text DEFAULT NULL,
  `path` text DEFAULT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `userid`, `resume`, `resumeid`, `filetype`, `path`, `time`) VALUES
(1, 'f75ad5ed09cdb5bd2dd712a1500a294b', 'Yatheswar Ethalapaka.pdf', 'c54f546055dc7e667692a41ab2f9f6b7', 'pdf', './resumes/', '2023-08-05 14:44:59'),
(2, '1824b62746b526841e7cc06aef3e97bf', 'Rishika resume.pdf', 'a93c8c2070c6ce6bae38738a20e96939', 'pdf', './resumes/', '2023-08-05 14:46:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` text DEFAULT NULL,
  `lname` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `userid` text DEFAULT NULL,
  `createdat` date NOT NULL DEFAULT current_timestamp(),
  `role` text DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `phone`, `password`, `userid`, `createdat`, `role`) VALUES
(2, 'Yatheswar', 'Ethalapaka', 'yatheswar546@gmail.com', '8654123047', 'Yathe12345', 'f75ad5ed09cdb5bd2dd712a1500a294b', '2023-08-05', 'user'),
(3, 'Harsha', 'Gandupilli', 'harsha@gmail.com', '9541236870', 'Harsha12345', '1824b62746b526841e7cc06aef3e97bf', '2023-08-05', 'user'),
(4, 'Ratnakar', 'Chilaka', 'ratnakar@gmail.com', '8569471023', 'Ratnakar12345', 'bbc7013ca9b4e0565bf4bc21c284c924', '2023-08-05', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
