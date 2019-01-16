<!--Jorge Perez Robles 30/11/2018 aqui solo esta la funcion authentication que comprueba que estes
logueado en la pagina
-->
<?php


//aqui vamos a hacer la funcion que comprueba si existe la variable
//session login y que nos va a pedir loguearte si no es asi
function IsAuthenticated(){
    if(!isset($_SESSION['login'])){
        return false;
    }else{
        return true;
    }
}

?>