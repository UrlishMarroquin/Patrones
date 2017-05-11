<?php

require_once 'Component.php';

class SeveralArticulos extends Articulo {
    private $oneArts = array();
    private $artCount;
    public function __construct() {
      $this->setArtCount(0);
    }
    public function getArtCount() {
      return $this->artCount;
    }
    public function setArtCount($newCount) {
      $this->artCount = $newCount;
    }
    public function getArtInfo($artToGet) {   
      if ($artToGet <= $this->artCount) {
        return $this->oneArts[$artToGet]->getArtInfo(1);
      } else {
        return FALSE;
      }
    }
    public function addArt($oneArt) {
      $this->setArtCount($this->getArtCount() + 1);
      $this->oneArts[$this->getArtCount()] = $oneArt;
      return $this->getArtCount();
    }
    public function removeArt($oneArt) {
      $counter = 0;
      while (++$counter <= $this->getArtCount()) {
        if ($oneArt->getArtInfo(1) == 
          $this->oneArts[$counter]->getArtInfo(1)) {
          for ($x = $counter; $x < $this->getArtCount(); $x++) {
            $this->oneArts[$x] = $this->oneArts[$x + 1];
          }
          $this->setArtCount($this->getArtCount() - 1);
        }
      }
      return $this->getArtCount();
    }
}

?>