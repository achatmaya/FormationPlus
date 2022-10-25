<h2> Insertion d'un Etudiant </h2>

<form method="post" action="">
	<table>
		<tr>
			<td> Nom Etudiant </td>
			<td> <input type="text" name="nom"></td>
		</tr>
		<tr>
			<td> Prénom Etudiant </td>
			<td> <input type="text" name="prenom"></td>
		</tr>
		<tr>
			<td> Email</td>
			<td> <input type="text" name="mail"></td>
		</tr>
		<tr>
			<td> Convention de l'Etudiant</td>
			<td> 
				<select name ="idConvention">
					<?php
					foreach ($lesConventions as $uneConvention) {
					echo "<option value='".$uneConvention['idConvention']."'>".$uneConvention['nomConvention']."</option>";
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td> <input type="reset" name="Annuler" value="Annuler"> </td>
			<td> <input type="submit" name="Valider" value="Valider"></td>
		</tr>
	</table>
</form>
