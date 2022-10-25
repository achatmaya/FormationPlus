<h2> Insertion d'une convention </h2>

<form method="post" action="">
	<table>
		<tr>
			<td> Nom de la convention </td>
			<td> <input type="text" name="nomConvention" 
			value="<?php if($laConvention!=null) echo $laConvention['nomConvention']; ?>"></td>
		</tr>
		<tr>
			<td> nombres d'heures </td>
			<td> <input type="text" name="nbHeures" 
			value="<?php if($laConvention!=null) echo $laConvention['nbHeures']; ?>">
			</td>
		</tr>
		<tr>
			<td> <input type="reset" name="Annuler" value="Annuler"> </td>
			<td> <input type="submit" 
				<?php if ($laConvention != null) echo " name ='Modifier' value='Modifier'"; else echo " name='Valider' value='Valider'"; 
				?>
				>
			</td>
		</tr>
	</table>
</form>
