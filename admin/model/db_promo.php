<?php
session_start();
require_once "../../model/database.php";

if(isset($_POST['submit'])){
    $number = htmlspecialchars($_POST['number']);
    $valer = htmlspecialchars($_POST['valer']);
    $admin = $_SESSION['login_nam'];

    // Créez une fonction pour générer le code
    function genererCode() {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $code = '';
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 4; $j++) {
                $code .= $characters[rand(0, strlen($characters) - 1)];
            }
            if ($i < 2) {
                $code .= '-';
            }
        }
        return $code;
    }

    // Connexion à la base de données
    $pdo = dbConnexion();

    try {
        while ($number > 0) {
            // Générer un code
            $code = genererCode();

            // Requête SELECT pour vérifier si le code existe déjà dans la base de données
            $query = "SELECT code FROM codes_promo WHERE code = ?";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$code]);
            $existingCode = $stmt->fetchColumn();

            if (!$existingCode) {
                // Le code n'existe pas encore dans la base de données, vous pouvez l'insérer
                $insertQuery = "INSERT INTO codes_promo (code, montant, admin_create) VALUES (?, ?, ?)";
                $insertStmt = $pdo->prepare($insertQuery);
                $insertStmt->execute([$code, $valer, $admin]);

                // Effectuer d'autres actions ici si nécessaire

                echo "Code inséré avec succès!". $number . "<br>";
                $number--;
            } else {
                echo "Code deja present !" . "<br>";
                // Le code existe déjà dans la base de données, passez au code suivant
                continue;
            }

        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
?>
