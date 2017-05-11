<?php

require_once 'Composite.php';
require_once 'Left.php';


  $firstArt = new OneArticulo('1', '1', '1', 'PARACETAMOL', 'PASTILLAS', 'links', 'A');
 
  $secondArt = new OneArticulo('1', '1', '1', 'IBUPROFENO', 'PASTILLAS', 'links', 'A');

  $arts = new SeveralArticulos();

  $artsCount = $arts->addArt($firstArt);
  writeln('{"estado":1,"articulos":[' . $arts->getArtInfo($artsCount) . ", ");

  $artsCount = $arts->addArt($secondArt);
  writeln($arts->getArtInfo($artsCount) . "]}");

  function writeln($line_in) {
    echo $line_in."<br/>";
  }

?>