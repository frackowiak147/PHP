<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $miasto = $_GET['miasto'];
        echo "Miasto:  $miasto<br>";
        echo "<a href=\"./form_ex.php?miasto=$_GET[miasto].\">\Popraw dane w formularzu\</a>";
        

    ?>
</body>
</html>