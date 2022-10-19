<?php 
    function demo(){
        $menu = ["coffee","soda", "water", "tea"];
        print_r($menu);

        echo "using var_dump <br>";
        var_dump($menu);

        $menu[2] = "milk";
        var_dump($menu);

        unset($menu[1]);//delete data index 1
        echo "after deleting index 1 <br>";
        var_dump($menu);

        $menu[99] = "fusion";
        var_dump($menu);

        $menu[-5] = "wow";
        var_dump($menu);

    }
    // echo "<pre>";
    // demo();
    // echo "</pre>";

    function demo2(){
        $menu = ["coffee","soda", "water", "tea"];
        var_dump($menu);
        $key = array_search(strtolower("Soda"), $menu);//return value index of data
        if ($key ) {
            echo $key."<br>";
            echo "found ".$menu[$key].'<br>';
            
        }
        else{
            echo "not found <br>";
        }
    }
    echo "<pre>";
    demo2();
    echo "</pre>";


?>