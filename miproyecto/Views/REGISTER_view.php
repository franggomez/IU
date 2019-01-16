<?php

	class Register{


		function __construct(){	
			$this->render();
		}

		function render(){

			include '../Views/Header.php'; //header necesita los strings
		?>	
		<br>
			<form name = 'Form' enctype="multipart/form-data" action='../Controllers/Register_Controller.php' method='post'>
				<fieldset>

					<legend><h1><?php echo $strings['Registro']; ?></h1></legend>

					<label for="login"><?=$strings['Login']?></label> 
					<input type = 'text' name = 'login' id = 'login' size = '40' onBlur="comprobarTexto(this,this.size)" required><br>
					<label for="Password"><?=$strings['Contraseña']?></label>
					<input type = 'password' name = 'password' id = 'password' size = '50' onBlur="comprobarTexto(this,this.size)" required><br>
					<label for="DNI">DNI</label>
					<input type = 'text' name = 'DNI' id = 'DNI' size = '9' maxlength="9" onBlur="comprobarDNI(this)" required><br>
					<label for="Nombre"><?=$strings['Nombre']?></label>
					<input type = 'text' name = 'nombre' id = 'nombre' placeholder = 'Solo letras' size = '30' onBlur="comprobarAlfabetico(this,this.size)" required><br>
					<label for="Apellidos"><?=$strings['Apellidos']?></label>
					<input type = 'text' name = 'apellidos' id = 'apellidos' placeholder = 'Solo letras' size = '50' onBlur="comprobarAlfabetico(this,this.size)" required><br>
					<label for="Telefono"><?=$strings['Telefono']?></label> 
					<input type = 'text' name = 'Telefono' id = 'Telefono' size = '40' value = '+34' onBlur="comprobarTelf(this)" required><br>
					<label for="Email">Email</label>
					<input type = 'text' name = 'email' id = 'email' size = '40' onBlur="comprobarEmail(this)" required><br>
                    <label for="Email">Tipo de Usuario</label>
					<input type = 'text' name = 'TipUser' id = 'TipUser' size = '40' required readonly value='DE CENTRO'><br>

					<input class="btn" type='submit' name='action' value='<?=$strings['Registrar']?>' onclick="return comprobarRegister()">

					<a class="btnvolv" href='../Controllers/Loteriaiu_Controller.php'> <!-- ---------------------------------------------------------------------- -->
					<p><?=$strings['Volver']?></p> </a>

				</fieldset>
			</form>

		<?php
			include '../Views/Footer.php';
		} //fin metodo render

	} //fin REGISTER