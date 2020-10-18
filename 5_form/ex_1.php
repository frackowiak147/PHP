<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="./form_ex.php" method="get">
    <input type="text" name="miasto" placeholder="Miasto"><br><br>
    <input type="text" name="wiek" placeholder="Wiek"><br><br>

    <?php 
$miasto = "<input type=\"text\" name=\"name\"";
    if(!empty($_GET['miasto'])){
        $miasto .=" value=\"$_GET[miasto]\">";
        $wiek .=" value=\"$_GET[wiek]\">";
    }else{
        $miasto .=" placeholder=\"miasto\">";
        $wiek .=" placeholder=\"wiek\">";
    }
    echo $miasto;
    echo $wiek;
    ?>
<br><br>
<input type="submit" value="Wyślij">
</form>
</body>
</html>