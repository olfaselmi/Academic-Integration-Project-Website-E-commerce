<?PHP
include "../../core/CategorieCore.php";
$categorieC=new CategorieCore();
if (isset($_POST["idCa"])){
	$categorieC->supprimerCategorie($_POST["idCa"]);
	header('Location: afficherCategorie.php');
}

?>