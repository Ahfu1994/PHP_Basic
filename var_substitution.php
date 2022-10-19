<?php 
    function demo1(){
        $menu = "coffee";
        $price = 40;
        echo "our favorite menu is $menu, price = $price".'<br>';
        printf("our favorite mune is %s, price = %d", $menu,$price);
   
    }
    // demo1();

    function demo2(){
        $n = 7;
        echo "the {$n}th son."."<br>";
        echo "the  $n th son."."<br>";
    }
    // demo2();

    function demoArray(){
        $menu = ["coffee", "tea", "water"];
        echo "our favorite menu is $menu[1]".'<br>'; 
        echo "our favorite menu is {$menu[0]}".'<br>'; 
    }
    demoArray();

    function demoAssocArray(){
        $countries = ["th"=>"Thailand","jp"=>"Japanese"];
        echo "my country {$countries['th']}".'<br>';
    }
    demoAssocArray();

?>