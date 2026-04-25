<?php 
	include "partials/topbar.php";
	include "partials/perfil-dropdown.php";
?>

<!DOCTYPE html>
<html style="overflow-y: auto;">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Series</title>
		<style type="text/css">
			<?php 
				include "public/css/topbar.css";
				include "public/css/series.css";
				include "public/css/detalhes-video.css";
			?>
		</style>
	</head>
	<body>
		<div class="row">
			<div class="col col-input">
				<?php if(isset($_GET['genero'])) {$genero = $_GET['genero'];?>
					<form action="index.php" method="GET">
						<input type="hidden" name="action" value="pesquisarSeries">
						<input type="hidden" name="genero" value="<?=$genero?>">
						<input class="form-control" name="videoSeries" style="width: 39vw; margin-left: 6.5vw;" type="text" placeholder="Pesquisar...">
					</form>
					<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" style="margin-left: 0.5vw;" class="bi bi-search" viewBox="0 0 16 16">
	  					<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
					</svg>
				<?php } else {?>
					<form action="index.php" method="GET">
						<input type="hidden" name="action" value="pesquisarSeries">
						<input class="form-control" name="videoSeries" style="width: 39vw; margin-left: 6.5vw;" type="text" placeholder="Pesquisar...">
					</form>
					<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" style="margin-left: 0.5vw;" class="bi bi-search" viewBox="0 0 16 16">
	  					<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
					</svg>
				<?php }?>
			</div>
		</div>

		<div class="container text-center">
			<div class="row row-banner">
				<?php
					if(isset($_GET['videoSeries'])) {
						foreach ($funcaoRecuperaSerie['series'] as $resultados) {
				?>
							<div class="col col-lg-3 col-banner" onclick="window.location='index.php?action=detalhesVideo&videoSerie=<?=$resultados['nome'];?>'">
								<img class="img-banner" src="<?= $resultados['imagem']; ?>" style="position: absolute;">
								<p style="margin-top: 40vh; text-wrap: nowrap;"><?= $resultados['nome'];; ?></p>
							</div>
				<?php
						}
						$total_series = count($funcaoRecuperaSerie['total_series']);
						if($total_series === 0) {
							echo "<h1>Sem resultados!</h1>";
						}
					}
				?>

			</div>
		</div>

		<div class="container text-center">
			<div class="row row-banner" style="margin-top: 0;">
				<?php
					if(!isset($_GET['videoSeries'])) {
						foreach ($funcaoRecupera['series'] as $resultados) {
				?>
							<div class="col col-lg-3 col-banner" onclick="window.location='index.php?action=detalhesVideo&videoSerie=<?=$resultados['nome'];?>'">
								<img class="img-banner" src="<?= $resultados['imagem']; ?>" style="position: absolute;">
								<p style="margin-top: 40vh; text-wrap: nowrap;"><?= $resultados['nome']; ?></p>
							</div>
				<?php
						}
						$total_series = count($funcaoRecupera['total_series']);
					}
				?>
			</div>
		</div>

			<!-- paginação pesquisa-->
			<?php
				if(isset($_GET['videoSeries']) && !isset($_GET['genero'])) {
			?>
					<div class="pagination">
						<a href="index.php?action=pesquisarSeries&videoSeries=<?=$_GET['videoSeries'];?>&pagina=<?=$pagina-1;?>">&laquo;</a>
			<?php
					for($i = $pagina - 4 ; $i <= $pagina - 1; $i++) {
						if($i >= 1) {
			?>
							<a href="index.php?action=pesquisarSeries&videoSeries=<?=$_GET['videoSeries'];?>&pagina=<?=$i;?>"><?=$i;?></a>
			<?php
						}
					}
					for($e = $pagina + 1 ; $e <= $pagina + 4; $e++) {
						if($e <= $total_series/2) {
			?>
							<a href="index.php?action=pesquisarSeries&videoSeries=<?=$_GET['videoSeries'];?>&pagina=<?=$e;?>"><?=$e;?></a>
			<?php
						}
					}
			?>
						<a href="index.php?action=pesquisarSeries&videoSeries=<?=$_GET['videoSeries'];?>&pagina=<?=$pagina+1;?>">&raquo;</a>
					</div>
			<?php
				}
			?>

			<!-- paginação sem pesquisa -->

			<?php
				if(!isset($_GET['videoSeries']) && !isset($_GET['genero'])) {
			?>
					<div class="pagination">
						<a href="index.php?action=pesquisarSeries&pagina=<?=$pagina-1;?>">&laquo;</a>
			<?php
					for($i = $pagina - 4 ; $i <= $pagina - 1; $i++) {
						if($i >= 1) {
			?>
							<a href="index.php?action=pesquisarSeries&pagina=<?=$i;?>"><?=$i;?></a>
			<?php
						}
					}
					for($e = $pagina + 1 ; $e <= $pagina + 6; $e++) {
						if($e <= $total_series / 2) {
			?>
							<a href="index.php?action=pesquisarSeries&pagina=<?=$e;?>"><?=$e;?></a>
			<?php
						}
					}
			?>
						<a href="index.php?action=pesquisarSeries&pagina=<?=$pagina+1;?>">&raquo;</a>
					</div>
			<?php
				}
			?>

			<!-- paginação genero e pesquisa -->

			<?php
				if(isset($_GET['videoSeries']) && isset($_GET['genero'])) {
			?>
					<div class="pagination">
						<a href="index.php?action=pesquisarSeries&genero=<?=$_GET['genero'];?>&videoSeries=<?=$_GET['videoSeries'];?>&pagina=<?=$pagina-1;?>">&laquo;</a>
			<?php
					for($i = $pagina - 4 ; $i <= $pagina - 1; $i++) {
						if($i >= 1) {
			?>
							<a href="index.php?action=pesquisarSeries&genero=<?=$_GET['genero'];?>&videoSeries=<?=$_GET['videoSeries'];?>&pagina=<?=$i;?>"><?=$i;?></a>
			<?php
						}
					}
					for($e = $pagina + 1 ; $e <= $pagina + 6; $e++) {
						if($e <= $total_series/2) {
			?>
							<a href="index.php?action=pesquisarSeries&genero=<?=$_GET['genero'];?>&videoSeries=<?=$_GET['videoSeries'];?>&pagina=<?=$e;?>"><?=$e;?></a>
			<?php
						}
					}
			?>
						<a href="index.php?action=pesquisarSeries&genero=<?=$_GET['genero'];?>&videoSeries=<?=$_GET['videoSeries'];?>&pagina=<?=$pagina+1;?>">&raquo;</a>
					</div>
			<?php
				}
			?>

			<!-- paginação genero e sem pesquisa -->

			<?php
				if(!isset($_GET['videoSeries']) && isset($_GET['genero'])) {
			?>
					<div class="pagination">
						<a href="index.php?action=pesquisarSeries&genero=<?=$_GET['genero'];?>&pagina=<?=$pagina-1;?>">&laquo;</a>
			<?php
					for($i = $pagina - 4 ; $i <= $pagina - 1; $i++) {
						if($i >= 1) {
			?>
							<a href="index.php?action=pesquisarSeries&genero=<?=$_GET['genero'];?>&pagina=<?=$i;?>"><?=$i;?></a>
			<?php
						}
					}
					for($e = $pagina + 1 ; $e <= $pagina + 6; $e++) {
						if($e <= $total_series/2) {
			?>
							<a href="index.php?action=pesquisarSeries&genero=<?=$_GET['genero'];?>&pagina=<?=$e;?>"><?=$e;?></a>
			<?php
						}
					}
			?>
						<a href="index.php?action=pesquisarSeries&genero=<?=$_GET['genero'];?>&pagina=<?=$pagina+1;?>">&raquo;</a>
					</div>
			<?php
				}
			?>

	</body>
</html>
