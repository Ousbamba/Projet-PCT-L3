<?php
session_start();
include 'components/connect.php';

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['user_id']['id'])) {
    header("Location: connexion-artisan.php");
    exit;
}

// Récupérer l'ID de l'utilisateur depuis la session
$user_id = $_SESSION['user_id']['id'];

// Préparer et exécuter la requête pour récupérer les informations de l'utilisateur
$stmt = $conn->prepare("SELECT nom, prenom FROM users WHERE id = ?");
// $stmt->execute([$user_id]);

// Récupérer les résultats
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Vérifier si l'utilisateur a été trouvé et stocker les informations dans la session
if ($user) {
    $_SESSION['user_id']['nom_prenom'] = $user['nom'] . ' ' . $user['prenom'];
} else {
    $_SESSION['user_id']['nom_prenom'] = 'Utilisateur non trouvé';
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Mon propre CSS -->
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
       
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="css/styles.css"> 
    <link rel="stylesheet" href="css/profil-arti.css"> 
    <title>Artilink - Profil client</title>
</head>
<body>
    <!-- Header -->
    <?php include 'header-connect.php'; ?>
    <!-- Main Content -->
    <section class="profil">
        <h2 class="titre">Profil Client</h2>
        
        <div class="photo-profil">
            <img src="images/a-min.jpg" alt="Photo de Profil">
            <input type="file" id="photo-profil" name="photo-profil" accept=".jpg,.jpeg,.png">
            <label for="photo-profil"><i class="fas fa-camera"></i></label>
        </div>
        <div class="details">
            <p>Nom et Prénom: <span><?= $_SESSION['user_id']['nom_prenom']?></span></p>
        </div>
        <div class="btn">
            <button  class="modifier">Modifier le Profil</button>
        </div>
    </section>

    <!-- section footer -->
    <?php include 'footer.php'; ?>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="js/script.js"></script>
    <?php include 'components/alert.php'; ?>
</body>
</html>
