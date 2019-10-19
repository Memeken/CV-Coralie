<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Liu+Jian+Mao+Cao&display=swap" rel="stylesheet"> <!-- police d'ecriture-->
	<title>cvCoco</title>
</head>
<body>
	<br>
	<br>
	<h1>CURRICULUM VITAE DAMERY CORALIE</h1>
	<br>
	<br>
	<nav>
		<ul class="menu"> <!-- Menu de navigation -->
			<li class="listeMenu"><a href="#" style="cursor:pointer;" onClick="gestion_menu('informations');">INFORMATIONS</a></li>
			<li class="listeMenu"><a href="#" style="cursor:pointer;" onClick="gestion_menu('emplois');">EMPLOIS</a></li>
			<li class="listeMenu"><a href="#">FORMATIONS</a></li>
			<li class="listeMenu"><a href="#">DOMAINES & APTITUDES</a></li>
			<li class="listeMenu"><a href="#">INTERETS</a></li>
		</ul>
	</nav>

<div id="informations" style="display:none"> <!-- appel de la fonction pour ouvrir le menu informations-->
	<?php include('Informations.php') ?>
</div>

<div id="emplois" style="display:none"> <!-- appel de la fonction pour ouvrir le menu emplois-->
	<?php include('emplois.php') ?>
</div>


<div id="translator_1810"> <!-- bouton de traduction -->
	<noscript>Javascript is disable - <a href="http://www.supportduweb.com/">http://www.supportduweb.com/</a> - <a href="http://www.supportduweb.com/generateur-boutons-traduction-translation-google-gratuit-html-code=script-boutons-traduire-page-web.html">Générateur de boutons de traduction</a>
	</noscript>
</div>

<script type="text/javascript" src="http://services.supportduweb.com/translator/1810-3-ynnnnnnnn.js"></script> <!-- bouton de traduction javascript-->

<script type="text/javascript">

function gestion_menu(id_box) { // fonction qui appelle le menu sur la même page
        chemin_box = document.getElementById(id_box);
        if(chemin_box.style.display == 'none') {
                chemin_box.style.display = 'block';
        } else {
                chemin_box.style.display = 'none';
        }
}
</script>

</body>
</html>