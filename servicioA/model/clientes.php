<?php
class Clientes{
   
    
    public function insertcliente($nombre, $apellido, $telefono, $identificacion, $fecha_nacimiento=null){
        $mbd = new PDO('mysql:host=localhost;dbname=negocio', 'root','');
        $mbd->exec("insert into neg_clientes (nombre, apellido, telefono, identificacion,fecha_nacimiento) 
            values ('".$nombre."','".$apellido."',".$telefono.", '".$identificacion."','".$fecha_nacimiento."')");
        unset($mbd);

    }

    public function getCliente(){
        $mbd = new PDO('mysql:host=localhost;dbname=negocio', 'root','');
        // $rs = $mbd->exec("select id,nombre from neg_clientes order by 1 asc");
        $rs= "select id, concat_ws(' ', nombre, apellido) as name from neg_clientes order by 1 asc";
        $rs= $mbd->prepare($rs);
        $rs->execute();//(PDO::FETCH_ASSOC);
        $results = $rs->fetchAll();
        unset($mbd);
        return $results;
    }
}

?>