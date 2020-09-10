<?php

//plantilla de RSS
include_once 'Funciones.php';
$usarfunciones= new Funciones();
header("Content-Type: application/rss+xml; charset= ISO-8859-1");

$titulo_Rss='';
$miFeed = '<?xml version="1.0" encoding="ISO-8859-1"?>';
    $miFeed .= '<rss version="2.0">';

    $miFeed .= '<channel>';

    $miFeed .= '<title>Oh!! My RSS feed</title>';

    $miFeed .= '<link>http://www.mywebsite.com</link>';

    $miFeed .= '<description>This is an example RSS feed</description>';

    $miFeed .= '<language>en-us</language>';

    $miFeed .= '<copyright>Copyright (C) 2009 mywebsite.com</copyright>';

