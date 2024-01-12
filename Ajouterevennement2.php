<!DOCTYPE html>
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
    <link rel="stylesheet" href="css/styleback.css">   
    
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <script language="javascript" type="text/javascript" src="animation.js"></script>
  </head>
  <body>
  <div class="wrapper2">
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

  <div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="site-logo">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              <form action="" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="text" class="form-control border-0" placeholder="Search">
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
                <a href="homepage.html" class="js-logo-clone">Reviewers</a>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                  <li><a href="#"><span class="icon icon-person"></span></a></li>
                  <li><a href="#"><span class="icon icon-heart-o"></span></a></li>
                  <li>
                    <a href="viewCart.php" class="site-cart">
                      <span class="icon icon-shopping_cart"></span>
                      <span class="count">2</span>
                    </a>
                  </li> 
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
              </div> 
            </div>

          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="site-section2">
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
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li>
              <a href="homepage.html"><h4>Deconnexion</h4></a>
            </li>
            <li>
            <a href="choose table client.html"><h4>Page Client</h4></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>


    <form method="POST">
    <table>
      <div class="container">
        <div class="signup-content">
      <caption><b>Add Event</b></caption>
      <tr>
      <td>Numéro</td>
      <td><input type="number" name="numbers" id="numbers" required></td>
      </tr>
      <tr>
      <td>Date</td>
      <td><input type="date" name="date" id="date" required></td>
      </tr>
      <tr>
      <td>Occasion</td>
      <td><input type="text" name="oc" id="oc" required placeholder="occasion?"></td>
      </tr>
      <tr>
      <td>Pack's quantity</td>
      <td><input type="number" name="packs" id="packs" required placeholder="pack qt?"></td>
      </tr>
      <tr>
      <td></td>
      <td><button class="btn btn-primary btn-sm" name="ajouter" id="ajouter" onclick="check2()"> ajouter</button></td>
      </tr>
      </div></div>
      </table>
    </form>
          <?PHP


include "../core/functions-class2.php";

$erreur=0;

if(isset($_POST['ajouter']))
{
    
    if (!isset($_POST['numbers']) and !isset($_POST['date']) and !isset($_POST['oc']) and !isset($_POST['packs']))
    {
        $erreur=0;
    }
        $ev1=new eventfc();
        $listeev=$ev1->afficherevent2();
        foreach($listeev as $row){
            if($row['numbers'] == $_POST['numbers'])
            {
                $erreur=2;
            }
        }
    if(($_POST['packs'] < 0) || ($_POST['packs'] > 4))
    {
        $erreur=1;
    }
    if(($_POST['oc'] != "annivairsaire") && ($_POST['oc'] != "marriage"))
    {
        $erreur=1;
    }
}

if (isset($_POST['numbers']) and isset($_POST['date']) and isset($_POST['oc']) and isset($_POST['packs']) and ($erreur == 0))
{

  $nb=$_POST['numbers'];
	$date=$_POST['date'];
	$oc=$_POST['oc'];
	$pack=$_POST['packs'];

$event1=new eventvar($nb,$date,$oc,$pack);
$event2=new eventfc();
$event2->ajouterevent($event1);
?> <h2> <?PHP echo "Votre evennement est ajouté! Cliquer sur (Continue) pour choisir vos packs!";?> </h2> <?PHP
?>	
<?PHP
}if($erreur == 1){
    ?> <h2> <?PHP 	echo "verifier les champs,il y a un erreur!"; ?> </h2> <?PHP
}
if($erreur == 2)
{
    ?> <h2> <?PHP 	echo "Erreur2:Evennement est deja reservee!"; ?> </h2> <?PHP 
}
?>


        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6">
                  <form method="POST" action="calculateprice.html">
                <button class="btn btn-outline-primary btn-sm btn-block">Continue</button>
                    </form>  
            </div>
            </div>
           
          </div>
         
        </div>
      </div>
    </div>

    
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
</div> 
  </body>
</html>