<?php

class Articulo
{
    function __construct()
    {
    }

    /**
     * Retorna en la fila especificada de la tabla 'articulo'
     * @param $idcategoria Identificador del registro
     * @return array Datos del registro
     */
    public static function articulos()
    {
        $consulta = "SELECT * FROM articulo";
        try {
            // Preparar sentencia
            $comando = Database::getInstance()->getDb()->prepare($consulta);
            // Ejecutar sentencia preparada
            $comando->execute();

            return $comando->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            return false;
        }
    }

}

?>