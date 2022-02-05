<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vyhledávací formulář</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>

<body>
    <?php
    require 'phpconfig.php';

    if (isset($_POST['isbnname']) && isset($_POST['prijmeniname']) && isset($_POST['nazevname']) ) {
        
        if (!($con = mysqli_connect($host, $name, $pass, $dbName)))
            die("Nelze se pripojit k DB serveru! </body></html>");

        if (!(mysqli_query($con, "SET NAMES utf8")))
            die("Nastaveni znakove sady se nezdarilo! </body></html>");

        if (mysqli_query($con, "INSERT INTO seznam (isbn, jmeno, prijmeni, nazev, popis) VALUES ('" .
            addslashes($_POST['isbnname']) . "', '" .
            addslashes($_POST['jmenoname']) . "', '" .
            addslashes($_POST['prijmeniname']) . "', '" .
            addslashes($_POST['nazevname']) . "', '" .
            addslashes($_POST['popisname']) . "') ")) {
            echo "Uspesne vlozeno";
        } else {
            echo "Nelze provest dotaz!" . mysqli_error($con);
        }
        mysqli_close($con);
    }

    ?>
    <div class="container shadow p-3 mb-5 bg-light rounded text-left mt-5">
    <h1>Vyhledávání knih</h1>
    <form action="ScriptVypis.php" method="post">
        <input type="text" name="prijmeniname"> Příjmení autora <br>
        <input type="text" name="jmenoname"> Křestní jméno autora <br>
        <input type="text" name="nazevname"> Název knihy <br>
        <input type="text" name="isbnname"> ISBN <br>
        <hr>
        <button type="submit">Vyhledej</button>
        <button type="reset">Reset</button>

    </form>
    <hr>
    <ul>
        <li><a href="index.php">Hlavní stránka</a></li>
        <li><a href="ScriptVypis.php">Přehled knih v databázi</a></li>
    </ul>
    </div>

</body>

</html>