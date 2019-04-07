<?PHP
include "../core/fideliteC.php";
$fideliteC=new FideliteC();
if (isset($_POST["code"])){
	$fideliteC->supprimerFidelite($_POST["code"]);
	header('Location: afficherFidelite.php');
}

?>