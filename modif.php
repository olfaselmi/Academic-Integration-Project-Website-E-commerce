<?PHP

include "../../entities/produit.php";
include "../../core/ProduitCore.php";

    $produitC=new ProduitCore();
    $result=$produitC->recupererProduit($_GET['nom']);
$listeProduit=$produitC->getAllProduit();
$c=$result->fetchAll();
    foreach($c as $row){}

 
if (isset($_POST['modifier'])){


    $produit=new produit($_POST['id'],$_POST['image'],$_POST['nom'],$_POST['prix'],$_POST['qt'],$_POST['nomCa']);
    $produitC2 = new ProduitCore();
    $produitC2->modifierProduit($produit,$_POST['id_ini']);
    echo $_POST['id_ini'];
    header('Location: afficherProduit.php');
     //echo $result;
		
}
else
{
   echo "vérifier les champs";
}
?>