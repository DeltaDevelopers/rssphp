<?php
class Funciones
{
  
 public function ConteoDeArchivos()
  {
    //Esta función devuelve el numero de archicos .mp3 de una carpeta (Rediseñar)

    //Obtiene la URL del servidor actual
    $ruta = 'http://' . $_SERVER['HTTP_HOST'] . '/audios/';

    $mp3Totales = scandir($ruta, 1);

    array_pop($mp3Totales);    
    array_pop($mp3Totales); //Esta linea esta doble    
    $mp3Totales = count($mp3Totales);

    //Las 4 lineas anteriores se pueden resumir en
    $mp3Totales = count(scandir($ruta));

    return $mp3Totales;
  }

 public function NombresDeArchivos()
  {
    //Esta función se encarga de obtener los nombres y formato de arvhivos (.mp3) que se encuentran dentro de la carpeta (Rediseñar)
    echo "\nEste script se ejecuta en: " . __DIR__;
    $padre = dirname(__DIR__);
    echo "\nLa ruta del padre es: $padre";
  }
  //Pruebas
public function GetRoot(){
//Obtener el directorio pricipal (Decidir)
    $ruta=$_SERVER["DOCUMENT_ROOT"];
    return $ruta;
  }

}
$usar= new Funciones();
//$usar->NombresDeArchivos();
if (is_dir($usar->GetRoot())) { 
echo 'Esta es la ruta'." ". __FILE__;
}