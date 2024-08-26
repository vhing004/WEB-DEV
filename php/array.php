<?php 
    echo "We talk about Array <br>";

    $arr = [1,2,3,4];
    $fruits = ["apple", "orange", "waterlemon"];
    $fruits2 = array("apple", "orange", "waterlemon22");
    $color = [
        2=> "red", // key => value
        6=> "blue",
        9=> "grey",
    ];
    
    // var_dump($color);
    print_r($arr);
    echo $fruits2[2];
    echo $fruits[2];
    echo $color[2];
?>