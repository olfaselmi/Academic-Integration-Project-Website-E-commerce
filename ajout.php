<?PHP
include "../../entities/produit.php";
include "../../core/ProduitCore.php";

if (isset($_POST['id']) and isset($_POST['image']) and isset($_POST['nom']) and isset($_POST['prix']) and isset($_POST['qt']) and isset($_POST['nomCa']))
{
    $produit1=new produit($_POST['id'],$_POST['image'],$_POST['nom'],$_POST['prix'],$_POST['qt'],$_POST['nomCa']);
    //Partie2
    /*
    var_dump($produit1);
    }
    */

    //Partie3

    $produit1C=new ProduitCore();
    $produit1C->ajouterProduit($produit1);
    header('Location: afficherProduit.php');	

    echo"<script>alert('Product has been inserted!') </script>";
    
}
else
{
   echo "vérifier les champs";
}
//*/
?>