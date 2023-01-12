<?php

###
# StudyCase PHP
###



#SkinType
function skinType($nama_produk, $skin_type){
    return $skin_type;
}

// memanggil fungsi skinType()
$skin_type = skinType("Azarine Sunscreen", "For All Skin");
$skin_type2 = skinType("Toner Hatamogi", "For Combination to Dry");
$skin_type3 = skinType("Cetaphil DermaControl Oil", "For Oily Skin");

echo "Azarine Sunscreen : " . $skin_type . "<br>";
echo "Toner Hatamogi : " . $skin_type2 . "<br>";
echo "Cetaphil DermaControl : " . $skin_type3 . "<br>";
echo "<br>";


#Miniso
function minDoll($name_doll, $harga, $diskon){
    return $harga - ($harga * ($diskon/100));
}

// memanggil fungsi minDoll()
$harga = minDoll("Penyu Melar", 349000, 30, 20);
$harga2 = minDoll("Penguin Pesawat", 279000, 30, 34);
$harga3 = minDoll("Ice Bear", 119000, 10, 15);

// menampilkan hasil perkalian
echo "Harga Penyu Melar : " . $harga . "<br>";
echo "Harga Penguin Pesawat : " . $harga2 . "<br>";
echo "Harga Ice Bear : " . $harga3 . "<br>";
echo "<br>";


#Perkalian, Pertambahan, Pengurangan, Pembagian
function perkalian($x, $y) {
    $z = $x * $y;
        return $z;
    }

    echo "Nilai 11 * 25 = " . perkalian(11,25). "<br>";
    echo "Nilai 5 * 8 = " . perkalian(5,8). "<br>";
    echo "<br>";


function pertambahan($x, $y) {
    $z = $x + $y;
        return $z;
    }
    
    echo "Nilai 17 + 86 = " . pertambahan(17,86). "<br>";
    echo "Nilai 24 + 98 = " . pertambahan(24,98). "<br>"; 
    echo "<br>";


function Pengurangan($x, $y) {
    $z = $x - $y;
        return $z;
    }
        
    echo "Nilai 36 - 12 = " . pengurangan(36,12). "<br>";
    echo "Nilai 57 - 48 = " . pengurangan(57,48). "<br>"; 
    echo "<br>";
    
    
function pembagian($x, $y) {
    $z = $x / $y;
        return $z;
    }
        
    echo "Nilai 76 / 15  = " . pembagian(76,15). "<br>";
    echo "Nilai 35 / 3 = " . pembagian(35,3). "<br>"; 
    echo "<br>";


#Luas Persegi Panjang
function prsgiLong($p, $l){
    return $p * $l;
}
// memanggil fungsi
$hasil = $p * $l;
