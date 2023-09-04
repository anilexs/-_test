<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/nav.css">
    <link rel="stylesheet" href="asset/css/insciption.css">
    <title>Document</title>
</head>
<body>

 <?php require_once "inc/nav.php"; ?>

    <form action="model/db_connexion.php" method="post" class="form">
        <div class="contenaire">
            <div>
                <label for="">E-mail / authentification nam</label>
                <input type="text" class="input" name="id" id="">
            </div>
            <div>
                <label for="">password</label>
                <input type="password" class="input" name="mdp" id="">
            </div>
            <div>
                <input type="checkbox" name="checkbox" id="">
                <label for="">rester connecté pendant 30 jour</label>
            </div>
            <button name="connexion"></button>
        </div>
    </form>

<?php require_once "inc/ftr.php"; ?>