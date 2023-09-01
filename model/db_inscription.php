<?php 
require_once "../model/database.php";

if(isset($_POST['submit'])){ // c'est 
    $mail = htmlspecialchars($_POST['mail']);
    $authentification = htmlspecialchars($_POST['authentification']);
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mdp = htmlspecialchars($_POST['password']);
    


    $mdpCrypt = password_hash($mdp, PASSWORD_DEFAULT);

    // $imgName = $_FILES['photo']['name'];
    // $tmp = $_FILES['photo']['tmp_name'];
    // $destination = $_SERVER['DOCUMENT_ROOT'].'/PHP/exercise/espace_membre/corection/img/'.$imgName;
    // move_uploaded_file($tmp, $destination);

    $conn = dbConnexion();
    // se connecter
    $request = $conn->prepare("INSERT INTO user (email, login_nam, pseudo, mdp) VALUES(?, ?, ?, ?)");
    // executer la requete
    try{
        $request->execute(array($mail, $authentification, $pseudo, $mdpCrypt));
        header("Location: ../connexion.php");
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}