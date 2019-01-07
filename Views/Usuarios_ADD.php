<?php
class Usuarios_ADD{

var $enlace;
function __construct($enlace){

	$this -> enlace=$enlace;
	$this ->mostrar();
}
function mostrar(){
	include_once "../Views/cabecera.php";
	?>
<article id="add">
					<h2> <?php echo $GLOBALS['strings']['Añadir usuario'];?> </h2>
<form name="Add" method="post" action="../Controllers/Usuarios_Controller.php"
enctype="multipart/form-data">
<label>Login</label><input type="text" name= "login" maxlength="60" size="25" required onblur= "comprobarVacio(this);comprobarReal(this,3,20,40)">
						<br>
<label><?php echo $GLOBALS['strings']['Contraseña'];?> </label><input type="password"  name="password" maxlength="30" size="22" required onblur="comprobarTexto(this,10)">
		<br>
<label><?php echo $GLOBALS['strings']['DNI'];?> </label><input type="text"   name="DNI" maxlength="40" size="30" required><br>
<label><?php echo $GLOBALS['strings']['Nombre'];?> </label><input type="text" name= "nombre" maxlength="3" size="10" required>
		<br>
<label><?php echo $GLOBALS['strings']['Apellidos'];?> </label> <input type="text" name= "apellidos" maxlength="50"
required size="30">
<br>

<label><?php echo $GLOBALS['strings']['Telefono'];?> </label><input type="text" name= "telefono" maxlength="6" size="12" required>
	         <br>
					 <label>Email</label><input type="email" name= "email" maxlength="60" size="25" required onblur= "comprobarVacio(this);comprobarReal(this,3,20,40)">
					 						<br>
											<label><?php echo $GLOBALS['strings']['Tipo de usuario'] ;?></label>	<SELECT name="tipoUsuario">
										<option value="DE CENTRO">De centro</option>
										<option value="AUTORIZADOR">Autorizador</option>
										<option value="ADMIN">Administrador</option>
										</SELECT>
<button type="submit" class="boton" name="action" value="ADD"><i class="fas fa-plus"></i></button>
<a href="<?php echo $this->enlace;?>"><button type="button" class="boton"><i class="fas fa-times"></i></button></a>



					</form>
					</article>
					<hr>
<?php
include_once "../Views/footer.php";
}

}
?>
