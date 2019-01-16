<?php

    class CENTRO_model{

        var $nombreEmpresa;
        var $idCentro;
        var $mysqli;
//este es el constructor
        function __construct($idCentro,$nombreEmpresa){

            $this->idCentro =  $idCentro;
            $this->nombreEmpresa =  $nombreEmpresa;


            include_once '../Models/Access_DB.php';
	        $this->mysqli = ConnectDB();
        }
//los gets de la clase
        function getidCentro(){
            return $this->idCentro;
        }

        function getnombreEmpresa(){
            return $this->nombreEmpresa;
        }

        //Metodo ADD
//Inserta en la tabla  de la bd  los valores
// de los atributos del objeto. Comprueba si la clave/s esta vacia y si 
//existe ya en la tabla
function ADD()
{
   $sql = "SELECT * FROM `CENTROS` WHERE `idCentro` ='".$this->idCentro."'";
    
    $result = $this->mysqli->query($sql);
		if ($result->num_rows == 1){  // existe el boleto
				return 'Ya existe este id';
			}
		else{
            
            $sql = "INSERT INTO CENTROS
                    VALUES (
                        '$this->idCentro',
                        '$this->nombreEmpresa'
                        )";
            if (!$this->mysqli->query($sql)) {
                return 'Error en la inserción';
            }
            else{
                return 'Inserción realizada con éxito'; //operacion de insertado correcta
            }	
		}

}

//funcion SEARCH: hace una búsqueda en la tabla con
//los datos proporcionados. Si van vacios devuelve todos

function DELETE()
{

   $sql = "SELECT * from EMPRESAS WHERE `nombreEmpresa` = '".$this->nombreEmpresa."' ";
   $result = $this->mysqli->query($sql);

   if($result->num_rows == 0){
       return 'No existe esta empresa';
   }else{
       $sqlBorrar = "DELETE FROM EMPRESAS WHERE `nombreEmpresa` = '".$this->nombreEmpresa."'";
       if(!$this->mysqli->query($sqlBorrar)){
           return 'error en el borrado';
       }else{
        $this->borrarfoto($dirRes);
           return 'Borrado realizado';
       }
   }
}

//funcion que te enseña todos los boletos de la base de datos
function SHOWALL(){
        $sql = "SELECT * FROM CENTROS WHERE `nombreEmpresa` ='".$this->nombreEmpresa."'";
        $result = $this->mysqli->query($sql);
        $datos = array();
        if($result ->num_rows >0){

            while($tupla = mysqli_fetch_assoc($result)){
                array_push($datos, new CENTRO_model($tupla['idCentro'],$tupla['nombreEmpresa']));
                // $tuplas[$j] = $tupla;
                // $j++;
            }
           // var_dump($datos);
            return $datos;
        }
        else{
            return  false;
        }
    }
    }

?>