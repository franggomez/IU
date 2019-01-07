<?php
class LOGIN_View{

var $enlace;
function __construct($enlace){

	$this -> enlace=$enlace;
	$this ->mostrar();
}
function mostrar(){
	include_once "../Views/cabecera.php";
	?>
<article id="login">
					<h2> <?php echo $GLOBALS['strings']['Entrar'];?> </h2>
<form name="Add" method="post" action="../Controllers/Login_Controller.php"
enctype="multipart/form-data">
<label><?php echo $GLOBALS['strings']['Usuario'];?> </label><input type="text" name= "login" maxlength="60" size="25" >
						<br>
<label><?php echo $GLOBALS['strings']['Contraseña'];?> </label><input type="password"  name="password" maxlength="30" size="22" >
		<br>
<button class="boton" name="action" value="LOGIN" onclick="validarForm"><i class="fas fa-check"></i></button>
<button class="boton" name="action" value="REGISTRAR"><i class="fas fa-user-plus"></i></button>

	</form>
	</article>
					<hr>
<?php
include_once "../Views/footer.php";
}

}
?>
