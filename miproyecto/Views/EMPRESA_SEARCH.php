<?php

    class SEARCH{
        function __construct(){

            $this->render();
        }

        function render(){
            include 'Header.php';
        
        ?>
        <br>
<form name="añadirbol" action='../Controllers/Empresa_Controller.php?action=SEARCH' method='post'>
    <fieldset>
    <legend><?= $strings['Buscar empresa']?></legend>
      <label for="nombreEmpresa"><?= $strings['Nombre empresa']?></label>
      <input type="text" name="nombreEmpresa" id="nombreEmpresa" size="60" maxlength="60">
      

      <input class="btn" type='submit' name='action' value='<?=$strings['Buscar']?>'>

      <a class="btnvolv" href='../Controllers/Empresa_Controller.php'>
					<p><?=$strings['Volver']?></p> </a>

    </fieldset>
</form>

        <?php
        include '../Views/Footer.php';
        }
    }



?>