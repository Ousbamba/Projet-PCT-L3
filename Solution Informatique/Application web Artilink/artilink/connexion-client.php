<?php
session_start();
include "components/connect.php";

if (isset($_POST['connecter'])) {
    if (!empty($_POST['num_tel']) && !empty($_POST['mdp'])) {
        $num_tel = htmlspecialchars($_POST['num_tel']);
        $mdp = $_POST['mdp'];

        $select_user = $conn->prepare("SELECT * FROM users WHERE num_tel = ?");
        $select_user->execute([$num_tel]);
        $row = $select_user->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            if (password_verify($mdp, $row['mdp'])) {
                $_SESSION['user_id'] = $row['user_id'];
                header("Location:trouver-artisan.php");
                exit;
            } else {
                echo "Échec de la vérification du mot de passe.<br>";
                $error_msg[] = "Numero de telephone ou mot de passe incorrect !";
            }
        } else {
            echo "Utilisateur non trouvé.<br>";
            $error_msg[] = "Numero de telephone ou mot de passe incorrect !";
        }
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
    <title>Connexion - Client</title>
</head>
<body>
 <!-- debut entete -->
 <?php include 'header.php'; ?>
    <!-- fin entete -->
    <div class="container">
        <h2>Connexion</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="telephone">Numéro de téléphone :</label>
                <input type="tel" maxlength="14" id="telephone" name="num_tel" placeholder="Votre numéro de téléphone" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="mdp" placeholder="Votre mot de passe" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Se connecter" name="connecter">
            </div>
            <div class="form-group signup-link">
                <p>Vous n'avez pas de compte? <a href="inscription-client.php">Inscrivez-vous ici</a>.</p>
            </div>
            <div class="form-group signup-link">
                <p>Vous êtes Artisan ? <a href="connexion-artisan.php">Connectez-vous ici</a>.</p>
            </div>
        </form>
    </div>






 <!-- section footer -->
 <?php include 'footer.php'; ?>
    <!--  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<script src="js/script.js"></script>
<?php include 'components/alert.php'; ?>
</body>
</html>
