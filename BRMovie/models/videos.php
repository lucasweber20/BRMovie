<?php
	include_once "models/database.php";

	class Videos {
		public static function selecionarVideo($nomeVideo) {
			if(isset($_GET['videoFilme'])) {
				$conn = Database::conectarBanco();

				$stmt = $conn->prepare("SELECT nome,sinopse,imagem,linkVideo FROM filmes WHERE nome = ?;");
				$stmt->execute(array($nomeVideo));
				$retorno_video = $stmt->fetchAll(PDO::FETCH_ASSOC);

				return $retorno_video;

			} else if($_GET['videoSerie']) {
				$conn = Database::conectarBanco();

				$stmt = $conn->prepare("SELECT nome,imagem,sinopse,qtdEpisodios FROM series WHERE nome = ?;");
				$stmt->execute(array($nomeVideo));
				$retorno_video = $stmt->fetchAll(PDO::FETCH_ASSOC);

				return $retorno_video;
			}
		}

		public static function selecionarVideoEp($nomeVideo, $ep) {
			$conn = Database::conectarBanco();

			$stmt = $conn->prepare("SELECT JSON_UNQUOTE(JSON_EXTRACT(eps, '$')) AS eps FROM episodios WHERE serie = ?;");
			$stmt->execute(array($nomeVideo));
			$retorno_video = $stmt->fetchAll(PDO::FETCH_ASSOC);

			return $retorno_video;
		}
	}
?>