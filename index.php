<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>select, update, insert, delete</title>
</head>
<body>
    
    <fieldset>
        <legend>
            Dodawanie do bazy danych
        </legend>
        <form action="dodaj.php" method="post">
            Nazwa: <input type="text" name="nazwa">
            <input type="submit" name="submit" value="dodaj">
        </form>
    </fieldset>
    <div style='text-align:center;'>
        <a href="pobierz.php">Pobieranie bvazy z bazy danych</a>
        <a href="aktualizuj.php">Aktualizacja danych</a>
    <div>
</body>
</html>