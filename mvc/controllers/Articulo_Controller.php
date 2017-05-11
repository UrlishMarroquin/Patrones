<?php
//Llamada al modelo
require_once("models/Articulo_Model.php");
// Manejar petición GET
$articulos = Articulo::articulos();
 
//Llamada a la vista
require_once("views/Articulos_json_View.php");
?>