<?php
	require_once("controleur/config_bdd.php"); 
	require_once("controleur/controleur.class.php");
	$unControleur = new Controleur ($serveur, $bdd, $user, $mdp); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Gestion des conventions </title>
</head>
<body>
<center>
	<h1> Gestion des attestation</h1>

	<?php
		echo '
	<a href="index.php?page=0">
	</a>
	<a href="index.php?page=1">
	</a>
	<a href="index.php?page=2">
	</a>
	<a href="index.php?page=3">
	</a>
	<a href="index.php?page=5">
			<img src="images/deconnexion.jpg" height="100" width="100">
	</a>
	'; 
	
	if (isset ($_GET['page'])) $page = $_GET['page']; 
		else $page = 0; 
		switch($page)
		{
			case 0 : require_once ("home.php") ; break; 
			case 1 : require_once ("gestion_convetion.php") ; break; 
			case 2 : require_once ("getion_etudiant.php") ; break; 
			case 3 : require_once ("gestion_attestation.php") ; break; 
				header("Location: index.php");
				break; 
		}
	?>
</center>
</body>
</html>
