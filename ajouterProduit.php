<HTML>
<head>
  <script language="javascript">

    function verif(){

    }

  </script>
</head>


<?PHP

include "../../Core/CategorieCore.php";
$categorieC=new CategorieCore();
$listeCategories=$categorieC->afficherCategories();
?>



<body>
<form method="POST" action="ajout.php" >
<table align="center" width="750" border="2" bgcolor="#B0C4DE">
<caption><h1>Ajouter Produit</h1></caption>
<tr align="center">
<td>Id</td>
<td><input type="number" name="id" required></td>
</tr>
<tr align="center">
<td>Image</td>
<td><input type="file" name="image" required></td>
</tr>
<tr align="center">
<td>Nom</td>
<td><input type="text" name="nom" required></td>
</tr>
<tr align="center">
<td>Prix</td>
<td><input type="number" name="prix" required></td>
</tr>
<tr align="center">
<td>Quantite</td>
<td><input type="number" name="qt" required></td>
</tr>




<tr align="center">
<td>Categorie</td>
<td><select name="nomCa">
	<option>Select a category</option>

   <?PHP
    foreach($listeCategories as $row){ 
   ?>
	<option value="<?PHP echo $row['nom_categorie']; ?>">
		<?PHP echo $row['nom_categorie']; ?>
	</option>
    <?PHP } ?>

    </select>
</td>
</tr>





<tr align="center">
<td></td>
<td><input onclick="popUp1()" type="submit" name="ajouter" value="ajouter">
</td>
</tr>

  <script>
  	function popUp1(){
  		alert("Vous confirmez ?");
  	}
  </script>

</table>
</form>
</body>
</HTMl>






