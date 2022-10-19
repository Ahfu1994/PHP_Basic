<?php 
    function demo1(){
        $s ="coffee,tea,water";
        $item = explode(",",$s);//return array
        print_r($item);

    }

    function splitName($name){
        $item = explode(" ", $name);
        return $item;
    }

    function parseRaiNganWah($area){
        $item = explode("-",$area);
        return $item;
    }

    echo "<pre>";
    demo1();
    splitName("chiradet kho");
    list($rai,$ngan,$wah) = parseRaiNganWah("4-3-25");
    echo "$rai ไร่ $ngan งาน $wah ตารางวา";
    echo "</pre>";

    



?>