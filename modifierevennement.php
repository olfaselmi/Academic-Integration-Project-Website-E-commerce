<!Doctype html>
<html lang="en">
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
    <script language="javascript" type="text/javascript" src="animation.js"></script>
  </head>

<body>
<?PHP 
include "../core/functions-class2.php";
if (isset($_GET['numbers'])){

    $eventfun=new eventfc();
    $result=$eventfun->recupererevent($_GET['numbers']);
	foreach($result as $row){
      $num=$row['numbers'];
		  $date=$row['date'];
		  $oc=$row['occasion'];
      $packs=$row['packs'];
    
?>
<center>
<form method="POST">
<table>
<caption><b>Modifier Evennement</b></caption>
<tr>
<th>Numéro</th>
<th class="product-thumbnail"><input type="number" name="numbers" id="numbers" required></th>
</tr>
<tr>
<th>Date</th>
<th class="product-thumbnail"><input type="date" name="date" id="date" required></th>
</tr>
<tr>
<th>Occasion</th>
<th class="product-name"><input type="text" name="occasion" id="occasion" required placeholder="occasion?"></th>
</tr>
<tr>
<th>Packs</th>
<th class="product-price"><input type="number" name="packs" id="packs" required placeholder="pack?"></th>
</tr>
<tr>
<th></th>
<th><input  class="btn btn-primary btn-sm" type="submit" name="modifier" value="modifier" onclick="check2()"></th>
</tr>
<tr>
<th></th>
<th><input type="hidden" name="num_ini" value="<?PHP echo $_GET['numbers']; ?>"></th>
</tr>
</table>
</form>
</center>
<?PHP
}
}
else
{
    echo "Besoin d'un evennement pour le modifier!";
}
if (isset($_POST['modifier'])){
  	$evvar=new eventvar($_POST['numbers'],$_POST['date'],$_POST['occasion'],$_POST['packs']);
	  $eventfun->modifierevent($evvar,$_POST['num_ini']);
	  echo $_POST['num_ini'];
	  header('Location: afficherevennement.php');
}
?>
</body>
</HTML>