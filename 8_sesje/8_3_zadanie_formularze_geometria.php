<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Graniastosłupy</title>
</head>
<body>
  <style>
    table, tr, th, td{
      border: solid 1px grey;
      border-collapse: collapse;
      padding: 10px;
      text-align: center;
    }  
  </style>
  <h4>Graniastosłupy</h4>
  <table>
    <tr>
      <th colspan="2">Graniastosłupy</th>
    </tr>
    <tr>
      <td><a href="./prostopadloscian.php"><img src="./g0373.png" alt="prostopadloscian"></a></td>
      <td>Sześcian</td>
    </tr>
    <tr>
      <td>Ostrosłup</td>
      <td>Walec</td>
    </tr>
  </table>
  <form method="post">
  <input type="number" name="a" placeholder = "a"><br><br>
  <input type="number" name="b" placeholder = "b"><br><br>
  <input type="number" name="c" placeholder = "c"><br><br>
  <input type="submit" value="oblicz"><br><br>
</form>
  <?php
  
  if (isset($_POST['oblicz'])){
    include './8_3_zadanie_exe.php';
    echo '<hr>Pole wynosi!', pole($_POST['a'], $_POST['b'], $_POST['c']),"<br>";    
    echo '<hr>Objetosc wynosi!', obj($_POST['a'], $_POST['b'], $_POST['c']),"<br>";    
    echo '<hr>Przekatna wynosi!', przek($_POST['a'], $_POST['b'], $_POST['c']),"br>";    
    
      
  }else{
    echo "nie działa";
  }

?>
</body>
</html>