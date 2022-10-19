<?php 

    function rectangle( $width, $height){
        $area = $width*$height;
        // echo $area.'<br>';
        // echo "($width x $height) =  $area".'<br>';
        return $area;
    }

    // void functon --> no return value(null)
    // fucntion --> return value

    function circle($r){
        $areaCircle = pi()*$r*$r;
        return $areaCircle;
    }

    function square($side){
        $areaSquare = $side*$side;
        return $areaSquare;
    }

    echo rectangle(3,7)+rectangle(5,10).'<br>';
    rectangle(3,10);
    circle(20);
    square(200);

    $area1 = rectangle(3,7);
    $area2 = rectangle(5,10);
    $total = $area1+$area2;
    echo $area1+$area2.'<br>';
    echo $total.'<br>';

?>