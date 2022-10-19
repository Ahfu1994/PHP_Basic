<?php 
    function demo1(){
        $s = "over the rainbow";
        $p = "0123456789012345";
        echo $s.'<br>';
        echo $p.'<br>';
        echo substr($s,3,1).'<br>';
        echo substr($s,5,3).'<br>';
        echo substr($s,5).'<br>';
        echo substr($s,-3).'<br>';//count the tail to front
        echo substr($s,-3,1).'<br>';
        echo substr($s,-3,2).'<br>';
        echo substr($s,-7).'<br>';
        echo substr($s,9,7).'<br>';
        echo substr($s,9).'<br>';
    }
    echo '<pre>';
    demo1();
    echo '</pre>';

    function datePart($yyyymmdd){
        $y = substr($yyyymmdd,0,4);
        $m = substr($yyyymmdd,4,2);
        $d = substr($yyyymmdd,6,2);

        echo "$y $m $d".'<br>';
    }
    datePart("19950807");

    function sumPhoneNumber($s){
        $sum = 0;
        for ($i=0; $i < strlen($s); $i++) { 
            $c = substr($s,$i,1);
            $sum = $sum + $c;
        }
        return $sum;
    }
    echo '<pre>';
    echo sumPhoneNumber("0949804149");
    echo '</pre>';


