<?PHP
include "../core/fideliteC.php";
$fidelite1C=new fideliteC();
$listeFidelite=$fidelite1C->afficherFidelite();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Code</td>
<td>CIN</td>
<td>Id_commande</td>
<td>Reduction</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeFidelite as $row){
	?>
	<tr>
	<td><?PHP echo $row['code']; ?></td>
	<td><?PHP echo $row['cin']; ?></td>
	<td><?PHP echo $row['id_commande']; ?></td>
	<td><?PHP echo $row['reduction']; ?></td>
	<td><form method="POST" action="supprimerFidelite.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['code']; ?>" name="code">
	</form>
	</td>
	<td><a href="modifierFidelite.php?code=<?PHP echo $row['code']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


