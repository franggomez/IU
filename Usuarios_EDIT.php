<?php
class Usuarios_EDIT{
var $datos;
var $enlace;
function __construct($datos,$enlace){
$this -> datos=$datos;
	$this -> enlace=$enlace;
	$this ->mostrar();
}
function mostrar(){
	include_once "../Views/cabecera.php";
	?>
<article id="add">
					<h2> <?php echo $GLOBALS['strings']['Editar usuario'];?> </h2>
<form name="Add" method="post" action="../Controllers/Usuarios_Controller.php"
enctype="multipart/form-data">
<label>Login</label><input type="text" name= "login"
 value= "<?php echo $this->datos[0];?>" maxlength="60" size="25"
readonly required onblur= "comprobarVacio(this);comprobarReal(this,3,20,40)">
						<br>
<label><?php echo $GLOBALS['strings']['Contraseña'];?> </label><input type="password"
 value= "<?php echo $this->datos[1];?>" name="password" maxlength="30" size="22" required onblur="comprobarTexto(this,10)">
		<br>
<label><?php echo $GLOBALS['strings']['DNI'];?> </label><input type="text"
readonly  value= "<?php echo $this->datos[2];?>" name="DNI" maxlength="40" size="30" required><br>
<label><?php echo $GLOBALS['strings']['Nombre'];?> </label><input type="text"
 value= "<?php echo $this->datos[3];?>" name= "nombre" maxlength="3" size="10" required>
		<br>
<label><?php echo $GLOBALS['strings']['Apellidos'];?> </label> <input type="text" name= "apellidos"
 value= "<?php echo $this->datos[4];?>" maxlength="50" size="30">
<br>

<label><?php echo $GLOBALS['strings']['Telefono'];?> </label><input type="text" name= "telefono"
 value= "<?php echo $this->datos[5];?>" maxlength="6" size="12" required>
	         <br>
					 <label>Email</label><input type="email" name= "email" maxlength="60" size="25"
					 readonly  value= "<?php echo $this->datos[6];?>" required onblur= "comprobarVacio(this);comprobarReal(this,3,20,40)">
					 						<br>
											<label><?php echo $GLOBALS['strings']['Tipo de usuario'] ;?></label>	<SELECT name="tipoUsuario">
										<option <?php
														if($this->datos[7]=="DE CENTRO"){
															echo 'selected';
														}
										?> value="DE CENTRO">De centro</option>
										<option <?php
														if($this->datos[7]=="AUTORIZADOR"){
															echo 'selected';
														}
										?>value="AUTORIZADOR">Autorizador</option>
										<option <?php
														if($this->datos[7]=="ADMIN"){
															echo 'selected';
														}
										?>value="ADMIN">Administrador</option>
										</SELECT>
<button type="submit" class="boton" name="action" value="EDIT"><i class="fas fa-plus"></i></button>
<a href="<?php echo $this->enlace;?>"><button type="button" class="boton"><i class="fas fa-times"></i></button></a>



					</form>
					</article>
					<hr>
<?php
include_once "../Views/footer.php";
}

}
?>
