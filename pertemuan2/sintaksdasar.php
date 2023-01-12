<?php
// Pertemuan 2 - Latihan 2
// Sintas PHP

// Standar Output
// echo, print
// print_r -> array
// var_dump

//echo
#echo "Hecaamell<br>";
#echo "Ini ", "teks ", "yang ", "dipisah ";
#echo "Ini " . "Teks";


//print
#print "hecaamell";
#print "Heca " ,"Amel";

// print_r
#$nama_siswa = array("Caca", "Acha", "Icha");
#print_r($nama_siswa);

//var_dump
#var_dump("Heca Amel");

//Penulisan Sintaks PHP
// 1. PHP didalam HTML
// HTML didalam PHP

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP</title>
</head>
<body>
    <h1>Hello, Welcome<?php echo "Heca"; ?></h1>
    <p><?php echo "Ini adalah Paragraf"; ?></p>

    <?php
    echo "<h1>Welcome HecaAmel!!</h1>"; 
    ?>
</body>
</html>