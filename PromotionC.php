<?PHP
include_once "../../config-fatma.php";
class PromotionC {
function afficherPromotion1 ($Promotion){
		echo "idpromo: ".$promotion->getpromo()."<br>";
		echo "nompromo: ".$promotion->getnompromo()."<br>";
		echo "datedebut: ".$promotion->getdatedebut()."<br>";
		echo "pourcentage: ".$promotion->getpourcentage()."<br>";
		echo "datefin: ".$promotion->getdatefin()."<br>";
	}


	public function afficherPromotion()
    {
        $c=config::getConnexion();
         if(isset($_POST['trier']))

     {
        $valeselected =$_POST['order'];
        $sql = "SELECT * FROM promotion order by $valeselected " ;
        return $result = $c->query($sql);

	 }
	else if(isset($_POST['search']))
{ 
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $sql = "SELECT * FROM promotion WHERE CONCAT(idpromo, nompromo, datedebut, pourcentage,datefin) LIKE '%".$valueToSearch."%'";
     return $result=$c->query($sql)   ; 
}
    else 
     {
        $sql = "SELECT * FROM promotion ";
        return $result = $c->query($sql);

     }
     

}


	function ajouterPromotion($Promotion){
		$sql="insert into Promotion (idpromo,nompromo,datedebut,pourcentage,datefin) values (:idpromo, :nompromo,:datedebut,:pourcentage,:datefin)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $idpromo=$Promotion->getidpromo();
        $nompromo=$Promotion->getnompromo();
        $datedebut=$Promotion->getdatedebut();
        $pourcentage=$Promotion->getpourcentage();
		$datefin=$Promotion->getdatefin();
		$req->bindValue(':idpromo',$idpromo);
		$req->bindValue(':nompromo',$nompromo);
		$req->bindValue(':datedebut',$datedebut);
		$req->bindValue(':pourcentage',$pourcentage);
		$req->bindValue(':datefin',$datefin);

            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherPromotions(){
		//$sql="SElECT * From Promotion e inner join formationphp.Promotion a on e.idpromo= a.idpromo";
		$sql="SElECT * From Promotion";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerPromotion($idpromo){
		$sql="DELETE FROM Promotion where idpromo= :idpromo";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idpromo',$idpromo);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierPromotion($Promotion,$idpromo){
		$sql="UPDATE Promotion SET nompromo=:nompromo,datedebut=:datedebut,pourcentage=:pourcentage,datefin=:datefin WHERE idpromo=:idpromo";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idpromon=$Promotion->getidpromo();
        $nompromo=$Promotion->getnompromo();
        $datedebut=$Promotion->getdatedebut();
        $pourcentage=$Promotion->getpourcentage();
		$datefin=$Promotion->getdatefin();
		$datas = array(':idpromo'=>$idpromo, ':nompromo'=>$nompromo,':datedebut'=>$datedebut,':pourcentage'=>$pourcentage,':datefin'=>$datefin );
		$req->bindValue(':idpromo',$idpromo);
		$req->bindValue(':nompromo',$nompromo);
		$req->bindValue(':datedebut',$datedebut);
		$req->bindValue(':pourcentage',$pourcentage);
		$req->bindValue(':datefin',$datefin);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererPromotion($idpromo){
		$sql="SELECT * from Promotion where idpromo=$idpromo";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListePromotions($tarif){
		$sql="SELECT * from Promotion where datefin=$tarif";
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