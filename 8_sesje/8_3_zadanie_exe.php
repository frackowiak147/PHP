<?php
    function pole($a, $b, $c){
        return 2*($a*$b+$a*$c+$b*$c);
    }
    function obje($a, $b, $c){
        return ($a*$b*$c);
    }
    function przek($a, $b, $c){
         $d=pow($a,2)+pow($b,2)+pow($c,2);
         return sqrt($d);
    }
?>