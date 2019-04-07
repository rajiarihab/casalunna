<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/fidelite.php";
include "../core/fideliteC.php";
if (isset($_GET['code'])){
	$fideliteC=new EmployeC();
    $result=$fideliteC->recupererFidelite($_GET['code']);
	foreach($result as $row){
		$cin=$row['code'];
		$nom=$row['cin'];
		$prenom=$row['id_commande'];
		$nbH=$row['reduction'];
?>
<form method="POST">
<table>
<caption>Modifier Fidelite</caption>
<tr>
<td>CODE</td>
<td><input type="number" name="code" value="<?PHP echo $code ?>"></td>
</tr>
<tr>
<td>CIN</td>
<td><input type="number" name="cin" value="<?PHP echo $cin ?>"></td>
</tr>
<tr>
<td>Identifiant Commande</td>
<td><input type="number" name="id_commande" value="<?PHP echo $id_commande ?>"></td>
</tr>
<tr>
<td>Reduction</td>
<td><input type="number" name="reduction" value="<?PHP echo $reduction ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="code_ini" value="<?PHP echo $_GET['code'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$fidelite=new fidelite($_POST['code'],$_POST['cin'],$_POST['id_commande'],$_POST['reduction']);
	$fideliteC->modifierFidelite($fidelite,$_POST['code_ini']);
	echo $_POST['code_ini'];
	header('Location: afficherFidelite.php');
}
?>
</body>
</HTMl>