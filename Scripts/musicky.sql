SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for album_generos
-- ----------------------------
DROP TABLE IF EXISTS `album_generos`;
CREATE TABLE `album_generos`  (
  `album_id` int NOT NULL,
  `genero_id` int NOT NULL,
  INDEX `album_genero_id`(`album_id`) USING BTREE,
  INDEX `genero_album_id`(`genero_id`) USING BTREE,
  CONSTRAINT `album_genero_id` FOREIGN KEY (`album_id`) REFERENCES `albuns` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `genero_album_id` FOREIGN KEY (`genero_id`) REFERENCES `generos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for album_musicas
-- ----------------------------
DROP TABLE IF EXISTS `album_musicas`;
CREATE TABLE `album_musicas`  (
  `album_id` int NOT NULL,
  `musica_id` int NOT NULL,
  INDEX `album_musica_id`(`album_id`) USING BTREE,
  INDEX `musica_album_id`(`musica_id`) USING BTREE,
  CONSTRAINT `album_musica_id` FOREIGN KEY (`album_id`) REFERENCES `albuns` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `musica_album_id` FOREIGN KEY (`musica_id`) REFERENCES `musicas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for albuns
-- ----------------------------
DROP TABLE IF EXISTS `albuns`;
CREATE TABLE `albuns`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `capa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for artista_albuns
-- ----------------------------
DROP TABLE IF EXISTS `artista_albuns`;
CREATE TABLE `artista_albuns`  (
  `artista_id` int NOT NULL,
  `album_id` int NOT NULL,
  INDEX `artista_album_id`(`artista_id`) USING BTREE,
  INDEX `album_artista_id`(`album_id`) USING BTREE,
  CONSTRAINT `album_artista_id` FOREIGN KEY (`album_id`) REFERENCES `albuns` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `artista_album_id` FOREIGN KEY (`artista_id`) REFERENCES `artistas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for artista_musicas
-- ----------------------------
DROP TABLE IF EXISTS `artista_musicas`;
CREATE TABLE `artista_musicas`  (
  `artista_id` int NOT NULL,
  `musica_id` int NOT NULL,
  INDEX `artista_musica_id`(`artista_id`) USING BTREE,
  INDEX `musica_artista_id`(`musica_id`) USING BTREE,
  CONSTRAINT `artista_musica_id` FOREIGN KEY (`artista_id`) REFERENCES `artistas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `musica_artista_id` FOREIGN KEY (`musica_id`) REFERENCES `musicas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for artistas
-- ----------------------------
DROP TABLE IF EXISTS `artistas`;
CREATE TABLE `artistas`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for confissoes
-- ----------------------------
DROP TABLE IF EXISTS `confissoes`;
CREATE TABLE `confissoes`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cor` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `album_id` int NULL DEFAULT NULL,
  `musica_id` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `album_id`(`album_id`) USING BTREE,
  INDEX `musica_id`(`musica_id`) USING BTREE,
  CONSTRAINT `album_id` FOREIGN KEY (`album_id`) REFERENCES `albuns` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `musica_id` FOREIGN KEY (`musica_id`) REFERENCES `musicas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for generos
-- ----------------------------
DROP TABLE IF EXISTS `generos`;
CREATE TABLE `generos`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for musicas
-- ----------------------------
DROP TABLE IF EXISTS `musicas`;
CREATE TABLE `musicas`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `single` tinyint(1) NOT NULL,
  `imagem` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
