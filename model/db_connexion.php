<?php
session_start();
require_once "../model/database.php";
if(isset($_POST['connexion'] )){
    $login  = $_POST['id'];
    $mdp = $_POST['mdp'];
    // $checkboxValue = isset($_POST['checkbox']) ? 1 : 0;
    // etablir la connexion avec la db
    $connect = dbConnexion();
    // preparer la requette
    $conexionRequest = $connect->prepare("SELECT * FROM user WHERE login_nam  = ? OR email = ?");
    // executer la requette
    $conexionRequest->execute(array($login, $login));
    // recupere le resultat de la requette
    $utilisateur = $conexionRequest->fetch(PDO::FETCH_ASSOC); // convertir le resultat de la requete en tableau pour le manipuler facilement



    if(empty($utilisateur)){ // si le tableau $utilisateur est vide
        // echo "utilisateur inconnu...";
        $_SESSION['error'] = "utilisateur inconnu..."; // ajouter le message d'erreur dans le tableau $_SESSION
        header("Location: ../connexion.php"); // rediriger vers connexion.php
    }else{ // sinon
        // on verifie le mot de passe
        // la fonction password_verify prend 2 parametre :
            // le premier correspond a ce que le user a taper dans la formulaire
            // le deuxieme ce qui se trouve dans la base de donnees
        if(password_verify($mdp, $utilisateur['mdp'])){
            // la variable $_SESSION est un tableau
            // toutes les superglobal en php est un tableau
            //creer les variable de session
            $_SESSION["id"] = $utilisateur['id_user'];
            $_SESSION["pseudo"] = $utilisateur['pseudo'];
            $_SESSION["img"] = $utilisateur['img'];
            $_SESSION["role"] = $utilisateur['role'];
            $_SESSION["login_nam"] = $utilisateur['login_nam'];
            $_SESSION["sold"] = $utilisateur['sold'];
            $_SESSION["img"] = $utilisateur['img'];

            // creation du cookie qui va stocker l'identifiant de l'utilisateur pour permetre une meilleure experience
            // setcookie("id_user", $utilisateur['id_membre'], time() + 3600, '/', "localhost", false, true);

            // $_SESSION = [
            // 'id' => 1,
            // "pseudo" => "WassilaDors",
            // "img" => "sommeil-enfant-dormir.jpg"
            // ];
            if($_SESSION['role'] == "admin"){
                header("Location: ../admin/accueil_admin.php");
            }else{
                header("Location: ../accueil.php");
            }

        }else{
            header("Location: ../connexion.php");
        }
    }
}
    if(isset($_POST['logout'])){
        session_destroy();
        echo"<script>location.href='../connexion.php'</script>";
    }
?>