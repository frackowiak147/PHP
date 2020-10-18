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
        $wiek = $_GET['wiek'];

        if(!empty($miasto)&& !empty($wiek)){
            echo "Miasto: $miasto<br>";
            echo "Wiek:  $wiek<br>";
        }
        else{

            echo "<a href=\"./form_ex.php?miasto=$miasto.\">\Popraw dane w formularzu\</a><br>";
            echo "<a href=\"./form_ex.php?wiek=$wiek.\">\Popraw dane w formularzu\</a>";
        ?>
            <script>
                history.back()
            </script>
        <?php
        }
        

    ?>
</body>
</html>