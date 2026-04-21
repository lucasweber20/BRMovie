<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../public/css/topbar.css">
		<title></title>
	</head>
	<body>
		<div class="row row-styled">
			<div class="col col-lg-6">
				<div class="row">
					<div class="col col-lg-1 col-texts" style="margin-left: 0.3vw;">
						<img id="img" src="public/img/logo.png" style="">
					</div>
					<div class="col col-lg-1 col-texts" style="margin-left: 1vw;">
						<p class="p-texts"><a href="?action=filmes" style="text-decoration: none; color: #ffffff;">Filmes</a></p>
					</div>
					<div class="col col-lg-1 col-texts">
						<p class="p-texts" style="margin-left: -0.5vw;"><a href="index.php?action=series" style="text-decoration: none; color: #ffffff;">Séries</a></p>
					</div>
					<div class="col col-lg-1 col-texts">
						<p class="p-texts dropGenero" onclick="showDropdownGenero()" style="margin-left: -1vw;">Gêneros</p>
					</div>
					<div class="col dropdown-content-genero" id="dropIdGenero" style="width: 12vw;">
						<div class="row">
							<?php if($_GET['action'] === "filmes" || $_GET['action'] === "pesquisarFilmes") {?>
								<div class="col col-genre">
									<a href="index.php?action=filmes&genero=acao" style="text-decoration: none; color: #000000;"><p class="p-text-genre">Ação</p></a>
									<a href="index.php?action=filmes&genero=aventura" style="text-decoration: none; color: #000000;"><p class="p-text-genre">Aventura</p></a>
									<a href="index.php?action=filmes&genero=suspense" style="text-decoration: none; color: #000000;"><p class="p-text-genre">Suspense</p></a>
									<a href="index.php?action=filmes&genero=comedia" style="text-decoration: none; color: #000000;"><p class="p-text-genre">Comédia</p></a>
									<a href="index.php?action=filmes&genero=terror" style="text-decoration: none; color: #000000;"><p class="p-text-genre">Terror</p></a>
								</div>
								<div class="col col-genre">
									<a href="index.php?action=filmes&genero=drama" style="text-decoration: none; color: #000000;"><p class="p-text-genre">Drama</p></a>
									<a href="index.php?action=filmes&genero=romance" style="text-decoration: none; color: #000000;"><p class="p-text-genre">Romance</p></a>
									<a href="index.php?action=filmes&genero=fantasia" style="text-decoration: none; color: #000000;"><p class="p-text-genre">Fantasia</p></a>
									<a href="index.php?action=filmes&genero=documentario" style="text-decoration: none; color: #000000;"><p class="p-text-genre">Documentários</p></a>
									<a href="index.php?action=filmes&genero=musical" style="text-decoration: none; color: #000000;"><p class="p-text-genre">Musical</p></a>
								</div>
							<?php } else {?>
								<div class="col col-genre">
									<a href="index.php?action=series&genero=acao" style="text-decoration: none; color: #000000;"><p class="p-text-genre">Ação</p></a>
									<a href="index.php?action=series&genero=aventura" style="text-decoration: none; color: #000000;"><p class="p-text-genre">Aventura</p></a>
									<a href="index.php?action=series&genero=suspense" style="text-decoration: none; color: #000000;"><p class="p-text-genre">Suspense</p></a>
									<a href="index.php?action=series&genero=comedia" style="text-decoration: none; color: #000000;"><p class="p-text-genre">Comédia</p></a>
									<a href="index.php?action=series&genero=terror" style="text-decoration: none; color: #000000;"><p class="p-text-genre">Terror</p></a>
								</div>
								<div class="col col-genre">
									<a href="index.php?action=series&genero=drama" style="text-decoration: none; color: #000000;"><p class="p-text-genre">Drama</p></a>
									<a href="index.php?action=series&genero=romance" style="text-decoration: none; color: #000000;"><p class="p-text-genre">Romance</p></a>
									<a href="index.php?action=series&genero=fantasia" style="text-decoration: none; color: #000000;"><p class="p-text-genre">Fantasia</p></a>
									<a href="index.php?action=series&genero=documentario" style="text-decoration: none; color: #000000;"><p class="p-text-genre">Documentários</p></a>
									<a href="index.php?action=series&genero=musical" style="text-decoration: none; color: #000000;"><p class="p-text-genre">Musical</p></a>
								</div>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
			<div class="col col-lg-6">
				<div class="row" style="float: right;">
					<div class="col col-lg-6 col-texts">
						<p class="p-texts" style="margin-left: 1vw;"><a href="index.php?action=registrar" style="text-decoration: none; color: #ffffff;">Registrar</a></p>
					</div>
					<div class="col col-lg-6 col-texts">
						<p class="p-texts"><a href="?action=login" style="text-decoration: none;  color: #ffffff;">Login</a></p>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>

<script>
	function showDropdownGenero() {
		document.getElementById("dropIdGenero").classList.toggle("show");
	}

	window.addEventListener('click', function(event) {
        if (!event.target.closest(".dropGenero") && !event.target.closest(".dropdown-content-genero")) {
            var dropdowns = document.getElementsByClassName("dropdown-content-genero");
            for (var counter = 0; counter < dropdowns.length; counter++) {
                var openDropdown = dropdowns[counter];
                if (openDropdown.classList.contains("show")) {
                    openDropdown.classList.remove("show");
                }
            }
        }
    });
</script>