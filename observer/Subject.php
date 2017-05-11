<?php

require_once 'Observer.php';

class Articulo implements \SplSubject /*Importando la interfaz del sujeto*/
{
    protected $storage;
 
    public function __construct(\SplObjectStorage $storage)
    {
        $this->storage = $storage;
    }
 
    public function compra($idarticulo, $idcategoria, $idunidad_medida, $nombre, 
        $descripcion, $imagen, $estado)
    {
        $miArray = array(
          "idarticulo"=>$idarticulo, "idcategoria"=>$idcategoria, 
          "idunidad_medida"=>$idunidad_medida, "nombre"=>$nombre, 
          "descripcion"=>$descripcion, "imagen"=>$imagen, 
          "estado"=>$estado);
            // compra
            $this->notify('comprado');
            return json_encode($miArray);
    }
 
    public function vende($idarticulo, $idcategoria, $idunidad_medida, $nombre, 
        $descripcion, $imagen, $estado)
    {
        $miArray = array(        
          "idarticulo"=>$idarticulo, "idcategoria"=>$idcategoria, 
          "idunidad_medida"=>$idunidad_medida, "nombre"=>$nombre, 
          "descripcion"=>$descripcion, "imagen"=>$imagen, 
          "estado"=>$estado);
            // vendido
            $this->notify('vendido');
            return json_encode($miArray);
    }
 
    public function attach(\SplObserver $observer)
    {
        $this->storage->attach($observer);
    }
 
    public function detach(\SplObserver $observer)
    {
        $this->storage->detach($observer);
    }
 
    public function notify($event = '')
    {
        foreach ($this->storage as $observer)
            $observer->update($this, $event);
    }
}

?>