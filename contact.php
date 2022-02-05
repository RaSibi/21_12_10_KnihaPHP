<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $from="\n" . htmlspecialchars($_POST['name']) . "\n".htmlspecialchars($_POST['email']);
    $msg=htmlspecialchars($_POST['text']) . $from;
    $subject=htmlspecialchars($_POST['subject']);
    $mail="rosigma@seznam.cz";

    mail($mail,$subject,$msg);
    ?>
</body>
</html>