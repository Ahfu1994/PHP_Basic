<?php 
    function greet($tourist){
        $greeting = "";
        if ($tourist = "th") {
            $greeting = "sa-wad-dee";
        } 
        else if ($tourist = "jp") {
            $greeting = "kon-ni-shi-wa";
        }
        else if ($tourist = "la") {
            $greeting = "sa-bai-dee";
        }
        else if($tourist = "mm"){
            $greeting = "min-ga-la-ba";
        }
        else {
            $greeting = "hi";
        }
        return $greeting;
    }

    // echo greet("th")."<br>";

    function greet2($tourist){
        $greeting = "";
        switch ($tourist) {
            case 'th':
                $greeting = "sa-wad-dee";
                break;
            case 'jp':
                $greeting = "kon-ni-shi-wa";
                break;
            case 'la':
                $greeting = "sa-bai-dee";
                break;
            case 'mm':
                $greeting = "min-ga-la-ba";
                break;
            case 'en':
            case 'us':
            case 'ca':
                $greeting = "hi";
                break;
            default:
            $greeting = "hello";
                break;
        }
        return $greeting;
    }

    // echo greet2("mm")."<br>";
    function greet3($tourist){
        $greet = [
            "th"=>"sa-wad-dee",
            "jp"=>"kon-ni-shi-wa",
            "la"=>"sa-bai-dee",
            "mm"=>"min-ga-la-ba",
            "en"=>"hello",
            "us"=>"hello",
            "ca"=>"hello" ,
            "ch"=>"ni-hou" 
        ];
        return $greet[$tourist];
    }

    echo greet3("ch");
?>