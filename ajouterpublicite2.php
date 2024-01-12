<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="css/styleback.css">  
    
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <script language="javascript" type="text/javascript" src="animation1.js"></script>
  </head>
  <body>
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

    <div class="site-wrap">
        <header class="site-navbar" role="banner">
          <div class="agileits_header">
            <div class="container">
              <div class="row align-items-center">
    
                <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                  <form action="" class="site-block-top-search">
                    <input type="text" class="w3l_search" placeholder="Search">
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
        <div class="logo_products">
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
              <a href="homepage.html">Déconnexion</a>
            </li>
            <li class="has-children">
              <a href="choose table admin.html">Page Administrateur</a>
            </li>
            
          </ul>
        </div>
      </nav>
    </header>


    <form method="POST">
    <table>
      <div class="site-section">
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
        <div class="signup-content">
      <caption><b>Add Publicity</b></caption>
      <tr>
      <td>Theme</td>
      <td><input type="number" name="theme" id="theme" required placeholder="Theme?"></td>
      </tr>
      <tr>
      <td>Acteurs</td>
      <td><input type="text" name="acteurs" id="acteurs" required placeholder="Acteurs?"></td>
      </tr>
      <tr>
        <td>Cout</td>
        <td><input type="number" name="cout" id="cout" required placeholder="Cout?"></td>
        </tr>
      <tr>
        <td>Date</td>
        <td><input type="date" name="date" id="date" required></td>
        </tr>
        <tr>
            <td>Percentage</td>
            <td><input type="number" name="per" id="per" required placeholder="Percentage?"></td>
            </tr>
      <tr>
      <td></td>
      <td><button class="btn btn-primary btn-sm" name="ajouter" id="ajouter" onclick="check1()"> ajouter</button></td>
      </tr>
      </div></div>
      </table>
    </form>

    <?PHP
include "../core/functions-class.php";

$erreur=0;

if(isset($_POST['ajouter']))
{
    
    if (!isset($_POST['theme']) and !isset($_POST['acteurs']) and !isset($_POST['cout']) and !isset($_POST['date']) and !isset($_POST['per']))
    {
        $erreur=0;
    }
        $pub1=new publicityfc();
        $listepub=$pub1->afficherpublicity2();
        foreach($listepub as $row){
            if($row['theme'] == $_POST['theme'])
            {
                $erreur=2;
            }
        }
    if(($_POST['cout'] < 0) || ($_POST['cout'] > 200) || ($_POST['per'] < 0) || ($_POST['per'] > 100))
    {
        $erreur=1;
    }
    if(($_POST['acteurs'] != "primaire") && ($_POST['acteurs'] != "secondaire"))
    {
      $erreur=1;
    }
}

if (isset($_POST['theme']) and isset($_POST['acteurs']) and isset($_POST['cout']) and isset($_POST['date']) and isset($_POST['per'])
 and ($erreur == 0))
{

	$theme=$_POST['theme'];
	$acteurs=$_POST['acteurs'];
	$cout=$_POST['cout'];
	$date=$_POST['date'];
	$per=$_POST['per'];

$publicite1=new publicityvar($theme,$acteurs,$cout,$date,$per);
$publicite2=new publicityfc();
$publicite2->ajouterpublicity($publicite1);
?> <h2> <?PHP echo "Votre publicité est ajouté!";?> </h2> <?PHP
?>	
<?PHP
}if($erreur == 1){
    ?> <h2> <?PHP 	echo "verifier les champs,il y a un erreur!"; ?> </h2> <?PHP
}
if($erreur == 2)
{
    ?> <h2> <?PHP 	echo "Erreur2:Theme existe deja!"; ?> </h2> <?PHP 
}
?>

   
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