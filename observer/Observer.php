<?php

require_once 'Subject.php';

class Notify implements \SplObserver /*seguimos con lai implementacion del observer*/
{
    public function update(\SplSubject $subject, $event = '')
    {
        if ($event == 'comprado')
            echo 'El artículo se ha comprado' . PHP_EOL;
        else if ($event == 'vendido')
            echo 'El artículo se ha vendido' . PHP_EOL;
    }
}

?>