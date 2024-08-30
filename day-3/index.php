<?php


require_once 'animal.php';
require_once 'Frog.php';
require_once 'Ape.php';


$sheep = new Animal("shaun");

// Menampilkan properti dari instance yang baru dibuat
echo $sheep->get_name(); 
echo "<br>";
echo $sheep->get_legs(); 
echo "<br>";
echo $sheep->get_cold_blooded(); 
echo "<br>";
echo "<br>";



// Membuat instance dari kelas Frog
$frog = new Frog("kodok");
echo $frog->get_name(); 
echo "<br>";
echo $frog->get_legs(); 
echo "<br>";
echo $frog->get_cold_blooded(); 
echo "<br>";
$frog->jump();

echo "<br>";
echo "<br>";

// Membuat instance dari kelas Ape
$ape = new Ape("kera sakti");
echo $ape->get_name(); 
echo "<br>";
echo $ape->get_legs();
echo "<br>";
echo $ape->get_cold_blooded(); 
echo "<br>";
echo $ape->yell(); 

?>