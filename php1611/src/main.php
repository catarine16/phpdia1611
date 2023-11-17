<?php
include_once __DIR__ . "/../vendor/autoload.php";
use App\model\Dog;

$d = new Dog("Karl Max","vira-lata", 5, "Cleber" );
echo "<h1> nome do cachorro:<h1>";
echo $d->nome ."<br>";
echo "<h1> raça do cachorro:<h1>";
echo $d->raca . "<br>";
echo "<h1> idade do cachorro:<h1>";
echo $d->idade ."<br>";
echo "<h1> dono do cachorro:<h1>";
echo $d->dono . "<br>";

$d = new Dog("Diguin","Spitz Alemão", 10, "Cida" );
echo "<br>";
echo "<h1> nome do cachorro:<h1>";
echo $d->nome ."<br>";
echo "<h1> raça do cachorro:<h1>";
echo $d->raca . "<br>";
echo "<h1> idade do cachorro:<h1>";
echo $d->idade ."<br>";
echo "<h1> dono do cachorro:<h1>";
echo $d->dono . "<br>"

?>