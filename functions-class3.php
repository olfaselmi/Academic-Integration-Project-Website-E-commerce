<?PHP
include "../config2-hamed.php";
include "../entities/var-packs.php";
class packfc {

	function ajouterpack($packs){
		$sql="insert into packs (resultat1,resultat2,resultat3,resultat4,resultattot) values (:r1,:r2,:r3,:r4,:rtot)";
		$db = config1::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $r1=$packs->getresultat1();
        $r2=$packs->getresultat2();
        $r3=$packs->getresultat3();
		$r4=$packs->getresultat4();
		$rtot=$packs->getresultattot();
		$req->bindValue(':r1',$r1);
		$req->bindValue(':r2',$r2);
        $req->bindValue(':r3',$r3);
        $req->bindValue(':r4',$r4);
        $req->bindValue(':rtot',$rtot);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
    }
    
	function afficherpack2(){
		//$sql="SElECT * From event e inner join formationphp.event a on e.date= a.date";
		$sql="SElECT * From packs";
		$db = config1::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function supprimerpack($resultat){
		$sql="DELETE FROM packs where resultat1= :r1";
		$db = config1::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':r1',$resultat);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierpack($packs,$resultat){
		$sql="UPDATE packs SET resultat1=:r1,resultat2=:r2,resultat3=:r3,resultat4=:r4,resultattot=:rtot WHERE resultat1=$resultat";
		
		$db = config1::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $r1=$packs->getresultat1();
        $r2=$packs->getresultat2();
        $r3=$packs->getresultat3();
        $r4=$packs->getresultat4();
        $rtot=$packs->getresultattot();
		$datas = array(':r1'=>$r1, ':r2'=>$r2,':r3'=>$r3,':r4'=>$r4,':rtot'=>$rtot);
		$req->bindValue(':r1',$r1);
		$req->bindValue(':r2',$r2);
        $req->bindValue(':r3',$r3);
        $req->bindValue(':r4',$r4);
        $req->bindValue(':rtot',$rtot);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererpack($resultat){
		$sql="SELECT * from packs where resultat1=$resultat";
		$db = config1::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListepack($resultat){
		$sql="SELECT * from packs where resultat1=$resultat";
		$db = config1::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function trierpack(){
		$sql="SELECT * from packs  ORDER BY resultat1";
		$db = config1::getConnexion();
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