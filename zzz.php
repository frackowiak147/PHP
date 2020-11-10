<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name=zzz action="./zzz_ex.php" method="post"> 
        <input type="number" name="liczba" placeholder"Liczba "><br><br>
        Stała liczba do dodania: 10 <br><br>
        <input type="radio" name="dodawanie" value="d" unchecked>Dodawanie
        <input type="radio" name="odejmowanie" value="o" unchecked>Odejmowanie
        <input type="submit" name="button" value ="Wyślij">
    </form>
    <?php

    if (isset($_POST['button'])){

        if(!empty($_POST['liczba']) && ){
            
            include './zzz_ex.php';

            
        }else{
            echo 'Error';
        }
    }
    if($_POST['dodawanie']==checked){
        $_POST['dodawanie']
    }

     ?>
</body>
</html>