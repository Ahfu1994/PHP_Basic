<?php 
    function demo1ByVal($s){
        $s = strtoupper($s)."...<br>";
        echo "inside function...<br>";
        echo $s.'<br>';
    }

    function demo1ByRef(&$s){
        $s = strtoupper($s)."...<br>";
        echo "inside function...<br>";
        echo $s.'<br>';
    }

    function superhero(&$s){
        switch ($s){
            case "Peter":
                $s = "Spiderman";
                break;
            case "Bruce":
                $s = "Batman";
                break;
            default:
             $s = "normal man";
        }
    }

    $a = "Peter";
    // demo1ByVal($s);
    // demo1ByRef($a);
    superhero($a);
    echo $a.'<br>';


?>