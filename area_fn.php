<?php 
    function rectangle(){
        $width = 5;
        $height = 10;
        $area = $width*$height;
        echo $area.'<br>';
        echo "($width x $height) =  $area".'<br>';
    
    }

    function circle(){
        $r = 10;
        $areaCircle = pi()*$r*$r;
        echo $areaCircle.'<br>';
    }

    function square(){
        $side = 10;
        $areaSquare = $side*$side;
        echo $areaSquare.'<br>';
    }

    rectangle();
    circle();
    square();

?>