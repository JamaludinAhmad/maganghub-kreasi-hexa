<?php


require_once 'Animal.php';

echo "<h2>Release 0: Class Animal</h2>";

$sheep = new Animal("shaun");

echo "Nama: " . $sheep->get_name() . "<br>";
echo "Kaki: " . $sheep->get_legs() . "<br>";
echo "Berdarah Dingin: " . $sheep->get_cold_blooded() . "<br>"; 

echo "<br>";

echo "Nama (via get): " . $sheep->get_name() . "<br>";
echo "Kaki (via get): " . $sheep->get_legs() . "<br>";
echo "Berdarah Dingin (via get): " . $sheep->get_cold_blooded() . "<br>";

echo "<hr>";


require_once 'Ape.php';
require_once 'Frog.php';

echo "<h2>Release 1: Class Ape</h2>";

$sungokong = new Ape("kera sakti");

echo "Nama: " . $sungokong->get_name() . "<br>";
echo "Kaki: " . $sungokong->get_legs() . "<br>";
echo "Berdarah Dingin: " . $sungokong->get_cold_blooded() . "<br>";
echo "Aksi: "; $sungokong->yell();

echo "<hr>";

echo "<h2>Release 1: Class Frog</h2>";

$kodok = new Frog("buduk");

echo "Nama: " . $kodok->get_name() . "<br>";
echo "Kaki: " . $kodok->get_legs() . "<br>";
echo "Berdarah Dingin: " . $kodok->get_cold_blooded() . "<br>";
echo "Aksi: "; $kodok->jump(); 

?>