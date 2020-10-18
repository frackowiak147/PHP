<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>
<body>
    <h4>Formularz z danymi użytkownika</h4>
    <form action="./1_form_data.php" method="get">
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

        <input type="submit" value="Wyślij dane">
    </form>
</body>
</html>
     