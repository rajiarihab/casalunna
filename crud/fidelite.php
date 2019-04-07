<?PHP
class fidelite{
	private $code;
	private $cin;
	private $id_commande;
	private $reduction;
	function __construct($cin,$nom,$prenom,$tarif,$nb){
		$this->code=$code;
		$this->cin=$cin;
		$this->id_commande=$id_commande;
		$this->reduction=$reduction;
	}
	
	
	function getCode(){
		return $this->code;
	}
	function getCin(){
		return $this->cin;
	}
	function getId_commande(){
		return $this->id_commande;
	}
	function getReduction(){
		return $this->reduction;
	}
	

	function setCin($cin){
		$this->cin=$cin;
	}
	function setId_commande($id_commande){
		$this->id_commande;
	}
	function setReduction($reduction){
		$this->reduction=$reduction;
	}
	
	
}

?>