<?php
//include '.model/clientes.php';
$cadexception='';


$nomItem = trim($_POST['nomItem']);
$tamnombre =strlen($nomItem);
if ($tamnombre <3 && $tamnombre >=0){
    $cadexception.=' Nombre muy corto';
}

$vlrUnitario = trim($_POST['vlrUnitario']);
if(!(is_numeric($vlrUnitario))==true){
    $cadexception.=' telefono no es numerico';
}

if(strlen($cadexception)>1){
    $_POST['tabla']='neg_item';
    $_POST['mensaje']=$cadexception;
    include '../../ServicioB/Servicio.php';
}
else{
    include '../model/Item.php';
    $cliente = new Item();
    $cliente->insertItem($nomItem, $vlrUnitario);
}
?>
