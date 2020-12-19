<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Walec</title>
</head>
<body>
<h2>Walec:</h2>
<form action="" method="post">
    <img src="./walec.png" alt="Walec"></a><br>
  <input type="number" name="r" placeholder = "r"><br><br>
  <input type="number" name="h" placeholder = "h"><br><br>
  <input type="submit" value="oblicz"><br><br>
  
</form>
<?php
include './file.php';
    //Właściwy warunek
  if ((!empty($_POST['r']))&&(!empty($_POST['h']))){
    $r=$_POST['r'];
    $h=$_POST['h'];
    if ($r<=0 || $h<=0){
        echo "Wartości nie mogą być ujemne!<br>";
    }else if($r==0 || $h==0){
        echo "Wartości muszą być więsze od 0!<br>";
    }else {
        echo "Pole powierzchni podstawy walca: ",ppw($r,$h),"cm";?><sup>2</sup><br><?php
        echo "Pole powierzchni bocznej walca: ",ppbw($r,$h),"cm";?><sup>2</sup><br><?php
        echo "Pole całkowite walca: ",pcw($r,$h),"cm";?><sup>2</sup><br><?php
        echo "Objętość walca : ",obj_walc($r,$h),"cm";?><sup>3</sup><br><?php
      
    }
  }else {
      echo "Podaj wszystkie dane";
  }
  
  ?>
  <br><a href="./3_zadanie_formularze_geometria.php">3_zadanie_formularze_geometria.php</a>
  
</body>
</html>