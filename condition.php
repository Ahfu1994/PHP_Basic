<?php 
    $age = 25;
    if($age > 10 && $age <= 60){
        echo "pay full bus fare".'<br>';
        echo "have a nice day";
    }
    else {
        echo "free";
        echo "enjoy your ride".'<br>';
    }
    echo '<br>';
    // $scoreMath  = 80;
    // $scoreEnglish = 85;
    // if ($scoreMath > 60 || $scoreEnglish > 70) {
    //     echo "congratulation";
    // }
    // else {
    //     echo "sorry";
    // }

    function checkScore($scoreMath,$scoreEnglish){
        if ($scoreMath > 60 || $scoreEnglish > 70) {
            return "congratulation";
        }
        else {
            return "sorry";
        }
    }

    echo checkScore(80, 80);
?>