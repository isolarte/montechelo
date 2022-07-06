<?php

include 'Registro.php';
$reg= new Registro();
$reg->register($_POST['mensaje'],$_POST['tabla']);
