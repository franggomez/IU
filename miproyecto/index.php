<!--Jorge Perez Robles 30/11/2018 este es el index que controla la pagina-->
<?php

session_start();


//llamamos a la funcion de autenticacion
include './Functions/Authentication.php';

//en caso de que no pase el login
if(!IsAuthenticated()){
    header('Location:./Controllers/Login_Controller.php');
}else{
    header('Location:./Controllers/Empresa_Controller.php');
}

?>