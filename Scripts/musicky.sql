
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------

--
-- Estrutura da tabela `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `capa` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `album_generos`
--

CREATE TABLE `album_generos` (
  `album_id` int(11) NOT NULL,
  `genero_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `artistas`
--

CREATE TABLE `artistas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `artista_albums`
--

CREATE TABLE `artista_albums` (
  `artista_id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `artista_musicas`
--

CREATE TABLE `artista_musicas` (
  `artista_id` int(11) NOT NULL,
  `musica_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `confissaos`
--

CREATE TABLE `confissaos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `cor` varchar(50) NOT NULL,
  `album_id` int(11) NOT NULL,
  `musica_id` int(11) NOT NULL,
  `tipo` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `generos`
--

CREATE TABLE `generos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `musicas`
--

CREATE TABLE `musicas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `single` tinyint(1) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `album_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--


--
-- Índices para tabela `album_generos`
--
ALTER TABLE `album_generos`
  ADD KEY `album_genero_id` (`album_id`),
  ADD KEY `genero_album_id` (`genero_id`);

--
-- Índices para tabela `artista_albums`
--
ALTER TABLE `artista_albums`
  ADD KEY `artista_album_id` (`artista_id`),
  ADD KEY `album_artista_id` (`album_id`);

--
-- Índices para tabela `artista_musicas`
--
ALTER TABLE `artista_musicas`
  ADD KEY `artista_musica_id` (`artista_id`),
  ADD KEY `musica_artista_id` (`musica_id`);

--
-- Índices para tabela `confissaos`
--
ALTER TABLE `confissaos`
  ADD KEY `id_album` (`album_id`),
  ADD KEY `id_musica` (`musica_id`);


--
-- Índices para tabela `musicas`
--
ALTER TABLE `musicas`
  ADD KEY `album_id` (`album_id`);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `album_generos`
--
ALTER TABLE `album_generos`
  ADD CONSTRAINT `album_genero_id` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `genero_album_id` FOREIGN KEY (`genero_id`) REFERENCES `albums` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `artista_albums`
--
ALTER TABLE `artista_albums`
  ADD CONSTRAINT `album_artista_id` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `artista_album_id` FOREIGN KEY (`artista_id`) REFERENCES `artistas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `artista_musicas`
--
ALTER TABLE `artista_musicas`
  ADD CONSTRAINT `artista_musica_id` FOREIGN KEY (`artista_id`) REFERENCES `artistas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `musica_artista_id` FOREIGN KEY (`musica_id`) REFERENCES `musicas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `confissaos`
--
ALTER TABLE `confissaos`
  ADD CONSTRAINT `id_album` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_musica` FOREIGN KEY (`musica_id`) REFERENCES `musicas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `musicas`
--
ALTER TABLE `musicas`
  ADD CONSTRAINT `album_id` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

