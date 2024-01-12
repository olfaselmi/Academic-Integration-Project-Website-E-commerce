<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>bakery - Admin</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.php" class="logo"><b>Bakery</b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
       
          <!-- settings end -->
          <!-- inbox dropdown start-->
          
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <h5 class="centered"> 
          </h5>
        </ul>
        <ul class="sidebar-menu" id="nav-accordion">
          <a class="centered" href="affichagestat.php"><h5 class="centered">gestion des cartes</h5></a>
        </ul>  
        <ul class="sidebar-menu" id="nav-accordion">
          <a class="centered" href="gestpromo.php"><h5 class="centered">gestion des promotions</h5></a>
        </ul>    
        <ul class="sidebar-menu" id="nav-accordion">
          <a class="centered" href="gestcommande.php"><h5 class="centered">gestion des clients</h5></a>
        </ul>
        <ul class="sidebar-menu" id="nav-accordion">
          <a class="centered" href="index.php?gestproduit"><h5 class="centered">gestion des produits</h5></a>
        </ul> 
        <ul class="sidebar-menu" id="nav-accordion">
          <a class="centered" href="index.php?gestcategorie"><h5 class="centered">gestion des categories</h5></a>
        </ul>
        <ul class="sidebar-menu" id="nav-accordion">
          <a class="centered" href="gestcommande.php"><h5 class="centered">gestion des commandes</h5></a>
        </ul> 
        <ul class="sidebar-menu" id="nav-accordion">
          <a class="centered" href="gestlivraison.php"><h5 class="centered">gestion des livraisons</h5></a>
        </ul>    
        <ul class="sidebar-menu" id="nav-accordion">
          <a class="centered" href="gestreclam.php"><h5 class="centered">gestion des réclamations</h5></a>
        </ul>  <!-- sidebar menu end-->
      </div>
    </aside>


























    
