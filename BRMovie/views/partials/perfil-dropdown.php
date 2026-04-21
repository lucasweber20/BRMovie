<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style type="text/css">
			<?php 
				include "public/css/topbar.css";
				include "public/css/filmes.css";
				include "public/css/perfil-dropdown.css";
			?>
		</style>
	</head>
	<body>
		<div class="row row-perfil">
			<div class="col col-lg-1 profile">
				<svg class="dropIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" width="40" height="40" fill="#474747" onclick="showDropdown()">
					<path class="dropIcon" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512l388.6 0c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304l-91.4 0z"/>
				</svg>
				<div class="dropdown-content" id="dropId">
					<p class="p-filmes" style="padding: 1vh;"><a href="?action=perfil" style="text-decoration: none; color: #000000;">Perfil</a></p>
					<p class="p-filmes" style="padding: 1vh; color: #f72020;"><a href="?action=logout" style="text-decoration: none; color: #f72020;">Sair</a></p>
				</div>
			</div>
		</div>
	</body>
</html>

<script>
	function showDropdown() {
		document.getElementById("dropId").classList.toggle("show");
	}

	window.onclick = function(event) {
	  if (!event.target.closest('.dropIcon') && !event.target.closest('dropdown-content')) {
	    var dropdowns = document.getElementsByClassName("dropdown-content");
	    var i;
	    for (i = 0; i < dropdowns.length; i++) {
	      var openDropdown = dropdowns[i];
	      if (openDropdown.classList.contains('show')) {
	        openDropdown.classList.remove('show');
	      }
	    }
	  }
	}
</script>