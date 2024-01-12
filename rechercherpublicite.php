<!Doctype html>
<head>
<title>Reviewers &mdash; Publicity Template</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
        <link rel="stylesheet" href="fonts/icomoon/style.css">
    
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
      
    
        <link rel="stylesheet" href="css/aos.css">
    
		<link rel="stylesheet" href="css/style.css">
		
    
		<link rel="stylesheet" href="css/details.css">   
        
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>

<?PHP

include "../core/functions-class.php";
$pub1=new publicityfc();
$listepub=$pub1-> rechercherListepublicity($_POST['theme']);
$test=0;

foreach($listepub as $row){
	//if($row['date'] == $listeevent){
		$test=1;
	?>
	<table border="1">
<tr>
<th class="product-thumbnail">theme</th>
<th class="product-thumbnail">acteurs</th>
<th class="product-thumbnail">cout</th>
<th class="product-thumbnail">date</th>
<th class="product-thumbnail">Percentage de reussite</th>
<th class="product-thumbnail">supprimer</th>
<th class="product-thumbnail">Editer</th>
</tr>
	<tr>
	<th class="product-thumbnail"><?PHP echo $row['theme']; ?></th>
	<th class="product-thumbnail"><?PHP echo $row['acteurs']; ?></th>
	<th class="product-thumbnail"><?PHP echo $row['cout']; ?></th>
	<th class="product-thumbnail"><?PHP echo $row['date']; ?></th>
	<td><?PHP echo $row['per']; ?></td>
	<th class="product-thumbnail"><form method="POST" action="supprimerpublicite.php">
	<input  class="btn btn-primary btn-sm" type="submit" name="supprimer" value="supprimer">
	<input class="product-thumbnail" type="hidden" value="<?PHP echo $row['theme']; ?>" name="theme">
	</form>
	</th>
	<th class="product-name"><form method="GET" action="modifierpublicite.php">
	<input  class="btn btn-primary btn-sm" type="submit" name="modifier" value="modifier">
	<input class="product-name" type="hidden" value="<?PHP echo $row['theme']; ?>" name="theme">
	</form>
	</th>
	</tr>
    <?PHP
   // }
}
if($test == 0)
{
	echo "Publicité introuvable!";
}
?>
</table>

