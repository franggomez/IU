
<?php

    class SHOWALL{

        function __construct($datos){
            //aqui le pasamos los datos de la tabla showall
            $this->datos = $datos;
            $this->render();
        }


        function render(){
            include '../Views/Header.php';
            $lista = array($strings['nombreEmpresa']);

?>
    <div class="tabla">
        <caption>SHOWALL</caption>
    </div>
        <table id="tableForm">
            <thead>
               <?php foreach($lista as $titulo){ ?>
                   <th><?=$titulo?></th>
              <?php } ?>
                    <th><button><a href="../Controllers/Empresa_Controller.php?action=ADD"><i class="fa fa-plus" aria-hidden="true"></i></a></button>
                        
                    </th>
            </thead>
            <tbody>
                
                    
                        <?php foreach($this->datos as $empresa){ ?>
                            <tr>
                            <td><?=$empresa->getnombreEmpresa()?></td>
                            <td><button><a href="../Controllers/Centro_Controller.php?nombreEmpresa=<?=$empresa->getnombreEmpresa()?>">centros</a></button></td>
                            </tr>

                       <?php } ?>
                
               
            </tbody>

        </table> 





         <?php 
        include '../Views/Footer.php'; 
        }
    }



?>