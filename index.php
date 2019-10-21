<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>Page d'accueil</title>
</head>
<body>
	<div class="connection">
		<form action="mdp.php" method="post"> <!-- formulaire de connexion sur la page mdp qui va rediriger si le mdp est bon ou pas -->
		<p>	<!--<input type="password" name="mot de passe" > -->
			<label for="pass">Password:</label>
    		<input type="password" name="mot_de_passe">
			<input type="submit" value="valider">
		</p>
		</form>
	</div>
</body>
</html>