<?php

abstract class Articulo {
    abstract function getArtInfo($previousArt);
    abstract function getArtCount();
    abstract function setArtCount($new_count);
    abstract function addArt($oneArt);
    abstract function removeArt($oneArt);
}

?>