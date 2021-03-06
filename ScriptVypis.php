<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přehled knih</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>

<body>
    <?php
    require 'phpconfig.php';
	
    if (isset($_POST['jmenoname']) && $_POST['jmenoname'] != '') {
        $jmeno = addslashes($_POST['jmenoname']);
        $query = 'SELECT * FROM seznam WHERE jmeno = "' . $jmeno . '" ';
    } else if (isset($_POST['prijmeniname']) && $_POST['prijmeniname'] != '') {
        $prijmeni = addslashes($_POST['prijmeniname']);
        $query = 'SELECT * FROM seznam WHERE prijmeni = "' . $prijmeni . '" ';
    } else if (isset($_POST['nazevname']) && $_POST['nazevname'] != '') {
        $nazev = addslashes($_POST['nazevname']);
        $query = 'SELECT * FROM seznam WHERE nazev = "' . $nazev . '" ';
    } else if (isset($_POST['isbnname']) && $_POST['isbnname'] != '') {
        $isbn = addslashes($_POST['isbnname']);
        $query = 'SELECT * FROM seznam WHERE isbn = "' . $isbn . '" ';
    } else {
        $query = 'SELECT * FROM seznam';
    }

    if (!($con = mysqli_connect($host, $name, $pass, $dbName)))
        die("Nelze se pripojit k DB serveru! </body></html>");

    if (!(mysqli_query($con, "SET NAMES utf8")))
        die("Nastaveni znakove sady se nezdarilo! </body></html>");


    if (!($vysledek = mysqli_query($con, $query)))
        die("Nelze provest dotaz! </body></html>");

    ?>

    <div class="container shadow p-3 mb-5 bg-light rounded text-left mt-5">
    <h1>Přehled knih</h1>
    <form action="">

        <table border="1" cellpadding="10px">
            <tr>
                <th>ISBN</th>
                <th>Příjmení</th>
                <th>Jméno</th>
                <th>Název</th>
                <th>Popis</th>
            </tr>

            <!-- TOHLE SE VYPISUJE V CYKLU WHILE  -->
            <?php
            while ($radekDB = mysqli_fetch_array($vysledek)) {
                echo "<tr><td>" . htmlspecialchars($radekDB['isbn']) . "</td><td>" . htmlspecialchars($radekDB['prijmeni']) . "</td><td>" .
                    htmlspecialchars($radekDB['jmeno']) . "</td><td>" . htmlspecialchars($radekDB['nazev']) . "</td><td>" .
                    htmlspecialchars($radekDB['popis']) . "</td></tr>";
            }
            mysqli_free_result($vysledek);
            mysqli_close($con);
            ?>

        </table>
    </form>
    <br>

    <hr>
    <ul>
        <li><a href="index.php">Hlavní stránka</a></li>
        <li><a href="ScriptVkladani.php">Vyhledávání knih v databázi</a></li>
        <li><a href="ScriptVypis.php">Přehled knih v databázi</a></li>
    </ul>
    </div>
</body>

</html>