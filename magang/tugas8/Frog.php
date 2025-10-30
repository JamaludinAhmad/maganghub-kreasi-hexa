<?php

require_once 'Animal.php';

class Frog extends Animal
{
  public $cold_blooded = "yes";
  
  public function jump()
    {
        echo "hop hop <br>";
    }
}

?>