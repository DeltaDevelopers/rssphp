<?php
//plantilla de RSS
include_once 'Funciones.php';
$usarfunciones= new Funciones();
$cancion=$usarfunciones->ListaDeNombres();
$conteo=$usarfunciones->ConteoDeArchivos();
$url='"http://localhost/audios/';
$tope=0;

header("Content-Type: application/rss+xml; charset= ISO-8859-1");

echo "<?xml version='1.0' encoding='ISO-8859-1' ?>";
?>
<rss version="2.0">
<channel>
<title>Título de la Página Web</title>
<description>Descripción de la Página Web</description>
<link>http://www.TuPaginaWeb.com</link>
<?php

do{//20

echo "<item>\n";
echo "<title>".$cancion[$tope]."</title>\n";
echo "<description></description>\n";
echo "<link>http://www.TuPaginaWeb.com/"."</link>\n";
echo "<pubDate></pubDate>"."\n";
echo "<enclosure url=".$url.$cancion[$tope].'" type="audio/mpeg" />';
echo "\n</item>\n";

$tope=$tope+1;
}while($tope<$conteo);

?>
</channel>
</rss>