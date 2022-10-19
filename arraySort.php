<?php 
    function demo1(){
        $food = ["egg", "rice", "pizza", "icecream", "cookies", "chicken"];
        var_dump($food);

        echo "after sort <br>";
        sort($food, SORT_NATURAL| SORT_FLAG_CASE);
        var_dump($food);
    }
    // demo1();
    function demo2(){
        $chapters = ["ch1", "ch2", "ch3", "ch4","ch20", "ch22"];
        var_dump($chapters);
        echo "after sort <br>";
        sort($chapters);
        var_dump($chapters);

        echo "after natcasesort <br>";
        natcasesort($chapters);
        var_dump($chapters);
    }
    // demo2();

    function demo3(){
        $menu = [
            "coffee"=>50,
            "tea"=>20,
            "water"=>15,
            "milk"=>35,
            "soda"=>30,
            "juice"=>30
        ];
        asort($menu);//ascending sort by value
        var_dump($menu);

        // arsort($menu);//descending sort by value
        // var_dump($menu);

        // ksort($menu);//ascending sort by key
        // var_dump($menu);

        // ksort($menu, SORT_NATURAL|SORT_FLAG_CASE);//ascending sort by key
        // var_dump($menu);

        // krsort($menu, SORT_NATURAL|SORT_FLAG_CASE);//descending sort by key
        // var_dump($menu);

        array_multisort(array_values( $menu),SORT_DESC,
                            array_keys($menu), SORT_NATURAL|SORT_FLAG_CASE, SORT_ASC,$menu);
        var_dump($menu);
    }
    demo3();

?>