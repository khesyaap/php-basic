<?php
###
# Konversi Suhu
###

function konversiSuhu($celcius){
    $f = 9/5*celcius+32;
}
echo "Masukkan suhu celcius anda";
$celcius = fgets(STDIN);
echo "Suhu" . $celcius . "ke Farenheit adalah" . konversiSuhu(10);

?>