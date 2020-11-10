<?php
function f(){
    echo 'Funkcja';
}

    f();

function f1(){
    return "Funkcja nr 1";
}
    echo '<br>', f1(), '<br>';

function show($name){
    return "Imię: $name";

}
    echo show('Anna'),'<br>';

    $name1 = 'Krystian';
    echo show($name1), '<br>';

    //zdefiniuj funkcje dodawniae
    //wywołaj funkcje dodawanie z dwoma argumenrami

    function add($x,$y){
        return $x + $y;
      }
      echo "Wynik dodawania ", add(3, 5), '<br>';
      echo "Wynik dodawania ", add(10, 5), '<br>';

      $a1 = 10;
      $b1 = 20;
      $result = add($a1, $b1);
      echo "wynik dodawania $a1 i $b1 wynosi: $result<br>";

      // Oblicz średnią dwóch zmiennych a1 oraz b1 i wynik wyswietl w formacie:
    // Średnia ... i ... wynosi ... 
    // wykorzystaj funkcję add()

    function sr($result){

        return $result/2;
        
    }
    $srednia= sr($result);
    echo "Srednia $a1 oraz $b1 wynosi $srednia<br><br>";

    function number($x){
        return $x;
    }

    $result = number(10);
    echo "$result<br>";
    echo gettype($result),"<br>"; //integerr

    $result = number(10.5);
    echo "$result<br>";
    echo gettype($result),"<br>"; //double

    function calkowita($x):int{
        return $x;
    }
    echo calkowita(10),'<br>';
    echo calkowita(10.5),'<br>';

    function real($x):float{
        return $x;
    }

    echo real(10),'<br>';
    echo real(10.5),'<br>'; //10.5

    function data(int $a, float $b){
        return $a+$b;
    }
    echo data(2, 3),'<br>'; //5 
    echo data(2.5, 3),'<br>'; //5.5
    echo data(2.5, 3.5),'<br>'; // 5

    //zaokraglanie w dół i w góre
    // podłoga
    $x = floor(2.9999);
    echo "<hr>$x"; // 2
    $x = floor(-2.9999);
    echo "<hr>$x"; //-3

    //sufit
    $x = ceil(2.9999);
    echo "<hr>$x"; // 3
    $x = ceil(-2.9999);
    echo "<hr>$x"; //-2


?>