<?php

require_once("./lib/bbdd.php");

$BD = new BD();

$BD->iniciar();


$accion = $_GET["accion"];

$res;

if($accion == "num_visitas"){
    $res = $BD->numeroVisitas();
}
else if($accion == "nova_visita"){
    $res = $BD->novaVisita();
}
else if($accion == "agranda_lua"){
    $res = $BD->agrandaLua();
}
else if($accion == "tam_lua"){
    $res = $BD->tamLua();
}
else if($accion == "reinicia_lua"){
    $res = $BD->reiniciaLua();
}

printf($res);

