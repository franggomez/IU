<?php

session_start();

include '../Functions/Authentication.php';
include '../Views/EMPRESA_SHOWALL.php';
include '../Models/EMPRESA_model.php';
include '../Views/EMPRESA_ADD.php';
include '../Views/MESSAGE_View.php';
include '../Views/EMPRESA_SEARCH.php';
//include '../Views/EMPRESA_DELETE.php';

 if(!IsAuthenticated()){
     header('Location: ../index.php');
 }

if(isset($_GET['action'])){
    $action = $_GET['action'];
} else {
    $action = '';
}

switch($action){

case 'ADD': if(!$_POST){
	            $empresa = new ACCION_ADD();
            }else{
	            $empresa = new EMPRESA_model($_REQUEST['nombreEmpresa']);
                $respuesta = $empresa->ADD();
               //var_dump($loterias);
               // var_dump($respuesta);
                if ($respuesta == 'true'){                                                                                                          
                    $respuestaADD = $empresa->ADD();
                    new MESSAGE($respuestaADD, '../Controllers/Empresa_Controller.php');
                }
                else{
                    
                    new MESSAGE($respuesta, '../Controllers/Empresa_Controller.php?action=ADD');
                }
                }
break;


case 'SHOWCURRENT': 
                    $loterias = new EMPRESA_Model($_GET['email'],'','','','','','','');
                    $datos = $loterias->RellenaDatos();
                    //var_dump($datos);
                    new SHOWCURRENT($datos);

break;

case 'SEARCH': if(!$_POST){
                    $empresa = new SEARCH();
                }else{
                    $empresa = new EMPRESA_model($_REQUEST['nombreEmpresa']);
                    $datos = $empresa->SEARCH();
                //var_dump($loterias);
                // var_dump($respuesta);
                   new SHOWALL($datos);
                }


break;

case 'DELETE':
                    $loterias = new EMPRESA_Model($_GET['nombreEmpresa']);
                    $datos = $loterias->RellenaDatos();
                    //var_dump($datos);
                    new SHOWDELETE($datos);          
break;

case 'DELETEACCEPT':
                    $loterias = new LOTERIASIU_Model($_GET['email'],'','','','','','','');
                    $datos = $loterias->DELETE();
                    new MESSAGE($datos, '../Controllers/Loteriaiu_Controller.php');
break;

case 'EDIT': if(!$_POST){
            $loterias = new LOTERIASIU_Model($_GET['email'],'','','','','','','');
            $datos = $loterias->RellenaDatos();
            //var_dump($datos);
            new SHOWEDIT($datos); 
            }else{
                $loterias = new LOTERIASIU_model($_REQUEST['email'],$_REQUEST['nombre'],$_REQUEST['apellidos'],$_REQUEST['participacion'],
		        $_REQUEST['resguardo'],$_REQUEST['ingresado'],$_REQUEST['premiopersonal'],$_REQUEST['pagado']);
                $respuesta = $loterias->EDIT();
                new MESSAGE($respuesta, '../Controllers/Loteriaiu_Controller.php');
                }

                    
break;

default:
    if(!$_POST){
        $empresa = new EMPRESA_model('');
        $datos = $empresa->SHOWALL();
        if($datos==false){
            new MESSAGE('Ninguna insertada', '../Controllers/Empresa_Controller.php?action=ADD');
        }else{
        new SHOWALL($datos);
        }
    }
break;

}
?>