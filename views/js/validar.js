/*=============================================================

				VALIDAR REGISTRO
=============================================================*/
function validarRegistro(){

	var user = document.querySelector("#usuario").value;
	var pass = document.querySelector("#password").value;
	var email = document.querySelector("#email").value;
	var terms = document.querySelector("#terms").checked;

	/* Validar usuario*/
	if(user != ""){
		// defino mi expresion regular para usuario
		 var regx = /^[a-zA-Z0-9]*$/; 
		 // limito el tamaño del string
		 var size = user.length;

		 if(size > 6){
		 	document.querySelector("label[for='user']").innerHTML += "<br>Escribe maximo 6 caracteres";
		 	return false;
		 }

		 // valido mi expresion regular
		 if(!regx.test(user)){
		 		document.querySelector("label[for='user']").innerHTML += "<br>No se permiten caracteres especiales";
		 	return false;
		 }
	}


	/* Validar password*/
	if(pass != ""){
		
	// pattern  en html5   que va en input:   pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"

		// defino mi expresion regular para usuario 


		 var regx = /^[a-zA-Z0-9]*$/; 
		 // limito el tamaño del string
		 var size = pass.length;
		 if(size < 8){
		 	document.querySelector("label[for='password']").innerHTML += "<br>Contraseña debe ser por lo menos 8 caracteres";
		 	return false;
		 }

		  // valido mi expresion regular
		 if(!regx.test(pass)){
		 		document.querySelector("label[for='password']").innerHTML += "<br>No se permiten caracteres especiales";
		 	return false;
		 }
	}


		/* Validar email*/


		if(email !=""){
		
			// expresion regular que valida el correo

			var regx = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/; 
		  	if(!regx.test(email)){
		 		document.querySelector("label[for='email']").innerHTML += "<br>Escribe correctamente el email";
		 		return false;
			}
		}
		


		/* Validar terminos y condiciones*/

		if(!terms){

		 	document.querySelector("form").innerHTML += "<br>Se requiere aceptar los terminos";

		 	document.querySelector("#usuario").value = user;
			document.querySelector("#password").value = pass;
			document.querySelector("#email").value = email;

		 	return false;
		}


return true;

}


/* ====  Fin Validar Registro   ====*/