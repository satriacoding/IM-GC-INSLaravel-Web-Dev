<?php
 require 'animal.php';
 require 'ape.php';
 require 'frog.php';


 $sheep = new animal();
 $sheep-> setName("shaun");

echo "Name: ".$sheep-> getName()."<br>";
echo "legs: ".$sheep-> legs()."<br>";
echo "cold blooded: ".$sheep->cold_blooded()."<br><br>";

$kodok = new frog();
$kodok-> setName("buduk");

echo "Name: ".$kodok-> getName()."<br>";
echo "legs: ".$kodok-> legs()."<br>";
echo "cold blooded: ".$kodok->cold_blooded()."<br>";
echo "jump: ".$kodok->jump()."<br><br>";

$sungokong = new ape();
$sungokong-> setName("kera sakti");

echo "Name: ".$sungokong-> getName()."<br>";
echo "legs: ".$sungokong-> leg()."<br>";
echo "cold blooded: ".$sungokong-> cold_blooded()."<br>";
echo "yell: ".$sungokong-> yell()."<br><br>";


?>