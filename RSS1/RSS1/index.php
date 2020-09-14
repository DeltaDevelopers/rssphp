<?php
class Funciones{  

  public function ConteoDeArchivos(){
    //Esta función devuelve el numero de archivos .mp3 de una carpeta (Rediseñar)

    //Obtiene la URL del servidor actual(pendiente)
   /* $ruta = 'http://' . $_SERVER['HTTP_HOST'] . '/audios';*/

   $ruta="../audios";
   $mp3Totales = scandir($ruta, 1);
    $mp3Totales = count(scandir($ruta))-2;
    return $mp3Totales;
     } 
  public function ListaDeNombres(){
  //Esta función devuelve en un arreglo los nombres de los archivos
     $listaDeNombres=scandir("../audios",1);
        array_pop($listaDeNombres);
	array_pop($listaDeNombres);
//Estas lineas repetidas son para eliminar "." y ".." de los elementos del Array

       //foreach($listaDeNombres as $nombre){
        //$listaDeNombres=$nombre;
        //}

        return $listaDeNombres;
     }

  }

