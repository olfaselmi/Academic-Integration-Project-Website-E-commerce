<?PHP

include "../core/functions-class.php";
$pub1=new publicityfc();
$listepub=$pub1->afficherpublicity2();
$percentagecounter0=0;
$percentagecounter=0;
$i=0;

foreach($listepub as $row)
{
    $percentagecounter0 += $row['per'];
    $i+=1;
}
$percentagecounter=$percentagecounter0/$i;

?>
<!Doctype html>
<html>
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
        <div class="container">
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
                  <li><a href="wishlist.php"><span class="icon icon-heart-o"></span></a></li>
                  <li>
                    <a href="cart.php" class="site-cart">
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
              <a href="homepage.html"><h2>Déconnexion</h2></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>



    <div class="site-section">
      <div class="container">
        <div >
          <div c>
            <h2 class="h3 mb-3 text-black">Result</h2>
          </div>
          <div >

            <form action="#" method="post">
              
              <div class="p-3 p-lg-5 border">
              <div> <label class="h4"><h2> Pourcentage moyenne de réussite des publicité ajourd'hui est:</label><?php echo $percentagecounter;
              if($percentagecounter < 10)
{
?></h2>
    <img src="images/smi157.gif" alt="Image placeholder" class="img-fluid rounded mb-4">
    <script>
alert('Domage...');
</script>
<?PHP
}
if(($percentagecounter >= 10) and ($percentagecounter < 80))
{
?></h2>
    <img src="images/smi159.gif" alt="Image placeholder" class="img-fluid rounded mb-4">
    <script>
alert('Pas mal n est ce pas?');
</script>
<?PHP
}
if($percentagecounter >= 80)
{
?></h2>
    <img src="images/smi164.gif" alt="Image placeholder" class="img-fluid rounded mb-4">
    <script>
alert('C est excellent ajourd hui!');
</script>
<?PHP
}
?>

              </div>
            </form>
          </div>



    <footer class="site-footer border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigations</h3>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Sell online</a></li>
                  <li><a href="#">Features</a></li>
                  <li><a href="#">Shopping cart</a></li>
                  <li><a href="#">Store builder</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Mobile commerce</a></li>
                  <li><a href="#">Dropshipping</a></li>
                  <li><a href="#">Website development</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Point of sale</a></li>
                  <li><a href="#">Hardware</a></li>
                  <li><a href="#">Software</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h3 class="footer-heading mb-4">Promo</h3>
            <a href="#" class="block-6">
              <img src="images/cohoco.jpg" alt="Image placeholder" class="img-fluid rounded mb-4">
              <h3 class="font-weight-light  mb-0">Finding Your Perfect Cake</h3>
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="email">Reviewers@esprit.tn</li>
              </ul>
            </div>

            <div class="block-7">
              <form action="#" method="post">
                <label for="email_subscribe" class="footer-heading">Subscribe</label>
                <div class="form-group">
                  <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
                  <input type="submit" class="btn btn-sm btn-primary" value="Send">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </footer>
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