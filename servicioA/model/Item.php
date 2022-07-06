<?php
class Item{
   
    
    public function insertItem($nombre, $valor){
        $mbd = new PDO('mysql:host=localhost;dbname=negocio', 'root','');
        $mbd->exec("insert into neg_item
        (nombre, valor_unitario)VALUES('".$nombre."', ".$valor.")");
    
    }
    public function getItem(){
        $mbd = new PDO('mysql:host=localhost;dbname=negocio', 'root','');
        $rs = $mbd->exec("select id,nombre, valor_unitario from neg_item order by nombre asc");
        unset($mbd);
        return $rs;
    }
}

?>