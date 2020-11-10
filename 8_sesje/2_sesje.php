<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesja2</title>
</head>
<body>
    <h4>Strona startowa</h4>
    <?php
        
        //session_start(); //przyjęło sie żeby wrzucać na samą górę
        echo "identyfikator sesji", session_id();
        echo '<pre>';
        //print_r($_POST);
        echo '</pre>';


       // if(!empty($_POST['wojewodztwa'])){
            //$_SESSION['wojewodztwa']=$_POST['wojewodztwa'];
            ?>
            <form action="./3_sesje.php" method="post">
            <?php
        switch ($_SESSION['wojewodztwa']) {
            case 'wielkopolskie':
                ?>
                    <input type="checkbox" name="poznan" id="">poznan
                    <input type="checkbox" name="srem" id="">srem
                    <input type="checkbox" name="konin" id="">konin
                <?php
                break;
                case 'mazowieckie':
                    ?>
                        <input type="checkbox" name="warszawa" id="">warszawa
                        <input type="checkbox" name="wilanowo" id="">wilanowo
                        <input type="checkbox" name="warszawa3" id="">warszawa3
                    <?php
                    break;
                    case 'lubuskie':
                        ?>
                            <input type="checkbox" name="zielona gora" id="">zielona gora
                            <input type="checkbox" name="miedzyrzecze" id="">miedzyrzecze
                            <input type="checkbox" name="gorzow" id="">gorzow
                        <?php
                        break;
            default:
                echo "Błędne dane";
                break;
        }
        ?>
            <input type="submit" value="Wyślij">
        <?php
        
        echo "</form>";
    //}
        
        
       // $_SESSION['name'] = 'Anna';
        //echo "<hr>Imię: $_SESSION[name]<br>";
        //unset($_SESSION['name']); //unieważnia zmienną sesyjną
        
    ?>
    <a href="./3_sesje.php">Sesje3</a>
</body>
</html>