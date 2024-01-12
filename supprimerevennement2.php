<!Doctype html>
<head>
<title>M&A Shoes </title>
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
    <script language="javascript" type="text/javascript" src="animation1.js"></script>   
</head>
<?PHP
include "../core/functions-class2.php";
if(isset($_POST['supprimer']))
{
$evfc=new eventfc();
	$evfc->supprimerevent($_POST["numbers"]);
	echo "Votre evennement a ete supprime!";
?>
<form method="POST" action="front event.html">
<input  class="btn btn-primary btn-sm" type="submit" name="Retour" value="Retour">
</form>
<?PHP
}
else
{
	echo "Besoin d'un evennement pour la supprimer!";
}
?>