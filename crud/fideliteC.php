<?PHP
include "../config.php";
class fideliteC {
function afficherFidelite ($fidelite){
		echo "code: ".$fidelite->getCode()."<br>";
		echo "Cin: ".$fidelite->getCin()."<br>";
		echo "Commande N°: ".$fidelite->getId_commande()."<br>";
		echo "Reduction: ".$fidelite->getReduction()."<br>";
	}
	/*function calculerSalaire($employe){
		echo $employe->getNbHeures() * $employe->getTarifHoraire();
	}*/
	function ajouterFidelite($fidelite){
		$sql="insert into fidelite (code,cin,id_commande,reduction) values (:code, :cin,:id_commande,:reduction)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $code=$fidelite->getCode();
        $cin=$fidelite->getCin();
        $id_commande=$fidelite->getId_commande();
        $reduction=$fidelite->getReduction();
		
		$req->bindValue(':code',$code);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':id_commande',$id_commande);
		$req->bindValue(':reduction',$reduction);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherEmployes(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From fidelite";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerFidelite($code){
		$sql="DELETE FROM fidelite where code= :code";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Code',$code);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierFidelite($fidelite,$code){
		$sql="UPDATE fidelite SET code=:code, cin=:cin, id_commande=:id_commande,reduction=:reduction, WHERE code=:code";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $code=$fidelite->getCode();
  		$cin=$fidelite->getCin();
        $id_commande=$fidelite->getId_commande();
        $nb=$fidelite->getReduction();
		$datas = array(':code'=>$code, ':cin'=>$cin, ':id_commande'=>$id_commande,':reduction'=>$reduction);
		$req->bindValue(':code',$code);
		$req->bindValue(':cin',$cin);
		$req->bindValue(':id_commande',$id_commande);
		$req->bindValue(':reduction',$reduction);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererfidelite($code){
		$sql="SELECT * from fidelite where code=$code";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeFidelite($reduction){
		$sql="SELECT * from fidelite where reduction=$reduction";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>