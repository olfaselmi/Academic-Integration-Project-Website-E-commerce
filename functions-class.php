<?PHP
include "../config-hamed.php";
include "../entities/var-publicity.php";
class publicityfc {
function afficherpublicity ($publicity){
		echo "theme: ".$publicity->gettheme()."<br>";
		echo "acteurs: ".$publicity->getacteurs()."<br>";
		echo "cout: ".$publicity->getcout()."<br>";
		echo "date: ".$publicity->getdat()."<br>";
		echo "per: ".$publicity->getper()."<br>";
	}
	function ajouterpublicity($publicity){
		$sql="insert into publicity (theme,acteurs,cout,date,per) values (:theme, :acteurs,:cout,:date,:per)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $theme=$publicity->gettheme();
        $acteurs=$publicity->getacteurs();
        $cout=$publicity->getcout();
        $date=$publicity->getdat();
        $per=$publicity->getper();
		$req->bindValue(':theme',$theme);
		$req->bindValue(':acteurs',$acteurs);
		$req->bindValue(':cout',$cout);
		$req->bindValue(':date',$date);
		$req->bindValue(':per',$per);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherpublicity2(){
		//$sql="SElECT * From publicity e inner join formationphp.publicity a on e.theme= a.theme";
		$sql="SElECT * From publicity";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function supprimerpublicity($theme){
		$sql="DELETE FROM publicity where theme= :theme";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':theme',$theme);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierpublicity($publicity,$theme){
		$sql="UPDATE publicity SET theme=:them, acteurs=:acteur,cout=:cou,date=:dat,per=:perr WHERE theme=:them";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$theme=$publicity->gettheme();
        $acteurs=$publicity->getacteurs();
        $cout=$publicity->getcout();
        $dat=$publicity->getdat();
        $per=$publicity->getper();
		$datas = array(':them'=>$theme, ':acteur'=>$acteurs,':cou'=>$cout,':dat'=>$dat,':perr'=>$per);
		$req->bindValue(':them',$theme);
		$req->bindValue(':acteur',$acteurs);
		$req->bindValue(':cou',$cout);
		$req->bindValue(':dat',$dat);
		$req->bindValue(':perr',$per);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererpublicity($theme){
		$sql="SELECT * from publicity where theme=$theme";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListepublicity($theme){
		$sql="SELECT * from publicity where theme=$theme";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function trierpublicity(){
		$sql="SELECT * from publicity  ORDER BY theme";
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