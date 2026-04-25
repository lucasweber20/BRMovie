-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/04/2026 às 21:08
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `brmovie`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `episodios`
--

CREATE TABLE `episodios` (
  `serie` varchar(255) DEFAULT NULL,
  `eps` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`eps`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `episodios`
--

INSERT INTO `episodios` (`serie`, `eps`) VALUES
('two and a half men 1', '{\"ep1\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep2\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep3\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep4\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep5\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep6\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep7\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep8\": \"https://www.youtube.com/embed/097pUW0L_Xc\"}'),
('two and a half men 2', '{\"ep1\":\"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep2\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep3\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep4\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep5\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep6\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep7\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep8\": \"https://www.youtube.com/embed/097pUW0L_Xc\"}'),
('two and a half men 3', '{\"ep1\":\"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep2\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep3\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep4\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep5\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep6\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep7\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep8\": \"https://www.youtube.com/embed/097pUW0L_Xc\"}'),
('two and a half men 4', '{\"ep1\":\"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep2\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep3\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep4\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep5\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep6\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep7\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep8\": \"https://www.youtube.com/embed/097pUW0L_Xc\"}'),
('two and a half men 5', '{\"ep1\":\"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep2\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep3\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep4\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep5\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep6\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep7\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep8\": \"https://www.youtube.com/embed/097pUW0L_Xc\"}'),
('two and a half men 6', '{\"ep1\":\"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep2\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep3\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep4\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep5\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep6\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep7\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep8\": \"https://www.youtube.com/embed/097pUW0L_Xc\"}'),
('two and a half men 7', '{\"ep1\":\"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep2\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep3\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep4\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep5\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep6\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep7\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep8\": \"https://www.youtube.com/embed/097pUW0L_Xc\"}'),
('two and a half men 8', '{\"ep1\":\"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep2\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep3\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep4\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep5\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep6\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep7\": \"https://www.youtube.com/embed/097pUW0L_Xc\", \"ep8\": \"https://www.youtube.com/embed/097pUW0L_Xc\"}'),
('supernatural 1', '{\"ep1\":\"https://www.youtube.com/embed/apltEQy8RzQ\", \"ep2\": \"https://www.youtube.com/embed/apltEQy8RzQ\", \"ep3\": \"https://www.youtube.com/embed/apltEQy8RzQ\", \"ep4\": \"https://www.youtube.com/embed/apltEQy8RzQ\", \"ep5\": \"https://www.youtube.com/embed/apltEQy8RzQ\", \"ep6\": \"https://www.youtube.com/embed/apltEQy8RzQ\", \"ep7\": \"https://www.youtube.com/embed/apltEQy8RzQ\", \"ep8\": \"https://www.youtube.com/embed/apltEQy8RzQ\"}'),
('supernatural 2', '{\"ep1\":\"https://www.youtube.com/embed/apltEQy8RzQ\", \"ep2\": \"https://www.youtube.com/embed/apltEQy8RzQ\", \"ep3\": \"https://www.youtube.com/embed/apltEQy8RzQ\", \"ep4\": \"https://www.youtube.com/embed/apltEQy8RzQ\", \"ep5\": \"https://www.youtube.com/embed/apltEQy8RzQ\", \"ep6\": \"https://www.youtube.com/embed/apltEQy8RzQ\", \"ep7\": \"https://www.youtube.com/embed/apltEQy8RzQ\", \"ep8\": \"https://www.youtube.com/embed/apltEQy8RzQ\"}'),
('supernatural 3', '{\"ep1\":\"https://www.youtube.com/embed/apltEQy8RzQ\", \"ep2\": \"https://www.youtube.com/embed/apltEQy8RzQ\", \"ep3\": \"https://www.youtube.com/embed/apltEQy8RzQ\", \"ep4\": \"https://www.youtube.com/embed/apltEQy8RzQ\", \"ep5\": \"https://www.youtube.com/embed/apltEQy8RzQ\", \"ep6\": \"https://www.youtube.com/embed/apltEQy8RzQ\", \"ep7\": \"https://www.youtube.com/embed/apltEQy8RzQ\", \"ep8\": \"https://www.youtube.com/embed/apltEQy8RzQ\"}'),
('supernatural 4', '{\"ep1\":\"https://www.youtube.com/embed/apltEQy8RzQ\", \"ep2\": \"https://www.youtube.com/embed/apltEQy8RzQ\", \"ep3\": \"https://www.youtube.com/embed/apltEQy8RzQ\", \"ep4\": \"https://www.youtube.com/embed/apltEQy8RzQ\", \"ep5\": \"https://www.youtube.com/embed/apltEQy8RzQ\", \"ep6\": \"https://www.youtube.com/embed/apltEQy8RzQ\", \"ep7\": \"https://www.youtube.com/embed/apltEQy8RzQ\", \"ep8\": \"https://www.youtube.com/embed/apltEQy8RzQ\"}');

-- --------------------------------------------------------

--
-- Estrutura para tabela `filmes`
--

CREATE TABLE `filmes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `genero` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `sinopse` text DEFAULT NULL,
  `linkVideo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `filmes`
--

INSERT INTO `filmes` (`id`, `nome`, `genero`, `imagem`, `sinopse`, `linkVideo`) VALUES
(1, 'Harry Potter e a Pedra Filosofal', 'fantasia', 'public/img/filmes/harry-potter-pedra-filosofal-2001.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum nibh ac mauris hendrerit bibendum. Praesent ligula velit, dapibus non aliquet non, semper fringilla turpis. Pellentesque quis arcu eget felis ornare porta. Duis egestas tempor purus, sit amet gravida lectus viverra sit amet. Fusce vel ultricies urna. Fusce urna ante, egestas a laoreet eu, malesuada sit amet erat. Donec feugiat fermentum elit, quis viverra leo laoreet sed. In augue nisl, aliquet ut mattis non, facilisis eget risus. Nullam tincidunt egestas molestie. Sed egestas, turpis at sagittis suscipit, odio urna tempus augue, id dignissim quam risus id nisl. Sed ultricies orci in vehicula blandit.', 'https://www.youtube.com/embed/9fIObnIGMlI'),
(2, 'Harry Potter e a Câmara Secreta', 'fantasia', 'public/img/filmes/harry-potter-camara-secreta-2002.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum nibh ac mauris hendrerit bibendum. Praesent ligula velit, dapibus non aliquet non, semper fringilla turpis. Pellentesque quis arcu eget felis ornare porta. Duis egestas tempor purus, sit amet gravida lectus viverra sit amet. Fusce vel ultricies urna. Fusce urna ante, egestas a laoreet eu, malesuada sit amet erat. Donec feugiat fermentum elit, quis viverra leo laoreet sed. In augue nisl, aliquet ut mattis non, facilisis eget risus. Nullam tincidunt egestas molestie. Sed egestas, turpis at sagittis suscipit, odio urna tempus augue, id dignissim quam risus id nisl. Sed ultricies orci in vehicula blandit.', 'https://www.youtube.com/embed/cf0rRYvDuys'),
(3, 'Harry Potter e o Prisioneiro de Azkaban', 'fantasia', 'public/img/filmes/harry-potter-prisioneiro-azkaban-2004.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum nibh ac mauris hendrerit bibendum. Praesent ligula velit, dapibus non aliquet non, semper fringilla turpis. Pellentesque quis arcu eget felis ornare porta. Duis egestas tempor purus, sit amet gravida lectus viverra sit amet. Fusce vel ultricies urna. Fusce urna ante, egestas a laoreet eu, malesuada sit amet erat. Donec feugiat fermentum elit, quis viverra leo laoreet sed. In augue nisl, aliquet ut mattis non, facilisis eget risus. Nullam tincidunt egestas molestie. Sed egestas, turpis at sagittis suscipit, odio urna tempus augue, id dignissim quam risus id nisl. Sed ultricies orci in vehicula blandit.', 'https://www.youtube.com/embed/e02fwhC6DiQ'),
(4, 'Harry Potter e o Cálice de Fogo', 'fantasia', 'public/img/filmes/harry-potter-cálice-fogo-2005.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum nibh ac mauris hendrerit bibendum. Praesent ligula velit, dapibus non aliquet non, semper fringilla turpis. Pellentesque quis arcu eget felis ornare porta. Duis egestas tempor purus, sit amet gravida lectus viverra sit amet. Fusce vel ultricies urna. Fusce urna ante, egestas a laoreet eu, malesuada sit amet erat. Donec feugiat fermentum elit, quis viverra leo laoreet sed. In augue nisl, aliquet ut mattis non, facilisis eget risus. Nullam tincidunt egestas molestie. Sed egestas, turpis at sagittis suscipit, odio urna tempus augue, id dignissim quam risus id nisl. Sed ultricies orci in vehicula blandit.', 'https://www.youtube.com/embed/cVKkL4O60IM'),
(5, 'Harry Potter e a Ordem da Fênix', 'fantasia', 'public/img/filmes/harry-potter-ordem-fenix-2007.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum nibh ac mauris hendrerit bibendum. Praesent ligula velit, dapibus non aliquet non, semper fringilla turpis. Pellentesque quis arcu eget felis ornare porta. Duis egestas tempor purus, sit amet gravida lectus viverra sit amet. Fusce vel ultricies urna. Fusce urna ante, egestas a laoreet eu, malesuada sit amet erat. Donec feugiat fermentum elit, quis viverra leo laoreet sed. In augue nisl, aliquet ut mattis non, facilisis eget risus. Nullam tincidunt egestas molestie. Sed egestas, turpis at sagittis suscipit, odio urna tempus augue, id dignissim quam risus id nisl. Sed ultricies orci in vehicula blandit.', 'https://www.youtube.com/embed/ZkDCaxUNV3o'),
(6, 'Harry Potter e o Enigma do Príncipe', 'fantasia', 'public/img/filmes/harry-potter-enigma-principe-2009.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum nibh ac mauris hendrerit bibendum. Praesent ligula velit, dapibus non aliquet non, semper fringilla turpis. Pellentesque quis arcu eget felis ornare porta. Duis egestas tempor purus, sit amet gravida lectus viverra sit amet. Fusce vel ultricies urna. Fusce urna ante, egestas a laoreet eu, malesuada sit amet erat. Donec feugiat fermentum elit, quis viverra leo laoreet sed. In augue nisl, aliquet ut mattis non, facilisis eget risus. Nullam tincidunt egestas molestie. Sed egestas, turpis at sagittis suscipit, odio urna tempus augue, id dignissim quam risus id nisl. Sed ultricies orci in vehicula blandit.', 'https://www.youtube.com/embed/wgkHfUaG1nI'),
(7, 'Harry Potter e as Relíquias da Morte - Parte 1', 'fantasia', 'public/img/filmes/harry-potter-reliquias-morte-parte1-2010.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum nibh ac mauris hendrerit bibendum. Praesent ligula velit, dapibus non aliquet non, semper fringilla turpis. Pellentesque quis arcu eget felis ornare porta. Duis egestas tempor purus, sit amet gravida lectus viverra sit amet. Fusce vel ultricies urna. Fusce urna ante, egestas a laoreet eu, malesuada sit amet erat. Donec feugiat fermentum elit, quis viverra leo laoreet sed. In augue nisl, aliquet ut mattis non, facilisis eget risus. Nullam tincidunt egestas molestie. Sed egestas, turpis at sagittis suscipit, odio urna tempus augue, id dignissim quam risus id nisl. Sed ultricies orci in vehicula blandit.', 'https://www.youtube.com/embed/kmXjPbN-rYU'),
(8, 'Harry Potter e as Relíquias da Morte - Parte 2', 'fantasia', 'public/img/filmes/harry-potter-reliquias-morte-parte2-2011.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum nibh ac mauris hendrerit bibendum. Praesent ligula velit, dapibus non aliquet non, semper fringilla turpis. Pellentesque quis arcu eget felis ornare porta. Duis egestas tempor purus, sit amet gravida lectus viverra sit amet. Fusce vel ultricies urna. Fusce urna ante, egestas a laoreet eu, malesuada sit amet erat. Donec feugiat fermentum elit, quis viverra leo laoreet sed. In augue nisl, aliquet ut mattis non, facilisis eget risus. Nullam tincidunt egestas molestie. Sed egestas, turpis at sagittis suscipit, odio urna tempus augue, id dignissim quam risus id nisl. Sed ultricies orci in vehicula blandit.', 'https://www.youtube.com/embed/E79fa8bLfPA'),
(9, 'Carga explosiva', 'acao', 'public/img/filmes/carga-explosiva.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum nibh ac mauris hendrerit bibendum. Praesent ligula velit, dapibus non aliquet non, semper fringilla turpis. Pellentesque quis arcu eget felis ornare porta. Duis egestas tempor purus, sit amet gravida lectus viverra sit amet. Fusce vel ultricies urna. Fusce urna ante, egestas a laoreet eu, malesuada sit amet erat. Donec feugiat fermentum elit, quis viverra leo laoreet sed. In augue nisl, aliquet ut mattis non, facilisis eget risus. Nullam tincidunt egestas molestie. Sed egestas, turpis at sagittis suscipit, odio urna tempus augue, id dignissim quam risus id nisl. Sed ultricies orci in vehicula blandit.', 'https://www.youtube.com/embed/xSL3JGOen_U'),
(10, 'Carga explosiva 2', 'acao', 'public/img/filmes/carga-explosiva-2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum nibh ac mauris hendrerit bibendum. Praesent ligula velit, dapibus non aliquet non, semper fringilla turpis. Pellentesque quis arcu eget felis ornare porta. Duis egestas tempor purus, sit amet gravida lectus viverra sit amet. Fusce vel ultricies urna. Fusce urna ante, egestas a laoreet eu, malesuada sit amet erat. Donec feugiat fermentum elit, quis viverra leo laoreet sed. In augue nisl, aliquet ut mattis non, facilisis eget risus. Nullam tincidunt egestas molestie. Sed egestas, turpis at sagittis suscipit, odio urna tempus augue, id dignissim quam risus id nisl. Sed ultricies orci in vehicula blandit.', 'https://www.youtube.com/embed/ex8jEHPnA-o'),
(11, 'Carga explosiva 3', 'acao', 'public/img/filmes/carga-explosiva-3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum nibh ac mauris hendrerit bibendum. Praesent ligula velit, dapibus non aliquet non, semper fringilla turpis. Pellentesque quis arcu eget felis ornare porta. Duis egestas tempor purus, sit amet gravida lectus viverra sit amet. Fusce vel ultricies urna. Fusce urna ante, egestas a laoreet eu, malesuada sit amet erat. Donec feugiat fermentum elit, quis viverra leo laoreet sed. In augue nisl, aliquet ut mattis non, facilisis eget risus. Nullam tincidunt egestas molestie. Sed egestas, turpis at sagittis suscipit, odio urna tempus augue, id dignissim quam risus id nisl. Sed ultricies orci in vehicula blandit.', 'https://www.youtube.com/embed/oW7vwRlAl7o');

-- --------------------------------------------------------

--
-- Estrutura para tabela `series`
--

CREATE TABLE `series` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `genero` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `sinopse` text DEFAULT NULL,
  `qtdEpisodios` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `series`
--

INSERT INTO `series` (`id`, `nome`, `genero`, `imagem`, `sinopse`, `qtdEpisodios`) VALUES
(1, 'two and a half men 1', 'comedia', 'public/img/series/two-and-a-half-men-1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum nibh ac mauris hendrerit bibendum. Praesent ligula velit, dapibus non aliquet non, semper fringilla turpis. Pellentesque quis arcu eget felis ornare porta. Duis egestas tempor purus, sit amet gravida lectus viverra sit amet. Fusce vel ultricies urna. Fusce urna ante, egestas a laoreet eu, malesuada sit amet erat. Donec feugiat fermentum elit, quis viverra leo laoreet sed. In augue nisl, aliquet ut mattis non, facilisis eget risus. Nullam tincidunt egestas molestie. Sed egestas, turpis at sagittis suscipit, odio urna tempus augue, id dignissim quam risus id nisl. Sed ultricies orci in vehicula blandit.', 8),
(2, 'two and a half men 2', 'comedia', 'public/img/series/two-and-a-half-men-2.jpg\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum nibh ac mauris hendrerit bibendum. Praesent ligula velit, dapibus non aliquet non, semper fringilla turpis. Pellentesque quis arcu eget felis ornare porta. Duis egestas tempor purus, sit amet gravida lectus viverra sit amet. Fusce vel ultricies urna. Fusce urna ante, egestas a laoreet eu, malesuada sit amet erat. Donec feugiat fermentum elit, quis viverra leo laoreet sed. In augue nisl, aliquet ut mattis non, facilisis eget risus. Nullam tincidunt egestas molestie. Sed egestas, turpis at sagittis suscipit, odio urna tempus augue, id dignissim quam risus id nisl. Sed ultricies orci in vehicula blandit.', 8),
(3, 'two and a half men 3', 'comedia', 'public/img/series/two-and-a-half-men-3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum nibh ac mauris hendrerit bibendum. Praesent ligula velit, dapibus non aliquet non, semper fringilla turpis. Pellentesque quis arcu eget felis ornare porta. Duis egestas tempor purus, sit amet gravida lectus viverra sit amet. Fusce vel ultricies urna. Fusce urna ante, egestas a laoreet eu, malesuada sit amet erat. Donec feugiat fermentum elit, quis viverra leo laoreet sed. In augue nisl, aliquet ut mattis non, facilisis eget risus. Nullam tincidunt egestas molestie. Sed egestas, turpis at sagittis suscipit, odio urna tempus augue, id dignissim quam risus id nisl. Sed ultricies orci in vehicula blandit.', 8),
(4, 'two and a half men 4', 'comedia', 'public/img/series/two-and-a-half-men-4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum nibh ac mauris hendrerit bibendum. Praesent ligula velit, dapibus non aliquet non, semper fringilla turpis. Pellentesque quis arcu eget felis ornare porta. Duis egestas tempor purus, sit amet gravida lectus viverra sit amet. Fusce vel ultricies urna. Fusce urna ante, egestas a laoreet eu, malesuada sit amet erat. Donec feugiat fermentum elit, quis viverra leo laoreet sed. In augue nisl, aliquet ut mattis non, facilisis eget risus. Nullam tincidunt egestas molestie. Sed egestas, turpis at sagittis suscipit, odio urna tempus augue, id dignissim quam risus id nisl. Sed ultricies orci in vehicula blandit.', 8),
(5, 'two and a half men 5', 'comedia', 'public/img/series/two-and-a-half-men-5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum nibh ac mauris hendrerit bibendum. Praesent ligula velit, dapibus non aliquet non, semper fringilla turpis. Pellentesque quis arcu eget felis ornare porta. Duis egestas tempor purus, sit amet gravida lectus viverra sit amet. Fusce vel ultricies urna. Fusce urna ante, egestas a laoreet eu, malesuada sit amet erat. Donec feugiat fermentum elit, quis viverra leo laoreet sed. In augue nisl, aliquet ut mattis non, facilisis eget risus. Nullam tincidunt egestas molestie. Sed egestas, turpis at sagittis suscipit, odio urna tempus augue, id dignissim quam risus id nisl. Sed ultricies orci in vehicula blandit.', 8),
(6, 'two and a half men 6', 'comedia', 'public/img/series/two-and-a-half-men-6.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum nibh ac mauris hendrerit bibendum. Praesent ligula velit, dapibus non aliquet non, semper fringilla turpis. Pellentesque quis arcu eget felis ornare porta. Duis egestas tempor purus, sit amet gravida lectus viverra sit amet. Fusce vel ultricies urna. Fusce urna ante, egestas a laoreet eu, malesuada sit amet erat. Donec feugiat fermentum elit, quis viverra leo laoreet sed. In augue nisl, aliquet ut mattis non, facilisis eget risus. Nullam tincidunt egestas molestie. Sed egestas, turpis at sagittis suscipit, odio urna tempus augue, id dignissim quam risus id nisl. Sed ultricies orci in vehicula blandit.', 8),
(7, 'two and a half men 7', 'comedia', 'public/img/series/two-and-a-half-men-7.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum nibh ac mauris hendrerit bibendum. Praesent ligula velit, dapibus non aliquet non, semper fringilla turpis. Pellentesque quis arcu eget felis ornare porta. Duis egestas tempor purus, sit amet gravida lectus viverra sit amet. Fusce vel ultricies urna. Fusce urna ante, egestas a laoreet eu, malesuada sit amet erat. Donec feugiat fermentum elit, quis viverra leo laoreet sed. In augue nisl, aliquet ut mattis non, facilisis eget risus. Nullam tincidunt egestas molestie. Sed egestas, turpis at sagittis suscipit, odio urna tempus augue, id dignissim quam risus id nisl. Sed ultricies orci in vehicula blandit.', 8),
(8, 'two and a half men 8', 'comedia', 'public/img/series/two-and-a-half-men-8.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum nibh ac mauris hendrerit bibendum. Praesent ligula velit, dapibus non aliquet non, semper fringilla turpis. Pellentesque quis arcu eget felis ornare porta. Duis egestas tempor purus, sit amet gravida lectus viverra sit amet. Fusce vel ultricies urna. Fusce urna ante, egestas a laoreet eu, malesuada sit amet erat. Donec feugiat fermentum elit, quis viverra leo laoreet sed. In augue nisl, aliquet ut mattis non, facilisis eget risus. Nullam tincidunt egestas molestie. Sed egestas, turpis at sagittis suscipit, odio urna tempus augue, id dignissim quam risus id nisl. Sed ultricies orci in vehicula blandit.', 8),
(9, 'supernatural 1', 'terror', 'public/img/series/supernatural-1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum nibh ac mauris hendrerit bibendum. Praesent ligula velit, dapibus non aliquet non, semper fringilla turpis. Pellentesque quis arcu eget felis ornare porta. Duis egestas tempor purus, sit amet gravida lectus viverra sit amet. Fusce vel ultricies urna. Fusce urna ante, egestas a laoreet eu, malesuada sit amet erat. Donec feugiat fermentum elit, quis viverra leo laoreet sed. In augue nisl, aliquet ut mattis non, facilisis eget risus. Nullam tincidunt egestas molestie. Sed egestas, turpis at sagittis suscipit, odio urna tempus augue, id dignissim quam risus id nisl. Sed ultricies orci in vehicula blandit.', 8),
(10, 'supernatural 2', 'terror', 'public/img/series/supernatural-2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum nibh ac mauris hendrerit bibendum. Praesent ligula velit, dapibus non aliquet non, semper fringilla turpis. Pellentesque quis arcu eget felis ornare porta. Duis egestas tempor purus, sit amet gravida lectus viverra sit amet. Fusce vel ultricies urna. Fusce urna ante, egestas a laoreet eu, malesuada sit amet erat. Donec feugiat fermentum elit, quis viverra leo laoreet sed. In augue nisl, aliquet ut mattis non, facilisis eget risus. Nullam tincidunt egestas molestie. Sed egestas, turpis at sagittis suscipit, odio urna tempus augue, id dignissim quam risus id nisl. Sed ultricies orci in vehicula blandit.', 8),
(11, 'supernatural 3', 'terror', 'public/img/series/supernatural-3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum nibh ac mauris hendrerit bibendum. Praesent ligula velit, dapibus non aliquet non, semper fringilla turpis. Pellentesque quis arcu eget felis ornare porta. Duis egestas tempor purus, sit amet gravida lectus viverra sit amet. Fusce vel ultricies urna. Fusce urna ante, egestas a laoreet eu, malesuada sit amet erat. Donec feugiat fermentum elit, quis viverra leo laoreet sed. In augue nisl, aliquet ut mattis non, facilisis eget risus. Nullam tincidunt egestas molestie. Sed egestas, turpis at sagittis suscipit, odio urna tempus augue, id dignissim quam risus id nisl. Sed ultricies orci in vehicula blandit.', 8),
(12, 'supernatural 4', 'terror', 'public/img/series/supernatural-4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum nibh ac mauris hendrerit bibendum. Praesent ligula velit, dapibus non aliquet non, semper fringilla turpis. Pellentesque quis arcu eget felis ornare porta. Duis egestas tempor purus, sit amet gravida lectus viverra sit amet. Fusce vel ultricies urna. Fusce urna ante, egestas a laoreet eu, malesuada sit amet erat. Donec feugiat fermentum elit, quis viverra leo laoreet sed. In augue nisl, aliquet ut mattis non, facilisis eget risus. Nullam tincidunt egestas molestie. Sed egestas, turpis at sagittis suscipit, odio urna tempus augue, id dignissim quam risus id nisl. Sed ultricies orci in vehicula blandit.', 8);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `filmes`
--
ALTER TABLE `filmes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `series`
--
ALTER TABLE `series`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
