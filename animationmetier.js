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

var resultat1= calculatetotalprice();
var resultat2= calculatetotalprice2();
var resultat3= calculatetotalprice3();
var resultat4= calculatetotalprice4();
var resultat5= calculatetotalpricetot();