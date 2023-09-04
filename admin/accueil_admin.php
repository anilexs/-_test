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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/accueil_admin.css">
    <link rel="stylesheet" href="../asset/css/nav.css">
    <title>Document</title>
</head>
<body>
    <?php require_once "../inc/nav.php";?>
    <div class="container">

    </div>
</body>
</html>