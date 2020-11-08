<?php
    session_start();
    if (!isset($_SESSION['result'])){
        $_SESSION['result'] = 0;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            function add($wynik, $liczba){

                return $wynik + $liczba;
            }
            function sub($wynik, $liczba){

                return $wynik-$liczba;
            }
        ?>
        
    <h4>Kalkulatro</h4>
    <form method="get">
        <input type="number" name="liczba" placeholder="Liczba"><br><br>
        <input type="number" name="wynik" placeholder="Wynik" value ="<?php echo $_SESSION['result']; ?>"><br><br>
        <input type="radio" name="dzialanie" value="dodawanie">Dodawanie<br><br>
        <input type="radio" name="dzialanie" value="odejmowanie">Odejmowanie<br><br>
        <input type="submit" name="button" value="Oblicz"><br><br>
        </form>
        
        <?php
        //Sprawdzać wszystko krok po kroku!
            if (isset($_GET['button'])) {
                if (!empty($_GET['liczba']) && !empty($_GET['dzialanie'])){
                    $result = 0;
                    switch ($_GET['dzialanie']) {
                        case 'dodawanie':
                            return add($_SESSION['result'], $_GET['liczba']);
                            //echo '+';
                            break;
                        
                        case 'odejmowanie';
                        
                            return sub($_SESSION['result'], $_GET['liczba']);
                            //echo '-';

                         break;
                        default:    
                            echo 'wypełnij prawidłowo pole działanie';
                            exit;
                        break;
                    }
                    echo $_SESSION['result'];
                }else{
                    echo 'Wypełnij pola!';
                } 
                    
                }
        ?>
        
</body>
</html>