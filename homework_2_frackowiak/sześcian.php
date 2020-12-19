<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sześcian</title>
</head>
<body>
<body>
<h2>Sześcian:</h2>
<form action="" method="post">
    <img src="./sześcian.png" alt="sześcian"></a><br>
  <input type="number" name="a" placeholder = "a"><br><br>
  <!---<input type="number" name="b" placeholder = "b"><br><br> --->
  <!---<input type="number" name="c" placeholder = "c"><br><br> --->
  <input type="submit" value="oblicz"><br><br>
  
</form>
<?php
//Funkcje
include './file.php';
    //Właściwy warunek
  if (!empty($_POST['a'])){
    $a=$_POST['a'];
    if ($a<=0){
        echo "Wartości nie mogą być ujemne!<br>";
    }else if($a==0){
        echo "Wartości muszą być więsze od 0!<br>";
    }else {
    echo "Pole: ",pole_sz($a),"cm";?><sup>2</sup><br><?php
    echo "Objętość: ",obje_sz($a),"cm";?><sup>3</sup><br><?php
    echo "Przekątna: ",przek_sz($a),"cm<br>";
    echo "Promień kuli opisanej w szescian: ",kul_sz($a), "cm<br>";
    echo "Promień kuli opisanej na szescianie: ",kul_na_sz($a), "cm<br>";
   
    
      
    }
  }else {
      echo "Podaj wszystkie dane";
  }
  
  ?>
  <br><a href="./3_zadanie_formularze_geometria.php">3_zadanie_formularze_geometria.php</a>
  
</body>
</html>