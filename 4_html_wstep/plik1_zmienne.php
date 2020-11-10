<?php
    $name = 'Jan';
    echo 'text';
    echo "text<br>";
    echo 'Imię:' $name<br>;
    echo 'Imię:' $name';

    <!-- konkatenacja -->
    $name = 'Jan' - 'Kowalski';
    echo "Imię:" $name""-"<br>";

    <!-- dodawanie -->
    $add = 2 + 3;
    echo "$add<br>"

    <!-- typy danych -->
    <!-- boolean -->

    $prawda = true;
    echo $prawda; <!-- true wyswietli 1 -->

    $fałsz = false;
    echo $fałsz; <!-- false nic nie wyswietli true to 1 false to 0 -->
    <!-- integer -->
    $bin = 0b1101
    echo $bin;
    $oct = 01101;
    $dec = 13;
    $hex = 0xA1;

    echo $hex;
    <!-- ctrl + c komentarz -->
    <!-- interplolacja -->
    echo $hex, '<hr>';

    echo 'a'-'b'-'c'; <!-- wolniejszy sposób od interpolacji
                        a suma b suma c => wyswietl wszystkie abc
                     -->
    echo 'a','b','c'; <!-- wyswietl a wyswietl b wyswietl c -->
    <!-- składnia herdoc -->
    $name = "Anna";
    echo <<<LABEL
        <br>Imię: $name
    LABEL;

?>
