<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/insciption.css">
    <title>Document</title>
</head>
<body>
 <?php require_once "inc/nav.php"; ?>
    <form action="model/db_inscription.php" method="post">
        <div class="contenaire">
            <div>
                <label for="">E-mail</label>
                <input type="email" class="input" name="mail" id="">
            </div>
            <div>
                <label for="">authentification nam</label>
                <input type="text" class="input" name="authentification" id="">
            </div>
            <div>
                <label for="">pseudo</label>
                <input type="text" class="input" name="pseudo" id="">
            </div>
            <div>
                <label for="">password</label>
                <input type="password" class="input" name="password" id="">
            </div>
        </div>
        <div class="btn">
            <button name="submit"></button>
        </div>
    </form>

<?php require_once "inc/ftr.php"; ?>