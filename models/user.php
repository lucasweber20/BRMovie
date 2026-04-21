<?php
	include_once "models/database.php";

	class User {

		// Login usuario
		public static function findEmail($email) {
			$conn = Database::conectarBanco();
			$stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
			$stmt->execute(['email' => $email]);
			return $stmt->fetch(PDO::FETCH_ASSOC);
		}

		// Criar usuario
		public static function criarUsuario($dados) {
			$conn = Database::conectarBanco();
			$stmt = $conn->prepare("SELECT * FROM users WHERE email = ? OR username = ?");
			$stmt->execute(array($dados['email'], $dados['nome']));
			if ( $stmt->rowCount() > 0) {
				return false;
			} else {
				$stmt = $conn->prepare("INSERT INTO users (email, username, password) VALUES (:email, :nome, :senha)");
				$stmt->execute($dados);
				return true;
			}
		}

		public static function uploadImagem($caminhoImagem) {
			$conn = Database::conectarBanco();
			session_start();
			$stmt = $conn->prepare("UPDATE users SET image = ? WHERE id = ?");
			$stmt->execute(array($caminhoImagem, $_SESSION['usuario_id']));
		}

		public static function atualizarSenha($senhaNova) {
			$conn = Database::conectarBanco();
			session_start();
			$stmt = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
			$stmt->execute(array($senhaNova, $_SESSION['usuario_id']));
			return true;
		}

		public static function atualizarEmail($emailNovo) {
			$conn = Database::conectarBanco();
			session_start();
			$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
			$stmt->execute(array($emailNovo));
			if ( $stmt->rowCount() > 0 ) {
				return false;
			} else {
				$stmt = $conn->prepare("UPDATE users SET email = ? WHERE id = ?");
				$stmt->execute(array($emailNovo, $_SESSION['usuario_id']));
				return true;
			}
		}
	}
?>