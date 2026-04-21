<?php
	require_once "models/search.php";

	class Search {
		public static function pesquisarConteudoSeries() {
			error_reporting(0);
			if(isset($_GET['videoSeries']) && !isset($_GET['genero'])) {
				$nomeSerie = "%".trim($_GET['videoSeries'])."%";
				if (isset($_GET['pagina'])) {
					$pagina = $_GET['pagina'];
					$funcaoRecuperaSerie = SearchContent::pesquisarConteudoSerie($nomeSerie, $pagina);
				} else {
					$pagina = 1;
					$funcaoRecuperaSerie = SearchContent::pesquisarConteudoSerie($nomeSerie, $pagina);
				}

				if ($funcaoRecuperaSerie) {
					include "views/series.php";
				} else {
					header("Location: index.php?action=series&result=not+found");
				}
			} else if(isset($_GET['genero']) && !isset($_GET['videoSeries'])) {
				$genero = $_GET['genero'];

				if (isset($_GET['pagina'])) {
					$pagina = $_GET['pagina'];
					$funcaoRecupera = SearchContent::pesquisarConteudoSeriesGenero($pagina, $genero);
				} else {
					$pagina = 1;
					$funcaoRecupera = SearchContent::pesquisarConteudoSeriesGenero($pagina, $genero);
				}

				if ($funcaoRecupera) {
					include "views/series.php";
				} else {
					header("Location: index.php?action=series&result=not+found");
				}

			} else if (isset($_GET['genero']) && isset($_GET['videoSeries'])) {
				$nomeSerie = "%".trim($_GET['videoSeries'])."%";
				$genero = $_GET['genero'];

				if (isset($_GET['pagina'])) {
					$pagina = $_GET['pagina'];
					$funcaoRecuperaFilme = SearchContent::pesquisarConteudoSeriesGeneroNome($nomeSerie, $pagina, $genero);
				} else {
					$pagina = 1;
					$funcaoRecuperaSerie = SearchContent::pesquisarConteudoSeriesGeneroNome($nomeSerie, $pagina, $genero);
				}

				if ($funcaoRecuperaSerie) {
					include "views/series.php";
				} else {
					header("Location: index.php?action=series&result=not+found");
				}

			} else if(!isset($_GET['videoSeries']) && !isset($_GET['videoFilmes'])) {
				if (isset($_GET['pagina'])) {
					$pagina = $_GET['pagina'];
					$funcaoRecupera = SearchContent::pesquisarConteudoSeriesTotal($pagina);
				} else {
					$pagina = 1;
					$funcaoRecupera = SearchContent::pesquisarConteudoSeriesTotal($pagina);
				}

				if ($funcaoRecupera) {
					include "views/series.php";
				}

			} else {
				include "views/perfil.php";
			}
		}

		public static function pesquisarConteudoFilmes() {
			error_reporting(0);
			if(isset($_GET['videoFilmes']) && !isset($_GET['genero'])) {
				$nomeFilme = "%".trim($_GET['videoFilmes'])."%";
				if (isset($_GET['pagina'])) {
					$pagina = $_GET['pagina'];
					$funcaoRecuperaFilme = SearchContent::pesquisarConteudoFilme($nomeFilme, $pagina);
				} else {
					$pagina = 1;
					$funcaoRecuperaFilme = SearchContent::pesquisarConteudoFilme($nomeFilme, $pagina);
				}

				if ($funcaoRecuperaFilme) {
					include "views/filmes.php";
				} else {
					header("Location: index.php?action=filmes&result=not+found");
				}

			} else if(isset($_GET['genero']) && !isset($_GET['videoFilmes'])) {
				$genero = $_GET['genero'];

				if (isset($_GET['pagina'])) {
					$pagina = $_GET['pagina'];
					$funcaoRecupera = SearchContent::pesquisarConteudoFilmesGenero($pagina, $genero);
				} else {
					$pagina = 1;
					$funcaoRecupera = SearchContent::pesquisarConteudoFilmesGenero($pagina, $genero);
				}

				if ($funcaoRecupera) {
					include "views/filmes.php";
				} else {
					header("Location: index.php?action=filmes&result=not+found");
				}

			} else if(isset($_GET['genero']) && isset($_GET['videoFilmes'])) {
				$nomeFilme = "%".trim($_GET['videoFilmes'])."%";
				$genero = $_GET['genero'];

				if (isset($_GET['pagina'])) {
					$pagina = $_GET['pagina'];
					$funcaoRecuperaFilme = SearchContent::pesquisarConteudoFilmesGeneroNome($nomeFilme, $pagina, $genero);
				} else {
					$pagina = 1;
					$funcaoRecuperaFilme = SearchContent::pesquisarConteudoFilmesGeneroNome($nomeFilme, $pagina, $genero);
				}

				if ($funcaoRecuperaFilme) {
					include "views/filmes.php";
				} else {
					header("Location: index.php?action=filmes&result=not+found");
				}

			} else if(!isset($_GET['videoSeries']) && !isset($_GET['videoFilmes'])) {
				if (isset($_GET['pagina'])) {
					$pagina = $_GET['pagina'];
					$funcaoRecupera = SearchContent::pesquisarConteudoFilmesTotal($pagina);
				} else {
					$pagina = 1;
					$funcaoRecupera = SearchContent::pesquisarConteudoFilmesTotal($pagina);
				}

				if ($funcaoRecupera) {
					include "views/filmes.php";
				}

			} else {
				include "views/perfil.php";
			}
		}
	}
?>