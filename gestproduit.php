<?php 
include "header.php";
include"footer.php";

?>
<section id="main-content">
      <section class="wrapper site-min-height">
          <!--*insertion produit+categorie strats here*-->
          <?php
          if(isset($_GET['gestproduit'])){
            include("ajouterProduit.php");
          }
          ?>
         <!--*insertion produit+categorie ends here*-->
       </section>
</section>


