<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vkládací formulář</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>

<body>
    <div class="container shadow p-3 mb-5 bg-light rounded text-left mt-5">
        <h1>Vkládání nových knih</h1>
        <form action="ScriptVkladani.php" method="post">
            <input type="text" name="isbnname" size="30"> ISBN (mezinárodní standardní číslo knihy) <br>
            <input type="text" name="jmenoname" size="30"> Křestní jméno autora <br>
            <input type="text" name="prijmeniname" size="30"> Příjmení autora <br>
        <input type="text" name="nazevname" size="30"> Název knihy <br>
        <textarea name="popisname" id="" cols="30" rows="10"> Popis knihy</textarea>
        <hr>
        <button type="submit">Odesli knihu do DB</button>
        <button type="reset">Reset</button>

    </form>
    <hr>
    <ul>
        <li><a href="index.php">Hlavní stránka</a></li>
        <li><a href="ScriptVypis.php">Přehled knih v databázi</a></li>
        <li><a href="ScriptVkladani.php">Vyhledávání knih v databázi</a></li>
    </ul>
</div>
    
</body>

</html>