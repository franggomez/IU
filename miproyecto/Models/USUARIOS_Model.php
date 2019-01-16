<?php

//Clase : USUARIOS_Modelo
//Creado el : 30/11/2018
//Creado por: Jorge Perez Robles
//-------------------------------------------------------

class USUARIOS_Model {

	var $login;
	var $password;
	var $DNI;
	var $nombre;
	var $apellidos;
	var $telefono;
	var $email;
	var $TipUser;
	var $mysqli;

//Constructor de la clase
//

function __construct($login,$password,$DNI,$nombre,$apellidos,$telefono,$email,$TipUser){
	$this->login = $login;
	$this->password = $password;
	$this->DNI = $DNI;
	$this->nombre = $nombre;
	$this->apellidos = $apellidos;
	$this->telefono = $telefono;
	$this->email = $email;
	$this->TipUser = $TipUser;

    include_once '../Models/Access_DB.php';
    
	$this->mysqli = ConnectDB();
}

// funcion login: realiza la comprobación de si existe el usuario en la bd y despues si la pass
// es correcta para ese usuario. Si es asi devuelve true, en cualquier otro caso devuelve el 
// error correspondiente
function login(){

	$sql = "SELECT *
			FROM USUARIOS
			WHERE (
				(login = '$this->login') 
			)";

	$resultado = $this->mysqli->query($sql);
	if ($resultado->num_rows == 0){
		return 'El login no existe';
	}
	else{
		$tupla = $resultado->fetch_array();
		if ($tupla['password'] == $this->password){
			return true;
		}
		else{
			return 'La password para este usuario no es correcta';
		}
	}
}//fin metodo login

//funcion en la que comprobamos que el login que introduce no este ya en la base de datos 
function Register(){

		$sql = "select * from USUARIOS where login = '".$this->login."'";

		$result = $this->mysqli->query($sql);
		if ($result->num_rows == 1){  // existe el usuario
				return 'El usuario ya existe';
			}
		else{
	    		return true; //no existe el usuario
		}

	}
//funcion que realiza el registro a la base de datos
function registrar(){

		
		$sql = "INSERT INTO USUARIOS (
			login,
			password,
			DNI,
			nombre,
			apellidos,
			telefono,
			email,
			tipoUsuario) 
				VALUES (
					'$this->login',
					'$this->password',
					'$this->DNI',
					'$this->nombre',
					'".$this->apellidos."',
					'$this->telefono',
					'".$this->email."',
					'$this->tipoUsuario'
					)";
			
		if (!$this->mysqli->query($sql)) {
			return 'Error en la inserción';
		}
		else{
			return 'Inserción realizada con éxito'; //operacion de insertado correcta
		}		
	}
//funcion que usamos para guardar la foto personal del usuario y crear las carpetas pertinentes
}//fin de clase

?> 