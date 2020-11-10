<?php

    //zmienne globalne
    $global =10;
    //echo $global;

    function show(){
       // echo "Wartość \$global funkcji w funkcji: $global"; // spowoduje error
        echo "Wartość \$global funkcji w funkcji: $GLOBALS[global]<br>"; 
        echo "Wartość \$global funkcji w funkcji: {$GLOBALS['global']}<br>";
        echo "Wartość \$global funkcji w funkcji:" .$GLOBALS['global'];

    }
    show();

    function number(){
        $x = 10;
        echo "<br>Zmienna wynosi: $x<br>";
    }
    number();
    function add(){
        $x = 4;
        //$x = $x + 10;
        $x += 10;
    }
        add();

    function add1(){
        static $x = 4; //stała wartość static
        $x +=10; // += przekazywanie wartosci dalej
        echo "\$x = $x<br>";
    }
        add1(); //14
        add1(); //24
        add1(); //34

    // przekazywanie argumentów
    // przekazywanie argumetów prze wartość

    function addThree($x){
        $x += 3;
    }

    $number = 5;
////////////////////////////////////////////////////
    echo "\$number przed wywołaniem funkcji: $number<br>"; //5
    addFour($&x);
    function addFour($x){
        $x += 4;
    }
    $number = 5;
    echo "\$number po wywołaniu funkcji: $number<br>"; //9
    addFour($number);
    echo "\$number po wywołaniu funkcji: $number<br>"; //13
    addFour($number);
    

    //utworzyc funkcję addfour, przekazywanie argumentów przez referencję
    //coś nie pykło robię w innym pliku!
?>