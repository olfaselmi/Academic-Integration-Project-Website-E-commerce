<?PHP
include "../../entities/categorie.php";
include "../../core/CategorieCore.php";
    $categorieC=new CategorieCore();
    $result=$categorieC->recupererCategorie($_GET['idCa']);
$listeCategorie=$categorieC->getAllCategorie();
$c=$result->fetchAll();
    foreach($c as $row){}
?>
<HTML>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
        <div class="jumbotron">
            <div class="card">
                <div class="card-header">
                   <a href="afficherCategorie.php" class="btn btn-primary badge-pill">Annuler</a>
                </div>
                <div class="card-body">
                    <h3 align="center" class="card-title">Modifier Categorie</h3>

                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label >Id categorie</label>
                            <input type="number" name="idCa" class="form-control" value="<?PHP echo $_GET['idCa']; ?>">
                            <label >Nom categorie</label>
                            <input type="text" name="nomCa" class="form-control"value="<?PHP echo $row['nom_categorie']; ?>">
                        </div>

                        <input type="submit" name="modifier" value="modifier" class="btn btn-primary badge-pill">

                        <input type="hidden" name="idCa_ini" value="<?PHP echo $_GET['idCa']; ?>">
                    </form>
                </div>
            </div>  
        </div>
    </div>
<?PHP
 
if (isset($_POST['modifier'])){
    $categorie=new categorie($_POST['idCa'],$_POST['nomCa']);
    $categorieC2 = new CategorieCore();
    $categorieC2->modifierCategorie($categorie,$_POST['idCa_ini']);
    echo $_POST['idCa_ini'];
    header('Location: afficherCategorie.php');
     //echo $result;
		
}
?>
</body>
</HTMl>