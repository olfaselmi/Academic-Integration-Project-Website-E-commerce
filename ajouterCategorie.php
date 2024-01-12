<?PHP
include "../../entities/categorie.php";
include "../../core/CategorieCore.php";

if (isset($_POST['idCa']) and isset($_POST['nomCa']))
{
    $categorie1=new Categorie($_POST['idCa'],$_POST['nomCa']);
    //Partie2
 /*   
    var_dump($categorie1);
}
*/
    

    //Partie3

    $categorie1C=new CategorieCore();
    $categorie1C->ajouterCategorie($categorie1);
    header('Location: afficherCategorie.php');	
}
else
{
   echo "vérifier les champs";
}
//*/
?>