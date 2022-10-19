<?php 
    function demo1(){
        $p = "0123456789012345";
        $s= "over the rainbow";
        echo $p.'<br>';
        echo $s.'<br>';
        $f = "E";
        $pos = stripos($s,$f,3);//return interger find e after 3 index
        if ($pos !== false) {
            echo "fond $f at position $pos<br>";
        }
        else {
            echo " '$f'  not found<br>";
        }
    }

    // echo '<pre>';
    // demo1();
    // echo '</pre>';

    function phoneAlpha($s){
        $alpha = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $number = "22233344455566677778889999";
        $t = "";
        for ($i=0; $i < strlen($s); $i++) {

           $pos = stripos($alpha, $s{$i});

           if ($pos !== false) {
            $t .= $number{$pos};
           }
           else {
            $t .= $s{$i};
           }
        }
        return $t;
    }
    echo '<pre>';
    echo phoneAlpha("094-chirade");
    echo '</pre>';

