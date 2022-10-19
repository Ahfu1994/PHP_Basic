<?php 
    function demo(){
        $menu = ["coffee", "tea", "water", "soda"];
        $s = implode(":",$menu);// concat string with ':'
        echo $s.'<br>';
    }

    function demo2(){
        $menu = ["coffee", "tea", "water", "soda"];
        $s = "'".implode("','",$menu)."'";
        echo $s.'<br>';
    }

    function demo3(){
        $menu = ["coffee", "40", "water", "15.5"];
        $s = "'".implode("','",$menu)."'";
        echo $s.'<br>';
    }
    demo();
    demo2();
    demo3();

?>