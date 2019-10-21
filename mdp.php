<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MDP</title>
</head>
<body>
	<?php
	    if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] == "Memeken") // Si le mot de passe est bon
	    {
	       	header('Location: cvCoco.php');// On est redirigé vers la page cvCoco.php
		}else{
	        header ('Location: false.php');// Sinon, on affiche la page false.php
	    }
    ?>
</body>
</html>