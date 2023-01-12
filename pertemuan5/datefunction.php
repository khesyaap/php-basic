<?php

###
# Pertemuan 5
# buil-it function
###

// function date
// l -> nama hari
echo date("M");
echo "<br>";
echo date("l, d-M-Y");
echo"<br>";


// function time
// UNIX TIMESTAMP / EPOCH TIME
echo time();
echo "<br>";
echo date("l", time()+60*60*24*2);
echo date("l", time()-60*60*24*100);
echo "<br>";
echo date("d M Y", time()+60*60*29*1982);
echo"<br>";
// 60 -> detik
// 60 -> jam
// 24 -> jam dalam sehari
// 2 -> hari yang mau ditebak

// mktime -> fungsi untuk membuat detik sendiri
// mktime(0,0,0,0,0,0)
// jam, menit. detik, bulan, tanggal, tahun
echo mktime(0,0,0, 2, 9, 2006);
echo date("l", mktime(0,0,0, 2, 9, 2006));
echo "<br>";

//strtotime()
// masukin format tanggal 
// kebalikan dari mktime inputannya string
echo strtotime("6 mei 2022");

?>