<?php 
    function demo1(){
        $counter = 1;
        while ($counter <= 10) {
            echo $counter.'<br>';
            $counter++;
        }
    }
    demo1();

    function demo2(){
        $counter = 1;
        do {
             echo $counter.'<br>';
             $counter++;
        }while($counter <= 10);
    }
    demo2();

    function demo3(){
        for ($counter=1; $counter <= 10 ; $counter++) { 
           echo $counter.'<br>';
        }
    }
    demo3();

    function quiz1(){
        $guess = 2;
        while (pow($guess,5) != 371293) {
            $guess++;
            echo "$guess ^ 5 = ".pow($guess,5).'<br>';
        }
        return $guess;
    }
    echo quiz1();

?>