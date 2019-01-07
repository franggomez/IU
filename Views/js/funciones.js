
//Hacerle las funciones en los formularios de añadir y editar y en el de búsqueda no poner el comp vacío)
function comprobarVacio(campo){
	
	if(campo.value.length ==0){
		//alert("Campo vacío");
		return true;
	}
	else{
		//alert("Campo no vacío");
		return false;
	}
}
function comprobarTexto(campo,size){
	//alert(campo.value.length);
	if(campo.value.length<= size){
		//alert("Tamaño menor");
		return true;
	}
	else{
		//alert("Tamaño mayor");
		return false;
	}
	
	
}
function comprobarExpresionRegular(campo,exprreg,size){
	
	if (comprobarTexto(campo , size)==true){
		if(exprreg.test(campo.value)==true){
		
//alert("Lo cumple");
		
			return true;
		}
	else {
		//alert("No lo cumple");
			return false;
		}		
	}
	//alert("Tamaño");
	return false;
		
}

function comprobarAlfabetico(campo,size){
	
	if(comprobarTexto(campo,size)==true){
		if (comprobarExpresionRegular(campo,/^[a-z A-Z]+$/,size)==true){
			//alert("correcto");
			return true;
		}
		else{
			//alert("patron mal");
			return false;
	}
	}
	else{
		//alert("Tamaño mal");
		return false;
	}
	
	
	
}


function comprobarEntero(campo,valormenor,valormayor){
	
	
	if(isNaN(campo.value)==true){
		//alert("No es numero");
	return false;
	
	}
	else{
		if(comprobarExpresionRegular(campo,/^[0-9]+$/,valormayor.length)==true){
			
		if( campo.value<valormenor || campo.value >valormayor){
			//alert("Tamaño mal");
			return false;
		}
		else{
			//alert("Bien");
			return true;
		}
		}
		else{
			//alert ("No cumple");
			return false;
	}
	}
	
	
}
function comprobarReal(campo,numerodecimales,valormenor,valormayor){
	
	if(isNaN(campo.value)==true){
		//alert("No es numero");
	return false;
	
	}
	else{
		
		var parte;//sirve para diferenciar las dos partes del numero real
		parte=campo.value.split(".");
		if(parte.length >1){
			if(parte[1].length>numerodecimales){
				alert("Decimales mas");
		return false;
		}
		else{
		
		
		
		
		if( campo.value<valormenor || campo.value >valormayor){
			//alert("Tamaño mal");
			return false;
		}
		else{
			//alert("Bien");
			return true;
		
		}
	
		}
	
	}
	}
	
}

function comprobarDni(campo){
	var letras="TRWAGMYFPDXBNJZSQVHLCKE";
	var numeros;
	var letra;
	var resto;
	
	if(comprobarExpresionRegular(campo,/^[0-9]{8}[A-Z]$/,9)==true){
		letra= campo.value.substr(8,1);
		numeros= campo.value.substr(0,8);
		resto=numeros%23;
		if(letras[resto]==letra){
			alert("Letra bien")
			return true;
	
		}
		else{
			alert("Letra mal")
			return false;
		}
	}
else{
	alert("Dni mal introducido")
return false;	
}	
	
	
	
}




