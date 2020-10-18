<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>
<body>
    <h4>Formularz z danymi użytkownika</h4>
    <form name=form1 action="./1_form_data.php" method="get">
    
        <?php
        //print_r($_GET) do analizy 
        ///*
            if(!empty($_GET['surname'])){
                $surname = $_GET['surname'];
                echo"<input type=\"text\" surname=\"surname\" placeholder=\"Nazwisko\" value=\$surname\"";
            }else{
                echo '<input type="text" surnamename="surname" placeholder="Nazwisko:>';
            } 
            //*/
        ?>
        <br><br>
        <input type="text" name="name" placeholder="Imie"><br><br>
        <input type="text" name="surname" placeholder="Nazwisko"><br><br>
        <input type="password" name="password" placeholder="Haslo"><br><br>
        <input type="text" name="zipcode" placeholder= "00" size="2" maxlenth="2">
        <input type="text" name="zipcode2" placeholder= "000" size="2" maxlenth="2">
        

        <h4>Ulubiony kolor</h4>
        <input type="radio" name="color" value="r" checked>Czerwony
        <input type="radio" name="color" value="g" checked>Zielony
        <input type="radio" name="color" value="b" checked>Niebieski<br>
        <input type="checkbox" name="statute">Regulamin<br><br>
        <?php
    switch ($_GET['color']){
        case 'r':
            //uzupełnic screeen shoota 6
        ?>
    }
<script>
    document.form1.elements['b'].checked = true;
</script>
<input type="submit" value="Wyślij dane">

    </form>
</body>
</html>
     