<?php

    class Login{

        function __construct(){
            $this->render();
        }
        
        function render(){

            include '../Views/Header.php';
?>
            <br>
            <form name="Form" action='../Controllers/Login_Controller.php' method='post' onsubmit="return comprobar_Login();">
                <fieldset>
                <legend><h1><?php echo $strings['Login']; ?></h1></legend>

                <label for="login">Login</label>
                <input type = 'text' name = 'login' placeholder = 'Utiliza tu Dni' size = '50' onblur="comprobarTexto(this,this.size)"  ><br>
                     
                <label for="password"><?=$strings['Contraseña']?></label>
                <input type = 'password' name = 'password' placeholder = 'Letras y numeros' size = '50' onBlur="comprobarTexto(this,this.size)"><br>
 
                <input class="btn" type='submit' name='action' value='Login' onclick="comprobarFormulario()">

                <a class="texto"><?= $strings['Si no estas registrado hazlo']; ?></a>
		        <a class="btnregister" href='../Controllers/Register_Controller.php'><?=$strings['Registrarse']?></a>

                </fieldset>
            </form>
<?php
			include '../Views/Footer.php';
		} //fin metodo render

	} //fin Login
?>