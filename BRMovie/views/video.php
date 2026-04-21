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
		<?php
			$arrayResultados = $recuperaVideo[0]['eps'];
			$converteResultados = json_decode($arrayResultados, true);

			$epLink = $converteResultados[$_GET['ep']];
		?>
		<div class="col" style="margin-left: 15vw;">
			<iframe class="player" src="<?=$epLink?>" allowfullscreen=true></iframe>
		</div><br><br><br>
		<div class="row">
			<div class="col">
				<h1 class="comments">Comentários</h1>
				<form action="" method="POST" style="height: 14.5vh;">
					<textarea class="form-control comments" name="comments" rows="5" placeholder="Adicione um comentário..."></textarea>
					<button type="submit" class="btn btn-comments">Enviar</button>
				</form>
			</div>
		</div>
	</body>
</html>