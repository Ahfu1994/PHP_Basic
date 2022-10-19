<?php 

    function rectangle( $width, $height){
        $area = $width*$height;
        echo $area.'<br>';
        echo "($width x $height) =  $area".'<br>';
    
    }

    function circle($r){
        $areaCircle = pi()*$r*$r;
        echo $areaCircle.'<br>';
    }

    function square($side){
        $areaSquare = $side*$side;
        echo $areaSquare.'<br>';
    }

    rectangle(3,7);
    rectangle(3,10);
    circle(20);
    square(200);

?>