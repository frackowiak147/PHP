<?php
 // funkcja Date()
 echo "Rok - miesiac - dzien: ", date("Y-m-d"), '<br>'; //Rok - miesiac - dzien: 2020-11-08
 echo "Rok - miesiac - dzien: ", date("Y-M-d"), '<br>'; //Rok - miesiac - dzien: 2020-Nov-08
 echo "Dzień - miesiąc - rok: ", date("d-m-Y"), '<br>'; //Dzień - miesiąc - rok: 08-11-2020
 echo date("G:i:s"), "<br>"; //17:34:27
 echo date("h:i:sa"), "<br>"; //05:34:57pm
 echo date("Y-m-d G:i:s"), "<br>"; //2020-11-08 17:35:40
 echo date("w"), "<br>"; //0 0-to jest niedziela!
 
 /*
    funkcja getdate()
 */
    $data = getdate();

    echo print_r($data); //Array ( [seconds] => 57 [minutes] => 37 [hours] => 17 [mday] => 8 [wday] => 0 [mon] => 11 [year] => 2020 [yday] => 312 [weekday] => Sunday [month] => November [0] => 1604853477 ) 1
    echo '<pre>',print_r($data),'</pre>';

/*
    dzien - miesiac - rok, dzien tygodnia
 */
/*
Array
(
    [seconds] => 25
    [minutes] => 58
    [hours] => 17
    [mday] => 8
    [wday] => 0
    [mon] => 11
    [year] => 2020
    [yday] => 312
    [weekday] => Sunday
    [month] => November
    [0] => 1604854705

*/
    echo "dzien - miesiac - rok, dzien tygodnia ",date("d-m-Y-w"),'<br>'; //dzien - miesiac - rok, dzien tygodnia 08-11-2020-0
    //lub
    echo "dzien - miesiac - rok, dzien tygodnia ",date("d-m-Y"),", ",date("w"),'<br>'; // dzien - miesiac - rok, dzien tygodnia 08-11-2020, 0
    //08 - listopad - 2020, niedziela
    echo date("d-m-y"),'<br>'; //08-11-20
    echo $data['mday'] = 8,"-", $data['month'],"-", $data['year'] = 2020, ", ", $data['weekday'];
    // 8-November-2020, Sunday

    $seconds = $data['seconds'];
    $seconds = $seconds.' - '.$seconds;
?>