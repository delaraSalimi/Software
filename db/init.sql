CREATE DATABASE IF NOT EXISTS php_docker;
USE php_docker;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
SET NAMES utf8mb4;

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2022_11_14_210952_create_files_table', 2);

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `topic_id` int(11) NOT NULL,
  `html` text NOT NULL,
  `css` text NOT NULL,
  `javascript` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(60) NOT NULL DEFAULT 'In Progress'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `task_user` (
  `task_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`task_id`, `user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `topics` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `category` varchar(30) NOT NULL,
  `skill` varchar(30) NOT NULL,
  `difficulty` varchar(30) NOT NULL,
  `acceptance` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `topics` (`id`, `title`, `content`, `category`, `skill`, `difficulty`, `acceptance`) VALUES
(1, 'Articles', 'Using CSS only (without adding additional HTML attributes), style articles so that they occupy the whole browser window and have the following properties:', 'Css', 'basic', 'easy', '78.5%'),
(2, 'Advance Forms', 'With the new HTML5 features, modify the form so that:The formula input field suggests the following options when the user starts to type: "sin", "cos", "tan" and "cot".', 'Html', 'Medium', 'medium', '52%'),
(3, 'Avatar', 'Every user on your website has an image avatar that is displayed when they post a comment. You want to style these images differently from other images on your site. Add a CSS class named avatar that fulfils the following requirements:', 'Html', 'advanced', 'easy', '64.8%'),
(4, 'Even numbers', 'Write a JavaScript program that creates an array of all even numbers between 1 and 100.', 'Javascript', 'intermediate', 'easy', '57%'),
(5, 'Song', 'A playlist is considered a repeating playlist if any of the songs contain a reference to a previous song in the playlist. Otherwise, the playlist will end with the last song which points to ', 'Javascript', 'basic', 'medium', '54%'),
(6, 'Shipping Service', ' A PHP application that shows shipping routes... ', 'php', 'basic', 'hard', '14.6%'),
(7, 'User input', 'The user interface contains two types of user input controls:  TextInput , which accepts all texts and  NumericInput , which accepts only digits.', 'php', 'basic', 'easy', '64.1%');


CREATE TABLE `topic_user` (
  `topic_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`topic_id`, `user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `phone` bigint(60) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `degree` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profile` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `languageLevel` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `languageTitle` varchar(35) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active` char(1) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `role`, `phone`, `password`, `status`, `degree`, `profile`, `languageLevel`, `languageTitle`, `remember_token`, `created_at`, `updated_at`, `active`) VALUES
(6, 'fsdfssf', 'ssfsffsfs@gmail.com', '', 0, 'gdgddgdgdf', '', '', '', '', '', NULL, '2022-11-20 09:16:12', '2022-11-20 09:16:12', '0'),
(8, 'lfdslk', 'gdlkfd@gmail.com', '', 0, 'fljkfddl', '', '', '', '', '', NULL, '2022-11-20 11:12:15', '2022-11-20 11:12:15', '0'),
(9, 'lfdkfdlfdkdfl', 'soheilsffsffizadi007@gmail.com', '', 0, 'vflkgdmdlk', '', '', '', '', '', NULL, '2022-11-20 11:34:46', '2022-11-20 11:34:46', '0'),
(10, 'lkdflfd', 'vdlfdlkf@gmail.com', '', 0, 'lgfjkmgflf', '', '', '', '', '', NULL, '2022-11-22 12:31:05', '2022-11-22 12:31:05', '0'),
(11, 'lkdflfd', 'vdlffssdfdlkf@gmail.com', '', 0, '1111', '', '', '', '', '', NULL, '2022-11-22 12:31:56', '2022-11-22 12:31:56', '0'),
(12, 'ssss', 'ss@gmail.com', '', 0, '1111', '', '', '', '', '', NULL, '2022-11-22 13:05:19', '2022-11-22 13:05:19', '0'),
(14, 'cxlk', 'soheil.izadi.azarm@gmail1.com', '', 0, '$2y$10$grlW0ofoJwGCrsKmUpzdPu1ElAdQ9e72lEwofJD6DAGbBpGygA7Mi', '', '', '', '', '', NULL, '2022-11-22 16:11:50', '2022-11-22 16:11:50', '0'),
(17, 'sajede', 'sajede@gmail.com', 'D', 3885555, '$2y$10$EHLwj53498GbGFmKr8q5JuXjdx/RozDYGlhmE0Tbl9eEl3Du8vnKq', 'unemployed', 'doctor', '', '', '', 'jo4dtqFRnk5j1aYmB35N9WXfTXXmiasITEyaomgDg79kv6WiW0dQS3aoB4la', '2022-11-23 11:27:25', '2022-12-03 12:43:04', '0'),
(19, 'fxdfdkjs', 'fdldkgl', 'C', 0, '$2y$10$R7H.bCfZSml37G5Uw6xXlujLXZRsWkAxG.1dMj5Aj8AoQDKG9fLbO', NULL, NULL, '', '', '', NULL, '2022-12-11 10:31:19', '2022-12-11 10:31:19', '0'),
(20, 'Soheil izadiazarm', 'soheil.izadi.azarm1@gmail.com', 'C', 123456789000, '$2y$10$Qr3b.E9ngJQpmlHlQIBMfeJQbPxl7I46vhH.1Fg0K8QlMe0LDhhMG', NULL, NULL, '', '', '', 'M9O6eXcR51LeOp12ElXyePNEzhQbUCSvKdBc2dj8ZbrduIe4xdXKPpblbdnm', '2022-12-11 10:33:21', '2022-12-12 12:17:43', '0'),
(21, 'gflkdld', 'fdlkglk@gmail.com', 'C', 0, '$2y$10$kly1dT45us6.tb0CSBdy9OFU3cf2MJVBdmTh3elQuedS6TQ2.ir92', NULL, NULL, '', '', '', NULL, '2022-12-11 10:37:52', '2022-12-11 10:37:52', '0'),
(22, 'dffdkpkd', 'fldkfd@gmail.com', 'C', 0, '$2y$10$o58cV4o.7ZxZlvuK5YUCNuoK6sa5YsebyQ/BVdns5/TkLq5eWzaRW', NULL, NULL, '', '', '', NULL, '2022-12-11 10:55:18', '2022-12-11 10:55:18', '0'),
(23, 'dflkfdl', 'LFDKMRSLK@gmail.com', 'C', 0, '$2y$10$p/UNaB2bY9b7vt92Mi5LKukkKCoWQ604rC7Sttu5rw8QfwrLULoy2', NULL, NULL, '', '', '', NULL, '2022-12-11 10:56:41', '2022-12-11 10:56:41', '0'),
(24, 'dfgdgd', 'GFGDG@gmail.com', 'C', 0, '$2y$10$ge0aHZdlNCxoIC5d8d/mqeLdW2x56jYTZrlfxpYypIb.xuJ/goVPu', NULL, NULL, '', '', '', NULL, '2022-12-11 15:17:33', '2022-12-11 15:17:33', '0'),
(25, 'mortezacompany123', 'seyedM@gmail.com', 'C', 45666886, '$2y$10$5.l35/Sqxt9wc6lPAYENJOlhKfMDmzmH.HXq6wg06zdabW8aw0WW6', NULL, NULL, '', '', '', 'q0QjBOesEYEyvQJ1nvPnVfZJA0eXkFJMhREQAeYKONcxreUgDZfDa7p3qMO5', '2022-12-11 15:18:32', '2022-12-11 15:20:58', '0'),
(26, 'delara', 'delara@gmail.com', 'D', 4554566, '$2y$10$uDpd7ZWyL6PhuBVa1rYzDe2dHQ/oFMTKMVXkXPCt2314.JMas/b6a', '', 'Nothing', '', '', '', 'e33UygfEuvQWP8xFoQQ0sPQHQtGxsDxFZ9ZTED9uhTmRliIwykyn4pQzsrvr', '2022-12-11 15:21:34', '2022-12-11 15:23:36', '0'),
(27, 'milad', 'milad@gmail.com', 'D', 65652, '$2y$10$SKmO2xZirqbhO68YJhMMRusGM5wzUKlArCEDL5DNqTa1g2mCCFhBi', '', 'master', '', '', '', 'Qjt75DH92SjwNyitIBbtNU0VKojhZLcYPoi3MPreG2Um1c2RFZVPHSnb4nfj', '2022-12-12 12:18:44', '2023-07-13 15:03:01', '0'),
(29, 'ddd', 'maryam.jddavid@gmail.com', 'C', 0, '$2y$10$SBPGy7..eZSfl1MxrJAOPuUD0EGBwl17BE0DS8foiBQQZS8Foug2G', NULL, NULL, '', '', '', NULL, '2023-01-08 20:39:44', '2023-01-08 20:39:44', '0'),
(30, 'fgklfmdlk', 'fglkmgflk@gmail.com', 'C', 0, '$2y$10$iUH/BjTi6TVQym6kNhYuDOW1bokon5/euiXMFo54.ATw9fCWqk5dW', NULL, NULL, '', '', '', NULL, '2023-01-20 12:58:48', '2023-01-20 12:58:48', '0'),
(32, 'bflkdfmldfk', 'maryam.javidfdfdfdfd@gmail.com', 'C', 0, '$2y$10$G1pQA4z50U6h.A6Dhpf3meuCQw037QdCkq7M8hBHsKF1GnHYgJ.5q', NULL, NULL, '', '', '', NULL, '2023-01-20 13:02:34', '2023-01-20 13:02:34', '0'),
(33, 'fffgd', 'maryamd.javid@gmail.com', 'C', 0, '$2y$10$9p/6i7qSq5TKKElJTXKXVu3tQtNv4qpT/InXfhRh/uNO2B05dtE1q', NULL, NULL, '', '', '', NULL, '2023-02-06 09:43:47', '2023-02-06 09:43:47', '0'),
(35, 'hjghu', 'maryam.jakhhjvid@gmail.com', 'C', 0, '$2y$10$YwGGHKaehVFXYnZDV1Bhhu9MEauxupBtqbl25mm4yRxnf8oe5ds5y', NULL, NULL, '', '', '', NULL, '2023-04-10 08:26:27', '2023-04-10 08:26:27', '0'),
(37, 'ghhggfgdg', 'maryam.javifffdd@gmail.com', 'C', 0, '$2y$10$ukGv7CAbtUp2b7bFPEjzoOfYz3hb9WPrgba5WcVeyQswbk5.LmoNu', NULL, NULL, '', '', '', NULL, '2023-04-10 08:31:49', '2023-04-10 08:31:49', '0'),
(38, 'fdkjdfkjd', 'dfljfdigfo@gmail.com', 'C', 0, '$2y$10$TK44AIlkeRFXoiLOD4PaEOfspUVIRQL43Rkk8hzAsQsTRZCWDgYXK', NULL, NULL, '', '', '', NULL, '2023-07-20 08:43:16', '2023-07-20 08:43:16', '0');
