<?php
    session_start();

    include "components/connect.php";

    if (isset($_POST['inscrire'])) {
        if (!empty($_POST['num_tel']) && !empty($_POST['mdp'])) {
            $user_id = unique_id();
            $nom_prenom = $_POST['nom_prenom'];
            $nom_prenom = htmlspecialchars($_POST['nom_prenom']);
            $num_tel = $_POST['num_tel'];
            $num_tel = htmlspecialchars($_POST['num_tel']);
            /* $mdp = sha1($_POST['mdp']); */
            $mdp = password_hash($_POST['mdp'], PASSWORD_BCRYPT);
            $terms = $_POST['terms'];

            $select_artisan = $conn->prepare("SELECT * FROM `users` WHERE num_tel = ?");
            $select_artisan->execute([$num_tel]);
            $fetch = $select_artisan->fetch(PDO::FETCH_ASSOC);
            
            if ($select_artisan->rowCount() > 0) {
                $error_msg[] = 'Ce numero à existe deja !';
            } else {
                $insert_users = $conn->prepare("INSERT INTO `users` (user_id, nom_prenom, num_tel, mdp, terms) 
                VALUES (?, ?, ?, ?, ?)");
                $insert_users->execute([$user_id, $nom_prenom, $num_tel, $mdp, $terms]);

                $select_user = $conn->prepare("SELECT * FROM `users` WHERE num_tel = ? AND mdp = ?");
                $select_user->execute([$num_tel, $mdp]);
                $row = $select_user->fetch();
                
                if ($select_user->rowCount() > 0) {
                    $_SESSION['user_id'] = $row['user_id'];
                    header("Location:connexion-client.php");
                }
            }   
        }
    };
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
        <link rel="stylesheet" href="css/inscription-artisan.css"> 
        <link rel="stylesheet" href="css/inscription-client.css">
    <style>
       
    </style>
    <title>Inscription - Artilink</title>
</head>
<body>
  <!-- debut entete -->
  <?php include 'header.php'; ?>
    <!-- fin entete -->
<div class="container">
    <h2>Inscription</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="username">Nom et Prénoms</label>
            <input type="text" maxlength="50" id="username" name="nom_prenom" placeholder="Votre Nom et Prénoms" required>
        </div>
        <div class="form-group">
            <label for="phone">Numéro de Téléphone</label>
            <input type="phone" maxlength="14"  id="email" name="num_tel" placeholder="Votre Numéro de Téléphone" required>
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="mdp" placeholder="Votre Mot de Passe" required>
        </div>

        <!-- Case à cocher pour les termes et conditions -->
        <div class="terms-policy">
            <input type="checkbox" name="terms" id="terms" required>
            <p>En vous inscrivant, vous acceptez nos <a href="charte-client.php">conditions générales</a> et notre <a href="charte-client.php">politique de confidentialité</a>.</p>
        </div>

        <div class="form-group">
            <input type="submit" value="S'inscrire" name="inscrire">
        </div>
        <div class="form-group login-link">
            <p>Vous avez déjà un compte ? <a href="connexion-client.php">Connectez-vous ici</a>.</p>
        </div>
    </form>
  </div>


<?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="js/script.js"></script>
<?php include 'components/alert.php'; ?>

</body>
</html>
