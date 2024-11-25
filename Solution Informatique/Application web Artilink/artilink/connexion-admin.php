<?php
session_start();
include "components/connect.php";

if (isset($_POST['connecter'])) {
    if (!empty($_POST['num_tel']) && !empty($_POST['mdp'])) {
        $num_tel = htmlspecialchars($_POST['num_tel']);
        $mdp = $_POST['mdp']; // Garder le mot de passe en clair pour l'instant

        $select_artisan = $conn->prepare("SELECT * FROM `admin` WHERE num_tel = ?");
        $select_artisan->execute([$num_tel]);
        $row = $select_artisan->fetch(PDO::FETCH_ASSOC);

        if ($select_artisan->rowCount() > 0 && password_verify($mdp, $row['mdp'])) { 
            $_SESSION['user_id'] = $row['user_id'];
            header("Location:admin.php");
            exit;
        } else {
            $error_msg[] = "Numéro de téléphone ou mot de passe incorrect!";
        }
    } else {
        $error_msg[] = "Veuillez remplir tous les champs.";
    }
}
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <!-- CSS -->
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/connexion-client.css">
    
    <style>
     
    </style>
    <title>Connexion - Artisan</title>
</head>
<body>
 <!-- debut entete -->

    <!-- fin entete -->
    <div class="container">
        <h2>Connexion Admin</h2>
        <form action="" method="POST">
            
            <div class="form-group">
                <label for="telephone">Numéro de téléphone :</label>
                <input type="tel"  maxlength="14" id="telephone" name="num_tel" placeholder="Votre numéro de téléphone" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="mdp" placeholder="Votre mot de passe" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Se connecter" name="connecter">
            </div>
            <div class="form-group signup-link">
          
        </form>
    </div>






 <!-- section footer -->

    <!--  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<script src="js/script.js"></script>
<?php include 'components/alert.php'; ?>

</body>
</html>
