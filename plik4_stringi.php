<?php
$tekst = <<<T
        Teb - kurs
        programowania<br>
T;

    echo "$tekst<br>";
    echo nl2br($tekst);
    // echo
    $name = 'jANUsZ';
    echo "$name<br>";
//małe litery
echo 'NA MALE<br>';
    $mtekst = strtolower($tekst);
    echo $mtekst;
    $mname = strtolower($name);
    echo $mname, '<br>';
//zmiana na duże
echo 'NA DUZE<br>';
    $dtekst = strtoupper($tekst);
    echo $dtekst;
    $dname = strtoupper($name);
    echo $dname, '<br>';
//Zmiana pierwszej litery na dużą
//ucwords
echo 'NORMALNE<br>';
    $ktekst = ucwords($mtekst);
    echo $ktekst;
    $kname = ucwords($mname);
    echo $kname, '<br>';
    //zamiana na małe litery
    // zamiana na duże litery
    //zamiana pierwszej litery na dużą a pozostałych na małe

    //Rozwiazanie
    echo 'jANUsZ<br>';
    echo strtolower($name),'<br>';
    echo strtoupper($name),'<br>';
    echo ucwords(strtolower($name)),'<br>';
//LOREM IPSUM
$lorem = <<<LOREM
Lorem ipsum dolor sit amet, consectetur adipiscing
elit. Aliquam at quam in nunc dapibus ultrices ut non ipsum.
Vestibulum malesuada nisl quis mauris pharetra, vitae eleifend
arcu aliquet. Etiam venenatis quis tellus quis varius.
Nam sit amet mi vulputate, ultrices tellus non, rhoncus dui.
Phasellus bibendum iaculis malesuada. Nullam dapibus metus dui,
non euismod metus ultrices sed. Nullam at felis vitae dui facilisis
luctus. Sed dignissim felis magna, eget iaculis dolor sodales id.
Integer ornare velit lobortis ante dictum consectetur.
Integer sed risus est. Nullam ut fringilla erat, ac egestas neque.
Integer tristique lacus eget nibh luctus viverra. Mauris convallis
augue id felis mattis eleifend.
LOREM;

echo $lorem, '<br>';
echo wordwrap($lorem, 40, '<br>');
echo wordwrap($lorem, 40, '<br>');
//czyszczenie zawartości bufora
ob_clean();

//Białe znaki
$name = 'Anna';
$name1 = ' Anna ';

echo 'Długość $name: ', strlen($name);
echo '<br>Długość $name1: ', strlen($name1);
//wyczysc zmienną $name 1 z białych znaków trim()
echo '<br>Dlugosc bez bialych znaków $name1: ', strlen(trim($name1));
//czyszczenie od lewej strony ltrim()
//czyszczenie od prawej strony rtrim()
//czyszczenie wszystkich białych znaków trim()

//Przeszukiwanie ciągów znaków:
$address = 'Poznań, ul. Rynek Jeżycki 1, tel. (61) 123-45-67';
$search = strstr($address, 'tel');
echo '<br>', strstr($address, 'tel');
echo '<br>', strstr($address, 'tel', true); //daje odrwotnosc zapytania
$mail = strstr('janusz@gmail.com', 64); //znajduje w tablicy ascii "64"
echo "$mail<br>";
substr('Janusz Kowalski',0); //muszą być dwa parametry!

substr('<br>Janusz Kowalski',1); //muszą być dwa parametry!
echo strlen(substr('<br>Janusz Kowalski',7,5)); //muszą być dwa parametry!

//Zamiana ciągów
$ewplace = str_replace('korona', 'grypa', 'korona jest niebezpieczna');
//echo $replace, '<br>';

//Usun z loginu polskie znaki
$login = 'bączek';
$censure = array('ą','ę','ć','ź','ż','ł','ó','ś','ń');
$replace= array('a','e','c','z','z','l','o','s','n');
echo str_replace()$censure,$replace,$login);


?>
