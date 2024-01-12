<?PHP
//require_once "config.php";
include "../../config-fatma.php";
class ClientC {
function afficherClient ($client){
		echo "Id_clt: ".$client->getidC()."<br>";
		echo "Nom: ".$client->getNom()."<br>";
		echo "Prenom: ".$client->getPrenom()."<br>";
		echo "numero: ".$client->gettelephone()."<br>";
		echo "Email: ".$client->getmail()."<br>";
		echo "Adresse: ".$client->getadressC()."<br>";
		echo "code postal: ".$client->getcodepostal()."<br>";
		echo "Password: ".$client->getpassword()."<br>";
		echo "anniv: ".$client->getanniv()."<br>";
	}	
	function ajouterClient($client){
		$sql="insert into client (Id_clt,Nom,Prenom,Adresse,Password,codepostal,numero,Email,anniv) values (:Id_clt,:Nom,:Prenom,:Adresse,:Password,:codepostal,:numero,:Email,:anniv)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $Id_clt=$client->getidC();
        $Nom=$client->getNom();
        $Prenom=$client->getPrenom();
        $numero=$client->gettelephone();
        $Email=$client->getmail();
        $Adresse=$client->getadressC();
		$Password=$client->getpassword();
		$codepostal=$client->getcodepostal();
		$anniv=$client->getanniv();
		$req->bindValue(':Id_clt',$Id_clt);
		$req->bindValue(':Nom',$Nom);
		$req->bindValue(':Prenom',$Prenom);
		$req->bindValue(':numero',$numero);
		$req->bindValue(':Email',$Email);
		$req->bindValue(':Adresse',$Adresse);
		$req->bindValue(':Password',$Password);
		$req->bindValue(':codepostal',$codepostal);
		$req->bindValue(':anniv',$anniv);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	public function afficherclients(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.idC= a.idC";
		$sql="SElECT * From client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerclient($idC){
		$sql="DELETE FROM client where idC= :idC";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idC',$idC);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierclient($client,$idC){
		$sql="UPDATE client SET Password=:Password  WHERE Id_clt=:Id_clt";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idC=$client->getidC();
        $password=$client->getpassword();	
		$req->bindValue(':Id_clt',$idC);
		$req->bindValue(':Password',$password);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
        }		
	}
	function recupererclient($mail){
		$sql="SELECT * from client where Id_clt=$mail";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeclients($prenom){
		$sql="SELECT * from client where prenomC=$prenom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function getAllClients()
{
    $sql = "SELECT * From client";
    $db = config::getConnexion();
    try {
        $liste = $db->query($sql);
        return $liste;
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    }
}

}
?>