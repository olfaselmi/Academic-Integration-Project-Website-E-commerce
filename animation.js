function check2(){

	var num=window.document.getElementById('numbers').value;
	var date=window.document.getElementById('date').value;
	var date1 = new Date();
	var oc=window.document.getElementById('oc').value;
	var pack=window.document.getElementById('packs').value;
	
	if((num == "") || (date == "") || (oc == "") || (pack == ""))
	{
		alert('Completer le formulaire avant d ajouter l evennement!');
	}

	if((oc != "annivairsaire") && (oc != "marriage"))
	{
		alert('Occasion inconnue!');
	}

	if(pack < 0)
	{
		alert('La quantite des packs ne peut pas etre negatif!');
	}

	if(pack > 9)
	{
		alert('Quantite maximale depasse!');
	}

	if(num < 0)
	{
		alert('Le numero de l evennement ne peut pas etre negatif');
	}

	if(num > 20)
	{
		alert('Quantite maximale des evennements depassee!');
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
	
	if(A > date)
	{
		alert('Invalid date, it s before today!');
	}
	//document.write(A);
}