-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 02:42 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_13_235231_create_quizzes_table', 1),
(6, '2022_07_13_235952_create_questions_table', 1),
(7, '2022_07_14_001432_create_quizzes_options_table', 1),
(8, '2022_07_14_002152_create_results_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quiz_id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `quiz_id`, `question`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Two-Bounce Rule means', 'The start of a game incorporates what is called the “Two Bounce Rule.” The serving team serves the ball cross-court to the returning team. The serve must land past the kitchen in the box diagonal from the server to be a valid serve. As of 2021, serves tha', NULL, NULL),
(2, 1, 'In the Non-Volley Zone', 'You can only take balls out of the air when you are standing outside of the Non-Volley Zone or what’s commonly called “the kitchen.” If you hit the ball out of the air while in the kitchen or standing on the kitchen line, you lose the point', NULL, NULL),
(3, 1, 'Scoring', 'Scoring is called out in a 3-number sequence that involves the server’s score, the returner’s score and whether server 1 or 2 is serving. For example, if the server calls out a score of 2-1-1, that means their team has two points, the returning team has o', NULL, NULL),
(4, 1, 'Pickleball Paddle', '', NULL, NULL),
(5, 2, 'Is there any CLI for Laravel?', '', NULL, NULL),
(6, 2, 'What are some benefits of Laravel over other Php frameworks?', '', NULL, NULL),
(7, 2, 'What is the Facade Pattern used for?', '', NULL, NULL),
(8, 2, 'What are Laravel events?', '', NULL, NULL),
(9, 2, 'Why are migrations necessary?', '', NULL, NULL),
(10, 2, 'Which template engine does Laravel use?', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `live` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `name`, `description`, `live`, `created_at`, `updated_at`) VALUES
(1, 'PickleBall', 'Pickleball was invented in 1965 on Bainbridge Island, a short ferry ride from Seattle, Washington. Three dads – Joel Pritchard, Bill Bell, and Barney McCallum — whose kids were bored with their usual summertime activities — are credited for creating game.', 1, NULL, NULL),
(2, 'Laravel', 'Top Laravel Interview Questions', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quizzes_options`
--

CREATE TABLE `quizzes_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `option` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quizzes_options`
--

INSERT INTO `quizzes_options` (`id`, `question_id`, `option`, `value`, `created_at`, `updated_at`) VALUES
(1, 1, 'The ball must bounce twice before the serve.', 0, NULL, NULL),
(2, 1, 'The player who receive the serve must let it bounce twice before hit the ball.', 0, NULL, NULL),
(3, 1, 'None of the above.', 1, NULL, NULL),
(4, 2, 'You can only take balls out of the air when you are standing outside of the Non-Volley Zone or what’s commonly called “the kitchen.”', 1, NULL, NULL),
(5, 2, 'If the ball bounces inside of the kitchen, you can not move into the kitchen to hit the ball off of a bounce.', 0, NULL, NULL),
(6, 3, 'Is called out in a 2-number sequence that involves the server\'s score and the returner\'s score.', 0, NULL, NULL),
(7, 3, 'Scoring is called out in a 3-number sequence that involves the server’s score, the returner’s score and whether server 1 or 2 is serving', 1, NULL, NULL),
(8, 4, 'The game is played with the same paddle use for racquet ball.', 0, NULL, NULL),
(9, 4, 'The game is played with a paddle made specifically for the sport of pickleball.', 1, NULL, NULL),
(10, 4, 'You can play it with any kind of racquet or paddle.', 0, NULL, NULL),
(11, 5, 'Install a plugin is necessary.', 0, NULL, NULL),
(12, 5, 'No, there is no way to have it.', 0, NULL, NULL),
(13, 5, 'Yes, there is. php artisan list, php artisan help are some CLI commands.', 1, NULL, NULL),
(14, 6, 'Setup and customization process is easy and fast as compared to others, Inbuilt Authentication System.', 1, NULL, NULL),
(15, 6, 'It is the cheapest PHP framework. ', 0, NULL, NULL),
(16, 6, 'Include multiple build in payment methods.', 0, NULL, NULL),
(17, 7, 'To allow multiple class inheritance in PHP.', 0, NULL, NULL),
(18, 7, 'To provide a static interface to classes.', 1, NULL, NULL),
(19, 8, 'Events provides a layer to serve data in asynchronous way using Server Sent Events to push to connected clients.', 0, NULL, NULL),
(20, 8, 'Is a simple observer pattern implementation, that allow to subscribe and listen for events in the application.', 1, NULL, NULL),
(21, 9, 'Is the easiest way to recreate the app configuration.', 0, NULL, NULL),
(22, 9, 'Without migrations, database consistency when sharing an app is almost impossible, especially as more and more people collaborate on the web app.', 1, NULL, NULL),
(23, 10, 'Blade Templating Engine.', 1, NULL, NULL),
(24, 10, 'Blade and it is mandatory, you cannot use plain PHP code.', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `quiz_id` bigint(20) UNSIGNED NOT NULL,
  `options` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`options`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `user_id`, `quiz_id`, `options`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '{\"1\":\"1\"}', '2022-07-16 18:40:15', '2022-07-16 18:40:15'),
(2, 1, 1, '{\"1\":\"3\",\"2\":\"4\",\"3\":\"7\",\"4\":\"8\"}', '2022-07-16 18:58:02', '2022-07-16 18:58:02'),
(3, 1, 2, '{\"5\":\"13\",\"6\":\"14\",\"7\":\"17\",\"8\":\"20\"}', '2022-07-16 19:21:15', '2022-07-16 19:21:15'),
(4, 1, 2, '{\"5\":\"13\",\"6\":\"14\",\"7\":\"17\",\"8\":\"20\",\"9\":\"21\",\"10\":\"23\"}', '2022-07-16 19:38:34', '2022-07-16 19:38:34'),
(5, 1, 1, '{\"1\":\"1\",\"2\":\"5\",\"3\":\"7\",\"4\":\"8\"}', '2022-07-17 06:47:47', '2022-07-17 06:47:47'),
(6, 1, 1, '{\"1\":\"1\",\"2\":\"5\",\"3\":\"7\",\"4\":\"8\"}', '2022-07-17 07:14:57', '2022-07-17 07:14:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'john@domain.com', NULL, '', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_quiz_id_foreign` (`quiz_id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `quizzes_name_unique` (`name`);

--
-- Indexes for table `quizzes_options`
--
ALTER TABLE `quizzes_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quizzes_options_question_id_foreign` (`question_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `results_user_id_foreign` (`user_id`),
  ADD KEY `results_quiz_id_foreign` (`quiz_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quizzes_options`
--
ALTER TABLE `quizzes_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`);

--
-- Constraints for table `quizzes_options`
--
ALTER TABLE `quizzes_options`
  ADD CONSTRAINT `quizzes_options_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`);

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`),
  ADD CONSTRAINT `results_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for table failed_jobs
--

--
-- Metadata for table migrations
--

--
-- Metadata for table password_resets
--

--
-- Metadata for table personal_access_tokens
--

--
-- Metadata for table questions
--

--
-- Metadata for table quizzes
--

--
-- Metadata for table quizzes_options
--

--
-- Metadata for table results
--

--
-- Metadata for table users
--

--
-- Metadata for database quiz
--

--
-- Dumping data for table `pma__pdf_pages`
--

INSERT INTO `pma__pdf_pages` (`db_name`, `page_descr`) VALUES
('quiz', 'quiz');

SET @LAST_PAGE = LAST_INSERT_ID();

--
-- Dumping data for table `pma__table_coords`
--

INSERT INTO `pma__table_coords` (`db_name`, `table_name`, `pdf_page_number`, `x`, `y`) VALUES
('quiz', 'failed_jobs', @LAST_PAGE, 55, 42),
('quiz', 'migrations', @LAST_PAGE, 62, 10),
('quiz', 'password_resets', @LAST_PAGE, 85, 125),
('quiz', 'personal_access_tokens', @LAST_PAGE, 52, 73),
('quiz', 'questions', @LAST_PAGE, 1073, 226),
('quiz', 'quizzes', @LAST_PAGE, 871, 41),
('quiz', 'quizzes_options', @LAST_PAGE, 764, 526),
('quiz', 'results', @LAST_PAGE, 602, 252),
('quiz', 'selected_options', @LAST_PAGE, 326, 342),
('quiz', 'users', @LAST_PAGE, 371, 29);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
