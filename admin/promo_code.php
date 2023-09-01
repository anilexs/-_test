<?php
    session_start(); // a mettre avant le html c'est pour demarer une session
    // if(!(isset($_SESSION['id']))){ // si il n y a pas de session active 
    if((!(isset($_SESSION['id'])) || $_SESSION['role'] == "client")){ // si il n y a pas de session active 
        header("Location: ../connexion.php"); // rediriger vers le formulaire de connexion
    }
    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "<pre>";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/nav.css">
    <title>Document</title>
</head>
<body>
<?php require_once "../inc/nav.php"; ?>
    <form action="model/db_promo.php" method="post">
        <div>
            <label for="number">nombre de code a genere :</label>
            <input type="number" name="number" id="number">
        </div>
        <div>
            <label for="">valeur du code des code : </label>
            <input type="radio" name="valer" id="5" value="5">
            <label for="5">5€</label>
            
            <input type="radio" name="valer" id="10" value="10">
            <label for="10">10€</label>
            
            <input type="radio" name="valer" id="15" value="15">
            <label for="15">15€</label>
            
            <input type="radio" name="valer" id="20" value="20">
            <label for="20">20€</label>
            
            <input type="radio" name="valer" id="25" value="25">
            <label for="25">25€</label>
            
            <input type="radio" name="valer" id="50" value="50">
            <label for="50">50€</label>
            
            <input type="radio" name="valer" id="100" value="100">
            <label for="100">100€</label>
            
            <input type="radio" name="valer" id="150" value="150">
            <label for="150">150€</label>
        </div>
        <button name="submit">submit</button>
    </form>
<?php require_once "../inc/ftr.php"; ?>