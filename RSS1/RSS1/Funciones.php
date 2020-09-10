<?php
class Funciones
{
  
 public function ConteoDeArchivos()
  {
    //Esta función devuelve el numero de archicos .mp3 de una carpeta (Rediseñar)
    //scandir(__DIR__ . '/snaps');
    $mp3Totales = scandir('/Audio', 1);
    array_pop($mp3Totales);
    array_pop($mp3Totales);
    $mp3Totales = count($mp3Totales);
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