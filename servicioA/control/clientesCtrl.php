<?php
//include '.model/clientes.php';
$cadexception='';


$nombre = trim($_POST['namecliente']);
$tamnombre =strlen($nombre);
if ($tamnombre <3 && $tamnombre >0){
    $cadexception.=' Nombre muy corto';
}
else{
    if ($tamnombre >15){
        $cadexception.=' Nombre muy largo';
    }
}

$apellido = trim($_POST['apelCliente']);
$tamapellido =strlen($apellido);
if ($tamapellido <3 && $tamapellido >=0){
    $cadexception.=' Apellido muy corto';
}
else{
    if ($tamapellido >15){
        $cadexception.=' Apellido muy largo';
    }
}

$tel = trim($_POST['tel']);
if(!(is_numeric($tel))==true){
    $cadexception.=' telefono no es numerico';
}

$documento = trim($_POST['documento']);
$tamdocumento =strlen($documento);
    if ($tamdocumento >12){
        $cadexception.=' documento muy largo';
    }


if(strlen($cadexception)>1){
    $_POST['tabla']='neg_clientes';
    $_POST['mensaje']=$cadexception;
    include '../../ServicioB/Servicio.php';
}
else{
    include '../model/clientes.php';
    $cliente = new Clientes();
    $cliente->insertcliente($nombre, $apellido, $tel, $documento,$_POST['fecha']);
}
?>
