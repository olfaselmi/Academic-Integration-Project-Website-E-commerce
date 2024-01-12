<?php
include "../entities/livraison.php";
include "../core/livraisonC.php";
if (isset($_GET['id']))
{
	
	$valeur=$_GET['id'];

$pe = new livraisonC();
$pe->supprimer($valeur);
	header('Location: tri1.php');
}
?>