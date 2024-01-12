<?PHP
include "../config1-hamed.php";
include "../entities/var-event.php";
class eventfc {
function afficherevent ($event){
		echo "numbers: ".$event->getnb()."<br>";
		echo "date: ".$event->getdat()."<br>";
		echo "oc: ".$event->getoc()."<br>";
		echo "packs: ".$event->getpack()."<br>";
	}
	function ajouterevent($event){
		$sql="insert into event (numbers,date,occasion,packs) values (:nb,:dat,:oc,:pac)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
		$nb=$event->getnb();
        $date=$event->getdat();
        $oc=$event->getoc();
		$pack=$event->getpack();
		$req->bindValue(':nb',$nb);
		$req->bindValue(':dat',$date);
		$req->bindValue(':oc',$oc);
		$req->bindValue(':pac',$pack);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherevent2(){
		//$sql="SElECT * From event e inner join formationphp.event a on e.date= a.date";
		$sql="SElECT * From event";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function supprimerevent($nb){
		$sql="DELETE FROM event where numbers= :nb";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nb',$nb);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierevent($event,$nb){
		$sql="UPDATE event SET numbers=:nb,date=:dat,occasion=:occ,packs=:pc WHERE numbers=$nb";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $oc=$event->getoc();
        $pack=$event->getpack();
        $dat=$event->getdat();
		$datas = array(':nb'=>$nb, ':dat'=>$dat, ':occ'=>$oc,':pc'=>$pack);
		$req->bindValue(':nb',$nb);
		$req->bindValue(':dat',$dat);
		$req->bindValue(':occ',$oc);
		$req->bindValue(':pc',$pack);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($nb);
        }
		
	}
	function recupererevent($nb){
		$sql="SELECT * from event where numbers=$nb";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeevent($nb){
		$sql="SELECT * from event where numbers=$nb";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function trierevent(){
		$sql="SELECT * from event  ORDER BY numbers";
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