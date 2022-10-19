<?php
    $flower = "lily";//string

    //lossely typed variable
    $flower = "sumflower";//string
    $floWER = "sumflower";//string

    // echo "hello";
    // Echo "World";

    $score = 20;//integer
    $interestRate = 0.75;//double
    $isRecommededMenu = true;//false//boolean

    $menus = ["coffee","tea","water"];//array
    $v = null;
    $birthDate = new DateTime("1995-08-07");//object

    //check the variable is true;
    echo is_int($score).'<br>';
    echo is_string($interestRate).'<br>';
    echo is_bool($isRecommededMenu).'<br>';
    echo is_array($menus).'<br>';
    echo is_object($birthDate).'<br>';
    echo is_null($v).'<br>';
?>
