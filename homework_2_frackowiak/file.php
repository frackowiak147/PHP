<?php
//Funkcje
//Pole prostopadłoscianow
function pole($a, $b, $c){
    return round(2*($a*$b+$a*$c+$b*$c),2);
}
//Objetosc prostopadloscianow
function obje($a, $b, $c){
    return ($a*$b*$c);
}
//Przekatna prostopadloscianow
function przek($a, $b, $c){
     $d=pow($a,2)+pow($b,2)+pow($c,2);
     return round(sqrt($d),2);
}
//Pole sześcianu
function pole_sz($a){
    return round(6*(pow($a,2)),2);
}
//Objętość sześcianu
function obje_sz($a){
    return round(pow($a,3),2);
}
//Przkątna sześcianu
function przek_sz($a){
    return round(sqrt(3)*$a,2);
}
//Kula w sześcianie
function kul_sz($a){
    return round((1/2)*$a,2);
}
//Kula opisana na sześcianie
function kul_na_sz($a){
    return round((sqrt(3)*$a)*(1/2),2);
}
//Pole powierzhni ostrosłupa
function pole_ostr($p, $h, $H){
    return round((pow($p,2)+(2*$p*$h)),2);
}
//Objetosc ostroslupa
function obje_ostr($p, $h, $H){
    return round((1/3*$H*pow($p,2)),2);
}
//Pole podstawy walca
function ppw($r,$h){
    return round(3.14*(pow($r,2)),2);
}
//Pole powierzchni bocznej walca
function ppbw($r,$h){
    return round((2*3.14*$r*$h),2);
}
//Pole powierzchni całkowitej walca
function pcw($r,$h){
    $pcw=(2*3.14*pow($r,2)+(2*3.14*$r*$h));
    return round($pcw,2);
}
//Objętość walca
function obj_walc($r,$h){
    return round((3.14*pow($r,2)*$h),2);
}
?>