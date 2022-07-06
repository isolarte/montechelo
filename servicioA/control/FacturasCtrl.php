<?php
$cad='';
switch ($_POST['accion']){
    case 'getCliente':
        include '../model/clientes.php';
        $cliente = new Clientes();
        $rs = $cliente->getCliente();
       foreach($rs as $key=>$val){
           $cad.="<option value='".$val['id']."'>".$val['name']."</option>";
       }
       return $cad;
    break;
}

?>