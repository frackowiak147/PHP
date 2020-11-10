<?php
    function data($name, $surname, $color){
        $name = ucfirst(strtlower($name));
        $surname =ucfirst(strtlower($surname));
        
        return "Imię i Nazwisko: $name $surname<br> Kolor: $color";
    }
?>