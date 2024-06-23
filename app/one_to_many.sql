-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 15, 2019 at 05:52 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: belajar_laravel
--

-- --------------------------------------------------------

--
-- Table structure for table articles
--

CREATE TABLE articles (
  id int(10) UNSIGNED NOT NULL,
  judul varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  created_at timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table articles
--

INSERT INTO articles (id, judul, created_at, updated_at) VALUES
(1, 'Placeat saepe ea possimus provident quos est molestiae reiciendis.', NOW(), NOW()),
(2, 'Totam laudantium molestiae similique sit.', NOW(), NOW()),
(3, 'Aut consequatur ducimus ut non voluptatem voluptas.', NOW(), NOW()),
(4, 'Ad sit voluptatem qui ut dolorem.', NOW(), NOW()),
(5, 'Qui consequatur eum fuga corrupti.', NOW(), NOW()),
(6, 'Quos nesciunt blanditiis amet odio.', NOW(), NOW()),
(7, 'Ex doloremque consequuntur velit alias repellendus ullam.', NOW(), NOW()),
(8, 'Perspiciatis a quo beatae nobis et suscipit illo.', NOW(), NOW()),
(9, 'Maiores voluptate animi est enim totam.', NOW(), NOW()),
(10, 'Rerum expedita inventore nulla voluptates perferendis placeat.', NOW(), NOW());

-- --------------------------------------------------------

--
-- Table structure for table tags
--

CREATE TABLE tags (
  id int(10) UNSIGNED NOT NULL,
  tag varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  article_id int(10) UNSIGNED NOT NULL,
  created_at timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table tags
--

INSERT INTO tags (id, tag, article_id, created_at, updated_at) VALUES
(1, 'dolores', 2, NOW(), NOW()),
(2, 'culpa', 3, NOW(), NOW()),
(3, 'sit', 4, NOW(), NOW()),
(4, 'quasi', 3, NOW(), NOW()),
(5, 'inventore', 5, NOW(), NOW()),
(6, 'ut', 7, NOW(), NOW()),
(7, 'quisquam', 5, NOW(), NOW()),
(8, 'fugiat', 7, NOW(), NOW()),
(9, 'perspiciatis', 5, NOW(), NOW()),
(10, 'voluptatem', 3, NOW(), NOW()),
(11, 'non', 2, NOW(), NOW()),
(12, 'ducimus', 5, NOW(), NOW()),
(13, 'tempora', 4, NOW(), NOW()),
(14, 'voluptatem', 10, NOW(), NOW()),
(15, 'nisi', 3, NOW(), NOW()),
(16, 'exercitationem', 10, NOW(), NOW()),
(17, 'sed', 2, NOW(), NOW()),
(18, 'tempora', 6, NOW(), NOW()),
(19, 'laudantium', 7, NOW(), NOW()),
(20, 'a', 6, NOW(), NOW()),
(21, 'consequuntur', 9, NOW(), NOW()),
(22, 'omnis', 1, NOW(), NOW()),
(23, 'rerum', 9, NOW(), NOW()),
(24, 'ut', 1, NOW(), NOW()),
(25, 'amet', 10, NOW(), NOW()),
(26, 'atque', 9, NOW(), NOW()),
(27, 'at', 4, NOW(), NOW()),
(28, 'hic', 3, NOW(), NOW()),
(29, 'itaque', 1, NOW(), NOW()),
(30, 'quia', 9, NOW(), NOW()),
(31, 'consequatur', 8, NOW(), NOW()),
(32, 'non', 9, NOW(), NOW()),
(33, 'explicabo', 10, NOW(), NOW()),
(34, 'eos', 6, NOW(), NOW()),
(35, 'eveniet', 5, NOW(), NOW()),
(36, 'dolor', 10, NOW(), NOW()),
(37, 'magnam', 10, NOW(), NOW()),
(38, 'aut', 1, NOW(), NOW()),
(39, 'et', 6, NOW(), NOW()),
(40, 'ut', 10, NOW(), NOW());

-- --------------------------------------------------------

--
-- Indexes for dumped tables
--

--
-- Indexes for table articles
--
ALTER TABLE articles
  ADD PRIMARY KEY (id);

--
-- Indexes for table tags
--
ALTER TABLE tags
  ADD PRIMARY KEY (id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table articles
--
ALTER TABLE articles
  MODIFY id int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table tags
--
ALTER TABLE tags
  MODIFY id int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=