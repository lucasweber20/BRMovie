<?php
	require_once "models/user.php";

	class AuthController {
		public function login() {
			if($_SERVER["REQUEST_METHOD"] == "POST") {
				$email = $_POST["email"];
				$pass = $_POST["password"];

				$user = User::findEmail($email);
				if($user && password_verify($pass, $user['password'])) {
					session_start();

					$_SESSION["usuario_id"] = $user["id"];

					header("Location: index.php?action=filmes");
				} else {
					header("Location: index.php?action=login&error=form+error");
				}
			} else{
				include "views/login.php";
			}
		}
	}

?>