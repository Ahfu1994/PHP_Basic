<?php 
    function loop1($num){
        for ($i=0; $i <= $num; $i++) { 
            echo $i.'<br>';
        }
    }
    loop1(10);

    function loop2($num){
        for ($i=0; $i <= $num; $i+=2) { 
            echo $i.'<br>';
        }
    }
    loop2(10);

    function sum($num){
        $total = 0;
        for ($i=0; $i <= $num; $i++) { 
            $total = $total + $i;
        }
        return $total;
    }
    echo sum(100).'<br>';

    function sumOdd($num){
        $total = 0;
        for ($i=0; $i <= $num; $i+=2) { 
            // $total = $total + $i;
            $total += $i;
        }
        return $total;
    }
    echo sumOdd(100).'<br>';

    function countDown($num){
        for ($i= $num; $i > 0; $i--) { 
           echo $i.'<br>';
        }
    }
    countDown(10);
?>