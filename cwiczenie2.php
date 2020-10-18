<?php
/*
    Dwie zmienne mają wartości 7.5 oraz 10,

    sprawdź, któa z niech jest większa i wyświetl
     na ekranie komunikat o treści:
     Zmienna A jest większa od zmiennej B lub
     Zmienna B jest większa od zmiennej A

     Jeśli zmienne będą równe to wyświetl komunikat o treści:
     Zmienna A i B jest równe

     Wykorzytaj operator <=>
     //operator <=>
    $x = 25;
    $y = 20.0;
    echo $x <=> $y;
*/
    $a = 7.5;
    $b = 10;
    if($a == $b){
        echo '<br>Zmienna A i B jest równe';
    }

    $c = $a <=> $b;

    if($c==1){
        echo '<br> Zmienna A jest większa od zmiennej B';
    }else{
        echo '<br>Zmienna B jest większa od zmiennej A';
    }

?>
