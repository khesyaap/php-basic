<?php
$student = ["Khesya Amel", "1177060079", "Programmer", "khesyaamel@idn.sch.id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Student</title>
</head>
<body>
    <?php foreach($student as $value){
        echo "$value <br>";
    }
    ?>
</body>
</html>