<?php 
    function shuffleSong(){
        $song = [
            "Abilene",
            "Action Satisfaction",
            "Addicted To Love",
            "Baby Got Back",
            "California Dreaming",
            "Calling You",
            "Gimme That Wine",
            "Gin Soaked Boy",
            "Girls Dem Sugar",
            "Gin And Juice"
        ];

        echo "before <br>";
        var_dump($song);

        echo "after <br>";
        shuffle($song);
        var_dump($song);
    }
    echo '<pre>';
    shuffleSong();
    echo '</pre>';
?>