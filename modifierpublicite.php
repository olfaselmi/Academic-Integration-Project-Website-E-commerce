<HTML>
<head>
    <script>
        function check1(){
	
	var cout=window.document.getElementById('cout').value;
	var theme=window.document.getElementById('theme').value;
	var acteurs=window.document.getElementById('acteurs').value;
	var date=window.document.getElementById('date').value;
	var Percentage=window.document.getElementById('per').value;
	
	
	if((theme == "") || (acteurs == "") || (cout == "") || (date == "") || (Percentage == ""))
	{
		alert('Completer le formulaire avant d ajouter la publicite!');
	}
	if(cout < 0)
	{
		alert('Cout negative->Invalid!');
	}

	if(cout > 200)
	{
		alert('Il n y a pas des produits aussi couteux que ça!');
	}
	
    if(Percentage < 0)
    {
        alert('Negative percentage -> Invalid!');
    }
    if(Percentage > 100)
    {
        alert('Not a percentage! is higher than 100%!');
	}
	if((acteurs != "primaire") && (acteurs != "secondaire"))
	{
		alert('Acteur inconnu!');
	}
    

	var A = new Date();
	//var A = Date.now();
	var fdate = new Date();
	var d = fdate.getDate(); 
	var m = fdate.getMonth()+1;
	var y = fdate.getFullYear();
	if(d<10) 
{
    d='0'+d;
} 

if(m<10) 
{
    m='0'+m;
} 
	//A = d+'/'+m+'/'+y;
	A = y+'-'+m+'-'+d;
	var B = new Date(A);
	var cdate = new Date(d,m,y);//date is okay now
	
	if(A < date)
	{
		alert('Invalid date, it s after today!');
	}

}

    </script>
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
    
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <script language="javascript" type="text/javascript" src="animation.js"></script>
</head>
<body>
<?PHP
include "../core/functions-class.php";
if (isset($_GET['theme'])){
	
	$Pubfun=new publicityfc();
    $result=$Pubfun->recupererpublicity($_GET['theme']);
	foreach($result as $row){
		$theme=$row['theme'];
		$acteurs=$row['acteurs'];
		$cout=$row['cout'];
		$date=$row['date'];
		$per=$row['per'];
?>
<center>
<form method="POST">
<table>
<caption>Modifier Publicite</caption>
<tr>
<td>theme</td>
<th class="product-name"><input type="number" name="theme" id="theme" required></th>
</tr>
<tr>
<td>acteurs</td>
<th class="product-name"><input type="text" name="acteurs" id="acteurs" required></th>
</tr>
<tr>
<td>cout</td>
<th class="product-name"><input type="text" name="cout" id="cout" required></th>
</tr>
<tr>
<td>date</td>
<th class="product-name"><input type="date" name="date" id="date" required></th>
</tr>
<tr>
<td>Percentage</td>
<th class="product-name"><input type="text" name="per" id="per" required></th>
</tr>
<tr>
<td></td>
<th class="product-name"><input class="btn btn-primary btn-sm"  type="submit" name="modifier" value="modifier" onclick="check1()"></th>
</tr>
<tr>
<td></td>
<th class="product-name"><input type="hidden" name="theme_ini" value="<?PHP echo $_GET['theme'];?>"></th>
</tr>
</table>
</form>
</center>
<?PHP 
}
}
else
{
    echo "Besoin d'une publicité pour la modifier!";
}
if (isset($_POST['modifier'])){
	$pubvar=new publicityvar($_POST['theme'],$_POST['acteurs'],$_POST['cout'],$_POST['date'],$_POST['per']);
	$Pubfun->modifierpublicity($pubvar,$_POST['theme_ini']);
	echo $_POST['theme_ini'];
	?>
	
<script>alert('Votre publicité est modifiée!');</script>

<?PHP
	header('Location: back publicity.html');
}

?>
</body>
</HTML>