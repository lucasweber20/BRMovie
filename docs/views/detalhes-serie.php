<?php
	include "partials/topbar.php";
?>

<!DOCTYPE html>
<html style="overflow-y: auto;">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<style type="text/css">
			<?php 
				include "public/css/topbar.css";
				include "public/css/detalhes-video.css";
			?>
		</style>
	</head>
	<body>
		<div class="col" style="text-align: center; margin-bottom: -5vh; margin-top: 2vh;">
			<h1 style="white-space: nowrap;"><?= $recuperaVideo[0]['nome'];?></h1>
		</div>

		<div class="col">
			<img src="<?= $recuperaVideo[0]['imagem']; ?>" style="margin: auto; margin-top: 10vh; width: 20vw; height: 50vh; display: block;">
		</div><br><br>

		<div class="container text-center">
			<div class="row row-banner">
				<?php
					foreach($recuperaVideo as $resultados) {
						for ($i=1; $i <= $resultados['qtdEpisodios']; $i++) {
				?>
							<div class="col col-lg-3 col-banner" onclick="window.location='index.php?action=detalhesVideo&videoSerie=<?=$resultados['nome'];?>&ep=ep<?=$i?>'">
								<p class="btn-eps">episodio <?= $i; ?></p>
							</div>
				<?php
						}
					}
				?>
			</div>
		</div>

		<div class="col col-synopsis">
			<h1>Sinopse</h1>
			<p><?= $recuperaVideo[0]['sinopse'] ?></p>
		</div>
	</body>
</html>