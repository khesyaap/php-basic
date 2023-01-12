<?php
###
# Pertemuan 6
# Variabel Scope
###

// Variabel Scope/Lingkup Variabel
$x = 10;

// Variabel lokal didalam fungsi
function tampilX(){
    global $x;
    $x = 20;
    echo $x;
}

tampilX();

var_dump($_SERVER);

?>