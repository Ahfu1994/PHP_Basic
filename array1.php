<?php 
    function demo(){
        $menu1 = "coffee";
        $menu2 = "tea";
        $menu3 = "water";
        $menu4 = "soda";
        $menu5 = "juice";
        
        echo $menu1.'<br>';
        echo $menu2.'<br>';
        echo $menu3.'<br>';
        echo $menu4.'<br>';
        echo $menu5.'<br>';
    }
    // demo();

    function demo2Array(){
        $menu[] = "coffee";
        $menu[] = "tea";
        $menu[] = "water";
        $menu[] = "soda";
        $menu[] = "juice";
        print_r($menu);
    }
    // demo2Array();
    // echo '<pre>';
    // demo2Array();
    // echo '</pre>';

    function demo3Array(){
        $menu = array("coffee","tea","water","soda","juice");
        print_r($menu);
    }
    // demo2Array();
    // echo '<pre>';
    // demo3Array();
    // echo '</pre>';



    function demo4Array(){
        $menu = ["coffee","tea","water","soda","juice"];
        print_r($menu);
    }
    // demo2Array();
    // echo '<pre>';
    // demo4Array();
    // echo '</pre>';

    function demo5Array(){
        $menu = ["coffee","tea","water","soda","juice"];
        echo $menu[2];
    }
    // echo '<pre>';
    // demo5Array();
    // echo '</pre>';

    function demo6Array(){
        $menu = ["coffee","tea","water","soda","juice"];
        print_r($menu);
        $menu[2] = "milk";
        print_r($menu);
    }
    // echo '<pre>';
    // demo6Array();
    // echo '</pre>';

    function demo7Array(){
        $menu = ["coffee","tea","water","soda","juice"];
        // for ($i=0; $i < count($menu); $i++) { 
        //    echo '['.$i.'] = '.$menu[$i].'<br>';
        // }

        foreach($menu as $item){ //assess all member in array
            echo $item.'<br>';
        }
    }
    // echo '<pre>';
    // demo7Array();
    // echo '</pre>';

    function demo8Array(){
        $menu = ["coffee","tea","water","soda","juice"];
        $price = [50,45,15,60,30,40];
        echo $menu[2]." ".$price[2].'<br>';
    }
    // echo '<pre>';
    // demo8Array();
    // echo '</pre>';

    function demo9Array(){
        $menu = [
            ["coffee","tea","water","soda","juice","milk"],
            [50,45,15,60,30,40]
            ];
       print_r($menu);
       echo $menu[0][2].'<br>';
       echo $menu[1][4].'<br>';

    }
    // echo '<pre>';
    // demo9Array();
    // echo '</pre>';

    function demo10Array(){
        $employees = ["Peter", "M", 24];
        echo $employees[2].'<br>';
        print_r($employees);
    }
    // echo '<pre>';
    // demo10Array();
    // echo '</pre>';

    function demo11Array(){
        $employees = [
            ["Peter", "M", 24],
            ["Kethy", "F", 24],
            ["Bruce", "M", 45],
            ["Linda", "M", 30]
        ];
        print_r($employees);
        echo $employees[1][0].'<br>';

        for ($i=0; $i < count($employees); $i++) { 
            echo $employees[$i][0].'<br>';
        }
    }
    echo '<pre>';
    demo11Array();
    echo '</pre>';


?>