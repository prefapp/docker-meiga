<?php

function validar_entorno(){

    $valido = true;

    if(!isset($_ENV["DOCENTE"])){
        $valido = false;
    }

    if(!isset($_ENV["CURSO"])){
        $valido = false;
    }   

    return $valido;
}
