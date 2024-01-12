<!Doctype html>
<script>
    function redirect()
    {
        var test=confirm('Vous voulez retournez à la page précédante?');
        if(test == true)
        {
            window.location="front event.html";
        }
        else
        {
            alert('D accord!');
        }
    }
</script>
<head>
<title>Reviewers &mdash; Event Template</title>
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

include "../core/functions-class2.php";
$event1=new eventfc();
$listeevent=$event1->rechercherListeevent($_POST['numbers']);

foreach($listeevent as $row){
	//if($row['date'] == $listeevent){
	?>
	<table border="1">
<tr>
<th class="product-thumbnail">date</th>
<th class="product-thumbnail">occasion</th>
<th class="product-thumbnail">packs</th>
<th class="product-thumbnail">Numéro</th>
<th class="product-thumbnail">supprimer</th>
<th class="product-thumbnail">Editer</th>
</tr>
	<tr>
	<th class="product-thumbnail"><?PHP echo $row['date']; ?></th>
	<th class="product-thumbnail"><?PHP echo $row['occasion']; ?></th>
	<th class="product-thumbnail"><?PHP echo $row['packs']; ?></th>
	<th class="product-thumbnail"><?PHP echo $row['numbers']; ?></th>
	<td><form method="POST" action="supprimerevennement2.php">
	<input  class="btn btn-primary btn-sm"  type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['numbers']; ?>" name="numbers">
	</form>
	</td>
	<th class="product-thumbnail"><form method="GET" action="modifierevennement.php">
	<input  class="btn btn-primary btn-sm"  type="submit" name="modifier" value="modifier">
	<input class="product-thumbnail" type="hidden" value="<?PHP echo $row['numbers']; ?>" name="numbers">
	</form>
	</th>
	</tr>
    <?PHP
   // }
}
?>
</table>
<center>
<input  class="btn btn-primary btn-sm"  type="submit" value="ENTER" id='enter' onclick="redirect()">
</center>

