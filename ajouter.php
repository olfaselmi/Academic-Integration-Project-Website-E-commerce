<?PHP
include "../entities/livraison.php";
include "../core/livraisonC.php";


$sql="INSERT into livraison (id,idc,num,adr,date) values (:id,:idc,:num,:adr,:date)";
		echo"test";
		$db = config::getConnexion();
		try{
        $req = $db->prepare($sql);
	
		$req->bindValue(':id',$_POST['id']);
        $req->bindValue(':idc',$_POST['idc']);
        $req->bindValue(':num',$_POST['num']);
        $req->bindValue(':adr',$_POST['adr']);
        $req->bindValue(':date',$_POST['date']);

        $req->execute();
        header('Location: tri1.php');

        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }

?>