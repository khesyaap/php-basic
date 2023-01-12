<?php
###
# Pertemuan : 4
# Nama File : Konstanta.php
###

// echo "menghitung Volume Bola \n";
// echo "-----------------------\n";

// //Mengunakan Const
// const PI = 3.14;
// echo "Masukkan jari jari bola : ";
// $r = fgets(STDIN);
// $volume = PI * $r * $r * $r;
// echo "Rumus Volume bola adalah V = 3.14 * r * r * r \n";
// echo "Volume Bola adalah " .$volume . "\n";

// //Menggunakan fungsi define()
// //parameter 1 menyatakan nama konstanta,
// //parameter 2 menyatakan nilai konstanta
// echo "Menghitung Luas Permukaan Bola \n";
// echo "-------------------------------\n";

// define('phi', 3.14);
// echo "Masukkan jari jari bola : ";
// $r1 = fgets(STDIN);
// $luas_permukaan_bola = 4* PI * $r1 * $r1;
// echo "rumus luas permukaan bola adalah Lp = 4* PI * $r1 * $r1 \n";
// echo "Luas Permukaan bola adalah ".$luas_permukaan_bola. "\n";

//Mengunakan Const
const PI = 3.14;
echo "Masukkan jari jari tabung : ";
$r = fgets(STDIN);
echo "Masukkan tinggi tabung : ";
$t = fgets(STDIN);
$volume = PI * $r * $r * $t ;
echo "Rumus Volume tabung adalah V = 3.14 * r * t \n";
echo "Volume Tabung adalah " .$volume . "\n";


?>