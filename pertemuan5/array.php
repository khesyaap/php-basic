<?php
###
# Pertemuan 5
# Array
###

// Make Array (CREATE)
$day = ["Monday", "Tuesday", "Wednesday", "Thrusday", "Friday"];

// Show Array (READ)
// var_dump, print_r
// debugging untuk developer
var_dump($day);
echo "<br>";
print_r($day);
echo "<br>";

// show 1 element in array
echo $day[2];
echo "<br>";

// Add element in Array (UPDATE)
echo "Sebelum di tambah <br>";
print_r($day);
echo "<br>";
echo "Sesudah di tambah <br>";
$day[] = "Saturday";
print_r($day);
echo "<br>";

// HAPUS ELEMENT
unset($day[0]);
print_r($day);




?>