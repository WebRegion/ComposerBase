function validateCollForm() {	
						  
}

$(document).ready(function() {	

$( "#enterform" ).submit(function( event ) {
	
 var name=$("#Name").val();
 var email=$("#Email").val();
 var agree=$("#agree").val();
	
 var adr_pattern=/^[a-zA-Z0-9_\-.]+@[a-zA-Z0-9\-]+\.[a-zA-Z]{2,5}/i;
 var prov=adr_pattern.test(email);	
	
 var err=0;
	
if (name=='') {alert ('Введите имя!'); err=1; return false;}
if (email=='') {alert ('Введите email!'); err=1; return false;}
if (agree=='') {alert ('Примите соглашение!'); err=1; return false;}
if (prov==false) {alert ('Неверно введен email!'); err=1; return false;}
  
	if (err==1) {return false;} else {return true;}
	
});		
	
});
