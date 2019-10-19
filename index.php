<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>

	<div class="connection">
		<form method="post"> <!-- formulaire de connexion-->
		<p>
			<input type="password" name="mot de passe" value="entrer mot de passe">
			<input type="submit" name="bouton" value="valider">
		</p>
		</form>
	</div>
		
	<p>
		<?php // condition pour se connecter
	 
			if($_POST['mot_de_passe']=="Memeken"){
	    		echo '<p>Vous êtes connecté !</p>';
	    		include('cvCoco.php');
			}

			elseif($_POST['mot_de_passe'] !="Memeken"){
	    		echo '<p>Le mot de passe est incorrect !</p>';
	    		echo '<img src="giphy.gif" alt="gandalf">';
			}
		?>
	</p>
	

</body>
</html>
