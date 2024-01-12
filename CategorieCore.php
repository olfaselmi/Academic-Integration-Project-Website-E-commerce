<?PHP
include "../../config.php";
class CategorieCore {
    function afficher_categorie ($categorie){
		echo "Id de categorie: ".$categorie->getIdCategorie()."<br>";
		echo "Nom de categorie: ".$categorie->getNomCategorie()."<br>";
	}
	function ajouterCategorie($categoriecategorie){
		$sql="insert into categorie (id_categorie,nom_categorie) values (:idCa, :nomCa)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $idCa=$categoriecategorie->getIdCategorie();
        $nomCa=$categoriecategorie->getNomCategorie();
		$req->bindValue(':idCa',$idCa);
		$req->bindValue(':nomCa',$nomCa);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }	
	}
	function afficherCategories(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerCategorie($idCa){
		$sql="DELETE FROM categorie where id_categorie= :idCa";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idCa',$idCa);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	function modifierCategorie($categorie,$idc){
		$sql="UPDATE categorie SET id_categorie=:idd, nom_categorie=:nom WHERE id_categorie=:idc";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
		$idd=$categorie->getIdCategorie();
        $nom=$categorie->getNomCategorie();
        
		$datas = array(':idd'=>$idd, ':idc'=>$idc, ':nom'=>$nom);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':idc',$idc);
		$req->bindValue(':nom',$nom);

            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	function recupererCategorie($idCa){
		$sql="SElECT * From categorie where id_categorie=$idCa";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeCategories($nomCa){
		$sql="SElECT * From categorie where nom_categorie=$nomCa"; 
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

function getAllCategorie(){
		$sql="SElECT * From categorie";
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