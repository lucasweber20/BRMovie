<?php 

	require_once "models/videos.php";

	class SelectVideos {
		public static function selecionarVideo() {

			if(isset($_GET['videoFilme'])) {
				$nomeVideo = $_GET['videoFilme'];
				$recuperaVideo = Videos::selecionarVideo($nomeVideo);

				include 'views/detalhes-filme.php';

			} else if($_GET['videoSerie'] && !isset($_GET['ep'])) {
				$nomeVideo = $_GET['videoSerie'];
				$recuperaVideo = Videos::selecionarVideo($nomeVideo);

				include 'views/detalhes-serie.php';

			} else if(isset($_GET['ep'])) {
				$nomeVideo = $_GET['videoSerie'];
				$ep = $_GET['ep'];

				$recuperaVideo = Videos::selecionarVideoEp($nomeVideo, $ep);

				include 'views/video.php';
			}
		}
	}

?>