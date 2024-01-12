<!DOCTYPE html>
<script>
    function redirect()
    {
        var test=confirm('Vous voulez retournez à la page précédante?');
        if(test == true)
        {
            window.location="../views/homepage.html";
        }
        else
        {
            alert('D accord!');
        }
    }
</script>
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
    
</head>
<?php

if(isset($_POST['connexion']))
{
    if(($_POST['email'] == "hamed.zayet@esprit.tn") and ($_POST['password'] == "castaside"))
    {
        header('Location: http://localhost/Integration/views/choose%20table%20admin.html');
    }
    if(($_POST['email'] == "olfa.selmi@esprit.tn") and ($_POST['password'] == "olfa"))
    {
        header('Location: http://localhost/Integration/views/afficherlivraison.php');
    }
    if(($_POST['email'] == "other@esprit.tn") and ($_POST['password'] == "cast"))
    {
        header('Location: http://localhost/Integration/views/choose%20table%20client.html');
    }
    else
    {
        echo "Verifier vos champs!";
    }
}

?>
<center>
<input  class="btn btn-primary btn-sm"  type="submit" value="RETOUR" id='enter' onclick="redirect()">
</center>