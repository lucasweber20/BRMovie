<?php
	require_once "models/user.php";

	class UserController {

		public function registrar() {
			$erro_email = null;

			if($_SERVER["REQUEST_METHOD"] == "POST") {
				$dados = [
					"email" => $_POST["email"],
					"nome"	=> $_POST["username"],
					"senha" => password_hash($_POST["password"], PASSWORD_DEFAULT)
				];

				$funcaoCriarUsuario = User::criarUsuario($dados);

				if ($funcaoCriarUsuario) {
					header("Location: index.php");
				} else {
					header("Location: index.php?action=registrar&error=form+error");
				}
			} else {
				include "views/registrar.php";
			}
		}

		public function uploadImagem() {
			if (isset($_FILES['image'])) {
				move_uploaded_file($_FILES['image']['tmp_name'], "./public/img/perfis/".$_FILES['image']["name"]);
				$caminhoImagem = "public/img/perfis/".$_FILES['image']["name"];
				$funcaoUploadImagem = User::uploadImagem($caminhoImagem);
				header("Location:  index.php?action=perfil");
			} else {
				include "views/perfil.php";
			}
		}

		public function logoutUsuario(){
			session_start();

			$_SESSION = array();

			if(ini_get("session.use_cookies")) {
				$params = session_get_cookie_params();
				setcookie(session_name(), '', time() - 42000,
		        	$params["path"], $params["domain"],
		        	$params["secure"], $params["httponly"]
		    	);
			};

			session_destroy();

			header("Location: index.php?action=login");
		}

		public function alterarSenha() {
			$senhaNova = password_hash($_POST['updPassword'], PASSWORD_DEFAULT);

			$atualizarSenha = User::atualizarSenha($senhaNova);

			if($atualizarSenha) {
				header("Location: index.php?action=perfil&successPassUpdt=password+updated");
			} else {
				include "views/perfil.php";
			}
		}

		public function alterarEmail() {
			if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
				$emailNovo = $_POST['updEmail'];

				$atualizarEmail = User::atualizarEmail($emailNovo);

				if($atualizarEmail) {
					header("Location: index.php?action=perfil&successEmailUpdt=email+updated");
				} else {
					header("Location: index.php?action=perfil&error=email+error");
				}
			} else {
				include "views/perfil.php";
			}
		}
	}

?>