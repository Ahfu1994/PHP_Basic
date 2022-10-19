<?php 

    function demo1(){
        $s = "Thailand , the Land of Smile";
        echo strtolower($s).'<br>';
        echo strtoupper($s).'<br>';
        echo ucwords($s).'<br>'; // first char of string uppercase
        echo ucfirst($s).'<br>';
    }
    // demo1();

    function demo2(){
        $menu = ["coffee", "tea", "sode", "water"];
        foreach($menu as $item){
            echo strtoupper($item).'<br>';
            echo strtolower($item).'<br>';
            echo ucwords($item).'<br>';
            echo ucfirst($item).'<br>';
        }
    }
    demo2();