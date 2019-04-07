<?PHP
include "../entities/fidelite.php";
include "../core/fideliteC.php";
$fidelite=new Fidelite(001,'05023610','542',0.1,);
$fideliteC=new fideliteC();
$fideliteC->afficherFidelite($fidelite);
echo "****************";
echo "<br>";
echo "code:".$fidelite->getCode();
echo "<br>";
echo "cin:".$fidelite->getCin();
echo "<br>";
echo "id_commabde:".$fidelite->getId_commande();
echo "<br>";
echo "reduction:".$fidelite->getReduction();
echo "<br>";
/*echo "le salaire est : ";
$employerC->calculerSalaire($employe); 
echo "<br>";*/


?>