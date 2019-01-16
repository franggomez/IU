<?php

session_start();

include '../Functions/Authentication.php';
include '../Views/CENTRO_SHOWALL.php';
include '../Models/CENTRO_model.php';
include '../Views/CENTRO_ADD.php';
include '../Views/MESSAGE_View.php';
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
	            $centro = new Centro_ADD($_GET['nombreEmpresa']);
            }else{
	            $centro = new CENTRO_model($_REQUEST['idCentro'],$_GET['nombreEmpresa']);
                $respuesta = $centro->ADD();
               //var_dump($loterias);
               // var_dump($respuesta);
                if ($respuesta == 'true'){                                                                                                          
                    $respuestaADD = $centro->ADD();
                    new MESSAGE($respuestaADD, '../Controllers/Centro_Controller.php?action=ADD&nombreEmpresa='.$_GET['nombreEmpresa']);
                }
                else{
                    
                    new MESSAGE($respuesta, '../Controllers/Centro_Controller.php?nombreEmpresa='.$_GET['nombreEmpresa']);
                }
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
                    
default:
    if(!$_POST){
        $centro = new CENTRO_model('',$_GET['nombreEmpresa']);
        $datos = $centro->SHOWALL();
        if($datos==false){
            new MESSAGE('Ninguna insertada', '../Controllers/Centro_Controller.php?action=ADD&nombreEmpresa='.$_GET['nombreEmpresa']);
        }else{
        new SHOWALLCENTRO($datos, $_GET['nombreEmpresa']);
        }
    }
break;

}
?>