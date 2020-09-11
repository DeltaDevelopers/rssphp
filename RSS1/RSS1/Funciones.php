<?php
class Funciones{  

  public function ConteoDeArchivos(){
    //Esta función devuelve el numero de archivos .mp3 de una carpeta (Rediseñar)

    //Obtiene la URL del servidor actual(pendiente)
   /* $ruta = 'http://' . $_SERVER['HTTP_HOST'] . '/audios';*/

   $ruta="../audios";
   $listaDeNombres=scandir("../audios");

       $mp3Totales = scandir($ruta, 1);
    /*
    Estás 4 lineas son para eliminar los elementos "." y ".." del Array

    array_pop($mp3Totales);    
    array_pop($mp3Totales); //Esta linea esta doble    
    $mp3Totales = count($mp3Totales);*/

    //Las 4 lineas anteriores se pueden resumir 

    $mp3Totales = count(scandir($ruta))-2;

    echo '<br>('.$mp3Totales.') Archivos totales';

     foreach($listaDeNombres as $nombre){
        echo $nombre.'<br>';
        }

     } 

  }

