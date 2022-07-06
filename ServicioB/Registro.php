<?php
class Registro{
    
    public function register($desc_excepcion,$nomb_tabla){
        $mbd = new PDO('mysql:host=localhost;dbname=excepciones', 'root','');
        $mbd->exec("INSERT INTO excepcion_tablas
        (desc_excepcion, nomb_tabla)  VALUES('".$desc_excepcion."', '".$nomb_tabla."')");
    }
}
?>