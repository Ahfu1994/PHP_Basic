<?php
    function swap(&$a, &$b){
        $t = $a;
        $a = $b;
        $b = $t;
    }
    function testSwap(){
        $x = "one";
        $y = "two";
        swap($x, $y);
        echo "x = $x<br>";
        echo "y = $y<br>";
    }

    function passArray($item){
        for ($i=0; $i < count($item); $i++) { 
            $item[$i] = strtoupper($item[$i])."...";
        }
    }

    function passArrayByRef(&$item){
        for ($i=0; $i < count($item); $i++) { 
            $item[$i] = strtoupper($item[$i])."...";
        }
    }

    function testPassArray(){
        $menu = ["coffee", "water", "soda","tea"];
        passArrayByRef($menu);
        for ($i=0; $i < count($menu); $i++) { 
            echo $menu[$i].'<br>';
        }
    }
    testPassArray();
    // testSwap();

?>