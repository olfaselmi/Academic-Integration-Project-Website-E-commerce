<?PHP
include "../../core/ProduitCore.php";
$produitC=new ProduitCore();
if (isset($_POST["id"])){
	$produitC->supprimerProduit($_POST["id"]);
	header('Location: afficherProduit.php');
}

?>