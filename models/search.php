<?php
	include_once 'models/database.php';

	class SearchContent {
		public static function pesquisarConteudoSerie($nomeSerie, $pagina) {
			if (isset($_GET['pagina'])) {
				$pagina = $_GET['pagina'];
			}
			$limite = 2;
			$inicio = ($pagina * $limite) - $limite;

			$conn = Database::conectarBanco();

			$stmt = $conn->prepare("SELECT id,nome,imagem FROM series WHERE nome LIKE ? ORDER BY nome LIMIT $inicio, $limite");
			$stmt->execute(array($nomeSerie));
			$retorno_series = $stmt->fetchAll(PDO::FETCH_ASSOC);

			$stmt = $conn->prepare("SELECT id,nome,imagem FROM series WHERE nome LIKE ? ORDER BY nome");
			$stmt->execute(array($nomeSerie));
			$retorno_total_series = $stmt->fetchAll(PDO::FETCH_ASSOC);

			return ['series' => $retorno_series, 'total_series' => $retorno_total_series];
		}

		public static function pesquisarConteudoSeriesTotal($pagina) {
			$limite = 2;
			$inicio = ($pagina * $limite) - $limite;

			$conn = Database::conectarBanco();

			$stmt = $conn->prepare("SELECT id,nome,imagem FROM series ORDER BY nome LIMIT $inicio, $limite;");
			$stmt->execute();
			$retorno_series = $stmt->fetchAll(PDO::FETCH_ASSOC);

			$stmt = $conn->prepare("SELECT nome FROM series ORDER BY nome");
			$stmt->execute();
			$retorno_total_series = $stmt->fetchAll(PDO::FETCH_ASSOC);

			return ['series' => $retorno_series, 'total_series' => $retorno_total_series];
		}

		public static function pesquisarConteudoSeriesGenero($pagina, $genero) {
			$limite = 2;
			$inicio = ($pagina * $limite) - $limite;

			$conn = Database::conectarBanco();

			$stmt = $conn->prepare("SELECT * FROM series WHERE genero=? ORDER BY nome LIMIT $inicio, $limite;");
			$stmt->execute(array($genero));
			$retorno_series = $stmt->fetchAll(PDO::FETCH_ASSOC);

			$stmt = $conn->prepare("SELECT nome FROM series  WHERE genero=? ORDER BY nome");
			$stmt->execute(array($genero));
			$retorno_total_series = $stmt->fetchAll(PDO::FETCH_ASSOC);

			return ['series' => $retorno_series, 'total_series' => $retorno_total_series];
		}

		public static function pesquisarConteudoseriesGeneroNome($nomeSerie, $pagina, $genero) {
			$limite = 2;
			$inicio = ($pagina * $limite) - $limite;

			$conn = Database::conectarBanco();

			$stmt = $conn->prepare("SELECT * FROM series WHERE nome LIKE ? AND genero=? ORDER BY nome LIMIT $inicio, $limite;");
			$stmt->execute(array($nomeSerie, $genero));
			$retorno_series = $stmt->fetchAll(PDO::FETCH_ASSOC);

			$stmt = $conn->prepare("SELECT * FROM series WHERE nome LIKE ? AND genero=? ORDER BY nome");
			$stmt->execute(array($nomeSerie, $genero));
			$retorno_total_series = $stmt->fetchAll(PDO::FETCH_ASSOC);

			return ['series' => $retorno_series, 'total_series' => $retorno_total_series];
		}

		public static function pesquisarConteudoFilme($nomeFilme, $pagina) {
			if (isset($_GET['pagina'])) {
				$pagina = $_GET['pagina'];
			}
			$limite = 2;
			$inicio = ($pagina * $limite) - $limite;

			$conn = Database::conectarBanco();

			$stmt = $conn->prepare("SELECT id,nome,imagem FROM filmes WHERE nome LIKE ? ORDER BY nome LIMIT $inicio, $limite");
			$stmt->execute(array($nomeFilme));
			$retorno_filmes = $stmt->fetchAll(PDO::FETCH_ASSOC);

			$stmt = $conn->prepare("SELECT id,nome,imagem FROM filmes WHERE nome LIKE ? ORDER BY nome");
			$stmt->execute(array($nomeFilme));
			$retorno_total_filmes = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
			return ['filmes' => $retorno_filmes, 'total_filmes' => $retorno_total_filmes];
		}

		public static function pesquisarConteudoFilmesTotal($pagina) {
			$limite = 2;
			$inicio = ($pagina * $limite) - $limite;

			$conn = Database::conectarBanco();

			$stmt = $conn->prepare("SELECT id,nome,imagem FROM filmes ORDER BY nome LIMIT $inicio, $limite;");
			$stmt->execute();
			$retorno_filmes = $stmt->fetchAll(PDO::FETCH_ASSOC);

			$stmt = $conn->prepare("SELECT nome FROM filmes ORDER BY nome");
			$stmt->execute();
			$retorno_total_filmes = $stmt->fetchAll(PDO::FETCH_ASSOC);

			return ['filmes' => $retorno_filmes, 'total_filmes' => $retorno_total_filmes];
		}

		public static function pesquisarConteudoFilmesGenero($pagina, $genero) {
			$limite = 2;
			$inicio = ($pagina * $limite) - $limite;

			$conn = Database::conectarBanco();

			$stmt = $conn->prepare("SELECT * FROM filmes WHERE genero=? ORDER BY nome LIMIT $inicio, $limite;");
			$stmt->execute(array($genero));
			$retorno_filmes = $stmt->fetchAll(PDO::FETCH_ASSOC);

			$stmt = $conn->prepare("SELECT nome FROM filmes WHERE genero=? ORDER BY nome");
			$stmt->execute(array($genero));
			$retorno_total_filmes = $stmt->fetchAll(PDO::FETCH_ASSOC);

			return ['filmes' => $retorno_filmes, 'total_filmes' => $retorno_total_filmes];
		}

		public static function pesquisarConteudoFilmesGeneroNome($nomeFilme, $pagina, $genero) {
			$limite = 2;
			$inicio = ($pagina * $limite) - $limite;

			$conn = Database::conectarBanco();

			$stmt = $conn->prepare("SELECT * FROM filmes WHERE nome LIKE ? AND genero=? ORDER BY nome LIMIT $inicio, $limite;");
			$stmt->execute(array($nomeFilme, $genero));
			$retorno_filmes = $stmt->fetchAll(PDO::FETCH_ASSOC);

			$stmt = $conn->prepare("SELECT * FROM filmes WHERE nome LIKE ? AND genero=? ORDER BY nome");
			$stmt->execute(array($nomeFilme, $genero));
			$retorno_total_filmes = $stmt->fetchAll(PDO::FETCH_ASSOC);

			return ['filmes' => $retorno_filmes, 'total_filmes' => $retorno_total_filmes];
		}
	};

?>