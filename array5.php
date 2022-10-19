<?php
    function quadratic($a, $b, $c){
        //ax^2 + bX + c = 0
        $t = sqrt($b * $b - 4 * $a * $c);
        $x1 = (-$b - $t)/(2 * $a);
        $x2 = (-$b + $t)/(2 * $a);
        return [$x1, $x2];

    }
    // echo '<pre>';
    // $result = quadratic(2, 7, 3);
    // var_dump($result);
   

    // list($r1, $r2) = quadratic(2,7,3);
    // echo "r1 = $r1, r2 = $r2";
    // echo '</pre>';

    function citylocation($city){
        $location = [
            "bangkok"=>[13.75,100.466],
            "tokyo"=>[35.683,139.683],
            "london"=>[51.507,-.1275]
        ];

        return $location[$city];
    }

    echo '<pre>';
    $geo = citylocation("tokyo");
    echo $geo[0].'<br>';
    echo $geo[1].'<br>';
    var_dump($geo);
    
    list($lat,$lon) = citylocation("london");
    echo $lat.'<br>';
    echo $lon.'<br>';
    echo '</pre>';

?>