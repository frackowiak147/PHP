<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="zzz_wynik" action="./zzz_wynik.php" method="post">
    </form>
    <?php
        $liczba1 = $POST['liczba1'];
        $liczba2 = $POST['liczba2'];
        $radio1 = $POST['dodawanie'];
        $radio2 = $POST['odjemowanie'];
        function dod($liczba1, $liczba2){
            $liczba1 + $liczba2;
        }
       

        function ode($$liczba, $$liczba){
            $liczba - 10;
        }

        if($radio1==true){
            
            echo dod($liczba1, $liczba2);
        }else if(($radio1==true))
        

        
        ?>
        <form name="zzz_wynik" action="./zzz_wynik.php" method="post">
        
    </form>

</body>
</html>