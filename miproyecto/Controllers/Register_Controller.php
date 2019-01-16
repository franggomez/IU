<?php

session_start();
include '../Views/MESSAGE_View.php';
include_once '../Locales/Strings_'.$_SESSION['idioma'].'.php';

//session_start();
if(!$_POST){
	include '../Views/REGISTER_View.php';
	$register = new Register();
}else{
	include '../Models/USUARIOS_Model.php';
	$usuario = new USUARIOS_Model($_REQUEST['login'],$_REQUEST['password'],$_REQUEST['DNI'],$_REQUEST['nombre'],
		$_REQUEST['apellidos'],$_REQUEST['Telefono'],$_REQUEST['email'],$_REQUEST['TipUser']);
		$respuesta = $usuario->Register();
	if ($respuesta == 'true'){
		$respuestaRegistrar = $usuario->registrar();
		new MESSAGE($respuestaRegistrar, './Login_Controller.php');
	}
	else{
		
		new MESSAGE($respuesta, './Register_Controller.php');
	}

}

?>