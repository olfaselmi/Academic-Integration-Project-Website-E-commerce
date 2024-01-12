<?php
include "../config-olfa.php";

class livraisonC
{
	
    function ajouterlivraison($e){ 
		$sql="insert into livraison (id,idc,num,adr,date) values (:id,:idc,:num,:adr,:date)";
        $db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $id=$e->getid();
        $idc=$e->getidc();
        $date=$e->getdate();
        $req->bindValue(':id',$id);
        $req->bindValue(':idc',$idc);
        $req->bindValue(':num',$num);
        $req->bindValue(':adr',$adr);
		$req->bindValue(':date',$date);
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
    public function afficherlivraison($id)
    { 

    	$c=config::getConnexion();
    	$sql = "SELECT * FROM livraison where (id=$id)";

 return $result = $c->query($sql);

}
public function afficherlivraisons()
    {
    	$c=config::getConnexion();
    	$sql = "SELECT * FROM livraison";

 return $result = $c->query($sql);

}
public function supprimer($id)	
{
    $c=config::getConnexion();
    $sql = "DELETE  FROM `livraison` WHERE `id`=:id";

    $req= $c->prepare($sql);
    $req->bindValue(':id',$id);
$req->execute();

}
function rechercherlivraison($rech){
    $sql="SELECT id,idc,num,adr from livraison
    where id LIKE '%$rech%' OR idc LIKE '%$rech'";
         
    $db = config::getConnexion();
    try{
    $liste=$db->query($sql);
    return $liste;
    }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
    }
    function triid(){
        $sql="SELECT * FROM livraison ORDER BY date "; // 5-->1 desc
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
