
  <?PHP
include "../../config-fatma.php";
class carteC {
function affichercarte1 ($carte){
    echo "num: ".$carte->getnum()."<br>";
    echo "points: ".$compte->getpoints()."<br>";
    echo "cinclient: ".$compte->getcinclient()."<br>";
    }

  function ajoutercarte($cartecarte){
    $sql="insert into carte (num,points,cinclient) values (:num, :points,:cinclient)";
    $db = config::getConnexion();
    try{
        $req=$db->prepare($sql);
    
        $num=$carte->getnum();
        $points=$carte->getpoints();
        $cinclient=$carte->getcinclient();
    
    $req->bindValue(':num',$num);
    $req->bindValue(':points',$points);
    $req->bindValue(':cinclient',$cinclient);
    
    
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    
  }
  
  function supprimercarte($num){
    $sql="DELETE FROM carte where num= :num";
    $db = config::getConnexion();
        $req=$db->prepare($sql);
    $req->bindValue(':num',$num);
    try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  }
  function modifiercarte($carte,$numm){
    $sql="UPDATE carte SET num=:numm, points=:points,cinclient=:cinclient WHERE num=:num";
    
    $db = config::getConnexion();
    //$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{    
        $req=$db->prepare($sql);
        $numm=$carte->getnum();
        $points=$carte->getpoints();
        $cinclient=$carte->getcinclient();
       
    $datas = array(':numm'=>$numm, ':num'=>$num, ':points'=>$points,':cinclients'=>$cinclients);
    $req->bindValue(':numm',$numm);
    $req->bindValue(':points',$points);
    $req->bindValue(':cinclient',$cinclient);
    
    
            $s=$req->execute();
      
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
    
  }

public function affichercarte()
    {
        $sql="SELECT * From carte ";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste ;
        }
        catch (Exception $e)
        {
            die('Erreur; '.$e->getMessage());
        }

    }
}
?>