<?php
/**
 * Obtiene todas las articulos de la base de datos
 */

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if ($articulos) {

        $datos["estado"] = 1;
        $datos["articulos"] = $articulos;

        print json_encode($datos);
    } else {
        print json_encode(array(
            "estado" => 2,
            "mensaje" => "Ha ocurrido un error"
        ));
    }
}