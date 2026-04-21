<?php 
	include "partials/topbar.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Registrar</title>
		<style type="text/css">
			<?php 
				include "public/css/topbar.css";
				include "public/css/registrar.css";
			?>
		</style>
	</head>
	<body>
		<div class="row">
			<div class="col col-lg-2 col-form">
				<h1 style="width: 63%; text-align: center; margin-top: 1vh; margin-left: 2.6vw;">Registrar</h1>
				<form name="form" action="index.php?action=registrar" method="POST">
					<p style="margin: 0;">E-mail</p>
					<input type="text" name="email" class="form-control" required>
					<p style="margin: 0;">Nome de usuário</p>
					<input type="text" name="username" class="form-control" required>
					<p style="margin: 0;">Senha</p>
					<input type="password" name="password" class="form-control" required>
					<p style="margin: 0;">Confirmar senha</p>
					<input type="password" name="confirmPass" class="form-control" required>
					<a href="?action=login" style="text-decoration: none; color: #000000;"><button type="button" class="btn btn-register" style="margin-right: -1.5vw;">Login</button></a>
					<button type="submit" class="btn btn-register" style="width: 6vw;">Cadastrar</button>
					<p style="color: #de4035; white-space: nowrap;">
						<?php
							if(isset($_GET['error'])) {
								echo "E-mail ou nome de usuário já existem!";
							} else {}
						?>
					</p>
				</form>
			</div>
		</div>
	</body>
</html>
