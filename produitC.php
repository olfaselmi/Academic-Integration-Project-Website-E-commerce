<?php
require_once "../../config-fatma.php";
class ProduitC
{
	
    
    public function ajouterProduit($e)
    {
        $sql = "INSERT INTO produit (referance,nom,prix,code_barre,categorie,quantite,img,typ) VALUES (:referance,:nom,:prix,:code_barre,:categorie,:quantite,:img,:typ)";
        $db = config::getConnexion();
        try{
            $req=$db->prepare($sql);
        $referance=$e->getRef();
    	$nom=$e->getNom();
    	$prix=$e->getPrix();
    	$code_barre=$e->getCode();
    	$quantite=$e->getQuant();
        $categorie=$e->getCat();
        $img=$e->getImg();
        $typ=$e->gettyp();
        $req->bindValue(':referance',$referance);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prix',$prix);
        $req->bindValue(':code_barre',$code_barre);
        $req->bindValue(':quantite',$quantite);
        $req->bindValue(':categorie',$categorie);
        $req->bindValue(':img',$img);
        $req->bindValue(':typ',$typ);
        $req->execute();

        }
        catch (Exception $k){
            echo 'Erreur: '.$k->getMessage();

        }

    	



    }
    public function afficherProduit()
    {
        $c=config::getConnexion();
         if(isset($_POST['trier']))

     {
        $valeselected =$_POST['order'];
        $sql = "SELECT * FROM produit order by $valeselected " ;
        return $result = $c->query($sql);

     }
    else 
     {
        $sql = "SELECT * FROM produit ";
        return $result = $c->query($sql);

     }
     

}
public function afficherenfant()
{$c=config::getConnexion();
    if(isset($_POST['trier']))

    {
       $valeselected =$_POST['order'];
       $sql = "SELECT * FROM produit where typ=1 order by $valeselected " ;
       return $result = $c->query($sql);

    }
       else{
        $sql ="SELECT * FROM produit where typ=1";
    return $result = $c->query($sql);}
}public function afficherfemme()
{$c=config::getConnexion();
        
       
    if(isset($_POST['trier']))

    {
       $valeselected =$_POST['order'];
       $sql = "SELECT * FROM produit where typ=3 order by $valeselected " ;
       return $result = $c->query($sql);

    }
       else{
        $sql ="SELECT * FROM produit where typ=3";
    return $result = $c->query($sql);}
}public function afficherhomme()
{$c=config::getConnexion();
        
       
    if(isset($_POST['trier']))

    {
       $valeselected =$_POST['order'];
       $sql = "SELECT * FROM produit where typ=2 order by $valeselected " ;
       return $result = $c->query($sql);

    }
       else{
        $sql ="SELECT * FROM produit where typ=2";
    return $result = $c->query($sql);}
}
public function afficherUnProduit()
    {
        
      $sql = "SELECT * FROM produit ";
 $c=config::getConnexion();
   $result = $c->query($sql);
       

 return $result ;
   
       
}
public function RecupererProduit($referance){
		$sql="SELECT * from Produit where (referance=$referance)";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
function getre()
{
    $c=config::getConnexion();
        $sql = "SELECT * FROM produit";

 return $result = $c->query($sql);

}
 public function supprimerProduit($referance)	
 {
 	$c=config::getConnexion();
 	$sql = "DELETE  FROM `produit` WHERE `referance`=:referance";

     $req= $c->prepare($sql);
 	$req->bindValue(':referance',$referance);
$req->execute();

 }
 function modifierProduit($e){
        $sql="UPDATE produit SET referance=:referance, nom=:nom,prix=:prix,code_barre=:code_barre,categorie=:categorie,quantite=:quantite,typ=:typ WHERE referance=:referance";
        
        $db = config::getConnexion();
        //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{        
        $req=$db->prepare($sql);
     $referance=$e->getRef();
        $nom=$e->getNom();
        $prix=$e->getPrix();
        $code_barre=$e->getCode();
        $quantite=$e->getQuant();
        $categorie=$e->getCat();
        $img=$e->getImg();
        $typ=$e->gettyp();

        $datas = array(':referance'=>$referance, ':referance'=>$referance, ':nom'=>$nom,':prix'=>$prix,':code_barre'=>$code_barre,':quantite'=>$quantite,':categorie'=>$categorie,':img'=>$img,':typ'=>$typ);
        $req->bindValue(':referance',$referance);
        $req->bindValue(':referance',$referance);
        $req->bindValue(':nom',$nom);
        $req->bindValue(':prix',$prix);
        $req->bindValue(':code_barre',$code_barre);
        $req->bindValue(':quantite',$quantite);
        $req->bindValue(':categorie',$categorie);
        $req->bindValue(':img',$img);
        $req->bindValue(':typ',$typ);

        
            $s=$req->execute();
            
           
        }
        catch (Exception $z){
            echo " Erreur ! ".$z->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }
}

?>
