<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ostrosłup</title>
</head>
<body>
<h2>Ostrosłup:</h2>
<form action="" method="post">
    <img src="./ostrosłup.png" alt="ostrosłup"></a><br>
  <input type="number" name="p" placeholder = "Pole podstawy"><br><br>
  <input type="number" name="h" placeholder = "Wysokość boku"><br><br>
  <input type="number" name="H" placeholder = "Wysokość całej bryły"><br><br>
  <input type="submit" value="oblicz"><br><br>
  
</form>
<?php
//Funkcje
include './file.php';
    //Właściwy warunek
    if ((!empty($_POST['p']))&&(!empty($_POST['h']))&&!empty(($_POST['H']))){
        $p=$_POST['p'];
        $h=$_POST['h'];
        $H=$_POST['H'];
        if ($p<=0 || $h<=0 || $H<=0){
            echo "Wartości nie mogą być ujemne!<br>";
        }else if($p==0 || $h==0 || $H==0){
            echo "Wartości muszą być więsze od 0!<br>";
        }else {

        echo "Pole ostrosłupa wynosi: ", pole_ostr($p, $h, $H), "cm";?><sup>2</sup><br><?php
        echo "Objętość ostrosłupa wynosi ", obje_ostr($p, $h, $H), "cm";?><sup>3</sup><br><?php
        
        }
      }else {
          echo "Podaj wszystkie dane";
      }
    
      
      ?>
      <br><a href="./3_zadanie_formularze_geometria.php">3_zadanie_formularze_geometria.php</a>
</body>
</html>