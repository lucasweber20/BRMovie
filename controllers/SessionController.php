<?php
	
	class SessionController {
		public function verifySession() {
			session_start();

			if($_GET['action'] == "filmes") {
				if(isset($_SESSION['usuario_id'])) {
					include "views/filmes.php";
				} else {
					header("Location: index.php?action=login");
				}
			} else if ($_GET['action'] == "series") {
				if(isset($_SESSION['usuario_id'])) {
					include "views/series.php";
				} else {
					header("Location: index.php?action=login");
				}
			} else if($_GET['action'] == "perfil") {
				if(isset($_SESSION['usuario_id'])) {
					include "views/perfil.php";
				} else {
					header("Location: index.php?action=login");
				}
			} else if ($_GET['action'] == "series") {
				if(isset($_SESSION['usuario_id'])) {
					include "views/series.php";
				} else {
					header("Location: index.php?action=login");
				}
			}
		}
	}

?>