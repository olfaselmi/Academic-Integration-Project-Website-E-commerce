<?PHP
include "../../entities/Promotion.php";
include "../../core/PromotionC.php";

if (isset($_POST['idpromo']) and isset($_POST['nompromo']) and isset($_POST['datedebut']) and isset($_POST['pourcentage']) and isset($_POST['datefin'])){ 
	if( $_POST['pourcentage']>=0 and $_POST['pourcentage']<=100)
	{
		if(strtotime($_POST['datefin']) >= strtotime($_POST['datedebut']))
		{

		
$Promotion1=new Promotion($_POST['idpromo'],$_POST['nompromo'],$_POST['datedebut'],$_POST['pourcentage'],$_POST['datefin']);
//Partie2
/*
var_dump($Promotion1);
}
*/
//Partie3
$Promotion1C=new PromotionC();
$Promotion1C->ajouterPromotion($Promotion1);
header('Location: tables-advanced promotions et Publictés');
}
}	
}else{
	echo "vérifier les champs";
}
//*/

?>