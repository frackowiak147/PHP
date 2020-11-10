<?php
    function add2($x, $y = 5){
        return $x + $y;
    
    }
    $a = 3;
    echo add2(2, 4); //6 
    echo '<br>';
    echo add2(10);  // 15
    echo '<br>';
    echo add2($a, $a);  //6
    echo '<br>';
    echo add2($x = -1, $y= 10); //9 
    echo '<br>';

    //argumenty i typy danycy
    function multi(int $x, int $y = 5){
        return $x * $y;

    }
    echo multi(1); //5
    echo multi(3, 5); //5
    echo multi(3.5, 5); //5
?>