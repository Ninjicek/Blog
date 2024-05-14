-- Active: 1715675868820@@127.0.0.1@3306
CREATE DATABASE IF NOT EXISTS `articles_db`;
    DEFAULT CHARACTER SET = 'utf8mb4';

    USE `articles_db`;

    DROP TABLE IF EXISTS `articles`;

CREATE TABLE `articles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `articles` VALUES (14,'Článek','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at augue. Urna nunc id cursus metus. Nibh nisl condimentum id venenatis a. Sit amet tellus cras adipiscing enim. Phasellus vestibulum lorem sed risus. Pretium fusce id velit ut tortor pretium viverra suspendisse potenti. Sit amet est placerat in egestas erat. Eget nunc scelerisque viverra mauris in aliquam sem. Vel orci porta non pulvinar. Nunc aliquet bibendum enim facilisis gravida neque. Eu volutpat odio facilisis mauris. Montes nascetur ridiculus mus mauris vitae ultricies leo integer. Vel pharetra vel turpis nunc. Nulla porttitor massa id neque aliquam vestibulum morbi. Hendrerit dolor magna eget est lorem ipsum dolor sit amet.','2024-05-12 16:51:47'),(15,'Artikl','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nisi est sit amet facilisis. A erat nam at lectus urna duis convallis convallis tellus. Felis bibendum ut tristique et egestas quis ipsum suspendisse ultrices. Augue eget arcu dictum varius duis at. Adipiscing elit ut aliquam purus sit amet luctus venenatis. Egestas sed tempus urna et pharetra pharetra massa. Tristique senectus et netus et. Nulla facilisi cras fermentum odio eu feugiat pretium nibh. In hac habitasse platea dictumst vestibulum rhoncus. Urna duis convallis convallis tellus id interdum velit laoreet id. In iaculis nunc sed augue lacus viverra.','2024-05-12 16:52:02'),(16,'Novinka','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nisi est sit amet facilisis. A erat nam at lectus urna duis convallis convallis tellus. Felis bibendum ut tristique et egestas quis ipsum suspendisse ultrices. Augue eget arcu dictum varius duis at. Adipiscing elit ut aliquam purus sit amet luctus venenatis. Egestas sed tempus urna et pharetra pharetra massa. Tristique senectus et netus et. Nulla facilisi cras fermentum odio eu feugiat pretium nibh. In hac habitasse platea dictumst vestibulum rhoncus. Urna duis convallis convallis tellus id interdum velit laoreet id. In iaculis nunc sed augue lacus viverra.','2024-05-12 16:52:23'),(17,'Zpráva','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Egestas tellus rutrum tellus pellentesque. Sollicitudin aliquam ultrices sagittis orci. Adipiscing bibendum est ultricies integer quis auctor elit. Tempor orci eu lobortis elementum. Nulla malesuada pellentesque elit eget. At volutpat diam ut venenatis. Fermentum dui faucibus in ornare quam viverra orci. Arcu bibendum at varius vel pharetra vel. Ullamcorper a lacus vestibulum sed arcu. Est placerat in egestas erat imperdiet sed euismod nisi. Ac turpis egestas integer eget aliquet nibh praesent tristique magna.','2024-05-12 16:52:37');

