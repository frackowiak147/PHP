<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prostopadłościan</title>
</head>
<body>
<h2>Prostopadłościan:</h2>
<form action="" method="post">

    <img src="./prostopadłościan.png" alt="prostopadłościan"></a><br>
  <section>
  <p>Dane</p>
  <input type="number" name="a" placeholder = "a"><br><br>
  <input type="number" name="b" placeholder = "b"><br><br>
  <input type="number" name="c" placeholder = "c"><br><br>
  <input type="submit" value="oblicz"><br><br>
  
</form>
<?php
include './file.php';
    //Właściwy warunek
  if ((!empty($_POST['a']))&&(!empty($_POST['b']))&&!empty(($_POST['c']))){
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    if ($a<=0 || $b<=0 || $c<=0){
        echo "Wartości nie mogą być ujemne!<br>";
    }else if($a==0 || $b==0 || $c==0){
        echo "Wartości muszą być więsze od 0!<br>";
    }else {
    echo "Pole: ",pole($a, $b, $c),"cm";?><sup>2</sup><br><?php
    echo "Objętość: ",obje($a, $b, $c),"cm";?><sup>3</sup><br><?php
    echo "Długość przekątnej: ",przek($a, $b, $c),"cm<br>";
      
    }
  }else {
      echo "Podaj wszystkie dane";
  }
  
  ?>
  </section>
  <br><a href="./3_zadanie_formularze_geometria.php">3_zadanie_formularze_geometria.php</a>
  
</body>
</html>