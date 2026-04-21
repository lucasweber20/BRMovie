<?php
	class Database {
		private static $instance;

		public static function conectarBanco() {

			if(!self::$instance) {
				$host = "localhost";
				$db = "brmovie";
				$username = "root";
				$password = "";

				self::$instance = new PDO("mysql:host=$host;dbname=$db", $username, $password);

				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			return self::$instance;
		}
	}
?>