<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>

<?PHP
include "../../core/ProduitCore.php";
$produit1C=new ProduitCore();
$listeProduits=$produit1C->afficherProduits();
?>

<body>




    <div class="container">
		<div class="jumbotron">
			<!-----------------------------------------la recherche starts here---------------------------------------------->

    	        <?PHP

                    if(isset($_POST['recherche']))
                    {
                       $motAchercher = $_POST['motAchercher'];
                       $listeProduits=$produit1C->rechercherProduits($motAchercher);
                    }
                    else 
                    {
	                   $listeProduits=$produit1C->afficherProduits();
                    }
                ?>
                <form method="POST" action="" > 
                  <input type='text' name='motAchercher' placeholder="Recherche..."> 
                  <input type='submit' value='recherche' name="recherche" class="btn btn-outline-warning badge-pill"> 
                </form>
            <!-----------------------------------------la recherche ends here---------------------------------------------->
	    <div class="card">
        <div class="card-header">
          <a href="index.php?gestcategorie" class="btn btn-outline-success badge-pill">+ Ajouter un nouveau produit</a>
        </div>
      
        <div class="card-body">
          <h3 class="card-title" align="center">Affichage des Produits</h3>



          <table  border="1" class="table table-dark table-hover table-bordered">
            <thead>
              <tr>
               <th scope="col">Id produit</th>
               <th scope="col">Image produit</th>
               <th scope="col">Nom produit</th>
               <th scope="col">Prix produit</th>
               <th scope="col">Qt produit</th>
               <th scope="col">Nom categorie</th>
               <th scope="col">Supprimer produit</th>
               <th scope="col">Modifier produit</th>
              </tr>
            </thead>
              <tbody>

  	            <?PHP
                foreach($listeProduits as $row){
	              ?>
	                <tr>
	                 <td><?PHP echo $row['id_produit']; ?></td>
	                 <td><?PHP echo $row['image_produit']; ?></td>
	                 <td><?PHP echo $row['nom_produit']; ?></td>
	                 <td><?PHP echo $row['prix_produit']; ?></td>
	                 <td><?PHP echo $row['qt_produit']; ?></td>
	                 <td><?PHP echo $row['nom_categorie']; ?></td>
	                 <td>
	                   	<form method="POST" action="supprimerProduit.php">
	                      <input class="btn btn-danger badge-pill" type="submit" name="supprimer" value="supprimer">
	                      <input type="hidden" value="<?PHP echo $row['id_produit']; ?>" name="id">
	                    </form>
	                  </td>
	                  <td>
	        	          <a class="btn btn-primary badge-pill" href="modifierProduit.php?id=<?PHP echo $row['id_produit']; ?>">Modifier</a>
                    </td>
	                </tr>
                <?PHP
                }
                ?>
              </tbody>
          </table>




        </div>
      </div>		
	 </div>	
	</div>
</body>
</html>






