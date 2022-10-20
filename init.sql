CREATE DATABASE pengxu DEFAULT CHARACTER SET = 'utf8mb4';


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


USE pengxu;
CREATE TABLE `cart` (
  `cart_id` int NOT NULL,
  `user_id` int NOT NULL,
  `courseName` varchar(255) DEFAULT NULL,
  `price` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO `cart` (`cart_id`, `user_id`, `courseName`, `price`) VALUES
(42, 8, 'Chinese 3800', 78),
(43, 7, 'Chinese 2500', 78);



CREATE TABLE `comment` (
  `id` int NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `username` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



INSERT INTO `comment` (`id`, `content`, `username`) VALUES
(28, 'fsdfas', '456456@qq.com'),
(29, 'gdffsdh', '456456@qq.com'),
(30, 'fghfhfd', '456456@qq.com'),
(31, 'hahahahahah', 'infs3202'),
(32, 'jjj', 'infs3202'),
(33, '', 'infs3202'),
(34, '', 'infs3202'),
(35, 'gresgser', 'infs3202'),
(36, 'sdfsadfsadgsfdgs', 'infs3202'),
(37, 'iasjasidjas', 'hahaha'),
(38, 'unihjbjh', '111'),
(39, 'gtygbubu', '111'),
(40, 'fsafsa', '111'),
(41, 'gegreg', '111'),
(42, 'ccasdcdsa', 'viachen'),
(43, 'fdvgsf', '1'),
(44, 'dadwa', 'viachen'),
(45, '', 'viachen'),
(46, '', 'viachen');


CREATE TABLE `files` (
  `id` int NOT NULL,
  `filename` text NOT NULL,
  `path` text NOT NULL,
  `username` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



INSERT INTO `files` (`id`, `filename`, `path`, `username`) VALUES
(35, 'avatar-41.jpg', '/var/www/htdocs/pengxu/uploads/avatar-41.jpg', 'infs3202'),
(38, 'IMG_416285962.MOV', '/var/www/htdocs/pengxu/uploads/IMG_416285962.MOV', 'infs3202'),
(39, 'flowers-gfd18a8c00_640.jpg', '/var/www/htdocs/pengxu/uploads/flowers-gfd18a8c00_640.jpg', 'infs3202'),
(40, 'mockup1.jpg', '/var/www/htdocs/pengxu/uploads/mockup1.jpg', 'infs3202'),
(41, 'mockup7.jpg', '/var/www/htdocs/pengxu/uploads/mockup7.jpg', 'viachen'),
(42, 'mockup71.jpg', '/var/www/htdocs/pengxu/uploads/mockup71.jpg', 'viachen'),
(43, 'map-marker-pink.png', '/var/www/htdocs/pengxu/uploads/map-marker-pink.png', 'viachen'),
(44, 'multiselect-switch.png', '/var/www/htdocs/pengxu/uploads/multiselect-switch.png', 'viachen'),
(45, 'map-marker-blue.png', '/var/www/htdocs/pengxu/uploads/map-marker-blue.png', 'viachen');



CREATE TABLE `shop` (
  `id` int NOT NULL,
  `courseName` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



INSERT INTO `shop` (`id`, `courseName`, `description`, `price`) VALUES
(1, 'Chinese1001', 'introduction of Chinese', 100),
(2, 'Chinese2002', 'better level', 200),
(3, 'Chinese3202', 'advanced Chinese', 300),
(4, 'Chinese 2002', 'Chinese learning method', 78),
(5, 'Chinese 1102', 'Chinese Characters', 88),
(6, 'Chinese 1061', 'PingYIn', 66),
(7, 'Chinese 2500', 'Chinese Writing', 78),
(8, 'Chinese 3800', 'Chinese stidio', 78);



CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `PhoneNumber` varchar(255) DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



INSERT INTO `users` (`id`, `username`, `password`, `Email`, `PhoneNumber`, `question`) VALUES
(0, '1', '$2y$10$ZkiuPQ4wv2pMdpd4HH4wWe9fIew3CUX62hwtNqQvPFzsX60J4lQqu', '14564011@qq.com', '401050165', 'abc'),
(0, '2', '$2y$10$xrFrnq/80jk8j2/5O0kzT.e1zv81JicnrpoUT7urdQUauSynr2wZm', '2@qq.com', '0475771083', 'abc'),
(1, 'infs3202', '1', '51456401@qq.com', '123', '1'),
(0, 'viachen', '$2y$10$nYFjoANbr0aufKH5MwioDOOiX33Gw0xuk3Z8qCA1crr.UM4K9Y1ji', '514564011@qq.com', '0475771083', 'abc');



CREATE TABLE `video` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `video_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



INSERT INTO `video` (`id`, `title`, `description`, `video_url`) VALUES
(13, '1', '1', '/./uploads//1651734485infs3202.mp4'),
(14, '1', '1', '/var/www/htdocs/pengxu/uploads/1.mp4'),
(15, 'a', 'a', '/var/www/htdocs/pengxu/uploads/a.mp4');


ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);


ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`) USING BTREE;


ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_user_upload` (`username`);


ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);


ALTER TABLE `video`
  ADD PRIMARY KEY (`id`) USING BTREE;


ALTER TABLE `cart`
  MODIFY `cart_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;


ALTER TABLE `comment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;


ALTER TABLE `files`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;


ALTER TABLE `shop`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;


ALTER TABLE `video`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;




ALTER TABLE `files`
  ADD CONSTRAINT `FK_user_upload` FOREIGN KEY (`username`) REFERENCES `users` (`username`);
COMMIT;



