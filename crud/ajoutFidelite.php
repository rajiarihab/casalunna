<?PHP
include "../entities/fidelite.php";
include "../core/fideliteC.php";

if (isset($_POST['code']) and isset($_POST['cin']) and isset($_POST['id_commande']) and isset($_POST['reduction']) and i){
$fidelite1=new fidelite($_POST['code'],$_POST['cin'],$_POST['id_commande'],$_POST['reduction']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$fidelite1C=new FideliteC();
$fidelite1C->ajouterFidelite($fidelite);
header('Location: afficherFidelite.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>