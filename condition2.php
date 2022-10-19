<?php 
    function gradeLetter($score){
        $grade = "";
        // 81-100 --> A
        // 71-80 --> B
        // 61-70 --> C
        // 51-60 --> D
        // < 50 --> F
        if ($score >= 81) {
           $grade = 'A';
        }
        else if ($score >=71 && $score < 81) {
            $grade = 'B';
        }
        else if ($score >=61 && $score < 71) {
            $grade = 'C';
        }
        else if ($score >=51 && $score < 61) {
            $grade = 'D';
        }
        else if ($score >= 51) {
            $grade = 'F';
        }
        return $grade;
    }

    $score = 75;
    echo "score = $score --> grade = ".gradeLetter($score).'<br>';

    $result = "";
    if ($score > 50) {
        $result = "pass";
    }
    else {
        $result = "try again";
    }


    //if short from
    $result = ($result > 50)? "pass":"try again";
    echo $result;
?>