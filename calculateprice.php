<!Doctype html>
<script>
    function redirect()
    {
        var test=confirm('Vous voulez retournez à la page précédante?');
        if(test == true)
        {
            window.location="Ajouterevennement2.php";
        }
        else
        {
            alert('D accord!');
        }
    }
</script>
<head>
<title>Calculate price </title>
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
<?php
include "../core/functions-class3.php";

if (isset($_POST['resultat1-1']) and isset($_POST['resultat2-1']) and isset($_POST['resultat3-1']) and isset($_POST['resultat4-1'])
 and isset($_POST['resultattot-1'])){

    $resultat1=$_POST['resultat1-1'];
    $resultat2=$_POST['resultat2-1'];
    $resultat3=$_POST['resultat3-1'];
    $resultat4=$_POST['resultat4-1'];
    $resultattot=$_POST['resultattot-1'];
	

$packs1=new packvar($resultat1,$resultat2,$resultat3,$resultat4,$resultattot);
$packs2=new packfc();
$packs2->ajouterpack($packs1);
echo "Vos packs sont demandés!";
}
else
echo "Vérifier vos champs!";
?>
<center>
<input  class="btn btn-primary btn-sm"  type="submit" value="ENTER" id='enter' onclick="redirect()">
</center>