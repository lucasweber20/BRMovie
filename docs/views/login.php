<?php 
	include "partials/topbar.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
		<title>Login</title>
		<style type="text/css">
			<?php 
				include "public/css/topbar.css";
				include "public/css/login.css";
				include "../public/css/topbar.css";
				include "../public/css/login.css";
			?>
		</style>
	</head>
	<body>
		<div class="row">
			<div class="col col-form">
				<h1 style="width: 63%; text-align: center; margin-top: 1vh; margin-left: 2.6vw;">Login</h1>
				<form action="index.php?action=login" method="POST">
					<p style="margin: 0;">E-mail</p>
					<input type="text" name="email" class="form-control" style="width: 100%;" required>
					<p style="margin: 0;">Senha</p>
					<input type="password" name="password" class="form-control" style="width: 100%;" required>
					<div class="col">
						<button type="submit" class="btn btn-login" style="margin-right: -1.5vw;">Login</button>
						<a href="?action=registrar" style="text-decoration: none; color: #000000; display: inline-block; width: 6vw; margin-left: 2vw;">
							<button type="button" class="btn btn-login" style="width: 6vw; margin-left: 0vw">Cadastre-se</button>
						</a>
					</div>
					<p style="color: #de4035; white-space: nowrap; margin-left: 2.9vw;">
						<?php
							if(isset($_GET['error'])) {
								echo "Credenciais incorretas!";
							} else {}
						?>
					</p>
				</form>
			</div>
		</div>
	</body>
</html>