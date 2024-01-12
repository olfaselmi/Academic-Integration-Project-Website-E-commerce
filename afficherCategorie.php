<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>

<?PHP
include "../../core/CategorieCore.php";
$categorie1C=new CategorieCore();
$listeCategories=$categorie1C->afficherCategories();
?>

<body>


	<div class="container">
		<div class="jumbotron">
	    <div class="card">
        <div class="card-header">
          <a href="index.php?gestcategorie" class="btn btn-outline-success badge-pill">+ Ajouter une nouvelle categorie</a>
        </div>
      
        <div class="card-body">
          <h3 class="card-title" align="center">Affichage des categories</h3>



          <table  border="1" class="table table-dark table-hover table-bordered">
            <thead>
              <tr>
               <th scope="col">Id categorie</th>
               <th scope="col">Nom categorie</th>
               <th scope="col">Supprimer categorie</th>
               <th scope="col">Modifier categorie</th>
              </tr>
            </thead>
              <tbody>

  	            <?PHP
                foreach($listeCategories as $row){
	              ?>
	                <tr>
	                 <td><?PHP echo $row['id_categorie']; ?></td>
	                 <td><?PHP echo $row['nom_categorie']; ?></td>
	                 <td>
	                   	<form method="POST" action="supprimerCategorie.php">
	                      <input class="btn btn-danger badge-pill" type="submit" name="supprimer" value="supprimer">
	                      <input type="hidden" value="<?PHP echo $row['id_categorie']; ?>" name="idCa">
	                    </form>
	                  </td>
	                  <td>
	        	          <a class="btn btn-primary badge-pill" href="modifierCategorie.php?idCa=<?PHP echo $row['id_categorie']; ?>">Modifier</a>
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


