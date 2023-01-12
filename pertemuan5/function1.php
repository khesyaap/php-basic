<?php
function salam($waktu, $nama){
    return "Selamat" . $waktu . " " . $nama;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Latihan Function</title>
</head>
<body>
    <h1><?php echo salam("Pagi", "Camel"); ?></h1>
</body>
</html>