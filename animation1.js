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
		alert('Il n y a pas des produits aussi couteux');
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

function calculatetotalprice()
{
	var multi1=window.document.getElementById('firstcount').value;
var resultat= 49.00 * multi1;
alert(resultat);
return resultat;
}

function calculatetotalprice2()
{
	var multi2=window.document.getElementById('scount').value;
var resultat= 30.00 * multi2;
alert(resultat);
return resultat;
}

function calculatetotalprice3()
{
	var multi3=window.document.getElementById('tcount').value;
var resultat= 10.00 * multi3;
alert(resultat);
return resultat;
}

function calculatetotalprice4()
{
	var multi4=window.document.getElementById('totcount').value;
var resultat= 26.00 * multi4;
alert(resultat);
return resultat;
}

function calculatetotalpricetot()
{
	var multi1=window.document.getElementById('firstcount').value;
	var multi2=window.document.getElementById('scount').value;
	var multi3=window.document.getElementById('tcount').value;
	var multi4=window.document.getElementById('totcount').value;

	var resultat1= 49.00 * multi1;
	var resultat2= 30.00 * multi2;
	var resultat3= 10.00 * multi3;
	var resultat4= 26.00 * multi4;
var resultattot = resultat1+resultat2+resultat3+resultat4;
alert(resultattot);
return resultattot;
}