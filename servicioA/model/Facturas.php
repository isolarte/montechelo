<?php
class Facturas{
   
    
    public function insertFactura($nombre, $valor){
        $mbd = new PDO('mysql:host=localhost;dbname=negocio', 'root','');
        $mbd->exec("insert into neg_item
        (nombre, valor_unitario)VALUES('".$nombre."', ".$valor.")");
    
    }
}

?>