<!--Jorge Perez Robles 30/11/2018 aqui se haran los cambios necesario para cambiar la pagina de 
idioma
-->
<?php
session_start();
$idioma = $_GET['idioma'];
$_SESSION['idioma'] = $idioma;
header('Location:' . $_SERVER["HTTP_REFERER"]);
?>