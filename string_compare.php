<?php 
    function compareString(){
        $s1 = "apple";
        $s2 = "Apple";
        if ($s1 == $s2) {
            echo "equal";
        }
        else {
            echo "not equal";
        }
    }
    // compareString();

    function compareStringCaseInsensitive(){
        $s1 = "apple";
        $s2 = "bpple";
        $n = strcasecmp($s1, $s2);
        echo "n = $n".'<br>';
        if ($n == 0) {
            echo "equal";
        }
        else {
            echo "not equal";
        }
    }
    // compareStringCaseInsensitive();

    function testString(){
        $s1 = "lily";
        $s2 = 0;
        if ($s1 === $s2) { //identical (data type + value)
            echo "equal";
        }
        else {
            echo "not equal";
        }
    }
    testString();