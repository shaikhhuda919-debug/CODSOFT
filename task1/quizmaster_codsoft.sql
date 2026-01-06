-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2026 at 09:17 AM
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
-- Database: `quizmaster_codsoft`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `quiz_id` int(11) DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  `a` varchar(100) DEFAULT NULL,
  `b` varchar(100) DEFAULT NULL,
  `c` varchar(100) DEFAULT NULL,
  `d` varchar(100) DEFAULT NULL,
  `correct` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `quiz_id`, `question`, `a`, `b`, `c`, `d`, `correct`) VALUES
(1, 1, 'HTML full form?', 'Hyper Text Markup Language', 'High Text Machine', 'Hyper Tool', 'None', 'A'),
(2, 1, 'HTML used for?', 'Styling', 'Database', 'Web page structure', 'Programming', 'C'),
(3, 1, 'Tag for link?', 'link', 'a', 'href', 'url', 'B'),
(4, 1, 'Tag for image?', 'image', 'img', 'pic', 'src', 'B'),
(5, 1, 'Largest heading tag?', 'h6', 'h4', 'h2', 'h1', 'D'),
(6, 1, 'Line break tag?', 'break', 'lb', 'br', 'hr', 'C'),
(7, 1, 'Bold text tag?', 'bold', 'b', 'strong', 'text', 'B'),
(8, 1, 'HTML is?', 'Programming', 'Markup language', 'Database', 'Script', 'B'),
(9, 1, 'List tag?', 'li', 'ol', 'ul', 'list', 'C'),
(10, 1, 'HTML file extension?', '.ht', '.html', '.css', '.xml', 'B'),
(11, 2, 'CSS full form?', 'Creative Style Sheets', 'Cascading Style Sheets', 'Color Style Sheet', 'None', 'B'),
(12, 2, 'CSS used for?', 'Logic', 'Styling', 'Database', 'Structure', 'B'),
(13, 2, 'Text color property?', 'text-color', 'font-color', 'color', 'fg', 'C'),
(14, 2, 'Background color property?', 'background', 'bgcolor', 'background-color', 'color', 'C'),
(15, 2, 'Class selector symbol?', 'Hash', 'Dot', 'Star', 'At', 'B'),
(16, 2, 'ID selector symbol?', 'Dot', 'Hash', 'Star', 'At', 'B'),
(17, 2, 'Font size property?', 'size', 'font', 'font-size', 'text-size', 'C'),
(18, 2, 'Inline CSS uses?', 'CSS file', 'Style attribute', 'Style tag', 'Script', 'B'),
(19, 2, 'Hover is?', 'Function', 'Pseudo class', 'Method', 'Event', 'B'),
(20, 2, 'Border property?', 'outline', 'edge', 'border', 'line', 'C'),
(21, 3, 'JavaScript is?', 'Markup', 'Programming', 'Database', 'Style', 'B'),
(22, 3, 'JavaScript file extension?', '.java', '.js', '.jsx', '.json', 'B'),
(23, 3, 'Alert box function?', 'alert', 'msg', 'popup', 'show', 'A'),
(24, 3, 'Variable keyword?', 'int', 'string', 'var', 'define', 'C'),
(25, 3, 'Print in console?', 'print', 'log', 'console.log', 'echo', 'C'),
(26, 3, 'Condition statement?', 'if', 'for', 'while', 'switch', 'A'),
(27, 3, 'Loop statement?', 'if', 'switch', 'loop', 'for', 'D'),
(28, 3, 'Equal operator?', '==', '!=', '=', '===', 'A'),
(29, 3, 'Function keyword?', 'func', 'method', 'function', 'define', 'C'),
(30, 3, 'JS runs in?', 'Server', 'Browser', 'Database', 'OS', 'B'),
(31, 4, 'PHP full form?', 'Personal Home Page', 'Private Page', 'Pre Processor', 'None', 'A'),
(32, 4, 'PHP is used for?', 'Styling', 'Backend', 'Database', 'Design', 'B'),
(33, 4, 'PHP file extension?', '.html', '.php', '.js', '.py', 'B'),
(34, 4, 'Variable symbol?', '$', '#', '@', '&', 'A'),
(35, 4, 'Output function?', 'print', 'echo', 'write', 'show', 'B'),
(36, 4, 'Session start function?', 'session', 'start', 'session_start', 'init', 'C'),
(37, 4, 'Include file keyword?', 'add', 'include', 'import', 'load', 'B'),
(38, 4, 'POST method used for?', 'Get data', 'Send data', 'Delete data', 'View data', 'B'),
(39, 4, 'PHP is?', 'Compiled', 'Interpreted', 'Markup', 'OS', 'B'),
(40, 4, 'Database connect function?', 'db_connect', 'mysqli_connect', 'connect', 'sql_connect', 'B'),
(41, 5, 'MySQL is?', 'Language', 'Database', 'Compiler', 'Browser', 'B'),
(42, 5, 'Select data command?', 'FETCH', 'SELECT', 'GET', 'SHOW', 'B'),
(43, 5, 'Insert data command?', 'ADD', 'INSERT', 'PUT', 'SET', 'B'),
(44, 5, 'Delete data command?', 'REMOVE', 'DELETE', 'DROP', 'CLEAR', 'B'),
(45, 5, 'Primary key means?', 'Duplicate', 'Unique', 'Null', 'Foreign', 'B'),
(46, 5, 'Auto increment keyword?', 'AUTO', 'INCREMENT', 'AUTO_INCREMENT', 'SERIAL', 'C'),
(47, 5, 'Update command?', 'CHANGE', 'MODIFY', 'UPDATE', 'SET', 'C'),
(48, 5, 'Create table command?', 'MAKE', 'NEW', 'CREATE', 'BUILD', 'C'),
(49, 5, 'Where clause used for?', 'Sorting', 'Filtering', 'Joining', 'Grouping', 'B'),
(50, 5, 'MySQL runs on?', 'Browser', 'Server', 'Client', 'OS', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `title`) VALUES
(1, 'HTML Quiz'),
(2, 'CSS Quiz'),
(3, 'JavaScript Quiz'),
(4, 'PHP Quiz'),
(5, 'MySQL Quiz');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `user_id`, `quiz_id`, `score`, `created_at`) VALUES
(1, 2, 1, 1, '2026-01-03 18:13:17'),
(2, 2, 3, 0, '2026-01-03 18:13:29'),
(3, 2, 3, 0, '2026-01-03 18:19:53'),
(4, 2, 5, 8, '2026-01-04 07:33:30'),
(5, 2, 5, 8, '2026-01-04 07:33:50'),
(6, 2, 1, 0, '2026-01-04 07:37:14'),
(7, 2, 1, 3, '2026-01-04 07:37:42'),
(8, 2, 1, 6, '2026-01-04 07:38:32'),
(9, 2, 5, 8, '2026-01-04 07:41:55'),
(10, 2, 4, 7, '2026-01-04 07:49:14'),
(11, 2, 1, 7, '2026-01-04 08:21:11'),
(12, 2, 1, 6, '2026-01-04 13:54:57'),
(13, 2, 1, 6, '2026-01-05 18:26:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Test User', 'test@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Huda', 'huda@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'faizan', 'faizan@gmail.com', '6531401f9a6807306651b87e44c05751');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
