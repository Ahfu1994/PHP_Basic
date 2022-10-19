<?php 
    function demo1(){
        $s1 = "Thailand";
        $s2 = 'smile';
        $s3 = 'say "hi"';
        $s4 = "say \"hi\"";
        echo $s1;
        echo '<br>';
        echo $s2;
        echo '<br>';
        echo $s3;
        echo '<br>';
        echo $s4;
        echo '<br>';
    }
    demo1();

    function demo2(){
        $s1 = "Thailand";
        $s2 = 'smile';
        echo "Welcome to $s1, the land of $s2".'<br>';
        echo 'Welcome to $s1, the land of $s2'.'<br>';
    }
    demo2();

?>