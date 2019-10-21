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
			<li class="listeMenu"><a href="?information">INFORMATIONS</a></li>
			<li class="listeMenu"><a href="?emplois">EMPLOIS</a></li>
			<li class="listeMenu"><a href="?formations">FORMATIONS</a></li>
			<li class="listeMenu"><a href="?domaines">DOMAINES & APTITUDES</a></li>
			<li class="listeMenu"><a href="?interets">INTERETS</a></li>
		</ul>
	</nav>

<div> <!-- appel de la fonction pour ouvrir le menu informations-->
	<?php  
		if (isset($_GET['information'])) {
			include('Informations.php');
		}
		if (isset($_GET['emplois'])) {
			include('emplois.php');
		}
		if (isset($_GET['formations'])) {
			include('formations.php');
		}
		if (isset($_GET['domaines'])) {
			include('domaines.php');
		}
		if (isset($_GET['interets'])) {
			include('interets.php');
		} 
	?>
</div>
<!--<div id="translator_1810"> bouton de traduction 
	<noscript>Javascript is disable - <a href="http://www.supportduweb.com/">http://www.supportduweb.com/</a> - <a href="http://www.supportduweb.com/generateur-boutons-traduction-translation-google-gratuit-html-code=script-boutons-traduire-page-web.html">Générateur de boutons de traduction</a>
	</noscript>
</div>-

<script type="text/javascript" src="http://services.supportduweb.com/translator/1810-3-ynnnnnnnn.js"></script> <!-- bouton de traduction javascript-->

<!--<script type="text/javascript"> -->
</body>
</html>