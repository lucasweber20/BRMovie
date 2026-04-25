<?php
	require 'controllers/AuthController.php';
	require 'controllers/UserController.php';
	require 'controllers/SessionController.php';
	require 'controllers/SearchController.php';
	require 'controllers/VideosController.php';

	$authController = new AuthController();
	$userController = new UserController();
	$sessionController = new SessionController();
	$searchController = new Search();
	$VideosController = new SelectVideos;

	$action = $_GET['action'] ?? 'filmes';

	switch ($action) {
		case 'login':
			$authController->login();
			break;
		case 'registrar':
			$userController->registrar();
			break;
		case 'filmes':
			$searchController->pesquisarConteudoFilmes();
			break;
		case 'pesquisarFilmes':
			$searchController->pesquisarConteudoFilmes();
			break;
		case 'perfil':
			$sessionController->verifySession();
			break;
		case 'uploadImagem':
			$userController->uploadImagem();
			break;
		case 'logout':
			$userController->logoutUsuario();
			break;
		case 'series':
			$searchController->pesquisarConteudoSeries();
			break;
		case 'alterarSenha':
			$userController->alterarSenha();
			break;
		case 'alterarEmail':
			$userController->alterarEmail();
			break;
		case 'pesquisarSeries':
			$searchController->pesquisarConteudoSeries();
			break;
		case 'detalhesVideo':
			$VideosController->selecionarVideo();
			break;
	}
?>