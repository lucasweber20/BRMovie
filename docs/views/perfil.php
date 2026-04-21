<?php
	include "partials/topbar.php";
	include "partials/perfil-dropdown.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
		<title>Perfil</title>
		<style type="text/css">
			<?php 
				include "public/css/topbar.css";
				include "public/css/perfil.css";
				include "public/css/perfil-dropdown.css";
			?>
		</style>
	</head>
	<body>
		<div class="row">
			<div class="col col-icon-profile">
				<?php 
					include_once "models/database.php";
					$conn = Database::conectarBanco();
					$stmt = $conn->prepare("SELECT image FROM users WHERE id = ?;");
					$stmt->execute(array($_SESSION['usuario_id']));
					$imagem = $stmt->fetch(PDO::FETCH_ASSOC);

					if($imagem['image'] == "") {
						echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="130" height="130" style="margin-right: 7vw;">
								<path fill="#747676" d="M399 384.2C376.9 345.8 335.4 320 288 320l-64 0c-47.4 0-88.9 25.8-111 64.2c35.2 39.2 86.2 63.8 143 63.8s107.8-24.7 143-63.8zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm256 16a72 72 0 1 0 0-144 72 72 0 1 0 0 144z"/>
							  </svg>';
					} else {
						echo "<img class='perfil-img' src=" . $imagem['image'] . ">";
					}
				?>
			</div>
		</div>
		<div class="row">
			<form action="?action=uploadImagem" method="POST" enctype="multipart/form-data" style="margin-left: 48.6vw; height: 5vh;">
				<input class="col-icon-img" type="file" name="image" accept="image/*" style="width: 17.5vw; margin-top: 1.5vh;">
				<input type="submit" name="submitImage" style="width: 4vw; height: 3.5vh;">
			</form>
		<div>
		<br>
		<hr>
		<br>
		<div class="row">
			<div class="col col-upd-info col-form" style="height: 19vh;">
				<form action="#" method="post" style="margin-top: 1.5vh;">
					<p style="margin: 0;">Mudar nome de usuário</p>
					<input class="form-control" type="text" name="updUsername">
					<button type="submit" class="btn btn-login">Confirmar</button>
				</form>
			</div>
			<div class="col col-upd-info col-form" style="height: 26.5vh;">
				<form action="index.php?action=alterarSenha" method="post" style="margin-top: 1.5vh;">
					<p style="margin: 0;">Mudar senha</p>
					<input type="password" class="form-control" type="text" name="updPassword" required>
					<p style="margin: 0;">Confirmar nova senha</p>
					<input type="password" class="form-control" type="text" name="confirmUpdPassword" required>
					<button type="submit" class="btn btn-login" style="margin-bottom: 0.5vh;">Confirmar</button>
					<?php 
						if ( isset($_GET['successPassUpdt']) ) {
							echo '<p style="color: #4ff52a; white-space: nowrap; text-align: center;">Senha atualizada com sucesso!</p>';
						}
					?>
				</form>
			</div>
			<div class="col col-upd-info col-form" style="height: 19vh;">
				<form action="index.php?action=alterarEmail" method="post" style="margin-top: 1.5vh;">
					<p style="margin: 0;">Mudar E-mail</p>
					<input class="form-control" type="email" name="updEmail" required>
					<button type="submit" class="btn btn-login" style="margin-bottom: 0.5vh;">Confirmar</button>
					<?php
						if(isset($_GET['error'])) {
							echo '<p style="color: #de4035; white-space: nowrap; text-align: center;">Não foi possível alterar E-mail!</p>';
						} else if(isset($_GET['successEmailUpdt'])) {
							echo '<p style="color: #4ff52a; white-space: nowrap; text-align: center;">E-mail atualizado com sucesso!</p>';
						}
					?>
				</form>
			</div>
		</div>
	</body>
</html>