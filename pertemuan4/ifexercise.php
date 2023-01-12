<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan PHP</title>
</head>
<body>
    <?php
    // $n = score("S");

    // if($n > "90") {
    //     echo "Nilai kamu: 95 \n Grade : A+";
    // }elseif($n > "80") {
    //     echo "Nilai kamu: 85 \n Grade : A";
    // }
    ?>

    <?php
    // $score = 2;
    // if ($score == 1) {
    //     echo "Nilai kamu : 95 \n Grade : A+";
    // }elseif($score == 2) {
    //     echo "Nilai kamu : 85 \n Grade : A";
    // }
    ?>

    <?php
    $number = 95;
    if ($number > 90 ){
        echo $number . "Grade A+" ;
    }elseif ($number > 80){
        echo $number . "Grade A";
    }elseif ($number > 70){
        echo $number . "Grade B+/n";
    }elseif ($number > 60){
        echo $number . "Grade B";
    }elseif ($number > 50){
        echo $number . "Grade C+";
    }elseif ($number > 40){
        echo $number . "Grade C";
    }elseif ($number > 30){
        echo $number . "Grade D";
    }elseif ($number > 20){
        echo $number . "Grade E";
    }else{
        echo "Geade F";
    }
    ?>

</body>
</html>