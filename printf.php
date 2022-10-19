<?php 
    function demo1(){
        $name = "Peter";
        $age = 22;

        echo "Name = $name, Age = $age";
        echo '<br>';

        printf("Name = %s, Age = %d", $name, $age);
        echo '<br>';
    }
    demo1();

    function demo2(){
        for ($i=48; $i <= 127 ; $i++) { 
            printf("%010b %03d %x %c",$i,$i,$i,$i);
            echo '<br>';
        }
    }
    echo '<pre>';
    // demo2();
    echo '</pre>';

    function demo3(){
        $price = 1234.56789;
        printf("price = %.3f", $price);
        echo '<br>';
        echo number_format($price,2);
        echo '<br>';
    }
    demo3();


?>