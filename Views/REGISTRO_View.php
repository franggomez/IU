
<?php/*
`login` varchar(15) NOT NULL,

`password` varchar(128) NOT NULL,

`DNI` varchar(9) NOT NULL,

`nombre` varchar(30) NOT NULL,

`apellidos` varchar(50) NOT NULL,

`telefono` varchar(11) NOT NULL,

`email` varchar(60) NOT NULL,

`FechaNacimiento` date NOT NULL,

`fotopersonal` varchar(50) NOT NULL,

`sexo` enum('hombre','mujer') NOT NULL,
*/
?>
<?php
class REGISTRO_View{

var $enlace;
function __construct($enlace){

	$this -> enlace=$enlace;
	$this ->mostrar();
}
function mostrar(){
	include_once "../Views/cabecera.php";
	?>
<article id="add">
					<h2> <?php echo $GLOBALS['strings']['Centro de Registro'];?> </h2>
<form name="Add" method="post" action="../Controllers/Registro_Controller.php"
enctype="multipart/form-data">
<label>login </label><input type="text" name= "login" maxlength="15" size="25" required onblur= "comprobarVacio(this);comprobarReal(this,3,20,40)">
						<br>
<label><?php echo $GLOBALS['strings']['Contraseña'];?> </label><input type="password"  name="password" maxlength="128" size="22" required onblur="comprobarTexto(this,10)">
		<br>
<label>DNI </label><input type="text"   name="DNI" maxlength="40" size="30" required onblur="comprobarVacio(this);
comprobarDNI(this);"><br>
<label><?php echo $GLOBALS['strings']['Nombre'];?> </label><input type="text" name= "nombre" maxlength="30" size="10" required>
		<br>
		<label><?php echo $GLOBALS['strings']['Apellidos'];?> </label><input type="text" name= "apellidos" maxlength="40" size="10" required>
				<br>
<label><?php echo $GLOBALS['strings']['Foto personal'];?> </label> <input type="file" name= "fotopersonal" maxlength="50" size="30">
<br>

<label><?php echo $GLOBALS['strings']['Sexo'];?></label> <br><input type="radio" name="sexo" value="hombre">
				<?php echo $GLOBALS['strings']['Hombre'];?> <input type="radio" name="sexo" value="mujer" checked><?php echo $GLOBALS['strings']['Mujer'];?>
							 <br>
<label><?php echo $GLOBALS['strings']['Telefono'];?> </label><input type="text" name= "telefono" maxlength="11" size="12" required>
	         <br>
 <label>email</label> <br><input type="email" name="email" >
		<br>
    <label><?php echo $GLOBALS['strings']['Fecha de nacimiento'];?></label> <br><input type="date" name="FechaNacimiento" onkeypress="return false;" >
       <br>

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
