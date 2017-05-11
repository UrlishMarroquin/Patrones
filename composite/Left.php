<?php

require_once 'Component.php';

class OneArticulo extends Articulo {
    private $idarticulo;
    private $idcategoria;
    private $idunidad_medida;
    private $nombre;
    private $descripcion;
    private $imagen;
    private $estado;                   
    function __construct(
        $idarticulo, $idcategoria, $idunidad_medida, $nombre, 
        $descripcion, $imagen, $estado
      ) 
    {
      $this->idarticulo       = $idarticulo;
      $this->idcategoria      = $idcategoria;
      $this->idunidad_medida  = $idunidad_medida;
      $this->nombre           = $nombre;
      $this->descripcion      = $descripcion;
      $this->imagen           = $imagen;
      $this->estado           = $estado;                              
    }
    function getArtInfo($artToGet) {
      if (1 == $artToGet) {
        $miArray = array(
          "idarticulo"=>$this->idarticulo, "idcategoria"=>$this->idcategoria, 
          "idunidad_medida"=>$this->idunidad_medida, "nombre"=>$this->nombre, 
          "descripcion"=>$this->descripcion, "imagen"=>$this->imagen, 
          "estado"=>$this->estado);
        return json_encode($miArray);
        //return $this->nombre." by ".$this->descripcion;
      } else {
        return FALSE;
      }
    }
    function getArtCount() {
      return 1;
    }
    function setArtCount($newCount) {
      return FALSE;
    }
    function addArt($oneArt) {
      return FALSE;
    }
    function removeArt($oneArt) {
      return FALSE;
    }
}

?>