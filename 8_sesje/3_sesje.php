<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesja3</title>
</head>
<body>
    <h4>Strona startowa</h4>
    <?php
        //session_start(); //przyjęło sie żeby wrzucać na samą górę
        echo "identyfikator sesji", session_id(),"<br>";
        //echo "ok";
        echo $_SESSION['wojewodztwa'],"<br>";
       if(isset($_POST['poznan'])){
           echo "ok";
       }
        //$_SESSION['name'] = 'Anna';
        //echo "<hr>Imię: $_SESSION[name]<br>";
        
    ?>
    <a href="./1_sesje.php">Strona Startowa</a>
</body>
</html>