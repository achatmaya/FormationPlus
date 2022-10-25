<h2> Liste des Etudiants </h2>
<form method="post" action="">
	Mot de recherche : <input type="text" name="mot">
	<input type="submit" name="Rechercher" value="Rechercher">
</form>
<br/>
<table border="1">
	<tr>
		<td> Id Etudiant </td> <td> Nom </td> <td> Prénom </td>
		<td> mail </td> <td> </td> <td> Nom convention </td>
		<td> Opérations </td>
	</tr>
	<?php
	foreach ($lesEtudiants as $unEtudiant) {
		echo "<tr>"; 
		echo "  <td>" . $unEtudiant['idEtudiant'] . "</td> 
				<td>" . $unEtudiant['nom'] . "</td> 
				<td>" . $unEtudiant['prenom'] . "</td> 
				<td>" . $unEtudiant['mail'] . "</td> 
				<td>" . $unEtudiant['classe'] . "</td> ";
		echo "
		<td> 
		<a href='index.php?page=3&action=sup&idetudiant=".$unEtudiant['idetudiant']."'>

		<a href='index.php?page=3&action=edit&idetudiant=".$unEtudiant['idetudiant']."'>
		</td>
		"; 
		echo "</tr>";
	}
	?>

</table>
