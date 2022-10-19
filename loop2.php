<?php 
    function atmPin($length){
        $pin = "";
        for ($i=1; $i <= $length; $i++) { 
            $pin = $pin.rand(0,9);
        }
        return $pin;
    }

    for ($i=1; $i <= 10; $i++) { 
        echo atmPin(7).'<br>';
    }
    
    function nestedLoop(){
        for ($i=1; $i <= 9; $i++) { 
            for ($j=1; $j <= $i; $j++) { 
                echo $i;
            }
            echo '<br>';
        }
    }
    nestedLoop();

?>