<?php 
    function demo1(){
        // $menu = [
        //     ["coffee","tea","water","soda","juice","milk"],
        //     [50,45,15,60,30,40]
        //     ];
        $menu = [
            "coffee"=>50,
            "tea"=>45,
            "water"=>15,
            "soda"=>60,
            "juice"=>30,
            "milk"=>40,
        ];

        print_r($menu);
        echo '<br>';
        echo $menu["tea"].'<br>';
        echo '<br>';

        $menu["wine"] = 100;// add data 
        print_r($menu);
    }
    // echo "<pre>";
    // demo1();
    // echo "</pre>";

    function demo2(){
        // $menu = [
        //     ["coffee","tea","water","soda","juice","milk"],
        //     [50,45,15,60,30,40]
        //     ];
        $country = [
            "th"=>"thailand",
            "jp"=>"japan",
            "kr"=>"korea"
        ];

        // print_r($country);
        // echo '<br>';
        // echo $country["kr"].'<br>';

        foreach($country as $key => $value){
            echo "key = ".$key.": value = ".$value."<br>";
        }
    }
    // echo "<pre>";
    // demo2();
    // echo "</pre>";

    function demo3(){
        $menu = [];
        $menu["coffee"] = 50;
        $menu["tea"] = 45;
        print_r($menu);
        echo "<br>";

        unset($menu["coffee"]);// delete data
        print_r($menu);

    }
    // echo "<pre>";
    // demo3();
    // echo "</pre>";

    function demo4(){
        $menu = [
            "coffee"=>["mocha", "latte", "espresso"],
            "tea"=>["green", "jasmine", "iced"],
            "juice"=>["apple", "orange"]
        ];
        print_r($menu);

        foreach($menu as $key => $value){
            echo $key.'<br>';
            // print_r($value);
            foreach($value as $item){
                // echo $key.'<br>';
                echo "---".$item,'<br>';
            }
        }
        $menu["juice"][] = "coconut";
        print_r($menu["juice"]);
    }
    // echo "<pre>";
    // demo4();
    // echo "</pre>";

    function demo5(){
        $menu = [
            "coffee"=>["mocha"=>70, "latte"=>50, "espresso"=>45],
            "tea"=>["green"=>45, "jasmine"=>50, "iced"=>35],
            "juice"=>["apple"=>30, "orange"=>40]
        ];
        print_r($menu);
    }
    echo "<pre>";
    demo5();
    echo "</pre>";


?>