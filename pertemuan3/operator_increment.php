<?php
###
# Pertemuan : 3
# Nama File  : operator_increment.php
###

echo "Masukkan Nilai a:  ";
$a = fgets(STDIN);

echo "Pre-Increment \n";
echo "Niali " .$a . "Sebelum ditambahin : " . $a . "\n";
echo "Nilai ++$a: " . ++$a . "\n";
echo "Nilai setelah ditambah: ".$a . "\n";

echo "\n";
# Mengembalikan nilai $a ke nilai 5;
// $a1 = 5;
echo "Post-Increment \n";
echo "Nilai " . $a . "sebelum ditambah : " . $a . "\n";
echo "Nilai $a++ : " . $a++ . "\n";
echo "Nilai setelah ditambah: " .$a++ . "\n";

?>