<?php 
    function demo1(){
        $customer = [
            "jack","jill","linda","kathy",
            "simon","peter","bruce","john","bill"
    ];

    var_dump($customer);

    $pick = array_rand($customer,3);
    var_dump($pick);
    foreach($pick as $item){
        echo $customer[$item].'<br>';
    }
    
    }

    echo '<pre>';
    demo1();
    echo '</pre>';
    

?>