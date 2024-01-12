<?php
$con=mysqli_connect("localhost","root","","projetweb");

//getting the categories
function getCats(){

	global $con;

	$get_cats="select * from categorie";

	$run_cats=mysqli_query($con, $get_cats);

	while ($row_cats=mysqli_fetch_array($run_cats)) {
		$id_categorie=$row_cats['id_categorie'];
		$nom_categorie=$row_cats['nom_categorie'];

		echo "<li><a href='index.php?cat=$nom_categorie'>$nom_categorie</a></li>";
	}

}

function getProById($id_produit){
	global $con;
	$get_pro="SELECT * FROM produit WHERE id_produit = $id_produit";
	$run_pro=mysqli_query($con, $get_pro);
							
	while ($row_pro=mysqli_fetch_array($run_pro)) {
		$id_produit=$row_pro['id_produit'];
		$image_produit=$row_pro['image_produit'];
		$nom_produit=$row_pro['nom_produit'];
		$prix_produit=$row_pro['prix_produit'];
		$qt_produit=$row_pro['qt_produit'];
		$nom_categorie=$row_pro['nom_categorie'];
		?>
			<div class="agileinfo_single">
			<h5><?= $nom_produit ?></h5>
			<div class="col-md-4 agileinfo_single_left">
				<img id="example" src="images/<?=$image_produit?>" alt=" " class="img-responsive" />
			</div>
			<div class="col-md-8 agileinfo_single_right">
				<div class="rating1">
					<span class="starRating">
						<input id="rating5" type="radio" name="rating" value="5">
						<label for="rating5">5</label>
						<input id="rating4" type="radio" name="rating" value="4">
						<label for="rating4">4</label>
						<input id="rating3" type="radio" name="rating" value="3" checked>
						<label for="rating3">3</label>
						<input id="rating2" type="radio" name="rating" value="2">
						<label for="rating2">2</label>
						<input id="rating1" type="radio" name="rating" value="1">
						<label for="rating1">1</label>
					</span>
				</div>
				<div class="w3agile_description">
					<h4>Description :</h4>
					<p>Délicieux!</p>
				</div>
				<div class="snipcart-item block">
					<div class="snipcart-thumb agileinfo_single_right_snipcart">
						<h4><?= $prix_produit?>DT</h4>
					</div>
					<div class="snipcart-details agileinfo_single_right_details">
						<form action="#" method="post">
							<fieldset>
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="add" value="1" />
								<input type="hidden" name="business" value=" " />
								<input type="hidden" name="item_name" value="pulao basmati rice" />
								<input type="hidden" name="amount" value="21.00" />
								<input type="hidden" name="discount_amount" value="1.00" />
								<input type="hidden" name="currency_code" value="USD" />
								<input type="hidden" name="return" value=" " />
								<input type="hidden" name="cancel_return" value=" " />
								<input type="submit" name="submit" value="Add to cart" class="button" />
							</fieldset>
						</form>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<?php	

	}

}
function getPro(){

	global $con;

//getting randomly 8 products on the home page
	$get_pro="select * from produit order by RAND() LIMIT 0,4";
	$run_pro=mysqli_query($con, $get_pro);
							
	while ($row_pro=mysqli_fetch_array($run_pro)) {
		$id_produit=$row_pro['id_produit'];
		$image_produit=$row_pro['image_produit'];
		$nom_produit=$row_pro['nom_produit'];
		$prix_produit=$row_pro['prix_produit'];
		$qt_produit=$row_pro['qt_produit'];
		$nom_categorie=$row_pro['nom_categorie'];
		$link_product = "<a href='single.php?id=$id_produit'>";
	?>
	<div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1">

							
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											
											<?php
											echo $link_product; 
                                             echo '<img src="images/'.$image_produit.'" alt=" " class="img-responsive" />'; 
                                            ?>
											</a>
											<p> <?php echo " $nom_produit" ?></p>
											<h4><?php echo "$prix_produit DT " ?></h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<form action="" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="Pepsi soft drink" />
													<input type="hidden" name="amount" value="8.00" />
													<input type="hidden" name="discount_amount" value="1.00" />
													<input type="hidden" name="currency_code" value="USD" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
								</div>
						</div>
					</div>
				</div>
							

<?php 

	}


}

?>




<?php

function getCatPro($nom_categorie){

	

	global $con;


	$get_cat_pro="select * from produit where nom_categorie='".$nom_categorie."'";
	$run_cat_pro=mysqli_query($con, $get_cat_pro);
							
	while ($row_cat_pro=mysqli_fetch_array($run_cat_pro)) {
		$id_produit=$row_cat_pro['id_produit'];
		$image_produit=$row_cat_pro['image_produit'];
		$nom_produit=$row_cat_pro['nom_produit'];
		$prix_produit=$row_cat_pro['prix_produit'];
		$qt_produit=$row_cat_pro['qt_produit'];
		$nom_categorie=$row_cat_pro['nom_categorie'];
		$link_product = "<a href='single.php?id=$id_produit'>";
	?>
	<div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1">

							
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											
											<?php
											echo $link_product; 
                                             echo '<img src="images/'.$image_produit.'" alt=" " class="img-responsive" />'; 
                                            ?>
											</a>
											<p> <?php echo " $nom_produit" ?></p>
											<h4><?php echo "$prix_produit DT" ?></h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<form action="" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="Pepsi soft drink" />
													<input type="hidden" name="amount" value="8.00" />
													<input type="hidden" name="discount_amount" value="1.00" />
													<input type="hidden" name="currency_code" value="USD" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
								</div>
						</div>
					</div>
				</div>
							

<?php 

	}


}

?>

<?php

function getAllPro(){

	global $con;


	$get_pro="select * from produit ";
	$run_pro=mysqli_query($con, $get_pro);
							
	while ($row_pro=mysqli_fetch_array($run_pro)) {
		$id_produit=$row_pro['id_produit'];
		$image_produit=$row_pro['image_produit'];
		$nom_produit=$row_pro['nom_produit'];
		$prix_produit=$row_pro['prix_produit'];
		$qt_produit=$row_pro['qt_produit'];
		$nom_categorie=$row_pro['nom_categorie'];
		$link_product = "<a href='single.php?id=$id_produit'>";
	?>
	<div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1">

							
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											
											<?php
											echo $link_product; 
                                             echo '<img src="images/'.$image_produit.'" alt=" " class="img-responsive" />'; 
                                            ?>
											</a>
											<p> <?php echo " $nom_produit" ?></p>
											<h4><?php echo "$prix_produit DT " ?></h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<form action="" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="Pepsi soft drink" />
													<input type="hidden" name="amount" value="8.00" />
													<input type="hidden" name="discount_amount" value="1.00" />
													<input type="hidden" name="currency_code" value="USD" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
								</div>
						</div>
					</div>
				</div>
							

<?php 

	}


}

?>

<?php

function getSearchedPro(){

	global $con;

if (isset($_GET['search'])) {
		$search_query=$_GET['user_query'];
	

	$get_pro="select * from produit where nom_produit like '%$search_query%'";
	$run_pro=mysqli_query($con, $get_pro);
							
	while ($row_pro=mysqli_fetch_array($run_pro)) {
		$id_produit=$row_pro['id_produit'];
		$image_produit=$row_pro['image_produit'];
		$nom_produit=$row_pro['nom_produit'];
		$prix_produit=$row_pro['prix_produit'];
		$qt_produit=$row_pro['qt_produit'];
		$nom_categorie=$row_pro['nom_categorie'];
		$link_product = "<a href='single.php?id=$id_produit'>";
	?>
	<div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1">

							
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											
											<?php
											echo $link_product; 
                                             echo '<img src="images/'.$image_produit.'" alt=" " class="img-responsive" />'; 
                                            ?>
											</a>
											<p> <?php echo " $nom_produit" ?></p>
											<h4><?php echo "$prix_produit DT " ?></h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<form action="" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="Pepsi soft drink" />
													<input type="hidden" name="amount" value="8.00" />
													<input type="hidden" name="discount_amount" value="1.00" />
													<input type="hidden" name="currency_code" value="USD" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
								</div>
						</div>
					</div>
				</div>
							

<?php 

	}
}

}

?>