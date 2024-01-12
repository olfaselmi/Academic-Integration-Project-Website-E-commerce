<!Doctype html>
<script>
    function redirect()
    {
        var test=confirm('Vous voulez retournez à la page précédante?');
        if(test == true)
        {
            window.location="back event.html";
        }
        else
        {
            alert('D accord!');
        }
    }
</script>
<head>
<title>Tri evennement </title>
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
    <script language="javascript" type="text/javascript" src="animationmetier.js"></script>
</head>
<div class="wrapper">
    <div class="box">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
  </div>
<table border="1"  class="table table-bordered">
	<thead>
<tr>
<th class="product-thumbnail">Numéro d evennement</th>
<th class="product-thumbnail">date</th>
<th class="product-thumbnail">occasion</th>
<th class="product-thumbnail">Quantite du pack</th>
</tr>

<?PHP

include "../core/functions-class2.php";
$event1=new eventfc();
$listeevent=$event1->trierevent();

foreach($listeevent as $row){
	
	?>
	<tr>
    <th class="product-name"><?PHP echo $row['numbers']; ?></th>
	<th class="product-thumbnail"><?PHP echo $row['date']; ?></th>
	<th class="product-name"><?PHP echo $row['occasion']; ?></th>
    <th class="product-name"><?PHP echo $row['packs']; ?></th>
	</tr>
	<?PHP
}
?>
<tr>
<th class="product-thumbnail">packs</td>
<th class="product-name">Name</th>
<th class="product-price">Price</th>
<th class="product-quantity">Quantity</th>
    <th class="product-total">Total</th>
</tr>
<?PHP

include "../core/functions-class3.php";
$pack1=new packfc();
$listepack=$pack1->trierpack();


foreach($listepack as $row){

?>
<tr>
<th class="product-thumbnail"><?PHP echo $row['resultat1']; ?></th>
<th class="product-name"><?PHP echo $row['resultat2']; ?></th>
<th class="product-price"><?PHP echo $row['resultat3']; ?></th>
<th class="product-quantity"><?PHP echo $row['resultat4']; ?></th>
    <th class="product-total"><?PHP echo $row['resultattot']; ?></th>
</tr>
<?PHP
}
?>
<thead>
</table>
<center>
<input  class="btn btn-primary btn-sm"  type="submit" value="ENTER" id='enter' onclick="redirect()">
</center>
</div>