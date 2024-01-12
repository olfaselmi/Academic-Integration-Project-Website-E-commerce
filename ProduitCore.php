<?PHP
include "../../config.php";
class ProduitCore {
	function ajouterProduit($produitproduit){
		$sql="insert into produit (id_produit,image_produit,nom_produit,prix_produit,qt_produit,nom_categorie) values (:id,:image,:nom,:prix,:qt,:nomCa)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$produitproduit->getIdProduit();
        $image=$produitproduit->getImageProduit();
        $nom=$produitproduit->getNomProduit();
        $prix=$produitproduit->getPrixProduit();
        $qt=$produitproduit->getQtProduit();
        $nomCa=$produitproduit->getNomCategorie();
   
		$req->bindValue(':id',$id);
		$req->bindValue(':image',$image);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':qt',$qt);
		$req->bindValue(':nomCa',$nomCa);

		    $req->execute();
		    
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
	function afficherProduits(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From produit";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerProduit($id){
		$sql="DELETE FROM produit where id_produit= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	function modifierProduit($produit,$idp){
		$sql="UPDATE produit SET id_produit=:idd, image_produit=:image, nom_produit=:nom, prix_produit=:prix, qt_produit=qt, nom_categorie=nomCa WHERE id_produit=:idp";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
		$idd=$produit->getIdProduit();
		$image=$produit->getImageProduit();
        $nom=$produit->getNomProduit();
        $prix=$produit->getPrixProduit();
        $qt=$produit->getQtProduit();
        $nomCa=$produit->getNomCategorie();
        
		$datas = array(':idd'=>$idd, ':idp'=>$idp, ':image'=>$image, ':nom'=>$nom, ':prix'=>$prix, ':qt'=>$qt, ':nomCa'=>$nomCa);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':idp',$idp);
		$req->bindValue(':image',$image);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':qt',$qt);
		$req->bindValue(':nomCa',$nomCa);

            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	function recupererProduit($nom){
		$sql="SELECT * from produit where nom_produit=$nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeProduits($nom){
		$sql="SELECT * from produit where nom_produit=$nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

    function getAllProduit(){
		$sql="SElECT * From produit inner join categorie on produit.nom_categorie=categorie.nom_categorie";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}


	function rechercherProduits($motAchercher){
		$sql="SElECT * FROM produit WHERE CONCAT(id_produit,`image_produit`,`nom_produit`, prix_produit,`nom_categorie`) LIKE '%".$motAchercher."%'";
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