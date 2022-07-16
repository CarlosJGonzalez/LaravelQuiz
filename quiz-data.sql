-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2022 at 05:45 PM
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

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'PickleBall', 'Pickleball was invented in 1965 on Bainbridge Island, a short ferry ride from Seattle, Washington. Three dads – Joel Pritchard, Bill Bell, and Barney McCallum — whose kids were bored with their usual summertime activities — are credited for creating game.', NULL, NULL),
(2, 'Laravel', 'Top Laravel Interview Questions', NULL, NULL);

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


--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'john@domain.com', NULL, '', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
