<!Doctype html>
<script>
    function redirect()
    {
        var test=confirm('Vous voulez retournez à la page précédante?');
        if(test == true)
        {
            window.location="front publicity.html";
        }
        else
        {
            alert('D accord!');
        }
    }

</script>
<head>
<title>Tri publicité </title>
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
<table border="1"  class="table table-bordered">
	<thead>
<tr>
<th class="product-thumbnail">theme</th>
<th class="product-thumbnail">acteurs</th>
<th class="product-thumbnail">cout</th>
<th class="product-thumbnail">date</th>
<th class="product-thumbnail">Percentage de reussite</th>
</tr>

<?PHP

include "../core/functions-class.php";
$publicity1=new publicityfc();
$listepub=$publicity1->trierpublicity();

foreach($listepub as $row){
	
	?>
	<tr>
	<th class="product-thumbnail"><?PHP echo $row['theme']; ?></th>
	<th class="product-name"><?PHP echo $row['acteurs']; ?></th>
	<th class="product-thumbnail"><?PHP echo $row['cout']; ?></th>
	<th class="product-name"><?PHP echo $row['date']; ?></th>
	<th><?PHP echo $row['per']; ?></th>
	</tr>
	<?PHP
}
?>
<thead>
</table>
<center>
<input  class="btn btn-primary btn-sm"  type="submit" value="ENTER" id='enter' onclick="redirect()">
</center>
</div>