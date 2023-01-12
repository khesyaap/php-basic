<?php
###
# Pertemuan 5
# Pengulangan
###

// for
for ($i=0; $i<5; $i++){
    echo "Baris ke-$i <br>";
}

// Example While
$x = 0;

while($x <= 100) {
    echo "The number is: $x <br>";
    $x+=10;
}

// Do While
// Example 1
$x = 1;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);

// Foreach
// Example 1
$colors = array("peach", "blue", "grey", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}

//Foreach
// Example 2
$age = array(
    "Peter"=>"15",
    "William"=>"13",
    "Jhansen"=>"12");

    foreach($age as$x => $val){
        echo "$x = $val<br>";
    }
?>
