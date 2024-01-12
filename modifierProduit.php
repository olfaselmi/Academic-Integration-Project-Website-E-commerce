<?PHP



include "../../core/CategorieCore.php";
$categorieC=new CategorieCore();
$listeCategories=$categorieC->afficherCategories();




?>
<HTML>
<head>
</head>
<body>
<form method="POST" action="ajout.php">
<table>
<caption>Modifier Produit</caption>

<tr>
<td>Id produit</td>
<td><input type="number" name="id" value="<?PHP echo $_GET['id']; ?>"></td>
</tr>

<td>Image produit</td>
<td><input type="file" name="image" value="<?PHP echo $_GET['image']; ?>"></td>
</tr>

<td>Nom produit</td>
<td><input type="text" name="nom" value="<?PHP echo $row['nom']; ?>"></td>
</tr>

<td>Prix produit</td>
<td><input type="number" name="prix" value="<?PHP echo $_GET['prix']; ?>"></td>
</tr>

<td>Quantite produit</td>
<td><input type="number" name="qt" value="<?PHP echo $_GET['qt']; ?>"></td>
</tr>




<tr>
<td>Categorie</td>
<td><select name="nomCa">

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




<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>

<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id']; ?>"> </td>
</tr>
</table>
</form>

<!------------------->

</body>
</HTMl>