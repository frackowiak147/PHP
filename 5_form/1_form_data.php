<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dan pobrane z formularza</title>
    
</head>
<body>
<?php
        //echo $GET['surname']; przy echo zwraca 1
        //print_r($GET)
        //echo'<pre>',print_r($GET),'</pre>'; //do testowania czy zwraca 1
       /* echo '<pre>';
            print_r($GET);
        echo '</pre>';
    */
    /*Dodaj pole imie, oraz kod pocztowy
    (sklada sie z dwoch pol, pierwsze ma rozmiar 2,
    a drugie 3)
    */
    //if(isset($_GET['name']))
    // operatory logiczne AND &&, OR ||,
    // wykorzystaj switch do wyswietlania koloru. np czerwony
    if(!empty($_GET['name'])&& !empty($_GET['surname']) &&
     !empty($_GET['password'])&& !empty($_GET['zipcode'])&&!empty($_GET['zipcode2'])&&
     !empty($_GET['color'])&& !empty($_GET['statute'])){
         $color=$_GET['color'];

    switch($color){
        case 'r':
            $color ='czerwony';
        break;
        case 'g':
            $color ='zielony';
        break;
        case 'b':
            $color ='niebieski';
        break;
        }
        echo<<<T
        Imie: $_GET[name]<br>
        Nazwisko: $_GET[surname]<br>
        Haslo: $_GET[password]<br> 
        Kod pocztowy: $_GET[zipcode]<br>               
        Kod pocztowy: $_GET[zipcode2]<br>
        Kolor: $color<br>
        T;

        echo '<a href="./1_form.php?historyBack">"Popraw dane w formularzu"</a>';
    }else{
        //echo 'Nie wprowadzono wszystkich danych';
        //header('Location: ./1_form.php');
        //Przy pomocy JS
    }
    
    ?>
    <script>
        
        //history.back();
        
    </script>
    <?php
    ?>
</body>
</html>