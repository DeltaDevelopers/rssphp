<?php

include_once 'Funciones.php';
$saluod = "Genera un RSS a partir de los archivos mp3 de una carpeta";

echo $saluod;

//La funcion var_dump nos ayuda a visualizar el valor de una variable sin tener que detener la 
//ejecucion del scrip
var_dump($saluod);

//llamamos a la funcion de conteo
$funciones = new Funciones();

var_dump($funciones->ConteoDeArchivos());