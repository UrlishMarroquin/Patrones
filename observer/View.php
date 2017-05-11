<?php

require_once 'Observer.php';

/*¿Cómo luciría llevado a la práctica?*/
 
/*Creamos el objeto*/
$articulo = new Articulo(new \SplObjectStorage());
/*vinculamos el artículo al observer*/
$articulo->attach(new Notify()); 
/*imprimiría en pantalla que se ha comprado*/
echo $articulo->compra('1', '1', '1', 'PARACETAMOL', 'PASTILLAS', 'links', 'A');
echo "<br/>";
/*imprimiría que se ha vendido*/
echo $articulo->vende('1', '1', '1', 'PARACETAMOL', 'PASTILLAS', 'links', 'A'); 

?>